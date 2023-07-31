<?php
			if($_POST['h323gk'])
			{

			}
			if($_POST['sipserver'])
			{
				$sql.=",SIP_CONTACT0_SERVER=if(SIP_FXS_CONFIG_MODE ='LINE_MODE',SIP_CONTACT0_SERVER,'".$_POST['sipserver']."')";
				for($i=1;$i<=$row['FXSPORT'];$i++)
					$sql.=",SIP_CONTACT".($i*2)."_SERVER=if(SIP_FXS_CONFIG_MODE ='LINE_MODE','".$_POST['sipserver']."',SIP_CONTACT".($i*2)."_SERVER)";
			}
			if($_POST['sipproxy'])
			{
				$sql.=",SIP_CONTACT0_PROXY=if(SIP_FXS_CONFIG_MODE ='LINE_MODE',SIP_CONTACT0_PROXY,'".$_POST['sipproxy']."')";
				for($i=1;$i<=$row['FXSPORT'];$i++)
					$sql.=",SIP_CONTACT".($i*2)."_PROXY=if(SIP_FXS_CONFIG_MODE ='LINE_MODE','".$_POST['sipproxy']."',SIP_CONTACT".($i*2)."_PROXY)";
			}
			if($_POST['dial_plan'])
			{
				$prefix=$_POST['dial_plan'];
				//$sql.=",SIP_PREFIX=if(SIP_FXS_CONFIG_MODE ='LINE_MODE',SIP_PREFIX,'".$prefix."')";
				for($i=1;$i<=$row['FXSPORT'];$i++){
					$sql.=",S".$i."_DIGIT_MAP=if(SIP_FXS_CONFIG_MODE!='LINE_MODE',S".$i."_DIGIT_MAP,'".$prefix."')";
				}
			}
			//WriteErrMsg("<br><li></li>".$sql);
			if($_POST['relayserver'])
			{
				$sql.=",SIP_RELAY_SERVER=if(ENDPOINT_TYPE='H323',SIP_RELAY_SERVER,if(SIP_RELAY_SERVER!='".$_POST['rserver']."',SIP_RELAY_SERVER,'".$_POST['relayserver']."'))";
				$sql.=",MG_RELAY_SERVER=if(MG_RELAY_SERVER!='".$_POST['rserver']."',MG_RELAY_SERVER,'".$_POST['relayserver']."')";				
			}
			if($_POST['relayport'])
			{
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