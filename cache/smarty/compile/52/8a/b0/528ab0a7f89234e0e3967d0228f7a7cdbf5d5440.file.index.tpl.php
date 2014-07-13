<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:20
         compiled from "/var/www/html/onlineshop/themes/default-bootstrap/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:176307642753c2c6dc23aea1-10829693%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '528ab0a7f89234e0e3967d0228f7a7cdbf5d5440' => 
    array (
      0 => '/var/www/html/onlineshop/themes/default-bootstrap/index.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176307642753c2c6dc23aea1-10829693',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOOK_HOME_TAB_CONTENT' => 0,
    'HOOK_HOME_TAB' => 0,
    'HOOK_HOME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6dc2a26c0_47707235',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6dc2a26c0_47707235')) {function content_53c2c6dc2a26c0_47707235($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)){?>
    <?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)){?>
        <ul id="home-page-tabs" class="nav nav-tabs clearfix">
			<?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value;?>

		</ul>
	<?php }?>
	<div class="tab-content"><?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value;?>
</div>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME']->value)){?>
	<div class="clearfix"><?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>
</div>
<?php }?><?php }} ?>