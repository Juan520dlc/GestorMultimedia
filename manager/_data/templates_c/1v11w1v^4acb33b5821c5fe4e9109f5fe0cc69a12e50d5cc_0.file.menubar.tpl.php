<?php
/* Smarty version 3.1.39, created on 2022-07-19 00:45:53
  from '/home/dosingenierias/proyectos.dosingenierias.com/manager/themes/smartpocket/template/menubar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d6370184a889_76362158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4acb33b5821c5fe4e9109f5fe0cc69a12e50d5cc' => 
    array (
      0 => '/home/dosingenierias/proyectos.dosingenierias.com/manager/themes/smartpocket/template/menubar.tpl',
      1 => 1656623894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d6370184a889_76362158 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/dosingenierias/proyectos.dosingenierias.com/manager/include/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<ul data-role="listview">
  <li data-icon="delete"><a href="#menubar" data-rel="close"><?php echo l10n('Close');?>
</a></li>
</ul>
<?php if (!empty($_smarty_tpl->tpl_vars['blocks']->value)) {?>
<div data-role="collapsible-set" data-inset="false">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blocks']->value, 'block', false, 'id');
$_smarty_tpl->tpl_vars['block']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->do_else = false;
?>
		<div data-role="collapsible" data-inset="false" data-icon="false">
<?php if (!empty($_smarty_tpl->tpl_vars['block']->value->template)) {
ob_start();
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['block']->value->template, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->assign(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'get_extent' ][ 0 ], array( 'the_block',$_smarty_tpl->tpl_vars['id']->value )), ob_get_clean());
?>
    <?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['the_block']->value,'dt','h3'),'<dd>',''),'</dd>','');?>

<?php } else { ?>
		<?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['block']->value->raw_content,'dt','h3'),'<dd>',''),'</dd>','');?>

<?php }?>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }?>
<br>
<ul data-role="listview">
  <li data-role="list-divider"><?php echo l10n('View in');?>
</li>
<?php if ((isset($_smarty_tpl->tpl_vars['TOGGLE_MOBILE_THEME_URL']->value))) {?>
  <li><a href="<?php echo $_smarty_tpl->tpl_vars['TOGGLE_MOBILE_THEME_URL']->value;?>
"><?php echo l10n('Desktop');?>
</a></li>
<?php }?>
</ul>
<?php }
}
