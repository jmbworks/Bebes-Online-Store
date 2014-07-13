<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:25
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/helpers/kpi/row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:982099953c2c6e1bd5e96-12914043%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d860c08ed3d8f9f1be3ea14f589cc38f9ca3336' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/helpers/kpi/row.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '982099953c2c6e1bd5e96-12914043',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'kpis' => 0,
    'kpi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6e1bf1f25_32572286',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6e1bf1f25_32572286')) {function content_53c2c6e1bf1f25_32572286($_smarty_tpl) {?>
<div class="panel kpi-container">
	<div class="row">
		<?php  $_smarty_tpl->tpl_vars['kpi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kpi']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kpis']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kpi']->key => $_smarty_tpl->tpl_vars['kpi']->value){
$_smarty_tpl->tpl_vars['kpi']->_loop = true;
?>
		<div class="col-sm-6 col-lg-3">
			<?php echo $_smarty_tpl->tpl_vars['kpi']->value;?>

		</div>			
		<?php } ?>
	</div>
</div><?php }} ?>