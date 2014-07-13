<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:13
         compiled from "/var/www/html/onlineshop/themes/default-bootstrap/modules/homeslider/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13307043053c2c6d589df05-99522296%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1e06d958233a43d6ca32e55b3f6a487f873a88b' => 
    array (
      0 => '/var/www/html/onlineshop/themes/default-bootstrap/modules/homeslider/header.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13307043053c2c6d589df05-99522296',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'homeslider' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6d58e1800_42710833',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6d58e1800_42710833')) {function content_53c2c6d58e1800_42710833($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['homeslider']->value)){?>
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('homeslider_loop'=>intval($_smarty_tpl->tpl_vars['homeslider']->value['loop'])),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('homeslider_width'=>intval($_smarty_tpl->tpl_vars['homeslider']->value['width'])),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('homeslider_speed'=>intval($_smarty_tpl->tpl_vars['homeslider']->value['speed'])),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('homeslider_pause'=>intval($_smarty_tpl->tpl_vars['homeslider']->value['pause'])),$_smarty_tpl);?>

<?php }?><?php }} ?>