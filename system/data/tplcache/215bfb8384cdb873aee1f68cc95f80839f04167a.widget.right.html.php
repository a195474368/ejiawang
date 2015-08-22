<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:20:35
         compiled from "widget:diary/right.html" */ ?>
<?php /*%%SmartyHeaderCode:132949293255d7ea83d9b790-85218417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '215bfb8384cdb873aee1f68cc95f80839f04167a' => 
    array (
      0 => 'widget:diary/right.html',
      1 => 1402664330,
      2 => 'widget',
    ),
  ),
  'nocache_hash' => '132949293255d7ea83d9b790-85218417',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea83e04cc2_43536099',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea83e04cc2_43536099')) {function content_55d7ea83e04cc2_43536099($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.cutstr.php';
?><ul>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['diary']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <li>
        <a title="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['diary_company_list'][$_smarty_tpl->tpl_vars['item']->value['company_id']]['name'])===null||$tmp==='' ? '--' : $tmp);?>
" class="red" target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['item']->value['company_id']),$_smarty_tpl);?>
">[<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['diary_company_list'][$_smarty_tpl->tpl_vars['item']->value['company_id']]['sort_name'])===null||$tmp==='' ? '--' : $tmp);?>
]</a>
        <a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'content:diaryDetail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['diary_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" class="black"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],24,'..');?>
 </a>
    </li>
<?php } ?>
</ul><?php }} ?>