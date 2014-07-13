<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:14
         compiled from "/var/www/html/onlineshop/themes/default-bootstrap/modules/blockbestsellers/blockbestsellers-home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:117186591853c2c6d62c2570-78227015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdf1c4b9c6bce1164c46b0d3780d4f299fa75627' => 
    array (
      0 => '/var/www/html/onlineshop/themes/default-bootstrap/modules/blockbestsellers/blockbestsellers-home.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117186591853c2c6d62c2570-78227015',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'best_sellers' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6d62e6759_70359190',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6d62e6759_70359190')) {function content_53c2c6d62e6759_70359190($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['best_sellers']->value)&&$_smarty_tpl->tpl_vars['best_sellers']->value){?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['best_sellers']->value,'class'=>'blockbestsellers tab-pane','id'=>'blockbestsellers'), 0);?>

<?php }else{ ?>
<ul id="blockbestsellers" class="blockbestsellers tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No best sellers at this time.','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>