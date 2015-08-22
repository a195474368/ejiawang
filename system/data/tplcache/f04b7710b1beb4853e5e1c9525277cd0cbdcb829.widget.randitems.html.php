<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 15:44:13
         compiled from "widget:article/randitems.html" */ ?>
<?php /*%%SmartyHeaderCode:24106803055d7ea60b58217-77306141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f04b7710b1beb4853e5e1c9525277cd0cbdcb829' => 
    array (
      0 => 'widget:article/randitems.html',
      1 => 1440228629,
      2 => 'widget',
    ),
  ),
  'nocache_hash' => '24106803055d7ea60b58217-77306141',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea60b9e494_00271329',
  'variables' => 
  array (
    'data' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea60b9e494_00271329')) {function content_55d7ea60b9e494_00271329($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'F:\\chengshuang\\php\\ejw\\system\\plugins/smarty\\function.link.php';
?> 
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
<li><a target='_blank' href="<?php echo smarty_function_link(array('ctl'=>'content:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['article_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></li>
<?php } ?><?php }} ?>