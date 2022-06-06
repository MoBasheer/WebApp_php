<?php
//Define path to the application directory
define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/..'));
set_include_path(implode(PATH_SEPARATOR, array(
    realpath(APPLICATION_PATH),
    get_include_path(),
)));
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'init.php';
new App();
