<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:40:09
         compiled from "76caf24d2f87d4eabde93b91ff64ce1b51aebe8f" */ ?>
<?php /*%%SmartyHeaderCode:60788658855d7ef19b2bd28-82885969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76caf24d2f87d4eabde93b91ff64ce1b51aebe8f' => 
    array (
      0 => '76caf24d2f87d4eabde93b91ff64ce1b51aebe8f',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '60788658855d7ef19b2bd28-82885969',
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
  'unifunc' => 'content_55d7ef19c045e1_06503698',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ef19c045e1_06503698')) {function content_55d7ef19c045e1_06503698($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_block_calldata')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/block.calldata.php';
?>
                    <li>
                        <div class="news_qdb_sum none">
                            <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['item']->value['company_id']),$_smarty_tpl);?>
" class="aa"><?php echo ($_smarty_tpl->tpl_vars['index']->value+1);?>
</a>
                            <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['item']->value['company_id']),$_smarty_tpl);?>
" class="bb"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
                        </div>
                        <div class="news_qdb_all none">
                            <div class="news_qdb_details mt5">
                                <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['item']->value['company_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['logo'];?>
" width="110" height="55" /></a>
                                <span><font class="black">签单数</font>&nbsp;<font class="red"><?php echo $_smarty_tpl->tpl_vars['item']->value['tenders_num'];?>
</font></span>
                                <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['item']->value['company_id']),$_smarty_tpl);?>
" class="mfyu">免费预约</a>
                            </div>
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"company/dianping",'company_id'=>$_smarty_tpl->tpl_vars['item']->value['company_id'],'order'=>"new",'limit'=>"1")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"company/dianping",'company_id'=>$_smarty_tpl->tpl_vars['item']->value['company_id'],'order'=>"new",'limit'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <p><font class="red">[最新评价]</font><{$item.content|cutstr:50}><font class="rt"><a target="_blank" title="<{$item.name}>" href="<{link ctl='company' arg0=$item.company_id}>"  class="black">更多</a></font></p>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"company/dianping",'company_id'=>$_smarty_tpl->tpl_vars['item']->value['company_id'],'order'=>"new",'limit'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </div>
                        <div class="cl"></div>
                    </li>
                    <?php }} ?>