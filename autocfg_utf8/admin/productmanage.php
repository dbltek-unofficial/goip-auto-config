<?php
!defined('OK') && exit('ForbIdden');


if(isset($_GET['classid'])&&$classid=trim($_GET['classid'])):
$chanpin=$db->fetch_array($db->query("SELECT chanpin,classname,type FROM ".$tablepre."projectclass where classid=$classid"));
if(empty($chanpin[0])){
	WriteErrMsg("<br><li>不存在此类型</li>");
	exit();
}
$classname=$chanpin[1];
$type=$chanpin["type"];
/*
$query=$db->query("select * from ".$chanpin['chanpin']." ORDER BY ".$chanpin['chanpin'].".orderid");
while($row=$db->fetch_array($query)) {
	$rsdb[]=$row;
}
*/
	//$row=$db->fetch_array($db->query("SELECT count(*) AS count FROM ".$chanpin['chanpin']));
	
	$row=$db->fetch_array($db->query("SELECT count(*) AS count FROM ".$chanpin['chanpin']));
	$count=$row['count'];
	$numofpage=ceil($count/$perpage);
	$totlepage=$numofpage;
	if(isset($_GET['page'])) {
		$page=$_GET['page'];
	} else {
		$page=1;
	}
	if($numofpage && $page>$numofpage) {
		$page=$numofpage;
	}
	if($page > 1) {
		$start_limit=($page - 1)*$perpage;
	} else{
		$start_limit=0;
		$page=1;
	}
	
	$fenye=showpage("$URL?job=productmanage&classid=$classid&",$page,$count,$perpage,true,true,"编");
	$query=$db->query("SELECT * FROM ".$chanpin['chanpin']." ORDER BY orderid ASC, chanpinid ASC LIMIT $start_limit,$perpage");
	while($row=$db->fetch_array($query)) {
		require ('product_'.$chanpin['type'].'/manage.php');

		$rsdb[]=$row;
	}

else :
	$row=$db->fetch_array($db->query("SELECT count(*) AS count FROM chanpin"));
	$count=$row['count'];
	$numofpage=ceil($count/$perpage);
	$totlepage=$numofpage;
	if(isset($_GET['page'])) {
		$page=$_GET['page'];
	} else {
		$page=1;
	}
	if($numofpage && $page>$numofpage) {
		$page=$numofpage;
	}
	if($page > 1) {
		$start_limit=($page - 1)*$perpage;
	} else{
		$start_limit=0;
		$page=1;
	}
	
	$fenye=showpage("$URL?job=productmanage&",$page,$count,$perpage,true,true,"编");
	$chanpinquery=$db->query("SELECT * FROM chanpin ORDER BY classid ASC, chanpinid ASC LIMIT $start_limit,$perpage");
	while($chanpin=$db->fetch_array($chanpinquery)) {
		//WriteErrMsg("<br><li>不存在此类型</li>"."SELECT * FROM ".$chanpin['chanpin']." where chanpinid=".$chanpin['chanpinid']);
	  $query=$db->query("SELECT * FROM ".$chanpin['chanpin']." where chanpinid=".$chanpin['chanpinid']);
	 	$row=$db->fetch_array($query);

		require ('product_'.$chanpin['type'].'/manage.php');
		$row['allchanpinid'] = $chanpin['id'];
		$rsdb[]=$row;
	}
	$classname="=所有终端=";

endif;	
require_once template('productmanage');

?>
