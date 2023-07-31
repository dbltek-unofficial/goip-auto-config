<?php 
			if($_POST['h323gk'])
			{
				$sql.=",H323_GK_ADDR='".$_POST['h323gk']."'";
			}
			if($_POST['sipserver'])
			{
				$sql.=",SIP_REGISTRAR='".$_POST['sipserver']."'";
			}
			if($_POST['sipproxy'])
			{
				$sql.=",SIP_PROXY='".$_POST['sipproxy']."'";
			}
			if($_POST['dial_plan'])
			{
				$prefix=$_POST['dial_plan'];
				$sql.=",DIAL_PALN='".$prefix."'";
				//$sql.=",H323_PREFIX=if(ENDPOINT_TYPE='SIP',H323_PREFIX,'".$prefix."')";
				//$sql.=",SIP_PREFIX=if(ENDPOINT_TYPE='H323',SIP_PREFIX,'".$prefix."')";
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
			if($_POST['smb_mode'] == "cli" && $_POST['smb_server']) 
			{
				$sql.=",SMB_MODE='cli'";
				$sql.=",SMB_SVR='".$_POST['smb_server']."'";
			}
			if($_POST['smb_mode'] == "sche_local" && $_POST['smb_server2']) 
			{
				$sql.=",SMB_MODE='sche_local'";
				$sql.=",SMB_SERVER='".$_POST['smb_server2']."'";
			}
			if($_POST['smb_mode'] == "svr" && $_POST['sche_local_port']) 
			{
				$sql.=",SMB_MODE='svr'";
				$sql.=",SCHE_LC_PORT='".$_POST['sche_local_port']."'";
			}
			
?>