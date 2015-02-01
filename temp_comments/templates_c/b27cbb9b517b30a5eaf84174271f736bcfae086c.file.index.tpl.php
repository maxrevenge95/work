<?php /* Smarty version Smarty-3.1.20, created on 2015-01-31 22:53:58
         compiled from "d:\xampp\htdocs\test\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213354cd12365c4492-74420651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b27cbb9b517b30a5eaf84174271f736bcfae086c' => 
    array (
      0 => 'd:\\xampp\\htdocs\\test\\templates\\index.tpl',
      1 => 1422741130,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213354cd12365c4492-74420651',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_54cd1236660b06_53621764',
  'variables' => 
  array (
    'result' => 0,
    'con' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cd1236660b06_53621764')) {function content_54cd1236660b06_53621764($_smarty_tpl) {?><legend id="lab">Комментарии</legend>
<ul>
<?php  $_smarty_tpl->tpl_vars['con'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['con']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['con']->key => $_smarty_tpl->tpl_vars['con']->value) {
$_smarty_tpl->tpl_vars['con']->_loop = true;
?>
<li class="myli">
<label for="text"><?php echo $_smarty_tpl->tpl_vars['con']->value['autor'];?>
</label><br> <p name="text"><?php echo $_smarty_tpl->tpl_vars['con']->value['commentText'];?>
</p>
</li>
<?php }
if (!$_smarty_tpl->tpl_vars['con']->_loop) {
?>
Здесь пока нет комментариев...
<?php } ?>
</ul><?php }} ?>
