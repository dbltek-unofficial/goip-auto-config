<?php
!defined('OK') && exit('ForbIdden');

$query=$db->query("SELECT * FROM ".$tablepre."productclass  WHERE ClassId=ParentId ORDER BY OrderId");
while($sort_row=$db->fetch_array($query)) {
	$sortdb[]=$sort_row;
}
$ClassId=trim($_GET['ClassId']);
if(!empty($ClassId)) {
	$query=$db->query("SELECT ParentId FROM ".$tablepre."productclass WHERE ClassId=$ClassId");
	$row=$db->fetch_array($query);
	if($row[0]==$ClassId){
		$query=$db->query("SELECT ClassId FROM ".$tablepre."productclass WHERE ParentId=$ClassId");
		while($sort_row=$db->fetch_array($query)) {
			if($ClassId1=="")
					$ClassId1=$sort_row[0];
				else
					$ClassId1=$sort_row[0].",$ClassId1";
		}
	}
	else
		$ClassId1=$ClassId;

	$query=$db->query("SELECT count(*) AS count FROM ".$tablepre."product WHERE ClassId in ($ClassId1)");
	$row=$db->fetch_array($query);
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

	$fenye=showpage("$URL?job=Product_List&ClassId=$ClassId&",$page,$count,$perpage,true,true,"rows");
	$query=$db->query("SELECT * FROM ".$tablepre."product WHERE ClassId in ($ClassId1) ORDER BY orderid desc, Id DESC LIMIT $start_limit,$perpage");
	while($row=$db->fetch_array($query)) {
		$rsdb[]=$row;
	}
	
		//$fenye=showpage("$URL?job=product&ClassId=&",11,120,10,true,true,"编");
} else {
	$query=$db->query("SELECT count(*) AS count FROM ".$tablepre."product");
	$row=$db->fetch_array($query);
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
	$fenye=showpage("$URL?job=Product_List&ClassId=$ClassId&",$page,$count,$perpage,true,true,"rows");
	$query=$db->query("SELECT * FROM ".$tablepre."product ORDER BY orderid desc,  Id DESC LIMIT $start_limit,$perpage");
	while($row=$db->fetch_array($query)) {
		$rsdb[]=$row;
	}
	
}
	
require_once template('Product_List');

?>
