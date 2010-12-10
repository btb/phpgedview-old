<?php 
namespace PhpGedcom\model;
/**
 * Name Interface
 * Represents the Name structure in GEDCOM.
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

class Name extends Assertion {
	
	protected $givnName;
	protected $surName;

	public function getGivnName() {
		return $this->givnName;
	}

	public function setGivnName($givnName) {
		$this->givnName = $givnName;
	}

	public function getSurName() {
		return $this->surName;
	}

	public function setSurName($surName) {
		$this->surName = $surName;
	}

	public function equals($n) {
		if (parent::equals($n)) {
			if (strcasecmp($this->getGivnName(),$n.getGivnName())==0) {
				if (strcasecmp($this->getSurName(),$n.getSurName())==0) {
					return true;
				}
			}
		}
		return false;
	}

	public function getSortableName() {
		return $this->surName.", ".$this->givnName;
	}

	public function getFullName(){
		return $this->givnName . " " . $this->surName;
	}

	public function getSortableNameWithDetails() {
		$name = $this->getSortableName();
		$indi = $this->getParentRecord();
		$birt = $indi->getBirthEvent();
		$deat = $indi->getDeathEvent();
		if ($birt!=null || $deat!=null) {
			$name .= " (";
			if ($birt!=null && $birt->getDate()!=null) $name.=$birt->getDate()->getOriginalDate();
			$name .="-";
			if ($deat!=null && $deat->getDate()!=null) $name.=$deat->getDate()->getOriginalDate();
			$name .=")";
		}
		return $name;
	}
}
