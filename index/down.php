<?php
error_reporting(0);
define('OK',true);
//以下为数据库连接参数
	$dbhost='localhost';	//database server
	$dbuser='autocfg';		//database username
	$dbpw='autocfg';		//database password
	$dbname='autocfg_en';		//database name

//程序系统投入使用后不能Modify的变量(请不要Modify) 

	$tablepre='ms_';	//表名前缀。非必需，请勿改!
	//echo "update start";
	
	
	
	class DB {
	function query($sql) {
		global $dbhost,$dbuser,$dbpw,$dbname;
		$conn=mysql_connect($dbhost,$dbuser,$dbpw) or die("Conld not connect");
		mysql_select_db($dbname,$conn);
		$result=mysql_query($sql) or die("Bad query: ".mysql_error());
		return $result;
	}

	function fetch_array($query) {
		return mysql_fetch_array($query);
	}
	
	function num_rows($query) {
		return mysql_num_rows($query);
	}

        function updatequery($sql) {

                $result=mysql_query($sql);
                return $result;
        }	
}

$db=new DB;


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
		$chanpindb=$db->fetch_array($db->query("SELECT type,chanpin,chanpin2,id FROM chanpin WHERE SN='".$id."'")); //SN

		$chanpin=$chanpindb['chanpin'];
		$chanpin2=$chanpindb['chanpin2'];
		$chanpin_type=$chanpindb['type'];

		if($chanpin=="")
			$err="false";


if($err=="true")
{
	$values=mysql_fetch_array($db->query("SELECT * FROM $chanpin where SN='".$id."'"), MYSQL_ASSOC);
	if ($chanpin_type=="16goip") {
		$chanpin_a = $chanpin."_a";
		$value_a=mysql_fetch_array($db->query("SELECT * FROM $chanpin_a where SN='".$id."'"), MYSQL_ASSOC);
		$values = array_merge($values,$value_a);
	}
	elseif ($chanpin_type=="32goip") {
		$chanpin_a = $chanpin."_a";
		$chanpin_b = $chanpin."_b";
		$chanpin_c = $chanpin."_c";
		$value_a=mysql_fetch_array($db->query("SELECT * FROM $chanpin_a where SN='".$id."'"), MYSQL_ASSOC);
		$value_b=mysql_fetch_array($db->query("SELECT * FROM $chanpin_b where SN='".$id."'"), MYSQL_ASSOC);
		$value_c=mysql_fetch_array($db->query("SELECT * FROM $chanpin_c where SN='".$id."'"), MYSQL_ASSOC);
		$values = array_merge($values,$value_a,$value_b,$value_c);
	}
	$values2=mysql_fetch_array($db->query("SELECT * FROM $chanpin2 where SN='".$id."'"), MYSQL_ASSOC);
	$flag = 0;
	$somecontent="";
	$i1=0;$i2=0;$i3=0;$i4=0;$i5=0;$i6=0;$i7=0;$i8=0;$i9=0;$i10=0;$i1_1=0;$i1_2=0;
	foreach($values as $name => $value){
		if($name == 'DIAL_PALN')  //fix a bug.
            $name = 'DIAL_PLAN';
			
		//新版cpu判断
		if ($_GET["type"] == "5vt" && $chanpin_type=="8goip") {
			//config by single
			if ($name == "SIP_PHONE_NUMBER") 
				$name = "SIP_CONTACT0_DIAL_DIGITS";
			elseif ($name == "SIP_DISPLAY_NAME")
				$name = "SIP_CONTACT0_DISPLAY_NAME";
			elseif ($name == "SIP_AUTH_ID")
				$name = "SIP_CONTACT0_LOGIN";
			elseif ($name == "SIP_AUTH_PASSWD")
				$name = "SIP_CONTACT0_PASSWD";
			elseif ($name == "SIP_PROXY")
				$name = "SIP_CONTACT0_PROXY";
			elseif ($name == "SIP_REGISTRAR")
				$name = "SIP_CONTACT0_SERVER";
			elseif ($name == "SIP_REGISTER_EXPIRED")
				$name = "SIP_CONTACT0_REGISTER_EXPIRED";
			elseif ($name == "SIP_OUTBOUND_PROXY")
				$name = "SIP_CONTACT0_OUTBOUND_PROXY";
			elseif ($name == "SIP_HOME_DOMAIN")
				$name = "SIP_CONTACT0_HOME_DOMAIN";
			elseif ($name == "SIP_BACKUP_PROXY")
				$name = "SIP_CONTACT0_PROXY";
			elseif ($name == "SIP_BACKUP_REGISTRAR")
				$name = "SIP_CONTACT0_SERVER";
			elseif ($name == "SIP_BACKUP_HOME_DOMAIN")
				$name = "SIP_CONTACT0_HOME_DOMAIN";
			
			//config by line
			if ($name == "SIP_CONTACT".$i1."_DIAL_DIGITS") {
				$i11 = $i1+6;
				$name = "SIP_CONTACT".$i11."_DIAL_DIGITS";
				$i1++;
			}
			elseif ($name == "SIP_CONTACT".$i2."_DISPLAY_NAME") {
				$i22 = $i2+6;
				$name = "SIP_CONTACT".$i22."_DISPLAY_NAME";
				$i2++;
			}
			elseif ($name == "SIP_CONTACT".$i3."_LOGIN") {
				$i33 = $i3+6;
				$name = "SIP_CONTACT".$i33."_LOGIN";
				$i3++;
			}
			elseif ($name == "SIP_CONTACT".$i4."_PASSWD") {
				$i44 = $i4+6;
				$name = "SIP_CONTACT".$i44."_PASSWD";
				$i4++;
			}
			elseif ($name == "SIP_CONTACT".$i5."_GW_PREFIX") {
				$i55 = $i5+6;
				$name = "SIP_CONTACT".$i55."_GW_PREFIX";
				$i5++;
			}
			elseif ($name == "SIP_CONTACT".$i6."_PROXY") {
				$i66 = $i6+6;
				$name = "SIP_CONTACT".$i66."_PROXY";
				$i6++;
			}
			elseif ($name == "SIP_CONTACT".$i7."_SERVER") {
				$i77 = $i7+6;
				$name = "SIP_CONTACT".$i77."_SERVER";
				$i7++;
			}
			elseif ($name == "SIP_CONTACT".$i8."_REGISTER_EXPIRED") {
				$i88 = $i8+6;
				$name = "SIP_CONTACT".$i88."_REGISTER_EXPIRED";
				$i8++;
			}
			elseif ($name == "SIP_CONTACT".$i9."_OUTBOUND_PROXY") {
				$i99 = $i9+6;
				$name = "SIP_CONTACT".$i99."_OUTBOUND_PROXY";
				$i9++;
			}
			elseif ($name == "SIP_CONTACT".$i10."_HOME_DOMAIN") {
				$i101 = $i10+6;
				$name = "SIP_CONTACT".$i101."_HOME_DOMAIN";
				$i10++;
			}
			
			elseif ($name == "SIP_CONTACT".$i1_1."_FORWARD_TYPE") {
				$i1_11 = $i1_1+6;
				$name = "SIP_CONTACT".$i1_11."_FORWARD_TYPE";
				$i1_1++;
			}
			
			elseif ($name == "SIP_CONTACT".$i1_2."_FORWARD_NUMBER") {
				$i1_21 = $i1_2+6;
				$name = "SIP_CONTACT".$i1_21."_FORWARD_NUMBER";
				$i1_2++;
			}
			
			//config by group
			if ($name == "SIP_CONTACT20_DIAL_DIGITS") {
				$name = "SIP_CONTACT2_DIAL_DIGITS";
			}
			elseif ($name == "SIP_CONTACT20_DISPLAY_NAME") {
				$name = "SIP_CONTACT2_DISPLAY_NAME";
			}
			elseif ($name == "SIP_CONTACT20_LOGIN") {
				$name = "SIP_CONTACT2_LOGIN";
			}
			elseif ($name == "SIP_CONTACT20_PASSWD") {
				$name = "SIP_CONTACT2_PASSWD";
			}
			elseif ($name == "SIP_CONTACT20_GW_PREFIX") {
				$name = "SIP_CONTACT2_GW_PREFIX";
			}
			elseif ($name == "SIP_CONTACT20_PROXY") {
				$name = "SIP_CONTACT2_PROXY";
			}
			elseif ($name == "SIP_CONTACT20_SERVER") {
				$name = "SIP_CONTACT2_SERVER";
			}
			elseif ($name == "SIP_CONTACT20_REGISTER_EXPIRED") {
				$name = "SIP_CONTACT2_REGISTER_EXPIRED";
			}
			elseif ($name == "SIP_CONTACT20_OUTBOUND_PROXY") {
				$name = "SIP_CONTACT2_OUTBOUND_PROXY";
			}
			elseif ($name == "SIP_CONTACT20_HOME_DOMAIN") {
				$name = "SIP_CONTACT2_HOME_DOMAIN";
			}
			
			elseif ($name == "SIP_CONTACT21_DIAL_DIGITS") {
				$name = "SIP_CONTACT3_DIAL_DIGITS";
			}
			elseif ($name == "SIP_CONTACT21_DISPLAY_NAME") {
				$name = "SIP_CONTACT3_DISPLAY_NAME";
			}
			elseif ($name == "SIP_CONTACT21_LOGIN") {
				$name = "SIP_CONTACT3_LOGIN";
			}
			elseif ($name == "SIP_CONTACT21_PASSWD") {
				$name = "SIP_CONTACT3_PASSWD";
			}
			elseif ($name == "SIP_CONTACT21_GW_PREFIX") {
				$name = "SIP_CONTACT3_GW_PREFIX";
			}
			elseif ($name == "SIP_CONTACT21_PROXY") {
				$name = "SIP_CONTACT3_PROXY";
			}
			elseif ($name == "SIP_CONTACT21_SERVER") {
				$name = "SIP_CONTACT3_SERVER";
			}
			elseif ($name == "SIP_CONTACT21_REGISTER_EXPIRED") {
				$name = "SIP_CONTACT3_REGISTER_EXPIRED";
			}
			elseif ($name == "SIP_CONTACT21_OUTBOUND_PROXY") {
				$name = "SIP_CONTACT3_OUTBOUND_PROXY";
			}
			elseif ($name == "SIP_CONTACT21_HOME_DOMAIN") {
				$name = "SIP_CONTACT3_HOME_DOMAIN";
			}
			
			elseif ($name == "SIP_CONTACT22_DIAL_DIGITS") {
				$name = "SIP_CONTACT4_DIAL_DIGITS";
			}
			elseif ($name == "SIP_CONTACT22_DISPLAY_NAME") {
				$name = "SIP_CONTACT4_DISPLAY_NAME";
			}
			elseif ($name == "SIP_CONTACT22_LOGIN") {
				$name = "SIP_CONTACT4_LOGIN";
			}
			elseif ($name == "SIP_CONTACT22_PASSWD") {
				$name = "SIP_CONTACT4_PASSWD";
			}
			elseif ($name == "SIP_CONTACT22_GW_PREFIX") {
				$name = "SIP_CONTACT4_GW_PREFIX";
			}
			elseif ($name == "SIP_CONTACT22_PROXY") {
				$name = "SIP_CONTACT4_PROXY";
			}
			elseif ($name == "SIP_CONTACT22_SERVER") {
				$name = "SIP_CONTACT4_SERVER";
			}
			elseif ($name == "SIP_CONTACT22_REGISTER_EXPIRED") {
				$name = "SIP_CONTACT4_REGISTER_EXPIRED";
			}
			elseif ($name == "SIP_CONTACT22_OUTBOUND_PROXY") {
				$name = "SIP_CONTACT4_OUTBOUND_PROXY";
			}
			elseif ($name == "SIP_CONTACT22_HOME_DOMAIN") {
				$name = "SIP_CONTACT4_HOME_DOMAIN";
			}
			
			elseif ($name == "SIP_CONTACT23_DIAL_DIGITS") {
				$name = "SIP_CONTACT5_DIAL_DIGITS";
			}
			elseif ($name == "SIP_CONTACT23_DISPLAY_NAME") {
				$name = "SIP_CONTACT5_DISPLAY_NAME";
			}
			elseif ($name == "SIP_CONTACT23_LOGIN") {
				$name = "SIP_CONTACT5_LOGIN";
			}
			elseif ($name == "SIP_CONTACT23_PASSWD") {
				$name = "SIP_CONTACT5_PASSWD";
			}
			elseif ($name == "SIP_CONTACT23_GW_PREFIX") {
				$name = "SIP_CONTACT5_GW_PREFIX";
			}
			elseif ($name == "SIP_CONTACT23_PROXY") {
				$name = "SIP_CONTACT5_PROXY";
			}
			elseif ($name == "SIP_CONTACT23_SERVER") {
				$name = "SIP_CONTACT5_SERVER";
			}
			elseif ($name == "SIP_CONTACT23_REGISTER_EXPIRED") {
				$name = "SIP_CONTACT5_REGISTER_EXPIRED";
			}
			elseif ($name == "SIP_CONTACT23_OUTBOUND_PROXY") {
				$name = "SIP_CONTACT5_OUTBOUND_PROXY";
			}
			elseif ($name == "SIP_CONTACT23_HOME_DOMAIN") {
				$name = "SIP_CONTACT5_HOME_DOMAIN";
			}
		}
		
		if($flag == 1){
			$somecontent.=$name."=\"".$value."\"\r\n";
		}
		if($name=="USER")
			$flag = 1;
		if($name=="AUTOCFG_KEY"){
			$autocfg_key=$value;
		}
	}
	//echo $somecontent;
	$flag = 0;
	for($i=1;$i<=40;$i++){
		$file="file".$i;
		$arg=explode("=", $values2[$file]);
		if($arg[0] != NULL)
			$somecontent.=$arg[0]."=\"".$arg[1]."\"\r\n";
	}
	$somecontent.="AA=\"\"";
	$file_name=date("YmdHis").$chanpindb['id'].".".$filetype;
}
else
{
	//第一步:初始化种子 
	$seedarray =microtime(); 
	$seedstr =explode(" ",$seedarray,5); 
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
