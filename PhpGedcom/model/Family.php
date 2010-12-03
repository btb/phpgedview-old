<?php 
/**
 * This interface is used to represent a Family record
 * This provides a convenience interface to simplify many of the things we normally do with
 * Family type records
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

require_once 'Record.php';

interface Family extends Record {
	/**
	 * Get the spouse of the given person
	 * @param p
	 * @return null if there is no spouse
	 * @throws GedcomDataException when the given individual is not a spouse of this family
	 */
	public function getSpouse($p);
	/**
	 * Get the Husband of the family
	 * @return null if no husband exists
	 */
	public function getHusband();
	/**
	 * Get the Wife of the family
	 * @return null if no wife exists
	 */
	public function getWife();
	/**
	 * Get a list of all of the Children in the family
	 * @return array
	 */
	public function getChildren();
}
?>