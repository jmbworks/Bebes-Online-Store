<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:12
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/controllers/shop/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:99970449353c2c6d4416d56-69889853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32a45c86184cec29e55319850116c1619bc3a45e' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/controllers/shop/content.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99970449353c2c6d4416d56-69889853',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shops_tree' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6d4421e97_34717406',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6d4421e97_34717406')) {function content_53c2c6d4421e97_34717406($_smarty_tpl) {?>

<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div><?php }} ?>