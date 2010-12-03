<?php 
/**
 * Represents an Family
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
 
require_once 'FileRecord.php';

class FileFamily extends FileRecord implements Family {
	private $husband;
	private $wife;
	private $children;
	
	public function getSpouse($p) {
		$spouse = null;
		$husb = $this->getHusband();
		$wife = $this->getWife();
		//-- make sure that the person is a spouse in this family
		if (($husb!=null && $husb->getGedcomId()!=$p->getGedcomId()) 
				&& ($wife!=null && $wife.getGedcomId()!=$p->getGedcomId())) {
			throw new Exception("Individual ".$p->getGedcomId()." is not a spouse in this family");
		}
		
		if ($husb!=null && $p->getGedcomId()!=$husb->getGedcomId()) $spouse = $husb;
		else if ($wife!=null && $p->getGedcomId()!=$wife->getGedcomId()) $spouse = $wife;
		return $spouse;
	}
	
	public function getHusband() {
		if ($this->husband==null) {
			$husb =  $this->getSingleAssertionByType("HUSB");
			if ($husb!=null) $this->husband = $husb->getReferenceRecord();
		}
		return $this->husband;
	}
	
	public function getWife() {
		if ($this->wife==null) {
			$wife =  $this->getSingleAssertionByType("WIFE");
			if ($wife!=null) $this->wife = $wife->getReferenceRecord();
		}
		return $this->wife;
	}
	
	public function getChildren() {
		if ($this->children==null) {
			$chil = $this->getAssertionsByType("CHIL");
			$this->children = array();
			foreach($chil as $link) {
				$child = $link->getReferenceRecord();
				$this->children[] = $child;
			}
		}
		return $this->children;
	}

	public function getNameString() {
		$name = "";
		$h = $this->getHusband();
		$w = $this->getWife();
		if($h==null) $name = "Unknown + ";
		else $name = $h->getNameString()." + ";
		if ($w==null) $name .= "Unknown";
		else $name .= $w->getNameString();
		return $name;
	}
}
