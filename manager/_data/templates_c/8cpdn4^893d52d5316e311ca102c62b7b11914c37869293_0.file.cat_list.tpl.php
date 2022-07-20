<?php
/* Smarty version 3.1.39, created on 2022-07-19 21:57:58
  from '/home/dosingenierias/proyectos.dosingenierias.com/manager/admin/themes/default/template/cat_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d76126111841_22248156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '893d52d5316e311ca102c62b7b11914c37869293' => 
    array (
      0 => '/home/dosingenierias/proyectos.dosingenierias.com/manager/admin/themes/default/template/cat_list.tpl',
      1 => 1656623876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d76126111841_22248156 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'common','load'=>'footer','path'=>'admin/themes/default/js/common.js'),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'alternativeView','load'=>'footer','path'=>'admin/themes/default/js/cat_list.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.cookie','path'=>'themes/default/js/jquery.cookie.js','load'=>'footer'),$_smarty_tpl ) );?>


<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>'jquery.ui.sortable'));
$_block_repeat=true;
echo $_block_plugin1->block_footer_script(array('require'=>'jquery.ui.sortable'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
jQuery(document).ready(function(){
  $(".addAlbumHead").click(function () {
    $(".addAlbum input[name=virtual_name]").focus();
  })
});
<?php $_block_repeat=false;
echo $_block_plugin1->block_footer_script(array('require'=>'jquery.ui.sortable'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<div class="selectedAlbum cat-list-album-path">
  <span class="icon-sitemap selectedAlbum-first"><?php echo $_smarty_tpl->tpl_vars['CATEGORIES_NAV']->value;?>
</span>
  <div class="AlbumViewSelector">
    <input type="radio" name="layout" class="switchLayout" id="displayCompact" <?php if ($_COOKIE['pwg_album_manager_view'] == 'compact') {?>checked<?php }?>/><label for="displayCompact"><span class="icon-th-large firstIcon tiptip" title="<?php echo l10n('Compact View');?>
"></span></label><input type="radio" name="layout" class="switchLayout tiptip" id="displayLine" <?php if ($_COOKIE['pwg_album_manager_view'] == 'line') {?>checked<?php }?>/><label for="displayLine"><span class="icon-th-list tiptip" title="<?php echo l10n('Line View');?>
"></span></label><input type="radio" name="layout" class="switchLayout" id="displayTile" <?php if ($_COOKIE['pwg_album_manager_view'] == 'tile' || !$_COOKIE['pwg_album_manager_view']) {?>checked<?php }?>/><label for="displayTile"><span class="icon-pause lastIcon tiptip" title="<?php echo l10n('Tile View');?>
"></span></label>
  </div>
</div>
<?php $_smarty_tpl->_assignInScope('color_tab', array("icon-red","icon-blue","icon-yellow","icon-purple","icon-green"));?>
<div class="categoryContainer">
  <div class="addAlbum">
    <div class="addAlbumHead">
      <span class="icon-plus-circled icon-blue icon-blue-full"></span>
      <p><?php echo l10n("Add Album");?>

    </div>
    <form action="<?php echo $_smarty_tpl->tpl_vars['F_ACTION']->value;?>
" method="post">
      <input type="hidden" name="pwg_token" value="<?php echo $_smarty_tpl->tpl_vars['PWG_TOKEN']->value;?>
">
      <label for="virtual_name"><?php echo l10n("Album name");?>
</label>
      <input type="text" name="virtual_name" placeholder="<?php echo l10n("Album name");?>
">
      <button name="submitAdd" type="submit" class="buttonLike">
          <i class="icon-plus"></i> <?php echo l10n("Create");?>

        </button>
      <a class="cancelAddAlbum"><?php echo l10n("Cancel");?>
</a>
    </form>
  </div>
<?php if (count($_smarty_tpl->tpl_vars['categories']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
  <div class="categoryBox<?php if ($_smarty_tpl->tpl_vars['category']->value['IS_VIRTUAL']) {?> virtual_cat<?php }?>" id="cat_<?php echo $_smarty_tpl->tpl_vars['category']->value['ID'];?>
">

    <div class="albumTop">
      <div class="albumIcon">
        <span class="
        <?php if ($_smarty_tpl->tpl_vars['category']->value['NB_SUB_ALBUMS'] == 0) {?>icon-folder-open<?php } else { ?>icon-sitemap<?php }?>
        <?php echo $_smarty_tpl->tpl_vars['color_tab']->value[$_smarty_tpl->tpl_vars['category']->value['ID']%5];?>

        "> </span>
      </div>

      <div class="albumTitle">
        <?php echo $_smarty_tpl->tpl_vars['category']->value['NAME'];?>

      </div>
    </div>
    
    <span class="albumInfos"><p><?php echo l10n_dec('%d photo','%d photos',$_smarty_tpl->tpl_vars['category']->value['NB_PHOTOS']);?>
</p> <p><?php echo l10n_dec('%d photo','%d photos',$_smarty_tpl->tpl_vars['category']->value['NB_SUB_PHOTOS']);?>
 <?php echo l10n_dec('in %d sub-album','in %d sub-albums',$_smarty_tpl->tpl_vars['category']->value['NB_SUB_ALBUMS']);?>
</p></span>

    <div class="albumActions">
      <a href="<?php echo $_smarty_tpl->tpl_vars['category']->value['U_EDIT'];?>
" class="actionEdit" ><span class="icon-pencil tiptip" title="<?php echo l10n('Edit');?>
"></span><span class="iconLegend"><?php echo l10n('Edit');?>
</span></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['category']->value['U_CHILDREN'];?>
" class="actionTitle" ><span class="icon-sitemap tiptip" title="<?php echo l10n('sub-albums');?>
"></span><span class="iconLegend"><?php echo l10n('sub-albums');?>
</span></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['category']->value['U_MOVE'];?>
" class="actionMove"><span class="icon-move tiptip" title="<?php echo l10n('Move');?>
"></span><span class="iconLegend"><?php echo l10n('Move');?>
</span></a>
<?php if (cat_admin_access($_smarty_tpl->tpl_vars['category']->value['ID'])) {?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['category']->value['U_JUMPTO'];?>
" class="actionGalery" ><span class="icon-eye tiptip" title="<?php echo l10n('Visit Gallery');?>
"></span><span class="iconLegend"><?php echo l10n('Visit Gallery');?>
</span></a>
<?php } else { ?>
      <span href="<?php echo $_smarty_tpl->tpl_vars['category']->value['U_JUMPTO'];?>
" class="actionGalery" ><span class="icon-eye tiptip" title="<?php echo l10n('This album is private');?>
"></span><span class="iconLegend"><?php echo l10n('Visit Gallery');?>
</span></span>
<?php }?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['category']->value['U_ADD_PHOTOS_ALBUM'];?>
" class="actionAdd" ><span class="icon-plus tiptip" title="<?php echo l10n('Add Photos');?>
"></span><span class="iconLegend"><?php echo l10n('Add Photos');?>
</span></a>
    </div>
  </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
</div>

<style>


/*
 *  Switch btn between views
 */

 #tabsheet , .selectedAlbum{
   margin: 0 0 10px 0 !important;
 }

.selectedAlbum {
  display: flex;
  flex-direction: row;
  justify-content: space-between;

  padding: 0 34px 0 22px;

  align-items: baseline;
}

.selectedAlbum-first {
  margin-left: 0px;
}

.AlbumViewSelector {
  padding: 7px 0px;
  margin-right: 0px;
  border-radius: 10px;
}

.AlbumViewSelector span {
  border-radius: 0;
  padding: 7px;
}

.addAlbum button {
  white-space: nowrap;
}

/* Should be done with :first-child and :last-child but doesn't work */

.AlbumViewSelector label span.firstIcon{
  border-radius: 7px 0 0 7px;
}

.AlbumViewSelector label span.lastIcon{
  border-radius: 0 7px 7px 0;
}

.icon-th-large, .icon-th-list, .icon-pause {
  padding: 10px;
  font-size: 19px;

  transition: 0.3s;
}

.switchLayout {
  display: none;
}

.albumActions a span.iconLegend {
  font-size: 14px;
}

.categoryContainer {
  padding: 0 20px 0 20px;
}

/*
 *  Tiles display
 */

.tile_add.addAlbum form input::placeholder {
  color: transparent !important;
}

.albumTop {
  display: flex;
  flex-direction: row;

  padding: 0px 20px;
  height: 75px;

  align-items: baseline;
}

.categoryBox, .addAlbum{
  display: flex;
  flex-direction: column;
  flex-grow: 1;
}

.albumIcon span{
  font-size: 19px;
  width: 27px;
  padding: 10px;
  border-radius: 30px;
}

.albumInfos {
  color: #a9a9a9;

  display: flex;
  flex-direction: column;
  align-items: center;
}

.albumInfos p {
  margin: 0 20px;
  text-align: right;
}

.albumActions {
  display: flex;
  flex-direction: row;
  justify-content: space-between;

  margin-top: auto;

  width: 100%;
  margin-bottom: auto;
}

.albumActions a:first-child{
  margin-left: 35px;
}

.albumActions a:last-child {
  margin-right: 35px;
}

.addAlbum form {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.addAlbum form input {
  border: none;
  border-radius: 5px;

  margin: 0px 10px;

  max-width: 200px;
  width: 75%;
}

.addAlbum form button {
  margin-bottom: 0;
  height: 30px;
}

.addAlbumHead {
  padding: 0;
}

</style>
<?php }
}
