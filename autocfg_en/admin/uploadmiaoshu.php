<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<script src="../jquery-1.4.2.js" type="text/javascript"></script>
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
un-sel {
	background-color:#666666;
}
-->
</style></head>
<SCRIPT language=javascript>
function check() 
{
	var strFileName=document.uploadform.FileName.value;
	if (strFileName=="")
	{
    	alert("Please choice the upload file!");
		document.uploadform.FileName.focus();
    	return false;
  	}
}
</SCRIPT>
<body>
<?php
if (isset($_POST["action"]) && $_POST["action"]=="mingsenupload")
{
	if ($_POST["miaoshu_sel"] == "disable") {
		$attach_name=$_FILES["img1"]['name'];
		$attach_size=$_FILES["img1"]['size'];
		$attachment=$_FILES["img1"]['tmp_name'];
		
		if(!$attachment || $attachment== 'none'){
			showerror('The upload file is empty');
		} elseif(function_exists('is_uploaded_file') && !is_uploaded_file($attachment)){
			showerror('The upload file is empty');
		} elseif(!($attachment && $attachment['error']!=4)){
			showerror('The upload file is empty');
		}
	}
	else {
		$attach_name=trim($_POST['miaoshu_sel']);
		$attach_name.=".txt";
		echo $attach_name;
		$sel_path = "../syscfg/$attach_name";
		if ($fp = fopen($sel_path,'r')) {
			$attach_size = filesize($sel_path);
		}
		else 
			showerror('Open file fail');
			
		//$attachment=$_POST["miaoshu_sel"];
	}
	
	$db_uploadmaxsize='20480000';
	$db_uploadfiletype='txt cfg';
	$attachdir="../uploadfile/miaoshu";
		
	if ($attach_size>$db_uploadmaxsize){
		showerror("File too large!");
	}
	
	$available_type = explode(' ',trim($db_uploadfiletype));
	$attach_ext = substr(strrchr($attach_name,'.'),1);
	$attach_ext=strtolower($attach_ext);
	if($attach_ext == 'php' || empty($attach_ext) || !@in_array($attach_ext,$available_type)){
		showerror('Sorry, You upload the file type system has been prohibited!');
	}
	$randvar=num_rand('15');
	$uploadname=$randvar.'.'.$attach_ext;

	if(!is_dir($attachdir)) {
			@mkdir($attachdir);
			@chmod($attachdir,0777);
		}
		
	$source=$attachdir.'/'.$uploadname;
	$returnfile="../uploadfile/miaoshu";
	$returnfile=$returnfile.'/'.$uploadname;
	
	if (($_POST["miaoshu_sel"] == "disable")) {
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
	}
	else {
		if(@copy($sel_path, $source)){
			chmod($source,0777);
			$attach_saved = 1;
		}elseif(is_readable($sel_path) && $attcontent=readover($sel_path)){
			$attach_saved = 1;
			writeover($source,$attcontent);
			chmod($source,0777);
		}
	}
	
	if($attach_saved == 1){
				echo "<SCRIPT language=javascript>parent.document.myform.miaoshu.value='$returnfile';</script>";
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
<!--
<select name="miaoshu_sel" id="miaoshu_sel">
	<option>1fxs.txt</option>
	<option>1fxsp.txt</option>
	<option>2fxo.txt</option>
	<option>2fxs.txt</option>
	<option>2fxsp.txt</option>
	<option>4fxo.txt</option>
	<option>4fxs.txt</option>
	<option>8fxs.txt</option>
	<option>fxsg.txt</option>
	<option>fx4s4o.txt</option>
	<option>goip.txt</option>
	<option>4goip.txt</option>
	<option>8goip.txt</option>
	<option>16goip.txt</option>
	<option>htm112.txt</option>
	<option>htm222.txt</option>
	<option>htm442.txt</option>
	<option>simbank.txt</option>
	<option>vp102.txt</option>
	<option>vp202.txt</option>
	<option>8201.txt</option>
	<option>ep838.txt</option>
</select>&nbsp;or&nbsp;
-->
<input type="text" name="miaoshu_sel" id="type_select" value="select..." style="color:#003399; width:60px; font-weight:normal">
&nbsp;or&nbsp;&nbsp;
<input type=file name=img1 id="img1" class="img1">&nbsp;&nbsp;|&nbsp;&nbsp;<INPUT TYPE="SUBMIT" value="Upload">
</FORM>

<script>
//first
$(document).ready(function(){
	$("#type_select").hover(function(){
		$(this).css("cursor","pointer");
	});
	$("#type_select").click(function(){
		var $xiala = $(window.parent.document).find("#ul_select");
		if ($xiala.css("display") == "none") {
			var offset = $(window.parent.document).find("#miaoshu").offset();
			var $xiala_left = 219+offset.left;
			var $xiala_top = 18+offset.top;
			$xiala.css({left:$xiala_left,top:$xiala_top});
			$xiala.slideDown("fast");
	}
	else {	
		$xiala.fadeOut("fast");
		}
	});
});

//backgroundColor	
$(document).ready(function(){
	$(window.parent.document).find("#ul_select li").hover(function(){
		$(this).css({backgroundColor:"#CCCCCC", fontSize:"14px"});	
	},function() {
		$(this).css({backgroundColor:"#FFFFFF", fontSize:"12px"});
	});
});

//second
$(document).ready(function(){
	$(window.parent.document).find(".first_li").hover(function(){
		var $id = $(this).attr("id");
		var $id_sub = "ul_select_"+$id;
		var $xiala_sub = $(window.parent.document).find("#"+$id_sub);
		
		var offset_sub = $(this).offset();
		var $xiala_left = offset_sub.left;
		
	    var $set_top = offset_sub.top;	
		var offset_sub2 = $(window.parent.document).find("#ul_select").offset();
		var $set_top2 = offset_sub2.top
		var $xiala_top = $set_top - $set_top2-3;
		
		$xiala_sub.css({left:70,top:$xiala_top});
		$xiala_sub.show();
	},function() {
		var $id = $(this).attr("id");
		var $id_sub = "ul_select_"+$id;
		var $xiala2_sub = $(window.parent.document).find("#"+$id_sub);
		$xiala2_sub.hide();
	});
});

$(document).ready(function(){
	$(window.parent.document).find("#ul_select").hover(function() {
		
	}, function() {
		$(window.parent.document).find("#ul_select").fadeOut("fast");
	});
});


$(document).ready(function(){
	$(window.parent.document).find(".ul_select_sub li").click(function() {
		var $text = $(this).text();
		$("#type_select").val($text);
		$(window.parent.document).find("#ul_select").fadeOut("fast");
	});
	$(window.parent.document).find(".ul_select_sub").mouseover(function() {
		$(this).show();
	});
});


$(document).ready(function(){
	$("#type_select").click(function(){
		$("#type_select").css("color","#003399");
		$("#type_select").val("select...");
		$(".img1").css("color","#CCCCCC");
	});
	$("#img1").click(function() {
		$(".img1").css("color","#000000");
		$("#type_select").css("color","#CCCCCC");
		$("#type_select").val("disable");   
	});
});
</script>
</body>
</html>
