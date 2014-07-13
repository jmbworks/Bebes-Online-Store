<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:17
         compiled from "/var/www/html/onlineshop/themes/default-bootstrap/modules/referralprogram/views/templates/hook/shopping-cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:46628202753c2c6d9a03844-40701361%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '805bcd06b621f31a19b191e4f2a1846822071703' => 
    array (
      0 => '/var/www/html/onlineshop/themes/default-bootstrap/modules/referralprogram/views/templates/hook/shopping-cart.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46628202753c2c6d9a03844-40701361',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'discount_display' => 0,
    'discount' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6d9a65c44_50617777',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6d9a65c44_50617777')) {function content_53c2c6d9a65c44_50617777($_smarty_tpl) {?>

<!-- MODULE ReferralProgram -->
<p id="referralprogram">
	<i class="icon-flag"></i>
	<?php echo smartyTranslate(array('s'=>'You have earned a voucher worth %s thanks to your sponsor!','sprintf'=>$_smarty_tpl->tpl_vars['discount_display']->value,'mod'=>'referralprogram'),$_smarty_tpl);?>

	<?php echo smartyTranslate(array('s'=>'Enter voucher name %s to receive the reduction on this order.','sprintf'=>$_smarty_tpl->tpl_vars['discount']->value->name,'mod'=>'referralprogram'),$_smarty_tpl);?>

	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('referralprogram','program',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Referral program','mod'=>'referralprogram'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'View your referral program.','mod'=>'referralprogram'),$_smarty_tpl);?>
</a>
</p>
<br />
<!-- END : MODULE ReferralProgram --><?php }} ?>