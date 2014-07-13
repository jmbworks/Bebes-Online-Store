<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:16
         compiled from "/var/www/html/onlineshop/themes/default-bootstrap/modules/loyalty/views/templates/hook/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26720982953c2c6d81a75b3-89922127%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0169e3991e48b695e39d47b2febedae154569c09' => 
    array (
      0 => '/var/www/html/onlineshop/themes/default-bootstrap/modules/loyalty/views/templates/hook/my-account.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26720982953c2c6d81a75b3-89922127',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6d81d8823_28272247',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6d81d8823_28272247')) {function content_53c2c6d81d8823_28272247($_smarty_tpl) {?>

<!-- MODULE Loyalty -->
<li class="loyalty">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('loyalty','default',array('process'=>'summary'),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My loyalty points','mod'=>'loyalty'),$_smarty_tpl);?>
" rel="nofollow"><i class="icon-flag"></i><span><?php echo smartyTranslate(array('s'=>'My loyalty points','mod'=>'loyalty'),$_smarty_tpl);?>
</span></a>
</li>
<!-- END : MODULE Loyalty --><?php }} ?>