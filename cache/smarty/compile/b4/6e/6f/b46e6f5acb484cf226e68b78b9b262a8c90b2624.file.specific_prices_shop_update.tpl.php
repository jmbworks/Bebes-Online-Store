<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:17
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/controllers/products/specific_prices_shop_update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213312809053c2c6d9b4bae6-55027577%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b46e6f5acb484cf226e68b78b9b262a8c90b2624' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/controllers/products/specific_prices_shop_update.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213312809053c2c6d9b4bae6-55027577',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'option_list' => 0,
    'key_id' => 0,
    'row' => 0,
    'key_value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6d9b82546_84356126',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6d9b82546_84356126')) {function content_53c2c6d9b82546_84356126($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['option_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
	<option value="<?php echo intval($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key_id']->value]);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key_value']->value], ENT_QUOTES, 'UTF-8', true);?>
</option>
<?php } ?><?php }} ?>