<?php
/* Smarty version 3.1.39, created on 2022-07-19 00:14:31
  from '/home/dosingenierias/proyectos.dosingenierias.com/manager/themes/default/template/menubar_categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d62fa72ead46_70224666',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4da0edfa1137ea558683f0127e1b390ec1780f5f' => 
    array (
      0 => '/home/dosingenierias/proyectos.dosingenierias.com/manager/themes/default/template/menubar_categories.tpl',
      1 => 1656623876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d62fa72ead46_70224666 (Smarty_Internal_Template $_smarty_tpl) {
?><dt>
<?php if ((isset($_smarty_tpl->tpl_vars['U_START_FILTER']->value))) {?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['U_START_FILTER']->value;?>
" class="pwg-state-default pwg-button menubarFilter" title="<?php echo l10n('display only recently posted photos');?>
" rel="nofollow"><span class="pwg-icon pwg-icon-filter"> </span></a>
<?php }
if ((isset($_smarty_tpl->tpl_vars['U_STOP_FILTER']->value))) {?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['U_STOP_FILTER']->value;?>
" class="pwg-state-default pwg-button menubarFilter" title="<?php echo l10n('return to the display of all photos');?>
"><span class="pwg-icon pwg-icon-filter-del"> </span></a>
<?php }?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['block']->value->data['U_CATEGORIES'];?>
"><?php echo l10n('Albums');?>
</a>
</dt>
<dd>
<?php $_smarty_tpl->_assignInScope('ref_level', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value->data['MENU_CATEGORIES'], 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
if ($_smarty_tpl->tpl_vars['cat']->value['LEVEL'] > $_smarty_tpl->tpl_vars['ref_level']->value) {?>
  <ul>
<?php } else { ?>
    </li>
    <?php echo str_repeat('</ul></li>',($_smarty_tpl->tpl_vars['ref_level']->value-$_smarty_tpl->tpl_vars['cat']->value['LEVEL']));?>

<?php }?>
    <li <?php if ($_smarty_tpl->tpl_vars['cat']->value['SELECTED']) {?>class="selected"<?php }?>>
      <a href="<?php echo $_smarty_tpl->tpl_vars['cat']->value['URL'];?>
" <?php if ($_smarty_tpl->tpl_vars['cat']->value['IS_UPPERCAT']) {?>rel="up"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['cat']->value['TITLE'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['NAME'];?>
</a>
<?php if ($_smarty_tpl->tpl_vars['cat']->value['count_images'] > 0) {?>
      <span class="<?php if ($_smarty_tpl->tpl_vars['cat']->value['nb_images'] > 0) {?>menuInfoCat<?php } else { ?>menuInfoCatByChild<?php }?> badge" title="<?php echo $_smarty_tpl->tpl_vars['cat']->value['TITLE'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['count_images'];?>
</span>
<?php }
if (!empty($_smarty_tpl->tpl_vars['cat']->value['icon_ts'])) {?>
      <span class=albSymbol title="<?php echo $_smarty_tpl->tpl_vars['cat']->value['icon_ts']['TITLE'];?>
"><?php if ($_smarty_tpl->tpl_vars['cat']->value['icon_ts']['IS_CHILD_DATE']) {?>✻<?php } else { ?>✽<?php }?></span>
<?php }?>
  <?php $_smarty_tpl->_assignInScope('ref_level', $_smarty_tpl->tpl_vars['cat']->value['LEVEL']);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo str_repeat('</li></ul>',$_smarty_tpl->tpl_vars['ref_level']->value);?>


	<p class="totalImages"><?php echo l10n_dec('%d photo','%d photos',$_smarty_tpl->tpl_vars['block']->value->data['NB_PICTURE']);?>
</p>
</dd>
<?php }
}
