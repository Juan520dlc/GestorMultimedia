<?php
/* Smarty version 3.1.39, created on 2022-07-19 00:45:53
  from '/home/dosingenierias/proyectos.dosingenierias.com/manager/themes/smartpocket/template/menubar_specials.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d6370185def9_83401365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9e705a0590c3b14de99e1dd7b94e417616a314c' => 
    array (
      0 => '/home/dosingenierias/proyectos.dosingenierias.com/manager/themes/smartpocket/template/menubar_specials.tpl',
      1 => 1656623894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d6370185def9_83401365 (Smarty_Internal_Template $_smarty_tpl) {
?><h3><?php echo l10n('Specials');?>
</h3>
<ul data-role="listview">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value->data, 'link', false, 'key');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
if (in_array($_smarty_tpl->tpl_vars['key']->value,array("favorites","most_visited","best_rated","recent_pics","recent_cats","random"))) {?>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['URL'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['link']->value['TITLE'];?>
"<?php if ((isset($_smarty_tpl->tpl_vars['link']->value['REL']))) {?> <?php echo $_smarty_tpl->tpl_vars['link']->value['REL'];
}?>><?php echo $_smarty_tpl->tpl_vars['link']->value['NAME'];?>
</a></li>
<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php }
}
