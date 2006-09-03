<?php
/**
 * Hebrew Language Help-file
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2005  PGV Development Team
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
 *
 * @author Meliza
 * @package PhpGedView
 * @subpackage Languages
 * @version $Id$

 */
if (preg_match("/lang\...\.php$/", $_SERVER["SCRIPT_NAME"])>0) {
	print "אין לך גישה לתיקיית קובצי השפות.";
	exit;
}

$pgv_lang["loading"]				="טוען...";  
$pgv_lang["upload_replacement"]		="העלה החלפה";
$pgv_lang['progress_bars_info']		= "סרגל הסטטוס שלמטה מאפשר לך לדעת את מצב הייבוא. אם תחום הזמן נגמר הייבוא נעצר ותתבקש ללחוץ על כפתור המשך. אם אינך רואה כפתור המשך, חזור אחורה והכנס תחום זמן קטן יותר.";
$pgv_lang["clear_chart"]			= "נקה תרשים";
$pgv_lang["file_information"]			= "מידע על קובץ";
$pgv_lang["choose_file_type"]			= "בחר סוג קובץ";
$pgv_lang["add_individual_by_id"]		= "הוסף אדם לפי קוד זיהוי";
$pgv_lang["advanced_options"]		= "אופציות מתקדמות";
$pgv_lang["zip_files"]			= "קובץ/קובצי זיפ";
$pgv_lang["include_media"]			= "כלול מדיה (יוצר קובצי זיפ אוטומטית)";
$pgv_lang["roman_surn"]			= "שם משפחה לועזי";
$pgv_lang["roman_givn"]			= "שמות פרטיים לועזיים";
$pgv_lang["hebrew_surn"]			= "שם משפחה עברי";
$pgv_lang["hebrew_givn"]			= "שמות פרטיים עבריים";
$pgv_lang["include"]				= "כלול:";
$pgv_lang["page_x_of_y"]			= "דף #GLOBALS[currentPage]# מתוך #GLOBALS[lastPage]#"; 
$pgv_lang["options"]				= "אפשרויות:";
$pgv_lang["inc_languages"]			= " שפות";
$pgv_lang["config_update_ok"]			= "קובץ התצורה עודכן בצורה מוצלחת.";
$pgv_lang["date_of_entry"]			= "תאריך רישום במקור האוריגינלי";
$pgv_lang["main_media_ok1"]			= "השם של קובץ המדיה הראשי <b>#GLOBALS[oldMediaName]#</b> שונה בהצלחה ל-<b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_ok2"]			= "קובץ המדיה הראשי <b>#GLOBALS[oldMediaName]#</b> הועבר בהצלחה מ-<span dir=\"ltr\"><b>#GLOBALS[oldMediaFolder]#</b></span> אל <span dir=\"ltr\"><b>#GLOBALS[newMediaFolder]#</b></span>.";
$pgv_lang["main_media_ok3"]			= "קובץ המדיה הראשי הועבר ושמו שונה מ-<b><span dir=\"ltr\">#GLOBALS[oldMediaFolder]#</span>#GLOBALS[oldMediaName]#</b> ל-<b><span dir=\"ltr\">#GLOBALS[newMediaFolder]#</span>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_fail0"]			= "קובץ המדיה <b><span dir=\"ltr\">#GLOBALS[oldMediaFolder]#</span>#GLOBALS[oldMediaName]#</b> אינו קיים.";
$pgv_lang["main_media_fail1"]			= "לא ניתן לשנות את שמו של קובץ המדיה הראשי <b>#GLOBALS[oldMediaName]#</b> ל-<b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_fail2"]			= "לא ניתן להעביר את קובץ המדיה הראשי <b>#GLOBALS[oldMediaName]#</b> מ-<b><span dir=\"ltr\">#GLOBALS[oldMediaFolder]#</span></b> ל-<b><span dir=\"ltr\">#GLOBALS[newMediaFolder]#</span></b>.";
$pgv_lang["main_media_fail3"]			= "לא ניתן להעביר את קובץ המדיה הראשי ולשנות את שמו  מ-<b><span dir=\"ltr\">#GLOBALS[oldMediaFolder]#</span>#GLOBALS[oldMediaName]#</b> ל-<b><span dir=\"ltr\">#GLOBALS[newMediaFolder]#</span>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_ok1"]		= "השם של קובץ המדיה המזערי <b>#GLOBALS[oldMediaName]#</b> שונה בהצלחה ל-<b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_ok2"]		= "קובץ המדיה המזערי <b>#GLOBALS[oldMediaName]#</b> הועבר בהצלחה מ-<b><span dir=\"ltr\">#GLOBALS[oldThumbFolder]#</span></b> ל-<b><span dir=\"ltr\">#GLOBALS[newThumbFolder]#</span></b>.";
$pgv_lang["thumb_media_ok3"]		= "קובץ המדיה המזערי הועבר ושמו שונה מ-<b><span dir=\"ltr\">#GLOBALS[oldThumbFolder]#</span>#GLOBALS[oldMediaName]#</b> ל-<b><span dir=\"ltr\">#GLOBALS[newThumbFolder]#</span>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_fail0"]		= "הקובץ המזערי <b><span dir=\"ltr\">#GLOBALS[oldThumbFolder]#</span>#GLOBALS[oldMediaName]#</b> אינו קיים.";
$pgv_lang["thumb_media_fail1"]		= "שם קובץ המדיה המזערי לא ניתן לשינוי מ-<b>#GLOBALS[oldMediaName]#</b> ל-<b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_fail2"]		= "לא ניתן להעביר את קובץ המדיה המזערי <b>#GLOBALS[oldMediaName]#</b> מ-<b><span dir=\"ltr\">#GLOBALS[oldThumbFolder]#</span></b> ל-<b><span dir=\"ltr\">#GLOBALS[newThumbFolder]#</span></b>.";
$pgv_lang["thumb_media_fail3"]		= "לא ניתן לשנות את שמו של קובץ המדיה המזערי מ-<b><span dir=\"ltr\">#GLOBALS[oldThumbFolder]#</span>#GLOBALS[oldMediaName]#</b> ל-<b><span dir=\"ltr\">#GLOBALS[newThumbFolder]#</span>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["server_file"]			= "שם הקובץ בשרת";
$pgv_lang["server_file_advice"]			= "אין לשנות אם ברצונך לשמור על שם הקובץ המקורי.";
$pgv_lang["server_file_advice2"]		= "ניתן להכניס URL שמתחיל ב-<span dir=\"ltr\">&laquo;http://&raquo;</span>.";
$pgv_lang["server_folder"]			= "שם התיקייה בשרת";
$pgv_lang["server_folder_advice"]		= "ניתן להכניס עד ל-#GLOBALS[MEDIA_DIRECTORY_LEVELS]# שמות של תיקיות לאחר ברירת המחדל &laquo;#GLOBALS[MEDIA_DIRECTORY]#&raquo;.<br />אין להכניס את החלק &laquo;<span dir=\"ltr\">#GLOBALS[MEDIA_DIRECTORY]#</span>&raquo; של שם התיקייה בשרת.";
$pgv_lang["server_folder_advice2"]		= "מתעלמים מכניסה זו אם הוכנס URL בשדה שם הקובץ.";
$pgv_lang["add_linkid_advice"]		= "הכנס או חפש את קוד הזיהוי של האדם, המשפחה או המקור שאליו יש לקשר את המדיה הזו.";
$pgv_lang["use_browse_advice"]		= "השתמש בכפתור ה-&laquo;Browse&raquo; כדי לחפש את הקובץ הרצוי במחשב המקומי שלך.";
//$pgv_lang["add_media_upload_thum"]		= "העלה קובץ תמונה ממוזער";
$pgv_lang["add_media_other_folder"]		= "תיקייה אחרת... נא הקלד";
$pgv_lang["add_media_file"]			= "קובץ מדיה קיים על השרת";
//$pgv_lang["add_media_upload"]		= "קובץ מדיה להעלאה לתוך השרת";
//$pgv_lang["add_media_folder"]		= "יעד של קובץ המדיה שיועלה";

$pgv_lang["link_to_existing_media"]		= "קשר לישות מדיה קיימת";
$pgv_lang["page_size"]			= "גודל הדף";
$pgv_lang["record_not_found"]			= "רשומת ה-GEDCOM המבוקשת לא נמצאה. הסיבה יכולה להיות קישור לאדם לא תקין או קובץ GEDCOM פגום.";
$pgv_lang["record_marked_deleted"]		= "הרשומה הזאת סומנה למחיקה לאחר אישור המנהלן.";
$pgv_lang["result_page"]			= "דף תוצאה";
$pgv_lang["edit_media"]			= "ערוך פריט מדיה";
$pgv_lang["wiki_main_page"]			= "דף ראשי של ויקי";
$pgv_lang["wiki_users_guide"]			= "מדריך למשתמש של ויקי";
$pgv_lang["wiki_admin_guide"]			= "מדריך למינהלן של ויקי";
$pgv_lang["no_search_for"]			= "וודא בחירת אופציה לחיפוש.";
$pgv_lang["no_search_site"]			= "ודא בחירת אתר מרוחק אחד לפחות.";
$pgv_lang["other_searches"]			= "חיפושים אחרים";
$pgv_lang["multi_site_search"] 			= "חיפוש רב אתרים";
$pgv_lang["search_sites"] 			= "אתרים לחיפוש";
$pgv_lang["search_sites_discription"] 		= "חפש באתרים ידועים";
$pgv_lang["search_asso_text_unavailable"] 	= " עדיין לא קיימת<br /> שותפות <br /> לחיפוש באתר";
$pgv_lang["no_known_servers"]		= "אין שרתים מוכרים<br />לא תמצאנה תוצאות";
$pgv_lang["basic_search_discription"] 		= "חיפוש בסיסי באתר";
$pgv_lang["advanced_search_discription"] 	= "חיפוש מתקדם באתר";
$pgv_lang["basic_search"]			= "חיפוש";
$pgv_lang["advanced_search"]			= "חיפוש מתקדם";
$pgv_lang["name_search"]			= "שם: ";
$pgv_lang["birthdate_search"]			= "תאריך לידה: ";
$pgv_lang["birthplace_search"]			= "מקום לידה: ";
$pgv_lang["deathdate_search"]			= "תאריך פטירה: ";
$pgv_lang["deathplace_search"]		= "מקום פטירה: ";
$pgv_lang["gender_search"]			= "מין: ";
$pgv_lang["site_list"]				= "אתר: ";
$pgv_lang["site_had"]			= " הכיל";
$pgv_lang["invalid_search_multisite_input"]  	= "הכנס אחד מהפרטים הבאים: שם, תאריך לידה, מקום לידה, תאריך פטירה, מקום פטירה ומין ";
$pgv_lang["invalid_search_multisite_input_gender"] 	= "אנא חפש שנית עם יותר נתונים, לא רק מין";
$pgv_lang["link_manage_servers"]    		= "נהל אתרים";
$pgv_lang["indi_is_remote"]			= "הנתונים על האדם קושרו מאתר מרוחק.";
$pgv_lang["link_remote"]            		= "קשר אדם מרוחק";
$pgv_lang["current_person"]         		= "זהה לנוכחי";
$pgv_lang["title_remote_link"]      		= "הוסף קישור מרוחק";
$pgv_lang["label_same_server"]      		= "אתר זהה";
$pgv_lang["label_diff_server"]      		= "אתר אחר";
$pgv_lang["label_accept_changes"]  		= "קבל את כל השינויים";
$pgv_lang["label_ask_first"]        		= "שאל אותי קודם";
$pgv_lang["label_rel_to_current"]   		= "קשר לאדם הנוכחי";
$pgv_lang["label_location"]         		= "מיקום";
$pgv_lang["label_site"]             			= "אתר";
$pgv_lang["label_site_url"]         		= "URL של האתר:";
$pgv_lang["label_remote_id"]        		= "קוד זיהוי אישי מרוחק";
$pgv_lang["label_local_id"]         		= "קוד זיהוי אישי";
$pgv_lang["label_merge_options"]    		= "אופציות מיזוג";
$pgv_lang["label_gedcom_id"]        		= "זיהוי GEDCOM";
$pgv_lang["label_gedcom_id2"]       		= "זיהוי Gedcom:";
$pgv_lang["label_add_remote_link"]  		= "הוסף קשר";
$pgv_lang["error_remote"]           		= "בחרת אתר מרוחק.";
$pgv_lang["error_same"]             		= "בחרת את אותו האתר.";
$pgv_lang["lbl_server_list"]        		= "השתמש באתר קיים.";
$pgv_lang["lbl_type_server"]        		= "הקלד אתר חדש.";
$pgv_lang["error_url_blank"]			= "נא לא להשאיר ריק את הכותרת או ה-URL של האתר המרוחק";
$pgv_lang["error_siteauth_failed"]		= "האימות לאתר מרוחק נכשל";
$pgv_lang["label_ban_server"]			= "הגש";
$pgv_lang["label_add_search_server"]		= "הוסף IP"; 
$pgv_lang["remove_ip"] 			= "הסר IP";
$pgv_lang["label_remove_ip"]			= "אסור כתובת IP (כגון:<span dir=\"ltr\"> 198.128.*.*</span>): ";
$pgv_lang["label_remove_search"]		= "סמן כתובות IP כעכבישים של מנועי חיפוש: "; 
$pgv_lang["label_username_id"]		= "קוד משתמש";
$pgv_lang["label_username_id2"]		= "קוד משתמש: ";
$pgv_lang["label_password_id"]		= "סיסמא";
$pgv_lang["label_password_id2"]		= "סיסמא: ";
$pgv_lang["error_ban_server"]       		= "כתובת IP שגויה.";
$pgv_lang["error_view_connections"] 		= "עליך לבחור את האתר שאותו תרצה לראות.";
$pgv_lang["error_delete_server"]    		= "עליך לבחור את האתר שאותו תרצה למחוק.";
$pgv_lang["title_manage_servers"]   		= "נהל אתרים";
$pgv_lang["label_banned_servers"]   		= "אסור אתרים לפי IP";
$pgv_lang["label_manual_search_engines"] 	= "סמן ידנית מנועי חיפוש לפי IP"; 
$pgv_lang["label_search_engine_detected"]  	= "התגלה עכביש של מנוע חיפוש"; 
$pgv_lang["label_search_engine_spider"]      	= "עכביש של מנוע חיפוש";
$pgv_lang["label_ban_view_links"]   		= "ראה קישורים לאתר האסור הזה";
$pgv_lang["label_delete"]           		= "מחק";
$pgv_lang["label_new_server"]       		= "הוסף אתר";
$pgv_lang["label_server_url"]       		= "URL/IP של האתר";
$pgv_lang["label_add_server"]      		= "הוסף";
$pgv_lang["label_added_servers"]		= "שרתים מרוחקים שהוספו"; 
$pgv_lang["error_url"]              			= "אתר חייב URL/IP.";
$pgv_lang["error_exists_server"]    		= "האתר כבר קיים.";
$pgv_lang["error_view_info"]        		= "עליך לבחור את האדם שאת נתוניו ברצונך לראות.";
$pgv_lang["error_delete_person"]    		= "עליך לבחור את האדם שאת הקשר המרוחק שלו ברצונך לבטל.";
$pgv_lang["title_view_conns"]       		= "ראה קישורים";
$pgv_lang["label_server_info"]      		= "כל האנשים הקשורים מרחוק דרך האתר:";
$pgv_lang["label_view_local"]       		= "ראה מידע מקומי על האדם";
$pgv_lang["label_view_remote"]      		= "ראה מידע מרוחק על האדם";
$pgv_lang["label_individuals"]      		= "אנשים";
$pgv_lang["label_families"]         		= "משפחות";

$pgv_lang["ex-spouse"] 			= "בן זוג לשעבר";
$pgv_lang["ex-wife"] 			= "אישה לשעבר";
$pgv_lang["ex-husband"] 			= "בעל לשעבר";
$pgv_lang["noemail"] 			= "כתובות ללא דואר אלקטרוני";
$pgv_lang["onlyemail"] 			= "רק כתובות עם דואר אלקטרוני";
$pgv_lang["maxviews_exceeded"]		= "הגעת לחסם של מספר דפים, נסה שוב מאוחר יותר.";
$pgv_lang["broadcast_not_logged_6mo"]		= "שלח הודעה למשתמשים שלא התחברו למערכת ב-6  החודשים האחרונים";
$pgv_lang["broadcast_never_logged_in"]		= "שלח הודעה למשתמשים שעדיין לא התחברו למערכת ";
$pgv_lang["stats_to_show"]			= "בחר את הנתונים הסטטיסטיים שיוצגו באזור זה";
$pgv_lang["stat_avg_age_at_death"]		= "הגיל הממוצע בזמן הפטירה";
$pgv_lang["stat_longest_life"]			= "האדם אשר חי הכי הרבה זמן";
$pgv_lang["stat_most_children"]		= "משפחה עם הכי הרבה ילדים";
$pgv_lang["stat_average_children"]		= "מספר ממוצע של ילדים למשפחה";
$pgv_lang["stat_events"]			= "סה\"כ עובדות";
$pgv_lang["stat_surnames"]			= "סה\"כ שמות משפחה";
$pgv_lang["stat_media"]			= "ישויות מדיה";
$pgv_lang["stat_users"]			= "סה\"כ משתמשים";
$pgv_lang["no_family_facts"]			= "אין עובדות למשפחה זו.";
$pgv_lang["stat_males"]			= "סה\"כ גברים";
$pgv_lang["stat_females"]			= "סה\"כ נשים";

$pgv_lang["sunday_1st"]		= "א";
$pgv_lang["monday_1st"]		= "ב";
$pgv_lang["tuesday_1st"]		= "ג";
$pgv_lang["wednesday_1st"]		= "ד";
$pgv_lang["thursday_1st"]		= "ה";
$pgv_lang["friday_1st"]		= "ו";
$pgv_lang["saturday_1st"]		= "ש";

$pgv_lang["january_1st"]		= "ינו'";
$pgv_lang["february_1st"]		= "פבר'";
$pgv_lang["march_1st"]		= "מרץ";
$pgv_lang["april_1st"]		= "אפר'";
$pgv_lang["may_1st"]		= "מאי";
$pgv_lang["june_1st"]		= "יונ'";
$pgv_lang["july_1st"]		= "יול'";
$pgv_lang["august_1st"]		= "אוג'";
$pgv_lang["september_1st"]		= "ספט'";
$pgv_lang["october_1st"]		= "אוק'";
$pgv_lang["november_1st"]		= "נוב'";
$pgv_lang["december_1st"]		= "דצמ'";

$pgv_lang["edit_source"]		= "ערוך מקור";
$pgv_lang["source_menu"]		= "בחירות עבור מקור";
$pgv_lang["familybook_chart"]		= "תרשים ספר משפחה";
$pgv_lang["family_of"]		= "משפחה של:&nbsp;";
$pgv_lang["descent_steps"]		= "רמות צאצאים";

$pgv_lang["user_auto_accept"]	= "קבל בצורה אוטומטית את השינויים שמשתמש זה עושה";
$pgv_lang["cancel"]			= "בטל";
$pgv_lang["cookie_help"]		= "עוגיות (Cookies) דרושות כדי להתחבר לאתר זה. ניראה שהדפדפן שלך אינו מאפשר עוגיות.<br /><br />נא אפשר עוגיות עבור אתר זה לפני המשכת תהליך החיבור. ניתן לעיין בתיעוד העזרה של הדפדפן שלך איך מאפשרים עוגיות.";
//new stuff
//Individual
$pgv_lang["indi_is_remote"]		= "נתוני אדם זה מקושרים מאתר מרוחק.";
$pgv_lang["link_remote"]            	= "קשר אדם מרוחק";
//Add Remote Link
$pgv_lang["current_person"]         	= "כמו הנוכחי";
$pgv_lang["title_remote_link"]      	= "הוסף קישור מרוחק";
$pgv_lang["title_search_link"]      	= "הוסף קישור מקומי";
$pgv_lang["label_same_server"]     	= "אותו אתר";
$pgv_lang["label_diff_server"]      	= "אתר אחר";
$pgv_lang["label_accept_changes"]  	= "קבל את כל השינויים";
$pgv_lang["label_ask_first"]        	= "שאל אותי קודם";
$pgv_lang["label_rel_to_current"]  	= "קרבה לאדם הנוכחי";
$pgv_lang["label_location"]         	= "מיקום";
$pgv_lang["label_site"]             		= "אתר";
$pgv_lang["label_site_url"]         	= "כתובת URL של האתר";
$pgv_lang["label_site_url2"]        	= "כתובת URL של האתר";
$pgv_lang["label_remote_id"]        	= "קוד אישי של אדם מרוחק";
$pgv_lang["label_local_id"]         	= "קוד אישי";
$pgv_lang["label_merge_options"]    	= "אפשרויות מיזוג";
$pgv_lang["label_gedcom_id"]        	= "קוד של מסד הנתונים";
$pgv_lang["label_gedcom_id2"]        	= "קוד של מסד הנתונים:";
$pgv_lang["label_add_remote_link"]  	= "הוסף קשר";
$pgv_lang["error_remote"]           	= "בחרת אתר מרוחק.";
$pgv_lang["error_same"]             	= "בחרת את אותו האתר.";
$pgv_lang["error_server_exists"]    	= "האתר שאותו אתה מנסה להוסיף כבר קיים. בחר אותו מרשימת &laquo;השתמש באתר קיים&raquo;.";
$pgv_lang["lbl_server_list"]        	= "השתמש באתר קיים.";
$pgv_lang["lbl_type_server"]         	= "הקלד אתר חדש.";
$pgv_lang["link_success"]		= "קישור התווסף בהצלחה";

//new stuff
$pgv_lang["change"]		= "שנה";
$pgv_lang["change_family_instr"]	= "השתמש בדף זה כדי לשנות או להסיר בני משפחה.<br /><br />עבור כל בן משפחה, ניתן להשתמש בקישורית \"שנה\" כדי לשנות אדם אחר בתפקיד זה בתוך המשפחה. ניתן גם כן להשתמש בקישור \"הסר\" כדי להסיר את האדם מהמשפחה.<br /><br />אחרי שתסיים לשנות בני משפחה, לחץ על כפתור שמור כדי לשמור את השינויים.<br />";
$pgv_lang["cancel"]			= "בטל";
$pgv_lang["change_family_members"]	= "שנה בני משפחה";
$pgv_lang["delete_family_confirm"]	= "מחיקת המשפחה תבטל את הקשר בין כל האנשים אבל משאירה את האנשים במקום. האם אתה בטוח שברצונך למחוק את המשפחה?";
$pgv_lang["delete_family"]		= "מחק משפחה";
$pgv_lang["add_favorite"]		= "הוסף מועדף חדש";
$pgv_lang["url"]			= "URL";
$pgv_lang["add_fav_enter_note"]	= "הכנס הערת בחירה על המועדף הזה";
$pgv_lang["add_fav_or_enter_url"]	= "או<br />\nהכנס URL וכותרת";
$pgv_lang["add_fav_enter_id"]		= "הכנס קוד של אדם, משפחה או מקור";
$pgv_lang["import_time_exceeded"]	= "עברת את גבול זמן העיבוד. לחץ על כפתור המשך למטה כדי לחדש את הייבוא של קובץ ה-GEDCOM.";
$pgv_lang["next_email_sent"]		= "התזכורת הבאה תשלח בדואר אלקטרוני ב-";
$pgv_lang["last_email_sent"]		= "התזכורת האחרונה נשלחה בדואר אלקטרוני ב-";
$pgv_lang["confirm_remove"]		= "האם אתה בטוח שתרצה להסיר אדם זה מהמשפחה?";
$pgv_lang["remove_child"]		= "הסר ילד זה מהמשפחה";
$pgv_lang["link_new_husb"]		= "הוסף בעל ע\"י שימוש באדם קיים";
$pgv_lang["link_new_wife"]		= "הוסף אישה ע\"י שימוש באדם קיים";
$pgv_lang["address_labels"]		= "מדבקות כתובת";
$pgv_lang["filter_address"]		= "הראה כתובות המכילות:";
$pgv_lang["address_list"]		= "רשימת כתובות";
$pgv_lang["autocomplete"]		= "סיום אוטומטי";
$pgv_lang["undo_all_confirm"]		= "האם אתה בטוח שתרצה לבטל את כל השינויים של ה-GEDCOM הזה?";
$pgv_lang["undo_all"]		= "בטל את כל השינויים";
$pgv_lang["index_edit_advice"]	= "הדגש שם אזור ולחץ על אחד מצלמיות החץ כדי להעביר את האזור המודגש לכיוון המוצבע.";
//$pgv_lang["index_edit_advice2"]	= "עליך ללחוץ על כפתור <b>#pgv_lang[save]#</b> כדי להפוך את השינויים שלך לקבועים.";
//$pgv_lang["continue_import2"]	= "המשך לייבא תאריכים";
$pgv_lang["importing_dates"]		= "מייבא רשומות תאריך";
$pgv_lang["changelog"]		= "שינויי מהדורה #VERSION#";
$pgv_lang["view_changelog"]		= "התבונן בקובץ השינויים changelog.txt";
$pgv_lang["html_block_descr"]		= "זהו אזור HTML פשוט שתוכל לשים על הדף שלך ולהוסיף בו כל הודעה שתרצה.";
$pgv_lang["html_block_sample_part1"]	= "<p class=\"blockhc\"><b>הכנס את הכותרת שלך כאו</b></p><br /><p>לחץ על כפתור הגדרת התצורה";
$pgv_lang["html_block_sample_part2"]	= "כדי לראות מה שמודפס כאן.</p>";
$pgv_lang["html_block_name"]		= "HTML";
$pgv_lang["htmlplus_block_name"]	= "HTML מתקדם";
$pgv_lang["htmlplus_block_descr"]	= "זהו אזור HTML שתוכל לשים בדף שלך כדי להוסיף הודעה כלשהיא. ניתן להניס הפניות קישור למידע מקובץ ה-GEDCOM שלך לתוך טכסט ה-HTML.";
$pgv_lang["htmlplus_block_templates"] 	= "תבניות";
$pgv_lang["htmlplus_block_content"] 	= "תוכן";
$pgv_lang["htmlplus_block_narrative"] 	= "סגנון סיפורי (רק באנגלית)";
$pgv_lang["htmlplus_block_custom"]	= "מותאם";
$pgv_lang["htmlplus_block_keyword"]	= "דוגמאות של מילות מפתח (רק באנגלית)";
$pgv_lang["htmlplus_block_taglist"]	= "רשימת תוים";
$pgv_lang["htmlplus_block_compat"]	= "צורה מתאימה";
$pgv_lang["htmlplus_block_current"]	= "נוכחי";
$pgv_lang["htmlplus_block_default"]	= "ברירת מחדל";
$pgv_lang["htmlplus_block_gedcom"]	= "אילן יוחסין";
$pgv_lang["htmlplus_block_birth"]	= "לידה";
$pgv_lang["htmlplus_block_death"]	= "מות";
$pgv_lang["htmlplus_block_marrage"]	= "נישואין";
$pgv_lang["htmlplus_block_adoption"]	= "אימוץ";
$pgv_lang["htmlplus_block_burial"]	= "קבורה";
$pgv_lang["htmlplus_block_census"]	= "הוסף מרשם אוכלוסין";
$pgv_lang["num_to_show"]		= "מספר פריטים להצגה";
$pgv_lang["days_to_show"]		= "מספר הימים שיש להציג";
$pgv_lang["before_or_after"]		= "שים מונים לפני או אחרי השם?";
$pgv_lang["before"]			= "לפני";
$pgv_lang["after"]			= "אחרי";
$pgv_lang["config_block"]		= "עצב";
$pgv_lang["pls_note12"]		= "אנא השתמש בשדה זה לתאר מדוע אתה מבקש קוד משתמש לאתר זה ומה הקשר שלך לנתוני חקר המשפחה הזה.";
$pgv_lang["enter_comments"]		= "אנא הכנס את הקשר שלך אל הנתונים בשדה ההערה.";
$pgv_lang["comments"]		= "הערות";
$pgv_lang["none"]			= "אין";
$pgv_lang["ahnentafel_report"]	= "דו\"ח  Ahnentafel";
$pgv_lang["child-family"]		= "הורים ואחים ואחיות";
$pgv_lang["spouse-family"]		= "בן/בת זוג וילדים";
$pgv_lang["direct-ancestors"]		= "אב-אבות בקו ישיר";
$pgv_lang["ancestors"]		= "אב-אבות בקו ישיר ומשפחותיהם";
$pgv_lang["descendants"]		= "צאצאים";
$pgv_lang["choose_relatives"]		= "בחר קרובים";
$pgv_lang["relatives_report"]		= "דו\"ח קרובים";
$pgv_lang["total_living"]		= "סה\"כ חיים";
$pgv_lang["total_dead"]		= "סה\"כ מתים";
$pgv_lang["total_not_born"]		= "סה\"כ שלא נולדו עדיין";
$pgv_lang["remove_custom_tags"]	= "הסר נתוני PGV הפרטיים? (למשל <span dir=\"ltr\">_PGVU, _THUM</span>)";
$pgv_lang["download_zipped"]	= "הורד את ה-GEDCOM כקובץ ZIP?";
$pgv_lang["cookie_login_help"]	= "האתר זכר אותך מהתחברות קודמת. הדבר מאפשר גישה לנתונים פרטיים ומאפיינים התלויים במשתמש, אבל כדי לערוך או לנהל את האתר,עליך להתחבר שנית - מסיבות פרטיות.";
$pgv_lang["remember_me"]		= "זכור אותי בגישה ממחשב זה?";
$pgv_lang["add_unlinked_person"]	= "הוסף אדם לא קשור";
$pgv_lang["add_unlinked_source"]	= "הוסף מקור לא קשור";
$pgv_lang["fams_with_surname"]	= "משפחות עם שם משפחה #surname#";
$pgv_lang["support_contact"]		= "קשר לסיוע טכני";
$pgv_lang["genealogy_contact"]	= "קשר לנתוני חקר המשפחה";
$pgv_lang["continue_import"]		= "המשך לייבא";
$pgv_lang["importing_places"]		= "ייבוא רשומות של מקומות";
$pgv_lang["common_upload_errors"]	= "משמעות השגיאה הזו היא שכפי הנראה העלאת הקובץ עברה את הגבול המוגדר ע\"י השרת שלך. ברירת המחדל של PHP היא 2MB. תוכל להתקשר עם קבוצת התמיכה של השרת שלך כדי שהם יגדילו את הגבול בקובץ php.ini, או תוכל להעלות את הקובץ ע\"י שימוש ב-FTP. השתמש בדף <a href=\"uploadgedcom.php?action=add_form\"><b>הוסף GEDCOM</b></a> כדי להעלות קובץ GEDCOM ע\"י שימוש ב-FTP.";
$pgv_lang["total_memory_usage"]	= "סה\"כ שימוש בזיכרון:";
$pgv_lang["mothers_family_with"]	= "משפחת אם עם ";
$pgv_lang["fathers_family_with"]	= "משפחת אב עם ";
$pgv_lang["halfsibling"]		= "אח/ות למחצה";
$pgv_lang["halfbrother"]		= "אח-למחצה";
$pgv_lang["halfsister"]		= "אחות-למחצה";
$pgv_lang["family_timeline"]		= "הראה משפחה על תרשים קו הזמן";
$pgv_lang["children_timeline"]		= "הראה ילדים על תרשים קו הזמן";
$pgv_lang["other"]			= "אחר";
$pgv_lang["sort_by_marriage"]		= "מיין לפי תאריך נישואין";
$pgv_lang["reorder_families"]		= "סדר מחדש את המשפחות";
$pgv_lang["indis_with_surname"]	= "אנשים עם שם משפחה #surname#";
$pgv_lang["first_letter_fname"]		= "בחר אות כדי להציג אנשים ששמם הפרטי מתחיל באות זו.";
$pgv_lang["import_marr_names"]	= "ייבא שמות נישואין";
$pgv_lang["marr_name_import_instr"]	= "לחץ על הכפתור למטה רק אם ברצונך לאפשר ל-PhpGedView לחשב שמות נישואין של הנשים ב-GEDCOM הזה. אופציה זו מאפשרת חיפוש ורישום של נשים לפי שמות הנישואין שלהן. <i>שים לב: שמות הנישואין יופיעו ברשימות אם אפשרת את האופציה הזו בהגדרות ה-GEDCOM. <b>חישוב שמות הנישואין הוא רשות.</b></i>";
$pgv_lang["calc_marr_names"]	= "מחשב שמות נישואין";
$pgv_lang["total_names"]		= "סה\"כ שמות";

$pgv_lang["top10_pageviews_nohits"]	= "כרגע אין פגיעות שניתן להציג.";
$pgv_lang["top10_pageviews_msg"]	= "יש להפעיל את המונים בתצורת קובץ ה-GEDCOM, בחלק תצוגה ומבנה, קבוצת הסתר והראה.";
$pgv_lang["review_changes_descr"]	= "אזור השינויים שלא התקבלו מראה למשתמשים בעלי הרשאת עדכון את הרשומות ששונו באון ליין ושיש עדיין לבדוק ולאשר אותן. השינויים ממתינים לאישור או דחייה.<br /><br />אם האזור פעיל, אז המשתמשים בעלי הרשאת אישור יקבלו דואר אלקטרוני פעם ביום עם הודעה שיש שינויים לבדיקה.";
$pgv_lang["review_changes_block"]	= "שינויים תלויים ועומדים";
$pgv_lang["review_changes_email"]	= "שלח תזכורת בדואר אלקטרוני?";
$pgv_lang["review_changes_email_freq"]  = "תדירות (ימים) תזכורת בדואר אלקטרוני";
$pgv_lang["review_changes_subject"]	= "PhpGedView - סקור שינויי";
$pgv_lang["review_changes_body"]	= "שינויי און-ליין נעשו במאגר חקר המשפחה. את השינויים יש לבדוק ולאשר כדי שכל המשתמשים יראו אותם. השתמש בכתובת URL למטה כדי להיכנס לאתר ה-PhpGedView הזה להתחברות ובדיקת השינויים.";
$pgv_lang["show_spouses"]		= "הצג בני זוג";
$pgv_lang["quick_update_title"] 	= "עדכון מהיר";
$pgv_lang["quick_update_instructions"] 	= "הדף מאפשר עדכון מהיר של נתוני אדם. עליך למלא נתונים חדשים או נתונים שהשתנו לעומת הקיים באתר. לאחר שהשינויים שלך ישודרו, המנהלן יבדוק אותם לפני שכולם יוכלו לראותם באתר.";
$pgv_lang["update_name"] 		= "עדכן שם";
$pgv_lang["update_fact"] 		= "עדכן עובדה";
$pgv_lang["update_fact_restricted"] 	= "עדכון של עובדה זו מוגבל:";
$pgv_lang["update_photo"] 		= "עדכן תמונה";
$pgv_lang["photo_replace"] 		= "האם ברצונך להחליף תמונה ישנה יותר בתמונה זו?";
$pgv_lang["select_fact"] 		= "בחר עובדה...";
$pgv_lang["update_address"] 		= "עדכן כתובת";
$pgv_lang["add_new_chil"] 		= "הוסף ילד/ה";
$pgv_lang["top10_pageviews_descr"]	= "אזור זה מציג את עשרת הרשומות הכי נצפות. מונה הפגיעות בהגדרת התצורה של ה-GEDCOM חייב לפעול כדי שהאזור יהיה פעיל.";
$pgv_lang["top10_pageviews"]	= "הפריטים הנצפים ביותר";
$pgv_lang["top10_pageviews_block"]	= "הפריטים הנצפים ביותר";
$pgv_lang["user_default_tab"]		= "חוצץ ברירת המחדל של דף מידע אישי";
$pgv_lang["stepfamily"]		= "משפחה חורגת";
$pgv_lang["stepdad"]		= "אב חורג";
$pgv_lang["stepmom"]		= "אם חורגת";
$pgv_lang["stepsister"]		= "אחות חורגת";
$pgv_lang["stepbrother"]		= "אח חורג";
$pgv_lang["max_upload_size"]		= "גודל העלאה מכסימלי: ";
$pgv_lang["edit_fam"]		= "ערוך משפחה";
$pgv_lang["fams_charts"]		= "אפשרויות עבור משפחה";
$pgv_lang["sort_by_birth"]		= "מיין לפי תאריכי לידה";
$pgv_lang["reorder_children"]		= "סדר מחדש את הילדים";
$pgv_lang["add_from_clipboard"]	= "הוסף מלוח הגזירים: ";
$pgv_lang["record_copied"]		= " הרשומה הועתקה ללוח הגזירים";
$pgv_lang["copy"]			= "העתק";
$pgv_lang["cut"]			= "חתוך";
$pgv_lang["indis_charts"]		= "אפשרויות של אדם";
$pgv_lang["edit_indi"] 		= "ערוך אדם";
$pgv_lang["locked"]			= "אין לשנות";
$pgv_lang["privacy"]			= "אישי";
$pgv_lang["number_sign"]		= "#";

//-- GENERAL HELP MESSAGES
$pgv_lang["qm"]		    	= "?";
$pgv_lang["qm_ah"]			= "?";
$pgv_lang["page_help"]		= "עזרה";
$pgv_lang["help_for_this_page"]	= "עזרה לדף הזה";
$pgv_lang["help_contents"]		= "תוכן העזרה";
$pgv_lang["show_context_help"]	= "הראה עזרה מקושרת";
$pgv_lang["hide_context_help"]	= "הסתר עזרה מקושרת";
$pgv_lang["sorry"]			= "<b>מצטערים, טכסט עזרה לדף או פריט זה עדיין לא מוכן</b>";
$pgv_lang["help_not_exist"]		= "<b>טכסט עזרה לדף או פריט זה עדיין לא מוכן.</b>";
$pgv_lang["var_not_exist"]		= "<span style=\"font-weight: bold\">משתנה השפה לא קיים. דווח על כך, מכיוון שזו שגיאה.</span>";
$pgv_lang["resolution"]		= "רזולוציית המסך";
$pgv_lang["menu"]			= "תפריטים";
$pgv_lang["header"]			= "כותרת";
$pgv_lang["imageview"]		= "מציג מדיה";

//-- CONFIG FILE MESSAGES
$pgv_lang["login_head"]		= "PhpGedView התחברות משתמש";
$pgv_lang["error_title"]		= "שגיאה: אי אפשר לפתוח את קובץ ה-GEDCOM";
$pgv_lang["error_header"] 		= "קובץ ה-GEDCOM, <b>#GEDCOM#</b>, לא נימצא במקום שצוין";
$pgv_lang["error_header_write"]	= "לא ניתן לכתוב על קובץ ה-GEDCOM, <b>#GEDCOM#</b>. בדוק תכונות והרשאות גישה.";
$pgv_lang["for_support"]		= " לעזרה טכנית נא להתקשר אל";
$pgv_lang["for_contact"]		= "לשאלות בקשר לשושלת יוחסין נא להתקשר אל";
$pgv_lang["for_all_contact"]		= "לעזרה טכנית או שאלות בקשר לשושלת יוחסין נא להתקשר אל";
$pgv_lang["build_title"]		= "בונה קובצי אינדקס";
$pgv_lang["build_error"]		= "קובץ ה-GEDCOM עודכן.";
$pgv_lang["please_wait"]		= "נא להמתין בזמן שקובצי אינדקס נבנים.";
$pgv_lang["choose_gedcom"]		= "בחר GEDCOM";
$pgv_lang["username"]		= "קוד משתמש";
$pgv_lang["invalid_username"]	= "קוד המשתמש מכיל סימנים לא חוקיים";
$pgv_lang["firstname"]		= "שם פרטי";
$pgv_lang["lastname"]		= "שם משפחה";
$pgv_lang["password"]		= "סיסמא";
$pgv_lang["confirm"]		= "אשר סיסמא";
$pgv_lang["user_contact_method"] 	= "שיטת התקשורת המועדפת";
$pgv_lang["login"]			= "התחבר";
$pgv_lang["login_aut"]		= "ערוך משתמש";
$pgv_lang["logout"]			= "התנתק";
$pgv_lang["admin"]			= "ניהול";
$pgv_lang["logged_in_as"]		= "מחובר בקוד";
$pgv_lang["my_pedigree"]		= "אילן היוחסין שלי";
$pgv_lang["my_indi"]		= "נתונים אישיים שלי";
$pgv_lang["yes"]			= "כן";
$pgv_lang["no"]			= "לא";
$pgv_lang["add_gedcom"]		= "הוסף GEDCOM";
$pgv_lang["change_theme"]		= "שנה עיצוב";
$pgv_lang["gedcom_downloadable"] 	= "את קובץ ה-GEDCOM הזה ניתן להוריד דרך האינטרנט!<br />ראה את פרק ה-SECURITY של קובץ ה-<a href=\"readme.txt\"><b>readme.txt</b></a> כדי לפתור את הבעיה";

//-- INDEX (PEDIGREE_TREE) FILE MESSAGES
$pgv_lang["index_header"]		= "אילן יוחסין";
$pgv_lang["gen_ped_chart"]		= "תרשים אילן יוחסין עבור #PEDIGREE_GENERATIONS# דורות";
$pgv_lang["generations"]		= "דורות";
$pgv_lang["view"]			= "הצג";
$pgv_lang["fam_spouse"]		= "משפחה עם בן/בת זוג";
$pgv_lang["root_person"]		= "קוד הזיהוי של אדם המוצא";
$pgv_lang["hide_details"]		= "הסתר פרטים";
$pgv_lang["show_details"]		= "הצג פרטים";
$pgv_lang["person_links"]		= "קישורים לתרשימים, משפחות וקרובי משפחה של אדם זה. יש ללחוץ על הצלמית הזו להצגת העמוד כאשר אדם זה בתחילתו.";
$pgv_lang["zoom_box"]		= "קרב / הרחק";
$pgv_lang["orientation"]		= "כוון";
$pgv_lang["portrait"]			= "תצוגה צפופה";
$pgv_lang["landscape"]		= "תצוגה מרווחת";
$pgv_lang["start_at_parents"]		= "התחל מההורים";
$pgv_lang["charts"] 			= "תרשימים";
$pgv_lang["lists"] 			= "רשימות";
$pgv_lang["welcome_page"]		= "ברוכים הבאים";
$pgv_lang["max_generation"]		= "המספר המכסימלי של דורות באילן יוחסין הוא #PEDIGREE_GENERATIONS#.";
$pgv_lang["min_generation"]		= "המספר המינימאלי של דורות באילן יוחסין הוא 3.";
$pgv_lang["box_width"] 		= "רוחב התיבה";

//-- FUNCTIONS FILE MESSAGES
$pgv_lang["unable_to_find_family"]	= "לא נמצאת משפחה עם קוד זיהוי";
$pgv_lang["unable_to_find_indi"]	= "לא נימצא אדם עם קוד זיהוי";
$pgv_lang["unable_to_find_record"]	= "לא נמצאת רשומה עם קוד זיהוי";
$pgv_lang["unable_to_find_source"]	= "לא נימצא מקור עם קוד זיהוי";
$pgv_lang["unable_to_find_repo"]	= "לא נימצא מאגר עם קוד זיהוי";
$pgv_lang["repo_name"]		= "שם מאגר:";
$pgv_lang["address"]		= "כתובת:";
$pgv_lang["phone"]			= "טלפון:";
$pgv_lang["source_name"]		= "שם מקור:";
$pgv_lang["title"]			= "כותרת/תואר";
$pgv_lang["author"]			= "מחבר:";
$pgv_lang["publication"]		= "פרסום:";
$pgv_lang["call_number"]		= "מספר קריאה:";
$pgv_lang["living"]			= "חי";
$pgv_lang["private"]			= "אישי";
$pgv_lang["birth"]			= "לידה:";
$pgv_lang["death"]			= "פטירה:";
$pgv_lang["descend_chart"]		= "תרשים צאצאים";
$pgv_lang["individual_list"]		= "רשימת השמות";
$pgv_lang["family_list"]		= "רשימת המשפחות";
$pgv_lang["source_list"]		= "רשימת המקורות";
$pgv_lang["place_list"]		= "היררכית המקומות";
$pgv_lang["place_list_aft"] 		= "היררכית המקומות אחרי";
$pgv_lang["media_list"]		= "רשימת המולטימדיה";
$pgv_lang["search"]			= "חפש";
$pgv_lang["clippings_cart"]		= "עגלת גזירי העץ";
//$pgv_lang["not_an_array"]		= "לא מערך";
$pgv_lang["print_preview"]		= "גרסה ידידותית להדפסה";
$pgv_lang["cancel_preview"]		= "בחזרה לגרסה הרגילה";
$pgv_lang["change_lang"]		= "החלף שפה";
$pgv_lang["print"]			= "הדפס";
$pgv_lang["total_queries"]		= "סה\"כ מספר השאילתות על מסד הנתונים:";
$pgv_lang["total_privacy_checks"]	= "סה\"כ מספר בדיקות הפרטיות: ";
$pgv_lang["back"]			= "חזור";
$pgv_lang["privacy_list_indi_error"]	= "עקב חוקי פרטיות, אדם אחד או יותר מוסתרים.";
$pgv_lang["privacy_list_fam_error"]	= "עקב חוקי פרטיות, משפחה אחת או יותר מוסתרות.";

//-- INDIVIDUAL FILE MESSAGES
$pgv_lang["aka"] 			= "ידוע גם בשם";
$pgv_lang["male"]			= "זכר";
$pgv_lang["female"]			= "נקבה";
$pgv_lang["temple"]			= "מקדש מורמונים ";
$pgv_lang["temple_code"]		= "קוד של מקדש מורמונים:";
$pgv_lang["status"]			= "מצב";
$pgv_lang["source"]			= "מקור";
$pgv_lang["citation"]			= "ציטוט:";
$pgv_lang["text"]			= "טקסט מקור:";
$pgv_lang["note"]			= "הערה";
$pgv_lang["NN"]			= "(לא ידוע)";
$pgv_lang["PN"]			= "(לא ידוע)";
$pgv_lang["unrecognized_code"]	= "קוד GEDCOM לא מוכר";
$pgv_lang["unrecognized_code_msg"]	= "זו שגיאה שברצוננו לתקן. דווח לנו על השגיאה הזו.";
$pgv_lang["indi_info"]		= "מידע אישי";
$pgv_lang["pedigree_chart"]		= "אילן יוחסין";
//$pgv_lang["desc_chart2"]		= "תרשים צאצאים";
$pgv_lang["individual"]		= "אדם";
$pgv_lang["family"]			= "משפחה";
$pgv_lang["family_with"]		= "משפחה עם";
$pgv_lang["as_spouse"]		= "משפחה עם בן/בת זוג";
$pgv_lang["as_child"]		= "משפחה עם הורים";
$pgv_lang["view_gedcom"]		= "הצג מידע מ-GEDCOM";
$pgv_lang["add_to_cart"]		= "הוסף לעגלת גזירים";
$pgv_lang["still_living_error"]		= "הנתונים על אנשים חיים מוסתרים לקהל הרחב.<br />לפרטים נוספים התקשרו אל אדם זה חי עדיין או שנתוני הלידה או המוות שלו אינם רשומים.";
$pgv_lang["privacy_error"]		= ".הנתונים על אדם זה הם אישיים<br />";
$pgv_lang["more_information"]		= "לפרטים נוספים נא להתקשר אל ";
$pgv_lang["name"]			= "שם";
$pgv_lang["given_name"]		= "שם פרטי:";
$pgv_lang["surname"]		= "שם משפחה:";
$pgv_lang["suffix"]			= "סיומת:";
$pgv_lang["object_note"]		= "הערות הישות:";
$pgv_lang["sex"]			= "מין";
$pgv_lang["personal_facts"]		= "עובדות אישיות בפרוט";
$pgv_lang["lasttab"]			= "החוצץ האחרון של האדם שהייה בשימוש";
$pgv_lang["type"]			= "סוג";
$pgv_lang["date"]			= "תאריך";
$pgv_lang["place_description"]		= "מקום / תיאור";
$pgv_lang["parents"] 		= "הורים:";
$pgv_lang["siblings"] 		= "אח/אחות";
$pgv_lang["father"] 			= "אב";
$pgv_lang["mother"] 		= "אם";
$pgv_lang["parent"] 			= "הורה";
$pgv_lang["relatives"]		= "קרובי משפחה";
$pgv_lang["relatives_events"]		= "אירועים של קרובי משפחה";
$pgv_lang["child"]			= "ילד/ה";
$pgv_lang["spouse"]		= "בן/בת זוג";
$pgv_lang["surnames"]		= "שמות משפחה";
$pgv_lang["adopted"]		= "מאומץ";
$pgv_lang["foster"]			= "אומנת";
$pgv_lang["sealing"]			= "אישור";
$pgv_lang["challenged"]		= "אותגר";
$pgv_lang["disproved"]		= "הופרך";
$pgv_lang["infant"]			= "תינוק";
$pgv_lang["stillborn"]		= "נולד מת";
$pgv_lang["deceased"]		= "נפטר";
$pgv_lang["link_as_child"]		= "קשר אדם זה למשפחה קיימת בתור ילד";
$pgv_lang["link_as_wife"]		= "קשר אדם זה למשפחה קיימת בתור אישה";
$pgv_lang["link_as_husband"]		= "קשר אדם זה למשפחה קיימת בתור בעל";
//$pgv_lang["link_as"]		= "קשר אדם זה למשפחה קיימת בתור ";
$pgv_lang["no_tab1"]		= "לאדם זה אין עובדות.";
$pgv_lang["no_tab2"]		= "לאדם זה אין הערות.";
$pgv_lang["no_tab3"]		= "לאדם זה אין מקורות.";
$pgv_lang["no_tab4"]		= "לאדם זה אין מדיה.";
$pgv_lang["no_tab5"]		= "לאדם זה אין קרובי משפחה.";
$pgv_lang["no_tab6"]		= "לאדם זה אין תוספת יומן מחקר.";

//-- FAMILY FILE MESSAGES
$pgv_lang["family_info"]		= "נתוני משפחה";
$pgv_lang["family_group_info"]		= "נתוני קבוצת משפחה";
$pgv_lang["husband"]		= "בעל";
$pgv_lang["wife"]			= "אישה";
$pgv_lang["marriage"]		= "נישואין:";
$pgv_lang["lds_sealing"]		= "אישור המורמונים:";
$pgv_lang["marriage_license"]		= "רישיון נישואין:";
$pgv_lang["media_object"]		= "ישות מולטימדיה:";
$pgv_lang["children"]		= "ילדים";
$pgv_lang["no_children"]		= "אין ילדים באתר";
$pgv_lang["childless_family"]		= "המשפחה רשומה ללא ילדים";
$pgv_lang["number_children"]		= "מספר הילדים: ";
$pgv_lang["parents_timeline"]		= "הצג הזוג על תרשים קו הזמן";

//-- CLIPPINGS FILE MESSAGES
$pgv_lang["clip_cart"]		= "עגלת גזירי העץ";
$pgv_lang["clip_explaination"]		= "עגלת הגזירות של עץ המשפחה מאפשרת \"גזירה\" מהעץ ואריזה בקובץ אחד להורדה במבנה GEDCOM.<br /><br />";
$pgv_lang["item_with_id"]		= "פריט עם קוד זיהוי";
$pgv_lang["error_already"]		= "נימצא כבר בעגלת הגזרים שלך.";
$pgv_lang["which_links"]		= "איזה קשרים ברצונך להוסיף ממשפחה זו?";
$pgv_lang["just_family"]		= "הוסף רק את רשומת המשפחה הזו.";
$pgv_lang["parents_and_family"]	= "הוסף רשומות הורים לרשומת המשפחה הזו.";
$pgv_lang["parents_and_child"]	= "הוסף רשומות הורים וילדים לרשומת המשפחה הזו.";
$pgv_lang["parents_desc"]		= "הוסף רשומות הורים וכל הצאצאים למשפחה זו.";
$pgv_lang["continue"]		= "המשך להוסיף";
$pgv_lang["which_p_links"]		= "איזה קשרים ברצונך להוסיף לאדם זה?";
$pgv_lang["just_person"]		= "הוסף רק אדם זה.";
$pgv_lang["person_parents_sibs"]	= "הוסף אדם זה ואחיו ואחיותיו.";
$pgv_lang["person_ancestors"]	= "הוסף אדם זה ואב-אבותיו הישירים.";
$pgv_lang["person_ancestor_fams"]	= "הוסף אדם זה ואב-אבותיו הישירים ומשפחותיהם.";
$pgv_lang["person_spouse"]		= "הוסף אדם זה, בן/בת זוגו וילדיו.";
$pgv_lang["person_desc"]		= "הוסף אדם זה, בן/בת זוגו ואת כל הצאצאים.";
$pgv_lang["unable_to_open"]		= "לא ניתן לפתוח את תיקיית הגזרים לכתיבה.";
$pgv_lang["person_living"]		= "אדם זה חי. נתונים אישיים אינם נכללים.";
$pgv_lang["person_private"]		= "נתוני אדם זה אישיים. נתונים אישיים אינם נכללים.";
$pgv_lang["family_private"]		= "נתוני המשפחה הזו אישיים. נתוני המשפחה אינם נכללים.";
$pgv_lang["download"]		= "קליק ימני (קונטרול-קליק על מק) על הקישורים שמתחת ובחר \"Save Target As ...\" כדי להוריד הקבצים.";
$pgv_lang["media_files"]		= "קובצי מדיה המוזכרים ב-GEDCOM זה";
$pgv_lang["cart_is_empty"]		= "עגלת הגזרים שלך ריקה.";
$pgv_lang["id"]			= "קוד זיהוי";
$pgv_lang["name_description"]	= "שם / תאור";
$pgv_lang["remove"]		= "הסר";
$pgv_lang["empty_cart"]		= "רוקן עגלה";
$pgv_lang["download_now"]		= "הורד עכשיו";
$pgv_lang["indi_downloaded_from"]	= "האדם הורד מהאתר:";
$pgv_lang["family_downloaded_from"]	= "המשפחה הורדה מהאתר:";
$pgv_lang["source_downloaded_from"]	= "המקור הורד מהאתר:";

//-- PLACELIST FILE MESSAGES
$pgv_lang["connections"]		= "קשרים נמצאו למקום";
$pgv_lang["top_level"]		= "רמה עליונה";
$pgv_lang["form"]			= "המקומות רשומים במבנה: ";
$pgv_lang["default_form"]		= "עיר, מחוז, אזור/מדינה, ארץ";
$pgv_lang["default_form_info"]		= "(ברירת המחדל)";
$pgv_lang["gedcom_form_info"]	= "(GEDCOM)";
$pgv_lang["unknown"]		= "לא ידוע";
$pgv_lang["individuals"]		= "אנשים";
$pgv_lang["view_records_in_place"]	= "התבונן בכל הרשומות הנמצאות במקום הזה";
$pgv_lang["place_list2"] 		= "רשימת מקומות";
$pgv_lang["show_place_hierarchy"]	= "הראה מקומות בצורה היררכית";
$pgv_lang["show_place_list"]		= "הראה את כל המקומות ברשימה";
$pgv_lang["total_unic_places"]		= "סה\"כ מקומות שונים";

//-- MEDIALIST FILE MESSAGES
$pgv_lang["external_objects"]		= "ישויות חיצוניות";
$pgv_lang["multi_title"]		= "רשימת מולטימדיה";
$pgv_lang["media_found"]		= "ישויות מולטימדיה נמצאו";
$pgv_lang["view_person"]		= "הצג אדם";
$pgv_lang["view_family"]		= "הצג משפחה";
$pgv_lang["view_source"]		= "הצג מקור";
$pgv_lang["view_object"]		= "הצג ישות מדיה"; 
$pgv_lang["prev"]			= "&lt; הקודם";
$pgv_lang["next"]			= "הבא &gt;";
$pgv_lang["file_not_found"]		= "הקובץ לא נימצא";
$pgv_lang["medialist_show"]             	= "הראה";
$pgv_lang["per_page"]                   	= "לדף";
$pgv_lang["delete_directory"]		= "מחק תיקייה";
$pgv_lang["remove_object"]		= "הסר ישות מדיה";
$pgv_lang["confirm_remove_object"]	= "האם אתה בטוח שתרצה להסיר את ישות המדיה הזו ממאגר הנתונים?";
$pgv_lang["remove_links"]		= "הסר קישור";
$pgv_lang["confirm_remove_links"]	= "האם אתה בטוח שתרצה להסיר את כל הקישורים לישות המדיה הזו?";
$pgv_lang["delete_file"]		= "מחק קובץ";
$pgv_lang["confirm_delete_file"]	= "האם אתה בטוח שתרצה למחוק את הקובץ הזה?";
$pgv_lang["multiple_gedcoms"]	= "הקובץ מקושר למאגר נתונים של חקר משפחה אחר על השרת.  לא ניתן למחוק, להעביר או לשנות את שמו עד שהקשרים יוסרו.";
$pgv_lang["external_file"]		= "המדיה לא קיימת כקובץ על השרת. לא ניתן למחוק, להעביר או לשנות אותה.";
$pgv_lang["directory_not_empty"]	= "התיקייה אינה ריקה.";
$pgv_lang["directory_not_exist"]	= "התיקייה אינה קיימת.";
$pgv_lang["media_not_deleted"]	= "תיקיית המדיה לא הוסרה.";
$pgv_lang["media_deleted"]		= "תיקיית המדיה הוסרה בהצלחה.";
$pgv_lang["thumbs_not_deleted"]	= "תיקיית התמונות המזעריות לא הוסרה.";
$pgv_lang["thumbs_deleted"]		= "תיקיית התמונות המזעריות הוסרה בהצלחה.";
$pgv_lang["delete_dir_success"]	= "תיקיות המדיה והתמונות המזעריות הוסרו בהצלחה.";
$pgv_lang["current_dir"]		= "התיקייה הנוכחית";
$pgv_lang["add_directory"]		= "הוסף תיקייה";
$pgv_lang["show_thumbnail"]		= "הראה תמונות מזעריות";
$pgv_lang["image_format"]		= "מבנה התמונה";
$pgv_lang["media_format"]		= "מבנה המדיה";
$pgv_lang["image_size"]		= "מימדי התמונה";
$pgv_lang["media_file_size"]		= "גודל המדיה";
$pgv_lang["no_thumb_dir"]		= " תיקיית התמונות המזעריות לא קיימת ולא ניתן ליצור אותה עבורך";
$pgv_lang["manage_media"]		= "נהל מדיה";
$pgv_lang["gen_thumb"]		= "צור תמונה מזערית";
//$pgv_lang["gen_all_thumb"]		= "צור תמונות מזעריות חסרות";
$pgv_lang["folder_created"]		= "תיקייה נוצרה";
$pgv_lang["folder_no_create"]		= "לא ניתן ליצור תיקייה";
$pgv_lang["move_to"]		= "העבר אל";
$pgv_lang["security_not_exist"] 	= "התרעת ביטחון: קובץ <b><i>index.php</i></b> לא קיים בתוך ";
$pgv_lang["security_no_create"]	= "התרעת ביטחון: לא ניתן ליצור <b><i>index.php</i></b> בתוך ";
$pgv_lang["illegal_chars"]		= "שם ריק או אותיות לא חוקיות בשם";  
$pgv_lang["link_media"]		= "קשר מדיה";
$pgv_lang["to_person"]		= "לאדם";
$pgv_lang["to_family"]		= "למשפחה";
$pgv_lang["to_source"]		= "למקור";
$pgv_lang["media_id"]		= "קוד זיהוי של מדיה";
$pgv_lang["invalid_id"]		= "קוד זיהוי כזה לא קיים בקובץ GEDCOM הזה.";
$pgv_lang["media_exists"]		= "קובץ המדיה כבר קיים.";
$pgv_lang["media_thumb_exists"]	= "תמונה מזערית של המדיה כבר קיימת";
$pgv_lang["move_file_success"]	= "קובצי מדיה והתמונה המזערית הועברו בהצלחה.";
$pgv_lang["media_folder_corrupt"]	= "תיקיית המדיה מקולקלת.";
$pgv_lang["max_media_depth"]	= "ניתן רק לרדת לעומק #MEDIA_DIRECTORY_LEVELS# תיקיות";
$pgv_lang["upload_file"]		= "העלה קובץ מהמחשב שלך";
$pgv_lang["thumb_genned"]		= "תמונה מזערית #thumbnail# נוצרה אוטומטית.";
$pgv_lang["thumbgen_error"]		= "לא ניתן ליצור בצורה אוטומטית תמונה מזערית #thumbnail#.";
$pgv_lang["generate_thumbnail"]	= "צור תמונה מזערית אוטומטית מ-";
$pgv_lang["auto_thumbnail"]		= "קובץ מזערי אוטומטי";
$pgv_lang["no_upload"]		= "העלאת קובצי מדיה אינה מותרת משום שפריטי מולטי-מדיה נפסלו או משום שלא ניתן לכתוב בתיקיית המדיה.";
$pgv_lang["upload"]			= "העלה";
$pgv_lang["upload_media"]		= "העלאת קבצי מדיה";
$pgv_lang["folder"]		 	= "תיקייה על השרת";
$pgv_lang["media_file"]		= "קובץ מדיה שאותו יש להעלות";
$pgv_lang["thumbnail"]		= "תמונה ממוזערת שאותה יש להעלות";
$pgv_lang["upload_successful"]	= "ההעלאה הצליחה.";
$pgv_lang["media_file_deleted"]	= "קובץ מדיה נמחק בהצלחה.";
$pgv_lang["media_file_not_deleted"]	= "לא ניתן למחוק את קובץ המדיה.";
$pgv_lang["media_file_not_moved"]	= "לא ניתן להעביר את קובץ המדיה.";
$pgv_lang["media_file_not_renamed"]	= "לא ניתן להעביר את או לשנות את השם של קובץ המדיה.";
$pgv_lang["thumbnail_deleted"]	= "קובץ תמונה מזערית נמחק בהצלחה.";
$pgv_lang["thumbnail_not_deleted"]	= "לא ניתן למחוק את קובץ התמונה המזערית.";
$pgv_lang["media_record_deleted"]	= "רשומת מדיה #xref# וקישורים נמחקו בהצלחה ממאגר נתונים.";
$pgv_lang["media_record_not_deleted"]	= "לא ניתן למחוק את רשומת המדיה #xref# וקישורים ממאגר הנתונים.";
$pgv_lang["record_updated"]		= "רשומת #pid# עודכנה בהצלחה.";
$pgv_lang["record_not_updated"]	= "לא ניתן לעדכן את רשומת #pid#.";
$pgv_lang["record_removed"]		= "רשומת #xref# נמחקה בהצלחה מה-GEDCOM.";
$pgv_lang["record_not_removed"]	= "לא ניתן להסיר את רשומת #xref# מה-GEDCOM.";
$pgv_lang["record_added"]		= "רשומת ה-#xref# הוספה בהצלחה לקובץ ה-GEDCOM."; 
$pgv_lang["record_not_added"]	= "לא ניתן להוסיף את רשומת ה-#xref# לקובץ ה-GEDCOM."; 

//-- SEARCH FILE MESSAGES
$pgv_lang["search_gedcom"]		= "חפש מאגרי נתונים";
$pgv_lang["enter_terms"]		= "הכנס תנאי חיפוש";
$pgv_lang["soundex_search"] 		= "- חפש לפי האיות שאתה משער (סאונדקס)";
$pgv_lang["sources"]		= "מקורות";
$pgv_lang["firstname_search"]		= "פרטי";
$pgv_lang["lastname_search"]		= "משפחה";
$pgv_lang["search_place"]		= "מקום";
$pgv_lang["search_year"]		= "שנה";
$pgv_lang["no_results"]		= "לא נמצאו תוצאות";
$pgv_lang["invalid_search_input"] 	= "הכנס בבקשה שם פרטי, שם משפחה או מקום בנוסף לשנה";
$pgv_lang["search_options"]		= "אפשרויות חיפוש";
$pgv_lang["search_geds"]		= "מאגרי נתונים בהם יש לחפש"; 
$pgv_lang["search_type"]		= "סוג חיפוש";
$pgv_lang["search_general"]		= "חיפוש כללי";
$pgv_lang["search_soundex"]		= "חיפוש סאונדקס";
$pgv_lang["search_replace"]		= "חפש והחלף";
$pgv_lang["search_inrecs"]		= "חפש";
$pgv_lang["search_fams"]		= "משפחות";
$pgv_lang["search_indis"]		= "אנשים";
$pgv_lang["search_sources"]		= "מקורות";
$pgv_lang["search_more_chars"]          	= "נא הכנס יותר מתו אחד";
$pgv_lang["search_soundextype"]	= "סוג סאונדקס:";
//$pgv_lang["search_russell"]		= "ראסל";
$pgv_lang["search_russell"]                     	= "בסיסי";
$pgv_lang["search_DM"]		= "דאיטש-מוקוטוף";
$pgv_lang["search_prtnames"]		= "שמות אנשים<br />להדפסה:";
$pgv_lang["search_prthit"]		= "שמות שנמצאו";
$pgv_lang["search_prtall"]		= "כל השמות";
$pgv_lang["search_tagfilter"]		= "פילטר סינון";
$pgv_lang["search_tagfon"]		= "סנן חלק מהנתונים שאינם של חקר המשפחה";
$pgv_lang["search_tagfoff"]		= "ללא פילטר";
$pgv_lang["associate"]		= "שותף";
$pgv_lang["search_asso_label"]	= "שותפים";
$pgv_lang["search_asso_text"]		= "הראה אנשים/משפחות קשורים";
$pgv_lang["results_per_page"]		= "תוצאות לדף"; 
$pgv_lang["search_record"]		= "רשומה שלמה";
$pgv_lang["search_to"]		= "עד";
$pgv_lang["replace_with"]		= "החלף ב-";

//-- SOURCELIST FILE MESSAGES
$pgv_lang["sources_found"]		= "מקורות נמצאו";
$pgv_lang["titles_found"]		= "כותרות";
$pgv_lang["find_source"]		= "מצא מקור";

//-- REPOLIST FILE MESSAGES
$pgv_lang["repo_list"]		= "רשימת מאגרים";
$pgv_lang["repos_found"]		= "נמצאו מאגרים";
$pgv_lang["find_repository"]		= "מצא מאגר";
$pgv_lang["total_repositories"]		= "סה\"כ מאגרים";
$pgv_lang["repo_info"]		= "נתוני מאגר";
$pgv_lang["delete_repo"]		= "מחק מאגר";
$pgv_lang["other_repo_records"]	= "רשומות קשורות למאגר זה:";
$pgv_lang["create_repository"]		= "צור מאגר";
$pgv_lang["new_repo_created"]	= "מאגר חדש נוצר";
$pgv_lang["paste_rid_into_field"]	= "הדבק את זיהוי המאגר הבא לשדות העריכה כדי להתייחס למאגר זה ";
$pgv_lang["confirm_delete_repo"]	= "האם באמת למחוק את המאגר ממאגר הנתונים?";

//-- SOURCE FILE MESSAGES
$pgv_lang["source_info"]		= "נתוני מקור";
$pgv_lang["other_records"]		= "הנתונים הקשורים למקור זה:";
$pgv_lang["people"]			= "אנשים";
$pgv_lang["families"]		= "משפחות";
$pgv_lang["total_sources"]		= "סה\"כ מקורות";

//-- BUILDINDEX FILE MESSAGES
$pgv_lang["building_indi"]		= "אינדקס שמות ומשפחות בבנייה";
$pgv_lang["building_index"]		= "בונה רשימת אינדקס";
$pgv_lang["invalid_gedformat"]	= "מבנה GEDCOM 5.5 שגוי";
$pgv_lang["importing_records"]	= "מייבא רשומות למסד נתונים";
$pgv_lang["detected_change"]		= "PhpGedView גילה שינוי בקובץ <b>#GEDCOM#</b>. יש לבנות מחדש את קובצי האינדקס לפני ההמשך.";
$pgv_lang["please_be_patient"]	= "סבלנות בבקשה";
$pgv_lang["reading_file"]		= "קובץ GEDCOM בקריאה";
$pgv_lang["flushing"]		= "מרוקן תוכן";
$pgv_lang["found_record"]		= "רשומה נמצאה";
$pgv_lang["exec_time"]		= "זמן העיבוד:";
$pgv_lang["time_limit"]		= "הגבלת הזמן:";
$pgv_lang["unable_to_create_index"]	= "לא ניתן ליצור קובץ אינדקסים. וודא שקיימות הרשאות לתיקייה PhpGedView. את ההרשאות ניתן לשנות אחרי שקובצי האינדקס יכתבו.";
$pgv_lang["indi_complete"]		= "עדכון קובץ אינדקס השמות הסתיים.";
$pgv_lang["family_complete"]		= "עדכון קובץ אינדקס המשפחה הסתיים.";
$pgv_lang["source_complete"]		= "עדכון קובץ אינדקס המקורות הסתיים.";
$pgv_lang["tables_exist"]		= "טבלאות PhpGedView נמצאות כבר במאגר הנתונים. ";
$pgv_lang["you_may"]		= "הנך יכול:";
$pgv_lang["drop_tables"]		= "הסר את הטבלאות הקיימות.";
$pgv_lang["import_multiple"]		= "ייבא ועבוד עם מספר קבצי GEDCOM";
$pgv_lang["explain_options"]		= "אם תבחר להסיר את הטבלאות, <u>כל</u> הנתונים יוחלפו ע\"י ה-GEDCOM הזה.<br /><br />אם תבחר לייבא ולעבוד עם מספר ,GEDCOM-ים PhpGedView ימחק הנתונים שייובאו ע\"י GEDCOM עם אותו שם קובץ. דבר זה מאפשר שמירת נתונים ממספר קבצי חקר משפחה באותן הטבלאות ומעבר קל ביניהם.<br /><br /><b>שים לב ששמות הקבצים רגישים לגודל האותיות.</b>  המשמעות ש-<b>Test.GED</b> <u>אינו</u> זהה ל-<b>test.ged</b>.";
$pgv_lang["path_to_gedcom"]		= "הכניס נתיב לקובץ ה-GEDCOM שלך:";
$pgv_lang["dataset_exists"]		= "קובץ GEDCOM בשם זה הועבר כבר למאגר הנתונים.";
$pgv_lang["changes_present"]		= "שינויים לא מאושרים קיימים עבור ה-GEDCOM הנוכחי. אם תמשיך בייבוא זה, השינויים שממתינים לאישור יעדכנו את מאגר הנתונים מידית. עליך לעיין בשינויים הממתינים לפני שתמשיך בייבוא.";
$pgv_lang["empty_dataset"]		= "האם ברצונך לרוקן את מסד הנתונים ולהחליף אותו בנתונים החדשים הללו?";
$pgv_lang["index_complete"]		= "אינדקס הושלם.";
$pgv_lang["click_here_to_go_to_pedigree_tree"]	= "הקשה כאן מביאה לאילן יוחסין";
$pgv_lang["updating_is_dead"]	= "עדכון האדם נכשל";
$pgv_lang["import_complete"]		= "הייבוא הסתיים";
$pgv_lang["updating_family_names"]	= "עדכון שמות משפחה עבור FAM ";
$pgv_lang["processed_for"]		= "עבד קובץ עבור ";
$pgv_lang["run_tools"]		= "האם ברצונך להריץ אחד הכלים הבאים לפני ייבוא קובץ ה-GEDCOM שלך:";
$pgv_lang["addmedia"]		= "כלי להוספת מדיה";
$pgv_lang["dateconvert"]		= "כלי לתרגום תאריך";
$pgv_lang["xreftorin"]		= "הסב מספרי XREF ID למספרי RIN";
$pgv_lang["tools_readme"]		= "ראה את פרק הכלים בקובץ <a href=\"readme.txt\">readme.txt</a> לקבלת מידע נוסף.";
//$pgv_lang["tools_readme"]                       = "See the Tools section of the README.TXT file for more information.";
$pgv_lang["sec"]			= "שניות.";
$pgv_lang["bytes_read"]		= "בתים שנקראו:";
$pgv_lang["created_remotelinks"]	= "טבלת <i>קשרים מרוחקים</i> נוצרה בהצלחה.";
$pgv_lang["created_remotelinks_fail"] 	= "לא ניתן ליצור טבלת <i>קשרים מרוחקים</i>.";
$pgv_lang["created_indis"]		= "טבלת <i>אנשים</i> נוצרה בהצלחה.";
$pgv_lang["created_indis_fail"]		= "לא ניתן ליצור טבלת <i>אנשים</i>";
$pgv_lang["created_fams"]		= "טבלת <i>משפחות</i> נוצרה בהצלחה.";
$pgv_lang["created_fams_fail"]		= "לא ניתן ליצור טבלת <i>משפחות</i>";
$pgv_lang["created_sources"]		= "טבלת <i>מקורות</i> נוצרה בהצלחה.";
$pgv_lang["created_sources_fail"]	= "לא ניתן ליצור טבלת <i>מקורות</i>";
$pgv_lang["created_other"]		= "טבלת <i>אחר</i> נוצרה בהצלחה.";
$pgv_lang["created_other_fail"]	= "לא ניתן ליצור טבלת <i>אחר</i>";
$pgv_lang["created_places"]		= "טבלת <i>מקומות</i> נוצרה בהצלחה.";
$pgv_lang["created_places_fail"]	= "לא ניתן ליצור טבלת <i>מקומות</i>";
$pgv_lang["created_placelinks"] 	= "טבלת <i>קישור מקומות</i> נוצרה בהצלחה.";
$pgv_lang["created_placelinks_fail"]	= "לא ניתן ליצור טבלת <i>קישור מקומות</i>.";
$pgv_lang["created_media_fail"]	= "לא ניתן ליצור את טבלת ה<i>מדיה</i>.";
$pgv_lang["created_media_mapping_fail"]  = "לא ניתן ליצור את טבלת ה <i>מיפוי של המדיה</i>.";
$pgv_lang["import_progress"]		= "התקדמות הייבוא...";

//-- INDIVIDUAL AND FAMILYLIST FILE MESSAGES
$pgv_lang["total_fams"]		= "מספר המשפחות";
$pgv_lang["total_indis"]		= "מספר האנשים";
$pgv_lang["starts_with"]		= "מתחיל ב:";
$pgv_lang["person_list"]		= "רשימת שמות:";
$pgv_lang["paste_person"]		= "הדבק אדם";
$pgv_lang["notes_sources_media"]	= "הערות, מקורות ומדיה";
$pgv_lang["notes"]			= "הערות";
$pgv_lang["ssourcess"]		= "מקורות";
$pgv_lang["media"]			= "מדיה";
$pgv_lang["name_contains"]		= "השם מכיל:";
$pgv_lang["filter"]			= "פילטר";
$pgv_lang["find_individual"]		= "מצא קוד זיהוי";
$pgv_lang["find_familyid"]       		= "מצא קוד זיהוי של המשפחה";
$pgv_lang["find_sourceid"]		= "מצא את המקור";
$pgv_lang["find_specialchar"]		= "מצא סימנים מיוחדים";
$pgv_lang["magnify"]		= "הגדל";
$pgv_lang["skip_surnames"]		= "דלג על רשימות שמות המשפחה";
$pgv_lang["show_surnames"]		= "הצג רשימות שמות המשפחה";
$pgv_lang["all"]			= "הכל";
$pgv_lang["hidden"]			= "חבויים";
$pgv_lang["confidential"]		= "סודי";
$pgv_lang["alpha_index"]		= "אינדקס אלף בית";
$pgv_lang["name_list"] 		= "רשימת שמות";
$pgv_lang["firstname_alpha_index"] 	= "אינדקס אלף בית של שמות פרטיים";
$pgv_lang["roots"]		 	= "שורשים";
$pgv_lang["leaves"] 			= "עלים";
$pgv_lang["widow"] 			= "אלמנה";
$pgv_lang["widower"] 		= "אלמן";

//-- TIMELINE FILE MESSAGES
$pgv_lang["age"]			= "גיל";
$pgv_lang["days"]			= "ימים";
$pgv_lang["months"]		= "חודשים";
$pgv_lang["years"]			= "שנים";
$pgv_lang["day1"]			= "יום";
$pgv_lang["month1"]		= "חודש";
$pgv_lang["year1"]			= "שנה";
$pgv_lang["timeline_title"]		= "תרשים קו הזמן של PhpGedView";
$pgv_lang["timeline_chart"]		= "תרשים קו הזמן";
$pgv_lang["remove_person"]		= "הסר אדם";
$pgv_lang["show_age"]		= "הראה נקודת ציון של גיל";
$pgv_lang["add_another"]		= "הוסף אדם לתרשים:<br >קוד זיהוי אדם:";
$pgv_lang["find_id"]			= "מצא קוד זיהוי";
$pgv_lang["show"]			= "הצג";
$pgv_lang["year"]			= "שנה:";
$pgv_lang["timeline_instructions"]	= "ברוב תוכנות הגלישה החדשות ניתן להקיש ולגרור קופסאות על התרשים.";
$pgv_lang["zoom_in"]		= "קרב";
$pgv_lang["zoom_out"]		= "הרחק";
$pgv_lang["timeline_beginYear"] 	= "שנת התחלה";
$pgv_lang["timeline_endYear"] 	= "שנת סיום";
$pgv_lang["timeline_scrollSpeed"] 	= "מהירות";
$pgv_lang["timeline_zoom"] 		= "זום";
$pgv_lang["timeline_controls"] 		= "הגדרות קו הזמן";
$pgv_lang["zoom_default"] 		= "ברירת מחדל";
$pgv_lang["zoom_2"]		= "זום 2";
$pgv_lang["zoom_3"]		= "זום 3";
$pgv_lang["include_family"] 		= "כלול משפחה קרובה";
$pgv_lang["lifespan_chart"] 		= "תרשים תוהלת חיים";

//-- MONTH NAMES
$pgv_lang["jan"]			= "ינואר";
$pgv_lang["feb"]			= "פברואר";
$pgv_lang["mar"]			= "מרץ";
$pgv_lang["apr"]			= "אפריל";
$pgv_lang["may"]			= "מאי";
$pgv_lang["jun"]			= "יוני";
$pgv_lang["jul"]			= "יולי";
$pgv_lang["aug"]			= "אוגוסט";
$pgv_lang["sep"]			= "ספטמבר";
$pgv_lang["oct"]			= "אוקטובר";
$pgv_lang["nov"]			= "נובמבר";
$pgv_lang["dec"]			= "דצמבר";
$pgv_lang["abt"]			= "בערך";
$pgv_lang["aft"]			= "אחרי";
$pgv_lang["and"]			= "ו-";
$pgv_lang["bef"]			= "לפני";
$pgv_lang["bet"]			= "בין";
$pgv_lang["cal"]			= "מחושב";
$pgv_lang["est"]			= "מוערך";
$pgv_lang["from"]			= "מ-";
$pgv_lang["int"]			= "פרשנות";
$pgv_lang["to"]			= "עד";
$pgv_lang["cir"]			= "בערך";
$pgv_lang["apx"]			= "בערך";

//-- Admin File Messages
$pgv_lang["select_an_option"]		= "בחר באפשרות:";
$pgv_lang["readme_documentation"]	= "תיעוד (Readme)";
$pgv_lang["view_readme"]		= "התבונן בקובץ תיעוד readme.txt";
$pgv_lang["configuration"]		= "תצורה";
$pgv_lang["rebuild_indexes"]		= "בנה אינדקסים מחדש";
$pgv_lang["user_admin"]		= "ניהול משתמשים";
$pgv_lang["user_created"]		= "בנית המשתמש הצליחה.";
$pgv_lang["user_create_error"]	= "לא ניתן להוסיף משתמש. נשא שנית .";
$pgv_lang["password_mismatch"]	= "הסיסמאות אינן מתאימות.";
$pgv_lang["enter_username"]		= ".יש למלא קוד משתמש";
$pgv_lang["enter_fullname"]		= ".יש למלא שם פרטי ושם משפחה";
$pgv_lang["enter_password"]		= ".יש למלא סיסמא";
$pgv_lang["confirm_password"]	= ".יש לאשר את הסיסמא";
$pgv_lang["update_user"]		= "עדכן נתוני המשתמש";
$pgv_lang["update_myaccount"]	= "עדכן המשתמש שלי";
$pgv_lang["save"]			= "שמור";
$pgv_lang["delete"]			= "מחק";
$pgv_lang["edit"]			= "ערוך";
$pgv_lang["full_name"]		= "שם מלא";
$pgv_lang["visibleonline"]		= "גלוי למשתמשים אחרים בהיותו מחובר";
$pgv_lang["comment"]		= "הערות מנהלן על משתמש";
$pgv_lang["comment_exp"]		= "התראה למנהלן בתאריך";
$pgv_lang["editaccount"]		= "הרשאה למשתמש זה לערוך את נתוני המשתמש שלו";
$pgv_lang["admin_gedcom"]		= "ניהול GEDCOM";
$pgv_lang["confirm_user_delete"]	= "אשר שברצונך למחוק משתמש";
$pgv_lang["create_user"]		= "בנה משתמש";
$pgv_lang["no_login"]		= "לא ניתן לאשר משתמש.";
$pgv_lang["basic_realm"]		= "מערכת אימות של PhpGedView";
$pgv_lang["basic_auth_failure"]	= "עליך להכניס קוד משתמש וסיסמא תקפים כדי להיכנס למשאב זה";
$pgv_lang["basic_auth"]		= "אימות בסיסי";
$pgv_lang["digest_auth"]		= "אימות Digest Authentication"; //not used in code yet
$pgv_lang["no_auth_needed"]		= "אין אימות";
$pgv_lang["import_gedcom"]		= "ייבא את קובץ ה-GEDCOM";
$pgv_lang["duplicate_username"]	= "קוד משתמש כפול. משתמש עם קוד זה מוגדר כבר. נא בחר קוד משתמש אחר.";
$pgv_lang["gedcomid"]		= " קוד זיהוי של המשתמש הזה בקובץ ה-GEDCOM";
$pgv_lang["enter_gedcomid"]		= "יש להכניס קוד זיהוי של GEDCOM.";
$pgv_lang["user_info"]		= "נתוני משתמש שלי";
$pgv_lang["rootid"]			= "אדם ההתחלה באילן היוחסין";
$pgv_lang["download_gedcom"]	= "הורד GEDCOM";
$pgv_lang["upload_gedcom"]		= "העלה GEDCOM";
$pgv_lang["add_new_gedcom"]	= "בנה GEDCOM חדש";
$pgv_lang["gedcom_file"]		= "קובץ GEDCOM:";
$pgv_lang["enter_filename"]		= ".GEDCOM יש להכניס שם קובץ";
$pgv_lang["file_not_exists"]		= "לא קיים קובץ בשם הזה.";
$pgv_lang["file_not_present"]		= "הקובץ אינו קיים.";
$pgv_lang["file_exists"]		= "קובץ GEDCOM בשם זה כבר קיים. בחר שם אחר או מחק את הקובץ הישן.";
$pgv_lang["new_gedcom_title"]	= "חקר שושלת יוחסין מ-[#GEDCOMFILE#]";
$pgv_lang["upload_error"]		= "התגלתה שגיאה בהעלאת הקובץ שלך.";
//$pgv_lang["upload_help"]		= "בחר קבצים מהמחשב המקומי שלך והעלה אותם לשרת. כל הקבצים יועלו לתיקייה <b>#MEDIA_DIRECTORY#</b> או לאחת מהתיקיות מתחתיו.<br /><br />שמות החוצצים שתציין יתווספו ל-#MEDIA_DIRECTORY#. למשל, #MEDIA_DIRECTORY#myfamily. אם תיקיית התמונות המזעריות אינה קיימת, היא תווצר בצורה אוטומטית.<br /><br />";
$pgv_lang["upload_media_help"]	= "~#pgv_lang[upload_media]#~<br /><br />בחר קבצים מהמחשב המקומי שלך להעלאה לשרת שלך. כל הקבצים מועלים לתיקיית <b>#MEDIA_DIRECTORY#</b> או לאחת מהתיקיות מתחתיה.<br /><br />שמות החוצצים שאתה מציין יתווספו ל-#MEDIA_DIRECTORY#. למשל, #MEDIA_DIRECTORY#myfamily. אם תיקיית התמונות המזעריות אינה קיימת, היא תווצר בצורה אוטומטית.";
$pgv_lang["upload_gedcom_help"]	= "בחר את קובץ ה-GEDCOM או ה-ZIP מהמחשב המקומי שלך להעלאה לשרת שלך. הקובץ יועלה לתיקיית <b>#INDEX_DIRECTORY#</b>.<br /><br />אם תעלה קובץ ZIP, עליו להכיל קובץ GEDCOM אחד בלבד. בשלבים הבאים יעשה שימוש בקובץ ה-GEDCOM הזה.<br /><br />";
$pgv_lang["add_gedcom_instructions"]	= "הכנס שם קובץ עבור ה-GEDCOM החדש הזה.  קובץ ה-GEDCOM החדש ייווצר בתיקיית האינדקס: #INDEX_DIRECTORY#";
$pgv_lang["file_success"]		= "הקובץ הועלה בהצלחה";
$pgv_lang["file_too_big"]		= "קובץ ההעלאה גדול מהמותר";
$pgv_lang["file_partial"]		= "הקובץ עלה חלקית, נסה שנית.";
$pgv_lang["file_missing"]		= "שום קובץ לא התקבל. הבא שנית.";
$pgv_lang["manage_gedcoms"]	= "נהל קבצי GEDCOM וערוך פרטיות";
$pgv_lang["research_assistant"]	= "עוזר מחקר";
//$pgv_lang["research_log"]		= "יומן מחקר";
$pgv_lang["administration"]		= "ניהול";
$pgv_lang["ansi_to_utf8"]		= "הסב קובץ GEDCOM זה מ-ANSI ל-UTF-8?";
$pgv_lang["utf8_to_ansi"]		= "הסב מ-UTF-8 ל-(ANSI (ISO-8859-1?";
$pgv_lang["visitor"]			= "אורח";
$pgv_lang["user"]			= "משתמש מאושר";
$pgv_lang["gedadmin"]		= "מנהלן GEDCOM";
$pgv_lang["siteadmin"]		= "מנהלן אתר";
$pgv_lang["apply_privacy"]		= "הפעל הגדרות פרטיות?";
$pgv_lang["choose_priv"]		= "בחר רמת פרטיות:";
$pgv_lang["user_manual"]		= "ספר הוראות למשתמש PhpGedView";
$pgv_lang["upgrade"]		= "שדרג PhpGedView";
$pgv_lang["view_logs"]		= "התבונן בקבצי היומן";
$pgv_lang["logfile_content"]		= "תוכן קובץ יומן";
$pgv_lang["step1"]			= "שלב 1 מתוך 4:";
$pgv_lang["step2"]			= "שלב 2 מתוך 4:";
$pgv_lang["step3"]			= "שלב 3 מתוך 4:";
$pgv_lang["step4"]			= "שלב 4 מתוך 4:";
$pgv_lang["validate_gedcom"]		= "בדוק GEDCOM";
$pgv_lang["img_admin_settings"]	= "ערוך תצורה של פעולה על תמונות";
$pgv_lang["download_note"]		= "הערה: יתכן שזמן העיבוד להורדת קובצי GEDCOM גדולים לוקח זמן רב. אם משך הזמן להורדה אינו מספיק, יתכן וההורדה לא תהייה שלמה.<br /><br />תוכל לבדוק ב-GEDCOM שהורד יש שורת <b>0&nbsp;TRLR</b> בסוף הקובץ, כדי לוודא שהוא הורד בצורה נכונה. קובצי ה-GEDCOM הם קובצי טכסט; ניתן להשתמש בתוכנת עריכה מתאימה של טכסטים , אבל <u>אין</u> לשמור את קובץ ה-GEDCOM שהורד אחרי שבדקת אותו.<br /><br />בד\"כ ההורדה עורכת משך זמן דומה למשך ייבוא ה-GEDCOM שלך.";
$pgv_lang["pgv_registry"]		= "התבונן באתרים אחרים המשתמשים ב-PhpGedView";
$pgv_lang["verify_upload_instructions"]	= "נימצא קובץ GEDCOM בעל שם זהה. אם תבחר להמשיך, קובץ ה-GEDCOM הישן יוחלף בקובץ שהעלת ותהליך היבוא יתחיל שוב. אם תבחר לבטל, קובץ ה-GEDCOM הישן יישאר כפי שהיה.";
$pgv_lang["cancel_upload"]		= "ביטול ההעלאה";
$pgv_lang["add_media_records"]	= "הוסף רשומות מדיה";
$pgv_lang["manage_media_files"]	= "נהל קובצי מדיה";
$pgv_lang["link_media_records"]	= "קשר מדיה";
$pgv_lang["add_media_button"]	= "הוסף מדיה";
$pgv_lang["media_linked"]		= "המדיה הזו מקושרת ל-";
$pgv_lang["media_not_linked"]		= "המדיה הזו אינה מקושרת לשום רשומת GEDCOM.";
$pgv_lang["phpinfo"]		= "נתוני PHP";
$pgv_lang["admin_info"]		= "אינפורמטיבי";
$pgv_lang["admin_geds"]		= "ניהול מידע ו-GEDCOM-ים";
$pgv_lang["admin_site"]		= "ניהול האתר";

//-- Relationship chart messages
$pgv_lang["relationship_great"]	= "Great"; //--@@ ??
$pgv_lang["relationship_chart"]	= "קירבה משפחתית";
$pgv_lang["person1"]		= "אדם א'";
$pgv_lang["person2"]		= "אדם ב'";
$pgv_lang["no_link_found"]		= "לא נמצא קשר (אחר) בין שני האנשים.";
$pgv_lang["sibling"]			= "אח/אחות";
$pgv_lang["follow_spouse"]		= "בדוק קירבת נישואין.";
$pgv_lang["timeout_error"]		= "החיפוש ארך יותר מידי זמן.";
$pgv_lang["son"]			= "בן";
$pgv_lang["daughter"]		= "בת";
$pgv_lang["son-in-law"]		= "חתן";  // the husband of your daughter
$pgv_lang["daughter-in-law"]		= "כלה"; // the wife of your son
$pgv_lang["grandchild"]		= "נכד/ה";
$pgv_lang["grandson"]		= "נכד";
$pgv_lang["granddaughter"]		= "נכדה";
$pgv_lang["brother"]			= "אח";
$pgv_lang["sister"]			= "אחות";
$pgv_lang["brother-in-law"]		= "גיס";
$pgv_lang["sister-in-law"]		= "גיסה";
$pgv_lang["aunt"]			= "דודה";
$pgv_lang["uncle"]			= "דוד";
$pgv_lang["firstcousin"]		= "בן דוד מדרגה ראשונה";
$pgv_lang["femalecousin"]		= "בת דודה";
$pgv_lang["malecousin"]		= "בן דוד";
$pgv_lang["cousin-in-law"]		= "בן דוד דרך נישואין";
$pgv_lang["relationship_to_me"]	= "קירבה אלי";
$pgv_lang["rela_husb"]		= "קירבה לבעל";
$pgv_lang["rela_wife"]		= "קירבה לאישה";
$pgv_lang["next_path"]		= "מצא הנתיב הבא";
$pgv_lang["show_path"]		= "הראה את הנתיב";
$pgv_lang["line_up_generations"]	= "סדר בשורה לפי דורות";
$pgv_lang["oldest_top"]             	= "הראה את הישן למעלה";
// %1$s replaced by first person, %2$s by the relationship and %3$s by the second person.
$pgv_lang["relationship_male_1_is_the_2_of_3"] = '%1$s הוא %2$s של %3$s';
$pgv_lang["relationship_female_1_is_the_2_of_3"] = '%1$s היא %2$s של %3$s';

$pgv_lang["mother_in_law"]		= "חמות"; 
$pgv_lang["father_in_law"]		= "חם";
$pgv_lang["brother_in_law"]		= "גיס";
$pgv_lang["sister_in_law"]		= "גיסה";
$pgv_lang["son_in_law"]		= "חתן";
$pgv_lang["daughter_in_law"]		= "כלה";

$pgv_lang["step_son"]		= "בן חורג";
$pgv_lang["step_daughter"]	    	= "בת חורגת";

// NOTE in the translations below %d is replaced with the number of greats
// The SOSA definitions should change in parallel !!


$pgv_lang["great_grandfather"]		= "אב שלש"; //<=
$pgv_lang["great_grandmother"]	= "אם שלשה"; //<=
$pgv_lang["great_great_grandfather"]	= "אב רבע"; //<=
$pgv_lang["great_great_grandmother"]	= "אם רבעה"; //<=
$pgv_lang["n_x_great_grandfather"]	= "אב מדרגה %d"; 
$pgv_lang["n_x_great_grandmother"]	= "אם מדרגה %d";  
//great_great_great_grandmother 	= "אם מדרגה 5";

// the bosa_brothers_offspring name is used for fraternal nephews and nieces - the names below can be extended to any number
// of generations just by adding more translations.
// 1st generation
$pgv_lang["bosa_brothers_offspring_2"] = "נכדן";              // brother's son
$pgv_lang["bosa_brothers_offspring_3"] = "נכדנית";          // brother's daughter
// 2nd generation
$pgv_lang["bosa_brothers_offspring_4"] = "נכדן משנה";     // brother's son's son 
$pgv_lang["bosa_brothers_offspring_5"] = "נכדנית משנה"; // brother's son's daughter
$pgv_lang["bosa_brothers_offspring_6"] = "נכדן משנה";     // brother's daughter's son
$pgv_lang["bosa_brothers_offspring_7"] = "נכדנית משנה"; // brother's daughter's daughter
// 3nd generation
$pgv_lang["bosa_brothers_offspring_8"] = "נכדן שלש";       // brother's son's son's son 
$pgv_lang["bosa_brothers_offspring_9"] = "נכדנית שלשה"; // brother's son's son's daughter
$pgv_lang["bosa_brothers_offspring_10"] = "נכדן שלש";      // brother's son's daughter's son
$pgv_lang["bosa_brothers_offspring_11"] = "נכדנית שלשה";// brother's son's daughter's daughter
$pgv_lang["bosa_brothers_offspring_12"] = "נכדן שלש";      // brother's daughter's son's son 
$pgv_lang["bosa_brothers_offspring_13"] = "נכדנית שלשה";// brother's daughter's son's daughter
$pgv_lang["bosa_brothers_offspring_14"] = "נכדן שלש";      // brother's daughter's daughter's son
$pgv_lang["bosa_brothers_offspring_15"] = "נכדנית שלשה";// brother's daughter's daughter's daughter
// 4th generation
$pgv_lang["bosa_brothers_offspring_16"] = "נכדן רבע ";       // brother's son's son's son's son 
$pgv_lang["bosa_brothers_offspring_17"] = "נכדנית רבעה "; // brother's son's son's son's daughter
$pgv_lang["bosa_brothers_offspring_18"] = "נכדן רבע ";       // brother's son's son's daughter's son
$pgv_lang["bosa_brothers_offspring_19"] = "נכדנית רבעה "; // brother's son's son's daughter's daughter
$pgv_lang["bosa_brothers_offspring_20"] = "נכדן רבע ";       // brother's son's daughter's son's son 
$pgv_lang["bosa_brothers_offspring_21"] = "נכדנית רבעה "; // brother's son's daughter's son's daughter
$pgv_lang["bosa_brothers_offspring_22"] = "נכדן רבע ";       // brother's son's daughter's daughter's son
$pgv_lang["bosa_brothers_offspring_23"] = "נכדנית רבעה "; // brother's son's daughter's daughter's daughter
$pgv_lang["bosa_brothers_offspring_24"] = "נכדן רבע ";       // brother's daughter's son's son's son 
$pgv_lang["bosa_brothers_offspring_25"] = "נכדנית רבעה "; // brother's daughter's son's son's daughter
$pgv_lang["bosa_brothers_offspring_26"] = "נכדן רבע ";       // brother's daughter's son's daughter's son
$pgv_lang["bosa_brothers_offspring_27"] = "נכדנית רבעה "; // brother's daughter's son's daughter's daughter
$pgv_lang["bosa_brothers_offspring_28"] = "נכדן רבע ";       // brother's daughter's daughter's son's son 
$pgv_lang["bosa_brothers_offspring_29"] = "נכדנית רבעה "; // brother's daughter's daughter's son's daughter
$pgv_lang["bosa_brothers_offspring_30"] = "נכדן רבע ";       // brother's daughter's daughter's daughter's son
$pgv_lang["bosa_brothers_offspring_31"] = "נכדנית רבעה "; // brother's daughter's daughter's daughter's daughter
// for the general case of offspring of the nth generation use the text below
// in this text %1$d is replaced with the number of generations
//              %2$d is replaced with the number of generations - 1
//              %3$d is replaced with the number of generations - 2
$pgv_lang["n_x_brothers_son"]	  = 'נכדנית מדרגה %1$d';
$pgv_lang["n_x_brothers_daughter"] = 'נכדנית מדרגה %1$d';
// the bosa_sisters_offspring name is used for sisters nephews and nieces - the names below can be extended to any number
// of generations just by adding more translations.
// 1st generation
$pgv_lang["bosa_sisters_offspring_2"] = "נכדן";               // sister's son
$pgv_lang["bosa_sisters_offspring_3"] = "נכדנית";           // sister's daughter
// 2nd generation
$pgv_lang["bosa_sisters_offspring_4"] = "נכדן משנה";      // sister's son's son 
$pgv_lang["bosa_sisters_offspring_5"] = "נכדנית משנה";  // sister's son's daughter
$pgv_lang["bosa_sisters_offspring_6"] = "נכדן משנה";      // sister's daughter's son
$pgv_lang["bosa_sisters_offspring_7"] = "נכדנית משנה";  // sister's daughter's daughter
// 3nd generation
$pgv_lang["bosa_sisters_offspring_8"] = "נכדן שלש";        // sister's son's son's son 
$pgv_lang["bosa_sisters_offspring_9"] = "נכדנית שלשה";  // sister's son's son's daughter
$pgv_lang["bosa_sisters_offspring_10"] = "נכדן שלש";       // sister's son's daughter's son
$pgv_lang["bosa_sisters_offspring_11"] = "נכדנית שלשה"; // sister's son's daughter's daughter
$pgv_lang["bosa_sisters_offspring_12"] = "נכדן שלש";       // sister's daughter's son's son 
$pgv_lang["bosa_sisters_offspring_13"] = "נכדנית שלשה"; // sister's daughter's son's daughter
$pgv_lang["bosa_sisters_offspring_14"] = "נכדן שלש";       // sister's daughter's daughter's son
$pgv_lang["bosa_sisters_offspring_15"] = "נכדנית שלשה"; // sister's daughter's daughter's daughter
// 4th generation
$pgv_lang["bosa_sisters_offspring_16"] = "נכדן רבע ";       // sister's son's son's son's son 
$pgv_lang["bosa_sisters_offspring_17"] = "נכדנית רבעה "; // sister's son's son's son's daughter
$pgv_lang["bosa_sisters_offspring_18"] = "נכדן רבע ";       // sister's son's son's daughter's son
$pgv_lang["bosa_sisters_offspring_19"] = "נכדנית רבעה "; // sister's son's son's daughter's daughter
$pgv_lang["bosa_sisters_offspring_20"] = "נכדן רבע ";       // sister's son's daughter's son's son 
$pgv_lang["bosa_sisters_offspring_21"] = "נכדנית רבעה "; // sister's son's daughter's son's daughter
$pgv_lang["bosa_sisters_offspring_22"] = "נכדן רבע ";       // sister's son's daughter's daughter's son
$pgv_lang["bosa_sisters_offspring_23"] = "נכדנית רבעה "; // sister's son's daughter's daughter's daughter
$pgv_lang["bosa_sisters_offspring_24"] = "נכדן רבע ";       // sister's daughter's son's son's son 
$pgv_lang["bosa_sisters_offspring_25"] = "נכדנית רבעה "; // sister's daughter's son's son's daughter
$pgv_lang["bosa_sisters_offspring_26"] = "נכדן רבע ";       // sister's daughter's son's daughter's son
$pgv_lang["bosa_sisters_offspring_27"] = "נכדנית רבעה "; // sister's daughter's son's daughter's daughter
$pgv_lang["bosa_sisters_offspring_28"] = "נכדן רבע ";       // sister's daughter's daughter's son's son 
$pgv_lang["bosa_sisters_offspring_29"] = "נכדנית רבעה "; // sister's daughter's daughter's son's daughter
$pgv_lang["bosa_sisters_offspring_30"] = "נכדן רבע ";       // sister's daughter's daughter's daughter's son
$pgv_lang["bosa_sisters_offspring_31"] = "נכדנית רבעה "; // sister's daughter's daughter's daughter's daughter
// for the general case of offspring of the nth generation use the text below
// in this text %1$d is replaced with the number of generations
//              %2$d is replaced with the number of generations - 1
//              %3$d is replaced with the number of generations - 2
$pgv_lang["n_x_sisters_son"]	  = 'נכדנית מדרגה %1$d';
$pgv_lang["n_x_sisters_daughter"] = 'נכדנית מדרגה %1$d';


// the bosa name is used for offspring - the names below can be extended to any number
// of generations just by adding more translations.
// 1st generation
$pgv_lang["bosa_2"] 				= $pgv_lang["son"];                   // son
$pgv_lang["bosa_3"] 				= $pgv_lang["daughter"];              // daughter
// 2nd generation
$pgv_lang["bosa_4"] 				= $pgv_lang["grandson"];              // son's son 
$pgv_lang["bosa_5"] 				= $pgv_lang["granddaughter"];         // son's daughter
$pgv_lang["bosa_6"] 				= $pgv_lang["grandson"];              // daughter's son
$pgv_lang["bosa_7"] 				= $pgv_lang["granddaughter"];         // daughter's daughter
// 3rd generation
$pgv_lang["bosa_8"] 				= "שלש";     // son's son's son   
$pgv_lang["bosa_9"] 				= "שלשה";   // son's son's daughter
$pgv_lang["bosa_10"] 				= "שלש";		// son's daughters son
$pgv_lang["bosa_11"] 				= "שלשה";   // son's daughters daughter
$pgv_lang["bosa_12"] 				= "שלש";     // daughter's son's son 
$pgv_lang["bosa_13"] 				= "שלשה";   // daughter's son's daughter
$pgv_lang["bosa_14"] 				= "שלש";		// daughter's daughters son
$pgv_lang["bosa_15"] 				= "שלשה";   // daughter's daughters daughter
// 4th generation
$pgv_lang["bosa_16"] 				= "רבע";     // son's son's son's son   
$pgv_lang["bosa_17"] 				= "רבעה";   // son's son's son's daughter
$pgv_lang["bosa_18"] 				= "רבע";		// son's son's daughters son
$pgv_lang["bosa_19"] 				= "רבעה";   // son's son's daughters daughter
$pgv_lang["bosa_20"] 				= "רבע";     // son's daughter's son's son 
$pgv_lang["bosa_21"] 				= "רבעה";   // son's daughter's son's daughter
$pgv_lang["bosa_22"] 				= "רבע";		// son's daughter's daughters son
$pgv_lang["bosa_23"] 				= "רבעה";   // son's daughter's daughters daughter
$pgv_lang["bosa_24"] 				= "רבע";     // daughter's son's son's son   
$pgv_lang["bosa_25"] 				= "רבעה";   // daughter's son's son's daughter
$pgv_lang["bosa_26"] 				= "רבע";		// daughter's son's daughters son
$pgv_lang["bosa_27"] 				= "רבעה";   // daughter's son's daughters daughter
$pgv_lang["bosa_28"] 				= "רבע";     // daughter's daughter's son's son 
$pgv_lang["bosa_29"] 				= "רבעה";   // daughter's daughter's son's daughter
$pgv_lang["bosa_30"] 				= "רבע";		// daughter's daughter's daughters son
$pgv_lang["bosa_31"] 				= "רבעה";   // daughter's daughter's daughters daughter
// for the general case of offspring of the nth generation use the text below
// in this text %1$d is replaced with the number of generations
//              %2$d is replaced with the number of generations - 1
//              %3$d is replaced with the number of generations - 2
$pgv_lang["n_x_grandson_from_son"]	  = 'נכד מדרגה %2$d';
$pgv_lang["n_x_granddaughter_from_son"] = 'נכדה מדרגה %2$d';
$pgv_lang["n_x_grandson_from_daughter"]	  = 'נכד מדרגה %2$d';
$pgv_lang["n_x_granddaughter_from_daughter"] = 'נכדה מדרגה %2$d';

// the sosa_uncle name is used for uncles - the names below can be extended to any number
// of generations just by adding more translations.
// to allow fo language variations we specify different relationships for paternal and maternal
// aunts and uncles
// 1st generation
$pgv_lang["sosa_uncle_2"] 				= $pgv_lang["uncle"];            // fathers brother
$pgv_lang["sosa_uncle_3"] 				= $pgv_lang["uncle"];            // mothers brother
// 2nd generation
$pgv_lang["sosa_uncle_4"] 				= "דוד סב";      // fathers's fathers brother 
$pgv_lang["sosa_uncle_5"] 				= "דוד סב";      // fathers mothers brother
$pgv_lang["sosa_uncle_6"] 				= "דוד סב";      // mothers fathers brother
$pgv_lang["sosa_uncle_7"] 				= "דוד סב";      // mothers mothers brother
// 3rd generation
$pgv_lang["sosa_uncle_8"] 				= "דוד שלש";      // father's fathers's fathers brother 
$pgv_lang["sosa_uncle_9"] 				= "דוד שלש";      // father's fathers mothers brother
$pgv_lang["sosa_uncle_10"] 				= "דוד שלש";      // father's mothers fathers brother
$pgv_lang["sosa_uncle_11"] 				= "דוד שלש";      // father's mothers mothers brother
$pgv_lang["sosa_uncle_12"] 				= "דוד שלש";      // mother's fathers's fathers brother 
$pgv_lang["sosa_uncle_13"] 				= "דוד שלש";      // mother's fathers mothers brother
$pgv_lang["sosa_uncle_14"] 				= "דוד שלש";      // mother's mothers fathers brother
$pgv_lang["sosa_uncle_15"] 				= "דוד שלש";      // mother's mothers mothers brother
// 4th generation
$pgv_lang["sosa_uncle_16"] 				= "דוד רבע";      // father's father's fathers's fathers brother 
$pgv_lang["sosa_uncle_17"] 				= "דוד רבע";      // father's father's fathers mothers brother
$pgv_lang["sosa_uncle_18"] 				= "דוד רבע";      // father's father's mothers fathers brother
$pgv_lang["sosa_uncle_19"] 				= "דוד רבע";      // father's father's mothers mothers brother
$pgv_lang["sosa_uncle_20"] 				= "דוד רבע";      // father's mother's fathers's fathers brother 
$pgv_lang["sosa_uncle_21"] 				= "דוד רבע";      // father's mother's fathers mothers brother
$pgv_lang["sosa_uncle_22"] 				= "דוד רבע";      // father's mother's mothers fathers brother
$pgv_lang["sosa_uncle_23"] 				= "דוד רבע";      // father's mother's mothers mothers brother
$pgv_lang["sosa_uncle_24"] 				= "דוד רבע";      // mother's father's fathers's fathers brother 
$pgv_lang["sosa_uncle_25"] 				= "דוד רבע";      // mother's father's fathers mothers brother
$pgv_lang["sosa_uncle_26"] 				= "דוד רבע";      // mother's father's mothers fathers brother
$pgv_lang["sosa_uncle_27"] 				= "דוד רבע";      // mother's father's mothers mothers brother
$pgv_lang["sosa_uncle_28"] 				= "דוד רבע";      // mother's mother's fathers's fathers brother 
$pgv_lang["sosa_uncle_29"] 				= "דוד רבע";      // mother's mother's fathers mothers brother
$pgv_lang["sosa_uncle_30"] 				= "דוד רבע";      // mother's mother's mothers fathers brother
$pgv_lang["sosa_uncle_31"] 				= "דוד רבע";      // mother's mother's mothers mothers brother
// for the general case of uncles of the nth degree use the text below
// in this text %1$d is replaced with the number of generations
//              %2$d is replaced with the number of generations - 1
//              %3$d is replaced with the number of generations - 2
$pgv_lang["n_x_paternal_uncle"]		= 'דוד מדרגה %1$d';
$pgv_lang["n_x_maternal_uncle"]	    = 'דוד מדרגה %1$d';

// the sosa_aunt name is used for aunt - the names below can be extended to any number
// of generations just by adding more translations.
// to allow fo language variations we specify different relationships for paternal and maternal
// aunts and aunts
// 1st generation
$pgv_lang["sosa_aunt_2"] 				= $pgv_lang["aunt"];            // fathers sister
$pgv_lang["sosa_aunt_3"] 				= $pgv_lang["aunt"];            // mothers sister
// 2nd generation
$pgv_lang["sosa_aunt_4"] 				= "דודה סבה";      // fathers's fathers sister 
$pgv_lang["sosa_aunt_5"] 				= "דודה סבה";      // fathers mothers sister
$pgv_lang["sosa_aunt_6"] 				= "דודה סבה";      // mothers fathers sister
$pgv_lang["sosa_aunt_7"] 				= "דודה סבה";      // mothers mothers sister
// 3rd generation
$pgv_lang["sosa_aunt_8"] 				= "דורה שלשה";      // father's fathers's fathers sister 
$pgv_lang["sosa_aunt_9"] 				= "דורה שלשה";      // father's fathers mothers sister
$pgv_lang["sosa_aunt_10"] 				= "דורה שלשה";      // father's mothers fathers sister
$pgv_lang["sosa_aunt_11"] 				= "דורה שלשה";      // father's mothers mothers sister
$pgv_lang["sosa_aunt_12"] 				= "דורה שלשה";      // mother's fathers's fathers sister 
$pgv_lang["sosa_aunt_13"] 				= "דורה שלשה";      // mother's fathers mothers sister
$pgv_lang["sosa_aunt_14"] 				= "דורה שלשה";      // mother's mothers fathers sister
$pgv_lang["sosa_aunt_15"] 				= "דורה שלשה";      // mother's mothers mothers sister
// 4th generation
$pgv_lang["sosa_aunt_16"] 				= "דודה רבעה";      // father's father's fathers's fathers sister 
$pgv_lang["sosa_aunt_17"] 				= "דודה רבעה";      // father's father's fathers mothers sister
$pgv_lang["sosa_aunt_18"] 				= "דודה רבעה";      // father's father's mothers fathers sister
$pgv_lang["sosa_aunt_19"] 				= "דודה רבעה";      // father's father's mothers mothers sister
$pgv_lang["sosa_aunt_20"] 				= "דודה רבעה";      // father's mother's fathers's fathers sister 
$pgv_lang["sosa_aunt_21"] 				= "דודה רבעה";      // father's mother's fathers mothers sister
$pgv_lang["sosa_aunt_22"] 				= "דודה רבעה";      // father's mother's mothers fathers sister
$pgv_lang["sosa_aunt_23"] 				= "דודה רבעה";      // father's mother's mothers mothers sister
$pgv_lang["sosa_aunt_24"] 				= "דודה רבעה";      // mother's father's fathers's fathers sister 
$pgv_lang["sosa_aunt_25"] 				= "דודה רבעה";      // mother's father's fathers mothers sister
$pgv_lang["sosa_aunt_26"] 				= "דודה רבעה";      // mother's father's mothers fathers sister
$pgv_lang["sosa_aunt_27"] 				= "דודה רבעה";      // mother's father's mothers mothers sister
$pgv_lang["sosa_aunt_28"] 				= "דודה רבעה";      // mother's mother's fathers's fathers sister 
$pgv_lang["sosa_aunt_29"] 				= "דודה רבעה";      // mother's mother's fathers mothers sister
$pgv_lang["sosa_aunt_30"] 				= "דודה רבעה";      // mother's mother's mothers fathers sister
$pgv_lang["sosa_aunt_31"] 				= "דודה רבעה";      // mother's mother's mothers mothers sister
// for the general case of aunts of the nth degree use the text below
// in this text %1$d is replaced with the number of generations
//              %2$d is replaced with the number of generations - 1
//              %3$d is replaced with the number of generations - 2
$pgv_lang["n_x_paternal_aunt"]		= 'דודה מדרגה %1$d';
$pgv_lang["n_x_maternal_aunt"]	    = 'דודה מדרגה %1$d';


// if a specific cousin relationship cannot be represented in a language translate as "";
$pgv_lang["male_cousin_1"]              	= "דודן";
$pgv_lang["male_cousin_2"]             	= "דודן משנה";
$pgv_lang["male_cousin_3"]              	= "דודן שילש";
$pgv_lang["male_cousin_4"]              	= "דודן מדרגה 4";
$pgv_lang["male_cousin_5"]              	= "דודן מדרגה 5";
$pgv_lang["male_cousin_6"]              	= "דודן מדרגה 6";
$pgv_lang["male_cousin_7"]              	= "דודן מדרגה 7";
$pgv_lang["male_cousin_8"]              	= "דודן מדרגה 8";
$pgv_lang["male_cousin_9"]              	= "דודן מדרגה 9";
$pgv_lang["male_cousin_10"]             	= "דודן מדרגה 10";
$pgv_lang["male_cousin_11"]             	= "דודן מדרגה 11";
$pgv_lang["male_cousin_12"]             	= "דודן מדרגה 12";
$pgv_lang["male_cousin_13"]             	= "דודן מדרגה 13";
$pgv_lang["male_cousin_14"]             	= "דודן מדרגה 14";
$pgv_lang["male_cousin_15"]             	= "דודן מדרגה 15";
$pgv_lang["male_cousin_16"]             	= "דודן מדרגה 16";
$pgv_lang["male_cousin_17"]             	= "דודן מדרגה 17";
$pgv_lang["male_cousin_18"]             	= "דודן מדרגה 18";
$pgv_lang["male_cousin_19"]             	= "דודן מדרגה 19";
$pgv_lang["male_cousin_20"]             	= "דודן מדרגה 20";
$pgv_lang["male_cousin_n"]             	    = "דודן מדרגה %d";
$pgv_lang["female_cousin_1"]            	= "דודנית";
$pgv_lang["female_cousin_2"]            	= "דודנית משנה";
$pgv_lang["female_cousin_3"]            	= "דודנית שילשה";
$pgv_lang["female_cousin_4"]            	= "דודנית מדרגה 4";
$pgv_lang["female_cousin_5"]            	= "דודנית מדרגה 5";
$pgv_lang["female_cousin_6"]            	= "דודנית מדרגה 6";
$pgv_lang["female_cousin_7"]            	= "דודנית מדרגה 7";
$pgv_lang["female_cousin_8"]            	= "דודנית מדרגה 8";
$pgv_lang["female_cousin_9"]            	= "דודנית מדרגה 9";
$pgv_lang["female_cousin_10"]           	= "דודנית מדרגה 10";
$pgv_lang["female_cousin_11"]           	= "דודנית מדרגה 11";
$pgv_lang["female_cousin_12"]           	= "דודנית מדרגה 12";
$pgv_lang["female_cousin_13"]           	= "דודנית מדרגה 13";
$pgv_lang["female_cousin_14"]           	= "דודנית מדרגה 14";
$pgv_lang["female_cousin_15"]           	= "דודנית מדרגה 15";
$pgv_lang["female_cousin_16"]           	= "דודנית מדרגה 16";
$pgv_lang["female_cousin_17"]           	= "דודנית מדרגה 17";
$pgv_lang["female_cousin_18"]           	= "דודנית מדרגה 18";
$pgv_lang["female_cousin_19"]           	= "דודנית מדרגה 19";
$pgv_lang["female_cousin_20"]           	= "דודנית מדרגה 20";
$pgv_lang["female_cousin_n"]           	    = "דודנית מדרגה %d";



// 1st generation
//* @@ ??
$pgv_lang["bosa_2"] 				= "Son";
$pgv_lang["bosa_3"] 				= "Daughter";
// 2nd generation
$pgv_lang["bosa_4"] 				= "Grandson";
$pgv_lang["bosa_5"] 				= "Granddaughter";
$pgv_lang["bosa_6"] 				= "Grandson";
$pgv_lang["bosa_7"] 				= "Granddaughter";
// 3rd generation
$pgv_lang["bosa_8"] 				= "Great-grandson";
$pgv_lang["bosa_9"] 				= "Great-granddaughter";
$pgv_lang["bosa_10"]				= "Great-grandson";
$pgv_lang["bosa_11"]				= "Great-granddaughter";
$pgv_lang["bosa_12"]				= "Great-grandson";
$pgv_lang["bosa_13"]				= "Great-granddaughter";
$pgv_lang["bosa_14"]				= "Great-grandson";
$pgv_lang["bosa_15"]				= "Great-granddaughter";
// 4th generation
$pgv_lang["bosa_16"]				= "Great-great-grandson";
$pgv_lang["bosa_17"]				= "Great-great-granddaughter";
$pgv_lang["bosa_18"]				= "Great-great-grandson";
$pgv_lang["bosa_19"]				= "Great-great-granddaughter";
$pgv_lang["bosa_20"]				= "Great-great-grandson";
$pgv_lang["bosa_21"]				= "Great-great-granddaughter";
$pgv_lang["bosa_22"]				= "Great-great-grandson";
$pgv_lang["bosa_23"]				= "Great-great-granddaughter";
$pgv_lang["bosa_24"]				= "Great-great-grandson";
$pgv_lang["bosa_25"]				= "Great-great-granddaughter";
$pgv_lang["bosa_26"]				= "Great-great-grandson";
$pgv_lang["bosa_27"]				= "Great-great-granddaughter";
$pgv_lang["bosa_28"]				= "Great-great-grandson";
$pgv_lang["bosa_29"]				= "Great-great-granddaughter";
$pgv_lang["bosa_30"]				= "Great-great-grandson";
$pgv_lang["bosa_31"]				= "Great-great-granddaughter";
// 5th generation
$pgv_lang["bosa_32"]			   = "Great-great-great-grandson";
$pgv_lang["bosa_33"]			   = "Great-great-great-granddaughter";
$pgv_lang["bosa_34"]			   = "Great-great-great-grandson";
$pgv_lang["bosa_35"]			   = "Great-great-great-granddaughter";
$pgv_lang["bosa_36"]			   = "Great-great-great-grandson";
$pgv_lang["bosa_37"]			   = "Great-great-great-granddaughter";
$pgv_lang["bosa_38"]			   = "Great-great-great-grandson";
$pgv_lang["bosa_39"]			   = "Great-great-great-granddaughter";
$pgv_lang["bosa_40"]			   = "Great-great-great-grandson";
$pgv_lang["bosa_41"]			   = "Great-great-great-granddaughter";
$pgv_lang["bosa_42"]			   = "Great-great-great-grandson";
$pgv_lang["bosa_43"]			   = "Great-great-great-granddaughter";
$pgv_lang["bosa_44"]			   = "Great-great-great-grandson";
$pgv_lang["bosa_45"]			   = "Great-great-great-granddaughter";
$pgv_lang["bosa_46"]			   = "Great-great-great-grandson";
$pgv_lang["bosa_47"]			   = "Great-great-great-granddaughter";
$pgv_lang["bosa_48"]			   = "Great-great-great-grandson";
$pgv_lang["bosa_49"]			   = "Great-great-great-granddaughter";
$pgv_lang["bosa_50"]			   = "Great-great-great-grandson";
$pgv_lang["bosa_51"]			   = "Great-great-great-granddaughter";
$pgv_lang["bosa_52"]			   = "Great-great-great-grandson";
$pgv_lang["bosa_53"]			   = "Great-great-great-granddaughter";
$pgv_lang["bosa_54"]			   = "Great-great-great-grandson";
$pgv_lang["bosa_55"]			   = "Great-great-great-granddaughter";
$pgv_lang["bosa_56"]			   = "Great-great-great-grandson";
$pgv_lang["bosa_57"]			   = "Great-great-great-granddaughter";
$pgv_lang["bosa_58"]			   = "Great-great-great-grandson";
$pgv_lang["bosa_59"]			   = "Great-great-great-granddaughter";
$pgv_lang["bosa_60"]			   = "Great-great-great-grandson";
$pgv_lang["bosa_61"]			   = "Great-great-great-granddaughter";
$pgv_lang["bosa_62"]			   = "Great-great-great-grandson";
$pgv_lang["bosa_63"]			   = "Great-great-great-granddaughter";
// @@

//-- GEDCOM edit utility
$pgv_lang["check_delete"]		= "?זו GEDCOM האם הנך בטוח שברצונך למחוק עובדת";
$pgv_lang["access_denied"]		= "<b>גישה נאסרה</b><br />אין לך גישה למשאב זה.";
$pgv_lang["gedrec_deleted"]		= "רשומת ה-GEDCOM נמחקה בהצלחה.";
$pgv_lang["gedcom_deleted"]		= "[#GED#] נימחק בהצלחה.";
$pgv_lang["changes_exist"]		= "ה-GEDCOM הזה שונה.";
$pgv_lang["accept_changes"]		= "קבל/דחה את השינויים";
$pgv_lang["show_changes"]		= "הרשומה עודכנה. הקש כדי לראות את השינויים.";
$pgv_lang["hide_changes"]		= "לחץ כאן כדי להסתיר את השינויים.";
$pgv_lang["review_changes"]		= "סקור שינויי GEDCOM";
$pgv_lang["undo_successful"]		= "הביטול הצליח";
$pgv_lang["undo"]			= "בטל";
$pgv_lang["view_change_diff"]		= "התבונן בשינויים ";
$pgv_lang["changes_occurred"]	= "השינויים הבאים בוצעו ברשומה זו:";
$pgv_lang["find_place"]		= "מצא מקום";
$pgv_lang["refresh"]			= "רענן";
$pgv_lang["close_window"]		= "סגור חלון";
$pgv_lang["close_window_without_refresh"] = "סגור חלון ללא טעינה מחדש";
$pgv_lang["place_contains"]		= "מקום מכיל:";
$pgv_lang["accept_gedcom"]                	= "החלט עבור כל שינוי אם לאשר או לדחות אותו.<br /><br />ניתן לאשר את כל השינויים בבת אחת ע\"י הקשה על <b>\"אשר את כל השינויים\"</b> בתיבה למטה.<br />כדי לקבל מידע נוסף על השינוי,<br />לחץ על <b>\"התבונן בשינויים\"</b> ותראה את המצב הקודם והמצב החדש <br />או לחץ על <b>\"הצג מידע מ-GEDCOM\"</b> כדי לראות את המצב החדש במבנה ה-GEDCOM.";
$pgv_lang["ged_import"] 		= "ייבא";
$pgv_lang["now_import"]		= "עתה יש לייבא את רשומות ה-GEDCOM לתוך PhpGedView על ידי הקשה על הקישור ייבא למטה.";
$pgv_lang["add_fact"]		= "הוסף עובדה חדשה";
$pgv_lang["add"]			= "הוסף";
$pgv_lang["custom_event"]		= "מאורע מותאם";
$pgv_lang["update_successful"]	= "העדכון הצליח";
$pgv_lang["add_child"]		= "הוסף ילד/ה";
$pgv_lang["add_child_to_family"]	= "הוסף ילד/ה למשפחה";
$pgv_lang["add_sibling"] 		= "הוסף אח או אחות";
$pgv_lang["add_son_daughter"] 	= "הוסף בן או בת";
$pgv_lang["must_provide"]		= "יש לספק ";
$pgv_lang["delete_person"]		= "מחק המידע על אדם זה";
$pgv_lang["confirm_delete_person"]	= "?GEDCOM-האם באמת להסיר את האדם מקובץ ה";
$pgv_lang["find_media"]		= "מצא מדיה";
$pgv_lang["set_link"]		= "הצב קישור";
$pgv_lang["add_source_lbl"] 		= "הוסף ציטוט של מקור";
$pgv_lang["add_source"]		= "הוסף ציטוט של מקור חדש";
$pgv_lang["add_note_lbl"] 		= "הוסף הערה";
$pgv_lang["add_note"]		= "הוסף הערה חדשה";
$pgv_lang["add_media_lbl"] 		= "הוסף מדיה";
$pgv_lang["add_media"]		= "הוסף מדיה חדשה";
$pgv_lang["delete_source"]		= "מחק המקור";
$pgv_lang["confirm_delete_source"]	= "?GEDCOM-האם באמת למחוק את המקור מקובץ ה";
$pgv_lang["add_husb"]		= "הוסף בעל";
$pgv_lang["add_husb_to_family"]	= "הוסף בעל למשפחה";
$pgv_lang["add_wife"]		= "הוסף אישה";
$pgv_lang["add_wife_to_family"]	= "הוסף אישה למשפחה";
$pgv_lang["find_family"]		= "מצא משפחה";
$pgv_lang["find_fam_list"]		= "מצא רשימת משפחה";
$pgv_lang["add_new_wife"]		= "הוסף אישה חדשה";
$pgv_lang["add_new_husb"]		= "הוסף בעל חדש";
$pgv_lang["edit_name"]		= "ערוך שם";
$pgv_lang["delete_name"]		= "מחק שם";
$pgv_lang["no_temple"]		= "אין הסמכה חיה של המקדש";
$pgv_lang["replace"]		= "החלפת רשומה";
$pgv_lang["append"]		= "הוספת רשומה בסוף";
$pgv_lang["add_father"]		= "הוסף אבא חדש";
$pgv_lang["add_mother"]		= "הוסף אמא חדשה";
$pgv_lang["add_obje"]		= "הוסף ישות מולטימדיה חדשה";
$pgv_lang["no_changes"]		= "אין כרגע שינויים לבדיקה.";
$pgv_lang["accept"]			= "אשר";
$pgv_lang["accept_all"]		= "אשר את כל השינויים";
$pgv_lang["accept_successful"]	= "השינויים עדכנו בהצלחה את מאגר הנתונים";
$pgv_lang["edit_raw"]		= "ערוך את רשומת ה-GEDCOM הלא מעובדת";
$pgv_lang["select_date"]		= "בחר תאריך";
$pgv_lang["create_source"]		= "צור מקור חדש";
$pgv_lang["new_source_created"]	= "מקור חדש נוצר בהצלחה.";
$pgv_lang["paste_id_into_field"]	= "הדבק את קוד הזיהוי הבא לשדות העריכה כדי שניתן יהיה להתייחס לרשומה החדשה שנוצרה";

$pgv_lang["add_name"]		= "הוסף שם";
$pgv_lang["privacy_not_granted"]	= "אין לך גישה ל-";
$pgv_lang["user_cannot_edit"]		= "המשתמש לא יכול לערוך את הקובץ ה-GEDCOM הזה.";
$pgv_lang["gedcom_editing_disabled"]	= "אפשרות העריכה של ה-GEDCOM נפסלה ע\"י מנהלן המערכת.";
$pgv_lang["privacy_prevented_editing"]	= "הגדרות הפרטיות מונעות ממך לערוך את הרשומה.";
$pgv_lang["add_asso"]		= "הוסף שותף חדש";
$pgv_lang["edit_sex"]		= "ערוך מין";
$pgv_lang["ged_noshow"]		= "הדף הזה נחסם ע\"י מנהלן האתר.";

//-- calendar.php messages
$pgv_lang["bdm"]			= "לידות, פטירות חתונות";
$pgv_lang["on_this_day"]		= "ביום הזה ...";
$pgv_lang["in_this_month"]		= "בחודש הזה ...";
$pgv_lang["in_this_year"]		= "בשנה הזו ...";
$pgv_lang["year_anniversary"]		= "יום השנה #year_var#";
$pgv_lang["today"]			= "היום";
$pgv_lang["day"]			= "יום:";
$pgv_lang["month"]			= "חודש:";
$pgv_lang["showcal"]		= "הראה:";
$pgv_lang["anniversary_calendar"]	= "לוח יום השנה";
$pgv_lang["sunday"]		= "ראשון";
$pgv_lang["monday"]		= "שני";
$pgv_lang["tuesday"]		= "שלישי";
$pgv_lang["wednesday"]		= "רביעי";
$pgv_lang["thursday"]		= "חמישי";
$pgv_lang["friday"]			= "ששי";
$pgv_lang["saturday"]		= "שבת";
$pgv_lang["viewday"]		= "הצג יום";
$pgv_lang["viewmonth"]		= "הצג חודש";
$pgv_lang["viewyear"]		= "הצג שנה";
$pgv_lang["all_people"]		= "כל האנשים";
$pgv_lang["living_only"]		= "אנשים חיים";
$pgv_lang["recent_events"]		= "אירועים ב-100 השנים האחרונות";
$pgv_lang["day_not_set"]		= "היום לא מוגדר";
$pgv_lang["year_error"]		= ".סליחה, תאריכים לפני 1970 אינם נתמכים";

//-- user self registration module
$pgv_lang["lost_password"]		= "שכחת את סיסמתך?";
$pgv_lang["no_account_yet"]		= "אין קוד משתמש?";
$pgv_lang["requestpassword"]		= "בקש סיסמא חדשה";
$pgv_lang["requestaccount"]		= "בקש קוד משתמש חדש";
$pgv_lang["emailadress"]		= "הדואר האלקטרוני";
$pgv_lang["mandatory"] 		= "שדות המסומנים עם * הם שדות חובה.";
$pgv_lang["mail01_line01"]		= "שלום #user_fullname# ...";
$pgv_lang["mail01_line02"]		= "קיבלנו בקשה ב-( #SERVER_NAME# ) ליצור קוד משתמש עם הכתובת האלקטרונית שלך ( #user_email# ).";
$pgv_lang["mail01_line03"]		= "הנתונים על הבקשה מוצגים מתחת לקישור למטה.";
$pgv_lang["mail01_line04"]		= "לחץ על הקישורית הבאה ומלא את הנתונים הדרושים כדי לאשר את קוד המשתמש וכתובת הדואר האלאקטרוני שלך.";
$pgv_lang["mail01_line05"]		= "מחק הודעה זו אם לא ביקשת קוד משתמש.";
$pgv_lang["mail01_line06"]		= "לא תקבל דואר נוסף מאתר זה, מכיוון שקוד המשתמש ימחק אוטומטית לאחר שבעה ימים.";
$pgv_lang["mail01_subject"]		= "הרשמתך ב-#SERVER_NAME#";
$pgv_lang["mail02_line01"]		= "שלום המנהלן ...";
$pgv_lang["mail02_line02"]		= "משתמש פוטנציאלי נרשם ב-#SERVER_NAME#";
$pgv_lang["mail02_line03"]		= "המשתמש קיבל דואר אלקטרוני עם הנתונים הדרושים לאמות המשתמש המבוקש.";
$pgv_lang["mail02_line04"]		= "מיד אחרי שהמשתמש יבצע את אישורו תקבל הודעה בדואר שלך כדי שתאפשר למשתמש להתחבר לאתר שלך.";
$pgv_lang["mail02_line04a"]		= "תקבל הודעה בדואר אלקטרוני אחרי שהמשתמש הפוטנציאלי הזה יאשר את עצמו. אחרי האישור, המשתמש יוכל להתחבר ללא שום פעולה נוספת שלך.";
$pgv_lang["mail02_subject"]		= "רישום חדש ב-#SERVER_NAME#";
$pgv_lang["hashcode"]		= "קוד האמות:";
$pgv_lang["thankyou"]		= "שלום #user_fullname# ...<br />תודה שנרשמת.";
$pgv_lang["pls_note06"]		= "נשלח לך דואר של אישור לכתובת האלקטרונית ( #user_email# ). עליך לאשר את בקשת קוד המשתמש שלך לפי ההוראות המופיעות בדואר של האישור. אם לא תאשר את בקשת קוד המשתמש תוך שבעה ימים,  הבקשה לקוד משתמש תדחה באופן אוטומטי. עליך להירשם שנית.<br /><br />אחרי שתנהג לפי ההוראות המופיעות בדואר של האישור, על המנהלן עדיין לאשר את המשתמש שלך לפני שיהיה ניתן להשתמש בקוד המשתמש שלך.<br /><br />כדי להתחבר לאתר זה, עליך לדעת את קוד המשתמש והסיסמא שלך.<br /><br />";
$pgv_lang["pls_note06a"]		= "נשלח לך דואר של אישור לכתובת האלקטרונית ( #user_email# ). עליך לאשר את בקשת קוד המשתמש שלך לפי ההוראות המופיעות בדואר של האישור. אם לא תאשר את בקשת קוד המשתמש תוך שבעה ימים,  הבקשה לקוד משתמש תדחה באופן אוטומטי. עליך להירשם שנית.<br /><br />אחרי שתנהג לפי ההוראות המופיעות בדואר של האישור תוכל להתחבר לאתר. כדי להתחבר לאתר זה, עליך לדעת את קוד המשתמש והסיסמא שלך.<br /><br />";
$pgv_lang["registernew"]		= "אישור משתמש חדש";
$pgv_lang["user_verify"]		= "אמות משתמש";
$pgv_lang["send"]			= "שלח";
$pgv_lang["pls_note07"]		= "~#pgv_lang[user_verify]#~<br /><br />כדי לאשר את הבקשה שלך לקוד משתמש, הכנס את קוד המשתמש, הסיסמא וקוד האישור שקיבלת בדואר האלקטרוני.";
$pgv_lang["pls_note08"]		= "הנתונים על המשתמש #user_name# נבדקו.";
$pgv_lang["mail03_line01"]		= "שלום המנהלן ...";
$pgv_lang["mail03_line02"]		= "משתמש #newuser[username]# ( #newuser[fullname]# ) אישר נתוני הרישום שלו.";
$pgv_lang["mail03_line03"]		= "השתמש בקישור מתחת כדי להתחבר לאתר שלך, לעריכת נתוני המשתמש של המבקש, ובכך לאפשר למבקש להתחבר לאתר שלך.";
$pgv_lang["mail03_line03a"]		= "לא נדרשת פעולה מצידך; המשתמש יכול עכשיו להתחבר.";
$pgv_lang["mail03_subject"]		= "אמות חדש ב-#SERVER_NAME#";
$pgv_lang["pls_note09"] 		= "אישרת את בקשתך לקוד משתמש רשום.";
$pgv_lang["pls_note10"]		= "הודעה נשלחה למנהלן. תוכל להתחבר עם קוד המשתמש והסיסמא שלך אחרי שהמנהלן ייתן את אישורו.";
$pgv_lang["pls_note10a"]		= "תוכל עכשיו להתחבר עם קוד המשתמש והסיסמה שלך.";
$pgv_lang["data_incorrect"]		= "הנתונים אינם נכונים, נסה שנית";
$pgv_lang["user_not_found"]		= "לא ניתן לאמת את המידע שהכנסת. נסה שנית או התקשר עם מנהלן האתר למידע נוסף.";

$pgv_lang["lost_pw_reset"]		= "בקשת סיסמא אבודה";
$pgv_lang["pls_note11"]		= "כדי שנוכל לשנות את סיסמתך עליך לספק את קוד המשתמש שלך .<br /><br />נשלח לך בדואר אלקטרוני כתובת אינטרנט מיוחדת וקוד אישור עבור קוד המשתמש שלך. בביקור בכתובת האינטרנט תוכל לשנות את סיסמתך ולהתחבר לאתר. מסיבות בטחון אין למסור את קוד האישור הזה לאף אחד.<br /><br />במידה ותזדקק לסיוע ממנהלן האתר, אנא השתמש בקישור בתחתית הדף.";
$pgv_lang["enter_email"]		= ".יש להכניס כתובת לדואר אלקטרוני";
$pgv_lang["mail04_line01"]		= "שלום #user_fullname# ...";
$pgv_lang["mail04_line02"]		= "קיבלנו בקשה לסיסמא חדשה עבור קוד המשתמש שלך.";
$pgv_lang["mail04_line03"]		= "המלצה:";
$pgv_lang["mail04_line04"]		= "הקש על הקישור מתחת או הדבק אותו לדפדפן שלך, התחבר עם הסיסמא החדשה ושנה אותה מיידית כדי לשמור על שלמות הנתונים.";
$pgv_lang["mail04_line05"]		= "אחרי שהתחברת, בחר בקישור '#pgv_lang[myuserdata]#' מתחת לתפריט '#pgv_lang[mygedview]#' ומלא את שדות הסיסמא כדי לשנות את הסיסמא שלך.";

$pgv_lang["mail04_subject"]		= "בקשת נתונים על #SERVER_NAME#";
$pgv_lang["pwreqinfo"]		= "שלום...<br /><br />דואר הכולל סיסמא חדשה נישלח לכתובת אלקטרונית (#user[email]#).<br /><br />בדוק את תיבת הדואר שלך מכיוון שהדואר יתקבל תוך מספר דקות.<br /><br />המלצה:<br />אחרי שתקבל את הדואר התחבר לאתר זה עם סיסמתך החדשה ושנה את הסיסמא כדי לשמור על שלמות הנתונים.";
$pgv_lang["editowndata"]		= "המשתמש שלי";
$pgv_lang["savedata"]		= "שמור על הנתונים ששונו";
$pgv_lang["datachanged"]		= "נתוני המשתמש שונו";
$pgv_lang["datachanged_name"]	= "יתכן שיש צורך להתחבר שנית למערכת עם קוד המשתמש החדש.";
$pgv_lang["myuserdata"]		= "המשתמש שלי";
$pgv_lang["verified"]			= "המשתמש אישר את רישומו";
$pgv_lang["verified_by_admin"]	= "המשתמש אושר ע\"י המנהלן";
$pgv_lang["user_theme"]		= "עיצוב האתר";
$pgv_lang["mgv"]			= "MyGedView";
$pgv_lang["mygedview"]		= "פורטל  MyGedView";
$pgv_lang["passwordlength"]		= "אורך הסיסמא לפחות 6 תווים.";
$pgv_lang["admin_approved"]		= "מנהלן האתר על #SERVER_NAME# אישר את המשתמש שלך. ";
$pgv_lang["you_may_login"]		= "הקישור מתחת מביא אותך לאתר ה-PhpGedView:";
$pgv_lang["welcome_text_auth_mode_1"] = "<center><b>ברוכים הבאים לאתר הזה של חקר שושלת היוחסין</b></center><br />גישה לאתר זה מותרת לכל המשתמשים בעלי קוד משתמש באתר.<br /><br />אם יש לך קוד משתמש, תוכל להתחבר למערכת באמצעות הדף הזה. אם אין לך קוד משתמש, תוכל לבקש קוד משתמש ע\"י לחיצה על הקישור המתאים מלמטה.<br /><br />מנהלן האתר יבדוק את נתוניך ויפעיל את קוד המשתמש שלך. תקבל דואר אלקטרוני אחרי שקוד המשתמש שלך יאושר.";
$pgv_lang["welcome_text_auth_mode_2"] = "<center><b>ברוכים הבאים לאתר הזה של חקר שושלת היוחסין</b></center><br />גישה לאתר זה מותרת רק למשתמשים <u>מורשים.</u><br /><br />אם יש לך קוד משתמש תוכל להתחבר למערכת באמצעות הדף הזה. אם אין לך קוד משתמש, תוכל לבקש קוד משתמש ע\"י לחיצה על הקישור מלמטה.<br /><br />מנהלן האתר יבדוק את נתוניך ויאשר או ידחה את בקשתך. תקבל דואר אלקטרוני אחרי שבקשתך תאושר.";
$pgv_lang["welcome_text_auth_mode_3"] = "<center><b>ברוכים הבאים לאתר הזה של חקר שושלת היוחסין</b></center><br />גישה לאתר זה מותרת <u>רק לבני משפחה</u>.<br />אם יש לך קוד משתמש תוכל להתחבר למערכת באמצעות הדף הזה. אם אין לך קוד משתמש, תוכל לבקש קוד משתמש ע\"י לחיצה על הקישור המתאים מלמטה.<br /><br />מנהלן האתר יבדוק את נתוניך ויאשר או ידחה את בקשתך. תקבל דואר אלקטרוני אחרי שבקשתך תאושר.";
$pgv_lang["welcome_text_cust_head"]	= "<center><b>ברוכים הבאים לאתר הזה של חקר שושלת היוחסין</b></center><br />גישה לאתר זה מותרת למשתמשים בעלי קוד משתמש וסיסמא.<br />";

//-- mygedview page
$pgv_lang["welcome"]		= "ברוך הבא";
$pgv_lang["upcoming_events"]	= "אירועים קרובים";
$pgv_lang["living_or_all"]		= "הצג רק אירועים של אנשים חיים?";
$pgv_lang["basic_or_all"]		= "הראה רק לידות, פטירות וחתונות?";
$pgv_lang["no_events_living"]		= "אין אירוע של אנשים חיים ב-#pgv_lang[global_num1]# הימים הבאים.";
$pgv_lang["no_events_living1"]	= "אין אירוע של אנשים חיים למחר.";
$pgv_lang["no_events_all"]		= "אין אירוע ב-#pgv_lang[global_num1]# הימים הבאים.";
$pgv_lang["no_events_all1"]		= "אין אירועים למחר.";
$pgv_lang["no_events_privacy"]	= "קיימים אירועים עבור #pgv_lang[global_num1]# הימים הבאים, אבל מגבלות פרטיות מונעות ממך לראות אותם.";
$pgv_lang["no_events_privacy1"]	= "קיימים אירועים עבור מחר, אבל מגבלות פרטיות מונעות ממך לראות אותם.";
$pgv_lang["more_events_privacy"]	= "<br />קיימים אירועים נוספים עבור #pgv_lang[global_num1]# הימים הבאים, אבל מגבלות פרטיות מונעות ממך לראות אותם.";
$pgv_lang["more_events_privacy1"]	= "<br />קיימים אירועים נוספים עבור מחר, אבל מגבלות פרטיות מונעות ממך לראות אותם.";
$pgv_lang["none_today_living"]	= "אין אירוע של אנשים חיים להיום.";
$pgv_lang["none_today_all"]		= "אין אירועים להיום.";
$pgv_lang["none_today_privacy"]	= "קיימים אירועים להיום, אבל הגבלות הפרטיות מונעות ממך לראותם.";
$pgv_lang["more_today_privacy"]	= "<br />אירועים נוספים קיימים עבור היום, אבל מגבלות פרטיות מונעות ממך לראות אותם.";
$pgv_lang["chat"]			= "שיחה";
$pgv_lang["users_logged_in"]		= "משתמשים מחוברים";
$pgv_lang["anon_user"]		= "1 משתמש אלמוני מחובר";
$pgv_lang["anon_users"]		= "#pgv_lang[global_num1]# משתמשים אלמוניים מחוברים";
$pgv_lang["login_user"]		= "1 משתמש מחובר";
$pgv_lang["login_users"]		= "#pgv_lang[global_num1]# משתמשים מחוברים";
$pgv_lang["no_login_users"]		= "אין משתמשים מחוברים ואין משתמשים אלמוניים";
$pgv_lang["message"]		= "שלח הודעה";
$pgv_lang["my_messages"]		= "הודעות שלי";
$pgv_lang["date_created"]		= "תאריך שליחה:";
$pgv_lang["message_from"]		= "כתובת דואר אלקטרוני:";
$pgv_lang["message_from_name"]	= "שמך:";
$pgv_lang["message_to"]		= "הודעה אל:";
$pgv_lang["message_subject"]	= "נושא:";
$pgv_lang["message_body"]		= "גוף:";
$pgv_lang["no_to_user"]		= "לא סיפקת משתמש מקבל. לא ניתן להמשיך.";
$pgv_lang["provide_email"]		= "ספק את כתובת הדואר האלקטרוני שלך, כדאי שנוכל ליצור קשר אתך בנוגע להודעה זו. אם לא תספק את הכתובת לא נוכל להגיב לפנייתך. כתובת הדואר תשמש אך ורק לתגובה לפניה זו.";
$pgv_lang["reply"]			= "ענה";
$pgv_lang["message_deleted"]	= "ההודעה נמחקה";
$pgv_lang["message_sent"]		= "ההודעה נשלחה בהצלחה ל-#TO_USER#";
$pgv_lang["reset"]			= "אפס";
$pgv_lang["site_default"]		= "ברירת מחדל";
$pgv_lang["mygedview_desc"]		= "דף MyGedView מאפשר לך לשמור סימניות של האנשים המועדפים שלך, לעקוב אחרי מאורעות קרובים ולשתף פעולה עם משתמשי PhpGedView אחרים.";
$pgv_lang["no_messages"]		= "אין הודעות תלויות ועומדות";
$pgv_lang["clicking_ok"] 		= ".#user[fullname]# תפתח חלון נוסף שממנו תוכל להתקשר עם OK הקשה על";
$pgv_lang["favorites"]		= "מועדפים";
$pgv_lang["my_favorites"]		= "מועדפים שלי";
$pgv_lang["no_favorites"]		= "לא בחרת מועדפים.<br /><br />כדי להוסיף אדם, משפחה או מקור לרשימת המועדפים שלך, לחץ על קישור <b>#pgv_lang[add_favorite]#</b> כדי להציג מספר שדות שבהם ניתן למלא או לחפש קוד זיהוי. במקום קוד זיהוי ניתן למלא URL וכותרת.";
$pgv_lang["add_to_my_favorites"]	= "הוסף למועדפים שלי";
$pgv_lang["gedcom_favorites"]	= "המועדפים של הקובץ הזה";
$pgv_lang["no_gedcom_favorites"]	= "כרגע אין מועדפים שנבחרו. המנהלן יכול להוסיף מועדפים שיוצגו בזמן אתחול.";
$pgv_lang["confirm_fav_remove"]	= "?האם באמת למחוק אדם זה מרשימת המועדפים שלך";
$pgv_lang["invalid_email"]		= ".הכנס כתובת דואר אלקטרוני בר תוקף";
$pgv_lang["enter_subject"]		= "הכנס נושא להודעתך";
$pgv_lang["enter_body"]		= ".מלא טכסט לפני שאתה שולח את ההודעה";
$pgv_lang["confirm_message_delete"]	= ".האם באמת למחוק הודעה זו? לא ניתן להחזיר אותה לאחר המחיקה";
$pgv_lang["message_email1"]		= "ההודעה הבאה נשלחה למשתמש ה-PhpGedView שלך מ-";
$pgv_lang["message_email2"]		= "שלחת את ההודעה הבאה למשתמש PhpGedView:";
$pgv_lang["message_email3"]		= "שלחת את ההודעה הבאה למנהלן PhpGedView:";
$pgv_lang["viewing_url"]		= "ההודעה הזו נשלחה מ-URL הבא:";
$pgv_lang["messaging2_help"]	= "לאחר שליחת הודעה זו, תקבל עותק בדואר האלקטרוני לכתובת שמסרת לנו";
$pgv_lang["random_picture"]		= "תמונה אקראית";
$pgv_lang["message_instructions"]	= "<b>שים לב:</b> נתונים אישיים של אנשים חיים נמסרים רק לקרובי משפחה וחברים קרובים. תתבקש לאשר את הקשר שלך לפני שתוכל לראות נתונים אישיים. לפעמים גם הנתונים של אנשים שנפטרו הם פרטיים מכיוון שאין מספיק מידע על האדם כדי לקבוע אם הוא חי או מת ולנו אין, כפי הנראה, מידע נוסף על האדם.<br /><br />נא בדוק את התאריכים, המקומות וקרובי המשפחה של האדם, כדי לוודא שמדובר באדם הנכון לפני פנייה אלינו. אנחנו מבקשים שתוסיף מידע על המקור שממנו השגת את הנתונים, במידה ותוסיף או תשנה נתונים.<br /><br />";
$pgv_lang["sending_to"]		= "ההודעה תשלח ל-#TO_USER#";
$pgv_lang["preferred_lang"]		= "המשתמש מעדיף לקבל הודעות בשפה #USERLANG#";
$pgv_lang["gedcom_created_using"]	= "ה-GEDCOM הזה נוצר ע\"י תוכנת <b>#CREATED_SOFTWARE# #CREATED_VERSION#</b>";
$pgv_lang["gedcom_created_on"]	= "ה-GEDCOM הזה נוצר ב-<b>#CREATED_DATE#</b>";
$pgv_lang["gedcom_created_on2"] 	= " ב-<b>#CREATED_DATE#</b>";
$pgv_lang["gedcom_stats"]		= "סטטיסטיקות GEDCOM";
$pgv_lang["stat_individuals"]		= "אנשים";
$pgv_lang["stat_families"]		= "משפחות";
$pgv_lang["stat_sources"]		= "מקורות";
$pgv_lang["stat_other"]		= "רשומות אחרות";
$pgv_lang["stat_earliest_birth"] 	= "שנת הלידה המוקדמת ביותר";
$pgv_lang["stat_latest_birth"] 		= "שנת הלידה המאוחרת ביותר";
$pgv_lang["stat_earliest_death"] 	= "שנת הפטירה המוקדמת ביותר"; 
$pgv_lang["stat_latest_death"] 		= "שנת הפטירה המאוחרת ביותר"; 
$pgv_lang["customize_page"]		="התאם אישית את הפורטל MyGedView";
$pgv_lang["customize_gedcom_page"]	= "התאם אישית את דף ברוכים הבאים הזה";
$pgv_lang["upcoming_events_block"]	="אירועים קרובים";
$pgv_lang["upcoming_events_descr"]	="אזור אירועים קרובים מראה רשימה של אירועים שיתרחשו בקרוב. תוכל לקבוע את כמות הנתונים שתראה, והמנהלן יכול לקבוע את תחום הזמן הקובע לאזור.";
$pgv_lang["todays_events_block"]	="ביום הזה";
$pgv_lang["todays_events_descr"]	="אזור ביום הזה - בהיסטוריה שלך ... מראה רשימה של אירועים שהתרחשו היום. אם אין אירועים, תוכל לקבוע את כמות הנתונים שתראה.";
$pgv_lang["logged_in_users_block"]	="משתמשים מחוברים";
$pgv_lang["logged_in_users_descr"]	="אזור משתמשים מחוברים מראה רשימה של המשתמשים המחוברים עכשיו לאתר.";
$pgv_lang["user_messages_block"]	="הודעות המשתמש";
$pgv_lang["user_messages_descr"]	="אזור הודעות המשתמש מראה רשימה של הודעות שנשלחו למשתמש פעיל.";
$pgv_lang["user_favorites_block"]	="מועדפים של משתמש";
$pgv_lang["user_favorites_descr"]	="אזור מועדפים של המשתמש מראה למשתמש רשימה של האנשים המועדפים שלו בתוך מאגר המידע כך שיוכל לעבור בקלות בעזרת הקישור אל נתוניהם.";
$pgv_lang["welcome_block"]		="ברוכים הבאים של המשתמש";
$pgv_lang["welcome_descr"]		="אזור ברוכים הבאים של המשתמש מראה למשתמש את היום והזמן הנוכחיים, קישורים מהירים לעדכון נתוני קוד המשתמש וקישור לתרשים אילן היוחסין שלו וקישור להתאמת דף הפורטל MyGedView.";
$pgv_lang["random_media_block"]	="מדיה אקראית";
$pgv_lang["random_media_descr"]	="אזור מדיה אקראית מראה בצורה אקראית תמונה או פריט מדיה אחר ממאגר הנתונים הפעיל ומציג אותו למשתמש.<br /><br />המנהלן קובע אם האזור יראה פרטי מדיה הקשורים או לאנשים או למאורעות.";
$pgv_lang["random_media_persons_or_all"] = "הראה רק אנשים, מאורעות, או הכל?";
$pgv_lang["random_media_persons"]	= "אנשים";
$pgv_lang["random_media_events"]	= "מאורעות";
$pgv_lang["gedcom_block"]		="GEDCOM ברוכים הבאים";
$pgv_lang["gedcom_descr"]		="אזור GEDCOM ברוכים הבאים פועלת בצורה דומה לאזור ברוכים הבאים של המשתמש. הוא מברך את המבקר לאתר ומראה את הכותרת של מאגר הנתונים הפעיל ואת היום והשעה הנוכחיים.";
$pgv_lang["gedcom_favorites_block"]	="מועדפי GEDCOM";
$pgv_lang["gedcom_favorites_descr"]	="אזור מועדפי GEDCOM מאפשר למנהלן האתר לציין אנשים במאגר הנתונים כך שכולם ימצאו אותם בקלות. זו דרך להדגיש את האנשים החשובים בהיסטורית משפחתך.";
$pgv_lang["gedcom_stats_block"]	="סטטיסטיקות GEDCOM";
$pgv_lang["gedcom_stats_descr"]	="אזור סטטיסטיקות GEDCOM מראה למבקרים נתונים בסיסיים על מאגר הנתונים, כמו למשל מתי הוא נוצר וכמה אנשים נכללים בו.<br /><br />הוא כולל רשימה של שמות משפחה שכיחים. ניתן לעצב את האזור לא להראות את רשימת השמות השכיחים וניתן להגדיר את ה-GEDCOM להסיר או להוסיף שמות מהרשימה. ניתן לקבוע את הסף להופעה ברשימה בהגדרת התצורה של קובץ ה-GEDCOM.";
$pgv_lang["gedcom_stats_show_surnames"] = "הראה שמות משפחה שכיחים?";
$pgv_lang["portal_config_intructions"]	="#pgv_lang[customize_page]# <br /> #pgv_lang[customize_gedcom_page]#~<br /><br />תוכל לבצע התאמה אישית לדף ע\"י הצבת אזורים על הדף לפי רצונך.<br /><br />הדף מחולק לשני חלקים, החלק ה<b>ראשי</b> והחלק ה<b>ימני</b>. האזורים בחלק ה<b>ראשי</b> גדולים יותר ומופיעים מתחת לכותרת של הדף. החלק ה<b>ימני</b> מתחיל מימין לכותרת ויורד כלפי מטה בצד הימני של הדף.<br /><br />לכל חלק יש רשימת האזורים שלו, שיוצגו על הדף בסדר שהם רשומים. ניתן להוסיף, להוריד ולשנות את הסדר של האזורים לפי רצונך.<br /><br />אם אחת הרשימות של האזורים ריקה, האזורים הנותרים תופסים את כל רוחב הדף.<br /><br />";
$pgv_lang["login_block"]		="התחברות";
$pgv_lang["login_descr"]		="אזור התחברות מקבל קוד משתמש וסיסמא עבור התחברות משתמשים לאתר.";
$pgv_lang["theme_select_block"]         	= "בחירת עיצוב";
$pgv_lang["theme_select_descr"]         	= "האזור לבחירת עיצוב מציג את תיבת הבחירה גם אם שינוי העיצוב אינו פעיל.";
$pgv_lang["block_top10_title"]          	= "עשרת השמות  השכיחים";
$pgv_lang["block_top10"]                	= "עשרת השמות  השכיחים ";
$pgv_lang["block_top10_descr"]    	= "האזור מציג טבלה של 10 שמות המשפחה השכיחים במאגר הנתונים. ניתן לשנות את המספר של שמות המשפחה. ניתן לקבוע הגדרות בתצורת ה-GEDCOM כך ששמות מסוימים לא יופיעו ברשימה.";
$pgv_lang["gedcom_news_block"]	= "חדשות GEDCOM";
$pgv_lang["gedcom_news_descr"]	= "אזור החדשות של GEDCOM מראה למבקר חדשות או כתבות שהמנהלן העלה למערכת.<br /><br />אזור החדשות הוא מקום טוב להודיע על עדכון מאגר הנתונים,  על מפגש משפחתי או על לידת ילד.";
$pgv_lang["gedcom_news_limit"]	= "הגבל את התצוגה לפי:";
$pgv_lang["gedcom_news_limit_nolimit"]	= "אין הגבלה";
$pgv_lang["gedcom_news_limit_date"]	= "גיל הכניסה";
$pgv_lang["gedcom_news_limit_count"]	= "מספר כניסות";
$pgv_lang["gedcom_news_flag"]	= "גבול:";
$pgv_lang["gedcom_news_archive"] 	= "הצג ארכיון";
$pgv_lang["user_news_block"]		= "יומן המשתמש";
$pgv_lang["user_news_descr"]	= "אזור יומן המשתמש מאפשר למשתמש לשמור הערות או כניסות יומן בתוך המערכת.";
$pgv_lang["my_journal"]		= "היומן שלי";
$pgv_lang["no_journal"]		= "לא יצרת שום פריט יומן.";
$pgv_lang["confirm_journal_delete"]	= "האם באמת למחוק את כניסת היומן הזו?";
$pgv_lang["add_journal"]		= "הוסף כניסת יומן חדשה";
$pgv_lang["gedcom_news"]		= "חדשות";
$pgv_lang["confirm_news_delete"]	= "האם באמת למחוק את כניסת החדשות הזו?";
$pgv_lang["add_news"]		= "הוסף מאמר חדשות";
$pgv_lang["no_news"]		= "לא הגשת מאמרי חדשות.";
$pgv_lang["edit_news"]		= "הוסף/ערוך כניסת יומן/חדשות";
$pgv_lang["enter_title"]		= "נא הכנס כותרת.";
$pgv_lang["enter_text"]		= "נא מלא טכסט עבור כניסת חדשות או יומן זו.";
$pgv_lang["news_saved"]		= "כניסת יומן/חדשות נשמרה בהצלחה.";
$pgv_lang["article_text"]		= "טכסט הכניסה:";
$pgv_lang["main_section"]		="האזורים הראשיים";
$pgv_lang["right_section"]		="האזורים הימניים";
$pgv_lang["available_blocks"]		= "האזורים הזמינים";
$pgv_lang["move_up"]		="העבר למעלה";
$pgv_lang["move_down"]		="העבר למטה";
$pgv_lang["move_right"]		= "העבר שמאלה";
$pgv_lang["move_left"]		= "העבר ימינה";
$pgv_lang["broadcast_all"]		="שדר לכל המשתמשים";
$pgv_lang["hit_count"]		="ספירת פגיעות:";
$pgv_lang["phpgedview_message"]	= "PhpGedView הודעת";
$pgv_lang["common_surnames"]	= "שמות משפחה שכיחים";
$pgv_lang["default_news_title"]	= "ברוכים הבאים לחקר שושלת היוחסין שלך";
$pgv_lang["default_news_text"]	= "נתוני חקר שושלת יוחסין באתר זה ממונעים ע\"י <a href=\"http://www.phpgedview.net/\" target=\"_blank\">PhpGedView #VERSION#</a>. הדף הזה מספק הקדמה וסקירה כללית לחקר שושלת יוחסין זו.<br /><br />כדי להתחיל לעבוד על הנתונים, בחר אחד התרשימים מתפריט התרשימים, לך לרשימת שמות או חפש שם או מקום.<br /><br />במידה ויהיו לך בעיות להשתמש באתר, לחיצה על צלמית העזרה תיתן לך מידע על ה שימוש בדף שהנך רואה עכשיו.<br /><br />תודה על הביקור שלך באתר זה.";
$pgv_lang["reset_default_blocks"]	= "החזר את האזורים למצב ברירת המחדל";
$pgv_lang["recent_changes"]		= "השינויים האחרונים";
$pgv_lang["recent_changes_block"]	= "השינויים האחרונים";
$pgv_lang["recent_changes_descr"]	= "אזור השינויים האחרונים מציג את כל השינויים שנעשו למאגר המידע בחודש האחרון. האזור יעזור לך להיות מעודכן לגבי השינויים. השינויים מוצגים על סמך נתון CHAN (תאריך השינוי האחרון) שמוגדר בתקן של ה-GEDCOM.";
$pgv_lang["recent_changes_none"]	= "<b>לא היו שינויים במשך #pgv_lang[global_num1]# הימים האחרונים.</b><br />";
$pgv_lang["recent_changes_some"]	= "<b>שינויים שבוצעו תוך #pgv_lang[global_num1]# הימים האחרונים</b><br />";
$pgv_lang["show_empty_block"]	= "האם להחביא את האזור כאשר הוא ריק?";
$pgv_lang["hide_block_warn"]		= "אם תסתיר אזור ריק, לא תוכל לשנות את ההגדרות שלו כל עוד הוא ריק ומוסתר.";
$pgv_lang["delete_selected_messages"]	= "בטל את ההודעות הנבחרות";
$pgv_lang["use_blocks_for_default"]	= "האם להשתמש באזורים הללו כהגדרה של אזורי ברירת מחדל לכל המשתמשים?";
$pgv_lang["block_not_configure"]	= "לא ניתן להגדיר את האזור הזה.";

//-- upgrade.php messages
//$pgv_lang["upgrade_util"]		= "תוכנת שדרוג";
//$pgv_lang["no_upgrade"]		= "אין קבצים לשדרוג.";
//$pgv_lang["use_version"]		= "הנך משתמש במהדורה:";
//$pgv_lang["current_version"]		= "המהדורה היציבה הנוכחית:";
//$pgv_lang["upgrade_download"]	= "הורד:";
//$pgv_lang["upgrade_tar"]		= "TAR";
//$pgv_lang["upgrade_zip"]		= "ZIP";
//$pgv_lang["latest"]			= "הנך קוד משתמש במהדורה האחרונה של PhpGedView.";
//$pgv_lang["location"]		= "מיקום קבצי שדרוג: ";
//$pgv_lang["include"]		= "סמן לצורך שדרוג:";
//$pgv_lang["options"]		= "אפשרויות:";
//$pgv_lang["inc_phpgedview"]		= " PhpGedView";
//$pgv_lang["inc_languages"]		= " שפות";
//$pgv_lang["inc_config"]		= " קובץ תצורה";
//$pgv_lang["inc_researchlog"]		= " יומן מחקר";
//$pgv_lang["inc_index"]		= " קבצי אינדקס";
//$pgv_lang["inc_themes"]		= " עיצובים";
//$pgv_lang["inc_docs"]		= " ספרי הדרכה";
//$pgv_lang["inc_privacy"]		= " קובץ פרטיות";
//$pgv_lang["inc_backup"]		= " צור גיבוי";
//$pgv_lang["upgrade_help"]		= " עזור לי";
//$pgv_lang["cannot_read"]		= "לא ניתן לקרוא את הקובץ:";
//$pgv_lang["not_configured"]		= "עדיין לא עצבת את PhpGedView.";
//$pgv_lang["location_upgrade"]	= "מלא המיקום של קבצי השדרוג.";
//$pgv_lang["new_variable"]		= "משתנים חדשים נמצאו: ";
//$pgv_lang["file_open_error"]		= "התגלתה שגיאה בפתיחת קובץ [#pgv_lang[global_str1]#].";
//$pgv_lang["file_write_error"]		= "שגיאה!!! לא ניתן לכתוב לקובץ [#pgv_lang[global_str1]#].";
//$pgv_lang["config_open_error"] 	= "התגלתה שגיאה בפתיחת קובץ התצורה.";
//$pgv_lang["gedcom_config_write_error"] = "שגיאה!!! לא ניתן לכתוב בקובץ התצורה של ה-GEDCOM.";
//$pgv_lang["config_update_ok"]	= "קובץ התצורה עודכן בצורה מוצלחת.";
//$pgv_lang["config_uptodate"]		= "קובץ תצורה שלך עדכני.";
//$pgv_lang["processing"]		= "מעבד...";
//$pgv_lang["privacy_open_error"] 	= "התגלתה שגיאה בפתיחת קובץ [#PRIVACY_MODULE#].";
//$pgv_lang["privacy_write_error"]	= "שגיאה!!! לא ניתן לכתוב בקובץ [#PRIVACY_MODULE#].<br />וודא שהקובץ מוגדר עם אישורי כתיבה.<br />ניתן להחזיר את ההרשאות אחרי שקובץ הפרטיות ייכתב.";
//$pgv_lang["privacy_update_ok"]	= "קובץ פרטיות: [#PRIVACY_MODULE#] עודכן בהצלחה.";
//$pgv_lang["privacy_uptodate"]	= "קובץ [#PRIVACY_MODULE#] שלך עדכני.";
//$pgv_lang["heading_privacy"]	= "קבצי פרטיות:";
//$pgv_lang["heading_phpgedview"]	= "PhpGedView קבצי:";
//$pgv_lang["heading_image"]		= "קבצי תמונה:";
//$pgv_lang["heading_index"] 		= "קבצי אינדקס:";
//$pgv_lang["heading_language"]	= "קבצי שפה:";
//$pgv_lang["heading_theme"]		= "קבצי עיצוב :";
//$pgv_lang["heading_docs"]		= "ספרי הדרכה:";
//$pgv_lang["heading_researchlog"]	= "קבצי יומן מחקר:";
//$pgv_lang["heading_researchloglang"]	= "קבצי שפה של יומן מחקר:";
//$pgv_lang["copied_success"]		= "ההעתקה הצליחה";
//$pgv_lang["backup_copied_success"]	= "קובץ הגיבוי ניבנה בצורה מוצלחת.";
//$pgv_lang["folder_created"]		= "תיקייה נוצרה";
//$pgv_lang["folder_no_create"]	= "לא ניתן ליצור תיקייה";
//$pgv_lang["process_error"]		= "התגלו בעיות בעיבוד הדף. לא ניתן לקבוע גרסה חדשה יותר.";
//$pgv_lang["upgrade_completed"]	= "השדרוג הסתיים בהצלחה.";
//$pgv_lang["start_using_upgrad"]	= "לחץ כאן כדי להתחיל להשתמש בגרסה.";

//-- validate GEDCOM
$pgv_lang["performing_validation"]	= "ביצוע בדיקת GEDCOM, בחר באפשרויות הדרושות ולחץ על <b>ניקיון</b>.";
//$pgv_lang["performing_validation"]	= "אמות ה-GEDCOM מתבצע...";
$pgv_lang["changed_mac"]		= "התגלו סיומות שורה של מקינטוש. סיומות השורה שונו כך שהן כוללות חזרה להתחלה CR (Ctrl M) ובנוסף שורה חדשה LF (Ctrl J). שינוי זה משנה את הפורמט הפנימי ממקינטוש ל-DOS";
$pgv_lang["changed_places"]		= "התגלה רישום מיקום במבנה שגוי. מבנה רשומות המקום נוקה למבנה התואם פירוט של GEDCOM 5.5. דוגמא מקובץ GEDCOM הקלט שלך: ";
$pgv_lang["invalid_dates"]		= "התגלו מבני תאריך לא חוקיים, הניקיון ישנה אותם למבנה DD MMM YYYY (כלומר 01 JAN 2004).";
$pgv_lang["valid_gedcom"]		= "ה-GEDCOM התגלה כתקין. אין צורך בניקיון.";
$pgv_lang["optional_tools"]		= "ניתן להריץ את הכלים האופציונאליים הבאים לפני ייבוא.";
//$pgv_lang["optional_tools"] 		= "ניתן להריץ את הכלים האופציונאליים הבאים לפני הייבוא.";
$pgv_lang["optional"]		= "כלי רשות";
$pgv_lang["day_before_month"]	= "יום לפני חודש (DD MM YYYY)";
$pgv_lang["month_before_day"]	= "חודש לפני יום (MM DD YYYY)";
$pgv_lang["do_not_change"]		= "אין לשנות";
$pgv_lang["change_id"]		= "שנה קוד זיהוי אישי ל:";
$pgv_lang["example_place"]		= "דוגמא למקומות שגויים מה-GEDCOM שלך:";
$pgv_lang["example_date"]		= "דוגמא לתאריך שאינו בר-תוקף ב-GEDCOM שלך:";
$pgv_lang["add_media_tool"]		= "כלי להוספת פרט מדיה חדש";
$pgv_lang["launch_media_tool"]	= "הקשה כאן פותחת את הכלי להוספת מדיה.";
$pgv_lang["add_media_descr"]	= "הכלי מוסיף תוויות OBJE של מדיה למאגר הנתונים. סגור את החלון כאשר סיימת להוסיף מדיה.";
$pgv_lang["highlighted"]		= "תמונה בהדגשה";
$pgv_lang["extension"]		= "סיומת";
$pgv_lang["order"]			= "מיין";
$pgv_lang["inject_media_tool"]		= "הוסף מדיה לקובץ GEDCOM";
$pgv_lang["media_table_created"]	= "טבלת <i>מדיה</i> עודכנה בהצלחה.";
$pgv_lang["click_to_add_media"]	= "לחץ כאן כדי להוסיף את המדיה הרשומה למעלה ל-GEDCOM #GEDCOM#";
$pgv_lang["adds_completed"]		= "המדיה הוספה בהצלחה לקובץ ה-GEDCOM.";
$pgv_lang["ansi_encoding_detected"]	= "הקובץ במבנה PhpGedView .ANSI עובד הכי טוב עם קבצים במבנה UTF-8.";
$pgv_lang["invalid_header"]		= "התגלו שורות לפני כותרת ה-GEDCOM <b>0&nbsp;HEAD</b>. הניקיון ימחק את השורות הללו.";
$pgv_lang["macfile_detected"]		= "התגלה שהקובץ הוא קובץ מקינטוש. הניקוי ייסב את הקובץ למבנה DOS.";
$pgv_lang["place_cleanup_detected"]	= "התגלו מקומות במבנה שגוי. יש לתקן את השגיאות.";
$pgv_lang["cleanup_places"]		= "נקה מקומות";
$pgv_lang["empty_lines_detected"]	= "שורות ריקות התגלו בקובץ ה-GEDCOM שלך. הניקיון ימחוק את השורות הריקות הללו.";
$pgv_lang["import_options"]		= "אופציות ייבוא";
$pgv_lang["import_options_help"] 	= "ניתן לבחור אופציות נוספות שייבוא ה-GEDCOM ישתמש בהם.";
$pgv_lang["verify_gedcom"]		= "אמת את ה-GEDCOM המעודכן";
$pgv_lang["verify_gedcom_help"]	= "ניתן להמשיך להעלות ולייבא קובץ GEDCOM זה או להפסיק את ההעלאה והייבוא.";
$pgv_lang["import_statistics"]		= "סטטיסטיקות ייבוא";

//-- hourglass chart
$pgv_lang["hourglass_chart"]		= "תרשים שעון חול";

//-- report engine
$pgv_lang["choose_report"]		= "בחר דו\"ח להרצה";
$pgv_lang["enter_report_values"]	= "הכנס ערכי הדו\"ח";
$pgv_lang["selected_report"]		= "דו\"ח נבחר";
$pgv_lang["run_report"]		= "הרץ דו&quot;ח";
$pgv_lang["select_report"]		= "בחר דו&quot;ח";
$pgv_lang["download_report"]		= "הורד דו&quot;ח";
$pgv_lang["reports"]                		= "דו\"חות";
$pgv_lang["pdf_reports"]            	= "דו\"חות PDF";
$pgv_lang["html_reports"]          	= "דו\"חות HTML";

//-- Ahnentafel report
$pgv_lang["ahnentafel_report"]	= "דו\"ח Ahnentafel";
$pgv_lang["ahnentafel_header"]	= "דו\"ח Ahnentafel עבור ";
$pgv_lang["ahnentafel_generation"]	= "דור ";
$pgv_lang["ahnentafel_pronoun_m"]	= "הוא ";
$pgv_lang["ahnentafel_pronoun_f"]	= "היא ";
$pgv_lang["ahnentafel_born_m"]	= "נולד";		// male
$pgv_lang["ahnentafel_born_f"]	= "נולדה";		// female
$pgv_lang["ahnentafel_christened_m"] 	= "הוטבל";		// male
$pgv_lang["ahnentafel_christened_f"] 	= "הוטבלה";	// female
$pgv_lang["ahnentafel_married_m"]	= "התחתן";	// male
$pgv_lang["ahnentafel_married_f"]	= "התחתנה";	// female
$pgv_lang["ahnentafel_died_m"]	= "נפתר";		// male
$pgv_lang["ahnentafel_died_f"]	= "נפתרה";	// female
$pgv_lang["ahnentafel_buried_m"]	= "נקבר";		// male
$pgv_lang["ahnentafel_buried_f"]	= "נקברה";		// female
$pgv_lang["ahnentafel_place"]		= " ב-";		// place name follows this
//$pgv_lang["ahnentafel_spouse"]	= "עם ";		// spouse name follows this
$pgv_lang["ahnentafel_no_details"]	= " אבל הפרטים אינם ידועים";

//-- Descendancy report
$pgv_lang["descend_report"]		= "דו\"ח צאצאים";
$pgv_lang["descendancy_header"]	= "דו\"ח צאצאים עבור ";

$pgv_lang["family_group_report"]    	= "דו\"ח קבוצת המשפחה";
$pgv_lang["page"]                   		= "דף";
$pgv_lang["of"]                     		= "מתוך";
$pgv_lang["enter_famid"]            	= "הכנס קוד זיהוי של המשפחה";
$pgv_lang["show_sources"]           	= "הצג מקורות?";
$pgv_lang["show_notes"]             	= "הצג הערות?";
$pgv_lang["show_basic"]             	= "הדפס אירועים בסיסיים ריקים?";
$pgv_lang["show_photos"]		= "הראה תמונות?";
$pgv_lang["relatives_report_ext"]	= "דו\"ח קרובים מורחב";
$pgv_lang["with"]			= "עם";
$pgv_lang["on"]			= "ב-";			// for precise dates
$pgv_lang["in"]			= "ב-";			// for imprecise dates
$pgv_lang["individual_report"]		= "דו\"ח אישי";
$pgv_lang["enter_pid"]		= "הכנס קוד זיהוי אישי";
$pgv_lang["individual_list_report"]	= "דו\"ח רשימה אישית";
$pgv_lang["generated_by"]		= "נוצר ע\"י";
$pgv_lang["list_children"]		= "הצג ילדים לפי תאריך לידה.";
$pgv_lang["birth_report"]		= "דו\"ח תאריכי ומקומות לידה";
$pgv_lang["birthplace"]		= "מקום הלידה כולל";
$pgv_lang["birthdate1"]		= "תחילת תחום תאריכי לידה";
$pgv_lang["birthdate2"]		= "סיום תחום תאריכי לידה";
$pgv_lang["death_report"]		= "דו\"ח תאריך ומקום פטירה";
$pgv_lang["deathplace"]		= "מקום הפטירה כולל";
$pgv_lang["deathdate1"]		= "תחילת תחום תאריך פטירה";
$pgv_lang["deathdate2"]		= "סוף תחום תאריך פטירה";
$pgv_lang["marr_report"]		= "דו\"ח תאריך ומקום נישואים";
$pgv_lang["marrplace"]		= "מקום הנישואים מכיל";
$pgv_lang["marrdate1"]		= "התחלת תחום תאריכי נישואים";
$pgv_lang["marrdate2"]		= "סיום תחום תאריכי נישואים";
$pgv_lang["sort_by"]		= "מיין לפי";
$pgv_lang["cleanup"]		= "ניקיון";
$pgv_lang["skip_cleanup"]		= "דלג על ניקיון";

//-- CONFIGURE (extra) messgaes for programs patriarch, slklist and statistics
$pgv_lang["dynasty_list"]		= "סקירה כללית של משפחות";
//$pgv_lang["make_slklist"]		= "צור רשימת <span dir=\"ltr\">EXCEL (SLK)</span>";
//$pgv_lang["excel_list"]		= "<span dir=\"ltr\">:(על הקבצים הבאים (השתמש תחילה ברשימת ראשי בית-אב EXCEL (slk) בפלט במבנה</span>";
//$pgv_lang["excel_tab"]		= "סימניות EXCEL:";
//$pgv_lang["excel_create"]		= " יבנה בקובץ:";
$pgv_lang["patriarch_list"]		= "רשימת ראשי בית-אב";
//$pgv_lang["slk_list"]			= "רשימת EXCEL SLK";
$pgv_lang["statistics"]		= "סטטיסטיקות";

//-- Merge Records
$pgv_lang["merge_records"]                	= "מזג רשומות";
$pgv_lang["merge_same"]                   	= "הרשומות אינן מסוג זהה. לא ניתן למזג רשומות מסוגים שונים.";
$pgv_lang["merge_step1"]                	= "שלב מיזוג 1 מתוך 3";
$pgv_lang["merge_step2"]                	= "שלב מיזוג 2 מתוך 3";
$pgv_lang["merge_step3"]                	= "שלב מיזוג 3 מתוך 3";
$pgv_lang["select_gedcom_records"] 	= "בחר שתי רשומות GEDCOM למיזוג. הרשומות חייבות להיות מאותו סוג.";
$pgv_lang["merge_to"]                        	= "מזג לקוד זיהוי:";
$pgv_lang["merge_from"]                        	= "מזג מקוד זיהוי:";
$pgv_lang["merge_facts_same"]        	= "העובדות הבאות זהות בשתי הרשומות וימוזגו בצורה אוטומטית.";
$pgv_lang["no_matches_found"]        	= "אין עובדות מתאימות";
$pgv_lang["unmatching_facts"]        	= "העובדות הבאות אינן זהות. בחר את המידע שברצונך לשמור.";
$pgv_lang["record"]                               	= "רשומה";
$pgv_lang["adding"]        		= "מוסיף";
$pgv_lang["updating_linked"]        	= "מעדכן רשומה קשורה";
$pgv_lang["merge_more"]                       	= "מזג רשומות נוספות.";
$pgv_lang["same_ids"]                        	= "הכנסת קוד זיהוי זהה. לא ניתן למזג רשומה זהה.";

//-- ANCESTRY FILE MESSAGES
$pgv_lang["ancestry_chart"] 		= "תרשים שושלת";
$pgv_lang["gen_ancestry_chart"]  	= "תרשים שושלת של #PEDIGREE_GENERATIONS# דורות";
$pgv_lang["chart_style"]    	     	= "סגנון תרשים";
$pgv_lang["chart_list"]		= "רשימה";
$pgv_lang["chart_booklet"]   		= "ספרון";
//$pgv_lang["ancestry_list"]     	    	= "רשימת שושלת";
//$pgv_lang["ancestry_booklet"]     	= "ספרון שושלת";
$pgv_lang["show_cousins"]		= "הראה בני דוד";

// used in functions_charts:
// 1st generation
$pgv_lang["sosa_2"] 		= "אבא";
$pgv_lang["sosa_3"] 		= "אמא";
// 2nd generation
$pgv_lang["sosa_4"] 		= "סבא";
$pgv_lang["sosa_5"] 		= "סבתא";
$pgv_lang["sosa_6"] 		= "סבא";
$pgv_lang["sosa_7"] 		= "סבתא";
// 3rd generation
$pgv_lang["sosa_8"] 		= "סבא רבא";
$pgv_lang["sosa_9"] 		= "סבתא רבתא";
$pgv_lang["sosa_10"]		= "סבא רבא";
$pgv_lang["sosa_11"]		= "סבתא רבתא";
$pgv_lang["sosa_12"]		= "סבא רבא";
$pgv_lang["sosa_13"]		= "סבתא רבתא";
$pgv_lang["sosa_14"]		= "סבא רבא";
$pgv_lang["sosa_15"]		= "סבתא רבתא";

$pgv_lang["sosa_16"]               	= "N/A";
$pgv_lang["sosa_17"]               	= "N/A";
$pgv_lang["sosa_18"]               	= "N/A";
$pgv_lang["sosa_19"]             	= "N/A";
$pgv_lang["sosa_20"]               	= "N/A";
$pgv_lang["sosa_21"]               	= " רבתא";
$pgv_lang["sosa_22"]               	= " רבא";
$pgv_lang["sosa_23"]               	= " של ";
$pgv_lang["sosa_24"]               	= "N/A";
$pgv_lang["sosa_25"]               	= "N/A";
$pgv_lang["sosa_26"]               	= "N/A";
$pgv_lang["sosa_27"]               	= "N/A";
$pgv_lang["sosa_28"]                = "N/A";
$pgv_lang["sosa_29"]               	= "N/A";
$pgv_lang["sosa_30"]               	= "N/A";
$pgv_lang["sosa_31"]               	= "N/A";
$pgv_lang["sosa_32"]               	= "N/A";
$pgv_lang["sosa_33"]               	= "N/A";
$pgv_lang["sosa_34"]               	= "N/A";
$pgv_lang["sosa_35"]               	= "N/A";
$pgv_lang["sosa_36"]               	= "N/A";
$pgv_lang["sosa_37"]               	= "N/A";
$pgv_lang["sosa_38"]             		= "N/A";
$pgv_lang["sosa_39"]              		= "N/A";
$pgv_lang["sosa_40"]              		= "N/A";
$pgv_lang["sosa_41"]              		= "N/A";
$pgv_lang["sosa_42"]              		= "N/A";
$pgv_lang["sosa_43"]              		= "N/A";
$pgv_lang["sosa_44"]              	 	= "N/A";
$pgv_lang["sosa_45"]               		= "N/A";
$pgv_lang["sosa_46"]            	 	= "N/A";
$pgv_lang["sosa_47"]              		= "N/A";
$pgv_lang["sosa_48"]              		= "N/A";
$pgv_lang["sosa_49"]            		= "N/A";
$pgv_lang["sosa_50"]             		= "N/A";
$pgv_lang["sosa_51"]            		= "N/A";
$pgv_lang["sosa_52"]            		= "N/A";
$pgv_lang["sosa_53"]              		= "N/A";
$pgv_lang["sosa_54"]            		= "N/A";
$pgv_lang["sosa_55"]             		= "N/A";
$pgv_lang["sosa_56"]              		= "N/A";
$pgv_lang["sosa_57"]              		= "N/A";
$pgv_lang["sosa_58"]            		= "N/A";
$pgv_lang["sosa_59"]            		= "N/A";
$pgv_lang["sosa_60"]              		= "N/A";
$pgv_lang["sosa_61"]              		= "N/A";
$pgv_lang["sosa_62"]             		= "N/A";
$pgv_lang["sosa_63"]            		= "N/A";

//-- FAN CHART
$pgv_lang["compact_chart"]		= "תרשים קומפקטי";
$pgv_lang["fan_chart"]		= "תרשים מניפה";
//$pgv_lang["fan_chart"]		= "@@++Circle Diagram";
$pgv_lang["gen_fan_chart"]    		= "תרשים מניפה של #PEDIGREE_GENERATIONS# דורות";
//$pgv_lang["gen_fan_chart"]  		= "@@++#PEDIGREE_GENERATIONS# Generation Circle Diagram";
$pgv_lang["fan_width"]		= "רוחב";
$pgv_lang["gd_library"]		= "בעיית קונפיגורציה של שרת ה-PHP: תיקיית GD 2.x דרושה כדי להשתמש בפונקציות התמונה.";
$pgv_lang["gd_freetype"]		= "בעיית קונפיגורציה של שרת ה-PHP: תיקיית Freetype דרושה כדי להשתמש בפונטי TrueType.";
$pgv_lang["gd_helplink"]		= "http://www.php.net/gd";
$pgv_lang["fontfile_error"]   		= "הפונט לא נמצא על שרת ה-PHP";
$pgv_lang["fanchart_IE"]		= "לא ניתן להדפיס את תרשים המניפה הזה מהדפדפן שלך. השתמש בקליק הימני ושמור והדפס אח\"כ.";

//-- RSS Feed
$pgv_lang["rss_descr"]		= "חדשות וקישורים מאתר ה-#GEDCOM_TITLE# ";
$pgv_lang["rss_logo_descr"]		= "ההזנה נוצרה ע\"י PhpGedView";
$pgv_lang["rss_feeds"]		= "הזנות RSS";
$pgv_lang["no_feed_title"]		= "ההזנה אינה זמינה";
$pgv_lang["no_feed"]		= "אין הזנת RSS זמינה לאתר ה-PhpGedView הזה";
$pgv_lang["feed_login"]		= "אם לך יש קוד משתמש באתר PhpGedView זה, תוכל להתחבר לשרת <a href=\"#AUTH_URL#\"> log in</a> ע\"י שימוש באימות בסיסי של HTTP כדי לראות נתונים פרטיים";
$pgv_lang["authenticated_feed"]	= "הזנה מאושרת";

//-- ASSOciates RELAtionship
// Help1 http://oakroadsystems.com/genl/relation.htm
// Help2 http://www.thefreedictionary.com/grandmother
// Help3 http://www.geocities.com/safa_ivrit/people/relatives.html
//
// After any change in the following list, please check $assokeys in gdbi_interface.php
$pgv_lang["attendant"] 		= "משגיח";
$pgv_lang["attending"] 		= "אחראי";
$pgv_lang["best_man"] 		= "שושבין";
$pgv_lang["bridesmaid"] 		= "שושבינה";
$pgv_lang["buyer"] 			= "קונה";
$pgv_lang["circumciser"] 		= "מוהל";
$pgv_lang["civil_registrar"] 		= "רשם אזרחי";
$pgv_lang["friend"] 			= "חבר/ה";
$pgv_lang["godfather"] 		= "סנדק";
$pgv_lang["godmother"] 		= "סנדק";
$pgv_lang["godparent"] 		= "סנדק";
$pgv_lang["informant"] 		= "מוסר מידע";
$pgv_lang["lodger"] 			= "דייר";
$pgv_lang["nurse"] 			= "אחות מטפלת";
$pgv_lang["priest"] 			= "כומר";
$pgv_lang["rabbi"] 			= "רב";
$pgv_lang["registry_officer"] 		= "ממונה על רישום";
$pgv_lang["seller"] 			= "מוכר";
$pgv_lang["servant"] 		= "משרת";
$pgv_lang["twin"] 			= "תאום/תאומה";
$pgv_lang["twin_brother"] 		= "אח תאום";
$pgv_lang["twin_sister"] 		= "אחות תאומה";
$pgv_lang["witness"] 		= "עד";

//-- statistics utility
$pgv_lang["statutci"]			= "לא ניתן ליצור אינדקס";
$pgv_lang["statnnames"]                	= "מספר שמות    =";
$pgv_lang["statnfam"]                  	= "מספר משפחות  =";
$pgv_lang["statnmale"]                	= "מספר גברים   =";
$pgv_lang["statnfemale"]              	= "מספר נשים    =";
$pgv_lang["statvars"]		= "מלא את הערכים הבאים עבור התרשים";
$pgv_lang["statlxa"]			= "לאורך ציר ה-x:";
$pgv_lang["statlya"]			= "לאורך ציר ה-y:";
$pgv_lang["statlza"]			= "לאורך ציר ה-z:";
$pgv_lang["stat_10_none"]		= "כלום";
$pgv_lang["stat_11_mb"]		= "חודש לידה";
$pgv_lang["stat_12_md"]		= "חודש פטירה";
$pgv_lang["stat_13_mm"]		= "חודש הנישואין";
$pgv_lang["stat_14_mb1"]		= "חודש של לידת הילד/ה הראשון/נה ביחס";
$pgv_lang["stat_15_mm1"]		= "חודש הנישואין הראשונים";
$pgv_lang["stat_16_mmb"]		= "חודשים בין נישואין לילד הראשון.";
$pgv_lang["stat_17_arb"]		= "גיל ביחס לשנת לידה.";
$pgv_lang["stat_18_ard"]		= "גיל ביחס לשנת פטירה.";
$pgv_lang["stat_19_arm"]		= "גיל בשנת הנישואין.";
$pgv_lang["stat_20_arm1"]		= "גיל בנישואין הראשונים.";
$pgv_lang["stat_21_nok"]		= "מספר ילדים.";
$pgv_lang["stat_gmx"]		= " סמן הערכים של החודשים";
$pgv_lang["stat_gax"]		= " סמן הערכים של הגיל";
$pgv_lang["stat_gnx"]		= " סמן הערכים של הספרות";
$pgv_lang["stat_200_none"]		= "הכל (או ריק)";
$pgv_lang["stat_201_num"]		= "ספרות";
$pgv_lang["stat_202_perc"]		= "אחוז";
$pgv_lang["stat_300_none"]		= "כלום";
$pgv_lang["stat_301_mf"]		= "זכר/נקבה";
$pgv_lang["stat_302_cgp"]		= "תקופות - סמן הערכים של תקופות על ציר ה-x";
$pgv_lang["statmess1"]		= "<b>מלא את השורות הבאות אשר מתייחסות לערכים קודמים של ציר x או z</b>";
$pgv_lang["statar_xgp"]		= "ערכים עבור תקופות (ציר x):";
$pgv_lang["statar_xgl"]		= "ערכים עבור גילים (ציר x):";
$pgv_lang["statar_xgm"]		= "ערכים עבור חודש (ציר x):";
$pgv_lang["statar_xga"]		= "ערכים עבור ספרות (ציר x):";
$pgv_lang["statar_zgp"]		= "ערכים עבור תקופות (ציר z):";
$pgv_lang["statreset"]		= "אפס";
$pgv_lang["statsubmit"]		= "הצג תרשים";

//-- statisticsplot utility
$pgv_lang["statistiek_list"]		= "תרשים סטטיסטי";
$pgv_lang["stpl"]			= "...";
$pgv_lang["stplGDno"]		= "תיקיית Graphics Display אינה קיימת ב-PHP 4. פנה למינהלן המערכת";
$pgv_lang["stpljpgraphno"]	 	= "מודולי JPgraph אינם קיימים בתיקיית <i>phpgedview/jpgraph/</i>. ניתן להוריד אותם מ-http://www.aditus.nu/jpgraph/jpdownload.php<br /> <h3>התקן תחילה JPgraph בתיקייה <i>phpgedview/jpgraph/</i></h3><br />";
$pgv_lang["stplinfo"]			= "נתוני תרשים:";
$pgv_lang["stpltype"]		= "סוג:";
$pgv_lang["stplnoim"]		= "לא מיושם:";
$pgv_lang["stplmf"]			= " / מין";
$pgv_lang["stplipot"]			= " / תקופת זמן";
$pgv_lang["stplgzas"]		= "גבולות ציר z:";
$pgv_lang["stplmonth"]		= "חודש";
$pgv_lang["stplnumbers"]		= "ספרות";
$pgv_lang["stplage"]		= "גיל";
$pgv_lang["stplperc"]		= "אחוז";
$pgv_lang["stplnumof"]		= "מונים "; 
$pgv_lang["stplmarrbirth"]		= "חודשים מהחתונה להולדת הילד הראשון"; 

//-- alive in year
$pgv_lang["alive_in_year"]		= "רשימת חי בשנה";
$pgv_lang["is_alive_in"]		= "חי ב-#YEAR# ";
$pgv_lang["alive"]			= "חי ";
$pgv_lang["dead"]			= "מת ";
$pgv_lang["maybe"]			= "אולי ";
$pgv_lang["both_alive"]		= "שניהם חיים ";
$pgv_lang["both_dead"]		= "שניהם מתים ";

//-- Help system
$pgv_lang["definitions"]		= "הגדרות";

//-- Index_edit
$pgv_lang["description"]		= "תאור";
$pgv_lang["block_desc"]		= "תיאורי אזורים";
$pgv_lang["click_here"]		= "לחץ כאן כדי להמשיך";
$pgv_lang["click_here_help"]		= "~#pgv_lang[click_here]#~<br /><br />לחץ על כפתור זה כדי לשמור את השינויים שלך.<br /><br />תוחזר לדף #pgv_lang[welcome]# או לדף #pgv_lang[mygedview]#, אבל יתכן שהשינויים שלך לא יוצגו. יתכן שעליך להשתמש בפונקצית רענון תצוגה של הדפדפן כדי שהשינויים שלך יוצגו.";
$pgv_lang["block_summaries"]		= "~#pgv_lang[block_desc]#~<br /><br />כאן תמצא תאור קצר של כל אזור שניתן לשים על דף ה#pgv_lang[welcome]# או #pgv_lang[mygedview]#.<br /><table border='1' align='center'><tr><td class='list_value'><b>#pgv_lang[name]#</b></td><td class='list_value'><b>#pgv_lang[description]#</b></td></tr>#pgv_lang[block_summary_table]#</table><br /><br />";
$pgv_lang["block_summary_table"]	= "&nbsp;";		// Built in index_edit.php

//-- Find page
$pgv_lang["total_places"]		= "נמצאו מקומות";
$pgv_lang["media_contains"]		= "מדיה מכילה:";
$pgv_lang["repo_contains"]		= "מאגר מכיל:";
$pgv_lang["source_contains"]		= "מקור מכיל:";
$pgv_lang["display_all"]		= "הצג הכל";

//-- accesskey navigation
$pgv_lang["accesskeys"]				= "קיצורי לוח המקשים";
//$pgv_lang["accesskey_skip_to_content"] 		= "C";
$pgv_lang["accesskey_skip_to_content"]			= "ת";
//$pgv_lang["accesskey_search"]			= "S";
$pgv_lang["accesskey_search"]			= "ח";
$pgv_lang["accesskey_skip_to_content_desc"]	 	= "דלג לתוכן";
$pgv_lang["accesskey_viewing_advice"]			= "0";
$pgv_lang["accesskey_viewing_advice_desc"]		= "עצת הסתכלות";
$pgv_lang["accesskey_home_page"]			= "1";
$pgv_lang["accesskey_help_content"]			= "2";
$pgv_lang["accesskey_help_current_page"]		= "3";
$pgv_lang["accesskey_contact"]			= "4";

//$pgv_lang["accesskey_individual_details"]		= "I";
$pgv_lang["accesskey_individual_details"]		= "ע";
//$pgv_lang["accesskey_individual_relatives"]		= "R";
$pgv_lang["accesskey_individual_relatives"]		= "מ";
//$pgv_lang["accesskey_individual_notes"]		= "N";
$pgv_lang["accesskey_individual_notes"]		= "ה";
//$pgv_lang["accesskey_individual_sources"]		= "O";
$pgv_lang["accesskey_individual_sources"]		= "ק";
//$pgv_lang["accesskey_individual_media"]		= "A"; //clash with IE addBookmark but not a likely problem
$pgv_lang["accesskey_individual_media"]		= "ד";
//$pgv_lang["accesskey_individual_research_log"]		= "L";
$pgv_lang["accesskey_individual_research_log"]		= "י";
//$pgv_lang["accesskey_individual_pedigree"]		= "P";
$pgv_lang["accesskey_individual_pedigree"]		= "א";
//$pgv_lang["accesskey_individual_descendancy"]		= "D";
$pgv_lang["accesskey_individual_descendancy"]		= "צ";
//$pgv_lang["accesskey_individual_timeline"]		= "T";
$pgv_lang["accesskey_individual_timeline"]		= "ו";
//$pgv_lang["accesskey_individual_relation_to_me"] 	= "M";
$pgv_lang["accesskey_individual_relation_to_me"]		= "ר";
//$pgv_lang["accesskey_individual_gedcom"]		= "G"; //clash with rarely used Netscape/Mozilla Go menu
$pgv_lang["accesskey_individual_gedcom"]		= "ג";

//$pgv_lang["accesskey_family_parents_timeline"]		= "P";
$pgv_lang["accesskey_family_parents_timeline"]		= "א";
//$pgv_lang["accesskey_family_children_timeline"]		= "D";
$pgv_lang["accesskey_family_children_timeline"]		= "צ";
//$pgv_lang["accesskey_family_timeline"]			= "T";
$pgv_lang["accesskey_family_timeline"]			= "ו";
//$pgv_lang["accesskey_family_gedcom"]		= "G"; //clash with rarely used English Netscape/Mozilla English Go menu
$pgv_lang["accesskey_family_gedcom"]			= "ג";

// FAQ Page
$pgv_lang["add_faq_header"] 	= "כותרת ה-FAQ";
$pgv_lang["add_faq_body"] 	= "גוף ה-FAQ";
$pgv_lang["add_faq_order"] 	= "מיקום ה-FAQ";
$pgv_lang["no_faq_items"] 	= "רשימת ה-FAQ-ים ריקה.";
$pgv_lang["position_item"] 	= "מיקום ישות";
$pgv_lang["faq_list"] 	= "רשימת שאלות נפוצות (FAQ)";
$pgv_lang["confirm_faq_delete"] = "האם הנך בטוח שברצונך למחוק כניסת ה-FAQ הזה";
$pgv_lang["preview"] 	=  "הצגה מוקדמת";
$pgv_lang["no_id"] 		= "קוד זיהוי של FAQ לא מפורט!";

// Help search
$pgv_lang["hs_title"] 		= "חפש טכסט עזרה";
$pgv_lang["hs_search"] 		= "חפש";
$pgv_lang["hs_close"] 		= "סגור חלון";
$pgv_lang["hs_results"] 		= "נמצאו תוצאות:";
$pgv_lang["hs_keyword"] 		= "חפש את";
$pgv_lang["hs_searchin"]		= "חפש ב-";
$pgv_lang["hs_searchuser"]		= "עזרה למשתמשים";
$pgv_lang["hs_searchconfig"]		= "עזרה למנהלנים";
$pgv_lang["hs_searchhow"]		= "סוג חיפוש";
$pgv_lang["hs_searchall"]		= "כל המילים";
$pgv_lang["hs_searchany"]		= "מילה כלשהיא";
$pgv_lang["hs_searchsentence"]	= "ביטוי מדויק";
$pgv_lang["hs_intruehelp"]		= "טכסט עזרה בלבד";
$pgv_lang["hs_inallhelp"]		= "כל הטכסט";

// Media import
$pgv_lang["media_import"] 		= "ייבא והסב מדיה";
$pgv_lang["confirm_folder_delete"] 	= "האם אתה בטוח שברצונך למחוק את התיקייה?";
$pgv_lang["choose"] 		= "בחר: ";
$pgv_lang["account_information"] 	= "נתוני קוד משתמש";

//-- Media item "TYPE" sub-field
$pgv_lang["TYPE__audio"] 			= "אודיו";
$pgv_lang["TYPE__book"] 			= "ספר";
$pgv_lang["TYPE__card"] 			= "כרטיס";
$pgv_lang["TYPE__certificate"] 		= "תעודה";
$pgv_lang["TYPE__document"] 		= "מסמך";
$pgv_lang["TYPE__electronic"] 		= "חשמלי";
$pgv_lang["TYPE__fiche"] 			= "פיש";     //"Fiche" -> "Microfiche"
$pgv_lang["TYPE__film"] 			= "סרט";     //"..." -> "Micro..." 
$pgv_lang["TYPE__magazine"] 		= "כתב עת";
$pgv_lang["TYPE__manuscript"] 		= "כתב-יד";
$pgv_lang["TYPE__map"] 			= "מפה";
$pgv_lang["TYPE__newspaper"] 		= "עיתון";
$pgv_lang["TYPE__photo"] 			= "צילום";
$pgv_lang["TYPE__tombstone"] 		= "מצבה";
$pgv_lang["TYPE__video"] 			= "וידאו";

//-- Modules
$pgv_lang["module_error_unknown_action_v2"] 	= "פעולה בלתי ידועה: [פעולה].";
$pgv_lang["module_error_unknown_type"] 	= "סוג מודול בלתי ידוע.";

//if (file_exists($PGV_BASE_DIRECTORY . "languages/lang.he.extra.php")) require $PGV_BASE_DIRECTORY . "languages/lang.he.extra.php";
if (file_exists("languages/lang.he.extra.php")) require "languages/lang.he.extra.php";
?>