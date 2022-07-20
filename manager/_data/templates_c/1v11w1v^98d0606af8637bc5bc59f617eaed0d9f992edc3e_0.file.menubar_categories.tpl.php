<?php
/* Smarty version 3.1.39, created on 2022-07-19 00:45:53
  from '/home/dosingenierias/proyectos.dosingenierias.com/manager/themes/smartpocket/template/menubar_categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d637018543a3_91492016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98d0606af8637bc5bc59f617eaed0d9f992edc3e' => 
    array (
      0 => '/home/dosingenierias/proyectos.dosingenierias.com/manager/themes/smartpocket/template/menubar_categories.tpl',
      1 => 1656623894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d637018543a3_91492016 (Smarty_Internal_Template $_smarty_tpl) {
?><h3><?php echo l10n('Albums');?>
</h3>
<ul data-role="listview">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value->data['MENU_CATEGORIES'], 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
  <li><a href="<?php echo $_smarty_tpl->tpl_vars['cat']->value['URL'];?>
" <?php if ($_smarty_tpl->tpl_vars['cat']->value['IS_UPPERCAT']) {?>rel="up"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['cat']->value['TITLE'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['NAME'];?>
</a>
  <?php if ($_smarty_tpl->tpl_vars['cat']->value['count_images'] > 0) {?><span class="ui-li-count"><?php echo $_smarty_tpl->tpl_vars['cat']->value['count_images'];?>
</span><?php }?>
  </li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php }
}
