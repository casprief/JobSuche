<?php
//Config File
require_once 'config/config.php';

// Autloader
function __autoload($class_name){
    require_once 'lib/'.$class_name.'.php';
}

?>