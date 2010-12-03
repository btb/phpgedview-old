<?php 
/**
 * A default implementation of the GedcomListener which simply
 * keeps a list of all of the records that it is notified of
 * as they are passed in
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
 * @author jfinlay
 *
 */

if (!defined('PGC_PHPGEDCOM')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

class DefaultGedcomListener implements GedcomListener {

	private $level;
	private $tag;
	private $records = array();
	
	public function getLevel() {
		return $this->level;
	}

	public function getTag() {
		return $this->tag;
	}

	public function notify($o) {
		$this->records[] = $o;
	}

	public function getRecords() {
		return $this->records;
	}

	public function setLevel($level) {
		$this->level = $level;
	}

	public function setTag($tag) {
		$this->tag = $tag;
	}

}
