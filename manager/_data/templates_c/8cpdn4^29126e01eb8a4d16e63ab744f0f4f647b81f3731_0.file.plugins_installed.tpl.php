<?php
/* Smarty version 3.1.39, created on 2022-07-19 21:59:07
  from '/home/dosingenierias/proyectos.dosingenierias.com/manager/admin/themes/default/template/plugins_installed.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d7616b3259d7_82740046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29126e01eb8a4d16e63ab744f0f4f647b81f3731' => 
    array (
      0 => '/home/dosingenierias/proyectos.dosingenierias.com/manager/admin/themes/default/template/plugins_installed.tpl',
      1 => 1656623876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d7616b3259d7_82740046 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/dosingenierias/proyectos.dosingenierias.com/manager/include/smarty/libs/plugins/function.counter.php','function'=>'smarty_function_counter',),));
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.ajaxmanager','load'=>'footer','require'=>'jquery','path'=>'themes/default/js/plugins/jquery.ajaxmanager.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'common','load'=>'footer','path'=>'admin/themes/default/js/common.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.cookie','path'=>'themes/default/js/jquery.cookie.js','load'=>'footer'),$_smarty_tpl ) );?>


<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>'jquery.ajaxmanager'));
$_block_repeat=true;
echo $_block_plugin1->block_footer_script(array('require'=>'jquery.ajaxmanager'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
/* incompatible message */
var incompatible_msg = '<?php echo strtr(l10n('WARNING! This plugin does not seem to be compatible with this version of Piwigo.'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';
var activate_msg = '\n<?php echo strtr(l10n('Do you want to activate anyway?'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';
var deactivate_all_msg = '<?php echo l10n('Deactivate all');?>
';

var showInactivePlugins = function() {
    jQuery(".showInactivePlugins").fadeOut(complete=function(){
          jQuery(".plugin-inactive").fadeIn();
        })
  }

/* group action */
const pwg_token = '<?php echo $_smarty_tpl->tpl_vars['PWG_TOKEN']->value;?>
';
var nb_plugin = {
  'all' : <?php echo $_smarty_tpl->tpl_vars['count_types_plugins']->value["active"];?>
 + <?php echo $_smarty_tpl->tpl_vars['count_types_plugins']->value["inactive"];?>
 + <?php echo $_smarty_tpl->tpl_vars['count_types_plugins']->value["missing"];?>
 + <?php echo $_smarty_tpl->tpl_vars['count_types_plugins']->value["merged"];?>
,
  'active' : <?php echo $_smarty_tpl->tpl_vars['count_types_plugins']->value["active"];?>
,
  'inactive' : <?php echo $_smarty_tpl->tpl_vars['count_types_plugins']->value["inactive"];?>
,
  'other' : <?php echo $_smarty_tpl->tpl_vars['count_types_plugins']->value["missing"];?>
 + <?php echo $_smarty_tpl->tpl_vars['count_types_plugins']->value["merged"];?>
,
};
const are_you_sure_msg  = '<?php echo strtr(l10n('Are you sure?'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';
const confirm_msg = '<?php echo l10n("Yes, I am sure");?>
';
const cancel_msg = "<?php echo l10n("No, I have changed my mind");?>
";
let delete_plugin_msg = '<?php echo strtr(l10n('Are you sure you want to delete the plugin "%s"?'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';
let deleted_plugin_msg = '<?php echo strtr(l10n('Plugin "%s" deleted!'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';
let restore_plugin_msg = '<?php echo strtr(l10n('Are you sure you want to restore the plugin "%s"?'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';
let uninstall_plugin_msg = '<?php echo strtr(l10n('Are you sure you want to uninstall the plugin "%s"?'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';
const restore_tip_msg = "<?php echo strtr(l10n('Restore default configuration. You will lose your plugin settings!'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
";
const plugin_added_str = '<?php echo strtr(l10n('Activated'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';
const plugin_deactivated_str = '<?php echo strtr(l10n('Deactivated'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';
const plugin_restored_str = '<?php echo strtr(l10n('Restored'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';
const plugin_action_error = '<?php echo strtr(l10n('an error happened'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';
const not_webmaster = '<?php echo strtr(l10n('Webmaster status required'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';
const nothing_found = '<?php echo strtr(l10n('No plugins found'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';
const x_plugins_found = '<?php echo strtr(l10n('%s plugins found'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';
const plugin_found = '<?php echo strtr(l10n('%s plugin found'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';
const isWebmaster = <?php echo $_smarty_tpl->tpl_vars['isWebmaster']->value;?>
;


jQuery(document).ready(function() {
  
  /* Add the '...' for the overflow of the description line*/
  jQuery( document ).ready(function () {
    jQuery('.pluginDesc').each(function () {
      var el = jQuery(this).context;
      var wordArray = el.innerHTML.split(' ');
      if (el.scrollHeight > el.offsetHeight) {
        jQuery(this).attr('title', jQuery(this).html())
      }
      while(el.scrollHeight > el.offsetHeight) {
          wordArray.pop();
          el.innerHTML = wordArray.join(' ') + '...';
      }
    })
  });

  /*Add the filter research*/
  jQuery( document ).ready(function () {
    document.onkeydown = function(e) {
      if (e.keyCode == 58) {
        jQuery(".pluginFilter input.search-input").focus();
        return false;
      }
    }

    jQuery(".pluginFilter input").on("input", function() {
      let text = jQuery(this).val().toLowerCase();
      var searchNumber = 0;

      var searchActive = 0;
      var searchInactive = 0;
      var searchOther = 0;
      
        $(".pluginMiniBox").each(function() {
          if (text == "") {
            jQuery(".nbPluginsSearch").hide();
            if ($("#seeAll").is(":checked")) {
              jQuery(this).show();
            }
            if ($("#seeActive").is(":checked") && jQuery(this).hasClass("plugin-active")) {
              jQuery(this).show();
            }
            if ($("#seeInactive").is(":checked") && jQuery(this).hasClass("plugin-inactive")) {
              jQuery(this).show();
            }
            if ($("#seeOther").is(":checked") && (jQuery(this).hasClass("plugin-merged") || jQuery(this).hasClass("plugin-missing"))) {
              jQuery(this).show();
            }

            if ($(this).hasClass("plugin-active")) {
              searchActive++;
            }
            if ($(this).hasClass("plugin-inactive")) {
              searchInactive++;
            }
            if (($(this).hasClass("plugin-merged") || $(this).hasClass("plugin-missing"))) {
              searchOther++;
            }
            searchNumber++

            nb_plugin.all = searchNumber;
            nb_plugin.active = searchActive;
            nb_plugin.inactive = searchInactive;
            nb_plugin.other = searchOther;

          } else {
            jQuery(".nbPluginsSearch").show();
            let name = jQuery(this).find(".pluginMiniBoxNameCell").text().toLowerCase();
            let description = jQuery(this).find(".pluginDesc").text().toLowerCase();
            if (name.search(text) != -1 || description.search(text) != -1){
              searchNumber++;

              if ($("#seeAll").is(":checked")) {
                jQuery(this).show();
              }
              if ($("#seeActive").is(":checked") && jQuery(this).hasClass("plugin-active")) {
                jQuery(this).show();
              }
              if ($("#seeInactive").is(":checked") && jQuery(this).hasClass("plugin-inactive")) {
                jQuery(this).show();
              }
              if ($("#seeOther").is(":checked") && (jQuery(this).hasClass("plugin-merged") || jQuery(this).hasClass("plugin-missing"))) {
                jQuery(this).show();
              }

              if ($(this).hasClass("plugin-active")) {
                searchActive++;
              }
              if ($(this).hasClass("plugin-inactive")) {
                searchInactive++;
              }
              if (($(this).hasClass("plugin-merged") || $(this).hasClass("plugin-missing"))) {
                searchOther++;
              }

              nb_plugin.all = searchNumber;
              nb_plugin.active = searchActive;
              nb_plugin.inactive = searchInactive;
              nb_plugin.other = searchOther;
            } else {
              jQuery(this).hide();

              nb_plugin.all = searchNumber;
              nb_plugin.active = searchActive;
              nb_plugin.inactive = searchInactive;
              nb_plugin.other = searchOther;
            }
          }
        })

      actualizeFilter();
        
      if (searchNumber == 0) {
        jQuery(".nbPluginsSearch").html(nothing_found);
      } else if (searchNumber == 1) {
        jQuery(".nbPluginsSearch").html(plugin_found.replace("%s", searchNumber));
      } else {
        jQuery(".nbPluginsSearch").html(x_plugins_found.replace("%s", searchNumber));
      }
    });
  });

  /* Show Inactive plugins or button to show them*/
  jQuery( document ).ready(function () {
    jQuery(".showInactivePlugins button").on('click', showInactivePlugins)
  });
});

$(document).mouseup(function (e) {
  e.stopPropagation();
  $(".pluginMiniBox").each(function() {  
    if ($(this).find(".showOptions").has(e.target).length === 0) {
      $(this).find(".PluginOptionsBlock").hide();
    }
  })
});

function actualizeFilter() {

    $("label[for='seeAll'] .filter-badge").html(nb_plugin.all);
    $("label[for='seeActive'] .filter-badge").html(nb_plugin.active);
    $("label[for='seeInactive'] .filter-badge").html(nb_plugin.inactive);
    $("label[for='seeOther'] .filter-badge").html(nb_plugin.other);

    //console.log(nb_plugin)

    $(".filterLabel").show();
    $(".pluginMiniBox").each(function () {
        if (nb_plugin.active == 0) {
            $("label[for='seeActive']").hide();
            if ($("#seeActive").is(":checked")) {
              $("#seeAll").trigger("click")
            }
        }
        if (nb_plugin.inactive == 0) {
            $("label[for='seeInactive']").hide();
            if ($("#seeInactive").is(":checked")) {
              $("#seeAll").trigger("click")
            }
        }
        if (nb_plugin.other == 0) {
            $("label[for='seeOther']").hide();
            if ($("#seeOther").is(":checked")) {
              $("#seeAll").trigger("click")
            }
        }
    })
}

jQuery(".pluginMiniBox").each(function(index){
  let myplugin = jQuery(this);
  myplugin.find(".showOptions").click(function(){
    myplugin.find(".PluginOptionsBlock").toggle();
  });
})


<?php $_block_repeat=false;
echo $_block_plugin1->block_footer_script(array('require'=>'jquery.ajaxmanager'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.confirm','load'=>'footer','require'=>'jquery','path'=>'themes/default/js/plugins/jquery-confirm.min.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/default/js/plugins/jquery-confirm.min.css"),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'tiptip','load'=>'header','path'=>'themes/default/js/plugins/jquery.tipTip.minified.js'),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'pluginInstallated','load'=>'footer','path'=>'admin/themes/default/js/plugins_installated.js'),$_smarty_tpl ) );?>


<div class="titrePage">
  <h2><?php echo l10n('Plugins');?>
</h2>
</div>

<?php if ((isset($_smarty_tpl->tpl_vars['plugins']->value))) {?>

<?php $_smarty_tpl->_assignInScope('field_name', 'null');?> <?php echo smarty_function_counter(array('start'=>0,'assign'=>'i'),$_smarty_tpl);?>
 
<div class="pluginTypeFilter">
<input type="radio" name="p-filter" class="filter" id="seeAll" <?php if ($_smarty_tpl->tpl_vars['count_types_plugins']->value["active"] <= 0) {?> checked <?php }?>><label for="seeAll"><?php echo l10n('All');?>
<span class="filter-badge">X</span></label><input type="radio" name="p-filter" class="filter" id="seeActive" <?php if ($_smarty_tpl->tpl_vars['count_types_plugins']->value["active"] > 0) {?> checked <?php }?>><label class="filterLabel" for="seeActive"><?php echo l10n('Activated');?>
<span class="filter-badge">X</span></label><input type="radio" name="p-filter" class="filter" id="seeInactive"><label class="filterLabel" for="seeInactive"><?php echo l10n('Deactivated');?>
<span class="filter-badge">X</span></label><input type="radio" name="p-filter" class="filter" id="seeOther"><label class="filterLabel" for="seeOther"><?php echo l10n('Other');?>
<span class="filter-badge">X</span></label>
</div>

<div class="nbPluginsSearch"></div>

<div class="pluginFilter"> 
  <span class="icon-search search-icon"></span>
  <span class="icon-cancel search-cancel"></span>
  <input class='search-input' type="text" placeholder="<?php echo l10n('Search');?>
">
</div>

<div class="AlbumViewSelector">
    <input type="radio" name="layout" class="switchLayout" id="displayClassic" <?php if ($_COOKIE['pwg_plugin_manager_view'] == 'classic' || !$_COOKIE['pwg_plugin_manager_view']) {?>checked<?php }?>/><label for="displayClassic"><span class="icon-pause firstIcon tiptip" title="<?php echo l10n('Classic View');?>
"></span></label><input type="radio" name="layout" class="switchLayout" id="displayLine" <?php if ($_COOKIE['pwg_plugin_manager_view'] == 'line') {?>checked<?php }?>/><label for="displayLine"><span class="icon-th-list tiptip" title="<?php echo l10n('Line View');?>
"></span></label><input type="radio" name="layout" class="switchLayout" id="displayCompact" <?php if ($_COOKIE['pwg_plugin_manager_view'] == 'compact') {?>checked<?php }?>/><label for="displayCompact"><span class="icon-th-large lastIcon tiptip" title="<?php echo l10n('Compact View');?>
"></span></label>
</div>  

    <div class="pluginContainer <?php if ($_COOKIE['pwg_plugin_manager_view'] == 'classic') {?> classic <?php } elseif ($_COOKIE['pwg_plugin_manager_view'] == 'line') {?> line <?php } elseif ($_COOKIE['pwg_plugin_manager_view'] == 'compact') {?> compact <?php } else { ?> <?php }?>">

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plugins']->value, 'plugin', false, NULL, 'plugins_loop', array (
));
$_smarty_tpl->tpl_vars['plugin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->value) {
$_smarty_tpl->tpl_vars['plugin']->do_else = false;
?>

<?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['AUTHOR'])) {
if (!empty($_smarty_tpl->tpl_vars['plugin']->value['AUTHOR_URL'])) {?>
      <?php $_smarty_tpl->_assignInScope('author', sprintf("<a href='%s'>%s</a>",$_smarty_tpl->tpl_vars['plugin']->value['AUTHOR_URL'],$_smarty_tpl->tpl_vars['plugin']->value['AUTHOR']));
} else { ?>
      <?php $_smarty_tpl->_assignInScope('author', (('<u>').($_smarty_tpl->tpl_vars['plugin']->value['AUTHOR'])).('</u>'));
}
}
if (!empty($_smarty_tpl->tpl_vars['plugin']->value['VISIT_URL'])) {?>
    <?php $_smarty_tpl->_assignInScope('version', (((("<a class='externalLink' href='").($_smarty_tpl->tpl_vars['plugin']->value['VISIT_URL'])).("'>")).($_smarty_tpl->tpl_vars['plugin']->value['VERSION'])).("</a>"));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('version', $_smarty_tpl->tpl_vars['plugin']->value['VERSION']);
}?>
  <div id="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['ID'];?>
" class="pluginMiniBox <?php echo $_smarty_tpl->tpl_vars['plugin']->value['STATE'];?>
 plugin-<?php echo $_smarty_tpl->tpl_vars['plugin']->value['STATE'];?>
">

    <div class="AddPluginSuccess pluginNotif">
      <label class="icon-ok">
        <span><?php echo l10n('Plugin activated');?>
</span>
      </label>
    </div>

    <div class="DeactivatePluginSuccess pluginNotif">
      <label class="icon-ok">
        <span><?php echo l10n('Plugin deactivated');?>
</span>
      </label>
    </div>

    <div class="RestorePluginSuccess pluginNotif">
      <label class="icon-ok">
        <span><?php echo l10n('Plugin deactivated');?>
</span>
      </label>
    </div>

    <div class="PluginActionError pluginNotif">
      <label class="icon-cancel">
        <span><?php echo l10n('Plugin deactivated');?>
</span>
      </label>
    </div>

    <div class="pluginContent">
      <div class="PluginOptionsIcons">
<?php if ($_smarty_tpl->tpl_vars['plugin']->value['STATE'] == 'active' || $_smarty_tpl->tpl_vars['plugin']->value['STATE'] == 'inactive') {?>
          <a class="icon-ellipsis-v showOptions showInfo" ></a>
<?php }?>
      </div>
<?php if ($_smarty_tpl->tpl_vars['plugin']->value['STATE'] == 'active' || $_smarty_tpl->tpl_vars['plugin']->value['STATE'] == 'inactive') {?>
    <label class="switch">
      <input type="checkbox" id="toggleSelectionMode" <?php ob_start();
echo $_smarty_tpl->tpl_vars['plugin']->value['STATE'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 === "active") {?>checked<?php }?>>
      <span class="slider round"></span>
    </label>
<?php }?>
      <div class="pluginActionsSmallIcons">
<?php if ($_smarty_tpl->tpl_vars['plugin']->value['STATE'] == 'active') {
if ($_smarty_tpl->tpl_vars['plugin']->value['SETTINGS_URL'] != '') {?>
            <div class="tiptip" title="<?php echo l10n('Settings');?>
"> 
              <a href="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['SETTINGS_URL'];?>
"><span class="icon-cog"></span></a>
            </div>
<?php } else { ?>
            <div class="tiptip" title="<?php echo l10n('N/A');?>
">
              <a><i class="icon-cog"></i></a>
            </div>
<?php }
} elseif ($_smarty_tpl->tpl_vars['plugin']->value['STATE'] == 'inactive') {
if ($_smarty_tpl->tpl_vars['plugin']->value['SETTINGS_URL'] != '') {?>
              <div class="tiptip" title="<?php echo l10n('Settings');?>
"> 
                  <a href="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['SETTINGS_URL'];?>
"><span class="icon-cog"></span></a>
              </div>
<?php } else { ?>
              <div class="tiptip" title="<?php echo l10n('N/A');?>
"> 
                  <a><i class="icon-cog"></i></a>
              </div>
<?php }
} elseif ($_smarty_tpl->tpl_vars['plugin']->value['STATE'] == 'missing') {?>
          <div class="tiptip" title="<?php echo l10n('Uninstall');?>
">
            <a class="uninstall-plugin-button"><?php echo l10n('Uninstall');?>
</a>
          </div>
<?php } elseif ($_smarty_tpl->tpl_vars['plugin']->value['STATE'] == 'merged') {?>
          <div class="tiptip" title="<?php echo l10n('Delete');?>
">
            <a class="" href="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['U_ACTION'];?>
&amp;action=delete"><?php echo l10n('Delete');?>
</a>
          </div>
<?php }?>
      </div>
      
      <div class="PluginOptionsBlock dropdown">
        <div class="dropdown-option-content"> <?php if (!empty($_smarty_tpl->tpl_vars['author']->value)) {
echo l10n('By %s',$_smarty_tpl->tpl_vars['author']->value);?>
 | <?php }
echo l10n('Version');?>
 <?php echo $_smarty_tpl->tpl_vars['version']->value;?>
</div>
        <div class="pluginDescCompact">
          <?php echo $_smarty_tpl->tpl_vars['plugin']->value['DESC'];?>

        </div>
          <a class="dropdown-option icon-back-in-time plugin-restore separator-top"><?php echo l10n('Restore');?>
</a>
          <a class="dropdown-option icon-trash delete-plugin-button separator-top"><?php echo l10n('Delete');?>
</a>
      </div>
      <div class="pluginMiniBoxNameCell" data-title="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['NAME'];?>
">
        <?php echo $_smarty_tpl->tpl_vars['plugin']->value['NAME'];?>

      </div>
      <div class="pluginDesc">
        <?php echo $_smarty_tpl->tpl_vars['plugin']->value['DESC'];?>

      </div>
      <div class="pluginActions">
<?php if ($_smarty_tpl->tpl_vars['plugin']->value['STATE'] == 'active') {
if ($_smarty_tpl->tpl_vars['plugin']->value['SETTINGS_URL'] != '') {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['SETTINGS_URL'];?>
" class="pluginActionLevel1 icon-cog"><?php echo l10n('Settings');?>
</a>
<?php } else { ?>
            <a class="pluginUnavailableAction icon-cog tiptip" title="<?php echo l10n('N/A');?>
"><?php echo l10n('Settings');?>
</a>
<?php }
} elseif ($_smarty_tpl->tpl_vars['plugin']->value['STATE'] == 'inactive') {
if ($_smarty_tpl->tpl_vars['plugin']->value['SETTINGS_URL'] != '') {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['SETTINGS_URL'];?>
" class="pluginUnavailableAction icon-cog"><?php echo l10n('Settings');?>
</a>
<?php } else { ?>
            <a class="pluginUnavailableAction icon-cog tiptip" title="<?php echo l10n('N/A');?>
"><?php echo l10n('Settings');?>
</a>
<?php }
} elseif ($_smarty_tpl->tpl_vars['plugin']->value['STATE'] == 'missing') {?>
          <a class="pluginActionLevel3 uninstall-plugin-button"><?php echo l10n('Uninstall');?>
</a>
<?php } elseif ($_smarty_tpl->tpl_vars['plugin']->value['STATE'] == 'merged') {?>
          <a class="pluginActionLevel3" href="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['U_ACTION'];?>
&amp;action=delete"><?php echo l10n('Delete');?>
</a>
<?php }?>
      </div>
    </div>
    
  </div> 
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }?>


<style>

.AlbumViewSelector {
  position: absolute;

  right: 20px;
  z-index: 2;

  height: 43px;
  display: flex;
  align-items: center;

  transform: translateY(6px);
}

.AlbumViewSelector {
  padding: 0px;
  margin-right: 0px;
  border-radius: 7px;
}

.AlbumViewSelector span {
  border-radius: 0;
  padding: 8px;
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

/****************************************/

.pluginActionsSmallIcons a, .PluginOptionsIcons a{
  width: 25px;
  height: 25px;

  display: flex;
  justify-content: center;
  align-items: center;
}

.pluginActionsSmallIcons a:hover, .PluginOptionsIcons a:hover {
  color: #000000;
  transition: 0.2s;
}

.pluginActionsSmallIcons {
  position: absolute;
  right: 20px;
  padding: 13px;
  top: 0px;
  display: flex;
}

.pluginMiniBox.active .pluginActionsSmallIcons a span {
  display: flex;
  align-items: center;
  justify-content: center;

  padding: 5px 2px;
  border-radius: 5px;
}

.pluginMiniBox.active .pluginActionsSmallIcons a span:hover {
  display: flex;
  align-items: center;
  justify-content: center;

  padding: 5px 2px;
  border-radius: 5px;
}

.pluginMiniBox.inactive .pluginActionsSmallIcons a span {
  display: flex;
  align-items: center;
  justify-content: center;

  padding: 5px 2px;
  background: #e0e0e0;
  border-radius: 5px;
}

.pluginActionsSmallIcons a:hover {
  text-decoration: none;
}

.pluginMiniBox {
  transition: 0.5s;
  position: relative;
}

.unavailablePlugin {
  cursor: default;
  opacity: 0.5;
}

.unavailablePlugin:hover {
  cursor: default;
  color: #3a3a3a !important;
}

.pluginUnavailableAction {
  text-decoration: none !important;
}

.pluginDescCompact {
  max-width: 200px;
  padding: 5px 10px;
}

.dropdown-option-content {
  font-weight: bold;
}

.separator-top {
  border-top: 1px solid #ffffff45;
}

.dropdown-option.icon-cancel-circled {
  margin-bottom: -5px;
}

.dropdown-option {
  font-weight: bold;
}

.pluginContainer {
  margin-top: 75px;
  padding: 0 20px;
}

.switch {
  margin: 0 10px 0 0;
}

.plugin-inactive .pluginActions a {
  pointer-events: none;
}

.plugin-active .dropdown .delete-plugin-button {
  display: none;
}
  
.plugin-inactive .dropdown .plugin-restore {
 display: none;
}

.plugin-inactive .dropdown .delete-plugin-button {
  display: block;
}
  
.plugin-active .dropdown .plugin-restore {
 display: block;
}

.plugin-inactive .pluginActionsSmallIcons {
  opacity: 0.5;
}

.pluginNotif {
  display:none;
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  top: -20px;
  font-weight:bold;
  z-index: 2;
  white-space: nowrap;
}

.AddPluginSuccess label,
.DeactivatePluginSuccess label,
.RestorePluginSuccess label {
  padding: 10px;
  cursor: default;
  border-radius: 30px;
}

.PluginActionError label {
  padding: 10px;
  cursor: default;
  border-radius: 30px;
}

/* Line view */

.pluginContainer.line {
  display: flex;
  flex-direction: column;
  box-shadow: none;
  background: transparent;
}

.pluginContainer.line .pluginMiniBox {
  width: 100%;
  height: 50px;

  margin: 0 0 10px 0;
}

.pluginContainer.line .pluginMiniBox .pluginContent{
  display: flex;
  flex-direction: row;
  align-items: center;
  width: calc(100% - 35px);
}

.pluginContainer.line .pluginMiniBox .pluginActions{
  width: auto;
  margin: 0 25px 0 auto;
}

.pluginContainer.line .pluginMiniBox .PluginOptionsBlock{
  display:none;
  position:absolute;
  right: 30px;
  top: 0;
  z-index: 2;
  transform: translateY(calc(50% - 30px));
}

.pluginContainer.line .pluginMiniBox .dropdown::after {
  content: " ";
  position: absolute;
  bottom: 55%;
  left: calc(100% + 5px);
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: transparent transparent #ff7700 transparent;
  transform: rotate(90deg);
}


.pluginContainer.line .pluginMiniBox .pluginActions a,
.pluginContainer.classic .pluginMiniBox .pluginActions a{
  margin: 0;
  padding: 2px 10px;
  border-radius: 5px;
  color: #3c3c3c;
}

.pluginContainer.line .pluginMiniBox .pluginDesc{
  margin:  auto 10px auto 10px;
  display: block !important;
  align-items: center;

  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;

  max-width: 1000px;
  flex: 1;
}

/* Classic view */

.pluginContainer.classic {
  display: flex;
  flex-direction: row;

  flex-wrap: wrap;
}

.pluginContainer.classic .pluginMiniBoxNameCell {
  position: relative;
  margin-right: 10px;
}

.pluginContainer.classic .switch {
  position: absolute;
  top: 45px;
}

.pluginContainer.classic .pluginMiniBox .pluginActions {
  position: absolute;
  top: 47px;
  right: 17px;
}

/* Compact view */

.plugin-inactive .pluginActionsSmallIcons a {
  pointer-events: none;
}

.pluginContainer.compact {
  display: flex;
  flex-direction: row;

  flex-wrap: wrap;
}

.pluginContainer.compact .pluginMiniBox {
  width: 350px;

  margin: 15px 15px 0 0;
}

.pluginContainer.compact .pluginMiniBox .pluginContent {
  display: flex;
  flex-direction: row;

  align-items: center;
}

.filter-badge {
  border-radius: 20px;
  text-align: center;
  padding: 0px 7px;
  margin-left: 10px;
}

.pluginMiniBox.incompatible .pluginMiniBoxNameCell i {
  color:#c64444;
}

.nbPluginsSearch {
  position: absolute;
  right: 415px;
  transform: translateY(18px);
}
</style><?php }
}
