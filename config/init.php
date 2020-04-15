<?php

//Session start
session_start();

//Config File
require_once 'config/config.php';

//Chrome Logger
require_once 'ChromePhp.php';


//Include Helper
require_once 'helpers/system_helper.php';


// Autloader
function __autoload($class_name){
    require_once 'lib/'.$class_name.'.php';
}

?>