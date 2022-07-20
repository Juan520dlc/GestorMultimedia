<?php
/* Smarty version 3.1.39, created on 2022-07-19 21:57:44
  from '/home/dosingenierias/proyectos.dosingenierias.com/manager/admin/themes/default/template/include/colorbox.inc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d761181f0a85_42594927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a08626591fd3515da0e97b6cc851ca7d2c922711' => 
    array (
      0 => '/home/dosingenierias/proyectos.dosingenierias.com/manager/admin/themes/default/template/include/colorbox.inc.tpl',
      1 => 1656623876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d761181f0a85_42594927 (Smarty_Internal_Template $_smarty_tpl) {
if (empty($_smarty_tpl->tpl_vars['load_mode']->value)) {
$_smarty_tpl->_assignInScope('load_mode', 'footer');
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.colorbox','load'=>$_smarty_tpl->tpl_vars['load_mode']->value,'require'=>'jquery','path'=>'themes/default/js/plugins/jquery.colorbox.min.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('id'=>'jquery.colorbox','path'=>"themes/default/js/plugins/colorbox/style2/colorbox.css"),$_smarty_tpl ) );?>

<?php }
}
