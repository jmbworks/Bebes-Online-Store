<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:17
         compiled from "/var/www/html/onlineshop/themes/default-bootstrap/modules/referralprogram/views/templates/front/rules.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115432902753c2c6d9070020-18233371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6b4c172d23754d4e4070a938e87e335e53238a4' => 
    array (
      0 => '/var/www/html/onlineshop/themes/default-bootstrap/modules/referralprogram/views/templates/front/rules.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115432902753c2c6d9070020-18233371',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'xml' => 0,
    'paragraph' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6d90c6e95_25668680',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6d90c6e95_25668680')) {function content_53c2c6d90c6e95_25668680($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/html/onlineshop/tools/smarty/plugins/modifier.replace.php';
?>

<h3><?php echo smartyTranslate(array('s'=>'Referral program rules','mod'=>'referralprogram'),$_smarty_tpl);?>
</h3>

<?php if (isset($_smarty_tpl->tpl_vars['xml']->value)){?>
<div id="referralprogram_rules">
	<?php if (isset($_smarty_tpl->tpl_vars['xml']->value->body->{$_smarty_tpl->tpl_vars['paragraph']->value})){?><div class="rte"><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['xml']->value->body->{$_smarty_tpl->tpl_vars['paragraph']->value},"\'","'"),'\"','"');?>
</div><?php }?>
</div>
<?php }?>
<?php }} ?>