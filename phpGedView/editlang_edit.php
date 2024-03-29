<?php
/**
 * Edit a language file
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2017  PGV Development Team.  All rights reserved.
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
 * @version $Id$
 * @package PhpGedView
 * @subpackage EditLang
 */

define('PGV_SCRIPT_NAME', 'editlang_edit.php');
require './config.php';

loadLangFile("pgv_confighelp");

require  PGV_ROOT.'includes/functions/functions_editlang.php';

//-- make sure that they have admin status before they can use this page
//-- otherwise have them login again
if (!PGV_USER_IS_ADMIN) {
	echo "Please close this window and do a Login in the former window first...";
	exit;
}

$lang_filename		= safe_REQUEST($_REQUEST, 'lang_filename',		PGV_REGEX_NOSCRIPT, '');
$file_type			= safe_REQUEST($_REQUEST, 'file_type',			PGV_REGEX_NOSCRIPT, '');
$language2			= safe_REQUEST($_REQUEST, 'language2',			PGV_REGEX_NOSCRIPT, '');
$ls01				= safe_REQUEST($_REQUEST, 'ls01',				PGV_REGEX_NOSCRIPT, '');
$ls02				= safe_REQUEST($_REQUEST, 'ls02',				PGV_REGEX_NOSCRIPT, '');
$lang_filename_orig	= safe_REQUEST($_REQUEST, 'lang_filename_orig',	PGV_REGEX_NOSCRIPT, '');
$action				= safe_REQUEST($_REQUEST, 'action',				PGV_REGEX_NOSCRIPT, '');
$anchor				= safe_REQUEST($_REQUEST, 'anchor',				PGV_REGEX_NOSCRIPT, '');

print_simple_header($pgv_lang["editlang"]);

echo PGV_JS_START, "self.focus();", PGV_JS_END;

switch ($file_type) {
case "facts":
	$lang_filename = $factsfile[$language2];
	$lang_filename_orig = $factsfile["english"];
	break;
case "configure_help":
	$lang_filename = $confighelpfile[$language2];
	$lang_filename_orig = $confighelpfile["english"];
	break;
case "help_text":
	$lang_filename = $helptextfile[$language2];
	$lang_filename_orig = $helptextfile["english"];
	break;
case "admin":
	$lang_filename = $adminfile[$language2];
	$lang_filename_orig = $adminfile["english"];
	break;
case "editor":
	$lang_filename = $editorfile[$language2];
	$lang_filename_orig = $editorfile["english"];
	break;
case "countries":
	$lang_filename = $countryfile[$language2];
	$lang_filename_orig = $countryfile["english"];
	break;
case "faqlist":
	$lang_filename = $faqlistfile[$language2];
	$lang_filename_orig = $faqlistfile["english"];
	break;
case "extra":
	$lang_filename = $extrafile[$language2];
	$lang_filename_orig = $extrafile["english"];
	break;
case "lang":
	default:
	$lang_filename = $pgv_language[$language2];
	$lang_filename_orig = $pgv_language["english"];
	break;
}

if ($action != "save") {
	echo '<div align="center"><center>';
	echo '<table class="facts_table">';
	echo '<tr><td class="facts_label03">', print_text("editlang_help"), '</td></tr>';
	echo '<tr><td class="facts_value" style="text-align:center; ">', '(', substr($lang_filename, strpos($lang_filename, "/") + 1), ')', '</td></tr>';
	echo '</table>';

	echo '<form name="Form1" method="post" action="', PGV_SCRIPT_NAME, '">';
	echo '<input type="hidden" name="', session_name(), '" value="', session_id(), '"/>';
	echo '<input type="hidden" name="action" value="save"/>';
	echo '<input type="hidden" name="anchor" value="', $anchor, '"/>';
	echo '<input type="hidden" name="language2" value="', $language2, '"/>';
	echo '<input type="hidden" name="ls01" value="', $ls01, '"/>';
	echo '<input type="hidden" name="ls02" value="', $ls02, '"/>';
	echo '<input type="hidden" name="file_type" value="', $file_type, '"/>';

	echo '<table class="facts_table">';
	echo '<tr><td class="facts_label03" style="color: blue; font-weight: bold; ">';
	print_text("original_message");
	echo '</td></tr>';
	echo '<tr>';
	echo '<td class="facts_value" style="text-align:center; color: blue" >';
	echo '<strong style="color: red">|</strong>', mask_all(find_in_file($ls01, $lang_filename_orig)), '<strong style="color: red">|</strong>';
	echo '</td>';
	echo '</tr>';
	echo '</table>';
	echo '<br />';
	echo '<table class="facts_table">';
	echo '<tr>';
	echo '<td class="facts_label03" style="color: red; font-weight: bold; ">';
	print_text("message_to_edit");
	echo '</td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td class="facts_value" style="text-align:center; ">';
	echo '<textarea rows="10" name="new_message" cols="75" style="color: red">';
	if ($ls02>0) {
		echo mask_all(find_in_file($ls02, $lang_filename));
	}
	echo '</textarea>';
	echo '</td>';
	echo '</tr>';
	echo '</table><br />';
	echo '<table class="facts_table">';
	echo '<tr>';
	echo '<td class="facts_value" style="text-align:center; ">';
	echo '<input type="submit" value="', print_text("lang_save"), '"/>';
	echo '&nbsp;&nbsp;';
	echo '<input type="submit" value="', print_text("cancel"), '"', ' onclick="self.close()" />';
	echo '</td>';
	echo '</tr>';
	echo '</table>';
	echo '</form>';
	echo '</center></div>';
}

if ($action == "save") {

	// Post-parameters
	// $new_message is the edited message
	// $language2 is the name of the language to edit
	// $ls01 is the number of the message in english language file
	// $ls02 is the number of the message in the edited language file
	// $file_type defines which language file

	//$new_message = safe_POST('new_message'); 	//generates errors while editing texts contains brackets
	if (isset($_POST['new_message'])) {
		$new_message = $_POST['new_message'];
	} else {
		$new_message = '';
	}

// session.php looks after getting rid of escaping slashes added to $_POST input when the PHP
// configuration option "magic_quotes_gpc" is set "on".

	switch ($file_type) {
	case "facts":
		// read facts.en.php file into array
		$english_language_array = array();
		$english_language_array = read_complete_file_into_array($factsfile["english"], '$factarray[');
		// read facts.xx.php file into array
		$new_language_array = array();
		$new_language_file =  $factsfile[$language2];
		$new_language_array = read_complete_file_into_array($new_language_file, '$factarray[');
		break;
	case "configure_help":
		// read configure_help.en.php file into array
		$english_language_array = array();
		$english_language_array = read_complete_file_into_array($confighelpfile["english"], '$pgv_lang[');
		// read configure_help.xx.php file into array
		$new_language_array = array();
		$new_language_file =  $confighelpfile[$language2];
		$new_language_array = read_complete_file_into_array($new_language_file, '$pgv_lang[');
		break;
	case "help_text":
		// read help_text.en.php file into array
		$english_language_array = array();
		$english_language_array = read_complete_file_into_array($helptextfile["english"], '$pgv_lang[');
		// read help_text.xx.php file into array
		$new_language_array = array();
		$new_language_file =  $helptextfile[$language2];
		$new_language_array = read_complete_file_into_array($new_language_file, '$pgv_lang[');
		break;
	case "admin":
		// read admin.en.php file into array
		$english_language_array = array();
		$english_language_array = read_complete_file_into_array($adminfile["english"], '$pgv_lang[');
		// read admin.xx.php file into array
		$new_language_array = array();
		$new_language_file =  $adminfile[$language2];
		$new_language_array = read_complete_file_into_array($new_language_file, '$pgv_lang[');
		break;
	case "editor":
		// read editor.en.php file into array
		$english_language_array = array();
		$english_language_array = read_complete_file_into_array($editorfile["english"], '$pgv_lang[');
		// read editor.xx.php file into array
		$new_language_array = array();
		$new_language_file =  $editorfile[$language2];
		$new_language_array = read_complete_file_into_array($new_language_file, '$pgv_lang[');
		break;
	case "countries":
		// read countries.en.php file into array
		$english_language_array = array();
		$english_language_array = read_complete_file_into_array($countryfile["english"], '$countries[');
		// read countries.xx.php file into array
		$new_language_array = array();
		$new_language_file =  $countryfile[$language2];
		$new_language_array = read_complete_file_into_array($new_language_file, '$countries[');
		break;
	case "faqlist":
		// read faqlist.en.php file into array
		$english_language_array = array();
		$english_language_array = read_complete_file_into_array($faqlistfile["english"], '$faqlist[');
		// read faqlist.xx.php file into array
		$new_language_array = array();
		$new_language_file =  $faqlistfile[$language2];
		$new_language_array = read_complete_file_into_array($new_language_file, '$faqlist[');
		break;
	case "extra":
		// read extra.en.php file into array
		$english_language_array = array();
		$english_language_array = read_complete_file_into_array($extrafile["english"], '$pgv_lang[', '$factarray[', '$countries[', '$faqlist[');
		// read extra.xx.php file into array
		$new_language_array = array();
		$new_language_file =  $extrafile[$language2];
		$new_language_array = read_complete_file_into_array($new_language_file, '$pgv_lang[', '$factarray[', '$countries[', '$faqlist[');
		break;
	case "lang":
	default:
		// read lang.en.php file into array
		$english_language_array = array();
		$english_language_array = read_complete_file_into_array($pgv_language["english"], '$pgv_lang[');
		// read lang.xx.php file into array
		$new_language_array = array();
		$new_language_file =  $pgv_language[$language2];
		$new_language_array = read_complete_file_into_array($new_language_file, '$pgv_lang[');
		break;
	}

	$new_message_line = (-1);

	if (isset($new_language_array[$ls02])) {
		$dummyArray = $new_language_array[$ls02];
	} else {
		$dummyArray = array();
	}

	if ($ls02 < 1) {
			$dummyArray = $english_language_array[$ls01];
			$new_message_line = abs($ls02);
	}
	if (($new_message_line == 0)||($new_message_line>sizeof($new_language_array))) {
		$new_message_line = sizeof($new_language_array) - 2;
	}

//	$new_message = unmask_all($new_message);
	$new_message = crlf_lf_to_br($new_message);
	$dummyArray[1] = $new_message;
	$textTerminator = substr($dummyArray[3], ($dummyArray[2]-1), 1).';';		// Repeat the leading quote or apostrophe
	$comment = substr($dummyArray[3], (strrpos($dummyArray[3], $textTerminator)+2));
	$dummyArray[3] = substr($dummyArray[3], 0, $dummyArray[2]) . $new_message . $textTerminator . $comment;

	if ($ls02 > 0) {
		$new_language_array[$ls02] = $dummyArray;
	}

	if ($ls02 == 0) {
		# $new_language_array[$ls02] = $dummyArray;
		$ls02 = $new_message_line;
	}

	@copy($new_language_file, $new_language_file . ".old");
	$Write_Ok = write_array_into_file($new_language_file, $new_language_array, $new_message_line, $dummyArray[3]);

	echo '<div align="center"><center>';

	echo '<table class="facts_table">';
	echo '<tr><td class="facts_label03">', print_text("savelang_help"), '</td></tr>';
	echo '<tr><td class="facts_value" style="text-align:center; ">', '(', substr($lang_filename, strpos($lang_filename, "/") + 1), ')', '</td></tr>';
	echo '</table>';

	echo '<form name="Form2" method="post" action="', PGV_SCRIPT_NAME, '">';
	echo '<table class="facts_table">';
	echo '<tr>';
	if ($Write_Ok) {
		echo '<td class="facts_label03" style="color: blue; font-weight: bold; ">', print_text("original_message", 0, 1);
	} else {
		echo '<td class="warning" >';
		echo str_replace("#lang_filename#", $lang_filename, $pgv_lang["lang_file_write_error"]), '<br /><br />';
	}
	echo '</td>';
	echo '</tr>';
	if ($Write_Ok) {
		echo '<tr>';
		echo '<td class="facts_value" style="text-align:center; color: blue" >';
		echo '<strong style="color: red">|</strong>', mask_all(find_in_file($ls01, $lang_filename_orig)), '<strong style="color: red">|</strong>';
		echo '</td>';
		echo '</tr>';
	}
	echo '</table>';

	if ($Write_Ok) {
		echo '<br />';
		echo '<table class="facts_table">';
		echo '<tr><td class="facts_label03" style="color: blue; font-weight: bold; ">', print_text("changed_message"), '</td></tr>';

		echo '<tr><td class="facts_value" style="text-align:center; color: blue" >';
		echo '<strong style="color: red; ">|</strong>', mask_all($new_message), '<strong style="color: red">|</strong>';
		echo '</td></tr>';
		echo '</table>';
		echo '<br />';
	}

	echo '<table class="facts_table">';
	echo '<tr><td class="facts_value" style="text-align:center; " >';
	srand((double)microtime(true)*1000000);
	// These 3 hidden variables has to be set or there will be a PHP ERROR message
	echo '<input type="hidden" name="language2" value="', $language2, '"/>';
	echo '<input type="hidden" name="file_type" value="', $file_type, '"/>';
	echo '<input type="hidden" name="ls01" value="', $ls01, '"/>';
	echo '<input type="submit" value="', $pgv_lang["close_window"], "\" onclick=\"window.opener.showchanges('&dv=", rand(), "#", $anchor, "'); self.close();\" />";
	echo '</td></tr>';
	if ($Write_Ok) {
		echo '<tr><td class="facts_value" style="text-align:center; " ><br /><br />';
		echo '<input type="submit" value="', print_text("close_window_without_refresh"), '" onclick="self.close();" /><br /><br />';
		echo '<div class="error">', print_text("edit_lang_utility_warning"), '</div>';
		echo '</td></tr>';
	}
	echo '</table>';

	echo '</form>';
	echo '</center></div>';

	// if ls02 (the line of the translated sentence) variable has not been set, try to find the row in the translated file
	if ($ls02 == "") {
		$ls02 = 0;
		$englishTarget1 = $english_language_array[$ls01][0];
		$englishTarget2 = str_replace('"', "'", $englishTarget1);		// Var name could be inside apostrophes
		$englishTarget3 = str_replace("'", '"', $englishTarget1);		// Var name could be inside apostrophes
		for ($y = 0, $ymax = sizeof($new_language_array); $y < $ymax; $y++) {
			if (isset($new_language_array[$y][1])) {
				if ($new_language_array[$y][0] == $englishTarget1 || $new_language_array[$y][0] == $englishTarget2 || $new_language_array[$y][0] == $englishTarget3) {
					$ls02 = $y;
					break;
				}
			}
		}
	}
}

print_simple_footer();

?>
