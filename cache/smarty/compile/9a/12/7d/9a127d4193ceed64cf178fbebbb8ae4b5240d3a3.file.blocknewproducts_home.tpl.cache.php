<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 14:43:11
         compiled from "/var/www/html/onlineshop/themes/default-bootstrap/modules/blocknewproducts/blocknewproducts_home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:195553429053c2d33f673e69-44541048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a127d4193ceed64cf178fbebbb8ae4b5240d3a3' => 
    array (
      0 => '/var/www/html/onlineshop/themes/default-bootstrap/modules/blocknewproducts/blocknewproducts_home.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195553429053c2d33f673e69-44541048',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'new_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2d33f6ab991_54109355',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2d33f6ab991_54109355')) {function content_53c2d33f6ab991_54109355($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['new_products']->value)&&$_smarty_tpl->tpl_vars['new_products']->value){?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['new_products']->value,'class'=>'blocknewproducts tab-pane','id'=>'blocknewproducts'), 0);?>

<?php }else{ ?>
<ul id="blocknewproducts" class="blocknewproducts tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No new products at this time.','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>