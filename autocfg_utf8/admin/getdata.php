<?php
function getdateformchanfile($classid,$chanpin)
{

	$tablepre="ms_";
	$datadb=new DB;
	$query=$datadb->query("SELECT miaoshu FROM ".$tablepre."projectclass where classid='$classid'");
	if($row=$datadb->fetch_array($query))
		$path=$row[0];

	if(!$fp = @fopen($path,'r')){
		echo '文件读取出错';
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
		echo '文件读取出错';
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
		WriteErrMsg("<br><li>导入文件不能为空！</li>");
		exit();
	}
	
	$note1=explode("=",$note[0]);
	if($projecttxt[0]!=$note1[0])
	{
		WriteErrMsg("<br><li>导入文件缺少标识[".$projecttxt[0]."],请修改导入文件！</li>");
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
				echo "导入数据出错！（原因：".$projectdec[$j]."的数据格式不对）";
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
		WriteErrMsg("<br><li>该系列标识不是不能为空！</li>");
		exit();
	}
	$query=$datadb->query("SELECT id from ".$tablepre."chanpin  where projectid=$classid and file1='".trim($fieldvalues[0])."' ");
		$row=$datadb->fetch_array($query);
		if($row[0]>0)
			WriteErrMsg("<br><li>该系列已经存在此标识, 请换一个标识</li>");
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
				WriteSuccessMsg("<br><li>添加成功！</li>","{$URL}?job=product&action=addupload&classid=$classid");
			else
				WriteErrMsg("<br><li>添加失败，数据格式不对。若不是这个问题，请联系开发人员！</li>");

	
	//echo $sql."<br>";
	//,UpdateTime,ShowIndex) VALUES ('$ClassId','$Title','$Content','$UpdateTime','$ShowIndex')");
	
	}
	
	
	//$query=$db->query("INSERT INTO ".$tablepre."content (ClassId,title,content,UpdateTime,ShowIndex) VALUES ('$ClassId','$Title','$Content','$UpdateTime','$ShowIndex')");
	
	
	
	//echo "导入数据出错！2（原因：".$projectdec[$j]."的数据格式不对）";

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
