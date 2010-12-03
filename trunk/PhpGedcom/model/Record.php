<?php 
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

interface Record {

	/**
	 * returns the raw GEDCOM record for this person
	 * @return
	 */
	public function getGedcomRecord();

	/**
	 * return a list of assertions that match the given GEDCOM type
	 * @param type
	 * @return
	 */
	public function getAssertionsByType($type);

	/**
	 * return a single assertion that matches the given GEDCOM type
	 * @param type
	 * @return
	 */
	public function getSingleAssertionByType($type);

	/**
	 * The GEDCOM type of this record, INDI or FAM for example
	 * @return
	 */
	public function getType();

	public function setType($type);

	public function getGedcomId();

	public function setGedcomId($gedcomId);

	/**
	 * Get the GEDCOM file that this record belongs to
	 * @return
	 */
	public function getFile();

	public function setFile($file);

	/**
	 * get a list of all leve 1 assertions
	 * @return
	 */
	public function getAssertions();

	public function setAssertions($assertions);

	public function addAssertion($a);

	public function removeAssertion($a);

	/**
	 * Get the remote id for this record given the remote data source id
	 * @param sourceId	the gedcom id of this datasource
	 * @return	the remote id of the person
	 */
	public function getRemoteId($sourceId);

	/**
	 * a convenience property for showing the details of a record in a list
	 * @return
	 */
	public function getListString();

	public function setListString($listString);
	
	/**
	 * A convenience property for showing the name of a record
	 * Will return the primary NAME of an INDI
	 * Will return the primary NAME of the HUSB + the primary NAME of the WIFE
	 * Will return the TITL of most other Record types (SOUR, OBJE, REPO)
	 * @return
	 */
	public function getNameString();

}