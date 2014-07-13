<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:31
         compiled from "/var/www/html/onlineshop/themes/default-bootstrap/store_infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120209898653c2c6e72de635-18112278%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f112b97f55f78b32dcb3217761a9f0176bdbca2f' => 
    array (
      0 => '/var/www/html/onlineshop/themes/default-bootstrap/store_infos.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120209898653c2c6e72de635-18112278',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'days_datas' => 0,
    'one_day' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6e73334e2_44590870',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6e73334e2_44590870')) {function content_53c2c6e73334e2_44590870($_smarty_tpl) {?>


	<?php  $_smarty_tpl->tpl_vars['one_day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one_day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['days_datas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one_day']->key => $_smarty_tpl->tpl_vars['one_day']->value){
$_smarty_tpl->tpl_vars['one_day']->_loop = true;
?>
	<p>
		<strong class="dark"><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['one_day']->value['day']),$_smarty_tpl);?>
: </strong> &nbsp;<span><?php echo $_smarty_tpl->tpl_vars['one_day']->value['hours'];?>
</span>
	</p>
	<?php } ?>

<?php }} ?>