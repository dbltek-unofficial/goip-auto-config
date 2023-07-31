<?php 
 

  $values['ENDPOINT_TYPE'] = $_POST['endpoint_type'] ;
  $updatesql.=",ENDPOINT_TYPE='".$values['ENDPOINT_TYPE']."'"; 
  $values['orderid'] = $_POST['muban_orderid'] ;
  $updatesql.=",orderid='".$values['orderid']."'";

/*calling fxs*/
  $values['SIP_CONTACT0_DIAL_DIGITS'] = $_POST['sip_fxs_phone_number'] ;
  $updatesql.=",SIP_CONTACT0_DIAL_DIGITS='".$values['SIP_CONTACT0_DIAL_DIGITS']."'";
  $values['SIP_CONTACT0_DISPLAY_NAME'] = $_POST['sip_fxs_display_name'] ;
  $updatesql.=",SIP_CONTACT0_DISPLAY_NAME='".$values['SIP_CONTACT0_DISPLAY_NAME']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT0_PROXY'] = $_POST['sip_fxs_proxy'] ;
  $updatesql.=",SIP_CONTACT0_PROXY='".$values['SIP_CONTACT0_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT0_SERVER'] = $_POST['sip_fxs_registrar'] ;
  $updatesql.=",SIP_CONTACT0_SERVER='".$values['SIP_CONTACT0_SERVER']."'";
endif; 
  $values['SIP_CONTACT0_EXPIRED'] = $_POST['sip_fxs_register_expired'] ;
  $updatesql.=",SIP_CONTACT0_EXPIRED='".$values['SIP_CONTACT0_EXPIRED']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT0_OUTBOUND_PROXY'] = $_POST['sip_fxs_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT0_OUTBOUND_PROXY='".$values['SIP_CONTACT0_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT0_HOME_DOMAIN'] = $_POST['sip_fxs_home_domain'] ;
  $updatesql.=",SIP_CONTACT0_HOME_DOMAIN='".$values['SIP_CONTACT0_HOME_DOMAIN']."'";
  $values['SIP_CONTACT0_LOGIN'] = $_POST['sip_fxs_auth_id'] ;
  $updatesql.=",SIP_CONTACT0_LOGIN='".$values['SIP_CONTACT0_LOGIN']."'";
  $values['SIP_CONTACT0_PASSWD'] = $_POST['sip_fxs_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT0_PASSWD='".$values['SIP_CONTACT0_PASSWD']."'";
  $values['SIP_CONTACT0_FORWARD_TYPE'] = $_POST['sip_fxs_fwd_type'] ;
  $updatesql.=",SIP_CONTACT0_FORWARD_TYPE='".$values['SIP_CONTACT0_FORWARD_TYPE']."'";
  $values['SIP_CONTACT0_FORWARD_NUMBER'] = $_POST['sip_fxs_fwd_num'] ;
  $updatesql.=",SIP_CONTACT0_FORWARD_NUMBER='".$values['SIP_CONTACT0_FORWARD_NUMBER']."'";
  $values['SIP_FXS_USE_BSVR'] = $_POST['sip_fxs_backup_server']=='on'?'1':'0';
  $updatesql.=",SIP_FXS_USE_BSVR='".$values['SIP_FXS_USE_BSVR']."'";
if($values['SIP_FXS_USE_BSVR'] == 1):
  $values['SIP_CONTACT1_PROXY'] = $_POST['sip_fxs_backup_proxy'] ;
  $updatesql.=",SIP_CONTACT1_PROXY='".$values['SIP_CONTACT1_PROXY']."'";
  $values['SIP_CONTACT1_SERVER'] = $_POST['sip_fxs_backup_registrar'] ;
  $updatesql.=",SIP_CONTACT1_SERVER='".$values['SIP_CONTACT1_SERVER']."'";
  $values['SIP_CONTACT1_HOME_DOMAIN'] = $_POST['sip_fxs_backup_home_domain'] ;
  $updatesql.=",SIP_CONTACT1_HOME_DOMAIN='".$values['SIP_CONTACT1_HOME_DOMAIN']."'";
endif; 

/*calling fxo*/
  $values['SIP_CONTACT10_DIAL_DIGITS'] = $_POST['sip_fxo_phone_number'] ;
  $updatesql.=",SIP_CONTACT10_DIAL_DIGITS='".$values['SIP_CONTACT10_DIAL_DIGITS']."'";
  $values['SIP_CONTACT10_DISPLAY_NAME'] = $_POST['sip_fxo_display_name'] ;
  $updatesql.=",SIP_CONTACT10_DISPLAY_NAME='".$values['SIP_CONTACT10_DISPLAY_NAME']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT10_PROXY'] = $_POST['sip_fxo_proxy'] ;
  $updatesql.=",SIP_CONTACT10_PROXY='".$values['SIP_CONTACT10_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT10_SERVER'] = $_POST['sip_fxo_registrar'] ;
  $updatesql.=",SIP_CONTACT10_SERVER='".$values['SIP_CONTACT10_SERVER']."'";
endif; 
  $values['SIP_CONTACT10_EXPIRED'] = $_POST['sip_fxo_register_expired'] ;
  $updatesql.=",SIP_CONTACT10_EXPIRED='".$values['SIP_CONTACT10_EXPIRED']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT10_OUTBOUND_PROXY'] = $_POST['sip_fxo_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT10_OUTBOUND_PROXY='".$values['SIP_CONTACT10_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT10_HOME_DOMAIN'] = $_POST['sip_fxo_home_domain'] ;
  $updatesql.=",SIP_CONTACT10_HOME_DOMAIN='".$values['SIP_CONTACT10_HOME_DOMAIN']."'";
  $values['SIP_CONTACT10_LOGIN'] = $_POST['sip_fxo_auth_id'] ;
  $updatesql.=",SIP_CONTACT10_LOGIN='".$values['SIP_CONTACT10_LOGIN']."'";
  $values['SIP_CONTACT10_PASSWD'] = $_POST['sip_fxo_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT10_PASSWD='".$values['SIP_CONTACT10_PASSWD']."'";
  $values['SIP_FXO_USE_BSVR'] = $_POST['sip_fxo_backup_server']=='on'?'1':'0';
  $updatesql.=",SIP_FXO_USE_BSVR='".$values['SIP_FXO_USE_BSVR']."'";
if($values['SIP_FXO_USE_BSVR'] == 1):
  $values['SIP_CONTACT11_PROXY'] = $_POST['sip_fxo_backup_proxy'] ;
  $updatesql.=",SIP_CONTACT11_PROXY='".$values['SIP_CONTACT11_PROXY']."'";
  $values['SIP_CONTACT11_SERVER'] = $_POST['sip_fxo_backup_registrar'] ;
  $updatesql.=",SIP_CONTACT11_SERVER='".$values['SIP_CONTACT11_SERVER']."'";
  $values['SIP_CONTACT11_HOME_DOMAIN'] = $_POST['sip_fxo_backup_home_domain'] ;
  $updatesql.=",SIP_CONTACT11_HOME_DOMAIN='".$values['SIP_CONTACT11_HOME_DOMAIN']."'";
endif; 

/*h323*/
  $values['H323_PHONE_NUM'] = $_POST['h323_phone_number'] ;
  $updatesql.=",H323_PHONE_NUM='".$values['H323_PHONE_NUM']."'";
  $values['H323_DISPLAY_NAME'] = $_POST['display_name'] ;
  $updatesql.=",H323_DISPLAY_NAME='".$values['H323_DISPLAY_NAME']."'";
  $values['H323_ID'] = $_POST['h323_id'] ;
  $updatesql.=",H323_ID='".$values['H323_ID']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_GK_ADDR'] = $_POST['gk_addr'] ;
  $updatesql.=",H323_GK_ADDR='".$values['H323_GK_ADDR']."'";
endif; 
  $values['H323_VOS_ENABLE'] = $_POST['vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_VOS_ENABLE='".$values['H323_VOS_ENABLE']."'";
if($values['H323_VOS_ENABLE'] == 1):
  $values['H323_VOS_MODE'] = $_POST['vos_mod'] ;
  $updatesql.=",H323_VOS_MODE='".$values['H323_VOS_MODE']."'";
endif; 
  $values['H235_AUTH'] = $_POST['h235_auth']=='on'?'1':'0';
  $updatesql.=",H235_AUTH='".$values['H235_AUTH']."'";
if($values['H235_AUTH'] == 1):
  $values['H235_ID'] = $_POST['h235_id'] ;
  $updatesql.=",H235_ID='".$values['H235_ID']."'";
  $values['H235_PASSWD'] = $_POST['h235_passwd'] ;
  $updatesql.=",H235_PASSWD='".$values['H235_PASSWD']."'";
endif; 


  $values['H323_FXO_PHONE_NUM'] = $_POST['fxo_h323_phone_number'] ;
  $updatesql.=",H323_FXO_PHONE_NUM='".$values['H323_FXO_PHONE_NUM']."'";
  $values['H323_FXO_GW_PREFIX'] = $_POST['h323_gw_prefix'] ;
  $updatesql.=",H323_FXO_GW_PREFIX='".$values['H323_FXO_GW_PREFIX']."'";
  $values['H323_FXO_DISPLAY_NAME'] = $_POST['fxo_display_name'] ;
  $updatesql.=",H323_FXO_DISPLAY_NAME='".$values['H323_FXO_DISPLAY_NAME']."'";
  $values['H323_FXO_ID'] = $_POST['fxo_h323_id'] ;
  $updatesql.=",H323_FXO_ID='".$values['H323_FXO_ID']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_FXO_GK_ADDR'] = $_POST['fxo_gk_addr'] ;
  $updatesql.=",H323_FXO_GK_ADDR='".$values['H323_FXO_GK_ADDR']."'";
endif; 
  $values['H323_FXO_VOS_ENABLE'] = $_POST['fxo_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_FXO_VOS_ENABLE='".$values['H323_FXO_VOS_ENABLE']."'";
if($values['H323_FXO_VOS_ENABLE'] == 1):
  $values['H323_FXO_VOS_MODE'] = $_POST['fxo_vos_mod'] ;
  $updatesql.=",H323_FXO_VOS_MODE='".$values['H323_FXO_VOS_MODE']."'";
endif; 
  $values['H235_FXO_AUTH'] = $_POST['fxo_h235_auth']=='on'?'1':'0';
  $updatesql.=",H235_FXO_AUTH='".$values['H235_FXO_AUTH']."'";
if($values['H235_FXO_AUTH'] == 1):
  $values['H235_FXO_ID'] = $_POST['fxo_h235_id'] ;
  $updatesql.=",H235_FXO_ID='".$values['H235_FXO_ID']."'";
  $values['H235_FXO_PASSWD'] = $_POST['fxo_h235_passwd'] ;
  $updatesql.=",H235_FXO_PASSWD='".$values['H235_FXO_PASSWD']."'";
endif; 

/*sms*/
  $values['SMS_SENDER'] = $_POST['sms_sender']=='on'?'1':'0';
  $updatesql.=",SMS_SENDER='".$values['SMS_SENDER']."'";
if($values['SMS_SENDER'] == 1):
  $values['SMS_SERVER'] = $_POST['sms_server'] ;
  $updatesql.=",SMS_SERVER='".$values['SMS_SERVER']."'";
  $values['SMS_PORT'] = $_POST['sms_port'] ;
  $updatesql.=",SMS_PORT='".$values['SMS_PORT']."'";
  $values['SMS_CLI_ID'] = $_POST['sms_cli_id'] ;
  $updatesql.=",SMS_CLI_ID='".$values['SMS_CLI_ID']."'";
  $values['SMS_CLI_PASSWD'] = $_POST['sms_cli_passwd'] ;
  $updatesql.=",SMS_CLI_PASSWD='".$values['SMS_CLI_PASSWD']."'";
  $values['SMS_MSG_IGNATURE'] = $_POST['sms_message_ignature'] ;
  $updatesql.=",SMS_MSG_IGNATURE='".$values['SMS_MSG_IGNATURE']."'";
endif; 


/*fox-setting*/
  $values['L1_DISABLE_OUT'] = $_POST['line1_fw_to_pstn']=='on'?'0':'1';
  $updatesql.=",L1_DISABLE_OUT='".$values['L1_DISABLE_OUT']."'";
if($values['L1_DISABLE_OUT'] != 1):
  $values['L1_FW_NUM_TO_PSTN'] = $_POST['line1_fw_num_to_pstn'] ;
  $updatesql.=",L1_FW_NUM_TO_PSTN='".$values['L1_FW_NUM_TO_PSTN']."'";
  $values['L1_P_DIGIT_MAP'] = $_POST['line1_p_dial_plan'] ;
  $updatesql.=",L1_P_DIGIT_MAP='".$values['L1_P_DIGIT_MAP']."'";
  $values['L1_FW2PSTN_AUTH_MODE'] = $_POST['line1_fw2pstn_auth_mode'] ;
  $updatesql.=",L1_FW2PSTN_AUTH_MODE='".$values['L1_FW2PSTN_AUTH_MODE']."'";
if($values['L1_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L1_FW_TO_PSTN_PASSWD'] = $_POST['line1_fw_to_pstn_passwd'] ;
  $updatesql.=",L1_FW_TO_PSTN_PASSWD='".$values['L1_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L1_FW2PSTN_AUTH_MODE'] == 'PASSWD_TRUSTLIST'):
  $values['L1_FW_TO_PSTN_PASSWD'] = $_POST['l1_fw_to_pstn_passwd'] ;
  $updatesql.=",L1_FW_TO_PSTN_PASSWD='".$values['L1_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['L1_SIM_EXP'] = $_POST['line1_sim_exp'] ;
  $updatesql.=",L1_SIM_EXP='".$values['L1_SIM_EXP']."'";
  $values['L1_SIM_EXP_UNIT'] = $_POST['line1_sim_exp_unit'] ;
  $updatesql.=",L1_SIM_EXP_UNIT='".$values['L1_SIM_EXP_UNIT']."'";
  $values['L1_SIM_STRP_NUM'] = $_POST['line1_sim_strp_num'] ;
  $updatesql.=",L1_SIM_STRP_NUM='".$values['L1_SIM_STRP_NUM']."'";
  $values['L1_SIM_STRP_TIME'] = $_POST['line1_sim_strp_time'] ;
  $updatesql.=",L1_SIM_STRP_TIME='".$values['L1_SIM_STRP_TIME']."'";
  $values['L1_SIM_ID'] = $_POST['line1_sim_id'] ;
  $updatesql.=",L1_SIM_ID='".$values['L1_SIM_ID']."'";
endif; 
  $values['L1_DISABLE_IN'] = $_POST['line1_fw_to_voip']=='on'?'0':'1';
  $updatesql.=",L1_DISABLE_IN='".$values['L1_DISABLE_IN']."'";
if($values['L1_DISABLE_IN'] != 1):
  $values['L1_FW_NUM_TO_VOIP'] = $_POST['line1_fw_num_to_voip'] ;
  $updatesql.=",L1_FW_NUM_TO_VOIP='".$values['L1_FW_NUM_TO_VOIP']."'";
  $values['L1_V_DIGIT_MAP'] = $_POST['line1_v_dial_plan'] ;
  $updatesql.=",L1_V_DIGIT_MAP='".$values['L1_V_DIGIT_MAP']."'";
  $values['L1_FW2VOIP_AUTH_MODE'] = $_POST['line1_fw2voip_auth_mode'] ;
  $updatesql.=",L1_FW2VOIP_AUTH_MODE='".$values['L1_FW2VOIP_AUTH_MODE']."'";
if($values['L1_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L1_FW_TO_VOIP_PASSWD'] = $_POST['line1_fw_to_voip_passwd'] ;
  $updatesql.=",L1_FW_TO_VOIP_PASSWD='".$values['L1_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L1_FW2VOIP_AUTH_MODE'] == 'PASSWD_TRUSTLIST'):
  $values['L1_FW_TO_VOIP_PASSWD'] = $_POST['l1_fw_to_voip_passwd'] ;
  $updatesql.=",L1_FW_TO_VOIP_PASSWD='".$values['L1_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 
  $values['GSM_CW_ENABLE'] = $_POST['line1_gsm_cw_enable']=='on'?'1':'0';
  $updatesql.=",GSM_CW_ENABLE='".$values['GSM_CW_ENABLE']."'";
  $values['SMS_MODE'] = $_POST['sms_mode'] ;
  $updatesql.=",SMS_MODE='".$values['SMS_MODE']."'";
if($values['SMS_MODE'] == 'DIAL'):
  $values['SMS_DIAL_ENABLE'] = $_POST['sms_dial'] ;
  $updatesql.=",SMS_DIAL_ENABLE='".$values['SMS_DIAL_ENABLE']."'";
  $values['SMS_PREFIX'] = $_POST['sms_dial_prefix'] ;
  $updatesql.=",SMS_PREFIX='".$values['SMS_PREFIX']."'";
endif; 
if($values['SMS_MODE'] == 'RELAY'):
  $values['SMS_FW_NUM'] = $_POST['sms_fw_num'] ;
  $updatesql.=",SMS_FW_NUM='".$values['SMS_FW_NUM']."'";
endif; 
if($values['ENDPOINT_TYPE'] == 'SIP'):
  $values['SIP_CID_FW_MODE'] = $_POST['cid_fw_mode'] ;
  $updatesql.=",SIP_CID_FW_MODE='".$values['SIP_CID_FW_MODE']."'";
endif; 
if($values['SIP_CID_FW_MODE'] == '1'):
  $values['CID_FW_PREFIX'] = $_POST['cid_fw_prefix'] ;
  $updatesql.=",CID_FW_PREFIX='".$values['CID_FW_PREFIX']."'";
endif; 
if($values['ENDPOINT_TYPE'] == 'H323'):
  $values['H323_CID_FW'] = $_POST['h323_cid_fw']=='on'?'1':'0';
  $updatesql.=",H323_CID_FW='".$values['H323_CID_FW']."'";
endif;

/*GSM CF*/
  $values['GSM_CF_UNCND_ENABLE'] = $_POST['line1_gsm_cf_uncnd_enable']=='on'?'1':'0';
  $updatesql.=",GSM_CF_UNCND_ENABLE='".$values['GSM_CF_UNCND_ENABLE']."'";
if($values['GSM_CF_UNCND_ENABLE'] == 1):
  $values['GSM_CF_UNCND_NUM'] = $_POST['line1_gsm_cf_uncnd_num'] ;
  $updatesql.=",GSM_CF_UNCND_NUM='".$values['GSM_CF_UNCND_NUM']."'";
endif; 
  $values['GSM_CF_BUSY_ENABLE'] = $_POST['line1_gsm_cf_busy_enable']=='on'?'1':'0';
  $updatesql.=",GSM_CF_BUSY_ENABLE='".$values['GSM_CF_BUSY_ENABLE']."'";
if($values['GSM_CF_BUSY_ENABLE'] == 1):
  $values['GSM_CF_BUSY_NUM'] = $_POST['line1_gsm_cf_busy_num'] ;
  $updatesql.=",GSM_CF_BUSY_NUM='".$values['GSM_CF_BUSY_NUM']."'";
endif; 
  $values['GSM_CF_NOREPLY_ENABLE'] = $_POST['line1_gsm_cf_noreply_enable']=='on'?'1':'0';
  $updatesql.=",GSM_CF_NOREPLY_ENABLE='".$values['GSM_CF_NOREPLY_ENABLE']."'";
if($values['GSM_CF_NOREPLY_ENABLE'] == 1):
  $values['GSM_CF_NOREPLY_NUM'] = $_POST['line1_gsm_cf_noreply_num'] ;
  $updatesql.=",GSM_CF_NOREPLY_NUM='".$values['GSM_CF_NOREPLY_NUM']."'";
endif; 
  $values['GSM_CF_NOTREACHABLE_ENABLE'] = $_POST['line1_gsm_cf_notreachable_enable']=='on'?'1':'0';
  $updatesql.=",GSM_CF_NOTREACHABLE_ENABLE='".$values['GSM_CF_NOTREACHABLE_ENABLE']."'";
if($values['GSM_CF_NOTREACHABLE_ENABLE'] == 1):
  $values['GSM_CF_NOTREACHABLE_NUM'] = $_POST['line1_gsm_cf_notreachable_num'] ;
  $updatesql.=",GSM_CF_NOTREACHABLE_NUM='".$values['GSM_CF_NOTREACHABLE_NUM']."'";
endif; 

/**/
  $values['L1_PSTN_TRUST_NUM_1'] = $_POST['l1_pstn_trust_num1'] ;
  $updatesql.=",L1_PSTN_TRUST_NUM_1='".$values['L1_PSTN_TRUST_NUM_1']."'";
  $values['L1_PSTN_TRUST_NUM_2'] = $_POST['l1_pstn_trust_num2'] ;
  $updatesql.=",L1_PSTN_TRUST_NUM_2='".$values['L1_PSTN_TRUST_NUM_2']."'";
  $values['L1_PSTN_TRUST_NUM_3'] = $_POST['l1_pstn_trust_num3'] ;
  $updatesql.=",L1_PSTN_TRUST_NUM_3='".$values['L1_PSTN_TRUST_NUM_3']."'";
  $values['L1_PSTN_TRUST_NUM_4'] = $_POST['l1_pstn_trust_num4'] ;
  $updatesql.=",L1_PSTN_TRUST_NUM_4='".$values['L1_PSTN_TRUST_NUM_4']."'";
  $values['L1_PSTN_TRUST_NUM_5'] = $_POST['l1_pstn_trust_num5'] ;
  $updatesql.=",L1_PSTN_TRUST_NUM_5='".$values['L1_PSTN_TRUST_NUM_5']."'";
  $values['L1_PSTN_TRUST_NUM_6'] = $_POST['l1_pstn_trust_num6'] ;
  $updatesql.=",L1_PSTN_TRUST_NUM_6='".$values['L1_PSTN_TRUST_NUM_6']."'";
  $values['L1_PSTN_TRUST_NUM_7'] = $_POST['l1_pstn_trust_num7'] ;
  $updatesql.=",L1_PSTN_TRUST_NUM_7='".$values['L1_PSTN_TRUST_NUM_7']."'";
  $values['L1_PSTN_TRUST_NUM_8'] = $_POST['l1_pstn_trust_num8'] ;
  $updatesql.=",L1_PSTN_TRUST_NUM_8='".$values['L1_PSTN_TRUST_NUM_8']."'";
  $values['L1_PSTN_TRUST_NUM_9'] = $_POST['l1_pstn_trust_num9'] ;
  $updatesql.=",L1_PSTN_TRUST_NUM_9='".$values['L1_PSTN_TRUST_NUM_9']."'";
  $values['L1_PSTN_TRUST_NUM_10'] = $_POST['l1_pstn_trust_num10'] ;
  $updatesql.=",L1_PSTN_TRUST_NUM_10='".$values['L1_PSTN_TRUST_NUM_10']."'";
  $values['L1_PSTN_TRUST_NUM_11'] = $_POST['l1_pstn_trust_num11'] ;
  $updatesql.=",L1_PSTN_TRUST_NUM_11='".$values['L1_PSTN_TRUST_NUM_11']."'";
  $values['L1_PSTN_TRUST_NUM_12'] = $_POST['l1_pstn_trust_num12'] ;
  $updatesql.=",L1_PSTN_TRUST_NUM_12='".$values['L1_PSTN_TRUST_NUM_12']."'";
  $values['L1_PSTN_TRUST_NUM_13'] = $_POST['l1_pstn_trust_num13'] ;
  $updatesql.=",L1_PSTN_TRUST_NUM_13='".$values['L1_PSTN_TRUST_NUM_13']."'";
  $values['L1_PSTN_TRUST_NUM_14'] = $_POST['l1_pstn_trust_num14'] ;
  $updatesql.=",L1_PSTN_TRUST_NUM_14='".$values['L1_PSTN_TRUST_NUM_14']."'";
  $values['L1_PSTN_TRUST_NUM_15'] = $_POST['l1_pstn_trust_num15'] ;
  $updatesql.=",L1_PSTN_TRUST_NUM_15='".$values['L1_PSTN_TRUST_NUM_15']."'";

  $values['L1_VOIP_TRUST_NUM_1'] = $_POST['l1_voip_trust_num1'] ;
  $updatesql.=",L1_VOIP_TRUST_NUM_1='".$values['L1_VOIP_TRUST_NUM_1']."'";
  $values['L1_VOIP_TRUST_NUM_2'] = $_POST['l1_voip_trust_num2'] ;
  $updatesql.=",L1_VOIP_TRUST_NUM_2='".$values['L1_VOIP_TRUST_NUM_2']."'";
  $values['L1_VOIP_TRUST_NUM_3'] = $_POST['l1_voip_trust_num3'] ;
  $updatesql.=",L1_VOIP_TRUST_NUM_3='".$values['L1_VOIP_TRUST_NUM_3']."'";
  $values['L1_VOIP_TRUST_NUM_4'] = $_POST['l1_voip_trust_num4'] ;
  $updatesql.=",L1_VOIP_TRUST_NUM_4='".$values['L1_VOIP_TRUST_NUM_4']."'";
  $values['L1_VOIP_TRUST_NUM_5'] = $_POST['l1_voip_trust_num5'] ;
  $updatesql.=",L1_VOIP_TRUST_NUM_5='".$values['L1_VOIP_TRUST_NUM_5']."'";
  $values['L1_VOIP_TRUST_NUM_6'] = $_POST['l1_voip_trust_num6'] ;
  $updatesql.=",L1_VOIP_TRUST_NUM_6='".$values['L1_VOIP_TRUST_NUM_6']."'";
  $values['L1_VOIP_TRUST_NUM_7'] = $_POST['l1_voip_trust_num7'] ;
  $updatesql.=",L1_VOIP_TRUST_NUM_7='".$values['L1_VOIP_TRUST_NUM_7']."'";
  $values['L1_VOIP_TRUST_NUM_8'] = $_POST['l1_voip_trust_num8'] ;
  $updatesql.=",L1_VOIP_TRUST_NUM_8='".$values['L1_VOIP_TRUST_NUM_8']."'";
  $values['L1_VOIP_TRUST_NUM_9'] = $_POST['l1_voip_trust_num9'] ;
  $updatesql.=",L1_VOIP_TRUST_NUM_9='".$values['L1_VOIP_TRUST_NUM_9']."'";
  $values['L1_VOIP_TRUST_NUM_10'] = $_POST['l1_voip_trust_num10'] ;
  $updatesql.=",L1_VOIP_TRUST_NUM_10='".$values['L1_VOIP_TRUST_NUM_10']."'";
  $values['L1_VOIP_TRUST_NUM_11'] = $_POST['l1_voip_trust_num11'] ;
  $updatesql.=",L1_VOIP_TRUST_NUM_11='".$values['L1_VOIP_TRUST_NUM_11']."'";
  $values['L1_VOIP_TRUST_NUM_12'] = $_POST['l1_voip_trust_num12'] ;
  $updatesql.=",L1_VOIP_TRUST_NUM_12='".$values['L1_VOIP_TRUST_NUM_12']."'";
  $values['L1_VOIP_TRUST_NUM_13'] = $_POST['l1_voip_trust_num13'] ;
  $updatesql.=",L1_VOIP_TRUST_NUM_13='".$values['L1_VOIP_TRUST_NUM_13']."'";
  $values['L1_VOIP_TRUST_NUM_14'] = $_POST['l1_voip_trust_num14'] ;
  $updatesql.=",L1_VOIP_TRUST_NUM_14='".$values['L1_VOIP_TRUST_NUM_14']."'";
  $values['L1_VOIP_TRUST_NUM_15'] = $_POST['l1_voip_trust_num15'] ;
  $updatesql.=",L1_VOIP_TRUST_NUM_15='".$values['L1_VOIP_TRUST_NUM_15']."'";


/*fxs setting*/
  $values['S1_DIGIT_MAP'] = $_POST['fxs1_dial_plan'] ;
  $updatesql.=",S1_DIGIT_MAP='".$values['S1_DIGIT_MAP']."'";
  $values['L1_HOT_LINE_ENABLE'] = $_POST['fxs1_hot_line_enable']=='on'?'1':'0';
  $updatesql.=",L1_HOT_LINE_ENABLE='".$values['L1_HOT_LINE_ENABLE']."'";
if($values['L1_HOT_LINE_ENABLE'] == 1):
  $values['L1_HOT_LINE_NUM'] = $_POST['fxs1_hot_line_num'] ;
  $updatesql.=",L1_HOT_LINE_NUM='".$values['L1_HOT_LINE_NUM']."'";
endif; 
if($values['ENDPOINT_TYPE'] == 'SIP'):
  $values['STAR_CMD_HOLD_KEY'] = $_POST['star_cmd_hold'] ;
  $updatesql.=",STAR_CMD_HOLD_KEY='".$values['STAR_CMD_HOLD_KEY']."'";
endif; 
if($values['ENDPOINT_TYPE'] == 'SIP'):
  $values['STAR_CMD_TRANSFER_KEY'] = $_POST['star_cmd_transfer'] ;
  $updatesql.=",STAR_CMD_TRANSFER_KEY='".$values['STAR_CMD_TRANSFER_KEY']."'";
endif; 
  $values['AUTODIAL_TIME'] = $_POST['auto_dial_time'] ;
  $updatesql.=",AUTODIAL_TIME='".$values['AUTODIAL_TIME']."'";
if($values['ENDPOINT_TYPE'] == 'SIP'):
  $values['CALL_HOLD'] = $_POST['call_hold']=='on'?'1':'0';
  $updatesql.=",CALL_HOLD='".$values['CALL_HOLD']."'";
endif; 
if($values['ENDPOINT_TYPE'] == 'SIP'):
  $values['CALL_TRANSFER'] = $_POST['call_transfer']=='on'?'1':'0';
  $updatesql.=",CALL_TRANSFER='".$values['CALL_TRANSFER']."'";
endif; 

/*mg*/
  $values['RTP_PORT'] = $_POST['rtp_port_lower']."-".$_POST['rtp_port_upper'] ;
  $updatesql.=",RTP_PORT='".$values['RTP_PORT']."'";
  $values['PACKETIZE_PERIOD'] = $_POST['rtp_pkt_len'] ;
  $updatesql.=",PACKETIZE_PERIOD='".$values['PACKETIZE_PERIOD']."'";
  $values['VPDSP_JB_MODE'] = $_POST['jb_mode'] ;
  $updatesql.=",VPDSP_JB_MODE='".$values['VPDSP_JB_MODE']."'";
if($values['VPDSP_JB_MODE'] == '2'):
  $values['VPDSP_ADPT_MIN_JITTER'] = $_POST['adpt_min_jitter'] ;
  $updatesql.=",VPDSP_ADPT_MIN_JITTER='".$values['VPDSP_ADPT_MIN_JITTER']."'";
  $values['VPDSP_ADPT_MAX_JITTER'] = $_POST['adpt_max_jitter'] ;
  $updatesql.=",VPDSP_ADPT_MAX_JITTER='".$values['VPDSP_ADPT_MAX_JITTER']."'";
endif; 
if($values['VPDSP_JB_MODE'] == '1'):
  $values['VPDSP_SEQ_MIN_JITTER'] = $_POST['seq_min_jitter'] ;
  $updatesql.=",VPDSP_SEQ_MIN_JITTER='".$values['VPDSP_SEQ_MIN_JITTER']."'";
  $values['VPDSP_SEQ_MAX_JITTER'] = $_POST['seq_max_jitter'] ;
  $updatesql.=",VPDSP_SEQ_MAX_JITTER='".$values['VPDSP_SEQ_MAX_JITTER']."'";
endif; 
if($values['VPDSP_JB_MODE'] == '0'):
  $values['VPDSP_MIN_JITTER'] = $_POST['jitter_buffer'] ;
  $updatesql.=",VPDSP_MIN_JITTER='".$values['VPDSP_MIN_JITTER']."'";
endif; 
  $values['RTP_QOS'] = $_POST['rtp_qos'] ;
  $updatesql.=",RTP_QOS='".$values['RTP_QOS']."'";
if($values['RTP_QOS'] == 'IPTOS'):
  $values['RTP_TOS'] = $_POST['rtp_tos'] ;
  $updatesql.=",RTP_TOS='".$values['RTP_TOS']."'";
endif; 
if($values['RTP_QOS'] == 'DIFFSERV'):
  $values['RTP_DIFFSERV'] = $_POST['rtp_diffserv_class'] ;
  $updatesql.=",RTP_DIFFSERV='".$values['RTP_DIFFSERV']."'";
endif; 
if($values['MG_CRYPT!'] == 'DISABLE'):
  $values['MG_CRYPT'] = $_POST['rtp_crypt'] ;
  $updatesql.=",MG_CRYPT='".$values['MG_CRYPT']."'";
endif; 
if($values['MG_CRYPT'] == 'RC4'):
  $values['MG_RC4_KEY'] = $_POST['rtp_rc4_key'] ;
  $updatesql.=",MG_RC4_KEY='".$values['MG_RC4_KEY']."'";
endif; 
if($values['ET263_CRYPT'] == '1'):
endif; 
if($values['MG_CRYPT'] == 'ET263'):
  $values['MG_ET263_CRYPT_TYPE'] = $_POST['rtp_et263_crypt_type'] ;
  $updatesql.=",MG_ET263_CRYPT_TYPE='".$values['MG_ET263_CRYPT_TYPE']."'";
  $values['MG_ET263_CRYPT_DEP'] = $_POST['rtp_et263_crypt_dep'] ;
  $updatesql.=",MG_ET263_CRYPT_DEP='".$values['MG_ET263_CRYPT_DEP']."'";
endif; 
  $values['SYMMETRIC_RTP'] = $_POST['symmetric_rtp']=='on'?'1':'0';
  $updatesql.=",SYMMETRIC_RTP='".$values['SYMMETRIC_RTP']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['MG_NAT_TRAVERSAL'] = $_POST['rtp_nat_traversal'] ;
  $updatesql.=",MG_NAT_TRAVERSAL='".$values['MG_NAT_TRAVERSAL']."'";
endif; 
if($values['MG_NAT_TRAVERSAL'] == 'STUN'):
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['MG_STUN_SERVER'] = $_POST['rtp_stun_server'] ;
  $updatesql.=",MG_STUN_SERVER='".$values['MG_STUN_SERVER']."'";
endif; 
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
endif; 
if($values['MG_NAT_TRAVERSAL'] == 'PORTFWD'):
  $values['MG_PORTFWD_TYPE'] = $_POST['rtp_portfwd_type'] ;
  $updatesql.=",MG_PORTFWD_TYPE='".$values['MG_PORTFWD_TYPE']."'";
if($values['MG_PORTFWD_TYPE'] == 'MANUAL'):
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['MG_PORTFWD_GW'] = $_POST['rtp_portfwd_gw'] ;
  $updatesql.=",MG_PORTFWD_GW='".$values['MG_PORTFWD_GW']."'";
endif; 
endif; 
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
endif; 
if($values['MG_NAT_TRAVERSAL'] == 'RELAY'):
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['MG_RELAY_SERVER'] = $_POST['rtp_relay_server'] ;
  $updatesql.=",MG_RELAY_SERVER='".$values['MG_RELAY_SERVER']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['MG_RELAY_PORT'] = $_POST['rtp_relay_port'] ;
  $updatesql.=",MG_RELAY_PORT='".$values['MG_RELAY_PORT']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['MG_RELAY_USER'] = $_POST['rtp_relay_user'] ;
  $updatesql.=",MG_RELAY_USER='".$values['MG_RELAY_USER']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['MG_RELAY_PASSWD'] = $_POST['rtp_relay_passwd'] ;
  $updatesql.=",MG_RELAY_PASSWD='".$values['MG_RELAY_PASSWD']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['MG_RELAY_ENCRYPT'] = $_POST['rtp_relay_encrypt']=='on'?'1':'0';
  $updatesql.=",MG_RELAY_ENCRYPT='".$values['MG_RELAY_ENCRYPT']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['MG_RELAY_MODE'] = $_POST['rtp_relay_mode'] ;
  $updatesql.=",MG_RELAY_MODE='".$values['MG_RELAY_MODE']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['MG_RELAY_SERVER1'] = $_POST['rtp_relay_server1'] ;
  $updatesql.=",MG_RELAY_SERVER1='".$values['MG_RELAY_SERVER1']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['MG_RELAY_SERVER2'] = $_POST['rtp_relay_server2'] ;
  $updatesql.=",MG_RELAY_SERVER2='".$values['MG_RELAY_SERVER2']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['MG_RELAY_SERVER3'] = $_POST['rtp_relay_server3'] ;
  $updatesql.=",MG_RELAY_SERVER3='".$values['MG_RELAY_SERVER3']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['MG_RELAY_SERVER4'] = $_POST['rtp_relay_server4'] ;
  $updatesql.=",MG_RELAY_SERVER4='".$values['MG_RELAY_SERVER4']."'";
endif; 
endif; 
if($values['SIDE_TONE'] == '1'):
  $values['VPDSP_SIDE_TONE'] = $_POST['side_tone_level'] ;
  $updatesql.=",VPDSP_SIDE_TONE='".$values['VPDSP_SIDE_TONE']."'";
endif; 


/*ad call*/

if($values['ENDPOINT_TYPE'] == 'H323'):
  $values['RAS_PORT'] = $_POST['ras_port'] ;
  $updatesql.=",RAS_PORT='".$values['RAS_PORT']."'";
  $values['Q931_PORT'] = $_POST['q931_port'] ;
  $updatesql.=",Q931_PORT='".$values['Q931_PORT']."'";
  $values['H245_PORT'] = $_POST['h245_port'] ;
  $updatesql.=",H245_PORT='".$values['H245_PORT']."'";
  $values['DISABLE_FASTSTART'] = $_POST['disable_fast_start']=='on'?'0':'1';
  $updatesql.=",DISABLE_FASTSTART='".$values['DISABLE_FASTSTART']."'";
  $values['H323_DISABLE_TUNNEL'] = $_POST['h323_tunnel'] ;
  $updatesql.=",H323_DISABLE_TUNNEL='".$values['H323_DISABLE_TUNNEL']."'";
  $values['H323_REGISTER_MODE'] = $_POST['h323_register_mode'] ;
  $updatesql.=",H323_REGISTER_MODE='".$values['H323_REGISTER_MODE']."'";
  $values['H323_INBAND_DTMF'] = $_POST['h323_dtmf_type'] ;
  $updatesql.=",H323_INBAND_DTMF='".$values['H323_INBAND_DTMF']."'";
  $values['H323_QOS'] = $_POST['h323_qos'] ;
  $updatesql.=",H323_QOS='".$values['H323_QOS']."'";
if($values['H323_QOS'] == 'IPTOS'):
  $values['H323_TOS'] = $_POST['h323_tos'] ;
  $updatesql.=",H323_TOS='".$values['H323_TOS']."'";
endif; 
if($values['H323_QOS'] == 'DIFFSERV'):
  $values['H323_DIFFSERV'] = $_POST['h323_diffserv_class'] ;
  $updatesql.=",H323_DIFFSERV='".$values['H323_DIFFSERV']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_NAT_TRAVERSAL'] = $_POST['h323_nat_traversal'] ;
  $updatesql.=",H323_NAT_TRAVERSAL='".$values['H323_NAT_TRAVERSAL']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
endif; 
if($values['H323_NAT_TRAVERSAL'] == 'PORTFWD'):
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_PORTFWD_TYPE'] = $_POST['h323_portfwd_type'] ;
  $updatesql.=",H323_PORTFWD_TYPE='".$values['H323_PORTFWD_TYPE']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
endif; 
if($values['H323_PORTFWD_TYPE'] == 'MANUAL'):
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_PORTFWD_GW'] = $_POST['h323_portfwd_gw'] ;
  $updatesql.=",H323_PORTFWD_GW='".$values['H323_PORTFWD_GW']."'";
endif; 
endif; 
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
endif; 
if($values['H323_NAT_TRAVERSAL'] == 'RELAY'):
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_RELAY_SERVER'] = $_POST['h323_relay_server'] ;
  $updatesql.=",H323_RELAY_SERVER='".$values['H323_RELAY_SERVER']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_RELAY_PORT'] = $_POST['h323_relay_port'] ;
  $updatesql.=",H323_RELAY_PORT='".$values['H323_RELAY_PORT']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_RELAY_USER'] = $_POST['h323_relay_user'] ;
  $updatesql.=",H323_RELAY_USER='".$values['H323_RELAY_USER']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_RELAY_PASSWD'] = $_POST['h323_relay_passwd'] ;
  $updatesql.=",H323_RELAY_PASSWD='".$values['H323_RELAY_PASSWD']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_RELAY_ENCRYPT'] = $_POST['h323_relay_encrypt']=='on'?'1':'0';
  $updatesql.=",H323_RELAY_ENCRYPT='".$values['H323_RELAY_ENCRYPT']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_RELAY_MODE'] = $_POST['h323_relay_mode'] ;
  $updatesql.=",H323_RELAY_MODE='".$values['H323_RELAY_MODE']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_RELAY_SERVER1'] = $_POST['h323_relay_server1'] ;
  $updatesql.=",H323_RELAY_SERVER1='".$values['H323_RELAY_SERVER1']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_RELAY_SERVER2'] = $_POST['h323_relay_server2'] ;
  $updatesql.=",H323_RELAY_SERVER2='".$values['H323_RELAY_SERVER2']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_RELAY_SERVER3'] = $_POST['h323_relay_server3'] ;
  $updatesql.=",H323_RELAY_SERVER3='".$values['H323_RELAY_SERVER3']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_RELAY_SERVER4'] = $_POST['h323_relay_server4'] ;
  $updatesql.=",H323_RELAY_SERVER4='".$values['H323_RELAY_SERVER4']."'";
endif; 
endif; 
endif; 
if($values['ENDPOINT_TYPE'] == 'SIP'):
	/*sip timer*/
  $values['UNANSWER_FW_EXP'] = $_POST['unanswer_fw_exp'] ;
  $updatesql.=",UNANSWER_FW_EXP='".$values['UNANSWER_FW_EXP']."'";
  $values['UNANSWER_EXP'] = $_POST['unanswer_exp'] ;
  $updatesql.=",UNANSWER_EXP='".$values['UNANSWER_EXP']."'";
  $values['NON_INVITE_TS_EXP'] = $_POST['non_invite_exp'] ;
  $updatesql.=",NON_INVITE_TS_EXP='".$values['NON_INVITE_TS_EXP']."'";
  $values['INVITE_TS_EXP'] = $_POST['invite_exp'] ;
  $updatesql.=",INVITE_TS_EXP='".$values['INVITE_TS_EXP']."'";
  $values['RETRANSMIT_T1'] = $_POST['retrans_t1'] ;
  $updatesql.=",RETRANSMIT_T1='".$values['RETRANSMIT_T1']."'";
  $values['RETRANSMIT_T2'] = $_POST['retrans_t2'] ;
  $updatesql.=",RETRANSMIT_T2='".$values['RETRANSMIT_T2']."'";



  $values['SIP_LOCAL_PORT'] = $_POST['sip_local_port'] ;
  $updatesql.=",SIP_LOCAL_PORT='".$values['SIP_LOCAL_PORT']."'";
  $values['SIP_NO_ALIVE'] = $_POST['sip_no_alive']=='on'?'0':'1';
  $updatesql.=",SIP_NO_ALIVE='".$values['SIP_NO_ALIVE']."'";
  $values['INBAND_DTMF'] = $_POST['sip_dtmf_type'] ;
  $updatesql.=",INBAND_DTMF='".$values['INBAND_DTMF']."'";
if($values['INBAND_DTMF'] == '0'):
  $values['SIP_OUTBAND_DTMF_TYPE'] = $_POST['sip_outband_dtmf_type'] ;
  $updatesql.=",SIP_OUTBAND_DTMF_TYPE='".$values['SIP_OUTBAND_DTMF_TYPE']."'";
if($values['SIP_OUTBAND_DTMF_TYPE'] == '1'):
  $values['DTMF_PAYLOAD_TYPE'] = $_POST['dtmf_payload'] ;
  $updatesql.=",DTMF_PAYLOAD_TYPE='".$values['DTMF_PAYLOAD_TYPE']."'";
endif; 
endif; 
  $values['SIP_QOS'] = $_POST['sip_qos'] ;
  $updatesql.=",SIP_QOS='".$values['SIP_QOS']."'";
if($values['SIP_QOS'] == 'IPTOS'):
  $values['SIP_TOS'] = $_POST['sip_tos'] ;
  $updatesql.=",SIP_TOS='".$values['SIP_TOS']."'";
endif; 
if($values['SIP_QOS'] == 'DIFFSERV'):
  $values['SIP_DIFFSERV'] = $_POST['sip_diffserv_class'] ;
  $updatesql.=",SIP_DIFFSERV='".$values['SIP_DIFFSERV']."'";
endif; 
  $values['SIP_CRYPT'] = $_POST['sip_signaling_crypt'] ;
  $updatesql.=",SIP_CRYPT='".$values['SIP_CRYPT']."'";
if($values['SIP_CRYPT'] == 'RC4'):
  $values['SIP_RC4_KEY'] = $_POST['sip_rc4_key'] ;
  $updatesql.=",SIP_RC4_KEY='".$values['SIP_RC4_KEY']."'";
endif; 
if($values['SIP_CRYPT'] == 'ECM'):
  $values['ECM_CRYPT_KEY'] = $_POST['sip_ecm_crypt_key'] ;
  $updatesql.=",ECM_CRYPT_KEY='".$values['ECM_CRYPT_KEY']."'";
endif; 
if($values['SIP_CRYPT'] == 'ET263'):
  $values['SIP_ET263_CRYPT_TYPE'] = $_POST['sip_et263_crypt_type'] ;
  $updatesql.=",SIP_ET263_CRYPT_TYPE='".$values['SIP_ET263_CRYPT_TYPE']."'";
  $values['SIP_ET263_CRYPT_DEP'] = $_POST['sip_et263_crypt_dep'] ;
  $updatesql.=",SIP_ET263_CRYPT_DEP='".$values['SIP_ET263_CRYPT_DEP']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_NAT_TRAVERSAL'] = $_POST['sip_nat_traversal'] ;
  $updatesql.=",SIP_NAT_TRAVERSAL='".$values['SIP_NAT_TRAVERSAL']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
endif; 
if($values['SIP_NAT_TRAVERSAL'] == 'STUN'):
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_STUN_SERVER'] = $_POST['sip_stun_server'] ;
  $updatesql.=",SIP_STUN_SERVER='".$values['SIP_STUN_SERVER']."'";
endif; 
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
endif; 
if($values['SIP_NAT_TRAVERSAL'] == 'RELAY'):
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_RELAY_SERVER'] = $_POST['sip_relay_server'] ;
  $updatesql.=",SIP_RELAY_SERVER='".$values['SIP_RELAY_SERVER']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_RELAY_PORT'] = $_POST['sip_relay_port'] ;
  $updatesql.=",SIP_RELAY_PORT='".$values['SIP_RELAY_PORT']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_RELAY_USER'] = $_POST['sip_relay_user'] ;
  $updatesql.=",SIP_RELAY_USER='".$values['SIP_RELAY_USER']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_RELAY_PASSWD'] = $_POST['sip_relay_passwd'] ;
  $updatesql.=",SIP_RELAY_PASSWD='".$values['SIP_RELAY_PASSWD']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_RELAY_ENCRYPT'] = $_POST['sip_relay_encrypt']=='on'?'1':'0';
  $updatesql.=",SIP_RELAY_ENCRYPT='".$values['SIP_RELAY_ENCRYPT']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_RELAY_SERVER1'] = $_POST['sip_relay_server1'] ;
  $updatesql.=",SIP_RELAY_SERVER1='".$values['SIP_RELAY_SERVER1']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_RELAY_SERVER2'] = $_POST['sip_relay_server2'] ;
  $updatesql.=",SIP_RELAY_SERVER2='".$values['SIP_RELAY_SERVER2']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_RELAY_SERVER3'] = $_POST['sip_relay_server3'] ;
  $updatesql.=",SIP_RELAY_SERVER3='".$values['SIP_RELAY_SERVER3']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_RELAY_SERVER4'] = $_POST['sip_relay_server4'] ;
  $updatesql.=",SIP_RELAY_SERVER4='".$values['SIP_RELAY_SERVER4']."'";
endif; 
endif; 
endif; 
if($values['VPN_ENABLE'] == 1):
  $values['PPTP_ENABLE'] = $_POST['pptp_enable']=='on'?'1':'0';
  $updatesql.=",PPTP_ENABLE='".$values['PPTP_ENABLE']."'";
endif; 
if($values['PPTP_ENABLE'] == 1):
  $values['PPTP_SERVER_ADDR'] = $_POST['pptp_server_addr'] ;
  $updatesql.=",PPTP_SERVER_ADDR='".$values['PPTP_SERVER_ADDR']."'";
  $values['PPTP_SERVER_ID'] = $_POST['pptp_server_username'] ;
  $updatesql.=",PPTP_SERVER_ID='".$values['PPTP_SERVER_ID']."'";
  $values['PPTP_SERVER_PW'] = $_POST['PPTP_server_password'] ;
  $updatesql.=",PPTP_SERVER_PW='".$values['PPTP_SERVER_PW']."'";
endif; 


/* remote*/
  $values['RADMIN_ENABLE'] = $_POST['remote_enable']=='on'?'1':'0';
  $updatesql.=",RADMIN_ENABLE='".$values['RADMIN_ENABLE']."'";
  $values['RADMIN_SERVER'] = $_POST['remote_server'] ;
  $updatesql.=",RADMIN_SERVER='".$values['RADMIN_SERVER']."'";
  $values['RADMIN_PORT'] = $_POST['remote_server_port'] ;
  $updatesql.=",RADMIN_PORT='".$values['RADMIN_PORT']."'";
  $values['RADMIN_ID'] = $_POST['remote_server_id'] ;
  $updatesql.=",RADMIN_ID='".$values['RADMIN_ID']."'";
  $values['RADMIN_KEY'] = $_POST['remote_server_key'] ;
  $updatesql.=",RADMIN_KEY='".$values['RADMIN_KEY']."'";

/*autocfg srv*/
  $values['AUTOCFG'] = $_POST['auto_config']=='on'?'1':'0';
  $updatesql.=",AUTOCFG='".$values['AUTOCFG']."'";
if($values['AUTOCFG'] == 1):
  $values['AUTOCFG_SERVER'] = $_POST['auto_config_server'] ;
  $updatesql.=",AUTOCFG_SERVER='".$values['AUTOCFG_SERVER']."'";
  $values['AUTOCFG_REFRESH'] = $_POST['auto_config_refresh'] ;
  $updatesql.=",AUTOCFG_REFRESH='".$values['AUTOCFG_REFRESH']."'";
endif; 

/*codec*/
  $values['PREFER_CODEC1'] = $_POST['prefer_codec1'] ;
  $updatesql.=",PREFER_CODEC1='".$values['PREFER_CODEC1']."'";
  $values['CODEC1_DISABLE'] = $_POST['codec1_enabled']=='on'?'0':'1';
  $updatesql.=",CODEC1_DISABLE='".$values['CODEC1_DISABLE']."'";
  $values['PREFER_CODEC2'] = $_POST['prefer_codec2'] ;
  $updatesql.=",PREFER_CODEC2='".$values['PREFER_CODEC2']."'";
  $values['CODEC2_DISABLE'] = $_POST['codec2_enabled']=='on'?'0':'1';
  $updatesql.=",CODEC2_DISABLE='".$values['CODEC2_DISABLE']."'";
  $values['PREFER_CODEC3'] = $_POST['prefer_codec3'] ;
  $updatesql.=",PREFER_CODEC3='".$values['PREFER_CODEC3']."'";
  $values['CODEC3_DISABLE'] = $_POST['codec3_enabled']=='on'?'0':'1';
  $updatesql.=",CODEC3_DISABLE='".$values['CODEC3_DISABLE']."'";
  $values['PREFER_CODEC4'] = $_POST['prefer_codec4'] ;
  $updatesql.=",PREFER_CODEC4='".$values['PREFER_CODEC4']."'";
  $values['CODEC4_DISABLE'] = $_POST['codec4_enabled']=='on'?'0':'1';
  $updatesql.=",CODEC4_DISABLE='".$values['CODEC4_DISABLE']."'";
  $values['PREFER_CODEC5'] = $_POST['prefer_codec5'] ;
  $updatesql.=",PREFER_CODEC5='".$values['PREFER_CODEC5']."'";
  $values['CODEC5_DISABLE'] = $_POST['codec5_enabled']=='on'?'0':'1';
  $updatesql.=",CODEC5_DISABLE='".$values['CODEC5_DISABLE']."'";
  $values['PREFER_CODEC6'] = $_POST['prefer_codec6'] ;
  $updatesql.=",PREFER_CODEC6='".$values['PREFER_CODEC6']."'";
  $values['CODEC6_DISABLE'] = $_POST['codec6_enabled']=='on'?'0':'1';
  $updatesql.=",CODEC6_DISABLE='".$values['CODEC6_DISABLE']."'";
 











  $insertsql.=",orderid";
  $insertsql2.="','".$values['orderid'];

  $insertsql.=",FXSPORT";
  $insertsql2.="','".$values['FXSPORT']; 
  $insertsql.=",FXOPORT";
  $insertsql2.="','".$values['FXOPORT'];   
  $insertsql.=",ENDPOINT_TYPE";
  $insertsql2.="','".$values['ENDPOINT_TYPE']; 

/*h323 fxs*/
  $insertsql.=",H323_PHONE_NUM";
  $insertsql2.="','".$values['H323_PHONE_NUM'];
  $insertsql.=",H323_DISPLAY_NAME";
  $insertsql2.="','".$values['H323_DISPLAY_NAME'];
  $insertsql.=",H323_ID";
  $insertsql2.="','".$values['H323_ID'];
  $insertsql.=",H323_GK_ADDR";
  $insertsql2.="','".$values['H323_GK_ADDR'];
  $insertsql.=",H323_VOS_ENABLE";
  $insertsql2.="','".$values['H323_VOS_ENABLE'];
  $insertsql.=",H323_VOS_MODE";
  $insertsql2.="','".$values['H323_VOS_MODE'];
  $insertsql.=",H235_AUTH";
  $insertsql2.="','".$values['H235_AUTH'];
  $insertsql.=",H235_ID";
  $insertsql2.="','".$values['H235_ID'];
  $insertsql.=",H235_PASSWD";
  $insertsql2.="','".$values['H235_PASSWD'];

/*h323 fxo*/
   $insertsql.=",H323_FXO_PHONE_NUM";
  $insertsql2.="','".$values['H323_FXO_PHONE_NUM'];
  $insertsql.=",H323_FXO_GW_PREFIX";
  $insertsql2.="','".$values['H323_FXO_GW_PREFIX'];
  $insertsql.=",H323_FXO_DISPLAY_NAME";
  $insertsql2.="','".$values['H323_FXO_DISPLAY_NAME'];
  $insertsql.=",H323_FXO_ID";
  $insertsql2.="','".$values['H323_FXO_ID'];
  $insertsql.=",H323_FXO_GK_ADDR";
  $insertsql2.="','".$values['H323_FXO_GK_ADDR'];
  $insertsql.=",H323_FXO_VOS_ENABLE";
  $insertsql2.="','".$values['H323_FXO_VOS_ENABLE'];
  $insertsql.=",H323_FXO_VOS_MODE";
  $insertsql2.="','".$values['H323_FXO_VOS_MODE'];
  $insertsql.=",H235_FXO_AUTH";
  $insertsql2.="','".$values['H235_FXO_AUTH'];
  $insertsql.=",H235_FXO_ID";
  $insertsql2.="','".$values['H235_FXO_ID'];
  $insertsql.=",H235_FXO_PASSWD";
  $insertsql2.="','".$values['H235_FXO_PASSWD'];

/*sip fxs*/
  $insertsql.=",SIP_CONTACT0_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT0_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT0_DISPLAY_NAME";
  $insertsql2.="','".$values['SIP_CONTACT0_DISPLAY_NAME'];
  $insertsql.=",SIP_CONTACT0_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT0_PROXY'];
  $insertsql.=",SIP_CONTACT0_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT0_SERVER'];
  $insertsql.=",SIP_CONTACT0_EXPIRED";
  $insertsql2.="','".$values['SIP_CONTACT0_EXPIRED'];
  $insertsql.=",SIP_CONTACT0_OUTBOUND_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT0_OUTBOUND_PROXY'];
  $insertsql.=",SIP_CONTACT0_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT0_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT0_LOGIN";
  $insertsql2.="','".$values['SIP_CONTACT0_LOGIN'];
  $insertsql.=",SIP_CONTACT0_PASSWD";
  $insertsql2.="','".$values['SIP_CONTACT0_PASSWD'];
  $insertsql.=",SIP_CONTACT0_FORWARD_TYPE";
  $insertsql2.="','".$values['SIP_CONTACT0_FORWARD_TYPE'];
  $insertsql.=",SIP_CONTACT0_FORWARD_NUMBER";
  $insertsql2.="','".$values['SIP_CONTACT0_FORWARD_NUMBER'];
  $insertsql.=",SIP_FXS_USE_BSVR";
  $insertsql2.="','".$values['SIP_FXS_USE_BSVR'];
  $insertsql.=",SIP_CONTACT1_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT1_PROXY'];
  $insertsql.=",SIP_CONTACT1_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT1_SERVER'];
  $insertsql.=",SIP_CONTACT1_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT1_HOME_DOMAIN'];

/*sip fxo*/
  $insertsql.=",SIP_CONTACT10_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT10_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT10_DISPLAY_NAME";
  $insertsql2.="','".$values['SIP_CONTACT10_DISPLAY_NAME'];
  $insertsql.=",SIP_CONTACT10_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT10_PROXY'];
  $insertsql.=",SIP_CONTACT10_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT10_SERVER'];
  $insertsql.=",SIP_CONTACT10_EXPIRED";
  $insertsql2.="','".$values['SIP_CONTACT10_EXPIRED'];
  $insertsql.=",SIP_CONTACT10_OUTBOUND_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT10_OUTBOUND_PROXY'];
  $insertsql.=",SIP_CONTACT10_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT10_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT10_LOGIN";
  $insertsql2.="','".$values['SIP_CONTACT10_LOGIN'];
  $insertsql.=",SIP_CONTACT10_PASSWD";
  $insertsql2.="','".$values['SIP_CONTACT10_PASSWD'];
  $insertsql.=",SIP_FXO_USE_BSVR";
  $insertsql2.="','".$values['SIP_FXO_USE_BSVR'];
  $insertsql.=",SIP_CONTACT11_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT11_PROXY'];
  $insertsql.=",SIP_CONTACT11_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT11_SERVER'];
  $insertsql.=",SIP_CONTACT11_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT11_HOME_DOMAIN'];


  
/*mg*/
  $insertsql.=",RTP_PORT";
  $insertsql2.="','".$values['RTP_PORT'];
  $insertsql.=",PACKETIZE_PERIOD";
  $insertsql2.="','".$values['PACKETIZE_PERIOD'];
  $insertsql.=",VPDSP_JB_MODE";
  $insertsql2.="','".$values['VPDSP_JB_MODE'];
  $insertsql.=",VPDSP_ADPT_MIN_JITTER";
  $insertsql2.="','".$values['VPDSP_ADPT_MIN_JITTER'];
  $insertsql.=",VPDSP_ADPT_MAX_JITTER";
  $insertsql2.="','".$values['VPDSP_ADPT_MAX_JITTER'];
  $insertsql.=",VPDSP_SEQ_MIN_JITTER";
  $insertsql2.="','".$values['VPDSP_SEQ_MIN_JITTER'];
  $insertsql.=",VPDSP_SEQ_MAX_JITTER";
  $insertsql2.="','".$values['VPDSP_SEQ_MAX_JITTER'];
  $insertsql.=",VPDSP_MIN_JITTER";
  $insertsql2.="','".$values['VPDSP_MIN_JITTER'];
  $insertsql.=",RTP_QOS";
  $insertsql2.="','".$values['RTP_QOS'];
  $insertsql.=",RTP_TOS";
  $insertsql2.="','".$values['RTP_TOS'];
  $insertsql.=",RTP_DIFFSERV";
  $insertsql2.="','".$values['RTP_DIFFSERV'];
  $insertsql.=",MG_CRYPT";
  $insertsql2.="','".$values['MG_CRYPT'];
  $insertsql.=",MG_RC4_KEY";
  $insertsql2.="','".$values['MG_RC4_KEY'];
  $insertsql.=",MG_ET263_CRYPT_TYPE";
  $insertsql2.="','".$values['MG_ET263_CRYPT_TYPE'];
  $insertsql.=",MG_ET263_CRYPT_DEP";
  $insertsql2.="','".$values['MG_ET263_CRYPT_DEP'];
  $insertsql.=",SYMMETRIC_RTP";
  $insertsql2.="','".$values['SYMMETRIC_RTP'];
  $insertsql.=",MG_NAT_TRAVERSAL";
  $insertsql2.="','".$values['MG_NAT_TRAVERSAL'];
  $insertsql.=",MG_STUN_SERVER";
  $insertsql2.="','".$values['MG_STUN_SERVER'];
  $insertsql.=",MG_PORTFWD_TYPE";
  $insertsql2.="','".$values['MG_PORTFWD_TYPE'];
  $insertsql.=",MG_PORTFWD_GW";
  $insertsql2.="','".$values['MG_PORTFWD_GW'];
  $insertsql.=",MG_RELAY_SERVER";
  $insertsql2.="','".$values['MG_RELAY_SERVER'];
  $insertsql.=",MG_RELAY_PORT";
  $insertsql2.="','".$values['MG_RELAY_PORT'];
  $insertsql.=",MG_RELAY_USER";
  $insertsql2.="','".$values['MG_RELAY_USER'];
  $insertsql.=",MG_RELAY_PASSWD";
  $insertsql2.="','".$values['MG_RELAY_PASSWD'];
  $insertsql.=",MG_RELAY_ENCRYPT";
  $insertsql2.="','".$values['MG_RELAY_ENCRYPT'];
  $insertsql.=",MG_RELAY_MODE";
  $insertsql2.="','".$values['MG_RELAY_MODE'];
  $insertsql.=",MG_RELAY_SERVER1";
  $insertsql2.="','".$values['MG_RELAY_SERVER1'];
  $insertsql.=",MG_RELAY_SERVER2";
  $insertsql2.="','".$values['MG_RELAY_SERVER2'];
  $insertsql.=",MG_RELAY_SERVER3";
  $insertsql2.="','".$values['MG_RELAY_SERVER3'];
  $insertsql.=",MG_RELAY_SERVER4";
  $insertsql2.="','".$values['MG_RELAY_SERVER4'];
  $insertsql.=",VPDSP_SIDE_TONE";
  $insertsql2.="','".$values['VPDSP_SIDE_TONE'];
  
/*ad*/
  $insertsql.=",RAS_PORT";
  $insertsql2.="','".$values['RAS_PORT'];
  $insertsql.=",Q931_PORT";
  $insertsql2.="','".$values['Q931_PORT'];
  $insertsql.=",H245_PORT";
  $insertsql2.="','".$values['H245_PORT'];
  $insertsql.=",DISABLE_FASTSTART";
  $insertsql2.="','".$values['DISABLE_FASTSTART'];
  $insertsql.=",H323_DISABLE_TUNNEL";
  $insertsql2.="','".$values['H323_DISABLE_TUNNEL'];
  $insertsql.=",H323_REGISTER_MODE";
  $insertsql2.="','".$values['H323_REGISTER_MODE'];
  $insertsql.=",H323_INBAND_DTMF";
  $insertsql2.="','".$values['H323_INBAND_DTMF'];
  $insertsql.=",H323_QOS";
  $insertsql2.="','".$values['H323_QOS'];
  $insertsql.=",H323_TOS";
  $insertsql2.="','".$values['H323_TOS'];
  $insertsql.=",H323_DIFFSERV";
  $insertsql2.="','".$values['H323_DIFFSERV'];
  $insertsql.=",H323_NAT_TRAVERSAL";
  $insertsql2.="','".$values['H323_NAT_TRAVERSAL'];
  $insertsql.=",H323_PORTFWD_TYPE";
  $insertsql2.="','".$values['H323_PORTFWD_TYPE'];
  $insertsql.=",H323_PORTFWD_GW";
  $insertsql2.="','".$values['H323_PORTFWD_GW'];
  $insertsql.=",H323_RELAY_SERVER";
  $insertsql2.="','".$values['H323_RELAY_SERVER'];
  $insertsql.=",H323_RELAY_PORT";
  $insertsql2.="','".$values['H323_RELAY_PORT'];
  $insertsql.=",H323_RELAY_USER";
  $insertsql2.="','".$values['H323_RELAY_USER'];
  $insertsql.=",H323_RELAY_PASSWD";
  $insertsql2.="','".$values['H323_RELAY_PASSWD'];
  $insertsql.=",H323_RELAY_ENCRYPT";
  $insertsql2.="','".$values['H323_RELAY_ENCRYPT'];
  $insertsql.=",H323_RELAY_MODE";
  $insertsql2.="','".$values['H323_RELAY_MODE'];
  $insertsql.=",H323_RELAY_SERVER1";
  $insertsql2.="','".$values['H323_RELAY_SERVER1'];
  $insertsql.=",H323_RELAY_SERVER2";
  $insertsql2.="','".$values['H323_RELAY_SERVER2'];
  $insertsql.=",H323_RELAY_SERVER3";
  $insertsql2.="','".$values['H323_RELAY_SERVER3'];
  $insertsql.=",H323_RELAY_SERVER4";
  $insertsql2.="','".$values['H323_RELAY_SERVER4'];
  $insertsql.=",SIP_LOCAL_PORT";
  $insertsql2.="','".$values['SIP_LOCAL_PORT'];
  $insertsql.=",SIP_NO_ALIVE";
  $insertsql2.="','".$values['SIP_NO_ALIVE'];
  $insertsql.=",INBAND_DTMF";
  $insertsql2.="','".$values['INBAND_DTMF'];
  $insertsql.=",SIP_OUTBAND_DTMF_TYPE";
  $insertsql2.="','".$values['SIP_OUTBAND_DTMF_TYPE'];
  $insertsql.=",DTMF_PAYLOAD_TYPE";
  $insertsql2.="','".$values['DTMF_PAYLOAD_TYPE'];
  $insertsql.=",SIP_QOS";
  $insertsql2.="','".$values['SIP_QOS'];
  $insertsql.=",SIP_TOS";
  $insertsql2.="','".$values['SIP_TOS'];
  $insertsql.=",SIP_DIFFSERV";
  $insertsql2.="','".$values['SIP_DIFFSERV'];
  $insertsql.=",SIP_CRYPT";
  $insertsql2.="','".$values['SIP_CRYPT'];
  $insertsql.=",SIP_RC4_KEY";
  $insertsql2.="','".$values['SIP_RC4_KEY'];
  $insertsql.=",ECM_CRYPT_KEY";
  $insertsql2.="','".$values['ECM_CRYPT_KEY'];
  $insertsql.=",SIP_ET263_CRYPT_TYPE";
  $insertsql2.="','".$values['SIP_ET263_CRYPT_TYPE'];
  $insertsql.=",SIP_ET263_CRYPT_DEP";
  $insertsql2.="','".$values['SIP_ET263_CRYPT_DEP'];
  $insertsql.=",SIP_NAT_TRAVERSAL";
  $insertsql2.="','".$values['SIP_NAT_TRAVERSAL'];
  $insertsql.=",SIP_STUN_SERVER";
  $insertsql2.="','".$values['SIP_STUN_SERVER'];
  $insertsql.=",SIP_RELAY_SERVER";
  $insertsql2.="','".$values['SIP_RELAY_SERVER'];
  $insertsql.=",SIP_RELAY_PORT";
  $insertsql2.="','".$values['SIP_RELAY_PORT'];
  $insertsql.=",SIP_RELAY_USER";
  $insertsql2.="','".$values['SIP_RELAY_USER'];
  $insertsql.=",SIP_RELAY_PASSWD";
  $insertsql2.="','".$values['SIP_RELAY_PASSWD'];
  $insertsql.=",SIP_RELAY_ENCRYPT";
  $insertsql2.="','".$values['SIP_RELAY_ENCRYPT'];
  $insertsql.=",SIP_RELAY_SERVER1";
  $insertsql2.="','".$values['SIP_RELAY_SERVER1'];
  $insertsql.=",SIP_RELAY_SERVER2";
  $insertsql2.="','".$values['SIP_RELAY_SERVER2'];
  $insertsql.=",SIP_RELAY_SERVER3";
  $insertsql2.="','".$values['SIP_RELAY_SERVER3'];
  $insertsql.=",SIP_RELAY_SERVER4";
  $insertsql2.="','".$values['SIP_RELAY_SERVER4'];
  $insertsql.=",PPTP_ENABLE";
  $insertsql2.="','".$values['PPTP_ENABLE'];
  $insertsql.=",PPTP_SERVER_ADDR";
  $insertsql2.="','".$values['PPTP_SERVER_ADDR'];
  $insertsql.=",PPTP_SERVER_ID";
  $insertsql2.="','".$values['PPTP_SERVER_ID'];
  $insertsql.=",PPTP_SERVER_PW";
  $insertsql2.="','".$values['PPTP_SERVER_PW'];

  $insertsql.=",RADMIN_ENABLE";
  $insertsql2.="','".$values['RADMIN_ENABLE'];
  $insertsql.=",RADMIN_SERVER";
  $insertsql2.="','".$values['RADMIN_SERVER'];
  $insertsql.=",RADMIN_PORT";
  $insertsql2.="','".$values['RADMIN_PORT'];
  $insertsql.=",RADMIN_ID";
  $insertsql2.="','".$values['RADMIN_ID'];
  $insertsql.=",RADMIN_KEY";
  $insertsql2.="','".$values['RADMIN_KEY'];
  $insertsql.=",AUTOCFG";
  $insertsql2.="','".$values['AUTOCFG'];
  $insertsql.=",AUTOCFG_SERVER";
  $insertsql2.="','".$values['AUTOCFG_SERVER'];
  $insertsql.=",AUTOCFG_REFRESH";                                                                                 
  $insertsql2.="','".$values['AUTOCFG_REFRESH'];    


        /*siptimer*/  

  $insertsql.=",UNANSWER_FW_EXP";
  $insertsql2.="','".$values['UNANSWER_FW_EXP'];
  $insertsql.=",UNANSWER_EXP";
  $insertsql2.="','".$values['UNANSWER_EXP'];
  $insertsql.=",NON_INVITE_TS_EXP";
  $insertsql2.="','".$values['NON_INVITE_TS_EXP'];
  $insertsql.=",INVITE_TS_EXP";
  $insertsql2.="','".$values['INVITE_TS_EXP'];
  $insertsql.=",RETRANSMIT_T1";
  $insertsql2.="','".$values['RETRANSMIT_T1'];
  $insertsql.=",RETRANSMIT_T2";
  $insertsql2.="','".$values['RETRANSMIT_T2'];

  
 /*codec*/  
  $insertsql.=",PREFER_CODEC1";
  $insertsql2.="','".$values['PREFER_CODEC1'];
  $insertsql.=",CODEC1_DISABLE";
  $insertsql2.="','".$values['CODEC1_DISABLE'];
  $insertsql.=",PREFER_CODEC2";
  $insertsql2.="','".$values['PREFER_CODEC2'];
  $insertsql.=",CODEC2_DISABLE";
  $insertsql2.="','".$values['CODEC2_DISABLE'];
  $insertsql.=",PREFER_CODEC3";
  $insertsql2.="','".$values['PREFER_CODEC3'];
  $insertsql.=",CODEC3_DISABLE";
  $insertsql2.="','".$values['CODEC3_DISABLE'];
  $insertsql.=",PREFER_CODEC4";
  $insertsql2.="','".$values['PREFER_CODEC4'];
  $insertsql.=",CODEC4_DISABLE";
  $insertsql2.="','".$values['CODEC4_DISABLE'];
  $insertsql.=",PREFER_CODEC5";
  $insertsql2.="','".$values['PREFER_CODEC5'];
  $insertsql.=",CODEC5_DISABLE";
  $insertsql2.="','".$values['CODEC5_DISABLE'];
  $insertsql.=",PREFER_CODEC6";
  $insertsql2.="','".$values['PREFER_CODEC6'];
  $insertsql.=",CODEC6_DISABLE";
  $insertsql2.="','".$values['CODEC6_DISABLE'];
 

/*gsm */
  $insertsql.=",L1_DISABLE_OUT";
  $insertsql2.="','".$values['L1_DISABLE_OUT'];
  $insertsql.=",L1_FW_NUM_TO_PSTN";
  $insertsql2.="','".$values['L1_FW_NUM_TO_PSTN'];
  $insertsql.=",L1_P_DIGIT_MAP";
  $insertsql2.="','".$values['L1_P_DIGIT_MAP'];
  $insertsql.=",L1_FW2PSTN_AUTH_MODE";
  $insertsql2.="','".$values['L1_FW2PSTN_AUTH_MODE'];
  $insertsql.=",L1_FW_TO_PSTN_PASSWD";
  $insertsql2.="','".$values['L1_FW_TO_PSTN_PASSWD'];
  $insertsql.=",L1_SIM_EXP";
  $insertsql2.="','".$values['L1_SIM_EXP'];
  $insertsql.=",L1_SIM_EXP_UNIT";
  $insertsql2.="','".$values['L1_SIM_EXP_UNIT'];
  $insertsql.=",L1_SIM_STRP_NUM";
  $insertsql2.="','".$values['L1_SIM_STRP_NUM'];
  $insertsql.=",L1_SIM_STRP_TIME";
  $insertsql2.="','".$values['L1_SIM_STRP_TIME'];
  $insertsql.=",L1_SIM_ID";
  $insertsql2.="','".$values['L1_SIM_ID'];
  $insertsql.=",L1_DISABLE_IN";
  $insertsql2.="','".$values['L1_DISABLE_IN'];
  $insertsql.=",L1_FW_NUM_TO_VOIP";
  $insertsql2.="','".$values['L1_FW_NUM_TO_VOIP'];
  $insertsql.=",L1_V_DIGIT_MAP";
  $insertsql2.="','".$values['L1_V_DIGIT_MAP'];
  $insertsql.=",L1_FW2VOIP_AUTH_MODE";
  $insertsql2.="','".$values['L1_FW2VOIP_AUTH_MODE'];
  $insertsql.=",L1_FW_TO_VOIP_PASSWD";
  $insertsql2.="','".$values['L1_FW_TO_VOIP_PASSWD'];
  $insertsql.=",GSM_CW_ENABLE";
  $insertsql2.="','".$values['GSM_CW_ENABLE'];
  $insertsql.=",SMS_MODE";
  $insertsql2.="','".$values['SMS_MODE'];
  $insertsql.=",SMS_DIAL_ENABLE";
  $insertsql2.="','".$values['SMS_DIAL_ENABLE'];
  $insertsql.=",SMS_PREFIX";
  $insertsql2.="','".$values['SMS_PREFIX'];
  $insertsql.=",SMS_FW_NUM";
  $insertsql2.="','".$values['SMS_FW_NUM'];
  $insertsql.=",SIP_CID_FW_MODE";
  $insertsql2.="','".$values['SIP_CID_FW_MODE'];
  $insertsql.=",CID_FW_PREFIX";
  $insertsql2.="','".$values['CID_FW_PREFIX'];
  $insertsql.=",H323_CID_FW";
  $insertsql2.="','".$values['H323_CID_FW'];

/*gsm cf*/
  $insertsql.=",GSM_CF_UNCND_ENABLE";
  $insertsql2.="','".$values['GSM_CF_UNCND_ENABLE'];
  $insertsql.=",GSM_CF_UNCND_NUM";
  $insertsql2.="','".$values['GSM_CF_UNCND_NUM'];
  $insertsql.=",GSM_CF_BUSY_ENABLE";
  $insertsql2.="','".$values['GSM_CF_BUSY_ENABLE'];
  $insertsql.=",GSM_CF_BUSY_NUM";
  $insertsql2.="','".$values['GSM_CF_BUSY_NUM'];
  $insertsql.=",GSM_CF_NOREPLY_ENABLE";
  $insertsql2.="','".$values['GSM_CF_NOREPLY_ENABLE'];
  $insertsql.=",GSM_CF_NOREPLY_NUM";
  $insertsql2.="','".$values['GSM_CF_NOREPLY_NUM'];
  $insertsql.=",GSM_CF_NOTREACHABLE_ENABLE";
  $insertsql2.="','".$values['GSM_CF_NOTREACHABLE_ENABLE'];
  $insertsql.=",GSM_CF_NOTREACHABLE_NUM";
  $insertsql2.="','".$values['GSM_CF_NOTREACHABLE_NUM'];

  $insertsql.=",L1_PSTN_TRUST_NUM_1";
  $insertsql2.="','".$values['L1_PSTN_TRUST_NUM_1'];
  $insertsql.=",L1_PSTN_TRUST_NUM_2";
  $insertsql2.="','".$values['L1_PSTN_TRUST_NUM_2'];
  $insertsql.=",L1_PSTN_TRUST_NUM_3";
  $insertsql2.="','".$values['L1_PSTN_TRUST_NUM_3'];
  $insertsql.=",L1_PSTN_TRUST_NUM_4";
  $insertsql2.="','".$values['L1_PSTN_TRUST_NUM_4'];
  $insertsql.=",L1_PSTN_TRUST_NUM_5";
  $insertsql2.="','".$values['L1_PSTN_TRUST_NUM_5'];
  $insertsql.=",L1_PSTN_TRUST_NUM_6";
  $insertsql2.="','".$values['L1_PSTN_TRUST_NUM_6'];
  $insertsql.=",L1_PSTN_TRUST_NUM_7";
  $insertsql2.="','".$values['L1_PSTN_TRUST_NUM_7'];
  $insertsql.=",L1_PSTN_TRUST_NUM_8";
  $insertsql2.="','".$values['L1_PSTN_TRUST_NUM_8'];
  $insertsql.=",L1_PSTN_TRUST_NUM_9";
  $insertsql2.="','".$values['L1_PSTN_TRUST_NUM_9'];
  $insertsql.=",L1_PSTN_TRUST_NUM_10";
  $insertsql2.="','".$values['L1_PSTN_TRUST_NUM_10'];
  $insertsql.=",L1_PSTN_TRUST_NUM_11";
  $insertsql2.="','".$values['L1_PSTN_TRUST_NUM_11'];
  $insertsql.=",L1_PSTN_TRUST_NUM_12";
  $insertsql2.="','".$values['L1_PSTN_TRUST_NUM_12'];
  $insertsql.=",L1_PSTN_TRUST_NUM_13";
  $insertsql2.="','".$values['L1_PSTN_TRUST_NUM_13'];
  $insertsql.=",L1_PSTN_TRUST_NUM_14";
  $insertsql2.="','".$values['L1_PSTN_TRUST_NUM_14'];
  $insertsql.=",L1_PSTN_TRUST_NUM_15";
  $insertsql2.="','".$values['L1_PSTN_TRUST_NUM_15'];

  $insertsql.=",L1_VOIP_TRUST_NUM_1";
  $insertsql2.="','".$values['L1_VOIP_TRUST_NUM_1'];
  $insertsql.=",L1_VOIP_TRUST_NUM_2";
  $insertsql2.="','".$values['L1_VOIP_TRUST_NUM_2'];
  $insertsql.=",L1_VOIP_TRUST_NUM_3";
  $insertsql2.="','".$values['L1_VOIP_TRUST_NUM_3'];
  $insertsql.=",L1_VOIP_TRUST_NUM_4";
  $insertsql2.="','".$values['L1_VOIP_TRUST_NUM_4'];
  $insertsql.=",L1_VOIP_TRUST_NUM_5";
  $insertsql2.="','".$values['L1_VOIP_TRUST_NUM_5'];
  $insertsql.=",L1_VOIP_TRUST_NUM_6";
  $insertsql2.="','".$values['L1_VOIP_TRUST_NUM_6'];
  $insertsql.=",L1_VOIP_TRUST_NUM_7";
  $insertsql2.="','".$values['L1_VOIP_TRUST_NUM_7'];
  $insertsql.=",L1_VOIP_TRUST_NUM_8";
  $insertsql2.="','".$values['L1_VOIP_TRUST_NUM_8'];
  $insertsql.=",L1_VOIP_TRUST_NUM_9";
  $insertsql2.="','".$values['L1_VOIP_TRUST_NUM_9'];
  $insertsql.=",L1_VOIP_TRUST_NUM_10";
  $insertsql2.="','".$values['L1_VOIP_TRUST_NUM_10'];
  $insertsql.=",L1_VOIP_TRUST_NUM_11";
  $insertsql2.="','".$values['L1_VOIP_TRUST_NUM_11'];
  $insertsql.=",L1_VOIP_TRUST_NUM_12";
  $insertsql2.="','".$values['L1_VOIP_TRUST_NUM_12'];
  $insertsql.=",L1_VOIP_TRUST_NUM_13";
  $insertsql2.="','".$values['L1_VOIP_TRUST_NUM_13'];
  $insertsql.=",L1_VOIP_TRUST_NUM_14";
  $insertsql2.="','".$values['L1_VOIP_TRUST_NUM_14'];
  $insertsql.=",L1_VOIP_TRUST_NUM_15";
  $insertsql2.="','".$values['L1_VOIP_TRUST_NUM_15'];


/*fxs*/
  $insertsql.=",S1_DIGIT_MAP";
  $insertsql2.="','".$values['S1_DIGIT_MAP'];
  $insertsql.=",L1_HOT_LINE_ENABLE";
  $insertsql2.="','".$values['L1_HOT_LINE_ENABLE'];
  $insertsql.=",L1_HOT_LINE_NUM";
  $insertsql2.="','".$values['L1_HOT_LINE_NUM'];
  $insertsql.=",STAR_CMD_HOLD_KEY";
  $insertsql2.="','".$values['STAR_CMD_HOLD_KEY'];
  $insertsql.=",STAR_CMD_TRANSFER_KEY";
  $insertsql2.="','".$values['STAR_CMD_TRANSFER_KEY'];
  $insertsql.=",AUTODIAL_TIME";
  $insertsql2.="','".$values['AUTODIAL_TIME'];
  $insertsql.=",CALL_HOLD";
  $insertsql2.="','".$values['CALL_HOLD'];
  $insertsql.=",CALL_TRANSFER";
  $insertsql2.="','".$values['CALL_TRANSFER'];

/*sms*/
  $insertsql.=",SMS_SENDER";
  $insertsql2.="','".$values['SMS_SENDER'];
  $insertsql.=",SMS_SERVER";
  $insertsql2.="','".$values['SMS_SERVER'];
  $insertsql.=",SMS_PORT";
  $insertsql2.="','".$values['SMS_PORT'];
  $insertsql.=",SMS_CLI_ID";
  $insertsql2.="','".$values['SMS_CLI_ID'];
  $insertsql.=",SMS_CLI_PASSWD";
  $insertsql2.="','".$values['SMS_CLI_PASSWD'];
  $insertsql.=",SMS_MSG_IGNATURE";
  $insertsql2.="','".$values['SMS_MSG_IGNATURE'];
?>
