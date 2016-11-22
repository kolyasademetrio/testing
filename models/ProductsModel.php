<?php
/**
 * Модель для таблицы продукции(products)
 * 
 * 
 */
/**
 * Получаем последние добавленые товары
 * 
 * @param  integer $limit лимит товаров
 * @return array массив товаров
 */
function getLastProducts($limit = null)
{
	$sql = "SELECT *
			FROM `products`
			ORDER BY `id` DESC
	 		";
	if($limit){
		$sql .= " LIMIT {$limit}";
	}

	$rs = mysql_query($sql);

	return createSmartyRsArray($rs);
}


function getProductsByCat($itemId)
{
	$itemId = intval($itemId);

	$sql = "SELECT *
			FROM `products`
			WHERE `category_id` = '{$itemId}'
	 		";
	$rs = mysql_query($sql);

	return createSmartyRsArray($rs);
}