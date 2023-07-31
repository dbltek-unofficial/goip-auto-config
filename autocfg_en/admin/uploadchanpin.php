<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Upload File</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #D6DFF7;
}
-->
</style></head>
<SCRIPT language=javascript>
function check() 
{
	var strFileName=document.uploadform.FileName.value;
	if (strFileName=="")
	{
    	alert("Plesase choice the upload file!");
		document.uploadform.FileName.focus();
    	return false;
  	}
}
</SCRIPT>
<body>
<?php
if ( $_POST["action"]=="mingsenupload")
{
	$attach_name=$_FILES["img1"]['name'];
	$attach_size=$_FILES["img1"]['size'];
	$attachment=$_FILES["img1"]['tmp_name'];
	
	$db_uploadmaxsize='20480000';
	$db_uploadfiletype='txt cfg';
	$attachdir="../uploadfile/chanpin";

	if(!$attachment || $attachment== 'none'){
		showerror('The upload file can not be empty');
	} elseif(function_exists('is_uploaded_file') && !is_uploaded_file($attachment)){
		showerror('The upload file is empty');
	} elseif(!($attachment && $attachment['error']!=4)){
		showerror('The upload file is empty');
	}
	if ($attach_size>$db_uploadmaxsize){
		showerror("File too large！");
	}
	
	$available_type = explode(' ',trim($db_uploadfiletype));
	$attach_ext = substr(strrchr($attach_name,'.'),1);
	$attach_ext=strtolower($attach_ext);
	if($attach_ext == 'php' || empty($attach_ext) || !@in_array($attach_ext,$available_type)){
		showerror('Sorry , You upload the file type system has been prohibited！');
	}
	$randvar=num_rand('15');
	$uploadname=$randvar.'.'.$attach_ext;

	if(!is_dir($attachdir)) {
			@mkdir($attachdir);
			@chmod($attachdir,0777);
		}
		
	$source=$attachdir.'/'.$uploadname;
	$returnfile="../UpLoadFile/chanpin";
	$returnfile=$returnfile.'/'.$uploadname;
	if(function_exists("move_uploaded_file") && @move_uploaded_file($attachment, $source)){
		chmod($source,0777);
		$attach_saved = 1;
	}elseif(@copy($attachment, $source)){
		chmod($source,0777);
		$attach_saved = 1;
	}elseif(is_readable($attachment) && $attcontent=readover($attachment)){
		$attach_saved = 1;
		writeover($source,$attcontent);
		chmod($source,0777);
	}
	if($attach_saved == 1){
				echo "<SCRIPT language=javascript>parent.document.myform.chanpin.value='$returnfile';history.back();</script>";
		exit;
	}
	
   
}

function showerror($msg){
	//@extract($GLOBALS, EXTR_SKIP);
	//require_once GetLang('msg');
	//$lang[$msg] && $msg=$lang[$msg];
	echo "<script>"
		."alert('$msg');"
		."history.back();"
		."window.returnValue = '';"
		."window.close();"
		."</script>";
	exit;
}

function num_rand($lenth){
	mt_srand((double)microtime() * 1000000);
	for($i=0;$i<$lenth;$i++){
		$randval.= mt_rand(0,9);
	}
	$randval=substr(md5($randval),mt_rand(0,32-$lenth),$lenth);
	return $randval;
}
?> 

<FORM  name=uploadform action="<?php echo $PHP_SELF ?>" method="POST" enctype="multipart/form-data">
<INPUT TYPE="HIdDEN"  name="action" value="mingsenupload">
<input type=file name=img1><INPUT TYPE="SUBMIT" value="上 传">
</FORM>
</body>
</html>
