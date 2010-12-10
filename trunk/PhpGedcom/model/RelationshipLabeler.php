<?php 
namespace PhpGedcom\model;
/**
 * A base GEDCOM record
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

require_once 'Event.php';

class RelationshipLabeler {
	private $record;
	private $gender;
	private $marriage;
	private $type;

	function __construct($r=null, $t="", $m=null) {
		$this->record = $r;
		$this->gender = $r->getSingleAssertionByType("SEX");
		$this->marriage = $m;
		$this->type = $t;
	}
	public function getUpLabel() {
		if ($this->record==null || $this->type==null) return "Unknown";
		if ($this->gender==null) {
			$this->gender = new Event();
			$this->gender->setDetail("U");
		}
		if ($this->type=="HUSB") {
			if ($this->gender->getDetail()=="F") return "Mother";
			return "Father";
		}
		else if ($this->type=="WIFE") {
			if ($this->gender->getDetail()=="M") return "Father";
			return "Mother";
		}
		else if ($this->type=="CHIL") {
			if ($this->gender->getDetail()=="F") return "Sister";
			if ($this->gender->getDetail()=="M") return "Brother";
			return "Sibling";
		}
		return "Unknown";
	}
	public function getDownLabel() {
		if ($this->record==null || $this->type==null) return "Unknown";
		if ($this->gender==null) {
			$this->gender = new Event();
			$this->gender->setDetail("U");
		}
		if ($this->type=="HUSB") {
			if ($this->marriage==null) {
				if ($this->gender->getDetail()=="F") return "Female Partner";
			}
			else {
				if ($this->gender->getDetail()=="F") return "Wife";
				if ($this->gender->getDetail()=="M") return "Husband";
			}
			return "Male Partner";
		}
		else if ($this->type=="WIFE") {
			if ($this->marriage==null) {
				if ($this->gender->getDetail()=="M") return "Male Partner";
			}
			else {
				if ($this->gender->getDetail()=="F") return "Wife";
				if ($this->gender->getDetail()=="M") return "Husband";
			}
			return "Female Partner";
		}
		else if ($this->type=="CHIL") {
			if ($this->gender->getDetail()=="F") return "Daughter";
			if ($this->gender->getDetail()=="M") return "Son";
			return "Child";
		}
		return "Unknown";
	}
	public function getRecord() {
		return $this->record;
	}
	public function setRecord($record) {
		$this->record = $record;
	}
	public function getGender() {
		return $this->gender;
	}
	public function setGender($gender) {
		$this->gender = $gender;
	}
	public function getMarriage() {
		return $this->marriage;
	}
	public function setMarriage($marriage) {
		$this->marriage = $marriage;
	}
	public function getType() {
		return $this->type;
	}
	public function setType($type) {
		$this->type = $type;
	}
	
}
?>