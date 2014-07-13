<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:27
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/helpers/tree/tree_node_folder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:208980264953c2c6e30d3325-94421983%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26e0849c9b1ae90d19c439518606fc84abb58b01' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/helpers/tree/tree_node_folder.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208980264953c2c6e30d3325-94421983',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6e30e9221_13042345',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6e30e9221_13042345')) {function content_53c2c6e30e9221_13042345($_smarty_tpl) {?>
<li class="tree-folder">
	<span class="tree-folder-name">
		<i class="icon-folder-close"></i>
		<label class="tree-toggler "><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
	<ul class="tree">
		<?php echo $_smarty_tpl->tpl_vars['children']->value;?>

	</ul>
</li><?php }} ?>