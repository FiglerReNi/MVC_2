<?php

include "../config/config.php";
require_once '../app/helpers/url_helper.php';
require_once '../app/helpers/session_helper.php';

spl_autoload_register(function($classname){
    require_once '../app/libraries/'. $classname. '.php';
});

$int = new Core;
