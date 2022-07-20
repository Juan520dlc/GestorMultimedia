<?php
/* Smarty version 3.1.39, created on 2022-07-19 00:15:27
  from '/home/dosingenierias/proyectos.dosingenierias.com/manager/themes/modus/template/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d62fdf395256_36490035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72ed1eb7c6b7889ddb31f557deb7e38d93442b04' => 
    array (
      0 => '/home/dosingenierias/proyectos.dosingenierias.com/manager/themes/modus/template/header.tpl',
      1 => 1656689242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d62fdf395256_36490035 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/dosingenierias/proyectos.dosingenierias.com/manager/include/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<!DOCTYPE html>
<html lang=<?php echo $_smarty_tpl->tpl_vars['lang_info']->value['code'];?>
 dir=<?php echo $_smarty_tpl->tpl_vars['lang_info']->value['direction'];?>
>
<head>
<title><?php if ($_smarty_tpl->tpl_vars['PAGE_TITLE']->value == l10n('Home')) {
echo $_smarty_tpl->tpl_vars['GALLERY_TITLE']->value;
} else {
echo $_smarty_tpl->tpl_vars['PAGE_TITLE']->value;
}?></title>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;
echo $_smarty_tpl->tpl_vars['themeconf']->value['icon_dir'];?>
/favicon.ico">
<link rel="stylesheet" type="text/css" href="themes/<?php echo $_smarty_tpl->tpl_vars['themeconf']->value['id'];?>
/css/open-sans/open-sans.css"> <!-- COMBINED_CSS --><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/".((string)$_smarty_tpl->tpl_vars['themeconf']->value['id'])."/css/base.css.tpl",'version'=>$_smarty_tpl->tpl_vars['MODUS_CSS_VERSION']->value,'template'=>true,'order'=>-10),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/".((string)$_smarty_tpl->tpl_vars['themeconf']->value['id'])."/css/iconfontello.css.tpl",'version'=>$_smarty_tpl->tpl_vars['MODUS_CSS_VERSION']->value,'template'=>true,'order'=>-10),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/".((string)$_smarty_tpl->tpl_vars['themeconf']->value['id'])."/css/menuh.css.tpl",'version'=>$_smarty_tpl->tpl_vars['MODUS_CSS_VERSION']->value,'template'=>true,'order'=>-10),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/".((string)$_smarty_tpl->tpl_vars['themeconf']->value['id'])."/css/index.css.tpl",'version'=>$_smarty_tpl->tpl_vars['MODUS_CSS_VERSION']->value,'template'=>true,'order'=>-10),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/".((string)$_smarty_tpl->tpl_vars['themeconf']->value['id'])."/css/picture.css.tpl",'version'=>$_smarty_tpl->tpl_vars['MODUS_CSS_VERSION']->value,'template'=>true,'order'=>-10),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/".((string)$_smarty_tpl->tpl_vars['themeconf']->value['id'])."/css/tags.css",'order'=>-10),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/".((string)$_smarty_tpl->tpl_vars['themeconf']->value['id'])."/css/print.css",'order'=>-10),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/".((string)$_smarty_tpl->tpl_vars['themeconf']->value['id'])."/css/plugin_compatibility.css",'order'=>-10),$_smarty_tpl ) );
if ((isset($_smarty_tpl->tpl_vars['MODUS_CSS_SKIN']->value))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/".((string)$_smarty_tpl->tpl_vars['themeconf']->value['id'])."/css/hf_base.css",'order'=>-10),$_smarty_tpl ) );?>
   <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/".((string)$_smarty_tpl->tpl_vars['themeconf']->value['id'])."/skins/".((string)$_smarty_tpl->tpl_vars['MODUS_CSS_SKIN']->value).".css",'order'=>-10),$_smarty_tpl ) );
}
if ((isset($_smarty_tpl->tpl_vars['U_PREFETCH']->value))) {?><link rel=prefetch href="<?php echo $_smarty_tpl->tpl_vars['U_PREFETCH']->value;?>
"><?php }
if ((isset($_smarty_tpl->tpl_vars['U_CANONICAL']->value))) {?><link rel=canonical href="<?php echo $_smarty_tpl->tpl_vars['U_CANONICAL']->value;?>
"><?php }
if (!empty($_smarty_tpl->tpl_vars['page_refresh']->value)) {?><meta http-equiv="refresh" content="<?php echo $_smarty_tpl->tpl_vars['page_refresh']->value['TIME'];?>
;url=<?php echo $_smarty_tpl->tpl_vars['page_refresh']->value['U_REFRESH'];?>
"><?php }
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_combined_scripts'][0], array( array('load'=>'header'),$_smarty_tpl ) );?>

<?php if (empty($_SERVER['HTTP_USER_AGENT']) || strpos($_SERVER['HTTP_USER_AGENT'],'MSIE')) {?>
<meta http-equiv=x-ua-compatible content="IE=edge">
<!--[if lt IE 9]><?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['themeconf']->value['id'];?>
/html5shiv.js"><?php echo '</script'; ?>
><![endif]-->
<?php }?>
<meta name=viewport content="width=device-width,initial-scale=1">
<?php if (!empty($_smarty_tpl->tpl_vars['head_elements']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['head_elements']->value, 'elt');
$_smarty_tpl->tpl_vars['elt']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['elt']->value) {
$_smarty_tpl->tpl_vars['elt']->do_else = false;
echo $_smarty_tpl->tpl_vars['elt']->value;?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>

<meta name="generator" content="Piwigo (aka PWG), see piwigo.org">

<?php if ((isset($_smarty_tpl->tpl_vars['meta_ref']->value))) {
if ((isset($_smarty_tpl->tpl_vars['INFO_AUTHOR']->value))) {?>
<meta name="author" content="<?php echo smarty_modifier_replace(strip_tags($_smarty_tpl->tpl_vars['INFO_AUTHOR']->value),'"',' ');?>
">
<?php }
if ((isset($_smarty_tpl->tpl_vars['related_tags']->value))) {?>
<meta name="keywords" content="<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['related_tags']->value, 'tag', false, NULL, 'tag_loop', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_tag_loop']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_tag_loop']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_tag_loop']->value['index'];
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_tag_loop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_tag_loop']->value['first'] : null)) {?>, <?php }
echo $_smarty_tpl->tpl_vars['tag']->value['name'];
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>">
<?php }
if ((isset($_smarty_tpl->tpl_vars['COMMENT_IMG']->value))) {?>
<meta name="description" content="<?php echo smarty_modifier_replace(strip_tags($_smarty_tpl->tpl_vars['COMMENT_IMG']->value),'"',' ');
if ((isset($_smarty_tpl->tpl_vars['INFO_FILE']->value))) {?> - <?php echo $_smarty_tpl->tpl_vars['INFO_FILE']->value;
}?>">
<?php } else { ?>
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['PAGE_TITLE']->value;
if ((isset($_smarty_tpl->tpl_vars['INFO_FILE']->value))) {?> - <?php echo $_smarty_tpl->tpl_vars['INFO_FILE']->value;
}?>">
<?php }
}?>


</head>

<body id=<?php echo $_smarty_tpl->tpl_vars['BODY_ID']->value;
if (!empty($_smarty_tpl->tpl_vars['PAGE_BANNER']->value) && $_smarty_tpl->tpl_vars['MODUS_DISPLAY_PAGE_BANNER']->value) {?> class="modus-withPageBanner"<?php }?>>
<?php if (!empty($_smarty_tpl->tpl_vars['header_msgs']->value) || !empty($_smarty_tpl->tpl_vars['header_notes']->value)) {?>
<div class="header_msgs">
<?php if (!empty($_smarty_tpl->tpl_vars['header_msgs']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['header_msgs']->value, 'elt');
$_smarty_tpl->tpl_vars['elt']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['elt']->value) {
$_smarty_tpl->tpl_vars['elt']->do_else = false;
?>
	<p><?php echo $_smarty_tpl->tpl_vars['elt']->value;?>
</p>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
if (!empty($_smarty_tpl->tpl_vars['header_notes']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['header_notes']->value, 'elt');
$_smarty_tpl->tpl_vars['elt']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['elt']->value) {
$_smarty_tpl->tpl_vars['elt']->do_else = false;
?>
	<p><?php echo $_smarty_tpl->tpl_vars['elt']->value;?>
</p>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
</div>
<?php }
if (!empty($_smarty_tpl->tpl_vars['PAGE_BANNER']->value) && $_smarty_tpl->tpl_vars['MODUS_DISPLAY_PAGE_BANNER']->value) {?><div id="theHeader"><?php echo $_smarty_tpl->tpl_vars['PAGE_BANNER']->value;?>
</div><?php }
}
}
