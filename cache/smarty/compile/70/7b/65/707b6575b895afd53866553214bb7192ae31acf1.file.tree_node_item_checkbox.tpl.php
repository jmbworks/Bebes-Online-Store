<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:14
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/controllers/scenes/helpers/tree/tree_node_item_checkbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1683653353c2c6d6cd3882-07314590%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '707b6575b895afd53866553214bb7192ae31acf1' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/controllers/scenes/helpers/tree/tree_node_item_checkbox.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1683653353c2c6d6cd3882-07314590',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6d6d047f2_76451023',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6d6d047f2_76451023')) {function content_53c2c6d6d047f2_76451023($_smarty_tpl) {?>
<li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true){?> tree-item-disable<?php }?>">
	<label class="tree-item-name">
	<input type="checkbox" name="categories[]" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true){?> disabled="disabled"<?php }?> />
	<i class="tree-dot"></i>
	<?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>

	</label>
</li><?php }} ?>