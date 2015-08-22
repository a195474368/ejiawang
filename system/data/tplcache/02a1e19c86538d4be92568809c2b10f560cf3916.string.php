<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:40:10
         compiled from "02a1e19c86538d4be92568809c2b10f560cf3916" */ ?>
<?php /*%%SmartyHeaderCode:19362462155d7ef1a9b9651-67075285%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02a1e19c86538d4be92568809c2b10f560cf3916' => 
    array (
      0 => '02a1e19c86538d4be92568809c2b10f560cf3916',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '19362462155d7ef1a9b9651-67075285',
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
  'unifunc' => 'content_55d7ef1aa148b3_51687783',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ef1aa148b3_51687783')) {function content_55d7ef1aa148b3_51687783($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.cutstr.php';
?>
                        	<li>
                                <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'gs:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['youhui_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['face_pic'];?>
" width="210" height="210" /></a><br />
                                <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'gs:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['youhui_id']),$_smarty_tpl);?>
"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],30,'');?>
</a>
                            </li>
                          <?php }} ?>