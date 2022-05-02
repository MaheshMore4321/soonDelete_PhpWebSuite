<?php
// Romanian language file for
// Projects and VirtualHosts sub-menus
// Settings and Tools right-click sub-menus
// Translated by Ciprian Murariu <ciprianmp[at]yahoo[dot]com>
// 3.0.7 add $w_listenForApache - $w_AddListenPort - $w_deleteListenPort - $w_settings['SupportMariaDB']
// $w_settings['DaredevilOptions']
// $w_Size - $w_EnterSize - $w_Time - $w_EnterTime - $w_Integer - $w_EnterInteger - $w_add_VirtualHost
// 3.0.8 $w_settings['SupportMySQL'] - $w_portUsedMaria - $w_testPortMariaUsed
// 3.0.9 $w_ext_zend
// 3.1.1 $w_defaultDBMS - $w_invertDefault - $w_changeCLI - $w_misc
// $w_settings['ShowphmyadMenu'] - $w_settings['ShowadminerMenu']
// 3.1.2 $w_reinstallServices - $w_settings['mariadbUseConsolePrompt'] - $w_settings['mysqlUseConsolePrompt']
// $w_enterServiceNameAll - $w_settings['NotVerifyPATH'] - $w_MysqlMariaUser
// 3.1.4 $w_settings 'NotVerifyTLD' 'Cleaning' 'AutoCleanLogs' 'AutoCleanLogsMax' 'AutoCleanLogsMax' 'AutoCleanTmp' 'AutoCleanTmpMax' 'iniCommented'
// $w_wampReport - $w_dowampReport

// Projects sub-menu
$w_projectsSubMenu = 'Proiecte personale';
// VirtualHosts sub-menu
$w_virtualHostsSubMenu = 'VirtualHosts';
$w_add_VirtualHost = 'Administrare VirtualHost';
$w_aliasSubMenu = 'Aliasuri';
$w_portUsed = 'Portul curent Apache: ';
$w_portUsedMysql = 'Portul curent MySQL: ';
$w_portUsedMaria = 'Portul curent MariaDB : ';
$w_testPortUsed = 'Testeazã portul curent: ';
$w_portForApache = 'Portul Apache';
$w_listenForApache = 'Portul de Intrare pentru adãugare la Apache';
$w_portForMysql = 'Portul MySQL';
$w_testPortMysql = 'Testeazã portul 3306';
$w_testPortMysqlUsed = 'Testeazã portul MySQL: ';
$w_testPortMariaUsed = 'Testeazã portul MariaDB: ';
$w_enterPort = 'Introdu numãrul noului port';

// Right-click Settings
$w_wampSettings = 'Setãri Wamp';
$w_settings = array(
	'urlAddLocalhost' => 'Adaugã localhost la începutul url-ului',
	'VirtualHostSubMenu' => 'Aratã Sub-meniul VirtualHosts',
	'AliasSubmenu' => 'Aratã Sub-meniul Alias',
	'ProjectSubMenu' => 'Aratã Sub-meniul Proiecte personale',
	'HomepageAtStartup' => 'Deschide pagina Index la pornire',
	'MenuItemOnline' => 'Aratã în Meniu: Online / Offline',
	'ItemServicesNames' => 'Aratã în Instrumente: Schimbã numele serviciilor',
	'NotCheckVirtualHost' => 'Nu verifica definiþiile VirtualHost',
	'NotCheckDuplicate' => 'Nu verifica dublarea Numelui Serverului',
	'VhostAllLocalIp' => 'Permite utilizarea IP-urilor locale, altele decât 127.*',
	'SupportMySQL' => 'Permite utilizarea MySQL',
	'SupportMariaDB' => 'Permite utilizarea MariaDB',
	'DaredevilOptions' => 'Atenþie: Riscant! Numai pentru experþi.',
	'ShowphmyadMenu' => 'Aratã phpMyAdmin în Meniu',
	'ShowadminerMenu' => 'Aratã Adminer în Meniu',
	'mariadbUseConsolePrompt' => 'Modificã prompterul implicit al consolei MariaDB',
	'mysqlUseConsolePrompt' => 'Modificã prompterul implicit al consolei MySQL',
	'NotVerifyPATH' => 'Nu testa CALEA',
	'NotVerifyTLD' => 'Nu testa TLD',
	'Cleaning' => 'Curãþare Automatã',
	'AutoCleanLogs' => 'Curãþã automat fiºierele jurnal',
	'AutoCleanLogsMax' => 'Numãr de linii înainte de curãþare',
	'AutoCleanLogsMin' => 'Numãr de linii dupã de curãþare',
	'AutoCleanTmp' => 'Curãþã automat directorul tmp',
	'AutoCleanTmpMax' => 'Numãr de fiºiere înainte de curãþare',
	'ForTestOnly' => 'Numai în scopul testãrii',
	'iniCommented' => 'Directive php.ini comentate (; la începutul liniei)',
);

// Right-click Tools
$w_wampTools = 'Instrumente';
$w_restartDNS = 'Reporneºte DNS';
$w_testConf = 'Verificã sintaxa httpd.conf';
$w_testServices = 'Verificã starea serviciilor';
$w_changeServices = 'Schimbã numele serviciilor';
$w_enterServiceNameApache = "Introdu un numãr de ordine pentru serviciul Apache. Acest numãr va fi adãugat la sfârºitul cuvântului 'wampapache'";
$w_enterServiceNameMysql = "Introdu un numãr de ordine pentru serviciul Mysql. Acest numãr va fi adãugat la sfârºitul cuvântului 'wampmysqld'";
$w_enterServiceNameAll = "Introdu un numãr pentru sufix-ul numelor serviciilor (necompletat pentru serviciile originale)";
$w_compilerVersions = 'Verificã compilatorul VC, compatibilitatea ºi fiºierele ini';
$w_UseAlternatePort = 'Foloseºte alt port decât %s';
$w_AddListenPort = 'Adaugã un port de Intrare pentru Apache';
$w_vhostConfig = 'Aratã VirtualHost verificat de Apache';
$w_apacheLoadedModules = 'Aratã Modulele încãrcate de Apache';
$w_empty = 'Goleºte';
$w_misc = 'Diverse';
$w_emptyAll = 'Goleºte TOATE';
$w_dnsorder = 'Verificã ordinea de cãutare a DNS';
$w_deleteVer = 'ªterge versiunile neutilizate';
$w_deleteListenPort = 'ªterge un port de Intrare Apache';
$w_delete = 'ªterge';
$w_defaultDBMS = 'DBMS implicit:';
$w_invertDefault = 'Inverseazã DBMS implicit ';
$w_changeCLI = 'Schimbã versiunea PHP CLI';
$w_reinstallServices = 'Reinstaleazã toate serviciile';
$w_wampReport = 'Raportul de Configurare Wampserver';
$w_dowampReport = 'Genereazã '.$w_wampReport;

//miscellaneous
$w_ext_spec = 'Extensii speciale';
$w_ext_zend = 'Extensii Zend';
$w_phpparam_info = 'Informaþii suplimentare';
$w_ext_nodll = 'Fiºier dll inexistent';
$w_ext_noline = "Nu existã 'extensie='";
$w_mod_fixed = "Module ireversibile";
$w_no_module = 'Fiºier modul inexistent';
$w_no_moduleload = "Nu existã 'LoadModule'";
$w_mysql_none = "niciunul";
$w_mysql_user = "modul utilizator";
$w_mysql_default = "implicit";
$w_Size = "Mãrimea";
$w_EnterSize = "Introdu Mãrimea: xxxx urmat de M pentru Mega sau G pentru Giga";
$w_Time = "Timul";
$w_EnterTime = "Introdu timpul în secunde";
$w_Integer = "Numãr Întreg";
$w_EnterInteger = "Introdu un numãr întreg";
$w_MysqlMariaUser = "Introdu un nume de utilizator valabil. Dacã nu-l cuno?ti, pãstreazã 'root' implicit.";

?>