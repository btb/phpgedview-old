<?php
namespace PhpGedcom;
/**
 * Loads a gedcom file
 *
 * PhpGedcom Library - Ported from JavaGedcom Library
 * Copyright (C) 2010	John Finlay
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * See LICENSE.txt for the full license.  If you did not receive a
 * copy of the license with this code, you may find a copy online
 * at http://www.opensource.org/licenses/lgpl-license.php
 *
 * @author John Finlay
 */

if (!defined('PGC_PHPGEDCOM')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

use PhpGedcom\model\FileGedcom;
use PhpGedcom\model\Individual;
use PhpGedcom\model\Family;
use PhpGedcom\model\Event;
use PhpGedcom\model\NextId;

class ParseGedcom {
	private $listeners = array();
	private $parsing;
	private $processLevels = array();

	public function __construct() {
		$this->parsing = new Parsing();
	}

	/**
	 * Add a GedcomListener
	 * @param GedcomListener $listener
	 */
	public function addListener($listener) {
		$this->processLevels[$listener->getLevel()] = array();
		$this->processLevels[$listener->getLevel()][$listener->getTag()] = true;
		$this->listeners[] = $listener;
	}

	public function getGedcomListeners() {
		return $this->listeners;
	}

	/**
	 * Loads the file
	 *
	 * @param fileLocation
	 *            location of the file to read.
	 * @return instance of the GedcomFile class containing the information of
	 *         the file that was read in.
	 */
	public function parseFile($fileLocation) {
		//-- alert the user that there are no listeners
		if (count($this->listeners)==0) throw new Exception("No GEDCOM listeners.  File will not be processed.");
		
		$nextids = array();
		$count = 0;
		$gedcomFile = null;
		if (file_exists($fileLocation) && is_file($fileLocation)) {
			$gedcomFile = new FileGedcom();

			$gedcomFile->setFileName($fileLocation);
			$gedcomFile->setFilepath($fileLocation);

			$fp = @fopen($fileLocation, "rb");
			if ($fp) {
				$line = fgets($fp);
				if (preg_match("/0 HEADER/", $line)!=0) {
					throw new Exception("GEDCOM File is using long tag names.\r\nPlease re-export your GEDCOM file and use the short tag names options.");
				}
					
				$bytesread = 0;
				$readRecord = false;
				$recordStack = array();
				// Reads in all lines of code.
				while(($line = fgets($fp)) !== false ) {
					// If the current record is the header or the trailer set
					// readRecord to false
					$bytesread += strlen($line);
					$line = trim($line);
					
					$parts = preg_split("/\s+/", $line);
					$tag = $parts[1];
					$level = $parts[0];

					if (count($recordStack)>0) {
						$lastRecord = array_pop($recordStack);
						$parts = preg_split("/\s+/", $lastRecord[0]);
						$ltag = $parts[1];
						$llevel = $parts[0];
						if ($readRecord) {
							if ($llevel<$level) {
								$lastRecord[] = $line;
								array_push($recordStack, $lastRecord);
							} else {
								//process lastrecord
								$currentRecord = null;
								switch ($llevel) {
									case 0:
										$currentRecord = $this->parsing->processRecord($gedcomFile, $lastRecord);
//									print "New record created ".$currentRecord->getGedcomId()."  :  Memory used: ".(memory_get_usage()/1000)."\n";
										$assertions = $this->generateAssertionsFromRecord($currentRecord, $lastRecord);
										$currentRecord->setAssertions($assertions);
										// -- keep track of the highest GEDCOM ids so that
										// we know what id to use when adding new records
										$l = substr($ltag, 1);
										if (!isset($nextids[$currentRecord->getType()])) {
											$next = new NextId();
											$next->setGedFile($gedcomFile);
											$next->setType($currentRecord->getType());
											$next->setNextid($l);
											$nextids[$currentRecord->getType()] = $next;
										} else {
											$next = $nextids[$currentRecord->getType()];
											if ($l > $next->getNextid())
											$next->setNextid($l);
										}
									break;
									
									case 1:
										$currentRecord = $this->parsing->processAssertion($lastRecord, null);
									break;
									
									default:
										$currentRecord = implode("\r\n", $lastRecord);
									break;
								}
								//-- notify any listeners that a record was received
								foreach($this->listeners as $l) {
									if ($l->getLevel()==$llevel && ($l->getTag()==null || $l->getTag()=='*' || $l->getTag()==$ltag)) {
										$l->notify($currentRecord);
									}
								}
								$readRecord = false;
							}
						}
					}
					
					if (isset($this->processLevels[$level]['*']) || isset($this->processLevels[$level][$tag])) {
						array_push($recordStack, array($line));
						$readRecord = true;
					}
				}
				
				//process lastrecord
				while(count($recordStack)>0) {
					$lastRecord = array_pop($recordStack);
					$parts = preg_split("/\s+/", $lastRecord[0]);
					$ltag = $parts[1];
					$llevel = $parts[0];
					
					$currentRecord = null;
					switch ($llevel) {
						case 0:
							$currentRecord = $this->parsing->processRecord($gedcomFile, $lastRecord);
							$assertions = $this->generateAssertionsFromRecord($currentRecord, $lastRecord);
							$currentRecord->setAssertions($assertions);
							// -- keep track of the highest GEDCOM ids so that
							// we know what id to use when adding new records
							$l = substr($ltag, 1);
							if (!isset($nextids[$currentRecord->getType()])) {
								$next = new NextId();
								$next->setGedFile($gedcomFile);
								$next->setType($currentRecord->getType());
								$next->setNextid($l);
								$nextids[$currentRecord->getType()] = $next;
							} else {
								$next = $nextids[$currentRecord->getType()];
								if ($l > $next->getNextid())
								$next->setNextid($l);
							}
						break;
						
						case 1:
							$currentRecord = $this->parsing->processAssertion($lastRecord, null);
						break;
						
						default:
							$currentRecord = implode("\r\n", $lastRecord);
						break;
					}
					//-- notify any listeners that a record was received
					foreach($this->listeners as $l) {
						if ($l->getLevel()==$llevel && ($l->getTag()==null || $l->getTag()=='*' || $l->getTag()==$ltag)) {
							$l->notify($currentRecord);
						}
					}
				}

				$gedcomFile->setNextids($nextids);
				fclose($fp);
			}

		} else {
			throw new Exception("File not found ".$fileLocation);
		}

		return $gedcomFile;
	}

	/**
	 * Generates assertions from the record
	 *
	 * @param currentRecord
	 *            current record to generate the assertions for
	 * @param lines
	 *            the gedcom lines representing the record
	 * @return
	 */
	private function generateAssertionsFromRecord($currentRecord, &$lines) {
		$assertions = array();
		$sAssertion = array();

		$started = false;
		foreach($lines as $line) {
			if ($line{0}=="0") {

			} else if ($line{0}=="1") {
				if ($started) {
					$parts = preg_split("/\s+/", $sAssertion[0]);
					$tag = $parts[1];
					$assertion = $this->parsing->processAssertion($sAssertion, $currentRecord);
					if ($assertion != null) {
						$assertions[]=$assertion;
					}
				}
				$sAssertion = array();
				$started = true;
				$sAssertion[]=$line;
			} else {
				$started = true;
				$sAssertion[]=$line;
			}
		}
		// -- handle last assertion case
		$assertion = $this->parsing->processAssertion($sAssertion, $currentRecord);
		if ($assertion != null) {
			$assertions[] = $assertion;
		}

		if ($currentRecord!=null) $currentRecord->setAssertions($assertions);
		return $assertions;
	}

}
