<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:13
         compiled from "/var/www/html/onlineshop/themes/default-bootstrap/modules/homefeatured/homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155279587153c2c6d5434f18-29784229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a05644c7164b80ffd2aac3b40f97fcfeb6483979' => 
    array (
      0 => '/var/www/html/onlineshop/themes/default-bootstrap/modules/homefeatured/homefeatured.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155279587153c2c6d5434f18-29784229',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6d5457a33_02732948',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6d5457a33_02732948')) {function content_53c2c6d5457a33_02732948($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value){?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php }else{ ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>