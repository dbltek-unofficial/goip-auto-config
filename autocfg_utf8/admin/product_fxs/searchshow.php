<?php
				$row1['SN'] = $row['SN'];
				$row1['USER'] = $row['USER'];
				//$row1['ENDPOINT_TYPE'] = $row['ENDPOINT_TYPE'];
				$row1['updatetime'] = $row['updatetime'];
				$row1['classname'] = $row['classname'];
				$row1['classid'] = $row['classid'];
				$row1['chanpinid'] = $row['chanpinid'];
				$row1["ENDPOINT_TYPE"] = $row["ENDPOINT_TYPE"];
				
			if($row["ENDPOINT_TYPE"] == "H323"){
				$row1["CONFIG_MODE"] = $row["H323_CONFIG_MODE"];
				if($show=="relayserver"){
				  if($row["H323_RELAY_SERVER"]==$relayserver ){
					if(!$row1["relayserver"])
						$row1["relayserver"] = $row["H323_RELAY_SERVER"]."...";	
					if (!isset($row1['relayservertitle']))	
						$row1['relayservertitle'] = "";	
					$row1['relayservertitle'] .= "H323_RELAY_SERVER :$relayserver";
				  }
				} else 	{
					$row1["relayserver"] = $row["H323_RELAY_SERVER"]."...";	
					$row1['relayservertitle'] = "H323_RELAY_SERVER :".$row['H323_RELAY_SERVER'];
				}
			if($row["H323_CONFIG_MODE"]=="LINE_MODE"){
				$row1['h323gk'] = $row['H323_LINE1_GKADDR']."(L1)...";
				$row1['h323gktitle'] = "L1:".$row['H323_LINE1_GKADDR'];
				$row1['h323id'] = $row['H323_LINE1_H323_ID']."(L1)...";
				$row1['h323idtitle'] = "L1:".$row['H323_LINE1_H323_ID'];
				for($i=2;$i<=$row['TELPORT'];$i++){
					$row1['h323gktitle'] .= "\nL".$i.":".$row["H323_LINE".$i."_GKADDR"];
					$row1['h323idtitle'] .= "\nL".$i.":".$row["H323_LINE".$i."_H323_ID"];
				}
					//WriteErrMsg($row['h323gktitle']);	
			}
			else {
				$row1['h323gk'] = $row['H323_GK_ADDR'];
				$row1['h323id'] = $row['H323_ID'];
			}
			}
			else if($row["ENDPOINT_TYPE"] == "SIP"){
				$row1["CONFIG_MODE"] = $row["SIP_CONFIG_MODE"];
				//$row["relayserver"] = $row["SIP_RELAY_SERVER"];
				if($show=="relayserver"){				
				  if($row["SIP_RELAY_SERVER"]==$relayserver ){
					$row1["relayserver"] = $relayserver."...";	
					if (!isset($row1['relayservertitle']))	
						$row1['relayservertitle'] = "";	
					$row1['relayservertitle'] .= "SIP_RELAY_SERVER :$relayserver";
				  }
				}
				else {
					$row1["relayserver"] = $row["SIP_RELAY_SERVER"]."...";
					if (!isset($row1['relayservertitle']))	
						$row1['relayservertitle'] = "";	
					$row1['relayservertitle'] .= "SIP_RELAY_SERVER :".$row['SIP_RELAY_SERVER'];
				}		
				//$row['relayservertitle'] = "SIP_RELAY_SERVER :$relayserve\nMG_RELAY_SERVER :$relayserve";
			
			if($row["SIP_CONFIG_MODE"]=="LINE_MODE"){
				$row1['sipserver'] = $row['SIP_CONTACT0_SERVER']."(L1)...";				
				$row1['sipservertitle'] = "L1:".$row['SIP_CONTACT0_SERVER'];
				$row1['sipid'] = $row['SIP_CONTACT0_LOGIN']."(L1)...";
				$row1['sipidtitle'] = "L1:".$row['SIP_CONTACT0_LOGIN'];
				
				for($i=1;$i<$row['TELPORT'];$i++){
					$j=$i+1;
					$row1['sipservertitle'] .= "\nL".$j.":".$row["SIP_CONTACT".$i."_SERVER"];
					$row1['sipidtitle'] .= "\nL".$j.":".$row["SIP_CONTACT".$i."_LOGIN"];
				}	//WriteErrMsg($row['h323gktitle']);	
			}
			else {
				$row1['sipserver'] = $row['SIP_REGISTRAR'];
				$row1['sipid'] = $row['SIP_AUTH_ID'];
			}	
			}	
			if($show=="relayserver"){		
				if( $row["MG_RELAY_SERVER"]==$relayserver){
					if(!$row1["relayserver"])
						$row1["relayserver"] = $row["MG_RELAY_SERVER"]."...";
					if (!isset($row1['relayservertitle']))	
						$row1['relayservertitle'] = "";	
					$row1['relayservertitle'] .= "\nMG_RELAY_SERVER :$relayserver";
				}
			}
			else {
					//$row["relayserver"] = $row["MG_RELAY_SERVER"]."...";
					if (!isset($row1['relayservertitle']))	
						$row1['relayservertitle'] = "";	
					$row1['relayservertitle'] .= "\nMG_RELAY_SERVER :".$row['MG_RELAY_SERVER'];
			}	
			$row=$row1;		
			unset($row1);
?>