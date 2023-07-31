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
				$sqlname=" where SIP_CONTACT2_SERVER='".$sipserver."' or SIP_CONTACT3_SERVER='".$sipserver."'";
				//for($i=0;$i<$telport;$i++)
					//$sqlname.="' or SIP_CONTACT".$i."_SERVER='".$sipserver;
				//$sqlname.="'";
				break;
			case "h323gk":
				$h323gk=$_POST['h323gk'];
				$sqlname=" where 0";
				//$sqlname=" where ENDPOINT_TYPE='H323' and H323_GK_ADDR='".$h323gk;
				//for($i=1;$i<=$telport;$i++)
					//$sqlname.="' or H323_LINE".$i."_GKADDR='".$h323gk;
				//$sqlname.="'";
				break;
			case "sipid":
				$sipid=$_POST['sipid'];
				$sqlname=" where SIP_CONTACT3_LOGIN='".$sipid."' or SIP_CONTACT2_LOGIN='".$sipid."'";
				//for($i=0;$i<$telport;$i++)
					//$sqlname.="' or SIP_CONTACT".$i."_LOGIN='".$sipid;
				//$sqlname.="'";
				break;
			case "h323id":
				$h323id=$_POST['h323id'];
				//$sqlname=" where ENDPOINT_TYPE='H323' and H323_ID='".$h323id;
				//for($i=1;$i<=$telport;$i++)
					//$sqlname.="' or H323_LINE".$i."_H323_ID='".$h323id;
				$sqlname=" where 0";
				break;				
			case "relayserver":
				$relayserver=$_POST['relayserver'];
				$sqlname=" where MG_RELAY_SERVER='".$relayserver."' or SIP_RELAY_SERVER='".$relayserver."'";
				break;
			case "pnumber":
				$pnumber=$_POST['pnumber'];
				$sqlname=" where SIP_CONTACT2_DIAL_DIGITS='".$pnumber."' or SIP_CONTACT3_DIAL_DIGITS='".$pnumber."'";
				break;	
		}		
?>
