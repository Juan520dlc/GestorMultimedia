<?php
/* Smarty version 3.1.39, created on 2022-07-19 21:36:47
  from '/home/dosingenierias/proyectos.dosingenierias.com/manager/themes/modus/template/month_calendar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d75c2fb5f205_27679300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '304a065580f6887ab294dfc0dc58a0ab28ec32f6' => 
    array (
      0 => '/home/dosingenierias/proyectos.dosingenierias.com/manager/themes/modus/template/month_calendar.tpl',
      1 => 1656689242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../default/template/month_calendar.tpl' => 1,
  ),
),false)) {
function content_62d75c2fb5f205_27679300 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:../../default/template/month_calendar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ((isset($_smarty_tpl->tpl_vars['chronology_calendar']->value['month_view']))) {
$_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_html_style'))) {
throw new SmartyException('block tag \'html_style\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('html_style', array());
$_block_repeat=true;
echo $_block_plugin1->block_html_style(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
.calMonth TH{
	max-width:<?php echo $_smarty_tpl->tpl_vars['chronology_calendar']->value['month_view']['CELL_WIDTH'];?>
px;
	overflow:hidden;
	text-overflow:ellipsis
}
.calImg IMG{
	max-height:100%;
	width:auto
}

<?php $_smarty_tpl->_assignInScope('crt_width', $_smarty_tpl->tpl_vars['chronology_calendar']->value['month_view']['CELL_WIDTH']);?>
@media (max-width:<?php echo 7*($_smarty_tpl->tpl_vars['crt_width']->value+3);?>
px){
<?php $_smarty_tpl->_assignInScope('crt_width', intval(($_smarty_tpl->tpl_vars['crt_width']->value/1.5)));?>
	.calMonth TH{
		max-width:<?php echo $_smarty_tpl->tpl_vars['crt_width']->value;?>
px
	}
	.calMonth TD,.calMonth .calImg{
		width:<?php echo $_smarty_tpl->tpl_vars['crt_width']->value;?>
px;
		height:<?php echo $_smarty_tpl->tpl_vars['crt_width']->value;?>
px
	}
}

@media (max-width:<?php echo 7*($_smarty_tpl->tpl_vars['crt_width']->value+3);?>
px){
<?php $_smarty_tpl->_assignInScope('crt_width', intval(($_smarty_tpl->tpl_vars['chronology_calendar']->value['month_view']['CELL_WIDTH']/2)));?>
	.calMonth TH{
		max-width:<?php echo $_smarty_tpl->tpl_vars['crt_width']->value;?>
px
	}
	.calMonth TD,.calMonth .calImg{
		font-size:16px;
		width:<?php echo $_smarty_tpl->tpl_vars['crt_width']->value;?>
px;
		height:<?php echo $_smarty_tpl->tpl_vars['crt_width']->value;?>
px
	}
}

<?php if (7*($_smarty_tpl->tpl_vars['crt_width']->value+3) > 320) {?>
@media (max-width:360px){
<?php $_smarty_tpl->_assignInScope('crt_width', intval((320/7-1)));?>
	.calMonth TH{
		max-width:<?php echo $_smarty_tpl->tpl_vars['crt_width']->value-2;?>
px
	}
	.calMonth TD,.calMonth .calImg{
		font-size:12px;
		padding:0;
		width:<?php echo $_smarty_tpl->tpl_vars['crt_width']->value;?>
px;
		height:<?php echo $_smarty_tpl->tpl_vars['crt_width']->value;?>
px
	}
}
<?php }
$_block_repeat=false;
echo $_block_plugin1->block_html_style(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
