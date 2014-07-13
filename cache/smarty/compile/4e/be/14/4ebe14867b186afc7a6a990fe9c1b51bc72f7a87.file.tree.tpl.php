<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:27
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/helpers/tree/tree.tpl" */ ?>
<?php /*%%SmartyHeaderCode:214127727753c2c6e33fe728-67531274%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ebe14867b186afc7a6a990fe9c1b51bc72f7a87' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/helpers/tree/tree.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214127727753c2c6e33fe728-67531274',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'header' => 0,
    'nodes' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6e343a6e2_99630885',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6e343a6e2_99630885')) {function content_53c2c6e343a6e2_99630885($_smarty_tpl) {?>
<div class="panel">
	<?php if (isset($_smarty_tpl->tpl_vars['header']->value)){?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['nodes']->value)){?>
	<ul id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="tree">
		<?php echo $_smarty_tpl->tpl_vars['nodes']->value;?>

	</ul>
	<?php }?>
</div><?php }} ?>