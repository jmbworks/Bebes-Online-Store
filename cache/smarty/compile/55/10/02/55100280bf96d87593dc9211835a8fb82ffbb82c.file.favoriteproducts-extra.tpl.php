<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:13
         compiled from "/var/www/html/onlineshop/themes/default-bootstrap/modules/favoriteproducts/views/templates/hook/favoriteproducts-extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23818347353c2c6d56c41b1-55467934%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55100280bf96d87593dc9211835a8fb82ffbb82c' => 
    array (
      0 => '/var/www/html/onlineshop/themes/default-bootstrap/modules/favoriteproducts/views/templates/hook/favoriteproducts-extra.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23818347353c2c6d56c41b1-55467934',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isCustomerFavoriteProduct' => 0,
    'is_logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6d5701948_49873669',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6d5701948_49873669')) {function content_53c2c6d5701948_49873669($_smarty_tpl) {?>

<?php if (!$_smarty_tpl->tpl_vars['isCustomerFavoriteProduct']->value&&$_smarty_tpl->tpl_vars['is_logged']->value){?>
<li id="favoriteproducts_block_extra_add" class="add">
	<?php echo smartyTranslate(array('s'=>'Add this product to my list of favorites.','mod'=>'favoriteproducts'),$_smarty_tpl);?>

</li>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['isCustomerFavoriteProduct']->value&&$_smarty_tpl->tpl_vars['is_logged']->value){?>
<li id="favoriteproducts_block_extra_remove">
	<?php echo smartyTranslate(array('s'=>'Remove this product from my favorite\'s list. ','mod'=>'favoriteproducts'),$_smarty_tpl);?>

</li>
<?php }?>

<li id="favoriteproducts_block_extra_added">
	<?php echo smartyTranslate(array('s'=>'Remove this product from my favorite\'s list. ','mod'=>'favoriteproducts'),$_smarty_tpl);?>

</li>
<li id="favoriteproducts_block_extra_removed">
	<?php echo smartyTranslate(array('s'=>'Add this product to my list of favorites.','mod'=>'favoriteproducts'),$_smarty_tpl);?>

</li><?php }} ?>