<?php
				$row["CONFIG_MODE"] = "SINGLE_MODE";
				if($row["ENDPOINT_TYPE"] == "H323"){
					$row['h323gk'] = $row['H323_GK_ADDR'];
					$row['h323id'] = $row['H323_ID'];				
					$row['relayserver'] = $row["H323_RELAY_SERVER"];
					$row['relayservertitle'] = "H323_RELAY_SERVER :".$row["H323_RELAY_SERVER"]."\nMG_RELAY_SERVER :".$row["MG_RELAY_SERVER"];
				}
				else if($row["ENDPOINT_TYPE"] == "SIP"){
					$row['sipserver'] = $row['SIP_REGISTRAR'];
					$row['sipid'] = $row['SIP_PHONE_AUTH_ID'];
					$row['relayserver'] = $row["SIP_RELAY_SERVER"];
					$row['relayservertitle'] = "SIP_RELAY_SERVER :".$row["SIP_RELAY_SERVER"]."\nMG_RELAY_SERVER :".$row["MG_RELAY_SERVER"];
				}
?>
