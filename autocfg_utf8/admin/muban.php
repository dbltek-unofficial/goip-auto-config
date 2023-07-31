<?php
!defined('OK') && exit('ForbIdden');

$statu="";
$type="";
$rsdb=array();

if(isset($_GET['action']))
{
	$action=$_GET['action'];
	if(isset($_GET['id']))
		$id=$_GET['id'];
		
	if($action=="add")
	{
		$statu="add";
		$webtitle="添加摸板";
		
		$query=$db->query("SELECT classid,classname FROM ".$tablepre."projectclass ORDER BY orderid");
		while($row=$db->fetch_array($query)) {
			$rsprojectclass[]=$row;
		}
		
		if(isset($_GET['classid'])) 
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
		$telport=$projectclass1[5];
		if($muban==""){
			WriteErrMsg("<br><li>至少要有一个系列存在或者是一个系列的配置文件存在！</li>");
			exit();
		}
		
		if ($telport == 16) {
			$rsmuban=$db->query("select * from ".$muban." where muban=title");
			$value=$db->fetch_array($rsmuban);
			$rsmuban_a=$db->query("select * from ".$muban."_a where muban=title");
			$value_a=$db->fetch_array($rsmuban_a);
			$values = array_merge($value,$value_a);
		}
		elseif ($telport == 32) {
			$rsmuban=$db->query("select * from ".$muban." where muban=title");
			$value=$db->fetch_array($rsmuban);
			$rsmuban_a=$db->query("select * from ".$muban."_a where muban=title");
			$value_a=$db->fetch_array($rsmuban_a);
			$rsmuban_b=$db->query("select * from ".$muban."_b where muban=title");
			$value_b=$db->fetch_array($rsmuban_b);
			$rsmuban_c=$db->query("select * from ".$muban."_c where muban=title");
			$value_c=$db->fetch_array($rsmuban_c);
			$values = array_merge($value,$value_a,$value_b,$value_c);
		}
		else {
			$rsmuban=$db->query("select * from ".$muban." where muban=title");
			$values=$db->fetch_array($rsmuban);
		}
		
		$orderrs=$db->fetch_array($db->query("select max(orderid) from ".$muban));
		$values['orderid']=$orderrs[0]+1;
		$values2=$db->fetch_array($db->query("select * from ".$muban2." where mubanname = classname"));
		
	}
	 elseif($action=="saveadd" || $action=="modifysave") {

		$projectid=$_POST['projectid'];
		
		$title=$_POST['muban_name'];
		if (isset($_GET['id']))
			$mubanid=$_GET['id'];
		else
			$mubanid="";	
		$orderid = $_POST['muban_orderid'];
		$ErrMsg="";
		if(empty($projectid))
			$ErrMsg ='<br><li>系列名不能为空！</li>';
		if(empty($title))
			$ErrMsg=$ErrMsg."<br><li>模板名不能为空！</li>";

		$muban_t = $db->fetch_array($db->query("select muban,muban2,classname,classid,type,TELPORT from ".$tablepre."projectclass where classid = $projectid"));
		
		$muban=$muban_t['muban'];
		$muban2=$muban_t['muban2'];
		$muban_a=$muban_t['muban']."_a";
		$muban_b=$muban_t['muban']."_b";
		$muban_c=$muban_t['muban']."_c";

		$telport = $muban_t['TELPORT'];
		$type=$muban_t['type'];
		//WriteErrMsg("$projectid, $type");
		if($action=="modifysave"){
			$result =$db->query("select * from ".$muban_t['muban']." where id = $mubanid");
			if ($muban_t['TELPORT'] == 16) 
				$result_a =$db->query("select * from ".$muban_a." where id = $mubanid");
			if ($muban_t['TELPORT'] == 32)  {
				$result_a =$db->query("select * from ".$muban_a." where id = $mubanid");
				$result_b =$db->query("select * from ".$muban_b." where id = $mubanid");
				$result_c =$db->query("select * from ".$muban_c." where id = $mubanid");
			}
			$result2 =$db->query("select * from ".$muban_t['muban2']." where mubanid = $mubanid");
		}
		else {
			$result =$db->query("select * from ".$muban_t['muban']." where muban = '".$title."'");
			if ($muban_t['TELPORT'] == 16)
				$result_a =$db->query("select * from ".$muban_a." where muban = '".$title."'");
			if ($muban_t['TELPORT'] == 32) {
				$result_a =$db->query("select * from ".$muban_a." where muban = '".$title."'");
				$result_b =$db->query("select * from ".$muban_b." where muban = '".$title."'");
				$result_c =$db->query("select * from ".$muban_c." where muban = '".$title."'");
			}
			$result2 =$db->query("select * from ".$muban_t['muban2']." where mubanname = '".$title."'");
		}
		//16goip处理
		if ($muban_t['TELPORT'] == 16) {
			$value=$db->fetch_array($result);
			$value_a=$db->fetch_array($result_a);
			if($action=="modifysave")
				$values = array_merge($value,$value_a);
			else
				$values=$db->fetch_array($result);
		}
		//32goip处理
		elseif ($muban_t['TELPORT'] == 32) {
			$value=$db->fetch_array($result);
			$value_a=$db->fetch_array($result_a);
			$value_b=$db->fetch_array($result_b);
			$value_c=$db->fetch_array($result_c);
			if($action=="modifysave")
				$values = array_merge($value,$value_a,$value_b,$value_c);
			else
				$values=$db->fetch_array($result);
		}
		else {
			$values=$db->fetch_array($result);
		}	
		//print_r($value);
		$values2=$db->fetch_array($result2);	
		if($action=="saveadd" && $values[0] > 0)
		{
			WriteErrMsg("<br><li>该系列已经存在此模板名, 请换一个模板名</li>");
			exit();
		}
		if($action=="saveadd")
		{
			$values=$db->fetch_array($db->query("select * from ".$muban_t['muban']." where muban = title"));	
			$values2 =$db->fetch_array($db->query("select * from ".$muban_t['muban2']." where mubanname = classname"));				
		}
		if($action=="modifysave" && $values['title']==$values['title'] && $values['muban'] != $_POST['muban_name'])
		{
			WriteErrMsg("<br><li>不可以更改初始的摸板名</li>");
			exit();
		}
//	print_r($values);
//	$values['TELPORT'] = 2;
/*
	foreach($values as $key => $val){
		$msg.="<br>".$key."=>".$val;
	}
	WriteErrMsg($msg);
*/

	$updatesql="update $muban set ";
	$insertsql="insert into $muban (";
	$insertsql2=") values (";


  $values['muban'] = $title ;
  $updatesql.="muban='".$values['muban']."'";
  $insertsql.="muban";
  $insertsql2.="'".$values['muban'];

  $values['title'] = $muban_t['classname'] ;
  $updatesql.=",title='".$values['title']."'";
  $insertsql.=",title";
  $insertsql2.="','".$values['title'];
  $values['classid'] = $muban_t['classid'] ;
  $updatesql.=",classid='".$values['classid']."'";
  $insertsql.=",classid";
  $insertsql2.="','".$values['classid']; 
  $values['TELPORT'] = $muban_t['TELPORT'] ;
  $updatesql.=",TELPORT='".$values['TELPORT']."'";
  $insertsql.=",TELPORT";
  $insertsql2.="','".$values['TELPORT'];
  $values['orderid'] = $_POST['muban_orderid'] ;
  $updatesql.=",orderid='".$values['orderid']."'";
  $insertsql.=",orderid";
  $insertsql2.="','".$values['orderid'];
  
  $updatesql.=",AUTOCFG_KEY='".$_POST['AUTOCFG_KEY']."'";
  $insertsql.=",AUTOCFG_KEY";
  $insertsql2.="','".$_POST['AUTOCFG_KEY'];
  
//if($type=="ata"):
	require_once ('product_'.$type.'/product.php'); //不同型号处理
/*end of ata*/
//elseif($type=="phone"):
/*now start phone*/
	

/*end of phone*/

//elseif($type=="rp104"):
/*now start rp104*/

/*
	foreach($values as $key => $val){
		$msg.="<br>".$key."=>".$val;
	}

	WriteErrMsg($msg);
*/
	$updatesql.=" where id = $mubanid";
	$insertsql2.="')";
	$insertsql.=$insertsql2;
	
	//16goip处理
	if ($muban_t['TELPORT'] ==16) {
		$updatesql_a="update $muban_a set ";
		$insertsql_a="insert into $muban_a (";
		$insertsql2_a=") values (";

	    $values['muban'] = $title ;
	    $updatesql_a.="muban='".$values['muban']."'";
	    $insertsql_a.="muban";
	    $insertsql2_a.="'".$values['muban'];
	
	    $values['title'] = $muban_t['classname'] ;
	    $updatesql_a.=",title='".$values['title']."'";
	    $insertsql_a.=",title";
	    $insertsql2_a.="','".$values['title'];
	    $values['classid'] = $muban_t['classid'] ;
	    $updatesql_a.=",classid='".$values['classid']."'";
	    $insertsql_a.=",classid";
	    $insertsql2_a.="','".$values['classid'];
	  
	    $updatesql_a.=",AUTOCFG_KEY='".$_POST['AUTOCFG_KEY']."'";
	    $insertsql_a.=",AUTOCFG_KEY";
	    $insertsql2_a.="','".$_POST['AUTOCFG_KEY'];
		
		$values['orderid'] = $_POST['muban_orderid'] ;
 		$updatesql_a.=",orderid='".$values['orderid']."'";
		$insertsql_a.=",orderid";
 		$insertsql2_a.="','".$values['orderid'];

	    require_once ('product_'.$type.'/product2.php'); //不同型号处理

	    $updatesql_a.=" where id = $mubanid";
	    $insertsql2_a.="')";
	    $insertsql_a.=$insertsql2_a;
	}
	
	elseif ($muban_t['TELPORT'] == 32) {
		//表2
		
		$updatesql_a="update $muban_a set ";
		$insertsql_a="insert into $muban_a (";
		$insertsql2_a=") values (";

	    $values['muban'] = $title ;
	    $updatesql_a.="muban='".$values['muban']."'";
	    $insertsql_a.="muban";
	    $insertsql2_a.="'".$values['muban'];
	
	    $values['title'] = $muban_t['classname'] ;
	    $updatesql_a.=",title='".$values['title']."'";
	    $insertsql_a.=",title";
	    $insertsql2_a.="','".$values['title'];
	    $values['classid'] = $muban_t['classid'] ;
	    $updatesql_a.=",classid='".$values['classid']."'";
	    $insertsql_a.=",classid";
	    $insertsql2_a.="','".$values['classid'];
	  
	    $updatesql_a.=",AUTOCFG_KEY='".$_POST['AUTOCFG_KEY']."'";
	    $insertsql_a.=",AUTOCFG_KEY";
	    $insertsql2_a.="','".$_POST['AUTOCFG_KEY'];
		
		$values['orderid'] = $_POST['muban_orderid'] ;
 		$updatesql_a.=",orderid='".$values['orderid']."'";
		$insertsql_a.=",orderid";
 		$insertsql2_a.="','".$values['orderid'];

	    require_once ('product_'.$type.'/product2.php'); //不同型号处理

	    $updatesql_a.=" where id = $mubanid";
	    $insertsql2_a.="')";
	    $insertsql_a.=$insertsql2_a;
		
		//表3
		$updatesql_b="update $muban_b set ";
		$insertsql_b="insert into $muban_b (";
		$insertsql2_b=") values (";

	    $values['muban'] = $title ;
	    $updatesql_b.="muban='".$values['muban']."'";
	    $insertsql_b.="muban";
	    $insertsql2_b.="'".$values['muban'];
	
	    $values['title'] = $muban_t['classname'] ;
	    $updatesql_b.=",title='".$values['title']."'";
	    $insertsql_b.=",title";
	    $insertsql2_b.="','".$values['title'];
	    $values['classid'] = $muban_t['classid'] ;
	    $updatesql_b.=",classid='".$values['classid']."'";
	    $insertsql_b.=",classid";
	    $insertsql2_b.="','".$values['classid'];
	  
	    $updatesql_b.=",AUTOCFG_KEY='".$_POST['AUTOCFG_KEY']."'";
	    $insertsql_b.=",AUTOCFG_KEY";
	    $insertsql2_b.="','".$_POST['AUTOCFG_KEY'];
		
		$values['orderid'] = $_POST['muban_orderid'] ;
 		$updatesql_b.=",orderid='".$values['orderid']."'";
		$insertsql_b.=",orderid";
 		$insertsql2_b.="','".$values['orderid'];

	    require_once ('product_'.$type.'/product3.php'); //不同型号处理

	    $updatesql_b.=" where id = $mubanid";
	    $insertsql2_b.="')";
	    $insertsql_b.=$insertsql2_b;
		
		//表4
		$updatesql_c="update $muban_c set ";
		$insertsql_c="insert into $muban_c (";
		$insertsql2_c=") values (";

	    $values['muban'] = $title ;
	    $updatesql_c.="muban='".$values['muban']."'";
	    $insertsql_c.="muban";
	    $insertsql2_c.="'".$values['muban'];
	
	    $values['title'] = $muban_t['classname'] ;
	    $updatesql_c.=",title='".$values['title']."'";
	    $insertsql_c.=",title";
	    $insertsql2_c.="','".$values['title'];
	    $values['classid'] = $muban_t['classid'] ;
	    $updatesql_c.=",classid='".$values['classid']."'";
	    $insertsql_c.=",classid";
	    $insertsql2_c.="','".$values['classid'];
	  
	    $updatesql_c.=",AUTOCFG_KEY='".$_POST['AUTOCFG_KEY']."'";
	    $insertsql_c.=",AUTOCFG_KEY";
	    $insertsql2_c.="','".$_POST['AUTOCFG_KEY'];
		
		$values['orderid'] = $_POST['muban_orderid'] ;
 		$updatesql_c.=",orderid='".$values['orderid']."'";
		$insertsql_c.=",orderid";
 		$insertsql2_c.="','".$values['orderid'];

	    require_once ('product_'.$type.'/product4.php'); //不同型号处理

	    $updatesql_c.=" where id = $mubanid";
	    $insertsql2_c.="')";
	    $insertsql_c.=$insertsql2_c;
	}
	
	
	
	
	if($action=="saveadd"){
		$muban2_insertsql="insert into $muban2 (";
		$muban2_insertsql2=") values (";
		$muban2_insertsql.="classname";
  		$muban2_insertsql2.="'".$muban_t['classname'];
		$muban2_insertsql.=",mubanname";
  		$muban2_insertsql2.="','".$_POST['muban_name'];
		$muban2_insertsql.=",projectid";
  		$muban2_insertsql2.="','".$_POST['projectid'];
		for($i=1;$i<=40;$i++){
			$muban2_insertsql.=",file$i";
			$muban2_insertsql2.="','".$_POST["file"."$i"];
		}
		$muban2_insertsql2.="')";
		$muban2_insertsql.=$muban2_insertsql2;
		
		$db->query($insertsql);	
		if ($muban_t['TELPORT'] == 16) 
			$db->query($insertsql_a);
		elseif ($muban_t['TELPORT'] == 32) {
			$db->query($insertsql_a);
			$db->query($insertsql_b);
			$db->query($insertsql_c);
			
		}	
		$db->query($muban2_insertsql);
		WriteSuccessMsg("<br><li>添加模板成功</li>".$action,"{$URL}?job=muban");
	}
	else {
		
		$muban2_updatesql="update $muban2 set ";		
		$muban2_updatesql.="mubanname='".$values['muban']."'";
		$muban2_updatesql.=",classname='".$values['title']."'";
		$muban2_updatesql.=",projectid='".$values['classid']."'";
		for($i=1;$i<=40;$i++){
			$muban2_updatesql.=",file$i='".$_POST["file"."$i"]."'";
		}
		$muban2_updatesql.=" where mubanid = $mubanid";
		$db->query($updatesql);
		if ($muban_t['TELPORT'] == 16) 
			$db->query($updatesql_a);
		elseif ($muban_t['TELPORT'] == 32) {
			$db->query($updatesql_a);
			//$db->query($updatesql_b);
			//$db->query($updatesql_c);
			
		}
		
		$db->query($muban2_updatesql);
		WriteSuccessMsg("<br><li>修改模板成功</li>".$action,"{$URL}?job=muban");
	}
//	$query=$db->query($insertsql);

	}
	elseif($action=="modify")
	{
		$statu="modify";
		$webtitle="修改摸板";
		$id=$_GET['id'];
		$classid=$_GET['classid'];
		$result =$db->query("select muban,muban2,type,TELPORT from ".$tablepre."projectclass where classid = $classid");		
		$muban=mysql_fetch_array($result);	
		$type=$muban['type'];
		$rsmuban=$db->query("select * from ".$muban['muban']." where id = $id");
		if ($muban['TELPORT'] == 16) {
			$rsmuban_a=$db->query("select * from ".$muban['muban']."_a where id = $id");
			$value_a=mysql_fetch_array($rsmuban_a);
			$value=mysql_fetch_array($rsmuban);
			$values = array_merge($value,$value_a);
		}
		elseif ($muban['TELPORT'] == 32) {
			$rsmuban_a=$db->query("select * from ".$muban['muban']."_a where id = $id");
			$value_a=mysql_fetch_array($rsmuban_a);
			$rsmuban_b=$db->query("select * from ".$muban['muban']."_b where id = $id");
			$value_b=mysql_fetch_array($rsmuban_b);
			$rsmuban_c=$db->query("select * from ".$muban['muban']."_c where id = $id");
			$value_c=mysql_fetch_array($rsmuban_c);
			$value=mysql_fetch_array($rsmuban);
			$values = array_merge($value,$value_a,$value_b,$value_c);
			
		}
		else
			$values=mysql_fetch_array($rsmuban);
		
		$values2=$db->fetch_array($db->query("select * from ".$muban['muban2']." where mubanid = $id"));
		
	}
/*	
	elseif($action=="uploadmodify") {
		$statu="uploadmodify";
		$query=$db->query("SELECT classid,classname FROM ".$tablepre."projectclass ORDER BY orderid");
		while($row=$db->fetch_array($query)) {
			$rsprojectclass[]=$row;
		}
		
		$query=$db->query("SELECT classid,orderid,muban,title FROM ".$tablepre."muban WHERE id=$id");
		if($row=$db->fetch_array($query)){	
			$classid=$row[0];
			$orderid=$row[1];
			$muban=$row[2];
			$title=$row[3];
		}
		
	} elseif($action=="uploadadd") {
		$statu="uploadadd";
		$query=$db->query("SELECT classid,classname FROM ".$tablepre."projectclass ORDER BY orderid");
		while($row=$db->fetch_array($query)) {
			$rsprojectclass[]=$row;
		}
	} elseif($action=="uploadsaveadd") {
		$classid=$_POST['classid'];
		$title=$_POST['title'];
		$muban=$_POST['muban'];
		$ErrMsg="";
		if(empty($classid))
			$ErrMsg ='<br><li>系列名不能为空！</li>';
		if(empty($title))
			$ErrMsg=$ErrMsg."<br><li>模板名不能为空！</li>";
		if(empty($muban))
			$ErrMsg=$ErrMsg."<br><li>模板文件不能为空！</li>";
			
		if($ErrMsg!="")
				WriteErrMsg($ErrMsg);
			else{
				$query=$db->query("SELECT MAX(orderid) FROM ".$tablepre."muban where classid=$classid");
				if($row=$db->fetch_array($query))
					$orderid=$row[0]+1;
				else
					$orderid=1;
				$query=$db->query("INSERT INTO ".$tablepre."muban (title,classid,muban,orderid) VALUES ('$title','$classid','$muban','$orderid')");
					WriteSuccessMsg("<br><li>添加模板成功</li>","{$URL}?job=muban");
			}
	}
	 elseif($action=="uploadsavemodify") {
		$orderid=$_POST['orderid'];
		$classid=$_POST['classid'];
		$title=$_POST['title'];
		$muban=$_POST['muban'];
		$ErrMsg="";
		if(empty($classid))
			$ErrMsg ='<br><li>系列名不能为空！</li>';
		if(empty($title))
			$ErrMsg=$ErrMsg."<br><li>模板名不能为空</li>";
		if(empty($muban))
			$ErrMsg=$ErrMsg."<br><li>模板文件不能为空</li>";
			if(empty($orderid))
			$ErrMsg=$ErrMsg."<br><li>模板排序不能为空且为数字</li>";
		if($ErrMsg!="")
				WriteErrMsg($ErrMsg);
		else{
			$query=$db->query("SELECT classid FROM ".$tablepre."muban WHERE id='$id' ");
			$rs=$db->fetch_array($query);
			if(empty($rs[0]))
				WriteErrMsg("<br><li>该系列不存在！</li>");
			else{
				$query=$db->query("UPDATE ".$tablepre."muban SET classid='$classid',title='$title',orderid='$orderid',muban='$muban' WHERE id='$id'") ;
				if($query>0)
					WriteSuccessMsg("<br><li>修改[$title]模板成功！</li>","{$URL}?job=muban");
				else
					WriteErrMsg("<br><li>修改[$title]模板失败！</li>");
			}
		}
	}
*/
	elseif($action=="del") {
		$id=$_GET['id'];
		$classid=$_GET['classid'];
		$ErrMsg="";
		if(empty($id)||empty($classid))
			$ErrMsg ='<br><li>请选择要删除的对象</li>';
		if($ErrMsg!="")
			WriteErrMsg($ErrMsg);
		else{
			$query=$db->query("SELECT muban,muban2,TELPORT FROM ".$tablepre."projectclass WHERE classid='$classid' ");
			$rs=$db->fetch_array($query);
			if(empty($rs[0]))
				WriteErrMsg("<br><li>该型号不存在！</li>");
			else{
				$muban=$rs[0];
				$remuban=$db->query("SELECT muban,title FROM ".$rs['muban']." WHERE id='$id' ");
				$rsmuban=$db->fetch_array($remuban);
				if(empty($rsmuban[0]))
					WriteErrMsg("<br><li>该摸板不存在！</li>");
				else if($rsmuban['muban']==$rsmuban['title'])
					WriteErrMsg("<br><li>无法删除初始的摸板[".$rsmuban['muban']."]！</li>");
				else{
					//$db->query("DELETE FROM ".$tablepre."chanpin  WHERE projectid IN ($classid)");
					$db->query("DELETE FROM ".$rs['muban']."  WHERE id IN ($id)");
					$db->query("DELETE FROM ".$rs['muban2']." WHERE mubanid IN ($id)");
					if ($rs['TELPORT'] == 16) {
						$db->query("DELETE FROM ".$rs['muban']."_a  WHERE id IN ($id)");
					}
					elseif ($rs['TELPORT'] == 32) {
						$db->query("DELETE FROM ".$rs['muban']."_a  WHERE id IN ($id)");
						$db->query("DELETE FROM ".$rs['muban']."_b  WHERE id IN ($id)");
						$db->query("DELETE FROM ".$rs['muban']."_c  WHERE id IN ($id)");
					}
					//WriteErrMsg("<br> ".$rsmuban['muban']."==".$rsmuban['title']);
					WriteSuccessMsg("<br><li>删除[".$rsmuban['muban']."]模板成功</li>","{$URL}?job=muban");
				}
			}
		}
	}
	else
	{
		echo  $statu;
		$statu="main";
		//$type="ata";
		$webtitle="摸板管理";
		$remuban=$db->query("select muban from ".$tablepre."projectclass order by ".$tablepre."projectclass.orderid");
		while($rowmuban=$db->fetch_array($remuban)) {		
			$query=$db->query("SELECT id,muban,title,classid from ".$rowmuban['muban']." ORDER BY ".$rowmuban['muban'].".orderid");
			while($row=$db->fetch_array($query)) {
				$rsdb[]=$row;
			}
		}
		
	}
}
else
	{
		//$type="ata";
		$statu="main";
		$webtitle="摸板管理";
		$remuban=$db->query("select muban from ".$tablepre."projectclass order by ".$tablepre."projectclass.orderid");
		while($rowmuban=$db->fetch_array($remuban)) {		
			$query=$db->query("SELECT id,orderid,muban,title,classid from ".$rowmuban['muban']." ORDER BY ".$rowmuban['muban'].".orderid");
			while($row=$db->fetch_array($query)) {
				$rsdb[]=$row;
			}
		}
}

$self_url = $_SERVER['REQUEST_URI'];
$set_url = $self_url."&type=set";
$gsm_url = $self_url."&type=gsm";
$other_url = $self_url."&type=other";

require_once template('muban');

/*
if($type=="ata")
	require_once template('muban1');
else if($type=="phone")
	require_once template('muban2');
else if($type=="rp104")
	require_once template('muban3');
else 
	WriteErrMsg("<br><li>错误的机器类型！(".$type.")</li>");
*/
?>
