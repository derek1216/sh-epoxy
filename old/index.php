<?php
$aMicrotime[0] = microtime(true);
session_start();
header('Content-Type: text/html; charset=utf-8');

/*if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) {
	ob_start('ob_gzhandler');
}else{
	ob_start();
}*/

include('constants.php');
include_once(PATH_EXEC.'/host.php');
include_once(PATH_ARCHIVER.'/config.php');
include_once(PATH_ARCHIVER.'/permissions.php');
include_once(PATH_LIBRARY.'/db.php');
include_once(PATH_LIBRARY.'/node.php');
include_once(PATH_LIBRARY.'/common.php');

include_once(PATH_ROOT.'/frontend.php');
include_once(PATH_EXEC.'/display.php');

/*
$aMicrotime[1] = microtime(true);

echo $aMicrotime[1] - $aMicrotime[0];
echo '<br />';

function convert($i) {
	$unit = array('b','kb','mb','gb','tb','pb');
	return @round($i / pow(1024, ($i = floor(log($size, 1024)))), 2).' '.$unit[$i];
}
echo convert(memory_get_usage(true));
*/
?>