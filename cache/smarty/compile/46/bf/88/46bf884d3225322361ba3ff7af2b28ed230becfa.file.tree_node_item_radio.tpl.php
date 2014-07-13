<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:27
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/helpers/tree/tree_node_item_radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:66990789153c2c6e30ec237-96108157%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46bf884d3225322361ba3ff7af2b28ed230becfa' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/helpers/tree/tree_node_item_radio.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66990789153c2c6e30ec237-96108157',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'input_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6e3171696_14774989',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6e3171696_14774989')) {function content_53c2c6e3171696_14774989($_smarty_tpl) {?>
<li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true){?> tree-item-disable<?php }?>">
	<label class="tree-item-name">
		<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true){?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>

	</label>
</li><?php }} ?>