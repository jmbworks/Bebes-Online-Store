<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:17
         compiled from "/var/www/html/onlineshop/themes/default-bootstrap/modules/referralprogram/views/templates/hook/order-confirmation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171781148253c2c6d995aa77-60746620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc2bdc8936363dbc31267ca2d3247d6ae6cabffd' => 
    array (
      0 => '/var/www/html/onlineshop/themes/default-bootstrap/modules/referralprogram/views/templates/hook/order-confirmation.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171781148253c2c6d995aa77-60746620',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sponsor_firstname' => 0,
    'sponsor_lastname' => 0,
    'discount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6d99832d6_83690632',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6d99832d6_83690632')) {function content_53c2c6d99832d6_83690632($_smarty_tpl) {?>

<p class="success">
	<?php echo smartyTranslate(array('s'=>'Thanks to your order, your sponsor %1$s %2$s will earn a voucher worth %3$d off when this order is confirmed.','sprintf'=>array($_smarty_tpl->tpl_vars['sponsor_firstname']->value,$_smarty_tpl->tpl_vars['sponsor_lastname']->value,$_smarty_tpl->tpl_vars['discount']->value),'mod'=>'referralprogram'),$_smarty_tpl);?>

</p>
<br/><?php }} ?>