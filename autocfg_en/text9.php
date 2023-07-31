<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<?php
$host = "localhost";
$user = "root";
$password = "dbl";
$dbase_name = "haha";

$conn = mysql_connect($host, $user, $password) or
			die (mysql_error());
		mysql_select_db($dbase_name, $conn) or
			die (mysql_error());

$drop = "drop table if exists muban1";		
$select_drop = mysql_query($drop, $conn)  or
			die (mysql_error());

$sql = "CREATE TABLE muban1 (
  `id` int(10) unsigned NOT NULL auto_increment,
  `title` varchar(80) NOT NULL default '',
  `classid` int(11) NOT NULL default '0',
  `orderid` int(11) NOT NULL default '0',
  `muban` varchar(80) NOT NULL default '',
  `AUTOCFG_KEY` varchar(80) NOT NULL default '',";
  					for($i=1;$i<992;$i++)
						$sql .= "ha".$i." varchar(60) NOT NULL default '',";
					$sql .= "PRIMARY KEY  (id)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;";	
$select_result = mysql_query($sql, $conn)  or
			die (mysql_error());
	
echo "ok!";	
?>
</body>
</html>
