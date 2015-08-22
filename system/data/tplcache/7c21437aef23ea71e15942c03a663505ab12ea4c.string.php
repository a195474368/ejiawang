<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 12:15:20
         compiled from "7c21437aef23ea71e15942c03a663505ab12ea4c" */ ?>
<?php /*%%SmartyHeaderCode:142162700755d7f758e961e9-10138274%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c21437aef23ea71e15942c03a663505ab12ea4c' => 
    array (
      0 => '7c21437aef23ea71e15942c03a663505ab12ea4c',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '142162700755d7f758e961e9-10138274',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7f758f13322_02927432',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7f758f13322_02927432')) {function content_55d7f758f13322_02927432($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_cutstr')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.cutstr.php';
if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?>
                            <p><font class="red">[最新评价]</font><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['content'],50);?>
<font class="rt"><a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['item']->value['company_id']),$_smarty_tpl);?>
"  class="black">更多</a></font></p>
                            <?php }} ?>