<?php

!defined('OK') && exit('ForbIdden');
$perpage='30';
$SUPER_USER = "";
require_once('../inc/conn.inc.php');
require_once('../inc/conn.php');


if(!isset($_SESSION['autocfg_adminname'])) {
	require_once template('login');
}

$PHP_SELF=$_SERVER['PHP_SELF'] ? $_SERVER['PHP_SELF'] : $_SERVER['SCRIPT_NAME'];
$URL='http://'.$_SERVER['HTTP_HOST'].substr($PHP_SELF,0,strrpos($PHP_SELF, '/')+1);

function multi($count,$page,$numofpage,$url) {
	if ($numofpage<=1){
		return ;
	}else{
		$fengye="<a href=\"{$url}&page=1\"><< </a>";
		$flag=0;
		for($i=$page-3;$i<=$page-1;$i++)
		{
			if($i<1) continue;
			$fengye.=" <a href={$url}&page=$i>&nbsp;$i&nbsp;</a>";
		}
		$fengye.="&nbsp;&nbsp;<b>$page</b>&nbsp;";
		if($page<$numofpage)
		{
			for($i=$page+1;$i<=$numofpage;$i++)
			{
				$fengye.=" <a href={$url}&page=$i>&nbsp;$i&nbsp;</a>";
				$flag++;
				if($flag==4) break;
			}
		}
		$fengye.=" <input type='text' size='2' style='height: 16px; border:1px solId #E7E3E7' onkeydown=\"javascript: if(event.keyCode==13) location='{$url}&page='+this.value;\"> <a href=\"{$url}&page=$numofpage\"> >></a> &nbsp;(Total $numofpage pages)";
		return $fengye;
	}
}

//**************************************************
//过程名:showpage
//作  用:显示“上一page forward”等信息
//参  数:sfilename  ----链结位址
//$CurrentPage
//       totalnumber ----总数量
//       maxperpage  ----每page数量
//       ShowTotal   ----是否显示总数量
//       ShowAllPages ---是否用下拉清单显示所有page面以供跳转。有某些page面不能使用，否则会出现JS错误。
//       strUnit     ----计数单位
//**************************************************
function showpage($sfilename,$CurrentPage,$totalnumber,$maxperpage,$ShowTotal,$ShowAllPages,$strUnit){
	if($totalnumber%$maxperpage==0)
    	$n= $totalnumber / $maxperpage;
  	else
    	$n= (int)($totalnumber / $maxperpage)+1;
  	
  	$strTemp= "<table align='center'><tr><td>";
	if($ShowTotal==true)
		$strTemp=$strTemp . "Total <b>" . $totalnumber . "</b> " . $strUnit . " &nbsp;&nbsp;";
	if($CurrentPage<2)
    	$strTemp=$strTemp . "index backward&nbsp;";
  	else{
    	$strTemp=$strTemp . "<a href='" . $sfilename . "page=1'>index</a>&nbsp;";
    	$strTemp=$strTemp . "<a href='" . $sfilename . "page=" . ($CurrentPage-1) . "'>上一page</a>&nbsp;";
  	}

  	if ($n-$CurrentPage<1)
    		$strTemp=$strTemp . "forward end";
  	else{
    		$strTemp=$strTemp . "<a href='" . $sfilename . "page=" . ($CurrentPage+1) . "'>forward</a>&nbsp;";
    		$strTemp=$strTemp . "<a href='" . $sfilename . "page=" . $n . "'>end</a>";
  	}
	
   	$strTemp=$strTemp . " &nbsp;page：<strong><font color=red>" . $CurrentPage . "</font>/" . $n . "</strong>page ";
    $strTemp=$strTemp . " &nbsp;<b>" . $maxperpage . "</b>" . $strUnit . "/page";
	
	if( $ShowAllPages=true){
		$strTemp=$strTemp . " &nbsp;goto：<select name='page' size='1' onchange=javascript:window.location='" . $sfilename . "page=" . "'+this.options[this.selectedIndex].value;>" ;
    	for($i=1;$i<=$n;$i++){
    		$strTemp=$strTemp . "<option value='" . $i . "'";
			if( (int)($CurrentPage)==(int)($i))
				$strTemp=$strTemp . " selected ";
			$strTemp=$strTemp . ">The" . $i . "page</option>"   ;
	    }
		$strTemp=$strTemp . "</select>";
	}
	$strTemp=$strTemp . "</td></tr></table>";
	return $strTemp;
}





function template($template) {
	return "../template/admin/$template.htm";
}

function WriteErrMsg($ErrMsg1)
{
	$strErr="<html><head><title>Error Information</title><meta http-equiv='Content-Type' content='text/html; charset=ISO-8859-1'>" ;
	$strErr=$strErr."<link href='Style.css' rel='stylesheet' type='text/css'></head><body>" ;
	$strErr=$strErr."<table cellpadding=2 cellspacing=1 border=0 wIdth=400 class='border' align=center>"; 
	$strErr=$strErr."  <tr align='center'><td height='22' class='title'><strong>Wrong message</strong></td></tr>" ;
	$strErr=$strErr."  <tr><td height='100' class='tdbg' valign='top'><b> Reasons:</b><br> $ErrMsg1</td></tr>" ;
	$strErr=$strErr."  <tr align='center'><td class='tdbg'><a href=javascript:history.back();>&lt;&lt; Return</a></td></tr>" ;
	$strErr=$strErr."</table>" ;
	$strErr=$strErr."</body></html>" ;
	echo $strErr;
	exit;
}

//'**************************************************
////'过程名:WriteSuccessMsg
//'作  用:显示成功提示资讯
//'参  数:无
//**************************************************
function WriteSuccessMsg($SuccessMsg,$URL)
{
	$strErr="<html><head><title>Success Information</title><meta http-equiv='Content-Type' content='text/html; charset=ISO-8859-1'>" ;
	$strErr=$strErr."<link href='Style.css' rel='stylesheet' type='text/css'></head><body>" ;
	$strErr=$strErr."<table cellpadding=2 cellspacing=1 border=0 wIdth=400 class='border' align=center>"; 
	$strErr=$strErr."  <tr align='center'><td height='22' class='title'><strong>Congratulation</strong></td></tr>" ;
	$strErr=$strErr."  <tr><td height='100' class='tdbg' valign='top'>$SuccessMsg</td></tr>" ;
	$strErr=$strErr."  <tr align='center'><td class='tdbg'><a href=$URL>Apply</a></td></tr>" ;
	$strErr=$strErr."</table>" ;
	$strErr=$strErr."</body></html>" ;
	echo $strErr;
	exit;
}


?>
