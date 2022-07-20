<?php
/* Smarty version 3.1.39, created on 2022-07-19 15:45:47
  from '/home/dosingenierias/proyectos.dosingenierias.com/manager/themes/smartpocket/template/thumbnails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d709eb74bdd7_31023840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96356c695d62962bf32562c74917700ce83af5f7' => 
    array (
      0 => '/home/dosingenierias/proyectos.dosingenierias.com/manager/themes/smartpocket/template/thumbnails.tpl',
      1 => 1656623894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d709eb74bdd7_31023840 (Smarty_Internal_Template $_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['thumbnails']->value)) {
$_smarty_tpl->_assignInScope('row_height', 216);
$_smarty_tpl->_assignInScope('hmargin', 4);
$_smarty_tpl->_assignInScope('vmargin', 5);
$_smarty_tpl->_assignInScope('container_margin', -10);?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'klass','path'=>'themes/smartpocket/js/klass.min.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'photoswipe','path'=>'themes/smartpocket/js/code.photoswipe.jquery.min.js','require'=>'klass,jquery.mobile'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'smartpocket','path'=>'themes/smartpocket/js/smartpocket.js','require'=>'photoswipe'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'sp.thumb.arrange','path'=>'themes/smartpocket/js/thumb.arrange.js','require'=>'jquery','load'=>'footer'),$_smarty_tpl ) );?>

<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin1->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
var var_loop = <?php if ($_smarty_tpl->tpl_vars['smartpocket']->value['loop']) {?>true<?php } else { ?>false<?php }?>, var_autohide = <?php echo $_smarty_tpl->tpl_vars['smartpocket']->value['autohide'];?>
, var_trad = "<?php echo l10n('More Information');?>
";
var SPThumbsOpts ={ hMargin:<?php echo $_smarty_tpl->tpl_vars['hmargin']->value;?>
,rowHeight:<?php echo $_smarty_tpl->tpl_vars['row_height']->value;?>
};
<?php $_block_repeat=false;
echo $_block_plugin1->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
echo $_smarty_tpl->tpl_vars['thumb_picker']->value->init($_smarty_tpl->tpl_vars['row_height']->value);?>

<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'block_html_style'))) {
throw new SmartyException('block tag \'html_style\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('html_style', array());
$_block_repeat=true;
echo $_block_plugin2->block_html_style(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
.thumbnails .liEmpty{ display:none}
.thumbnails LI{ margin-left:<?php echo $_smarty_tpl->tpl_vars['hmargin']->value;?>
px; margin-bottom:<?php echo $_smarty_tpl->tpl_vars['vmargin']->value;?>
px}
.thumbnails { margin:0 <?php echo $_smarty_tpl->tpl_vars['container_margin']->value;?>
px 0 <?php echo $_smarty_tpl->tpl_vars['container_margin']->value-$_smarty_tpl->tpl_vars['hmargin']->value;?>
px}
<?php $_block_repeat=false;
echo $_block_plugin2->block_html_style(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
<ul class="thumbnails"<?php if (!empty($_smarty_tpl->tpl_vars['smartpocket_log_history']->value['cat_id'])) {?>data-cat_id="<?php echo $_smarty_tpl->tpl_vars['smartpocket_log_history']->value['cat_id'];?>
"<?php }
if (!empty($_smarty_tpl->tpl_vars['smartpocket_log_history']->value['section'])) {?>data-section="<?php echo $_smarty_tpl->tpl_vars['smartpocket_log_history']->value['section'];?>
"<?php }
if (!empty($_smarty_tpl->tpl_vars['smartpocket_log_history']->value['tags_string'])) {?>data-tags_string="<?php echo $_smarty_tpl->tpl_vars['smartpocket_log_history']->value['tags_string'];?>
"<?php }?>>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['thumbnails']->value, 'thumbnail');
$_smarty_tpl->tpl_vars['thumbnail']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['thumbnail']->value) {
$_smarty_tpl->tpl_vars['thumbnail']->do_else = false;
$_smarty_tpl->_assignInScope('derivative', $_smarty_tpl->tpl_vars['thumb_picker']->value->pick($_smarty_tpl->tpl_vars['thumbnail']->value['src_image']));
if ((isset($_smarty_tpl->tpl_vars['page_selection']->value[$_smarty_tpl->tpl_vars['thumbnail']->value['id']]))) {?><li class="liVisible"><?php if (!(isset($_smarty_tpl->tpl_vars['thumbnail']->value['representative_ext']))) {?><a href="<?php echo $_smarty_tpl->tpl_vars['pwg']->value->derivative_url($_smarty_tpl->tpl_vars['picture_derivative_params']->value,$_smarty_tpl->tpl_vars['thumbnail']->value['src_image']);?>
" data-picture-url="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['URL'];?>
" data-image-id="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['id'];?>
" rel="external"><?php } else { ?><a href="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['URL'];?>
" target="_blank" onClick="window.location='<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['URL'];?>
'"><?php }?><img src="<?php echo $_smarty_tpl->tpl_vars['derivative']->value->get_url();?>
" <?php echo $_smarty_tpl->tpl_vars['derivative']->value->get_size_htm();?>
 alt="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['TN_ALT'];?>
"><?php } else { ?><li class="liEmpty"><a href="<?php echo $_smarty_tpl->tpl_vars['pwg']->value->derivative_url($_smarty_tpl->tpl_vars['picture_derivative_params']->value,$_smarty_tpl->tpl_vars['thumbnail']->value['src_image']);?>
" rel="external"><?php }?></a></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php }
}
}
