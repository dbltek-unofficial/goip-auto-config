<?php
!defined('OK') && exit('ForbIdden');

$Id=$_GET['Id'];
$query=$db->query("SELECT * FROM ".$tablepre."content WHERE Id=$Id");
$rs=$db->fetch_array($query);
$ClassId=$rs['ClassId'];
$UpdateTime=$rs['UpdateTime'];
$ShowIndex=$rs['ShowIndex'];


$query=$db->query("SELECT * FROM ".$tablepre."newsclass");
while($row=$db->fetch_array($query)) {
	$ClassList=$ClassList." <option value=".$row['ClassId'];                               
	if($ClassId==$row['ClassId'])
		$ClassList=$ClassList." selected";
	$ClassList=$ClassList.">".$row['ClassName']."</option>";
}

require_once template('edit');
?>
