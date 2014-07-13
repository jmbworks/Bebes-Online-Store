<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:14
         compiled from "/var/www/html/onlineshop/themes/default-bootstrap/modules/blockwishlist/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:78796346253c2c6d6bad256-25849751%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2f3933eb07c8421628794222e63b6156be39617' => 
    array (
      0 => '/var/www/html/onlineshop/themes/default-bootstrap/modules/blockwishlist/my-account.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78796346253c2c6d6bad256-25849751',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6d6bc7a65_97484116',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6d6bc7a65_97484116')) {function content_53c2c6d6bc7a65_97484116($_smarty_tpl) {?>

<!-- MODULE WishList -->
<li class="lnk_wishlist">
	<a 	href="<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true));?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
		<i class="icon-heart"></i>
		<span><?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
	</a>
</li>
<!-- END : MODULE WishList --><?php }} ?>