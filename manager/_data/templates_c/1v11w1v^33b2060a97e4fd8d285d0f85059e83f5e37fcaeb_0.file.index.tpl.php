<?php
/* Smarty version 3.1.39, created on 2022-07-19 00:45:53
  from '/home/dosingenierias/proyectos.dosingenierias.com/manager/themes/smartpocket/template/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d63701887843_71099010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33b2060a97e4fd8d285d0f85059e83f5e37fcaeb' => 
    array (
      0 => '/home/dosingenierias/proyectos.dosingenierias.com/manager/themes/smartpocket/template/index.tpl',
      1 => 1656623894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d63701887843_71099010 (Smarty_Internal_Template $_smarty_tpl) {
?><div data-role="content">
<?php if (!empty($_smarty_tpl->tpl_vars['CATEGORIES']->value)) {
echo $_smarty_tpl->tpl_vars['CATEGORIES']->value;
}
if (!empty($_smarty_tpl->tpl_vars['THUMBNAILS']->value)) {
echo $_smarty_tpl->tpl_vars['THUMBNAILS']->value;
}
if (!empty($_smarty_tpl->tpl_vars['CONTENT_DESCRIPTION']->value)) {?>
<div class="additional_info">
	<?php echo $_smarty_tpl->tpl_vars['CONTENT_DESCRIPTION']->value;?>

</div>
<?php }
if (!empty($_smarty_tpl->tpl_vars['CONTENT']->value)) {
echo $_smarty_tpl->tpl_vars['CONTENT']->value;
}?>
</div>

<?php }
}
