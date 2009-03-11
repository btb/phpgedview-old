<?php
/**
 * German Language file for PhpGedView.
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
 * @package PhpGedView
 * @translator Jürgen Bach 
 * @translator Gerd Kroll
 * @translator Kurt Norgaz 
 * @translator Peter Pluntke
 * @version $Id$
 */

if (stristr($_SERVER["SCRIPT_NAME"], basename(__FILE__))!==false) {
	print "Direkter Sprach-Dateien Zugriff ist nicht erlaubt.";
	exit;
}

$pgv_lang["age_differences"]		= "Altersdifferenzen zeigen";
$pgv_lang["date_of_entry"]			= "Datum des Eintrages in der ursprünglichen Quelle";
$pgv_lang["multi_site_search"] 		= "Webseiten durchsuchen";
$pgv_lang["switch_lifespan"]		= "Lebenspannen-Diagramm zeigen";
$pgv_lang["switch_timeline"]		= "Lebenspannenanzeige zeigen";
$pgv_lang["differences"]			= "Differenzen";
$pgv_lang["charts_block"]			= "Diagramm-Block";
$pgv_lang["charts_block_descr"]		= "Dieser Block ermöglicht es Ihnen, Diagramme auf den haupt und persönlichen Begrüßungsseiten zu zeigen.  Sie können in dessen Konfiguration bestimmen, ob der Block das Ahnen-, Nachfahren-, oder Sanduhr-Diagramm zeigen soll.  Sie können auch die ID-Nummer der Startperson bestimmen.";
$pgv_lang["chart_type"]				= "Diagramm-Typ";
$pgv_lang["changedate1"]			= "Datenbereich Ende";
$pgv_lang["changedate2"]			= "Datenbereich Anfang";
$pgv_lang["search_place_word"]			= "Ganze Worte";
$pgv_lang["invalid_search_input"]		= "Bitte geben Sie einen Namen oder einen Ort zusätzlich zur Jahresangabe ein";
$pgv_lang["duplicate_username"]			= "Doppelter Benutzername. Ein Benutzer mit dem gewählten Namen existiert bereits. Bitte wählen Sie einen anderen Benutzernamen.";
$pgv_lang["cache_life"]					= "Cache-Datei Lebensdauer";
$pgv_lang["genealogy"]					= "Ahnenforschung";
$pgv_lang["roman_surn"]					= "Romanisierter Nachname";
$pgv_lang["roman_givn"]					= "Romanisierte Vornamen";
$pgv_lang["include"]					= "einschließen";
$pgv_lang["page_x_of_y"]				= "Seite #GLOBALS[currentPage]# von #GLOBALS[lastPage]#";
$pgv_lang["options"]					= "Optionen:";
$pgv_lang["config_update_ok"]			= "Die Konfigurations-Datei wurde aktualisiert.";
$pgv_lang["server_folder"]				= "Verzeichnisname auf dem Server";
$pgv_lang["medialist_recursive"]	= "Medien-Dateien in Unterverzeichnissen aufzählen";
$pgv_lang["media_options"]				= "Medien-Optionen";
$pgv_lang["index_edit_advice"]			= "Markieren Sie den Namen eines Blocks und klicken Sie auf einen der Pfeile, um den markierten Block in die gewünschte Richtung zu bewegen.";
$pgv_lang["changelog"]					= "Änderungen in Version #VERSION#";
$pgv_lang["html_block_descr"]			= "Mit diesem Block können Sie einen beliebigen Text auf Ihrer Seite einfügen.";
$pgv_lang["html_block_sample_part1"]	= "<p class=\"blockhc\"><b>Titel hier eingeben</b></p><br /><p>Klicken Sie auf Konfigurieren";
$pgv_lang["html_block_sample_part2"]	= "um diesen Text hier zu ändern.</p>";
$pgv_lang["html_block_name"]			= "HTML";
$pgv_lang["htmlplus_block_name"]		= "Verbesserter HTML";
$pgv_lang["htmlplus_block_descr"]		= "Mit diesem Block können Sie jeden beliebigen Text auf Ihrer Seite zeigen.  Informationen aus und über Ihrer GEDCOM Datei können in den Text eingefügt werden.";
$pgv_lang["htmlplus_block_templates"]	= "Vorlagen";
$pgv_lang["htmlplus_block_content"]		= "Inhalt";
$pgv_lang["htmlplus_block_narrative"]	= "Erzählender Stil (nur in Englisch)";
$pgv_lang["htmlplus_block_custom"]		= "Personalisiert";
$pgv_lang["htmlplus_block_keyword"]		= "Stichwort-Beispiele (nur in Englisch)";
$pgv_lang["htmlplus_block_taglist"]		= "Liste der Tags";
$pgv_lang["htmlplus_block_compat"]		= "Kompatibilitäts-Modus";
$pgv_lang["htmlplus_block_current"]		= "Aktuell";
$pgv_lang["htmlplus_block_default"]		= "Standard";
$pgv_lang["htmlplus_block_census"]		= "Volkszählung";
$pgv_lang["htmlplus_block_burial"]		= "Beerdigung";
$pgv_lang["htmlplus_block_adoption"]	= "Adoption";
$pgv_lang["htmlplus_block_marrage"]		= "Heirat";
$pgv_lang["htmlplus_block_death"]		= "Tod";
$pgv_lang["htmlplus_block_birth"]		= "Geburt";
$pgv_lang["htmlplus_block_gedcom"]		= "Stammbaum";
$pgv_lang["num_to_show"]				= "Anzahl der zu zeigenden Objekte";
$pgv_lang["days_to_show"]				= "Anzahl der zu zeigenden Tage";
$pgv_lang["before_or_after"]			= "Anzahl vor oder hinter den Namen zeigen?";
$pgv_lang["before"]						= "vor";
$pgv_lang["after"]						= "hinter";
$pgv_lang["config_block"]				= "Konfigurieren";
$pgv_lang["enter_comments"]				= "Bitte geben Sie ihre Verwandtschaft zu den Daten im Bemerkungsfeld ein.";
$pgv_lang["comments"]					= "Bemerkungen";

//-- Ahnentafel report
$pgv_lang["ahnentafel_report"]			= "Ahnentafel Bericht";
$pgv_lang["ahnentafel_header"]			= "Ahnentafel Bericht für ";
$pgv_lang["ahnentafel_generation"]		= "Generation ";
$pgv_lang["ahnentafel_pronoun_f"]		= "Sie ";
$pgv_lang["ahnentafel_pronoun_m"]		= "Er ";
$pgv_lang["ahnentafel_born_m"]			= "wurde geboren";
$pgv_lang["ahnentafel_born_f"]			= "wurde geboren";
$pgv_lang["ahnentafel_christened_f"]	= "wurde getauft";
$pgv_lang["ahnentafel_christened_m"]	= "wurde getauft";
$pgv_lang["ahnentafel_married_f"]		= "heiratete";
$pgv_lang["ahnentafel_married_m"]		= "heiratete";
$pgv_lang["ahnentafel_buried_m"]		= "wurde beerdigt";
$pgv_lang["ahnentafel_buried_f"]		= "wurde beerdigt";
$pgv_lang["ahnentafel_died_f"]			= "starb";
$pgv_lang["ahnentafel_died_m"]			= "starb";
$pgv_lang["ahnentafel_place"]			= " in ";
$pgv_lang["ahnentafel_no_details"]		= " aber die Einzelheiten sind nicht bekannt";

//-- Changes report
$pgv_lang["changes_report"]			= "Änderungen Bericht";
$pgv_lang["changes_pending_tot"]	= "Noch nicht akzeptierte Änderungen insgesamt: ";
$pgv_lang["changes_accepted_tot"]	= "Schon akzeptierte Änderungen insgesamt: ";

$pgv_lang["child-family"]				= "Eltern und Geschwister";
$pgv_lang["spouse-family"]				= "Ehepartner und Kinder";
$pgv_lang["direct-ancestors"]			= "Vorfahren in direkter Linie";
$pgv_lang["ancestors"]					= "Vorfahren in direkter Linie und deren Familien";
$pgv_lang["descendants"]				= "Nachfahren";
$pgv_lang["choose_relatives"]			= "Verwandte wählen";
$pgv_lang["relatives_report"]			= "Verwandten Bericht";
$pgv_lang["total_living"]				= "Insgesamt lebend";
$pgv_lang["total_dead"]					= "Insgesamt verstorben";
$pgv_lang["total_not_born"]				= "Insgesamt noch nicht geboren";
$pgv_lang["remove_custom_tags"]			= "Benutzerdefinierte PGV Tags entfernen? (z.B. _PGVU, _THUM)";
$pgv_lang["cookie_login_help"]			= "Sie waren auf dieser Seite schon einmal angemeldet. Sie haben daher Zugriff auf private Daten und andere benutzerdefinierte Eigenschaften. Aus Sicherheitsgründen müssen Sie sich aber erneut anmelden, wenn Sie Daten bearbeiten oder verwalten möchten.";
$pgv_lang["remember_me"]				= "Von diesem Computer automatisch anmelden?";
$pgv_lang["fams_with_surname"]			= "Familien mit dem Nachnamen #surname#";
$pgv_lang["support_contact"]			= "Kontakt für technische Fragen";
$pgv_lang["genealogy_contact"]			= "Kontakt für genealogische Fragen";
$pgv_lang["common_upload_errors"]		= "Dieser Fehler bedeutet vermutlich, dass die Datei die Sie hochladen möchten, die Größengrenze ihres Hosts überschreitet. Die Standard-Grenze liegt in PHP bei 2MB. Sie können entweder den Support Ihres Hosts kontaktieren und ihn bitten, die Grenze in der Datei php.ini zu erhöhen, oder Sie können Ihre Datei mit FTP hochladen. Benutzen Sie die Seite <a href=\"uploadgedcom.php?action=add_form\"><b>GEDCOM hinzufügen</b></a>, um eine bereits hochgeladene Datei zu verwenden.";
$pgv_lang["total_memory_usage"]			= "Speicherbedarf insgesamt:";
$pgv_lang["mothers_family_with"]		= "Familie der Mutter mit ";
$pgv_lang["fathers_family_with"]		= "Familie des Vaters mit ";
$pgv_lang["halfsibling"]				= "Halb-Geschwister";
$pgv_lang["halfbrother"]				= "Halbbruder";
$pgv_lang["halfsister"]					= "Halbschwester";
$pgv_lang["family_timeline"]			= "Familie in der Lebensspannenanzeige darstellen";
$pgv_lang["children_timeline"]			= "Kinder in der Lebensspannenanzeige darstellen";
$pgv_lang["other"]						= "Sonstige";
$pgv_lang["sort_by_marriage"]			= "Nach Ehedatum sortieren";
$pgv_lang["reorder_families"]			= "Familien neu ordnen";
$pgv_lang["indis_with_surname"]			= "Personen mit dem Nachnamen #surname#";
$pgv_lang["first_letter_fname"]			= "Wählen Sie einen Buchstaben, um Personen zu sehen, deren Vornamen mit diesem Buchstaben beginnen.";
$pgv_lang["total_names"]				= "Nachnamen insgesamt";
$pgv_lang["top10_pageviews_nohits"]		= "Es gibt keine Treffer.";
$pgv_lang["top10_pageviews_msg"]		= "Sie müssen in der GEDCOM Konfiguration die Zähler zunächst aktivieren.";
$pgv_lang["review_changes_descr"]		= "Der «#pgv_lang[review_changes_block]#» Block zeigt Benutzern mit Editierrechten eine Liste der Datensätze die online geändert wurden und die noch kontrolliert und übernommen bzw. verworfen werden müssen.<br /><br />Wenn dieser Block aktiviert ist, erhalten alle Benutzer mit Editierrechten täglich eine Mail, die auf offene Änderungen hinweist.";
$pgv_lang["review_changes_block"]		= "Offene Änderungen";
$pgv_lang["review_changes_email"]		= "Erinnerungs Mails versenden?";
$pgv_lang["review_changes_email_freq"]	= "Erinnerungs Mails Häufigkeit (Tage)";
$pgv_lang["review_changes_subject"]		= "PhpGedView - Änderungen kontrollieren";
$pgv_lang["review_changes_body"]		= "An einer genealogischen Datenbank wurden Änderungen vorgenommen. Diese Änderungen müssen kontrolliert und übernommen werden, bevor sie für alle Nutzer sichtbar werden. Bitte klicken Sie auf die angegebene URL, um auf die PhpGedView-Seite zu gelangen und melden Sie sich an, um die Änderung zu kontrollieren. ";
$pgv_lang["show_pending"]				= "Offene Änderungen zeigen";
$pgv_lang["show_spouses"]				= "Ehepartner zeigen";
$pgv_lang["quick_update_title"]			= "Schnelle Bearbeitung";
$pgv_lang["quick_update_instructions"]	= "Auf dieser Seite können Sie schnell die Daten einer Person bearbeiten. Sie müssen nur die Daten eintragen, die neu sind oder von den Informationen in der Datenbank abweichen. Nachdem die Daten übermittelt sind, müssen sie noch von einem Verwalter kontrolliert und übernommen werden, bevor sie für alle Nutzer sichtbar werden.";
$pgv_lang["update_name"]				= "Namen bearbeiten";
$pgv_lang["update_fact"]				= "Ereignis bearbeiten";
$pgv_lang["update_fact_restricted"]		= "Die Bearbeitung dieses Ereignisses ist eingeschränkt:";
$pgv_lang["update_photo"]				= "Foto aktualisieren";
$pgv_lang["select_fact"]				= "Ein Ereignis wählen...";
$pgv_lang["update_address"]				= "Adresse bearbeiten";
$pgv_lang["top10_pageviews_descr"]		= "Dieser Block zeigt die 10 Datensätze an, die am häufigsten aufgerufen wurden. Sie müssen dazu in der GEDCOM Konfiguration die Zähler zunächst aktivieren.";
$pgv_lang["top10_pageviews"]			= "Meist aufgerufene Einträge";
$pgv_lang["top10_pageviews_block"]		= "Meist aufgerufene Einträge";
$pgv_lang["stepdad"]					= "Stiefvater";
$pgv_lang["stepmom"]					= "Stiefmutter";
$pgv_lang["stepsister"]					= "Stiefschwester";
$pgv_lang["stepbrother"]				= "Stiefbruder";
$pgv_lang["fams_charts"]				= "Optionen für Familie";
$pgv_lang["indis_charts"]				= "Optionen für Person";
$pgv_lang["none"]						= "Keine";
$pgv_lang["locked"]						= "Nicht ändern!";
$pgv_lang["privacy"]					= "Datenschutz";
$pgv_lang["number_sign"]				= "#";
//-- GENERAL HELP MESSAGES
$pgv_lang["qm"]							= "?";
$pgv_lang["qm_ah"]						= "?";
$pgv_lang["page_help"]					= "Hilfe";
$pgv_lang["help_for_this_page"]			= "Hilfe für diese Seite";
$pgv_lang["help_contents"]				= "Hilfe Inhalt";
$pgv_lang["show_context_help"]			= "Kontext-bezogene Hilfe zeigen";
$pgv_lang["hide_context_help"]			= "Kontext-bezogene Hilfe verbergen";
$pgv_lang["sorry"]						= "<b>Leider ist die Hilfe für dieses Thema noch nicht fertig gestellt.</b>";
$pgv_lang["help_not_exist"]				= "<b>Die Hilfe für diese Seite oder dieses Element ist noch nicht verfügbar.</b>";
$pgv_lang["var_not_exist"]				= "<span style=\"font-weight: bold\">Diese Sprach-Variable existiert nicht. Bitte melden Sie dies als Fehler.</span>";
$pgv_lang["resolution"]					= "Bildschirmauflösung";
$pgv_lang["menu"]						= "Menü";
$pgv_lang["header"]						= "Kopfbereich";
$pgv_lang["imageview"]					= "Image Viewer";
//-- CONFIG FILE MESSAGES
$pgv_lang["login_head"]					= "PhpGedView Benutzer Anmeldung";
$pgv_lang["for_support"]				= "Für Support wenden Sie sich an folgende Kontaktadresse:";
$pgv_lang["for_contact"]				= "Bei genealogischen Fragen wenden Sie sich an folgende Kontaktadresse:";
$pgv_lang["for_all_contact"]			= "Für Support sowie bei genealogischen Fragen wenden Sie sich an folgende Kontaktadresse:";
$pgv_lang["build_error"]				= "Die GEDCOM Datei wurde aktualisiert.";
$pgv_lang["choose_username"]			= "Gewünschter Benutzername";
$pgv_lang["username"]					= "Benutzername";
$pgv_lang["invalid_username"]			= "Der Benutzername enthält unzulässige Zeichen";
$pgv_lang["firstname"]					= "Vorname";
$pgv_lang["lastname"]					= "Nachname";
$pgv_lang["password"]					= "Kennwort";
$pgv_lang["choose_password"]			= "Gewünschtes Kennwort";
$pgv_lang["confirm"]					= "Kennwort bestätigen";
$pgv_lang["login"]						= "Login";
$pgv_lang["logout"]						= "Logout";
$pgv_lang["admin"]						= "Verwalten";
$pgv_lang["logged_in_as"]				= "Angemeldet als";
$pgv_lang["my_pedigree"]				= "Mein Stammbaum";
$pgv_lang["my_indi"]					= "Mein Datenblatt";
$pgv_lang["yes"]						= "Ja";
$pgv_lang["no"]							= "Nein";
$pgv_lang["change_theme"]				= "Theme ändern";
//-- INDEX (PEDIGREE_TREE) FILE MESSAGES
$pgv_lang["index_header"]				= "Stammbaum";
$pgv_lang["gen_ped_chart"]				= "Stammbaum für #PEDIGREE_GENERATIONS# Generationen";
$pgv_lang["generations"]				= "Generationen";
$pgv_lang["view"]						= "Zeige";
$pgv_lang["fam_spouse"]					= "Familie mit Ehepartner";
$pgv_lang["root_person"]				= "ID der Startperson";
$pgv_lang["hide_details"]				= "Einzelheiten verbergen";
$pgv_lang["show_details"]				= "Einzelheiten zeigen";
$pgv_lang["person_links"]				= "Links zu Diagrammen, Familien und nahen Verwandten dieser Person. Klicken Sie auf dieses Symbol, um die Seite mit dieser Person als Ausgangspunkt aufzurufen.";
$pgv_lang["zoom_box"]					= "Zoom hinein/heraus";
$pgv_lang["orientation"]				= "Richtung";
$pgv_lang["portrait"]					= "Hochformat";
$pgv_lang["landscape"]					= "Querformat";
$pgv_lang["start_at_parents"]			= "Bei den Eltern beginnen";
$pgv_lang["charts"]						= "Diagramme";
$pgv_lang["lists"]						= "Listen";
$pgv_lang["welcome_page"]				= "Begrüßungs-Seite";
$pgv_lang["max_generation"]				= "Die maximale Anzahl von Generationen beträgt #PEDIGREE_GENERATIONS#.";
$pgv_lang["min_generation"]				= "Die minimale Anzahl von Generationen beträgt 3.";
$pgv_lang["box_width"]					= "Box Breite";
//-- FUNCTIONS FILE MESSAGES
$pgv_lang["unable_to_find_family"]		= "Kann die Familie mit folgender ID nicht finden:";
$pgv_lang["unable_to_find_record"]		= "Kann den Datensatz mit folgender ID nicht finden:";
$pgv_lang["title"]						= "Titel";
$pgv_lang["living"]						= "Lebt";
$pgv_lang["private"]					= "Vertraulich";
$pgv_lang["birth"]						= "Geburt:";
$pgv_lang["death"]						= "Tod:";
$pgv_lang["descend_chart"]				= "Nachfahrenbaum";
$pgv_lang["individual_list"]			= "Personenliste";
$pgv_lang["family_list"]				= "Familienliste";
$pgv_lang["source_list"]				= "Quellenliste";
$pgv_lang["place_list"]					= "Hierarchie der Orte";
$pgv_lang["place_list_aft"]				= "Hierarchie der Orte unter";
$pgv_lang["media_list"]					= "Multimedialiste";
$pgv_lang["search"]						= "Suche";
$pgv_lang["clippings_cart"]				= "Sammelbehälter";
$pgv_lang["print_preview"]				= "Drucker-optimierte Version";
$pgv_lang["cancel_preview"]				= "Zurück zur normalen Ansicht";
$pgv_lang["change_lang"]				= "Sprache ändern";
$pgv_lang["print"]						= "Drucken";
$pgv_lang["total_queries"]				= "Anzahl der Datenanfragen an die Datenbank:";
$pgv_lang["total_privacy_checks"]		= "Anzahl der Datenschutz-Überprüfungen:";
$pgv_lang["back"]						= "zurück";
//-- INDIVIDUAL FILE MESSAGES
$pgv_lang["aka"]						= "auch bekannt als";
$pgv_lang["male"]						= "männlich";
$pgv_lang["female"]						= "weiblich";
$pgv_lang["temple"]						= "HLT Tempel";
$pgv_lang["temple_code"]				= "HLT Tempel Code:";
$pgv_lang["status"]						= "Status";
$pgv_lang["source"]						= "Quelle";
$pgv_lang["text"]						= "Auszug:";
$pgv_lang["note"]						= "Bemerkung";
$pgv_lang["NN"]							= "(Unbekannt)";
$pgv_lang["PN"]							= "(Unbekannt)";
$pgv_lang["unrecognized_code"]			= "Unbekannter GEDCOM Code";
$pgv_lang["unrecognized_code_msg"]		= "Ein Fehler ist aufgetreten, bitte melden Sie diesen an bei";
$pgv_lang["indi_info"]					= "Persönliche Informationen";
$pgv_lang["pedigree_chart"]				= "Stammbaum";
$pgv_lang["individual"]					= "Person";
$pgv_lang["family_with"]				= "Familie mit";
$pgv_lang["as_spouse"]					= "Familiendaten als Ehepartner";
$pgv_lang["as_child"]					= "Familiendaten als Kind";
$pgv_lang["view_gedcom"]				= "GEDCOM Datensatz zeigen";
$pgv_lang["add_to_cart"]				= "Datensatz dem Sammelbehälter hinzufügen";
$pgv_lang["privacy_error"]				= "Details sind vertraulich und dürfen deshalb nicht gezeigt werden.<br />";
$pgv_lang["more_information"]			= "Für weitere Informationen wenden Sie sich an:";
$pgv_lang["name"]						= "Name";
$pgv_lang["given_name"]					= "Vorname:";
$pgv_lang["surname"]					= "Nachname:";
$pgv_lang["suffix"]						= "Namenszusatz:";
$pgv_lang["sex"]						= "Geschlecht";
$pgv_lang["personal_facts"]				= "Persönliche Fakten und Details";
$pgv_lang["type"]						= "Typ";
$pgv_lang["parents"]					= "Eltern:";
$pgv_lang["siblings"]					= "Geschwister";
$pgv_lang["father"]						= "Vater";
$pgv_lang["mother"]						= "Mutter";
$pgv_lang["parent"]						= "Elternteil";
$pgv_lang["self"] 						= "Selbst";
$pgv_lang["relatives"]					= "Direkte Verwandschaft";
$pgv_lang["relatives_events"]			= "Verwandten-Ereignisse";
$pgv_lang["historical_facts"]			= "Geschichtliche Ereignisse";
$pgv_lang["partner"] 					= "Partner";
$pgv_lang["child"]						= "Kind";
$pgv_lang["family"]						= "Familie";
$pgv_lang["spouse"]						= "Ehepartner";
$pgv_lang["spouses"]					= "Ehepartner";
$pgv_lang["surnames"]					= "Nachnamen";
$pgv_lang["adopted"]					= "Adoptiert";
$pgv_lang["foster"]						= "Pflege";
$pgv_lang["sealing"]					= "Siegelung";
$pgv_lang["challenged"]					= "In Frage gestellt";
$pgv_lang["disproved"]					= "Widerlegt";
$pgv_lang["infant"]						= "Kleinkind";
$pgv_lang["stillborn"]					= "Totgeboren";
$pgv_lang["deceased"]					= "Verstorben";
$pgv_lang["link_as_wife"]				= "Diese Person als Ehefrau mit einer existierenden Familie verbinden";
$pgv_lang["no_tab1"]					= "Zu dieser Person gibt es keine Fakten.";
$pgv_lang["no_tab2"]					= "Zu dieser Person gibt es keine Bemerkungen.";
$pgv_lang["no_tab3"]					= "Zu dieser Person gibt es keine Quellenangaben.";
$pgv_lang["no_tab4"]					= "Zu dieser Person gibt es keine Multimedia Objekte.";
$pgv_lang["no_tab5"]					= "Zu dieser Person gibt es keine direkte Verwandschaft.";
$pgv_lang["no_tab6"]					= "Zu dieser Person gibt es keine Forschung Protokolle.";
$pgv_lang["show_fact_sources"]			= "Zeige alle Quellen";
$pgv_lang["show_fact_notes"]			= "Zeige alle Bemerke";

//-- FAMILY FILE MESSAGES
$pgv_lang["family_info"]				= "Familien Informationen";
$pgv_lang["family_group_info"]			= "Informationen zur Familiengruppe";
$pgv_lang["husband"]					= "Ehemann";
$pgv_lang["wife"]						= "Ehefrau";
$pgv_lang["marriage"]					= "Heirat:";
$pgv_lang["lds_sealing"]				= "HLT Siegelung:";
$pgv_lang["marriage_license"]			= "Ehe Erlaubnis:";
$pgv_lang["children"]					= "Kinder";
$pgv_lang["no_children"]				= "Keine Kinder eingetragen";
$pgv_lang["childless_family"]			= "Diese Familie blieb kinderlos";
$pgv_lang["parents_timeline"]			= "Ehepaar in Lebensspannen-Ansicht zeigen";

//-- CLIPPINGS FILE MESSAGES
$pgv_lang["clip_cart"]					= "Sammelbehälter";
$pgv_lang["which_links"]				= "Welche Verbindungen dieser Familie möchten Sie noch hinzufügen?";
$pgv_lang["just_family"]				= "Nur den Familiendatensatz dieser Familie hinzufügen.";
$pgv_lang["parents_and_family"]			= "Den Familiendatensatz und die Datensätze der Eltern dieser Familie hinzufügen.";
$pgv_lang["parents_and_child"]			= "Den Familiendatensatz, die der Eltern und die der Kinder dieser Familie hinzufügen.";
$pgv_lang["parents_desc"]				= "Den Familiendatensatz, die Datensätze aller Nachkommen, und die der Eltern hinzufügen.";
$pgv_lang["continue"]					= "Fortsetzen";
$pgv_lang["which_p_links"]				= "Welche Verbindungen dieser Person möchten Sie hinzufügen?";
$pgv_lang["just_person"]				= "Nur den Datensatz dieser Person hinzufügen.";
$pgv_lang["person_parents_sibs"]		= "Den Datensatz dieser Person, die seiner Eltern und seiner Geschwister hinzufügen.";
$pgv_lang["person_ancestors"]			= "Den Datensatz dieser Person und die seiner direkten Vorfahren hinzufügen.";
$pgv_lang["person_ancestor_fams"]		= "Den Datensatz dieser Person, die seiner direkten Vorfahren und die Datensätze derer Familien hinzufügen.";
$pgv_lang["person_spouse"]				= "Den Datensatz dieser Person, den seines Ehepartners und die seiner Kinder hinzufügen.";
$pgv_lang["person_desc"]				= "Den Datensatz dieser Person, den seines Ehepartners und die aller seiner Nachfahren hinzufügen.";
$pgv_lang["linked_source"]				= "Diese Quelle sowie alle mit ihr verbundene Familien und Personen hinzufügen.";
$pgv_lang["just_source"]				= "Nur diese Quelle hinzufügen.";
$pgv_lang["which_s_links"]				= "Welche mit dieser Quelle verbundene Datensätze möchten Sie hinzufügen?";
$pgv_lang["person_private"]				= "Details dieser Person sind vertraulich. Persönliche Details werden nicht eingefügt.";
$pgv_lang["family_private"]				= "Details dieser Familie sind vertraulich. Persönliche Details werden nicht eingefügt.";
$pgv_lang["download"]					= "Klicken Sie mit der rechten Maustaste (beim Mac Control-Klick) auf den untenstehenden Link und wählen &quot;Ziel speichern unter&quot;, um den Sammelbehälter als GEDCOM Datei auf Ihren eigenen Computer zu übertragen (Download).";
$pgv_lang["cart_is_empty"]				= "Ihr Sammelbehälter ist leer.";
$pgv_lang["id"]							= "Identifikationsnummer (ID)";
$pgv_lang["name_description"]			= "Name / Beschreibung";
$pgv_lang["remove"]						= "Entfernen";
$pgv_lang["empty_cart"]					= "Sammelbehälter leeren";
$pgv_lang["download_now"]				= "Jetzt herunterladen";
$pgv_lang["download_file"]				= "Datei #GLOBAL[whichFile]# herunterladen";
$pgv_lang["indi_downloaded_from"]		= "Daten dieser Person wurden geladen von:";
$pgv_lang["family_downloaded_from"]		= "Daten dieser Familie wurden geladen von:";
$pgv_lang["source_downloaded_from"]		= "Daten dieser Quelle wurden geladen von:";
//-- PLACELIST FILE MESSAGES
$pgv_lang["connections"]				= "Orts-Verbindungen gefunden";
$pgv_lang["top_level"]					= "Höchste Stufe";
$pgv_lang["form"]						= "Ortsangaben werden im folgenden Format ausgewertet:";
$pgv_lang["default_form"]				= "Stadt, Kreis, (Bundes)Land, Staat";
$pgv_lang["default_form_info"]			= "(Standardeinstellung)";
$pgv_lang["unknown"]					= "Unbekannt";
$pgv_lang["individuals"]				= "Personen";
$pgv_lang["view_records_in_place"]		= "Alle Datensätze für diesen Ort zeigen";
$pgv_lang["place_list2"]				= "Ortsliste";
$pgv_lang["show_place_hierarchy"]		= "Orts-Hierarchie zeigen";
$pgv_lang["show_place_list"]			= "Alle Orte in einer Liste zeigen";
$pgv_lang["total_unic_places"]			= "Anzahl Orte";
//-- MEDIALIST FILE MESSAGES
$pgv_lang["external_objects"]			= "Externe Objekte";
$pgv_lang["multi_title"]				= "Liste der Multimedia Objekte";
$pgv_lang["media_found"]				= "Multimedia Objekte gefunden";
$pgv_lang["view_person"]				= "Person zeigen";
$pgv_lang["view_family"]				= "Familie zeigen";
$pgv_lang["view_source"]				= "Quelle zeigen";
$pgv_lang["view_object"]				= "Objekt zeigen";
$pgv_lang["prev"]						= "&lt; Vorhergehende Seite";
$pgv_lang["next"]						= "Nächste Seite &gt;";
$pgv_lang["next_image"]					= "Nächstes Bild";
$pgv_lang["file_not_found"]				= "Datei nicht gefunden.";
$pgv_lang["medialist_show"]				= "Zeige";
$pgv_lang["per_page"]					= "Objekte pro Seite";
$pgv_lang["current_dir"]				= "Aktuelles Verzeichnis";
$pgv_lang["SHOW_ID_NUMBERS"]			= "ID-Nummern zeigen";
$pgv_lang["SHOW_HIGHLIGHT_IMAGES"]		= "Definierte Fotos in den Personenboxen zeigen";
$pgv_lang["view_img_details"]			= "Einzelheiten zeigen";
//-- SEARCH FILE MESSAGES
$pgv_lang["search_gedcom"]				= "Dateien durchsuchen";
$pgv_lang["enter_terms"]				= "Suchbegriffe eingeben";
$pgv_lang["soundex_search"]				= "Den Namen nach Aussprache suchen (Soundex-Methode)";
$pgv_lang["sources"]					= "Quellen";
$pgv_lang["firstname_search"]			= "Vorname";
$pgv_lang["lastname_search"]			= "Nachname";
$pgv_lang["search_place"]				= "Ort";
$pgv_lang["search_year"]				= "Jahr";
$pgv_lang["no_results"]					= "Keine Ergebnisse gefunden.";
$pgv_lang["search_geds"]				= "Dateien in denen gesucht wird";
$pgv_lang["search_general"]				= "Normale Suche";
$pgv_lang["clipping_privacy"]			= "Einige Daten konnten wegen Datenschutz nicht hinzugefügt werden";
$pgv_lang["chart_new"]					= "Stammbaum";
$pgv_lang["loading"]					= "Laden...";
$pgv_lang["add_individual_by_id"]		= "Person, durch ID identifiziert, hinzufügen";
$pgv_lang["include_media"]				= "Medien hinzufügen (Dateien werden automatisch ins ZIP-Format geändert)";
$pgv_lang["zip_files"]					= "Dateien ins ZIP-Format ändern";
$pgv_lang["advanced_options"]			= "Höhere Optionen";
$pgv_lang["choose_file_type"]			= "Dateityp wählen";
$pgv_lang["file_information"]			= "Datei-Informationen";
$pgv_lang["clear_chart"]				= "Diagramm löschen";
$pgv_lang["search_soundex"]				= "Soundex Suche";
$pgv_lang["search_replace"]				= "Suchen und ändern";
$pgv_lang["search_inrecs"]				= "Suchen nach";
$pgv_lang["search_fams"]				= "Familiennamen";
$pgv_lang["search_indis"]				= "Personennamen";
$pgv_lang["search_sources"]				= "Quellen";
$pgv_lang["search_more_chars"]			= "Bitte mehr als einen Buchstaben eingeben";
$pgv_lang["search_soundextype"]			= "Soundex Variante:";
$pgv_lang["search_russell"]				= "Russell";
$pgv_lang["search_DM"]					= "Daitch-Mokotoff";
$pgv_lang["search_prtnames"]			= "Personen<br />Namen zu drucken:";
$pgv_lang["search_prthit"]				= "Namen mit Treffern";
$pgv_lang["search_prtall"]				= "Alle Namen";
$pgv_lang["search_tagfilter"]			= "Ausschließ-Filter";
$pgv_lang["search_tagfon"]				= "Einige Nicht-Genealogie Daten ausschließen";
$pgv_lang["search_tagfoff"]				= "Ausgeschaltet";
$pgv_lang["associate"]					= "Beziehung";
$pgv_lang["search_record"]				= "Ganzer Datensatz";
$pgv_lang["search_asso_label"]			= "Beziehungen";
$pgv_lang["search_asso_text"]			= "Bezogene Personen/Familien zeigen";
$pgv_lang["results_per_page"]			= "Ergebnisse pro Seite";
$pgv_lang["search_to"]					= "bis";
//-- SOURCELIST FILE MESSAGES
$pgv_lang["titles_found"]				= "Titel";
$pgv_lang["find_source"]				= "Quelle suchen";
//-- REPOLIST FILE MESSAGES
$pgv_lang["repo_list"]					= "Archiv Liste";
$pgv_lang["repos_found"]				= "gefundene Archive";
$pgv_lang["find_repository"]			= "Archiv suchen";
$pgv_lang["total_repositories"]			= "Anzahl Archive";
$pgv_lang["repo_info"]					= "Archiv Informationen";
$pgv_lang["other_repo_records"]			= "Datensätze, die auf dieses Archiv verweisen:";
$pgv_lang["confirm_delete_repo"]		= "Möchten Sie dieses Archiv wirklich aus der Datenbank löschen?";
//-- SOURCE FILE MESSAGES
$pgv_lang["source_info"]				= "Informationen zur Quelle";
$pgv_lang["other_records"]				= "Datensätze, die auf diese Quelle verweisen:";
$pgv_lang["people"]						= "Personen";
$pgv_lang["families"]					= "Familien";
$pgv_lang["total_sources"]				= "Anzahl Quellen:";
//-- BUILDINDEX FILE MESSAGES
$pgv_lang["invalid_gedformat"]			= "Format entspricht nicht dem GEDCOM Standard";
$pgv_lang["exec_time"]					= "Ausführungszeit:";
$pgv_lang["unable_to_create_index"]		= "Index Dateien können nicht erstellt werden. Stellen Sie sicher, dass die Rechte zum Schreiben im PhpGedView-Verzeichnis gesetzt sind. Die Rechte können zurückgesetzt werden, sobald die Index Dateien erstellt sind.";
$pgv_lang["changes_present"]			= "Die aktuelle GEDCOM Datei enthält Änderungen die noch kontrolliert werden müssen. Wenn Sie mit dem Import fortfahren, werden diese Änderungen unmittelbar in die Datenbank eingefügt. Sie sollten die Änderungen kontrollieren, bevor Sie mit dem Importieren fortfahren.";
$pgv_lang["sec"]						= "s";
//-- INDIVIDUAL AND FAMILYLIST FILE MESSAGES
$pgv_lang["total_fams"]					= "Familien insgesamt";
$pgv_lang["total_indis"]				= "Personen insgesamt";
$pgv_lang["notes"]						= "Bemerkungen";
$pgv_lang["ssourcess"]					= "Quellen";
$pgv_lang["media"]						= "Multimedia";
$pgv_lang["name_contains"]				= "Name enthält:";
$pgv_lang["filter"]						= "Filter";
$pgv_lang["find_individual"]			= "Person suchen";
$pgv_lang["find_familyid"]				= "Familie suchen";
$pgv_lang["find_sourceid"]				= "Quelle suchen";
$pgv_lang["find_specialchar"]			= "Ungewöhnliche Zeichen";
$pgv_lang["magnify"]					= "Vergrößern";
$pgv_lang["skip_surnames"]				= "Nachnamenlisten überspringen";
$pgv_lang["show_surnames"]				= "Nachnamenlisten zeigen";
$pgv_lang["all"]						= "ALLE";
$pgv_lang["hidden"]						= "Verborgen";
$pgv_lang["confidential"]				= "Vertraulich";
$pgv_lang["alpha_index"]				= "Alphabetisches Verzeichnis";
$pgv_lang["name_list"]					= "Nachnamenliste";
$pgv_lang["firstname_alpha_index"]		= "Alphabetisches Vornamen Verzeichnis";
$pgv_lang["widower"]					= "Witwer";
$pgv_lang["widow"]						= "Witwe";
$pgv_lang["leaves"]						= "Blätter";
$pgv_lang["roots"]						= "Wurzeln";
//-- TIMELINE FILE MESSAGES
$pgv_lang["age"]						= "Alter";
$pgv_lang["days"]						= "Tage";
$pgv_lang["months"]						= "Monate";
$pgv_lang["years"]						= "Jahre";
$pgv_lang["day1"]						= "Tag";
$pgv_lang["month1"]						= "Monat";
$pgv_lang["year1"]						= "Jahr";
$pgv_lang["after_death"]        		= "nach Tod";
$pgv_lang["timeline_title"]				= "Lebensspanne";
$pgv_lang["timeline_chart"]				= "Lebenspannenanzeige";
$pgv_lang["remove_person"]				= "Person entfernen";
$pgv_lang["show_age"]					= "Altersanker zeigen";
$pgv_lang["add_another"]				= "Andere Person zur Ansicht hinzufügen:<br />Personen ID:";
$pgv_lang["find_id"]					= "ID suchen";
$pgv_lang["show"]						= "Zeigen";
$pgv_lang["year"]						= "Jahr:";
$pgv_lang["timeline_instructions"]		= "In den meisten neueren Browsern, kann man die Rechtecke durch Klicken und gleichzeitiges Ziehen innerhalb der Ansicht bewegen.";
$pgv_lang["zoom_in"]					= "Vergrößern";
$pgv_lang["zoom_out"]					= "Verkleinern";
$pgv_lang["timeline_endYear"]			= "End-Jahr";
$pgv_lang["lifespan_chart"]				= "Lebensspannen-Diagramm";
$pgv_lang["include_family"]				= "Direkte Familie hinzufügen";
$pgv_lang["timeline_controls"]			= "Lebensspannen-Regler";
$pgv_lang["timeline_scrollSpeed"]		= "Geschwindigkeit";
$pgv_lang["timeline_beginYear"]			= "Start-Jahr";

// calendar conversion options
$pgv_lang["cal_none"]                 = "Keine Übersetzung";
$pgv_lang["cal_gregorian"]            = "Gregorianisch";
$pgv_lang["cal_julian"]               = "Julianisch";
$pgv_lang["cal_french"]               = "Französisch";
$pgv_lang["cal_jewish"]               = "Jüdisch";
$pgv_lang["cal_hebrew"]               = "Hebräisch";
$pgv_lang["cal_jewish_and_gregorian"] = "Jüdisch und Gregorianisch";
$pgv_lang["cal_hebrew_and_gregorian"] = "Hebräisch und Gregorianisch";
$pgv_lang["cal_hijri"]                = "Hijri";
$pgv_lang["cal_arabic"]               = "Arabisch";

// am/pm suffixes for 12 hour clocks
$pgv_lang["a.m."]         = "am";
$pgv_lang["p.m."]         = "pm";
$pgv_lang["noon"]         = "m";
$pgv_lang["midn"]         = "mn";

//-- MONTH NAMES
$pgv_lang["jan"]						= "Januar";
$pgv_lang["feb"]						= "Februar";
$pgv_lang["mar"]						= "März";
$pgv_lang["apr"]						= "April";
$pgv_lang["may"]						= "Mai";
$pgv_lang["jun"]						= "Juni";
$pgv_lang["jul"]						= "Juli";
$pgv_lang["aug"]						= "August";
$pgv_lang["sep"]						= "September";
$pgv_lang["oct"]						= "Oktober";
$pgv_lang["nov"]						= "November";
$pgv_lang["dec"]						= "Dezember";

$pgv_lang["vend"]         				= "Vendémiaire";
$pgv_lang["brum"]         				= "Brumaire";
$pgv_lang["frim"]         				= "Frimaire";
$pgv_lang["nivo"]         				= "Nivôse";
$pgv_lang["pluv"]         				= "Pluviôse";
$pgv_lang["vent"]         				= "Ventôse";
$pgv_lang["germ"]         				= "Germinal";
$pgv_lang["flor"]         				= "Floréal";
$pgv_lang["prai"]         				= "Prairial";
$pgv_lang["mess"]         				= "Messidor";
$pgv_lang["ther"]         				= "Thermidor";
$pgv_lang["fruc"]         				= "Fructidor";
$pgv_lang["comp"]         				= "jours complémentaires";

$pgv_lang["tsh"]          				= "Tishri";
$pgv_lang["csh"]          				= "Cheshvan";
$pgv_lang["ksl"]          				= "Kislev";
$pgv_lang["tvt"]          				= "Tevet";
$pgv_lang["shv"]          				= "Shevat";
$pgv_lang["adr"]          				= "Adar";
$pgv_lang["adr_leap_year"]				= "Adar I";
$pgv_lang["ads"]						= "Adar II";
$pgv_lang["nsn"]          				= "Nisan";
$pgv_lang["iyr"]          				= "Iyar";
$pgv_lang["svn"]          				= "Sivan";
$pgv_lang["tmz"]          				= "Tammuz";
$pgv_lang["aav"]          				= "Av";
$pgv_lang["ell"]          				= "Elul";

$pgv_lang["muhar"]						= "Muharram";
$pgv_lang["safar"]						= "Safar";
$pgv_lang["rabia"]						= "Rabi' al-awwal";
$pgv_lang["rabit"]						= "Rabi' al-thani";
$pgv_lang["jumaa"]						= "Jumada al-awwal";
$pgv_lang["jumat"]						= "Jumada al-thani";
$pgv_lang["rajab"]						= "Rajab";
$pgv_lang["shaab"]						= "Sha'aban";
$pgv_lang["ramad"]						= "Ramadan";
$pgv_lang["shaww"]						= "Shawwal";
$pgv_lang["dhuaq"]						= "Dhu al-Qi'dah";
$pgv_lang["dhuah"]						= "Dhu al-Hijjah";

$pgv_lang["b.c."]         				= "v. Chr.";

$pgv_lang["abt"]						= "um";
$pgv_lang["aft"]						= "nach";
$pgv_lang["and"]						= "und";
$pgv_lang["bef"]						= "vor";
$pgv_lang["bet"]						= "zwischen";
$pgv_lang["cal"]						= "berechnet";
$pgv_lang["est"]						= "geschätzt";
$pgv_lang["from"]						= "vom";
$pgv_lang["int"]						= "interpretiert";
$pgv_lang["to"]							= "bis";
$pgv_lang["cir"]						= "ca.";
$pgv_lang["apx"]						= "ungef.";
//-- Admin File Messages
$pgv_lang["rebuild_indexes"]			= "Index Dateien neu erstellen";
$pgv_lang["user_admin"]					= "Benutzer Verwaltung";
$pgv_lang["password_mismatch"]			= "Passwörter stimmen nicht überein.";
$pgv_lang["enter_username"]				= "Sie müssen einen Benutzernamen eingeben.";
$pgv_lang["enter_fullname"]				= "Sie müssen einen vollständigen Namen eingeben.";
$pgv_lang["enter_password"]				= "Sie müssen ein Kennwort eingeben.";
$pgv_lang["confirm_password"]			= "Sie müssen das Kennwort bestätigen.";
$pgv_lang["save"]						= "Speichern";
$pgv_lang["saveandgo"]		= "Speichern und nächsten Datensatz aufrufen";
$pgv_lang["delete"]						= "Löschen";
$pgv_lang["edit"]						= "Bearbeiten";
$pgv_lang["no_login"]					= "Kann Benutzer nicht verifizieren.";
$pgv_lang["basic_realm"]				= "PhpGedView Verifizierungs-System";
$pgv_lang["basic_auth_failure"]			= "Sie müssen einen gültigen Benutzernamen und dessen Kennwort eingeben, um auf dieses System zuzugreifen.";
$pgv_lang["basic_auth"]					= "Einfache Verifizierung";
$pgv_lang["digest_auth"]				= "Auszug-Verifizierung";
$pgv_lang["no_auth_needed"]				= "Verifizierung nicht erfordert";
$pgv_lang["file_not_exists"]			= "Eine Datei mit dem eingegebenen Namen existiert nicht.";
$pgv_lang["research_assistant"]			= "Forschungs-Assistent";
$pgv_lang["utf8_to_ansi"]				= "Möchten Sie diese GEDCOM Datei vom UTF-8 in den ANSI (ISO-8859-1) Zeichensatz konvertieren?";
$pgv_lang["media_linked"]				= "Dieses Medien Objekt ist wie folgt verbunden:";
$pgv_lang["media_not_linked"]			= "Dieses Medien Objekt ist mit keinem GEDCOM Datensatz verbunden.";
$pgv_lang["relationship_great"]			= "Ur";
$pgv_lang["media_dir_1"]				= "Dieses Medien Objekt befindet sich auf einem externen Server";
$pgv_lang["media_dir_2"]				= "Dieses Medien Objekt befindet sich im gewöhnlichen Medien-Verzeichnis";
$pgv_lang["media_dir_3"]				= "Dieses Medien Objekt befindet sich im geschützten Medien-Verzeichnis";
$pgv_lang["thumb_dir_1"]				= "Dieses Miniaturbild befindet sich auf einem externen Server";
$pgv_lang["thumb_dir_2"]				= "Dieses Miniaturbild befindet sich im gewöhnlichen Medien-Verzeichnis";
$pgv_lang["thumb_dir_3"]				= "Dieses Miniaturbild befindet sich im geschützten Medien-Verzeichnis";
$pgv_lang["moveto_2"]					= "Ins geschütztes Verzeichnis verlegen";
$pgv_lang["moveto_3"]					= "Ins gewöhnliches Verzeichnis verlegen";
$pgv_lang["move_standard"]				= "Nach gew. Verz. verlegen";
$pgv_lang["move_protected"]				= "Nach gesch. Verz. verlegen";
$pgv_lang["setperms"]					= "Medienverzeichnis-Rechte bestimmen";
$pgv_lang["setperms_writable"]			= "Für alle schreibbar";
$pgv_lang["setperms_readonly"]			= "Nur lesbar";
$pgv_lang["setperms_success"]			= "Rechte wurden eingestellt";
$pgv_lang["setperms_failure"]			= "Rechte konnten nicht eingestellt werden";
$pgv_lang["setperms_time_exceeded"]		= "Die maximale Ausführungszeit wurde überschritten.  Bitte versuchen Sie den Befehl wieder, aber mit weniger Dateien im Verzeichnis.";
$pgv_lang["move_mediadirs"]				= "Medien-Verzeichnisse verlegen";
$pgv_lang["move_time_exceeded"]			= "Die maximale Ausführungszeit wurde überschritten.  Bitte versuchen Sie den Befehl wieder, um weitere Dateien zu verlegen.";
$pgv_lang["media_firewall_rootdir_no_exist"]			= "Das Media-Firewall Verzeichnis besteht nicht.  Sie müssen es zuerst erstellen.";
$pgv_lang["media_firewall_protected_dir_no_exist"]		= "Das geschützte Medien-Verzeichnis konnte im Media-Firewall Verzeichnis nicht erstellt werden.  Sie müssen es erstellen, und auch darin öffentliches Schreiben erlauben.";
$pgv_lang["media_firewall_protected_dir_not_writable"]	= "Das geschützte Medien-Verzeichnis im Media-Firewall Verzeichnis ist nicht öffentlich schreibbar. ";
$pgv_lang["media_firewall_invalid_dir"]	= "Fehler: Die Medien-Feuerwand wurde außerhalb des Medien-Verzeichnisses aufgerufen.";

//-- Relationship chart messages
$pgv_lang["relationship_chart"]			= "Verwandtschaftsberechnung";
$pgv_lang["person1"]					= "Person 1";
$pgv_lang["person2"]					= "Person 2";
$pgv_lang["no_link_found"]				= "Keine (weitere) Verbindung zwischen den beiden Personen gefunden.";
$pgv_lang["sibling"]					= "Geschwister";
$pgv_lang["follow_spouse"]				= "Verwandtschaft anhand der Ehen überprüfen";
$pgv_lang["timeout_error"]				= "Die maximal zulässige Ausführungszeit wurde überschritten, bevor ein Verwandtschaftsverhältnis gefunden werden konnte.";
$pgv_lang["son"]						= "Sohn";
$pgv_lang["daughter"]					= "Tochter";
$pgv_lang["son-in-law"]					= "Schwiegersohn";
$pgv_lang["daughter-in-law"]			= "Schwiegertochter";
$pgv_lang["grandchild"]					= "Enkelkind";
$pgv_lang["grandson"]					= "Enkelsohn";
$pgv_lang["granddaughter"]				= "Enkeltochter";
$pgv_lang["brother"]					= "Bruder";
$pgv_lang["sister"]						= "Schwester";
$pgv_lang["brother-in-law"]				= "Schwager";
$pgv_lang["sister-in-law"]				= "Schwägerin";
$pgv_lang["aunt"]						= "Tante";
$pgv_lang["uncle"]						= "Onkel";
$pgv_lang["nephew"]						= "Neffe";
$pgv_lang["niece"]						= "Nichte";
$pgv_lang["firstcousin"]				= "Vetter ersten Grades";
$pgv_lang["femalecousin"]				= "Cousine";
$pgv_lang["malecousin"]					= "Cousin";
$pgv_lang["cousin-in-law"]				= "Schwiegercousin";
$pgv_lang["relationship_to_me"]			= "Verwandtschaft zu mir";
$pgv_lang["rela_husb"]					= "Verwandtschaft zum Ehemann";
$pgv_lang["rela_wife"]					= "Verwandschaft zur Ehefrau";
$pgv_lang["next_path"]					= "Nächsten Pfad suchen";
$pgv_lang["show_path"]					= "Pfad zeigen";
$pgv_lang["line_up_generations"]		= "Personen gleicher Generation auf gleicher Ebene darstellen";
$pgv_lang["oldest_top"]					= "Älteste zuoberst";
// %1\$s replaced by first person, %2\$s by the relationship and %3\$s by the second person.
$pgv_lang["relationship_male_1_is_the_2_of_3"]		= "%1\$s ist %2\$s von %3\$s.";
$pgv_lang["relationship_female_1_is_the_2_of_3"]	= "%1\$s ist %2\$s von %3\$s.";
$pgv_lang["mother_in_law"]				= "Schwiegermutter";
$pgv_lang["father_in_law"]				= "Schwiegervater";
$pgv_lang["brother_in_law"]				= "Schwager";
$pgv_lang["sister_in_law"]				= "Schwägerin";
$pgv_lang["son_in_law"]					= "Schwiegersohn";
$pgv_lang["daughter_in_law"]			= "Schwiegertochter";
$pgv_lang["step_son"]					= "Stiefsohn";
$pgv_lang["step_daughter"]				= "Stieftochter";
// the bosa_brothers_offspring name is used for fraternal nephews and nieces - the names below can be extended to any number
// of generations just by adding more translations.
// 1st generation
$pgv_lang["bosa_brothers_offspring_2"]	= "Neffe";
$pgv_lang["bosa_brothers_offspring_3"]	= "Nichte";
// 2nd generation
$pgv_lang["bosa_brothers_offspring_4"]	= "Großneffe";
$pgv_lang["bosa_brothers_offspring_5"]	= "Großnichte";
$pgv_lang["bosa_brothers_offspring_6"]	= "Großneffe";
$pgv_lang["bosa_brothers_offspring_7"]	= "Großnichte";
// for the general case of offspring of the nth generation use the text below
// in this text %1\$d is replaced with the number of generations
//			  %2\$d is replaced with the number of generations - 1
//			  %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_brothers_son"]			= "%2\$d x Großneffe";
$pgv_lang["n_x_brothers_daughter"]		= "%2\$d x Großnichte";
// the bosa_sisters_offspring name is used for sisters nephews and nieces - the names below can be extended to any number
// of generations just by adding more translations.
// 1st generation
$pgv_lang["bosa_sisters_offspring_2"]	= "Neffe";
$pgv_lang["bosa_sisters_offspring_3"]	= "Nichte";
// 2nd generation
$pgv_lang["bosa_sisters_offspring_4"]	= "Großneffe";
$pgv_lang["bosa_sisters_offspring_5"]	= "Großnichte";
$pgv_lang["bosa_sisters_offspring_6"]	= "Großneffe";
$pgv_lang["bosa_sisters_offspring_7"]	= "Großnichte";
// for the general case of offspring of the nth generation use the text below
// in this text %1\$d is replaced with the number of generations
//			  %2\$d is replaced with the number of generations - 1
//			  %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_sisters_son"]			= "%2\$d x Großneffe";
$pgv_lang["n_x_sisters_daughter"]		= "%2\$d x Großnichte";
// the bosa name is used for offspring - the names below can be extended to any number
// of generations just by adding more translations.
// 1st generation
$pgv_lang["bosa_2"]						= "Sohn";
$pgv_lang["bosa_3"]						= "Tochter";
// 2nd generation
$pgv_lang["bosa_4"]						= "Enkel";
$pgv_lang["bosa_5"]						= "Enkelin";
$pgv_lang["bosa_6"]						= "Enkel";
$pgv_lang["bosa_7"]						= "Enkelin";
// 3rd generation
$pgv_lang["bosa_8"]						= "Urenkel";
$pgv_lang["bosa_9"]						= "Urenkelin";
$pgv_lang["bosa_10"]					= "Urenkel";
$pgv_lang["bosa_11"]					= "Urenkelin";
$pgv_lang["bosa_12"]					= "Urenkel";
$pgv_lang["bosa_13"]					= "Urenkelin";
$pgv_lang["bosa_14"]					= "Urenkel";
$pgv_lang["bosa_15"]					= "Urenkelin";
// for the general case of offspring of the nth generation use the text below
// in this text %1\$d is replaced with the number of generations
//			  %2\$d is replaced with the number of generations - 1
//			  %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_grandson_from_son"]		= "%3\$d x Urenkel";
$pgv_lang["n_x_granddaughter_from_son"]	= "%3\$d x Urenkelin";
$pgv_lang["n_x_grandson_from_daughter"]	= "%3\$d x Urenkel";
$pgv_lang["n_x_granddaughter_from_daughter"]	= "%3\$d x Urenkelin";
// the sosa_uncle name is used for uncles - the names below can be extended to any number
// of generations just by adding more translations.
// to allow fo language variations we specify different relationships for paternal and maternal
// aunts and uncles
// 1st generation
$pgv_lang["sosa_uncle_2"]				= "Onkel";
$pgv_lang["sosa_uncle_3"]				= "Onkel";
// 2nd generation
$pgv_lang["sosa_uncle_4"]				= "Großonkel";
$pgv_lang["sosa_uncle_5"]				= "Großonkel";
$pgv_lang["sosa_uncle_6"]				= "Großonkel";
$pgv_lang["sosa_uncle_7"]				= "Großonkel";
// for the general case of uncles of the nth degree use the text below
// in this text %1\$d is replaced with the number of generations
//			  %2\$d is replaced with the number of generations - 1
//			  %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_paternal_uncle"]			= "%2\$d x Großonkel";
$pgv_lang["n_x_maternal_uncle"]			= "%2\$d x Großonkel";
// the sosa_aunt name is used for aunts - the names below can be extended to any number
// of generations just by adding more translations.
// to allow fo language variations we specify different relationships for paternal and maternal
// aunts and aunts
// 1st generation
$pgv_lang["sosa_aunt_2"]				= "Tante";
$pgv_lang["sosa_aunt_3"]				= "Tante";
// 2nd generation
$pgv_lang["sosa_aunt_4"]				= "Großtante";
$pgv_lang["sosa_aunt_5"]				= "Großtante";
$pgv_lang["sosa_aunt_6"]				= "Großtante";
$pgv_lang["sosa_aunt_7"]				= "Großtante";
// for the general case of aunts of the nth degree use the text below
// in this text %1\$d is replaced with the number of generations
//			  %2\$d is replaced with the number of generations - 1
//			  %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_paternal_aunt"]			= "%2\$d x Großtante";
$pgv_lang["n_x_maternal_aunt"]			= "%2\$d x Großtante";
// the sosa_uncle_bm name is used for uncles (by marriage)- the names below can be extended to any number
// of generations just by adding more translations.
// to allow fo language variations we specify different relationships for paternal and maternal
// aunts and uncles
// 1st generation
$pgv_lang["sosa_uncle_bm_2"]			= "Onkel";
$pgv_lang["sosa_uncle_bm_3"]			= "Onkel";
// 2nd generation
$pgv_lang["sosa_uncle_bm_4"]			= "Großonkel";
$pgv_lang["sosa_uncle_bm_5"]			= "Großonkel";
$pgv_lang["sosa_uncle_bm_6"]			= "Großonkel";
$pgv_lang["sosa_uncle_bm_7"]			= "Großonkel";
// for the general case of uncles of the nth degree use the text below
// in this text %1\$d is replaced with the number of generations
//			  %2\$d is replaced with the number of generations - 1
//			  %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_paternal_uncle_bm"]		= "%2\$d x Großonkel";
$pgv_lang["n_x_maternal_uncle_bm"]		= "%2\$d x Großonkel";
// the sosa_aunt_bm name is used for aunts (by marriage)- the names below can be extended to any number
// of generations just by adding more translations.
// to allow fo language variations we specify different relationships for paternal and maternal
// aunts and aunts
// 1st generation
$pgv_lang["sosa_aunt_bm_2"]				= "Tante";
$pgv_lang["sosa_aunt_bm_3"]				= "Tante";
// 2nd generation
$pgv_lang["sosa_aunt_bm_4"]				= "Großtante";
$pgv_lang["sosa_aunt_bm_5"]				= "Großtante";
$pgv_lang["sosa_aunt_bm_6"]				= "Großtante";
$pgv_lang["sosa_aunt_bm_7"]				= "Großtante";
// for the general case of aunts of the nth degree use the text below
// in this text %1\$d is replaced with the number of generations
//			  %2\$d is replaced with the number of generations - 1
//			  %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_paternal_aunt_bm"]		= "%2\$d x Großtante";
$pgv_lang["n_x_maternal_aunt_bm"]		= "%2\$d x Großtante";
// if a specific cousin relationship cannot be represented in a language translate as "";
$pgv_lang["male_cousin_1"]				= "Cousin";
$pgv_lang["male_cousin_2"]				= "Cousin 2. Grades";
$pgv_lang["male_cousin_3"]				= "Cousin 3. Grades";
$pgv_lang["male_cousin_4"]				= "Cousin 4. Grades";
$pgv_lang["male_cousin_5"]				= "Cousin 5. Grades";
$pgv_lang["male_cousin_6"]				= "Cousin 6. Grades";
$pgv_lang["male_cousin_7"]				= "Cousin 7. Grades";
$pgv_lang["male_cousin_8"]				= "Cousin 8. Grades";
$pgv_lang["male_cousin_9"]				= "Cousin 9. Grades";
$pgv_lang["male_cousin_10"]				= "Cousin 10. Grades";
$pgv_lang["male_cousin_11"]				= "Cousin 11. Grades";
$pgv_lang["male_cousin_12"]				= "Cousin 12. Grades";
$pgv_lang["male_cousin_13"]				= "Cousin 13. Grades";
$pgv_lang["male_cousin_14"]				= "Cousin 14. Grades";
$pgv_lang["male_cousin_15"]				= "Cousin 15. Grades";
$pgv_lang["male_cousin_16"]				= "Cousin 16. Grades";
$pgv_lang["male_cousin_17"]				= "Cousin 17. Grades";
$pgv_lang["male_cousin_18"]				= "Cousin 18. Grades";
$pgv_lang["male_cousin_19"]				= "Cousin 19. Grades";
$pgv_lang["male_cousin_20"]				= "Cousin 20. Grades";
$pgv_lang["male_cousin_n"]				= "Cousin %d. Grades";
$pgv_lang["female_cousin_1"]			= "Cousine";
$pgv_lang["female_cousin_2"]			= "Cousine 2. Grades";
$pgv_lang["female_cousin_3"]			= "Cousine 3. Grades";
$pgv_lang["female_cousin_4"]			= "Cousine 4. Grades";
$pgv_lang["female_cousin_5"]			= "Cousine 5. Grades";
$pgv_lang["female_cousin_6"]			= "Cousine 6. Grades";
$pgv_lang["female_cousin_7"]			= "Cousine 7. Grades";
$pgv_lang["female_cousin_8"]			= "Cousine 8. Grades";
$pgv_lang["female_cousin_9"]			= "Cousine 9. Grades";
$pgv_lang["female_cousin_10"]			= "Cousine 10. Grades";
$pgv_lang["female_cousin_11"]			= "Cousine 11. Grades";
$pgv_lang["female_cousin_12"]			= "Cousine 12. Grades";
$pgv_lang["female_cousin_13"]			= "Cousine 13. Grades";
$pgv_lang["female_cousin_14"]			= "Cousine 14. Grades";
$pgv_lang["female_cousin_15"]			= "Cousine 15. Grades";
$pgv_lang["female_cousin_16"]			= "Cousine 16. Grades";
$pgv_lang["female_cousin_17"]			= "Cousine 17. Grades";
$pgv_lang["female_cousin_18"]			= "Cousine 18. Grades";
$pgv_lang["female_cousin_19"]			= "Cousine 19. Grades";
$pgv_lang["female_cousin_20"]			= "Cousine 20. Grades";
$pgv_lang["female_cousin_n"]			= "Cousine %d. Grades";
$pgv_lang["removed_ascending_1"]		= "1. Grades, steigend";
$pgv_lang["removed_ascending_2"]		= "2. Grades, steigend";
$pgv_lang["removed_ascending_3"]		= "3. Grades, steigend";
$pgv_lang["removed_ascending_4"]		= "4. Grades, steigend";
$pgv_lang["removed_ascending_5"]		= "5. Grades, steigend";
$pgv_lang["removed_ascending_6"]		= "6. Grades, steigend";
$pgv_lang["removed_ascending_7"]		= "7. Grades, steigend";
$pgv_lang["removed_ascending_8"]		= "8. Grades, steigend";
$pgv_lang["removed_ascending_9"]		= "9. Grades, steigend";
$pgv_lang["removed_ascending_10"]		= "10. Grades, steigend";
$pgv_lang["removed_ascending_11"]		= "11. Grades, steigend";
$pgv_lang["removed_ascending_12"]		= "12. Grades, steigend";
$pgv_lang["removed_ascending_13"]		= "13. Grades, steigend";
$pgv_lang["removed_ascending_14"]		= "14. Grades, steigend";
$pgv_lang["removed_ascending_15"]		= "15. Grades, steigend";
$pgv_lang["removed_ascending_16"]		= "16. Grades, steigend";
$pgv_lang["removed_ascending_17"]		= "17. Grades, steigend";
$pgv_lang["removed_ascending_18"]		= "18. Grades, steigend";
$pgv_lang["removed_ascending_19"]		= "19. Grades, steigend";
$pgv_lang["removed_ascending_20"]		= "20. Grades, steigend";
$pgv_lang["removed_descending_1"]		= "1. Grades, senkend"; 
$pgv_lang["removed_descending_2"]		= "2. Grades, senkend"; 
$pgv_lang["removed_descending_3"]		= "3. Grades, senkend";
$pgv_lang["removed_descending_4"]		= "4. Grades, senkend";
$pgv_lang["removed_descending_5"]		= "5. Grades, senkend";
$pgv_lang["removed_descending_6"]		= "6. Grades, senkend";
$pgv_lang["removed_descending_7"]		= "7. Grades, senkend";
$pgv_lang["removed_descending_8"]		= "8. Grades, senkend";
$pgv_lang["removed_descending_9"]		= "9. Grades, senkend";
$pgv_lang["removed_descending_10"]		= "10. Grades, senkend";
$pgv_lang["removed_descending_11"]		= "11. Grades, senkend";
$pgv_lang["removed_descending_12"]		= "12. Grades, senkend";
$pgv_lang["removed_descending_13"]		= "13. Grades, senkend";
$pgv_lang["removed_descending_14"]		= "14. Grades, senkend"; 
$pgv_lang["removed_descending_15"]		= "15. Grades, senkend"; 
$pgv_lang["removed_descending_16"]		= "16. Grades, senkend"; 
$pgv_lang["removed_descending_17"]		= "17. Grades, senkend"; 
$pgv_lang["removed_descending_18"]		= "18. Grades, senkend"; 
$pgv_lang["removed_descending_19"]		= "19. Grades, senkend"; 
$pgv_lang["removed_descending_20"]		= "20. Grades, senkend"; 
//-- GEDCOM edit utility
$pgv_lang["check_delete"]				= "Möchten Sie dieses Ereignis wirklich löschen?";
$pgv_lang["access_denied"]				= "<b>Zugriff verweigert</b><br />Sie besitzen hierfür keine Erlaubnis.";
$pgv_lang["changes_exist"]				= "Die Änderungen an der GEDCOM Datei wurden durchgeführt.";
$pgv_lang["find_place"]					= "Ort suchen";
$pgv_lang["close_window"]				= "Fenster schließen";
$pgv_lang["close_window_without_refresh"]	= "Fenster schließen ohne Neuladen";
$pgv_lang["place_contains"]				= "Ort enthält:";
$pgv_lang["add"]						= "hinzufügen";
$pgv_lang["custom_event"]				= "Benutzerdefiniertes Ereignis";
$pgv_lang["delete_person"]				= "Diese Person löschen";
$pgv_lang["confirm_delete_person"]		= "Möchten Sie diese Person wirklich aus der GEDCOM Datei löschen?";
$pgv_lang["find_media"]					= "Multimedia Datei suchen";
$pgv_lang["set_link"]					= "Verbindung setzen";
$pgv_lang["delete_source"]				= "Diese Quelle löschen";
$pgv_lang["confirm_delete_source"]		= "Möchten Sie diese Quelle wirklich aus der GEDCOM Datei löschen?";
$pgv_lang["find_family"]				= "Familie suchen";
$pgv_lang["find_fam_list"]				= "Familienliste suchen";
$pgv_lang["edit_name"]					= "Namen bearbeiten";
$pgv_lang["delete_name"]				= "Namen löschen";
$pgv_lang["select_date"]				= "Datum auswählen";
$pgv_lang["user_cannot_edit"]			= "Dieser Benutzername kann diese GEDCOM Datei nicht ändern.";
$pgv_lang["ged_noshow"]					= "Diese Seite wurde durch den Verwalter gesperrt.";
$pgv_lang["bdm"]						= "Geburten, Tode, Heiraten";
//-- calendar.php messages
$pgv_lang["on_this_day"]				= "An diesem Tag";
$pgv_lang["in_this_month"]				= "In diesem Monat";
$pgv_lang["in_this_year"]				= "In diesem Jahr";
$pgv_lang["year_anniversary"]			= "#year_var#. Jahrestag";
$pgv_lang["today"]						= "Heute";
$pgv_lang["day"]						= "Tag:";
$pgv_lang["month"]						= "Monat:";
$pgv_lang["showcal"]					= "Ereignisse zeigen von:";
$pgv_lang["anniversary"]				= "Jahrestag";
$pgv_lang["anniversary_calendar"]		= "Jahrestag Kalender";
$pgv_lang["sunday"]						= "Sonntag";
$pgv_lang["monday"]						= "Montag";
$pgv_lang["tuesday"]					= "Dienstag";
$pgv_lang["wednesday"]					= "Mittwoch";
$pgv_lang["thursday"]					= "Donnerstag";
$pgv_lang["friday"]						= "Freitag";
$pgv_lang["saturday"]					= "Samstag";
$pgv_lang["viewday"]					= "Tag zeigen";
$pgv_lang["viewmonth"]					= "Monat zeigen";
$pgv_lang["viewyear"]					= "Jahr zeigen";
$pgv_lang["all_people"]					= "Alle Personen";
$pgv_lang["living_only"]				= "Lebende Personen";
$pgv_lang["recent_events"]				= "Jüngere Ereignisse (&lt; 100 Jahre)";
$pgv_lang["day_not_set"]				= "Kein Tag angegeben";
//-- upload media messages
$pgv_lang["record_updated"]				= "Datensatz #pid# erfolgreich aktualisiert.";
$pgv_lang["record_not_updated"]			= "Datensatz #pid# konnte nicht aktualisiert werden.";
$pgv_lang["record_removed"]				= "Datensatz #xref# erfolgreich aus der Datei entfernt.";
$pgv_lang["record_not_removed"]			= "Datensatz #xref# konnte aus der Datei nicht entfernt werden.";
$pgv_lang["record_added"]				= "Datensatz #xref# erfolgreich der Datei hinzugefügt.";
$pgv_lang["record_not_added"]			= "Datensatz #xref# konnte der Datei nicht hinzugefügt werden.";
//-- user self registration module
$pgv_lang["lost_password"]				= "Haben Sie Ihr Kennwort verloren?";
$pgv_lang["requestpassword"]			= "Neues Kennwort beantragen";
$pgv_lang["no_account_yet"]				= "Haben Sie noch keine Benutzerdaten?";
$pgv_lang["requestaccount"]				= "Benutzer Antrag";
$pgv_lang["emailadress"]				= "Mail Adresse";
$pgv_lang["mandatory"]					= "Obligatorische Felder sind mit einem * markiert.";
$pgv_lang["mail01_line01"]				= "Hallo #user_fullname# ...";
$pgv_lang["mail01_line02"]				= "Auf der PhpGedView Webseite #SERVER_NAME# wurde ein Zugangsantrag mit Ihrer Mail Adresse #user_email# gestellt.";
$pgv_lang["mail01_line03"]				= "Informationen zu der Anfrage können Sie unter dem untenstehenden Link abrufen.";
$pgv_lang["mail01_line04"]				= "Bitte klicken Sie nun auf den folgenden Link und geben Sie die dort geforderten Daten ein, um Ihren Antrag und Ihre Mail Adresse zu bestätigen.";
$pgv_lang["mail01_line05"]				= "Falls Sie keinen Zugang beantragt haben, können Sie diese Mail einfach löschen.";
$pgv_lang["mail01_line06"]				= "Sie werden keine weitere Mail erhalten, da ohne Ihre Bestätigung die angegebenen Daten nach einer Woche automatisch gelöscht werden.";
$pgv_lang["mail01_subject"]				= "Ihre Anmeldung bei #SERVER_NAME#";
$pgv_lang["mail02_line01"]				= "Hallo Verwalter ...";
$pgv_lang["mail02_line02"]				= "Ein neuer Benutzer hat bei PhpGedView #SERVER_NAME# einen Zugang angefordert.";
$pgv_lang["mail02_line03"]				= "Der Benutzer hat eine Mail mit den zur Bestätigung notwendigen Informationen erhalten.";
$pgv_lang["mail02_line04"]				= "Sobald diese Bestätigung erfolgt ist, werden Sie erneut benachrichtigt und aufgefordert, diesen Zugang freizuschalten.  Der neue Benutzer kann sich nicht anmelden, bis Sie seinen Zugang zulassen.";
$pgv_lang["mail02_line04a"]				= "Sobald diese Bestätigung erfolgt ist, werden Sie erneut benachrichtigt.  Der Benutzer kann sich nach seiner eigenen Verifikation anmelden, ohne dass Sie weitere Schritte unternehmen müssen.";
$pgv_lang["mail02_subject"]				= "Neue Anmeldung bei #SERVER_NAME#";
$pgv_lang["hashcode"]					= "Verifizierungscode:";
$pgv_lang["thankyou"]					= "Hallo #user_fullname# ...<br />Danke für Ihren Antrag.";
$pgv_lang["pls_note06"]					= "Ihnen wird nun eine Bestätigungsmail an die Adresse <b>#user_email#</b> geschickt.  Sie müssen den in der Mail enthaltenen Anweisungen folgen, um Ihren Benutzernamen zu aktivieren. Falls Sie innerhalb von 7 Tagen nicht reagieren, wird Ihr Antrag automatisch abgewiesen.  Sie müssen dann erneut antragen.<br /><br />Wenn Sie den Anweisungen in der Bestätigungsmail gefolgt sind, muss der Verwalter Ihren Benutzernamen noch freischalten, bevor Sie ihn benutzen können.<br /><br />Um sich auf dieser Webseite anzumelden, benötigen Sie Ihren Benutzernamen und Ihr Kennwort.<br /><br />";
$pgv_lang["pls_note06a"]				= "Ihnen wird nun eine Bestätigungsmail an die Adresse <b>#user_email#</b> geschickt. Sie müssen den in der Mail enthaltenen Anweisungen folgen, um Ihren Benutzernamen zu aktivieren. Falls Sie innerhalb von 7 Tagen nicht reagieren, wird Ihr Antrag automatisch abgewiesen. Sie müssen dann erneut antragen.<br /><br />Wenn Sie den Anweisungen in der Bestätigungs Mail gefolgt sind, können Sie sich sofort auf dieser Webseite anmelden. Dazu benötigen Sie Ihren Benutzernamen und Ihr Kennwort.<br /><br />";
$pgv_lang["registernew"]				= "Verifizierung der neuen Benutzerdaten";
$pgv_lang["user_verify"]				= "Benutzer Verifizierung";
$pgv_lang["send"]						= "Absenden";
$pgv_lang["pls_note07"]					= "~#pgv_lang[user_verify]#~<br /><br />Um Ihren Antrag zu bestätigen, geben Sie bitte nun Ihren Benutzernamen, Ihr Kennwort und den Verifizierungscode ein, den Sie per Mail erhalten haben.";
$pgv_lang["pls_note08"]					= "Die Angaben für den Benutzer <b>#user_name#</b> wurden überprüft.";
$pgv_lang["mail03_line01"]				= "Hallo Verwalter ...";
$pgv_lang["mail03_line02"]				= "Der Benutzer #newuser[username]# (#newuser[fullname]#) hat seine Registrierungsdaten bestätigt.";
$pgv_lang["mail03_line03"]				= "Bitte klicken Sie jetzt auf den unten stehenden Link und melden sich an.  Sie müssen den Zugang dieses Benutzers frei geben, damit dieser sich mit seinem Benutzernamen und Kennwort anmelden kann.";
$pgv_lang["mail03_line03a"]				= "Der Benutzer kann sich jetzt anmelden;  Sie müssen nichts weiter unternehmen.";
$pgv_lang["mail03_subject"]				= "Neue Verifizierung bei #SERVER_NAME#";
$pgv_lang["pls_note09"]					= "Sie haben Ihren Antrag als Benutzer bestätigt.";
$pgv_lang["pls_note10"]					= "Der Verwalter wurde benachrichtigt.  Sobald dieser Ihren Zugang freigegeben hat, können Sie sich mit Ihrem Benutzernamen und Kennwort anmelden.";
$pgv_lang["pls_note10a"]				= "Sie können sich jetzt mit Ihrem Benutzernamen und Kennwort anmelden.";
$pgv_lang["data_incorrect"]				= "Die Daten waren falsch, bitte versuchen Sie es erneut.";
$pgv_lang["user_not_found"]				= "Die eingegebenen Informationen waren falsch.  Bitte versuchen Sie es erneut.";
$pgv_lang["lost_pw_reset"]				= "Kennwort neu anfordern";
$pgv_lang["pls_note11"]					= "Um ein neues Kennwort zu beantragen, geben Sie bitte Ihren Benutzernamen und die Mail Adresse Ihres Zugangs ein.<br /><br />Wir werden Ihnen eine spezielle URL zumailen, die einen Bestätigungs Code für Ihren Zugang enthält. Auf der Web Seite dieser URL können Sie Ihr Kennwort ändern und sich anmelden. Aus Sicherheitsgründen sollten Sie diesen Bestätigungs Code niemandem mitteilen.<br /><br />Falls Sie Hilfe benötigen, schreiben Sie bitte eine Anfrage an den Verwalter.";
$pgv_lang["enter_email"]				= "Sie müssen eine Mail Adresse angeben.";
$pgv_lang["mail04_line01"]				= "Hallo #user_fullname#...";
$pgv_lang["mail04_line02"]				= "Für Ihren Benutzernamen wurde ein neues Kennwort angefordert.";
$pgv_lang["mail04_line03"]				= "Empfehlung:";
$pgv_lang["mail04_line04"]				= "Bitte klicken Sie jetzt auf den unten stehenden Link oder kopieren Sie ihn in die Adresszeile Ihres Browsers, melden sich mit dem neuen Kennwort an und ändern Sie es sofort aus Datenschutzgründen.";
$pgv_lang["mail04_line05"]				= "Um Ihr Kennwort, nachdem Sie sich angemeldet haben zu ändern, wählen Sie die «#pgv_lang[editowndata]#» Verbindung innerhalb des «#pgv_lang[mygedview]#» Menüs und tragen Sie dann in beiden Kennwort Feldern Ihr gewünschtes Kennwort ein.";
$pgv_lang["mail04_subject"]				= "Datenanforderung bei #SERVER_NAME#";
$pgv_lang["pwreqinfo"]					= "Hallo...<br /><br />Das neue Kennwort wurde an die uns bekannte Mail Adresse von <b>#user[email]#</b> versandt.<br /><br />Sie sollten das Mail bald in Ihrem Postfach finden.<br /><br />Hinweis:<br />Sie sollten sich baldmöglichst mit dem neuen Kennwort anmelden und Ihr Kennwort aus Datenschutzgründen sofort ändern.";
$pgv_lang["editowndata"]				= "Eigene Benutzerdaten bearbeiten";
$pgv_lang["myuserdata"]					= "Meine Benutzerdaten";
$pgv_lang["user_theme"]					= "Mein Theme";
$pgv_lang["mgv"]						= "MeinGedView";
$pgv_lang["mygedview"]					= "Mein GedView Portal";
$pgv_lang["passwordlength"]				= "Das Kennwort muss mindestens 6 Zeichen lang sein.";
$pgv_lang["welcome_text_auth_mode_1"]	= "<center><b>Willkommen auf dieser Genealogie Webseite</b></center><br />Den Zugriff auf diese Seite erhält jeder Benutzer, der einen Zugang beantragt hat.<br /><br />Wenn Sie bereits einen Benutzernamen haben, können Sie sich auf dieser Seite anmelden. Wenn Sie noch keinen Zugang besitzen, können Sie diesen beantragen, indem Sie auf den entsprechenden Link klicken.<br /><br />Sobald Ihre Angaben überprüft sind, wird der Verwalter Ihren Zugang freigeben. Sie werden dann eine Bestätigungsungsmail erhalten.";
$pgv_lang["welcome_text_auth_mode_2"]	= "<center><b>Willkommen auf dieser Genealogie Webseite</b></center><br />Der Zugriff auf diese Seite ist nur <u>autorisierten</u> Benutzern erlaubt.<br /><br />Wenn Sie bereits einen Benutzernamen haben, können Sie sich auf dieser Seite anmelden. Wenn Sie noch keinen Zugang besitzen, können Sie diesen beantragen, indem Sie auf den entsprechenden Link klicken.<br /><br />Sobald Ihre Angaben überprüft sind, wird der Verwalter Ihrem Antrag zustimmen (oder ihn ablehnen). Sie werden eine Mail mit dem Antragsergebnis erhalten.";
$pgv_lang["welcome_text_auth_mode_3"]	= "<center><b>Willkommen auf dieser Genealogie Webseite</b></center><br />Den Zugriff auf diese Seite erhalten <u>nur Familienmitglieder</u>.<br /><br />Wenn Sie bereits einen Benutzernamen haben, können Sie sich auf dieser Seite anmelden. Wenn Sie noch keinen Zugang besitzen, können Sie diesen beantragen, indem Sie auf den entsprechenden Link klicken.<br /><br />Sobald Ihre Angaben überprüft sind, wird der Verwalter Ihrem Antrag zustimmen (oder ihn ablehnen).<br />Sie werden eine Mail mit dem Antragsergebnis erhalten.";
$pgv_lang["welcome_text_cust_head"]		= "<center><b>Willkommen auf dieser Genealogie Webseite</b></center><br />Der Zugriff ist Benutzern vorbehalten, die einen Benutzernamen und ein Kennwort für diese Webseite haben.<br />";
$pgv_lang["acceptable_use"]				= "<div class=\"largeError\">Bitte beachten Sie:</div><div class=\"error\">Indem Sie dieses ausgefüllte Formular einsenden, bestätigen Sie Ihr Einverständnis mit den folgenden Bedingungen:<ul><li>daß Sie immer Informationen über lebende Personen, die in dieser Datenbank vorkommen, vertraulich halten;</li><li>und daß Sie in der unten stehenden Textbox Ihre Verwandtschaft zu Personen in dieser Datenbank erklären oder uns Informationen über Personen, die in dieser Datenbank vorkommen sollten aber dort fehlen, mitteilen.</li></ul></div>";
//-- mygedview page
$pgv_lang["welcome"]					= "Willkommen";
$pgv_lang["upcoming_events"]			= "Bevorstehende Ereignisse";
$pgv_lang["living_or_all"]				= "Nur Ereignisse von lebenden Personen zeigen?";
$pgv_lang["basic_or_all"]				= "Nur Geburten, Tode, und Heiraten zeigen?";
$pgv_lang["style"]						= "Stil";
$pgv_lang["cal_download"]				= "Übertragung von Kalender-Einträgen erlauben? ";
$pgv_lang["style1"]						= "Liste";
$pgv_lang["style2"]						= "Tabelle";
$pgv_lang["style3"]						= "Wortwolke";
$pgv_lang["no_events_living"]			= "Für die nächsten #pgv_lang[global_num1]# Tage stehen keine Ereignisse für lebende Personen bevor.";
$pgv_lang["no_events_living1"]			= "Für morgen stehen keine Ereignisse für lebende Personen bevor.";
$pgv_lang["no_events_all"]				= "Für die nächsten #pgv_lang[global_num1]# Tage stehen keine Ereignisse bevor.";
$pgv_lang["no_events_all1"]				= "Für morgen stehen keine Ereignisse bevor.";
$pgv_lang["no_events_privacy"]			= "Für die nächsten #pgv_lang[global_num1]# Tage stehen zwar Ereignisse bevor, aber wegen Datenschutz werden diese nicht gezeigt.";
$pgv_lang["no_events_privacy1"]			= "Für morgen stehen zwar Ereignisse bevor, aber wegen Datenschutz werden diese nicht gezeigt.";
$pgv_lang["more_events_privacy"]		= "<br />Für die folgenden #pgv_lang[global_num1]# Tage stehen zwar mehr Ereignisse bevor, aber wegen Datenschutz werden diese nicht gezeigt.";
$pgv_lang["more_events_privacy1"]		= "<br />Für morgen stehen zwar mehr Ereignisse bevor, aber wegen Datenschutz werden diese nicht gezeigt.";
$pgv_lang["none_today_living"]			= "Heute gibt es keine Ereignisse für lebende Personen.";
$pgv_lang["none_today_all"]				= "Heute gibt es keine Ereignisse.";
$pgv_lang["none_today_privacy"]			= "Heute gibt es zwar Ereignisse, aber wegen Datenschutz werden diese nicht gezeigt.";
$pgv_lang["more_today_privacy"]			= "<br />Heute gibt es zwar mehr Ereignisse, aber wegen Datenschutz werden diese nicht gezeigt.";
$pgv_lang["chat"]						= "Chat";
$pgv_lang["users_logged_in"]			= "Angemeldete Benutzer";
$pgv_lang["anon_user"]					= "1 anonymer angemeldeter Benutzer";
$pgv_lang["anon_users"]					= "#pgv_lang[global_num1]# anonyme angemeldete Benutzer";
$pgv_lang["login_user"]					= "1 angemeldeter Benutzer";
$pgv_lang["login_users"]				= "#pgv_lang[global_num1]# angemeldete Benutzer";
$pgv_lang["no_login_users"]				= "Keine angemeldete oder anonyme Benutzer";
$pgv_lang["message"]					= "Nachricht senden";
$pgv_lang["my_messages"]				= "Meine Nachrichten";
$pgv_lang["date_created"]				= "gesendet:";
$pgv_lang["message_from"]				= "Mail Adresse:";
$pgv_lang["message_from_name"]			= "Ihr Name:";
$pgv_lang["message_to"]					= "An:";
$pgv_lang["message_subject"]			= "Betreff:";
$pgv_lang["message_body"]				= "Text:";
$pgv_lang["no_to_user"]					= "Bitte Empfänger angeben.";
$pgv_lang["provide_email"]				= "Bitte geben Sie die Mail Adresse an, damit wir Ihre Nachricht beantworten können. Andernfalls ist eine Antwort nicht möglich. Ihre Mail Adresse wird ausschließlich zur Beantwortung Ihrer Anfrage genutzt.";
$pgv_lang["reply"]						= "Antwort";
$pgv_lang["message_deleted"]			= "Nachricht gelöscht";
$pgv_lang["message_sent"]				= "Nachricht an #TO_USER# gesendet";
$pgv_lang["reset"]						= "Reset";
$pgv_lang["site_default"]				= "Grundeinstellung";
$pgv_lang["mygedview_desc"]				= "Dieses Portal ermöglicht Ihnen das Anlegen von Lesezeichen zu bevorzugten Personen, Überwachen bevorstehender Ereignisse und die Zusammenarbeit mit anderen PhpGedView Benutzern.";
$pgv_lang["no_messages"]				= "Keine neuen Nachrichten.";
$pgv_lang["clicking_ok"]				= "Durch Klick auf OK, können Sie im sich dann öffnenden Fenster #user[fullname]# kontaktieren.";
$pgv_lang["favorites"]					= "Lesezeichen";
$pgv_lang["my_favorites"]				= "Meine Lesezeichen";
$pgv_lang["no_favorites"]				= "Sie haben noch keine Lesezeichen gesetzt.<br /><br />Dies können Sie tun, indem Sie in der Detailansicht einer Person auf den <b>#pgv_lang[add_favorite]#</b> Button klicken.  Nachdem Sie diesen Button klicken, werden einige Felder gezeigt, wo Sie eine ID-Nummer eingeben oder suchen können.  Anstatt einer ID-Nummer können Sie auch ein URL mit Titel eingeben.";
$pgv_lang["add_to_my_favorites"]		= "Lesezeichen hinzufügen";
$pgv_lang["gedcom_favorites"]			= "Stammbaum Lesezeichen";
$pgv_lang["no_gedcom_favorites"]		= "Derzeit sind keine Lesezeichen angelegt. Der Verwalter kann Lesezeichen einrichten, die Ihnen hier automatisch gezeigt werden.";
$pgv_lang["confirm_fav_remove"]			= "Möchten Sie dieses Lesezeichen wirklich löschen?";
$pgv_lang["invalid_email"]				= "Bitte geben Sie eine gültige Mail Adresse ein.";
$pgv_lang["enter_subject"]				= "Bitte geben Sie einen Betreff ein.";
$pgv_lang["enter_body"]					= "Bitte geben Sie vor dem Senden einen Text ein.";
$pgv_lang["confirm_message_delete"]		= "Möchten Sie diese Nachricht wirklich löschen? Sie kann anschließend nicht wiederhergestellt werden.";
$pgv_lang["message_email1"]				= "Die folgende Nachricht wurde an Ihr PhpGedView Benutzer Postfach gesendet von ";
$pgv_lang["message_email2"]				= "Sie haben die folgende Nachricht an einen PhpGedView Benutzer gesendet:";
$pgv_lang["message_email3"]				= "Sie haben die folgende Nachricht an einen PhpGedView Verwalter gesendet:";
$pgv_lang["viewing_url"]				= "Diese Nachricht wurde gesendet als die folgende Seite aufgerufen wurde: ";
$pgv_lang["messaging2_help"]			= "Wenn Sie diese Nachricht senden, erhalten Sie eine Kopie an die von Ihnen angegebene Adresse.";
$pgv_lang["random_picture"]				= "Zufällig ausgewähltes Bild";
$pgv_lang["message_instructions"]		= "<b>Bitte beachten:</b> Private Informationen von lebenden Personen werden nur Familienangehörigen und nahen Freunden zugänglich gemacht. Bevor Sie irgendwelche persönlichen Daten ansehen können, müssen Sie Ihren Verwandtschaftsgrad belegen. Es kann auch vorkommen, dass bestimmte Daten von bereits verstorbenen Personen vertraulich sind. Dies kann der Fall sein, wenn nicht genügend Informationen vorhanden sind, um sicher zu belegen, ob die Person noch lebt oder verstorben ist.<br /><br />Bevor Sie Fragen stellen, überprüfen Sie bitte, dass Sie über die richtige Person fragen, indem Sie Orte, Zeitangaben und Verwandte prüfen. Falls Sie Änderungen der genealogischen Daten übermitteln, geben Sie bitte auch die Quelle an, von der Sie Ihre Informationen bezogen haben.<br /><br />";
$pgv_lang["sending_to"]					= "Diese Nachricht wird an #TO_USER# gesendet";
$pgv_lang["preferred_lang"]				= "Dieser Nutzer bevorzugt Nachrichten in #USERLANG#";
$pgv_lang["gedcom_created_using"]		= "Diese GEDCOM Datei wurde mit <b>#CREATED_SOFTWARE# #CREATED_VERSION#</b> ";
$pgv_lang["gedcom_created_on"]			= "Diese GEDCOM Datei wurde am <b>#CREATED_DATE#</b> erstellt.";
$pgv_lang["gedcom_created_on2"]			= " am <b>#CREATED_DATE#</b> erstellt.";
$pgv_lang["gedcom_stats"]				= "GEDCOM Statistiken";
$pgv_lang["stat_individuals"]			= "Personen";
$pgv_lang["stat_families"]				= "Familien";
$pgv_lang["stat_sources"]				= "Quellen";
$pgv_lang["stat_media"]					= "Medien Objekte";
$pgv_lang["stat_other"]					= "Andere Datensätze";
$pgv_lang["stat_earliest_birth"]		= "Frühestes Geburts-Datum";
$pgv_lang["stat_latest_birth"]			= "Letztes Geburts-Datum";
$pgv_lang["stat_earliest_death"]		= "Frühestes Sterbe-Datum";
$pgv_lang["stat_latest_death"]			= "Letztes Sterbe-Datum";
$pgv_lang["customize_page"]				= "Mein GedView Portal anpassen";
$pgv_lang["customize_gedcom_page"]		= "Stammbaum Begrüßungs Seite anpassen";
$pgv_lang["upcoming_events_block"]		= "Bevorstehende Ereignisse";
$pgv_lang["upcoming_events_descr"]		= "Der «Bevorstehende Ereignisse» Block zeigt eine Liste von Daten aus der Datenbank an, die sich in den kommenden Tagen jähren.<br /><br />Sie können für Ihre Portal Seite den Umfang dieses Blocks kontrollieren.  Der Verwalter tut das Gleiche für die Begrüßungs Seite.";
$pgv_lang["todays_events_block"]		= "An diesem Tag";
$pgv_lang["todays_events_descr"]		= "Der «An diesem Tag» Block zeigt eine Liste von Daten aus der Datenbank an, die sich heute jähren.<br /><br />Sie können für Ihre Portal Seite den Umfang dieses Blocks kontrollieren.  Der Verwalter tut das Gleiche für die Begrüßungs Seite.";
$pgv_lang["logged_in_users_block"]		= "Angemeldete Benutzer";
$pgv_lang["logged_in_users_descr"]		= "Der «Angemeldete Benutzer» Block zeigt eine Liste der Personen, die derzeit auf dieser Webseite angemeldet sind.";
$pgv_lang["user_messages_block"]		= "Benutzer Nachrichten";
$pgv_lang["user_messages_descr"]		= "Der «Benutzer Nachrichten» Block zeigt eine Liste von Nachrichten an, die der aktuelle Benutzer erhalten hat.";
$pgv_lang["user_favorites_block"]		= "Benutzer Lesezeichen";
$pgv_lang["user_favorites_descr"]		= "Der «Lesezeichen» Block zeigt dem Benutzer eine Liste der von ihm als wichtig angesehenen Personen in der Datenbank an, deren Daten er so schneller wieder auffinden kann.";
$pgv_lang["welcome_block"]				= "Willkommen";
$pgv_lang["welcome_descr"]				= "Der «Willkommen» Block zeigt dem Benutzer das aktuelle Datum und die Uhrzeit, Links zur Änderung der Benutzereinstellung und zu seiner eigenen Stammbaumansicht und auch einen Link zur Anpassung seiner Mein GedView Seite.";
$pgv_lang["random_media_block"]			= "Zufälliges Bild";
$pgv_lang["random_media_descr"]			= "Der «Zufälliges Bild» Block wählt bei jedem Aufruf zufällig ein Bild aus der Datenbank aus und stellt es dar.<br /><br />Der Verwalter kontrolliert die Art der Medien Objekte die hier gezeigt werden können.";
$pgv_lang["random_media_events"]		= "Ereignisse";
$pgv_lang["random_media_persons"]		= "Personen";
$pgv_lang["random_media_persons_or_all"]	= "Personen, Ereignisse, oder alle Medien zeigen?";
$pgv_lang["gedcom_block"]				= "GEDCOM Willkommen";
$pgv_lang["gedcom_descr"]				= "Der «GEDCOM Willkommen» Block ist equivalent zum «Willkommen» Block indem er dem Benutzer den Titel der aktuellen Datei, sowie Datum und Uhrzeit zeigt.";
$pgv_lang["gedcom_favorites_block"]		= "GEDCOM Lesezeichen";
$pgv_lang["gedcom_favorites_descr"]		= "Der «GEDCOM Lesezeichen» Block gibt dem Verwalter die Möglichkeit, wichtige Personen der Datenbank als Lesezeichen einzutragen, so dass die Besucher sie leichter finden können.";
$pgv_lang["gedcom_stats_block"]			= "GEDCOM Statistiken";
$pgv_lang["gedcom_stats_descr"]			= "Der «GEDCOM Statistiken» Block zeigt dem Besucher einige Informationen über die GEDCOM Datei, z.B. wann sie erstellt wurde und wie viele Personen sie umfasst.<br /><br />Es kann auch eine Liste der am häufigsten vorkommenden Namen gezeigt werden. Zu dieser Liste können Namen hinzugefügt oder daraus Namen unterdrückt werden. Der Häufigkeitswert, ab wann ein Name in dieser Liste auftaucht, kann in der GEDCOM Konfiguration eingestellt werden.";
$pgv_lang["gedcom_stats_show_surnames"]	= "Häufig vorkommende Nachnamen zeigen?";
$pgv_lang["portal_config_intructions"]	= "~#pgv_lang[customize_page]# <br /> #pgv_lang[customize_gedcom_page]#~<br /><br />Sie können die Seite Ihren Wünschen anpassen, indem Sie die Positionen der einzelnen Blöcke angeben.<br /><br />Die Seite ist in die Bereiche <b>Hauptbereich</b> und <b>Rechts</b> aufgeteilt. Die Blöcke im <b>Hauptbereich</b> erscheinen breiter und setzen sich links auf der Seite nach unten fort. Der Bereich <b>Rechts</b> setzt sich rechts auf der Seite nach unten fort.<br /><br />Jeder Bereich hat seine eigene Liste von Blöcken, die dort in der Reihenfolge ihrer Nennung gezeigt werden. Sie können Blöcke hinzufügen, entfernen oder umsortieren, wie es Ihnen beliebt.<br /><br />Wenn eine der beiden Listen leer ist werden die Blöcke des anderen Bereiches auf der vollen Seitenbreite dargestellt.<br /><br />";
$pgv_lang["login_block"]				= "Login";
$pgv_lang["login_descr"]				= "Der «Login» Block ermöglicht Benutzern das Anmelden auf dieser Seite.";
$pgv_lang["theme_select_block"]			= "Theme Auswahl";
$pgv_lang["theme_select_descr"]			= "Der «Theme Auswahl» Block zeigt die Themenauswahl Liste an - auch dann, wenn der Wechsel des Themes eigentlich deaktiviert ist.";
$pgv_lang["block_top10_title"]			= "Häufigste 10 Nachnamen";
$pgv_lang["block_top10"]				= "Häufigste 10 Nachnamen";
$pgv_lang["block_top10_descr"]			= "Dieser Block zeigt eine Liste mit den 10 häufigsten Nachnamen der Datenbank. Die tatsächliche Länge der Liste ist konfigurierbar. Sie können auch bestimmte Namen in der Liste unterdrücken.";
$pgv_lang["gedcom_news_block"]			= "GEDCOM Neuigkeiten";
$pgv_lang["gedcom_news_descr"]			= "Der «GEDCOM Neuigkeiten» Block zeigt dem Besucher neue Veröffentlichungen oder Artikel an, die der Verwalter meldet.<br /><br />Dieser Bereich ist ein guter Platz für die Mitteilung über eine neue GEDCOM Datei, zur Ankündigung eines Familientreffens oder die Bekanntgabe der Geburt eines neuen Familienmitgliedes.";
$pgv_lang["gedcom_news_limit"]			= "Anzeigenbeschränkung:";
$pgv_lang["gedcom_news_limit_nolimit"]	= "Keine";
$pgv_lang["gedcom_news_limit_date"]		= "Alter";
$pgv_lang["gedcom_news_limit_count"]	= "Anzahl";
$pgv_lang["gedcom_news_flag"]			= "Beschränkung:";
$pgv_lang["gedcom_news_archive"]		= "Archiv zeigen";
$pgv_lang["user_news_block"]			= "Benutzer Journal";
$pgv_lang["user_news_descr"]			= "Der «Benutzer Journal» Block ermöglicht dem Benutzer Notizen oder ein Journal online zu verwalten.";
$pgv_lang["my_journal"]					= "Mein Journal";
$pgv_lang["no_journal"]					= "Sie haben noch keine Einträge angelegt.";
$pgv_lang["confirm_journal_delete"]		= "Möchten Sie diesen Eintrag wirklich löschen?";
$pgv_lang["add_journal"]				= "Einen neuen Eintrag hinzufügen";
$pgv_lang["gedcom_news"]				= "Neuigkeiten";
$pgv_lang["confirm_news_delete"]		= "Möchten Sie diesen Eintrag wirklich löschen?";
$pgv_lang["add_news"]					= "Einen Artikel unter Neuigkeiten eintragen";
$pgv_lang["no_news"]					= "Es sind keine Neuigkeiten eingetragen.";
$pgv_lang["edit_news"]					= "Einträge hinzufügen oder bearbeiten";
$pgv_lang["enter_title"]				= "Bitte geben Sie einen Titel ein.";
$pgv_lang["enter_text"]					= "Bitte geben Sie Text für diesen Eintrag ein.";
$pgv_lang["news_saved"]					= "Der Eintrag wurde erfolgreich gespeichert.";
$pgv_lang["article_text"]				= "Text:";
$pgv_lang["main_section"]				= "Blöcke im Hauptbereich";
$pgv_lang["right_section"]				= "Blöcke im rechten Bereich";
$pgv_lang["available_blocks"]			= "Verfügbare Blöcke";
$pgv_lang["move_up"]					= "nach oben";
$pgv_lang["move_down"]					= "nach unten";
$pgv_lang["move_right"]					= "nach rechts";
$pgv_lang["move_left"]					= "nach links";
$pgv_lang["broadcast_all"]				= "An alle Benutzer senden";
$pgv_lang["hit_count"]					= "Besucher:";
$pgv_lang["phpgedview_message"]			= "PhpGedView Nachricht";
$pgv_lang["common_surnames"]			= "Häufigste Nachnamen";
$pgv_lang["default_news_title"]			= "Willkommen zur Ahnenforschung";
$pgv_lang["default_news_text"]			= "Die genealogischen Informationen dieser Webseite werden mit Hilfe von <a href=\"http://www.phpgedview.net/\" target=\"_blank\">PhpGedView #VERSION#</a> dargestellt.  Diese Seite gibt Ihnen einen Überblick und eine Einführung zu diesem Ahnenforschungs Projekt.<br /><br />Um mit den Daten zu arbeiten, wählen Sie z.B. ein Diagramm aus dem Diagramm Menü aus, öffnen Sie die Personen Liste oder suchen Sie nach einem Namen oder Ort.<br /><br />Wenn Sie bei der Nutzung dieser Seite auf Schwierigkeiten stoßen, können Sie auf das Hilfe Menü klicken, um nähere Informationen zur jeweiligen Seite zu bekommen.<br /><br />Viel Erfolg bei der Ahnenforschung!";
$pgv_lang["reset_default_blocks"]		= "Zurückstellen zur Block Standard-Auswahl";
$pgv_lang["recent_changes"]				= "Neueste Änderungen";
$pgv_lang["recent_changes_block"]		= "Neueste Änderungen";
$pgv_lang["recent_changes_descr"]		= "Der «Neueste Änderungen» Block listet alle Änderungen, die an der GEDCOM Datei in der letzten Zeit vorgenommen wurden. Dieser Block kann Ihnen helfen, diese jüngsten Veränderungen zu verfolgen. Die Änderungen werden automatisch anhand des «CHAN» tags erkannt.";
$pgv_lang["recent_changes_none"]		= "<b>Innerhalb der letzten #pgv_lang[global_num1]# Tage, gab es keine Änderungen.</b><br />";
$pgv_lang["recent_changes_some"]		= "<b>In den letzten #pgv_lang[global_num1]# Tagen durchgeführte Änderungen</b><br />";
$pgv_lang["show_empty_block"]			= "Soll der Block verborgen werden, wenn er leer ist?";
$pgv_lang["hide_block_warn"]			= "Wenn Sie einen leeren Block verbergen, können Sie seine Konfiguration erst dann wieder ändern, wenn er wieder sichtbar wird, weil er nicht mehr leer ist!";
$pgv_lang["delete_selected_messages"]	= "Gewählte Nachrichten löschen";
$pgv_lang["use_blocks_for_default"]		= "Diese Blöcke als Voreinstellung für alle Benutzer verwenden?";
$pgv_lang["block_not_configure"]		= "Dieser Block kann nicht konfiguriert werden.";
$pgv_lang["add_media_tool"]				= "Multimedia-Hinzufügen Tool";
//-- hourglass chart
$pgv_lang["hourglass_chart"]			= "Sanduhr-Diagramm";
//-- report engine
$pgv_lang["choose_report"]				= "Bericht wählen";
$pgv_lang["enter_report_values"]		= "Bericht Daten eingeben";
$pgv_lang["selected_report"]			= "Gewählter Bericht";
$pgv_lang["select_report"]				= "Bericht wählen";
$pgv_lang["download_report"]			= "Bericht herunterladen";
$pgv_lang["reports"]					= "Berichte";
$pgv_lang["pdf_reports"]				= "Berichte im PDF Format";
$pgv_lang["html_reports"]				= "Berichte im HTML Format";
$pgv_lang["family_group_report"]		= "Familienbericht";
$pgv_lang["page"]						= "Seite";
$pgv_lang["of"]							= "von";
$pgv_lang["enter_famid"]				= "Familien ID eingeben";
$pgv_lang["show_sources"]				= "Quellen zeigen?";
$pgv_lang["show_notes"]					= "Bemerke zeigen?";
$pgv_lang["show_basic"]					= "Grunddaten auch ausdrucken falls leer?";
$pgv_lang["show_photos"]				= "Fotos zeigen?";
$pgv_lang["relatives_report_ext"]		= "Ausführlicher Verwandtenbericht";
$pgv_lang["with"]						= "mit";
$pgv_lang["on"]							= "am";
$pgv_lang["in"]							= "im";
$pgv_lang["individual_report"]			= "Personenbericht";
$pgv_lang["enter_pid"]					= "Personen-ID eingeben";
$pgv_lang["generated_by"]				= "Erstellt mit";
$pgv_lang["list_children"]				= "Alle Kinder nach Geburtsdatum geordnet zeigen.";
$pgv_lang["birth_report"]				= "Geburtsdaten u. -Orte Bericht";
$pgv_lang["birthplace"]					= "Geburtsort enthält";
$pgv_lang["birthdate1"]					= "Geburtsdatenbereich Anfang";
$pgv_lang["birthdate2"]					= "Geburtsdatenbereich Ende";
$pgv_lang["death_report"]				= "Sterbedaten u. -Orte Bericht";
$pgv_lang["deathplace"]					= "Sterbeort enthält";
$pgv_lang["deathdate1"]					= "Sterbedatenbereich Anfang";
$pgv_lang["deathdate2"]					= "Sterbedatenbereich Ende";
$pgv_lang["marr_report"]				= "Ehedaten u. -Orte Bericht";
$pgv_lang["marrplace"]					= "Eheort enthält";
$pgv_lang["marrdate2"]					= "Ehedatenbereich Ende";
$pgv_lang["marrdate1"]					= "Ehedatenbereich Anfang";
$pgv_lang["sort_by"]					= "Sortieren nach";
$pgv_lang["cleanup"]					= "Korrigieren";
//-- CONFIGURE (extra) messages for programs patriarch, slklist and statistics
$pgv_lang["dynasty_list"]				= "Übersicht der Familien";
$pgv_lang["patriarch_list"]				= "Spitzenahnen Liste";
$pgv_lang["statistics"]					= "Statistiken";
//-- Merge Records
$pgv_lang["merge_same"]					= "Die Datensätze sind nicht vom gleichen Typ und können daher nicht zusammengefügt werden.";
$pgv_lang["merge_step1"]				= "Zusammenfügen: Schritt 1 von 3";
$pgv_lang["merge_step2"]				= "Zusammenfügen: Schritt 2 von 3";
$pgv_lang["merge_step3"]				= "Zusammenfügen: Schritt 3 von 3";
$pgv_lang["select_gedcom_records"]		= "Wählen Sie zwei GEDCOM Datensätze zum Zusammenfügen. Die Datensätze müssen vom gleichen Typ sein.";
$pgv_lang["merge_to"]					= "Ausgang ID:";
$pgv_lang["merge_from"]					= "Zusammenfügen mit ID:";
$pgv_lang["merge_facts_same"]			= "Die folgenden Fakten waren identisch in beiden Datensätzen und werden automatisch zusammengefügt.";
$pgv_lang["no_matches_found"]			= "Keine übereinstimmende Fakten gefunden";
$pgv_lang["unmatching_facts"]			= "Die folgenden Fakten stimmen nicht überein. Wählen Sie aus, welche Sie übernehmen möchten.";
$pgv_lang["record"]						= "Datensatz";
$pgv_lang["adding"]						= "Hinzufügen";
$pgv_lang["updating_linked"]			= "Aktualisiere verbundene Datensätze";
$pgv_lang["merge_more"]					= "Weitere Datensätze zusammenfügen.";
$pgv_lang["same_ids"]					= "Sie haben zweimal die selbe ID eingegeben. Das Zusammenfügen ist nicht möglich.";
//-- ANCESTRY FILE MESSAGES
$pgv_lang["ancestry_chart"]				= "Ahnendiagramm";
$pgv_lang["gen_ancestry_chart"]			= "#PEDIGREE_GENERATIONS# Generationen Ahnendiagramm";
$pgv_lang["chart_style"]				= "Diagramm Typ";
$pgv_lang["chart_list"]					= "Liste";
$pgv_lang["chart_booklet"]				= "Broschüre";
$pgv_lang["show_cousins"]				= "Cousins und Cousinen zeigen";
// 1st generation
$pgv_lang["sosa_2"]						= "Vater";
$pgv_lang["sosa_3"]						= "Mutter";
// 2nd generation
$pgv_lang["sosa_4"]						= "Großvater";
$pgv_lang["sosa_5"]						= "Großmutter";
$pgv_lang["sosa_6"]						= "Großvater";
$pgv_lang["sosa_7"]						= "Großmutter";
// 3rd generation
$pgv_lang["sosa_8"]						= "Ur-Großvater";
$pgv_lang["sosa_9"]						= "Ur-Großmutter";
$pgv_lang["sosa_10"]					= "Ur-Großvater";
$pgv_lang["sosa_11"]					= "Ur-Großmutter";
$pgv_lang["sosa_12"]					= "Ur-Großvater";
$pgv_lang["sosa_13"]					= "Ur-Großmutter";
$pgv_lang["sosa_14"]					= "Ur-Großvater";
$pgv_lang["sosa_15"]					= "Ur-Großmutter";
// 4th generation
$pgv_lang["sosa_16"]					= "Ur-Ur-Großvater";
$pgv_lang["sosa_17"]					= "Ur-Ur-Großmutter";
$pgv_lang["sosa_18"]					= "Ur-Ur-Großvater";
$pgv_lang["sosa_19"]					= "Ur-Ur-Großmutter";
$pgv_lang["sosa_20"]					= "Ur-Ur-Großvater";
$pgv_lang["sosa_21"]					= "Ur-Ur-Großmutter";
$pgv_lang["sosa_22"]					= "Ur-Ur-Großvater";
$pgv_lang["sosa_23"]					= "Ur-Ur-Großmutter";
$pgv_lang["sosa_24"]					= "Ur-Ur-Großvater";
$pgv_lang["sosa_25"]					= "Ur-Ur-Großmutter";
$pgv_lang["sosa_26"]					= "Ur-Ur-Großvater";
$pgv_lang["sosa_27"]					= "Ur-Ur-Großmutter";
$pgv_lang["sosa_28"]					= "Ur-Ur-Großvater";
$pgv_lang["sosa_29"]					= "Ur-Ur-Großmutter";
$pgv_lang["sosa_30"]					= "Ur-Ur-Großvater";
$pgv_lang["sosa_31"]					= "Ur-Ur-Großmutter";
$pgv_lang["sosa_paternal_male_n_generations"]	= "%3\$d x väterlicher Ur-Großvater";
$pgv_lang["sosa_paternal_female_n_generations"]	= "%3\$d x väterliche Ur-Großmutter";
$pgv_lang["sosa_maternal_male_n_generations"]	= "%3\$d x mütterlicher Ur-Großvater";
$pgv_lang["sosa_maternal_female_n_generations"]	= "%3\$d x mütterliche Ur-Großmutter";
$pgv_lang["compact_chart"]				= "Kompaktes Diagramm";
//-- FAN CHART
$pgv_lang["fan_chart"]					= "Kreisdiagramm";
$pgv_lang["gen_fan_chart"]				= "#PEDIGREE_GENERATIONS# Generationen Kreis Diagramm";
$pgv_lang["fan_width"]					= "Breite";
$pgv_lang["gd_library"]					= "Falsche Konfiguration des PHP Servers: GD Bibliothek 2.x für Grafik Funktionen nicht vorhanden.";
$pgv_lang["gd_freetype"]				= "Falsche Konfiguration des PHP-Servers: FreeType Bibliothek für TrueType Schriftarten nicht vorhanden.";
$pgv_lang["gd_helplink"]				= "http://de3.php.net/gd";
$pgv_lang["fontfile_error"]				= "Schriftart Datei auf PHP Server nicht vorhanden";
$pgv_lang["fanchart_IE"]				= "Dieses Kreis Diagramm kann von Ihrem Browser nicht direkt dargestellt werden. Bitte speichern Sie das Bild mit dem Kontextmenü (rechter Mausklick) und drucken Sie die Datei anschließend.";
//-- RSS Feed
$pgv_lang["rss_descr"]					= "Neuigkeiten und Links von der Seite #GEDCOM_TITLE#";
$pgv_lang["rss_logo_descr"]				= "erstellt mit PhpGedView";
$pgv_lang["rss_feeds"]					= "RSS Versorgungen";
$pgv_lang["no_feed_title"]				= "RSS Versorgung nicht erstellbar";
$pgv_lang["no_feed"]					= "RSS Versorgungen sind von dieser PhpGedView Seite nicht unterstützt.";
$pgv_lang["feed_login"]					= "Wenn Sie einen Nutzernamen für diese PhpGedView Seite besitzen, können Sie mit einfacher HTTP Verifizierung <a href=\"#AUTH_URL#\">einloggen</a>, um private Informationen zu sehen.";
$pgv_lang["authenticated_feed"]			= "RSS Versorgung mit Verifizierung";
//-- ASSOciates RELAtionship
// After any change in the following list, please check $assokeys in edit_interface.php
$pgv_lang["attendant"]					= "Begleiter";
$pgv_lang["attending"]					= "begleitend";
$pgv_lang["best_man"]					= "Bester Freund";
$pgv_lang["bridesmaid"]					= "Brautjungfer";
$pgv_lang["buyer"]						= "Käufer";
$pgv_lang["circumciser"]				= "Beschneider";
$pgv_lang["civil_registrar"]			= "Standesbeamter";
$pgv_lang["friend"]						= "Freund";
$pgv_lang["godfather"]					= "Taufpate";
$pgv_lang["godmother"]					= "Taufpatin";
$pgv_lang["godparent"]					= "Taufpaten";
$pgv_lang["informant"]					= "Informant";
$pgv_lang["lodger"]						= "Mitbewohner";
$pgv_lang["nurse"]						= "Kindermädchen";
$pgv_lang["priest"]						= "Pfarrer";
$pgv_lang["rabbi"]						= "Rabbiner";
$pgv_lang["registry_officer"]			= "Standesbeamter";
$pgv_lang["seller"]						= "Verkäufer";
$pgv_lang["servant"]					= "Diener";
$pgv_lang["twin"]						= "Zwilling";
$pgv_lang["twin_brother"]				= "Zwillingsbruder";
$pgv_lang["twin_sister"]				= "Zwillingsschwester";
$pgv_lang["witness"]					= "Zeuge";

//-- statistics utility
$pgv_lang["statutci"]					= "Index kann nicht erstellt werden";
$pgv_lang["statnnames"]					= "Anzahl der Namen=";
$pgv_lang["statnfam"]					= "Anzahl der Familien=";
$pgv_lang["statnmale"]					= "Anzahl männliche Personen=";
$pgv_lang["statnfemale"]				= "Anzahl weibliche Personen=";
$pgv_lang["statvars"]					= "Geben Sie bitte die folgenden Parameter ein";
$pgv_lang["statlxa"]					= "entlang der X Achse:";
$pgv_lang["statlya"]					= "entlang der Y Achse:";
$pgv_lang["statlza"]					= "entlang der Z Achse:";
$pgv_lang["stat_10_none"]				= "keiner";
$pgv_lang["stat_11_mb"]					= "Geburtsmonat";
$pgv_lang["stat_12_md"]					= "Sterbemonat";
$pgv_lang["stat_13_mm"]					= "Ehemonat";
$pgv_lang["stat_14_mb1"]				= "Geburtsmonat des ersten Kindes";
$pgv_lang["stat_15_mm1"]				= "Monat der ersten Ehe";
$pgv_lang["stat_16_mmb"]				= "Monate zwischen Ehe und Geburt des ersten Kindes";
$pgv_lang["stat_17_arb"]				= "Alter bezogen auf das Geburtsjahr";
$pgv_lang["stat_18_ard"]				= "Alter bezogen auf das Sterbejahr";
$pgv_lang["stat_19_arm"]				= "Alter im Jahr der Ehe";
$pgv_lang["stat_20_arm1"]				= "Alter im Jahr der ersten Ehe";
$pgv_lang["stat_21_nok"]				= "Anzahl der Kinder";
$pgv_lang["stat_200_none"]				= "alle (bzw. keine)";
$pgv_lang["stat_201_num"]				= "Anzahl";
$pgv_lang["stat_202_perc"]				= "Prozentzahlen";
$pgv_lang["stat_300_none"]				= "keine";
$pgv_lang["stat_301_mf"]				= "Geschlecht";
$pgv_lang["stat_302_cgp"]				= "Zeiträume";
$pgv_lang["statmess1"]					= "<b>Hier nur die Werte angeben, die sich gegebenenfalls auf die X Achse oder die Z Achse beziehen</b>";
$pgv_lang["statar_xgp"]					= "X Achse Bereichsgrenzen (Zeiträume):";
$pgv_lang["statar_xgl"]					= "X Achse Bereichsgrenzen (Alter):";
$pgv_lang["statar_xgm"]					= "X Achse Bereichsgrenzen (Monate):";
$pgv_lang["statar_xga"]					= "X Achse Bereichsgrenzen (Anzahl):";
$pgv_lang["statar_zgp"]					= "Z Achse Bereichsgrenzen (Daten):";
$pgv_lang["statreset"]					= "Zurücksetzen";
$pgv_lang["statsubmit"]					= "Diagramm zeigen";

//-- statisticsplot utility
$pgv_lang["statistiek_list"]			= "Statistik-Diagramm";
$pgv_lang["stpl"]						= "...";
$pgv_lang["stplGDno"]					= "Die «Graphics Display Library» ist nicht verfügbar. Bitte wenden Sie sich an Ihren System-Verwalter.";
$pgv_lang["stpljpgraphno"]				= "Die «JPgraph» Bibliothek befindet sich nicht im Unterverzeichnis <i>jpgraph/</i> von PhpGedView. Bitte laden Sie diese von http://www.aditus.nu/jpgraph/jpdownload.php herunter.  Danach müssen Sie die heruntergeladene JPgraph Bibliothek ins Unterverzeichnis <i>jpgraph/</i> übertragen.<br />";
$pgv_lang["stplinfo"]					= "Diagramm Informationen:";
$pgv_lang["stpltype"]					= "Typ:";
$pgv_lang["stplnoim"]					= "nicht verfügbar:";
$pgv_lang["stplnumof"]					= "Anzahl der Messwerte ";
$pgv_lang["stplmf"]						= " / männlich-weiblich";
$pgv_lang["stplipot"]					= " / pro Zeitraum";
$pgv_lang["stplgzas"]					= "Bereiche Z Achse:";
$pgv_lang["stplmonth"]					= "Monat";
$pgv_lang["stplnumbers"]				= "Anzahl für eine Familie";
$pgv_lang["stplage"]					= "Alter";
$pgv_lang["stplperc"]					= "Prozentzahl";
$pgv_lang["stplmarrbirth"]				= "Monate zwischen Heirat und Geburt des ersten Kindes";

//-- alive in year
$pgv_lang["alive_in_year"]				= "Lebend im Jahr";
$pgv_lang["is_alive_in"]				= "Lebte noch in #YEAR#";
$pgv_lang["alive"]						= "Lebt";
$pgv_lang["dead"]						= "Verstorben";
$pgv_lang["maybe"]						= "Möglicherweise ";
$pgv_lang["both_dead"]					= "Beide verstorben";
$pgv_lang["both_alive"]					= "Beide lebend";
//-- find media
$pgv_lang["media_format"]				= "Medienformat";
$pgv_lang["image_size"]					= "Bildgröße";
$pgv_lang["manage_media"]				= "Multimedia-Objekte verwalten";
//-- link media
$pgv_lang["media_id"]					= "Multimedia-ID";
$pgv_lang["invalid_id"]					= "Diese ID existiert nicht in der GEDCOM Datei.";
//-- Help system
$pgv_lang["definitions"]				= "Definitionen";
//-- Index_edit
$pgv_lang["description"]				= "Beschreibung";
$pgv_lang["block_desc"]					= "Block Beschreibungen";
$pgv_lang["click_here"]					= "Fortsetzen";
$pgv_lang["click_here_help"]			= "~#pgv_lang[click_here]#~<br /><br />Klicken Sie diesen Button, um die zuvor gespeicherten Änderungen zu verwenden.<br /><br />Sie werden zu der #pgv_lang[welcome]# oder #pgv_lang[mygedview]# Seite zurückgenommen, aber es kann sein, dass Ihre Änderungen nicht gezeigt werden. Sie können dann die «Seite Erneuern» Funktion Ihres Browsers benutzen um Ihre Änderungen richtig zu sehen.";
$pgv_lang["block_summaries"]			= "~#pgv_lang[block_desc]#~<br /><br />Hier finden Sie eine kurze Beschreibung aller Blöcke, die Sie auf die #pgv_lang[welcome]# oder #pgv_lang[mygedview]# Seite stellen können.<br /><table border='1' align='center'><tr><td class='list_value'><b>#pgv_lang[name]#</b></td><td class='list_value'><b>#pgv_lang[description]#</b></td></tr>#pgv_lang[block_summary_table]#</table><br /><br />";
$pgv_lang["block_summary_table"]		= "&nbsp;";
$pgv_lang["total_places"]				= "Gefundene Orte";
$pgv_lang["media_contains"]				= "Inhalt der Medien:";
$pgv_lang["repo_contains"]				= "Inhalt des Archivs:";
$pgv_lang["source_contains"]			= "Inhalt der Quelle:";
$pgv_lang["display_all"]				= "Alles zeigen";
$pgv_lang["accesskeys"]					= "Schnelltaste";
$pgv_lang["accesskey_skip_to_content"]	= "C";
$pgv_lang["accesskey_search"]			= "S";
$pgv_lang["accesskey_skip_to_content_desc"]	= "Weiter zum nächsten Inhalt";
$pgv_lang["accesskey_viewing_advice"]	= "0";
$pgv_lang["accesskey_viewing_advice_desc"]	= "Ratschlag zun Ansehen";
$pgv_lang["accesskey_home_page"]		= "1";
$pgv_lang["accesskey_help_content"]		= "2";
$pgv_lang["accesskey_help_current_page"]	= "3";
$pgv_lang["accesskey_contact"]			= "4";
$pgv_lang["accesskey_individual_details"]	= "I";
$pgv_lang["accesskey_individual_relatives"]	= "R";
$pgv_lang["accesskey_individual_notes"]	= "N";
$pgv_lang["accesskey_individual_sources"]	= "O";
$pgv_lang["accesskey_individual_media"]	= "A";
$pgv_lang["accesskey_individual_research_log"]	= "L";
$pgv_lang["accesskey_individual_pedigree"]	= "P";
$pgv_lang["accesskey_individual_descendancy"]	= "D";
$pgv_lang["accesskey_individual_timeline"]	= "T";
$pgv_lang["accesskey_individual_relation_to_me"]	= "M";
$pgv_lang["accesskey_individual_gedcom"]	= "G";
$pgv_lang["accesskey_family_parents_timeline"]	= "P";
$pgv_lang["accesskey_family_children_timeline"]	= "D";
$pgv_lang["accesskey_family_timeline"]	= "T";
$pgv_lang["accesskey_family_gedcom"]	= "G";
$pgv_lang["add_faq_header"]				= "FAQ Überschrift";
$pgv_lang["add_faq_body"]				= "FAQ Hauptteil";
$pgv_lang["add_faq_order"]				= "FAQ Reihenfolge";
$pgv_lang["add_faq_visibility"] 		= "FAQ Sichtbarkeit";
$pgv_lang["no_faq_items"]				= "Die FAQ Liste ist leer.";
$pgv_lang["position_item"]				= "Eintrag ordnen";
$pgv_lang["faq_list"]					= "FAQ Liste";
$pgv_lang["confirm_faq_delete"]			= "Möchten Sie wirklich diesen Eintrag löschen?";
$pgv_lang["preview"]					= "Vorschau";
$pgv_lang["no_id"]						= "Es wurde keine bestimmte FAQ ID erwähnt!";
$pgv_lang["hs_title"]					= "Hilfe Text durchsuchen";
$pgv_lang["hs_search"]					= "Suche";
$pgv_lang["hs_close"]					= "Schließe Fenster";
$pgv_lang["hs_results"]					= "Ergebnis gefunden:";
$pgv_lang["hs_keyword"]					= "Suche aus";
$pgv_lang["hs_searchin"]				= "Suche in";
$pgv_lang["hs_searchuser"]				= "Hilfe für Benutzer";
$pgv_lang["hs_searchmodules"]			= "Hilfe über Module";
$pgv_lang["hs_searchconfig"]			= "Hilfe für Verwalter";
$pgv_lang["hs_searchhow"]				= "Suchen Typ";
$pgv_lang["hs_searchall"]				= "Alle Wörter";
$pgv_lang["hs_searchany"]				= "Irgendein Wort";
$pgv_lang["hs_searchsentence"]			= "Genauer Ausdruck";
$pgv_lang["hs_intruehelp"]				= "Nur Hilfstexte";
$pgv_lang["hs_inallhelp"]				= "Alle Texte";
$pgv_lang["choose"]						= "Wählen:";
$pgv_lang["account_information"]		= "Benutzer Informationen";
$pgv_lang["TYPE__video"]				= "Video";
$pgv_lang["download_image"]				= "Datei herunterladen";
$pgv_lang["media_privacy"]				= "Sie dürfen wegen Datenschutz dieses Objekt nicht sehen.";
$pgv_lang["relations_heading"]			= "Dieses Bild gehört zu:";
$pgv_lang["img_size"]					= "Bildgöße";
$pgv_lang["media_broken"]				= "Diese Mediendatei ist unbrauchbar und kann deshalb nicht mit Wasserzeichen versehen werden.";
$pgv_lang["unknown_mime"]				= "Medien-Feuerwand Fehler: Unbekannter MIME-Typ";
$pgv_lang["button_alive_in_year"]		= "Personen zeigen, die im angedeuteten Jahr lebten.";
$pgv_lang["button_BIRT_Y100"]			= "Personen zeigen, die in den letzten 100 Jahren geboren wurden.";
$pgv_lang["button_BIRT_YES"]			= "Personen zeigen, die vor mehr als 100 Jahren geboren wurden.";
$pgv_lang["button_DEAT_N"]				= "Zeige Lebende oder Paare deren beide Partner lebend sind.";
$pgv_lang["button_DEAT_W"]				= "Paare zeigen, von denen nur die Frau verstorben ist.";
$pgv_lang["button_DEAT_Y"]				= "Zeige Verstorbene oder Paare deren beide Partner verstorben sind.";
$pgv_lang["button_DEAT_YES"]			= "Zeige Personen, die vor mehr als 100 Jahren starben.";
$pgv_lang["button_MARR_DIV"]			= "Zeige geschiedene Paare.";
$pgv_lang["button_SEX_U"]				= "Nur Personen unbekannten Geschlechts zeigen.";
$pgv_lang["button_TREE_L"]				= "«Blätter» zeigen.  «Blätter» sind lebend aber nachfolgerlos.";
$pgv_lang["button_TREE_R"]				= "«Wurzeln» zeigen.  «Wurzeln» können auch «Patriarch» gennant werden.  Sie sind elternlos in der Datenbank eingetragen.";
$pgv_lang["sort_column"]				= "Diese Spalte sortieren.";
$pgv_lang["button_SEX_M"]				= "Nur Männliche zeigen.";
$pgv_lang["button_SEX_F"]				= "Nur Weibliche zeigen.";
$pgv_lang["button_reset"]				= "Standard-Einstellungen.";
$pgv_lang["button_MARR_YES"]			= "Paare zeigen, die vor mehr als 100 Jahren heirateten.";
$pgv_lang["button_MARR_Y100"]			= "Paare zeigen, die innerhalb der letzten 100 Jahren heirateten.";
$pgv_lang["button_MARR_U"]				= "Paare zeigen, von denen das Ehedatum unbekannt ist.";
$pgv_lang["button_DEAT_Y100"]			= "Zeige Personen, die in den letzten 100 Jahren starben.";
$pgv_lang["button_DEAT_H"]				= "Paare zeigen, von denen nur der Mann verstorben ist.";
$pgv_lang["module_error_unknown_type"]	= "Unbekannter Modul-Typ.";
$pgv_lang["module_error_unknown_action_v2"]	= "Unbekannter Befehl: [action].";
$pgv_lang["file_size"]					= "Dateigröße";
$pgv_lang["no_media"]					= "Keine Medien gefunden";
$pgv_lang["view_slideshow"]				= "Als Diavortrag zeigen";
$pgv_lang["TYPE__tombstone"]			= "Grabstein";
$pgv_lang["TYPE__photo"]				= "Foto";
$pgv_lang["TYPE__newspaper"]			= "Zeitung";
$pgv_lang["TYPE__map"]					= "Landkarte";
$pgv_lang["TYPE__manuscript"]			= "Manuskript";
$pgv_lang["TYPE__magazine"]				= "Zeitschrift";
$pgv_lang["TYPE__film"]					= "Mikrofilm";
$pgv_lang["TYPE__fiche"]				= "Mikrofiche";
$pgv_lang["TYPE__electronic"]			= "Elektronisch";
$pgv_lang["TYPE__card"]					= "Karte";
$pgv_lang["TYPE__book"]					= "Buch";
$pgv_lang["TYPE__audio"]				= "Ton";
$pgv_lang["TYPE__certificate"]			= "Urkunde";
$pgv_lang["TYPE__document"]				= "Dokument";
$pgv_lang["familybook_chart"]			= "Familienbuch Diagramm";
$pgv_lang["family_of"]					= "Familie von:&nbsp;";
$pgv_lang["descent_steps"]				= "Nachfahren Stufen";
$pgv_lang["cancel"]						= "Abbrechen";
$pgv_lang["delete_family_confirm"]		= "Das Löschen der Familie wird jede Verbindung von allen anderen lösen. Alle ehemalige Familienmitglieder bleiben als freistehende Personen ohne Familienverbund. Möchten Sie wirklich diese Familie löschen?";
$pgv_lang["delete_family"]				= "Familie löschen";
$pgv_lang["add_favorite"]				= "Neues Lesezeichen hinzufügen";
$pgv_lang["url"]						= "URL";
$pgv_lang["add_fav_enter_note"]			= "Gebe eine zusätzliche Bemerkung zu dem Lesezeichen ein";
$pgv_lang["add_fav_or_enter_url"]		= "Oder<br />eine Adresse und eine Überschrift eingeben";
$pgv_lang["add_fav_enter_id"]			= "Personen, Familien oder Quellen Id eingeben";
$pgv_lang["next_email_sent"]			= "Danach wird eine Mail als Erinnerung gesendet";
$pgv_lang["last_email_sent"]			= "Das letzte Mail als Erinnerung wurde gesendet";
$pgv_lang["remove_child"]				= "Dieses Kind aus der Familie entfernen";
$pgv_lang["link_new_husb"]				= "Eine existierende Person als Ehemann hinzufügen";
$pgv_lang["link_new_wife"]				= "Eine existierende Person als Ehefrau hinzufügen";
$pgv_lang["cookie_help"]				= "Diese Seite benutzt Cookies zum Verfolgen ihres login Status. <br /><br />Cookies scheinen in Ihrem Browser nicht erlaubt zu sein. Zum Anmelden bei dieser Seite müssen Sie diese Option einschalten. Zum Einschalten der Cookies können Sie die Dokumentation in Ihrem Browser benutzen.";
$pgv_lang["address_labels"]				= "Adress-Etiketten";
$pgv_lang["filter_address"]				= "Adressen mit folgendem Enthalt zeigen:";
$pgv_lang["address_list"]				= "Adressen Liste";
$pgv_lang["autocomplete"]				= "Automatisch eingeben";
$pgv_lang["site_list"]					= "Internetseite:";
$pgv_lang["site_had"]					= "enthält das folgende";
$pgv_lang["label_search_engine_detected"]	= "Suchmaschine erkennen";
$pgv_lang["ex-spouse"]					= "Ex-Ehegatte";
$pgv_lang["ex-wife"]					= "Ex-Ehefrau";
$pgv_lang["ex-husband"]					= "Ex-Ehemann";
$pgv_lang["noemail"]					= "Adressen ohne Mails";
$pgv_lang["onlyemail"]					= "Nur Adressen mit Mails";
$pgv_lang["maxviews_exceeded"]			= "Erlaubtes Seitenansichtstempo von #GLOBALS[MAX_VIEWS]# pro #GLOBALS[MAX_VIEW_TIME]# Sek. überschritten.";
$pgv_lang["broadcast_not_logged_6mo"]	= "Nachrichten an Benutzer senden, die sich innerhalb der letzten 6 Monate nicht angemeldet haben";
$pgv_lang["broadcast_never_logged_in"]	= "Nachrichten an Benutzer senden, die sich noch nie angemeldet haben.";
$pgv_lang["stats_to_show"]				= "Bitte wählen Sie Statistiken für diesen Block, die Sie sehen möchten";
$pgv_lang["stat_avg_age_at_death"]		= "Durchschnittsalter beim Tod";
$pgv_lang["stat_longest_life"]			= "Person, die am längsten lebte";
$pgv_lang["stat_most_children"]			= "Familie mit den meisten Kindern";
$pgv_lang["stat_average_children"]		= "Durchschnittsanzahl von Kindern pro Familie";
$pgv_lang["stat_events"]				= "Anzahl Ereignisse";
$pgv_lang["stat_surnames"]				= "Anzahl Nachnamen";
$pgv_lang["stat_users"]					= "Anzahl Benutzer";
$pgv_lang["no_family_facts"]			= "Keine Ereignisse für diese Familie.";
$pgv_lang["stat_males"]					= "Männlich, insgesamt";
$pgv_lang["stat_females"]				= "Weiblich, insgesamt";
$pgv_lang["sunday_1st"]					= "So";
$pgv_lang["monday_1st"]					= "Mo";
$pgv_lang["tuesday_1st"]				= "Di";
$pgv_lang["wednesday_1st"]				= "Mi";
$pgv_lang["thursday_1st"]				= "Do";
$pgv_lang["friday_1st"]					= "Fr";
$pgv_lang["saturday_1st"]				= "Sa";
$pgv_lang["jan_1st"]					= "Jan";
$pgv_lang["feb_1st"]					= "Feb";
$pgv_lang["mar_1st"]					= "März";
$pgv_lang["apr_1st"]					= "April";
$pgv_lang["may_1st"]					= "Mai";
$pgv_lang["jun_1st"]					= "Juni";
$pgv_lang["jul_1st"]					= "Juli";
$pgv_lang["aug_1st"]					= "Aug";
$pgv_lang["sep_1st"]					= "Sep";
$pgv_lang["oct_1st"]					= "Okt";
$pgv_lang["nov_1st"]					= "Nov";
$pgv_lang["dec_1st"]					= "Dez";
$pgv_lang["edit_source"]				= "Quelle bearbeiten";
$pgv_lang["source_menu"]				= "Quellenoptionen";
$pgv_lang["indi_is_remote"]				= "Die Informationen dieser Person stammen aus einer fremden Seite.";
$pgv_lang["link_remote"]				= "Mit anderer Person verbinden";
$pgv_lang["title_search_link"]			= "Lokale Verbindung hinzufügen";
$pgv_lang["label_site_url2"]			= "Internetseiten-Adresse";
$pgv_lang["other_searches"]				= "Andere Suchen";
$pgv_lang["search_sites"]				= "Bei diesen Internetseiten suchen";
$pgv_lang["no_search_for"]				= "Vergessen Sie nicht, eine Suchwahl zu machen.";
$pgv_lang["no_search_site"]				= "Vergessen Sie nicht, mindestens eine Internetseite zu wählen.";
$pgv_lang["edit_media"]					= "Multimedia bearbeiten";
$pgv_lang["wiki_main_page"]				= "Wiki Hauptseite";
$pgv_lang["wiki_users_guide"]			= "Wiki Handbuch für Benutzer";
$pgv_lang["wiki_admin_guide"]			= "Wiki Handbuch für Verwalter";
$pgv_lang["result_page"]				= "Seite";
$pgv_lang["record_not_found"]			= "Der gewünschte GEDCOM Datensatz wurde nicht gefunden.  Der Grund dafür könnte eine ungültige Personen-Verbindung oder eine beschädigte GEDCOM-Datei sein.";
$pgv_lang["page_size"]					= "Format";
$pgv_lang["descend_report"]				= "Nachfahren Bericht";
$pgv_lang["activate"]					= "Aktivieren";
$pgv_lang["stop"]						= "Stop";
$pgv_lang["random_media_start_slide"]	= "Wiedergabe automatisch abspielen?";
$pgv_lang["random_media_ajax_controls"]	= "AJAX-Regler zeigen?";
$pgv_lang["play"]						= "Start";
$pgv_lang["deactivate"]					= "Halten";
$pgv_lang["descendancy_header"]			= "Nachfahren Bericht von ";
?>