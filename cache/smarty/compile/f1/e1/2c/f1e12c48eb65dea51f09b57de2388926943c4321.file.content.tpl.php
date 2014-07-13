<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:21
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/controllers/localization/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:53835617653c2c6dd4b0e72-46219435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1e12c48eb65dea51f09b57de2388926943c4321' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/controllers/localization/content.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53835617653c2c6dd4b0e72-46219435',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'localization_form' => 0,
    'localization_options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6dd4e1990_25902317',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6dd4e1990_25902317')) {function content_53c2c6dd4e1990_25902317($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['localization_form']->value)){?><?php echo $_smarty_tpl->tpl_vars['localization_form']->value;?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['localization_options']->value)){?><?php echo $_smarty_tpl->tpl_vars['localization_options']->value;?>
<?php }?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#PS_CURRENCY_DEFAULT').change(function(e) {
			alert('Before changing the default currency, we strongly recommend that you enable maintenance mode because any change on default currency requires manual adjustment of the price of each product');
		});
	});
</script><?php }} ?>