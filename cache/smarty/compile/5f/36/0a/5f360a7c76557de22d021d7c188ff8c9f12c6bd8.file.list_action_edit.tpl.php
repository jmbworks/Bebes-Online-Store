<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:15
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/controllers/tax_rules/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:65031358753c2c6d7ae0447-05867360%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f360a7c76557de22d021d7c188ff8c9f12c6bd8' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/controllers/tax_rules/helpers/list/list_action_edit.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65031358753c2c6d7ae0447-05867360',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6d7af4227_71713323',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6d7af4227_71713323')) {function content_53c2c6d7af4227_71713323($_smarty_tpl) {?>
<a onclick="loadTaxRule('<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'); return false;" href="#" class="btn btn-default">
	<i class="icon-pencil"></i> 
	<?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>