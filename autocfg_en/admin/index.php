<?php
session_start();
define('OK',true);
error_reporting(0);
require_once('global.php');
if(!isset($_SESSION['autocfg_adminname'])) {
	require_once template('login');
} else {
	if(isset($_GET['job'])) {
		switch($_GET['job']) {
			case 'left':
				require_once('left.php');
				break;
			case 'main':
				require_once('main.php');
				break;
			case 'top':
				require_once template('top');
				break;
			case 'projectclass':
				require_once('projectclass.php');
				break;
			case 'muban':
				require_once('muban.php');
				break;
			case 'product':
				require_once('product.php');
				break;
			case 'quit':
				echo "<meta http-equiv=refresh content=1;url=\"logout.php\">";
				break;
			case 'productmanage':
				require_once('productmanage.php');
				break;
			case 'productseach':
				require_once('productseach.php');
				break;
			case 'productseachbefore':
				require_once('productseachbefore.php');
				break;
			case 'productseach':
				require_once('productseach.php');
				break;
				break;	
			case 'productmodifymore':
				require_once('productmodifymore.php');
				break;		
			case 'modifypwd':
				require_once('modifypwd.php');
				break;
			case 'admin':
				require_once('admin.php');
				break;
			case 'user':
				require_once('user.php');
				break;
			case 'remote':
				require_once('remote.php');
				break;
			default:
				require_once template('main');
		}
	} else {
	require_once template('index');
	}
}

?>