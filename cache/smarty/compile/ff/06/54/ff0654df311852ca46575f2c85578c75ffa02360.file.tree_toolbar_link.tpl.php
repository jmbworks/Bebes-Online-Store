<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:26
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/helpers/tree/tree_toolbar_link.tpl" */ ?>
<?php /*%%SmartyHeaderCode:80160116153c2c6e2e11826-07592432%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff0654df311852ca46575f2c85578c75ffa02360' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/helpers/tree/tree_toolbar_link.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80160116153c2c6e2e11826-07592432',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'action' => 0,
    'id' => 0,
    'icon_class' => 0,
    'label' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6e2e6b599_17397630',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6e2e6b599_17397630')) {function content_53c2c6e2e6b599_17397630($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['action']->value)){?> onclick="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['id']->value)){?> id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"<?php }?> class="btn btn-default">
	<?php if (isset($_smarty_tpl->tpl_vars['icon_class']->value)){?><i class="<?php echo $_smarty_tpl->tpl_vars['icon_class']->value;?>
"></i><?php }?>
	<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['label']->value),$_smarty_tpl);?>

</a><?php }} ?>