<?php

class Database {
	
	public static $lastMysqlErrors = array();
	
	
	
	/**
	 * Connects to database.
	 */
	public static function databaseConnect() {
		
		# Connection settings
		# tobias-db.czo3mjccdla1.eu-cnetral-1.rdsamazonaws.com:3306
		$dbPath = "localhost";
		$dbDatabase = "Planspiel";
                $dbUser = "root";
                $dbPassword = "a7N13t20";
		
		$connection = @mysql_connect($dbPath, $dbUser, $dbPassword);
		if (!$connection) {
			echo "No connection to database!<br><br>";
			echo mysql_error();
			die();
		}
		else {
			mysql_select_db($dbDatabase, $connection) or die ("Database \"" . $dbDatabase . "\" not found!");
			mysql_query("SET NAMES 'utf8'");
		}
		
	}
	
	
	
	/**
	 * Executes a database query.
	 * 
	 * @param String $query
	 * @return String Array
	 */
	private static function sqlExecuteQuery($query) {
		$resource = mysql_query($query);
		$error = mysql_error();
		if ($error != "") {
			self::$lastMysqlErrors[] = $error;
		}
		return $resource;
	}
	
	
	/**
	 * Executes a SELECT.
	 * 
	 * @param String $query
	 * @return String Array
	 */
	public static function sqlSelect($query) {
		//echo $query;
		$return = self::sqlExecuteQuery($query);
		//echo mysql_error();
		while ($row = mysql_fetch_assoc($return)) {
			$rows[] = $row;
		}
		return $rows;
	}
	
	
	
	/**
	 * Executes an INSERT.
	 * 
	 * @param String $query
	 * @return int Inserted ID
	 */
	public static function sqlInsert($query) {
		self::sqlExecuteQuery($query);
		$last_id = mysql_insert_id();
		if ($last_id == 0 || $last_id === false) {
			return null;
		}
		else {
			return $last_id;
		}
	}
	
	
	
	/**
	 * Executes an UPDATE.
	 * 
	 * @param String $query
	 * @return int Number of affected rows
	 */
	public static function sqlUpdate($query) {
		self::sqlExecuteQuery($query);
		$affected = mysql_affected_rows();
		return $affected;
	}
        
	
	
	/**
	 * Executes a DELETE.
	 * 
	 * @param String $query
	 * @return boolean True or false
	 */
	public static function sqlDelete($query) {
		if (self::sqlUpdate($query) == 0) {
                    return false;
		}
		else {
                    return true;
		}
	}
	
}

?>
