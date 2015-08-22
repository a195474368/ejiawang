<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:25:32
         compiled from "widget:diary/newitems.html" */ ?>
<?php /*%%SmartyHeaderCode:26472111455d7ebac897902-23416975%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6627f81c553dc0f88971f79485b850739b9c5f41' => 
    array (
      0 => 'widget:diary/newitems.html',
      1 => 1402664330,
      2 => 'widget',
    ),
  ),
  'nocache_hash' => '26472111455d7ebac897902-23416975',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'key' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ebac917312_66946461',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ebac917312_66946461')) {function content_55d7ebac917312_66946461($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_block_calldata')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/block.calldata.php';
?><p class="mt20 ml20">
    <span class="lt f22">日记分享</span>
    <span class="rt mt10"><a href="<?php echo smarty_function_link(array('ctl'=>'content:diary'),$_smarty_tpl);?>
" class="f12 black">更多>></a></span>
</p>
<div class="cl"></div>
<div class="rijifenxaing_l_ul">
    <ul>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['cfg_status']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['index']++;
?>
        <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['index']<6){?>
        <li> <a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'content:diary','arg0'=>$_smarty_tpl->tpl_vars['key']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a></li>
        <?php }?>
        <?php } ?>  
    </ul>
</div>
<div class="cl"></div>
<div class="rijifenxiang_content hauto mt10">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"diary/diary",'order'=>"pv_num:desc",'limit'=>"3")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"diary/diary",'order'=>"pv_num:desc",'limit'=>"3"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 
    <a title="<{$item.title}>"  target="_blank" style="float: left; margin-right: 10px;" href="<{link ctl='content:diaryDetail' arg0=$item.diary_id}>"><img src="<{$pager.img}>/<{$item.face_pic}>" width="140" height="85"/></a>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"diary/diary",'order'=>"pv_num:desc",'limit'=>"3"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <div class="cl"></div>
    <p class="h10 bodr_b"></p>
    <div class="rijifenxiang_content_ul hauto">
        <ul>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"diary/diary",'order'=>"diary_id:desc",'limit'=>"5")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"diary/diary",'order'=>"diary_id:desc",'limit'=>"5"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 
            <li><font>[<{$data.cfg_status[$item.status]}>]</font><a target="_blank" title="<{$item.title}>" href="<{link ctl='content:diaryDetail' arg0=$item.diary_id}>"><{$item.title}></a></li>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"diary/diary",'order'=>"diary_id:desc",'limit'=>"5"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
    
        </ul>
    </div>
</div>
<div class="cl"></div>
<div class="h10"></div><?php }} ?>