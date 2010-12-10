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

class AssertionLink extends Assertion {
	
	private $referenceId;

	public function getReferenceId() {
		return $this->referenceId;
	}

	public function setReferenceId($referenceId) {
		$this->referenceId = $referenceId;
	}
	
	public function equals($args0) {
		if (parent::equals($args0)) {
			if (strcasecmp($this->getReferenceId(),$args0->getReferenceId())==0) {
				return true;
			}
		}
		return false;
	}
	
	public function getReferenceRecord() {
		return $this->getParentRecord()->getFile()->getRecordById($this->getReferenceId());
	}
}
