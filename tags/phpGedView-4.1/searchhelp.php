<?php
/**
 * Search in help files 
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2007  John Finlay and Others
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
 * This Page Is Valid XHTML 1.0 Transitional! > 3 September 2005
 *
 * @package PhpGedView
 * @version $Id$
 */

require "config.php";

print_simple_header($pgv_lang["hs_title"]);

// On first entry, initially check the boxes
if (!isset($action)) {
	$searchuser = "yes";
	$searchhow = "any";
	$searchintext = "true";
}

// If no admin, always search in user help
if (!UserGedcomAdmin(GetUserName())) $searchuser = "yes";

// Initialize variables
if (!isset($searchtext)) $searchtext = "";
if (!isset($searchuser)) $searchuser = "no";
if (!isset($searchconfig)) $searchconfig = "no";
$found = 0;

?>
<script type="text/javascript">
<!--
function checkfrm(frm) {
	if (frm.searchtext.value.length<2) {
		alert("<?php print $pgv_lang["search_more_chars"]?>");
		frm.searchtext.focus();
		return false;
	}
	return true;
}
//-->
</script>
<?php
// Print the form for input
print "<form name=\"entersearch\" action=\"$SCRIPT_NAME\" method=\"post\" onsubmit=\"return checkfrm(this);\">";
print "<input name=\"action\" type=\"hidden\" value=\"search\" />";
print "<table class=\"facts_table $TEXT_DIRECTION\">";
print "<tr><td colspan=\"2\" class=\"topbottombar\">";
print_help_link("hs_title_help", "qm", "hs_title");
print $pgv_lang["hs_title"]."</td></tr>";

// Enter the keyword(s)
print "<tr><td class=\"descriptionbox width20 wrap vmiddle\">";
print_help_link("hs_keyword_advice", "qm", "hs_keyword");
print $pgv_lang["hs_keyword"]."</td>";
print "<td class=\"optionbox\"><input type=\"text\" name=\"searchtext\" dir=\"ltr\" value=\"".$searchtext."\" /></td></tr>";

// How to search
print "<tr ><td class=\"descriptionbox width20 wrap vmiddle\">";
print_help_link("hs_searchhow_advice", "qm", "hs_searchhow");
print $pgv_lang["hs_searchhow"]."</td>";
print "<td class=\"optionbox\">";
print "<input type=\"radio\" name=\"searchhow\" dir=\"ltr\" value=\"any\"";
if ($searchhow == "any") print " checked=\"checked\"";
print " />".$pgv_lang["hs_searchany"]."<br />";
print "<input type=\"radio\" name=\"searchhow\" dir=\"ltr\" value=\"all\"";
if ($searchhow == "all") print " checked=\"checked\"";
print " />".$pgv_lang["hs_searchall"]."<br />";
print "<input type=\"radio\" name=\"searchhow\" dir=\"ltr\" value=\"sentence\"";
if ($searchhow == "sentence") print " checked=\"checked\"";
print " />".$pgv_lang["hs_searchsentence"]."<br />";
print "</td></tr>";

print "<tr><td ";
if (UserIsAdmin(GetUserName())) print "rowspan=\"2\" ";
print "class=\"descriptionbox width20 wrap vmiddle\">";
print_help_link("hs_searchin_advice", "qm", "hs_searchin");
print $pgv_lang["hs_searchin"]."</td>";
// Show choice where to search only to admins
if (UserIsAdmin(GetUserName())) {
	print "<td class=\"optionbox\"><input type=\"checkbox\" name=\"searchuser\" dir=\"ltr\" value=\"yes\"";
	if ($searchuser == "yes") print " checked=\"checked\"";
	print " />".$pgv_lang["hs_searchuser"]."<br />";
	print "<input type=\"checkbox\" name=\"searchconfig\" dir=\"ltr\" value=\"yes\"";
	if ($searchconfig == "yes") print " checked=\"checked\"";
	print " />".$pgv_lang["hs_searchconfig"]."</td></tr><tr>";
}
print "<td class=\"optionbox\"><input type=\"radio\" name=\"searchintext\" dir=\"ltr\" value=\"true\"";
if ($searchintext == "true") print " checked=\"checked\"";
print " />".$pgv_lang["hs_intruehelp"]."<br />";
print "<input type=\"radio\" name=\"searchintext\" dir=\"ltr\" value=\"all\"";
if ($searchintext == "all") print " checked=\"checked\"";
print " />".$pgv_lang["hs_inallhelp"]."<br />";
print "</td></tr>";

// Print the buttons
print "<tr><td class=\"topbottombar\" colspan=\"2\">";
print "<input type=\"submit\" name=\"entertext\" value=\"".$pgv_lang["hs_search"]."\" />";
print "<input type=\"button\" value=\"".$pgv_lang["hs_close"]."\" onclick='self.close();' />";
print "</td></tr>";

// Perform the search
if ((!empty($searchtext)) && strlen($searchtext)>1 && (($searchuser == "yes") || ($searchconfig == "yes")))  {

	$helpvarnames = array();
	unset($pgv_lang);
	
	// Load the user help if chosen
	if ($searchuser == "yes") loadLangFile("pgv_help");

	// Load the config help if chosen
	if ($searchconfig == "yes") loadLangFile("pgv_confighelp");

	// Find all helpvars, so we know what vars to check after the lang.xx file has been reloaded
	foreach ($pgv_lang as $text => $value) {
		if ($searchintext == "all") $helpvarnames[] = $text;
		else if ((substr($text, -5) == "_help" && $value{0}!="_") || (substr($text, -4) == ".php")) $helpvarnames[] = $text;
	}

	// Reload lang.xx file
	unset($pgv_lang);
	loadLangFile("pgv_lang, pgv_confighelp");

	// Split the search criteria if all or any is chosen. Otherwise, just fill the array with the sentence
	$criteria = array();
	if ($searchhow == "sentence") $criteria[] = $searchtext;
	else $criteria = preg_split("/ /", $searchtext);
	
	// Search in the previously stored vars for a hit and print it
	foreach ($helpvarnames as $key => $value) {
		$repeat = 0;
		$helptxt = print_text($value,0,1);
		// Remove hyperlinks
		$helptxt = preg_replace("/<a[^<>]+>/", "", $helptxt);
		$helptxt = preg_replace("/<\/a>/", "", $helptxt);
		// Remove unresolved language variables
		$helptxt = preg_replace("/#pgv[^#]+#/i", "", $helptxt);
		// Save the original text for clean search
		$helptxtorg = $helptxt;
		// Scroll through the criteria
		$cfound = 0;
		$cnotfound = 0;
		foreach ($criteria as $ckey => $criterium) {
			// See if there is a case insensitive hit
			if (strpos(str2upper($helptxtorg), str2upper($criterium))) {
				// Set the search string for preg_replace, case insensitive
				$srch = "/$criterium/i";
				// The \\0 is for wrapping the existing string in the text with the span
				$repl = "<span class=\"search_hit\">\\0</span>";
				$helptxt = preg_replace($srch, $repl, $helptxt);
				$cfound++;
			}
			else $cnotfound++;
		}
		if (
		(($searchhow == "any") && ($cfound >= 1)) ||
		(($searchhow == "all") && ($cnotfound == 0)) ||
		(($searchhow == "sentence") && ($cfound >= 1))) {
			print "<tr><td colspan=\"2\" class=\"descriptionbox wrap $TEXT_DIRECTION\">".$helptxt."</td></tr>";
			$found++;
			//-- if there is more than 100 the user should refine their search
			if ($found>100) break;
		}
	}
}

// Print total results, if a search has been performed
if (!empty($searchtext)) {
	print "<tr><td colspan=\"2\" class=\"topbottombar\">".$pgv_lang["hs_results"]." ".$found;
	print "</td></tr>";
}
print "</table></form>";
?>
<script language="JavaScript" type="text/javascript">
	document.entersearch.searchtext.focus();
</script>
<?php
print_simple_footer();
?>