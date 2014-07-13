<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:25
         compiled from "/var/www/html/onlineshop/themes/default-bootstrap/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:46979011953c2c6e1753462-28267015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef9b8fc24d2ebf37f5a0e4c52734e3b039213b60' => 
    array (
      0 => '/var/www/html/onlineshop/themes/default-bootstrap/category-count.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46979011953c2c6e1753462-28267015',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6e17d45a9_57875674',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6e17d45a9_57875674')) {function content_53c2c6e17d45a9_57875674($_smarty_tpl) {?>
<span class="heading-counter"><?php if ((isset($_smarty_tpl->tpl_vars['category']->value)&&$_smarty_tpl->tpl_vars['category']->value->id==1)||(isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==0)){?><?php echo smartyTranslate(array('s'=>'There are no products in this category.'),$_smarty_tpl);?>
<?php }else{ ?><?php if (isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==1){?><?php echo smartyTranslate(array('s'=>'There is 1 product.'),$_smarty_tpl);?>
<?php }elseif(isset($_smarty_tpl->tpl_vars['nb_products']->value)){?><?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php }?><?php }?></span>
<?php }} ?>