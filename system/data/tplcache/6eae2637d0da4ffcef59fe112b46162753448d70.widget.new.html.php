<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:19:28
         compiled from "widget:links/new.html" */ ?>
<?php /*%%SmartyHeaderCode:104861526655d7ea406fbbb4-74377379%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6eae2637d0da4ffcef59fe112b46162753448d70' => 
    array (
      0 => 'widget:links/new.html',
      1 => 1422524014,
      2 => 'widget',
    ),
  ),
  'nocache_hash' => '104861526655d7ea406fbbb4-74377379',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea407234e2_94167185',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea407234e2_94167185')) {function content_55d7ea407234e2_94167185($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value){
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['link'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['link']->value['title'];?>
</a></li><?php } ?>
<?php }} ?>