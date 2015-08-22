<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:25:32
         compiled from "f7326fdc7459669909b62f07c3df2211d8e52f17" */ ?>
<?php /*%%SmartyHeaderCode:183490071555d7ebac986b61-89278838%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7326fdc7459669909b62f07c3df2211d8e52f17' => 
    array (
      0 => 'f7326fdc7459669909b62f07c3df2211d8e52f17',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '183490071555d7ebac986b61-89278838',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ebac9c4fd9_89334509',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ebac9c4fd9_89334509')) {function content_55d7ebac9c4fd9_89334509($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?> 
            <li><font>[<?php echo $_smarty_tpl->tpl_vars['data']->value['cfg_status'][$_smarty_tpl->tpl_vars['item']->value['status']];?>
]</font><a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'content:diaryDetail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['diary_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></li>
            <?php }} ?>