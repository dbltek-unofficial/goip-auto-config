<?php
function getdateformchanfile($classid,$chanpin)
{

	$tablepre="ms_";
	$datadb=new DB;
	$query=$datadb->query("SELECT miaoshu FROM ".$tablepre."projectclass where classid='$classid'");
	if($row=$datadb->fetch_array($query))
		$path=$row[0];

	if(!$fp = @fopen($path,'r')){
		echo 'Reading the wrong papers';
		exit();
	}
	flock($fp,LOCK_SH);
	$note = fread($fp,filesize($path));
	fclose($fp);
	$note = explode("\n",$note);		
	$maxnum = count($note);
	$projecttxt= array(); 
	$projectdec= array(); 
	$projecttype= array(); 
	$projectfield= array(); 
	$j=0;
	for($i=0;$i<$maxnum;$i++)
	{
		$note1=explode(" ",$note[$i]);
		if(trim($note1[0])!="")
		{
		//echo $note[$i]."<br>";
		//echo $note1[0]."<br>";
			$projecttxt[$j]=$note1[0];
			$projectdec[$j]=$note1[1];
			$projecttype[$j]=$note1[2];
			$projectfield[$j]="file".($j+1);
			//echo $projecttxt[$j]."|".$projectdec[$j]."|".$projecttype[$j]."|".$projectfield[$j]."<br>";
			$j++;
		}
	}
	
	if(!$fp = @fopen($chanpin,'r')){
		echo 'Reading the wrong papers';
		exit();
	}
	flock($fp,LOCK_SH);
	$note = fread($fp,filesize($path));
	fclose($fp);
	
	$note = explode("\n",$note);		
	$maxnum = count($note);
	$fieldtxt= array(); 
	$fieldvalues= array(); 
	$j=0;
	

	if($maxnum==0)
	{
		WriteErrMsg("<br><li>The import document can not be empty!</li>");
		exit();
	}
	
	$note1=explode("=",$note[0]);
	if($projecttxt[0]!=$note1[0])
	{
		WriteErrMsg("<br><li>  Missing label in the imported file[".$projecttxt[0]."],Please modify the import file!</li>");
		exit();
	}

	for($i=0;$i<$maxnum;$i++)
	{
		$note1=explode("=",$note[$i]);
		
		if(trim($note1[0])!="")
		{
			$note1=getfieldtxt ($note1,$projecttxt,$projectdec,$projecttype,$projectfield);
			//echo $note1[0]."<br>";
			$fieldtxt[$j]=$note1[0];
			$len=strlen(trim($note1[1]));
			if($len>=2)
				$note1[1]=substr($note1[1],1,($len-2)) ;
			
			$fieldvalues[$j]=$note1[1];
			if($note1[2]==false)
			{
				echo "Import data error!?reason?".$projectdec[$j]."Data Format error?";
				exit();
			}
			$j++;
		}
	}
	
	$query=$datadb->query("SELECT max(orderid) FROM ".$tablepre."chanpin where projectid='$classid'");
	if($row=$datadb->fetch_array($query))
		$orderid=$row[0]+1;
	else
		$orderid=1;

	if(trim($fieldvalues[0])=="")
	{
		WriteErrMsg("<br><li>The labe in this serial not be empty!</li>");
		exit();
	}
	$query=$datadb->query("SELECT id from ".$tablepre."chanpin  where projectid=$classid and file1='".trim($fieldvalues[0])."' ");
		$row=$datadb->fetch_array($query);
		if($row[0]>0)
			WriteErrMsg("<br><li>The label already exist in this serial, please change a new one</li>");
		else
		{
		
	$length=count($fieldtxt);
	$updatetime=date("Y-m-d H:i:s");
	
	$sql="insert into  ".$tablepre."chanpin (orderid,projectid,mubanid,chanpin,updatetime";
	for($i=0;$i<$length;$i++)
	{
		if(trim($fieldtxt[$i])!="")
			$sql=$sql.",".trim($fieldtxt[$i]);
	}
	$sql=$sql.") VALUES ('$orderid','$classid','0','$chanpin','$updatetime'";
	for($i=0;$i<$length;$i++)
	{
		if(trim($fieldtxt[$i])!="")
			$sql=$sql.",'".trim($fieldvalues[$i])."'";
	}
	$sql=$sql.")";
	
	//echo $sql;
	$query=$datadb->query($sql);
	if($query>0)
				WriteSuccessMsg("<br><li>Add success!</li>","{$URL}?job=product&action=addupload&classid=$classid");
			else
				WriteErrMsg("<br><li>Add failure?data formats wrong. If this issue, please contact the developers!</li>");

	
	//echo $sql."<br>";
	//,UpdateTime,ShowIndex) VALUES ('$ClassId','$Title','$Content','$UpdateTime','$ShowIndex')");
	
	}
	
	
	//$query=$db->query("INSERT INTO ".$tablepre."content (ClassId,title,content,UpdateTime,ShowIndex) VALUES ('$ClassId','$Title','$Content','$UpdateTime','$ShowIndex')");
	
	
	
	//echo "??????!2????".$projectdec[$j]."????????";

}
function getfieldtxt ($note1,$projecttxt,$projectdec,$projecttype,$projectfield)
{
	$field= array(); 
	$length=count($projecttxt);
	$fieldtxt=$note1[0];
	for($i=0;$i<$length;$i++)
	{
		if(trim($fieldtxt)==trim($projecttxt[$i]))
		{
			$field[0]= "file".($i+1);
			break;
		}
	}
	$field[1]=$note1[1];
	$field[2]=true;
	return  $field;
}

?>
