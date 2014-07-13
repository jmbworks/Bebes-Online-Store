<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:23
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/controllers/orders/_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124096470953c2c6dfa604b8-26004161%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbb2e115f0435aefc172b58c88ff672081b433a3' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/controllers/orders/_print_pdf_icon.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124096470953c2c6dfa604b8-26004161',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_state' => 0,
    'order' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6dfae3c94_00018141',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6dfae3c94_00018141')) {function content_53c2c6dfae3c94_00018141($_smarty_tpl) {?>


<span class="btn-group-action">
	<span class="btn-group">
	<?php if (Configuration::get('PS_INVOICE')&&(($_smarty_tpl->tpl_vars['order_state']->value&&$_smarty_tpl->tpl_vars['order_state']->value->invoice)||$_smarty_tpl->tpl_vars['order']->value->invoice_number)){?>
		<a class="btn btn-default" target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&submitAction=generateInvoicePDF&id_order=<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
">
			<i class="icon-file-text"></i>
		</a>
	<?php }?>
	
	<?php if ((($_smarty_tpl->tpl_vars['order_state']->value&&$_smarty_tpl->tpl_vars['order_state']->value->delivery)||$_smarty_tpl->tpl_vars['order']->value->delivery_number)){?>
		<a class="btn btn-default"  target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&submitAction=generateDeliverySlipPDF&id_order=<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
">
			<i class="icon-truck"></i>
		</a>
	<?php }?>
	</span>
</span><?php }} ?>