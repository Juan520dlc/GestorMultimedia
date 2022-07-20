<?php
/* Smarty version 3.1.39, created on 2022-07-19 21:59:25
  from '/home/dosingenierias/proyectos.dosingenierias.com/manager/admin/themes/default/template/include/add_album.inc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d7617db66aa2_03891042',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f8d8c862a0a66ccd0ed1f0e8f2a0248ad03de00' => 
    array (
      0 => '/home/dosingenierias/proyectos.dosingenierias.com/manager/admin/themes/default/template/include/add_album.inc.tpl',
      1 => 1656623876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/colorbox.inc.tpl' => 1,
  ),
),false)) {
function content_62d7617db66aa2_03891042 (Smarty_Internal_Template $_smarty_tpl) {
if (empty($_smarty_tpl->tpl_vars['load_mode']->value)) {
$_smarty_tpl->_assignInScope('load_mode', 'footer');
}
$_smarty_tpl->_subTemplateRender('file:include/colorbox.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('load_mode'=>$_smarty_tpl->tpl_vars['load_mode']->value), 0, false);
?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.selectize','load'=>'footer','path'=>'themes/default/js/plugins/selectize.min.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('id'=>'jquery.selectize','path'=>"themes/default/js/plugins/selectize.".((string)$_smarty_tpl->tpl_vars['themeconf']->value['colorscheme']).".css"),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"admin/themes/default/fontello/css/animation.css",'order'=>10),$_smarty_tpl ) );?>
 
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'addAlbum','load'=>$_smarty_tpl->tpl_vars['load_mode']->value,'path'=>'admin/themes/default/js/addAlbum.js'),$_smarty_tpl ) );?>


<div style="display:none">
  <div id="addAlbumForm">
    <form>
      <div class="popinField addAlbumFormParent">
        <span class="popinFieldLabel"><?php echo l10n('Parent album');?>
</span>
        <select name="category_parent"></select>
      </div>

      <div class="popinField">
        <span class="popinFieldLabel"><?php echo l10n('Album name');?>
</span>
        <input name="category_name" type="text" maxlength="255">
        <span id="categoryNameError" style="color:red;"><?php echo l10n('The name of an album must not be empty');?>
</span>
      </div>

      <div class="popinButtons">
        <input type="submit" value="<?php echo l10n('Create');?>
" class="albumCreationButton">
        <span id="albumCreationLoading"><span class="icon-spin6 animate-spin"></span></span>
      </div>
    </form>
  </div>
</div>
<?php }
}
