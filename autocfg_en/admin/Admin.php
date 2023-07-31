<?php
!defined('OK') && exit('ForbIdden');

$statu="";

if(isset($_GET['action'])) {
	$action=$_GET['action'];
	if($action=="modify") {
		$statu="modify";
		$Id=$_GET['Id'];
		$query=$db->query("SELECT UserName FROM ".$tablepre."admin WHERE Id=$Id");
		$rs=$db->fetch_array($query);
		$UserName=$rs['UserName'];
		
	} elseif($action=="add") {
		$statu="add";
	}
	else{
		$statu="main";
		$adminname=$_SESSION['autocfg_adminname'];
		$i=0;
		$query=$db->query("SELECT * FROM ".$tablepre."admin ORDER BY Id DESC");
		while($row=$db->fetch_array($query)) {
			$rsdb[]=$row;
		}
	}
}
else{
	$statu="main";
	$ClassId=trim($_GET['ClassId']);
	$adminname=$_SESSION['autocfg_adminname'];
	$i=0;
	$query=$db->query("SELECT * FROM ".$tablepre."admin ORDER BY Id DESC");
	while($row=$db->fetch_array($query)) {
		$rsdb[]=$row;
	}
}

require_once template('Admin');

?>