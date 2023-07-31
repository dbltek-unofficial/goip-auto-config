<?php
!defined('OK') && exit('ForbIdden');
//$UserName=$_SESSION['autocfg_adminname'];
if(isset($_GET['action'])) {
	if($_GET['action'] != "modifyself" && $_GET['action'] != "savemodifyself" && $_SESSION['autocfg_adminname']!="admin" )
		WriteErrMsg("<br><li>need admin permissions!</li>");
	$action=$_GET['action'];
	
	if($action=="del")
	{
					$ErrMsg="";
					if(($Id=$_GET['id']) == "1")
						$ErrMsg="<br><li>Super users can not delete</li>";
					
					if(empty($Id)){
						$num=$_POST['boxs'];
						for($i=0;$i<$num;$i++)
						{	
							if(!empty($_POST["Id$i"]) && $_POST["Id$i"] != "1"){
								if($Id=="")
									$Id=$_POST["Id$i"];
								else
									$Id=$_POST["Id$i"].",$Id";
							}
						}
					}
					//WriteErrMsg("$Id");
					
					if(empty($Id))
						$ErrMsg ='<br><li>Please choose one</li>';
					if($ErrMsg!="")
						WriteErrMsg($ErrMsg);
					else{
						$query=$db->query("DELETE FROM ".$tablepre."admin  WHERE Id IN ($Id)");

						WriteSuccessMsg("<br><li>Delete administrator success</li>","{$URL}?job=user");
						
					}
		$id=$_GET['id'];
		$query=$db->query("Delete  from ".$tablepre."admin WHERE Id=$id");
	}
	elseif($action=="add")
	{
		
	}
	elseif($action=="modify")
	{
		$id=$_GET['id'];
		//if($id)
		$rs=$db->fetch_array($db->query("SELECT * FROM ".$tablepre."admin where Id=$id"));
		//if(!$s[0])
			//WriteErrMsg("<br><li>添加用户需要admin权限</li>"."$row[1]");
	}
	elseif($action=="modifyself")
	{
		$rs=$db->fetch_array($db->query("SELECT * FROM ".$tablepre."admin where UserName='".$_SESSION['autocfg_adminname']."'"));
	}
	elseif($action=="savemodifyself")
	{
		$UserName=$_SESSION['autocfg_adminname'];
		$password=$_POST['Password'];
		$ErrMsg="";
		if(empty($password))
			$ErrMsg ='<br><li>Your password shouldnot be empty</li>';
		if($ErrMsg!="")
			WriteErrMsg($ErrMsg);
		else{$password=md5($password);
			$query=$db->query("UPDATE ".$tablepre."admin SET Password='$password' WHERE UserName='$UserName'");
			WriteSuccessMsg("<br><li>Change password</li>","logout.php");
		}
	}
	elseif($action=="saveadd")
	{
					$username=$_POST['username'];
					$password=$_POST['Password'];
					$info=$_POST['info'];
					$ErrMsg="";
					if(empty($username))
						$ErrMsg ='<br><li>Your username should not be empty</li>';
					if(empty($password))
						$ErrMsg ='<br><li>Your password should not be empty</li>';
					if($ErrMsg!="")
						WriteErrMsg($ErrMsg);
					else{
						$query=$db->query("SELECT Id FROM ".$tablepre."admin WHERE UserName='$username' ");
						$rs=$db->fetch_array($query);
						if(empty($rs[0])){$password=md5($password);
							$query=$db->query("INSERT INTO ".$tablepre."admin (UserName,Password,Info) VALUES ('$username','$password','$info')");
							WriteSuccessMsg("<br><li>Add administrator success</li>","{$URL}?job=user");
						}
						else{
							$ErrMsg=$ErrMsg."<br><li>Administrator [$username] have existed</li>";
							WriteErrMsg($ErrMsg);
						}
					}
	}
	elseif($action=="savemodify")
	{
					$password=$_POST['Password'];
					$Id=$_POST['Id'];
					$ErrMsg="";
					if(empty($password))
						$ErrMsg ='<br><li>Your password should not be empty</li>';
					if($ErrMsg!="")
						WriteErrMsg($ErrMsg);
					else{$password=md5($password);
						$query=$db->query("UPDATE ".$tablepre."admin SET Password='$password' WHERE Id='$Id'");

						WriteSuccessMsg("<br><li>Modify administrator success</li>","{$URL}?job=user");
					}
	}
	else $action="main";
	
}
else $action="main";

if($_SESSION['autocfg_adminname']=="admin")	
{
	$query=$db->query("SELECT count(*) AS count FROM ".$tablepre."admin");
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
	$fenye=showpage("$URL?job=user",$page,$count,$perpage,true,true,"rows");
	$query=$db->query("SELECT * FROM ".$tablepre."admin ORDER BY Id DESC LIMIT $start_limit,$perpage");
	while($row=$db->fetch_array($query)) {
		$rsdb[]=$row;
	}
}
	require_once template('user');

?>