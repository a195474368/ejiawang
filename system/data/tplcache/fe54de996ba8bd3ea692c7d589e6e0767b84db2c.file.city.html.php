<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:20:00
         compiled from "/www/wwwroot/www.fzgxw.com/themes/cheerful_green/city.html" */ ?>
<?php /*%%SmartyHeaderCode:172998682455d7ea6029b606-67571878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe54de996ba8bd3ea692c7d589e6e0767b84db2c' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/cheerful_green/city.html',
      1 => 1440121013,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172998682455d7ea6029b606-67571878',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
    'CONFIG' => 0,
    'allcity' => 0,
    'item3' => 0,
    'allprovinces' => 0,
    'item1' => 0,
    'item2' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea6078de45_66311061',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea6078de45_66311061')) {function content_55d7ea6078de45_66311061($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_block_KT')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/block.KT.php';
if (!is_callable('smarty_function_widget')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.widget.php';
if (!is_callable('smarty_block_calldata')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/block.calldata.php';
?>﻿<?php echo $_smarty_tpl->getSubTemplate ("block/header_city.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



</div>
    <!--logo结束-->
    <div class="cl"></div>
    <!--主题开始-->
    <div class="index_b_bg hauto">
    <!--城市切换开始-->
    	<div class="change_city_main_style hauto w1000">
        	<div class="change_city_main_style_t">
            	<span>亿家网猜您可能在<?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
，</span>
                <a title="<?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['allcity']->value[$_smarty_tpl->tpl_vars['request']->value['city_id']]['siteurl'];?>
" class="goincity">点击进入<?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
站</a>
                <ul>
				 <li><a href="<?php echo smarty_function_link(array('ctl'=>'gs'),$_smarty_tpl);?>
">装修公司 </a></li>
                    <li><a href="<?php echo smarty_function_link(array('ctl'=>'tenders'),$_smarty_tpl);?>
">免费设计</a></li>
                    <li><a href="<?php echo smarty_function_link(array('ctl'=>'zb'),$_smarty_tpl);?>
">免费报价</a></li>
                    <li><a href="<?php echo smarty_function_link(array('ctl'=>'case'),$_smarty_tpl);?>
">装修效果图</a></li>
                    <li><a href="<?php echo smarty_function_link(array('ctl'=>'ask'),$_smarty_tpl);?>
">装修问答</a></li>
                    <li><a href="<?php echo smarty_function_link(array('ctl'=>'content'),$_smarty_tpl);?>
">学装修</a></li>
                   
                </ul>
                 <div class="cl"></div>
            </div>
           
            <div class="chanage_city_main_style_b hauto">
            	<div class="jianyuecity hauto" style="width:1195px">
                    <span>热门城市</span>           
                    <ul>
                       <?php  $_smarty_tpl->tpl_vars['item3'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item3']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allcity']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item3']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item3']->key => $_smarty_tpl->tpl_vars['item3']->value){
$_smarty_tpl->tpl_vars['item3']->_loop = true;
 $_smarty_tpl->tpl_vars['item3']->iteration++;
?>
                          <?php if ($_smarty_tpl->tpl_vars['item3']->value['audit']==1){?>
                            
                       <li><a href="<?php echo $_smarty_tpl->tpl_vars['item3']->value['siteurl'];?>
"><?php echo $_smarty_tpl->tpl_vars['item3']->value['city_name'];?>
</a></li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['item3']->iteration>10){?><?php break 1?><?php }?>
                        <?php } ?>
                    </ul>                         
                    <!--<span class="kaitongcity">共开通了<?php echo count($_smarty_tpl->tpl_vars['allcity']->value);?>
个城市</span>--><br>
    
                    <div class="cl"></div>
                     <?php  $_smarty_tpl->tpl_vars['item1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item1']->_loop = false;
 $_smarty_tpl->tpl_vars['key1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allprovinces']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item1']->key => $_smarty_tpl->tpl_vars['item1']->value){
$_smarty_tpl->tpl_vars['item1']->_loop = true;
 $_smarty_tpl->tpl_vars['key1']->value = $_smarty_tpl->tpl_vars['item1']->key;
?> 
                     
                     <div class="cl"></div>
                         <span><?php echo $_smarty_tpl->tpl_vars['item1']->value['name'];?>
</span> 
                          <ul>
                        <?php  $_smarty_tpl->tpl_vars['item2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allcity']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item2']->key => $_smarty_tpl->tpl_vars['item2']->value){
$_smarty_tpl->tpl_vars['item2']->_loop = true;
?> 
                         <?php if ($_smarty_tpl->tpl_vars['item2']->value['audit']==1&&$_smarty_tpl->tpl_vars['item2']->value['provinces_id']==$_smarty_tpl->tpl_vars['item1']->value['id']){?> 
                       <li><a href="<?php echo $_smarty_tpl->tpl_vars['item2']->value['siteurl'];?>
"><?php echo $_smarty_tpl->tpl_vars['item2']->value['city_name'];?>
</a></li>
                       <?php }?>
                        <?php } ?>
                    </ul>  
                      
                    <?php } ?>
                    
                       
                </div>
                
                <div class="cl"></div>
                <div class="all_city">
                    <p style="color:white">所有开通城市</p>
                  <!-- <a href="###"><span style="background:url(<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/images/jianyue.png) no-repeat left center;">显示全部城市</span></a>-->
                </div>
            </div>
        	
        </div>
    <!--城市切换结束-->

<script>
$(document).ready(function(){
/*var $category = $('.jianyuecity ul li:gt(13):not(:last)');     	    //  获得索引值大于5的品牌集合对象(除最后一条)	
		$category.hide();							    //  隐藏上面获取到的jQuery对象。
		var $toggleBtn = $('div.all_city > a');             //  获取"显示全部品牌"按钮
		$toggleBtn.click(function(){
		       if($('.all_city a span').text()== '精简城市'){
					$category.hide();                   		 //  隐藏$category
					$('.all_city a span').css("background","url(<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/images/jianyue.png) no-repeat left center").text("显示全部城市");   
                //改变背景图片和文本
					$('.jianyuecity ul li').removeClass("orange");			// 去掉高亮样式
			  }else{
					$category.show();                   		 //  显示$category
					$('.all_city a span')
						.css("background","url(<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/images/all_fenlei.png) no-repeat left center")    
						.text("精简城市");                  //改变背景图片和文本
					$('.jianyuecity ul li').filter(":contains('武汉'),:contains('深圳'),:contains('广州'),:contains('上海')").addClass("orange");	
                    //添加高亮样式
			  }
			return false;					      	//超链接不跳转
		});	*/
	
	
 $(".decoration_case_b_l ul li").mouseover(function() {
                            var index = $(this).index();
                            $(".decoration_case_b_l ul li").each(function(a) {
                                var nn = a + 1
                                if (a == index) {
                                   
                                    $(".decoration_case_b_all_" + nn).show();
                                } else {
                                    $(this).find("a").removeClass("currentt");
                                    $(".decoration_case_b_all_" + nn).hide();
                                }

                            });
                        });
                        $(".decoration_case_b_l ul li").eq(0).mouseover();
								
               		
                $(".decoration_case_b_r_l").mouseover(function(){
                        $(this).find(".p1").show();
                        $(this).find(".text").show();
                        
                        }).mouseout(function(){
                            $(this).find(".p1").hide();
                            $(this).find(".text").hide();
                            });
                            
                            
                        $(".decoration_case_b_r_r ul li").mouseover(function(){
                        $(this).find(".p1").show();
                        $(this).find(".text").show();
                        
                        }).mouseout(function(){
                            $(this).find(".p1").hide();
                            $(this).find(".text").hide();
                    });	
					
					   $(".changecity_yzpj ul li .changecity_yzpj_content").mouseover(function(){
						   $(this).siblings(".span91").css('color','#00AD28');
					   }).mouseout(function(){
						     $(this).siblings(".span91").css('color','')
						   });
                

});
</script>
<div class="change_city_free_tenders w1000 mt20">
      		<div class="change_city_free_teders_l lt">
            	<p>
                	<strong>免费发布招标</strong>
                    <i>Free Publishing Tenders</i>
               </p>
            </div>
            <div class="change_city_free_tenders_c lt">
            	<span class="fabuzb_0 jxz"></span>
                <p>申请免费量房<br />已有<i>23789</i>人申请</p>
            </div>
             <div class="change_city_free_tenders_c lt">
            	<span class="fabuzb_1 jxz"></span>
                <p>申请免费户型设计<br />已有<i>23789</i>人申请</p>
            </div>
             <div class="change_city_free_tenders_c lt">
            	<span class="fabuzb_2 jxz"></span>
                <p>申请免费装修预算<br />已有<i>23789</i>人申请</p>
            </div>
            <div class="change_city_tenders_r lt">
            	
                	<div class="changecity_free_sq">
                    <iframe id="miniframe" name="miniframe" style="display:none;"></iframe>
                    <form action="<?php echo smarty_function_link(array('ctl'=>'tenders:save','http'=>true),$_smarty_tpl);?>
" mini-form="tenders" method="post" >
                    	<input type="text" name="data[mobile]" id='data_mobile' class="free_sq" value="请输入您的联系电话"/>
                        <input type="submit" name="sq" class="mfsq_but" value="" />
                     </form>
                     <p>已有<b>23789</b>人申请</p>
                    </div>
                <script>
                    $(document).ready(function(){
                        $("#data_mobile").focus(function(){
                            if($(this).val() == '请输入您的联系电话'){
                                $(this).val('');
                            }
                        }).focusout(function(){
                             if($(this).val() == ''){
                                $(this).val('请输入您的联系电话');
                            }
                        });
                    });
                </script>
                
            </div>
      </div>
    
        <!--------------装修案例开始-------------------->
    <div class="decoration_case hauto mt25">
        <div class="decoration_case_title w1000 " >
            <h2 class="lt"><a href="<?php echo smarty_function_link(array('ctl'=>'case'),$_smarty_tpl);?>
">亿家装修案例</a></h2><span class="rt mt10"><a href="<?php echo smarty_function_link(array('ctl'=>'case'),$_smarty_tpl);?>
">更多>></a></span>
        </div>
        <div class="cl"></div>
        <div class="decoration_case_b w1000 hauto bgwhite mt10">
            <div class="decoration_case_b_l lt bodr">
                <ul>
                    <li><a href="<?php echo smarty_function_link(array('ctl'=>'case'),$_smarty_tpl);?>
" class="dcotion_case_bg" ></a><p><a href="<?php echo smarty_function_link(array('ctl'=>'case'),$_smarty_tpl);?>
" class="red">风格</a><br /><font>Style</font></p></li>
                    <li><a href="<?php echo smarty_function_link(array('ctl'=>'case'),$_smarty_tpl);?>
" class="dcotion_case_bg"></a><p><a href="<?php echo smarty_function_link(array('ctl'=>'case'),$_smarty_tpl);?>
" class="red">空间</a><br /><font>Space</font></p></li>
                    <li><a href="<?php echo smarty_function_link(array('ctl'=>'case'),$_smarty_tpl);?>
" class="dcotion_case_bg "></a><p><a href="<?php echo smarty_function_link(array('ctl'=>'case'),$_smarty_tpl);?>
" class="red">别墅</a><br /><font>Ulila</font></p></li>
                    <li><a href="<?php echo smarty_function_link(array('ctl'=>'case'),$_smarty_tpl);?>
" class="dcotion_case_bg"></a><p><a href="<?php echo smarty_function_link(array('ctl'=>'case'),$_smarty_tpl);?>
" class="red">小户型</a><br /><font>Small</font></p></li>
                    <li><a href="<?php echo smarty_function_link(array('ctl'=>'case'),$_smarty_tpl);?>
" class="dcotion_case_bg"></a><p><a href="<?php echo smarty_function_link(array('ctl'=>'case'),$_smarty_tpl);?>
" class="red">公装</a><br /><font>Publicloaded</font></p></li>
                </ul>
            </div>
            <div class="decoration_case_b_all_1">
                <div class="decoration_case_b_r lt hauto bgwhite">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('name'=>"首页装修案例:风格",'limit'=>"1")); $_block_repeat=true; echo smarty_block_KT(array('name'=>"首页装修案例:风格",'limit'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <div class="decoration_case_b_r_l lt hauto">
                        <a href="<{link ctl='case:detail' arg0=$item.case_id}>"><img src="<{$pager.img}>/<{$item.thumb}>" width="240" height="295"/></a>
                        <p class="p1 none"></p>
                        <p class="text none"><a href="<{link ctl='case:detail' arg0=$item.case_id}>"><{$item.title}></a></p>
                    </div>
                    <div class="decoration_case_b_r_r lt hauto">
                        <ul>
                            <{foreach $item.ext.photos as $photo}>
                            <li>
                                <a href="<{link ctl='case:detail' arg0=$item.case_id}>"><img src="<{$pager.img}>/<{$photo.photo}>_thumb.jpg" width="180" height="145"/></a>
                                <p class="p1 none"></p>
                                <p class="text none"><a href="<{link ctl='case:detail' arg0=$item.case_id}>"><{$photo.title}></a></p>
                            </li>
                            <{if $photo@iteration > 7}><{break}><{/if}>
                            <{/foreach}>
                        </ul>
                    </div>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('name'=>"首页装修案例:风格",'limit'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
            </div>
            <div class="decoration_case_b_all_2">
                <div class="decoration_case_b_r lt hauto bgwhite">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('name'=>"首页装修案例:空间",'limit'=>"1")); $_block_repeat=true; echo smarty_block_KT(array('name'=>"首页装修案例:空间",'limit'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <div class="decoration_case_b_r_l lt hauto">
                        <a href="<{link ctl='case:detail' arg0=$item.case_id}>"><img src="<{$pager.img}>/<{$item.thumb}>" width="240" height="295"/></a>
                        <p class="p1 none"></p>
                        <p class="text none"><a href="<{link ctl='case:detail' arg0=$item.case_id}>"><{$item.title}></a></p>
                    </div>
                    <div class="decoration_case_b_r_r lt hauto">
                        <ul>
                            <{foreach $item.ext.photos as $photo}>
                            <li>
                                <a href="<{link ctl='case:detail' arg0=$item.case_id}>"><img src="<{$pager.img}>/<{$photo.photo}>_thumb.jpg" width="180" height="145"/></a>
                                <p class="p1 none"></p>
                                <p class="text none"><a href="<{link ctl='case:detail' arg0=$item.case_id}>"><{$photo.title}></a></p>
                            </li>
                            <{if $photo@iteration > 7}><{break}><{/if}>
                            <{/foreach}>
                        </ul>
                    </div>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('name'=>"首页装修案例:空间",'limit'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
            </div>
            <div class="decoration_case_b_all_3">
                <div class="decoration_case_b_r lt hauto bgwhite">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('name'=>"首页装修案例:别墅",'limit'=>"1")); $_block_repeat=true; echo smarty_block_KT(array('name'=>"首页装修案例:别墅",'limit'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <div class="decoration_case_b_r_l lt hauto">
                        <a href="<{link ctl='case:detail' arg0=$item.case_id}>"><img src="<{$pager.img}>/<{$item.thumb}>" width="240" height="295"/></a>
                        <p class="p1 none"></p>
                        <p class="text none"><a href="<{link ctl='case:detail' arg0=$item.case_id}>"><{$item.title}></a></p>
                    </div>
                    <div class="decoration_case_b_r_r lt hauto">
                        <ul>
                            <{foreach $item.ext.photos as $photo}>
                            <li>
                                <a href="<{link ctl='case:detail' arg0=$item.case_id}>"><img src="<{$pager.img}>/<{$photo.photo}>_thumb.jpg" width="180" height="145"/></a>
                                <p class="p1 none"></p>
                                <p class="text none"><a href="<{link ctl='case:detail' arg0=$item.case_id}>"><{$photo.title}></a></p>
                            </li>
                            <{if $photo@iteration > 7}><{break}><{/if}>
                            <{/foreach}>
                        </ul>
                    </div>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('name'=>"首页装修案例:别墅",'limit'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
            </div>
            <div class="decoration_case_b_all_4">
                <div class="decoration_case_b_r lt hauto bgwhite">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('name'=>"首页装修案例:小户型",'limit'=>"1")); $_block_repeat=true; echo smarty_block_KT(array('name'=>"首页装修案例:小户型",'limit'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <div class="decoration_case_b_r_l lt hauto">
                        <a href="<{link ctl='case:detail' arg0=$item.case_id}>"><img src="<{$pager.img}>/<{$item.thumb}>" width="240" height="295"/></a>
                        <p class="p1 none"></p>
                        <p class="text none"><a href="<{link ctl='case:detail' arg0=$item.case_id}>"><{$item.title}></a></p>
                    </div>
                    <div class="decoration_case_b_r_r lt hauto">
                        <ul>
                            <{foreach $item.ext.photos as $photo}>
                            <li>
                                <a title="<{$item.title}>" target="_blank" href="<{link ctl='case:detail' arg0=$item.case_id}>"><img src="<{$pager.img}>/<{$photo.photo}>_thumb.jpg" width="180" height="145"/></a>
                                <p class="p1 none"></p>
                                <p class="text none"><a title="<{$item.title}>" target="_blank" href="<{link ctl='case:detail' arg0=$item.case_id}>"><{$photo.title}></a></p>
                            </li>
                            <{if $photo@iteration > 7}><{break}><{/if}>
                            <{/foreach}>
                        </ul>
                    </div>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('name'=>"首页装修案例:小户型",'limit'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
            </div>
            <div class="decoration_case_b_all_5">
                <div class="decoration_case_b_r lt hauto bgwhite">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('name'=>"首页装修案例:公装",'limit'=>"1")); $_block_repeat=true; echo smarty_block_KT(array('name'=>"首页装修案例:公装",'limit'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <div class="decoration_case_b_r_l lt hauto">
                        <a title="<{$item.title}>" target="_blank" href="<{link ctl='case:detail' arg0=$item.case_id}>"><img src="<{$pager.img}>/<{$item.thumb}>" width="240" height="295"/></a>
                        <p class="p1 none"></p>
                        <p class="text none"><a title="<{$item.title}>" target="_blank"  href="<{link ctl='case:detail' arg0=$item.case_id}>"><{$item.title}></a></p>
                    </div>
                    <div class="decoration_case_b_r_r lt hauto">
                        <ul>
                            <{foreach $item.ext.photos as $photo}>
                            <li>
                                <a title="<{$item.title}>" target="_blank" href="<{link ctl='case:detail' arg0=$item.case_id}>"><img src="<{$pager.img}>/<{$photo.photo}>_thumb.jpg" width="180" height="145"/></a>
                                <p class="p1 none"></p>
                                <p class="text none"><a href="<{link ctl='case:detail' arg0=$item.case_id}>"><{$photo.title}></a></p>
                            </li>
                            <{if $photo@iteration > 7}><{break}><{/if}>
                            <{/foreach}>
                        </ul>
                    </div>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('name'=>"首页装修案例:公装",'limit'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        (function(K, $) {
            $(".decoration_case_b_l ul li").mouseover(function() {
                var index = $(this).index();
                $(".decoration_case_b_l ul li").each(function(a) {
                    if (a == index) {
                        $(this).addClass("dcotion_case_bgon");
                        $(this).find(".red").css('color', '#00AD28');
						if($.browser.msie){
                        	$(this).find(".dcotion_case_bg").css('backgroundPositionX','-225px');}
							else{$(this).find(".dcotion_case_bg").stop().animate({backgroundPositionX: '-225px'}, 100);}
                    } else {
                        $(this).removeClass("dcotion_case_bgon");
                        $(this).find(".red").css('color', '');
                        if($.browser.msie){
                        	$(this).find(".dcotion_case_bg").css('backgroundPositionX','-179px');}
							else{$(this).find(".dcotion_case_bg").stop().animate({backgroundPositionX: '-179px'}, 100);}
                    }
                });
            });
        })(window.KT, window.jQuery);
    </script>
    <!--------------装修案例结束-------------------->
    
    
   <div class="cl"></div>

	<div class="decoration_class w1000 hauto mt15">
        <h2><a href="<?php echo smarty_function_link(array('ctl'=>'content:items'),$_smarty_tpl);?>
" class="block_lt">亿家装修课堂</a><a href="<?php echo smarty_function_link(array('ctl'=>'content:items'),$_smarty_tpl);?>
" class="block rt a31 mt10">更多>></a></h2>
        <div class="cl"></div>
        <div class="w1000 hauto bgwhite mt10">
            <div class="decoration_class_t hauto w1000">
                <div class="decoration_class_t_l hauto bodr_r lt" style="width:750px">
                    <div class="decoration_class_t_l_l lt" style="width: 299px;height:auto;border-right:1px solid #D5D5D5;padding-bottom: 8px;">
						<div class="decoration_ketang_img">
                                                    <ul style="margin:3px;">
                            	<!--<li>
                                	<a href="/ask.html"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/cheerful_green/static/images/cjwt.jpg" width="140" height="90"/></a>
                                    <div class="decoration_ketang_opacity none">
                                        <p></p>
                                        <p class="text">常见问题</p>
                                    </div>
                                </li>-->
                              	<li style="width:290px">
                                	<a href="<?php echo smarty_function_link(array('ctl'=>'content:items'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/cheerful_green/static/images/zxzs.jpg" width="290" height="90"/></a>
                                     <div class="decoration_ketang_opacity none" style="text-align:center;">
                                        <p></p>
                                        <p class="text">建材常识</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                      <script>
					  	$(".decoration_ketang_img ul li").mouseover(function(){
							$(this).find(".decoration_ketang_opacity").show();
						}).mouseout(function(){
							$(this).find(".decoration_ketang_opacity").hide();
						});
					  </script>
                      	<div class="decoration_ketang_jiancai_b" style="height:auto">
                        	<h3>建材常识</h3>
                            <ul>
                            
                              <!-- <li><a href="###">实木复合地板选购全攻略</a></li> -->
							  <?php echo smarty_function_widget(array('id'=>'article/randitems','limit'=>10),$_smarty_tpl);?>
                               
                            </ul>
                        </div>
                    </div>
                    <div class="decoration_class_t_l_r lt" style="width:400px;height:430px">
                       
                        <p class="f18 p35">
                              <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"article/view",'from'=>'article','order'=>"views:desc",'limit'=>"1")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"article/view",'from'=>'article','order'=>"views:desc",'limit'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                              <a target="_blank" href="<{link ctl='content:detail' arg0=$item.article_id}>" title="<{$item.title}>" ><{$item.title|cutstr:40:""}></a>
                              <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"article/view",'from'=>'article','order'=>"views:desc",'limit'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </p>
                        <ul class="bodr_b">
                            <?php echo smarty_function_widget(array('id'=>'article/newitems','limit'=>6),$_smarty_tpl);?>

                            <p class="mt10"></p>
                        </ul>
                    
                       <div class="decoration_class_t_r_ask" style="width:400px;height:230px" >
                         
                         <div style="width:400px;height:22px;padding:3px 0;font-size:14pt;font-weight: bold"> 
                    <p>装修问答</p>
                         </div>
                        
                        <ul class="mt15" style="width:420px;height:230px;border-bottom:1px solid #D5D5D5;margin:5px 5px;list-style: decimal">
                            
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"ask/ask",'answer_id'=>'>:0','order'=>"ask_id:desc",'limit'=>"8")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"ask/ask",'answer_id'=>'>:0','order'=>"ask_id:desc",'limit'=>"8"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 
                         
                            <li style="padding-left:2px;">
                              <a href="<{link ctl='ask'}>" class="f14 red"><font style="color:#00AD28">装修问答</font></a><font class="f14">&nbsp;|&nbsp;</font>
                               <a target='_blank' title="<{$item.title}>" href="<{link ctl='ask:detail' arg0=$item.ask_id}>"  class="f14 black8"><{$item.title}></a>
                            </li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"ask/ask",'answer_id'=>'>:0','order'=>"ask_id:desc",'limit'=>"8"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
                                   
                            <p class="mt10"></p>                                        
                        </ul>
                    </div>
            
                    </div>
                    
                </div>
                <div class="decoration_class_t_r hauto lt" style="width:440px">
                      <div style="width:400px;height:32px;padding-top:3px;font-size:15pt;font-weight: bold"> 
                            <p>装修日记</p>
                        </div>
                        
                        <div class="decoration_class_t_l_r_b" >
                            <div class="decoration_class_diary_l" style="float:left;padding-left:30px;width:185px">
                        <ul style="margin-top:2px">
                              <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"diary/diary",'order'=>"diary_id:desc",'limit'=>"8")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"diary/diary",'order'=>"diary_id:desc",'limit'=>"8"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                              
                             <li style="width:170px;padding-left:1px">
                                 <div><font style ="font-size:13px"><{$index+1}>.</font><a target="_blank" href="<{link ctl='content:diaryDetail' arg0=$item.diary_id}>" title="<{$item.title}>" ><{$item.title|cutstr:16:""}></a></div>
                              </li>
                              <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"diary/diary",'order'=>"diary_id:desc",'limit'=>"8"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            <p class="mt10"></p>
                        </ul>
                            </div>
                            <div class="decoration_class_diary_r" style="float:left;padding-top: 8px;" >
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
                   
                     <div class="decoration_class_t_r_img hauto" style="width:350px">
                        <ul>
                            <li style="width:110px;padding:3px;">
                                <a target="_blank" title="涂料计算器" href="<?php echo smarty_function_link(array('ctl'=>'tools:items','arg0'=>'main'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/pic/tljsq.png" width="56" height="56"/></a><br/>
                                 <a target="_blank" title="涂料计算器" href="<?php echo smarty_function_link(array('ctl'=>'tools:items','arg0'=>'main'),$_smarty_tpl);?>
">涂料计算器</a>
                            </li>
                            <li style="width:110px;padding:3px;">
                                <a target="_blank" title="地板计算器" href="<?php echo smarty_function_link(array('ctl'=>'tools:items','arg0'=>'diban'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/pic/dbjsq.png" width="56" height="56"/></a><br/>
                                <a target="_blank" title="地板计算器" href="<?php echo smarty_function_link(array('ctl'=>'tools:items','arg0'=>'diban'),$_smarty_tpl);?>
">地板计算器</a>
                            </li>
                            <li style="width:110px;padding:3px;">
                                <a target="_blank" title="壁纸计算器" href="<?php echo smarty_function_link(array('ctl'=>'tools:items','arg0'=>'bizhi'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/pic/tpjsq.png" width="56" height="56"/></a><br/>
                               <a target="_blank" title="壁纸计算器" href="<?php echo smarty_function_link(array('ctl'=>'tools:items','arg0'=>'bizhi'),$_smarty_tpl);?>
">壁纸计算器</a>
                            </li>
                            <li style="width:110px;padding:3px;">
                                <a target="_blank" title="墙砖预算器" href="<?php echo smarty_function_link(array('ctl'=>'tools:items','arg0'=>'qiangzhuan'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/pic/dbjsq.png" width="56" height="56"/></a><br/>
                                <a target="_blank" title="墙砖预算器" href="<?php echo smarty_function_link(array('ctl'=>'tools:items','arg0'=>'qiangzhuan'),$_smarty_tpl);?>
">墙砖预算器</a>
                            </li>
                            <li style="width:110px;padding:3px;">
                                <a target="_blank" title="窗帘计算器" href="<?php echo smarty_function_link(array('ctl'=>'tools:items','arg0'=>'chuanlian'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/pic/tljsq1.png" width="56" height="56"/></a><br/>
                                <a target="_blank" title="窗帘计算器" href="<?php echo smarty_function_link(array('ctl'=>'tools:items','arg0'=>'chuanlian'),$_smarty_tpl);?>
">窗帘计算器</a>
                            </li>
                            <li style="width:110px;padding:3px;">
                                <a target="_blank" title="地砖计算器" href="<?php echo smarty_function_link(array('ctl'=>'tools:items','arg0'=>'dizhuan'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/pic/dbjsq2.png" width="56" height="56"/></a><br/>
                               <a target="_blank" title="地砖计算器" href="<?php echo smarty_function_link(array('ctl'=>'tools:items','arg0'=>'dizhuan'),$_smarty_tpl);?>
">地砖计算器</a>
                            </li>
                        </ul>
                     </div>
                    
                   
                    <!--<p class="bodr_b"></p>-->
                    <div class="decoration_class_t_r_img1">
                        <?php echo smarty_function_widget(array('id'=>"adv",'name'=>"首页最下面装修学堂右侧小图广告",'limit'=>"1"),$_smarty_tpl);?>

                    </div>
                </div>

            </div>
            <div class="cl"></div>
            
        </div>

    </div>
    

<div class="friends_link w1000 hauto mt30 mb20">
        <h3>亿家装修网友情链接</a></h3>
        <div class="w1000 friend_link_show bgwhite hauto mt10"><p><a href="http://www.ejiawang.cc" target="_blank">装修平台</a><a href="http://wh.ejiawang.cc/" target="_blank">武汉装修招标</a><a href="http://wh.ejiawang.cc" target="_blank">武汉装修网</a><a href="http://www.51zxgs.com" target="_blank">成都龙发装饰</a><a href="http://www.1688bm.com" target="_blank">家居o2o</a><a href="http://www.qingbaosh.com/" target="_blank">上海装修网</a><a href="http://dz.25nc.com/" target="_blank">达州装修网</a><a href="http://www.lovesthome.com" target="_blank">昆明装修公司</a><a href="http://www.bzzss.com" target="_blank">成都家装</a><a href="http://www.ynfjw.com" target="_blank">昆明装饰公司</a><a href="http://www.frsky.com/" target="_blank">软装公司</a><a href="http://www.fyzxw.cn" target="_blank">阜阳装修网</a><a href="http://www.ace0898.com" target="_blank">海口装修</a><a href="http://www.sxmantanghong.com" target="_blank">满堂红装饰</a><a href="http://www.baietu.com/" target="_blank">成都家装公司</a><a href="http://www.shlpzs.com" target="_blank">仿大理石</a><a href="http://www.fangshui168.com" target="_blank">防水涂料</a><a href="http://wuhan.11467.com/" target="_blank">武汉企业网</a><a href="http://www.shjazs.com/" target="_blank">上海家装</a><a href="http://www.chaojideng.com/" target="_blank">灯饰</a><a href="http://www.18722089329.com" target="_blank">天津装修公司</a><a href="http://www.jintzs.com" target="_blank">长沙装修公司</a><a href="http://weinan.focus.cn/" target="_blank">渭南房产网</a><a href="http://www.adtogroup.cn" target="_blank">门式脚手架</a><a href="http://www.pdcc.com.cn/" target="_blank">创意办公室装修</a><a href="http://www.sczshz.com" target="_blank">杭州别墅装修</a><a href="http://www.chinamaco.cn/" target="_blank">郑州美巢装饰</a><a href="http://www.jianzhu-moban.com" target="_blank">建筑模板</a><a href="http://www.czdder.com" target="_blank">常州装潢公司</a><a href="http://www.moerd.com/" target="_blank">窗帘</a><a href="http://www.bjzs.cc/" target="_blank">沈阳装修公司哪家好</a><a href="http://www.dyzgzs.com" target="_blank">东营装修价格</a><a href="http://www.024xinshijia.com" target="_blank">沈阳装修公司</a><a href="http://www.glgzw.com" target="_blank">桂林装修网</a></p></div>
    </div>

      <div class="h30"></div>
    </div>
     <!--主题结束-->

<?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>