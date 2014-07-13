<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 14:43:12
         compiled from "/var/www/html/onlineshop/themes/default-bootstrap/modules/blockcontact/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:206379045853c2d340d312e4-15888101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '711eb54f21d4913b9fe173742a0ca7afa1df3a02' => 
    array (
      0 => '/var/www/html/onlineshop/themes/default-bootstrap/modules/blockcontact/nav.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206379045853c2d340d312e4-15888101',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'telnumber' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2d340d9fb82_44126442',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2d340d9fb82_44126442')) {function content_53c2d340d9fb82_44126442($_smarty_tpl) {?>
<div id="contact-link">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Contact Us','mod'=>'blockcontact'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>
</a>
</div>
<?php if ($_smarty_tpl->tpl_vars['telnumber']->value){?>
	<span class="shop-phone">
		<i class="icon-phone"></i><?php echo smartyTranslate(array('s'=>'Call us now:','mod'=>'blockcontact'),$_smarty_tpl);?>
 <strong><?php echo $_smarty_tpl->tpl_vars['telnumber']->value;?>
</strong>
	</span>
<?php }?><?php }} ?>