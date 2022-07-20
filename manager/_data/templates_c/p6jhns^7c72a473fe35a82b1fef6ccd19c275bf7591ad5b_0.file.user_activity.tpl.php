<?php
/* Smarty version 3.1.39, created on 2022-07-19 21:45:36
  from '/home/dosingenierias/proyectos.dosingenierias.com/manager/admin/themes/default/template/user_activity.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d75e40e640a5_95463766',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c72a473fe35a82b1fef6ccd19c275bf7591ad5b' => 
    array (
      0 => '/home/dosingenierias/proyectos.dosingenierias.com/manager/admin/themes/default/template/user_activity.tpl',
      1 => 1656623876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/colorbox.inc.tpl' => 1,
  ),
),false)) {
function content_62d75e40e640a5_95463766 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:include/colorbox.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'common','load'=>'footer','path'=>'admin/themes/default/js/common.js'),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.selectize','load'=>'footer','path'=>'themes/default/js/plugins/selectize.min.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('id'=>'jquery.selectize','path'=>"themes/default/js/plugins/selectize.".((string)$_smarty_tpl->tpl_vars['themeconf']->value['colorscheme']).".css"),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'LocalStorageCache','load'=>'footer','path'=>'admin/themes/default/js/LocalStorageCache.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"admin/themes/default/fontello/css/animation.css",'order'=>10),$_smarty_tpl ) );?>
 <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin1->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
var usersCache = new UsersCache({
  serverKey: '<?php echo $_smarty_tpl->tpl_vars['CACHE_KEYS']->value['users'];?>
',
  serverId: '<?php echo $_smarty_tpl->tpl_vars['CACHE_KEYS']->value['_hash'];?>
',
  rootUrl: '<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
'
});

const color_icons = ["icon-red", "icon-blue", "icon-yellow", "icon-purple", "icon-green"];
const users_key = "<?php echo l10n("Users");?>
"

const line_key = "<?php echo l10n('%s line');?>
";
const lines_key = "<?php echo l10n('%s lines');?>
";


var actionType_add = "<?php echo l10n('add');?>
";
var actionType_delete = "<?php echo l10n('deletion');?>
";
var actionType_move = "<?php echo l10n('move');?>
";
var actionType_edit = "<?php echo l10n('edit');?>
";
var actionType_login = "<?php echo l10n('login');?>
";
var actionType_logout = "<?php echo l10n('logout');?>
";


var actionInfos_album_added = "<?php echo l10n('%d album added');?>
";
var actionInfos_album_deleted = "<?php echo l10n('%d album deleted');?>
";
var actionInfos_album_edited = "<?php echo l10n('%d album edited');?>
";
var actionInfos_album_moved = "<?php echo l10n('%d album moved');?>
";

var actionInfos_albums_added = "<?php echo l10n('%d albums added');?>
";
var actionInfos_albums_deleted = "<?php echo l10n('%d albums deleted');?>
";
var actionInfos_albums_edited = "<?php echo l10n('%d albums edited');?>
";
var actionInfos_albums_moved = "<?php echo l10n('%d albums moved');?>
";


var actionInfos_user_added = "<?php echo l10n('%d user added');?>
";
var actionInfos_user_deleted = "<?php echo l10n('%d user deleted');?>
";
var actionInfos_user_edited = "<?php echo l10n('%d user edited');?>
";
var actionInfos_user_logged_in = "<?php echo l10n('%d user logged in');?>
";
var actionInfos_user_logged_out = "<?php echo l10n('%d user logged out');?>
";

var actionInfos_users_added = "<?php echo l10n('%d users added');?>
";
var actionInfos_users_deleted = "<?php echo l10n('%d users deleted');?>
";
var actionInfos_users_edited = "<?php echo l10n('%d users edited');?>
";
var actionInfos_users_logged_in = "<?php echo l10n('%d users logged in');?>
";
var actionInfos_users_logged_out = "<?php echo l10n('%d users logged out');?>
";


var actionInfos_photo_added = "<?php echo l10n('%d photo added');?>
";
var actionInfos_photo_deleted = "<?php echo l10n('%d photo deleted');?>
";
var actionInfos_photo_edited = "<?php echo l10n('%d photo edited');?>
";
var actionInfos_photo_moved = "<?php echo l10n('%d photo moved');?>
";

var actionInfos_photos_added = "<?php echo l10n('%d photos added');?>
";
var actionInfos_photos_deleted = "<?php echo l10n('%d photos deleted');?>
";
var actionInfos_photos_edited = "<?php echo l10n('%d photos edited');?>
";
var actionInfos_photos_moved = "<?php echo l10n('%d photos moved');?>
";


var actionInfos_group_added = "<?php echo l10n('%d group added');?>
";
var actionInfos_group_deleted = "<?php echo l10n('%d group deleted');?>
";
var actionInfos_group_edited = "<?php echo l10n('%d group edited');?>
";
var actionInfos_group_moved = "<?php echo l10n('%d group moved');?>
";

var actionInfos_groups_added = "<?php echo l10n('%d groups added');?>
";
var actionInfos_groups_deleted = "<?php echo l10n('%d groups deleted');?>
";
var actionInfos_groups_edited = "<?php echo l10n('%d groups edited');?>
";
var actionInfos_groups_moved = "<?php echo l10n('%d groups moved');?>
";


var actionInfos_tag_added = "<?php echo l10n('%d tag added');?>
";
var actionInfos_tag_deleted = "<?php echo l10n('%d tag deleted');?>
";
var actionInfos_tag_edited = "<?php echo l10n('%d tag edited');?>
";
var actionInfos_tag_moved = "<?php echo l10n('%d tag moved');?>
";

var actionInfos_tags_added = "<?php echo l10n('%d tags added');?>
";
var actionInfos_tags_deleted = "<?php echo l10n('%d tags deleted');?>
";
var actionInfos_tags_edited = "<?php echo l10n('%d tags edited');?>
";
var actionInfos_tags_moved = "<?php echo l10n('%d tags moved');?>
";


get_user_activity();

function get_user_activity() {
    $.ajax({
        url: "ws.php?format=json&method=pwg.activity.getList",
        type: "POST",
        dataType: "json",
        data: {
            a: 1,
            b: 2
        },
        success: (data) => {
            /* console log to help debug */
            console.log(data);

            setCreationDate(data.result['result_lines'][data.result['result_lines'].length-1].date, data.result['result_lines'][0].date);
            $(".loading").hide();
            
            data.result['result_lines'].forEach(line => {
                lineConstructor(line);
            });

            fillUserFilter(data.result['filterable_users'], data.result['id_of']);
        }, 
        error: (e) => {
            console.log("ajax call failed");
            console.log(e);
        }
    })
}

function fillUserFilter(user_tab) {

  for (const [key, value] of Object.entries(user_tab)) {
        var newOption = "<option value=" + value.id +"> <span class='username_filter'>" + value.username + "</span> <span class='nb_lines_str'> (" + lines_key.replace("%s", value.nb_lines) + ") </span></option>";

    $(".user-selecter").append(newOption);
  }

  jQuery('.user-selecter').selectize();

  jQuery(".user-selecter")[0].selectize.setValue(null);

  jQuery(".cancel-icon").click(function() {
    jQuery(".user-selecter")[0].selectize.setValue(null);
    $(".line").show();
  });
}

function lineConstructor(line) {
    let newLine = $("#-1").clone();

    newLine.removeClass("hide");

    /* console log to help debug */
        newLine.attr("id", line.id);

    var final_albumInfos;

    
    if (line.counter > 1) {
        // pluriel
        switch (line.action) {
            case "edit":
            newLine.find(".action-type").addClass("icon-blue");
            newLine.find(".user-pic").addClass(color_icons[line.user_id % 5]);
            newLine.find(".action-icon").addClass("icon-pencil");

            newLine.find(".action-name").html(actionType_edit);
                switch (line.object) {
                    case "user":
                    final_albumInfos = actionInfos_users_edited.replace('%d', line.counter);
                    newLine.find(".action-section").addClass("icon-user-1");
    
                    break;
                    case "album":
                    final_albumInfos = actionInfos_albums_edited.replace('%d', line.counter);
                    newLine.find(".action-section").addClass("icon-folder-open");

                    break;
                    case "group":
                    final_albumInfos = actionInfos_groups_edited.replace('%d', line.counter);
                    newLine.find(".action-section").addClass("icon-users-1");

                    break;
                    case "photo":
                    final_albumInfos = actionInfos_photos_edited.replace('%d', line.counter);
                    newLine.find(".action-section").addClass("icon-picture");

                    break;
                    case "tag":
                    final_albumInfos = actionInfos_tags_edited.replace('%d', line.counter);
                    newLine.find(".action-section").addClass("icon-tags");

                    break;
                    default:
                     final_albumInfos = line.counter + " " +line.object + " " + line.action;
                    break;
                }
                
            break;

            case "add":
            newLine.find(".action-type").addClass("icon-green");
            newLine.find(".user-pic").addClass(color_icons[line.user_id % 5]);
            newLine.find(".action-icon").addClass("icon-plus");

            newLine.find(".action-name").html(actionType_add);
                switch (line.object) {
                    case "user":
                    final_albumInfos = actionInfos_users_added.replace('%d', line.counter);
                    newLine.find(".action-section").addClass("icon-user-1");

                    break;
                    case "album":
                    final_albumInfos = actionInfos_albums_added.replace('%d', line.counter);
                    newLine.find(".action-section").addClass("icon-folder-open");

                    break;
                    case "group":
                    final_albumInfos = actionInfos_groups_added.replace('%d', line.counter);
                    newLine.find(".action-section").addClass("icon-users-1");

                    break;
                    case "photo":
                    final_albumInfos = actionInfos_photos_added.replace('%d', line.counter);
                    newLine.find(".action-section").addClass("icon-picture");

                    break;
                    case "tag":
                    final_albumInfos = actionInfos_tags_added.replace('%d', line.counter);
                    newLine.find(".action-section").addClass("icon-tags");

                    break;
                    default:
                     final_albumInfos = line.counter + " " +line.object + " " + line.action;
                    break;
                }

            break;

            case "delete":
            newLine.find(".action-type").addClass("icon-red");
            newLine.find(".user-pic").addClass(color_icons[line.user_id % 5]);
            newLine.find(".action-icon").addClass("icon-trash-1");

            newLine.find(".action-name").html(actionType_delete);
                switch (line.object) {
                    case "user":
                    final_albumInfos = actionInfos_users_deleted.replace('%d', line.counter);
                    newLine.find(".action-section").addClass("icon-user-1");

                    break;
                    case "album":
                    final_albumInfos = actionInfos_albums_deleted.replace('%d', line.counter);
                    newLine.find(".action-section").addClass("icon-folder-open");

                    break;
                    case "group":
                    final_albumInfos = actionInfos_groups_deleted.replace('%d', line.counter);
                    newLine.find(".action-section").addClass("icon-users-1");

                    break;
                    case "photo":
                    final_albumInfos = actionInfos_photos_deleted.replace('%d', line.counter);
                    newLine.find(".action-section").addClass("icon-picture");

                    break;
                    case "tag":
                    final_albumInfos = actionInfos_tags_deleted.replace('%d', line.counter);
                    newLine.find(".action-section").addClass("icon-tags");

                    break;
                    default:
                     final_albumInfos = line.counter + " " +line.object + " " + line.action;
                    break;
                }

            break;

            case "move":
            newLine.find(".action-type").addClass("icon-yellow");
            newLine.find(".user-pic").addClass(color_icons[line.user_id % 5]);
            newLine.find(".action-icon").addClass("icon-move");

            newLine.find(".action-name").html(actionType_move);
                switch (line.object) {
                    case "album":
                    final_albumInfos = actionInfos_albums_moved.replace('%d', line.counter);
                    newLine.find(".action-section").addClass("icon-folder-open");

                    break;
                    case "group":
                    final_albumInfos = actionInfos_groups_moved.replace('%d', line.counter);
                    newLine.find(".action-section").addClass("icon-users-1");

                    break;
                    case "photo":
                    final_albumInfos = actionInfos_photos_moved.replace('%d', line.counter);
                    newLine.find(".action-section").addClass("icon-picture");

                    break;
                    case "tag":
                    final_albumInfos = actionInfos_tags_moved.replace('%d', line.counter);
                    newLine.find(".action-section").addClass("icon-tags");

                    break;
                    default:
                     final_albumInfos = line.counter + " " +line.object + " " + line.action;
                    break;
                }

            break;

            case "login":
            newLine.find(".action-type").addClass("icon-purple");
            newLine.find(".user-pic").addClass(color_icons[line.user_id % 5]);
            newLine.find(".action-icon").addClass("icon-key");
            newLine.find(".action-section").addClass("icon-user-1");

            newLine.find(".action-name").html(actionType_login);

            console.log("userS Logged in");
            final_albumInfos = actionInfos_users_logged_in.replace('%d', line.counter);

            break;

            case "logout":
            newLine.find(".action-type").addClass("icon-purple");
            if (line.user_id != 2) {
              newLine.find(".user-pic").addClass(color_icons[line.user_id % 5]);
            } else {
              newLine.find(".user-pic").addClass(color_icons[line.object_id[0] % 5]);
            }
            newLine.find(".action-icon").addClass("icon-logout");
            newLine.find(".action-section").addClass("icon-user-1");

            newLine.find(".action-name").html(actionType_logout);

            console.log("userS Logged in");
            final_albumInfos = actionInfos_users_logged_out.replace('%d', line.counter);

            break;

            default:
            newLine.find(".action-type").addClass("icon-purple");
            newLine.find(".user-pic").addClass(color_icons[line.user_id % 5]);
            break;
        }
    } else {
        // singulier
        switch (line.action) {
            case "edit":
            newLine.find(".action-type").addClass("icon-blue");
            newLine.find(".user-pic").addClass(color_icons[line.user_id % 5]);
            newLine.find(".action-icon").addClass("icon-pencil");

            newLine.find(".action-name").html(actionType_edit);
                switch (line.object) {
                    case "user":
                    final_albumInfos = actionInfos_user_edited.replace('%d', line.counter);
                    newLine.find(".action-section").addClass("icon-user-1");

                    break;
                    case "album":
                    final_albumInfos = actionInfos_album_edited.replace('%d', line.counter);
                    newLine.find(".action-section").addClass("icon-folder-open");

                    break;
                    case "group":
                    final_albumInfos = actionInfos_group_edited.replace('%d', line.counter);
                    newLine.find(".action-section").addClass("icon-users-1");

                    break;
                    case "photo":
                    final_albumInfos = actionInfos_photo_edited.replace('%d', line.counter);
                    newLine.find(".action-section").addClass("icon-picture");

                    break;
                    case "tag":
                    final_albumInfos = actionInfos_tag_edited.replace('%d', line.counter);
                    newLine.find(".action-section").addClass("icon-tags");

                    break;
                    default:
                     final_albumInfos = line.counter + " " +line.object + " " + line.action;
                    break;
                }

            
            break;
            case "add":
            newLine.find(".action-type").addClass("icon-green");
            newLine.find(".user-pic").addClass(color_icons[line.user_id % 5]);
            newLine.find(".action-icon").addClass("icon-plus");

            newLine.find(".action-name").html(actionType_add);
                switch (line.object) {
                    case "user":
                    final_albumInfos = actionInfos_user_added.replace('%d', line.counter);
                    newLine.find(".action-section").addClass("icon-user-1");

                    break;
                    case "album":
                    final_albumInfos = actionInfos_album_added.replace('%d', line.counter);
                    newLine.find(".action-section").addClass("icon-folder-open");

                    break;
                    case "group":
                    final_albumInfos = actionInfos_group_added.replace('%d', line.counter);
                    newLine.find(".action-section").addClass("icon-users-1");

                    break;
                    case "photo":
                    final_albumInfos = actionInfos_photo_added.replace('%d', line.counter);
                    newLine.find(".action-section").addClass("icon-picture");

                    break;
                    case "tag":
                    final_albumInfos = actionInfos_tag_added.replace('%d', line.counter);
                    newLine.find(".action-section").addClass("icon-tags");

                    break;
                    default:
                     final_albumInfos = line.counter + " " +line.object + " " + line.action;

                    break;
                }

            break;
            case "delete":
            newLine.find(".action-type").addClass("icon-red");
            newLine.find(".user-pic").addClass(color_icons[line.user_id % 5]);
            newLine.find(".action-icon").addClass("icon-trash-1");

            newLine.find(".action-name").html(actionType_delete);
                switch (line.object) {
                    case "user":
                    final_albumInfos = actionInfos_user_deleted.replace('%d', line.counter);
                    newLine.find(".action-section").addClass("icon-user-1");

                    break;
                    case "album":
                    final_albumInfos = actionInfos_album_deleted.replace('%d', line.counter);
                    newLine.find(".action-section").addClass("icon-folder-open");

                    break;
                    case "group":
                    final_albumInfos = actionInfos_group_deleted.replace('%d', line.counter);
                    newLine.find(".action-section").addClass("icon-users-1");

                    break;
                    case "photo":
                    final_albumInfos = actionInfos_photo_deleted.replace('%d', line.counter);
                    newLine.find(".action-section").addClass("icon-picture");

                    break;
                    case "tag":
                    final_albumInfos = actionInfos_tag_deleted.replace('%d', line.counter);
                    newLine.find(".action-section").addClass("icon-tags");

                    break;
                    default:
                     final_albumInfos = line.counter + " " +line.object + " " + line.action;
                    break;
                }

            break;
            case "move":
            newLine.find(".action-type").addClass("icon-yellow");
            newLine.find(".user-pic").addClass(color_icons[line.user_id % 5]);
            newLine.find(".action-icon").addClass("icon-move");

            newLine.find(".action-name").html(actionType_move);
                switch (line.object) {
                    case "album":
                    final_albumInfos = actionInfos_album_moved.replace('%d', line.counter);
                    newLine.find(".action-section").addClass("icon-folder-open");

                    break;
                    case "group":
                    final_albumInfos = actionInfos_group_moved.replace('%d', line.counter);
                    newLine.find(".action-section").addClass("icon-users-1");

                    break;
                    case "photo":
                    final_albumInfos = actionInfos_photo_moved.replace('%d', line.counter);
                    newLine.find(".action-section").addClass("icon-picture");

                    break;
                    case "tag":
                    final_albumInfos = actionInfos_tag_moved.replace('%d', line.counter);
                    newLine.find(".action-section").addClass("icon-tags");

                    break;
                    default:
                     final_albumInfos = line.counter + " " +line.object + " " + line.action;
                    break;
                }

            break;
            case "login":
            newLine.find(".action-type").addClass("icon-purple");
            newLine.find(".user-pic").addClass(color_icons[line.user_id % 5]);
            newLine.find(".action-icon").addClass("icon-key");
            newLine.find(".action-section").addClass("icon-user-1");

            newLine.find(".action-name").html(actionType_login);

            final_albumInfos = actionInfos_user_logged_in.replace('%d', line.counter);

            break;
            case "logout":
            newLine.find(".action-type").addClass("icon-purple");
            if (line.user_id != 2) {
              newLine.find(".user-pic").addClass(color_icons[line.user_id % 5]);
            } else {
              newLine.find(".user-pic").addClass(color_icons[line.object_id[0] % 5]);
            }
            newLine.find(".action-icon").addClass("icon-logout");
            newLine.find(".action-section").addClass("icon-user-1");

            newLine.find(".action-name").html(actionType_logout);
          
            final_albumInfos = actionInfos_user_logged_out.replace('%d', line.counter);

            break;

            default:
            newLine.find(".action-type").addClass("icon-purple");
            newLine.find(".user-pic").addClass(color_icons[line.user_id % 5]);
            break;
        }
    }

    newLine.find(".action-infos-test").html(final_albumInfos);

    /* Action_section */
    newLine.find(".nb_items").html(line.counter);
    
    /* Date_section */
    newLine.find(".date-day").html(line.date);
    newLine.find(".date-hour").html(line.hour);

    /* User _Section */
    newLine.find(".user-name").html(line.username);
    newLine.find(".user-pic").html(get_initials(line.username));

    /* Detail_section */
    newLine.find(".detail-item-1").html(line.ip_address);
    newLine.find(".detail-item-1").attr("title", "IP");

    if (line.detailsType == "script") {
        newLine.find(".detail-item-2").html(line.details.script);
        newLine.find(".detail-item-2").attr('title', 'Script');
    } else if (line.detailsType == "method") {
        newLine.find(".detail-item-2").html(line.details.method);
        newLine.find(".detail-item-2").attr('title', 'API Method');
    }   
    
    if (line.details.agent) {
        newLine.find(".detail-item-3").html(line.details.agent);
        newLine.find(".detail-item-3").attr('title', line.details.agent);
    } else if (line.details.users_string && line.action != "logout" && line.action != "login") {
        newLine.find(".detail-item-3").html(line.details.users_string);
        newLine.find(".detail-item-3").attr('title', users_key + ": " +line.details.users_string);
    } else {
        newLine.find(".detail-item-3").remove();
    }

    newLine.addClass("uid-" + line.user_id);

    displayLine(newLine);
}

function displayLine(line) {
    $(".tab").append(line);
}

function get_initials(username) {
    let words = username.toUpperCase().split(" ");
    let res = words[0][0];

    if (words.length > 1 && words[1][0] !== undefined ) {
        res += words[1][0];
    }
    return res;
}

function filterUsers(username) {
    let lines =  $(".line");

    showAllLines()
    let resultLines = [];

    for (let index = 1; index < lines.length; index++) {
        
        if (username != lines[index].children[2].children[1].innerHTML) {
            $("#" + lines[index].id).hide();
        } else  {
            resultLines.push(lines[index].getElementsByClassName("date-day")[0].textContent)
        }
    }
    setCreationDate((!resultLines[resultLines.length-1]) ? "<?php echo l10n('N/A');?>
" : resultLines[resultLines.length-1], (!resultLines[0]) ? "<?php echo l10n('N/A');?>
" : resultLines[0])
}

function showAllLines() {
    let lines =  $(".line");
    for (let index = 1; index < lines.length; index++) {
        $("#" + lines[index].id).show();
    }

    $("#-1").hide();
}

function setCreationDate(startDate, endDate) {
    $(".start-date").html(startDate)

    $(".end-date").html(endDate)
}

$(document).ready(function () {
    $('select').on('change', function (user) {
        if ($(".selectize-input").hasClass("full")) {
          $(".line").hide();
          $(".uid-" + $(".selectize-input .item").data("value")).show();
        }
    });
});

<?php $_block_repeat=false;
echo $_block_plugin1->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<div class="container"> 

    <div class="activity-header">
        <div class="select-user">
            <span class="select-user-title"> <?php echo l10n('Selected user');?>
 </span>
            
            <select class="user-selecter" placeholder="<?php echo l10n('none');?>
" single style="width:250px; height: 10px;">
            </select>
            
            <span class="icon-cancel cancel-icon"> </span>

        </div>
        <div class="acivity-time">
            <span class="acivity-time-text"> <?php echo l10n('Activity time from');?>
</span>
            <span class="start-date">
                <span class="icon-spin6 animate-spin"></span>
            </span>
            <span class="acivity-time-text"> <?php echo l10n('to');?>
</span>
            <span class="end-date">
                <span class="icon-spin6 animate-spin"></span>
            </span>
        </div>
        <a class="download_csv tiptip" title="<?php echo l10n('Download all activities');?>
" href="admin.php?page=user_activity&type=download_logs"> 
            <i class="icon-download"> </i>
        </a>
    </div>



    <div class="tab-title">
        <div class="action-title">
            <?php echo l10n('Action');?>

        </div>

        <div class="date-title">
            <?php echo l10n('Date');?>

        </div>

        <div class="user-title">
            <?php echo l10n('User');?>

        </div>

        <div class="detail-title">
            <?php echo l10n('Details');?>

        </div>
    </div>


    <div class="tab">
    <div class="loading"> 
        <span class="icon-spin6 animate-spin"> </span>
    </div>
        <div class="line hide" id="-1">
            <div class="action-section">
                <div class="action-type">
                    <span class="action-icon"></span>
                    <span class="action-name"> Edit </span>
                </div>
                <div class="action-infos">
                    <span class="action-infos-test"> T </span>
                </div>
            </div>

            <div class="date-section">
                <span class="icon-clock"> </span>
                <span class="date-day">1 Janvier 1970</span>
                <span class="date-hour">a 00:00</span>
            </div> 

            <div class="user-section">
                <div class="user-pic">
                </div>
                <div class="user-name">
                    Username
                </div>
            </div>

            <div class="detail-section">
                <div class="detail-item detail-item-1">
                    detail 1
                </div>
                <div class=" detail-item detail-item-2">
                    detail 2
                </div>
                <div class="detail-item detail-item-3">
                    detail 3
                </div>
            </div>
        </div>
    </div>
</div>

<style>

.container {
    padding: 0 30px;
}

.container,
.tab {
    display: flex;
    flex-direction: column;
}

.tab-title {
    display: flex;
    flex-direction: row;
}

.hide {
    display: none !important;
}

.tab-title div {
    text-align: left;
    font-size: 1.1em;
    font-weight: bold;

    margin: 0 20px 10px 0px;

    color: #9e9e9e;

    padding-bottom: 5px;
}

.tab-title div:first-child {
    margin: 0 0 10px 35px;
}

.tab-title .action-title, 
.line .action-section {
    min-width: 320px;
    max-width: 340px;
}
.tab-title .action-title {
    min-width: 298px !important;
}

.tab-title .date-title, 
.line .date-section {
    min-width: 280px;
    max-width: 300px;
}

.tab-title .user-title, 
.line .user-section {
    min-width: 200px;
    max-width: 250px;
}


.line .action-section,
.line .date-section,
.line .user-section,
.tab-title .action-title,
.tab-title .date-title,
.tab-title .user-title {
    text-align: left;
    }

.line .action-section,
.line .date-section,
.line .user-section {
    margin: 0 20px 0 0;
}

.line .detail-section,
.tab-title .detail-title {
    display: flex;
    flex-grow: 1;
    margin-right: 0;
}

.action-section {
    display: flex;
    flex-direction: row;
    align-items: center;
}

.action-type {
    margin: 0 10px 0 15px;
    padding: 3px 10px;
    border-radius: 20px;

    white-space: nowrap;
}

.action-infos {
    display: flex;
    flex-direction: row;
}

.action-infos span {
    margin-right: 5px;
}

.date-section .date-day {
    font-weight: bold;
}

.user-section {
    display: flex;
    flex-direction: row;
    align-items: center;
}

.user-section .user-pic {
    width: 30px;
    height: 30px;

    min-width: 30px;

    border-radius: 50%;

    margin-right: 10px;

    display: flex;

    justify-content: center;
    align-items: center;

    font-weight: 600;
    font-size: 17px;
}

.user-section .user-name {
    font-weight: bold;
}

/* Activity Header */

.activity-header {
    display: flex;
    flex-direction: row;

    align-items: center;

    height: 100px;
    width: 100%;
}

.select-user span {
    font-size: 15px;
    font-weight: bold;

    margin-right: 20px;
}

.acivity-time {
    margin: 0 25px;
}

.user-selecter {
    width: 150px;
}


/* Selectize */
.selectize-control.single.user-selecter {
    height: 30px;
}

.selectize-control.single .selectize-input {
    height: 30px;
    padding: 0 10px;

    display: flex;
    align-items: center;
    justify-content: left;
}

.selectize-input {
    text-align: left;
}

.selectize-control.single .selectize-input input{
    height: 30px;
}

.selectize-dropdown {
    text-align: left;
}

.cancel-icon {
    margin: 0 0 0 10px !important;

    cursor: pointer;
}

.loading {
    font-size: 25px;
}

.action-section::before {
    margin: 0 -5px 0 10px;
    opacity: 0.6;
}
</style><?php }
}
