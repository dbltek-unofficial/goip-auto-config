<?php
!defined('OK') && exit('ForbIdden');

function do_modifymore($db, $classid, $id, $tablepre){

	$query=$db->query("SELECT * FROM ".$tablepre."projectclass where classid=$classid");
	$row=$db->fetch_array($query);
	$classname=$row['classname'];
	$telport=$row['TELPORT'];
	$type=$row['type'];

			//date_default_timezone_set(PRC);
			$updatetime=date("Y-m-d H:i:s");
			
			$sql="UPDATE ".$row['chanpin']." SET updatetime='".$updatetime."' ";
			$sql1 = "UPDATE 32goip_chanpin_b SET TELPORT=32";

			require('product_'.$type.'/modifymore.php');		
			$sql=$sql." where chanpinid in (".$id.")";
			$sql1=$sql1." where chanpinid in (".$id.")";
			//WriteErrMsg("<br><li>".$sql."</li>");
			$query=$db->query($sql);
			$query1=$db->query($sql1);
			
			return $query;

}

if(!empty($_GET['classid'])){
		$id = "";
		$boxsnum=0;
		$num=$_POST['boxs'];
		for($i=0;$i<$num;$i++){	
			if(!empty($_POST["chanpinid$i"])){
				if($id=="")
					$id=$_POST["chanpinid$i"];
				else
					$id=$_POST["chanpinid$i"].",$id";
			}
		}
		
		$classid=trim($_GET['classid']);
	if(!empty($_POST['chchanged'])){				
		if($id!="")
		{
			$mubanid=$_POST['mubanid'];
			$muban=$db->fetch_array($db->query("select muban, muban2,chanpin,chanpin2 from ".$tablepre."projectclass where classid=$classid"));
			$values=mysql_fetch_assoc($db->query("select * from ".$muban['muban']." where id=$mubanid"));
			$values2=mysql_fetch_assoc($db->query("select * from ".$muban['muban2']." where mubanid = $mubanid"));
			//WriteErrMsg("<br><li>".$values[3]."</li>");
			$sql="update ".$muban['chanpin']." set TELPORT=TELPORT";
			while($vol=each($values)){
				if($vol['key'] == "TELPORT")
					break;
			}
			while($vol=each($values)){
				$sql.= ",".$vol['key']."='".$vol['value']."'";
			}
			$sql.=" where chanpinid in (".$id.")";
			//WriteErrMsg("<br><li>没有选中产品！</li>");
			$query=$db->query($sql);
			//$query=do_modifymore($db, $classid, $id, $tablepre);		  
		 //if($id!="")
			if($query>0)
			{
				$sql="update ".$muban['chanpin2']." set SN=SN";
				
				while($vol=each($values2)){
					if($vol['key'] == "file1")
						break;
				}
				$sql.= ",".$vol['key']."='".$vol['value']."'";
				while($vol=each($values2)){
					$sql.= ",".$vol['key']."='".$vol['value']."'";
				}
				$sql.=" where chanpinid in (".$id.")";
				$query=$db->query($sql);
				if($query>0)
					WriteSuccessMsg("<br><li>Batch modify success</li>","$URL?job=productmanage&classid=$classid");
				else WriteErrMsg("<br><li>Batch modify failure!Call settings modify success， other settings modify failure!</li>");
			}
			else
				WriteErrMsg("<br><li>Batch modify failure!Call settings modify failure!</li>");
		}
		else WriteErrMsg("<br><li>You should choice one pruduct at least!</li>");
	}//if(empty($_POST['chchanged']){
	else 
	{
		if($id!="")
		{
			$query=do_modifymore($db, $classid, $id, $tablepre);		  
		 //if($id!="")
			if($query>0)
			{
				WriteSuccessMsg("<br><li>Batch modify success</li>","$URL?job=productmanage&classid=$classid");
			}
			else
				WriteErrMsg("<br><li>Batch modify failure!</li>");
		}
		else WriteErrMsg("<br><li>You should choice one pruduct at least!</li>");		
	}
}//if(empty($_GET['classid'])){
else {
	//WriteErrMsg("<br><li>没有选中产111品！</li>");
		$boxsnum=0;
		$num=$_POST['boxs'];
		$oclassid=0;
		for($i=0;$i<$num;$i++){
			if(!empty($_POST["chanpinid$i"])){
				if($oclassid != $_POST["classid$i"]){ //新的class
					$oclassid = $_POST["classid$i"];
					$cid[$oclassid]=$_POST["chanpinid$i"];	
				}
				else {
					$cid[$oclassid].=",".$_POST["chanpinid$i"];
				}
			}
		}
		
	if(count($cid) == 0)
		WriteErrMsg("<br><li>You should choice one pruduct at least!</li>");
	foreach($cid as $classid => $id){
		if(($query=do_modifymore($db, $classid, $id, $tablepre))<=0)
			$errmsg.="classid:$classid <br>";
	}
	if($errmsg)
		WriteErrMsg("<br><li>Batch modify failure!".$errmsg."</li>");
	else WriteSuccessMsg("<br><li>Batch modify success</li>","$URL?job=productmanage&classid=");
	
}
?>
