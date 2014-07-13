<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:29
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179892723953c2c6e547dfe5-81948737%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1afd461612e3f062a1a0f948c8cc7a9f060d6b47' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179892723953c2c6e547dfe5-81948737',
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
  'unifunc' => 'content_53c2c6e54987e4_94451002',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6e54987e4_94451002')) {function content_53c2c6e54987e4_94451002($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<i class="icon-search-plus"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>