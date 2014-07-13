<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:12
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/controllers/shop/helpers/tree/shop_tree_node_folder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112845460853c2c6d448c397-38868003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a003a1104b9b21ac08c81f617017bd861e173c0e' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/controllers/shop/helpers/tree/shop_tree_node_folder.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112845460853c2c6d448c397-38868003',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_shop_group' => 0,
    'node' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6d44a1505_69407603',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6d44a1505_69407603')) {function content_53c2c6d44a1505_69407603($_smarty_tpl) {?>
<li class="tree-folder">
	<span class="tree-folder-name">
		<i class="icon-folder-close"></i>
		<label class="tree-toggler "><a href="<?php echo $_smarty_tpl->tpl_vars['url_shop_group']->value;?>
&id_shop_group=<?php echo $_smarty_tpl->tpl_vars['node']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</a></label>
	</span>
	<ul class="tree">
		<?php echo $_smarty_tpl->tpl_vars['children']->value;?>

	</ul>
</li><?php }} ?>