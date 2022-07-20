<?php
/* Smarty version 3.1.39, created on 2022-07-19 12:59:00
  from '/home/dosingenierias/proyectos.dosingenierias.com/manager/themes/modus/template/thumbnails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d6e2d45452f2_31321548',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77aef04b2d52f43fd4b2a646534219c9570107d8' => 
    array (
      0 => '/home/dosingenierias/proyectos.dosingenierias.com/manager/themes/modus/template/thumbnails.tpl',
      1 => 1656689242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d6e2d45452f2_31321548 (Smarty_Internal_Template $_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['thumbnails']->value)) {
if ($_smarty_tpl->tpl_vars['derivative_params']->value->max_width()/$_smarty_tpl->tpl_vars['derivative_params']->value->max_height() > 1.5 || ($_smarty_tpl->tpl_vars['derivative_params']->value->max_height() < 400 && !$_smarty_tpl->tpl_vars['derivative_params']->value->sizing->max_crop)) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['modus_thumbs'][0], array( array(),$_smarty_tpl ) );
} else {
if ((defined('IMG_SQUARE') ? constant('IMG_SQUARE') : null) == $_smarty_tpl->tpl_vars['derivative_params']->value->type) {
$_smarty_tpl->_assignInScope('SHOW_THUMBNAIL_CAPTION', false);
}
$_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_html_style'))) {
throw new SmartyException('block tag \'html_style\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('html_style', array());
$_block_repeat=true;
echo $_block_plugin1->block_html_style(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>.thumbnails SPAN,.thumbnails .wrap2 A{width:<?php echo $_smarty_tpl->tpl_vars['derivative_params']->value->max_width()+2;?>
px}.thumbnails .wrap2{height:<?php echo $_smarty_tpl->tpl_vars['derivative_params']->value->max_height()+3;?>
px}@media <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssResolution'][0], array( array('min'=>1.3,'max'=>1.7),$_smarty_tpl ) );?>
{.thumbnails SPAN,.thumbnails .wrap2 A{width:<?php echo intval(($_smarty_tpl->tpl_vars['derivative_params']->value->max_width()/1.5+2));?>
px}.thumbnails .wrap2{height:<?php echo intval(($_smarty_tpl->tpl_vars['derivative_params']->value->max_height()/1.5+3));?>
px}.thumbnails .wrap2 IMG{max-width:<?php echo intval(($_smarty_tpl->tpl_vars['derivative_params']->value->max_width()/1.5));?>
px;max-height:<?php echo intval(($_smarty_tpl->tpl_vars['derivative_params']->value->max_height()/1.5));?>
px;}}@media <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssResolution'][0], array( array('min'=>1.7,'max'=>2.5),$_smarty_tpl ) );?>
{.thumbnails SPAN,.thumbnails .wrap2 A{width:<?php echo intval(($_smarty_tpl->tpl_vars['derivative_params']->value->max_width()/2+2));?>
px}.thumbnails .wrap2{height:<?php echo intval(($_smarty_tpl->tpl_vars['derivative_params']->value->max_height()/2+3));?>
px}.thumbnails .wrap2 IMG{max-width:<?php echo intval(($_smarty_tpl->tpl_vars['derivative_params']->value->max_width()/2));?>
px;max-height:<?php echo intval(($_smarty_tpl->tpl_vars['derivative_params']->value->max_height()/2));?>
px;}}@media <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssResolution'][0], array( array('min'=>2.5),$_smarty_tpl ) );?>
{.thumbnails SPAN,.thumbnails .wrap2 A{width:<?php echo intval(($_smarty_tpl->tpl_vars['derivative_params']->value->max_width()/3+2));?>
px}.thumbnails .wrap2{height:<?php echo intval(($_smarty_tpl->tpl_vars['derivative_params']->value->max_height()/3+3));?>
px}.thumbnails .wrap2 IMG{max-width:<?php echo intval(($_smarty_tpl->tpl_vars['derivative_params']->value->max_width()/3));?>
px;max-height:<?php echo intval(($_smarty_tpl->tpl_vars['derivative_params']->value->max_height()/3));?>
px;}}@media<?php $_smarty_tpl->_assignInScope('maxw', intval((2+2*($_smarty_tpl->tpl_vars['derivative_params']->value->max_width()+1+7))));
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssResolution'][0], array( array('base'=>(('(max-width:').($_smarty_tpl->tpl_vars['maxw']->value)).('px)'),'max'=>1),$_smarty_tpl ) );?>
,<?php $_smarty_tpl->_assignInScope('maxw', intval((2+2*($_smarty_tpl->tpl_vars['derivative_params']->value->max_width()/1.5+1+7))));
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssResolution'][0], array( array('base'=>(('(max-width:').($_smarty_tpl->tpl_vars['maxw']->value)).('px)'),'min'=>1.3,'max'=>1.7),$_smarty_tpl ) );?>
,<?php $_smarty_tpl->_assignInScope('maxw', intval((2+2*($_smarty_tpl->tpl_vars['derivative_params']->value->max_width()/2+1+7))));
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssResolution'][0], array( array('base'=>(('(max-width:').($_smarty_tpl->tpl_vars['maxw']->value)).('px)'),'min'=>1.7,'max'=>2.5),$_smarty_tpl ) );?>
,<?php $_smarty_tpl->_assignInScope('maxw', intval((2+2*($_smarty_tpl->tpl_vars['derivative_params']->value->max_width()/3+1+7))));
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssResolution'][0], array( array('base'=>(('(max-width:').($_smarty_tpl->tpl_vars['maxw']->value)).('px)'),'min'=>2.5),$_smarty_tpl ) );?>
{.thumbnails .wrap2{height:auto;border:0}.thumbnails .thumbLegend{height:auto;min-height:4em;overflow:visible;}}@media<?php $_smarty_tpl->_assignInScope('maxw', intval((2+($_smarty_tpl->tpl_vars['derivative_params']->value->max_width()+1+7))));
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssResolution'][0], array( array('base'=>(('(max-width:').($_smarty_tpl->tpl_vars['maxw']->value)).('px)'),'max'=>1),$_smarty_tpl ) );?>
,<?php $_smarty_tpl->_assignInScope('maxw', intval((2+($_smarty_tpl->tpl_vars['derivative_params']->value->max_width()/1.5+1+7))));
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssResolution'][0], array( array('base'=>(('(max-width:').($_smarty_tpl->tpl_vars['maxw']->value)).('px)'),'min'=>1.3,'max'=>1.7),$_smarty_tpl ) );?>
,<?php $_smarty_tpl->_assignInScope('maxw', intval((2+($_smarty_tpl->tpl_vars['derivative_params']->value->max_width()/2+1+7))));
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssResolution'][0], array( array('base'=>(('(max-width:').($_smarty_tpl->tpl_vars['maxw']->value)).('px)'),'min'=>1.7,'max'=>2.5),$_smarty_tpl ) );?>
,<?php $_smarty_tpl->_assignInScope('maxw', intval((2+($_smarty_tpl->tpl_vars['derivative_params']->value->max_width()/3+1+7))));
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssResolution'][0], array( array('base'=>(('(max-width:').($_smarty_tpl->tpl_vars['maxw']->value)).('px)'),'min'=>2.5),$_smarty_tpl ) );?>
{.thumbnails .wrap1{margin:0 0 5px}.thumbnails .wrap2{display:block}.thumbnails SPAN, .thumbnails .wrap2 A{max-width:99.8%}.thumbnails .wrap2 IMG{max-width:100%}}<?php if ($_smarty_tpl->tpl_vars['derivative_params']->value->max_width() > 400) {?>.thumbLegend {font-size: 110%}<?php } else { ?>.thumbLegend {font-size: 90%}<?php }
$_block_repeat=false;
echo $_block_plugin1->block_html_style(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['thumbnails']->value, 'thumbnail');
$_smarty_tpl->tpl_vars['thumbnail']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['thumbnail']->value) {
$_smarty_tpl->tpl_vars['thumbnail']->do_else = false;
?><li><span class="wrap1"><span class="wrap2"><a href="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['URL'];?>
"><?php $_smarty_tpl->_assignInScope('derivative', $_smarty_tpl->tpl_vars['pwg']->value->derivative($_smarty_tpl->tpl_vars['derivative_params']->value,$_smarty_tpl->tpl_vars['thumbnail']->value['src_image']));?><img src="<?php echo $_smarty_tpl->tpl_vars['derivative']->value->get_url();?>
" alt="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['TN_ALT'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['TN_TITLE'];?>
"></a></span><?php if ($_smarty_tpl->tpl_vars['SHOW_THUMBNAIL_CAPTION']->value) {?><div class="thumbLegend"><?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['NAME'];
if (!empty($_smarty_tpl->tpl_vars['thumbnail']->value['icon_ts'])) {?><span class=albSymbol title="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['icon_ts']['TITLE'];?>
">✽</span><?php }
if ((isset($_smarty_tpl->tpl_vars['thumbnail']->value['NB_COMMENTS']))) {?><span class="<?php if (0 == $_smarty_tpl->tpl_vars['thumbnail']->value['NB_COMMENTS']) {?>zero <?php }?>nb-comments"><br><?php echo l10n_dec('%d comment','%d comments',$_smarty_tpl->tpl_vars['thumbnail']->value['NB_COMMENTS']);?>
</span><?php }
if ((isset($_smarty_tpl->tpl_vars['thumbnail']->value['NB_HITS']))) {?><span class="<?php if (0 == $_smarty_tpl->tpl_vars['thumbnail']->value['NB_HITS']) {?>zero <?php }?>nb-hits"><br><?php echo l10n_dec('%d hit','%d hits',$_smarty_tpl->tpl_vars['thumbnail']->value['NB_HITS']);?>
</span><?php }?><span class="thumbDesc"><br><?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['DESCRIPTION'];?>
</span></div><?php }?></span></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
}
