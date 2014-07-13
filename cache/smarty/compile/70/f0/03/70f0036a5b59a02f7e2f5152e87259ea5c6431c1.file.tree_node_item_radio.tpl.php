<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:15
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/controllers/groups/helpers/tree/tree_node_item_radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:159061554853c2c6d7bd0272-62047469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70f0036a5b59a02f7e2f5152e87259ea5c6431c1' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/controllers/groups/helpers/tree/tree_node_item_radio.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159061554853c2c6d7bd0272-62047469',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6d7c30401_45067637',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6d7c30401_45067637')) {function content_53c2c6d7c30401_45067637($_smarty_tpl) {?>
<li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true){?> tree-item-disable<?php }?>">
	<label class="tree-item-name">
		<input type="radio" name="id_category" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true){?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>

	</label>
</li><?php }} ?>