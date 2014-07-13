<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:13
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/controllers/cms_content/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91320953253c2c6d5ebcb27-91541360%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '429d6daf2055f964a6441881658ed99cd31d26f8' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/controllers/cms_content/content.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91320953253c2c6d5ebcb27-91541360',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cms_breadcrumb' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6d5ecfa89_62050074',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6d5ecfa89_62050074')) {function content_53c2c6d5ecfa89_62050074($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['cms_breadcrumb']->value)){?>
	<ul class="breadcrumb cat_bar">
		<?php echo $_smarty_tpl->tpl_vars['cms_breadcrumb']->value;?>

	</ul>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }} ?>