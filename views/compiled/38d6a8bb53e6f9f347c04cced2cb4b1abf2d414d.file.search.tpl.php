<?php /* Smarty version Smarty-3.1.18, created on 2015-10-06 18:42:55
         compiled from "views\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16880560e58196d3e69-47556306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38d6a8bb53e6f9f347c04cced2cb4b1abf2d414d' => 
    array (
      0 => 'views\\search.tpl',
      1 => 1444048086,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16880560e58196d3e69-47556306',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_560e58196f6763_57976840',
  'variables' => 
  array (
    'result' => 0,
    'newsitem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560e58196f6763_57976840')) {function content_560e58196f6763_57976840($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<section>

<?php  $_smarty_tpl->tpl_vars['newsitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newsitem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['newsitem']->key => $_smarty_tpl->tpl_vars['newsitem']->value) {
$_smarty_tpl->tpl_vars['newsitem']->_loop = true;
?>
	<article>
	<h1><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['title'];?>
</h1>
	<content><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['content'];?>
</content>
	</article>

<?php } ?>
</section><?php }} ?>
