<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:38:58
         compiled from "widget:home/index.html" */ ?>
<?php /*%%SmartyHeaderCode:73016243755d7eed2474279-27034007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a04be4778ddb38801c00218fc71e25de889b82b' => 
    array (
      0 => 'widget:home/index.html',
      1 => 1402664330,
      2 => 'widget',
    ),
  ),
  'nocache_hash' => '73016243755d7eed2474279-27034007',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'item' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7eed2509ea5_29438828',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7eed2509ea5_29438828')) {function content_55d7eed2509ea5_29438828($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['tuan']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
<div class="tuanzhuang_show">
    <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'home:tuanDetail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['tuan_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['home_list'][$_smarty_tpl->tpl_vars['item']->value['home_id']]['face_pic'];?>
" width="220" height="155" /></a>
    <div class="tuanzhuang_time">
        <span></span>
        <p class="jq_endtime" value='<?php echo $_smarty_tpl->tpl_vars['item']->value['end_time'];?>
'>剩余时间倒计时</p>
    </div>
    <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'home:tuanDetail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['tuan_id']),$_smarty_tpl);?>
" class="tuanzhuang_name"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
    <div class="tuanzhuang_join">
        <p>
            立省<i>￥<?php echo $_smarty_tpl->tpl_vars['item']->value['jieyue'];?>
</i>元
        </p>
        <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'home:tuanDetail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['tuan_id']),$_smarty_tpl);?>
" class="now_cantuan">立即参团</a>      
    </div>
    <div class="cl"></div>
    <p class="rt mr10"><i><?php echo $_smarty_tpl->tpl_vars['item']->value['sign_num'];?>
</i>人已经参团</p>
</div>
<?php } ?>

<script>
    $(document).ready(function() {
        $(".tuanzhuang_show").mouseover(function() {
            $(this).find(".tuanzhuang_time").addClass("currentred");
        })
        .mouseout(function() {
            $(this).find(".tuanzhuang_time").removeClass("currentred");
        });
        var dateTime = new Date();
                var difference = dateTime.getTime() ;
                setInterval(function() {
                    $(".jq_endtime").each(function() {
                        var obj = $(this);
                        var endTime = new Date(parseInt(obj.attr('value')) * 1000);
                        var nowTime = new Date();
                        var nMS = endTime.getTime() - nowTime.getTime() + difference;
                        var myD = Math.floor(nMS / (1000 * 60 * 60 * 24));
                        var myH = Math.floor(nMS / (1000 * 60 * 60)) % 24;
                        var myM = Math.floor(nMS / (1000 * 60)) % 60;
                        var myS = Math.floor(nMS / 1000) % 60;
                        if (myD >= 0) {
                            if(myS % 3 == 0){
                                obj.parent().parent().find(".tuanzhuang_time").addClass("currentred");
                            }else{
                                obj.parent().parent().find(".tuanzhuang_time").removeClass("currentred");
                            }
                            var str = myD + "天" + myH + "小时" + myM + "分" + myS + "秒";
                        } else {
                            var str = "已结束！";
                        }
                        obj.html(str);
                    });
                }, 1000);
        
    });
</script>   <?php }} ?>