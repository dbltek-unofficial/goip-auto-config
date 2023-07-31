<?php
define('OK',true);

require_once('global.php');

if(!isset($_SESSION['autocfg_adminname'])) {
	header("location:{$URL}");
}

if(isset($_GET['action'])) {
	$action=$_GET['action'];
	switch($action) {
		case 'order':
			foreach($_POST as $ClassId=>$OrderId) {
				$query=$db->query("UPDATE ".$tablepre."newsclass SET OrderId='$OrderId' WHERE ClassId='$ClassId'");
			}
			WriteSuccessMsg("<br><li>sort order success</li>","{$URL}?job=News_Class&action=order");
			break;
		case 'News_Class_Add':
			
			break;
		case 'News_Class_Modify':
			$ClassName=$_POST['ClassName'];
			$OrderId=$_POST['OrderId'];
			$ClassId=$_POST['ClassId'];
			$ErrMsg="";
			if(empty($ClassId))
				$ErrMsg ='<br><li>Please choose Column</li>';
			if(empty($ClassName))
				$ErrMsg ='<br><li>column title should not be empty</li>';
			if(empty($OrderId))
				$ErrMsg=$ErrMsg."<br><li>sort order should not be empty and only for number</li>";
			if($ErrMsg!="")
				WriteErrMsg($ErrMsg);
			else{
				$query=$db->query("SELECT ClassName FROM ".$tablepre."newsclass WHERE ClassId='$ClassId' ");
				$rs=$db->fetch_array($query);
				if(empty($rs[0]))
					WriteErrMsg("<br><li>Cann't find the column!</li>");
				else{
					if($ClassName!=$rs[0]){
						$query=$db->query("SELECT ClassId FROM ".$tablepre."newsclass WHERE ClassName='$ClassName' ");
						$rs=$db->fetch_array($query);
						if(empty($rs[0])){
							$query=$db->query("UPDATE ".$tablepre."newsclass SET ClassName='$ClassName',OrderId='$OrderId' WHERE ClassId='$ClassId'") ;
							WriteSuccessMsg("<br><li>Modify Success</li>","{$URL}?job=News_Class");
						}
						else{
							$ErrMsg=$ErrMsg."<br><li>Column [$ClassName] have existed</li>";
							WriteErrMsg($ErrMsg);
						}
					}
					else{
						$query=$db->query("UPDATE ".$tablepre."newsclass SET OrderId='$OrderId'  WHERE ClassId='$ClassId'" );
						WriteSuccessMsg("<br><li>Modify Success</li>","{$URL}?job=News_Class");
					}
				}
			}
			break;	
		case 'News_Class_Clear':
			$ClassId=$_GET['ClassId'];
			$ErrMsg="";
			if(empty($ClassId))
				$ErrMsg ='<br><li>Please choose one</li>';
			if($ErrMsg!="")
				WriteErrMsg($ErrMsg);
			else{
				$db->query("DELETE FROM ".$tablepre."content  WHERE ClassId IN ($ClassId)");
				WriteSuccessMsg("<br><li>Clear Column Success</li>","Index.php?job=News_Class");
			}
			break;
		case 'News_Class_Del':
			$ClassId=$_GET['ClassId'];
			$ErrMsg="";
			if(empty($ClassId))
				$ErrMsg ='<br><li>Please choose one</li>';
			if($ErrMsg!="")
				WriteErrMsg($ErrMsg);
			else{
				$db->query("DELETE FROM ".$tablepre."newsclass  WHERE ClassId IN ($ClassId)");
				$db->query("DELETE FROM ".$tablepre."content  WHERE ClassId IN ($ClassId)");
				WriteSuccessMsg("<br><li>Delete Column Success</li>","Index.php?job=News_Class");
			}
			break;	

		case 'edit':
					$Id=$_GET['Id'];
					$ClassId=$_POST['ClassId'];
					$Title=$_POST['Title'];
					$ShowIndex=$_POST['checkbox'];
					$Content=$_POST['Content'];
					$UpdateTime=$_POST['UpdateTime'];
					
					$ErrMsg="";
					if(empty($ClassId))
						$ErrMsg ='<br><li>Column should not be empty</li>';
					if(empty($Title))
						$ErrMsg=$ErrMsg."<br><li>Title should not be empty</li>";
					if(empty($Content))
						$ErrMsg=$ErrMsg."<br><li>Content should not be empty</li>";
					if($ErrMsg!="")
						WriteErrMsg($ErrMsg);
					else
					{
						$query=$db->query("UPDATE ".$tablepre."content SET ClassId='$ClassId',Title='$Title',Content='$Content',UpdateTime='$UpdateTime',ShowIndex='$ShowIndex' WHERE Id='$Id'");
						WriteSuccessMsg("<br><li>Modify Success</li>","{$URL}?job=News_List&ClassId={$ClassId}");
					}
					break;
		case 'add':
					$ClassId=$_POST['ClassId'];
					$Title=$_POST['Title'];
					$ShowIndex=$_POST['checkbox'];
					$Content=$_POST['Content'];
					$UpdateTime=$_POST['UpdateTime'];
					
				
					$ErrMsg="";
					if(empty($ClassId))
						$ErrMsg ='<br><li>Column should not be empty</li>';
					if(empty($Title))
						$ErrMsg=$ErrMsg."<br><li>Title should not be empty</li>";
					if(empty($Content))
						$ErrMsg=$ErrMsg."<br><li>Content should not be empty</li>";
					if($ErrMsg!="")
						WriteErrMsg($ErrMsg);
					else
					{
						$query=$db->query("INSERT INTO ".$tablepre."content (ClassId,title,content,UpdateTime,ShowIndex) VALUES ('$ClassId','$Title','$Content','$UpdateTime','$ShowIndex')");
						WriteSuccessMsg("<br><li>Add Success!continue to add</li>","{$URL}?job=add");
					}
			break;
		case 'News_Del':
						$Id=$_GET['Id'];
						$ClassId=$_GET['ClassId'];
						if(empty($Id)){
							$num=$_POST['boxs'];
							for($i=0;$i<$num;$i++){	
								if(!empty($_POST["Id$i"])){
									if($Id=="")
										$Id=$_POST["Id$i"];
									else
										$Id=$_POST["Id$i"].",$Id";
								}
							}
						}
						$ErrMsg="";
						if(empty($Id))
							$ErrMsg ='<br><li>Please choose one</li>';
						if($ErrMsg!="")
							WriteErrMsg($ErrMsg);
						else{
							$query=$db->query("DELETE FROM ".$tablepre."content  WHERE Id IN ($Id)");
							WriteSuccessMsg("<br><li>Delete News Success </li>","Index.php?job=News_List&ClassId=$ClassId");
						}
						break;
		case 'order':
			foreach($_POST as $ClassId=>$OrderId) {
				$query=$db->query("UPDATE ".$tablepre."productclass SET OrderId='$OrderId' WHERE ClassId='$ClassId'");
			}
			WriteSuccessMsg("<br><li>sort order error /li>","{$URL}?job=Product_Class&action=order");
			break;
		case 'ModifyMyPwd':
					$UserName=$_SESSION['autocfg_adminname'];
					$password=$_POST['Password'];
					$ErrMsg="";
					if(empty($password))
						$ErrMsg ='<br><li>Your password should not be empty</li>';
					if($ErrMsg!="")
						WriteErrMsg($ErrMsg);
					else{$password=md5($password);
							$query=$db->query("UPDATE ".$tablepre."admin SET Password='$password' WHERE UserName='$UserName'");
							WriteSuccessMsg("<br><li>Change password</li>","logout.php");
					}
					break;
		case 'Admin_Add':
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
							WriteSuccessMsg("<br><li>Add administrator success</li>","{$URL}?job=Admin");
						}
						else{
							$ErrMsg=$ErrMsg."<br><li>Administrator [$username] have existed</li>";
							WriteErrMsg($ErrMsg);
						}
					}
					break;

		case 'Admin_Modify':
					$password=$_POST['Password'];
					$Id=$_POST['Id'];
					$ErrMsg="";
					if(empty($password))
						$ErrMsg ='<br><li>Your password should not be empty</li>';
					if($ErrMsg!="")
						WriteErrMsg($ErrMsg);
					else{$password=md5($password);
						$query=$db->query("UPDATE ".$tablepre."admin SET Password='$password' WHERE Id='$Id'");

						WriteSuccessMsg("<br><li>Modify administrator success</li>","{$URL}?job=Admin");
					}
					break;
		case 'Admin_Del':
					$Id=$_GET['Id'];
					if(empty($Id)){
						$num=$_POST['boxs'];
						for($i=0;$i<$num;$i++)
						{	
							if(!empty($_POST["Id$i"])){
								if($Id=="")
									$Id=$_POST["Id$i"];
								else
									$Id=$_POST["Id$i"].",$Id";
							}
						}
					}
					$ErrMsg="";
					if(empty($Id))
						$ErrMsg ='<br><li>Please choose one</li>';
					if($ErrMsg!="")
						WriteErrMsg($ErrMsg);
					else{
						$query=$db->query("DELETE FROM ".$tablepre."admin  WHERE Id IN ($Id)");

						WriteSuccessMsg("<br><li>Delete administrator success</li>","{$URL}?job=Admin");
						
					}
					break;					
		default:
			echo "<meta http-equiv=refresh content=1,url=\"{$URL}\">";
	}
} else {
	header("location:{$URL}");
}
?>
