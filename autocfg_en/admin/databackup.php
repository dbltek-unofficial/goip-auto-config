<?php
session_start();
if($_SESSION['autocfg_adminname']!="admin") {
	//require_once template('login');
	die("need admin permissions!");
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Column management</title>
<meta name="Author" content="Gaby_chen">
<link href="Style.css" rel="stylesheet" type="text/css">
</head>
<body leftmargin="2" topmargin="0" marginwIdth="0" marginheight="0">
<table wIdth="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="border">
  <tr class="topbg"> 
    <td height="22" colspan="2" align="center"><strong>Data Manage</strong></td>
  </tr>
  <tr class="tdbg"> 
    <td wIdth="70" height="30"><strong>Navigation Manage:</strong></td>
    <td height="30"><a href="databackup.php"  target=main> Data Backup </a> | <a href="datarestore.php" target=main>Data Import</a></td>
  </tr>
</table>
<?php
require_once('../inc/conn.inc.php');
global $mysqlhost, $mysqluser, $mysqlpwd, $mysqldb;
$mysqlhost=$dbhost; //host name
$mysqluser=$dbuser;              //login name
$mysqlpwd=$dbpw;              //password
$mysqldb=$dbname;        //name of database

require_once("datamydb.php");
$d=new datadb($mysqlhost,$mysqluser,$mysqlpwd,$mysqldb);
/*--------------界面--------------*/
if(!$_POST['act']){
/*----------------------*/
?>

<br> 
<table wIdth="100%" border="0" align="center" cellpadding="0" cellspacing="1" class="border">
  <tr class="title">
    <td height="22"><strong> Notice: </strong></td>
  </tr>
  <tr class="tdbg" onmouseout="this.style.backgroundColor=''" onmouseover="this.style.backgroundColor='#BFDFFF'">
    <td valign="middle"><ul>
        <li>The backup server directory is backup
        <li>For large data tables, it is strongly recommended that the use of sub-volume backup
        <li>Only by choosing a backup server to be able to use backup functional sub-volumes </li>
   	 </ul>
	</td>
  </tr>
</table>
<br>
<form name="form1" method="post" action="databackup.php">
<table wIdth="100%" border="0" align="center" cellpadding="0" cellspacing="1" class="border">
  <tr class="title"> 
    <td height="22" colspan="2" align="center"><strong>Data Backup </strong></td>
  </tr>
  <tr class="tdbg" onmouseout="this.style.backgroundColor=''" onmouseover="this.style.backgroundColor='#BFDFFF'"> 
    <td colspan="2">Backup mode</td>
  </tr>
  <tr class="tdbg" onmouseout="this.style.backgroundColor=''" onmouseover="this.style.backgroundColor='#BFDFFF'"> 
    <td><input name="bfzl" type="radio" value="quanbubiao" checked>
Backup all data</td>
  <td>Backup all data to a backup data sheet paper</td>
  </tr>
   <tr class="tdbg" onmouseout="this.style.backgroundColor=''" onmouseover="this.style.backgroundColor='#BFDFFF'"> 
    <td><input type="radio" name="bfzl" value="danbiao">Leaflets Sheet Data Backup 
        <select name="tablename"><option value="">Please choose</option>
          <?php
		$d->query("show table status from $mysqldb");
		while($d->nextrecord()){
		echo "<option value='".$d->f('Name')."'>".$d->f('Name')."</option>";}
		?>
        </select></td>
  <td>Backup selected data to a separate data sheet paper backup</td>
  </tr>
   <tr class="tdbg" onmouseout="this.style.backgroundColor=''" onmouseover="this.style.backgroundColor='#BFDFFF'"> 
    <td colspan="2">Separating the use of backup</td>
  </tr>
   <tr class="tdbg" onmouseout="this.style.backgroundColor=''" onmouseover="this.style.backgroundColor='#BFDFFF'"> 
    <td colspan="2"><input type="checkbox" name="fenjuan" value="yes">
Volume backup
  <input name="filesize" type="text" size="10">
  K</td>
  </tr>
   <tr class="tdbg" onmouseout="this.style.backgroundColor=''" onmouseover="this.style.backgroundColor='#BFDFFF'"> 
    <td colspan="2">Choice of target locations</td>
  </tr>
   <tr class="tdbg" onmouseout="this.style.backgroundColor=''" onmouseover="this.style.backgroundColor='#BFDFFF'"> 
    <td><input type="radio" name="weizhi" value="server" checked>
      Backup to serve</td>
  <td><input type="radio" name="weizhi" value="localpc">
Backup local</td>
  </tr>
   <tr align="center" class="tdbg" onmouseover="this.style.backgroundColor='#BFDFFF'" onmouseout="this.style.backgroundColor=''"> 
    <td colspan="2"><input type="submit" name="act" value="Backup"></td>
  </tr>
</table> 
</form>

<?php
/*-------------界面结束-------------*/}/*---------------------------------*/
/*----*/else{/*--------------主程序-----------------------------------------*/
if($_POST['weizhi']=="localpc"&&$_POST['fenjuan']=='yes')
	{$msgs[]="Only by choosing a backup server to be able to use backup functional sub-volumes ";
show_msg($msgs); pageend();}
if($_POST['fenjuan']=="yes"&&!$_POST['filesize'])
	{$msgs[]="You opted for a backup volumes, but the size of completing the sub-volumes";
show_msg($msgs); pageend();}
if($_POST['weizhi']=="server"&&!writeable("./backup"))
	{$msgs[]="Backup document repository list '. /backup 'Not write, please amend the list of attributes";
show_msg($msgs); pageend();}

/*----------备份全部表-------------*/if($_POST['bfzl']=="quanbubiao"){/*----*/
/*----不分卷*/if(!$_POST['fenjuan']){/*--------------------------------*/
if(!$tables=$d->query("show table status from $mysqldb"))
	{$msgs[]="Reading database error"; show_msg($msgs); pageend();}
$sql="autocfg_en v1.1\n";
while($d->nextrecord($tables))
	{
	$table=$d->f("Name");
	$sql.=make_header($table);
	$d->query("select * from $table");
	$num_fields=$d->nf();
	while($d->nextrecord())
	{$sql.=make_record($table,$num_fields);}
	}
$filename=date("Ymdhis",time())."_all.sql";
if($_POST['weizhi']=="localpc") down_file($sql,$filename);
elseif($_POST['weizhi']=="server")
	{if(write_file($sql,$filename))
$msgs[]="Complete data backup all data sheets, documents generated Backup './backup/$filename'";
	else $msgs[]="Backup all data tables failure";
	show_msg($msgs);
	pageend();
	}
/*-----------------不要卷结束*/}/*-----------------------*/
/*-----------------分卷*/else{/*-------------------------*/
if(!$_POST['filesize'])
	{$msgs[]="Please fill volumes size document backup"; show_msg($msgs);pageend();}
if(!$tables=$d->query("show table status from $mysqldb"))
	{$msgs[]="Reading database error"; show_msg($msgs); pageend();}
$sql="autocfg_en v1.1\n"; $p=1;
$filename=date("Ymdhis",time())."_all";
while($d->nextrecord($tables))
{
	$table=$d->f("Name");
	$sql.=make_header($table);
	$d->query("select * from $table");
	$num_fields=$d->nf();
	while($d->nextrecord())
	{$sql.=make_record($table,$num_fields);
	if(strlen($sql)>=$_POST['filesize']*1000){
			$filename.=("_v".$p.".sql");
			if(write_file($sql,$filename))
			$msgs[]="All data sheets - Vol.-".$p."Complete data backup, backup document generation'./backup/$filename'";
			else $msgs[]="Backup Table-".$_POST['tablename']."-error";
			$p++;
			$filename=date("Ymdhis",time())."_all";
			$sql="autocfg_en v1.1\n";}
	}
}
if($sql!=""){$filename.=("_v".$p.".sql");		
if(write_file($sql,$filename))
$msgs[]="All data sheets - Vol-".$p."-Complete data backup, backup document generation'./backup/$filename'";}
show_msg($msgs);
/*---------------------分卷结束*/}/*--------------------------------------*/
/*--------备份全部表结束*/}/*---------------------------------------------*/

/*--------备份单表------*/elseif($_POST['bfzl']=="danbiao"){/*------------*/
if(!$_POST['tablename'])
	{$msgs[]="Please choose to backup the data table"; show_msg($msgs); pageend();}
/*--------不分卷*/if(!$_POST['fenjuan']){/*-------------------------------*/
$sql="autocfg_en v1.1\n";
$sql.=make_header($_POST['tablename']);
$d->query("select * from ".$_POST['tablename']);
$num_fields=$d->nf();
while($d->nextrecord())
	{$sql.=make_record($_POST['tablename'],$num_fields);}
$filename=date("Ymdhis",time())."_".$_POST['tablename'].".sql";
if($_POST['weizhi']=="localpc") down_file($sql,$filename);
elseif($_POST['weizhi']=="server")
	{if(write_file($sql,$filename))
$msgs[]="table-".$_POST['tablename']."-Complete data backup, backup document generation'./backup/$filename'";
	else $msgs[]="Backup Table-".$_POST['tablename']."-error";
	show_msg($msgs);
	pageend();
	}
/*----------------不要卷结束*/}/*------------------------------------*/
/*----------------分卷*/else{/*--------------------------------------*/
if(!$_POST['filesize'])
	{$msgs[]="Please fill volumes size document backup "; show_msg($msgs);pageend();}
$sql="autocfg_en v1.1\n";
$sql.=make_header($_POST['tablename']); $p=1; 
	$filename=date("Ymdhis",time())."_".$_POST['tablename'];
	$d->query("select * from ".$_POST['tablename']);
	$num_fields=$d->nf();
	while ($d->nextrecord()) 
	{	
		$sql.=make_record($_POST['tablename'],$num_fields);
	   if(strlen($sql)>=$_POST['filesize']*1000){
			$filename.=("_v".$p.".sql");
			if(write_file($sql,$filename))
			$msgs[]="table-".$_POST['tablename']."-Vol-".$p."-Complete data backup, backup document generation'./backup/$filename'";
			else $msgs[]="Backup Table-".$_POST['tablename']."-error";
			$p++;
			$filename=date("Ymdhis",time())."_".$_POST['tablename'];
			$sql="autocfg_en v1.1\n";}
	}
if($sql!=""){$filename.=("_v".$p.".sql");		
if(write_file($sql,$filename))
$msgs[]="table-".$_POST['tablename']."-Vol-".$p."-Complete data backup, backup document generation'./backup/$filename'";}
show_msg($msgs);
/*----------分卷结束*/}/*--------------------------------------------------*/
/*----------备份单表结束*/}/*----------------------------------------------*/

/*---*/}/*-------------主程序结束------------------------------------------*/

function write_file($sql,$filename)
{
$re=true;
if(!@$fp=fopen("./backup/".$filename,"w+")) {$re=false; echo "failed to open target file";}
if(!@fwrite($fp,$sql)) {$re=false; echo "failed to write file";}
if(!@fclose($fp)) {$re=false; echo "failed to close target file";}
return $re;
}



function down_file($sql,$filename)
{

	if(write_file($sql,$filename)){
		echo "<script language=JavaScript>location.href='dwon.php?filename=backup/".$filename."';</script>";
	}

	//Header("Location: sl520.com"); 
	/*
	ob_end_clean();
	header("Content-Encoding: none");
	header("Content-Type: ".(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') ? 'application/octetstream' : 'application/octet-stream'));
			
	header("Content-Disposition: ".(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') ? 'inline; ' : 'attachment; ')."filename=".$filename);
			
	header("Content-Length: ".strlen($sql));
	header("Pragma: no-cache");
			
	header("Expires: 0");
	echo $sql;
	$e=ob_get_contents();
	ob_end_clean();
	*/
}

function writeable($dir)
{
	
	if(!is_dir($dir)) {
	@mkdir($dir, 0777);
	}
	
	if(is_dir($dir)) 
	{
	
	if($fp = @fopen("$dir/test.test", 'w'))
		{
@fclose($fp);
	@unlink("$dir/test.test");
	$writeable = 1;
} 
	else {
$writeable = 0;
	}
	
}
	
	return $writeable;

}

function make_header($table)
{global $d;
$sql="DROP TABLE IF EXISTS ".$table."\n";
$d->query("show create table ".$table);
$d->nextrecord();
$tmp=preg_replace("/\n/","",$d->f("Create Table"));
$sql.=$tmp."\n";
return $sql;
}

function make_record($table,$num_fields)
{global $d;
$comma="";
$sql .= "INSERT INTO ".$table." VALUES(";
for($i = 0; $i < $num_fields; $i++) 
{$sql .= ($comma."'".mysql_escape_string($d->record[$i])."'"); $comma = ",";}
$sql .= ")\n";
return $sql;
}

function show_msg($msgs)
{
	$strErr="<html><head><title>Error Information</title><meta http-equiv='Content-Type' content='text/html; charset=ISO-8859-1'>" ;
	$strErr=$strErr."<link href='style.css' rel='stylesheet' type='text/css'></head><body>" ;
	$strErr=$strErr."<br><br><table cellpadding=2 cellspacing=1 border=0 wIdth=400 class='border' align=center>"; 
	$strErr=$strErr."  <tr align='center'><td height='22' class='title'><strong>Info</strong></td></tr>" ;
	$strErr=$strErr."  <tr><td height='100' class='tdbg' valign='top'><b>Notice:</b><br><ul>";
	while (list($k,$v)=each($msgs))
	$strErr=$strErr."<li>".$v."</li>";
	$strErr=$strErr."</ul></td></tr>" ;
	$strErr=$strErr."  <tr align='center'><td class='tdbg'><a href=javascript:history.back();>&lt;&lt; Return</a></td></tr>" ;
	$strErr=$strErr."</table>" ;
	$strErr=$strErr."</body></html>" ;
	echo $strErr;
	exit;
}


function pageend()
{
exit();
}
?>

<br><br>
</body> 
</html> 
