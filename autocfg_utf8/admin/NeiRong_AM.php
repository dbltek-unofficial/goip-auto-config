<?php
!defined('OK') && exit('ForbIdden');
$Table=$tablepre."solution";
$statu="";

if(isset($_GET['action'])) {
	$action=$_GET['action'];
	if($action=="modify") {
		$statu="modify";
		$Id=$_GET['Id'];
		$query=$db->query("SELECT * FROM ".$Table." WHERE Id=$Id");
		$rsNeiRong=$db->fetch_array($query);
	}
	if($action=="Del") {
		$statu="Del";
		$Id=$_GET['Id'];
		$query=$db->query("Delete  from ".$Table." WHERE Id=$Id");
		WriteSuccessMsg("<br><li>Delete Success</li>","{$URL}?job=NeiRong_List");
	}
	elseif($action=="add") {
		$statu="add";
		$UpdateTime=date("Y-m-d H:i:s");
	}
	elseif($action=="SaveAdd") {
		$Title=$_POST['Title'];
		$Content=$_POST['Content'];
		$UpdateTime=$_POST['UpdateTime'];
		$ShowIndex=$_POST['checkbox'];
		
		$ErrMsg="";
		
		
					
		if(empty($Title))
						$ErrMsg=$ErrMsg."<br><li>Title should not be empty</li>";
		if(empty($Content))
						$ErrMsg=$ErrMsg."<br><li>Content should not be empty</li>";
		if($ErrMsg!="")
			WriteErrMsg($ErrMsg);
		else{
			$query=$db->query("INSERT INTO ".$Table." (Title,Content,UpdateTime,ShowIndex) VALUES ('$Title','$Content','$UpdateTime','$ShowIndex')");
			WriteSuccessMsg("<br><li>Add Success!continue to add</li>","{$URL}?job=NeiRong_AM&action=add");
		}
	}
	elseif($action=="SaveModify") {
		$Title=$_POST['Title'];
		$Content=$_POST['Content'];
		$UpdateTime=$_POST['UpdateTime'];
		$ShowIndex=$_POST['checkbox'];
		$Id=$_POST['Id'];
		$ErrMsg="";
		
		if(empty($Title))
			$ErrMsg=$ErrMsg."<br><li>Title should not be empty</li>";
		if(empty($Content))
			$ErrMsg=$ErrMsg."<br><li>Content should not be empty</li>";
		if($ErrMsg!="")
			WriteErrMsg($ErrMsg);
		else{
			$query=$db->query("UPDATE ".$Table." SET Title='$Title',Content='$Content',UpdateTime='$UpdateTime',ShowIndex='$ShowIndex' WHERE Id='$Id'");
			WriteSuccessMsg("<br><li>Modify Success!</li>","{$URL}?job=NeiRong_List");
		}
	}
	else{
	}
}
else{
}

require_once template('NeiRong_AM');
?>
