<?php

!defined('OK') && exit('ForbIdden');
$statu="";
$perpage=30;
if($_GET['classid']){
if(isset($_GET['action'])) {
	$action=$_GET['action'];
	if($action=="next") {
		$statu="before";
		$classid=$_GET['classid'];
		$classnamename="product search";

		
$chanpin=$db->fetch_array($db->query("SELECT * FROM ".$tablepre."projectclass where classid=$classid"));
if(empty($chanpin[0])){
	WriteErrMsg("<br><li>This serial does not exist! classid: $classid</li>");
	exit();
}
if($classid == "")
	$type="all";
else
	$type=$chanpin['type'];
$muban=$chanpin['muban'];
$classname=$chanpin['classname'];
$telport=$chanpin['TELPORT'];

$rsquery=$db->query("SELECT id,muban FROM $muban");
//@require_once('product_'.$type.'/port.php');
while($mubanrow=$db->fetch_array($rsquery))
	$rsmuban[]=$mubanrow;
	
$mubanid=$rsmuban[0];

	if($action=="next"){
		
		$show=$_GET['show'];
		$showvalue=$_POST["$show"];
		$sqlname='';
		//switch($show){
			require('product_'.$type.'/search.php');
		//}

		//echo "SELECT count(*) AS count FROM ".$chanpin['chanpin'].$sqlname."<br>";
		if ($chanpin['TELPORT'] == 32){
			if ($show == "relayserver") 
				$row=$db->fetch_array($db->query("SELECT count(*) AS count FROM 32goip_chanpin_b".$sqlname));
			else
				$row=$db->fetch_array($db->query("SELECT count(*) AS count FROM ".$chanpin['chanpin'].$sqlname));
		}
		else
			$row=$db->fetch_array($db->query("SELECT count(*) AS count FROM ".$chanpin['chanpin'].$sqlname));
	} //if($action=="next"){
	//else $row=$db->fetch_array($db->query("SELECT count(*) AS count FROM ".$chanpin['chanpin']));
		
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

	//$fenye=showpage("$URL?job=productmanage&classid=$classid&",$page,$count,$perpage,true,true,"编");

	if ($telport == 32) {
			if ($show == "relayserver") {
				$query=$db->query("SELECT * FROM 32goip_chanpin_b".$sqlname." ORDER BY chanpinid ");
			}
			else
				$query=$db->query("SELECT * FROM ".$chanpin['chanpin'].$sqlname." ORDER BY chanpinid ");//LIMIT $start_limit,$perpage");
		}
	else
		$query=$db->query("SELECT * FROM ".$chanpin['chanpin'].$sqlname." ORDER BY chanpinid ");//LIMIT $start_limit,$perpage");

	while($row=$db->fetch_array($query)) {
		
		require ('product_'.$type.'/searchshow.php');
/*
		if($type=="ata"){	
	
			//WriteErrMsg($row['h323gktitle']);		
		}//if($type=="ata"){
		else if($type=="phone"){


		} //if($type=="phone"){
*/
		$rsdb[]=$row;
	} // while($row=$db->fetch_array($query)) {
	
	$query=$db->query("DESC ".$chanpin['chanpin']);
	$flag=0;
	while($row=$db->fetch_array($query)) {
		if($row['Field']=="SN")
			$flag=1;
		if($flag)
			$column[]=$row['Field'];
	}

	
	} 
	elseif($action="before") 
	{	$statu="before";
		$classid=$_GET['classid'];
		//$classnamename="Ʒ";

		$query=$db->query("SELECT classname,type FROM ".$tablepre."projectclass where classid=$classid");
		$row=$db->fetch_array($query);
		$classname=$row['classname'];
		$classnamename="product search";
	}
} //if(isset($_GET['action'])) {

} //if($_GET['classid'])
else{
if(isset($_GET['action'])) {
	$action=$_GET['action'];
	if($action=="next") {
		$classname="=All Products=";
		$statu="before";
		$classid=$_GET['classid'];
		$classnamename="product search";
/*
		$query=$db->query("SELECT classname,type FROM ".$tablepre."projectclass where classid=$classid");
		$row=$db->fetch_array($query);
		$classname=$row['classname'];
		$type=$row['type'];
		//$project=fillfield($row[0]);
		
		$projectlength=count($project);
		$fieldlength=count($field);
*/		
		$show=$_GET['show'];
		$showvalue=$_POST["$show"];		
		$cpquery=$db->query("SELECT * FROM ".$tablepre."projectclass ORDER BY orderid ");
		
		
		$k=0;$j=0;
		/*
		while($chanpin=$db->fetch_array($cpquery)) {
			$i++;
		}
		WriteErrMsg($i);
		*/
		while($chanpin=$db->fetch_array($cpquery)) {
			$k++;
			$type=$chanpin['type'];
			$telport=$chanpin['TELPORT'];
			$sqlname='';
			//switch($show){
				require ('product_'.$type.'/search.php');
			//}
/*
if($type=="ata"){
		switch($show){
	
				
			}
		}//if($type=="ata"){					
else if($type=="phone") {
*/
		//echo "SELECT count(*) AS count FROM ".$chanpin['chanpin'].$sqlname."<br>";	
		
		if ($chanpin['TELPORT'] == 32){
			if ($show == "relayserver") 
				$row=$db->fetch_array($db->query("SELECT count(*) AS count FROM 32goip_chanpin_b".$sqlname));
			else
				$row=$db->fetch_array($db->query("SELECT count(*) AS count FROM ".$chanpin['chanpin'].$sqlname));
		}
		else
			$row=$db->fetch_array($db->query("SELECT count(*) AS count FROM ".$chanpin['chanpin'].$sqlname));
	//else $row=$db->fetch_array($db->query("SELECT count(*) AS count FROM ".$chanpin['chanpin']));
	
		//echo $telport;
		if (!isset($count))
			$count = 0;
		$count+=$row['count'];
		
		if ($telport == 32) {
			if ($show == "relayserver") {
				$query=$db->query("SELECT * FROM 32goip_chanpin_b".$sqlname." ORDER BY chanpinid ");
			}
			else
				$query=$db->query("SELECT * FROM ".$chanpin['chanpin'].$sqlname." ORDER BY chanpinid ");
		}
		else
			$query=$db->query("SELECT * FROM ".$chanpin['chanpin'].$sqlname." ORDER BY chanpinid ");
			

	while($row=$db->fetch_array($query)) {
		//print_r($row['classname']);
		//echo "<br>";
		$j++;
		require ('product_'.$type.'/searchshow.php');
		$rsdb[]=$row;
		//print_r($row);
		//echo $telport;
	  }
	  //continue;
	}
	if ($classid == "")
		$type="all";
	$totlepage=ceil($count/$perpage);
	//WriteErrMsg("$i $j");
	}
	elseif($action="before") 
	{	$statu="before";
		//$classid=$_GET['classid'];
		//$classnamename="Ʒ";

		//$query=$db->query("SELECT classname,type FROM ".$tablepre."projectclass where classid=$classid");
		//$row=$db->fetch_array($query);
		$classname="=All Products=";//$row['classname'];
	}
}
}//if(!$_GET['classid'])
//include('getdata.php');
//echo "$k $j";

function showtiaopage($totlepage, $CurrentPage)
{
	$selectid="page".$CurrentPage."select";
	$strTemp= "<select name='page' size='1' id=\"$selectid\" onchange=Selectshow('CK_div',\"$selectid\",$totlepage)>";
	//Selectshow('CK_div', \"page".$CurrentPage."select\",$totlepage)\">" ;
    	for($i=1;$i<=$totlepage;$i++){
    		$strTemp=$strTemp . "<option value='" . $i . "'";
			if( (int)($CurrentPage)==(int)($i))
				$strTemp=$strTemp . " selected ";
			$strTemp=$strTemp . ">The " . $i . " page</option>"   ;
	    }
	$strTemp=$strTemp . "</select>";
	return $strTemp;
}

require_once template('productseachbefore');


?>