<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:29
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/helpers/list/list_action_default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189004644753c2c6e55439c9-35392090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a8318fd3b3655ded10488b00b584a88aac230c8' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/helpers/list/list_action_default.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189004644753c2c6e55439c9-35392090',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6e55772b2_96303920',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6e55772b2_96303920')) {function content_53c2c6e55772b2_96303920($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['name']->value)){?>name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"<?php }?> class="default">
	<i class="icon-asterisk"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>