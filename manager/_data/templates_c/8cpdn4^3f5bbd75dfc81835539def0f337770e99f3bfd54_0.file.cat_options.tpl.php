<?php
/* Smarty version 3.1.39, created on 2022-07-19 21:59:44
  from '/home/dosingenierias/proyectos.dosingenierias.com/manager/admin/themes/default/template/cat_options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d761909521b0_56797875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f5bbd75dfc81835539def0f337770e99f3bfd54' => 
    array (
      0 => '/home/dosingenierias/proyectos.dosingenierias.com/manager/admin/themes/default/template/cat_options.tpl',
      1 => 1656623876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d761909521b0_56797875 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="titrePage">
  <h2><?php echo l10n('Properties');?>
 <?php echo $_smarty_tpl->tpl_vars['TABSHEET_TITLE']->value;?>
</h2>
</div>

<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['F_ACTION']->value;?>
" id="cat_options">
  <fieldset>
    <legend><?php echo $_smarty_tpl->tpl_vars['L_SECTION']->value;?>
</legend>
    <?php echo $_smarty_tpl->tpl_vars['DOUBLE_SELECT']->value;?>

  </fieldset>
<input type="hidden" name="pwg_token" value="<?php echo $_smarty_tpl->tpl_vars['PWG_TOKEN']->value;?>
">
</form>

<?php }
}
