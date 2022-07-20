<?php
/* Smarty version 3.1.39, created on 2022-07-19 21:36:47
  from '/home/dosingenierias/proyectos.dosingenierias.com/manager/themes/default/template/month_calendar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d75c2fb7db92_62503821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52bc36c6c4c598304dd4b4248320d0517efb010e' => 
    array (
      0 => '/home/dosingenierias/proyectos.dosingenierias.com/manager/themes/default/template/month_calendar.tpl',
      1 => 1656623876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d75c2fb7db92_62503821 (Smarty_Internal_Template $_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['chronology_navigation_bars']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['chronology_navigation_bars']->value, 'bar');
$_smarty_tpl->tpl_vars['bar']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bar']->value) {
$_smarty_tpl->tpl_vars['bar']->do_else = false;
?>
<div class="calendarBar">
<?php if ((isset($_smarty_tpl->tpl_vars['bar']->value['previous']))) {?>
		<div style="float:left;margin-right:5px">&laquo; <a href="<?php echo $_smarty_tpl->tpl_vars['bar']->value['previous']['URL'];?>
"><?php echo $_smarty_tpl->tpl_vars['bar']->value['previous']['LABEL'];?>
</a></div>
<?php }
if ((isset($_smarty_tpl->tpl_vars['bar']->value['next']))) {?>
		<div style="float:right;margin-left:5px"><a href="<?php echo $_smarty_tpl->tpl_vars['bar']->value['next']['URL'];?>
"><?php echo $_smarty_tpl->tpl_vars['bar']->value['next']['LABEL'];?>
</a> &raquo;</div>
<?php }
if (empty($_smarty_tpl->tpl_vars['bar']->value['items'])) {?>
		&nbsp;
<?php } else {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bar']->value['items'], 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
if (!(isset($_smarty_tpl->tpl_vars['item']->value['URL']))) {?>
		<span class="calItem"><?php echo $_smarty_tpl->tpl_vars['item']->value['LABEL'];?>
</span>
<?php } else { ?>
		<a class="calItem"<?php if ((isset($_smarty_tpl->tpl_vars['item']->value['NB_IMAGES']))) {?> title="<?php echo l10n_dec('%d photo','%d photos',$_smarty_tpl->tpl_vars['item']->value['NB_IMAGES']);?>
"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['item']->value['URL'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['LABEL'];?>
</a>
<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
</div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>

<?php if (!empty($_smarty_tpl->tpl_vars['chronology_calendar']->value['calendar_bars'])) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['chronology_calendar']->value['calendar_bars'], 'bar');
$_smarty_tpl->tpl_vars['bar']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bar']->value) {
$_smarty_tpl->tpl_vars['bar']->do_else = false;
?>
<div class="calendarCalBar">
	<span class="calCalHead"><a href="<?php echo $_smarty_tpl->tpl_vars['bar']->value['U_HEAD'];?>
"><?php echo $_smarty_tpl->tpl_vars['bar']->value['HEAD_LABEL'];?>
</a>  (<?php echo $_smarty_tpl->tpl_vars['bar']->value['NB_IMAGES'];?>
)</span><br>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bar']->value['items'], 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
	<span class="calCal<?php if (!(isset($_smarty_tpl->tpl_vars['item']->value['URL']))) {?>Empty<?php }?>">
<?php if ((isset($_smarty_tpl->tpl_vars['item']->value['URL']))) {?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['URL'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['LABEL'];?>
</a>
<?php } else { ?>
	<?php echo $_smarty_tpl->tpl_vars['item']->value['LABEL'];?>

<?php }?>
	<?php if ((isset($_smarty_tpl->tpl_vars['item']->value['NB_IMAGES']))) {?>(<?php echo $_smarty_tpl->tpl_vars['item']->value['NB_IMAGES'];?>
)<?php }?>
	</span>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['chronology_calendar']->value['month_view']))) {?>
<table class="calMonth">
 <thead>
 <tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['chronology_calendar']->value['month_view']['wday_labels'], 'wday');
$_smarty_tpl->tpl_vars['wday']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wday']->value) {
$_smarty_tpl->tpl_vars['wday']->do_else = false;
?>
	<th><?php echo $_smarty_tpl->tpl_vars['wday']->value;?>
</th>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
 </tr>
 </thead>
<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'block_html_style'))) {
throw new SmartyException('block tag \'html_style\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('html_style', array());
$_block_repeat=true;
echo $_block_plugin2->block_html_style(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
.calMonth TD, .calMonth .calImg{
	width:<?php echo $_smarty_tpl->tpl_vars['chronology_calendar']->value['month_view']['CELL_WIDTH'];?>
px;height:<?php echo $_smarty_tpl->tpl_vars['chronology_calendar']->value['month_view']['CELL_HEIGHT'];?>
px
}
<?php $_block_repeat=false;
echo $_block_plugin2->block_html_style(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['chronology_calendar']->value['month_view']['weeks'], 'week');
$_smarty_tpl->tpl_vars['week']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['week']->value) {
$_smarty_tpl->tpl_vars['week']->do_else = false;
?>
 <tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['week']->value, 'day');
$_smarty_tpl->tpl_vars['day']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['day']->value) {
$_smarty_tpl->tpl_vars['day']->do_else = false;
if (!empty($_smarty_tpl->tpl_vars['day']->value)) {
if ((isset($_smarty_tpl->tpl_vars['day']->value['IMAGE']))) {?>
 			<td class="calDayCellFull">
	 			<div class="calBackDate"><?php echo $_smarty_tpl->tpl_vars['day']->value['DAY'];?>
</div><div class="calForeDate"><?php echo $_smarty_tpl->tpl_vars['day']->value['DAY'];?>
</div>
	 			<div class="calImg">
					<a href="<?php echo $_smarty_tpl->tpl_vars['day']->value['U_IMG_LINK'];?>
">
 						<img src="<?php echo $_smarty_tpl->tpl_vars['day']->value['IMAGE'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['day']->value['IMAGE_ALT'];?>
" title="<?php echo l10n_dec('%d photo','%d photos',$_smarty_tpl->tpl_vars['day']->value['NB_ELEMENTS']);?>
">
					</a>
				</div>
<?php } else { ?>
 			<td class="calDayCellEmpty"><?php echo $_smarty_tpl->tpl_vars['day']->value['DAY'];?>

<?php }?>
 	<?php } else { ?> 		<td>
<?php }?>
 	</td>
 	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> </tr>
 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></table>
<?php }?>

<?php }
}
