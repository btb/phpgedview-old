<?php 
/**
 * Abstract data source
 * A DataSource represents a the place where the GEDCOM data came from.
 * It could be a File on the File System or it could be a remote
 * data source where the data is accessed through web services.
 * 
 * A DataSource has a GEDCOM SOUR Record which holds all of the information
 * about that datasource.  This allows for storing and transmission of
 * remote links.
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

require_once 'Gedcom.php';

abstract class DataSource implements Gedcom{
	protected $title = "";
	/* @var Record */
	protected $record;
	protected $type = "";
	protected $gedcomName = "";
	protected $url = "";
	protected $authenticated;

	public function getType() {
		return $this->type;
	}

	public function setType($type) {
		$this->type = $type;
	}

	/**
	 * get a list of all the records that are linked to this datasource
	 * @return array
	 */
	public abstract function getRemoteLinks();
	
	/**
	 * Find the remote link assertion associated with this datasource and the given gedcom ID
	 * @param gedcomId
	 * @return
	 */
	public abstract function findLinkById($gedcomId); 
	
	/**
	 * Returns the type of data that is used by this DataSource Possible options
	 * are [GEDCOM, FSXML]
	 * 
	 * @return
	 */
	public abstract function getDataType();

	/**
	 * Returns a list of Records that match the specified parameters A match is
	 * usually more specific than a search
	 * 
	 * @param params
	 * @return
	 * @throws DataSourceNotAuthenticatedException 
	 */
	public abstract function match($params);

	/**
	 * Performs a search of the data using the specified parameters A search
	 * will usually return more results than a match
	 * 
	 * @param params
	 * @return
	 * @throws DataSourceNotAuthenticatedException 
	 */
	public abstract function search($params);
	
	/**
	 * Delete the provided record from the remote datasource
	 * @param record
	 * @return
	 * @throws DataSourceNotAuthenticatedException 
	 */
	public abstract function deleteRecord($record);
	
	/**
	 * Add a RemoteLink Assertion to the given Record
	 * Each remote link could be unique to the type of datasource
	 * @param record
	 * @param id
	 */
	public abstract function addRemoteLinkAssertion($record, $id);
	
	/**
	 * Authenticate the remote datasource
	 * @param username
	 * @param password
	 */
	public abstract function authenticateDataSource($username, $password);
	
	/**
	 * Build a search/match query for the given person
	 * 
	 * @param person
	 * @return
	 */
	public function buildSearchQuery($person, $type="") {
		if ($type == null)
			$type = "";
		$params = array();
		$name = $person->getSingleAssertionByType("NAME");
		if ($name != null) {
			$params[$type . "givenName"] = $name->getGivnName();
			$params[$type . "familyName"] = $name->getSurName();
		}
		$birth = $person->getSingleAssertionByType("BIRT");
		if ($birth != null) {
			$date = null;
			if ($birth->getDate()!=null) $date = $birth->getDate()->getOriginalDate();
			$place = $birth->getPlace();
			if ($date!=null && $date!="")
				$params[$type . "birthDate"] = $date;
			if ($place!=null && $place!="")
				$params[$type . "birthPlace"] = $place;
		}
		$death = $person->getSingleAssertionByType("DEAT");
		if ($death != null) {
			$date = null;
			if ($death->getDate()!=null) $date = $death->getDate()->getOriginalDate();
			$place = $death->getPlace();
			if ($date!=null && $date!="")
				$params[$type . "deathDate"] = $date;
			if ($place!=null && $place!="")
				$params[$type . "deathPlace"] = $place;
		}

		if (!empty($type))
			return $params;

		$gender = $person->getSingleAssertionByType("SEX");
		if ($gender != null) {
			$g = $gender->getDetail();
			if ($g=="M")
				$params["gender"]="male";
			if ($g=="F")
				$params["gender"]="female";
		}

		$foundRelative = false;

		$link = $person->getSingleAssertionByType("FAMC");
		if ($link != null) {
			$family = $person->getFile()->getRecordById($link->getReferenceId());
			if ($family != null) {
				$husb = $family->getSingleAssertionByType("HUSB");
				$wife = $family->getSingleAssertionByType("WIFE");
				$father = null;
				$mother = null;
				if ($husb != null)
					$father = $person->getFile()->getRecordById($husb->getReferenceId());
				if ($wife != null)
					$mother = $person->getFile()->getRecordById($wife->getReferenceId());
				if (!$foundRelative && $father != null) {
					$fparams = $this->buildSearchQuery($father, "father.");
					$params = array_merge($params, $fparams);
//					foundRelative = true;
				}

				if (!$foundRelative && $mother != null) {
					$mparams = $this->buildSearchQuery($mother, "mother.");
					$params = array_merge($params, $mparams);
//					foundRelative = true;
				}
			}
		}
		
		$fams = $person->getAssertionsByType("FAMS");
		if (count($fams) > 0) {
			$link = $fams->get(count($fams) - 1);
			if ($link != null) {
				$family = $person->getFile()->getRecordById($link.getReferenceId());
				if ($family != null) {
					$husb = $family->getSingleAssertionByType("HUSB");
					$wife = $family->getSingleAssertionByType("WIFE");
					$spouse = null;
					if ($husb != null && $husb->getReferenceId()!=$person->getGedcomId())
						$spouse = $person->getFile()->getRecordById($husb->getReferenceId());
					if ($wife != null && $wife.getReferenceId()!=$person->getGedcomId())
						$spouse = $person->getFile()->getRecordById($wife->getReferenceId());
					if (!$foundRelative && $spouse != null) {
						$sparams = $this->buildSearchQuery($spouse, "spouse.");
						$params = array_merge($params, $sparams);
//						foundRelative = true;
					}
				}
			}
		}

		return $params;
	}

	public function getTitle() {
		return $this->title;
	}

	public function setTitle($title) {
		$this->title = $title;
	}

	public function toString() {
		return $this->title . " (" . $this->type . ")";
	}

	/**
	 * returns the SOUR Record which defines this datasource
	 * @return
	 */
	public function getRecord() {
		return $this->record;
	}

	public function setRecord($record) {
		$this->record = $record;
	}

	public function isAuthenticated() {
		return $authenticated;
	}

	public function setAuthenticated($authenticated) {
		$this->authenticated = $authenticated;
	}

	public function getGedcomName() {
		return $this->gedcomName;
	}

	public function setGedcomName($gedcomId) {
		$this->gedcomName = $gedcomId;
	}

	public function getUrl() {
		return $this->url;
	}

	public function setUrl($url) {
		$this->url = $url;
	}
}
?>