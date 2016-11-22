<?php 
include_once '../config/config.php';//инициализация настроек
include_once '../config/db.php';//подключение к базе данных
include_once '../library/mainFunctions.php';//основные функции

//определяем с каким контроллером будем работать
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

//определяем с какой функцией будем работать
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

loadPage($smarty, $controllerName, $actionName);



