<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:21:09
         compiled from "widget:adv/adv_lunzhuan.html" */ ?>
<?php /*%%SmartyHeaderCode:112193596055d7eaa56ed746-41397559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7ddff10872621e2148f79e807a689ec23865a3e' => 
    array (
      0 => 'widget:adv/adv_lunzhuan.html',
      1 => 1402664330,
      2 => 'widget',
    ),
  ),
  'nocache_hash' => '112193596055d7eaa56ed746-41397559',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'item' => 0,
    'adv' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7eaa579b450_74844987',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7eaa579b450_74844987')) {function content_55d7eaa579b450_74844987($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <div><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" <?php if ($_smarty_tpl->tpl_vars['adv']->value['target']){?> target="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
"<?php }?>><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" text="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" <?php if ($_smarty_tpl->tpl_vars['adv']->value['config']['width']){?> width="<?php echo $_smarty_tpl->tpl_vars['adv']->value['config']['width'];?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['adv']->value['config']['height']){?> width="<?php echo $_smarty_tpl->tpl_vars['adv']->value['config']['height'];?>
"<?php }?>/></a></div>
<?php } ?><?php }} ?>