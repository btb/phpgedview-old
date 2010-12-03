<?php 
/**
 * Represents a collection of GEDCOM data.  That collection
 * may come from a variety of sources such as a file, a 
 * database, or a remote source such as a web service.
 * 
 * A Gedcom includes a collection of Records.  Records represent
 * all level 0 GEDCOM items.
 * 
 * The methods addRecord, getRecordById and updateRecord define a
 * simple API for working with GEDCOM records. 
 * 
 * The Nextids are used for keeping track of the next GEDCOM
 * XREF id for different types of records.
 * 
 * The other methods are for convenience in working with databases
 * or files.
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

interface Gedcom {

	/**
	 * Retrieve a collection of all of the records associated with this
	 * GEDCOM.
	 * @return
	 */
	public function getRecords();

	/**
	 * Set the entire collection of records
	 * @param records
	 */
	public function setRecords($records);

	/**
	 * Retrieve an ID which uniquely identifies this GEDCOM
	 * in a system which supports many GEDCOMs
	 * @return
	 */
	public function getId();

	/**
	 * Set this Gedcom's unique id
	 * @param id
	 */
	public function setId($id);

	/**
	 * If this data originally came from the file, this will
	 * return the filename of that original file.
	 * @return
	 */
	public function getFileName();

	/**
	 * set the Gedcom data's original filename
	 * @param fileName
	 */
	public function setFileName($fileName);

	/**
	 * get the Gedcom's full original file path
	 * @return
	 */
	public function getFilepath();

	/**
	 * set the Gedcom's full original file path
	 * @param filepath
	 */
	public function setFilepath($filepath);

	/**
	 * Retrieves a Map of next ids.  The key in the map is a
	 * String based on the level 0 GEDCOM type such as INDI, FAM,
	 * or SOUR.  The Value is the next id that should be used for
	 * that type. 
	 * @return
	 */
	public function getNextids();

	/**
	 * Update the nextids with a new map
	 * @param nextids
	 */
	public function setNextids($nextids);

	/**
	 * Retrieve a level 0 record by its GEDCOM XREF ID.
	 * Level 0 items are guaranteed to be unique throughout
	 * the Gedcom data.  This includes being unique across
	 * level 0 data types.
	 * @param id
	 * @return
	 */
	public function getRecordById($id);
		
	/**
	 * Updates a level 0 record in the Gedcom, replacing the original
	 * with the new Record passed in.
	 * @param record
	 * @return	A string or status code defined by the implementing system, some systems may return a new ID for the record
	 */
	public function updateRecord($record);
	
	/**
	 * Add a new Record to the Gedcom.
	 * @param r
	 * @return	the ID of the new Record that was just added
	 */
	public function addRecord($r);
}
?>