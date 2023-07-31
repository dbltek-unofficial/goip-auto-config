<?php
!defined('OK') && exit('ForbIdden');
$Table=$tablepre."productclass";

$statu="";

if(isset($_GET['action'])) {
	$action=$_GET['action'];
	if(isset($_GET['ClassId'])) {
		$ClassId=$_GET['ClassId'];
	}
	if($action=="modify") {
		$ClassList="";
		$statu="modify";
		$query=$db->query("SELECT ClassName,OrderId,ParentId,UrlLink,ReadMe,ShowIndex FROM ".$Table." WHERE ClassId=$ClassId");
		if($row=$db->fetch_array($query)){	
			$ClassName=$row[0];
			$OrderId=$row[1];
			$ParentId=$row[2];
			$UrlLink=$row[3];
			$ReadMe=$row[4];
			$ShowIndex=$row[5];
		}
		
		if($ParentId==$ClassId){
			$ClassList=$ClassList." <option value=".$ClassId." selected>".$ClassName."</option>";
			$ClassType="1";
			$ShowIndex1="checked";
		}
		else{
			$query=$db->query("SELECT ClassName,ClassId FROM ".$Table." WHERE ParentId=ClassId");
			while($row=$db->fetch_array($query)) {
				$ClassList=$ClassList." <option value=".$row['ClassId'];                               
				if($ParentId==$row['ClassId'])
					$ClassList=$ClassList." selected";
				$ClassList=$ClassList.">".$row['ClassName']."</option>";
			}
			$ShowIndex1="unchecked";
		}

	} elseif($action=="add") {
		$statu="add";
		if(!isset($ClassId)){
			$ParentId=0;
			$ParentClassName="First column";}
		else{
			$query=$db->query("SELECT ClassName FROM ".$Table." WHERE ClassId=$ClassId");
			if($row=$db->fetch_array($query))
				$ParentClassName=$row[0];
			$ParentId=$ClassId;
		}
	} elseif($action=="order") {
		$statu="order";
	}
	elseif($action=="savemodify") {
		$statu="savemodify";
		
		$ClassName=$_POST['ClassName'];
		$OrderId=$_POST['OrderId'];
		$ClassId=$_POST['ClassId'];
		$ClassParentId=$_POST['ClassParentId'];
		$UrlLink=$_POST['UrlLink'];
		$ReadMe=$_POST['ReadMe'];
		$ShowIndex=$_POST['ShowIndex'];
		$ShowIndex1=$_POST['ShowIndex1'];
		if($ShowIndex1=="checked")
			$ShowIndex="checked";
		
		$ErrMsg="";
		if(empty($ClassId))
			$ErrMsg ='<br><li>Please choose Column</li>';
		if(empty($ClassName))
			$ErrMsg ='<br><li>column title shouldn鈥檛 be empty</li>';
		if(empty($OrderId))
			$ErrMsg=$ErrMsg."<br><li>sort order shouldn鈥檛 be empty and only for number</li>";
		if($ErrMsg!="")
			WriteErrMsg($ErrMsg);
		else{
			$query=$db->query("SELECT ParentId FROM ".$Table." WHERE ClassId='$ClassId' ");
			$rs=$db->fetch_array($query);
			if(empty($rs[0]))
				WriteErrMsg("<br><li>Cann't find the column!</li>");
			else{
				$ParentId=$rs[0];
				$query=$db->query("SELECT ClassId FROM ".$Table." WHERE ClassName='$ClassName' and ParentId=$ClassParentId and ClassId<>$ClassId");
				$rs=$db->fetch_array($query);
				if(empty($rs[0])){
					$query=$db->query("UPDATE ".$Table." SET ClassName='$ClassName',OrderId=$OrderId,ParentId=$ClassParentId,UrlLink='$UrlLink',ReadMe='$ReadMe',ShowIndex='$ShowIndex'  WHERE ClassId=$ClassId") ;
					$query=$db->query("UPDATE ".$Table." SET Child=Child-1  WHERE ClassId=$ParentId") ;
					$query=$db->query("UPDATE ".$Table." SET Child=Child+1  WHERE ClassId=$ClassParentId") ;
					WriteSuccessMsg("<br><li>Modify Success</li>","{$URL}?job=ClassTwo");
				}
				else{
					WriteErrMsg("<br><li>Column [$ClassName] have existed</li>");
				}
			}
		}
	}
	elseif($action=="saveadd") {
		$statu="saveadd";
		$ClassName=$_POST['ClassName'];
		$ParentId=$_POST['ParentId'];
		$UrlLink=$_POST['UrlLink'];
		$ReadMe=$_POST['ReadMe'];
		$ShowIndex=$_POST['ShowIndex'];
		
		$ErrMsg="";
		if(empty($ParentId))
			if($ParentId!="0")
				$ErrMsg ='<br><li>Please choose Column2</li>';

		if(empty($ClassName))
			$ErrMsg ='<br><li>column title shouldn鈥檛 be empty</li>';
		if($ErrMsg!="")
			WriteErrMsg($ErrMsg);
		else{
			$query=$db->query("SELECT MAX(OrderId) FROM ".$Table." WHERE ParentId=$ParentId");
			if($row=$db->fetch_array($query))
				$OrderId=$row[0]+1;
			else
				$OrderId=1;
				
			$query=$db->query("SELECT ClassId FROM ".$Table." WHERE ClassName='$ClassName' and  ParentId=$ParentId");
			$rs=$db->fetch_array($query);
			if(empty($rs[0])){
				if($ParentId!="0")
					$query=$db->query("INSERT INTO ".$Table." (ClassName,OrderId,ParentId,UrlLink,ReadMe,ShowIndex) VALUES ('$ClassName','$OrderId','$ParentId','$UrlLink','$ReadMe','checked')");
				else{
					$query=$db->query("INSERT INTO ".$Table." (ClassName,OrderId,UrlLink,ReadMe,ShowIndex) VALUES ('$ClassName','$OrderId','$UrlLink','$ReadMe','$ShowIndex')");
					$query=$db->query("SELECT max(ClassId) FROM ".$Table);
					$rs=$db->fetch_array($query);
					$ClassId=$rs[0];
					$query=$db->query("UPDATE ".$Table." SET ParentId=$ClassId  WHERE ClassId=$ClassId") ;
				}
				$query=$db->query("UPDATE ".$Table." SET Child=Child+1  WHERE ClassId=$ParentId") ;
				WriteSuccessMsg("<br><li>Add Success</li>","{$URL}?job=ClassTwo");
			}
			else{
				$ErrMsg=$ErrMsg."<br><li>Column [$ClassName] have existed</li>";
				WriteErrMsg($ErrMsg);
			}
		}
		

	}
	
	elseif($action=="Del") {
		$statu="Del";
		$ClassId=$_GET['ClassId'];
		$ErrMsg="";
		if(empty($ClassId))
			$ErrMsg ='<br><li>Please choose one</li>';
		if($ErrMsg!="")
			WriteErrMsg($ErrMsg);
		else{
			$db->query("DELETE FROM ".$Table."  WHERE ClassId IN ($ClassId)");
			$db->query("DELETE FROM ".$tablepre."product  WHERE ClassId IN ($ClassId)");
			WriteSuccessMsg("<br><li>Delete Column Success</li>","Index.php?job=ClassTwo");
		}
	}
	
	elseif($action=="Clear") {
		$statu="Clear";
		$ClassId=$_GET['ClassId'];
		$ErrMsg="";
		if(empty($ClassId))
			$ErrMsg ='<br><li>Please choose one</li>';
		if($ErrMsg!="")
			WriteErrMsg($ErrMsg);
		else{
			//$db->query("DELETE FROM ".$Table."  WHERE ClassId IN ($ClassId)");
			$db->query("DELETE FROM ".$tablepre."product  WHERE ClassId IN ($ClassId)");
			WriteSuccessMsg("<br><li>Clear Column Success</li>","Index.php?job=ClassTwo");
		}
	}
	else
		$statu="main";
}
else{
	$statu="main";
	$query=$db->query("SELECT ClassId,ClassName,ParentId,Child,OrderId FROM ".$Table." ORDER BY ParentId,Child desc,OrderId");
$ClassNameInco;
	while($row=$db->fetch_array($query)) {
		$ClassList=$ClassList." <tr class='tdbg' onmouseout=\"this.style.backgroundColor=''\" onmouseover=\"this.style.backgroundColor='#BFDFFF'\"> ";
		$ClassList=$ClassList."<td wIdth=\"50\" height=\"20\">".$row[0]."</td>";
		if($row[0]!=$row[2])
			$ClassNameInco="&nbsp;&nbsp;<img src=../Images/Admin/tree_line1.gif wIdth=17 height=16>";
		else
			$ClassNameInco="";
		
		
		$ClassList=$ClassList."<td>".$ClassNameInco.$row[1]."</td>";
		$ClassList=$ClassList."<td align=center>";
		if($row[0]!=$row[2])
			$ClassList=$ClassList."Add second column";
		else
			$ClassList=$ClassList."<a href={$URL}?job=ClassTwo&action=add&ClassId={$row[0]}>Add second column</a>";
		$ClassList=$ClassList."  | <a href={$URL}?job=ClassTwo&action=modify&ClassId={$row[0]}>Modify</a> 
		  | <a href={$URL}?job=ClassTwo&action=Del&ClassId=".$row[0]." onClick=\"return ConfirmDel1";
		  if($row[3]>0)
			$ClassList=$ClassList."1";
		else
			$ClassList=$ClassList."2";
		$ClassList=$ClassList."()\">Delete</a> |</td> </tr>";
	}
}

require_once template('ClassTwo');

?>