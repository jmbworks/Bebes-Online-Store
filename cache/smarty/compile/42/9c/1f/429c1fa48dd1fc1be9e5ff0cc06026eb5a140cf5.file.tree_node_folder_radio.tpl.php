<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:15
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/controllers/groups/helpers/tree/tree_node_folder_radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:34564600253c2c6d7c34107-41358135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '429c1fa48dd1fc1be9e5ff0cc06026eb5a140cf5' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/controllers/groups/helpers/tree/tree_node_folder_radio.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34564600253c2c6d7c34107-41358135',
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
  'unifunc' => 'content_53c2c6d7c883f7_29885796',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6d7c883f7_29885796')) {function content_53c2c6d7c883f7_29885796($_smarty_tpl) {?>
<li class="tree-folder">
	<span class="tree-folder-name<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true){?> tree-folder-name-disable<?php }?>">
		<input type="radio" name="id_category" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true){?> disabled="disabled"<?php }?> />
		<i class="icon-folder-close"></i>
		<label class="tree-toggler "><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
	<ul class="tree">
		<?php echo $_smarty_tpl->tpl_vars['children']->value;?>

	</ul>
</li><?php }} ?>