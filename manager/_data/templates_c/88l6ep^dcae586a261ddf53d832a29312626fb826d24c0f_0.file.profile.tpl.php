<?php
/* Smarty version 3.1.39, created on 2022-07-19 21:43:17
  from '/home/dosingenierias/proyectos.dosingenierias.com/manager/themes/default/template/profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d75db563c431_24325908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcae586a261ddf53d832a29312626fb826d24c0f' => 
    array (
      0 => '/home/dosingenierias/proyectos.dosingenierias.com/manager/themes/default/template/profile.tpl',
      1 => 1656623876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:infos_errors.tpl' => 1,
  ),
),false)) {
function content_62d75db563c431_24325908 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['MENUBAR']->value))) {
echo $_smarty_tpl->tpl_vars['MENUBAR']->value;
}?>
<div id="content" class="content<?php if ((isset($_smarty_tpl->tpl_vars['MENUBAR']->value))) {?> contentWithMenu<?php }?>">

<div class="titrePage">
	<ul class="categoryActions">
	</ul>
	<h2><a href="<?php echo $_smarty_tpl->tpl_vars['U_HOME']->value;?>
"><?php echo l10n('Home');?>
</a><?php echo $_smarty_tpl->tpl_vars['LEVEL_SEPARATOR']->value;
echo l10n('Profile');?>
</h2>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:infos_errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['PROFILE_CONTENT']->value;?>

</div> <!-- content -->
<?php }
}
