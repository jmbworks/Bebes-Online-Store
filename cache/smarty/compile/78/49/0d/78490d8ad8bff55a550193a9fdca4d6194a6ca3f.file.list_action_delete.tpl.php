<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:12
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/controllers/attachments/list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:99778861053c2c6d47b1ba6-51244515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78490d8ad8bff55a550193a9fdca4d6194a6ca3f' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/controllers/attachments/list_action_delete.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99778861053c2c6d47b1ba6-51244515',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'confirm' => 0,
    'href' => 0,
    'id' => 0,
    'product_attachements' => 0,
    'product_list' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6d47e3c00_29422150',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6d47e3c00_29422150')) {function content_53c2c6d47e3c00_29422150($_smarty_tpl) {?>
<script>
	function confirmProductAttached(productList)
	{
		var confirm_text = "<?php echo smartyTranslate(array('s'=>'This attachment is associated with the following products:'),$_smarty_tpl);?>
";
		if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
'))
			return confirm(confirm_text + product_list);
		return false;
	}
</script>

<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" onclick="<?php if (isset($_smarty_tpl->tpl_vars['product_attachements']->value[$_smarty_tpl->tpl_vars['id']->value])){?>return confirmProductAttached('<?php echo $_smarty_tpl->tpl_vars['product_list']->value[$_smarty_tpl->tpl_vars['id']->value];?>
')<?php }else{ ?>return confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')<?php }?>">
	<img src="../img/admin/delete.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a>

<?php }} ?>