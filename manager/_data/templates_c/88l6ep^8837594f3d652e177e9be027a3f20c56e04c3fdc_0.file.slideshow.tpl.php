<?php
/* Smarty version 3.1.39, created on 2022-07-19 22:00:41
  from '/home/dosingenierias/proyectos.dosingenierias.com/manager/themes/default/template/slideshow.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d761c977a2a5_21853146',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8837594f3d652e177e9be027a3f20c56e04c3fdc' => 
    array (
      0 => '/home/dosingenierias/proyectos.dosingenierias.com/manager/themes/default/template/slideshow.tpl',
      1 => 1656623876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d761c977a2a5_21853146 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="slideshow">
	<div class=titrePage id=imageHeaderBar><div class="imageNumber"><?php echo $_smarty_tpl->tpl_vars['PHOTO']->value;?>
</div>
	  <div class="browsePath">
<?php if ((isset($_smarty_tpl->tpl_vars['U_SLIDESHOW_STOP']->value))) {?>
		[ <a href="<?php echo $_smarty_tpl->tpl_vars['U_SLIDESHOW_STOP']->value;?>
"><?php echo l10n('stop the slideshow');?>
</a> ]
<?php }?>
			<h2 class="showtitle"><?php echo $_smarty_tpl->tpl_vars['current']->value['TITLE'];?>
</h2>
	  </div>
	</div>

	<div id="imageToolBar">
	  
<?php $_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'get_extent' ][ 0 ], array( 'picture_nav_buttons.tpl','picture_nav_buttons' )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
	</div>

	<div id="content">
	<div id="theImage">
	  <?php echo $_smarty_tpl->tpl_vars['ELEMENT_CONTENT']->value;?>

<?php if ((isset($_smarty_tpl->tpl_vars['COMMENT_IMG']->value))) {?>
	  <p class="showlegend"><?php echo $_smarty_tpl->tpl_vars['COMMENT_IMG']->value;?>
</p>
<?php }?>
	</div>
	</div>
</div>
<?php }
}
