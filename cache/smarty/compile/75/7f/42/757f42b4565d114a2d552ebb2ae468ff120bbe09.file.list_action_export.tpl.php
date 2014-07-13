<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:15
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/controllers/request_sql/list_action_export.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96809514953c2c6d7ccf0b2-43587648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '757f42b4565d114a2d552ebb2ae468ff120bbe09' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/controllers/request_sql/list_action_export.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96809514953c2c6d7ccf0b2-43587648',
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
  'unifunc' => 'content_53c2c6d7cdd325_05602272',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6d7cdd325_05602272')) {function content_53c2c6d7cdd325_05602272($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" class="btn btn-default">
	<i class="icon-cloud-upload"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>