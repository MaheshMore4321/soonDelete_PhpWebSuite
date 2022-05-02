<?php
// script to change MariaDB port used
// 3.1.5 Limits fort port by variables

require 'config.inc.php';
require 'wampserver.lib.php';

$minPort = "3301";
$maxPort = "3309";

//Replace UsedMysqlPort by NewMysqlport ($_SERVER['argv'][1])
$portToUse = intval(trim($_SERVER['argv'][1]));
//Check validity
$goodPort = true;
if($portToUse < $minPort || $portToUse > $maxPort || $portToUse == $wampConf['mysqlPortUsed'])
	$goodPort = false;

$myIniReplace = false;

if($goodPort) {
	//Change port into my.ini
	$mariaIniFileContents = @file_get_contents($c_mariadbConfFile) or die ("my.ini file not found");
	$nb_myIni = 0; //must be three replacements: [client], [wampmariadb] and [mysqld] groups
	$findTxtRegex = array(
	'/^(port)[ \t]*=.*$/m',
	);
	$mariaIniFileContents = preg_replace($findTxtRegex,"$1 = ".$portToUse, $mariaIniFileContents, -1, $nb_myIni);
	if($nb_myIni == 3)
		$myIniReplace = true;

	if($myIniReplace) {
		$myIni = fopen($c_mariadbConfFile ,"w");
		fwrite($myIni,$mariaIniFileContents);
		fclose($myIni);
		$myIniConf['mariaPortUsed'] = $portToUse;
		if($portToUse == $c_DefaultMysqlPort)
			$myIniConf['mariaUseOtherPort'] = "off";
		else
			$myIniConf['mariaUseOtherPort'] = "on";
		wampIniSet($configurationFile, $myIniConf);
	}
}

else {
	echo "The port number you give: ".$portToUse."\n\n";
	echo "is not valid\n";
	echo "Must be between ".$minPort." and ".$maxPort."\nbut not ".$wampConf['mysqlPortUsed']." that is reserved for MySQL\n";
	echo "\nPress ENTER to continue...";
  trim(fgets(STDIN));
}

?>
