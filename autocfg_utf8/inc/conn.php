<?php

include 'forbId.php';

class DB {
	function query($sql) {
		global $dbhost,$dbuser,$dbpw,$dbname;
		$conn=mysql_connect($dbhost,$dbuser,$dbpw) or die("Conld not connect");
		mysql_select_db($dbname,$conn);
		$result=mysql_query($sql) or die("$Bad query: ".mysql_error());
		return $result;
	}

	function fetch_array($query) {
		return mysql_fetch_array($query);
	}
	
	function num_rows($query) {
		return mysql_num_rows($query);
	}	

        function updatequery($sql) {

                $result=mysql_query($sql);
                return $result;
        }
}

$db=new DB;

?>
