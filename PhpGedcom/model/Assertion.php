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

abstract class Assertion {
	protected $id = null;
	protected $type = null;
	protected $gedcom = null;
	protected $fsId = null;
	protected $parentRecord = null;
	protected $changeCode = CHANGE_NONE;
	protected $values = null;
	protected $version = null;
	protected $modifiable = null;
	
	public function getFsId() {
		return $this->fsId;
	}

	public function setFsId($fsId) {
		$this->fsId = $fsId;
	}

	public function getId() {
		return $this->id;
	}
	
	public function setId($id) {
		$this->id = $id;
	}

	public function getType() {
		return $this->type;
	}
	
	public function setType($type) {
		$this->type = $type;
	}

	public function getGedcom() {
		return $this->gedcom;
	}

	public function setGedcom($gedcom) {
		$this->gedcom = $gedcom;
	}

	public function equals($arg0) {
		if ($arg0 instanceof Assertion) {
			if (strcasecmp($this->getType(), $arg0->getType())) {
				return true;
			}
		}
		return false;
	}
	
	public function compareTo($args0) {
		if ($args0 instanceof Assertion) {
			$num = strcmp($this->getType(), $args0->getType());
			if ($num != 0){
				return $num;
			} else {
				return strcmp($this->getGedcom(), $args0->getGedcom());
			}
		}
		return 1;
	}

	public function getParentRecord() {
		return $this->parentRecord;
	}

	public function setParentRecord(Record $parentReccord) {
		$this->parentRecord = $parentReccord;
	}

	public function getChangeCode() {
		return $this->changeCode;
	}

	public function setChangeCode($changeCode) {
		$this->changeCode = $changeCode;
	}
	
	/**
	 * get the GEDCOM value of a particular tag
	 * @param string $tag
	 * @return string
	 */
	public function getValue($tag) {
		if ($this->values==null) {
			$this->values = array();
			$ct = preg_match_all("~\n2\\s(\\w+)\\s*(.*)~", $this->getGedcom(), $matches, PREG_SET_ORDER);
			foreach($matches as $match) {
				$this->values[$match[1]] = preg_replace("/@/", "", $match[2].trim());
			}
		}
		if (isset($this->values[$tag])) return $this->values[$tag];
		return null;
    }
	
	public function getVersion() {
		return $this->version;
	}

	public function setVersion($version) {
		$this->version = $version;
	}

	public function isModifiable() {
		return $this->modifiable;
	}

	public function setModifiable($m) {
		$this->modifiable = $m;
	}
}
