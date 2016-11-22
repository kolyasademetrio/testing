<?php

/**
 * Основные функции
 *
 */

/**
 * Функция отладки. Останавливает выполнение программы выводя значение
 * $value
 * @param  variant  $value переменная для вывода её на страницу
 */
function d($value = NULL, $die = 1)
{
	echo 'Debug:' . '<br/><pre>';
	print_r($value);
	if($die) die;
}

/**
 * Формирование запрашиваемой страницы
 *
 * @param string $controllerName название контроллера
 * @param string $actionName название функции обработки страницы
 */

function loadPage($smarty, $controllerName, $actionName = 'index')
{
	include_once PathPrefix . $controllerName . PathPostfix;

	$function = $actionName . 'Action';
	
	$function($smarty);
}

/**
 * Загрузка шаблона
 * 
 * @param object $smarty объект шаблонизатора
 * @param string $templateName название файла шаблона
 */
 
function loadTemplate($smarty, $templateName)
{
	$smarty->display($templateName . TemplatePostfix);
}

/**
 * Преобразование результата работы выборки функции в ассоциативный масив
 * 
 * @param recordset $rs набор строк - результат работы SELECT
 * @return array
 */
function createSmartyRsArray($rs)
{
	if (!$rs) return false;

	$smartyRs = array();
	while($row = mysql_fetch_assoc($rs)) {
		$smartyRs[] = $row;
	}

	return $smartyRs;
}