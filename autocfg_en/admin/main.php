<?php

!defined('OK') && exit('ForbIdden');

$sysversion=PHP_VERSION;
$sysos=$_SERVER['SERVER_SOFTWARE'];
$max_upload= ini_get('file_uploads') ? ini_get('upload_max_filesize') : 'Disabled';
isset($_SESSION) ? $ifcookie="SUCCESS" : $ifcookie="FAIL";

require_once template('main');

?>
