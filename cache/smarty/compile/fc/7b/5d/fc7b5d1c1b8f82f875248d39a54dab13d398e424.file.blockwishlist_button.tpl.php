<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:14
         compiled from "/var/www/html/onlineshop/themes/default-bootstrap/modules/blockwishlist/blockwishlist_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:52915833253c2c6d6b42957-81001771%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc7b5d1c1b8f82f875248d39a54dab13d398e424' => 
    array (
      0 => '/var/www/html/onlineshop/themes/default-bootstrap/modules/blockwishlist/blockwishlist_button.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52915833253c2c6d6b42957-81001771',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6d6b64189_41147518',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6d6b64189_41147518')) {function content_53c2c6d6b64189_41147518($_smarty_tpl) {?>

<div class="wishlist">
	<a class="addToWishlist wishlistProd_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" href="#" rel="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
', false, 1); return false;">
		<?php echo smartyTranslate(array('s'=>"Add to Wishlist",'mod'=>'blockwishlist'),$_smarty_tpl);?>

	</a>
</div><?php }} ?>