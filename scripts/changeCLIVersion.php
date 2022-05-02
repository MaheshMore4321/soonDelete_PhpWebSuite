<?php
//3.1.1 New script

require 'config.inc.php';
require 'wampserver.lib.php';

$newPhpVersion = $_SERVER['argv'][1];

//modifying the conf of WampServer
$wampIniNewContents['phpCliVersion'] = $newPhpVersion;
wampIniSet($configurationFile, $wampIniNewContents);


?>