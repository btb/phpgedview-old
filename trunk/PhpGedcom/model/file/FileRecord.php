<?php
/**
 * Represents a record
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

class FileRecord implements Record {
	protected $file;
	protected $gedcomId = "";
	protected $type = "";
	protected $listString= null;
	protected $assertions;
	protected $name;

	function __construct() {
		$this->assertions = array();
	}

	public function getGedcomRecord() {
		$sb = "";
		if ($this->type!="HEAD") $sb.="0 @".$this->gedcomId."@ ".$this->type."\r\n";
		else $sb.="0 ".$this->type."\r\n";
		$this->getAssertions();
		foreach($this->assertions as $a) {
			$sb.=$a->getGedcom();
		}
		return $sb;
	}
	
	public function getAssertionsByType($type) {
		$assertionList = array();
		foreach($this->getAssertions() as $a){
			if ($a->getType()==$type){
				$assertionList[] = $a;
			}
				
		}
		return $assertionList;
		
	}

	public function getSingleAssertionByType($type) {
		$li=$this->getAssertionsByType($type);
		if(count($li)== 0) return null;
		return $li[0];
		
	}
	
	public function getType() {
		return $this->type;
	}

	public function setType($type) {
		$this->type = $type;
	}

	public function getGedcomId() {
		return $this->gedcomId;
	}

	public function setGedcomId($gedcomId) {
		$this->gedcomId = $gedcomId;
	}

	public function getFile() {
		return $this->file;
	}

	public function setFile($file) {
		$this->file = $file;
	}

	public function getAssertions() {
		return $this->assertions;
	}

	public function setAssertions($assertions) {
		$this->assertions = $assertions;
	}

	public function addAssertion($a) {
		$this->assertions[]=$a;
	}
	
	public function removeAssertion($a) {
		$tmp = array();
		foreach($this->assertions as $a1) {
			if (!$a->equals($a1)) $tmp[] = $a1;
		}
		$this->assertions = $tmp;
	}
	
	public function compareTo($o) {
		$name = $this->getSingleAssertionByType("NAME");
		$nam2 = $o->getSingleAssertionByType("NAME");
		if ($name==null && $nam2==null) return 0;
		if ($name==null) return -1;
		if ($nam2==null) return 1;
		return strcmp($name->getSortableName(),$nam2->getSortableName());
	}
	
	public function equals($o) {
		if ($o instanceof Record) {
			if ($o->getFile()!=$this->getFile()) return false;
			if ($o->getGedcomId()==$this->getGedcomId()) return true;
		}
		return false;
	}
	
	/**
	 * get the remote id of this record given the gedcom id of the datasource
	 */
	public function getRemoteId($sourceId) {
		$links = getAssertionsByType("RFN");
		if ($links==null || count($links)==0) return null;
		foreach($links as $rl) {
			if ($rl->getDataSourceId()==$sourceId) return $rl->getRemoteId();
		}
		return null;
	}
	
	public function getListString() {
		return $this->listString;
	}

	public function setListString($listString) {
		$this->listString= $listString;
	}

	public function getNameString() {
	    if ($this->name==null) {
	    	$titl = $this->getSingleAssertionByType("TITL");
	    	if ($titl!=null) $this->name = $titl->getDetail();
	    	else {
	    		$titl = $this->getSingleAssertionByType("FILE");
	    		$this->name = $titl->getValue("TITL");
	    	}
	    	if ($this->name==null) $this->name = $this->getType().":".$this->getGedcomId();
	    }
	    return $this->name;
    }
}
