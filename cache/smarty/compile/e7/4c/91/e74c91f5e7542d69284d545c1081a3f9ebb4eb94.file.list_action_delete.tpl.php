<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:29
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/helpers/list/list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127659591453c2c6e55eb290-41257517%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e74c91f5e7542d69284d545c1081a3f9ebb4eb94' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/helpers/list/list_action_delete.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127659591453c2c6e55eb290-41257517',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6e5625713_67248123',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6e5625713_67248123')) {function content_53c2c6e5625713_67248123($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)){?>onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){ return true; }else{ event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" class="delete">
	<i class="icon-trash"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>