<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:21
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/controllers/slip/_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109771612753c2c6dd4e56c1-62439365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4112ba5bdf27c89de54f054e2c89d0e5fca94d76' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/controllers/slip/_print_pdf_icon.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109771612753c2c6dd4e56c1-62439365',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'order_slip' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6dd50f088_35114204',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6dd50f088_35114204')) {function content_53c2c6dd50f088_35114204($_smarty_tpl) {?>



<a class="btn btn-default" target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&submitAction=generateOrderSlipPDF&id_order_slip=<?php echo $_smarty_tpl->tpl_vars['order_slip']->value->id;?>
">
	<i class="icon-file-text"></i>
	<?php echo smartyTranslate(array('s'=>'Download credit slip'),$_smarty_tpl);?>

</a>

<?php }} ?>