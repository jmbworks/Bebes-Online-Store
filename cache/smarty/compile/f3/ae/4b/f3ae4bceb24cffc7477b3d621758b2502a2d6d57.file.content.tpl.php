<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:21
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/controllers/addons_catalog/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205247378353c2c6dd82a843-74519553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3ae4bceb24cffc7477b3d621758b2502a2d6d57' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/controllers/addons_catalog/content.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205247378353c2c6dd82a843-74519553',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_addons_content' => 0,
    'addons_content' => 0,
    'iso_lang' => 0,
    'iso_currency' => 0,
    'iso_country' => 0,
    'parent_domain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6dd860429_68551757',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6dd860429_68551757')) {function content_53c2c6dd860429_68551757($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['display_addons_content']->value){?>
	<?php echo $_smarty_tpl->tpl_vars['addons_content']->value;?>

<?php }else{ ?>
	<iframe frameborder="no" class="clearfix" style="margin:0px;padding:0px;width:100%;height:920px" src="//addons.prestashop.com/iframe/search.php?isoLang=<?php echo $_smarty_tpl->tpl_vars['iso_lang']->value;?>
&isoCurrency=<?php echo $_smarty_tpl->tpl_vars['iso_currency']->value;?>
&isoCountry=<?php echo $_smarty_tpl->tpl_vars['iso_country']->value;?>
&parentUrl=<?php echo $_smarty_tpl->tpl_vars['parent_domain']->value;?>
"></iframe>
<?php }?>
<?php }} ?>