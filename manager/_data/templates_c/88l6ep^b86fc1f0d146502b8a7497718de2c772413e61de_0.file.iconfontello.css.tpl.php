<?php
/* Smarty version 3.1.39, created on 2022-07-19 00:14:31
  from '/home/dosingenierias/proyectos.dosingenierias.com/manager/themes/modus/css/iconfontello.css.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d62fa7368a33_96221090',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b86fc1f0d146502b8a7497718de2c772413e61de' => 
    array (
      0 => '/home/dosingenierias/proyectos.dosingenierias.com/manager/themes/modus/css/iconfontello.css.tpl',
      1 => 1656689242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d62fa7368a33_96221090 (Smarty_Internal_Template $_smarty_tpl) {
?>@import "fontello/css/modus.css";

A:hover .pwg-icon:before{
	text-decoration: none !important; /* IE 8,9*/
}

.pwg-icon {
<?php if ((isset($_smarty_tpl->tpl_vars['loaded_plugins']->value['language_switch'])) || (isset($_smarty_tpl->tpl_vars['loaded_plugins']->value['BatchDownloader']))) {?>
	display: inline-block;
<?php }?>
	font-size: 24px
}


.pwg-button-text{
	display:none;
}

.pwg-state-disabled .pwg-icon {
	opacity: .5;
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
	filter: alpha(opacity=50);
}

.pwg-button {
	display: inline-block;
	vertical-align: top;
	cursor:pointer;
}

.pwg-icon-slideshow:before { content: '\25b6';}
.pwg-icon-favorite-del:before { content: '\2661\2d'; letter-spacing: -2px}

<?php if ($_smarty_tpl->tpl_vars['conf']->value['index_posted_date_icon']) {
if ($_smarty_tpl->tpl_vars['conf']->value['index_created_date_icon']) {?>
.pwg-icon-calendar:before { content: '\f133'; }
.pwg-icon-camera-calendar:before { content: '\e70f'; }
<?php } else { ?>
.pwg-icon-calendar:before { content: '\f133'; }
<?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['loaded_plugins']->value['BatchDownloader']))) {?>
.batch-downloader-icon {
	width: 26px
}
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['loaded_plugins']->value['UserCollections']))) {?>
.user-collections-icon, .user-collections-share-icon, .user-collections-clear-icon, .user-collections-delete-icon, .user-collections-mail-icon {
	display: inline-block;
	height: 26px;
	width: 26px;
}
<?php }
}
}
