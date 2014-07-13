<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:27
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/helpers/tree/tree_node_folder_radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:202072827953c2c6e3174d53-25951315%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2dfc47c29d31626aabac13064e0fc43e8c1423af' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/helpers/tree/tree_node_folder_radio.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202072827953c2c6e3174d53-25951315',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'root_category' => 0,
    'input_name' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6e32270d4_57823144',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6e32270d4_57823144')) {function content_53c2c6e32270d4_57823144($_smarty_tpl) {?>
<li class="tree-folder">
	<span class="tree-folder-name<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true){?> tree-folder-name-disable<?php }?>">
		<?php if ($_smarty_tpl->tpl_vars['node']->value['id_category']!=$_smarty_tpl->tpl_vars['root_category']->value){?>
		<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true){?> disabled="disabled"<?php }?> />
		<?php }?>
		<i class="icon-folder-close"></i>
		<label class="tree-toggler "><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
	<ul class="tree">
		<?php echo $_smarty_tpl->tpl_vars['children']->value;?>

	</ul>
</li>
<?php }} ?>