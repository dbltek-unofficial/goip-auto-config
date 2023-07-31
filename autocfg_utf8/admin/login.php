<?php
session_start();
define('OK',true);

$PHP_SELF=$_SERVER['PHP_SELF'] ? $_SERVER['PHP_SELF'] : $_SERVER['SCRIPT_NAME'];
$URL='http://'.$_SERVER['HTTP_HOST'].substr($PHP_SELF,0,strrpos($PHP_SELF, '/')+1);
require_once('../inc/conn.inc.php');
require_once('../inc/conn.php');


$FoundErr=false;
$username=str_replace("'","",trim($_POST['UserName']));
$password=str_replace("'","",trim($_POST['Password']));

if ($username==''){
	$FoundErr=true;
	$ErrMsg= "<br><li>用户名不能为空!</li>";
}
if ($password==''){
	$FoundErr=true;
	$ErrMsg=$ErrMsg."<br><li>密码不能为空!</li>";
}
if($FoundErr!=true){$password=md5($password);
	$query=$db->query("SELECT Id FROM ".$tablepre."admin WHERE UserName='$username' and Password='$password' ");
	$rs=$db->fetch_array($query);
	$adminId=$rs[0];
	if(empty($adminId)){
		$FoundErr=true;
		$ErrMsg=$ErrMsg."<br><li>密码错误!</li>";
	}
	else{
		/*
		session_start();
		$_SESSION["remotefile"] = "/root/radmsrv/radmsrv.cfg";
		//setcookie("remotefile","c:/mazhy");
		if($fp=@fopen($_SESSION['remotefile'], "r")){
			flock($fp,LOCK_SH);
			$note = fread($fp,filesize($_SESSION['remotefile']));
			fclose($fp);
			$note = explode("\n",$note);
			$maxnum = count($note);
			$j=0;
			for($i=0;$i<$maxnum;$i++)
			{
				$note1=explode("=",$note[$i],2);
				if(trim($note1[1])!="")
				{
					//$field[$j][0]=$note1[0];
	
					$len=strlen(trim($note1[1]));
					if(substr_count($note1[1], "\"") > 0){
						$note1[1]=substr($note1[1],1,($len-2)) ;//去掉引号
					}
					
					$field[$j][0]=$note1[1];
					//setcookie("$note1[0]","$note1[1]");
					$_SESSION[$note1[0]] = $note1[1];
					//echo $note1[1]."<br>";
						//echo $projecttxt[$j]."|".$projectdec[$j]."|".$projecttype[$j]."|".$projectfield[$j]."<br>";
					$j++;
				}
			}	
		}
		*/
		//print_r($field);
		//WriteErrMsg("<br><li>不存在此类型</li>");
		//setcookie("adminname","$username");
		//setcookie("adminId","$adminId");
		$_SESSION['autocfg_adminname'] = $username;
		$_SESSION['autocfg_adminId'] = $adminId;
		//print_r($_SESSION);
		Header("Location: index.php"); 
	}
}

if($FoundErr==true){
	$strErr="<html><head><title>Error Information</title><meta http-equiv='Content-Type' content='text/html; charset=utf-8'>" ;
	$strErr=$strErr."<link href='style.css' rel='stylesheet' type='text/css'></head><body>" ;
	$strErr=$strErr."<table cellpadding=2 cellspacing=1 border=0 wIdth=400 class='border' align=center>"; 
	$strErr=$strErr."  <tr align='center'><td height='22' class='title'><strong>错误信息</strong></td></tr>" ;
	$strErr=$strErr."  <tr><td height='100' class='tdbg' valign='top'><b>原因:</b><br>$ErrMsg</td></tr>" ;
	$strErr=$strErr."  <tr align='center'><td class='tdbg'><a href=javascript:history.back();>&lt;&lt; 返回</a></td></tr>" ;
	$strErr=$strErr."</table>" ;
	$strErr=$strErr."</body></html>" ;
	echo $strErr;
}
?>
