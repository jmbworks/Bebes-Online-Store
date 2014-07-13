<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:21
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/controllers/stats/calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212959445553c2c6dd0be787-73377977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b412f20c5f0ee7222866999a2fb31b255befa9af' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/controllers/stats/calendar.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212959445553c2c6dd0be787-73377977',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6dd0ca229_53698459',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6dd0ca229_53698459')) {function content_53c2c6dd0ca229_53698459($_smarty_tpl) {?>

<div id="statsContainer" class="col-md-9">
	<?php echo $_smarty_tpl->getSubTemplate ("../../form_date_range_picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>