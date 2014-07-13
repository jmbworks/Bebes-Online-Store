<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:29
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/helpers/list/list_action_transferstock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:52634523353c2c6e55ae721-29146809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3366dc113a08b3a83569a778b628b4a509b9d638' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/helpers/list/list_action_transferstock.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52634523353c2c6e55ae721-29146809',
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
  'unifunc' => 'content_53c2c6e55c98b6_20012779',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6e55c98b6_20012779')) {function content_53c2c6e55c98b6_20012779($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<i class="icon-exchange"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>