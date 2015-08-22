<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 12:07:48
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/home_tuanDetail.html" */ ?>
<?php /*%%SmartyHeaderCode:36173862555d7f5949e79d5-70153220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31614581ac3866b6dbb71e4e0044882c0efd37d9' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/home_tuanDetail.html',
      1 => 1440053427,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36173862555d7f5949e79d5-70153220',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'CONFIG' => 0,
    'tuan' => 0,
    'home' => 0,
    'huxing' => 0,
    'item' => 0,
    'package' => 0,
    'p' => 0,
    'company' => 0,
    'this' => 0,
    'signs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7f594cf30a1_32757521',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7f594cf30a1_32757521')) {function content_55d7f594cf30a1_32757521($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_block_calldata')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/block.calldata.php';
if (!is_callable('smarty_modifier_cutstr')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.cutstr.php';
if (!is_callable('smarty_function_widget')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.widget.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript"  src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/cheerful_green/static/style/Marquee.js"></script>
<script type="text/javascript">
$(function(){
	//一次横向滚动一个
	$('#marquee5').kxbdSuperMarquee({
		isMarquee:true,
		isEqual:false,
		scrollDelay:25,
		controlBtn:{left:'#goL',right:'#goR'},
		direction:'up'
		
	});
})
        </script>
            <!--         主题部分开始           -->
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
                    <span class="block_lt">></span>
                    <a href="<?php echo smarty_function_link(array('ctl'=>'home:tuanDetail','arg0'=>$_smarty_tpl->tpl_vars['tuan']->value['tuan_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['tuan']->value['title'];?>
" class="block_lt"><?php echo $_smarty_tpl->tpl_vars['tuan']->value['title'];?>
</a>
                </div>
                <div class="cl"></div>
               <!--        你所在的位置结束      -->
             
               <div class="tuanzhuang_detail w1000 mt20 hauto">
                 <!--主题左面开始-->
                 	<div class="tuanzhaung_detail_l lt">
                    	<!--左面上部开始-->
                        	<div class="tuanzhuang_detail_l_t">
                            	<div class="tuanzhuang_detail_qianyue">
                                	<p>已报名<i><?php echo $_smarty_tpl->tpl_vars['tuan']->value['sign_num'];?>
</i>户</p>
                                    <p>已签约<i><?php echo $_smarty_tpl->tpl_vars['tuan']->value['qy_num'];?>
</i>户</p>
                                    <p>已施工<i><?php echo $_smarty_tpl->tpl_vars['tuan']->value['sg_num'];?>
</i>户</p>
                                </div>
                                <div class="tuanzhuang_detail_free">
                                	<div class="tuanzhuang_detail_free_home">
                                    	<h2>免费量房</h2>
                                        <p>现场清楚了解需求</p>
                                        <p>给客户以专业建议</p>
                                    </div>
                                    <div class="tuanzhuang_detail_free_home">
                                    	<h2>免费设计方案</h2>
                                        <p>免费获取最规范、</p>
                                        <p>最实用的设计方案</p>
                                    </div>
                                    <div class="tuanzhuang_detail_free_home">
                                    	<h2>免费预算</h2>
                                        <p>精准装修预算报价</p>
                                        <p>装修费用更省30%</p>
                                    </div>
                                </div>
                            </div>
                            <div class="cl"></div>
                        <!--左面上部结束-->
                        <!--左面中部开始-->
                        	<div class="tuanzhuang_detail_l_c">
                            	<div class="tuanzhuang_l_c_l lt">
                                    <a href="<?php echo smarty_function_link(array('ctl'=>'home:tuanDetail','arg0'=>$_smarty_tpl->tpl_vars['tuan']->value['tuan_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['tuan']->value['title'];?>
">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['home']->value['face_pic'];?>
" width="350" height="245"/>
                                    </a>
                                </div>
                                <div class="tuanzhuang_l_c_r rt">
                                    <h2><a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['home']->value['name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'home:detail','arg0'=>$_smarty_tpl->tpl_vars['home']->value['id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['home']->value['name'];?>
</a></h2>
                                    <p><a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['home']->value['name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'home:detail','arg0'=>$_smarty_tpl->tpl_vars['home']->value['id']),$_smarty_tpl);?>
">[查看该小区图集]</a></p>
                                    <p>团装立省&nbsp;:&nbsp;<i>￥<?php echo $_smarty_tpl->tpl_vars['tuan']->value['jieyue'];?>
</i></p>
                                    <p class="h20"></p>
                                    <a href="<?php echo smarty_function_link(array('ctl'=>'home:tuanSign','arg0'=>$_smarty_tpl->tpl_vars['tuan']->value['tuan_id']),$_smarty_tpl);?>
" mini-load="我要参团" class="now_cantuan">立即参团</a>
                                </div>
                            </div>
                        <!--左面中部开始-->
                        <!--左面户型开始-->
                           <div class="tuanzhuang_detail_huxing hauto">
                        	<div class="tuanzhuang_detail_huxing_title">
                            	<p>户型</p>
                               <!-- <p>套餐</p>
                                <p>团装价</p>-->
                            </div>
                            
                            <div class="tuanzhuang_detail_huxing_b">
                                  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['huxing']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>   
                            	<div class="tuanzhuang_detail_huxing_l" >
                                   <a href="<?php echo smarty_function_link(array('ctl'=>'home:tuanSign','arg0'=>$_smarty_tpl->tpl_vars['tuan']->value['tuan_id']),$_smarty_tpl);?>
" mini-load="我要参团"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['pic'];?>
" width="210" height="147" /></a>
                                    <p><a href="<?php echo smarty_function_link(array('ctl'=>'home:tuanSign','arg0'=>$_smarty_tpl->tpl_vars['tuan']->value['tuan_id']),$_smarty_tpl);?>
" mini-load="我要参团"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></p>
                                </div>
                               <!-- <div class="tuanzhuang_detail_huxing_r">
                                    
                                    <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['package']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['p']->value['huxing_id']==$_smarty_tpl->tpl_vars['item']->value['id']){?>
                                	<div class="tuanzhaung_detail_huxing_r_t">
                                    	<p><?php echo $_smarty_tpl->tpl_vars['p']->value['price'];?>
套餐</p>
                                        <p>团装总造价：<b>￥<?php echo $_smarty_tpl->tpl_vars['p']->value['total_price'];?>
</b>元</p>
                                    </div>
                                    <?php }?>
                                    <?php } ?>
                                   
                                </div>-->
                                <?php } ?>
                                <div class="cl"></div>
                            </div>
                            
                         
                        </div>
                        <!--左面户型结束-->
                        <!--团装说明开始-->
                        <div class="tuanzhuang_shuoming_all">
                        	<h2>团装优惠</h2>
                        	<div class="tuanzhaung_shuoming">
                                    <div class="tuanzhaung_youhui"style="float:left">
                                        <ul>
                                            <h3> 亿家网“当代卡梅尔小镇”团装活动参加企业：</h3>
                                            <li> 武汉市得易空间装饰工程有限公司  </li>
                                            <li> 武汉市鲁公大宅装饰工程有限公司 </li>                     
                                            <li> 武汉市XXXXXXXXXXXXXXXXXXXX</li>                                                                                
                                            <li>  武汉市XXXXXXXXXXXXXXXXXXXX </li> 
                                            <li> 武汉市XXXXXXXXXXXXXXXXXXXX</li>                                                                                
                                            <li>  武汉市XXXXXXXXXXXXXXXXXXXX </li> 
                                        </ul>
                                    </div>
                                    <div class="tuanzhaung_youhui" style="float:right;margin-left:0px">
                                        <ul>
                                            <h3>团装活动细节：</h3>
                                            <li> 1：团装时间1月20至2月20日截至，过期无效。 </li>
                                            <li> 2：凡报名参加团购业主签单金额：
                                                <p>&nbsp;&nbsp;&nbsp;3万以上（半包）享受最终报价后立减1000元现金</p>                                                      
                                                <p>&nbsp;&nbsp;&nbsp;8万以上（半包）享受最终报价后立减2000元现金</p>
                                                <p>&nbsp;&nbsp;&nbsp;5万以上（全包）享受最终报价后立减1000元现金</p>
                                                <p>&nbsp;&nbsp;&nbsp;10万以上（全包）享受最终报价后立减2000元现金</p>
                                                
                                            </li>                     
                                                                                                                       
                                           
                                        </ul>
                                    </div>
                                    
                            </div>
                        </div>
                        <!--团装说明结束-->
                    </div>
                 <!--主题左面结束-->
                 <!--主题右面开始-->
                 <div class="tuanzhaung_detail_r rt" style="width:380px">
                     <div class="tuanzhuang_detail_r_t" style="height:240px">
                           <!-- <h2><a title='<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
' target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
</a></h2>-->
                            <a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/cheerful_green/static/images/tuan_logo.jpg" width="300" height="100" /></a>
                            <p><b>联系电话&nbsp;：</b>&nbsp;<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['phone'];?>
</p>
                            <!--<p><a title='<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
' target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $_smarty_tpl->tpl_vars['company']->value['qq'];?>
&amp;site=qq&amp;menu=yes"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/images/qqjt.png" /></a></p>-->
                           <!-- <p><b>公司地址&nbsp;:&nbsp;</b><?php echo $_smarty_tpl->tpl_vars['company']->value['addr'];?>
</p>-->
                           <p>省钱、省事、省心、更多团装活动请</p>
                           <P> <a href="<?php echo smarty_function_link(array('ctl'=>'home:tuanSign','arg0'=>$_smarty_tpl->tpl_vars['tuan']->value['tuan_id']),$_smarty_tpl);?>
" mini-load="我要参团" class="now_cantuan">立即参团</a></p>
                            <p class="h10"></p>
                        </div>
                     <h2>最新享受免费服务的业主：</h2>
                        <div id="marquee5" class="tuanzhaung_detail_r_b" style="width:380px;height:300px;margin-right: 5px;margin-top: 10px;padding-top:10px;overflow: hidden; font-size: 13px;">
                        	
                     
                            <ul>
                              
                                 <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"home/sign",'city_id'=>$_smarty_tpl->tpl_vars['this']->value->request['city_id'])); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"home/sign",'city_id'=>$_smarty_tpl->tpl_vars['this']->value->request['city_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                         <li>
                      <p><a target="_blank" title="<{$item.title}>" href="<{link ctl='home:tuanDetail' arg0=$item.tuan_id}>" ><{$item.mobile|cutstr:8:'**'}>报名了
                    <{calldata mdl="home/tuan" tuan_id=$item.tuan_id city_id=$this->request['city_id']}>“<{$item.title|cutstr:30:'**'}>”<{/calldata}></a></p>
                        </li>
                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"home/sign",'city_id'=>$_smarty_tpl->tpl_vars['this']->value->request['city_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                
                               <!-- <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['signs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                            	<li>
                                	<span><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['cantact'],3,'**');?>
</span>
                                    <span><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['mobile'],5,'**');?>
</span>
                                    <span><?php echo date('m/d',$_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</span>
                                </li>
                                <?php } ?>-->
                            </ul>
                        </div>
                      <h2>装修知识</h2>
                      <div class="decoration_class_zhuangxiu">
                          <ul class="bodr_b bgwhite">
                            <?php echo smarty_function_widget(array('id'=>'article/newitems','limit'=>8),$_smarty_tpl);?>

                            <p class="mt10"></p>
                        </ul>
                     </div>
                      <h2>装修日记</h2>
                      <div class="decoration_class_t_l_r_b bgwhite" style="width: 400px;height:200px" >
                            <div class="decoration_class_diary_l  bgwhite" style="float:left">
                        <ul style="margin-top:2px">
                              <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"diary/diary",'order'=>"diary_id:desc",'limit'=>"8")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"diary/diary",'order'=>"diary_id:desc",'limit'=>"8"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                              
                             <li style="width:190px;padding-left:1px">
                                 <div><font style ="font-size:13px"><{$index+1}>.</font><a target="_blank" href="<{link ctl='content:diaryDetail' arg0=$item.diary_id}>" title="<{$item.title}>" ><{$item.title|cutstr:22:""}></a></div>
                              </li>
                              <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"diary/diary",'order'=>"diary_id:desc",'limit'=>"8"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            <p class="mt10"></p>
                        </ul>
                            </div>
                            <div class="decoration_class_diary_r" style="float:right;padding-top: px;" >
                                 <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"diary/diary",'order'=>"diary_id:desc",'limit'=>"8")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"diary/diary",'order'=>"diary_id:desc",'limit'=>"8"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <a target="_blank" href="<{link ctl='content:diaryDetail' arg0=$item.diary_id}>" title="<{$item.title}>" > <img src="<{$pager.img}>/<{$item.face_pic}>" width="190" height="190" /></a>
                                 <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"diary/diary",'order'=>"diary_id:desc",'limit'=>"8"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                </div>
                        </div>      
                        <script>
                             (function(K, $) {
                     $(".decoration_class_diary_r a").each(function(a){
                          var index = $(this).index();
                           if (a == 0) {
                             $(this).show();  
                           }
                           else {
                        $(this).hide();
                                }
                     });           
                             
            $(".decoration_class_diary_l ul li").mouseover(function() {
                //$(this).css('color','#00AD28');
                var index = $(this).index();
                $(".decoration_class_diary_r a").each(function(a) {
                    if (a == index) {                 
                        $(this).show();       
                    } else {
                     
                        $(this).hide();
                    }
                });
            });
        })(window.KT, window.jQuery);
				 	
				 </script>    
                     
                     
                     
                    </div>
                 <!--主题右面结束-->
                  <div class="cl h20"></div>
            
               
               </div>    
               
            </div>
<?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
   <?php }} ?>