<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:20:00
         compiled from "d8b5f991fceaf10c91bee51a8498805809967b90" */ ?>
<?php /*%%SmartyHeaderCode:134316569155d7ea60d76b35-88180007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8b5f991fceaf10c91bee51a8498805809967b90' => 
    array (
      0 => 'd8b5f991fceaf10c91bee51a8498805809967b90',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '134316569155d7ea60d76b35-88180007',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea60db9174_30693973',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea60db9174_30693973')) {function content_55d7ea60db9174_30693973($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?>
                                <a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'content:diaryDetail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['diary_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" > <img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['face_pic'];?>
" width="190" height="190" /></a>
                                 <?php }} ?>