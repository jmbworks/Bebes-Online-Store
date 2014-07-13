<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:27
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/helpers/tree/tree_node_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71828808153c2c6e33e7320-62193937%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1df53b86e8098ff620fa8dfd1cd3a8b8e5202222' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/helpers/tree/tree_node_item.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71828808153c2c6e33e7320-62193937',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6e33f4bc5_73809666',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6e33f4bc5_73809666')) {function content_53c2c6e33f4bc5_73809666($_smarty_tpl) {?>

<li class="tree-item">
	<label class="tree-item-name">
		<i class="tree-dot"></i>
		<?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>

	</label>
</li><?php }} ?>