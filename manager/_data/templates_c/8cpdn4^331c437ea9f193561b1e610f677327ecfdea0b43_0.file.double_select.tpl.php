<?php
/* Smarty version 3.1.39, created on 2022-07-19 21:59:44
  from '/home/dosingenierias/proyectos.dosingenierias.com/manager/admin/themes/default/template/double_select.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d761909494b0_78795100',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '331c437ea9f193561b1e610f677327ecfdea0b43' => 
    array (
      0 => '/home/dosingenierias/proyectos.dosingenierias.com/manager/admin/themes/default/template/double_select.tpl',
      1 => 1656623876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d761909494b0_78795100 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/dosingenierias/proyectos.dosingenierias.com/manager/include/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),));
?>
<table class="doubleSelect">
  <tr>
    <td>
      <h3><?php echo $_smarty_tpl->tpl_vars['L_CAT_OPTIONS_TRUE']->value;?>
</h3>
      <select class="categoryList" name="cat_true[]" multiple="multiple" size="30">
        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['category_option_true']->value,'selected'=>$_smarty_tpl->tpl_vars['category_option_true_selected']->value),$_smarty_tpl);?>

      </select>
      <p><input class="submit" type="submit" value="&raquo;" name="falsify" style="font-size:15px;"></p>
    </td>

    <td>
      <h3><?php echo $_smarty_tpl->tpl_vars['L_CAT_OPTIONS_FALSE']->value;?>
</h3>
      <select class="categoryList" name="cat_false[]" multiple="multiple" size="30">
        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['category_option_false']->value,'selected'=>$_smarty_tpl->tpl_vars['category_option_false_selected']->value),$_smarty_tpl);?>

      </select>
      <p><input class="submit" type="submit" value="&laquo;" name="trueify" style="font-size:15px;"></p>
    </td>
  </tr>
</table>
<?php }
}
