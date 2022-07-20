<?php
/* Smarty version 3.1.39, created on 2022-07-19 22:01:27
  from '/home/dosingenierias/proyectos.dosingenierias.com/manager/admin/themes/default/template/permalinks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d761f7852109_80626375',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cf58b9e11c2099e8b57de74508402e9285d2d06' => 
    array (
      0 => '/home/dosingenierias/proyectos.dosingenierias.com/manager/admin/themes/default/template/permalinks.tpl',
      1 => 1656623876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d761f7852109_80626375 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/dosingenierias/proyectos.dosingenierias.com/manager/include/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),));
$_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>'jquery.ui.sortable'));
$_block_repeat=true;
echo $_block_plugin1->block_footer_script(array('require'=>'jquery.ui.sortable'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
jQuery(document).ready(function(){
  jQuery("#addPermalinkOpen").click(function(){
    jQuery("#addPermalink").show();
    jQuery("#showAddPermalink").hide();
  });

  jQuery("#addPermalinkClose").click(function(){
    jQuery("#addPermalink").hide();
    jQuery("#showAddPermalink").show();
  });
});
<?php $_block_repeat=false;
echo $_block_plugin1->block_footer_script(array('require'=>'jquery.ui.sortable'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


<style>
#showAddPermalink {text-align:left;margin-left:1em;margin-top:0;}
form fieldset p {margin:0 0 1em 0;}
form fieldset p.actionButtons {margin-bottom:0}
</style>


<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'block_html_style'))) {
throw new SmartyException('block tag \'html_style\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('html_style', array());
$_block_repeat=true;
echo $_block_plugin2->block_html_style(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
[name="permalink"] {
  width : 100%;
  max-width : 600px;
}
<?php $_block_repeat=false;
echo $_block_plugin2->block_html_style(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<div class="titrePage">
  <h2><?php echo l10n('Permalinks');?>
</h2>
</div>

<p id="showAddPermalink"><a href="#" id="addPermalinkOpen"><?php echo l10n('Add/delete a permalink');?>
</a></p>

<form method="post" action="" id="addPermalink" style="display:none">
<fieldset>
  <legend><?php echo l10n('Add/delete a permalink');?>
</legend>
  <p>
    <strong><?php echo l10n('Album');?>
</strong>
    <br>
    <select name="cat_id">
      <option value="0">------</option>
      <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['categories']->value,'selected'=>$_smarty_tpl->tpl_vars['categories_selected']->value),$_smarty_tpl);?>

    </select>
  </p>

  <p>
    <strong><?php echo l10n('Permalink');?>
</strong>
    <br><input name="permalink">
  </p>

  <p>
    <label><input type="checkbox" name="save" checked="checked"> <strong><?php echo l10n('Save to permalink history');?>
</strong></label>
  </p>

  <p class="actionButtons">
    <input type="submit" class="submit" name="set_permalink" value="<?php echo l10n('Submit');?>
">
    <a href="#" id="addPermalinkClose"><?php echo l10n('Cancel');?>
</a>
  </p>
</fieldset>
<input type="hidden" name="pwg_token" value="<?php echo $_smarty_tpl->tpl_vars['PWG_TOKEN']->value;?>
">
</form>

<fieldset>
  <legend><span class="icon-lock icon-blue"></span><?php echo l10n('Permalinks');?>
</legend>
<table class="table2" style="margin:0">
	<tr class="throw">
		<td>Id <?php echo $_smarty_tpl->tpl_vars['SORT_ID']->value;?>
</td>
		<td><?php echo l10n('Album');?>
 <?php echo $_smarty_tpl->tpl_vars['SORT_NAME']->value;?>
</td>
		<td><?php echo l10n('Permalink');?>
 <?php echo $_smarty_tpl->tpl_vars['SORT_PERMALINK']->value;?>
</td>
	</tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['permalinks']->value, 'permalink', false, NULL, 'permalink_loop', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['permalink']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['permalink']->value) {
$_smarty_tpl->tpl_vars['permalink']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_permalink_loop']->value['index']++;
?>
	<tr class="<?php if ((1 & (isset($_smarty_tpl->tpl_vars['__smarty_foreach_permalink_loop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_permalink_loop']->value['index'] : null))) {?>row1<?php } else { ?>row2<?php }?>" style="line-height:1.5em;">
		<td style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['permalink']->value['id'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['permalink']->value['name'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['permalink']->value['permalink'];?>
</td>
	</tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
</fieldset>

<fieldset>
  <legend><span class="icon-lock icon-red"></span><?php echo l10n('Permalink history');?>
 <a name="old_permalinks"></a></legend>
<table class="table2" style="margin:0">
	<tr class="throw">
		<td>Id <?php echo $_smarty_tpl->tpl_vars['SORT_OLD_CAT_ID']->value;?>
</td>
		<td><?php echo l10n('Album');?>
</td>
		<td><?php echo l10n('Permalink');?>
 <?php echo $_smarty_tpl->tpl_vars['SORT_OLD_PERMALINK']->value;?>
</td>
		<td><?php echo l10n('Deleted on');?>
 <?php echo $_smarty_tpl->tpl_vars['SORT_OLD_DATE_DELETED']->value;?>
</td>
		<td><?php echo l10n('Last hit');?>
 <?php echo $_smarty_tpl->tpl_vars['SORT_OLD_LAST_HIT']->value;?>
</td>
		<td><?php echo l10n('Hit');?>
 <?php echo $_smarty_tpl->tpl_vars['SORT_OLD_HIT']->value;?>
</td>
		<td style="width:5px;"></td>
	</tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['deleted_permalinks']->value, 'permalink');
$_smarty_tpl->tpl_vars['permalink']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['permalink']->value) {
$_smarty_tpl->tpl_vars['permalink']->do_else = false;
?>
	<tr style="line-height:1.5em;">
		<td style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['permalink']->value['cat_id'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['permalink']->value['name'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['permalink']->value['permalink'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['permalink']->value['date_deleted'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['permalink']->value['last_hit'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['permalink']->value['hit'];?>
</td>
		<td><a href="<?php echo $_smarty_tpl->tpl_vars['permalink']->value['U_DELETE'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;
echo $_smarty_tpl->tpl_vars['themeconf']->value['admin_icon_dir'];?>
/delete.png" alt="[<?php echo l10n('Delete');?>
]"></a></td>
	</tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
</fieldset>
<?php }
}
