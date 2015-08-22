<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 12:15:41
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/home_tuan.html" */ ?>
<?php /*%%SmartyHeaderCode:186141637855d7f76d954527-59030618%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64935f387a015c4f15e48139d18dae09fce5ddc8' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/home_tuan.html',
      1 => 1440053384,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186141637855d7f76d954527-59030618',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'CONFIG' => 0,
    'hots' => 0,
    'item' => 0,
    'items' => 0,
    'home_list' => 0,
    'company' => 0,
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7f76db5a725_33242680',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7f76db5a725_33242680')) {function content_55d7f76db5a725_33242680($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.cutstr.php';
if (!is_callable('smarty_block_calldata')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/block.calldata.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--         主题部分开始           -->
<script type="text/javascript"  src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/cheerful_green/static/style/Marquee.js"></script>
<script type="text/javascript">
$(function(){
	//一次横向滚动一个
	$('#marquee4').kxbdSuperMarquee({
		isMarquee:true,
		isEqual:false,
		scrollDelay:25,
		controlBtn:{left:'#goL',right:'#goR'},
		direction:'up'
		
	});
})
        </script>
<div class="index_b_bg hauto">
    <!--         你所在的位置开始             -->
    <div class="w1000 bgwhite ask_list_weizhi">
        <span class="span11 icobg block_lt"></span>
        <span class="block_lt">您当前所在的位置:</span>
          <a title="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
" href="\" class="block_lt"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
</a>
        <span class="block_lt">></span>
        <a href="<?php echo smarty_function_link(array('ctl'=>'home:tuan'),$_smarty_tpl);?>
" title="团装小区" class="block_lt">团装小区</a>
  
    </div>
    <div class="cl"></div>
    <!--        你所在的位置结束      -->
    <!--搜索开始-->
    <div class="w1000 tuanzhuang_search">
        <div class="tuangzhuang_search_l lt">
            <form method="get" action="<?php echo smarty_function_link(array('ctl'=>'home:tuan'),$_smarty_tpl);?>
">
                <input type="text" name="s" id='data_keyword' class="tuanzhuang_seach_area" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['pager']->value['s'])===null||$tmp==='' ? '请输入您要查询的小区名称' : $tmp);?>
"/>
                <input type="submit"  class="tuanzhuang_sub" value="搜索"/>
            </form>
            <script>
                $(document).ready(function() {
                    $("#data_keyword").focus(function() {
                        if ($(this).val() == '请输入您要查询的小区名称') {
                            $(this).val('');
                        }
                    }).focusout(function() {
                        if ($(this).val() == '') {
                            $(this).val('请输入您要查询的小区名称');
                        }
                    });
                });
            </script>

        </div>
        <div class="tuanzhaung_search_r rt">
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hots']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->iteration++;
?>
            <p><a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'home:tuanDetail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['tuan_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a> &nbsp; 立省￥<?php echo $_smarty_tpl->tpl_vars['item']->value['jieyue'];?>
元 &nbsp;   <i><?php echo $_smarty_tpl->tpl_vars['item']->value['sign_num'];?>
</i>人已参团</p>
            <?php } ?>
        </div>
    </div>
    <!--搜索结束-->
    <!--团装活动开始-->  
    <div class="tuanzhuang_acitivity w1000">
        <div class="tuanzhuang_title">
            <h2>团装活动</h2>
            
        </div>
        <div class="cl"></div>
        <div class="tuanzhuang_b" style="float:left">
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->iteration++;
?>
            <div class="tuanzhuang_show">
    <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'home:tuanDetail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['tuan_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['home_list']->value[$_smarty_tpl->tpl_vars['item']->value['home_id']]['face_pic'];?>
" width="260" height="165" /></a>
    <div class="tuanzhuang_time" style="width:260px;top:152px;display: none">
        <span></span>
        <p class="jq_endtime" value='<?php echo $_smarty_tpl->tpl_vars['item']->value['end_time'];?>
'>剩余时间倒计时</p>
    </div>
    <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'home:tuanDetail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['tuan_id']),$_smarty_tpl);?>
" class="tuanzhuang_name"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],25,'');?>
</a>
    <div class="tuanzhuang_join">
        
        <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'home:tuanDetail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['tuan_id']),$_smarty_tpl);?>
" class="now_cantuan">立即参团</a> 
         <p>
            立省<i><?php echo $_smarty_tpl->tpl_vars['item']->value['jieyue'];?>
</i>
        </p>
    </div>
    <div class="cl"></div>
    <!--<p class="rt mr10"><i><?php echo $_smarty_tpl->tpl_vars['item']->value['sign_num'];?>
</i>人已经参团</p>-->
</div>
              <?php if ($_smarty_tpl->tpl_vars['item']->iteration>5){?><?php break 1?><?php }?>
            <?php } ?>
             <div class="page" style="clear: both"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</div>
        </div>
        <div class=""style="width:279px;height:800px;margin-right: 5px;margin-top: 10px;overflow: hidden; font-size: 13px;float:left;">
             <div class="bgwhite" style="height:200px">
                           <!-- <h2><a title='<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
' target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
</a></h2>-->
                            <a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/cheerful_green/static/images/tuan_logo.jpg" width="250" height="100" /></a>
                            <p><b>联系电话&nbsp;：</b>&nbsp;<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['phone'];?>
</p>
                            <!--<p><a title='<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
' target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $_smarty_tpl->tpl_vars['company']->value['qq'];?>
&amp;site=qq&amp;menu=yes"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/images/qqjt.png" /></a></p>-->
                           <!-- <p><b>公司地址&nbsp;:&nbsp;</b><?php echo $_smarty_tpl->tpl_vars['company']->value['addr'];?>
</p>-->
                           <p>省钱、省事、省心、更多团装活动请</p>
                           <P> <a href=""  class="now_cantuan">立即参团</a></p>
                            <p class="h10"></p>
                        </div>
              <span><h2>参加团装户主</h2></span>
        <div id="marquee4" class="bgwhite"style="width:279px;height:275px;margin-right: 5px;margin-top: 10px;padding-top:10px;overflow: hidden; font-size: 13px;float:left;">        
            <ul>
           <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"home/sign",'city_id'=>$_smarty_tpl->tpl_vars['this']->value->request['city_id'])); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"home/sign",'city_id'=>$_smarty_tpl->tpl_vars['this']->value->request['city_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li>
              <p><a target="_blank" title="<{$item.title}>" href="<{link ctl='home:tuanDetail' arg0=$item.tuan_id}>" ><{$item.mobile|cutstr:4:'**'}>报名了
                    <{calldata mdl="home/tuan" tuan_id=$item.tuan_id city_id=$this->request['city_id']}>“<{$item.title|cutstr:20:'**'}>”<{/calldata}></a></p>
           </li>
           <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"home/sign",'city_id'=>$_smarty_tpl->tpl_vars['this']->value->request['city_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
            
        </div>
            
       
        </div>
        
        
    </div>
    <script>
        $(document).ready(function() {
            $(".tuanzhuang_show").mouseover(function() {
                $(this).find(".tuanzhuang_time").addClass("currentred");
                 $(this).find(".tuanzhuang_time").show();
            })
                    .mouseout(function() {
                        $(this).find(".tuanzhuang_time").removeClass("currentred");
                         $(this).find(".tuanzhuang_time").hide();
                    });

            var dateTime = new Date();
            var difference = dateTime.getTime();
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
                           // obj.parent().parent().find(".tuanzhuang_time").addClass("currentred");
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
    </script>   
    <!--团装活动结束-->       
    <div class="cl h20"></div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  <?php }} ?>