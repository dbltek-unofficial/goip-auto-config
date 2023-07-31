<?php
!defined('OK') && exit('ForbIdden');
$Table=$tablepre."product";
$statu="";

if(isset($_GET['action'])) {
	$action=$_GET['action'];
	if($action=="modify") {
		$statu="modify";
		$Id=$_GET['Id'];
		$query=$db->query("SELECT * FROM ".$Table." WHERE Id=$Id");
		$rsProduct=$db->fetch_array($query);
		
		if($rsProduct['Elite']=="1")
			$Elite="checked";
		if($rsProduct['New']=="1")
			$New="checked";
		if($rsProduct['pd']=="1")
			$pd="checked";
			
			

		$query=$db->query("SELECT ClassId,ClassName,ParentId,Child,OrderId FROM ".$Table."class ORDER BY ParentId,Child desc,OrderId");
$ClassNameInco;
		while($row=$db->fetch_array($query)) {
			if($row[0]!=$row[2]){
			$ClassList=$ClassList." <option value=".$row['0'];                               
			if($rsProduct['ClassId']==$row['0'])
				$ClassList=$ClassList." selected";
			$ClassList=$ClassList.">　→".$row[1]."</option>";

			}
			else
				$ClassList=$ClassList." <option value=\"\">".$row[1]."</option>";
		}
	}
	elseif($action=="add") {
		$statu="add";
		$query=$db->query("SELECT ClassId,ClassName,ParentId,Child,OrderId FROM ".$Table."class ORDER BY ParentId,Child desc,OrderId");
$ClassNameInco;
		while($row=$db->fetch_array($query)) {
			if($row[0]!=$row[2])
				$ClassList=$ClassList." <option value=".$row[0].">　→".$row[1]."</option>";
			else
				$ClassList=$ClassList." <option value=\"\">".$row[1]."</option>";
		}
		$UpdateTime=date("Y-m-d H:i:s");
		$query=$db->query("SELECT max(OrderId) FROM ".$Table);
		$row=$db->fetch_array($query);
		$OrderId=$row[0]+1;

	}
	elseif($action=="Del") {
		$statu="Del";
		$Id=$_GET['Id'];
		$ClassId=$_GET['ClassId'];
		$query=$db->query("Delete  from ".$Table." WHERE Id=$Id");
		WriteSuccessMsg("<br><li>Delete Success</li>","{$URL}?job=Product_List&ClassId={$ClassId}");
	}
	elseif($action=="DelMore") {
		$statu="DelMore";
		$ClassId=$_GET['ClassId'];
		$num=$_POST['boxs'];
		for($i=0;$i<$num;$i++){	
			if(!empty($_POST["Id$i"])){
				if($Id=="")
					$Id=$_POST["Id$i"];
				else
					$Id=$_POST["Id$i"].",$Id";
			}
		}
		if(!empty($Id))
			$query=$db->query("Delete  from ".$Table." WHERE Id in ($Id)");
			
		WriteSuccessMsg("<br><li>Delete Success</li>","{$URL}?job=Product_List&ClassId={$ClassId}");
	}
	
	elseif($action=="SaveAdd") {
		$ClassId=$_POST['ClassId'];
		$Title=$_POST['Title'];
		$Features=$_POST['Features'];
		$Description=$_POST['Description'];
		$UrlLink=$_POST['UrlLink'];
		$UrlLink1=$_POST['UrlLink1'];
		$UrlLink2=$_POST['UrlLink2'];
		$PDF=$_POST['PDF'];
		$UpdateTime=$_POST['UpdateTime'];
		$OrderId=$_POST['OrderId'];
		$Elite=$_POST['Elite'];
		$New=$_POST['New'];
		$pd=$_POST['pd'];
		$Related=$_POST['Related'];
		
		if($Elite!="1")
			$Elite=0;
		if($New!="1")
			$New=0;
		if($pd!="1")
			$pd=0;
			
		
		$ErrMsg="";
		if(empty($ClassId))
			$ErrMsg ='<br><li>Column  shouldn’t be empty</li>';
		if(empty($Title))
			$ErrMsg=$ErrMsg."<br><li>Title shouldn’t be empty</li>";
		if(empty($Description))
			$ErrMsg=$ErrMsg."<br><li>Description shouldn’t be empty</li>";
		if($ErrMsg!="")
			WriteErrMsg($ErrMsg);
		else{
			$query=$db->query("INSERT INTO ".$Table." (ClassId,Title,Features,Description,UrlLink,UrlLink1,UrlLink2,PDF,OrderId,Elite,New,UpdateTime,Related,pd) VALUES ('$ClassId','$Title','$Features','$Description','$UrlLink','$UrlLink1','$UrlLink2','$PDF','$OrderId','$Elite','$New','$UpdateTime','$Related','$pd')");
			WriteSuccessMsg("<br><li>Add Success!continue to add</li>","{$URL}?job=Product_AM&action=add");
		}
	}
	elseif($action=="SaveModify") {
		$ClassId=$_POST['ClassId'];
		$Title=$_POST['Title'];
		$Features=$_POST['Features'];
		$Description=$_POST['Description'];
		$UrlLink=$_POST['UrlLink'];
		$UrlLink1=$_POST['UrlLink1'];
		$UrlLink2=$_POST['UrlLink2'];
		$PDF=$_POST['PDF'];
		$UpdateTime=$_POST['UpdateTime'];
		$OrderId=$_POST['OrderId'];
		$Elite=$_POST['Elite'];
		$New=$_POST['New'];
		$Related=$_POST['Related'];
		$pd=$_POST['pd'];
		
		if($Elite!="1")
			$Elite=0;
		if($New!="1")
			$New=0;
		if($pd!="1")
			$pd=0;
		
			
		$Id=$_POST['Id'];
		$ErrMsg="";
		if(empty($ClassId))
			$ErrMsg ='<br><li>Column  shouldn’t be empty</li>';
		if(empty($Title))
			$ErrMsg=$ErrMsg."<br><li>Title shouldn’t be empty</li>";
		if(empty($Description))
			$ErrMsg=$ErrMsg."<br><li>Description shouldn’t be empty</li>";
		if($ErrMsg!="")
			WriteErrMsg($ErrMsg);
		else{
			$query=$db->query("UPDATE ".$Table." SET ClassId='$ClassId',Title='$Title',Features='$Features',UrlLink='$UrlLink',UrlLink1='$UrlLink1',UrlLink2='$UrlLink2',PDF='$PDF',UpdateTime='$UpdateTime',OrderId='$OrderId',Elite='$Elite',Elite='$Elite',New='$New',Related='$Related',Description='$Description',pd='$pd' WHERE Id='$Id'");
			
			WriteSuccessMsg("<br><li>Modify Success!</li>","{$URL}?job=Product_List&ClassId={$ClassId}");
		}
	}

	else{
		$statu="main";
		
	}
}
else{
	$statu="main";
	$ClassId=trim($_GET['ClassId']);
	
}

	
require_once template('Product_AM');

?>
