<?php
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
 
class FileIndividual extends FileRecord implements Individual{
	protected $famc = null;
	protected $fams = null;
	protected $birth = null;
	protected $death = null;
	protected $spouse = null;
	protected $gender = null;
	
	public function __construct() {
		parent::__construct();
	}

	public function getNameString() {
		$text = "Unkown";
		if ($this->name!=null) $text = $this->name->getFullName();
		return $text;
	}
	
	public function getName() {
		if ($this->name==null) $this->name = $this->getSingleAssertionByType("NAME");
		return $name;
	}

	public function getChildFamilies() {
		if ($this->famc==null) {
			$this->famc = array();
			foreach($this->getAssertionsByType("FAMC") as $fam) {
				$this->famc[] = $fam->getReferenceRecord();
			}
		}
	    return $this->famc;
    }

	public function getSpouseFamilies() {
		if ($this->fams==null) {
			$this->fams = array();
			foreach($this->getAssertionsByType("FAMS") as $fam) {
				$this->fams[] = $fam->getReferenceRecord();
			}
		}
	    return $this->fams;
    }

	public function getBirthEvent() {
	    if ($this->birth==null) {
	    	$this->birth = $this->getSingleAssertionByType("BIRT");
	    }
	    return $this->birth;
    }

	public function getCurrentSpouse() {
	    if ($this->spouse==null) {
	    	foreach($this->getSpouseFamilies() as $fam) {
	    		//-- make sure not divorced
	    		if ($fam->getSingleAssertionByType("DIV")==null) {
	    			$this->spouse = $fam->getSpouse($this);
	    		}
	    	}
	    }
	    return $this->spouse;
    }

	public function getDeathEvent() {
		if ($this->death==null) {
			$this->death = $this->getSingleAssertionByType("DEAT");
	    }
	    return $this->death;
    }

	public function getGenderEvent() {
	    if ($this->gender==null) 
	    {
	    	$this->gender = $this->getSingleAssertionByType("SEX");
	    }
	    return $this->gender;
    }
}
