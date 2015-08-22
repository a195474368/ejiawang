<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:40:09
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/gs.html" */ ?>
<?php /*%%SmartyHeaderCode:113635175755d7ef19766fb6-63356005%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc5f889e99e54637b5014102dbe013ab687cef91' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/gs.html',
      1 => 1419997118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113635175755d7ef19766fb6-63356005',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'area_list' => 0,
    'request' => 0,
    'item' => 0,
    'attr_values' => 0,
    'it2' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ef19a7bae7_44902847',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ef19a7bae7_44902847')) {function content_55d7ef19a7bae7_44902847($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_function_widget')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.widget.php';
if (!is_callable('smarty_block_KT')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/block.KT.php';
if (!is_callable('smarty_block_calldata')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/block.calldata.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


            <!----------头部和导航公共部分------------>  
            <!-- 主题部分开始  -->
             <div class="index_b_bg hauto">
             	<!--  聚合区域开始 -->
                <div class="home_all w1000 hauto mt10">
                    <div class="home_all_l lt hauto bgwhite decoration_company"  style="min-height: 230px;">
                        <div class="home_all_l_t hauto bodr_b_x">
                            <p>
                                <span class="block icobg lt span10"></span>
                                <span class="block lt">区域</span>
                            </p>
                            <div class="cl"></div>
                                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['area_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['area']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['area']['index']++;
?>
                                <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['area']['index']<8){?>
                                <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['area_name'];?>
装修公司" href="<?php echo smarty_function_link(array('ctl'=>'gs:items','arg0'=>$_smarty_tpl->tpl_vars['item']->value['area_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['area_name'];?>
</a>
                                <?php }?>
                                <?php } ?>
                                <a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'gs:items'),$_smarty_tpl);?>
">更多>></a>
                            
                        </div>
                         <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['attr_values']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['one']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['one']['index']++;
?>
                            <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['one']['index']<1){?>
                            <div class="home_all_l_t hauto mb20 mt20">
                                <p>
                                    <span class="block icobg lt span11"></span>
                                    <span class="block lt"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</span>
                                </p>
                                <div class="cl"></div>
                                <?php  $_smarty_tpl->tpl_vars['it2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['two']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['it2']->key => $_smarty_tpl->tpl_vars['it2']->value){
$_smarty_tpl->tpl_vars['it2']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['two']['index']++;
?>
                                <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['two']['index']<8){?>
                                <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
<?php echo $_smarty_tpl->tpl_vars['it2']->value['title'];?>
装修公司" href="<?php echo $_smarty_tpl->tpl_vars['it2']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['it2']->value['title'];?>
</a>
                                <?php }?>
                                <?php } ?>
                                <a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'gs:items'),$_smarty_tpl);?>
">更多>></a>
                            </div>
                            <?php }?>
                        <?php } ?>
                    </div>
                    <div class="home_all_c lt ml10 mr10" style="width: 740px;">
                         <div id="home_all_c" kinBox='{"height":230}'><?php echo smarty_function_widget(array('id'=>"adv",'name'=>"找装修公司聚合页轮播广告",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"5"),$_smarty_tpl);?>
</div>
                        
                    </div>
                    <div class="decoration_all_r lt hauto bgwhite">
                           <?php echo $_smarty_tpl->getSubTemplate ("block/tenders.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
                        
                    </div>   
                </div>
                <!--  聚合区域结束 -->
              
                    <!---------品牌装修公司开始--------->
    <div class="company_charts w1000 hauto mt25" >
        <h2><a href="<?php echo smarty_function_link(array('ctl'=>'gs'),$_smarty_tpl);?>
" class="block_lt">品牌装修公司</a><a href="<?php echo smarty_function_link(array('ctl'=>'passport:signup'),$_smarty_tpl);?>
" class="block rt a28">我要入驻>></a></h2>
    </div>
    <div class="company_charts_show w1000 hauto bgwhite mt10">	
        <div class="company_charts_show_l lt">
            <ul>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"1",'name'=>"品牌装修公司",'limit'=>"20",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'])); $_block_repeat=true; echo smarty_block_KT(array('id'=>"1",'name'=>"品牌装修公司",'limit'=>"20",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li class="aa<{$item.company_id}>"><a  target="_blank" title="<{$item.name}>" href="<{link ctl='company' arg0=$item.company_id}>"><img src="<{$pager.img}>/<{$item.logo}>" width="150" height="75"></a></li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"1",'name'=>"品牌装修公司",'limit'=>"20",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>  
            
             <script type="text/javascript">
     (function(K, $) {
            $(".company_charts_show_l li").each(function(a){                                 
                      var att=$(this).attr("class");  
                      $(this).nextAll("."+att).hide();                                         
            })
     })(window.KT, window.jQuery);
            </script>
        </div>
        <div class="company_charts_show_r lt">
            <div class="newest_qdb">
                <ul><li><a href="<?php echo smarty_function_link(array('ctl'=>'gs:items'),$_smarty_tpl);?>
" class="red">最新签单榜</a></li><li><a href="<?php echo smarty_function_link(array('ctl'=>'gs:items'),$_smarty_tpl);?>
"" class="red">最新加入</a></li></ul>
            </div>
            <div class="news_qdb_b none news_qdb_0 mt30">
                <ul>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"tenders_num:desc",'limit'=>"8")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"tenders_num:desc",'limit'=>"8"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li>
                        <div class="news_qdb_sum none">
                            <a target="_blank" title="<{$item.name}>" href="<{link ctl='company' arg0=$item.company_id}>" class="aa"><{($index+1)}></a>
                            <a target="_blank" title="<{$item.name}>" href="<{link ctl='company' arg0=$item.company_id}>" class="bb"><{$item.name}></a>
                        </div>
                        <div class="news_qdb_all none">
                            <div class="news_qdb_details mt5">
                                <a target="_blank" title="<{$item.name}>" href="<{link ctl='company' arg0=$item.company_id}>"><img src="<{$pager.img}>/<{$item.logo}>" width="110" height="55" /></a>
                                <span><font class="black">签单数</font>&nbsp;<font class="red"><{$item.tenders_num}></font></span>
                                <a target="_blank" title="<{$item.name}>" href="<{link ctl='company' arg0=$item.company_id}>" class="mfyu">免费预约</a>
                            </div>
                            <{calldata mdl="company/dianping" company_id=$item.company_id order="new" limit="1"}>
                            <p><font class="red">[最新评价]</font><{$item.content|cutstr:50}><font class="rt"><a target="_blank" title="<{$item.name}>" href="<{link ctl='company' arg0=$item.company_id}>"  class="black">更多</a></font></p>
                            <{/calldata}>
                        </div>
                        <div class="cl"></div>
                    </li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"tenders_num:desc",'limit'=>"8"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
                          
                </ul>
            </div>
            <div class="news_qdb_b none news_qdb_1 mt30">
                <ul>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"new",'limit'=>"8")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"new",'limit'=>"8"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li>
                        <div class="news_qdb_sum none"><a target="_blank" title="<{$item.name}>" href="<{link ctl='company' arg0=$item.company_id}>"  class="aa"><{($index+1)}></a><a target="_blank" title="<{$item.name}>" href="<{link ctl='company' arg0=$item.company_id}>" class="bb"><{$item.name}></a></div>
                        <div class="news_qdb_all none">
                            <div class="news_qdb_details mt5">
                                <a target="_blank" title="<{$item.name}>" href="<{link ctl='company' arg0=$item.company_id}>" ><img src="<{$pager.img}>/<{$item.logo}>" width="110" height="55" /></a>
                                <span><font class="black">口碑值</font>&nbsp;<font class="red"><{round($item.scores/10, 1)}></font></span>
                                <a target="_blank" title="<{$item.name}>" href="<{link ctl='company' arg0=$item.company_id}>" class="mfyu">免费预约</a>
                            </div>
                            <{calldata mdl="company/dianping" company_id=$item.company_id order="new" limit="1"}>
                            <p><font class="red">[最新评价]</font><{$item.content|cutstr:50}><font class="rt"><a target="_blank" title="<{$item.name}>" href="<{link ctl='company' arg0=$item.company_id}>" class="black">更多</a></font></p>
                            <{/calldata}>
                        </div>
                        <div class="cl"></div>
                    </li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"new",'limit'=>"8"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
                              
                </ul>
            </div>
        </div>
    </div>
    <!---------品牌装修公司结束--------->
                
                
               <!------设计师开始------->
                         <div class="recommend_designer w1000 hauto mt25">
                             <h2><a href="<?php echo smarty_function_link(array('ctl'=>'designer'),$_smarty_tpl);?>
">推荐设计师</a></h2>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('name'=>"首页推荐设计师",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"2")); $_block_repeat=true; echo smarty_block_KT(array('name'=>"首页推荐设计师",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"2"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <div class="decoration_designer_l lt bgwhite mt10">
                        <div class="decoration_designer_l_l lt">
                            <div class="designer_name lt">
                                <a target="_blank" href="<{link ctl='blog' arg0=$item.uid}>" title="<{$item.realname}>"><img src="<{$pager.img}>/<{$item.face}>" width="100" height="100" /></a><br />
                                <p>设计师：<b><a target="_blank" href="<{link ctl='blog' arg0=$item.uid}>"  title="<{$item.realname}>"><{$item.realname|cutstr:8:''}></a></b></p>
                                <p class="consult pinkbg"><a target="_blank" href="<{link ctl='blog' arg0=$item.uid}>" title="<{$item.realname}>">我要咨询</a></p>
                            </div>
                            <{calldata mdl="case/case" designer_id=$item.uid limit="1"}>
                            <div class="design_idea lt">
                                <p><font class="black"><b>[设计理念]</b></font>:<{$item.intro|cutstr:25:''}></p>
                                <{foreach $item.ext.photos as $photo}>
                                <p class="case_p lt">
                                    <a target="_blank" href="<{link ctl='case:detail' arg0=$item.case_id}>"  title="<{$photo.title}>"><img src="<{$pager.img}>/<{$photo.photo}>_thumb.jpg" width="120" height="95" /></a>
                                    <span></span>
                                    <span class="text1"><a target="_blank" href="<{link ctl='case:detail' arg0=$item.case_id}>"  title="<{$photo.title}>"><{$photo.title}></a></span>
                                </p>
                                <{if $photo@index>0}><{break}><{/if}>
                                <{/foreach}>
                                <div class="cl"></div>
                                <p class="simple mt10"><{foreach $item.ext.attrs as $k=>$v}><span class="simple_style lt"><a target="_blank" href="<{link ctl='case:detail' arg0=$item.case_id}>"  title="<{$photo.title}>"  target="_blank"><{$v}></a></span><{/foreach}></p>
                            </div>
                            <{/calldata}>
                        </div>     
                    </div>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('name'=>"首页推荐设计师",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"2"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    <div class="ads2 lt mt10">
                        <a href="<?php echo smarty_function_link(array('ctl'=>'tenders'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/pic/ads2.png" width="139" height="232" /></a>
                    </div> 
                </div>
                <div class="designer mt10 w1000 hauto bgwhite">                  
                    <div class="wraper lt mb30">
                        <ul class="gundong_img lt" >
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"designer/designer",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"orderby:desc",'limit'=>"20")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"designer/designer",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"orderby:desc",'limit'=>"20"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <li>
                                  <a target="_blank" href="<{link ctl='blog' arg0=$item.uid}>" title="<{$item.realname}>"><img src="<{$pager.img}>/<{$item.face}>" width="100" height="100" /></a><br />
                                  <a target="_blank" href="<{link ctl='blog' arg0=$item.uid}>" title="<{$item.realname}>" class="red"><b><{$item.realname}></b></a>
                            </li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"designer/designer",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"orderby:desc",'limit'=>"20"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </ul>                  
                   </div>
                </div>
                <!------设计师结束------->    
                <!------设计师结束------->
                <!--最新优惠信息开始-->
                <div class="new_favorable_info w1000 hauto mt20">
                	<div class="new_favorable_info_title w1000">
                        <h2 class="lt"><a href="<?php echo smarty_function_link(array('ctl'=>'gs:youhui'),$_smarty_tpl);?>
">最新优惠信息</a></h2>
                         <span class="rt"><a href="<?php echo smarty_function_link(array('ctl'=>'gs:youhui'),$_smarty_tpl);?>
">更多>></a></span>
                    </div>
                    <div class="cl"></div>
                    <div class="new_favorable_info_b w1000 bgwhite mt10 hauto">
                    	<ul>
                          <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"company/youhui",'order'=>"youhui_id:desc",'limit'=>"4",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'])); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"company/youhui",'order'=>"youhui_id:desc",'limit'=>"4",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        	<li>
                                <a target="_blank" title="<{$item.title}>" href="<{link ctl='gs:detail' arg0=$item.youhui_id}>"><img src="<{$pager.img}>/<{$item.face_pic}>" width="210" height="210" /></a><br />
                                <a target="_blank" title="<{$item.title}>" href="<{link ctl='gs:detail' arg0=$item.youhui_id}>"><{$item.title|cutstr:30:''}></a>
                            </li>
                          <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"company/youhui",'order'=>"youhui_id:desc",'limit'=>"4",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </ul>
                    </div>
                	
                     
                </div>
                 <!--最新优惠信息结束-->
				<div class="h30"></div>           
    <script>
		$(document).ready(function(){
			$(".qyrz ul li:last").css('border-right','none')
			
			
			$(".hot_decoration_company_show_l ul li:eq(1)").css('border-right','none')
			$(".hot_decoration_company_show_l ul li:eq(2)").css('border-bottom','none')
			$(".hot_decoration_company_show_l ul li:eq(3)").css('border-right','none').css('border-bottom','none')
			$(".hot_decoration_company_show_l ul li:eq(4)").css('border-bottom','none')
			$(".hot_decoration_company_show_l ul li:eq(5)").css('border-right','none')
			$(".hot_decoration_company_show_l ul li:eq(6)").css('border-bottom','none')
			$(".hot_decoration_company_show_l ul li:eq(7)").css('border-right','none').css('border-bottom','none')
			$(".hot_decoration_company_show_l ul li:eq(8)").css('border-bottom','none')
			$(".hot_decoration_company_show_l ul li:eq(9)").css('border-right','none').css('border-bottom','none')
			/*热门装修公司左面*/
			
			/*签单榜*/
			  $(".news_qdb_1 ul li").mouseover(function() {
                    var index = $(this).index();
                    $(".news_qdb_1 ul li").each(function(a) {
                        if (a == index) {
                            $(this).find(".news_qdb_all").show();
                            $(this).find(".news_qdb_sum").hide();
                        } else {
                            $(this).find(".news_qdb_all").hide();
                            $(this).find(".news_qdb_sum").show();
                        }

                    });

                });

                $(".news_qdb_1 ul li").eq(0).mouseover();
				
                $(".news_qdb_0 ul li").mouseover(function() {
                    var index = $(this).index();
                    $(".news_qdb_0 ul li").each(function(a) {
                        if (a == index) {
                            $(this).find(".news_qdb_all").show();
                            $(this).find(".news_qdb_sum").hide();
                        } else {
                            $(this).find(".news_qdb_all").hide();
                            $(this).find(".news_qdb_sum").show();
                        }
                    });
                });

                $(".news_qdb_0 ul li").eq(0).mouseover();
			
			 $(".newest_qdb li").mouseover(function() {
                    var index = $(this).index();
                    $(".newest_qdb li").each(function(a) {
                        if (a == index) {
                            $(this).css('background', '#e1e1e1');
                            $(".news_qdb_" + a).show();
                        } else {
                            $(this).css('background', '');
                            $(".news_qdb_" + a).hide();
                        }
                    });
                });
                $(".newest_qdb li").eq(0).mouseover(); 
		});
		
	</script>
    <?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
      <?php }} ?>