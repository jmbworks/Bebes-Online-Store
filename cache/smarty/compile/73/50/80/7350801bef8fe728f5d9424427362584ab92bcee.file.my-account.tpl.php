<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:18
         compiled from "/var/www/html/onlineshop/themes/default-bootstrap/modules/mailalerts/views/templates/hook/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110089635253c2c6da62b567-20446197%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7350801bef8fe728f5d9424427362584ab92bcee' => 
    array (
      0 => '/var/www/html/onlineshop/themes/default-bootstrap/modules/mailalerts/views/templates/hook/my-account.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110089635253c2c6da62b567-20446197',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6da657c84_09586213',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6da657c84_09586213')) {function content_53c2c6da657c84_09586213($_smarty_tpl) {?>

<li class="mailalerts">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('mailalerts','account',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
" rel="nofollow">
    	<i class="icon-envelope"></i>
		<span><?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
</span>
	</a>
</li>
<?php }} ?>