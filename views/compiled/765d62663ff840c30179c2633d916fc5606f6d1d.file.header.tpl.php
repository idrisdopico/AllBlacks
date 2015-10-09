<?php /* Smarty version Smarty-3.1.18, created on 2015-10-07 17:09:28
         compiled from "views\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2048855ffed30a10eb7-40846542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '765d62663ff840c30179c2633d916fc5606f6d1d' => 
    array (
      0 => 'views\\header.tpl',
      1 => 1444230566,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2048855ffed30a10eb7-40846542',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55ffed30a39fd6_71045276',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ffed30a39fd6_71045276')) {function content_55ffed30a39fd6_71045276($_smarty_tpl) {?><header>
<img id="logo" src="views/img/allBlacks.jpg">
<nav>

	<ul>
		<li> <a href="?page=home"> Home </a></li> 
		<li> <a href="?page=competitionSchedule"> Matches </a></li> <!-- too lazy to adjust name-->
		<li> <a href="?page=players"> Players </a></li>
		<li> <a href="?page=theHaka"> The Haka </a></li> 
		<li> <a href="?page=contact"> Contact </a></li>  
		<li> <a href="?page=about"> About </a></li>
	</ul>
</nav>
</header>
<form id="search" action="?page=search" method="POST">
			<input type="text" name="search" placeholder="search">
			<input id="searchButton" type="submit" value="Go">
</form><?php }} ?>
