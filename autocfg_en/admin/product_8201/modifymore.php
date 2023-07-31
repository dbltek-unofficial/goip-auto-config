<?php 
			if($_POST['h323gk'])
			{
				
			}
			if($_POST['sipserver'])
			{
				$sql.=",SIP_CONTACT0_SERVER=if(SIP_WORK_MODE='BSVR','".$_POST['sipserver']."','SIP_CONTACT0_SERVER')";
				for($i=2;$i<6;$i++)
					$sql.=",SIP_CONTACT".$i."_SERVER=if(SIP_WORK_MODE='MSVR','".$_POST['sipserver']."',SIP_CONTACT".$i."_SERVER)";
			}
			if($_POST['sipproxy'])
			{
				$sql.=",SIP_CONTACT0_PROXY=if(SIP_WORK_MODE='BSVR','".$_POST['sipproxy']."','SIP_CONTACT0_PROXY')";
				for($i=2;$i<6;$i++)
					$sql.=",SIP_CONTACT".$i."_PROXY=if(SIP_WORK_MODE='MSVR','".$_POST['sipproxy']."',SIP_CONTACT".$i."_PROXY)";
			}
			if($_POST['dial_plan'])
			{
				$prefix=$_POST['dial_plan'];
				$sql.=",P0_DIAL_PLAN=if(SIP_WORK_MODE='MSVR',P0_DIAL_PLAN,'".$prefix."')";
				for($i=1;$i<5;$i++)
					$sql.=",P".$i."_DIAL_PLAN=if(SIP_WORK_MODE='BSVR',P".$i."_DIAL_PLAN,'".$prefix."')";

			}	
			if($_POST['relayserver'])
			{
				//$sql.=",H323_RELAY_SERVER=if(ENDPOINT_TYPE='SIP',H323_RELAY_SERVER,if(H323_RELAY_SERVER!='".$_POST['rserver']."',H323_RELAY_SERVER,'".$_POST['relayserver']."'))";
				$sql.=",SIP_RELAY_SERVER=if(SIP_RELAY_SERVER!='".$_POST['rserver']."',SIP_RELAY_SERVER,'".$_POST['relayserver']."')";
				$sql.=",MG_RELAY_SERVER=if(MG_RELAY_SERVER!='".$_POST['rserver']."',MG_RELAY_SERVER,'".$_POST['relayserver']."')";				
			}
			if($_POST['relayport'])
			{
				//$sql.=",H323_RELAY_PORT==if(ENDPOINT_TYPE='SIP',H323_RELAY_PORT,if(H323_RELAY_SERVER!='".$_POST['rserver']."',H323_RELAY_PORT,'".$_POST['relayport']."'";
				$sql.=",SIP_RELAY_PORT=if(SIP_RELAY_SERVER!='".$_POST['rserver']."',SIP_RELAY_PORT,'".$_POST['relayport']."')";
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
?>