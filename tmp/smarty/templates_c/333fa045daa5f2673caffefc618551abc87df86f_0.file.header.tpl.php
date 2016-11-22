<?php
/* Smarty version 3.1.31-dev/44, created on 2016-11-14 20:23:49
  from "W:\domains\myshop.local\views\default\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31-dev/44',
  'unifunc' => 'content_5829f325d35525_64799412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '333fa045daa5f2673caffefc618551abc87df86f' => 
    array (
      0 => 'W:\\domains\\myshop.local\\views\\default\\header.tpl',
      1 => 1479144222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftMenu.tpl' => 1,
  ),
),false)) {
function content_5829f325d35525_64799412 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
	<link rel="stylesheet" href="<?php echo TemplateWebPath;?>
css/main.css">
</head>
<body>
	<header class="header">
		<h1>Main title</h1>
	</header>

	<?php $_smarty_tpl->_subTemplateRender('file:leftMenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


	<div class="centerColumn">
	<?php }
}
