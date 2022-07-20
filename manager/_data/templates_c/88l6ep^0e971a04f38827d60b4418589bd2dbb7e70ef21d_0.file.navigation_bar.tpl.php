<?php
/* Smarty version 3.1.39, created on 2022-07-19 22:00:22
  from '/home/dosingenierias/proyectos.dosingenierias.com/manager/themes/default/template/navigation_bar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d761b634f067_40894646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e971a04f38827d60b4418589bd2dbb7e70ef21d' => 
    array (
      0 => '/home/dosingenierias/proyectos.dosingenierias.com/manager/themes/default/template/navigation_bar.tpl',
      1 => 1656623876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d761b634f067_40894646 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="navigationBar">
<?php if ((isset($_smarty_tpl->tpl_vars['navbar']->value['URL_FIRST']))) {?>
  <span class="navFirstLast"><a href="<?php echo $_smarty_tpl->tpl_vars['navbar']->value['URL_FIRST'];?>
" rel="first"><?php echo l10n('First');?>
</a> |</span>
  <span class="navPrevNext"><a href="<?php echo $_smarty_tpl->tpl_vars['navbar']->value['URL_PREV'];?>
" rel="prev"><?php echo l10n('Previous');?>
</a> |</span>
<?php } else { ?>
  <span class="navFirstLast"><?php echo l10n('First');?>
 |</span>
  <span class="navPrevNext"><?php echo l10n('Previous');?>
 |</span>
<?php }?>
  <?php $_smarty_tpl->_assignInScope('prev_page', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navbar']->value['pages'], 'url', false, 'page');
$_smarty_tpl->tpl_vars['url']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value => $_smarty_tpl->tpl_vars['url']->value) {
$_smarty_tpl->tpl_vars['url']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['page']->value > $_smarty_tpl->tpl_vars['prev_page']->value+1) {?>...<?php }
if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['navbar']->value['CURRENT_PAGE']) {?>
    <span class="pageNumberSelected"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</span>
<?php } else { ?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a>
<?php }?>
    <?php $_smarty_tpl->_assignInScope('prev_page', $_smarty_tpl->tpl_vars['page']->value);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ((isset($_smarty_tpl->tpl_vars['navbar']->value['URL_NEXT']))) {?>
  <span class="navPrevNext">| <a href="<?php echo $_smarty_tpl->tpl_vars['navbar']->value['URL_NEXT'];?>
" rel="next"><?php echo l10n('Next');?>
</a></span>
  <span class="navFirstLast">| <a href="<?php echo $_smarty_tpl->tpl_vars['navbar']->value['URL_LAST'];?>
" rel="last"><?php echo l10n('Last');?>
</a></span>
<?php } else { ?>
  <span class="navPrevNext">| <?php echo l10n('Next');?>
</span>
  <span class="navFirstLast">| <?php echo l10n('Last');?>
</span>
<?php }?>
</div>
<?php }
}
