<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 13:01:00
         compiled from "mobile:designer/loaddata.html" */ ?>
<?php /*%%SmartyHeaderCode:30678514255d8020c2b8846-11677423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b87f8b2e7c15f9022a7a96fdd8e40e8ace038d4' => 
    array (
      0 => 'mobile:designer/loaddata.html',
      1 => 1420010588,
      2 => 'mobile',
    ),
  ),
  'nocache_hash' => '30678514255d8020c2b8846-11677423',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'designers' => 0,
    'item' => 0,
    'pager' => 0,
    'user_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d8020c3cf957_40148115',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d8020c3cf957_40148115')) {function content_55d8020c3cf957_40148115($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.cutstr.php';
?><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['designers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
<li>
    <div class="mobile_tuan_b_all">
        <a href="<?php echo smarty_function_link(array('ctl'=>'designer:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['uid']),$_smarty_tpl);?>
" class="a_designer"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['user_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['face'];?>
" width="70" height="70"/></a>
        <div class="mobile_tuan_b_all_r lt">
            <h4>
                <a href="<?php echo smarty_function_link(array('ctl'=>'designer:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['uid']),$_smarty_tpl);?>
" class="block_lt"><?php echo $_smarty_tpl->tpl_vars['user_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['realname'];?>
</a>
                <span class="block rt">
                    <a href="<?php echo smarty_function_link(array('ctl'=>'designer:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['uid']),$_smarty_tpl);?>
" class="block_lt boke_but">博客</a>
                    <a href="<?php echo smarty_function_link(array('ctl'=>'designer:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['uid']),$_smarty_tpl);?>
" class="block_lt yuyue_but">预约</a>
                </span> 
            </h4>
            <!--如若没有加入旗舰店和证书，则将i1和i2换成i11和i22则图标则会变灰色-->
            <div class="cl"></div>
            <p class="mt10">
                <span>QQ:<b><?php echo $_smarty_tpl->tpl_vars['item']->value['qq'];?>
</b>  </span>
            </p>
            <div class="cl"></div>
            <p class="mt7">
                <span>自我介绍：<?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['about'],20,'...');?>
</span>
            </p>
        </div>
    </div>
</li>
<?php } ?><?php }} ?>