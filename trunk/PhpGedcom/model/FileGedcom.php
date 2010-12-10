<?php
namespace PhpGedcom\model;
/**
 * Represents a gedcom file
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
 
class FileGedcom extends DataSource implements Gedcom {
	protected $id;
	protected $fileName;
	protected $filepath;
	protected $title;
	protected $records = array();
	protected $nextids;

	public function getRecords() {
		return $this->records;
	}

	public function setRecords(array $records) {
		$this->records = $records;
	}

	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function getFileName() {
		return $this->fileName;
	}

	public function setFileName($fileName) {
		$this->fileName = $fileName;
	}

	public function getFilepath() {
		return $this->filepath;
	}

	public function setFilepath($filepath) {
		$this->filepath = $filepath;
	}

	public function getTitle() {
		return $this->title;
	}

	public function setTitle($title) {
		$this->title = $title;
	}
	
	public function getNextids() {
		return $this->nextids;
	}

	public function setNextids(array $nextids) {
		$this->nextids = $nextids;
	}
	
	/**
	 * (non-PHPdoc)
	 * @see PhpGedcom\model.Gedcom::getRecordById()
	 */
	public function getRecordById($id) {
		if (isset($this->records[$id])) return $this->records[$id];
		return null;
	}
	
	/**
	 * (non-PHPdoc)
	 * @see PhpGedcom\model.Gedcom::addRecord()
	 */
	public function addRecord(Record $r) {
		$r->setFile($this);
		$this->records[$r->getGedcomId()] = $r;
		return $r->getGedcomId();
	}
	
	public function authenticateDataSource($username, $password) {
		$this->setAuthenticated(true);
	}

	/**
	 * (non-PHPdoc)
	 * @see PhpGedcom\model.DataSource::addRemoteLinkAssertion()
	 */
	public function addRemoteLinkAssertion($record, $id) {
		$link = new RemoteLink();
		$link->setDataSourceId($this->getRecord()->getGedcomId());
		$link->setGedcom("1 RFN "
						. $this->getRecord()->getGedcomId()
						. ":" . $id."\r\n");
		$link->setParentRecord($record);
		$link->setRemoteId($id);
		$link->setType("RFN");
		$record->addAssertion($link);
		// -- add REFN assertion
		$refn = new Event();
		$refn->setDetail($id);
		$refn->setType("REFN");
		$refn->setGedcom("1 REFN " . $id . "\r\n2 TYPE GEDCOM\r\n");
		$refn->setParentRecord($record);
		$record->addAssertion($refn);
	}

	/**
	 * (non-PHPdoc)
	 * @see PhpGedcom\model.DataSource::deleteRecord()
	 */
	public function deleteRecord(Record $record) {
		$temp = array();
		foreach($this->records as $r) {
			if ($r->getGedcomId()!=$record->getGedcomId()) $temp[] = $r;
		}
		$ret = true;
		if (count($temp)==count($this->records)) $ret = false;
		$this->records = $temp;
		return $ret;
	}

	public function findLinkById($gedcomId) {
		throw new Exception("not implemented");
	}

	public function getDataType() {
		return "GEDCOM";
	}

	public function getRemoteLinks() {
		throw new Exception("not implemented");
	}

	public function match($params) {
		throw new Exception("not implemented");
	}

	public function search($params) {
		throw new Exception("not implemented");
	}

	/**
	 * (non-PHPdoc)
	 * @see PhpGedcom\model.Gedcom::updateRecord()
	 */
	public function updateRecord($record) {
		$toremove = array();
		foreach($record->getAssertions() as $a) {
			if ($a->getChangeCode()==Assertion::CHANGE_DELETED) {
				$toremove[]=$a;
			}
		}
		foreach($toremove as $a) {
			$record->removeAssertion($a);
		}
		return "";
	}
}
