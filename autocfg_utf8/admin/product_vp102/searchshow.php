<?php
				
				$row1['SN'] = $row['SN'];
				$row1['USER'] = $row['USER'];
				$row1['ENDPOINT_TYPE'] = $row['ENDPOINT_TYPE'];
				$row1['updatetime'] = $row['updatetime'];
				$row1['classname'] = $row['classname'];
				$row1['classid'] = $row['classid'];
				$row1['chanpinid'] = $row['chanpinid'];
				$row1["CONFIG_MODE"] = "SINGLE_MODE";
				
				if($row["ENDPOINT_TYPE"] == "H323"){
					$row1['h323gk'] = $row['H323_GK_ADDR'];
					$row1['h323id'] = $row['H323_ID'];
					if($show=="relayserver" && $row["H323_RELAY_SERVER"]==$relayserver){
						$row1['relayservertitle'] = "H323_RELAY_SERVER :".$row["H323_RELAY_SERVER"];
					}
					else {
						$row1['relayserver'] = $row["H323_RELAY_SERVER"]."...";
						$row1['relayservertitle'] = "H323_RELAY_SERVER :".$row["H323_RELAY_SERVER"];
					}
				}
				else if($row["ENDPOINT_TYPE"] == "SIP"){
					$row1['sipserver'] = $row['SIP_REGISTRAR'];
					$row1['sipid'] = $row['SIP_PHONE_AUTH_ID'];
					if($show=="relayserver" && $row["SIP_RELAY_SERVER"]==$relayserver){
						$row1['relayservertitle'] = "SIP_RELAY_SERVER :".$row["SIP_RELAY_SERVER"];
					}
					else {
						$row1['relayserver'] = $row["SIP_RELAY_SERVER"]."...";
						$row1['relayservertitle'] = "SIP_RELAY_SERVER :".$row["SIP_RELAY_SERVER"];
					}
				}
				if($show=="relayserver"){
					$row1["relayserver"] = $relayserver."...";
					if( $row["MG_RELAY_SERVER"]==$relayserver){
						$row1['relayservertitle'] .= "\nMG_RELAY_SERVER :$relayserver";
					}
				}
				else {
					//$row["relayserver"] = $row["MG_RELAY_SERVER"]."...";
					$row1['relayservertitle'] .= "\nMG_RELAY_SERVER :".$row['MG_RELAY_SERVER'];
				}
			$row=$row1;		
			unset($row1);
?>