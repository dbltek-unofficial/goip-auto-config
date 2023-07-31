<?php

!defined('OK') && exit('ForbIdden');
/*
$Table=$tablepre."product";
$statu="";
if(isset($_GET['classid']))
	$classid=$_GET['classid'];
else
{
	$query=$db->query("SELECT  classid FROM ".$tablepre."projectclass ORDER BY orderid LIMIT 0,1");
	$classid1=$db->fetch_array($query);
	$classid=$classid1[0];
}

$query=$db->query("SELECT  classname FROM ".$tablepre."projectclass where classid=$classid");
$classname1=$db->fetch_array($query);
$classname=$classname1[0];
*/	
	
		
if(isset($_GET['action'])) {
	$action=$_GET['action'];
	if($action=="addupload") {
		$statu="addupload";
		$classid=$_GET['classid'];
		$query=$db->query("SELECT classid,classname FROM ".$tablepre."projectclass where classid=$classid ORDER BY orderid");
		while($row=$db->fetch_array($query)) {
			$rsprojectclass[]=$row;
		}
	}
	elseif($action=="saveaddupload") {
		$statu="saveaddupload";
		$classid=$_POST['classid'];
		$chanpin=$_POST['chanpin'];
		include('getdata.php');
		getdateformchanfile($classid,$chanpin);
	}
	
	elseif($action=="add" || $action=="addmore") {
		$statu=$action;
		
		$query=$db->query("SELECT classid,classname FROM ".$tablepre."projectclass ORDER BY orderid");
		while($row=$db->fetch_array($query)) {
			$rsprojectclass[]=$row;
		}
		
		if(($_GET['classid'])) 
			$sql="SELECT muban,classname,classid,muban2,type,TELPORT FROM ".$tablepre."projectclass where classid=".$_GET['classid'];
		else
			$sql="SELECT muban,classname,classid,muban2,type,TELPORT FROM ".$tablepre."projectclass  ORDER BY orderid LIMIT 0,1";
			
		$query=$db->query($sql);
		$projectclass1=$db->fetch_array($query);
		$muban=$projectclass1[0];
		$classname=$projectclass1[1];
		$classid=$projectclass1[2];
		$muban2=$projectclass1[3];
		$type=$projectclass1[4];
		$telport = $projectclass1[5];
		if($muban==""){
			WriteErrMsg("<br><li>至少要有一个系列存在或者是一个系列的配置文件存在！</li>");
			exit();
		}
		if(isset($_GET['mubanid'])&&($_GET['mubanid'])){
			$mubanid=$_GET['mubanid'];
			if ($telport == 16) {
				$value=$db->fetch_array($db->query("select * from ".$muban." where id=$mubanid"));
				$value_a=$db->fetch_array($db->query("select * from ".$muban."_a where id=$mubanid"));
				$values2=$db->fetch_array($db->query("select * from ".$muban2." where mubanid = $mubanid"));
				$values = array_merge($value,$value_a);
			}
			else if ($telport == 32) {
				$value=$db->fetch_array($db->query("select * from ".$muban." where id=$mubanid"));
				$value_a=$db->fetch_array($db->query("select * from ".$muban."_a where id=$mubanid"));
				$value_b=$db->fetch_array($db->query("select * from ".$muban."_b where id=$mubanid"));
				$value_c=$db->fetch_array($db->query("select * from ".$muban."_c where id=$mubanid"));
				$values = array_merge($value,$value_a,$value_b,$value_c);
			}
			else {
				$values=$db->fetch_array($db->query("select * from ".$muban." where id=$mubanid"));
				$values2=$db->fetch_array($db->query("select * from ".$muban2." where mubanid = $mubanid"));
			}
		}
		else {
			if ($telport == 16) {
				$value=$db->fetch_array($db->query("select * from ".$muban." where muban=title"));
				$value_a=$db->fetch_array($db->query("select * from ".$muban."_a where muban=title"));
				$values2=$db->fetch_array($db->query("select * from ".$muban2." where mubanname = classname"));
				$values = array_merge($value,$value_a);
			}
			elseif ($telport == 32) {
				$value=$db->fetch_array($db->query("select * from ".$muban." where muban=title"));
				$value_a=$db->fetch_array($db->query("select * from ".$muban."_a where muban=title"));
				$value_b=$db->fetch_array($db->query("select * from ".$muban."_b where muban=title"));
				$value_c=$db->fetch_array($db->query("select * from ".$muban."_c where muban=title"));
				$values2=$db->fetch_array($db->query("select * from ".$muban2." where mubanname = classname"));
				$values = array_merge($value,$value_a,$value_b,$value_c);
			}
			else {
				$values=$db->fetch_array($db->query("select * from ".$muban." where muban=title"));
				$values2=$db->fetch_array($db->query("select * from ".$muban2." where mubanname = classname"));
			}
			$mubanid= $values2['mubanid'];
		}
                if($values['AUTOCFG'] == 1 && $values['AUTOCFG_SERVER'] == ''){
                        sscanf($_SERVER[REQUEST_URI], "/%[^/]/", $path);
                        $values['AUTOCFG_SERVER']="http://".$_SERVER[SERVER_NAME]."/".$path."/index/down.php?file=";
                }
		$query=$db->query("select muban,id from ".$muban);
		while($mubanrow=$db->fetch_array($query)){
			$rsmuban[]=$mubanrow;
		}
		//$updatetime=date("Y-m-d H:i:s");
	}
	elseif($action=="modify") {
		$statu="modify";
		$classid=$_GET['classid'];
		$chanpinid=$_GET['chanpinid'];
		/*
		$query=$db->query("SELECT classid,classname FROM ".$tablepre."projectclass ORDER BY orderid");
		while($row=$db->fetch_array($query)) {
			$rsprojectclass[]=$row;
		}*/
		$query=$db->query("SELECT classname,chanpin,chanpin2,type,TELPORT FROM ".$tablepre."projectclass WHERE classid=$classid");
		$classdb=$db->fetch_array($query);
		$type=$classdb['type'];
		$classname = $classdb['classname'];
		
		if ($classdb['TELPORT'] == 16) {
			$query=$db->query("SELECT * FROM ".$classdb['chanpin']." where chanpinid=$chanpinid");
			$query_a=$db->query("SELECT * FROM ".$classdb['chanpin']."_a where chanpinid=$chanpinid");
			$value = $db->fetch_array($query);
			$value_a = $db->fetch_array($query_a);
			$values = array_merge($value,$value_a);
		}
		else if ($classdb['TELPORT'] == 32) {
			$query=$db->query("SELECT * FROM ".$classdb['chanpin']." where chanpinid=$chanpinid");
			$query_a=$db->query("SELECT * FROM ".$classdb['chanpin']."_a where chanpinid=$chanpinid");
			$query_b=$db->query("SELECT * FROM ".$classdb['chanpin']."_b where chanpinid=$chanpinid");
			$query_c=$db->query("SELECT * FROM ".$classdb['chanpin']."_c where chanpinid=$chanpinid");
			$value = $db->fetch_array($query);
			$value_a = $db->fetch_array($query_a);
			$value_b = $db->fetch_array($query_b);
			$value_c = $db->fetch_array($query_c);
			$values = array_merge($value,$value_a,$value_b,$value_c);
		}
 
 		else {
			$query=$db->query("SELECT * FROM ".$classdb['chanpin']." where chanpinid=$chanpinid");
			$values=$db->fetch_array($query);
		}
		
		$values2=$db->fetch_array($db->query("SELECT * FROM ".$classdb['chanpin2']." where chanpinid=$chanpinid"));
		$remoteserverport=$db->fetch_array($db->query("SELECT * FROM remote LIMIT 1"));
		
	}
	elseif($action=="saveadd" || $action=="savemodify" ||$action=="saveaddmore") {

		//$projectid=$_POST['projectid'];
		//$title=$_POST['muban_name'];
		$classid=$_GET['classid'];
		if (isset($_POST['mubanid']))
			$mubanid=$_POST['mubanid'];
		else 
			$mubanid="";
		if (isset($_GET['chanpinid']))
			$chanpinid=$_GET['chanpinid'];
		else
			$chanpinid="";
		$sn=$_POST['SN'];
		if($action=="saveaddmore"){
			$sn2=$_POST['SN2'];
			$countsn=strlen($sn);
			$i=0;
			while($sn2[$i]=='0') $i++; //去处0
			$sn2=substr($sn2, $i);
			$countsn2=strlen($sn2);
			//WriteErrMsg("<br><li>$countsn, $countsn2</li>");
			for($i=$countsn2;$i<=0;$i--)
				if($sn[$countsn-$i]!=$sn2[$countsn2-$i]) //从左找到第一个不相等的字符
					break;
		
			$snhou=substr($sn, 0-$i);  //sn的后边部分
			$sn0=substr($sn, 0, 0-$i); //前边相同部份
			$sn2hou=substr($sn2, 0-$i); //sn2的后边部分
			$sncount=$sn2hou-$snhou+1;  //需要添加的数量
			//WriteErrMsg("<br><li>sn0:$sn0, snhou:$snhou, sn2hou:$sn2hou, sncount:$sncount</li>");
		}
		
		//WriteErrMsg("select SN from chanpin where SN='".$sn."' and (classid != $classid or chanpinid != $chanpinid)");
		if($action=="saveadd"){
			$sn_t=$db->fetch_array($db->query("select SN from chanpin where SN='".$sn."'"));
			if($sn_t['SN'])
			{
				WriteErrMsg("<br><li>已经存在此机身号码（SN）:".$sn."</li>");
				exit();
			}
		}	
		//$ErrMsg="";
		//if(empty($projectid))
			//$ErrMsg ='<br><li>系列名不能为空！</li>';
		//if(empty($title))
			//$ErrMsg=$ErrMsg."<br><li>模板名不能为空！</li>";

		$chanpin_t = $db->fetch_array($db->query("select muban,muban2,chanpin,chanpin2,classname,TELPORT,type from ".$tablepre."projectclass where classid = $classid"));
	
		$chanpin=$chanpin_t['chanpin'];
		$chanpin_a=$chanpin_t['chanpin']."_a";
		$chanpin_b=$chanpin_t['chanpin']."_b";
		$chanpin_c=$chanpin_t['chanpin']."_c";
		$chanpin2=$chanpin_t['chanpin2'];
		$muban=$chanpin_t['muban'];
		$muban2=$chanpin_t['muban2'];
		$type=$chanpin_t['type'];
		$telport=$chanpin_t['TELPORT'];
		if($action=="savemodify"){
			if ($telport == 16){
				$result =$db->query("select * from ".$chanpin." where chanpinid = $chanpinid");
				$result_a =$db->query("select * from ".$chanpin."_a where chanpinid = $chanpinid");
				$result2 =$db->query("select * from ".$chanpin2." where chanpinid = $chanpinid");
				$value=$db->fetch_array($result);	
				$value_a=$db->fetch_array($result_a);	
				$values = array_merge($value,$value_a);
			}
			else if ($telport == 32) {
				$result =$db->query("select * from ".$chanpin." where chanpinid = $chanpinid");
				$result_a =$db->query("select * from ".$chanpin."_a where chanpinid = $chanpinid");
				$result_b =$db->query("select * from ".$chanpin."_b where chanpinid = $chanpinid");
				$result_c =$db->query("select * from ".$chanpin."_c where chanpinid = $chanpinid");
				$value=$db->fetch_array($result);	
				$value_a=$db->fetch_array($result_a);
				$value_b=$db->fetch_array($result_b);
				$value_c=$db->fetch_array($result_c);
				$values = array_merge($value,$value_a,$value_b,$value_c);
			}
			else {
				$result =$db->query("select * from ".$chanpin." where chanpinid = $chanpinid");
				$result2 =$db->query("select * from ".$chanpin2." where chanpinid = $chanpinid");
				$values=$db->fetch_array($result);	
			}

		}
		else {
			if ($telport == 16){
				$result =$db->query("select * from ".$muban." where id = $mubanid");
				$result_a =$db->query("select * from ".$muban."_a where id = $mubanid");
				$result2 =$db->query("select * from ".$muban2." where mubanid = $mubanid");
				$value=$db->fetch_array($result);	
				$value_a=$db->fetch_array($result_a);	
				$values = array_merge($value,$value_a);
			}
			else if ($telport == 32) {
				$result =$db->query("select * from ".$muban." where id = $mubanid");
				$result_a =$db->query("select * from ".$muban."_a where id = $mubanid");
				$result_b =$db->query("select * from ".$muban."_b where id = $mubanid");
				$result_c =$db->query("select * from ".$muban."_c where id = $mubanid");
				$result2 =$db->query("select * from ".$muban2." where mubanid = $mubanid");
				$value=$db->fetch_array($result);	
				$value_a=$db->fetch_array($result_a);	
				$value_b=$db->fetch_array($result_b);
				$value_c=$db->fetch_array($result_c);
				$values = array_merge($value,$value_a,$value_b,$value_c);
			}
			else {
				$result =$db->query("select * from ".$muban." where id = $mubanid");
				$result2 =$db->query("select * from ".$muban2." where mubanid = $mubanid");
				$values=$db->fetch_array($result);	
			}
		}

		$values2=$db->fetch_array($result2);

//date_default_timezone_set(PRC);
//echo $type."<br>";
$updatetime=date("Y-m-d H:i:s");

	$updatesql="update $chanpin set ";
	$insertsql="insert into $chanpin (";
	$insertsql2=") values (";

  $values['classname'] = $chanpin_t['classname'] ;
  $updatesql.="classname='".$values['classname']."'";
  $insertsql.="classname";
  $insertsql2.="'".$values['classname'];
  
  $values['classid'] = $classid ;
  $updatesql.=",classid='".$values['classid']."'";
  $insertsql.=",classid";
  $insertsql2.="','".$values['classid'];

  $values['updatetime'] = date("Y-m-d H:i:s") ;
  $updatesql.=",updatetime='".$values['updatetime']."'";
  $insertsql.=",updatetime";
  $insertsql2.="','".$values['updatetime'];
  
//  $values['SN'] = $_POST['SN'] ;
//  $updatesql.=",SN='".$values['SN']."'";
//  $insertsql.=",SN";
//  $insertsql2.="','".$values['SN'];
$updatesql.=",SN='".$sn."'";
  
  $values['USER'] = $_POST['USER'] ;
  $updatesql.=",USER='".$values['USER']."'";
  $insertsql.=",USER";
  $insertsql2.="','".$values['USER'];
  
  $values['TELPORT'] = $chanpin_t['TELPORT'] ;
  $updatesql.=",TELPORT='".$values['TELPORT']."'";
  $insertsql.=",TELPORT";
  $insertsql2.="','".$values['TELPORT'];

  $updatesql.=",AUTOCFG_KEY='".$_POST['AUTOCFG_KEY']."'";
  $insertsql.=",AUTOCFG_KEY";
  $insertsql2.="','".$_POST['AUTOCFG_KEY'];
  
	require_once ('product_'.$type.'/product.php'); //不同型号处理

	$updatesql.=" where chanpinid = $chanpinid";
/*

	$insertsql2.="')";
	$insertsql.=$insertsql2;
*/

if($telport == 16) {
	$updatesql_a="update $chanpin_a set ";
	$insertsql_a="insert into $chanpin_a (";
	$insertsql2_a=") values (";

  $values['classname'] = $chanpin_t['classname'] ;
  $updatesql_a.="classname='".$values['classname']."'";
  $insertsql_a.="classname";
  $insertsql2_a.="'".$values['classname'];
  
  $values['classid'] = $classid ;
  $updatesql_a.=",classid='".$values['classid']."'";
  $insertsql_a.=",classid";
  $insertsql2_a.="','".$values['classid'];

  $values['updatetime'] = date("Y-m-d H:i:s") ;
  $updatesql_a.=",updatetime='".$values['updatetime']."'";
  $insertsql_a.=",updatetime";
  $insertsql2_a.="','".$values['updatetime'];
  
//  $values['SN'] = $_POST['SN'] ;
//  $updatesql.=",SN='".$values['SN']."'";
//  $insertsql.=",SN";
//  $insertsql2.="','".$values['SN'];
$updatesql_a.=",SN='".$sn."'";
  
  $values['USER'] = $_POST['USER'] ;
  $updatesql_a.=",USER='".$values['USER']."'";
  $insertsql_a.=",USER";
  $insertsql2_a.="','".$values['USER'];
  
  $values['TELPORT'] = $chanpin_t['TELPORT'] ;
  $updatesql_a.=",TELPORT='".$values['TELPORT']."'";
  $insertsql_a.=",TELPORT";
  $insertsql2_a.="','".$values['TELPORT'];

  $updatesql_a.=",AUTOCFG_KEY='".$_POST['AUTOCFG_KEY']."'";
  $insertsql_a.=",AUTOCFG_KEY";
  $insertsql2_a.="','".$_POST['AUTOCFG_KEY'];
  
	require_once ('product_'.$type.'/product2.php'); //不同型号处理

	$updatesql_a.=" where chanpinid = $chanpinid";
}

elseif ($telport == 32) {
	//表2
	$updatesql_a="update $chanpin_a set ";
	$insertsql_a="insert into $chanpin_a (";
	$insertsql2_a=") values (";

  $values['classname'] = $chanpin_t['classname'] ;
  $updatesql_a.="classname='".$values['classname']."'";
  $insertsql_a.="classname";
  $insertsql2_a.="'".$values['classname'];
  
  $values['classid'] = $classid ;
  $updatesql_a.=",classid='".$values['classid']."'";
  $insertsql_a.=",classid";
  $insertsql2_a.="','".$values['classid'];

  $values['updatetime'] = date("Y-m-d H:i:s") ;
  $updatesql_a.=",updatetime='".$values['updatetime']."'";
  $insertsql_a.=",updatetime";
  $insertsql2_a.="','".$values['updatetime'];
  
//  $values['SN'] = $_POST['SN'] ;
//  $updatesql.=",SN='".$values['SN']."'";
//  $insertsql.=",SN";
//  $insertsql2.="','".$values['SN'];
$updatesql_a.=",SN='".$sn."'";
  
  $values['USER'] = $_POST['USER'] ;
  $updatesql_a.=",USER='".$values['USER']."'";
  $insertsql_a.=",USER";
  $insertsql2_a.="','".$values['USER'];
  
  $values['TELPORT'] = $chanpin_t['TELPORT'] ;
  $updatesql_a.=",TELPORT='".$values['TELPORT']."'";
  $insertsql_a.=",TELPORT";
  $insertsql2_a.="','".$values['TELPORT'];

  $updatesql_a.=",AUTOCFG_KEY='".$_POST['AUTOCFG_KEY']."'";
  $insertsql_a.=",AUTOCFG_KEY";
  $insertsql2_a.="','".$_POST['AUTOCFG_KEY'];
  
	require_once ('product_'.$type.'/product2.php'); //不同型号处理

	$updatesql_a.=" where chanpinid = $chanpinid";
	
	//表3
	$updatesql_b="update $chanpin_b set ";
	$insertsql_b="insert into $chanpin_b (";
	$insertsql2_b=") values (";

  $values['classname'] = $chanpin_t['classname'] ;
  $updatesql_b.="classname='".$values['classname']."'";
  $insertsql_b.="classname";
  $insertsql2_b.="'".$values['classname'];
  
  $values['classid'] = $classid ;
  $updatesql_b.=",classid='".$values['classid']."'";
  $insertsql_b.=",classid";
  $insertsql2_b.="','".$values['classid'];

  $values['updatetime'] = date("Y-m-d H:i:s") ;
  $updatesql_b.=",updatetime='".$values['updatetime']."'";
  $insertsql_b.=",updatetime";
  $insertsql2_b.="','".$values['updatetime'];
  

$updatesql_b.=",SN='".$sn."'";
  
  $values['USER'] = $_POST['USER'] ;
  $updatesql_b.=",USER='".$values['USER']."'";
  $insertsql_b.=",USER";
  $insertsql2_b.="','".$values['USER'];
  
  $values['TELPORT'] = $chanpin_t['TELPORT'] ;
  $updatesql_b.=",TELPORT='".$values['TELPORT']."'";
  $insertsql_b.=",TELPORT";
  $insertsql2_b.="','".$values['TELPORT'];

  $updatesql_b.=",AUTOCFG_KEY='".$_POST['AUTOCFG_KEY']."'";
  $insertsql_b.=",AUTOCFG_KEY";
  $insertsql2_b.="','".$_POST['AUTOCFG_KEY'];
  
	require_once ('product_'.$type.'/product3.php'); //不同型号处理

	$updatesql_b.=" where chanpinid = $chanpinid";
	

	//表4
	
	$updatesql_c="update $chanpin_c set ";
	$insertsql_c="insert into $chanpin_c (";
	$insertsql2_c=") values (";

  $values['classname'] = $chanpin_t['classname'] ;
  $updatesql_c.="classname='".$values['classname']."'";
  $insertsql_c.="classname";
  $insertsql2_c.="'".$values['classname'];
  
  $values['classid'] = $classid ;
  $updatesql_c.=",classid='".$values['classid']."'";
  $insertsql_c.=",classid";
  $insertsql2_c.="','".$values['classid'];

  $values['updatetime'] = date("Y-m-d H:i:s") ;
  $updatesql_c.=",updatetime='".$values['updatetime']."'";
  $insertsql_c.=",updatetime";
  $insertsql2_c.="','".$values['updatetime'];
  

$updatesql_c.=",SN='".$sn."'";
  
  $values['USER'] = $_POST['USER'] ;
  $updatesql_c.=",USER='".$values['USER']."'";
  $insertsql_c.=",USER";
  $insertsql2_c.="','".$values['USER'];
  
  $values['TELPORT'] = $chanpin_t['TELPORT'] ;
  $updatesql_c.=",TELPORT='".$values['TELPORT']."'";
  $insertsql_c.=",TELPORT";
  $insertsql2_c.="','".$values['TELPORT'];

  $updatesql_c.=",AUTOCFG_KEY='".$_POST['AUTOCFG_KEY']."'";
  $insertsql_c.=",AUTOCFG_KEY";
  $insertsql2_c.="','".$_POST['AUTOCFG_KEY'];
  
	require_once ('product_'.$type.'/product4.php'); //不同型号处理

	$updatesql_c.=" where chanpinid = $chanpinid";
	
}


	if($action=="saveadd"){
		$insertsql.=",SN";
  		$insertsql2.="','".$sn;
		$insertsql2.="')";
		$insertsql.=$insertsql2;

		$muban2_insertsql="insert into $chanpin2 (";
		$muban2_insertsql2=") values (";
		$muban2_insertsql.="classname";
  		$muban2_insertsql2.="'".$values['classname'];
		$muban2_insertsql.=",classid";
  		$muban2_insertsql2.="','".$values['classid'];
		$muban2_insertsql.=",SN";
  		$muban2_insertsql2.="','".$sn;
		$muban2_insertsql.=",USER";
  		$muban2_insertsql2.="','".$values['USER'];		
		for($i=1;$i<=40;$i++){
			$muban2_insertsql.=",file$i";
			$muban2_insertsql2.="','".$_POST["file"."$i"];
		}
		
		$muban2_insertsql2.="')";
		$muban2_insertsql.=$muban2_insertsql2;
		
		$db->query($insertsql);	
		
		if ($telport == 16) {
			$insertsql_a.=",SN";
  			$insertsql2_a.="','".$sn;
			$insertsql2_a.="')";
			$insertsql_a.=$insertsql2_a;
			$db->query($insertsql_a);	
		}
		else if ($telport == 32) {
			$insertsql_a.=",SN";
  			$insertsql2_a.="','".$sn;
			$insertsql2_a.="')";
			$insertsql_a.=$insertsql2_a;
			$db->query($insertsql_a);	
			
			$insertsql_b.=",SN";
  			$insertsql2_b.="','".$sn;
			$insertsql2_b.="')";
			$insertsql_b.=$insertsql2_b;
			$db->query($insertsql_b);	
			
			$insertsql_c.=",SN";
  			$insertsql2_c.="','".$sn;
			$insertsql2_c.="')";
			$insertsql_c.=$insertsql2_c;
			$db->query($insertsql_c);	
		}
		$db->query($muban2_insertsql);
		$chanpinid=$db->fetch_array($db->query("select MAX(chanpinid) from $chanpin"));
		$db->query("insert into chanpin (SN,classname,classid,chanpin,chanpin2,chanpinid,type ) values ('".$sn."','".$values['classname']."','".$values['classid']."','".$chanpin."','".$chanpin2."',$chanpinid[0], '".$type."' )");
		WriteSuccessMsg("<br><li>添加终端成功</li>".$action,"{$URL}?job=productmanage&classid=".$values['classid']);
	}
	elseif($action=="saveaddmore"){
		$muban2_insertsql="insert into $chanpin2 (";
		$muban2_insertsql2=") values (";
		$muban2_insertsql.="classname";
  		$muban2_insertsql2.="'".$values['classname'];
		$muban2_insertsql.=",classid";
  		$muban2_insertsql2.="','".$values['classid'];
		//$muban2_insertsql.=",SN";
  		//$muban2_insertsql2.="','".$values['SN'];
		$muban2_insertsql.=",USER";
  		$muban2_insertsql2.="','".$values['USER'];		
		for($i=1;$i<=40;$i++){
			$muban2_insertsql.=",file$i";
			$muban2_insertsql2.="','".$_POST["file"."$i"];
		}
		for($i=0;$i<$sncount;$i++){
			
			//$insertsql2.="')";
			$newsn=sprintf("%s%0".$countsn2."s", $sn0,$snhou+$i);
			$insert=$insertsql.",SN".$insertsql2."','".$newsn."')";		
			//$muban2_insertsql2.="')";
			$muban2_insert=$muban2_insertsql.",SN".$muban2_insertsql2."','".$newsn."')";
			$sn_t=$db->fetch_array($db->query("select SN from chanpin where SN='".$newsn."'"));
			if($sn_t['SN'])
			{
				$errmsg.="<br><li>已经存在此机身号码（SN）:".$newsn."</li>";
				continue;
			}
			
			$db->query($insert);
			if ($telport == 16) {
				$insert_a=$insertsql_a.",SN".$insertsql2_a."','".$newsn."')";
				$db->query($insert_a);	
			}	
			else if ($telport == 32) {
				$insert_a=$insertsql_a.",SN".$insertsql2_a."','".$newsn."')";
				$db->query($insert_a);
				$insert_b=$insertsql_b.",SN".$insertsql2_b."','".$newsn."')";
				$db->query($insert_b);
				$insert_c=$insertsql_c.",SN".$insertsql2_c."','".$newsn."')";
				$db->query($insert_c);
			}
			$db->query($muban2_insert);
			$chanpinid=$db->fetch_array($db->query("select MAX(chanpinid) from $chanpin"));
			$db->query("insert into chanpin (SN,classname,classid,chanpin,chanpin2,chanpinid,type ) values ('".$newsn."','".$values['classname']."','".$values['classid']."','".$chanpin."','".$chanpin2."',$chanpinid[0], '".$type."' )");
			
			$succmsg.="<br><li>添加终端成功机身号码（SN）:".$newsn."</li>";
		}
		if(!$errmsg)
			WriteSuccessMsg($succmsg,"{$URL}?job=productmanage&classid=".$values['classid']);
		else 
			WriteErrMsg($errmsg.$succmsg);
	}
	else {
                $sn_t=$db->fetch_array($db->query("select SN from chanpin where SN='".$sn."' and chanpinid!=$chanpinid"));
                if($sn_t['SN'])
                {                                                                                         
                	WriteErrMsg("<br><li>已经存在此机身号码（SN）:".$sn."</li>");
                	exit();
                }
		$muban2_updatesql="update $chanpin2 set ";		
		//$muban2_updatesql.="SN='".$values['SN']."'";
		$muban2_updatesql.="SN='".$sn."'";  
		$muban2_updatesql.=",USER='".$values['USER']."'";
		$muban2_updatesql.=",classname='".$values['classname']."'";
		$muban2_updatesql.=",classid='".$values['classid']."'";
		for($i=1;$i<=40;$i++){
			$muban2_updatesql.=",file$i='".$_POST["file"."$i"]."'";
		}
		$muban2_updatesql.=" where chanpinid = $chanpinid";
		$db->query($updatesql);
		if ($telport == 16) {
			$db->query($updatesql_a);
		}
		else if ($telport == 32) {
			$db->query($updatesql_a);
			$db->query($updatesql_b);
			$db->query($updatesql_c);
		}
		$db->query($muban2_updatesql);
		$db->query("update chanpin set SN='".$sn."' where chanpin='".$chanpin."' and chanpinid=$chanpinid");
		WriteSuccessMsg("<br><li>修改终端成功</li>".$action,"{$URL}?job=productmanage&classid=".$values['classid']);
	}
//	$query=$db->query($insertsql);

	}
	elseif($action=="del") {
		$statu="del";
		$chanpinid=$_GET['chanpinid'];
		$classid=$_GET['classid'];
		$chanpin=$db->fetch_array($db->query("SELECT chanpin,chanpin2,TELPORT FROM ".$tablepre."projectclass where classid=$classid"));
		$query=$db->query("delete  from ".$chanpin[0]." WHERE chanpinid=$chanpinid");
		$db->query("delete  from ".$chanpin[1]." WHERE chanpinid=$chanpinid");
		if ($chanpin[2] == 16) {
			$query=$db->query("delete  from ".$chanpin[0]."_a WHERE chanpinid=$chanpinid");
		}
		else if ($chanpin[2] == 32) {
			$query=$db->query("delete  from ".$chanpin[0]."_a WHERE chanpinid=$chanpinid");
			$query=$db->query("delete  from ".$chanpin[0]."_b WHERE chanpinid=$chanpinid");
			$query=$db->query("delete  from ".$chanpin[0]."_c WHERE chanpinid=$chanpinid");
		}
		$db->query("delete from chanpin where chanpinid=$chanpinid and chanpin='".$chanpin[0]."'");
		WriteSuccessMsg("<br><li>删除成功</li>","{$URL}?job=productmanage&classid={$classid}");
	}
	elseif($action=="delmore") {
		$statu="delmore";
		$classid=$_GET['classid'];
		$num=$_POST['boxs'];
		for($i=0;$i<$num;$i++){	
			if(!empty($_POST["chanpinid$i"])){
				if($id=="")
					$id=$_POST["chanpinid$i"];
				else
					$id=$_POST["chanpinid$i"].",$id";
			}
		}
		
		if($classid){
		  $chanpin=$db->fetch_array($db->query("SELECT chanpin,chanpin2 FROM ".$tablepre."projectclass where classid=$classid"));
		  if(!empty($id)){
			$query=$db->query("delete  from ".$chanpin[0]." WHERE chanpinid in ( $id )");
			$db->query("delete  from ".$chanpin[1]." WHERE chanpinid in ( $id )");
			$db->query("delete from chanpin where chanpinid in ($id) and chanpin='".$chanpin[0]."'");
		  }
		//WriteSuccessMsg("delete  from ".$chanpin[0]." WHERE chanpinid in ($id)","{$URL}?job=productmanage&classid={$classid}");
		  WriteSuccessMsg("<br><li>删除成功</li>","{$URL}?job=productmanage&classid={$classid}");
		}
		else { //if(classid)
		  $chanpinquery=$db->query("SELECT chanpin,chanpin2,chanpinid FROM chanpin where id in ($id)");
		  while($chanpin=$db->fetch_array($chanpinquery)){
		  	$query=$db->query("delete  from ".$chanpin[0]." WHERE chanpinid='".$chanpin[2]."'");
			$db->query("delete  from ".$chanpin[1]." WHERE chanpinid='".$chanpin[2]."'");
		  }
		  $db->query("delete from chanpin where id in ($id)");
		  WriteSuccessMsg("<br><li>删除成功</li>","{$URL}?job=productmanage&classid={$classid}");
		}
	}
	else
		$statu="main";
}
else{
	$statu="main";
	$ClassId=trim($_GET['ClassId']);
	
}


$remotehost = explode(":",$_SESSION["HOST"]);
if($remotehost[0] == "*")
	$remotehost[0] = $_SERVER['HTTP_HOST'];

require_once template('product');
/*
if($type=="ata")
	require_once template('chanpin1');
else if($type=="phone")
	require_once template('chanpin2');
else if($type=="rp104")
	require_once template('chanpin3');
else 
	WriteErrMsg("<br><li>错误的机器类型！(".$type.")</li>");
*/
?>
