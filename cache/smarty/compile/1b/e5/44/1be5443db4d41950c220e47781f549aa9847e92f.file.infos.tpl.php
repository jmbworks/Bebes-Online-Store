<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:17
         compiled from "/var/www/html/onlineshop/themes/default-bootstrap/modules/cheque/views/templates/hook/infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140476893853c2c6da00d609-61277985%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1be5443db4d41950c220e47781f549aa9847e92f' => 
    array (
      0 => '/var/www/html/onlineshop/themes/default-bootstrap/modules/cheque/views/templates/hook/infos.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140476893853c2c6da00d609-61277985',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6da031717_31678612',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6da031717_31678612')) {function content_53c2c6da031717_31678612($_smarty_tpl) {?>

<div class="alert alert-info">
<img src="../modules/cheque/cheque.jpg" style="float:left; margin-right:15px;" width="86" height="49">
<p><strong><?php echo smartyTranslate(array('s'=>"This module allows you to accept payments by check.",'mod'=>'cheque'),$_smarty_tpl);?>
</strong></p>
<p><?php echo smartyTranslate(array('s'=>"If the client chooses this payment method, the order status will change to 'Waiting for payment.'",'mod'=>'cheque'),$_smarty_tpl);?>
</p>
<p><?php echo smartyTranslate(array('s'=>"You will need to manually confirm the order as soon as you receive a check.",'mod'=>'cheque'),$_smarty_tpl);?>
</p>
</div>
<?php }} ?>