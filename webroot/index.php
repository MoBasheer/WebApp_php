<?php 
    //Define path to the application dirrectory
    define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/..'));
    set_include_path(implode(PATH_SEPARATOR, array(
    realpath(APPLICATION_PATH),
    get_include_path(),
    )));
    require_once 'init.php';
    new App();
?>