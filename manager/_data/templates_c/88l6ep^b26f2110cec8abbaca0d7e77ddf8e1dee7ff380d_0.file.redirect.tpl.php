<?php
/* Smarty version 3.1.39, created on 2022-07-19 00:15:27
  from '/home/dosingenierias/proyectos.dosingenierias.com/manager/themes/default/template/redirect.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d62fdf39fe01_28862631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b26f2110cec8abbaca0d7e77ddf8e1dee7ff380d' => 
    array (
      0 => '/home/dosingenierias/proyectos.dosingenierias.com/manager/themes/default/template/redirect.tpl',
      1 => 1656623876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d62fdf39fe01_28862631 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="margin:2em;text-align:center;font-size:larger">
	<?php echo $_smarty_tpl->tpl_vars['REDIRECT_MSG']->value;?>

</div>

<p style="margin:2em;text-align:center">
	<a href="<?php echo $_smarty_tpl->tpl_vars['page_refresh']->value['U_REFRESH'];?>
">
		<?php echo l10n('Click here if your browser does not automatically forward you');?>

	</a>
</p>
<?php }
}
