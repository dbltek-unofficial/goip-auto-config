<?php
define('OK',true);
session_start();
$PHP_SELF=$_SERVER['PHP_SELF'] ? $_SERVER['PHP_SELF'] : $_SERVER['SCRIPT_NAME'];
$URL='http://'.$_SERVER['HTTP_HOST'].substr($PHP_SELF,0,strrpos($PHP_SELF, '/')+1);
require_once('../inc/conn.inc.php');
require_once('../inc/conn.php');


$FoundErr=false;
$username=str_replace("'","",trim($_POST['UserName']));
$password=str_replace("'","",trim($_POST['Password']));

if ($username==''){
	$FoundErr=true;
	$ErrMsg= "<br><li>input username!</li>";
}
if ($password==''){
	$FoundErr=true;
	$ErrMsg=$ErrMsg."<br><li>input password!</li>";
}
if($FoundErr!=true){$password=md5($password);
	$query=$db->query("SELECT Id FROM ".$tablepre."admin WHERE UserName='$username' and Password='$password' ");
	$rs=$db->fetch_array($query);
	$adminId=$rs[0];
	if(empty($adminId)){
		$FoundErr=true;
		$ErrMsg=$ErrMsg."<br><li>password error!!</li>";
	}
	else{
		//print_r($field);
		//WriteErrMsg("<br><li>‰∏çÂ≠~Âo®Ê≠§Á±ªÂz<</li>");
		//setcookie("adminname","$username");
		//setcookie("adminId","$adminId");
		$_SESSION['autocfg_adminname'] = $username;
		$_SESSION['autocfg_adminId'] = $adminId;
		//print_r($_SESSION);
		Header("Location: index.php"); 
	}
}

if($FoundErr==true){
	$strErr="<html><head><title>Error Information</title><meta http-equiv='Content-Type' content='text/html; charset=ISO-8859-1'>" ;
	$strErr=$strErr."<link href='style.css' rel='stylesheet' type='text/css'></head><body>" ;
	$strErr=$strErr."<table cellpadding=2 cellspacing=1 border=0 wIdth=400 class='border' align=center>"; 
	$strErr=$strErr."  <tr align='center'><td height='22' class='title'><strong>Wrong message</strong></td></tr>" ;
	$strErr=$strErr."  <tr><td height='100' class='tdbg' valign='top'><b>Reason:</b><br>$ErrMsg</td></tr>" ;
	$strErr=$strErr."  <tr align='center'><td class='tdbg'><a href=javascript:history.back();>&lt;&lt; Return</a></td></tr>" ;
	$strErr=$strErr."</table>" ;
	$strErr=$strErr."</body></html>" ;
	echo $strErr;
}
?>
