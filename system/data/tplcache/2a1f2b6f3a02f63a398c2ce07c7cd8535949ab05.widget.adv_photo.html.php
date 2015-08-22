<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 15:44:13
         compiled from "widget:adv/adv_photo.html" */ ?>
<?php /*%%SmartyHeaderCode:109598451355d7ea2b699396-68196798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a1f2b6f3a02f63a398c2ce07c7cd8535949ab05' => 
    array (
      0 => 'widget:adv/adv_photo.html',
      1 => 1440228629,
      2 => 'widget',
    ),
  ),
  'nocache_hash' => '109598451355d7ea2b699396-68196798',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea2b74fb22_25950068',
  'variables' => 
  array (
    'data' => 0,
    'item' => 0,
    'pager' => 0,
    'adv' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea2b74fb22_25950068')) {function content_55d7ea2b74fb22_25950068($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"<?php if ($_smarty_tpl->tpl_vars['data']->value['style']){?> style="<?php echo $_smarty_tpl->tpl_vars['data']->value['style'];?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['data']->value['class']){?> class="<?php echo $_smarty_tpl->tpl_vars['data']->value['class'];?>
"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"<?php if ($_smarty_tpl->tpl_vars['item']->value['target']){?> target="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
"<?php }?>><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"<?php if ($_smarty_tpl->tpl_vars['adv']->value['config']['width']){?> width="<?php echo $_smarty_tpl->tpl_vars['adv']->value['config']['width'];?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['adv']->value['config']['height']){?> width="<?php echo $_smarty_tpl->tpl_vars['adv']->value['config']['height'];?>
"<?php }?>/></a>
<?php } ?><?php }} ?>