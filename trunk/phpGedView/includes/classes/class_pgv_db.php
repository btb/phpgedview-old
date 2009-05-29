<?php
//
// Class file for the database access.  Extend PHP's native PDO and
// PDOStatement classes to provide database access with logging, etc.
//
// See documentation at http://wiki.phpgedview.net/en/index.php?title=PGV_Database_Functions
//
// phpGedView: Genealogy Viewer
// Copyright (C) 2009 Greg Roach (fisharebest)
//
// This program is free software; you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation; either version 2 of the License, or
// (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with this program; if not, write to the Free Software
// Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
//
// @package PhpGedView
// @version $Id$

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

define('PGV_CLASS_PGV_DB_PHP', '');

class PGV_DB {
	//////////////////////////////////////////////////////////////////////////////
	// CONSTRUCTION
	// Implement a singleton to decorate a PDO object.
	// See http://en.wikipedia.org/wiki/Singleton_pattern
	// See http://en.wikipedia.org/wiki/Decorator_pattern
	//////////////////////////////////////////////////////////////////////////////
	private static $instance=null;
	private static $pdo=null;
	private static $dbtype=null;

	// Prevent instantiation via new PGV_DB
	private final function __construct() {
	}

	// Prevent instantiation via clone()
	public final function __clone() {
		trigger_error('PGV_DB::clone() is not allowed.', E_USER_ERROR);
	}
 	
	// Prevent instantiation via serialize()
	public final function __wakeup() {
		trigger_error('PGV_DB::unserialize() is not allowed.', E_USER_ERROR);
	}

	// Test a set of connection parameters - used during installation
	public static function testParameters($DBTYPE, $DBHOST, $DBPORT, $DBNAME, $DBUSER, $DBPASS) {
		try {
			switch ($DBTYPE) {
			case 'mysql':
				$dbh=new PDO("mysql:host={$DBHOST};dbname={$DBNAME};port={$DBPORT}", $DBUSER, $DBPASS);
				break;
			case 'pgsql':
				$dbh=new PDO("pgsql:host={$DBHOST};dbname={$DBNAME};port={$DBPORT}", $DBUSER, $DBPASS);
				break;
			case 'mssql':
				$dbh=new PDO("mssql:host={$DBHOST};dbname={$DBNAME}".($DBPORT ? ",{$DBPORT}" : ''), $DBUSER, $DBPASS);
				break;
			case 'sqlite':
				$dbh=new PDO("sqlite:{$DBNAME}", null, null);
				break;
			case 'firebird': // This DSN has not been tested!
				$dbh=new PDO("firebird:host={$DBHOST};dbname={$DBNAME};charset=UTF-8", $DBUSER, $DBPASS);
				break;
			case 'ibm': // This DSN has not been tested!
				$dbh=new PDO("ibm:DRIVER={IBM DB2 ODBC DRIVER};DATABASE={$DBNAME};HOSTNAME={$DBHOST};PORT={$DBPORT};PROTOCOL=TCPIP", $DBUSER, $DBPASS);
				break;
			case 'informix': // This DSN has not been tested!
				$dbh=new PDO("informix:host={$DBHOST};service={$DBPORT};database={$DBNAME}", $DBUSER, $DBPASS);
				break;
			case 'oci': // This DSN has not been tested!
				$dbh=new PDO("oci:dbname=//{$DBHOST}}:{$DBPORT}/{$DBNAME}", $DBUSER, $DBPASS);
				break;
			case 'odbc': // This DSN has not been tested!
				$dbh=new PDO("odbc:$DBNAME", $DBUSER, $DBPASS);
				break;
			case '4D': // This DSN has not been tested!
				$dbh=new PDO("4D:host={$DBHOST};port={$DBPORT};dbname={$DBNAME};charset=UTF-8", $DBUSER, $DBPASS);
				break;
			}
			unset($dbh); // Close the connection
			return true;
		} catch (PDOException $ex) {
			return false;
		}
	}

	// Implement the singleton pattern
	public static function createInstance($DBTYPE, $DBHOST, $DBPORT, $DBNAME, $DBUSER, $DBPASS, $DBPERSIST, $DB_UTF8_COLLATION) {
		if (self::$pdo instanceof PDO) {
			trigger_error('PGV_DB::createInstance() can only be called once.', E_USER_ERROR);
		}
		// mysqli is legacy, from PEAR::DB
		if ($DBTYPE=='mysqli') {
			$DBTYPE='mysql';
		}
		// Check that the driver is loaded
		if (!extension_loaded('pdo') || !in_array($DBTYPE, PDO::getAvailableDrivers())) {
			// Try to load it dynamically.  This function is deprecated (should use php.ini),
			// but for some users this may be the only option.
			@dl('pdo.so');
			@dl("pdo_{$DBTYPE}.so");
			// ...and try again
			if (!extension_loaded('pdo') || !in_array($DBTYPE, PDO::getAvailableDrivers())) {
		 		trigger_error("PDO/{$DBTYPE} is not installed.", E_USER_ERROR);
			}
		}
		// Create the underlying PDO object
		switch ($DBTYPE) {
		case 'mysql':
			self::$pdo=new PDO(
				"mysql:host={$DBHOST};dbname={$DBNAME};port={$DBPORT}", $DBUSER, $DBPASS,
				array(
					PDO::ATTR_PERSISTENT=>(bool)$DBPERSIST,
					PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
					PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ,
					PDO::ATTR_CASE=>PDO::CASE_LOWER,
					PDO::ATTR_AUTOCOMMIT=>true
				)
			);
			if ($DB_UTF8_COLLATION) {
				self::$pdo->exec("SET NAMES UTF8");
			}
			break;
		case 'pgsql':
			self::$pdo=new PDO(
				"pgsql:host={$DBHOST};dbname={$DBNAME};port={$DBPORT}", $DBUSER, $DBPASS,
				array(
					PDO::ATTR_PERSISTENT=>(bool)$DBPERSIST,
					PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
					PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ,
					PDO::ATTR_CASE=>PDO::CASE_LOWER,
					PDO::ATTR_AUTOCOMMIT=>true
				)
			);
			if ($DB_UTF8_COLLATION) {
				self::$pdo->exec("SET NAMES 'UTF8'");
			}
			break;
		case 'mssql':
			self::$pdo=new PDO(
				"mssql:host={$DBHOST};dbname={$DBNAME}".($DBPORT ? ",{$DBPORT}" : ''), $DBUSER, $DBPASS,
				array(
					PDO::ATTR_PERSISTENT=>(bool)$DBPERSIST,
					PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
					PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ,
					PDO::ATTR_CASE=>PDO::CASE_LOWER,
					PDO::ATTR_AUTOCOMMIT=>true
				)
			);
			break;
		case 'sqlite':
//			try {
//				self::$pdo=new PDO(
//					"sqlite:{$DBNAME}", null, null,
//					array(
//						PDO::ATTR_PERSISTENT=>(bool)$DBPERSIST,
//						PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
//						PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ,
//						PDO::ATTR_CASE=>PDO::CASE_LOWER
//					)
//				);
//				// Check if we can connect to the database
//				// If not, we may have a sqlite2 database from PhpGedView 4.2.1 or earlier
//				PGV_DB::exec('PRAGMA encoding="UTF-8"');
//			} catch (PDOException $ex) {
//				// Couldn't connect using sqlite3 - try sqlite2
				self::$pdo=new PDO(
					"sqlite2:{$DBNAME}", null, null,
					array(
						PDO::ATTR_PERSISTENT=>(bool)$DBPERSIST,
						PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
						PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ,
						PDO::ATTR_CASE=>PDO::CASE_LOWER
					)
				);
//			}
			break;
		case 'firebird': // This DSN has not been tested!
			self::$pdo=new PDO(
				"firebird:host={$DBHOST};dbname={$DBNAME};charset=UTF-8", $DBUSER, $DBPASS,
				array(
					PDO::ATTR_PERSISTENT=>(bool)$DBPERSIST,
					PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
					PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ,
					PDO::ATTR_CASE=>PDO::CASE_LOWER,
					PDO::ATTR_AUTOCOMMIT=>true
				)
			);
			break;
		case 'ibm': // This DSN has not been tested!
			self::$pdo=new PDO(
				"ibm:DRIVER={IBM DB2 ODBC DRIVER};DATABASE={$DBNAME};HOSTNAME={$DBHOST};PORT={$DBPORT};PROTOCOL=TCPIP", $DBUSER, $DBPASS,
				array(
					PDO::ATTR_PERSISTENT=>(bool)$DBPERSIST,
					PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
					PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ,
					PDO::ATTR_CASE=>PDO::CASE_LOWER,
					PDO::ATTR_AUTOCOMMIT=>true
				)
			);
			break;
		case 'informix': // This DSN has not been tested!
			self::$pdo=new PDO(
				"informix:host={$DBHOST};service={$DBPORT};database={$DBNAME}", $DBUSER, $DBPASS,
				array(
					PDO::ATTR_PERSISTENT=>(bool)$DBPERSIST,
					PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
					PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ,
					PDO::ATTR_CASE=>PDO::CASE_LOWER,
					PDO::ATTR_AUTOCOMMIT=>true
				)
			);
			break;
		case 'oci': // This DSN has not been tested!
			self::$pdo=new PDO(
				"oci:dbname=//{$DBHOST}}:{$DBPORT}/{$DBNAME}", $DBUSER, $DBPASS,
				array(
					PDO::ATTR_PERSISTENT=>(bool)$DBPERSIST,
					PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
					PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ,
					PDO::ATTR_CASE=>PDO::CASE_LOWER,
					PDO::ATTR_AUTOCOMMIT=>true
				)
			);
			break;
		case 'odbc': // This DSN has not been tested!
			self::$pdo=new PDO(
				"odbc:$DBNAME", $DBUSER, $DBPASS,
				array(
					PDO::ATTR_PERSISTENT=>(bool)$DBPERSIST,
					PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
					PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ,
					PDO::ATTR_CASE=>PDO::CASE_LOWER,
					PDO::ATTR_AUTOCOMMIT=>true
				)
			);
			break;
		case '4D': // This DSN has not been tested!
			self::$pdo=new PDO(
				"4D:host={$DBHOST};port={$DBPORT};dbname={$DBNAME};charset=UTF-8", $DBUSER, $DBPASS,
				array(
					PDO::ATTR_PERSISTENT=>(bool)$DBPERSIST,
					PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
					PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ,
					PDO::ATTR_CASE=>PDO::CASE_LOWER,
					PDO::ATTR_AUTOCOMMIT=>true
				)
			);
			break;
		}

		// Assign the singleton
		self::$instance=new self;
	}

	// We don't access this directly, only via query(), exec() and prepare()
	public static function getInstance() {
		if (self::$pdo instanceof PDO) {
			return self::$instance;
		} else {
			trigger_error('PGV_DB::createInstance() must be called before PGV_DB::getInstance().', E_USER_ERROR);
		}
	}

	public static function isConnected() {
		return (self::$pdo instanceof PDO);
	}

	//////////////////////////////////////////////////////////////////////////////
	// LOGGING
	// Keep a log of the statements executed using this connection
	//////////////////////////////////////////////////////////////////////////////
	private static $log=array();

	// Add an entry to the log
	public static function logQuery($query, $rows, $microtime, $bind_variables) {
		$query2='';
		foreach (str_split(htmlspecialchars($query)) as $char) {
			if ($char=='?') {
				$query2.='<abbr title="'.htmlspecialchars(array_shift($bind_variables)).'">'.$char.'</abbr>';
			} else {
				$query2.=$char;
			}
		}
		self::$log[]='<tr><td>'.$query2.'</td><td>'.(int)$rows.'</td><td>'.round($microtime*1000, 3).'</td></tr>';
	}

	// Total number of queries executed, for the page statistics
	public static function getQueryCount() {
		return count(self::$log);
	}

	// Display the query log as a table, for debugging
	public static function getQueryLog() {
		$html='<table border="1"><col span="2"/><col align="char"/><thead><tr><th>Query</th><th>Rows</th><th>Time (ms)</th></tr><tbody/>'.implode('', self::$log).'</table>';
		self::$log=array();
		return $html;
	}

	//////////////////////////////////////////////////////////////////////////////
	// SQL Compatibility
	//////////////////////////////////////////////////////////////////////////////
	public static function mod_function($x, $y) {
		// TODO: When we get a d_leap_year column in the pgv_dates table, we will
		// no longer need this function.
		switch (self::$pdo->getAttribute(PDO::ATTR_DRIVER_NAME)) {
		case 'sqlite':
		case 'sqlite2':
			return "(($x)%($y))";
		case 'mysql':
		case 'pgsql':
		case 'mssql':
		case 'oci':
		case 'ibm':
		case 'firebird':
		case 'informix':
			return "MOD($x,$y)";
		case 'odbc':
			// We don't know the underlying database, so this is only a guess
			return "MOD($x,$y)";
		case '4D':
			// No MOD or TRUNC function - only ROUND
			return "(({$x})-({$y})*ROUNDING(({$x})/({$y})-0.5))";
		}
	}

	public static function random_function() {
		switch (self::$pdo->getAttribute(PDO::ATTR_DRIVER_NAME)) {
		case 'mysql':
		case 'firebird':
		case 'ibm':
			return 'RAND()';
		case 'sqlite':
		case 'sqlite2':
		case 'pgsql':
		case '4D':
			return 'RANDOM()';
		case 'mssql':
			return 'NEWID()';
		case 'oci':
			return 'DBMS_RANDOM.RANDOM';
		case 'odbc':
			// We don't know the underlying database, so there is little we can do.
			return '1';
		case 'informix':
			// Informix does not have a random number function??
			return '1';
		}
	}

	// We only need to limit SELECT queries, not UPDATE or DELETE
	public static function limit_query($sql, $n) {
		$n=(int)$n;
		switch (self::$pdo->getAttribute(PDO::ATTR_DRIVER_NAME)) {
		case 'mysql':
		case 'sqlite':
		case 'sqlite2':
		case 'pgsql':
		case '4D':
			return "{$sql} LIMIT {$n}";
		case 'mssql':
			return preg_replace('/^\s*SELECT /i', "SELECT TOP {$n} ", $sql);
		case 'firebird':
		case 'informix':
			return preg_replace('/^\s*SELECT /i', "SELECT FIRST {$n} ", $sql);
		case 'ibm':
			return "{$sql} FETCH FIRST {$n} ROWS ONLY";
		case 'oci':
			return "SELECT * FROM ($sql) WHERE ROWNUM<={$n}";
		case 'odbc':
			// We don't know the underlying database, so just return all rows :-(
			return $sql;
		}
	}

	//////////////////////////////////////////////////////////////////////////////
	// INTERROGATE DATA DICTIONARY
	//////////////////////////////////////////////////////////////////////////////
	public static function all_tables() {
		global $DBNAME;

		switch (self::$pdo->getAttribute(PDO::ATTR_DRIVER_NAME)) {
		case 'mysql':
		case 'pgsql':
		case 'mssql':
		default:
			// information_schema.tables is an ANSI standard.
			return
				PGV_DB::prepare("SELECT table_name FROM information_schema.tables WHERE table_schema=? ORDER BY table_name")
				->execute(array($DBNAME))
				->fetchOneColumn();
		case 'sqlite':
		case 'sqlite2':
			// SQLITE doesn't support the ANSI standard information_schema
			return
				PGV_DB::prepare("SELECT name FROM sqlite_master WHERE type=? ORDER BY name")
				->execute(array('table'))
				->fetchOneColumn();
		}
	}

	public static function all_columns($table) {
		global $DBNAME;

		switch (self::$pdo->getAttribute(PDO::ATTR_DRIVER_NAME)) {
		case 'mysql':
		case 'pgsql':
		case 'mssql':
		default:
			// information_schema.tables is an ANSI standard.
			return
				PGV_DB::prepare("SELECT column_name FROM information_schema.columns WHERE table_schema=? AND table_name=?")
				->execute(array($DBNAME, $table))
				->fetchOneColumn();
		case 'sqlite':
		case 'sqlite2':
			// SQLITE doesn't support the ANSI standard information_schema
			$rows=
				PGV_DB::prepare("pragma table_info(?)")
				->execute(array($table))
				->fetchAll();
			$columns=array();
			foreach ($rows as $row) {
				$columns[]=$row->name;
			}
			return $columns;
		}
	}

	public static function table_exists($table) {
		global $DBNAME;

		switch (self::$pdo->getAttribute(PDO::ATTR_DRIVER_NAME)) {
		case 'mysql':
		case 'pgsql':
		case 'mssql':
			// information_schema.tables is an ANSI standard.
			return (bool)
				PGV_DB::prepare("SELECT 1 FROM information_schema.tables WHERE table_schema=? AND table_name=?")
				->execute(array($DBNAME, $table))
				->fetchOne();
		case 'sqlite':
		case 'sqlite2':
			// SQLITE doesn't support the ANSI standard information_schema
			return (bool)
				PGV_DB::prepare("SELECT 1 FROM sqlite_master WHERE type=? AND name=?")
				->execute(array('table', $table))
				->fetchOne();
		default:
			// Catch-all for other databases
			try {
				PGV_DB::prepare("SELECT 1 FROM {$table}")->fetchOne();
				return true;
			} catch (PDOException $ex) {
				return false;
			}
		}
	}

	public static function column_exists($table, $column) {
		global $DBNAME;

		switch (self::$pdo->getAttribute(PDO::ATTR_DRIVER_NAME)) {
		case 'mysql':
		case 'pgsql':
		case 'mssql':
			// information_schema.columns is an ANSI standard.
			return (bool)
				PGV_DB::prepare("SELECT 1 FROM information_schema.columns WHERE table_schema=? AND table_name=? AND column_name=?")
				->execute(array($DBNAME, $table, $column))
				->fetchOne();
		case 'sqlite':
		case 'sqlite2':
			// SQLITE doesn't support the ANSI standard information_schema
			$rows=
				PGV_DB::prepare("pragma table_info(?)")
				->execute(array($table))
				->fetchAll();
			foreach ($rows as $row) {
				if ($row->name==$column) {
					return true;
				}
			}
			return false;
		default:
			// Catch-all for other databases
			try {
				PGV_DB::prepare("SELECT {$column} FROM {$table}")->fetchOne();
				return true;
			} catch (PDOException $ex) {
				return false;
			}
		}
	}

	//////////////////////////////////////////////////////////////////////////////
	// FUNCTIONALITY ENHANCEMENTS
	//////////////////////////////////////////////////////////////////////////////

	// Don't list sqlite2 as an available driver.  It is no good for PhpGedView
	public static function getAvailableDrivers() {
		$array=PDO::getAvailableDrivers();
		foreach ($array as $key=>$value) {
			if ($value=='sqlite2') {
				unset($array[$key]);
			}
		}
		return $array;
	}

	// The native quote() function does not convert PHP nulls to DB nulls
	public static function quote($string, $parameter_type=PDO::PARAM_STR) {
		if (is_null($string)) {
			return 'NULL';
		} else {
			return self::$pdo->quote($string, $parameter_type);
		}
	}

	// Add logging to query()
	public static function query($string, $parameter_type= PDO::PARAM_STR) {
		$start=microtime(true);
		$result=self::$pdo->query($string, $parameter_type);
		$end=microtime(true);
		self::logQuery($string, count($result), $end-$start, array());
		return $result;
	}

	// Add logging to exec()
	public static function exec($statement) {
		$start=microtime(true);
		$result=self::$pdo->exec($statement);
		$end=microtime(true);
		self::logQuery($statement, $result, $end-$start, array());
		return $result;
	}

	// Add logging/functionality to prepare()
	public static function prepare($statement) {
		if (!self::$pdo instanceof PDO) {
			throw new PDOException("No Connection Established");
		}
		return new PGV_DBStatement(self::$pdo->prepare($statement));
	}
	
	public static function prepareLimit($statement, $n) {
		if (!self::$pdo instanceof PDO) {
			throw new PDOException("No Connection Established");
		}
		$statement=PGV_DB::limit_query($statement, $n);
		return new PGV_DBStatement(self::$pdo->prepare($statement));
	}
	
	// Map all other functions onto the base PDO object
	public function __call($function, $params) {
		return call_user_func_array(array(self::$pdo, $function), $params);
	}
}

class PGV_DBStatement {
	//////////////////////////////////////////////////////////////////////////////
	// CONSTRUCTION
	// Decorate a PDOStatement object.
	// See http://en.wikipedia.org/wiki/Decorator_pattern
	//////////////////////////////////////////////////////////////////////////////
	private $pdostatement=null;

	// Keep track of calls to execute(), so we can do it automatically
	private $executed=false;

	// Keep a copy of the bind variables, for logging
	private $bind_variables=array();

	// Our constructor just takes a copy of the object to be decorated
	public function __construct(PDOStatement $statement) {
		$this->pdostatement=$statement;
	}

	//////////////////////////////////////////////////////////////////////////////
	// FLUENT INTERFACE
	// Add automatic calling of execute() and closeCursor()
	// See http://en.wikipedia.org/wiki/Fluent_interface
	//////////////////////////////////////////////////////////////////////////////
	public function __call($function, $params) {
		switch ($function) {
		case 'closeCursor':
			$this->executed=false;
			// no break;
		case 'bindColumn':
		case 'bindParam':
		case 'bindValue':
			// TODO: bind variables need to be stored in $this->bind_variables so we can log them
		case 'setAttribute':
		case 'setFetchMode':
			// Functions that return no values become fluent
			call_user_func_array(array($this->pdostatement, $function), $params);
			return $this;
		case 'execute':
			if ($this->executed) {
				trigger_error('PGV_DBStatement::execute() called twice.', E_USER_ERROR);
			} else {
				$start=microtime(true);
				$result=call_user_func_array(array($this->pdostatement, $function), $params);
				$end=microtime(true);
				$this->executed=!preg_match('/^(insert into|delete from|update|create|alter) /i', $this->pdostatement->queryString);
				if ($params) {
					$this->bind_variables=$params[0];
				}
				PGV_DB::logQuery($this->pdostatement->queryString, $this->pdostatement->rowCount(), $end-$start, $this->bind_variables);
				return $this;
			}
		case 'fetch':
		case 'fetchColumn':
		case 'fetchObject':
		case 'fetchAll':
			// Automatically execute the query
			if (!$this->executed) {
				$this->execute();
				$this->executed=true;
			}
			// no break;
		default:
			return call_user_func_array(array($this->pdostatement, $function), $params);
		}
	}

	//////////////////////////////////////////////////////////////////////////////
	// FUNCTIONALITY ENHANCEMENTS
	//////////////////////////////////////////////////////////////////////////////

	// Fetch one row, and close the cursor.  e.g. SELECT * FROM foo WHERE pk=bar
	public function fetchOneRow($fetch_style=PDO::FETCH_OBJ) {
		if (!$this->executed) {
			$this->execute();
		}
		$row=$this->pdostatement->fetch($fetch_style);
		$this->pdostatement->closeCursor();
		$this->executed=false;
		return $row ? $row : null;
	}

	// Fetch one value and close the cursor.  e.g. SELECT MAX(foo) FROM bar
	public function fetchOne() {
		if (!$this->executed) {
			$this->execute();
		}
		$row=$this->pdostatement->fetch(PDO::FETCH_NUM);
		$this->pdostatement->closeCursor();
		$this->executed=false;
		return is_array($row) ? $row[0] : null;
	}

	// Fetch two columns, and return an associative array of col1=>col2
	public function fetchAssoc() {
		if (!$this->executed) {
			$this->execute();
		}
		$rows=array();
		while ($row=$this->pdostatement->fetch(PDO::FETCH_NUM)) {
			$rows[$row[0]]=$row[1];
		}
		$this->pdostatement->closeCursor();
		return $rows;
	}

	// Fetch all the first column, as an array
	public function fetchOneColumn() {
		if (!$this->executed) {
			$this->execute();
		}
		$list=array();
		while ($row=$this->pdostatement->fetch(PDO::FETCH_NUM)) {
			$list[]=$row[0];
		}
		$this->pdostatement->closeCursor();
		return $list;
	}
}