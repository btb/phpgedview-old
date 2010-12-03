<?php 
/**
 * This interface represents a GEDCOM record of type Individual
 * It is a convenience interface that simplifies some of the standard
 * ways we want to work with individual records
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

interface Individual extends Record {
	/**
	 * Get this individuals primary Name assertions
	 * Provides convenience in printing out an individual's primary name
	 * @return
	 */
	public function getName();
	/**
	 * Get a list of all the Families where this person was a spouse
	 * in that family
	 * @return
	 */
	public function getSpouseFamilies();
	/**
	 * get a list of all of the Families where this person was a child
	 * @return
	 */
	public function getChildFamilies();
	
	/**
	 * get the person's current spouse
	 * @return
	 */
	public function getCurrentSpouse();
	/**
	 * get the person's primary (first) birth event
	 * @return
	 */
	public function getBirthEvent();
	/**
	 * get the person's primary (first) death event
	 * @return
	 */
	public function getDeathEvent();
	
	public function getGenderEvent();
}
