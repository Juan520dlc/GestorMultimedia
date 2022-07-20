<?php
/* Smarty version 3.1.39, created on 2022-07-19 00:15:27
  from '/home/dosingenierias/proyectos.dosingenierias.com/manager/themes/default/template/identification.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d62fdf633957_74997824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82314a3f4cd90dad8f6f6910293f6fcb7900a035' => 
    array (
      0 => '/home/dosingenierias/proyectos.dosingenierias.com/manager/themes/default/template/identification.tpl',
      1 => 1656623876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:infos_errors.tpl' => 1,
  ),
),false)) {
function content_62d62fdf633957_74997824 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['MENUBAR']->value))) {
echo $_smarty_tpl->tpl_vars['MENUBAR']->value;
}?>
<div id="content" class="content<?php if ((isset($_smarty_tpl->tpl_vars['MENUBAR']->value))) {?> contentWithMenu<?php }?>">

<div class="titrePage">
	<ul class="categoryActions">
	</ul>
	<h2><a href="<?php echo $_smarty_tpl->tpl_vars['U_HOME']->value;?>
"><?php echo l10n('Home');?>
</a><?php echo $_smarty_tpl->tpl_vars['LEVEL_SEPARATOR']->value;
echo l10n('Identification');?>
</h2>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:infos_errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form action="<?php echo $_smarty_tpl->tpl_vars['F_LOGIN_ACTION']->value;?>
" method="post" name="login_form" class="properties">
  <fieldset>
    <legend><?php echo l10n('Connection settings');?>
</legend>

    <ul>
      <li>
        <span class="property">
          <label for="username"><?php echo l10n('Username');?>
</label>
        </span>
        <input tabindex="1" class="login" type="text" name="username" id="username" size="25">
      </li>

      <li>
        <span class="property">
          <label for="password"><?php echo l10n('Password');?>
</label>
        </span>
        <input tabindex="2" class="login" type="password" name="password" id="password" size="25">
      </li>

<?php if ($_smarty_tpl->tpl_vars['authorize_remembering']->value) {?>
      <li>
        <span class="property">
          <label for="remember_me"><?php echo l10n('Auto login');?>
</label>
        </span>
        <input tabindex="3" type="checkbox" name="remember_me" id="remember_me" value="1">
      </li>
<?php }?>
    </ul>
  </fieldset>

  <p>
    <input type="hidden" name="redirect" value="<?php echo urlencode($_smarty_tpl->tpl_vars['U_REDIRECT']->value);?>
">
    <input tabindex="4" type="submit" name="login" value="<?php echo l10n('Submit');?>
">
  </p>

	<p>
<?php if ((isset($_smarty_tpl->tpl_vars['U_REGISTER']->value))) {?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['U_REGISTER']->value;?>
" title="<?php echo l10n('Register');?>
" class="pwg-state-default pwg-button">
			<span class="pwg-icon pwg-icon-register">&nbsp;</span><span><?php echo l10n('Register');?>
</span>
		</a>
<?php }
if ((isset($_smarty_tpl->tpl_vars['U_LOST_PASSWORD']->value))) {?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['U_LOST_PASSWORD']->value;?>
" title="<?php echo l10n('Forgot your password?');?>
" class="pwg-state-default pwg-button">
			<span class="pwg-icon pwg-icon-lost-password">&nbsp;</span><span><?php echo l10n('Forgot your password?');?>
</span>
		</a>
<?php }?>
	</p>

</form>

<?php echo '<script'; ?>
 type="text/javascript"><!--
document.login_form.username.focus();
//--><?php echo '</script'; ?>
>

</div> <!-- content -->
<?php }
}
