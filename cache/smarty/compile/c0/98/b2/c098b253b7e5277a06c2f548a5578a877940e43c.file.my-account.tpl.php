<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:13
         compiled from "/var/www/html/onlineshop/themes/default-bootstrap/modules/favoriteproducts/views/templates/hook/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:200374683653c2c6d57053e9-47025331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c098b253b7e5277a06c2f548a5578a877940e43c' => 
    array (
      0 => '/var/www/html/onlineshop/themes/default-bootstrap/modules/favoriteproducts/views/templates/hook/my-account.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200374683653c2c6d57053e9-47025331',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'in_footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6d5743b98_02637300',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6d5743b98_02637300')) {function content_53c2c6d5743b98_02637300($_smarty_tpl) {?>

<li class="favoriteproducts">
	<a 
	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','account'), ENT_QUOTES, 'UTF-8', true);?>
" 
	title="<?php echo smartyTranslate(array('s'=>'My favorite products.','mod'=>'favoriteproducts'),$_smarty_tpl);?>
">
		<?php if (!$_smarty_tpl->tpl_vars['in_footer']->value){?>
			<i class="icon-heart-empty"></i>
			<span><?php echo smartyTranslate(array('s'=>'My favorite products','mod'=>'favoriteproducts'),$_smarty_tpl);?>
</span>
		<?php }else{ ?>
			<?php echo smartyTranslate(array('s'=>'My favorite products','mod'=>'favoriteproducts'),$_smarty_tpl);?>

		<?php }?>
	</a>
</li>
<?php }} ?>