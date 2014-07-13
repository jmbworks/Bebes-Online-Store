<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:13
         compiled from "/var/www/html/onlineshop/themes/default-bootstrap/modules/cashondelivery/views/templates/hook/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:159649042653c2c6d5412da6-02315279%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1dfd1799a941e8e2f01f58ad4d9580585b19c07' => 
    array (
      0 => '/var/www/html/onlineshop/themes/default-bootstrap/modules/cashondelivery/views/templates/hook/payment.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159649042653c2c6d5412da6-02315279',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6d5430df9_59380205',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6d5430df9_59380205')) {function content_53c2c6d5430df9_59380205($_smarty_tpl) {?>
<div class="row">
	<div class="col-xs-12 col-md-6">
        <p class="payment_module">
            <a class="cash" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('cashondelivery','validation',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Pay with cash on delivery (COD)','mod'=>'cashondelivery'),$_smarty_tpl);?>
" rel="nofollow">
            	<?php echo smartyTranslate(array('s'=>'Pay with cash on delivery (COD)','mod'=>'cashondelivery'),$_smarty_tpl);?>
<br />
            	<?php echo smartyTranslate(array('s'=>'You pay for the merchandise upon delivery','mod'=>'cashondelivery'),$_smarty_tpl);?>

            </a>
        </p>
    </div>
</div><?php }} ?>