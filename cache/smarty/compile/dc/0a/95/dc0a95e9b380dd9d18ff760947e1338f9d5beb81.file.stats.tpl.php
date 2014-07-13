<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:21
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/controllers/stats/stats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68496916453c2c6dd07c466-58588483%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc0a95e9b380dd9d18ff760947e1338f9d5beb81' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/controllers/stats/stats.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68496916453c2c6dd07c466-58588483',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_name' => 0,
    'module_instance' => 0,
    'hook' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6dd0bb270_00964532',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6dd0bb270_00964532')) {function content_53c2c6dd0bb270_00964532($_smarty_tpl) {?>

		<div class="panel">
			<?php if ($_smarty_tpl->tpl_vars['module_name']->value){?>
				<?php if ($_smarty_tpl->tpl_vars['module_instance']->value&&$_smarty_tpl->tpl_vars['module_instance']->value->active){?>
					<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>

				<?php }else{ ?>
					<?php echo smartyTranslate(array('s'=>'Module not found'),$_smarty_tpl);?>

				<?php }?>
			<?php }else{ ?>
				<h3 class="space"><?php echo smartyTranslate(array('s'=>'Please select a module from the left column.'),$_smarty_tpl);?>
</h3>
			<?php }?>
		</div>
	</div>
</div><?php }} ?>