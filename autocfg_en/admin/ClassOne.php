<?php
!defined('OK') && exit('ForbIdden');
$TableClass=$tablepre."DownClass";
$statu="";

if(isset($_GET['action'])) {
	$action=$_GET['action'];
	if(isset($_GET['ClassId'])) {
		$ClassId=$_GET['ClassId'];
	}
	if($action=="modify") {
		$ClassList="";
		$statu="modify";
		$query=$db->query("SELECT ClassName,OrderId FROM ".$TableClass." WHERE ClassId=$ClassId");
		if($row=$db->fetch_array($query)){	
			$ClassName=$row[0];
			$OrderId=$row[1];
		}
	}
	elseif($action=="add") {
		$statu="add";
		$query=$db->query("SELECT MAX(OrderId) FROM ".$TableClass);
		if($row=$db->fetch_array($query))
			$OrderId=$row[0]+1;
		else
			$OrderId=1;
	}
	elseif($action=="order") {
		$statu="order";
	}
	elseif($action=="SaveModify") {
		$statu="SaveModify";
		$ClassName=$_POST['ClassName'];
		$OrderId=$_POST['OrderId'];
		$ClassId=$_POST['ClassId'];
		$ErrMsg="";
		if(empty($ClassId))
			$ErrMsg ='<br><li>Please choose Column</li>';
		if(empty($ClassName))
			$ErrMsg ='<br><li>column title shouldn be empty</li>';
		if(empty($OrderId))
			$ErrMsg=$ErrMsg."<br><li>sort order shouldnbe empty and only for number</li>";
		if($ErrMsg!="")
			WriteErrMsg($ErrMsg);
		else{
			$query=$db->query("SELECT ClassId FROM ".$TableClass." WHERE ClassId='$ClassId' ");
			$rs=$db->fetch_array($query);
			if(empty($rs[0]))
				WriteErrMsg("<br><li>Cann't find the column!</li>");
			else{
				$query=$db->query("SELECT ClassId FROM ".$TableClass." WHERE ClassName='$ClassName' and ClassId<>$ClassId");
				$rs=$db->fetch_array($query);
				if(empty($rs[0])){
					$query=$db->query("UPDATE ".$TableClass." SET ClassName='$ClassName',OrderId=$OrderId,ParentId=$ClassParentId  WHERE ClassId=$ClassId") ;
					WriteSuccessMsg("<br><li>Modify Success</li>","{$URL}?job=ClassOne&Table=$TableClass");
				}
				else{
					WriteErrMsg("<br><li>Column [$ClassName] have existed</li>");
				}
			}
		}
	}
	elseif($action=="SaveAdd") {
		$statu="SaveAdd";
		$ClassName=$_POST['ClassName'];
		$OrderId=$_POST['OrderId'];
		$ErrMsg="";
		if(empty($ClassName))
			$ErrMsg ='<br><li>column title shouldn鈥檛 be empty</li>';
		if(empty($OrderId))
			$ErrMsg=$ErrMsg."<br><li>sort order shouldn鈥檛 be empty and only for number</li>";
		if($ErrMsg!="")
			WriteErrMsg($ErrMsg);
		else{
			$query=$db->query("SELECT ClassId FROM ".$TableClass." WHERE ClassName='$ClassName' ");
			$rs=$db->fetch_array($query);
			if(empty($rs[0])){
				$query=$db->query("INSERT INTO ".$TableClass." (ClassName,OrderId) VALUES ('$ClassName','$OrderId')");
				WriteSuccessMsg("<br><li>Add Success</li>","{$URL}?job=ClassOne&Table=$TableClass");
			}
			else{
				$ErrMsg=$ErrMsg."<br><li>Column [$ClassName] have existed</li>";
				WriteErrMsg($ErrMsg);
			}
		}
	}
	else
		$statu="main";
}
else{
	$statu="main";
	$query=$db->query("SELECT * FROM ".$TableClass." ORDER BY OrderId");
	while($row=$db->fetch_array($query)){
		$rsdb[]=$row;
	}
}

require_once template('ClassOne');

?>