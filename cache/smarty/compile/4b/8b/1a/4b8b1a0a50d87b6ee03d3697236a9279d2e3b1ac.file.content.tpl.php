<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:13
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/controllers/modules/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22741326953c2c6d50131c9-91030878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b8b1a0a50d87b6ee03d3697236a9279d2e3b1ac' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/controllers/modules/content.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22741326953c2c6d50131c9-91030878',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6d504f895_00714227',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6d504f895_00714227')) {function content_53c2c6d504f895_00714227($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['module_content']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['module_content']->value;?>

<?php }else{ ?>
	<?php if (!isset($_GET['configure'])){?>
		<?php echo $_smarty_tpl->getSubTemplate ('controllers/modules/js.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php if (isset($_GET['select'])&&$_GET['select']=='favorites'){?>
			<?php echo $_smarty_tpl->getSubTemplate ('controllers/modules/favorites.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php }else{ ?>
			<?php echo $_smarty_tpl->getSubTemplate ('controllers/modules/page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php }?>
	<?php }?>
<?php }?>
<?php }} ?>