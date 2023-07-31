<?php
				$row["CONFIG_MODE"] = $row["SIP_FXS_CONFIG_MODE"];
				//$row["relayserver"] = $row["SIP_RELAY_SERVER"];

					$row["relayserver"] = $row["SIP_RELAY_SERVER"]."...";
					$row['relayservertitle'] .= "SIP_RELAY_SERVER :".$row['SIP_RELAY_SERVER'];
						
				//$row['relayservertitle'] = "SIP_RELAY_SERVER :$relayserve\nMG_RELAY_SERVER :$relayserve";
			
			if($row["SIP_FXS_CONFIG_MODE"]=="LINE_MODE"){
				$row['sipserver'] = $row['SIP_CONTACT2_SERVER']."(L1)...";				
				$row['sipservertitle'] = "L1:".$row['SIP_CONTACT2_SERVER'];
				$row['sipid'] = $row['SIP_CONTACT2_LOGIN']."(L1)...";
				$row['sipidtitle'] = "L1:".$row['SIP_CONTACT2_LOGIN'];
				
				for($i=2;$i<=$row['FXSPORT'];$i++){
					//$j=$i+1;
					$row['sipservertitle'] .= "\nL".$i.":".$row["SIP_CONTACT".($i*2)."_SERVER"];
					$row['sipidtitle'] .= "\nL".$i.":".$row["SIP_CONTACT".($i*2)."_LOGIN"];
				}	//WriteErrMsg($row['h323gktitle']);	
			}
			else {
				$row['sipserver'] = $row['SIP_CONTACT0_SERVER'];
				$row['sipid'] = $row['SIP_CONTACT0_LOGIN'];
			}	


					//$row["relayserver"] = $row["MG_RELAY_SERVER"]."...";
					$row['relayservertitle'] .= "\nMG_RELAY_SERVER :".$row['MG_RELAY_SERVER'];
					
/*
			if($row["ENDPOINT_TYPE"] == "H323"){
				$row["CONFIG_MODE"] = $row["H323_CONFIG_MODE"];
				$row["relayserver"] = $row["H323_RELAY_SERVER"];
				$row['relayservertitle'] = "H323_RELAY_SERVER :".$row["H323_RELAY_SERVER"]."\nMG_RELAY_SERVER :".$row["MG_RELAY_SERVER"];
			if($row["H323_CONFIG_MODE"]=="LINE_MODE"){
				$row['h323gk'] = $row['H323_LINE1_GKADDR']."(L1)...";
				$row['h323gktitle'] = "L1:".$row['H323_LINE1_GKADDR'];
				$row['h323id'] = $row['H323_LINE1_H323_ID']."(L1)...";
				$row['h323idtitle'] = "L1:".$row['H323_LINE1_H323_ID'];
				for($i=2;$i<=$row['TELPORT'];$i++){
					$row['h323gktitle'] .= "\nL".$i.":".$row["H323_LINE".$i."_GKADDR"];
					$row['h323idtitle'] .= "\nL".$i.":".$row["H323_LINE".$i."_H323_ID"];
				}
					//WriteErrMsg($row['h323gktitle']);	
			}
			else {
				$row['h323gk'] = $row['H323_GK_ADDR'];
				$row['h323id'] = $row['H323_ID'];
			}
			}
			else if($row["ENDPOINT_TYPE"] == "SIP"){
				$row["CONFIG_MODE"] = $row["SIP_CONFIG_MODE"];
				$row["relayserver"] = $row["SIP_RELAY_SERVER"];
				$row['relayservertitle'] = "SIP_RELAY_SERVER :".$row["SIP_RELAY_SERVER"]."\nMG_RELAY_SERVER :".$row["MG_RELAY_SERVER"];
			if($row["SIP_CONFIG_MODE"]=="LINE_MODE"){
				$row['sipserver'] = $row['SIP_CONTACT0_SERVER']."(L1)...";				
				$row['sipservertitle'] = "L1:".$row['SIP_CONTACT0_SERVER'];
				$row['sipid'] = $row['SIP_CONTACT0_LOGIN']."(L1)...";
				$row['sipidtitle'] = "L1:".$row['SIP_CONTACT0_LOGIN'];
				
				for($i=1;$i<$row['TELPORT'];$i++){
					$j=$i+1;
					$row['sipservertitle'] .= "\nL".$j.":".$row["SIP_CONTACT".$i."_SERVER"];
					$row['sipidtitle'] .= "\nL".$j.":".$row["SIP_CONTACT".$i."_LOGIN"];
				}	//WriteErrMsg($row['h323gktitle']);	
			}
			else {
				$row['sipserver'] = $row['SIP_REGISTRAR'];
				$row['sipid'] = $row['SIP_AUTH_ID'];
			}	
			}	//$row["ENDPOINT_TYPE"] == "SIP"		
			//WriteErrMsg($row['h323gktitle']);	
*/	
?>