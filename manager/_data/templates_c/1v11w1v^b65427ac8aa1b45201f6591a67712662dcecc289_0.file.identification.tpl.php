<?php
/* Smarty version 3.1.39, created on 2022-07-19 12:47:06
  from '/home/dosingenierias/proyectos.dosingenierias.com/manager/themes/smartpocket/template/identification.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d6e00a8159d8_81595179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b65427ac8aa1b45201f6591a67712662dcecc289' => 
    array (
      0 => '/home/dosingenierias/proyectos.dosingenierias.com/manager/themes/smartpocket/template/identification.tpl',
      1 => 1656623894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:infos_errors.tpl' => 1,
  ),
),false)) {
function content_62d6e00a8159d8_81595179 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:infos_errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div data-role="content">
<h3><?php echo l10n('Identification');?>
</h3>
<form action="<?php echo $_smarty_tpl->tpl_vars['F_LOGIN_ACTION']->value;?>
" method="post" name="login_form" class="properties">

  <div data-role="fieldcontain">
  <label for="username"><?php echo l10n('Username');?>
</label>
  <input type="text" name="username" id="username">
  </div>
    

  <div data-role="fieldcontain">
  <label for="password"><?php echo l10n('Password');?>
</label>
  <input type="password" name="password" id="password" value="">
  </div>

<?php if ($_smarty_tpl->tpl_vars['authorize_remembering']->value) {?>
  <div data-role="fieldcontain">
  <label for="remember_me"><?php echo l10n('Auto login');?>
</label>
  <input type="checkbox" name="remember_me" id="remember_me" value="1">
  </div>
<?php }?>
  <div data-role="fieldcontain">
    <input type="hidden" name="redirect" value="<?php echo urlencode($_smarty_tpl->tpl_vars['U_REDIRECT']->value);?>
">
    <input type="submit" name="login" value="<?php echo l10n('Submit');?>
">
  </div>

</form>

	<div data-role="fieldcontain" style="margin-top:2em">
<?php if ((isset($_smarty_tpl->tpl_vars['U_LOST_PASSWORD']->value))) {?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['U_LOST_PASSWORD']->value;?>
" data-role="button"><?php echo l10n('Forgot your password?');?>
</a>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['U_REGISTER']->value))) {?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['U_REGISTER']->value;?>
" data-role="button"><?php echo l10n('Register');?>
</a>
<?php }?>

	</div>
</div>
<?php }
}
