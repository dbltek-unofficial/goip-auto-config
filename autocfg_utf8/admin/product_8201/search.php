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
				$sqlname.=" where (SIP_WORK_MODE='BSVR' and (SIP_CONTACT0_SERVER='".$sipserver."')) or (SIP_WORK_MODE='MSVR' and (SIP_CONTACT2_SERVER='".$sipserver."' or SIP_CONTACT3_SERVER='".$sipserver."' or SIP_CONTACT4_SERVER='".$sipserver."' or SIP_CONTACT5_SERVER='".$sipserver."'))";
				//$sqlname=" where SIP_REGISTRAR='".$sipserver;
				//for($i=0;$i<$telport;$i++)
					//$sqlname.="' or SIP_CONTACT".$i."_SERVER='".$sipserver;
				//$sqlname.="'";
				break;
			
			case "h323gk":
				$sqlname =" where 0";
				/*
				$h323gk=$_POST['h323gk'];
				$sqlname=" where H323_GK_ADDR='".$h323gk;
				//for($i=1;$i<=$telport;$i++)
					//$sqlname.="' or H323_LINE".$i."_GKADDR='".$h323gk;
				$sqlname.="'";
				*/
				break;
			
			case "sipid":
				$sipid=$_POST['sipid'];
				$sqlname.=" where (SIP_WORK_MODE='BSVR' and (SIP_CONTACT0_LOGIN='".$sipid."' or SIP_CONTACT0_LOGIN_2='".$sipid."' or SIP_CONTACT0_LOGIN_3='".$sipid."' or SIP_CONTACT0_LOGIN_4='".$sipid."')) or (SIP_WORK_MODE='MSVR' and (SIP_CONTACT2_LOGIN='".$sipid."' or SIP_CONTACT3_LOGIN='".$sipid."' or SIP_CONTACT4_LOGIN='".$sipid."' or SIP_CONTACT5_LOGIN='".$sipid."'))";
				//$sqlname=" where SIP_PHONE_AUTH_ID='".$sipid;
				//for($i=0;$i<$telport;$i++)
					//$sqlname.="' or SIP_CONTACT".$i."_LOGIN='".$sipid;
				//$sqlname.="'";
				break;
			
			case "h323id":
				$sqlname =" where 0";
				/*
				$h323id=$_POST['h323id'];
				$sqlname=" where H323_ID='".$h323gk;
				//for($i=1;$i<=$telport;$i++)
					//$sqlname.="' or H323_LINE".$i."_H323_ID='".$h323id;
				$sqlname.="'";
				*/
				break;
					
			case "relayserver":
				$relayserver=$_POST['relayserver'];
				$sqlname=" where MG_RELAY_SERVER='".$relayserver."' or SIP_RELAY_SERVER='".$relayserver."'";
				break;
			case "pnumber":
				$pnumber=$_POST['pnumber'];
				$sqlname=" where (SIP_WORK_MODE='BSVR' and (SIP_CONTACT0_DIAL_DIGITS='".$pnumber."' or SIP_CONTACT0_DIAL_DIGITS_2='".$pnumber."' or SIP_CONTACT0_DIAL_DIGITS_3='".$pnumber."' or SIP_CONTACT0_DIAL_DIGITS_4='".$pnumber."'))";
				$sqlname.="or (SIP_WORK_MODE='MSVR' and (SIP_CONTACT2_DIAL_DIGITS='".$pnumber."' or SIP_CONTACT3_DIAL_DIGITS='".$pnumber."' or SIP_CONTACT4_DIAL_DIGITS='".$pnumber."' or SIP_CONTACT5_DIAL_DIGITS='".$pnumber."'))";
				//$sqlname=" where H323_PHONE_NUM='".$pnumber."' or SIP_LOCAL_PHONE_NUM='".$pnumber."'";
				break;	
		}		
?>
