<?php
/* Smarty version 3.1.31-dev/44, created on 2016-11-15 21:41:52
  from "W:\domains\myshop.local\views\default\leftMenu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31-dev/44',
  'unifunc' => 'content_582b56f0b9d230_82600901',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edcd616937e210792999a431938eef1f5648f673' => 
    array (
      0 => 'W:\\domains\\myshop.local\\views\\default\\leftMenu.tpl',
      1 => 1479235072,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_582b56f0b9d230_82600901 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="leftMenu">
	<div class="menuCaption">Menu:</div>
	<ul>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>

		<li><a href="/?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>

		<?php if (isset($_smarty_tpl->tpl_vars['item']->value['children'])) {?>
			<ul>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'itemChild');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->value) {
?>
				<li><a href ="/?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a></li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

			</ul>
		<?php }?>

		</li>
		

		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

		
	</ul>
</div>

<?php }
}
