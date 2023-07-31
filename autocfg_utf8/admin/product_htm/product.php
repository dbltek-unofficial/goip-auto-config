<?php 
 

  $values['ENDPOINT_TYPE'] = $_POST['endpoint_type'] ;
  $updatesql.=",ENDPOINT_TYPE='".$values['ENDPOINT_TYPE']."'"; 
  $values['orderid'] = $_POST['muban_orderid'] ;
  $updatesql.=",orderid='".$values['orderid']."'";
 
if($values['ENDPOINT_TYPE']=='H323'):
if($values['FXO_MODE']=='PSTNBYPASS'):  
  $values['H323_L1_NUMBER'] = $_POST['line1_h323_phone_num'] ;
  $updatesql.=",H323_L1_NUMBER='".$values['H323_L1_NUMBER']."'";
  $values['H323_L1_H323_ID'] = $_POST['line1_h323_id'] ;
  $updatesql.=",H323_L1_H323_ID='".$values['H323_L1_H323_ID']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_L1_GKADDR'] = $_POST['line1_gk_addr'] ;
  $updatesql.=",H323_L1_GKADDR='".$values['H323_L1_GKADDR']."'";
endif; 
  $values['H323_L1_VOS_ENABLE'] = $_POST['line1_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_L1_VOS_ENABLE='".$values['H323_L1_VOS_ENABLE']."'";
if($values['H323_L1_VOS_ENABLE'] == 1):
  $values['H323_L1_VOS_MODE'] = $_POST['line1_vos_mod'] ;
  $updatesql.=",H323_L1_VOS_MODE='".$values['H323_L1_VOS_MODE']."'";
endif; 
  $values['H323_L1_AUTH'] = $_POST['line1_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_L1_AUTH='".$values['H323_L1_AUTH']."'";
if($values['H323_L1_AUTH'] == 1):
  $values['H323_L1_H235_ID'] = $_POST['line1_h235_id'] ;
  $updatesql.=",H323_L1_H235_ID='".$values['H323_L1_H235_ID']."'";
  $values['H323_L1_H235_PASSWD'] = $_POST['line1_h235_passwd'] ;
  $updatesql.=",H323_L1_H235_PASSWD='".$values['H323_L1_H235_PASSWD']."'";
endif; 
if($values['FXSPORT'] > 1): 
endif; 
  $values['H323_L1_NUMBER'] = $_POST['line1_h323_phone_num'] ;
  $updatesql.=",H323_L1_NUMBER='".$values['H323_L1_NUMBER']."'";
  $values['H323_L1_H323_ID'] = $_POST['line1_h323_id'] ;
  $updatesql.=",H323_L1_H323_ID='".$values['H323_L1_H323_ID']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_L1_GKADDR'] = $_POST['line1_gk_addr'] ;
  $updatesql.=",H323_L1_GKADDR='".$values['H323_L1_GKADDR']."'";
endif; 
  $values['H323_L1_VOS_ENABLE'] = $_POST['line1_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_L1_VOS_ENABLE='".$values['H323_L1_VOS_ENABLE']."'";
if($values['H323_L1_VOS_ENABLE'] == 1):
  $values['H323_L1_VOS_MODE'] = $_POST['line1_vos_mod'] ;
  $updatesql.=",H323_L1_VOS_MODE='".$values['H323_L1_VOS_MODE']."'";
endif; 
  $values['H323_L1_AUTH'] = $_POST['line1_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_L1_AUTH='".$values['H323_L1_AUTH']."'";
if($values['H323_L1_AUTH'] == 1):
  $values['H323_L1_H235_ID'] = $_POST['line1_h235_id'] ;
  $updatesql.=",H323_L1_H235_ID='".$values['H323_L1_H235_ID']."'";
  $values['H323_L1_H235_PASSWD'] = $_POST['line1_h235_passwd'] ;
  $updatesql.=",H323_L1_H235_PASSWD='".$values['H323_L1_H235_PASSWD']."'";
endif; 
if($values['FXSPORT'] >= 2): 
endif; 
  $values['H323_L2_NUMBER'] = $_POST['line2_h323_phone_num'] ;
  $updatesql.=",H323_L2_NUMBER='".$values['H323_L2_NUMBER']."'";
  $values['H323_L2_H323_ID'] = $_POST['line2_h323_id'] ;
  $updatesql.=",H323_L2_H323_ID='".$values['H323_L2_H323_ID']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_L2_GKADDR'] = $_POST['line2_gk_addr'] ;
  $updatesql.=",H323_L2_GKADDR='".$values['H323_L2_GKADDR']."'";
endif; 
  $values['H323_L2_VOS_ENABLE'] = $_POST['line2_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_L2_VOS_ENABLE='".$values['H323_L2_VOS_ENABLE']."'";
if($values['H323_L2_VOS_ENABLE'] == 1):
  $values['H323_L2_VOS_MODE'] = $_POST['line2_vos_mod'] ;
  $updatesql.=",H323_L2_VOS_MODE='".$values['H323_L2_VOS_MODE']."'";
endif; 
  $values['H323_L2_AUTH'] = $_POST['line2_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_L2_AUTH='".$values['H323_L2_AUTH']."'";
if($values['H323_L2_AUTH'] == 1):
  $values['H323_L2_H235_ID'] = $_POST['line2_h235_id'] ;
  $updatesql.=",H323_L2_H235_ID='".$values['H323_L2_H235_ID']."'";
  $values['H323_L2_H235_PASSWD'] = $_POST['line2_h235_passwd'] ;
  $updatesql.=",H323_L2_H235_PASSWD='".$values['H323_L2_H235_PASSWD']."'";
endif; 
if($values['FXSPORT'] >= 3): 
endif; 
  $values['H323_L3_NUMBER'] = $_POST['line3_h323_phone_num'] ;
  $updatesql.=",H323_L3_NUMBER='".$values['H323_L3_NUMBER']."'";
  $values['H323_L3_H323_ID'] = $_POST['line3_h323_id'] ;
  $updatesql.=",H323_L3_H323_ID='".$values['H323_L3_H323_ID']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_L3_GKADDR'] = $_POST['line3_gk_addr'] ;
  $updatesql.=",H323_L3_GKADDR='".$values['H323_L3_GKADDR']."'";
endif; 
  $values['H323_L3_VOS_ENABLE'] = $_POST['line3_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_L3_VOS_ENABLE='".$values['H323_L3_VOS_ENABLE']."'";
if($values['H323_L3_VOS_ENABLE'] == 1):
  $values['H323_L3_VOS_MODE'] = $_POST['line3_vos_mod'] ;
  $updatesql.=",H323_L3_VOS_MODE='".$values['H323_L3_VOS_MODE']."'";
endif; 
  $values['H323_L3_AUTH'] = $_POST['line3_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_L3_AUTH='".$values['H323_L3_AUTH']."'";
if($values['H323_L3_AUTH'] == 1):
  $values['H323_L3_H235_ID'] = $_POST['line3_h235_id'] ;
  $updatesql.=",H323_L3_H235_ID='".$values['H323_L3_H235_ID']."'";
  $values['H323_L3_H235_PASSWD'] = $_POST['line3_h235_passwd'] ;
  $updatesql.=",H323_L3_H235_PASSWD='".$values['H323_L3_H235_PASSWD']."'";
endif; 
if($values['FXSPORT'] >= 4): 
endif; 
  $values['H323_L4_NUMBER'] = $_POST['line4_h323_phone_num'] ;
  $updatesql.=",H323_L4_NUMBER='".$values['H323_L4_NUMBER']."'";
  $values['H323_L4_H323_ID'] = $_POST['line4_h323_id'] ;
  $updatesql.=",H323_L4_H323_ID='".$values['H323_L4_H323_ID']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_L4_GKADDR'] = $_POST['line4_gk_addr'] ;
  $updatesql.=",H323_L4_GKADDR='".$values['H323_L4_GKADDR']."'";
endif; 
  $values['H323_L4_VOS_ENABLE'] = $_POST['line4_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_L4_VOS_ENABLE='".$values['H323_L4_VOS_ENABLE']."'";
if($values['H323_L4_VOS_ENABLE'] == 1):
  $values['H323_L4_VOS_MODE'] = $_POST['line4_vos_mod'] ;
  $updatesql.=",H323_L4_VOS_MODE='".$values['H323_L4_VOS_MODE']."'";
endif; 
  $values['H323_L4_AUTH'] = $_POST['line4_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_L4_AUTH='".$values['H323_L4_AUTH']."'";
if($values['H323_L4_AUTH'] == 1):
  $values['H323_L4_H235_ID'] = $_POST['line4_h235_id'] ;
  $updatesql.=",H323_L4_H235_ID='".$values['H323_L4_H235_ID']."'";
  $values['H323_L4_H235_PASSWD'] = $_POST['line4_h235_passwd'] ;
  $updatesql.=",H323_L4_H235_PASSWD='".$values['H323_L4_H235_PASSWD']."'";
endif; 
else:
/*h323_fxs*/
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
if($values['FXSPORT'] > 1): 
  $values['H323_CONFIG_MODE'] = $_POST['h323_config_mode'] ;
  $updatesql.=",H323_CONFIG_MODE='".$values['H323_CONFIG_MODE']."'";
endif; 
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
endif; 
if($values['FXSPORT'] > 1): 
endif; 
if($values['H323_CONFIG_MODE'] == 'LINE_MODE'):
  $values['H323_LINE1_NUMBER'] = $_POST['l1_h323_phone_num'] ;
  $updatesql.=",H323_LINE1_NUMBER='".$values['H323_LINE1_NUMBER']."'";
  $values['H323_LINE1_H323_ID'] = $_POST['l1_h323_id'] ;
  $updatesql.=",H323_LINE1_H323_ID='".$values['H323_LINE1_H323_ID']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_LINE1_GKADDR'] = $_POST['l1_gk_addr'] ;
  $updatesql.=",H323_LINE1_GKADDR='".$values['H323_LINE1_GKADDR']."'";
endif; 
  $values['H323_LINE1_VOS_ENABLE'] = $_POST['l1_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_LINE1_VOS_ENABLE='".$values['H323_LINE1_VOS_ENABLE']."'";
if($values['H323_LINE1_VOS_ENABLE'] == 1):
  $values['H323_LINE1_VOS_MODE'] = $_POST['l1_vos_mod'] ;
  $updatesql.=",H323_LINE1_VOS_MODE='".$values['H323_LINE1_VOS_MODE']."'";
endif; 
  $values['H323_LINE1_AUTH'] = $_POST['l1_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_LINE1_AUTH='".$values['H323_LINE1_AUTH']."'";
if($values['H323_LINE1_AUTH'] == 1):
  $values['H323_LINE1_H235_ID'] = $_POST['l1_h235_id'] ;
  $updatesql.=",H323_LINE1_H235_ID='".$values['H323_LINE1_H235_ID']."'";
  $values['H323_LINE1_H235_PASSWD'] = $_POST['l1_h235_passwd'] ;
  $updatesql.=",H323_LINE1_H235_PASSWD='".$values['H323_LINE1_H235_PASSWD']."'";
endif; 
if($values['FXSPORT'] >= 2): 
endif; 
  $values['H323_LINE2_NUMBER'] = $_POST['l2_h323_phone_num'] ;
  $updatesql.=",H323_LINE2_NUMBER='".$values['H323_LINE2_NUMBER']."'";
  $values['H323_LINE2_H323_ID'] = $_POST['l2_h323_id'] ;
  $updatesql.=",H323_LINE2_H323_ID='".$values['H323_LINE2_H323_ID']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_LINE2_GKADDR'] = $_POST['l2_gk_addr'] ;
  $updatesql.=",H323_LINE2_GKADDR='".$values['H323_LINE2_GKADDR']."'";
endif; 
  $values['H323_LINE2_VOS_ENABLE'] = $_POST['l2_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_LINE2_VOS_ENABLE='".$values['H323_LINE2_VOS_ENABLE']."'";
if($values['H323_LINE2_VOS_ENABLE'] == 1):
  $values['H323_LINE2_VOS_MODE'] = $_POST['l2_vos_mod'] ;
  $updatesql.=",H323_LINE2_VOS_MODE='".$values['H323_LINE2_VOS_MODE']."'";
endif; 
  $values['H323_LINE2_AUTH'] = $_POST['l2_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_LINE2_AUTH='".$values['H323_LINE2_AUTH']."'";
if($values['H323_LINE2_AUTH'] == 1):
  $values['H323_LINE2_H235_ID'] = $_POST['l2_h235_id'] ;
  $updatesql.=",H323_LINE2_H235_ID='".$values['H323_LINE2_H235_ID']."'";
  $values['H323_LINE2_H235_PASSWD'] = $_POST['l2_h235_passwd'] ;
  $updatesql.=",H323_LINE2_H235_PASSWD='".$values['H323_LINE2_H235_PASSWD']."'";
endif; 
if($values['FXSPORT'] >= 3): 
endif; 
  $values['H323_LINE3_NUMBER'] = $_POST['l3_h323_phone_num'] ;
  $updatesql.=",H323_LINE3_NUMBER='".$values['H323_LINE3_NUMBER']."'";
  $values['H323_LINE3_H323_ID'] = $_POST['l3_h323_id'] ;
  $updatesql.=",H323_LINE3_H323_ID='".$values['H323_LINE3_H323_ID']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_LINE3_GKADDR'] = $_POST['l3_gk_addr'] ;
  $updatesql.=",H323_LINE3_GKADDR='".$values['H323_LINE3_GKADDR']."'";
endif; 
  $values['H323_LINE3_VOS_ENABLE'] = $_POST['l3_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_LINE3_VOS_ENABLE='".$values['H323_LINE3_VOS_ENABLE']."'";
if($values['H323_LINE3_VOS_ENABLE'] == 1):
  $values['H323_LINE3_VOS_MODE'] = $_POST['l3_vos_mod'] ;
  $updatesql.=",H323_LINE3_VOS_MODE='".$values['H323_LINE3_VOS_MODE']."'";
endif; 
  $values['H323_LINE3_AUTH'] = $_POST['l3_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_LINE3_AUTH='".$values['H323_LINE3_AUTH']."'";
if($values['H323_LINE3_AUTH'] == 1):
  $values['H323_LINE3_H235_ID'] = $_POST['l3_h235_id'] ;
  $updatesql.=",H323_LINE3_H235_ID='".$values['H323_LINE3_H235_ID']."'";
  $values['H323_LINE3_H235_PASSWD'] = $_POST['l3_h235_passwd'] ;
  $updatesql.=",H323_LINE3_H235_PASSWD='".$values['H323_LINE3_H235_PASSWD']."'";
endif; 
if($values['FXSPORT'] >= 4): 
endif; 
  $values['H323_LINE4_NUMBER'] = $_POST['l4_h323_phone_num'] ;
  $updatesql.=",H323_LINE4_NUMBER='".$values['H323_LINE4_NUMBER']."'";
  $values['H323_LINE4_H323_ID'] = $_POST['l4_h323_id'] ;
  $updatesql.=",H323_LINE4_H323_ID='".$values['H323_LINE4_H323_ID']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_LINE4_GKADDR'] = $_POST['l4_gk_addr'] ;
  $updatesql.=",H323_LINE4_GKADDR='".$values['H323_LINE4_GKADDR']."'";
endif; 
  $values['H323_LINE4_VOS_ENABLE'] = $_POST['l4_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_LINE4_VOS_ENABLE='".$values['H323_LINE4_VOS_ENABLE']."'";
if($values['H323_LINE4_VOS_ENABLE'] == 1):
  $values['H323_LINE4_VOS_MODE'] = $_POST['l4_vos_mod'] ;
  $updatesql.=",H323_LINE4_VOS_MODE='".$values['H323_LINE4_VOS_MODE']."'";
endif; 
  $values['H323_LINE4_AUTH'] = $_POST['l4_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_LINE4_AUTH='".$values['H323_LINE4_AUTH']."'";
if($values['H323_LINE4_AUTH'] == 1):
  $values['H323_LINE4_H235_ID'] = $_POST['l4_h235_id'] ;
  $updatesql.=",H323_LINE4_H235_ID='".$values['H323_LINE4_H235_ID']."'";
  $values['H323_LINE4_H235_PASSWD'] = $_POST['l4_h235_passwd'] ;
  $updatesql.=",H323_LINE4_H235_PASSWD='".$values['H323_LINE4_H235_PASSWD']."'";
endif; 
endif; 
if($values['H323_CONFIG_MODE'] == 'GROUP_MODE'):
  $values['H323_GROUP1_NUMBER'] = $_POST['group1_h323_phone_num'] ;
  $updatesql.=",H323_GROUP1_NUMBER='".$values['H323_GROUP1_NUMBER']."'";
  $values['H323_GROUP1_H323_ID'] = $_POST['group1_h323_id'] ;
  $updatesql.=",H323_GROUP1_H323_ID='".$values['H323_GROUP1_H323_ID']."'";
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
if($values['FXSPORT'] >= 2): 
  $values['H323_L2_IN_G1'] = $_POST['h323_line2_in_group1']=='on'?'1':'0';
  $updatesql.=",H323_L2_IN_G1='".$values['H323_L2_IN_G1']."'";
endif; 
if($values['FXSPORT'] >= 3): 
  $values['H323_L3_IN_G1'] = $_POST['h323_line3_in_group1']=='on'?'1':'0';
  $updatesql.=",H323_L3_IN_G1='".$values['H323_L3_IN_G1']."'";
endif; 
if($values['FXSPORT'] >= 4): 
  $values['H323_L4_IN_G1'] = $_POST['h323_line4_in_group1']=='on'?'1':'0';
  $updatesql.=",H323_L4_IN_G1='".$values['H323_L4_IN_G1']."'";
endif; 
  $values['H323_GROUP2_NUMBER'] = $_POST['group2_h323_phone_num'] ;
  $updatesql.=",H323_GROUP2_NUMBER='".$values['H323_GROUP2_NUMBER']."'";
  $values['H323_GROUP2_H323_ID'] = $_POST['group2_h323_id'] ;
  $updatesql.=",H323_GROUP2_H323_ID='".$values['H323_GROUP2_H323_ID']."'";
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
if($values['FXSPORT'] >= 2): 
  $values['H323_L2_IN_G2'] = $_POST['h323_line2_in_group2']=='on'?'1':'0';
  $updatesql.=",H323_L2_IN_G2='".$values['H323_L2_IN_G2']."'";
endif; 
if($values['FXSPORT'] >= 3): 
  $values['H323_L3_IN_G2'] = $_POST['h323_line3_in_group2']=='on'?'1':'0';
  $updatesql.=",H323_L3_IN_G2='".$values['H323_L3_IN_G2']."'";
endif; 
if($values['FXSPORT'] >= 4): 
  $values['H323_L4_IN_G2'] = $_POST['h323_line4_in_group2']=='on'?'1':'0';
  $updatesql.=",H323_L4_IN_G2='".$values['H323_L4_IN_G2']."'";
endif; 
if($values['FXSPORT'] >= 3): 
endif; 
  $values['H323_GROUP3_NUMBER'] = $_POST['group3_h323_phone_num'] ;
  $updatesql.=",H323_GROUP3_NUMBER='".$values['H323_GROUP3_NUMBER']."'";
  $values['H323_GROUP3_H323_ID'] = $_POST['group3_h323_id'] ;
  $updatesql.=",H323_GROUP3_H323_ID='".$values['H323_GROUP3_H323_ID']."'";
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
if($values['FXSPORT'] >= 2): 
  $values['H323_L2_IN_G3'] = $_POST['h323_line2_in_group3']=='on'?'1':'0';
  $updatesql.=",H323_L2_IN_G3='".$values['H323_L2_IN_G3']."'";
endif; 
if($values['FXSPORT'] >= 3): 
  $values['H323_L3_IN_G3'] = $_POST['h323_line3_in_group3']=='on'?'1':'0';
  $updatesql.=",H323_L3_IN_G3='".$values['H323_L3_IN_G3']."'";
endif; 
if($values['FXSPORT'] >= 4): 
  $values['H323_L4_IN_G3'] = $_POST['h323_line4_in_group3']=='on'?'1':'0';
  $updatesql.=",H323_L4_IN_G3='".$values['H323_L4_IN_G3']."'";
endif; 
if($values['FXSPORT'] >= 4): 
endif; 
  $values['H323_GROUP4_NUMBER'] = $_POST['group4_h323_phone_num'] ;
  $updatesql.=",H323_GROUP4_NUMBER='".$values['H323_GROUP4_NUMBER']."'";
  $values['H323_GROUP4_H323_ID'] = $_POST['group4_h323_id'] ;
  $updatesql.=",H323_GROUP4_H323_ID='".$values['H323_GROUP4_H323_ID']."'";
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
if($values['FXSPORT'] >= 2): 
  $values['H323_L2_IN_G4'] = $_POST['h323_line2_in_group4']=='on'?'1':'0';
  $updatesql.=",H323_L2_IN_G4='".$values['H323_L2_IN_G4']."'";
endif; 
if($values['FXSPORT'] >= 3): 
  $values['H323_L3_IN_G4'] = $_POST['h323_line3_in_group4']=='on'?'1':'0';
  $updatesql.=",H323_L3_IN_G4='".$values['H323_L3_IN_G4']."'";
endif; 
if($values['FXSPORT'] >= 4): 
  $values['H323_L4_IN_G4'] = $_POST['h323_line4_in_group4']=='on'?'1':'0';
  $updatesql.=",H323_L4_IN_G4='".$values['H323_L4_IN_G4']."'";
endif; 
endif; 
/*end h323_fxs*/
/* h323_fxo*/

/*end h323_fxo*/
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
if($values['FXOPORT'] > 1): 
  $values['H323_FXO_CONFIG_MODE'] = $_POST['fxo_h323_config_mode'] ;
  $updatesql.=",H323_FXO_CONFIG_MODE='".$values['H323_FXO_CONFIG_MODE']."'";
endif; 
if($values['H323_FXO_CONFIG_MODE'] == 'SINGLE_MODE'):
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
  $values['H235_AUTH'] = $_POST['fxo_h235_auth']=='on'?'1':'0';
  $updatesql.=",H235_AUTH='".$values['H235_AUTH']."'";
if($values['H235_AUTH'] == 1):
  $values['H235_FXO_ID'] = $_POST['fxo_h235_id'] ;
  $updatesql.=",H235_FXO_ID='".$values['H235_FXO_ID']."'";
  $values['H235_FXO_PASSWD'] = $_POST['fxo_h235_passwd'] ;
  $updatesql.=",H235_FXO_PASSWD='".$values['H235_FXO_PASSWD']."'";
endif; 
endif; 
if($values['FXOPORT'] > 1): 
endif; 
if($values['H323_FXO_CONFIG_MODE'] == 'LINE_MODE'):
  $values['H323_FXO_LINE1_NUMBER'] = $_POST['fxo_l1_h323_phone_num'] ;
  $updatesql.=",H323_FXO_LINE1_NUMBER='".$values['H323_FXO_LINE1_NUMBER']."'";
  $values['H323_FXO_LINE1_H323_ID'] = $_POST['fxo_l1_h323_id'] ;
  $updatesql.=",H323_FXO_LINE1_H323_ID='".$values['H323_FXO_LINE1_H323_ID']."'";
  $values['H323_FXO_LINE1_GW_PREFIX'] = $_POST['fxo_l1_h323_gw_prefix'] ;
  $updatesql.=",H323_FXO_LINE1_GW_PREFIX='".$values['H323_FXO_LINE1_GW_PREFIX']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_FXO_LINE1_GKADDR'] = $_POST['fxo_l1_gk_addr'] ;
  $updatesql.=",H323_FXO_LINE1_GKADDR='".$values['H323_FXO_LINE1_GKADDR']."'";
endif; 
  $values['H323_FXO_LINE1_VOS_ENABLE'] = $_POST['fxo_l1_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_FXO_LINE1_VOS_ENABLE='".$values['H323_FXO_LINE1_VOS_ENABLE']."'";
if($values['H323_FXO_LINE1_VOS_ENABLE'] == 1):
  $values['H323_FXO_LINE1_VOS_MODE'] = $_POST['fxo_l1_vos_mod'] ;
  $updatesql.=",H323_FXO_LINE1_VOS_MODE='".$values['H323_FXO_LINE1_VOS_MODE']."'";
endif; 
  $values['H323_FXO_LINE1_AUTH'] = $_POST['fxo_l1_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_FXO_LINE1_AUTH='".$values['H323_FXO_LINE1_AUTH']."'";
if($values['H323_FXO_LINE1_AUTH'] == 1):
  $values['H323_FXO_LINE1_H235_ID'] = $_POST['fxo_l1_h235_id'] ;
  $updatesql.=",H323_FXO_LINE1_H235_ID='".$values['H323_FXO_LINE1_H235_ID']."'";
  $values['H323_FXO_LINE1_H235_PASSWD'] = $_POST['fxo_l1_h235_passwd'] ;
  $updatesql.=",H323_FXO_LINE1_H235_PASSWD='".$values['H323_FXO_LINE1_H235_PASSWD']."'";
endif; 
if($values['FXOPORT'] >= 2): 
endif; 
  $values['H323_FXO_LINE2_NUMBER'] = $_POST['fxo_l2_h323_phone_num'] ;
  $updatesql.=",H323_FXO_LINE2_NUMBER='".$values['H323_FXO_LINE2_NUMBER']."'";
  $values['H323_FXO_LINE2_H323_ID'] = $_POST['fxo_l2_h323_id'] ;
  $updatesql.=",H323_FXO_LINE2_H323_ID='".$values['H323_FXO_LINE2_H323_ID']."'";
  $values['H323_FXO_LINE2_GW_PREFIX'] = $_POST['fxo_l2_h323_gw_prefix'] ;
  $updatesql.=",H323_FXO_LINE2_GW_PREFIX='".$values['H323_FXO_LINE2_GW_PREFIX']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_FXO_LINE2_GKADDR'] = $_POST['fxo_l2_gk_addr'] ;
  $updatesql.=",H323_FXO_LINE2_GKADDR='".$values['H323_FXO_LINE2_GKADDR']."'";
endif; 
  $values['H323_FXO_LINE2_VOS_ENABLE'] = $_POST['fxo_l2_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_FXO_LINE2_VOS_ENABLE='".$values['H323_FXO_LINE2_VOS_ENABLE']."'";
if($values['H323_FXO_LINE2_VOS_ENABLE'] == 1):
  $values['H323_FXO_LINE2_VOS_MODE'] = $_POST['fxo_l2_vos_mod'] ;
  $updatesql.=",H323_FXO_LINE2_VOS_MODE='".$values['H323_FXO_LINE2_VOS_MODE']."'";
endif; 
  $values['H323_FXO_LINE2_AUTH'] = $_POST['fxo_l2_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_FXO_LINE2_AUTH='".$values['H323_FXO_LINE2_AUTH']."'";
if($values['H323_FXO_LINE2_AUTH'] == 1):
  $values['H323_FXO_LINE2_H235_ID'] = $_POST['fxo_l2_h235_id'] ;
  $updatesql.=",H323_FXO_LINE2_H235_ID='".$values['H323_FXO_LINE2_H235_ID']."'";
  $values['H323_FXO_LINE2_H235_PASSWD'] = $_POST['fxo_l2_h235_passwd'] ;
  $updatesql.=",H323_FXO_LINE2_H235_PASSWD='".$values['H323_FXO_LINE2_H235_PASSWD']."'";
endif; 
if($values['FXOPORT'] >= 3): 
endif; 
  $values['H323_FXO_LINE3_NUMBER'] = $_POST['fxo_l3_h323_phone_num'] ;
  $updatesql.=",H323_FXO_LINE3_NUMBER='".$values['H323_FXO_LINE3_NUMBER']."'";
  $values['H323_FXO_LINE3_H323_ID'] = $_POST['fxo_l3_h323_id'] ;
  $updatesql.=",H323_FXO_LINE3_H323_ID='".$values['H323_FXO_LINE3_H323_ID']."'";
  $values['H323_FXO_LINE3_GW_PREFIX'] = $_POST['fxo_l3_h323_gw_prefix'] ;
  $updatesql.=",H323_FXO_LINE3_GW_PREFIX='".$values['H323_FXO_LINE3_GW_PREFIX']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_FXO_LINE3_GKADDR'] = $_POST['fxo_l3_gk_addr'] ;
  $updatesql.=",H323_FXO_LINE3_GKADDR='".$values['H323_FXO_LINE3_GKADDR']."'";
endif; 
  $values['H323_FXO_LINE3_VOS_ENABLE'] = $_POST['fxo_l3_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_FXO_LINE3_VOS_ENABLE='".$values['H323_FXO_LINE3_VOS_ENABLE']."'";
if($values['H323_FXO_LINE3_VOS_ENABLE'] == 1):
  $values['H323_FXO_LINE3_VOS_MODE'] = $_POST['fxo_l3_vos_mod'] ;
  $updatesql.=",H323_FXO_LINE3_VOS_MODE='".$values['H323_FXO_LINE3_VOS_MODE']."'";
endif; 
  $values['H323_FXO_LINE3_AUTH'] = $_POST['fxo_l3_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_FXO_LINE3_AUTH='".$values['H323_FXO_LINE3_AUTH']."'";
if($values['H323_FXO_LINE3_AUTH'] == 1):
  $values['H323_FXO_LINE3_H235_ID'] = $_POST['fxo_l3_h235_id'] ;
  $updatesql.=",H323_FXO_LINE3_H235_ID='".$values['H323_FXO_LINE3_H235_ID']."'";
  $values['H323_FXO_LINE3_H235_PASSWD'] = $_POST['fxo_l3_h235_passwd'] ;
  $updatesql.=",H323_FXO_LINE3_H235_PASSWD='".$values['H323_FXO_LINE3_H235_PASSWD']."'";
endif; 
if($values['FXOPORT'] >= 4): 
endif; 
  $values['H323_FXO_LINE4_NUMBER'] = $_POST['fxo_l4_h323_phone_num'] ;
  $updatesql.=",H323_FXO_LINE4_NUMBER='".$values['H323_FXO_LINE4_NUMBER']."'";
  $values['H323_FXO_LINE4_H323_ID'] = $_POST['fxo_l4_h323_id'] ;
  $updatesql.=",H323_FXO_LINE4_H323_ID='".$values['H323_FXO_LINE4_H323_ID']."'";
  $values['H323_FXO_LINE4_GW_PREFIX'] = $_POST['fxo_l4_h323_gw_prefix'] ;
  $updatesql.=",H323_FXO_LINE4_GW_PREFIX='".$values['H323_FXO_LINE4_GW_PREFIX']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_FXO_LINE4_GKADDR'] = $_POST['fxo_l4_gk_addr'] ;
  $updatesql.=",H323_FXO_LINE4_GKADDR='".$values['H323_FXO_LINE4_GKADDR']."'";
endif; 
  $values['H323_FXO_LINE4_VOS_ENABLE'] = $_POST['fxo_l4_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_FXO_LINE4_VOS_ENABLE='".$values['H323_FXO_LINE4_VOS_ENABLE']."'";
if($values['H323_FXO_LINE4_VOS_ENABLE'] == 1):
  $values['H323_FXO_LINE4_VOS_MODE'] = $_POST['fxo_l4_vos_mod'] ;
  $updatesql.=",H323_FXO_LINE4_VOS_MODE='".$values['H323_FXO_LINE4_VOS_MODE']."'";
endif; 
  $values['H323_FXO_LINE4_AUTH'] = $_POST['fxo_l4_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_FXO_LINE4_AUTH='".$values['H323_FXO_LINE4_AUTH']."'";
if($values['H323_FXO_LINE4_AUTH'] == 1):
  $values['H323_FXO_LINE4_H235_ID'] = $_POST['fxo_l4_h235_id'] ;
  $updatesql.=",H323_FXO_LINE4_H235_ID='".$values['H323_FXO_LINE4_H235_ID']."'";
  $values['H323_FXO_LINE4_H235_PASSWD'] = $_POST['fxo_l4_h235_passwd'] ;
  $updatesql.=",H323_FXO_LINE4_H235_PASSWD='".$values['H323_FXO_LINE4_H235_PASSWD']."'";
endif; 
endif; 
if($values['H323_FXO_CONFIG_MODE'] == 'GROUP_MODE'):
  $values['H323_FXO_GROUP1_NUMBER'] = $_POST['fxo_group1_h323_phone_num'] ;
  $updatesql.=",H323_FXO_GROUP1_NUMBER='".$values['H323_FXO_GROUP1_NUMBER']."'";
  $values['H323_FXO_GROUP1_H323_ID'] = $_POST['fxo_group1_h323_id'] ;
  $updatesql.=",H323_FXO_GROUP1_H323_ID='".$values['H323_FXO_GROUP1_H323_ID']."'";
  $values['H323_FXO_GROUP1_GW_PREFIX'] = $_POST['fxo_group1_h323_gw_prefix'] ;
  $updatesql.=",H323_FXO_GROUP1_GW_PREFIX='".$values['H323_FXO_GROUP1_GW_PREFIX']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_FXO_GROUP1_GKADDR'] = $_POST['fxo_group1_gk_addr'] ;
  $updatesql.=",H323_FXO_GROUP1_GKADDR='".$values['H323_FXO_GROUP1_GKADDR']."'";
endif; 
  $values['H323_FXO_G1_VOS_ENABLE'] = $_POST['fxo_group1_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_FXO_G1_VOS_ENABLE='".$values['H323_FXO_G1_VOS_ENABLE']."'";
if($values['H323_FXO_G1_VOS_ENABLE'] == 1):
  $values['H323_FXO_G1_VOS_MODE'] = $_POST['fxo_group1_vos_mod'] ;
  $updatesql.=",H323_FXO_G1_VOS_MODE='".$values['H323_FXO_G1_VOS_MODE']."'";
endif; 
  $values['H323_FXO_GROUP1_AUTH'] = $_POST['fxo_group1_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_FXO_GROUP1_AUTH='".$values['H323_FXO_GROUP1_AUTH']."'";
if($values['H323_FXO_GROUP1_AUTH'] == 1):
  $values['H323_FXO_GROUP1_H235_ID'] = $_POST['fxo_group1_h235_id'] ;
  $updatesql.=",H323_FXO_GROUP1_H235_ID='".$values['H323_FXO_GROUP1_H235_ID']."'";
  $values['H323_FXO_GROUP1_H235_PASSWD'] = $_POST['fxo_group1_h235_passwd'] ;
  $updatesql.=",H323_FXO_GROUP1_H235_PASSWD='".$values['H323_FXO_GROUP1_H235_PASSWD']."'";
endif; 
  $values['H323_FXO_L1_IN_G1'] = $_POST['fxo_h323_line1_in_group1']=='on'?'1':'0';
  $updatesql.=",H323_FXO_L1_IN_G1='".$values['H323_FXO_L1_IN_G1']."'";
if($values['FXOPORT'] >= 2): 
  $values['H323_FXO_L2_IN_G1'] = $_POST['fxo_h323_line2_in_group1']=='on'?'1':'0';
  $updatesql.=",H323_FXO_L2_IN_G1='".$values['H323_FXO_L2_IN_G1']."'";
endif; 
if($values['FXOPORT'] >= 3): 
  $values['H323_FXO_L3_IN_G1'] = $_POST['fxo_h323_line3_in_group1']=='on'?'1':'0';
  $updatesql.=",H323_FXO_L3_IN_G1='".$values['H323_FXO_L3_IN_G1']."'";
endif; 
if($values['FXOPORT'] >= 4): 
  $values['H323_FXO_L4_IN_G1'] = $_POST['fxo_h323_line4_in_group1']=='on'?'1':'0';
  $updatesql.=",H323_FXO_L4_IN_G1='".$values['H323_FXO_L4_IN_G1']."'";
endif; 
  $values['H323_FXO_GROUP2_NUMBER'] = $_POST['fxo_group2_h323_phone_num'] ;
  $updatesql.=",H323_FXO_GROUP2_NUMBER='".$values['H323_FXO_GROUP2_NUMBER']."'";
  $values['H323_FXO_GROUP2_H323_ID'] = $_POST['fxo_group2_h323_id'] ;
  $updatesql.=",H323_FXO_GROUP2_H323_ID='".$values['H323_FXO_GROUP2_H323_ID']."'";
  $values['H323_FXO_GROUP2_GW_PREFIX'] = $_POST['fxo_group2_h323_gw_prefix'] ;
  $updatesql.=",H323_FXO_GROUP2_GW_PREFIX='".$values['H323_FXO_GROUP2_GW_PREFIX']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_FXO_GROUP2_GKADDR'] = $_POST['fxo_group2_gk_addr'] ;
  $updatesql.=",H323_FXO_GROUP2_GKADDR='".$values['H323_FXO_GROUP2_GKADDR']."'";
endif; 
  $values['H323_FXO_G2_VOS_ENABLE'] = $_POST['fxo_group2_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_FXO_G2_VOS_ENABLE='".$values['H323_FXO_G2_VOS_ENABLE']."'";
if($values['H323_FXO_G2_VOS_ENABLE'] == 1):
  $values['H323_FXO_G2_VOS_MODE'] = $_POST['fxo_group2_vos_mod'] ;
  $updatesql.=",H323_FXO_G2_VOS_MODE='".$values['H323_FXO_G2_VOS_MODE']."'";
endif; 
  $values['H323_FXO_GROUP2_AUTH'] = $_POST['fxo_group2_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_FXO_GROUP2_AUTH='".$values['H323_FXO_GROUP2_AUTH']."'";
if($values['H323_FXO_GROUP2_AUTH'] == 1):
  $values['H323_FXO_GROUP2_H235_ID'] = $_POST['fxo_group2_h235_id'] ;
  $updatesql.=",H323_FXO_GROUP2_H235_ID='".$values['H323_FXO_GROUP2_H235_ID']."'";
  $values['H323_FXO_GROUP2_H235_PASSWD'] = $_POST['fxo_group2_h235_passwd'] ;
  $updatesql.=",H323_FXO_GROUP2_H235_PASSWD='".$values['H323_FXO_GROUP2_H235_PASSWD']."'";
endif; 
  $values['H323_FXO_L1_IN_G2'] = $_POST['fxo_h323_line1_in_group2']=='on'?'1':'0';
  $updatesql.=",H323_FXO_L1_IN_G2='".$values['H323_FXO_L1_IN_G2']."'";
if($values['FXOPORT'] >= 2): 
  $values['H323_FXO_L2_IN_G2'] = $_POST['fxo_h323_line2_in_group2']=='on'?'1':'0';
  $updatesql.=",H323_FXO_L2_IN_G2='".$values['H323_FXO_L2_IN_G2']."'";
endif; 
if($values['FXOPORT'] >= 3): 
  $values['H323_FXO_L3_IN_G2'] = $_POST['fxo_h323_line3_in_group2']=='on'?'1':'0';
  $updatesql.=",H323_FXO_L3_IN_G2='".$values['H323_FXO_L3_IN_G2']."'";
endif; 
if($values['FXOPORT'] >= 4): 
  $values['H323_FXO_L4_IN_G2'] = $_POST['fxo_h323_line4_in_group2']=='on'?'1':'0';
  $updatesql.=",H323_FXO_L4_IN_G2='".$values['H323_FXO_L4_IN_G2']."'";
endif; 
if($values['FXOPORT'] >= 3): 
endif; 
  $values['H323_FXO_GROUP3_NUMBER'] = $_POST['fxo_group3_h323_phone_num'] ;
  $updatesql.=",H323_FXO_GROUP3_NUMBER='".$values['H323_FXO_GROUP3_NUMBER']."'";
  $values['H323_FXO_GROUP3_H323_ID'] = $_POST['fxo_group3_h323_id'] ;
  $updatesql.=",H323_FXO_GROUP3_H323_ID='".$values['H323_FXO_GROUP3_H323_ID']."'";
  $values['H323_FXO_GROUP3_GW_PREFIX'] = $_POST['fxo_group3_h323_gw_prefix'] ;
  $updatesql.=",H323_FXO_GROUP3_GW_PREFIX='".$values['H323_FXO_GROUP3_GW_PREFIX']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_FXO_GROUP3_GKADDR'] = $_POST['fxo_group3_gk_addr'] ;
  $updatesql.=",H323_FXO_GROUP3_GKADDR='".$values['H323_FXO_GROUP3_GKADDR']."'";
endif; 
  $values['H323_FXO_G3_VOS_ENABLE'] = $_POST['fxo_group3_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_FXO_G3_VOS_ENABLE='".$values['H323_FXO_G3_VOS_ENABLE']."'";
if($values['H323_FXO_G3_VOS_ENABLE'] == 1):
  $values['H323_FXO_G3_VOS_MODE'] = $_POST['fxo_group3_vos_mod'] ;
  $updatesql.=",H323_FXO_G3_VOS_MODE='".$values['H323_FXO_G3_VOS_MODE']."'";
endif; 
  $values['H323_FXO_GROUP3_AUTH'] = $_POST['fxo_group3_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_FXO_GROUP3_AUTH='".$values['H323_FXO_GROUP3_AUTH']."'";
if($values['H323_FXO_GROUP3_AUTH'] == 1):
  $values['H323_FXO_GROUP3_H235_ID'] = $_POST['fxo_group3_h235_id'] ;
  $updatesql.=",H323_FXO_GROUP3_H235_ID='".$values['H323_FXO_GROUP3_H235_ID']."'";
  $values['H323_FXO_GROUP3_H235_PASSWD'] = $_POST['fxo_group3_h235_passwd'] ;
  $updatesql.=",H323_FXO_GROUP3_H235_PASSWD='".$values['H323_FXO_GROUP3_H235_PASSWD']."'";
endif; 
  $values['H323_FXO_L1_IN_G3'] = $_POST['fxo_h323_line1_in_group3']=='on'?'1':'0';
  $updatesql.=",H323_FXO_L1_IN_G3='".$values['H323_FXO_L1_IN_G3']."'";
if($values['FXOPORT'] >= 2): 
  $values['H323_FXO_L2_IN_G3'] = $_POST['fxo_h323_line2_in_group3']=='on'?'1':'0';
  $updatesql.=",H323_FXO_L2_IN_G3='".$values['H323_FXO_L2_IN_G3']."'";
endif; 
if($values['FXOPORT'] >= 3): 
  $values['H323_FXO_L3_IN_G3'] = $_POST['fxo_h323_line3_in_group3']=='on'?'1':'0';
  $updatesql.=",H323_FXO_L3_IN_G3='".$values['H323_FXO_L3_IN_G3']."'";
endif; 
if($values['FXOPORT'] >= 4): 
  $values['H323_FXO_L4_IN_G3'] = $_POST['fxo_h323_line4_in_group3']=='on'?'1':'0';
  $updatesql.=",H323_FXO_L4_IN_G3='".$values['H323_FXO_L4_IN_G3']."'";
endif; 
if($values['FXOPORT'] >= 4): 
endif; 
  $values['H323_FXO_GROUP4_NUMBER'] = $_POST['fxo_group4_h323_phone_num'] ;
  $updatesql.=",H323_FXO_GROUP4_NUMBER='".$values['H323_FXO_GROUP4_NUMBER']."'";
  $values['H323_FXO_GROUP4_H323_ID'] = $_POST['fxo_group4_h323_id'] ;
  $updatesql.=",H323_FXO_GROUP4_H323_ID='".$values['H323_FXO_GROUP4_H323_ID']."'";
  $values['H323_FXO_GROUP4_GW_PREFIX'] = $_POST['fxo_group4_h323_gw_prefix'] ;
  $updatesql.=",H323_FXO_GROUP4_GW_PREFIX='".$values['H323_FXO_GROUP4_GW_PREFIX']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['H323_FXO_GROUP4_GKADDR'] = $_POST['fxo_group4_gk_addr'] ;
  $updatesql.=",H323_FXO_GROUP4_GKADDR='".$values['H323_FXO_GROUP4_GKADDR']."'";
endif; 
  $values['H323_FXO_G4_VOS_ENABLE'] = $_POST['fxo_group4_vos_enable']=='on'?'1':'0';
  $updatesql.=",H323_FXO_G4_VOS_ENABLE='".$values['H323_FXO_G4_VOS_ENABLE']."'";
if($values['H323_FXO_G4_VOS_ENABLE'] == 1):
  $values['H323_FXO_G4_VOS_MODE'] = $_POST['fxo_group4_vos_mod'] ;
  $updatesql.=",H323_FXO_G4_VOS_MODE='".$values['H323_FXO_G4_VOS_MODE']."'";
endif; 
  $values['H323_FXO_GROUP4_AUTH'] = $_POST['fxo_group4_h235_auth']=='on'?'1':'0';
  $updatesql.=",H323_FXO_GROUP4_AUTH='".$values['H323_FXO_GROUP4_AUTH']."'";
if($values['H323_FXO_GROUP4_AUTH'] == 1):
  $values['H323_FXO_GROUP4_H235_ID'] = $_POST['fxo_group4_h235_id'] ;
  $updatesql.=",H323_FXO_GROUP4_H235_ID='".$values['H323_FXO_GROUP4_H235_ID']."'";
  $values['H323_FXO_GROUP4_H235_PASSWD'] = $_POST['fxo_group4_h235_passwd'] ;
  $updatesql.=",H323_FXO_GROUP4_H235_PASSWD='".$values['H323_FXO_GROUP4_H235_PASSWD']."'";
endif; 
  $values['H323_FXO_L1_IN_G4'] = $_POST['fxo_h323_line1_in_group4']=='on'?'1':'0';
  $updatesql.=",H323_FXO_L1_IN_G4='".$values['H323_FXO_L1_IN_G4']."'";
if($values['FXOPORT'] >= 2): 
  $values['H323_FXO_L2_IN_G4'] = $_POST['fxo_h323_line2_in_group4']=='on'?'1':'0';
  $updatesql.=",H323_FXO_L2_IN_G4='".$values['H323_FXO_L2_IN_G4']."'";
endif; 
if($values['FXOPORT'] >= 3): 
  $values['H323_FXO_L3_IN_G4'] = $_POST['fxo_h323_line3_in_group4']=='on'?'1':'0';
  $updatesql.=",H323_FXO_L3_IN_G4='".$values['H323_FXO_L3_IN_G4']."'";
endif; 
if($values['FXOPORT'] >= 4): 
  $values['H323_FXO_L4_IN_G4'] = $_POST['fxo_h323_line4_in_group4']=='on'?'1':'0';
  $updatesql.=",H323_FXO_L4_IN_G4='".$values['H323_FXO_L4_IN_G4']."'";
endif; 
endif; 
endif;
endif;

if($values['ENDPOINT_TYPE']=='SIP'): 
if($values['FXO_MODE']=='PSTNBYPASS'):
if($values['FXSPORT'] ==1 ): 
endif; 
  $values['SIP_CONTACT2_DIAL_DIGITS'] = $_POST['sip_fxs_l1_number'] ;
  $updatesql.=",SIP_CONTACT2_DIAL_DIGITS='".$values['SIP_CONTACT2_DIAL_DIGITS']."'";
  $values['SIP_CONTACT2_DISPLAY_NAME'] = $_POST['sip_fxs_l1_display_name'] ;
  $updatesql.=",SIP_CONTACT2_DISPLAY_NAME='".$values['SIP_CONTACT2_DISPLAY_NAME']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT2_PROXY'] = $_POST['sip_fxs_l1_proxy'] ;
  $updatesql.=",SIP_CONTACT2_PROXY='".$values['SIP_CONTACT2_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT2_SERVER'] = $_POST['sip_fxs_l1_registrar'] ;
  $updatesql.=",SIP_CONTACT2_SERVER='".$values['SIP_CONTACT2_SERVER']."'";
endif; 
  $values['SIP_CONTACT2_EXPIRED'] = $_POST['sip_fxs_l1_register_expired'] ;
  $updatesql.=",SIP_CONTACT2_EXPIRED='".$values['SIP_CONTACT2_EXPIRED']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT2_OUTBOUND_PROXY'] = $_POST['sip_fxs_l1_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT2_OUTBOUND_PROXY='".$values['SIP_CONTACT2_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT2_HOME_DOMAIN'] = $_POST['sip_fxs_l1_home_domain'] ;
  $updatesql.=",SIP_CONTACT2_HOME_DOMAIN='".$values['SIP_CONTACT2_HOME_DOMAIN']."'";
  $values['SIP_CONTACT2_LOGIN'] = $_POST['sip_fxs_l1_auth_id'] ;
  $updatesql.=",SIP_CONTACT2_LOGIN='".$values['SIP_CONTACT2_LOGIN']."'";
  $values['SIP_CONTACT2_PASSWD'] = $_POST['sip_fxs_l1_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT2_PASSWD='".$values['SIP_CONTACT2_PASSWD']."'";
  $values['SIP_CONTACT2_FORWARD_TYPE'] = $_POST['sip_fxs_l1_fwd_type'] ;
  $updatesql.=",SIP_CONTACT2_FORWARD_TYPE='".$values['SIP_CONTACT2_FORWARD_TYPE']."'";
  $values['SIP_CONTACT2_FORWARD_NUMBER'] = $_POST['sip_fxs_l1_fwd_num'] ;
  $updatesql.=",SIP_CONTACT2_FORWARD_NUMBER='".$values['SIP_CONTACT2_FORWARD_NUMBER']."'";
  $values['SIP_FXS0_USE_BSVR'] = $_POST['sip_fxs_l1_backup_server']=='on'?'1':'0';
  $updatesql.=",SIP_FXS0_USE_BSVR='".$values['SIP_FXS0_USE_BSVR']."'";
if($values['SIP_FXS0_USE_BSVR'] == 1):
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT3_PROXY'] = $_POST['sip_fxs_l1_backup_proxy'] ;
  $updatesql.=",SIP_CONTACT3_PROXY='".$values['SIP_CONTACT3_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT3_SERVER'] = $_POST['sip_fxs_l1_backup_registrar'] ;
  $updatesql.=",SIP_CONTACT3_SERVER='".$values['SIP_CONTACT3_SERVER']."'";
endif; 
  $values['SIP_CONTACT3_HOME_DOMAIN'] = $_POST['sip_fxs_l1_backup_home_domain'] ;
  $updatesql.=",SIP_CONTACT3_HOME_DOMAIN='".$values['SIP_CONTACT3_HOME_DOMAIN']."'";
endif; 
if($values['FXSPORT'] > 1): 
endif; 
  $values['SIP_CONTACT2_DIAL_DIGITS'] = $_POST['sip_fxs_l1_number'] ;
  $updatesql.=",SIP_CONTACT2_DIAL_DIGITS='".$values['SIP_CONTACT2_DIAL_DIGITS']."'";
  $values['SIP_CONTACT2_DISPLAY_NAME'] = $_POST['sip_fxs_l1_display_name'] ;
  $updatesql.=",SIP_CONTACT2_DISPLAY_NAME='".$values['SIP_CONTACT2_DISPLAY_NAME']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT2_PROXY'] = $_POST['sip_fxs_l1_proxy'] ;
  $updatesql.=",SIP_CONTACT2_PROXY='".$values['SIP_CONTACT2_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT2_SERVER'] = $_POST['sip_fxs_l1_registrar'] ;
  $updatesql.=",SIP_CONTACT2_SERVER='".$values['SIP_CONTACT2_SERVER']."'";
endif; 
  $values['SIP_CONTACT2_EXPIRED'] = $_POST['sip_fxs_l1_register_expired'] ;
  $updatesql.=",SIP_CONTACT2_EXPIRED='".$values['SIP_CONTACT2_EXPIRED']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT2_OUTBOUND_PROXY'] = $_POST['sip_fxs_l1_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT2_OUTBOUND_PROXY='".$values['SIP_CONTACT2_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT2_HOME_DOMAIN'] = $_POST['sip_fxs_l1_home_domain'] ;
  $updatesql.=",SIP_CONTACT2_HOME_DOMAIN='".$values['SIP_CONTACT2_HOME_DOMAIN']."'";
  $values['SIP_CONTACT2_LOGIN'] = $_POST['sip_fxs_l1_auth_id'] ;
  $updatesql.=",SIP_CONTACT2_LOGIN='".$values['SIP_CONTACT2_LOGIN']."'";
  $values['SIP_CONTACT2_PASSWD'] = $_POST['sip_fxs_l1_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT2_PASSWD='".$values['SIP_CONTACT2_PASSWD']."'";
  $values['SIP_CONTACT2_FORWARD_TYPE'] = $_POST['sip_fxs_l1_fwd_type'] ;
  $updatesql.=",SIP_CONTACT2_FORWARD_TYPE='".$values['SIP_CONTACT2_FORWARD_TYPE']."'";
  $values['SIP_CONTACT2_FORWARD_NUMBER'] = $_POST['sip_fxs_l1_fwd_num'] ;
  $updatesql.=",SIP_CONTACT2_FORWARD_NUMBER='".$values['SIP_CONTACT2_FORWARD_NUMBER']."'";
  $values['SIP_FXS0_USE_BSVR'] = $_POST['sip_fxs_l1_backup_server']=='on'?'1':'0';
  $updatesql.=",SIP_FXS0_USE_BSVR='".$values['SIP_FXS0_USE_BSVR']."'";
if($values['SIP_FXS0_USE_BSVR'] == 1):
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT3_PROXY'] = $_POST['sip_fxs_l1_backup_proxy'] ;
  $updatesql.=",SIP_CONTACT3_PROXY='".$values['SIP_CONTACT3_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT3_SERVER'] = $_POST['sip_fxs_l1_backup_registrar'] ;
  $updatesql.=",SIP_CONTACT3_SERVER='".$values['SIP_CONTACT3_SERVER']."'";
endif; 
  $values['SIP_CONTACT3_HOME_DOMAIN'] = $_POST['sip_fxs_l1_backup_home_domain'] ;
  $updatesql.=",SIP_CONTACT3_HOME_DOMAIN='".$values['SIP_CONTACT3_HOME_DOMAIN']."'";
endif; 
if($values['FXSPORT'] >= 2): 
endif; 
  $values['SIP_CONTACT4_DIAL_DIGITS'] = $_POST['sip_fxs_l2_number'] ;
  $updatesql.=",SIP_CONTACT4_DIAL_DIGITS='".$values['SIP_CONTACT4_DIAL_DIGITS']."'";
  $values['SIP_CONTACT4_DISPLAY_NAME'] = $_POST['sip_fxs_l2_display_name'] ;
  $updatesql.=",SIP_CONTACT4_DISPLAY_NAME='".$values['SIP_CONTACT4_DISPLAY_NAME']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT4_PROXY'] = $_POST['sip_fxs_l2_proxy'] ;
  $updatesql.=",SIP_CONTACT4_PROXY='".$values['SIP_CONTACT4_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT4_SERVER'] = $_POST['sip_fxs_l2_registrar'] ;
  $updatesql.=",SIP_CONTACT4_SERVER='".$values['SIP_CONTACT4_SERVER']."'";
endif; 
  $values['SIP_CONTACT4_EXPIRED'] = $_POST['sip_fxs_l2_register_expired'] ;
  $updatesql.=",SIP_CONTACT4_EXPIRED='".$values['SIP_CONTACT4_EXPIRED']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT4_OUTBOUND_PROXY'] = $_POST['sip_fxs_l2_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT4_OUTBOUND_PROXY='".$values['SIP_CONTACT4_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT4_HOME_DOMAIN'] = $_POST['sip_fxs_l2_home_domain'] ;
  $updatesql.=",SIP_CONTACT4_HOME_DOMAIN='".$values['SIP_CONTACT4_HOME_DOMAIN']."'";
  $values['SIP_CONTACT4_LOGIN'] = $_POST['sip_fxs_l2_auth_id'] ;
  $updatesql.=",SIP_CONTACT4_LOGIN='".$values['SIP_CONTACT4_LOGIN']."'";
  $values['SIP_CONTACT4_PASSWD'] = $_POST['sip_fxs_l2_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT4_PASSWD='".$values['SIP_CONTACT4_PASSWD']."'";
  $values['SIP_CONTACT4_FORWARD_TYPE'] = $_POST['sip_fxs_l2_fwd_type'] ;
  $updatesql.=",SIP_CONTACT4_FORWARD_TYPE='".$values['SIP_CONTACT4_FORWARD_TYPE']."'";
  $values['SIP_CONTACT4_FORWARD_NUMBER'] = $_POST['sip_fxs_l2_fwd_num'] ;
  $updatesql.=",SIP_CONTACT4_FORWARD_NUMBER='".$values['SIP_CONTACT4_FORWARD_NUMBER']."'";
  $values['SIP_FXS1_USE_BSVR'] = $_POST['sip_fxs_l2_backup_server']=='on'?'1':'0';
  $updatesql.=",SIP_FXS1_USE_BSVR='".$values['SIP_FXS1_USE_BSVR']."'";
if($values['SIP_FXS1_USE_BSVR'] == 1):
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT5_PROXY'] = $_POST['sip_fxs_l2_backup_proxy'] ;
  $updatesql.=",SIP_CONTACT5_PROXY='".$values['SIP_CONTACT5_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT5_SERVER'] = $_POST['sip_fxs_l2_backup_registrar'] ;
  $updatesql.=",SIP_CONTACT5_SERVER='".$values['SIP_CONTACT5_SERVER']."'";
endif; 
  $values['SIP_CONTACT5_HOME_DOMAIN'] = $_POST['sip_fxs_l2_backup_home_domain'] ;
  $updatesql.=",SIP_CONTACT5_HOME_DOMAIN='".$values['SIP_CONTACT5_HOME_DOMAIN']."'";
endif; 
if($values['FXSPORT'] >= 3): 
endif; 
  $values['SIP_CONTACT6_DIAL_DIGITS'] = $_POST['sip_fxs_l3_number'] ;
  $updatesql.=",SIP_CONTACT6_DIAL_DIGITS='".$values['SIP_CONTACT6_DIAL_DIGITS']."'";
  $values['SIP_CONTACT6_DISPLAY_NAME'] = $_POST['sip_fxs_l3_display_name'] ;
  $updatesql.=",SIP_CONTACT6_DISPLAY_NAME='".$values['SIP_CONTACT6_DISPLAY_NAME']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT6_PROXY'] = $_POST['sip_fxs_l3_proxy'] ;
  $updatesql.=",SIP_CONTACT6_PROXY='".$values['SIP_CONTACT6_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT6_SERVER'] = $_POST['sip_fxs_l3_registrar'] ;
  $updatesql.=",SIP_CONTACT6_SERVER='".$values['SIP_CONTACT6_SERVER']."'";
endif; 
  $values['SIP_CONTACT6_EXPIRED'] = $_POST['sip_fxs_l3_register_expired'] ;
  $updatesql.=",SIP_CONTACT6_EXPIRED='".$values['SIP_CONTACT6_EXPIRED']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT6_OUTBOUND_PROXY'] = $_POST['sip_fxs_l3_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT6_OUTBOUND_PROXY='".$values['SIP_CONTACT6_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT6_HOME_DOMAIN'] = $_POST['sip_fxs_l3_home_domain'] ;
  $updatesql.=",SIP_CONTACT6_HOME_DOMAIN='".$values['SIP_CONTACT6_HOME_DOMAIN']."'";
  $values['SIP_CONTACT6_LOGIN'] = $_POST['sip_fxs_l3_auth_id'] ;
  $updatesql.=",SIP_CONTACT6_LOGIN='".$values['SIP_CONTACT6_LOGIN']."'";
  $values['SIP_CONTACT6_PASSWD'] = $_POST['sip_fxs_l3_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT6_PASSWD='".$values['SIP_CONTACT6_PASSWD']."'";
  $values['SIP_CONTACT6_FORWARD_TYPE'] = $_POST['sip_fxs_l3_fwd_type'] ;
  $updatesql.=",SIP_CONTACT6_FORWARD_TYPE='".$values['SIP_CONTACT6_FORWARD_TYPE']."'";
  $values['SIP_CONTACT6_FORWARD_NUMBER'] = $_POST['sip_fxs_l3_fwd_num'] ;
  $updatesql.=",SIP_CONTACT6_FORWARD_NUMBER='".$values['SIP_CONTACT6_FORWARD_NUMBER']."'";
  $values['SIP_FXS2_USE_BSVR'] = $_POST['sip_fxs_l3_backup_server']=='on'?'1':'0';
  $updatesql.=",SIP_FXS2_USE_BSVR='".$values['SIP_FXS2_USE_BSVR']."'";
if($values['SIP_FXS2_USE_BSVR'] == 1):
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT7_PROXY'] = $_POST['sip_fxs_l3_backup_proxy'] ;
  $updatesql.=",SIP_CONTACT7_PROXY='".$values['SIP_CONTACT7_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT7_SERVER'] = $_POST['sip_fxs_l3_backup_registrar'] ;
  $updatesql.=",SIP_CONTACT7_SERVER='".$values['SIP_CONTACT7_SERVER']."'";
endif; 
  $values['SIP_CONTACT7_HOME_DOMAIN'] = $_POST['sip_fxs_l3_backup_home_domain'] ;
  $updatesql.=",SIP_CONTACT7_HOME_DOMAIN='".$values['SIP_CONTACT7_HOME_DOMAIN']."'";
endif; 
if($values['FXSPORT'] >= 4): 
endif; 
  $values['SIP_CONTACT8_DIAL_DIGITS'] = $_POST['sip_fxs_l4_number'] ;
  $updatesql.=",SIP_CONTACT8_DIAL_DIGITS='".$values['SIP_CONTACT8_DIAL_DIGITS']."'";
  $values['SIP_CONTACT8_DISPLAY_NAME'] = $_POST['sip_fxs_l4_display_name'] ;
  $updatesql.=",SIP_CONTACT8_DISPLAY_NAME='".$values['SIP_CONTACT8_DISPLAY_NAME']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT8_PROXY'] = $_POST['sip_fxs_l4_proxy'] ;
  $updatesql.=",SIP_CONTACT8_PROXY='".$values['SIP_CONTACT8_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT8_SERVER'] = $_POST['sip_fxs_l4_registrar'] ;
  $updatesql.=",SIP_CONTACT8_SERVER='".$values['SIP_CONTACT8_SERVER']."'";
endif; 
  $values['SIP_CONTACT8_EXPIRED'] = $_POST['sip_fxs_l4_register_expired'] ;
  $updatesql.=",SIP_CONTACT8_EXPIRED='".$values['SIP_CONTACT8_EXPIRED']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT8_OUTBOUND_PROXY'] = $_POST['sip_fxs_l4_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT8_OUTBOUND_PROXY='".$values['SIP_CONTACT8_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT8_HOME_DOMAIN'] = $_POST['sip_fxs_l4_home_domain'] ;
  $updatesql.=",SIP_CONTACT8_HOME_DOMAIN='".$values['SIP_CONTACT8_HOME_DOMAIN']."'";
  $values['SIP_CONTACT8_LOGIN'] = $_POST['sip_fxs_l4_auth_id'] ;
  $updatesql.=",SIP_CONTACT8_LOGIN='".$values['SIP_CONTACT8_LOGIN']."'";
  $values['SIP_CONTACT8_PASSWD'] = $_POST['sip_fxs_l4_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT8_PASSWD='".$values['SIP_CONTACT8_PASSWD']."'";
  $values['SIP_CONTACT8_FORWARD_TYPE'] = $_POST['sip_fxs_l4_fwd_type'] ;
  $updatesql.=",SIP_CONTACT8_FORWARD_TYPE='".$values['SIP_CONTACT8_FORWARD_TYPE']."'";
  $values['SIP_CONTACT8_FORWARD_NUMBER'] = $_POST['sip_fxs_l4_fwd_num'] ;
  $updatesql.=",SIP_CONTACT8_FORWARD_NUMBER='".$values['SIP_CONTACT8_FORWARD_NUMBER']."'";
  $values['SIP_FXS3_USE_BSVR'] = $_POST['sip_fxs_l4_backup_server']=='on'?'1':'0';
  $updatesql.=",SIP_FXS3_USE_BSVR='".$values['SIP_FXS3_USE_BSVR']."'";
if($values['SIP_FXS3_USE_BSVR'] == 1):
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT9_PROXY'] = $_POST['sip_fxs_l4_backup_proxy'] ;
  $updatesql.=",SIP_CONTACT9_PROXY='".$values['SIP_CONTACT9_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT9_SERVER'] = $_POST['sip_fxs_l4_backup_registrar'] ;
  $updatesql.=",SIP_CONTACT9_SERVER='".$values['SIP_CONTACT9_SERVER']."'";
endif; 
  $values['SIP_CONTACT9_HOME_DOMAIN'] = $_POST['sip_fxs_l4_backup_home_domain'] ;
  $updatesql.=",SIP_CONTACT9_HOME_DOMAIN='".$values['SIP_CONTACT9_HOME_DOMAIN']."'";
endif; 	
else: 
/* fxs */   
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
  $values['SIP_CONTACT0_REGISTER_EXPIRED'] = $_POST['sip_fxs_register_expired'] ;
  $updatesql.=",SIP_CONTACT0_REGISTER_EXPIRED='".$values['SIP_CONTACT0_REGISTER_EXPIRED']."'";
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
if($values['FXSPORT'] > 1): 
  $values['SIP_FXS_CONFIG_MODE'] = $_POST['sip_fxs_config_mode'] ;
  $updatesql.=",SIP_FXS_CONFIG_MODE='".$values['SIP_FXS_CONFIG_MODE']."'";
endif; 
if($values['FXSPORT'] > 1): 
endif; 
if($values['SIP_FXS_CONFIG_MODE'] == 'SINGLE_MODE'):
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
  $values['SIP_CONTACT0_REGISTER_EXPIRED'] = $_POST['sip_fxs_register_expired'] ;
  $updatesql.=",SIP_CONTACT0_REGISTER_EXPIRED='".$values['SIP_CONTACT0_REGISTER_EXPIRED']."'";
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
endif; 
if($values['FXSPORT'] > 1): 
endif; 
if($values['SIP_FXS_CONFIG_MODE'] == 'LINE_MODE'):
  $values['SIP_CONTACT2_DIAL_DIGITS'] = $_POST['sip_fxs_line1_number'] ;
  $updatesql.=",SIP_CONTACT2_DIAL_DIGITS='".$values['SIP_CONTACT2_DIAL_DIGITS']."'";
  $values['SIP_CONTACT2_DISPLAY_NAME'] = $_POST['sip_fxs_line1_display_name'] ;
  $updatesql.=",SIP_CONTACT2_DISPLAY_NAME='".$values['SIP_CONTACT2_DISPLAY_NAME']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT2_PROXY'] = $_POST['sip_fxs_line1_proxy'] ;
  $updatesql.=",SIP_CONTACT2_PROXY='".$values['SIP_CONTACT2_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT2_SERVER'] = $_POST['sip_fxs_line1_registrar'] ;
  $updatesql.=",SIP_CONTACT2_SERVER='".$values['SIP_CONTACT2_SERVER']."'";
endif; 
  $values['SIP_CONTACT2_REGISTER_EXPIRED'] = $_POST['sip_fxs_line1_register_expired'] ;
  $updatesql.=",SIP_CONTACT2_REGISTER_EXPIRED='".$values['SIP_CONTACT2_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT2_OUTBOUND_PROXY'] = $_POST['sip_fxs_line1_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT2_OUTBOUND_PROXY='".$values['SIP_CONTACT2_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT2_HOME_DOMAIN'] = $_POST['sip_fxs_line1_home_domain'] ;
  $updatesql.=",SIP_CONTACT2_HOME_DOMAIN='".$values['SIP_CONTACT2_HOME_DOMAIN']."'";
  $values['SIP_CONTACT2_LOGIN'] = $_POST['sip_fxs_line1_auth_id'] ;
  $updatesql.=",SIP_CONTACT2_LOGIN='".$values['SIP_CONTACT2_LOGIN']."'";
  $values['SIP_CONTACT2_PASSWD'] = $_POST['sip_fxs_line1_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT2_PASSWD='".$values['SIP_CONTACT2_PASSWD']."'";
  $values['SIP_CONTACT2_FORWARD_TYPE'] = $_POST['sip_fxs_line1_fwd_type'] ;
  $updatesql.=",SIP_CONTACT2_FORWARD_TYPE='".$values['SIP_CONTACT2_FORWARD_TYPE']."'";
  $values['SIP_CONTACT2_FORWARD_NUMBER'] = $_POST['sip_fxs_line1_fwd_num'] ;
  $updatesql.=",SIP_CONTACT2_FORWARD_NUMBER='".$values['SIP_CONTACT2_FORWARD_NUMBER']."'";
/* dial plan*/
  $values['S1_DIGIT_MAP'] = $_POST['fxs1_dial_plan'] ;
  $updatesql.=",S1_DIGIT_MAP='".$values['S1_DIGIT_MAP']."'";  
  $values['SIP_FXS0_USE_BSVR'] = $_POST['sip_fxs_line1_backup_server']=='on'?'1':'0';
  $updatesql.=",SIP_FXS0_USE_BSVR='".$values['SIP_FXS0_USE_BSVR']."'";
if($values['SIP_FXS0_USE_BSVR'] == 1):
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT3_PROXY'] = $_POST['sip_fxs_line1_backup_proxy'] ;
  $updatesql.=",SIP_CONTACT3_PROXY='".$values['SIP_CONTACT3_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT3_SERVER'] = $_POST['sip_fxs_line1_backup_registrar'] ;
  $updatesql.=",SIP_CONTACT3_SERVER='".$values['SIP_CONTACT3_SERVER']."'";
endif; 

  $values['SIP_CONTACT3_HOME_DOMAIN'] = $_POST['sip_fxs_line1_backup_home_domain'] ;
  $updatesql.=",SIP_CONTACT3_HOME_DOMAIN='".$values['SIP_CONTACT3_HOME_DOMAIN']."'";
endif; 
if($values['FXSPORT'] >= 2): 
endif; 
  $values['SIP_CONTACT4_DIAL_DIGITS'] = $_POST['sip_fxs_line2_number'] ;
  $updatesql.=",SIP_CONTACT4_DIAL_DIGITS='".$values['SIP_CONTACT4_DIAL_DIGITS']."'";
  $values['SIP_CONTACT4_DISPLAY_NAME'] = $_POST['sip_fxs_line2_display_name'] ;
  $updatesql.=",SIP_CONTACT4_DISPLAY_NAME='".$values['SIP_CONTACT4_DISPLAY_NAME']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT4_PROXY'] = $_POST['sip_fxs_line2_proxy'] ;
  $updatesql.=",SIP_CONTACT4_PROXY='".$values['SIP_CONTACT4_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT4_SERVER'] = $_POST['sip_fxs_line2_registrar'] ;
  $updatesql.=",SIP_CONTACT4_SERVER='".$values['SIP_CONTACT4_SERVER']."'";
endif; 
  $values['SIP_CONTACT4_REGISTER_EXPIRED'] = $_POST['sip_fxs_line2_register_expired'] ;
  $updatesql.=",SIP_CONTACT4_REGISTER_EXPIRED='".$values['SIP_CONTACT4_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT4_OUTBOUND_PROXY'] = $_POST['sip_fxs_line2_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT4_OUTBOUND_PROXY='".$values['SIP_CONTACT4_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT4_HOME_DOMAIN'] = $_POST['sip_fxs_line2_home_domain'] ;
  $updatesql.=",SIP_CONTACT4_HOME_DOMAIN='".$values['SIP_CONTACT4_HOME_DOMAIN']."'";
  $values['SIP_CONTACT4_LOGIN'] = $_POST['sip_fxs_line2_auth_id'] ;
  $updatesql.=",SIP_CONTACT4_LOGIN='".$values['SIP_CONTACT4_LOGIN']."'";
  $values['SIP_CONTACT4_PASSWD'] = $_POST['sip_fxs_line2_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT4_PASSWD='".$values['SIP_CONTACT4_PASSWD']."'";
  $values['SIP_CONTACT4_FORWARD_TYPE'] = $_POST['sip_fxs_line2_fwd_type'] ;
  $updatesql.=",SIP_CONTACT4_FORWARD_TYPE='".$values['SIP_CONTACT4_FORWARD_TYPE']."'";
  $values['SIP_CONTACT4_FORWARD_NUMBER'] = $_POST['sip_fxs_line2_fwd_num'] ;
  $updatesql.=",SIP_CONTACT4_FORWARD_NUMBER='".$values['SIP_CONTACT4_FORWARD_NUMBER']."'";
/* dial plan*/
  $values['S2_DIGIT_MAP'] = $_POST['fxs2_dial_plan'] ;
  $updatesql.=",S2_DIGIT_MAP='".$values['S2_DIGIT_MAP']."'";  
  $values['SIP_FXS1_USE_BSVR'] = $_POST['sip_fxs_line2_backup_server']=='on'?'1':'0';
  $updatesql.=",SIP_FXS1_USE_BSVR='".$values['SIP_FXS1_USE_BSVR']."'";
if($values['SIP_FXS1_USE_BSVR'] == 1):
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT5_PROXY'] = $_POST['sip_fxs_line2_backup_proxy'] ;
  $updatesql.=",SIP_CONTACT5_PROXY='".$values['SIP_CONTACT5_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT5_SERVER'] = $_POST['sip_fxs_line2_backup_registrar'] ;
  $updatesql.=",SIP_CONTACT5_SERVER='".$values['SIP_CONTACT5_SERVER']."'";
endif; 
  $values['SIP_CONTACT5_HOME_DOMAIN'] = $_POST['sip_fxs_line2_backup_home_domain'] ;
  $updatesql.=",SIP_CONTACT5_HOME_DOMAIN='".$values['SIP_CONTACT5_HOME_DOMAIN']."'";
endif; 
if($values['FXSPORT'] >= 3): 
endif; 
  $values['SIP_CONTACT6_DIAL_DIGITS'] = $_POST['sip_fxs_line3_number'] ;
  $updatesql.=",SIP_CONTACT6_DIAL_DIGITS='".$values['SIP_CONTACT6_DIAL_DIGITS']."'";
  $values['SIP_CONTACT6_DISPLAY_NAME'] = $_POST['sip_fxs_line3_display_name'] ;
  $updatesql.=",SIP_CONTACT6_DISPLAY_NAME='".$values['SIP_CONTACT6_DISPLAY_NAME']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT6_PROXY'] = $_POST['sip_fxs_line3_proxy'] ;
  $updatesql.=",SIP_CONTACT6_PROXY='".$values['SIP_CONTACT6_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT6_SERVER'] = $_POST['sip_fxs_line3_registrar'] ;
  $updatesql.=",SIP_CONTACT6_SERVER='".$values['SIP_CONTACT6_SERVER']."'";
endif; 
  $values['SIP_CONTACT6_REGISTER_EXPIRED'] = $_POST['sip_fxs_line3_register_expired'] ;
  $updatesql.=",SIP_CONTACT6_REGISTER_EXPIRED='".$values['SIP_CONTACT6_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT6_OUTBOUND_PROXY'] = $_POST['sip_fxs_line3_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT6_OUTBOUND_PROXY='".$values['SIP_CONTACT6_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT6_HOME_DOMAIN'] = $_POST['sip_fxs_line3_home_domain'] ;
  $updatesql.=",SIP_CONTACT6_HOME_DOMAIN='".$values['SIP_CONTACT6_HOME_DOMAIN']."'";
  $values['SIP_CONTACT6_LOGIN'] = $_POST['sip_fxs_line3_auth_id'] ;
  $updatesql.=",SIP_CONTACT6_LOGIN='".$values['SIP_CONTACT6_LOGIN']."'";
  $values['SIP_CONTACT6_PASSWD'] = $_POST['sip_fxs_line3_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT6_PASSWD='".$values['SIP_CONTACT6_PASSWD']."'";
  $values['SIP_CONTACT6_FORWARD_TYPE'] = $_POST['sip_fxs_line3_fwd_type'] ;
  $updatesql.=",SIP_CONTACT6_FORWARD_TYPE='".$values['SIP_CONTACT6_FORWARD_TYPE']."'";
  $values['SIP_CONTACT6_FORWARD_NUMBER'] = $_POST['sip_fxs_line3_fwd_num'] ;
  $updatesql.=",SIP_CONTACT6_FORWARD_NUMBER='".$values['SIP_CONTACT6_FORWARD_NUMBER']."'";
/* dial plan*/
  $values['S3_DIGIT_MAP'] = $_POST['fxs3_dial_plan'] ;
  $updatesql.=",S3_DIGIT_MAP='".$values['S3_DIGIT_MAP']."'";  
  $values['SIP_FXS2_USE_BSVR'] = $_POST['sip_fxs_line3_backup_server']=='on'?'1':'0';
  $updatesql.=",SIP_FXS2_USE_BSVR='".$values['SIP_FXS2_USE_BSVR']."'";
if($values['SIP_FXS2_USE_BSVR'] == 1):
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT7_PROXY'] = $_POST['sip_fxs_line3_backup_proxy'] ;
  $updatesql.=",SIP_CONTACT7_PROXY='".$values['SIP_CONTACT7_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT7_SERVER'] = $_POST['sip_fxs_line3_backup_registrar'] ;
  $updatesql.=",SIP_CONTACT7_SERVER='".$values['SIP_CONTACT7_SERVER']."'";
endif; 
  $values['SIP_CONTACT7_HOME_DOMAIN'] = $_POST['sip_fxs_line3_backup_home_domain'] ;
  $updatesql.=",SIP_CONTACT7_HOME_DOMAIN='".$values['SIP_CONTACT7_HOME_DOMAIN']."'";
endif; 
if($values['FXSPORT'] >= 4): 
endif; 
  $values['SIP_CONTACT8_DIAL_DIGITS'] = $_POST['sip_fxs_line4_number'] ;
  $updatesql.=",SIP_CONTACT8_DIAL_DIGITS='".$values['SIP_CONTACT8_DIAL_DIGITS']."'";
  $values['SIP_CONTACT8_DISPLAY_NAME'] = $_POST['sip_fxs_line4_display_name'] ;
  $updatesql.=",SIP_CONTACT8_DISPLAY_NAME='".$values['SIP_CONTACT8_DISPLAY_NAME']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT8_PROXY'] = $_POST['sip_fxs_line4_proxy'] ;
  $updatesql.=",SIP_CONTACT8_PROXY='".$values['SIP_CONTACT8_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT8_SERVER'] = $_POST['sip_fxs_line4_registrar'] ;
  $updatesql.=",SIP_CONTACT8_SERVER='".$values['SIP_CONTACT8_SERVER']."'";
endif; 
  $values['SIP_CONTACT8_REGISTER_EXPIRED'] = $_POST['sip_fxs_line4_register_expired'] ;
  $updatesql.=",SIP_CONTACT8_REGISTER_EXPIRED='".$values['SIP_CONTACT8_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT8_OUTBOUND_PROXY'] = $_POST['sip_fxs_line4_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT8_OUTBOUND_PROXY='".$values['SIP_CONTACT8_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT8_HOME_DOMAIN'] = $_POST['sip_fxs_line4_home_domain'] ;
  $updatesql.=",SIP_CONTACT8_HOME_DOMAIN='".$values['SIP_CONTACT8_HOME_DOMAIN']."'";
  $values['SIP_CONTACT8_LOGIN'] = $_POST['sip_fxs_line4_auth_id'] ;
  $updatesql.=",SIP_CONTACT8_LOGIN='".$values['SIP_CONTACT8_LOGIN']."'";
  $values['SIP_CONTACT8_PASSWD'] = $_POST['sip_fxs_line4_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT8_PASSWD='".$values['SIP_CONTACT8_PASSWD']."'";
  $values['SIP_CONTACT8_FORWARD_TYPE'] = $_POST['sip_fxs_line4_fwd_type'] ;
  $updatesql.=",SIP_CONTACT8_FORWARD_TYPE='".$values['SIP_CONTACT8_FORWARD_TYPE']."'";
  $values['SIP_CONTACT8_FORWARD_NUMBER'] = $_POST['sip_fxs_line4_fwd_num'] ;
  $updatesql.=",SIP_CONTACT8_FORWARD_NUMBER='".$values['SIP_CONTACT8_FORWARD_NUMBER']."'";
/* dial plan*/
  $values['S4_DIGIT_MAP'] = $_POST['fxs4_dial_plan'] ;
  $updatesql.=",S4_DIGIT_MAP='".$values['S4_DIGIT_MAP']."'";  
  $values['SIP_FXS3_USE_BSVR'] = $_POST['sip_fxs_line4_backup_server']=='on'?'1':'0';
  $updatesql.=",SIP_FXS3_USE_BSVR='".$values['SIP_FXS3_USE_BSVR']."'";
if($values['SIP_FXS3_USE_BSVR'] == 1):
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT9_PROXY'] = $_POST['sip_fxs_line4_backup_proxy'] ;
  $updatesql.=",SIP_CONTACT9_PROXY='".$values['SIP_CONTACT9_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT9_SERVER'] = $_POST['sip_fxs_line4_backup_registrar'] ;
  $updatesql.=",SIP_CONTACT9_SERVER='".$values['SIP_CONTACT9_SERVER']."'";
endif; 
  $values['SIP_CONTACT9_HOME_DOMAIN'] = $_POST['sip_fxs_line4_backup_home_domain'] ;
  $updatesql.=",SIP_CONTACT9_HOME_DOMAIN='".$values['SIP_CONTACT9_HOME_DOMAIN']."'";
endif; 
endif; 

/*fxo*/
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
  $values['SIP_CONTACT10_REGISTER_EXPIRED'] = $_POST['sip_fxo_register_expired'] ;
  $updatesql.=",SIP_CONTACT10_REGISTER_EXPIRED='".$values['SIP_CONTACT10_REGISTER_EXPIRED']."'";
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
if($values['FXOPORT'] > 1): 
  $values['SIP_FXO_CONFIG_MODE'] = $_POST['sip_fxo_config_mode'] ;
  $updatesql.=",SIP_FXO_CONFIG_MODE='".$values['SIP_FXO_CONFIG_MODE']."'";
endif; 
if($values['FXOPORT'] > 1): 
endif; 
if($values['SIP_FXO_CONFIG_MODE'] == 'SINGLE_MODE'):
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
  $values['SIP_CONTACT10_REGISTER_EXPIRED'] = $_POST['sip_fxo_register_expired'] ;
  $updatesql.=",SIP_CONTACT10_REGISTER_EXPIRED='".$values['SIP_CONTACT10_REGISTER_EXPIRED']."'";
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
endif; 
if($values['FXOPORT'] > 1): 
endif; 
if($values['SIP_FXO_CONFIG_MODE'] == 'LINE_MODE'):
  $values['SIP_CONTACT12_DIAL_DIGITS'] = $_POST['sip_fxo_line1_number'] ;
  $updatesql.=",SIP_CONTACT12_DIAL_DIGITS='".$values['SIP_CONTACT12_DIAL_DIGITS']."'";
  $values['SIP_CONTACT12_DISPLAY_NAME'] = $_POST['sip_fxo_line1_display_name'] ;
  $updatesql.=",SIP_CONTACT12_DISPLAY_NAME='".$values['SIP_CONTACT12_DISPLAY_NAME']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT12_PROXY'] = $_POST['sip_fxo_line1_proxy'] ;
  $updatesql.=",SIP_CONTACT12_PROXY='".$values['SIP_CONTACT12_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT12_SERVER'] = $_POST['sip_fxo_line1_registrar'] ;
  $updatesql.=",SIP_CONTACT12_SERVER='".$values['SIP_CONTACT12_SERVER']."'";
endif; 
  $values['SIP_CONTACT12_REGISTER_EXPIRED'] = $_POST['sip_fxo_line1_register_expired'] ;
  $updatesql.=",SIP_CONTACT12_REGISTER_EXPIRED='".$values['SIP_CONTACT12_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT12_OUTBOUND_PROXY'] = $_POST['sip_fxo_line1_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT12_OUTBOUND_PROXY='".$values['SIP_CONTACT12_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT12_HOME_DOMAIN'] = $_POST['sip_fxo_line1_home_domain'] ;
  $updatesql.=",SIP_CONTACT12_HOME_DOMAIN='".$values['SIP_CONTACT12_HOME_DOMAIN']."'";
  $values['SIP_CONTACT12_LOGIN'] = $_POST['sip_fxo_line1_auth_id'] ;
  $updatesql.=",SIP_CONTACT12_LOGIN='".$values['SIP_CONTACT12_LOGIN']."'";
  $values['SIP_CONTACT12_PASSWD'] = $_POST['sip_fxo_line1_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT12_PASSWD='".$values['SIP_CONTACT12_PASSWD']."'";
  $values['SIP_FXO0_USE_BSVR'] = $_POST['sip_fxo_line1_backup_server']=='on'?'1':'0';
  $updatesql.=",SIP_FXO0_USE_BSVR='".$values['SIP_FXO0_USE_BSVR']."'";
if($values['SIP_FXO0_USE_BSVR'] == 1):
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT13_PROXY'] = $_POST['sip_fxo_line1_backup_proxy'] ;
  $updatesql.=",SIP_CONTACT13_PROXY='".$values['SIP_CONTACT13_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT13_SERVER'] = $_POST['sip_fxo_line1_backup_registrar'] ;
  $updatesql.=",SIP_CONTACT13_SERVER='".$values['SIP_CONTACT13_SERVER']."'";
endif; 
  $values['SIP_CONTACT13_HOME_DOMAIN'] = $_POST['sip_fxo_line1_backup_home_domain'] ;
  $updatesql.=",SIP_CONTACT13_HOME_DOMAIN='".$values['SIP_CONTACT13_HOME_DOMAIN']."'";
endif; 
if($values['FXOPORT'] >= 2): 
endif; 
  $values['SIP_CONTACT14_DIAL_DIGITS'] = $_POST['sip_fxo_line2_number'] ;
  $updatesql.=",SIP_CONTACT14_DIAL_DIGITS='".$values['SIP_CONTACT14_DIAL_DIGITS']."'";
  $values['SIP_CONTACT14_DISPLAY_NAME'] = $_POST['sip_fxo_line2_display_name'] ;
  $updatesql.=",SIP_CONTACT14_DISPLAY_NAME='".$values['SIP_CONTACT14_DISPLAY_NAME']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT14_PROXY'] = $_POST['sip_fxo_line2_proxy'] ;
  $updatesql.=",SIP_CONTACT14_PROXY='".$values['SIP_CONTACT14_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT14_SERVER'] = $_POST['sip_fxo_line2_registrar'] ;
  $updatesql.=",SIP_CONTACT14_SERVER='".$values['SIP_CONTACT14_SERVER']."'";
endif; 
  $values['SIP_CONTACT14_REGISTER_EXPIRED'] = $_POST['sip_fxo_line2_register_expired'] ;
  $updatesql.=",SIP_CONTACT14_REGISTER_EXPIRED='".$values['SIP_CONTACT14_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT14_OUTBOUND_PROXY'] = $_POST['sip_fxo_line2_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT14_OUTBOUND_PROXY='".$values['SIP_CONTACT14_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT14_HOME_DOMAIN'] = $_POST['sip_fxo_line2_home_domain'] ;
  $updatesql.=",SIP_CONTACT14_HOME_DOMAIN='".$values['SIP_CONTACT14_HOME_DOMAIN']."'";
  $values['SIP_CONTACT14_LOGIN'] = $_POST['sip_fxo_line2_auth_id'] ;
  $updatesql.=",SIP_CONTACT14_LOGIN='".$values['SIP_CONTACT14_LOGIN']."'";
  $values['SIP_CONTACT14_PASSWD'] = $_POST['sip_fxo_line2_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT14_PASSWD='".$values['SIP_CONTACT14_PASSWD']."'";
  $values['SIP_FXO1_USE_BSVR'] = $_POST['sip_fxo_line2_backup_server']=='on'?'1':'0';
  $updatesql.=",SIP_FXO1_USE_BSVR='".$values['SIP_FXO1_USE_BSVR']."'";
if($values['SIP_FXO1_USE_BSVR'] == 1):
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT15_PROXY'] = $_POST['sip_fxo_line2_backup_proxy'] ;
  $updatesql.=",SIP_CONTACT15_PROXY='".$values['SIP_CONTACT15_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT15_SERVER'] = $_POST['sip_fxo_line2_backup_registrar'] ;
  $updatesql.=",SIP_CONTACT15_SERVER='".$values['SIP_CONTACT15_SERVER']."'";
endif; 
  $values['SIP_CONTACT15_HOME_DOMAIN'] = $_POST['sip_fxo_line2_backup_home_domain'] ;
  $updatesql.=",SIP_CONTACT15_HOME_DOMAIN='".$values['SIP_CONTACT15_HOME_DOMAIN']."'";
endif; 
if($values['FXOPORT'] >= 3): 
endif; 
  $values['SIP_CONTACT16_DIAL_DIGITS'] = $_POST['sip_fxo_line3_number'] ;
  $updatesql.=",SIP_CONTACT16_DIAL_DIGITS='".$values['SIP_CONTACT16_DIAL_DIGITS']."'";
  $values['SIP_CONTACT16_DISPLAY_NAME'] = $_POST['sip_fxo_line3_display_name'] ;
  $updatesql.=",SIP_CONTACT16_DISPLAY_NAME='".$values['SIP_CONTACT16_DISPLAY_NAME']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT16_PROXY'] = $_POST['sip_fxo_line3_proxy'] ;
  $updatesql.=",SIP_CONTACT16_PROXY='".$values['SIP_CONTACT16_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT16_SERVER'] = $_POST['sip_fxo_line3_registrar'] ;
  $updatesql.=",SIP_CONTACT16_SERVER='".$values['SIP_CONTACT16_SERVER']."'";
endif; 
  $values['SIP_CONTACT16_REGISTER_EXPIRED'] = $_POST['sip_fxo_line3_register_expired'] ;
  $updatesql.=",SIP_CONTACT16_REGISTER_EXPIRED='".$values['SIP_CONTACT16_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT16_OUTBOUND_PROXY'] = $_POST['sip_fxo_line3_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT16_OUTBOUND_PROXY='".$values['SIP_CONTACT16_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT16_HOME_DOMAIN'] = $_POST['sip_fxo_line3_home_domain'] ;
  $updatesql.=",SIP_CONTACT16_HOME_DOMAIN='".$values['SIP_CONTACT16_HOME_DOMAIN']."'";
  $values['SIP_CONTACT16_LOGIN'] = $_POST['sip_fxo_line3_auth_id'] ;
  $updatesql.=",SIP_CONTACT16_LOGIN='".$values['SIP_CONTACT16_LOGIN']."'";
  $values['SIP_CONTACT16_PASSWD'] = $_POST['sip_fxo_line3_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT16_PASSWD='".$values['SIP_CONTACT16_PASSWD']."'";
  $values['SIP_FXO2_USE_BSVR'] = $_POST['sip_fxo_line3_backup_server']=='on'?'1':'0';
  $updatesql.=",SIP_FXO2_USE_BSVR='".$values['SIP_FXO2_USE_BSVR']."'";
if($values['SIP_FXO2_USE_BSVR'] == 1):
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT17_PROXY'] = $_POST['sip_fxo_line3_backup_proxy'] ;
  $updatesql.=",SIP_CONTACT17_PROXY='".$values['SIP_CONTACT17_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT17_SERVER'] = $_POST['sip_fxo_line3_backup_registrar'] ;
  $updatesql.=",SIP_CONTACT17_SERVER='".$values['SIP_CONTACT17_SERVER']."'";
endif; 
  $values['SIP_CONTACT17_HOME_DOMAIN'] = $_POST['sip_fxo_line3_backup_home_domain'] ;
  $updatesql.=",SIP_CONTACT17_HOME_DOMAIN='".$values['SIP_CONTACT17_HOME_DOMAIN']."'";
endif; 
if($values['FXOPORT'] >= 4): 
endif; 
  $values['SIP_CONTACT18_DIAL_DIGITS'] = $_POST['sip_fxo_line4_number'] ;
  $updatesql.=",SIP_CONTACT18_DIAL_DIGITS='".$values['SIP_CONTACT18_DIAL_DIGITS']."'";
  $values['SIP_CONTACT18_DISPLAY_NAME'] = $_POST['sip_fxo_line4_display_name'] ;
  $updatesql.=",SIP_CONTACT18_DISPLAY_NAME='".$values['SIP_CONTACT18_DISPLAY_NAME']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT18_PROXY'] = $_POST['sip_fxo_line4_proxy'] ;
  $updatesql.=",SIP_CONTACT18_PROXY='".$values['SIP_CONTACT18_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT18_SERVER'] = $_POST['sip_fxo_line4_registrar'] ;
  $updatesql.=",SIP_CONTACT18_SERVER='".$values['SIP_CONTACT18_SERVER']."'";
endif; 
  $values['SIP_CONTACT18_REGISTER_EXPIRED'] = $_POST['sip_fxo_line4_register_expired'] ;
  $updatesql.=",SIP_CONTACT18_REGISTER_EXPIRED='".$values['SIP_CONTACT18_REGISTER_EXPIRED']."'";
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT18_OUTBOUND_PROXY'] = $_POST['sip_fxo_line4_outbound_proxy'] ;
  $updatesql.=",SIP_CONTACT18_OUTBOUND_PROXY='".$values['SIP_CONTACT18_OUTBOUND_PROXY']."'";
endif; 
  $values['SIP_CONTACT18_HOME_DOMAIN'] = $_POST['sip_fxo_line4_home_domain'] ;
  $updatesql.=",SIP_CONTACT18_HOME_DOMAIN='".$values['SIP_CONTACT18_HOME_DOMAIN']."'";
  $values['SIP_CONTACT18_LOGIN'] = $_POST['sip_fxo_line4_auth_id'] ;
  $updatesql.=",SIP_CONTACT18_LOGIN='".$values['SIP_CONTACT18_LOGIN']."'";
  $values['SIP_CONTACT18_PASSWD'] = $_POST['sip_fxo_line4_auth_passwd'] ;
  $updatesql.=",SIP_CONTACT18_PASSWD='".$values['SIP_CONTACT18_PASSWD']."'";
  $values['SIP_FXO3_USE_BSVR'] = $_POST['sip_fxo_line4_backup_server']=='on'?'1':'0';
  $updatesql.=",SIP_FXO3_USE_BSVR='".$values['SIP_FXO3_USE_BSVR']."'";
if($values['SIP_FXO3_USE_BSVR'] == 1):
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT19_PROXY'] = $_POST['sip_fxo_line4_backup_proxy'] ;
  $updatesql.=",SIP_CONTACT19_PROXY='".$values['SIP_CONTACT19_PROXY']."'";
endif; 
if($SUPER_USER == '' || $_SESSION['autocfg_adminname'] == $SUPER_USER):
  $values['SIP_CONTACT19_SERVER'] = $_POST['sip_fxo_line4_backup_registrar'] ;
  $updatesql.=",SIP_CONTACT19_SERVER='".$values['SIP_CONTACT19_SERVER']."'";
endif; 
  $values['SIP_CONTACT19_HOME_DOMAIN'] = $_POST['sip_fxo_line4_backup_home_domain'] ;
  $updatesql.=",SIP_CONTACT19_HOME_DOMAIN='".$values['SIP_CONTACT19_HOME_DOMAIN']."'";
endif; 
endif; 
endif;
endif;
/*fox-setting*/
  $values['O_L1_DISABLE_OUT'] = $_POST['line1_fw_to_pstn']=='on'?'0':'1';
  $updatesql.=",O_L1_DISABLE_OUT='".$values['O_L1_DISABLE_OUT']."'";
if($values['O_L1_DISABLE_OUT'] == 0):
  $values['L1_FW_NUM_TO_PSTN'] = $_POST['line1_fw_num_to_pstn'] ;
  $updatesql.=",L1_FW_NUM_TO_PSTN='".$values['L1_FW_NUM_TO_PSTN']."'";
  $values['L1_FW_TO_PSTN_PASSWD'] = $_POST['line1_fw_to_pstn_passwd'] ;
  $updatesql.=",L1_FW_TO_PSTN_PASSWD='".$values['L1_FW_TO_PSTN_PASSWD']."'";
  $values['L1_P_DIGIT_MAP'] = $_POST['line1_p_dial_plan'] ;
  $updatesql.=",L1_P_DIGIT_MAP='".$values['L1_P_DIGIT_MAP']."'";
endif; 
  $values['O_L1_DISABLE_IN'] = $_POST['line1_fw_to_voip']=='on'?'0':'1';
  $updatesql.=",O_L1_DISABLE_IN='".$values['O_L1_DISABLE_IN']."'";
if($values['O_L1_DISABLE_IN'] == 0):
  $values['L1_FW_NUM_TO_VOIP'] = $_POST['line1_fw_num_to_voip'] ;
  $updatesql.=",L1_FW_NUM_TO_VOIP='".$values['L1_FW_NUM_TO_VOIP']."'";
  $values['L1_FW_TO_VOIP_PASSWD'] = $_POST['line1_fw_to_voip_passwd'] ;
  $updatesql.=",L1_FW_TO_VOIP_PASSWD='".$values['L1_FW_TO_VOIP_PASSWD']."'";
  $values['L1_V_DIGIT_MAP'] = $_POST['line1_v_dial_plan'] ;
  $updatesql.=",L1_V_DIGIT_MAP='".$values['L1_V_DIGIT_MAP']."'";
if($values['FXOPORT'] < 4): 
  $values['O_L1_VOIP_ANSWER_T'] = $_POST['line1_voip_answer_time'] ;
  $updatesql.=",O_L1_VOIP_ANSWER_T='".$values['O_L1_VOIP_ANSWER_T']."'";
endif; 
endif; 
if($values['FXOPORT'] >= 2): 
endif; 
  $values['O_L2_DISABLE_OUT'] = $_POST['line2_fw_to_pstn']=='on'?'0':'1';
  $updatesql.=",O_L2_DISABLE_OUT='".$values['O_L2_DISABLE_OUT']."'";
if($values['O_L2_DISABLE_OUT'] == 0):
  $values['L2_FW_NUM_TO_PSTN'] = $_POST['line2_fw_num_to_pstn'] ;
  $updatesql.=",L2_FW_NUM_TO_PSTN='".$values['L2_FW_NUM_TO_PSTN']."'";
  $values['L2_FW_TO_PSTN_PASSWD'] = $_POST['line2_fw_to_pstn_passwd'] ;
  $updatesql.=",L2_FW_TO_PSTN_PASSWD='".$values['L2_FW_TO_PSTN_PASSWD']."'";
  $values['L2_P_DIGIT_MAP'] = $_POST['line2_p_dial_plan'] ;
  $updatesql.=",L2_P_DIGIT_MAP='".$values['L2_P_DIGIT_MAP']."'";
endif; 
  $values['O_L2_DISABLE_IN'] = $_POST['line2_fw_to_voip']=='on'?'0':'1';
  $updatesql.=",O_L2_DISABLE_IN='".$values['O_L2_DISABLE_IN']."'";
if($values['O_L2_DISABLE_IN'] == 0):
  $values['L2_FW_NUM_TO_VOIP'] = $_POST['line2_fw_num_to_voip'] ;
  $updatesql.=",L2_FW_NUM_TO_VOIP='".$values['L2_FW_NUM_TO_VOIP']."'";
  $values['L2_FW_TO_VOIP_PASSWD'] = $_POST['line2_fw_to_voip_passwd'] ;
  $updatesql.=",L2_FW_TO_VOIP_PASSWD='".$values['L2_FW_TO_VOIP_PASSWD']."'";
  $values['L2_V_DIGIT_MAP'] = $_POST['line2_v_dial_plan'] ;
  $updatesql.=",L2_V_DIGIT_MAP='".$values['L2_V_DIGIT_MAP']."'";
if($values['FXOPORT'] < 4): 
  $values['O_L2_VOIP_ANSWER_T'] = $_POST['line2_voip_answer_time'] ;
  $updatesql.=",O_L2_VOIP_ANSWER_T='".$values['O_L2_VOIP_ANSWER_T']."'";
endif; 
endif; 
if($values['FXOPORT'] >= 3): 
endif; 
  $values['O_L3_DISABLE_OUT'] = $_POST['line3_fw_to_pstn']=='on'?'0':'1';
  $updatesql.=",O_L3_DISABLE_OUT='".$values['O_L3_DISABLE_OUT']."'";
if($values['O_L3_DISABLE_OUT'] == 0):
  $values['L3_FW_NUM_TO_PSTN'] = $_POST['line3_fw_num_to_pstn'] ;
  $updatesql.=",L3_FW_NUM_TO_PSTN='".$values['L3_FW_NUM_TO_PSTN']."'";
  $values['L3_FW_TO_PSTN_PASSWD'] = $_POST['line3_fw_to_pstn_passwd'] ;
  $updatesql.=",L3_FW_TO_PSTN_PASSWD='".$values['L3_FW_TO_PSTN_PASSWD']."'";
  $values['L3_P_DIGIT_MAP'] = $_POST['line3_p_dial_plan'] ;
  $updatesql.=",L3_P_DIGIT_MAP='".$values['L3_P_DIGIT_MAP']."'";
endif; 
  $values['O_L3_DISABLE_IN'] = $_POST['line3_fw_to_voip']=='on'?'0':'1';
  $updatesql.=",O_L3_DISABLE_IN='".$values['O_L3_DISABLE_IN']."'";
if($values['O_L3_DISABLE_IN'] == 0):
  $values['L3_FW_NUM_TO_VOIP'] = $_POST['line3_fw_num_to_voip'] ;
  $updatesql.=",L3_FW_NUM_TO_VOIP='".$values['L3_FW_NUM_TO_VOIP']."'";
  $values['L3_FW_TO_VOIP_PASSWD'] = $_POST['line3_fw_to_voip_passwd'] ;
  $updatesql.=",L3_FW_TO_VOIP_PASSWD='".$values['L3_FW_TO_VOIP_PASSWD']."'";
  $values['L3_V_DIGIT_MAP'] = $_POST['line3_v_dial_plan'] ;
  $updatesql.=",L3_V_DIGIT_MAP='".$values['L3_V_DIGIT_MAP']."'";
if($values['FXOPORT'] < 4): 
  $values['O_L3_VOIP_ANSWER_T'] = $_POST['line3_voip_answer_time'] ;
  $updatesql.=",O_L3_VOIP_ANSWER_T='".$values['O_L3_VOIP_ANSWER_T']."'";
endif; 
endif; 
if($values['FXOPORT'] >= 4): 
endif; 
  $values['O_L4_DISABLE_OUT'] = $_POST['line4_fw_to_pstn']=='on'?'0':'1';
  $updatesql.=",O_L4_DISABLE_OUT='".$values['O_L4_DISABLE_OUT']."'";
if($values['O_L4_DISABLE_OUT'] == 0):
  $values['L4_FW_NUM_TO_PSTN'] = $_POST['line4_fw_num_to_pstn'] ;
  $updatesql.=",L4_FW_NUM_TO_PSTN='".$values['L4_FW_NUM_TO_PSTN']."'";
  $values['L4_FW_TO_PSTN_PASSWD'] = $_POST['line4_fw_to_pstn_passwd'] ;
  $updatesql.=",L4_FW_TO_PSTN_PASSWD='".$values['L4_FW_TO_PSTN_PASSWD']."'";
  $values['L4_P_DIGIT_MAP'] = $_POST['line4_p_dial_plan'] ;
  $updatesql.=",L4_P_DIGIT_MAP='".$values['L4_P_DIGIT_MAP']."'";
endif; 
  $values['O_L4_DISABLE_IN'] = $_POST['line4_fw_to_voip']=='on'?'0':'1';
  $updatesql.=",O_L4_DISABLE_IN='".$values['O_L4_DISABLE_IN']."'";
if($values['O_L4_DISABLE_IN'] == 0):
  $values['L4_FW_NUM_TO_VOIP'] = $_POST['line4_fw_num_to_voip'] ;
  $updatesql.=",L4_FW_NUM_TO_VOIP='".$values['L4_FW_NUM_TO_VOIP']."'";
  $values['L4_FW_TO_VOIP_PASSWD'] = $_POST['line4_fw_to_voip_passwd'] ;
  $updatesql.=",L4_FW_TO_VOIP_PASSWD='".$values['L4_FW_TO_VOIP_PASSWD']."'";
  $values['L4_V_DIGIT_MAP'] = $_POST['line4_v_dial_plan'] ;
  $updatesql.=",L4_V_DIGIT_MAP='".$values['L4_V_DIGIT_MAP']."'";
if($values['FXOPORT'] < 4): 
  $values['O_L4_VOIP_ANSWER_T'] = $_POST['line4_voip_answer_time'] ;
  $updatesql.=",O_L4_VOIP_ANSWER_T='".$values['O_L4_VOIP_ANSWER_T']."'";
endif; 
endif; 
  $values['EARLY_MEDIA'] = $_POST['pstn_line_reversal']=='on'?'1':'0';
  $updatesql.=",EARLY_MEDIA='".$values['EARLY_MEDIA']."'";
  $values['IVR_ENABLE'] = $_POST['ivr_enable']=='on'?'1':'0';
  $updatesql.=",IVR_ENABLE='".$values['IVR_ENABLE']."'";

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

/*fxo p*/
/*
  $values['O_L1_DISABLE_OUT'] = $_POST['line1_fw_to_pstn']=='on'?'0':'1';
  $updatesql.=",O_L1_DISABLE_OUT='".$values['O_L1_DISABLE_OUT']."'";
if($values['O_L1_DISABLE_OUT'] == 0):
  $values['L1_FW_NUM_TO_PSTN'] = $_POST['line1_fw_num_to_pstn'] ;
  $updatesql.=",L1_FW_NUM_TO_PSTN='".$values['L1_FW_NUM_TO_PSTN']."'";
  $values['L1_FW_TO_PSTN_PASSWD'] = $_POST['line1_fw_to_pstn_passwd'] ;
  $updatesql.=",L1_FW_TO_PSTN_PASSWD='".$values['L1_FW_TO_PSTN_PASSWD']."'";
  $values['L1_P_DIGIT_MAP'] = $_POST['line1_p_dial_plan'] ;
  $updatesql.=",L1_P_DIGIT_MAP='".$values['L1_P_DIGIT_MAP']."'";
endif; 
  $values['O_L1_DISABLE_IN'] = $_POST['line1_fw_to_voip']=='on'?'0':'1';
  $updatesql.=",O_L1_DISABLE_IN='".$values['O_L1_DISABLE_IN']."'";
if($values['O_L1_DISABLE_IN'] == 0):
  $values['L1_FW_NUM_TO_VOIP'] = $_POST['line1_fw_num_to_voip'] ;
  $updatesql.=",L1_FW_NUM_TO_VOIP='".$values['L1_FW_NUM_TO_VOIP']."'";
  $values['L1_FW_TO_VOIP_PASSWD'] = $_POST['line1_fw_to_voip_passwd'] ;
  $updatesql.=",L1_FW_TO_VOIP_PASSWD='".$values['L1_FW_TO_VOIP_PASSWD']."'";
  $values['L1_V_DIGIT_MAP'] = $_POST['line1_v_dial_plan'] ;
  $updatesql.=",L1_V_DIGIT_MAP='".$values['L1_V_DIGIT_MAP']."'";
if($values['FXOPORT'] < 4): 
  $values['O_L1_VOIP_ANSWER_T'] = $_POST['line1_voip_answer_time'] ;
  $updatesql.=",O_L1_VOIP_ANSWER_T='".$values['O_L1_VOIP_ANSWER_T']."'";
endif; 
endif; 
if($values['FXOPORT'] >= 2): 
endif; 
  $values['O_L2_DISABLE_OUT'] = $_POST['line2_fw_to_pstn']=='on'?'0':'1';
  $updatesql.=",O_L2_DISABLE_OUT='".$values['O_L2_DISABLE_OUT']."'";
if($values['O_L2_DISABLE_OUT'] == 0):
  $values['L2_FW_NUM_TO_PSTN'] = $_POST['line2_fw_num_to_pstn'] ;
  $updatesql.=",L2_FW_NUM_TO_PSTN='".$values['L2_FW_NUM_TO_PSTN']."'";
  $values['L2_FW_TO_PSTN_PASSWD'] = $_POST['line2_fw_to_pstn_passwd'] ;
  $updatesql.=",L2_FW_TO_PSTN_PASSWD='".$values['L2_FW_TO_PSTN_PASSWD']."'";
  $values['L2_P_DIGIT_MAP'] = $_POST['line2_p_dial_plan'] ;
  $updatesql.=",L2_P_DIGIT_MAP='".$values['L2_P_DIGIT_MAP']."'";
endif; 
  $values['O_L2_DISABLE_IN'] = $_POST['line2_fw_to_voip']=='on'?'0':'1';
  $updatesql.=",O_L2_DISABLE_IN='".$values['O_L2_DISABLE_IN']."'";
if($values['O_L2_DISABLE_IN'] == 0):
  $values['L2_FW_NUM_TO_VOIP'] = $_POST['line2_fw_num_to_voip'] ;
  $updatesql.=",L2_FW_NUM_TO_VOIP='".$values['L2_FW_NUM_TO_VOIP']."'";
  $values['L2_FW_TO_VOIP_PASSWD'] = $_POST['line2_fw_to_voip_passwd'] ;
  $updatesql.=",L2_FW_TO_VOIP_PASSWD='".$values['L2_FW_TO_VOIP_PASSWD']."'";
  $values['L2_V_DIGIT_MAP'] = $_POST['line2_v_dial_plan'] ;
  $updatesql.=",L2_V_DIGIT_MAP='".$values['L2_V_DIGIT_MAP']."'";
if($values['FXOPORT'] < 4): 
  $values['O_L2_VOIP_ANSWER_T'] = $_POST['line2_voip_answer_time'] ;
  $updatesql.=",O_L2_VOIP_ANSWER_T='".$values['O_L2_VOIP_ANSWER_T']."'";
endif; 
endif; 
if($values['FXOPORT'] >= 3): 
endif; 
  $values['O_L3_DISABLE_OUT'] = $_POST['line3_fw_to_pstn']=='on'?'0':'1';
  $updatesql.=",O_L3_DISABLE_OUT='".$values['O_L3_DISABLE_OUT']."'";
if($values['O_L3_DISABLE_OUT'] == 0):
  $values['L3_FW_NUM_TO_PSTN'] = $_POST['line3_fw_num_to_pstn'] ;
  $updatesql.=",L3_FW_NUM_TO_PSTN='".$values['L3_FW_NUM_TO_PSTN']."'";
  $values['L3_FW_TO_PSTN_PASSWD'] = $_POST['line3_fw_to_pstn_passwd'] ;
  $updatesql.=",L3_FW_TO_PSTN_PASSWD='".$values['L3_FW_TO_PSTN_PASSWD']."'";
  $values['L3_P_DIGIT_MAP'] = $_POST['line3_p_dial_plan'] ;
  $updatesql.=",L3_P_DIGIT_MAP='".$values['L3_P_DIGIT_MAP']."'";
endif; 
  $values['O_L3_DISABLE_IN'] = $_POST['line3_fw_to_voip']=='on'?'0':'1';
  $updatesql.=",O_L3_DISABLE_IN='".$values['O_L3_DISABLE_IN']."'";
if($values['O_L3_DISABLE_IN'] == 0):
  $values['L3_FW_NUM_TO_VOIP'] = $_POST['line3_fw_num_to_voip'] ;
  $updatesql.=",L3_FW_NUM_TO_VOIP='".$values['L3_FW_NUM_TO_VOIP']."'";
  $values['L3_FW_TO_VOIP_PASSWD'] = $_POST['line3_fw_to_voip_passwd'] ;
  $updatesql.=",L3_FW_TO_VOIP_PASSWD='".$values['L3_FW_TO_VOIP_PASSWD']."'";
  $values['L3_V_DIGIT_MAP'] = $_POST['line3_v_dial_plan'] ;
  $updatesql.=",L3_V_DIGIT_MAP='".$values['L3_V_DIGIT_MAP']."'";
if($values['FXOPORT'] < 4): 
  $values['O_L3_VOIP_ANSWER_T'] = $_POST['line3_voip_answer_time'] ;
  $updatesql.=",O_L3_VOIP_ANSWER_T='".$values['O_L3_VOIP_ANSWER_T']."'";
endif; 
endif; 
if($values['FXOPORT'] >= 4): 
endif; 
  $values['O_L4_DISABLE_OUT'] = $_POST['line4_fw_to_pstn']=='on'?'0':'1';
  $updatesql.=",O_L4_DISABLE_OUT='".$values['O_L4_DISABLE_OUT']."'";
if($values['O_L4_DISABLE_OUT'] == 0):
  $values['L4_FW_NUM_TO_PSTN'] = $_POST['line4_fw_num_to_pstn'] ;
  $updatesql.=",L4_FW_NUM_TO_PSTN='".$values['L4_FW_NUM_TO_PSTN']."'";
  $values['L4_FW_TO_PSTN_PASSWD'] = $_POST['line4_fw_to_pstn_passwd'] ;
  $updatesql.=",L4_FW_TO_PSTN_PASSWD='".$values['L4_FW_TO_PSTN_PASSWD']."'";
  $values['L4_P_DIGIT_MAP'] = $_POST['line4_p_dial_plan'] ;
  $updatesql.=",L4_P_DIGIT_MAP='".$values['L4_P_DIGIT_MAP']."'";
endif; 
  $values['O_L4_DISABLE_IN'] = $_POST['line4_fw_to_voip']=='on'?'0':'1';
  $updatesql.=",O_L4_DISABLE_IN='".$values['O_L4_DISABLE_IN']."'";
if($values['O_L4_DISABLE_IN'] == 0):
  $values['L4_FW_NUM_TO_VOIP'] = $_POST['line4_fw_num_to_voip'] ;
  $updatesql.=",L4_FW_NUM_TO_VOIP='".$values['L4_FW_NUM_TO_VOIP']."'";
  $values['L4_FW_TO_VOIP_PASSWD'] = $_POST['line4_fw_to_voip_passwd'] ;
  $updatesql.=",L4_FW_TO_VOIP_PASSWD='".$values['L4_FW_TO_VOIP_PASSWD']."'";
  $values['L4_V_DIGIT_MAP'] = $_POST['line4_v_dial_plan'] ;
  $updatesql.=",L4_V_DIGIT_MAP='".$values['L4_V_DIGIT_MAP']."'";
if($values['FXOPORT'] < 4): 
  $values['O_L4_VOIP_ANSWER_T'] = $_POST['line4_voip_answer_time'] ;
  $updatesql.=",O_L4_VOIP_ANSWER_T='".$values['O_L4_VOIP_ANSWER_T']."'";
endif; 
endif; 
  $values['EARLY_MEDIA'] = $_POST['pstn_line_reversal']=='on'?'1':'0';
  $updatesql.=",EARLY_MEDIA='".$values['EARLY_MEDIA']."'";
  $values['IVR_ENABLE'] = $_POST['ivr_enable']=='on'?'1':'0';
  $updatesql.=",IVR_ENABLE='".$values['IVR_ENABLE']."'"; 
 */
 
 
  $insertsql.=",orderid";
  $insertsql2.="','".$values['orderid'];

  $insertsql.=",FXSPORT";
  $insertsql2.="','".$values['FXSPORT']; 
  $insertsql.=",FXOPORT";
  $insertsql2.="','".$values['FXOPORT'];   
  $insertsql.=",ENDPOINT_TYPE";
  $insertsql2.="','".$values['ENDPOINT_TYPE']; 
  $insertsql.=",FXO_MODE";
  $insertsql2.="','".$values['FXO_MODE'];




  
  $insertsql.=",H323_L1_NUMBER";
  $insertsql2.="','".$values['H323_L1_NUMBER'];
  $insertsql.=",H323_L1_H323_ID";
  $insertsql2.="','".$values['H323_L1_H323_ID'];
  $insertsql.=",H323_L1_GKADDR";
  $insertsql2.="','".$values['H323_L1_GKADDR'];
  $insertsql.=",H323_L1_VOS_ENABLE";
  $insertsql2.="','".$values['H323_L1_VOS_ENABLE'];
  $insertsql.=",H323_L1_VOS_MODE";
  $insertsql2.="','".$values['H323_L1_VOS_MODE'];
  $insertsql.=",H323_L1_AUTH";
  $insertsql2.="','".$values['H323_L1_AUTH'];
  $insertsql.=",H323_L1_H235_ID";
  $insertsql2.="','".$values['H323_L1_H235_ID'];
  $insertsql.=",H323_L1_H235_PASSWD";
  $insertsql2.="','".$values['H323_L1_H235_PASSWD'];
  $insertsql.=",H323_L2_NUMBER";
  $insertsql2.="','".$values['H323_L2_NUMBER'];
  $insertsql.=",H323_L2_H323_ID";
  $insertsql2.="','".$values['H323_L2_H323_ID'];
  $insertsql.=",H323_L2_GKADDR";
  $insertsql2.="','".$values['H323_L2_GKADDR'];
  $insertsql.=",H323_L2_VOS_ENABLE";
  $insertsql2.="','".$values['H323_L2_VOS_ENABLE'];
  $insertsql.=",H323_L2_VOS_MODE";
  $insertsql2.="','".$values['H323_L2_VOS_MODE'];
  $insertsql.=",H323_L2_AUTH";
  $insertsql2.="','".$values['H323_L2_AUTH'];
  $insertsql.=",H323_L2_H235_ID";
  $insertsql2.="','".$values['H323_L2_H235_ID'];
  $insertsql.=",H323_L2_H235_PASSWD";
  $insertsql2.="','".$values['H323_L2_H235_PASSWD'];
  $insertsql.=",H323_L3_NUMBER";
  $insertsql2.="','".$values['H323_L3_NUMBER'];
  $insertsql.=",H323_L3_H323_ID";
  $insertsql2.="','".$values['H323_L3_H323_ID'];
  $insertsql.=",H323_L3_GKADDR";
  $insertsql2.="','".$values['H323_L3_GKADDR'];
  $insertsql.=",H323_L3_VOS_ENABLE";
  $insertsql2.="','".$values['H323_L3_VOS_ENABLE'];
  $insertsql.=",H323_L3_VOS_MODE";
  $insertsql2.="','".$values['H323_L3_VOS_MODE'];
  $insertsql.=",H323_L3_AUTH";
  $insertsql2.="','".$values['H323_L3_AUTH'];
  $insertsql.=",H323_L3_H235_ID";
  $insertsql2.="','".$values['H323_L3_H235_ID'];
  $insertsql.=",H323_L3_H235_PASSWD";
  $insertsql2.="','".$values['H323_L3_H235_PASSWD'];
  $insertsql.=",H323_L4_NUMBER";
  $insertsql2.="','".$values['H323_L4_NUMBER'];
  $insertsql.=",H323_L4_H323_ID";
  $insertsql2.="','".$values['H323_L4_H323_ID'];
  $insertsql.=",H323_L4_GKADDR";
  $insertsql2.="','".$values['H323_L4_GKADDR'];
  $insertsql.=",H323_L4_VOS_ENABLE";
  $insertsql2.="','".$values['H323_L4_VOS_ENABLE'];
  $insertsql.=",H323_L4_VOS_MODE";
  $insertsql2.="','".$values['H323_L4_VOS_MODE'];
  $insertsql.=",H323_L4_AUTH";
  $insertsql2.="','".$values['H323_L4_AUTH'];
  $insertsql.=",H323_L4_H235_ID";
  $insertsql2.="','".$values['H323_L4_H235_ID'];
  $insertsql.=",H323_L4_H235_PASSWD";
  $insertsql2.="','".$values['H323_L4_H235_PASSWD'];
/*h323 fxs*/
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
  $insertsql.=",H323_GROUP1_NUMBER";
  $insertsql2.="','".$values['H323_GROUP1_NUMBER'];
  $insertsql.=",H323_GROUP1_H323_ID";
  $insertsql2.="','".$values['H323_GROUP1_H323_ID'];
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
/*h323 fxo*/
  $insertsql.=",H323_FXO_CONFIG_MODE";
  $insertsql2.="','".$values['H323_FXO_CONFIG_MODE'];
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
  $insertsql.=",H235_FXO_ID";
  $insertsql2.="','".$values['H235_FXO_ID'];
  $insertsql.=",H235_FXO_PASSWD";
  $insertsql2.="','".$values['H235_FXO_PASSWD'];
  $insertsql.=",H323_FXO_LINE1_NUMBER";
  $insertsql2.="','".$values['H323_FXO_LINE1_NUMBER'];
  $insertsql.=",H323_FXO_LINE1_H323_ID";
  $insertsql2.="','".$values['H323_FXO_LINE1_H323_ID'];
  $insertsql.=",H323_FXO_LINE1_GW_PREFIX";
  $insertsql2.="','".$values['H323_FXO_LINE1_GW_PREFIX'];
  $insertsql.=",H323_FXO_LINE1_GKADDR";
  $insertsql2.="','".$values['H323_FXO_LINE1_GKADDR'];
  $insertsql.=",H323_FXO_LINE1_VOS_ENABLE";
  $insertsql2.="','".$values['H323_FXO_LINE1_VOS_ENABLE'];
  $insertsql.=",H323_FXO_LINE1_VOS_MODE";
  $insertsql2.="','".$values['H323_FXO_LINE1_VOS_MODE'];
  $insertsql.=",H323_FXO_LINE1_AUTH";
  $insertsql2.="','".$values['H323_FXO_LINE1_AUTH'];
  $insertsql.=",H323_FXO_LINE1_H235_ID";
  $insertsql2.="','".$values['H323_FXO_LINE1_H235_ID'];
  $insertsql.=",H323_FXO_LINE1_H235_PASSWD";
  $insertsql2.="','".$values['H323_FXO_LINE1_H235_PASSWD'];
  $insertsql.=",H323_FXO_LINE2_NUMBER";
  $insertsql2.="','".$values['H323_FXO_LINE2_NUMBER'];
  $insertsql.=",H323_FXO_LINE2_H323_ID";
  $insertsql2.="','".$values['H323_FXO_LINE2_H323_ID'];
  $insertsql.=",H323_FXO_LINE2_GW_PREFIX";
  $insertsql2.="','".$values['H323_FXO_LINE2_GW_PREFIX'];
  $insertsql.=",H323_FXO_LINE2_GKADDR";
  $insertsql2.="','".$values['H323_FXO_LINE2_GKADDR'];
  $insertsql.=",H323_FXO_LINE2_VOS_ENABLE";
  $insertsql2.="','".$values['H323_FXO_LINE2_VOS_ENABLE'];
  $insertsql.=",H323_FXO_LINE2_VOS_MODE";
  $insertsql2.="','".$values['H323_FXO_LINE2_VOS_MODE'];
  $insertsql.=",H323_FXO_LINE2_AUTH";
  $insertsql2.="','".$values['H323_FXO_LINE2_AUTH'];
  $insertsql.=",H323_FXO_LINE2_H235_ID";
  $insertsql2.="','".$values['H323_FXO_LINE2_H235_ID'];
  $insertsql.=",H323_FXO_LINE2_H235_PASSWD";
  $insertsql2.="','".$values['H323_FXO_LINE2_H235_PASSWD'];
  $insertsql.=",H323_FXO_LINE3_NUMBER";
  $insertsql2.="','".$values['H323_FXO_LINE3_NUMBER'];
  $insertsql.=",H323_FXO_LINE3_H323_ID";
  $insertsql2.="','".$values['H323_FXO_LINE3_H323_ID'];
  $insertsql.=",H323_FXO_LINE3_GW_PREFIX";
  $insertsql2.="','".$values['H323_FXO_LINE3_GW_PREFIX'];
  $insertsql.=",H323_FXO_LINE3_GKADDR";
  $insertsql2.="','".$values['H323_FXO_LINE3_GKADDR'];
  $insertsql.=",H323_FXO_LINE3_VOS_ENABLE";
  $insertsql2.="','".$values['H323_FXO_LINE3_VOS_ENABLE'];
  $insertsql.=",H323_FXO_LINE3_VOS_MODE";
  $insertsql2.="','".$values['H323_FXO_LINE3_VOS_MODE'];
  $insertsql.=",H323_FXO_LINE3_AUTH";
  $insertsql2.="','".$values['H323_FXO_LINE3_AUTH'];
  $insertsql.=",H323_FXO_LINE3_H235_ID";
  $insertsql2.="','".$values['H323_FXO_LINE3_H235_ID'];
  $insertsql.=",H323_FXO_LINE3_H235_PASSWD";
  $insertsql2.="','".$values['H323_FXO_LINE3_H235_PASSWD'];
  $insertsql.=",H323_FXO_LINE4_NUMBER";
  $insertsql2.="','".$values['H323_FXO_LINE4_NUMBER'];
  $insertsql.=",H323_FXO_LINE4_H323_ID";
  $insertsql2.="','".$values['H323_FXO_LINE4_H323_ID'];
  $insertsql.=",H323_FXO_LINE4_GW_PREFIX";
  $insertsql2.="','".$values['H323_FXO_LINE4_GW_PREFIX'];
  $insertsql.=",H323_FXO_LINE4_GKADDR";
  $insertsql2.="','".$values['H323_FXO_LINE4_GKADDR'];
  $insertsql.=",H323_FXO_LINE4_VOS_ENABLE";
  $insertsql2.="','".$values['H323_FXO_LINE4_VOS_ENABLE'];
  $insertsql.=",H323_FXO_LINE4_VOS_MODE";
  $insertsql2.="','".$values['H323_FXO_LINE4_VOS_MODE'];
  $insertsql.=",H323_FXO_LINE4_AUTH";
  $insertsql2.="','".$values['H323_FXO_LINE4_AUTH'];
  $insertsql.=",H323_FXO_LINE4_H235_ID";
  $insertsql2.="','".$values['H323_FXO_LINE4_H235_ID'];
  $insertsql.=",H323_FXO_LINE4_H235_PASSWD";
  $insertsql2.="','".$values['H323_FXO_LINE4_H235_PASSWD'];
  $insertsql.=",H323_FXO_GROUP1_NUMBER";
  $insertsql2.="','".$values['H323_FXO_GROUP1_NUMBER'];
  $insertsql.=",H323_FXO_GROUP1_H323_ID";
  $insertsql2.="','".$values['H323_FXO_GROUP1_H323_ID'];
  $insertsql.=",H323_FXO_GROUP1_GW_PREFIX";
  $insertsql2.="','".$values['H323_FXO_GROUP1_GW_PREFIX'];
  $insertsql.=",H323_FXO_GROUP1_GKADDR";
  $insertsql2.="','".$values['H323_FXO_GROUP1_GKADDR'];
  $insertsql.=",H323_FXO_G1_VOS_ENABLE";
  $insertsql2.="','".$values['H323_FXO_G1_VOS_ENABLE'];
  $insertsql.=",H323_FXO_G1_VOS_MODE";
  $insertsql2.="','".$values['H323_FXO_G1_VOS_MODE'];
  $insertsql.=",H323_FXO_GROUP1_AUTH";
  $insertsql2.="','".$values['H323_FXO_GROUP1_AUTH'];
  $insertsql.=",H323_FXO_GROUP1_H235_ID";
  $insertsql2.="','".$values['H323_FXO_GROUP1_H235_ID'];
  $insertsql.=",H323_FXO_GROUP1_H235_PASSWD";
  $insertsql2.="','".$values['H323_FXO_GROUP1_H235_PASSWD'];
  $insertsql.=",H323_FXO_L1_IN_G1";
  $insertsql2.="','".$values['H323_FXO_L1_IN_G1'];
  $insertsql.=",H323_FXO_L2_IN_G1";
  $insertsql2.="','".$values['H323_FXO_L2_IN_G1'];
  $insertsql.=",H323_FXO_L3_IN_G1";
  $insertsql2.="','".$values['H323_FXO_L3_IN_G1'];
  $insertsql.=",H323_FXO_L4_IN_G1";
  $insertsql2.="','".$values['H323_FXO_L4_IN_G1'];
  $insertsql.=",H323_FXO_GROUP2_NUMBER";
  $insertsql2.="','".$values['H323_FXO_GROUP2_NUMBER'];
  $insertsql.=",H323_FXO_GROUP2_H323_ID";
  $insertsql2.="','".$values['H323_FXO_GROUP2_H323_ID'];
  $insertsql.=",H323_FXO_GROUP2_GW_PREFIX";
  $insertsql2.="','".$values['H323_FXO_GROUP2_GW_PREFIX'];
  $insertsql.=",H323_FXO_GROUP2_GKADDR";
  $insertsql2.="','".$values['H323_FXO_GROUP2_GKADDR'];
  $insertsql.=",H323_FXO_G2_VOS_ENABLE";
  $insertsql2.="','".$values['H323_FXO_G2_VOS_ENABLE'];
  $insertsql.=",H323_FXO_G2_VOS_MODE";
  $insertsql2.="','".$values['H323_FXO_G2_VOS_MODE'];
  $insertsql.=",H323_FXO_GROUP2_AUTH";
  $insertsql2.="','".$values['H323_FXO_GROUP2_AUTH'];
  $insertsql.=",H323_FXO_GROUP2_H235_ID";
  $insertsql2.="','".$values['H323_FXO_GROUP2_H235_ID'];
  $insertsql.=",H323_FXO_GROUP2_H235_PASSWD";
  $insertsql2.="','".$values['H323_FXO_GROUP2_H235_PASSWD'];
  $insertsql.=",H323_FXO_L1_IN_G2";
  $insertsql2.="','".$values['H323_FXO_L1_IN_G2'];
  $insertsql.=",H323_FXO_L2_IN_G2";
  $insertsql2.="','".$values['H323_FXO_L2_IN_G2'];
  $insertsql.=",H323_FXO_L3_IN_G2";
  $insertsql2.="','".$values['H323_FXO_L3_IN_G2'];
  $insertsql.=",H323_FXO_L4_IN_G2";
  $insertsql2.="','".$values['H323_FXO_L4_IN_G2'];
  $insertsql.=",H323_FXO_GROUP3_NUMBER";
  $insertsql2.="','".$values['H323_FXO_GROUP3_NUMBER'];
  $insertsql.=",H323_FXO_GROUP3_H323_ID";
  $insertsql2.="','".$values['H323_FXO_GROUP3_H323_ID'];
  $insertsql.=",H323_FXO_GROUP3_GW_PREFIX";
  $insertsql2.="','".$values['H323_FXO_GROUP3_GW_PREFIX'];
  $insertsql.=",H323_FXO_GROUP3_GKADDR";
  $insertsql2.="','".$values['H323_FXO_GROUP3_GKADDR'];
  $insertsql.=",H323_FXO_G3_VOS_ENABLE";
  $insertsql2.="','".$values['H323_FXO_G3_VOS_ENABLE'];
  $insertsql.=",H323_FXO_G3_VOS_MODE";
  $insertsql2.="','".$values['H323_FXO_G3_VOS_MODE'];
  $insertsql.=",H323_FXO_GROUP3_AUTH";
  $insertsql2.="','".$values['H323_FXO_GROUP3_AUTH'];
  $insertsql.=",H323_FXO_GROUP3_H235_ID";
  $insertsql2.="','".$values['H323_FXO_GROUP3_H235_ID'];
  $insertsql.=",H323_FXO_GROUP3_H235_PASSWD";
  $insertsql2.="','".$values['H323_FXO_GROUP3_H235_PASSWD'];
  $insertsql.=",H323_FXO_L1_IN_G3";
  $insertsql2.="','".$values['H323_FXO_L1_IN_G3'];
  $insertsql.=",H323_FXO_L2_IN_G3";
  $insertsql2.="','".$values['H323_FXO_L2_IN_G3'];
  $insertsql.=",H323_FXO_L3_IN_G3";
  $insertsql2.="','".$values['H323_FXO_L3_IN_G3'];
  $insertsql.=",H323_FXO_L4_IN_G3";
  $insertsql2.="','".$values['H323_FXO_L4_IN_G3'];
  $insertsql.=",H323_FXO_GROUP4_NUMBER";
  $insertsql2.="','".$values['H323_FXO_GROUP4_NUMBER'];
  $insertsql.=",H323_FXO_GROUP4_H323_ID";
  $insertsql2.="','".$values['H323_FXO_GROUP4_H323_ID'];
  $insertsql.=",H323_FXO_GROUP4_GW_PREFIX";
  $insertsql2.="','".$values['H323_FXO_GROUP4_GW_PREFIX'];
  $insertsql.=",H323_FXO_GROUP4_GKADDR";
  $insertsql2.="','".$values['H323_FXO_GROUP4_GKADDR'];
  $insertsql.=",H323_FXO_G4_VOS_ENABLE";
  $insertsql2.="','".$values['H323_FXO_G4_VOS_ENABLE'];
  $insertsql.=",H323_FXO_G4_VOS_MODE";
  $insertsql2.="','".$values['H323_FXO_G4_VOS_MODE'];
  $insertsql.=",H323_FXO_GROUP4_AUTH";
  $insertsql2.="','".$values['H323_FXO_GROUP4_AUTH'];
  $insertsql.=",H323_FXO_GROUP4_H235_ID";
  $insertsql2.="','".$values['H323_FXO_GROUP4_H235_ID'];
  $insertsql.=",H323_FXO_GROUP4_H235_PASSWD";
  $insertsql2.="','".$values['H323_FXO_GROUP4_H235_PASSWD'];
  $insertsql.=",H323_FXO_L1_IN_G4";
  $insertsql2.="','".$values['H323_FXO_L1_IN_G4'];
  $insertsql.=",H323_FXO_L2_IN_G4";
  $insertsql2.="','".$values['H323_FXO_L2_IN_G4'];
  $insertsql.=",H323_FXO_L3_IN_G4";
  $insertsql2.="','".$values['H323_FXO_L3_IN_G4'];
  $insertsql.=",H323_FXO_L4_IN_G4";
  $insertsql2.="','".$values['H323_FXO_L4_IN_G4'];
/*fxsp*/

  $insertsql.=",SIP_CONTACT2_EXPIRED";
  $insertsql2.="','".$values['SIP_CONTACT2_EXPIRED'];
  $insertsql.=",SIP_CONTACT4_EXPIRED";
  $insertsql2.="','".$values['SIP_CONTACT4_EXPIRED'];
  $insertsql.=",SIP_CONTACT6_EXPIRED";
  $insertsql2.="','".$values['SIP_CONTACT6_EXPIRED'];
  $insertsql.=",SIP_CONTACT8_EXPIRED";
  $insertsql2.="','".$values['SIP_CONTACT8_EXPIRED'];
/*fxs */

  $insertsql.=",SIP_FXS_CONFIG_MODE";
  $insertsql2.="','".$values['SIP_FXS_CONFIG_MODE'];
  $insertsql.=",SIP_CONTACT0_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT0_DIAL_DIGITS'];
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
  $insertsql.=",SIP_CONTACT2_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT2_DIAL_DIGITS'];
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
  $insertsql.=",SIP_CONTACT2_FORWARD_TYPE";
  $insertsql2.="','".$values['SIP_CONTACT2_FORWARD_TYPE'];
  $insertsql.=",SIP_CONTACT2_FORWARD_NUMBER";
  $insertsql2.="','".$values['SIP_CONTACT2_FORWARD_NUMBER'];
  $insertsql.=",SIP_FXS0_USE_BSVR";
  $insertsql2.="','".$values['SIP_FXS0_USE_BSVR'];
  $insertsql.=",SIP_CONTACT3_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT3_PROXY'];
  $insertsql.=",SIP_CONTACT3_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT3_SERVER'];
  $insertsql.=",SIP_CONTACT3_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT3_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT4_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT4_DIAL_DIGITS'];
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
  $insertsql.=",SIP_CONTACT4_FORWARD_TYPE";
  $insertsql2.="','".$values['SIP_CONTACT4_FORWARD_TYPE'];
  $insertsql.=",SIP_CONTACT4_FORWARD_NUMBER";
  $insertsql2.="','".$values['SIP_CONTACT4_FORWARD_NUMBER'];
  $insertsql.=",SIP_FXS1_USE_BSVR";
  $insertsql2.="','".$values['SIP_FXS1_USE_BSVR'];
  $insertsql.=",SIP_CONTACT5_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT5_PROXY'];
  $insertsql.=",SIP_CONTACT5_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT5_SERVER'];
  $insertsql.=",SIP_CONTACT5_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT5_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT6_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT6_DIAL_DIGITS'];
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
  $insertsql.=",SIP_CONTACT6_FORWARD_TYPE";
  $insertsql2.="','".$values['SIP_CONTACT6_FORWARD_TYPE'];
  $insertsql.=",SIP_CONTACT6_FORWARD_NUMBER";
  $insertsql2.="','".$values['SIP_CONTACT6_FORWARD_NUMBER'];
  $insertsql.=",SIP_FXS2_USE_BSVR";
  $insertsql2.="','".$values['SIP_FXS2_USE_BSVR'];
  $insertsql.=",SIP_CONTACT7_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT7_PROXY'];
  $insertsql.=",SIP_CONTACT7_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT7_SERVER'];
  $insertsql.=",SIP_CONTACT7_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT7_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT8_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT8_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT8_DISPLAY_NAME";
  $insertsql2.="','".$values['SIP_CONTACT8_DISPLAY_NAME'];
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
  $insertsql.=",SIP_CONTACT8_FORWARD_TYPE";
  $insertsql2.="','".$values['SIP_CONTACT8_FORWARD_TYPE'];
  $insertsql.=",SIP_CONTACT8_FORWARD_NUMBER";
  $insertsql2.="','".$values['SIP_CONTACT8_FORWARD_NUMBER'];
  $insertsql.=",SIP_FXS3_USE_BSVR";
  $insertsql2.="','".$values['SIP_FXS3_USE_BSVR'];
  $insertsql.=",SIP_CONTACT9_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT9_PROXY'];
  $insertsql.=",SIP_CONTACT9_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT9_SERVER'];
  $insertsql.=",SIP_CONTACT9_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT9_HOME_DOMAIN'];

/*fxo*/
  $insertsql.=",SIP_FXO_CONFIG_MODE";
  $insertsql2.="','".$values['SIP_FXO_CONFIG_MODE'];
  $insertsql.=",SIP_CONTACT10_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT10_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT10_DISPLAY_NAME";
  $insertsql2.="','".$values['SIP_CONTACT10_DISPLAY_NAME'];
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
  $insertsql.=",SIP_FXO_USE_BSVR";
  $insertsql2.="','".$values['SIP_FXO_USE_BSVR'];
  $insertsql.=",SIP_CONTACT11_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT11_PROXY'];
  $insertsql.=",SIP_CONTACT11_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT11_SERVER'];
  $insertsql.=",SIP_CONTACT11_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT11_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT12_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT12_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT12_DISPLAY_NAME";
  $insertsql2.="','".$values['SIP_CONTACT12_DISPLAY_NAME'];
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
  $insertsql.=",SIP_FXO0_USE_BSVR";
  $insertsql2.="','".$values['SIP_FXO0_USE_BSVR'];
  $insertsql.=",SIP_CONTACT13_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT13_PROXY'];
  $insertsql.=",SIP_CONTACT13_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT13_SERVER'];
  $insertsql.=",SIP_CONTACT13_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT13_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT14_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT14_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT14_DISPLAY_NAME";
  $insertsql2.="','".$values['SIP_CONTACT14_DISPLAY_NAME'];
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
  $insertsql.=",SIP_FXO1_USE_BSVR";
  $insertsql2.="','".$values['SIP_FXO1_USE_BSVR'];
  $insertsql.=",SIP_CONTACT15_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT15_PROXY'];
  $insertsql.=",SIP_CONTACT15_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT15_SERVER'];
  $insertsql.=",SIP_CONTACT15_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT15_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT16_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT16_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT16_DISPLAY_NAME";
  $insertsql2.="','".$values['SIP_CONTACT16_DISPLAY_NAME'];
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
  $insertsql.=",SIP_FXO2_USE_BSVR";
  $insertsql2.="','".$values['SIP_FXO2_USE_BSVR'];
  $insertsql.=",SIP_CONTACT17_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT17_PROXY'];
  $insertsql.=",SIP_CONTACT17_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT17_SERVER'];
  $insertsql.=",SIP_CONTACT17_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT17_HOME_DOMAIN'];
  $insertsql.=",SIP_CONTACT18_DIAL_DIGITS";
  $insertsql2.="','".$values['SIP_CONTACT18_DIAL_DIGITS'];
  $insertsql.=",SIP_CONTACT18_DISPLAY_NAME";
  $insertsql2.="','".$values['SIP_CONTACT18_DISPLAY_NAME'];
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
  $insertsql.=",SIP_FXO3_USE_BSVR";
  $insertsql2.="','".$values['SIP_FXO3_USE_BSVR'];
  $insertsql.=",SIP_CONTACT19_PROXY";
  $insertsql2.="','".$values['SIP_CONTACT19_PROXY'];
  $insertsql.=",SIP_CONTACT19_SERVER";
  $insertsql2.="','".$values['SIP_CONTACT19_SERVER'];
  $insertsql.=",SIP_CONTACT19_HOME_DOMAIN";
  $insertsql2.="','".$values['SIP_CONTACT19_HOME_DOMAIN'];
 
/*fxo setting*/
  $insertsql.=",O_L1_DISABLE_OUT";
  $insertsql2.="','".$values['O_L1_DISABLE_OUT'];
  $insertsql.=",L1_FW_NUM_TO_PSTN";
  $insertsql2.="','".$values['L1_FW_NUM_TO_PSTN'];
  $insertsql.=",L1_FW_TO_PSTN_PASSWD";
  $insertsql2.="','".$values['L1_FW_TO_PSTN_PASSWD'];
  $insertsql.=",L1_P_DIGIT_MAP";
  $insertsql2.="','".$values['L1_P_DIGIT_MAP'];
  $insertsql.=",O_L1_DISABLE_IN";
  $insertsql2.="','".$values['O_L1_DISABLE_IN'];
  $insertsql.=",L1_FW_NUM_TO_VOIP";
  $insertsql2.="','".$values['L1_FW_NUM_TO_VOIP'];
  $insertsql.=",L1_FW_TO_VOIP_PASSWD";
  $insertsql2.="','".$values['L1_FW_TO_VOIP_PASSWD'];
  $insertsql.=",L1_V_DIGIT_MAP";
  $insertsql2.="','".$values['L1_V_DIGIT_MAP'];
  $insertsql.=",O_L1_VOIP_ANSWER_T";
  $insertsql2.="','".$values['O_L1_VOIP_ANSWER_T'];
  $insertsql.=",O_L2_DISABLE_OUT";
  $insertsql2.="','".$values['O_L2_DISABLE_OUT'];
  $insertsql.=",L2_FW_NUM_TO_PSTN";
  $insertsql2.="','".$values['L2_FW_NUM_TO_PSTN'];
  $insertsql.=",L2_FW_TO_PSTN_PASSWD";
  $insertsql2.="','".$values['L2_FW_TO_PSTN_PASSWD'];
  $insertsql.=",L2_P_DIGIT_MAP";
  $insertsql2.="','".$values['L2_P_DIGIT_MAP'];
  $insertsql.=",O_L2_DISABLE_IN";
  $insertsql2.="','".$values['O_L2_DISABLE_IN'];
  $insertsql.=",L2_FW_NUM_TO_VOIP";
  $insertsql2.="','".$values['L2_FW_NUM_TO_VOIP'];
  $insertsql.=",L2_FW_TO_VOIP_PASSWD";
  $insertsql2.="','".$values['L2_FW_TO_VOIP_PASSWD'];
  $insertsql.=",L2_V_DIGIT_MAP";
  $insertsql2.="','".$values['L2_V_DIGIT_MAP'];
  $insertsql.=",O_L2_VOIP_ANSWER_T";
  $insertsql2.="','".$values['O_L2_VOIP_ANSWER_T'];
  $insertsql.=",O_L3_DISABLE_OUT";
  $insertsql2.="','".$values['O_L3_DISABLE_OUT'];
  $insertsql.=",L3_FW_NUM_TO_PSTN";
  $insertsql2.="','".$values['L3_FW_NUM_TO_PSTN'];
  $insertsql.=",L3_FW_TO_PSTN_PASSWD";
  $insertsql2.="','".$values['L3_FW_TO_PSTN_PASSWD'];
  $insertsql.=",L3_P_DIGIT_MAP";
  $insertsql2.="','".$values['L3_P_DIGIT_MAP'];
  $insertsql.=",O_L3_DISABLE_IN";
  $insertsql2.="','".$values['O_L3_DISABLE_IN'];
  $insertsql.=",L3_FW_NUM_TO_VOIP";
  $insertsql2.="','".$values['L3_FW_NUM_TO_VOIP'];
  $insertsql.=",L3_FW_TO_VOIP_PASSWD";
  $insertsql2.="','".$values['L3_FW_TO_VOIP_PASSWD'];
  $insertsql.=",L3_V_DIGIT_MAP";
  $insertsql2.="','".$values['L3_V_DIGIT_MAP'];
  $insertsql.=",O_L3_VOIP_ANSWER_T";
  $insertsql2.="','".$values['O_L3_VOIP_ANSWER_T'];
  $insertsql.=",O_L4_DISABLE_OUT";
  $insertsql2.="','".$values['O_L4_DISABLE_OUT'];
  $insertsql.=",L4_FW_NUM_TO_PSTN";
  $insertsql2.="','".$values['L4_FW_NUM_TO_PSTN'];
  $insertsql.=",L4_FW_TO_PSTN_PASSWD";
  $insertsql2.="','".$values['L4_FW_TO_PSTN_PASSWD'];
  $insertsql.=",L4_P_DIGIT_MAP";
  $insertsql2.="','".$values['L4_P_DIGIT_MAP'];
  $insertsql.=",O_L4_DISABLE_IN";
  $insertsql2.="','".$values['O_L4_DISABLE_IN'];
  $insertsql.=",L4_FW_NUM_TO_VOIP";
  $insertsql2.="','".$values['L4_FW_NUM_TO_VOIP'];
  $insertsql.=",L4_FW_TO_VOIP_PASSWD";
  $insertsql2.="','".$values['L4_FW_TO_VOIP_PASSWD'];
  $insertsql.=",L4_V_DIGIT_MAP";
  $insertsql2.="','".$values['L4_V_DIGIT_MAP'];
  $insertsql.=",O_L4_VOIP_ANSWER_T";
  $insertsql2.="','".$values['O_L4_VOIP_ANSWER_T'];
  $insertsql.=",EARLY_MEDIA";
  $insertsql2.="','".$values['EARLY_MEDIA'];
  $insertsql.=",IVR_ENABLE";
  $insertsql2.="','".$values['IVR_ENABLE'];
  
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
 
/*dial map */
 
  $insertsql.=",S1_DIGIT_MAP";
  $insertsql2.="','".$values['S1_DIGIT_MAP'];
  $insertsql.=",S2_DIGIT_MAP";
  $insertsql2.="','".$values['S2_DIGIT_MAP'];
  $insertsql.=",S3_DIGIT_MAP";
  $insertsql2.="','".$values['S3_DIGIT_MAP'];
  $insertsql.=",S4_DIGIT_MAP";
  $insertsql2.="','".$values['S4_DIGIT_MAP'];

  
/*fxo p */
/*
  $insertsql.=",O_L1_DISABLE_OUT";
  $insertsql2.="','".$values['O_L1_DISABLE_OUT'];
  $insertsql.=",L1_FW_NUM_TO_PSTN";
  $insertsql2.="','".$values['L1_FW_NUM_TO_PSTN'];
  $insertsql.=",L1_FW_TO_PSTN_PASSWD";
  $insertsql2.="','".$values['L1_FW_TO_PSTN_PASSWD'];
  $insertsql.=",L1_P_DIGIT_MAP";
  $insertsql2.="','".$values['L1_P_DIGIT_MAP'];
  $insertsql.=",O_L1_DISABLE_IN";
  $insertsql2.="','".$values['O_L1_DISABLE_IN'];
  $insertsql.=",L1_FW_NUM_TO_VOIP";
  $insertsql2.="','".$values['L1_FW_NUM_TO_VOIP'];
  $insertsql.=",L1_FW_TO_VOIP_PASSWD";
  $insertsql2.="','".$values['L1_FW_TO_VOIP_PASSWD'];
  $insertsql.=",L1_V_DIGIT_MAP";
  $insertsql2.="','".$values['L1_V_DIGIT_MAP'];
  $insertsql.=",O_L1_VOIP_ANSWER_T";
  $insertsql2.="','".$values['O_L1_VOIP_ANSWER_T'];
  $insertsql.=",O_L2_DISABLE_OUT";
  $insertsql2.="','".$values['O_L2_DISABLE_OUT'];
  $insertsql.=",L2_FW_NUM_TO_PSTN";
  $insertsql2.="','".$values['L2_FW_NUM_TO_PSTN'];
  $insertsql.=",L2_FW_TO_PSTN_PASSWD";
  $insertsql2.="','".$values['L2_FW_TO_PSTN_PASSWD'];
  $insertsql.=",L2_P_DIGIT_MAP";
  $insertsql2.="','".$values['L2_P_DIGIT_MAP'];
  $insertsql.=",O_L2_DISABLE_IN";
  $insertsql2.="','".$values['O_L2_DISABLE_IN'];
  $insertsql.=",L2_FW_NUM_TO_VOIP";
  $insertsql2.="','".$values['L2_FW_NUM_TO_VOIP'];
  $insertsql.=",L2_FW_TO_VOIP_PASSWD";
  $insertsql2.="','".$values['L2_FW_TO_VOIP_PASSWD'];
  $insertsql.=",L2_V_DIGIT_MAP";
  $insertsql2.="','".$values['L2_V_DIGIT_MAP'];
  $insertsql.=",O_L2_VOIP_ANSWER_T";
  $insertsql2.="','".$values['O_L2_VOIP_ANSWER_T'];
  $insertsql.=",O_L3_DISABLE_OUT";
  $insertsql2.="','".$values['O_L3_DISABLE_OUT'];
  $insertsql.=",L3_FW_NUM_TO_PSTN";
  $insertsql2.="','".$values['L3_FW_NUM_TO_PSTN'];
  $insertsql.=",L3_FW_TO_PSTN_PASSWD";
  $insertsql2.="','".$values['L3_FW_TO_PSTN_PASSWD'];
  $insertsql.=",L3_P_DIGIT_MAP";
  $insertsql2.="','".$values['L3_P_DIGIT_MAP'];
  $insertsql.=",O_L3_DISABLE_IN";
  $insertsql2.="','".$values['O_L3_DISABLE_IN'];
  $insertsql.=",L3_FW_NUM_TO_VOIP";
  $insertsql2.="','".$values['L3_FW_NUM_TO_VOIP'];
  $insertsql.=",L3_FW_TO_VOIP_PASSWD";
  $insertsql2.="','".$values['L3_FW_TO_VOIP_PASSWD'];
  $insertsql.=",L3_V_DIGIT_MAP";
  $insertsql2.="','".$values['L3_V_DIGIT_MAP'];
  $insertsql.=",O_L3_VOIP_ANSWER_T";
  $insertsql2.="','".$values['O_L3_VOIP_ANSWER_T'];
  $insertsql.=",O_L4_DISABLE_OUT";
  $insertsql2.="','".$values['O_L4_DISABLE_OUT'];
  $insertsql.=",L4_FW_NUM_TO_PSTN";
  $insertsql2.="','".$values['L4_FW_NUM_TO_PSTN'];
  $insertsql.=",L4_FW_TO_PSTN_PASSWD";
  $insertsql2.="','".$values['L4_FW_TO_PSTN_PASSWD'];
  $insertsql.=",L4_P_DIGIT_MAP";
  $insertsql2.="','".$values['L4_P_DIGIT_MAP'];
  $insertsql.=",O_L4_DISABLE_IN";
  $insertsql2.="','".$values['O_L4_DISABLE_IN'];
  $insertsql.=",L4_FW_NUM_TO_VOIP";
  $insertsql2.="','".$values['L4_FW_NUM_TO_VOIP'];
  $insertsql.=",L4_FW_TO_VOIP_PASSWD";
  $insertsql2.="','".$values['L4_FW_TO_VOIP_PASSWD'];
  $insertsql.=",L4_V_DIGIT_MAP";
  $insertsql2.="','".$values['L4_V_DIGIT_MAP'];
  $insertsql.=",O_L4_VOIP_ANSWER_T";
  $insertsql2.="','".$values['O_L4_VOIP_ANSWER_T'];
  $insertsql.=",EARLY_MEDIA";
  $insertsql2.="','".$values['EARLY_MEDIA'];
  $insertsql.=",IVR_ENABLE";
  $insertsql2.="','".$values['IVR_ENABLE']; 
  
/*fxo p */
/*
  $insertsql.=",O_L1_DISABLE_OUT";
  $insertsql2.="','".$values['O_L1_DISABLE_OUT'];
  $insertsql.=",L1_FW_NUM_TO_PSTN";
  $insertsql2.="','".$values['L1_FW_NUM_TO_PSTN'];
  $insertsql.=",L1_FW_TO_PSTN_PASSWD";
  $insertsql2.="','".$values['L1_FW_TO_PSTN_PASSWD'];
  $insertsql.=",L1_P_DIGIT_MAP";
  $insertsql2.="','".$values['L1_P_DIGIT_MAP'];
  $insertsql.=",O_L1_DISABLE_IN";
  $insertsql2.="','".$values['O_L1_DISABLE_IN'];
  $insertsql.=",L1_FW_NUM_TO_VOIP";
  $insertsql2.="','".$values['L1_FW_NUM_TO_VOIP'];
  $insertsql.=",L1_FW_TO_VOIP_PASSWD";
  $insertsql2.="','".$values['L1_FW_TO_VOIP_PASSWD'];
  $insertsql.=",L1_V_DIGIT_MAP";
  $insertsql2.="','".$values['L1_V_DIGIT_MAP'];
  $insertsql.=",O_L1_VOIP_ANSWER_T";
  $insertsql2.="','".$values['O_L1_VOIP_ANSWER_T'];
  $insertsql.=",O_L2_DISABLE_OUT";
  $insertsql2.="','".$values['O_L2_DISABLE_OUT'];
  $insertsql.=",L2_FW_NUM_TO_PSTN";
  $insertsql2.="','".$values['L2_FW_NUM_TO_PSTN'];
  $insertsql.=",L2_FW_TO_PSTN_PASSWD";
  $insertsql2.="','".$values['L2_FW_TO_PSTN_PASSWD'];
  $insertsql.=",L2_P_DIGIT_MAP";
  $insertsql2.="','".$values['L2_P_DIGIT_MAP'];
  $insertsql.=",O_L2_DISABLE_IN";
  $insertsql2.="','".$values['O_L2_DISABLE_IN'];
  $insertsql.=",L2_FW_NUM_TO_VOIP";
  $insertsql2.="','".$values['L2_FW_NUM_TO_VOIP'];
  $insertsql.=",L2_FW_TO_VOIP_PASSWD";
  $insertsql2.="','".$values['L2_FW_TO_VOIP_PASSWD'];
  $insertsql.=",L2_V_DIGIT_MAP";
  $insertsql2.="','".$values['L2_V_DIGIT_MAP'];
  $insertsql.=",O_L2_VOIP_ANSWER_T";
  $insertsql2.="','".$values['O_L2_VOIP_ANSWER_T'];
  $insertsql.=",O_L3_DISABLE_OUT";
  $insertsql2.="','".$values['O_L3_DISABLE_OUT'];
  $insertsql.=",L3_FW_NUM_TO_PSTN";
  $insertsql2.="','".$values['L3_FW_NUM_TO_PSTN'];
  $insertsql.=",L3_FW_TO_PSTN_PASSWD";
  $insertsql2.="','".$values['L3_FW_TO_PSTN_PASSWD'];
  $insertsql.=",L3_P_DIGIT_MAP";
  $insertsql2.="','".$values['L3_P_DIGIT_MAP'];
  $insertsql.=",O_L3_DISABLE_IN";
  $insertsql2.="','".$values['O_L3_DISABLE_IN'];
  $insertsql.=",L3_FW_NUM_TO_VOIP";
  $insertsql2.="','".$values['L3_FW_NUM_TO_VOIP'];
  $insertsql.=",L3_FW_TO_VOIP_PASSWD";
  $insertsql2.="','".$values['L3_FW_TO_VOIP_PASSWD'];
  $insertsql.=",L3_V_DIGIT_MAP";
  $insertsql2.="','".$values['L3_V_DIGIT_MAP'];
  $insertsql.=",O_L3_VOIP_ANSWER_T";
  $insertsql2.="','".$values['O_L3_VOIP_ANSWER_T'];
  $insertsql.=",O_L4_DISABLE_OUT";
  $insertsql2.="','".$values['O_L4_DISABLE_OUT'];
  $insertsql.=",L4_FW_NUM_TO_PSTN";
  $insertsql2.="','".$values['L4_FW_NUM_TO_PSTN'];
  $insertsql.=",L4_FW_TO_PSTN_PASSWD";
  $insertsql2.="','".$values['L4_FW_TO_PSTN_PASSWD'];
  $insertsql.=",L4_P_DIGIT_MAP";
  $insertsql2.="','".$values['L4_P_DIGIT_MAP'];
  $insertsql.=",O_L4_DISABLE_IN";
  $insertsql2.="','".$values['O_L4_DISABLE_IN'];
  $insertsql.=",L4_FW_NUM_TO_VOIP";
  $insertsql2.="','".$values['L4_FW_NUM_TO_VOIP'];
  $insertsql.=",L4_FW_TO_VOIP_PASSWD";
  $insertsql2.="','".$values['L4_FW_TO_VOIP_PASSWD'];
  $insertsql.=",L4_V_DIGIT_MAP";
  $insertsql2.="','".$values['L4_V_DIGIT_MAP'];
  $insertsql.=",O_L4_VOIP_ANSWER_T";
  $insertsql2.="','".$values['O_L4_VOIP_ANSWER_T'];
  $insertsql.=",EARLY_MEDIA";
  $insertsql2.="','".$values['EARLY_MEDIA'];
  $insertsql.=",IVR_ENABLE";
  $insertsql2.="','".$values['IVR_ENABLE'];
*/
?>
