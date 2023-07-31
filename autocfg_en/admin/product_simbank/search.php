<?php
		switch($show){
			case "number":
				$sqlname=" where SN='".$_POST['number']."'";
				//WriteErrMsg("<br><li>不存在此类型</li>");
				break;
			case "user":
				$sqlname=" where USER='".$_POST['user']."'";
				break;
			default:
				$sqlname=" where SN=000000000";
		}		
?>
