<?php
// define use of the library
define('PGC_PHPGEDCOM', '');

/**
 * Field to suggest that an assertion has not changed
 */
define('CHANGE_NONE', 0);
/**
 * Field to suggest that an assertion has changed
 */
define('CHANGE_UPDATED', 1);
/**
 * Field to suggest that an assertion has been marked for deletion
 */
define('CHANGE_DELETED', 2);


// load required interfaces
require_once 'model/Assertion.php';
require_once 'model/AssertionLink.php';
require_once 'model/Record.php';
require_once 'model/DataSource.php';
require_once 'model/Event.php';
require_once 'model/Family.php';
require_once 'model/Gedcom.php';
require_once 'model/GedcomDate.php';
require_once 'model/Individual.php';
require_once 'model/IndividualComparator.php';
require_once 'model/Name.php';
require_once 'model/NextId.php';
require_once 'model/RelationshipLabeler.php';
require_once 'model/RemoteLink.php';

require_once 'model/file/FileAssertion.php';
require_once 'model/file/FileAssertionLink.php';
require_once 'model/file/FileEvent.php';
require_once 'model/file/FileFamily.php';
require_once 'model/file/FileGedcom.php';
require_once 'model/file/FileIndividual.php';
require_once 'model/file/FileName.php';
require_once 'model/file/FileNextId.php';
require_once 'model/file/FileRecord.php';
require_once 'model/file/FileRemoteLink.php';

require_once 'parse/GedcomListener.php';
require_once 'parse/ParseGedcom.php';
require_once 'parse/DefaultGedcomListener.php';
require_once 'parse/Parsing.php';
