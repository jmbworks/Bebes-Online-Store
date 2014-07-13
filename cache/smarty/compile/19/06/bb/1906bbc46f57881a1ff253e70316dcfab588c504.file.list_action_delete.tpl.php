<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:12
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/controllers/shop/helpers/list/list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:166228762853c2c6d44aca43-08439863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1906bbc46f57881a1ff253e70316dcfab588c504' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/controllers/shop/helpers/list/list_action_delete.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166228762853c2c6d44aca43-08439863',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'id_shop' => 0,
    'shops_having_dependencies' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6d44e9563_80408072',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6d44e9563_80408072')) {function content_53c2c6d44e9563_80408072($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="delete"
	<?php if (in_array($_smarty_tpl->tpl_vars['id_shop']->value,$_smarty_tpl->tpl_vars['shops_having_dependencies']->value)){?>
		onclick="jAlert('<?php echo smartyTranslate(array('s'=>'You cannot delete this shop\'s (customer and/or order dependency)','js'=>1),$_smarty_tpl);?>
'); return false;"
	<?php }elseif(isset($_smarty_tpl->tpl_vars['confirm']->value)){?>
		onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){ return true; } else { event.stopPropagation(); event.preventDefault();};"
	<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<i class="icon-trash"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>