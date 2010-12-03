<?php 
namespace PhpGedcom;
/**
 * GEDCOM Parsing Utility class
 * 
 * PhpGedcom Library - Ported from JavaGedcom Library
 * Copyright (C) 2010	John Finlay
 * 
 * This library is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Lesser General Public License as published by the Free
 * Software Foundation; either version 2.1 of the License, or (at your option)
 * any later version.
 * 
 * This library is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Lesser General Public License for more
 * details.
 * 
 * See LICENSE.txt for the full license. If you did not receive a copy of the
 * license with this code, you may find a copy online at
 * http://www.opensource.org/licenses/lgpl-license.php
 * 
 * @author John Finlay
 */

if (!defined('PGC_PHPGEDCOM')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

class Parsing {

	private $classTypes;
	private $dateClass = "PhpGedcom\\GedcomDate";

	public function getClassTypes() {
		return classTypes;
	}

	public function setClassTypes($classTypes) {
		$this->classTypes = $classTypes;
		if (isset($this->classTypes["DATE"])) $this->dateClass = $this->classTypes["DATE"];
	}

	/**
	 * Get the value of any GEDCOM tag if the tag asked for is CHAN:DATE and we
	 * are searching in the GEDCOM record CHAN:_FSID, 2, a.getGedcomrecord(),
	 * "", false 1 CHAN 2 DATE 12 Jan 1111 This method should return "12 Jan
	 * 1111"
	 * 
	 * @param tag
	 *            The GEDCOM tag to get such as "CHAN", it may be a colon
	 *            delimited list of tags "CHAN:DATE"
	 * @param level
	 *            The GEDCOM line level of the starting tag
	 * @param gedcomstring
	 *            The GEDCOM snippet to look for the value in
	 * @param truncate
	 *            This is for compliance with the PGV parsing API, should be an
	 *            empty string
	 * @param convert
	 *            This is for compliance with the PGV parsing API, should be
	 *            false
	 * @return
	 */
	public static function getGedcomValue($tag, $level,
			$gedcomstring, $truncate, $convert) {
		$tags = preg_split("/:/", $tag);
		$lines = preg_split("/\r?\n/", $gedcomstring);
		$cl = count($lines);
		for ($i = 0; $i < $cl; $i++) {
			$l = $lines[$i];
			if (preg_match("/^".$level." " . $tags[0]."/", $l)>0) {
				return Parsing::get_gedcom_value($tags, $level, $lines, $i + 1, 1);
			}
		}
		return "";
	}

	/**
	 * Helper function to recursively find the value for the given tags
	 * 
	 * @param tags
	 *            An array of tags to find the value for
	 * @param level
	 *            The GEDCOM line level of the starting tag
	 * @param lines
	 *            An array of GEDCOM lines to look in
	 * @param lineNumber
	 *            The starting line number in the lines array
	 * @param tagNumber
	 *            The current tag to use in the tags array
	 * @return
	 */
	public static function get_gedcom_value($tags, $level,
			&$lines, $lineNumber, $tagNumber) {
		$ct=count($tags); 
		if ($tagNumber > $ct)
			return "";
		if ($tagNumber == $ct) {
			return trim(substr($lines[$lineNumber - 1], strpos($lines[$lineNumber - 1], " ", 3)));
		}
		$cl = count($lines);
		for ($i = $lineNumber; $i < $cl; $i++) {
			$l = $lines[$i];
			$check = $level . " " . $tags[$tagNumber];
			if (strpos($l, $check)===0) {
				if ($tagNumber >= $ct - 1)
					return trim(substr($l, strlen($check)));
				return Parsing::get_gedcom_value($tags, $level, $lines, $i + 1,
						$tagNumber + 1);
			}
		}
		return "";
	}

	/**
	 * This method gets the ID and ID type from the line of text that is beging
	 * passed, then it returns them both. =) Author: Ashley (02/25/2008)
	 */
	public function getAssertionLink(&$lineOfText) {
		$al = null;
		if ($this->classTypes!=null && isset($this->classTypes["AssertionLink"]))
			$al = new $this->classTypes["AssertionLink"]();
		else
			$al = new AssertionLink();

		$ct = preg_match("/1 ([^\\s]+) @([^@]+)@/", $lineOfText[0], $matches);
		if ($ct>0) {
			$al->setType($matches[1]);
			$al->setReferenceId($matches[2]);
			return $al;
		}
		return null;
	}

	/**
	 * 
	 * public static void main(String[] args) { String[] s = { "2 GIVN
	 * Trevor","2 SURN Christiansen" ,"1 NAME Michael Jack /McMullin/" }; Name n =
	 * getName(s); System.out.println("Given name: " + n.first);
	 * System.out.println("Surname: " + n.last); }
	 */
	public function getName(&$lines) {

		$hasGIVN = false;
		$hasSURN = false;

		// Create the Name object to be returned
		$name = null;
			if ($this->classTypes!=null && isset($this->classTypes["Name"]))
				$name = new $this->classTypes["Name"]();
			else
				$name = new Name();
		$name->setGivnName(null);
		$name->setSurName(null);
		$name->setType("NAME");

		$tags = array( "GIVN" );
		$givn = Parsing::get_gedcom_value($tags, 2, $lines, 0, 0);
		if ($givn!="") {
			$name->setGivnName($givn);
			$hasGIVN = true;
		}
		$tags[0] = "SURN";
		$surn = Parsing::get_gedcom_value($tags, 2, $lines, 0, 0);
		if ($surn!="") {
			$name->setSurName($surn);
			$hasSURN = true;
		}
		/**
		 * If a given name and surname have been found and added the Name object
		 * is returned. Otherwise take the stored array and parse to get the
		 * first name last name and possible middle names out and store them in
		 * the Name object and return it.
		 */
		if ($hasGIVN && $hasSURN) {
			return $name;
		} else {
			$tags[0] = "NAME";
			$gname = Parsing::get_gedcom_value($tags, 1, $lines, 0, 0);

			$ct = preg_match("~(.*)/(.*)/~", $gname, $matches);
			if ($ct>0) {
				$name->setGivnName(trim($matches[1]));
				$name->setSurName(trim($matches[2]));
			}
		}

		if ($name->getGivnName() == null) {
			$name->setGivnName("Unknown");
		}

		if ($name->getSurName() == null) {
			$name->setSurName("Unknown");
		}
		return $name;
	}

	/**
	 * 
	 * accepts a string array of Gedcom assertions. It will match specific patterns to pull out
	 * the Type, Detail, Date and Place and a object of type Event is created.
	 * This Event is then returned to the calling class.
	 * 
	 * @param e
	 *            array list of strings
	 * @return
	 */
	public function getEvent(&$e) {
		$newEvent = null;
			if ($this->classTypes!=null && isset($this->classTypes["Event"]))
				$newEvent = new $this->classTypes["Event"]();
			else
				$newEvent = new Event();
		
		foreach ($e as $s) {
			// pattern to capture type and detail
			$ct1 = preg_match("/1 (\\S+)(.*)/", $s, $matches1);

			// pattern to capture date
			$ct2 = preg_match("/2 DATE (.*)/", $s, $matches2);
			// pattern to capture place
			$ct3 = preg_match("/2 PLAC (.*)/", $s, $matches3);

			if ($ct1>0) {
				$newEvent->setType(trim($matches1[1]));
				$newEvent->setDetail(trim($matches1[2]));
			}
			if ($ct2>0) {
				$date = null;
                $date = new $this->dateClass(trim($matches2[1]));
				$newEvent->setDate($date);
			}
			if ($ct3>0) {
				$newEvent->setPlace(trim($matches3[1]));
			}
		}
		return $newEvent;
	}

	public function getRemoteLink(&$lines) {
		$link = null;
			if ($this->classTypes!=null && isset($this->classTypes["RemoteLink"]))
				$link = new $this->classTypes["RemoteLink"]();
			else
				$link = new RemoteLink();
		$rfn = $lines[0];
		$value = substr($rfn, 6);
		$parts = preg_split("/:/", $value);
		$link->setRemoteId($parts[1]);
		$link->setDataSourceId($parts[0]);
		$link->setType("RFN");
		return $link;
	}

	/**
	 * Processes the record - gets the information from the record.
	 * 
	 * @param gedcomFile
	 *            the file that this record is associated with
	 * @param array
	 *            the lines that is the record
	 * @return the object representing the record.
	 */
	public function processRecord(&$gedcomFile, &$array) {
		// parses the id and type for the new record.
		$s = preg_split("/ /", $array[0]);
		$type = $s[1];
		if (count($s)>2) {
			$type = $s[2];
		} 
		$currentRecord = null;
			if ($this->classTypes!=null) {
				$recordType = "Record";
				if ($this->classTypes[$type] != null) $recordType = $type;
				if ($this->classTypes[$recordType] != null)
					$currentRecord = new $this->classTypes[$recordType]();
			}
		if ($currentRecord==null) {
			if ($type=="INDI") $currentRecord = new Individual();
			else if ($type=="FAM") $currentRecord = new Family();
			else $currentRecord = new Record();
		}
		$currentRecord->setType($type);
		$currentRecord->setFile($gedcomFile);
		$currentRecord->setGedcomId(preg_replace("/@/", "", $s[1]));

		return $currentRecord;
	}

	/**
	 * Processes the assertion
	 * 
	 * @param assertion
	 *            the lines of the assertion
	 * @param currentRecord
	 *            the record this assertion is associated with
	 * @return the assertion
	 */
	public function processAssertion(&$assertion, &$currentRecord) {
		
		if (count($assertion)==0) return null;
		
		$rtnAssertion = null;
		$sb = "";

		foreach ($assertion as $l) {
			$sb .= $l . "\r\n";
		}

		$ct = preg_match("/1 ([^\\s]+) @([^@]+)@/", $assertion[0], $matches);
		if ($ct>0) {// AssertionLink
			$rtnAssertion = $this->getAssertionLink($assertion);
			if ($rtnAssertion != null) {
				$rtnAssertion->setGedcom($sb);
				$rtnAssertion->setParentRecord($currentRecord);
			}
		} else if (strstr($assertion[0], "1 NAME")!==false) {// Name
			$rtnAssertion = $this->getName($assertion);

			$rtnAssertion->setGedcom($sb);
			$rtnAssertion->setParentRecord($currentRecord);
			
		} else if (strstr($assertion[0], "1 RFN ")!==false) {
			$rtnAssertion = $this->getRemoteLink($assertion);
			$rtnAssertion->setGedcom($sb);
			$rtnAssertion->setParentRecord($currentRecord);
		} else {// Event
			$rtnAssertion = $this->getEvent($assertion);
			$rtnAssertion->setGedcom($sb);
			$rtnAssertion->setParentRecord($currentRecord);
		}
		if ($rtnAssertion!=null) {
			$rtnAssertion->setFsId(Parsing::getGedcomValue("CHAN:_FSID", 2, $sb, "", false));
			$rtnAssertion->setVersion(Parsing::getGedcomValue("CHAN:VERS", 2, $sb, "", false));
			$resn = Parsing::getGedcomValue("RESN", 2, $sb, "", false);
			if ($resn=="locked") $rtnAssertion->setModifiable(false);
			else $rtnAssertion->setModifiable(true);
		}
		return $rtnAssertion;
	}
}
