<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:20:34
         compiled from "widget:home/tuan.html" */ ?>
<?php /*%%SmartyHeaderCode:64971998055d7ea82ce3d12-49202575%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7195785e58eae1b30555cb3cbbb37caa636d07f8' => 
    array (
      0 => 'widget:home/tuan.html',
      1 => 1402664330,
      2 => 'widget',
    ),
  ),
  'nocache_hash' => '64971998055d7ea82ce3d12-49202575',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'pager' => 0,
    'CONFIG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea82dbd9d6_31374258',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea82dbd9d6_31374258')) {function content_55d7ea82dbd9d6_31374258($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['data']->value['tuan'])){?>
<div class="home_tuan_show">
    <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['data']->value['tuan']['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'home:tuanDetail','arg0'=>$_smarty_tpl->tpl_vars['data']->value['tuan']['tuan_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['home']['face_pic'];?>
" width="210" height="155" /></a>
    <div class="home_tuan_time">
        <span></span>
        <p class="jq_endtime" value='<?php echo $_smarty_tpl->tpl_vars['data']->value['tuan']['end_time'];?>
'>剩余时间倒计时</p>
    </div>
    <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['data']->value['tuan']['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'home:tuanDetail','arg0'=>$_smarty_tpl->tpl_vars['data']->value['tuan']['tuan_id']),$_smarty_tpl);?>
" class="home_tuan_name"><?php echo $_smarty_tpl->tpl_vars['data']->value['tuan']['title'];?>
</a>
    <div class="home_tuan_join">
        <p>
            立省<i>￥<?php echo $_smarty_tpl->tpl_vars['data']->value['tuan']['jieyue'];?>
</i>元
        </p>
        <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['data']->value['tuan']['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'home:tuanDetail','arg0'=>$_smarty_tpl->tpl_vars['data']->value['tuan']['tuan_id']),$_smarty_tpl);?>
" class="now_cantuan">立即参团</a>      
    </div>
    <div class="cl"></div>
    <p class="rt mr10"><i><?php echo $_smarty_tpl->tpl_vars['data']->value['tuan']['sign_num'];?>
</i>人已经参团</p>
</div>


<script>
    $(document).ready(function() {
        $(".home_tuan_show").mouseover(function() {
            $(this).find(".home_tuan_time").addClass("currentred");
        })
        .mouseout(function() {
            $(this).find(".home_tuan_time").removeClass("currentred");
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
                                obj.parent().parent().find(".home_tuan_time").addClass("currentred");
                            }else{
                                obj.parent().parent().find(".home_tuan_time").removeClass("currentred");
                            }
                            var str = myD + "天" + myH + "小时" + myM + "分" + myS + "秒";
                        } else {
                            var str = "已结束！";
                        }
                        obj.html(str);
                    });
                }, 1000);
        
    });
</script>

<?php }else{ ?>
<div class="home_tuan_show">
<div class="tuanzhang_none ">
    <p>
        该小区暂未有任何团装活动
    </p>
    <a href="###">联系合作</a>
    <p><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['phone'];?>
</p>
 </div>
</div>
<?php }?><?php }} ?>