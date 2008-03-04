<?php
/**
 * Review Changes Block
 *
 * This block prints the changes that still need to be reviewed and accepted by an administrator
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2003  John Finlay and Others
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 * @ersion $Id$
 * @package PhpGedView
 * @subpackage Blocks
 * @todo add a time configuration option
 */

$PGV_BLOCKS["review_changes_block"]["name"]			= $pgv_lang["review_changes_block"];
$PGV_BLOCKS["review_changes_block"]["descr"]		= "review_changes_descr";
$PGV_BLOCKS["review_changes_block"]["canconfig"]	= false;
$PGV_BLOCKS["review_changes_block"]["config"]		= array(
	"cache"=>0,
	"days"=>1,
	"sendmail"=>"yes"
	);

/**
 * Print Review Changes Block
 *
 * Prints a block allowing the user review all changes pending approval
 */
function review_changes_block($block = true, $config="", $side, $index) {
	global $pgv_lang, $GEDCOM, $GEDCOMS, $ctype, $SCRIPT_NAME, $QUERY_STRING, $factarray, $PGV_IMAGE_DIR, $PGV_IMAGES;
	global $pgv_changes, $LAST_CHANGE_EMAIL, $ALLOW_EDIT_GEDCOM, $TEXT_DIRECTION, $SHOW_SOURCES, $PGV_BLOCKS;
	global $PHPGEDVIEW_EMAIL;

	if (!$ALLOW_EDIT_GEDCOM) return;

	if (empty($config)) $config = $PGV_BLOCKS["review_changes_block"]["config"];

	if (count($pgv_changes) > 0) {
		if (!isset($LAST_CHANGE_EMAIL)) $LAST_CHANGE_EMAIL = 0;
		//-- if the time difference from the last email is greater than 24 hours then send out another email
		if (time()-$LAST_CHANGE_EMAIL > (60*60*24*$config["days"])) {
			$LAST_CHANGE_EMAIL = time();
			write_changes();
			if ($config["sendmail"]=="yes") {
				foreach(get_all_users() as $user_id=>$user_name) {
					if (userCanAccept($user_id)) {
						//-- send message
						$message = array();
						$message["to"]=$user_name;
						$message["from"] = $PHPGEDVIEW_EMAIL;
						$message["subject"] = $pgv_lang["review_changes_subject"];
						$message["body"] = $pgv_lang["review_changes_body"];
						$message["method"] = get_user_setting($user_id,'contactmethod');
						$message["url"] = basename($SCRIPT_NAME)."?".$QUERY_STRING;
						$message["no_from"] = true;
						addMessage($message);
					}
				}
			}
		}
		if (userCanEdit()) {
			print "<div id=\"review_changes_block\" class=\"block\">\n";
			print "<table class=\"blockheader\" cellspacing=\"0\" cellpadding=\"0\" style=\"direction:ltr;\"><tr>";
			print "<td class=\"blockh1\" >&nbsp;</td>";
			print "<td class=\"blockh2\" ><div class=\"blockhc\">";
			print_help_link("review_changes_help", "qm");
			if ($PGV_BLOCKS["review_changes_block"]["canconfig"]) {
				$username = getUserName();
				if ((($ctype=="gedcom")&&(userGedcomAdmin())) || (($ctype=="user")&&(!empty($username)))) {
					if ($ctype=="gedcom") $name = preg_replace("/'/", "\'", $GEDCOM);
					else $name = $username;
					print "<a href=\"javascript: configure block\" onclick=\"window.open('index_edit.php?name=$name&amp;ctype=$ctype&amp;action=configure&amp;side=$side&amp;index=$index', '_blank', 'top=50,left=50,width=600,height=350,scrollbars=1,resizable=1'); return false;\">";
					print "<img class=\"adminicon\" src=\"$PGV_IMAGE_DIR/".$PGV_IMAGES["admin"]["small"]."\" width=\"15\" height=\"15\" border=\"0\" alt=\"".$pgv_lang["config_block"]."\" /></a>\n";
				}
			}
			print "<b>".$pgv_lang["review_changes"]."</b>";
			print "</div></td>";
			print "<td class=\"blockh3\">&nbsp;</td></tr>\n";
			print "</table>";
			print "<div class=\"blockcontent\">";
			if (userCanAccept()) print "<a href=\"javascript:;\" onclick=\"window.open('edit_changes.php','_blank','width=600,height=500,resizable=1,scrollbars=1'); return false;\">".$pgv_lang["accept_changes"]."</a><br />\n";
			if ($block) print "<div class=\"small_inner_block, $TEXT_DIRECTION\">\n";
			if ($config["sendmail"]=="yes") {
				print $pgv_lang["last_email_sent"].format_timestamp($LAST_CHANGE_EMAIL)."<br />\n";
				print $pgv_lang["next_email_sent"].format_timestamp($LAST_CHANGE_EMAIL+(60*60*24*$config["days"]))."<br /><br />\n";
			}
			foreach($pgv_changes as $cid=>$changes) {
				$change = $changes[count($changes)-1];
				if ($change["gedcom"]==$GEDCOM) {
					$gedrec = find_updated_record($change["gid"]);
					if (empty($gedrec)) $gedrec = $change["undo"];
					$ct = preg_match("/0 @(.*)@(.*)/", $gedrec, $match);
					if ($ct>0) $type = trim($match[2]);
					else $type = "INDI";
					if ($type=="INDI") {
						print "<b>".PrintReady(get_person_name($change["gid"]))."</b>&nbsp;";
						if ($TEXT_DIRECTION=="rtl") print getRLM();
						print "(".$change["gid"].")";
						if ($TEXT_DIRECTION=="rtl") print getRLM();
					}
					else if ($type=="FAM") {
						print "<b>".PrintReady(get_family_descriptor($change["gid"]))."</b>&nbsp;";
						if ($TEXT_DIRECTION=="rtl") print getRLM();
						print "(".$change["gid"].")";
						if ($TEXT_DIRECTION=="rtl") print getRLM();
					}
					else if ($type=="SOUR") {
						if ($SHOW_SOURCES>=getUserAccessLevel()) {
							print "<b>".PrintReady(get_source_descriptor($change["gid"]))."</b>&nbsp;";
							if ($TEXT_DIRECTION=="rtl") print getRLM();
							print "(".$change["gid"].")";
							if ($TEXT_DIRECTION=="rtl") print getRLM();
						}
					}
					else {
						print "<b>".$factarray[$type]."</b>&nbsp;";
						if ($TEXT_DIRECTION=="rtl") print getRLM();
						print "(".$change["gid"].")";
						if ($TEXT_DIRECTION=="rtl") print getRLM();
						print " - ".$pgv_lang[$change["type"]]."\n<br />";
					}
					if ($block) print "<br />";
					if ($type=="INDI") print " <a href=\"individual.php?pid=".$change["gid"]."&amp;ged=".$change["gedcom"]."&amp;show_changes=yes\">".$pgv_lang["view_change_diff"]."</a>\n<br />";
					if ($type=="FAM") print " <a href=\"family.php?famid=".$change["gid"]."&amp;ged=".$change["gedcom"]."&amp;show_changes=yes\">".$pgv_lang["view_change_diff"]."</a>\n<br />";
					if (($type=="SOUR") && ($SHOW_SOURCES>=getUserAccessLevel())) print " <a href=\"source.php?sid=".$change["gid"]."&amp;ged=".$change["gedcom"]."&amp;show_changes=yes\">".$pgv_lang["view_change_diff"]."</a>\n<br />";
				}
			}
			if ($block) print "</div>\n";
			print "</div>";
			print "</div>";
		}
	}
}

function review_changes_block_config($config) {
	global $pgv_lang, $PGV_BLOCKS;
	if (empty($config)) $config = $PGV_BLOCKS["review_changes_block"]["config"];
	print $pgv_lang["review_changes_email"];
	print "&nbsp;<select name='sendmail'>";
		print "<option value='yes'";
		if ($config["sendmail"]=="yes") print " selected='selected'";
		print ">".$pgv_lang["yes"]."</option>";
		print "<option value='no'";
		if ($config["sendmail"]=="no") print " selected='selected'";
		print ">".$pgv_lang["no"]."</option>";
	print "</select><br /><br />";
	print $pgv_lang["review_changes_email_freq"]."&nbsp;<input type='text' name='days' value='".$config["days"]."' size='2' />";
	// Cache file life
	if ($ctype=="gedcom") {
  		print "<tr><td class=\"descriptionbox wrap width33\">";
			print_help_link("cache_life_help", "qm");
			print $pgv_lang["cache_life"];
		print "</td><td class=\"optionbox\">";
			print "<input type=\"text\" name=\"cache\" size=\"2\" value=\"".$config["cache"]."\" />";
		print "</td></tr>";
	}
	// Cache file life is not configurable by user:  anything other than "no cache" doesn't make sense
	print "<input type=\"hidden\" name=\"cache\" value=\"0\" />";
}

?>
