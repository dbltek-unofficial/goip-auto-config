<?php
	
	if($_POST['Submit'] == "保 存" )
	{
		$db->query("update remote set port='$_POST[rewebport]'");	
		WriteSuccessMsg("<br><li>已保存</li>","{$URL}?job=remote");
	} else {
		$port=$db->fetch_array($db->query("SELECT * FROM remote LIMIT 1"));
	}	
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="Style.css" rel="stylesheet" type="text/css">
<title>remote server management</title>
<script language="JavaScript" type="text/JavaScript">
function check()
{
/*
    if (config_form.SN.value=="")
  {
    alert("请填机身号码（SN）!");
	config_form.SN.focus();
	return false;
  }
*/
}
</script>
</head>
<body leftmargin="2" topmargin="0" marginwIdth="0" marginheight="0">
<table wIdth="100%" border="0" align="center" cellpadding="0" cellspacing="1" class="border">
  <tr class="title">
    <td height="22"><strong> 提示： </strong></td>
  </tr>
  <tr class="tdbg" onmouseout="this.style.backgroundColor=''" onmouseover="this.style.backgroundColor='#BFDFFF'">
    <td valign="middle"><ul>
        <li>这些参数必须与远程登录服务器的运行参数一致，才能保证和远程服务器的通讯 </li>
	<li>如果你不清楚远程服务器的运行参数，请不要随便动这里的参数设置</li>
	<li>如果远程服务器的运行参数改变了，这里的相应参数也要改变</li>
   	 </ul>
	</td>
  </tr>
</table>
<table width="100%" height="25"  border="0" cellpadding="0" cellspacing="0">
  <tr class="topbg">
    <td width="8%">&nbsp;</td>
    <td width="92%" height="25"><strong>当前位置：登录远程陆服务器的参数管理</strong></td>
  </tr>
</table>
<form method="post" action="<?php echo $URL ?>?job=remote" name="form1" onSubmit="return confirm('提示：此端口设置必须与远程登录服务器的网页端口一致，否则将导致远程服务器无法登录。确定进行吗？')">
  <br>
  <br>
  <table wIdth="300" border="0" align="center" cellpadding="2" cellspacing="1" class="border" >
    <tr class="title"> 
      <td height="22" colspan="2"> <div align="center"><strong>登录远程服务器的参数设定</strong></div></td>
    </tr>
    <tr> 
      <td wIdth="100" align="right" class="tdbg"><strong>网页端口:</strong></td>
      <td class="tdbg"><input type="input" name="rewebport" value=<?php echo $port[0] ?>></td>
    </tr>
	
    <tr> 
      <td height="40" colspan="2" align="center" class="tdbg"><input name="Action" type="hIdden" Id="Action" value="Modify"> 
        <input  type="submit" name="Submit" value="保 存" style="cursor:hand;"> 
        &nbsp;<input name="Cancel" type="button" Id="Cancel" value="取 消" onClick="window.location.href='<?php echo $URL ?>?job=remote'" style="cursor:hand;"></td>
    </tr>
  </table>
  </form>
					  </td> 
					</tr>
</table>
				
</body>
</html>
