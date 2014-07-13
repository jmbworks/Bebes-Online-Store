<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:24
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/controllers/not_found/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:100838897053c2c6e0d62b94-41366041%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6aaec4b637818f2369612968b1685dae933d5399' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/controllers/not_found/content.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100838897053c2c6e0d62b94-41366041',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'controller' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6e0d9c564_36090775',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6e0d9c564_36090775')) {function content_53c2c6e0d9c564_36090775($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['controller']->value)&&!empty($_smarty_tpl->tpl_vars['controller']->value)&&$_smarty_tpl->tpl_vars['controller']->value!='adminnotfound'){?>
	<h1><?php echo smartyTranslate(array('s'=>'The controller %s is missing or invalid.','sprintf'=>$_smarty_tpl->tpl_vars['controller']->value),$_smarty_tpl);?>
</h1>
<?php }?>
<a class="btn btn-default" href="javascript:window.history.back();">
	<i class="icon-arrow-left"></i>
	<?php echo smartyTranslate(array('s'=>'Back to the previous page'),$_smarty_tpl);?>

</a>
<a class="btn btn-default" href="index.php">
	<i class="icon-dashboard"></i>
	<?php echo smartyTranslate(array('s'=>'Go to the dashboard'),$_smarty_tpl);?>

</a><?php }} ?>