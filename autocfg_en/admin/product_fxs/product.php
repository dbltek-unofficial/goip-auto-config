<?php 

  $values['ENDPOINT_TYPE'] = $_POST['endpoint_type'] ;
  $updatesql.=",ENDPOINT_TYPE='".$values['ENDPOINT_TYPE']."'";
  
  $values['orderid'] = $_POST['muban_orderid'] ;
  $updatesql.=",orderid='".$values['orderid']."'";
    
if($values['ENDPOINT_TYPE'] == 'H323'):
  $values['H323_ENDPOINT_MODE'] = $_POST['h323_endpoint_mode'] ;
  $updatesql.=",H323_ENDPOINT_MODE='".$values['H323_ENDPOINT_MODE']."'";
if($values['H323_ENDPOINT_MODE'] == 'DIRECT_MODE'):
  $values['H323_LOCAL_NUMBER'] = $_POST['h323_local_number'] ;
  $updatesql.=",H323_LOCAL_NUMBER='".$values['H323_LOCAL_NUMBER']."'";
  $values['H323_LOCAL_NAME'] = $_POST['h323_local_name'] ;
  $updatesql.=",H323_LOCAL_NAME='".$values['H323_LOCAL_NAME']."'";
  $values['H323_LOCAL_ID'] = $_POST['h323_local_id'] ;
  $updatesql.=",H323_LOCAL_ID='".$values['H323_LOCAL_ID']."'";
  $values['H323_DEFAULT_GATEWAY'] = $_POST['h323_default_gw'] ;
  $updatesql.=",H323_DEFAULT_GATEWAY='".$values['H323_DEFAULT_GATEWAY']."'";
endif; 
if($values['H323_ENDPOINT_MODE'] == 'GK_MODE'):
  $values['H323_CONFIG_MODE'] = $_POST['h323_config_mode'] ;
  $updatesql.=",H323_CONFIG_MODE='".$values['H323_CONFIG_MODE']."'";
if($values['H323_CONFIG_MODE'] == 'SINGLE_MODE'):
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
  $values['H323_PREFIX'] = $_POST['h323_prefix'] ;
  $updatesql.=",H323_PREFIX='".$values['H323_PREFIX']."'";
endif; 
if($values['TELPORT']> 1): 
endif; 
if($values['H323_CONFIG_MODE'] == 'LINE_MODE'):
  $values['H323_LINE1_NUMBER'] = $_POST['line1_h323_phone_num'] ;
  $updatesql.=",H323_LINE1_NUMBER='".$values['H323_LINE1_NUMBER']."'";
  $values['H323_LINE1_H323_ID'] = $_POST['line1_h323_id'] ;
  $updatesql.=",H323_LINE1_H323_ID='".$values['H323_LINE1_H323_ID']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_LINE1_GKADDR'] = $_POST['line1_gk_addr'] ;
  $updatesql.=",H323_LINE1_GKADDR='".$values['H323_LINE1_GKADDR']."'";
endif; 
  $values['H323_LINE1_VOS_ENABLE'] = $_POST['line1_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_LINE1_VOS_ENABLE='".$values['H323_LINE1_VOS_ENABLE']."'";
if($values['H323_LINE1_VOS_ENABLE'] == 1):
  $values['H323_LINE1_VOS_MODE'] = $_POST['line1_vos_mod'] ;
  $updatesql.=",H323_LINE1_VOS_MODE='".$values['H323_LINE1_VOS_MODE']."'";
endif; 
  $values['H323_LINE1_AUTH'] = $_POST['line1_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_LINE1_AUTH='".$values['H323_LINE1_AUTH']."'";
if($values['H323_LINE1_AUTH'] == 1):
  $values['H323_LINE1_H235_ID'] = $_POST['line1_h235_id'] ;
  $updatesql.=",H323_LINE1_H235_ID='".$values['H323_LINE1_H235_ID']."'";
  $values['H323_LINE1_H235_PASSWD'] = $_POST['line1_h235_passwd'] ;
  $updatesql.=",H323_LINE1_H235_PASSWD='".$values['H323_LINE1_H235_PASSWD']."'";
endif; 
  $values['H323_PREFIX_0'] = $_POST['h323_line1_prefix'] ;
  $updatesql.=",H323_PREFIX_0='".$values['H323_PREFIX_0']."'";
if($values['TELPORT']>=2): 
endif; 
  $values['H323_LINE2_NUMBER'] = $_POST['line2_h323_phone_num'] ;
  $updatesql.=",H323_LINE2_NUMBER='".$values['H323_LINE2_NUMBER']."'";
  $values['H323_LINE2_H323_ID'] = $_POST['line2_h323_id'] ;
  $updatesql.=",H323_LINE2_H323_ID='".$values['H323_LINE2_H323_ID']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_LINE2_GKADDR'] = $_POST['line2_gk_addr'] ;
  $updatesql.=",H323_LINE2_GKADDR='".$values['H323_LINE2_GKADDR']."'";
endif; 
  $values['H323_LINE2_VOS_ENABLE'] = $_POST['line2_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_LINE2_VOS_ENABLE='".$values['H323_LINE2_VOS_ENABLE']."'";
if($values['H323_LINE2_VOS_ENABLE'] == 1):
  $values['H323_LINE2_VOS_MODE'] = $_POST['line2_vos_mod'] ;
  $updatesql.=",H323_LINE2_VOS_MODE='".$values['H323_LINE2_VOS_MODE']."'";
endif; 
  $values['H323_LINE2_AUTH'] = $_POST['line2_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_LINE2_AUTH='".$values['H323_LINE2_AUTH']."'";
if($values['H323_LINE2_AUTH'] == 1):
  $values['H323_LINE2_H235_ID'] = $_POST['line2_h235_id'] ;
  $updatesql.=",H323_LINE2_H235_ID='".$values['H323_LINE2_H235_ID']."'";
  $values['H323_LINE2_H235_PASSWD'] = $_POST['line2_h235_passwd'] ;
  $updatesql.=",H323_LINE2_H235_PASSWD='".$values['H323_LINE2_H235_PASSWD']."'";
endif; 
  $values['H323_PREFIX_1'] = $_POST['h323_line2_prefix'] ;
  $updatesql.=",H323_PREFIX_1='".$values['H323_PREFIX_1']."'";
if($values['TELPORT']>=3): 
endif; 
  $values['H323_LINE3_NUMBER'] = $_POST['line3_h323_phone_num'] ;
  $updatesql.=",H323_LINE3_NUMBER='".$values['H323_LINE3_NUMBER']."'";
  $values['H323_LINE3_H323_ID'] = $_POST['line3_h323_id'] ;
  $updatesql.=",H323_LINE3_H323_ID='".$values['H323_LINE3_H323_ID']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_LINE3_GKADDR'] = $_POST['line3_gk_addr'] ;
  $updatesql.=",H323_LINE3_GKADDR='".$values['H323_LINE3_GKADDR']."'";
endif; 
  $values['H323_LINE3_VOS_ENABLE'] = $_POST['line3_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_LINE3_VOS_ENABLE='".$values['H323_LINE3_VOS_ENABLE']."'";
if($values['H323_LINE3_VOS_ENABLE'] == 1):
  $values['H323_LINE3_VOS_MODE'] = $_POST['line3_vos_mod'] ;
  $updatesql.=",H323_LINE3_VOS_MODE='".$values['H323_LINE3_VOS_MODE']."'";
endif; 
  $values['H323_LINE3_AUTH'] = $_POST['line3_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_LINE3_AUTH='".$values['H323_LINE3_AUTH']."'";
if($values['H323_LINE3_AUTH'] == 1):
  $values['H323_LINE3_H235_ID'] = $_POST['line3_h235_id'] ;
  $updatesql.=",H323_LINE3_H235_ID='".$values['H323_LINE3_H235_ID']."'";
  $values['H323_LINE3_H235_PASSWD'] = $_POST['line3_h235_passwd'] ;
  $updatesql.=",H323_LINE3_H235_PASSWD='".$values['H323_LINE3_H235_PASSWD']."'";
endif; 
  $values['H323_PREFIX_2'] = $_POST['h323_line3_prefix'] ;
  $updatesql.=",H323_PREFIX_2='".$values['H323_PREFIX_2']."'";
if($values['TELPORT']>=4): 
endif; 
  $values['H323_LINE4_NUMBER'] = $_POST['line4_h323_phone_num'] ;
  $updatesql.=",H323_LINE4_NUMBER='".$values['H323_LINE4_NUMBER']."'";
  $values['H323_LINE4_H323_ID'] = $_POST['line4_h323_id'] ;
  $updatesql.=",H323_LINE4_H323_ID='".$values['H323_LINE4_H323_ID']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_LINE4_GKADDR'] = $_POST['line4_gk_addr'] ;
  $updatesql.=",H323_LINE4_GKADDR='".$values['H323_LINE4_GKADDR']."'";
endif; 
  $values['H323_LINE4_VOS_ENABLE'] = $_POST['line4_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_LINE4_VOS_ENABLE='".$values['H323_LINE4_VOS_ENABLE']."'";
if($values['H323_LINE4_VOS_ENABLE'] == 1):
  $values['H323_LINE4_VOS_MODE'] = $_POST['line4_vos_mod'] ;
  $updatesql.=",H323_LINE4_VOS_MODE='".$values['H323_LINE4_VOS_MODE']."'";
endif; 
  $values['H323_LINE4_AUTH'] = $_POST['line4_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_LINE4_AUTH='".$values['H323_LINE4_AUTH']."'";
if($values['H323_LINE4_AUTH'] == 1):
  $values['H323_LINE4_H235_ID'] = $_POST['line4_h235_id'] ;
  $updatesql.=",H323_LINE4_H235_ID='".$values['H323_LINE4_H235_ID']."'";
  $values['H323_LINE4_H235_PASSWD'] = $_POST['line4_h235_passwd'] ;
  $updatesql.=",H323_LINE4_H235_PASSWD='".$values['H323_LINE4_H235_PASSWD']."'";
endif; 
  $values['H323_PREFIX_3'] = $_POST['h323_line4_prefix'] ;
  $updatesql.=",H323_PREFIX_3='".$values['H323_PREFIX_3']."'";
if($values['TELPORT']>=5): 
endif; 
  $values['H323_LINE5_NUMBER'] = $_POST['line5_h323_phone_num'] ;
  $updatesql.=",H323_LINE5_NUMBER='".$values['H323_LINE5_NUMBER']."'";
  $values['H323_LINE5_H323_ID'] = $_POST['line5_h323_id'] ;
  $updatesql.=",H323_LINE5_H323_ID='".$values['H323_LINE5_H323_ID']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_LINE5_GKADDR'] = $_POST['line5_gk_addr'] ;
  $updatesql.=",H323_LINE5_GKADDR='".$values['H323_LINE5_GKADDR']."'";
endif; 
  $values['H323_LINE5_VOS_ENABLE'] = $_POST['line5_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_LINE5_VOS_ENABLE='".$values['H323_LINE5_VOS_ENABLE']."'";
if($values['H323_LINE5_VOS_ENABLE'] == 1):
  $values['H323_LINE5_VOS_MODE'] = $_POST['line5_vos_mod'] ;
  $updatesql.=",H323_LINE5_VOS_MODE='".$values['H323_LINE5_VOS_MODE']."'";
endif; 
  $values['H323_LINE5_AUTH'] = $_POST['line5_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_LINE5_AUTH='".$values['H323_LINE5_AUTH']."'";
if($values['H323_LINE5_AUTH'] == 1):
  $values['H323_LINE5_H235_ID'] = $_POST['line5_h235_id'] ;
  $updatesql.=",H323_LINE5_H235_ID='".$values['H323_LINE5_H235_ID']."'";
  $values['H323_LINE5_H235_PASSWD'] = $_POST['line5_h235_passwd'] ;
  $updatesql.=",H323_LINE5_H235_PASSWD='".$values['H323_LINE5_H235_PASSWD']."'";
endif; 
  $values['H323_PREFIX_4'] = $_POST['h323_line5_prefix'] ;
  $updatesql.=",H323_PREFIX_4='".$values['H323_PREFIX_4']."'";
if($values['TELPORT']>=6): 
endif; 
  $values['H323_LINE6_NUMBER'] = $_POST['line6_h323_phone_num'] ;
  $updatesql.=",H323_LINE6_NUMBER='".$values['H323_LINE6_NUMBER']."'";
  $values['H323_LINE6_H323_ID'] = $_POST['line6_h323_id'] ;
  $updatesql.=",H323_LINE6_H323_ID='".$values['H323_LINE6_H323_ID']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_LINE6_GKADDR'] = $_POST['line6_gk_addr'] ;
  $updatesql.=",H323_LINE6_GKADDR='".$values['H323_LINE6_GKADDR']."'";
endif; 
  $values['H323_LINE6_VOS_ENABLE'] = $_POST['line6_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_LINE6_VOS_ENABLE='".$values['H323_LINE6_VOS_ENABLE']."'";
if($values['H323_LINE6_VOS_ENABLE'] == 1):
  $values['H323_LINE6_VOS_MODE'] = $_POST['line6_vos_mod'] ;
  $updatesql.=",H323_LINE6_VOS_MODE='".$values['H323_LINE6_VOS_MODE']."'";
endif; 
  $values['H323_LINE6_AUTH'] = $_POST['line6_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_LINE6_AUTH='".$values['H323_LINE6_AUTH']."'";
if($values['H323_LINE6_AUTH'] == 1):
  $values['H323_LINE6_H235_ID'] = $_POST['line6_h235_id'] ;
  $updatesql.=",H323_LINE6_H235_ID='".$values['H323_LINE6_H235_ID']."'";
  $values['H323_LINE6_H235_PASSWD'] = $_POST['line6_h235_passwd'] ;
  $updatesql.=",H323_LINE6_H235_PASSWD='".$values['H323_LINE6_H235_PASSWD']."'";
endif; 
  $values['H323_PREFIX_5'] = $_POST['h323_line6_prefix'] ;
  $updatesql.=",H323_PREFIX_5='".$values['H323_PREFIX_5']."'";
if($values['TELPORT']>=7): 
endif; 
  $values['H323_LINE7_NUMBER'] = $_POST['line7_h323_phone_num'] ;
  $updatesql.=",H323_LINE7_NUMBER='".$values['H323_LINE7_NUMBER']."'";
  $values['H323_LINE7_H323_ID'] = $_POST['line7_h323_id'] ;
  $updatesql.=",H323_LINE7_H323_ID='".$values['H323_LINE7_H323_ID']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_LINE7_GKADDR'] = $_POST['line7_gk_addr'] ;
  $updatesql.=",H323_LINE7_GKADDR='".$values['H323_LINE7_GKADDR']."'";
endif; 
  $values['H323_LINE7_VOS_ENABLE'] = $_POST['line7_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_LINE7_VOS_ENABLE='".$values['H323_LINE7_VOS_ENABLE']."'";
if($values['H323_LINE7_VOS_ENABLE'] == 1):
  $values['H323_LINE7_VOS_MODE'] = $_POST['line7_vos_mod'] ;
  $updatesql.=",H323_LINE7_VOS_MODE='".$values['H323_LINE7_VOS_MODE']."'";
endif; 
  $values['H323_LINE7_AUTH'] = $_POST['line7_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_LINE7_AUTH='".$values['H323_LINE7_AUTH']."'";
if($values['H323_LINE7_AUTH'] == 1):
  $values['H323_LINE7_H235_ID'] = $_POST['line7_h235_id'] ;
  $updatesql.=",H323_LINE7_H235_ID='".$values['H323_LINE7_H235_ID']."'";
  $values['H323_LINE7_H235_PASSWD'] = $_POST['line7_h235_passwd'] ;
  $updatesql.=",H323_LINE7_H235_PASSWD='".$values['H323_LINE7_H235_PASSWD']."'";
endif; 
  $values['H323_PREFIX_6'] = $_POST['h323_line7_prefix'] ;
  $updatesql.=",H323_PREFIX_6='".$values['H323_PREFIX_6']."'";
if($values['TELPORT']>=8): 
endif; 
  $values['H323_LINE8_NUMBER'] = $_POST['line8_h323_phone_num'] ;
  $updatesql.=",H323_LINE8_NUMBER='".$values['H323_LINE8_NUMBER']."'";
  $values['H323_LINE8_H323_ID'] = $_POST['line8_h323_id'] ;
  $updatesql.=",H323_LINE8_H323_ID='".$values['H323_LINE8_H323_ID']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_LINE8_GKADDR'] = $_POST['line8_gk_addr'] ;
  $updatesql.=",H323_LINE8_GKADDR='".$values['H323_LINE8_GKADDR']."'";
endif; 
  $values['H323_LINE8_VOS_ENABLE'] = $_POST['line8_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_LINE8_VOS_ENABLE='".$values['H323_LINE8_VOS_ENABLE']."'";
if($values['H323_LINE8_VOS_ENABLE'] == 1):
  $values['H323_LINE8_VOS_MODE'] = $_POST['line8_vos_mod'] ;
  $updatesql.=",H323_LINE8_VOS_MODE='".$values['H323_LINE8_VOS_MODE']."'";
endif; 
  $values['H323_LINE8_AUTH'] = $_POST['line8_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_LINE8_AUTH='".$values['H323_LINE8_AUTH']."'";
if($values['H323_LINE8_AUTH'] == 1):
  $values['H323_LINE8_H235_ID'] = $_POST['line8_h235_id'] ;
  $updatesql.=",H323_LINE8_H235_ID='".$values['H323_LINE8_H235_ID']."'";
  $values['H323_LINE8_H235_PASSWD'] = $_POST['line8_h235_passwd'] ;
  $updatesql.=",H323_LINE8_H235_PASSWD='".$values['H323_LINE8_H235_PASSWD']."'";
endif; 
  $values['H323_PREFIX_7'] = $_POST['h323_line8_prefix'] ;
  $updatesql.=",H323_PREFIX_7='".$values['H323_PREFIX_7']."'";
endif; 
endif; 
endif; 
if($values['ENDPOINT_TYPE'] == 'SIP'):
if($values['TELPORT'] == 1): 
  $values['SIP_PHONE_NUMBER'] = $_POST['sip_phone_number'] ;
  $updatesql.=",SIP_PHONE_NUMBER='".$values['SIP_PHONE_NUMBER']."'";
  $values['SIP_PHONE_NUMBER_2'] = $_POST['sip_phone_number2'] ;
  $updatesql.=",SIP_PHONE_NUMBER_2='".$values['SIP_PHONE_NUMBER_2']."'";
  $values['SIP_DISPLAY_NAME'] = $_POST['sip_display_name'] ;
  $updatesql.=",SIP_DISPLAY_NAME='".$values['SIP_DISPLAY_NAME']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_PROXY'] = $_POST['sip_proxy'] ;
  $updatesql.=",SIP_PROXY='".$values['SIP_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_REGISTRAR'] = $_POST['sip_registrar'] ;
  $updatesql.=",SIP_REGISTRAR='".$values['SIP_REGISTRAR']."'";
endif; 
  $values['SIP_REGISTER_EXPIRED'] = $_POST['sip_register_expired'] ;
  $updatesql.=",SIP_REGISTER_EXPIRED='".$values['SIP_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_OUTBOUND_PROXY'] = $_POST['sip_outbound_proxy'] ;
  $updatesql.=",SIP_OUTBOUND_PROXY='".$values['SIP_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_HOME_DOMAIN'] = $_POST['sip_home_domain'] ;
  $updatesql.=",SIP_HOME_DOMAIN='".$values['SIP_HOME_DOMAIN']."'";
  $values['SIP_AUTH_ID'] = $_POST['sip_auth_id'] ;
  $updatesql.=",SIP_AUTH_ID='".$values['SIP_AUTH_ID']."'";
  $values['SIP_AUTH_PASSWD'] = $_POST['sip_auth_passwd'] ;
  $updatesql.=",SIP_AUTH_PASSWD='".$values['SIP_AUTH_PASSWD']."'";
  $values['SIP_PREFIX'] = $_POST['sip_prefix'] ;
  $updatesql.=",SIP_PREFIX='".$values['SIP_PREFIX']."'";
  $values['SIP_FORWARD_TYPE'] = $_POST['sip_fwd_type'] ;
  $updatesql.=",SIP_FORWARD_TYPE='".$values['SIP_FORWARD_TYPE']."'";
  $values['SIP_FORWARD_NUMBER'] = $_POST['sip_fwd_num'] ;
  $updatesql.=",SIP_FORWARD_NUMBER='".$values['SIP_FORWARD_NUMBER']."'";
  $values['SIP_SMODE_USE_BSVR'] = $_POST['sip_backup_server']=='on'?'1':'0';
  $updatesql.=",SIP_SMODE_USE_BSVR='".$values['SIP_SMODE_USE_BSVR']."'";
if($values['SIP_SMODE_USE_BSVR'] == 1):
  $values['SIP_BACKUP_PROXY'] = $_POST['sip_backup_proxy'] ;
  $updatesql.=",SIP_BACKUP_PROXY='".$values['SIP_BACKUP_PROXY']."'";
  $values['SIP_BACKUP_REGISTRAR'] = $_POST['sip_backup_registrar'] ;
  $updatesql.=",SIP_BACKUP_REGISTRAR='".$values['SIP_BACKUP_REGISTRAR']."'";
  $values['SIP_BACKUP_HOME_DOMAIN'] = $_POST['sip_backup_home_domain'] ;
  $updatesql.=",SIP_BACKUP_HOME_DOMAIN='".$values['SIP_BACKUP_HOME_DOMAIN']."'";
endif; 
endif; 
if($values['TELPORT']> 1): 
  $values['SIP_CONFIG_MODE'] = $_POST['sip_config_mode'] ;
  $updatesql.=",SIP_CONFIG_MODE='".$values['SIP_CONFIG_MODE']."'";
endif; 
if($values['SIP_CONFIG_MODE'] == 'SINGLE_MODE'):
  $values['SIP_PHONE_NUMBER'] = $_POST['sip_phone_number'] ;
  $updatesql.=",SIP_PHONE_NUMBER='".$values['SIP_PHONE_NUMBER']."'";
  $values['SIP_PHONE_NUMBER_2'] = $_POST['sip_phone_number2'] ;
  $updatesql.=",SIP_PHONE_NUMBER_2='".$values['SIP_PHONE_NUMBER_2']."'";
  $values['SIP_DISPLAY_NAME'] = $_POST['sip_display_name'] ;
  $updatesql.=",SIP_DISPLAY_NAME='".$values['SIP_DISPLAY_NAME']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_PROXY'] = $_POST['sip_proxy'] ;
  $updatesql.=",SIP_PROXY='".$values['SIP_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_REGISTRAR'] = $_POST['sip_registrar'] ;
  $updatesql.=",SIP_REGISTRAR='".$values['SIP_REGISTRAR']."'";
endif; 
  $values['SIP_REGISTER_EXPIRED'] = $_POST['sip_register_expired'] ;
  $updatesql.=",SIP_REGISTER_EXPIRED='".$values['SIP_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_OUTBOUND_PROXY'] = $_POST['sip_outbound_proxy'] ;
  $updatesql.=",SIP_OUTBOUND_PROXY='".$values['SIP_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_HOME_DOMAIN'] = $_POST['sip_home_domain'] ;
  $updatesql.=",SIP_HOME_DOMAIN='".$values['SIP_HOME_DOMAIN']."'";
  $values['SIP_AUTH_ID'] = $_POST['sip_auth_id'] ;
  $updatesql.=",SIP_AUTH_ID='".$values['SIP_AUTH_ID']."'";
  $values['SIP_AUTH_PASSWD'] = $_POST['sip_auth_passwd'] ;
  $updatesql.=",SIP_AUTH_PASSWD='".$values['SIP_AUTH_PASSWD']."'";
  $values['SIP_PREFIX'] = $_POST['sip_prefix'] ;
  $updatesql.=",SIP_PREFIX='".$values['SIP_PREFIX']."'";
  $values['SIP_FORWARD_TYPE'] = $_POST['sip_fwd_type'] ;
  $updatesql.=",SIP_FORWARD_TYPE='".$values['SIP_FORWARD_TYPE']."'";
  $values['SIP_FORWARD_NUMBER'] = $_POST['sip_fwd_num'] ;
  $updatesql.=",SIP_FORWARD_NUMBER='".$values['SIP_FORWARD_NUMBER']."'";
  $values['SIP_SMODE_USE_BSVR'] = $_POST['sip_backup_server']=='on'?'1':'0';
  $updatesql.=",SIP_SMODE_USE_BSVR='".$values['SIP_SMODE_USE_BSVR']."'";
if($values['SIP_SMODE_USE_BSVR'] == 1):
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_BACKUP_PROXY'] = $_POST['sip_backup_proxy'] ;
  $updatesql.=",SIP_BACKUP_PROXY='".$values['SIP_BACKUP_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_BACKUP_REGISTRAR'] = $_POST['sip_backup_registrar'] ;
  $updatesql.=",SIP_BACKUP_REGISTRAR='".$values['SIP_BACKUP_REGISTRAR']."'";
endif; 
  $values['SIP_BACKUP_HOME_DOMAIN'] = $_POST['sip_backup_home_domain'] ;
  $updatesql.=",SIP_BACKUP_HOME_DOMAIN='".$values['SIP_BACKUP_HOME_DOMAIN']."'";
endif; 
endif; 
if($values['TELPORT']> 1): 
endif; 
if($values['SIP_CONFIG_MODE'] == 'LINE_MODE'):
  $values['SIP_CONTACT0_DIAL_DIGITS'] = $_POST['sip_line1_number'] ;
  $updatesql.=",SIP_CONTACT0_DIAL_DIGITS='".$values['SIP_CONTACT0_DIAL_DIGITS']."'";
  $values['SIP_CONTACT0_DIAL_DIGITS_2'] = $_POST['sip_line1_number2'] ;
  $updatesql.=",SIP_CONTACT0_DIAL_DIGITS_2='".$values['SIP_CONTACT0_DIAL_DIGITS_2']."'";
  $values['SIP_CONTACT0_DISPLAY_NAME'] = $_POST['sip_line1_display_name'] ;
  $updatesql.=",SIP_CONTACT0_DISPLAY_NAME='".$values['SIP_CONTACT0_DISPLAY_NAME']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT0_PROXY'] = $_POST['sip_line1_proxy'] ;
  $updatesql.=",SIP_CONTACT0_PROXY='".$values['SIP_CONTACT0_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT0_SERVER'] = $_POST['sip_line1_registrar'] ;
  $updatesql.=",SIP_CONTACT0_SERVER='".$values['SIP_CONTACT0_SERVER']."'";
endif; 
  $values['SIP_CONTACT0_REGISTER_EXPIRED'] = $_POST['sip_line1_register_expired'] ;
  $updatesql.=",SIP_CONTACT0_REGISTER_EXPIRED='".$values['SIP_CONTACT0_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT0_OUTBOUND_PROXY'] = $_POST['sip_line1_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT0_OUTBOUND_PROXY='".$values['SIP_CONTACT0_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT0_HOME_DOMAIN'] = $_POST['sip_line1_home_domain'] ;
  $updatesql.=",SIP_CONTACT0_HOME_DOMAIN='".$values['SIP_CONTACT0_HOME_DOMAIN']."'";
  $values['SIP_CONTACT0_LOGIN'] = $_POST['sip_line1_auth_id'] ;
  $updatesql.=",SIP_CONTACT0_LOGIN='".$values['SIP_CONTACT0_LOGIN']."'";
  $values['SIP_CONTACT0_PASSWD'] = $_POST['sip_line1_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT0_PASSWD='".$values['SIP_CONTACT0_PASSWD']."'";
  $values['SIP_PREFIX_0'] = $_POST['sip_line1_prefix'] ;
  $updatesql.=",SIP_PREFIX_0='".$values['SIP_PREFIX_0']."'";
  $values['SIP_CONTACT0_FORWARD_TYPE'] = $_POST['sip_line1_fwd_type'] ;
  $updatesql.=",SIP_CONTACT0_FORWARD_TYPE='".$values['SIP_CONTACT0_FORWARD_TYPE']."'";
  $values['SIP_CONTACT0_FORWARD_NUMBER'] = $_POST['sip_line1_fwd_num'] ;
  $updatesql.=",SIP_CONTACT0_FORWARD_NUMBER='".$values['SIP_CONTACT0_FORWARD_NUMBER']."'";
  $values['SIP_LINE0_USE_BSVR'] = $_POST['sip_line1_backup_server']=='on'?'1':'0';
  $updatesql.=",SIP_LINE0_USE_BSVR='".$values['SIP_LINE0_USE_BSVR']."'";
if($values['SIP_LINE0_USE_BSVR'] == 1):
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT10_PROXY'] = $_POST['sip_line1_backup_proxy'] ;
  $updatesql.=",SIP_CONTACT10_PROXY='".$values['SIP_CONTACT10_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT10_SERVER'] = $_POST['sip_line1_backup_registrar'] ;
  $updatesql.=",SIP_CONTACT10_SERVER='".$values['SIP_CONTACT10_SERVER']."'";
endif; 
  $values['SIP_CONTACT10_HOME_DOMAIN'] = $_POST['sip_line1_backup_home_domain'] ;
  $updatesql.=",SIP_CONTACT10_HOME_DOMAIN='".$values['SIP_CONTACT10_HOME_DOMAIN']."'";
endif; 
if($values['TELPORT']>=2): 
endif; 
  $values['SIP_CONTACT1_DIAL_DIGITS'] = $_POST['sip_line2_number'] ;
  $updatesql.=",SIP_CONTACT1_DIAL_DIGITS='".$values['SIP_CONTACT1_DIAL_DIGITS']."'";
  $values['SIP_CONTACT1_DIAL_DIGITS_2'] = $_POST['sip_line2_number2'] ;
  $updatesql.=",SIP_CONTACT1_DIAL_DIGITS_2='".$values['SIP_CONTACT1_DIAL_DIGITS_2']."'";
  $values['SIP_CONTACT1_DISPLAY_NAME'] = $_POST['sip_line2_display_name'] ;
  $updatesql.=",SIP_CONTACT1_DISPLAY_NAME='".$values['SIP_CONTACT1_DISPLAY_NAME']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT1_PROXY'] = $_POST['sip_line2_proxy'] ;
  $updatesql.=",SIP_CONTACT1_PROXY='".$values['SIP_CONTACT1_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT1_SERVER'] = $_POST['sip_line2_registrar'] ;
  $updatesql.=",SIP_CONTACT1_SERVER='".$values['SIP_CONTACT1_SERVER']."'";
endif; 
  $values['SIP_CONTACT1_REGISTER_EXPIRED'] = $_POST['sip_line2_register_expired'] ;
  $updatesql.=",SIP_CONTACT1_REGISTER_EXPIRED='".$values['SIP_CONTACT1_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT1_OUTBOUND_PROXY'] = $_POST['sip_line2_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT1_OUTBOUND_PROXY='".$values['SIP_CONTACT1_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT1_HOME_DOMAIN'] = $_POST['sip_line2_home_domain'] ;
  $updatesql.=",SIP_CONTACT1_HOME_DOMAIN='".$values['SIP_CONTACT1_HOME_DOMAIN']."'";
  $values['SIP_CONTACT1_LOGIN'] = $_POST['sip_line2_auth_id'] ;
  $updatesql.=",SIP_CONTACT1_LOGIN='".$values['SIP_CONTACT1_LOGIN']."'";
  $values['SIP_CONTACT1_PASSWD'] = $_POST['sip_line2_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT1_PASSWD='".$values['SIP_CONTACT1_PASSWD']."'";
  $values['SIP_PREFIX_1'] = $_POST['sip_line2_prefix'] ;
  $updatesql.=",SIP_PREFIX_1='".$values['SIP_PREFIX_1']."'";
  $values['SIP_CONTACT1_FORWARD_TYPE'] = $_POST['sip_line2_fwd_type'] ;
  $updatesql.=",SIP_CONTACT1_FORWARD_TYPE='".$values['SIP_CONTACT1_FORWARD_TYPE']."'";
  $values['SIP_CONTACT1_FORWARD_NUMBER'] = $_POST['sip_line2_fwd_num'] ;
  $updatesql.=",SIP_CONTACT1_FORWARD_NUMBER='".$values['SIP_CONTACT1_FORWARD_NUMBER']."'";
  $values['SIP_LINE1_USE_BSVR'] = $_POST['sip_line2_backup_server']=='on'?'1':'0';
  $updatesql.=",SIP_LINE1_USE_BSVR='".$values['SIP_LINE1_USE_BSVR']."'";
if($values['SIP_LINE1_USE_BSVR'] == 1):
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT11_PROXY'] = $_POST['sip_line2_backup_proxy'] ;
  $updatesql.=",SIP_CONTACT11_PROXY='".$values['SIP_CONTACT11_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT11_SERVER'] = $_POST['sip_line2_backup_registrar'] ;
  $updatesql.=",SIP_CONTACT11_SERVER='".$values['SIP_CONTACT11_SERVER']."'";
endif; 
  $values['SIP_CONTACT11_HOME_DOMAIN'] = $_POST['sip_line2_backup_home_domain'] ;
  $updatesql.=",SIP_CONTACT11_HOME_DOMAIN='".$values['SIP_CONTACT11_HOME_DOMAIN']."'";
endif; 
if($values['TELPORT']>=3): 
endif; 
  $values['SIP_CONTACT2_DIAL_DIGITS'] = $_POST['sip_line3_number'] ;
  $updatesql.=",SIP_CONTACT2_DIAL_DIGITS='".$values['SIP_CONTACT2_DIAL_DIGITS']."'";
  $values['SIP_CONTACT2_DIAL_DIGITS_2'] = $_POST['sip_line3_number2'] ;
  $updatesql.=",SIP_CONTACT2_DIAL_DIGITS_2='".$values['SIP_CONTACT2_DIAL_DIGITS_2']."'";
  $values['SIP_CONTACT2_DISPLAY_NAME'] = $_POST['sip_line3_display_name'] ;
  $updatesql.=",SIP_CONTACT2_DISPLAY_NAME='".$values['SIP_CONTACT2_DISPLAY_NAME']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT2_PROXY'] = $_POST['sip_line3_proxy'] ;
  $updatesql.=",SIP_CONTACT2_PROXY='".$values['SIP_CONTACT2_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT2_SERVER'] = $_POST['sip_line3_registrar'] ;
  $updatesql.=",SIP_CONTACT2_SERVER='".$values['SIP_CONTACT2_SERVER']."'";
endif; 
  $values['SIP_CONTACT2_REGISTER_EXPIRED'] = $_POST['sip_line3_register_expired'] ;
  $updatesql.=",SIP_CONTACT2_REGISTER_EXPIRED='".$values['SIP_CONTACT2_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT2_OUTBOUND_PROXY'] = $_POST['sip_line3_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT2_OUTBOUND_PROXY='".$values['SIP_CONTACT2_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT2_HOME_DOMAIN'] = $_POST['sip_line3_home_domain'] ;
  $updatesql.=",SIP_CONTACT2_HOME_DOMAIN='".$values['SIP_CONTACT2_HOME_DOMAIN']."'";
  $values['SIP_CONTACT2_LOGIN'] = $_POST['sip_line3_auth_id'] ;
  $updatesql.=",SIP_CONTACT2_LOGIN='".$values['SIP_CONTACT2_LOGIN']."'";
  $values['SIP_CONTACT2_PASSWD'] = $_POST['sip_line3_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT2_PASSWD='".$values['SIP_CONTACT2_PASSWD']."'";
  $values['SIP_PREFIX_2'] = $_POST['sip_line3_prefix'] ;
  $updatesql.=",SIP_PREFIX_2='".$values['SIP_PREFIX_2']."'";
  $values['SIP_CONTACT2_FORWARD_TYPE'] = $_POST['sip_line3_fwd_type'] ;
  $updatesql.=",SIP_CONTACT2_FORWARD_TYPE='".$values['SIP_CONTACT2_FORWARD_TYPE']."'";
  $values['SIP_CONTACT2_FORWARD_NUMBER'] = $_POST['sip_line3_fwd_num'] ;
  $updatesql.=",SIP_CONTACT2_FORWARD_NUMBER='".$values['SIP_CONTACT2_FORWARD_NUMBER']."'";
  $values['SIP_LINE2_USE_BSVR'] = $_POST['sip_line3_backup_server']=='on'?'1':'0';
  $updatesql.=",SIP_LINE2_USE_BSVR='".$values['SIP_LINE2_USE_BSVR']."'";
if($values['SIP_LINE2_USE_BSVR'] == 1):
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT12_PROXY'] = $_POST['sip_line3_backup_proxy'] ;
  $updatesql.=",SIP_CONTACT12_PROXY='".$values['SIP_CONTACT12_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT12_SERVER'] = $_POST['sip_line3_backup_registrar'] ;
  $updatesql.=",SIP_CONTACT12_SERVER='".$values['SIP_CONTACT12_SERVER']."'";
endif; 
  $values['SIP_CONTACT12_HOME_DOMAIN'] = $_POST['sip_line3_backup_home_domain'] ;
  $updatesql.=",SIP_CONTACT12_HOME_DOMAIN='".$values['SIP_CONTACT12_HOME_DOMAIN']."'";
endif; 
if($values['TELPORT']>=4): 
endif; 
  $values['SIP_CONTACT3_DIAL_DIGITS'] = $_POST['sip_line4_number'] ;
  $updatesql.=",SIP_CONTACT3_DIAL_DIGITS='".$values['SIP_CONTACT3_DIAL_DIGITS']."'";
  $values['SIP_CONTACT3_DIAL_DIGITS_2'] = $_POST['sip_line4_number2'] ;
  $updatesql.=",SIP_CONTACT3_DIAL_DIGITS_2='".$values['SIP_CONTACT3_DIAL_DIGITS_2']."'";
  $values['SIP_CONTACT3_DISPLAY_NAME'] = $_POST['sip_line4_display_name'] ;
  $updatesql.=",SIP_CONTACT3_DISPLAY_NAME='".$values['SIP_CONTACT3_DISPLAY_NAME']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT3_PROXY'] = $_POST['sip_line4_proxy'] ;
  $updatesql.=",SIP_CONTACT3_PROXY='".$values['SIP_CONTACT3_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT3_SERVER'] = $_POST['sip_line4_registrar'] ;
  $updatesql.=",SIP_CONTACT3_SERVER='".$values['SIP_CONTACT3_SERVER']."'";
endif; 
  $values['SIP_CONTACT3_REGISTER_EXPIRED'] = $_POST['sip_line4_register_expired'] ;
  $updatesql.=",SIP_CONTACT3_REGISTER_EXPIRED='".$values['SIP_CONTACT3_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT3_OUTBOUND_PROXY'] = $_POST['sip_line4_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT3_OUTBOUND_PROXY='".$values['SIP_CONTACT3_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT3_HOME_DOMAIN'] = $_POST['sip_line4_home_domain'] ;
  $updatesql.=",SIP_CONTACT3_HOME_DOMAIN='".$values['SIP_CONTACT3_HOME_DOMAIN']."'";
  $values['SIP_CONTACT3_LOGIN'] = $_POST['sip_line4_auth_id'] ;
  $updatesql.=",SIP_CONTACT3_LOGIN='".$values['SIP_CONTACT3_LOGIN']."'";
  $values['SIP_CONTACT3_PASSWD'] = $_POST['sip_line4_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT3_PASSWD='".$values['SIP_CONTACT3_PASSWD']."'";
  $values['SIP_PREFIX_3'] = $_POST['sip_line4_prefix'] ;
  $updatesql.=",SIP_PREFIX_3='".$values['SIP_PREFIX_3']."'";
  $values['SIP_CONTACT3_FORWARD_TYPE'] = $_POST['sip_line4_fwd_type'] ;
  $updatesql.=",SIP_CONTACT3_FORWARD_TYPE='".$values['SIP_CONTACT3_FORWARD_TYPE']."'";
  $values['SIP_CONTACT3_FORWARD_NUMBER'] = $_POST['sip_line4_fwd_num'] ;
  $updatesql.=",SIP_CONTACT3_FORWARD_NUMBER='".$values['SIP_CONTACT3_FORWARD_NUMBER']."'";
  $values['SIP_LINE3_USE_BSVR'] = $_POST['sip_line4_backup_server']=='on'?'1':'0';
  $updatesql.=",SIP_LINE3_USE_BSVR='".$values['SIP_LINE3_USE_BSVR']."'";
if($values['SIP_LINE3_USE_BSVR'] == 1):
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT13_PROXY'] = $_POST['sip_line4_backup_proxy'] ;
  $updatesql.=",SIP_CONTACT13_PROXY='".$values['SIP_CONTACT13_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT13_SERVER'] = $_POST['sip_line4_backup_registrar'] ;
  $updatesql.=",SIP_CONTACT13_SERVER='".$values['SIP_CONTACT13_SERVER']."'";
endif; 
  $values['SIP_CONTACT13_HOME_DOMAIN'] = $_POST['sip_line4_backup_home_domain'] ;
  $updatesql.=",SIP_CONTACT13_HOME_DOMAIN='".$values['SIP_CONTACT13_HOME_DOMAIN']."'";
endif; 
if($values['TELPORT']>=5): 
endif; 
  $values['SIP_CONTACT4_DIAL_DIGITS'] = $_POST['sip_line5_number'] ;
  $updatesql.=",SIP_CONTACT4_DIAL_DIGITS='".$values['SIP_CONTACT4_DIAL_DIGITS']."'";
  $values['SIP_CONTACT4_DIAL_DIGITS_2'] = $_POST['sip_line5_number2'] ;
  $updatesql.=",SIP_CONTACT4_DIAL_DIGITS_2='".$values['SIP_CONTACT4_DIAL_DIGITS_2']."'";
  $values['SIP_CONTACT4_DISPLAY_NAME'] = $_POST['sip_line5_display_name'] ;
  $updatesql.=",SIP_CONTACT4_DISPLAY_NAME='".$values['SIP_CONTACT4_DISPLAY_NAME']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT4_PROXY'] = $_POST['sip_line5_proxy'] ;
  $updatesql.=",SIP_CONTACT4_PROXY='".$values['SIP_CONTACT4_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT4_SERVER'] = $_POST['sip_line5_registrar'] ;
  $updatesql.=",SIP_CONTACT4_SERVER='".$values['SIP_CONTACT4_SERVER']."'";
endif; 
  $values['SIP_CONTACT4_REGISTER_EXPIRED'] = $_POST['sip_line5_register_expired'] ;
  $updatesql.=",SIP_CONTACT4_REGISTER_EXPIRED='".$values['SIP_CONTACT4_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT4_OUTBOUND_PROXY'] = $_POST['sip_line5_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT4_OUTBOUND_PROXY='".$values['SIP_CONTACT4_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT4_HOME_DOMAIN'] = $_POST['sip_line5_home_domain'] ;
  $updatesql.=",SIP_CONTACT4_HOME_DOMAIN='".$values['SIP_CONTACT4_HOME_DOMAIN']."'";
  $values['SIP_CONTACT4_LOGIN'] = $_POST['sip_line5_auth_id'] ;
  $updatesql.=",SIP_CONTACT4_LOGIN='".$values['SIP_CONTACT4_LOGIN']."'";
  $values['SIP_CONTACT4_PASSWD'] = $_POST['sip_line5_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT4_PASSWD='".$values['SIP_CONTACT4_PASSWD']."'";
  $values['SIP_PREFIX_4'] = $_POST['sip_line5_prefix'] ;
  $updatesql.=",SIP_PREFIX_4='".$values['SIP_PREFIX_4']."'";
  $values['SIP_CONTACT4_FORWARD_TYPE'] = $_POST['sip_line5_fwd_type'] ;
  $updatesql.=",SIP_CONTACT4_FORWARD_TYPE='".$values['SIP_CONTACT4_FORWARD_TYPE']."'";
  $values['SIP_CONTACT4_FORWARD_NUMBER'] = $_POST['sip_line5_fwd_num'] ;
  $updatesql.=",SIP_CONTACT4_FORWARD_NUMBER='".$values['SIP_CONTACT4_FORWARD_NUMBER']."'";
  $values['SIP_LINE4_USE_BSVR'] = $_POST['sip_line5_backup_server']=='on'?'1':'0';
  $updatesql.=",SIP_LINE4_USE_BSVR='".$values['SIP_LINE4_USE_BSVR']."'";
if($values['SIP_LINE4_USE_BSVR'] == 1):
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT14_PROXY'] = $_POST['sip_line5_backup_proxy'] ;
  $updatesql.=",SIP_CONTACT14_PROXY='".$values['SIP_CONTACT14_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT14_SERVER'] = $_POST['sip_line5_backup_registrar'] ;
  $updatesql.=",SIP_CONTACT14_SERVER='".$values['SIP_CONTACT14_SERVER']."'";
endif; 
  $values['SIP_CONTACT14_HOME_DOMAIN'] = $_POST['sip_line5_backup_home_domain'] ;
  $updatesql.=",SIP_CONTACT14_HOME_DOMAIN='".$values['SIP_CONTACT14_HOME_DOMAIN']."'";
endif; 
if($values['TELPORT']>=6): 
endif; 
  $values['SIP_CONTACT5_DIAL_DIGITS'] = $_POST['sip_line6_number'] ;
  $updatesql.=",SIP_CONTACT5_DIAL_DIGITS='".$values['SIP_CONTACT5_DIAL_DIGITS']."'";
  $values['SIP_CONTACT5_DIAL_DIGITS_2'] = $_POST['sip_line6_number2'] ;
  $updatesql.=",SIP_CONTACT5_DIAL_DIGITS_2='".$values['SIP_CONTACT5_DIAL_DIGITS_2']."'";
  $values['SIP_CONTACT5_DISPLAY_NAME'] = $_POST['sip_line5_display_name'] ;
  $updatesql.=",SIP_CONTACT5_DISPLAY_NAME='".$values['SIP_CONTACT5_DISPLAY_NAME']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT5_PROXY'] = $_POST['sip_line6_proxy'] ;
  $updatesql.=",SIP_CONTACT5_PROXY='".$values['SIP_CONTACT5_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT5_SERVER'] = $_POST['sip_line6_registrar'] ;
  $updatesql.=",SIP_CONTACT5_SERVER='".$values['SIP_CONTACT5_SERVER']."'";
endif; 
  $values['SIP_CONTACT5_REGISTER_EXPIRED'] = $_POST['sip_line6_register_expired'] ;
  $updatesql.=",SIP_CONTACT5_REGISTER_EXPIRED='".$values['SIP_CONTACT5_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT5_OUTBOUND_PROXY'] = $_POST['sip_line6_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT5_OUTBOUND_PROXY='".$values['SIP_CONTACT5_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT5_HOME_DOMAIN'] = $_POST['sip_line6_home_domain'] ;
  $updatesql.=",SIP_CONTACT5_HOME_DOMAIN='".$values['SIP_CONTACT5_HOME_DOMAIN']."'";
  $values['SIP_CONTACT5_LOGIN'] = $_POST['sip_line6_auth_id'] ;
  $updatesql.=",SIP_CONTACT5_LOGIN='".$values['SIP_CONTACT5_LOGIN']."'";
  $values['SIP_CONTACT5_PASSWD'] = $_POST['sip_line6_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT5_PASSWD='".$values['SIP_CONTACT5_PASSWD']."'";
  $values['SIP_PREFIX_5'] = $_POST['sip_line6_prefix'] ;
  $updatesql.=",SIP_PREFIX_5='".$values['SIP_PREFIX_5']."'";
  $values['SIP_CONTACT5_FORWARD_TYPE'] = $_POST['sip_line6_fwd_type'] ;
  $updatesql.=",SIP_CONTACT5_FORWARD_TYPE='".$values['SIP_CONTACT5_FORWARD_TYPE']."'";
  $values['SIP_CONTACT5_FORWARD_NUMBER'] = $_POST['sip_line6_fwd_num'] ;
  $updatesql.=",SIP_CONTACT5_FORWARD_NUMBER='".$values['SIP_CONTACT5_FORWARD_NUMBER']."'";
  $values['SIP_LINE5_USE_BSVR'] = $_POST['sip_line6_backup_server']=='on'?'1':'0';
  $updatesql.=",SIP_LINE5_USE_BSVR='".$values['SIP_LINE5_USE_BSVR']."'";
if($values['SIP_LINE5_USE_BSVR'] == 1):
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT15_PROXY'] = $_POST['sip_line6_backup_proxy'] ;
  $updatesql.=",SIP_CONTACT15_PROXY='".$values['SIP_CONTACT15_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT15_SERVER'] = $_POST['sip_line6_backup_registrar'] ;
  $updatesql.=",SIP_CONTACT15_SERVER='".$values['SIP_CONTACT15_SERVER']."'";
endif; 
  $values['SIP_CONTACT15_HOME_DOMAIN'] = $_POST['sip_line6_backup_home_domain'] ;
  $updatesql.=",SIP_CONTACT15_HOME_DOMAIN='".$values['SIP_CONTACT15_HOME_DOMAIN']."'";
endif; 
if($values['TELPORT']>=7): 
endif; 
  $values['SIP_CONTACT6_DIAL_DIGITS'] = $_POST['sip_line7_number'] ;
  $updatesql.=",SIP_CONTACT6_DIAL_DIGITS='".$values['SIP_CONTACT6_DIAL_DIGITS']."'";
  $values['SIP_CONTACT6_DIAL_DIGITS_2'] = $_POST['sip_line7_number2'] ;
  $updatesql.=",SIP_CONTACT6_DIAL_DIGITS_2='".$values['SIP_CONTACT6_DIAL_DIGITS_2']."'";
  $values['SIP_CONTACT6_DISPLAY_NAME'] = $_POST['sip_line7_display_name'] ;
  $updatesql.=",SIP_CONTACT6_DISPLAY_NAME='".$values['SIP_CONTACT6_DISPLAY_NAME']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT6_PROXY'] = $_POST['sip_line7_proxy'] ;
  $updatesql.=",SIP_CONTACT6_PROXY='".$values['SIP_CONTACT6_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT6_SERVER'] = $_POST['sip_line7_registrar'] ;
  $updatesql.=",SIP_CONTACT6_SERVER='".$values['SIP_CONTACT6_SERVER']."'";
endif; 
  $values['SIP_CONTACT6_REGISTER_EXPIRED'] = $_POST['sip_line7_register_expired'] ;
  $updatesql.=",SIP_CONTACT6_REGISTER_EXPIRED='".$values['SIP_CONTACT6_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT6_OUTBOUND_PROXY'] = $_POST['sip_line7_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT6_OUTBOUND_PROXY='".$values['SIP_CONTACT6_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT6_HOME_DOMAIN'] = $_POST['sip_line7_home_domain'] ;
  $updatesql.=",SIP_CONTACT6_HOME_DOMAIN='".$values['SIP_CONTACT6_HOME_DOMAIN']."'";
  $values['SIP_CONTACT6_LOGIN'] = $_POST['sip_line7_auth_id'] ;
  $updatesql.=",SIP_CONTACT6_LOGIN='".$values['SIP_CONTACT6_LOGIN']."'";
  $values['SIP_CONTACT6_PASSWD'] = $_POST['sip_line7_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT6_PASSWD='".$values['SIP_CONTACT6_PASSWD']."'";
  $values['SIP_PREFIX_6'] = $_POST['sip_line7_prefix'] ;
  $updatesql.=",SIP_PREFIX_6='".$values['SIP_PREFIX_6']."'";
  $values['SIP_CONTACT6_FORWARD_TYPE'] = $_POST['sip_line7_fwd_type'] ;
  $updatesql.=",SIP_CONTACT6_FORWARD_TYPE='".$values['SIP_CONTACT6_FORWARD_TYPE']."'";
  $values['SIP_CONTACT6_FORWARD_NUMBER'] = $_POST['sip_line7_fwd_num'] ;
  $updatesql.=",SIP_CONTACT6_FORWARD_NUMBER='".$values['SIP_CONTACT6_FORWARD_NUMBER']."'";
  $values['SIP_LINE6_USE_BSVR'] = $_POST['sip_line7_backup_server']=='on'?'1':'0';
  $updatesql.=",SIP_LINE6_USE_BSVR='".$values['SIP_LINE6_USE_BSVR']."'";
if($values['SIP_LINE6_USE_BSVR'] == 1):
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT16_PROXY'] = $_POST['sip_line7_backup_proxy'] ;
  $updatesql.=",SIP_CONTACT16_PROXY='".$values['SIP_CONTACT16_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT16_SERVER'] = $_POST['sip_line7_backup_registrar'] ;
  $updatesql.=",SIP_CONTACT16_SERVER='".$values['SIP_CONTACT16_SERVER']."'";
endif; 
  $values['SIP_CONTACT16_HOME_DOMAIN'] = $_POST['sip_line7_backup_home_domain'] ;
  $updatesql.=",SIP_CONTACT16_HOME_DOMAIN='".$values['SIP_CONTACT16_HOME_DOMAIN']."'";
endif; 
if($values['TELPORT']>=8): 
endif; 
  $values['SIP_CONTACT7_DIAL_DIGITS'] = $_POST['sip_line8_number'] ;
  $updatesql.=",SIP_CONTACT7_DIAL_DIGITS='".$values['SIP_CONTACT7_DIAL_DIGITS']."'";
  $values['SIP_CONTACT7_DIAL_DIGITS_2'] = $_POST['sip_line8_number2'] ;
  $updatesql.=",SIP_CONTACT7_DIAL_DIGITS_2='".$values['SIP_CONTACT7_DIAL_DIGITS_2']."'";
  $values['SIP_CONTACT7_DISPLAY_NAME'] = $_POST['sip_line8_display_name'] ;
  $updatesql.=",SIP_CONTACT7_DISPLAY_NAME='".$values['SIP_CONTACT7_DISPLAY_NAME']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT7_PROXY'] = $_POST['sip_line8_proxy'] ;
  $updatesql.=",SIP_CONTACT7_PROXY='".$values['SIP_CONTACT7_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT7_SERVER'] = $_POST['sip_line8_registrar'] ;
  $updatesql.=",SIP_CONTACT7_SERVER='".$values['SIP_CONTACT7_SERVER']."'";
endif; 
  $values['SIP_CONTACT7_REGISTER_EXPIRED'] = $_POST['sip_line8_register_expired'] ;
  $updatesql.=",SIP_CONTACT7_REGISTER_EXPIRED='".$values['SIP_CONTACT7_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT7_OUTBOUND_PROXY'] = $_POST['sip_line8_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT7_OUTBOUND_PROXY='".$values['SIP_CONTACT7_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT7_HOME_DOMAIN'] = $_POST['sip_line8_home_domain'] ;
  $updatesql.=",SIP_CONTACT7_HOME_DOMAIN='".$values['SIP_CONTACT7_HOME_DOMAIN']."'";
  $values['SIP_CONTACT7_LOGIN'] = $_POST['sip_line8_auth_id'] ;
  $updatesql.=",SIP_CONTACT7_LOGIN='".$values['SIP_CONTACT7_LOGIN']."'";
  $values['SIP_CONTACT7_PASSWD'] = $_POST['sip_line8_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT7_PASSWD='".$values['SIP_CONTACT7_PASSWD']."'";
  $values['SIP_PREFIX_7'] = $_POST['sip_line8_prefix'] ;
  $updatesql.=",SIP_PREFIX_7='".$values['SIP_PREFIX_7']."'";
  $values['SIP_CONTACT7_FORWARD_TYPE'] = $_POST['sip_line8_fwd_type'] ;
  $updatesql.=",SIP_CONTACT7_FORWARD_TYPE='".$values['SIP_CONTACT7_FORWARD_TYPE']."'";
  $values['SIP_CONTACT7_FORWARD_NUMBER'] = $_POST['sip_line8_fwd_num'] ;
  $updatesql.=",SIP_CONTACT7_FORWARD_NUMBER='".$values['SIP_CONTACT7_FORWARD_NUMBER']."'";
  $values['SIP_LINE7_USE_BSVR'] = $_POST['sip_line8_backup_server']=='on'?'1':'0';
  $updatesql.=",SIP_LINE7_USE_BSVR='".$values['SIP_LINE7_USE_BSVR']."'";
if($values['SIP_LINE7_USE_BSVR'] == 1):
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT17_PROXY'] = $_POST['sip_line8_backup_proxy'] ;
  $updatesql.=",SIP_CONTACT17_PROXY='".$values['SIP_CONTACT17_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT17_SERVER'] = $_POST['sip_line8_backup_registrar'] ;
  $updatesql.=",SIP_CONTACT17_SERVER='".$values['SIP_CONTACT17_SERVER']."'";
endif; 
  $values['SIP_CONTACT17_HOME_DOMAIN'] = $_POST['sip_line8_backup_home_domain'] ;
  $updatesql.=",SIP_CONTACT17_HOME_DOMAIN='".$values['SIP_CONTACT17_HOME_DOMAIN']."'";
endif; 
endif; 
endif; 



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



if($values['ENDPOINT_TYPE'] == 'H323'):
  $values['RAS_PORT'] = $_POST['ras_port'] ;
  $updatesql.=",RAS_PORT='".$values['RAS_PORT']."'";
  $values['Q931_PORT'] = $_POST['q931_port'] ;
  $updatesql.=",Q931_PORT='".$values['Q931_PORT']."'";
  $values['H245_PORT'] = $_POST['h245_port'] ;
  $updatesql.=",H245_PORT='".$values['H245_PORT']."'";
  $values['DISABLE_FASTSTART'] = $_POST['disable_fast_start']=='on'?'0':'1';
  $updatesql.=",DISABLE_FASTSTART='".$values['DISABLE_FASTSTART']."'";
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

/*sip ad*/
if($values['ENDPOINT_TYPE'] == 'SIP'):
	/*超时*/
  $values['SIP_KEEPALIVE_INTERVAL'] = $_POST['sip_keepalive_interval'] ;
  $updatesql.=",SIP_KEEPALIVE_INTERVAL='".$values['SIP_KEEPALIVE_INTERVAL']."'";
  $values['SIP_FAIL_RETRY_INTERVAL'] = $_POST['sip_fail_retry_interval'] ;
  $updatesql.=",SIP_FAIL_RETRY_INTERVAL='".$values['SIP_FAIL_RETRY_INTERVAL']."'";
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
  $values['SIP_P2P_ENABLE'] = $_POST['sip_p2p_enable']=='on'?'1':'0';
  $updatesql.=",SIP_P2P_ENABLE='".$values['SIP_P2P_ENABLE']."'";
  $values['SIP_VIRTUAL_RB_TONE'] = $_POST['sip_virtual_ringback']=='on'?'1':'0';
  $updatesql.=",SIP_VIRTUAL_RB_TONE='".$values['SIP_VIRTUAL_RB_TONE']."'";
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
if($values['ET263_CRYPT'] == '1'):
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

 
  $insertsql.=",ENDPOINT_TYPE";
  $insertsql2.="','".$values['ENDPOINT_TYPE'];
  $insertsql.=",H323_ENDPOINT_MODE";
  $insertsql2.="','".$values['H323_ENDPOINT_MODE'];
  $insertsql.=",H323_LOCAL_NUMBER";
  $insertsql2.="','".$values['H323_LOCAL_NUMBER'];
  $insertsql.=",H323_LOCAL_NAME";
  $insertsql2.="','".$values['H323_LOCAL_NAME'];
  $insertsql.=",H323_LOCAL_ID";
  $insertsql2.="','".$values['H323_LOCAL_ID'];
  $insertsql.=",H323_DEFAULT_GATEWAY";
  $insertsql2.="','".$values['H323_DEFAULT_GATEWAY'];
  $insertsql.=",H323_CONFIG_MODE";
  $insertsql2.="','".$values['H323_CONFIG_MODE'];
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
  $insertsql.=",H323_PREFIX";
  $insertsql2.="','".$values['H323_PREFIX'];
  $insertsql.=",H323_LINE1_NUMBER";
  $insertsql2.="','".$values['H323_LINE1_NUMBER'];
  $insertsql.=",H323_LINE1_H323_ID";
  $insertsql2.="','".$values['H323_LINE1_H323_ID'];
  $insertsql.=",H323_LINE1_GKADDR";
  $insertsql2.="','".$values['H323_LINE1_GKADDR'];
  $insertsql.=",H323_LINE1_VOS_ENABLE";
  $insertsql2.="','".$values['H323_LINE1_VOS_ENABLE'];
  $insertsql.=",H323_LINE1_VOS_MODE";
  $insertsql2.="','".$values['H323_LINE1_VOS_MODE'];
  $insertsql.=",H323_LINE1_AUTH";
  $insertsql2.="','".$values['H323_LINE1_AUTH'];
  $insertsql.=",H323_LINE1_H235_ID";
  $insertsql2.="','".$values['H323_LINE1_H235_ID'];
  $insertsql.=",H323_LINE1_H235_PASSWD";
  $insertsql2.="','".$values['H323_LINE1_H235_PASSWD'];
  $insertsql.=",H323_PREFIX_0";
  $insertsql2.="','".$values['H323_PREFIX_0'];
  $insertsql.=",H323_LINE2_NUMBER";
  $insertsql2.="','".$values['H323_LINE2_NUMBER'];
  $insertsql.=",H323_LINE2_H323_ID";
  $insertsql2.="','".$values['H323_LINE2_H323_ID'];
  $insertsql.=",H323_LINE2_GKADDR";
  $insertsql2.="','".$values['H323_LINE2_GKADDR'];
  $insertsql.=",H323_LINE2_VOS_ENABLE";
  $insertsql2.="','".$values['H323_LINE2_VOS_ENABLE'];
  $insertsql.=",H323_LINE2_VOS_MODE";
  $insertsql2.="','".$values['H323_LINE2_VOS_MODE'];
  $insertsql.=",H323_LINE2_AUTH";
  $insertsql2.="','".$values['H323_LINE2_AUTH'];
  $insertsql.=",H323_LINE2_H235_ID";
  $insertsql2.="','".$values['H323_LINE2_H235_ID'];
  $insertsql.=",H323_LINE2_H235_PASSWD";
  $insertsql2.="','".$values['H323_LINE2_H235_PASSWD'];
  $insertsql.=",H323_PREFIX_1";
  $insertsql2.="','".$values['H323_PREFIX_1'];
  $insertsql.=",H323_LINE3_NUMBER";
  $insertsql2.="','".$values['H323_LINE3_NUMBER'];
  $insertsql.=",H323_LINE3_H323_ID";
  $insertsql2.="','".$values['H323_LINE3_H323_ID'];
  $insertsql.=",H323_LINE3_GKADDR";
  $insertsql2.="','".$values['H323_LINE3_GKADDR'];
  $insertsql.=",H323_LINE3_VOS_ENABLE";
  $insertsql2.="','".$values['H323_LINE3_VOS_ENABLE'];
  $insertsql.=",H323_LINE3_VOS_MODE";
  $insertsql2.="','".$values['H323_LINE3_VOS_MODE'];
  $insertsql.=",H323_LINE3_AUTH";
  $insertsql2.="','".$values['H323_LINE3_AUTH'];
  $insertsql.=",H323_LINE3_H235_ID";
  $insertsql2.="','".$values['H323_LINE3_H235_ID'];
  $insertsql.=",H323_LINE3_H235_PASSWD";
  $insertsql2.="','".$values['H323_LINE3_H235_PASSWD'];
  $insertsql.=",H323_PREFIX_2";
  $insertsql2.="','".$values['H323_PREFIX_2'];
  $insertsql.=",H323_LINE4_NUMBER";
  $insertsql2.="','".$values['H323_LINE4_NUMBER'];
  $insertsql.=",H323_LINE4_H323_ID";
  $insertsql2.="','".$values['H323_LINE4_H323_ID'];
  $insertsql.=",H323_LINE4_GKADDR";
  $insertsql2.="','".$values['H323_LINE4_GKADDR'];
  $insertsql.=",H323_LINE4_VOS_ENABLE";
  $insertsql2.="','".$values['H323_LINE4_VOS_ENABLE'];
  $insertsql.=",H323_LINE4_VOS_MODE";
  $insertsql2.="','".$values['H323_LINE4_VOS_MODE'];
  $insertsql.=",H323_LINE4_AUTH";
  $insertsql2.="','".$values['H323_LINE4_AUTH'];
  $insertsql.=",H323_LINE4_H235_ID";
  $insertsql2.="','".$values['H323_LINE4_H235_ID'];
  $insertsql.=",H323_LINE4_H235_PASSWD";
  $insertsql2.="','".$values['H323_LINE4_H235_PASSWD'];
  $insertsql.=",H323_PREFIX_3";
  $insertsql2.="','".$values['H323_PREFIX_3'];
  $insertsql.=",H323_LINE5_NUMBER";
  $insertsql2.="','".$values['H323_LINE5_NUMBER'];
  $insertsql.=",H323_LINE5_H323_ID";
  $insertsql2.="','".$values['H323_LINE5_H323_ID'];
  $insertsql.=",H323_LINE5_GKADDR";
  $insertsql2.="','".$values['H323_LINE5_GKADDR'];
  $insertsql.=",H323_LINE5_VOS_ENABLE";
  $insertsql2.="','".$values['H323_LINE5_VOS_ENABLE'];
  $insertsql.=",H323_LINE5_VOS_MODE";
  $insertsql2.="','".$values['H323_LINE5_VOS_MODE'];
  $insertsql.=",H323_LINE5_AUTH";
  $insertsql2.="','".$values['H323_LINE5_AUTH'];
  $insertsql.=",H323_LINE5_H235_ID";
  $insertsql2.="','".$values['H323_LINE5_H235_ID'];
  $insertsql.=",H323_LINE5_H235_PASSWD";
  $insertsql2.="','".$values['H323_LINE5_H235_PASSWD'];
  $insertsql.=",H323_PREFIX_4";
  $insertsql2.="','".$values['H323_PREFIX_4'];
  $insertsql.=",H323_LINE6_NUMBER";
  $insertsql2.="','".$values['H323_LINE6_NUMBER'];
  $insertsql.=",H323_LINE6_H323_ID";
  $insertsql2.="','".$values['H323_LINE6_H323_ID'];
  $insertsql.=",H323_LINE6_GKADDR";
  $insertsql2.="','".$values['H323_LINE6_GKADDR'];
  $insertsql.=",H323_LINE6_VOS_ENABLE";
  $insertsql2.="','".$values['H323_LINE6_VOS_ENABLE'];
  $insertsql.=",H323_LINE6_VOS_MODE";
  $insertsql2.="','".$values['H323_LINE6_VOS_MODE'];
  $insertsql.=",H323_LINE6_AUTH";
  $insertsql2.="','".$values['H323_LINE6_AUTH'];
  $insertsql.=",H323_LINE6_H235_ID";
  $insertsql2.="','".$values['H323_LINE6_H235_ID'];
  $insertsql.=",H323_LINE6_H235_PASSWD";
  $insertsql2.="','".$values['H323_LINE6_H235_PASSWD'];
  $insertsql.=",H323_PREFIX_5";
  $insertsql2.="','".$values['H323_PREFIX_5'];
  $insertsql.=",H323_LINE7_NUMBER";
  $insertsql2.="','".$values['H323_LINE7_NUMBER'];
  $insertsql.=",H323_LINE7_H323_ID";
  $insertsql2.="','".$values['H323_LINE7_H323_ID'];
  $insertsql.=",H323_LINE7_GKADDR";
  $insertsql2.="','".$values['H323_LINE7_GKADDR'];
  $insertsql.=",H323_LINE7_VOS_ENABLE";
  $insertsql2.="','".$values['H323_LINE7_VOS_ENABLE'];
  $insertsql.=",H323_LINE7_VOS_MODE";
  $insertsql2.="','".$values['H323_LINE7_VOS_MODE'];
  $insertsql.=",H323_LINE7_AUTH";
  $insertsql2.="','".$values['H323_LINE7_AUTH'];
  $insertsql.=",H323_LINE7_H235_ID";
  $insertsql2.="','".$values['H323_LINE7_H235_ID'];
  $insertsql.=",H323_LINE7_H235_PASSWD";
  $insertsql2.="','".$values['H323_LINE7_H235_PASSWD'];
  $insertsql.=",H323_PREFIX_6";
  $insertsql2.="','".$values['H323_PREFIX_6'];
  $insertsql.=",H323_LINE8_NUMBER";
  $insertsql2.="','".$values['H323_LINE8_NUMBER'];
  $insertsql.=",H323_LINE8_H323_ID";
  $insertsql2.="','".$values['H323_LINE8_H323_ID'];
  $insertsql.=",H323_LINE8_GKADDR";
  $insertsql2.="','".$values['H323_LINE8_GKADDR'];
  $insertsql.=",H323_LINE8_VOS_ENABLE";
  $insertsql2.="','".$values['H323_LINE8_VOS_ENABLE'];
  $insertsql.=",H323_LINE8_VOS_MODE";
  $insertsql2.="','".$values['H323_LINE8_VOS_MODE'];
  $insertsql.=",H323_LINE8_AUTH";
  $insertsql2.="','".$values['H323_LINE8_AUTH'];
  $insertsql.=",H323_LINE8_H235_ID";
  $insertsql2.="','".$values['H323_LINE8_H235_ID'];
  $insertsql.=",H323_LINE8_H235_PASSWD";
  $insertsql2.="','".$values['H323_LINE8_H235_PASSWD'];
  $insertsql.=",H323_PREFIX_7";
  $insertsql2.="','".$values['H323_PREFIX_7'];
  $insertsql.=",SIP_CONFIG_MODE";
  $insertsql2.="','".$values['SIP_CONFIG_MODE'];
  $insertsql.=",SIP_PHONE_NUMBER";
  $insertsql2.="','".$values['SIP_PHONE_NUMBER'];
  $insertsql.=",SIP_PHONE_NUMBER_2";
  $insertsql2.="','".$values['SIP_PHONE_NUMBER_2'];
  $insertsql.=",SIP_DISPLAY_NAME";
  $insertsql2.="','".$values['SIP_DISPLAY_NAME'];
  $insertsql.=",SIP_PROXY";
  $insertsql2.="','".$values['SIP_PROXY'];
  $insertsql.=",SIP_REGISTRAR";
  $insertsql2.="','".$values['SIP_REGISTRAR'];
  $insertsql.=",SIP_REGISTER_EXPIRED";
  $insertsql2.="','".$values['SIP_REGISTER_EXPIRED'];
  $insertsql.=",SIP_OUTBOUND_PROXY";
  $insertsql2.="','".$values['SIP_OUTBOUND_PROXY'];
  $insertsql.=",SIP_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_HOME_DOMAIN'];
  $insertsql.=",SIP_AUTH_ID";
  $insertsql2.="','".$values['SIP_AUTH_ID'];
  $insertsql.=",SIP_AUTH_PASSWD";
  $insertsql2.="','".$values['SIP_AUTH_PASSWD'];
  $insertsql.=",SIP_PREFIX";
  $insertsql2.="','".$values['SIP_PREFIX'];
  $insertsql.=",SIP_FORWARD_TYPE";
  $insertsql2.="','".$values['SIP_FORWARD_TYPE'];
  $insertsql.=",SIP_FORWARD_NUMBER";
  $insertsql2.="','".$values['SIP_FORWARD_NUMBER'];
  $insertsql.=",SIP_SMODE_USE_BSVR";
  $insertsql2.="','".$values['SIP_SMODE_USE_BSVR'];
  $insertsql.=",SIP_BACKUP_PROXY";
  $insertsql2.="','".$values['SIP_BACKUP_PROXY'];
  $insertsql.=",SIP_BACKUP_REGISTRAR";
  $insertsql2.="','".$values['SIP_BACKUP_REGISTRAR'];
  $insertsql.=",SIP_BACKUP_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_BACKUP_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT0_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT0_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT0_DIAL_DIGITS_2";
  $insertsql2.="','".$values['SIP_CONTACT0_DIAL_DIGITS_2'];
  $insertsql.=",SIP_CONTACT0_DISPLAY_NAME";
  $insertsql2.="','".$values['SIP_CONTACT0_DISPLAY_NAME'];
  $insertsql.=",SIP_CONTACT0_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT0_PROXY'];
  $insertsql.=",SIP_CONTACT0_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT0_SERVER'];
  $insertsql.=",SIP_CONTACT0_REGISTER_EXPIRED";
  $insertsql2.="','".$values['SIP_CONTACT0_REGISTER_EXPIRED'];
  $insertsql.=",SIP_CONTACT0_OUTBOUND_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT0_OUTBOUND_PROXY'];
  $insertsql.=",SIP_CONTACT0_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT0_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT0_LOGIN";
  $insertsql2.="','".$values['SIP_CONTACT0_LOGIN'];
  $insertsql.=",SIP_CONTACT0_PASSWD";
  $insertsql2.="','".$values['SIP_CONTACT0_PASSWD'];
  $insertsql.=",SIP_PREFIX_0";
  $insertsql2.="','".$values['SIP_PREFIX_0'];
  $insertsql.=",SIP_CONTACT0_FORWARD_TYPE";
  $insertsql2.="','".$values['SIP_CONTACT0_FORWARD_TYPE'];
  $insertsql.=",SIP_CONTACT0_FORWARD_NUMBER";
  $insertsql2.="','".$values['SIP_CONTACT0_FORWARD_NUMBER'];
  $insertsql.=",SIP_LINE0_USE_BSVR";
  $insertsql2.="','".$values['SIP_LINE0_USE_BSVR'];
  $insertsql.=",SIP_CONTACT10_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT10_PROXY'];
  $insertsql.=",SIP_CONTACT10_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT10_SERVER'];
  $insertsql.=",SIP_CONTACT10_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT10_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT1_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT1_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT1_DIAL_DIGITS_2";
  $insertsql2.="','".$values['SIP_CONTACT1_DIAL_DIGITS_2'];
  $insertsql.=",SIP_CONTACT1_DISPLAY_NAME";
  $insertsql2.="','".$values['SIP_CONTACT1_DISPLAY_NAME'];
  $insertsql.=",SIP_CONTACT1_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT1_PROXY'];
  $insertsql.=",SIP_CONTACT1_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT1_SERVER'];
  $insertsql.=",SIP_CONTACT1_REGISTER_EXPIRED";
  $insertsql2.="','".$values['SIP_CONTACT1_REGISTER_EXPIRED'];
  $insertsql.=",SIP_CONTACT1_OUTBOUND_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT1_OUTBOUND_PROXY'];
  $insertsql.=",SIP_CONTACT1_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT1_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT1_LOGIN";
  $insertsql2.="','".$values['SIP_CONTACT1_LOGIN'];
  $insertsql.=",SIP_CONTACT1_PASSWD";
  $insertsql2.="','".$values['SIP_CONTACT1_PASSWD'];
  $insertsql.=",SIP_PREFIX_1";
  $insertsql2.="','".$values['SIP_PREFIX_1'];
  $insertsql.=",SIP_CONTACT1_FORWARD_TYPE";
  $insertsql2.="','".$values['SIP_CONTACT1_FORWARD_TYPE'];
  $insertsql.=",SIP_CONTACT1_FORWARD_NUMBER";
  $insertsql2.="','".$values['SIP_CONTACT1_FORWARD_NUMBER'];
  $insertsql.=",SIP_LINE1_USE_BSVR";
  $insertsql2.="','".$values['SIP_LINE1_USE_BSVR'];
  $insertsql.=",SIP_CONTACT11_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT11_PROXY'];
  $insertsql.=",SIP_CONTACT11_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT11_SERVER'];
  $insertsql.=",SIP_CONTACT11_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT11_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT2_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT2_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT2_DIAL_DIGITS_2";
  $insertsql2.="','".$values['SIP_CONTACT2_DIAL_DIGITS_2'];
  $insertsql.=",SIP_CONTACT2_DISPLAY_NAME";
  $insertsql2.="','".$values['SIP_CONTACT2_DISPLAY_NAME'];
  $insertsql.=",SIP_CONTACT2_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT2_PROXY'];
  $insertsql.=",SIP_CONTACT2_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT2_SERVER'];
  $insertsql.=",SIP_CONTACT2_REGISTER_EXPIRED";
  $insertsql2.="','".$values['SIP_CONTACT2_REGISTER_EXPIRED'];
  $insertsql.=",SIP_CONTACT2_OUTBOUND_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT2_OUTBOUND_PROXY'];
  $insertsql.=",SIP_CONTACT2_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT2_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT2_LOGIN";
  $insertsql2.="','".$values['SIP_CONTACT2_LOGIN'];
  $insertsql.=",SIP_CONTACT2_PASSWD";
  $insertsql2.="','".$values['SIP_CONTACT2_PASSWD'];
  $insertsql.=",SIP_PREFIX_2";
  $insertsql2.="','".$values['SIP_PREFIX_2'];
  $insertsql.=",SIP_CONTACT2_FORWARD_TYPE";
  $insertsql2.="','".$values['SIP_CONTACT2_FORWARD_TYPE'];
  $insertsql.=",SIP_CONTACT2_FORWARD_NUMBER";
  $insertsql2.="','".$values['SIP_CONTACT2_FORWARD_NUMBER'];
  $insertsql.=",SIP_LINE2_USE_BSVR";
  $insertsql2.="','".$values['SIP_LINE2_USE_BSVR'];
  $insertsql.=",SIP_CONTACT12_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT12_PROXY'];
  $insertsql.=",SIP_CONTACT12_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT12_SERVER'];
  $insertsql.=",SIP_CONTACT12_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT12_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT3_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT3_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT3_DIAL_DIGITS_2";
  $insertsql2.="','".$values['SIP_CONTACT3_DIAL_DIGITS_2'];
  $insertsql.=",SIP_CONTACT3_DISPLAY_NAME";
  $insertsql2.="','".$values['SIP_CONTACT3_DISPLAY_NAME'];
  $insertsql.=",SIP_CONTACT3_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT3_PROXY'];
  $insertsql.=",SIP_CONTACT3_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT3_SERVER'];
  $insertsql.=",SIP_CONTACT3_REGISTER_EXPIRED";
  $insertsql2.="','".$values['SIP_CONTACT3_REGISTER_EXPIRED'];
  $insertsql.=",SIP_CONTACT3_OUTBOUND_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT3_OUTBOUND_PROXY'];
  $insertsql.=",SIP_CONTACT3_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT3_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT3_LOGIN";
  $insertsql2.="','".$values['SIP_CONTACT3_LOGIN'];
  $insertsql.=",SIP_CONTACT3_PASSWD";
  $insertsql2.="','".$values['SIP_CONTACT3_PASSWD'];
  $insertsql.=",SIP_PREFIX_3";
  $insertsql2.="','".$values['SIP_PREFIX_3'];
  $insertsql.=",SIP_CONTACT3_FORWARD_TYPE";
  $insertsql2.="','".$values['SIP_CONTACT3_FORWARD_TYPE'];
  $insertsql.=",SIP_CONTACT3_FORWARD_NUMBER";
  $insertsql2.="','".$values['SIP_CONTACT3_FORWARD_NUMBER'];
  $insertsql.=",SIP_LINE3_USE_BSVR";
  $insertsql2.="','".$values['SIP_LINE3_USE_BSVR'];
  $insertsql.=",SIP_CONTACT13_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT13_PROXY'];
  $insertsql.=",SIP_CONTACT13_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT13_SERVER'];
  $insertsql.=",SIP_CONTACT13_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT13_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT4_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT4_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT4_DIAL_DIGITS_2";
  $insertsql2.="','".$values['SIP_CONTACT4_DIAL_DIGITS_2'];
  $insertsql.=",SIP_CONTACT4_DISPLAY_NAME";
  $insertsql2.="','".$values['SIP_CONTACT4_DISPLAY_NAME'];
  $insertsql.=",SIP_CONTACT4_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT4_PROXY'];
  $insertsql.=",SIP_CONTACT4_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT4_SERVER'];
  $insertsql.=",SIP_CONTACT4_REGISTER_EXPIRED";
  $insertsql2.="','".$values['SIP_CONTACT4_REGISTER_EXPIRED'];
  $insertsql.=",SIP_CONTACT4_OUTBOUND_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT4_OUTBOUND_PROXY'];
  $insertsql.=",SIP_CONTACT4_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT4_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT4_LOGIN";
  $insertsql2.="','".$values['SIP_CONTACT4_LOGIN'];
  $insertsql.=",SIP_CONTACT4_PASSWD";
  $insertsql2.="','".$values['SIP_CONTACT4_PASSWD'];
  $insertsql.=",SIP_PREFIX_4";
  $insertsql2.="','".$values['SIP_PREFIX_4'];
  $insertsql.=",SIP_CONTACT4_FORWARD_TYPE";
  $insertsql2.="','".$values['SIP_CONTACT4_FORWARD_TYPE'];
  $insertsql.=",SIP_CONTACT4_FORWARD_NUMBER";
  $insertsql2.="','".$values['SIP_CONTACT4_FORWARD_NUMBER'];
  $insertsql.=",SIP_LINE4_USE_BSVR";
  $insertsql2.="','".$values['SIP_LINE4_USE_BSVR'];
  $insertsql.=",SIP_CONTACT14_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT14_PROXY'];
  $insertsql.=",SIP_CONTACT14_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT14_SERVER'];
  $insertsql.=",SIP_CONTACT14_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT14_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT5_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT5_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT5_DIAL_DIGITS_2";
  $insertsql2.="','".$values['SIP_CONTACT5_DIAL_DIGITS_2'];
  $insertsql.=",SIP_CONTACT5_DISPLAY_NAME";
  $insertsql2.="','".$values['SIP_CONTACT5_DISPLAY_NAME'];
  $insertsql.=",SIP_CONTACT5_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT5_PROXY'];
  $insertsql.=",SIP_CONTACT5_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT5_SERVER'];
  $insertsql.=",SIP_CONTACT5_REGISTER_EXPIRED";
  $insertsql2.="','".$values['SIP_CONTACT5_REGISTER_EXPIRED'];
  $insertsql.=",SIP_CONTACT5_OUTBOUND_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT5_OUTBOUND_PROXY'];
  $insertsql.=",SIP_CONTACT5_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT5_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT5_LOGIN";
  $insertsql2.="','".$values['SIP_CONTACT5_LOGIN'];
  $insertsql.=",SIP_CONTACT5_PASSWD";
  $insertsql2.="','".$values['SIP_CONTACT5_PASSWD'];
  $insertsql.=",SIP_PREFIX_5";
  $insertsql2.="','".$values['SIP_PREFIX_5'];
  $insertsql.=",SIP_CONTACT5_FORWARD_TYPE";
  $insertsql2.="','".$values['SIP_CONTACT5_FORWARD_TYPE'];
  $insertsql.=",SIP_CONTACT5_FORWARD_NUMBER";
  $insertsql2.="','".$values['SIP_CONTACT5_FORWARD_NUMBER'];
  $insertsql.=",SIP_LINE5_USE_BSVR";
  $insertsql2.="','".$values['SIP_LINE5_USE_BSVR'];
  $insertsql.=",SIP_CONTACT15_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT15_PROXY'];
  $insertsql.=",SIP_CONTACT15_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT15_SERVER'];
  $insertsql.=",SIP_CONTACT15_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT15_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT6_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT6_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT6_DIAL_DIGITS_2";
  $insertsql2.="','".$values['SIP_CONTACT6_DIAL_DIGITS_2'];
  $insertsql.=",SIP_CONTACT6_DISPLAY_NAME";
  $insertsql2.="','".$values['SIP_CONTACT6_DISPLAY_NAME'];
  $insertsql.=",SIP_CONTACT6_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT6_PROXY'];
  $insertsql.=",SIP_CONTACT6_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT6_SERVER'];
  $insertsql.=",SIP_CONTACT6_REGISTER_EXPIRED";
  $insertsql2.="','".$values['SIP_CONTACT6_REGISTER_EXPIRED'];
  $insertsql.=",SIP_CONTACT6_OUTBOUND_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT6_OUTBOUND_PROXY'];
  $insertsql.=",SIP_CONTACT6_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT6_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT6_LOGIN";
  $insertsql2.="','".$values['SIP_CONTACT6_LOGIN'];
  $insertsql.=",SIP_CONTACT6_PASSWD";
  $insertsql2.="','".$values['SIP_CONTACT6_PASSWD'];
  $insertsql.=",SIP_PREFIX_6";
  $insertsql2.="','".$values['SIP_PREFIX_6'];
  $insertsql.=",SIP_CONTACT6_FORWARD_TYPE";
  $insertsql2.="','".$values['SIP_CONTACT6_FORWARD_TYPE'];
  $insertsql.=",SIP_CONTACT6_FORWARD_NUMBER";
  $insertsql2.="','".$values['SIP_CONTACT6_FORWARD_NUMBER'];
  $insertsql.=",SIP_LINE6_USE_BSVR";
  $insertsql2.="','".$values['SIP_LINE6_USE_BSVR'];
  $insertsql.=",SIP_CONTACT16_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT16_PROXY'];
  $insertsql.=",SIP_CONTACT16_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT16_SERVER'];
  $insertsql.=",SIP_CONTACT16_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT16_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT7_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT7_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT7_DIAL_DIGITS_2";
  $insertsql2.="','".$values['SIP_CONTACT7_DIAL_DIGITS_2'];
  $insertsql.=",SIP_CONTACT7_DISPLAY_NAME";
  $insertsql2.="','".$values['SIP_CONTACT7_DISPLAY_NAME'];
  $insertsql.=",SIP_CONTACT7_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT7_PROXY'];
  $insertsql.=",SIP_CONTACT7_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT7_SERVER'];
  $insertsql.=",SIP_CONTACT7_REGISTER_EXPIRED";
  $insertsql2.="','".$values['SIP_CONTACT7_REGISTER_EXPIRED'];
  $insertsql.=",SIP_CONTACT7_OUTBOUND_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT7_OUTBOUND_PROXY'];
  $insertsql.=",SIP_CONTACT7_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT7_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT7_LOGIN";
  $insertsql2.="','".$values['SIP_CONTACT7_LOGIN'];
  $insertsql.=",SIP_CONTACT7_PASSWD";
  $insertsql2.="','".$values['SIP_CONTACT7_PASSWD'];
  $insertsql.=",SIP_PREFIX_7";
  $insertsql2.="','".$values['SIP_PREFIX_7'];
  $insertsql.=",SIP_CONTACT7_FORWARD_TYPE";
  $insertsql2.="','".$values['SIP_CONTACT7_FORWARD_TYPE'];
  $insertsql.=",SIP_CONTACT7_FORWARD_NUMBER";
  $insertsql2.="','".$values['SIP_CONTACT7_FORWARD_NUMBER'];
  $insertsql.=",SIP_LINE7_USE_BSVR";
  $insertsql2.="','".$values['SIP_LINE7_USE_BSVR'];
  $insertsql.=",SIP_CONTACT17_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT17_PROXY'];
  $insertsql.=",SIP_CONTACT17_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT17_SERVER'];
  $insertsql.=",SIP_CONTACT17_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT17_HOME_DOMAIN'];
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
  $insertsql.=",RAS_PORT";
  $insertsql2.="','".$values['RAS_PORT'];
  $insertsql.=",Q931_PORT";
  $insertsql2.="','".$values['Q931_PORT'];
  $insertsql.=",H245_PORT";
  $insertsql2.="','".$values['H245_PORT'];
  $insertsql.=",DISABLE_FASTSTART";
  $insertsql2.="','".$values['DISABLE_FASTSTART'];
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
  $insertsql.=",SIP_P2P_ENABLE";
  $insertsql2.="','".$values['SIP_P2P_ENABLE'];
  $insertsql.=",SIP_VIRTUAL_RB_TONE";
  $insertsql2.="','".$values['SIP_VIRTUAL_RB_TONE'];
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
  $insertsql.=",SIP_KEEPALIVE_INTERVAL";
  $insertsql2.="','".$values['SIP_KEEPALIVE_INTERVAL'];
  $insertsql.=",SIP_FAIL_RETRY_INTERVAL";
  $insertsql2.="','".$values['SIP_FAIL_RETRY_INTERVAL'];
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

?>
