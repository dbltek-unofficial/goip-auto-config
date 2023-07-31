<?php
!defined('OK') && exit('ForbIdden');

$statu="";


if(isset($_GET['action'])) {
	$action=$_GET['action'];
	if(isset($_GET['classid'])) {
		$classid=$_GET['classid'];
	}
	if($action=="modify") {
		$statu="modify";
		$query=$db->query("SELECT classname,orderid,miaoshu FROM ".$tablepre."projectclass WHERE classid=$classid");
		if($row=$db->fetch_array($query)){	
			$classname=$row[0];
			$orderid=$row[1];
			$miaoshu=$row[2];
		}
		
	} elseif($action=="add") {
		$statu="add";
		$query=$db->query("SELECT MAX(orderid) FROM ".$tablepre."projectclass");
		if($row=$db->fetch_array($query))
			$orderid=$row[0]+1;
		else
			$orderid=1;
	} elseif($action=="saveadd") {
		$classname=$_POST['classname'];
		$orderid=$_POST['orderid'];
		$miaoshu=$_POST['miaoshu'];
		$ErrMsg="";
		if(empty($classname))
			$ErrMsg ='<br><li>Serial name can not be empty!</li>';
		if(empty($orderid))
			$ErrMsg=$ErrMsg."<br><li>型号排序不能为空且为数字</li>";
		if(empty($miaoshu))
			$ErrMsg=$ErrMsg."<br><li>型号配置项定制文件不能为空</li>";
		if($ErrMsg!="")
		{
				//WriteErrMsg($ErrMsg);
				echo $ErrMsg;
		}
				
			else{
				$query=$db->query("SELECT classid FROM ".$tablepre."projectclass WHERE classname='$classname' ");
				$rs=$db->fetch_array($query);

				if(empty($rs[0])){
					//从文件读入数据
					$value = fillfieldvalue($miaoshu);
					//print_r($value[0]);
					//print_r($value[0][0]);
					if($value[2][0]=='FXSPORT'){
						$fxsport=$value[2][1];
						$fxoport=$value[3][1];
					}
					else {
						$fxsport=0;
						$fxoport=0;
					}
					$query=$db->query("INSERT INTO ".$tablepre."projectclass (classname,orderid,miaoshu,type, TELPORT,FXSPORT, FXOPORT, muban,muban2,chanpin,chanpin2) VALUES ('$classname','$orderid','$miaoshu', '".$value[0][1]."', ".$value[1][1].",$fxsport, $fxsport, '".$classname."_muban','".$classname."_muban2','".$classname."_chanpin','".$classname."_chanpin2')");
					//由文件的内容生成muban和chanpin表， 并在muban表中建立一行数据（原始摸板）					 

					$query=$db->query("SELECT * FROM ".$tablepre."projectclass WHERE classname='$classname' ");
					$rs1=$db->fetch_array($query);
					
					$type = $value[0][1];
					$telport = $value[1][1];
					
					//16goip由于参数很多，需要建立两个表
					if ($type == "16goip" && $telport == "16") {
						//*建立muban表
						$db->query("drop table if exists ".$classname."_muban");
						$db->query("drop table if exists ".$classname."_muban_a");
						$sql = "CREATE TABLE ".$classname."_muban (
							  `id` int(10) unsigned NOT NULL auto_increment,
							  `title` varchar(80) NOT NULL default '',
							  `classid` int(11) NOT NULL default '0',
							  `orderid` int(11) NOT NULL default '0',
							  `muban` varchar(80) NOT NULL default '',
							  `AUTOCFG_KEY` varchar(80) NOT NULL default '',";
					    for($i=1;$i<992;$i++)
							$sql .= $value[$i][0]." varchar(60) NOT NULL default '',";
							$sql .= "PRIMARY KEY  (id)
									) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;";
									
					    $db->query($sql);
					   
					    $sql2 = "CREATE TABLE ".$classname."_muban_a (
							  `id` int(10) unsigned NOT NULL auto_increment,
							  `title` varchar(80) NOT NULL default '',
							  `classid` int(11) NOT NULL default '0',
							  `orderid` int(11) NOT NULL default '0',
							  `muban` varchar(80) NOT NULL default '',
							  `AUTOCFG_KEY` varchar(80) NOT NULL default '',";
					    for($j=992;$j<count($value);$j++)
					   	   $sql2 .= $value[$j][0]." varchar(30) NOT NULL default '',";
					    $sql2 .= "PRIMARY KEY  (id)
									) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;";
					    $db->query($sql2);
					   
					    //*插入初始摸板
					    $sql = "insert into ".$classname."_muban (title,muban,classid, orderid";
						for($i=1;$i<992;$i++)
							$sql .= ", ".$value[$i][0];
						$sql .= ") values ( '$classname','$classname',".$rs1["classid"].", 1";
						for($i=1;$i<992;$i++)
							$sql .= ", '".$value[$i][1]."'";
						$sql .= ")";

						//echo "\n".$sql;
						$db->query($sql);
                        $sendsiddb=$db->fetch_array($db->query("SELECT LAST_INSERT_ID()"));
                        $sendid=$sendsiddb[0];
						
						$sql2 = "insert into ".$classname."_muban_a (title,muban,classid, orderid";
						for($j=992;$j<count($value);$j++)
							$sql2 .= ", ".$value[$j][0];
						$sql2 .= ") values ( '$classname','$classname',".$rs1["classid"].", 1";
						for($j=992;$j<count($value);$j++)
							 $sql2 .= ", '".$value[$j][1]."'";
					    $sql2 .= ")";
						$db->query($sql2);

                        sscanf($_SERVER[REQUEST_URI], "/%[^/]/", $path);
                        $db->query("UPDATE ".$classname."_muban set AUTOCFG=1, AUTOCFG_SERVER='http://".$_SERVER[SERVER_NAME]."/".$path."/index/down.php?file=' where id=$sendid");
						
						//*建立chanpin表
						$db->query("drop table if exists ".$classname."_chanpin");
						$db->query("drop table if exists ".$classname."_chanpin_a");
						$sql = "CREATE TABLE ".$classname."_chanpin (
 							   `chanpinid` int(10) unsigned NOT NULL auto_increment,
							   `classid` int(11) NOT NULL default '0',
							   `classname` varchar(80) NOT NULL default '',
							   `orderid` int(11) NOT NULL default '0',
							   `updatetime` datetime NOT NULL default '0000-00-00 00:00:00',
							    TELPORT int(1) NOT NULL default '0',
							    SN varchar(80) NOT NULL default '',
							   `AUTOCFG_KEY` varchar(80) NOT NULL default '',
 							    USER varchar(80) NOT NULL default '',";
  					for($i=2;$i<992;$i++) //
						$sql .= $value[$i][0]." varchar(60) NOT NULL default '',";
					$sql .= "PRIMARY KEY  (chanpinid)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;";
					$db->query($sql);
					
					 $sql2 = "CREATE TABLE ".$classname."_chanpin_a (
 							   `chanpinid` int(10) unsigned NOT NULL auto_increment,
							   `classid` int(11) NOT NULL default '0',
							   `classname` varchar(80) NOT NULL default '',
							   `orderid` int(11) NOT NULL default '0',
							   `updatetime` datetime NOT NULL default '0000-00-00 00:00:00',
							    TELPORT int(1) NOT NULL default '0',
							    SN varchar(80) NOT NULL default '',
							   `AUTOCFG_KEY` varchar(80) NOT NULL default '',
 							    USER varchar(80) NOT NULL default '',";
					    for($j=992;$j<count($value);$j++)
					   	   $sql2 .= $value[$j][0]." varchar(30) NOT NULL default '',";
					    $sql2 .= "PRIMARY KEY  (chanpinid)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;";
					    $db->query($sql2);
					}
					
					
					//32goip由于参数很多，需要建立4个表
					elseif ($type == "32goip" && $telport == "32") {
						//*建立muban表
						//表1
						$db->query("drop table if exists ".$classname."_muban");
						$db->query("drop table if exists ".$classname."_muban_a");
						$db->query("drop table if exists ".$classname."_muban_b");
						$db->query("drop table if exists ".$classname."_muban_c");
						$sql = "CREATE TABLE ".$classname."_muban (
							  `id` int(10) unsigned NOT NULL auto_increment,
							  `title` varchar(80) NOT NULL default '',
							  `classid` int(11) NOT NULL default '0',
							  `orderid` int(11) NOT NULL default '0',
							  `muban` varchar(80) NOT NULL default '',
							  `AUTOCFG_KEY` varchar(80) NOT NULL default '',";
					    for($i=1;$i<874;$i++)
							$sql .= $value[$i][0]." varchar(60) NOT NULL default '',";
							$sql .= "PRIMARY KEY  (id)
									) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;";
									
					    $db->query($sql);
						
						//表2
						 $sql2 = "CREATE TABLE ".$classname."_muban_a (
							  `id` int(10) unsigned NOT NULL auto_increment,
							  `title` varchar(80) NOT NULL default '',
							  `classid` int(11) NOT NULL default '0',
							  `orderid` int(11) NOT NULL default '0',
							  `muban` varchar(80) NOT NULL default '',
							  `AUTOCFG_KEY` varchar(80) NOT NULL default '',";
					    for($j=874;$j<1674;$j++)
					   	   $sql2 .= $value[$j][0]." varchar(30) NOT NULL default '',";
					    $sql2 .= "PRIMARY KEY  (id)
									) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;";
					    $db->query($sql2);
						
						//表3
						$sql3 = "CREATE TABLE ".$classname."_muban_b (
							  `id` int(10) unsigned NOT NULL auto_increment,
							  `title` varchar(80) NOT NULL default '',
							  `classid` int(11) NOT NULL default '0',
							  `orderid` int(11) NOT NULL default '0',
							  `muban` varchar(80) NOT NULL default '',
							  `AUTOCFG_KEY` varchar(80) NOT NULL default '',";
					    for($j=1674;$j<2256;$j++)
					   	   $sql3 .= $value[$j][0]." varchar(60) NOT NULL default '',";
					    $sql3 .= "PRIMARY KEY  (id)
									) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;";
					    $db->query($sql3);
						
						//表4
						$sql4 = "CREATE TABLE ".$classname."_muban_c (
							  `id` int(10) unsigned NOT NULL auto_increment,
							  `title` varchar(80) NOT NULL default '',
							  `classid` int(11) NOT NULL default '0',
							  `orderid` int(11) NOT NULL default '0',
							  `muban` varchar(80) NOT NULL default '',
							  `AUTOCFG_KEY` varchar(80) NOT NULL default '',";
					    for($j=2256;$j<count($value);$j++)
					   	   $sql4 .= $value[$j][0]." varchar(30) NOT NULL default '',";
					    $sql4 .= "PRIMARY KEY  (id)
									) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;";
					    $db->query($sql4);
						
						 //*插入初始摸板
					    $sql = "insert into ".$classname."_muban (title,muban,classid, orderid";
						for($i=1;$i<874;$i++)
							$sql .= ", ".$value[$i][0];
						$sql .= ") values ( '$classname','$classname',".$rs1["classid"].", 1";
						for($i=1;$i<874;$i++)
							$sql .= ", '".$value[$i][1]."'";
						$sql .= ")";
						
						$db->query($sql);
                        $sendsiddb=$db->fetch_array($db->query("SELECT LAST_INSERT_ID()"));
                        $sendid=$sendsiddb[0];
						
						
						$sql2 = "insert into ".$classname."_muban_a (title,muban,classid, orderid";
						for($j=874;$j<1674;$j++)
							$sql2 .= ", ".$value[$j][0];
						$sql2 .= ") values ( '$classname','$classname',".$rs1["classid"].", 1";
						for($j=874;$j<1674;$j++)
							 $sql2 .= ", '".$value[$j][1]."'";
					    $sql2 .= ")";
						$db->query($sql2);
						
						
						$sql3 = "insert into ".$classname."_muban_b (title,muban,classid, orderid";
						for($j=1674;$j<2256;$j++)
							$sql3 .= ", ".$value[$j][0];
						$sql3 .= ") values ( '$classname','$classname',".$rs1["classid"].", 1";
						for($j=1674;$j<2256;$j++)
							 $sql3 .= ", '".$value[$j][1]."'";
					    $sql3 .= ")";
						$db->query($sql3);
						
						
						$sql4 = "insert into ".$classname."_muban_c (title,muban,classid, orderid";
						for($j=2256;$j<count($value);$j++)
							$sql4 .= ", ".$value[$j][0];
						$sql4 .= ") values ( '$classname','$classname',".$rs1["classid"].", 1";
						for($j=2256;$j<count($value);$j++)
							 $sql4 .= ", '".$value[$j][1]."'";
					    $sql4 .= ")";
						$db->query($sql4);


                        sscanf($_SERVER[REQUEST_URI], "/%[^/]/", $path);
                        $db->query("UPDATE ".$classname."_muban_b set AUTOCFG=1, AUTOCFG_SERVER='http://".$_SERVER[SERVER_NAME]."/".$path."/index/down.php?file=' where id=$sendid");
						
						
						
						//*建立chanpin表,4表
						$db->query("drop table if exists ".$classname."_chanpin");
						$db->query("drop table if exists ".$classname."_chanpin_a");
						$db->query("drop table if exists ".$classname."_chanpin_b");
						$db->query("drop table if exists ".$classname."_chanpin_c");
						
						//表1
						$sql = "CREATE TABLE ".$classname."_chanpin (
 							   `chanpinid` int(10) unsigned NOT NULL auto_increment,
							   `classid` int(11) NOT NULL default '0',
							   `classname` varchar(80) NOT NULL default '',
							   `orderid` int(11) NOT NULL default '0',
							   `updatetime` datetime NOT NULL default '0000-00-00 00:00:00',
							    TELPORT int(1) NOT NULL default '0',
							    SN varchar(80) NOT NULL default '',
							   `AUTOCFG_KEY` varchar(80) NOT NULL default '',
 							    USER varchar(80) NOT NULL default '',";
  					for($i=2;$i<874;$i++) //
						$sql .= $value[$i][0]." varchar(60) NOT NULL default '',";
					$sql .= "PRIMARY KEY  (chanpinid)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;";
					$db->query($sql);
					
					   //表2
					  $sql2 = "CREATE TABLE ".$classname."_chanpin_a (
 							   `chanpinid` int(10) unsigned NOT NULL auto_increment,
							   `classid` int(11) NOT NULL default '0',
							   `classname` varchar(80) NOT NULL default '',
							   `orderid` int(11) NOT NULL default '0',
							   `updatetime` datetime NOT NULL default '0000-00-00 00:00:00',
							    TELPORT int(1) NOT NULL default '0',
							    SN varchar(80) NOT NULL default '',
							   `AUTOCFG_KEY` varchar(80) NOT NULL default '',
 							    USER varchar(80) NOT NULL default '',";
					    for($j=874;$j<1674;$j++)
					   	   $sql2 .= $value[$j][0]." varchar(30) NOT NULL default '',";
					    $sql2 .= "PRIMARY KEY  (chanpinid)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;";
					    $db->query($sql2);
						
						 //表3
					  $sql3 = "CREATE TABLE ".$classname."_chanpin_b (
 							   `chanpinid` int(10) unsigned NOT NULL auto_increment,
							   `classid` int(11) NOT NULL default '0',
							   `classname` varchar(80) NOT NULL default '',
							   `orderid` int(11) NOT NULL default '0',
							   `updatetime` datetime NOT NULL default '0000-00-00 00:00:00',
							    TELPORT int(1) NOT NULL default '0',
							    SN varchar(80) NOT NULL default '',
							   `AUTOCFG_KEY` varchar(80) NOT NULL default '',
 							    USER varchar(80) NOT NULL default '',";
					    for($j=1674;$j<2256;$j++)
					   	   $sql3 .= $value[$j][0]." varchar(60) NOT NULL default '',";
					    $sql3 .= "PRIMARY KEY  (chanpinid)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;";
					    $db->query($sql3);
						
						//表4
					  $sql4 = "CREATE TABLE ".$classname."_chanpin_c (
 							   `chanpinid` int(10) unsigned NOT NULL auto_increment,
							   `classid` int(11) NOT NULL default '0',
							   `classname` varchar(80) NOT NULL default '',
							   `orderid` int(11) NOT NULL default '0',
							   `updatetime` datetime NOT NULL default '0000-00-00 00:00:00',
							    TELPORT int(1) NOT NULL default '0',
							    SN varchar(80) NOT NULL default '',
							   `AUTOCFG_KEY` varchar(80) NOT NULL default '',
 							    USER varchar(80) NOT NULL default '',";
					    for($j=2256;$j<count($value);$j++)
					   	   $sql4 .= $value[$j][0]." varchar(30) NOT NULL default '',";
					    $sql4 .= "PRIMARY KEY  (chanpinid)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;";
					    $db->query($sql4);
						
					}
					
					
					else {
					//*建立muban表
					$db->query("drop table if exists ".$classname."_muban");
					$sql = "CREATE TABLE ".$classname."_muban (
  `id` int(10) unsigned NOT NULL auto_increment,
  `title` varchar(80) NOT NULL default '',
  `classid` int(11) NOT NULL default '0',
  `orderid` int(11) NOT NULL default '0',
  `muban` varchar(80) NOT NULL default '',
  `AUTOCFG_KEY` varchar(80) NOT NULL default '',";
  					for($i=1;$i<count($value);$i++)
						$sql .= $value[$i][0]." varchar(65) NOT NULL default '',";
					$sql .= "PRIMARY KEY  (id)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;";
					
					$db->query($sql);
					
					//*插入初始摸板
					$sql = "insert into ".$classname."_muban (title,muban,classid, orderid";
					for($i=1;$i<count($value);$i++)
						$sql .= ", ".$value[$i][0];
					$sql .= ") values ( '$classname','$classname',".$rs1["classid"].", 1";
					for($i=1;$i<count($value);$i++)
						$sql .= ", '".$value[$i][1]."'";
					$sql .= ")";
					//echo "\n".$sql;
					$db->query($sql);
                                        $sendsiddb=$db->fetch_array($db->query("SELECT LAST_INSERT_ID()"));
                                        $sendid=$sendsiddb[0];

                                        sscanf($_SERVER[REQUEST_URI], "/%[^/]/", $path);
                                        $db->query("UPDATE ".$classname."_muban set AUTOCFG=1, AUTOCFG_SERVER='http://".$_SERVER[SERVER_NAME]."/".$path."/index/down.php?file=' where id=$sendid");
					
					
					//*建立chanpin表
					$db->query("drop table if exists ".$classname."_chanpin");
					$sql = "CREATE TABLE ".$classname."_chanpin (
  `chanpinid` int(10) unsigned NOT NULL auto_increment,
  `classid` int(11) NOT NULL default '0',
  `classname` varchar(80) NOT NULL default '',
  `orderid` int(11) NOT NULL default '0',
  `updatetime` datetime NOT NULL default '0000-00-00 00:00:00',
 TELPORT int(1) NOT NULL default '0',
 SN varchar(80) NOT NULL default '',
 `AUTOCFG_KEY` varchar(80) NOT NULL default '',
 USER varchar(80) NOT NULL default '',";
  					for($i=2;$i<count($value);$i++) //
						$sql .= $value[$i][0]." varchar(65) NOT NULL default '',";
					$sql .= "PRIMARY KEY  (chanpinid)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;";
					$db->query($sql);					
					}					
										
					//建立muban2表
					$db->query("drop table if exists ".$classname."_muban2");
					$sql = "CREATE TABLE ".$classname."_muban2 (
  `mubanid` int(10) unsigned NOT NULL auto_increment,
  `classname` varchar(255) NOT NULL default '',
  `projectid` int(11) NOT NULL default '0',
  `orderid` int(11) NOT NULL default '0',
  `mubanname` varchar(255) NOT NULL default '',";
  					for($i=1;$i<=40;$i++)
						$sql .= "file".$i." varchar(255) NOT NULL default '',";
					$sql .= "PRIMARY KEY  (mubanid)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;";
					
					$db->query($sql);

					$sql = "insert into ".$classname."_muban2 (classname,mubanname,projectid, orderid";
					//for($i=1;$i<=40;$i++)
						//$sql .= ", ".$value[$i][0];
					$sql .= ") values ( '$classname','$classname',".$rs1["classid"].", 1";
					$sql .= ")";
					//echo "\n".$sql;
					$db->query($sql);
					
					
					
					//建立chanpin2表
					$db->query("drop table if exists ".$classname."_chanpin2");
					$sql = "CREATE TABLE ".$classname."_chanpin2 (
  `chanpinid` int(10) unsigned NOT NULL auto_increment,
  `classid` int(11) NOT NULL default '0',
  `classname` varchar(255) NOT NULL default '',
  `orderid` int(11) NOT NULL default '0',
 SN varchar(80) NOT NULL default '',
 USER varchar(80) NOT NULL default '',";
  					for($i=1;$i<=40;$i++)
						$sql .= "file".$i." varchar(255) NOT NULL default '',";
					$sql .= "PRIMARY KEY  (chanpinid)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;";
					$db->query($sql);
					
					
					WriteSuccessMsg("<br><li>添加型号成功</li>","{$URL}?job=projectclass");
				}
				else{
					$ErrMsg=$ErrMsg."<br><li>型号[$classname]已经存在！</li>";
					WriteErrMsg($ErrMsg);
				}
			}
			
	}
	 elseif($action=="savemodify") {
		$classname=$_POST['classname'];
		$orderid=$_POST['orderid'];
		$miaoshu=$_POST['miaoshu'];
		$classid=$_POST['classid'];
		$ErrMsg="";
		if(empty($classname))
			$ErrMsg ='<br><li>型号名不能为空！</li>';
		if(empty($orderid))
			$ErrMsg=$ErrMsg."<br><li>型号排序不能为空且为数字</li>";
		if(empty($miaoshu))
			$ErrMsg=$ErrMsg."<br><li>型号配置项定制文件不能为空</li>";
		if($ErrMsg!="")
				WriteErrMsg($ErrMsg);
			else{
			$query=$db->query("SELECT classname FROM ".$tablepre."projectclass WHERE classid='$classid' ");
				$rs=$db->fetch_array($query);
				if(empty($rs[0]))
					WriteErrMsg("<br><li>该型号不存在！</li>");
				else{
					if($classname!=$rs[0]){
						$query=$db->query("SELECT classid FROM ".$tablepre."projectclass WHERE classname='$classname' ");
						$rs=$db->fetch_array($query);
						if(empty($rs[0])){
							$query=$db->query("UPDATE ".$tablepre."projectclass SET classname='$classname',orderid='$orderid',miaoshu='$miaoshu' WHERE classid='$classid'") ;
							WriteSuccessMsg("<br><li>修改[$classname]型号成功！</li>","{$URL}?job=projectclass");
						}
						else{
							$ErrMsg=$ErrMsg."<br><li>[$classname]型号已经存在！</li>";
							WriteErrMsg($ErrMsg);
						}
					}
					else{
						$query=$db->query("UPDATE ".$tablepre."projectclass SET orderid='$orderid',miaoshu='$miaoshu'  WHERE classid='$classid'" );
						WriteSuccessMsg("<br><li>修改[$classname]型号成功！</li>","{$URL}?job=projectclass");
					}
				}
			}
	}
	 elseif($action=="del") {
		$classid=$_GET['classid'];
		$ErrMsg="";
		if(empty($classid))
			$ErrMsg ='<br><li>请选择要删除的对象</li>';
		if($ErrMsg!="")
			WriteErrMsg($ErrMsg);
		else{
			$query=$db->query("SELECT classname,muban,muban2,chanpin,chanpin2 FROM ".$tablepre."projectclass WHERE classid='$classid' ");
			$rs=$db->fetch_array($query);
			if(empty($rs[0]))
				WriteErrMsg("<br><li>该型号不存在！</li>");
			else{
				$classname=$rs[0];
				$db->query("DELETE FROM ".$tablepre."projectclass  WHERE classid IN ($classid)");
				$db->query("drop table if exists ".$rs['muban']);
				$db->query("drop table if exists ".$rs['muban2']);
				$db->query("drop table if exists ".$rs['chanpin']);
				$db->query("drop table if exists ".$rs['chanpin2']);
				$db->query("drop table if exists ".$rs['muban']."_a");
				$db->query("drop table if exists ".$rs['muban']."_b");
				$db->query("drop table if exists ".$rs['muban']."_c");
				$db->query("drop table if exists ".$rs['chanpin']."_a");
				$db->query("drop table if exists ".$rs['chanpin']."_b");
				$db->query("drop table if exists ".$rs['chanpin']."_c");
				$db->query("delete from chanpin where classid=$classid");
				//$db->query("drop chanpin"."$calssid");
				//$db->query("DELETE FROM ".$tablepre."muban  WHERE classid IN ($classid)");
				//$db->query("DELETE FROM ".$tablepre."projectclass  WHERE classid IN ($classid)");
				WriteSuccessMsg("<br><li>删除[$classname]型号成功</li>","{$URL}?job=projectclass");
			}
		}
	}
	else
	{
		$statu="main";
		$query=$db->query("SELECT * FROM ".$tablepre."projectclass ORDER BY orderid");
while($row=$db->fetch_array($query)) {
	$rsdb[]=$row;
}
	}
		
}
else
	{
		$statu="main";
		$query=$db->query("SELECT * FROM ".$tablepre."projectclass ORDER BY orderid");
while($row=$db->fetch_array($query)) {
	$rsdb[]=$row;
	}
	}

require_once template('projectclass');


/* 文件格式， 第一行： type=xxx  第二行： TELPORT=X */
function fillfieldvalue($path)
{
	if(!$fp = @fopen($path,'r')){
		echo 'Open file failed!';
		exit();
	}
	flock($fp,LOCK_SH);
	$note = fread($fp,filesize($path));
	fclose($fp);
	$note = explode("\n",$note);		
	$maxnum = count($note);
	$j=0;
	for($i=0;$i<$maxnum;$i++)
	{
		$note1=explode("=",$note[$i],2);
		if(trim($note1[0])!="")
		{
			$field[$j][0]=$note1[0];
	
			$len=strlen(trim($note1[1]));
			if(substr_count($note1[1], "\"") > 0){
				$note1[1]=substr($note1[1],1,($len-2)) ;//去掉引号
			}
			$field[$j][1]=$note1[1];
			//echo $note1[1]."<br>";
				//echo $projecttxt[$j]."|".$projectdec[$j]."|".$projecttype[$j]."|".$projectfield[$j]."<br>";
			$j++;
		}
	}
	return $field;
}

?>
