<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:12
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/controllers/shop/helpers/tree/shop_tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:60115085753c2c6d44247b6-00442499%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12ff1824dc772495fee7482a6abb513689342177' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/controllers/shop/helpers/tree/shop_tree_header.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60115085753c2c6d44247b6-00442499',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6d444b5d1_02034882',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6d444b5d1_02034882')) {function content_53c2c6d444b5d1_02034882($_smarty_tpl) {?>
<div class="panel-heading">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)){?><i class="icon-sitemap"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<div class="pull-right">
		<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)){?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
	</div>
</div><?php }} ?>