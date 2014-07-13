<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:14
         compiled from "/var/www/html/onlineshop/themes/default-bootstrap/modules/bankwire/views/templates/hook/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112384610953c2c6d698ae65-16781934%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ee72aacb823a7fab9c0b33e9b743c92e67f49d1' => 
    array (
      0 => '/var/www/html/onlineshop/themes/default-bootstrap/modules/bankwire/views/templates/hook/payment.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112384610953c2c6d698ae65-16781934',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6d69a9014_04066923',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6d69a9014_04066923')) {function content_53c2c6d69a9014_04066923($_smarty_tpl) {?>
<div class="row">
	<div class="col-xs-12 col-md-6">
        <p class="payment_module">
            <a 
            class="bankwire" 
            href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('bankwire','payment'), ENT_QUOTES, 'UTF-8', true);?>
" 
            title="<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
">
            	<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
 <span><?php echo smartyTranslate(array('s'=>'(order processing will be longer)','mod'=>'bankwire'),$_smarty_tpl);?>
</span>
            </a>
        </p>
    </div>
</div><?php }} ?>