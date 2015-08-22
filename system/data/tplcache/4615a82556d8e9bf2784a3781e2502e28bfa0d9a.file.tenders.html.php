<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:58:16
         compiled from "/www/wwwroot/www.fzgxw.com/themes/new_green/tenders.html" */ ?>
<?php /*%%SmartyHeaderCode:199981957255d7f358140f65-96777880%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4615a82556d8e9bf2784a3781e2502e28bfa0d9a' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/new_green/tenders.html',
      1 => 1440206492,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199981957255d7f358140f65-96777880',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'request' => 0,
    'type' => 0,
    'setting' => 0,
    'key' => 0,
    'item' => 0,
    'detail' => 0,
    'CONFIG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7f35838e464_60351587',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7f35838e464_60351587')) {function content_55d7f35838e464_60351587($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_function_widget')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.widget.php';
if (!is_callable('smarty_block_calldata')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/block.calldata.php';
?>﻿ <?php echo $_smarty_tpl->getSubTemplate ("block/newhead.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
    
<!-- header 完 -->
<div class="kouhao" style="margin-top: 0px">
	<p><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/images/kouhao.jpg"></p>
</div>
<div id="bidding">
	<div class="bi-main" style="padding-top: 0px">
		<div class="bi-left">
			<img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/images/baojia2.jpg" />
			<!-- <p class="bi-title">免费发布招标！选择优质服务！</p>
			<ul>
				<li><img src="images/kou.png"><span><p>营业执照认证</p><p>办公场地实地认证</p><p>工程质量保障金-24小时先行赔付计划</p></span></li>
				<li><img src="images/design.png"><span><p>专业设计师免费测量全房尺寸，合理规划空间</p><p>免费出3套设计方案对比，直至满意为止</p><p>亿家网设计联盟专业点评，规避隐患</p></span></li>
				<li><img src="images/moneys.png"><span><p>精准需求，业主预算内报价</p><p>三家公司同时报价PK，有效挤掉报价水分</p><p>亿家网工程部帮助审核报价</p></span></li>
				<li><img src="images/se.png"><span><p>在线工地管理系统，实时监管 </p><p>百万工程质量保障金，随时候命</p><p>第三方监理多节点免费验收服务</p></span></li>
				<div class="clear"></div>
			</ul> -->
		</div>
		<div class="bi-right">
			<form  method="post" action="<?php echo smarty_function_link(array('ctl'=>'tenders:save','http'=>'empty'),$_smarty_tpl);?>
" class="bi-form">
				<!-- 获取城市来源-->
                                           <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
" name="data[cityName]" />
                                           <!-- 判断短信类型 1 为 免费量房、免费设计和报价-->
                                           <input type="hidden" value="1" name="data[leiyuang]" />
                            <input type="hidden" id='tenders_type_id' name='data[type_id]' value="1" />
				<p class="tit"><b>我要招标</b><span>目前已帮助<font>23789</font> 户业主</span></p>
				<ul>
					<ol><label>我的称呼：</label><input type="text"id="input-name6" class="bi-input" name="data[name]" /></ol>
					<ol><label>联系电话：</label><input type="text"id="input-mobile6" class="bi-input" name="data[mobile]" /></ol>
					<ol><label>招标类型：</label>
						<div id="divselect1" class="bi-selected">
                                                    <select name="data[type_id]" style="width:96px;height:30px" >
                                                       <option value="0">请选择</option>           
                                                  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['setting']->value[$_smarty_tpl->tpl_vars['type']->value['type']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                                                       <option  value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</option>
                                                   <?php } ?>
                                                     </select>
						<!--	<cite>请选择</cite>
							<ul>
								<li><a href="javascript:;" selectid="家庭装修">家庭装修</a></li>
								<li><a href="javascript:;" selectid="办公装修">办公装修</a></li>
								<li><a href="javascript:;" selectid="酒店装修">酒店装修</a></li>
								<li><a href="javascript:;" selectid="酒吧KTV">酒吧KTV</a></li>
								<li><a href="javascript:;" selectid="店铺装修">店铺装修</a></li>
								<li><a href="javascript:;" selectid="旧房改造">旧房改造</a></li>
							</ul>-->
						</div>
						
					</ol>
					<ol><label>装修预算：</label>
						<div id="divselect2" class="bi-selected">
							<select name="data[budget_id]"  style="width:96px;height:30px">
                                                          <option value="0">请选择</option>                      
                                                  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['setting']->value[$_smarty_tpl->tpl_vars['type']->value['budget']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                                                          <option <?php if ($_smarty_tpl->tpl_vars['detail']->value['budget_id']==$_smarty_tpl->tpl_vars['key']->value){?> selected="selected" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</option>
                                                 <?php } ?>
                                                        </select>
						</div>
						
					</ol>
					<ol><label>装修面积：</label><input type="text" class="bi-input" name="data[area]" /></ol>
					<ol><label>小区名称：</label><input type="text" class="bi-input" name="data[home_name]" /></ol>
					<ol><label>所在地址：</label>
						<div id="divselect3" class="bi-selected">
                                                    <select name="data[city_id]" style="width:96px;height:30px">
                                                       <?php echo smarty_function_widget(array('id'=>"data/city",'value'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>

                                                    </select>
							
						</div>
						
					</ol>
					<ol><label>所在城区：</label>
						<div id="divselect4" class="bi-selected">
							<select name="data[area_id]" style="width:96px;height:30px">
                                                           <?php echo smarty_function_widget(array('id'=>"data/area",'value'=>0,'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>

                                                        </select> 
						</div>
						
					</ol>
					<div class="clear"></div>
				</ul>
				<div class="bi-textarea">
					<label>备注信息：</label><textarea name="data[demand]" class="bi-area"></textarea>
					<div class="clear"></div>
				</div>
				<div class="bi-submit">
					<input type="submit" id="submit-list6"value="免费发布招标" />
					<p>或拨打<span><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['phone'];?>
</span></p>
				</div>
				<div class="bi-bottom-con">
					*为了你的利益及我们的口碑，你的隐私将被严格保密。
				</div>
				<div class="bi-scroll">
					<div id="Marquee">
						<div class="bi-con">
							 Alan说：用亿家网搞装修是要比自己搞轻松很多… 
						</div>
						<div class="bi-con">
							江城阿婆说：亿家网的模式确实给我们业主带来方便.
						</div>
						<div class="bi-con">
							21332说：第一次体验装修网，服务很贴心
						</div>
                                               <div class="bi-con">
							小时候说：感谢亿家网给我推荐的公司，很满意
						</div>
                                                <div class="bi-con">
							小欣欣说：亿家网的保障服务的确解了我的后顾之忧
						</div>
					</div>
				</div>
			</form>
			<div class="clear"></div>
			
		</div>
		<div class="clear"></div>
	</div>
	<!-- <div class="bi-free">
		<div class="bi-free-1200">
			<div class="bi-free-left">
				<img src="images/free1.jpg" />
			</div>
		 <div class="bi-free-right">
			 <div id="Marquee">
					<div class="bi-con">
						亿家网装修平台是最好、最值得信任、最让人省心的专业装修招标网站！！！ 
					</div>
					<div class="bi-con">
						业主黄先生说：亿家网帮我我放心业主黄先生说：亿家网帮我我放心
					</div>
					<div class="bi-con">
						业主赵女士说：亿家网上的服务很满意，下次会介绍朋友也来申请
					</div>
				</div> 
			</div>
		</div>
	</div> -->
	<!-- 业主最新发布招标 -->
	<div class="zhao">
		<div class="new-title">
			业主最新发布招标
			<a href="">我要发布招标<i class="fa fa-angle-double-right"></i></a>
		</div>
		<div class="zhao-con">
			<ul class="zhao-con-tit">
				<!-- <li>发布时间</li> -->
				<li>业主</li>
				<li>面积</li>
				<li>标情况</li>
				<li>预算</li>
				<li>详情</li>
			</ul>
			<div class="scrollbox">
				<ul id="toplist">
                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"tenders/tenders",'limit'=>"30",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'])); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"tenders/tenders",'limit'=>"30",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<li>
						
						<a href="<{link ctl='tenders:detaill' arg0=$item.id}>" target="_blank"><{$item.name|cutstr:3:'**'}></a>
						<a href="<{link ctl='tenders:detaill' arg0=$item.id}>" target="_blank"><{$item.area}>㎡</a>
						<a target='_blank' title="<{$item.title}>" href="<{link ctl='tenders:detaill' arg0=$item.id}>" class="red"><{$item.title}></a>
						<a href="<{link ctl='tenders:detaill' arg0=$item.id}>" target="_blank"><{$item.budget_title}></a>
						<a href="<{link ctl='tenders:detaill' arg0=$item.id}>" target="_blank">详情点击</a>
						<div class="clear"></div>
					</li>
                                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"tenders/tenders",'limit'=>"30",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					
					
				</ul>
			</div>
		</div>
	</div>
	<!-- 公司推荐-->
	<div class="company-brand">
		<ul class="brand-ol">
			<ol class="cur">推荐装修公司</ol>
			<ol>品牌保障公司</ol>
			<ol>口碑装修公司</ol>
			<ol>签单排行公司</ol>
		</ul>
		<ul class="brand-con" style="display:block">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"orderby:DESC",'limit'=>"8")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"orderby:DESC",'limit'=>"8"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<li>
				<img alt="<{$item.name}>" src="<{$pager.img}>/<{$item.logo}>" width="150" height="70" />
				<div class="brand-wz">
					<div class="brand-title"><{$item.sort_name}></div>
					<p>设计方案<span><{$item.case_num}></span>套</p>
					<a mini-load='申请免费量房' href="<{link ctl='gs:yuyue2'  arg0=$item.company_id http='empty'}>" >免费设计</a>
				</div>
			</li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"orderby:DESC",'limit'=>"8"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			
			
		
			<div class="clear"></div>
		</ul>
		<ul class="brand-con">
			 <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"security:DESC",'limit'=>"8")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"security:DESC",'limit'=>"8"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<li>
				<img alt="<{$item.name}>" src="<{$pager.img}>/<{$item.logo}>" width="150" height="70" />
				<div class="brand-wz">
					<div class="brand-title"><{$item.sort_name}></div>
					<p>设计方案<span><{$item.case_num}></span>套</p>
					<a mini-load='申请免费量房' href="<{link ctl='gs:yuyue2'  arg0=$item.company_id http='empty'}>" >免费设计</a>
				</div>
			</li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"security:DESC",'limit'=>"8"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<div class="clear"></div>
		</ul>
		<ul class="brand-con">
			 <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"scores:DESC",'limit'=>"8")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"scores:DESC",'limit'=>"8"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<li>
				<img alt="<{$item.name}>" src="<{$pager.img}>/<{$item.logo}>" width="150" height="70" />
				<div class="brand-wz">
					<div class="brand-title"><{$item.sort_name}></div>
					<p>设计方案<span><{$item.case_num}></span>套</p>
					<a mini-load='申请免费量房' href="<{link ctl='gs:yuyue2'  arg0=$item.company_id http='empty'}>" >免费设计</a>
				</div>
			</li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"scores:DESC",'limit'=>"8"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<div class="clear"></div>
		</ul>
		<ul class="brand-con">
			 <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"tenders_num:DESC",'limit'=>"8")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"tenders_num:DESC",'limit'=>"8"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<li>
				<img alt="<{$item.name}>" src="<{$pager.img}>/<{$item.logo}>" width="150" height="70" />
				<div class="brand-wz">
					<div class="brand-title"><{$item.sort_name}></div>
					<p>设计方案<span><{$item.case_num}></span>套</p>
					<a mini-load='申请免费量房' href="<{link ctl='gs:yuyue2'  arg0=$item.company_id http='empty'}>" >免费设计</a>
				</div>
			</li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"tenders_num:DESC",'limit'=>"8"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<div class="clear"></div>
		</ul>
	</div>
</div>
<div id="footer">
	<div class="footer">
		<div class="left footer-logo">
			<img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/images/footer-logo.png" width="265" height="155" />
		</div>
		<div class="right copy">
			<ul>
		           <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>'article/view','from'=>'about','order'=>'article_id:ASC','limit'=>10)); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>'article/view','from'=>'about','order'=>'article_id:ASC','limit'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                  <li> <a target="_blank" title="<{$item.title}>" href="<{link ctl='about' arg0=$item.page}>">
				      <{$item.title}></a></li>
                           <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>'article/view','from'=>'about','order'=>'article_id:ASC','limit'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<div class="clear"></div>
			</ul>
			<p>Copyright © 2014 亿家网, All rights reserved. ICP备案：鄂ICP备14004834号-1 </p>
			<p>技术支持：www.ejiawang.cc</p>
			<img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/images/icon.png" />
		</div>
		<div class="clear"></div>
	</div>
</div>
<script type="text/javascript">
$(function(){ 
	show('.brand-ol ol','.brand-con','mouseover');
	$.divselect("#divselect1","#type");
	$.divselect("#divselect2","#money");
	$.divselect("#divselect3","#address");
	$.divselect("#divselect4","#district");
	var scrtime;
	$(".scrollbox").hover(function(){
		clearInterval(scrtime);
	},function(){
		scrtime = setInterval(function(){
			var $ul = $("#toplist");
			var liHeight = $ul.find("li:last").height();
			$ul.animate({marginTop : -liHeight + "px"},1000,function(){
			
			$ul.find("li:first").appendTo($ul)
			$ul.find("li:first").hide();
			$ul.css({marginTop:0});
			$ul.find("li:last").fadeIn(1000);
			});
		},1000);
	}).trigger("mouseleave");
})


// $(function(){ 
// 	show('.brand-ol ol','.brand-con','mouseover');
// 	$.divselect("#divselect1","#type");
// 	$.divselect("#divselect2","#money");
// 	$.divselect("#divselect3","#address");
// 	$.divselect("#divselect4","#district");
// 	var scrtime;
// 	$(".scrollbox").hover(function(){
// 		clearInterval(scrtime);
// 	},function(){
// 		scrtime = setInterval(function(){
// 			var $ul = $("#toplist");
// 			var liHeight = $ul.find("li:last").height();
// 			$ul.animate({marginTop : liHeight + "px"},1000,function(){
			
// 			$ul.find("li:last").prependTo($ul)
// 			$ul.find("li:first").hide();
// 			$ul.css({marginTop:0});
// 			$ul.find("li:first").fadeIn(1000);
// 			});
// 		},2000);
// 	}).trigger("mouseleave");
// })


</script>
<script>
$(function(){
	var $this = $(".bi-scroll");
	var scrollTimer;
	$this.hover(function(){
		clearInterval(scrollTimer);
	},function(){
		scrollTimer = setInterval(function(){
			scrollNews( $this );
		}, 2000 );
	}).trigger("mouseout");
});
function scrollNews(obj){
	var $self = obj.find("#Marquee:first");
	var lineHeight = $self.find("div:first").height();
	$self.animate({ "margin-top" : -lineHeight +"px" },600 , function(){
		$self.css({"margin-top":"0px"}).find("div:first").appendTo($self);
	})
} 
</script>
<script>
               $(document).ready(function(){
                    $("#submit-list6").click(function(){                    
                       if($("#input-name6").val()==""){
                         alert("请填入您的姓名");
                         return false;
                         }
                         if($("#input-mobile6").val()==""){
                         alert("请填入您的电话");
                         return false;
                         }
                          var reg = /^1[3|4|5|8|7][0-9]\d{8}$/;
                           if(!reg.test($.trim( $("#input-mobile6").val() )))
                           {
                            alert("手机号码格式不对,请输入11位正确号码！");
                            return false;
                           }
                        });
               })
        </script>
<div style="display:none;"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['tongji'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
</div>
</body>
</html><?php }} ?>