<?php
			if($_POST['h323gk'])
			{
				$sql.=",H323_GK_ADDR=if(H323_CONFIG_MODE ='LINE_MODE',H323_GK_ADDR,'".$_POST['h323gk']."')";
				for($i=1;$i<=$telport;$i++)
					$sql.=",H323_LINE".$i."_GKADDR=if(H323_CONFIG_MODE ='LINE_MODE','".$_POST['h323gk']."', H323_LINE".$i."_GKADDR)";
			}
			if($_POST['sipserver'])
			{
				$sql.=",SIP_REGISTRAR=if(SIP_CONFIG_MODE ='LINE_MODE',SIP_REGISTRAR,'".$_POST['sipserver']."')";
				for($i=0;$i<$telport;$i++)
					$sql.=",SIP_CONTACT".$i."_SERVER=if(SIP_CONFIG_MODE ='LINE_MODE','".$_POST['sipserver']."',SIP_CONTACT".$i."_SERVER)";
			}
			if($_POST['sipproxy'])
			{
				$sql.=",SIP_PROXY=if(SIP_CONFIG_MODE ='LINE_MODE',SIP_PROXY,'".$_POST['sipproxy']."')";
				for($i=0;$i<$telport;$i++)
					$sql.=",SIP_CONTACT".$i."_PROXY=if(SIP_CONFIG_MODE ='LINE_MODE','".$_POST['sipproxy']."',SIP_CONTACT".$i."_PROXY)";
			}
			if($_POST['dial_plan'])
			{
				$prefix=$_POST['dial_plan'];
				$sql.=",H323_PREFIX=if(ENDPOINT_TYPE='SIP',H323_PREFIX,if(H323_CONFIG_MODE ='LINE_MODE',H323_PREFIX,'".$prefix."'))";
				$sql.=",SIP_PREFIX=if(ENDPOINT_TYPE='H323',SIP_PREFIX,if(SIP_CONFIG_MODE ='LINE_MODE',SIP_PREFIX,'".$prefix."'))";
				for($i=0;$i<$telport;$i++){
					$sql.=",H323_PREFIX_".$i."=if(ENDPOINT_TYPE='SIP',H323_PREFIX_".$i.",if(H323_CONFIG_MODE !='LINE_MODE',H323_PREFIX_".$i.",'".$prefix."'))";
					$sql.=",SIP_PREFIX_".$i."=if(ENDPOINT_TYPE='H323',SIP_PREFIX_".$i.",if(SIP_CONFIG_MODE !='LINE_MODE',SIP_PREFIX_".$i.",'".$prefix."'))";
				}
			}
			if($_POST['relayserver'])
			{
				$sql.=",H323_RELAY_SERVER=if(ENDPOINT_TYPE='SIP',H323_RELAY_SERVER,if(H323_RELAY_SERVER!='".$_POST['rserver']."',H323_RELAY_SERVER,'".$_POST['relayserver']."'))";
				$sql.=",SIP_RELAY_SERVER=if(ENDPOINT_TYPE='H323',SIP_RELAY_SERVER,if(SIP_RELAY_SERVER!='".$_POST['rserver']."',SIP_RELAY_SERVER,'".$_POST['relayserver']."'))";
				$sql.=",MG_RELAY_SERVER=if(MG_RELAY_SERVER!='".$_POST['rserver']."',MG_RELAY_SERVER,'".$_POST['relayserver']."')";				
			}
			if($_POST['relayport'])
			{
				$sql.=",H323_RELAY_PORT=if(ENDPOINT_TYPE='SIP',H323_RELAY_PORT,if(H323_RELAY_SERVER!='".$_POST['rserver']."',H323_RELAY_PORT,'".$_POST['relayport']."'))";
				$sql.=",SIP_RELAY_PORT=if(ENDPOINT_TYPE='H323',SIP_RELAY_PORT,if(SIP_RELAY_SERVER!='".$_POST['rserver']."',SIP_RELAY_PORT,'".$_POST['relayport']."'))";
				$sql.=",MG_RELAY_PORT=if(MG_RELAY_SERVER!='".$_POST['rserver']."',MG_RELAY_PORT,'".$_POST['relayport']."')";
			}
			if($_POST['auto_cfg_server'])
			{
				$sql.=",AUTOCFG_SERVER='".$_POST['auto_cfg_server']."'";
				$sql.=",AUTOCFG='1'";
			}
			if($_POST['remote_control_server'])
			{
				$sql.=",RADMIN_SERVER='".$_POST['remote_control_server']."'";
			}
			if($_POST['update_link'])
			{
				
			}
			if($_POST['dial_plan_p'])
			{
				for($i=1;$i<=$telport;$i++)
					$sql.=",L".$i."_P_DIGIT_MAP='".$_POST['dial_plan_p']."'";
			}
			if($_POST['dial_plan_v'])
			{
				for($i=1;$i<=$telport;$i++)
					$sql.=",L".$i."_V_DIGIT_MAP='".$_POST['dial_plan_v']."'";
			}
			if($_POST['sms_sender'])
			{	
				for($i=1;$i<=$telport;$i++){
					$sql.=",L".$i."_SMS_SENDER=1";
					$sql.=",L".$i."_SMS_SERVER='".$_POST['sms_server']."'";
					$sql.=",L".$i."_SMS_PORT='".$_POST['sms_port']."'";
				}
			}
			if($_POST['rmsim_enable'])
			{	
				$sql.=",RMSIM_ENABLE=1";
				$sql.=",SMB_SVR='".$_POST['smb_svr']."'";
			}
?>