<?php
session_start();
define('OK',true);
require_once('global.php');
//setcookie("adminname","");
//setcookie("adminId","");
unset($_SESSION['autocfg_adminname']);
unset($_SESSION['autocfg_adminId']);
echo "<meta http-equiv=refresh content=1;url=\"{$URL}\">";
?>

