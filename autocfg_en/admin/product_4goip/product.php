<?php
  $values['orderid'] = $_POST['muban_orderid'] ;
  $updatesql.=",orderid='".$values['orderid']."'";
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
endif; 
endif; 
endif; 
if($values['ENDPOINT_TYPE'] == 'SIP'):
if($values['TELPORT'] > 1): 
  $values['SIP_CONFIG_MODE'] = $_POST['sip_config_mode'] ;
  $updatesql.=",SIP_CONFIG_MODE='".$values['SIP_CONFIG_MODE']."'";
endif; 
if($values['SIP_CONFIG_MODE'] == 'SINGLE_MODE'):
  $values['SIP_PHONE_NUMBER'] = $_POST['sip_phone_number'] ;
  $updatesql.=",SIP_PHONE_NUMBER='".$values['SIP_PHONE_NUMBER']."'";
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
if($values['TELPORT'] > 1): 
endif; 
if($values['SIP_CONFIG_MODE'] == 'LINE_MODE'):
  $values['SIP_CONTACT0_DIAL_DIGITS'] = $_POST['sip_line1_number'] ;
  $updatesql.=",SIP_CONTACT0_DIAL_DIGITS='".$values['SIP_CONTACT0_DIAL_DIGITS']."'";
  $values['SIP_CONTACT0_DISPLAY_NAME'] = $_POST['sip_line1_display_name'] ;
  $updatesql.=",SIP_CONTACT0_DISPLAY_NAME='".$values['SIP_CONTACT0_DISPLAY_NAME']."'";
  $values['SIP_CONTACT0_GW_PREFIX'] = $_POST['sip_line1_gw_prefix'] ;
  $updatesql.=",SIP_CONTACT0_GW_PREFIX='".$values['SIP_CONTACT0_GW_PREFIX']."'";
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
if($values['TELPORT'] >= 2): 
endif; 
  $values['SIP_CONTACT1_DIAL_DIGITS'] = $_POST['sip_line2_number'] ;
  $updatesql.=",SIP_CONTACT1_DIAL_DIGITS='".$values['SIP_CONTACT1_DIAL_DIGITS']."'";
  $values['SIP_CONTACT1_DISPLAY_NAME'] = $_POST['sip_line2_display_name'] ;
  $updatesql.=",SIP_CONTACT1_DISPLAY_NAME='".$values['SIP_CONTACT1_DISPLAY_NAME']."'";
  $values['SIP_CONTACT1_GW_PREFIX'] = $_POST['sip_line2_gw_prefix'] ;
  $updatesql.=",SIP_CONTACT1_GW_PREFIX='".$values['SIP_CONTACT1_GW_PREFIX']."'";
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
if($values['TELPORT'] >= 3): 
endif; 
  $values['SIP_CONTACT2_DIAL_DIGITS'] = $_POST['sip_line3_number'] ;
  $updatesql.=",SIP_CONTACT2_DIAL_DIGITS='".$values['SIP_CONTACT2_DIAL_DIGITS']."'";
  $values['SIP_CONTACT2_DISPLAY_NAME'] = $_POST['sip_line3_display_name'] ;
  $updatesql.=",SIP_CONTACT2_DISPLAY_NAME='".$values['SIP_CONTACT2_DISPLAY_NAME']."'";
  $values['SIP_CONTACT2_GW_PREFIX'] = $_POST['sip_line3_gw_prefix'] ;
  $updatesql.=",SIP_CONTACT2_GW_PREFIX='".$values['SIP_CONTACT2_GW_PREFIX']."'";
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
if($values['TELPORT'] >= 4): 
endif; 
  $values['SIP_CONTACT3_DIAL_DIGITS'] = $_POST['sip_line4_number'] ;
  $updatesql.=",SIP_CONTACT3_DIAL_DIGITS='".$values['SIP_CONTACT3_DIAL_DIGITS']."'";
  $values['SIP_CONTACT3_DISPLAY_NAME'] = $_POST['sip_line4_display_name'] ;
  $updatesql.=",SIP_CONTACT3_DISPLAY_NAME='".$values['SIP_CONTACT3_DISPLAY_NAME']."'";
  $values['SIP_CONTACT3_GW_PREFIX'] = $_POST['sip_line4_gw_prefix'] ;
  $updatesql.=",SIP_CONTACT3_GW_PREFIX='".$values['SIP_CONTACT3_GW_PREFIX']."'";
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
if($values['ENDPOINT_TYPE'] == 'SIP'):
  $values['SIP_LOCAL_PORT'] = $_POST['sip_local_port'] ;
  $updatesql.=",SIP_LOCAL_PORT='".$values['SIP_LOCAL_PORT']."'";
  $values['SIP_183'] = $_POST['sip_support183']=='on'?'1':'0';
  $updatesql.=",SIP_183='".$values['SIP_183']."'";
  $values['SIP_NO_ALIVE'] = $_POST['sip_no_alive']=='on'?'0':'1';
  $updatesql.=",SIP_NO_ALIVE='".$values['SIP_NO_ALIVE']."'";
  $values['SIP_REG_MODE'] = $_POST['sip_reg_mode'] ;
  $updatesql.=",SIP_REG_MODE='".$values['SIP_REG_MODE']."'";
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

  $values['L1_DISABLE_OUT'] = $_POST['line1_fw_to_pstn']=='on'?'0':'1';
  $updatesql.=",L1_DISABLE_OUT='".$values['L1_DISABLE_OUT']."'";
if($values['L1_DISABLE_OUT'] == 0):
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
endif; 
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
if($values['L1_FW2VOIP_AUTH_MODE'] == 'PASSWD_TRUSTLIST'):
  $values['L1_FW_TO_VOIP_PASSWD'] = $_POST['l1_fw_to_voip_passwd'] ;
  $updatesql.=",L1_FW_TO_VOIP_PASSWD='".$values['L1_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 
  $values['L1_GROUP_MODE'] = $_POST['line1_gsm_group_mode'] ;
  $updatesql.=",L1_GROUP_MODE='".$values['L1_GROUP_MODE']."'";
if($values['L1_GROUP_MODE'] == 'SVR'):
  $values['L1_GSM_FW_MODE'] = $_POST['line1_gsm_fw_mode'] ;
  $updatesql.=",L1_GSM_FW_MODE='".$values['L1_GSM_FW_MODE']."'";
endif; 
if($values['L1_GROUP_MODE'] == 'CLI'):
  $values['L1_GROUP_SVR'] = $_POST['line1_group_svr_addr'] ;
  $updatesql.=",L1_GROUP_SVR='".$values['L1_GROUP_SVR']."'";
endif;
  $values['L1_GSM_NUMBER'] = $_POST['line1_gsm_num'] ;
  $updatesql.=",L1_GSM_NUMBER='".$values['L1_GSM_NUMBER']."'";
  $values['L1_CALLER_ANONYMOUS'] = $_POST['line1_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql.=",L1_CALLER_ANONYMOUS='".$values['L1_CALLER_ANONYMOUS']."'";
  $values['L1_GSM_CW_ENABLE'] = $_POST['line1_gsm_cw_enable']=='on'?'1':'0';
  $updatesql.=",L1_GSM_CW_ENABLE='".$values['L1_GSM_CW_ENABLE']."'";
if($values['TELPORT'] >= 2): 
endif; 
  $values['L2_DISABLE_OUT'] = $_POST['line2_fw_to_pstn']=='on'?'0':'1';
  $updatesql.=",L2_DISABLE_OUT='".$values['L2_DISABLE_OUT']."'";
if($values['L2_DISABLE_OUT'] == 0):
  $values['L2_FW_NUM_TO_PSTN'] = $_POST['line2_fw_num_to_pstn'] ;
  $updatesql.=",L2_FW_NUM_TO_PSTN='".$values['L2_FW_NUM_TO_PSTN']."'";
  $values['L2_P_DIGIT_MAP'] = $_POST['line2_p_dial_plan'] ;
  $updatesql.=",L2_P_DIGIT_MAP='".$values['L2_P_DIGIT_MAP']."'";
  $values['L2_FW2PSTN_AUTH_MODE'] = $_POST['line2_fw2pstn_auth_mode'] ;
  $updatesql.=",L2_FW2PSTN_AUTH_MODE='".$values['L2_FW2PSTN_AUTH_MODE']."'";
if($values['L2_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L2_FW_TO_PSTN_PASSWD'] = $_POST['line2_fw_to_pstn_passwd'] ;
  $updatesql.=",L2_FW_TO_PSTN_PASSWD='".$values['L2_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L2_FW2PSTN_AUTH_MODE'] == 'PASSWD_TRUSTLIST'):
  $values['L2_FW_TO_PSTN_PASSWD'] = $_POST['l2_fw_to_pstn_passwd'] ;
  $updatesql.=",L2_FW_TO_PSTN_PASSWD='".$values['L2_FW_TO_PSTN_PASSWD']."'";
endif; 
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
endif; 
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
if($values['L2_FW2VOIP_AUTH_MODE'] == 'PASSWD_TRUSTLIST'):
  $values['L2_FW_TO_VOIP_PASSWD'] = $_POST['l2_fw_to_voip_passwd'] ;
  $updatesql.=",L2_FW_TO_VOIP_PASSWD='".$values['L2_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 
  $values['L2_GROUP_MODE'] = $_POST['line2_gsm_group_mode'] ;
  $updatesql.=",L2_GROUP_MODE='".$values['L2_GROUP_MODE']."'";
if($values['L2_GROUP_MODE'] == 'SVR'):
  $values['L2_GSM_FW_MODE'] = $_POST['line2_gsm_fw_mode'] ;
  $updatesql.=",L2_GSM_FW_MODE='".$values['L2_GSM_FW_MODE']."'";
endif; 
if($values['L2_GROUP_MODE'] == 'CLI'):
  $values['L2_GROUP_SVR'] = $_POST['line2_group_svr_addr'] ;
  $updatesql.=",L2_GROUP_SVR='".$values['L2_GROUP_SVR']."'";
endif;
  $values['L2_GSM_NUMBER'] = $_POST['line2_gsm_num'] ;
  $updatesql.=",L2_GSM_NUMBER='".$values['L2_GSM_NUMBER']."'";
  $values['L2_CALLER_ANONYMOUS'] = $_POST['line2_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql.=",L2_CALLER_ANONYMOUS='".$values['L2_CALLER_ANONYMOUS']."'";
  $values['L2_GSM_CW_ENABLE'] = $_POST['line2_gsm_cw_enable']=='on'?'1':'0';
  $updatesql.=",L2_GSM_CW_ENABLE='".$values['L2_GSM_CW_ENABLE']."'";
if($values['TELPORT'] >= 3): 
endif; 
  $values['L3_DISABLE_OUT'] = $_POST['line3_fw_to_pstn']=='on'?'0':'1';
  $updatesql.=",L3_DISABLE_OUT='".$values['L3_DISABLE_OUT']."'";
if($values['L3_DISABLE_OUT'] == 0):
  $values['L3_FW_NUM_TO_PSTN'] = $_POST['line3_fw_num_to_pstn'] ;
  $updatesql.=",L3_FW_NUM_TO_PSTN='".$values['L3_FW_NUM_TO_PSTN']."'";
  $values['L3_P_DIGIT_MAP'] = $_POST['line3_p_dial_plan'] ;
  $updatesql.=",L3_P_DIGIT_MAP='".$values['L3_P_DIGIT_MAP']."'";
  $values['L3_FW2PSTN_AUTH_MODE'] = $_POST['line3_fw2pstn_auth_mode'] ;
  $updatesql.=",L3_FW2PSTN_AUTH_MODE='".$values['L3_FW2PSTN_AUTH_MODE']."'";
if($values['L3_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L3_FW_TO_PSTN_PASSWD'] = $_POST['line3_fw_to_pstn_passwd'] ;
  $updatesql.=",L3_FW_TO_PSTN_PASSWD='".$values['L3_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L3_FW2PSTN_AUTH_MODE'] == 'PASSWD_TRUSTLIST'):
  $values['L3_FW_TO_PSTN_PASSWD'] = $_POST['l3_fw_to_pstn_passwd'] ;
  $updatesql.=",L3_FW_TO_PSTN_PASSWD='".$values['L3_FW_TO_PSTN_PASSWD']."'";
endif; 
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
endif; 
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
if($values['L3_FW2VOIP_AUTH_MODE'] == 'PASSWD_TRUSTLIST'):
  $values['L3_FW_TO_VOIP_PASSWD'] = $_POST['l3_fw_to_voip_passwd'] ;
  $updatesql.=",L3_FW_TO_VOIP_PASSWD='".$values['L3_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 
  $values['L3_GROUP_MODE'] = $_POST['line3_gsm_group_mode'] ;
  $updatesql.=",L3_GROUP_MODE='".$values['L3_GROUP_MODE']."'";
if($values['L3_GROUP_MODE'] == 'SVR'):
  $values['L3_GSM_FW_MODE'] = $_POST['line3_gsm_fw_mode'] ;
  $updatesql.=",L3_GSM_FW_MODE='".$values['L3_GSM_FW_MODE']."'";
endif; 
if($values['L3_GROUP_MODE'] == 'CLI'):
  $values['L3_GROUP_SVR'] = $_POST['line3_group_svr_addr'] ;
  $updatesql.=",L3_GROUP_SVR='".$values['L3_GROUP_SVR']."'";
endif;
  $values['L3_GSM_NUMBER'] = $_POST['line3_gsm_num'] ;
  $updatesql.=",L3_GSM_NUMBER='".$values['L3_GSM_NUMBER']."'";
  $values['L3_CALLER_ANONYMOUS'] = $_POST['line3_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql.=",L3_CALLER_ANONYMOUS='".$values['L3_CALLER_ANONYMOUS']."'";
  $values['L3_GSM_CW_ENABLE'] = $_POST['line3_gsm_cw_enable']=='on'?'1':'0';
  $updatesql.=",L3_GSM_CW_ENABLE='".$values['L3_GSM_CW_ENABLE']."'";
if($values['TELPORT'] >= 4): 
endif; 
  $values['L4_DISABLE_OUT'] = $_POST['line4_fw_to_pstn']=='on'?'0':'1';
  $updatesql.=",L4_DISABLE_OUT='".$values['L4_DISABLE_OUT']."'";
if($values['L4_DISABLE_OUT'] == 0):
  $values['L4_FW_NUM_TO_PSTN'] = $_POST['line4_fw_num_to_pstn'] ;
  $updatesql.=",L4_FW_NUM_TO_PSTN='".$values['L4_FW_NUM_TO_PSTN']."'";
  $values['L4_P_DIGIT_MAP'] = $_POST['line4_p_dial_plan'] ;
  $updatesql.=",L4_P_DIGIT_MAP='".$values['L4_P_DIGIT_MAP']."'";
  $values['L4_FW2PSTN_AUTH_MODE'] = $_POST['line4_fw2pstn_auth_mode'] ;
  $updatesql.=",L4_FW2PSTN_AUTH_MODE='".$values['L4_FW2PSTN_AUTH_MODE']."'";
if($values['L4_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L4_FW_TO_PSTN_PASSWD'] = $_POST['line4_fw_to_pstn_passwd'] ;
  $updatesql.=",L4_FW_TO_PSTN_PASSWD='".$values['L4_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L4_FW2PSTN_AUTH_MODE'] == 'PASSWD_TRUSTLIST'):
  $values['L4_FW_TO_PSTN_PASSWD'] = $_POST['l4_fw_to_pstn_passwd'] ;
  $updatesql.=",L4_FW_TO_PSTN_PASSWD='".$values['L4_FW_TO_PSTN_PASSWD']."'";
endif; 
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
endif; 
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
if($values['L4_FW2VOIP_AUTH_MODE'] == 'PASSWD_TRUSTLIST'):
  $values['L4_FW_TO_VOIP_PASSWD'] = $_POST['l4_fw_to_voip_passwd'] ;
  $updatesql.=",L4_FW_TO_VOIP_PASSWD='".$values['L4_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 
  $values['L4_GROUP_MODE'] = $_POST['line4_gsm_group_mode'] ;
  $updatesql.=",L4_GROUP_MODE='".$values['L4_GROUP_MODE']."'";
if($values['L4_GROUP_MODE'] == 'SVR'):
  $values['L4_GSM_FW_MODE'] = $_POST['line4_gsm_fw_mode'] ;
  $updatesql.=",L4_GSM_FW_MODE='".$values['L4_GSM_FW_MODE']."'";
endif; 
if($values['L4_GROUP_MODE'] == 'CLI'):
  $values['L4_GROUP_SVR'] = $_POST['line4_group_svr_addr'] ;
  $updatesql.=",L4_GROUP_SVR='".$values['L4_GROUP_SVR']."'";
endif;
  $values['L4_GSM_NUMBER'] = $_POST['line4_gsm_num'] ;
  $updatesql.=",L4_GSM_NUMBER='".$values['L4_GSM_NUMBER']."'";
  $values['L4_CALLER_ANONYMOUS'] = $_POST['line4_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql.=",L4_CALLER_ANONYMOUS='".$values['L4_CALLER_ANONYMOUS']."'";
  $values['L4_GSM_CW_ENABLE'] = $_POST['line4_gsm_cw_enable']=='on'?'1':'0';
  $updatesql.=",L4_GSM_CW_ENABLE='".$values['L4_GSM_CW_ENABLE']."'";
if($values['TELPORT'] >= 5): 
endif; 
  $values['L5_DISABLE_OUT'] = $_POST['line5_fw_to_pstn']=='on'?'0':'1';
  $updatesql.=",L5_DISABLE_OUT='".$values['L5_DISABLE_OUT']."'";
if($values['L5_DISABLE_OUT'] == 0):
  $values['L5_FW_NUM_TO_PSTN'] = $_POST['line5_fw_num_to_pstn'] ;
  $updatesql.=",L5_FW_NUM_TO_PSTN='".$values['L5_FW_NUM_TO_PSTN']."'";
  $values['L5_P_DIGIT_MAP'] = $_POST['line5_p_dial_plan'] ;
  $updatesql.=",L5_P_DIGIT_MAP='".$values['L5_P_DIGIT_MAP']."'";
  $values['L5_FW2PSTN_AUTH_MODE'] = $_POST['line5_fw2pstn_auth_mode'] ;
  $updatesql.=",L5_FW2PSTN_AUTH_MODE='".$values['L5_FW2PSTN_AUTH_MODE']."'";
if($values['L5_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L5_FW_TO_PSTN_PASSWD'] = $_POST['line4_fw_to_pstn_passwd'] ;
  $updatesql.=",L5_FW_TO_PSTN_PASSWD='".$values['L5_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L5_FW2PSTN_AUTH_MODE'] == 'PASSWD_TRUSTLIST'):
  $values['L5_FW_TO_PSTN_PASSWD'] = $_POST['l5_fw_to_pstn_passwd'] ;
  $updatesql.=",L5_FW_TO_PSTN_PASSWD='".$values['L5_FW_TO_PSTN_PASSWD']."'";
endif; 
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
endif; 
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
if($values['L5_FW2VOIP_AUTH_MODE'] == 'PASSWD_TRUSTLIST'):
  $values['L5_FW_TO_VOIP_PASSWD'] = $_POST['l5_fw_to_voip_passwd'] ;
  $updatesql.=",L5_FW_TO_VOIP_PASSWD='".$values['L5_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 
  $values['L5_GROUP_MODE'] = $_POST['line5_gsm_group_mode'] ;
  $updatesql.=",L5_GROUP_MODE='".$values['L5_GROUP_MODE']."'";
if($values['L5_GROUP_MODE'] == 'SVR'):
  $values['L5_GSM_FW_MODE'] = $_POST['line5_gsm_fw_mode'] ;
  $updatesql.=",L5_GSM_FW_MODE='".$values['L5_GSM_FW_MODE']."'";
endif; 
if($values['L5_GROUP_MODE'] == 'CLI'):
  $values['L5_GROUP_SVR'] = $_POST['line5_group_svr_addr'] ;
  $updatesql.=",L5_GROUP_SVR='".$values['L5_GROUP_SVR']."'";
endif;
  $values['L5_GSM_NUMBER'] = $_POST['line5_gsm_num'] ;
  $updatesql.=",L5_GSM_NUMBER='".$values['L5_GSM_NUMBER']."'";
  $values['L5_CALLER_ANONYMOUS'] = $_POST['line5_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql.=",L5_CALLER_ANONYMOUS='".$values['L5_CALLER_ANONYMOUS']."'";
  $values['L5_GSM_CW_ENABLE'] = $_POST['line5_gsm_cw_enable']=='on'?'1':'0';
  $updatesql.=",L5_GSM_CW_ENABLE='".$values['L5_GSM_CW_ENABLE']."'";
if($values['TELPORT'] >= 6): 
endif; 
  $values['L6_DISABLE_OUT'] = $_POST['line6_fw_to_pstn']=='on'?'0':'1';
  $updatesql.=",L6_DISABLE_OUT='".$values['L6_DISABLE_OUT']."'";
if($values['L6_DISABLE_OUT'] == 0):
  $values['L6_FW_NUM_TO_PSTN'] = $_POST['line6_fw_num_to_pstn'] ;
  $updatesql.=",L6_FW_NUM_TO_PSTN='".$values['L6_FW_NUM_TO_PSTN']."'";
  $values['L6_P_DIGIT_MAP'] = $_POST['line6_p_dial_plan'] ;
  $updatesql.=",L6_P_DIGIT_MAP='".$values['L6_P_DIGIT_MAP']."'";
  $values['L6_FW2PSTN_AUTH_MODE'] = $_POST['line6_fw2pstn_auth_mode'] ;
  $updatesql.=",L6_FW2PSTN_AUTH_MODE='".$values['L6_FW2PSTN_AUTH_MODE']."'";
if($values['L6_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L6_FW_TO_PSTN_PASSWD'] = $_POST['line4_fw_to_pstn_passwd'] ;
  $updatesql.=",L6_FW_TO_PSTN_PASSWD='".$values['L6_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L6_FW2PSTN_AUTH_MODE'] == 'PASSWD_TRUSTLIST'):
  $values['L6_FW_TO_PSTN_PASSWD'] = $_POST['l6_fw_to_pstn_passwd'] ;
  $updatesql.=",L6_FW_TO_PSTN_PASSWD='".$values['L6_FW_TO_PSTN_PASSWD']."'";
endif; 
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
endif; 
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
if($values['L6_FW2VOIP_AUTH_MODE'] == 'PASSWD_TRUSTLIST'):
  $values['L6_FW_TO_VOIP_PASSWD'] = $_POST['l6_fw_to_voip_passwd'] ;
  $updatesql.=",L6_FW_TO_VOIP_PASSWD='".$values['L6_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 
  $values['L6_GROUP_MODE'] = $_POST['line6_gsm_group_mode'] ;
  $updatesql.=",L6_GROUP_MODE='".$values['L6_GROUP_MODE']."'";
if($values['L6_GROUP_MODE'] == 'SVR'):
  $values['L6_GSM_FW_MODE'] = $_POST['line6_gsm_fw_mode'] ;
  $updatesql.=",L6_GSM_FW_MODE='".$values['L6_GSM_FW_MODE']."'";
endif; 
if($values['L6_GROUP_MODE'] == 'CLI'):
  $values['L6_GROUP_SVR'] = $_POST['line6_group_svr_addr'] ;
  $updatesql.=",L6_GROUP_SVR='".$values['L6_GROUP_SVR']."'";
endif;
  $values['L6_GSM_NUMBER'] = $_POST['line6_gsm_num'] ;
  $updatesql.=",L6_GSM_NUMBER='".$values['L6_GSM_NUMBER']."'";
  $values['L6_CALLER_ANONYMOUS'] = $_POST['line6_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql.=",L6_CALLER_ANONYMOUS='".$values['L6_CALLER_ANONYMOUS']."'";
  $values['L6_GSM_CW_ENABLE'] = $_POST['line6_gsm_cw_enable']=='on'?'1':'0';
  $updatesql.=",L6_GSM_CW_ENABLE='".$values['L6_GSM_CW_ENABLE']."'";
if($values['TELPORT'] >= 7): 
endif; 
  $values['L7_DISABLE_OUT'] = $_POST['line7_fw_to_pstn']=='on'?'0':'1';
  $updatesql.=",L7_DISABLE_OUT='".$values['L7_DISABLE_OUT']."'";
if($values['L7_DISABLE_OUT'] == 0):
  $values['L7_FW_NUM_TO_PSTN'] = $_POST['line7_fw_num_to_pstn'] ;
  $updatesql.=",L7_FW_NUM_TO_PSTN='".$values['L7_FW_NUM_TO_PSTN']."'";
  $values['L7_P_DIGIT_MAP'] = $_POST['line7_p_dial_plan'] ;
  $updatesql.=",L7_P_DIGIT_MAP='".$values['L7_P_DIGIT_MAP']."'";
  $values['L7_FW2PSTN_AUTH_MODE'] = $_POST['line7_fw2pstn_auth_mode'] ;
  $updatesql.=",L7_FW2PSTN_AUTH_MODE='".$values['L7_FW2PSTN_AUTH_MODE']."'";
if($values['L7_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L7_FW_TO_PSTN_PASSWD'] = $_POST['line4_fw_to_pstn_passwd'] ;
  $updatesql.=",L7_FW_TO_PSTN_PASSWD='".$values['L7_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L7_FW2PSTN_AUTH_MODE'] == 'PASSWD_TRUSTLIST'):
  $values['L7_FW_TO_PSTN_PASSWD'] = $_POST['l7_fw_to_pstn_passwd'] ;
  $updatesql.=",L7_FW_TO_PSTN_PASSWD='".$values['L7_FW_TO_PSTN_PASSWD']."'";
endif; 
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
endif; 
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
if($values['L7_FW2VOIP_AUTH_MODE'] == 'PASSWD_TRUSTLIST'):
  $values['L7_FW_TO_VOIP_PASSWD'] = $_POST['l7_fw_to_voip_passwd'] ;
  $updatesql.=",L7_FW_TO_VOIP_PASSWD='".$values['L7_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 
  $values['L7_GROUP_MODE'] = $_POST['line7_gsm_group_mode'] ;
  $updatesql.=",L7_GROUP_MODE='".$values['L7_GROUP_MODE']."'";
if($values['L7_GROUP_MODE'] == 'SVR'):
  $values['L7_GSM_FW_MODE'] = $_POST['line7_gsm_fw_mode'] ;
  $updatesql.=",L7_GSM_FW_MODE='".$values['L7_GSM_FW_MODE']."'";
endif; 
if($values['L7_GROUP_MODE'] == 'CLI'):
  $values['L7_GROUP_SVR'] = $_POST['line7_group_svr_addr'] ;
  $updatesql.=",L7_GROUP_SVR='".$values['L7_GROUP_SVR']."'";
endif;
  $values['L7_GSM_NUMBER'] = $_POST['line7_gsm_num'] ;
  $updatesql.=",L7_GSM_NUMBER='".$values['L7_GSM_NUMBER']."'";
  $values['L7_CALLER_ANONYMOUS'] = $_POST['line7_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql.=",L7_CALLER_ANONYMOUS='".$values['L7_CALLER_ANONYMOUS']."'";
  $values['L7_GSM_CW_ENABLE'] = $_POST['line7_gsm_cw_enable']=='on'?'1':'0';
  $updatesql.=",L7_GSM_CW_ENABLE='".$values['L7_GSM_CW_ENABLE']."'";
if($values['TELPORT'] >= 8): 
endif; 
  $values['L8_DISABLE_OUT'] = $_POST['line8_fw_to_pstn']=='on'?'0':'1';
  $updatesql.=",L8_DISABLE_OUT='".$values['L8_DISABLE_OUT']."'";
if($values['L8_DISABLE_OUT'] == 0):
  $values['L8_FW_NUM_TO_PSTN'] = $_POST['line8_fw_num_to_pstn'] ;
  $updatesql.=",L8_FW_NUM_TO_PSTN='".$values['L8_FW_NUM_TO_PSTN']."'";
  $values['L8_P_DIGIT_MAP'] = $_POST['line8_p_dial_plan'] ;
  $updatesql.=",L8_P_DIGIT_MAP='".$values['L8_P_DIGIT_MAP']."'";
  $values['L8_FW2PSTN_AUTH_MODE'] = $_POST['line8_fw2pstn_auth_mode'] ;
  $updatesql.=",L8_FW2PSTN_AUTH_MODE='".$values['L8_FW2PSTN_AUTH_MODE']."'";
if($values['L8_FW2PSTN_AUTH_MODE'] == 'PASSWD'):
  $values['L8_FW_TO_PSTN_PASSWD'] = $_POST['line4_fw_to_pstn_passwd'] ;
  $updatesql.=",L8_FW_TO_PSTN_PASSWD='".$values['L8_FW_TO_PSTN_PASSWD']."'";
endif; 
if($values['L8_FW2PSTN_AUTH_MODE'] == 'PASSWD_TRUSTLIST'):
  $values['L8_FW_TO_PSTN_PASSWD'] = $_POST['l8_fw_to_pstn_passwd'] ;
  $updatesql.=",L8_FW_TO_PSTN_PASSWD='".$values['L8_FW_TO_PSTN_PASSWD']."'";
endif; 
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
endif; 
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
if($values['L8_FW2VOIP_AUTH_MODE'] == 'PASSWD_TRUSTLIST'):
  $values['L8_FW_TO_VOIP_PASSWD'] = $_POST['l8_fw_to_voip_passwd'] ;
  $updatesql.=",L8_FW_TO_VOIP_PASSWD='".$values['L8_FW_TO_VOIP_PASSWD']."'";
endif; 
endif; 
  $values['L8_GROUP_MODE'] = $_POST['line8_gsm_group_mode'] ;
  $updatesql.=",L8_GROUP_MODE='".$values['L8_GROUP_MODE']."'";
if($values['L8_GROUP_MODE'] == 'SVR'):
  $values['L8_GSM_FW_MODE'] = $_POST['line8_gsm_fw_mode'] ;
  $updatesql.=",L8_GSM_FW_MODE='".$values['L8_GSM_FW_MODE']."'";
endif; 
if($values['L8_GROUP_MODE'] == 'CLI'):
  $values['L8_GROUP_SVR'] = $_POST['line8_group_svr_addr'] ;
  $updatesql.=",L8_GROUP_SVR='".$values['L8_GROUP_SVR']."'";
endif;
  $values['L8_GSM_NUMBER'] = $_POST['line8_gsm_num'] ;
  $updatesql.=",L8_GSM_NUMBER='".$values['L8_GSM_NUMBER']."'";
  $values['L8_CALLER_ANONYMOUS'] = $_POST['line8_gsm_caller_anonymous']=='on'?'1':'0';
  $updatesql.=",L8_CALLER_ANONYMOUS='".$values['L8_CALLER_ANONYMOUS']."'";
  $values['L8_GSM_CW_ENABLE'] = $_POST['line8_gsm_cw_enable']=='on'?'1':'0';
  $updatesql.=",L8_GSM_CW_ENABLE='".$values['L8_GSM_CW_ENABLE']."'";
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

  $values['L1_GSM_CF_UNCND_ENABLE'] = $_POST['line1_gsm_cf_uncnd_enable']=='on'?'1':'0';
  $updatesql.=",L1_GSM_CF_UNCND_ENABLE='".$values['L1_GSM_CF_UNCND_ENABLE']."'";
if($values['L1_GSM_CF_UNCND_ENABLE'] == 1):
  $values['L1_GSM_CF_UNCND_NUM'] = $_POST['line1_gsm_cf_uncnd_num'] ;
  $updatesql.=",L1_GSM_CF_UNCND_NUM='".$values['L1_GSM_CF_UNCND_NUM']."'";
endif; 
  $values['L1_GSM_CF_BUSY_ENABLE'] = $_POST['line1_gsm_cf_busy_enable']=='on'?'1':'0';
  $updatesql.=",L1_GSM_CF_BUSY_ENABLE='".$values['L1_GSM_CF_BUSY_ENABLE']."'";
if($values['L1_GSM_CF_BUSY_ENABLE'] == 1):
  $values['L1_GSM_CF_BUSY_NUM'] = $_POST['line1_gsm_cf_busy_num'] ;
  $updatesql.=",L1_GSM_CF_BUSY_NUM='".$values['L1_GSM_CF_BUSY_NUM']."'";
endif; 
  $values['L1_GSM_CF_NOREPLY_ENABLE'] = $_POST['line1_gsm_cf_noreply_enable']=='on'?'1':'0';
  $updatesql.=",L1_GSM_CF_NOREPLY_ENABLE='".$values['L1_GSM_CF_NOREPLY_ENABLE']."'";
if($values['L1_GSM_CF_NOREPLY_ENABLE'] == 1):
  $values['L1_GSM_CF_NOREPLY_NUM'] = $_POST['line1_gsm_cf_noreply_num'] ;
  $updatesql.=",L1_GSM_CF_NOREPLY_NUM='".$values['L1_GSM_CF_NOREPLY_NUM']."'";
endif; 
  $values['L1_GSM_CF_NOTREACHABLE_ENABLE'] = $_POST['line1_gsm_cf_notreachable_enable']=='on'?'1':'0';
  $updatesql.=",L1_GSM_CF_NOTREACHABLE_ENABLE='".$values['L1_GSM_CF_NOTREACHABLE_ENABLE']."'";
if($values['L1_GSM_CF_NOTREACHABLE_ENABLE'] == 1):
  $values['L1_GSM_CF_NOTREACHABLE_NUM'] = $_POST['line1_gsm_cf_notreachable_num'] ;
  $updatesql.=",L1_GSM_CF_NOTREACHABLE_NUM='".$values['L1_GSM_CF_NOTREACHABLE_NUM']."'";
endif; 

  $values['L2_GSM_CF_UNCND_ENABLE'] = $_POST['line2_gsm_cf_uncnd_enable']=='on'?'1':'0';
  $updatesql.=",L2_GSM_CF_UNCND_ENABLE='".$values['L2_GSM_CF_UNCND_ENABLE']."'";
if($values['L2_GSM_CF_UNCND_ENABLE'] == 1):
  $values['L2_GSM_CF_UNCND_NUM'] = $_POST['line2_gsm_cf_uncnd_num'] ;
  $updatesql.=",L2_GSM_CF_UNCND_NUM='".$values['L2_GSM_CF_UNCND_NUM']."'";
endif;
  $values['L2_GSM_CF_BUSY_ENABLE'] = $_POST['line2_gsm_cf_busy_enable']=='on'?'1':'0';
  $updatesql.=",L2_GSM_CF_BUSY_ENABLE='".$values['L2_GSM_CF_BUSY_ENABLE']."'";
if($values['L2_GSM_CF_BUSY_ENABLE'] == 1):
  $values['L2_GSM_CF_BUSY_NUM'] = $_POST['line2_gsm_cf_busy_num'] ;
  $updatesql.=",L2_GSM_CF_BUSY_NUM='".$values['L2_GSM_CF_BUSY_NUM']."'";
endif; 
  $values['L2_GSM_CF_NOREPLY_ENABLE'] = $_POST['line2_gsm_cf_noreply_enable']=='on'?'1':'0';
  $updatesql.=",L2_GSM_CF_NOREPLY_ENABLE='".$values['L2_GSM_CF_NOREPLY_ENABLE']."'";
if($values['L2_GSM_CF_NOREPLY_ENABLE'] == 1):
  $values['L2_GSM_CF_NOREPLY_NUM'] = $_POST['line2_gsm_cf_noreply_num'] ;
  $updatesql.=",L2_GSM_CF_NOREPLY_NUM='".$values['L2_GSM_CF_NOREPLY_NUM']."'";
endif; 
  $values['L2_GSM_CF_NOTREACHABLE_ENABLE'] = $_POST['line2_gsm_cf_notreachable_enable']=='on'?'1':'0';
  $updatesql.=",L2_GSM_CF_NOTREACHABLE_ENABLE='".$values['L2_GSM_CF_NOTREACHABLE_ENABLE']."'";
if($values['L2_GSM_CF_NOTREACHABLE_ENABLE'] == 1):
  $values['L2_GSM_CF_NOTREACHABLE_NUM'] = $_POST['line2_gsm_cf_notreachable_num'] ;
  $updatesql.=",L2_GSM_CF_NOTREACHABLE_NUM='".$values['L2_GSM_CF_NOTREACHABLE_NUM']."'";
endif; 

  $values['L3_GSM_CF_UNCND_ENABLE'] = $_POST['line3_gsm_cf_uncnd_enable']=='on'?'1':'0';
  $updatesql.=",L3_GSM_CF_UNCND_ENABLE='".$values['L3_GSM_CF_UNCND_ENABLE']."'";
if($values['L3_GSM_CF_UNCND_ENABLE'] == 1):
  $values['L3_GSM_CF_UNCND_NUM'] = $_POST['line3_gsm_cf_uncnd_num'] ;
  $updatesql.=",L3_GSM_CF_UNCND_NUM='".$values['L3_GSM_CF_UNCND_NUM']."'";
endif;
  $values['L3_GSM_CF_BUSY_ENABLE'] = $_POST['line3_gsm_cf_busy_enable']=='on'?'1':'0';
  $updatesql.=",L3_GSM_CF_BUSY_ENABLE='".$values['L3_GSM_CF_BUSY_ENABLE']."'";
if($values['L3_GSM_CF_BUSY_ENABLE'] == 1):
  $values['L3_GSM_CF_BUSY_NUM'] = $_POST['line3_gsm_cf_busy_num'] ;
  $updatesql.=",L3_GSM_CF_BUSY_NUM='".$values['L3_GSM_CF_BUSY_NUM']."'";
endif;
  $values['L3_GSM_CF_NOREPLY_ENABLE'] = $_POST['line3_gsm_cf_noreply_enable']=='on'?'1':'0';
  $updatesql.=",L3_GSM_CF_NOREPLY_ENABLE='".$values['L3_GSM_CF_NOREPLY_ENABLE']."'";
if($values['L3_GSM_CF_NOREPLY_ENABLE'] == 1):
  $values['L3_GSM_CF_NOREPLY_NUM'] = $_POST['line3_gsm_cf_noreply_num'] ;
  $updatesql.=",L3_GSM_CF_NOREPLY_NUM='".$values['L3_GSM_CF_NOREPLY_NUM']."'";
endif;
  $values['L3_GSM_CF_NOTREACHABLE_ENABLE'] = $_POST['line3_gsm_cf_notreachable_enable']=='on'?'1':'0';
  $updatesql.=",L3_GSM_CF_NOTREACHABLE_ENABLE='".$values['L3_GSM_CF_NOTREACHABLE_ENABLE']."'";
if($values['L3_GSM_CF_NOTREACHABLE_ENABLE'] == 1):
  $values['L3_GSM_CF_NOTREACHABLE_NUM'] = $_POST['line3_gsm_cf_notreachable_num'] ;
  $updatesql.=",L3_GSM_CF_NOTREACHABLE_NUM='".$values['L3_GSM_CF_NOTREACHABLE_NUM']."'";
endif;


  $values['L4_GSM_CF_UNCND_ENABLE'] = $_POST['line4_gsm_cf_uncnd_enable']=='on'?'1':'0';
  $updatesql.=",L4_GSM_CF_UNCND_ENABLE='".$values['L4_GSM_CF_UNCND_ENABLE']."'";
if($values['L4_GSM_CF_UNCND_ENABLE'] == 1):
  $values['L4_GSM_CF_UNCND_NUM'] = $_POST['line4_gsm_cf_uncnd_num'] ;
  $updatesql.=",L4_GSM_CF_UNCND_NUM='".$values['L4_GSM_CF_UNCND_NUM']."'";
endif;
  $values['L4_GSM_CF_BUSY_ENABLE'] = $_POST['line4_gsm_cf_busy_enable']=='on'?'1':'0';
  $updatesql.=",L4_GSM_CF_BUSY_ENABLE='".$values['L4_GSM_CF_BUSY_ENABLE']."'";
if($values['L4_GSM_CF_BUSY_ENABLE'] == 1):
  $values['L4_GSM_CF_BUSY_NUM'] = $_POST['line4_gsm_cf_busy_num'] ;
  $updatesql.=",L4_GSM_CF_BUSY_NUM='".$values['L4_GSM_CF_BUSY_NUM']."'";
endif; 
  $values['L4_GSM_CF_NOREPLY_ENABLE'] = $_POST['line4_gsm_cf_noreply_enable']=='on'?'1':'0';
  $updatesql.=",L4_GSM_CF_NOREPLY_ENABLE='".$values['L4_GSM_CF_NOREPLY_ENABLE']."'";
if($values['L4_GSM_CF_NOREPLY_ENABLE'] == 1):
  $values['L4_GSM_CF_NOREPLY_NUM'] = $_POST['line4_gsm_cf_noreply_num'] ;
  $updatesql.=",L4_GSM_CF_NOREPLY_NUM='".$values['L4_GSM_CF_NOREPLY_NUM']."'";
endif; 
  $values['L4_GSM_CF_NOTREACHABLE_ENABLE'] = $_POST['line4_gsm_cf_notreachable_enable']=='on'?'1':'0';
  $updatesql.=",L4_GSM_CF_NOTREACHABLE_ENABLE='".$values['L4_GSM_CF_NOTREACHABLE_ENABLE']."'";
if($values['L4_GSM_CF_NOTREACHABLE_ENABLE'] == 1):
  $values['L4_GSM_CF_NOTREACHABLE_NUM'] = $_POST['line4_gsm_cf_notreachable_num'] ;
  $updatesql.=",L4_GSM_CF_NOTREACHABLE_NUM='".$values['L4_GSM_CF_NOTREACHABLE_NUM']."'";
endif; 

  $values['L1_SIM_EXP'] = $_POST['line1_sim_exp'] ;
  $updatesql.=",L1_SIM_EXP='".$values['L1_SIM_EXP']."'";
  $values['L1_SIM_EXP_UNIT'] = $_POST['line1_sim_exp_unit'] ;
  $updatesql.=",L1_SIM_EXP_UNIT='".$values['L1_SIM_EXP_UNIT']."'";
  $values['L1_SIM_ID'] = $_POST['line1_sim_id'] ;
  $updatesql.=",L1_SIM_ID='".$values['L1_SIM_ID']."'";
  $values['L1_SIM_STRP_NUM'] = $_POST['line1_sim_strp_num'] ;
  $updatesql.=",L1_SIM_STRP_NUM='".$values['L1_SIM_STRP_NUM']."'";
  $values['L1_SIM_STRP_TIME'] = $_POST['line1_sim_strp_time'] ;
  $updatesql.=",L1_SIM_STRP_TIME='".$values['L1_SIM_STRP_TIME']."'";
  $values['L1_SIM_CALL_LIMIT'] = $_POST['line1_sim_call_limit'] ;
  $updatesql.=",L1_SIM_CALL_LIMIT='".$values['L1_SIM_CALL_LIMIT']."'";

  $values['L2_SIM_EXP'] = $_POST['line2_sim_exp'] ;
  $updatesql.=",L2_SIM_EXP='".$values['L2_SIM_EXP']."'";
  $values['L2_SIM_EXP_UNIT'] = $_POST['line2_sim_exp_unit'] ;
  $updatesql.=",L2_SIM_EXP_UNIT='".$values['L2_SIM_EXP_UNIT']."'";
  $values['L2_SIM_ID'] = $_POST['line2_sim_id'] ;
  $updatesql.=",L2_SIM_ID='".$values['L2_SIM_ID']."'";
  $values['L2_SIM_STRP_NUM'] = $_POST['line2_sim_strp_num'] ;
  $updatesql.=",L2_SIM_STRP_NUM='".$values['L2_SIM_STRP_NUM']."'";
  $values['L2_SIM_STRP_TIME'] = $_POST['line2_sim_strp_time'] ;
  $updatesql.=",L2_SIM_STRP_TIME='".$values['L2_SIM_STRP_TIME']."'";
  $values['L2_SIM_CALL_LIMIT'] = $_POST['line2_sim_call_limit'] ;
  $updatesql.=",L2_SIM_CALL_LIMIT='".$values['L2_SIM_CALL_LIMIT']."'";

  $values['L3_SIM_EXP'] = $_POST['line3_sim_exp'] ;
  $updatesql.=",L3_SIM_EXP='".$values['L3_SIM_EXP']."'";
  $values['L3_SIM_EXP_UNIT'] = $_POST['line3_sim_exp_unit'] ;
  $updatesql.=",L3_SIM_EXP_UNIT='".$values['L3_SIM_EXP_UNIT']."'";
  $values['L3_SIM_ID'] = $_POST['line3_sim_id'] ;
  $updatesql.=",L3_SIM_ID='".$values['L3_SIM_ID']."'";
  $values['L3_SIM_STRP_NUM'] = $_POST['line3_sim_strp_num'] ;
  $updatesql.=",L3_SIM_STRP_NUM='".$values['L3_SIM_STRP_NUM']."'";
  $values['L3_SIM_STRP_TIME'] = $_POST['line3_sim_strp_time'] ;
  $updatesql.=",L3_SIM_STRP_TIME='".$values['L3_SIM_STRP_TIME']."'";
  $values['L3_SIM_CALL_LIMIT'] = $_POST['line3_sim_call_limit'] ;
  $updatesql.=",L3_SIM_CALL_LIMIT='".$values['L3_SIM_CALL_LIMIT']."'";

  $values['L4_SIM_EXP'] = $_POST['line4_sim_exp'] ;
  $updatesql.=",L4_SIM_EXP='".$values['L4_SIM_EXP']."'";
  $values['L4_SIM_EXP_UNIT'] = $_POST['line4_sim_exp_unit'] ;
  $updatesql.=",L4_SIM_EXP_UNIT='".$values['L4_SIM_EXP_UNIT']."'";
  $values['L4_SIM_ID'] = $_POST['line4_sim_id'] ;
  $updatesql.=",L4_SIM_ID='".$values['L4_SIM_ID']."'";
  $values['L4_SIM_STRP_NUM'] = $_POST['line4_sim_strp_num'] ;
  $updatesql.=",L4_SIM_STRP_NUM='".$values['L4_SIM_STRP_NUM']."'";
  $values['L4_SIM_STRP_TIME'] = $_POST['line4_sim_strp_time'] ;
  $updatesql.=",L4_SIM_STRP_TIME='".$values['L4_SIM_STRP_TIME']."'";
  $values['L4_SIM_CALL_LIMIT'] = $_POST['line4_sim_call_limit'] ;
  $updatesql.=",L4_SIM_CALL_LIMIT='".$values['L4_SIM_CALL_LIMIT']."'";

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

  $values['L2_PSTN_TRUST_NUM_1'] = $_POST['l2_pstn_trust_num1'] ;
  $updatesql.=",L2_PSTN_TRUST_NUM_1='".$values['L2_PSTN_TRUST_NUM_1']."'";
  $values['L2_PSTN_TRUST_NUM_2'] = $_POST['l2_pstn_trust_num2'] ;
  $updatesql.=",L2_PSTN_TRUST_NUM_2='".$values['L2_PSTN_TRUST_NUM_2']."'";
  $values['L2_PSTN_TRUST_NUM_3'] = $_POST['l2_pstn_trust_num3'] ;
  $updatesql.=",L2_PSTN_TRUST_NUM_3='".$values['L2_PSTN_TRUST_NUM_3']."'";
  $values['L2_PSTN_TRUST_NUM_4'] = $_POST['l2_pstn_trust_num4'] ;
  $updatesql.=",L2_PSTN_TRUST_NUM_4='".$values['L2_PSTN_TRUST_NUM_4']."'";
  $values['L2_PSTN_TRUST_NUM_5'] = $_POST['l2_pstn_trust_num5'] ;
  $updatesql.=",L2_PSTN_TRUST_NUM_5='".$values['L2_PSTN_TRUST_NUM_5']."'";
  $values['L2_PSTN_TRUST_NUM_6'] = $_POST['l2_pstn_trust_num6'] ;
  $updatesql.=",L2_PSTN_TRUST_NUM_6='".$values['L2_PSTN_TRUST_NUM_6']."'";
  $values['L2_PSTN_TRUST_NUM_7'] = $_POST['l2_pstn_trust_num7'] ;
  $updatesql.=",L2_PSTN_TRUST_NUM_7='".$values['L2_PSTN_TRUST_NUM_7']."'";
  $values['L2_PSTN_TRUST_NUM_8'] = $_POST['l2_pstn_trust_num8'] ;
  $updatesql.=",L2_PSTN_TRUST_NUM_8='".$values['L2_PSTN_TRUST_NUM_8']."'";
  $values['L2_PSTN_TRUST_NUM_9'] = $_POST['l2_pstn_trust_num9'] ;
  $updatesql.=",L2_PSTN_TRUST_NUM_9='".$values['L2_PSTN_TRUST_NUM_9']."'";
  $values['L2_PSTN_TRUST_NUM_10'] = $_POST['l2_pstn_trust_num10'] ;
  $updatesql.=",L2_PSTN_TRUST_NUM_10='".$values['L2_PSTN_TRUST_NUM_10']."'";
  $values['L2_PSTN_TRUST_NUM_11'] = $_POST['l2_pstn_trust_num11'] ;
  $updatesql.=",L2_PSTN_TRUST_NUM_11='".$values['L2_PSTN_TRUST_NUM_11']."'";
  $values['L2_PSTN_TRUST_NUM_12'] = $_POST['l2_pstn_trust_num12'] ;
  $updatesql.=",L2_PSTN_TRUST_NUM_12='".$values['L2_PSTN_TRUST_NUM_12']."'";
  $values['L2_PSTN_TRUST_NUM_13'] = $_POST['l2_pstn_trust_num13'] ;
  $updatesql.=",L2_PSTN_TRUST_NUM_13='".$values['L2_PSTN_TRUST_NUM_13']."'";
  $values['L2_PSTN_TRUST_NUM_14'] = $_POST['l2_pstn_trust_num14'] ;
  $updatesql.=",L2_PSTN_TRUST_NUM_14='".$values['L2_PSTN_TRUST_NUM_14']."'";
  $values['L2_PSTN_TRUST_NUM_15'] = $_POST['l2_pstn_trust_num15'] ;
  $updatesql.=",L2_PSTN_TRUST_NUM_15='".$values['L2_PSTN_TRUST_NUM_15']."'";

  $values['L3_PSTN_TRUST_NUM_1'] = $_POST['l3_pstn_trust_num1'] ;
  $updatesql.=",L3_PSTN_TRUST_NUM_1='".$values['L3_PSTN_TRUST_NUM_1']."'";
  $values['L3_PSTN_TRUST_NUM_2'] = $_POST['l3_pstn_trust_num2'] ;
  $updatesql.=",L3_PSTN_TRUST_NUM_2='".$values['L3_PSTN_TRUST_NUM_2']."'";
  $values['L3_PSTN_TRUST_NUM_3'] = $_POST['l3_pstn_trust_num3'] ;
  $updatesql.=",L3_PSTN_TRUST_NUM_3='".$values['L3_PSTN_TRUST_NUM_3']."'";
  $values['L3_PSTN_TRUST_NUM_4'] = $_POST['l3_pstn_trust_num4'] ;
  $updatesql.=",L3_PSTN_TRUST_NUM_4='".$values['L3_PSTN_TRUST_NUM_4']."'";
  $values['L3_PSTN_TRUST_NUM_5'] = $_POST['l3_pstn_trust_num5'] ;
  $updatesql.=",L3_PSTN_TRUST_NUM_5='".$values['L3_PSTN_TRUST_NUM_5']."'";
  $values['L3_PSTN_TRUST_NUM_6'] = $_POST['l3_pstn_trust_num6'] ;
  $updatesql.=",L3_PSTN_TRUST_NUM_6='".$values['L3_PSTN_TRUST_NUM_6']."'";
  $values['L3_PSTN_TRUST_NUM_7'] = $_POST['l3_pstn_trust_num7'] ;
  $updatesql.=",L3_PSTN_TRUST_NUM_7='".$values['L3_PSTN_TRUST_NUM_7']."'";
  $values['L3_PSTN_TRUST_NUM_8'] = $_POST['l3_pstn_trust_num8'] ;
  $updatesql.=",L3_PSTN_TRUST_NUM_8='".$values['L3_PSTN_TRUST_NUM_8']."'";
  $values['L3_PSTN_TRUST_NUM_9'] = $_POST['l3_pstn_trust_num9'] ;
  $updatesql.=",L3_PSTN_TRUST_NUM_9='".$values['L3_PSTN_TRUST_NUM_9']."'";
  $values['L3_PSTN_TRUST_NUM_10'] = $_POST['l3_pstn_trust_num10'] ;
  $updatesql.=",L3_PSTN_TRUST_NUM_10='".$values['L3_PSTN_TRUST_NUM_10']."'";
  $values['L3_PSTN_TRUST_NUM_11'] = $_POST['l3_pstn_trust_num11'] ;
  $updatesql.=",L3_PSTN_TRUST_NUM_11='".$values['L3_PSTN_TRUST_NUM_11']."'";
  $values['L3_PSTN_TRUST_NUM_12'] = $_POST['l3_pstn_trust_num12'] ;
  $updatesql.=",L3_PSTN_TRUST_NUM_12='".$values['L3_PSTN_TRUST_NUM_12']."'";
  $values['L3_PSTN_TRUST_NUM_13'] = $_POST['l3_pstn_trust_num13'] ;
  $updatesql.=",L3_PSTN_TRUST_NUM_13='".$values['L3_PSTN_TRUST_NUM_13']."'";
  $values['L3_PSTN_TRUST_NUM_14'] = $_POST['l3_pstn_trust_num14'] ;
  $updatesql.=",L3_PSTN_TRUST_NUM_14='".$values['L3_PSTN_TRUST_NUM_14']."'";
  $values['L3_PSTN_TRUST_NUM_15'] = $_POST['l3_pstn_trust_num15'] ;
  $updatesql.=",L3_PSTN_TRUST_NUM_15='".$values['L3_PSTN_TRUST_NUM_15']."'";

  $values['L4_PSTN_TRUST_NUM_1'] = $_POST['l4_pstn_trust_num1'] ;
  $updatesql.=",L4_PSTN_TRUST_NUM_1='".$values['L4_PSTN_TRUST_NUM_1']."'";
  $values['L4_PSTN_TRUST_NUM_2'] = $_POST['l4_pstn_trust_num2'] ;
  $updatesql.=",L4_PSTN_TRUST_NUM_2='".$values['L4_PSTN_TRUST_NUM_2']."'";
  $values['L4_PSTN_TRUST_NUM_3'] = $_POST['l4_pstn_trust_num3'] ;
  $updatesql.=",L4_PSTN_TRUST_NUM_3='".$values['L4_PSTN_TRUST_NUM_3']."'";
  $values['L4_PSTN_TRUST_NUM_4'] = $_POST['l4_pstn_trust_num4'] ;
  $updatesql.=",L4_PSTN_TRUST_NUM_4='".$values['L4_PSTN_TRUST_NUM_4']."'";
  $values['L4_PSTN_TRUST_NUM_5'] = $_POST['l4_pstn_trust_num5'] ;
  $updatesql.=",L4_PSTN_TRUST_NUM_5='".$values['L4_PSTN_TRUST_NUM_5']."'";
  $values['L4_PSTN_TRUST_NUM_6'] = $_POST['l4_pstn_trust_num6'] ;
  $updatesql.=",L4_PSTN_TRUST_NUM_6='".$values['L4_PSTN_TRUST_NUM_6']."'";
  $values['L4_PSTN_TRUST_NUM_7'] = $_POST['l4_pstn_trust_num7'] ;
  $updatesql.=",L4_PSTN_TRUST_NUM_7='".$values['L4_PSTN_TRUST_NUM_7']."'";
  $values['L4_PSTN_TRUST_NUM_8'] = $_POST['l4_pstn_trust_num8'] ;
  $updatesql.=",L4_PSTN_TRUST_NUM_8='".$values['L4_PSTN_TRUST_NUM_8']."'";
  $values['L4_PSTN_TRUST_NUM_9'] = $_POST['l4_pstn_trust_num9'] ;
  $updatesql.=",L4_PSTN_TRUST_NUM_9='".$values['L4_PSTN_TRUST_NUM_9']."'";
  $values['L4_PSTN_TRUST_NUM_10'] = $_POST['l4_pstn_trust_num10'] ;
  $updatesql.=",L4_PSTN_TRUST_NUM_10='".$values['L4_PSTN_TRUST_NUM_10']."'";
  $values['L4_PSTN_TRUST_NUM_11'] = $_POST['l4_pstn_trust_num11'] ;
  $updatesql.=",L4_PSTN_TRUST_NUM_11='".$values['L4_PSTN_TRUST_NUM_11']."'";
  $values['L4_PSTN_TRUST_NUM_12'] = $_POST['l4_pstn_trust_num12'] ;
  $updatesql.=",L4_PSTN_TRUST_NUM_12='".$values['L4_PSTN_TRUST_NUM_12']."'";
  $values['L4_PSTN_TRUST_NUM_13'] = $_POST['l4_pstn_trust_num13'] ;
  $updatesql.=",L4_PSTN_TRUST_NUM_13='".$values['L4_PSTN_TRUST_NUM_13']."'";
  $values['L4_PSTN_TRUST_NUM_14'] = $_POST['l4_pstn_trust_num14'] ;
  $updatesql.=",L4_PSTN_TRUST_NUM_14='".$values['L4_PSTN_TRUST_NUM_14']."'";
  $values['L4_PSTN_TRUST_NUM_15'] = $_POST['l4_pstn_trust_num15'] ;
  $updatesql.=",L4_PSTN_TRUST_NUM_15='".$values['L4_PSTN_TRUST_NUM_15']."'";

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

  $values['L2_VOIP_TRUST_NUM_1'] = $_POST['l2_voip_trust_num1'] ;
  $updatesql.=",L2_VOIP_TRUST_NUM_1='".$values['L2_VOIP_TRUST_NUM_1']."'";
  $values['L2_VOIP_TRUST_NUM_2'] = $_POST['l2_voip_trust_num2'] ;
  $updatesql.=",L2_VOIP_TRUST_NUM_2='".$values['L2_VOIP_TRUST_NUM_2']."'";
  $values['L2_VOIP_TRUST_NUM_3'] = $_POST['l2_voip_trust_num3'] ;
  $updatesql.=",L2_VOIP_TRUST_NUM_3='".$values['L2_VOIP_TRUST_NUM_3']."'";
  $values['L2_VOIP_TRUST_NUM_4'] = $_POST['l2_voip_trust_num4'] ;
  $updatesql.=",L2_VOIP_TRUST_NUM_4='".$values['L2_VOIP_TRUST_NUM_4']."'";
  $values['L2_VOIP_TRUST_NUM_5'] = $_POST['l2_voip_trust_num5'] ;
  $updatesql.=",L2_VOIP_TRUST_NUM_5='".$values['L2_VOIP_TRUST_NUM_5']."'";
  $values['L2_VOIP_TRUST_NUM_6'] = $_POST['l2_voip_trust_num6'] ;
  $updatesql.=",L2_VOIP_TRUST_NUM_6='".$values['L2_VOIP_TRUST_NUM_6']."'";
  $values['L2_VOIP_TRUST_NUM_7'] = $_POST['l2_voip_trust_num7'] ;
  $updatesql.=",L2_VOIP_TRUST_NUM_7='".$values['L2_VOIP_TRUST_NUM_7']."'";
  $values['L2_VOIP_TRUST_NUM_8'] = $_POST['l2_voip_trust_num8'] ;
  $updatesql.=",L2_VOIP_TRUST_NUM_8='".$values['L2_VOIP_TRUST_NUM_8']."'";
  $values['L2_VOIP_TRUST_NUM_9'] = $_POST['l2_voip_trust_num9'] ;
  $updatesql.=",L2_VOIP_TRUST_NUM_9='".$values['L2_VOIP_TRUST_NUM_9']."'";
  $values['L2_VOIP_TRUST_NUM_10'] = $_POST['l2_voip_trust_num10'] ;
  $updatesql.=",L2_VOIP_TRUST_NUM_10='".$values['L2_VOIP_TRUST_NUM_10']."'";
  $values['L2_VOIP_TRUST_NUM_11'] = $_POST['l2_voip_trust_num11'] ;
  $updatesql.=",L2_VOIP_TRUST_NUM_11='".$values['L2_VOIP_TRUST_NUM_11']."'";
  $values['L2_VOIP_TRUST_NUM_12'] = $_POST['l2_voip_trust_num12'] ;
  $updatesql.=",L2_VOIP_TRUST_NUM_12='".$values['L2_VOIP_TRUST_NUM_12']."'";
  $values['L2_VOIP_TRUST_NUM_13'] = $_POST['l2_voip_trust_num13'] ;
  $updatesql.=",L2_VOIP_TRUST_NUM_13='".$values['L2_VOIP_TRUST_NUM_13']."'";
  $values['L2_VOIP_TRUST_NUM_14'] = $_POST['l2_voip_trust_num14'] ;
  $updatesql.=",L2_VOIP_TRUST_NUM_14='".$values['L2_VOIP_TRUST_NUM_14']."'";
  $values['L2_VOIP_TRUST_NUM_15'] = $_POST['l2_voip_trust_num15'] ;
  $updatesql.=",L2_VOIP_TRUST_NUM_15='".$values['L2_VOIP_TRUST_NUM_15']."'";

  $values['L3_VOIP_TRUST_NUM_1'] = $_POST['l3_voip_trust_num1'] ;
  $updatesql.=",L3_VOIP_TRUST_NUM_1='".$values['L3_VOIP_TRUST_NUM_1']."'";
  $values['L3_VOIP_TRUST_NUM_2'] = $_POST['l3_voip_trust_num2'] ;
  $updatesql.=",L3_VOIP_TRUST_NUM_2='".$values['L3_VOIP_TRUST_NUM_2']."'";
  $values['L3_VOIP_TRUST_NUM_3'] = $_POST['l3_voip_trust_num3'] ;
  $updatesql.=",L3_VOIP_TRUST_NUM_3='".$values['L3_VOIP_TRUST_NUM_3']."'";
  $values['L3_VOIP_TRUST_NUM_4'] = $_POST['l3_voip_trust_num4'] ;
  $updatesql.=",L3_VOIP_TRUST_NUM_4='".$values['L3_VOIP_TRUST_NUM_4']."'";
  $values['L3_VOIP_TRUST_NUM_5'] = $_POST['l3_voip_trust_num5'] ;
  $updatesql.=",L3_VOIP_TRUST_NUM_5='".$values['L3_VOIP_TRUST_NUM_5']."'";
  $values['L3_VOIP_TRUST_NUM_6'] = $_POST['l3_voip_trust_num6'] ;
  $updatesql.=",L3_VOIP_TRUST_NUM_6='".$values['L3_VOIP_TRUST_NUM_6']."'";
  $values['L3_VOIP_TRUST_NUM_7'] = $_POST['l3_voip_trust_num7'] ;
  $updatesql.=",L3_VOIP_TRUST_NUM_7='".$values['L3_VOIP_TRUST_NUM_7']."'";
  $values['L3_VOIP_TRUST_NUM_8'] = $_POST['l3_voip_trust_num8'] ;
  $updatesql.=",L3_VOIP_TRUST_NUM_8='".$values['L3_VOIP_TRUST_NUM_8']."'";
  $values['L3_VOIP_TRUST_NUM_9'] = $_POST['l3_voip_trust_num9'] ;
  $updatesql.=",L3_VOIP_TRUST_NUM_9='".$values['L3_VOIP_TRUST_NUM_9']."'";
  $values['L3_VOIP_TRUST_NUM_10'] = $_POST['l3_voip_trust_num10'] ;
  $updatesql.=",L3_VOIP_TRUST_NUM_10='".$values['L3_VOIP_TRUST_NUM_10']."'";
  $values['L3_VOIP_TRUST_NUM_11'] = $_POST['l3_voip_trust_num11'] ;
  $updatesql.=",L3_VOIP_TRUST_NUM_11='".$values['L3_VOIP_TRUST_NUM_11']."'";
  $values['L3_VOIP_TRUST_NUM_12'] = $_POST['l3_voip_trust_num12'] ;
  $updatesql.=",L3_VOIP_TRUST_NUM_12='".$values['L3_VOIP_TRUST_NUM_12']."'";
  $values['L3_VOIP_TRUST_NUM_13'] = $_POST['l3_voip_trust_num13'] ;
  $updatesql.=",L3_VOIP_TRUST_NUM_13='".$values['L3_VOIP_TRUST_NUM_13']."'";
  $values['L3_VOIP_TRUST_NUM_14'] = $_POST['l3_voip_trust_num14'] ;
  $updatesql.=",L3_VOIP_TRUST_NUM_14='".$values['L3_VOIP_TRUST_NUM_14']."'";
  $values['L3_VOIP_TRUST_NUM_15'] = $_POST['l3_voip_trust_num15'] ;
  $updatesql.=",L3_VOIP_TRUST_NUM_15='".$values['L3_VOIP_TRUST_NUM_15']."'";

  $values['L4_VOIP_TRUST_NUM_1'] = $_POST['l4_voip_trust_num1'] ;
  $updatesql.=",L4_VOIP_TRUST_NUM_1='".$values['L4_VOIP_TRUST_NUM_1']."'";
  $values['L4_VOIP_TRUST_NUM_2'] = $_POST['l4_voip_trust_num2'] ;
  $updatesql.=",L4_VOIP_TRUST_NUM_2='".$values['L4_VOIP_TRUST_NUM_2']."'";
  $values['L4_VOIP_TRUST_NUM_3'] = $_POST['l4_voip_trust_num3'] ;
  $updatesql.=",L4_VOIP_TRUST_NUM_3='".$values['L4_VOIP_TRUST_NUM_3']."'";
  $values['L4_VOIP_TRUST_NUM_4'] = $_POST['l4_voip_trust_num4'] ;
  $updatesql.=",L4_VOIP_TRUST_NUM_4='".$values['L4_VOIP_TRUST_NUM_4']."'";
  $values['L4_VOIP_TRUST_NUM_5'] = $_POST['l4_voip_trust_num5'] ;
  $updatesql.=",L4_VOIP_TRUST_NUM_5='".$values['L4_VOIP_TRUST_NUM_5']."'";
  $values['L4_VOIP_TRUST_NUM_6'] = $_POST['l4_voip_trust_num6'] ;
  $updatesql.=",L4_VOIP_TRUST_NUM_6='".$values['L4_VOIP_TRUST_NUM_6']."'";
  $values['L4_VOIP_TRUST_NUM_7'] = $_POST['l4_voip_trust_num7'] ;
  $updatesql.=",L4_VOIP_TRUST_NUM_7='".$values['L4_VOIP_TRUST_NUM_7']."'";
  $values['L4_VOIP_TRUST_NUM_8'] = $_POST['l4_voip_trust_num8'] ;
  $updatesql.=",L4_VOIP_TRUST_NUM_8='".$values['L4_VOIP_TRUST_NUM_8']."'";
  $values['L4_VOIP_TRUST_NUM_9'] = $_POST['l4_voip_trust_num9'] ;
  $updatesql.=",L4_VOIP_TRUST_NUM_9='".$values['L4_VOIP_TRUST_NUM_9']."'";
  $values['L4_VOIP_TRUST_NUM_10'] = $_POST['l4_voip_trust_num10'] ;
  $updatesql.=",L4_VOIP_TRUST_NUM_10='".$values['L4_VOIP_TRUST_NUM_10']."'";
  $values['L4_VOIP_TRUST_NUM_11'] = $_POST['l4_voip_trust_num11'] ;
  $updatesql.=",L4_VOIP_TRUST_NUM_11='".$values['L4_VOIP_TRUST_NUM_11']."'";
  $values['L4_VOIP_TRUST_NUM_12'] = $_POST['l4_voip_trust_num12'] ;
  $updatesql.=",L4_VOIP_TRUST_NUM_12='".$values['L4_VOIP_TRUST_NUM_12']."'";
  $values['L4_VOIP_TRUST_NUM_13'] = $_POST['l4_voip_trust_num13'] ;
  $updatesql.=",L4_VOIP_TRUST_NUM_13='".$values['L4_VOIP_TRUST_NUM_13']."'";
  $values['L4_VOIP_TRUST_NUM_14'] = $_POST['l4_voip_trust_num14'] ;
  $updatesql.=",L4_VOIP_TRUST_NUM_14='".$values['L4_VOIP_TRUST_NUM_14']."'";
  $values['L4_VOIP_TRUST_NUM_15'] = $_POST['l4_voip_trust_num15'] ;
  $updatesql.=",L4_VOIP_TRUST_NUM_15='".$values['L4_VOIP_TRUST_NUM_15']."'";
  
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
  $insertsql.=",SIP_CONFIG_MODE";
  $insertsql2.="','".$values['SIP_CONFIG_MODE'];
  $insertsql.=",SIP_PHONE_NUMBER";
  $insertsql2.="','".$values['SIP_PHONE_NUMBER'];
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
  $insertsql.=",SIP_CONTACT0_DISPLAY_NAME";
  $insertsql2.="','".$values['SIP_CONTACT0_DISPLAY_NAME'];
  $insertsql.=",SIP_CONTACT0_GW_PREFIX";
  $insertsql2.="','".$values['SIP_CONTACT0_GW_PREFIX'];
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
  $insertsql.=",SIP_CONTACT1_DISPLAY_NAME";
  $insertsql2.="','".$values['SIP_CONTACT1_DISPLAY_NAME'];
  $insertsql.=",SIP_CONTACT1_GW_PREFIX";
  $insertsql2.="','".$values['SIP_CONTACT1_GW_PREFIX'];
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
  $insertsql.=",SIP_CONTACT2_DISPLAY_NAME";
  $insertsql2.="','".$values['SIP_CONTACT2_DISPLAY_NAME'];
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
  $insertsql.=",SIP_CONTACT3_DISPLAY_NAME";
  $insertsql2.="','".$values['SIP_CONTACT3_DISPLAY_NAME'];
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
  $insertsql.=",SIP_LOCAL_PORT";
  $insertsql2.="','".$values['SIP_LOCAL_PORT'];
  $insertsql.=",SIP_183";
  $insertsql2.="','".$values['SIP_183'];
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
  $insertsql.=",L1_FW2PSTN_AUTH_MODE";
  $insertsql2.="','".$values['L1_FW2PSTN_AUTH_MODE'];
  $insertsql.=",L1_FW_TO_PSTN_PASSWD";
  $insertsql2.="','".$values['L1_FW_TO_PSTN_PASSWD'];
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
  $insertsql.=",L1_GROUP_SVR";
  $insertsql2.="','".$values['L1_GROUP_SVR'];
  $insertsql.=",L1_GSM_NUMBER";
  $insertsql2.="','".$values['L1_GSM_NUMBER'];
  $insertsql.=",L1_GSM_CW_ENABLE";
  $insertsql2.="','".$values['L1_GSM_CW_ENABLE'];
  $insertsql.=",L2_DISABLE_OUT";
  $insertsql2.="','".$values['L2_DISABLE_OUT'];
  $insertsql.=",L2_FW_NUM_TO_PSTN";
  $insertsql2.="','".$values['L2_FW_NUM_TO_PSTN'];
  $insertsql.=",L2_P_DIGIT_MAP";
  $insertsql2.="','".$values['L2_P_DIGIT_MAP'];
  $insertsql.=",L2_FW2PSTN_AUTH_MODE";
  $insertsql2.="','".$values['L2_FW2PSTN_AUTH_MODE'];
  $insertsql.=",L2_FW_TO_PSTN_PASSWD";
  $insertsql2.="','".$values['L2_FW_TO_PSTN_PASSWD'];
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
  $insertsql.=",L2_GROUP_SVR";
  $insertsql2.="','".$values['L2_GROUP_SVR'];
  $insertsql.=",L2_GSM_NUMBER";
  $insertsql2.="','".$values['L2_GSM_NUMBER'];
  $insertsql.=",L2_GSM_CW_ENABLE";
  $insertsql2.="','".$values['L2_GSM_CW_ENABLE'];
  $insertsql.=",L3_DISABLE_OUT";
  $insertsql2.="','".$values['L3_DISABLE_OUT'];
  $insertsql.=",L3_FW_NUM_TO_PSTN";
  $insertsql2.="','".$values['L3_FW_NUM_TO_PSTN'];
  $insertsql.=",L3_P_DIGIT_MAP";
  $insertsql2.="','".$values['L3_P_DIGIT_MAP'];
  $insertsql.=",L3_FW2PSTN_AUTH_MODE";
  $insertsql2.="','".$values['L3_FW2PSTN_AUTH_MODE'];
  $insertsql.=",L3_FW_TO_PSTN_PASSWD";
  $insertsql2.="','".$values['L3_FW_TO_PSTN_PASSWD'];
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
  $insertsql.=",L3_GROUP_SVR";
  $insertsql2.="','".$values['L3_GROUP_SVR'];
  $insertsql.=",L3_GSM_NUMBER";
  $insertsql2.="','".$values['L3_GSM_NUMBER'];
  $insertsql.=",L3_GSM_CW_ENABLE";
  $insertsql2.="','".$values['L3_GSM_CW_ENABLE'];
  $insertsql.=",L4_DISABLE_OUT";
  $insertsql2.="','".$values['L4_DISABLE_OUT'];
  $insertsql.=",L4_FW_NUM_TO_PSTN";
  $insertsql2.="','".$values['L4_FW_NUM_TO_PSTN'];
  $insertsql.=",L4_P_DIGIT_MAP";
  $insertsql2.="','".$values['L4_P_DIGIT_MAP'];
  $insertsql.=",L4_FW2PSTN_AUTH_MODE";
  $insertsql2.="','".$values['L4_FW2PSTN_AUTH_MODE'];
  $insertsql.=",L4_FW_TO_PSTN_PASSWD";
  $insertsql2.="','".$values['L4_FW_TO_PSTN_PASSWD'];
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
  $insertsql.=",L4_GROUP_SVR";
  $insertsql2.="','".$values['L4_GROUP_SVR'];
  $insertsql.=",L4_GSM_NUMBER";
  $insertsql2.="','".$values['L4_GSM_NUMBER'];
  $insertsql.=",L4_GSM_CW_ENABLE";
  $insertsql2.="','".$values['L4_GSM_CW_ENABLE'];
  $insertsql.=",L5_DISABLE_OUT";
  $insertsql2.="','".$values['L5_DISABLE_OUT'];
  $insertsql.=",L5_FW_NUM_TO_PSTN";
  $insertsql2.="','".$values['L5_FW_NUM_TO_PSTN'];
  $insertsql.=",L5_P_DIGIT_MAP";
  $insertsql2.="','".$values['L5_P_DIGIT_MAP'];
  $insertsql.=",L5_FW2PSTN_AUTH_MODE";
  $insertsql2.="','".$values['L5_FW2PSTN_AUTH_MODE'];
  $insertsql.=",L5_FW_TO_PSTN_PASSWD";
  $insertsql2.="','".$values['L5_FW_TO_PSTN_PASSWD'];
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
  $insertsql.=",L5_GROUP_SVR";
  $insertsql2.="','".$values['L5_GROUP_SVR'];
  $insertsql.=",L5_GSM_NUMBER";
  $insertsql2.="','".$values['L5_GSM_NUMBER'];
  $insertsql.=",L5_GSM_CW_ENABLE";
  $insertsql2.="','".$values['L5_GSM_CW_ENABLE'];
  $insertsql.=",L6_DISABLE_OUT";
  $insertsql2.="','".$values['L6_DISABLE_OUT'];
  $insertsql.=",L6_FW_NUM_TO_PSTN";
  $insertsql2.="','".$values['L6_FW_NUM_TO_PSTN'];
  $insertsql.=",L6_P_DIGIT_MAP";
  $insertsql2.="','".$values['L6_P_DIGIT_MAP'];
  $insertsql.=",L6_FW2PSTN_AUTH_MODE";
  $insertsql2.="','".$values['L6_FW2PSTN_AUTH_MODE'];
  $insertsql.=",L6_FW_TO_PSTN_PASSWD";
  $insertsql2.="','".$values['L6_FW_TO_PSTN_PASSWD'];
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
  $insertsql.=",L6_GROUP_SVR";
  $insertsql2.="','".$values['L6_GROUP_SVR'];
  $insertsql.=",L6_GSM_NUMBER";
  $insertsql2.="','".$values['L6_GSM_NUMBER'];
  $insertsql.=",L6_GSM_CW_ENABLE";
  $insertsql2.="','".$values['L6_GSM_CW_ENABLE'];
  $insertsql.=",L7_DISABLE_OUT";
  $insertsql2.="','".$values['L7_DISABLE_OUT'];
  $insertsql.=",L7_FW_NUM_TO_PSTN";
  $insertsql2.="','".$values['L7_FW_NUM_TO_PSTN'];
  $insertsql.=",L7_P_DIGIT_MAP";
  $insertsql2.="','".$values['L7_P_DIGIT_MAP'];
  $insertsql.=",L7_FW2PSTN_AUTH_MODE";
  $insertsql2.="','".$values['L7_FW2PSTN_AUTH_MODE'];
  $insertsql.=",L7_FW_TO_PSTN_PASSWD";
  $insertsql2.="','".$values['L7_FW_TO_PSTN_PASSWD'];
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
  $insertsql.=",L7_GROUP_SVR";
  $insertsql2.="','".$values['L7_GROUP_SVR'];
  $insertsql.=",L7_GSM_NUMBER";
  $insertsql2.="','".$values['L7_GSM_NUMBER'];
  $insertsql.=",L7_GSM_CW_ENABLE";
  $insertsql2.="','".$values['L7_GSM_CW_ENABLE'];
  $insertsql.=",L8_DISABLE_OUT";
  $insertsql2.="','".$values['L8_DISABLE_OUT'];
  $insertsql.=",L8_FW_NUM_TO_PSTN";
  $insertsql2.="','".$values['L8_FW_NUM_TO_PSTN'];
  $insertsql.=",L8_P_DIGIT_MAP";
  $insertsql2.="','".$values['L8_P_DIGIT_MAP'];
  $insertsql.=",L8_FW2PSTN_AUTH_MODE";
  $insertsql2.="','".$values['L8_FW2PSTN_AUTH_MODE'];
  $insertsql.=",L8_FW_TO_PSTN_PASSWD";
  $insertsql2.="','".$values['L8_FW_TO_PSTN_PASSWD'];
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
  $insertsql.=",L8_GROUP_SVR";
  $insertsql2.="','".$values['L8_GROUP_SVR'];
  $insertsql.=",L8_GSM_NUMBER";
  $insertsql2.="','".$values['L8_GSM_NUMBER'];
  $insertsql.=",L8_GSM_CW_ENABLE";
  $insertsql2.="','".$values['L8_GSM_CW_ENABLE'];
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

  $insertsql.=",L1_GSM_CF_UNCND_ENABLE";
  $insertsql2.="','".$values['L1_GSM_CF_UNCND_ENABLE'];
  $insertsql.=",L1_GSM_CF_UNCND_NUM";
  $insertsql2.="','".$values['L1_GSM_CF_UNCND_NUM'];
  $insertsql.=",L1_GSM_CF_BUSY_ENABLE";
  $insertsql2.="','".$values['L1_GSM_CF_BUSY_ENABLE'];
  $insertsql.=",L1_GSM_CF_BUSY_NUM";
  $insertsql2.="','".$values['L1_GSM_CF_BUSY_NUM'];
  $insertsql.=",L1_GSM_CF_NOREPLY_ENABLE";
  $insertsql2.="','".$values['L1_GSM_CF_NOREPLY_ENABLE'];
  $insertsql.=",L1_GSM_CF_NOREPLY_NUM";
  $insertsql2.="','".$values['L1_GSM_CF_NOREPLY_NUM'];
  $insertsql.=",L1_GSM_CF_NOTREACHABLE_ENABLE";
  $insertsql2.="','".$values['L1_GSM_CF_NOTREACHABLE_ENABLE'];
  $insertsql.=",L1_GSM_CF_NOTREACHABLE_NUM";
  $insertsql2.="','".$values['L1_GSM_CF_NOTREACHABLE_NUM'];

  $insertsql.=",L2_GSM_CF_UNCND_ENABLE";
  $insertsql2.="','".$values['L2_GSM_CF_UNCND_ENABLE'];
  $insertsql.=",L2_GSM_CF_UNCND_NUM";
  $insertsql2.="','".$values['L2_GSM_CF_UNCND_NUM'];
  $insertsql.=",L2_GSM_CF_BUSY_ENABLE";
  $insertsql2.="','".$values['L2_GSM_CF_BUSY_ENABLE'];
  $insertsql.=",L2_GSM_CF_BUSY_NUM";
  $insertsql2.="','".$values['L2_GSM_CF_BUSY_NUM'];
  $insertsql.=",L2_GSM_CF_NOREPLY_ENABLE";
  $insertsql2.="','".$values['L2_GSM_CF_NOREPLY_ENABLE'];
  $insertsql.=",L2_GSM_CF_NOREPLY_NUM";
  $insertsql2.="','".$values['L2_GSM_CF_NOREPLY_NUM'];
  $insertsql.=",L2_GSM_CF_NOTREACHABLE_ENABLE";
  $insertsql2.="','".$values['L2_GSM_CF_NOTREACHABLE_ENABLE'];
  $insertsql.=",L2_GSM_CF_NOTREACHABLE_NUM";
  $insertsql2.="','".$values['L2_GSM_CF_NOTREACHABLE_NUM'];

  $insertsql.=",L3_GSM_CF_UNCND_ENABLE";
  $insertsql2.="','".$values['L3_GSM_CF_UNCND_ENABLE'];
  $insertsql.=",L3_GSM_CF_UNCND_NUM";
  $insertsql2.="','".$values['L3_GSM_CF_UNCND_NUM'];
  $insertsql.=",L3_GSM_CF_BUSY_ENABLE";
  $insertsql2.="','".$values['L3_GSM_CF_BUSY_ENABLE'];
  $insertsql.=",L3_GSM_CF_BUSY_NUM";
  $insertsql2.="','".$values['L3_GSM_CF_BUSY_NUM'];
  $insertsql.=",L3_GSM_CF_NOREPLY_ENABLE";
  $insertsql2.="','".$values['L3_GSM_CF_NOREPLY_ENABLE'];
  $insertsql.=",L3_GSM_CF_NOREPLY_NUM";
  $insertsql2.="','".$values['L3_GSM_CF_NOREPLY_NUM'];
  $insertsql.=",L3_GSM_CF_NOTREACHABLE_ENABLE";
  $insertsql2.="','".$values['L3_GSM_CF_NOTREACHABLE_ENABLE'];
  $insertsql.=",L3_GSM_CF_NOTREACHABLE_NUM";
  $insertsql2.="','".$values['L3_GSM_CF_NOTREACHABLE_NUM'];

  $insertsql.=",L4_GSM_CF_UNCND_ENABLE";
  $insertsql2.="','".$values['L4_GSM_CF_UNCND_ENABLE'];
  $insertsql.=",L4_GSM_CF_UNCND_NUM";
  $insertsql2.="','".$values['L4_GSM_CF_UNCND_NUM'];
  $insertsql.=",L4_GSM_CF_BUSY_ENABLE";
  $insertsql2.="','".$values['L4_GSM_CF_BUSY_ENABLE'];
  $insertsql.=",L4_GSM_CF_BUSY_NUM";
  $insertsql2.="','".$values['L4_GSM_CF_BUSY_NUM'];
  $insertsql.=",L4_GSM_CF_NOREPLY_ENABLE";
  $insertsql2.="','".$values['L4_GSM_CF_NOREPLY_ENABLE'];
  $insertsql.=",L4_GSM_CF_NOREPLY_NUM";
  $insertsql2.="','".$values['L4_GSM_CF_NOREPLY_NUM'];
  $insertsql.=",L4_GSM_CF_NOTREACHABLE_ENABLE";
  $insertsql2.="','".$values['L4_GSM_CF_NOTREACHABLE_ENABLE'];
  $insertsql.=",L4_GSM_CF_NOTREACHABLE_NUM";
  $insertsql2.="','".$values['L4_GSM_CF_NOTREACHABLE_NUM'];

  $insertsql.=",L1_SIM_EXP";
  $insertsql2.="','".$values['L1_SIM_EXP'];
  $insertsql.=",L1_SIM_EXP_UNIT";
  $insertsql2.="','".$values['L1_SIM_EXP_UNIT'];
  $insertsql.=",L1_SIM_ID";
  $insertsql2.="','".$values['L1_SIM_ID'];
  $insertsql.=",L1_SIM_STRP_NUM";
  $insertsql2.="','".$values['L1_SIM_STRP_NUM'];
  $insertsql.=",L1_SIM_STRP_TIME";
  $insertsql2.="','".$values['L1_SIM_STRP_TIME'];
  $insertsql.=",L1_SIM_CALL_LIMIT";
  $insertsql2.="','".$values['L1_SIM_CALL_LIMIT'];

  $insertsql.=",L2_SIM_EXP";
  $insertsql2.="','".$values['L2_SIM_EXP'];
  $insertsql.=",L2_SIM_EXP_UNIT";
  $insertsql2.="','".$values['L2_SIM_EXP_UNIT'];
  $insertsql.=",L2_SIM_ID";
  $insertsql2.="','".$values['L2_SIM_ID'];
  $insertsql.=",L2_SIM_STRP_NUM";
  $insertsql2.="','".$values['L2_SIM_STRP_NUM'];
  $insertsql.=",L2_SIM_STRP_TIME";
  $insertsql2.="','".$values['L2_SIM_STRP_TIME'];
  $insertsql.=",L2_SIM_CALL_LIMIT";
  $insertsql2.="','".$values['L2_SIM_CALL_LIMIT'];

  $insertsql.=",L3_SIM_EXP";
  $insertsql2.="','".$values['L3_SIM_EXP'];
  $insertsql.=",L3_SIM_EXP_UNIT";
  $insertsql2.="','".$values['L3_SIM_EXP_UNIT'];
  $insertsql.=",L3_SIM_ID";
  $insertsql2.="','".$values['L3_SIM_ID'];
  $insertsql.=",L3_SIM_STRP_NUM";
  $insertsql2.="','".$values['L3_SIM_STRP_NUM'];
  $insertsql.=",L3_SIM_STRP_TIME";
  $insertsql2.="','".$values['L3_SIM_STRP_TIME'];
  $insertsql.=",L3_SIM_CALL_LIMIT";
  $insertsql2.="','".$values['L3_SIM_CALL_LIMIT'];

  $insertsql.=",L4_SIM_EXP";
  $insertsql2.="','".$values['L4_SIM_EXP'];
  $insertsql.=",L4_SIM_EXP_UNIT";
  $insertsql2.="','".$values['L4_SIM_EXP_UNIT'];
  $insertsql.=",L4_SIM_ID";
  $insertsql2.="','".$values['L4_SIM_ID'];
  $insertsql.=",L4_SIM_STRP_NUM";
  $insertsql2.="','".$values['L4_SIM_STRP_NUM'];
  $insertsql.=",L4_SIM_STRP_TIME";
  $insertsql2.="','".$values['L4_SIM_STRP_TIME'];
  $insertsql.=",L4_SIM_CALL_LIMIT";
  $insertsql2.="','".$values['L4_SIM_CALL_LIMIT'];

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

  $insertsql.=",L2_PSTN_TRUST_NUM_1";
  $insertsql2.="','".$values['L2_PSTN_TRUST_NUM_1'];
  $insertsql.=",L2_PSTN_TRUST_NUM_2";
  $insertsql2.="','".$values['L2_PSTN_TRUST_NUM_2'];
  $insertsql.=",L2_PSTN_TRUST_NUM_3";
  $insertsql2.="','".$values['L2_PSTN_TRUST_NUM_3'];
  $insertsql.=",L2_PSTN_TRUST_NUM_4";
  $insertsql2.="','".$values['L2_PSTN_TRUST_NUM_4'];
  $insertsql.=",L2_PSTN_TRUST_NUM_5";
  $insertsql2.="','".$values['L2_PSTN_TRUST_NUM_5'];
  $insertsql.=",L2_PSTN_TRUST_NUM_6";
  $insertsql2.="','".$values['L2_PSTN_TRUST_NUM_6'];
  $insertsql.=",L2_PSTN_TRUST_NUM_7";
  $insertsql2.="','".$values['L2_PSTN_TRUST_NUM_7'];
  $insertsql.=",L2_PSTN_TRUST_NUM_8";
  $insertsql2.="','".$values['L2_PSTN_TRUST_NUM_8'];
  $insertsql.=",L2_PSTN_TRUST_NUM_9";
  $insertsql2.="','".$values['L2_PSTN_TRUST_NUM_9'];
  $insertsql.=",L2_PSTN_TRUST_NUM_10";
  $insertsql2.="','".$values['L2_PSTN_TRUST_NUM_10'];
  $insertsql.=",L2_PSTN_TRUST_NUM_11";
  $insertsql2.="','".$values['L2_PSTN_TRUST_NUM_11'];
  $insertsql.=",L2_PSTN_TRUST_NUM_12";
  $insertsql2.="','".$values['L2_PSTN_TRUST_NUM_12'];
  $insertsql.=",L2_PSTN_TRUST_NUM_13";
  $insertsql2.="','".$values['L2_PSTN_TRUST_NUM_13'];
  $insertsql.=",L2_PSTN_TRUST_NUM_14";
  $insertsql2.="','".$values['L2_PSTN_TRUST_NUM_14'];
  $insertsql.=",L2_PSTN_TRUST_NUM_15";
  $insertsql2.="','".$values['L2_PSTN_TRUST_NUM_15'];

  $insertsql.=",L3_PSTN_TRUST_NUM_1";
  $insertsql2.="','".$values['L3_PSTN_TRUST_NUM_1'];
  $insertsql.=",L3_PSTN_TRUST_NUM_2";
  $insertsql2.="','".$values['L3_PSTN_TRUST_NUM_2'];
  $insertsql.=",L3_PSTN_TRUST_NUM_3";
  $insertsql2.="','".$values['L3_PSTN_TRUST_NUM_3'];
  $insertsql.=",L3_PSTN_TRUST_NUM_4";
  $insertsql2.="','".$values['L3_PSTN_TRUST_NUM_4'];
  $insertsql.=",L3_PSTN_TRUST_NUM_5";
  $insertsql2.="','".$values['L3_PSTN_TRUST_NUM_5'];
  $insertsql.=",L3_PSTN_TRUST_NUM_6";
  $insertsql2.="','".$values['L3_PSTN_TRUST_NUM_6'];
  $insertsql.=",L3_PSTN_TRUST_NUM_7";
  $insertsql2.="','".$values['L3_PSTN_TRUST_NUM_7'];
  $insertsql.=",L3_PSTN_TRUST_NUM_8";
  $insertsql2.="','".$values['L3_PSTN_TRUST_NUM_8'];
  $insertsql.=",L3_PSTN_TRUST_NUM_9";
  $insertsql2.="','".$values['L3_PSTN_TRUST_NUM_9'];
  $insertsql.=",L3_PSTN_TRUST_NUM_10";
  $insertsql2.="','".$values['L3_PSTN_TRUST_NUM_10'];
  $insertsql.=",L3_PSTN_TRUST_NUM_11";
  $insertsql2.="','".$values['L3_PSTN_TRUST_NUM_11'];
  $insertsql.=",L3_PSTN_TRUST_NUM_12";
  $insertsql2.="','".$values['L3_PSTN_TRUST_NUM_12'];
  $insertsql.=",L3_PSTN_TRUST_NUM_13";
  $insertsql2.="','".$values['L3_PSTN_TRUST_NUM_13'];
  $insertsql.=",L3_PSTN_TRUST_NUM_14";
  $insertsql2.="','".$values['L3_PSTN_TRUST_NUM_14'];
  $insertsql.=",L3_PSTN_TRUST_NUM_15";
  $insertsql2.="','".$values['L3_PSTN_TRUST_NUM_15'];

  $insertsql.=",L4_PSTN_TRUST_NUM_1";
  $insertsql2.="','".$values['L4_PSTN_TRUST_NUM_1'];
  $insertsql.=",L4_PSTN_TRUST_NUM_2";
  $insertsql2.="','".$values['L4_PSTN_TRUST_NUM_2'];
  $insertsql.=",L4_PSTN_TRUST_NUM_3";
  $insertsql2.="','".$values['L4_PSTN_TRUST_NUM_3'];
  $insertsql.=",L4_PSTN_TRUST_NUM_4";
  $insertsql2.="','".$values['L4_PSTN_TRUST_NUM_4'];
  $insertsql.=",L4_PSTN_TRUST_NUM_5";
  $insertsql2.="','".$values['L4_PSTN_TRUST_NUM_5'];
  $insertsql.=",L4_PSTN_TRUST_NUM_6";
  $insertsql2.="','".$values['L4_PSTN_TRUST_NUM_6'];
  $insertsql.=",L4_PSTN_TRUST_NUM_7";
  $insertsql2.="','".$values['L4_PSTN_TRUST_NUM_7'];
  $insertsql.=",L4_PSTN_TRUST_NUM_8";
  $insertsql2.="','".$values['L4_PSTN_TRUST_NUM_8'];
  $insertsql.=",L4_PSTN_TRUST_NUM_9";
  $insertsql2.="','".$values['L4_PSTN_TRUST_NUM_9'];
  $insertsql.=",L4_PSTN_TRUST_NUM_10";
  $insertsql2.="','".$values['L4_PSTN_TRUST_NUM_10'];
  $insertsql.=",L4_PSTN_TRUST_NUM_11";
  $insertsql2.="','".$values['L4_PSTN_TRUST_NUM_11'];
  $insertsql.=",L4_PSTN_TRUST_NUM_12";
  $insertsql2.="','".$values['L4_PSTN_TRUST_NUM_12'];
  $insertsql.=",L4_PSTN_TRUST_NUM_13";
  $insertsql2.="','".$values['L4_PSTN_TRUST_NUM_13'];
  $insertsql.=",L4_PSTN_TRUST_NUM_14";
  $insertsql2.="','".$values['L4_PSTN_TRUST_NUM_14'];
  $insertsql.=",L4_PSTN_TRUST_NUM_15";
  $insertsql2.="','".$values['L4_PSTN_TRUST_NUM_15'];

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

  $insertsql.=",L2_VOIP_TRUST_NUM_1";
  $insertsql2.="','".$values['L2_VOIP_TRUST_NUM_1'];
  $insertsql.=",L2_VOIP_TRUST_NUM_2";
  $insertsql2.="','".$values['L2_VOIP_TRUST_NUM_2'];
  $insertsql.=",L2_VOIP_TRUST_NUM_3";
  $insertsql2.="','".$values['L2_VOIP_TRUST_NUM_3'];
  $insertsql.=",L2_VOIP_TRUST_NUM_4";
  $insertsql2.="','".$values['L2_VOIP_TRUST_NUM_4'];
  $insertsql.=",L2_VOIP_TRUST_NUM_5";
  $insertsql2.="','".$values['L2_VOIP_TRUST_NUM_5'];
  $insertsql.=",L2_VOIP_TRUST_NUM_6";
  $insertsql2.="','".$values['L2_VOIP_TRUST_NUM_6'];
  $insertsql.=",L2_VOIP_TRUST_NUM_7";
  $insertsql2.="','".$values['L2_VOIP_TRUST_NUM_7'];
  $insertsql.=",L2_VOIP_TRUST_NUM_8";
  $insertsql2.="','".$values['L2_VOIP_TRUST_NUM_8'];
  $insertsql.=",L2_VOIP_TRUST_NUM_9";
  $insertsql2.="','".$values['L2_VOIP_TRUST_NUM_9'];
  $insertsql.=",L2_VOIP_TRUST_NUM_10";
  $insertsql2.="','".$values['L2_VOIP_TRUST_NUM_10'];
  $insertsql.=",L2_VOIP_TRUST_NUM_11";
  $insertsql2.="','".$values['L2_VOIP_TRUST_NUM_11'];
  $insertsql.=",L2_VOIP_TRUST_NUM_12";
  $insertsql2.="','".$values['L2_VOIP_TRUST_NUM_12'];
  $insertsql.=",L2_VOIP_TRUST_NUM_13";
  $insertsql2.="','".$values['L2_VOIP_TRUST_NUM_13'];
  $insertsql.=",L2_VOIP_TRUST_NUM_14";
  $insertsql2.="','".$values['L2_VOIP_TRUST_NUM_14'];

  $insertsql.=",L3_VOIP_TRUST_NUM_1";
  $insertsql2.="','".$values['L3_VOIP_TRUST_NUM_1'];
  $insertsql.=",L3_VOIP_TRUST_NUM_2";
  $insertsql2.="','".$values['L3_VOIP_TRUST_NUM_2'];
  $insertsql.=",L3_VOIP_TRUST_NUM_3";
  $insertsql2.="','".$values['L3_VOIP_TRUST_NUM_3'];
  $insertsql.=",L3_VOIP_TRUST_NUM_4";
  $insertsql2.="','".$values['L3_VOIP_TRUST_NUM_4'];
  $insertsql.=",L3_VOIP_TRUST_NUM_5";
  $insertsql2.="','".$values['L3_VOIP_TRUST_NUM_5'];
  $insertsql.=",L3_VOIP_TRUST_NUM_6";
  $insertsql2.="','".$values['L3_VOIP_TRUST_NUM_6'];
  $insertsql.=",L3_VOIP_TRUST_NUM_7";
  $insertsql2.="','".$values['L3_VOIP_TRUST_NUM_7'];
  $insertsql.=",L3_VOIP_TRUST_NUM_8";
  $insertsql2.="','".$values['L3_VOIP_TRUST_NUM_8'];
  $insertsql.=",L3_VOIP_TRUST_NUM_9";
  $insertsql2.="','".$values['L3_VOIP_TRUST_NUM_9'];
  $insertsql.=",L3_VOIP_TRUST_NUM_10";
  $insertsql2.="','".$values['L3_VOIP_TRUST_NUM_10'];
  $insertsql.=",L3_VOIP_TRUST_NUM_11";
  $insertsql2.="','".$values['L3_VOIP_TRUST_NUM_11'];
  $insertsql.=",L3_VOIP_TRUST_NUM_12";
  $insertsql2.="','".$values['L3_VOIP_TRUST_NUM_12'];
  $insertsql.=",L3_VOIP_TRUST_NUM_13";
  $insertsql2.="','".$values['L3_VOIP_TRUST_NUM_13'];
  $insertsql.=",L3_VOIP_TRUST_NUM_14";
  $insertsql2.="','".$values['L3_VOIP_TRUST_NUM_14'];
  $insertsql.=",L3_VOIP_TRUST_NUM_15";
  $insertsql2.="','".$values['L3_VOIP_TRUST_NUM_15'];

  $insertsql.=",L4_VOIP_TRUST_NUM_1";
  $insertsql2.="','".$values['L4_VOIP_TRUST_NUM_1'];
  $insertsql.=",L4_VOIP_TRUST_NUM_2";
  $insertsql2.="','".$values['L4_VOIP_TRUST_NUM_2'];
  $insertsql.=",L4_VOIP_TRUST_NUM_3";
  $insertsql2.="','".$values['L4_VOIP_TRUST_NUM_3'];
  $insertsql.=",L4_VOIP_TRUST_NUM_4";
  $insertsql2.="','".$values['L4_VOIP_TRUST_NUM_4'];
  $insertsql.=",L4_VOIP_TRUST_NUM_5";
  $insertsql2.="','".$values['L4_VOIP_TRUST_NUM_5'];
  $insertsql.=",L4_VOIP_TRUST_NUM_6";
  $insertsql2.="','".$values['L4_VOIP_TRUST_NUM_6'];
  $insertsql.=",L4_VOIP_TRUST_NUM_7";
  $insertsql2.="','".$values['L4_VOIP_TRUST_NUM_7'];
  $insertsql.=",L4_VOIP_TRUST_NUM_8";
  $insertsql2.="','".$values['L4_VOIP_TRUST_NUM_8'];
  $insertsql.=",L4_VOIP_TRUST_NUM_9";
  $insertsql2.="','".$values['L4_VOIP_TRUST_NUM_9'];
  $insertsql.=",L4_VOIP_TRUST_NUM_10";
  $insertsql2.="','".$values['L4_VOIP_TRUST_NUM_10'];
  $insertsql.=",L4_VOIP_TRUST_NUM_11";
  $insertsql2.="','".$values['L4_VOIP_TRUST_NUM_11'];
  $insertsql.=",L4_VOIP_TRUST_NUM_12";
  $insertsql2.="','".$values['L4_VOIP_TRUST_NUM_12'];
  $insertsql.=",L4_VOIP_TRUST_NUM_13";
  $insertsql2.="','".$values['L4_VOIP_TRUST_NUM_13'];
  $insertsql.=",L4_VOIP_TRUST_NUM_14";
  $insertsql2.="','".$values['L4_VOIP_TRUST_NUM_14'];
  $insertsql.=",L4_VOIP_TRUST_NUM_15";
  $insertsql2.="','".$values['L4_VOIP_TRUST_NUM_15'];

  $insertsql.=",RMSIM_ENABLE";
  $insertsql2.="','".$values['RMSIM_ENABLE'];
  $insertsql.=",SMB_SVR";
  $insertsql2.="','".$values['SMB_SVR'];
  $insertsql.=",SMB_ID";
  $insertsql2.="','".$values['SMB_ID'];
  $insertsql.=",SMB_KEY";
  $insertsql2.="','".$values['SMB_KEY'];


?>
