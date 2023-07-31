<?php
define('OK',true);
require_once('../inc/conn.inc.php');
require_once('../inc/conn.php');


if(isset($_GET['file']))
{
	$file=$_GET['file'];
	$filelen=strlen($file);
	$ext=substr($file, $filelen - 4);
	if($ext==".cfg")$filetype="cfg";
	else $filetype="txt";
	$id=substr($file, 0, $filelen - 4);
}

if(isset($_GET['filetype']))
	$filetype=$_GET['filetype'];
	if($filetype!="txt")
		$filetype="cfg";
else
	$filetype="txt";
$err="true";

if(isset($_GET['id']))
{
	$id=$_GET['id'];
}

		$chanpindb=$db->fetch_array($db->query("SELECT chanpin,chanpin2,id FROM chanpin WHERE SN='".$id."'")); //SN

		$chanpin=$chanpindb['chanpin'];
		$chanpin2=$chanpindb['chanpin2'];	

		if($chanpin=="")
			$err="false";


if($err=="true")
{
	$values=mysql_fetch_array($db->query("SELECT * FROM $chanpin where SN='".$id."'"), MYSQL_ASSOC);
	$values2=mysql_fetch_array($db->query("SELECT * FROM $chanpin2 where SN='".$id."'"), MYSQL_ASSOC);

	$flag = 0;
	$somecontent="";	
	for($i=1;$i<=40;$i++){
		$file="file".$i;
		$arg=explode("=", $values2[$file]);
		if($arg[0] != NULL){
			if(!in_array($arg[0], $sys_name)){
				$somecontent.=$arg[0]."=\"".$arg[1]."\"\r\n";
				$sys_name[]=$arg[0];
			}
		}
	}
	$flag = 0;
	foreach($values as $name => $value){
		if($name == 'DIAL_PALN')  //fix a bug.
                        $name = 'DIAL_PLAN';
		if($flag == 1){
			if(!in_array($name, $sys_name)) //去除重复的
				$somecontent.=$name."=\"".$value."\"\r\n";
		}
		if($name=="USER")
			$flag = 1;
		if($name=="AUTOCFG_KEY"){
			$autocfg_key=$value;
		}
	}
	//echo $somecontent;
/*
	$flag = 0;
	for($i=1;$i<=40;$i++){
		$file="file".$i;
		$arg=explode("=", $values2[$file]);
		if($arg[0] != NULL)
			$somecontent.=$arg[0]."=\"".$arg[1]."\"\r\n";
	}
*/
	$somecontent.="AA=\"\"";
	$file_name=date("YmdHis").$chanpindb['id'].".".$filetype;
}
else
{
	//第一步:初始化种子 
	$seedarray =microtime(); 
	$seedstr =split(" ",$seedarray,5); 
	$seed =$seedstr[0]*10000; 
	//第二步:使用种子初始化随机数发生器 
	srand($seed); 
	//第三步:生成指定范围内的随机数 
	$random =rand(10,40);
	$file_name=date("YmdHis").$random.".".$filetype;
	$somecontent="";
}
//echo $somecontent;
/*
$filename="../uploadfile/file/".$file_name;
//$somecontent = "添加这些文字到文件\r\n"; 
	
	// 在这个例子里，我们将使用添加模式打开$filename， 
	// 因此，文件指针将会在文件的开头， 
	// 那就是当我们使用fwrite()的时候，$somecontent将要写入的地方。 
if (!$handle = fopen($filename, 'w')) { 
	print "Can not open file $filename"; 
	exit; 
} 

if($err=="true")
{
	// 将$somecontent写入到我们打开的文件中。 
	if (!fwrite($handle, $somecontent)) { 
		print "Can not write file $filename"; 
		exit; 
	} 
}
fclose($handle); 

if(!$file = @fopen($filename,'r')){
	echo 'Can not read file';
	exit();
}
flock($file,LOCK_SH);

$filesize=filesize($filename);
*/

function Encrypt($key, $pt) {
	if($key=="")
		return $pt;
        $s = array();
        for ($i=0; $i<256; $i++) {
                $s[$i] = $i;
        }

        $j = 0;
        $key_len = strlen($key);
        for ($i=0; $i<256; $i++) {
                $j = ($j + $s[$i] + ord($key[$i % $key_len])) % 256;
                //swap
                $x = $s[$i];
                $s[$i] = $s[$j];
                $s[$j] = $x;
                //if( ++$k >= $key_len ) $k=0;
        }
        $i = 0;
        $j = 0;
        $ct = '';
        $data_len = strlen($pt);
        for ($y=0; $y< $data_len; $y++) {
                $i = ($i + 1) % 256;
                $j = ($j + $s[$i]) % 256;
                //swap
                $x = $s[$i];
                $s[$i] = $s[$j];
                $s[$j] = $x;
                $ct .= $pt[$y] ^ chr($s[($s[$i] + $s[$j]) % 256]);
        }
        return $ct;
}

$filesize=strlen($somecontent);
Header("Content-type: application/octet-stream");
Header("Accept-Ranges: bytes");
Header("Accept-Length: ".$filesize);
Header("Content-Disposition: attachment; filename=" . $file_name);
if($filesize>0)
{
	echo Encrypt($autocfg_key, $somecontent);
	//echo fread($file,$filesize);
}
//fclose($file);


?>
