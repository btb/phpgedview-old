<?php 
namespace PhpGedcom\model;
/**
 * Represents a Place with hierarchical levels
 *
 * PhpGedcom Library - Ported from JavaGedcom Library
 * Copyright (C) 2011	John Finlay
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

require_once 'GeoLoc.php';
 
class Place {
	private $id;
	private $geoloc;
	private $levels;
	private $origPlace;
	
	public function __construct($placeStr) {
		$this->origPlace = $placeStr;
		$this->levels = array_reverse(preg_split("/,\s*/", $placeStr));
	}
	
	public function getGeoLoc() {
		return $this->geoloc;
	}
	
	public function getId() {
		return $this->id;
	}
	
	public function setId($id) {
		$this->id = $id;
	}
	
	public function setGeoLoc(GeoLoc $geoloc) {
		$this->geoloc = $geoloc;
	}
	
	public function getLevels() {
		return $this->levels;
	}
	
	public function setLevels($levels) {
		if (!is_array($levels)) throw new Exception("Place levels must be an array");
		$this->levels = $levels;
	}
	
	public function getOriginalPlace() {
		return $this->origPlace;
	}

	public function setOriginalPlace($place) {
		$this->origPlace = $place;
	}
	
	public function equals($args0) {
		if (strcasecmp($args0->getOriginalPlace(), $this->getOriginalPlace())==0) return true;
		return false;
	}
}