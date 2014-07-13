<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:27
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/helpers/list/list_action_details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15999250953c2c6e3851c18-59931084%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e46d6b4a41ba9a9c360272b5e5fd7978f9fb8b0' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/helpers/list/list_action_details.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15999250953c2c6e3851c18-59931084',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'params' => 0,
    'id' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6e387d7b3_80369660',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6e387d7b3_80369660')) {function content_53c2c6e387d7b3_80369660($_smarty_tpl) {?>

<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" id="details_<?php echo $_smarty_tpl->tpl_vars['params']->value['action'];?>
_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" class="">
	<i class="icon-eye-open"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>