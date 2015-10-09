<?php /* Smarty version Smarty-3.1.18, created on 2015-10-07 10:28:34
         compiled from "views\competitionSchedule.tpl" */ ?>
<?php /*%%SmartyHeaderCode:238335614c94f168b50-68220058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fc1b75c85f55901991dbbf73e4eb0d9ff5992b0' => 
    array (
      0 => 'views\\competitionSchedule.tpl',
      1 => 1444206511,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '238335614c94f168b50-68220058',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5614c94f18d226_38138878',
  'variables' => 
  array (
    'result' => 0,
    'matches' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5614c94f18d226_38138878')) {function content_5614c94f18d226_38138878($_smarty_tpl) {?>
<!-- <div id="schedule">
<h2> Last match! </h2>
<h3> England </h3> <p> vs </p> <h3> New Zeeland </h3>
</div> -->
<p> See here a short rundown of England vs New Zeeland and New Zeeland vs Namibia.</p>
<div id="video"></div><iframe id="video" width="560" height="315" src="https://www.youtube.com/embed/BgldGgTL7D8" frameborder="0" allowfullscreen> </iframe>
<iframe id="video1" width="560" height="315" src="https://www.youtube.com/embed/795dI3HQpOo" frameborder="0" allowfullscreen></iframe></div>
<section>

<?php  $_smarty_tpl->tpl_vars['matches'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['matches']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['matches']->key => $_smarty_tpl->tpl_vars['matches']->value) {
$_smarty_tpl->tpl_vars['matches']->_loop = true;
?>
	<article>
	<h1><?php echo $_smarty_tpl->tpl_vars['matches']->value['team1'];?>
</h1>
	<p><?php echo $_smarty_tpl->tpl_vars['matches']->value['score_team1'];?>
</p>
	<h2> VS </h2>
	<h1><?php echo $_smarty_tpl->tpl_vars['matches']->value['team2'];?>
</h1>
	<p><?php echo $_smarty_tpl->tpl_vars['matches']->value['score_team2'];?>
</p>
	<hr color="silver">
	</article>

<?php } ?>
</section>
<?php }} ?>
