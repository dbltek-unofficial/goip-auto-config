<?php 
  $values['SMB_MODE'] = $_POST['smb_mode'] ;
  $updatesql.=",SMB_MODE='".$values['SMB_MODE']."'";
if($values['SMB_MODE'] == 'cli'):
  $values['SMB_SVR'] = $_POST['smb_server'] ;
  $updatesql.=",SMB_SVR='".$values['SMB_SVR']."'";
  $values['SMB_ID'] = $_POST['smb_id'] ;
  $updatesql.=",SMB_ID='".$values['SMB_ID']."'";
  $values['SMB_KEY'] = $_POST['smb_key'] ;
  $updatesql.=",SMB_KEY='".$values['SMB_KEY']."'";
endif; 

if($values['SMB_MODE'] == 'sche_local'):
  $values['SMB_SERVER'] = $_POST['smb_server'] ;
  $updatesql.=",SMB_SERVER='".$values['SMB_SERVER']."'";
  $values['SMB_ID'] = $_POST['smb_id2'] ;
  $updatesql.=",SMB_ID='".$values['SMB_ID']."'";
  $values['SMB_KEY'] = $_POST['smb_key2'] ;
  $updatesql.=",SMB_KEY='".$values['SMB_KEY']."'";
endif;


if($values['SMB_MODE'] == 'svr'):
  $values['SCHE_LC_PORT'] = $_POST['sche_local_port'] ;
  $updatesql.=",SCHE_LC_PORT='".$values['SCHE_LC_PORT']."'";
  $values['RD_IMEI'] = $_POST['sche_random_imei']=='on'?'1':'0';
  $updatesql.=",RD_IMEI='".$values['RD_IMEI']."'";
  $values['SCHE_MODE'] = $_POST['sche_mode'] ;
  $updatesql.=",SCHE_MODE='".$values['SCHE_MODE']."'";
if($values['SCHE_MODE'] == 'sche'):
  $values['WORK_INT'] = $_POST['work_int'] ;
  $updatesql.=",WORK_INT='".$values['WORK_INT']."'";
  $values['SLEEP_INT'] = $_POST['sleep_int'] ;
  $updatesql.=",SLEEP_INT='".$values['SLEEP_INT']."'";
endif; 
  $values['M1_ID'] = $_POST['m1_id'] ;
  $updatesql.=",M1_ID='".$values['M1_ID']."'";
  $values['M1_AID'] = $_POST['m1_aid'] ;
  $updatesql.=",M1_AID='".$values['M1_AID']."'";
  $values['M1_KEY'] = $_POST['m1_key'] ;
  $updatesql.=",M1_KEY='".$values['M1_KEY']."'";
  $values['M1_LINE'] = $_POST['m1_line'] ;
  $updatesql.=",M1_LINE='".$values['M1_LINE']."'";
  $values['M2_ID'] = $_POST['m2_id'] ;
  $updatesql.=",M2_ID='".$values['M2_ID']."'";
  $values['M2_AID'] = $_POST['m2_aid'] ;
  $updatesql.=",M2_AID='".$values['M2_AID']."'";
  $values['M2_KEY'] = $_POST['m2_key'] ;
  $updatesql.=",M2_KEY='".$values['M2_KEY']."'";
  $values['M2_LINE'] = $_POST['m2_line'] ;
  $updatesql.=",M2_LINE='".$values['M2_LINE']."'";
  $values['M3_ID'] = $_POST['m3_id'] ;
  $updatesql.=",M3_ID='".$values['M3_ID']."'";
  $values['M3_AID'] = $_POST['m3_aid'] ;
  $updatesql.=",M3_AID='".$values['M3_AID']."'";
  $values['M3_KEY'] = $_POST['m3_key'] ;
  $updatesql.=",M3_KEY='".$values['M3_KEY']."'";
  $values['M3_LINE'] = $_POST['m3_line'] ;
  $updatesql.=",M3_LINE='".$values['M3_LINE']."'";
  $values['M4_ID'] = $_POST['m4_id'] ;
  $updatesql.=",M4_ID='".$values['M4_ID']."'";
  $values['M4_AID'] = $_POST['m4_aid'] ;
  $updatesql.=",M4_AID='".$values['M4_AID']."'";
  $values['M4_KEY'] = $_POST['m4_key'] ;
  $updatesql.=",M4_KEY='".$values['M4_KEY']."'";
  $values['M4_LINE'] = $_POST['m4_line'] ;
  $updatesql.=",M4_LINE='".$values['M4_LINE']."'";
  $values['M5_ID'] = $_POST['m5_id'] ;
  $updatesql.=",M5_ID='".$values['M5_ID']."'";
  $values['M5_AID'] = $_POST['m5_aid'] ;
  $updatesql.=",M5_AID='".$values['M5_AID']."'";
  $values['M5_KEY'] = $_POST['m5_key'] ;
  $updatesql.=",M5_KEY='".$values['M5_KEY']."'";
  $values['M5_LINE'] = $_POST['m5_line'] ;
  $updatesql.=",M5_LINE='".$values['M5_LINE']."'";
  $values['M6_ID'] = $_POST['m6_id'] ;
  $updatesql.=",M6_ID='".$values['M6_ID']."'";
  $values['M6_AID'] = $_POST['m6_aid'] ;
  $updatesql.=",M6_AID='".$values['M6_AID']."'";
  $values['M6_KEY'] = $_POST['m6_key'] ;
  $updatesql.=",M6_KEY='".$values['M6_KEY']."'";
  $values['M6_LINE'] = $_POST['m6_line'] ;
  $updatesql.=",M6_LINE='".$values['M6_LINE']."'";
  $values['M7_ID'] = $_POST['m7_id'] ;
  $updatesql.=",M7_ID='".$values['M7_ID']."'";
  $values['M7_AID'] = $_POST['m7_aid'] ;
  $updatesql.=",M7_AID='".$values['M7_AID']."'";
  $values['M7_KEY'] = $_POST['m7_key'] ;
  $updatesql.=",M7_KEY='".$values['M7_KEY']."'";
  $values['M7_LINE'] = $_POST['m7_line'] ;
  $updatesql.=",M7_LINE='".$values['M7_LINE']."'";
  $values['M8_ID'] = $_POST['m8_id'] ;
  $updatesql.=",M8_ID='".$values['M8_ID']."'";
  $values['M8_AID'] = $_POST['m8_aid'] ;
  $updatesql.=",M8_AID='".$values['M8_AID']."'";
  $values['M8_KEY'] = $_POST['m8_key'] ;
  $updatesql.=",M8_KEY='".$values['M8_KEY']."'";
  $values['M8_LINE'] = $_POST['m8_line'] ;
  $updatesql.=",M8_LINE='".$values['M8_LINE']."'";
endif; 
  $values['AUTOCFG'] = $_POST['auto_config']=='on'?'1':'0';
  $updatesql.=",AUTOCFG='".$values['AUTOCFG']."'";
if($values['AUTOCFG'] == 1):
  $values['AUTOCFG_SERVER'] = $_POST['auto_config_server'] ;
  $updatesql.=",AUTOCFG_SERVER='".$values['AUTOCFG_SERVER']."'";
  $values['AUTOCFG_REFRESH'] = $_POST['auto_config_refresh'] ;
  $updatesql.=",AUTOCFG_REFRESH='".$values['AUTOCFG_REFRESH']."'";
endif; 
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


  $insertsql.=",SMB_MODE";
  $insertsql2.="','".$values['SMB_MODE'];
  $insertsql.=",SMB_SVR";
  $insertsql2.="','".$values['SMB_SVR'];
  $insertsql.=",SMB_SERVER";
  $insertsql2.="','".$values['SMB_SERVER'];
  $insertsql.=",SMB_ID";
  $insertsql2.="','".$values['SMB_ID'];
  $insertsql.=",SMB_KEY";
  $insertsql2.="','".$values['SMB_KEY'];
  $insertsql.=",SCHE_LC_PORT";
  $insertsql2.="','".$values['SCHE_LC_PORT'];
  $insertsql.=",RD_IMEI";
  $insertsql2.="','".$values['RD_IMEI'];
  $insertsql.=",SCHE_MODE";
  $insertsql2.="','".$values['SCHE_MODE'];
  $insertsql.=",WORK_INT";
  $insertsql2.="','".$values['WORK_INT'];
  $insertsql.=",SLEEP_INT";
  $insertsql2.="','".$values['SLEEP_INT'];
  $insertsql.=",M1_ID";
  $insertsql2.="','".$values['M1_ID'];
  $insertsql.=",M1_AID";
  $insertsql2.="','".$values['M1_AID'];
  $insertsql.=",M1_KEY";
  $insertsql2.="','".$values['M1_KEY'];
  $insertsql.=",M1_LINE";
  $insertsql2.="','".$values['M1_LINE'];
  $insertsql.=",M2_ID";
  $insertsql2.="','".$values['M2_ID'];
  $insertsql.=",M2_AID";
  $insertsql2.="','".$values['M2_AID'];
  $insertsql.=",M2_KEY";
  $insertsql2.="','".$values['M2_KEY'];
  $insertsql.=",M2_LINE";
  $insertsql2.="','".$values['M2_LINE'];
  $insertsql.=",M3_ID";
  $insertsql2.="','".$values['M3_ID'];
  $insertsql.=",M3_AID";
  $insertsql2.="','".$values['M3_AID'];
  $insertsql.=",M3_KEY";
  $insertsql2.="','".$values['M3_KEY'];
  $insertsql.=",M3_LINE";
  $insertsql2.="','".$values['M3_LINE'];
  $insertsql.=",M4_ID";
  $insertsql2.="','".$values['M4_ID'];
  $insertsql.=",M4_AID";
  $insertsql2.="','".$values['M4_AID'];
  $insertsql.=",M4_KEY";
  $insertsql2.="','".$values['M4_KEY'];
  $insertsql.=",M4_LINE";
  $insertsql2.="','".$values['M4_LINE'];
  $insertsql.=",M5_ID";
  $insertsql2.="','".$values['M5_ID'];
  $insertsql.=",M5_AID";
  $insertsql2.="','".$values['M5_AID'];
  $insertsql.=",M5_KEY";
  $insertsql2.="','".$values['M5_KEY'];
  $insertsql.=",M5_LINE";
  $insertsql2.="','".$values['M5_LINE'];
  $insertsql.=",M6_ID";
  $insertsql2.="','".$values['M6_ID'];
  $insertsql.=",M6_AID";
  $insertsql2.="','".$values['M6_AID'];
  $insertsql.=",M6_KEY";
  $insertsql2.="','".$values['M6_KEY'];
  $insertsql.=",M6_LINE";
  $insertsql2.="','".$values['M6_LINE'];
  $insertsql.=",M7_ID";
  $insertsql2.="','".$values['M7_ID'];
  $insertsql.=",M7_AID";
  $insertsql2.="','".$values['M7_AID'];
  $insertsql.=",M7_KEY";
  $insertsql2.="','".$values['M7_KEY'];
  $insertsql.=",M7_LINE";
  $insertsql2.="','".$values['M7_LINE'];
  $insertsql.=",M8_ID";
  $insertsql2.="','".$values['M8_ID'];
  $insertsql.=",M8_AID";
  $insertsql2.="','".$values['M8_AID'];
  $insertsql.=",M8_KEY";
  $insertsql2.="','".$values['M8_KEY'];
  $insertsql.=",M8_LINE";
  $insertsql2.="','".$values['M8_LINE'];
  
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

  
?>