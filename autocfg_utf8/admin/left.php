<?php
!defined('OK') && exit('ForbIdden');

$UserName=$_SESSION['autocfg_adminname'];

$query=$db->query("SELECT classid,classname FROM ".$tablepre."projectclass ORDER BY orderid");
while($row=$db->fetch_array($query))
	$rsdb[]=$row;
			
require_once template('left');

?>