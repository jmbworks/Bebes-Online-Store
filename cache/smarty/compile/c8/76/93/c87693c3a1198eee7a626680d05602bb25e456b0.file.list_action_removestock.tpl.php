<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:27
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/helpers/list/list_action_removestock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38135849753c2c6e38bbd77-71744684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c87693c3a1198eee7a626680d05602bb25e456b0' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/helpers/list/list_action_removestock.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38135849753c2c6e38bbd77-71744684',
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
  'unifunc' => 'content_53c2c6e38d5966_69655550',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6e38d5966_69655550')) {function content_53c2c6e38d5966_69655550($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<i class="icon-circle-arrow-down"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>