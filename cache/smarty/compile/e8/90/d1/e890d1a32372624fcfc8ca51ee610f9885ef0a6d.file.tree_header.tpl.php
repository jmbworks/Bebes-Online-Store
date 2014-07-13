<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:27
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/helpers/tree/tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150223484353c2c6e33c5a17-36182123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e890d1a32372624fcfc8ca51ee610f9885ef0a6d' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/helpers/tree/tree_header.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150223484353c2c6e33c5a17-36182123',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6e33fa3a9_33488047',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6e33fa3a9_33488047')) {function content_53c2c6e33fa3a9_33488047($_smarty_tpl) {?>
<div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)){?><i class="icon-tag"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)){?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
</div><?php }} ?>