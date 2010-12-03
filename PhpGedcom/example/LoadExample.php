<?php
$oldtime = time();
require_once '../PhpGedCom.php';

print "Code loaded in ".(time()-$oldtime)." seconds\n";
print "Memory used: ".memory_get_usage()."\n";

$loader = new ParseGedcom();
$filename = "C:\\Users\\jfinlay\\Workspace\\test.ged";
//-- listen for all level 0 records
$listener = new DefaultGedcomListener();
$listener->setLevel(0);
$listener->setTag("*");
$loader->addListener($listener);

//-- parse the gedcom file
print "Loading Gedcom...";
$gedcom = $loader->parseFile($filename);
$gedcom->setRecords($listener->getRecords());
print "Gedcom loaded in ".(time()-$oldtime)." seconds\n";
print "Max Memory used: ".memory_get_peak_usage()."\n";
print "Memory used: ".memory_get_usage()."\n";
print count($listener->getRecords())." total records\n";

unset($listener);

//-- get the GEDCOM Record
$r = $gedcom->getRecordById("I1");
if ($r) {
	//-- iterate over all of the records assertions and print them out
	foreach ($r->getAssertions() as $a) {
		//-- handle events
		if ($a instanceof Event) {
			print($a->getType() . ": " . $a->getDetail()."\n");
			if ($a->getDate()!=null) print("  DATE : " . $a->getDate()->getOriginalDate()."\n");
			if ($a->getPlace()!=null) print("  PLAC : " . $a->getPlace()."\n");
		}
		//-- names
		else if ($a instanceof Name) {
			print($a->getType() . ": "
			. $a->getFullName()."\n");
		}
		//-- Assertion Links
		else if ($a instanceof AssertionLink) {
			print($a->getType() . ": "
			. $a->getReferenceId()."\n");
		}
	}

} else {
	print "Record not found";
}
unset($a);
unset($r);
unset($gedcom);
unset($loader);
print "Memory used: ".memory_get_usage()."\n";
var_dump($GLOBALS);
