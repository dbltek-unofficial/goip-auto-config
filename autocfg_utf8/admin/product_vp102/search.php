<?php
		switch($show){
			case "number":
				$sqlname=" where SN='".$_POST['number']."'";
				//WriteErrMsg("<br><li>不存在此类型</li>");
				break;
			case "user":
				$sqlname=" where USER='".$_POST['user']."'";
				break;
			case "sipserver":
				$sipserver=$_POST['sipserver'];
				$sqlname=" where ENDPOINT_TYPE='SIP' and SIP_REGISTRAR='".$sipserver;
				//for($i=0;$i<$telport;$i++)
					//$sqlname.="' or SIP_CONTACT".$i."_SERVER='".$sipserver;
				$sqlname.="'";
				break;
			case "h323gk":
				$h323gk=$_POST['h323gk'];
				$sqlname=" where ENDPOINT_TYPE='H323' and H323_GK_ADDR='".$h323gk;
				//for($i=1;$i<=$telport;$i++)
					//$sqlname.="' or H323_LINE".$i."_GKADDR='".$h323gk;
				$sqlname.="'";
				break;
			case "sipid":
				$sipid=$_POST['sipid'];
				$sqlname=" where ENDPOINT_TYPE='SIP' and SIP_PHONE_AUTH_ID='".$sipid;
				//for($i=0;$i<$telport;$i++)
					//$sqlname.="' or SIP_CONTACT".$i."_LOGIN='".$sipid;
				$sqlname.="'";
				break;
			case "h323id":
				$h323id=$_POST['h323id'];
				$sqlname=" where ENDPOINT_TYPE='H323' and H323_ID='".$h323id;
				//for($i=1;$i<=$telport;$i++)
					//$sqlname.="' or H323_LINE".$i."_H323_ID='".$h323id;
				$sqlname.="'";
				break;				
			case "relayserver":
				$relayserver=$_POST['relayserver'];
				$sqlname=" where MG_RELAY_SERVER='".$relayserver."' or (ENDPOINT_TYPE='H323' and H323_RELAY_SERVER='".$relayserver."') or (ENDPOINT_TYPE='SIP' and SIP_RELAY_SERVER='".$relayserver."')";
				break;
			case "pnumber":
				$pnumber=$_POST['pnumber'];
				$sqlname=" where H323_PHONE_NUM='".$pnumber."' or SIP_LOCAL_PHONE_NUM='".$pnumber."'";
				break;	
		}		
?>
