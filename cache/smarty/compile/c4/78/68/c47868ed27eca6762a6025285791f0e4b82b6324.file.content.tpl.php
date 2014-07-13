<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:25
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:39619845053c2c6e11d72c5-50078126%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c47868ed27eca6762a6025285791f0e4b82b6324' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/content.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39619845053c2c6e11d72c5-50078126',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6e11f0f40_97793109',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6e11f0f40_97793109')) {function content_53c2c6e11f0f40_97793109($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)){?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>