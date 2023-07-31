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
if($values['TELPORT'] >= 17): 
endif; 
  $values['H323_LINE17_NUMBER'] = $_POST['line17_h323_phone_num'] ;
  $updatesql.=",H323_LINE17_NUMBER='".$values['H323_LINE17_NUMBER']."'";
  $values['H323_LINE17_H323_ID'] = $_POST['line17_h323_id'] ;
  $updatesql.=",H323_LINE17_H323_ID='".$values['H323_LINE17_H323_ID']."'";
  $values['H323_LINE17_GW_PREFIX'] = $_POST['line17_h323_gw_prefix'] ;
  $updatesql.=",H323_LINE17_GW_PREFIX='".$values['H323_LINE17_GW_PREFIX']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_LINE17_GKADDR'] = $_POST['line17_gk_addr'] ;
  $updatesql.=",H323_LINE17_GKADDR='".$values['H323_LINE17_GKADDR']."'";
endif; 
  $values['H323_LINE17_VOS_ENABLE'] = $_POST['line17_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_LINE17_VOS_ENABLE='".$values['H323_LINE17_VOS_ENABLE']."'";
if($values['H323_LINE17_VOS_ENABLE'] == 1):
  $values['H323_LINE17_VOS_MODE'] = $_POST['line17_vos_mod'] ;
  $updatesql.=",H323_LINE17_VOS_MODE='".$values['H323_LINE17_VOS_MODE']."'";
endif; 
  $values['H323_LINE17_AUTH'] = $_POST['line17_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_LINE17_AUTH='".$values['H323_LINE17_AUTH']."'";
if($values['H323_LINE17_AUTH'] == 1):
  $values['H323_LINE17_H235_ID'] = $_POST['line17_h235_id'] ;
  $updatesql.=",H323_LINE17_H235_ID='".$values['H323_LINE17_H235_ID']."'";
  $values['H323_LINE17_H235_PASSWD'] = $_POST['line17_h235_passwd'] ;
  $updatesql.=",H323_LINE17_H235_PASSWD='".$values['H323_LINE17_H235_PASSWD']."'";
endif; 

if($values['TELPORT'] >= 18): 
endif; 
  $values['H323_LINE18_NUMBER'] = $_POST['line18_h323_phone_num'] ;
  $updatesql.=",H323_LINE18_NUMBER='".$values['H323_LINE18_NUMBER']."'";
  $values['H323_LINE18_H323_ID'] = $_POST['line18_h323_id'] ;
  $updatesql.=",H323_LINE18_H323_ID='".$values['H323_LINE18_H323_ID']."'";
  $values['H323_LINE18_GW_PREFIX'] = $_POST['line18_h323_gw_prefix'] ;
  $updatesql.=",H323_LINE18_GW_PREFIX='".$values['H323_LINE18_GW_PREFIX']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_LINE18_GKADDR'] = $_POST['line18_gk_addr'] ;
  $updatesql.=",H323_LINE18_GKADDR='".$values['H323_LINE18_GKADDR']."'";
endif; 
  $values['H323_LINE18_VOS_ENABLE'] = $_POST['line18_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_LINE18_VOS_ENABLE='".$values['H323_LINE18_VOS_ENABLE']."'";
if($values['H323_LINE18_VOS_ENABLE'] == 1):
  $values['H323_LINE18_VOS_MODE'] = $_POST['line18_vos_mod'] ;
  $updatesql.=",H323_LINE18_VOS_MODE='".$values['H323_LINE18_VOS_MODE']."'";
endif; 
  $values['H323_LINE18_AUTH'] = $_POST['line18_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_LINE18_AUTH='".$values['H323_LINE18_AUTH']."'";
if($values['H323_LINE18_AUTH'] == 1):
  $values['H323_LINE18_H235_ID'] = $_POST['line18_h235_id'] ;
  $updatesql.=",H323_LINE18_H235_ID='".$values['H323_LINE18_H235_ID']."'";
  $values['H323_LINE18_H235_PASSWD'] = $_POST['line18_h235_passwd'] ;
  $updatesql.=",H323_LINE18_H235_PASSWD='".$values['H323_LINE18_H235_PASSWD']."'";
endif; 

if($values['TELPORT'] >= 19): 
endif; 
  $values['H323_LINE19_NUMBER'] = $_POST['line19_h323_phone_num'] ;
  $updatesql.=",H323_LINE19_NUMBER='".$values['H323_LINE19_NUMBER']."'";
  $values['H323_LINE19_H323_ID'] = $_POST['line19_h323_id'] ;
  $updatesql.=",H323_LINE19_H323_ID='".$values['H323_LINE19_H323_ID']."'";
  $values['H323_LINE19_GW_PREFIX'] = $_POST['line19_h323_gw_prefix'] ;
  $updatesql.=",H323_LINE19_GW_PREFIX='".$values['H323_LINE19_GW_PREFIX']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_LINE19_GKADDR'] = $_POST['line19_gk_addr'] ;
  $updatesql.=",H323_LINE19_GKADDR='".$values['H323_LINE19_GKADDR']."'";
endif; 
  $values['H323_LINE19_VOS_ENABLE'] = $_POST['line19_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_LINE19_VOS_ENABLE='".$values['H323_LINE19_VOS_ENABLE']."'";
if($values['H323_LINE19_VOS_ENABLE'] == 1):
  $values['H323_LINE19_VOS_MODE'] = $_POST['line19_vos_mod'] ;
  $updatesql.=",H323_LINE19_VOS_MODE='".$values['H323_LINE19_VOS_MODE']."'";
endif; 
  $values['H323_LINE19_AUTH'] = $_POST['line19_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_LINE19_AUTH='".$values['H323_LINE19_AUTH']."'";
if($values['H323_LINE19_AUTH'] == 1):
  $values['H323_LINE19_H235_ID'] = $_POST['line19_h235_id'] ;
  $updatesql.=",H323_LINE19_H235_ID='".$values['H323_LINE19_H235_ID']."'";
  $values['H323_LINE19_H235_PASSWD'] = $_POST['line19_h235_passwd'] ;
  $updatesql.=",H323_LINE19_H235_PASSWD='".$values['H323_LINE19_H235_PASSWD']."'";
endif; 

if($values['TELPORT'] >= 20): 
endif; 
  $values['H323_LINE20_NUMBER'] = $_POST['line20_h323_phone_num'] ;
  $updatesql.=",H323_LINE20_NUMBER='".$values['H323_LINE20_NUMBER']."'";
  $values['H323_LINE20_H323_ID'] = $_POST['line20_h323_id'] ;
  $updatesql.=",H323_LINE20_H323_ID='".$values['H323_LINE20_H323_ID']."'";
  $values['H323_LINE20_GW_PREFIX'] = $_POST['line20_h323_gw_prefix'] ;
  $updatesql.=",H323_LINE20_GW_PREFIX='".$values['H323_LINE20_GW_PREFIX']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_LINE20_GKADDR'] = $_POST['line20_gk_addr'] ;
  $updatesql.=",H323_LINE20_GKADDR='".$values['H323_LINE20_GKADDR']."'";
endif; 
  $values['H323_LINE20_VOS_ENABLE'] = $_POST['line20_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_LINE20_VOS_ENABLE='".$values['H323_LINE20_VOS_ENABLE']."'";
if($values['H323_LINE20_VOS_ENABLE'] == 1):
  $values['H323_LINE20_VOS_MODE'] = $_POST['line20_vos_mod'] ;
  $updatesql.=",H323_LINE20_VOS_MODE='".$values['H323_LINE20_VOS_MODE']."'";
endif; 
  $values['H323_LINE20_AUTH'] = $_POST['line20_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_LINE20_AUTH='".$values['H323_LINE20_AUTH']."'";
if($values['H323_LINE20_AUTH'] == 1):
  $values['H323_LINE20_H235_ID'] = $_POST['line20_h235_id'] ;
  $updatesql.=",H323_LINE20_H235_ID='".$values['H323_LINE20_H235_ID']."'";
  $values['H323_LINE20_H235_PASSWD'] = $_POST['line20_h235_passwd'] ;
  $updatesql.=",H323_LINE20_H235_PASSWD='".$values['H323_LINE20_H235_PASSWD']."'";
endif; 

if($values['TELPORT'] >= 21): 
endif; 
  $values['H323_LINE21_NUMBER'] = $_POST['line21_h323_phone_num'] ;
  $updatesql.=",H323_LINE21_NUMBER='".$values['H323_LINE21_NUMBER']."'";
  $values['H323_LINE21_H323_ID'] = $_POST['line21_h323_id'] ;
  $updatesql.=",H323_LINE21_H323_ID='".$values['H323_LINE21_H323_ID']."'";
  $values['H323_LINE21_GW_PREFIX'] = $_POST['line21_h323_gw_prefix'] ;
  $updatesql.=",H323_LINE21_GW_PREFIX='".$values['H323_LINE21_GW_PREFIX']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_LINE21_GKADDR'] = $_POST['line21_gk_addr'] ;
  $updatesql.=",H323_LINE21_GKADDR='".$values['H323_LINE21_GKADDR']."'";
endif; 
  $values['H323_LINE21_VOS_ENABLE'] = $_POST['line21_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_LINE21_VOS_ENABLE='".$values['H323_LINE21_VOS_ENABLE']."'";
if($values['H323_LINE21_VOS_ENABLE'] == 1):
  $values['H323_LINE21_VOS_MODE'] = $_POST['line21_vos_mod'] ;
  $updatesql.=",H323_LINE21_VOS_MODE='".$values['H323_LINE21_VOS_MODE']."'";
endif; 
  $values['H323_LINE21_AUTH'] = $_POST['line21_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_LINE21_AUTH='".$values['H323_LINE21_AUTH']."'";
if($values['H323_LINE21_AUTH'] == 1):
  $values['H323_LINE21_H235_ID'] = $_POST['line21_h235_id'] ;
  $updatesql.=",H323_LINE21_H235_ID='".$values['H323_LINE21_H235_ID']."'";
  $values['H323_LINE21_H235_PASSWD'] = $_POST['line21_h235_passwd'] ;
  $updatesql.=",H323_LINE21_H235_PASSWD='".$values['H323_LINE21_H235_PASSWD']."'";
endif; 

if($values['TELPORT'] >= 22): 
endif; 
  $values['H323_LINE22_NUMBER'] = $_POST['line22_h323_phone_num'] ;
  $updatesql.=",H323_LINE22_NUMBER='".$values['H323_LINE22_NUMBER']."'";
  $values['H323_LINE22_H323_ID'] = $_POST['line22_h323_id'] ;
  $updatesql.=",H323_LINE22_H323_ID='".$values['H323_LINE22_H323_ID']."'";
  $values['H323_LINE22_GW_PREFIX'] = $_POST['line22_h323_gw_prefix'] ;
  $updatesql.=",H323_LINE22_GW_PREFIX='".$values['H323_LINE22_GW_PREFIX']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_LINE22_GKADDR'] = $_POST['line22_gk_addr'] ;
  $updatesql.=",H323_LINE22_GKADDR='".$values['H323_LINE22_GKADDR']."'";
endif; 
  $values['H323_LINE22_VOS_ENABLE'] = $_POST['line22_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_LINE22_VOS_ENABLE='".$values['H323_LINE22_VOS_ENABLE']."'";
if($values['H323_LINE22_VOS_ENABLE'] == 1):
  $values['H323_LINE22_VOS_MODE'] = $_POST['line22_vos_mod'] ;
  $updatesql.=",H323_LINE22_VOS_MODE='".$values['H323_LINE22_VOS_MODE']."'";
endif; 
  $values['H323_LINE22_AUTH'] = $_POST['line22_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_LINE22_AUTH='".$values['H323_LINE22_AUTH']."'";
if($values['H323_LINE22_AUTH'] == 1):
  $values['H323_LINE22_H235_ID'] = $_POST['line22_h235_id'] ;
  $updatesql.=",H323_LINE22_H235_ID='".$values['H323_LINE22_H235_ID']."'";
  $values['H323_LINE22_H235_PASSWD'] = $_POST['line22_h235_passwd'] ;
  $updatesql.=",H323_LINE22_H235_PASSWD='".$values['H323_LINE22_H235_PASSWD']."'";
endif; 

if($values['TELPORT'] >= 23): 
endif; 
  $values['H323_LINE23_NUMBER'] = $_POST['line23_h323_phone_num'] ;
  $updatesql.=",H323_LINE23_NUMBER='".$values['H323_LINE23_NUMBER']."'";
  $values['H323_LINE23_H323_ID'] = $_POST['line23_h323_id'] ;
  $updatesql.=",H323_LINE23_H323_ID='".$values['H323_LINE23_H323_ID']."'";
  $values['H323_LINE23_GW_PREFIX'] = $_POST['line23_h323_gw_prefix'] ;
  $updatesql.=",H323_LINE23_GW_PREFIX='".$values['H323_LINE23_GW_PREFIX']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_LINE23_GKADDR'] = $_POST['line23_gk_addr'] ;
  $updatesql.=",H323_LINE23_GKADDR='".$values['H323_LINE23_GKADDR']."'";
endif; 
  $values['H323_LINE23_VOS_ENABLE'] = $_POST['line23_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_LINE23_VOS_ENABLE='".$values['H323_LINE23_VOS_ENABLE']."'";
if($values['H323_LINE23_VOS_ENABLE'] == 1):
  $values['H323_LINE23_VOS_MODE'] = $_POST['line23_vos_mod'] ;
  $updatesql.=",H323_LINE23_VOS_MODE='".$values['H323_LINE23_VOS_MODE']."'";
endif; 
  $values['H323_LINE23_AUTH'] = $_POST['line23_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_LINE23_AUTH='".$values['H323_LINE23_AUTH']."'";
if($values['H323_LINE23_AUTH'] == 1):
  $values['H323_LINE23_H235_ID'] = $_POST['line23_h235_id'] ;
  $updatesql.=",H323_LINE23_H235_ID='".$values['H323_LINE23_H235_ID']."'";
  $values['H323_LINE23_H235_PASSWD'] = $_POST['line23_h235_passwd'] ;
  $updatesql.=",H323_LINE23_H235_PASSWD='".$values['H323_LINE23_H235_PASSWD']."'";
endif; 

if($values['TELPORT'] >= 24): 
endif; 
  $values['H323_LINE24_NUMBER'] = $_POST['line24_h323_phone_num'] ;
  $updatesql.=",H323_LINE24_NUMBER='".$values['H323_LINE24_NUMBER']."'";
  $values['H323_LINE24_H323_ID'] = $_POST['line24_h323_id'] ;
  $updatesql.=",H323_LINE24_H323_ID='".$values['H323_LINE24_H323_ID']."'";
  $values['H323_LINE24_GW_PREFIX'] = $_POST['line24_h323_gw_prefix'] ;
  $updatesql.=",H323_LINE24_GW_PREFIX='".$values['H323_LINE24_GW_PREFIX']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_LINE24_GKADDR'] = $_POST['line24_gk_addr'] ;
  $updatesql.=",H323_LINE24_GKADDR='".$values['H323_LINE24_GKADDR']."'";
endif; 
  $values['H323_LINE24_VOS_ENABLE'] = $_POST['line24_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_LINE24_VOS_ENABLE='".$values['H323_LINE24_VOS_ENABLE']."'";
if($values['H323_LINE24_VOS_ENABLE'] == 1):
  $values['H323_LINE24_VOS_MODE'] = $_POST['line24_vos_mod'] ;
  $updatesql.=",H323_LINE24_VOS_MODE='".$values['H323_LINE24_VOS_MODE']."'";
endif; 
  $values['H323_LINE24_AUTH'] = $_POST['line24_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_LINE24_AUTH='".$values['H323_LINE24_AUTH']."'";
if($values['H323_LINE24_AUTH'] == 1):
  $values['H323_LINE24_H235_ID'] = $_POST['line24_h235_id'] ;
  $updatesql.=",H323_LINE24_H235_ID='".$values['H323_LINE24_H235_ID']."'";
  $values['H323_LINE24_H235_PASSWD'] = $_POST['line24_h235_passwd'] ;
  $updatesql.=",H323_LINE24_H235_PASSWD='".$values['H323_LINE24_H235_PASSWD']."'";
endif; 

if($values['TELPORT'] >= 25): 
endif; 
  $values['H323_LINE25_NUMBER'] = $_POST['line25_h323_phone_num'] ;
  $updatesql.=",H323_LINE25_NUMBER='".$values['H323_LINE25_NUMBER']."'";
  $values['H323_LINE25_H323_ID'] = $_POST['line25_h323_id'] ;
  $updatesql.=",H323_LINE25_H323_ID='".$values['H323_LINE25_H323_ID']."'";
  $values['H323_LINE25_GW_PREFIX'] = $_POST['line25_h323_gw_prefix'] ;
  $updatesql.=",H323_LINE25_GW_PREFIX='".$values['H323_LINE25_GW_PREFIX']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_LINE25_GKADDR'] = $_POST['line25_gk_addr'] ;
  $updatesql.=",H323_LINE25_GKADDR='".$values['H323_LINE25_GKADDR']."'";
endif; 
  $values['H323_LINE25_VOS_ENABLE'] = $_POST['line25_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_LINE25_VOS_ENABLE='".$values['H323_LINE25_VOS_ENABLE']."'";
if($values['H323_LINE25_VOS_ENABLE'] == 1):
  $values['H323_LINE25_VOS_MODE'] = $_POST['line25_vos_mod'] ;
  $updatesql.=",H323_LINE25_VOS_MODE='".$values['H323_LINE25_VOS_MODE']."'";
endif; 
  $values['H323_LINE25_AUTH'] = $_POST['line25_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_LINE25_AUTH='".$values['H323_LINE25_AUTH']."'";
if($values['H323_LINE25_AUTH'] == 1):
  $values['H323_LINE25_H235_ID'] = $_POST['line25_h235_id'] ;
  $updatesql.=",H323_LINE25_H235_ID='".$values['H323_LINE25_H235_ID']."'";
  $values['H323_LINE25_H235_PASSWD'] = $_POST['line25_h235_passwd'] ;
  $updatesql.=",H323_LINE25_H235_PASSWD='".$values['H323_LINE25_H235_PASSWD']."'";
endif; 

if($values['TELPORT'] >= 26): 
endif; 
  $values['H323_LINE26_NUMBER'] = $_POST['line26_h323_phone_num'] ;
  $updatesql.=",H323_LINE26_NUMBER='".$values['H323_LINE26_NUMBER']."'";
  $values['H323_LINE26_H323_ID'] = $_POST['line26_h323_id'] ;
  $updatesql.=",H323_LINE26_H323_ID='".$values['H323_LINE26_H323_ID']."'";
  $values['H323_LINE26_GW_PREFIX'] = $_POST['line26_h323_gw_prefix'] ;
  $updatesql.=",H323_LINE26_GW_PREFIX='".$values['H323_LINE26_GW_PREFIX']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_LINE26_GKADDR'] = $_POST['line26_gk_addr'] ;
  $updatesql.=",H323_LINE26_GKADDR='".$values['H323_LINE26_GKADDR']."'";
endif; 
  $values['H323_LINE26_VOS_ENABLE'] = $_POST['line26_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_LINE26_VOS_ENABLE='".$values['H323_LINE26_VOS_ENABLE']."'";
if($values['H323_LINE26_VOS_ENABLE'] == 1):
  $values['H323_LINE26_VOS_MODE'] = $_POST['line26_vos_mod'] ;
  $updatesql.=",H323_LINE26_VOS_MODE='".$values['H323_LINE26_VOS_MODE']."'";
endif; 
  $values['H323_LINE26_AUTH'] = $_POST['line26_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_LINE26_AUTH='".$values['H323_LINE26_AUTH']."'";
if($values['H323_LINE26_AUTH'] == 1):
  $values['H323_LINE26_H235_ID'] = $_POST['line26_h235_id'] ;
  $updatesql.=",H323_LINE26_H235_ID='".$values['H323_LINE26_H235_ID']."'";
  $values['H323_LINE26_H235_PASSWD'] = $_POST['line26_h235_passwd'] ;
  $updatesql.=",H323_LINE26_H235_PASSWD='".$values['H323_LINE26_H235_PASSWD']."'";
endif; 

if($values['TELPORT'] >= 27): 
endif; 
  $values['H323_LINE27_NUMBER'] = $_POST['line27_h323_phone_num'] ;
  $updatesql.=",H323_LINE27_NUMBER='".$values['H323_LINE27_NUMBER']."'";
  $values['H323_LINE27_H323_ID'] = $_POST['line27_h323_id'] ;
  $updatesql.=",H323_LINE27_H323_ID='".$values['H323_LINE27_H323_ID']."'";
  $values['H323_LINE27_GW_PREFIX'] = $_POST['line27_h323_gw_prefix'] ;
  $updatesql.=",H323_LINE27_GW_PREFIX='".$values['H323_LINE27_GW_PREFIX']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_LINE27_GKADDR'] = $_POST['line27_gk_addr'] ;
  $updatesql.=",H323_LINE27_GKADDR='".$values['H323_LINE27_GKADDR']."'";
endif; 
  $values['H323_LINE27_VOS_ENABLE'] = $_POST['line27_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_LINE27_VOS_ENABLE='".$values['H323_LINE27_VOS_ENABLE']."'";
if($values['H323_LINE27_VOS_ENABLE'] == 1):
  $values['H323_LINE27_VOS_MODE'] = $_POST['line27_vos_mod'] ;
  $updatesql.=",H323_LINE27_VOS_MODE='".$values['H323_LINE27_VOS_MODE']."'";
endif; 
  $values['H323_LINE27_AUTH'] = $_POST['line27_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_LINE27_AUTH='".$values['H323_LINE27_AUTH']."'";
if($values['H323_LINE27_AUTH'] == 1):
  $values['H323_LINE27_H235_ID'] = $_POST['line27_h235_id'] ;
  $updatesql.=",H323_LINE27_H235_ID='".$values['H323_LINE27_H235_ID']."'";
  $values['H323_LINE27_H235_PASSWD'] = $_POST['line27_h235_passwd'] ;
  $updatesql.=",H323_LINE27_H235_PASSWD='".$values['H323_LINE27_H235_PASSWD']."'";
endif; 

if($values['TELPORT'] >= 28): 
endif; 
  $values['H323_LINE28_NUMBER'] = $_POST['line28_h323_phone_num'] ;
  $updatesql.=",H323_LINE28_NUMBER='".$values['H323_LINE28_NUMBER']."'";
  $values['H323_LINE28_H323_ID'] = $_POST['line28_h323_id'] ;
  $updatesql.=",H323_LINE28_H323_ID='".$values['H323_LINE28_H323_ID']."'";
  $values['H323_LINE28_GW_PREFIX'] = $_POST['line28_h323_gw_prefix'] ;
  $updatesql.=",H323_LINE28_GW_PREFIX='".$values['H323_LINE28_GW_PREFIX']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_LINE28_GKADDR'] = $_POST['line28_gk_addr'] ;
  $updatesql.=",H323_LINE28_GKADDR='".$values['H323_LINE28_GKADDR']."'";
endif; 
  $values['H323_LINE28_VOS_ENABLE'] = $_POST['line28_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_LINE28_VOS_ENABLE='".$values['H323_LINE28_VOS_ENABLE']."'";
if($values['H323_LINE28_VOS_ENABLE'] == 1):
  $values['H323_LINE28_VOS_MODE'] = $_POST['line28_vos_mod'] ;
  $updatesql.=",H323_LINE28_VOS_MODE='".$values['H323_LINE28_VOS_MODE']."'";
endif; 
  $values['H323_LINE28_AUTH'] = $_POST['line28_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_LINE28_AUTH='".$values['H323_LINE28_AUTH']."'";
if($values['H323_LINE28_AUTH'] == 1):
  $values['H323_LINE28_H235_ID'] = $_POST['line28_h235_id'] ;
  $updatesql.=",H323_LINE28_H235_ID='".$values['H323_LINE28_H235_ID']."'";
  $values['H323_LINE28_H235_PASSWD'] = $_POST['line28_h235_passwd'] ;
  $updatesql.=",H323_LINE28_H235_PASSWD='".$values['H323_LINE28_H235_PASSWD']."'";
endif; 

if($values['TELPORT'] >= 29): 
endif; 
  $values['H323_LINE29_NUMBER'] = $_POST['line29_h323_phone_num'] ;
  $updatesql.=",H323_LINE29_NUMBER='".$values['H323_LINE29_NUMBER']."'";
  $values['H323_LINE29_H323_ID'] = $_POST['line29_h323_id'] ;
  $updatesql.=",H323_LINE29_H323_ID='".$values['H323_LINE29_H323_ID']."'";
  $values['H323_LINE29_GW_PREFIX'] = $_POST['line29_h323_gw_prefix'] ;
  $updatesql.=",H323_LINE29_GW_PREFIX='".$values['H323_LINE29_GW_PREFIX']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_LINE29_GKADDR'] = $_POST['line29_gk_addr'] ;
  $updatesql.=",H323_LINE29_GKADDR='".$values['H323_LINE29_GKADDR']."'";
endif; 
  $values['H323_LINE29_VOS_ENABLE'] = $_POST['line29_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_LINE29_VOS_ENABLE='".$values['H323_LINE29_VOS_ENABLE']."'";
if($values['H323_LINE29_VOS_ENABLE'] == 1):
  $values['H323_LINE29_VOS_MODE'] = $_POST['line29_vos_mod'] ;
  $updatesql.=",H323_LINE29_VOS_MODE='".$values['H323_LINE29_VOS_MODE']."'";
endif; 
  $values['H323_LINE29_AUTH'] = $_POST['line29_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_LINE29_AUTH='".$values['H323_LINE29_AUTH']."'";
if($values['H323_LINE29_AUTH'] == 1):
  $values['H323_LINE29_H235_ID'] = $_POST['line29_h235_id'] ;
  $updatesql.=",H323_LINE29_H235_ID='".$values['H323_LINE29_H235_ID']."'";
  $values['H323_LINE29_H235_PASSWD'] = $_POST['line29_h235_passwd'] ;
  $updatesql.=",H323_LINE29_H235_PASSWD='".$values['H323_LINE29_H235_PASSWD']."'";
endif; 

if($values['TELPORT'] >= 30): 
endif; 
  $values['H323_LINE30_NUMBER'] = $_POST['line30_h323_phone_num'] ;
  $updatesql.=",H323_LINE30_NUMBER='".$values['H323_LINE30_NUMBER']."'";
  $values['H323_LINE30_H323_ID'] = $_POST['line30_h323_id'] ;
  $updatesql.=",H323_LINE30_H323_ID='".$values['H323_LINE30_H323_ID']."'";
  $values['H323_LINE30_GW_PREFIX'] = $_POST['line30_h323_gw_prefix'] ;
  $updatesql.=",H323_LINE30_GW_PREFIX='".$values['H323_LINE30_GW_PREFIX']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_LINE30_GKADDR'] = $_POST['line30_gk_addr'] ;
  $updatesql.=",H323_LINE30_GKADDR='".$values['H323_LINE30_GKADDR']."'";
endif; 
  $values['H323_LINE30_VOS_ENABLE'] = $_POST['line30_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_LINE30_VOS_ENABLE='".$values['H323_LINE30_VOS_ENABLE']."'";
if($values['H323_LINE30_VOS_ENABLE'] == 1):
  $values['H323_LINE30_VOS_MODE'] = $_POST['line30_vos_mod'] ;
  $updatesql.=",H323_LINE30_VOS_MODE='".$values['H323_LINE30_VOS_MODE']."'";
endif; 
  $values['H323_LINE30_AUTH'] = $_POST['line30_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_LINE30_AUTH='".$values['H323_LINE30_AUTH']."'";
if($values['H323_LINE30_AUTH'] == 1):
  $values['H323_LINE30_H235_ID'] = $_POST['line30_h235_id'] ;
  $updatesql.=",H323_LINE30_H235_ID='".$values['H323_LINE30_H235_ID']."'";
  $values['H323_LINE30_H235_PASSWD'] = $_POST['line30_h235_passwd'] ;
  $updatesql.=",H323_LINE30_H235_PASSWD='".$values['H323_LINE30_H235_PASSWD']."'";
endif; 

if($values['TELPORT'] >= 31): 
endif; 
  $values['H323_LINE31_NUMBER'] = $_POST['line31_h323_phone_num'] ;
  $updatesql.=",H323_LINE31_NUMBER='".$values['H323_LINE31_NUMBER']."'";
  $values['H323_LINE31_H323_ID'] = $_POST['line31_h323_id'] ;
  $updatesql.=",H323_LINE31_H323_ID='".$values['H323_LINE31_H323_ID']."'";
  $values['H323_LINE31_GW_PREFIX'] = $_POST['line31_h323_gw_prefix'] ;
  $updatesql.=",H323_LINE31_GW_PREFIX='".$values['H323_LINE31_GW_PREFIX']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_LINE31_GKADDR'] = $_POST['line31_gk_addr'] ;
  $updatesql.=",H323_LINE31_GKADDR='".$values['H323_LINE31_GKADDR']."'";
endif; 
  $values['H323_LINE31_VOS_ENABLE'] = $_POST['line31_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_LINE31_VOS_ENABLE='".$values['H323_LINE31_VOS_ENABLE']."'";
if($values['H323_LINE31_VOS_ENABLE'] == 1):
  $values['H323_LINE31_VOS_MODE'] = $_POST['line31_vos_mod'] ;
  $updatesql.=",H323_LINE31_VOS_MODE='".$values['H323_LINE31_VOS_MODE']."'";
endif; 
  $values['H323_LINE31_AUTH'] = $_POST['line31_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_LINE31_AUTH='".$values['H323_LINE31_AUTH']."'";
if($values['H323_LINE31_AUTH'] == 1):
  $values['H323_LINE31_H235_ID'] = $_POST['line31_h235_id'] ;
  $updatesql.=",H323_LINE31_H235_ID='".$values['H323_LINE31_H235_ID']."'";
  $values['H323_LINE31_H235_PASSWD'] = $_POST['line31_h235_passwd'] ;
  $updatesql.=",H323_LINE31_H235_PASSWD='".$values['H323_LINE31_H235_PASSWD']."'";
endif; 

if($values['TELPORT'] >= 32): 
endif; 
  $values['H323_LINE32_NUMBER'] = $_POST['line32_h323_phone_num'] ;
  $updatesql.=",H323_LINE32_NUMBER='".$values['H323_LINE32_NUMBER']."'";
  $values['H323_LINE32_H323_ID'] = $_POST['line32_h323_id'] ;
  $updatesql.=",H323_LINE32_H323_ID='".$values['H323_LINE32_H323_ID']."'";
  $values['H323_LINE32_GW_PREFIX'] = $_POST['line32_h323_gw_prefix'] ;
  $updatesql.=",H323_LINE32_GW_PREFIX='".$values['H323_LINE32_GW_PREFIX']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_LINE32_GKADDR'] = $_POST['line32_gk_addr'] ;
  $updatesql.=",H323_LINE32_GKADDR='".$values['H323_LINE32_GKADDR']."'";
endif; 
  $values['H323_LINE32_VOS_ENABLE'] = $_POST['line32_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_LINE32_VOS_ENABLE='".$values['H323_LINE32_VOS_ENABLE']."'";
if($values['H323_LINE32_VOS_ENABLE'] == 1):
  $values['H323_LINE32_VOS_MODE'] = $_POST['line32_vos_mod'] ;
  $updatesql.=",H323_LINE32_VOS_MODE='".$values['H323_LINE32_VOS_MODE']."'";
endif; 
  $values['H323_LINE32_AUTH'] = $_POST['line32_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_LINE32_AUTH='".$values['H323_LINE32_AUTH']."'";
if($values['H323_LINE32_AUTH'] == 1):
  $values['H323_LINE32_H235_ID'] = $_POST['line32_h235_id'] ;
  $updatesql.=",H323_LINE32_H235_ID='".$values['H323_LINE32_H235_ID']."'";
  $values['H323_LINE32_H235_PASSWD'] = $_POST['line32_h235_passwd'] ;
  $updatesql.=",H323_LINE32_H235_PASSWD='".$values['H323_LINE32_H235_PASSWD']."'";
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
if($values['TELPORT'] >= 17): 
  $values['H323_L17_IN_G1'] = $_POST['h323_line17_in_group1']=='on'?'1':'0';
  $updatesql.=",H323_L17_IN_G1='".$values['H323_L17_IN_G1']."'";
endif; 
if($values['TELPORT'] >= 18): 
  $values['H323_L18_IN_G1'] = $_POST['h323_line18_in_group1']=='on'?'1':'0';
  $updatesql.=",H323_L18_IN_G1='".$values['H323_L18_IN_G1']."'";
endif; 
if($values['TELPORT'] >= 19): 
  $values['H323_L19_IN_G1'] = $_POST['h323_line19_in_group1']=='on'?'1':'0';
  $updatesql.=",H323_L19_IN_G1='".$values['H323_L19_IN_G1']."'";
endif; 
if($values['TELPORT'] >= 20): 
  $values['H323_L20_IN_G1'] = $_POST['h323_line20_in_group1']=='on'?'1':'0';
  $updatesql.=",H323_L20_IN_G1='".$values['H323_L20_IN_G1']."'";
endif; 
if($values['TELPORT'] >= 21): 
  $values['H323_L21_IN_G1'] = $_POST['h323_line21_in_group1']=='on'?'1':'0';
  $updatesql.=",H323_L21_IN_G1='".$values['H323_L21_IN_G1']."'";
endif; 
if($values['TELPORT'] >= 22): 
  $values['H323_L22_IN_G1'] = $_POST['h323_line22_in_group1']=='on'?'1':'0';
  $updatesql.=",H323_L22_IN_G1='".$values['H323_L22_IN_G1']."'";
endif; 
if($values['TELPORT'] >= 23): 
  $values['H323_L23_IN_G1'] = $_POST['h323_line23_in_group1']=='on'?'1':'0';
  $updatesql.=",H323_L23_IN_G1='".$values['H323_L23_IN_G1']."'";
endif; 
if($values['TELPORT'] >= 24): 
  $values['H323_L24_IN_G1'] = $_POST['h323_line24_in_group1']=='on'?'1':'0';
  $updatesql.=",H323_L24_IN_G1='".$values['H323_L24_IN_G1']."'";
endif; 
if($values['TELPORT'] >= 25): 
  $values['H323_L25_IN_G1'] = $_POST['h323_line25_in_group1']=='on'?'1':'0';
  $updatesql.=",H323_L25_IN_G1='".$values['H323_L25_IN_G1']."'";
endif; 
if($values['TELPORT'] >= 26): 
  $values['H323_L26_IN_G1'] = $_POST['h323_line26_in_group1']=='on'?'1':'0';
  $updatesql.=",H323_L26_IN_G1='".$values['H323_L26_IN_G1']."'";
endif; 
if($values['TELPORT'] >= 27): 
  $values['H323_L27_IN_G1'] = $_POST['h323_line27_in_group1']=='on'?'1':'0';
  $updatesql.=",H323_L27_IN_G1='".$values['H323_L27_IN_G1']."'";
endif; 
if($values['TELPORT'] >= 28): 
  $values['H323_L28_IN_G1'] = $_POST['h323_line28_in_group1']=='on'?'1':'0';
  $updatesql.=",H323_L28_IN_G1='".$values['H323_L28_IN_G1']."'";
endif; 
if($values['TELPORT'] >= 29): 
  $values['H323_L29_IN_G1'] = $_POST['h323_line29_in_group1']=='on'?'1':'0';
  $updatesql.=",H323_L29_IN_G1='".$values['H323_L29_IN_G1']."'";
endif; 
if($values['TELPORT'] >= 30): 
  $values['H323_L30_IN_G1'] = $_POST['h323_line30_in_group1']=='on'?'1':'0';
  $updatesql.=",H323_L30_IN_G1='".$values['H323_L30_IN_G1']."'";
endif; 
if($values['TELPORT'] >= 31): 
  $values['H323_L31_IN_G1'] = $_POST['h323_line31_in_group1']=='on'?'1':'0';
  $updatesql.=",H323_L31_IN_G1='".$values['H323_L31_IN_G1']."'";
endif; 
if($values['TELPORT'] >= 32): 
  $values['H323_L32_IN_G1'] = $_POST['h323_line32_in_group1']=='on'?'1':'0';
  $updatesql.=",H323_L32_IN_G1='".$values['H323_L32_IN_G1']."'";
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
if($values['TELPORT'] >= 17): 
  $values['H323_L17_IN_G2'] = $_POST['h323_line17_in_group2']=='on'?'1':'0';
  $updatesql.=",H323_L17_IN_G2='".$values['H323_L17_IN_G2']."'";
endif; 
if($values['TELPORT'] >= 18): 
  $values['H323_L18_IN_G2'] = $_POST['h323_line18_in_group2']=='on'?'1':'0';
  $updatesql.=",H323_L18_IN_G2='".$values['H323_L18_IN_G2']."'";
endif; 
if($values['TELPORT'] >= 19): 
  $values['H323_L19_IN_G2'] = $_POST['h323_line19_in_group2']=='on'?'1':'0';
  $updatesql.=",H323_L19_IN_G2='".$values['H323_L19_IN_G2']."'";
endif; 
if($values['TELPORT'] >= 20): 
  $values['H323_L20_IN_G2'] = $_POST['h323_line20_in_group2']=='on'?'1':'0';
  $updatesql.=",H323_L20_IN_G2='".$values['H323_L20_IN_G2']."'";
endif; 
if($values['TELPORT'] >= 21): 
  $values['H323_L21_IN_G2'] = $_POST['h323_line21_in_group2']=='on'?'1':'0';
  $updatesql.=",H323_L21_IN_G2='".$values['H323_L21_IN_G2']."'";
endif; 
if($values['TELPORT'] >= 22): 
  $values['H323_L22_IN_G2'] = $_POST['h323_line22_in_group2']=='on'?'1':'0';
  $updatesql.=",H323_L22_IN_G2='".$values['H323_L22_IN_G2']."'";
endif; 
if($values['TELPORT'] >= 23): 
  $values['H323_L23_IN_G2'] = $_POST['h323_line23_in_group2']=='on'?'1':'0';
  $updatesql.=",H323_L23_IN_G2='".$values['H323_L23_IN_G2']."'";
endif; 
if($values['TELPORT'] >= 20): 
  $values['H323_L24_IN_G2'] = $_POST['h323_line24_in_group2']=='on'?'1':'0';
  $updatesql.=",H323_L24_IN_G2='".$values['H323_L24_IN_G2']."'";
endif; 
if($values['TELPORT'] >= 25): 
  $values['H323_L25_IN_G2'] = $_POST['h323_line25_in_group2']=='on'?'1':'0';
  $updatesql.=",H323_L25_IN_G2='".$values['H323_L25_IN_G2']."'";
endif; 
if($values['TELPORT'] >= 26): 
  $values['H323_L26_IN_G2'] = $_POST['h323_line26_in_group2']=='on'?'1':'0';
  $updatesql.=",H323_L26_IN_G2='".$values['H323_L26_IN_G2']."'";
endif; 
if($values['TELPORT'] >= 27): 
  $values['H323_L27_IN_G2'] = $_POST['h323_line27_in_group2']=='on'?'1':'0';
  $updatesql.=",H323_L27_IN_G2='".$values['H323_L27_IN_G2']."'";
endif; 
if($values['TELPORT'] >= 28): 
  $values['H323_L28_IN_G2'] = $_POST['h323_line28_in_group2']=='on'?'1':'0';
  $updatesql.=",H323_L28_IN_G2='".$values['H323_L28_IN_G2']."'";
endif; 
if($values['TELPORT'] >= 29): 
  $values['H323_L29_IN_G2'] = $_POST['h323_line29_in_group2']=='on'?'1':'0';
  $updatesql.=",H323_L29_IN_G2='".$values['H323_L29_IN_G2']."'";
endif; 
if($values['TELPORT'] >= 30): 
  $values['H323_L30_IN_G2'] = $_POST['h323_line30_in_group2']=='on'?'1':'0';
  $updatesql.=",H323_L30_IN_G2='".$values['H323_L30_IN_G2']."'";
endif; 
if($values['TELPORT'] >= 31): 
  $values['H323_L31_IN_G2'] = $_POST['h323_line31_in_group2']=='on'?'1':'0';
  $updatesql.=",H323_L31_IN_G2='".$values['H323_L31_IN_G2']."'";
endif; 
if($values['TELPORT'] >= 32): 
  $values['H323_L32_IN_G2'] = $_POST['h323_line32_in_group2']=='on'?'1':'0';
  $updatesql.=",H323_L32_IN_G2='".$values['H323_L32_IN_G2']."'";
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
if($values['TELPORT'] >= 17): 
  $values['H323_L17_IN_G3'] = $_POST['h323_line17_in_group3']=='on'?'1':'0';
  $updatesql.=",H323_L17_IN_G3='".$values['H323_L17_IN_G3']."'";
endif; 
if($values['TELPORT'] >= 18): 
  $values['H323_L18_IN_G3'] = $_POST['h323_line18_in_group3']=='on'?'1':'0';
  $updatesql.=",H323_L18_IN_G3='".$values['H323_L18_IN_G3']."'";
endif; 
if($values['TELPORT'] >= 19): 
  $values['H323_L19_IN_G3'] = $_POST['h323_line19_in_group3']=='on'?'1':'0';
  $updatesql.=",H323_L19_IN_G3='".$values['H323_L19_IN_G3']."'";
endif;
if($values['TELPORT'] >= 20): 
  $values['H323_L20_IN_G3'] = $_POST['h323_line20_in_group3']=='on'?'1':'0';
  $updatesql.=",H323_L20_IN_G3='".$values['H323_L20_IN_G3']."'";
endif;  
if($values['TELPORT'] >= 21): 
  $values['H323_L21_IN_G3'] = $_POST['h323_line21_in_group3']=='on'?'1':'0';
  $updatesql.=",H323_L21_IN_G3='".$values['H323_L21_IN_G3']."'";
endif;  
if($values['TELPORT'] >= 22): 
  $values['H323_L22_IN_G3'] = $_POST['h323_line22_in_group3']=='on'?'1':'0';
  $updatesql.=",H323_L22_IN_G3='".$values['H323_L22_IN_G3']."'";
endif;  
if($values['TELPORT'] >= 23): 
  $values['H323_L23_IN_G3'] = $_POST['h323_line23_in_group3']=='on'?'1':'0';
  $updatesql.=",H323_L23_IN_G3='".$values['H323_L23_IN_G3']."'";
endif;  
if($values['TELPORT'] >= 24): 
  $values['H323_L24_IN_G3'] = $_POST['h323_line24_in_group3']=='on'?'1':'0';
  $updatesql.=",H323_L24_IN_G3='".$values['H323_L24_IN_G3']."'";
endif;  
if($values['TELPORT'] >= 25): 
  $values['H323_L25_IN_G3'] = $_POST['h323_line25_in_group3']=='on'?'1':'0';
  $updatesql.=",H323_L25_IN_G3='".$values['H323_L25_IN_G3']."'";
endif;  
if($values['TELPORT'] >= 26): 
  $values['H323_L26_IN_G3'] = $_POST['h323_line26_in_group3']=='on'?'1':'0';
  $updatesql.=",H323_L26_IN_G3='".$values['H323_L26_IN_G3']."'";
endif;  
if($values['TELPORT'] >= 27): 
  $values['H323_L27_IN_G3'] = $_POST['h323_line27_in_group3']=='on'?'1':'0';
  $updatesql.=",H323_L27_IN_G3='".$values['H323_L27_IN_G3']."'";
endif;  
if($values['TELPORT'] >= 28): 
  $values['H323_L28_IN_G3'] = $_POST['h323_line28_in_group3']=='on'?'1':'0';
  $updatesql.=",H323_L28_IN_G3='".$values['H323_L28_IN_G3']."'";
endif;  
if($values['TELPORT'] >= 29): 
  $values['H323_L29_IN_G3'] = $_POST['h323_line29_in_group3']=='on'?'1':'0';
  $updatesql.=",H323_L29_IN_G3='".$values['H323_L29_IN_G3']."'";
endif;  
if($values['TELPORT'] >= 30): 
  $values['H323_L30_IN_G3'] = $_POST['h323_line30_in_group3']=='on'?'1':'0';
  $updatesql.=",H323_L30_IN_G3='".$values['H323_L30_IN_G3']."'";
endif; 
if($values['TELPORT'] >= 31): 
  $values['H323_L31_IN_G3'] = $_POST['h323_line31_in_group3']=='on'?'1':'0';
  $updatesql.=",H323_L31_IN_G3='".$values['H323_L31_IN_G3']."'";
endif; 
if($values['TELPORT'] >= 32): 
  $values['H323_L32_IN_G3'] = $_POST['h323_line32_in_group3']=='on'?'1':'0';
  $updatesql.=",H323_L32_IN_G3='".$values['H323_L32_IN_G3']."'";
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
if($values['TELPORT'] >= 17): 
  $values['H323_L17_IN_G4'] = $_POST['h323_line17_in_group4']=='on'?'1':'0';
  $updatesql.=",H323_L17_IN_G4='".$values['H323_L17_IN_G4']."'";
endif; 
if($values['TELPORT'] >= 18): 
  $values['H323_L18_IN_G4'] = $_POST['h323_line18_in_group4']=='on'?'1':'0';
  $updatesql.=",H323_L18_IN_G4='".$values['H323_L18_IN_G4']."'";
endif; 
if($values['TELPORT'] >= 19): 
  $values['H323_L19_IN_G4'] = $_POST['h323_line19_in_group4']=='on'?'1':'0';
  $updatesql.=",H323_L19_IN_G4='".$values['H323_L19_IN_G4']."'";
endif; 
if($values['TELPORT'] >= 20): 
  $values['H323_L20_IN_G4'] = $_POST['h323_line20_in_group4']=='on'?'1':'0';
  $updatesql.=",H323_L20_IN_G4='".$values['H323_L20_IN_G4']."'";
endif; 
if($values['TELPORT'] >= 21): 
  $values['H323_L21_IN_G4'] = $_POST['h323_line21_in_group4']=='on'?'1':'0';
  $updatesql.=",H323_L21_IN_G4='".$values['H323_L21_IN_G4']."'";
endif; 
if($values['TELPORT'] >= 22): 
  $values['H323_L22_IN_G4'] = $_POST['h323_line22_in_group4']=='on'?'1':'0';
  $updatesql.=",H323_L22_IN_G4='".$values['H323_L22_IN_G4']."'";
endif; 
if($values['TELPORT'] >= 23): 
  $values['H323_L23_IN_G4'] = $_POST['h323_line23_in_group4']=='on'?'1':'0';
  $updatesql.=",H323_L23_IN_G4='".$values['H323_L23_IN_G4']."'";
endif; 
if($values['TELPORT'] >= 24): 
  $values['H323_L24_IN_G4'] = $_POST['h323_line24_in_group4']=='on'?'1':'0';
  $updatesql.=",H323_L24_IN_G4='".$values['H323_L24_IN_G4']."'";
endif; 
if($values['TELPORT'] >= 25): 
  $values['H323_L25_IN_G4'] = $_POST['h323_line25_in_group4']=='on'?'1':'0';
  $updatesql.=",H323_L25_IN_G4='".$values['H323_L25_IN_G4']."'";
endif; 
if($values['TELPORT'] >= 26): 
  $values['H323_L26_IN_G4'] = $_POST['h323_line26_in_group4']=='on'?'1':'0';
  $updatesql.=",H323_L26_IN_G4='".$values['H323_L26_IN_G4']."'";
endif; 
if($values['TELPORT'] >= 27): 
  $values['H323_L27_IN_G4'] = $_POST['h323_line27_in_group4']=='on'?'1':'0';
  $updatesql.=",H323_L27_IN_G4='".$values['H323_L27_IN_G4']."'";
endif; 
if($values['TELPORT'] >= 28): 
  $values['H323_L28_IN_G4'] = $_POST['h323_line28_in_group4']=='on'?'1':'0';
  $updatesql.=",H323_L28_IN_G4='".$values['H323_L28_IN_G4']."'";
endif; 
if($values['TELPORT'] >= 29): 
  $values['H323_L29_IN_G4'] = $_POST['h323_line29_in_group4']=='on'?'1':'0';
  $updatesql.=",H323_L29_IN_G4='".$values['H323_L29_IN_G4']."'";
endif; 
if($values['TELPORT'] >= 30): 
  $values['H323_L30_IN_G4'] = $_POST['h323_line30_in_group4']=='on'?'1':'0';
  $updatesql.=",H323_L30_IN_G4='".$values['H323_L30_IN_G4']."'";
endif; 
if($values['TELPORT'] >= 31): 
  $values['H323_L31_IN_G4'] = $_POST['h323_line31_in_group4']=='on'?'1':'0';
  $updatesql.=",H323_L31_IN_G4='".$values['H323_L31_IN_G4']."'";
endif; 
if($values['TELPORT'] >= 32): 
  $values['H323_L32_IN_G4'] = $_POST['h323_line32_in_group4']=='on'?'1':'0';
  $updatesql.=",H323_L32_IN_G4='".$values['H323_L32_IN_G4']."'";
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
if($values['TELPORT'] >= 10): 
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
if($values['TELPORT'] >= 11): 
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
if($values['TELPORT'] >= 12): 
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
if($values['TELPORT'] >= 13): 
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
if($values['TELPORT'] >= 14): 
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
if($values['TELPORT'] >= 15): 
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
if($values['TELPORT'] >= 16): 
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
  
if($values['TELPORT'] >= 17): 
endif; 
  $values['SIP_CONTACT22_DIAL_DIGITS'] = $_POST['sip_line17_number'] ;
  $updatesql.=",SIP_CONTACT22_DIAL_DIGITS='".$values['SIP_CONTACT22_DIAL_DIGITS']."'";
  $values['SIP_CONTACT22_GW_PREFIX'] = $_POST['sip_line17_gw_prefix'] ;
  $updatesql.=",SIP_CONTACT22_GW_PREFIX='".$values['SIP_CONTACT22_GW_PREFIX']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT22_PROXY'] = $_POST['sip_line17_proxy'] ;
  $updatesql.=",SIP_CONTACT22_PROXY='".$values['SIP_CONTACT22_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT22_SERVER'] = $_POST['sip_line17_registrar'] ;
  $updatesql.=",SIP_CONTACT22_SERVER='".$values['SIP_CONTACT22_SERVER']."'";
endif; 
  $values['SIP_CONTACT22_REGISTER_EXPIRED'] = $_POST['sip_line17_register_expired'] ;
  $updatesql.=",SIP_CONTACT22_REGISTER_EXPIRED='".$values['SIP_CONTACT22_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT22_OUTBOUND_PROXY'] = $_POST['sip_line17_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT22_OUTBOUND_PROXY='".$values['SIP_CONTACT22_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT22_HOME_DOMAIN'] = $_POST['sip_line17_home_domain'] ;
  $updatesql.=",SIP_CONTACT22_HOME_DOMAIN='".$values['SIP_CONTACT22_HOME_DOMAIN']."'";
  $values['SIP_CONTACT22_LOGIN'] = $_POST['sip_line17_auth_id'] ;
  $updatesql.=",SIP_CONTACT22_LOGIN='".$values['SIP_CONTACT22_LOGIN']."'";
  $values['SIP_CONTACT22_PASSWD'] = $_POST['sip_line17_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT22_PASSWD='".$values['SIP_CONTACT22_PASSWD']."'";
  
if($values['TELPORT'] >= 18): 
endif; 
  $values['SIP_CONTACT23_DIAL_DIGITS'] = $_POST['sip_line18_number'] ;
  $updatesql.=",SIP_CONTACT23_DIAL_DIGITS='".$values['SIP_CONTACT23_DIAL_DIGITS']."'";
  $values['SIP_CONTACT23_GW_PREFIX'] = $_POST['sip_line18_gw_prefix'] ;
  $updatesql.=",SIP_CONTACT23_GW_PREFIX='".$values['SIP_CONTACT23_GW_PREFIX']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT23_PROXY'] = $_POST['sip_line18_proxy'] ;
  $updatesql.=",SIP_CONTACT23_PROXY='".$values['SIP_CONTACT23_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT23_SERVER'] = $_POST['sip_line18_registrar'] ;
  $updatesql.=",SIP_CONTACT23_SERVER='".$values['SIP_CONTACT23_SERVER']."'";
endif; 
  $values['SIP_CONTACT23_REGISTER_EXPIRED'] = $_POST['sip_line18_register_expired'] ;
  $updatesql.=",SIP_CONTACT23_REGISTER_EXPIRED='".$values['SIP_CONTACT23_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT23_OUTBOUND_PROXY'] = $_POST['sip_line18_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT23_OUTBOUND_PROXY='".$values['SIP_CONTACT23_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT23_HOME_DOMAIN'] = $_POST['sip_line18_home_domain'] ;
  $updatesql.=",SIP_CONTACT23_HOME_DOMAIN='".$values['SIP_CONTACT23_HOME_DOMAIN']."'";
  $values['SIP_CONTACT23_LOGIN'] = $_POST['sip_line18_auth_id'] ;
  $updatesql.=",SIP_CONTACT23_LOGIN='".$values['SIP_CONTACT23_LOGIN']."'";
  $values['SIP_CONTACT23_PASSWD'] = $_POST['sip_line18_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT23_PASSWD='".$values['SIP_CONTACT23_PASSWD']."'";
  
if($values['TELPORT'] >= 19): 
endif; 
  $values['SIP_CONTACT24_DIAL_DIGITS'] = $_POST['sip_line19_number'] ;
  $updatesql.=",SIP_CONTACT24_DIAL_DIGITS='".$values['SIP_CONTACT24_DIAL_DIGITS']."'";
  $values['SIP_CONTACT24_GW_PREFIX'] = $_POST['sip_line19_gw_prefix'] ;
  $updatesql.=",SIP_CONTACT24_GW_PREFIX='".$values['SIP_CONTACT24_GW_PREFIX']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT24_PROXY'] = $_POST['sip_line19_proxy'] ;
  $updatesql.=",SIP_CONTACT24_PROXY='".$values['SIP_CONTACT24_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT24_SERVER'] = $_POST['sip_line19_registrar'] ;
  $updatesql.=",SIP_CONTACT24_SERVER='".$values['SIP_CONTACT24_SERVER']."'";
endif; 
  $values['SIP_CONTACT24_REGISTER_EXPIRED'] = $_POST['sip_line19_register_expired'] ;
  $updatesql.=",SIP_CONTACT24_REGISTER_EXPIRED='".$values['SIP_CONTACT24_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT24_OUTBOUND_PROXY'] = $_POST['sip_line19_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT24_OUTBOUND_PROXY='".$values['SIP_CONTACT24_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT24_HOME_DOMAIN'] = $_POST['sip_line19_home_domain'] ;
  $updatesql.=",SIP_CONTACT24_HOME_DOMAIN='".$values['SIP_CONTACT24_HOME_DOMAIN']."'";
  $values['SIP_CONTACT24_LOGIN'] = $_POST['sip_line19_auth_id'] ;
  $updatesql.=",SIP_CONTACT24_LOGIN='".$values['SIP_CONTACT24_LOGIN']."'";
  $values['SIP_CONTACT24_PASSWD'] = $_POST['sip_line19_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT24_PASSWD='".$values['SIP_CONTACT24_PASSWD']."'";
  
if($values['TELPORT'] >= 20): 
endif; 
  $values['SIP_CONTACT25_DIAL_DIGITS'] = $_POST['sip_line20_number'] ;
  $updatesql.=",SIP_CONTACT25_DIAL_DIGITS='".$values['SIP_CONTACT25_DIAL_DIGITS']."'";
  $values['SIP_CONTACT25_GW_PREFIX'] = $_POST['sip_line20_gw_prefix'] ;
  $updatesql.=",SIP_CONTACT25_GW_PREFIX='".$values['SIP_CONTACT25_GW_PREFIX']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT25_PROXY'] = $_POST['sip_line20_proxy'] ;
  $updatesql.=",SIP_CONTACT25_PROXY='".$values['SIP_CONTACT25_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT25_SERVER'] = $_POST['sip_line20_registrar'] ;
  $updatesql.=",SIP_CONTACT25_SERVER='".$values['SIP_CONTACT25_SERVER']."'";
endif; 
  $values['SIP_CONTACT25_REGISTER_EXPIRED'] = $_POST['sip_line20_register_expired'] ;
  $updatesql.=",SIP_CONTACT25_REGISTER_EXPIRED='".$values['SIP_CONTACT25_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT25_OUTBOUND_PROXY'] = $_POST['sip_line20_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT25_OUTBOUND_PROXY='".$values['SIP_CONTACT25_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT25_HOME_DOMAIN'] = $_POST['sip_line20_home_domain'] ;
  $updatesql.=",SIP_CONTACT25_HOME_DOMAIN='".$values['SIP_CONTACT25_HOME_DOMAIN']."'";
  $values['SIP_CONTACT25_LOGIN'] = $_POST['sip_line20_auth_id'] ;
  $updatesql.=",SIP_CONTACT25_LOGIN='".$values['SIP_CONTACT25_LOGIN']."'";
  $values['SIP_CONTACT25_PASSWD'] = $_POST['sip_line20_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT25_PASSWD='".$values['SIP_CONTACT25_PASSWD']."'";
  
if($values['TELPORT'] >= 21): 
endif; 
  $values['SIP_CONTACT26_DIAL_DIGITS'] = $_POST['sip_line21_number'] ;
  $updatesql.=",SIP_CONTACT26_DIAL_DIGITS='".$values['SIP_CONTACT26_DIAL_DIGITS']."'";
  $values['SIP_CONTACT26_GW_PREFIX'] = $_POST['sip_line21_gw_prefix'] ;
  $updatesql.=",SIP_CONTACT26_GW_PREFIX='".$values['SIP_CONTACT26_GW_PREFIX']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT26_PROXY'] = $_POST['sip_line21_proxy'] ;
  $updatesql.=",SIP_CONTACT26_PROXY='".$values['SIP_CONTACT26_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT26_SERVER'] = $_POST['sip_line21_registrar'] ;
  $updatesql.=",SIP_CONTACT26_SERVER='".$values['SIP_CONTACT26_SERVER']."'";
endif; 
  $values['SIP_CONTACT26_REGISTER_EXPIRED'] = $_POST['sip_line21_register_expired'] ;
  $updatesql.=",SIP_CONTACT26_REGISTER_EXPIRED='".$values['SIP_CONTACT26_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT26_OUTBOUND_PROXY'] = $_POST['sip_line21_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT26_OUTBOUND_PROXY='".$values['SIP_CONTACT26_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT26_HOME_DOMAIN'] = $_POST['sip_line21_home_domain'] ;
  $updatesql.=",SIP_CONTACT26_HOME_DOMAIN='".$values['SIP_CONTACT26_HOME_DOMAIN']."'";
  $values['SIP_CONTACT26_LOGIN'] = $_POST['sip_line21_auth_id'] ;
  $updatesql.=",SIP_CONTACT26_LOGIN='".$values['SIP_CONTACT26_LOGIN']."'";
  $values['SIP_CONTACT26_PASSWD'] = $_POST['sip_line21_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT26_PASSWD='".$values['SIP_CONTACT26_PASSWD']."'";
  
if($values['TELPORT'] >= 22): 
endif; 
  $values['SIP_CONTACT27_DIAL_DIGITS'] = $_POST['sip_line22_number'] ;
  $updatesql.=",SIP_CONTACT27_DIAL_DIGITS='".$values['SIP_CONTACT27_DIAL_DIGITS']."'";
  $values['SIP_CONTACT27_GW_PREFIX'] = $_POST['sip_line22_gw_prefix'] ;
  $updatesql.=",SIP_CONTACT27_GW_PREFIX='".$values['SIP_CONTACT27_GW_PREFIX']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT27_PROXY'] = $_POST['sip_line22_proxy'] ;
  $updatesql.=",SIP_CONTACT27_PROXY='".$values['SIP_CONTACT27_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT27_SERVER'] = $_POST['sip_line22_registrar'] ;
  $updatesql.=",SIP_CONTACT27_SERVER='".$values['SIP_CONTACT27_SERVER']."'";
endif; 
  $values['SIP_CONTACT27_REGISTER_EXPIRED'] = $_POST['sip_line22_register_expired'] ;
  $updatesql.=",SIP_CONTACT27_REGISTER_EXPIRED='".$values['SIP_CONTACT27_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT27_OUTBOUND_PROXY'] = $_POST['sip_line22_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT27_OUTBOUND_PROXY='".$values['SIP_CONTACT27_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT27_HOME_DOMAIN'] = $_POST['sip_line22_home_domain'] ;
  $updatesql.=",SIP_CONTACT27_HOME_DOMAIN='".$values['SIP_CONTACT27_HOME_DOMAIN']."'";
  $values['SIP_CONTACT27_LOGIN'] = $_POST['sip_line22_auth_id'] ;
  $updatesql.=",SIP_CONTACT27_LOGIN='".$values['SIP_CONTACT27_LOGIN']."'";
  $values['SIP_CONTACT27_PASSWD'] = $_POST['sip_line22_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT27_PASSWD='".$values['SIP_CONTACT27_PASSWD']."'";
  
if($values['TELPORT'] >= 23): 
endif; 
  $values['SIP_CONTACT28_DIAL_DIGITS'] = $_POST['sip_line23_number'] ;
  $updatesql.=",SIP_CONTACT28_DIAL_DIGITS='".$values['SIP_CONTACT28_DIAL_DIGITS']."'";
  $values['SIP_CONTACT28_GW_PREFIX'] = $_POST['sip_line23_gw_prefix'] ;
  $updatesql.=",SIP_CONTACT28_GW_PREFIX='".$values['SIP_CONTACT28_GW_PREFIX']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT28_PROXY'] = $_POST['sip_line23_proxy'] ;
  $updatesql.=",SIP_CONTACT28_PROXY='".$values['SIP_CONTACT28_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT28_SERVER'] = $_POST['sip_line23_registrar'] ;
  $updatesql.=",SIP_CONTACT28_SERVER='".$values['SIP_CONTACT28_SERVER']."'";
endif; 
  $values['SIP_CONTACT28_REGISTER_EXPIRED'] = $_POST['sip_line23_register_expired'] ;
  $updatesql.=",SIP_CONTACT28_REGISTER_EXPIRED='".$values['SIP_CONTACT28_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT28_OUTBOUND_PROXY'] = $_POST['sip_line23_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT28_OUTBOUND_PROXY='".$values['SIP_CONTACT28_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT28_HOME_DOMAIN'] = $_POST['sip_line23_home_domain'] ;
  $updatesql.=",SIP_CONTACT28_HOME_DOMAIN='".$values['SIP_CONTACT28_HOME_DOMAIN']."'";
  $values['SIP_CONTACT28_LOGIN'] = $_POST['sip_line23_auth_id'] ;
  $updatesql.=",SIP_CONTACT28_LOGIN='".$values['SIP_CONTACT28_LOGIN']."'";
  $values['SIP_CONTACT28_PASSWD'] = $_POST['sip_line23_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT28_PASSWD='".$values['SIP_CONTACT28_PASSWD']."'";
  
if($values['TELPORT'] >= 24): 
endif; 
  $values['SIP_CONTACT29_DIAL_DIGITS'] = $_POST['sip_line24_number'] ;
  $updatesql.=",SIP_CONTACT29_DIAL_DIGITS='".$values['SIP_CONTACT29_DIAL_DIGITS']."'";
  $values['SIP_CONTACT29_GW_PREFIX'] = $_POST['sip_line24_gw_prefix'] ;
  $updatesql.=",SIP_CONTACT29_GW_PREFIX='".$values['SIP_CONTACT29_GW_PREFIX']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT29_PROXY'] = $_POST['sip_line24_proxy'] ;
  $updatesql.=",SIP_CONTACT29_PROXY='".$values['SIP_CONTACT29_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT29_SERVER'] = $_POST['sip_line24_registrar'] ;
  $updatesql.=",SIP_CONTACT29_SERVER='".$values['SIP_CONTACT29_SERVER']."'";
endif; 
  $values['SIP_CONTACT29_REGISTER_EXPIRED'] = $_POST['sip_line24_register_expired'] ;
  $updatesql.=",SIP_CONTACT29_REGISTER_EXPIRED='".$values['SIP_CONTACT29_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT29_OUTBOUND_PROXY'] = $_POST['sip_line24_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT29_OUTBOUND_PROXY='".$values['SIP_CONTACT29_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT29_HOME_DOMAIN'] = $_POST['sip_line24_home_domain'] ;
  $updatesql.=",SIP_CONTACT29_HOME_DOMAIN='".$values['SIP_CONTACT29_HOME_DOMAIN']."'";
  $values['SIP_CONTACT29_LOGIN'] = $_POST['sip_line24_auth_id'] ;
  $updatesql.=",SIP_CONTACT29_LOGIN='".$values['SIP_CONTACT29_LOGIN']."'";
  $values['SIP_CONTACT29_PASSWD'] = $_POST['sip_line24_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT29_PASSWD='".$values['SIP_CONTACT29_PASSWD']."'";
  
if($values['TELPORT'] >= 25): 
endif; 
  $values['SIP_CONTACT30_DIAL_DIGITS'] = $_POST['sip_line25_number'] ;
  $updatesql.=",SIP_CONTACT30_DIAL_DIGITS='".$values['SIP_CONTACT30_DIAL_DIGITS']."'";
  $values['SIP_CONTACT30_GW_PREFIX'] = $_POST['sip_line25_gw_prefix'] ;
  $updatesql.=",SIP_CONTACT30_GW_PREFIX='".$values['SIP_CONTACT30_GW_PREFIX']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT30_PROXY'] = $_POST['sip_line25_proxy'] ;
  $updatesql.=",SIP_CONTACT30_PROXY='".$values['SIP_CONTACT30_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT30_SERVER'] = $_POST['sip_line25_registrar'] ;
  $updatesql.=",SIP_CONTACT30_SERVER='".$values['SIP_CONTACT30_SERVER']."'";
endif; 
  $values['SIP_CONTACT30_REGISTER_EXPIRED'] = $_POST['sip_line25_register_expired'] ;
  $updatesql.=",SIP_CONTACT30_REGISTER_EXPIRED='".$values['SIP_CONTACT30_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT30_OUTBOUND_PROXY'] = $_POST['sip_line25_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT30_OUTBOUND_PROXY='".$values['SIP_CONTACT30_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT30_HOME_DOMAIN'] = $_POST['sip_line25_home_domain'] ;
  $updatesql.=",SIP_CONTACT30_HOME_DOMAIN='".$values['SIP_CONTACT30_HOME_DOMAIN']."'";
  $values['SIP_CONTACT30_LOGIN'] = $_POST['sip_line25_auth_id'] ;
  $updatesql.=",SIP_CONTACT30_LOGIN='".$values['SIP_CONTACT30_LOGIN']."'";
  $values['SIP_CONTACT30_PASSWD'] = $_POST['sip_line25_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT30_PASSWD='".$values['SIP_CONTACT30_PASSWD']."'";
  
if($values['TELPORT'] >= 26): 
endif; 
  $values['SIP_CONTACT31_DIAL_DIGITS'] = $_POST['sip_line26_number'] ;
  $updatesql.=",SIP_CONTACT31_DIAL_DIGITS='".$values['SIP_CONTACT31_DIAL_DIGITS']."'";
  $values['SIP_CONTACT31_GW_PREFIX'] = $_POST['sip_line26_gw_prefix'] ;
  $updatesql.=",SIP_CONTACT31_GW_PREFIX='".$values['SIP_CONTACT31_GW_PREFIX']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT31_PROXY'] = $_POST['sip_line26_proxy'] ;
  $updatesql.=",SIP_CONTACT31_PROXY='".$values['SIP_CONTACT31_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT31_SERVER'] = $_POST['sip_line26_registrar'] ;
  $updatesql.=",SIP_CONTACT31_SERVER='".$values['SIP_CONTACT31_SERVER']."'";
endif; 
  $values['SIP_CONTACT31_REGISTER_EXPIRED'] = $_POST['sip_line26_register_expired'] ;
  $updatesql.=",SIP_CONTACT31_REGISTER_EXPIRED='".$values['SIP_CONTACT31_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT31_OUTBOUND_PROXY'] = $_POST['sip_line26_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT31_OUTBOUND_PROXY='".$values['SIP_CONTACT31_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT31_HOME_DOMAIN'] = $_POST['sip_line26_home_domain'] ;
  $updatesql.=",SIP_CONTACT31_HOME_DOMAIN='".$values['SIP_CONTACT31_HOME_DOMAIN']."'";
  $values['SIP_CONTACT31_LOGIN'] = $_POST['sip_line26_auth_id'] ;
  $updatesql.=",SIP_CONTACT31_LOGIN='".$values['SIP_CONTACT31_LOGIN']."'";
  $values['SIP_CONTACT31_PASSWD'] = $_POST['sip_line26_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT31_PASSWD='".$values['SIP_CONTACT31_PASSWD']."'";
  
if($values['TELPORT'] >= 27): 
endif; 
  $values['SIP_CONTACT32_DIAL_DIGITS'] = $_POST['sip_line27_number'] ;
  $updatesql.=",SIP_CONTACT32_DIAL_DIGITS='".$values['SIP_CONTACT32_DIAL_DIGITS']."'";
  $values['SIP_CONTACT32_GW_PREFIX'] = $_POST['sip_line27_gw_prefix'] ;
  $updatesql.=",SIP_CONTACT32_GW_PREFIX='".$values['SIP_CONTACT32_GW_PREFIX']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT32_PROXY'] = $_POST['sip_line27_proxy'] ;
  $updatesql.=",SIP_CONTACT32_PROXY='".$values['SIP_CONTACT32_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT32_SERVER'] = $_POST['sip_line27_registrar'] ;
  $updatesql.=",SIP_CONTACT32_SERVER='".$values['SIP_CONTACT32_SERVER']."'";
endif; 
  $values['SIP_CONTACT32_REGISTER_EXPIRED'] = $_POST['sip_line27_register_expired'] ;
  $updatesql.=",SIP_CONTACT32_REGISTER_EXPIRED='".$values['SIP_CONTACT32_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT32_OUTBOUND_PROXY'] = $_POST['sip_line27_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT32_OUTBOUND_PROXY='".$values['SIP_CONTACT32_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT32_HOME_DOMAIN'] = $_POST['sip_line27_home_domain'] ;
  $updatesql.=",SIP_CONTACT32_HOME_DOMAIN='".$values['SIP_CONTACT32_HOME_DOMAIN']."'";
  $values['SIP_CONTACT32_LOGIN'] = $_POST['sip_line27_auth_id'] ;
  $updatesql.=",SIP_CONTACT32_LOGIN='".$values['SIP_CONTACT32_LOGIN']."'";
  $values['SIP_CONTACT32_PASSWD'] = $_POST['sip_line27_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT32_PASSWD='".$values['SIP_CONTACT32_PASSWD']."'";
  
if($values['TELPORT'] >= 28): 
endif; 
  $values['SIP_CONTACT33_DIAL_DIGITS'] = $_POST['sip_line28_number'] ;
  $updatesql.=",SIP_CONTACT33_DIAL_DIGITS='".$values['SIP_CONTACT33_DIAL_DIGITS']."'";
  $values['SIP_CONTACT33_GW_PREFIX'] = $_POST['sip_line28_gw_prefix'] ;
  $updatesql.=",SIP_CONTACT33_GW_PREFIX='".$values['SIP_CONTACT33_GW_PREFIX']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT33_PROXY'] = $_POST['sip_line28_proxy'] ;
  $updatesql.=",SIP_CONTACT33_PROXY='".$values['SIP_CONTACT33_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT33_SERVER'] = $_POST['sip_line28_registrar'] ;
  $updatesql.=",SIP_CONTACT33_SERVER='".$values['SIP_CONTACT33_SERVER']."'";
endif; 
  $values['SIP_CONTACT33_REGISTER_EXPIRED'] = $_POST['sip_line28_register_expired'] ;
  $updatesql.=",SIP_CONTACT33_REGISTER_EXPIRED='".$values['SIP_CONTACT33_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT33_OUTBOUND_PROXY'] = $_POST['sip_line28_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT33_OUTBOUND_PROXY='".$values['SIP_CONTACT33_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT33_HOME_DOMAIN'] = $_POST['sip_line28_home_domain'] ;
  $updatesql.=",SIP_CONTACT33_HOME_DOMAIN='".$values['SIP_CONTACT33_HOME_DOMAIN']."'";
  $values['SIP_CONTACT33_LOGIN'] = $_POST['sip_line28_auth_id'] ;
  $updatesql.=",SIP_CONTACT33_LOGIN='".$values['SIP_CONTACT33_LOGIN']."'";
  $values['SIP_CONTACT33_PASSWD'] = $_POST['sip_line28_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT33_PASSWD='".$values['SIP_CONTACT33_PASSWD']."'";
  
if($values['TELPORT'] >= 29): 
endif; 
  $values['SIP_CONTACT34_DIAL_DIGITS'] = $_POST['sip_line29_number'] ;
  $updatesql.=",SIP_CONTACT34_DIAL_DIGITS='".$values['SIP_CONTACT34_DIAL_DIGITS']."'";
  $values['SIP_CONTACT34_GW_PREFIX'] = $_POST['sip_line29_gw_prefix'] ;
  $updatesql.=",SIP_CONTACT34_GW_PREFIX='".$values['SIP_CONTACT34_GW_PREFIX']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT34_PROXY'] = $_POST['sip_line29_proxy'] ;
  $updatesql.=",SIP_CONTACT34_PROXY='".$values['SIP_CONTACT34_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT34_SERVER'] = $_POST['sip_line29_registrar'] ;
  $updatesql.=",SIP_CONTACT34_SERVER='".$values['SIP_CONTACT34_SERVER']."'";
endif; 
  $values['SIP_CONTACT34_REGISTER_EXPIRED'] = $_POST['sip_line29_register_expired'] ;
  $updatesql.=",SIP_CONTACT34_REGISTER_EXPIRED='".$values['SIP_CONTACT34_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT34_OUTBOUND_PROXY'] = $_POST['sip_line29_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT34_OUTBOUND_PROXY='".$values['SIP_CONTACT34_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT34_HOME_DOMAIN'] = $_POST['sip_line29_home_domain'] ;
  $updatesql.=",SIP_CONTACT34_HOME_DOMAIN='".$values['SIP_CONTACT34_HOME_DOMAIN']."'";
  $values['SIP_CONTACT34_LOGIN'] = $_POST['sip_line29_auth_id'] ;
  $updatesql.=",SIP_CONTACT34_LOGIN='".$values['SIP_CONTACT34_LOGIN']."'";
  $values['SIP_CONTACT34_PASSWD'] = $_POST['sip_line29_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT34_PASSWD='".$values['SIP_CONTACT34_PASSWD']."'";
  
if($values['TELPORT'] >= 30): 
endif; 
  $values['SIP_CONTACT35_DIAL_DIGITS'] = $_POST['sip_line30_number'] ;
  $updatesql.=",SIP_CONTACT35_DIAL_DIGITS='".$values['SIP_CONTACT35_DIAL_DIGITS']."'";
  $values['SIP_CONTACT35_GW_PREFIX'] = $_POST['sip_line30_gw_prefix'] ;
  $updatesql.=",SIP_CONTACT35_GW_PREFIX='".$values['SIP_CONTACT35_GW_PREFIX']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT35_PROXY'] = $_POST['sip_line30_proxy'] ;
  $updatesql.=",SIP_CONTACT35_PROXY='".$values['SIP_CONTACT35_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT35_SERVER'] = $_POST['sip_line30_registrar'] ;
  $updatesql.=",SIP_CONTACT35_SERVER='".$values['SIP_CONTACT35_SERVER']."'";
endif; 
  $values['SIP_CONTACT35_REGISTER_EXPIRED'] = $_POST['sip_line30_register_expired'] ;
  $updatesql.=",SIP_CONTACT35_REGISTER_EXPIRED='".$values['SIP_CONTACT35_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT35_OUTBOUND_PROXY'] = $_POST['sip_line30_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT35_OUTBOUND_PROXY='".$values['SIP_CONTACT35_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT35_HOME_DOMAIN'] = $_POST['sip_line30_home_domain'] ;
  $updatesql.=",SIP_CONTACT35_HOME_DOMAIN='".$values['SIP_CONTACT35_HOME_DOMAIN']."'";
  $values['SIP_CONTACT35_LOGIN'] = $_POST['sip_line30_auth_id'] ;
  $updatesql.=",SIP_CONTACT35_LOGIN='".$values['SIP_CONTACT35_LOGIN']."'";
  $values['SIP_CONTACT35_PASSWD'] = $_POST['sip_line30_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT35_PASSWD='".$values['SIP_CONTACT35_PASSWD']."'";
  
if($values['TELPORT'] >= 31): 
endif; 
  $values['SIP_CONTACT36_DIAL_DIGITS'] = $_POST['sip_line31_number'] ;
  $updatesql.=",SIP_CONTACT36_DIAL_DIGITS='".$values['SIP_CONTACT36_DIAL_DIGITS']."'";
  $values['SIP_CONTACT36_GW_PREFIX'] = $_POST['sip_line31_gw_prefix'] ;
  $updatesql.=",SIP_CONTACT36_GW_PREFIX='".$values['SIP_CONTACT36_GW_PREFIX']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT36_PROXY'] = $_POST['sip_line31_proxy'] ;
  $updatesql.=",SIP_CONTACT36_PROXY='".$values['SIP_CONTACT36_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT36_SERVER'] = $_POST['sip_line31_registrar'] ;
  $updatesql.=",SIP_CONTACT36_SERVER='".$values['SIP_CONTACT36_SERVER']."'";
endif; 
  $values['SIP_CONTACT36_REGISTER_EXPIRED'] = $_POST['sip_line31_register_expired'] ;
  $updatesql.=",SIP_CONTACT36_REGISTER_EXPIRED='".$values['SIP_CONTACT36_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT36_OUTBOUND_PROXY'] = $_POST['sip_line31_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT36_OUTBOUND_PROXY='".$values['SIP_CONTACT36_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT36_HOME_DOMAIN'] = $_POST['sip_line31_home_domain'] ;
  $updatesql.=",SIP_CONTACT36_HOME_DOMAIN='".$values['SIP_CONTACT36_HOME_DOMAIN']."'";
  $values['SIP_CONTACT36_LOGIN'] = $_POST['sip_line31_auth_id'] ;
  $updatesql.=",SIP_CONTACT36_LOGIN='".$values['SIP_CONTACT36_LOGIN']."'";
  $values['SIP_CONTACT36_PASSWD'] = $_POST['sip_line31_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT36_PASSWD='".$values['SIP_CONTACT36_PASSWD']."'";
  
if($values['TELPORT'] >= 32): 
endif; 
  $values['SIP_CONTACT37_DIAL_DIGITS'] = $_POST['sip_line32_number'] ;
  $updatesql.=",SIP_CONTACT37_DIAL_DIGITS='".$values['SIP_CONTACT37_DIAL_DIGITS']."'";
  $values['SIP_CONTACT37_GW_PREFIX'] = $_POST['sip_line32_gw_prefix'] ;
  $updatesql.=",SIP_CONTACT37_GW_PREFIX='".$values['SIP_CONTACT37_GW_PREFIX']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT37_PROXY'] = $_POST['sip_line32_proxy'] ;
  $updatesql.=",SIP_CONTACT37_PROXY='".$values['SIP_CONTACT37_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT37_SERVER'] = $_POST['sip_line32_registrar'] ;
  $updatesql.=",SIP_CONTACT37_SERVER='".$values['SIP_CONTACT37_SERVER']."'";
endif; 
  $values['SIP_CONTACT37_REGISTER_EXPIRED'] = $_POST['sip_line32_register_expired'] ;
  $updatesql.=",SIP_CONTACT37_REGISTER_EXPIRED='".$values['SIP_CONTACT37_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_COOKIE['adminname'] == $SUPER_USER):
  $values['SIP_CONTACT37_OUTBOUND_PROXY'] = $_POST['sip_line32_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT37_OUTBOUND_PROXY='".$values['SIP_CONTACT37_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT37_HOME_DOMAIN'] = $_POST['sip_line32_home_domain'] ;
  $updatesql.=",SIP_CONTACT37_HOME_DOMAIN='".$values['SIP_CONTACT37_HOME_DOMAIN']."'";
  $values['SIP_CONTACT37_LOGIN'] = $_POST['sip_line32_auth_id'] ;
  $updatesql.=",SIP_CONTACT37_LOGIN='".$values['SIP_CONTACT37_LOGIN']."'";
  $values['SIP_CONTACT37_PASSWD'] = $_POST['sip_line32_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT37_PASSWD='".$values['SIP_CONTACT37_PASSWD']."'";
  
  
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
  
  $insertsql.=",H323_LINE17_NUMBER";
  $insertsql2.="','".$values['H323_LINE17_NUMBER'];
  $insertsql.=",H323_LINE17_H323_ID";
  $insertsql2.="','".$values['H323_LINE17_H323_ID'];
  $insertsql.=",H323_LINE17_GW_PREFIX";
  $insertsql2.="','".$values['H323_LINE17_GW_PREFIX'];
  $insertsql.=",H323_LINE17_GKADDR";
  $insertsql2.="','".$values['H323_LINE17_GKADDR'];
  $insertsql.=",H323_LINE17_VOS_ENABLE";
  $insertsql2.="','".$values['H323_LINE17_VOS_ENABLE'];
  $insertsql.=",H323_LINE17_VOS_MODE";
  $insertsql2.="','".$values['H323_LINE17_VOS_MODE'];
  $insertsql.=",H323_LINE17_AUTH";
  $insertsql2.="','".$values['H323_LINE17_AUTH'];
  $insertsql.=",H323_LINE17_H235_ID";
  $insertsql2.="','".$values['H323_LINE17_H235_ID'];
  $insertsql.=",H323_LINE17_H235_PASSWD";
  $insertsql2.="','".$values['H323_LINE17_H235_PASSWD'];
  
  $insertsql.=",H323_LINE18_NUMBER";
  $insertsql2.="','".$values['H323_LINE18_NUMBER'];
  $insertsql.=",H323_LINE18_H323_ID";
  $insertsql2.="','".$values['H323_LINE18_H323_ID'];
  $insertsql.=",H323_LINE18_GW_PREFIX";
  $insertsql2.="','".$values['H323_LINE18_GW_PREFIX'];
  $insertsql.=",H323_LINE18_GKADDR";
  $insertsql2.="','".$values['H323_LINE18_GKADDR'];
  $insertsql.=",H323_LINE18_VOS_ENABLE";
  $insertsql2.="','".$values['H323_LINE18_VOS_ENABLE'];
  $insertsql.=",H323_LINE18_VOS_MODE";
  $insertsql2.="','".$values['H323_LINE18_VOS_MODE'];
  $insertsql.=",H323_LINE18_AUTH";
  $insertsql2.="','".$values['H323_LINE18_AUTH'];
  $insertsql.=",H323_LINE18_H235_ID";
  $insertsql2.="','".$values['H323_LINE18_H235_ID'];
  $insertsql.=",H323_LINE18_H235_PASSWD";
  $insertsql2.="','".$values['H323_LINE18_H235_PASSWD'];
  
  $insertsql.=",H323_LINE19_NUMBER";
  $insertsql2.="','".$values['H323_LINE19_NUMBER'];
  $insertsql.=",H323_LINE19_H323_ID";
  $insertsql2.="','".$values['H323_LINE19_H323_ID'];
  $insertsql.=",H323_LINE19_GW_PREFIX";
  $insertsql2.="','".$values['H323_LINE19_GW_PREFIX'];
  $insertsql.=",H323_LINE19_GKADDR";
  $insertsql2.="','".$values['H323_LINE19_GKADDR'];
  $insertsql.=",H323_LINE19_VOS_ENABLE";
  $insertsql2.="','".$values['H323_LINE19_VOS_ENABLE'];
  $insertsql.=",H323_LINE19_VOS_MODE";
  $insertsql2.="','".$values['H323_LINE19_VOS_MODE'];
  $insertsql.=",H323_LINE19_AUTH";
  $insertsql2.="','".$values['H323_LINE19_AUTH'];
  $insertsql.=",H323_LINE19_H235_ID";
  $insertsql2.="','".$values['H323_LINE19_H235_ID'];
  $insertsql.=",H323_LINE19_H235_PASSWD";
  $insertsql2.="','".$values['H323_LINE19_H235_PASSWD'];
  
  $insertsql.=",H323_LINE20_NUMBER";
  $insertsql2.="','".$values['H323_LINE20_NUMBER'];
  $insertsql.=",H323_LINE20_H323_ID";
  $insertsql2.="','".$values['H323_LINE20_H323_ID'];
  $insertsql.=",H323_LINE20_GW_PREFIX";
  $insertsql2.="','".$values['H323_LINE20_GW_PREFIX'];
  $insertsql.=",H323_LINE20_GKADDR";
  $insertsql2.="','".$values['H323_LINE20_GKADDR'];
  $insertsql.=",H323_LINE20_VOS_ENABLE";
  $insertsql2.="','".$values['H323_LINE20_VOS_ENABLE'];
  $insertsql.=",H323_LINE20_VOS_MODE";
  $insertsql2.="','".$values['H323_LINE20_VOS_MODE'];
  $insertsql.=",H323_LINE20_AUTH";
  $insertsql2.="','".$values['H323_LINE20_AUTH'];
  $insertsql.=",H323_LINE20_H235_ID";
  $insertsql2.="','".$values['H323_LINE20_H235_ID'];
  $insertsql.=",H323_LINE20_H235_PASSWD";
  $insertsql2.="','".$values['H323_LINE20_H235_PASSWD'];
  
  $insertsql.=",H323_LINE21_NUMBER";
  $insertsql2.="','".$values['H323_LINE21_NUMBER'];
  $insertsql.=",H323_LINE21_H323_ID";
  $insertsql2.="','".$values['H323_LINE21_H323_ID'];
  $insertsql.=",H323_LINE21_GW_PREFIX";
  $insertsql2.="','".$values['H323_LINE21_GW_PREFIX'];
  $insertsql.=",H323_LINE21_GKADDR";
  $insertsql2.="','".$values['H323_LINE21_GKADDR'];
  $insertsql.=",H323_LINE21_VOS_ENABLE";
  $insertsql2.="','".$values['H323_LINE21_VOS_ENABLE'];
  $insertsql.=",H323_LINE21_VOS_MODE";
  $insertsql2.="','".$values['H323_LINE21_VOS_MODE'];
  $insertsql.=",H323_LINE21_AUTH";
  $insertsql2.="','".$values['H323_LINE21_AUTH'];
  $insertsql.=",H323_LINE21_H235_ID";
  $insertsql2.="','".$values['H323_LINE21_H235_ID'];
  $insertsql.=",H323_LINE21_H235_PASSWD";
  $insertsql2.="','".$values['H323_LINE21_H235_PASSWD'];
  
  $insertsql.=",H323_LINE22_NUMBER";
  $insertsql2.="','".$values['H323_LINE22_NUMBER'];
  $insertsql.=",H323_LINE22_H323_ID";
  $insertsql2.="','".$values['H323_LINE22_H323_ID'];
  $insertsql.=",H323_LINE22_GW_PREFIX";
  $insertsql2.="','".$values['H323_LINE22_GW_PREFIX'];
  $insertsql.=",H323_LINE22_GKADDR";
  $insertsql2.="','".$values['H323_LINE22_GKADDR'];
  $insertsql.=",H323_LINE22_VOS_ENABLE";
  $insertsql2.="','".$values['H323_LINE22_VOS_ENABLE'];
  $insertsql.=",H323_LINE22_VOS_MODE";
  $insertsql2.="','".$values['H323_LINE22_VOS_MODE'];
  $insertsql.=",H323_LINE22_AUTH";
  $insertsql2.="','".$values['H323_LINE22_AUTH'];
  $insertsql.=",H323_LINE22_H235_ID";
  $insertsql2.="','".$values['H323_LINE22_H235_ID'];
  $insertsql.=",H323_LINE22_H235_PASSWD";
  $insertsql2.="','".$values['H323_LINE22_H235_PASSWD'];
  
  $insertsql.=",H323_LINE23_NUMBER";
  $insertsql2.="','".$values['H323_LINE23_NUMBER'];
  $insertsql.=",H323_LINE23_H323_ID";
  $insertsql2.="','".$values['H323_LINE23_H323_ID'];
  $insertsql.=",H323_LINE23_GW_PREFIX";
  $insertsql2.="','".$values['H323_LINE23_GW_PREFIX'];
  $insertsql.=",H323_LINE23_GKADDR";
  $insertsql2.="','".$values['H323_LINE23_GKADDR'];
  $insertsql.=",H323_LINE23_VOS_ENABLE";
  $insertsql2.="','".$values['H323_LINE23_VOS_ENABLE'];
  $insertsql.=",H323_LINE23_VOS_MODE";
  $insertsql2.="','".$values['H323_LINE23_VOS_MODE'];
  $insertsql.=",H323_LINE23_AUTH";
  $insertsql2.="','".$values['H323_LINE23_AUTH'];
  $insertsql.=",H323_LINE23_H235_ID";
  $insertsql2.="','".$values['H323_LINE23_H235_ID'];
  $insertsql.=",H323_LINE23_H235_PASSWD";
  $insertsql2.="','".$values['H323_LINE23_H235_PASSWD'];
  
  $insertsql.=",H323_LINE24_NUMBER";
  $insertsql2.="','".$values['H323_LINE24_NUMBER'];
  $insertsql.=",H323_LINE24_H323_ID";
  $insertsql2.="','".$values['H323_LINE24_H323_ID'];
  $insertsql.=",H323_LINE24_GW_PREFIX";
  $insertsql2.="','".$values['H323_LINE24_GW_PREFIX'];
  $insertsql.=",H323_LINE24_GKADDR";
  $insertsql2.="','".$values['H323_LINE24_GKADDR'];
  $insertsql.=",H323_LINE24_VOS_ENABLE";
  $insertsql2.="','".$values['H323_LINE24_VOS_ENABLE'];
  $insertsql.=",H323_LINE24_VOS_MODE";
  $insertsql2.="','".$values['H323_LINE24_VOS_MODE'];
  $insertsql.=",H323_LINE24_AUTH";
  $insertsql2.="','".$values['H323_LINE24_AUTH'];
  $insertsql.=",H323_LINE24_H235_ID";
  $insertsql2.="','".$values['H323_LINE24_H235_ID'];
  $insertsql.=",H323_LINE24_H235_PASSWD";
  $insertsql2.="','".$values['H323_LINE24_H235_PASSWD'];
  
  $insertsql.=",H323_LINE25_NUMBER";
  $insertsql2.="','".$values['H323_LINE25_NUMBER'];
  $insertsql.=",H323_LINE25_H323_ID";
  $insertsql2.="','".$values['H323_LINE25_H323_ID'];
  $insertsql.=",H323_LINE25_GW_PREFIX";
  $insertsql2.="','".$values['H323_LINE25_GW_PREFIX'];
  $insertsql.=",H323_LINE25_GKADDR";
  $insertsql2.="','".$values['H323_LINE25_GKADDR'];
  $insertsql.=",H323_LINE25_VOS_ENABLE";
  $insertsql2.="','".$values['H323_LINE25_VOS_ENABLE'];
  $insertsql.=",H323_LINE25_VOS_MODE";
  $insertsql2.="','".$values['H323_LINE25_VOS_MODE'];
  $insertsql.=",H323_LINE25_AUTH";
  $insertsql2.="','".$values['H323_LINE25_AUTH'];
  $insertsql.=",H323_LINE25_H235_ID";
  $insertsql2.="','".$values['H323_LINE25_H235_ID'];
  $insertsql.=",H323_LINE25_H235_PASSWD";
  $insertsql2.="','".$values['H323_LINE25_H235_PASSWD'];
  
  $insertsql.=",H323_LINE26_NUMBER";
  $insertsql2.="','".$values['H323_LINE26_NUMBER'];
  $insertsql.=",H323_LINE26_H323_ID";
  $insertsql2.="','".$values['H323_LINE26_H323_ID'];
  $insertsql.=",H323_LINE26_GW_PREFIX";
  $insertsql2.="','".$values['H323_LINE26_GW_PREFIX'];
  $insertsql.=",H323_LINE26_GKADDR";
  $insertsql2.="','".$values['H323_LINE26_GKADDR'];
  $insertsql.=",H323_LINE26_VOS_ENABLE";
  $insertsql2.="','".$values['H323_LINE26_VOS_ENABLE'];
  $insertsql.=",H323_LINE26_VOS_MODE";
  $insertsql2.="','".$values['H323_LINE26_VOS_MODE'];
  $insertsql.=",H323_LINE26_AUTH";
  $insertsql2.="','".$values['H323_LINE26_AUTH'];
  $insertsql.=",H323_LINE26_H235_ID";
  $insertsql2.="','".$values['H323_LINE26_H235_ID'];
  $insertsql.=",H323_LINE26_H235_PASSWD";
  $insertsql2.="','".$values['H323_LINE26_H235_PASSWD'];
  
  $insertsql.=",H323_LINE27_NUMBER";
  $insertsql2.="','".$values['H323_LINE27_NUMBER'];
  $insertsql.=",H323_LINE27_H323_ID";
  $insertsql2.="','".$values['H323_LINE27_H323_ID'];
  $insertsql.=",H323_LINE27_GW_PREFIX";
  $insertsql2.="','".$values['H323_LINE27_GW_PREFIX'];
  $insertsql.=",H323_LINE27_GKADDR";
  $insertsql2.="','".$values['H323_LINE27_GKADDR'];
  $insertsql.=",H323_LINE27_VOS_ENABLE";
  $insertsql2.="','".$values['H323_LINE27_VOS_ENABLE'];
  $insertsql.=",H323_LINE27_VOS_MODE";
  $insertsql2.="','".$values['H323_LINE27_VOS_MODE'];
  $insertsql.=",H323_LINE27_AUTH";
  $insertsql2.="','".$values['H323_LINE27_AUTH'];
  $insertsql.=",H323_LINE27_H235_ID";
  $insertsql2.="','".$values['H323_LINE27_H235_ID'];
  $insertsql.=",H323_LINE27_H235_PASSWD";
  $insertsql2.="','".$values['H323_LINE27_H235_PASSWD'];
  
  $insertsql.=",H323_LINE28_NUMBER";
  $insertsql2.="','".$values['H323_LINE28_NUMBER'];
  $insertsql.=",H323_LINE28_H323_ID";
  $insertsql2.="','".$values['H323_LINE28_H323_ID'];
  $insertsql.=",H323_LINE28_GW_PREFIX";
  $insertsql2.="','".$values['H323_LINE28_GW_PREFIX'];
  $insertsql.=",H323_LINE28_GKADDR";
  $insertsql2.="','".$values['H323_LINE28_GKADDR'];
  $insertsql.=",H323_LINE28_VOS_ENABLE";
  $insertsql2.="','".$values['H323_LINE28_VOS_ENABLE'];
  $insertsql.=",H323_LINE28_VOS_MODE";
  $insertsql2.="','".$values['H323_LINE28_VOS_MODE'];
  $insertsql.=",H323_LINE28_AUTH";
  $insertsql2.="','".$values['H323_LINE28_AUTH'];
  $insertsql.=",H323_LINE28_H235_ID";
  $insertsql2.="','".$values['H323_LINE28_H235_ID'];
  $insertsql.=",H323_LINE28_H235_PASSWD";
  $insertsql2.="','".$values['H323_LINE28_H235_PASSWD'];
  
  $insertsql.=",H323_LINE29_NUMBER";
  $insertsql2.="','".$values['H323_LINE29_NUMBER'];
  $insertsql.=",H323_LINE29_H323_ID";
  $insertsql2.="','".$values['H323_LINE29_H323_ID'];
  $insertsql.=",H323_LINE29_GW_PREFIX";
  $insertsql2.="','".$values['H323_LINE29_GW_PREFIX'];
  $insertsql.=",H323_LINE29_GKADDR";
  $insertsql2.="','".$values['H323_LINE29_GKADDR'];
  $insertsql.=",H323_LINE29_VOS_ENABLE";
  $insertsql2.="','".$values['H323_LINE29_VOS_ENABLE'];
  $insertsql.=",H323_LINE29_VOS_MODE";
  $insertsql2.="','".$values['H323_LINE29_VOS_MODE'];
  $insertsql.=",H323_LINE29_AUTH";
  $insertsql2.="','".$values['H323_LINE29_AUTH'];
  $insertsql.=",H323_LINE29_H235_ID";
  $insertsql2.="','".$values['H323_LINE29_H235_ID'];
  $insertsql.=",H323_LINE29_H235_PASSWD";
  $insertsql2.="','".$values['H323_LINE29_H235_PASSWD'];
  
  $insertsql.=",H323_LINE30_NUMBER";
  $insertsql2.="','".$values['H323_LINE30_NUMBER'];
  $insertsql.=",H323_LINE30_H323_ID";
  $insertsql2.="','".$values['H323_LINE30_H323_ID'];
  $insertsql.=",H323_LINE30_GW_PREFIX";
  $insertsql2.="','".$values['H323_LINE30_GW_PREFIX'];
  $insertsql.=",H323_LINE30_GKADDR";
  $insertsql2.="','".$values['H323_LINE30_GKADDR'];
  $insertsql.=",H323_LINE30_VOS_ENABLE";
  $insertsql2.="','".$values['H323_LINE30_VOS_ENABLE'];
  $insertsql.=",H323_LINE30_VOS_MODE";
  $insertsql2.="','".$values['H323_LINE30_VOS_MODE'];
  $insertsql.=",H323_LINE30_AUTH";
  $insertsql2.="','".$values['H323_LINE30_AUTH'];
  $insertsql.=",H323_LINE30_H235_ID";
  $insertsql2.="','".$values['H323_LINE30_H235_ID'];
  $insertsql.=",H323_LINE30_H235_PASSWD";
  $insertsql2.="','".$values['H323_LINE30_H235_PASSWD'];
  
  $insertsql.=",H323_LINE31_NUMBER";
  $insertsql2.="','".$values['H323_LINE31_NUMBER'];
  $insertsql.=",H323_LINE31_H323_ID";
  $insertsql2.="','".$values['H323_LINE31_H323_ID'];
  $insertsql.=",H323_LINE31_GW_PREFIX";
  $insertsql2.="','".$values['H323_LINE31_GW_PREFIX'];
  $insertsql.=",H323_LINE31_GKADDR";
  $insertsql2.="','".$values['H323_LINE31_GKADDR'];
  $insertsql.=",H323_LINE31_VOS_ENABLE";
  $insertsql2.="','".$values['H323_LINE31_VOS_ENABLE'];
  $insertsql.=",H323_LINE31_VOS_MODE";
  $insertsql2.="','".$values['H323_LINE31_VOS_MODE'];
  $insertsql.=",H323_LINE31_AUTH";
  $insertsql2.="','".$values['H323_LINE31_AUTH'];
  $insertsql.=",H323_LINE31_H235_ID";
  $insertsql2.="','".$values['H323_LINE31_H235_ID'];
  $insertsql.=",H323_LINE31_H235_PASSWD";
  $insertsql2.="','".$values['H323_LINE31_H235_PASSWD'];
  
  $insertsql.=",H323_LINE32_NUMBER";
  $insertsql2.="','".$values['H323_LINE32_NUMBER'];
  $insertsql.=",H323_LINE32_H323_ID";
  $insertsql2.="','".$values['H323_LINE32_H323_ID'];
  $insertsql.=",H323_LINE32_GW_PREFIX";
  $insertsql2.="','".$values['H323_LINE32_GW_PREFIX'];
  $insertsql.=",H323_LINE32_GKADDR";
  $insertsql2.="','".$values['H323_LINE32_GKADDR'];
  $insertsql.=",H323_LINE32_VOS_ENABLE";
  $insertsql2.="','".$values['H323_LINE32_VOS_ENABLE'];
  $insertsql.=",H323_LINE32_VOS_MODE";
  $insertsql2.="','".$values['H323_LINE32_VOS_MODE'];
  $insertsql.=",H323_LINE32_AUTH";
  $insertsql2.="','".$values['H323_LINE32_AUTH'];
  $insertsql.=",H323_LINE32_H235_ID";
  $insertsql2.="','".$values['H323_LINE32_H235_ID'];
  $insertsql.=",H323_LINE32_H235_PASSWD";
  $insertsql2.="','".$values['H323_LINE32_H235_PASSWD'];
  
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
  $insertsql.=",H323_L17_IN_G1";
  $insertsql2.="','".$values['H323_L17_IN_G1'];
  $insertsql.=",H323_L18_IN_G1";
  $insertsql2.="','".$values['H323_L18_IN_G1'];
  $insertsql.=",H323_L19_IN_G1";
  $insertsql2.="','".$values['H323_L19_IN_G1'];
  $insertsql.=",H323_L20_IN_G1";
  $insertsql2.="','".$values['H323_L20_IN_G1'];
  $insertsql.=",H323_L21_IN_G1";
  $insertsql2.="','".$values['H323_L21_IN_G1'];
  $insertsql.=",H323_L22_IN_G1";
  $insertsql2.="','".$values['H323_L22_IN_G1'];
  $insertsql.=",H323_L23_IN_G1";
  $insertsql2.="','".$values['H323_L23_IN_G1'];
  $insertsql.=",H323_L24_IN_G1";
  $insertsql2.="','".$values['H323_L24_IN_G1'];
  $insertsql.=",H323_L25_IN_G1";
  $insertsql2.="','".$values['H323_L25_IN_G1'];
  $insertsql.=",H323_L26_IN_G1";
  $insertsql2.="','".$values['H323_L26_IN_G1'];
  $insertsql.=",H323_L27_IN_G1";
  $insertsql2.="','".$values['H323_L27_IN_G1'];
  $insertsql.=",H323_L28_IN_G1";
  $insertsql2.="','".$values['H323_L28_IN_G1'];
  $insertsql.=",H323_L29_IN_G1";
  $insertsql2.="','".$values['H323_L29_IN_G1'];
  $insertsql.=",H323_L30_IN_G1";
  $insertsql2.="','".$values['H323_L30_IN_G1'];
  $insertsql.=",H323_L31_IN_G1";
  $insertsql2.="','".$values['H323_L31_IN_G1'];
  $insertsql.=",H323_L32_IN_G1";
  $insertsql2.="','".$values['H323_L32_IN_G1'];
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
  $insertsql.=",H323_L17_IN_G2";
  $insertsql2.="','".$values['H323_L17_IN_G2'];
  $insertsql.=",H323_L18_IN_G2";
  $insertsql2.="','".$values['H323_L18_IN_G2'];
  $insertsql.=",H323_L19_IN_G2";
  $insertsql2.="','".$values['H323_L19_IN_G2'];
  $insertsql.=",H323_L20_IN_G2";
  $insertsql2.="','".$values['H323_L20_IN_G2'];
  $insertsql.=",H323_L21_IN_G2";
  $insertsql2.="','".$values['H323_L21_IN_G2'];
  $insertsql.=",H323_L22_IN_G2";
  $insertsql2.="','".$values['H323_L22_IN_G2'];
  $insertsql.=",H323_L23_IN_G2";
  $insertsql2.="','".$values['H323_L23_IN_G2'];
  $insertsql.=",H323_L24_IN_G2";
  $insertsql2.="','".$values['H323_L24_IN_G2'];
  $insertsql.=",H323_L25_IN_G2";
  $insertsql2.="','".$values['H323_L25_IN_G2'];
  $insertsql.=",H323_L26_IN_G2";
  $insertsql2.="','".$values['H323_L26_IN_G2'];
  $insertsql.=",H323_L27_IN_G2";
  $insertsql2.="','".$values['H323_L27_IN_G2'];
  $insertsql.=",H323_L28_IN_G2";
  $insertsql2.="','".$values['H323_L28_IN_G2'];
  $insertsql.=",H323_L29_IN_G2";
  $insertsql2.="','".$values['H323_L29_IN_G2'];
  $insertsql.=",H323_L30_IN_G2";
  $insertsql2.="','".$values['H323_L30_IN_G2'];
  $insertsql.=",H323_L31_IN_G2";
  $insertsql2.="','".$values['H323_L31_IN_G2'];
  $insertsql.=",H323_L32_IN_G2";
  $insertsql2.="','".$values['H323_L32_IN_G2'];
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
  $insertsql.=",H323_L17_IN_G3";
  $insertsql2.="','".$values['H323_L17_IN_G3'];
  $insertsql.=",H323_L18_IN_G3";
  $insertsql2.="','".$values['H323_L18_IN_G3'];
  $insertsql.=",H323_L19_IN_G3";
  $insertsql2.="','".$values['H323_L19_IN_G3'];
  $insertsql.=",H323_L20_IN_G3";
  $insertsql2.="','".$values['H323_L20_IN_G3'];
  $insertsql.=",H323_L21_IN_G3";
  $insertsql2.="','".$values['H323_L21_IN_G3'];
  $insertsql.=",H323_L22_IN_G3";
  $insertsql2.="','".$values['H323_L22_IN_G3'];
  $insertsql.=",H323_L23_IN_G3";
  $insertsql2.="','".$values['H323_L23_IN_G3'];
  $insertsql.=",H323_L24_IN_G3";
  $insertsql2.="','".$values['H323_L24_IN_G3'];
  $insertsql.=",H323_L25_IN_G3";
  $insertsql2.="','".$values['H323_L25_IN_G3'];
  $insertsql.=",H323_L26_IN_G3";
  $insertsql2.="','".$values['H323_L26_IN_G3'];
  $insertsql.=",H323_L27_IN_G3";
  $insertsql2.="','".$values['H323_L27_IN_G3'];
  $insertsql.=",H323_L28_IN_G3";
  $insertsql2.="','".$values['H323_L28_IN_G3'];
  $insertsql.=",H323_L29_IN_G3";
  $insertsql2.="','".$values['H323_L29_IN_G3'];
  $insertsql.=",H323_L30_IN_G3";
  $insertsql2.="','".$values['H323_L30_IN_G3'];
  $insertsql.=",H323_L31_IN_G3";
  $insertsql2.="','".$values['H323_L31_IN_G3'];
  $insertsql.=",H323_L32_IN_G3";
  $insertsql2.="','".$values['H323_L32_IN_G3'];
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
  $insertsql.=",H323_L17_IN_G4";
  $insertsql2.="','".$values['H323_L17_IN_G4'];
  $insertsql.=",H323_L18_IN_G4";
  $insertsql2.="','".$values['H323_L18_IN_G4'];
  $insertsql.=",H323_L19_IN_G4";
  $insertsql2.="','".$values['H323_L19_IN_G4'];
  $insertsql.=",H323_L20_IN_G4";
  $insertsql2.="','".$values['H323_L20_IN_G4'];
  $insertsql.=",H323_L21_IN_G4";
  $insertsql2.="','".$values['H323_L21_IN_G4'];
  $insertsql.=",H323_L22_IN_G4";
  $insertsql2.="','".$values['H323_L22_IN_G4'];
  $insertsql.=",H323_L23_IN_G4";
  $insertsql2.="','".$values['H323_L23_IN_G4'];
  $insertsql.=",H323_L24_IN_G4";
  $insertsql2.="','".$values['H323_L24_IN_G4'];
  $insertsql.=",H323_L25_IN_G4";
  $insertsql2.="','".$values['H323_L25_IN_G4'];
  $insertsql.=",H323_L26_IN_G4";
  $insertsql2.="','".$values['H323_L26_IN_G4'];
  $insertsql.=",H323_L27_IN_G4";
  $insertsql2.="','".$values['H323_L27_IN_G4'];
  $insertsql.=",H323_L28_IN_G4";
  $insertsql2.="','".$values['H323_L28_IN_G4'];
  $insertsql.=",H323_L29_IN_G4";
  $insertsql2.="','".$values['H323_L29_IN_G4'];
  $insertsql.=",H323_L30_IN_G4";
  $insertsql2.="','".$values['H323_L30_IN_G4'];
  $insertsql.=",H323_L31_IN_G4";
  $insertsql2.="','".$values['H323_L31_IN_G4'];
  $insertsql.=",H323_L32_IN_G4";
  $insertsql2.="','".$values['H323_L32_IN_G4'];
  
  
  
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
  $insertsql.=",SIP_CONTACT22_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT22_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT22_GW_PREFIX";
  $insertsql2.="','".$values['SIP_CONTACT22_GW_PREFIX'];
  $insertsql.=",SIP_CONTACT22_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT22_PROXY'];
  $insertsql.=",SIP_CONTACT22_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT22_SERVER'];
  $insertsql.=",SIP_CONTACT22_REGISTER_EXPIRED";
  $insertsql2.="','".$values['SIP_CONTACT22_REGISTER_EXPIRED'];
  $insertsql.=",SIP_CONTACT22_OUTBOUND_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT22_OUTBOUND_PROXY'];
  $insertsql.=",SIP_CONTACT22_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT22_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT22_LOGIN";
  $insertsql2.="','".$values['SIP_CONTACT22_LOGIN'];
  $insertsql.=",SIP_CONTACT22_PASSWD";
  $insertsql2.="','".$values['SIP_CONTACT22_PASSWD']; 
  $insertsql.=",SIP_CONTACT23_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT23_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT23_GW_PREFIX";
  $insertsql2.="','".$values['SIP_CONTACT23_GW_PREFIX'];
  $insertsql.=",SIP_CONTACT23_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT23_PROXY'];
  $insertsql.=",SIP_CONTACT23_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT23_SERVER'];
  $insertsql.=",SIP_CONTACT23_REGISTER_EXPIRED";
  $insertsql2.="','".$values['SIP_CONTACT23_REGISTER_EXPIRED'];
  $insertsql.=",SIP_CONTACT23_OUTBOUND_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT23_OUTBOUND_PROXY'];
  $insertsql.=",SIP_CONTACT23_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT23_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT23_LOGIN";
  $insertsql2.="','".$values['SIP_CONTACT23_LOGIN'];
  $insertsql.=",SIP_CONTACT23_PASSWD";
  $insertsql2.="','".$values['SIP_CONTACT23_PASSWD'];
  $insertsql.=",SIP_CONTACT24_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT24_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT24_GW_PREFIX";
  $insertsql2.="','".$values['SIP_CONTACT24_GW_PREFIX'];
  $insertsql.=",SIP_CONTACT24_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT24_PROXY'];
  $insertsql.=",SIP_CONTACT24_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT24_SERVER'];
  $insertsql.=",SIP_CONTACT24_REGISTER_EXPIRED";
  $insertsql2.="','".$values['SIP_CONTACT24_REGISTER_EXPIRED'];
  $insertsql.=",SIP_CONTACT24_OUTBOUND_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT24_OUTBOUND_PROXY'];
  $insertsql.=",SIP_CONTACT24_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT24_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT24_LOGIN";
  $insertsql2.="','".$values['SIP_CONTACT24_LOGIN'];
  $insertsql.=",SIP_CONTACT24_PASSWD";
  $insertsql2.="','".$values['SIP_CONTACT24_PASSWD'];
  $insertsql.=",SIP_CONTACT25_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT25_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT25_GW_PREFIX";
  $insertsql2.="','".$values['SIP_CONTACT25_GW_PREFIX'];
  $insertsql.=",SIP_CONTACT25_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT25_PROXY'];
  $insertsql.=",SIP_CONTACT25_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT25_SERVER'];
  $insertsql.=",SIP_CONTACT25_REGISTER_EXPIRED";
  $insertsql2.="','".$values['SIP_CONTACT25_REGISTER_EXPIRED'];
  $insertsql.=",SIP_CONTACT25_OUTBOUND_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT25_OUTBOUND_PROXY'];
  $insertsql.=",SIP_CONTACT25_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT25_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT25_LOGIN";
  $insertsql2.="','".$values['SIP_CONTACT25_LOGIN'];
  $insertsql.=",SIP_CONTACT25_PASSWD";
  $insertsql2.="','".$values['SIP_CONTACT25_PASSWD']; 
  $insertsql.=",SIP_CONTACT26_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT26_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT26_GW_PREFIX";
  $insertsql2.="','".$values['SIP_CONTACT26_GW_PREFIX'];
  $insertsql.=",SIP_CONTACT26_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT26_PROXY'];
  $insertsql.=",SIP_CONTACT26_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT26_SERVER'];
  $insertsql.=",SIP_CONTACT26_REGISTER_EXPIRED";
  $insertsql2.="','".$values['SIP_CONTACT26_REGISTER_EXPIRED'];
  $insertsql.=",SIP_CONTACT26_OUTBOUND_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT26_OUTBOUND_PROXY'];
  $insertsql.=",SIP_CONTACT26_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT26_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT26_LOGIN";
  $insertsql2.="','".$values['SIP_CONTACT26_LOGIN'];
  $insertsql.=",SIP_CONTACT26_PASSWD";
  $insertsql2.="','".$values['SIP_CONTACT26_PASSWD'];
  $insertsql.=",SIP_CONTACT27_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT27_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT27_GW_PREFIX";
  $insertsql2.="','".$values['SIP_CONTACT27_GW_PREFIX'];
  $insertsql.=",SIP_CONTACT27_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT27_PROXY'];
  $insertsql.=",SIP_CONTACT27_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT27_SERVER'];
  $insertsql.=",SIP_CONTACT27_REGISTER_EXPIRED";
  $insertsql2.="','".$values['SIP_CONTACT27_REGISTER_EXPIRED'];
  $insertsql.=",SIP_CONTACT27_OUTBOUND_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT27_OUTBOUND_PROXY'];
  $insertsql.=",SIP_CONTACT27_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT27_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT27_LOGIN";
  $insertsql2.="','".$values['SIP_CONTACT27_LOGIN'];
  $insertsql.=",SIP_CONTACT27_PASSWD";
  $insertsql2.="','".$values['SIP_CONTACT27_PASSWD'];
  $insertsql.=",SIP_CONTACT28_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT28_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT28_GW_PREFIX";
  $insertsql2.="','".$values['SIP_CONTACT28_GW_PREFIX'];
  $insertsql.=",SIP_CONTACT28_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT28_PROXY'];
  $insertsql.=",SIP_CONTACT28_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT28_SERVER'];
  $insertsql.=",SIP_CONTACT28_REGISTER_EXPIRED";
  $insertsql2.="','".$values['SIP_CONTACT28_REGISTER_EXPIRED'];
  $insertsql.=",SIP_CONTACT28_OUTBOUND_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT28_OUTBOUND_PROXY'];
  $insertsql.=",SIP_CONTACT28_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT28_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT28_LOGIN";
  $insertsql2.="','".$values['SIP_CONTACT28_LOGIN'];
  $insertsql.=",SIP_CONTACT28_PASSWD";
  $insertsql2.="','".$values['SIP_CONTACT28_PASSWD'];
  $insertsql.=",SIP_CONTACT29_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT29_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT29_GW_PREFIX";
  $insertsql2.="','".$values['SIP_CONTACT29_GW_PREFIX'];
  $insertsql.=",SIP_CONTACT29_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT29_PROXY'];
  $insertsql.=",SIP_CONTACT29_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT29_SERVER'];
  $insertsql.=",SIP_CONTACT29_REGISTER_EXPIRED";
  $insertsql2.="','".$values['SIP_CONTACT29_REGISTER_EXPIRED'];
  $insertsql.=",SIP_CONTACT29_OUTBOUND_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT29_OUTBOUND_PROXY'];
  $insertsql.=",SIP_CONTACT29_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT29_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT29_LOGIN";
  $insertsql2.="','".$values['SIP_CONTACT29_LOGIN'];
  $insertsql.=",SIP_CONTACT29_PASSWD";
  $insertsql2.="','".$values['SIP_CONTACT29_PASSWD'];
  $insertsql.=",SIP_CONTACT30_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT30_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT30_GW_PREFIX";
  $insertsql2.="','".$values['SIP_CONTACT30_GW_PREFIX'];
  $insertsql.=",SIP_CONTACT30_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT30_PROXY'];
  $insertsql.=",SIP_CONTACT30_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT30_SERVER'];
  $insertsql.=",SIP_CONTACT30_REGISTER_EXPIRED";
  $insertsql2.="','".$values['SIP_CONTACT30_REGISTER_EXPIRED'];
  $insertsql.=",SIP_CONTACT30_OUTBOUND_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT30_OUTBOUND_PROXY'];
  $insertsql.=",SIP_CONTACT30_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT30_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT30_LOGIN";
  $insertsql2.="','".$values['SIP_CONTACT30_LOGIN'];
  $insertsql.=",SIP_CONTACT30_PASSWD";
  $insertsql2.="','".$values['SIP_CONTACT30_PASSWD'];
  $insertsql.=",SIP_CONTACT31_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT31_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT31_GW_PREFIX";
  $insertsql2.="','".$values['SIP_CONTACT31_GW_PREFIX'];
  $insertsql.=",SIP_CONTACT31_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT31_PROXY'];
  $insertsql.=",SIP_CONTACT31_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT31_SERVER'];
  $insertsql.=",SIP_CONTACT31_REGISTER_EXPIRED";
  $insertsql2.="','".$values['SIP_CONTACT31_REGISTER_EXPIRED'];
  $insertsql.=",SIP_CONTACT31_OUTBOUND_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT31_OUTBOUND_PROXY'];
  $insertsql.=",SIP_CONTACT31_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT31_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT31_LOGIN";
  $insertsql2.="','".$values['SIP_CONTACT31_LOGIN'];
  $insertsql.=",SIP_CONTACT31_PASSWD";
  $insertsql2.="','".$values['SIP_CONTACT31_PASSWD'];
  $insertsql.=",SIP_CONTACT32_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT32_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT32_GW_PREFIX";
  $insertsql2.="','".$values['SIP_CONTACT32_GW_PREFIX'];
  $insertsql.=",SIP_CONTACT32_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT32_PROXY'];
  $insertsql.=",SIP_CONTACT32_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT32_SERVER'];
  $insertsql.=",SIP_CONTACT32_REGISTER_EXPIRED";
  $insertsql2.="','".$values['SIP_CONTACT32_REGISTER_EXPIRED'];
  $insertsql.=",SIP_CONTACT32_OUTBOUND_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT32_OUTBOUND_PROXY'];
  $insertsql.=",SIP_CONTACT32_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT32_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT32_LOGIN";
  $insertsql2.="','".$values['SIP_CONTACT32_LOGIN'];
  $insertsql.=",SIP_CONTACT32_PASSWD";
  $insertsql2.="','".$values['SIP_CONTACT32_PASSWD'];
  $insertsql.=",SIP_CONTACT33_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT33_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT33_GW_PREFIX";
  $insertsql2.="','".$values['SIP_CONTACT33_GW_PREFIX'];
  $insertsql.=",SIP_CONTACT33_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT33_PROXY'];
  $insertsql.=",SIP_CONTACT33_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT33_SERVER'];
  $insertsql.=",SIP_CONTACT33_REGISTER_EXPIRED";
  $insertsql2.="','".$values['SIP_CONTACT33_REGISTER_EXPIRED'];
  $insertsql.=",SIP_CONTACT33_OUTBOUND_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT33_OUTBOUND_PROXY'];
  $insertsql.=",SIP_CONTACT33_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT33_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT33_LOGIN";
  $insertsql2.="','".$values['SIP_CONTACT33_LOGIN'];
  $insertsql.=",SIP_CONTACT33_PASSWD";
  $insertsql2.="','".$values['SIP_CONTACT33_PASSWD'];
  $insertsql.=",SIP_CONTACT34_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT34_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT34_GW_PREFIX";
  $insertsql2.="','".$values['SIP_CONTACT34_GW_PREFIX'];
  $insertsql.=",SIP_CONTACT34_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT34_PROXY'];
  $insertsql.=",SIP_CONTACT34_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT34_SERVER'];
  $insertsql.=",SIP_CONTACT34_REGISTER_EXPIRED";
  $insertsql2.="','".$values['SIP_CONTACT34_REGISTER_EXPIRED'];
  $insertsql.=",SIP_CONTACT34_OUTBOUND_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT34_OUTBOUND_PROXY'];
  $insertsql.=",SIP_CONTACT34_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT34_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT34_LOGIN";
  $insertsql2.="','".$values['SIP_CONTACT34_LOGIN'];
  $insertsql.=",SIP_CONTACT34_PASSWD";
  $insertsql2.="','".$values['SIP_CONTACT34_PASSWD']; 
  $insertsql.=",SIP_CONTACT35_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT35_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT35_GW_PREFIX";
  $insertsql2.="','".$values['SIP_CONTACT35_GW_PREFIX'];
  $insertsql.=",SIP_CONTACT35_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT35_PROXY'];
  $insertsql.=",SIP_CONTACT35_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT35_SERVER'];
  $insertsql.=",SIP_CONTACT35_REGISTER_EXPIRED";
  $insertsql2.="','".$values['SIP_CONTACT35_REGISTER_EXPIRED'];
  $insertsql.=",SIP_CONTACT35_OUTBOUND_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT35_OUTBOUND_PROXY'];
  $insertsql.=",SIP_CONTACT35_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT35_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT35_LOGIN";
  $insertsql2.="','".$values['SIP_CONTACT35_LOGIN'];
  $insertsql.=",SIP_CONTACT35_PASSWD";
  $insertsql2.="','".$values['SIP_CONTACT35_PASSWD'];
  $insertsql.=",SIP_CONTACT36_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT36_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT36_GW_PREFIX";
  $insertsql2.="','".$values['SIP_CONTACT36_GW_PREFIX'];
  $insertsql.=",SIP_CONTACT36_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT36_PROXY'];
  $insertsql.=",SIP_CONTACT36_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT36_SERVER'];
  $insertsql.=",SIP_CONTACT36_REGISTER_EXPIRED";
  $insertsql2.="','".$values['SIP_CONTACT36_REGISTER_EXPIRED'];
  $insertsql.=",SIP_CONTACT36_OUTBOUND_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT36_OUTBOUND_PROXY'];
  $insertsql.=",SIP_CONTACT36_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT36_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT36_LOGIN";
  $insertsql2.="','".$values['SIP_CONTACT36_LOGIN'];
  $insertsql.=",SIP_CONTACT36_PASSWD";
  $insertsql2.="','".$values['SIP_CONTACT36_PASSWD'];
  $insertsql.=",SIP_CONTACT37_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT37_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT37_GW_PREFIX";
  $insertsql2.="','".$values['SIP_CONTACT37_GW_PREFIX'];
  $insertsql.=",SIP_CONTACT37_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT37_PROXY'];
  $insertsql.=",SIP_CONTACT37_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT37_SERVER'];
  $insertsql.=",SIP_CONTACT37_REGISTER_EXPIRED";
  $insertsql2.="','".$values['SIP_CONTACT37_REGISTER_EXPIRED'];
  $insertsql.=",SIP_CONTACT37_OUTBOUND_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT37_OUTBOUND_PROXY'];
  $insertsql.=",SIP_CONTACT37_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT37_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT37_LOGIN";
  $insertsql2.="','".$values['SIP_CONTACT37_LOGIN'];
  $insertsql.=",SIP_CONTACT37_PASSWD";
  $insertsql2.="','".$values['SIP_CONTACT37_PASSWD'];
  
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


?>