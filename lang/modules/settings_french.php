<?php
// French language file for
// Projects and VirtualHosts sub-menus
// Settings and Tools right-click sub-menus
// 3.0.7 add $w_listenForApache - $w_AddListenPort - $w_deleteListenPort - $w_settings['SupportMariaDB']
// $w_settings['DaredevilOptions']
// $w_Size - $w_EnterSize - $w_Time - $w_EnterTime - $w_Integer - $w_EnterInteger - $w_add_VirtualHost
// 3.0.8 $w_settings['SupportMySQL'] - $w_portUsedMaria - $w_testPortMariaUsed
// 3.0.9 $w_ext_zend
// 3.1.1 $w_defaultDBMS - $w_invertDefault - $w_changeCLI - $w_misc
// $w_settings['ShowphmyadMenu'] - $w_settings['ShowadminerMenu']
// 3.1.2 $w_reinstallServices - $w_settings['mariadbUseConsolePrompt'] - $w_settings['mysqlUseConsolePrompt']
// $w_enterServiceNameAll $w_settings['NotVerifyPATH' -> $w_MysqlMariaUse,
// 3.1.4 $w_settings 'NotVerifyTLD' 'Cleaning' 'AutoCleanLogs' 'AutoCleanLogsMax' 'AutoCleanLogsMax' 'AutoCleanTmp' 'AutoCleanTmpMax' 'iniCommented'
// $w_wampReport - $w_dowampReport

// Projects sub-menu
$w_projectsSubMenu = 'Vos projets';
// VirtualHosts sub-menu
$w_virtualHostsSubMenu = 'Vos VirtualHosts';
$w_add_VirtualHost = 'Gestion VirtualHost';
$w_aliasSubMenu = 'Vos Alias';
$w_portUsed = 'Port utilisé par Apache : ';
$w_portUsedMysql = 'Port utilisé par MySQL : ';
$w_portUsedMaria = 'Port utilisé par MariaDB : ';
$w_testPortUsed = 'Tester port utilisé : ';
$w_portForApache = 'Port pour Apache';
$w_listenForApache = 'Listen Port à ajouter à Apache';
$w_portForMyql = 'Port pour MySQL';
$w_testPortMysql = 'Tester le port 3306';
$w_testPortMysqlUsed = 'Tester port MySQL utilisé : ';
$w_testPortMariaUsed = 'Tester port MariaDB utilisé : ';
$w_enterPort = 'Entrer le numéro de port souhaité';

// Right-click Settings
$w_wampSettings = 'Paramètres Wamp';
$w_settings = array(
	'urlAddLocalhost' => 'Ajouter localhost dans url',
	'VirtualHostSubMenu' => 'Sous-menu VirtualHosts',
	'AliasSubmenu' => 'Sous-menu Alias',
	'ProjectSubMenu' => 'Sous-menu Projets',
	'HomepageAtStartup' => 'Page d\'accueil Wampserver au démarrage',
	'MenuItemOnline' => 'Item menu : En Ligne/Hors Ligne',
	'ItemServicesNames' => 'Item menu Outils : Changer noms des services',
	'NotCheckVirtualHost' => 'Ne pas vérifier les définitions des VirtualHost',
	'NotCheckDuplicate' => 'Ne pas vérifier ServerName dupliqués',
	'VhostAllLocalIp' => 'Autoriser IP locales VirtualHost autres que 127.*',
	'SupportMySQL' => 'Autoriser MySQL',
	'SupportMariaDB' => 'Autoriser MariaDB',
	'DaredevilOptions' => 'Attention: risqué ! Uniquement pour expert',
	'ShowphmyadMenu' => 'Afficher PhpMyAdmin dans Menu',
	'ShowadminerMenu' => 'Afficher Adminer dans Menu',
	'mariadbUseConsolePrompt' => 'Changer prompt console MariaDB',
	'mysqlUseConsolePrompt' => 'Changer prompt console MySQL',
	'NotVerifyPATH' => 'Ne pas vérifier PATH',
	'NotVerifyTLD' => 'Ne pas vérifier TLD',
	'Cleaning' => 'Netoyage automatique',
	'AutoCleanLogs' => 'Nettoyer fichiers de logs automatiquement',
	'AutoCleanLogsMax' => 'Nombre de lignes avant nettoyage',
	'AutoCleanLogsMin' => 'Nombre de lignes après nettoyage',
	'AutoCleanTmp' => 'Nettoyer dossier tmp automatiquement',
	'AutoCleanTmpMax' => 'Nombre de fichiers avant nettoyage',
	'ForTestOnly' => 'Only for test purpose',
	'iniCommented' => 'Directives php.ini commentées (; au début de la ligne)',
);

// Right-click Tools
$w_wampTools = 'Outils';
$w_restartDNS = 'Redémarrage DNS';
$w_testConf = 'Vérifier syntaxe httpd.conf';
$w_testServices = 'Vérifier l\'état des services';
$w_changeServices = 'Changer le nom des services';
$w_enterServiceNameApache = "Entrer un nombre d'index pour le service Apache. Il sera ajouté à 'wampapache'";
$w_enterServiceNameMysql = "Entrer un nombre d'index pour le service Mysql. Il sera ajouté à 'wampmysqld'";
$w_enterServiceNameAll = "Entrer un nombre pour le suffixe des noms des services (Vide pour remettre services d'origine)";
$w_compilerVersions = 'Vérifier compilateur VC, compatibilités et fichiers ini';
$w_UseAlternatePort = 'Utiliser un port autre que %s';
$w_AddListenPort = 'Ajouter un Listen port à Apache';
$w_vhostConfig = 'Afficher les VirtualHost examinés par Apache';
$w_apacheLoadedModules = 'Afficher les modules Apache chargés';
$w_misc = 'Divers';
$w_empty = 'Vider';
$w_emptyAll = 'Vider TOUS les';
$w_dnsorder = 'Vérifier l\'ordre de recherche DNS';
$w_deleteVer = 'Supprimer versions inutilisées';
$w_deleteListenPort = 'Supprimer un Listen port Apache';
$w_delete = 'Supprimer';
$w_defaultDBMS = 'SGBD par défaut :';
$w_invertDefault = 'Inverser SGBD par defaut ';
$w_changeCLI = 'Changer  version PHP CLI';
$w_reinstallServices = 'Réinstaller tous les services';
$w_wampReport = 'Rapport de configuration Wampserver';
$w_dowampReport = 'Créer '.$w_wampReport;

//Divers
$w_ext_spec = 'Extensions spéciales';
$w_ext_zend = 'Extensions Zend';
$w_phpparam_info = 'Pour information';
$w_ext_nodll = 'Pas de fichier dll';
$w_ext_noline = "Pas de 'extension='";
$w_mod_fixed = "Module irréversible";
$w_no_module = 'Pas de fichier module';
$w_no_moduleload = "Pas de 'LoadModule'";
$w_mysql_none = "aucun";
$w_mysql_user = "mode utilisateur";
$w_mysql_default = "par défaut";
$w_Size = "Taille";
$w_EnterSize = "Entrez la taille : xxxx suivie par M pour Mega ou G pour Giga";
$w_Time = "Temps";
$w_EnterTime = "Entrez le temps en secondes";
$w_Integer = "Nombre entier";
$w_EnterInteger = "Entrez un nombre entier";
$w_MysqlMariaUser = "Entrer un nom utilisateur valide. Si vous ne savez pas, laissez 'root' par défaut.";

?>