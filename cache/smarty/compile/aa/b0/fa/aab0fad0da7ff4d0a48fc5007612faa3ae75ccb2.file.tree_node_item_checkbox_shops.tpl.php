<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:26
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/helpers/tree/tree_node_item_checkbox_shops.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4405226753c2c6e2ce18d4-16721916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aab0fad0da7ff4d0a48fc5007612faa3ae75ccb2' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/helpers/tree/tree_node_item_checkbox_shops.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4405226753c2c6e2ce18d4-16721916',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'table' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6e2d42263_70010145',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6e2d42263_70010145')) {function content_53c2c6e2d42263_70010145($_smarty_tpl) {?>
<li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true){?> tree-item-disable<?php }?>">
	<label class="tree-item-name">
		<input type="checkbox" name="checkBoxShopAsso_<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['node']->value['id_shop'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_shop'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true){?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>

	</label>
</li><?php }} ?>