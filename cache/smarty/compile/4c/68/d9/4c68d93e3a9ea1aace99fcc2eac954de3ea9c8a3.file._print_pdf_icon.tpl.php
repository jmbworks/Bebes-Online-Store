<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:15
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/controllers/outstanding/_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:172001674353c2c6d72fb976-80938124%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c68d93e3a9ea1aace99fcc2eac954de3ea9c8a3' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/controllers/outstanding/_print_pdf_icon.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172001674353c2c6d72fb976-80938124',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'id_invoice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6d731e1c7_05886939',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6d731e1c7_05886939')) {function content_53c2c6d731e1c7_05886939($_smarty_tpl) {?>


<?php if (Configuration::get('PS_INVOICE')){?>
	<span style="width:20px; margin-right:5px;">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&submitAction=generateInvoicePDF&id_order_invoice=<?php echo $_smarty_tpl->tpl_vars['id_invoice']->value;?>
"><img src="../img/admin/tab-invoice.gif" alt="invoice" /></a>
	</span>
<?php }?><?php }} ?>