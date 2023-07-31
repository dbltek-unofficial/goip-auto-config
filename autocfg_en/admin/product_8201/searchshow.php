<?php

				
				$row['ENDPOINT_TYPE']='SIP';
				$row1['SN'] = $row['SN'];
				$row1['USER'] = $row['USER'];
				$row1['ENDPOINT_TYPE'] = $row['ENDPOINT_TYPE'];
				$row1['updatetime'] = $row['updatetime'];
				$row1['classname'] = $row['classname'];
				$row1['classid'] = $row['classid'];
				$row1['chanpinid'] = $row['chanpinid'];
				//$row1["CONFIG_MODE"] = $row["CONFIG_MODE"];
				
		if($row['SIP_WORK_MODE']=='BSVR'){
			$row1["CONFIG_MODE"] = 'Single';
			$row1['sipserver'] = $row['SIP_CONTACT0_SERVER'];
			$row1['sipid'] = $row['SIP_CONTACT0_LOGIN'].'(L1)...';
			$row1['sipidtitle'] = "L1:".$row['SIP_CONTACT0_LOGIN']."\nL2:".$row['SIP_CONTACT0_LOGIN_2']."\nL3:".$row['SIP_CONTACT0_LOGIN_3']."\nL4:".$row['SIP_CONTACT0_LOGIN_4'];
		}
		else if($row['SIP_WORK_MODE']=='MSVR'){
			$row1["CONFIG_MODE"] = 'Multiple';
			$row1['sipserver'] = $row['SIP_CONTACT2_SERVER']."(L1)...";				
			$row1['sipservertitle'] = "L1:".$row['SIP_CONTACT2_SERVER']."\nL2:".$row['SIP_CONTACT3_SERVER']."\nL3:".$row['SIP_CONTACT4_SERVER']."\nL4:".$row['SIP_CONTACT5_SERVER'];
			$row1['sipid'] = $row['SIP_CONTACT2_LOGIN']."(L1)...";
			$row1['sipidtitle'] = "L1:".$row['SIP_CONTACT2_LOGIN']."\nL2:".$row['SIP_CONTACT3_LOGIN']."\nL2:".$row['SIP_CONTACT3_LOGIN']."\nL2:".$row['SIP_CONTACT3_LOGIN'];
				
		}
		
				if($show=="relayserver"){				
				  if($row["SIP_RELAY_SERVER"]==$relayserver ){
					$row1["relayserver"] = $relayserver."...";	
					$row1['relayservertitle'] .= "SIP_RELAY_SERVER :$relayserver";
				  }
				}
				else {
					$row1["relayserver"] = $row["SIP_RELAY_SERVER"]."...";
					$row1['relayservertitle'] .= "SIP_RELAY_SERVER :".$row['SIP_RELAY_SERVER']."\nMG_RELAY_SERVER :".$row['SIP_RELAY_SERVER'];
				}	
			$row=$row1;		
			unset($row1);	
/*		
				if($row["ENDPOINT_TYPE"] == "H323"){
					$row['h323gk'] = $row['H323_GK_ADDR'];
					$row['h323id'] = $row['H323_ID'];
					if($show=="relayserver" && $row["H323_RELAY_SERVER"]==$relayserver){
						$row['relayservertitle'] = "H323_RELAY_SERVER :".$row["H323_RELAY_SERVER"];
					}
					else {
						$row['relayserver'] = $row["H323_RELAY_SERVER"]."...";
						$row['relayservertitle'] = "H323_RELAY_SERVER :".$row["H323_RELAY_SERVER"];
					}
				}
				else if($row["ENDPOINT_TYPE"] == "SIP"){
					$row['sipserver'] = $row['SIP_REGISTRAR'];
					$row['sipid'] = $row['SIP_AUTH_ID'];
					if($show=="relayserver" && $row["SIP_RELAY_SERVER"]==$relayserver){
						$row['relayservertitle'] = "SIP_RELAY_SERVER :".$row["SIP_RELAY_SERVER"];
					}
					else {
						$row['relayserver'] = $row["SIP_RELAY_SERVER"]."...";
						$row['relayservertitle'] = "SIP_RELAY_SERVER :".$row["SIP_RELAY_SERVER"];
					}
				}
				if($show=="relayserver"){
					$row["relayserver"] = $relayserver."...";
					if( $row["MG_RELAY_SERVER"]==$relayserver){
						$row['relayservertitle'] .= "\nMG_RELAY_SERVER :$relayserver";
					}
				}
				else {
					//$row["relayserver"] = $row["MG_RELAY_SERVER"]."...";
					$row['relayservertitle'] .= "\nMG_RELAY_SERVER :".$row['MG_RELAY_SERVER'];
				}
*/
?>