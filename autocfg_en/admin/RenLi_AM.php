<?php
!defined('OK') && exit('ForbIdden');
$Table=$tablepre."renli";
$statu="";

if(isset($_GET['action'])) {
	$action=$_GET['action'];
	if($action=="modify") {
		$statu="modify";
		$Id=$_GET['Id'];
		$query=$db->query("SELECT * FROM ".$Table." WHERE Id=$Id");
		$rsRenLi=$db->fetch_array($query);
	}
	elseif($action=="add") {
		$statu="add";
		$UpdateTime=date("Y-m-d H:i:s");
	}
	elseif($action=="Del") {
		$statu="Del";
		$Id=$_GET['Id'];
		$query=$db->query("Delete  from ".$Table." WHERE Id=$Id");
		WriteSuccessMsg("<br><li>Delete Success</li>","{$URL}?job=RenLi_List");
	}
	elseif($action=="DelMore") {
		$statu="DelMore";
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
			
		WriteSuccessMsg("<br><li>Delete Success</li>","{$URL}?job=RenLi_List");
	}
	
	elseif($action=="SaveAdd") {
		$Position=$_POST['Position'];
		$Location=$_POST['Location'];
		$Responsibilities=$_POST['Responsibilities'];
		$WorkingMode=$_POST['WorkingMode'];
		$WorkingLoad=$_POST['WorkingLoad'];
		$Requirements=$_POST['Requirements'];
		$Salary=$_POST['Salary'];
		$Contact=$_POST['Contact'];
		$UpdateTime=$_POST['UpdateTime'];
		$ErrMsg="";
		if(empty($Position))
			$ErrMsg ='<br><li>Input Position</li>';
		
		if($ErrMsg!="")
			WriteErrMsg($ErrMsg);
		else{
			$query=$db->query("INSERT INTO ".$Table." (Position,Location,Responsibilities,WorkingMode,WorkingLoad,Requirements,Salary,Contact,UpdateTime) VALUES ('$Position','$Location','$Responsibilities','$WorkingMode','$WorkingLoad','$Requirements','$Salary','$Contact','$UpdateTime')");
			WriteSuccessMsg("<br><li>Add Success!continue to add</li>","{$URL}?job=RenLi_AM&action=add");
		}
	}
	elseif($action=="SaveModify") {
		$Position=$_POST['Position'];
		$Location=$_POST['Location'];
		$Responsibilities=$_POST['Responsibilities'];
		$WorkingMode=$_POST['WorkingMode'];
		$WorkingLoad=$_POST['WorkingLoad'];
		$Requirements=$_POST['Requirements'];
		$Salary=$_POST['Salary'];
		$Contact=$_POST['Contact'];
		$UpdateTime=$_POST['UpdateTime'];
		
		$Id=$_POST['Id'];
		$ErrMsg="";
		if(empty($Position))
			$ErrMsg ='<br><li>Input Position</li>';
		if($ErrMsg!="")
			WriteErrMsg($ErrMsg);
		else{
			$query=$db->query("UPDATE ".$Table." SET Position='$Position',Location='$Location',Responsibilities='$Responsibilities',WorkingLoad='$WorkingLoad',WorkingMode='$WorkingMode',Requirements='$Requirements',Salary='$Salary',Contact='$Contact',UpdateTime='$UpdateTime' WHERE Id='$Id'");
			
			WriteSuccessMsg("<br><li>Modify Success!</li>","{$URL}?job=RenLi_List");
		}
	}

	else{
		$statu="main";
	}
}
else{
	$statu="main";
}

	
require_once template('RenLi_AM');

?>
