<?php
/* Smarty version 3.1.39, created on 2022-07-19 00:14:31
  from '/home/dosingenierias/proyectos.dosingenierias.com/manager/themes/modus/css/menuh.css.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d62fa737c331_01349340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e40fd5eb9f25ba18e38a5586ac0c4d55828e7aac' => 
    array (
      0 => '/home/dosingenierias/proyectos.dosingenierias.com/manager/themes/modus/css/menuh.css.tpl',
      1 => 1656689242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d62fa737c331_01349340 (Smarty_Internal_Template $_smarty_tpl) {
?>#menubar UL {
	list-style: none;
	padding: 0 0 0 2px;
	margin: 0; /*various default user agent css*/
}

<?php if (!(isset($_smarty_tpl->tpl_vars['loaded_plugins']->value['rv_menutree']))) {?>
#mbCategories UL {
	list-style-type: square;
	padding-left: 8px;
}
<?php }?>

#menubar LI.selected>A {
	font-weight: bold;
}

#menubar .menuInfoCat {
	padding:0px 5px;
	font-size: 90%;
	border-radius: 20px;
	font-weight: bold;
	background-color: <?php echo $_smarty_tpl->tpl_vars['skin']->value['menubar']['badgeBackgroundColor'];?>
;
	color: <?php echo $_smarty_tpl->tpl_vars['skin']->value['menubar']['badgeColor'];?>
;
}

#menubar .menuInfoCat::before {
  content:'[';
}
#menubar .menuInfoCat::after {
  content:']';
}

#menubar .menuInfoCatByChild {
	font-size: 80%;
	font-style: italic;
}

#menubar INPUT {
	text-indent: 2px;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

#quickconnect FIELDSET {
	margin: 0 5px 0 0;
	padding: 0 5px;
}


#menuTagCloud {
	text-align: center;
}

#menuTagCloud A {
	white-space: nowrap;
	margin-right: 5px;
}





/* Horizontal menu */
#menubar {
	margin: 0;
	width: 100%;
	padding: 5px 0 8px;
	background-color: <?php echo $_smarty_tpl->tpl_vars['skin']->value['menubar']['backgroundColor'];?>
;
<?php if (!empty($_smarty_tpl->tpl_vars['skin']->value['menubar']['gradient'])) {?>
	<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'cssGradient' ][ 0 ], array( $_smarty_tpl->tpl_vars['skin']->value['menubar']['gradient'] ));?>

<?php }
if (!empty($_smarty_tpl->tpl_vars['skin']->value['menubar']['color'])) {?>
	color: <?php echo $_smarty_tpl->tpl_vars['skin']->value['menubar']['color'];?>
;
<?php }?>
}

<?php if (!empty($_smarty_tpl->tpl_vars['skin']->value['menubar']['link']['color'])) {?>
#menubar DT A {
	color: <?php echo $_smarty_tpl->tpl_vars['skin']->value['menubar']['link']['color'];?>
;
}
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['skin']->value['menubar']['linkHover']['color'])) {?>
#menubar DT A:hover {
	color: <?php echo $_smarty_tpl->tpl_vars['skin']->value['menubar']['linkHover']['color'];?>
;
}
<?php }?>

#menubar DL {
	display: inline;
	float: left;
	margin: 0 0.25em;
	padding: 0 0.25em;
}

#menubar DT {
	display: inline;
	cursor: pointer;
	font-size: 120%;
	font-weight: bold;
	text-align: center;
}

#menubar DD {
	display: none;
	position: absolute;
	margin: 0;
	padding: 10px;
	line-height: 150%;
	max-width: 300px;
	box-shadow: 2px 2px 5px gray;
	background-color: <?php echo $_smarty_tpl->tpl_vars['skin']->value['dropdowns']['backgroundColor'];?>
;
<?php if (!empty($_smarty_tpl->tpl_vars['skin']->value['menubar']['color'])) {?>
	color: <?php echo $_smarty_tpl->tpl_vars['skin']->value['BODY']['color'];?>
;
<?php }?>
}

#menubar DD A {
		font-size: 14px;
}


#menubar DL:hover > DD {
	display: block;
	z-index: 5;
}

#content {
	clear: both;
}

#qsearchInput {
	width: 13%;
	max-width: 180px;
}




#menuSwitcher {
	display: none;
}

@media screen and (max-width:980px) {
	#mbProfile {
		display: none !important;
	}
	#mbTags {
		display: none !important;
	}
}

@media screen and (max-width:840px) {
	#mbMostVisited {
		display: none !important;
	}
}

@media screen and (max-width:640px) {
	#mbBestRated {
		display: none !important;
	}

	#menuSwitcher {
		display: block;
		position: absolute;
		padding-top: 2px;
<?php if (!empty($_smarty_tpl->tpl_vars['skin']->value['pageTitle']['link']['color'])) {?>
		color: <?php echo $_smarty_tpl->tpl_vars['skin']->value['pageTitle']['link']['color'];?>
;/*switcher is outside page title so not inherited*/
<?php }?>
	}

<?php if (!empty($_smarty_tpl->tpl_vars['skin']->value['pageTitle']['linkHover']['color'])) {?>
	#menuSwitcher:hover {
		color: <?php echo $_smarty_tpl->tpl_vars['skin']->value['pageTitle']['linkHover']['color'];?>
;/*switcher is outside page title so not inherited*/
	}
<?php }?>

	.contentWithMenu .titrePage H2,
	.contentWithMenu .browsePath {
		text-indent: 25px; /*make space for menu switcher*/
		letter-spacing: -0.5px;
	}

	.titrePage H2:first-line,
	.browsePath:first-line {
		line-height: 28px; /*long bread crumbs go on second line and would run into menu switcher*/
	}

	#menubar {
		display: none;
		position: absolute;
		width: auto;
		box-shadow: 2px 2px 5px gray;
		opacity: 0.95;
		z-index: 5;
		min-width: 40%;
<?php if ($_smarty_tpl->tpl_vars['skin']->value['menubar']['backgroundColor'] != $_smarty_tpl->tpl_vars['skin']->value['dropdowns']['backgroundColor']) {?>
		background-color: <?php echo $_smarty_tpl->tpl_vars['skin']->value['dropdowns']['backgroundColor'];?>
;
<?php }
if (!empty($_smarty_tpl->tpl_vars['skin']->value['menubar']['gradient'])) {?>
		background-image: none;
<?php }
if (!empty($_smarty_tpl->tpl_vars['skin']->value['menubar']['color'])) {?>
		color: inherit;
<?php }?>
	}

<?php if (!empty($_smarty_tpl->tpl_vars['skin']->value['menubar']['link']['color'])) {?>
	#menubar DT A {
			color: <?php echo $_smarty_tpl->tpl_vars['skin']->value['A']['color'];?>
; /*update link color because background is dropdowns; don't care about hover as this is mobile probably...*/
	}
<?php }?>

	#menubar DL {
		display: block;
		float: none;
		margin-top: 4px;
		margin-bottom: 4px;
	}

	#menubar DT {
		display: block;
		text-align: left;
		font-size: 20px;
		font-weight: normal;
	}

	#menubar DL:hover > DD { /*reset large wifth hover effect*/
		display: none;
	}
	
	#menubar DD {
		position: static;
		box-shadow: none; /*reset std*/
		padding-top: 5px; /*reduce from standard*/
	}

	#qsearchInput {
		width: 100%;
		max-width: none;
		margin: 5px 0;
	}

}
<?php }
}
