<?php
/* Smarty version 3.1.39, created on 2022-07-19 15:45:44
  from '/home/dosingenierias/proyectos.dosingenierias.com/manager/themes/smartpocket/template/mainpage_categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d709e81eb421_06961449',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8e24465ee111936f1d2737fc9667883288d9e5d' => 
    array (
      0 => '/home/dosingenierias/proyectos.dosingenierias.com/manager/themes/smartpocket/template/mainpage_categories.tpl',
      1 => 1656623894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d709e81eb421_06961449 (Smarty_Internal_Template $_smarty_tpl) {
?><ul data-role="listview" data-inset="true">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category_thumbnails']->value, 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
	<li>
		<a href="<?php echo $_smarty_tpl->tpl_vars['cat']->value['URL'];?>
">
		<img src="<?php echo $_smarty_tpl->tpl_vars['pwg']->value->derivative_url($_smarty_tpl->tpl_vars['thumbnail_derivative_params']->value,$_smarty_tpl->tpl_vars['cat']->value['representative']['src_image']);?>
">
    <h3><?php echo $_smarty_tpl->tpl_vars['cat']->value['NAME'];?>
</h3>
		<p class="Nb_images"><?php echo $_smarty_tpl->tpl_vars['cat']->value['CAPTION_NB_IMAGES'];?>
</p>
		</a>
  </li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<?php }
}
