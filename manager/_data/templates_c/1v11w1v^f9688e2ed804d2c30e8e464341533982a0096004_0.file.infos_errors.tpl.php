<?php
/* Smarty version 3.1.39, created on 2022-07-19 12:47:06
  from '/home/dosingenierias/proyectos.dosingenierias.com/manager/themes/smartpocket/template/infos_errors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d6e00a823c72_20611578',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9688e2ed804d2c30e8e464341533982a0096004' => 
    array (
      0 => '/home/dosingenierias/proyectos.dosingenierias.com/manager/themes/smartpocket/template/infos_errors.tpl',
      1 => 1656623894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d6e00a823c72_20611578 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['errors']->value))) {?>
<div class="ui-bar ui-bar-e errors">
  <h3><?php echo l10n('Error');?>
</h3>
	<div><a href="#" data-role="button" data-icon="delete" data-iconpos="notext" class="close-button">Button</a></div>
	<p><?php echo implode('<br>',$_smarty_tpl->tpl_vars['errors']->value);?>
</p>
</div>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['infos']->value)) {?>
<div class="ui-bar ui-bar-b infos">
  <h3><?php echo l10n('Info');?>
</h3>
	<div><a href="#" data-role="button" data-icon="delete" data-iconpos="notext" class="close-button">Button</a></div>
	<p><?php echo implode('<br>',$_smarty_tpl->tpl_vars['infos']->value);?>
</p>
</div>
<?php }?>

<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin1->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
$(document).ready(function () {
  $('.close-button').click(function() {
    $(this).parents('.ui-bar').remove();
  });
});
<?php $_block_repeat=false;
echo $_block_plugin1->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
