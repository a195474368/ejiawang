<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 13:11:30
         compiled from "8b9526bcf0d33d048326d141102363e13a8c93ae" */ ?>
<?php /*%%SmartyHeaderCode:214730135655d80482bcf621-27274303%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b9526bcf0d33d048326d141102363e13a8c93ae' => 
    array (
      0 => '8b9526bcf0d33d048326d141102363e13a8c93ae',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '214730135655d80482bcf621-27274303',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d80482c09c17_07637897',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d80482c09c17_07637897')) {function content_55d80482c09c17_07637897($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?> 
                            <li>
                                <a href="<?php echo smarty_function_link(array('ctl'=>'ask'),$_smarty_tpl);?>
" class="f14 red">装修问答</a><font class="f14">&nbsp;|&nbsp;</font>
                               <a target='_blank' title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'ask:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['ask_id']),$_smarty_tpl);?>
"  class="f14 black8"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                            </li>
                            <?php }} ?>