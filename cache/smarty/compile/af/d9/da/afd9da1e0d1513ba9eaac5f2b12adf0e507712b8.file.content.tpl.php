<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:21
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/controllers/emails/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197554777653c2c6dd79b568-87249331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afd9da1e0d1513ba9eaac5f2b12adf0e507712b8' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/controllers/emails/content.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197554777653c2c6dd79b568-87249331',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'token' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6dd7e3b61_75182867',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6dd7e3b61_75182867')) {function content_53c2c6dd7e3b61_75182867($_smarty_tpl) {?>

<script type="text/javascript">
	var textMsg = "<?php echo smartyTranslate(array('s'=>'This is a test message. Your server is now configured to send email.','js'=>1),$_smarty_tpl);?>
";
	var textSubject = "<?php echo smartyTranslate(array('s'=>'Test message -- Prestashop','js'=>1),$_smarty_tpl);?>
";
	var textSendOk = "<?php echo smartyTranslate(array('s'=>'A test email has been sent to the email address you provided.','js'=>1),$_smarty_tpl);?>
";
	var textSendError= "<?php echo smartyTranslate(array('s'=>'Error: Please check your configuration','js'=>1),$_smarty_tpl);?>
";
	var token_mail = '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
';
	var errorMail = "<?php echo smartyTranslate(array('s'=>'This email address is not valid','js'=>1),$_smarty_tpl);?>
";
	$(document).ready(function() {
		if ($('input[name=PS_MAIL_METHOD]:checked').val() == 2)
			$('#configuration_fieldset_smtp').show();
		else
			$('#configuration_fieldset_smtp').hide();
	});
</script>

<?php if (isset($_smarty_tpl->tpl_vars['content']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }?>

<?php }} ?>