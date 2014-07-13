<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:13
         compiled from "/var/www/html/onlineshop/themes/default-bootstrap/modules/favoriteproducts/views/templates/hook/favoriteproducts-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162465159453c2c6d57478f6-49426647%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec5aa5074ebe4da8ccc4223d25bbd65863844c0c' => 
    array (
      0 => '/var/www/html/onlineshop/themes/default-bootstrap/modules/favoriteproducts/views/templates/hook/favoriteproducts-header.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162465159453c2c6d57478f6-49426647',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6d579fbd2_63300242',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6d579fbd2_63300242')) {function content_53c2c6d579fbd2_63300242($_smarty_tpl) {?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('favorite_products_url_add'=>addslashes($_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'add')))),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('favorite_products_url_remove'=>addslashes($_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'remove'),true))),$_smarty_tpl);?>
<?php if (isset($_GET['id_product'])){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('favorite_products_id_product'=>intval($_GET['id_product'])),$_smarty_tpl);?>
<?php }?><?php }} ?>