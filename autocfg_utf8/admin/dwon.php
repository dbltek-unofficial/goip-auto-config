<?php
$filename=$_GET["filename"];

	ob_end_clean();
			
	header("Expires: 0");
	if(!$file = @fopen($filename,'r')){
	echo '文件读取出错';
	exit();
	}
$file_name=str_replace("backup/","",$filename);

flock($file,LOCK_SH);
$filesize=filesize($filename);

Header("Content-type: application/octet-stream");
Header("Accept-Ranges: bytes");
Header("Accept-Length: ".$filesize);
Header("Content-Disposition: attachment; filename=" . $file_name);
if($filesize>0)
{
	echo fread($file,$filesize);
}
fclose($file);


	$e=ob_get_contents();
	ob_end_clean();
	
	
	
?>