<?php
				//$row["CONFIG_MODE"] = "SINGLE_MODE";
$row['ENDPOINT_TYPE']='SIP'; 
                       $row['sipserver'] = $row['SIP_CONTACT2_SERVER']."(L1)...";
                        $row['sipservertitle'] = "L1:".$row['SIP_CONTACT2_SERVER']."\nL2:".$row['SIP_CONTACT3_SERVER'];
                        $row['sipid'] = $row['SIP_CONTACT2_LOGIN']."(L1)...";
                        $row['sipidtitle'] = "L1:".$row['SIP_CONTACT2_LOGIN']."\nL2:".$row['SIP_CONTACT3_LOGIN'];



                $row["relayserver"] = $row["SIP_RELAY_SERVER"]."...";
                $row['relayservertitle'] .= "SIP_RELAY_SERVER :".$row['SIP_RELAY_SERVER'];
                $row['relayservertitle'] .= "\nMG_RELAY_SERVER :".$row['MG_RELAY_SERVER'];
?>
