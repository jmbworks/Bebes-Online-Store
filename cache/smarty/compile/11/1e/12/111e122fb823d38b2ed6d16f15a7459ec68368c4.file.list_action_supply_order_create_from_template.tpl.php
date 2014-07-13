<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:27
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/helpers/list/list_action_supply_order_create_from_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101175690153c2c6e3cc11a0-63146252%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '111e122fb823d38b2ed6d16f15a7459ec68368c4' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/helpers/list/list_action_supply_order_create_from_template.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101175690153c2c6e3cc11a0-63146252',
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
  'unifunc' => 'content_53c2c6e3ce1ec8_02487325',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6e3ce1ec8_02487325')) {function content_53c2c6e3ce1ec8_02487325($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
');" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" class="">
	<i class="icon-copy"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>