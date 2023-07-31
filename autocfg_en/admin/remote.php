<?php
	if($_POST['Submit'] == "Save")
	{
		$db->query("update remote set port='$_POST[rewebport]'");       
		WriteSuccessMsg("<br><li>Has been saved</li>","{$URL}?job=remote");
	} else {
		$port=$db->fetch_array($db->query("SELECT * FROM remote LIMIT 1"));
      	}	
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="Style.css" rel="stylesheet" type="text/css">
<title>remote server management</title>
</head>
<body leftmargin="2" topmargin="0" marginwIdth="0" marginheight="0">
<table wIdth="100%" border="0" align="center" cellpadding="0" cellspacing="1" class="border">
  <tr class="title">
    <td height="22"><strong> Notice:  </strong></td>
  </tr>
  <tr class="tdbg" onmouseout="this.style.backgroundColor=''" onmouseover="this.style.backgroundColor='#BFDFFF'"> 
    <td valign="middle"><ul>                                                                                      
        <li>These parameters must be consistent with the remote server consistent operating parameters in order to guarantee and remote server communication. </li>                          
        <li>If you do not know the remote server's operating parameters, please do not arbitrarily change these parameters set.</li>
        <li>If the remote server's operating parameters changed, the corresponding parameters here to change.</li>
         </ul>                                                                                                    
        </td>                                                                                                     
  </tr>                                                                                                           
</table> 
<table width="100%" height="25"  border="0" cellpadding="0" cellspacing="0">
  <tr class="topbg">
    <td width="8%">&nbsp;</td>
    <td width="92%" height="25"><strong>Current position:Remote server's parameters</strong></td>
  </tr>
</table>
<form method="post" action="<?php echo $URL ?>?job=remote" name="form1" onSubmit="return confirm('Note: This port settings must be consistent with the remote server\'s web port, otherwise will lead to the remote server can not log. Are you sure to continue?')">
  <br>
  <br>
  <table wIdth="300" border="0" align="center" cellpadding="2" cellspacing="1" class="border" >
    <tr class="title"> 
      <td height="22" colspan="2"> <div align="center"><strong>Remote server's parameters</strong></div></td>
    </tr>
    <tr> 
      <td wIdth="100" align="right" class="tdbg"><strong>Web Port:</strong></td>
      <td class="tdbg"><input type="input" name="rewebport" value=<?php echo $port[0] ?>></td>
    </tr>
		
    <tr> 
      <td height="40" colspan="2" align="center" class="tdbg"><input name="Action" type="hIdden" Id="Action" value="Modify"> 
        <input  type="submit" name="Submit" value="Save" style="cursor:hand;"> 
        &nbsp;<input name="Cancel" type="button" Id="Cancel" value="Cancel" onClick="window.location.href='<?php echo $URL ?>?job=remote'" style="cursor:hand;"></td>
    </tr>
  </table>
  </form>
					  </td> 
					</tr>
</table
				
></body

</html>
