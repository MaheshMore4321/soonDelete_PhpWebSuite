<?php
//3.1.2 MariaDB service support

require 'config.inc.php';
require 'wampserver.lib.php';

$newServicesNames = array();
$message = '';

if(empty($_SERVER['argv'][1])) {
	$newName = false;
}
else {
	$numSuffix = intval(trim($_SERVER['argv'][1]));
	if($numSuffix < 0 || $numSuffix > 9999) {
		$message .= "Invalid suffix ".$numSuffix." - Replaced  by 0\n";
		$numSuffix = 0;
	}
	if($numSuffix == 64 ) {
		$numSuffix = 0;
		$message .= "wampapache64 service could exist - Suffix 64 replaced by 0\n";
	}
	//Check if service 'new' name already exist
	$newServices = array('wampapache'.$numSuffix, 'wampmysqld'.$numSuffix, 'wampmariadb'.$numSuffix);
	$newName = true;
	foreach($newServices as $value ) {
		$command = 'sc query '.$value.' | FINDSTR /I "SERVICE_NAME"';
		$output = `$command`;
		if(stripos($output, "SERVICE_NAME") !== false) {
			$message .= $value." service already exists\n";
			$newName = false;		}
	}
}
if(!empty($message))
	error_log($message);

if($newName) {
	$newApache = "wampapache".$numSuffix;
	$newMysql = "wampmysqld".$numSuffix;
	$newMariadb = "wampmariadb".$numSuffix;
}
else {
	$newApache = 'wampapache'.(($c_wampMode == '64bit') ? '64' : '');
	$newMysql = 'wampmysqld'.(($c_wampMode == '64bit') ? '64' : '');
	$newMariadb = 'wampmariadb'.(($c_wampMode == '64bit') ? '64' : '');
}
$newServicesNames = array();
$newServicesNames['ServiceApache'] = $newApache;
$newServicesNames['apacheServiceInstallParams'] = "-n ".$newApache." -k install";
$newServicesNames['apacheServiceRemoveParams'] = "-n ".$newApache." -k uninstall";

$newServicesNames['ServiceMysql'] = $newMysql;
$newServicesNames['mysqlServiceInstallParams'] = "--install-manual ".$newMysql;
$newServicesNames['mysqlServiceRemoveParams'] = "--remove ".$newMysql;

$newServicesNames['ServiceMariadb'] = $newMariadb;
$newServicesNames['mariadbServiceInstallParams'] = "--install-manual ".$newMariadb;
$newServicesNames['mariadbServiceRemoveParams'] = "--remove ".$newMariadb;

//Replace services names in wampmanager.conf
wampIniSet($configurationFile, $newServicesNames);

//Install new services
//Install Apache service
$command = 'start /b /wait '.$c_apacheExe.' '.$newServicesNames['apacheServiceInstallParams'];
`$command`;
//Apache service to manual start
$command = "start /b /wait SC \\\\. config ".$newApache." start= demand";
`$command`;

if($wampConf['SupportMySQL'] == 'on') {
	//Install Mysql service
	$command = 'start /b /wait '.$c_mysqlExe.' '.$newServicesNames['mysqlServiceInstallParams'];
	`$command`;
}

if($wampConf['SupportMariaDB'] == 'on') {
	//Install MariaDB service
	$command = 'start /b /wait '.$c_mariadbExe.' '.$newServicesNames['mariadbServiceInstallParams'];
	`$command`;
}
//echo "\nPress ENTER to continue...";
//trim(fgets(STDIN));

?>
