<?php

//общие настройки
ini_set('display_errors', 1);
error_reporting(E_ALL);

//подключение файлов системы
define('ROOT', __DIR__);
require_once ROOT.'/components/Autoload.php';
require_once ROOT.'/components/Db.php';

//установка соединения с бд

// вызов Router
$router= new Router();
$router->run();
