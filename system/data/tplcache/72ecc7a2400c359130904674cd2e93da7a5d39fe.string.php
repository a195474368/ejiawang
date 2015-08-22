<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:40:47
         compiled from "72ecc7a2400c359130904674cd2e93da7a5d39fe" */ ?>
<?php /*%%SmartyHeaderCode:206012535655d7ef3f4fc355-21459968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72ecc7a2400c359130904674cd2e93da7a5d39fe' => 
    array (
      0 => '72ecc7a2400c359130904674cd2e93da7a5d39fe',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '206012535655d7ef3f4fc355-21459968',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'index' => 0,
    'item' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ef3f5920c2_20804227',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ef3f5920c2_20804227')) {function content_55d7ef3f5920c2_20804227($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?> 

                            <li>
                                <div class="ask_show_sum  none">
                                    <span class="no<?php echo $_smarty_tpl->tpl_vars['index']->value+1;?>
 block_lt num"></span>
                                    <a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['item']->value['company_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" class="block_lt ml5"><?php echo $_smarty_tpl->tpl_vars['item']->value['sort_name'];?>
</a>
                                    <span class="rt">回答数&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value['answer_num'];?>
</span>
                                </div>
                                <div class="ask_show_detail none">
                                    <a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['item']->value['company_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
"><img width="110" height="55" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['logo'];?>
" /></a>
                                    <p class="lt ml10">
                                        <span class="block_lt mb10"><i><?php echo $_smarty_tpl->tpl_vars['index']->value+1;?>
</i></span>
                                        <a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['item']->value['company_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" class="block_lt"><?php echo $_smarty_tpl->tpl_vars['item']->value['sort_name'];?>
</a><br />
                                        <a class="cl block"></a>
                                        <font class="red">回答数<?php echo $_smarty_tpl->tpl_vars['item']->value['answer_num'];?>
</font>
                                    </p>

                                </div>
                            </li>
                            <?php }} ?>