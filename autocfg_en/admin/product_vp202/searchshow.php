<?php
				
				$row1['SN'] = $row['SN'];
				$row1['USER'] = $row['USER'];
				$row1['ENDPOINT_TYPE'] = "SIP";
				$row1['updatetime'] = $row['updatetime'];
				$row1['classname'] = $row['classname'];
				$row1['classid'] = $row['classid'];
				$row1['chanpinid'] = $row['chanpinid'];
				$row1["CONFIG_MODE"] = "";

				$row1['sipserver'] = $row['SIP_CONTACT2_SERVER']."(L1)...";
                        	$row1['sipservertitle'] = "L1:".$row['SIP_CONTACT2_SERVER']."\nL2:".$row['SIP_CONTACT3_SERVER'];
				$row1['sipid'] = $row['SIP_CONTACT0_LOGIN'].'(L1)...';
                        	$row1['sipidtitle'] = "L1:".$row['SIP_CONTACT0_LOGIN']."\nL2:".$row['SIP_CONTACT0_LOGIN_2'];
					if($show=="relayserver" && $row["SIP_RELAY_SERVER"]==$relayserver){
						$row1['relayservertitle'] = "SIP_RELAY_SERVER :".$row["SIP_RELAY_SERVER"];
					}
					else {
						$row1['relayserver'] = $row["SIP_RELAY_SERVER"]."...";
						$row1['relayservertitle'] = "SIP_RELAY_SERVER :".$row["SIP_RELAY_SERVER"];
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
