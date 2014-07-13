<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:17
         compiled from "/var/www/html/onlineshop/themes/default-bootstrap/modules/referralprogram/views/templates/hook/authentication.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92331755953c2c6d9986c50-90273237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b93d5ec09f99060ef63f0ac4b492f2e3fd855ba1' => 
    array (
      0 => '/var/www/html/onlineshop/themes/default-bootstrap/modules/referralprogram/views/templates/hook/authentication.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92331755953c2c6d9986c50-90273237',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6d99c4f42_58589861',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6d99c4f42_58589861')) {function content_53c2c6d99c4f42_58589861($_smarty_tpl) {?>

<!-- MODULE ReferralProgram -->
<fieldset class="account_creation">
	<h3 class="page-subheading"><?php echo smartyTranslate(array('s'=>'Referral program','mod'=>'referralprogram'),$_smarty_tpl);?>
</h3>
	<p class="form-group">
		<label for="referralprogram"><?php echo smartyTranslate(array('s'=>'E-mail address of your sponsor','mod'=>'referralprogram'),$_smarty_tpl);?>
</label>
		<input class="form-control" type="text" size="52" maxlength="128" id="referralprogram" name="referralprogram" value="<?php if (isset($_POST['referralprogram'])){?><?php echo htmlspecialchars($_POST['referralprogram'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
	</p>
</fieldset>
<!-- END : MODULE ReferralProgram --><?php }} ?>