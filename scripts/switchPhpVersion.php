<?php
//

require 'config.inc.php';
require 'wampserver.lib.php';
if(defined('SEE_PROCESS')) error_log("For information only : script switchPhpVersion");

$newPhpVersion = $_SERVER['argv'][1];

switchPhpVersion($newPhpVersion);

?>