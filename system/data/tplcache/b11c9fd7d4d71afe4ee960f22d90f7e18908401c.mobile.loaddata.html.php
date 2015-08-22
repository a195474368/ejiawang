<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 14:46:01
         compiled from "mobile:site/loaddata.html" */ ?>
<?php /*%%SmartyHeaderCode:8323638355d81aa93eae38-83705832%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b11c9fd7d4d71afe4ee960f22d90f7e18908401c' => 
    array (
      0 => 'mobile:site/loaddata.html',
      1 => 1420010589,
      2 => 'mobile',
    ),
  ),
  'nocache_hash' => '8323638355d81aa93eae38-83705832',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'item' => 0,
    'pager' => 0,
    'site_status' => 0,
    'company_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d81aa9534fe8_07198606',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d81aa9534fe8_07198606')) {function content_55d81aa9534fe8_07198606($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.cutstr.php';
?><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
<li>
    <div class="mobile_tuan_b_all">
        <a href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['face_pic'];?>
" width="68" height="55"/></a>
        <div class="mobile_tuan_b_all_r lt">
            <h4><a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],21,'');?>
</h4>
            <p class="mt10"><span class="block_lt">进度：</span><a href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
" class="block gongdi_jindu"><?php echo $_smarty_tpl->tpl_vars['site_status']->value[$_smarty_tpl->tpl_vars['item']->value['status']];?>
</a></p>
            <div class="cl"></div>
            <p class="mt10">
                <span>施工:<a title="<?php echo $_smarty_tpl->tpl_vars['company_list']->value[$_smarty_tpl->tpl_vars['item']->value['company_id']]['name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'company:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['company_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['company_list']->value[$_smarty_tpl->tpl_vars['item']->value['company_id']]['sort_name'];?>
</a></span>&nbsp;&nbsp;&nbsp;
                <a href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
">&gt;&gt;我要参观</a>
            </p>
        </div>
    </div>
</li>
<?php } ?><?php }} ?>