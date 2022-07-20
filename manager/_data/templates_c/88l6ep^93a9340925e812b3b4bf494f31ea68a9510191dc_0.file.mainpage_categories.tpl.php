<?php
/* Smarty version 3.1.39, created on 2022-07-19 12:58:56
  from '/home/dosingenierias/proyectos.dosingenierias.com/manager/themes/modus/template/mainpage_categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d6e2d0e40f51_72479840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93a9340925e812b3b4bf494f31ea68a9510191dc' => 
    array (
      0 => '/home/dosingenierias/proyectos.dosingenierias.com/manager/themes/modus/template/mainpage_categories.tpl',
      1 => 1656689242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d6e2d0e40f51_72479840 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/dosingenierias/proyectos.dosingenierias.com/manager/include/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
if (!empty($_smarty_tpl->tpl_vars['album_thumb_size']->value)) {?><ul class="albThumbs" id="rv-at">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category_thumbnails']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['URL'];?>
"><img class=albImg<?php echo $_smarty_tpl->tpl_vars['item']->value['MODUS_STYLE'];?>
 src="<?php echo $_smarty_tpl->tpl_vars['item']->value['modus_deriv']->get_url();?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['TN_ALT'];?>
"><div class=albLegend><h4><?php echo $_smarty_tpl->tpl_vars['item']->value['NAME'];?>
</h4><?php if (!empty($_smarty_tpl->tpl_vars['item']->value['icon_ts'])) {?><div class=albLegendRight><span class=albSymbol title="<?php if ($_smarty_tpl->tpl_vars['item']->value['icon_ts']['IS_CHILD_DATE']) {
echo l10n('Recent albums');?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['icon_ts']['TITLE'];?>
">✻<?php } else {
echo l10n('Recent photos');?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['icon_ts']['TITLE'];?>
">✽<?php }?></span></div><?php }?><div><?php if ($_smarty_tpl->tpl_vars['item']->value['nb_images']) {
echo l10n_dec('%d photo','%d photos',$_smarty_tpl->tpl_vars['item']->value['nb_images']);
if ($_smarty_tpl->tpl_vars['item']->value['nb_categories']) {?>, <?php }
}
if ($_smarty_tpl->tpl_vars['item']->value['nb_categories']) {?><span title="<?php echo l10n_dec('%d photo','%d photos',$_smarty_tpl->tpl_vars['item']->value['count_images']);?>
 <?php echo l10n_dec('in %d sub-album','in %d sub-albums',$_smarty_tpl->tpl_vars['item']->value['count_categories']);?>
"><?php echo l10n_dec('%d album','%d albums',$_smarty_tpl->tpl_vars['item']->value['nb_categories']);?>
</span><?php }?></div></div></a></li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php } else {
$_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_html_style'))) {
throw new SmartyException('block tag \'html_style\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('html_style', array());
$_block_repeat=true;
echo $_block_plugin1->block_html_style(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>.thumbnailCategory .illustration{width:<?php echo $_smarty_tpl->tpl_vars['derivative_params']->value->max_width()+5;?>
px;}.content .thumbnailCategory .description{height:<?php echo $_smarty_tpl->tpl_vars['derivative_params']->value->max_height()+5;?>
px;}@media <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssResolution'][0], array( array('min'=>1.3),$_smarty_tpl ) );?>
{.thumbnailCategory .illustration{width:<?php echo intval(($_smarty_tpl->tpl_vars['derivative_params']->value->max_width()/2+5));?>
px;}.content .thumbnailCategory .description{height:<?php echo intval(($_smarty_tpl->tpl_vars['derivative_params']->value->max_height()/2+5));?>
px;}.illustration IMG{max-width:<?php echo intval(($_smarty_tpl->tpl_vars['derivative_params']->value->max_width()/2));?>
px;max-height:<?php echo intval(($_smarty_tpl->tpl_vars['derivative_params']->value->max_height()/2));?>
px;}}@media (max-width: <?php echo intval((2+2*($_smarty_tpl->tpl_vars['derivative_params']->value->max_width()+1+120)));?>
px),<?php ob_start();
echo intval((2+2*($_smarty_tpl->tpl_vars['derivative_params']->value->max_width()/2+1+120)));
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('maxw', $_prefixVariable1);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssResolution'][0], array( array('base'=>(('(max-width:').($_smarty_tpl->tpl_vars['maxw']->value)).('px)'),'min'=>1.3),$_smarty_tpl ) );?>
 {.thumbnailCategories LI{width:99%}}<?php $_block_repeat=false;
echo $_block_plugin1->block_html_style(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
<ul class="thumbnailCategories">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category_thumbnails']->value, 'cat', false, NULL, 'cat_loop', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_cat_loop']->value['index']++;
$_smarty_tpl->_assignInScope('derivative', $_smarty_tpl->tpl_vars['pwg']->value->derivative($_smarty_tpl->tpl_vars['derivative_params']->value,$_smarty_tpl->tpl_vars['cat']->value['representative']['src_image']));?>
  <li class="<?php if ((1 & (isset($_smarty_tpl->tpl_vars['__smarty_foreach_cat_loop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_cat_loop']->value['index'] : null))) {?>odd<?php } else { ?>even<?php }?>">
		<div class="thumbnailCategory">
			<div class="illustration">
			<a href="<?php echo $_smarty_tpl->tpl_vars['cat']->value['URL'];?>
">
				<img src="<?php echo $_smarty_tpl->tpl_vars['derivative']->value->get_url();?>
" alt="<?php echo $_smarty_tpl->tpl_vars['cat']->value['TN_ALT'];?>
" title="<?php echo strip_tags(smarty_modifier_replace($_smarty_tpl->tpl_vars['cat']->value['NAME'],'"',' '));?>
 - <?php echo l10n('display this album');?>
">
			</a>
			</div>
			<div class="description">
				<h3>
					<a href="<?php echo $_smarty_tpl->tpl_vars['cat']->value['URL'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['NAME'];?>
</a>
<?php if (!empty($_smarty_tpl->tpl_vars['cat']->value['icon_ts'])) {?>
					<span class=albSymbol title="<?php echo $_smarty_tpl->tpl_vars['cat']->value['icon_ts']['TITLE'];?>
"><?php if ($_smarty_tpl->tpl_vars['cat']->value['icon_ts']['IS_CHILD_DATE']) {?>✻<?php } else { ?>✽<?php }?></span>
<?php }?>
				</h3>
		<div class="text">
<?php if ((isset($_smarty_tpl->tpl_vars['cat']->value['INFO_DATES']))) {?>
				<div class="dates"><?php echo $_smarty_tpl->tpl_vars['cat']->value['INFO_DATES'];?>
</div>
<?php }?>
				<div class="Nb_images"><?php echo $_smarty_tpl->tpl_vars['cat']->value['CAPTION_NB_IMAGES'];?>
</div>
<?php if (!empty($_smarty_tpl->tpl_vars['cat']->value['DESCRIPTION'])) {?>
				<div><?php echo $_smarty_tpl->tpl_vars['cat']->value['DESCRIPTION'];?>
</div>
<?php }?>
		</div>
			</div>
		</div>
	</li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php }
}
}
