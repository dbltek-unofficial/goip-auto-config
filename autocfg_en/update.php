<?php
	define("OK", true);
	require_once('inc/conn.inc.php');
	require_once('inc/conn.php');
	//echo "update start";

        /*v2.04 201010*/
        $chan=$db->query("SELECT chanpin,muban FROM ".$tablepre."projectclass where type in ('fxs', 'fxsp', 'fxsg', 'fxo', 'fxso', 'htm', 'goip', '4goip', 'vp102', 'vp202')");
        while($class=$db->fetch_array($chan)) {
                @$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `ECM_CRYPT_KEY` VARCHAR( 80 ) NOT NULL ");
                @$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `ECM_CRYPT_KEY` VARCHAR( 80 ) NOT NULL ");
        }
	
	/*v2.03.1 201009*/
	$chan=$db->query("SELECT chanpin,muban FROM ".$tablepre."projectclass where type='goip'");
        while($class=$db->fetch_array($chan)) {
                @$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `L1_SIM_EXP_UNIT` VARCHAR( 80 ) NOT NULL AFTER `L1_SIM_EXP`");
		@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `L1_SIM_EXP_UNIT` VARCHAR( 80 ) NOT NULL AFTER `L1_SIM_EXP`");
		@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `CALLER_ANONYMOUS` VARCHAR( 80 ) NOT NULL ");
                @$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `CALLER_ANONYMOUS` VARCHAR( 80 ) NOT NULL ");
        }

        $chan=$db->query("SELECT chanpin,muban FROM ".$tablepre."projectclass where type='4goip'");
        while($class=$db->fetch_array($chan)) {
                @$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `L1_SIM_EXP_UNIT` VARCHAR( 80 ) NOT NULL");
                @$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `L1_SIM_EXP_UNIT` VARCHAR( 80 ) NOT NULL");
                @$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `L2_SIM_EXP_UNIT` VARCHAR( 80 ) NOT NULL");
                @$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `L2_SIM_EXP_UNIT` VARCHAR( 80 ) NOT NULL");
                @$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `L3_SIM_EXP_UNIT` VARCHAR( 80 ) NOT NULL");
                @$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `L3_SIM_EXP_UNIT` VARCHAR( 80 ) NOT NULL");
                @$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `L4_SIM_EXP_UNIT` VARCHAR( 80 ) NOT NULL");
                @$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `L4_SIM_EXP_UNIT` VARCHAR( 80 ) NOT NULL");

                @$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `L1_CALLER_ANONYMOUS` VARCHAR( 80 ) NOT NULL ");
                @$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `L1_CALLER_ANONYMOUS` VARCHAR( 80 ) NOT NULL ");
                @$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `L2_CALLER_ANONYMOUS` VARCHAR( 80 ) NOT NULL ");
                @$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `L2_CALLER_ANONYMOUS` VARCHAR( 80 ) NOT NULL ");
                @$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `L3_CALLER_ANONYMOUS` VARCHAR( 80 ) NOT NULL ");
                @$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `L3_CALLER_ANONYMOUS` VARCHAR( 80 ) NOT NULL ");
                @$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `L4_CALLER_ANONYMOUS` VARCHAR( 80 ) NOT NULL ");
                @$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `L4_CALLER_ANONYMOUS` VARCHAR( 80 ) NOT NULL ");
                @$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `L5_CALLER_ANONYMOUS` VARCHAR( 80 ) NOT NULL ");
                @$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `L5_CALLER_ANONYMOUS` VARCHAR( 80 ) NOT NULL ");
                @$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `L6_CALLER_ANONYMOUS` VARCHAR( 80 ) NOT NULL ");
                @$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `L6_CALLER_ANONYMOUS` VARCHAR( 80 ) NOT NULL ");
                @$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `L7_CALLER_ANONYMOUS` VARCHAR( 80 ) NOT NULL ");
                @$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `L7_CALLER_ANONYMOUS` VARCHAR( 80 ) NOT NULL ");
                @$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `L8_CALLER_ANONYMOUS` VARCHAR( 80 ) NOT NULL ");
                @$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `L8_CALLER_ANONYMOUS` VARCHAR( 80 ) NOT NULL ");
        }
	/*v2.03*/
	$chan=$db->query("SELECT chanpin,muban FROM ".$tablepre."projectclass");
	while($class=$db->fetch_array($chan)) {
		@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `AUTOCFG_KEY` VARCHAR( 80 ) NOT NULL AFTER `SN`");
		@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `AUTOCFG_KEY` VARCHAR( 80 ) NOT NULL AFTER `muban`");
	}

	/*2.05.2*/


        $chan=$db->query("SELECT chanpin,muban FROM ".$tablepre."projectclass");
        while($class=$db->fetch_array($chan)) {
                @$db->updatequery("ALTER TABLE `".$class[chanpin]."` change `AUTOCFG_SERVER` `AUTOCFG_SERVER` varchar(100) NOT NULL");
		@$db->updatequery("ALTER TABLE `".$class[muban]."` change `AUTOCFG_SERVER` `AUTOCFG_SERVER` varchar(100) NOT NULL");
        }

	/*2.06  add RADMIN_ENABLE */
        $chan=$db->query("SELECT chanpin,muban FROM ".$tablepre."projectclass");
        while($class=$db->fetch_array($chan)) {
		@$rs=$db->fetch_array($db->query("DESC ".$class[chanpin]." `RADMIN_ENABLE`"));
		if(!$rs[0]){
                	@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `RADMIN_ENABLE` VARCHAR( 80 ) NOT NULL AFTER `AUTOCFG_REFRESH`");
		
			@$db->updatequery("update `".$class[chanpin]."` set `RADMIN_ENABLE`='1' where 1");
		}
		@$rs=$db->fetch_array($db->query("DESC ".$class[muban]." `RADMIN_ENABLE`"));
		if(!$rs[0]){
                	@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `RADMIN_ENABLE` VARCHAR( 80 ) NOT NULL AFTER `AUTOCFG_REFRESH`");
			@$db->updatequery("update `".$class[muban]."` set `RADMIN_ENABLE`='1' where 1");
		}
        }


	/*2.2  add RMSIM */
	$chan=$db->query("SELECT chanpin,muban FROM ".$tablepre."projectclass where type in ('goip', '4goip', '8goip')");
	while($class=$db->fetch_array($chan)) {
		@$rs=$db->fetch_array($db->query("DESC ".$class[chanpin]." `RMSIM_ENABLE`"));
		if (!$rs[0]) {
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `RMSIM_ENABLE` VARCHAR( 80 ) NOT NULL AFTER `RADMIN_ENABLE`");
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SMB_SVR` VARCHAR( 80 ) NOT NULL AFTER `RADMIN_ENABLE`");
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SMB_ID` VARCHAR( 80 ) NOT NULL AFTER `RADMIN_ENABLE`");
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SMB_KEY` VARCHAR( 80 ) NOT NULL AFTER `RADMIN_ENABLE`");
		}
		@$rs=$db->fetch_array($db->query("DESC ".$class[muban]." `RMSIM_ENABLE`"));
		if (!$rs[0]) {
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `RMSIM_ENABLE` VARCHAR( 80 ) NOT NULL AFTER `RADMIN_ENABLE`");
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SMB_SVR` VARCHAR( 80 ) NOT NULL AFTER `RADMIN_ENABLE`");
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SMB_ID` VARCHAR( 80 ) NOT NULL AFTER `RADMIN_ENABLE`");
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SMB_KEY` VARCHAR( 80 ) NOT NULL AFTER `RADMIN_ENABLE`");
		}
	}
	
	@$db->updatequery("ALTER TABLE ms_admin ADD `Lang` INT default 1  AFTER `Info`");
	
	/*3.2  add RMSIM */
	$chan=$db->query("SELECT chanpin,muban FROM ".$tablepre."projectclass where type in ('8goip')");
	while($class=$db->fetch_array($chan)) {
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_CONTACT20_DIAL_DIGITS` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_CONTACT20_DISPLAY_NAME` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_CONTACT20_GW_PREFIX` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_CONTACT20_PROXY` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_CONTACT20_SERVER` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_CONTACT20_REGISTER_EXPIRED` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_CONTACT20_OUTBOUND_PROXY` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_CONTACT20_HOME_DOMAIN` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_CONTACT20_LOGIN` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_CONTACT20_PASSWD` VARCHAR( 65 ) NOT NULL");
			
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_CONTACT21_DIAL_DIGITS` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_CONTACT21_DISPLAY_NAME` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_CONTACT21_GW_PREFIX` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_CONTACT21_PROXY` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_CONTACT21_SERVER` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_CONTACT21_REGISTER_EXPIRED` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_CONTACT21_OUTBOUND_PROXY` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_CONTACT21_HOME_DOMAIN` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_CONTACT21_LOGIN` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_CONTACT21_PASSWD` VARCHAR( 65 ) NOT NULL");
			
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_CONTACT22_DIAL_DIGITS` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_CONTACT22_DISPLAY_NAME` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_CONTACT22_GW_PREFIX` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_CONTACT22_PROXY` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_CONTACT22_SERVER` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_CONTACT22_REGISTER_EXPIRED` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_CONTACT22_OUTBOUND_PROXY` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_CONTACT22_HOME_DOMAIN` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_CONTACT22_LOGIN` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_CONTACT22_PASSWD` VARCHAR( 65 ) NOT NULL");
			
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_CONTACT23_DIAL_DIGITS` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_CONTACT23_DISPLAY_NAME` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_CONTACT23_GW_PREFIX` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_CONTACT23_PROXY` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_CONTACT23_SERVER` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_CONTACT23_REGISTER_EXPIRED` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_CONTACT23_OUTBOUND_PROXY` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_CONTACT23_HOME_DOMAIN` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_CONTACT23_LOGIN` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_CONTACT23_PASSWD` VARCHAR( 65 ) NOT NULL");
			
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_L1_G` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_L2_G` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_L3_G` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_L4_G` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_L5_G` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_L6_G` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_L7_G` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[chanpin]."` ADD `SIP_L8_G` VARCHAR( 65 ) NOT NULL");

			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_CONTACT20_DIAL_DIGITS` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_CONTACT20_DISPLAY_NAME` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_CONTACT20_GW_PREFIX` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_CONTACT20_PROXY` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_CONTACT20_SERVER` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_CONTACT20_REGISTER_EXPIRED` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_CONTACT20_OUTBOUND_PROXY` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_CONTACT20_HOME_DOMAIN` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_CONTACT20_LOGIN` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_CONTACT20_PASSWD` VARCHAR( 65 ) NOT NULL");
			
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_CONTACT21_DIAL_DIGITS` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_CONTACT21_DISPLAY_NAME` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_CONTACT21_GW_PREFIX` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_CONTACT21_PROXY` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_CONTACT21_SERVER` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_CONTACT21_REGISTER_EXPIRED` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_CONTACT21_OUTBOUND_PROXY` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_CONTACT21_HOME_DOMAIN` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_CONTACT21_LOGIN` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_CONTACT21_PASSWD` VARCHAR( 65 ) NOT NULL");
			
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_CONTACT22_DIAL_DIGITS` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_CONTACT22_DISPLAY_NAME` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_CONTACT22_GW_PREFIX` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_CONTACT22_PROXY` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_CONTACT22_SERVER` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_CONTACT22_REGISTER_EXPIRED` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_CONTACT22_OUTBOUND_PROXY` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_CONTACT22_HOME_DOMAIN` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_CONTACT22_LOGIN` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_CONTACT22_PASSWD` VARCHAR( 65 ) NOT NULL");
			
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_CONTACT23_DIAL_DIGITS` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_CONTACT23_DISPLAY_NAME` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_CONTACT23_GW_PREFIX` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_CONTACT23_PROXY` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_CONTACT23_SERVER` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_CONTACT23_REGISTER_EXPIRED` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_CONTACT23_OUTBOUND_PROXY` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_CONTACT23_HOME_DOMAIN` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_CONTACT23_LOGIN` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_CONTACT23_PASSWD` VARCHAR( 65 ) NOT NULL");
			
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_L1_G` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_L2_G` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_L3_G` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_L4_G` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_L5_G` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_L6_G` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_L7_G` VARCHAR( 65 ) NOT NULL");
			@$db->updatequery("ALTER TABLE `".$class[muban]."` ADD `SIP_L8_G` VARCHAR( 65 ) NOT NULL");
			
	}
	
	/*3.3 modify 32G product error*/
	echo "V3.3 update done!   <a href=''  target=_top>Return</a> ";
?>
