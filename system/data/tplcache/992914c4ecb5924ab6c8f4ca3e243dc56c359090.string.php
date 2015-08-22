<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 12:00:43
         compiled from "992914c4ecb5924ab6c8f4ca3e243dc56c359090" */ ?>
<?php /*%%SmartyHeaderCode:81625488655d7f3eb0f02a8-60974708%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '992914c4ecb5924ab6c8f4ca3e243dc56c359090' => 
    array (
      0 => '992914c4ecb5924ab6c8f4ca3e243dc56c359090',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '81625488655d7f3eb0f02a8-60974708',
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
  'unifunc' => 'content_55d7f3eb1b6fa5_25607339',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7f3eb1b6fa5_25607339')) {function content_55d7f3eb1b6fa5_25607339($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
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
&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value['site_num'];?>
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
                                <font class="red"><?php echo $_smarty_tpl->tpl_vars['item']->value['site_num'];?>
个工地</font>
                            </p>
                        </div>    
                    </li>
                    <?php }} ?>