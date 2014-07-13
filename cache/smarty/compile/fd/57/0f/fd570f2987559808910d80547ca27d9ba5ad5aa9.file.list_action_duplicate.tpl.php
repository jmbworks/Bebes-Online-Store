<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:29
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/helpers/list/list_action_duplicate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89148986153c2c6e557ab15-53966976%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd570f2987559808910d80547ca27d9ba5ad5aa9' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/helpers/list/list_action_duplicate.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89148986153c2c6e557ab15-53966976',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'confirm' => 0,
    'location_ok' => 0,
    'location_ko' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6e55aa227_87365591',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6e55aa227_87365591')) {function content_53c2c6e55aa227_87365591($_smarty_tpl) {?>
<a href="#" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')) document.location = '<?php echo $_smarty_tpl->tpl_vars['location_ok']->value;?>
'; else document.location = '<?php echo $_smarty_tpl->tpl_vars['location_ko']->value;?>
'; return false;">
	<i class="icon-copy"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>