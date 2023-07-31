<?php
!defined('OK') && exit('ForbIdden');

$query=$db->query("SELECT classid,classname FROM ".$tablepre."projectclass ORDER BY orderid");
while($row=$db->fetch_array($query))
	$rsprojectclassdb[]=$row;
$classid=trim($_GET['classid']);
$keyword=trim($_GET['keyword']);

$query=$db->query("SELECT miaoshu,classname FROM ".$tablepre."projectclass where classid=$classid");
$row=$db->fetch_array($query);
$project=fillfield($row[0]);
$classname=$row[1];

if(!empty($classid)) {
	$showfield=trim($_GET['showfield']);
	$keyword=trim($_GET['keyword']);

	$sql="SELECT count(*) AS count FROM ".$tablepre."chanpin WHERE projectid  in ($classid) ";
	$showfield2=explode(",",$showfield);
	$keyword2=explode(",",$keyword);
	$showfieldlength2 = count($showfield2);
	for($m=0;$m<$showfieldlength2;$m++)
	{
		if($showfield2[$m]!="updatetime" && $showfield2[$m]!="id")
		{
			if($keyword2[$m]!="")
				$sql2=$sql2." and ".$showfield2[$m]."='".$keyword2[$m]."'";
		}
	}
	$sql=$sql.$sql2;
//echo $sql;
	$query=$db->query($sql);
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
	$sql="SELECT * FROM ".$tablepre."chanpin WHERE projectid  in ($classid) ";
	$sql=$sql.$sql2." ORDER BY orderid desc, id DESC LIMIT $start_limit,$perpage";
	
	$fenye=showpage("$URL?job=productseach&classid=$classid&showfield=$showfield&keyword=$keyword&",$page,$count,$perpage,true,true,"�)");
	$query=$db->query($sql);
	while($row=$db->fetch_array($query)) {
		$rsdb[]=$row;
	}
} 
	
require_once template('productseach');
function fillfield($path)
{
	if(!$fp = @fopen($path,'r')){
		echo '���';
		exit();
	}
	flock($fp,LOCK_SH);
	$note = fread($fp,filesize($path));
	fclose($fp);
	$note = explode("\n",$note);		
	$maxnum = count($note);
	
	$j=1;
	$showfield=trim($_GET['showfield']);
	$showfield1=explode(",",$showfield);
	$showfieldlength = count($showfield1);
	for($i=0;$i<$maxnum;$i++)
	{
		$note1=explode(" ",$note[$i]);
		if(trim($note1[0])!="")
		{	
			for($k=0;$k<$showfieldlength;$k++)
			{
				if("file".$j==trim($showfield1[$k]))
				{
					$project[$j][0]=$note1[0];
					$project[$j][1]=$note1[1];
					$project[$j][2]=$note1[2];
					$project[$j][3]="file".($j);
				}
			}
			$j++;
		}
	}
	return $project;
}
?>
