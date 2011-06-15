<?php 
namespace PhpGedcom\model;
/**
 * Represents an Event assersion
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
 
require_once 'Assertion.php';
require_once 'Place.php';

class Event extends Assertion {
	private $date;
	private $place;
	private $detail;

	public function getDate() {
		return $this->date;
	}

	public function setDate(GedcomDate $date) {
		$this->date = $date;
	}

	public function getPlace() {
		return $this->place;
	}

	public function setPlace(Place $place) {
		$this->place = $place;
	}

	public function getDetail() {
		return $this->detail;
	}

	public function setDetail($detail) {
		$this->detail = $detail;
	}

	public function equals($args0) {
		if ($args0 == null)
			return false;
		if (parent::equals($args0)) {
			if (($this->getDate() == null && $arg0->getDate() == null)
					|| GedcomDate::Compare($this->getDate(), $arg0->getDate())==0) {
				if (($this->getPlace() == null && $arg0->getPlace() == null)
						|| ($this->getPlace()!=null && $this->getPlace()->equals($arg0->getPlace()))) {
					if (($this->getDetail() == null && $arg0->getDetail() == null)
							|| (strcasecmp($this->getDetail(), $arg0->getDetail())==0)) {
						return true;
					}
				}
			}
		}
		return false;
	}

}
