<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:17
         compiled from "/var/www/html/onlineshop/themes/default-bootstrap/modules/referralprogram/views/templates/hook/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120544475253c2c6d99231f5-80433965%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5a321120d20a0edd4520a0b247b506957c82f5f' => 
    array (
      0 => '/var/www/html/onlineshop/themes/default-bootstrap/modules/referralprogram/views/templates/hook/my-account.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120544475253c2c6d99231f5-80433965',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6d9957149_91704862',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6d9957149_91704862')) {function content_53c2c6d9957149_91704862($_smarty_tpl) {?>

<!-- MODULE ReferralProgram -->
<li class="referralprogram">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('referralprogram','program',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Referral program','mod'=>'referralprogram'),$_smarty_tpl);?>
" rel="nofollow"><i class="icon-cogs"></i><span><?php echo smartyTranslate(array('s'=>'Referral program','mod'=>'referralprogram'),$_smarty_tpl);?>
</span></a>
</li>
<!-- END : MODULE ReferralProgram --><?php }} ?>