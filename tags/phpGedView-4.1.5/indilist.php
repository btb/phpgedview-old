<?php
/**
 * Individual List
 *
 * The individual list shows all individuals from a chosen gedcom file. The list is
 * setup in two sections. The alphabet bar and the details.
 *
 * The alphabet bar shows all the available letters users can click. The bar is built
 * up from the lastnames first letter. Added to this bar is the symbol @, which is
 * shown as a translated version of the variable <var>pgv_lang["NN"]</var>, and a
 * translated version of the word ALL by means of variable <var>$pgv_lang["all"]</var>.
 *
 * The details can be shown in two ways, with surnames or without surnames. By default
 * the user first sees a list of surnames of the chosen letter and by clicking on a
 * surname a list with names of people with that chosen surname is displayed.
 *
 * Beneath the details list is the option to skip the surname list or show it.
 * Depending on the current status of the list.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2007  PGV Development Team
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
 * $Id$
 * @package PhpGedView
 * @subpackage Lists
 */

require("config.php");
require_once("includes/functions_print_lists.php");
print_header($pgv_lang["individual_list"]);
print "<div class =\"center\">";
print "\n\t<h2>".$pgv_lang["individual_list"]."</h2>";

if (isset($_REQUEST['show_all'])) $show_all = $_REQUEST['show_all'];
if (isset($_REQUEST['show_all_firstnames'])) $show_all_firstnames = $_REQUEST['show_all_firstnames'];
if (isset($_REQUEST['alpha'])) $alpha = $_REQUEST['alpha'];
if (isset($_REQUEST['surname'])) $surname = $_REQUEST['surname'];
if (isset($_REQUEST['surname_sublist'])) $surname_sublist = $_REQUEST['surname_sublist'];
if (isset($_REQUEST['falpha'])) $falpha = $_REQUEST['falpha'];

if (empty($show_all)) $show_all = "no";
if (empty($show_all_firstnames)) $show_all_firstnames = "no";

// Remove slashes
if (isset($alpha)) {
	$alpha = stripLRMRLM(stripslashes($alpha));
	$doctitle = $pgv_lang["individual_list"]." : ".$alpha;
}
if (isset($surname)) {
	$surname = stripLRMRLM(stripslashes($surname));
	$doctitle = $pgv_lang["individual_list"]." : ";
	if (empty($surname) || trim("@".$surname,"_")=="@" || $surname=="@N.N.") {
		$doctitle .= $pgv_lang["NN"];
	} else {
		$doctitle .= $surname;
	}
}
if (isset($doctitle)) {
	?>
	<script language="JavaScript" type="text/javascript">
	<!--
		document.title = '<?php print $doctitle; ?>';
	//-->
	</script>
	<?php
}

/**
 * Check for the @ symbol
 *
 * This variable is used for checking if the @ symbol is present in the alphabet list.
 * @global boolean $pass
 */
$pass = false;

/**
 * Total indilist array
 *
 * The tindilist array will contain individuals that are extracted from the database.
 * @global array $tindilist
 */
$tindilist = array();

/**
 * Individual alpha array
 *
 * The indialpha array will contain all first letters that are extracted from an individuals
 * lastname.
 * @global array $indialpha
 */

$indialpha = get_indi_alpha();

if (isset($alpha) && !in_array($alpha, $indialpha)) {
	$alpha="";
}

if (empty($surname_sublist)) {
	$surname_sublist = "yes";
}

/**
 * In the first half of 2007, Google is only indexing the first 1,000 urls 
 * on a page.  So, we adjust and do surname pages if the alphalist page 
 * would exceed that number minus the header urls and alphas.
 * 900 was chosen to have a good safety margin.
 * We also now only generate one url per line, instead of 11.
 * If you have over 1000 individuals in the same surname, some will 
 * still not get indexed through here, and will have to be caught by 
 * the close relatives on the individual.php or family.php page.
 */
if ($SEARCH_SPIDER) {
	$googleSplit = 900;
	if (isset($alpha)) {
		$show_count = count(get_alpha_indis($alpha));
	} else {
		if (isset($surname)) {
			$show_count = count(get_surname_indis($surname));
		} else {
			$show_count = count(get_indi_list());
		}
	}

	if (($show_count > $googleSplit ) && (empty($surname))) { /* Generate extra surname pages if needed */
		$surname_sublist = "yes";
	} else {
		$surname_sublist = "no";
	}
}

if (count($indialpha) > 0) {
	print_help_link("alpha_help", "qm", "alpha_index");
	foreach ($indialpha as $letter) {
		if (empty($alpha)) {
			if (!empty($surname)) {
				$alpha = get_first_letter(strip_prefix($surname));
			}
		}
		if ($letter != "@") {
			if (!isset($startalpha) && !isset($alpha)) {
				$startalpha = $letter;
				$alpha = $letter;
			}
			if ($SEARCH_SPIDER) { // we say we want only 26+ letters and all for spiders.
				print "<a href=\"indilist.php?alpha=".urlencode($letter)."&amp;surname_sublist=no&amp;ged=".$GEDCOM."\">";
			} else {
				print "<a href=\"indilist.php?alpha=".urlencode($letter)."&amp;surname_sublist=".$surname_sublist."\">";
			}
			if (($alpha==$letter)&&($show_all=="no")) {
				print "<span class=\"warning\">".$letter."</span>";
			} else {
				print $letter;
			}
			print "</a> | \n";
		}
		if ($letter === "@") {
			$pass = true;
		}
	}
	if ($pass == true) {
		if ($SEARCH_SPIDER) { // we want only 26+ letters and full list for spiders.

			if (isset($alpha) && $alpha == "@") {
				print "<a href=\"indilist.php?alpha=@&amp;ged=".$GEDCOM."&amp;surname_sublist=no&amp;surname=@N.N.\"><span class=\"warning\">".PrintReady($pgv_lang["NN"])."</span></a>";
			} else {
				print "<a href=\"indilist.php?alpha=@&amp;ged=".$GEDCOM."&amp;surname_sublist=no&amp;surname=@N.N.\">".PrintReady($pgv_lang["NN"])."</a>";
			}
			print " | \n";
			$pass = false;
		} else {
			if (isset($alpha) && $alpha == "@") {
				print "<a href=\"indilist.php?alpha=@&amp;surname_sublist=yes&amp;surname=@N.N.\"><span class=\"warning\">".PrintReady($pgv_lang["NN"])."</span></a>";
			} else {
				print "<a href=\"indilist.php?alpha=@&amp;surname_sublist=yes&amp;surname=@N.N.\">".PrintReady($pgv_lang["NN"])."</a>";
			}
			print " | \n";
			$pass = false;
		}
	}
	if ($SEARCH_SPIDER) { // we want only 26+ letters and full list for spiders.
		if ($show_all=="yes") {
			print "<a href=\"indilist.php?show_all=yes&amp;ged=".$GEDCOM."&amp;surname_sublist=no\"><span class=\"warning\">".$pgv_lang["all"]."</span></a>\n";
		} else {
			print "<a href=\"indilist.php?show_all=yes&amp;ged=".$GEDCOM."&amp;surname_sublist=no\">".$pgv_lang["all"]."</a>\n";
		}
	} else {
		if ($show_all=="yes") {
			print "<a href=\"indilist.php?show_all=yes&amp;surname_sublist=".$surname_sublist."\"><span class=\"warning\">".$pgv_lang["all"]."</span></a>\n";
		} else {
			print "<a href=\"indilist.php?show_all=yes&amp;surname_sublist=".$surname_sublist."\">".$pgv_lang["all"]."</a>\n";
		}
	}
	if (isset($startalpha)) {
		$alpha = $startalpha;
	}
}

print "<br /><br />";

if (!$SEARCH_SPIDER) {
	if (isset($alpha) && $alpha != "@") {
		if ($surname_sublist=="yes") {
			print_help_link("skip_sublist_help", "qm", "skip_surnames");
			print "<a href=\"indilist.php?alpha=$alpha&amp;surname_sublist=no&amp;show_all=$show_all\">".$pgv_lang["skip_surnames"]."</a>";
		} else {
			print_help_link("skip_sublist_help", "qm", "show_surnames");
			print "<a href=\"indilist.php?alpha=$alpha&amp;surname_sublist=yes&amp;show_all=$show_all\">".$pgv_lang["show_surnames"]."</a>";
		}
	}
	print_help_link("name_list_help", "qm");
	print "<br /><br />";
}

print "<table class=\"list_table $TEXT_DIRECTION\"><tr><td class=\"center\">";

$TableTitle = "<img src=\"".$PGV_IMAGE_DIR."/".$PGV_IMAGES["indis"]["small"]."\" border=\"0\" title=\"".$pgv_lang["individuals"]."\" alt=\"".$pgv_lang["individuals"]."\" />&nbsp;&nbsp;";

if ($surname_sublist=="yes" && $show_all=="yes") {
	get_indi_list();
	if (!isset($alpha)) {
		$alpha="";
	}
	$surnames = array();
	$indi_hide=array();
	foreach ($indilist as $gid=>$indi) {
		//-- make sure that favorites from other gedcoms are not shown
		if ($indi["gedfile"]==PGV_GED_ID) {
			if (displayDetailsById($gid) || showLivingNameById($gid)) {
				foreach ($indi["names"] as $indexval => $name) {
					// only include married names if required
					if ($SHOW_MARRIED_NAMES || $name[3]!='C') {
						surname_count($name[2]);
					}
				}
			} else {
				$indi_hide[$gid."[".$indi["gedfile"]."]"] = 1;
			}
		}
	}
	$i = 0;
	uasort($surnames, "itemsort");
	print_surn_table($surnames);
	if (count($indi_hide)>0) {
		print "<br /><span class=\"warning\">".$pgv_lang["hidden"].": ".count($indi_hide)."</span>";
	}
} else {
	if ($surname_sublist=="yes" && empty($surname) && $show_all=="no") {
		if (!isset($alpha)) {
			$alpha="";
		}
		// get all of the individuals whose last names start with this letter
		$tindilist = get_alpha_indis($alpha);
		$surnames = array();
		$indi_show = array();
		$indi_hide = array();
		foreach ($tindilist as $gid=>$indi) {
			if (displayDetailsByID($gid) || showLivingNameById($gid)) {
				foreach ($indi["names"] as $name) {
					// Make sure we only display true "hits"
					$trueHit = false;
					$firstLetter = get_first_letter(strip_prefix($name[2]));
		
					if ($alpha==$firstLetter) {
						$trueHit = true;
					}
	
					if (!$trueHit && $DICTIONARY_SORT[$LANGUAGE]) {
						if (strlen($firstLetter)==2) {
							//-- strip diacritics before checking equality
							if (strlen($firstLetter)==2) {
								$aPos = strpos($UCDiacritWhole, $firstLetter);
								if ($aPos!==false) {
									$aPos = $aPos >> 1;
									$firstLetter = substr($UCDiacritStrip, $aPos, 1);
								} else {
									$aPos = strpos($LCDiacritWhole, $firstLetter);
									if ($aPos!==false) {
										$aPos = $aPos >> 1;
										$firstLetter = substr($LCDiacritStrip, $aPos, 1);
									}
								}
							}
							if ($alpha==$firstLetter) {
								$trueHit = true;
							}
						}
					}
					if ($trueHit) {
						surname_count($name[2]);
						$indi_show[$gid."[".$indi["gedfile"]."]"] = 1;
					}
				}
			} else {
				$indi_hide[$gid."[".$indi["gedfile"]."]"] = 1;
			}
		}
	
		$i = 0;
		uasort($surnames, "itemsort");
		print_surn_table($surnames);
		if (count($indi_hide)>0) {
			print "<br /><span class=\"warning\">".$pgv_lang["hidden"].": ".count($indi_hide)."</span>";
		}
	} else {
		$firstname_alpha = false;
		//-- if the surname is set then only get the names in that surname list
		if ((!empty($surname))&&($surname_sublist=="yes")) {
			$surname = trim($surname);
			$tindilist = get_surname_indis($surname);
			//-- split up long surname lists by first letter of first name
			if ($SUBLIST_TRIGGER_I>0 && count($tindilist)>$SUBLIST_TRIGGER_I) {
				$firstname_alpha = true;
			}
		}
	
		if (($surname_sublist=="no")&&(!empty($alpha))&&($show_all=="no")) {
			$tindilist = get_alpha_indis($alpha);
		}
	
		//-- simplify processing for ALL indilist
		if (($surname_sublist=="no")&&($show_all=="yes")) {
			$tindilist = get_indi_list();
			$names = array();
			foreach ($tindilist as $gid => $indi) {
				//-- make sure that favorites from other gedcoms are not shown
				if ($indi["gedfile"]==PGV_GED_ID) {
					foreach ($indi["names"] as $indexval => $namearray) {
						if ($SHOW_MARRIED_NAMES || $namearray[3]!='C') {
							$names[] = array($namearray[0], $namearray[1], $namearray[2], $namearray[3], $gid);
						}
					}
				}
			}
			uasort($names, "itemsort");
			reset($names);
		} else {
			//--- the list is really long so divide it up again by the first letter of the first name
			if (($firstname_alpha)) {
				if (!isset($_SESSION[$surname."_firstalpha"])) {
					$firstalpha = array();
					foreach ($tindilist as $gid=>$indi) {
						foreach ($indi["names"] as $indexval => $namearray) {
							if ($namearray[2]==$surname) {
 								$letter = str2upper(get_first_letter($namearray[0]));
								if (!isset($firstalpha[$letter])) {
									$firstalpha[$letter] = array("letter"=>$letter, "ids"=>$gid);
								} else {
									$firstalpha[$letter]["ids"] .= ",".$gid;
								}
							}
						}
					}
					uasort($firstalpha, "lettersort");
					//-- put the list in the session so that we don't have to calculate this the next time
					$_SESSION[$surname."_firstalpha"] = $firstalpha;
				} else {
					$firstalpha = $_SESSION[$surname."_firstalpha"];
				}
				print "<td class=\"list_label\" style=\"padding: 0pt 5pt 0pt 5pt; \" colspan=\"2\">";
				print PrintReady(str_replace("#surname#", check_NN($surname), $pgv_lang["indis_with_surname"]));
				print "</td></tr><tr>\n";
				print "<td style=\"text-align:center;\" colspan=\"2\">";
				print $pgv_lang["first_letter_fname"]."<br />\n";
				print_help_link("firstname_i_help", "qm");
				foreach ($firstalpha as $letter=>$list) {
					$pass = false;
					if ($letter != "@") {
						if (!isset($fstartalpha) && !isset($falpha)) {
							$fstartalpha = $letter;
							$falpha = $letter;
						}
						print "<a href=\"indilist.php?alpha=".urlencode($alpha)."&amp;surname=".urlencode($surname)."&amp;falpha=".urlencode($letter)."&amp;surname_sublist=".$surname_sublist."\">";
						if (($falpha==$letter)&&($show_all_firstnames=="no")) {
							print "<span class=\"warning\">".$letter."</span>";
						} else {
							print $letter;
						}
						print "</a> | \n";
					}
					if ($letter === "@") {
						$pass = true;
					}
				}
				if ($pass == true) {
					if (isset($falpha) && $falpha == "@") {
						print "<a href=\"?alpha=".urlencode($alpha)."&amp;surname=".urlencode($surname)."&amp;falpha=@&amp;surname_sublist=".$surname_sublist."\"><span class=\"warning\">".PrintReady($pgv_lang["NN"])."</span></a>";
					} else {
						print "<a href=\"?alpha=".urlencode($alpha)."&amp;surname=".urlencode($surname)."&amp;falpha=@&amp;surname_sublist=".$surname_sublist."\">".PrintReady($pgv_lang["NN"])."</a>";
					}
					print " | \n";
					$pass = false;
				}
				if ($show_all_firstnames=="yes") {
					print "<a href=\"?alpha=".urlencode($alpha)."&amp;surname=".urlencode($surname)."&amp;show_all_firstnames=no\"><span class=\"warning\">".$pgv_lang["all"]."</span>\n";
				} else {
					print "<a href=\"?alpha=".urlencode($alpha)."&amp;surname=".urlencode($surname)."&amp;show_all_firstnames=yes\">".$pgv_lang["all"]."</a>\n";
				}
				if (isset($fstartalpha)) {
					$falpha = $fstartalpha;
				}
				if ($show_all_firstnames=="no") {
					$findilist = array();
					if (empty($falpha)) {
						$falpha = key($firstalpha);
					}
					$ids = preg_split("/,/", $firstalpha[$falpha]["ids"]);
					foreach ($ids as $indexval => $id) {
						if (isset($indilist[$id])) {
							$findilist[$id] = $indilist[$id];
						}
					}
					$tindilist = $findilist;
				}
				print "</td></tr><tr>\n";
			}
			$names = array();
			foreach ($tindilist as $gid => $indi) {
				foreach ($indi["names"] as $name) {
					// Make sure we only display true "hits"
					$trueHit = false;
					if (!empty($surname)) {
						if (strcasecmp(strip_prefix($surname), strip_prefix($name[2]))==0) {
							$trueHit = true;
						}
					} else {
 						$firstLetter = get_first_letter(strip_prefix($name[2]));
						if (strcasecmp($alpha, $firstLetter)==0) {
							$trueHit = true;
						}
	
						if (!$trueHit && $DICTIONARY_SORT[$LANGUAGE]) {
							if (strlen($firstLetter)==2) {
								//-- strip diacritics before checking equality
								$aPos = strpos($UCDiacritWhole, $firstLetter);
								if ($aPos!==false) {
									$aPos = $aPos >> 1;
									$firstLetter = substr($UCDiacritStrip, $aPos, 1);
								} else {
									$aPos = strpos($LCDiacritWhole, $firstLetter);
									if ($aPos!==false) {
										$aPos = $aPos >> 1;
										$firstLetter = substr($LCDiacritStrip, $aPos, 1);
									}
								}
								if (strcasecmp($alpha, $firstLetter)==0) {
									$trueHit = true;
									}
							}
						}
					}
					if ($trueHit && $firstname_alpha && $show_all_firstnames=="no") {
						// Make sure we only display true "hits" on the first name
						$trueHit = false;
						$firstLetter = get_first_letter($name[0]);
						if (strcasecmp($falpha, $firstLetter)==0) {
							$trueHit = true;
						}
	
						if (!$trueHit && $DICTIONARY_SORT[$LANGUAGE]) {
							if (strlen($firstLetter)==2) {
								//-- strip diacritics before checking equality
								$aPos = strpos($UCDiacritWhole, $firstLetter);
								if ($aPos!==false) {
									$aPos = $aPos >> 1;
									$firstLetter = substr($UCDiacritStrip, $aPos, 1);
								} else {
									$aPos = strpos($LCDiacritWhole, $firstLetter);
									if ($aPos!==false) {
										$aPos = $aPos >> 1;
										$firstLetter = substr($LCDiacritStrip, $aPos, 1);
									}
								}
								if (strcasecmp($falpha, $firstLetter)==0) {
									$trueHit = true;
								}
							}
						}
					}
					if ($trueHit) {
						$thisName = check_NN(sortable_name_from_name($name[0]));
						$names[] = array("gid"=>$gid, "name"=>$thisName);
					}
				}
			}
			uasort($names, "itemsort");
		}
	}
}
print "</td></tr></table>";

if ($show_all=="yes") {
	unset($alpha);
}
if (!empty($surname) && $surname_sublist=="yes") {
	$legend = str_replace("#surname#", check_NN($surname), $pgv_lang["indis_with_surname"]);
} else {
	if (isset($alpha)) {
		$legend = str_replace("#surname#", $alpha.".", $pgv_lang["indis_with_surname"]);
	} else {
		$legend = $pgv_lang["individuals"];
	}
}
if ($show_all_firstnames=="yes") {
	$falpha = "@";
}
if (isset($falpha) && $falpha!="@") {
	$legend .= ", ".$falpha.".";
}
$legend = PrintReady($legend);
if (isset($names)) {
	print_indi_table($names, $legend);
}

print "</div>\n";
if ($SEARCH_SPIDER) {
	print "</div>\n</body>\n</html>\n";
} else {
	print_footer();
}
?>