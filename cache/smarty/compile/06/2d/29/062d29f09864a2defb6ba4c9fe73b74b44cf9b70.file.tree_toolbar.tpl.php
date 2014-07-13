<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:26
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/helpers/tree/tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156181867053c2c6e2d51ff3-03021787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '062d29f09864a2defb6ba4c9fe73b74b44cf9b70' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/helpers/tree/tree_toolbar.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156181867053c2c6e2d51ff3-03021787',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6e2da7164_84128652',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6e2da7164_84128652')) {function content_53c2c6e2da7164_84128652($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)){?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value){
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div><?php }} ?>