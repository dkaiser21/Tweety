<?php
ob_start();

date_default_timezone_set("America/Santiago");

require_once "config.php";

spl_autoload_register(function($class){
    require_once "classes/{$class}.php";
});

session_start();

$account=new Account;

include_once "functions.php";