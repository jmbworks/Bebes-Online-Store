<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:29
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:135532773253c2c6e56291b8-52947464%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46a9df1f7706e4b2426d5ffc47d2477bbe372d23' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135532773253c2c6e56291b8-52947464',
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
  'unifunc' => 'content_53c2c6e5644969_31314170',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6e5644969_31314170')) {function content_53c2c6e5644969_31314170($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>