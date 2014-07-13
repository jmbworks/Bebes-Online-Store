<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:15
         compiled from "/var/www/html/onlineshop/themes/default-bootstrap/modules/blockwishlist/blockwishlist-extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:206067230753c2c6d77e0353-09364057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f88590449d993cfd11d7826beba285149b3f5bf' => 
    array (
      0 => '/var/www/html/onlineshop/themes/default-bootstrap/modules/blockwishlist/blockwishlist-extra.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206067230753c2c6d77e0353-09364057',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id_product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6d77f2573_41816753',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6d77f2573_41816753')) {function content_53c2c6d77f2573_41816753($_smarty_tpl) {?>

<p class="buttons_bottom_block no-print">
	<a id="wishlist_button" href="#" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['id_product']->value);?>
', $('#idCombination').val(), document.getElementById('quantity_wanted').value); return false;" rel="nofollow"  title="<?php echo smartyTranslate(array('s'=>'Add to my wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
		<?php echo smartyTranslate(array('s'=>'Add to my wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>

	</a>
</p>
<?php }} ?>