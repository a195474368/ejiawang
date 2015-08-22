<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:20:00
         compiled from "8a9cfd345b96ca24be36c9edaccd53eb5a774fbc" */ ?>
<?php /*%%SmartyHeaderCode:106027910955d7ea60ccd4f4-26363167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a9cfd345b96ca24be36c9edaccd53eb5a774fbc' => 
    array (
      0 => '8a9cfd345b96ca24be36c9edaccd53eb5a774fbc',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '106027910955d7ea60ccd4f4-26363167',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea60cf69d6_58106949',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea60cf69d6_58106949')) {function content_55d7ea60cf69d6_58106949($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?> 
                         
                            <li style="padding-left:2px;">
                              <a href="<?php echo smarty_function_link(array('ctl'=>'ask'),$_smarty_tpl);?>
" class="f14 red"><font style="color:#00AD28">装修问答</font></a><font class="f14">&nbsp;|&nbsp;</font>
                               <a target='_blank' title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'ask:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['ask_id']),$_smarty_tpl);?>
"  class="f14 black8"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                            </li>
                            <?php }} ?>