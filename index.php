<?php 
//FRONT Contoller

//настройки
ini_set('display_errors',1);
error_reporting(E_ALL);

session_start();
//подключение файлов системы
define('ROOT',dirname(__FILE__));
require_once(ROOT.'/components/autoload.php');
//require_once(ROOT.'/components/router.php');

//require_once(ROOT.'/components/Db.php');

$router = new router();
$router->run();



?>