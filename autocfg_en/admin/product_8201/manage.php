<?php
		$row['ENDPOINT_TYPE']='SIP';

				
		if($row['SIP_WORK_MODE']=='BSVR'){
			$row["CONFIG_MODE"] = 'Single';
			$row['sipserver'] = $row['SIP_CONTACT0_SERVER'];
			$row['sipid'] = $row['SIP_CONTACT0_LOGIN'].'(L1)...';
			$row['sipidtitle'] = 'L1:'.$row['SIP_CONTACT0_LOGIN'].'\nL2:'.$row['SIP_CONTACT0_LOGIN_2'].'\nL3:'.$row['SIP_CONTACT0_LOGIN_3'].'\n42:'.$row['SIP_CONTACT0_LOGIN_4'];
		}
		else if($row['SIP_WORK_MODE']=='MSVR'){
			$row["CONFIG_MODE"] = 'Multiple';
			$row['sipserver'] = $row['SIP_CONTACT2_SERVER']."(L1)...";				
			$row['sipservertitle'] = "L1:".$row['SIP_CONTACT2_SERVER']."\nL2:".$row['SIP_CONTACT3_SERVER']."\nL3:".$row['SIP_CONTACT4_SERVER']."\nL4:".$row['SIP_CONTACT5_SERVER'];
			$row['sipid'] = $row['SIP_CONTACT2_LOGIN']."(L1)...";
			$row['sipidtitle'] = "L1:".$row['SIP_CONTACT2_LOGIN']."\nL2:".$row['SIP_CONTACT3_LOGIN']."\nL2:".$row['SIP_CONTACT3_LOGIN']."\nL2:".$row['SIP_CONTACT3_LOGIN'];
				
		}
		

		$row["relayserver"] = $row["SIP_RELAY_SERVER"]."...";
		$row['relayservertitle'] .= "SIP_RELAY_SERVER :".$row['SIP_RELAY_SERVER'];
		$row['relayservertitle'] .= "\nMG_RELAY_SERVER :".$row['MG_RELAY_SERVER'];
	
?>
