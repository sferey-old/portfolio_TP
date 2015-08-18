<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT_PATH', dirname(dirname(__DIR__)));
define('SRC_PATH', ROOT_PATH . DS . 'src');
define('APPLICATION_PATH', SRC_PATH . DS . 'application');
define('APPLICATION_ENV', getenv('APPLICATION_ENV') ?  : 'production');

if (! file_exists(ROOT_PATH . '/vendor/autoload.php')) {
    die('Veuillez lancer la commande "composer install" pour initialiser cette application');
}

require_once ROOT_PATH . DS . 'vendor' . DS . 'autoload.php';
$autoloader = Zend_Loader_Autoloader::getInstance();

// Create application, bootstrap, and run
$application = new Zend_Application(APPLICATION_ENV, APPLICATION_PATH . '/configs/application.ini');

$application->bootstrap()->run();