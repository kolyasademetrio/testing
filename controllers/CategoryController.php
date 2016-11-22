<?php

/**
 * CategoryController.php
 * 
 * Конторллер страницы категорий(/category/1)
 * 
 */
 
 //Подключаем модели
 include_once '../models/CategoriesModel.php';
 include_once '../models/ProductsModel.php';

/**
 * Формирование страницы категории
 * @param  object $smarty шаблонизатор
 * 
 */
 function indexAction($smarty)
 {
 	$catId = isset($_GET['id']) ? $_GET['id'] : null;
 	if($catId == null) exit;

 	$rsCategory = getCatById($catId);

 	//если главные категории то показываем дочерние категории
 	//иначе показываем товар
 	if($rsCategory['parent_id'] == 0){
 		$rsChildCats = getChildrenForCat($catId);
 	} else {
 		$rsProducts = getProductsByCat($catId);
 	}

 	d($rsProducts);
 	
 	// $smarty->assign('rsCategory', $rsCategory);
 	// $smarty->assign('rsProducts', $rsProducts);

 	// loadTemplate($smarty, 'header');
 	// loadTemplate($smarty, 'index');
 	// loadTemplate($smarty, 'footer');
 }
