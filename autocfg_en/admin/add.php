<?php
!defined('OK') && exit('ForbIdden');


$query=$db->query("SELECT * FROM ".$tablepre."newsclass");
while($row=$db->fetch_array($query)) {
	$rsdb[]=$row;
}

$UpdateTime=date("Y-m-d H:i:s");
require_once template('add');
?>