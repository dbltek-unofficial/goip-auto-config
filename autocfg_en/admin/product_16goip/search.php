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
				/*
				$sqlname=" where SIP_REGISTRAR='".$sipserver;
				for($i=0;$i<$telport;$i++)
					$sqlname.="' or SIP_CONTACT".$i."_SERVER='".$sipserver;
				$sqlname.="'";*/
				$sqlname=" where ENDPOINT_TYPE='SIP' and ((SIP_CONFIG_MODE='SINGLE_MODE' and SIP_CONTACT0_SERVER='".$sipserver."') or (SIP_CONFIG_MODE='LINE_MODE' and ( SIP_CONTACT6_SERVER='".$sipserver;
				for($i=7;$i<$telport+6;$i++)
					$sqlname.="' or SIP_CONTACT".$i."_SERVER='".$sipserver;				
				$sqlname.="')))";
				break;
			case "h323gk":
				$h323gk=$_POST['h323gk'];
				/*
				$sqlname=" where H323_GK_ADDR='".$h323gk;
				for($i=1;$i<=$telport;$i++)
					$sqlname.="' or H323_LINE".$i."_GKADDR='".$h323gk;
				$sqlname.="'";*/
				$sqlname=" where ENDPOINT_TYPE='H323' and ((H323_CONFIG_MODE='SINGLE_MODE' and H323_GK_ADDR='".$h323gk."') or (H323_CONFIG_MODE='LINE_MODE' and ( H323_LINE1_GKADDR='".$h323gk;
				for($i=2;$i<=$telport;$i++)
					$sqlname.="' or H323_LINE".$i."_GKADDR='".$h323gk;				
				$sqlname.="')))";
				break;
			case "sipid":
				$sipid=$_POST['sipid'];
				/*
				$sqlname=" where SIP_AUTH_ID='".$sipid;
				for($i=0;$i<$telport;$i++)
					$sqlname.="' or SIP_CONTACT".$i."_LOGIN='".$sipid;
				$sqlname.="'";*/
				$sqlname=" where ENDPOINT_TYPE='SIP' and ((SIP_CONFIG_MODE='SINGLE_MODE' and SIP_CONTACT0_LOGIN='".$sipid."') or (SIP_CONFIG_MODE='LINE_MODE' and ( SIP_CONTACT6_LOGIN='".$sipid;
				for($i=7;$i<$telport+6;$i++)
					$sqlname.="' or SIP_CONTACT".$i."_LOGIN='".$sipid;				
				$sqlname.="')))";
				break;
			case "h323id":
				$h323id=$_POST['h323id'];
				$sqlname=" where ENDPOINT_TYPE='H323' and ((H323_CONFIG_MODE='SINGLE_MODE' and H323_ID='".$h323id."') or (H323_CONFIG_MODE='LINE_MODE' and ( H323_LINE1_H323_ID='".$h323id;
				for($i=2;$i<$telport;$i++)
					$sqlname.="' or H323_LINE".$i."_H323_ID='".$h323id;				
				$sqlname.="')))";				
				break;
			case "relayserver":
				$relayserver=$_POST['relayserver'];
				$sqlname=" where MG_RELAY_SERVER='".$relayserver."' ";
				break;
			case "pnumber":				
				$pnumber=$_POST['pnumber'];
				$sqlname=" where (ENDPOINT_TYPE='H323' and ((H323_CONFIG_MODE='SINGLE_MODE' and H323_PHONE_NUM='".$pnumber."') or (H323_CONFIG_MODE='LINE_MODE' and ( H323_LINE1_NUMBER='".$pnumber;
				for($i=2;$i<=$telport;$i++)
					$sqlname.="' or H323_LINE".$i."_NUMBER='".$pnumber;				
				$sqlname.="')))) or (ENDPOINT_TYPE='SIP' and ((SIP_CONFIG_MODE='SINGLE_MODE' and SIP_PHONE_NUMBER='".$pnumber."') or (SIP_CONFIG_MODE='LINE_MODE' and ( SIP_CONTACT0_DIAL_DIGITS='".$pnumber;
				for($i=1;$i<$telport;$i++)
					$sqlname.="' or SIP_CONTACT".$i."_DIAL_DIGITS='".$pnumber;				
				$sqlname.="'))))";	
				//WriteErrMsg("<br><li>错误的机器类型！(".$sqlname.")</li>");			
				break;
		}
?>
