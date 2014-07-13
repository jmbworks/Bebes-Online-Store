<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:14
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/controllers/themes/helpers/view/importtheme_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32353478753c2c6d6b96589-48968407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7d12ef36125a94d726127c9ebebd38ad4e01678' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/controllers/themes/helpers/view/importtheme_view.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32353478753c2c6d6b96589-48968407',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'add_new_theme_label' => 0,
    'add_new_theme_href' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6d6ba6d96_55698243',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6d6ba6d96_55698243')) {function content_53c2c6d6ba6d96_55698243($_smarty_tpl) {?>
<div class="panel">
    <h3>
        <i class="icon-picture"></i><?php echo $_smarty_tpl->tpl_vars['add_new_theme_label']->value;?>

    </h3>
    <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['add_new_theme_href']->value;?>
"><i class="icon-plus"></i> <?php echo $_smarty_tpl->tpl_vars['add_new_theme_label']->value;?>
</a>
</div>
<?php }} ?>