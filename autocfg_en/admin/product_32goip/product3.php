<?php
$values['SMS_MODE'] = $_POST['sms_mode'] ;
  $updatesql_b.=",SMS_MODE='".$values['SMS_MODE']."'";
if($values['SMS_MODE'] == 'DIAL'):
  $values['SMS_DIAL_ENABLE'] = $_POST['sms_dial'] ;
  $updatesql_b.=",SMS_DIAL_ENABLE='".$values['SMS_DIAL_ENABLE']."'";
  $values['SMS_PREFIX'] = $_POST['sms_dial_prefix'] ;
  $updatesql_b.=",SMS_PREFIX='".$values['SMS_PREFIX']."'";
endif; 
if($values['SMS_MODE'] == 'RELAY'):
  $values['SMS_FW_NUM'] = $_POST['sms_fw_num'] ;
  $updatesql_b.=",SMS_FW_NUM='".$values['SMS_FW_NUM']."'";
  $values['SMS_FW_GSM_NUM'] = $_POST['sms_fw_gsm_num'] ;
  $updatesql_b.=",SMS_FW_GSM_NUM='".$values['SMS_FW_GSM_NUM']."'";
endif; 
if($values['ENDPOINT_TYPE'] == 'SIP'):
  $values['SIP_CID_FW_MODE'] = $_POST['cid_fw_mode'] ;
  $updatesql_b.=",SIP_CID_FW_MODE='".$values['SIP_CID_FW_MODE']."'";
endif; 
if($values['SIP_CID_FW_MODE'] == '1'):
  $values['CID_FW_PREFIX'] = $_POST['cid_fw_prefix'] ;
  $updatesql_b.=",CID_FW_PREFIX='".$values['CID_FW_PREFIX']."'";
endif; 
if($values['ENDPOINT_TYPE'] == 'H323'):
  $values['H323_CID_FW'] = $_POST['h323_cid_fw']=='on'?'1':'0';
  $updatesql_b.=",H323_CID_FW='".$values['H323_CID_FW']."'";
endif; 
  
  

/* media*/
  $values['RTP_PORT'] = $_POST['rtp_port_lower']."-".$_POST['rtp_port_upper'] ;
  $updatesql_b.=",RTP_PORT='".$values['RTP_PORT']."'";
  $values['PACKETIZE_PERIOD'] = $_POST['rtp_pkt_len'] ;
  $updatesql_b.=",PACKETIZE_PERIOD='".$values['PACKETIZE_PERIOD']."'";
  $values['VPDSP_JB_MODE'] = $_POST['jb_mode'] ;
  $updatesql_b.=",VPDSP_JB_MODE='".$values['VPDSP_JB_MODE']."'";
if($values['VPDSP_JB_MODE'] == '2'):
  $values['VPDSP_ADPT_MIN_JITTER'] = $_POST['adpt_min_jitter'] ;
  $updatesql_b.=",VPDSP_ADPT_MIN_JITTER='".$values['VPDSP_ADPT_MIN_JITTER']."'";
  $values['VPDSP_ADPT_MAX_JITTER'] = $_POST['adpt_max_jitter'] ;
  $updatesql_b.=",VPDSP_ADPT_MAX_JITTER='".$values['VPDSP_ADPT_MAX_JITTER']."'";
endif; 
if($values['VPDSP_JB_MODE'] == '1'):
  $values['VPDSP_SEQ_MIN_JITTER'] = $_POST['seq_min_jitter'] ;
  $updatesql_b.=",VPDSP_SEQ_MIN_JITTER='".$values['VPDSP_SEQ_MIN_JITTER']."'";
  $values['VPDSP_SEQ_MAX_JITTER'] = $_POST['seq_max_jitter'] ;
  $updatesql_b.=",VPDSP_SEQ_MAX_JITTER='".$values['VPDSP_SEQ_MAX_JITTER']."'";
endif; 
if($values['VPDSP_JB_MODE'] == '0'):
  $values['VPDSP_MIN_JITTER'] = $_POST['jitter_buffer'] ;
  $updatesql_b.=",VPDSP_MIN_JITTER='".$values['VPDSP_MIN_JITTER']."'";
endif; 
  $values['RTP_QOS'] = $_POST['rtp_qos'] ;
  $updatesql_b.=",RTP_QOS='".$values['RTP_QOS']."'";
if($values['RTP_QOS'] == 'IPTOS'):
  $values['RTP_TOS'] = $_POST['rtp_tos'] ;
  $updatesql_b.=",RTP_TOS='".$values['RTP_TOS']."'";
endif; 
if($values['RTP_QOS'] == 'DIFFSERV'):
  $values['RTP_DIFFSERV'] = $_POST['rtp_diffserv_class'] ;
  $updatesql_b.=",RTP_DIFFSERV='".$values['RTP_DIFFSERV']."'";
endif; 
if($values['MG_CRYPT'] == 'DISABLE'):
  $values['MG_CRYPT'] = $_POST['rtp_crypt'] ;
  $updatesql_b.=",MG_CRYPT='".$values['MG_CRYPT']."'";
endif; 
if($values['MG_CRYPT'] == 'RC4'):
  $values['MG_RC4_KEY'] = $_POST['rtp_rc4_key'] ;
  $updatesql_b.=",MG_RC4_KEY='".$values['MG_RC4_KEY']."'";
endif; 
if($values['ET263_CRYPT'] == '1'):
endif; 
if($values['MG_CRYPT'] == 'ET263'):
  $values['MG_ET263_CRYPT_TYPE'] = $_POST['rtp_et263_crypt_type'] ;
  $updatesql_b.=",MG_ET263_CRYPT_TYPE='".$values['MG_ET263_CRYPT_TYPE']."'";
  $values['MG_ET263_CRYPT_DEP'] = $_POST['rtp_et263_crypt_dep'] ;
  $updatesql_b.=",MG_ET263_CRYPT_DEP='".$values['MG_ET263_CRYPT_DEP']."'";
endif; 
if (isset($_POST['symmetric_rtp']))
  $values['SYMMETRIC_RTP'] = $_POST['symmetric_rtp']=='on'?'1':'0';
else
  $values['SYMMETRIC_RTP'] = '0';
  $updatesql_b.=",SYMMETRIC_RTP='".$values['SYMMETRIC_RTP']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['MG_NAT_TRAVERSAL'] = $_POST['rtp_nat_traversal'] ;
  $updatesql_b.=",MG_NAT_TRAVERSAL='".$values['MG_NAT_TRAVERSAL']."'";
endif; 
if($values['MG_NAT_TRAVERSAL'] == 'STUN'):
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['MG_STUN_SERVER'] = $_POST['rtp_stun_server'] ;
  $updatesql_b.=",MG_STUN_SERVER='".$values['MG_STUN_SERVER']."'";
endif; 
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
endif; 
if($values['MG_NAT_TRAVERSAL'] == 'PORTFWD'):
  $values['MG_PORTFWD_TYPE'] = $_POST['rtp_portfwd_type'] ;
  $updatesql_b.=",MG_PORTFWD_TYPE='".$values['MG_PORTFWD_TYPE']."'";
if($values['MG_PORTFWD_TYPE'] == 'MANUAL'):
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['MG_PORTFWD_GW'] = $_POST['rtp_portfwd_gw'] ;
  $updatesql_b.=",MG_PORTFWD_GW='".$values['MG_PORTFWD_GW']."'";
endif; 
endif; 
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
endif; 
if($values['MG_NAT_TRAVERSAL'] == 'RELAY'):
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['MG_RELAY_SERVER'] = $_POST['rtp_relay_server'] ;
  $updatesql_b.=",MG_RELAY_SERVER='".$values['MG_RELAY_SERVER']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['MG_RELAY_PORT'] = $_POST['rtp_relay_port'] ;
  $updatesql_b.=",MG_RELAY_PORT='".$values['MG_RELAY_PORT']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['MG_RELAY_USER'] = $_POST['rtp_relay_user'] ;
  $updatesql_b.=",MG_RELAY_USER='".$values['MG_RELAY_USER']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['MG_RELAY_PASSWD'] = $_POST['rtp_relay_passwd'] ;
  $updatesql_b.=",MG_RELAY_PASSWD='".$values['MG_RELAY_PASSWD']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['MG_RELAY_ENCRYPT'] = $_POST['rtp_relay_encrypt']=='on'?'1':'0';
  $updatesql_b.=",MG_RELAY_ENCRYPT='".$values['MG_RELAY_ENCRYPT']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['MG_RELAY_MODE'] = $_POST['rtp_relay_mode'] ;
  $updatesql_b.=",MG_RELAY_MODE='".$values['MG_RELAY_MODE']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['MG_RELAY_SERVER1'] = $_POST['rtp_relay_server1'] ;
  $updatesql_b.=",MG_RELAY_SERVER1='".$values['MG_RELAY_SERVER1']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['MG_RELAY_SERVER2'] = $_POST['rtp_relay_server2'] ;
  $updatesql_b.=",MG_RELAY_SERVER2='".$values['MG_RELAY_SERVER2']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['MG_RELAY_SERVER3'] = $_POST['rtp_relay_server3'] ;
  $updatesql_b.=",MG_RELAY_SERVER3='".$values['MG_RELAY_SERVER3']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['MG_RELAY_SERVER4'] = $_POST['rtp_relay_server4'] ;
  $updatesql_b.=",MG_RELAY_SERVER4='".$values['MG_RELAY_SERVER4']."'";
endif; 
endif; 
if($values['SIDE_TONE'] == '1'):
  $values['VPDSP_SIDE_TONE'] = $_POST['side_tone_level'] ;
  $updatesql_b.=",VPDSP_SIDE_TONE='".$values['VPDSP_SIDE_TONE']."'";
endif; 


/* remote*/
 
  $values['RADMIN_SERVER'] = $_POST['remote_server'] ;
  $updatesql_b.=",RADMIN_SERVER='".$values['RADMIN_SERVER']."'";
  $values['RADMIN_PORT'] = $_POST['remote_server_port'] ;
  $updatesql_b.=",RADMIN_PORT='".$values['RADMIN_PORT']."'";
  $values['RADMIN_ID'] = $_POST['remote_server_id'] ;
  $updatesql_b.=",RADMIN_ID='".$values['RADMIN_ID']."'";
  $values['RADMIN_KEY'] = $_POST['remote_server_key'] ;
  $updatesql_b.=",RADMIN_KEY='".$values['RADMIN_KEY']."'";

/*autocfg srv*/
  $values['AUTOCFG'] = $_POST['auto_config']=='on'?'1':'0';
  $updatesql_b.=",AUTOCFG='".$values['AUTOCFG']."'";
if($values['AUTOCFG'] == 1):
  $values['AUTOCFG_SERVER'] = $_POST['auto_config_server'] ;
  $updatesql_b.=",AUTOCFG_SERVER='".$values['AUTOCFG_SERVER']."'";
  $values['AUTOCFG_REFRESH'] = $_POST['auto_config_refresh'] ;
  $updatesql_b.=",AUTOCFG_REFRESH='".$values['AUTOCFG_REFRESH']."'";
endif; 

/*codec*/
  $values['PREFER_CODEC1'] = $_POST['prefer_codec1'] ;
  $updatesql_b.=",PREFER_CODEC1='".$values['PREFER_CODEC1']."'";
  $values['CODEC1_DISABLE'] = $_POST['codec1_enabled']=='on'?'0':'1';
  $updatesql_b.=",CODEC1_DISABLE='".$values['CODEC1_DISABLE']."'";
  $values['PREFER_CODEC2'] = $_POST['prefer_codec2'] ;
  $updatesql_b.=",PREFER_CODEC2='".$values['PREFER_CODEC2']."'";
  $values['CODEC2_DISABLE'] = $_POST['codec2_enabled']=='on'?'0':'1';
  $updatesql_b.=",CODEC2_DISABLE='".$values['CODEC2_DISABLE']."'";
  $values['PREFER_CODEC3'] = $_POST['prefer_codec3'] ;
  $updatesql_b.=",PREFER_CODEC3='".$values['PREFER_CODEC3']."'";
  $values['CODEC3_DISABLE'] = $_POST['codec3_enabled']=='on'?'0':'1';
  $updatesql_b.=",CODEC3_DISABLE='".$values['CODEC3_DISABLE']."'";
  $values['PREFER_CODEC4'] = $_POST['prefer_codec4'] ;
  $updatesql_b.=",PREFER_CODEC4='".$values['PREFER_CODEC4']."'";
  $values['CODEC4_DISABLE'] = $_POST['codec4_enabled']=='on'?'0':'1';
  $updatesql_b.=",CODEC4_DISABLE='".$values['CODEC4_DISABLE']."'";
  $values['PREFER_CODEC5'] = $_POST['prefer_codec5'] ;
  $updatesql_b.=",PREFER_CODEC5='".$values['PREFER_CODEC5']."'";
  $values['CODEC5_DISABLE'] = $_POST['codec5_enabled']=='on'?'0':'1';
  $updatesql_b.=",CODEC5_DISABLE='".$values['CODEC5_DISABLE']."'";
  $values['PREFER_CODEC6'] = $_POST['prefer_codec6'] ;
  $updatesql_b.=",PREFER_CODEC6='".$values['PREFER_CODEC6']."'";
  $values['CODEC6_DISABLE'] = $_POST['codec6_enabled']=='on'?'0':'1';
  $updatesql_b.=",CODEC6_DISABLE='".$values['CODEC6_DISABLE']."'";
  
  
  $values['RMSIM_ENABLE'] = $_POST['rmsim_enable']=='on'?'1':'0' ;
  $updatesql_b.=",RMSIM_ENABLE='".$values['RMSIM_ENABLE']."'";
if($values['RMSIM_ENABLE'] == 1):
  $values['SMB_SVR'] = $_POST['smb_svr'] ;
  $updatesql_b.=",SMB_SVR='".$values['SMB_SVR']."'";
  $values['SMB_ID'] = $_POST['smb_id'] ;
  $updatesql_b.=",SMB_ID='".$values['SMB_ID']."'";
  $values['SMB_KEY'] = $_POST['smb_key'] ;
  $updatesql_b.=",SMB_KEY='".$values['SMB_KEY']."'";
endif; 

$values['L1_GSM_CF_UNCND_ENABLE'] = $_POST['line1_gsm_cf_uncnd_enable']=='on'?'1':'0';
  $updatesql_b.=",L1_GSM_CF_UNCND_ENABLE='".$values['L1_GSM_CF_UNCND_ENABLE']."'";
if($values['L1_GSM_CF_UNCND_ENABLE'] == 1):
  $values['L1_GSM_CF_UNCND_NUM'] = $_POST['line1_gsm_cf_uncnd_num'] ;
  $updatesql_b.=",L1_GSM_CF_UNCND_NUM='".$values['L1_GSM_CF_UNCND_NUM']."'";
else:
  $values['L1_GSM_CF_UNCND_NUM'] = "";
endif; 
  $values['L1_GSM_CF_BUSY_ENABLE'] = $_POST['line1_gsm_cf_busy_enable']=='on'?'1':'0';
  $updatesql_b.=",L1_GSM_CF_BUSY_ENABLE='".$values['L1_GSM_CF_BUSY_ENABLE']."'";
if($values['L1_GSM_CF_BUSY_ENABLE'] == 1):
  $values['L1_GSM_CF_BUSY_NUM'] = $_POST['line1_gsm_cf_busy_num'] ;
  $updatesql_b.=",L1_GSM_CF_BUSY_NUM='".$values['L1_GSM_CF_BUSY_NUM']."'";
else:
  $values['L1_GSM_CF_BUSY_NUM'] = "";
endif; 
  $values['L1_GSM_CF_NOREPLY_ENABLE'] = $_POST['line1_gsm_cf_noreply_enable']=='on'?'1':'0';
  $updatesql_b.=",L1_GSM_CF_NOREPLY_ENABLE='".$values['L1_GSM_CF_NOREPLY_ENABLE']."'";
if($values['L1_GSM_CF_NOREPLY_ENABLE'] == 1):
  $values['L1_GSM_CF_NOREPLY_NUM'] = $_POST['line1_gsm_cf_noreply_num'] ;
  $updatesql_b.=",L1_GSM_CF_NOREPLY_NUM='".$values['L1_GSM_CF_NOREPLY_NUM']."'";
else:
  $values['L1_GSM_CF_NOREPLY_NUM'] = "";
endif; 
  $values['L1_GSM_CF_NOTREACHABLE_ENABLE'] = $_POST['line1_gsm_cf_notreachable_enable']=='on'?'1':'0';
  $updatesql_b.=",L1_GSM_CF_NOTREACHABLE_ENABLE='".$values['L1_GSM_CF_NOTREACHABLE_ENABLE']."'";
if($values['L1_GSM_CF_NOTREACHABLE_ENABLE'] == 1):
  $values['L1_GSM_CF_NOTREACHABLE_NUM'] = $_POST['line1_gsm_cf_notreachable_num'] ;
  $updatesql_b.=",L1_GSM_CF_NOTREACHABLE_NUM='".$values['L1_GSM_CF_NOTREACHABLE_NUM']."'";
else:
  $values['L1_GSM_CF_NOTREACHABLE_NUM'] = "";
endif; 

  $values['L2_GSM_CF_UNCND_ENABLE'] = $_POST['line2_gsm_cf_uncnd_enable']=='on'?'1':'0';
  $updatesql_b.=",L2_GSM_CF_UNCND_ENABLE='".$values['L2_GSM_CF_UNCND_ENABLE']."'";
if($values['L2_GSM_CF_UNCND_ENABLE'] == 1):
  $values['L2_GSM_CF_UNCND_NUM'] = $_POST['line2_gsm_cf_uncnd_num'] ;
  $updatesql_b.=",L2_GSM_CF_UNCND_NUM='".$values['L2_GSM_CF_UNCND_NUM']."'";
else:
  $values['L2_GSM_CF_UNCND_NUM'] = "";
endif;
  $values['L2_GSM_CF_BUSY_ENABLE'] = $_POST['line2_gsm_cf_busy_enable']=='on'?'1':'0';
  $updatesql_b.=",L2_GSM_CF_BUSY_ENABLE='".$values['L2_GSM_CF_BUSY_ENABLE']."'";
if($values['L2_GSM_CF_BUSY_ENABLE'] == 1):
  $values['L2_GSM_CF_BUSY_NUM'] = $_POST['line2_gsm_cf_busy_num'] ;
  $updatesql_b.=",L2_GSM_CF_BUSY_NUM='".$values['L2_GSM_CF_BUSY_NUM']."'";
else:
  $values['L2_GSM_CF_BUSY_NUM'] = "";
endif; 
  $values['L2_GSM_CF_NOREPLY_ENABLE'] = $_POST['line2_gsm_cf_noreply_enable']=='on'?'1':'0';
  $updatesql_b.=",L2_GSM_CF_NOREPLY_ENABLE='".$values['L2_GSM_CF_NOREPLY_ENABLE']."'";
if($values['L2_GSM_CF_NOREPLY_ENABLE'] == 1):
  $values['L2_GSM_CF_NOREPLY_NUM'] = $_POST['line2_gsm_cf_noreply_num'] ;
  $updatesql_b.=",L2_GSM_CF_NOREPLY_NUM='".$values['L2_GSM_CF_NOREPLY_NUM']."'";
else:
  $values['L2_GSM_CF_NOREPLY_NUM'] = "";
endif; 
  $values['L2_GSM_CF_NOTREACHABLE_ENABLE'] = $_POST['line2_gsm_cf_notreachable_enable']=='on'?'1':'0';
  $updatesql_b.=",L2_GSM_CF_NOTREACHABLE_ENABLE='".$values['L2_GSM_CF_NOTREACHABLE_ENABLE']."'";
if($values['L2_GSM_CF_NOTREACHABLE_ENABLE'] == 1):
  $values['L2_GSM_CF_NOTREACHABLE_NUM'] = $_POST['line2_gsm_cf_notreachable_num'] ;
  $updatesql_b.=",L2_GSM_CF_NOTREACHABLE_NUM='".$values['L2_GSM_CF_NOTREACHABLE_NUM']."'";
else:
  $values['L2_GSM_CF_NOTREACHABLE_NUM'] = "";
endif; 

  $values['L3_GSM_CF_UNCND_ENABLE'] = $_POST['line3_gsm_cf_uncnd_enable']=='on'?'1':'0';
  $updatesql_b.=",L3_GSM_CF_UNCND_ENABLE='".$values['L3_GSM_CF_UNCND_ENABLE']."'";
if($values['L3_GSM_CF_UNCND_ENABLE'] == 1):
  $values['L3_GSM_CF_UNCND_NUM'] = $_POST['line3_gsm_cf_uncnd_num'] ;
  $updatesql_b.=",L3_GSM_CF_UNCND_NUM='".$values['L3_GSM_CF_UNCND_NUM']."'";
else:
  $values['L3_GSM_CF_UNCND_NUM'] = "";
endif;
  $values['L3_GSM_CF_BUSY_ENABLE'] = $_POST['line3_gsm_cf_busy_enable']=='on'?'1':'0';
  $updatesql_b.=",L3_GSM_CF_BUSY_ENABLE='".$values['L3_GSM_CF_BUSY_ENABLE']."'";
if($values['L3_GSM_CF_BUSY_ENABLE'] == 1):
  $values['L3_GSM_CF_BUSY_NUM'] = $_POST['line3_gsm_cf_busy_num'] ;
  $updatesql_b.=",L3_GSM_CF_BUSY_NUM='".$values['L3_GSM_CF_BUSY_NUM']."'";
else:
  $values['L3_GSM_CF_BUSY_NUM'] = "";
endif;
  $values['L3_GSM_CF_NOREPLY_ENABLE'] = $_POST['line3_gsm_cf_noreply_enable']=='on'?'1':'0';
  $updatesql_b.=",L3_GSM_CF_NOREPLY_ENABLE='".$values['L3_GSM_CF_NOREPLY_ENABLE']."'";
if($values['L3_GSM_CF_NOREPLY_ENABLE'] == 1):
  $values['L3_GSM_CF_NOREPLY_NUM'] = $_POST['line3_gsm_cf_noreply_num'] ;
  $updatesql_b.=",L3_GSM_CF_NOREPLY_NUM='".$values['L3_GSM_CF_NOREPLY_NUM']."'";
else:
  $values['L3_GSM_CF_NOREPLY_NUM'] = "";
endif;
  $values['L3_GSM_CF_NOTREACHABLE_ENABLE'] = $_POST['line3_gsm_cf_notreachable_enable']=='on'?'1':'0';
  $updatesql_b.=",L3_GSM_CF_NOTREACHABLE_ENABLE='".$values['L3_GSM_CF_NOTREACHABLE_ENABLE']."'";
if($values['L3_GSM_CF_NOTREACHABLE_ENABLE'] == 1):
  $values['L3_GSM_CF_NOTREACHABLE_NUM'] = $_POST['line3_gsm_cf_notreachable_num'] ;
  $updatesql_b.=",L3_GSM_CF_NOTREACHABLE_NUM='".$values['L3_GSM_CF_NOTREACHABLE_NUM']."'";
else:
  $values['L3_GSM_CF_NOTREACHABLE_NUM'] = "";
endif;


  $values['L4_GSM_CF_UNCND_ENABLE'] = $_POST['line4_gsm_cf_uncnd_enable']=='on'?'1':'0';
  $updatesql_b.=",L4_GSM_CF_UNCND_ENABLE='".$values['L4_GSM_CF_UNCND_ENABLE']."'";
if($values['L4_GSM_CF_UNCND_ENABLE'] == 1):
  $values['L4_GSM_CF_UNCND_NUM'] = $_POST['line4_gsm_cf_uncnd_num'] ;
  $updatesql_b.=",L4_GSM_CF_UNCND_NUM='".$values['L4_GSM_CF_UNCND_NUM']."'";
else:
  $values['L4_GSM_CF_UNCND_NUM'] = "";
endif;
  $values['L4_GSM_CF_BUSY_ENABLE'] = $_POST['line4_gsm_cf_busy_enable']=='on'?'1':'0';
  $updatesql_b.=",L4_GSM_CF_BUSY_ENABLE='".$values['L4_GSM_CF_BUSY_ENABLE']."'";
if($values['L4_GSM_CF_BUSY_ENABLE'] == 1):
  $values['L4_GSM_CF_BUSY_NUM'] = $_POST['line4_gsm_cf_busy_num'] ;
  $updatesql_b.=",L4_GSM_CF_BUSY_NUM='".$values['L4_GSM_CF_BUSY_NUM']."'";
else:
  $values['L4_GSM_CF_BUSY_NUM'] = "";
endif; 
  $values['L4_GSM_CF_NOREPLY_ENABLE'] = $_POST['line4_gsm_cf_noreply_enable']=='on'?'1':'0';
  $updatesql_b.=",L4_GSM_CF_NOREPLY_ENABLE='".$values['L4_GSM_CF_NOREPLY_ENABLE']."'";
if($values['L4_GSM_CF_NOREPLY_ENABLE'] == 1):
  $values['L4_GSM_CF_NOREPLY_NUM'] = $_POST['line4_gsm_cf_noreply_num'] ;
  $updatesql_b.=",L4_GSM_CF_NOREPLY_NUM='".$values['L4_GSM_CF_NOREPLY_NUM']."'";
else:
  $values['L4_GSM_CF_NOREPLY_NUM'] = "";
endif; 
  $values['L4_GSM_CF_NOTREACHABLE_ENABLE'] = $_POST['line4_gsm_cf_notreachable_enable']=='on'?'1':'0';
  $updatesql_b.=",L4_GSM_CF_NOTREACHABLE_ENABLE='".$values['L4_GSM_CF_NOTREACHABLE_ENABLE']."'";
if($values['L4_GSM_CF_NOTREACHABLE_ENABLE'] == 1):
  $values['L4_GSM_CF_NOTREACHABLE_NUM'] = $_POST['line4_gsm_cf_notreachable_num'] ;
  $updatesql_b.=",L4_GSM_CF_NOTREACHABLE_NUM='".$values['L4_GSM_CF_NOTREACHABLE_NUM']."'";
else:
  $values['L4_GSM_CF_NOTREACHABLE_NUM'] = "";
endif; 

  $values['L5_GSM_CF_UNCND_ENABLE'] = $_POST['line5_gsm_cf_uncnd_enable']=='on'?'1':'0';
  $updatesql_b.=",L5_GSM_CF_UNCND_ENABLE='".$values['L5_GSM_CF_UNCND_ENABLE']."'";
if($values['L5_GSM_CF_UNCND_ENABLE'] == 1):
  $values['L5_GSM_CF_UNCND_NUM'] = $_POST['line5_gsm_cf_uncnd_num'] ;
  $updatesql_b.=",L5_GSM_CF_UNCND_NUM='".$values['L5_GSM_CF_UNCND_NUM']."'";
else:
  $values['L5_GSM_CF_UNCND_NUM'] = "";
endif; 
  $values['L5_GSM_CF_BUSY_ENABLE'] = $_POST['line5_gsm_cf_busy_enable']=='on'?'1':'0';
  $updatesql_b.=",L5_GSM_CF_BUSY_ENABLE='".$values['L5_GSM_CF_BUSY_ENABLE']."'";
if($values['L5_GSM_CF_BUSY_ENABLE'] == 1):
  $values['L5_GSM_CF_BUSY_NUM'] = $_POST['line5_gsm_cf_busy_num'] ;
  $updatesql_b.=",L5_GSM_CF_BUSY_NUM='".$values['L5_GSM_CF_BUSY_NUM']."'";
else:
  $values['L5_GSM_CF_BUSY_NUM'] = "";
endif; 
  $values['L5_GSM_CF_NOREPLY_ENABLE'] = $_POST['line5_gsm_cf_noreply_enable']=='on'?'1':'0';
  $updatesql_b.=",L5_GSM_CF_NOREPLY_ENABLE='".$values['L5_GSM_CF_NOREPLY_ENABLE']."'";
if($values['L5_GSM_CF_NOREPLY_ENABLE'] == 1):
  $values['L5_GSM_CF_NOREPLY_NUM'] = $_POST['line5_gsm_cf_noreply_num'] ;
  $updatesql_b.=",L5_GSM_CF_NOREPLY_NUM='".$values['L5_GSM_CF_NOREPLY_NUM']."'";
else:
  $values['L5_GSM_CF_NOREPLY_NUM'] = "";
endif; 
  $values['L5_GSM_CF_NOTREACHABLE_ENABLE'] = $_POST['line5_gsm_cf_notreachable_enable']=='on'?'1':'0';
  $updatesql_b.=",L5_GSM_CF_NOTREACHABLE_ENABLE='".$values['L5_GSM_CF_NOTREACHABLE_ENABLE']."'";
if($values['L5_GSM_CF_NOTREACHABLE_ENABLE'] == 1):
  $values['L5_GSM_CF_NOTREACHABLE_NUM'] = $_POST['line5_gsm_cf_notreachable_num'] ;
  $updatesql_b.=",L5_GSM_CF_NOTREACHABLE_NUM='".$values['L5_GSM_CF_NOTREACHABLE_NUM']."'";
else:
  $values['L5_GSM_CF_NOTREACHABLE_NUM'] = "";
endif; 

  $values['L6_GSM_CF_UNCND_ENABLE'] = $_POST['line6_gsm_cf_uncnd_enable']=='on'?'1':'0';
  $updatesql_b.=",L6_GSM_CF_UNCND_ENABLE='".$values['L6_GSM_CF_UNCND_ENABLE']."'";
if($values['L6_GSM_CF_UNCND_ENABLE'] == 1):
  $values['L6_GSM_CF_UNCND_NUM'] = $_POST['line6_gsm_cf_uncnd_num'] ;
  $updatesql_b.=",L6_GSM_CF_UNCND_NUM='".$values['L6_GSM_CF_UNCND_NUM']."'";
else:
  $values['L6_GSM_CF_UNCND_NUM'] = "";
endif; 
  $values['L6_GSM_CF_BUSY_ENABLE'] = $_POST['line6_gsm_cf_busy_enable']=='on'?'1':'0';
  $updatesql_b.=",L6_GSM_CF_BUSY_ENABLE='".$values['L6_GSM_CF_BUSY_ENABLE']."'";
if($values['L6_GSM_CF_BUSY_ENABLE'] == 1):
  $values['L6_GSM_CF_BUSY_NUM'] = $_POST['line6_gsm_cf_busy_num'] ;
  $updatesql_b.=",L6_GSM_CF_BUSY_NUM='".$values['L6_GSM_CF_BUSY_NUM']."'";
else:
  $values['L6_GSM_CF_BUSY_NUM'] = "";
endif; 
  $values['L6_GSM_CF_NOREPLY_ENABLE'] = $_POST['line6_gsm_cf_noreply_enable']=='on'?'1':'0';
  $updatesql_b.=",L6_GSM_CF_NOREPLY_ENABLE='".$values['L6_GSM_CF_NOREPLY_ENABLE']."'";
if($values['L6_GSM_CF_NOREPLY_ENABLE'] == 1):
  $values['L6_GSM_CF_NOREPLY_NUM'] = $_POST['line6_gsm_cf_noreply_num'] ;
  $updatesql_b.=",L6_GSM_CF_NOREPLY_NUM='".$values['L6_GSM_CF_NOREPLY_NUM']."'";
else:
  $values['L6_GSM_CF_NOREPLY_NUM'] = "";
endif; 
  $values['L6_GSM_CF_NOTREACHABLE_ENABLE'] = $_POST['line6_gsm_cf_notreachable_enable']=='on'?'1':'0';
  $updatesql_b.=",L6_GSM_CF_NOTREACHABLE_ENABLE='".$values['L6_GSM_CF_NOTREACHABLE_ENABLE']."'";
if($values['L6_GSM_CF_NOTREACHABLE_ENABLE'] == 1):
  $values['L6_GSM_CF_NOTREACHABLE_NUM'] = $_POST['line6_gsm_cf_notreachable_num'] ;
  $updatesql_b.=",L6_GSM_CF_NOTREACHABLE_NUM='".$values['L6_GSM_CF_NOTREACHABLE_NUM']."'";
else:
  $values['L6_GSM_CF_NOTREACHABLE_NUM'] = "";
endif; 

  $values['L7_GSM_CF_UNCND_ENABLE'] = $_POST['line7_gsm_cf_uncnd_enable']=='on'?'1':'0';
  $updatesql_b.=",L7_GSM_CF_UNCND_ENABLE='".$values['L7_GSM_CF_UNCND_ENABLE']."'";
if($values['L7_GSM_CF_UNCND_ENABLE'] == 1):
  $values['L7_GSM_CF_UNCND_NUM'] = $_POST['line7_gsm_cf_uncnd_num'] ;
  $updatesql_b.=",L7_GSM_CF_UNCND_NUM='".$values['L7_GSM_CF_UNCND_NUM']."'";
else:
  $values['L7_GSM_CF_UNCND_NUM'] = "";
endif; 
  $values['L7_GSM_CF_BUSY_ENABLE'] = $_POST['line7_gsm_cf_busy_enable']=='on'?'1':'0';
  $updatesql_b.=",L7_GSM_CF_BUSY_ENABLE='".$values['L7_GSM_CF_BUSY_ENABLE']."'";
if($values['L7_GSM_CF_BUSY_ENABLE'] == 1):
  $values['L7_GSM_CF_BUSY_NUM'] = $_POST['line7_gsm_cf_busy_num'] ;
  $updatesql_b.=",L7_GSM_CF_BUSY_NUM='".$values['L7_GSM_CF_BUSY_NUM']."'";
else:
  $values['L7_GSM_CF_BUSY_NUM'] = "";
endif; 
  $values['L7_GSM_CF_NOREPLY_ENABLE'] = $_POST['line7_gsm_cf_noreply_enable']=='on'?'1':'0';
  $updatesql_b.=",L7_GSM_CF_NOREPLY_ENABLE='".$values['L7_GSM_CF_NOREPLY_ENABLE']."'";
if($values['L7_GSM_CF_NOREPLY_ENABLE'] == 1):
  $values['L7_GSM_CF_NOREPLY_NUM'] = $_POST['line7_gsm_cf_noreply_num'] ;
  $updatesql_b.=",L7_GSM_CF_NOREPLY_NUM='".$values['L7_GSM_CF_NOREPLY_NUM']."'";
else:
  $values['L7_GSM_CF_NOREPLY_NUM'] = "";
endif; 
  $values['L7_GSM_CF_NOTREACHABLE_ENABLE'] = $_POST['line7_gsm_cf_notreachable_enable']=='on'?'1':'0';
  $updatesql_b.=",L7_GSM_CF_NOTREACHABLE_ENABLE='".$values['L7_GSM_CF_NOTREACHABLE_ENABLE']."'";
if($values['L7_GSM_CF_NOTREACHABLE_ENABLE'] == 1):
  $values['L7_GSM_CF_NOTREACHABLE_NUM'] = $_POST['line7_gsm_cf_notreachable_num'] ;
  $updatesql_b.=",L7_GSM_CF_NOTREACHABLE_NUM='".$values['L7_GSM_CF_NOTREACHABLE_NUM']."'";
else:
  $values['L7_GSM_CF_NOTREACHABLE_NUM'] = "";
endif;

  $values['L8_GSM_CF_UNCND_ENABLE'] = $_POST['line8_gsm_cf_uncnd_enable']=='on'?'1':'0';
  $updatesql_b.=",L8_GSM_CF_UNCND_ENABLE='".$values['L8_GSM_CF_UNCND_ENABLE']."'";
if($values['L8_GSM_CF_UNCND_ENABLE'] == 1):
  $values['L8_GSM_CF_UNCND_NUM'] = $_POST['line8_gsm_cf_uncnd_num'] ;
  $updatesql_b.=",L8_GSM_CF_UNCND_NUM='".$values['L8_GSM_CF_UNCND_NUM']."'";
else:
  $values['L8_GSM_CF_UNCND_NUM'] = "";
endif; 
  $values['L8_GSM_CF_BUSY_ENABLE'] = $_POST['line8_gsm_cf_busy_enable']=='on'?'1':'0';
  $updatesql_b.=",L8_GSM_CF_BUSY_ENABLE='".$values['L8_GSM_CF_BUSY_ENABLE']."'";
if($values['L8_GSM_CF_BUSY_ENABLE'] == 1):
  $values['L8_GSM_CF_BUSY_NUM'] = $_POST['line8_gsm_cf_busy_num'] ;
  $updatesql_b.=",L8_GSM_CF_BUSY_NUM='".$values['L8_GSM_CF_BUSY_NUM']."'";
else:
  $values['L8_GSM_CF_BUSY_NUM'] = "";
endif; 
  $values['L8_GSM_CF_NOREPLY_ENABLE'] = $_POST['line8_gsm_cf_noreply_enable']=='on'?'1':'0';
  $updatesql_b.=",L8_GSM_CF_NOREPLY_ENABLE='".$values['L8_GSM_CF_NOREPLY_ENABLE']."'";
if($values['L8_GSM_CF_NOREPLY_ENABLE'] == 1):
  $values['L8_GSM_CF_NOREPLY_NUM'] = $_POST['line8_gsm_cf_noreply_num'] ;
  $updatesql_b.=",L8_GSM_CF_NOREPLY_NUM='".$values['L8_GSM_CF_NOREPLY_NUM']."'";
else:
  $values['L8_GSM_CF_NOREPLY_NUM'] = "";
endif; 
  $values['L8_GSM_CF_NOTREACHABLE_ENABLE'] = $_POST['line8_gsm_cf_notreachable_enable']=='on'?'1':'0';
  $updatesql_b.=",L8_GSM_CF_NOTREACHABLE_ENABLE='".$values['L8_GSM_CF_NOTREACHABLE_ENABLE']."'";
if($values['L8_GSM_CF_NOTREACHABLE_ENABLE'] == 1):
  $values['L8_GSM_CF_NOTREACHABLE_NUM'] = $_POST['line8_gsm_cf_notreachable_num'] ;
  $updatesql_b.=",L8_GSM_CF_NOTREACHABLE_NUM='".$values['L8_GSM_CF_NOTREACHABLE_NUM']."'";
else:
  $values['L8_GSM_CF_NOTREACHABLE_NUM'] = "";
endif; 

$values['L9_GSM_CF_UNCND_ENABLE'] = $_POST['line9_gsm_cf_uncnd_enable']=='on'?'1':'0';
  $updatesql_b.=",L9_GSM_CF_UNCND_ENABLE='".$values['L9_GSM_CF_UNCND_ENABLE']."'";
if($values['L9_GSM_CF_UNCND_ENABLE'] == 1):
  $values['L9_GSM_CF_UNCND_NUM'] = $_POST['line9_gsm_cf_uncnd_num'] ;
  $updatesql_b.=",L9_GSM_CF_UNCND_NUM='".$values['L9_GSM_CF_UNCND_NUM']."'";
else:
  $values['L9_GSM_CF_UNCND_NUM'] = "";
endif; 
  $values['L9_GSM_CF_BUSY_ENABLE'] = $_POST['line9_gsm_cf_busy_enable']=='on'?'1':'0';
  $updatesql_b.=",L9_GSM_CF_BUSY_ENABLE='".$values['L9_GSM_CF_BUSY_ENABLE']."'";
if($values['L9_GSM_CF_BUSY_ENABLE'] == 1):
  $values['L9_GSM_CF_BUSY_NUM'] = $_POST['line9_gsm_cf_busy_num'] ;
  $updatesql_b.=",L9_GSM_CF_BUSY_NUM='".$values['L9_GSM_CF_BUSY_NUM']."'";
else:
  $values['L9_GSM_CF_BUSY_NUM'] = "";
endif; 
  $values['L9_GSM_CF_NOREPLY_ENABLE'] = $_POST['line9_gsm_cf_noreply_enable']=='on'?'1':'0';
  $updatesql_b.=",L9_GSM_CF_NOREPLY_ENABLE='".$values['L9_GSM_CF_NOREPLY_ENABLE']."'";
if($values['L9_GSM_CF_NOREPLY_ENABLE'] == 1):
  $values['L9_GSM_CF_NOREPLY_NUM'] = $_POST['line9_gsm_cf_noreply_num'] ;
  $updatesql_b.=",L9_GSM_CF_NOREPLY_NUM='".$values['L9_GSM_CF_NOREPLY_NUM']."'";
else:
  $values['L9_GSM_CF_NOREPLY_NUM'] = "";
endif; 
  $values['L9_GSM_CF_NOTREACHABLE_ENABLE'] = $_POST['line9_gsm_cf_notreachable_enable']=='on'?'1':'0';
  $updatesql_b.=",L9_GSM_CF_NOTREACHABLE_ENABLE='".$values['L9_GSM_CF_NOTREACHABLE_ENABLE']."'";
if($values['L9_GSM_CF_NOTREACHABLE_ENABLE'] == 1):
  $values['L9_GSM_CF_NOTREACHABLE_NUM'] = $_POST['line9_gsm_cf_notreachable_num'] ;
  $updatesql_b.=",L9_GSM_CF_NOTREACHABLE_NUM='".$values['L9_GSM_CF_NOTREACHABLE_NUM']."'";
else:
  $values['L9_GSM_CF_NOTREACHABLE_NUM'] = "";
endif; 

$values['L10_GSM_CF_UNCND_ENABLE'] = $_POST['line10_gsm_cf_uncnd_enable']=='on'?'1':'0';
  $updatesql_b.=",L10_GSM_CF_UNCND_ENABLE='".$values['L10_GSM_CF_UNCND_ENABLE']."'";
if($values['L10_GSM_CF_UNCND_ENABLE'] == 1):
  $values['L10_GSM_CF_UNCND_NUM'] = $_POST['line10_gsm_cf_uncnd_num'] ;
  $updatesql_b.=",L10_GSM_CF_UNCND_NUM='".$values['L10_GSM_CF_UNCND_NUM']."'";
else:
  $values['L10_GSM_CF_UNCND_NUM'] = "";
endif; 
  $values['L10_GSM_CF_BUSY_ENABLE'] = $_POST['line10_gsm_cf_busy_enable']=='on'?'1':'0';
  $updatesql_b.=",L10_GSM_CF_BUSY_ENABLE='".$values['L10_GSM_CF_BUSY_ENABLE']."'";
if($values['L10_GSM_CF_BUSY_ENABLE'] == 1):
  $values['L10_GSM_CF_BUSY_NUM'] = $_POST['line10_gsm_cf_busy_num'] ;
  $updatesql_b.=",L10_GSM_CF_BUSY_NUM='".$values['L10_GSM_CF_BUSY_NUM']."'";
else:
  $values['L10_GSM_CF_BUSY_NUM'] = "";
endif; 
  $values['L10_GSM_CF_NOREPLY_ENABLE'] = $_POST['line10_gsm_cf_noreply_enable']=='on'?'1':'0';
  $updatesql_b.=",L10_GSM_CF_NOREPLY_ENABLE='".$values['L10_GSM_CF_NOREPLY_ENABLE']."'";
if($values['L10_GSM_CF_NOREPLY_ENABLE'] == 1):
  $values['L10_GSM_CF_NOREPLY_NUM'] = $_POST['line10_gsm_cf_noreply_num'] ;
  $updatesql_b.=",L10_GSM_CF_NOREPLY_NUM='".$values['L10_GSM_CF_NOREPLY_NUM']."'";
else:
  $values['L10_GSM_CF_NOREPLY_NUM'] = "";
endif; 
  $values['L10_GSM_CF_NOTREACHABLE_ENABLE'] = $_POST['line10_gsm_cf_notreachable_enable']=='on'?'1':'0';
  $updatesql_b.=",L10_GSM_CF_NOTREACHABLE_ENABLE='".$values['L10_GSM_CF_NOTREACHABLE_ENABLE']."'";
if($values['L10_GSM_CF_NOTREACHABLE_ENABLE'] == 1):
  $values['L10_GSM_CF_NOTREACHABLE_NUM'] = $_POST['line10_gsm_cf_notreachable_num'] ;
  $updatesql_b.=",L10_GSM_CF_NOTREACHABLE_NUM='".$values['L10_GSM_CF_NOTREACHABLE_NUM']."'";
else:
  $values['L10_GSM_CF_NOTREACHABLE_NUM'] = "";
endif; 

$values['L11_GSM_CF_UNCND_ENABLE'] = $_POST['line11_gsm_cf_uncnd_enable']=='on'?'1':'0';
  $updatesql_b.=",L11_GSM_CF_UNCND_ENABLE='".$values['L11_GSM_CF_UNCND_ENABLE']."'";
if($values['L11_GSM_CF_UNCND_ENABLE'] == 1):
  $values['L11_GSM_CF_UNCND_NUM'] = $_POST['line11_gsm_cf_uncnd_num'] ;
  $updatesql_b.=",L11_GSM_CF_UNCND_NUM='".$values['L11_GSM_CF_UNCND_NUM']."'";
else:
  $values['L11_GSM_CF_UNCND_NUM'] = "";
endif; 
  $values['L11_GSM_CF_BUSY_ENABLE'] = $_POST['line11_gsm_cf_busy_enable']=='on'?'1':'0';
  $updatesql_b.=",L11_GSM_CF_BUSY_ENABLE='".$values['L11_GSM_CF_BUSY_ENABLE']."'";
if($values['L11_GSM_CF_BUSY_ENABLE'] == 1):
  $values['L11_GSM_CF_BUSY_NUM'] = $_POST['line11_gsm_cf_busy_num'] ;
  $updatesql_b.=",L11_GSM_CF_BUSY_NUM='".$values['L11_GSM_CF_BUSY_NUM']."'";
else:
  $values['L11_GSM_CF_BUSY_NUM'] = "";
endif; 
  $values['L11_GSM_CF_NOREPLY_ENABLE'] = $_POST['line11_gsm_cf_noreply_enable']=='on'?'1':'0';
  $updatesql_b.=",L11_GSM_CF_NOREPLY_ENABLE='".$values['L11_GSM_CF_NOREPLY_ENABLE']."'";
if($values['L11_GSM_CF_NOREPLY_ENABLE'] == 1):
  $values['L11_GSM_CF_NOREPLY_NUM'] = $_POST['line11_gsm_cf_noreply_num'] ;
  $updatesql_b.=",L11_GSM_CF_NOREPLY_NUM='".$values['L11_GSM_CF_NOREPLY_NUM']."'";
else:
  $values['L11_GSM_CF_NOREPLY_NUM'] = "";
endif; 
  $values['L11_GSM_CF_NOTREACHABLE_ENABLE'] = $_POST['line11_gsm_cf_notreachable_enable']=='on'?'1':'0';
  $updatesql_b.=",L11_GSM_CF_NOTREACHABLE_ENABLE='".$values['L11_GSM_CF_NOTREACHABLE_ENABLE']."'";
if($values['L11_GSM_CF_NOTREACHABLE_ENABLE'] == 1):
  $values['L11_GSM_CF_NOTREACHABLE_NUM'] = $_POST['line11_gsm_cf_notreachable_num'] ;
  $updatesql_b.=",L11_GSM_CF_NOTREACHABLE_NUM='".$values['L11_GSM_CF_NOTREACHABLE_NUM']."'";
else:
  $values['L11_GSM_CF_NOTREACHABLE_NUM'] = "";
endif; 

$values['L12_GSM_CF_UNCND_ENABLE'] = $_POST['line12_gsm_cf_uncnd_enable']=='on'?'1':'0';
  $updatesql_b.=",L12_GSM_CF_UNCND_ENABLE='".$values['L12_GSM_CF_UNCND_ENABLE']."'";
if($values['L12_GSM_CF_UNCND_ENABLE'] == 1):
  $values['L12_GSM_CF_UNCND_NUM'] = $_POST['line12_gsm_cf_uncnd_num'] ;
  $updatesql_b.=",L12_GSM_CF_UNCND_NUM='".$values['L12_GSM_CF_UNCND_NUM']."'";
else:
  $values['L12_GSM_CF_UNCND_NUM'] = "";
endif; 
  $values['L12_GSM_CF_BUSY_ENABLE'] = $_POST['line12_gsm_cf_busy_enable']=='on'?'1':'0';
  $updatesql_b.=",L12_GSM_CF_BUSY_ENABLE='".$values['L12_GSM_CF_BUSY_ENABLE']."'";
if($values['L12_GSM_CF_BUSY_ENABLE'] == 1):
  $values['L12_GSM_CF_BUSY_NUM'] = $_POST['line12_gsm_cf_busy_num'] ;
  $updatesql_b.=",L12_GSM_CF_BUSY_NUM='".$values['L12_GSM_CF_BUSY_NUM']."'";
else:
  $values['L12_GSM_CF_BUSY_NUM'] = "";
endif; 

  $values['L12_GSM_CF_NOREPLY_ENABLE'] = $_POST['line12_gsm_cf_noreply_enable']=='on'?'1':'0';
  $updatesql_b.=",L12_GSM_CF_NOREPLY_ENABLE='".$values['L12_GSM_CF_NOREPLY_ENABLE']."'";
if($values['L12_GSM_CF_NOREPLY_ENABLE'] == 1):
  $values['L12_GSM_CF_NOREPLY_NUM'] = $_POST['line12_gsm_cf_noreply_num'] ;
  $updatesql_b.=",L12_GSM_CF_NOREPLY_NUM='".$values['L12_GSM_CF_NOREPLY_NUM']."'";
else:
  $values['L12_GSM_CF_NOREPLY_NUM'] = "";
endif; 
  $values['L12_GSM_CF_NOTREACHABLE_ENABLE'] = $_POST['line12_gsm_cf_notreachable_enable']=='on'?'1':'0';
  $updatesql_b.=",L12_GSM_CF_NOTREACHABLE_ENABLE='".$values['L12_GSM_CF_NOTREACHABLE_ENABLE']."'";
if($values['L12_GSM_CF_NOTREACHABLE_ENABLE'] == 1):
  $values['L12_GSM_CF_NOTREACHABLE_NUM'] = $_POST['line12_gsm_cf_notreachable_num'] ;
  $updatesql_b.=",L12_GSM_CF_NOTREACHABLE_NUM='".$values['L12_GSM_CF_NOTREACHABLE_NUM']."'";
else:
  $values['L12_GSM_CF_NOTREACHABLE_NUM'] = "";
endif; 

$values['L13_GSM_CF_UNCND_ENABLE'] = $_POST['line13_gsm_cf_uncnd_enable']=='on'?'1':'0';
  $updatesql_b.=",L13_GSM_CF_UNCND_ENABLE='".$values['L13_GSM_CF_UNCND_ENABLE']."'";
if($values['L13_GSM_CF_UNCND_ENABLE'] == 1):
  $values['L13_GSM_CF_UNCND_NUM'] = $_POST['line13_gsm_cf_uncnd_num'] ;
  $updatesql_b.=",L13_GSM_CF_UNCND_NUM='".$values['L13_GSM_CF_UNCND_NUM']."'";
else:
  $values['L13_GSM_CF_UNCND_NUM'] = "";
endif; 
  $values['L13_GSM_CF_BUSY_ENABLE'] = $_POST['line13_gsm_cf_busy_enable']=='on'?'1':'0';
  $updatesql_b.=",L13_GSM_CF_BUSY_ENABLE='".$values['L13_GSM_CF_BUSY_ENABLE']."'";
if($values['L13_GSM_CF_BUSY_ENABLE'] == 1):
  $values['L13_GSM_CF_BUSY_NUM'] = $_POST['line13_gsm_cf_busy_num'] ;
  $updatesql_b.=",L13_GSM_CF_BUSY_NUM='".$values['L13_GSM_CF_BUSY_NUM']."'";
else:
  $values['L13_GSM_CF_BUSY_NUM'] = "";
endif; 
  $values['L13_GSM_CF_NOREPLY_ENABLE'] = $_POST['line13_gsm_cf_noreply_enable']=='on'?'1':'0';
  $updatesql_b.=",L13_GSM_CF_NOREPLY_ENABLE='".$values['L13_GSM_CF_NOREPLY_ENABLE']."'";
if($values['L13_GSM_CF_NOREPLY_ENABLE'] == 1):
  $values['L13_GSM_CF_NOREPLY_NUM'] = $_POST['line13_gsm_cf_noreply_num'] ;
  $updatesql_b.=",L13_GSM_CF_NOREPLY_NUM='".$values['L13_GSM_CF_NOREPLY_NUM']."'";
else:
  $values['L13_GSM_CF_NOREPLY_NUM'] = "";
endif; 
  $values['L13_GSM_CF_NOTREACHABLE_ENABLE'] = $_POST['line13_gsm_cf_notreachable_enable']=='on'?'1':'0';
  $updatesql_b.=",L13_GSM_CF_NOTREACHABLE_ENABLE='".$values['L13_GSM_CF_NOTREACHABLE_ENABLE']."'";
if($values['L13_GSM_CF_NOTREACHABLE_ENABLE'] == 1):
  $values['L13_GSM_CF_NOTREACHABLE_NUM'] = $_POST['line13_gsm_cf_notreachable_num'] ;
  $updatesql_b.=",L13_GSM_CF_NOTREACHABLE_NUM='".$values['L13_GSM_CF_NOTREACHABLE_NUM']."'";
else:
  $values['L13_GSM_CF_NOTREACHABLE_NUM'] = "";
endif; 

$values['L14_GSM_CF_UNCND_ENABLE'] = $_POST['line14_gsm_cf_uncnd_enable']=='on'?'1':'0';
  $updatesql_b.=",L14_GSM_CF_UNCND_ENABLE='".$values['L14_GSM_CF_UNCND_ENABLE']."'";
if($values['L14_GSM_CF_UNCND_ENABLE'] == 1):
  $values['L14_GSM_CF_UNCND_NUM'] = $_POST['line14_gsm_cf_uncnd_num'] ;
  $updatesql_b.=",L14_GSM_CF_UNCND_NUM='".$values['L14_GSM_CF_UNCND_NUM']."'";
else:
  $values['L14_GSM_CF_UNCND_NUM'] = "";
endif; 
  $values['L14_GSM_CF_BUSY_ENABLE'] = $_POST['line14_gsm_cf_busy_enable']=='on'?'1':'0';
  $updatesql_b.=",L14_GSM_CF_BUSY_ENABLE='".$values['L14_GSM_CF_BUSY_ENABLE']."'";
if($values['L14_GSM_CF_BUSY_ENABLE'] == 1):
  $values['L14_GSM_CF_BUSY_NUM'] = $_POST['line14_gsm_cf_busy_num'] ;
  $updatesql_b.=",L14_GSM_CF_BUSY_NUM='".$values['L14_GSM_CF_BUSY_NUM']."'";
else:
  $values['L14_GSM_CF_BUSY_NUM'] = "";
endif; 
  $values['L14_GSM_CF_NOREPLY_ENABLE'] = $_POST['line14_gsm_cf_noreply_enable']=='on'?'1':'0';
  $updatesql_b.=",L14_GSM_CF_NOREPLY_ENABLE='".$values['L14_GSM_CF_NOREPLY_ENABLE']."'";
if($values['L14_GSM_CF_NOREPLY_ENABLE'] == 1):
  $values['L14_GSM_CF_NOREPLY_NUM'] = $_POST['line14_gsm_cf_noreply_num'] ;
  $updatesql_b.=",L14_GSM_CF_NOREPLY_NUM='".$values['L14_GSM_CF_NOREPLY_NUM']."'";
else:
  $values['L14_GSM_CF_NOREPLY_NUM'] = "";
endif; 
  $values['L14_GSM_CF_NOTREACHABLE_ENABLE'] = $_POST['line14_gsm_cf_notreachable_enable']=='on'?'1':'0';
  $updatesql_b.=",L14_GSM_CF_NOTREACHABLE_ENABLE='".$values['L14_GSM_CF_NOTREACHABLE_ENABLE']."'";
if($values['L14_GSM_CF_NOTREACHABLE_ENABLE'] == 1):
  $values['L14_GSM_CF_NOTREACHABLE_NUM'] = $_POST['line14_gsm_cf_notreachable_num'] ;
  $updatesql_b.=",L14_GSM_CF_NOTREACHABLE_NUM='".$values['L14_GSM_CF_NOTREACHABLE_NUM']."'";
else:
  $values['L14_GSM_CF_NOTREACHABLE_NUM'] = "";
endif; 

$values['L15_GSM_CF_UNCND_ENABLE'] = $_POST['line15_gsm_cf_uncnd_enable']=='on'?'1':'0';
  $updatesql_b.=",L15_GSM_CF_UNCND_ENABLE='".$values['L15_GSM_CF_UNCND_ENABLE']."'";
if($values['L15_GSM_CF_UNCND_ENABLE'] == 1):
  $values['L15_GSM_CF_UNCND_NUM'] = $_POST['line15_gsm_cf_uncnd_num'] ;
  $updatesql_b.=",L15_GSM_CF_UNCND_NUM='".$values['L15_GSM_CF_UNCND_NUM']."'";
else:
  $values['L15_GSM_CF_UNCND_NUM'] = "";
endif; 
  $values['L15_GSM_CF_BUSY_ENABLE'] = $_POST['line15_gsm_cf_busy_enable']=='on'?'1':'0';
  $updatesql_b.=",L15_GSM_CF_BUSY_ENABLE='".$values['L15_GSM_CF_BUSY_ENABLE']."'";
if($values['L15_GSM_CF_BUSY_ENABLE'] == 1):
  $values['L15_GSM_CF_BUSY_NUM'] = $_POST['line15_gsm_cf_busy_num'] ;
  $updatesql_b.=",L15_GSM_CF_BUSY_NUM='".$values['L15_GSM_CF_BUSY_NUM']."'";
else:
  $values['L15_GSM_CF_BUSY_NUM'] = "";
endif; 
  $values['L15_GSM_CF_NOREPLY_ENABLE'] = $_POST['line15_gsm_cf_noreply_enable']=='on'?'1':'0';
  $updatesql_b.=",L15_GSM_CF_NOREPLY_ENABLE='".$values['L15_GSM_CF_NOREPLY_ENABLE']."'";
if($values['L15_GSM_CF_NOREPLY_ENABLE'] == 1):
  $values['L15_GSM_CF_NOREPLY_NUM'] = $_POST['line15_gsm_cf_noreply_num'] ;
  $updatesql_b.=",L15_GSM_CF_NOREPLY_NUM='".$values['L15_GSM_CF_NOREPLY_NUM']."'";
else:
  $values['L15_GSM_CF_NOREPLY_NUM'] = "";
endif; 
  $values['L15_GSM_CF_NOTREACHABLE_ENABLE'] = $_POST['line15_gsm_cf_notreachable_enable']=='on'?'1':'0';
  $updatesql_b.=",L15_GSM_CF_NOTREACHABLE_ENABLE='".$values['L15_GSM_CF_NOTREACHABLE_ENABLE']."'";
if($values['L15_GSM_CF_NOTREACHABLE_ENABLE'] == 1):
  $values['L15_GSM_CF_NOTREACHABLE_NUM'] = $_POST['line15_gsm_cf_notreachable_num'] ;
  $updatesql_b.=",L15_GSM_CF_NOTREACHABLE_NUM='".$values['L15_GSM_CF_NOTREACHABLE_NUM']."'";
else:
  $values['L15_GSM_CF_NOTREACHABLE_NUM'] = "";
endif; 

$values['L16_GSM_CF_UNCND_ENABLE'] = $_POST['line16_gsm_cf_uncnd_enable']=='on'?'1':'0';
  $updatesql_b.=",L16_GSM_CF_UNCND_ENABLE='".$values['L16_GSM_CF_UNCND_ENABLE']."'";
if($values['L16_GSM_CF_UNCND_ENABLE'] == 1):
  $values['L16_GSM_CF_UNCND_NUM'] = $_POST['line16_gsm_cf_uncnd_num'] ;
  $updatesql_b.=",L16_GSM_CF_UNCND_NUM='".$values['L16_GSM_CF_UNCND_NUM']."'";
else:
  $values['L16_GSM_CF_UNCND_NUM'] = "";
endif; 
  $values['L16_GSM_CF_BUSY_ENABLE'] = $_POST['line16_gsm_cf_busy_enable']=='on'?'1':'0';
  $updatesql_b.=",L16_GSM_CF_BUSY_ENABLE='".$values['L16_GSM_CF_BUSY_ENABLE']."'";
if($values['L16_GSM_CF_BUSY_ENABLE'] == 1):
  $values['L16_GSM_CF_BUSY_NUM'] = $_POST['line16_gsm_cf_busy_num'] ;
  $updatesql_b.=",L16_GSM_CF_BUSY_NUM='".$values['L16_GSM_CF_BUSY_NUM']."'";
else:
  $values['L16_GSM_CF_BUSY_NUM'] = "";
endif; 
  $values['L16_GSM_CF_NOREPLY_ENABLE'] = $_POST['line16_gsm_cf_noreply_enable']=='on'?'1':'0';
  $updatesql_b.=",L16_GSM_CF_NOREPLY_ENABLE='".$values['L16_GSM_CF_NOREPLY_ENABLE']."'";
if($values['L16_GSM_CF_NOREPLY_ENABLE'] == 1):
  $values['L16_GSM_CF_NOREPLY_NUM'] = $_POST['line16_gsm_cf_noreply_num'] ;
  $updatesql_b.=",L16_GSM_CF_NOREPLY_NUM='".$values['L16_GSM_CF_NOREPLY_NUM']."'";
else:
  $values['L16_GSM_CF_NOREPLY_NUM'] = "";
endif; 
  $values['L16_GSM_CF_NOTREACHABLE_ENABLE'] = $_POST['line16_gsm_cf_notreachable_enable']=='on'?'1':'0';
  $updatesql_b.=",L16_GSM_CF_NOTREACHABLE_ENABLE='".$values['L16_GSM_CF_NOTREACHABLE_ENABLE']."'";
if($values['L16_GSM_CF_NOTREACHABLE_ENABLE'] == 1):
  $values['L16_GSM_CF_NOTREACHABLE_NUM'] = $_POST['line16_gsm_cf_notreachable_num'] ;
  $updatesql_b.=",L16_GSM_CF_NOTREACHABLE_NUM='".$values['L16_GSM_CF_NOTREACHABLE_NUM']."'";
else:
  $values['L16_GSM_CF_NOTREACHABLE_NUM'] = "";
endif; 

$values['L17_GSM_CF_UNCND_ENABLE'] = $_POST['line17_gsm_cf_uncnd_enable']=='on'?'1':'0';
  $updatesql_b.=",L17_GSM_CF_UNCND_ENABLE='".$values['L17_GSM_CF_UNCND_ENABLE']."'";
if($values['L17_GSM_CF_UNCND_ENABLE'] == 1):
  $values['L17_GSM_CF_UNCND_NUM'] = $_POST['line17_gsm_cf_uncnd_num'] ;
  $updatesql_b.=",L17_GSM_CF_UNCND_NUM='".$values['L17_GSM_CF_UNCND_NUM']."'";
else:
  $values['L17_GSM_CF_UNCND_NUM'] = "";
endif; 
  $values['L17_GSM_CF_BUSY_ENABLE'] = $_POST['line17_gsm_cf_busy_enable']=='on'?'1':'0';
  $updatesql_b.=",L17_GSM_CF_BUSY_ENABLE='".$values['L17_GSM_CF_BUSY_ENABLE']."'";
if($values['L17_GSM_CF_BUSY_ENABLE'] == 1):
  $values['L17_GSM_CF_BUSY_NUM'] = $_POST['line17_gsm_cf_busy_num'] ;
  $updatesql_b.=",L17_GSM_CF_BUSY_NUM='".$values['L17_GSM_CF_BUSY_NUM']."'";
else:
  $values['L17_GSM_CF_BUSY_NUM'] = "";
endif; 
  $values['L17_GSM_CF_NOREPLY_ENABLE'] = $_POST['line17_gsm_cf_noreply_enable']=='on'?'1':'0';
  $updatesql_b.=",L17_GSM_CF_NOREPLY_ENABLE='".$values['L17_GSM_CF_NOREPLY_ENABLE']."'";
if($values['L17_GSM_CF_NOREPLY_ENABLE'] == 1):
  $values['L17_GSM_CF_NOREPLY_NUM'] = $_POST['line17_gsm_cf_noreply_num'] ;
  $updatesql_b.=",L17_GSM_CF_NOREPLY_NUM='".$values['L17_GSM_CF_NOREPLY_NUM']."'";
else:
  $values['L17_GSM_CF_NOREPLY_NUM'] = "";
endif; 
  $values['L17_GSM_CF_NOTREACHABLE_ENABLE'] = $_POST['line17_gsm_cf_notreachable_enable']=='on'?'1':'0';
  $updatesql_b.=",L17_GSM_CF_NOTREACHABLE_ENABLE='".$values['L17_GSM_CF_NOTREACHABLE_ENABLE']."'";
if($values['L17_GSM_CF_NOTREACHABLE_ENABLE'] == 1):
  $values['L17_GSM_CF_NOTREACHABLE_NUM'] = $_POST['line17_gsm_cf_notreachable_num'] ;
  $updatesql_b.=",L17_GSM_CF_NOTREACHABLE_NUM='".$values['L17_GSM_CF_NOTREACHABLE_NUM']."'";
else:
  $values['L17_GSM_CF_NOTREACHABLE_NUM'] = "";
endif; 

$values['L18_GSM_CF_UNCND_ENABLE'] = $_POST['line18_gsm_cf_uncnd_enable']=='on'?'1':'0';
  $updatesql_b.=",L18_GSM_CF_UNCND_ENABLE='".$values['L18_GSM_CF_UNCND_ENABLE']."'";
if($values['L18_GSM_CF_UNCND_ENABLE'] == 1):
  $values['L18_GSM_CF_UNCND_NUM'] = $_POST['line18_gsm_cf_uncnd_num'] ;
  $updatesql_b.=",L18_GSM_CF_UNCND_NUM='".$values['L18_GSM_CF_UNCND_NUM']."'";
else:
  $values['L18_GSM_CF_UNCND_NUM'] = "";
endif; 
  $values['L18_GSM_CF_BUSY_ENABLE'] = $_POST['line18_gsm_cf_busy_enable']=='on'?'1':'0';
  $updatesql_b.=",L18_GSM_CF_BUSY_ENABLE='".$values['L18_GSM_CF_BUSY_ENABLE']."'";
if($values['L18_GSM_CF_BUSY_ENABLE'] == 1):
  $values['L18_GSM_CF_BUSY_NUM'] = $_POST['line18_gsm_cf_busy_num'] ;
  $updatesql_b.=",L18_GSM_CF_BUSY_NUM='".$values['L18_GSM_CF_BUSY_NUM']."'";
else:
  $values['L18_GSM_CF_BUSY_NUM'] = "";
endif; 
  $values['L18_GSM_CF_NOREPLY_ENABLE'] = $_POST['line18_gsm_cf_noreply_enable']=='on'?'1':'0';
  $updatesql_b.=",L18_GSM_CF_NOREPLY_ENABLE='".$values['L18_GSM_CF_NOREPLY_ENABLE']."'";
if($values['L18_GSM_CF_NOREPLY_ENABLE'] == 1):
  $values['L18_GSM_CF_NOREPLY_NUM'] = $_POST['line18_gsm_cf_noreply_num'] ;
  $updatesql_b.=",L18_GSM_CF_NOREPLY_NUM='".$values['L18_GSM_CF_NOREPLY_NUM']."'";
else:
  $values['L18_GSM_CF_NOREPLY_NUM'] = "";
endif; 
  $values['L18_GSM_CF_NOTREACHABLE_ENABLE'] = $_POST['line18_gsm_cf_notreachable_enable']=='on'?'1':'0';
  $updatesql_b.=",L18_GSM_CF_NOTREACHABLE_ENABLE='".$values['L18_GSM_CF_NOTREACHABLE_ENABLE']."'";
if($values['L18_GSM_CF_NOTREACHABLE_ENABLE'] == 1):
  $values['L18_GSM_CF_NOTREACHABLE_NUM'] = $_POST['line18_gsm_cf_notreachable_num'] ;
  $updatesql_b.=",L18_GSM_CF_NOTREACHABLE_NUM='".$values['L18_GSM_CF_NOTREACHABLE_NUM']."'";
else:
  $values['L18_GSM_CF_NOTREACHABLE_NUM'] = "";
endif; 

$values['L19_GSM_CF_UNCND_ENABLE'] = $_POST['line19_gsm_cf_uncnd_enable']=='on'?'1':'0';
  $updatesql_b.=",L19_GSM_CF_UNCND_ENABLE='".$values['L19_GSM_CF_UNCND_ENABLE']."'";
if($values['L19_GSM_CF_UNCND_ENABLE'] == 1):
  $values['L19_GSM_CF_UNCND_NUM'] = $_POST['line19_gsm_cf_uncnd_num'] ;
  $updatesql_b.=",L19_GSM_CF_UNCND_NUM='".$values['L19_GSM_CF_UNCND_NUM']."'";
else:
  $values['L19_GSM_CF_UNCND_NUM'] = "";
endif; 
  $values['L19_GSM_CF_BUSY_ENABLE'] = $_POST['line19_gsm_cf_busy_enable']=='on'?'1':'0';
  $updatesql_b.=",L19_GSM_CF_BUSY_ENABLE='".$values['L19_GSM_CF_BUSY_ENABLE']."'";
if($values['L19_GSM_CF_BUSY_ENABLE'] == 1):
  $values['L19_GSM_CF_BUSY_NUM'] = $_POST['line19_gsm_cf_busy_num'] ;
  $updatesql_b.=",L19_GSM_CF_BUSY_NUM='".$values['L19_GSM_CF_BUSY_NUM']."'";
else:
  $values['L19_GSM_CF_BUSY_NUM'] = "";
endif; 
  $values['L19_GSM_CF_NOREPLY_ENABLE'] = $_POST['line19_gsm_cf_noreply_enable']=='on'?'1':'0';
  $updatesql_b.=",L19_GSM_CF_NOREPLY_ENABLE='".$values['L19_GSM_CF_NOREPLY_ENABLE']."'";
if($values['L19_GSM_CF_NOREPLY_ENABLE'] == 1):
  $values['L19_GSM_CF_NOREPLY_NUM'] = $_POST['line19_gsm_cf_noreply_num'] ;
  $updatesql_b.=",L19_GSM_CF_NOREPLY_NUM='".$values['L19_GSM_CF_NOREPLY_NUM']."'";
else:
  $values['L19_GSM_CF_NOREPLY_NUM'] = "";
endif; 
  $values['L19_GSM_CF_NOTREACHABLE_ENABLE'] = $_POST['line19_gsm_cf_notreachable_enable']=='on'?'1':'0';
  $updatesql_b.=",L19_GSM_CF_NOTREACHABLE_ENABLE='".$values['L19_GSM_CF_NOTREACHABLE_ENABLE']."'";
if($values['L19_GSM_CF_NOTREACHABLE_ENABLE'] == 1):
  $values['L19_GSM_CF_NOTREACHABLE_NUM'] = $_POST['line19_gsm_cf_notreachable_num'] ;
  $updatesql_b.=",L19_GSM_CF_NOTREACHABLE_NUM='".$values['L19_GSM_CF_NOTREACHABLE_NUM']."'";
else:
  $values['L19_GSM_CF_NOTREACHABLE_NUM'] = "";
endif; 

$values['L20_GSM_CF_UNCND_ENABLE'] = $_POST['line20_gsm_cf_uncnd_enable']=='on'?'1':'0';
  $updatesql_b.=",L20_GSM_CF_UNCND_ENABLE='".$values['L20_GSM_CF_UNCND_ENABLE']."'";
if($values['L20_GSM_CF_UNCND_ENABLE'] == 1):
  $values['L20_GSM_CF_UNCND_NUM'] = $_POST['line20_gsm_cf_uncnd_num'] ;
  $updatesql_b.=",L20_GSM_CF_UNCND_NUM='".$values['L20_GSM_CF_UNCND_NUM']."'";
else:
  $values['L20_GSM_CF_UNCND_NUM'] = "";
endif; 
  $values['L20_GSM_CF_BUSY_ENABLE'] = $_POST['line20_gsm_cf_busy_enable']=='on'?'1':'0';
  $updatesql_b.=",L20_GSM_CF_BUSY_ENABLE='".$values['L20_GSM_CF_BUSY_ENABLE']."'";
if($values['L20_GSM_CF_BUSY_ENABLE'] == 1):
  $values['L20_GSM_CF_BUSY_NUM'] = $_POST['line20_gsm_cf_busy_num'] ;
  $updatesql_b.=",L20_GSM_CF_BUSY_NUM='".$values['L20_GSM_CF_BUSY_NUM']."'";
else:
  $values['L20_GSM_CF_BUSY_NUM'] = "";
endif; 
  $values['L20_GSM_CF_NOREPLY_ENABLE'] = $_POST['line20_gsm_cf_noreply_enable']=='on'?'1':'0';
  $updatesql_b.=",L20_GSM_CF_NOREPLY_ENABLE='".$values['L20_GSM_CF_NOREPLY_ENABLE']."'";
if($values['L20_GSM_CF_NOREPLY_ENABLE'] == 1):
  $values['L20_GSM_CF_NOREPLY_NUM'] = $_POST['line20_gsm_cf_noreply_num'] ;
  $updatesql_b.=",L20_GSM_CF_NOREPLY_NUM='".$values['L20_GSM_CF_NOREPLY_NUM']."'";
else:
  $values['L20_GSM_CF_NOREPLY_NUM'] = "";
endif; 
  $values['L20_GSM_CF_NOTREACHABLE_ENABLE'] = $_POST['line20_gsm_cf_notreachable_enable']=='on'?'1':'0';
  $updatesql_b.=",L20_GSM_CF_NOTREACHABLE_ENABLE='".$values['L20_GSM_CF_NOTREACHABLE_ENABLE']."'";
if($values['L20_GSM_CF_NOTREACHABLE_ENABLE'] == 1):
  $values['L20_GSM_CF_NOTREACHABLE_NUM'] = $_POST['line20_gsm_cf_notreachable_num'] ;
  $updatesql_b.=",L20_GSM_CF_NOTREACHABLE_NUM='".$values['L20_GSM_CF_NOTREACHABLE_NUM']."'";
else:
  $values['L20_GSM_CF_NOTREACHABLE_NUM'] = "";
endif; 

$values['L21_GSM_CF_UNCND_ENABLE'] = $_POST['line21_gsm_cf_uncnd_enable']=='on'?'1':'0';
  $updatesql_b.=",L21_GSM_CF_UNCND_ENABLE='".$values['L21_GSM_CF_UNCND_ENABLE']."'";
if($values['L21_GSM_CF_UNCND_ENABLE'] == 1):
  $values['L21_GSM_CF_UNCND_NUM'] = $_POST['line21_gsm_cf_uncnd_num'] ;
  $updatesql_b.=",L21_GSM_CF_UNCND_NUM='".$values['L21_GSM_CF_UNCND_NUM']."'";
else:
  $values['L21_GSM_CF_UNCND_NUM'] = "";
endif; 
  $values['L21_GSM_CF_BUSY_ENABLE'] = $_POST['line21_gsm_cf_busy_enable']=='on'?'1':'0';
  $updatesql_b.=",L21_GSM_CF_BUSY_ENABLE='".$values['L21_GSM_CF_BUSY_ENABLE']."'";
if($values['L21_GSM_CF_BUSY_ENABLE'] == 1):
  $values['L21_GSM_CF_BUSY_NUM'] = $_POST['line21_gsm_cf_busy_num'] ;
  $updatesql_b.=",L21_GSM_CF_BUSY_NUM='".$values['L21_GSM_CF_BUSY_NUM']."'";
else:
  $values['L21_GSM_CF_BUSY_NUM'] = "";
endif; 
  $values['L21_GSM_CF_NOREPLY_ENABLE'] = $_POST['line21_gsm_cf_noreply_enable']=='on'?'1':'0';
  $updatesql_b.=",L21_GSM_CF_NOREPLY_ENABLE='".$values['L21_GSM_CF_NOREPLY_ENABLE']."'";
if($values['L21_GSM_CF_NOREPLY_ENABLE'] == 1):
  $values['L21_GSM_CF_NOREPLY_NUM'] = $_POST['line21_gsm_cf_noreply_num'] ;
  $updatesql_b.=",L21_GSM_CF_NOREPLY_NUM='".$values['L21_GSM_CF_NOREPLY_NUM']."'";
else:
  $values['L21_GSM_CF_NOREPLY_NUM'] = "";
endif; 
  $values['L21_GSM_CF_NOTREACHABLE_ENABLE'] = $_POST['line21_gsm_cf_notreachable_enable']=='on'?'1':'0';
  $updatesql_b.=",L21_GSM_CF_NOTREACHABLE_ENABLE='".$values['L21_GSM_CF_NOTREACHABLE_ENABLE']."'";
if($values['L21_GSM_CF_NOTREACHABLE_ENABLE'] == 1):
  $values['L21_GSM_CF_NOTREACHABLE_NUM'] = $_POST['line21_gsm_cf_notreachable_num'] ;
  $updatesql_b.=",L21_GSM_CF_NOTREACHABLE_NUM='".$values['L21_GSM_CF_NOTREACHABLE_NUM']."'";
else:
  $values['L21_GSM_CF_NOTREACHABLE_NUM'] = "";
endif; 

$values['L22_GSM_CF_UNCND_ENABLE'] = $_POST['line22_gsm_cf_uncnd_enable']=='on'?'1':'0';
  $updatesql_b.=",L22_GSM_CF_UNCND_ENABLE='".$values['L22_GSM_CF_UNCND_ENABLE']."'";
if($values['L22_GSM_CF_UNCND_ENABLE'] == 1):
  $values['L22_GSM_CF_UNCND_NUM'] = $_POST['line22_gsm_cf_uncnd_num'] ;
  $updatesql_b.=",L22_GSM_CF_UNCND_NUM='".$values['L22_GSM_CF_UNCND_NUM']."'";
else:
  $values['L22_GSM_CF_UNCND_NUM'] = "";
endif; 
  $values['L22_GSM_CF_BUSY_ENABLE'] = $_POST['line22_gsm_cf_busy_enable']=='on'?'1':'0';
  $updatesql_b.=",L22_GSM_CF_BUSY_ENABLE='".$values['L22_GSM_CF_BUSY_ENABLE']."'";
if($values['L22_GSM_CF_BUSY_ENABLE'] == 1):
  $values['L22_GSM_CF_BUSY_NUM'] = $_POST['line22_gsm_cf_busy_num'] ;
  $updatesql_b.=",L22_GSM_CF_BUSY_NUM='".$values['L22_GSM_CF_BUSY_NUM']."'";
else:
  $values['L22_GSM_CF_BUSY_NUM'] = "";
endif; 
  $values['L22_GSM_CF_NOREPLY_ENABLE'] = $_POST['line22_gsm_cf_noreply_enable']=='on'?'1':'0';
  $updatesql_b.=",L22_GSM_CF_NOREPLY_ENABLE='".$values['L22_GSM_CF_NOREPLY_ENABLE']."'";
if($values['L22_GSM_CF_NOREPLY_ENABLE'] == 1):
  $values['L22_GSM_CF_NOREPLY_NUM'] = $_POST['line22_gsm_cf_noreply_num'] ;
  $updatesql_b.=",L22_GSM_CF_NOREPLY_NUM='".$values['L22_GSM_CF_NOREPLY_NUM']."'";
else:
  $values['L22_GSM_CF_NOREPLY_NUM'] = "";
endif; 
  $values['L22_GSM_CF_NOTREACHABLE_ENABLE'] = $_POST['line22_gsm_cf_notreachable_enable']=='on'?'1':'0';
  $updatesql_b.=",L22_GSM_CF_NOTREACHABLE_ENABLE='".$values['L22_GSM_CF_NOTREACHABLE_ENABLE']."'";
if($values['L22_GSM_CF_NOTREACHABLE_ENABLE'] == 1):
  $values['L22_GSM_CF_NOTREACHABLE_NUM'] = $_POST['line22_gsm_cf_notreachable_num'] ;
  $updatesql_b.=",L22_GSM_CF_NOTREACHABLE_NUM='".$values['L22_GSM_CF_NOTREACHABLE_NUM']."'";
else:
  $values['L22_GSM_CF_NOTREACHABLE_NUM'] = "";
endif; 

$values['L23_GSM_CF_UNCND_ENABLE'] = $_POST['line23_gsm_cf_uncnd_enable']=='on'?'1':'0';
  $updatesql_b.=",L23_GSM_CF_UNCND_ENABLE='".$values['L23_GSM_CF_UNCND_ENABLE']."'";
if($values['L23_GSM_CF_UNCND_ENABLE'] == 1):
  $values['L23_GSM_CF_UNCND_NUM'] = $_POST['line23_gsm_cf_uncnd_num'] ;
  $updatesql_b.=",L23_GSM_CF_UNCND_NUM='".$values['L23_GSM_CF_UNCND_NUM']."'";
else:
  $values['L23_GSM_CF_UNCND_NUM'] = "";
endif; 
  $values['L23_GSM_CF_BUSY_ENABLE'] = $_POST['line23_gsm_cf_busy_enable']=='on'?'1':'0';
  $updatesql_b.=",L23_GSM_CF_BUSY_ENABLE='".$values['L23_GSM_CF_BUSY_ENABLE']."'";
if($values['L23_GSM_CF_BUSY_ENABLE'] == 1):
  $values['L23_GSM_CF_BUSY_NUM'] = $_POST['line23_gsm_cf_busy_num'] ;
  $updatesql_b.=",L23_GSM_CF_BUSY_NUM='".$values['L23_GSM_CF_BUSY_NUM']."'";
else:
  $values['L23_GSM_CF_BUSY_NUM'] = "";
endif; 
  $values['L23_GSM_CF_NOREPLY_ENABLE'] = $_POST['line23_gsm_cf_noreply_enable']=='on'?'1':'0';
  $updatesql_b.=",L23_GSM_CF_NOREPLY_ENABLE='".$values['L23_GSM_CF_NOREPLY_ENABLE']."'";
if($values['L23_GSM_CF_NOREPLY_ENABLE'] == 1):
  $values['L23_GSM_CF_NOREPLY_NUM'] = $_POST['line23_gsm_cf_noreply_num'] ;
  $updatesql_b.=",L23_GSM_CF_NOREPLY_NUM='".$values['L23_GSM_CF_NOREPLY_NUM']."'";
else:
  $values['L23_GSM_CF_NOREPLY_NUM'] = "";
endif; 
  $values['L23_GSM_CF_NOTREACHABLE_ENABLE'] = $_POST['line23_gsm_cf_notreachable_enable']=='on'?'1':'0';
  $updatesql_b.=",L23_GSM_CF_NOTREACHABLE_ENABLE='".$values['L23_GSM_CF_NOTREACHABLE_ENABLE']."'";
if($values['L23_GSM_CF_NOTREACHABLE_ENABLE'] == 1):
  $values['L23_GSM_CF_NOTREACHABLE_NUM'] = $_POST['line23_gsm_cf_notreachable_num'] ;
  $updatesql_b.=",L23_GSM_CF_NOTREACHABLE_NUM='".$values['L23_GSM_CF_NOTREACHABLE_NUM']."'";
else:
  $values['L23_GSM_CF_NOTREACHABLE_NUM'] = "";
endif; 

$values['L24_GSM_CF_UNCND_ENABLE'] = $_POST['line24_gsm_cf_uncnd_enable']=='on'?'1':'0';
  $updatesql_b.=",L24_GSM_CF_UNCND_ENABLE='".$values['L24_GSM_CF_UNCND_ENABLE']."'";
if($values['L24_GSM_CF_UNCND_ENABLE'] == 1):
  $values['L24_GSM_CF_UNCND_NUM'] = $_POST['line24_gsm_cf_uncnd_num'] ;
  $updatesql_b.=",L24_GSM_CF_UNCND_NUM='".$values['L24_GSM_CF_UNCND_NUM']."'";
else:
  $values['L24_GSM_CF_UNCND_NUM'] = "";
endif; 
  $values['L24_GSM_CF_BUSY_ENABLE'] = $_POST['line24_gsm_cf_busy_enable']=='on'?'1':'0';
  $updatesql_b.=",L24_GSM_CF_BUSY_ENABLE='".$values['L24_GSM_CF_BUSY_ENABLE']."'";
if($values['L24_GSM_CF_BUSY_ENABLE'] == 1):
  $values['L24_GSM_CF_BUSY_NUM'] = $_POST['line24_gsm_cf_busy_num'] ;
  $updatesql_b.=",L24_GSM_CF_BUSY_NUM='".$values['L24_GSM_CF_BUSY_NUM']."'";
else:
  $values['L24_GSM_CF_BUSY_NUM'] = "";
endif; 
  $values['L24_GSM_CF_NOREPLY_ENABLE'] = $_POST['line24_gsm_cf_noreply_enable']=='on'?'1':'0';
  $updatesql_b.=",L24_GSM_CF_NOREPLY_ENABLE='".$values['L24_GSM_CF_NOREPLY_ENABLE']."'";
if($values['L24_GSM_CF_NOREPLY_ENABLE'] == 1):
  $values['L24_GSM_CF_NOREPLY_NUM'] = $_POST['line24_gsm_cf_noreply_num'] ;
  $updatesql_b.=",L24_GSM_CF_NOREPLY_NUM='".$values['L24_GSM_CF_NOREPLY_NUM']."'";
else:
  $values['L24_GSM_CF_NOREPLY_NUM'] = "";
endif; 
  $values['L24_GSM_CF_NOTREACHABLE_ENABLE'] = $_POST['line24_gsm_cf_notreachable_enable']=='on'?'1':'0';
  $updatesql_b.=",L24_GSM_CF_NOTREACHABLE_ENABLE='".$values['L24_GSM_CF_NOTREACHABLE_ENABLE']."'";
if($values['L24_GSM_CF_NOTREACHABLE_ENABLE'] == 1):
  $values['L24_GSM_CF_NOTREACHABLE_NUM'] = $_POST['line24_gsm_cf_notreachable_num'] ;
  $updatesql_b.=",L24_GSM_CF_NOTREACHABLE_NUM='".$values['L24_GSM_CF_NOTREACHABLE_NUM']."'";
else:
  $values['L24_GSM_CF_NOTREACHABLE_NUM'] = "";
endif; 

$values['L25_GSM_CF_UNCND_ENABLE'] = $_POST['line25_gsm_cf_uncnd_enable']=='on'?'1':'0';
  $updatesql_b.=",L25_GSM_CF_UNCND_ENABLE='".$values['L25_GSM_CF_UNCND_ENABLE']."'";
if($values['L25_GSM_CF_UNCND_ENABLE'] == 1):
  $values['L25_GSM_CF_UNCND_NUM'] = $_POST['line25_gsm_cf_uncnd_num'] ;
  $updatesql_b.=",L25_GSM_CF_UNCND_NUM='".$values['L25_GSM_CF_UNCND_NUM']."'";
else:
  $values['L25_GSM_CF_UNCND_NUM'] = "";
endif; 
  $values['L25_GSM_CF_BUSY_ENABLE'] = $_POST['line25_gsm_cf_busy_enable']=='on'?'1':'0';
  $updatesql_b.=",L25_GSM_CF_BUSY_ENABLE='".$values['L25_GSM_CF_BUSY_ENABLE']."'";
if($values['L25_GSM_CF_BUSY_ENABLE'] == 1):
  $values['L25_GSM_CF_BUSY_NUM'] = $_POST['line25_gsm_cf_busy_num'] ;
  $updatesql_b.=",L25_GSM_CF_BUSY_NUM='".$values['L25_GSM_CF_BUSY_NUM']."'";
else:
  $values['L25_GSM_CF_BUSY_NUM'] = "";
endif; 
  $values['L25_GSM_CF_NOREPLY_ENABLE'] = $_POST['line25_gsm_cf_noreply_enable']=='on'?'1':'0';
  $updatesql_b.=",L25_GSM_CF_NOREPLY_ENABLE='".$values['L25_GSM_CF_NOREPLY_ENABLE']."'";
if($values['L25_GSM_CF_NOREPLY_ENABLE'] == 1):
  $values['L25_GSM_CF_NOREPLY_NUM'] = $_POST['line25_gsm_cf_noreply_num'] ;
  $updatesql_b.=",L25_GSM_CF_NOREPLY_NUM='".$values['L25_GSM_CF_NOREPLY_NUM']."'";
else:
  $values['L25_GSM_CF_NOREPLY_NUM'] = "";
endif; 
  $values['L25_GSM_CF_NOTREACHABLE_ENABLE'] = $_POST['line25_gsm_cf_notreachable_enable']=='on'?'1':'0';
  $updatesql_b.=",L25_GSM_CF_NOTREACHABLE_ENABLE='".$values['L25_GSM_CF_NOTREACHABLE_ENABLE']."'";
if($values['L25_GSM_CF_NOTREACHABLE_ENABLE'] == 1):
  $values['L25_GSM_CF_NOTREACHABLE_NUM'] = $_POST['line25_gsm_cf_notreachable_num'] ;
  $updatesql_b.=",L25_GSM_CF_NOTREACHABLE_NUM='".$values['L25_GSM_CF_NOTREACHABLE_NUM']."'";
else:
  $values['L25_GSM_CF_NOTREACHABLE_NUM'] = "";
endif; 

$values['L26_GSM_CF_UNCND_ENABLE'] = $_POST['line26_gsm_cf_uncnd_enable']=='on'?'1':'0';
  $updatesql_b.=",L26_GSM_CF_UNCND_ENABLE='".$values['L26_GSM_CF_UNCND_ENABLE']."'";
if($values['L26_GSM_CF_UNCND_ENABLE'] == 1):
  $values['L26_GSM_CF_UNCND_NUM'] = $_POST['line26_gsm_cf_uncnd_num'] ;
  $updatesql_b.=",L26_GSM_CF_UNCND_NUM='".$values['L26_GSM_CF_UNCND_NUM']."'";
else:
  $values['L26_GSM_CF_UNCND_NUM'] = "";
endif; 
  $values['L26_GSM_CF_BUSY_ENABLE'] = $_POST['line26_gsm_cf_busy_enable']=='on'?'1':'0';
  $updatesql_b.=",L26_GSM_CF_BUSY_ENABLE='".$values['L26_GSM_CF_BUSY_ENABLE']."'";
if($values['L26_GSM_CF_BUSY_ENABLE'] == 1):
  $values['L26_GSM_CF_BUSY_NUM'] = $_POST['line26_gsm_cf_busy_num'] ;
  $updatesql_b.=",L26_GSM_CF_BUSY_NUM='".$values['L26_GSM_CF_BUSY_NUM']."'";
else:
  $values['L26_GSM_CF_BUSY_NUM'] = "";
endif; 
  $values['L26_GSM_CF_NOREPLY_ENABLE'] = $_POST['line26_gsm_cf_noreply_enable']=='on'?'1':'0';
  $updatesql_b.=",L26_GSM_CF_NOREPLY_ENABLE='".$values['L26_GSM_CF_NOREPLY_ENABLE']."'";
if($values['L26_GSM_CF_NOREPLY_ENABLE'] == 1):
  $values['L26_GSM_CF_NOREPLY_NUM'] = $_POST['line26_gsm_cf_noreply_num'] ;
  $updatesql_b.=",L26_GSM_CF_NOREPLY_NUM='".$values['L26_GSM_CF_NOREPLY_NUM']."'";
else:
  $values['L26_GSM_CF_NOREPLY_NUM'] = "";
endif; 
  $values['L26_GSM_CF_NOTREACHABLE_ENABLE'] = $_POST['line26_gsm_cf_notreachable_enable']=='on'?'1':'0';
  $updatesql_b.=",L26_GSM_CF_NOTREACHABLE_ENABLE='".$values['L26_GSM_CF_NOTREACHABLE_ENABLE']."'";
if($values['L26_GSM_CF_NOTREACHABLE_ENABLE'] == 1):
  $values['L26_GSM_CF_NOTREACHABLE_NUM'] = $_POST['line26_gsm_cf_notreachable_num'] ;
  $updatesql_b.=",L26_GSM_CF_NOTREACHABLE_NUM='".$values['L26_GSM_CF_NOTREACHABLE_NUM']."'";
else:
  $values['L26_GSM_CF_NOTREACHABLE_NUM'] = "";
endif; 

$values['L27_GSM_CF_UNCND_ENABLE'] = $_POST['line27_gsm_cf_uncnd_enable']=='on'?'1':'0';
  $updatesql_b.=",L27_GSM_CF_UNCND_ENABLE='".$values['L27_GSM_CF_UNCND_ENABLE']."'";
if($values['L27_GSM_CF_UNCND_ENABLE'] == 1):
  $values['L27_GSM_CF_UNCND_NUM'] = $_POST['line27_gsm_cf_uncnd_num'] ;
  $updatesql_b.=",L27_GSM_CF_UNCND_NUM='".$values['L27_GSM_CF_UNCND_NUM']."'";
else:
  $values['L27_GSM_CF_UNCND_NUM'] = "";
endif; 
  $values['L27_GSM_CF_BUSY_ENABLE'] = $_POST['line27_gsm_cf_busy_enable']=='on'?'1':'0';
  $updatesql_b.=",L27_GSM_CF_BUSY_ENABLE='".$values['L27_GSM_CF_BUSY_ENABLE']."'";
if($values['L27_GSM_CF_BUSY_ENABLE'] == 1):
  $values['L27_GSM_CF_BUSY_NUM'] = $_POST['line27_gsm_cf_busy_num'] ;
  $updatesql_b.=",L27_GSM_CF_BUSY_NUM='".$values['L27_GSM_CF_BUSY_NUM']."'";
else:
  $values['L27_GSM_CF_BUSY_NUM'] = "";
endif; 
  $values['L27_GSM_CF_NOREPLY_ENABLE'] = $_POST['line27_gsm_cf_noreply_enable']=='on'?'1':'0';
  $updatesql_b.=",L27_GSM_CF_NOREPLY_ENABLE='".$values['L27_GSM_CF_NOREPLY_ENABLE']."'";
if($values['L27_GSM_CF_NOREPLY_ENABLE'] == 1):
  $values['L27_GSM_CF_NOREPLY_NUM'] = $_POST['line27_gsm_cf_noreply_num'] ;
  $updatesql_b.=",L27_GSM_CF_NOREPLY_NUM='".$values['L27_GSM_CF_NOREPLY_NUM']."'";
else:
  $values['L27_GSM_CF_NOREPLY_NUM'] = "";
endif; 
  $values['L27_GSM_CF_NOTREACHABLE_ENABLE'] = $_POST['line27_gsm_cf_notreachable_enable']=='on'?'1':'0';
  $updatesql_b.=",L27_GSM_CF_NOTREACHABLE_ENABLE='".$values['L27_GSM_CF_NOTREACHABLE_ENABLE']."'";
if($values['L27_GSM_CF_NOTREACHABLE_ENABLE'] == 1):
  $values['L27_GSM_CF_NOTREACHABLE_NUM'] = $_POST['line27_gsm_cf_notreachable_num'] ;
  $updatesql_b.=",L27_GSM_CF_NOTREACHABLE_NUM='".$values['L27_GSM_CF_NOTREACHABLE_NUM']."'";
else:
  $values['L27_GSM_CF_NOTREACHABLE_NUM'] = "";
endif; 

$values['L28_GSM_CF_UNCND_ENABLE'] = $_POST['line28_gsm_cf_uncnd_enable']=='on'?'1':'0';
  $updatesql_b.=",L28_GSM_CF_UNCND_ENABLE='".$values['L28_GSM_CF_UNCND_ENABLE']."'";
if($values['L28_GSM_CF_UNCND_ENABLE'] == 1):
  $values['L28_GSM_CF_UNCND_NUM'] = $_POST['line28_gsm_cf_uncnd_num'] ;
  $updatesql_b.=",L28_GSM_CF_UNCND_NUM='".$values['L28_GSM_CF_UNCND_NUM']."'";
else:
  $values['L28_GSM_CF_UNCND_NUM'] = "";
endif; 
  $values['L28_GSM_CF_BUSY_ENABLE'] = $_POST['line28_gsm_cf_busy_enable']=='on'?'1':'0';
  $updatesql_b.=",L28_GSM_CF_BUSY_ENABLE='".$values['L28_GSM_CF_BUSY_ENABLE']."'";
if($values['L28_GSM_CF_BUSY_ENABLE'] == 1):
  $values['L28_GSM_CF_BUSY_NUM'] = $_POST['line28_gsm_cf_busy_num'] ;
  $updatesql_b.=",L28_GSM_CF_BUSY_NUM='".$values['L28_GSM_CF_BUSY_NUM']."'";
else:
  $values['L28_GSM_CF_BUSY_NUM'] = "";
endif; 
  $values['L28_GSM_CF_NOREPLY_ENABLE'] = $_POST['line28_gsm_cf_noreply_enable']=='on'?'1':'0';
  $updatesql_b.=",L28_GSM_CF_NOREPLY_ENABLE='".$values['L28_GSM_CF_NOREPLY_ENABLE']."'";
if($values['L28_GSM_CF_NOREPLY_ENABLE'] == 1):
  $values['L28_GSM_CF_NOREPLY_NUM'] = $_POST['line28_gsm_cf_noreply_num'] ;
  $updatesql_b.=",L28_GSM_CF_NOREPLY_NUM='".$values['L28_GSM_CF_NOREPLY_NUM']."'";
else:
  $values['L28_GSM_CF_NOREPLY_NUM'] = "";
endif; 
  $values['L28_GSM_CF_NOTREACHABLE_ENABLE'] = $_POST['line28_gsm_cf_notreachable_enable']=='on'?'1':'0';
  $updatesql_b.=",L28_GSM_CF_NOTREACHABLE_ENABLE='".$values['L28_GSM_CF_NOTREACHABLE_ENABLE']."'";
if($values['L28_GSM_CF_NOTREACHABLE_ENABLE'] == 1):
  $values['L28_GSM_CF_NOTREACHABLE_NUM'] = $_POST['line28_gsm_cf_notreachable_num'] ;
  $updatesql_b.=",L28_GSM_CF_NOTREACHABLE_NUM='".$values['L28_GSM_CF_NOTREACHABLE_NUM']."'";
else:
  $values['L28_GSM_CF_NOTREACHABLE_NUM'] = "";
endif; 

$values['L29_GSM_CF_UNCND_ENABLE'] = $_POST['line29_gsm_cf_uncnd_enable']=='on'?'1':'0';
  $updatesql_b.=",L29_GSM_CF_UNCND_ENABLE='".$values['L29_GSM_CF_UNCND_ENABLE']."'";
if($values['L29_GSM_CF_UNCND_ENABLE'] == 1):
  $values['L29_GSM_CF_UNCND_NUM'] = $_POST['line29_gsm_cf_uncnd_num'] ;
  $updatesql_b.=",L29_GSM_CF_UNCND_NUM='".$values['L29_GSM_CF_UNCND_NUM']."'";
else:
  $values['L29_GSM_CF_UNCND_NUM'] = "";
endif; 
  $values['L29_GSM_CF_BUSY_ENABLE'] = $_POST['line29_gsm_cf_busy_enable']=='on'?'1':'0';
  $updatesql_b.=",L29_GSM_CF_BUSY_ENABLE='".$values['L29_GSM_CF_BUSY_ENABLE']."'";
if($values['L29_GSM_CF_BUSY_ENABLE'] == 1):
  $values['L29_GSM_CF_BUSY_NUM'] = $_POST['line29_gsm_cf_busy_num'] ;
  $updatesql_b.=",L29_GSM_CF_BUSY_NUM='".$values['L29_GSM_CF_BUSY_NUM']."'";
else:
  $values['L29_GSM_CF_BUSY_NUM'] = "";
endif; 
  $values['L29_GSM_CF_NOREPLY_ENABLE'] = $_POST['line29_gsm_cf_noreply_enable']=='on'?'1':'0';
  $updatesql_b.=",L29_GSM_CF_NOREPLY_ENABLE='".$values['L29_GSM_CF_NOREPLY_ENABLE']."'";
if($values['L29_GSM_CF_NOREPLY_ENABLE'] == 1):
  $values['L29_GSM_CF_NOREPLY_NUM'] = $_POST['line29_gsm_cf_noreply_num'] ;
  $updatesql_b.=",L29_GSM_CF_NOREPLY_NUM='".$values['L29_GSM_CF_NOREPLY_NUM']."'";
else:
  $values['L29_GSM_CF_NOREPLY_NUM'] = "";
endif; 
  $values['L29_GSM_CF_NOTREACHABLE_ENABLE'] = $_POST['line29_gsm_cf_notreachable_enable']=='on'?'1':'0';
  $updatesql_b.=",L29_GSM_CF_NOTREACHABLE_ENABLE='".$values['L29_GSM_CF_NOTREACHABLE_ENABLE']."'";
if($values['L29_GSM_CF_NOTREACHABLE_ENABLE'] == 1):
  $values['L29_GSM_CF_NOTREACHABLE_NUM'] = $_POST['line29_gsm_cf_notreachable_num'] ;
  $updatesql_b.=",L29_GSM_CF_NOTREACHABLE_NUM='".$values['L29_GSM_CF_NOTREACHABLE_NUM']."'";
else:
  $values['L29_GSM_CF_NOTREACHABLE_NUM'] = "";
endif; 

$values['L30_GSM_CF_UNCND_ENABLE'] = $_POST['line30_gsm_cf_uncnd_enable']=='on'?'1':'0';
  $updatesql_b.=",L30_GSM_CF_UNCND_ENABLE='".$values['L30_GSM_CF_UNCND_ENABLE']."'";
if($values['L30_GSM_CF_UNCND_ENABLE'] == 1):
  $values['L30_GSM_CF_UNCND_NUM'] = $_POST['line30_gsm_cf_uncnd_num'] ;
  $updatesql_b.=",L30_GSM_CF_UNCND_NUM='".$values['L30_GSM_CF_UNCND_NUM']."'";
else:
  $values['L30_GSM_CF_UNCND_NUM'] = "";
endif; 
  $values['L30_GSM_CF_BUSY_ENABLE'] = $_POST['line30_gsm_cf_busy_enable']=='on'?'1':'0';
  $updatesql_b.=",L30_GSM_CF_BUSY_ENABLE='".$values['L30_GSM_CF_BUSY_ENABLE']."'";
if($values['L30_GSM_CF_BUSY_ENABLE'] == 1):
  $values['L30_GSM_CF_BUSY_NUM'] = $_POST['line30_gsm_cf_busy_num'] ;
  $updatesql_b.=",L30_GSM_CF_BUSY_NUM='".$values['L30_GSM_CF_BUSY_NUM']."'";
else:
  $values['L30_GSM_CF_BUSY_NUM'] = "";
endif; 
  $values['L30_GSM_CF_NOREPLY_ENABLE'] = $_POST['line30_gsm_cf_noreply_enable']=='on'?'1':'0';
  $updatesql_b.=",L30_GSM_CF_NOREPLY_ENABLE='".$values['L30_GSM_CF_NOREPLY_ENABLE']."'";
if($values['L30_GSM_CF_NOREPLY_ENABLE'] == 1):
  $values['L30_GSM_CF_NOREPLY_NUM'] = $_POST['line30_gsm_cf_noreply_num'] ;
  $updatesql_b.=",L30_GSM_CF_NOREPLY_NUM='".$values['L30_GSM_CF_NOREPLY_NUM']."'";
else:
  $values['L30_GSM_CF_NOREPLY_NUM'] = "";
endif; 
  $values['L30_GSM_CF_NOTREACHABLE_ENABLE'] = $_POST['line30_gsm_cf_notreachable_enable']=='on'?'1':'0';
  $updatesql_b.=",L30_GSM_CF_NOTREACHABLE_ENABLE='".$values['L30_GSM_CF_NOTREACHABLE_ENABLE']."'";
if($values['L30_GSM_CF_NOTREACHABLE_ENABLE'] == 1):
  $values['L30_GSM_CF_NOTREACHABLE_NUM'] = $_POST['line30_gsm_cf_notreachable_num'] ;
  $updatesql_b.=",L30_GSM_CF_NOTREACHABLE_NUM='".$values['L30_GSM_CF_NOTREACHABLE_NUM']."'";
else:
  $values['L30_GSM_CF_NOTREACHABLE_NUM'] = "";
endif; 

$values['L31_GSM_CF_UNCND_ENABLE'] = $_POST['line31_gsm_cf_uncnd_enable']=='on'?'1':'0';
  $updatesql_b.=",L31_GSM_CF_UNCND_ENABLE='".$values['L31_GSM_CF_UNCND_ENABLE']."'";
if($values['L31_GSM_CF_UNCND_ENABLE'] == 1):
  $values['L31_GSM_CF_UNCND_NUM'] = $_POST['line31_gsm_cf_uncnd_num'] ;
  $updatesql_b.=",L31_GSM_CF_UNCND_NUM='".$values['L31_GSM_CF_UNCND_NUM']."'";
else:
  $values['L31_GSM_CF_UNCND_NUM'] = "";
endif; 
  $values['L31_GSM_CF_BUSY_ENABLE'] = $_POST['line31_gsm_cf_busy_enable']=='on'?'1':'0';
  $updatesql_b.=",L31_GSM_CF_BUSY_ENABLE='".$values['L31_GSM_CF_BUSY_ENABLE']."'";
if($values['L31_GSM_CF_BUSY_ENABLE'] == 1):
  $values['L31_GSM_CF_BUSY_NUM'] = $_POST['line31_gsm_cf_busy_num'] ;
  $updatesql_b.=",L31_GSM_CF_BUSY_NUM='".$values['L31_GSM_CF_BUSY_NUM']."'";
else:
  $values['L31_GSM_CF_BUSY_NUM'] = "";
endif; 
  $values['L31_GSM_CF_NOREPLY_ENABLE'] = $_POST['line31_gsm_cf_noreply_enable']=='on'?'1':'0';
  $updatesql_b.=",L31_GSM_CF_NOREPLY_ENABLE='".$values['L31_GSM_CF_NOREPLY_ENABLE']."'";
if($values['L31_GSM_CF_NOREPLY_ENABLE'] == 1):
  $values['L31_GSM_CF_NOREPLY_NUM'] = $_POST['line31_gsm_cf_noreply_num'] ;
  $updatesql_b.=",L31_GSM_CF_NOREPLY_NUM='".$values['L31_GSM_CF_NOREPLY_NUM']."'";
else:
  $values['L31_GSM_CF_NOREPLY_NUM'] = "";
endif; 
  $values['L31_GSM_CF_NOTREACHABLE_ENABLE'] = $_POST['line31_gsm_cf_notreachable_enable']=='on'?'1':'0';
  $updatesql_b.=",L31_GSM_CF_NOTREACHABLE_ENABLE='".$values['L31_GSM_CF_NOTREACHABLE_ENABLE']."'";
if($values['L31_GSM_CF_NOTREACHABLE_ENABLE'] == 1):
  $values['L31_GSM_CF_NOTREACHABLE_NUM'] = $_POST['line31_gsm_cf_notreachable_num'] ;
  $updatesql_b.=",L31_GSM_CF_NOTREACHABLE_NUM='".$values['L31_GSM_CF_NOTREACHABLE_NUM']."'";
else:
  $values['L31_GSM_CF_NOTREACHABLE_NUM'] = "";
endif; 

$values['L32_GSM_CF_UNCND_ENABLE'] = $_POST['line32_gsm_cf_uncnd_enable']=='on'?'1':'0';
  $updatesql_b.=",L32_GSM_CF_UNCND_ENABLE='".$values['L32_GSM_CF_UNCND_ENABLE']."'";
if($values['L32_GSM_CF_UNCND_ENABLE'] == 1):
  $values['L32_GSM_CF_UNCND_NUM'] = $_POST['line32_gsm_cf_uncnd_num'] ;
  $updatesql_b.=",L32_GSM_CF_UNCND_NUM='".$values['L32_GSM_CF_UNCND_NUM']."'";
else:
  $values['L32_GSM_CF_UNCND_NUM'] = "";
endif; 
  $values['L32_GSM_CF_BUSY_ENABLE'] = $_POST['line32_gsm_cf_busy_enable']=='on'?'1':'0';
  $updatesql_b.=",L32_GSM_CF_BUSY_ENABLE='".$values['L32_GSM_CF_BUSY_ENABLE']."'";
if($values['L32_GSM_CF_BUSY_ENABLE'] == 1):
  $values['L32_GSM_CF_BUSY_NUM'] = $_POST['line32_gsm_cf_busy_num'] ;
  $updatesql_b.=",L32_GSM_CF_BUSY_NUM='".$values['L32_GSM_CF_BUSY_NUM']."'";
else:
  $values['L32_GSM_CF_BUSY_NUM'] = "";
endif; 
  $values['L32_GSM_CF_NOREPLY_ENABLE'] = $_POST['line32_gsm_cf_noreply_enable']=='on'?'1':'0';
  $updatesql_b.=",L32_GSM_CF_NOREPLY_ENABLE='".$values['L32_GSM_CF_NOREPLY_ENABLE']."'";
if($values['L32_GSM_CF_NOREPLY_ENABLE'] == 1):
  $values['L32_GSM_CF_NOREPLY_NUM'] = $_POST['line32_gsm_cf_noreply_num'] ;
  $updatesql_b.=",L32_GSM_CF_NOREPLY_NUM='".$values['L32_GSM_CF_NOREPLY_NUM']."'";
else:
  $values['L32_GSM_CF_NOREPLY_NUM'] = "";
endif; 
  $values['L32_GSM_CF_NOTREACHABLE_ENABLE'] = $_POST['line32_gsm_cf_notreachable_enable']=='on'?'1':'0';
  $updatesql_b.=",L32_GSM_CF_NOTREACHABLE_ENABLE='".$values['L32_GSM_CF_NOTREACHABLE_ENABLE']."'";
if($values['L32_GSM_CF_NOTREACHABLE_ENABLE'] == 1):
  $values['L32_GSM_CF_NOTREACHABLE_NUM'] = $_POST['line32_gsm_cf_notreachable_num'] ;
  $updatesql_b.=",L32_GSM_CF_NOTREACHABLE_NUM='".$values['L32_GSM_CF_NOTREACHABLE_NUM']."'";
else:
  $values['L32_GSM_CF_NOTREACHABLE_NUM'] = "";
endif; 

  
  $values['L1_SIM_EXP'] = $_POST['line1_sim_exp'] ;
  $updatesql_b.=",L1_SIM_EXP='".$values['L1_SIM_EXP']."'";
  $values['L1_SIM_CALL_LIMIT'] = $_POST['line1_sim_call_limit'] ;
  $updatesql_b.=",L1_SIM_CALL_LIMIT='".$values['L1_SIM_CALL_LIMIT']."'";
  $values['L1_SIM_EXP_UNIT'] = $_POST['line1_sim_exp_unit'] ;
  $updatesql_b.=",L1_SIM_EXP_UNIT='".$values['L1_SIM_EXP_UNIT']."'";
  $values['L1_SIM_STRP_NUM'] = $_POST['line1_sim_strp_num'] ;
  $updatesql_b.=",L1_SIM_STRP_NUM='".$values['L1_SIM_STRP_NUM']."'";
  $values['L1_SIM_STRP_TIME'] = $_POST['line1_sim_strp_time'] ;
  $updatesql_b.=",L1_SIM_STRP_TIME='".$values['L1_SIM_STRP_TIME']."'";
  $values['LINE1_GSM_IMEI'] = $_POST['line1_gsm_imei'] ;
  $updatesql_b.=",LINE1_GSM_IMEI='".$values['LINE1_GSM_IMEI']."'";
  $values['L1_GSM_PIN'] = $_POST['line1_gsm_pin'] ;
  $updatesql_b.=",L1_GSM_PIN='".$values['L1_GSM_PIN']."'";
  $values['L1_GSM_PIN2'] = $_POST['line1_gsm_pin2'] ;
  $updatesql_b.=",L1_GSM_PIN2='".$values['L1_GSM_PIN2']."'";
  
  $values['L2_SIM_EXP'] = $_POST['line2_sim_exp'] ;
  $updatesql_b.=",L2_SIM_EXP='".$values['L2_SIM_EXP']."'";
  $values['L2_SIM_CALL_LIMIT'] = $_POST['line2_sim_call_limit'] ;
  $updatesql_b.=",L2_SIM_CALL_LIMIT='".$values['L2_SIM_CALL_LIMIT']."'";
  $values['L2_SIM_EXP_UNIT'] = $_POST['line2_sim_exp_unit'] ;
  $updatesql_b.=",L2_SIM_EXP_UNIT='".$values['L2_SIM_EXP_UNIT']."'";
  $values['L2_SIM_STRP_NUM'] = $_POST['line2_sim_strp_num'] ;
  $updatesql_b.=",L2_SIM_STRP_NUM='".$values['L2_SIM_STRP_NUM']."'";
  $values['L2_SIM_STRP_TIME'] = $_POST['line2_sim_strp_time'] ;
  $updatesql_b.=",L2_SIM_STRP_TIME='".$values['L2_SIM_STRP_TIME']."'";
  $values['LINE2_GSM_IMEI'] = $_POST['line2_gsm_imei'] ;
  $updatesql_b.=",LINE2_GSM_IMEI='".$values['LINE2_GSM_IMEI']."'";
  $values['L2_GSM_PIN'] = $_POST['line2_gsm_pin'] ;
  $updatesql_b.=",L2_GSM_PIN='".$values['L2_GSM_PIN']."'";
  $values['L2_GSM_PIN2'] = $_POST['line2_gsm_pin2'] ;
  $updatesql_b.=",L2_GSM_PIN2='".$values['L2_GSM_PIN2']."'";
  
  
  $values['L3_SIM_EXP'] = $_POST['line3_sim_exp'] ;
  $updatesql_b.=",L3_SIM_EXP='".$values['L3_SIM_EXP']."'";
  $values['L3_SIM_CALL_LIMIT'] = $_POST['line3_sim_call_limit'] ;
  $updatesql_b.=",L3_SIM_CALL_LIMIT='".$values['L3_SIM_CALL_LIMIT']."'";
  $values['L3_SIM_EXP_UNIT'] = $_POST['line3_sim_exp_unit'] ;
  $updatesql_b.=",L3_SIM_EXP_UNIT='".$values['L3_SIM_EXP_UNIT']."'";
  $values['L3_SIM_STRP_NUM'] = $_POST['line3_sim_strp_num'] ;
  $updatesql_b.=",L3_SIM_STRP_NUM='".$values['L3_SIM_STRP_NUM']."'";
  $values['L3_SIM_STRP_TIME'] = $_POST['line3_sim_strp_time'] ;
  $updatesql_b.=",L3_SIM_STRP_TIME='".$values['L3_SIM_STRP_TIME']."'";
  $values['LINE3_GSM_IMEI'] = $_POST['line3_gsm_imei'] ;
  $updatesql_b.=",LINE3_GSM_IMEI='".$values['LINE3_GSM_IMEI']."'";
  $values['L3_GSM_PIN'] = $_POST['line3_gsm_pin'] ;
  $updatesql_b.=",L3_GSM_PIN='".$values['L3_GSM_PIN']."'";
  $values['L3_GSM_PIN2'] = $_POST['line3_gsm_pin2'] ;
  $updatesql_b.=",L3_GSM_PIN2='".$values['L3_GSM_PIN2']."'";
  

  $values['L4_SIM_EXP'] = $_POST['line4_sim_exp'] ;
  $updatesql_b.=",L4_SIM_EXP='".$values['L4_SIM_EXP']."'";
  $values['L4_SIM_CALL_LIMIT'] = $_POST['line4_sim_call_limit'] ;
  $updatesql_b.=",L4_SIM_CALL_LIMIT='".$values['L4_SIM_CALL_LIMIT']."'";
  $values['L4_SIM_EXP_UNIT'] = $_POST['line4_sim_exp_unit'] ;
  $updatesql_b.=",L4_SIM_EXP_UNIT='".$values['L4_SIM_EXP_UNIT']."'";
  $values['L4_SIM_STRP_NUM'] = $_POST['line4_sim_strp_num'] ;
  $updatesql_b.=",L4_SIM_STRP_NUM='".$values['L4_SIM_STRP_NUM']."'";
  $values['L4_SIM_STRP_TIME'] = $_POST['line4_sim_strp_time'] ;
  $updatesql_b.=",L4_SIM_STRP_TIME='".$values['L4_SIM_STRP_TIME']."'";
  $values['LINE4_GSM_IMEI'] = $_POST['line4_gsm_imei'] ;
  $updatesql_b.=",LINE4_GSM_IMEI='".$values['LINE4_GSM_IMEI']."'";
  $values['L4_GSM_PIN'] = $_POST['line4_gsm_pin'] ;
  $updatesql_b.=",L4_GSM_PIN='".$values['L4_GSM_PIN']."'";
  $values['L4_GSM_PIN2'] = $_POST['line4_gsm_pin2'] ;
  $updatesql_b.=",L4_GSM_PIN2='".$values['L4_GSM_PIN2']."'";
  
  
  $values['L5_SIM_EXP'] = $_POST['line5_sim_exp'] ;
  $updatesql_b.=",L5_SIM_EXP='".$values['L5_SIM_EXP']."'";
  $values['L5_SIM_CALL_LIMIT'] = $_POST['line5_sim_call_limit'] ;
  $updatesql_b.=",L5_SIM_CALL_LIMIT='".$values['L5_SIM_CALL_LIMIT']."'";
  $values['L5_SIM_EXP_UNIT'] = $_POST['line5_sim_exp_unit'] ;
  $updatesql_b.=",L5_SIM_EXP_UNIT='".$values['L5_SIM_EXP_UNIT']."'";
  $values['L5_SIM_STRP_NUM'] = $_POST['line5_sim_strp_num'] ;
  $updatesql_b.=",L5_SIM_STRP_NUM='".$values['L5_SIM_STRP_NUM']."'";
  $values['L5_SIM_STRP_TIME'] = $_POST['line5_sim_strp_time'] ;
  $updatesql_b.=",L5_SIM_STRP_TIME='".$values['L5_SIM_STRP_TIME']."'";
  $values['LINE5_GSM_IMEI'] = $_POST['line5_gsm_imei'] ;
  $updatesql_b.=",LINE5_GSM_IMEI='".$values['LINE5_GSM_IMEI']."'";
  $values['L5_GSM_PIN'] = $_POST['line5_gsm_pin'] ;
  $updatesql_b.=",L5_GSM_PIN='".$values['L5_GSM_PIN']."'";
  $values['L5_GSM_PIN2'] = $_POST['line5_gsm_pin2'] ;
  $updatesql_b.=",L5_GSM_PIN2='".$values['L5_GSM_PIN2']."'";

  $values['L6_SIM_EXP'] = $_POST['line6_sim_exp'] ;
  $updatesql_b.=",L6_SIM_EXP='".$values['L6_SIM_EXP']."'";
  $values['L6_SIM_CALL_LIMIT'] = $_POST['line6_sim_call_limit'] ;
  $updatesql_b.=",L6_SIM_CALL_LIMIT='".$values['L6_SIM_CALL_LIMIT']."'";
  $values['L6_SIM_EXP_UNIT'] = $_POST['line6_sim_exp_unit'] ;
  $updatesql_b.=",L6_SIM_EXP_UNIT='".$values['L6_SIM_EXP_UNIT']."'";
  $values['L6_SIM_STRP_NUM'] = $_POST['line6_sim_strp_num'] ;
  $updatesql_b.=",L6_SIM_STRP_NUM='".$values['L6_SIM_STRP_NUM']."'";
  $values['L6_SIM_STRP_TIME'] = $_POST['line6_sim_strp_time'] ;
  $updatesql_b.=",L6_SIM_STRP_TIME='".$values['L6_SIM_STRP_TIME']."'";
  $values['LINE6_GSM_IMEI'] = $_POST['line6_gsm_imei'] ;
  $updatesql_b.=",LINE6_GSM_IMEI='".$values['LINE6_GSM_IMEI']."'";
  $values['L6_GSM_PIN'] = $_POST['line6_gsm_pin'] ;
  $updatesql_b.=",L6_GSM_PIN='".$values['L6_GSM_PIN']."'";
  $values['L6_GSM_PIN2'] = $_POST['line6_gsm_pin2'] ;
  $updatesql_b.=",L6_GSM_PIN2='".$values['L6_GSM_PIN2']."'";

  $values['L7_SIM_EXP'] = $_POST['line7_sim_exp'] ;
  $updatesql_b.=",L7_SIM_EXP='".$values['L7_SIM_EXP']."'";
  $values['L7_SIM_CALL_LIMIT'] = $_POST['line7_sim_call_limit'] ;
  $updatesql_b.=",L7_SIM_CALL_LIMIT='".$values['L7_SIM_CALL_LIMIT']."'";
  $values['L7_SIM_EXP_UNIT'] = $_POST['line7_sim_exp_unit'] ;
  $updatesql_b.=",L7_SIM_EXP_UNIT='".$values['L7_SIM_EXP_UNIT']."'";
  $values['L7_SIM_STRP_NUM'] = $_POST['line7_sim_strp_num'] ;
  $updatesql_b.=",L7_SIM_STRP_NUM='".$values['L7_SIM_STRP_NUM']."'";
  $values['L7_SIM_STRP_TIME'] = $_POST['line7_sim_strp_time'] ;
  $updatesql_b.=",L7_SIM_STRP_TIME='".$values['L7_SIM_STRP_TIME']."'";
  $values['LINE7_GSM_IMEI'] = $_POST['line7_gsm_imei'] ;
  $updatesql_b.=",LINE7_GSM_IMEI='".$values['LINE7_GSM_IMEI']."'";
  $values['L7_GSM_PIN'] = $_POST['line7_gsm_pin'] ;
  $updatesql_b.=",L7_GSM_PIN='".$values['L7_GSM_PIN']."'";
  $values['L7_GSM_PIN2'] = $_POST['line7_gsm_pin2'] ;
  $updatesql_b.=",L7_GSM_PIN2='".$values['L7_GSM_PIN2']."'";

  $values['L8_SIM_EXP'] = $_POST['line8_sim_exp'] ;
  $updatesql_b.=",L8_SIM_EXP='".$values['L8_SIM_EXP']."'";
  $values['L8_SIM_CALL_LIMIT'] = $_POST['line8_sim_call_limit'] ;
  $updatesql_b.=",L8_SIM_CALL_LIMIT='".$values['L8_SIM_CALL_LIMIT']."'";
  $values['L8_SIM_EXP_UNIT'] = $_POST['line8_sim_exp_unit'] ;
  $updatesql_b.=",L8_SIM_EXP_UNIT='".$values['L8_SIM_EXP_UNIT']."'";
  $values['L8_SIM_STRP_NUM'] = $_POST['line8_sim_strp_num'] ;
  $updatesql_b.=",L8_SIM_STRP_NUM='".$values['L8_SIM_STRP_NUM']."'";
  $values['L8_SIM_STRP_TIME'] = $_POST['line8_sim_strp_time'] ;
  $updatesql_b.=",L8_SIM_STRP_TIME='".$values['L8_SIM_STRP_TIME']."'";
  $values['LINE8_GSM_IMEI'] = $_POST['line8_gsm_imei'] ;
  $updatesql_b.=",LINE8_GSM_IMEI='".$values['LINE8_GSM_IMEI']."'";
  $values['L8_GSM_PIN'] = $_POST['line8_gsm_pin'] ;
  $updatesql_b.=",L8_GSM_PIN='".$values['L8_GSM_PIN']."'";
  $values['L8_GSM_PIN2'] = $_POST['line8_gsm_pin2'] ;
  $updatesql_b.=",L8_GSM_PIN2='".$values['L8_GSM_PIN2']."'";
  
  $values['L9_SIM_EXP'] = $_POST['line9_sim_exp'] ;
  $updatesql_b.=",L9_SIM_EXP='".$values['L9_SIM_EXP']."'";
  $values['L9_SIM_CALL_LIMIT'] = $_POST['line9_sim_call_limit'] ;
  $updatesql_b.=",L9_SIM_CALL_LIMIT='".$values['L9_SIM_CALL_LIMIT']."'";
  $values['L9_SIM_EXP_UNIT'] = $_POST['line9_sim_exp_unit'] ;
  $updatesql_b.=",L9_SIM_EXP_UNIT='".$values['L9_SIM_EXP_UNIT']."'";
  $values['L9_SIM_STRP_NUM'] = $_POST['line9_sim_strp_num'] ;
  $updatesql_b.=",L9_SIM_STRP_NUM='".$values['L9_SIM_STRP_NUM']."'";
  $values['L9_SIM_STRP_TIME'] = $_POST['line9_sim_strp_time'] ;
  $updatesql_b.=",L9_SIM_STRP_TIME='".$values['L9_SIM_STRP_TIME']."'";
  $values['LINE9_GSM_IMEI'] = $_POST['line9_gsm_imei'] ;
  $updatesql_b.=",LINE9_GSM_IMEI='".$values['LINE9_GSM_IMEI']."'";
  $values['L9_GSM_PIN'] = $_POST['line9_gsm_pin'] ;
  $updatesql_b.=",L9_GSM_PIN='".$values['L9_GSM_PIN']."'";
  $values['L9_GSM_PIN2'] = $_POST['line9_gsm_pin2'] ;
  $updatesql_b.=",L9_GSM_PIN2='".$values['L9_GSM_PIN2']."'";
  
  $values['L10_SIM_EXP'] = $_POST['line10_sim_exp'] ;
  $updatesql_b.=",L10_SIM_EXP='".$values['L10_SIM_EXP']."'";
  $values['L10_SIM_CALL_LIMIT'] = $_POST['line10_sim_call_limit'] ;
  $updatesql_b.=",L10_SIM_CALL_LIMIT='".$values['L10_SIM_CALL_LIMIT']."'";
  $values['L10_SIM_EXP_UNIT'] = $_POST['line10_sim_exp_unit'] ;
  $updatesql_b.=",L10_SIM_EXP_UNIT='".$values['L10_SIM_EXP_UNIT']."'";
  $values['L10_SIM_STRP_NUM'] = $_POST['line10_sim_strp_num'] ;
  $updatesql_b.=",L10_SIM_STRP_NUM='".$values['L10_SIM_STRP_NUM']."'";
  $values['L10_SIM_STRP_TIME'] = $_POST['line10_sim_strp_time'] ;
  $updatesql_b.=",L10_SIM_STRP_TIME='".$values['L10_SIM_STRP_TIME']."'";
  $values['LINE10_GSM_IMEI'] = $_POST['line10_gsm_imei'] ;
  $updatesql_b.=",LINE10_GSM_IMEI='".$values['LINE10_GSM_IMEI']."'";
  $values['L10_GSM_PIN'] = $_POST['line10_gsm_pin'] ;
  $updatesql_b.=",L10_GSM_PIN='".$values['L10_GSM_PIN']."'";
  $values['L10_GSM_PIN2'] = $_POST['line10_gsm_pin2'] ;
  $updatesql_b.=",L10_GSM_PIN2='".$values['L10_GSM_PIN2']."'";
  
  $values['L11_SIM_EXP'] = $_POST['line11_sim_exp'] ;
  $updatesql_b.=",L11_SIM_EXP='".$values['L11_SIM_EXP']."'";
  $values['L11_SIM_CALL_LIMIT'] = $_POST['line11_sim_call_limit'] ;
  $updatesql_b.=",L11_SIM_CALL_LIMIT='".$values['L11_SIM_CALL_LIMIT']."'";
  $values['L11_SIM_EXP_UNIT'] = $_POST['line11_sim_exp_unit'] ;
  $updatesql_b.=",L11_SIM_EXP_UNIT='".$values['L11_SIM_EXP_UNIT']."'";
  $values['L11_SIM_STRP_NUM'] = $_POST['line11_sim_strp_num'] ;
  $updatesql_b.=",L11_SIM_STRP_NUM='".$values['L11_SIM_STRP_NUM']."'";
  $values['L11_SIM_STRP_TIME'] = $_POST['line11_sim_strp_time'] ;
  $updatesql_b.=",L11_SIM_STRP_TIME='".$values['L11_SIM_STRP_TIME']."'";
  $values['LINE11_GSM_IMEI'] = $_POST['line11_gsm_imei'] ;
  $updatesql_b.=",LINE11_GSM_IMEI='".$values['LINE11_GSM_IMEI']."'";
  $values['L11_GSM_PIN'] = $_POST['line11_gsm_pin'] ;
  $updatesql_b.=",L11_GSM_PIN='".$values['L11_GSM_PIN']."'";
  $values['L11_GSM_PIN2'] = $_POST['line11_gsm_pin2'] ;
  $updatesql_b.=",L11_GSM_PIN2='".$values['L11_GSM_PIN2']."'";
  
  $values['L12_SIM_EXP'] = $_POST['line12_sim_exp'] ;
  $updatesql_b.=",L12_SIM_EXP='".$values['L12_SIM_EXP']."'";
  $values['L12_SIM_CALL_LIMIT'] = $_POST['line12_sim_call_limit'] ;
  $updatesql_b.=",L12_SIM_CALL_LIMIT='".$values['L12_SIM_CALL_LIMIT']."'";
  $values['L12_SIM_EXP_UNIT'] = $_POST['line12_sim_exp_unit'] ;
  $updatesql_b.=",L12_SIM_EXP_UNIT='".$values['L12_SIM_EXP_UNIT']."'";
  $values['L12_SIM_STRP_NUM'] = $_POST['line12_sim_strp_num'] ;
  $updatesql_b.=",L12_SIM_STRP_NUM='".$values['L12_SIM_STRP_NUM']."'";
  $values['L12_SIM_STRP_TIME'] = $_POST['line12_sim_strp_time'] ;
  $updatesql_b.=",L12_SIM_STRP_TIME='".$values['L12_SIM_STRP_TIME']."'";
  $values['LINE12_GSM_IMEI'] = $_POST['line12_gsm_imei'] ;
  $updatesql_b.=",LINE12_GSM_IMEI='".$values['LINE12_GSM_IMEI']."'";
  $values['L12_GSM_PIN'] = $_POST['line12_gsm_pin'] ;
  $updatesql_b.=",L12_GSM_PIN='".$values['L12_GSM_PIN']."'";
  $values['L12_GSM_PIN2'] = $_POST['line12_gsm_pin2'] ;
  $updatesql_b.=",L12_GSM_PIN2='".$values['L12_GSM_PIN2']."'";
  
  $values['L13_SIM_EXP'] = $_POST['line13_sim_exp'] ;
  $updatesql_b.=",L13_SIM_EXP='".$values['L13_SIM_EXP']."'";
  $values['L13_SIM_CALL_LIMIT'] = $_POST['line13_sim_call_limit'] ;
  $updatesql_b.=",L13_SIM_CALL_LIMIT='".$values['L13_SIM_CALL_LIMIT']."'";
  $values['L13_SIM_EXP_UNIT'] = $_POST['line13_sim_exp_unit'] ;
  $updatesql_b.=",L13_SIM_EXP_UNIT='".$values['L13_SIM_EXP_UNIT']."'";
  $values['L13_SIM_STRP_NUM'] = $_POST['line13_sim_strp_num'] ;
  $updatesql_b.=",L13_SIM_STRP_NUM='".$values['L13_SIM_STRP_NUM']."'";
  $values['L13_SIM_STRP_TIME'] = $_POST['line13_sim_strp_time'] ;
  $updatesql_b.=",L13_SIM_STRP_TIME='".$values['L13_SIM_STRP_TIME']."'";
  $values['LINE13_GSM_IMEI'] = $_POST['line13_gsm_imei'] ;
  $updatesql_b.=",LINE13_GSM_IMEI='".$values['LINE13_GSM_IMEI']."'";
  $values['L13_GSM_PIN'] = $_POST['line13_gsm_pin'] ;
  $updatesql_b.=",L13_GSM_PIN='".$values['L13_GSM_PIN']."'";
  $values['L13_GSM_PIN2'] = $_POST['line13_gsm_pin2'] ;
  $updatesql_b.=",L13_GSM_PIN2='".$values['L13_GSM_PIN2']."'";
  
  $values['L14_SIM_EXP'] = $_POST['line14_sim_exp'] ;
  $updatesql_b.=",L14_SIM_EXP='".$values['L14_SIM_EXP']."'";
  $values['L14_SIM_CALL_LIMIT'] = $_POST['line14_sim_call_limit'] ;
  $updatesql_b.=",L14_SIM_CALL_LIMIT='".$values['L14_SIM_CALL_LIMIT']."'";
  $values['L14_SIM_EXP_UNIT'] = $_POST['line14_sim_exp_unit'] ;
  $updatesql_b.=",L14_SIM_EXP_UNIT='".$values['L14_SIM_EXP_UNIT']."'";
  $values['L14_SIM_STRP_NUM'] = $_POST['line14_sim_strp_num'] ;
  $updatesql_b.=",L14_SIM_STRP_NUM='".$values['L14_SIM_STRP_NUM']."'";
  $values['L14_SIM_STRP_TIME'] = $_POST['line14_sim_strp_time'] ;
  $updatesql_b.=",L14_SIM_STRP_TIME='".$values['L14_SIM_STRP_TIME']."'";
  $values['LINE14_GSM_IMEI'] = $_POST['line14_gsm_imei'] ;
  $updatesql_b.=",LINE14_GSM_IMEI='".$values['LINE14_GSM_IMEI']."'";
  $values['L14_GSM_PIN'] = $_POST['line14_gsm_pin'] ;
  $updatesql_b.=",L14_GSM_PIN='".$values['L14_GSM_PIN']."'";
  $values['L14_GSM_PIN2'] = $_POST['line14_gsm_pin2'] ;
  $updatesql_b.=",L14_GSM_PIN2='".$values['L14_GSM_PIN2']."'";
  
  $values['L15_SIM_EXP'] = $_POST['line15_sim_exp'] ;
  $updatesql_b.=",L15_SIM_EXP='".$values['L15_SIM_EXP']."'";
  $values['L15_SIM_CALL_LIMIT'] = $_POST['line15_sim_call_limit'] ;
  $updatesql_b.=",L15_SIM_CALL_LIMIT='".$values['L15_SIM_CALL_LIMIT']."'";
  $values['L15_SIM_EXP_UNIT'] = $_POST['line15_sim_exp_unit'] ;
  $updatesql_b.=",L15_SIM_EXP_UNIT='".$values['L15_SIM_EXP_UNIT']."'";
  $values['L15_SIM_STRP_NUM'] = $_POST['line15_sim_strp_num'] ;
  $updatesql_b.=",L15_SIM_STRP_NUM='".$values['L15_SIM_STRP_NUM']."'";
  $values['L15_SIM_STRP_TIME'] = $_POST['line15_sim_strp_time'] ;
  $updatesql_b.=",L15_SIM_STRP_TIME='".$values['L15_SIM_STRP_TIME']."'";
  $values['LINE15_GSM_IMEI'] = $_POST['line15_gsm_imei'] ;
  $updatesql_b.=",LINE15_GSM_IMEI='".$values['LINE15_GSM_IMEI']."'";
  $values['L15_GSM_PIN'] = $_POST['line15_gsm_pin'] ;
  $updatesql_b.=",L15_GSM_PIN='".$values['L15_GSM_PIN']."'";
  $values['L15_GSM_PIN2'] = $_POST['line15_gsm_pin2'] ;
  $updatesql_b.=",L15_GSM_PIN2='".$values['L15_GSM_PIN2']."'";
  
  $values['L16_SIM_EXP'] = $_POST['line16_sim_exp'] ;
  $updatesql_b.=",L16_SIM_EXP='".$values['L16_SIM_EXP']."'";
  $values['L16_SIM_CALL_LIMIT'] = $_POST['line16_sim_call_limit'] ;
  $updatesql_b.=",L16_SIM_CALL_LIMIT='".$values['L16_SIM_CALL_LIMIT']."'";
  $values['L16_SIM_EXP_UNIT'] = $_POST['line16_sim_exp_unit'] ;
  $updatesql_b.=",L16_SIM_EXP_UNIT='".$values['L16_SIM_EXP_UNIT']."'";
  $values['L16_SIM_STRP_NUM'] = $_POST['line16_sim_strp_num'] ;
  $updatesql_b.=",L16_SIM_STRP_NUM='".$values['L16_SIM_STRP_NUM']."'";
  $values['L16_SIM_STRP_TIME'] = $_POST['line16_sim_strp_time'] ;
  $updatesql_b.=",L16_SIM_STRP_TIME='".$values['L16_SIM_STRP_TIME']."'";
  $values['LINE16_GSM_IMEI'] = $_POST['line16_gsm_imei'] ;
  $updatesql_b.=",LINE16_GSM_IMEI='".$values['LINE16_GSM_IMEI']."'";
  $values['L16_GSM_PIN'] = $_POST['line16_gsm_pin'] ;
  $updatesql_b.=",L16_GSM_PIN='".$values['L16_GSM_PIN']."'";
  $values['L16_GSM_PIN2'] = $_POST['line16_gsm_pin2'] ;
  $updatesql_b.=",L16_GSM_PIN2='".$values['L16_GSM_PIN2']."'";
  
  $values['L17_SIM_EXP'] = $_POST['line17_sim_exp'] ;
  $updatesql_b.=",L17_SIM_EXP='".$values['L17_SIM_EXP']."'";
  $values['L17_SIM_CALL_LIMIT'] = $_POST['line17_sim_call_limit'] ;
  $updatesql_b.=",L17_SIM_CALL_LIMIT='".$values['L17_SIM_CALL_LIMIT']."'";
  $values['L17_SIM_EXP_UNIT'] = $_POST['line17_sim_exp_unit'] ;
  $updatesql_b.=",L17_SIM_EXP_UNIT='".$values['L17_SIM_EXP_UNIT']."'";
  $values['L17_SIM_STRP_NUM'] = $_POST['line17_sim_strp_num'] ;
  $updatesql_b.=",L17_SIM_STRP_NUM='".$values['L17_SIM_STRP_NUM']."'";
  $values['L17_SIM_STRP_TIME'] = $_POST['line17_sim_strp_time'] ;
  $updatesql_b.=",L17_SIM_STRP_TIME='".$values['L17_SIM_STRP_TIME']."'";
  $values['LINE17_GSM_IMEI'] = $_POST['line17_gsm_imei'] ;
  $updatesql_b.=",LINE17_GSM_IMEI='".$values['LINE17_GSM_IMEI']."'";
  $values['L17_GSM_PIN'] = $_POST['line17_gsm_pin'] ;
  $updatesql_b.=",L17_GSM_PIN='".$values['L17_GSM_PIN']."'";
  $values['L17_GSM_PIN2'] = $_POST['line17_gsm_pin2'] ;
  $updatesql_b.=",L17_GSM_PIN2='".$values['L17_GSM_PIN2']."'";
  
  $values['L18_SIM_EXP'] = $_POST['line18_sim_exp'] ;
  $updatesql_b.=",L18_SIM_EXP='".$values['L18_SIM_EXP']."'";
  $values['L18_SIM_CALL_LIMIT'] = $_POST['line18_sim_call_limit'] ;
  $updatesql_b.=",L18_SIM_CALL_LIMIT='".$values['L18_SIM_CALL_LIMIT']."'";
  $values['L18_SIM_EXP_UNIT'] = $_POST['line18_sim_exp_unit'] ;
  $updatesql_b.=",L18_SIM_EXP_UNIT='".$values['L18_SIM_EXP_UNIT']."'";
  $values['L18_SIM_STRP_NUM'] = $_POST['line18_sim_strp_num'] ;
  $updatesql_b.=",L18_SIM_STRP_NUM='".$values['L18_SIM_STRP_NUM']."'";
  $values['L18_SIM_STRP_TIME'] = $_POST['line18_sim_strp_time'] ;
  $updatesql_b.=",L18_SIM_STRP_TIME='".$values['L18_SIM_STRP_TIME']."'";
  $values['LINE18_GSM_IMEI'] = $_POST['line18_gsm_imei'] ;
  $updatesql_b.=",LINE18_GSM_IMEI='".$values['LINE18_GSM_IMEI']."'";
  $values['L18_GSM_PIN'] = $_POST['line18_gsm_pin'] ;
  $updatesql_b.=",L18_GSM_PIN='".$values['L18_GSM_PIN']."'";
  $values['L18_GSM_PIN2'] = $_POST['line18_gsm_pin2'] ;
  $updatesql_b.=",L18_GSM_PIN2='".$values['L18_GSM_PIN2']."'";
  
  $values['L19_SIM_EXP'] = $_POST['line19_sim_exp'] ;
  $updatesql_b.=",L19_SIM_EXP='".$values['L19_SIM_EXP']."'";
  $values['L19_SIM_CALL_LIMIT'] = $_POST['line19_sim_call_limit'] ;
  $updatesql_b.=",L19_SIM_CALL_LIMIT='".$values['L19_SIM_CALL_LIMIT']."'";
  $values['L19_SIM_EXP_UNIT'] = $_POST['line19_sim_exp_unit'] ;
  $updatesql_b.=",L19_SIM_EXP_UNIT='".$values['L19_SIM_EXP_UNIT']."'";
  $values['L19_SIM_STRP_NUM'] = $_POST['line19_sim_strp_num'] ;
  $updatesql_b.=",L19_SIM_STRP_NUM='".$values['L19_SIM_STRP_NUM']."'";
  $values['L19_SIM_STRP_TIME'] = $_POST['line19_sim_strp_time'] ;
  $updatesql_b.=",L19_SIM_STRP_TIME='".$values['L19_SIM_STRP_TIME']."'";
  $values['LINE19_GSM_IMEI'] = $_POST['line19_gsm_imei'] ;
  $updatesql_b.=",LINE19_GSM_IMEI='".$values['LINE19_GSM_IMEI']."'";
  $values['L19_GSM_PIN'] = $_POST['line19_gsm_pin'] ;
  $updatesql_b.=",L19_GSM_PIN='".$values['L19_GSM_PIN']."'";
  $values['L19_GSM_PIN2'] = $_POST['line19_gsm_pin2'] ;
  $updatesql_b.=",L19_GSM_PIN2='".$values['L19_GSM_PIN2']."'";
  
  $values['L20_SIM_EXP'] = $_POST['line20_sim_exp'] ;
  $updatesql_b.=",L20_SIM_EXP='".$values['L20_SIM_EXP']."'";
  $values['L20_SIM_CALL_LIMIT'] = $_POST['line20_sim_call_limit'] ;
  $updatesql_b.=",L20_SIM_CALL_LIMIT='".$values['L20_SIM_CALL_LIMIT']."'";
  $values['L20_SIM_EXP_UNIT'] = $_POST['line20_sim_exp_unit'] ;
  $updatesql_b.=",L20_SIM_EXP_UNIT='".$values['L20_SIM_EXP_UNIT']."'";
  $values['L20_SIM_STRP_NUM'] = $_POST['line20_sim_strp_num'] ;
  $updatesql_b.=",L20_SIM_STRP_NUM='".$values['L20_SIM_STRP_NUM']."'";
  $values['L20_SIM_STRP_TIME'] = $_POST['line20_sim_strp_time'] ;
  $updatesql_b.=",L20_SIM_STRP_TIME='".$values['L20_SIM_STRP_TIME']."'";
  $values['LINE20_GSM_IMEI'] = $_POST['line20_gsm_imei'] ;
  $updatesql_b.=",LINE20_GSM_IMEI='".$values['LINE20_GSM_IMEI']."'";
  $values['L20_GSM_PIN'] = $_POST['line20_gsm_pin'] ;
  $updatesql_b.=",L20_GSM_PIN='".$values['L20_GSM_PIN']."'";
  $values['L20_GSM_PIN2'] = $_POST['line20_gsm_pin2'] ;
  $updatesql_b.=",L20_GSM_PIN2='".$values['L20_GSM_PIN2']."'";
  
  $values['L21_SIM_EXP'] = $_POST['line21_sim_exp'] ;
  $updatesql_b.=",L21_SIM_EXP='".$values['L21_SIM_EXP']."'";
  $values['L21_SIM_CALL_LIMIT'] = $_POST['line21_sim_call_limit'] ;
  $updatesql_b.=",L21_SIM_CALL_LIMIT='".$values['L21_SIM_CALL_LIMIT']."'";
  $values['L21_SIM_EXP_UNIT'] = $_POST['line21_sim_exp_unit'] ;
  $updatesql_b.=",L21_SIM_EXP_UNIT='".$values['L21_SIM_EXP_UNIT']."'";
  $values['L21_SIM_STRP_NUM'] = $_POST['line21_sim_strp_num'] ;
  $updatesql_b.=",L21_SIM_STRP_NUM='".$values['L21_SIM_STRP_NUM']."'";
  $values['L21_SIM_STRP_TIME'] = $_POST['line21_sim_strp_time'] ;
  $updatesql_b.=",L21_SIM_STRP_TIME='".$values['L21_SIM_STRP_TIME']."'";
  $values['LINE21_GSM_IMEI'] = $_POST['line21_gsm_imei'] ;
  $updatesql_b.=",LINE21_GSM_IMEI='".$values['LINE21_GSM_IMEI']."'";
  $values['L21_GSM_PIN'] = $_POST['line21_gsm_pin'] ;
  $updatesql_b.=",L21_GSM_PIN='".$values['L21_GSM_PIN']."'";
  $values['L21_GSM_PIN2'] = $_POST['line21_gsm_pin2'] ;
  $updatesql_b.=",L21_GSM_PIN2='".$values['L21_GSM_PIN2']."'";
  
  $values['L22_SIM_EXP'] = $_POST['line22_sim_exp'] ;
  $updatesql_b.=",L22_SIM_EXP='".$values['L22_SIM_EXP']."'";
  $values['L22_SIM_CALL_LIMIT'] = $_POST['line22_sim_call_limit'] ;
  $updatesql_b.=",L22_SIM_CALL_LIMIT='".$values['L22_SIM_CALL_LIMIT']."'";
  $values['L22_SIM_EXP_UNIT'] = $_POST['line22_sim_exp_unit'] ;
  $updatesql_b.=",L22_SIM_EXP_UNIT='".$values['L22_SIM_EXP_UNIT']."'";
  $values['L22_SIM_STRP_NUM'] = $_POST['line22_sim_strp_num'] ;
  $updatesql_b.=",L22_SIM_STRP_NUM='".$values['L22_SIM_STRP_NUM']."'";
  $values['L22_SIM_STRP_TIME'] = $_POST['line22_sim_strp_time'] ;
  $updatesql_b.=",L22_SIM_STRP_TIME='".$values['L22_SIM_STRP_TIME']."'";
  $values['LINE22_GSM_IMEI'] = $_POST['line22_gsm_imei'] ;
  $updatesql_b.=",LINE22_GSM_IMEI='".$values['LINE22_GSM_IMEI']."'";
  $values['L22_GSM_PIN'] = $_POST['line22_gsm_pin'] ;
  $updatesql_b.=",L22_GSM_PIN='".$values['L22_GSM_PIN']."'";
  $values['L22_GSM_PIN2'] = $_POST['line22_gsm_pin2'] ;
  $updatesql_b.=",L22_GSM_PIN2='".$values['L22_GSM_PIN2']."'";
  
  $values['L23_SIM_EXP'] = $_POST['line23_sim_exp'] ;
  $updatesql_b.=",L23_SIM_EXP='".$values['L23_SIM_EXP']."'";
  $values['L23_SIM_CALL_LIMIT'] = $_POST['line23_sim_call_limit'] ;
  $updatesql_b.=",L23_SIM_CALL_LIMIT='".$values['L23_SIM_CALL_LIMIT']."'";
  $values['L23_SIM_EXP_UNIT'] = $_POST['line23_sim_exp_unit'] ;
  $updatesql_b.=",L23_SIM_EXP_UNIT='".$values['L23_SIM_EXP_UNIT']."'";
  $values['L23_SIM_STRP_NUM'] = $_POST['line23_sim_strp_num'] ;
  $updatesql_b.=",L23_SIM_STRP_NUM='".$values['L23_SIM_STRP_NUM']."'";
  $values['L23_SIM_STRP_TIME'] = $_POST['line23_sim_strp_time'] ;
  $updatesql_b.=",L23_SIM_STRP_TIME='".$values['L23_SIM_STRP_TIME']."'";
  $values['LINE23_GSM_IMEI'] = $_POST['line23_gsm_imei'] ;
  $updatesql_b.=",LINE23_GSM_IMEI='".$values['LINE23_GSM_IMEI']."'";
  $values['L23_GSM_PIN'] = $_POST['line23_gsm_pin'] ;
  $updatesql_b.=",L23_GSM_PIN='".$values['L23_GSM_PIN']."'";
  $values['L23_GSM_PIN2'] = $_POST['line23_gsm_pin2'] ;
  $updatesql_b.=",L23_GSM_PIN2='".$values['L23_GSM_PIN2']."'";
  
  $values['L24_SIM_EXP'] = $_POST['line24_sim_exp'] ;
  $updatesql_b.=",L24_SIM_EXP='".$values['L24_SIM_EXP']."'";
  $values['L24_SIM_CALL_LIMIT'] = $_POST['line24_sim_call_limit'] ;
  $updatesql_b.=",L24_SIM_CALL_LIMIT='".$values['L24_SIM_CALL_LIMIT']."'";
  $values['L24_SIM_EXP_UNIT'] = $_POST['line24_sim_exp_unit'] ;
  $updatesql_b.=",L24_SIM_EXP_UNIT='".$values['L24_SIM_EXP_UNIT']."'";
  $values['L24_SIM_STRP_NUM'] = $_POST['line24_sim_strp_num'] ;
  $updatesql_b.=",L24_SIM_STRP_NUM='".$values['L24_SIM_STRP_NUM']."'";
  $values['L24_SIM_STRP_TIME'] = $_POST['line24_sim_strp_time'] ;
  $updatesql_b.=",L24_SIM_STRP_TIME='".$values['L24_SIM_STRP_TIME']."'";
  $values['LINE24_GSM_IMEI'] = $_POST['line24_gsm_imei'] ;
  $updatesql_b.=",LINE24_GSM_IMEI='".$values['LINE24_GSM_IMEI']."'";
  $values['L24_GSM_PIN'] = $_POST['line24_gsm_pin'] ;
  $updatesql_b.=",L24_GSM_PIN='".$values['L24_GSM_PIN']."'";
  $values['L24_GSM_PIN2'] = $_POST['line24_gsm_pin2'] ;
  $updatesql_b.=",L24_GSM_PIN2='".$values['L24_GSM_PIN2']."'";
  
  $values['L25_SIM_EXP'] = $_POST['line25_sim_exp'] ;
  $updatesql_b.=",L25_SIM_EXP='".$values['L25_SIM_EXP']."'";
  $values['L25_SIM_CALL_LIMIT'] = $_POST['line25_sim_call_limit'] ;
  $updatesql_b.=",L25_SIM_CALL_LIMIT='".$values['L25_SIM_CALL_LIMIT']."'";
  $values['L25_SIM_EXP_UNIT'] = $_POST['line25_sim_exp_unit'] ;
  $updatesql_b.=",L25_SIM_EXP_UNIT='".$values['L25_SIM_EXP_UNIT']."'";
  $values['L25_SIM_STRP_NUM'] = $_POST['line25_sim_strp_num'] ;
  $updatesql_b.=",L25_SIM_STRP_NUM='".$values['L25_SIM_STRP_NUM']."'";
  $values['L25_SIM_STRP_TIME'] = $_POST['line25_sim_strp_time'] ;
  $updatesql_b.=",L25_SIM_STRP_TIME='".$values['L25_SIM_STRP_TIME']."'";
  $values['LINE25_GSM_IMEI'] = $_POST['line25_gsm_imei'] ;
  $updatesql_b.=",LINE25_GSM_IMEI='".$values['LINE25_GSM_IMEI']."'";
  $values['L25_GSM_PIN'] = $_POST['line25_gsm_pin'] ;
  $updatesql_b.=",L25_GSM_PIN='".$values['L25_GSM_PIN']."'";
  $values['L25_GSM_PIN2'] = $_POST['line25_gsm_pin2'] ;
  $updatesql_b.=",L25_GSM_PIN2='".$values['L25_GSM_PIN2']."'";
  
  $values['L26_SIM_EXP'] = $_POST['line26_sim_exp'] ;
  $updatesql_b.=",L26_SIM_EXP='".$values['L26_SIM_EXP']."'";
  $values['L26_SIM_CALL_LIMIT'] = $_POST['line26_sim_call_limit'] ;
  $updatesql_b.=",L26_SIM_CALL_LIMIT='".$values['L26_SIM_CALL_LIMIT']."'";
  $values['L26_SIM_EXP_UNIT'] = $_POST['line26_sim_exp_unit'] ;
  $updatesql_b.=",L26_SIM_EXP_UNIT='".$values['L26_SIM_EXP_UNIT']."'";
  $values['L26_SIM_STRP_NUM'] = $_POST['line26_sim_strp_num'] ;
  $updatesql_b.=",L26_SIM_STRP_NUM='".$values['L26_SIM_STRP_NUM']."'";
  $values['L26_SIM_STRP_TIME'] = $_POST['line26_sim_strp_time'] ;
  $updatesql_b.=",L26_SIM_STRP_TIME='".$values['L26_SIM_STRP_TIME']."'";
  $values['LINE26_GSM_IMEI'] = $_POST['line26_gsm_imei'] ;
  $updatesql_b.=",LINE26_GSM_IMEI='".$values['LINE26_GSM_IMEI']."'";
  $values['L26_GSM_PIN'] = $_POST['line26_gsm_pin'] ;
  $updatesql_b.=",L26_GSM_PIN='".$values['L26_GSM_PIN']."'";
  $values['L26_GSM_PIN2'] = $_POST['line26_gsm_pin2'] ;
  $updatesql_b.=",L26_GSM_PIN2='".$values['L26_GSM_PIN2']."'";
  
  $values['L27_SIM_EXP'] = $_POST['line27_sim_exp'] ;
  $updatesql_b.=",L27_SIM_EXP='".$values['L27_SIM_EXP']."'";
  $values['L27_SIM_CALL_LIMIT'] = $_POST['line27_sim_call_limit'] ;
  $updatesql_b.=",L27_SIM_CALL_LIMIT='".$values['L27_SIM_CALL_LIMIT']."'";
  $values['L27_SIM_EXP_UNIT'] = $_POST['line27_sim_exp_unit'] ;
  $updatesql_b.=",L27_SIM_EXP_UNIT='".$values['L27_SIM_EXP_UNIT']."'";
  $values['L27_SIM_STRP_NUM'] = $_POST['line27_sim_strp_num'] ;
  $updatesql_b.=",L27_SIM_STRP_NUM='".$values['L27_SIM_STRP_NUM']."'";
  $values['L27_SIM_STRP_TIME'] = $_POST['line27_sim_strp_time'] ;
  $updatesql_b.=",L27_SIM_STRP_TIME='".$values['L27_SIM_STRP_TIME']."'";
  $values['LINE27_GSM_IMEI'] = $_POST['line27_gsm_imei'] ;
  $updatesql_b.=",LINE27_GSM_IMEI='".$values['LINE27_GSM_IMEI']."'";
  $values['L27_GSM_PIN'] = $_POST['line27_gsm_pin'] ;
  $updatesql_b.=",L27_GSM_PIN='".$values['L27_GSM_PIN']."'";
  $values['L27_GSM_PIN2'] = $_POST['line27_gsm_pin2'] ;
  $updatesql_b.=",L27_GSM_PIN2='".$values['L27_GSM_PIN2']."'";
  
  $values['L28_SIM_EXP'] = $_POST['line28_sim_exp'] ;
  $updatesql_b.=",L28_SIM_EXP='".$values['L28_SIM_EXP']."'";
  $values['L28_SIM_CALL_LIMIT'] = $_POST['line28_sim_call_limit'] ;
  $updatesql_b.=",L28_SIM_CALL_LIMIT='".$values['L28_SIM_CALL_LIMIT']."'";
  $values['L28_SIM_EXP_UNIT'] = $_POST['line28_sim_exp_unit'] ;
  $updatesql_b.=",L28_SIM_EXP_UNIT='".$values['L28_SIM_EXP_UNIT']."'";
  $values['L28_SIM_STRP_NUM'] = $_POST['line28_sim_strp_num'] ;
  $updatesql_b.=",L28_SIM_STRP_NUM='".$values['L28_SIM_STRP_NUM']."'";
  $values['L28_SIM_STRP_TIME'] = $_POST['line28_sim_strp_time'] ;
  $updatesql_b.=",L28_SIM_STRP_TIME='".$values['L28_SIM_STRP_TIME']."'";
  $values['LINE28_GSM_IMEI'] = $_POST['line28_gsm_imei'] ;
  $updatesql_b.=",LINE28_GSM_IMEI='".$values['LINE28_GSM_IMEI']."'";
  $values['L28_GSM_PIN'] = $_POST['line28_gsm_pin'] ;
  $updatesql_b.=",L28_GSM_PIN='".$values['L28_GSM_PIN']."'";
  $values['L28_GSM_PIN2'] = $_POST['line28_gsm_pin2'] ;
  $updatesql_b.=",L28_GSM_PIN2='".$values['L28_GSM_PIN2']."'";
  
  $values['L29_SIM_EXP'] = $_POST['line29_sim_exp'] ;
  $updatesql_b.=",L29_SIM_EXP='".$values['L29_SIM_EXP']."'";
  $values['L29_SIM_CALL_LIMIT'] = $_POST['line29_sim_call_limit'] ;
  $updatesql_b.=",L29_SIM_CALL_LIMIT='".$values['L29_SIM_CALL_LIMIT']."'";
  $values['L29_SIM_EXP_UNIT'] = $_POST['line29_sim_exp_unit'] ;
  $updatesql_b.=",L29_SIM_EXP_UNIT='".$values['L29_SIM_EXP_UNIT']."'";
  $values['L29_SIM_STRP_NUM'] = $_POST['line29_sim_strp_num'] ;
  $updatesql_b.=",L29_SIM_STRP_NUM='".$values['L29_SIM_STRP_NUM']."'";
  $values['L29_SIM_STRP_TIME'] = $_POST['line29_sim_strp_time'] ;
  $updatesql_b.=",L29_SIM_STRP_TIME='".$values['L29_SIM_STRP_TIME']."'";
  $values['LINE29_GSM_IMEI'] = $_POST['line29_gsm_imei'] ;
  $updatesql_b.=",LINE29_GSM_IMEI='".$values['LINE29_GSM_IMEI']."'";
  $values['L29_GSM_PIN'] = $_POST['line29_gsm_pin'] ;
  $updatesql_b.=",L29_GSM_PIN='".$values['L29_GSM_PIN']."'";
  $values['L29_GSM_PIN2'] = $_POST['line29_gsm_pin2'] ;
  $updatesql_b.=",L29_GSM_PIN2='".$values['L29_GSM_PIN2']."'";
  
  $values['L30_SIM_EXP'] = $_POST['line30_sim_exp'] ;
  $updatesql_b.=",L30_SIM_EXP='".$values['L30_SIM_EXP']."'";
  $values['L30_SIM_CALL_LIMIT'] = $_POST['line30_sim_call_limit'] ;
  $updatesql_b.=",L30_SIM_CALL_LIMIT='".$values['L30_SIM_CALL_LIMIT']."'";
  $values['L30_SIM_EXP_UNIT'] = $_POST['line30_sim_exp_unit'] ;
  $updatesql_b.=",L30_SIM_EXP_UNIT='".$values['L30_SIM_EXP_UNIT']."'";
  $values['L30_SIM_STRP_NUM'] = $_POST['line30_sim_strp_num'] ;
  $updatesql_b.=",L30_SIM_STRP_NUM='".$values['L30_SIM_STRP_NUM']."'";
  $values['L30_SIM_STRP_TIME'] = $_POST['line30_sim_strp_time'] ;
  $updatesql_b.=",L30_SIM_STRP_TIME='".$values['L30_SIM_STRP_TIME']."'";
  $values['LINE30_GSM_IMEI'] = $_POST['line30_gsm_imei'] ;
  $updatesql_b.=",LINE30_GSM_IMEI='".$values['LINE30_GSM_IMEI']."'";
  $values['L30_GSM_PIN'] = $_POST['line30_gsm_pin'] ;
  $updatesql_b.=",L30_GSM_PIN='".$values['L30_GSM_PIN']."'";
  $values['L30_GSM_PIN2'] = $_POST['line30_gsm_pin2'] ;
  $updatesql_b.=",L30_GSM_PIN2='".$values['L30_GSM_PIN2']."'";
  
  $values['L31_SIM_EXP'] = $_POST['line31_sim_exp'] ;
  $updatesql_b.=",L31_SIM_EXP='".$values['L31_SIM_EXP']."'";
  $values['L31_SIM_CALL_LIMIT'] = $_POST['line31_sim_call_limit'] ;
  $updatesql_b.=",L31_SIM_CALL_LIMIT='".$values['L31_SIM_CALL_LIMIT']."'";
  $values['L31_SIM_EXP_UNIT'] = $_POST['line31_sim_exp_unit'] ;
  $updatesql_b.=",L31_SIM_EXP_UNIT='".$values['L31_SIM_EXP_UNIT']."'";
  $values['L31_SIM_STRP_NUM'] = $_POST['line31_sim_strp_num'] ;
  $updatesql_b.=",L31_SIM_STRP_NUM='".$values['L31_SIM_STRP_NUM']."'";
  $values['L31_SIM_STRP_TIME'] = $_POST['line31_sim_strp_time'] ;
  $updatesql_b.=",L31_SIM_STRP_TIME='".$values['L31_SIM_STRP_TIME']."'";
  $values['LINE31_GSM_IMEI'] = $_POST['line31_gsm_imei'] ;
  $updatesql_b.=",LINE31_GSM_IMEI='".$values['LINE31_GSM_IMEI']."'";
  $values['L31_GSM_PIN'] = $_POST['line31_gsm_pin'] ;
  $updatesql_b.=",L31_GSM_PIN='".$values['L31_GSM_PIN']."'";
  $values['L31_GSM_PIN2'] = $_POST['line31_gsm_pin2'] ;
  $updatesql_b.=",L31_GSM_PIN2='".$values['L31_GSM_PIN2']."'";
  
  $values['L32_SIM_EXP'] = $_POST['line32_sim_exp'] ;
  $updatesql_b.=",L32_SIM_EXP='".$values['L32_SIM_EXP']."'";
  $values['L32_SIM_CALL_LIMIT'] = $_POST['line32_sim_call_limit'] ;
  $updatesql_b.=",L32_SIM_CALL_LIMIT='".$values['L32_SIM_CALL_LIMIT']."'";
  $values['L32_SIM_EXP_UNIT'] = $_POST['line32_sim_exp_unit'] ;
  $updatesql_b.=",L32_SIM_EXP_UNIT='".$values['L32_SIM_EXP_UNIT']."'";
  $values['L32_SIM_STRP_NUM'] = $_POST['line32_sim_strp_num'] ;
  $updatesql_b.=",L32_SIM_STRP_NUM='".$values['L32_SIM_STRP_NUM']."'";
  $values['L32_SIM_STRP_TIME'] = $_POST['line32_sim_strp_time'] ;
  $updatesql_b.=",L32_SIM_STRP_TIME='".$values['L32_SIM_STRP_TIME']."'";
  $values['LINE32_GSM_IMEI'] = $_POST['line32_gsm_imei'] ;
  $updatesql_b.=",LINE32_GSM_IMEI='".$values['LINE32_GSM_IMEI']."'";
  $values['L32_GSM_PIN'] = $_POST['line32_gsm_pin'] ;
  $updatesql_b.=",L32_GSM_PIN='".$values['L32_GSM_PIN']."'";
  $values['L32_GSM_PIN2'] = $_POST['line32_gsm_pin2'] ;
  $updatesql_b.=",L32_GSM_PIN2='".$values['L32_GSM_PIN2']."'";






  $insertsql_b.=",SMS_MODE";
  $insertsql2_b.="','".$values['SMS_MODE'];
  $insertsql_b.=",SMS_DIAL_ENABLE";
  $insertsql2_b.="','".$values['SMS_DIAL_ENABLE'];
  $insertsql_b.=",SMS_PREFIX";
  $insertsql2_b.="','".$values['SMS_PREFIX'];
  $insertsql_b.=",SMS_FW_NUM";
  $insertsql2_b.="','".$values['SMS_FW_NUM'];
  $insertsql_b.=",SMS_FW_GSM_NUM";
  $insertsql2_b.="','".$values['SMS_FW_GSM_NUM'];
  $insertsql_b.=",SIP_CID_FW_MODE";
  $insertsql2_b.="','".$values['SIP_CID_FW_MODE'];
  $insertsql_b.=",CID_FW_PREFIX";
  $insertsql2_b.="','".$values['CID_FW_PREFIX'];
  $insertsql_b.=",H323_CID_FW";
  $insertsql2_b.="','".$values['H323_CID_FW'];


  $insertsql_b.=",RTP_PORT";
  $insertsql2_b.="','".$values['RTP_PORT'];
  $insertsql_b.=",PACKETIZE_PERIOD";
  $insertsql2_b.="','".$values['PACKETIZE_PERIOD'];
  $insertsql_b.=",VPDSP_JB_MODE";
  $insertsql2_b.="','".$values['VPDSP_JB_MODE'];
  $insertsql_b.=",VPDSP_ADPT_MIN_JITTER";
  $insertsql2_b.="','".$values['VPDSP_ADPT_MIN_JITTER'];
  $insertsql_b.=",VPDSP_ADPT_MAX_JITTER";
  $insertsql2_b.="','".$values['VPDSP_ADPT_MAX_JITTER'];
  $insertsql_b.=",VPDSP_SEQ_MIN_JITTER";
  $insertsql2_b.="','".$values['VPDSP_SEQ_MIN_JITTER'];
  $insertsql_b.=",VPDSP_SEQ_MAX_JITTER";
  $insertsql2_b.="','".$values['VPDSP_SEQ_MAX_JITTER'];
  $insertsql_b.=",VPDSP_MIN_JITTER";
  $insertsql2_b.="','".$values['VPDSP_MIN_JITTER'];
  $insertsql_b.=",RTP_QOS";
  $insertsql2_b.="','".$values['RTP_QOS'];
  $insertsql_b.=",RTP_TOS";
  $insertsql2_b.="','".$values['RTP_TOS'];
  $insertsql_b.=",RTP_DIFFSERV";
  $insertsql2_b.="','".$values['RTP_DIFFSERV'];
  $insertsql_b.=",MG_CRYPT";
  $insertsql2_b.="','".$values['MG_CRYPT'];
  $insertsql_b.=",MG_RC4_KEY";
  $insertsql2_b.="','".$values['MG_RC4_KEY'];
  $insertsql_b.=",MG_ET263_CRYPT_TYPE";
  $insertsql2_b.="','".$values['MG_ET263_CRYPT_TYPE'];
  $insertsql_b.=",MG_ET263_CRYPT_DEP";
  $insertsql2_b.="','".$values['MG_ET263_CRYPT_DEP'];
  $insertsql_b.=",SYMMETRIC_RTP";
  $insertsql2_b.="','".$values['SYMMETRIC_RTP'];
  $insertsql_b.=",MG_NAT_TRAVERSAL";
  $insertsql2_b.="','".$values['MG_NAT_TRAVERSAL'];
  $insertsql_b.=",MG_STUN_SERVER";
  $insertsql2_b.="','".$values['MG_STUN_SERVER'];
  $insertsql_b.=",MG_PORTFWD_TYPE";
  $insertsql2_b.="','".$values['MG_PORTFWD_TYPE'];
  $insertsql_b.=",MG_PORTFWD_GW";
  $insertsql2_b.="','".$values['MG_PORTFWD_GW'];
  $insertsql_b.=",MG_RELAY_SERVER";
  $insertsql2_b.="','".$values['MG_RELAY_SERVER'];
  $insertsql_b.=",MG_RELAY_PORT";
  $insertsql2_b.="','".$values['MG_RELAY_PORT'];
  $insertsql_b.=",MG_RELAY_USER";
  $insertsql2_b.="','".$values['MG_RELAY_USER'];
  $insertsql_b.=",MG_RELAY_PASSWD";
  $insertsql2_b.="','".$values['MG_RELAY_PASSWD'];
  $insertsql_b.=",MG_RELAY_ENCRYPT";
  $insertsql2_b.="','".$values['MG_RELAY_ENCRYPT'];
  $insertsql_b.=",MG_RELAY_MODE";
  $insertsql2_b.="','".$values['MG_RELAY_MODE'];
  $insertsql_b.=",MG_RELAY_SERVER1";
  $insertsql2_b.="','".$values['MG_RELAY_SERVER1'];
  $insertsql_b.=",MG_RELAY_SERVER2";
  $insertsql2_b.="','".$values['MG_RELAY_SERVER2'];
  $insertsql_b.=",MG_RELAY_SERVER3";
  $insertsql2_b.="','".$values['MG_RELAY_SERVER3'];
  $insertsql_b.=",MG_RELAY_SERVER4";
  $insertsql2_b.="','".$values['MG_RELAY_SERVER4'];
  $insertsql_b.=",VPDSP_SIDE_TONE";
  $insertsql2_b.="','".$values['VPDSP_SIDE_TONE'];
  
  $insertsql_b.=",RADMIN_SERVER";
  $insertsql2_b.="','".$values['RADMIN_SERVER'];
  $insertsql_b.=",RADMIN_PORT";
  $insertsql2_b.="','".$values['RADMIN_PORT'];
  $insertsql_b.=",RADMIN_ID";
  $insertsql2_b.="','".$values['RADMIN_ID'];
  $insertsql_b.=",RADMIN_KEY";
  $insertsql2_b.="','".$values['RADMIN_KEY'];
  $insertsql_b.=",AUTOCFG";
  $insertsql2_b.="','".$values['AUTOCFG'];
  $insertsql_b.=",AUTOCFG_SERVER";
  $insertsql2_b.="','".$values['AUTOCFG_SERVER'];
  $insertsql_b.=",AUTOCFG_REFRESH";                                                                                 
  $insertsql2_b.="','".$values['AUTOCFG_REFRESH'];    


 /*codec*/ 
  $insertsql_b.=",PREFER_CODEC1";
  $insertsql2_b.="','".$values['PREFER_CODEC1'];
  $insertsql_b.=",CODEC1_DISABLE";
  $insertsql2_b.="','".$values['CODEC1_DISABLE'];
  $insertsql_b.=",PREFER_CODEC2";
  $insertsql2_b.="','".$values['PREFER_CODEC2'];
  $insertsql_b.=",CODEC2_DISABLE";
  $insertsql2_b.="','".$values['CODEC2_DISABLE'];
  $insertsql_b.=",PREFER_CODEC3";
  $insertsql2_b.="','".$values['PREFER_CODEC3'];
  $insertsql_b.=",CODEC3_DISABLE";
  $insertsql2_b.="','".$values['CODEC3_DISABLE'];
  $insertsql_b.=",PREFER_CODEC4";
  $insertsql2_b.="','".$values['PREFER_CODEC4'];
  $insertsql_b.=",CODEC4_DISABLE";
  $insertsql2_b.="','".$values['CODEC4_DISABLE'];
  $insertsql_b.=",PREFER_CODEC5";
  $insertsql2_b.="','".$values['PREFER_CODEC5'];
  $insertsql_b.=",CODEC5_DISABLE";
  $insertsql2_b.="','".$values['CODEC5_DISABLE'];
  $insertsql_b.=",PREFER_CODEC6";
  $insertsql2_b.="','".$values['PREFER_CODEC6'];
  $insertsql_b.=",CODEC6_DISABLE";
  $insertsql2_b.="','".$values['CODEC6_DISABLE'];
  $insertsql_b.=",PREFER_CODEC7";
  $insertsql2_b.="','".$values['PREFER_CODEC7'];
  $insertsql_b.=",CODEC7_DISABLE";
  $insertsql2_b.="','".$values['CODEC7_DISABLE'];
  
  $insertsql_b.=",RMSIM_ENABLE";
  $insertsql2_b.="','".$values['RMSIM_ENABLE'];
  $insertsql_b.=",SMB_SVR";
  $insertsql2_b.="','".$values['SMB_SVR'];
  $insertsql_b.=",SMB_ID";
  $insertsql2_b.="','".$values['SMB_ID'];
  $insertsql_b.=",SMB_KEY";
  $insertsql2_b.="','".$values['SMB_KEY'];
  
  $insertsql_b.=",L1_GSM_CF_UNCND_ENABLE";
  $insertsql2_b.="','".$values['L1_GSM_CF_UNCND_ENABLE'];
  $insertsql_b.=",L1_GSM_CF_UNCND_NUM";
  $insertsql2_b.="','".$values['L1_GSM_CF_UNCND_NUM'];
  $insertsql_b.=",L1_GSM_CF_BUSY_ENABLE";
  $insertsql2_b.="','".$values['L1_GSM_CF_BUSY_ENABLE'];
  $insertsql_b.=",L1_GSM_CF_BUSY_NUM";
  $insertsql2_b.="','".$values['L1_GSM_CF_BUSY_NUM'];
  $insertsql_b.=",L1_GSM_CF_NOREPLY_ENABLE";
  $insertsql2_b.="','".$values['L1_GSM_CF_NOREPLY_ENABLE'];
  $insertsql_b.=",L1_GSM_CF_NOREPLY_NUM";
  $insertsql2_b.="','".$values['L1_GSM_CF_NOREPLY_NUM'];
  $insertsql_b.=",L1_GSM_CF_NOTREACHABLE_ENABLE";
  $insertsql2_b.="','".$values['L1_GSM_CF_NOTREACHABLE_ENABLE'];
  $insertsql_b.=",L1_GSM_CF_NOTREACHABLE_NUM";
  $insertsql2_b.="','".$values['L1_GSM_CF_NOTREACHABLE_NUM'];

  $insertsql_b.=",L2_GSM_CF_UNCND_ENABLE";
  $insertsql2_b.="','".$values['L2_GSM_CF_UNCND_ENABLE'];
  $insertsql_b.=",L2_GSM_CF_UNCND_NUM";
  $insertsql2_b.="','".$values['L2_GSM_CF_UNCND_NUM'];
  $insertsql_b.=",L2_GSM_CF_BUSY_ENABLE";
  $insertsql2_b.="','".$values['L2_GSM_CF_BUSY_ENABLE'];
  $insertsql_b.=",L2_GSM_CF_BUSY_NUM";
  $insertsql2_b.="','".$values['L2_GSM_CF_BUSY_NUM'];
  $insertsql_b.=",L2_GSM_CF_NOREPLY_ENABLE";
  $insertsql2_b.="','".$values['L2_GSM_CF_NOREPLY_ENABLE'];
  $insertsql_b.=",L2_GSM_CF_NOREPLY_NUM";
  $insertsql2_b.="','".$values['L2_GSM_CF_NOREPLY_NUM'];
  $insertsql_b.=",L2_GSM_CF_NOTREACHABLE_ENABLE";
  $insertsql2_b.="','".$values['L2_GSM_CF_NOTREACHABLE_ENABLE'];
  $insertsql_b.=",L2_GSM_CF_NOTREACHABLE_NUM";
  $insertsql2_b.="','".$values['L2_GSM_CF_NOTREACHABLE_NUM'];

  $insertsql_b.=",L3_GSM_CF_UNCND_ENABLE";
  $insertsql2_b.="','".$values['L3_GSM_CF_UNCND_ENABLE'];
  $insertsql_b.=",L3_GSM_CF_UNCND_NUM";
  $insertsql2_b.="','".$values['L3_GSM_CF_UNCND_NUM'];
  $insertsql_b.=",L3_GSM_CF_BUSY_ENABLE";
  $insertsql2_b.="','".$values['L3_GSM_CF_BUSY_ENABLE'];
  $insertsql_b.=",L3_GSM_CF_BUSY_NUM";
  $insertsql2_b.="','".$values['L3_GSM_CF_BUSY_NUM'];
  $insertsql_b.=",L3_GSM_CF_NOREPLY_ENABLE";
  $insertsql2_b.="','".$values['L3_GSM_CF_NOREPLY_ENABLE'];
  $insertsql_b.=",L3_GSM_CF_NOREPLY_NUM";
  $insertsql2_b.="','".$values['L3_GSM_CF_NOREPLY_NUM'];
  $insertsql_b.=",L3_GSM_CF_NOTREACHABLE_ENABLE";
  $insertsql2_b.="','".$values['L3_GSM_CF_NOTREACHABLE_ENABLE'];
  $insertsql_b.=",L3_GSM_CF_NOTREACHABLE_NUM";
  $insertsql2_b.="','".$values['L3_GSM_CF_NOTREACHABLE_NUM'];

  $insertsql_b.=",L4_GSM_CF_UNCND_ENABLE";
  $insertsql2_b.="','".$values['L4_GSM_CF_UNCND_ENABLE'];
  $insertsql_b.=",L4_GSM_CF_UNCND_NUM";
  $insertsql2_b.="','".$values['L4_GSM_CF_UNCND_NUM'];
  $insertsql_b.=",L4_GSM_CF_BUSY_ENABLE";
  $insertsql2_b.="','".$values['L4_GSM_CF_BUSY_ENABLE'];
  $insertsql_b.=",L4_GSM_CF_BUSY_NUM";
  $insertsql2_b.="','".$values['L4_GSM_CF_BUSY_NUM'];
  $insertsql_b.=",L4_GSM_CF_NOREPLY_ENABLE";
  $insertsql2_b.="','".$values['L4_GSM_CF_NOREPLY_ENABLE'];
  $insertsql_b.=",L4_GSM_CF_NOREPLY_NUM";
  $insertsql2_b.="','".$values['L4_GSM_CF_NOREPLY_NUM'];
  $insertsql_b.=",L4_GSM_CF_NOTREACHABLE_ENABLE";
  $insertsql2_b.="','".$values['L4_GSM_CF_NOTREACHABLE_ENABLE'];
  $insertsql_b.=",L4_GSM_CF_NOTREACHABLE_NUM";
  $insertsql2_b.="','".$values['L4_GSM_CF_NOTREACHABLE_NUM'];

  $insertsql_b.=",L5_GSM_CF_UNCND_ENABLE";
  $insertsql2_b.="','".$values['L5_GSM_CF_UNCND_ENABLE'];
  $insertsql_b.=",L5_GSM_CF_UNCND_NUM";
  $insertsql2_b.="','".$values['L5_GSM_CF_UNCND_NUM'];
  $insertsql_b.=",L5_GSM_CF_BUSY_ENABLE";
  $insertsql2_b.="','".$values['L5_GSM_CF_BUSY_ENABLE'];
  $insertsql_b.=",L5_GSM_CF_BUSY_NUM";
  $insertsql2_b.="','".$values['L5_GSM_CF_BUSY_NUM'];
  $insertsql_b.=",L5_GSM_CF_NOREPLY_ENABLE";
  $insertsql2_b.="','".$values['L5_GSM_CF_NOREPLY_ENABLE'];
  $insertsql_b.=",L5_GSM_CF_NOREPLY_NUM";
  $insertsql2_b.="','".$values['L5_GSM_CF_NOREPLY_NUM'];
  $insertsql_b.=",L5_GSM_CF_NOTREACHABLE_ENABLE";
  $insertsql2_b.="','".$values['L5_GSM_CF_NOTREACHABLE_ENABLE'];
  $insertsql_b.=",L5_GSM_CF_NOTREACHABLE_NUM";
  $insertsql2_b.="','".$values['L5_GSM_CF_NOTREACHABLE_NUM'];

  $insertsql_b.=",L6_GSM_CF_UNCND_ENABLE";
  $insertsql2_b.="','".$values['L6_GSM_CF_UNCND_ENABLE'];
  $insertsql_b.=",L6_GSM_CF_UNCND_NUM";
  $insertsql2_b.="','".$values['L6_GSM_CF_UNCND_NUM'];
  $insertsql_b.=",L6_GSM_CF_BUSY_ENABLE";
  $insertsql2_b.="','".$values['L6_GSM_CF_BUSY_ENABLE'];
  $insertsql_b.=",L6_GSM_CF_BUSY_NUM";
  $insertsql2_b.="','".$values['L6_GSM_CF_BUSY_NUM'];
  $insertsql_b.=",L6_GSM_CF_NOREPLY_ENABLE";
  $insertsql2_b.="','".$values['L6_GSM_CF_NOREPLY_ENABLE'];
  $insertsql_b.=",L6_GSM_CF_NOREPLY_NUM";
  $insertsql2_b.="','".$values['L6_GSM_CF_NOREPLY_NUM'];
  $insertsql_b.=",L6_GSM_CF_NOTREACHABLE_ENABLE";
  $insertsql2_b.="','".$values['L6_GSM_CF_NOTREACHABLE_ENABLE'];
  $insertsql_b.=",L6_GSM_CF_NOTREACHABLE_NUM";
  $insertsql2_b.="','".$values['L6_GSM_CF_NOTREACHABLE_NUM'];

  $insertsql_b.=",L7_GSM_CF_UNCND_ENABLE";
  $insertsql2_b.="','".$values['L7_GSM_CF_UNCND_ENABLE'];
  $insertsql_b.=",L7_GSM_CF_UNCND_NUM";
  $insertsql2_b.="','".$values['L7_GSM_CF_UNCND_NUM'];
  $insertsql_b.=",L7_GSM_CF_BUSY_ENABLE";
  $insertsql2_b.="','".$values['L7_GSM_CF_BUSY_ENABLE'];
  $insertsql_b.=",L7_GSM_CF_BUSY_NUM";
  $insertsql2_b.="','".$values['L7_GSM_CF_BUSY_NUM'];
  $insertsql_b.=",L7_GSM_CF_NOREPLY_ENABLE";
  $insertsql2_b.="','".$values['L7_GSM_CF_NOREPLY_ENABLE'];
  $insertsql_b.=",L7_GSM_CF_NOREPLY_NUM";
  $insertsql2_b.="','".$values['L7_GSM_CF_NOREPLY_NUM'];
  $insertsql_b.=",L7_GSM_CF_NOTREACHABLE_ENABLE";
  $insertsql2_b.="','".$values['L7_GSM_CF_NOTREACHABLE_ENABLE'];
  $insertsql_b.=",L7_GSM_CF_NOTREACHABLE_NUM";
  $insertsql2_b.="','".$values['L7_GSM_CF_NOTREACHABLE_NUM'];

  $insertsql_b.=",L8_GSM_CF_UNCND_ENABLE";
  $insertsql2_b.="','".$values['L8_GSM_CF_UNCND_ENABLE'];
  $insertsql_b.=",L8_GSM_CF_UNCND_NUM";
  $insertsql2_b.="','".$values['L8_GSM_CF_UNCND_NUM'];
  $insertsql_b.=",L8_GSM_CF_BUSY_ENABLE";
  $insertsql2_b.="','".$values['L8_GSM_CF_BUSY_ENABLE'];
  $insertsql_b.=",L8_GSM_CF_BUSY_NUM";
  $insertsql2_b.="','".$values['L8_GSM_CF_BUSY_NUM'];
  $insertsql_b.=",L8_GSM_CF_NOREPLY_ENABLE";
  $insertsql2_b.="','".$values['L8_GSM_CF_NOREPLY_ENABLE'];
  $insertsql_b.=",L8_GSM_CF_NOREPLY_NUM";
  $insertsql2_b.="','".$values['L8_GSM_CF_NOREPLY_NUM'];
  $insertsql_b.=",L8_GSM_CF_NOTREACHABLE_ENABLE";
  $insertsql2_b.="','".$values['L8_GSM_CF_NOTREACHABLE_ENABLE'];
  $insertsql_b.=",L8_GSM_CF_NOTREACHABLE_NUM";
  $insertsql2_b.="','".$values['L8_GSM_CF_NOTREACHABLE_NUM'];
  
  $insertsql_b.=",L9_GSM_CF_UNCND_ENABLE";
  $insertsql2_b.="','".$values['L9_GSM_CF_UNCND_ENABLE'];
  $insertsql_b.=",L9_GSM_CF_UNCND_NUM";
  $insertsql2_b.="','".$values['L9_GSM_CF_UNCND_NUM'];
  $insertsql_b.=",L9_GSM_CF_BUSY_ENABLE";
  $insertsql2_b.="','".$values['L9_GSM_CF_BUSY_ENABLE'];
  $insertsql_b.=",L9_GSM_CF_BUSY_NUM";
  $insertsql2_b.="','".$values['L9_GSM_CF_BUSY_NUM'];
  $insertsql_b.=",L9_GSM_CF_NOREPLY_ENABLE";
  $insertsql2_b.="','".$values['L9_GSM_CF_NOREPLY_ENABLE'];
  $insertsql_b.=",L9_GSM_CF_NOREPLY_NUM";
  $insertsql2_b.="','".$values['L9_GSM_CF_NOREPLY_NUM'];
  $insertsql_b.=",L9_GSM_CF_NOTREACHABLE_ENABLE";
  $insertsql2_b.="','".$values['L9_GSM_CF_NOTREACHABLE_ENABLE'];
  $insertsql_b.=",L9_GSM_CF_NOTREACHABLE_NUM";
  $insertsql2_b.="','".$values['L9_GSM_CF_NOTREACHABLE_NUM'];
  
  $insertsql_b.=",L10_GSM_CF_UNCND_ENABLE";
  $insertsql2_b.="','".$values['L10_GSM_CF_UNCND_ENABLE'];
  $insertsql_b.=",L10_GSM_CF_UNCND_NUM";
  $insertsql2_b.="','".$values['L10_GSM_CF_UNCND_NUM'];
  $insertsql_b.=",L10_GSM_CF_BUSY_ENABLE";
  $insertsql2_b.="','".$values['L10_GSM_CF_BUSY_ENABLE'];
  $insertsql_b.=",L10_GSM_CF_BUSY_NUM";
  $insertsql2_b.="','".$values['L10_GSM_CF_BUSY_NUM'];
  $insertsql_b.=",L10_GSM_CF_NOREPLY_ENABLE";
  $insertsql2_b.="','".$values['L10_GSM_CF_NOREPLY_ENABLE'];
  $insertsql_b.=",L10_GSM_CF_NOREPLY_NUM";
  $insertsql2_b.="','".$values['L10_GSM_CF_NOREPLY_NUM'];
  $insertsql_b.=",L10_GSM_CF_NOTREACHABLE_ENABLE";
  $insertsql2_b.="','".$values['L10_GSM_CF_NOTREACHABLE_ENABLE'];
  $insertsql_b.=",L10_GSM_CF_NOTREACHABLE_NUM";
  $insertsql2_b.="','".$values['L10_GSM_CF_NOTREACHABLE_NUM'];
  
  $insertsql_b.=",L11_GSM_CF_UNCND_ENABLE";
  $insertsql2_b.="','".$values['L11_GSM_CF_UNCND_ENABLE'];
  $insertsql_b.=",L11_GSM_CF_UNCND_NUM";
  $insertsql2_b.="','".$values['L11_GSM_CF_UNCND_NUM'];
  $insertsql_b.=",L11_GSM_CF_BUSY_ENABLE";
  $insertsql2_b.="','".$values['L11_GSM_CF_BUSY_ENABLE'];
  $insertsql_b.=",L11_GSM_CF_BUSY_NUM";
  $insertsql2_b.="','".$values['L11_GSM_CF_BUSY_NUM'];
  $insertsql_b.=",L11_GSM_CF_NOREPLY_ENABLE";
  $insertsql2_b.="','".$values['L11_GSM_CF_NOREPLY_ENABLE'];
  $insertsql_b.=",L11_GSM_CF_NOREPLY_NUM";
  $insertsql2_b.="','".$values['L11_GSM_CF_NOREPLY_NUM'];
  $insertsql_b.=",L11_GSM_CF_NOTREACHABLE_ENABLE";
  $insertsql2_b.="','".$values['L11_GSM_CF_NOTREACHABLE_ENABLE'];
  $insertsql_b.=",L11_GSM_CF_NOTREACHABLE_NUM";
  $insertsql2_b.="','".$values['L11_GSM_CF_NOTREACHABLE_NUM'];
  
  $insertsql_b.=",L12_GSM_CF_UNCND_ENABLE";
  $insertsql2_b.="','".$values['L12_GSM_CF_UNCND_ENABLE'];
  $insertsql_b.=",L12_GSM_CF_UNCND_NUM";
  $insertsql2_b.="','".$values['L12_GSM_CF_UNCND_NUM'];
  $insertsql_b.=",L12_GSM_CF_BUSY_ENABLE";
  $insertsql2_b.="','".$values['L12_GSM_CF_BUSY_ENABLE'];
  $insertsql_b.=",L12_GSM_CF_BUSY_NUM";
  $insertsql2_b.="','".$values['L12_GSM_CF_BUSY_NUM'];
  $insertsql_b.=",L12_GSM_CF_NOREPLY_ENABLE";
  $insertsql2_b.="','".$values['L12_GSM_CF_NOREPLY_ENABLE'];
  $insertsql_b.=",L12_GSM_CF_NOREPLY_NUM";
  $insertsql2_b.="','".$values['L12_GSM_CF_NOREPLY_NUM'];
  $insertsql_b.=",L12_GSM_CF_NOTREACHABLE_ENABLE";
  $insertsql2_b.="','".$values['L12_GSM_CF_NOTREACHABLE_ENABLE'];
  $insertsql_b.=",L12_GSM_CF_NOTREACHABLE_NUM";
  $insertsql2_b.="','".$values['L12_GSM_CF_NOTREACHABLE_NUM'];
  
  $insertsql_b.=",L13_GSM_CF_UNCND_ENABLE";
  $insertsql2_b.="','".$values['L13_GSM_CF_UNCND_ENABLE'];
  $insertsql_b.=",L13_GSM_CF_UNCND_NUM";
  $insertsql2_b.="','".$values['L13_GSM_CF_UNCND_NUM'];
  $insertsql_b.=",L13_GSM_CF_BUSY_ENABLE";
  $insertsql2_b.="','".$values['L13_GSM_CF_BUSY_ENABLE'];
  $insertsql_b.=",L13_GSM_CF_BUSY_NUM";
  $insertsql2_b.="','".$values['L13_GSM_CF_BUSY_NUM'];
  $insertsql_b.=",L13_GSM_CF_NOREPLY_ENABLE";
  $insertsql2_b.="','".$values['L13_GSM_CF_NOREPLY_ENABLE'];
  $insertsql_b.=",L13_GSM_CF_NOREPLY_NUM";
  $insertsql2_b.="','".$values['L13_GSM_CF_NOREPLY_NUM'];
  $insertsql_b.=",L13_GSM_CF_NOTREACHABLE_ENABLE";
  $insertsql2_b.="','".$values['L13_GSM_CF_NOTREACHABLE_ENABLE'];
  $insertsql_b.=",L13_GSM_CF_NOTREACHABLE_NUM";
  $insertsql2_b.="','".$values['L13_GSM_CF_NOTREACHABLE_NUM'];
  
  $insertsql_b.=",L14_GSM_CF_UNCND_ENABLE";
  $insertsql2_b.="','".$values['L14_GSM_CF_UNCND_ENABLE'];
  $insertsql_b.=",L14_GSM_CF_UNCND_NUM";
  $insertsql2_b.="','".$values['L14_GSM_CF_UNCND_NUM'];
  $insertsql_b.=",L14_GSM_CF_BUSY_ENABLE";
  $insertsql2_b.="','".$values['L14_GSM_CF_BUSY_ENABLE'];
  $insertsql_b.=",L14_GSM_CF_BUSY_NUM";
  $insertsql2_b.="','".$values['L14_GSM_CF_BUSY_NUM'];
  $insertsql_b.=",L14_GSM_CF_NOREPLY_ENABLE";
  $insertsql2_b.="','".$values['L14_GSM_CF_NOREPLY_ENABLE'];
  $insertsql_b.=",L14_GSM_CF_NOREPLY_NUM";
  $insertsql2_b.="','".$values['L14_GSM_CF_NOREPLY_NUM'];
  $insertsql_b.=",L14_GSM_CF_NOTREACHABLE_ENABLE";
  $insertsql2_b.="','".$values['L14_GSM_CF_NOTREACHABLE_ENABLE'];
  $insertsql_b.=",L14_GSM_CF_NOTREACHABLE_NUM";
  $insertsql2_b.="','".$values['L14_GSM_CF_NOTREACHABLE_NUM'];
  
  $insertsql_b.=",L15_GSM_CF_UNCND_ENABLE";
  $insertsql2_b.="','".$values['L15_GSM_CF_UNCND_ENABLE'];
  $insertsql_b.=",L15_GSM_CF_UNCND_NUM";
  $insertsql2_b.="','".$values['L15_GSM_CF_UNCND_NUM'];
  $insertsql_b.=",L15_GSM_CF_BUSY_ENABLE";
  $insertsql2_b.="','".$values['L15_GSM_CF_BUSY_ENABLE'];
  $insertsql_b.=",L15_GSM_CF_BUSY_NUM";
  $insertsql2_b.="','".$values['L15_GSM_CF_BUSY_NUM'];
  $insertsql_b.=",L15_GSM_CF_NOREPLY_ENABLE";
  $insertsql2_b.="','".$values['L15_GSM_CF_NOREPLY_ENABLE'];
  $insertsql_b.=",L15_GSM_CF_NOREPLY_NUM";
  $insertsql2_b.="','".$values['L15_GSM_CF_NOREPLY_NUM'];
  $insertsql_b.=",L15_GSM_CF_NOTREACHABLE_ENABLE";
  $insertsql2_b.="','".$values['L15_GSM_CF_NOTREACHABLE_ENABLE'];
  $insertsql_b.=",L15_GSM_CF_NOTREACHABLE_NUM";
  $insertsql2_b.="','".$values['L15_GSM_CF_NOTREACHABLE_NUM'];
  
  $insertsql_b.=",L16_GSM_CF_UNCND_ENABLE";
  $insertsql2_b.="','".$values['L16_GSM_CF_UNCND_ENABLE'];
  $insertsql_b.=",L16_GSM_CF_UNCND_NUM";
  $insertsql2_b.="','".$values['L16_GSM_CF_UNCND_NUM'];
  $insertsql_b.=",L16_GSM_CF_BUSY_ENABLE";
  $insertsql2_b.="','".$values['L16_GSM_CF_BUSY_ENABLE'];
  $insertsql_b.=",L16_GSM_CF_BUSY_NUM";
  $insertsql2_b.="','".$values['L16_GSM_CF_BUSY_NUM'];
  $insertsql_b.=",L16_GSM_CF_NOREPLY_ENABLE";
  $insertsql2_b.="','".$values['L16_GSM_CF_NOREPLY_ENABLE'];
  $insertsql_b.=",L16_GSM_CF_NOREPLY_NUM";
  $insertsql2_b.="','".$values['L16_GSM_CF_NOREPLY_NUM'];
  $insertsql_b.=",L16_GSM_CF_NOTREACHABLE_ENABLE";
  $insertsql2_b.="','".$values['L16_GSM_CF_NOTREACHABLE_ENABLE'];
  $insertsql_b.=",L16_GSM_CF_NOTREACHABLE_NUM";
  $insertsql2_b.="','".$values['L16_GSM_CF_NOTREACHABLE_NUM'];
  
   $insertsql_b.=",L17_GSM_CF_UNCND_ENABLE";
  $insertsql2_b.="','".$values['L17_GSM_CF_UNCND_ENABLE'];
  $insertsql_b.=",L17_GSM_CF_UNCND_NUM";
  $insertsql2_b.="','".$values['L17_GSM_CF_UNCND_NUM'];
  $insertsql_b.=",L17_GSM_CF_BUSY_ENABLE";
  $insertsql2_b.="','".$values['L17_GSM_CF_BUSY_ENABLE'];
  $insertsql_b.=",L17_GSM_CF_BUSY_NUM";
  $insertsql2_b.="','".$values['L17_GSM_CF_BUSY_NUM'];
  $insertsql_b.=",L17_GSM_CF_NOREPLY_ENABLE";
  $insertsql2_b.="','".$values['L17_GSM_CF_NOREPLY_ENABLE'];
  $insertsql_b.=",L17_GSM_CF_NOREPLY_NUM";
  $insertsql2_b.="','".$values['L17_GSM_CF_NOREPLY_NUM'];
  $insertsql_b.=",L17_GSM_CF_NOTREACHABLE_ENABLE";
  $insertsql2_b.="','".$values['L17_GSM_CF_NOTREACHABLE_ENABLE'];
  $insertsql_b.=",L17_GSM_CF_NOTREACHABLE_NUM";
  $insertsql2_b.="','".$values['L17_GSM_CF_NOTREACHABLE_NUM'];
  
   $insertsql_b.=",L18_GSM_CF_UNCND_ENABLE";
  $insertsql2_b.="','".$values['L18_GSM_CF_UNCND_ENABLE'];
  $insertsql_b.=",L18_GSM_CF_UNCND_NUM";
  $insertsql2_b.="','".$values['L18_GSM_CF_UNCND_NUM'];
  $insertsql_b.=",L18_GSM_CF_BUSY_ENABLE";
  $insertsql2_b.="','".$values['L18_GSM_CF_BUSY_ENABLE'];
  $insertsql_b.=",L18_GSM_CF_BUSY_NUM";
  $insertsql2_b.="','".$values['L18_GSM_CF_BUSY_NUM'];
  $insertsql_b.=",L18_GSM_CF_NOREPLY_ENABLE";
  $insertsql2_b.="','".$values['L18_GSM_CF_NOREPLY_ENABLE'];
  $insertsql_b.=",L18_GSM_CF_NOREPLY_NUM";
  $insertsql2_b.="','".$values['L18_GSM_CF_NOREPLY_NUM'];
  $insertsql_b.=",L18_GSM_CF_NOTREACHABLE_ENABLE";
  $insertsql2_b.="','".$values['L18_GSM_CF_NOTREACHABLE_ENABLE'];
  $insertsql_b.=",L18_GSM_CF_NOTREACHABLE_NUM";
  $insertsql2_b.="','".$values['L18_GSM_CF_NOTREACHABLE_NUM'];
  
   $insertsql_b.=",L19_GSM_CF_UNCND_ENABLE";
  $insertsql2_b.="','".$values['L19_GSM_CF_UNCND_ENABLE'];
  $insertsql_b.=",L19_GSM_CF_UNCND_NUM";
  $insertsql2_b.="','".$values['L19_GSM_CF_UNCND_NUM'];
  $insertsql_b.=",L19_GSM_CF_BUSY_ENABLE";
  $insertsql2_b.="','".$values['L19_GSM_CF_BUSY_ENABLE'];
  $insertsql_b.=",L19_GSM_CF_BUSY_NUM";
  $insertsql2_b.="','".$values['L19_GSM_CF_BUSY_NUM'];
  $insertsql_b.=",L19_GSM_CF_NOREPLY_ENABLE";
  $insertsql2_b.="','".$values['L19_GSM_CF_NOREPLY_ENABLE'];
  $insertsql_b.=",L19_GSM_CF_NOREPLY_NUM";
  $insertsql2_b.="','".$values['L19_GSM_CF_NOREPLY_NUM'];
  $insertsql_b.=",L19_GSM_CF_NOTREACHABLE_ENABLE";
  $insertsql2_b.="','".$values['L19_GSM_CF_NOTREACHABLE_ENABLE'];
  $insertsql_b.=",L19_GSM_CF_NOTREACHABLE_NUM";
  $insertsql2_b.="','".$values['L19_GSM_CF_NOTREACHABLE_NUM'];
  
   $insertsql_b.=",L20_GSM_CF_UNCND_ENABLE";
  $insertsql2_b.="','".$values['L20_GSM_CF_UNCND_ENABLE'];
  $insertsql_b.=",L20_GSM_CF_UNCND_NUM";
  $insertsql2_b.="','".$values['L20_GSM_CF_UNCND_NUM'];
  $insertsql_b.=",L20_GSM_CF_BUSY_ENABLE";
  $insertsql2_b.="','".$values['L20_GSM_CF_BUSY_ENABLE'];
  $insertsql_b.=",L20_GSM_CF_BUSY_NUM";
  $insertsql2_b.="','".$values['L20_GSM_CF_BUSY_NUM'];
  $insertsql_b.=",L20_GSM_CF_NOREPLY_ENABLE";
  $insertsql2_b.="','".$values['L20_GSM_CF_NOREPLY_ENABLE'];
  $insertsql_b.=",L20_GSM_CF_NOREPLY_NUM";
  $insertsql2_b.="','".$values['L20_GSM_CF_NOREPLY_NUM'];
  $insertsql_b.=",L20_GSM_CF_NOTREACHABLE_ENABLE";
  $insertsql2_b.="','".$values['L20_GSM_CF_NOTREACHABLE_ENABLE'];
  $insertsql_b.=",L20_GSM_CF_NOTREACHABLE_NUM";
  $insertsql2_b.="','".$values['L20_GSM_CF_NOTREACHABLE_NUM'];
  
   $insertsql_b.=",L21_GSM_CF_UNCND_ENABLE";
  $insertsql2_b.="','".$values['L21_GSM_CF_UNCND_ENABLE'];
  $insertsql_b.=",L21_GSM_CF_UNCND_NUM";
  $insertsql2_b.="','".$values['L21_GSM_CF_UNCND_NUM'];
  $insertsql_b.=",L21_GSM_CF_BUSY_ENABLE";
  $insertsql2_b.="','".$values['L21_GSM_CF_BUSY_ENABLE'];
  $insertsql_b.=",L21_GSM_CF_BUSY_NUM";
  $insertsql2_b.="','".$values['L21_GSM_CF_BUSY_NUM'];
  $insertsql_b.=",L21_GSM_CF_NOREPLY_ENABLE";
  $insertsql2_b.="','".$values['L21_GSM_CF_NOREPLY_ENABLE'];
  $insertsql_b.=",L21_GSM_CF_NOREPLY_NUM";
  $insertsql2_b.="','".$values['L21_GSM_CF_NOREPLY_NUM'];
  $insertsql_b.=",L21_GSM_CF_NOTREACHABLE_ENABLE";
  $insertsql2_b.="','".$values['L21_GSM_CF_NOTREACHABLE_ENABLE'];
  $insertsql_b.=",L21_GSM_CF_NOTREACHABLE_NUM";
  $insertsql2_b.="','".$values['L21_GSM_CF_NOTREACHABLE_NUM'];
  
   $insertsql_b.=",L22_GSM_CF_UNCND_ENABLE";
  $insertsql2_b.="','".$values['L22_GSM_CF_UNCND_ENABLE'];
  $insertsql_b.=",L22_GSM_CF_UNCND_NUM";
  $insertsql2_b.="','".$values['L22_GSM_CF_UNCND_NUM'];
  $insertsql_b.=",L22_GSM_CF_BUSY_ENABLE";
  $insertsql2_b.="','".$values['L22_GSM_CF_BUSY_ENABLE'];
  $insertsql_b.=",L22_GSM_CF_BUSY_NUM";
  $insertsql2_b.="','".$values['L22_GSM_CF_BUSY_NUM'];
  $insertsql_b.=",L22_GSM_CF_NOREPLY_ENABLE";
  $insertsql2_b.="','".$values['L22_GSM_CF_NOREPLY_ENABLE'];
  $insertsql_b.=",L22_GSM_CF_NOREPLY_NUM";
  $insertsql2_b.="','".$values['L22_GSM_CF_NOREPLY_NUM'];
  $insertsql_b.=",L22_GSM_CF_NOTREACHABLE_ENABLE";
  $insertsql2_b.="','".$values['L22_GSM_CF_NOTREACHABLE_ENABLE'];
  $insertsql_b.=",L22_GSM_CF_NOTREACHABLE_NUM";
  $insertsql2_b.="','".$values['L22_GSM_CF_NOTREACHABLE_NUM'];
  
   $insertsql_b.=",L23_GSM_CF_UNCND_ENABLE";
  $insertsql2_b.="','".$values['L23_GSM_CF_UNCND_ENABLE'];
  $insertsql_b.=",L23_GSM_CF_UNCND_NUM";
  $insertsql2_b.="','".$values['L23_GSM_CF_UNCND_NUM'];
  $insertsql_b.=",L23_GSM_CF_BUSY_ENABLE";
  $insertsql2_b.="','".$values['L23_GSM_CF_BUSY_ENABLE'];
  $insertsql_b.=",L23_GSM_CF_BUSY_NUM";
  $insertsql2_b.="','".$values['L23_GSM_CF_BUSY_NUM'];
  $insertsql_b.=",L23_GSM_CF_NOREPLY_ENABLE";
  $insertsql2_b.="','".$values['L23_GSM_CF_NOREPLY_ENABLE'];
  $insertsql_b.=",L23_GSM_CF_NOREPLY_NUM";
  $insertsql2_b.="','".$values['L23_GSM_CF_NOREPLY_NUM'];
  $insertsql_b.=",L23_GSM_CF_NOTREACHABLE_ENABLE";
  $insertsql2_b.="','".$values['L23_GSM_CF_NOTREACHABLE_ENABLE'];
  $insertsql_b.=",L23_GSM_CF_NOTREACHABLE_NUM";
  $insertsql2_b.="','".$values['L23_GSM_CF_NOTREACHABLE_NUM'];
  
   $insertsql_b.=",L24_GSM_CF_UNCND_ENABLE";
  $insertsql2_b.="','".$values['L24_GSM_CF_UNCND_ENABLE'];
  $insertsql_b.=",L24_GSM_CF_UNCND_NUM";
  $insertsql2_b.="','".$values['L24_GSM_CF_UNCND_NUM'];
  $insertsql_b.=",L24_GSM_CF_BUSY_ENABLE";
  $insertsql2_b.="','".$values['L24_GSM_CF_BUSY_ENABLE'];
  $insertsql_b.=",L24_GSM_CF_BUSY_NUM";
  $insertsql2_b.="','".$values['L24_GSM_CF_BUSY_NUM'];
  $insertsql_b.=",L24_GSM_CF_NOREPLY_ENABLE";
  $insertsql2_b.="','".$values['L24_GSM_CF_NOREPLY_ENABLE'];
  $insertsql_b.=",L24_GSM_CF_NOREPLY_NUM";
  $insertsql2_b.="','".$values['L24_GSM_CF_NOREPLY_NUM'];
  $insertsql_b.=",L24_GSM_CF_NOTREACHABLE_ENABLE";
  $insertsql2_b.="','".$values['L24_GSM_CF_NOTREACHABLE_ENABLE'];
  $insertsql_b.=",L24_GSM_CF_NOTREACHABLE_NUM";
  $insertsql2_b.="','".$values['L24_GSM_CF_NOTREACHABLE_NUM'];
  
   $insertsql_b.=",L25_GSM_CF_UNCND_ENABLE";
  $insertsql2_b.="','".$values['L25_GSM_CF_UNCND_ENABLE'];
  $insertsql_b.=",L25_GSM_CF_UNCND_NUM";
  $insertsql2_b.="','".$values['L25_GSM_CF_UNCND_NUM'];
  $insertsql_b.=",L25_GSM_CF_BUSY_ENABLE";
  $insertsql2_b.="','".$values['L25_GSM_CF_BUSY_ENABLE'];
  $insertsql_b.=",L25_GSM_CF_BUSY_NUM";
  $insertsql2_b.="','".$values['L25_GSM_CF_BUSY_NUM'];
  $insertsql_b.=",L25_GSM_CF_NOREPLY_ENABLE";
  $insertsql2_b.="','".$values['L25_GSM_CF_NOREPLY_ENABLE'];
  $insertsql_b.=",L25_GSM_CF_NOREPLY_NUM";
  $insertsql2_b.="','".$values['L25_GSM_CF_NOREPLY_NUM'];
  $insertsql_b.=",L25_GSM_CF_NOTREACHABLE_ENABLE";
  $insertsql2_b.="','".$values['L25_GSM_CF_NOTREACHABLE_ENABLE'];
  $insertsql_b.=",L25_GSM_CF_NOTREACHABLE_NUM";
  $insertsql2_b.="','".$values['L25_GSM_CF_NOTREACHABLE_NUM'];
  
   $insertsql_b.=",L26_GSM_CF_UNCND_ENABLE";
  $insertsql2_b.="','".$values['L26_GSM_CF_UNCND_ENABLE'];
  $insertsql_b.=",L26_GSM_CF_UNCND_NUM";
  $insertsql2_b.="','".$values['L26_GSM_CF_UNCND_NUM'];
  $insertsql_b.=",L26_GSM_CF_BUSY_ENABLE";
  $insertsql2_b.="','".$values['L26_GSM_CF_BUSY_ENABLE'];
  $insertsql_b.=",L26_GSM_CF_BUSY_NUM";
  $insertsql2_b.="','".$values['L26_GSM_CF_BUSY_NUM'];
  $insertsql_b.=",L26_GSM_CF_NOREPLY_ENABLE";
  $insertsql2_b.="','".$values['L26_GSM_CF_NOREPLY_ENABLE'];
  $insertsql_b.=",L26_GSM_CF_NOREPLY_NUM";
  $insertsql2_b.="','".$values['L26_GSM_CF_NOREPLY_NUM'];
  $insertsql_b.=",L26_GSM_CF_NOTREACHABLE_ENABLE";
  $insertsql2_b.="','".$values['L26_GSM_CF_NOTREACHABLE_ENABLE'];
  $insertsql_b.=",L26_GSM_CF_NOTREACHABLE_NUM";
  $insertsql2_b.="','".$values['L26_GSM_CF_NOTREACHABLE_NUM'];
  
   $insertsql_b.=",L27_GSM_CF_UNCND_ENABLE";
  $insertsql2_b.="','".$values['L27_GSM_CF_UNCND_ENABLE'];
  $insertsql_b.=",L27_GSM_CF_UNCND_NUM";
  $insertsql2_b.="','".$values['L27_GSM_CF_UNCND_NUM'];
  $insertsql_b.=",L27_GSM_CF_BUSY_ENABLE";
  $insertsql2_b.="','".$values['L27_GSM_CF_BUSY_ENABLE'];
  $insertsql_b.=",L27_GSM_CF_BUSY_NUM";
  $insertsql2_b.="','".$values['L27_GSM_CF_BUSY_NUM'];
  $insertsql_b.=",L27_GSM_CF_NOREPLY_ENABLE";
  $insertsql2_b.="','".$values['L27_GSM_CF_NOREPLY_ENABLE'];
  $insertsql_b.=",L27_GSM_CF_NOREPLY_NUM";
  $insertsql2_b.="','".$values['L27_GSM_CF_NOREPLY_NUM'];
  $insertsql_b.=",L27_GSM_CF_NOTREACHABLE_ENABLE";
  $insertsql2_b.="','".$values['L27_GSM_CF_NOTREACHABLE_ENABLE'];
  $insertsql_b.=",L27_GSM_CF_NOTREACHABLE_NUM";
  $insertsql2_b.="','".$values['L27_GSM_CF_NOTREACHABLE_NUM'];
  
   $insertsql_b.=",L28_GSM_CF_UNCND_ENABLE";
  $insertsql2_b.="','".$values['L28_GSM_CF_UNCND_ENABLE'];
  $insertsql_b.=",L28_GSM_CF_UNCND_NUM";
  $insertsql2_b.="','".$values['L28_GSM_CF_UNCND_NUM'];
  $insertsql_b.=",L28_GSM_CF_BUSY_ENABLE";
  $insertsql2_b.="','".$values['L28_GSM_CF_BUSY_ENABLE'];
  $insertsql_b.=",L28_GSM_CF_BUSY_NUM";
  $insertsql2_b.="','".$values['L28_GSM_CF_BUSY_NUM'];
  $insertsql_b.=",L28_GSM_CF_NOREPLY_ENABLE";
  $insertsql2_b.="','".$values['L28_GSM_CF_NOREPLY_ENABLE'];
  $insertsql_b.=",L28_GSM_CF_NOREPLY_NUM";
  $insertsql2_b.="','".$values['L28_GSM_CF_NOREPLY_NUM'];
  $insertsql_b.=",L28_GSM_CF_NOTREACHABLE_ENABLE";
  $insertsql2_b.="','".$values['L28_GSM_CF_NOTREACHABLE_ENABLE'];
  $insertsql_b.=",L28_GSM_CF_NOTREACHABLE_NUM";
  $insertsql2_b.="','".$values['L28_GSM_CF_NOTREACHABLE_NUM'];
  
   $insertsql_b.=",L29_GSM_CF_UNCND_ENABLE";
  $insertsql2_b.="','".$values['L29_GSM_CF_UNCND_ENABLE'];
  $insertsql_b.=",L29_GSM_CF_UNCND_NUM";
  $insertsql2_b.="','".$values['L29_GSM_CF_UNCND_NUM'];
  $insertsql_b.=",L29_GSM_CF_BUSY_ENABLE";
  $insertsql2_b.="','".$values['L29_GSM_CF_BUSY_ENABLE'];
  $insertsql_b.=",L29_GSM_CF_BUSY_NUM";
  $insertsql2_b.="','".$values['L29_GSM_CF_BUSY_NUM'];
  $insertsql_b.=",L29_GSM_CF_NOREPLY_ENABLE";
  $insertsql2_b.="','".$values['L29_GSM_CF_NOREPLY_ENABLE'];
  $insertsql_b.=",L29_GSM_CF_NOREPLY_NUM";
  $insertsql2_b.="','".$values['L29_GSM_CF_NOREPLY_NUM'];
  $insertsql_b.=",L29_GSM_CF_NOTREACHABLE_ENABLE";
  $insertsql2_b.="','".$values['L29_GSM_CF_NOTREACHABLE_ENABLE'];
  $insertsql_b.=",L29_GSM_CF_NOTREACHABLE_NUM";
  $insertsql2_b.="','".$values['L29_GSM_CF_NOTREACHABLE_NUM'];
  
   $insertsql_b.=",L30_GSM_CF_UNCND_ENABLE";
  $insertsql2_b.="','".$values['L30_GSM_CF_UNCND_ENABLE'];
  $insertsql_b.=",L30_GSM_CF_UNCND_NUM";
  $insertsql2_b.="','".$values['L30_GSM_CF_UNCND_NUM'];
  $insertsql_b.=",L30_GSM_CF_BUSY_ENABLE";
  $insertsql2_b.="','".$values['L30_GSM_CF_BUSY_ENABLE'];
  $insertsql_b.=",L30_GSM_CF_BUSY_NUM";
  $insertsql2_b.="','".$values['L30_GSM_CF_BUSY_NUM'];
  $insertsql_b.=",L30_GSM_CF_NOREPLY_ENABLE";
  $insertsql2_b.="','".$values['L30_GSM_CF_NOREPLY_ENABLE'];
  $insertsql_b.=",L30_GSM_CF_NOREPLY_NUM";
  $insertsql2_b.="','".$values['L30_GSM_CF_NOREPLY_NUM'];
  $insertsql_b.=",L30_GSM_CF_NOTREACHABLE_ENABLE";
  $insertsql2_b.="','".$values['L30_GSM_CF_NOTREACHABLE_ENABLE'];
  $insertsql_b.=",L30_GSM_CF_NOTREACHABLE_NUM";
  $insertsql2_b.="','".$values['L30_GSM_CF_NOTREACHABLE_NUM'];
  
   $insertsql_b.=",L31_GSM_CF_UNCND_ENABLE";
  $insertsql2_b.="','".$values['L31_GSM_CF_UNCND_ENABLE'];
  $insertsql_b.=",L31_GSM_CF_UNCND_NUM";
  $insertsql2_b.="','".$values['L31_GSM_CF_UNCND_NUM'];
  $insertsql_b.=",L31_GSM_CF_BUSY_ENABLE";
  $insertsql2_b.="','".$values['L31_GSM_CF_BUSY_ENABLE'];
  $insertsql_b.=",L31_GSM_CF_BUSY_NUM";
  $insertsql2_b.="','".$values['L31_GSM_CF_BUSY_NUM'];
  $insertsql_b.=",L31_GSM_CF_NOREPLY_ENABLE";
  $insertsql2_b.="','".$values['L31_GSM_CF_NOREPLY_ENABLE'];
  $insertsql_b.=",L31_GSM_CF_NOREPLY_NUM";
  $insertsql2_b.="','".$values['L31_GSM_CF_NOREPLY_NUM'];
  $insertsql_b.=",L31_GSM_CF_NOTREACHABLE_ENABLE";
  $insertsql2_b.="','".$values['L31_GSM_CF_NOTREACHABLE_ENABLE'];
  $insertsql_b.=",L31_GSM_CF_NOTREACHABLE_NUM";
  $insertsql2_b.="','".$values['L31_GSM_CF_NOTREACHABLE_NUM'];
  
   $insertsql_b.=",L32_GSM_CF_UNCND_ENABLE";
  $insertsql2_b.="','".$values['L32_GSM_CF_UNCND_ENABLE'];
  $insertsql_b.=",L32_GSM_CF_UNCND_NUM";
  $insertsql2_b.="','".$values['L32_GSM_CF_UNCND_NUM'];
  $insertsql_b.=",L32_GSM_CF_BUSY_ENABLE";
  $insertsql2_b.="','".$values['L32_GSM_CF_BUSY_ENABLE'];
  $insertsql_b.=",L32_GSM_CF_BUSY_NUM";
  $insertsql2_b.="','".$values['L32_GSM_CF_BUSY_NUM'];
  $insertsql_b.=",L32_GSM_CF_NOREPLY_ENABLE";
  $insertsql2_b.="','".$values['L32_GSM_CF_NOREPLY_ENABLE'];
  $insertsql_b.=",L32_GSM_CF_NOREPLY_NUM";
  $insertsql2_b.="','".$values['L32_GSM_CF_NOREPLY_NUM'];
  $insertsql_b.=",L32_GSM_CF_NOTREACHABLE_ENABLE";
  $insertsql2_b.="','".$values['L32_GSM_CF_NOTREACHABLE_ENABLE'];
  $insertsql_b.=",L32_GSM_CF_NOTREACHABLE_NUM";
  $insertsql2_b.="','".$values['L32_GSM_CF_NOTREACHABLE_NUM'];
  
  $insertsql_b.=",L1_SIM_EXP";
  $insertsql2_b.="','".$values['L1_SIM_EXP'];
  $insertsql_b.=",L1_SIM_CALL_LIMIT";
  $insertsql2_b.="','".$values['L1_SIM_CALL_LIMIT'];
  $insertsql_b.=",L1_SIM_EXP_UNIT";
  $insertsql2_b.="','".$values['L1_SIM_EXP_UNIT'];
  $insertsql_b.=",L1_SIM_STRP_NUM";
  $insertsql2_b.="','".$values['L1_SIM_STRP_NUM'];
  $insertsql_b.=",L1_SIM_STRP_TIME";
  $insertsql2_b.="','".$values['L1_SIM_STRP_TIME'];
  $insertsql_b.=",LINE1_GSM_IMEI";
  $insertsql2_b.="','".$values['LINE1_GSM_IMEI'];
  $insertsql_b.=",L1_GSM_PIN";
  $insertsql2_b.="','".$values['L1_GSM_PIN'];
  $insertsql_b.=",L1_GSM_PIN2";
  $insertsql2_b.="','".$values['L1_GSM_PIN2'];

  $insertsql_b.=",L2_SIM_EXP";
  $insertsql2_b.="','".$values['L2_SIM_EXP'];
  $insertsql_b.=",L2_SIM_CALL_LIMIT";
  $insertsql2_b.="','".$values['L2_SIM_CALL_LIMIT'];
  $insertsql_b.=",L2_SIM_EXP_UNIT";
  $insertsql2_b.="','".$values['L2_SIM_EXP_UNIT'];
  $insertsql_b.=",L2_SIM_STRP_NUM";
  $insertsql2_b.="','".$values['L2_SIM_STRP_NUM'];
  $insertsql_b.=",L2_SIM_STRP_TIME";
  $insertsql2_b.="','".$values['L2_SIM_STRP_TIME'];
  $insertsql_b.=",LINE2_GSM_IMEI";
  $insertsql2_b.="','".$values['LINE2_GSM_IMEI'];
  $insertsql_b.=",L2_GSM_PIN";
  $insertsql2_b.="','".$values['L2_GSM_PIN'];
  $insertsql_b.=",L2_GSM_PIN2";
  $insertsql2_b.="','".$values['L2_GSM_PIN2'];

  $insertsql_b.=",L3_SIM_EXP";
  $insertsql2_b.="','".$values['L3_SIM_EXP'];
  $insertsql_b.=",L3_SIM_CALL_LIMIT";
  $insertsql2_b.="','".$values['L3_SIM_CALL_LIMIT'];
  $insertsql_b.=",L3_SIM_EXP_UNIT";
  $insertsql2_b.="','".$values['L3_SIM_EXP_UNIT'];
  $insertsql_b.=",L3_SIM_STRP_NUM";
  $insertsql2_b.="','".$values['L3_SIM_STRP_NUM'];
  $insertsql_b.=",L3_SIM_STRP_TIME";
  $insertsql2_b.="','".$values['L3_SIM_STRP_TIME'];
  $insertsql_b.=",LINE3_GSM_IMEI";
  $insertsql2_b.="','".$values['LINE3_GSM_IMEI'];
  $insertsql_b.=",L3_GSM_PIN";
  $insertsql2_b.="','".$values['L3_GSM_PIN'];
  $insertsql_b.=",L3_GSM_PIN2";
  $insertsql2_b.="','".$values['L3_GSM_PIN2'];

  $insertsql_b.=",L4_SIM_EXP";
  $insertsql2_b.="','".$values['L4_SIM_EXP'];
  $insertsql_b.=",L4_SIM_CALL_LIMIT";
  $insertsql2_b.="','".$values['L4_SIM_CALL_LIMIT'];
  $insertsql_b.=",L4_SIM_EXP_UNIT";
  $insertsql2_b.="','".$values['L4_SIM_EXP_UNIT'];
  $insertsql_b.=",L4_SIM_STRP_NUM";
  $insertsql2_b.="','".$values['L4_SIM_STRP_NUM'];
  $insertsql_b.=",L4_SIM_STRP_TIME";
  $insertsql2_b.="','".$values['L4_SIM_STRP_TIME'];
  $insertsql_b.=",LINE4_GSM_IMEI";
  $insertsql2_b.="','".$values['LINE4_GSM_IMEI'];
  $insertsql_b.=",L4_GSM_PIN";
  $insertsql2_b.="','".$values['L4_GSM_PIN'];
  $insertsql_b.=",L4_GSM_PIN2";
  $insertsql2_b.="','".$values['L4_GSM_PIN2'];

  $insertsql_b.=",L5_SIM_EXP";
  $insertsql2_b.="','".$values['L5_SIM_EXP'];
  $insertsql_b.=",L5_SIM_CALL_LIMIT";
  $insertsql2_b.="','".$values['L5_SIM_CALL_LIMIT'];
  $insertsql_b.=",L5_SIM_EXP_UNIT";
  $insertsql2_b.="','".$values['L5_SIM_EXP_UNIT'];
  $insertsql_b.=",L5_SIM_STRP_NUM";
  $insertsql2_b.="','".$values['L5_SIM_STRP_NUM'];
  $insertsql_b.=",L5_SIM_STRP_TIME";
  $insertsql2_b.="','".$values['L5_SIM_STRP_TIME'];
  $insertsql_b.=",LINE5_GSM_IMEI";
  $insertsql2_b.="','".$values['LINE5_GSM_IMEI'];
  $insertsql_b.=",L5_GSM_PIN";
  $insertsql2_b.="','".$values['L5_GSM_PIN'];
  $insertsql_b.=",L5_GSM_PIN2";
  $insertsql2_b.="','".$values['L5_GSM_PIN2'];

  $insertsql_b.=",L6_SIM_EXP";
  $insertsql2_b.="','".$values['L6_SIM_EXP'];
  $insertsql_b.=",L6_SIM_CALL_LIMIT";
  $insertsql2_b.="','".$values['L6_SIM_CALL_LIMIT'];
  $insertsql_b.=",L6_SIM_EXP_UNIT";
  $insertsql2_b.="','".$values['L6_SIM_EXP_UNIT'];
  $insertsql_b.=",L6_SIM_STRP_NUM";
  $insertsql2_b.="','".$values['L6_SIM_STRP_NUM'];
  $insertsql_b.=",L6_SIM_STRP_TIME";
  $insertsql2_b.="','".$values['L6_SIM_STRP_TIME'];
  $insertsql_b.=",LINE6_GSM_IMEI";
  $insertsql2_b.="','".$values['LINE6_GSM_IMEI'];
  $insertsql_b.=",L6_GSM_PIN";
  $insertsql2_b.="','".$values['L6_GSM_PIN'];
  $insertsql_b.=",L6_GSM_PIN2";
  $insertsql2_b.="','".$values['L6_GSM_PIN2'];

  $insertsql_b.=",L7_SIM_EXP";
  $insertsql2_b.="','".$values['L7_SIM_EXP'];
  $insertsql_b.=",L7_SIM_CALL_LIMIT";
  $insertsql2_b.="','".$values['L7_SIM_CALL_LIMIT'];
  $insertsql_b.=",L7_SIM_EXP_UNIT";
  $insertsql2_b.="','".$values['L7_SIM_EXP_UNIT'];
  $insertsql_b.=",L7_SIM_STRP_NUM";
  $insertsql2_b.="','".$values['L7_SIM_STRP_NUM'];
  $insertsql_b.=",L7_SIM_STRP_TIME";
  $insertsql2_b.="','".$values['L7_SIM_STRP_TIME'];
  $insertsql_b.=",LINE7_GSM_IMEI";
  $insertsql2_b.="','".$values['LINE7_GSM_IMEI'];
  $insertsql_b.=",L7_GSM_PIN";
  $insertsql2_b.="','".$values['L7_GSM_PIN'];
  $insertsql_b.=",L7_GSM_PIN2";
  $insertsql2_b.="','".$values['L7_GSM_PIN2'];

  $insertsql_b.=",L8_SIM_EXP";
  $insertsql2_b.="','".$values['L8_SIM_EXP'];
  $insertsql_b.=",L8_SIM_CALL_LIMIT";
  $insertsql2_b.="','".$values['L8_SIM_CALL_LIMIT'];
  $insertsql_b.=",L8_SIM_EXP_UNIT";
  $insertsql2_b.="','".$values['L8_SIM_EXP_UNIT'];
  $insertsql_b.=",L8_SIM_STRP_NUM";
  $insertsql2_b.="','".$values['L8_SIM_STRP_NUM'];
  $insertsql_b.=",L8_SIM_STRP_TIME";
  $insertsql2_b.="','".$values['L8_SIM_STRP_TIME'];
  $insertsql_b.=",LINE8_GSM_IMEI";
  $insertsql2_b.="','".$values['LINE8_GSM_IMEI'];
  $insertsql_b.=",L8_GSM_PIN";
  $insertsql2_b.="','".$values['L8_GSM_PIN'];
  $insertsql_b.=",L8_GSM_PIN2";
  $insertsql2_b.="','".$values['L8_GSM_PIN2'];
  
  $insertsql_b.=",L9_SIM_EXP";
  $insertsql2_b.="','".$values['L9_SIM_EXP'];
  $insertsql_b.=",L9_SIM_CALL_LIMIT";
  $insertsql2_b.="','".$values['L9_SIM_CALL_LIMIT'];
  $insertsql_b.=",L9_SIM_EXP_UNIT";
  $insertsql2_b.="','".$values['L9_SIM_EXP_UNIT'];
  $insertsql_b.=",L9_SIM_STRP_NUM";
  $insertsql2_b.="','".$values['L9_SIM_STRP_NUM'];
  $insertsql_b.=",L9_SIM_STRP_TIME";
  $insertsql2_b.="','".$values['L9_SIM_STRP_TIME'];
  $insertsql_b.=",LINE9_GSM_IMEI";
  $insertsql2_b.="','".$values['LINE9_GSM_IMEI'];
  $insertsql_b.=",L9_GSM_PIN";
  $insertsql2_b.="','".$values['L9_GSM_PIN'];
  $insertsql_b.=",L9_GSM_PIN2";
  $insertsql2_b.="','".$values['L9_GSM_PIN2'];
  
  $insertsql_b.=",L10_SIM_EXP";
  $insertsql2_b.="','".$values['L10_SIM_EXP'];
  $insertsql_b.=",L10_SIM_CALL_LIMIT";
  $insertsql2_b.="','".$values['L10_SIM_CALL_LIMIT'];
  $insertsql_b.=",L10_SIM_EXP_UNIT";
  $insertsql2_b.="','".$values['L10_SIM_EXP_UNIT'];
  $insertsql_b.=",L10_SIM_STRP_NUM";
  $insertsql2_b.="','".$values['L10_SIM_STRP_NUM'];
  $insertsql_b.=",L10_SIM_STRP_TIME";
  $insertsql2_b.="','".$values['L10_SIM_STRP_TIME'];
  $insertsql_b.=",LINE10_GSM_IMEI";
  $insertsql2_b.="','".$values['LINE10_GSM_IMEI'];
  $insertsql_b.=",L10_GSM_PIN";
  $insertsql2_b.="','".$values['L10_GSM_PIN'];
  $insertsql_b.=",L10_GSM_PIN2";
  $insertsql2_b.="','".$values['L10_GSM_PIN2'];
  
  $insertsql_b.=",L11_SIM_EXP";
  $insertsql2_b.="','".$values['L11_SIM_EXP'];
  $insertsql_b.=",L11_SIM_CALL_LIMIT";
  $insertsql2_b.="','".$values['L11_SIM_CALL_LIMIT'];
  $insertsql_b.=",L11_SIM_EXP_UNIT";
  $insertsql2_b.="','".$values['L11_SIM_EXP_UNIT'];
  $insertsql_b.=",L11_SIM_STRP_NUM";
  $insertsql2_b.="','".$values['L11_SIM_STRP_NUM'];
  $insertsql_b.=",L11_SIM_STRP_TIME";
  $insertsql2_b.="','".$values['L11_SIM_STRP_TIME'];
  $insertsql_b.=",LINE11_GSM_IMEI";
  $insertsql2_b.="','".$values['LINE11_GSM_IMEI'];
  $insertsql_b.=",L11_GSM_PIN";
  $insertsql2_b.="','".$values['L11_GSM_PIN'];
  $insertsql_b.=",L11_GSM_PIN2";
  $insertsql2_b.="','".$values['L11_GSM_PIN2'];
  
  $insertsql_b.=",L12_SIM_EXP";
  $insertsql2_b.="','".$values['L12_SIM_EXP'];
  $insertsql_b.=",L12_SIM_CALL_LIMIT";
  $insertsql2_b.="','".$values['L12_SIM_CALL_LIMIT'];
  $insertsql_b.=",L12_SIM_EXP_UNIT";
  $insertsql2_b.="','".$values['L12_SIM_EXP_UNIT'];
  $insertsql_b.=",L12_SIM_STRP_NUM";
  $insertsql2_b.="','".$values['L12_SIM_STRP_NUM'];
  $insertsql_b.=",L12_SIM_STRP_TIME";
  $insertsql2_b.="','".$values['L12_SIM_STRP_TIME'];
  $insertsql_b.=",LINE12_GSM_IMEI";
  $insertsql2_b.="','".$values['LINE12_GSM_IMEI'];
  $insertsql_b.=",L12_GSM_PIN";
  $insertsql2_b.="','".$values['L12_GSM_PIN'];
  $insertsql_b.=",L12_GSM_PIN2";
  $insertsql2_b.="','".$values['L12_GSM_PIN2'];
  
  $insertsql_b.=",L13_SIM_EXP";
  $insertsql2_b.="','".$values['L13_SIM_EXP'];
  $insertsql_b.=",L13_SIM_CALL_LIMIT";
  $insertsql2_b.="','".$values['L13_SIM_CALL_LIMIT'];
  $insertsql_b.=",L13_SIM_EXP_UNIT";
  $insertsql2_b.="','".$values['L13_SIM_EXP_UNIT'];
  $insertsql_b.=",L13_SIM_STRP_NUM";
  $insertsql2_b.="','".$values['L13_SIM_STRP_NUM'];
  $insertsql_b.=",L13_SIM_STRP_TIME";
  $insertsql2_b.="','".$values['L13_SIM_STRP_TIME'];
  $insertsql_b.=",LINE13_GSM_IMEI";
  $insertsql2_b.="','".$values['LINE13_GSM_IMEI'];
  $insertsql_b.=",L13_GSM_PIN";
  $insertsql2_b.="','".$values['L13_GSM_PIN'];
  $insertsql_b.=",L13_GSM_PIN2";
  $insertsql2_b.="','".$values['L13_GSM_PIN2'];
  
  $insertsql_b.=",L14_SIM_EXP";
  $insertsql2_b.="','".$values['L14_SIM_EXP'];
  $insertsql_b.=",L14_SIM_CALL_LIMIT";
  $insertsql2_b.="','".$values['L14_SIM_CALL_LIMIT'];
  $insertsql_b.=",L14_SIM_EXP_UNIT";
  $insertsql2_b.="','".$values['L14_SIM_EXP_UNIT'];
  $insertsql_b.=",L14_SIM_STRP_NUM";
  $insertsql2_b.="','".$values['L14_SIM_STRP_NUM'];
  $insertsql_b.=",L14_SIM_STRP_TIME";
  $insertsql2_b.="','".$values['L14_SIM_STRP_TIME'];
  $insertsql_b.=",LINE14_GSM_IMEI";
  $insertsql2_b.="','".$values['LINE14_GSM_IMEI'];
  $insertsql_b.=",L14_GSM_PIN";
  $insertsql2_b.="','".$values['L14_GSM_PIN'];
  $insertsql_b.=",L14_GSM_PIN2";
  $insertsql2_b.="','".$values['L14_GSM_PIN2'];
  
  $insertsql_b.=",L15_SIM_EXP";
  $insertsql2_b.="','".$values['L15_SIM_EXP'];
  $insertsql_b.=",L15_SIM_CALL_LIMIT";
  $insertsql2_b.="','".$values['L15_SIM_CALL_LIMIT'];
  $insertsql_b.=",L15_SIM_EXP_UNIT";
  $insertsql2_b.="','".$values['L15_SIM_EXP_UNIT'];
  $insertsql_b.=",L15_SIM_STRP_NUM";
  $insertsql2_b.="','".$values['L15_SIM_STRP_NUM'];
  $insertsql_b.=",L15_SIM_STRP_TIME";
  $insertsql2_b.="','".$values['L15_SIM_STRP_TIME'];
  $insertsql_b.=",LINE15_GSM_IMEI";
  $insertsql2_b.="','".$values['LINE15_GSM_IMEI'];
  $insertsql_b.=",L15_GSM_PIN";
  $insertsql2_b.="','".$values['L15_GSM_PIN'];
  $insertsql_b.=",L15_GSM_PIN2";
  $insertsql2_b.="','".$values['L15_GSM_PIN2'];
  
  $insertsql_b.=",L16_SIM_EXP";
  $insertsql2_b.="','".$values['L16_SIM_EXP'];
  $insertsql_b.=",L16_SIM_CALL_LIMIT";
  $insertsql2_b.="','".$values['L16_SIM_CALL_LIMIT'];
  $insertsql_b.=",L16_SIM_EXP_UNIT";
  $insertsql2_b.="','".$values['L16_SIM_EXP_UNIT'];
  $insertsql_b.=",L16_SIM_STRP_NUM";
  $insertsql2_b.="','".$values['L16_SIM_STRP_NUM'];
  $insertsql_b.=",L16_SIM_STRP_TIME";
  $insertsql2_b.="','".$values['L16_SIM_STRP_TIME'];
  $insertsql_b.=",LINE16_GSM_IMEI";
  $insertsql2_b.="','".$values['LINE16_GSM_IMEI'];
  $insertsql_b.=",L16_GSM_PIN";
  $insertsql2_b.="','".$values['L16_GSM_PIN'];
  $insertsql_b.=",L16_GSM_PIN2";
  $insertsql2_b.="','".$values['L16_GSM_PIN2'];
  
   $insertsql_b.=",L17_SIM_EXP";
  $insertsql2_b.="','".$values['L17_SIM_EXP'];
  $insertsql_b.=",L17_SIM_CALL_LIMIT";
  $insertsql2_b.="','".$values['L17_SIM_CALL_LIMIT'];
  $insertsql_b.=",L17_SIM_EXP_UNIT";
  $insertsql2_b.="','".$values['L17_SIM_EXP_UNIT'];
  $insertsql_b.=",L17_SIM_STRP_NUM";
  $insertsql2_b.="','".$values['L17_SIM_STRP_NUM'];
  $insertsql_b.=",L17_SIM_STRP_TIME";
  $insertsql2_b.="','".$values['L17_SIM_STRP_TIME'];
  $insertsql_b.=",LINE17_GSM_IMEI";
  $insertsql2_b.="','".$values['LINE17_GSM_IMEI'];
  $insertsql_b.=",L17_GSM_PIN";
  $insertsql2_b.="','".$values['L17_GSM_PIN'];
  $insertsql_b.=",L17_GSM_PIN2";
  $insertsql2_b.="','".$values['L17_GSM_PIN2'];
  
   $insertsql_b.=",L18_SIM_EXP";
  $insertsql2_b.="','".$values['L18_SIM_EXP'];
  $insertsql_b.=",L18_SIM_CALL_LIMIT";
  $insertsql2_b.="','".$values['L18_SIM_CALL_LIMIT'];
  $insertsql_b.=",L18_SIM_EXP_UNIT";
  $insertsql2_b.="','".$values['L18_SIM_EXP_UNIT'];
  $insertsql_b.=",L18_SIM_STRP_NUM";
  $insertsql2_b.="','".$values['L18_SIM_STRP_NUM'];
  $insertsql_b.=",L18_SIM_STRP_TIME";
  $insertsql2_b.="','".$values['L18_SIM_STRP_TIME'];
  $insertsql_b.=",LINE18_GSM_IMEI";
  $insertsql2_b.="','".$values['LINE18_GSM_IMEI'];
  $insertsql_b.=",L18_GSM_PIN";
  $insertsql2_b.="','".$values['L18_GSM_PIN'];
  $insertsql_b.=",L18_GSM_PIN2";
  $insertsql2_b.="','".$values['L18_GSM_PIN2'];
  
   $insertsql_b.=",L19_SIM_EXP";
  $insertsql2_b.="','".$values['L19_SIM_EXP'];
  $insertsql_b.=",L19_SIM_CALL_LIMIT";
  $insertsql2_b.="','".$values['L19_SIM_CALL_LIMIT'];
  $insertsql_b.=",L19_SIM_EXP_UNIT";
  $insertsql2_b.="','".$values['L19_SIM_EXP_UNIT'];
  $insertsql_b.=",L19_SIM_STRP_NUM";
  $insertsql2_b.="','".$values['L19_SIM_STRP_NUM'];
  $insertsql_b.=",L19_SIM_STRP_TIME";
  $insertsql2_b.="','".$values['L19_SIM_STRP_TIME'];
  $insertsql_b.=",LINE19_GSM_IMEI";
  $insertsql2_b.="','".$values['LINE19_GSM_IMEI'];
  $insertsql_b.=",L19_GSM_PIN";
  $insertsql2_b.="','".$values['L19_GSM_PIN'];
  $insertsql_b.=",L19_GSM_PIN2";
  $insertsql2_b.="','".$values['L19_GSM_PIN2'];
  
   $insertsql_b.=",L20_SIM_EXP";
  $insertsql2_b.="','".$values['L20_SIM_EXP'];
  $insertsql_b.=",L20_SIM_CALL_LIMIT";
  $insertsql2_b.="','".$values['L20_SIM_CALL_LIMIT'];
  $insertsql_b.=",L20_SIM_EXP_UNIT";
  $insertsql2_b.="','".$values['L20_SIM_EXP_UNIT'];
  $insertsql_b.=",L20_SIM_STRP_NUM";
  $insertsql2_b.="','".$values['L20_SIM_STRP_NUM'];
  $insertsql_b.=",L20_SIM_STRP_TIME";
  $insertsql2_b.="','".$values['L20_SIM_STRP_TIME'];
  $insertsql_b.=",LINE20_GSM_IMEI";
  $insertsql2_b.="','".$values['LINE20_GSM_IMEI'];
  $insertsql_b.=",L20_GSM_PIN";
  $insertsql2_b.="','".$values['L20_GSM_PIN'];
  $insertsql_b.=",L20_GSM_PIN2";
  $insertsql2_b.="','".$values['L20_GSM_PIN2'];
  
   $insertsql_b.=",L21_SIM_EXP";
  $insertsql2_b.="','".$values['L21_SIM_EXP'];
  $insertsql_b.=",L21_SIM_CALL_LIMIT";
  $insertsql2_b.="','".$values['L21_SIM_CALL_LIMIT'];
  $insertsql_b.=",L21_SIM_EXP_UNIT";
  $insertsql2_b.="','".$values['L21_SIM_EXP_UNIT'];
  $insertsql_b.=",L21_SIM_STRP_NUM";
  $insertsql2_b.="','".$values['L21_SIM_STRP_NUM'];
  $insertsql_b.=",L21_SIM_STRP_TIME";
  $insertsql2_b.="','".$values['L21_SIM_STRP_TIME'];
  $insertsql_b.=",LINE21_GSM_IMEI";
  $insertsql2_b.="','".$values['LINE21_GSM_IMEI'];
  $insertsql_b.=",L21_GSM_PIN";
  $insertsql2_b.="','".$values['L21_GSM_PIN'];
  $insertsql_b.=",L21_GSM_PIN2";
  $insertsql2_b.="','".$values['L21_GSM_PIN2'];
  
   $insertsql_b.=",L22_SIM_EXP";
  $insertsql2_b.="','".$values['L22_SIM_EXP'];
  $insertsql_b.=",L22_SIM_CALL_LIMIT";
  $insertsql2_b.="','".$values['L22_SIM_CALL_LIMIT'];
  $insertsql_b.=",L22_SIM_EXP_UNIT";
  $insertsql2_b.="','".$values['L22_SIM_EXP_UNIT'];
  $insertsql_b.=",L22_SIM_STRP_NUM";
  $insertsql2_b.="','".$values['L22_SIM_STRP_NUM'];
  $insertsql_b.=",L22_SIM_STRP_TIME";
  $insertsql2_b.="','".$values['L22_SIM_STRP_TIME'];
  $insertsql_b.=",LINE22_GSM_IMEI";
  $insertsql2_b.="','".$values['LINE22_GSM_IMEI'];
  $insertsql_b.=",L22_GSM_PIN";
  $insertsql2_b.="','".$values['L22_GSM_PIN'];
  $insertsql_b.=",L22_GSM_PIN2";
  $insertsql2_b.="','".$values['L22_GSM_PIN2'];
  
   $insertsql_b.=",L23_SIM_EXP";
  $insertsql2_b.="','".$values['L23_SIM_EXP'];
  $insertsql_b.=",L23_SIM_CALL_LIMIT";
  $insertsql2_b.="','".$values['L23_SIM_CALL_LIMIT'];
  $insertsql_b.=",L23_SIM_EXP_UNIT";
  $insertsql2_b.="','".$values['L23_SIM_EXP_UNIT'];
  $insertsql_b.=",L23_SIM_STRP_NUM";
  $insertsql2_b.="','".$values['L23_SIM_STRP_NUM'];
  $insertsql_b.=",L23_SIM_STRP_TIME";
  $insertsql2_b.="','".$values['L23_SIM_STRP_TIME'];
  $insertsql_b.=",LINE23_GSM_IMEI";
  $insertsql2_b.="','".$values['LINE23_GSM_IMEI'];
  $insertsql_b.=",L23_GSM_PIN";
  $insertsql2_b.="','".$values['L23_GSM_PIN'];
  $insertsql_b.=",L23_GSM_PIN2";
  $insertsql2_b.="','".$values['L23_GSM_PIN2'];
  
   $insertsql_b.=",L24_SIM_EXP";
  $insertsql2_b.="','".$values['L24_SIM_EXP'];
  $insertsql_b.=",L24_SIM_CALL_LIMIT";
  $insertsql2_b.="','".$values['L24_SIM_CALL_LIMIT'];
  $insertsql_b.=",L24_SIM_EXP_UNIT";
  $insertsql2_b.="','".$values['L24_SIM_EXP_UNIT'];
  $insertsql_b.=",L24_SIM_STRP_NUM";
  $insertsql2_b.="','".$values['L24_SIM_STRP_NUM'];
  $insertsql_b.=",L24_SIM_STRP_TIME";
  $insertsql2_b.="','".$values['L24_SIM_STRP_TIME'];
  $insertsql_b.=",LINE24_GSM_IMEI";
  $insertsql2_b.="','".$values['LINE24_GSM_IMEI'];
  $insertsql_b.=",L24_GSM_PIN";
  $insertsql2_b.="','".$values['L24_GSM_PIN'];
  $insertsql_b.=",L24_GSM_PIN2";
  $insertsql2_b.="','".$values['L24_GSM_PIN2'];
  
   $insertsql_b.=",L25_SIM_EXP";
  $insertsql2_b.="','".$values['L25_SIM_EXP'];
  $insertsql_b.=",L25_SIM_CALL_LIMIT";
  $insertsql2_b.="','".$values['L25_SIM_CALL_LIMIT'];
  $insertsql_b.=",L25_SIM_EXP_UNIT";
  $insertsql2_b.="','".$values['L25_SIM_EXP_UNIT'];
  $insertsql_b.=",L25_SIM_STRP_NUM";
  $insertsql2_b.="','".$values['L25_SIM_STRP_NUM'];
  $insertsql_b.=",L25_SIM_STRP_TIME";
  $insertsql2_b.="','".$values['L25_SIM_STRP_TIME'];
  $insertsql_b.=",LINE25_GSM_IMEI";
  $insertsql2_b.="','".$values['LINE25_GSM_IMEI'];
  $insertsql_b.=",L25_GSM_PIN";
  $insertsql2_b.="','".$values['L25_GSM_PIN'];
  $insertsql_b.=",L25_GSM_PIN2";
  $insertsql2_b.="','".$values['L25_GSM_PIN2'];
  
   $insertsql_b.=",L26_SIM_EXP";
  $insertsql2_b.="','".$values['L26_SIM_EXP'];
  $insertsql_b.=",L26_SIM_CALL_LIMIT";
  $insertsql2_b.="','".$values['L26_SIM_CALL_LIMIT'];
  $insertsql_b.=",L26_SIM_EXP_UNIT";
  $insertsql2_b.="','".$values['L26_SIM_EXP_UNIT'];
  $insertsql_b.=",L26_SIM_STRP_NUM";
  $insertsql2_b.="','".$values['L26_SIM_STRP_NUM'];
  $insertsql_b.=",L26_SIM_STRP_TIME";
  $insertsql2_b.="','".$values['L26_SIM_STRP_TIME'];
  $insertsql_b.=",LINE26_GSM_IMEI";
  $insertsql2_b.="','".$values['LINE26_GSM_IMEI'];
  $insertsql_b.=",L26_GSM_PIN";
  $insertsql2_b.="','".$values['L26_GSM_PIN'];
  $insertsql_b.=",L26_GSM_PIN2";
  $insertsql2_b.="','".$values['L26_GSM_PIN2'];
  
   $insertsql_b.=",L27_SIM_EXP";
  $insertsql2_b.="','".$values['L27_SIM_EXP'];
  $insertsql_b.=",L27_SIM_CALL_LIMIT";
  $insertsql2_b.="','".$values['L27_SIM_CALL_LIMIT'];
  $insertsql_b.=",L27_SIM_EXP_UNIT";
  $insertsql2_b.="','".$values['L27_SIM_EXP_UNIT'];
  $insertsql_b.=",L27_SIM_STRP_NUM";
  $insertsql2_b.="','".$values['L27_SIM_STRP_NUM'];
  $insertsql_b.=",L27_SIM_STRP_TIME";
  $insertsql2_b.="','".$values['L27_SIM_STRP_TIME'];
  $insertsql_b.=",LINE27_GSM_IMEI";
  $insertsql2_b.="','".$values['LINE27_GSM_IMEI'];
  $insertsql_b.=",L27_GSM_PIN";
  $insertsql2_b.="','".$values['L27_GSM_PIN'];
  $insertsql_b.=",L27_GSM_PIN2";
  $insertsql2_b.="','".$values['L27_GSM_PIN2'];
  
   $insertsql_b.=",L28_SIM_EXP";
  $insertsql2_b.="','".$values['L28_SIM_EXP'];
  $insertsql_b.=",L28_SIM_CALL_LIMIT";
  $insertsql2_b.="','".$values['L28_SIM_CALL_LIMIT'];
  $insertsql_b.=",L28_SIM_EXP_UNIT";
  $insertsql2_b.="','".$values['L28_SIM_EXP_UNIT'];
  $insertsql_b.=",L28_SIM_STRP_NUM";
  $insertsql2_b.="','".$values['L28_SIM_STRP_NUM'];
  $insertsql_b.=",L28_SIM_STRP_TIME";
  $insertsql2_b.="','".$values['L28_SIM_STRP_TIME'];
  $insertsql_b.=",LINE28_GSM_IMEI";
  $insertsql2_b.="','".$values['LINE28_GSM_IMEI'];
  $insertsql_b.=",L28_GSM_PIN";
  $insertsql2_b.="','".$values['L28_GSM_PIN'];
  $insertsql_b.=",L28_GSM_PIN2";
  $insertsql2_b.="','".$values['L28_GSM_PIN2'];
  
   $insertsql_b.=",L29_SIM_EXP";
  $insertsql2_b.="','".$values['L29_SIM_EXP'];
  $insertsql_b.=",L29_SIM_CALL_LIMIT";
  $insertsql2_b.="','".$values['L29_SIM_CALL_LIMIT'];
  $insertsql_b.=",L29_SIM_EXP_UNIT";
  $insertsql2_b.="','".$values['L29_SIM_EXP_UNIT'];
  $insertsql_b.=",L29_SIM_STRP_NUM";
  $insertsql2_b.="','".$values['L29_SIM_STRP_NUM'];
  $insertsql_b.=",L29_SIM_STRP_TIME";
  $insertsql2_b.="','".$values['L29_SIM_STRP_TIME'];
  $insertsql_b.=",LINE29_GSM_IMEI";
  $insertsql2_b.="','".$values['LINE29_GSM_IMEI'];
  $insertsql_b.=",L29_GSM_PIN";
  $insertsql2_b.="','".$values['L29_GSM_PIN'];
  $insertsql_b.=",L29_GSM_PIN2";
  $insertsql2_b.="','".$values['L29_GSM_PIN2'];
  
   $insertsql_b.=",L30_SIM_EXP";
  $insertsql2_b.="','".$values['L30_SIM_EXP'];
  $insertsql_b.=",L30_SIM_CALL_LIMIT";
  $insertsql2_b.="','".$values['L30_SIM_CALL_LIMIT'];
  $insertsql_b.=",L30_SIM_EXP_UNIT";
  $insertsql2_b.="','".$values['L30_SIM_EXP_UNIT'];
  $insertsql_b.=",L30_SIM_STRP_NUM";
  $insertsql2_b.="','".$values['L30_SIM_STRP_NUM'];
  $insertsql_b.=",L30_SIM_STRP_TIME";
  $insertsql2_b.="','".$values['L30_SIM_STRP_TIME'];
  $insertsql_b.=",LINE30_GSM_IMEI";
  $insertsql2_b.="','".$values['LINE30_GSM_IMEI'];
  $insertsql_b.=",L30_GSM_PIN";
  $insertsql2_b.="','".$values['L30_GSM_PIN'];
  $insertsql_b.=",L30_GSM_PIN2";
  $insertsql2_b.="','".$values['L30_GSM_PIN2'];
  
   $insertsql_b.=",L31_SIM_EXP";
  $insertsql2_b.="','".$values['L31_SIM_EXP'];
  $insertsql_b.=",L31_SIM_CALL_LIMIT";
  $insertsql2_b.="','".$values['L31_SIM_CALL_LIMIT'];
  $insertsql_b.=",L31_SIM_EXP_UNIT";
  $insertsql2_b.="','".$values['L31_SIM_EXP_UNIT'];
  $insertsql_b.=",L31_SIM_STRP_NUM";
  $insertsql2_b.="','".$values['L31_SIM_STRP_NUM'];
  $insertsql_b.=",L31_SIM_STRP_TIME";
  $insertsql2_b.="','".$values['L31_SIM_STRP_TIME'];
  $insertsql_b.=",LINE31_GSM_IMEI";
  $insertsql2_b.="','".$values['LINE31_GSM_IMEI'];
  $insertsql_b.=",L31_GSM_PIN";
  $insertsql2_b.="','".$values['L31_GSM_PIN'];
  $insertsql_b.=",L31_GSM_PIN2";
  $insertsql2_b.="','".$values['L31_GSM_PIN2'];
  
   $insertsql_b.=",L32_SIM_EXP";
  $insertsql2_b.="','".$values['L32_SIM_EXP'];
  $insertsql_b.=",L32_SIM_CALL_LIMIT";
  $insertsql2_b.="','".$values['L32_SIM_CALL_LIMIT'];
  $insertsql_b.=",L32_SIM_EXP_UNIT";
  $insertsql2_b.="','".$values['L32_SIM_EXP_UNIT'];
  $insertsql_b.=",L32_SIM_STRP_NUM";
  $insertsql2_b.="','".$values['L32_SIM_STRP_NUM'];
  $insertsql_b.=",L32_SIM_STRP_TIME";
  $insertsql2_b.="','".$values['L32_SIM_STRP_TIME'];
  $insertsql_b.=",LINE32_GSM_IMEI";
  $insertsql2_b.="','".$values['LINE32_GSM_IMEI'];
  $insertsql_b.=",L32_GSM_PIN";
  $insertsql2_b.="','".$values['L32_GSM_PIN'];
  $insertsql_b.=",L32_GSM_PIN2";
  $insertsql2_b.="','".$values['L32_GSM_PIN2'];


?>