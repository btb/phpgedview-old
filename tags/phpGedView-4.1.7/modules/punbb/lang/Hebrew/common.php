<?php

////////////////////////////////////
//Translate By Koko [Benny Elgazar]
//Icq: 1596119 
//Email:BennyElgazar@Gmail.com
////////////////////////////////////


// Determine what locale to use
switch (PHP_OS)
{
	case 'WINNT':
	case 'WIN32':
		$locale = 'hebrew';
		break;

	case 'FreeBSD':
	case 'NetBSD':
	case 'OpenBSD':
		$locale = 'he_IL.ISO8859-8';
		break;

	default:
		$locale = 'he_IL';
		break;
}

// Attempt to set the locale
setlocale(LC_CTYPE, $locale);


// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'		=>	'rtl',	// rtl (Right-To-Left)
//'lang_encoding'			=>	'iso-8859-8-i',
'lang_encoding'			=>	'UTF-8',
'lang_multibyte'		=>	false,

// Notices
'Bad request'			=>	'&#1492;&#1508;&#1504;&#1497;&#1492; &#1513;&#1490;&#1493;&#1497;&#1488;&#1492;. &#1492;&#1511;&#1497;&#1513;&#1493;&#1512; &#1513;&#1492;&#1506;&#1489;&#1497;&#1512; &#1488;&#1493;&#1514;&#1498; &#1500;&#1506;&#1502;&#1493;&#1491; &#1494;&#1492; &#1499;&#1504;&#1512;&#1488;&#1492; &#1493;&#1488;&#1497;&#1504;&#1493; &#1504;&#1499;&#1493;&#1503;.',
'No view'				=>	'&#1488;&#1497;&#1503; &#1500;&#1498; &#1492;&#1490;&#1497;&#1513;&#1492; &#1500;&#1510;&#1508;&#1493;&#1514; &#1489;&#1511;&#1489;&#1493;&#1510;&#1514; &#1491;&#1497;&#1493;&#1503; &#1494;&#1493;.',
'No permission'			=>	'&#1488;&#1497;&#1503; &#1500;&#1498; &#1492;&#1490;&#1497;&#1513;&#1492; &#1500;&#1510;&#1508;&#1493;&#1514; &#1489;&#1506;&#1502;&#1493;&#1491; &#1494;&#1492;.',
'Bad referrer'			=>	'&#1513;&#1490;&#1497;&#1488;&#1492; &#1489; HTTP_REFERER.',

// Topic/forum indicators
'New icon'				=>	'&#1497;&#1513; &#1492;&#1493;&#1491;&#1506;&#1493;&#1514; &#1495;&#1491;&#1513;&#1493;&#1514;',
'Normal icon'			=>	'<!-- -->',
'Closed icon'			=>	'&#1488;&#1513;&#1499;&#1493;&#1500; &#1504;&#1506;&#1493;&#1500;',
'Redirect icon'			=>	'&#1505;&#1504;&#1499;&#1512;&#1503; &#1502;&#1495;&#1491;&#1513;',

// Miscellaneous
'Announcement'			=>	'&#1492;&#1499;&#1512;&#1494;&#1493;&#1514;',
'Options'				=>	'&#1488;&#1508;&#1513;&#1512;&#1493;&#1497;&#1493;&#1514;',
'Actions'				=>	'&#1508;&#1506;&#1493;&#1500;&#1493;&#1514;',
'Submit'				=>	'&#1513;&#1500;&#1495;',	// "name" of submit buttons
'Ban message'			=>	'&#1504;&#1495;&#1505;&#1502;&#1514; &#1502;&#1508;&#1506;&#1497;&#1500;&#1493;&#1514; &#1489;&#1508;&#1493;&#1512;&#1493;&#1501; &#1494;&#1492;.',
'Ban message 2'			=>	'&#1508;&#1506;&#1497;&#1500;&#1493;&#1514;&#1498; &#1514;&#1495;&#1494;&#1493;&#1512; &#1489;',
'Ban message 3'			=>	'&#1492;&#1502;&#1504;&#1492;&#1500;&#1497;&#1501; &#1492;&#1512;&#1488;&#1513;&#1497;&#1501; &#1495;&#1505;&#1502;&#1493; &#1488;&#1493;&#1514;&#1498; &#1502;&#1508;&#1506;&#1497;&#1500;&#1493;&#1514; &#1489;&#1502;&#1506;&#1512;&#1499;&#1514; &#1492;&#1508;&#1493;&#1512;&#1493;&#1502;&#1497;&#1501; &#1502;&#1492;&#1505;&#1497;&#1489;&#1493;&#1514; &#1492;&#1489;&#1488;&#1493;&#1514;:',
'Ban message 4'			=>	'&#1500;&#1499;&#1500; &#1489;&#1506;&#1497;&#1492; &#1488;&#1493; &#1513;&#1488;&#1500;&#1493;&#1514; &#1500;&#1490;&#1489;&#1497; &#1492;&#1495;&#1505;&#1497;&#1502;&#1492; &#1497;&#1513; &#1500;&#1508;&#1504;&#1493;&#1514; &#1500;&#1502;&#1504;&#1492;&#1500; &#1492;&#1512;&#1488;&#1513;&#1497; &#1489;&#1499;&#1514;&#1493;&#1489;&#1514;',
'Never'					=>	'&#1488;&#1507; &#1508;&#1506;&#1501;',
'Today'					=>	'&#1492;&#1497;&#1493;&#1501;',
'Yesterday'				=>	'&#1488;&#1514;&#1502;&#1493;&#1500;',
'Info'					=>	'&#1502;&#1497;&#1491;&#1506;',		// a common table header
'Go back'				=>	'&#1495;&#1494;&#1493;&#1512; &#1488;&#1495;&#1493;&#1512;&#1492;',
'Maintenance'			=>	'&#1514;&#1495;&#1494;&#1493;&#1511;&#1492;',
'Redirecting'			=>	'&#1496;&#1493;&#1506;&#1503; &#1506;&#1502;&#1493;&#1491;',
'Click redirect'		=>	'&#1500;&#1495;&#1509; &#1499;&#1488;&#1503; &#1488;&#1501; &#1488;&#1497;&#1503; &#1489;&#1512;&#1510;&#1493;&#1504;&#1498; &#1500;&#1492;&#1502;&#1514;&#1497;&#1503; &#1506;&#1493;&#1491; (&#1488;&#1493; &#1488;&#1501; &#1492;&#1491;&#1508;&#1491;&#1508;&#1503; &#1513;&#1500;&#1498; &#1500;&#1488; &#1502;&#1506;&#1489;&#1497;&#1512; &#1488;&#1493;&#1514;&#1498; &#1489;&#1488;&#1493;&#1508;&#1503; &#1497;&#1513;&#1497;&#1512;)',
'on'					=>	'&#1508;&#1506;&#1497;&#1500;',		// as in "BBCode is on"
'off'					=>	'&#1500;&#1488; &#1508;&#1506;&#1497;&#1500;',
'Invalid e-mail'		=>	'&#1499;&#1514;&#1493;&#1489;&#1514; &#1492;&#1491;&#1493;&#1488;&#1512; &#1492;&#1488;&#1500;&#1511;&#1496;&#1512;&#1493;&#1504;&#1497; &#1513;&#1492;&#1494;&#1504;&#1514; &#1488;&#1497;&#1504;&#1492; &#1514;&#1511;&#1497;&#1504;&#1492;.',
'required field'		=>	'&#1492;&#1493;&#1488; &#1513;&#1491;&#1492; &#1491;&#1512;&#1493;&#1513; &#1489;&#1496;&#1493;&#1508;&#1505;.',	// for javascript form validation
'Last post'				=>	'&#1492;&#1493;&#1491;&#1506;&#1492; &#1488;&#1495;&#1512;&#1493;&#1504;&#1492;',
'by'					=>	'&#1506;&#1500; &#1497;&#1491;&#1497;',	// as in last post by someuser
'New posts'				=>	'&#1495;&#1491;&#1513;&nbsp;&#1492;&#1493;&#1491;&#1506;&#1493;&#1514;',	// the link that leads to the first new post (use &nbsp; for spaces)
'New posts info'		=>	'&#1506;&#1489;&#1493;&#1512; &#1500;&#1492;&#1493;&#1491;&#1506;&#1492; &#1492;&#1512;&#1488;&#1513;&#1493;&#1504;&#1492; &#1489;&#1488;&#1513;&#1499;&#1493;&#1500;.',	// the popup text for new posts links
'Username'				=>	'&#1513;&#1501; &#1502;&#1513;&#1514;&#1502;&#1513;',
'Password'				=>	'&#1505;&#1497;&#1505;&#1502;&#1492;',
'E-mail'				=>	'&#1491;&#1493;&#1488;&#1512; &#1488;&#1500;&#1511;&#1496;&#1512;&#1493;&#1504;&#1497;',
'Send e-mail'			=>	'&#1513;&#1500;&#1495; &#1492;&#1493;&#1491;&#1506;&#1492; &#1500;&#1491;&#1493;&#1488;&#1512; &#1492;&#1488;&#1500;&#1511;&#1496;&#1512;&#1493;&#1504;&#1497;',
'Moderated by'			=>	'&#1502;&#1504;&#1493;&#1492;&#1500; &#1506;"&#1497;',
'Registered'			=>	'&#1512;&#1513;&#1493;&#1502;&#1497;&#1501;',
'Subject'				=>	'&#1504;&#1493;&#1513;&#1488;',
'Message'				=>	'&#1492;&#1493;&#1491;&#1506;&#1492;',
'Topic'					=>	'&#1488;&#1513;&#1499;&#1493;&#1500;',
'Forum'					=>	'&#1511;&#1489;&#1493;&#1510;&#1493;&#1514; &#1491;&#1497;&#1493;&#1503;',
'Posts'					=>	'&#1492;&#1493;&#1491;&#1506;&#1493;&#1514;',
'Replies'				=>	'&#1514;&#1490;&#1493;&#1489;&#1493;&#1514;',
'Author'				=>	'&#1499;&#1493;&#1514;&#1489;',
'Pages'					=>	'&#1506;&#1502;&#1493;&#1491;&#1497;&#1501;',
'BBCode'				=>	'BBCode',	// You probably shouldn't change this
'img tag'				=>	'&#1514;&#1488;&#1490; &#1492;&#1514;&#1502;&#1493;&#1504;&#1492;',
'Smilies'				=>	'&#1502;&#1495;&#1493;&#1493;&#1492;',
'and'					=>	'&#1493;',
'Image link'			=>	'&#1514;&#1502;&#1493;&#1504;&#1492;',	// This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'					=>	'&#1499;&#1514;&#1489;',	// For [quote]'s
'Code'					=>	'&#1511;&#1493;&#1491;',		// For [code]'s
'Mailer'				=>	'&#1502;&#1497;&#1497;&#1500;&#1512;',	// As in "MyForums Mailer" in the signature of outgoing e-mails
'Important information'	=>	'&#1502;&#1497;&#1491;&#1506; &#1495;&#1513;&#1493;&#1489;',
'Write message legend'	=>	'&#1499;&#1514;&#1493;&#1489; &#1488;&#1514; &#1492;&#1493;&#1491;&#1506;&#1514;&#1498; &#1493;&#1513;&#1500;&#1495;',

// Title
'Title'					=>	'&#1513;&#1501;',
'Member'				=>	'&#1495;&#1489;&#1512;',	// Default title
'Moderator'				=>	'&#1502;&#1504;&#1492;&#1500;',
'Administration'			=>	'&#1502;&#1504;&#1492;&#1500; &#1512;&#1488;&#1513;&#1497;',
'Banned'				=>	'&#1495;&#1505;&#1493;&#1501;',
'Guest'					=>	'&#1488;&#1493;&#1512;&#1495;',

// Stuff for include/parser.php
'BBCode error'			=>	'The BBCode syntax in the message is incorrect.',
'BBCode error 1'		=>	'&#1495;&#1505;&#1512; &#1514;&#1488;&#1490; &#1492;&#1492;&#1514;&#1495;&#1500;&#1492; &#1500; [/quote].',
'BBCode error 2'		=>	'&#1495;&#1505;&#1512; &#1514;&#1488;&#1490; &#1492;&#1505;&#1497;&#1493;&#1501; &#1500; [code].',
'BBCode error 3'		=>	'&#1495;&#1505;&#1512; &#1514;&#1488;&#1490; &#1492;&#1492;&#1514;&#1495;&#1500;&#1492; &#1500; [/code].',
'BBCode error 4'		=>	'&#1495;&#1505;&#1512; &#1514;&#1488;&#1490; &#1488;&#1495;&#1491; &#1488;&#1493; &#1497;&#1493;&#1514;&#1512; &#1500; [quote].',
'BBCode error 5'		=>	'&#1495;&#1505;&#1512; &#1514;&#1488;&#1490; &#1488;&#1495;&#1491; &#1488;&#1493; &#1497;&#1493;&#1514;&#1512; &#1500; [/quote].',

// Stuff for the navigator (top of every page)
//'Index'					=>	'&#1506;&#1502;&#1493;&#1491; &#1512;&#1488;&#1513;&#1497;',
'Index'					=>	'&#1506;&#1502;&#1493;&#1491; &#1512;&#1488;&#1513;&#1497;',
'User list'				=>	'&#1512;&#1513;&#1497;&#1502;&#1514; &#1502;&#1513;&#1514;&#1502;&#1513;&#1497;&#1501;',
'Rules'					=>  '&#1495;&#1493;&#1511;&#1497;&#1501;',
'Search'				=>  '&#1495;&#1497;&#1508;&#1493;&#1513;',
'Register'				=>  '&#1492;&#1512;&#1513;&#1502;&#1492;',
'Login'					=>  '&#1492;&#1514;&#1495;&#1489;&#1512;',
'Not logged in'			=>  '&#1488;&#1497;&#1504;&#1498; &#1502;&#1495;&#1493;&#1489;&#1512; &#1500;&#1502;&#1506;&#1512;&#1499;&#1514; &#1492;&#1508;&#1493;&#1512;&#1493;&#1502;&#1497;&#1501;.',
'Profile'				=>	'&#1499;&#1512;&#1496;&#1497;&#1505; &#1488;&#1497;&#1513;&#1497;',
'Logout'				=>	'&#1492;&#1514;&#1504;&#1514;&#1511;',
'Logged in as'			=>	'&#1502;&#1495;&#1493;&#1489;&#1512; &#1499;',
'Admin'					=>	'&#1502;&#1502;&#1513;&#1511; &#1504;&#1497;&#1492;&#1493;&#1500; &#1512;&#1488;&#1513;&#1497;',
'Last visit'			=>	'&#1489;&#1497;&#1511;&#1493;&#1512;&#1498; &#1492;&#1488;&#1495;&#1512;&#1493;&#1503;',
'Show new posts'		=>	'&#1492;&#1510;&#1490; &#1492;&#1493;&#1491;&#1506;&#1493;&#1514; &#1495;&#1491;&#1513;&#1493;&#1514; &#1502;&#1488;&#1494; &#1489;&#1497;&#1511;&#1493;&#1512;&#1497; &#1492;&#1488;&#1495;&#1512;&#1493;&#1503;',
'Mark all as read'		=>	'&#1505;&#1502;&#1503; &#1488;&#1514; &#1499;&#1500; &#1492;&#1488;&#1513;&#1499;&#1493;&#1500;&#1493;&#1514; &#1499;&#1504;&#1511;&#1512;&#1488;&#1493;',
'Link separator'		=>	'',	// The text that separates links in the navigator

// Stuff for the page footer
'Board footer'			=>	'&#1494;&#1499;&#1493;&#1497;&#1493;&#1514; &#1492;&#1508;&#1493;&#1512;&#1493;&#1501;',
'Search links'			=>	'&#1511;&#1497;&#1513;&#1493;&#1512;&#1497; &#1495;&#1497;&#1508;&#1493;&#1513;',
'Show recent posts'		=>	'&#1492;&#1510;&#1490; &#1492;&#1493;&#1491;&#1506;&#1493;&#1514; &#1495;&#1491;&#1513;&#1493;&#1514;',
'Show unanswered posts'	=>	'&#1492;&#1510;&#1490; &#1492;&#1493;&#1491;&#1506;&#1493;&#1514; &#1500;&#1500;&#1488; &#1502;&#1506;&#1504;&#1492;',
'Show your posts'		=>	'&#1492;&#1510;&#1490; &#1488;&#1514; &#1499;&#1500; &#1492;&#1493;&#1491;&#1506;&#1493;&#1514;&#1497;',
'Show subscriptions'	=>	'&#1492;&#1510;&#1490; &#1488;&#1514; &#1492;&#1492;&#1493;&#1491;&#1506;&#1493;&#1514; &#1513;&#1488;&#1504;&#1497; &#1506;&#1493;&#1511;&#1489; &#1488;&#1495;&#1512;&#1497;&#1492;&#1501;',
'Jump to'				=>	'&#1506;&#1489;&#1493;&#1512; &#1500;&#1511;&#1489;&#1493;&#1510;&#1514; &#1492;&#1491;&#1497;&#1493;&#1503;',
'Go'					=>	' &#1506;&#1489;&#1493;&#1512; ',		// submit button in forum jump
'Move topic'			=>  '&#1492;&#1506;&#1489;&#1512; &#1488;&#1513;&#1499;&#1493;&#1500;',
'Open topic'			=>  '&#1508;&#1514;&#1495; &#1488;&#1513;&#1499;&#1493;&#1500;',
'Close topic'			=>  '&#1504;&#1506;&#1500; &#1488;&#1513;&#1499;&#1493;&#1500;',
'Unstick topic'			=>  '&#1489;&#1496;&#1500; &#1504;&#1506;&#1497;&#1510;&#1514; &#1488;&#1513;&#1499;&#1493;&#1500;',
'Stick topic'			=>  '&#1504;&#1506;&#1509; &#1488;&#1513;&#1499;&#1493;&#1500;',
'Moderate forum'		=>	'&#1504;&#1492;&#1500; &#1511;&#1489;&#1493;&#1510;&#1514; &#1491;&#1497;&#1493;&#1503;',
'Delete posts'			=>	'&#1492;&#1505;&#1512;&#1492; &#1513;&#1500; &#1497;&#1493;&#1514;&#1512; &#1502;&#1492;&#1493;&#1491;&#1506;&#1492; &#1488;&#1495;&#1514; &#1489;&#1493; &#1494;&#1502;&#1504;&#1497;&#1514;',
'Debug table'			=>	'&#1502;&#1497;&#1491;&#1506; &#1495;&#1497;&#1508;&#1493;&#1513; &#1490;&#1497;&#1488;&#1493;&#1514;',

// For extern.php RSS feed
'RSS Desc Active'		=>	'&#1492;&#1488;&#1513;&#1499;&#1493;&#1500;&#1493;&#1514; &#1492;&#1495;&#1491;&#1513;&#1497;&#1501; &#1492;&#1508;&#1506;&#1497;&#1500;&#1497;&#1501; &#1489;&#1497;&#1493;&#1514;&#1512; &#1499;',	// board_title will be appended to this string
'RSS Desc New'			=>	'&#1492;&#1488;&#1513;&#1499;&#1493;&#1500;&#1493;&#1514; &#1492;&#1495;&#1491;&#1513;&#1497;&#1501; &#1499;',					// board_title will be appended to this string
'Posted'				=>	'&#1504;&#1513;&#1500;&#1495;'	// The date/time a topic was started

);
