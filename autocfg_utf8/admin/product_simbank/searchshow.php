<?php
				
				$row1['SN'] = $row['SN'];
				$row1['USER'] = $row['USER'];
				$row1['ENDPOINT_TYPE'] = "\\";
				$row1['updatetime'] = $row['updatetime'];
				$row1['classname'] = $row['classname'];
				$row1['classid'] = $row['classid'];
				$row1['chanpinid'] = $row['chanpinid'];
				$row1["CONFIG_MODE"] = "\\";
				
				
					$row1['h323gk'] = "\\";
					$row1['h323id'] = "\\";
					if($show=="relayserver" && $row["H323_RELAY_SERVER"]==$relayserver){
						$row1['relayservertitle'] = "\\";
					}
					else {
						$row1['relayserver'] = "\\";
						$row1['relayservertitle'] = "\\";
					}
				
					
					$row1['sipserver'] = "\\";
					$row1['sipid'] = "\\";
					if($show=="relayserver" && $row["SIP_RELAY_SERVER"]==$relayserver){
						$row1['relayservertitle'] = "\\";
					}
					else {
						$row1['relayserver'] = "\\";
						$row1['relayservertitle'] = "\\";
					}
				
				if($show=="relayserver"){
					$row1["relayserver"] = "\\";
					if( $row["MG_RELAY_SERVER"]==$relayserver){
						$row1['relayservertitle'] .= "\\";
					}
				}
				else {
					//$row["relayserver"] = $row["MG_RELAY_SERVER"]."...";
					$row1['relayservertitle'] .= "\\";
				}
			$row=$row1;		
			unset($row1);
?>