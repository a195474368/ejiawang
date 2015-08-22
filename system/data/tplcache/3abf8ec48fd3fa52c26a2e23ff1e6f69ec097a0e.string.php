<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 12:00:43
         compiled from "3abf8ec48fd3fa52c26a2e23ff1e6f69ec097a0e" */ ?>
<?php /*%%SmartyHeaderCode:37953641655d7f3eb200007-98725659%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3abf8ec48fd3fa52c26a2e23ff1e6f69ec097a0e' => 
    array (
      0 => '3abf8ec48fd3fa52c26a2e23ff1e6f69ec097a0e',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '37953641655d7f3eb200007-98725659',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'index' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7f3eb29af29_29958681',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7f3eb29af29_29958681')) {function content_55d7f3eb29af29_29958681($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.cutstr.php';
?>
                    <li>
                        <div class="zjgd_area_sum none">
                            <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['item']->value['company_id']),$_smarty_tpl);?>
" class="cc"><?php echo $_smarty_tpl->tpl_vars['index']->value+1;?>
</a>
                            <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['item']->value['company_id']),$_smarty_tpl);?>
" class="dd"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['name'],20,'..');?>
&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value['case_num'];?>
个</a>
                        </div>
                        <div class="zjgd_area_detail none">
                            <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['item']->value['company_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['logo'];?>
" width="70" height="36"/></a>
                            <p>
                                <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['item']->value['company_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['sort_name'];?>
</a><br />
                                <font class="red"><?php echo $_smarty_tpl->tpl_vars['item']->value['case_num'];?>
个案例</font>
                            </p>
                        </div>    
                    </li>
                    <?php }} ?>