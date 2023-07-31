<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>

<?php

        $dbhost='localhost';    //database server
        $dbuser='autocfg';              //database username
        $dbpw='autocfg';                //database password
        $dbname='autocfg_en';           //database name

        $tablepre='ms_';      

        class DB {
        function query($sql) {
                global $dbhost,$dbuser,$dbpw,$dbname;
                $conn=mysql_connect($dbhost,$dbuser,$dbpw) or die("Conld not connect");
                mysql_select_db($dbname,$conn);
                $result=mysql_query($sql) or die("Bad query: ".mysql_error());
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

if (isset($_GET['language_set'])) {
	if ($_GET['language_set'] == "e") {	
		$set_lang=$db->query("update ms_admin set Lang=1 where Id = 1");
		echo "<script language='javascript' type='text/javascript'>";  
		echo "top.location.href='autocfg_en/index.php'";  
		echo "</script>";  
	}
	else {	
		$set_lang=$db->query("update ms_admin set Lang=2 where Id = 1");
		echo "<script language='javascript' type='text/javascript'>";  
		echo "top.location.href='autocfg_utf8/index.php'";  
		echo "</script>";
	}
}


else {	
	$sel_lang=$db->query("select Lang from ms_admin where Id = 1");
	$sel_result=$db->fetch_array($sel_lang);
	echo $sel_result['Lang'];
	if ($sel_result['Lang'] == "1")
		Header("Location: autocfg_en/index.php"); 	
	else
		Header("Location: autocfg_utf8/index.php");	
}


?>


</body>
</html>