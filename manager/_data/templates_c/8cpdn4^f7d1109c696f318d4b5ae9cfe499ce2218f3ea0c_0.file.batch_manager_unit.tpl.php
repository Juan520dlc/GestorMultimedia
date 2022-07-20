<?php
/* Smarty version 3.1.39, created on 2022-07-19 21:59:32
  from '/home/dosingenierias/proyectos.dosingenierias.com/manager/admin/themes/default/template/batch_manager_unit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d761847d1da8_79651003',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7d1109c696f318d4b5ae9cfe499ce2218f3ea0c' => 
    array (
      0 => '/home/dosingenierias/proyectos.dosingenierias.com/manager/admin/themes/default/template/batch_manager_unit.tpl',
      1 => 1656623876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/autosize.inc.tpl' => 1,
    'file:include/datepicker.inc.tpl' => 1,
    'file:include/colorbox.inc.tpl' => 1,
  ),
),false)) {
function content_62d761847d1da8_79651003 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/dosingenierias/proyectos.dosingenierias.com/manager/include/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),));
$_smarty_tpl->_subTemplateRender('file:include/autosize.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:include/datepicker.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:include/colorbox.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'LocalStorageCache','load'=>'footer','path'=>'admin/themes/default/js/LocalStorageCache.js'),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.selectize','load'=>'footer','path'=>'themes/default/js/plugins/selectize.min.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('id'=>'jquery.selectize','path'=>"themes/default/js/plugins/selectize.".((string)$_smarty_tpl->tpl_vars['themeconf']->value['colorscheme']).".css"),$_smarty_tpl ) );?>


<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin1->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
(function(){
var tagsCache = new TagsCache({
  serverKey: '<?php echo $_smarty_tpl->tpl_vars['CACHE_KEYS']->value['tags'];?>
',
  serverId: '<?php echo $_smarty_tpl->tpl_vars['CACHE_KEYS']->value['_hash'];?>
',
  rootUrl: '<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
'
});

tagsCache.selectize(jQuery('[data-selectize=tags]'), { lang: {
  'Add': '<?php echo l10n('Create');?>
'
}});

jQuery(function(){   jQuery('[data-datepicker]').pwgDatepicker({
    showTimepicker: true,
    cancelButton: '<?php echo l10n('Cancel');?>
'
  });
});

jQuery("a.preview-box").colorbox( {
	photo: true
});
}());
<?php $_block_repeat=false;
echo $_block_plugin1->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<h2><?php echo l10n('Batch Manager');?>
</h2>

<form action="<?php echo $_smarty_tpl->tpl_vars['F_ACTION']->value;?>
" method="POST">
  <div style="margin: 30px 0; display: flex; justify-content: space-between;">
    <div style="margin-left: 22px;">
      <?php if (!empty($_smarty_tpl->tpl_vars['navbar']->value)) {
$_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'get_extent' ][ 0 ], array( 'navigation_bar.tpl','navbar' )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>
    </div>
    <div style="margin-right: 21px;" class="pagination-per-page">
      <span style="font-weight: bold;color: unset;"><?php echo l10n('photos per page');?>
 :</span>
      <a href="<?php echo $_smarty_tpl->tpl_vars['U_ELEMENTS_PAGE']->value;?>
&amp;display=5">5</a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['U_ELEMENTS_PAGE']->value;?>
&amp;display=10">10</a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['U_ELEMENTS_PAGE']->value;?>
&amp;display=50">50</a>
    </div>
  </div>
  <div style="clear:both"></div>

<?php if (!empty($_smarty_tpl->tpl_vars['elements']->value)) {?>
<div><input type="hidden" name="element_ids" value="<?php echo $_smarty_tpl->tpl_vars['ELEMENT_IDS']->value;?>
"></div>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['elements']->value, 'element');
$_smarty_tpl->tpl_vars['element']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->do_else = false;
?>
<fieldset class="elementEdit">
  <legend><?php echo $_smarty_tpl->tpl_vars['element']->value['LEGEND'];?>
</legend>

  <span class="thumb">
    <a href="<?php echo $_smarty_tpl->tpl_vars['element']->value['FILE_SRC'];?>
" class="preview-box icon-zoom-in" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['LEGEND']);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['element']->value['TN_SRC'];?>
" alt=""></a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['element']->value['U_EDIT'];?>
" class="icon-pencil"><?php echo l10n('Edit');?>
</a>
  </span>

  <table>

    <tr>
      <td><strong><?php echo l10n('Title');?>
</strong></td>
      <td><input type="text" class="large" name="name-<?php echo $_smarty_tpl->tpl_vars['element']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['element']->value['NAME'];?>
"></td>
    </tr>

    <tr>
      <td><strong><?php echo l10n('Author');?>
</strong></td>
      <td><input type="text" class="large" name="author-<?php echo $_smarty_tpl->tpl_vars['element']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['element']->value['AUTHOR'];?>
"></td>
    </tr>

    <tr>
      <td><strong><?php echo l10n('Creation date');?>
</strong></td>
      <td>
        <input type="hidden" name="date_creation-<?php echo $_smarty_tpl->tpl_vars['element']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['element']->value['DATE_CREATION'];?>
">
        <label>
          <i class="icon-calendar"></i>
          <input type="text" data-datepicker="date_creation-<?php echo $_smarty_tpl->tpl_vars['element']->value['id'];?>
" data-datepicker-unset="date_creation_unset-<?php echo $_smarty_tpl->tpl_vars['element']->value['id'];?>
" readonly>
        </label>
        <a href="#" class="icon-cancel-circled" id="date_creation_unset-<?php echo $_smarty_tpl->tpl_vars['element']->value['id'];?>
"><?php echo l10n('unset');?>
</a>
      </td>
    </tr>
    <tr>
      <td><strong><?php echo l10n('Who can see this photo?');?>
</strong></td>
      <td>
        <select name="level-<?php echo $_smarty_tpl->tpl_vars['element']->value['id'];?>
">
          <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['level_options']->value,'selected'=>$_smarty_tpl->tpl_vars['element']->value['LEVEL']),$_smarty_tpl);?>

        </select>
      </td>
    </tr>

    <tr>
      <td><strong><?php echo l10n('Tags');?>
</strong></td>
      <td>
        <select data-selectize="tags" data-value="<?php echo htmlspecialchars(json_encode($_smarty_tpl->tpl_vars['element']->value['TAGS']), ENT_QUOTES, 'UTF-8', true);?>
"
          placeholder="<?php echo l10n('Type in a search term');?>
"
          data-create="true" name="tags-<?php echo $_smarty_tpl->tpl_vars['element']->value['id'];?>
[]" multiple style="width:500px;"></select>
      </td>
    </tr>

    <tr>
      <td><strong><?php echo l10n('Description');?>
</strong></td>
      <td><textarea cols="50" rows="5" name="description-<?php echo $_smarty_tpl->tpl_vars['element']->value['id'];?>
" id="description-<?php echo $_smarty_tpl->tpl_vars['element']->value['id'];?>
" class="description"><?php echo $_smarty_tpl->tpl_vars['element']->value['DESCRIPTION'];?>
</textarea></td>
    </tr>

  </table>

</fieldset>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php if (!empty($_smarty_tpl->tpl_vars['navbar']->value)) {
$_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'get_extent' ][ 0 ], array( 'navigation_bar.tpl','navbar' )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>

<p>
  <input type="submit" value="<?php echo l10n('Submit');?>
" name="submit">
  <input type="reset" value="<?php echo l10n('Reset');?>
">
</p>
<?php }?>

</form>

<style>
.selectize-input  .item,
.selectize-input .item.active {
  background-image:none !important;
  background-color: #ffa646 !important;
  border-color: transparent !important;
  color: black !important;

  border-radius: 20px !important;
}

.selectize-input .item .remove,
.selectize-input .item .remove {
  background-color: transparent !important;
  border-top-right-radius: 20px !important;
  border-bottom-right-radius: 20px !important;
  color: black !important;
  
  border-left: 1px solid transparent !important;

}
.selectize-input .item .remove:hover,
.selectize-input .item .remove:hover {
  background-color: #ff7700 !important;
}

.thumb {
  float: right;
}
</style><?php }
}
