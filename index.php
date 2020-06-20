<?php
require_once "vendor/autoload.php";
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
//only loads if this code is not executed in production
if(!isset($_ENV['PRODUCTION'])) // TODO check if this causes any sensitive data exposure
$dotenv->load();
require_once "private/init.php";
$app = new App; //creates a new app instance