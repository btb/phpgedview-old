<?php
/**
 * Interface defining behavior of Assertions
 * Assertions represent all level 1 items from GEDCOM 
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

interface Assertion {
	/**
	 * A unique ID representing this GEDCOM.  This field is a
	 * convenience filed that doesn't directly map to GEDCOM
	 * and may not be used by all systems.
	 * @return string
	 */
	function getFsId();

	function setFsId($fsId);

	/**
	 * The Level 1 GEDCOM type of this assertion.  BIRT, DEAT for example
	 * @return string
	 */
	function getType();

	function setType($type);

	/**
	 * The entire Level 1 GEDCOM record for this assertion.  This would 
	 * include everything from the 1 line to the next line with a level <=1
	 * For example, a BIRT would include something like the following:
	 * 1 BIRT
	 * 2 DATE 01 JAN 2000
	 * 2 PLAC Somecity, Somecounty, SomeState, SomeCountry
	 * @return string
	 */
	function getGedcom();

	function setGedcom($gedcom);

	/**
	 * The Level 0 Record that this assertion was parsed from
	 * @return Record
	 */
	function getParentRecord();

	function setParentRecord($parentReccord);

	/**
	 * Used to delineate that this assertion has changed or has been
	 * marked for deletion.  Refer to the CHANGE_ fields.
	 * @return int
	 */
	function getChangeCode();

	function setChangeCode($changeCode);
	
	/**
	 * Get the value of a subtag from this record
	 * @param tag	the GEDCOM level 2 tag to get the data from
	 * @return	string the value of the tag
	 */
	function getValue($tag);

	function getVersion();
	function setVersion($version);
	
	function isModifiable();
	function setModifiable($m);
	
}
?>