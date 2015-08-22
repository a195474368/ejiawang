<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 15:44:13
         compiled from "widget:article/newitems.html" */ ?>
<?php /*%%SmartyHeaderCode:110113143155d7ea60c2d711-16739270%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68baf47a21c1fc8b7bc0f099b4ceb8d81dba0142' => 
    array (
      0 => 'widget:article/newitems.html',
      1 => 1440228630,
      2 => 'widget',
    ),
  ),
  'nocache_hash' => '110113143155d7ea60c2d711-16739270',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea60ca5437_47709852',
  'variables' => 
  array (
    'data' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea60ca5437_47709852')) {function content_55d7ea60ca5437_47709852($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'F:\\chengshuang\\php\\ejw\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include 'F:\\chengshuang\\php\\ejw\\system\\plugins/smarty\\modifier.cutstr.php';
?><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
<li>
    <a href="<?php echo smarty_function_link(array('ctl'=>'content:items','arg0'=>$_smarty_tpl->tpl_vars['item']->value['cat_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_title'];?>
" target="_blank" class="f14 red"><?php echo $_smarty_tpl->tpl_vars['item']->value['cat_title'];?>
</a><font class="f14">&nbsp;|&nbsp;</font>
    <a href="<?php echo smarty_function_link(array('ctl'=>'content:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['article_id']),$_smarty_tpl);?>
" class="f14 black8"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],40,'..');?>
</a>
</li>
<?php } ?><?php }} ?>