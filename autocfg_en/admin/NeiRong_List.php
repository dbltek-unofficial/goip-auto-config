<?php
!defined('OK') && exit('ForbIdden');
$Table=$tablepre."solution";

	$query=$db->query("SELECT count(*) AS count FROM ".$Table);
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
	$fenye=showpage("$URL?job=NeiRong_List",$page,$count,$perpage,true,true,"rows");
	$query=$db->query("SELECT * FROM ".$Table." ORDER BY Id DESC LIMIT $start_limit,$perpage");
	while($row=$db->fetch_array($query)) {
		$rsdb[]=$row;
	}
	
	
require_once template('NeiRong_List');

?>
