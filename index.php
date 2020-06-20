<?php
require_once "vendor/autoload.php";
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
var_dump($dotenv);
require_once "private/init.php";
$app = new App; //creates a new app instance