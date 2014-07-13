<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:15
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/controllers/logs/employee_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139371287453c2c6d72e76f4-68356644%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68e201f1dd5b0c7bb9a46ea4873f8d6ed0caf68e' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/controllers/logs/employee_field.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139371287453c2c6d72e76f4-68356644',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee_image' => 0,
    'employee_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6d72f0fd2_98116375',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6d72f0fd2_98116375')) {function content_53c2c6d72f0fd2_98116375($_smarty_tpl) {?>
<span class="employee_avatar_small">
	<img class="imgm img-thumbnail" alt="" src="<?php echo $_smarty_tpl->tpl_vars['employee_image']->value;?>
" width="32" height="32" />
</span>
<?php echo $_smarty_tpl->tpl_vars['employee_name']->value;?>
<?php }} ?>