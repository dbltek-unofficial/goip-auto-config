<?php
  $values['ENDPOINT_TYPE'] = $_POST['endpoint_type'] ;
  $updatesql.=",ENDPOINT_TYPE='".$values['ENDPOINT_TYPE']."'";
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
  $values['H323_GW_PREFIX'] = $_POST['h323_gw_prefix'] ;
  $updatesql.=",H323_GW_PREFIX='".$values['H323_GW_PREFIX']."'";
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
endif; 
if($values['TELPORT'] > 1): 
endif; 
if($values['H323_CONFIG_MODE'] == 'LINE_MODE'):
  $values['H323_LINE1_NUMBER'] = $_POST['line1_h323_phone_num'] ;
  $updatesql.=",H323_LINE1_NUMBER='".$values['H323_LINE1_NUMBER']."'";
  $values['H323_LINE1_H323_ID'] = $_POST['line1_h323_id'] ;
  $updatesql.=",H323_LINE1_H323_ID='".$values['H323_LINE1_H323_ID']."'";
  $values['H323_LINE1_GW_PREFIX'] = $_POST['line1_h323_gw_prefix'] ;
  $updatesql.=",H323_LINE1_GW_PREFIX='".$values['H323_LINE1_GW_PREFIX']."'";
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
if($values['TELPORT'] >= 2): 
endif; 
  $values['H323_LINE2_NUMBER'] = $_POST['line2_h323_phone_num'] ;
  $updatesql.=",H323_LINE2_NUMBER='".$values['H323_LINE2_NUMBER']."'";
  $values['H323_LINE2_H323_ID'] = $_POST['line2_h323_id'] ;
  $updatesql.=",H323_LINE2_H323_ID='".$values['H323_LINE2_H323_ID']."'";
  $values['H323_LINE2_GW_PREFIX'] = $_POST['line2_h323_gw_prefix'] ;
  $updatesql.=",H323_LINE2_GW_PREFIX='".$values['H323_LINE2_GW_PREFIX']."'";
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
if($values['TELPORT'] >= 3): 
endif; 
  $values['H323_LINE3_NUMBER'] = $_POST['line3_h323_phone_num'] ;
  $updatesql.=",H323_LINE3_NUMBER='".$values['H323_LINE3_NUMBER']."'";
  $values['H323_LINE3_H323_ID'] = $_POST['line3_h323_id'] ;
  $updatesql.=",H323_LINE3_H323_ID='".$values['H323_LINE3_H323_ID']."'";
  $values['H323_LINE3_GW_PREFIX'] = $_POST['line3_h323_gw_prefix'] ;
  $updatesql.=",H323_LINE3_GW_PREFIX='".$values['H323_LINE3_GW_PREFIX']."'";
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
if($values['TELPORT'] >= 4): 
endif; 
  $values['H323_LINE4_NUMBER'] = $_POST['line4_h323_phone_num'] ;
  $updatesql.=",H323_LINE4_NUMBER='".$values['H323_LINE4_NUMBER']."'";
  $values['H323_LINE4_H323_ID'] = $_POST['line4_h323_id'] ;
  $updatesql.=",H323_LINE4_H323_ID='".$values['H323_LINE4_H323_ID']."'";
  $values['H323_LINE4_GW_PREFIX'] = $_POST['line4_h323_gw_prefix'] ;
  $updatesql.=",H323_LINE4_GW_PREFIX='".$values['H323_LINE4_GW_PREFIX']."'";
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
if($values['TELPORT'] >= 5): 
endif; 
  $values['H323_LINE5_NUMBER'] = $_POST['line5_h323_phone_num'] ;
  $updatesql.=",H323_LINE5_NUMBER='".$values['H323_LINE5_NUMBER']."'";
  $values['H323_LINE5_H323_ID'] = $_POST['line5_h323_id'] ;
  $updatesql.=",H323_LINE5_H323_ID='".$values['H323_LINE5_H323_ID']."'";
  $values['H323_LINE5_GW_PREFIX'] = $_POST['line5_h323_gw_prefix'] ;
  $updatesql.=",H323_LINE5_GW_PREFIX='".$values['H323_LINE5_GW_PREFIX']."'";
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
if($values['TELPORT'] >= 6): 
endif; 
  $values['H323_LINE6_NUMBER'] = $_POST['line6_h323_phone_num'] ;
  $updatesql.=",H323_LINE6_NUMBER='".$values['H323_LINE6_NUMBER']."'";
  $values['H323_LINE6_H323_ID'] = $_POST['line6_h323_id'] ;
  $updatesql.=",H323_LINE6_H323_ID='".$values['H323_LINE6_H323_ID']."'";
  $values['H323_LINE6_GW_PREFIX'] = $_POST['line6_h323_gw_prefix'] ;
  $updatesql.=",H323_LINE6_GW_PREFIX='".$values['H323_LINE6_GW_PREFIX']."'";
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
if($values['TELPORT'] >= 7): 
endif; 
  $values['H323_LINE7_NUMBER'] = $_POST['line7_h323_phone_num'] ;
  $updatesql.=",H323_LINE7_NUMBER='".$values['H323_LINE7_NUMBER']."'";
  $values['H323_LINE7_H323_ID'] = $_POST['line7_h323_id'] ;
  $updatesql.=",H323_LINE7_H323_ID='".$values['H323_LINE7_H323_ID']."'";
  $values['H323_LINE7_GW_PREFIX'] = $_POST['line7_h323_gw_prefix'] ;
  $updatesql.=",H323_LINE7_GW_PREFIX='".$values['H323_LINE7_GW_PREFIX']."'";
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
if($values['TELPORT'] >= 8): 
endif; 
  $values['H323_LINE8_NUMBER'] = $_POST['line8_h323_phone_num'] ;
  $updatesql.=",H323_LINE8_NUMBER='".$values['H323_LINE8_NUMBER']."'";
  $values['H323_LINE8_H323_ID'] = $_POST['line8_h323_id'] ;
  $updatesql.=",H323_LINE8_H323_ID='".$values['H323_LINE8_H323_ID']."'";
  $values['H323_LINE8_GW_PREFIX'] = $_POST['line8_h323_gw_prefix'] ;
  $updatesql.=",H323_LINE8_GW_PREFIX='".$values['H323_LINE8_GW_PREFIX']."'";
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
if($values['TELPORT'] >= 9): 
endif; 
  $values['H323_LINE9_NUMBER'] = $_POST['line9_h323_phone_num'] ;
  $updatesql.=",H323_LINE9_NUMBER='".$values['H323_LINE9_NUMBER']."'";
  $values['H323_LINE9_H323_ID'] = $_POST['line9_h323_id'] ;
  $updatesql.=",H323_LINE9_H323_ID='".$values['H323_LINE9_H323_ID']."'";
  $values['H323_LINE9_GW_PREFIX'] = $_POST['line9_h323_gw_prefix'] ;
  $updatesql.=",H323_LINE9_GW_PREFIX='".$values['H323_LINE9_GW_PREFIX']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_LINE9_GKADDR'] = $_POST['line9_gk_addr'] ;
  $updatesql.=",H323_LINE9_GKADDR='".$values['H323_LINE9_GKADDR']."'";
endif; 
  $values['H323_LINE9_VOS_ENABLE'] = $_POST['line9_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_LINE9_VOS_ENABLE='".$values['H323_LINE9_VOS_ENABLE']."'";
if($values['H323_LINE9_VOS_ENABLE'] == 1):
  $values['H323_LINE9_VOS_MODE'] = $_POST['line9_vos_mod'] ;
  $updatesql.=",H323_LINE9_VOS_MODE='".$values['H323_LINE9_VOS_MODE']."'";
endif; 
  $values['H323_LINE9_AUTH'] = $_POST['line9_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_LINE9_AUTH='".$values['H323_LINE9_AUTH']."'";
if($values['H323_LINE9_AUTH'] == 1):
  $values['H323_LINE9_H235_ID'] = $_POST['line9_h235_id'] ;
  $updatesql.=",H323_LINE9_H235_ID='".$values['H323_LINE9_H235_ID']."'";
  $values['H323_LINE9_H235_PASSWD'] = $_POST['line9_h235_passwd'] ;
  $updatesql.=",H323_LINE9_H235_PASSWD='".$values['H323_LINE9_H235_PASSWD']."'";
endif; 
if($values['TELPORT'] >= 10): 
endif; 
  $values['H323_LINE10_NUMBER'] = $_POST['line10_h323_phone_num'] ;
  $updatesql.=",H323_LINE10_NUMBER='".$values['H323_LINE10_NUMBER']."'";
  $values['H323_LINE10_H323_ID'] = $_POST['line10_h323_id'] ;
  $updatesql.=",H323_LINE10_H323_ID='".$values['H323_LINE10_H323_ID']."'";
  $values['H323_LINE10_GW_PREFIX'] = $_POST['line10_h323_gw_prefix'] ;
  $updatesql.=",H323_LINE10_GW_PREFIX='".$values['H323_LINE10_GW_PREFIX']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_LINE10_GKADDR'] = $_POST['line10_gk_addr'] ;
  $updatesql.=",H323_LINE10_GKADDR='".$values['H323_LINE10_GKADDR']."'";
endif; 
  $values['H323_LINE10_VOS_ENABLE'] = $_POST['line10_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_LINE10_VOS_ENABLE='".$values['H323_LINE10_VOS_ENABLE']."'";
if($values['H323_LINE10_VOS_ENABLE'] == 1):
  $values['H323_LINE10_VOS_MODE'] = $_POST['line10_vos_mod'] ;
  $updatesql.=",H323_LINE10_VOS_MODE='".$values['H323_LINE10_VOS_MODE']."'";
endif; 
  $values['H323_LINE10_AUTH'] = $_POST['line10_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_LINE10_AUTH='".$values['H323_LINE10_AUTH']."'";
if($values['H323_LINE10_AUTH'] == 1):
  $values['H323_LINE10_H235_ID'] = $_POST['line10_h235_id'] ;
  $updatesql.=",H323_LINE10_H235_ID='".$values['H323_LINE10_H235_ID']."'";
  $values['H323_LINE10_H235_PASSWD'] = $_POST['line10_h235_passwd'] ;
  $updatesql.=",H323_LINE10_H235_PASSWD='".$values['H323_LINE10_H235_PASSWD']."'";
endif;
if($values['TELPORT'] >= 11): 
endif; 
  $values['H323_LINE11_NUMBER'] = $_POST['line11_h323_phone_num'] ;
  $updatesql.=",H323_LINE11_NUMBER='".$values['H323_LINE11_NUMBER']."'";
  $values['H323_LINE11_H323_ID'] = $_POST['line11_h323_id'] ;
  $updatesql.=",H323_LINE11_H323_ID='".$values['H323_LINE11_H323_ID']."'";
  $values['H323_LINE11_GW_PREFIX'] = $_POST['line11_h323_gw_prefix'] ;
  $updatesql.=",H323_LINE11_GW_PREFIX='".$values['H323_LINE11_GW_PREFIX']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_LINE11_GKADDR'] = $_POST['line11_gk_addr'] ;
  $updatesql.=",H323_LINE11_GKADDR='".$values['H323_LINE11_GKADDR']."'";
endif; 
  $values['H323_LINE11_VOS_ENABLE'] = $_POST['line11_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_LINE11_VOS_ENABLE='".$values['H323_LINE11_VOS_ENABLE']."'";
if($values['H323_LINE11_VOS_ENABLE'] == 1):
  $values['H323_LINE11_VOS_MODE'] = $_POST['line11_vos_mod'] ;
  $updatesql.=",H323_LINE11_VOS_MODE='".$values['H323_LINE11_VOS_MODE']."'";
endif; 
  $values['H323_LINE11_AUTH'] = $_POST['line11_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_LINE11_AUTH='".$values['H323_LINE11_AUTH']."'";
if($values['H323_LINE11_AUTH'] == 1):
  $values['H323_LINE11_H235_ID'] = $_POST['line11_h235_id'] ;
  $updatesql.=",H323_LINE11_H235_ID='".$values['H323_LINE11_H235_ID']."'";
  $values['H323_LINE11_H235_PASSWD'] = $_POST['line11_h235_passwd'] ;
  $updatesql.=",H323_LINE11_H235_PASSWD='".$values['H323_LINE11_H235_PASSWD']."'";
endif; 
if($values['TELPORT'] >= 12): 
endif; 
  $values['H323_LINE12_NUMBER'] = $_POST['line12_h323_phone_num'] ;
  $updatesql.=",H323_LINE12_NUMBER='".$values['H323_LINE12_NUMBER']."'";
  $values['H323_LINE12_H323_ID'] = $_POST['line12_h323_id'] ;
  $updatesql.=",H323_LINE12_H323_ID='".$values['H323_LINE12_H323_ID']."'";
  $values['H323_LINE12_GW_PREFIX'] = $_POST['line12_h323_gw_prefix'] ;
  $updatesql.=",H323_LINE12_GW_PREFIX='".$values['H323_LINE12_GW_PREFIX']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_LINE12_GKADDR'] = $_POST['line12_gk_addr'] ;
  $updatesql.=",H323_LINE12_GKADDR='".$values['H323_LINE12_GKADDR']."'";
endif; 
  $values['H323_LINE12_VOS_ENABLE'] = $_POST['line12_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_LINE12_VOS_ENABLE='".$values['H323_LINE12_VOS_ENABLE']."'";
if($values['H323_LINE12_VOS_ENABLE'] == 1):
  $values['H323_LINE12_VOS_MODE'] = $_POST['line12_vos_mod'] ;
  $updatesql.=",H323_LINE12_VOS_MODE='".$values['H323_LINE12_VOS_MODE']."'";
endif; 
  $values['H323_LINE12_AUTH'] = $_POST['line12_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_LINE12_AUTH='".$values['H323_LINE12_AUTH']."'";
if($values['H323_LINE12_AUTH'] == 1):
  $values['H323_LINE12_H235_ID'] = $_POST['line12_h235_id'] ;
  $updatesql.=",H323_LINE12_H235_ID='".$values['H323_LINE12_H235_ID']."'";
  $values['H323_LINE12_H235_PASSWD'] = $_POST['line12_h235_passwd'] ;
  $updatesql.=",H323_LINE12_H235_PASSWD='".$values['H323_LINE12_H235_PASSWD']."'";
endif;  
if($values['TELPORT'] >= 13): 
endif; 
  $values['H323_LINE13_NUMBER'] = $_POST['line13_h323_phone_num'] ;
  $updatesql.=",H323_LINE13_NUMBER='".$values['H323_LINE13_NUMBER']."'";
  $values['H323_LINE13_H323_ID'] = $_POST['line13_h323_id'] ;
  $updatesql.=",H323_LINE13_H323_ID='".$values['H323_LINE13_H323_ID']."'";
  $values['H323_LINE13_GW_PREFIX'] = $_POST['line13_h323_gw_prefix'] ;
  $updatesql.=",H323_LINE13_GW_PREFIX='".$values['H323_LINE13_GW_PREFIX']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_LINE13_GKADDR'] = $_POST['line13_gk_addr'] ;
  $updatesql.=",H323_LINE13_GKADDR='".$values['H323_LINE13_GKADDR']."'";
endif; 
  $values['H323_LINE13_VOS_ENABLE'] = $_POST['line13_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_LINE13_VOS_ENABLE='".$values['H323_LINE13_VOS_ENABLE']."'";
if($values['H323_LINE13_VOS_ENABLE'] == 1):
  $values['H323_LINE13_VOS_MODE'] = $_POST['line13_vos_mod'] ;
  $updatesql.=",H323_LINE13_VOS_MODE='".$values['H323_LINE13_VOS_MODE']."'";
endif; 
  $values['H323_LINE13_AUTH'] = $_POST['line13_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_LINE13_AUTH='".$values['H323_LINE13_AUTH']."'";
if($values['H323_LINE13_AUTH'] == 1):
  $values['H323_LINE13_H235_ID'] = $_POST['line13_h235_id'] ;
  $updatesql.=",H323_LINE13_H235_ID='".$values['H323_LINE13_H235_ID']."'";
  $values['H323_LINE13_H235_PASSWD'] = $_POST['line13_h235_passwd'] ;
  $updatesql.=",H323_LINE13_H235_PASSWD='".$values['H323_LINE13_H235_PASSWD']."'";
endif;
if($values['TELPORT'] >= 14): 
endif; 
  $values['H323_LINE14_NUMBER'] = $_POST['line14_h323_phone_num'] ;
  $updatesql.=",H323_LINE14_NUMBER='".$values['H323_LINE14_NUMBER']."'";
  $values['H323_LINE14_H323_ID'] = $_POST['line14_h323_id'] ;
  $updatesql.=",H323_LINE14_H323_ID='".$values['H323_LINE14_H323_ID']."'";
  $values['H323_LINE14_GW_PREFIX'] = $_POST['line14_h323_gw_prefix'] ;
  $updatesql.=",H323_LINE14_GW_PREFIX='".$values['H323_LINE14_GW_PREFIX']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_LINE14_GKADDR'] = $_POST['line14_gk_addr'] ;
  $updatesql.=",H323_LINE14_GKADDR='".$values['H323_LINE14_GKADDR']."'";
endif; 
  $values['H323_LINE14_VOS_ENABLE'] = $_POST['line14_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_LINE14_VOS_ENABLE='".$values['H323_LINE14_VOS_ENABLE']."'";
if($values['H323_LINE14_VOS_ENABLE'] == 1):
  $values['H323_LINE14_VOS_MODE'] = $_POST['line14_vos_mod'] ;
  $updatesql.=",H323_LINE14_VOS_MODE='".$values['H323_LINE14_VOS_MODE']."'";
endif; 
  $values['H323_LINE14_AUTH'] = $_POST['line14_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_LINE14_AUTH='".$values['H323_LINE14_AUTH']."'";
if($values['H323_LINE14_AUTH'] == 1):
  $values['H323_LINE14_H235_ID'] = $_POST['line14_h235_id'] ;
  $updatesql.=",H323_LINE14_H235_ID='".$values['H323_LINE14_H235_ID']."'";
  $values['H323_LINE14_H235_PASSWD'] = $_POST['line14_h235_passwd'] ;
  $updatesql.=",H323_LINE14_H235_PASSWD='".$values['H323_LINE14_H235_PASSWD']."'";
endif;  
if($values['TELPORT'] >= 15): 
endif; 
  $values['H323_LINE15_NUMBER'] = $_POST['line15_h323_phone_num'] ;
  $updatesql.=",H323_LINE15_NUMBER='".$values['H323_LINE15_NUMBER']."'";
  $values['H323_LINE15_H323_ID'] = $_POST['line15_h323_id'] ;
  $updatesql.=",H323_LINE15_H323_ID='".$values['H323_LINE15_H323_ID']."'";
  $values['H323_LINE15_GW_PREFIX'] = $_POST['line15_h323_gw_prefix'] ;
  $updatesql.=",H323_LINE15_GW_PREFIX='".$values['H323_LINE15_GW_PREFIX']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_LINE15_GKADDR'] = $_POST['line15_gk_addr'] ;
  $updatesql.=",H323_LINE15_GKADDR='".$values['H323_LINE15_GKADDR']."'";
endif; 
  $values['H323_LINE15_VOS_ENABLE'] = $_POST['line15_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_LINE15_VOS_ENABLE='".$values['H323_LINE15_VOS_ENABLE']."'";
if($values['H323_LINE15_VOS_ENABLE'] == 1):
  $values['H323_LINE15_VOS_MODE'] = $_POST['line15_vos_mod'] ;
  $updatesql.=",H323_LINE15_VOS_MODE='".$values['H323_LINE15_VOS_MODE']."'";
endif; 
  $values['H323_LINE15_AUTH'] = $_POST['line15_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_LINE15_AUTH='".$values['H323_LINE15_AUTH']."'";
if($values['H323_LINE15_AUTH'] == 1):
  $values['H323_LINE15_H235_ID'] = $_POST['line15_h235_id'] ;
  $updatesql.=",H323_LINE15_H235_ID='".$values['H323_LINE15_H235_ID']."'";
  $values['H323_LINE15_H235_PASSWD'] = $_POST['line15_h235_passwd'] ;
  $updatesql.=",H323_LINE15_H235_PASSWD='".$values['H323_LINE15_H235_PASSWD']."'";
endif;    
if($values['TELPORT'] >= 16): 
endif; 
  $values['H323_LINE16_NUMBER'] = $_POST['line16_h323_phone_num'] ;
  $updatesql.=",H323_LINE16_NUMBER='".$values['H323_LINE16_NUMBER']."'";
  $values['H323_LINE16_H323_ID'] = $_POST['line16_h323_id'] ;
  $updatesql.=",H323_LINE16_H323_ID='".$values['H323_LINE16_H323_ID']."'";
  $values['H323_LINE16_GW_PREFIX'] = $_POST['line16_h323_gw_prefix'] ;
  $updatesql.=",H323_LINE16_GW_PREFIX='".$values['H323_LINE16_GW_PREFIX']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_LINE16_GKADDR'] = $_POST['line16_gk_addr'] ;
  $updatesql.=",H323_LINE16_GKADDR='".$values['H323_LINE16_GKADDR']."'";
endif; 
  $values['H323_LINE16_VOS_ENABLE'] = $_POST['line16_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_LINE16_VOS_ENABLE='".$values['H323_LINE16_VOS_ENABLE']."'";
if($values['H323_LINE16_VOS_ENABLE'] == 1):
  $values['H323_LINE16_VOS_MODE'] = $_POST['line16_vos_mod'] ;
  $updatesql.=",H323_LINE16_VOS_MODE='".$values['H323_LINE16_VOS_MODE']."'";
endif; 
  $values['H323_LINE16_AUTH'] = $_POST['line16_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_LINE16_AUTH='".$values['H323_LINE16_AUTH']."'";
if($values['H323_LINE16_AUTH'] == 1):
  $values['H323_LINE16_H235_ID'] = $_POST['line16_h235_id'] ;
  $updatesql.=",H323_LINE16_H235_ID='".$values['H323_LINE16_H235_ID']."'";
  $values['H323_LINE16_H235_PASSWD'] = $_POST['line16_h235_passwd'] ;
  $updatesql.=",H323_LINE16_H235_PASSWD='".$values['H323_LINE16_H235_PASSWD']."'";
endif;  
endif; 
if($values['H323_CONFIG_MODE'] == 'GROUP_MODE'):
  $values['H323_GROUP1_NUMBER'] = $_POST['group1_h323_phone_num'] ;
  $updatesql.=",H323_GROUP1_NUMBER='".$values['H323_GROUP1_NUMBER']."'";
  $values['H323_GROUP1_H323_ID'] = $_POST['group1_h323_id'] ;
  $updatesql.=",H323_GROUP1_H323_ID='".$values['H323_GROUP1_H323_ID']."'";
  $values['H323_GROUP1_GW_PREFIX'] = $_POST['group1_h323_gw_prefix'] ;
  $updatesql.=",H323_GROUP1_GW_PREFIX='".$values['H323_GROUP1_GW_PREFIX']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_GROUP1_GKADDR'] = $_POST['group1_gk_addr'] ;
  $updatesql.=",H323_GROUP1_GKADDR='".$values['H323_GROUP1_GKADDR']."'";
endif; 
  $values['H323_G1_VOS_ENABLE'] = $_POST['group1_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_G1_VOS_ENABLE='".$values['H323_G1_VOS_ENABLE']."'";
if($values['H323_G1_VOS_ENABLE'] == 1):
  $values['H323_G1_VOS_MODE'] = $_POST['group1_vos_mod'] ;
  $updatesql.=",H323_G1_VOS_MODE='".$values['H323_G1_VOS_MODE']."'";
endif; 
  $values['H323_GROUP1_AUTH'] = $_POST['group1_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_GROUP1_AUTH='".$values['H323_GROUP1_AUTH']."'";
if($values['H323_GROUP1_AUTH'] == 1):
  $values['H323_GROUP1_H235_ID'] = $_POST['group1_h235_id'] ;
  $updatesql.=",H323_GROUP1_H235_ID='".$values['H323_GROUP1_H235_ID']."'";
  $values['H323_GROUP1_H235_PASSWD'] = $_POST['group1_h235_passwd'] ;
  $updatesql.=",H323_GROUP1_H235_PASSWD='".$values['H323_GROUP1_H235_PASSWD']."'";
endif; 
  $values['H323_L1_IN_G1'] = $_POST['h323_line1_in_group1']=='on'?'1':'0';
  $updatesql.=",H323_L1_IN_G1='".$values['H323_L1_IN_G1']."'";
if($values['TELPORT'] >= 2): 
  $values['H323_L2_IN_G1'] = $_POST['h323_line2_in_group1']=='on'?'1':'0';
  $updatesql.=",H323_L2_IN_G1='".$values['H323_L2_IN_G1']."'";
endif; 
if($values['TELPORT'] >= 3): 
  $values['H323_L3_IN_G1'] = $_POST['h323_line3_in_group1']=='on'?'1':'0';
  $updatesql.=",H323_L3_IN_G1='".$values['H323_L3_IN_G1']."'";
endif; 
if($values['TELPORT'] >= 4): 
  $values['H323_L4_IN_G1'] = $_POST['h323_line4_in_group1']=='on'?'1':'0';
  $updatesql.=",H323_L4_IN_G1='".$values['H323_L4_IN_G1']."'";
endif; 
if($values['TELPORT'] >= 5): 
  $values['H323_L5_IN_G1'] = $_POST['h323_line5_in_group1']=='on'?'1':'0';
  $updatesql.=",H323_L5_IN_G1='".$values['H323_L5_IN_G1']."'";
endif; 
if($values['TELPORT'] >= 6): 
  $values['H323_L6_IN_G1'] = $_POST['h323_line6_in_group1']=='on'?'1':'0';
  $updatesql.=",H323_L6_IN_G1='".$values['H323_L6_IN_G1']."'";
endif; 
if($values['TELPORT'] >= 7): 
  $values['H323_L7_IN_G1'] = $_POST['h323_line7_in_group1']=='on'?'1':'0';
  $updatesql.=",H323_L7_IN_G1='".$values['H323_L7_IN_G1']."'";
endif; 
if($values['TELPORT'] >= 8): 
  $values['H323_L8_IN_G1'] = $_POST['h323_line8_in_group1']=='on'?'1':'0';
  $updatesql.=",H323_L8_IN_G1='".$values['H323_L8_IN_G1']."'";
endif;
if($values['TELPORT'] >= 9): 
  $values['H323_L9_IN_G1'] = $_POST['h323_line9_in_group1']=='on'?'1':'0';
  $updatesql.=",H323_L9_IN_G1='".$values['H323_L9_IN_G1']."'";
endif; 
if($values['TELPORT'] >= 10): 
  $values['H323_L10_IN_G1'] = $_POST['h323_line10_in_group1']=='on'?'1':'0';
  $updatesql.=",H323_L10_IN_G1='".$values['H323_L10_IN_G1']."'";
endif; 
if($values['TELPORT'] >= 11): 
  $values['H323_L11_IN_G1'] = $_POST['h323_line11_in_group1']=='on'?'1':'0';
  $updatesql.=",H323_L11_IN_G1='".$values['H323_L11_IN_G1']."'";
endif; 
if($values['TELPORT'] >= 12): 
  $values['H323_L12_IN_G1'] = $_POST['h323_line12_in_group1']=='on'?'1':'0';
  $updatesql.=",H323_L12_IN_G1='".$values['H323_L12_IN_G1']."'";
endif; 
if($values['TELPORT'] >= 13): 
  $values['H323_L13_IN_G1'] = $_POST['h323_line13_in_group1']=='on'?'1':'0';
  $updatesql.=",H323_L13_IN_G1='".$values['H323_L13_IN_G1']."'";
endif; 
if($values['TELPORT'] >= 14): 
  $values['H323_L14_IN_G1'] = $_POST['h323_line14_in_group1']=='on'?'1':'0';
  $updatesql.=",H323_L14_IN_G1='".$values['H323_L14_IN_G1']."'";
endif; 
if($values['TELPORT'] >= 15): 
  $values['H323_L15_IN_G1'] = $_POST['h323_line15_in_group1']=='on'?'1':'0';
  $updatesql.=",H323_L15_IN_G1='".$values['H323_L15_IN_G1']."'";
endif; 
if($values['TELPORT'] >= 16): 
  $values['H323_L16_IN_G1'] = $_POST['h323_line16_in_group1']=='on'?'1':'0';
  $updatesql.=",H323_L16_IN_G1='".$values['H323_L16_IN_G1']."'";
endif;  
  $values['H323_GROUP2_NUMBER'] = $_POST['group2_h323_phone_num'] ;
  $updatesql.=",H323_GROUP2_NUMBER='".$values['H323_GROUP2_NUMBER']."'";
  $values['H323_GROUP2_H323_ID'] = $_POST['group2_h323_id'] ;
  $updatesql.=",H323_GROUP2_H323_ID='".$values['H323_GROUP2_H323_ID']."'";
  $values['H323_GROUP2_GW_PREFIX'] = $_POST['group2_h323_gw_prefix'] ;
  $updatesql.=",H323_GROUP2_GW_PREFIX='".$values['H323_GROUP2_GW_PREFIX']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_GROUP2_GKADDR'] = $_POST['group2_gk_addr'] ;
  $updatesql.=",H323_GROUP2_GKADDR='".$values['H323_GROUP2_GKADDR']."'";
endif; 
  $values['H323_G2_VOS_ENABLE'] = $_POST['group2_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_G2_VOS_ENABLE='".$values['H323_G2_VOS_ENABLE']."'";
if($values['H323_G2_VOS_ENABLE'] == 1):
  $values['H323_G2_VOS_MODE'] = $_POST['group2_vos_mod'] ;
  $updatesql.=",H323_G2_VOS_MODE='".$values['H323_G2_VOS_MODE']."'";
endif; 
  $values['H323_GROUP2_AUTH'] = $_POST['group2_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_GROUP2_AUTH='".$values['H323_GROUP2_AUTH']."'";
if($values['H323_GROUP2_AUTH'] == 1):
  $values['H323_GROUP2_H235_ID'] = $_POST['group2_h235_id'] ;
  $updatesql.=",H323_GROUP2_H235_ID='".$values['H323_GROUP2_H235_ID']."'";
  $values['H323_GROUP2_H235_PASSWD'] = $_POST['group2_h235_passwd'] ;
  $updatesql.=",H323_GROUP2_H235_PASSWD='".$values['H323_GROUP2_H235_PASSWD']."'";
endif; 
  $values['H323_L1_IN_G2'] = $_POST['h323_line1_in_group2']=='on'?'1':'0';
  $updatesql.=",H323_L1_IN_G2='".$values['H323_L1_IN_G2']."'";
if($values['TELPORT'] >= 2): 
  $values['H323_L2_IN_G2'] = $_POST['h323_line2_in_group2']=='on'?'1':'0';
  $updatesql.=",H323_L2_IN_G2='".$values['H323_L2_IN_G2']."'";
endif; 
if($values['TELPORT'] >= 3): 
  $values['H323_L3_IN_G2'] = $_POST['h323_line3_in_group2']=='on'?'1':'0';
  $updatesql.=",H323_L3_IN_G2='".$values['H323_L3_IN_G2']."'";
endif; 
if($values['TELPORT'] >= 4): 
  $values['H323_L4_IN_G2'] = $_POST['h323_line4_in_group2']=='on'?'1':'0';
  $updatesql.=",H323_L4_IN_G2='".$values['H323_L4_IN_G2']."'";
endif; 
if($values['TELPORT'] >= 5): 
  $values['H323_L5_IN_G2'] = $_POST['h323_line5_in_group2']=='on'?'1':'0';
  $updatesql.=",H323_L5_IN_G2='".$values['H323_L5_IN_G2']."'";
endif; 
if($values['TELPORT'] >= 6): 
  $values['H323_L6_IN_G2'] = $_POST['h323_line6_in_group2']=='on'?'1':'0';
  $updatesql.=",H323_L6_IN_G2='".$values['H323_L6_IN_G2']."'";
endif; 
if($values['TELPORT'] >= 7): 
  $values['H323_L7_IN_G2'] = $_POST['h323_line7_in_group2']=='on'?'1':'0';
  $updatesql.=",H323_L7_IN_G2='".$values['H323_L7_IN_G2']."'";
endif; 
if($values['TELPORT'] >= 8): 
  $values['H323_L8_IN_G2'] = $_POST['h323_line8_in_group2']=='on'?'1':'0';
  $updatesql.=",H323_L8_IN_G2='".$values['H323_L8_IN_G2']."'";
endif; 
if($values['TELPORT'] >= 9): 
  $values['H323_L9_IN_G2'] = $_POST['h323_line9_in_group2']=='on'?'1':'0';
  $updatesql.=",H323_L9_IN_G2='".$values['H323_L9_IN_G2']."'";
endif; 
if($values['TELPORT'] >= 10): 
  $values['H323_L10_IN_G2'] = $_POST['h323_line10_in_group2']=='on'?'1':'0';
  $updatesql.=",H323_L10_IN_G2='".$values['H323_L10_IN_G2']."'";
endif; 
if($values['TELPORT'] >= 11): 
  $values['H323_L11_IN_G2'] = $_POST['h323_line11_in_group2']=='on'?'1':'0';
  $updatesql.=",H323_L11_IN_G2='".$values['H323_L11_IN_G2']."'";
endif; 
if($values['TELPORT'] >= 12): 
  $values['H323_L12_IN_G2'] = $_POST['h323_line12_in_group2']=='on'?'1':'0';
  $updatesql.=",H323_L12_IN_G2='".$values['H323_L12_IN_G2']."'";
endif; 
if($values['TELPORT'] >= 13): 
  $values['H323_L13_IN_G2'] = $_POST['h323_line13_in_group2']=='on'?'1':'0';
  $updatesql.=",H323_L13_IN_G2='".$values['H323_L13_IN_G2']."'";
endif; 
if($values['TELPORT'] >= 14): 
  $values['H323_L14_IN_G2'] = $_POST['h323_line14_in_group2']=='on'?'1':'0';
  $updatesql.=",H323_L14_IN_G2='".$values['H323_L14_IN_G2']."'";
endif; 
if($values['TELPORT'] >= 15): 
  $values['H323_L15_IN_G2'] = $_POST['h323_line15_in_group2']=='on'?'1':'0';
  $updatesql.=",H323_L15_IN_G2='".$values['H323_L15_IN_G2']."'";
endif; 
if($values['TELPORT'] >= 16): 
  $values['H323_L16_IN_G2'] = $_POST['h323_line16_in_group2']=='on'?'1':'0';
  $updatesql.=",H323_L16_IN_G2='".$values['H323_L16_IN_G2']."'";
endif; 
  $values['H323_GROUP3_NUMBER'] = $_POST['group3_h323_phone_num'] ;
  $updatesql.=",H323_GROUP3_NUMBER='".$values['H323_GROUP3_NUMBER']."'";
  $values['H323_GROUP3_H323_ID'] = $_POST['group3_h323_id'] ;
  $updatesql.=",H323_GROUP3_H323_ID='".$values['H323_GROUP3_H323_ID']."'";
  $values['H323_GROUP3_GW_PREFIX'] = $_POST['group3_h323_gw_prefix'] ;
  $updatesql.=",H323_GROUP3_GW_PREFIX='".$values['H323_GROUP3_GW_PREFIX']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_GROUP3_GKADDR'] = $_POST['group3_gk_addr'] ;
  $updatesql.=",H323_GROUP3_GKADDR='".$values['H323_GROUP3_GKADDR']."'";
endif; 
  $values['H323_G3_VOS_ENABLE'] = $_POST['group3_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_G3_VOS_ENABLE='".$values['H323_G3_VOS_ENABLE']."'";
if($values['H323_G3_VOS_ENABLE'] == 1):
  $values['H323_G3_VOS_MODE'] = $_POST['group3_vos_mod'] ;
  $updatesql.=",H323_G3_VOS_MODE='".$values['H323_G3_VOS_MODE']."'";
endif; 
  $values['H323_GROUP3_AUTH'] = $_POST['group3_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_GROUP3_AUTH='".$values['H323_GROUP3_AUTH']."'";
if($values['H323_GROUP3_AUTH'] == 1):
  $values['H323_GROUP3_H235_ID'] = $_POST['group3_h235_id'] ;
  $updatesql.=",H323_GROUP3_H235_ID='".$values['H323_GROUP3_H235_ID']."'";
  $values['H323_GROUP3_H235_PASSWD'] = $_POST['group3_h235_passwd'] ;
  $updatesql.=",H323_GROUP3_H235_PASSWD='".$values['H323_GROUP3_H235_PASSWD']."'";
endif; 
  $values['H323_L1_IN_G3'] = $_POST['h323_line1_in_group3']=='on'?'1':'0';
  $updatesql.=",H323_L1_IN_G3='".$values['H323_L1_IN_G3']."'";
if($values['TELPORT'] >= 2): 
  $values['H323_L2_IN_G3'] = $_POST['h323_line2_in_group3']=='on'?'1':'0';
  $updatesql.=",H323_L2_IN_G3='".$values['H323_L2_IN_G3']."'";
endif; 
if($values['TELPORT'] >= 3): 
  $values['H323_L3_IN_G3'] = $_POST['h323_line3_in_group3']=='on'?'1':'0';
  $updatesql.=",H323_L3_IN_G3='".$values['H323_L3_IN_G3']."'";
endif; 
if($values['TELPORT'] >= 4): 
  $values['H323_L4_IN_G3'] = $_POST['h323_line4_in_group3']=='on'?'1':'0';
  $updatesql.=",H323_L4_IN_G3='".$values['H323_L4_IN_G3']."'";
endif; 
if($values['TELPORT'] >= 5): 
  $values['H323_L5_IN_G3'] = $_POST['h323_line5_in_group3']=='on'?'1':'0';
  $updatesql.=",H323_L5_IN_G3='".$values['H323_L5_IN_G3']."'";
endif; 
if($values['TELPORT'] >= 6): 
  $values['H323_L6_IN_G3'] = $_POST['h323_line6_in_group3']=='on'?'1':'0';
  $updatesql.=",H323_L6_IN_G3='".$values['H323_L6_IN_G3']."'";
endif; 
if($values['TELPORT'] >= 7): 
  $values['H323_L7_IN_G3'] = $_POST['h323_line7_in_group3']=='on'?'1':'0';
  $updatesql.=",H323_L7_IN_G3='".$values['H323_L7_IN_G3']."'";
endif; 
if($values['TELPORT'] >= 8): 
  $values['H323_L8_IN_G3'] = $_POST['h323_line8_in_group3']=='on'?'1':'0';
  $updatesql.=",H323_L8_IN_G3='".$values['H323_L8_IN_G3']."'";
endif; 
if($values['TELPORT'] >= 9): 
  $values['H323_L9_IN_G3'] = $_POST['h323_line9_in_group3']=='on'?'1':'0';
  $updatesql.=",H323_L9_IN_G3='".$values['H323_L9_IN_G3']."'";
endif; 
if($values['TELPORT'] >= 10): 
  $values['H323_L10_IN_G3'] = $_POST['h323_line10_in_group3']=='on'?'1':'0';
  $updatesql.=",H323_L10_IN_G3='".$values['H323_L10_IN_G3']."'";
endif; 
if($values['TELPORT'] >= 11): 
  $values['H323_L11_IN_G3'] = $_POST['h323_line11_in_group3']=='on'?'1':'0';
  $updatesql.=",H323_L11_IN_G3='".$values['H323_L11_IN_G3']."'";
endif; 
if($values['TELPORT'] >= 12): 
  $values['H323_L12_IN_G3'] = $_POST['h323_line12_in_group3']=='on'?'1':'0';
  $updatesql.=",H323_L12_IN_G3='".$values['H323_L12_IN_G3']."'";
endif; 
if($values['TELPORT'] >= 13): 
  $values['H323_L13_IN_G3'] = $_POST['h323_line13_in_group3']=='on'?'1':'0';
  $updatesql.=",H323_L13_IN_G3='".$values['H323_L13_IN_G3']."'";
endif; 
if($values['TELPORT'] >= 14): 
  $values['H323_L14_IN_G3'] = $_POST['h323_line14_in_group3']=='on'?'1':'0';
  $updatesql.=",H323_L14_IN_G3='".$values['H323_L14_IN_G3']."'";
endif; 
if($values['TELPORT'] >= 15): 
  $values['H323_L15_IN_G3'] = $_POST['h323_line15_in_group3']=='on'?'1':'0';
  $updatesql.=",H323_L15_IN_G3='".$values['H323_L15_IN_G3']."'";
endif; 
if($values['TELPORT'] >= 16): 
  $values['H323_L16_IN_G3'] = $_POST['h323_line16_in_group3']=='on'?'1':'0';
  $updatesql.=",H323_L16_IN_G3='".$values['H323_L16_IN_G3']."'";
endif; 
  $values['H323_GROUP4_NUMBER'] = $_POST['group4_h323_phone_num'] ;
  $updatesql.=",H323_GROUP4_NUMBER='".$values['H323_GROUP4_NUMBER']."'";
  $values['H323_GROUP4_H323_ID'] = $_POST['group4_h323_id'] ;
  $updatesql.=",H323_GROUP4_H323_ID='".$values['H323_GROUP4_H323_ID']."'";
  $values['H323_GROUP4_GW_PREFIX'] = $_POST['group4_h323_gw_prefix'] ;
  $updatesql.=",H323_GROUP4_GW_PREFIX='".$values['H323_GROUP4_GW_PREFIX']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_GROUP4_GKADDR'] = $_POST['group4_gk_addr'] ;
  $updatesql.=",H323_GROUP4_GKADDR='".$values['H323_GROUP4_GKADDR']."'";
endif; 
  $values['H323_G4_VOS_ENABLE'] = $_POST['group4_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_G4_VOS_ENABLE='".$values['H323_G4_VOS_ENABLE']."'";
if($values['H323_G4_VOS_ENABLE'] == 1):
  $values['H323_G4_VOS_MODE'] = $_POST['group4_vos_mod'] ;
  $updatesql.=",H323_G4_VOS_MODE='".$values['H323_G4_VOS_MODE']."'";
endif; 
  $values['H323_GROUP4_AUTH'] = $_POST['group4_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_GROUP4_AUTH='".$values['H323_GROUP4_AUTH']."'";
if($values['H323_GROUP4_AUTH'] == 1):
  $values['H323_GROUP4_H235_ID'] = $_POST['group4_h235_id'] ;
  $updatesql.=",H323_GROUP4_H235_ID='".$values['H323_GROUP4_H235_ID']."'";
  $values['H323_GROUP4_H235_PASSWD'] = $_POST['group4_h235_passwd'] ;
  $updatesql.=",H323_GROUP4_H235_PASSWD='".$values['H323_GROUP4_H235_PASSWD']."'";
endif; 
  $values['H323_L1_IN_G4'] = $_POST['h323_line1_in_group4']=='on'?'1':'0';
  $updatesql.=",H323_L1_IN_G4='".$values['H323_L1_IN_G4']."'";
if($values['TELPORT'] >= 2): 
  $values['H323_L2_IN_G4'] = $_POST['h323_line2_in_group4']=='on'?'1':'0';
  $updatesql.=",H323_L2_IN_G4='".$values['H323_L2_IN_G4']."'";
endif; 
if($values['TELPORT'] >= 3): 
  $values['H323_L3_IN_G4'] = $_POST['h323_line3_in_group4']=='on'?'1':'0';
  $updatesql.=",H323_L3_IN_G4='".$values['H323_L3_IN_G4']."'";
endif; 
if($values['TELPORT'] >= 4): 
  $values['H323_L4_IN_G4'] = $_POST['h323_line4_in_group4']=='on'?'1':'0';
  $updatesql.=",H323_L4_IN_G4='".$values['H323_L4_IN_G4']."'";
endif; 
if($values['TELPORT'] >= 5): 
  $values['H323_L5_IN_G4'] = $_POST['h323_line5_in_group4']=='on'?'1':'0';
  $updatesql.=",H323_L5_IN_G4='".$values['H323_L5_IN_G4']."'";
endif; 
if($values['TELPORT'] >= 6): 
  $values['H323_L6_IN_G4'] = $_POST['h323_line6_in_group4']=='on'?'1':'0';
  $updatesql.=",H323_L6_IN_G4='".$values['H323_L6_IN_G4']."'";
endif; 
if($values['TELPORT'] >= 7): 
  $values['H323_L7_IN_G4'] = $_POST['h323_line7_in_group4']=='on'?'1':'0';
  $updatesql.=",H323_L7_IN_G4='".$values['H323_L7_IN_G4']."'";
endif; 
if($values['TELPORT'] >= 8): 
  $values['H323_L8_IN_G4'] = $_POST['h323_line8_in_group4']=='on'?'1':'0';
  $updatesql.=",H323_L8_IN_G4='".$values['H323_L8_IN_G4']."'";
endif; 
if($values['TELPORT'] >= 9): 
  $values['H323_L9_IN_G4'] = $_POST['h323_line9_in_group4']=='on'?'1':'0';
  $updatesql.=",H323_L9_IN_G4='".$values['H323_L9_IN_G4']."'";
endif; 
if($values['TELPORT'] >= 10): 
  $values['H323_L10_IN_G4'] = $_POST['h323_line10_in_group4']=='on'?'1':'0';
  $updatesql.=",H323_L10_IN_G4='".$values['H323_L10_IN_G4']."'";
endif; 
if($values['TELPORT'] >= 11): 
  $values['H323_L11_IN_G4'] = $_POST['h323_line11_in_group4']=='on'?'1':'0';
  $updatesql.=",H323_L11_IN_G4='".$values['H323_L11_IN_G4']."'";
endif; 
if($values['TELPORT'] >= 12): 
  $values['H323_L12_IN_G4'] = $_POST['h323_line12_in_group4']=='on'?'1':'0';
  $updatesql.=",H323_L12_IN_G4='".$values['H323_L12_IN_G4']."'";
endif; 
if($values['TELPORT'] >= 13): 
  $values['H323_L13_IN_G4'] = $_POST['h323_line13_in_group4']=='on'?'1':'0';
  $updatesql.=",H323_L13_IN_G4='".$values['H323_L13_IN_G4']."'";
endif; 
if($values['TELPORT'] >= 14): 
  $values['H323_L14_IN_G4'] = $_POST['h323_line14_in_group4']=='on'?'1':'0';
  $updatesql.=",H323_L14_IN_G4='".$values['H323_L14_IN_G4']."'";
endif; 
if($values['TELPORT'] >= 15): 
  $values['H323_L15_IN_G4'] = $_POST['h323_line15_in_group4']=='on'?'1':'0';
  $updatesql.=",H323_L15_IN_G4='".$values['H323_L15_IN_G4']."'";
endif; 
if($values['TELPORT'] >= 16): 
  $values['H323_L16_IN_G4'] = $_POST['h323_line16_in_group4']=='on'?'1':'0';
  $updatesql.=",H323_L16_IN_G4='".$values['H323_L16_IN_G4']."'";
endif; 
endif; 
endif; 
endif; 
if($values['ENDPOINT_TYPE'] == 'SIP'):

if($values['TELPORT'] > 1): 
  $values['SIP_CONFIG_MODE'] = $_POST['sip_config_mode'] ;
  $updatesql.=",SIP_CONFIG_MODE='".$values['SIP_CONFIG_MODE']."'";
endif; 
if($values['SIP_CONFIG_MODE'] == 'SINGLE_MODE'):
  $values['SIP_CONTACT0_DIAL_DIGITS'] = $_POST['sip_phone_number'] ;
  $updatesql.=",SIP_CONTACT0_DIAL_DIGITS='".$values['SIP_CONTACT0_DIAL_DIGITS']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT0_PROXY'] = $_POST['sip_proxy'] ;
  $updatesql.=",SIP_CONTACT0_PROXY='".$values['SIP_CONTACT0_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT0_SERVER'] = $_POST['sip_registrar'] ;
  $updatesql.=",SIP_CONTACT0_SERVER='".$values['SIP_CONTACT0_SERVER']."'";
endif; 
  $values['SIP_CONTACT0_REGISTER_EXPIRED'] = $_POST['sip_register_expired'] ;
  $updatesql.=",SIP_CONTACT0_REGISTER_EXPIRED='".$values['SIP_CONTACT0_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT0_OUTBOUND_PROXY'] = $_POST['sip_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT0_OUTBOUND_PROXY='".$values['SIP_CONTACT0_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT0_HOME_DOMAIN'] = $_POST['sip_home_domain'] ;
  $updatesql.=",SIP_CONTACT0_HOME_DOMAIN='".$values['SIP_CONTACT0_HOME_DOMAIN']."'";
  $values['SIP_CONTACT0_LOGIN'] = $_POST['sip_auth_id'] ;
  $updatesql.=",SIP_CONTACT0_LOGIN='".$values['SIP_CONTACT0_LOGIN']."'";
  $values['SIP_CONTACT0_PASSWD'] = $_POST['sip_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT0_PASSWD='".$values['SIP_CONTACT0_PASSWD']."'";
  $values['SIP_SMODE_USE_BSVR'] = $_POST['sip_backup_server']=='on'?'1':'0';
  $updatesql.=",SIP_SMODE_USE_BSVR='".$values['SIP_SMODE_USE_BSVR']."'";
if($values['SIP_SMODE_USE_BSVR'] == 1):
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT1_PROXY'] = $_POST['sip_backup_proxy'] ;
  $updatesql.=",SIP_CONTACT1_PROXY='".$values['SIP_CONTACT1_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT1_SERVER'] = $_POST['sip_backup_registrar'] ;
  $updatesql.=",SIP_CONTACT1_SERVER='".$values['SIP_CONTACT1_SERVER']."'";
endif; 
  $values['SIP_CONTACT1_HOME_DOMAIN'] = $_POST['sip_backup_home_domain'] ;
  $updatesql.=",SIP_CONTACT1_HOME_DOMAIN='".$values['SIP_CONTACT1_HOME_DOMAIN']."'";
endif; 
endif; 
if($values['TELPORT'] > 1): 
endif; 
if($values['SIP_CONFIG_MODE'] == 'LINE_MODE'):
  $values['SIP_CONTACT6_DIAL_DIGITS'] = $_POST['sip_line1_number'] ;
  $updatesql.=",SIP_CONTACT6_DIAL_DIGITS='".$values['SIP_CONTACT6_DIAL_DIGITS']."'";
  $values['SIP_CONTACT6_GW_PREFIX'] = $_POST['sip_line1_gw_prefix'] ;
  $updatesql.=",SIP_CONTACT6_GW_PREFIX='".$values['SIP_CONTACT6_GW_PREFIX']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT6_PROXY'] = $_POST['sip_line1_proxy'] ;
  $updatesql.=",SIP_CONTACT6_PROXY='".$values['SIP_CONTACT6_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT6_SERVER'] = $_POST['sip_line1_registrar'] ;
  $updatesql.=",SIP_CONTACT6_SERVER='".$values['SIP_CONTACT6_SERVER']."'";
endif; 
  $values['SIP_CONTACT6_REGISTER_EXPIRED'] = $_POST['sip_line1_register_expired'] ;
  $updatesql.=",SIP_CONTACT6_REGISTER_EXPIRED='".$values['SIP_CONTACT6_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT6_OUTBOUND_PROXY'] = $_POST['sip_line1_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT6_OUTBOUND_PROXY='".$values['SIP_CONTACT6_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT6_HOME_DOMAIN'] = $_POST['sip_line1_home_domain'] ;
  $updatesql.=",SIP_CONTACT6_HOME_DOMAIN='".$values['SIP_CONTACT6_HOME_DOMAIN']."'";
  $values['SIP_CONTACT6_LOGIN'] = $_POST['sip_line1_auth_id'] ;
  $updatesql.=",SIP_CONTACT6_LOGIN='".$values['SIP_CONTACT6_LOGIN']."'";
  $values['SIP_CONTACT6_PASSWD'] = $_POST['sip_line1_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT6_PASSWD='".$values['SIP_CONTACT6_PASSWD']."'";
if($values['TELPORT'] >= 2): 
endif; 
  $values['SIP_CONTACT7_DIAL_DIGITS'] = $_POST['sip_line2_number'] ;
  $updatesql.=",SIP_CONTACT7_DIAL_DIGITS='".$values['SIP_CONTACT7_DIAL_DIGITS']."'";
  $values['SIP_CONTACT7_GW_PREFIX'] = $_POST['sip_line2_gw_prefix'] ;
  $updatesql.=",SIP_CONTACT7_GW_PREFIX='".$values['SIP_CONTACT7_GW_PREFIX']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT7_PROXY'] = $_POST['sip_line2_proxy'] ;
  $updatesql.=",SIP_CONTACT7_PROXY='".$values['SIP_CONTACT7_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT7_SERVER'] = $_POST['sip_line2_registrar'] ;
  $updatesql.=",SIP_CONTACT7_SERVER='".$values['SIP_CONTACT7_SERVER']."'";
endif; 
  $values['SIP_CONTACT7_REGISTER_EXPIRED'] = $_POST['sip_line2_register_expired'] ;
  $updatesql.=",SIP_CONTACT7_REGISTER_EXPIRED='".$values['SIP_CONTACT7_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT7_OUTBOUND_PROXY'] = $_POST['sip_line2_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT7_OUTBOUND_PROXY='".$values['SIP_CONTACT7_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT7_HOME_DOMAIN'] = $_POST['sip_line2_home_domain'] ;
  $updatesql.=",SIP_CONTACT7_HOME_DOMAIN='".$values['SIP_CONTACT7_HOME_DOMAIN']."'";
  $values['SIP_CONTACT7_LOGIN'] = $_POST['sip_line2_auth_id'] ;
  $updatesql.=",SIP_CONTACT7_LOGIN='".$values['SIP_CONTACT7_LOGIN']."'";
  $values['SIP_CONTACT7_PASSWD'] = $_POST['sip_line2_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT7_PASSWD='".$values['SIP_CONTACT7_PASSWD']."'";
if($values['TELPORT'] >= 3): 
endif; 
  $values['SIP_CONTACT8_DIAL_DIGITS'] = $_POST['sip_line3_number'] ;
  $updatesql.=",SIP_CONTACT8_DIAL_DIGITS='".$values['SIP_CONTACT8_DIAL_DIGITS']."'";
  $values['SIP_CONTACT8_GW_PREFIX'] = $_POST['sip_line3_gw_prefix'] ;
  $updatesql.=",SIP_CONTACT8_GW_PREFIX='".$values['SIP_CONTACT8_GW_PREFIX']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT8_PROXY'] = $_POST['sip_line3_proxy'] ;
  $updatesql.=",SIP_CONTACT8_PROXY='".$values['SIP_CONTACT8_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT8_SERVER'] = $_POST['sip_line3_registrar'] ;
  $updatesql.=",SIP_CONTACT8_SERVER='".$values['SIP_CONTACT8_SERVER']."'";
endif; 
  $values['SIP_CONTACT8_REGISTER_EXPIRED'] = $_POST['sip_line3_register_expired'] ;
  $updatesql.=",SIP_CONTACT8_REGISTER_EXPIRED='".$values['SIP_CONTACT8_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT8_OUTBOUND_PROXY'] = $_POST['sip_line3_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT8_OUTBOUND_PROXY='".$values['SIP_CONTACT8_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT8_HOME_DOMAIN'] = $_POST['sip_line3_home_domain'] ;
  $updatesql.=",SIP_CONTACT8_HOME_DOMAIN='".$values['SIP_CONTACT8_HOME_DOMAIN']."'";
  $values['SIP_CONTACT8_LOGIN'] = $_POST['sip_line3_auth_id'] ;
  $updatesql.=",SIP_CONTACT8_LOGIN='".$values['SIP_CONTACT8_LOGIN']."'";
  $values['SIP_CONTACT8_PASSWD'] = $_POST['sip_line3_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT8_PASSWD='".$values['SIP_CONTACT8_PASSWD']."'";
if($values['TELPORT'] >= 4): 
endif; 
  $values['SIP_CONTACT9_DIAL_DIGITS'] = $_POST['sip_line4_number'] ;
  $updatesql.=",SIP_CONTACT9_DIAL_DIGITS='".$values['SIP_CONTACT9_DIAL_DIGITS']."'";
  $values['SIP_CONTACT9_GW_PREFIX'] = $_POST['sip_line4_gw_prefix'] ;
  $updatesql.=",SIP_CONTACT9_GW_PREFIX='".$values['SIP_CONTACT9_GW_PREFIX']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT9_PROXY'] = $_POST['sip_line4_proxy'] ;
  $updatesql.=",SIP_CONTACT9_PROXY='".$values['SIP_CONTACT9_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT9_SERVER'] = $_POST['sip_line4_registrar'] ;
  $updatesql.=",SIP_CONTACT9_SERVER='".$values['SIP_CONTACT9_SERVER']."'";
endif; 
  $values['SIP_CONTACT9_REGISTER_EXPIRED'] = $_POST['sip_line4_register_expired'] ;
  $updatesql.=",SIP_CONTACT9_REGISTER_EXPIRED='".$values['SIP_CONTACT9_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT9_OUTBOUND_PROXY'] = $_POST['sip_line4_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT9_OUTBOUND_PROXY='".$values['SIP_CONTACT9_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT9_HOME_DOMAIN'] = $_POST['sip_line4_home_domain'] ;
  $updatesql.=",SIP_CONTACT9_HOME_DOMAIN='".$values['SIP_CONTACT9_HOME_DOMAIN']."'";
  $values['SIP_CONTACT9_LOGIN'] = $_POST['sip_line4_auth_id'] ;
  $updatesql.=",SIP_CONTACT9_LOGIN='".$values['SIP_CONTACT9_LOGIN']."'";
  $values['SIP_CONTACT9_PASSWD'] = $_POST['sip_line4_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT9_PASSWD='".$values['SIP_CONTACT9_PASSWD']."'";
if($values['TELPORT'] >= 5): 
endif; 
  $values['SIP_CONTACT10_DIAL_DIGITS'] = $_POST['sip_line5_number'] ;
  $updatesql.=",SIP_CONTACT10_DIAL_DIGITS='".$values['SIP_CONTACT10_DIAL_DIGITS']."'";
  $values['SIP_CONTACT10_GW_PREFIX'] = $_POST['sip_line5_gw_prefix'] ;
  $updatesql.=",SIP_CONTACT10_GW_PREFIX='".$values['SIP_CONTACT10_GW_PREFIX']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT10_PROXY'] = $_POST['sip_line5_proxy'] ;
  $updatesql.=",SIP_CONTACT10_PROXY='".$values['SIP_CONTACT10_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT10_SERVER'] = $_POST['sip_line5_registrar'] ;
  $updatesql.=",SIP_CONTACT10_SERVER='".$values['SIP_CONTACT10_SERVER']."'";
endif; 
  $values['SIP_CONTACT10_REGISTER_EXPIRED'] = $_POST['sip_line5_register_expired'] ;
  $updatesql.=",SIP_CONTACT10_REGISTER_EXPIRED='".$values['SIP_CONTACT10_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT10_OUTBOUND_PROXY'] = $_POST['sip_line5_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT10_OUTBOUND_PROXY='".$values['SIP_CONTACT10_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT10_HOME_DOMAIN'] = $_POST['sip_line5_home_domain'] ;
  $updatesql.=",SIP_CONTACT10_HOME_DOMAIN='".$values['SIP_CONTACT10_HOME_DOMAIN']."'";
  $values['SIP_CONTACT10_LOGIN'] = $_POST['sip_line5_auth_id'] ;
  $updatesql.=",SIP_CONTACT10_LOGIN='".$values['SIP_CONTACT10_LOGIN']."'";
  $values['SIP_CONTACT10_PASSWD'] = $_POST['sip_line5_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT10_PASSWD='".$values['SIP_CONTACT10_PASSWD']."'";
if($values['TELPORT'] >= 6): 
endif; 
  $values['SIP_CONTACT11_DIAL_DIGITS'] = $_POST['sip_line6_number'] ;
  $updatesql.=",SIP_CONTACT11_DIAL_DIGITS='".$values['SIP_CONTACT11_DIAL_DIGITS']."'";
  $values['SIP_CONTACT11_GW_PREFIX'] = $_POST['sip_line6_gw_prefix'] ;
  $updatesql.=",SIP_CONTACT11_GW_PREFIX='".$values['SIP_CONTACT11_GW_PREFIX']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT11_PROXY'] = $_POST['sip_line6_proxy'] ;
  $updatesql.=",SIP_CONTACT11_PROXY='".$values['SIP_CONTACT11_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT11_SERVER'] = $_POST['sip_line6_registrar'] ;
  $updatesql.=",SIP_CONTACT11_SERVER='".$values['SIP_CONTACT11_SERVER']."'";
endif; 
  $values['SIP_CONTACT11_REGISTER_EXPIRED'] = $_POST['sip_line6_register_expired'] ;
  $updatesql.=",SIP_CONTACT11_REGISTER_EXPIRED='".$values['SIP_CONTACT11_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT11_OUTBOUND_PROXY'] = $_POST['sip_line6_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT11_OUTBOUND_PROXY='".$values['SIP_CONTACT11_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT11_HOME_DOMAIN'] = $_POST['sip_line6_home_domain'] ;
  $updatesql.=",SIP_CONTACT11_HOME_DOMAIN='".$values['SIP_CONTACT11_HOME_DOMAIN']."'";
  $values['SIP_CONTACT11_LOGIN'] = $_POST['sip_line6_auth_id'] ;
  $updatesql.=",SIP_CONTACT11_LOGIN='".$values['SIP_CONTACT11_LOGIN']."'";
  $values['SIP_CONTACT11_PASSWD'] = $_POST['sip_line6_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT11_PASSWD='".$values['SIP_CONTACT11_PASSWD']."'";
if($values['TELPORT'] >= 7): 
endif; 
  $values['SIP_CONTACT12_DIAL_DIGITS'] = $_POST['sip_line7_number'] ;
  $updatesql.=",SIP_CONTACT12_DIAL_DIGITS='".$values['SIP_CONTACT12_DIAL_DIGITS']."'";
  $values['SIP_CONTACT12_GW_PREFIX'] = $_POST['sip_line7_gw_prefix'] ;
  $updatesql.=",SIP_CONTACT12_GW_PREFIX='".$values['SIP_CONTACT12_GW_PREFIX']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT12_PROXY'] = $_POST['sip_line7_proxy'] ;
  $updatesql.=",SIP_CONTACT12_PROXY='".$values['SIP_CONTACT12_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT12_SERVER'] = $_POST['sip_line7_registrar'] ;
  $updatesql.=",SIP_CONTACT12_SERVER='".$values['SIP_CONTACT12_SERVER']."'";
endif; 
  $values['SIP_CONTACT12_REGISTER_EXPIRED'] = $_POST['sip_line7_register_expired'] ;
  $updatesql.=",SIP_CONTACT12_REGISTER_EXPIRED='".$values['SIP_CONTACT12_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT12_OUTBOUND_PROXY'] = $_POST['sip_line7_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT12_OUTBOUND_PROXY='".$values['SIP_CONTACT12_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT12_HOME_DOMAIN'] = $_POST['sip_line7_home_domain'] ;
  $updatesql.=",SIP_CONTACT12_HOME_DOMAIN='".$values['SIP_CONTACT12_HOME_DOMAIN']."'";
  $values['SIP_CONTACT12_LOGIN'] = $_POST['sip_line7_auth_id'] ;
  $updatesql.=",SIP_CONTACT12_LOGIN='".$values['SIP_CONTACT12_LOGIN']."'";
  $values['SIP_CONTACT12_PASSWD'] = $_POST['sip_line7_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT12_PASSWD='".$values['SIP_CONTACT12_PASSWD']."'";
if($values['TELPORT'] >= 8): 
endif; 
  $values['SIP_CONTACT13_DIAL_DIGITS'] = $_POST['sip_line8_number'] ;
  $updatesql.=",SIP_CONTACT13_DIAL_DIGITS='".$values['SIP_CONTACT13_DIAL_DIGITS']."'";
  $values['SIP_CONTACT13_GW_PREFIX'] = $_POST['sip_line8_gw_prefix'] ;
  $updatesql.=",SIP_CONTACT13_GW_PREFIX='".$values['SIP_CONTACT13_GW_PREFIX']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT13_PROXY'] = $_POST['sip_line8_proxy'] ;
  $updatesql.=",SIP_CONTACT13_PROXY='".$values['SIP_CONTACT13_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT13_SERVER'] = $_POST['sip_line8_registrar'] ;
  $updatesql.=",SIP_CONTACT13_SERVER='".$values['SIP_CONTACT13_SERVER']."'";
endif; 
  $values['SIP_CONTACT13_REGISTER_EXPIRED'] = $_POST['sip_line8_register_expired'] ;
  $updatesql.=",SIP_CONTACT13_REGISTER_EXPIRED='".$values['SIP_CONTACT13_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT13_OUTBOUND_PROXY'] = $_POST['sip_line8_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT13_OUTBOUND_PROXY='".$values['SIP_CONTACT13_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT13_HOME_DOMAIN'] = $_POST['sip_line8_home_domain'] ;
  $updatesql.=",SIP_CONTACT13_HOME_DOMAIN='".$values['SIP_CONTACT13_HOME_DOMAIN']."'";
  $values['SIP_CONTACT13_LOGIN'] = $_POST['sip_line8_auth_id'] ;
  $updatesql.=",SIP_CONTACT13_LOGIN='".$values['SIP_CONTACT13_LOGIN']."'";
  $values['SIP_CONTACT13_PASSWD'] = $_POST['sip_line8_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT13_PASSWD='".$values['SIP_CONTACT13_PASSWD']."'";
if($values['TELPORT'] >= 9): 
endif; 
  $values['SIP_CONTACT14_DIAL_DIGITS'] = $_POST['sip_line9_number'] ;
  $updatesql.=",SIP_CONTACT14_DIAL_DIGITS='".$values['SIP_CONTACT14_DIAL_DIGITS']."'";
  $values['SIP_CONTACT14_GW_PREFIX'] = $_POST['sip_line9_gw_prefix'] ;
  $updatesql.=",SIP_CONTACT14_GW_PREFIX='".$values['SIP_CONTACT14_GW_PREFIX']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT14_PROXY'] = $_POST['sip_line9_proxy'] ;
  $updatesql.=",SIP_CONTACT14_PROXY='".$values['SIP_CONTACT14_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT14_SERVER'] = $_POST['sip_line9_registrar'] ;
  $updatesql.=",SIP_CONTACT14_SERVER='".$values['SIP_CONTACT14_SERVER']."'";
endif; 
  $values['SIP_CONTACT14_REGISTER_EXPIRED'] = $_POST['sip_line9_register_expired'] ;
  $updatesql.=",SIP_CONTACT14_REGISTER_EXPIRED='".$values['SIP_CONTACT14_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT14_OUTBOUND_PROXY'] = $_POST['sip_line9_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT14_OUTBOUND_PROXY='".$values['SIP_CONTACT14_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT14_HOME_DOMAIN'] = $_POST['sip_line9_home_domain'] ;
  $updatesql.=",SIP_CONTACT14_HOME_DOMAIN='".$values['SIP_CONTACT14_HOME_DOMAIN']."'";
  $values['SIP_CONTACT14_LOGIN'] = $_POST['sip_line9_auth_id'] ;
  $updatesql.=",SIP_CONTACT14_LOGIN='".$values['SIP_CONTACT14_LOGIN']."'";
  $values['SIP_CONTACT14_PASSWD'] = $_POST['sip_line9_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT14_PASSWD='".$values['SIP_CONTACT14_PASSWD']."'";
if($values['TELPORT'] >= 1): 
endif; 
  $values['SIP_CONTACT15_DIAL_DIGITS'] = $_POST['sip_line10_number'] ;
  $updatesql.=",SIP_CONTACT15_DIAL_DIGITS='".$values['SIP_CONTACT15_DIAL_DIGITS']."'";
  $values['SIP_CONTACT15_GW_PREFIX'] = $_POST['sip_line10_gw_prefix'] ;
  $updatesql.=",SIP_CONTACT15_GW_PREFIX='".$values['SIP_CONTACT15_GW_PREFIX']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT15_PROXY'] = $_POST['sip_line10_proxy'] ;
  $updatesql.=",SIP_CONTACT15_PROXY='".$values['SIP_CONTACT15_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT15_SERVER'] = $_POST['sip_line10_registrar'] ;
  $updatesql.=",SIP_CONTACT15_SERVER='".$values['SIP_CONTACT15_SERVER']."'";
endif; 
  $values['SIP_CONTACT15_REGISTER_EXPIRED'] = $_POST['sip_line10_register_expired'] ;
  $updatesql.=",SIP_CONTACT15_REGISTER_EXPIRED='".$values['SIP_CONTACT15_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT15_OUTBOUND_PROXY'] = $_POST['sip_line10_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT15_OUTBOUND_PROXY='".$values['SIP_CONTACT15_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT15_HOME_DOMAIN'] = $_POST['sip_line10_home_domain'] ;
  $updatesql.=",SIP_CONTACT15_HOME_DOMAIN='".$values['SIP_CONTACT15_HOME_DOMAIN']."'";
  $values['SIP_CONTACT15_LOGIN'] = $_POST['sip_line10_auth_id'] ;
  $updatesql.=",SIP_CONTACT15_LOGIN='".$values['SIP_CONTACT15_LOGIN']."'";
  $values['SIP_CONTACT15_PASSWD'] = $_POST['sip_line10_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT15_PASSWD='".$values['SIP_CONTACT15_PASSWD']."'";
if($values['TELPORT'] >= 1): 
endif; 
  $values['SIP_CONTACT16_DIAL_DIGITS'] = $_POST['sip_line11_number'] ;
  $updatesql.=",SIP_CONTACT16_DIAL_DIGITS='".$values['SIP_CONTACT16_DIAL_DIGITS']."'";
  $values['SIP_CONTACT16_GW_PREFIX'] = $_POST['sip_line11_gw_prefix'] ;
  $updatesql.=",SIP_CONTACT16_GW_PREFIX='".$values['SIP_CONTACT16_GW_PREFIX']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT16_PROXY'] = $_POST['sip_line11_proxy'] ;
  $updatesql.=",SIP_CONTACT16_PROXY='".$values['SIP_CONTACT16_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT16_SERVER'] = $_POST['sip_line11_registrar'] ;
  $updatesql.=",SIP_CONTACT16_SERVER='".$values['SIP_CONTACT16_SERVER']."'";
endif; 
  $values['SIP_CONTACT16_REGISTER_EXPIRED'] = $_POST['sip_line11_register_expired'] ;
  $updatesql.=",SIP_CONTACT16_REGISTER_EXPIRED='".$values['SIP_CONTACT16_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT16_OUTBOUND_PROXY'] = $_POST['sip_line11_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT16_OUTBOUND_PROXY='".$values['SIP_CONTACT16_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT16_HOME_DOMAIN'] = $_POST['sip_line11_home_domain'] ;
  $updatesql.=",SIP_CONTACT16_HOME_DOMAIN='".$values['SIP_CONTACT16_HOME_DOMAIN']."'";
  $values['SIP_CONTACT16_LOGIN'] = $_POST['sip_line11_auth_id'] ;
  $updatesql.=",SIP_CONTACT16_LOGIN='".$values['SIP_CONTACT16_LOGIN']."'";
  $values['SIP_CONTACT16_PASSWD'] = $_POST['sip_line11_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT16_PASSWD='".$values['SIP_CONTACT16_PASSWD']."'";
if($values['TELPORT'] >= 1): 
endif; 
  $values['SIP_CONTACT17_DIAL_DIGITS'] = $_POST['sip_line12_number'] ;
  $updatesql.=",SIP_CONTACT17_DIAL_DIGITS='".$values['SIP_CONTACT17_DIAL_DIGITS']."'";
  $values['SIP_CONTACT17_GW_PREFIX'] = $_POST['sip_line12_gw_prefix'] ;
  $updatesql.=",SIP_CONTACT17_GW_PREFIX='".$values['SIP_CONTACT17_GW_PREFIX']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT17_PROXY'] = $_POST['sip_line12_proxy'] ;
  $updatesql.=",SIP_CONTACT17_PROXY='".$values['SIP_CONTACT17_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT17_SERVER'] = $_POST['sip_line12_registrar'] ;
  $updatesql.=",SIP_CONTACT17_SERVER='".$values['SIP_CONTACT17_SERVER']."'";
endif; 
  $values['SIP_CONTACT17_REGISTER_EXPIRED'] = $_POST['sip_line12_register_expired'] ;
  $updatesql.=",SIP_CONTACT17_REGISTER_EXPIRED='".$values['SIP_CONTACT17_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT17_OUTBOUND_PROXY'] = $_POST['sip_line12_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT17_OUTBOUND_PROXY='".$values['SIP_CONTACT17_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT17_HOME_DOMAIN'] = $_POST['sip_line12_home_domain'] ;
  $updatesql.=",SIP_CONTACT17_HOME_DOMAIN='".$values['SIP_CONTACT17_HOME_DOMAIN']."'";
  $values['SIP_CONTACT17_LOGIN'] = $_POST['sip_line12_auth_id'] ;
  $updatesql.=",SIP_CONTACT17_LOGIN='".$values['SIP_CONTACT17_LOGIN']."'";
  $values['SIP_CONTACT17_PASSWD'] = $_POST['sip_line12_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT17_PASSWD='".$values['SIP_CONTACT17_PASSWD']."'";
if($values['TELPORT'] >= 1): 
endif; 
  $values['SIP_CONTACT18_DIAL_DIGITS'] = $_POST['sip_line13_number'] ;
  $updatesql.=",SIP_CONTACT18_DIAL_DIGITS='".$values['SIP_CONTACT18_DIAL_DIGITS']."'";
  $values['SIP_CONTACT18_GW_PREFIX'] = $_POST['sip_line13_gw_prefix'] ;
  $updatesql.=",SIP_CONTACT18_GW_PREFIX='".$values['SIP_CONTACT18_GW_PREFIX']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT18_PROXY'] = $_POST['sip_line13_proxy'] ;
  $updatesql.=",SIP_CONTACT18_PROXY='".$values['SIP_CONTACT18_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT18_SERVER'] = $_POST['sip_line13_registrar'] ;
  $updatesql.=",SIP_CONTACT18_SERVER='".$values['SIP_CONTACT18_SERVER']."'";
endif; 
  $values['SIP_CONTACT18_REGISTER_EXPIRED'] = $_POST['sip_line13_register_expired'] ;
  $updatesql.=",SIP_CONTACT18_REGISTER_EXPIRED='".$values['SIP_CONTACT18_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT18_OUTBOUND_PROXY'] = $_POST['sip_line13_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT18_OUTBOUND_PROXY='".$values['SIP_CONTACT18_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT18_HOME_DOMAIN'] = $_POST['sip_line13_home_domain'] ;
  $updatesql.=",SIP_CONTACT18_HOME_DOMAIN='".$values['SIP_CONTACT18_HOME_DOMAIN']."'";
  $values['SIP_CONTACT18_LOGIN'] = $_POST['sip_line13_auth_id'] ;
  $updatesql.=",SIP_CONTACT18_LOGIN='".$values['SIP_CONTACT18_LOGIN']."'";
  $values['SIP_CONTACT18_PASSWD'] = $_POST['sip_line13_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT18_PASSWD='".$values['SIP_CONTACT18_PASSWD']."'";
if($values['TELPORT'] >= 1): 
endif; 
  $values['SIP_CONTACT19_DIAL_DIGITS'] = $_POST['sip_line14_number'] ;
  $updatesql.=",SIP_CONTACT19_DIAL_DIGITS='".$values['SIP_CONTACT19_DIAL_DIGITS']."'";
  $values['SIP_CONTACT19_GW_PREFIX'] = $_POST['sip_line14_gw_prefix'] ;
  $updatesql.=",SIP_CONTACT19_GW_PREFIX='".$values['SIP_CONTACT19_GW_PREFIX']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT19_PROXY'] = $_POST['sip_line14_proxy'] ;
  $updatesql.=",SIP_CONTACT19_PROXY='".$values['SIP_CONTACT19_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT19_SERVER'] = $_POST['sip_line14_registrar'] ;
  $updatesql.=",SIP_CONTACT19_SERVER='".$values['SIP_CONTACT19_SERVER']."'";
endif; 
  $values['SIP_CONTACT19_REGISTER_EXPIRED'] = $_POST['sip_line14_register_expired'] ;
  $updatesql.=",SIP_CONTACT19_REGISTER_EXPIRED='".$values['SIP_CONTACT19_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT19_OUTBOUND_PROXY'] = $_POST['sip_line14_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT19_OUTBOUND_PROXY='".$values['SIP_CONTACT19_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT19_HOME_DOMAIN'] = $_POST['sip_line14_home_domain'] ;
  $updatesql.=",SIP_CONTACT19_HOME_DOMAIN='".$values['SIP_CONTACT19_HOME_DOMAIN']."'";
  $values['SIP_CONTACT19_LOGIN'] = $_POST['sip_line14_auth_id'] ;
  $updatesql.=",SIP_CONTACT19_LOGIN='".$values['SIP_CONTACT19_LOGIN']."'";
  $values['SIP_CONTACT19_PASSWD'] = $_POST['sip_line14_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT19_PASSWD='".$values['SIP_CONTACT19_PASSWD']."'";
if($values['TELPORT'] >= 1): 
endif; 
  $values['SIP_CONTACT20_DIAL_DIGITS'] = $_POST['sip_line15_number'] ;
  $updatesql.=",SIP_CONTACT20_DIAL_DIGITS='".$values['SIP_CONTACT20_DIAL_DIGITS']."'";
  $values['SIP_CONTACT20_GW_PREFIX'] = $_POST['sip_line15_gw_prefix'] ;
  $updatesql.=",SIP_CONTACT20_GW_PREFIX='".$values['SIP_CONTACT20_GW_PREFIX']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT20_PROXY'] = $_POST['sip_line15_proxy'] ;
  $updatesql.=",SIP_CONTACT20_PROXY='".$values['SIP_CONTACT20_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT20_SERVER'] = $_POST['sip_line15_registrar'] ;
  $updatesql.=",SIP_CONTACT20_SERVER='".$values['SIP_CONTACT20_SERVER']."'";
endif; 
  $values['SIP_CONTACT20_REGISTER_EXPIRED'] = $_POST['sip_line15_register_expired'] ;
  $updatesql.=",SIP_CONTACT20_REGISTER_EXPIRED='".$values['SIP_CONTACT20_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT20_OUTBOUND_PROXY'] = $_POST['sip_line15_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT20_OUTBOUND_PROXY='".$values['SIP_CONTACT20_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT20_HOME_DOMAIN'] = $_POST['sip_line15_home_domain'] ;
  $updatesql.=",SIP_CONTACT20_HOME_DOMAIN='".$values['SIP_CONTACT20_HOME_DOMAIN']."'";
  $values['SIP_CONTACT20_LOGIN'] = $_POST['sip_line15_auth_id'] ;
  $updatesql.=",SIP_CONTACT20_LOGIN='".$values['SIP_CONTACT20_LOGIN']."'";
  $values['SIP_CONTACT20_PASSWD'] = $_POST['sip_line15_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT20_PASSWD='".$values['SIP_CONTACT20_PASSWD']."'";
if($values['TELPORT'] >= 1): 
endif; 
  $values['SIP_CONTACT21_DIAL_DIGITS'] = $_POST['sip_line16_number'] ;
  $updatesql.=",SIP_CONTACT21_DIAL_DIGITS='".$values['SIP_CONTACT21_DIAL_DIGITS']."'";
  $values['SIP_CONTACT21_GW_PREFIX'] = $_POST['sip_line16_gw_prefix'] ;
  $updatesql.=",SIP_CONTACT21_GW_PREFIX='".$values['SIP_CONTACT21_GW_PREFIX']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT21_PROXY'] = $_POST['sip_line16_proxy'] ;
  $updatesql.=",SIP_CONTACT21_PROXY='".$values['SIP_CONTACT21_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT21_SERVER'] = $_POST['sip_line16_registrar'] ;
  $updatesql.=",SIP_CONTACT21_SERVER='".$values['SIP_CONTACT21_SERVER']."'";
endif; 
  $values['SIP_CONTACT21_REGISTER_EXPIRED'] = $_POST['sip_line16_register_expired'] ;
  $updatesql.=",SIP_CONTACT21_REGISTER_EXPIRED='".$values['SIP_CONTACT21_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT21_OUTBOUND_PROXY'] = $_POST['sip_line16_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT21_OUTBOUND_PROXY='".$values['SIP_CONTACT21_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT21_HOME_DOMAIN'] = $_POST['sip_line16_home_domain'] ;
  $updatesql.=",SIP_CONTACT21_HOME_DOMAIN='".$values['SIP_CONTACT21_HOME_DOMAIN']."'";
  $values['SIP_CONTACT21_LOGIN'] = $_POST['sip_line16_auth_id'] ;
  $updatesql.=",SIP_CONTACT21_LOGIN='".$values['SIP_CONTACT21_LOGIN']."'";
  $values['SIP_CONTACT21_PASSWD'] = $_POST['sip_line16_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT21_PASSWD='".$values['SIP_CONTACT21_PASSWD']."'";
endif; 
if($values['TELPORT'] > 1): 
endif; 
if($values['SIP_CONFIG_MODE'] == 'GROUP_MODE'):
  $values['SIP_CONTACT2_DIAL_DIGITS'] = $_POST['sip_group1_number'] ;
  $updatesql.=",SIP_CONTACT2_DIAL_DIGITS='".$values['SIP_CONTACT2_DIAL_DIGITS']."'";
  $values['SIP_CONTACT2_GW_PREFIX'] = $_POST['sip_group1_gw_prefix'] ;
  $updatesql.=",SIP_CONTACT2_GW_PREFIX='".$values['SIP_CONTACT2_GW_PREFIX']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT2_PROXY'] = $_POST['sip_group1_proxy'] ;
  $updatesql.=",SIP_CONTACT2_PROXY='".$values['SIP_CONTACT2_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT2_SERVER'] = $_POST['sip_group1_registrar'] ;
  $updatesql.=",SIP_CONTACT2_SERVER='".$values['SIP_CONTACT2_SERVER']."'";
endif; 
  $values['SIP_CONTACT2_REGISTER_EXPIRED'] = $_POST['sip_group1_register_expired'] ;
  $updatesql.=",SIP_CONTACT2_REGISTER_EXPIRED='".$values['SIP_CONTACT2_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT2_OUTBOUND_PROXY'] = $_POST['sip_group1_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT2_OUTBOUND_PROXY='".$values['SIP_CONTACT2_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT2_HOME_DOMAIN'] = $_POST['sip_group1_home_domain'] ;
  $updatesql.=",SIP_CONTACT2_HOME_DOMAIN='".$values['SIP_CONTACT2_HOME_DOMAIN']."'";
  $values['SIP_CONTACT2_LOGIN'] = $_POST['sip_group1_auth_id'] ;
  $updatesql.=",SIP_CONTACT2_LOGIN='".$values['SIP_CONTACT2_LOGIN']."'";
  $values['SIP_CONTACT2_PASSWD'] = $_POST['sip_group1_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT2_PASSWD='".$values['SIP_CONTACT2_PASSWD']."'";
  $values['SIP_CONTACT3_DIAL_DIGITS'] = $_POST['sip_group2_number'] ;
  $updatesql.=",SIP_CONTACT3_DIAL_DIGITS='".$values['SIP_CONTACT3_DIAL_DIGITS']."'";
  $values['SIP_CONTACT3_GW_PREFIX'] = $_POST['sip_group2_gw_prefix'] ;
  $updatesql.=",SIP_CONTACT3_GW_PREFIX='".$values['SIP_CONTACT3_GW_PREFIX']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT3_PROXY'] = $_POST['sip_group2_proxy'] ;
  $updatesql.=",SIP_CONTACT3_PROXY='".$values['SIP_CONTACT3_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT3_SERVER'] = $_POST['sip_group2_registrar'] ;
  $updatesql.=",SIP_CONTACT3_SERVER='".$values['SIP_CONTACT3_SERVER']."'";
endif; 
  $values['SIP_CONTACT3_REGISTER_EXPIRED'] = $_POST['sip_group2_register_expired'] ;
  $updatesql.=",SIP_CONTACT3_REGISTER_EXPIRED='".$values['SIP_CONTACT3_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT3_OUTBOUND_PROXY'] = $_POST['sip_group2_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT3_OUTBOUND_PROXY='".$values['SIP_CONTACT3_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT3_HOME_DOMAIN'] = $_POST['sip_group2_home_domain'] ;
  $updatesql.=",SIP_CONTACT3_HOME_DOMAIN='".$values['SIP_CONTACT3_HOME_DOMAIN']."'";
  $values['SIP_CONTACT3_LOGIN'] = $_POST['sip_group2_auth_id'] ;
  $updatesql.=",SIP_CONTACT3_LOGIN='".$values['SIP_CONTACT3_LOGIN']."'";
  $values['SIP_CONTACT3_PASSWD'] = $_POST['sip_group2_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT3_PASSWD='".$values['SIP_CONTACT3_PASSWD']."'";
  $values['SIP_CONTACT4_DIAL_DIGITS'] = $_POST['sip_group3_number'] ;
  $updatesql.=",SIP_CONTACT4_DIAL_DIGITS='".$values['SIP_CONTACT4_DIAL_DIGITS']."'";
  $values['SIP_CONTACT4_GW_PREFIX'] = $_POST['sip_group3_gw_prefix'] ;
  $updatesql.=",SIP_CONTACT4_GW_PREFIX='".$values['SIP_CONTACT4_GW_PREFIX']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT4_PROXY'] = $_POST['sip_group3_proxy'] ;
  $updatesql.=",SIP_CONTACT4_PROXY='".$values['SIP_CONTACT4_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT4_SERVER'] = $_POST['sip_group3_registrar'] ;
  $updatesql.=",SIP_CONTACT4_SERVER='".$values['SIP_CONTACT4_SERVER']."'";
endif; 
  $values['SIP_CONTACT4_REGISTER_EXPIRED'] = $_POST['sip_group3_register_expired'] ;
  $updatesql.=",SIP_CONTACT4_REGISTER_EXPIRED='".$values['SIP_CONTACT4_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT4_OUTBOUND_PROXY'] = $_POST['sip_group3_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT4_OUTBOUND_PROXY='".$values['SIP_CONTACT4_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT4_HOME_DOMAIN'] = $_POST['sip_group3_home_domain'] ;
  $updatesql.=",SIP_CONTACT4_HOME_DOMAIN='".$values['SIP_CONTACT4_HOME_DOMAIN']."'";
  $values['SIP_CONTACT4_LOGIN'] = $_POST['sip_group3_auth_id'] ;
  $updatesql.=",SIP_CONTACT4_LOGIN='".$values['SIP_CONTACT4_LOGIN']."'";
  $values['SIP_CONTACT4_PASSWD'] = $_POST['sip_group3_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT4_PASSWD='".$values['SIP_CONTACT4_PASSWD']."'";
  $values['SIP_CONTACT5_DIAL_DIGITS'] = $_POST['sip_group4_number'] ;
  $updatesql.=",SIP_CONTACT5_DIAL_DIGITS='".$values['SIP_CONTACT5_DIAL_DIGITS']."'";
  $values['SIP_CONTACT5_GW_PREFIX'] = $_POST['sip_group4_gw_prefix'] ;
  $updatesql.=",SIP_CONTACT5_GW_PREFIX='".$values['SIP_CONTACT5_GW_PREFIX']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT5_PROXY'] = $_POST['sip_group4_proxy'] ;
  $updatesql.=",SIP_CONTACT5_PROXY='".$values['SIP_CONTACT5_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT5_SERVER'] = $_POST['sip_group4_registrar'] ;
  $updatesql.=",SIP_CONTACT5_SERVER='".$values['SIP_CONTACT5_SERVER']."'";
endif; 
  $values['SIP_CONTACT5_REGISTER_EXPIRED'] = $_POST['sip_group4_register_expired'] ;
  $updatesql.=",SIP_CONTACT5_REGISTER_EXPIRED='".$values['SIP_CONTACT5_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT5_OUTBOUND_PROXY'] = $_POST['sip_group4_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT5_OUTBOUND_PROXY='".$values['SIP_CONTACT5_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT5_HOME_DOMAIN'] = $_POST['sip_group4_home_domain'] ;
  $updatesql.=",SIP_CONTACT5_HOME_DOMAIN='".$values['SIP_CONTACT5_HOME_DOMAIN']."'";
  $values['SIP_CONTACT5_LOGIN'] = $_POST['sip_group4_auth_id'] ;
  $updatesql.=",SIP_CONTACT5_LOGIN='".$values['SIP_CONTACT5_LOGIN']."'";
  $values['SIP_CONTACT5_PASSWD'] = $_POST['sip_group4_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT5_PASSWD='".$values['SIP_CONTACT5_PASSWD']."'";
endif; 
if($values['SIP_CONFIG_MODE'] == 'TRUNK_GW_MODE'):
  $values['SIP_TRUNK_GW1'] = $_POST['sip_trunk_gw1'] ;
  $updatesql.=",SIP_TRUNK_GW1='".$values['SIP_TRUNK_GW1']."'";
  $values['SIP_TRUNK_GW2'] = $_POST['sip_trunk_gw2'] ;
  $updatesql.=",SIP_TRUNK_GW2='".$values['SIP_TRUNK_GW2']."'";
  $values['SIP_TRUNK_GW3'] = $_POST['sip_trunk_gw3'] ;
  $updatesql.=",SIP_TRUNK_GW3='".$values['SIP_TRUNK_GW3']."'";
  $values['SIP_TRUNK_NUMBER'] = $_POST['sip_trunk_number'] ;
  $updatesql.=",SIP_TRUNK_NUMBER='".$values['SIP_TRUNK_NUMBER']."'";
  $values['SIP_TRUNK_REGISTER_EXPIRED'] = $_POST['sip_trunk_register_expired'] ;
  $updatesql.=",SIP_TRUNK_REGISTER_EXPIRED='".$values['SIP_TRUNK_REGISTER_EXPIRED']."'";
  $values['SIP_TRUNK_AUTH_ID'] = $_POST['sip_trunk_auth_id'] ;
  $updatesql.=",SIP_TRUNK_AUTH_ID='".$values['SIP_TRUNK_AUTH_ID']."'";
  $values['SIP_TRUNK_AUTH_PASSWD'] = $_POST['sip_trunk_auth_passwd'] ;
  $updatesql.=",SIP_TRUNK_AUTH_PASSWD='".$values['SIP_TRUNK_AUTH_PASSWD']."'";
endif; 


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
  $values['H323_FASTSTART_EXTEND'] = $_POST['disable_fast_start_ext']=='on'?'1':'0';
  $updatesql.=",H323_FASTSTART_EXTEND='".$values['H323_FASTSTART_EXTEND']."'";
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

$values['SIP_RANDOM_LC_PORT'] = $_POST['sip_local_port_mode'] ;
  $updatesql.=",SIP_RANDOM_LC_PORT='".$values['SIP_RANDOM_LC_PORT']."'";
if($values['SIP_RANDOM_LC_PORT'] == '0'):
  $values['SIP_LOCAL_PORT'] = $_POST['sip_local_port'] ;
  $updatesql.=",SIP_LOCAL_PORT='".$values['SIP_LOCAL_PORT']."'";
endif; 
  $values['SIP_183'] = $_POST['sip_183'] ;
  $updatesql.=",SIP_183='".$values['SIP_183']."'";
  $values['NO_ANS_CODE'] = $_POST['no_ans_code'] ;
  $updatesql.=",NO_ANS_CODE='".$values['NO_ANS_CODE']."'";
  $values['SIP_INV_AUTH'] = $_POST['sip_inv_auth'] ;
  $updatesql.=",SIP_INV_AUTH='".$values['SIP_INV_AUTH']."'";
  $values['SIP_AS_PROXY'] = $_POST['sip_as_proxy']=='on'?'1':'0';
  $updatesql.=",SIP_AS_PROXY='".$values['SIP_AS_PROXY']."'";
if($values['SIP_AS_PROXY'] == '1'):
  $values['SIP_PROXY_PASSWD'] = $_POST['sip_proxy_passwd'] ;
  $updatesql.=",SIP_PROXY_PASSWD='".$values['SIP_PROXY_PASSWD']."'";
endif; 
  $values['SIP_NO_ALIVE'] = $_POST['sip_no_alive']=='on'?'0':'1';
  $updatesql.=",SIP_NO_ALIVE='".$values['SIP_NO_ALIVE']."'";
  $values['SIP_REG_MODE'] = $_POST['sip_reg_mode'] ;
  $updatesql.=",SIP_REG_MODE='".$values['SIP_REG_MODE']."'";
  $values['INBAND_DTMF'] = $_POST['sip_dtmf_type'] ;
  $updatesql.=",INBAND_DTMF='".$values['INBAND_DTMF']."'";
if($values['INBAND_DTMF'] == '0'):
  $values['SIP_OUTBAND_DTMF_TYPE'] = $_POST['sip_outband_dtmf_type'] ;
  $updatesql.=",SIP_OUTBAND_DTMF_TYPE='".$values['SIP_OUTBAND_DTMF_TYPE']."'";
endif;
if($values['SIP_OUTBAND_DTMF_TYPE'] == '1'):
  $values['DTMF_PAYLOAD_TYPE'] = $_POST['dtmf_payload'] ;
  $updatesql.=",DTMF_PAYLOAD_TYPE='".$values['DTMF_PAYLOAD_TYPE']."'";
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
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_NAT_TRAVERSAL'] = $_POST['sip_nat_traversal'] ;
  $updatesql.=",SIP_NAT_TRAVERSAL='".$values['SIP_NAT_TRAVERSAL']."'";
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
endif; 
if($values['SIP_NAT_TRAVERSAL'] == 'STUN'):
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_STUN_SERVER'] = $_POST['sip_stun_server'] ;
  $updatesql.=",SIP_STUN_SERVER='".$values['SIP_STUN_SERVER']."'";
endif; 
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
endif; 
if($values['SIP_NAT_TRAVERSAL'] == 'RELAY'):
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_RELAY_SERVER'] = $_POST['sip_relay_server'] ;
  $updatesql.=",SIP_RELAY_SERVER='".$values['SIP_RELAY_SERVER']."'";
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_RELAY_PORT'] = $_POST['sip_relay_port'] ;
  $updatesql.=",SIP_RELAY_PORT='".$values['SIP_RELAY_PORT']."'";
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_RELAY_USER'] = $_POST['sip_relay_user'] ;
  $updatesql.=",SIP_RELAY_USER='".$values['SIP_RELAY_USER']."'";
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_RELAY_PASSWD'] = $_POST['sip_relay_passwd'] ;
  $updatesql.=",SIP_RELAY_PASSWD='".$values['SIP_RELAY_PASSWD']."'";
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_RELAY_ENCRYPT'] = $_POST['sip_relay_encrypt']=='on'?'1':'0';
  $updatesql.=",SIP_RELAY_ENCRYPT='".$values['SIP_RELAY_ENCRYPT']."'";
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_RELAY_SERVER1'] = $_POST['sip_relay_server1'] ;
  $updatesql.=",SIP_RELAY_SERVER1='".$values['SIP_RELAY_SERVER1']."'";
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_RELAY_SERVER2'] = $_POST['sip_relay_server2'] ;
  $updatesql.=",SIP_RELAY_SERVER2='".$values['SIP_RELAY_SERVER2']."'";
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_RELAY_SERVER3'] = $_POST['sip_relay_server3'] ;
  $updatesql.=",SIP_RELAY_SERVER3='".$values['SIP_RELAY_SERVER3']."'";
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_RELAY_SERVER4'] = $_POST['sip_relay_server4'] ;
  $updatesql.=",SIP_RELAY_SERVER4='".$values['SIP_RELAY_SERVER4']."'";
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



  $values['L1_DISABLE_OUT'] = $_POST['line1_fw_to_pstn']=='on'?'0':'1';
  $updatesql.=",L1_DISABLE_OUT='".$values['L1_DISABLE_OUT']."'";
if($values['L1_DISABLE_OUT'] == 0):
  $values['L1_FW_NUM_TO_PSTN'] = $_POST['line1_fw_num_to_pstn'] ;
  $updatesql.=",L1_FW_NUM_TO_PSTN='".$values['L1_FW_NUM_TO_PSTN']."'";
  $values['L1_P_DIGIT_MAP'] = $_POST['line1_p_dial_plan'] ;
  $updatesql.=",L1_P_DIGIT_MAP='".$values['L1_P_DIGIT_MAP']."'";
  $values['LINE1_P_DPRST'] = $_POST['line1_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql.=",LINE1_P_DPRST='".$values['LINE1_P_DPRST']."'";
  $values['L1_FW2PSTN_AUTH_MODE'] = $_POST['line1_fw2pstn_auth_mode'] ;
  $updatesql.=",L1_FW2PSTN_AUTH_MODE='".$values['L1_FW2PSTN_AUTH_MODE']."'";
if($values['L1_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L1_FW_TO_PSTN_PASSWD'] = $_POST['line1_fw_to_pstn_passwd'] ;
  $updatesql.=",L1_FW_TO_PSTN_PASSWD='".$values['L1_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L1_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L1_FW_TO_PSTN_PASSWD'] = $_POST['l1_fw_to_pstn_passwd'] ;
  $updatesql.=",L1_FW_TO_PSTN_PASSWD='".$values['L1_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE1_OUT_INTERVAL'] = $_POST['line1_out_interval'] ;
  $updatesql.=",LINE1_OUT_INTERVAL='".$values['LINE1_OUT_INTERVAL']."'";
endif; 

if(!isset($_POST['line1_sms_sender']))
  	  $values['L1_SMS_SENDER']	= 0;
  else
  	  $values['L1_SMS_SENDER'] = $_POST['line1_sms_sender']=='on'?'1':'0';
  $updatesql.=",L1_SMS_SENDER='".$values['L1_SMS_SENDER']."'";
if($values['L1_SMS_SENDER'] == 1):
  $values['L1_SMS_SERVER'] = $_POST['line1_sms_server'] ;
  $updatesql.=",L1_SMS_SERVER='".$values['L1_SMS_SERVER']."'";
  $values['L1_SMS_PORT'] = $_POST['line1_sms_port'] ;
  $updatesql.=",L1_SMS_PORT='".$values['L1_SMS_PORT']."'";
  $values['L1_SMS_CLI_ID'] = $_POST['line1_sms_cli_id'] ;
  $updatesql.=",L1_SMS_CLI_ID='".$values['L1_SMS_CLI_ID']."'";
  $values['L1_SMS_CLI_PASSWD'] = $_POST['line1_sms_cli_passwd'] ;
  $updatesql.=",L1_SMS_CLI_PASSWD='".$values['L1_SMS_CLI_PASSWD']."'";
endif; 
  $values['LINE1_SMS_VALIDITY_TIME'] = $_POST['line1_sms_validity_time'] ;
  $updatesql.=",LINE1_SMS_VALIDITY_TIME='".$values['LINE1_SMS_VALIDITY_TIME']."'";
  $values['L1_DISABLE_SMS_ACK'] = $_POST['line1_sms_ack_enable']=='on'?'0':'1';
  $updatesql.=",L1_DISABLE_SMS_ACK='".$values['L1_DISABLE_SMS_ACK']."'";
 

$values['L1_DISABLE_IN'] = $_POST['line1_fw_to_voip']=='on'?'0':'1';
  $updatesql.=",L1_DISABLE_IN='".$values['L1_DISABLE_IN']."'";
if($values['L1_DISABLE_IN'] == 0):
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
if($values['L1_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L1_FW_TO_VOIP_PASSWD'] = $_POST['l1_fw_to_voip_passwd'] ;
  $updatesql.=",L1_FW_TO_VOIP_PASSWD='".$values['L1_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 

  $values['L1_GROUP_MODE'] = $_POST['line1_gsm_group_mode'] ;
  $updatesql.=",L1_GROUP_MODE='".$values['L1_GROUP_MODE']."'";
if($values['L1_GROUP_MODE'] == 'SVR'):
  $values['L1_GSM_FW_MODE'] = $_POST['line1_gsm_fw_mode'] ;
  $updatesql.=",L1_GSM_FW_MODE='".$values['L1_GSM_FW_MODE']."'";
  $values['L1_PARTNER_SVR'] = $_POST['line1_group_share_addr'] ;
  $updatesql.=",L1_PARTNER_SVR='".$values['L1_PARTNER_SVR']."'";
endif; 
if($values['L1_GROUP_MODE'] == 'CLI'):
  $values['L1_GROUP_SVR'] = $_POST['line1_group_svr_addr'] ;
  $updatesql.=",L1_GROUP_SVR='".$values['L1_GROUP_SVR']."'";
endif;
  $values['L1_GSM_NUMBER'] = $_POST['line1_gsm_num'] ;
  $updatesql.=",L1_GSM_NUMBER='".$values['L1_GSM_NUMBER']."'";
  $values['L1_CALLER_ANONYMOUS'] = $_POST['line1_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql.=",L1_CALLER_ANONYMOUS='".$values['L1_CALLER_ANONYMOUS']."'";
  
  
if($values['TELPORT'] >= 2): 
endif; 
  $values['L2_DISABLE_OUT'] = $_POST['line2_fw_to_pstn']=='on'?'0':'1';
  $updatesql.=",L2_DISABLE_OUT='".$values['L2_DISABLE_OUT']."'";
if($values['L2_DISABLE_OUT'] == 0):
  $values['L2_FW_NUM_TO_PSTN'] = $_POST['line2_fw_num_to_pstn'] ;
  $updatesql.=",L2_FW_NUM_TO_PSTN='".$values['L2_FW_NUM_TO_PSTN']."'";
  $values['L2_P_DIGIT_MAP'] = $_POST['line2_p_dial_plan'] ;
  $updatesql.=",L2_P_DIGIT_MAP='".$values['L2_P_DIGIT_MAP']."'";
  $values['LINE2_P_DPRST'] = $_POST['line2_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql.=",LINE2_P_DPRST='".$values['LINE2_P_DPRST']."'";
  $values['L2_FW2PSTN_AUTH_MODE'] = $_POST['line2_fw2pstn_auth_mode'] ;
  $updatesql.=",L2_FW2PSTN_AUTH_MODE='".$values['L2_FW2PSTN_AUTH_MODE']."'";
if($values['L2_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L2_FW_TO_PSTN_PASSWD'] = $_POST['line2_fw_to_pstn_passwd'] ;
  $updatesql.=",L2_FW_TO_PSTN_PASSWD='".$values['L2_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L2_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L2_FW_TO_PSTN_PASSWD'] = $_POST['l2_fw_to_pstn_passwd'] ;
  $updatesql.=",L2_FW_TO_PSTN_PASSWD='".$values['L2_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE2_OUT_INTERVAL'] = $_POST['line2_out_interval'] ;
  $updatesql.=",LINE2_OUT_INTERVAL='".$values['LINE2_OUT_INTERVAL']."'";
endif; 

   if(!isset($_POST['line2_sms_sender']))
  	  $values['L2_SMS_SENDER']	= 0;
  else
  	  $values['L2_SMS_SENDER'] = $_POST['line2_sms_sender']=='on'?'1':'0';
  $updatesql.=",L2_SMS_SENDER='".$values['L2_SMS_SENDER']."'";
if($values['L2_SMS_SENDER'] == 1):
  $values['L2_SMS_SERVER'] = $_POST['line2_sms_server'] ;
  $updatesql.=",L2_SMS_SERVER='".$values['L2_SMS_SERVER']."'";
  $values['L2_SMS_PORT'] = $_POST['line2_sms_port'] ;
  $updatesql.=",L2_SMS_PORT='".$values['L2_SMS_PORT']."'";
  $values['L2_SMS_CLI_ID'] = $_POST['line2_sms_cli_id'] ;
  $updatesql.=",L2_SMS_CLI_ID='".$values['L2_SMS_CLI_ID']."'";
  $values['L2_SMS_CLI_PASSWD'] = $_POST['line2_sms_cli_passwd'] ;
  $updatesql.=",L2_SMS_CLI_PASSWD='".$values['L2_SMS_CLI_PASSWD']."'";
endif; 
  $values['LINE2_SMS_VALIDITY_TIME'] = $_POST['line2_sms_validity_time'] ;
  $updatesql.=",LINE2_SMS_VALIDITY_TIME='".$values['LINE2_SMS_VALIDITY_TIME']."'";
  $values['L2_DISABLE_SMS_ACK'] = $_POST['line2_sms_ack_enable']=='on'?'0':'1';
  $updatesql.=",L2_DISABLE_SMS_ACK='".$values['L2_DISABLE_SMS_ACK']."'";


  $values['L2_DISABLE_IN'] = $_POST['line2_fw_to_voip']=='on'?'0':'1';
  $updatesql.=",L2_DISABLE_IN='".$values['L2_DISABLE_IN']."'";
if($values['L2_DISABLE_IN'] == 0):
  $values['L2_FW_NUM_TO_VOIP'] = $_POST['line2_fw_num_to_voip'] ;
  $updatesql.=",L2_FW_NUM_TO_VOIP='".$values['L2_FW_NUM_TO_VOIP']."'";
  $values['L2_V_DIGIT_MAP'] = $_POST['line2_v_dial_plan'] ;
  $updatesql.=",L2_V_DIGIT_MAP='".$values['L2_V_DIGIT_MAP']."'";
  $values['L2_FW2VOIP_AUTH_MODE'] = $_POST['line2_fw2voip_auth_mode'] ;
  $updatesql.=",L2_FW2VOIP_AUTH_MODE='".$values['L2_FW2VOIP_AUTH_MODE']."'";
if($values['L2_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L2_FW_TO_VOIP_PASSWD'] = $_POST['line2_fw_to_voip_passwd'] ;
  $updatesql.=",L2_FW_TO_VOIP_PASSWD='".$values['L2_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L2_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L2_FW_TO_VOIP_PASSWD'] = $_POST['l2_fw_to_voip_passwd'] ;
  $updatesql.=",L2_FW_TO_VOIP_PASSWD='".$values['L2_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 

  $values['L2_GROUP_MODE'] = $_POST['line2_gsm_group_mode'] ;
  $updatesql.=",L2_GROUP_MODE='".$values['L2_GROUP_MODE']."'";
if($values['L2_GROUP_MODE'] == 'SVR'):
  $values['L2_GSM_FW_MODE'] = $_POST['line2_gsm_fw_mode'] ;
  $updatesql.=",L2_GSM_FW_MODE='".$values['L2_GSM_FW_MODE']."'";
  $values['L2_PARTNER_SVR'] = $_POST['line2_group_share_addr'] ;
  $updatesql.=",L2_PARTNER_SVR='".$values['L2_PARTNER_SVR']."'";
endif; 
if($values['L2_GROUP_MODE'] == 'CLI'):
  $values['L2_GROUP_SVR'] = $_POST['line2_group_svr_addr'] ;
  $updatesql.=",L2_GROUP_SVR='".$values['L2_GROUP_SVR']."'";
endif;
  $values['L2_GSM_NUMBER'] = $_POST['line2_gsm_num'] ;
  $updatesql.=",L2_GSM_NUMBER='".$values['L2_GSM_NUMBER']."'";
  $values['L2_CALLER_ANONYMOUS'] = $_POST['line2_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql.=",L2_CALLER_ANONYMOUS='".$values['L2_CALLER_ANONYMOUS']."'";
 
if($values['TELPORT'] >= 3): 
endif; 

 $values['L3_DISABLE_OUT'] = $_POST['line3_fw_to_pstn']=='on'?'0':'1';
  $updatesql.=",L3_DISABLE_OUT='".$values['L3_DISABLE_OUT']."'";
if($values['L3_DISABLE_OUT'] == 0):
  $values['L3_FW_NUM_TO_PSTN'] = $_POST['line3_fw_num_to_pstn'] ;
  $updatesql.=",L3_FW_NUM_TO_PSTN='".$values['L3_FW_NUM_TO_PSTN']."'";
  $values['L3_P_DIGIT_MAP'] = $_POST['line3_p_dial_plan'] ;
  $updatesql.=",L3_P_DIGIT_MAP='".$values['L3_P_DIGIT_MAP']."'";
  $values['LINE3_P_DPRST'] = $_POST['line3_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql.=",LINE3_P_DPRST='".$values['LINE3_P_DPRST']."'";
  $values['L3_FW2PSTN_AUTH_MODE'] = $_POST['line3_fw2pstn_auth_mode'] ;
  $updatesql.=",L3_FW2PSTN_AUTH_MODE='".$values['L3_FW2PSTN_AUTH_MODE']."'";
if($values['L3_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L3_FW_TO_PSTN_PASSWD'] = $_POST['line3_fw_to_pstn_passwd'] ;
  $updatesql.=",L3_FW_TO_PSTN_PASSWD='".$values['L3_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L3_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L3_FW_TO_PSTN_PASSWD'] = $_POST['l3_fw_to_pstn_passwd'] ;
  $updatesql.=",L3_FW_TO_PSTN_PASSWD='".$values['L3_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE3_OUT_INTERVAL'] = $_POST['line3_out_interval'] ;
  $updatesql.=",LINE3_OUT_INTERVAL='".$values['LINE3_OUT_INTERVAL']."'";
endif; 

if(!isset($_POST['line3_sms_sender']))
  $values['L3_SMS_SENDER']	= 0;
else
  $values['L3_SMS_SENDER'] = $_POST['line3_sms_sender']=='on'?'1':'0';
  $updatesql.=",L3_SMS_SENDER='".$values['L3_SMS_SENDER']."'";
if($values['L3_SMS_SENDER'] == 1):
  $values['L3_SMS_SERVER'] = $_POST['line3_sms_server'] ;
  $updatesql.=",L3_SMS_SERVER='".$values['L3_SMS_SERVER']."'";
  $values['L3_SMS_PORT'] = $_POST['line3_sms_port'] ;
  $updatesql.=",L3_SMS_PORT='".$values['L3_SMS_PORT']."'";
  $values['L3_SMS_CLI_ID'] = $_POST['line3_sms_cli_id'] ;
  $updatesql.=",L3_SMS_CLI_ID='".$values['L3_SMS_CLI_ID']."'";
  $values['L3_SMS_CLI_PASSWD'] = $_POST['line3_sms_cli_passwd'] ;
  $updatesql.=",L3_SMS_CLI_PASSWD='".$values['L3_SMS_CLI_PASSWD']."'";
endif; 
 $values['LINE3_SMS_VALIDITY_TIME'] = $_POST['line3_sms_validity_time'] ;
  $updatesql.=",LINE3_SMS_VALIDITY_TIME='".$values['LINE3_SMS_VALIDITY_TIME']."'";
  $values['L3_DISABLE_SMS_ACK'] = $_POST['line3_sms_ack_enable']=='on'?'0':'1';
  $updatesql.=",L3_DISABLE_SMS_ACK='".$values['L3_DISABLE_SMS_ACK']."'";


 $values['L3_DISABLE_IN'] = $_POST['line3_fw_to_voip']=='on'?'0':'1';
  $updatesql.=",L3_DISABLE_IN='".$values['L3_DISABLE_IN']."'";
if($values['L3_DISABLE_IN'] == 0):
  $values['L3_FW_NUM_TO_VOIP'] = $_POST['line3_fw_num_to_voip'] ;
  $updatesql.=",L3_FW_NUM_TO_VOIP='".$values['L3_FW_NUM_TO_VOIP']."'";
  $values['L3_V_DIGIT_MAP'] = $_POST['line3_v_dial_plan'] ;
  $updatesql.=",L3_V_DIGIT_MAP='".$values['L3_V_DIGIT_MAP']."'";
  $values['L3_FW2VOIP_AUTH_MODE'] = $_POST['line3_fw2voip_auth_mode'] ;
  $updatesql.=",L3_FW2VOIP_AUTH_MODE='".$values['L3_FW2VOIP_AUTH_MODE']."'";
if($values['L3_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L3_FW_TO_VOIP_PASSWD'] = $_POST['line3_fw_to_voip_passwd'] ;
  $updatesql.=",L3_FW_TO_VOIP_PASSWD='".$values['L3_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L3_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L3_FW_TO_VOIP_PASSWD'] = $_POST['l3_fw_to_voip_passwd'] ;
  $updatesql.=",L3_FW_TO_VOIP_PASSWD='".$values['L3_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 

  $values['L3_GROUP_MODE'] = $_POST['line3_gsm_group_mode'] ;
  $updatesql.=",L3_GROUP_MODE='".$values['L3_GROUP_MODE']."'";
if($values['L3_GROUP_MODE'] == 'SVR'):
  $values['L3_GSM_FW_MODE'] = $_POST['line3_gsm_fw_mode'] ;
  $updatesql.=",L3_GSM_FW_MODE='".$values['L3_GSM_FW_MODE']."'";
  $values['L3_PARTNER_SVR'] = $_POST['line3_group_share_addr'] ;
  $updatesql.=",L3_PARTNER_SVR='".$values['L3_PARTNER_SVR']."'";
endif; 
if($values['L3_GROUP_MODE'] == 'CLI'):
  $values['L3_GROUP_SVR'] = $_POST['line3_group_svr_addr'] ;
  $updatesql.=",L3_GROUP_SVR='".$values['L3_GROUP_SVR']."'";
endif;
  $values['L3_GSM_NUMBER'] = $_POST['line3_gsm_num'] ;
  $updatesql.=",L3_GSM_NUMBER='".$values['L3_GSM_NUMBER']."'";
  $values['L3_CALLER_ANONYMOUS'] = $_POST['line3_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql.=",L3_CALLER_ANONYMOUS='".$values['L3_CALLER_ANONYMOUS']."'";
  
if($values['TELPORT'] >= 4): 
endif; 
 $values['L4_DISABLE_OUT'] = $_POST['line4_fw_to_pstn']=='on'?'0':'1';
  $updatesql.=",L4_DISABLE_OUT='".$values['L4_DISABLE_OUT']."'";
if($values['L4_DISABLE_OUT'] == 0):
  $values['L4_FW_NUM_TO_PSTN'] = $_POST['line4_fw_num_to_pstn'] ;
  $updatesql.=",L4_FW_NUM_TO_PSTN='".$values['L4_FW_NUM_TO_PSTN']."'";
  $values['L4_P_DIGIT_MAP'] = $_POST['line4_p_dial_plan'] ;
  $updatesql.=",L4_P_DIGIT_MAP='".$values['L4_P_DIGIT_MAP']."'";
  $values['LINE4_P_DPRST'] = $_POST['line4_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql.=",LINE4_P_DPRST='".$values['LINE4_P_DPRST']."'";
  $values['L4_FW2PSTN_AUTH_MODE'] = $_POST['line4_fw2pstn_auth_mode'] ;
  $updatesql.=",L4_FW2PSTN_AUTH_MODE='".$values['L4_FW2PSTN_AUTH_MODE']."'";
if($values['L4_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L4_FW_TO_PSTN_PASSWD'] = $_POST['line4_fw_to_pstn_passwd'] ;
  $updatesql.=",L4_FW_TO_PSTN_PASSWD='".$values['L4_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L4_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L4_FW_TO_PSTN_PASSWD'] = $_POST['l4_fw_to_pstn_passwd'] ;
  $updatesql.=",L4_FW_TO_PSTN_PASSWD='".$values['L4_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE4_OUT_INTERVAL'] = $_POST['line4_out_interval'] ;
  $updatesql.=",LINE4_OUT_INTERVAL='".$values['LINE4_OUT_INTERVAL']."'";
endif; 

if(!isset($_POST['line4_sms_sender']))
  $values['L4_SMS_SENDER']	= 0;
else
  $values['L4_SMS_SENDER'] = $_POST['line4_sms_sender']=='on'?'1':'0';
  $updatesql.=",L4_SMS_SENDER='".$values['L4_SMS_SENDER']."'";
if($values['L4_SMS_SENDER'] == 1):
  $values['L4_SMS_SERVER'] = $_POST['line4_sms_server'] ;
  $updatesql.=",L4_SMS_SERVER='".$values['L4_SMS_SERVER']."'";
  $values['L4_SMS_PORT'] = $_POST['line4_sms_port'] ;
  $updatesql.=",L4_SMS_PORT='".$values['L4_SMS_PORT']."'";
  $values['L4_SMS_CLI_ID'] = $_POST['line4_sms_cli_id'] ;
  $updatesql.=",L4_SMS_CLI_ID='".$values['L4_SMS_CLI_ID']."'";
  $values['L4_SMS_CLI_PASSWD'] = $_POST['line4_sms_cli_passwd'] ;
  $updatesql.=",L4_SMS_CLI_PASSWD='".$values['L4_SMS_CLI_PASSWD']."'";
endif; 
 $values['LINE4_SMS_VALIDITY_TIME'] = $_POST['line4_sms_validity_time'] ;
  $updatesql.=",LINE4_SMS_VALIDITY_TIME='".$values['LINE4_SMS_VALIDITY_TIME']."'";
  $values['L4_DISABLE_SMS_ACK'] = $_POST['line4_sms_ack_enable']=='on'?'0':'1';
  $updatesql.=",L4_DISABLE_SMS_ACK='".$values['L4_DISABLE_SMS_ACK']."'";


 $values['L4_DISABLE_IN'] = $_POST['line4_fw_to_voip']=='on'?'0':'1';
  $updatesql.=",L4_DISABLE_IN='".$values['L4_DISABLE_IN']."'";
if($values['L4_DISABLE_IN'] == 0):
  $values['L4_FW_NUM_TO_VOIP'] = $_POST['line4_fw_num_to_voip'] ;
  $updatesql.=",L4_FW_NUM_TO_VOIP='".$values['L4_FW_NUM_TO_VOIP']."'";
  $values['L4_V_DIGIT_MAP'] = $_POST['line4_v_dial_plan'] ;
  $updatesql.=",L4_V_DIGIT_MAP='".$values['L4_V_DIGIT_MAP']."'";
  $values['L4_FW2VOIP_AUTH_MODE'] = $_POST['line4_fw2voip_auth_mode'] ;
  $updatesql.=",L4_FW2VOIP_AUTH_MODE='".$values['L4_FW2VOIP_AUTH_MODE']."'";
if($values['L4_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L4_FW_TO_VOIP_PASSWD'] = $_POST['line4_fw_to_voip_passwd'] ;
  $updatesql.=",L4_FW_TO_VOIP_PASSWD='".$values['L4_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L4_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L4_FW_TO_VOIP_PASSWD'] = $_POST['l4_fw_to_voip_passwd'] ;
  $updatesql.=",L4_FW_TO_VOIP_PASSWD='".$values['L4_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 

  $values['L4_GROUP_MODE'] = $_POST['line4_gsm_group_mode'] ;
  $updatesql.=",L4_GROUP_MODE='".$values['L4_GROUP_MODE']."'";
if($values['L4_GROUP_MODE'] == 'SVR'):
  $values['L4_GSM_FW_MODE'] = $_POST['line4_gsm_fw_mode'] ;
  $updatesql.=",L4_GSM_FW_MODE='".$values['L4_GSM_FW_MODE']."'";
  $values['L4_PARTNER_SVR'] = $_POST['line4_group_share_addr'] ;
  $updatesql.=",L4_PARTNER_SVR='".$values['L4_PARTNER_SVR']."'";
endif; 
if($values['L4_GROUP_MODE'] == 'CLI'):
  $values['L4_GROUP_SVR'] = $_POST['line4_group_svr_addr'] ;
  $updatesql.=",L4_GROUP_SVR='".$values['L4_GROUP_SVR']."'";
endif;
  $values['L4_GSM_NUMBER'] = $_POST['line4_gsm_num'] ;
  $updatesql.=",L4_GSM_NUMBER='".$values['L4_GSM_NUMBER']."'";
  $values['L4_CALLER_ANONYMOUS'] = $_POST['line4_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql.=",L4_CALLER_ANONYMOUS='".$values['L4_CALLER_ANONYMOUS']."'";
 
if($values['TELPORT'] >= 5): 
endif; 
 $values['L5_DISABLE_OUT'] = $_POST['line5_fw_to_pstn']=='on'?'0':'1';
  $updatesql.=",L5_DISABLE_OUT='".$values['L5_DISABLE_OUT']."'";
if($values['L5_DISABLE_OUT'] == 0):
  $values['L5_FW_NUM_TO_PSTN'] = $_POST['line5_fw_num_to_pstn'] ;
  $updatesql.=",L5_FW_NUM_TO_PSTN='".$values['L5_FW_NUM_TO_PSTN']."'";
  $values['L5_P_DIGIT_MAP'] = $_POST['line5_p_dial_plan'] ;
  $updatesql.=",L5_P_DIGIT_MAP='".$values['L5_P_DIGIT_MAP']."'";
  $values['LINE5_P_DPRST'] = $_POST['line5_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql.=",LINE5_P_DPRST='".$values['LINE5_P_DPRST']."'";
  $values['L5_FW2PSTN_AUTH_MODE'] = $_POST['line5_fw2pstn_auth_mode'] ;
  $updatesql.=",L5_FW2PSTN_AUTH_MODE='".$values['L5_FW2PSTN_AUTH_MODE']."'";
if($values['L5_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L5_FW_TO_PSTN_PASSWD'] = $_POST['line5_fw_to_pstn_passwd'] ;
  $updatesql.=",L5_FW_TO_PSTN_PASSWD='".$values['L5_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L5_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L5_FW_TO_PSTN_PASSWD'] = $_POST['l5_fw_to_pstn_passwd'] ;
  $updatesql.=",L5_FW_TO_PSTN_PASSWD='".$values['L5_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE5_OUT_INTERVAL'] = $_POST['line5_out_interval'] ;
  $updatesql.=",LINE5_OUT_INTERVAL='".$values['LINE5_OUT_INTERVAL']."'";
endif; 

if(!isset($_POST['line5_sms_sender']))
  $values['L5_SMS_SENDER']	= 0;
else
  $values['L5_SMS_SENDER'] = $_POST['line5_sms_sender']=='on'?'1':'0';
  $updatesql.=",L5_SMS_SENDER='".$values['L5_SMS_SENDER']."'";
if($values['L5_SMS_SENDER'] == 1):
  $values['L5_SMS_SERVER'] = $_POST['line5_sms_server'] ;
  $updatesql.=",L5_SMS_SERVER='".$values['L5_SMS_SERVER']."'";
  $values['L5_SMS_PORT'] = $_POST['line5_sms_port'] ;
  $updatesql.=",L5_SMS_PORT='".$values['L5_SMS_PORT']."'";
  $values['L5_SMS_CLI_ID'] = $_POST['line5_sms_cli_id'] ;
  $updatesql.=",L5_SMS_CLI_ID='".$values['L5_SMS_CLI_ID']."'";
  $values['L5_SMS_CLI_PASSWD'] = $_POST['line5_sms_cli_passwd'] ;
  $updatesql.=",L5_SMS_CLI_PASSWD='".$values['L5_SMS_CLI_PASSWD']."'";
endif; 
  $values['LINE5_SMS_VALIDITY_TIME'] = $_POST['line5_sms_validity_time'] ;
  $updatesql.=",LINE5_SMS_VALIDITY_TIME='".$values['LINE5_SMS_VALIDITY_TIME']."'";
  $values['L5_DISABLE_SMS_ACK'] = $_POST['line5_sms_ack_enable']=='on'?'0':'1';
  $updatesql.=",L5_DISABLE_SMS_ACK='".$values['L5_DISABLE_SMS_ACK']."'";


  $values['L5_DISABLE_IN'] = $_POST['line5_fw_to_voip']=='on'?'0':'1';
  $updatesql.=",L5_DISABLE_IN='".$values['L5_DISABLE_IN']."'";
if($values['L5_DISABLE_IN'] == 0):
  $values['L5_FW_NUM_TO_VOIP'] = $_POST['line5_fw_num_to_voip'] ;
  $updatesql.=",L5_FW_NUM_TO_VOIP='".$values['L5_FW_NUM_TO_VOIP']."'";
  $values['L5_V_DIGIT_MAP'] = $_POST['line5_v_dial_plan'] ;
  $updatesql.=",L5_V_DIGIT_MAP='".$values['L5_V_DIGIT_MAP']."'";
  $values['L5_FW2VOIP_AUTH_MODE'] = $_POST['line5_fw2voip_auth_mode'] ;
  $updatesql.=",L5_FW2VOIP_AUTH_MODE='".$values['L5_FW2VOIP_AUTH_MODE']."'";
if($values['L5_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L5_FW_TO_VOIP_PASSWD'] = $_POST['line5_fw_to_voip_passwd'] ;
  $updatesql.=",L5_FW_TO_VOIP_PASSWD='".$values['L5_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L5_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L5_FW_TO_VOIP_PASSWD'] = $_POST['l5_fw_to_voip_passwd'] ;
  $updatesql.=",L5_FW_TO_VOIP_PASSWD='".$values['L5_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 

  $values['L5_GROUP_MODE'] = $_POST['line5_gsm_group_mode'] ;
  $updatesql.=",L5_GROUP_MODE='".$values['L5_GROUP_MODE']."'";
if($values['L5_GROUP_MODE'] == 'SVR'):
  $values['L5_GSM_FW_MODE'] = $_POST['line5_gsm_fw_mode'] ;
  $updatesql.=",L5_GSM_FW_MODE='".$values['L5_GSM_FW_MODE']."'";
  $values['L5_PARTNER_SVR'] = $_POST['line5_group_share_addr'] ;
  $updatesql.=",L5_PARTNER_SVR='".$values['L5_PARTNER_SVR']."'";
endif; 
if($values['L5_GROUP_MODE'] == 'CLI'):
  $values['L5_GROUP_SVR'] = $_POST['line5_group_svr_addr'] ;
  $updatesql.=",L5_GROUP_SVR='".$values['L5_GROUP_SVR']."'";
endif;
  $values['L5_GSM_NUMBER'] = $_POST['line5_gsm_num'] ;
  $updatesql.=",L5_GSM_NUMBER='".$values['L5_GSM_NUMBER']."'";
  $values['L5_CALLER_ANONYMOUS'] = $_POST['line5_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql.=",L5_CALLER_ANONYMOUS='".$values['L5_CALLER_ANONYMOUS']."'";
 
if($values['TELPORT'] >= 6): 
endif; 
  $values['L6_DISABLE_OUT'] = $_POST['line6_fw_to_pstn']=='on'?'0':'1';
  $updatesql.=",L6_DISABLE_OUT='".$values['L6_DISABLE_OUT']."'";
if($values['L6_DISABLE_OUT'] == 0):
  $values['L6_FW_NUM_TO_PSTN'] = $_POST['line6_fw_num_to_pstn'] ;
  $updatesql.=",L6_FW_NUM_TO_PSTN='".$values['L6_FW_NUM_TO_PSTN']."'";
  $values['L6_P_DIGIT_MAP'] = $_POST['line6_p_dial_plan'] ;
  $updatesql.=",L6_P_DIGIT_MAP='".$values['L6_P_DIGIT_MAP']."'";
  $values['LINE6_P_DPRST'] = $_POST['line6_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql.=",LINE6_P_DPRST='".$values['LINE6_P_DPRST']."'";
  $values['L6_FW2PSTN_AUTH_MODE'] = $_POST['line6_fw2pstn_auth_mode'] ;
  $updatesql.=",L6_FW2PSTN_AUTH_MODE='".$values['L6_FW2PSTN_AUTH_MODE']."'";
if($values['L6_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L6_FW_TO_PSTN_PASSWD'] = $_POST['line6_fw_to_pstn_passwd'] ;
  $updatesql.=",L6_FW_TO_PSTN_PASSWD='".$values['L6_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L6_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L6_FW_TO_PSTN_PASSWD'] = $_POST['l6_fw_to_pstn_passwd'] ;
  $updatesql.=",L6_FW_TO_PSTN_PASSWD='".$values['L6_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE6_OUT_INTERVAL'] = $_POST['line6_out_interval'] ;
  $updatesql.=",LINE6_OUT_INTERVAL='".$values['LINE6_OUT_INTERVAL']."'";
endif; 

if(!isset($_POST['line6_sms_sender']))
  $values['L6_SMS_SENDER']	= 0;
else 
  $values['L6_SMS_SENDER'] = $_POST['line6_sms_sender']=='on'?'1':'0';
  $updatesql.=",L6_SMS_SENDER='".$values['L6_SMS_SENDER']."'";
if($values['L6_SMS_SENDER'] == 1):
  $values['L6_SMS_SERVER'] = $_POST['line6_sms_server'] ;
  $updatesql.=",L6_SMS_SERVER='".$values['L6_SMS_SERVER']."'";
  $values['L6_SMS_PORT'] = $_POST['line6_sms_port'] ;
  $updatesql.=",L6_SMS_PORT='".$values['L6_SMS_PORT']."'";
  $values['L6_SMS_CLI_ID'] = $_POST['line6_sms_cli_id'] ;
  $updatesql.=",L6_SMS_CLI_ID='".$values['L6_SMS_CLI_ID']."'";
  $values['L6_SMS_CLI_PASSWD'] = $_POST['line6_sms_cli_passwd'] ;
  $updatesql.=",L6_SMS_CLI_PASSWD='".$values['L6_SMS_CLI_PASSWD']."'";
endif; 
 $values['LINE6_SMS_VALIDITY_TIME'] = $_POST['line6_sms_validity_time'] ;
  $updatesql.=",LINE6_SMS_VALIDITY_TIME='".$values['LINE6_SMS_VALIDITY_TIME']."'";
  $values['L6_DISABLE_SMS_ACK'] = $_POST['line6_sms_ack_enable']=='on'?'0':'1';
  $updatesql.=",L6_DISABLE_SMS_ACK='".$values['L6_DISABLE_SMS_ACK']."'";


 $values['L6_DISABLE_IN'] = $_POST['line6_fw_to_voip']=='on'?'0':'1';
  $updatesql.=",L6_DISABLE_IN='".$values['L6_DISABLE_IN']."'";
if($values['L6_DISABLE_IN'] == 0):
  $values['L6_FW_NUM_TO_VOIP'] = $_POST['line6_fw_num_to_voip'] ;
  $updatesql.=",L6_FW_NUM_TO_VOIP='".$values['L6_FW_NUM_TO_VOIP']."'";
  $values['L6_V_DIGIT_MAP'] = $_POST['line6_v_dial_plan'] ;
  $updatesql.=",L6_V_DIGIT_MAP='".$values['L6_V_DIGIT_MAP']."'";
  $values['L6_FW2VOIP_AUTH_MODE'] = $_POST['line6_fw2voip_auth_mode'] ;
  $updatesql.=",L6_FW2VOIP_AUTH_MODE='".$values['L6_FW2VOIP_AUTH_MODE']."'";
if($values['L6_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L6_FW_TO_VOIP_PASSWD'] = $_POST['line6_fw_to_voip_passwd'] ;
  $updatesql.=",L6_FW_TO_VOIP_PASSWD='".$values['L6_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L6_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L6_FW_TO_VOIP_PASSWD'] = $_POST['l6_fw_to_voip_passwd'] ;
  $updatesql.=",L6_FW_TO_VOIP_PASSWD='".$values['L6_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 

  $values['L6_GROUP_MODE'] = $_POST['line6_gsm_group_mode'] ;
  $updatesql.=",L6_GROUP_MODE='".$values['L6_GROUP_MODE']."'";
if($values['L6_GROUP_MODE'] == 'SVR'):
  $values['L6_GSM_FW_MODE'] = $_POST['line6_gsm_fw_mode'] ;
  $updatesql.=",L6_GSM_FW_MODE='".$values['L6_GSM_FW_MODE']."'";
  $values['L6_PARTNER_SVR'] = $_POST['line6_group_share_addr'] ;
  $updatesql.=",L6_PARTNER_SVR='".$values['L6_PARTNER_SVR']."'";
endif; 
if($values['L6_GROUP_MODE'] == 'CLI'):
  $values['L6_GROUP_SVR'] = $_POST['line6_group_svr_addr'] ;
  $updatesql.=",L6_GROUP_SVR='".$values['L6_GROUP_SVR']."'";
endif;
  $values['L6_GSM_NUMBER'] = $_POST['line6_gsm_num'] ;
  $updatesql.=",L6_GSM_NUMBER='".$values['L6_GSM_NUMBER']."'";
  $values['L6_CALLER_ANONYMOUS'] = $_POST['line6_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql.=",L6_CALLER_ANONYMOUS='".$values['L6_CALLER_ANONYMOUS']."'";
  
if($values['TELPORT'] >= 7): 
endif; 
  $values['L7_DISABLE_OUT'] = $_POST['line7_fw_to_pstn']=='on'?'0':'1';
  $updatesql.=",L7_DISABLE_OUT='".$values['L7_DISABLE_OUT']."'";
if($values['L7_DISABLE_OUT'] == 0):
  $values['L7_FW_NUM_TO_PSTN'] = $_POST['line7_fw_num_to_pstn'] ;
  $updatesql.=",L7_FW_NUM_TO_PSTN='".$values['L7_FW_NUM_TO_PSTN']."'";
  $values['L7_P_DIGIT_MAP'] = $_POST['line7_p_dial_plan'] ;
  $updatesql.=",L7_P_DIGIT_MAP='".$values['L7_P_DIGIT_MAP']."'";
  $values['LINE7_P_DPRST'] = $_POST['line7_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql.=",LINE7_P_DPRST='".$values['LINE7_P_DPRST']."'";
  $values['L7_FW2PSTN_AUTH_MODE'] = $_POST['line7_fw2pstn_auth_mode'] ;
  $updatesql.=",L7_FW2PSTN_AUTH_MODE='".$values['L7_FW2PSTN_AUTH_MODE']."'";
if($values['L7_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L7_FW_TO_PSTN_PASSWD'] = $_POST['line7_fw_to_pstn_passwd'] ;
  $updatesql.=",L7_FW_TO_PSTN_PASSWD='".$values['L7_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L7_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L7_FW_TO_PSTN_PASSWD'] = $_POST['l7_fw_to_pstn_passwd'] ;
  $updatesql.=",L7_FW_TO_PSTN_PASSWD='".$values['L7_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE7_OUT_INTERVAL'] = $_POST['line7_out_interval'] ;
  $updatesql.=",LINE7_OUT_INTERVAL='".$values['LINE7_OUT_INTERVAL']."'";
endif; 

if(!isset($_POST['line7_sms_sender']))
  $values['L7_SMS_SENDER']	= 0;
else
  $values['L7_SMS_SENDER'] = $_POST['line7_sms_sender']=='on'?'1':'0';
  $updatesql.=",L7_SMS_SENDER='".$values['L7_SMS_SENDER']."'";
if($values['L7_SMS_SENDER'] == 1):
  $values['L7_SMS_SERVER'] = $_POST['line7_sms_server'] ;
  $updatesql.=",L7_SMS_SERVER='".$values['L7_SMS_SERVER']."'";
  $values['L7_SMS_PORT'] = $_POST['line7_sms_port'] ;
  $updatesql.=",L7_SMS_PORT='".$values['L7_SMS_PORT']."'";
  $values['L7_SMS_CLI_ID'] = $_POST['line7_sms_cli_id'] ;
  $updatesql.=",L7_SMS_CLI_ID='".$values['L7_SMS_CLI_ID']."'";
  $values['L7_SMS_CLI_PASSWD'] = $_POST['line7_sms_cli_passwd'] ;
  $updatesql.=",L7_SMS_CLI_PASSWD='".$values['L7_SMS_CLI_PASSWD']."'";
endif; 
 $values['LINE7_SMS_VALIDITY_TIME'] = $_POST['line7_sms_validity_time'] ;
  $updatesql.=",LINE7_SMS_VALIDITY_TIME='".$values['LINE7_SMS_VALIDITY_TIME']."'";
  $values['L7_DISABLE_SMS_ACK'] = $_POST['line7_sms_ack_enable']=='on'?'0':'1';
  $updatesql.=",L7_DISABLE_SMS_ACK='".$values['L7_DISABLE_SMS_ACK']."'";


 $values['L7_DISABLE_IN'] = $_POST['line7_fw_to_voip']=='on'?'0':'1';
  $updatesql.=",L7_DISABLE_IN='".$values['L7_DISABLE_IN']."'";
if($values['L7_DISABLE_IN'] == 0):
  $values['L7_FW_NUM_TO_VOIP'] = $_POST['line7_fw_num_to_voip'] ;
  $updatesql.=",L7_FW_NUM_TO_VOIP='".$values['L7_FW_NUM_TO_VOIP']."'";
  $values['L7_V_DIGIT_MAP'] = $_POST['line7_v_dial_plan'] ;
  $updatesql.=",L7_V_DIGIT_MAP='".$values['L7_V_DIGIT_MAP']."'";
  $values['L7_FW2VOIP_AUTH_MODE'] = $_POST['line7_fw2voip_auth_mode'] ;
  $updatesql.=",L7_FW2VOIP_AUTH_MODE='".$values['L7_FW2VOIP_AUTH_MODE']."'";
if($values['L7_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L7_FW_TO_VOIP_PASSWD'] = $_POST['line7_fw_to_voip_passwd'] ;
  $updatesql.=",L7_FW_TO_VOIP_PASSWD='".$values['L7_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L7_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L7_FW_TO_VOIP_PASSWD'] = $_POST['l7_fw_to_voip_passwd'] ;
  $updatesql.=",L7_FW_TO_VOIP_PASSWD='".$values['L7_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 

  $values['L7_GROUP_MODE'] = $_POST['line7_gsm_group_mode'] ;
  $updatesql.=",L7_GROUP_MODE='".$values['L7_GROUP_MODE']."'";
if($values['L7_GROUP_MODE'] == 'SVR'):
  $values['L7_GSM_FW_MODE'] = $_POST['line7_gsm_fw_mode'] ;
  $updatesql.=",L7_GSM_FW_MODE='".$values['L7_GSM_FW_MODE']."'";
  $values['L7_PARTNER_SVR'] = $_POST['line7_group_share_addr'] ;
  $updatesql.=",L7_PARTNER_SVR='".$values['L7_PARTNER_SVR']."'";
endif; 
if($values['L7_GROUP_MODE'] == 'CLI'):
  $values['L7_GROUP_SVR'] = $_POST['line7_group_svr_addr'] ;
  $updatesql.=",L7_GROUP_SVR='".$values['L7_GROUP_SVR']."'";
endif;
  $values['L7_GSM_NUMBER'] = $_POST['line7_gsm_num'] ;
  $updatesql.=",L7_GSM_NUMBER='".$values['L7_GSM_NUMBER']."'";
  $values['L7_CALLER_ANONYMOUS'] = $_POST['line7_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql.=",L7_CALLER_ANONYMOUS='".$values['L7_CALLER_ANONYMOUS']."'";
  
if($values['TELPORT'] >= 8): 
endif; 
 $values['L8_DISABLE_OUT'] = $_POST['line8_fw_to_pstn']=='on'?'0':'1';
  $updatesql.=",L8_DISABLE_OUT='".$values['L8_DISABLE_OUT']."'";
if($values['L8_DISABLE_OUT'] == 0):
  $values['L8_FW_NUM_TO_PSTN'] = $_POST['line8_fw_num_to_pstn'] ;
  $updatesql.=",L8_FW_NUM_TO_PSTN='".$values['L8_FW_NUM_TO_PSTN']."'";
  $values['L8_P_DIGIT_MAP'] = $_POST['line8_p_dial_plan'] ;
  $updatesql.=",L8_P_DIGIT_MAP='".$values['L8_P_DIGIT_MAP']."'";
  $values['LINE8_P_DPRST'] = $_POST['line8_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql.=",LINE8_P_DPRST='".$values['LINE8_P_DPRST']."'";
  $values['L8_FW2PSTN_AUTH_MODE'] = $_POST['line8_fw2pstn_auth_mode'] ;
  $updatesql.=",L8_FW2PSTN_AUTH_MODE='".$values['L8_FW2PSTN_AUTH_MODE']."'";
if($values['L8_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L8_FW_TO_PSTN_PASSWD'] = $_POST['line8_fw_to_pstn_passwd'] ;
  $updatesql.=",L8_FW_TO_PSTN_PASSWD='".$values['L8_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L8_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L8_FW_TO_PSTN_PASSWD'] = $_POST['l8_fw_to_pstn_passwd'] ;
  $updatesql.=",L8_FW_TO_PSTN_PASSWD='".$values['L8_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE8_OUT_INTERVAL'] = $_POST['line8_out_interval'] ;
  $updatesql.=",LINE8_OUT_INTERVAL='".$values['LINE8_OUT_INTERVAL']."'";
endif; 

if(!isset($_POST['line8_sms_sender']))
  $values['L8_SMS_SENDER']	= 0;
else
  $values['L8_SMS_SENDER'] = $_POST['line8_sms_sender']=='on'?'1':'0';
  $updatesql.=",L8_SMS_SENDER='".$values['L8_SMS_SENDER']."'";
if($values['L8_SMS_SENDER'] == 1):
  $values['L8_SMS_SERVER'] = $_POST['line8_sms_server'] ;
  $updatesql.=",L8_SMS_SERVER='".$values['L8_SMS_SERVER']."'";
  $values['L8_SMS_PORT'] = $_POST['line8_sms_port'] ;
  $updatesql.=",L8_SMS_PORT='".$values['L8_SMS_PORT']."'";
  $values['L8_SMS_CLI_ID'] = $_POST['line8_sms_cli_id'] ;
  $updatesql.=",L8_SMS_CLI_ID='".$values['L8_SMS_CLI_ID']."'";
  $values['L8_SMS_CLI_PASSWD'] = $_POST['line8_sms_cli_passwd'] ;
  $updatesql.=",L8_SMS_CLI_PASSWD='".$values['L8_SMS_CLI_PASSWD']."'";
endif; 
 $values['LINE8_SMS_VALIDITY_TIME'] = $_POST['line8_sms_validity_time'] ;
  $updatesql.=",LINE8_SMS_VALIDITY_TIME='".$values['LINE8_SMS_VALIDITY_TIME']."'";
  $values['L8_DISABLE_SMS_ACK'] = $_POST['line8_sms_ack_enable']=='on'?'0':'1';
  $updatesql.=",L8_DISABLE_SMS_ACK='".$values['L8_DISABLE_SMS_ACK']."'";


  $values['L8_DISABLE_IN'] = $_POST['line8_fw_to_voip']=='on'?'0':'1';
  $updatesql.=",L8_DISABLE_IN='".$values['L8_DISABLE_IN']."'";
if($values['L8_DISABLE_IN'] == 0):
  $values['L8_FW_NUM_TO_VOIP'] = $_POST['line8_fw_num_to_voip'] ;
  $updatesql.=",L8_FW_NUM_TO_VOIP='".$values['L8_FW_NUM_TO_VOIP']."'";
  $values['L8_V_DIGIT_MAP'] = $_POST['line8_v_dial_plan'] ;
  $updatesql.=",L8_V_DIGIT_MAP='".$values['L8_V_DIGIT_MAP']."'";
  $values['L8_FW2VOIP_AUTH_MODE'] = $_POST['line8_fw2voip_auth_mode'] ;
  $updatesql.=",L8_FW2VOIP_AUTH_MODE='".$values['L8_FW2VOIP_AUTH_MODE']."'";
if($values['L8_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L8_FW_TO_VOIP_PASSWD'] = $_POST['line8_fw_to_voip_passwd'] ;
  $updatesql.=",L8_FW_TO_VOIP_PASSWD='".$values['L8_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L8_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L8_FW_TO_VOIP_PASSWD'] = $_POST['l8_fw_to_voip_passwd'] ;
  $updatesql.=",L8_FW_TO_VOIP_PASSWD='".$values['L8_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 
 
  $values['L8_GROUP_MODE'] = $_POST['line8_gsm_group_mode'] ;
  $updatesql.=",L8_GROUP_MODE='".$values['L8_GROUP_MODE']."'";
if($values['L8_GROUP_MODE'] == 'SVR'):
  $values['L8_GSM_FW_MODE'] = $_POST['line8_gsm_fw_mode'] ;
  $updatesql.=",L8_GSM_FW_MODE='".$values['L8_GSM_FW_MODE']."'";
  $values['L8_PARTNER_SVR'] = $_POST['line8_group_share_addr'] ;
  $updatesql.=",L8_PARTNER_SVR='".$values['L8_PARTNER_SVR']."'";
endif; 
if($values['L8_GROUP_MODE'] == 'CLI'):
  $values['L8_GROUP_SVR'] = $_POST['line8_group_svr_addr'] ;
  $updatesql.=",L8_GROUP_SVR='".$values['L8_GROUP_SVR']."'";
endif;
  $values['L8_GSM_NUMBER'] = $_POST['line8_gsm_num'] ;
  $updatesql.=",L8_GSM_NUMBER='".$values['L8_GSM_NUMBER']."'";
  $values['L8_CALLER_ANONYMOUS'] = $_POST['line8_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql.=",L8_CALLER_ANONYMOUS='".$values['L8_CALLER_ANONYMOUS']."'";
  
if($values['TELPORT'] >= 9): 
endif; 
  $values['L9_DISABLE_OUT'] = $_POST['line9_fw_to_pstn']=='on'?'0':'1';
  $updatesql.=",L9_DISABLE_OUT='".$values['L9_DISABLE_OUT']."'";
if($values['L9_DISABLE_OUT'] == 0):
  $values['L9_FW_NUM_TO_PSTN'] = $_POST['line9_fw_num_to_pstn'] ;
  $updatesql.=",L9_FW_NUM_TO_PSTN='".$values['L9_FW_NUM_TO_PSTN']."'";
  $values['L9_P_DIGIT_MAP'] = $_POST['line9_p_dial_plan'] ;
  $updatesql.=",L9_P_DIGIT_MAP='".$values['L9_P_DIGIT_MAP']."'";
  $values['LINE9_P_DPRST'] = $_POST['line9_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql.=",LINE9_P_DPRST='".$values['LINE9_P_DPRST']."'";
  $values['L9_FW2PSTN_AUTH_MODE'] = $_POST['line9_fw2pstn_auth_mode'] ;
  $updatesql.=",L9_FW2PSTN_AUTH_MODE='".$values['L9_FW2PSTN_AUTH_MODE']."'";
if($values['L9_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L9_FW_TO_PSTN_PASSWD'] = $_POST['line9_fw_to_pstn_passwd'] ;
  $updatesql.=",L9_FW_TO_PSTN_PASSWD='".$values['L9_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L9_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L9_FW_TO_PSTN_PASSWD'] = $_POST['l9_fw_to_pstn_passwd'] ;
  $updatesql.=",L9_FW_TO_PSTN_PASSWD='".$values['L9_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE9_OUT_INTERVAL'] = $_POST['line9_out_interval'] ;
  $updatesql.=",LINE9_OUT_INTERVAL='".$values['LINE9_OUT_INTERVAL']."'";
endif; 
if(!isset($_POST['line9_sms_sender']))
  $values['L9_SMS_SENDER']	= 0;
else
  $values['L9_SMS_SENDER'] = $_POST['line9_sms_sender']=='on'?'1':'0';
  $updatesql.=",L9_SMS_SENDER='".$values['L9_SMS_SENDER']."'";
if($values['L9_SMS_SENDER'] == 1):
  $values['L9_SMS_SERVER'] = $_POST['line9_sms_server'] ;
  $updatesql.=",L9_SMS_SERVER='".$values['L9_SMS_SERVER']."'";
  $values['L9_SMS_PORT'] = $_POST['line9_sms_port'] ;
  $updatesql.=",L9_SMS_PORT='".$values['L9_SMS_PORT']."'";
  $values['L9_SMS_CLI_ID'] = $_POST['line9_sms_cli_id'] ;
  $updatesql.=",L9_SMS_CLI_ID='".$values['L9_SMS_CLI_ID']."'";
  $values['L9_SMS_CLI_PASSWD'] = $_POST['line9_sms_cli_passwd'] ;
  $updatesql.=",L9_SMS_CLI_PASSWD='".$values['L9_SMS_CLI_PASSWD']."'";
endif; 
 $values['LINE9_SMS_VALIDITY_TIME'] = $_POST['line9_sms_validity_time'] ;
  $updatesql.=",LINE9_SMS_VALIDITY_TIME='".$values['LINE9_SMS_VALIDITY_TIME']."'";
  $values['L9_DISABLE_SMS_ACK'] = $_POST['line9_sms_ack_enable']=='on'?'0':'1';
  $updatesql.=",L9_DISABLE_SMS_ACK='".$values['L9_DISABLE_SMS_ACK']."'";


  $values['L9_DISABLE_IN'] = $_POST['line9_fw_to_voip']=='on'?'0':'1';
  $updatesql.=",L9_DISABLE_IN='".$values['L9_DISABLE_IN']."'";
if($values['L9_DISABLE_IN'] == 0):
  $values['L9_FW_NUM_TO_VOIP'] = $_POST['line9_fw_num_to_voip'] ;
  $updatesql.=",L9_FW_NUM_TO_VOIP='".$values['L9_FW_NUM_TO_VOIP']."'";
  $values['L9_V_DIGIT_MAP'] = $_POST['line9_v_dial_plan'] ;
  $updatesql.=",L9_V_DIGIT_MAP='".$values['L9_V_DIGIT_MAP']."'";
  $values['L9_FW2VOIP_AUTH_MODE'] = $_POST['line9_fw2voip_auth_mode'] ;
  $updatesql.=",L9_FW2VOIP_AUTH_MODE='".$values['L9_FW2VOIP_AUTH_MODE']."'";
if($values['L9_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L9_FW_TO_VOIP_PASSWD'] = $_POST['line9_fw_to_voip_passwd'] ;
  $updatesql.=",L9_FW_TO_VOIP_PASSWD='".$values['L9_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L9_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L9_FW_TO_VOIP_PASSWD'] = $_POST['l9_fw_to_voip_passwd'] ;
  $updatesql.=",L9_FW_TO_VOIP_PASSWD='".$values['L9_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 

  $values['L9_GROUP_MODE'] = $_POST['line9_gsm_group_mode'] ;
  $updatesql.=",L9_GROUP_MODE='".$values['L9_GROUP_MODE']."'";
if($values['L9_GROUP_MODE'] == 'SVR'):
  $values['L9_GSM_FW_MODE'] = $_POST['line9_gsm_fw_mode'] ;
  $updatesql.=",L9_GSM_FW_MODE='".$values['L9_GSM_FW_MODE']."'";
  $values['L9_PARTNER_SVR'] = $_POST['line9_group_share_addr'] ;
  $updatesql.=",L9_PARTNER_SVR='".$values['L9_PARTNER_SVR']."'";
endif; 
if($values['L9_GROUP_MODE'] == 'CLI'):
  $values['L9_GROUP_SVR'] = $_POST['line9_group_svr_addr'] ;
  $updatesql.=",L9_GROUP_SVR='".$values['L9_GROUP_SVR']."'";
endif;
  $values['L9_GSM_NUMBER'] = $_POST['line9_gsm_num'] ;
  $updatesql.=",L9_GSM_NUMBER='".$values['L9_GSM_NUMBER']."'";
  $values['L9_CALLER_ANONYMOUS'] = $_POST['line9_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql.=",L9_CALLER_ANONYMOUS='".$values['L9_CALLER_ANONYMOUS']."'";
 
if($values['TELPORT'] >= 10): 
endif; 
  $values['L10_DISABLE_OUT'] = $_POST['line10_fw_to_pstn']=='on'?'0':'1';
  $updatesql.=",L10_DISABLE_OUT='".$values['L10_DISABLE_OUT']."'";
if($values['L10_DISABLE_OUT'] == 0):
  $values['L10_FW_NUM_TO_PSTN'] = $_POST['line10_fw_num_to_pstn'] ;
  $updatesql.=",L10_FW_NUM_TO_PSTN='".$values['L10_FW_NUM_TO_PSTN']."'";
  $values['L10_P_DIGIT_MAP'] = $_POST['line10_p_dial_plan'] ;
  $updatesql.=",L10_P_DIGIT_MAP='".$values['L10_P_DIGIT_MAP']."'";
  $values['L10_FW2PSTN_AUTH_MODE'] = $_POST['line10_fw2pstn_auth_mode'] ;
  $updatesql.=",L10_FW2PSTN_AUTH_MODE='".$values['L10_FW2PSTN_AUTH_MODE']."'";
if($values['L10_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L10_FW_TO_PSTN_PASSWD'] = $_POST['line10_fw_to_pstn_passwd'] ;
  $updatesql.=",L10_FW_TO_PSTN_PASSWD='".$values['L10_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L10_FW2PSTN_AUTH_MODE'] == 'PASSWD_TRUSTLIST'):
  $values['L10_FW_TO_PSTN_PASSWD'] = $_POST['l10_fw_to_pstn_passwd'] ;
  $updatesql.=",L10_FW_TO_PSTN_PASSWD='".$values['L10_FW_TO_PSTN_PASSWD']."'";
endif; 

if(!isset($_POST['line10_sms_sender']))
  $values['L10_SMS_SENDER']	= 0;
else
  $values['L10_DISABLE_OUT'] = $_POST['line10_fw_to_pstn']=='on'?'0':'1';
  $updatesql.=",L10_DISABLE_OUT='".$values['L10_DISABLE_OUT']."'";
if($values['L10_DISABLE_OUT'] == 0):
  $values['L10_FW_NUM_TO_PSTN'] = $_POST['line10_fw_num_to_pstn'] ;
  $updatesql.=",L10_FW_NUM_TO_PSTN='".$values['L10_FW_NUM_TO_PSTN']."'";
  $values['L10_P_DIGIT_MAP'] = $_POST['line10_p_dial_plan'] ;
  $updatesql.=",L10_P_DIGIT_MAP='".$values['L10_P_DIGIT_MAP']."'";
  $values['LINE10_P_DPRST'] = $_POST['line10_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql.=",LINE10_P_DPRST='".$values['LINE10_P_DPRST']."'";
  $values['L10_FW2PSTN_AUTH_MODE'] = $_POST['line10_fw2pstn_auth_mode'] ;
  $updatesql.=",L10_FW2PSTN_AUTH_MODE='".$values['L10_FW2PSTN_AUTH_MODE']."'";
if($values['L10_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L10_FW_TO_PSTN_PASSWD'] = $_POST['line10_fw_to_pstn_passwd'] ;
  $updatesql.=",L10_FW_TO_PSTN_PASSWD='".$values['L10_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L10_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L10_FW_TO_PSTN_PASSWD'] = $_POST['l10_fw_to_pstn_passwd'] ;
  $updatesql.=",L10_FW_TO_PSTN_PASSWD='".$values['L10_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE10_OUT_INTERVAL'] = $_POST['line10_out_interval'] ;
  $updatesql.=",LINE10_OUT_INTERVAL='".$values['LINE10_OUT_INTERVAL']."'";


 $values['L10_DISABLE_IN'] = $_POST['line10_fw_to_voip']=='on'?'0':'1';
  $updatesql.=",L10_DISABLE_IN='".$values['L10_DISABLE_IN']."'";
if($values['L10_DISABLE_IN'] == 0):
  $values['L10_FW_NUM_TO_VOIP'] = $_POST['line10_fw_num_to_voip'] ;
  $updatesql.=",L10_FW_NUM_TO_VOIP='".$values['L10_FW_NUM_TO_VOIP']."'";
  $values['L10_V_DIGIT_MAP'] = $_POST['line10_v_dial_plan'] ;
  $updatesql.=",L10_V_DIGIT_MAP='".$values['L10_V_DIGIT_MAP']."'";
  $values['L10_FW2VOIP_AUTH_MODE'] = $_POST['line10_fw2voip_auth_mode'] ;
  $updatesql.=",L10_FW2VOIP_AUTH_MODE='".$values['L10_FW2VOIP_AUTH_MODE']."'";
if($values['L10_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L10_FW_TO_VOIP_PASSWD'] = $_POST['line10_fw_to_voip_passwd'] ;
  $updatesql.=",L10_FW_TO_VOIP_PASSWD='".$values['L10_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L10_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L10_FW_TO_VOIP_PASSWD'] = $_POST['l10_fw_to_voip_passwd'] ;
  $updatesql.=",L10_FW_TO_VOIP_PASSWD='".$values['L10_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 

  $values['L10_GROUP_MODE'] = $_POST['line10_gsm_group_mode'] ;
  $updatesql.=",L10_GROUP_MODE='".$values['L10_GROUP_MODE']."'";
if($values['L10_GROUP_MODE'] == 'SVR'):
  $values['L10_GSM_FW_MODE'] = $_POST['line10_gsm_fw_mode'] ;
  $updatesql.=",L10_GSM_FW_MODE='".$values['L10_GSM_FW_MODE']."'";
  $values['L10_PARTNER_SVR'] = $_POST['line10_group_share_addr'] ;
  $updatesql.=",L10_PARTNER_SVR='".$values['L10_PARTNER_SVR']."'";
endif; 
if($values['L10_GROUP_MODE'] == 'CLI'):
  $values['L10_GROUP_SVR'] = $_POST['line10_group_svr_addr'] ;
  $updatesql.=",L10_GROUP_SVR='".$values['L10_GROUP_SVR']."'";
endif;
  $values['L10_GSM_NUMBER'] = $_POST['line10_gsm_num'] ;
  $updatesql.=",L10_GSM_NUMBER='".$values['L10_GSM_NUMBER']."'";
  $values['L10_CALLER_ANONYMOUS'] = $_POST['line10_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql.=",L10_CALLER_ANONYMOUS='".$values['L10_CALLER_ANONYMOUS']."'";
  
if($values['TELPORT'] >= 11): 
endif; 
  $values['L11_DISABLE_OUT'] = $_POST['line11_fw_to_pstn']=='on'?'0':'1';
  $updatesql.=",L11_DISABLE_OUT='".$values['L11_DISABLE_OUT']."'";
if($values['L11_DISABLE_OUT'] == 0):
  $values['L11_FW_NUM_TO_PSTN'] = $_POST['line11_fw_num_to_pstn'] ;
  $updatesql.=",L11_FW_NUM_TO_PSTN='".$values['L11_FW_NUM_TO_PSTN']."'";
  $values['L11_P_DIGIT_MAP'] = $_POST['line11_p_dial_plan'] ;
  $updatesql.=",L11_P_DIGIT_MAP='".$values['L11_P_DIGIT_MAP']."'";
  $values['L11_FW2PSTN_AUTH_MODE'] = $_POST['line11_fw2pstn_auth_mode'] ;
  $updatesql.=",L11_FW2PSTN_AUTH_MODE='".$values['L11_FW2PSTN_AUTH_MODE']."'";
if($values['L11_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L11_FW_TO_PSTN_PASSWD'] = $_POST['line11_fw_to_pstn_passwd'] ;
  $updatesql.=",L11_FW_TO_PSTN_PASSWD='".$values['L11_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L11_FW2PSTN_AUTH_MODE'] == 'PASSWD_TRUSTLIST'):
  $values['L11_FW_TO_PSTN_PASSWD'] = $_POST['l11_fw_to_pstn_passwd'] ;
  $updatesql.=",L11_FW_TO_PSTN_PASSWD='".$values['L11_FW_TO_PSTN_PASSWD']."'";
endif; 

if(!isset($_POST['line11_sms_sender']))
  $values['L11_SMS_SENDER']	= 0;
else
  $values['L11_DISABLE_OUT'] = $_POST['line11_fw_to_pstn']=='on'?'0':'1';
  $updatesql.=",L11_DISABLE_OUT='".$values['L11_DISABLE_OUT']."'";
if($values['L11_DISABLE_OUT'] == 0):
  $values['L11_FW_NUM_TO_PSTN'] = $_POST['line11_fw_num_to_pstn'] ;
  $updatesql.=",L11_FW_NUM_TO_PSTN='".$values['L11_FW_NUM_TO_PSTN']."'";
  $values['L11_P_DIGIT_MAP'] = $_POST['line11_p_dial_plan'] ;
  $updatesql.=",L11_P_DIGIT_MAP='".$values['L11_P_DIGIT_MAP']."'";
  $values['LINE11_P_DPRST'] = $_POST['line11_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql.=",LINE11_P_DPRST='".$values['LINE11_P_DPRST']."'";
  $values['L11_FW2PSTN_AUTH_MODE'] = $_POST['line11_fw2pstn_auth_mode'] ;
  $updatesql.=",L11_FW2PSTN_AUTH_MODE='".$values['L11_FW2PSTN_AUTH_MODE']."'";
if($values['L11_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L11_FW_TO_PSTN_PASSWD'] = $_POST['line11_fw_to_pstn_passwd'] ;
  $updatesql.=",L11_FW_TO_PSTN_PASSWD='".$values['L11_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L11_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L11_FW_TO_PSTN_PASSWD'] = $_POST['l11_fw_to_pstn_passwd'] ;
  $updatesql.=",L11_FW_TO_PSTN_PASSWD='".$values['L11_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE11_OUT_INTERVAL'] = $_POST['line11_out_interval'] ;
  $updatesql.=",LINE11_OUT_INTERVAL='".$values['LINE11_OUT_INTERVAL']."'";
endif; 

 $values['L11_DISABLE_IN'] = $_POST['line11_fw_to_voip']=='on'?'0':'1';
  $updatesql.=",L11_DISABLE_IN='".$values['L11_DISABLE_IN']."'";
if($values['L11_DISABLE_IN'] == 0):
  $values['L11_FW_NUM_TO_VOIP'] = $_POST['line11_fw_num_to_voip'] ;
  $updatesql.=",L11_FW_NUM_TO_VOIP='".$values['L11_FW_NUM_TO_VOIP']."'";
  $values['L11_V_DIGIT_MAP'] = $_POST['line11_v_dial_plan'] ;
  $updatesql.=",L11_V_DIGIT_MAP='".$values['L11_V_DIGIT_MAP']."'";
  $values['L11_FW2VOIP_AUTH_MODE'] = $_POST['line11_fw2voip_auth_mode'] ;
  $updatesql.=",L11_FW2VOIP_AUTH_MODE='".$values['L11_FW2VOIP_AUTH_MODE']."'";
if($values['L11_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L11_FW_TO_VOIP_PASSWD'] = $_POST['line11_fw_to_voip_passwd'] ;
  $updatesql.=",L11_FW_TO_VOIP_PASSWD='".$values['L11_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L11_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L11_FW_TO_VOIP_PASSWD'] = $_POST['l11_fw_to_voip_passwd'] ;
  $updatesql.=",L11_FW_TO_VOIP_PASSWD='".$values['L11_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 

  $values['L11_GROUP_MODE'] = $_POST['line11_gsm_group_mode'] ;
  $updatesql.=",L11_GROUP_MODE='".$values['L11_GROUP_MODE']."'";
if($values['L11_GROUP_MODE'] == 'SVR'):
  $values['L11_GSM_FW_MODE'] = $_POST['line11_gsm_fw_mode'] ;
  $updatesql.=",L11_GSM_FW_MODE='".$values['L11_GSM_FW_MODE']."'";
  $values['L11_PARTNER_SVR'] = $_POST['line11_group_share_addr'] ;
  $updatesql.=",L11_PARTNER_SVR='".$values['L11_PARTNER_SVR']."'";
endif; 
if($values['L11_GROUP_MODE'] == 'CLI'):
  $values['L11_GROUP_SVR'] = $_POST['line11_group_svr_addr'] ;
  $updatesql.=",L11_GROUP_SVR='".$values['L11_GROUP_SVR']."'";
endif;
  $values['L11_GSM_NUMBER'] = $_POST['line11_gsm_num'] ;
  $updatesql.=",L11_GSM_NUMBER='".$values['L11_GSM_NUMBER']."'";
  $values['L11_CALLER_ANONYMOUS'] = $_POST['line11_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql.=",L11_CALLER_ANONYMOUS='".$values['L11_CALLER_ANONYMOUS']."'";

if($values['TELPORT'] >= 12): 
endif; 
  $values['L12_DISABLE_OUT'] = $_POST['line12_fw_to_pstn']=='on'?'0':'1';
  $updatesql.=",L12_DISABLE_OUT='".$values['L12_DISABLE_OUT']."'";
if($values['L12_DISABLE_OUT'] == 0):
  $values['L12_FW_NUM_TO_PSTN'] = $_POST['line12_fw_num_to_pstn'] ;
  $updatesql.=",L12_FW_NUM_TO_PSTN='".$values['L12_FW_NUM_TO_PSTN']."'";
  $values['L12_P_DIGIT_MAP'] = $_POST['line12_p_dial_plan'] ;
  $updatesql.=",L12_P_DIGIT_MAP='".$values['L12_P_DIGIT_MAP']."'";
  $values['LINE12_P_DPRST'] = $_POST['line12_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql.=",LINE12_P_DPRST='".$values['LINE12_P_DPRST']."'";
  $values['L12_FW2PSTN_AUTH_MODE'] = $_POST['line12_fw2pstn_auth_mode'] ;
  $updatesql.=",L12_FW2PSTN_AUTH_MODE='".$values['L12_FW2PSTN_AUTH_MODE']."'";
if($values['L12_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L12_FW_TO_PSTN_PASSWD'] = $_POST['line12_fw_to_pstn_passwd'] ;
  $updatesql.=",L12_FW_TO_PSTN_PASSWD='".$values['L12_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L12_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L12_FW_TO_PSTN_PASSWD'] = $_POST['l12_fw_to_pstn_passwd'] ;
  $updatesql.=",L12_FW_TO_PSTN_PASSWD='".$values['L12_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE12_OUT_INTERVAL'] = $_POST['line12_out_interval'] ;
  $updatesql.=",LINE12_OUT_INTERVAL='".$values['LINE12_OUT_INTERVAL']."'";
endif; 

if(!isset($_POST['line12_sms_sender']))
  $values['L12_SMS_SENDER']	= 0;
else
  $values['L12_SMS_SENDER'] = $_POST['line12_sms_sender']=='on'?'1':'0';
  $updatesql.=",L12_SMS_SENDER='".$values['L12_SMS_SENDER']."'";
if($values['L12_SMS_SENDER'] == 1):
  $values['L12_SMS_SERVER'] = $_POST['line12_sms_server'] ;
  $updatesql.=",L12_SMS_SERVER='".$values['L12_SMS_SERVER']."'";
  $values['L12_SMS_PORT'] = $_POST['line12_sms_port'] ;
  $updatesql.=",L12_SMS_PORT='".$values['L12_SMS_PORT']."'";
  $values['L12_SMS_CLI_ID'] = $_POST['line12_sms_cli_id'] ;
  $updatesql.=",L12_SMS_CLI_ID='".$values['L12_SMS_CLI_ID']."'";
  $values['L12_SMS_CLI_PASSWD'] = $_POST['line12_sms_cli_passwd'] ;
  $updatesql.=",L12_SMS_CLI_PASSWD='".$values['L12_SMS_CLI_PASSWD']."'";
endif; 
 $values['LINE12_SMS_VALIDITY_TIME'] = $_POST['line12_sms_validity_time'] ;
  $updatesql.=",LINE12_SMS_VALIDITY_TIME='".$values['LINE12_SMS_VALIDITY_TIME']."'";
  $values['L12_DISABLE_SMS_ACK'] = $_POST['line12_sms_ack_enable']=='on'?'0':'1';
  $updatesql.=",L12_DISABLE_SMS_ACK='".$values['L12_DISABLE_SMS_ACK']."'";
endif; 

  $values['L12_DISABLE_IN'] = $_POST['line12_fw_to_voip']=='on'?'0':'1';
  $updatesql.=",L12_DISABLE_IN='".$values['L12_DISABLE_IN']."'";
if($values['L12_DISABLE_IN'] == 0):
  $values['L12_FW_NUM_TO_VOIP'] = $_POST['line12_fw_num_to_voip'] ;
  $updatesql.=",L12_FW_NUM_TO_VOIP='".$values['L12_FW_NUM_TO_VOIP']."'";
  $values['L12_V_DIGIT_MAP'] = $_POST['line12_v_dial_plan'] ;
  $updatesql.=",L12_V_DIGIT_MAP='".$values['L12_V_DIGIT_MAP']."'";
  $values['L12_FW2VOIP_AUTH_MODE'] = $_POST['line12_fw2voip_auth_mode'] ;
  $updatesql.=",L12_FW2VOIP_AUTH_MODE='".$values['L12_FW2VOIP_AUTH_MODE']."'";
if($values['L12_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L12_FW_TO_VOIP_PASSWD'] = $_POST['line12_fw_to_voip_passwd'] ;
  $updatesql.=",L12_FW_TO_VOIP_PASSWD='".$values['L12_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L12_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L12_FW_TO_VOIP_PASSWD'] = $_POST['l12_fw_to_voip_passwd'] ;
  $updatesql.=",L12_FW_TO_VOIP_PASSWD='".$values['L12_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 

  $values['L12_GROUP_MODE'] = $_POST['line12_gsm_group_mode'] ;
  $updatesql.=",L12_GROUP_MODE='".$values['L12_GROUP_MODE']."'";
if($values['L12_GROUP_MODE'] == 'SVR'):
  $values['L12_GSM_FW_MODE'] = $_POST['line12_gsm_fw_mode'] ;
  $updatesql.=",L12_GSM_FW_MODE='".$values['L12_GSM_FW_MODE']."'";
  $values['L12_PARTNER_SVR'] = $_POST['line12_group_share_addr'] ;
  $updatesql.=",L12_PARTNER_SVR='".$values['L12_PARTNER_SVR']."'";
endif; 
if($values['L12_GROUP_MODE'] == 'CLI'):
  $values['L12_GROUP_SVR'] = $_POST['line12_group_svr_addr'] ;
  $updatesql.=",L12_GROUP_SVR='".$values['L12_GROUP_SVR']."'";
endif;
  $values['L12_GSM_NUMBER'] = $_POST['line12_gsm_num'] ;
  $updatesql.=",L12_GSM_NUMBER='".$values['L12_GSM_NUMBER']."'";
  $values['L12_CALLER_ANONYMOUS'] = $_POST['line12_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql.=",L12_CALLER_ANONYMOUS='".$values['L12_CALLER_ANONYMOUS']."'";
 
if($values['TELPORT'] >= 13): 
endif; 
  $values['L13_DISABLE_OUT'] = $_POST['line13_fw_to_pstn']=='on'?'0':'1';
  $updatesql.=",L13_DISABLE_OUT='".$values['L13_DISABLE_OUT']."'";
if($values['L13_DISABLE_OUT'] == 0):
  $values['L13_FW_NUM_TO_PSTN'] = $_POST['line13_fw_num_to_pstn'] ;
  $updatesql.=",L13_FW_NUM_TO_PSTN='".$values['L13_FW_NUM_TO_PSTN']."'";
  $values['L13_P_DIGIT_MAP'] = $_POST['line13_p_dial_plan'] ;
  $updatesql.=",L13_P_DIGIT_MAP='".$values['L13_P_DIGIT_MAP']."'";
  $values['LINE13_P_DPRST'] = $_POST['line13_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql.=",LINE13_P_DPRST='".$values['LINE13_P_DPRST']."'";
  $values['L13_FW2PSTN_AUTH_MODE'] = $_POST['line13_fw2pstn_auth_mode'] ;
  $updatesql.=",L13_FW2PSTN_AUTH_MODE='".$values['L13_FW2PSTN_AUTH_MODE']."'";
if($values['L13_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L13_FW_TO_PSTN_PASSWD'] = $_POST['line13_fw_to_pstn_passwd'] ;
  $updatesql.=",L13_FW_TO_PSTN_PASSWD='".$values['L13_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L13_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L13_FW_TO_PSTN_PASSWD'] = $_POST['l13_fw_to_pstn_passwd'] ;
  $updatesql.=",L13_FW_TO_PSTN_PASSWD='".$values['L13_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE13_OUT_INTERVAL'] = $_POST['line13_out_interval'] ;
  $updatesql.=",LINE13_OUT_INTERVAL='".$values['LINE13_OUT_INTERVAL']."'";
endif; 

if(!isset($_POST['line13_sms_sender']))
  $values['L13_SMS_SENDER']	= 0;
else 
  $values['L13_SMS_SENDER'] = $_POST['line13_sms_sender']=='on'?'1':'0';
  $updatesql.=",L13_SMS_SENDER='".$values['L13_SMS_SENDER']."'";
if($values['L13_SMS_SENDER'] == 1):
  $values['L13_SMS_SERVER'] = $_POST['line13_sms_server'] ;
  $updatesql.=",L13_SMS_SERVER='".$values['L13_SMS_SERVER']."'";
  $values['L13_SMS_PORT'] = $_POST['line13_sms_port'] ;
  $updatesql.=",L13_SMS_PORT='".$values['L13_SMS_PORT']."'";
  $values['L13_SMS_CLI_ID'] = $_POST['line13_sms_cli_id'] ;
  $updatesql.=",L13_SMS_CLI_ID='".$values['L13_SMS_CLI_ID']."'";
  $values['L13_SMS_CLI_PASSWD'] = $_POST['line13_sms_cli_passwd'] ;
  $updatesql.=",L13_SMS_CLI_PASSWD='".$values['L13_SMS_CLI_PASSWD']."'";
endif; 
 $values['LINE13_SMS_VALIDITY_TIME'] = $_POST['line13_sms_validity_time'] ;
  $updatesql.=",LINE13_SMS_VALIDITY_TIME='".$values['LINE13_SMS_VALIDITY_TIME']."'";
  $values['L13_DISABLE_SMS_ACK'] = $_POST['line13_sms_ack_enable']=='on'?'0':'1';
  $updatesql.=",L13_DISABLE_SMS_ACK='".$values['L13_DISABLE_SMS_ACK']."'";
endif; 

  $values['L13_DISABLE_IN'] = $_POST['line13_fw_to_voip']=='on'?'0':'1';
  $updatesql.=",L13_DISABLE_IN='".$values['L13_DISABLE_IN']."'";
if($values['L13_DISABLE_IN'] == 0):
  $values['L13_FW_NUM_TO_VOIP'] = $_POST['line13_fw_num_to_voip'] ;
  $updatesql.=",L13_FW_NUM_TO_VOIP='".$values['L13_FW_NUM_TO_VOIP']."'";
  $values['L13_V_DIGIT_MAP'] = $_POST['line13_v_dial_plan'] ;
  $updatesql.=",L13_V_DIGIT_MAP='".$values['L13_V_DIGIT_MAP']."'";
  $values['L13_FW2VOIP_AUTH_MODE'] = $_POST['line13_fw2voip_auth_mode'] ;
  $updatesql.=",L13_FW2VOIP_AUTH_MODE='".$values['L13_FW2VOIP_AUTH_MODE']."'";
if($values['L13_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L13_FW_TO_VOIP_PASSWD'] = $_POST['line13_fw_to_voip_passwd'] ;
  $updatesql.=",L13_FW_TO_VOIP_PASSWD='".$values['L13_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L13_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L13_FW_TO_VOIP_PASSWD'] = $_POST['l13_fw_to_voip_passwd'] ;
  $updatesql.=",L13_FW_TO_VOIP_PASSWD='".$values['L13_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 

  $values['L13_GROUP_MODE'] = $_POST['line13_gsm_group_mode'] ;
  $updatesql.=",L13_GROUP_MODE='".$values['L13_GROUP_MODE']."'";
if($values['L13_GROUP_MODE'] == 'SVR'):
  $values['L13_GSM_FW_MODE'] = $_POST['line13_gsm_fw_mode'] ;
  $updatesql.=",L13_GSM_FW_MODE='".$values['L13_GSM_FW_MODE']."'";
  $values['L13_PARTNER_SVR'] = $_POST['line13_group_share_addr'] ;
  $updatesql.=",L13_PARTNER_SVR='".$values['L13_PARTNER_SVR']."'";
endif; 
if($values['L13_GROUP_MODE'] == 'CLI'):
  $values['L13_GROUP_SVR'] = $_POST['line13_group_svr_addr'] ;
  $updatesql.=",L13_GROUP_SVR='".$values['L13_GROUP_SVR']."'";
endif;
  $values['L13_GSM_NUMBER'] = $_POST['line13_gsm_num'] ;
  $updatesql.=",L13_GSM_NUMBER='".$values['L13_GSM_NUMBER']."'";
  $values['L13_CALLER_ANONYMOUS'] = $_POST['line13_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql.=",L13_CALLER_ANONYMOUS='".$values['L13_CALLER_ANONYMOUS']."'";
 
if($values['TELPORT'] >= 14): 
endif; 
  $values['L14_DISABLE_OUT'] = $_POST['line14_fw_to_pstn']=='on'?'0':'1';
  $updatesql.=",L14_DISABLE_OUT='".$values['L14_DISABLE_OUT']."'";
if($values['L14_DISABLE_OUT'] == 0):
  $values['L14_FW_NUM_TO_PSTN'] = $_POST['line14_fw_num_to_pstn'] ;
  $updatesql.=",L14_FW_NUM_TO_PSTN='".$values['L14_FW_NUM_TO_PSTN']."'";
  $values['L14_P_DIGIT_MAP'] = $_POST['line14_p_dial_plan'] ;
  $updatesql.=",L14_P_DIGIT_MAP='".$values['L14_P_DIGIT_MAP']."'";
  $values['LINE14_P_DPRST'] = $_POST['line14_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql.=",LINE14_P_DPRST='".$values['LINE14_P_DPRST']."'";
  $values['L14_FW2PSTN_AUTH_MODE'] = $_POST['line14_fw2pstn_auth_mode'] ;
  $updatesql.=",L14_FW2PSTN_AUTH_MODE='".$values['L14_FW2PSTN_AUTH_MODE']."'";
if($values['L14_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L14_FW_TO_PSTN_PASSWD'] = $_POST['line14_fw_to_pstn_passwd'] ;
  $updatesql.=",L14_FW_TO_PSTN_PASSWD='".$values['L14_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L14_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L14_FW_TO_PSTN_PASSWD'] = $_POST['l14_fw_to_pstn_passwd'] ;
  $updatesql.=",L14_FW_TO_PSTN_PASSWD='".$values['L14_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE14_OUT_INTERVAL'] = $_POST['line14_out_interval'] ;
  $updatesql.=",LINE14_OUT_INTERVAL='".$values['LINE14_OUT_INTERVAL']."'";
endif; 

if(!isset($_POST['line14_sms_sender']))
  $values['L14_SMS_SENDER']	= 0;
else
  $values['L14_SMS_SENDER'] = $_POST['line14_sms_sender']=='on'?'1':'0';
  $updatesql.=",L14_SMS_SENDER='".$values['L14_SMS_SENDER']."'";
if($values['L14_SMS_SENDER'] == 1):
  $values['L14_SMS_SERVER'] = $_POST['line14_sms_server'] ;
  $updatesql.=",L14_SMS_SERVER='".$values['L14_SMS_SERVER']."'";
  $values['L14_SMS_PORT'] = $_POST['line14_sms_port'] ;
  $updatesql.=",L14_SMS_PORT='".$values['L14_SMS_PORT']."'";
  $values['L14_SMS_CLI_ID'] = $_POST['line14_sms_cli_id'] ;
  $updatesql.=",L14_SMS_CLI_ID='".$values['L14_SMS_CLI_ID']."'";
  $values['L14_SMS_CLI_PASSWD'] = $_POST['line14_sms_cli_passwd'] ;
  $updatesql.=",L14_SMS_CLI_PASSWD='".$values['L14_SMS_CLI_PASSWD']."'";
endif; 
 $values['LINE14_SMS_VALIDITY_TIME'] = $_POST['line14_sms_validity_time'] ;
  $updatesql.=",LINE14_SMS_VALIDITY_TIME='".$values['LINE14_SMS_VALIDITY_TIME']."'";
  $values['L14_DISABLE_SMS_ACK'] = $_POST['line14_sms_ack_enable']=='on'?'0':'1';
  $updatesql.=",L14_DISABLE_SMS_ACK='".$values['L14_DISABLE_SMS_ACK']."'";
endif; 

  $values['L14_DISABLE_IN'] = $_POST['line14_fw_to_voip']=='on'?'0':'1';
  $updatesql.=",L14_DISABLE_IN='".$values['L14_DISABLE_IN']."'";
if($values['L14_DISABLE_IN'] == 0):
  $values['L14_FW_NUM_TO_VOIP'] = $_POST['line14_fw_num_to_voip'] ;
  $updatesql.=",L14_FW_NUM_TO_VOIP='".$values['L14_FW_NUM_TO_VOIP']."'";
  $values['L14_V_DIGIT_MAP'] = $_POST['line14_v_dial_plan'] ;
  $updatesql.=",L14_V_DIGIT_MAP='".$values['L14_V_DIGIT_MAP']."'";
  $values['L14_FW2VOIP_AUTH_MODE'] = $_POST['line14_fw2voip_auth_mode'] ;
  $updatesql.=",L14_FW2VOIP_AUTH_MODE='".$values['L14_FW2VOIP_AUTH_MODE']."'";
if($values['L14_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L14_FW_TO_VOIP_PASSWD'] = $_POST['line14_fw_to_voip_passwd'] ;
  $updatesql.=",L14_FW_TO_VOIP_PASSWD='".$values['L14_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L14_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L14_FW_TO_VOIP_PASSWD'] = $_POST['l14_fw_to_voip_passwd'] ;
  $updatesql.=",L14_FW_TO_VOIP_PASSWD='".$values['L14_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 

  $values['L14_GROUP_MODE'] = $_POST['line14_gsm_group_mode'] ;
  $updatesql.=",L14_GROUP_MODE='".$values['L14_GROUP_MODE']."'";
if($values['L14_GROUP_MODE'] == 'SVR'):
  $values['L14_GSM_FW_MODE'] = $_POST['line14_gsm_fw_mode'] ;
  $updatesql.=",L14_GSM_FW_MODE='".$values['L14_GSM_FW_MODE']."'";
  $values['L14_PARTNER_SVR'] = $_POST['line14_group_share_addr'] ;
  $updatesql.=",L14_PARTNER_SVR='".$values['L14_PARTNER_SVR']."'";
endif; 
if($values['L14_GROUP_MODE'] == 'CLI'):
  $values['L14_GROUP_SVR'] = $_POST['line14_group_svr_addr'] ;
  $updatesql.=",L14_GROUP_SVR='".$values['L14_GROUP_SVR']."'";
endif;
  $values['L14_GSM_NUMBER'] = $_POST['line14_gsm_num'] ;
  $updatesql.=",L14_GSM_NUMBER='".$values['L14_GSM_NUMBER']."'";
  $values['L14_CALLER_ANONYMOUS'] = $_POST['line14_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql.=",L14_CALLER_ANONYMOUS='".$values['L14_CALLER_ANONYMOUS']."'";
  
if($values['TELPORT'] >= 15): 
endif; 
  $values['L15_DISABLE_OUT'] = $_POST['line15_fw_to_pstn']=='on'?'0':'1';
  $updatesql.=",L15_DISABLE_OUT='".$values['L15_DISABLE_OUT']."'";
if($values['L15_DISABLE_OUT'] == 0):
  $values['L15_FW_NUM_TO_PSTN'] = $_POST['line15_fw_num_to_pstn'] ;
  $updatesql.=",L15_FW_NUM_TO_PSTN='".$values['L15_FW_NUM_TO_PSTN']."'";
  $values['L15_P_DIGIT_MAP'] = $_POST['line15_p_dial_plan'] ;
  $updatesql.=",L15_P_DIGIT_MAP='".$values['L15_P_DIGIT_MAP']."'";
  $values['LINE15_P_DPRST'] = $_POST['line15_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql.=",LINE15_P_DPRST='".$values['LINE15_P_DPRST']."'";
  $values['L15_FW2PSTN_AUTH_MODE'] = $_POST['line15_fw2pstn_auth_mode'] ;
  $updatesql.=",L15_FW2PSTN_AUTH_MODE='".$values['L15_FW2PSTN_AUTH_MODE']."'";
if($values['L15_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L15_FW_TO_PSTN_PASSWD'] = $_POST['line15_fw_to_pstn_passwd'] ;
  $updatesql.=",L15_FW_TO_PSTN_PASSWD='".$values['L15_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L15_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L15_FW_TO_PSTN_PASSWD'] = $_POST['l15_fw_to_pstn_passwd'] ;
  $updatesql.=",L15_FW_TO_PSTN_PASSWD='".$values['L15_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE15_OUT_INTERVAL'] = $_POST['line15_out_interval'] ;
  $updatesql.=",LINE15_OUT_INTERVAL='".$values['LINE15_OUT_INTERVAL']."'";
endif; 

if(!isset($_POST['line15_sms_sender']))
  $values['L15_SMS_SENDER']	= 0;
else
  $values['L15_SMS_SENDER'] = $_POST['line15_sms_sender']=='on'?'1':'0';
  $updatesql.=",L15_SMS_SENDER='".$values['L15_SMS_SENDER']."'";
if($values['L15_SMS_SENDER'] == 1):
  $values['L15_SMS_SERVER'] = $_POST['line15_sms_server'] ;
  $updatesql.=",L15_SMS_SERVER='".$values['L15_SMS_SERVER']."'";
  $values['L15_SMS_PORT'] = $_POST['line15_sms_port'] ;
  $updatesql.=",L15_SMS_PORT='".$values['L15_SMS_PORT']."'";
  $values['L15_SMS_CLI_ID'] = $_POST['line15_sms_cli_id'] ;
  $updatesql.=",L15_SMS_CLI_ID='".$values['L15_SMS_CLI_ID']."'";
  $values['L15_SMS_CLI_PASSWD'] = $_POST['line15_sms_cli_passwd'] ;
  $updatesql.=",L15_SMS_CLI_PASSWD='".$values['L15_SMS_CLI_PASSWD']."'";
endif; 
 $values['LINE15_SMS_VALIDITY_TIME'] = $_POST['line15_sms_validity_time'] ;
  $updatesql.=",LINE15_SMS_VALIDITY_TIME='".$values['LINE15_SMS_VALIDITY_TIME']."'";
  $values['L15_DISABLE_SMS_ACK'] = $_POST['line15_sms_ack_enable']=='on'?'0':'1';
  $updatesql.=",L15_DISABLE_SMS_ACK='".$values['L15_DISABLE_SMS_ACK']."'";


  $values['L15_DISABLE_IN'] = $_POST['line15_fw_to_voip']=='on'?'0':'1';
  $updatesql.=",L15_DISABLE_IN='".$values['L15_DISABLE_IN']."'";
if($values['L15_DISABLE_IN'] == 0):
  $values['L15_FW_NUM_TO_VOIP'] = $_POST['line15_fw_num_to_voip'] ;
  $updatesql.=",L15_FW_NUM_TO_VOIP='".$values['L15_FW_NUM_TO_VOIP']."'";
  $values['L15_V_DIGIT_MAP'] = $_POST['line15_v_dial_plan'] ;
  $updatesql.=",L15_V_DIGIT_MAP='".$values['L15_V_DIGIT_MAP']."'";
  $values['L15_FW2VOIP_AUTH_MODE'] = $_POST['line15_fw2voip_auth_mode'] ;
  $updatesql.=",L15_FW2VOIP_AUTH_MODE='".$values['L15_FW2VOIP_AUTH_MODE']."'";
if($values['L15_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L15_FW_TO_VOIP_PASSWD'] = $_POST['line15_fw_to_voip_passwd'] ;
  $updatesql.=",L15_FW_TO_VOIP_PASSWD='".$values['L15_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L15_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L15_FW_TO_VOIP_PASSWD'] = $_POST['l15_fw_to_voip_passwd'] ;
  $updatesql.=",L15_FW_TO_VOIP_PASSWD='".$values['L15_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 

  $values['L15_GROUP_MODE'] = $_POST['line15_gsm_group_mode'] ;
  $updatesql.=",L15_GROUP_MODE='".$values['L15_GROUP_MODE']."'";
if($values['L15_GROUP_MODE'] == 'SVR'):
  $values['L15_GSM_FW_MODE'] = $_POST['line15_gsm_fw_mode'] ;
  $updatesql.=",L15_GSM_FW_MODE='".$values['L15_GSM_FW_MODE']."'";
  $values['L15_PARTNER_SVR'] = $_POST['line15_group_share_addr'] ;
  $updatesql.=",L15_PARTNER_SVR='".$values['L15_PARTNER_SVR']."'";
endif; 
if($values['L15_GROUP_MODE'] == 'CLI'):
  $values['L15_GROUP_SVR'] = $_POST['line15_group_svr_addr'] ;
  $updatesql.=",L15_GROUP_SVR='".$values['L15_GROUP_SVR']."'";
endif;
  $values['L15_GSM_NUMBER'] = $_POST['line15_gsm_num'] ;
  $updatesql.=",L15_GSM_NUMBER='".$values['L15_GSM_NUMBER']."'";
  $values['L15_CALLER_ANONYMOUS'] = $_POST['line15_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql.=",L15_CALLER_ANONYMOUS='".$values['L15_CALLER_ANONYMOUS']."'";
 
if($values['TELPORT'] >= 16): 
endif; 
  $values['L16_DISABLE_OUT'] = $_POST['line16_fw_to_pstn']=='on'?'0':'1';
  $updatesql.=",L16_DISABLE_OUT='".$values['L16_DISABLE_OUT']."'";
if($values['L16_DISABLE_OUT'] == 0):
  $values['L16_FW_NUM_TO_PSTN'] = $_POST['line16_fw_num_to_pstn'] ;
  $updatesql.=",L16_FW_NUM_TO_PSTN='".$values['L16_FW_NUM_TO_PSTN']."'";
  $values['L16_P_DIGIT_MAP'] = $_POST['line16_p_dial_plan'] ;
  $updatesql.=",L16_P_DIGIT_MAP='".$values['L16_P_DIGIT_MAP']."'";
  $values['LINE16_P_DPRST'] = $_POST['line16_p_dial_plan_rst']=='on'?'1':'0';
  $updatesql.=",LINE16_P_DPRST='".$values['LINE16_P_DPRST']."'";
  $values['L16_FW2PSTN_AUTH_MODE'] = $_POST['line16_fw2pstn_auth_mode'] ;
  $updatesql.=",L16_FW2PSTN_AUTH_MODE='".$values['L16_FW2PSTN_AUTH_MODE']."'";
if($values['L16_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L16_FW_TO_PSTN_PASSWD'] = $_POST['line16_fw_to_pstn_passwd'] ;
  $updatesql.=",L16_FW_TO_PSTN_PASSWD='".$values['L16_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L16_FW2PSTN_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L16_FW_TO_PSTN_PASSWD'] = $_POST['l16_fw_to_pstn_passwd'] ;
  $updatesql.=",L16_FW_TO_PSTN_PASSWD='".$values['L16_FW_TO_PSTN_PASSWD']."'";
endif; 
  $values['LINE16_OUT_INTERVAL'] = $_POST['line16_out_interval'] ;
  $updatesql.=",LINE16_OUT_INTERVAL='".$values['LINE16_OUT_INTERVAL']."'";
endif; 

if(!isset($_POST['line16_sms_sender']))
  $values['L16_SMS_SENDER']	= 0;
else 
  $values['L16_SMS_SENDER'] = $_POST['line16_sms_sender']=='on'?'1':'0';
  $updatesql.=",L16_SMS_SENDER='".$values['L16_SMS_SENDER']."'";
if($values['L16_SMS_SENDER'] == 1):
  $values['L16_SMS_SERVER'] = $_POST['line16_sms_server'] ;
  $updatesql.=",L16_SMS_SERVER='".$values['L16_SMS_SERVER']."'";
  $values['L16_SMS_PORT'] = $_POST['line16_sms_port'] ;
  $updatesql.=",L16_SMS_PORT='".$values['L16_SMS_PORT']."'";
  $values['L16_SMS_CLI_ID'] = $_POST['line16_sms_cli_id'] ;
  $updatesql.=",L16_SMS_CLI_ID='".$values['L16_SMS_CLI_ID']."'";
  $values['L16_SMS_CLI_PASSWD'] = $_POST['line16_sms_cli_passwd'] ;
  $updatesql.=",L16_SMS_CLI_PASSWD='".$values['L16_SMS_CLI_PASSWD']."'";
endif; 
 $values['LINE16_SMS_VALIDITY_TIME'] = $_POST['line16_sms_validity_time'] ;
  $updatesql.=",LINE16_SMS_VALIDITY_TIME='".$values['LINE16_SMS_VALIDITY_TIME']."'";
  $values['L16_DISABLE_SMS_ACK'] = $_POST['line16_sms_ack_enable']=='on'?'0':'1';
  $updatesql.=",L16_DISABLE_SMS_ACK='".$values['L16_DISABLE_SMS_ACK']."'";


  $values['L16_DISABLE_IN'] = $_POST['line16_fw_to_voip']=='on'?'0':'1';
  $updatesql.=",L16_DISABLE_IN='".$values['L16_DISABLE_IN']."'";
if($values['L16_DISABLE_IN'] == 0):
  $values['L16_FW_NUM_TO_VOIP'] = $_POST['line16_fw_num_to_voip'] ;
  $updatesql.=",L16_FW_NUM_TO_VOIP='".$values['L16_FW_NUM_TO_VOIP']."'";
  $values['L16_V_DIGIT_MAP'] = $_POST['line16_v_dial_plan'] ;
  $updatesql.=",L16_V_DIGIT_MAP='".$values['L16_V_DIGIT_MAP']."'";
  $values['L16_FW2VOIP_AUTH_MODE'] = $_POST['line16_fw2voip_auth_mode'] ;
  $updatesql.=",L16_FW2VOIP_AUTH_MODE='".$values['L16_FW2VOIP_AUTH_MODE']."'";
if($values['L16_FW2VOIP_AUTH_MODE'] == 'PASSWD'):
  $values['L16_FW_TO_VOIP_PASSWD'] = $_POST['line16_fw_to_voip_passwd'] ;
  $updatesql.=",L16_FW_TO_VOIP_PASSWD='".$values['L16_FW_TO_VOIP_PASSWD']."'";
endif; 
if($values['L16_FW2VOIP_AUTH_MODE'] == 'PASSWD_WLIST'):
  $values['L16_FW_TO_VOIP_PASSWD'] = $_POST['l16_fw_to_voip_passwd'] ;
  $updatesql.=",L16_FW_TO_VOIP_PASSWD='".$values['L16_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 

  $values['L16_GROUP_MODE'] = $_POST['line16_gsm_group_mode'] ;
  $updatesql.=",L16_GROUP_MODE='".$values['L16_GROUP_MODE']."'";
if($values['L16_GROUP_MODE'] == 'SVR'):
  $values['L16_GSM_FW_MODE'] = $_POST['line16_gsm_fw_mode'] ;
  $updatesql.=",L16_GSM_FW_MODE='".$values['L16_GSM_FW_MODE']."'";
  $values['L16_PARTNER_SVR'] = $_POST['line16_group_share_addr'] ;
  $updatesql.=",L16_PARTNER_SVR='".$values['L16_PARTNER_SVR']."'";
endif; 
if($values['L16_GROUP_MODE'] == 'CLI'):
  $values['L16_GROUP_SVR'] = $_POST['line16_group_svr_addr'] ;
  $updatesql.=",L16_GROUP_SVR='".$values['L16_GROUP_SVR']."'";
endif;
  $values['L16_GSM_NUMBER'] = $_POST['line16_gsm_num'] ;
  $updatesql.=",L16_GSM_NUMBER='".$values['L16_GSM_NUMBER']."'";
  $values['L16_CALLER_ANONYMOUS'] = $_POST['line16_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql.=",L16_CALLER_ANONYMOUS='".$values['L16_CALLER_ANONYMOUS']."'";
  
  
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
  $values['SMS_FW_GSM_NUM'] = $_POST['sms_fw_gsm_num'] ;
  $updatesql.=",SMS_FW_GSM_NUM='".$values['SMS_FW_GSM_NUM']."'";
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
  
  

/* media*/
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
if($values['MG_CRYPT'] == 'DISABLE'):
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
if (isset($_POST['symmetric_rtp']))
  $values['SYMMETRIC_RTP'] = $_POST['symmetric_rtp']=='on'?'1':'0';
else
  $values['SYMMETRIC_RTP'] = '0';
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


/* remote*/
 
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
  
  $values['RMSIM_ENABLE'] = $_POST['rmsim_enable']=='on'?'1':'0' ;
  $updatesql.=",RMSIM_ENABLE='".$values['RMSIM_ENABLE']."'";
if($values['RMSIM_ENABLE'] == 1):
  $values['SMB_SVR'] = $_POST['smb_svr'] ;
  $updatesql.=",SMB_SVR='".$values['SMB_SVR']."'";
  $values['SMB_ID'] = $_POST['smb_id'] ;
  $updatesql.=",SMB_ID='".$values['SMB_ID']."'";
  $values['SMB_KEY'] = $_POST['smb_key'] ;
  $updatesql.=",SMB_KEY='".$values['SMB_KEY']."'";
endif; 
  
  
  
  
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
  $insertsql.=",H323_GW_PREFIX";
  $insertsql2.="','".$values['H323_GW_PREFIX'];
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
  $insertsql.=",H323_LINE1_NUMBER";
  $insertsql2.="','".$values['H323_LINE1_NUMBER'];
  $insertsql.=",H323_LINE1_H323_ID";
  $insertsql2.="','".$values['H323_LINE1_H323_ID'];
  $insertsql.=",H323_LINE1_GW_PREFIX";
  $insertsql2.="','".$values['H323_LINE1_GW_PREFIX'];
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
  $insertsql.=",H323_LINE2_NUMBER";
  $insertsql2.="','".$values['H323_LINE2_NUMBER'];
  $insertsql.=",H323_LINE2_H323_ID";
  $insertsql2.="','".$values['H323_LINE2_H323_ID'];
  $insertsql.=",H323_LINE2_GW_PREFIX";
  $insertsql2.="','".$values['H323_LINE2_GW_PREFIX'];
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
  $insertsql.=",H323_LINE3_NUMBER";
  $insertsql2.="','".$values['H323_LINE3_NUMBER'];
  $insertsql.=",H323_LINE3_H323_ID";
  $insertsql2.="','".$values['H323_LINE3_H323_ID'];
  $insertsql.=",H323_LINE3_GW_PREFIX";
  $insertsql2.="','".$values['H323_LINE3_GW_PREFIX'];
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
  $insertsql.=",H323_LINE4_NUMBER";
  $insertsql2.="','".$values['H323_LINE4_NUMBER'];
  $insertsql.=",H323_LINE4_H323_ID";
  $insertsql2.="','".$values['H323_LINE4_H323_ID'];
  $insertsql.=",H323_LINE4_GW_PREFIX";
  $insertsql2.="','".$values['H323_LINE4_GW_PREFIX'];
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
  $insertsql.=",H323_LINE5_NUMBER";
  $insertsql2.="','".$values['H323_LINE5_NUMBER'];
  $insertsql.=",H323_LINE5_H323_ID";
  $insertsql2.="','".$values['H323_LINE5_H323_ID'];
  $insertsql.=",H323_LINE5_GW_PREFIX";
  $insertsql2.="','".$values['H323_LINE5_GW_PREFIX'];
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
  $insertsql.=",H323_LINE6_NUMBER";
  $insertsql2.="','".$values['H323_LINE6_NUMBER'];
  $insertsql.=",H323_LINE6_H323_ID";
  $insertsql2.="','".$values['H323_LINE6_H323_ID'];
  $insertsql.=",H323_LINE6_GW_PREFIX";
  $insertsql2.="','".$values['H323_LINE6_GW_PREFIX'];
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
  $insertsql.=",H323_LINE7_NUMBER";
  $insertsql2.="','".$values['H323_LINE7_NUMBER'];
  $insertsql.=",H323_LINE7_H323_ID";
  $insertsql2.="','".$values['H323_LINE7_H323_ID'];
  $insertsql.=",H323_LINE7_GW_PREFIX";
  $insertsql2.="','".$values['H323_LINE7_GW_PREFIX'];
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
  $insertsql.=",H323_LINE8_NUMBER";
  $insertsql2.="','".$values['H323_LINE8_NUMBER'];
  $insertsql.=",H323_LINE8_H323_ID";
  $insertsql2.="','".$values['H323_LINE8_H323_ID'];
  $insertsql.=",H323_LINE8_GW_PREFIX";
  $insertsql2.="','".$values['H323_LINE8_GW_PREFIX'];
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
  $insertsql.=",H323_LINE9_NUMBER";
  $insertsql2.="','".$values['H323_LINE9_NUMBER'];
  $insertsql.=",H323_LINE9_H323_ID";
  $insertsql2.="','".$values['H323_LINE9_H323_ID'];
  $insertsql.=",H323_LINE9_GW_PREFIX";
  $insertsql2.="','".$values['H323_LINE9_GW_PREFIX'];
  $insertsql.=",H323_LINE9_GKADDR";
  $insertsql2.="','".$values['H323_LINE9_GKADDR'];
  $insertsql.=",H323_LINE9_VOS_ENABLE";
  $insertsql2.="','".$values['H323_LINE9_VOS_ENABLE'];
  $insertsql.=",H323_LINE9_VOS_MODE";
  $insertsql2.="','".$values['H323_LINE9_VOS_MODE'];
  $insertsql.=",H323_LINE9_AUTH";
  $insertsql2.="','".$values['H323_LINE9_AUTH'];
  $insertsql.=",H323_LINE9_H235_ID";
  $insertsql2.="','".$values['H323_LINE9_H235_ID'];
  $insertsql.=",H323_LINE9_H235_PASSWD";
  $insertsql2.="','".$values['H323_LINE9_H235_PASSWD'];
  $insertsql.=",H323_LINE10_NUMBER";
  $insertsql2.="','".$values['H323_LINE10_NUMBER'];
  $insertsql.=",H323_LINE10_H323_ID";
  $insertsql2.="','".$values['H323_LINE10_H323_ID'];
  $insertsql.=",H323_LINE10_GW_PREFIX";
  $insertsql2.="','".$values['H323_LINE10_GW_PREFIX'];
  $insertsql.=",H323_LINE10_GKADDR";
  $insertsql2.="','".$values['H323_LINE10_GKADDR'];
  $insertsql.=",H323_LINE10_VOS_ENABLE";
  $insertsql2.="','".$values['H323_LINE10_VOS_ENABLE'];
  $insertsql.=",H323_LINE10_VOS_MODE";
  $insertsql2.="','".$values['H323_LINE10_VOS_MODE'];
  $insertsql.=",H323_LINE10_AUTH";
  $insertsql2.="','".$values['H323_LINE10_AUTH'];
  $insertsql.=",H323_LINE10_H235_ID";
  $insertsql2.="','".$values['H323_LINE10_H235_ID'];
  $insertsql.=",H323_LINE10_H235_PASSWD";
  $insertsql2.="','".$values['H323_LINE10_H235_PASSWD'];
  $insertsql.=",H323_LINE11_NUMBER";
  $insertsql2.="','".$values['H323_LINE11_NUMBER'];
  $insertsql.=",H323_LINE11_H323_ID";
  $insertsql2.="','".$values['H323_LINE11_H323_ID'];
  $insertsql.=",H323_LINE11_GW_PREFIX";
  $insertsql2.="','".$values['H323_LINE11_GW_PREFIX'];
  $insertsql.=",H323_LINE11_GKADDR";
  $insertsql2.="','".$values['H323_LINE11_GKADDR'];
  $insertsql.=",H323_LINE11_VOS_ENABLE";
  $insertsql2.="','".$values['H323_LINE11_VOS_ENABLE'];
  $insertsql.=",H323_LINE11_VOS_MODE";
  $insertsql2.="','".$values['H323_LINE11_VOS_MODE'];
  $insertsql.=",H323_LINE11_AUTH";
  $insertsql2.="','".$values['H323_LINE11_AUTH'];
  $insertsql.=",H323_LINE11_H235_ID";
  $insertsql2.="','".$values['H323_LINE11_H235_ID'];
  $insertsql.=",H323_LINE11_H235_PASSWD";
  $insertsql2.="','".$values['H323_LINE11_H235_PASSWD'];
  $insertsql.=",H323_LINE12_NUMBER";
  $insertsql2.="','".$values['H323_LINE12_NUMBER'];
  $insertsql.=",H323_LINE12_H323_ID";
  $insertsql2.="','".$values['H323_LINE12_H323_ID'];
  $insertsql.=",H323_LINE12_GW_PREFIX";
  $insertsql2.="','".$values['H323_LINE12_GW_PREFIX'];
  $insertsql.=",H323_LINE12_GKADDR";
  $insertsql2.="','".$values['H323_LINE12_GKADDR'];
  $insertsql.=",H323_LINE12_VOS_ENABLE";
  $insertsql2.="','".$values['H323_LINE12_VOS_ENABLE'];
  $insertsql.=",H323_LINE12_VOS_MODE";
  $insertsql2.="','".$values['H323_LINE12_VOS_MODE'];
  $insertsql.=",H323_LINE12_AUTH";
  $insertsql2.="','".$values['H323_LINE12_AUTH'];
  $insertsql.=",H323_LINE12_H235_ID";
  $insertsql2.="','".$values['H323_LINE12_H235_ID'];
  $insertsql.=",H323_LINE12_H235_PASSWD";
  $insertsql2.="','".$values['H323_LINE12_H235_PASSWD'];
  $insertsql.=",H323_LINE13_NUMBER";
  $insertsql2.="','".$values['H323_LINE13_NUMBER'];
  $insertsql.=",H323_LINE13_H323_ID";
  $insertsql2.="','".$values['H323_LINE13_H323_ID'];
  $insertsql.=",H323_LINE13_GW_PREFIX";
  $insertsql2.="','".$values['H323_LINE13_GW_PREFIX'];
  $insertsql.=",H323_LINE13_GKADDR";
  $insertsql2.="','".$values['H323_LINE13_GKADDR'];
  $insertsql.=",H323_LINE13_VOS_ENABLE";
  $insertsql2.="','".$values['H323_LINE13_VOS_ENABLE'];
  $insertsql.=",H323_LINE13_VOS_MODE";
  $insertsql2.="','".$values['H323_LINE13_VOS_MODE'];
  $insertsql.=",H323_LINE13_AUTH";
  $insertsql2.="','".$values['H323_LINE13_AUTH'];
  $insertsql.=",H323_LINE13_H235_ID";
  $insertsql2.="','".$values['H323_LINE13_H235_ID'];
  $insertsql.=",H323_LINE13_H235_PASSWD";
  $insertsql2.="','".$values['H323_LINE13_H235_PASSWD'];
  $insertsql.=",H323_LINE14_NUMBER";
  $insertsql2.="','".$values['H323_LINE14_NUMBER'];
  $insertsql.=",H323_LINE14_H323_ID";
  $insertsql2.="','".$values['H323_LINE14_H323_ID'];
  $insertsql.=",H323_LINE14_GW_PREFIX";
  $insertsql2.="','".$values['H323_LINE14_GW_PREFIX'];
  $insertsql.=",H323_LINE14_GKADDR";
  $insertsql2.="','".$values['H323_LINE14_GKADDR'];
  $insertsql.=",H323_LINE14_VOS_ENABLE";
  $insertsql2.="','".$values['H323_LINE14_VOS_ENABLE'];
  $insertsql.=",H323_LINE14_VOS_MODE";
  $insertsql2.="','".$values['H323_LINE14_VOS_MODE'];
  $insertsql.=",H323_LINE14_AUTH";
  $insertsql2.="','".$values['H323_LINE14_AUTH'];
  $insertsql.=",H323_LINE14_H235_ID";
  $insertsql2.="','".$values['H323_LINE14_H235_ID'];
  $insertsql.=",H323_LINE14_H235_PASSWD";
  $insertsql2.="','".$values['H323_LINE14_H235_PASSWD']; 
  $insertsql.=",H323_LINE15_NUMBER";
  $insertsql2.="','".$values['H323_LINE15_NUMBER'];
  $insertsql.=",H323_LINE15_H323_ID";
  $insertsql2.="','".$values['H323_LINE15_H323_ID'];
  $insertsql.=",H323_LINE15_GW_PREFIX";
  $insertsql2.="','".$values['H323_LINE15_GW_PREFIX'];
  $insertsql.=",H323_LINE15_GKADDR";
  $insertsql2.="','".$values['H323_LINE15_GKADDR'];
  $insertsql.=",H323_LINE15_VOS_ENABLE";
  $insertsql2.="','".$values['H323_LINE15_VOS_ENABLE'];
  $insertsql.=",H323_LINE15_VOS_MODE";
  $insertsql2.="','".$values['H323_LINE15_VOS_MODE'];
  $insertsql.=",H323_LINE15_AUTH";
  $insertsql2.="','".$values['H323_LINE15_AUTH'];
  $insertsql.=",H323_LINE15_H235_ID";
  $insertsql2.="','".$values['H323_LINE15_H235_ID'];
  $insertsql.=",H323_LINE15_H235_PASSWD";
  $insertsql2.="','".$values['H323_LINE15_H235_PASSWD'];  
  $insertsql.=",H323_LINE16_NUMBER";
  $insertsql2.="','".$values['H323_LINE16_NUMBER'];
  $insertsql.=",H323_LINE16_H323_ID";
  $insertsql2.="','".$values['H323_LINE16_H323_ID'];
  $insertsql.=",H323_LINE16_GW_PREFIX";
  $insertsql2.="','".$values['H323_LINE16_GW_PREFIX'];
  $insertsql.=",H323_LINE16_GKADDR";
  $insertsql2.="','".$values['H323_LINE16_GKADDR'];
  $insertsql.=",H323_LINE16_VOS_ENABLE";
  $insertsql2.="','".$values['H323_LINE16_VOS_ENABLE'];
  $insertsql.=",H323_LINE16_VOS_MODE";
  $insertsql2.="','".$values['H323_LINE16_VOS_MODE'];
  $insertsql.=",H323_LINE16_AUTH";
  $insertsql2.="','".$values['H323_LINE16_AUTH'];
  $insertsql.=",H323_LINE16_H235_ID";
  $insertsql2.="','".$values['H323_LINE16_H235_ID'];
  $insertsql.=",H323_LINE16_H235_PASSWD";
  $insertsql2.="','".$values['H323_LINE16_H235_PASSWD'];
  
  $insertsql.=",H323_GROUP1_NUMBER";
  $insertsql2.="','".$values['H323_GROUP1_NUMBER'];
  $insertsql.=",H323_GROUP1_H323_ID";
  $insertsql2.="','".$values['H323_GROUP1_H323_ID'];
  $insertsql.=",H323_GROUP1_GW_PREFIX";
  $insertsql2.="','".$values['H323_GROUP1_GW_PREFIX'];
  $insertsql.=",H323_GROUP1_GKADDR";
  $insertsql2.="','".$values['H323_GROUP1_GKADDR'];
  $insertsql.=",H323_G1_VOS_ENABLE";
  $insertsql2.="','".$values['H323_G1_VOS_ENABLE'];
  $insertsql.=",H323_G1_VOS_MODE";
  $insertsql2.="','".$values['H323_G1_VOS_MODE'];
  $insertsql.=",H323_GROUP1_AUTH";
  $insertsql2.="','".$values['H323_GROUP1_AUTH'];
  $insertsql.=",H323_GROUP1_H235_ID";
  $insertsql2.="','".$values['H323_GROUP1_H235_ID'];
  $insertsql.=",H323_GROUP1_H235_PASSWD";
  $insertsql2.="','".$values['H323_GROUP1_H235_PASSWD'];
  $insertsql.=",H323_L1_IN_G1";
  $insertsql2.="','".$values['H323_L1_IN_G1'];
  $insertsql.=",H323_L2_IN_G1";
  $insertsql2.="','".$values['H323_L2_IN_G1'];
  $insertsql.=",H323_L3_IN_G1";
  $insertsql2.="','".$values['H323_L3_IN_G1'];
  $insertsql.=",H323_L4_IN_G1";
  $insertsql2.="','".$values['H323_L4_IN_G1'];
  $insertsql.=",H323_L5_IN_G1";
  $insertsql2.="','".$values['H323_L5_IN_G1'];
  $insertsql.=",H323_L6_IN_G1";
  $insertsql2.="','".$values['H323_L6_IN_G1'];
  $insertsql.=",H323_L7_IN_G1";
  $insertsql2.="','".$values['H323_L7_IN_G1'];
  $insertsql.=",H323_L8_IN_G1";
  $insertsql2.="','".$values['H323_L8_IN_G1'];
  $insertsql.=",H323_L9_IN_G1";
  $insertsql2.="','".$values['H323_L9_IN_G1'];
  $insertsql.=",H323_L10_IN_G1";
  $insertsql2.="','".$values['H323_L10_IN_G1'];
  $insertsql.=",H323_L11_IN_G1";
  $insertsql2.="','".$values['H323_L11_IN_G1'];
  $insertsql.=",H323_L12_IN_G1";
  $insertsql2.="','".$values['H323_L12_IN_G1'];
  $insertsql.=",H323_L13_IN_G1";
  $insertsql2.="','".$values['H323_L13_IN_G1'];
  $insertsql.=",H323_L14_IN_G1";
  $insertsql2.="','".$values['H323_L14_IN_G1'];
  $insertsql.=",H323_L15_IN_G1";
  $insertsql2.="','".$values['H323_L15_IN_G1'];
  $insertsql.=",H323_L16_IN_G1";
  $insertsql2.="','".$values['H323_L16_IN_G1'];
  $insertsql.=",H323_GROUP2_NUMBER";
  $insertsql2.="','".$values['H323_GROUP2_NUMBER'];
  $insertsql.=",H323_GROUP2_H323_ID";
  $insertsql2.="','".$values['H323_GROUP2_H323_ID'];
  $insertsql.=",H323_GROUP2_GW_PREFIX";
  $insertsql2.="','".$values['H323_GROUP2_GW_PREFIX'];
  $insertsql.=",H323_GROUP2_GKADDR";
  $insertsql2.="','".$values['H323_GROUP2_GKADDR'];
  $insertsql.=",H323_G2_VOS_ENABLE";
  $insertsql2.="','".$values['H323_G2_VOS_ENABLE'];
  $insertsql.=",H323_G2_VOS_MODE";
  $insertsql2.="','".$values['H323_G2_VOS_MODE'];
  $insertsql.=",H323_GROUP2_AUTH";
  $insertsql2.="','".$values['H323_GROUP2_AUTH'];
  $insertsql.=",H323_GROUP2_H235_ID";
  $insertsql2.="','".$values['H323_GROUP2_H235_ID'];
  $insertsql.=",H323_GROUP2_H235_PASSWD";
  $insertsql2.="','".$values['H323_GROUP2_H235_PASSWD'];
  $insertsql.=",H323_L1_IN_G2";
  $insertsql2.="','".$values['H323_L1_IN_G2'];
  $insertsql.=",H323_L2_IN_G2";
  $insertsql2.="','".$values['H323_L2_IN_G2'];
  $insertsql.=",H323_L3_IN_G2";
  $insertsql2.="','".$values['H323_L3_IN_G2'];
  $insertsql.=",H323_L4_IN_G2";
  $insertsql2.="','".$values['H323_L4_IN_G2'];
  $insertsql.=",H323_L5_IN_G2";
  $insertsql2.="','".$values['H323_L5_IN_G2'];
  $insertsql.=",H323_L6_IN_G2";
  $insertsql2.="','".$values['H323_L6_IN_G2'];
  $insertsql.=",H323_L7_IN_G2";
  $insertsql2.="','".$values['H323_L7_IN_G2'];
  $insertsql.=",H323_L8_IN_G2";
  $insertsql2.="','".$values['H323_L8_IN_G2'];
  $insertsql.=",H323_L9_IN_G2";
  $insertsql2.="','".$values['H323_L9_IN_G2'];
  $insertsql.=",H323_L10_IN_G2";
  $insertsql2.="','".$values['H323_L10_IN_G2'];
  $insertsql.=",H323_L11_IN_G2";
  $insertsql2.="','".$values['H323_L11_IN_G2'];
  $insertsql.=",H323_L12_IN_G2";
  $insertsql2.="','".$values['H323_L12_IN_G2'];
  $insertsql.=",H323_L13_IN_G2";
  $insertsql2.="','".$values['H323_L13_IN_G2'];
  $insertsql.=",H323_L14_IN_G2";
  $insertsql2.="','".$values['H323_L14_IN_G2'];
  $insertsql.=",H323_L15_IN_G2";
  $insertsql2.="','".$values['H323_L15_IN_G2'];
  $insertsql.=",H323_L16_IN_G2";
  $insertsql2.="','".$values['H323_L16_IN_G2'];
  $insertsql.=",H323_GROUP3_NUMBER";
  $insertsql2.="','".$values['H323_GROUP3_NUMBER'];
  $insertsql.=",H323_GROUP3_H323_ID";
  $insertsql2.="','".$values['H323_GROUP3_H323_ID'];
  $insertsql.=",H323_GROUP3_GW_PREFIX";
  $insertsql2.="','".$values['H323_GROUP3_GW_PREFIX'];
  $insertsql.=",H323_GROUP3_GKADDR";
  $insertsql2.="','".$values['H323_GROUP3_GKADDR'];
  $insertsql.=",H323_G3_VOS_ENABLE";
  $insertsql2.="','".$values['H323_G3_VOS_ENABLE'];
  $insertsql.=",H323_G3_VOS_MODE";
  $insertsql2.="','".$values['H323_G3_VOS_MODE'];
  $insertsql.=",H323_GROUP3_AUTH";
  $insertsql2.="','".$values['H323_GROUP3_AUTH'];
  $insertsql.=",H323_GROUP3_H235_ID";
  $insertsql2.="','".$values['H323_GROUP3_H235_ID'];
  $insertsql.=",H323_GROUP3_H235_PASSWD";
  $insertsql2.="','".$values['H323_GROUP3_H235_PASSWD'];
  $insertsql.=",H323_L1_IN_G3";
  $insertsql2.="','".$values['H323_L1_IN_G3'];
  $insertsql.=",H323_L2_IN_G3";
  $insertsql2.="','".$values['H323_L2_IN_G3'];
  $insertsql.=",H323_L3_IN_G3";
  $insertsql2.="','".$values['H323_L3_IN_G3'];
  $insertsql.=",H323_L4_IN_G3";
  $insertsql2.="','".$values['H323_L4_IN_G3'];
  $insertsql.=",H323_L5_IN_G3";
  $insertsql2.="','".$values['H323_L5_IN_G3'];
  $insertsql.=",H323_L6_IN_G3";
  $insertsql2.="','".$values['H323_L6_IN_G3'];
  $insertsql.=",H323_L7_IN_G3";
  $insertsql2.="','".$values['H323_L7_IN_G3'];
  $insertsql.=",H323_L8_IN_G3";
  $insertsql2.="','".$values['H323_L8_IN_G3'];
  $insertsql.=",H323_L9_IN_G3";
  $insertsql2.="','".$values['H323_L9_IN_G3'];
  $insertsql.=",H323_L10_IN_G3";
  $insertsql2.="','".$values['H323_L10_IN_G3'];
  $insertsql.=",H323_L11_IN_G3";
  $insertsql2.="','".$values['H323_L11_IN_G3'];
  $insertsql.=",H323_L12_IN_G3";
  $insertsql2.="','".$values['H323_L12_IN_G3'];
  $insertsql.=",H323_L13_IN_G3";
  $insertsql2.="','".$values['H323_L13_IN_G3'];
  $insertsql.=",H323_L14_IN_G3";
  $insertsql2.="','".$values['H323_L14_IN_G3'];
  $insertsql.=",H323_L15_IN_G3";
  $insertsql2.="','".$values['H323_L15_IN_G3'];
  $insertsql.=",H323_L16_IN_G3";
  $insertsql2.="','".$values['H323_L16_IN_G3'];
  $insertsql.=",H323_GROUP4_NUMBER";
  $insertsql2.="','".$values['H323_GROUP4_NUMBER'];
  $insertsql.=",H323_GROUP4_H323_ID";
  $insertsql2.="','".$values['H323_GROUP4_H323_ID'];
  $insertsql.=",H323_GROUP4_GW_PREFIX";
  $insertsql2.="','".$values['H323_GROUP4_GW_PREFIX'];
  $insertsql.=",H323_GROUP4_GKADDR";
  $insertsql2.="','".$values['H323_GROUP4_GKADDR'];
  $insertsql.=",H323_G4_VOS_ENABLE";
  $insertsql2.="','".$values['H323_G4_VOS_ENABLE'];
  $insertsql.=",H323_G4_VOS_MODE";
  $insertsql2.="','".$values['H323_G4_VOS_MODE'];
  $insertsql.=",H323_GROUP4_AUTH";
  $insertsql2.="','".$values['H323_GROUP4_AUTH'];
  $insertsql.=",H323_GROUP4_H235_ID";
  $insertsql2.="','".$values['H323_GROUP4_H235_ID'];
  $insertsql.=",H323_GROUP4_H235_PASSWD";
  $insertsql2.="','".$values['H323_GROUP4_H235_PASSWD'];
  $insertsql.=",H323_L1_IN_G4";
  $insertsql2.="','".$values['H323_L1_IN_G4'];
  $insertsql.=",H323_L2_IN_G4";
  $insertsql2.="','".$values['H323_L2_IN_G4'];
  $insertsql.=",H323_L3_IN_G4";
  $insertsql2.="','".$values['H323_L3_IN_G4'];
  $insertsql.=",H323_L4_IN_G4";
  $insertsql2.="','".$values['H323_L4_IN_G4'];
  $insertsql.=",H323_L5_IN_G4";
  $insertsql2.="','".$values['H323_L5_IN_G4'];
  $insertsql.=",H323_L6_IN_G4";
  $insertsql2.="','".$values['H323_L6_IN_G4'];
  $insertsql.=",H323_L7_IN_G4";
  $insertsql2.="','".$values['H323_L7_IN_G4'];
  $insertsql.=",H323_L8_IN_G4";
  $insertsql2.="','".$values['H323_L8_IN_G4'];
  $insertsql.=",H323_L9_IN_G4";
  $insertsql2.="','".$values['H323_L9_IN_G4'];
  $insertsql.=",H323_L10_IN_G4";
  $insertsql2.="','".$values['H323_L10_IN_G4'];
  $insertsql.=",H323_L11_IN_G4";
  $insertsql2.="','".$values['H323_L11_IN_G4'];
  $insertsql.=",H323_L12_IN_G4";
  $insertsql2.="','".$values['H323_L12_IN_G4'];
  $insertsql.=",H323_L13_IN_G4";
  $insertsql2.="','".$values['H323_L13_IN_G4'];
  $insertsql.=",H323_L14_IN_G4";
  $insertsql2.="','".$values['H323_L14_IN_G4'];
  $insertsql.=",H323_L15_IN_G4";
  $insertsql2.="','".$values['H323_L15_IN_G4'];
  $insertsql.=",H323_L16_IN_G4";
  $insertsql2.="','".$values['H323_L16_IN_G4'];
  
  
  
  $insertsql.=",SIP_CONFIG_MODE";
  $insertsql2.="','".$values['SIP_CONFIG_MODE'];
  $insertsql.=",SIP_CONTACT0_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT0_DIAL_DIGITS'];
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
  $insertsql.=",SIP_SMODE_USE_BSVR";
  $insertsql2.="','".$values['SIP_SMODE_USE_BSVR'];
  $insertsql.=",SIP_CONTACT1_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT1_PROXY'];
  $insertsql.=",SIP_CONTACT1_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT1_SERVER'];
  $insertsql.=",SIP_CONTACT1_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT1_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT6_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT6_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT6_GW_PREFIX";
  $insertsql2.="','".$values['SIP_CONTACT6_GW_PREFIX'];
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
  $insertsql.=",SIP_CONTACT7_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT7_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT7_GW_PREFIX";
  $insertsql2.="','".$values['SIP_CONTACT7_GW_PREFIX'];
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
  $insertsql.=",SIP_CONTACT8_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT8_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT8_GW_PREFIX";
  $insertsql2.="','".$values['SIP_CONTACT8_GW_PREFIX'];
  $insertsql.=",SIP_CONTACT8_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT8_PROXY'];
  $insertsql.=",SIP_CONTACT8_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT8_SERVER'];
  $insertsql.=",SIP_CONTACT8_REGISTER_EXPIRED";
  $insertsql2.="','".$values['SIP_CONTACT8_REGISTER_EXPIRED'];
  $insertsql.=",SIP_CONTACT8_OUTBOUND_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT8_OUTBOUND_PROXY'];
  $insertsql.=",SIP_CONTACT8_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT8_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT8_LOGIN";
  $insertsql2.="','".$values['SIP_CONTACT8_LOGIN'];
  $insertsql.=",SIP_CONTACT8_PASSWD";
  $insertsql2.="','".$values['SIP_CONTACT8_PASSWD'];
  $insertsql.=",SIP_CONTACT9_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT9_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT9_GW_PREFIX";
  $insertsql2.="','".$values['SIP_CONTACT9_GW_PREFIX'];
  $insertsql.=",SIP_CONTACT9_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT9_PROXY'];
  $insertsql.=",SIP_CONTACT9_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT9_SERVER'];
  $insertsql.=",SIP_CONTACT9_REGISTER_EXPIRED";
  $insertsql2.="','".$values['SIP_CONTACT9_REGISTER_EXPIRED'];
  $insertsql.=",SIP_CONTACT9_OUTBOUND_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT9_OUTBOUND_PROXY'];
  $insertsql.=",SIP_CONTACT9_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT9_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT9_LOGIN";
  $insertsql2.="','".$values['SIP_CONTACT9_LOGIN'];
  $insertsql.=",SIP_CONTACT9_PASSWD";
  $insertsql2.="','".$values['SIP_CONTACT9_PASSWD'];
  $insertsql.=",SIP_CONTACT10_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT10_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT10_GW_PREFIX";
  $insertsql2.="','".$values['SIP_CONTACT10_GW_PREFIX'];
  $insertsql.=",SIP_CONTACT10_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT10_PROXY'];
  $insertsql.=",SIP_CONTACT10_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT10_SERVER'];
  $insertsql.=",SIP_CONTACT10_REGISTER_EXPIRED";
  $insertsql2.="','".$values['SIP_CONTACT10_REGISTER_EXPIRED'];
  $insertsql.=",SIP_CONTACT10_OUTBOUND_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT10_OUTBOUND_PROXY'];
  $insertsql.=",SIP_CONTACT10_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT10_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT10_LOGIN";
  $insertsql2.="','".$values['SIP_CONTACT10_LOGIN'];
  $insertsql.=",SIP_CONTACT10_PASSWD";
  $insertsql2.="','".$values['SIP_CONTACT10_PASSWD'];
  $insertsql.=",SIP_CONTACT11_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT11_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT11_GW_PREFIX";
  $insertsql2.="','".$values['SIP_CONTACT11_GW_PREFIX'];
  $insertsql.=",SIP_CONTACT11_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT11_PROXY'];
  $insertsql.=",SIP_CONTACT11_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT11_SERVER'];
  $insertsql.=",SIP_CONTACT11_REGISTER_EXPIRED";
  $insertsql2.="','".$values['SIP_CONTACT11_REGISTER_EXPIRED'];
  $insertsql.=",SIP_CONTACT11_OUTBOUND_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT11_OUTBOUND_PROXY'];
  $insertsql.=",SIP_CONTACT11_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT11_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT11_LOGIN";
  $insertsql2.="','".$values['SIP_CONTACT11_LOGIN'];
  $insertsql.=",SIP_CONTACT11_PASSWD";
  $insertsql2.="','".$values['SIP_CONTACT11_PASSWD'];
  $insertsql.=",SIP_CONTACT12_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT12_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT12_GW_PREFIX";
  $insertsql2.="','".$values['SIP_CONTACT12_GW_PREFIX'];
  $insertsql.=",SIP_CONTACT12_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT12_PROXY'];
  $insertsql.=",SIP_CONTACT12_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT12_SERVER'];
  $insertsql.=",SIP_CONTACT12_REGISTER_EXPIRED";
  $insertsql2.="','".$values['SIP_CONTACT12_REGISTER_EXPIRED'];
  $insertsql.=",SIP_CONTACT12_OUTBOUND_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT12_OUTBOUND_PROXY'];
  $insertsql.=",SIP_CONTACT12_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT12_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT12_LOGIN";
  $insertsql2.="','".$values['SIP_CONTACT12_LOGIN'];
  $insertsql.=",SIP_CONTACT12_PASSWD";
  $insertsql2.="','".$values['SIP_CONTACT12_PASSWD'];
  $insertsql.=",SIP_CONTACT13_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT13_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT13_GW_PREFIX";
  $insertsql2.="','".$values['SIP_CONTACT13_GW_PREFIX'];
  $insertsql.=",SIP_CONTACT13_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT13_PROXY'];
  $insertsql.=",SIP_CONTACT13_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT13_SERVER'];
  $insertsql.=",SIP_CONTACT13_REGISTER_EXPIRED";
  $insertsql2.="','".$values['SIP_CONTACT13_REGISTER_EXPIRED'];
  $insertsql.=",SIP_CONTACT13_OUTBOUND_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT13_OUTBOUND_PROXY'];
  $insertsql.=",SIP_CONTACT13_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT13_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT13_LOGIN";
  $insertsql2.="','".$values['SIP_CONTACT13_LOGIN'];
  $insertsql.=",SIP_CONTACT13_PASSWD";
  $insertsql2.="','".$values['SIP_CONTACT13_PASSWD'];
  $insertsql.=",SIP_CONTACT14_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT14_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT14_GW_PREFIX";
  $insertsql2.="','".$values['SIP_CONTACT14_GW_PREFIX'];
  $insertsql.=",SIP_CONTACT14_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT14_PROXY'];
  $insertsql.=",SIP_CONTACT14_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT14_SERVER'];
  $insertsql.=",SIP_CONTACT14_REGISTER_EXPIRED";
  $insertsql2.="','".$values['SIP_CONTACT14_REGISTER_EXPIRED'];
  $insertsql.=",SIP_CONTACT14_OUTBOUND_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT14_OUTBOUND_PROXY'];
  $insertsql.=",SIP_CONTACT14_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT14_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT14_LOGIN";
  $insertsql2.="','".$values['SIP_CONTACT14_LOGIN'];
  $insertsql.=",SIP_CONTACT14_PASSWD";
  $insertsql2.="','".$values['SIP_CONTACT14_PASSWD'];
  $insertsql.=",SIP_CONTACT15_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT15_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT15_GW_PREFIX";
  $insertsql2.="','".$values['SIP_CONTACT15_GW_PREFIX'];
  $insertsql.=",SIP_CONTACT15_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT15_PROXY'];
  $insertsql.=",SIP_CONTACT15_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT15_SERVER'];
  $insertsql.=",SIP_CONTACT15_REGISTER_EXPIRED";
  $insertsql2.="','".$values['SIP_CONTACT15_REGISTER_EXPIRED'];
  $insertsql.=",SIP_CONTACT15_OUTBOUND_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT15_OUTBOUND_PROXY'];
  $insertsql.=",SIP_CONTACT15_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT15_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT15_LOGIN";
  $insertsql2.="','".$values['SIP_CONTACT15_LOGIN'];
  $insertsql.=",SIP_CONTACT15_PASSWD";
  $insertsql2.="','".$values['SIP_CONTACT15_PASSWD'];
  $insertsql.=",SIP_CONTACT16_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT16_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT16_GW_PREFIX";
  $insertsql2.="','".$values['SIP_CONTACT16_GW_PREFIX'];
  $insertsql.=",SIP_CONTACT16_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT16_PROXY'];
  $insertsql.=",SIP_CONTACT16_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT16_SERVER'];
  $insertsql.=",SIP_CONTACT16_REGISTER_EXPIRED";
  $insertsql2.="','".$values['SIP_CONTACT16_REGISTER_EXPIRED'];
  $insertsql.=",SIP_CONTACT16_OUTBOUND_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT16_OUTBOUND_PROXY'];
  $insertsql.=",SIP_CONTACT16_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT16_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT16_LOGIN";
  $insertsql2.="','".$values['SIP_CONTACT16_LOGIN'];
  $insertsql.=",SIP_CONTACT16_PASSWD";
  $insertsql2.="','".$values['SIP_CONTACT16_PASSWD'];
  $insertsql.=",SIP_CONTACT17_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT17_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT17_GW_PREFIX";
  $insertsql2.="','".$values['SIP_CONTACT17_GW_PREFIX'];
  $insertsql.=",SIP_CONTACT17_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT17_PROXY'];
  $insertsql.=",SIP_CONTACT17_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT17_SERVER'];
  $insertsql.=",SIP_CONTACT17_REGISTER_EXPIRED";
  $insertsql2.="','".$values['SIP_CONTACT17_REGISTER_EXPIRED'];
  $insertsql.=",SIP_CONTACT17_OUTBOUND_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT17_OUTBOUND_PROXY'];
  $insertsql.=",SIP_CONTACT17_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT17_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT17_LOGIN";
  $insertsql2.="','".$values['SIP_CONTACT17_LOGIN'];
  $insertsql.=",SIP_CONTACT17_PASSWD";
  $insertsql2.="','".$values['SIP_CONTACT17_PASSWD'];
  $insertsql.=",SIP_CONTACT18_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT18_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT18_GW_PREFIX";
  $insertsql2.="','".$values['SIP_CONTACT18_GW_PREFIX'];
  $insertsql.=",SIP_CONTACT18_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT18_PROXY'];
  $insertsql.=",SIP_CONTACT18_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT18_SERVER'];
  $insertsql.=",SIP_CONTACT18_REGISTER_EXPIRED";
  $insertsql2.="','".$values['SIP_CONTACT18_REGISTER_EXPIRED'];
  $insertsql.=",SIP_CONTACT18_OUTBOUND_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT18_OUTBOUND_PROXY'];
  $insertsql.=",SIP_CONTACT18_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT18_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT18_LOGIN";
  $insertsql2.="','".$values['SIP_CONTACT18_LOGIN'];
  $insertsql.=",SIP_CONTACT18_PASSWD";
  $insertsql2.="','".$values['SIP_CONTACT18_PASSWD'];
  $insertsql.=",SIP_CONTACT19_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT19_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT19_GW_PREFIX";
  $insertsql2.="','".$values['SIP_CONTACT19_GW_PREFIX'];
  $insertsql.=",SIP_CONTACT19_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT19_PROXY'];
  $insertsql.=",SIP_CONTACT19_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT19_SERVER'];
  $insertsql.=",SIP_CONTACT19_REGISTER_EXPIRED";
  $insertsql2.="','".$values['SIP_CONTACT19_REGISTER_EXPIRED'];
  $insertsql.=",SIP_CONTACT19_OUTBOUND_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT19_OUTBOUND_PROXY'];
  $insertsql.=",SIP_CONTACT19_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT19_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT19_LOGIN";
  $insertsql2.="','".$values['SIP_CONTACT19_LOGIN'];
  $insertsql.=",SIP_CONTACT19_PASSWD";
  $insertsql2.="','".$values['SIP_CONTACT19_PASSWD'];
  $insertsql.=",SIP_CONTACT20_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT20_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT20_GW_PREFIX";
  $insertsql2.="','".$values['SIP_CONTACT20_GW_PREFIX'];
  $insertsql.=",SIP_CONTACT20_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT20_PROXY'];
  $insertsql.=",SIP_CONTACT20_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT20_SERVER'];
  $insertsql.=",SIP_CONTACT20_REGISTER_EXPIRED";
  $insertsql2.="','".$values['SIP_CONTACT20_REGISTER_EXPIRED'];
  $insertsql.=",SIP_CONTACT20_OUTBOUND_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT20_OUTBOUND_PROXY'];
  $insertsql.=",SIP_CONTACT20_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT20_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT20_LOGIN";
  $insertsql2.="','".$values['SIP_CONTACT20_LOGIN'];
  $insertsql.=",SIP_CONTACT20_PASSWD";
  $insertsql2.="','".$values['SIP_CONTACT20_PASSWD'];
  $insertsql.=",SIP_CONTACT21_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT21_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT21_GW_PREFIX";
  $insertsql2.="','".$values['SIP_CONTACT21_GW_PREFIX'];
  $insertsql.=",SIP_CONTACT21_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT21_PROXY'];
  $insertsql.=",SIP_CONTACT21_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT21_SERVER'];
  $insertsql.=",SIP_CONTACT21_REGISTER_EXPIRED";
  $insertsql2.="','".$values['SIP_CONTACT21_REGISTER_EXPIRED'];
  $insertsql.=",SIP_CONTACT21_OUTBOUND_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT21_OUTBOUND_PROXY'];
  $insertsql.=",SIP_CONTACT21_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT21_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT21_LOGIN";
  $insertsql2.="','".$values['SIP_CONTACT21_LOGIN'];
  $insertsql.=",SIP_CONTACT21_PASSWD";
  $insertsql2.="','".$values['SIP_CONTACT21_PASSWD'];
  $insertsql.=",SIP_CONTACT2_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT2_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT2_GW_PREFIX";
  $insertsql2.="','".$values['SIP_CONTACT2_GW_PREFIX'];
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
  $insertsql.=",SIP_CONTACT3_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT3_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT3_GW_PREFIX";
  $insertsql2.="','".$values['SIP_CONTACT3_GW_PREFIX'];
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
  $insertsql.=",SIP_CONTACT4_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT4_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT4_GW_PREFIX";
  $insertsql2.="','".$values['SIP_CONTACT4_GW_PREFIX'];
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
  $insertsql.=",SIP_CONTACT5_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT5_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT5_GW_PREFIX";
  $insertsql2.="','".$values['SIP_CONTACT5_GW_PREFIX'];
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
  $insertsql.=",SIP_TRUNK_GW1";
  $insertsql2.="','".$values['SIP_TRUNK_GW1'];
  $insertsql.=",SIP_TRUNK_GW2";
  $insertsql2.="','".$values['SIP_TRUNK_GW2'];
  $insertsql.=",SIP_TRUNK_GW3";
  $insertsql2.="','".$values['SIP_TRUNK_GW3'];
  $insertsql.=",SIP_TRUNK_NUMBER";
  $insertsql2.="','".$values['SIP_TRUNK_NUMBER'];
  $insertsql.=",SIP_TRUNK_REGISTER_EXPIRED";
  $insertsql2.="','".$values['SIP_TRUNK_REGISTER_EXPIRED'];
  $insertsql.=",SIP_TRUNK_AUTH_ID";
  $insertsql2.="','".$values['SIP_TRUNK_AUTH_ID'];
  $insertsql.=",SIP_TRUNK_AUTH_PASSWD";
  $insertsql2.="','".$values['SIP_TRUNK_AUTH_PASSWD'];



  $insertsql.=",RAS_PORT";
  $insertsql2.="','".$values['RAS_PORT'];
  $insertsql.=",Q931_PORT";
  $insertsql2.="','".$values['Q931_PORT'];
  $insertsql.=",H245_PORT";
  $insertsql2.="','".$values['H245_PORT'];
  $insertsql.=",DISABLE_FASTSTART";
  $insertsql2.="','".$values['DISABLE_FASTSTART'];
  $insertsql.=",H323_FASTSTART_EXTEND";
  $insertsql2.="','".$values['H323_FASTSTART_EXTEND'];
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
  
  $insertsql.=",SIP_RANDOM_LC_PORT";
  $insertsql2.="','".$values['SIP_RANDOM_LC_PORT'];
  $insertsql.=",SIP_LOCAL_PORT";
  $insertsql2.="','".$values['SIP_LOCAL_PORT'];
  $insertsql.=",SIP_183";
  $insertsql2.="','".$values['SIP_183'];
  $insertsql.=",NO_ANS_CODE";
  $insertsql2.="','".$values['NO_ANS_CODE'];
  $insertsql.=",SIP_INV_AUTH";
  $insertsql2.="','".$values['SIP_INV_AUTH'];
  $insertsql.=",SIP_AS_PROXY";
  $insertsql2.="','".$values['SIP_AS_PROXY'];
  $insertsql.=",SIP_PROXY_PASSWD";
  $insertsql2.="','".$values['SIP_PROXY_PASSWD'];
  $insertsql.=",SIP_NO_ALIVE";
  $insertsql2.="','".$values['SIP_NO_ALIVE'];
  $insertsql.=",SIP_REG_MODE";
  $insertsql2.="','".$values['SIP_REG_MODE'];
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


  $insertsql.=",L1_DISABLE_OUT";
  $insertsql2.="','".$values['L1_DISABLE_OUT'];
  $insertsql.=",L1_FW_NUM_TO_PSTN";
  $insertsql2.="','".$values['L1_FW_NUM_TO_PSTN'];
  $insertsql.=",L1_P_DIGIT_MAP";
  $insertsql2.="','".$values['L1_P_DIGIT_MAP'];
  $insertsql.=",LINE1_P_DPRST";
  $insertsql2.="','".$values['LINE1_P_DPRST'];
  $insertsql.=",L1_FW2PSTN_AUTH_MODE";
  $insertsql2.="','".$values['L1_FW2PSTN_AUTH_MODE'];
  $insertsql.=",L1_FW_TO_PSTN_PASSWD";
  $insertsql2.="','".$values['L1_FW_TO_PSTN_PASSWD'];
  $insertsql.=",LINE1_OUT_INTERVAL";
  $insertsql2.="','".$values['LINE1_OUT_INTERVAL'];
  
  $insertsql.=",L1_SMS_SENDER";
  $insertsql2.="','".$values['L1_SMS_SENDER'];
  $insertsql.=",L1_SMS_SERVER";
  $insertsql2.="','".$values['L1_SMS_SERVER'];
  $insertsql.=",L1_SMS_PORT";
  $insertsql2.="','".$values['L1_SMS_PORT'];
  $insertsql.=",L1_SMS_CLI_ID";
  $insertsql2.="','".$values['L1_SMS_CLI_ID'];
  $insertsql.=",L1_SMS_CLI_PASSWD";
  $insertsql2.="','".$values['L1_SMS_CLI_PASSWD'];
  $insertsql.=",LINE1_SMS_VALIDITY_TIME";
  $insertsql2.="','".$values['LINE1_SMS_VALIDITY_TIME'];
  $insertsql.=",L1_DISABLE_SMS_ACK";
  $insertsql2.="','".$values['L1_DISABLE_SMS_ACK'];
  
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
  
  $insertsql.=",L1_GROUP_MODE";
  $insertsql2.="','".$values['L1_GROUP_MODE'];
  $insertsql.=",L1_GSM_FW_MODE";
  $insertsql2.="','".$values['L1_GSM_FW_MODE'];
  $insertsql.=",L1_PARTNER_SVR";
  $insertsql2.="','".$values['L1_PARTNER_SVR'];
  $insertsql.=",L1_GROUP_SVR";
  $insertsql2.="','".$values['L1_GROUP_SVR'];
  $insertsql.=",L1_GSM_NUMBER";
  $insertsql2.="','".$values['L1_GSM_NUMBER'];
  
  
  $insertsql.=",L2_DISABLE_OUT";
  $insertsql2.="','".$values['L2_DISABLE_OUT'];
  $insertsql.=",L2_FW_NUM_TO_PSTN";
  $insertsql2.="','".$values['L2_FW_NUM_TO_PSTN'];
  $insertsql.=",L2_P_DIGIT_MAP";
  $insertsql2.="','".$values['L2_P_DIGIT_MAP'];
  $insertsql.=",LINE2_P_DPRST";
  $insertsql2.="','".$values['LINE2_P_DPRST'];
  $insertsql.=",L2_FW2PSTN_AUTH_MODE";
  $insertsql2.="','".$values['L2_FW2PSTN_AUTH_MODE'];
  $insertsql.=",L2_FW_TO_PSTN_PASSWD";
  $insertsql2.="','".$values['L2_FW_TO_PSTN_PASSWD'];
  $insertsql.=",LINE2_OUT_INTERVAL";
  $insertsql2.="','".$values['LINE2_OUT_INTERVAL'];
  
  $insertsql.=",L2_SMS_SENDER";
  $insertsql2.="','".$values['L2_SMS_SENDER'];
  $insertsql.=",L2_SMS_SERVER";
  $insertsql2.="','".$values['L2_SMS_SERVER'];
  $insertsql.=",L2_SMS_PORT";
  $insertsql2.="','".$values['L2_SMS_PORT'];
  $insertsql.=",L2_SMS_CLI_ID";
  $insertsql2.="','".$values['L2_SMS_CLI_ID'];
  $insertsql.=",L2_SMS_CLI_PASSWD";
  $insertsql2.="','".$values['L2_SMS_CLI_PASSWD'];
  $insertsql.=",LINE2_SMS_VALIDITY_TIME";
  $insertsql2.="','".$values['LINE2_SMS_VALIDITY_TIME'];
  $insertsql.=",L2_DISABLE_SMS_ACK";
  $insertsql2.="','".$values['L2_DISABLE_SMS_ACK'];
  $insertsql.=",L2_DISABLE_IN";
  $insertsql2.="','".$values['L2_DISABLE_IN'];
  $insertsql.=",L2_FW_NUM_TO_VOIP";
  $insertsql2.="','".$values['L2_FW_NUM_TO_VOIP'];
  $insertsql.=",L2_V_DIGIT_MAP";
  $insertsql2.="','".$values['L2_V_DIGIT_MAP'];
  $insertsql.=",L2_FW2VOIP_AUTH_MODE";
  $insertsql2.="','".$values['L2_FW2VOIP_AUTH_MODE'];
  $insertsql.=",L2_FW_TO_VOIP_PASSWD";
  $insertsql2.="','".$values['L2_FW_TO_VOIP_PASSWD'];
  $insertsql.=",L2_GROUP_MODE";
  $insertsql2.="','".$values['L2_GROUP_MODE'];
  $insertsql.=",L2_GSM_FW_MODE";
  $insertsql2.="','".$values['L2_GSM_FW_MODE'];
  $insertsql.=",L2_PARTNER_SVR";
  $insertsql2.="','".$values['L2_PARTNER_SVR'];
  $insertsql.=",L2_GROUP_SVR";
  $insertsql2.="','".$values['L2_GROUP_SVR'];
  $insertsql.=",L2_GSM_NUMBER";
  $insertsql2.="','".$values['L2_GSM_NUMBER'];
  
  
  $insertsql.=",L3_DISABLE_OUT";
  $insertsql2.="','".$values['L3_DISABLE_OUT'];
  $insertsql.=",L3_FW_NUM_TO_PSTN";
  $insertsql2.="','".$values['L3_FW_NUM_TO_PSTN'];
  $insertsql.=",L3_P_DIGIT_MAP";
  $insertsql2.="','".$values['L3_P_DIGIT_MAP'];
  $insertsql.=",LINE3_P_DPRST";
  $insertsql2.="','".$values['LINE3_P_DPRST'];
  $insertsql.=",L3_FW2PSTN_AUTH_MODE";
  $insertsql2.="','".$values['L3_FW2PSTN_AUTH_MODE'];
  $insertsql.=",L3_FW_TO_PSTN_PASSWD";
  $insertsql2.="','".$values['L3_FW_TO_PSTN_PASSWD'];
  $insertsql.=",LINE3_OUT_INTERVAL";
  $insertsql2.="','".$values['LINE3_OUT_INTERVAL'];
  
  $insertsql.=",L3_SMS_SENDER";
  $insertsql2.="','".$values['L3_SMS_SENDER'];
  $insertsql.=",L3_SMS_SERVER";
  $insertsql2.="','".$values['L3_SMS_SERVER'];
  $insertsql.=",L3_SMS_PORT";
  $insertsql2.="','".$values['L3_SMS_PORT'];
  $insertsql.=",L3_SMS_CLI_ID";
  $insertsql2.="','".$values['L3_SMS_CLI_ID'];
  $insertsql.=",L3_SMS_CLI_PASSWD";
  $insertsql2.="','".$values['L3_SMS_CLI_PASSWD'];
  $insertsql.=",LINE3_SMS_VALIDITY_TIME";
  $insertsql2.="','".$values['LINE3_SMS_VALIDITY_TIME'];
  $insertsql.=",L3_DISABLE_SMS_ACK";
  $insertsql2.="','".$values['L3_DISABLE_SMS_ACK'];
  $insertsql.=",L3_DISABLE_IN";
  $insertsql2.="','".$values['L3_DISABLE_IN'];
  $insertsql.=",L3_FW_NUM_TO_VOIP";
  $insertsql2.="','".$values['L3_FW_NUM_TO_VOIP'];
  $insertsql.=",L3_V_DIGIT_MAP";
  $insertsql2.="','".$values['L3_V_DIGIT_MAP'];
  $insertsql.=",L3_FW2VOIP_AUTH_MODE";
  $insertsql2.="','".$values['L3_FW2VOIP_AUTH_MODE'];
  $insertsql.=",L3_FW_TO_VOIP_PASSWD";
  $insertsql2.="','".$values['L3_FW_TO_VOIP_PASSWD'];
  $insertsql.=",L3_GROUP_MODE";
  $insertsql2.="','".$values['L3_GROUP_MODE'];
  $insertsql.=",L3_GSM_FW_MODE";
  $insertsql2.="','".$values['L3_GSM_FW_MODE'];
  $insertsql.=",L3_PARTNER_SVR";
  $insertsql2.="','".$values['L3_PARTNER_SVR'];
  $insertsql.=",L3_GROUP_SVR";
  $insertsql2.="','".$values['L3_GROUP_SVR'];
  $insertsql.=",L3_GSM_NUMBER";
  $insertsql2.="','".$values['L3_GSM_NUMBER'];
  
  
  $insertsql.=",L4_DISABLE_OUT";
  $insertsql2.="','".$values['L4_DISABLE_OUT'];
  $insertsql.=",L4_FW_NUM_TO_PSTN";
  $insertsql2.="','".$values['L4_FW_NUM_TO_PSTN'];
  $insertsql.=",L4_P_DIGIT_MAP";
  $insertsql2.="','".$values['L4_P_DIGIT_MAP'];
  $insertsql.=",LINE4_P_DPRST";
  $insertsql2.="','".$values['LINE4_P_DPRST'];
  $insertsql.=",L4_FW2PSTN_AUTH_MODE";
  $insertsql2.="','".$values['L4_FW2PSTN_AUTH_MODE'];
  $insertsql.=",L4_FW_TO_PSTN_PASSWD";
  $insertsql2.="','".$values['L4_FW_TO_PSTN_PASSWD'];
  $insertsql.=",LINE4_OUT_INTERVAL";
  $insertsql2.="','".$values['LINE4_OUT_INTERVAL'];
  
  $insertsql.=",L4_SMS_SENDER";
  $insertsql2.="','".$values['L4_SMS_SENDER'];
  $insertsql.=",L4_SMS_SERVER";
  $insertsql2.="','".$values['L4_SMS_SERVER'];
  $insertsql.=",L4_SMS_PORT";
  $insertsql2.="','".$values['L4_SMS_PORT'];
  $insertsql.=",L4_SMS_CLI_ID";
  $insertsql2.="','".$values['L4_SMS_CLI_ID'];
  $insertsql.=",L4_SMS_CLI_PASSWD";
  $insertsql2.="','".$values['L4_SMS_CLI_PASSWD'];
  $insertsql.=",LINE4_SMS_VALIDITY_TIME";
  $insertsql2.="','".$values['LINE4_SMS_VALIDITY_TIME'];
  $insertsql.=",L4_DISABLE_SMS_ACK";
  $insertsql2.="','".$values['L4_DISABLE_SMS_ACK'];
  $insertsql.=",L4_DISABLE_IN";
  $insertsql2.="','".$values['L4_DISABLE_IN'];
  $insertsql.=",L4_FW_NUM_TO_VOIP";
  $insertsql2.="','".$values['L4_FW_NUM_TO_VOIP'];
  $insertsql.=",L4_V_DIGIT_MAP";
  $insertsql2.="','".$values['L4_V_DIGIT_MAP'];
  $insertsql.=",L4_FW2VOIP_AUTH_MODE";
  $insertsql2.="','".$values['L4_FW2VOIP_AUTH_MODE'];
  $insertsql.=",L4_FW_TO_VOIP_PASSWD";
  $insertsql2.="','".$values['L4_FW_TO_VOIP_PASSWD'];
  $insertsql.=",L4_GROUP_MODE";
  $insertsql2.="','".$values['L4_GROUP_MODE'];
  $insertsql.=",L4_GSM_FW_MODE";
  $insertsql2.="','".$values['L4_GSM_FW_MODE'];
  $insertsql.=",L4_PARTNER_SVR";
  $insertsql2.="','".$values['L4_PARTNER_SVR'];
  $insertsql.=",L4_GROUP_SVR";
  $insertsql2.="','".$values['L4_GROUP_SVR'];
  $insertsql.=",L4_GSM_NUMBER";
  $insertsql2.="','".$values['L4_GSM_NUMBER'];
  
  
  $insertsql.=",L5_DISABLE_OUT";
  $insertsql2.="','".$values['L5_DISABLE_OUT'];
  $insertsql.=",L5_FW_NUM_TO_PSTN";
  $insertsql2.="','".$values['L5_FW_NUM_TO_PSTN'];
  $insertsql.=",L5_P_DIGIT_MAP";
  $insertsql2.="','".$values['L5_P_DIGIT_MAP'];
  $insertsql.=",LINE5_P_DPRST";
  $insertsql2.="','".$values['LINE5_P_DPRST'];
  $insertsql.=",L5_FW2PSTN_AUTH_MODE";
  $insertsql2.="','".$values['L5_FW2PSTN_AUTH_MODE'];
  $insertsql.=",L5_FW_TO_PSTN_PASSWD";
  $insertsql2.="','".$values['L5_FW_TO_PSTN_PASSWD'];
  $insertsql.=",LINE5_OUT_INTERVAL";
  $insertsql2.="','".$values['LINE5_OUT_INTERVAL'];
  
  $insertsql.=",L5_SMS_SENDER";
  $insertsql2.="','".$values['L5_SMS_SENDER'];
  $insertsql.=",L5_SMS_SERVER";
  $insertsql2.="','".$values['L5_SMS_SERVER'];
  $insertsql.=",L5_SMS_PORT";
  $insertsql2.="','".$values['L5_SMS_PORT'];
  $insertsql.=",L5_SMS_CLI_ID";
  $insertsql2.="','".$values['L5_SMS_CLI_ID'];
  $insertsql.=",L5_SMS_CLI_PASSWD";
  $insertsql2.="','".$values['L5_SMS_CLI_PASSWD'];
  $insertsql.=",LINE5_SMS_VALIDITY_TIME";
  $insertsql2.="','".$values['LINE5_SMS_VALIDITY_TIME'];
  $insertsql.=",L5_DISABLE_SMS_ACK";
  $insertsql2.="','".$values['L5_DISABLE_SMS_ACK'];
  $insertsql.=",L5_DISABLE_IN";
  $insertsql2.="','".$values['L5_DISABLE_IN'];
  $insertsql.=",L5_FW_NUM_TO_VOIP";
  $insertsql2.="','".$values['L5_FW_NUM_TO_VOIP'];
  $insertsql.=",L5_V_DIGIT_MAP";
  $insertsql2.="','".$values['L5_V_DIGIT_MAP'];
  $insertsql.=",L5_FW2VOIP_AUTH_MODE";
  $insertsql2.="','".$values['L5_FW2VOIP_AUTH_MODE'];
  $insertsql.=",L5_FW_TO_VOIP_PASSWD";
  $insertsql2.="','".$values['L5_FW_TO_VOIP_PASSWD'];
  $insertsql.=",L5_GROUP_MODE";
  $insertsql2.="','".$values['L5_GROUP_MODE'];
  $insertsql.=",L5_GSM_FW_MODE";
  $insertsql2.="','".$values['L5_GSM_FW_MODE'];
  $insertsql.=",L5_PARTNER_SVR";
  $insertsql2.="','".$values['L5_PARTNER_SVR'];
  $insertsql.=",L5_GROUP_SVR";
  $insertsql2.="','".$values['L5_GROUP_SVR'];
  $insertsql.=",L5_GSM_NUMBER";
  $insertsql2.="','".$values['L5_GSM_NUMBER'];
  
  
  $insertsql.=",L6_DISABLE_OUT";
  $insertsql2.="','".$values['L6_DISABLE_OUT'];
  $insertsql.=",L6_FW_NUM_TO_PSTN";
  $insertsql2.="','".$values['L6_FW_NUM_TO_PSTN'];
  $insertsql.=",L6_P_DIGIT_MAP";
  $insertsql2.="','".$values['L6_P_DIGIT_MAP'];
  $insertsql.=",LINE6_P_DPRST";
  $insertsql2.="','".$values['LINE6_P_DPRST'];
  $insertsql.=",L6_FW2PSTN_AUTH_MODE";
  $insertsql2.="','".$values['L6_FW2PSTN_AUTH_MODE'];
  $insertsql.=",L6_FW_TO_PSTN_PASSWD";
  $insertsql2.="','".$values['L6_FW_TO_PSTN_PASSWD'];
  $insertsql.=",LINE6_OUT_INTERVAL";
  $insertsql2.="','".$values['LINE6_OUT_INTERVAL'];
  
  $insertsql.=",L6_SMS_SENDER";
  $insertsql2.="','".$values['L6_SMS_SENDER'];
  $insertsql.=",L6_SMS_SERVER";
  $insertsql2.="','".$values['L6_SMS_SERVER'];
  $insertsql.=",L6_SMS_PORT";
  $insertsql2.="','".$values['L6_SMS_PORT'];
  $insertsql.=",L6_SMS_CLI_ID";
  $insertsql2.="','".$values['L6_SMS_CLI_ID'];
  $insertsql.=",L6_SMS_CLI_PASSWD";
  $insertsql2.="','".$values['L6_SMS_CLI_PASSWD'];
  $insertsql.=",LINE6_SMS_VALIDITY_TIME";
  $insertsql2.="','".$values['LINE6_SMS_VALIDITY_TIME'];
  $insertsql.=",L6_DISABLE_SMS_ACK";
  $insertsql2.="','".$values['L6_DISABLE_SMS_ACK'];
  $insertsql.=",L6_DISABLE_IN";
  $insertsql2.="','".$values['L6_DISABLE_IN'];
  $insertsql.=",L6_FW_NUM_TO_VOIP";
  $insertsql2.="','".$values['L6_FW_NUM_TO_VOIP'];
  $insertsql.=",L6_V_DIGIT_MAP";
  $insertsql2.="','".$values['L6_V_DIGIT_MAP'];
  $insertsql.=",L6_FW2VOIP_AUTH_MODE";
  $insertsql2.="','".$values['L6_FW2VOIP_AUTH_MODE'];
  $insertsql.=",L6_FW_TO_VOIP_PASSWD";
  $insertsql2.="','".$values['L6_FW_TO_VOIP_PASSWD'];
  $insertsql.=",L6_GROUP_MODE";
  $insertsql2.="','".$values['L6_GROUP_MODE'];
  $insertsql.=",L6_GSM_FW_MODE";
  $insertsql2.="','".$values['L6_GSM_FW_MODE'];
  $insertsql.=",L6_PARTNER_SVR";
  $insertsql2.="','".$values['L6_PARTNER_SVR'];
  $insertsql.=",L6_GROUP_SVR";
  $insertsql2.="','".$values['L6_GROUP_SVR'];
  $insertsql.=",L6_GSM_NUMBER";
  $insertsql2.="','".$values['L6_GSM_NUMBER'];
 
  
  $insertsql.=",L7_DISABLE_OUT";
  $insertsql2.="','".$values['L7_DISABLE_OUT'];
  $insertsql.=",L7_FW_NUM_TO_PSTN";
  $insertsql2.="','".$values['L7_FW_NUM_TO_PSTN'];
  $insertsql.=",L7_P_DIGIT_MAP";
  $insertsql2.="','".$values['L7_P_DIGIT_MAP'];
  $insertsql.=",LINE7_P_DPRST";
  $insertsql2.="','".$values['LINE7_P_DPRST'];
  $insertsql.=",L7_FW2PSTN_AUTH_MODE";
  $insertsql2.="','".$values['L7_FW2PSTN_AUTH_MODE'];
  $insertsql.=",L7_FW_TO_PSTN_PASSWD";
  $insertsql2.="','".$values['L7_FW_TO_PSTN_PASSWD'];
  $insertsql.=",LINE7_OUT_INTERVAL";
  $insertsql2.="','".$values['LINE7_OUT_INTERVAL'];
  
  $insertsql.=",L7_SMS_SENDER";
  $insertsql2.="','".$values['L7_SMS_SENDER'];
  $insertsql.=",L7_SMS_SERVER";
  $insertsql2.="','".$values['L7_SMS_SERVER'];
  $insertsql.=",L7_SMS_PORT";
  $insertsql2.="','".$values['L7_SMS_PORT'];
  $insertsql.=",L7_SMS_CLI_ID";
  $insertsql2.="','".$values['L7_SMS_CLI_ID'];
  $insertsql.=",L7_SMS_CLI_PASSWD";
  $insertsql2.="','".$values['L7_SMS_CLI_PASSWD'];
  $insertsql.=",LINE7_SMS_VALIDITY_TIME";
  $insertsql2.="','".$values['LINE7_SMS_VALIDITY_TIME'];
  $insertsql.=",L7_DISABLE_SMS_ACK";
  $insertsql2.="','".$values['L7_DISABLE_SMS_ACK'];
  $insertsql.=",L7_DISABLE_IN";
  $insertsql2.="','".$values['L7_DISABLE_IN'];
  $insertsql.=",L7_FW_NUM_TO_VOIP";
  $insertsql2.="','".$values['L7_FW_NUM_TO_VOIP'];
  $insertsql.=",L7_V_DIGIT_MAP";
  $insertsql2.="','".$values['L7_V_DIGIT_MAP'];
  $insertsql.=",L7_FW2VOIP_AUTH_MODE";
  $insertsql2.="','".$values['L7_FW2VOIP_AUTH_MODE'];
  $insertsql.=",L7_FW_TO_VOIP_PASSWD";
  $insertsql2.="','".$values['L7_FW_TO_VOIP_PASSWD'];
  $insertsql.=",L7_GROUP_MODE";
  $insertsql2.="','".$values['L7_GROUP_MODE'];
  $insertsql.=",L7_GSM_FW_MODE";
  $insertsql2.="','".$values['L7_GSM_FW_MODE'];
  $insertsql.=",L7_PARTNER_SVR";
  $insertsql2.="','".$values['L7_PARTNER_SVR'];
  $insertsql.=",L7_GROUP_SVR";
  $insertsql2.="','".$values['L7_GROUP_SVR'];
  $insertsql.=",L7_GSM_NUMBER";
  $insertsql2.="','".$values['L7_GSM_NUMBER'];
 
  
  $insertsql.=",L8_DISABLE_OUT";
  $insertsql2.="','".$values['L8_DISABLE_OUT'];
  $insertsql.=",L8_FW_NUM_TO_PSTN";
  $insertsql2.="','".$values['L8_FW_NUM_TO_PSTN'];
  $insertsql.=",L8_P_DIGIT_MAP";
  $insertsql2.="','".$values['L8_P_DIGIT_MAP'];
  $insertsql.=",LINE8_P_DPRST";
  $insertsql2.="','".$values['LINE8_P_DPRST'];
  $insertsql.=",L8_FW2PSTN_AUTH_MODE";
  $insertsql2.="','".$values['L8_FW2PSTN_AUTH_MODE'];
  $insertsql.=",L8_FW_TO_PSTN_PASSWD";
  $insertsql2.="','".$values['L8_FW_TO_PSTN_PASSWD'];
  $insertsql.=",LINE8_OUT_INTERVAL";
  $insertsql2.="','".$values['LINE8_OUT_INTERVAL'];
  
  $insertsql.=",L8_SMS_SENDER";
  $insertsql2.="','".$values['L8_SMS_SENDER'];
  $insertsql.=",L8_SMS_SERVER";
  $insertsql2.="','".$values['L8_SMS_SERVER'];
  $insertsql.=",L8_SMS_PORT";
  $insertsql2.="','".$values['L8_SMS_PORT'];
  $insertsql.=",L8_SMS_CLI_ID";
  $insertsql2.="','".$values['L8_SMS_CLI_ID'];
  $insertsql.=",L8_SMS_CLI_PASSWD";
  $insertsql2.="','".$values['L8_SMS_CLI_PASSWD'];
  $insertsql.=",LINE8_SMS_VALIDITY_TIME";
  $insertsql2.="','".$values['LINE8_SMS_VALIDITY_TIME'];
  $insertsql.=",L8_DISABLE_SMS_ACK";
  $insertsql2.="','".$values['L8_DISABLE_SMS_ACK'];
  $insertsql.=",L8_DISABLE_IN";
  $insertsql2.="','".$values['L8_DISABLE_IN'];
  $insertsql.=",L8_FW_NUM_TO_VOIP";
  $insertsql2.="','".$values['L8_FW_NUM_TO_VOIP'];
  $insertsql.=",L8_V_DIGIT_MAP";
  $insertsql2.="','".$values['L8_V_DIGIT_MAP'];
  $insertsql.=",L8_FW2VOIP_AUTH_MODE";
  $insertsql2.="','".$values['L8_FW2VOIP_AUTH_MODE'];
  $insertsql.=",L8_FW_TO_VOIP_PASSWD";
  $insertsql2.="','".$values['L8_FW_TO_VOIP_PASSWD'];
  $insertsql.=",L8_GROUP_MODE";
  $insertsql2.="','".$values['L8_GROUP_MODE'];
  $insertsql.=",L8_GSM_FW_MODE";
  $insertsql2.="','".$values['L8_GSM_FW_MODE'];
  $insertsql.=",L8_PARTNER_SVR";
  $insertsql2.="','".$values['L8_PARTNER_SVR'];
  $insertsql.=",L8_GROUP_SVR";
  $insertsql2.="','".$values['L8_GROUP_SVR'];
  $insertsql.=",L8_GSM_NUMBER";
  $insertsql2.="','".$values['L8_GSM_NUMBER'];
 
  
  $insertsql.=",L9_DISABLE_OUT";
  $insertsql2.="','".$values['L9_DISABLE_OUT'];
  $insertsql.=",L9_FW_NUM_TO_PSTN";
  $insertsql2.="','".$values['L9_FW_NUM_TO_PSTN'];
  $insertsql.=",L9_P_DIGIT_MAP";
  $insertsql2.="','".$values['L9_P_DIGIT_MAP'];
  $insertsql.=",LINE9_P_DPRST";
  $insertsql2.="','".$values['LINE9_P_DPRST'];
  $insertsql.=",L9_FW2PSTN_AUTH_MODE";
  $insertsql2.="','".$values['L9_FW2PSTN_AUTH_MODE'];
  $insertsql.=",L9_FW_TO_PSTN_PASSWD";
  $insertsql2.="','".$values['L9_FW_TO_PSTN_PASSWD'];
  $insertsql.=",LINE9_OUT_INTERVAL";
  $insertsql2.="','".$values['LINE9_OUT_INTERVAL'];
  
  $insertsql.=",L9_SMS_SENDER";
  $insertsql2.="','".$values['L9_SMS_SENDER'];
  $insertsql.=",L9_SMS_SERVER";
  $insertsql2.="','".$values['L9_SMS_SERVER'];
  $insertsql.=",L9_SMS_PORT";
  $insertsql2.="','".$values['L9_SMS_PORT'];
  $insertsql.=",L9_SMS_CLI_ID";
  $insertsql2.="','".$values['L9_SMS_CLI_ID'];
  $insertsql.=",L9_SMS_CLI_PASSWD";
  $insertsql2.="','".$values['L9_SMS_CLI_PASSWD'];
  $insertsql.=",LINE9_SMS_VALIDITY_TIME";
  $insertsql2.="','".$values['LINE9_SMS_VALIDITY_TIME'];
  $insertsql.=",L9_DISABLE_SMS_ACK";
  $insertsql2.="','".$values['L9_DISABLE_SMS_ACK'];
  $insertsql.=",L9_DISABLE_IN";
  $insertsql2.="','".$values['L9_DISABLE_IN'];
  $insertsql.=",L9_FW_NUM_TO_VOIP";
  $insertsql2.="','".$values['L9_FW_NUM_TO_VOIP'];
  $insertsql.=",L9_V_DIGIT_MAP";
  $insertsql2.="','".$values['L9_V_DIGIT_MAP'];
  $insertsql.=",L9_FW2VOIP_AUTH_MODE";
  $insertsql2.="','".$values['L9_FW2VOIP_AUTH_MODE'];
  $insertsql.=",L9_FW_TO_VOIP_PASSWD";
  $insertsql2.="','".$values['L9_FW_TO_VOIP_PASSWD'];
  $insertsql.=",L9_GROUP_MODE";
  $insertsql2.="','".$values['L9_GROUP_MODE'];
  $insertsql.=",L9_GSM_FW_MODE";
  $insertsql2.="','".$values['L9_GSM_FW_MODE'];
  $insertsql.=",L9_PARTNER_SVR";
  $insertsql2.="','".$values['L9_PARTNER_SVR'];
  $insertsql.=",L9_GROUP_SVR";
  $insertsql2.="','".$values['L9_GROUP_SVR'];
  $insertsql.=",L9_GSM_NUMBER";
  $insertsql2.="','".$values['L9_GSM_NUMBER'];
 
  
  $insertsql.=",L10_DISABLE_OUT";
  $insertsql2.="','".$values['L10_DISABLE_OUT'];
  $insertsql.=",L10_FW_NUM_TO_PSTN";
  $insertsql2.="','".$values['L10_FW_NUM_TO_PSTN'];
  $insertsql.=",L10_P_DIGIT_MAP";
  $insertsql2.="','".$values['L10_P_DIGIT_MAP'];
  $insertsql.=",LINE10_P_DPRST";
  $insertsql2.="','".$values['LINE10_P_DPRST'];
  $insertsql.=",L10_FW2PSTN_AUTH_MODE";
  $insertsql2.="','".$values['L10_FW2PSTN_AUTH_MODE'];
  $insertsql.=",L10_FW_TO_PSTN_PASSWD";
  $insertsql2.="','".$values['L10_FW_TO_PSTN_PASSWD'];
  $insertsql.=",LINE10_OUT_INTERVAL";
  $insertsql2.="','".$values['LINE10_OUT_INTERVAL'];
  
  $insertsql.=",L10_SMS_SENDER";
  $insertsql2.="','".$values['L10_SMS_SENDER'];
  $insertsql.=",L10_SMS_SERVER";
  $insertsql2.="','".$values['L10_SMS_SERVER'];
  $insertsql.=",L10_SMS_PORT";
  $insertsql2.="','".$values['L10_SMS_PORT'];
  $insertsql.=",L10_SMS_CLI_ID";
  $insertsql2.="','".$values['L10_SMS_CLI_ID'];
  $insertsql.=",L10_SMS_CLI_PASSWD";
  $insertsql2.="','".$values['L10_SMS_CLI_PASSWD'];
  $insertsql.=",LINE10_SMS_VALIDITY_TIME";
  $insertsql2.="','".$values['LINE10_SMS_VALIDITY_TIME'];
  $insertsql.=",L10_DISABLE_SMS_ACK";
  $insertsql2.="','".$values['L10_DISABLE_SMS_ACK'];
  $insertsql.=",L10_DISABLE_IN";
  $insertsql2.="','".$values['L10_DISABLE_IN'];
  $insertsql.=",L10_FW_NUM_TO_VOIP";
  $insertsql2.="','".$values['L10_FW_NUM_TO_VOIP'];
  $insertsql.=",L10_V_DIGIT_MAP";
  $insertsql2.="','".$values['L10_V_DIGIT_MAP'];
  $insertsql.=",L10_FW2VOIP_AUTH_MODE";
  $insertsql2.="','".$values['L10_FW2VOIP_AUTH_MODE'];
  $insertsql.=",L10_FW_TO_VOIP_PASSWD";
  $insertsql2.="','".$values['L10_FW_TO_VOIP_PASSWD'];
  $insertsql.=",L10_GROUP_MODE";
  $insertsql2.="','".$values['L10_GROUP_MODE'];
  $insertsql.=",L10_GSM_FW_MODE";
  $insertsql2.="','".$values['L10_GSM_FW_MODE'];
  $insertsql.=",L10_PARTNER_SVR";
  $insertsql2.="','".$values['L10_PARTNER_SVR'];
  $insertsql.=",L10_GROUP_SVR";
  $insertsql2.="','".$values['L10_GROUP_SVR'];
  $insertsql.=",L10_GSM_NUMBER";
  $insertsql2.="','".$values['L10_GSM_NUMBER'];
 
  
  $insertsql.=",L11_DISABLE_OUT";
  $insertsql2.="','".$values['L11_DISABLE_OUT'];
  $insertsql.=",L11_FW_NUM_TO_PSTN";
  $insertsql2.="','".$values['L11_FW_NUM_TO_PSTN'];
  $insertsql.=",L11_P_DIGIT_MAP";
  $insertsql2.="','".$values['L11_P_DIGIT_MAP'];
  $insertsql.=",LINE11_P_DPRST";
  $insertsql2.="','".$values['LINE11_P_DPRST'];
  $insertsql.=",L11_FW2PSTN_AUTH_MODE";
  $insertsql2.="','".$values['L11_FW2PSTN_AUTH_MODE'];
  $insertsql.=",L11_FW_TO_PSTN_PASSWD";
  $insertsql2.="','".$values['L11_FW_TO_PSTN_PASSWD'];
  $insertsql.=",LINE11_OUT_INTERVAL";
  $insertsql2.="','".$values['LINE11_OUT_INTERVAL'];
  
  $insertsql.=",L11_SMS_SENDER";
  $insertsql2.="','".$values['L11_SMS_SENDER'];
  $insertsql.=",L11_SMS_SERVER";
  $insertsql2.="','".$values['L11_SMS_SERVER'];
  $insertsql.=",L11_SMS_PORT";
  $insertsql2.="','".$values['L11_SMS_PORT'];
  $insertsql.=",L11_SMS_CLI_ID";
  $insertsql2.="','".$values['L11_SMS_CLI_ID'];
  $insertsql.=",L11_SMS_CLI_PASSWD";
  $insertsql2.="','".$values['L11_SMS_CLI_PASSWD'];
  $insertsql.=",LINE11_SMS_VALIDITY_TIME";
  $insertsql2.="','".$values['LINE11_SMS_VALIDITY_TIME'];
  $insertsql.=",L11_DISABLE_SMS_ACK";
  $insertsql2.="','".$values['L11_DISABLE_SMS_ACK'];
  $insertsql.=",L11_DISABLE_IN";
  $insertsql2.="','".$values['L11_DISABLE_IN'];
  $insertsql.=",L11_FW_NUM_TO_VOIP";
  $insertsql2.="','".$values['L11_FW_NUM_TO_VOIP'];
  $insertsql.=",L11_V_DIGIT_MAP";
  $insertsql2.="','".$values['L11_V_DIGIT_MAP'];
  $insertsql.=",L11_FW2VOIP_AUTH_MODE";
  $insertsql2.="','".$values['L11_FW2VOIP_AUTH_MODE'];
  $insertsql.=",L11_FW_TO_VOIP_PASSWD";
  $insertsql2.="','".$values['L11_FW_TO_VOIP_PASSWD'];
  $insertsql.=",L11_GROUP_MODE";
  $insertsql2.="','".$values['L11_GROUP_MODE'];
  $insertsql.=",L11_GSM_FW_MODE";
  $insertsql2.="','".$values['L11_GSM_FW_MODE'];
  $insertsql.=",L11_PARTNER_SVR";
  $insertsql2.="','".$values['L11_PARTNER_SVR'];
  $insertsql.=",L11_GROUP_SVR";
  $insertsql2.="','".$values['L11_GROUP_SVR'];
  $insertsql.=",L11_GSM_NUMBER";
  $insertsql2.="','".$values['L11_GSM_NUMBER'];

  
  $insertsql.=",L12_DISABLE_OUT";
  $insertsql2.="','".$values['L12_DISABLE_OUT'];
  $insertsql.=",L12_FW_NUM_TO_PSTN";
  $insertsql2.="','".$values['L12_FW_NUM_TO_PSTN'];
  $insertsql.=",L12_P_DIGIT_MAP";
  $insertsql2.="','".$values['L12_P_DIGIT_MAP'];
  $insertsql.=",LINE12_P_DPRST";
  $insertsql2.="','".$values['LINE12_P_DPRST'];
  $insertsql.=",L12_FW2PSTN_AUTH_MODE";
  $insertsql2.="','".$values['L12_FW2PSTN_AUTH_MODE'];
  $insertsql.=",L12_FW_TO_PSTN_PASSWD";
  $insertsql2.="','".$values['L12_FW_TO_PSTN_PASSWD'];
  $insertsql.=",LINE12_OUT_INTERVAL";
  $insertsql2.="','".$values['LINE12_OUT_INTERVAL'];
  
  $insertsql.=",L12_SMS_SENDER";
  $insertsql2.="','".$values['L12_SMS_SENDER'];
  $insertsql.=",L12_SMS_SERVER";
  $insertsql2.="','".$values['L12_SMS_SERVER'];
  $insertsql.=",L12_SMS_PORT";
  $insertsql2.="','".$values['L12_SMS_PORT'];
  $insertsql.=",L12_SMS_CLI_ID";
  $insertsql2.="','".$values['L12_SMS_CLI_ID'];
  $insertsql.=",L12_SMS_CLI_PASSWD";
  $insertsql2.="','".$values['L12_SMS_CLI_PASSWD'];
  $insertsql.=",LINE12_SMS_VALIDITY_TIME";
  $insertsql2.="','".$values['LINE12_SMS_VALIDITY_TIME'];
  $insertsql.=",L12_DISABLE_SMS_ACK";
  $insertsql2.="','".$values['L12_DISABLE_SMS_ACK'];
  $insertsql.=",L12_DISABLE_IN";
  $insertsql2.="','".$values['L12_DISABLE_IN'];
  $insertsql.=",L12_FW_NUM_TO_VOIP";
  $insertsql2.="','".$values['L12_FW_NUM_TO_VOIP'];
  $insertsql.=",L12_V_DIGIT_MAP";
  $insertsql2.="','".$values['L12_V_DIGIT_MAP'];
  $insertsql.=",L12_FW2VOIP_AUTH_MODE";
  $insertsql2.="','".$values['L12_FW2VOIP_AUTH_MODE'];
  $insertsql.=",L12_FW_TO_VOIP_PASSWD";
  $insertsql2.="','".$values['L12_FW_TO_VOIP_PASSWD'];
  $insertsql.=",L12_GROUP_MODE";
  $insertsql2.="','".$values['L12_GROUP_MODE'];
  $insertsql.=",L12_GSM_FW_MODE";
  $insertsql2.="','".$values['L12_GSM_FW_MODE'];
  $insertsql.=",L12_PARTNER_SVR";
  $insertsql2.="','".$values['L12_PARTNER_SVR'];
  $insertsql.=",L12_GROUP_SVR";
  $insertsql2.="','".$values['L12_GROUP_SVR'];
  $insertsql.=",L12_GSM_NUMBER";
  $insertsql2.="','".$values['L12_GSM_NUMBER'];
 
  
  $insertsql.=",L13_DISABLE_OUT";
  $insertsql2.="','".$values['L13_DISABLE_OUT'];
  $insertsql.=",L13_FW_NUM_TO_PSTN";
  $insertsql2.="','".$values['L13_FW_NUM_TO_PSTN'];
  $insertsql.=",L13_P_DIGIT_MAP";
  $insertsql2.="','".$values['L13_P_DIGIT_MAP'];
  $insertsql.=",LINE13_P_DPRST";
  $insertsql2.="','".$values['LINE13_P_DPRST'];
  $insertsql.=",L13_FW2PSTN_AUTH_MODE";
  $insertsql2.="','".$values['L13_FW2PSTN_AUTH_MODE'];
  $insertsql.=",L13_FW_TO_PSTN_PASSWD";
  $insertsql2.="','".$values['L13_FW_TO_PSTN_PASSWD'];
  $insertsql.=",LINE13_OUT_INTERVAL";
  $insertsql2.="','".$values['LINE13_OUT_INTERVAL'];
  
  $insertsql.=",L13_SMS_SENDER";
  $insertsql2.="','".$values['L13_SMS_SENDER'];
  $insertsql.=",L13_SMS_SERVER";
  $insertsql2.="','".$values['L13_SMS_SERVER'];
  $insertsql.=",L13_SMS_PORT";
  $insertsql2.="','".$values['L13_SMS_PORT'];
  $insertsql.=",L13_SMS_CLI_ID";
  $insertsql2.="','".$values['L13_SMS_CLI_ID'];
  $insertsql.=",L13_SMS_CLI_PASSWD";
  $insertsql2.="','".$values['L13_SMS_CLI_PASSWD'];
  $insertsql.=",LINE13_SMS_VALIDITY_TIME";
  $insertsql2.="','".$values['LINE13_SMS_VALIDITY_TIME'];
  $insertsql.=",L13_DISABLE_SMS_ACK";
  $insertsql2.="','".$values['L13_DISABLE_SMS_ACK'];
  $insertsql.=",L13_DISABLE_IN";
  $insertsql2.="','".$values['L13_DISABLE_IN'];
  $insertsql.=",L13_FW_NUM_TO_VOIP";
  $insertsql2.="','".$values['L13_FW_NUM_TO_VOIP'];
  $insertsql.=",L13_V_DIGIT_MAP";
  $insertsql2.="','".$values['L13_V_DIGIT_MAP'];
  $insertsql.=",L13_FW2VOIP_AUTH_MODE";
  $insertsql2.="','".$values['L13_FW2VOIP_AUTH_MODE'];
  $insertsql.=",L13_FW_TO_VOIP_PASSWD";
  $insertsql2.="','".$values['L13_FW_TO_VOIP_PASSWD'];
  $insertsql.=",L13_GROUP_MODE";
  $insertsql2.="','".$values['L13_GROUP_MODE'];
  $insertsql.=",L13_GSM_FW_MODE";
  $insertsql2.="','".$values['L13_GSM_FW_MODE'];
  $insertsql.=",L13_PARTNER_SVR";
  $insertsql2.="','".$values['L13_PARTNER_SVR'];
  $insertsql.=",L13_GROUP_SVR";
  $insertsql2.="','".$values['L13_GROUP_SVR'];
  $insertsql.=",L13_GSM_NUMBER";
  $insertsql2.="','".$values['L13_GSM_NUMBER'];

  
  $insertsql.=",L14_DISABLE_OUT";
  $insertsql2.="','".$values['L14_DISABLE_OUT'];
  $insertsql.=",L14_FW_NUM_TO_PSTN";
  $insertsql2.="','".$values['L14_FW_NUM_TO_PSTN'];
  $insertsql.=",L14_P_DIGIT_MAP";
  $insertsql2.="','".$values['L14_P_DIGIT_MAP'];
  $insertsql.=",LINE14_P_DPRST";
  $insertsql2.="','".$values['LINE14_P_DPRST'];
  $insertsql.=",L14_FW2PSTN_AUTH_MODE";
  $insertsql2.="','".$values['L14_FW2PSTN_AUTH_MODE'];
  $insertsql.=",L14_FW_TO_PSTN_PASSWD";
  $insertsql2.="','".$values['L14_FW_TO_PSTN_PASSWD'];
  $insertsql.=",LINE14_OUT_INTERVAL";
  $insertsql2.="','".$values['LINE14_OUT_INTERVAL'];
  
  $insertsql.=",L14_SMS_SENDER";
  $insertsql2.="','".$values['L14_SMS_SENDER'];
  $insertsql.=",L14_SMS_SERVER";
  $insertsql2.="','".$values['L14_SMS_SERVER'];
  $insertsql.=",L14_SMS_PORT";
  $insertsql2.="','".$values['L14_SMS_PORT'];
  $insertsql.=",L14_SMS_CLI_ID";
  $insertsql2.="','".$values['L14_SMS_CLI_ID'];
  $insertsql.=",L14_SMS_CLI_PASSWD";
  $insertsql2.="','".$values['L14_SMS_CLI_PASSWD'];
  $insertsql.=",LINE14_SMS_VALIDITY_TIME";
  $insertsql2.="','".$values['LINE14_SMS_VALIDITY_TIME'];
  $insertsql.=",L14_DISABLE_SMS_ACK";
  $insertsql2.="','".$values['L14_DISABLE_SMS_ACK'];
  $insertsql.=",L14_DISABLE_IN";
  $insertsql2.="','".$values['L14_DISABLE_IN'];
  $insertsql.=",L14_FW_NUM_TO_VOIP";
  $insertsql2.="','".$values['L14_FW_NUM_TO_VOIP'];
  $insertsql.=",L14_V_DIGIT_MAP";
  $insertsql2.="','".$values['L14_V_DIGIT_MAP'];
  $insertsql.=",L14_FW2VOIP_AUTH_MODE";
  $insertsql2.="','".$values['L14_FW2VOIP_AUTH_MODE'];
  $insertsql.=",L14_FW_TO_VOIP_PASSWD";
  $insertsql2.="','".$values['L14_FW_TO_VOIP_PASSWD'];
  $insertsql.=",L14_GROUP_MODE";
  $insertsql2.="','".$values['L14_GROUP_MODE'];
  $insertsql.=",L14_GSM_FW_MODE";
  $insertsql2.="','".$values['L14_GSM_FW_MODE'];
  $insertsql.=",L14_PARTNER_SVR";
  $insertsql2.="','".$values['L14_PARTNER_SVR'];
  $insertsql.=",L14_GROUP_SVR";
  $insertsql2.="','".$values['L14_GROUP_SVR'];
  $insertsql.=",L14_GSM_NUMBER";
  $insertsql2.="','".$values['L14_GSM_NUMBER'];
 
  
  $insertsql.=",L15_DISABLE_OUT";
  $insertsql2.="','".$values['L15_DISABLE_OUT'];
  $insertsql.=",L15_FW_NUM_TO_PSTN";
  $insertsql2.="','".$values['L15_FW_NUM_TO_PSTN'];
  $insertsql.=",L15_P_DIGIT_MAP";
  $insertsql2.="','".$values['L15_P_DIGIT_MAP'];
  $insertsql.=",LINE15_P_DPRST";
  $insertsql2.="','".$values['LINE15_P_DPRST'];
  $insertsql.=",L15_FW2PSTN_AUTH_MODE";
  $insertsql2.="','".$values['L15_FW2PSTN_AUTH_MODE'];
  $insertsql.=",L15_FW_TO_PSTN_PASSWD";
  $insertsql2.="','".$values['L15_FW_TO_PSTN_PASSWD'];
  $insertsql.=",LINE15_OUT_INTERVAL";
  $insertsql2.="','".$values['LINE15_OUT_INTERVAL'];
  
  $insertsql.=",L15_SMS_SENDER";
  $insertsql2.="','".$values['L15_SMS_SENDER'];
  $insertsql.=",L15_SMS_SERVER";
  $insertsql2.="','".$values['L15_SMS_SERVER'];
  $insertsql.=",L15_SMS_PORT";
  $insertsql2.="','".$values['L15_SMS_PORT'];
  $insertsql.=",L15_SMS_CLI_ID";
  $insertsql2.="','".$values['L15_SMS_CLI_ID'];
  $insertsql.=",L15_SMS_CLI_PASSWD";
  $insertsql2.="','".$values['L15_SMS_CLI_PASSWD'];
  $insertsql.=",LINE15_SMS_VALIDITY_TIME";
  $insertsql2.="','".$values['LINE15_SMS_VALIDITY_TIME'];
  $insertsql.=",L15_DISABLE_SMS_ACK";
  $insertsql2.="','".$values['L15_DISABLE_SMS_ACK'];
  $insertsql.=",L15_DISABLE_IN";
  $insertsql2.="','".$values['L15_DISABLE_IN'];
  $insertsql.=",L15_FW_NUM_TO_VOIP";
  $insertsql2.="','".$values['L15_FW_NUM_TO_VOIP'];
  $insertsql.=",L15_V_DIGIT_MAP";
  $insertsql2.="','".$values['L15_V_DIGIT_MAP'];
  $insertsql.=",L15_FW2VOIP_AUTH_MODE";
  $insertsql2.="','".$values['L15_FW2VOIP_AUTH_MODE'];
  $insertsql.=",L15_FW_TO_VOIP_PASSWD";
  $insertsql2.="','".$values['L15_FW_TO_VOIP_PASSWD'];
  $insertsql.=",L15_GROUP_MODE";
  $insertsql2.="','".$values['L15_GROUP_MODE'];
  $insertsql.=",L15_GSM_FW_MODE";
  $insertsql2.="','".$values['L15_GSM_FW_MODE'];
  $insertsql.=",L15_PARTNER_SVR";
  $insertsql2.="','".$values['L15_PARTNER_SVR'];
  $insertsql.=",L15_GROUP_SVR";
  $insertsql2.="','".$values['L15_GROUP_SVR'];
  $insertsql.=",L15_GSM_NUMBER";
  $insertsql2.="','".$values['L15_GSM_NUMBER'];
 
  
  $insertsql.=",L16_DISABLE_OUT";
  $insertsql2.="','".$values['L16_DISABLE_OUT'];
  $insertsql.=",L16_FW_NUM_TO_PSTN";
  $insertsql2.="','".$values['L16_FW_NUM_TO_PSTN'];
  $insertsql.=",L16_P_DIGIT_MAP";
  $insertsql2.="','".$values['L16_P_DIGIT_MAP'];
  $insertsql.=",LINE16_P_DPRST";
  $insertsql2.="','".$values['LINE16_P_DPRST'];
  $insertsql.=",L16_FW2PSTN_AUTH_MODE";
  $insertsql2.="','".$values['L16_FW2PSTN_AUTH_MODE'];
  $insertsql.=",L16_FW_TO_PSTN_PASSWD";
  $insertsql2.="','".$values['L16_FW_TO_PSTN_PASSWD'];
  $insertsql.=",LINE16_OUT_INTERVAL";
  $insertsql2.="','".$values['LINE16_OUT_INTERVAL'];
  
  $insertsql.=",L16_SMS_SENDER";
  $insertsql2.="','".$values['L16_SMS_SENDER'];
  $insertsql.=",L16_SMS_SERVER";
  $insertsql2.="','".$values['L16_SMS_SERVER'];
  $insertsql.=",L16_SMS_PORT";
  $insertsql2.="','".$values['L16_SMS_PORT'];
  $insertsql.=",L16_SMS_CLI_ID";
  $insertsql2.="','".$values['L16_SMS_CLI_ID'];
  $insertsql.=",L16_SMS_CLI_PASSWD";
  $insertsql2.="','".$values['L16_SMS_CLI_PASSWD'];
  $insertsql.=",LINE16_SMS_VALIDITY_TIME";
  $insertsql2.="','".$values['LINE16_SMS_VALIDITY_TIME'];
  $insertsql.=",L16_DISABLE_SMS_ACK";
  $insertsql2.="','".$values['L16_DISABLE_SMS_ACK'];
  $insertsql.=",L16_DISABLE_IN";
  $insertsql2.="','".$values['L16_DISABLE_IN'];
  $insertsql.=",L16_FW_NUM_TO_VOIP";
  $insertsql2.="','".$values['L16_FW_NUM_TO_VOIP'];
  $insertsql.=",L16_V_DIGIT_MAP";
  $insertsql2.="','".$values['L16_V_DIGIT_MAP'];
  $insertsql.=",L16_FW2VOIP_AUTH_MODE";
  $insertsql2.="','".$values['L16_FW2VOIP_AUTH_MODE'];
  $insertsql.=",L16_FW_TO_VOIP_PASSWD";
  $insertsql2.="','".$values['L16_FW_TO_VOIP_PASSWD'];
  $insertsql.=",L16_GROUP_MODE";
  $insertsql2.="','".$values['L16_GROUP_MODE'];
  $insertsql.=",L16_GSM_FW_MODE";
  $insertsql2.="','".$values['L16_GSM_FW_MODE'];
  $insertsql.=",L16_PARTNER_SVR";
  $insertsql2.="','".$values['L16_PARTNER_SVR'];
  $insertsql.=",L16_GROUP_SVR";
  $insertsql2.="','".$values['L16_GROUP_SVR'];
  $insertsql.=",L16_GSM_NUMBER";
  $insertsql2.="','".$values['L16_GSM_NUMBER'];
 
  $insertsql.=",SMS_MODE";
  $insertsql2.="','".$values['SMS_MODE'];
  $insertsql.=",SMS_DIAL_ENABLE";
  $insertsql2.="','".$values['SMS_DIAL_ENABLE'];
  $insertsql.=",SMS_PREFIX";
  $insertsql2.="','".$values['SMS_PREFIX'];
  $insertsql.=",SMS_FW_NUM";
  $insertsql2.="','".$values['SMS_FW_NUM'];
  $insertsql.=",SMS_FW_GSM_NUM";
  $insertsql2.="','".$values['SMS_FW_GSM_NUM'];
  $insertsql.=",SIP_CID_FW_MODE";
  $insertsql2.="','".$values['SIP_CID_FW_MODE'];
  $insertsql.=",CID_FW_PREFIX";
  $insertsql2.="','".$values['CID_FW_PREFIX'];
  $insertsql.=",H323_CID_FW";
  $insertsql2.="','".$values['H323_CID_FW'];

  $insertsql.=",L1_CALLER_ANONYMOUS";
  $insertsql2.="','".$values['L1_CALLER_ANONYMOUS'];
  $insertsql.=",L2_CALLER_ANONYMOUS";
  $insertsql2.="','".$values['L2_CALLER_ANONYMOUS'];
  $insertsql.=",L3_CALLER_ANONYMOUS";
  $insertsql2.="','".$values['L3_CALLER_ANONYMOUS'];
  $insertsql.=",L4_CALLER_ANONYMOUS";
  $insertsql2.="','".$values['L4_CALLER_ANONYMOUS'];
  $insertsql.=",L5_CALLER_ANONYMOUS";
  $insertsql2.="','".$values['L5_CALLER_ANONYMOUS'];
  $insertsql.=",L6_CALLER_ANONYMOUS";
  $insertsql2.="','".$values['L6_CALLER_ANONYMOUS'];
  $insertsql.=",L7_CALLER_ANONYMOUS";
  $insertsql2.="','".$values['L7_CALLER_ANONYMOUS'];
  $insertsql.=",L8_CALLER_ANONYMOUS";
  $insertsql2.="','".$values['L8_CALLER_ANONYMOUS'];
  $insertsql.=",L9_CALLER_ANONYMOUS";
  $insertsql2.="','".$values['L9_CALLER_ANONYMOUS'];
  $insertsql.=",L10_CALLER_ANONYMOUS";
  $insertsql2.="','".$values['L10_CALLER_ANONYMOUS'];
  $insertsql.=",L11_CALLER_ANONYMOUS";
  $insertsql2.="','".$values['L11_CALLER_ANONYMOUS'];
  $insertsql.=",L12_CALLER_ANONYMOUS";
  $insertsql2.="','".$values['L12_CALLER_ANONYMOUS'];
  $insertsql.=",L13_CALLER_ANONYMOUS";
  $insertsql2.="','".$values['L13_CALLER_ANONYMOUS'];
  $insertsql.=",L14_CALLER_ANONYMOUS";
  $insertsql2.="','".$values['L14_CALLER_ANONYMOUS'];
  $insertsql.=",L15_CALLER_ANONYMOUS";
  $insertsql2.="','".$values['L15_CALLER_ANONYMOUS'];
  $insertsql.=",L16_CALLER_ANONYMOUS";
  $insertsql2.="','".$values['L16_CALLER_ANONYMOUS'];

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
  $insertsql.=",PREFER_CODEC7";
  $insertsql2.="','".$values['PREFER_CODEC7'];
  $insertsql.=",CODEC7_DISABLE";
  $insertsql2.="','".$values['CODEC7_DISABLE'];
  
  $insertsql.=",RMSIM_ENABLE";
  $insertsql2.="','".$values['RMSIM_ENABLE'];
  $insertsql.=",SMB_SVR";
  $insertsql2.="','".$values['SMB_SVR'];
  $insertsql.=",SMB_ID";
  $insertsql2.="','".$values['SMB_ID'];
  $insertsql.=",SMB_KEY";
  $insertsql2.="','".$values['SMB_KEY'];



?>
