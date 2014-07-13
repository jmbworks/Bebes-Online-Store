<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:14
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/controllers/scenes/helpers/tree/tree_node_folder_checkbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113574577453c2c6d6c950e9-13610211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74296600529b2c1c4ef803e7c103637825a1489e' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/controllers/scenes/helpers/tree/tree_node_folder_checkbox.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113574577453c2c6d6c950e9-13610211',
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
  'unifunc' => 'content_53c2c6d6cd12f1_93155110',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6d6cd12f1_93155110')) {function content_53c2c6d6cd12f1_93155110($_smarty_tpl) {?>
<li class="tree-folder">
	<span class="tree-folder-name<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true){?> tree-folder-name-disable<?php }?>">
		<input type="checkbox" name="categories[]" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true){?> disabled="disabled"<?php }?> />
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
	<ul class="tree">
		<?php echo $_smarty_tpl->tpl_vars['children']->value;?>

	</ul>
</li><?php }} ?>