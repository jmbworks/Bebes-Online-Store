<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:18
         compiled from "/var/www/html/onlineshop/themes/default-bootstrap/modules/cheque/views/templates/hook/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114222939753c2c6da05af46-79921446%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f0c28123bd183b9d0507e4b994527896470c909' => 
    array (
      0 => '/var/www/html/onlineshop/themes/default-bootstrap/modules/cheque/views/templates/hook/payment.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114222939753c2c6da05af46-79921446',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6da095943_36845536',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6da095943_36845536')) {function content_53c2c6da095943_36845536($_smarty_tpl) {?>
<div class="row">
	<div class="col-xs-12 col-md-6">
        <p class="payment_module">
            <a class="cheque" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('cheque','payment',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Pay by check.','mod'=>'cheque'),$_smarty_tpl);?>
">
                <?php echo smartyTranslate(array('s'=>'Pay by check','mod'=>'cheque'),$_smarty_tpl);?>
 <span><?php echo smartyTranslate(array('s'=>'(order processing will be longer)','mod'=>'cheque'),$_smarty_tpl);?>
</span>
            </a>
        </p>
    </div>
</div>
<?php }} ?>