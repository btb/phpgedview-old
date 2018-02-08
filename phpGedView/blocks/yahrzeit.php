<?php
/**
 * Yahrzeit Block
 *
 * This block will print a list of upcoming yahrzeit (hebrew death anniversaries)
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2008 to 2018  PGV Development Team.  All rights reserved.
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
 * @package PhpGedView
 * @subpackage Blocks
 * @author Greg Roach, fisharebest@users.sourceforge.net
 * @version $Id$
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

define('PGV_YAHRZEIT_PHP', '');

$PGV_BLOCKS['print_yahrzeit']['name']     =$pgv_lang['yahrzeit_block'];
$PGV_BLOCKS['print_yahrzeit']['descr']    ='yahrzeit_descr';
$PGV_BLOCKS['print_yahrzeit']['canconfig']=true;
$PGV_BLOCKS['print_yahrzeit']['config']   =array(
	'cache'        =>1,
	'days'         =>30,
	'infoStyle'    =>'style2',
	'allowDownload'=>'yes'
);

// this block prints a list of upcoming yahrzeit events of people in your gedcom
function print_yahrzeit($block=true, $config='', $side, $index) {
	global $pgv_lang, $factarray, $ctype, $TEXT_DIRECTION;
	global $lang_short_cut, $LANGUAGE;
	global $PGV_IMAGE_DIR, $PGV_IMAGES, $PGV_BLOCKS;
	global $DAYS_TO_SHOW_LIMIT, $SERVER_URL;

	$block=true; // Always restrict this block's height

	if (empty($config))
		$config=$PGV_BLOCKS['print_yahrzeit']['config'];

	if (empty($config['infoStyle'    ])) $config['infoStyle'    ]='style2';
	if (empty($config['allowDownload'])) $config['allowDownload']='no';
	if (empty($config['days'         ])) $config['days'         ]=$DAYS_TO_SHOW_LIMIT;

	if ($config['days']<1                  ) $config['days']=1;
	if ($config['days']>$DAYS_TO_SHOW_LIMIT) $config['days']=$DAYS_TO_SHOW_LIMIT;

	$startjd=server_jd();
	$endjd  =$startjd+max(min($config['days'], 1), $DAYS_TO_SHOW_LIMIT)-1;

	if (!PGV_USER_ID) $allowDownload = false;
	else $allowDownload = ($config['allowDownload']=='yes');

	$id="yahrzeit";
	$title = print_help_link('yahrzeit_help', 'qm','',false,true);
	if ($PGV_BLOCKS['print_yahrzeit']['canconfig']) {
		if ($ctype=="gedcom" && PGV_USER_GEDCOM_ADMIN || $ctype=="user" && PGV_USER_ID) {
			if ($ctype=="gedcom") {
				$name = PGV_GEDCOM;
			} else {
				$name = PGV_USER_NAME;
			}
			$title .= "<a href=\"javascript: configure block\" onclick=\"window.open('".encode_url("index_edit.php?name={$name}&ctype={$ctype}&action=configure&side={$side}&index={$index}")."', '_blank', 'top=50,left=50,width=600,height=350,scrollbars=1,resizable=1'); return false;\">";
			$title .= "<img class=\"adminicon\" src=\"{$PGV_IMAGE_DIR}/{$PGV_IMAGES['admin']['small']}\" width=\"15\" height=\"15\" border=\"0\" alt=\"{$pgv_lang['config_block']}\" /></a>";
		}
	}
	$title .= $pgv_lang['yahrzeit_block'];
	$content = "";

	// The standard anniversary rules cover most of the Yahrzeit rules, we just
	// need to handle a few special cases.
	// Fetch normal anniversaries...
	$yahrzeiten=array();
	$hidden=0;
	for ($jd=$startjd-1; $jd<=$endjd+30;++$jd) {
		foreach (get_anniversary_events($jd, 'DEAT _YART') as $fact) {
			// Extract hebrew dates only
			if ($fact['date']->date1->CALENDAR_ESCAPE()=='@#DHEBREW@' && $fact['date']->MinJD()==$fact['date']->MaxJD()) {
				// Apply privacy
				if (displayDetailsById($fact['id']) && showFactDetails($fact['fact'], $fact['id']) && !FactViewRestricted($fact['id'], $fact['factrec'])) {
					$yahrzeiten[]=$fact;
				} else {
					++$hidden;
				}
			}
		}
	}

	// ...then adjust dates
	foreach ($yahrzeiten as $key=>$yahrzeit) {
		if (strpos('1 DEAT', $yahrzeit['factrec'])!==false) { // Just DEAT, not _YART
			$today=new JewishDate($yahrzeit['jd']);
			$hd=$yahrzeit['date']->MinDate();
			$hd1=new JewishDate($hd);
			$hd1->y+=1;
			$hd1->SetJDFromYMD();
			// Special rules.  See http://www.hebcal.com/help/anniv.html
			// Everything else is taken care of by our standard anniversary rules.
			if ($hd->d==30 && $hd->m==2 && $hd->y!=0 && $hd1->DaysInMonth()<30) { // 30 CSH
				// Last day in CSH
				$yahrzeit[$key]['jd']=JewishDate::YMDtoJD($today->y, 3, 1)-1;
			}
			if ($hd->d==30 && $hd->m==3 && $hd->y!=0 && $hd1->DaysInMonth()<30) { // 30 KSL
				// Last day in KSL
				$yahrzeit[$key]['jd']=JewishDate::YMDtoJD($today->y, 4, 1)-1;
			}
			if ($hd->d==30 && $hd->m==6 && $hd->y!=0 && $today->DaysInMonth()<30 && !$today->IsLeapYear()) { // 30 ADR
				// Last day in SHV
				$yahrzeit[$key]['jd']=JewishDate::YMDtoJD($today->y, 6, 1)-1;
			}
		}
	}

	$count=0;
	$eventList = '';	// List of Death events to be passed to ical.php

	switch ($config['infoStyle']) {
	case "style1": // List style
		$func = 'ordinal_suffix_'.$lang_short_cut[$LANGUAGE];
		foreach ($yahrzeiten as $yahrzeit)
			if ($yahrzeit['jd']>=$startjd && $yahrzeit['jd']<$startjd+$config['days']) {
				$count ++;
				$eventList .= "D{$yahrzeit['id']},";		// Yahrzeiten are death anniversaries
				$anniversary = $yahrzeit['anniv'];
				if (function_exists($func)) $anniversary .= $func($anniversary);	// Create ordinal suffix if we know how to do it

				$today=new JewishDate($yahrzeit['jd']);
				$td=new GedcomDate($today->Format('@ A O E'));

				$ind=person::GetInstance($yahrzeit['id']);
				$url = $ind->getLinkUrl();
				$content .= "<a href=\"".encode_url($url)."\" class=\"list_item name2\">".PrintReady($ind->getListName())."</a>".$ind->getSexImage();
				$addname=$ind->getAddName();
				if ($addname) {
					$content .= "<br /><a href=\"".encode_url($url)."\" class=\"list_item name2\">".PrintReady($addname)."</a>";
				}

				$content .= "<div class=\"indent\">";
				$text = $pgv_lang["year_yahrzeit"];
				$text = str_replace('#yahrzeit_date#', $td->Display(true, NULL, array('gregorian')), $text);	// Current date, in Jewish and Gregorian formats
				$text = str_replace('#yahrzeit#', $anniversary, $text);		// Ordinal form of actual Yahrzeit
				$text = str_replace('#event_date#', $yahrzeit['date']->Display(true, NULL, array()), $text);	// Event date
				$content .= $text;
				$content .= "</div>";
			}
		$content .= $pgv_lang["total_names"].": ".$count;
		if ($hidden) {
			$content .= "<br /><span class=\"warning\">{$pgv_lang['hidden']} : {$hidden}</span>";
		}
		if ($allowDownload && $count!=0) {
			global $whichFile;
			$whichFile = PGV_PHPGEDVIEW.'.ics';
			$linkTitle = print_text("download_file", 0, 2);
			$content .= "<br /><a href=\"".encode_url("ical.php?events={$eventList}")."\"><img src=\"images/ical.png\" border=\"0\" alt=\"".$linkTitle."\" title=\"".$linkTitle."\" /></a>";
		}
		break;
	case "style2": // Table style
		require_once PGV_ROOT.'js/sorttable.js.htm';
		require_once PGV_ROOT.'includes/classes/class_gedcomrecord.php';
		$table_id = "ID".floor(microtime(true)*1000000); // sorttable requires a unique ID
		$content .= "<table id=\"{$table_id}\" class=\"sortable list_table center\">";
		$content .= "<tr>";
		$content .= "<th class=\"list_label\">{$factarray['NAME']}</th>";
		$content .= "<th style=\"display:none\">GIVN</th>";
		$content .= "<th class=\"list_label\">{$factarray['_YART']}</th>";
		$content .= "<th class=\"list_label\"><img src=\"./images/reminder.gif\" alt=\"{$pgv_lang['anniversary']}\" title=\"{$pgv_lang['anniversary']}\" border=\"0\" /></th>";
		$content .= "<th class=\"list_label\">{$factarray['DATE']}</th>";
		$content .= "</tr>";

		foreach ($yahrzeiten as $yahrzeit) {
			if ($yahrzeit['jd']>=$startjd && $yahrzeit['jd']<$startjd+$config['days']) {
				$count ++;
				$eventList .= "D{$yahrzeit['id']},";		// Yahrzeiten are death anniversaries
				$ind=person::GetInstance($yahrzeit['id']);
				$content .= "<tr>";
				// Record name(s)
				$name=$ind->getListName();
				$url=$ind->getLinkUrl();
				$content .= "<td class=\"list_value_wrap\" align=\"".get_align($name)."\">";
				$content .= "<a href=\"".encode_url($url)."\" class=\"list_item name2\" dir=\"".$TEXT_DIRECTION."\">".PrintReady($name)."</a>";
				$content .= $ind->getSexImage();
				$addname=$ind->getAddName();
				if ($addname) {
					$content .= "<br /><a href=\"".encode_url($url)."\" class=\"list_item\">".PrintReady($addname)."</a>";
				}
				$content .= "</td>";

				// GIVN for sorting
				$content .= "<td style=\"display:none\">";
				$exp = explode(",", str_replace('<', ',', $name).",");
				$content .= $exp[1];
				$content .= "</td>";

				$today=new JewishDate($yahrzeit['jd']);
				$td=new GedcomDate($today->Format('@ A O E'));

				// upcoming yahrzeit dates
				$content .= "<td class=\"list_value_wrap\">";
				$content .= "<a href=\"".$url."\" class=\"list_item url\">".$td->Display(true, NULL, array('gregorian'))."</a>"; // hCalendar:url
				$content .= "&nbsp;</td>";

				// Anniversary
				$content .= "<td class=\"list_value_wrap rela\">";
				$anniv = $yahrzeit['anniv'];
				if ($anniv==0) {
					$content .= '<a name="0">&nbsp;</a>';
				} else {
					$content .= "<a name=\"{$anniv}\">{$anniv}</a>";
				}

				// death/yahrzeit event date
				$content .= "<td class=\"list_value_wrap\">";
				$content .= "<a name='{$yahrzeit['jd']}'>".$yahrzeit['date']->Display(true, NULL, array())."</a>";
				$content .= "</td>";

				$content .= "</tr>";
			}
		}

		// table footer
		$content .= "<tr class=\"sortbottom\">";
		$content .= "<td class=\"list_label\">";
		$content .= '<a href="javascript:;" onclick="sortByOtherCol(this,1)"><img src="images/topdown.gif" alt="" border="0" /> '.$factarray["GIVN"].'</a><br />';
		$content .= $pgv_lang["total_names"].": ".$count;
		if ($hidden) {
			$content .= "<br /><span class=\"warning\">{$pgv_lang['hidden']} : {$hidden}</span>";
		}
		$content .= "</td>";
		$content .= "<td style=\"display:none\">GIVN</td>";
		$content .= "<td>";
		if ($allowDownload && $count!=0) {
			global $whichFile;
			$whichFile = PGV_PHPGEDVIEW.'.ics';
			$linkTitle = print_text("download_file", 0, 2);
			$content .= "<br /><a href=\"".encode_url("ical.php?events={$eventList}")."\"><img src=\"images/ical.png\" border=\"0\" alt=\"".$linkTitle."\" title=\"".$linkTitle."\" /></a>";
		}
		$content .= '</td><td>&nbsp;</td><td>&nbsp;</td></tr>';
		$content .= '</table>';
		break;
	}

	global $THEME_DIR;
	if ($block) {
		require $THEME_DIR.'templates/block_small_temp.php';
	} else {
		require $THEME_DIR.'templates/block_main_temp.php';
	}
}

function print_yahrzeit_config($config) {
	global $pgv_lang, $PGV_BLOCKS, $DAYS_TO_SHOW_LIMIT;

	if (empty($config)) $config=$PGV_BLOCKS["print_yahrzeit"]["config"];

	if (empty($config['infoStyle'    ])) $config['infoStyle'    ]='style2';
	if (empty($config['allowDownload'])) $config['allowDownload']='no';
	if (empty($config['days'         ])) $config['days'         ]=$DAYS_TO_SHOW_LIMIT;

	if ($config['days']<1                  ) $config['days']=1;
	if ($config['days']>$DAYS_TO_SHOW_LIMIT) $config['days']=$DAYS_TO_SHOW_LIMIT;

	print '<tr><td class="descriptionbox wrap width33">';
	print_help_link('days_to_show_help', 'qm');
	print $pgv_lang['days_to_show'];
	print '</td><td class="optionbox">';
	print '<input type="text" name="days" size="2" value="'.$config['days'].'" />';
	print '</td></tr>';

	print '<tr><td class="descriptionbox wrap width33">';
	print_help_link('style_help', 'qm');
	print $pgv_lang['style'];
	print '</td><td class="optionbox">';
	print '<select name="infoStyle">';
	foreach (array('style1', 'style2') as $style) {
		print "<option value=\"{$style}\"";
		if ($config['infoStyle']==$style)
			print " selected=\"selected\"";
		print ">{$pgv_lang[$style]}</option>";
	}
	print '</select></td></tr>';

	print '<tr><td class="descriptionbox wrap width33">';
	print_help_link("cal_dowload_help", "qm");
	print $pgv_lang["cal_download"];
	print '</td><td class="optionbox">';
	print '<select name="allowDownload">';
	foreach (array('yes', 'no') as $value) {
		print "<option value=\"{$value}\"";
		if ($config['allowDownload']==$value)
			print " selected=\"selected\"";
		print ">{$pgv_lang[$value]}</option>";
	}
	print '</select>';

	// Cache file life is not configurable by user:  anything other than 1 day doesn't make sense
	print '<input type="hidden" name="cache" value="1" />';

	print '</td></tr>';
}
?>
