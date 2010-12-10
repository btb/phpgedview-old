<?php 
namespace PhpGedcom\model;
/**
 * An Assertion which represents that the parent record
 * is linked to another record in another data source.
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

class RemoteLink extends Assertion {

	protected $dataSourceId;
	protected $remoteId;

	public function getRemoteId() {
		return $this->remoteId;
	}

	public function setRemoteId($remoteId) {
		$this->remoteId = $remoteId;
	}

	public function getDataSourceId() {
		return $this->dataSourceId;
	}

	public function setDataSourceId($dataSourceId) {
		$this->dataSourceId = $dataSourceId;
	}
	
	
}
