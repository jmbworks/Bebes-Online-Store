<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:20
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:80320675953c2c6dc17cb75-06375651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c0802b3f8a4f65c3d5a6594e5a6bf3047e367b0' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80320675953c2c6dc17cb75-06375651',
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
  'unifunc' => 'content_53c2c6dc1b7de3_33541099',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6dc1b7de3_33541099')) {function content_53c2c6dc1b7de3_33541099($_smarty_tpl) {?>
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