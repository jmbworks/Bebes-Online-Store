<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:27
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/helpers/list/list_action_supplier_order_receipt.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1143390053c2c6e389e731-26383035%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b355ef53663da98b15388e9fb236b28d9f4e50a0' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/helpers/list/list_action_supplier_order_receipt.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1143390053c2c6e389e731-26383035',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6e38b8ab1_27390317',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6e38b8ab1_27390317')) {function content_53c2c6e38b8ab1_27390317($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<i class="icon-truck"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>