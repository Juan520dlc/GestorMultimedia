<?php
/* Smarty version 3.1.39, created on 2022-07-19 21:43:17
  from '/home/dosingenierias/proyectos.dosingenierias.com/manager/themes/default/template/profile_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d75db5626eb7_55391345',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91d7d1773fafdd7aaa5f78d1806b3e799a89d681' => 
    array (
      0 => '/home/dosingenierias/proyectos.dosingenierias.com/manager/themes/default/template/profile_content.tpl',
      1 => 1656623876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d75db5626eb7_55391345 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/dosingenierias/proyectos.dosingenierias.com/manager/include/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),1=>array('file'=>'/home/dosingenierias/proyectos.dosingenierias.com/manager/include/smarty/libs/plugins/function.html_radios.php','function'=>'smarty_function_html_radios',),));
?>
<form method="post" name="profile" action="<?php echo $_smarty_tpl->tpl_vars['F_ACTION']->value;?>
" id="profile" class="properties">

  <fieldset>
    <legend><?php echo l10n('Registration');?>
</legend>
    <input type="hidden" name="redirect" value="<?php echo $_smarty_tpl->tpl_vars['REDIRECT']->value;?>
">
    <ul>
      <li>
        <span class="property"><?php echo l10n('Username');?>
</span>
        <?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>

      </li>
    <?php if (!$_smarty_tpl->tpl_vars['SPECIAL_USER']->value) {?>       <li>
        <span class="property">
          <label for="mail_address"><?php echo l10n('Email address');?>
</label>
        </span>
        <input type="text" name="mail_address" id="mail_address" value="<?php echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
">
      </li>
      <li>
        <span class="property">
          <label for="password"><?php echo l10n('Password');?>
</label>
        </span>
        <input type="password" name="password" id="password" value="">
      </li>
      <li>
        <span class="property">
          <label for="use_new_pwd"><?php echo l10n('New password');?>
</label>
        </span>
        <input type="password" name="use_new_pwd" id="use_new_pwd" value="">
      </li>
      <li>
        <span class="property">
          <label for="passwordConf"><?php echo l10n('Confirm Password');?>
</label>
        </span>
        <input type="password" name="passwordConf" id="passwordConf" value="">
      </li>
<?php }?>
    </ul>
  </fieldset>

<?php if ($_smarty_tpl->tpl_vars['ALLOW_USER_CUSTOMIZATION']->value) {?>
  <fieldset>
    <legend><?php echo l10n('Preferences');?>
</legend>

    <ul>
      <li>
        <span class="property">
          <label for="nb_image_page"><?php echo l10n('Number of photos per page');?>
</label>
        </span>
        <input type="text" size="4" maxlength="3" name="nb_image_page" id="nb_image_page" value="<?php echo $_smarty_tpl->tpl_vars['NB_IMAGE_PAGE']->value;?>
">
      </li>
      <li>
        <span class="property">
          <label for="template"><?php echo l10n('Theme');?>
</label>
        </span>
        <?php echo smarty_function_html_options(array('name'=>'theme','options'=>$_smarty_tpl->tpl_vars['template_options']->value,'selected'=>$_smarty_tpl->tpl_vars['template_selection']->value),$_smarty_tpl);?>

      </li>
      <li>
        <span class="property">
          <label for="Language"><?php echo l10n('Language');?>
</label>
        </span>
        <?php echo smarty_function_html_options(array('name'=>'language','options'=>$_smarty_tpl->tpl_vars['language_options']->value,'selected'=>$_smarty_tpl->tpl_vars['language_selection']->value),$_smarty_tpl);?>

      </li>
      <li>
        <span class="property">
          <label for="Recent period"><?php echo l10n('Recent period');?>
</label>
        </span>
        <input type="text" size="3" maxlength="2" name="recent_period" id="recent_period" value="<?php echo $_smarty_tpl->tpl_vars['RECENT_PERIOD']->value;?>
">
      </li>
      <li>
        <span class="property"><?php echo l10n('Expand all albums');?>
</span>
        <?php echo smarty_function_html_radios(array('name'=>'expand','options'=>$_smarty_tpl->tpl_vars['radio_options']->value,'selected'=>$_smarty_tpl->tpl_vars['EXPAND']->value),$_smarty_tpl);?>

      </li>
<?php if ($_smarty_tpl->tpl_vars['ACTIVATE_COMMENTS']->value) {?>
      <li>
        <span class="property"><?php echo l10n('Show number of comments');?>
</span>
        <?php echo smarty_function_html_radios(array('name'=>'show_nb_comments','options'=>$_smarty_tpl->tpl_vars['radio_options']->value,'selected'=>$_smarty_tpl->tpl_vars['NB_COMMENTS']->value),$_smarty_tpl);?>

      </li>
<?php }?>
      <li>
        <span class="property"><?php echo l10n('Show number of hits');?>
</span>
        <?php echo smarty_function_html_radios(array('name'=>'show_nb_hits','options'=>$_smarty_tpl->tpl_vars['radio_options']->value,'selected'=>$_smarty_tpl->tpl_vars['NB_HITS']->value),$_smarty_tpl);?>

      </li>
    </ul>
  </fieldset>
<?php }?>

  <p class="bottomButtons">
    <input type="hidden" name="pwg_token" value="<?php echo $_smarty_tpl->tpl_vars['PWG_TOKEN']->value;?>
">
    <input class="submit" type="submit" name="validate" value="<?php echo l10n('Submit');?>
">
    <input class="submit" type="reset" name="reset" value="<?php echo l10n('Reset');?>
">
<?php if ($_smarty_tpl->tpl_vars['ALLOW_USER_CUSTOMIZATION']->value) {?>
    <input class="submit" type="submit" name="reset_to_default" value="<?php echo l10n('Reset to default values');?>
">
<?php }?>
  </p>

</form>
<?php }
}
