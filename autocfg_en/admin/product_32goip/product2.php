<?php
$values['L1_DISABLE_OUT'] = $_POST['line1_fw_to_pstn']=='on'?'0':'1';
  $updatesql_a.=",L1_DISABLE_OUT='".$values['L1_DISABLE_OUT']."'";
if($values['L1_DISABLE_OUT'] == 0):
  $values['L1_FW_NUM_TO_PSTN'] = $_POST['line1_fw_num_to_pstn'] ;
  $updatesql_a.=",L1_FW_NUM_TO_PSTN='".$values['L1_FW_NUM_TO_PSTN']."'";
  $values['L1_P_DIGIT_MAP'] = $_POST['line1_p_dial_plan'] ;
  $updatesql_a.=",L1_P_DIGIT_MAP='".$values['L1_P_DIGIT_MAP']."'";
  $values['LINE1_P_DPRST'] = $_POST['line1_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql_a.=",LINE1_P_DPRST='".$values['LINE1_P_DPRST']."'";
  $values['L1_FW2PSTN_AUTH_MODE'] = $_POST['line1_fw2pstn_auth_mode'] ;
  $updatesql_a.=",L1_FW2PSTN_AUTH_MODE='".$values['L1_FW2PSTN_AUTH_MODE']."'";
if($values['L1_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L1_FW_TO_PSTN_PASSWD'] = $_POST['line1_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L1_FW_TO_PSTN_PASSWD='".$values['L1_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L1_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L1_FW_TO_PSTN_PASSWD'] = $_POST['l1_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L1_FW_TO_PSTN_PASSWD='".$values['L1_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE1_OUT_INTERVAL'] = $_POST['line1_out_interval'] ;
  $updatesql_a.=",LINE1_OUT_INTERVAL='".$values['LINE1_OUT_INTERVAL']."'";
endif; 

if(!isset($_POST['line1_sms_sender']))
  	  $values['L1_SMS_SENDER']	= 0;
  else
  	  $values['L1_SMS_SENDER'] = $_POST['line1_sms_sender']=='on'?'1':'0';
  $updatesql_a.=",L1_SMS_SENDER='".$values['L1_SMS_SENDER']."'";
if($values['L1_SMS_SENDER'] == 1):
  $values['L1_SMS_SERVER'] = $_POST['line1_sms_server'] ;
  $updatesql_a.=",L1_SMS_SERVER='".$values['L1_SMS_SERVER']."'";
  $values['L1_SMS_PORT'] = $_POST['line1_sms_port'] ;
  $updatesql_a.=",L1_SMS_PORT='".$values['L1_SMS_PORT']."'";
  $values['L1_SMS_CLI_ID'] = $_POST['line1_sms_cli_id'] ;
  $updatesql_a.=",L1_SMS_CLI_ID='".$values['L1_SMS_CLI_ID']."'";
  $values['L1_SMS_CLI_PASSWD'] = $_POST['line1_sms_cli_passwd'] ;
  $updatesql_a.=",L1_SMS_CLI_PASSWD='".$values['L1_SMS_CLI_PASSWD']."'";
endif; 
  $values['LINE1_SMS_VALIDITY_TIME'] = $_POST['line1_sms_validity_time'] ;
  $updatesql_a.=",LINE1_SMS_VALIDITY_TIME='".$values['LINE1_SMS_VALIDITY_TIME']."'";
  $values['L1_DISABLE_SMS_ACK'] = $_POST['line1_sms_ack_enable']=='on'?'0':'1';
  $updatesql_a.=",L1_DISABLE_SMS_ACK='".$values['L1_DISABLE_SMS_ACK']."'";
 

$values['L1_DISABLE_IN'] = $_POST['line1_fw_to_voip']=='on'?'0':'1';
  $updatesql_a.=",L1_DISABLE_IN='".$values['L1_DISABLE_IN']."'";
if($values['L1_DISABLE_IN'] == 0):
  $values['L1_FW_NUM_TO_VOIP'] = $_POST['line1_fw_num_to_voip'] ;
  $updatesql_a.=",L1_FW_NUM_TO_VOIP='".$values['L1_FW_NUM_TO_VOIP']."'";
  $values['L1_V_DIGIT_MAP'] = $_POST['line1_v_dial_plan'] ;
  $updatesql_a.=",L1_V_DIGIT_MAP='".$values['L1_V_DIGIT_MAP']."'";
  $values['L1_FW2VOIP_AUTH_MODE'] = $_POST['line1_fw2voip_auth_mode'] ;
  $updatesql_a.=",L1_FW2VOIP_AUTH_MODE='".$values['L1_FW2VOIP_AUTH_MODE']."'";
if($values['L1_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L1_FW_TO_VOIP_PASSWD'] = $_POST['line1_fw_to_voip_passwd'] ;
  $updatesql_a.=",L1_FW_TO_VOIP_PASSWD='".$values['L1_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L1_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L1_FW_TO_VOIP_PASSWD'] = $_POST['l1_fw_to_voip_passwd'] ;
  $updatesql_a.=",L1_FW_TO_VOIP_PASSWD='".$values['L1_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 

  $values['L1_GROUP_MODE'] = $_POST['line1_gsm_group_mode'] ;
  $updatesql_a.=",L1_GROUP_MODE='".$values['L1_GROUP_MODE']."'";
if($values['L1_GROUP_MODE'] == 'SVR'):
  $values['L1_GSM_FW_MODE'] = $_POST['line1_gsm_fw_mode'] ;
  $updatesql_a.=",L1_GSM_FW_MODE='".$values['L1_GSM_FW_MODE']."'";
  $values['L1_PARTNER_SVR'] = $_POST['line1_group_share_addr'] ;
  $updatesql_a.=",L1_PARTNER_SVR='".$values['L1_PARTNER_SVR']."'";
endif; 
if($values['L1_GROUP_MODE'] == 'CLI'):
  $values['L1_GROUP_SVR'] = $_POST['line1_group_svr_addr'] ;
  $updatesql_a.=",L1_GROUP_SVR='".$values['L1_GROUP_SVR']."'";
endif;
  $values['L1_GSM_NUMBER'] = $_POST['line1_gsm_num'] ;
  $updatesql_a.=",L1_GSM_NUMBER='".$values['L1_GSM_NUMBER']."'";
  $values['L1_CALLER_ANONYMOUS'] = $_POST['line1_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql_a.=",L1_CALLER_ANONYMOUS='".$values['L1_CALLER_ANONYMOUS']."'";
  
  
if($values['TELPORT'] >= 2): 
endif; 
  $values['L2_DISABLE_OUT'] = $_POST['line2_fw_to_pstn']=='on'?'0':'1';
  $updatesql_a.=",L2_DISABLE_OUT='".$values['L2_DISABLE_OUT']."'";
if($values['L2_DISABLE_OUT'] == 0):
  $values['L2_FW_NUM_TO_PSTN'] = $_POST['line2_fw_num_to_pstn'] ;
  $updatesql_a.=",L2_FW_NUM_TO_PSTN='".$values['L2_FW_NUM_TO_PSTN']."'";
  $values['L2_P_DIGIT_MAP'] = $_POST['line2_p_dial_plan'] ;
  $updatesql_a.=",L2_P_DIGIT_MAP='".$values['L2_P_DIGIT_MAP']."'";
  $values['LINE2_P_DPRST'] = $_POST['line2_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql_a.=",LINE2_P_DPRST='".$values['LINE2_P_DPRST']."'";
  $values['L2_FW2PSTN_AUTH_MODE'] = $_POST['line2_fw2pstn_auth_mode'] ;
  $updatesql_a.=",L2_FW2PSTN_AUTH_MODE='".$values['L2_FW2PSTN_AUTH_MODE']."'";
if($values['L2_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L2_FW_TO_PSTN_PASSWD'] = $_POST['line2_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L2_FW_TO_PSTN_PASSWD='".$values['L2_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L2_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L2_FW_TO_PSTN_PASSWD'] = $_POST['l2_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L2_FW_TO_PSTN_PASSWD='".$values['L2_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE2_OUT_INTERVAL'] = $_POST['line2_out_interval'] ;
  $updatesql_a.=",LINE2_OUT_INTERVAL='".$values['LINE2_OUT_INTERVAL']."'";
endif; 

   if(!isset($_POST['line2_sms_sender']))
  	  $values['L2_SMS_SENDER']	= 0;
  else
  	  $values['L2_SMS_SENDER'] = $_POST['line2_sms_sender']=='on'?'1':'0';
  $updatesql_a.=",L2_SMS_SENDER='".$values['L2_SMS_SENDER']."'";
if($values['L2_SMS_SENDER'] == 1):
  $values['L2_SMS_SERVER'] = $_POST['line2_sms_server'] ;
  $updatesql_a.=",L2_SMS_SERVER='".$values['L2_SMS_SERVER']."'";
  $values['L2_SMS_PORT'] = $_POST['line2_sms_port'] ;
  $updatesql_a.=",L2_SMS_PORT='".$values['L2_SMS_PORT']."'";
  $values['L2_SMS_CLI_ID'] = $_POST['line2_sms_cli_id'] ;
  $updatesql_a.=",L2_SMS_CLI_ID='".$values['L2_SMS_CLI_ID']."'";
  $values['L2_SMS_CLI_PASSWD'] = $_POST['line2_sms_cli_passwd'] ;
  $updatesql_a.=",L2_SMS_CLI_PASSWD='".$values['L2_SMS_CLI_PASSWD']."'";
endif; 
  $values['LINE2_SMS_VALIDITY_TIME'] = $_POST['line2_sms_validity_time'] ;
  $updatesql_a.=",LINE2_SMS_VALIDITY_TIME='".$values['LINE2_SMS_VALIDITY_TIME']."'";
  $values['L2_DISABLE_SMS_ACK'] = $_POST['line2_sms_ack_enable']=='on'?'0':'1';
  $updatesql_a.=",L2_DISABLE_SMS_ACK='".$values['L2_DISABLE_SMS_ACK']."'";


  $values['L2_DISABLE_IN'] = $_POST['line2_fw_to_voip']=='on'?'0':'1';
  $updatesql_a.=",L2_DISABLE_IN='".$values['L2_DISABLE_IN']."'";
if($values['L2_DISABLE_IN'] == 0):
  $values['L2_FW_NUM_TO_VOIP'] = $_POST['line2_fw_num_to_voip'] ;
  $updatesql_a.=",L2_FW_NUM_TO_VOIP='".$values['L2_FW_NUM_TO_VOIP']."'";
  $values['L2_V_DIGIT_MAP'] = $_POST['line2_v_dial_plan'] ;
  $updatesql_a.=",L2_V_DIGIT_MAP='".$values['L2_V_DIGIT_MAP']."'";
  $values['L2_FW2VOIP_AUTH_MODE'] = $_POST['line2_fw2voip_auth_mode'] ;
  $updatesql_a.=",L2_FW2VOIP_AUTH_MODE='".$values['L2_FW2VOIP_AUTH_MODE']."'";
if($values['L2_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L2_FW_TO_VOIP_PASSWD'] = $_POST['line2_fw_to_voip_passwd'] ;
  $updatesql_a.=",L2_FW_TO_VOIP_PASSWD='".$values['L2_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L2_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L2_FW_TO_VOIP_PASSWD'] = $_POST['l2_fw_to_voip_passwd'] ;
  $updatesql_a.=",L2_FW_TO_VOIP_PASSWD='".$values['L2_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 

  $values['L2_GROUP_MODE'] = $_POST['line2_gsm_group_mode'] ;
  $updatesql_a.=",L2_GROUP_MODE='".$values['L2_GROUP_MODE']."'";
if($values['L2_GROUP_MODE'] == 'SVR'):
  $values['L2_GSM_FW_MODE'] = $_POST['line2_gsm_fw_mode'] ;
  $updatesql_a.=",L2_GSM_FW_MODE='".$values['L2_GSM_FW_MODE']."'";
  $values['L2_PARTNER_SVR'] = $_POST['line2_group_share_addr'] ;
  $updatesql_a.=",L2_PARTNER_SVR='".$values['L2_PARTNER_SVR']."'";
endif; 
if($values['L2_GROUP_MODE'] == 'CLI'):
  $values['L2_GROUP_SVR'] = $_POST['line2_group_svr_addr'] ;
  $updatesql_a.=",L2_GROUP_SVR='".$values['L2_GROUP_SVR']."'";
endif;
  $values['L2_GSM_NUMBER'] = $_POST['line2_gsm_num'] ;
  $updatesql_a.=",L2_GSM_NUMBER='".$values['L2_GSM_NUMBER']."'";
  $values['L2_CALLER_ANONYMOUS'] = $_POST['line2_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql_a.=",L2_CALLER_ANONYMOUS='".$values['L2_CALLER_ANONYMOUS']."'";
 
if($values['TELPORT'] >= 3): 
endif; 

 $values['L3_DISABLE_OUT'] = $_POST['line3_fw_to_pstn']=='on'?'0':'1';
  $updatesql_a.=",L3_DISABLE_OUT='".$values['L3_DISABLE_OUT']."'";
if($values['L3_DISABLE_OUT'] == 0):
  $values['L3_FW_NUM_TO_PSTN'] = $_POST['line3_fw_num_to_pstn'] ;
  $updatesql_a.=",L3_FW_NUM_TO_PSTN='".$values['L3_FW_NUM_TO_PSTN']."'";
  $values['L3_P_DIGIT_MAP'] = $_POST['line3_p_dial_plan'] ;
  $updatesql_a.=",L3_P_DIGIT_MAP='".$values['L3_P_DIGIT_MAP']."'";
  $values['LINE3_P_DPRST'] = $_POST['line3_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql_a.=",LINE3_P_DPRST='".$values['LINE3_P_DPRST']."'";
  $values['L3_FW2PSTN_AUTH_MODE'] = $_POST['line3_fw2pstn_auth_mode'] ;
  $updatesql_a.=",L3_FW2PSTN_AUTH_MODE='".$values['L3_FW2PSTN_AUTH_MODE']."'";
if($values['L3_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L3_FW_TO_PSTN_PASSWD'] = $_POST['line3_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L3_FW_TO_PSTN_PASSWD='".$values['L3_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L3_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L3_FW_TO_PSTN_PASSWD'] = $_POST['l3_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L3_FW_TO_PSTN_PASSWD='".$values['L3_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE3_OUT_INTERVAL'] = $_POST['line3_out_interval'] ;
  $updatesql_a.=",LINE3_OUT_INTERVAL='".$values['LINE3_OUT_INTERVAL']."'";
endif; 

if(!isset($_POST['line3_sms_sender']))
  $values['L3_SMS_SENDER']	= 0;
else
  $values['L3_SMS_SENDER'] = $_POST['line3_sms_sender']=='on'?'1':'0';
  $updatesql_a.=",L3_SMS_SENDER='".$values['L3_SMS_SENDER']."'";
if($values['L3_SMS_SENDER'] == 1):
  $values['L3_SMS_SERVER'] = $_POST['line3_sms_server'] ;
  $updatesql_a.=",L3_SMS_SERVER='".$values['L3_SMS_SERVER']."'";
  $values['L3_SMS_PORT'] = $_POST['line3_sms_port'] ;
  $updatesql_a.=",L3_SMS_PORT='".$values['L3_SMS_PORT']."'";
  $values['L3_SMS_CLI_ID'] = $_POST['line3_sms_cli_id'] ;
  $updatesql_a.=",L3_SMS_CLI_ID='".$values['L3_SMS_CLI_ID']."'";
  $values['L3_SMS_CLI_PASSWD'] = $_POST['line3_sms_cli_passwd'] ;
  $updatesql_a.=",L3_SMS_CLI_PASSWD='".$values['L3_SMS_CLI_PASSWD']."'";
endif; 
 $values['LINE3_SMS_VALIDITY_TIME'] = $_POST['line3_sms_validity_time'] ;
  $updatesql_a.=",LINE3_SMS_VALIDITY_TIME='".$values['LINE3_SMS_VALIDITY_TIME']."'";
  $values['L3_DISABLE_SMS_ACK'] = $_POST['line3_sms_ack_enable']=='on'?'0':'1';
  $updatesql_a.=",L3_DISABLE_SMS_ACK='".$values['L3_DISABLE_SMS_ACK']."'";


 $values['L3_DISABLE_IN'] = $_POST['line3_fw_to_voip']=='on'?'0':'1';
  $updatesql_a.=",L3_DISABLE_IN='".$values['L3_DISABLE_IN']."'";
if($values['L3_DISABLE_IN'] == 0):
  $values['L3_FW_NUM_TO_VOIP'] = $_POST['line3_fw_num_to_voip'] ;
  $updatesql_a.=",L3_FW_NUM_TO_VOIP='".$values['L3_FW_NUM_TO_VOIP']."'";
  $values['L3_V_DIGIT_MAP'] = $_POST['line3_v_dial_plan'] ;
  $updatesql_a.=",L3_V_DIGIT_MAP='".$values['L3_V_DIGIT_MAP']."'";
  $values['L3_FW2VOIP_AUTH_MODE'] = $_POST['line3_fw2voip_auth_mode'] ;
  $updatesql_a.=",L3_FW2VOIP_AUTH_MODE='".$values['L3_FW2VOIP_AUTH_MODE']."'";
if($values['L3_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L3_FW_TO_VOIP_PASSWD'] = $_POST['line3_fw_to_voip_passwd'] ;
  $updatesql_a.=",L3_FW_TO_VOIP_PASSWD='".$values['L3_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L3_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L3_FW_TO_VOIP_PASSWD'] = $_POST['l3_fw_to_voip_passwd'] ;
  $updatesql_a.=",L3_FW_TO_VOIP_PASSWD='".$values['L3_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 

  $values['L3_GROUP_MODE'] = $_POST['line3_gsm_group_mode'] ;
  $updatesql_a.=",L3_GROUP_MODE='".$values['L3_GROUP_MODE']."'";
if($values['L3_GROUP_MODE'] == 'SVR'):
  $values['L3_GSM_FW_MODE'] = $_POST['line3_gsm_fw_mode'] ;
  $updatesql_a.=",L3_GSM_FW_MODE='".$values['L3_GSM_FW_MODE']."'";
  $values['L3_PARTNER_SVR'] = $_POST['line3_group_share_addr'] ;
  $updatesql_a.=",L3_PARTNER_SVR='".$values['L3_PARTNER_SVR']."'";
endif; 
if($values['L3_GROUP_MODE'] == 'CLI'):
  $values['L3_GROUP_SVR'] = $_POST['line3_group_svr_addr'] ;
  $updatesql_a.=",L3_GROUP_SVR='".$values['L3_GROUP_SVR']."'";
endif;
  $values['L3_GSM_NUMBER'] = $_POST['line3_gsm_num'] ;
  $updatesql_a.=",L3_GSM_NUMBER='".$values['L3_GSM_NUMBER']."'";
  $values['L3_CALLER_ANONYMOUS'] = $_POST['line3_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql_a.=",L3_CALLER_ANONYMOUS='".$values['L3_CALLER_ANONYMOUS']."'";
  
if($values['TELPORT'] >= 4): 
endif; 
 $values['L4_DISABLE_OUT'] = $_POST['line4_fw_to_pstn']=='on'?'0':'1';
  $updatesql_a.=",L4_DISABLE_OUT='".$values['L4_DISABLE_OUT']."'";
if($values['L4_DISABLE_OUT'] == 0):
  $values['L4_FW_NUM_TO_PSTN'] = $_POST['line4_fw_num_to_pstn'] ;
  $updatesql_a.=",L4_FW_NUM_TO_PSTN='".$values['L4_FW_NUM_TO_PSTN']."'";
  $values['L4_P_DIGIT_MAP'] = $_POST['line4_p_dial_plan'] ;
  $updatesql_a.=",L4_P_DIGIT_MAP='".$values['L4_P_DIGIT_MAP']."'";
  $values['LINE4_P_DPRST'] = $_POST['line4_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql_a.=",LINE4_P_DPRST='".$values['LINE4_P_DPRST']."'";
  $values['L4_FW2PSTN_AUTH_MODE'] = $_POST['line4_fw2pstn_auth_mode'] ;
  $updatesql_a.=",L4_FW2PSTN_AUTH_MODE='".$values['L4_FW2PSTN_AUTH_MODE']."'";
if($values['L4_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L4_FW_TO_PSTN_PASSWD'] = $_POST['line4_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L4_FW_TO_PSTN_PASSWD='".$values['L4_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L4_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L4_FW_TO_PSTN_PASSWD'] = $_POST['l4_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L4_FW_TO_PSTN_PASSWD='".$values['L4_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE4_OUT_INTERVAL'] = $_POST['line4_out_interval'] ;
  $updatesql_a.=",LINE4_OUT_INTERVAL='".$values['LINE4_OUT_INTERVAL']."'";
endif; 

if(!isset($_POST['line4_sms_sender']))
  $values['L4_SMS_SENDER']	= 0;
else
  $values['L4_SMS_SENDER'] = $_POST['line4_sms_sender']=='on'?'1':'0';
  $updatesql_a.=",L4_SMS_SENDER='".$values['L4_SMS_SENDER']."'";
if($values['L4_SMS_SENDER'] == 1):
  $values['L4_SMS_SERVER'] = $_POST['line4_sms_server'] ;
  $updatesql_a.=",L4_SMS_SERVER='".$values['L4_SMS_SERVER']."'";
  $values['L4_SMS_PORT'] = $_POST['line4_sms_port'] ;
  $updatesql_a.=",L4_SMS_PORT='".$values['L4_SMS_PORT']."'";
  $values['L4_SMS_CLI_ID'] = $_POST['line4_sms_cli_id'] ;
  $updatesql_a.=",L4_SMS_CLI_ID='".$values['L4_SMS_CLI_ID']."'";
  $values['L4_SMS_CLI_PASSWD'] = $_POST['line4_sms_cli_passwd'] ;
  $updatesql_a.=",L4_SMS_CLI_PASSWD='".$values['L4_SMS_CLI_PASSWD']."'";
endif; 
 $values['LINE4_SMS_VALIDITY_TIME'] = $_POST['line4_sms_validity_time'] ;
  $updatesql_a.=",LINE4_SMS_VALIDITY_TIME='".$values['LINE4_SMS_VALIDITY_TIME']."'";
  $values['L4_DISABLE_SMS_ACK'] = $_POST['line4_sms_ack_enable']=='on'?'0':'1';
  $updatesql_a.=",L4_DISABLE_SMS_ACK='".$values['L4_DISABLE_SMS_ACK']."'";


 $values['L4_DISABLE_IN'] = $_POST['line4_fw_to_voip']=='on'?'0':'1';
  $updatesql_a.=",L4_DISABLE_IN='".$values['L4_DISABLE_IN']."'";
if($values['L4_DISABLE_IN'] == 0):
  $values['L4_FW_NUM_TO_VOIP'] = $_POST['line4_fw_num_to_voip'] ;
  $updatesql_a.=",L4_FW_NUM_TO_VOIP='".$values['L4_FW_NUM_TO_VOIP']."'";
  $values['L4_V_DIGIT_MAP'] = $_POST['line4_v_dial_plan'] ;
  $updatesql_a.=",L4_V_DIGIT_MAP='".$values['L4_V_DIGIT_MAP']."'";
  $values['L4_FW2VOIP_AUTH_MODE'] = $_POST['line4_fw2voip_auth_mode'] ;
  $updatesql_a.=",L4_FW2VOIP_AUTH_MODE='".$values['L4_FW2VOIP_AUTH_MODE']."'";
if($values['L4_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L4_FW_TO_VOIP_PASSWD'] = $_POST['line4_fw_to_voip_passwd'] ;
  $updatesql_a.=",L4_FW_TO_VOIP_PASSWD='".$values['L4_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L4_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L4_FW_TO_VOIP_PASSWD'] = $_POST['l4_fw_to_voip_passwd'] ;
  $updatesql_a.=",L4_FW_TO_VOIP_PASSWD='".$values['L4_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 

  $values['L4_GROUP_MODE'] = $_POST['line4_gsm_group_mode'] ;
  $updatesql_a.=",L4_GROUP_MODE='".$values['L4_GROUP_MODE']."'";
if($values['L4_GROUP_MODE'] == 'SVR'):
  $values['L4_GSM_FW_MODE'] = $_POST['line4_gsm_fw_mode'] ;
  $updatesql_a.=",L4_GSM_FW_MODE='".$values['L4_GSM_FW_MODE']."'";
  $values['L4_PARTNER_SVR'] = $_POST['line4_group_share_addr'] ;
  $updatesql_a.=",L4_PARTNER_SVR='".$values['L4_PARTNER_SVR']."'";
endif; 
if($values['L4_GROUP_MODE'] == 'CLI'):
  $values['L4_GROUP_SVR'] = $_POST['line4_group_svr_addr'] ;
  $updatesql_a.=",L4_GROUP_SVR='".$values['L4_GROUP_SVR']."'";
endif;
  $values['L4_GSM_NUMBER'] = $_POST['line4_gsm_num'] ;
  $updatesql_a.=",L4_GSM_NUMBER='".$values['L4_GSM_NUMBER']."'";
  $values['L4_CALLER_ANONYMOUS'] = $_POST['line4_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql_a.=",L4_CALLER_ANONYMOUS='".$values['L4_CALLER_ANONYMOUS']."'";
 
if($values['TELPORT'] >= 5): 
endif; 
 $values['L5_DISABLE_OUT'] = $_POST['line5_fw_to_pstn']=='on'?'0':'1';
  $updatesql_a.=",L5_DISABLE_OUT='".$values['L5_DISABLE_OUT']."'";
if($values['L5_DISABLE_OUT'] == 0):
  $values['L5_FW_NUM_TO_PSTN'] = $_POST['line5_fw_num_to_pstn'] ;
  $updatesql_a.=",L5_FW_NUM_TO_PSTN='".$values['L5_FW_NUM_TO_PSTN']."'";
  $values['L5_P_DIGIT_MAP'] = $_POST['line5_p_dial_plan'] ;
  $updatesql_a.=",L5_P_DIGIT_MAP='".$values['L5_P_DIGIT_MAP']."'";
  $values['LINE5_P_DPRST'] = $_POST['line5_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql_a.=",LINE5_P_DPRST='".$values['LINE5_P_DPRST']."'";
  $values['L5_FW2PSTN_AUTH_MODE'] = $_POST['line5_fw2pstn_auth_mode'] ;
  $updatesql_a.=",L5_FW2PSTN_AUTH_MODE='".$values['L5_FW2PSTN_AUTH_MODE']."'";
if($values['L5_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L5_FW_TO_PSTN_PASSWD'] = $_POST['line5_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L5_FW_TO_PSTN_PASSWD='".$values['L5_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L5_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L5_FW_TO_PSTN_PASSWD'] = $_POST['l5_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L5_FW_TO_PSTN_PASSWD='".$values['L5_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE5_OUT_INTERVAL'] = $_POST['line5_out_interval'] ;
  $updatesql_a.=",LINE5_OUT_INTERVAL='".$values['LINE5_OUT_INTERVAL']."'";
endif; 

if(!isset($_POST['line5_sms_sender']))
  $values['L5_SMS_SENDER']	= 0;
else
  $values['L5_SMS_SENDER'] = $_POST['line5_sms_sender']=='on'?'1':'0';
  $updatesql_a.=",L5_SMS_SENDER='".$values['L5_SMS_SENDER']."'";
if($values['L5_SMS_SENDER'] == 1):
  $values['L5_SMS_SERVER'] = $_POST['line5_sms_server'] ;
  $updatesql_a.=",L5_SMS_SERVER='".$values['L5_SMS_SERVER']."'";
  $values['L5_SMS_PORT'] = $_POST['line5_sms_port'] ;
  $updatesql_a.=",L5_SMS_PORT='".$values['L5_SMS_PORT']."'";
  $values['L5_SMS_CLI_ID'] = $_POST['line5_sms_cli_id'] ;
  $updatesql_a.=",L5_SMS_CLI_ID='".$values['L5_SMS_CLI_ID']."'";
  $values['L5_SMS_CLI_PASSWD'] = $_POST['line5_sms_cli_passwd'] ;
  $updatesql_a.=",L5_SMS_CLI_PASSWD='".$values['L5_SMS_CLI_PASSWD']."'";
endif; 
  $values['LINE5_SMS_VALIDITY_TIME'] = $_POST['line5_sms_validity_time'] ;
  $updatesql_a.=",LINE5_SMS_VALIDITY_TIME='".$values['LINE5_SMS_VALIDITY_TIME']."'";
  $values['L5_DISABLE_SMS_ACK'] = $_POST['line5_sms_ack_enable']=='on'?'0':'1';
  $updatesql_a.=",L5_DISABLE_SMS_ACK='".$values['L5_DISABLE_SMS_ACK']."'";


  $values['L5_DISABLE_IN'] = $_POST['line5_fw_to_voip']=='on'?'0':'1';
  $updatesql_a.=",L5_DISABLE_IN='".$values['L5_DISABLE_IN']."'";
if($values['L5_DISABLE_IN'] == 0):
  $values['L5_FW_NUM_TO_VOIP'] = $_POST['line5_fw_num_to_voip'] ;
  $updatesql_a.=",L5_FW_NUM_TO_VOIP='".$values['L5_FW_NUM_TO_VOIP']."'";
  $values['L5_V_DIGIT_MAP'] = $_POST['line5_v_dial_plan'] ;
  $updatesql_a.=",L5_V_DIGIT_MAP='".$values['L5_V_DIGIT_MAP']."'";
  $values['L5_FW2VOIP_AUTH_MODE'] = $_POST['line5_fw2voip_auth_mode'] ;
  $updatesql_a.=",L5_FW2VOIP_AUTH_MODE='".$values['L5_FW2VOIP_AUTH_MODE']."'";
if($values['L5_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L5_FW_TO_VOIP_PASSWD'] = $_POST['line5_fw_to_voip_passwd'] ;
  $updatesql_a.=",L5_FW_TO_VOIP_PASSWD='".$values['L5_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L5_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L5_FW_TO_VOIP_PASSWD'] = $_POST['l5_fw_to_voip_passwd'] ;
  $updatesql_a.=",L5_FW_TO_VOIP_PASSWD='".$values['L5_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 

  $values['L5_GROUP_MODE'] = $_POST['line5_gsm_group_mode'] ;
  $updatesql_a.=",L5_GROUP_MODE='".$values['L5_GROUP_MODE']."'";
if($values['L5_GROUP_MODE'] == 'SVR'):
  $values['L5_GSM_FW_MODE'] = $_POST['line5_gsm_fw_mode'] ;
  $updatesql_a.=",L5_GSM_FW_MODE='".$values['L5_GSM_FW_MODE']."'";
  $values['L5_PARTNER_SVR'] = $_POST['line5_group_share_addr'] ;
  $updatesql_a.=",L5_PARTNER_SVR='".$values['L5_PARTNER_SVR']."'";
endif; 
if($values['L5_GROUP_MODE'] == 'CLI'):
  $values['L5_GROUP_SVR'] = $_POST['line5_group_svr_addr'] ;
  $updatesql_a.=",L5_GROUP_SVR='".$values['L5_GROUP_SVR']."'";
endif;
  $values['L5_GSM_NUMBER'] = $_POST['line5_gsm_num'] ;
  $updatesql_a.=",L5_GSM_NUMBER='".$values['L5_GSM_NUMBER']."'";
  $values['L5_CALLER_ANONYMOUS'] = $_POST['line5_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql_a.=",L5_CALLER_ANONYMOUS='".$values['L5_CALLER_ANONYMOUS']."'";
 
if($values['TELPORT'] >= 6): 
endif; 
  $values['L6_DISABLE_OUT'] = $_POST['line6_fw_to_pstn']=='on'?'0':'1';
  $updatesql_a.=",L6_DISABLE_OUT='".$values['L6_DISABLE_OUT']."'";
if($values['L6_DISABLE_OUT'] == 0):
  $values['L6_FW_NUM_TO_PSTN'] = $_POST['line6_fw_num_to_pstn'] ;
  $updatesql_a.=",L6_FW_NUM_TO_PSTN='".$values['L6_FW_NUM_TO_PSTN']."'";
  $values['L6_P_DIGIT_MAP'] = $_POST['line6_p_dial_plan'] ;
  $updatesql_a.=",L6_P_DIGIT_MAP='".$values['L6_P_DIGIT_MAP']."'";
  $values['LINE6_P_DPRST'] = $_POST['line6_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql_a.=",LINE6_P_DPRST='".$values['LINE6_P_DPRST']."'";
  $values['L6_FW2PSTN_AUTH_MODE'] = $_POST['line6_fw2pstn_auth_mode'] ;
  $updatesql_a.=",L6_FW2PSTN_AUTH_MODE='".$values['L6_FW2PSTN_AUTH_MODE']."'";
if($values['L6_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L6_FW_TO_PSTN_PASSWD'] = $_POST['line6_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L6_FW_TO_PSTN_PASSWD='".$values['L6_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L6_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L6_FW_TO_PSTN_PASSWD'] = $_POST['l6_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L6_FW_TO_PSTN_PASSWD='".$values['L6_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE6_OUT_INTERVAL'] = $_POST['line6_out_interval'] ;
  $updatesql_a.=",LINE6_OUT_INTERVAL='".$values['LINE6_OUT_INTERVAL']."'";
endif; 

if(!isset($_POST['line6_sms_sender']))
  $values['L6_SMS_SENDER']	= 0;
else 
  $values['L6_SMS_SENDER'] = $_POST['line6_sms_sender']=='on'?'1':'0';
  $updatesql_a.=",L6_SMS_SENDER='".$values['L6_SMS_SENDER']."'";
if($values['L6_SMS_SENDER'] == 1):
  $values['L6_SMS_SERVER'] = $_POST['line6_sms_server'] ;
  $updatesql_a.=",L6_SMS_SERVER='".$values['L6_SMS_SERVER']."'";
  $values['L6_SMS_PORT'] = $_POST['line6_sms_port'] ;
  $updatesql_a.=",L6_SMS_PORT='".$values['L6_SMS_PORT']."'";
  $values['L6_SMS_CLI_ID'] = $_POST['line6_sms_cli_id'] ;
  $updatesql_a.=",L6_SMS_CLI_ID='".$values['L6_SMS_CLI_ID']."'";
  $values['L6_SMS_CLI_PASSWD'] = $_POST['line6_sms_cli_passwd'] ;
  $updatesql_a.=",L6_SMS_CLI_PASSWD='".$values['L6_SMS_CLI_PASSWD']."'";
endif; 
 $values['LINE6_SMS_VALIDITY_TIME'] = $_POST['line6_sms_validity_time'] ;
  $updatesql_a.=",LINE6_SMS_VALIDITY_TIME='".$values['LINE6_SMS_VALIDITY_TIME']."'";
  $values['L6_DISABLE_SMS_ACK'] = $_POST['line6_sms_ack_enable']=='on'?'0':'1';
  $updatesql_a.=",L6_DISABLE_SMS_ACK='".$values['L6_DISABLE_SMS_ACK']."'";


 $values['L6_DISABLE_IN'] = $_POST['line6_fw_to_voip']=='on'?'0':'1';
  $updatesql_a.=",L6_DISABLE_IN='".$values['L6_DISABLE_IN']."'";
if($values['L6_DISABLE_IN'] == 0):
  $values['L6_FW_NUM_TO_VOIP'] = $_POST['line6_fw_num_to_voip'] ;
  $updatesql_a.=",L6_FW_NUM_TO_VOIP='".$values['L6_FW_NUM_TO_VOIP']."'";
  $values['L6_V_DIGIT_MAP'] = $_POST['line6_v_dial_plan'] ;
  $updatesql_a.=",L6_V_DIGIT_MAP='".$values['L6_V_DIGIT_MAP']."'";
  $values['L6_FW2VOIP_AUTH_MODE'] = $_POST['line6_fw2voip_auth_mode'] ;
  $updatesql_a.=",L6_FW2VOIP_AUTH_MODE='".$values['L6_FW2VOIP_AUTH_MODE']."'";
if($values['L6_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L6_FW_TO_VOIP_PASSWD'] = $_POST['line6_fw_to_voip_passwd'] ;
  $updatesql_a.=",L6_FW_TO_VOIP_PASSWD='".$values['L6_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L6_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L6_FW_TO_VOIP_PASSWD'] = $_POST['l6_fw_to_voip_passwd'] ;
  $updatesql_a.=",L6_FW_TO_VOIP_PASSWD='".$values['L6_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 

  $values['L6_GROUP_MODE'] = $_POST['line6_gsm_group_mode'] ;
  $updatesql_a.=",L6_GROUP_MODE='".$values['L6_GROUP_MODE']."'";
if($values['L6_GROUP_MODE'] == 'SVR'):
  $values['L6_GSM_FW_MODE'] = $_POST['line6_gsm_fw_mode'] ;
  $updatesql_a.=",L6_GSM_FW_MODE='".$values['L6_GSM_FW_MODE']."'";
  $values['L6_PARTNER_SVR'] = $_POST['line6_group_share_addr'] ;
  $updatesql_a.=",L6_PARTNER_SVR='".$values['L6_PARTNER_SVR']."'";
endif; 
if($values['L6_GROUP_MODE'] == 'CLI'):
  $values['L6_GROUP_SVR'] = $_POST['line6_group_svr_addr'] ;
  $updatesql_a.=",L6_GROUP_SVR='".$values['L6_GROUP_SVR']."'";
endif;
  $values['L6_GSM_NUMBER'] = $_POST['line6_gsm_num'] ;
  $updatesql_a.=",L6_GSM_NUMBER='".$values['L6_GSM_NUMBER']."'";
  $values['L6_CALLER_ANONYMOUS'] = $_POST['line6_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql_a.=",L6_CALLER_ANONYMOUS='".$values['L6_CALLER_ANONYMOUS']."'";
  
if($values['TELPORT'] >= 7): 
endif; 
  $values['L7_DISABLE_OUT'] = $_POST['line7_fw_to_pstn']=='on'?'0':'1';
  $updatesql_a.=",L7_DISABLE_OUT='".$values['L7_DISABLE_OUT']."'";
if($values['L7_DISABLE_OUT'] == 0):
  $values['L7_FW_NUM_TO_PSTN'] = $_POST['line7_fw_num_to_pstn'] ;
  $updatesql_a.=",L7_FW_NUM_TO_PSTN='".$values['L7_FW_NUM_TO_PSTN']."'";
  $values['L7_P_DIGIT_MAP'] = $_POST['line7_p_dial_plan'] ;
  $updatesql_a.=",L7_P_DIGIT_MAP='".$values['L7_P_DIGIT_MAP']."'";
  $values['LINE7_P_DPRST'] = $_POST['line7_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql_a.=",LINE7_P_DPRST='".$values['LINE7_P_DPRST']."'";
  $values['L7_FW2PSTN_AUTH_MODE'] = $_POST['line7_fw2pstn_auth_mode'] ;
  $updatesql_a.=",L7_FW2PSTN_AUTH_MODE='".$values['L7_FW2PSTN_AUTH_MODE']."'";
if($values['L7_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L7_FW_TO_PSTN_PASSWD'] = $_POST['line7_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L7_FW_TO_PSTN_PASSWD='".$values['L7_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L7_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L7_FW_TO_PSTN_PASSWD'] = $_POST['l7_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L7_FW_TO_PSTN_PASSWD='".$values['L7_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE7_OUT_INTERVAL'] = $_POST['line7_out_interval'] ;
  $updatesql_a.=",LINE7_OUT_INTERVAL='".$values['LINE7_OUT_INTERVAL']."'";
endif; 

if(!isset($_POST['line7_sms_sender']))
  $values['L7_SMS_SENDER']	= 0;
else
  $values['L7_SMS_SENDER'] = $_POST['line7_sms_sender']=='on'?'1':'0';
  $updatesql_a.=",L7_SMS_SENDER='".$values['L7_SMS_SENDER']."'";
if($values['L7_SMS_SENDER'] == 1):
  $values['L7_SMS_SERVER'] = $_POST['line7_sms_server'] ;
  $updatesql_a.=",L7_SMS_SERVER='".$values['L7_SMS_SERVER']."'";
  $values['L7_SMS_PORT'] = $_POST['line7_sms_port'] ;
  $updatesql_a.=",L7_SMS_PORT='".$values['L7_SMS_PORT']."'";
  $values['L7_SMS_CLI_ID'] = $_POST['line7_sms_cli_id'] ;
  $updatesql_a.=",L7_SMS_CLI_ID='".$values['L7_SMS_CLI_ID']."'";
  $values['L7_SMS_CLI_PASSWD'] = $_POST['line7_sms_cli_passwd'] ;
  $updatesql_a.=",L7_SMS_CLI_PASSWD='".$values['L7_SMS_CLI_PASSWD']."'";
endif; 
 $values['LINE7_SMS_VALIDITY_TIME'] = $_POST['line7_sms_validity_time'] ;
  $updatesql_a.=",LINE7_SMS_VALIDITY_TIME='".$values['LINE7_SMS_VALIDITY_TIME']."'";
  $values['L7_DISABLE_SMS_ACK'] = $_POST['line7_sms_ack_enable']=='on'?'0':'1';
  $updatesql_a.=",L7_DISABLE_SMS_ACK='".$values['L7_DISABLE_SMS_ACK']."'";


 $values['L7_DISABLE_IN'] = $_POST['line7_fw_to_voip']=='on'?'0':'1';
  $updatesql_a.=",L7_DISABLE_IN='".$values['L7_DISABLE_IN']."'";
if($values['L7_DISABLE_IN'] == 0):
  $values['L7_FW_NUM_TO_VOIP'] = $_POST['line7_fw_num_to_voip'] ;
  $updatesql_a.=",L7_FW_NUM_TO_VOIP='".$values['L7_FW_NUM_TO_VOIP']."'";
  $values['L7_V_DIGIT_MAP'] = $_POST['line7_v_dial_plan'] ;
  $updatesql_a.=",L7_V_DIGIT_MAP='".$values['L7_V_DIGIT_MAP']."'";
  $values['L7_FW2VOIP_AUTH_MODE'] = $_POST['line7_fw2voip_auth_mode'] ;
  $updatesql_a.=",L7_FW2VOIP_AUTH_MODE='".$values['L7_FW2VOIP_AUTH_MODE']."'";
if($values['L7_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L7_FW_TO_VOIP_PASSWD'] = $_POST['line7_fw_to_voip_passwd'] ;
  $updatesql_a.=",L7_FW_TO_VOIP_PASSWD='".$values['L7_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L7_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L7_FW_TO_VOIP_PASSWD'] = $_POST['l7_fw_to_voip_passwd'] ;
  $updatesql_a.=",L7_FW_TO_VOIP_PASSWD='".$values['L7_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 

  $values['L7_GROUP_MODE'] = $_POST['line7_gsm_group_mode'] ;
  $updatesql_a.=",L7_GROUP_MODE='".$values['L7_GROUP_MODE']."'";
if($values['L7_GROUP_MODE'] == 'SVR'):
  $values['L7_GSM_FW_MODE'] = $_POST['line7_gsm_fw_mode'] ;
  $updatesql_a.=",L7_GSM_FW_MODE='".$values['L7_GSM_FW_MODE']."'";
  $values['L7_PARTNER_SVR'] = $_POST['line7_group_share_addr'] ;
  $updatesql_a.=",L7_PARTNER_SVR='".$values['L7_PARTNER_SVR']."'";
endif; 
if($values['L7_GROUP_MODE'] == 'CLI'):
  $values['L7_GROUP_SVR'] = $_POST['line7_group_svr_addr'] ;
  $updatesql_a.=",L7_GROUP_SVR='".$values['L7_GROUP_SVR']."'";
endif;
  $values['L7_GSM_NUMBER'] = $_POST['line7_gsm_num'] ;
  $updatesql_a.=",L7_GSM_NUMBER='".$values['L7_GSM_NUMBER']."'";
  $values['L7_CALLER_ANONYMOUS'] = $_POST['line7_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql_a.=",L7_CALLER_ANONYMOUS='".$values['L7_CALLER_ANONYMOUS']."'";
  
if($values['TELPORT'] >= 8): 
endif; 
 $values['L8_DISABLE_OUT'] = $_POST['line8_fw_to_pstn']=='on'?'0':'1';
  $updatesql_a.=",L8_DISABLE_OUT='".$values['L8_DISABLE_OUT']."'";
if($values['L8_DISABLE_OUT'] == 0):
  $values['L8_FW_NUM_TO_PSTN'] = $_POST['line8_fw_num_to_pstn'] ;
  $updatesql_a.=",L8_FW_NUM_TO_PSTN='".$values['L8_FW_NUM_TO_PSTN']."'";
  $values['L8_P_DIGIT_MAP'] = $_POST['line8_p_dial_plan'] ;
  $updatesql_a.=",L8_P_DIGIT_MAP='".$values['L8_P_DIGIT_MAP']."'";
  $values['LINE8_P_DPRST'] = $_POST['line8_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql_a.=",LINE8_P_DPRST='".$values['LINE8_P_DPRST']."'";
  $values['L8_FW2PSTN_AUTH_MODE'] = $_POST['line8_fw2pstn_auth_mode'] ;
  $updatesql_a.=",L8_FW2PSTN_AUTH_MODE='".$values['L8_FW2PSTN_AUTH_MODE']."'";
if($values['L8_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L8_FW_TO_PSTN_PASSWD'] = $_POST['line8_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L8_FW_TO_PSTN_PASSWD='".$values['L8_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L8_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L8_FW_TO_PSTN_PASSWD'] = $_POST['l8_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L8_FW_TO_PSTN_PASSWD='".$values['L8_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE8_OUT_INTERVAL'] = $_POST['line8_out_interval'] ;
  $updatesql_a.=",LINE8_OUT_INTERVAL='".$values['LINE8_OUT_INTERVAL']."'";
endif; 

if(!isset($_POST['line8_sms_sender']))
  $values['L8_SMS_SENDER']	= 0;
else
  $values['L8_SMS_SENDER'] = $_POST['line8_sms_sender']=='on'?'1':'0';
  $updatesql_a.=",L8_SMS_SENDER='".$values['L8_SMS_SENDER']."'";
if($values['L8_SMS_SENDER'] == 1):
  $values['L8_SMS_SERVER'] = $_POST['line8_sms_server'] ;
  $updatesql_a.=",L8_SMS_SERVER='".$values['L8_SMS_SERVER']."'";
  $values['L8_SMS_PORT'] = $_POST['line8_sms_port'] ;
  $updatesql_a.=",L8_SMS_PORT='".$values['L8_SMS_PORT']."'";
  $values['L8_SMS_CLI_ID'] = $_POST['line8_sms_cli_id'] ;
  $updatesql_a.=",L8_SMS_CLI_ID='".$values['L8_SMS_CLI_ID']."'";
  $values['L8_SMS_CLI_PASSWD'] = $_POST['line8_sms_cli_passwd'] ;
  $updatesql_a.=",L8_SMS_CLI_PASSWD='".$values['L8_SMS_CLI_PASSWD']."'";
endif; 
 $values['LINE8_SMS_VALIDITY_TIME'] = $_POST['line8_sms_validity_time'] ;
  $updatesql_a.=",LINE8_SMS_VALIDITY_TIME='".$values['LINE8_SMS_VALIDITY_TIME']."'";
  $values['L8_DISABLE_SMS_ACK'] = $_POST['line8_sms_ack_enable']=='on'?'0':'1';
  $updatesql_a.=",L8_DISABLE_SMS_ACK='".$values['L8_DISABLE_SMS_ACK']."'";


  $values['L8_DISABLE_IN'] = $_POST['line8_fw_to_voip']=='on'?'0':'1';
  $updatesql_a.=",L8_DISABLE_IN='".$values['L8_DISABLE_IN']."'";
if($values['L8_DISABLE_IN'] == 0):
  $values['L8_FW_NUM_TO_VOIP'] = $_POST['line8_fw_num_to_voip'] ;
  $updatesql_a.=",L8_FW_NUM_TO_VOIP='".$values['L8_FW_NUM_TO_VOIP']."'";
  $values['L8_V_DIGIT_MAP'] = $_POST['line8_v_dial_plan'] ;
  $updatesql_a.=",L8_V_DIGIT_MAP='".$values['L8_V_DIGIT_MAP']."'";
  $values['L8_FW2VOIP_AUTH_MODE'] = $_POST['line8_fw2voip_auth_mode'] ;
  $updatesql_a.=",L8_FW2VOIP_AUTH_MODE='".$values['L8_FW2VOIP_AUTH_MODE']."'";
if($values['L8_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L8_FW_TO_VOIP_PASSWD'] = $_POST['line8_fw_to_voip_passwd'] ;
  $updatesql_a.=",L8_FW_TO_VOIP_PASSWD='".$values['L8_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L8_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L8_FW_TO_VOIP_PASSWD'] = $_POST['l8_fw_to_voip_passwd'] ;
  $updatesql_a.=",L8_FW_TO_VOIP_PASSWD='".$values['L8_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 
 
  $values['L8_GROUP_MODE'] = $_POST['line8_gsm_group_mode'] ;
  $updatesql_a.=",L8_GROUP_MODE='".$values['L8_GROUP_MODE']."'";
if($values['L8_GROUP_MODE'] == 'SVR'):
  $values['L8_GSM_FW_MODE'] = $_POST['line8_gsm_fw_mode'] ;
  $updatesql_a.=",L8_GSM_FW_MODE='".$values['L8_GSM_FW_MODE']."'";
  $values['L8_PARTNER_SVR'] = $_POST['line8_group_share_addr'] ;
  $updatesql_a.=",L8_PARTNER_SVR='".$values['L8_PARTNER_SVR']."'";
endif; 
if($values['L8_GROUP_MODE'] == 'CLI'):
  $values['L8_GROUP_SVR'] = $_POST['line8_group_svr_addr'] ;
  $updatesql_a.=",L8_GROUP_SVR='".$values['L8_GROUP_SVR']."'";
endif;
  $values['L8_GSM_NUMBER'] = $_POST['line8_gsm_num'] ;
  $updatesql_a.=",L8_GSM_NUMBER='".$values['L8_GSM_NUMBER']."'";
  $values['L8_CALLER_ANONYMOUS'] = $_POST['line8_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql_a.=",L8_CALLER_ANONYMOUS='".$values['L8_CALLER_ANONYMOUS']."'";
  
if($values['TELPORT'] >= 9): 
endif; 
  $values['L9_DISABLE_OUT'] = $_POST['line9_fw_to_pstn']=='on'?'0':'1';
  $updatesql_a.=",L9_DISABLE_OUT='".$values['L9_DISABLE_OUT']."'";
if($values['L9_DISABLE_OUT'] == 0):
  $values['L9_FW_NUM_TO_PSTN'] = $_POST['line9_fw_num_to_pstn'] ;
  $updatesql_a.=",L9_FW_NUM_TO_PSTN='".$values['L9_FW_NUM_TO_PSTN']."'";
  $values['L9_P_DIGIT_MAP'] = $_POST['line9_p_dial_plan'] ;
  $updatesql_a.=",L9_P_DIGIT_MAP='".$values['L9_P_DIGIT_MAP']."'";
  $values['LINE9_P_DPRST'] = $_POST['line9_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql_a.=",LINE9_P_DPRST='".$values['LINE9_P_DPRST']."'";
  $values['L9_FW2PSTN_AUTH_MODE'] = $_POST['line9_fw2pstn_auth_mode'] ;
  $updatesql_a.=",L9_FW2PSTN_AUTH_MODE='".$values['L9_FW2PSTN_AUTH_MODE']."'";
if($values['L9_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L9_FW_TO_PSTN_PASSWD'] = $_POST['line9_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L9_FW_TO_PSTN_PASSWD='".$values['L9_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L9_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L9_FW_TO_PSTN_PASSWD'] = $_POST['l9_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L9_FW_TO_PSTN_PASSWD='".$values['L9_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE9_OUT_INTERVAL'] = $_POST['line9_out_interval'] ;
  $updatesql_a.=",LINE9_OUT_INTERVAL='".$values['LINE9_OUT_INTERVAL']."'";
endif; 
if(!isset($_POST['line9_sms_sender']))
  $values['L9_SMS_SENDER']	= 0;
else
  $values['L9_SMS_SENDER'] = $_POST['line9_sms_sender']=='on'?'1':'0';
  $updatesql_a.=",L9_SMS_SENDER='".$values['L9_SMS_SENDER']."'";
if($values['L9_SMS_SENDER'] == 1):
  $values['L9_SMS_SERVER'] = $_POST['line9_sms_server'] ;
  $updatesql_a.=",L9_SMS_SERVER='".$values['L9_SMS_SERVER']."'";
  $values['L9_SMS_PORT'] = $_POST['line9_sms_port'] ;
  $updatesql_a.=",L9_SMS_PORT='".$values['L9_SMS_PORT']."'";
  $values['L9_SMS_CLI_ID'] = $_POST['line9_sms_cli_id'] ;
  $updatesql_a.=",L9_SMS_CLI_ID='".$values['L9_SMS_CLI_ID']."'";
  $values['L9_SMS_CLI_PASSWD'] = $_POST['line9_sms_cli_passwd'] ;
  $updatesql_a.=",L9_SMS_CLI_PASSWD='".$values['L9_SMS_CLI_PASSWD']."'";
endif; 
 $values['LINE9_SMS_VALIDITY_TIME'] = $_POST['line9_sms_validity_time'] ;
  $updatesql_a.=",LINE9_SMS_VALIDITY_TIME='".$values['LINE9_SMS_VALIDITY_TIME']."'";
  $values['L9_DISABLE_SMS_ACK'] = $_POST['line9_sms_ack_enable']=='on'?'0':'1';
  $updatesql_a.=",L9_DISABLE_SMS_ACK='".$values['L9_DISABLE_SMS_ACK']."'";


  $values['L9_DISABLE_IN'] = $_POST['line9_fw_to_voip']=='on'?'0':'1';
  $updatesql_a.=",L9_DISABLE_IN='".$values['L9_DISABLE_IN']."'";
if($values['L9_DISABLE_IN'] == 0):
  $values['L9_FW_NUM_TO_VOIP'] = $_POST['line9_fw_num_to_voip'] ;
  $updatesql_a.=",L9_FW_NUM_TO_VOIP='".$values['L9_FW_NUM_TO_VOIP']."'";
  $values['L9_V_DIGIT_MAP'] = $_POST['line9_v_dial_plan'] ;
  $updatesql_a.=",L9_V_DIGIT_MAP='".$values['L9_V_DIGIT_MAP']."'";
  $values['L9_FW2VOIP_AUTH_MODE'] = $_POST['line9_fw2voip_auth_mode'] ;
  $updatesql_a.=",L9_FW2VOIP_AUTH_MODE='".$values['L9_FW2VOIP_AUTH_MODE']."'";
if($values['L9_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L9_FW_TO_VOIP_PASSWD'] = $_POST['line9_fw_to_voip_passwd'] ;
  $updatesql_a.=",L9_FW_TO_VOIP_PASSWD='".$values['L9_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L9_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L9_FW_TO_VOIP_PASSWD'] = $_POST['l9_fw_to_voip_passwd'] ;
  $updatesql_a.=",L9_FW_TO_VOIP_PASSWD='".$values['L9_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 

  $values['L9_GROUP_MODE'] = $_POST['line9_gsm_group_mode'] ;
  $updatesql_a.=",L9_GROUP_MODE='".$values['L9_GROUP_MODE']."'";
if($values['L9_GROUP_MODE'] == 'SVR'):
  $values['L9_GSM_FW_MODE'] = $_POST['line9_gsm_fw_mode'] ;
  $updatesql_a.=",L9_GSM_FW_MODE='".$values['L9_GSM_FW_MODE']."'";
  $values['L9_PARTNER_SVR'] = $_POST['line9_group_share_addr'] ;
  $updatesql_a.=",L9_PARTNER_SVR='".$values['L9_PARTNER_SVR']."'";
endif; 
if($values['L9_GROUP_MODE'] == 'CLI'):
  $values['L9_GROUP_SVR'] = $_POST['line9_group_svr_addr'] ;
  $updatesql_a.=",L9_GROUP_SVR='".$values['L9_GROUP_SVR']."'";
endif;
  $values['L9_GSM_NUMBER'] = $_POST['line9_gsm_num'] ;
  $updatesql_a.=",L9_GSM_NUMBER='".$values['L9_GSM_NUMBER']."'";
  $values['L9_CALLER_ANONYMOUS'] = $_POST['line9_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql_a.=",L9_CALLER_ANONYMOUS='".$values['L9_CALLER_ANONYMOUS']."'";
 
if($values['TELPORT'] >= 10): 
endif; 
  $values['L10_DISABLE_OUT'] = $_POST['line10_fw_to_pstn']=='on'?'0':'1';
  $updatesql_a.=",L10_DISABLE_OUT='".$values['L10_DISABLE_OUT']."'";
if($values['L10_DISABLE_OUT'] == 0):
  $values['L10_FW_NUM_TO_PSTN'] = $_POST['line10_fw_num_to_pstn'] ;
  $updatesql_a.=",L10_FW_NUM_TO_PSTN='".$values['L10_FW_NUM_TO_PSTN']."'";
  $values['L10_P_DIGIT_MAP'] = $_POST['line10_p_dial_plan'] ;
  $updatesql_a.=",L10_P_DIGIT_MAP='".$values['L10_P_DIGIT_MAP']."'";
  $values['LINE10_P_DPRST'] = $_POST['line10_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql_a.=",LINE10_P_DPRST='".$values['LINE10_P_DPRST']."'";
  $values['L10_FW2PSTN_AUTH_MODE'] = $_POST['line10_fw2pstn_auth_mode'] ;
  $updatesql_a.=",L10_FW2PSTN_AUTH_MODE='".$values['L10_FW2PSTN_AUTH_MODE']."'";
if($values['L10_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L10_FW_TO_PSTN_PASSWD'] = $_POST['line10_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L10_FW_TO_PSTN_PASSWD='".$values['L10_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L10_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L10_FW_TO_PSTN_PASSWD'] = $_POST['l10_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L10_FW_TO_PSTN_PASSWD='".$values['L10_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE10_OUT_INTERVAL'] = $_POST['line10_out_interval'] ;
  $updatesql_a.=",LINE10_OUT_INTERVAL='".$values['LINE10_OUT_INTERVAL']."'";
endif; 
if(!isset($_POST['line10_sms_sender']))
  $values['L10_SMS_SENDER']      = 0;
else
  $values['L10_SMS_SENDER'] = $_POST['line10_sms_sender']=='on'?'1':'0';
  $updatesql_a.=",L10_SMS_SENDER='".$values['L10_SMS_SENDER']."'";
if($values['L10_SMS_SENDER'] == 1):
  $values['L10_SMS_SERVER'] = $_POST['line10_sms_server'] ;
  $updatesql_a.=",L10_SMS_SERVER='".$values['L10_SMS_SERVER']."'";
  $values['L10_SMS_PORT'] = $_POST['line10_sms_port'] ;
  $updatesql_a.=",L10_SMS_PORT='".$values['L10_SMS_PORT']."'";
  $values['L10_SMS_CLI_ID'] = $_POST['line10_sms_cli_id'] ;
  $updatesql_a.=",L10_SMS_CLI_ID='".$values['L10_SMS_CLI_ID']."'";
  $values['L10_SMS_CLI_PASSWD'] = $_POST['line10_sms_cli_passwd'] ;
  $updatesql_a.=",L10_SMS_CLI_PASSWD='".$values['L10_SMS_CLI_PASSWD']."'";
endif; 
 $values['LINE10_SMS_VALIDITY_TIME'] = $_POST['line10_sms_validity_time'] ;
  $updatesql_a.=",LINE10_SMS_VALIDITY_TIME='".$values['LINE10_SMS_VALIDITY_TIME']."'";
  $values['L10_DISABLE_SMS_ACK'] = $_POST['line10_sms_ack_enable']=='on'?'0':'1';
  $updatesql_a.=",L10_DISABLE_SMS_ACK='".$values['L10_DISABLE_SMS_ACK']."'";


  $values['L10_DISABLE_IN'] = $_POST['line10_fw_to_voip']=='on'?'0':'1';
  $updatesql_a.=",L10_DISABLE_IN='".$values['L10_DISABLE_IN']."'";
if($values['L10_DISABLE_IN'] == 0):
  $values['L10_FW_NUM_TO_VOIP'] = $_POST['line10_fw_num_to_voip'] ;
  $updatesql_a.=",L10_FW_NUM_TO_VOIP='".$values['L10_FW_NUM_TO_VOIP']."'";
  $values['L10_V_DIGIT_MAP'] = $_POST['line10_v_dial_plan'] ;
  $updatesql_a.=",L10_V_DIGIT_MAP='".$values['L10_V_DIGIT_MAP']."'";
  $values['L10_FW2VOIP_AUTH_MODE'] = $_POST['line10_fw2voip_auth_mode'] ;
  $updatesql_a.=",L10_FW2VOIP_AUTH_MODE='".$values['L10_FW2VOIP_AUTH_MODE']."'";
if($values['L10_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L10_FW_TO_VOIP_PASSWD'] = $_POST['line10_fw_to_voip_passwd'] ;
  $updatesql_a.=",L10_FW_TO_VOIP_PASSWD='".$values['L10_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L10_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L10_FW_TO_VOIP_PASSWD'] = $_POST['l10_fw_to_voip_passwd'] ;
  $updatesql_a.=",L10_FW_TO_VOIP_PASSWD='".$values['L10_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 

  $values['L10_GROUP_MODE'] = $_POST['line10_gsm_group_mode'] ;
  $updatesql_a.=",L10_GROUP_MODE='".$values['L10_GROUP_MODE']."'";
if($values['L10_GROUP_MODE'] == 'SVR'):
  $values['L10_GSM_FW_MODE'] = $_POST['line10_gsm_fw_mode'] ;
  $updatesql_a.=",L10_GSM_FW_MODE='".$values['L10_GSM_FW_MODE']."'";
  $values['L10_PARTNER_SVR'] = $_POST['line10_group_share_addr'] ;
  $updatesql_a.=",L10_PARTNER_SVR='".$values['L10_PARTNER_SVR']."'";
endif; 
if($values['L10_GROUP_MODE'] == 'CLI'):
  $values['L10_GROUP_SVR'] = $_POST['line10_group_svr_addr'] ;
  $updatesql_a.=",L10_GROUP_SVR='".$values['L10_GROUP_SVR']."'";
endif;
  $values['L10_GSM_NUMBER'] = $_POST['line10_gsm_num'] ;
  $updatesql_a.=",L10_GSM_NUMBER='".$values['L10_GSM_NUMBER']."'";
  $values['L10_CALLER_ANONYMOUS'] = $_POST['line10_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql_a.=",L10_CALLER_ANONYMOUS='".$values['L10_CALLER_ANONYMOUS']."'";
 
if($values['TELPORT'] >= 11): 
endif; 
  $values['L11_DISABLE_OUT'] = $_POST['line11_fw_to_pstn']=='on'?'0':'1';
  $updatesql_a.=",L11_DISABLE_OUT='".$values['L11_DISABLE_OUT']."'";
if($values['L11_DISABLE_OUT'] == 0):
  $values['L11_FW_NUM_TO_PSTN'] = $_POST['line11_fw_num_to_pstn'] ;
  $updatesql_a.=",L11_FW_NUM_TO_PSTN='".$values['L11_FW_NUM_TO_PSTN']."'";
  $values['L11_P_DIGIT_MAP'] = $_POST['line11_p_dial_plan'] ;
  $updatesql_a.=",L11_P_DIGIT_MAP='".$values['L11_P_DIGIT_MAP']."'";
  $values['LINE11_P_DPRST'] = $_POST['line11_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql_a.=",LINE11_P_DPRST='".$values['LINE11_P_DPRST']."'";
  $values['L11_FW2PSTN_AUTH_MODE'] = $_POST['line11_fw2pstn_auth_mode'] ;
  $updatesql_a.=",L11_FW2PSTN_AUTH_MODE='".$values['L11_FW2PSTN_AUTH_MODE']."'";
if($values['L11_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L11_FW_TO_PSTN_PASSWD'] = $_POST['line11_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L11_FW_TO_PSTN_PASSWD='".$values['L11_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L11_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L11_FW_TO_PSTN_PASSWD'] = $_POST['l11_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L11_FW_TO_PSTN_PASSWD='".$values['L11_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE11_OUT_INTERVAL'] = $_POST['line11_out_interval'] ;
  $updatesql_a.=",LINE11_OUT_INTERVAL='".$values['LINE11_OUT_INTERVAL']."'";
endif; 
if(!isset($_POST['line11_sms_sender']))
  $values['L11_SMS_SENDER']      = 0;
else
  $values['L11_SMS_SENDER'] = $_POST['line11_sms_sender']=='on'?'1':'0';
  $updatesql_a.=",L11_SMS_SENDER='".$values['L11_SMS_SENDER']."'";
if($values['L11_SMS_SENDER'] == 1):
  $values['L11_SMS_SERVER'] = $_POST['line11_sms_server'] ;
  $updatesql_a.=",L11_SMS_SERVER='".$values['L11_SMS_SERVER']."'";
  $values['L11_SMS_PORT'] = $_POST['line11_sms_port'] ;
  $updatesql_a.=",L11_SMS_PORT='".$values['L11_SMS_PORT']."'";
  $values['L11_SMS_CLI_ID'] = $_POST['line11_sms_cli_id'] ;
  $updatesql_a.=",L11_SMS_CLI_ID='".$values['L11_SMS_CLI_ID']."'";
  $values['L11_SMS_CLI_PASSWD'] = $_POST['line11_sms_cli_passwd'] ;
  $updatesql_a.=",L11_SMS_CLI_PASSWD='".$values['L11_SMS_CLI_PASSWD']."'";
endif; 
 $values['LINE11_SMS_VALIDITY_TIME'] = $_POST['line11_sms_validity_time'] ;
  $updatesql_a.=",LINE11_SMS_VALIDITY_TIME='".$values['LINE11_SMS_VALIDITY_TIME']."'";
  $values['L11_DISABLE_SMS_ACK'] = $_POST['line11_sms_ack_enable']=='on'?'0':'1';
  $updatesql_a.=",L11_DISABLE_SMS_ACK='".$values['L11_DISABLE_SMS_ACK']."'";


  $values['L11_DISABLE_IN'] = $_POST['line11_fw_to_voip']=='on'?'0':'1';
  $updatesql_a.=",L11_DISABLE_IN='".$values['L11_DISABLE_IN']."'";
if($values['L11_DISABLE_IN'] == 0):
  $values['L11_FW_NUM_TO_VOIP'] = $_POST['line11_fw_num_to_voip'] ;
  $updatesql_a.=",L11_FW_NUM_TO_VOIP='".$values['L11_FW_NUM_TO_VOIP']."'";
  $values['L11_V_DIGIT_MAP'] = $_POST['line11_v_dial_plan'] ;
  $updatesql_a.=",L11_V_DIGIT_MAP='".$values['L11_V_DIGIT_MAP']."'";
  $values['L11_FW2VOIP_AUTH_MODE'] = $_POST['line11_fw2voip_auth_mode'] ;
  $updatesql_a.=",L11_FW2VOIP_AUTH_MODE='".$values['L11_FW2VOIP_AUTH_MODE']."'";
if($values['L11_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L11_FW_TO_VOIP_PASSWD'] = $_POST['line11_fw_to_voip_passwd'] ;
  $updatesql_a.=",L11_FW_TO_VOIP_PASSWD='".$values['L11_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L11_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L11_FW_TO_VOIP_PASSWD'] = $_POST['l11_fw_to_voip_passwd'] ;
  $updatesql_a.=",L11_FW_TO_VOIP_PASSWD='".$values['L11_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 

  $values['L11_GROUP_MODE'] = $_POST['line11_gsm_group_mode'] ;
  $updatesql_a.=",L11_GROUP_MODE='".$values['L11_GROUP_MODE']."'";
if($values['L11_GROUP_MODE'] == 'SVR'):
  $values['L11_GSM_FW_MODE'] = $_POST['line11_gsm_fw_mode'] ;
  $updatesql_a.=",L11_GSM_FW_MODE='".$values['L11_GSM_FW_MODE']."'";
  $values['L11_PARTNER_SVR'] = $_POST['line11_group_share_addr'] ;
  $updatesql_a.=",L11_PARTNER_SVR='".$values['L11_PARTNER_SVR']."'";
endif; 
if($values['L11_GROUP_MODE'] == 'CLI'):
  $values['L11_GROUP_SVR'] = $_POST['line11_group_svr_addr'] ;
  $updatesql_a.=",L11_GROUP_SVR='".$values['L11_GROUP_SVR']."'";
endif;
  $values['L11_GSM_NUMBER'] = $_POST['line11_gsm_num'] ;
  $updatesql_a.=",L11_GSM_NUMBER='".$values['L11_GSM_NUMBER']."'";
  $values['L11_CALLER_ANONYMOUS'] = $_POST['line11_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql_a.=",L11_CALLER_ANONYMOUS='".$values['L11_CALLER_ANONYMOUS']."'";
  

if($values['TELPORT'] >= 12): 
endif; 
  $values['L12_DISABLE_OUT'] = $_POST['line12_fw_to_pstn']=='on'?'0':'1';
  $updatesql_a.=",L12_DISABLE_OUT='".$values['L12_DISABLE_OUT']."'";
if($values['L12_DISABLE_OUT'] == 0):
  $values['L12_FW_NUM_TO_PSTN'] = $_POST['line12_fw_num_to_pstn'] ;
  $updatesql_a.=",L12_FW_NUM_TO_PSTN='".$values['L12_FW_NUM_TO_PSTN']."'";
  $values['L12_P_DIGIT_MAP'] = $_POST['line12_p_dial_plan'] ;
  $updatesql_a.=",L12_P_DIGIT_MAP='".$values['L12_P_DIGIT_MAP']."'";
  $values['LINE12_P_DPRST'] = $_POST['line12_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql_a.=",LINE12_P_DPRST='".$values['LINE12_P_DPRST']."'";
  $values['L12_FW2PSTN_AUTH_MODE'] = $_POST['line12_fw2pstn_auth_mode'] ;
  $updatesql_a.=",L12_FW2PSTN_AUTH_MODE='".$values['L12_FW2PSTN_AUTH_MODE']."'";
if($values['L12_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L12_FW_TO_PSTN_PASSWD'] = $_POST['line12_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L12_FW_TO_PSTN_PASSWD='".$values['L12_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L12_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L12_FW_TO_PSTN_PASSWD'] = $_POST['l12_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L12_FW_TO_PSTN_PASSWD='".$values['L12_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE12_OUT_INTERVAL'] = $_POST['line12_out_interval'] ;
  $updatesql_a.=",LINE12_OUT_INTERVAL='".$values['LINE12_OUT_INTERVAL']."'";
endif; 
if(!isset($_POST['line12_sms_sender']))
  $values['L12_SMS_SENDER']      = 0;
else
  $values['L12_SMS_SENDER'] = $_POST['line12_sms_sender']=='on'?'1':'0';
  $updatesql_a.=",L12_SMS_SENDER='".$values['L12_SMS_SENDER']."'";
if($values['L12_SMS_SENDER'] == 1):
  $values['L12_SMS_SERVER'] = $_POST['line12_sms_server'] ;
  $updatesql_a.=",L12_SMS_SERVER='".$values['L12_SMS_SERVER']."'";
  $values['L12_SMS_PORT'] = $_POST['line12_sms_port'] ;
  $updatesql_a.=",L12_SMS_PORT='".$values['L12_SMS_PORT']."'";
  $values['L12_SMS_CLI_ID'] = $_POST['line12_sms_cli_id'] ;
  $updatesql_a.=",L12_SMS_CLI_ID='".$values['L12_SMS_CLI_ID']."'";
  $values['L12_SMS_CLI_PASSWD'] = $_POST['line12_sms_cli_passwd'] ;
  $updatesql_a.=",L12_SMS_CLI_PASSWD='".$values['L12_SMS_CLI_PASSWD']."'";
endif; 
 $values['LINE12_SMS_VALIDITY_TIME'] = $_POST['line12_sms_validity_time'] ;
  $updatesql_a.=",LINE12_SMS_VALIDITY_TIME='".$values['LINE12_SMS_VALIDITY_TIME']."'";
  $values['L12_DISABLE_SMS_ACK'] = $_POST['line12_sms_ack_enable']=='on'?'0':'1';
  $updatesql_a.=",L12_DISABLE_SMS_ACK='".$values['L12_DISABLE_SMS_ACK']."'";


  $values['L12_DISABLE_IN'] = $_POST['line12_fw_to_voip']=='on'?'0':'1';
  $updatesql_a.=",L12_DISABLE_IN='".$values['L12_DISABLE_IN']."'";
if($values['L12_DISABLE_IN'] == 0):
  $values['L12_FW_NUM_TO_VOIP'] = $_POST['line12_fw_num_to_voip'] ;
  $updatesql_a.=",L12_FW_NUM_TO_VOIP='".$values['L12_FW_NUM_TO_VOIP']."'";
  $values['L12_V_DIGIT_MAP'] = $_POST['line12_v_dial_plan'] ;
  $updatesql_a.=",L12_V_DIGIT_MAP='".$values['L12_V_DIGIT_MAP']."'";
  $values['L12_FW2VOIP_AUTH_MODE'] = $_POST['line12_fw2voip_auth_mode'] ;
  $updatesql_a.=",L12_FW2VOIP_AUTH_MODE='".$values['L12_FW2VOIP_AUTH_MODE']."'";
if($values['L12_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L12_FW_TO_VOIP_PASSWD'] = $_POST['line12_fw_to_voip_passwd'] ;
  $updatesql_a.=",L12_FW_TO_VOIP_PASSWD='".$values['L12_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L12_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L12_FW_TO_VOIP_PASSWD'] = $_POST['l12_fw_to_voip_passwd'] ;
  $updatesql_a.=",L12_FW_TO_VOIP_PASSWD='".$values['L12_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 

  $values['L12_GROUP_MODE'] = $_POST['line12_gsm_group_mode'] ;
  $updatesql_a.=",L12_GROUP_MODE='".$values['L12_GROUP_MODE']."'";
if($values['L12_GROUP_MODE'] == 'SVR'):
  $values['L12_GSM_FW_MODE'] = $_POST['line12_gsm_fw_mode'] ;
  $updatesql_a.=",L12_GSM_FW_MODE='".$values['L12_GSM_FW_MODE']."'";
  $values['L12_PARTNER_SVR'] = $_POST['line12_group_share_addr'] ;
  $updatesql_a.=",L12_PARTNER_SVR='".$values['L12_PARTNER_SVR']."'";
endif; 
if($values['L12_GROUP_MODE'] == 'CLI'):
  $values['L12_GROUP_SVR'] = $_POST['line12_group_svr_addr'] ;
  $updatesql_a.=",L12_GROUP_SVR='".$values['L12_GROUP_SVR']."'";
endif;
  $values['L12_GSM_NUMBER'] = $_POST['line12_gsm_num'] ;
  $updatesql_a.=",L12_GSM_NUMBER='".$values['L12_GSM_NUMBER']."'";
  $values['L12_CALLER_ANONYMOUS'] = $_POST['line12_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql_a.=",L12_CALLER_ANONYMOUS='".$values['L12_CALLER_ANONYMOUS']."'";
 
if($values['TELPORT'] >= 13): 
endif; 
  $values['L13_DISABLE_OUT'] = $_POST['line13_fw_to_pstn']=='on'?'0':'1';
  $updatesql_a.=",L13_DISABLE_OUT='".$values['L13_DISABLE_OUT']."'";
if($values['L13_DISABLE_OUT'] == 0):
  $values['L13_FW_NUM_TO_PSTN'] = $_POST['line13_fw_num_to_pstn'] ;
  $updatesql_a.=",L13_FW_NUM_TO_PSTN='".$values['L13_FW_NUM_TO_PSTN']."'";
  $values['L13_P_DIGIT_MAP'] = $_POST['line13_p_dial_plan'] ;
  $updatesql_a.=",L13_P_DIGIT_MAP='".$values['L13_P_DIGIT_MAP']."'";
  $values['LINE13_P_DPRST'] = $_POST['line13_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql_a.=",LINE13_P_DPRST='".$values['LINE13_P_DPRST']."'";
  $values['L13_FW2PSTN_AUTH_MODE'] = $_POST['line13_fw2pstn_auth_mode'] ;
  $updatesql_a.=",L13_FW2PSTN_AUTH_MODE='".$values['L13_FW2PSTN_AUTH_MODE']."'";
if($values['L13_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L13_FW_TO_PSTN_PASSWD'] = $_POST['line13_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L13_FW_TO_PSTN_PASSWD='".$values['L13_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L13_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L13_FW_TO_PSTN_PASSWD'] = $_POST['l13_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L13_FW_TO_PSTN_PASSWD='".$values['L13_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE13_OUT_INTERVAL'] = $_POST['line13_out_interval'] ;
  $updatesql_a.=",LINE13_OUT_INTERVAL='".$values['LINE13_OUT_INTERVAL']."'";
endif; 
if(!isset($_POST['line13_sms_sender']))
  $values['L13_SMS_SENDER']      = 0;
else
  $values['L13_SMS_SENDER'] = $_POST['line13_sms_sender']=='on'?'1':'0';
  $updatesql_a.=",L13_SMS_SENDER='".$values['L13_SMS_SENDER']."'";
if($values['L13_SMS_SENDER'] == 1):
  $values['L13_SMS_SERVER'] = $_POST['line13_sms_server'] ;
  $updatesql_a.=",L13_SMS_SERVER='".$values['L13_SMS_SERVER']."'";
  $values['L13_SMS_PORT'] = $_POST['line13_sms_port'] ;
  $updatesql_a.=",L13_SMS_PORT='".$values['L13_SMS_PORT']."'";
  $values['L13_SMS_CLI_ID'] = $_POST['line13_sms_cli_id'] ;
  $updatesql_a.=",L13_SMS_CLI_ID='".$values['L13_SMS_CLI_ID']."'";
  $values['L13_SMS_CLI_PASSWD'] = $_POST['line13_sms_cli_passwd'] ;
  $updatesql_a.=",L13_SMS_CLI_PASSWD='".$values['L13_SMS_CLI_PASSWD']."'";
endif; 
 $values['LINE13_SMS_VALIDITY_TIME'] = $_POST['line13_sms_validity_time'] ;
  $updatesql_a.=",LINE13_SMS_VALIDITY_TIME='".$values['LINE13_SMS_VALIDITY_TIME']."'";
  $values['L13_DISABLE_SMS_ACK'] = $_POST['line13_sms_ack_enable']=='on'?'0':'1';
  $updatesql_a.=",L13_DISABLE_SMS_ACK='".$values['L13_DISABLE_SMS_ACK']."'";


  $values['L13_DISABLE_IN'] = $_POST['line13_fw_to_voip']=='on'?'0':'1';
  $updatesql_a.=",L13_DISABLE_IN='".$values['L13_DISABLE_IN']."'";
if($values['L13_DISABLE_IN'] == 0):
  $values['L13_FW_NUM_TO_VOIP'] = $_POST['line13_fw_num_to_voip'] ;
  $updatesql_a.=",L13_FW_NUM_TO_VOIP='".$values['L13_FW_NUM_TO_VOIP']."'";
  $values['L13_V_DIGIT_MAP'] = $_POST['line13_v_dial_plan'] ;
  $updatesql_a.=",L13_V_DIGIT_MAP='".$values['L13_V_DIGIT_MAP']."'";
  $values['L13_FW2VOIP_AUTH_MODE'] = $_POST['line13_fw2voip_auth_mode'] ;
  $updatesql_a.=",L13_FW2VOIP_AUTH_MODE='".$values['L13_FW2VOIP_AUTH_MODE']."'";
if($values['L13_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L13_FW_TO_VOIP_PASSWD'] = $_POST['line13_fw_to_voip_passwd'] ;
  $updatesql_a.=",L13_FW_TO_VOIP_PASSWD='".$values['L13_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L13_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L13_FW_TO_VOIP_PASSWD'] = $_POST['l13_fw_to_voip_passwd'] ;
  $updatesql_a.=",L13_FW_TO_VOIP_PASSWD='".$values['L13_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 

  $values['L13_GROUP_MODE'] = $_POST['line13_gsm_group_mode'] ;
  $updatesql_a.=",L13_GROUP_MODE='".$values['L13_GROUP_MODE']."'";
if($values['L13_GROUP_MODE'] == 'SVR'):
  $values['L13_GSM_FW_MODE'] = $_POST['line13_gsm_fw_mode'] ;
  $updatesql_a.=",L13_GSM_FW_MODE='".$values['L13_GSM_FW_MODE']."'";
  $values['L13_PARTNER_SVR'] = $_POST['line13_group_share_addr'] ;
  $updatesql_a.=",L13_PARTNER_SVR='".$values['L13_PARTNER_SVR']."'";
endif; 
if($values['L13_GROUP_MODE'] == 'CLI'):
  $values['L13_GROUP_SVR'] = $_POST['line13_group_svr_addr'] ;
  $updatesql_a.=",L13_GROUP_SVR='".$values['L13_GROUP_SVR']."'";
endif;
  $values['L13_GSM_NUMBER'] = $_POST['line13_gsm_num'] ;
  $updatesql_a.=",L13_GSM_NUMBER='".$values['L13_GSM_NUMBER']."'";
  $values['L13_CALLER_ANONYMOUS'] = $_POST['line13_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql_a.=",L13_CALLER_ANONYMOUS='".$values['L13_CALLER_ANONYMOUS']."'";
 
if($values['TELPORT'] >= 14): 
endif; 
  $values['L14_DISABLE_OUT'] = $_POST['line14_fw_to_pstn']=='on'?'0':'1';
  $updatesql_a.=",L14_DISABLE_OUT='".$values['L14_DISABLE_OUT']."'";
if($values['L14_DISABLE_OUT'] == 0):
  $values['L14_FW_NUM_TO_PSTN'] = $_POST['line14_fw_num_to_pstn'] ;
  $updatesql_a.=",L14_FW_NUM_TO_PSTN='".$values['L14_FW_NUM_TO_PSTN']."'";
  $values['L14_P_DIGIT_MAP'] = $_POST['line14_p_dial_plan'] ;
  $updatesql_a.=",L14_P_DIGIT_MAP='".$values['L14_P_DIGIT_MAP']."'";
  $values['LINE14_P_DPRST'] = $_POST['line14_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql_a.=",LINE14_P_DPRST='".$values['LINE14_P_DPRST']."'";
  $values['L14_FW2PSTN_AUTH_MODE'] = $_POST['line14_fw2pstn_auth_mode'] ;
  $updatesql_a.=",L14_FW2PSTN_AUTH_MODE='".$values['L14_FW2PSTN_AUTH_MODE']."'";
if($values['L14_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L14_FW_TO_PSTN_PASSWD'] = $_POST['line14_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L14_FW_TO_PSTN_PASSWD='".$values['L14_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L14_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L14_FW_TO_PSTN_PASSWD'] = $_POST['l14_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L14_FW_TO_PSTN_PASSWD='".$values['L14_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE14_OUT_INTERVAL'] = $_POST['line14_out_interval'] ;
  $updatesql_a.=",LINE14_OUT_INTERVAL='".$values['LINE14_OUT_INTERVAL']."'";
endif; 
if(!isset($_POST['line14_sms_sender']))
  $values['L14_SMS_SENDER']      = 0;
else
  $values['L14_SMS_SENDER'] = $_POST['line14_sms_sender']=='on'?'1':'0';
  $updatesql_a.=",L14_SMS_SENDER='".$values['L14_SMS_SENDER']."'";
if($values['L14_SMS_SENDER'] == 1):
  $values['L14_SMS_SERVER'] = $_POST['line14_sms_server'] ;
  $updatesql_a.=",L14_SMS_SERVER='".$values['L14_SMS_SERVER']."'";
  $values['L14_SMS_PORT'] = $_POST['line14_sms_port'] ;
  $updatesql_a.=",L14_SMS_PORT='".$values['L14_SMS_PORT']."'";
  $values['L14_SMS_CLI_ID'] = $_POST['line14_sms_cli_id'] ;
  $updatesql_a.=",L14_SMS_CLI_ID='".$values['L14_SMS_CLI_ID']."'";
  $values['L14_SMS_CLI_PASSWD'] = $_POST['line14_sms_cli_passwd'] ;
  $updatesql_a.=",L14_SMS_CLI_PASSWD='".$values['L14_SMS_CLI_PASSWD']."'";
endif; 
 $values['LINE14_SMS_VALIDITY_TIME'] = $_POST['line14_sms_validity_time'] ;
  $updatesql_a.=",LINE14_SMS_VALIDITY_TIME='".$values['LINE14_SMS_VALIDITY_TIME']."'";
  $values['L14_DISABLE_SMS_ACK'] = $_POST['line14_sms_ack_enable']=='on'?'0':'1';
  $updatesql_a.=",L14_DISABLE_SMS_ACK='".$values['L14_DISABLE_SMS_ACK']."'";


  $values['L14_DISABLE_IN'] = $_POST['line14_fw_to_voip']=='on'?'0':'1';
  $updatesql_a.=",L14_DISABLE_IN='".$values['L14_DISABLE_IN']."'";
if($values['L14_DISABLE_IN'] == 0):
  $values['L14_FW_NUM_TO_VOIP'] = $_POST['line14_fw_num_to_voip'] ;
  $updatesql_a.=",L14_FW_NUM_TO_VOIP='".$values['L14_FW_NUM_TO_VOIP']."'";
  $values['L14_V_DIGIT_MAP'] = $_POST['line14_v_dial_plan'] ;
  $updatesql_a.=",L14_V_DIGIT_MAP='".$values['L14_V_DIGIT_MAP']."'";
  $values['L14_FW2VOIP_AUTH_MODE'] = $_POST['line14_fw2voip_auth_mode'] ;
  $updatesql_a.=",L14_FW2VOIP_AUTH_MODE='".$values['L14_FW2VOIP_AUTH_MODE']."'";
if($values['L14_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L14_FW_TO_VOIP_PASSWD'] = $_POST['line14_fw_to_voip_passwd'] ;
  $updatesql_a.=",L14_FW_TO_VOIP_PASSWD='".$values['L14_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L14_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L14_FW_TO_VOIP_PASSWD'] = $_POST['l14_fw_to_voip_passwd'] ;
  $updatesql_a.=",L14_FW_TO_VOIP_PASSWD='".$values['L14_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 

  $values['L14_GROUP_MODE'] = $_POST['line14_gsm_group_mode'] ;
  $updatesql_a.=",L14_GROUP_MODE='".$values['L14_GROUP_MODE']."'";
if($values['L14_GROUP_MODE'] == 'SVR'):
  $values['L14_GSM_FW_MODE'] = $_POST['line14_gsm_fw_mode'] ;
  $updatesql_a.=",L14_GSM_FW_MODE='".$values['L14_GSM_FW_MODE']."'";
  $values['L14_PARTNER_SVR'] = $_POST['line14_group_share_addr'] ;
  $updatesql_a.=",L14_PARTNER_SVR='".$values['L14_PARTNER_SVR']."'";
endif; 
if($values['L14_GROUP_MODE'] == 'CLI'):
  $values['L14_GROUP_SVR'] = $_POST['line14_group_svr_addr'] ;
  $updatesql_a.=",L14_GROUP_SVR='".$values['L14_GROUP_SVR']."'";
endif;
  $values['L14_GSM_NUMBER'] = $_POST['line14_gsm_num'] ;
  $updatesql_a.=",L14_GSM_NUMBER='".$values['L14_GSM_NUMBER']."'";
  $values['L14_CALLER_ANONYMOUS'] = $_POST['line14_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql_a.=",L14_CALLER_ANONYMOUS='".$values['L14_CALLER_ANONYMOUS']."'";
 
if($values['TELPORT'] >= 15): 
endif; 
  $values['L15_DISABLE_OUT'] = $_POST['line15_fw_to_pstn']=='on'?'0':'1';
  $updatesql_a.=",L15_DISABLE_OUT='".$values['L15_DISABLE_OUT']."'";
if($values['L15_DISABLE_OUT'] == 0):
  $values['L15_FW_NUM_TO_PSTN'] = $_POST['line15_fw_num_to_pstn'] ;
  $updatesql_a.=",L15_FW_NUM_TO_PSTN='".$values['L15_FW_NUM_TO_PSTN']."'";
  $values['L15_P_DIGIT_MAP'] = $_POST['line15_p_dial_plan'] ;
  $updatesql_a.=",L15_P_DIGIT_MAP='".$values['L15_P_DIGIT_MAP']."'";
  $values['LINE15_P_DPRST'] = $_POST['line15_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql_a.=",LINE15_P_DPRST='".$values['LINE15_P_DPRST']."'";
  $values['L15_FW2PSTN_AUTH_MODE'] = $_POST['line15_fw2pstn_auth_mode'] ;
  $updatesql_a.=",L15_FW2PSTN_AUTH_MODE='".$values['L15_FW2PSTN_AUTH_MODE']."'";
if($values['L15_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L15_FW_TO_PSTN_PASSWD'] = $_POST['line15_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L15_FW_TO_PSTN_PASSWD='".$values['L15_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L15_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L15_FW_TO_PSTN_PASSWD'] = $_POST['l15_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L15_FW_TO_PSTN_PASSWD='".$values['L15_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE15_OUT_INTERVAL'] = $_POST['line15_out_interval'] ;
  $updatesql_a.=",LINE15_OUT_INTERVAL='".$values['LINE15_OUT_INTERVAL']."'";
endif; 
if(!isset($_POST['line15_sms_sender']))
  $values['L15_SMS_SENDER']      = 0;
else
  $values['L15_SMS_SENDER'] = $_POST['line15_sms_sender']=='on'?'1':'0';
  $updatesql_a.=",L15_SMS_SENDER='".$values['L15_SMS_SENDER']."'";
if($values['L15_SMS_SENDER'] == 1):
  $values['L15_SMS_SERVER'] = $_POST['line15_sms_server'] ;
  $updatesql_a.=",L15_SMS_SERVER='".$values['L15_SMS_SERVER']."'";
  $values['L15_SMS_PORT'] = $_POST['line15_sms_port'] ;
  $updatesql_a.=",L15_SMS_PORT='".$values['L15_SMS_PORT']."'";
  $values['L15_SMS_CLI_ID'] = $_POST['line15_sms_cli_id'] ;
  $updatesql_a.=",L15_SMS_CLI_ID='".$values['L15_SMS_CLI_ID']."'";
  $values['L15_SMS_CLI_PASSWD'] = $_POST['line15_sms_cli_passwd'] ;
  $updatesql_a.=",L15_SMS_CLI_PASSWD='".$values['L15_SMS_CLI_PASSWD']."'";
endif; 
 $values['LINE15_SMS_VALIDITY_TIME'] = $_POST['line15_sms_validity_time'] ;
  $updatesql_a.=",LINE15_SMS_VALIDITY_TIME='".$values['LINE15_SMS_VALIDITY_TIME']."'";
  $values['L15_DISABLE_SMS_ACK'] = $_POST['line15_sms_ack_enable']=='on'?'0':'1';
  $updatesql_a.=",L15_DISABLE_SMS_ACK='".$values['L15_DISABLE_SMS_ACK']."'";


  $values['L15_DISABLE_IN'] = $_POST['line15_fw_to_voip']=='on'?'0':'1';
  $updatesql_a.=",L15_DISABLE_IN='".$values['L15_DISABLE_IN']."'";
if($values['L15_DISABLE_IN'] == 0):
  $values['L15_FW_NUM_TO_VOIP'] = $_POST['line15_fw_num_to_voip'] ;
  $updatesql_a.=",L15_FW_NUM_TO_VOIP='".$values['L15_FW_NUM_TO_VOIP']."'";
  $values['L15_V_DIGIT_MAP'] = $_POST['line15_v_dial_plan'] ;
  $updatesql_a.=",L15_V_DIGIT_MAP='".$values['L15_V_DIGIT_MAP']."'";
  $values['L15_FW2VOIP_AUTH_MODE'] = $_POST['line15_fw2voip_auth_mode'] ;
  $updatesql_a.=",L15_FW2VOIP_AUTH_MODE='".$values['L15_FW2VOIP_AUTH_MODE']."'";
if($values['L15_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L15_FW_TO_VOIP_PASSWD'] = $_POST['line15_fw_to_voip_passwd'] ;
  $updatesql_a.=",L15_FW_TO_VOIP_PASSWD='".$values['L15_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L15_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L15_FW_TO_VOIP_PASSWD'] = $_POST['l15_fw_to_voip_passwd'] ;
  $updatesql_a.=",L15_FW_TO_VOIP_PASSWD='".$values['L15_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 

  $values['L15_GROUP_MODE'] = $_POST['line15_gsm_group_mode'] ;
  $updatesql_a.=",L15_GROUP_MODE='".$values['L15_GROUP_MODE']."'";
if($values['L15_GROUP_MODE'] == 'SVR'):
  $values['L15_GSM_FW_MODE'] = $_POST['line15_gsm_fw_mode'] ;
  $updatesql_a.=",L15_GSM_FW_MODE='".$values['L15_GSM_FW_MODE']."'";
  $values['L15_PARTNER_SVR'] = $_POST['line15_group_share_addr'] ;
  $updatesql_a.=",L15_PARTNER_SVR='".$values['L15_PARTNER_SVR']."'";
endif; 
if($values['L15_GROUP_MODE'] == 'CLI'):
  $values['L15_GROUP_SVR'] = $_POST['line15_group_svr_addr'] ;
  $updatesql_a.=",L15_GROUP_SVR='".$values['L15_GROUP_SVR']."'";
endif;
  $values['L15_GSM_NUMBER'] = $_POST['line15_gsm_num'] ;
  $updatesql_a.=",L15_GSM_NUMBER='".$values['L15_GSM_NUMBER']."'";
  $values['L15_CALLER_ANONYMOUS'] = $_POST['line15_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql_a.=",L15_CALLER_ANONYMOUS='".$values['L15_CALLER_ANONYMOUS']."'";
 
if($values['TELPORT'] >= 16): 
endif; 
  $values['L16_DISABLE_OUT'] = $_POST['line16_fw_to_pstn']=='on'?'0':'1';
  $updatesql_a.=",L16_DISABLE_OUT='".$values['L16_DISABLE_OUT']."'";
if($values['L16_DISABLE_OUT'] == 0):
  $values['L16_FW_NUM_TO_PSTN'] = $_POST['line16_fw_num_to_pstn'] ;
  $updatesql_a.=",L16_FW_NUM_TO_PSTN='".$values['L16_FW_NUM_TO_PSTN']."'";
  $values['L16_P_DIGIT_MAP'] = $_POST['line16_p_dial_plan'] ;
  $updatesql_a.=",L16_P_DIGIT_MAP='".$values['L16_P_DIGIT_MAP']."'";
  $values['LINE16_P_DPRST'] = $_POST['line16_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql_a.=",LINE16_P_DPRST='".$values['LINE16_P_DPRST']."'";
  $values['L16_FW2PSTN_AUTH_MODE'] = $_POST['line16_fw2pstn_auth_mode'] ;
  $updatesql_a.=",L16_FW2PSTN_AUTH_MODE='".$values['L16_FW2PSTN_AUTH_MODE']."'";
if($values['L16_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L16_FW_TO_PSTN_PASSWD'] = $_POST['line16_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L16_FW_TO_PSTN_PASSWD='".$values['L16_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L16_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L16_FW_TO_PSTN_PASSWD'] = $_POST['l16_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L16_FW_TO_PSTN_PASSWD='".$values['L16_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE16_OUT_INTERVAL'] = $_POST['line16_out_interval'] ;
  $updatesql_a.=",LINE16_OUT_INTERVAL='".$values['LINE16_OUT_INTERVAL']."'";
endif; 
if(!isset($_POST['line16_sms_sender']))
  $values['L16_SMS_SENDER']      = 0;
else
  $values['L16_SMS_SENDER'] = $_POST['line16_sms_sender']=='on'?'1':'0';
  $updatesql_a.=",L16_SMS_SENDER='".$values['L16_SMS_SENDER']."'";
if($values['L16_SMS_SENDER'] == 1):
  $values['L16_SMS_SERVER'] = $_POST['line16_sms_server'] ;
  $updatesql_a.=",L16_SMS_SERVER='".$values['L16_SMS_SERVER']."'";
  $values['L16_SMS_PORT'] = $_POST['line16_sms_port'] ;
  $updatesql_a.=",L16_SMS_PORT='".$values['L16_SMS_PORT']."'";
  $values['L16_SMS_CLI_ID'] = $_POST['line16_sms_cli_id'] ;
  $updatesql_a.=",L16_SMS_CLI_ID='".$values['L16_SMS_CLI_ID']."'";
  $values['L16_SMS_CLI_PASSWD'] = $_POST['line16_sms_cli_passwd'] ;
  $updatesql_a.=",L16_SMS_CLI_PASSWD='".$values['L16_SMS_CLI_PASSWD']."'";
endif; 
 $values['LINE16_SMS_VALIDITY_TIME'] = $_POST['line16_sms_validity_time'] ;
  $updatesql_a.=",LINE16_SMS_VALIDITY_TIME='".$values['LINE16_SMS_VALIDITY_TIME']."'";
  $values['L16_DISABLE_SMS_ACK'] = $_POST['line16_sms_ack_enable']=='on'?'0':'1';
  $updatesql_a.=",L16_DISABLE_SMS_ACK='".$values['L16_DISABLE_SMS_ACK']."'";


  $values['L16_DISABLE_IN'] = $_POST['line16_fw_to_voip']=='on'?'0':'1';
  $updatesql_a.=",L16_DISABLE_IN='".$values['L16_DISABLE_IN']."'";
if($values['L16_DISABLE_IN'] == 0):
  $values['L16_FW_NUM_TO_VOIP'] = $_POST['line16_fw_num_to_voip'] ;
  $updatesql_a.=",L16_FW_NUM_TO_VOIP='".$values['L16_FW_NUM_TO_VOIP']."'";
  $values['L16_V_DIGIT_MAP'] = $_POST['line16_v_dial_plan'] ;
  $updatesql_a.=",L16_V_DIGIT_MAP='".$values['L16_V_DIGIT_MAP']."'";
  $values['L16_FW2VOIP_AUTH_MODE'] = $_POST['line16_fw2voip_auth_mode'] ;
  $updatesql_a.=",L16_FW2VOIP_AUTH_MODE='".$values['L16_FW2VOIP_AUTH_MODE']."'";
if($values['L16_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L16_FW_TO_VOIP_PASSWD'] = $_POST['line16_fw_to_voip_passwd'] ;
  $updatesql_a.=",L16_FW_TO_VOIP_PASSWD='".$values['L16_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L16_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L16_FW_TO_VOIP_PASSWD'] = $_POST['l16_fw_to_voip_passwd'] ;
  $updatesql_a.=",L16_FW_TO_VOIP_PASSWD='".$values['L16_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 

  $values['L16_GROUP_MODE'] = $_POST['line16_gsm_group_mode'] ;
  $updatesql_a.=",L16_GROUP_MODE='".$values['L16_GROUP_MODE']."'";
if($values['L16_GROUP_MODE'] == 'SVR'):
  $values['L16_GSM_FW_MODE'] = $_POST['line16_gsm_fw_mode'] ;
  $updatesql_a.=",L16_GSM_FW_MODE='".$values['L16_GSM_FW_MODE']."'";
  $values['L16_PARTNER_SVR'] = $_POST['line16_group_share_addr'] ;
  $updatesql_a.=",L16_PARTNER_SVR='".$values['L16_PARTNER_SVR']."'";
endif; 
if($values['L16_GROUP_MODE'] == 'CLI'):
  $values['L16_GROUP_SVR'] = $_POST['line16_group_svr_addr'] ;
  $updatesql_a.=",L16_GROUP_SVR='".$values['L16_GROUP_SVR']."'";
endif;
  $values['L16_GSM_NUMBER'] = $_POST['line16_gsm_num'] ;
  $updatesql_a.=",L16_GSM_NUMBER='".$values['L16_GSM_NUMBER']."'";
  $values['L16_CALLER_ANONYMOUS'] = $_POST['line16_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql_a.=",L16_CALLER_ANONYMOUS='".$values['L16_CALLER_ANONYMOUS']."'";
 
if($values['TELPORT'] >= 17): 
endif; 
  $values['L17_DISABLE_OUT'] = $_POST['line17_fw_to_pstn']=='on'?'0':'1';
  $updatesql_a.=",L17_DISABLE_OUT='".$values['L17_DISABLE_OUT']."'";
if($values['L17_DISABLE_OUT'] == 0):
  $values['L17_FW_NUM_TO_PSTN'] = $_POST['line17_fw_num_to_pstn'] ;
  $updatesql_a.=",L17_FW_NUM_TO_PSTN='".$values['L17_FW_NUM_TO_PSTN']."'";
  $values['L17_P_DIGIT_MAP'] = $_POST['line17_p_dial_plan'] ;
  $updatesql_a.=",L17_P_DIGIT_MAP='".$values['L17_P_DIGIT_MAP']."'";
  $values['LINE17_P_DPRST'] = $_POST['line17_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql_a.=",LINE17_P_DPRST='".$values['LINE17_P_DPRST']."'";
  $values['L17_FW2PSTN_AUTH_MODE'] = $_POST['line17_fw2pstn_auth_mode'] ;
  $updatesql_a.=",L17_FW2PSTN_AUTH_MODE='".$values['L17_FW2PSTN_AUTH_MODE']."'";
if($values['L17_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L17_FW_TO_PSTN_PASSWD'] = $_POST['line17_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L17_FW_TO_PSTN_PASSWD='".$values['L17_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L17_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L17_FW_TO_PSTN_PASSWD'] = $_POST['l17_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L17_FW_TO_PSTN_PASSWD='".$values['L17_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE17_OUT_INTERVAL'] = $_POST['line17_out_interval'] ;
  $updatesql_a.=",LINE17_OUT_INTERVAL='".$values['LINE17_OUT_INTERVAL']."'";
endif; 
if(!isset($_POST['line17_sms_sender']))
  $values['L17_SMS_SENDER']      = 0;
else
  $values['L17_SMS_SENDER'] = $_POST['line17_sms_sender']=='on'?'1':'0';
  $updatesql_a.=",L17_SMS_SENDER='".$values['L17_SMS_SENDER']."'";
if($values['L17_SMS_SENDER'] == 1):
  $values['L17_SMS_SERVER'] = $_POST['line17_sms_server'] ;
  $updatesql_a.=",L17_SMS_SERVER='".$values['L17_SMS_SERVER']."'";
  $values['L17_SMS_PORT'] = $_POST['line17_sms_port'] ;
  $updatesql_a.=",L17_SMS_PORT='".$values['L17_SMS_PORT']."'";
  $values['L17_SMS_CLI_ID'] = $_POST['line17_sms_cli_id'] ;
  $updatesql_a.=",L17_SMS_CLI_ID='".$values['L17_SMS_CLI_ID']."'";
  $values['L17_SMS_CLI_PASSWD'] = $_POST['line17_sms_cli_passwd'] ;
  $updatesql_a.=",L17_SMS_CLI_PASSWD='".$values['L17_SMS_CLI_PASSWD']."'";
endif; 
 $values['LINE17_SMS_VALIDITY_TIME'] = $_POST['line17_sms_validity_time'] ;
  $updatesql_a.=",LINE17_SMS_VALIDITY_TIME='".$values['LINE17_SMS_VALIDITY_TIME']."'";
  $values['L17_DISABLE_SMS_ACK'] = $_POST['line17_sms_ack_enable']=='on'?'0':'1';
  $updatesql_a.=",L17_DISABLE_SMS_ACK='".$values['L17_DISABLE_SMS_ACK']."'";


  $values['L17_DISABLE_IN'] = $_POST['line17_fw_to_voip']=='on'?'0':'1';
  $updatesql_a.=",L17_DISABLE_IN='".$values['L17_DISABLE_IN']."'";
if($values['L17_DISABLE_IN'] == 0):
  $values['L17_FW_NUM_TO_VOIP'] = $_POST['line17_fw_num_to_voip'] ;
  $updatesql_a.=",L17_FW_NUM_TO_VOIP='".$values['L17_FW_NUM_TO_VOIP']."'";
  $values['L17_V_DIGIT_MAP'] = $_POST['line17_v_dial_plan'] ;
  $updatesql_a.=",L17_V_DIGIT_MAP='".$values['L17_V_DIGIT_MAP']."'";
  $values['L17_FW2VOIP_AUTH_MODE'] = $_POST['line17_fw2voip_auth_mode'] ;
  $updatesql_a.=",L17_FW2VOIP_AUTH_MODE='".$values['L17_FW2VOIP_AUTH_MODE']."'";
if($values['L17_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L17_FW_TO_VOIP_PASSWD'] = $_POST['line17_fw_to_voip_passwd'] ;
  $updatesql_a.=",L17_FW_TO_VOIP_PASSWD='".$values['L17_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L17_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L17_FW_TO_VOIP_PASSWD'] = $_POST['l17_fw_to_voip_passwd'] ;
  $updatesql_a.=",L17_FW_TO_VOIP_PASSWD='".$values['L17_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 

  $values['L17_GROUP_MODE'] = $_POST['line17_gsm_group_mode'] ;
  $updatesql_a.=",L17_GROUP_MODE='".$values['L17_GROUP_MODE']."'";
if($values['L17_GROUP_MODE'] == 'SVR'):
  $values['L17_GSM_FW_MODE'] = $_POST['line17_gsm_fw_mode'] ;
  $updatesql_a.=",L17_GSM_FW_MODE='".$values['L17_GSM_FW_MODE']."'";
  $values['L17_PARTNER_SVR'] = $_POST['line17_group_share_addr'] ;
  $updatesql_a.=",L17_PARTNER_SVR='".$values['L17_PARTNER_SVR']."'";
endif; 
if($values['L17_GROUP_MODE'] == 'CLI'):
  $values['L17_GROUP_SVR'] = $_POST['line17_group_svr_addr'] ;
  $updatesql_a.=",L17_GROUP_SVR='".$values['L17_GROUP_SVR']."'";
endif;
  $values['L17_GSM_NUMBER'] = $_POST['line17_gsm_num'] ;
  $updatesql_a.=",L17_GSM_NUMBER='".$values['L17_GSM_NUMBER']."'";
  $values['L17_CALLER_ANONYMOUS'] = $_POST['line17_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql_a.=",L17_CALLER_ANONYMOUS='".$values['L17_CALLER_ANONYMOUS']."'";
 
if($values['TELPORT'] >= 18): 
endif; 
  $values['L18_DISABLE_OUT'] = $_POST['line18_fw_to_pstn']=='on'?'0':'1';
  $updatesql_a.=",L18_DISABLE_OUT='".$values['L18_DISABLE_OUT']."'";
if($values['L18_DISABLE_OUT'] == 0):
  $values['L18_FW_NUM_TO_PSTN'] = $_POST['line18_fw_num_to_pstn'] ;
  $updatesql_a.=",L18_FW_NUM_TO_PSTN='".$values['L18_FW_NUM_TO_PSTN']."'";
  $values['L18_P_DIGIT_MAP'] = $_POST['line18_p_dial_plan'] ;
  $updatesql_a.=",L18_P_DIGIT_MAP='".$values['L18_P_DIGIT_MAP']."'";
  $values['LINE18_P_DPRST'] = $_POST['line18_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql_a.=",LINE18_P_DPRST='".$values['LINE18_P_DPRST']."'";
  $values['L18_FW2PSTN_AUTH_MODE'] = $_POST['line18_fw2pstn_auth_mode'] ;
  $updatesql_a.=",L18_FW2PSTN_AUTH_MODE='".$values['L18_FW2PSTN_AUTH_MODE']."'";
if($values['L18_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L18_FW_TO_PSTN_PASSWD'] = $_POST['line18_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L18_FW_TO_PSTN_PASSWD='".$values['L18_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L18_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L18_FW_TO_PSTN_PASSWD'] = $_POST['l18_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L18_FW_TO_PSTN_PASSWD='".$values['L18_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE18_OUT_INTERVAL'] = $_POST['line18_out_interval'] ;
  $updatesql_a.=",LINE18_OUT_INTERVAL='".$values['LINE18_OUT_INTERVAL']."'";
endif; 
if(!isset($_POST['line18_sms_sender']))
  $values['L18_SMS_SENDER']      = 0;
else
  $values['L18_SMS_SENDER'] = $_POST['line18_sms_sender']=='on'?'1':'0';
  $updatesql_a.=",L18_SMS_SENDER='".$values['L18_SMS_SENDER']."'";
if($values['L18_SMS_SENDER'] == 1):
  $values['L18_SMS_SERVER'] = $_POST['line18_sms_server'] ;
  $updatesql_a.=",L18_SMS_SERVER='".$values['L18_SMS_SERVER']."'";
  $values['L18_SMS_PORT'] = $_POST['line18_sms_port'] ;
  $updatesql_a.=",L18_SMS_PORT='".$values['L18_SMS_PORT']."'";
  $values['L18_SMS_CLI_ID'] = $_POST['line18_sms_cli_id'] ;
  $updatesql_a.=",L18_SMS_CLI_ID='".$values['L18_SMS_CLI_ID']."'";
  $values['L18_SMS_CLI_PASSWD'] = $_POST['line18_sms_cli_passwd'] ;
  $updatesql_a.=",L18_SMS_CLI_PASSWD='".$values['L18_SMS_CLI_PASSWD']."'";
endif; 
 $values['LINE18_SMS_VALIDITY_TIME'] = $_POST['line18_sms_validity_time'] ;
  $updatesql_a.=",LINE18_SMS_VALIDITY_TIME='".$values['LINE18_SMS_VALIDITY_TIME']."'";
  $values['L18_DISABLE_SMS_ACK'] = $_POST['line18_sms_ack_enable']=='on'?'0':'1';
  $updatesql_a.=",L18_DISABLE_SMS_ACK='".$values['L18_DISABLE_SMS_ACK']."'";


  $values['L18_DISABLE_IN'] = $_POST['line18_fw_to_voip']=='on'?'0':'1';
  $updatesql_a.=",L18_DISABLE_IN='".$values['L18_DISABLE_IN']."'";
if($values['L18_DISABLE_IN'] == 0):
  $values['L18_FW_NUM_TO_VOIP'] = $_POST['line18_fw_num_to_voip'] ;
  $updatesql_a.=",L18_FW_NUM_TO_VOIP='".$values['L18_FW_NUM_TO_VOIP']."'";
  $values['L18_V_DIGIT_MAP'] = $_POST['line18_v_dial_plan'] ;
  $updatesql_a.=",L18_V_DIGIT_MAP='".$values['L18_V_DIGIT_MAP']."'";
  $values['L18_FW2VOIP_AUTH_MODE'] = $_POST['line18_fw2voip_auth_mode'] ;
  $updatesql_a.=",L18_FW2VOIP_AUTH_MODE='".$values['L18_FW2VOIP_AUTH_MODE']."'";
if($values['L18_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L18_FW_TO_VOIP_PASSWD'] = $_POST['line18_fw_to_voip_passwd'] ;
  $updatesql_a.=",L18_FW_TO_VOIP_PASSWD='".$values['L18_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L18_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L18_FW_TO_VOIP_PASSWD'] = $_POST['l18_fw_to_voip_passwd'] ;
  $updatesql_a.=",L18_FW_TO_VOIP_PASSWD='".$values['L18_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 

  $values['L18_GROUP_MODE'] = $_POST['line18_gsm_group_mode'] ;
  $updatesql_a.=",L18_GROUP_MODE='".$values['L18_GROUP_MODE']."'";
if($values['L18_GROUP_MODE'] == 'SVR'):
  $values['L18_GSM_FW_MODE'] = $_POST['line18_gsm_fw_mode'] ;
  $updatesql_a.=",L18_GSM_FW_MODE='".$values['L18_GSM_FW_MODE']."'";
  $values['L18_PARTNER_SVR'] = $_POST['line18_group_share_addr'] ;
  $updatesql_a.=",L18_PARTNER_SVR='".$values['L18_PARTNER_SVR']."'";
endif; 
if($values['L18_GROUP_MODE'] == 'CLI'):
  $values['L18_GROUP_SVR'] = $_POST['line18_group_svr_addr'] ;
  $updatesql_a.=",L18_GROUP_SVR='".$values['L18_GROUP_SVR']."'";
endif;
  $values['L18_GSM_NUMBER'] = $_POST['line18_gsm_num'] ;
  $updatesql_a.=",L18_GSM_NUMBER='".$values['L18_GSM_NUMBER']."'";
  $values['L18_CALLER_ANONYMOUS'] = $_POST['line18_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql_a.=",L18_CALLER_ANONYMOUS='".$values['L18_CALLER_ANONYMOUS']."'";
 
if($values['TELPORT'] >= 19): 
endif; 
  $values['L19_DISABLE_OUT'] = $_POST['line19_fw_to_pstn']=='on'?'0':'1';
  $updatesql_a.=",L19_DISABLE_OUT='".$values['L19_DISABLE_OUT']."'";
if($values['L19_DISABLE_OUT'] == 0):
  $values['L19_FW_NUM_TO_PSTN'] = $_POST['line19_fw_num_to_pstn'] ;
  $updatesql_a.=",L19_FW_NUM_TO_PSTN='".$values['L19_FW_NUM_TO_PSTN']."'";
  $values['L19_P_DIGIT_MAP'] = $_POST['line19_p_dial_plan'] ;
  $updatesql_a.=",L19_P_DIGIT_MAP='".$values['L19_P_DIGIT_MAP']."'";
  $values['LINE19_P_DPRST'] = $_POST['line19_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql_a.=",LINE19_P_DPRST='".$values['LINE19_P_DPRST']."'";
  $values['L19_FW2PSTN_AUTH_MODE'] = $_POST['line19_fw2pstn_auth_mode'] ;
  $updatesql_a.=",L19_FW2PSTN_AUTH_MODE='".$values['L19_FW2PSTN_AUTH_MODE']."'";
if($values['L19_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L19_FW_TO_PSTN_PASSWD'] = $_POST['line19_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L19_FW_TO_PSTN_PASSWD='".$values['L19_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L19_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L19_FW_TO_PSTN_PASSWD'] = $_POST['l19_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L19_FW_TO_PSTN_PASSWD='".$values['L19_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE19_OUT_INTERVAL'] = $_POST['line19_out_interval'] ;
  $updatesql_a.=",LINE19_OUT_INTERVAL='".$values['LINE19_OUT_INTERVAL']."'";
endif; 
if(!isset($_POST['line19_sms_sender']))
  $values['L19_SMS_SENDER']      = 0;
else
  $values['L19_SMS_SENDER'] = $_POST['line19_sms_sender']=='on'?'1':'0';
  $updatesql_a.=",L19_SMS_SENDER='".$values['L19_SMS_SENDER']."'";
if($values['L19_SMS_SENDER'] == 1):
  $values['L19_SMS_SERVER'] = $_POST['line19_sms_server'] ;
  $updatesql_a.=",L19_SMS_SERVER='".$values['L19_SMS_SERVER']."'";
  $values['L19_SMS_PORT'] = $_POST['line19_sms_port'] ;
  $updatesql_a.=",L19_SMS_PORT='".$values['L19_SMS_PORT']."'";
  $values['L19_SMS_CLI_ID'] = $_POST['line19_sms_cli_id'] ;
  $updatesql_a.=",L19_SMS_CLI_ID='".$values['L19_SMS_CLI_ID']."'";
  $values['L19_SMS_CLI_PASSWD'] = $_POST['line19_sms_cli_passwd'] ;
  $updatesql_a.=",L19_SMS_CLI_PASSWD='".$values['L19_SMS_CLI_PASSWD']."'";
endif; 
 $values['LINE19_SMS_VALIDITY_TIME'] = $_POST['line19_sms_validity_time'] ;
  $updatesql_a.=",LINE19_SMS_VALIDITY_TIME='".$values['LINE19_SMS_VALIDITY_TIME']."'";
  $values['L19_DISABLE_SMS_ACK'] = $_POST['line19_sms_ack_enable']=='on'?'0':'1';
  $updatesql_a.=",L19_DISABLE_SMS_ACK='".$values['L19_DISABLE_SMS_ACK']."'";


  $values['L19_DISABLE_IN'] = $_POST['line19_fw_to_voip']=='on'?'0':'1';
  $updatesql_a.=",L19_DISABLE_IN='".$values['L19_DISABLE_IN']."'";
if($values['L19_DISABLE_IN'] == 0):
  $values['L19_FW_NUM_TO_VOIP'] = $_POST['line19_fw_num_to_voip'] ;
  $updatesql_a.=",L19_FW_NUM_TO_VOIP='".$values['L19_FW_NUM_TO_VOIP']."'";
  $values['L19_V_DIGIT_MAP'] = $_POST['line19_v_dial_plan'] ;
  $updatesql_a.=",L19_V_DIGIT_MAP='".$values['L19_V_DIGIT_MAP']."'";
  $values['L19_FW2VOIP_AUTH_MODE'] = $_POST['line19_fw2voip_auth_mode'] ;
  $updatesql_a.=",L19_FW2VOIP_AUTH_MODE='".$values['L19_FW2VOIP_AUTH_MODE']."'";
if($values['L19_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L19_FW_TO_VOIP_PASSWD'] = $_POST['line19_fw_to_voip_passwd'] ;
  $updatesql_a.=",L19_FW_TO_VOIP_PASSWD='".$values['L19_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L19_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L19_FW_TO_VOIP_PASSWD'] = $_POST['l19_fw_to_voip_passwd'] ;
  $updatesql_a.=",L19_FW_TO_VOIP_PASSWD='".$values['L19_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 

  $values['L19_GROUP_MODE'] = $_POST['line19_gsm_group_mode'] ;
  $updatesql_a.=",L19_GROUP_MODE='".$values['L19_GROUP_MODE']."'";
if($values['L19_GROUP_MODE'] == 'SVR'):
  $values['L19_GSM_FW_MODE'] = $_POST['line19_gsm_fw_mode'] ;
  $updatesql_a.=",L19_GSM_FW_MODE='".$values['L19_GSM_FW_MODE']."'";
  $values['L19_PARTNER_SVR'] = $_POST['line19_group_share_addr'] ;
  $updatesql_a.=",L19_PARTNER_SVR='".$values['L19_PARTNER_SVR']."'";
endif; 
if($values['L19_GROUP_MODE'] == 'CLI'):
  $values['L19_GROUP_SVR'] = $_POST['line19_group_svr_addr'] ;
  $updatesql_a.=",L19_GROUP_SVR='".$values['L19_GROUP_SVR']."'";
endif;
  $values['L19_GSM_NUMBER'] = $_POST['line19_gsm_num'] ;
  $updatesql_a.=",L19_GSM_NUMBER='".$values['L19_GSM_NUMBER']."'";
  $values['L19_CALLER_ANONYMOUS'] = $_POST['line19_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql_a.=",L19_CALLER_ANONYMOUS='".$values['L19_CALLER_ANONYMOUS']."'";
 
if($values['TELPORT'] >= 20): 
endif; 
  $values['L20_DISABLE_OUT'] = $_POST['line20_fw_to_pstn']=='on'?'0':'1';
  $updatesql_a.=",L20_DISABLE_OUT='".$values['L20_DISABLE_OUT']."'";
if($values['L20_DISABLE_OUT'] == 0):
  $values['L20_FW_NUM_TO_PSTN'] = $_POST['line20_fw_num_to_pstn'] ;
  $updatesql_a.=",L20_FW_NUM_TO_PSTN='".$values['L20_FW_NUM_TO_PSTN']."'";
  $values['L20_P_DIGIT_MAP'] = $_POST['line20_p_dial_plan'] ;
  $updatesql_a.=",L20_P_DIGIT_MAP='".$values['L20_P_DIGIT_MAP']."'";
  $values['LINE20_P_DPRST'] = $_POST['line20_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql_a.=",LINE20_P_DPRST='".$values['LINE20_P_DPRST']."'";
  $values['L20_FW2PSTN_AUTH_MODE'] = $_POST['line20_fw2pstn_auth_mode'] ;
  $updatesql_a.=",L20_FW2PSTN_AUTH_MODE='".$values['L20_FW2PSTN_AUTH_MODE']."'";
if($values['L20_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L20_FW_TO_PSTN_PASSWD'] = $_POST['line20_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L20_FW_TO_PSTN_PASSWD='".$values['L20_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L20_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L20_FW_TO_PSTN_PASSWD'] = $_POST['l20_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L20_FW_TO_PSTN_PASSWD='".$values['L20_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE20_OUT_INTERVAL'] = $_POST['line20_out_interval'] ;
  $updatesql_a.=",LINE20_OUT_INTERVAL='".$values['LINE20_OUT_INTERVAL']."'";
endif; 
if(!isset($_POST['line20_sms_sender']))
  $values['L20_SMS_SENDER']      = 0;
else
  $values['L20_SMS_SENDER'] = $_POST['line20_sms_sender']=='on'?'1':'0';
  $updatesql_a.=",L20_SMS_SENDER='".$values['L20_SMS_SENDER']."'";
if($values['L20_SMS_SENDER'] == 1):
  $values['L20_SMS_SERVER'] = $_POST['line20_sms_server'] ;
  $updatesql_a.=",L20_SMS_SERVER='".$values['L20_SMS_SERVER']."'";
  $values['L20_SMS_PORT'] = $_POST['line20_sms_port'] ;
  $updatesql_a.=",L20_SMS_PORT='".$values['L20_SMS_PORT']."'";
  $values['L20_SMS_CLI_ID'] = $_POST['line20_sms_cli_id'] ;
  $updatesql_a.=",L20_SMS_CLI_ID='".$values['L20_SMS_CLI_ID']."'";
  $values['L20_SMS_CLI_PASSWD'] = $_POST['line20_sms_cli_passwd'] ;
  $updatesql_a.=",L20_SMS_CLI_PASSWD='".$values['L20_SMS_CLI_PASSWD']."'";
endif; 
 $values['LINE20_SMS_VALIDITY_TIME'] = $_POST['line20_sms_validity_time'] ;
  $updatesql_a.=",LINE20_SMS_VALIDITY_TIME='".$values['LINE20_SMS_VALIDITY_TIME']."'";
  $values['L20_DISABLE_SMS_ACK'] = $_POST['line20_sms_ack_enable']=='on'?'0':'1';
  $updatesql_a.=",L20_DISABLE_SMS_ACK='".$values['L20_DISABLE_SMS_ACK']."'";


  $values['L20_DISABLE_IN'] = $_POST['line20_fw_to_voip']=='on'?'0':'1';
  $updatesql_a.=",L20_DISABLE_IN='".$values['L20_DISABLE_IN']."'";
if($values['L20_DISABLE_IN'] == 0):
  $values['L20_FW_NUM_TO_VOIP'] = $_POST['line20_fw_num_to_voip'] ;
  $updatesql_a.=",L20_FW_NUM_TO_VOIP='".$values['L20_FW_NUM_TO_VOIP']."'";
  $values['L20_V_DIGIT_MAP'] = $_POST['line20_v_dial_plan'] ;
  $updatesql_a.=",L20_V_DIGIT_MAP='".$values['L20_V_DIGIT_MAP']."'";
  $values['L20_FW2VOIP_AUTH_MODE'] = $_POST['line20_fw2voip_auth_mode'] ;
  $updatesql_a.=",L20_FW2VOIP_AUTH_MODE='".$values['L20_FW2VOIP_AUTH_MODE']."'";
if($values['L20_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L20_FW_TO_VOIP_PASSWD'] = $_POST['line20_fw_to_voip_passwd'] ;
  $updatesql_a.=",L20_FW_TO_VOIP_PASSWD='".$values['L20_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L20_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L20_FW_TO_VOIP_PASSWD'] = $_POST['l20_fw_to_voip_passwd'] ;
  $updatesql_a.=",L20_FW_TO_VOIP_PASSWD='".$values['L20_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 

  $values['L20_GROUP_MODE'] = $_POST['line20_gsm_group_mode'] ;
  $updatesql_a.=",L20_GROUP_MODE='".$values['L20_GROUP_MODE']."'";
if($values['L20_GROUP_MODE'] == 'SVR'):
  $values['L20_GSM_FW_MODE'] = $_POST['line20_gsm_fw_mode'] ;
  $updatesql_a.=",L20_GSM_FW_MODE='".$values['L20_GSM_FW_MODE']."'";
  $values['L20_PARTNER_SVR'] = $_POST['line20_group_share_addr'] ;
  $updatesql_a.=",L20_PARTNER_SVR='".$values['L20_PARTNER_SVR']."'";
endif; 
if($values['L20_GROUP_MODE'] == 'CLI'):
  $values['L20_GROUP_SVR'] = $_POST['line20_group_svr_addr'] ;
  $updatesql_a.=",L20_GROUP_SVR='".$values['L20_GROUP_SVR']."'";
endif;
  $values['L20_GSM_NUMBER'] = $_POST['line20_gsm_num'] ;
  $updatesql_a.=",L20_GSM_NUMBER='".$values['L20_GSM_NUMBER']."'";
  $values['L20_CALLER_ANONYMOUS'] = $_POST['line20_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql_a.=",L20_CALLER_ANONYMOUS='".$values['L20_CALLER_ANONYMOUS']."'";
 
if($values['TELPORT'] >= 21): 
endif; 
  $values['L21_DISABLE_OUT'] = $_POST['line21_fw_to_pstn']=='on'?'0':'1';
  $updatesql_a.=",L21_DISABLE_OUT='".$values['L21_DISABLE_OUT']."'";
if($values['L21_DISABLE_OUT'] == 0):
  $values['L21_FW_NUM_TO_PSTN'] = $_POST['line21_fw_num_to_pstn'] ;
  $updatesql_a.=",L21_FW_NUM_TO_PSTN='".$values['L21_FW_NUM_TO_PSTN']."'";
  $values['L21_P_DIGIT_MAP'] = $_POST['line21_p_dial_plan'] ;
  $updatesql_a.=",L21_P_DIGIT_MAP='".$values['L21_P_DIGIT_MAP']."'";
  $values['LINE21_P_DPRST'] = $_POST['line21_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql_a.=",LINE21_P_DPRST='".$values['LINE21_P_DPRST']."'";
  $values['L21_FW2PSTN_AUTH_MODE'] = $_POST['line21_fw2pstn_auth_mode'] ;
  $updatesql_a.=",L21_FW2PSTN_AUTH_MODE='".$values['L21_FW2PSTN_AUTH_MODE']."'";
if($values['L21_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L21_FW_TO_PSTN_PASSWD'] = $_POST['line21_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L21_FW_TO_PSTN_PASSWD='".$values['L21_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L21_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L21_FW_TO_PSTN_PASSWD'] = $_POST['l21_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L21_FW_TO_PSTN_PASSWD='".$values['L21_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE21_OUT_INTERVAL'] = $_POST['line21_out_interval'] ;
  $updatesql_a.=",LINE21_OUT_INTERVAL='".$values['LINE21_OUT_INTERVAL']."'";
endif; 
if(!isset($_POST['line21_sms_sender']))
  $values['L21_SMS_SENDER']      = 0;
else
  $values['L21_SMS_SENDER'] = $_POST['line21_sms_sender']=='on'?'1':'0';
  $updatesql_a.=",L21_SMS_SENDER='".$values['L21_SMS_SENDER']."'";
if($values['L21_SMS_SENDER'] == 1):
  $values['L21_SMS_SERVER'] = $_POST['line21_sms_server'] ;
  $updatesql_a.=",L21_SMS_SERVER='".$values['L21_SMS_SERVER']."'";
  $values['L21_SMS_PORT'] = $_POST['line21_sms_port'] ;
  $updatesql_a.=",L21_SMS_PORT='".$values['L21_SMS_PORT']."'";
  $values['L21_SMS_CLI_ID'] = $_POST['line21_sms_cli_id'] ;
  $updatesql_a.=",L21_SMS_CLI_ID='".$values['L21_SMS_CLI_ID']."'";
  $values['L21_SMS_CLI_PASSWD'] = $_POST['line21_sms_cli_passwd'] ;
  $updatesql_a.=",L21_SMS_CLI_PASSWD='".$values['L21_SMS_CLI_PASSWD']."'";
endif; 
 $values['LINE21_SMS_VALIDITY_TIME'] = $_POST['line21_sms_validity_time'] ;
  $updatesql_a.=",LINE21_SMS_VALIDITY_TIME='".$values['LINE21_SMS_VALIDITY_TIME']."'";
  $values['L21_DISABLE_SMS_ACK'] = $_POST['line21_sms_ack_enable']=='on'?'0':'1';
  $updatesql_a.=",L21_DISABLE_SMS_ACK='".$values['L21_DISABLE_SMS_ACK']."'";


  $values['L21_DISABLE_IN'] = $_POST['line21_fw_to_voip']=='on'?'0':'1';
  $updatesql_a.=",L21_DISABLE_IN='".$values['L21_DISABLE_IN']."'";
if($values['L21_DISABLE_IN'] == 0):
  $values['L21_FW_NUM_TO_VOIP'] = $_POST['line21_fw_num_to_voip'] ;
  $updatesql_a.=",L21_FW_NUM_TO_VOIP='".$values['L21_FW_NUM_TO_VOIP']."'";
  $values['L21_V_DIGIT_MAP'] = $_POST['line21_v_dial_plan'] ;
  $updatesql_a.=",L21_V_DIGIT_MAP='".$values['L21_V_DIGIT_MAP']."'";
  $values['L21_FW2VOIP_AUTH_MODE'] = $_POST['line21_fw2voip_auth_mode'] ;
  $updatesql_a.=",L21_FW2VOIP_AUTH_MODE='".$values['L21_FW2VOIP_AUTH_MODE']."'";
if($values['L21_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L21_FW_TO_VOIP_PASSWD'] = $_POST['line21_fw_to_voip_passwd'] ;
  $updatesql_a.=",L21_FW_TO_VOIP_PASSWD='".$values['L21_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L21_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L21_FW_TO_VOIP_PASSWD'] = $_POST['l21_fw_to_voip_passwd'] ;
  $updatesql_a.=",L21_FW_TO_VOIP_PASSWD='".$values['L21_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 

  $values['L21_GROUP_MODE'] = $_POST['line21_gsm_group_mode'] ;
  $updatesql_a.=",L21_GROUP_MODE='".$values['L21_GROUP_MODE']."'";
if($values['L21_GROUP_MODE'] == 'SVR'):
  $values['L21_GSM_FW_MODE'] = $_POST['line21_gsm_fw_mode'] ;
  $updatesql_a.=",L21_GSM_FW_MODE='".$values['L21_GSM_FW_MODE']."'";
  $values['L21_PARTNER_SVR'] = $_POST['line21_group_share_addr'] ;
  $updatesql_a.=",L21_PARTNER_SVR='".$values['L21_PARTNER_SVR']."'";
endif; 
if($values['L21_GROUP_MODE'] == 'CLI'):
  $values['L21_GROUP_SVR'] = $_POST['line21_group_svr_addr'] ;
  $updatesql_a.=",L21_GROUP_SVR='".$values['L21_GROUP_SVR']."'";
endif;
  $values['L21_GSM_NUMBER'] = $_POST['line21_gsm_num'] ;
  $updatesql_a.=",L21_GSM_NUMBER='".$values['L21_GSM_NUMBER']."'";
  $values['L21_CALLER_ANONYMOUS'] = $_POST['line21_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql_a.=",L21_CALLER_ANONYMOUS='".$values['L21_CALLER_ANONYMOUS']."'";
 
if($values['TELPORT'] >= 22): 
endif; 
  $values['L22_DISABLE_OUT'] = $_POST['line22_fw_to_pstn']=='on'?'0':'1';
  $updatesql_a.=",L22_DISABLE_OUT='".$values['L22_DISABLE_OUT']."'";
if($values['L22_DISABLE_OUT'] == 0):
  $values['L22_FW_NUM_TO_PSTN'] = $_POST['line22_fw_num_to_pstn'] ;
  $updatesql_a.=",L22_FW_NUM_TO_PSTN='".$values['L22_FW_NUM_TO_PSTN']."'";
  $values['L22_P_DIGIT_MAP'] = $_POST['line22_p_dial_plan'] ;
  $updatesql_a.=",L22_P_DIGIT_MAP='".$values['L22_P_DIGIT_MAP']."'";
  $values['LINE22_P_DPRST'] = $_POST['line22_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql_a.=",LINE22_P_DPRST='".$values['LINE22_P_DPRST']."'";
  $values['L22_FW2PSTN_AUTH_MODE'] = $_POST['line22_fw2pstn_auth_mode'] ;
  $updatesql_a.=",L22_FW2PSTN_AUTH_MODE='".$values['L22_FW2PSTN_AUTH_MODE']."'";
if($values['L22_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L22_FW_TO_PSTN_PASSWD'] = $_POST['line22_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L22_FW_TO_PSTN_PASSWD='".$values['L22_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L22_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L22_FW_TO_PSTN_PASSWD'] = $_POST['l22_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L22_FW_TO_PSTN_PASSWD='".$values['L22_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE22_OUT_INTERVAL'] = $_POST['line22_out_interval'] ;
  $updatesql_a.=",LINE22_OUT_INTERVAL='".$values['LINE22_OUT_INTERVAL']."'";
endif; 
if(!isset($_POST['line22_sms_sender']))
  $values['L22_SMS_SENDER']      = 0;
else
  $values['L22_SMS_SENDER'] = $_POST['line22_sms_sender']=='on'?'1':'0';
  $updatesql_a.=",L22_SMS_SENDER='".$values['L22_SMS_SENDER']."'";
if($values['L22_SMS_SENDER'] == 1):
  $values['L22_SMS_SERVER'] = $_POST['line22_sms_server'] ;
  $updatesql_a.=",L22_SMS_SERVER='".$values['L22_SMS_SERVER']."'";
  $values['L22_SMS_PORT'] = $_POST['line22_sms_port'] ;
  $updatesql_a.=",L22_SMS_PORT='".$values['L22_SMS_PORT']."'";
  $values['L22_SMS_CLI_ID'] = $_POST['line22_sms_cli_id'] ;
  $updatesql_a.=",L22_SMS_CLI_ID='".$values['L22_SMS_CLI_ID']."'";
  $values['L22_SMS_CLI_PASSWD'] = $_POST['line22_sms_cli_passwd'] ;
  $updatesql_a.=",L22_SMS_CLI_PASSWD='".$values['L22_SMS_CLI_PASSWD']."'";
endif; 
 $values['LINE22_SMS_VALIDITY_TIME'] = $_POST['line22_sms_validity_time'] ;
  $updatesql_a.=",LINE22_SMS_VALIDITY_TIME='".$values['LINE22_SMS_VALIDITY_TIME']."'";
  $values['L22_DISABLE_SMS_ACK'] = $_POST['line22_sms_ack_enable']=='on'?'0':'1';
  $updatesql_a.=",L22_DISABLE_SMS_ACK='".$values['L22_DISABLE_SMS_ACK']."'";


  $values['L22_DISABLE_IN'] = $_POST['line22_fw_to_voip']=='on'?'0':'1';
  $updatesql_a.=",L22_DISABLE_IN='".$values['L22_DISABLE_IN']."'";
if($values['L22_DISABLE_IN'] == 0):
  $values['L22_FW_NUM_TO_VOIP'] = $_POST['line22_fw_num_to_voip'] ;
  $updatesql_a.=",L22_FW_NUM_TO_VOIP='".$values['L22_FW_NUM_TO_VOIP']."'";
  $values['L22_V_DIGIT_MAP'] = $_POST['line22_v_dial_plan'] ;
  $updatesql_a.=",L22_V_DIGIT_MAP='".$values['L22_V_DIGIT_MAP']."'";
  $values['L22_FW2VOIP_AUTH_MODE'] = $_POST['line22_fw2voip_auth_mode'] ;
  $updatesql_a.=",L22_FW2VOIP_AUTH_MODE='".$values['L22_FW2VOIP_AUTH_MODE']."'";
if($values['L22_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L22_FW_TO_VOIP_PASSWD'] = $_POST['line22_fw_to_voip_passwd'] ;
  $updatesql_a.=",L22_FW_TO_VOIP_PASSWD='".$values['L22_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L22_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L22_FW_TO_VOIP_PASSWD'] = $_POST['l22_fw_to_voip_passwd'] ;
  $updatesql_a.=",L22_FW_TO_VOIP_PASSWD='".$values['L22_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 

  $values['L22_GROUP_MODE'] = $_POST['line22_gsm_group_mode'] ;
  $updatesql_a.=",L22_GROUP_MODE='".$values['L22_GROUP_MODE']."'";
if($values['L22_GROUP_MODE'] == 'SVR'):
  $values['L22_GSM_FW_MODE'] = $_POST['line22_gsm_fw_mode'] ;
  $updatesql_a.=",L22_GSM_FW_MODE='".$values['L22_GSM_FW_MODE']."'";
  $values['L22_PARTNER_SVR'] = $_POST['line22_group_share_addr'] ;
  $updatesql_a.=",L22_PARTNER_SVR='".$values['L22_PARTNER_SVR']."'";
endif; 
if($values['L22_GROUP_MODE'] == 'CLI'):
  $values['L22_GROUP_SVR'] = $_POST['line22_group_svr_addr'] ;
  $updatesql_a.=",L22_GROUP_SVR='".$values['L22_GROUP_SVR']."'";
endif;
  $values['L22_GSM_NUMBER'] = $_POST['line22_gsm_num'] ;
  $updatesql_a.=",L22_GSM_NUMBER='".$values['L22_GSM_NUMBER']."'";
  $values['L22_CALLER_ANONYMOUS'] = $_POST['line22_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql_a.=",L22_CALLER_ANONYMOUS='".$values['L22_CALLER_ANONYMOUS']."'";
 
if($values['TELPORT'] >= 23): 
endif; 
  $values['L23_DISABLE_OUT'] = $_POST['line23_fw_to_pstn']=='on'?'0':'1';
  $updatesql_a.=",L23_DISABLE_OUT='".$values['L23_DISABLE_OUT']."'";
if($values['L23_DISABLE_OUT'] == 0):
  $values['L23_FW_NUM_TO_PSTN'] = $_POST['line23_fw_num_to_pstn'] ;
  $updatesql_a.=",L23_FW_NUM_TO_PSTN='".$values['L23_FW_NUM_TO_PSTN']."'";
  $values['L23_P_DIGIT_MAP'] = $_POST['line23_p_dial_plan'] ;
  $updatesql_a.=",L23_P_DIGIT_MAP='".$values['L23_P_DIGIT_MAP']."'";
  $values['LINE23_P_DPRST'] = $_POST['line23_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql_a.=",LINE23_P_DPRST='".$values['LINE23_P_DPRST']."'";
  $values['L23_FW2PSTN_AUTH_MODE'] = $_POST['line23_fw2pstn_auth_mode'] ;
  $updatesql_a.=",L23_FW2PSTN_AUTH_MODE='".$values['L23_FW2PSTN_AUTH_MODE']."'";
if($values['L23_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L23_FW_TO_PSTN_PASSWD'] = $_POST['line23_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L23_FW_TO_PSTN_PASSWD='".$values['L23_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L23_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L23_FW_TO_PSTN_PASSWD'] = $_POST['l23_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L23_FW_TO_PSTN_PASSWD='".$values['L23_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE23_OUT_INTERVAL'] = $_POST['line23_out_interval'] ;
  $updatesql_a.=",LINE23_OUT_INTERVAL='".$values['LINE23_OUT_INTERVAL']."'";
endif; 
if(!isset($_POST['line23_sms_sender']))
  $values['L23_SMS_SENDER']      = 0;
else
  $values['L23_SMS_SENDER'] = $_POST['line23_sms_sender']=='on'?'1':'0';
  $updatesql_a.=",L23_SMS_SENDER='".$values['L23_SMS_SENDER']."'";
if($values['L23_SMS_SENDER'] == 1):
  $values['L23_SMS_SERVER'] = $_POST['line23_sms_server'] ;
  $updatesql_a.=",L23_SMS_SERVER='".$values['L23_SMS_SERVER']."'";
  $values['L23_SMS_PORT'] = $_POST['line23_sms_port'] ;
  $updatesql_a.=",L23_SMS_PORT='".$values['L23_SMS_PORT']."'";
  $values['L23_SMS_CLI_ID'] = $_POST['line23_sms_cli_id'] ;
  $updatesql_a.=",L23_SMS_CLI_ID='".$values['L23_SMS_CLI_ID']."'";
  $values['L23_SMS_CLI_PASSWD'] = $_POST['line23_sms_cli_passwd'] ;
  $updatesql_a.=",L23_SMS_CLI_PASSWD='".$values['L23_SMS_CLI_PASSWD']."'";
endif; 
 $values['LINE23_SMS_VALIDITY_TIME'] = $_POST['line23_sms_validity_time'] ;
  $updatesql_a.=",LINE23_SMS_VALIDITY_TIME='".$values['LINE23_SMS_VALIDITY_TIME']."'";
  $values['L23_DISABLE_SMS_ACK'] = $_POST['line23_sms_ack_enable']=='on'?'0':'1';
  $updatesql_a.=",L23_DISABLE_SMS_ACK='".$values['L23_DISABLE_SMS_ACK']."'";


  $values['L23_DISABLE_IN'] = $_POST['line23_fw_to_voip']=='on'?'0':'1';
  $updatesql_a.=",L23_DISABLE_IN='".$values['L23_DISABLE_IN']."'";
if($values['L23_DISABLE_IN'] == 0):
  $values['L23_FW_NUM_TO_VOIP'] = $_POST['line23_fw_num_to_voip'] ;
  $updatesql_a.=",L23_FW_NUM_TO_VOIP='".$values['L23_FW_NUM_TO_VOIP']."'";
  $values['L23_V_DIGIT_MAP'] = $_POST['line23_v_dial_plan'] ;
  $updatesql_a.=",L23_V_DIGIT_MAP='".$values['L23_V_DIGIT_MAP']."'";
  $values['L23_FW2VOIP_AUTH_MODE'] = $_POST['line23_fw2voip_auth_mode'] ;
  $updatesql_a.=",L23_FW2VOIP_AUTH_MODE='".$values['L23_FW2VOIP_AUTH_MODE']."'";
if($values['L23_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L23_FW_TO_VOIP_PASSWD'] = $_POST['line23_fw_to_voip_passwd'] ;
  $updatesql_a.=",L23_FW_TO_VOIP_PASSWD='".$values['L23_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L23_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L23_FW_TO_VOIP_PASSWD'] = $_POST['l23_fw_to_voip_passwd'] ;
  $updatesql_a.=",L23_FW_TO_VOIP_PASSWD='".$values['L23_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 

  $values['L23_GROUP_MODE'] = $_POST['line23_gsm_group_mode'] ;
  $updatesql_a.=",L23_GROUP_MODE='".$values['L23_GROUP_MODE']."'";
if($values['L23_GROUP_MODE'] == 'SVR'):
  $values['L23_GSM_FW_MODE'] = $_POST['line23_gsm_fw_mode'] ;
  $updatesql_a.=",L23_GSM_FW_MODE='".$values['L23_GSM_FW_MODE']."'";
  $values['L23_PARTNER_SVR'] = $_POST['line23_group_share_addr'] ;
  $updatesql_a.=",L23_PARTNER_SVR='".$values['L23_PARTNER_SVR']."'";
endif; 
if($values['L23_GROUP_MODE'] == 'CLI'):
  $values['L23_GROUP_SVR'] = $_POST['line23_group_svr_addr'] ;
  $updatesql_a.=",L23_GROUP_SVR='".$values['L23_GROUP_SVR']."'";
endif;
  $values['L23_GSM_NUMBER'] = $_POST['line23_gsm_num'] ;
  $updatesql_a.=",L23_GSM_NUMBER='".$values['L23_GSM_NUMBER']."'";
  $values['L23_CALLER_ANONYMOUS'] = $_POST['line23_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql_a.=",L23_CALLER_ANONYMOUS='".$values['L23_CALLER_ANONYMOUS']."'";
 
if($values['TELPORT'] >= 24): 
endif; 
  $values['L24_DISABLE_OUT'] = $_POST['line24_fw_to_pstn']=='on'?'0':'1';
  $updatesql_a.=",L24_DISABLE_OUT='".$values['L24_DISABLE_OUT']."'";
if($values['L24_DISABLE_OUT'] == 0):
  $values['L24_FW_NUM_TO_PSTN'] = $_POST['line24_fw_num_to_pstn'] ;
  $updatesql_a.=",L24_FW_NUM_TO_PSTN='".$values['L24_FW_NUM_TO_PSTN']."'";
  $values['L24_P_DIGIT_MAP'] = $_POST['line24_p_dial_plan'] ;
  $updatesql_a.=",L24_P_DIGIT_MAP='".$values['L24_P_DIGIT_MAP']."'";
  $values['LINE24_P_DPRST'] = $_POST['line24_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql_a.=",LINE24_P_DPRST='".$values['LINE24_P_DPRST']."'";
  $values['L24_FW2PSTN_AUTH_MODE'] = $_POST['line24_fw2pstn_auth_mode'] ;
  $updatesql_a.=",L24_FW2PSTN_AUTH_MODE='".$values['L24_FW2PSTN_AUTH_MODE']."'";
if($values['L24_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L24_FW_TO_PSTN_PASSWD'] = $_POST['line24_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L24_FW_TO_PSTN_PASSWD='".$values['L24_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L24_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L24_FW_TO_PSTN_PASSWD'] = $_POST['l24_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L24_FW_TO_PSTN_PASSWD='".$values['L24_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE24_OUT_INTERVAL'] = $_POST['line24_out_interval'] ;
  $updatesql_a.=",LINE24_OUT_INTERVAL='".$values['LINE24_OUT_INTERVAL']."'";
endif; 
if(!isset($_POST['line24_sms_sender']))
  $values['L24_SMS_SENDER']      = 0;
else
  $values['L24_SMS_SENDER'] = $_POST['line24_sms_sender']=='on'?'1':'0';
  $updatesql_a.=",L24_SMS_SENDER='".$values['L24_SMS_SENDER']."'";
if($values['L24_SMS_SENDER'] == 1):
  $values['L24_SMS_SERVER'] = $_POST['line24_sms_server'] ;
  $updatesql_a.=",L24_SMS_SERVER='".$values['L24_SMS_SERVER']."'";
  $values['L24_SMS_PORT'] = $_POST['line24_sms_port'] ;
  $updatesql_a.=",L24_SMS_PORT='".$values['L24_SMS_PORT']."'";
  $values['L24_SMS_CLI_ID'] = $_POST['line24_sms_cli_id'] ;
  $updatesql_a.=",L24_SMS_CLI_ID='".$values['L24_SMS_CLI_ID']."'";
  $values['L24_SMS_CLI_PASSWD'] = $_POST['line24_sms_cli_passwd'] ;
  $updatesql_a.=",L24_SMS_CLI_PASSWD='".$values['L24_SMS_CLI_PASSWD']."'";
endif; 
 $values['LINE24_SMS_VALIDITY_TIME'] = $_POST['line24_sms_validity_time'] ;
  $updatesql_a.=",LINE24_SMS_VALIDITY_TIME='".$values['LINE24_SMS_VALIDITY_TIME']."'";
  $values['L24_DISABLE_SMS_ACK'] = $_POST['line24_sms_ack_enable']=='on'?'0':'1';
  $updatesql_a.=",L24_DISABLE_SMS_ACK='".$values['L24_DISABLE_SMS_ACK']."'";


  $values['L24_DISABLE_IN'] = $_POST['line24_fw_to_voip']=='on'?'0':'1';
  $updatesql_a.=",L24_DISABLE_IN='".$values['L24_DISABLE_IN']."'";
if($values['L24_DISABLE_IN'] == 0):
  $values['L24_FW_NUM_TO_VOIP'] = $_POST['line24_fw_num_to_voip'] ;
  $updatesql_a.=",L24_FW_NUM_TO_VOIP='".$values['L24_FW_NUM_TO_VOIP']."'";
  $values['L24_V_DIGIT_MAP'] = $_POST['line24_v_dial_plan'] ;
  $updatesql_a.=",L24_V_DIGIT_MAP='".$values['L24_V_DIGIT_MAP']."'";
  $values['L24_FW2VOIP_AUTH_MODE'] = $_POST['line24_fw2voip_auth_mode'] ;
  $updatesql_a.=",L24_FW2VOIP_AUTH_MODE='".$values['L24_FW2VOIP_AUTH_MODE']."'";
if($values['L24_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L24_FW_TO_VOIP_PASSWD'] = $_POST['line24_fw_to_voip_passwd'] ;
  $updatesql_a.=",L24_FW_TO_VOIP_PASSWD='".$values['L24_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L24_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L24_FW_TO_VOIP_PASSWD'] = $_POST['l24_fw_to_voip_passwd'] ;
  $updatesql_a.=",L24_FW_TO_VOIP_PASSWD='".$values['L24_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 

  $values['L24_GROUP_MODE'] = $_POST['line24_gsm_group_mode'] ;
  $updatesql_a.=",L24_GROUP_MODE='".$values['L24_GROUP_MODE']."'";
if($values['L24_GROUP_MODE'] == 'SVR'):
  $values['L24_GSM_FW_MODE'] = $_POST['line24_gsm_fw_mode'] ;
  $updatesql_a.=",L24_GSM_FW_MODE='".$values['L24_GSM_FW_MODE']."'";
  $values['L24_PARTNER_SVR'] = $_POST['line24_group_share_addr'] ;
  $updatesql_a.=",L24_PARTNER_SVR='".$values['L24_PARTNER_SVR']."'";
endif; 
if($values['L24_GROUP_MODE'] == 'CLI'):
  $values['L24_GROUP_SVR'] = $_POST['line24_group_svr_addr'] ;
  $updatesql_a.=",L24_GROUP_SVR='".$values['L24_GROUP_SVR']."'";
endif;
  $values['L24_GSM_NUMBER'] = $_POST['line24_gsm_num'] ;
  $updatesql_a.=",L24_GSM_NUMBER='".$values['L24_GSM_NUMBER']."'";
  $values['L24_CALLER_ANONYMOUS'] = $_POST['line24_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql_a.=",L24_CALLER_ANONYMOUS='".$values['L24_CALLER_ANONYMOUS']."'";
 
if($values['TELPORT'] >= 25): 
endif; 
  $values['L25_DISABLE_OUT'] = $_POST['line25_fw_to_pstn']=='on'?'0':'1';
  $updatesql_a.=",L25_DISABLE_OUT='".$values['L25_DISABLE_OUT']."'";
if($values['L25_DISABLE_OUT'] == 0):
  $values['L25_FW_NUM_TO_PSTN'] = $_POST['line25_fw_num_to_pstn'] ;
  $updatesql_a.=",L25_FW_NUM_TO_PSTN='".$values['L25_FW_NUM_TO_PSTN']."'";
  $values['L25_P_DIGIT_MAP'] = $_POST['line25_p_dial_plan'] ;
  $updatesql_a.=",L25_P_DIGIT_MAP='".$values['L25_P_DIGIT_MAP']."'";
  $values['LINE25_P_DPRST'] = $_POST['line25_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql_a.=",LINE25_P_DPRST='".$values['LINE25_P_DPRST']."'";
  $values['L25_FW2PSTN_AUTH_MODE'] = $_POST['line25_fw2pstn_auth_mode'] ;
  $updatesql_a.=",L25_FW2PSTN_AUTH_MODE='".$values['L25_FW2PSTN_AUTH_MODE']."'";
if($values['L25_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L25_FW_TO_PSTN_PASSWD'] = $_POST['line25_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L25_FW_TO_PSTN_PASSWD='".$values['L25_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L25_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L25_FW_TO_PSTN_PASSWD'] = $_POST['l25_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L25_FW_TO_PSTN_PASSWD='".$values['L25_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE25_OUT_INTERVAL'] = $_POST['line25_out_interval'] ;
  $updatesql_a.=",LINE25_OUT_INTERVAL='".$values['LINE25_OUT_INTERVAL']."'";
endif; 
if(!isset($_POST['line25_sms_sender']))
  $values['L25_SMS_SENDER']      = 0;
else
  $values['L25_SMS_SENDER'] = $_POST['line25_sms_sender']=='on'?'1':'0';
  $updatesql_a.=",L25_SMS_SENDER='".$values['L25_SMS_SENDER']."'";
if($values['L25_SMS_SENDER'] == 1):
  $values['L25_SMS_SERVER'] = $_POST['line25_sms_server'] ;
  $updatesql_a.=",L25_SMS_SERVER='".$values['L25_SMS_SERVER']."'";
  $values['L25_SMS_PORT'] = $_POST['line25_sms_port'] ;
  $updatesql_a.=",L25_SMS_PORT='".$values['L25_SMS_PORT']."'";
  $values['L25_SMS_CLI_ID'] = $_POST['line25_sms_cli_id'] ;
  $updatesql_a.=",L25_SMS_CLI_ID='".$values['L25_SMS_CLI_ID']."'";
  $values['L25_SMS_CLI_PASSWD'] = $_POST['line25_sms_cli_passwd'] ;
  $updatesql_a.=",L25_SMS_CLI_PASSWD='".$values['L25_SMS_CLI_PASSWD']."'";
endif; 
 $values['LINE25_SMS_VALIDITY_TIME'] = $_POST['line25_sms_validity_time'] ;
  $updatesql_a.=",LINE25_SMS_VALIDITY_TIME='".$values['LINE25_SMS_VALIDITY_TIME']."'";
  $values['L25_DISABLE_SMS_ACK'] = $_POST['line25_sms_ack_enable']=='on'?'0':'1';
  $updatesql_a.=",L25_DISABLE_SMS_ACK='".$values['L25_DISABLE_SMS_ACK']."'";


  $values['L25_DISABLE_IN'] = $_POST['line25_fw_to_voip']=='on'?'0':'1';
  $updatesql_a.=",L25_DISABLE_IN='".$values['L25_DISABLE_IN']."'";
if($values['L25_DISABLE_IN'] == 0):
  $values['L25_FW_NUM_TO_VOIP'] = $_POST['line25_fw_num_to_voip'] ;
  $updatesql_a.=",L25_FW_NUM_TO_VOIP='".$values['L25_FW_NUM_TO_VOIP']."'";
  $values['L25_V_DIGIT_MAP'] = $_POST['line25_v_dial_plan'] ;
  $updatesql_a.=",L25_V_DIGIT_MAP='".$values['L25_V_DIGIT_MAP']."'";
  $values['L25_FW2VOIP_AUTH_MODE'] = $_POST['line25_fw2voip_auth_mode'] ;
  $updatesql_a.=",L25_FW2VOIP_AUTH_MODE='".$values['L25_FW2VOIP_AUTH_MODE']."'";
if($values['L25_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L25_FW_TO_VOIP_PASSWD'] = $_POST['line25_fw_to_voip_passwd'] ;
  $updatesql_a.=",L25_FW_TO_VOIP_PASSWD='".$values['L25_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L25_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L25_FW_TO_VOIP_PASSWD'] = $_POST['l25_fw_to_voip_passwd'] ;
  $updatesql_a.=",L25_FW_TO_VOIP_PASSWD='".$values['L25_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 

  $values['L25_GROUP_MODE'] = $_POST['line25_gsm_group_mode'] ;
  $updatesql_a.=",L25_GROUP_MODE='".$values['L25_GROUP_MODE']."'";
if($values['L25_GROUP_MODE'] == 'SVR'):
  $values['L25_GSM_FW_MODE'] = $_POST['line25_gsm_fw_mode'] ;
  $updatesql_a.=",L25_GSM_FW_MODE='".$values['L25_GSM_FW_MODE']."'";
  $values['L25_PARTNER_SVR'] = $_POST['line25_group_share_addr'] ;
  $updatesql_a.=",L25_PARTNER_SVR='".$values['L25_PARTNER_SVR']."'";
endif; 
if($values['L25_GROUP_MODE'] == 'CLI'):
  $values['L25_GROUP_SVR'] = $_POST['line25_group_svr_addr'] ;
  $updatesql_a.=",L25_GROUP_SVR='".$values['L25_GROUP_SVR']."'";
endif;
  $values['L25_GSM_NUMBER'] = $_POST['line25_gsm_num'] ;
  $updatesql_a.=",L25_GSM_NUMBER='".$values['L25_GSM_NUMBER']."'";
  $values['L25_CALLER_ANONYMOUS'] = $_POST['line25_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql_a.=",L25_CALLER_ANONYMOUS='".$values['L25_CALLER_ANONYMOUS']."'";
 
if($values['TELPORT'] >= 26): 
endif; 
  $values['L26_DISABLE_OUT'] = $_POST['line26_fw_to_pstn']=='on'?'0':'1';
  $updatesql_a.=",L26_DISABLE_OUT='".$values['L26_DISABLE_OUT']."'";
if($values['L26_DISABLE_OUT'] == 0):
  $values['L26_FW_NUM_TO_PSTN'] = $_POST['line26_fw_num_to_pstn'] ;
  $updatesql_a.=",L26_FW_NUM_TO_PSTN='".$values['L26_FW_NUM_TO_PSTN']."'";
  $values['L26_P_DIGIT_MAP'] = $_POST['line26_p_dial_plan'] ;
  $updatesql_a.=",L26_P_DIGIT_MAP='".$values['L26_P_DIGIT_MAP']."'";
  $values['LINE26_P_DPRST'] = $_POST['line26_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql_a.=",LINE26_P_DPRST='".$values['LINE26_P_DPRST']."'";
  $values['L26_FW2PSTN_AUTH_MODE'] = $_POST['line26_fw2pstn_auth_mode'] ;
  $updatesql_a.=",L26_FW2PSTN_AUTH_MODE='".$values['L26_FW2PSTN_AUTH_MODE']."'";
if($values['L26_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L26_FW_TO_PSTN_PASSWD'] = $_POST['line26_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L26_FW_TO_PSTN_PASSWD='".$values['L26_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L26_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L26_FW_TO_PSTN_PASSWD'] = $_POST['l26_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L26_FW_TO_PSTN_PASSWD='".$values['L26_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE26_OUT_INTERVAL'] = $_POST['line26_out_interval'] ;
  $updatesql_a.=",LINE26_OUT_INTERVAL='".$values['LINE26_OUT_INTERVAL']."'";
endif; 
if(!isset($_POST['line26_sms_sender']))
  $values['L26_SMS_SENDER']      = 0;
else
  $values['L26_SMS_SENDER'] = $_POST['line26_sms_sender']=='on'?'1':'0';
  $updatesql_a.=",L26_SMS_SENDER='".$values['L26_SMS_SENDER']."'";
if($values['L26_SMS_SENDER'] == 1):
  $values['L26_SMS_SERVER'] = $_POST['line26_sms_server'] ;
  $updatesql_a.=",L26_SMS_SERVER='".$values['L26_SMS_SERVER']."'";
  $values['L26_SMS_PORT'] = $_POST['line26_sms_port'] ;
  $updatesql_a.=",L26_SMS_PORT='".$values['L26_SMS_PORT']."'";
  $values['L26_SMS_CLI_ID'] = $_POST['line26_sms_cli_id'] ;
  $updatesql_a.=",L26_SMS_CLI_ID='".$values['L26_SMS_CLI_ID']."'";
  $values['L26_SMS_CLI_PASSWD'] = $_POST['line26_sms_cli_passwd'] ;
  $updatesql_a.=",L26_SMS_CLI_PASSWD='".$values['L26_SMS_CLI_PASSWD']."'";
endif; 
 $values['LINE26_SMS_VALIDITY_TIME'] = $_POST['line26_sms_validity_time'] ;
  $updatesql_a.=",LINE26_SMS_VALIDITY_TIME='".$values['LINE26_SMS_VALIDITY_TIME']."'";
  $values['L26_DISABLE_SMS_ACK'] = $_POST['line26_sms_ack_enable']=='on'?'0':'1';
  $updatesql_a.=",L26_DISABLE_SMS_ACK='".$values['L26_DISABLE_SMS_ACK']."'";


  $values['L26_DISABLE_IN'] = $_POST['line26_fw_to_voip']=='on'?'0':'1';
  $updatesql_a.=",L26_DISABLE_IN='".$values['L26_DISABLE_IN']."'";
if($values['L26_DISABLE_IN'] == 0):
  $values['L26_FW_NUM_TO_VOIP'] = $_POST['line26_fw_num_to_voip'] ;
  $updatesql_a.=",L26_FW_NUM_TO_VOIP='".$values['L26_FW_NUM_TO_VOIP']."'";
  $values['L26_V_DIGIT_MAP'] = $_POST['line26_v_dial_plan'] ;
  $updatesql_a.=",L26_V_DIGIT_MAP='".$values['L26_V_DIGIT_MAP']."'";
  $values['L26_FW2VOIP_AUTH_MODE'] = $_POST['line26_fw2voip_auth_mode'] ;
  $updatesql_a.=",L26_FW2VOIP_AUTH_MODE='".$values['L26_FW2VOIP_AUTH_MODE']."'";
if($values['L26_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L26_FW_TO_VOIP_PASSWD'] = $_POST['line26_fw_to_voip_passwd'] ;
  $updatesql_a.=",L26_FW_TO_VOIP_PASSWD='".$values['L26_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L26_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L26_FW_TO_VOIP_PASSWD'] = $_POST['l26_fw_to_voip_passwd'] ;
  $updatesql_a.=",L26_FW_TO_VOIP_PASSWD='".$values['L26_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 

  $values['L26_GROUP_MODE'] = $_POST['line26_gsm_group_mode'] ;
  $updatesql_a.=",L26_GROUP_MODE='".$values['L26_GROUP_MODE']."'";
if($values['L26_GROUP_MODE'] == 'SVR'):
  $values['L26_GSM_FW_MODE'] = $_POST['line26_gsm_fw_mode'] ;
  $updatesql_a.=",L26_GSM_FW_MODE='".$values['L26_GSM_FW_MODE']."'";
  $values['L26_PARTNER_SVR'] = $_POST['line26_group_share_addr'] ;
  $updatesql_a.=",L26_PARTNER_SVR='".$values['L26_PARTNER_SVR']."'";
endif; 
if($values['L26_GROUP_MODE'] == 'CLI'):
  $values['L26_GROUP_SVR'] = $_POST['line26_group_svr_addr'] ;
  $updatesql_a.=",L26_GROUP_SVR='".$values['L26_GROUP_SVR']."'";
endif;
  $values['L26_GSM_NUMBER'] = $_POST['line26_gsm_num'] ;
  $updatesql_a.=",L26_GSM_NUMBER='".$values['L26_GSM_NUMBER']."'";
  $values['L26_CALLER_ANONYMOUS'] = $_POST['line26_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql_a.=",L26_CALLER_ANONYMOUS='".$values['L26_CALLER_ANONYMOUS']."'";
 
if($values['TELPORT'] >= 27): 
endif; 
  $values['L27_DISABLE_OUT'] = $_POST['line27_fw_to_pstn']=='on'?'0':'1';
  $updatesql_a.=",L27_DISABLE_OUT='".$values['L27_DISABLE_OUT']."'";
if($values['L27_DISABLE_OUT'] == 0):
  $values['L27_FW_NUM_TO_PSTN'] = $_POST['line27_fw_num_to_pstn'] ;
  $updatesql_a.=",L27_FW_NUM_TO_PSTN='".$values['L27_FW_NUM_TO_PSTN']."'";
  $values['L27_P_DIGIT_MAP'] = $_POST['line27_p_dial_plan'] ;
  $updatesql_a.=",L27_P_DIGIT_MAP='".$values['L27_P_DIGIT_MAP']."'";
  $values['LINE27_P_DPRST'] = $_POST['line27_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql_a.=",LINE27_P_DPRST='".$values['LINE27_P_DPRST']."'";
  $values['L27_FW2PSTN_AUTH_MODE'] = $_POST['line27_fw2pstn_auth_mode'] ;
  $updatesql_a.=",L27_FW2PSTN_AUTH_MODE='".$values['L27_FW2PSTN_AUTH_MODE']."'";
if($values['L27_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L27_FW_TO_PSTN_PASSWD'] = $_POST['line27_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L27_FW_TO_PSTN_PASSWD='".$values['L27_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L27_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L27_FW_TO_PSTN_PASSWD'] = $_POST['l27_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L27_FW_TO_PSTN_PASSWD='".$values['L27_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE27_OUT_INTERVAL'] = $_POST['line27_out_interval'] ;
  $updatesql_a.=",LINE27_OUT_INTERVAL='".$values['LINE27_OUT_INTERVAL']."'";
endif; 
if(!isset($_POST['line27_sms_sender']))
  $values['L27_SMS_SENDER']      = 0;
else
  $values['L27_SMS_SENDER'] = $_POST['line27_sms_sender']=='on'?'1':'0';
  $updatesql_a.=",L27_SMS_SENDER='".$values['L27_SMS_SENDER']."'";
if($values['L27_SMS_SENDER'] == 1):
  $values['L27_SMS_SERVER'] = $_POST['line27_sms_server'] ;
  $updatesql_a.=",L27_SMS_SERVER='".$values['L27_SMS_SERVER']."'";
  $values['L27_SMS_PORT'] = $_POST['line27_sms_port'] ;
  $updatesql_a.=",L27_SMS_PORT='".$values['L27_SMS_PORT']."'";
  $values['L27_SMS_CLI_ID'] = $_POST['line27_sms_cli_id'] ;
  $updatesql_a.=",L27_SMS_CLI_ID='".$values['L27_SMS_CLI_ID']."'";
  $values['L27_SMS_CLI_PASSWD'] = $_POST['line27_sms_cli_passwd'] ;
  $updatesql_a.=",L27_SMS_CLI_PASSWD='".$values['L27_SMS_CLI_PASSWD']."'";
endif; 
 $values['LINE27_SMS_VALIDITY_TIME'] = $_POST['line27_sms_validity_time'] ;
  $updatesql_a.=",LINE27_SMS_VALIDITY_TIME='".$values['LINE27_SMS_VALIDITY_TIME']."'";
  $values['L27_DISABLE_SMS_ACK'] = $_POST['line27_sms_ack_enable']=='on'?'0':'1';
  $updatesql_a.=",L27_DISABLE_SMS_ACK='".$values['L27_DISABLE_SMS_ACK']."'";


  $values['L27_DISABLE_IN'] = $_POST['line27_fw_to_voip']=='on'?'0':'1';
  $updatesql_a.=",L27_DISABLE_IN='".$values['L27_DISABLE_IN']."'";
if($values['L27_DISABLE_IN'] == 0):
  $values['L27_FW_NUM_TO_VOIP'] = $_POST['line27_fw_num_to_voip'] ;
  $updatesql_a.=",L27_FW_NUM_TO_VOIP='".$values['L27_FW_NUM_TO_VOIP']."'";
  $values['L27_V_DIGIT_MAP'] = $_POST['line27_v_dial_plan'] ;
  $updatesql_a.=",L27_V_DIGIT_MAP='".$values['L27_V_DIGIT_MAP']."'";
  $values['L27_FW2VOIP_AUTH_MODE'] = $_POST['line27_fw2voip_auth_mode'] ;
  $updatesql_a.=",L27_FW2VOIP_AUTH_MODE='".$values['L27_FW2VOIP_AUTH_MODE']."'";
if($values['L27_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L27_FW_TO_VOIP_PASSWD'] = $_POST['line27_fw_to_voip_passwd'] ;
  $updatesql_a.=",L27_FW_TO_VOIP_PASSWD='".$values['L27_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L27_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L27_FW_TO_VOIP_PASSWD'] = $_POST['l27_fw_to_voip_passwd'] ;
  $updatesql_a.=",L27_FW_TO_VOIP_PASSWD='".$values['L27_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 

  $values['L27_GROUP_MODE'] = $_POST['line27_gsm_group_mode'] ;
  $updatesql_a.=",L27_GROUP_MODE='".$values['L27_GROUP_MODE']."'";
if($values['L27_GROUP_MODE'] == 'SVR'):
  $values['L27_GSM_FW_MODE'] = $_POST['line27_gsm_fw_mode'] ;
  $updatesql_a.=",L27_GSM_FW_MODE='".$values['L27_GSM_FW_MODE']."'";
  $values['L27_PARTNER_SVR'] = $_POST['line27_group_share_addr'] ;
  $updatesql_a.=",L27_PARTNER_SVR='".$values['L27_PARTNER_SVR']."'";
endif; 
if($values['L27_GROUP_MODE'] == 'CLI'):
  $values['L27_GROUP_SVR'] = $_POST['line27_group_svr_addr'] ;
  $updatesql_a.=",L27_GROUP_SVR='".$values['L27_GROUP_SVR']."'";
endif;
  $values['L27_GSM_NUMBER'] = $_POST['line27_gsm_num'] ;
  $updatesql_a.=",L27_GSM_NUMBER='".$values['L27_GSM_NUMBER']."'";
  $values['L27_CALLER_ANONYMOUS'] = $_POST['line27_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql_a.=",L27_CALLER_ANONYMOUS='".$values['L27_CALLER_ANONYMOUS']."'";
 
if($values['TELPORT'] >= 28): 
endif; 
  $values['L28_DISABLE_OUT'] = $_POST['line28_fw_to_pstn']=='on'?'0':'1';
  $updatesql_a.=",L28_DISABLE_OUT='".$values['L28_DISABLE_OUT']."'";
if($values['L28_DISABLE_OUT'] == 0):
  $values['L28_FW_NUM_TO_PSTN'] = $_POST['line28_fw_num_to_pstn'] ;
  $updatesql_a.=",L28_FW_NUM_TO_PSTN='".$values['L28_FW_NUM_TO_PSTN']."'";
  $values['L28_P_DIGIT_MAP'] = $_POST['line28_p_dial_plan'] ;
  $updatesql_a.=",L28_P_DIGIT_MAP='".$values['L28_P_DIGIT_MAP']."'";
  $values['LINE28_P_DPRST'] = $_POST['line28_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql_a.=",LINE28_P_DPRST='".$values['LINE28_P_DPRST']."'";
  $values['L28_FW2PSTN_AUTH_MODE'] = $_POST['line28_fw2pstn_auth_mode'] ;
  $updatesql_a.=",L28_FW2PSTN_AUTH_MODE='".$values['L28_FW2PSTN_AUTH_MODE']."'";
if($values['L28_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L28_FW_TO_PSTN_PASSWD'] = $_POST['line28_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L28_FW_TO_PSTN_PASSWD='".$values['L28_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L28_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L28_FW_TO_PSTN_PASSWD'] = $_POST['l28_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L28_FW_TO_PSTN_PASSWD='".$values['L28_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE28_OUT_INTERVAL'] = $_POST['line28_out_interval'] ;
  $updatesql_a.=",LINE28_OUT_INTERVAL='".$values['LINE28_OUT_INTERVAL']."'";
endif; 
if(!isset($_POST['line28_sms_sender']))
  $values['L28_SMS_SENDER']      = 0;
else
  $values['L28_SMS_SENDER'] = $_POST['line28_sms_sender']=='on'?'1':'0';
  $updatesql_a.=",L28_SMS_SENDER='".$values['L28_SMS_SENDER']."'";
if($values['L28_SMS_SENDER'] == 1):
  $values['L28_SMS_SERVER'] = $_POST['line28_sms_server'] ;
  $updatesql_a.=",L28_SMS_SERVER='".$values['L28_SMS_SERVER']."'";
  $values['L28_SMS_PORT'] = $_POST['line28_sms_port'] ;
  $updatesql_a.=",L28_SMS_PORT='".$values['L28_SMS_PORT']."'";
  $values['L28_SMS_CLI_ID'] = $_POST['line28_sms_cli_id'] ;
  $updatesql_a.=",L28_SMS_CLI_ID='".$values['L28_SMS_CLI_ID']."'";
  $values['L28_SMS_CLI_PASSWD'] = $_POST['line28_sms_cli_passwd'] ;
  $updatesql_a.=",L28_SMS_CLI_PASSWD='".$values['L28_SMS_CLI_PASSWD']."'";
endif; 
 $values['LINE28_SMS_VALIDITY_TIME'] = $_POST['line28_sms_validity_time'] ;
  $updatesql_a.=",LINE28_SMS_VALIDITY_TIME='".$values['LINE28_SMS_VALIDITY_TIME']."'";
  $values['L28_DISABLE_SMS_ACK'] = $_POST['line28_sms_ack_enable']=='on'?'0':'1';
  $updatesql_a.=",L28_DISABLE_SMS_ACK='".$values['L28_DISABLE_SMS_ACK']."'";


  $values['L28_DISABLE_IN'] = $_POST['line28_fw_to_voip']=='on'?'0':'1';
  $updatesql_a.=",L28_DISABLE_IN='".$values['L28_DISABLE_IN']."'";
if($values['L28_DISABLE_IN'] == 0):
  $values['L28_FW_NUM_TO_VOIP'] = $_POST['line28_fw_num_to_voip'] ;
  $updatesql_a.=",L28_FW_NUM_TO_VOIP='".$values['L28_FW_NUM_TO_VOIP']."'";
  $values['L28_V_DIGIT_MAP'] = $_POST['line28_v_dial_plan'] ;
  $updatesql_a.=",L28_V_DIGIT_MAP='".$values['L28_V_DIGIT_MAP']."'";
  $values['L28_FW2VOIP_AUTH_MODE'] = $_POST['line28_fw2voip_auth_mode'] ;
  $updatesql_a.=",L28_FW2VOIP_AUTH_MODE='".$values['L28_FW2VOIP_AUTH_MODE']."'";
if($values['L28_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L28_FW_TO_VOIP_PASSWD'] = $_POST['line28_fw_to_voip_passwd'] ;
  $updatesql_a.=",L28_FW_TO_VOIP_PASSWD='".$values['L28_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L28_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L28_FW_TO_VOIP_PASSWD'] = $_POST['l28_fw_to_voip_passwd'] ;
  $updatesql_a.=",L28_FW_TO_VOIP_PASSWD='".$values['L28_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 

  $values['L28_GROUP_MODE'] = $_POST['line28_gsm_group_mode'] ;
  $updatesql_a.=",L28_GROUP_MODE='".$values['L28_GROUP_MODE']."'";
if($values['L28_GROUP_MODE'] == 'SVR'):
  $values['L28_GSM_FW_MODE'] = $_POST['line28_gsm_fw_mode'] ;
  $updatesql_a.=",L28_GSM_FW_MODE='".$values['L28_GSM_FW_MODE']."'";
  $values['L28_PARTNER_SVR'] = $_POST['line28_group_share_addr'] ;
  $updatesql_a.=",L28_PARTNER_SVR='".$values['L28_PARTNER_SVR']."'";
endif; 
if($values['L28_GROUP_MODE'] == 'CLI'):
  $values['L28_GROUP_SVR'] = $_POST['line28_group_svr_addr'] ;
  $updatesql_a.=",L28_GROUP_SVR='".$values['L28_GROUP_SVR']."'";
endif;
  $values['L28_GSM_NUMBER'] = $_POST['line28_gsm_num'] ;
  $updatesql_a.=",L28_GSM_NUMBER='".$values['L28_GSM_NUMBER']."'";
  $values['L28_CALLER_ANONYMOUS'] = $_POST['line28_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql_a.=",L28_CALLER_ANONYMOUS='".$values['L28_CALLER_ANONYMOUS']."'";
 
if($values['TELPORT'] >= 29): 
endif; 
  $values['L29_DISABLE_OUT'] = $_POST['line29_fw_to_pstn']=='on'?'0':'1';
  $updatesql_a.=",L29_DISABLE_OUT='".$values['L29_DISABLE_OUT']."'";
if($values['L29_DISABLE_OUT'] == 0):
  $values['L29_FW_NUM_TO_PSTN'] = $_POST['line29_fw_num_to_pstn'] ;
  $updatesql_a.=",L29_FW_NUM_TO_PSTN='".$values['L29_FW_NUM_TO_PSTN']."'";
  $values['L29_P_DIGIT_MAP'] = $_POST['line29_p_dial_plan'] ;
  $updatesql_a.=",L29_P_DIGIT_MAP='".$values['L29_P_DIGIT_MAP']."'";
  $values['LINE29_P_DPRST'] = $_POST['line29_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql_a.=",LINE29_P_DPRST='".$values['LINE29_P_DPRST']."'";
  $values['L29_FW2PSTN_AUTH_MODE'] = $_POST['line29_fw2pstn_auth_mode'] ;
  $updatesql_a.=",L29_FW2PSTN_AUTH_MODE='".$values['L29_FW2PSTN_AUTH_MODE']."'";
if($values['L29_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L29_FW_TO_PSTN_PASSWD'] = $_POST['line29_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L29_FW_TO_PSTN_PASSWD='".$values['L29_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L29_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L29_FW_TO_PSTN_PASSWD'] = $_POST['l29_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L29_FW_TO_PSTN_PASSWD='".$values['L29_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE29_OUT_INTERVAL'] = $_POST['line29_out_interval'] ;
  $updatesql_a.=",LINE29_OUT_INTERVAL='".$values['LINE29_OUT_INTERVAL']."'";
endif; 
if(!isset($_POST['line29_sms_sender']))
  $values['L29_SMS_SENDER']      = 0;
else
  $values['L29_SMS_SENDER'] = $_POST['line29_sms_sender']=='on'?'1':'0';
  $updatesql_a.=",L29_SMS_SENDER='".$values['L29_SMS_SENDER']."'";
if($values['L29_SMS_SENDER'] == 1):
  $values['L29_SMS_SERVER'] = $_POST['line29_sms_server'] ;
  $updatesql_a.=",L29_SMS_SERVER='".$values['L29_SMS_SERVER']."'";
  $values['L29_SMS_PORT'] = $_POST['line29_sms_port'] ;
  $updatesql_a.=",L29_SMS_PORT='".$values['L29_SMS_PORT']."'";
  $values['L29_SMS_CLI_ID'] = $_POST['line29_sms_cli_id'] ;
  $updatesql_a.=",L29_SMS_CLI_ID='".$values['L29_SMS_CLI_ID']."'";
  $values['L29_SMS_CLI_PASSWD'] = $_POST['line29_sms_cli_passwd'] ;
  $updatesql_a.=",L29_SMS_CLI_PASSWD='".$values['L29_SMS_CLI_PASSWD']."'";
endif; 
 $values['LINE29_SMS_VALIDITY_TIME'] = $_POST['line29_sms_validity_time'] ;
  $updatesql_a.=",LINE29_SMS_VALIDITY_TIME='".$values['LINE29_SMS_VALIDITY_TIME']."'";
  $values['L29_DISABLE_SMS_ACK'] = $_POST['line29_sms_ack_enable']=='on'?'0':'1';
  $updatesql_a.=",L29_DISABLE_SMS_ACK='".$values['L29_DISABLE_SMS_ACK']."'";


  $values['L29_DISABLE_IN'] = $_POST['line29_fw_to_voip']=='on'?'0':'1';
  $updatesql_a.=",L29_DISABLE_IN='".$values['L29_DISABLE_IN']."'";
if($values['L29_DISABLE_IN'] == 0):
  $values['L29_FW_NUM_TO_VOIP'] = $_POST['line29_fw_num_to_voip'] ;
  $updatesql_a.=",L29_FW_NUM_TO_VOIP='".$values['L29_FW_NUM_TO_VOIP']."'";
  $values['L29_V_DIGIT_MAP'] = $_POST['line29_v_dial_plan'] ;
  $updatesql_a.=",L29_V_DIGIT_MAP='".$values['L29_V_DIGIT_MAP']."'";
  $values['L29_FW2VOIP_AUTH_MODE'] = $_POST['line29_fw2voip_auth_mode'] ;
  $updatesql_a.=",L29_FW2VOIP_AUTH_MODE='".$values['L29_FW2VOIP_AUTH_MODE']."'";
if($values['L29_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L29_FW_TO_VOIP_PASSWD'] = $_POST['line29_fw_to_voip_passwd'] ;
  $updatesql_a.=",L29_FW_TO_VOIP_PASSWD='".$values['L29_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L29_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L29_FW_TO_VOIP_PASSWD'] = $_POST['l29_fw_to_voip_passwd'] ;
  $updatesql_a.=",L29_FW_TO_VOIP_PASSWD='".$values['L29_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 

  $values['L29_GROUP_MODE'] = $_POST['line29_gsm_group_mode'] ;
  $updatesql_a.=",L29_GROUP_MODE='".$values['L29_GROUP_MODE']."'";
if($values['L29_GROUP_MODE'] == 'SVR'):
  $values['L29_GSM_FW_MODE'] = $_POST['line29_gsm_fw_mode'] ;
  $updatesql_a.=",L29_GSM_FW_MODE='".$values['L29_GSM_FW_MODE']."'";
  $values['L29_PARTNER_SVR'] = $_POST['line29_group_share_addr'] ;
  $updatesql_a.=",L29_PARTNER_SVR='".$values['L29_PARTNER_SVR']."'";
endif; 
if($values['L29_GROUP_MODE'] == 'CLI'):
  $values['L29_GROUP_SVR'] = $_POST['line29_group_svr_addr'] ;
  $updatesql_a.=",L29_GROUP_SVR='".$values['L29_GROUP_SVR']."'";
endif;
  $values['L29_GSM_NUMBER'] = $_POST['line29_gsm_num'] ;
  $updatesql_a.=",L29_GSM_NUMBER='".$values['L29_GSM_NUMBER']."'";
  $values['L29_CALLER_ANONYMOUS'] = $_POST['line29_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql_a.=",L29_CALLER_ANONYMOUS='".$values['L29_CALLER_ANONYMOUS']."'";
 
if($values['TELPORT'] >= 30): 
endif; 
  $values['L30_DISABLE_OUT'] = $_POST['line30_fw_to_pstn']=='on'?'0':'1';
  $updatesql_a.=",L30_DISABLE_OUT='".$values['L30_DISABLE_OUT']."'";
if($values['L30_DISABLE_OUT'] == 0):
  $values['L30_FW_NUM_TO_PSTN'] = $_POST['line30_fw_num_to_pstn'] ;
  $updatesql_a.=",L30_FW_NUM_TO_PSTN='".$values['L30_FW_NUM_TO_PSTN']."'";
  $values['L30_P_DIGIT_MAP'] = $_POST['line30_p_dial_plan'] ;
  $updatesql_a.=",L30_P_DIGIT_MAP='".$values['L30_P_DIGIT_MAP']."'";
  $values['LINE30_P_DPRST'] = $_POST['line30_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql_a.=",LINE30_P_DPRST='".$values['LINE30_P_DPRST']."'";
  $values['L30_FW2PSTN_AUTH_MODE'] = $_POST['line30_fw2pstn_auth_mode'] ;
  $updatesql_a.=",L30_FW2PSTN_AUTH_MODE='".$values['L30_FW2PSTN_AUTH_MODE']."'";
if($values['L30_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L30_FW_TO_PSTN_PASSWD'] = $_POST['line30_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L30_FW_TO_PSTN_PASSWD='".$values['L30_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L30_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L30_FW_TO_PSTN_PASSWD'] = $_POST['l30_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L30_FW_TO_PSTN_PASSWD='".$values['L30_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE30_OUT_INTERVAL'] = $_POST['line30_out_interval'] ;
  $updatesql_a.=",LINE30_OUT_INTERVAL='".$values['LINE30_OUT_INTERVAL']."'";
endif; 
if(!isset($_POST['line30_sms_sender']))
  $values['L30_SMS_SENDER']      = 0;
else
  $values['L30_SMS_SENDER'] = $_POST['line30_sms_sender']=='on'?'1':'0';
  $updatesql_a.=",L30_SMS_SENDER='".$values['L30_SMS_SENDER']."'";
if($values['L30_SMS_SENDER'] == 1):
  $values['L30_SMS_SERVER'] = $_POST['line30_sms_server'] ;
  $updatesql_a.=",L30_SMS_SERVER='".$values['L30_SMS_SERVER']."'";
  $values['L30_SMS_PORT'] = $_POST['line30_sms_port'] ;
  $updatesql_a.=",L30_SMS_PORT='".$values['L30_SMS_PORT']."'";
  $values['L30_SMS_CLI_ID'] = $_POST['line30_sms_cli_id'] ;
  $updatesql_a.=",L30_SMS_CLI_ID='".$values['L30_SMS_CLI_ID']."'";
  $values['L30_SMS_CLI_PASSWD'] = $_POST['line30_sms_cli_passwd'] ;
  $updatesql_a.=",L30_SMS_CLI_PASSWD='".$values['L30_SMS_CLI_PASSWD']."'";
endif; 
 $values['LINE30_SMS_VALIDITY_TIME'] = $_POST['line30_sms_validity_time'] ;
  $updatesql_a.=",LINE30_SMS_VALIDITY_TIME='".$values['LINE30_SMS_VALIDITY_TIME']."'";
  $values['L30_DISABLE_SMS_ACK'] = $_POST['line30_sms_ack_enable']=='on'?'0':'1';
  $updatesql_a.=",L30_DISABLE_SMS_ACK='".$values['L30_DISABLE_SMS_ACK']."'";


  $values['L30_DISABLE_IN'] = $_POST['line30_fw_to_voip']=='on'?'0':'1';
  $updatesql_a.=",L30_DISABLE_IN='".$values['L30_DISABLE_IN']."'";
if($values['L30_DISABLE_IN'] == 0):
  $values['L30_FW_NUM_TO_VOIP'] = $_POST['line30_fw_num_to_voip'] ;
  $updatesql_a.=",L30_FW_NUM_TO_VOIP='".$values['L30_FW_NUM_TO_VOIP']."'";
  $values['L30_V_DIGIT_MAP'] = $_POST['line30_v_dial_plan'] ;
  $updatesql_a.=",L30_V_DIGIT_MAP='".$values['L30_V_DIGIT_MAP']."'";
  $values['L30_FW2VOIP_AUTH_MODE'] = $_POST['line30_fw2voip_auth_mode'] ;
  $updatesql_a.=",L30_FW2VOIP_AUTH_MODE='".$values['L30_FW2VOIP_AUTH_MODE']."'";
if($values['L30_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L30_FW_TO_VOIP_PASSWD'] = $_POST['line30_fw_to_voip_passwd'] ;
  $updatesql_a.=",L30_FW_TO_VOIP_PASSWD='".$values['L30_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L30_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L30_FW_TO_VOIP_PASSWD'] = $_POST['l30_fw_to_voip_passwd'] ;
  $updatesql_a.=",L30_FW_TO_VOIP_PASSWD='".$values['L30_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 

  $values['L30_GROUP_MODE'] = $_POST['line30_gsm_group_mode'] ;
  $updatesql_a.=",L30_GROUP_MODE='".$values['L30_GROUP_MODE']."'";
if($values['L30_GROUP_MODE'] == 'SVR'):
  $values['L30_GSM_FW_MODE'] = $_POST['line30_gsm_fw_mode'] ;
  $updatesql_a.=",L30_GSM_FW_MODE='".$values['L30_GSM_FW_MODE']."'";
  $values['L30_PARTNER_SVR'] = $_POST['line30_group_share_addr'] ;
  $updatesql_a.=",L30_PARTNER_SVR='".$values['L30_PARTNER_SVR']."'";
endif; 
if($values['L30_GROUP_MODE'] == 'CLI'):
  $values['L30_GROUP_SVR'] = $_POST['line30_group_svr_addr'] ;
  $updatesql_a.=",L30_GROUP_SVR='".$values['L30_GROUP_SVR']."'";
endif;
  $values['L30_GSM_NUMBER'] = $_POST['line30_gsm_num'] ;
  $updatesql_a.=",L30_GSM_NUMBER='".$values['L30_GSM_NUMBER']."'";
  $values['L30_CALLER_ANONYMOUS'] = $_POST['line30_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql_a.=",L30_CALLER_ANONYMOUS='".$values['L30_CALLER_ANONYMOUS']."'";
 
if($values['TELPORT'] >= 31): 
endif; 
  $values['L31_DISABLE_OUT'] = $_POST['line31_fw_to_pstn']=='on'?'0':'1';
  $updatesql_a.=",L31_DISABLE_OUT='".$values['L31_DISABLE_OUT']."'";
if($values['L31_DISABLE_OUT'] == 0):
  $values['L31_FW_NUM_TO_PSTN'] = $_POST['line31_fw_num_to_pstn'] ;
  $updatesql_a.=",L31_FW_NUM_TO_PSTN='".$values['L31_FW_NUM_TO_PSTN']."'";
  $values['L31_P_DIGIT_MAP'] = $_POST['line31_p_dial_plan'] ;
  $updatesql_a.=",L31_P_DIGIT_MAP='".$values['L31_P_DIGIT_MAP']."'";
  $values['LINE31_P_DPRST'] = $_POST['line31_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql_a.=",LINE31_P_DPRST='".$values['LINE31_P_DPRST']."'";
  $values['L31_FW2PSTN_AUTH_MODE'] = $_POST['line31_fw2pstn_auth_mode'] ;
  $updatesql_a.=",L31_FW2PSTN_AUTH_MODE='".$values['L31_FW2PSTN_AUTH_MODE']."'";
if($values['L31_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L31_FW_TO_PSTN_PASSWD'] = $_POST['line31_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L31_FW_TO_PSTN_PASSWD='".$values['L31_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L31_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L31_FW_TO_PSTN_PASSWD'] = $_POST['l31_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L31_FW_TO_PSTN_PASSWD='".$values['L31_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE31_OUT_INTERVAL'] = $_POST['line31_out_interval'] ;
  $updatesql_a.=",LINE31_OUT_INTERVAL='".$values['LINE31_OUT_INTERVAL']."'";
endif; 
if(!isset($_POST['line31_sms_sender']))
  $values['L31_SMS_SENDER']      = 0;
else
  $values['L31_SMS_SENDER'] = $_POST['line31_sms_sender']=='on'?'1':'0';
  $updatesql_a.=",L31_SMS_SENDER='".$values['L31_SMS_SENDER']."'";
if($values['L31_SMS_SENDER'] == 1):
  $values['L31_SMS_SERVER'] = $_POST['line31_sms_server'] ;
  $updatesql_a.=",L31_SMS_SERVER='".$values['L31_SMS_SERVER']."'";
  $values['L31_SMS_PORT'] = $_POST['line31_sms_port'] ;
  $updatesql_a.=",L31_SMS_PORT='".$values['L31_SMS_PORT']."'";
  $values['L31_SMS_CLI_ID'] = $_POST['line31_sms_cli_id'] ;
  $updatesql_a.=",L31_SMS_CLI_ID='".$values['L31_SMS_CLI_ID']."'";
  $values['L31_SMS_CLI_PASSWD'] = $_POST['line31_sms_cli_passwd'] ;
  $updatesql_a.=",L31_SMS_CLI_PASSWD='".$values['L31_SMS_CLI_PASSWD']."'";
endif; 
 $values['LINE31_SMS_VALIDITY_TIME'] = $_POST['line31_sms_validity_time'] ;
  $updatesql_a.=",LINE31_SMS_VALIDITY_TIME='".$values['LINE31_SMS_VALIDITY_TIME']."'";
  $values['L31_DISABLE_SMS_ACK'] = $_POST['line31_sms_ack_enable']=='on'?'0':'1';
  $updatesql_a.=",L31_DISABLE_SMS_ACK='".$values['L31_DISABLE_SMS_ACK']."'";


  $values['L31_DISABLE_IN'] = $_POST['line31_fw_to_voip']=='on'?'0':'1';
  $updatesql_a.=",L31_DISABLE_IN='".$values['L31_DISABLE_IN']."'";
if($values['L31_DISABLE_IN'] == 0):
  $values['L31_FW_NUM_TO_VOIP'] = $_POST['line31_fw_num_to_voip'] ;
  $updatesql_a.=",L31_FW_NUM_TO_VOIP='".$values['L31_FW_NUM_TO_VOIP']."'";
  $values['L31_V_DIGIT_MAP'] = $_POST['line31_v_dial_plan'] ;
  $updatesql_a.=",L31_V_DIGIT_MAP='".$values['L31_V_DIGIT_MAP']."'";
  $values['L31_FW2VOIP_AUTH_MODE'] = $_POST['line31_fw2voip_auth_mode'] ;
  $updatesql_a.=",L31_FW2VOIP_AUTH_MODE='".$values['L31_FW2VOIP_AUTH_MODE']."'";
if($values['L31_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L31_FW_TO_VOIP_PASSWD'] = $_POST['line31_fw_to_voip_passwd'] ;
  $updatesql_a.=",L31_FW_TO_VOIP_PASSWD='".$values['L31_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L31_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L31_FW_TO_VOIP_PASSWD'] = $_POST['l31_fw_to_voip_passwd'] ;
  $updatesql_a.=",L31_FW_TO_VOIP_PASSWD='".$values['L31_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 

  $values['L31_GROUP_MODE'] = $_POST['line31_gsm_group_mode'] ;
  $updatesql_a.=",L31_GROUP_MODE='".$values['L31_GROUP_MODE']."'";
if($values['L31_GROUP_MODE'] == 'SVR'):
  $values['L31_GSM_FW_MODE'] = $_POST['line31_gsm_fw_mode'] ;
  $updatesql_a.=",L31_GSM_FW_MODE='".$values['L31_GSM_FW_MODE']."'";
  $values['L31_PARTNER_SVR'] = $_POST['line31_group_share_addr'] ;
  $updatesql_a.=",L31_PARTNER_SVR='".$values['L31_PARTNER_SVR']."'";
endif; 
if($values['L31_GROUP_MODE'] == 'CLI'):
  $values['L31_GROUP_SVR'] = $_POST['line31_group_svr_addr'] ;
  $updatesql_a.=",L31_GROUP_SVR='".$values['L31_GROUP_SVR']."'";
endif;
  $values['L31_GSM_NUMBER'] = $_POST['line31_gsm_num'] ;
  $updatesql_a.=",L31_GSM_NUMBER='".$values['L31_GSM_NUMBER']."'";
  $values['L31_CALLER_ANONYMOUS'] = $_POST['line31_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql_a.=",L31_CALLER_ANONYMOUS='".$values['L31_CALLER_ANONYMOUS']."'";
 
if($values['TELPORT'] >= 32): 
endif; 
  $values['L32_DISABLE_OUT'] = $_POST['line32_fw_to_pstn']=='on'?'0':'1';
  $updatesql_a.=",L32_DISABLE_OUT='".$values['L32_DISABLE_OUT']."'";
if($values['L32_DISABLE_OUT'] == 0):
  $values['L32_FW_NUM_TO_PSTN'] = $_POST['line32_fw_num_to_pstn'] ;
  $updatesql_a.=",L32_FW_NUM_TO_PSTN='".$values['L32_FW_NUM_TO_PSTN']."'";
  $values['L32_P_DIGIT_MAP'] = $_POST['line32_p_dial_plan'] ;
  $updatesql_a.=",L32_P_DIGIT_MAP='".$values['L32_P_DIGIT_MAP']."'";
  $values['LINE32_P_DPRST'] = $_POST['line32_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql_a.=",LINE32_P_DPRST='".$values['LINE32_P_DPRST']."'";
  $values['L32_FW2PSTN_AUTH_MODE'] = $_POST['line32_fw2pstn_auth_mode'] ;
  $updatesql_a.=",L32_FW2PSTN_AUTH_MODE='".$values['L32_FW2PSTN_AUTH_MODE']."'";
if($values['L32_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L32_FW_TO_PSTN_PASSWD'] = $_POST['line32_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L32_FW_TO_PSTN_PASSWD='".$values['L32_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L32_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L32_FW_TO_PSTN_PASSWD'] = $_POST['l32_fw_to_pstn_passwd'] ;
  $updatesql_a.=",L32_FW_TO_PSTN_PASSWD='".$values['L32_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE32_OUT_INTERVAL'] = $_POST['line32_out_interval'] ;
  $updatesql_a.=",LINE32_OUT_INTERVAL='".$values['LINE32_OUT_INTERVAL']."'";
endif; 
if(!isset($_POST['line32_sms_sender']))
  $values['L32_SMS_SENDER']      = 0;
else
  $values['L32_SMS_SENDER'] = $_POST['line32_sms_sender']=='on'?'1':'0';
  $updatesql_a.=",L32_SMS_SENDER='".$values['L32_SMS_SENDER']."'";
if($values['L32_SMS_SENDER'] == 1):
  $values['L32_SMS_SERVER'] = $_POST['line32_sms_server'] ;
  $updatesql_a.=",L32_SMS_SERVER='".$values['L32_SMS_SERVER']."'";
  $values['L32_SMS_PORT'] = $_POST['line32_sms_port'] ;
  $updatesql_a.=",L32_SMS_PORT='".$values['L32_SMS_PORT']."'";
  $values['L32_SMS_CLI_ID'] = $_POST['line32_sms_cli_id'] ;
  $updatesql_a.=",L32_SMS_CLI_ID='".$values['L32_SMS_CLI_ID']."'";
  $values['L32_SMS_CLI_PASSWD'] = $_POST['line32_sms_cli_passwd'] ;
  $updatesql_a.=",L32_SMS_CLI_PASSWD='".$values['L32_SMS_CLI_PASSWD']."'";
endif; 
 $values['LINE32_SMS_VALIDITY_TIME'] = $_POST['line32_sms_validity_time'] ;
  $updatesql_a.=",LINE32_SMS_VALIDITY_TIME='".$values['LINE32_SMS_VALIDITY_TIME']."'";
  $values['L32_DISABLE_SMS_ACK'] = $_POST['line32_sms_ack_enable']=='on'?'0':'1';
  $updatesql_a.=",L32_DISABLE_SMS_ACK='".$values['L32_DISABLE_SMS_ACK']."'";


  $values['L32_DISABLE_IN'] = $_POST['line32_fw_to_voip']=='on'?'0':'1';
  $updatesql_a.=",L32_DISABLE_IN='".$values['L32_DISABLE_IN']."'";
if($values['L32_DISABLE_IN'] == 0):
  $values['L32_FW_NUM_TO_VOIP'] = $_POST['line32_fw_num_to_voip'] ;
  $updatesql_a.=",L32_FW_NUM_TO_VOIP='".$values['L32_FW_NUM_TO_VOIP']."'";
  $values['L32_V_DIGIT_MAP'] = $_POST['line32_v_dial_plan'] ;
  $updatesql_a.=",L32_V_DIGIT_MAP='".$values['L32_V_DIGIT_MAP']."'";
  $values['L32_FW2VOIP_AUTH_MODE'] = $_POST['line32_fw2voip_auth_mode'] ;
  $updatesql_a.=",L32_FW2VOIP_AUTH_MODE='".$values['L32_FW2VOIP_AUTH_MODE']."'";
if($values['L32_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L32_FW_TO_VOIP_PASSWD'] = $_POST['line32_fw_to_voip_passwd'] ;
  $updatesql_a.=",L32_FW_TO_VOIP_PASSWD='".$values['L32_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L32_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L32_FW_TO_VOIP_PASSWD'] = $_POST['l32_fw_to_voip_passwd'] ;
  $updatesql_a.=",L32_FW_TO_VOIP_PASSWD='".$values['L32_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 

  $values['L32_GROUP_MODE'] = $_POST['line32_gsm_group_mode'] ;
  $updatesql_a.=",L32_GROUP_MODE='".$values['L32_GROUP_MODE']."'";
if($values['L32_GROUP_MODE'] == 'SVR'):
  $values['L32_GSM_FW_MODE'] = $_POST['line32_gsm_fw_mode'] ;
  $updatesql_a.=",L32_GSM_FW_MODE='".$values['L32_GSM_FW_MODE']."'";
  $values['L32_PARTNER_SVR'] = $_POST['line32_group_share_addr'] ;
  $updatesql_a.=",L32_PARTNER_SVR='".$values['L32_PARTNER_SVR']."'";
endif; 
if($values['L32_GROUP_MODE'] == 'CLI'):
  $values['L32_GROUP_SVR'] = $_POST['line32_group_svr_addr'] ;
  $updatesql_a.=",L32_GROUP_SVR='".$values['L32_GROUP_SVR']."'";
endif;
  $values['L32_GSM_NUMBER'] = $_POST['line32_gsm_num'] ;
  $updatesql_a.=",L32_GSM_NUMBER='".$values['L32_GSM_NUMBER']."'";
  $values['L32_CALLER_ANONYMOUS'] = $_POST['line32_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql_a.=",L32_CALLER_ANONYMOUS='".$values['L32_CALLER_ANONYMOUS']."'";
  
  
  
$insertsql_a.=",L1_DISABLE_OUT";
  $insertsql2_a.="','".$values['L1_DISABLE_OUT'];
  $insertsql_a.=",L1_FW_NUM_TO_PSTN";
  $insertsql2_a.="','".$values['L1_FW_NUM_TO_PSTN'];
  $insertsql_a.=",L1_P_DIGIT_MAP";
  $insertsql2_a.="','".$values['L1_P_DIGIT_MAP'];
  $insertsql_a.=",LINE1_P_DPRST";
  $insertsql2_a.="','".$values['LINE1_P_DPRST'];
  $insertsql_a.=",L1_FW2PSTN_AUTH_MODE";
  $insertsql2_a.="','".$values['L1_FW2PSTN_AUTH_MODE'];
  $insertsql_a.=",L1_FW_TO_PSTN_PASSWD";
  $insertsql2_a.="','".$values['L1_FW_TO_PSTN_PASSWD'];
  $insertsql_a.=",LINE1_OUT_INTERVAL";
  $insertsql2_a.="','".$values['LINE1_OUT_INTERVAL'];
  
  $insertsql_a.=",L1_SMS_SENDER";
  $insertsql2_a.="','".$values['L1_SMS_SENDER'];
  $insertsql_a.=",L1_SMS_SERVER";
  $insertsql2_a.="','".$values['L1_SMS_SERVER'];
  $insertsql_a.=",L1_SMS_PORT";
  $insertsql2_a.="','".$values['L1_SMS_PORT'];
  $insertsql_a.=",L1_SMS_CLI_ID";
  $insertsql2_a.="','".$values['L1_SMS_CLI_ID'];
  $insertsql_a.=",L1_SMS_CLI_PASSWD";
  $insertsql2_a.="','".$values['L1_SMS_CLI_PASSWD'];
  $insertsql_a.=",LINE1_SMS_VALIDITY_TIME";
  $insertsql2_a.="','".$values['LINE1_SMS_VALIDITY_TIME'];
  $insertsql_a.=",L1_DISABLE_SMS_ACK";
  $insertsql2_a.="','".$values['L1_DISABLE_SMS_ACK'];
  
  $insertsql_a.=",L1_DISABLE_IN";
  $insertsql2_a.="','".$values['L1_DISABLE_IN'];
  $insertsql_a.=",L1_FW_NUM_TO_VOIP";
  $insertsql2_a.="','".$values['L1_FW_NUM_TO_VOIP'];
  $insertsql_a.=",L1_V_DIGIT_MAP";
  $insertsql2_a.="','".$values['L1_V_DIGIT_MAP'];
  $insertsql_a.=",L1_FW2VOIP_AUTH_MODE";
  $insertsql2_a.="','".$values['L1_FW2VOIP_AUTH_MODE'];
  $insertsql_a.=",L1_FW_TO_VOIP_PASSWD";
  $insertsql2_a.="','".$values['L1_FW_TO_VOIP_PASSWD'];
  
  $insertsql_a.=",L1_GROUP_MODE";
  $insertsql2_a.="','".$values['L1_GROUP_MODE'];
  $insertsql_a.=",L1_GSM_FW_MODE";
  $insertsql2_a.="','".$values['L1_GSM_FW_MODE'];
  $insertsql_a.=",L1_PARTNER_SVR";
  $insertsql2_a.="','".$values['L1_PARTNER_SVR'];
  $insertsql_a.=",L1_GROUP_SVR";
  $insertsql2_a.="','".$values['L1_GROUP_SVR'];
  $insertsql_a.=",L1_GSM_NUMBER";
  $insertsql2_a.="','".$values['L1_GSM_NUMBER'];
  
  
  $insertsql_a.=",L2_DISABLE_OUT";
  $insertsql2_a.="','".$values['L2_DISABLE_OUT'];
  $insertsql_a.=",L2_FW_NUM_TO_PSTN";
  $insertsql2_a.="','".$values['L2_FW_NUM_TO_PSTN'];
  $insertsql_a.=",L2_P_DIGIT_MAP";
  $insertsql2_a.="','".$values['L2_P_DIGIT_MAP'];
  $insertsql_a.=",LINE2_P_DPRST";
  $insertsql2_a.="','".$values['LINE2_P_DPRST'];
  $insertsql_a.=",L2_FW2PSTN_AUTH_MODE";
  $insertsql2_a.="','".$values['L2_FW2PSTN_AUTH_MODE'];
  $insertsql_a.=",L2_FW_TO_PSTN_PASSWD";
  $insertsql2_a.="','".$values['L2_FW_TO_PSTN_PASSWD'];
  $insertsql_a.=",LINE2_OUT_INTERVAL";
  $insertsql2_a.="','".$values['LINE2_OUT_INTERVAL'];
  
  $insertsql_a.=",L2_SMS_SENDER";
  $insertsql2_a.="','".$values['L2_SMS_SENDER'];
  $insertsql_a.=",L2_SMS_SERVER";
  $insertsql2_a.="','".$values['L2_SMS_SERVER'];
  $insertsql_a.=",L2_SMS_PORT";
  $insertsql2_a.="','".$values['L2_SMS_PORT'];
  $insertsql_a.=",L2_SMS_CLI_ID";
  $insertsql2_a.="','".$values['L2_SMS_CLI_ID'];
  $insertsql_a.=",L2_SMS_CLI_PASSWD";
  $insertsql2_a.="','".$values['L2_SMS_CLI_PASSWD'];
  $insertsql_a.=",LINE2_SMS_VALIDITY_TIME";
  $insertsql2_a.="','".$values['LINE2_SMS_VALIDITY_TIME'];
  $insertsql_a.=",L2_DISABLE_SMS_ACK";
  $insertsql2_a.="','".$values['L2_DISABLE_SMS_ACK'];
  $insertsql_a.=",L2_DISABLE_IN";
  $insertsql2_a.="','".$values['L2_DISABLE_IN'];
  $insertsql_a.=",L2_FW_NUM_TO_VOIP";
  $insertsql2_a.="','".$values['L2_FW_NUM_TO_VOIP'];
  $insertsql_a.=",L2_V_DIGIT_MAP";
  $insertsql2_a.="','".$values['L2_V_DIGIT_MAP'];
  $insertsql_a.=",L2_FW2VOIP_AUTH_MODE";
  $insertsql2_a.="','".$values['L2_FW2VOIP_AUTH_MODE'];
  $insertsql_a.=",L2_FW_TO_VOIP_PASSWD";
  $insertsql2_a.="','".$values['L2_FW_TO_VOIP_PASSWD'];
  $insertsql_a.=",L2_GROUP_MODE";
  $insertsql2_a.="','".$values['L2_GROUP_MODE'];
  $insertsql_a.=",L2_GSM_FW_MODE";
  $insertsql2_a.="','".$values['L2_GSM_FW_MODE'];
  $insertsql_a.=",L2_PARTNER_SVR";
  $insertsql2_a.="','".$values['L2_PARTNER_SVR'];
  $insertsql_a.=",L2_GROUP_SVR";
  $insertsql2_a.="','".$values['L2_GROUP_SVR'];
  $insertsql_a.=",L2_GSM_NUMBER";
  $insertsql2_a.="','".$values['L2_GSM_NUMBER'];
  
  
  $insertsql_a.=",L3_DISABLE_OUT";
  $insertsql2_a.="','".$values['L3_DISABLE_OUT'];
  $insertsql_a.=",L3_FW_NUM_TO_PSTN";
  $insertsql2_a.="','".$values['L3_FW_NUM_TO_PSTN'];
  $insertsql_a.=",L3_P_DIGIT_MAP";
  $insertsql2_a.="','".$values['L3_P_DIGIT_MAP'];
  $insertsql_a.=",LINE3_P_DPRST";
  $insertsql2_a.="','".$values['LINE3_P_DPRST'];
  $insertsql_a.=",L3_FW2PSTN_AUTH_MODE";
  $insertsql2_a.="','".$values['L3_FW2PSTN_AUTH_MODE'];
  $insertsql_a.=",L3_FW_TO_PSTN_PASSWD";
  $insertsql2_a.="','".$values['L3_FW_TO_PSTN_PASSWD'];
  $insertsql_a.=",LINE3_OUT_INTERVAL";
  $insertsql2_a.="','".$values['LINE3_OUT_INTERVAL'];
  
  $insertsql_a.=",L3_SMS_SENDER";
  $insertsql2_a.="','".$values['L3_SMS_SENDER'];
  $insertsql_a.=",L3_SMS_SERVER";
  $insertsql2_a.="','".$values['L3_SMS_SERVER'];
  $insertsql_a.=",L3_SMS_PORT";
  $insertsql2_a.="','".$values['L3_SMS_PORT'];
  $insertsql_a.=",L3_SMS_CLI_ID";
  $insertsql2_a.="','".$values['L3_SMS_CLI_ID'];
  $insertsql_a.=",L3_SMS_CLI_PASSWD";
  $insertsql2_a.="','".$values['L3_SMS_CLI_PASSWD'];
  $insertsql_a.=",LINE3_SMS_VALIDITY_TIME";
  $insertsql2_a.="','".$values['LINE3_SMS_VALIDITY_TIME'];
  $insertsql_a.=",L3_DISABLE_SMS_ACK";
  $insertsql2_a.="','".$values['L3_DISABLE_SMS_ACK'];
  $insertsql_a.=",L3_DISABLE_IN";
  $insertsql2_a.="','".$values['L3_DISABLE_IN'];
  $insertsql_a.=",L3_FW_NUM_TO_VOIP";
  $insertsql2_a.="','".$values['L3_FW_NUM_TO_VOIP'];
  $insertsql_a.=",L3_V_DIGIT_MAP";
  $insertsql2_a.="','".$values['L3_V_DIGIT_MAP'];
  $insertsql_a.=",L3_FW2VOIP_AUTH_MODE";
  $insertsql2_a.="','".$values['L3_FW2VOIP_AUTH_MODE'];
  $insertsql_a.=",L3_FW_TO_VOIP_PASSWD";
  $insertsql2_a.="','".$values['L3_FW_TO_VOIP_PASSWD'];
  $insertsql_a.=",L3_GROUP_MODE";
  $insertsql2_a.="','".$values['L3_GROUP_MODE'];
  $insertsql_a.=",L3_GSM_FW_MODE";
  $insertsql2_a.="','".$values['L3_GSM_FW_MODE'];
  $insertsql_a.=",L3_PARTNER_SVR";
  $insertsql2_a.="','".$values['L3_PARTNER_SVR'];
  $insertsql_a.=",L3_GROUP_SVR";
  $insertsql2_a.="','".$values['L3_GROUP_SVR'];
  $insertsql_a.=",L3_GSM_NUMBER";
  $insertsql2_a.="','".$values['L3_GSM_NUMBER'];
  
  
  $insertsql_a.=",L4_DISABLE_OUT";
  $insertsql2_a.="','".$values['L4_DISABLE_OUT'];
  $insertsql_a.=",L4_FW_NUM_TO_PSTN";
  $insertsql2_a.="','".$values['L4_FW_NUM_TO_PSTN'];
  $insertsql_a.=",L4_P_DIGIT_MAP";
  $insertsql2_a.="','".$values['L4_P_DIGIT_MAP'];
  $insertsql_a.=",LINE4_P_DPRST";
  $insertsql2_a.="','".$values['LINE4_P_DPRST'];
  $insertsql_a.=",L4_FW2PSTN_AUTH_MODE";
  $insertsql2_a.="','".$values['L4_FW2PSTN_AUTH_MODE'];
  $insertsql_a.=",L4_FW_TO_PSTN_PASSWD";
  $insertsql2_a.="','".$values['L4_FW_TO_PSTN_PASSWD'];
  $insertsql_a.=",LINE4_OUT_INTERVAL";
  $insertsql2_a.="','".$values['LINE4_OUT_INTERVAL'];
  
  $insertsql_a.=",L4_SMS_SENDER";
  $insertsql2_a.="','".$values['L4_SMS_SENDER'];
  $insertsql_a.=",L4_SMS_SERVER";
  $insertsql2_a.="','".$values['L4_SMS_SERVER'];
  $insertsql_a.=",L4_SMS_PORT";
  $insertsql2_a.="','".$values['L4_SMS_PORT'];
  $insertsql_a.=",L4_SMS_CLI_ID";
  $insertsql2_a.="','".$values['L4_SMS_CLI_ID'];
  $insertsql_a.=",L4_SMS_CLI_PASSWD";
  $insertsql2_a.="','".$values['L4_SMS_CLI_PASSWD'];
  $insertsql_a.=",LINE4_SMS_VALIDITY_TIME";
  $insertsql2_a.="','".$values['LINE4_SMS_VALIDITY_TIME'];
  $insertsql_a.=",L4_DISABLE_SMS_ACK";
  $insertsql2_a.="','".$values['L4_DISABLE_SMS_ACK'];
  $insertsql_a.=",L4_DISABLE_IN";
  $insertsql2_a.="','".$values['L4_DISABLE_IN'];
  $insertsql_a.=",L4_FW_NUM_TO_VOIP";
  $insertsql2_a.="','".$values['L4_FW_NUM_TO_VOIP'];
  $insertsql_a.=",L4_V_DIGIT_MAP";
  $insertsql2_a.="','".$values['L4_V_DIGIT_MAP'];
  $insertsql_a.=",L4_FW2VOIP_AUTH_MODE";
  $insertsql2_a.="','".$values['L4_FW2VOIP_AUTH_MODE'];
  $insertsql_a.=",L4_FW_TO_VOIP_PASSWD";
  $insertsql2_a.="','".$values['L4_FW_TO_VOIP_PASSWD'];
  $insertsql_a.=",L4_GROUP_MODE";
  $insertsql2_a.="','".$values['L4_GROUP_MODE'];
  $insertsql_a.=",L4_GSM_FW_MODE";
  $insertsql2_a.="','".$values['L4_GSM_FW_MODE'];
  $insertsql_a.=",L4_PARTNER_SVR";
  $insertsql2_a.="','".$values['L4_PARTNER_SVR'];
  $insertsql_a.=",L4_GROUP_SVR";
  $insertsql2_a.="','".$values['L4_GROUP_SVR'];
  $insertsql_a.=",L4_GSM_NUMBER";
  $insertsql2_a.="','".$values['L4_GSM_NUMBER'];
  
  
  $insertsql_a.=",L5_DISABLE_OUT";
  $insertsql2_a.="','".$values['L5_DISABLE_OUT'];
  $insertsql_a.=",L5_FW_NUM_TO_PSTN";
  $insertsql2_a.="','".$values['L5_FW_NUM_TO_PSTN'];
  $insertsql_a.=",L5_P_DIGIT_MAP";
  $insertsql2_a.="','".$values['L5_P_DIGIT_MAP'];
  $insertsql_a.=",LINE5_P_DPRST";
  $insertsql2_a.="','".$values['LINE5_P_DPRST'];
  $insertsql_a.=",L5_FW2PSTN_AUTH_MODE";
  $insertsql2_a.="','".$values['L5_FW2PSTN_AUTH_MODE'];
  $insertsql_a.=",L5_FW_TO_PSTN_PASSWD";
  $insertsql2_a.="','".$values['L5_FW_TO_PSTN_PASSWD'];
  $insertsql_a.=",LINE5_OUT_INTERVAL";
  $insertsql2_a.="','".$values['LINE5_OUT_INTERVAL'];
  
  $insertsql_a.=",L5_SMS_SENDER";
  $insertsql2_a.="','".$values['L5_SMS_SENDER'];
  $insertsql_a.=",L5_SMS_SERVER";
  $insertsql2_a.="','".$values['L5_SMS_SERVER'];
  $insertsql_a.=",L5_SMS_PORT";
  $insertsql2_a.="','".$values['L5_SMS_PORT'];
  $insertsql_a.=",L5_SMS_CLI_ID";
  $insertsql2_a.="','".$values['L5_SMS_CLI_ID'];
  $insertsql_a.=",L5_SMS_CLI_PASSWD";
  $insertsql2_a.="','".$values['L5_SMS_CLI_PASSWD'];
  $insertsql_a.=",LINE5_SMS_VALIDITY_TIME";
  $insertsql2_a.="','".$values['LINE5_SMS_VALIDITY_TIME'];
  $insertsql_a.=",L5_DISABLE_SMS_ACK";
  $insertsql2_a.="','".$values['L5_DISABLE_SMS_ACK'];
  $insertsql_a.=",L5_DISABLE_IN";
  $insertsql2_a.="','".$values['L5_DISABLE_IN'];
  $insertsql_a.=",L5_FW_NUM_TO_VOIP";
  $insertsql2_a.="','".$values['L5_FW_NUM_TO_VOIP'];
  $insertsql_a.=",L5_V_DIGIT_MAP";
  $insertsql2_a.="','".$values['L5_V_DIGIT_MAP'];
  $insertsql_a.=",L5_FW2VOIP_AUTH_MODE";
  $insertsql2_a.="','".$values['L5_FW2VOIP_AUTH_MODE'];
  $insertsql_a.=",L5_FW_TO_VOIP_PASSWD";
  $insertsql2_a.="','".$values['L5_FW_TO_VOIP_PASSWD'];
  $insertsql_a.=",L5_GROUP_MODE";
  $insertsql2_a.="','".$values['L5_GROUP_MODE'];
  $insertsql_a.=",L5_GSM_FW_MODE";
  $insertsql2_a.="','".$values['L5_GSM_FW_MODE'];
  $insertsql_a.=",L5_PARTNER_SVR";
  $insertsql2_a.="','".$values['L5_PARTNER_SVR'];
  $insertsql_a.=",L5_GROUP_SVR";
  $insertsql2_a.="','".$values['L5_GROUP_SVR'];
  $insertsql_a.=",L5_GSM_NUMBER";
  $insertsql2_a.="','".$values['L5_GSM_NUMBER'];
  
  
  $insertsql_a.=",L6_DISABLE_OUT";
  $insertsql2_a.="','".$values['L6_DISABLE_OUT'];
  $insertsql_a.=",L6_FW_NUM_TO_PSTN";
  $insertsql2_a.="','".$values['L6_FW_NUM_TO_PSTN'];
  $insertsql_a.=",L6_P_DIGIT_MAP";
  $insertsql2_a.="','".$values['L6_P_DIGIT_MAP'];
  $insertsql_a.=",LINE6_P_DPRST";
  $insertsql2_a.="','".$values['LINE6_P_DPRST'];
  $insertsql_a.=",L6_FW2PSTN_AUTH_MODE";
  $insertsql2_a.="','".$values['L6_FW2PSTN_AUTH_MODE'];
  $insertsql_a.=",L6_FW_TO_PSTN_PASSWD";
  $insertsql2_a.="','".$values['L6_FW_TO_PSTN_PASSWD'];
  $insertsql_a.=",LINE6_OUT_INTERVAL";
  $insertsql2_a.="','".$values['LINE6_OUT_INTERVAL'];
  
  $insertsql_a.=",L6_SMS_SENDER";
  $insertsql2_a.="','".$values['L6_SMS_SENDER'];
  $insertsql_a.=",L6_SMS_SERVER";
  $insertsql2_a.="','".$values['L6_SMS_SERVER'];
  $insertsql_a.=",L6_SMS_PORT";
  $insertsql2_a.="','".$values['L6_SMS_PORT'];
  $insertsql_a.=",L6_SMS_CLI_ID";
  $insertsql2_a.="','".$values['L6_SMS_CLI_ID'];
  $insertsql_a.=",L6_SMS_CLI_PASSWD";
  $insertsql2_a.="','".$values['L6_SMS_CLI_PASSWD'];
  $insertsql_a.=",LINE6_SMS_VALIDITY_TIME";
  $insertsql2_a.="','".$values['LINE6_SMS_VALIDITY_TIME'];
  $insertsql_a.=",L6_DISABLE_SMS_ACK";
  $insertsql2_a.="','".$values['L6_DISABLE_SMS_ACK'];
  $insertsql_a.=",L6_DISABLE_IN";
  $insertsql2_a.="','".$values['L6_DISABLE_IN'];
  $insertsql_a.=",L6_FW_NUM_TO_VOIP";
  $insertsql2_a.="','".$values['L6_FW_NUM_TO_VOIP'];
  $insertsql_a.=",L6_V_DIGIT_MAP";
  $insertsql2_a.="','".$values['L6_V_DIGIT_MAP'];
  $insertsql_a.=",L6_FW2VOIP_AUTH_MODE";
  $insertsql2_a.="','".$values['L6_FW2VOIP_AUTH_MODE'];
  $insertsql_a.=",L6_FW_TO_VOIP_PASSWD";
  $insertsql2_a.="','".$values['L6_FW_TO_VOIP_PASSWD'];
  $insertsql_a.=",L6_GROUP_MODE";
  $insertsql2_a.="','".$values['L6_GROUP_MODE'];
  $insertsql_a.=",L6_GSM_FW_MODE";
  $insertsql2_a.="','".$values['L6_GSM_FW_MODE'];
  $insertsql_a.=",L6_PARTNER_SVR";
  $insertsql2_a.="','".$values['L6_PARTNER_SVR'];
  $insertsql_a.=",L6_GROUP_SVR";
  $insertsql2_a.="','".$values['L6_GROUP_SVR'];
  $insertsql_a.=",L6_GSM_NUMBER";
  $insertsql2_a.="','".$values['L6_GSM_NUMBER'];
 
  
  $insertsql_a.=",L7_DISABLE_OUT";
  $insertsql2_a.="','".$values['L7_DISABLE_OUT'];
  $insertsql_a.=",L7_FW_NUM_TO_PSTN";
  $insertsql2_a.="','".$values['L7_FW_NUM_TO_PSTN'];
  $insertsql_a.=",L7_P_DIGIT_MAP";
  $insertsql2_a.="','".$values['L7_P_DIGIT_MAP'];
  $insertsql_a.=",LINE7_P_DPRST";
  $insertsql2_a.="','".$values['LINE7_P_DPRST'];
  $insertsql_a.=",L7_FW2PSTN_AUTH_MODE";
  $insertsql2_a.="','".$values['L7_FW2PSTN_AUTH_MODE'];
  $insertsql_a.=",L7_FW_TO_PSTN_PASSWD";
  $insertsql2_a.="','".$values['L7_FW_TO_PSTN_PASSWD'];
  $insertsql_a.=",LINE7_OUT_INTERVAL";
  $insertsql2_a.="','".$values['LINE7_OUT_INTERVAL'];
  
  $insertsql_a.=",L7_SMS_SENDER";
  $insertsql2_a.="','".$values['L7_SMS_SENDER'];
  $insertsql_a.=",L7_SMS_SERVER";
  $insertsql2_a.="','".$values['L7_SMS_SERVER'];
  $insertsql_a.=",L7_SMS_PORT";
  $insertsql2_a.="','".$values['L7_SMS_PORT'];
  $insertsql_a.=",L7_SMS_CLI_ID";
  $insertsql2_a.="','".$values['L7_SMS_CLI_ID'];
  $insertsql_a.=",L7_SMS_CLI_PASSWD";
  $insertsql2_a.="','".$values['L7_SMS_CLI_PASSWD'];
  $insertsql_a.=",LINE7_SMS_VALIDITY_TIME";
  $insertsql2_a.="','".$values['LINE7_SMS_VALIDITY_TIME'];
  $insertsql_a.=",L7_DISABLE_SMS_ACK";
  $insertsql2_a.="','".$values['L7_DISABLE_SMS_ACK'];
  $insertsql_a.=",L7_DISABLE_IN";
  $insertsql2_a.="','".$values['L7_DISABLE_IN'];
  $insertsql_a.=",L7_FW_NUM_TO_VOIP";
  $insertsql2_a.="','".$values['L7_FW_NUM_TO_VOIP'];
  $insertsql_a.=",L7_V_DIGIT_MAP";
  $insertsql2_a.="','".$values['L7_V_DIGIT_MAP'];
  $insertsql_a.=",L7_FW2VOIP_AUTH_MODE";
  $insertsql2_a.="','".$values['L7_FW2VOIP_AUTH_MODE'];
  $insertsql_a.=",L7_FW_TO_VOIP_PASSWD";
  $insertsql2_a.="','".$values['L7_FW_TO_VOIP_PASSWD'];
  $insertsql_a.=",L7_GROUP_MODE";
  $insertsql2_a.="','".$values['L7_GROUP_MODE'];
  $insertsql_a.=",L7_GSM_FW_MODE";
  $insertsql2_a.="','".$values['L7_GSM_FW_MODE'];
  $insertsql_a.=",L7_PARTNER_SVR";
  $insertsql2_a.="','".$values['L7_PARTNER_SVR'];
  $insertsql_a.=",L7_GROUP_SVR";
  $insertsql2_a.="','".$values['L7_GROUP_SVR'];
  $insertsql_a.=",L7_GSM_NUMBER";
  $insertsql2_a.="','".$values['L7_GSM_NUMBER'];
 
  
  $insertsql_a.=",L8_DISABLE_OUT";
  $insertsql2_a.="','".$values['L8_DISABLE_OUT'];
  $insertsql_a.=",L8_FW_NUM_TO_PSTN";
  $insertsql2_a.="','".$values['L8_FW_NUM_TO_PSTN'];
  $insertsql_a.=",L8_P_DIGIT_MAP";
  $insertsql2_a.="','".$values['L8_P_DIGIT_MAP'];
  $insertsql_a.=",LINE8_P_DPRST";
  $insertsql2_a.="','".$values['LINE8_P_DPRST'];
  $insertsql_a.=",L8_FW2PSTN_AUTH_MODE";
  $insertsql2_a.="','".$values['L8_FW2PSTN_AUTH_MODE'];
  $insertsql_a.=",L8_FW_TO_PSTN_PASSWD";
  $insertsql2_a.="','".$values['L8_FW_TO_PSTN_PASSWD'];
  $insertsql_a.=",LINE8_OUT_INTERVAL";
  $insertsql2_a.="','".$values['LINE8_OUT_INTERVAL'];
  
  $insertsql_a.=",L8_SMS_SENDER";
  $insertsql2_a.="','".$values['L8_SMS_SENDER'];
  $insertsql_a.=",L8_SMS_SERVER";
  $insertsql2_a.="','".$values['L8_SMS_SERVER'];
  $insertsql_a.=",L8_SMS_PORT";
  $insertsql2_a.="','".$values['L8_SMS_PORT'];
  $insertsql_a.=",L8_SMS_CLI_ID";
  $insertsql2_a.="','".$values['L8_SMS_CLI_ID'];
  $insertsql_a.=",L8_SMS_CLI_PASSWD";
  $insertsql2_a.="','".$values['L8_SMS_CLI_PASSWD'];
  $insertsql_a.=",LINE8_SMS_VALIDITY_TIME";
  $insertsql2_a.="','".$values['LINE8_SMS_VALIDITY_TIME'];
  $insertsql_a.=",L8_DISABLE_SMS_ACK";
  $insertsql2_a.="','".$values['L8_DISABLE_SMS_ACK'];
  $insertsql_a.=",L8_DISABLE_IN";
  $insertsql2_a.="','".$values['L8_DISABLE_IN'];
  $insertsql_a.=",L8_FW_NUM_TO_VOIP";
  $insertsql2_a.="','".$values['L8_FW_NUM_TO_VOIP'];
  $insertsql_a.=",L8_V_DIGIT_MAP";
  $insertsql2_a.="','".$values['L8_V_DIGIT_MAP'];
  $insertsql_a.=",L8_FW2VOIP_AUTH_MODE";
  $insertsql2_a.="','".$values['L8_FW2VOIP_AUTH_MODE'];
  $insertsql_a.=",L8_FW_TO_VOIP_PASSWD";
  $insertsql2_a.="','".$values['L8_FW_TO_VOIP_PASSWD'];
  $insertsql_a.=",L8_GROUP_MODE";
  $insertsql2_a.="','".$values['L8_GROUP_MODE'];
  $insertsql_a.=",L8_GSM_FW_MODE";
  $insertsql2_a.="','".$values['L8_GSM_FW_MODE'];
  $insertsql_a.=",L8_PARTNER_SVR";
  $insertsql2_a.="','".$values['L8_PARTNER_SVR'];
  $insertsql_a.=",L8_GROUP_SVR";
  $insertsql2_a.="','".$values['L8_GROUP_SVR'];
  $insertsql_a.=",L8_GSM_NUMBER";
  $insertsql2_a.="','".$values['L8_GSM_NUMBER'];
 
  
  $insertsql_a.=",L9_DISABLE_OUT";
  $insertsql2_a.="','".$values['L9_DISABLE_OUT'];
  $insertsql_a.=",L9_FW_NUM_TO_PSTN";
  $insertsql2_a.="','".$values['L9_FW_NUM_TO_PSTN'];
  $insertsql_a.=",L9_P_DIGIT_MAP";
  $insertsql2_a.="','".$values['L9_P_DIGIT_MAP'];
  $insertsql_a.=",LINE9_P_DPRST";
  $insertsql2_a.="','".$values['LINE9_P_DPRST'];
  $insertsql_a.=",L9_FW2PSTN_AUTH_MODE";
  $insertsql2_a.="','".$values['L9_FW2PSTN_AUTH_MODE'];
  $insertsql_a.=",L9_FW_TO_PSTN_PASSWD";
  $insertsql2_a.="','".$values['L9_FW_TO_PSTN_PASSWD'];
  $insertsql_a.=",LINE9_OUT_INTERVAL";
  $insertsql2_a.="','".$values['LINE9_OUT_INTERVAL'];
  
  $insertsql_a.=",L9_SMS_SENDER";
  $insertsql2_a.="','".$values['L9_SMS_SENDER'];
  $insertsql_a.=",L9_SMS_SERVER";
  $insertsql2_a.="','".$values['L9_SMS_SERVER'];
  $insertsql_a.=",L9_SMS_PORT";
  $insertsql2_a.="','".$values['L9_SMS_PORT'];
  $insertsql_a.=",L9_SMS_CLI_ID";
  $insertsql2_a.="','".$values['L9_SMS_CLI_ID'];
  $insertsql_a.=",L9_SMS_CLI_PASSWD";
  $insertsql2_a.="','".$values['L9_SMS_CLI_PASSWD'];
  $insertsql_a.=",LINE9_SMS_VALIDITY_TIME";
  $insertsql2_a.="','".$values['LINE9_SMS_VALIDITY_TIME'];
  $insertsql_a.=",L9_DISABLE_SMS_ACK";
  $insertsql2_a.="','".$values['L9_DISABLE_SMS_ACK'];
  $insertsql_a.=",L9_DISABLE_IN";
  $insertsql2_a.="','".$values['L9_DISABLE_IN'];
  $insertsql_a.=",L9_FW_NUM_TO_VOIP";
  $insertsql2_a.="','".$values['L9_FW_NUM_TO_VOIP'];
  $insertsql_a.=",L9_V_DIGIT_MAP";
  $insertsql2_a.="','".$values['L9_V_DIGIT_MAP'];
  $insertsql_a.=",L9_FW2VOIP_AUTH_MODE";
  $insertsql2_a.="','".$values['L9_FW2VOIP_AUTH_MODE'];
  $insertsql_a.=",L9_FW_TO_VOIP_PASSWD";
  $insertsql2_a.="','".$values['L9_FW_TO_VOIP_PASSWD'];
  $insertsql_a.=",L9_GROUP_MODE";
  $insertsql2_a.="','".$values['L9_GROUP_MODE'];
  $insertsql_a.=",L9_GSM_FW_MODE";
  $insertsql2_a.="','".$values['L9_GSM_FW_MODE'];
  $insertsql_a.=",L9_PARTNER_SVR";
  $insertsql2_a.="','".$values['L9_PARTNER_SVR'];
  $insertsql_a.=",L9_GROUP_SVR";
  $insertsql2_a.="','".$values['L9_GROUP_SVR'];
  $insertsql_a.=",L9_GSM_NUMBER";
  $insertsql2_a.="','".$values['L9_GSM_NUMBER'];
 
  
  $insertsql_a.=",L10_DISABLE_OUT";
  $insertsql2_a.="','".$values['L10_DISABLE_OUT'];
  $insertsql_a.=",L10_FW_NUM_TO_PSTN";
  $insertsql2_a.="','".$values['L10_FW_NUM_TO_PSTN'];
  $insertsql_a.=",L10_P_DIGIT_MAP";
  $insertsql2_a.="','".$values['L10_P_DIGIT_MAP'];
  $insertsql_a.=",LINE10_P_DPRST";
  $insertsql2_a.="','".$values['LINE10_P_DPRST'];
  $insertsql_a.=",L10_FW2PSTN_AUTH_MODE";
  $insertsql2_a.="','".$values['L10_FW2PSTN_AUTH_MODE'];
  $insertsql_a.=",L10_FW_TO_PSTN_PASSWD";
  $insertsql2_a.="','".$values['L10_FW_TO_PSTN_PASSWD'];
  $insertsql_a.=",LINE10_OUT_INTERVAL";
  $insertsql2_a.="','".$values['LINE10_OUT_INTERVAL'];
  
  $insertsql_a.=",L10_SMS_SENDER";
  $insertsql2_a.="','".$values['L10_SMS_SENDER'];
  $insertsql_a.=",L10_SMS_SERVER";
  $insertsql2_a.="','".$values['L10_SMS_SERVER'];
  $insertsql_a.=",L10_SMS_PORT";
  $insertsql2_a.="','".$values['L10_SMS_PORT'];
  $insertsql_a.=",L10_SMS_CLI_ID";
  $insertsql2_a.="','".$values['L10_SMS_CLI_ID'];
  $insertsql_a.=",L10_SMS_CLI_PASSWD";
  $insertsql2_a.="','".$values['L10_SMS_CLI_PASSWD'];
  $insertsql_a.=",LINE10_SMS_VALIDITY_TIME";
  $insertsql2_a.="','".$values['LINE10_SMS_VALIDITY_TIME'];
  $insertsql_a.=",L10_DISABLE_SMS_ACK";
  $insertsql2_a.="','".$values['L10_DISABLE_SMS_ACK'];
  $insertsql_a.=",L10_DISABLE_IN";
  $insertsql2_a.="','".$values['L10_DISABLE_IN'];
  $insertsql_a.=",L10_FW_NUM_TO_VOIP";
  $insertsql2_a.="','".$values['L10_FW_NUM_TO_VOIP'];
  $insertsql_a.=",L10_V_DIGIT_MAP";
  $insertsql2_a.="','".$values['L10_V_DIGIT_MAP'];
  $insertsql_a.=",L10_FW2VOIP_AUTH_MODE";
  $insertsql2_a.="','".$values['L10_FW2VOIP_AUTH_MODE'];
  $insertsql_a.=",L10_FW_TO_VOIP_PASSWD";
  $insertsql2_a.="','".$values['L10_FW_TO_VOIP_PASSWD'];
  $insertsql_a.=",L10_GROUP_MODE";
  $insertsql2_a.="','".$values['L10_GROUP_MODE'];
  $insertsql_a.=",L10_GSM_FW_MODE";
  $insertsql2_a.="','".$values['L10_GSM_FW_MODE'];
  $insertsql_a.=",L10_PARTNER_SVR";
  $insertsql2_a.="','".$values['L10_PARTNER_SVR'];
  $insertsql_a.=",L10_GROUP_SVR";
  $insertsql2_a.="','".$values['L10_GROUP_SVR'];
  $insertsql_a.=",L10_GSM_NUMBER";
  $insertsql2_a.="','".$values['L10_GSM_NUMBER'];
 
  
  $insertsql_a.=",L11_DISABLE_OUT";
  $insertsql2_a.="','".$values['L11_DISABLE_OUT'];
  $insertsql_a.=",L11_FW_NUM_TO_PSTN";
  $insertsql2_a.="','".$values['L11_FW_NUM_TO_PSTN'];
  $insertsql_a.=",L11_P_DIGIT_MAP";
  $insertsql2_a.="','".$values['L11_P_DIGIT_MAP'];
  $insertsql_a.=",LINE11_P_DPRST";
  $insertsql2_a.="','".$values['LINE11_P_DPRST'];
  $insertsql_a.=",L11_FW2PSTN_AUTH_MODE";
  $insertsql2_a.="','".$values['L11_FW2PSTN_AUTH_MODE'];
  $insertsql_a.=",L11_FW_TO_PSTN_PASSWD";
  $insertsql2_a.="','".$values['L11_FW_TO_PSTN_PASSWD'];
  $insertsql_a.=",LINE11_OUT_INTERVAL";
  $insertsql2_a.="','".$values['LINE11_OUT_INTERVAL'];
  
  $insertsql_a.=",L11_SMS_SENDER";
  $insertsql2_a.="','".$values['L11_SMS_SENDER'];
  $insertsql_a.=",L11_SMS_SERVER";
  $insertsql2_a.="','".$values['L11_SMS_SERVER'];
  $insertsql_a.=",L11_SMS_PORT";
  $insertsql2_a.="','".$values['L11_SMS_PORT'];
  $insertsql_a.=",L11_SMS_CLI_ID";
  $insertsql2_a.="','".$values['L11_SMS_CLI_ID'];
  $insertsql_a.=",L11_SMS_CLI_PASSWD";
  $insertsql2_a.="','".$values['L11_SMS_CLI_PASSWD'];
  $insertsql_a.=",LINE11_SMS_VALIDITY_TIME";
  $insertsql2_a.="','".$values['LINE11_SMS_VALIDITY_TIME'];
  $insertsql_a.=",L11_DISABLE_SMS_ACK";
  $insertsql2_a.="','".$values['L11_DISABLE_SMS_ACK'];
  $insertsql_a.=",L11_DISABLE_IN";
  $insertsql2_a.="','".$values['L11_DISABLE_IN'];
  $insertsql_a.=",L11_FW_NUM_TO_VOIP";
  $insertsql2_a.="','".$values['L11_FW_NUM_TO_VOIP'];
  $insertsql_a.=",L11_V_DIGIT_MAP";
  $insertsql2_a.="','".$values['L11_V_DIGIT_MAP'];
  $insertsql_a.=",L11_FW2VOIP_AUTH_MODE";
  $insertsql2_a.="','".$values['L11_FW2VOIP_AUTH_MODE'];
  $insertsql_a.=",L11_FW_TO_VOIP_PASSWD";
  $insertsql2_a.="','".$values['L11_FW_TO_VOIP_PASSWD'];
  $insertsql_a.=",L11_GROUP_MODE";
  $insertsql2_a.="','".$values['L11_GROUP_MODE'];
  $insertsql_a.=",L11_GSM_FW_MODE";
  $insertsql2_a.="','".$values['L11_GSM_FW_MODE'];
  $insertsql_a.=",L11_PARTNER_SVR";
  $insertsql2_a.="','".$values['L11_PARTNER_SVR'];
  $insertsql_a.=",L11_GROUP_SVR";
  $insertsql2_a.="','".$values['L11_GROUP_SVR'];
  $insertsql_a.=",L11_GSM_NUMBER";
  $insertsql2_a.="','".$values['L11_GSM_NUMBER'];

  
  $insertsql_a.=",L12_DISABLE_OUT";
  $insertsql2_a.="','".$values['L12_DISABLE_OUT'];
  $insertsql_a.=",L12_FW_NUM_TO_PSTN";
  $insertsql2_a.="','".$values['L12_FW_NUM_TO_PSTN'];
  $insertsql_a.=",L12_P_DIGIT_MAP";
  $insertsql2_a.="','".$values['L12_P_DIGIT_MAP'];
  $insertsql_a.=",LINE12_P_DPRST";
  $insertsql2_a.="','".$values['LINE12_P_DPRST'];
  $insertsql_a.=",L12_FW2PSTN_AUTH_MODE";
  $insertsql2_a.="','".$values['L12_FW2PSTN_AUTH_MODE'];
  $insertsql_a.=",L12_FW_TO_PSTN_PASSWD";
  $insertsql2_a.="','".$values['L12_FW_TO_PSTN_PASSWD'];
  $insertsql_a.=",LINE12_OUT_INTERVAL";
  $insertsql2_a.="','".$values['LINE12_OUT_INTERVAL'];
  
  $insertsql_a.=",L12_SMS_SENDER";
  $insertsql2_a.="','".$values['L12_SMS_SENDER'];
  $insertsql_a.=",L12_SMS_SERVER";
  $insertsql2_a.="','".$values['L12_SMS_SERVER'];
  $insertsql_a.=",L12_SMS_PORT";
  $insertsql2_a.="','".$values['L12_SMS_PORT'];
  $insertsql_a.=",L12_SMS_CLI_ID";
  $insertsql2_a.="','".$values['L12_SMS_CLI_ID'];
  $insertsql_a.=",L12_SMS_CLI_PASSWD";
  $insertsql2_a.="','".$values['L12_SMS_CLI_PASSWD'];
  $insertsql_a.=",LINE12_SMS_VALIDITY_TIME";
  $insertsql2_a.="','".$values['LINE12_SMS_VALIDITY_TIME'];
  $insertsql_a.=",L12_DISABLE_SMS_ACK";
  $insertsql2_a.="','".$values['L12_DISABLE_SMS_ACK'];
  $insertsql_a.=",L12_DISABLE_IN";
  $insertsql2_a.="','".$values['L12_DISABLE_IN'];
  $insertsql_a.=",L12_FW_NUM_TO_VOIP";
  $insertsql2_a.="','".$values['L12_FW_NUM_TO_VOIP'];
  $insertsql_a.=",L12_V_DIGIT_MAP";
  $insertsql2_a.="','".$values['L12_V_DIGIT_MAP'];
  $insertsql_a.=",L12_FW2VOIP_AUTH_MODE";
  $insertsql2_a.="','".$values['L12_FW2VOIP_AUTH_MODE'];
  $insertsql_a.=",L12_FW_TO_VOIP_PASSWD";
  $insertsql2_a.="','".$values['L12_FW_TO_VOIP_PASSWD'];
  $insertsql_a.=",L12_GROUP_MODE";
  $insertsql2_a.="','".$values['L12_GROUP_MODE'];
  $insertsql_a.=",L12_GSM_FW_MODE";
  $insertsql2_a.="','".$values['L12_GSM_FW_MODE'];
  $insertsql_a.=",L12_PARTNER_SVR";
  $insertsql2_a.="','".$values['L12_PARTNER_SVR'];
  $insertsql_a.=",L12_GROUP_SVR";
  $insertsql2_a.="','".$values['L12_GROUP_SVR'];
  $insertsql_a.=",L12_GSM_NUMBER";
  $insertsql2_a.="','".$values['L12_GSM_NUMBER'];
 
  
  $insertsql_a.=",L13_DISABLE_OUT";
  $insertsql2_a.="','".$values['L13_DISABLE_OUT'];
  $insertsql_a.=",L13_FW_NUM_TO_PSTN";
  $insertsql2_a.="','".$values['L13_FW_NUM_TO_PSTN'];
  $insertsql_a.=",L13_P_DIGIT_MAP";
  $insertsql2_a.="','".$values['L13_P_DIGIT_MAP'];
  $insertsql_a.=",LINE13_P_DPRST";
  $insertsql2_a.="','".$values['LINE13_P_DPRST'];
  $insertsql_a.=",L13_FW2PSTN_AUTH_MODE";
  $insertsql2_a.="','".$values['L13_FW2PSTN_AUTH_MODE'];
  $insertsql_a.=",L13_FW_TO_PSTN_PASSWD";
  $insertsql2_a.="','".$values['L13_FW_TO_PSTN_PASSWD'];
  $insertsql_a.=",LINE13_OUT_INTERVAL";
  $insertsql2_a.="','".$values['LINE13_OUT_INTERVAL'];
  
  $insertsql_a.=",L13_SMS_SENDER";
  $insertsql2_a.="','".$values['L13_SMS_SENDER'];
  $insertsql_a.=",L13_SMS_SERVER";
  $insertsql2_a.="','".$values['L13_SMS_SERVER'];
  $insertsql_a.=",L13_SMS_PORT";
  $insertsql2_a.="','".$values['L13_SMS_PORT'];
  $insertsql_a.=",L13_SMS_CLI_ID";
  $insertsql2_a.="','".$values['L13_SMS_CLI_ID'];
  $insertsql_a.=",L13_SMS_CLI_PASSWD";
  $insertsql2_a.="','".$values['L13_SMS_CLI_PASSWD'];
  $insertsql_a.=",LINE13_SMS_VALIDITY_TIME";
  $insertsql2_a.="','".$values['LINE13_SMS_VALIDITY_TIME'];
  $insertsql_a.=",L13_DISABLE_SMS_ACK";
  $insertsql2_a.="','".$values['L13_DISABLE_SMS_ACK'];
  $insertsql_a.=",L13_DISABLE_IN";
  $insertsql2_a.="','".$values['L13_DISABLE_IN'];
  $insertsql_a.=",L13_FW_NUM_TO_VOIP";
  $insertsql2_a.="','".$values['L13_FW_NUM_TO_VOIP'];
  $insertsql_a.=",L13_V_DIGIT_MAP";
  $insertsql2_a.="','".$values['L13_V_DIGIT_MAP'];
  $insertsql_a.=",L13_FW2VOIP_AUTH_MODE";
  $insertsql2_a.="','".$values['L13_FW2VOIP_AUTH_MODE'];
  $insertsql_a.=",L13_FW_TO_VOIP_PASSWD";
  $insertsql2_a.="','".$values['L13_FW_TO_VOIP_PASSWD'];
  $insertsql_a.=",L13_GROUP_MODE";
  $insertsql2_a.="','".$values['L13_GROUP_MODE'];
  $insertsql_a.=",L13_GSM_FW_MODE";
  $insertsql2_a.="','".$values['L13_GSM_FW_MODE'];
  $insertsql_a.=",L13_PARTNER_SVR";
  $insertsql2_a.="','".$values['L13_PARTNER_SVR'];
  $insertsql_a.=",L13_GROUP_SVR";
  $insertsql2_a.="','".$values['L13_GROUP_SVR'];
  $insertsql_a.=",L13_GSM_NUMBER";
  $insertsql2_a.="','".$values['L13_GSM_NUMBER'];

  
  $insertsql_a.=",L14_DISABLE_OUT";
  $insertsql2_a.="','".$values['L14_DISABLE_OUT'];
  $insertsql_a.=",L14_FW_NUM_TO_PSTN";
  $insertsql2_a.="','".$values['L14_FW_NUM_TO_PSTN'];
  $insertsql_a.=",L14_P_DIGIT_MAP";
  $insertsql2_a.="','".$values['L14_P_DIGIT_MAP'];
  $insertsql_a.=",LINE14_P_DPRST";
  $insertsql2_a.="','".$values['LINE14_P_DPRST'];
  $insertsql_a.=",L14_FW2PSTN_AUTH_MODE";
  $insertsql2_a.="','".$values['L14_FW2PSTN_AUTH_MODE'];
  $insertsql_a.=",L14_FW_TO_PSTN_PASSWD";
  $insertsql2_a.="','".$values['L14_FW_TO_PSTN_PASSWD'];
  $insertsql_a.=",LINE14_OUT_INTERVAL";
  $insertsql2_a.="','".$values['LINE14_OUT_INTERVAL'];
  
  $insertsql_a.=",L14_SMS_SENDER";
  $insertsql2_a.="','".$values['L14_SMS_SENDER'];
  $insertsql_a.=",L14_SMS_SERVER";
  $insertsql2_a.="','".$values['L14_SMS_SERVER'];
  $insertsql_a.=",L14_SMS_PORT";
  $insertsql2_a.="','".$values['L14_SMS_PORT'];
  $insertsql_a.=",L14_SMS_CLI_ID";
  $insertsql2_a.="','".$values['L14_SMS_CLI_ID'];
  $insertsql_a.=",L14_SMS_CLI_PASSWD";
  $insertsql2_a.="','".$values['L14_SMS_CLI_PASSWD'];
  $insertsql_a.=",LINE14_SMS_VALIDITY_TIME";
  $insertsql2_a.="','".$values['LINE14_SMS_VALIDITY_TIME'];
  $insertsql_a.=",L14_DISABLE_SMS_ACK";
  $insertsql2_a.="','".$values['L14_DISABLE_SMS_ACK'];
  $insertsql_a.=",L14_DISABLE_IN";
  $insertsql2_a.="','".$values['L14_DISABLE_IN'];
  $insertsql_a.=",L14_FW_NUM_TO_VOIP";
  $insertsql2_a.="','".$values['L14_FW_NUM_TO_VOIP'];
  $insertsql_a.=",L14_V_DIGIT_MAP";
  $insertsql2_a.="','".$values['L14_V_DIGIT_MAP'];
  $insertsql_a.=",L14_FW2VOIP_AUTH_MODE";
  $insertsql2_a.="','".$values['L14_FW2VOIP_AUTH_MODE'];
  $insertsql_a.=",L14_FW_TO_VOIP_PASSWD";
  $insertsql2_a.="','".$values['L14_FW_TO_VOIP_PASSWD'];
  $insertsql_a.=",L14_GROUP_MODE";
  $insertsql2_a.="','".$values['L14_GROUP_MODE'];
  $insertsql_a.=",L14_GSM_FW_MODE";
  $insertsql2_a.="','".$values['L14_GSM_FW_MODE'];
  $insertsql_a.=",L14_PARTNER_SVR";
  $insertsql2_a.="','".$values['L14_PARTNER_SVR'];
  $insertsql_a.=",L14_GROUP_SVR";
  $insertsql2_a.="','".$values['L14_GROUP_SVR'];
  $insertsql_a.=",L14_GSM_NUMBER";
  $insertsql2_a.="','".$values['L14_GSM_NUMBER'];
 
  
  $insertsql_a.=",L15_DISABLE_OUT";
  $insertsql2_a.="','".$values['L15_DISABLE_OUT'];
  $insertsql_a.=",L15_FW_NUM_TO_PSTN";
  $insertsql2_a.="','".$values['L15_FW_NUM_TO_PSTN'];
  $insertsql_a.=",L15_P_DIGIT_MAP";
  $insertsql2_a.="','".$values['L15_P_DIGIT_MAP'];
  $insertsql_a.=",LINE15_P_DPRST";
  $insertsql2_a.="','".$values['LINE15_P_DPRST'];
  $insertsql_a.=",L15_FW2PSTN_AUTH_MODE";
  $insertsql2_a.="','".$values['L15_FW2PSTN_AUTH_MODE'];
  $insertsql_a.=",L15_FW_TO_PSTN_PASSWD";
  $insertsql2_a.="','".$values['L15_FW_TO_PSTN_PASSWD'];
  $insertsql_a.=",LINE15_OUT_INTERVAL";
  $insertsql2_a.="','".$values['LINE15_OUT_INTERVAL'];
  
  $insertsql_a.=",L15_SMS_SENDER";
  $insertsql2_a.="','".$values['L15_SMS_SENDER'];
  $insertsql_a.=",L15_SMS_SERVER";
  $insertsql2_a.="','".$values['L15_SMS_SERVER'];
  $insertsql_a.=",L15_SMS_PORT";
  $insertsql2_a.="','".$values['L15_SMS_PORT'];
  $insertsql_a.=",L15_SMS_CLI_ID";
  $insertsql2_a.="','".$values['L15_SMS_CLI_ID'];
  $insertsql_a.=",L15_SMS_CLI_PASSWD";
  $insertsql2_a.="','".$values['L15_SMS_CLI_PASSWD'];
  $insertsql_a.=",LINE15_SMS_VALIDITY_TIME";
  $insertsql2_a.="','".$values['LINE15_SMS_VALIDITY_TIME'];
  $insertsql_a.=",L15_DISABLE_SMS_ACK";
  $insertsql2_a.="','".$values['L15_DISABLE_SMS_ACK'];
  $insertsql_a.=",L15_DISABLE_IN";
  $insertsql2_a.="','".$values['L15_DISABLE_IN'];
  $insertsql_a.=",L15_FW_NUM_TO_VOIP";
  $insertsql2_a.="','".$values['L15_FW_NUM_TO_VOIP'];
  $insertsql_a.=",L15_V_DIGIT_MAP";
  $insertsql2_a.="','".$values['L15_V_DIGIT_MAP'];
  $insertsql_a.=",L15_FW2VOIP_AUTH_MODE";
  $insertsql2_a.="','".$values['L15_FW2VOIP_AUTH_MODE'];
  $insertsql_a.=",L15_FW_TO_VOIP_PASSWD";
  $insertsql2_a.="','".$values['L15_FW_TO_VOIP_PASSWD'];
  $insertsql_a.=",L15_GROUP_MODE";
  $insertsql2_a.="','".$values['L15_GROUP_MODE'];
  $insertsql_a.=",L15_GSM_FW_MODE";
  $insertsql2_a.="','".$values['L15_GSM_FW_MODE'];
  $insertsql_a.=",L15_PARTNER_SVR";
  $insertsql2_a.="','".$values['L15_PARTNER_SVR'];
  $insertsql_a.=",L15_GROUP_SVR";
  $insertsql2_a.="','".$values['L15_GROUP_SVR'];
  $insertsql_a.=",L15_GSM_NUMBER";
  $insertsql2_a.="','".$values['L15_GSM_NUMBER'];
 
  
  $insertsql_a.=",L16_DISABLE_OUT";
  $insertsql2_a.="','".$values['L16_DISABLE_OUT'];
  $insertsql_a.=",L16_FW_NUM_TO_PSTN";
  $insertsql2_a.="','".$values['L16_FW_NUM_TO_PSTN'];
  $insertsql_a.=",L16_P_DIGIT_MAP";
  $insertsql2_a.="','".$values['L16_P_DIGIT_MAP'];
  $insertsql_a.=",LINE16_P_DPRST";
  $insertsql2_a.="','".$values['LINE16_P_DPRST'];
  $insertsql_a.=",L16_FW2PSTN_AUTH_MODE";
  $insertsql2_a.="','".$values['L16_FW2PSTN_AUTH_MODE'];
  $insertsql_a.=",L16_FW_TO_PSTN_PASSWD";
  $insertsql2_a.="','".$values['L16_FW_TO_PSTN_PASSWD'];
  $insertsql_a.=",LINE16_OUT_INTERVAL";
  $insertsql2_a.="','".$values['LINE16_OUT_INTERVAL'];
  
  $insertsql_a.=",L17_SMS_SENDER";
  $insertsql2_a.="','".$values['L17_SMS_SENDER'];
  $insertsql_a.=",L17_SMS_SERVER";
  $insertsql2_a.="','".$values['L17_SMS_SERVER'];
  $insertsql_a.=",L17_SMS_PORT";
  $insertsql2_a.="','".$values['L17_SMS_PORT'];
  $insertsql_a.=",L17_SMS_CLI_ID";
  $insertsql2_a.="','".$values['L17_SMS_CLI_ID'];
  $insertsql_a.=",L17_SMS_CLI_PASSWD";
  $insertsql2_a.="','".$values['L17_SMS_CLI_PASSWD'];
  $insertsql_a.=",LINE17_SMS_VALIDITY_TIME";
  $insertsql2_a.="','".$values['LINE17_SMS_VALIDITY_TIME'];
  $insertsql_a.=",L17_DISABLE_SMS_ACK";
  $insertsql2_a.="','".$values['L17_DISABLE_SMS_ACK'];
  $insertsql_a.=",L17_DISABLE_IN";
  $insertsql2_a.="','".$values['L17_DISABLE_IN'];
  $insertsql_a.=",L17_FW_NUM_TO_VOIP";
  $insertsql2_a.="','".$values['L17_FW_NUM_TO_VOIP'];
  $insertsql_a.=",L17_V_DIGIT_MAP";
  $insertsql2_a.="','".$values['L17_V_DIGIT_MAP'];
  $insertsql_a.=",L17_FW2VOIP_AUTH_MODE";
  $insertsql2_a.="','".$values['L17_FW2VOIP_AUTH_MODE'];
  $insertsql_a.=",L17_FW_TO_VOIP_PASSWD";
  $insertsql2_a.="','".$values['L17_FW_TO_VOIP_PASSWD'];
  $insertsql_a.=",L17_GROUP_MODE";
  $insertsql2_a.="','".$values['L17_GROUP_MODE'];
  $insertsql_a.=",L17_GSM_FW_MODE";
  $insertsql2_a.="','".$values['L17_GSM_FW_MODE'];
  $insertsql_a.=",L17_PARTNER_SVR";
  $insertsql2_a.="','".$values['L17_PARTNER_SVR'];
  $insertsql_a.=",L17_GROUP_SVR";
  $insertsql2_a.="','".$values['L17_GROUP_SVR'];
  $insertsql_a.=",L17_GSM_NUMBER";
  $insertsql2_a.="','".$values['L17_GSM_NUMBER'];
  
  $insertsql_a.=",L18_SMS_SENDER";
  $insertsql2_a.="','".$values['L18_SMS_SENDER'];
  $insertsql_a.=",L18_SMS_SERVER";
  $insertsql2_a.="','".$values['L18_SMS_SERVER'];
  $insertsql_a.=",L18_SMS_PORT";
  $insertsql2_a.="','".$values['L18_SMS_PORT'];
  $insertsql_a.=",L18_SMS_CLI_ID";
  $insertsql2_a.="','".$values['L18_SMS_CLI_ID'];
  $insertsql_a.=",L18_SMS_CLI_PASSWD";
  $insertsql2_a.="','".$values['L18_SMS_CLI_PASSWD'];
  $insertsql_a.=",LINE18_SMS_VALIDITY_TIME";
  $insertsql2_a.="','".$values['LINE18_SMS_VALIDITY_TIME'];
  $insertsql_a.=",L18_DISABLE_SMS_ACK";
  $insertsql2_a.="','".$values['L18_DISABLE_SMS_ACK'];
  $insertsql_a.=",L18_DISABLE_IN";
  $insertsql2_a.="','".$values['L18_DISABLE_IN'];
  $insertsql_a.=",L18_FW_NUM_TO_VOIP";
  $insertsql2_a.="','".$values['L18_FW_NUM_TO_VOIP'];
  $insertsql_a.=",L18_V_DIGIT_MAP";
  $insertsql2_a.="','".$values['L18_V_DIGIT_MAP'];
  $insertsql_a.=",L18_FW2VOIP_AUTH_MODE";
  $insertsql2_a.="','".$values['L18_FW2VOIP_AUTH_MODE'];
  $insertsql_a.=",L18_FW_TO_VOIP_PASSWD";
  $insertsql2_a.="','".$values['L18_FW_TO_VOIP_PASSWD'];
  $insertsql_a.=",L18_GROUP_MODE";
  $insertsql2_a.="','".$values['L18_GROUP_MODE'];
  $insertsql_a.=",L18_GSM_FW_MODE";
  $insertsql2_a.="','".$values['L18_GSM_FW_MODE'];
  $insertsql_a.=",L18_PARTNER_SVR";
  $insertsql2_a.="','".$values['L18_PARTNER_SVR'];
  $insertsql_a.=",L18_GROUP_SVR";
  $insertsql2_a.="','".$values['L18_GROUP_SVR'];
  $insertsql_a.=",L18_GSM_NUMBER";
  $insertsql2_a.="','".$values['L18_GSM_NUMBER'];
  
  $insertsql_a.=",L19_SMS_SENDER";
  $insertsql2_a.="','".$values['L19_SMS_SENDER'];
  $insertsql_a.=",L19_SMS_SERVER";
  $insertsql2_a.="','".$values['L19_SMS_SERVER'];
  $insertsql_a.=",L19_SMS_PORT";
  $insertsql2_a.="','".$values['L19_SMS_PORT'];
  $insertsql_a.=",L19_SMS_CLI_ID";
  $insertsql2_a.="','".$values['L19_SMS_CLI_ID'];
  $insertsql_a.=",L19_SMS_CLI_PASSWD";
  $insertsql2_a.="','".$values['L19_SMS_CLI_PASSWD'];
  $insertsql_a.=",LINE19_SMS_VALIDITY_TIME";
  $insertsql2_a.="','".$values['LINE19_SMS_VALIDITY_TIME'];
  $insertsql_a.=",L19_DISABLE_SMS_ACK";
  $insertsql2_a.="','".$values['L19_DISABLE_SMS_ACK'];
  $insertsql_a.=",L19_DISABLE_IN";
  $insertsql2_a.="','".$values['L19_DISABLE_IN'];
  $insertsql_a.=",L19_FW_NUM_TO_VOIP";
  $insertsql2_a.="','".$values['L19_FW_NUM_TO_VOIP'];
  $insertsql_a.=",L19_V_DIGIT_MAP";
  $insertsql2_a.="','".$values['L19_V_DIGIT_MAP'];
  $insertsql_a.=",L19_FW2VOIP_AUTH_MODE";
  $insertsql2_a.="','".$values['L19_FW2VOIP_AUTH_MODE'];
  $insertsql_a.=",L19_FW_TO_VOIP_PASSWD";
  $insertsql2_a.="','".$values['L19_FW_TO_VOIP_PASSWD'];
  $insertsql_a.=",L19_GROUP_MODE";
  $insertsql2_a.="','".$values['L19_GROUP_MODE'];
  $insertsql_a.=",L19_GSM_FW_MODE";
  $insertsql2_a.="','".$values['L19_GSM_FW_MODE'];
  $insertsql_a.=",L19_PARTNER_SVR";
  $insertsql2_a.="','".$values['L19_PARTNER_SVR'];
  $insertsql_a.=",L19_GROUP_SVR";
  $insertsql2_a.="','".$values['L19_GROUP_SVR'];
  $insertsql_a.=",L19_GSM_NUMBER";
  $insertsql2_a.="','".$values['L19_GSM_NUMBER'];
  
  $insertsql_a.=",L20_SMS_SENDER";
  $insertsql2_a.="','".$values['L20_SMS_SENDER'];
  $insertsql_a.=",L20_SMS_SERVER";
  $insertsql2_a.="','".$values['L20_SMS_SERVER'];
  $insertsql_a.=",L20_SMS_PORT";
  $insertsql2_a.="','".$values['L20_SMS_PORT'];
  $insertsql_a.=",L20_SMS_CLI_ID";
  $insertsql2_a.="','".$values['L20_SMS_CLI_ID'];
  $insertsql_a.=",L20_SMS_CLI_PASSWD";
  $insertsql2_a.="','".$values['L20_SMS_CLI_PASSWD'];
  $insertsql_a.=",LINE20_SMS_VALIDITY_TIME";
  $insertsql2_a.="','".$values['LINE20_SMS_VALIDITY_TIME'];
  $insertsql_a.=",L20_DISABLE_SMS_ACK";
  $insertsql2_a.="','".$values['L20_DISABLE_SMS_ACK'];
  $insertsql_a.=",L20_DISABLE_IN";
  $insertsql2_a.="','".$values['L20_DISABLE_IN'];
  $insertsql_a.=",L20_FW_NUM_TO_VOIP";
  $insertsql2_a.="','".$values['L20_FW_NUM_TO_VOIP'];
  $insertsql_a.=",L20_V_DIGIT_MAP";
  $insertsql2_a.="','".$values['L20_V_DIGIT_MAP'];
  $insertsql_a.=",L20_FW2VOIP_AUTH_MODE";
  $insertsql2_a.="','".$values['L20_FW2VOIP_AUTH_MODE'];
  $insertsql_a.=",L20_FW_TO_VOIP_PASSWD";
  $insertsql2_a.="','".$values['L20_FW_TO_VOIP_PASSWD'];
  $insertsql_a.=",L20_GROUP_MODE";
  $insertsql2_a.="','".$values['L20_GROUP_MODE'];
  $insertsql_a.=",L20_GSM_FW_MODE";
  $insertsql2_a.="','".$values['L20_GSM_FW_MODE'];
  $insertsql_a.=",L20_PARTNER_SVR";
  $insertsql2_a.="','".$values['L20_PARTNER_SVR'];
  $insertsql_a.=",L20_GROUP_SVR";
  $insertsql2_a.="','".$values['L20_GROUP_SVR'];
  $insertsql_a.=",L20_GSM_NUMBER";
  $insertsql2_a.="','".$values['L20_GSM_NUMBER'];
  
  $insertsql_a.=",L21_SMS_SENDER";
  $insertsql2_a.="','".$values['L21_SMS_SENDER'];
  $insertsql_a.=",L21_SMS_SERVER";
  $insertsql2_a.="','".$values['L21_SMS_SERVER'];
  $insertsql_a.=",L21_SMS_PORT";
  $insertsql2_a.="','".$values['L21_SMS_PORT'];
  $insertsql_a.=",L21_SMS_CLI_ID";
  $insertsql2_a.="','".$values['L21_SMS_CLI_ID'];
  $insertsql_a.=",L21_SMS_CLI_PASSWD";
  $insertsql2_a.="','".$values['L21_SMS_CLI_PASSWD'];
  $insertsql_a.=",LINE21_SMS_VALIDITY_TIME";
  $insertsql2_a.="','".$values['LINE21_SMS_VALIDITY_TIME'];
  $insertsql_a.=",L21_DISABLE_SMS_ACK";
  $insertsql2_a.="','".$values['L21_DISABLE_SMS_ACK'];
  $insertsql_a.=",L21_DISABLE_IN";
  $insertsql2_a.="','".$values['L21_DISABLE_IN'];
  $insertsql_a.=",L21_FW_NUM_TO_VOIP";
  $insertsql2_a.="','".$values['L21_FW_NUM_TO_VOIP'];
  $insertsql_a.=",L21_V_DIGIT_MAP";
  $insertsql2_a.="','".$values['L21_V_DIGIT_MAP'];
  $insertsql_a.=",L21_FW2VOIP_AUTH_MODE";
  $insertsql2_a.="','".$values['L21_FW2VOIP_AUTH_MODE'];
  $insertsql_a.=",L21_FW_TO_VOIP_PASSWD";
  $insertsql2_a.="','".$values['L21_FW_TO_VOIP_PASSWD'];
  $insertsql_a.=",L21_GROUP_MODE";
  $insertsql2_a.="','".$values['L21_GROUP_MODE'];
  $insertsql_a.=",L21_GSM_FW_MODE";
  $insertsql2_a.="','".$values['L21_GSM_FW_MODE'];
  $insertsql_a.=",L21_PARTNER_SVR";
  $insertsql2_a.="','".$values['L21_PARTNER_SVR'];
  $insertsql_a.=",L21_GROUP_SVR";
  $insertsql2_a.="','".$values['L21_GROUP_SVR'];
  $insertsql_a.=",L21_GSM_NUMBER";
  $insertsql2_a.="','".$values['L21_GSM_NUMBER'];
  
  $insertsql_a.=",L22_SMS_SENDER";
  $insertsql2_a.="','".$values['L22_SMS_SENDER'];
  $insertsql_a.=",L22_SMS_SERVER";
  $insertsql2_a.="','".$values['L22_SMS_SERVER'];
  $insertsql_a.=",L22_SMS_PORT";
  $insertsql2_a.="','".$values['L22_SMS_PORT'];
  $insertsql_a.=",L22_SMS_CLI_ID";
  $insertsql2_a.="','".$values['L22_SMS_CLI_ID'];
  $insertsql_a.=",L22_SMS_CLI_PASSWD";
  $insertsql2_a.="','".$values['L22_SMS_CLI_PASSWD'];
  $insertsql_a.=",LINE22_SMS_VALIDITY_TIME";
  $insertsql2_a.="','".$values['LINE22_SMS_VALIDITY_TIME'];
  $insertsql_a.=",L22_DISABLE_SMS_ACK";
  $insertsql2_a.="','".$values['L22_DISABLE_SMS_ACK'];
  $insertsql_a.=",L22_DISABLE_IN";
  $insertsql2_a.="','".$values['L22_DISABLE_IN'];
  $insertsql_a.=",L22_FW_NUM_TO_VOIP";
  $insertsql2_a.="','".$values['L22_FW_NUM_TO_VOIP'];
  $insertsql_a.=",L22_V_DIGIT_MAP";
  $insertsql2_a.="','".$values['L22_V_DIGIT_MAP'];
  $insertsql_a.=",L22_FW2VOIP_AUTH_MODE";
  $insertsql2_a.="','".$values['L22_FW2VOIP_AUTH_MODE'];
  $insertsql_a.=",L22_FW_TO_VOIP_PASSWD";
  $insertsql2_a.="','".$values['L22_FW_TO_VOIP_PASSWD'];
  $insertsql_a.=",L22_GROUP_MODE";
  $insertsql2_a.="','".$values['L22_GROUP_MODE'];
  $insertsql_a.=",L22_GSM_FW_MODE";
  $insertsql2_a.="','".$values['L22_GSM_FW_MODE'];
  $insertsql_a.=",L22_PARTNER_SVR";
  $insertsql2_a.="','".$values['L22_PARTNER_SVR'];
  $insertsql_a.=",L22_GROUP_SVR";
  $insertsql2_a.="','".$values['L22_GROUP_SVR'];
  $insertsql_a.=",L22_GSM_NUMBER";
  $insertsql2_a.="','".$values['L22_GSM_NUMBER'];
  
  $insertsql_a.=",L23_SMS_SENDER";
  $insertsql2_a.="','".$values['L23_SMS_SENDER'];
  $insertsql_a.=",L23_SMS_SERVER";
  $insertsql2_a.="','".$values['L23_SMS_SERVER'];
  $insertsql_a.=",L23_SMS_PORT";
  $insertsql2_a.="','".$values['L23_SMS_PORT'];
  $insertsql_a.=",L23_SMS_CLI_ID";
  $insertsql2_a.="','".$values['L23_SMS_CLI_ID'];
  $insertsql_a.=",L23_SMS_CLI_PASSWD";
  $insertsql2_a.="','".$values['L23_SMS_CLI_PASSWD'];
  $insertsql_a.=",LINE23_SMS_VALIDITY_TIME";
  $insertsql2_a.="','".$values['LINE23_SMS_VALIDITY_TIME'];
  $insertsql_a.=",L23_DISABLE_SMS_ACK";
  $insertsql2_a.="','".$values['L23_DISABLE_SMS_ACK'];
  $insertsql_a.=",L23_DISABLE_IN";
  $insertsql2_a.="','".$values['L23_DISABLE_IN'];
  $insertsql_a.=",L23_FW_NUM_TO_VOIP";
  $insertsql2_a.="','".$values['L23_FW_NUM_TO_VOIP'];
  $insertsql_a.=",L23_V_DIGIT_MAP";
  $insertsql2_a.="','".$values['L23_V_DIGIT_MAP'];
  $insertsql_a.=",L23_FW2VOIP_AUTH_MODE";
  $insertsql2_a.="','".$values['L23_FW2VOIP_AUTH_MODE'];
  $insertsql_a.=",L23_FW_TO_VOIP_PASSWD";
  $insertsql2_a.="','".$values['L23_FW_TO_VOIP_PASSWD'];
  $insertsql_a.=",L23_GROUP_MODE";
  $insertsql2_a.="','".$values['L23_GROUP_MODE'];
  $insertsql_a.=",L23_GSM_FW_MODE";
  $insertsql2_a.="','".$values['L23_GSM_FW_MODE'];
  $insertsql_a.=",L23_PARTNER_SVR";
  $insertsql2_a.="','".$values['L23_PARTNER_SVR'];
  $insertsql_a.=",L23_GROUP_SVR";
  $insertsql2_a.="','".$values['L23_GROUP_SVR'];
  $insertsql_a.=",L23_GSM_NUMBER";
  $insertsql2_a.="','".$values['L23_GSM_NUMBER'];
  
  $insertsql_a.=",L24_SMS_SENDER";
  $insertsql2_a.="','".$values['L24_SMS_SENDER'];
  $insertsql_a.=",L24_SMS_SERVER";
  $insertsql2_a.="','".$values['L24_SMS_SERVER'];
  $insertsql_a.=",L24_SMS_PORT";
  $insertsql2_a.="','".$values['L24_SMS_PORT'];
  $insertsql_a.=",L24_SMS_CLI_ID";
  $insertsql2_a.="','".$values['L24_SMS_CLI_ID'];
  $insertsql_a.=",L24_SMS_CLI_PASSWD";
  $insertsql2_a.="','".$values['L24_SMS_CLI_PASSWD'];
  $insertsql_a.=",LINE24_SMS_VALIDITY_TIME";
  $insertsql2_a.="','".$values['LINE24_SMS_VALIDITY_TIME'];
  $insertsql_a.=",L24_DISABLE_SMS_ACK";
  $insertsql2_a.="','".$values['L24_DISABLE_SMS_ACK'];
  $insertsql_a.=",L24_DISABLE_IN";
  $insertsql2_a.="','".$values['L24_DISABLE_IN'];
  $insertsql_a.=",L24_FW_NUM_TO_VOIP";
  $insertsql2_a.="','".$values['L24_FW_NUM_TO_VOIP'];
  $insertsql_a.=",L24_V_DIGIT_MAP";
  $insertsql2_a.="','".$values['L24_V_DIGIT_MAP'];
  $insertsql_a.=",L24_FW2VOIP_AUTH_MODE";
  $insertsql2_a.="','".$values['L24_FW2VOIP_AUTH_MODE'];
  $insertsql_a.=",L24_FW_TO_VOIP_PASSWD";
  $insertsql2_a.="','".$values['L24_FW_TO_VOIP_PASSWD'];
  $insertsql_a.=",L24_GROUP_MODE";
  $insertsql2_a.="','".$values['L24_GROUP_MODE'];
  $insertsql_a.=",L24_GSM_FW_MODE";
  $insertsql2_a.="','".$values['L24_GSM_FW_MODE'];
  $insertsql_a.=",L24_PARTNER_SVR";
  $insertsql2_a.="','".$values['L24_PARTNER_SVR'];
  $insertsql_a.=",L24_GROUP_SVR";
  $insertsql2_a.="','".$values['L24_GROUP_SVR'];
  $insertsql_a.=",L24_GSM_NUMBER";
  $insertsql2_a.="','".$values['L24_GSM_NUMBER'];
  
  $insertsql_a.=",L25_SMS_SENDER";
  $insertsql2_a.="','".$values['L25_SMS_SENDER'];
  $insertsql_a.=",L25_SMS_SERVER";
  $insertsql2_a.="','".$values['L25_SMS_SERVER'];
  $insertsql_a.=",L25_SMS_PORT";
  $insertsql2_a.="','".$values['L25_SMS_PORT'];
  $insertsql_a.=",L25_SMS_CLI_ID";
  $insertsql2_a.="','".$values['L25_SMS_CLI_ID'];
  $insertsql_a.=",L25_SMS_CLI_PASSWD";
  $insertsql2_a.="','".$values['L25_SMS_CLI_PASSWD'];
  $insertsql_a.=",LINE25_SMS_VALIDITY_TIME";
  $insertsql2_a.="','".$values['LINE25_SMS_VALIDITY_TIME'];
  $insertsql_a.=",L25_DISABLE_SMS_ACK";
  $insertsql2_a.="','".$values['L25_DISABLE_SMS_ACK'];
  $insertsql_a.=",L25_DISABLE_IN";
  $insertsql2_a.="','".$values['L25_DISABLE_IN'];
  $insertsql_a.=",L25_FW_NUM_TO_VOIP";
  $insertsql2_a.="','".$values['L25_FW_NUM_TO_VOIP'];
  $insertsql_a.=",L25_V_DIGIT_MAP";
  $insertsql2_a.="','".$values['L25_V_DIGIT_MAP'];
  $insertsql_a.=",L25_FW2VOIP_AUTH_MODE";
  $insertsql2_a.="','".$values['L25_FW2VOIP_AUTH_MODE'];
  $insertsql_a.=",L25_FW_TO_VOIP_PASSWD";
  $insertsql2_a.="','".$values['L25_FW_TO_VOIP_PASSWD'];
  $insertsql_a.=",L25_GROUP_MODE";
  $insertsql2_a.="','".$values['L25_GROUP_MODE'];
  $insertsql_a.=",L25_GSM_FW_MODE";
  $insertsql2_a.="','".$values['L25_GSM_FW_MODE'];
  $insertsql_a.=",L25_PARTNER_SVR";
  $insertsql2_a.="','".$values['L25_PARTNER_SVR'];
  $insertsql_a.=",L25_GROUP_SVR";
  $insertsql2_a.="','".$values['L25_GROUP_SVR'];
  $insertsql_a.=",L25_GSM_NUMBER";
  $insertsql2_a.="','".$values['L25_GSM_NUMBER'];
  
  $insertsql_a.=",L26_SMS_SENDER";
  $insertsql2_a.="','".$values['L26_SMS_SENDER'];
  $insertsql_a.=",L26_SMS_SERVER";
  $insertsql2_a.="','".$values['L26_SMS_SERVER'];
  $insertsql_a.=",L26_SMS_PORT";
  $insertsql2_a.="','".$values['L26_SMS_PORT'];
  $insertsql_a.=",L26_SMS_CLI_ID";
  $insertsql2_a.="','".$values['L26_SMS_CLI_ID'];
  $insertsql_a.=",L26_SMS_CLI_PASSWD";
  $insertsql2_a.="','".$values['L26_SMS_CLI_PASSWD'];
  $insertsql_a.=",LINE26_SMS_VALIDITY_TIME";
  $insertsql2_a.="','".$values['LINE26_SMS_VALIDITY_TIME'];
  $insertsql_a.=",L26_DISABLE_SMS_ACK";
  $insertsql2_a.="','".$values['L26_DISABLE_SMS_ACK'];
  $insertsql_a.=",L26_DISABLE_IN";
  $insertsql2_a.="','".$values['L26_DISABLE_IN'];
  $insertsql_a.=",L26_FW_NUM_TO_VOIP";
  $insertsql2_a.="','".$values['L26_FW_NUM_TO_VOIP'];
  $insertsql_a.=",L26_V_DIGIT_MAP";
  $insertsql2_a.="','".$values['L26_V_DIGIT_MAP'];
  $insertsql_a.=",L26_FW2VOIP_AUTH_MODE";
  $insertsql2_a.="','".$values['L26_FW2VOIP_AUTH_MODE'];
  $insertsql_a.=",L26_FW_TO_VOIP_PASSWD";
  $insertsql2_a.="','".$values['L26_FW_TO_VOIP_PASSWD'];
  $insertsql_a.=",L26_GROUP_MODE";
  $insertsql2_a.="','".$values['L26_GROUP_MODE'];
  $insertsql_a.=",L26_GSM_FW_MODE";
  $insertsql2_a.="','".$values['L26_GSM_FW_MODE'];
  $insertsql_a.=",L26_PARTNER_SVR";
  $insertsql2_a.="','".$values['L26_PARTNER_SVR'];
  $insertsql_a.=",L26_GROUP_SVR";
  $insertsql2_a.="','".$values['L26_GROUP_SVR'];
  $insertsql_a.=",L26_GSM_NUMBER";
  $insertsql2_a.="','".$values['L26_GSM_NUMBER'];
  
  $insertsql_a.=",L27_SMS_SENDER";
  $insertsql2_a.="','".$values['L27_SMS_SENDER'];
  $insertsql_a.=",L27_SMS_SERVER";
  $insertsql2_a.="','".$values['L27_SMS_SERVER'];
  $insertsql_a.=",L27_SMS_PORT";
  $insertsql2_a.="','".$values['L27_SMS_PORT'];
  $insertsql_a.=",L27_SMS_CLI_ID";
  $insertsql2_a.="','".$values['L27_SMS_CLI_ID'];
  $insertsql_a.=",L27_SMS_CLI_PASSWD";
  $insertsql2_a.="','".$values['L27_SMS_CLI_PASSWD'];
  $insertsql_a.=",LINE27_SMS_VALIDITY_TIME";
  $insertsql2_a.="','".$values['LINE27_SMS_VALIDITY_TIME'];
  $insertsql_a.=",L27_DISABLE_SMS_ACK";
  $insertsql2_a.="','".$values['L27_DISABLE_SMS_ACK'];
  $insertsql_a.=",L27_DISABLE_IN";
  $insertsql2_a.="','".$values['L27_DISABLE_IN'];
  $insertsql_a.=",L27_FW_NUM_TO_VOIP";
  $insertsql2_a.="','".$values['L27_FW_NUM_TO_VOIP'];
  $insertsql_a.=",L27_V_DIGIT_MAP";
  $insertsql2_a.="','".$values['L27_V_DIGIT_MAP'];
  $insertsql_a.=",L27_FW2VOIP_AUTH_MODE";
  $insertsql2_a.="','".$values['L27_FW2VOIP_AUTH_MODE'];
  $insertsql_a.=",L27_FW_TO_VOIP_PASSWD";
  $insertsql2_a.="','".$values['L27_FW_TO_VOIP_PASSWD'];
  $insertsql_a.=",L27_GROUP_MODE";
  $insertsql2_a.="','".$values['L27_GROUP_MODE'];
  $insertsql_a.=",L27_GSM_FW_MODE";
  $insertsql2_a.="','".$values['L27_GSM_FW_MODE'];
  $insertsql_a.=",L27_PARTNER_SVR";
  $insertsql2_a.="','".$values['L27_PARTNER_SVR'];
  $insertsql_a.=",L27_GROUP_SVR";
  $insertsql2_a.="','".$values['L27_GROUP_SVR'];
  $insertsql_a.=",L27_GSM_NUMBER";
  $insertsql2_a.="','".$values['L27_GSM_NUMBER'];
  
  $insertsql_a.=",L28_SMS_SENDER";
  $insertsql2_a.="','".$values['L28_SMS_SENDER'];
  $insertsql_a.=",L28_SMS_SERVER";
  $insertsql2_a.="','".$values['L28_SMS_SERVER'];
  $insertsql_a.=",L28_SMS_PORT";
  $insertsql2_a.="','".$values['L28_SMS_PORT'];
  $insertsql_a.=",L28_SMS_CLI_ID";
  $insertsql2_a.="','".$values['L28_SMS_CLI_ID'];
  $insertsql_a.=",L28_SMS_CLI_PASSWD";
  $insertsql2_a.="','".$values['L28_SMS_CLI_PASSWD'];
  $insertsql_a.=",LINE28_SMS_VALIDITY_TIME";
  $insertsql2_a.="','".$values['LINE28_SMS_VALIDITY_TIME'];
  $insertsql_a.=",L28_DISABLE_SMS_ACK";
  $insertsql2_a.="','".$values['L28_DISABLE_SMS_ACK'];
  $insertsql_a.=",L28_DISABLE_IN";
  $insertsql2_a.="','".$values['L28_DISABLE_IN'];
  $insertsql_a.=",L28_FW_NUM_TO_VOIP";
  $insertsql2_a.="','".$values['L28_FW_NUM_TO_VOIP'];
  $insertsql_a.=",L28_V_DIGIT_MAP";
  $insertsql2_a.="','".$values['L28_V_DIGIT_MAP'];
  $insertsql_a.=",L28_FW2VOIP_AUTH_MODE";
  $insertsql2_a.="','".$values['L28_FW2VOIP_AUTH_MODE'];
  $insertsql_a.=",L28_FW_TO_VOIP_PASSWD";
  $insertsql2_a.="','".$values['L28_FW_TO_VOIP_PASSWD'];
  $insertsql_a.=",L28_GROUP_MODE";
  $insertsql2_a.="','".$values['L28_GROUP_MODE'];
  $insertsql_a.=",L28_GSM_FW_MODE";
  $insertsql2_a.="','".$values['L28_GSM_FW_MODE'];
  $insertsql_a.=",L28_PARTNER_SVR";
  $insertsql2_a.="','".$values['L28_PARTNER_SVR'];
  $insertsql_a.=",L28_GROUP_SVR";
  $insertsql2_a.="','".$values['L28_GROUP_SVR'];
  $insertsql_a.=",L28_GSM_NUMBER";
  $insertsql2_a.="','".$values['L28_GSM_NUMBER'];
  
  $insertsql_a.=",L29_SMS_SENDER";
  $insertsql2_a.="','".$values['L29_SMS_SENDER'];
  $insertsql_a.=",L29_SMS_SERVER";
  $insertsql2_a.="','".$values['L29_SMS_SERVER'];
  $insertsql_a.=",L29_SMS_PORT";
  $insertsql2_a.="','".$values['L29_SMS_PORT'];
  $insertsql_a.=",L29_SMS_CLI_ID";
  $insertsql2_a.="','".$values['L29_SMS_CLI_ID'];
  $insertsql_a.=",L29_SMS_CLI_PASSWD";
  $insertsql2_a.="','".$values['L29_SMS_CLI_PASSWD'];
  $insertsql_a.=",LINE29_SMS_VALIDITY_TIME";
  $insertsql2_a.="','".$values['LINE29_SMS_VALIDITY_TIME'];
  $insertsql_a.=",L29_DISABLE_SMS_ACK";
  $insertsql2_a.="','".$values['L29_DISABLE_SMS_ACK'];
  $insertsql_a.=",L29_DISABLE_IN";
  $insertsql2_a.="','".$values['L29_DISABLE_IN'];
  $insertsql_a.=",L29_FW_NUM_TO_VOIP";
  $insertsql2_a.="','".$values['L29_FW_NUM_TO_VOIP'];
  $insertsql_a.=",L29_V_DIGIT_MAP";
  $insertsql2_a.="','".$values['L29_V_DIGIT_MAP'];
  $insertsql_a.=",L29_FW2VOIP_AUTH_MODE";
  $insertsql2_a.="','".$values['L29_FW2VOIP_AUTH_MODE'];
  $insertsql_a.=",L29_FW_TO_VOIP_PASSWD";
  $insertsql2_a.="','".$values['L29_FW_TO_VOIP_PASSWD'];
  $insertsql_a.=",L29_GROUP_MODE";
  $insertsql2_a.="','".$values['L29_GROUP_MODE'];
  $insertsql_a.=",L29_GSM_FW_MODE";
  $insertsql2_a.="','".$values['L29_GSM_FW_MODE'];
  $insertsql_a.=",L29_PARTNER_SVR";
  $insertsql2_a.="','".$values['L29_PARTNER_SVR'];
  $insertsql_a.=",L29_GROUP_SVR";
  $insertsql2_a.="','".$values['L29_GROUP_SVR'];
  $insertsql_a.=",L29_GSM_NUMBER";
  $insertsql2_a.="','".$values['L29_GSM_NUMBER'];
  
  $insertsql_a.=",L30_SMS_SENDER";
  $insertsql2_a.="','".$values['L30_SMS_SENDER'];
  $insertsql_a.=",L30_SMS_SERVER";
  $insertsql2_a.="','".$values['L30_SMS_SERVER'];
  $insertsql_a.=",L30_SMS_PORT";
  $insertsql2_a.="','".$values['L30_SMS_PORT'];
  $insertsql_a.=",L30_SMS_CLI_ID";
  $insertsql2_a.="','".$values['L30_SMS_CLI_ID'];
  $insertsql_a.=",L30_SMS_CLI_PASSWD";
  $insertsql2_a.="','".$values['L30_SMS_CLI_PASSWD'];
  $insertsql_a.=",LINE30_SMS_VALIDITY_TIME";
  $insertsql2_a.="','".$values['LINE30_SMS_VALIDITY_TIME'];
  $insertsql_a.=",L30_DISABLE_SMS_ACK";
  $insertsql2_a.="','".$values['L30_DISABLE_SMS_ACK'];
  $insertsql_a.=",L30_DISABLE_IN";
  $insertsql2_a.="','".$values['L30_DISABLE_IN'];
  $insertsql_a.=",L30_FW_NUM_TO_VOIP";
  $insertsql2_a.="','".$values['L30_FW_NUM_TO_VOIP'];
  $insertsql_a.=",L30_V_DIGIT_MAP";
  $insertsql2_a.="','".$values['L30_V_DIGIT_MAP'];
  $insertsql_a.=",L30_FW2VOIP_AUTH_MODE";
  $insertsql2_a.="','".$values['L30_FW2VOIP_AUTH_MODE'];
  $insertsql_a.=",L30_FW_TO_VOIP_PASSWD";
  $insertsql2_a.="','".$values['L30_FW_TO_VOIP_PASSWD'];
  $insertsql_a.=",L30_GROUP_MODE";
  $insertsql2_a.="','".$values['L30_GROUP_MODE'];
  $insertsql_a.=",L30_GSM_FW_MODE";
  $insertsql2_a.="','".$values['L30_GSM_FW_MODE'];
  $insertsql_a.=",L30_PARTNER_SVR";
  $insertsql2_a.="','".$values['L30_PARTNER_SVR'];
  $insertsql_a.=",L30_GROUP_SVR";
  $insertsql2_a.="','".$values['L30_GROUP_SVR'];
  $insertsql_a.=",L30_GSM_NUMBER";
  $insertsql2_a.="','".$values['L30_GSM_NUMBER'];
  
  $insertsql_a.=",L31_SMS_SENDER";
  $insertsql2_a.="','".$values['L31_SMS_SENDER'];
  $insertsql_a.=",L31_SMS_SERVER";
  $insertsql2_a.="','".$values['L31_SMS_SERVER'];
  $insertsql_a.=",L31_SMS_PORT";
  $insertsql2_a.="','".$values['L31_SMS_PORT'];
  $insertsql_a.=",L31_SMS_CLI_ID";
  $insertsql2_a.="','".$values['L31_SMS_CLI_ID'];
  $insertsql_a.=",L31_SMS_CLI_PASSWD";
  $insertsql2_a.="','".$values['L31_SMS_CLI_PASSWD'];
  $insertsql_a.=",LINE31_SMS_VALIDITY_TIME";
  $insertsql2_a.="','".$values['LINE31_SMS_VALIDITY_TIME'];
  $insertsql_a.=",L31_DISABLE_SMS_ACK";
  $insertsql2_a.="','".$values['L31_DISABLE_SMS_ACK'];
  $insertsql_a.=",L31_DISABLE_IN";
  $insertsql2_a.="','".$values['L31_DISABLE_IN'];
  $insertsql_a.=",L31_FW_NUM_TO_VOIP";
  $insertsql2_a.="','".$values['L31_FW_NUM_TO_VOIP'];
  $insertsql_a.=",L31_V_DIGIT_MAP";
  $insertsql2_a.="','".$values['L31_V_DIGIT_MAP'];
  $insertsql_a.=",L31_FW2VOIP_AUTH_MODE";
  $insertsql2_a.="','".$values['L31_FW2VOIP_AUTH_MODE'];
  $insertsql_a.=",L31_FW_TO_VOIP_PASSWD";
  $insertsql2_a.="','".$values['L31_FW_TO_VOIP_PASSWD'];
  $insertsql_a.=",L31_GROUP_MODE";
  $insertsql2_a.="','".$values['L31_GROUP_MODE'];
  $insertsql_a.=",L31_GSM_FW_MODE";
  $insertsql2_a.="','".$values['L31_GSM_FW_MODE'];
  $insertsql_a.=",L31_PARTNER_SVR";
  $insertsql2_a.="','".$values['L31_PARTNER_SVR'];
  $insertsql_a.=",L31_GROUP_SVR";
  $insertsql2_a.="','".$values['L31_GROUP_SVR'];
  $insertsql_a.=",L31_GSM_NUMBER";
  $insertsql2_a.="','".$values['L31_GSM_NUMBER'];
  
  $insertsql_a.=",L32_SMS_SENDER";
  $insertsql2_a.="','".$values['L32_SMS_SENDER'];
  $insertsql_a.=",L32_SMS_SERVER";
  $insertsql2_a.="','".$values['L32_SMS_SERVER'];
  $insertsql_a.=",L32_SMS_PORT";
  $insertsql2_a.="','".$values['L32_SMS_PORT'];
  $insertsql_a.=",L32_SMS_CLI_ID";
  $insertsql2_a.="','".$values['L32_SMS_CLI_ID'];
  $insertsql_a.=",L32_SMS_CLI_PASSWD";
  $insertsql2_a.="','".$values['L32_SMS_CLI_PASSWD'];
  $insertsql_a.=",LINE32_SMS_VALIDITY_TIME";
  $insertsql2_a.="','".$values['LINE32_SMS_VALIDITY_TIME'];
  $insertsql_a.=",L32_DISABLE_SMS_ACK";
  $insertsql2_a.="','".$values['L32_DISABLE_SMS_ACK'];
  $insertsql_a.=",L32_DISABLE_IN";
  $insertsql2_a.="','".$values['L32_DISABLE_IN'];
  $insertsql_a.=",L32_FW_NUM_TO_VOIP";
  $insertsql2_a.="','".$values['L32_FW_NUM_TO_VOIP'];
  $insertsql_a.=",L32_V_DIGIT_MAP";
  $insertsql2_a.="','".$values['L32_V_DIGIT_MAP'];
  $insertsql_a.=",L32_FW2VOIP_AUTH_MODE";
  $insertsql2_a.="','".$values['L32_FW2VOIP_AUTH_MODE'];
  $insertsql_a.=",L32_FW_TO_VOIP_PASSWD";
  $insertsql2_a.="','".$values['L32_FW_TO_VOIP_PASSWD'];
  $insertsql_a.=",L32_GROUP_MODE";
  $insertsql2_a.="','".$values['L32_GROUP_MODE'];
  $insertsql_a.=",L32_GSM_FW_MODE";
  $insertsql2_a.="','".$values['L32_GSM_FW_MODE'];
  $insertsql_a.=",L32_PARTNER_SVR";
  $insertsql2_a.="','".$values['L32_PARTNER_SVR'];
  $insertsql_a.=",L32_GROUP_SVR";
  $insertsql2_a.="','".$values['L32_GROUP_SVR'];
  $insertsql_a.=",L32_GSM_NUMBER";
  $insertsql2_a.="','".$values['L32_GSM_NUMBER'];
  
  
  
  
  $insertsql_a.=",L1_CALLER_ANONYMOUS";
  $insertsql2_a.="','".$values['L1_CALLER_ANONYMOUS'];
  $insertsql_a.=",L2_CALLER_ANONYMOUS";
  $insertsql2_a.="','".$values['L2_CALLER_ANONYMOUS'];
  $insertsql_a.=",L3_CALLER_ANONYMOUS";
  $insertsql2_a.="','".$values['L3_CALLER_ANONYMOUS'];
  $insertsql_a.=",L4_CALLER_ANONYMOUS";
  $insertsql2_a.="','".$values['L4_CALLER_ANONYMOUS'];
  $insertsql_a.=",L5_CALLER_ANONYMOUS";
  $insertsql2_a.="','".$values['L5_CALLER_ANONYMOUS'];
  $insertsql_a.=",L6_CALLER_ANONYMOUS";
  $insertsql2_a.="','".$values['L6_CALLER_ANONYMOUS'];
  $insertsql_a.=",L7_CALLER_ANONYMOUS";
  $insertsql2_a.="','".$values['L7_CALLER_ANONYMOUS'];
  $insertsql_a.=",L8_CALLER_ANONYMOUS";
  $insertsql2_a.="','".$values['L8_CALLER_ANONYMOUS'];
  $insertsql_a.=",L9_CALLER_ANONYMOUS";
  $insertsql2_a.="','".$values['L9_CALLER_ANONYMOUS'];
  $insertsql_a.=",L10_CALLER_ANONYMOUS";
  $insertsql2_a.="','".$values['L10_CALLER_ANONYMOUS'];
  $insertsql_a.=",L11_CALLER_ANONYMOUS";
  $insertsql2_a.="','".$values['L11_CALLER_ANONYMOUS'];
  $insertsql_a.=",L12_CALLER_ANONYMOUS";
  $insertsql2_a.="','".$values['L12_CALLER_ANONYMOUS'];
  $insertsql_a.=",L13_CALLER_ANONYMOUS";
  $insertsql2_a.="','".$values['L13_CALLER_ANONYMOUS'];
  $insertsql_a.=",L14_CALLER_ANONYMOUS";
  $insertsql2_a.="','".$values['L14_CALLER_ANONYMOUS'];
  $insertsql_a.=",L15_CALLER_ANONYMOUS";
  $insertsql2_a.="','".$values['L15_CALLER_ANONYMOUS'];
  $insertsql_a.=",L16_CALLER_ANONYMOUS";
  $insertsql2_a.="','".$values['L16_CALLER_ANONYMOUS'];
  
  $insertsql_a.=",L17_CALLER_ANONYMOUS";
  $insertsql2_a.="','".$values['L17_CALLER_ANONYMOUS'];
  $insertsql_a.=",L18_CALLER_ANONYMOUS";
  $insertsql2_a.="','".$values['L18_CALLER_ANONYMOUS'];
  $insertsql_a.=",L19_CALLER_ANONYMOUS";
  $insertsql2_a.="','".$values['L19_CALLER_ANONYMOUS'];
  $insertsql_a.=",L20_CALLER_ANONYMOUS";
  $insertsql2_a.="','".$values['L20_CALLER_ANONYMOUS'];
  $insertsql_a.=",L21_CALLER_ANONYMOUS";
  $insertsql2_a.="','".$values['L21_CALLER_ANONYMOUS'];
  $insertsql_a.=",L22_CALLER_ANONYMOUS";
  $insertsql2_a.="','".$values['L22_CALLER_ANONYMOUS'];
  $insertsql_a.=",L23_CALLER_ANONYMOUS";
  $insertsql2_a.="','".$values['L23_CALLER_ANONYMOUS'];
  $insertsql_a.=",L24_CALLER_ANONYMOUS";
  $insertsql2_a.="','".$values['L24_CALLER_ANONYMOUS'];
  $insertsql_a.=",L25_CALLER_ANONYMOUS";
  $insertsql2_a.="','".$values['L25_CALLER_ANONYMOUS'];
  $insertsql_a.=",L26_CALLER_ANONYMOUS";
  $insertsql2_a.="','".$values['L26_CALLER_ANONYMOUS'];
  $insertsql_a.=",L27_CALLER_ANONYMOUS";
  $insertsql2_a.="','".$values['L27_CALLER_ANONYMOUS'];
  $insertsql_a.=",L28_CALLER_ANONYMOUS";
  $insertsql2_a.="','".$values['L28_CALLER_ANONYMOUS'];
  $insertsql_a.=",L29_CALLER_ANONYMOUS";
  $insertsql2_a.="','".$values['L29_CALLER_ANONYMOUS'];
  $insertsql_a.=",L30_CALLER_ANONYMOUS";
  $insertsql2_a.="','".$values['L30_CALLER_ANONYMOUS'];
  $insertsql_a.=",L31_CALLER_ANONYMOUS";
  $insertsql2_a.="','".$values['L31_CALLER_ANONYMOUS'];
  $insertsql_a.=",L32_CALLER_ANONYMOUS";
  $insertsql2_a.="','".$values['L32_CALLER_ANONYMOUS'];
  
?>
