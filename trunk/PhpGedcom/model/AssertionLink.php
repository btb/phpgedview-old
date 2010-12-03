<?php
/**
 * AssertionLink Interface
 * An AssertionLink represents all of the level 1 cross-linking
 * references in GEDCOM data such as FAMC, FAMS, CHIL, ASSO, etc.
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

interface AssertionLink extends Assertion {

	/**
	 * Returns the GEDCOM ID of the referenced item
	 * For example the line <code>1 FAMS @F1@</code>
	 * This method would return "F1"
	 * @return string
	 */
	function getReferenceId();

	/**
	 * Set the referenced ID
	 * @param referenceId
	 */
	function setReferenceId($referenceId);

	/**
	 * A convenience method for retrieving the Referenced record
	 * that this link points to.
	 * For example the line <code>1 FAMS @F1@</code>
	 * This method would return the FAM record for "F1"
	 * @return Record
	 */
	function getReferenceRecord();

}
?>