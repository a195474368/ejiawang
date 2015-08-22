<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:25:32
         compiled from "4e15f0fd1c05612a0e9d97b345f561124c0aaf9d" */ ?>
<?php /*%%SmartyHeaderCode:115364962455d7ebac93c098-49012849%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e15f0fd1c05612a0e9d97b345f561124c0aaf9d' => 
    array (
      0 => '4e15f0fd1c05612a0e9d97b345f561124c0aaf9d',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '115364962455d7ebac93c098-49012849',
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
  'unifunc' => 'content_55d7ebac9794b2_19211765',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ebac9794b2_19211765')) {function content_55d7ebac9794b2_19211765($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?> 
    <a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"  target="_blank" style="float: left; margin-right: 10px;" href="<?php echo smarty_function_link(array('ctl'=>'content:diaryDetail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['diary_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['face_pic'];?>
" width="140" height="85"/></a>
    <?php }} ?>