<?php
/* Smarty version 3.1.31-dev/44, created on 2016-11-14 20:46:22
  from "W:\domains\myshop.local\views\default\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31-dev/44',
  'unifunc' => 'content_5829f86eaecdc5_59165415',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41fffdcdf4fe31bc5efd6c23641f55992e3331a0' => 
    array (
      0 => 'W:\\domains\\myshop.local\\views\\default\\index.tpl',
      1 => 1479145577,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5829f86eaecdc5_59165415 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsProducts']->value, 'item', false, NULL, 'products', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
?>
<div style="float:left;padding:0 30px 40px 0;">
	<a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
		<img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="100">
	</a><br>
	<a href="/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
</div>	

<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null) % 3 == 0) {?>
<div style="clear:both;"></div>	
<?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
