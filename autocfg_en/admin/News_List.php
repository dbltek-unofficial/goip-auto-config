<?php
!defined('OK') && exit('ForbIdden');

$query=$db->query("SELECT * FROM ".$tablepre."newsclass ORDER BY OrderId");
while($sort_row=$db->fetch_array($query)) {
	$sortdb[]=$sort_row;
}
$ClassId=trim($_GET['ClassId']);
if(!empty($ClassId)) {

	$query=$db->query("SELECT count(*) AS count FROM ".$tablepre."content WHERE ClassId=$ClassId");
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

	$fenye=showpage("$URL?job=News_List&ClassId=$ClassId&",$page,$count,$perpage,true,true,"rows");
	$query=$db->query("SELECT * FROM ".$tablepre."content WHERE ClassId=$ClassId ORDER BY Id DESC LIMIT $start_limit,$perpage");
	while($row=$db->fetch_array($query)) {
		$rsdb[]=$row;
	}
	
		//$fenye=showpage("$URL?job=content&ClassId=&",11,120,10,true,true,"?);
} else {
	$query=$db->query("SELECT count(*) AS count FROM ".$tablepre."content");
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
	$fenye=showpage("$URL?job=News_List&ClassId=$ClassId&",$page,$count,$perpage,true,true,"rows");
	$query=$db->query("SELECT * FROM ".$tablepre."content ORDER BY Id DESC LIMIT $start_limit,$perpage");
	while($row=$db->fetch_array($query)) {
		$rsdb[]=$row;
	}
	
}
	
require_once template('News_List');

?>
