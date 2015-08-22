<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:40:10
         compiled from "bd2a422838d92bf9e22e75b501f358150b215d0f" */ ?>
<?php /*%%SmartyHeaderCode:88461276855d7ef1a92c608-22228174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd2a422838d92bf9e22e75b501f358150b215d0f' => 
    array (
      0 => 'bd2a422838d92bf9e22e75b501f358150b215d0f',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '88461276855d7ef1a92c608-22228174',
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
  'unifunc' => 'content_55d7ef1a98b055_66227038',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ef1a98b055_66227038')) {function content_55d7ef1a98b055_66227038($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?>
                            <li>
                                  <a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'blog','arg0'=>$_smarty_tpl->tpl_vars['item']->value['uid']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['realname'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['face'];?>
" width="100" height="100" /></a><br />
                                  <a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'blog','arg0'=>$_smarty_tpl->tpl_vars['item']->value['uid']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['realname'];?>
" class="red"><b><?php echo $_smarty_tpl->tpl_vars['item']->value['realname'];?>
</b></a>
                            </li>
                            <?php }} ?>