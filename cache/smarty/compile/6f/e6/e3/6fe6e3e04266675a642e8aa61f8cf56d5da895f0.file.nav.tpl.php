<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:11
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157198229153c2c6d3cc23c6-97331156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fe6e3e04266675a642e8aa61f8cf56d5da895f0' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/nav.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157198229153c2c6d3cc23c6-97331156',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee' => 0,
    'tab' => 0,
    'tabs' => 0,
    't' => 0,
    't2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6d3dd8218_75930295',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6d3dd8218_75930295')) {function content_53c2c6d3dd8218_75930295($_smarty_tpl) {?><div class="bootstrap">
	<nav id="<?php if ($_smarty_tpl->tpl_vars['employee']->value->bo_menu){?>nav-sidebar<?php }else{ ?>nav-topbar<?php }?>" role="navigation">
		<?php if (!$_smarty_tpl->tpl_vars['tab']->value){?>
			<div class="mainsubtablist" style="display:none"></div>
		<?php }?>
		<ul class="menu">
			<li class="searchtab">
				<?php echo $_smarty_tpl->getSubTemplate ("search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>"header_search",'show_clear_btn'=>1), 0);?>

			</li>

			

			<?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value){
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['t']->value['active']){?>
				<li class="maintab <?php if ($_smarty_tpl->tpl_vars['t']->value['current']){?>active<?php }?> <?php if (count($_smarty_tpl->tpl_vars['t']->value['sub_tabs'])){?>has_submenu<?php }?>" id="maintab-<?php echo $_smarty_tpl->tpl_vars['t']->value['class_name'];?>
" data-submenu="<?php echo $_smarty_tpl->tpl_vars['t']->value['id_tab'];?>
">
					<a href="<?php if (count($_smarty_tpl->tpl_vars['t']->value['sub_tabs'])&&isset($_smarty_tpl->tpl_vars['t']->value['sub_tabs'][0]['href'])){?><?php echo $_smarty_tpl->tpl_vars['t']->value['sub_tabs'][0]['href'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['t']->value['href'];?>
<?php }?>" class="title" >
						<i class="icon-<?php echo $_smarty_tpl->tpl_vars['t']->value['class_name'];?>
"></i>
						<span><?php if ($_smarty_tpl->tpl_vars['t']->value['name']==''){?><?php echo $_smarty_tpl->tpl_vars['t']->value['class_name'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['t']->value['name'];?>
<?php }?></span>
					</a>
					<?php if (count($_smarty_tpl->tpl_vars['t']->value['sub_tabs'])){?>
						<ul class="submenu">
						<?php  $_smarty_tpl->tpl_vars['t2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['t']->value['sub_tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t2']->key => $_smarty_tpl->tpl_vars['t2']->value){
$_smarty_tpl->tpl_vars['t2']->_loop = true;
?>
							<?php if ($_smarty_tpl->tpl_vars['t2']->value['active']){?>
							<li id="subtab-<?php echo $_smarty_tpl->tpl_vars['t2']->value['class_name'];?>
" <?php if ($_smarty_tpl->tpl_vars['t2']->value['current']){?> class="active"<?php }?>>
								<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t2']->value['href'], ENT_QUOTES, 'UTF-8', true);?>
">
									<?php if ($_smarty_tpl->tpl_vars['t2']->value['name']==''){?><?php echo $_smarty_tpl->tpl_vars['t2']->value['class_name'];?>
<?php }else{ ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t2']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>
								</a>
							</li>
							<?php }?>
						<?php } ?>
						</ul>
					<?php }?>
				</li>
				<?php }?>
			<?php } ?>
		</ul>
		<span class="menu-collapse">
			<i class="icon-align-justify"></i>
		</span>
	</nav>
</div><?php }} ?>