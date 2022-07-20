<?php
/* Smarty version 3.1.39, created on 2022-07-19 00:45:53
  from '/home/dosingenierias/proyectos.dosingenierias.com/manager/themes/smartpocket/template/menubar_identification.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d63701869164_25430367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e77ba99167159adfc5508d72e075f464c21857a4' => 
    array (
      0 => '/home/dosingenierias/proyectos.dosingenierias.com/manager/themes/smartpocket/template/menubar_identification.tpl',
      1 => 1656623894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d63701869164_25430367 (Smarty_Internal_Template $_smarty_tpl) {
?><h3><?php echo l10n('Identification');?>
</h3>
<ul data-role="listview">
  <?php if ((isset($_smarty_tpl->tpl_vars['U_REGISTER']->value))) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['U_REGISTER']->value;?>
"><?php echo l10n('Register');?>
</a></li><?php }?>
  <?php if ((isset($_smarty_tpl->tpl_vars['U_LOGIN']->value))) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['U_LOGIN']->value;?>
"><?php echo l10n('Login');?>
</a></li><?php }?>
  <?php if ((isset($_smarty_tpl->tpl_vars['U_LOGOUT']->value))) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['U_LOGOUT']->value;?>
"><?php echo l10n('Logout');?>
</a></li><?php }?>
  <?php if ((isset($_smarty_tpl->tpl_vars['U_PROFILE']->value))) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['U_PROFILE']->value;?>
"><?php echo l10n('Customize');?>
</a></li><?php }?>
  <?php if ((isset($_smarty_tpl->tpl_vars['U_ADMIN']->value))) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['U_ADMIN']->value;?>
"><?php echo l10n('Administration');?>
</a></li><?php }?>
</ul>
<?php }
}
