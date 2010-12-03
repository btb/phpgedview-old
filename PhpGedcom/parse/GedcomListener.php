<?php 
namespace PhpGedcom;
/**
 * Defines the interface for a GedcomListener
 * A GedcomListener will receive notfications when different types of gedcom
 * records are encountered as the gedcom is parsed
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

interface GedcomListener {
	/**
	 * Which GEDCOM tag to listen on
	 * @return
	 */
	public function getTag();
	/**
	 * The GEDCOM level of the tag to listen on
	 * @return
	 */
	public function getLevel();
	
	/**
	 * Notifies the listener that the gedcom tag was parse
	 * @param o
	 */
	public function notify($o);
}
