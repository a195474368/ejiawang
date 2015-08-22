<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:20:55
         compiled from "/www/wwwroot/www.fzgxw.com/themes/cheerful_green/index.html" */ ?>
<?php /*%%SmartyHeaderCode:43844066255d7ea977b68d9-13649523%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac15795c73f2fb79b0832605b7895949ce49ed41' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/cheerful_green/index.html',
      1 => 1439603547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43844066255d7ea977b68d9-13649523',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
    'pager' => 0,
    'CONFIG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea97d0f0c4_47763770',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea97d0f0c4_47763770')) {function content_55d7ea97d0f0c4_47763770($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_block_calldata')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/block.calldata.php';
if (!is_callable('smarty_block_KT')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/block.KT.php';
if (!is_callable('smarty_function_widget')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.widget.php';
?>﻿
    <?php echo $_smarty_tpl->getSubTemplate ("block/newhead.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
  
<div id="content">
	<div class="banner">
		<div class="left text">
			<h2>装修四大困惑</h2>
			<ul class="move">
				<ol class="cur">找装修公司</ol>
				<ol>看设计方案</ol>
				<ol>审方案报价</ol>
				<ol>管施工质量</ol>
				<div class="clear"></div>
			</ul>
			<div class="text-row" style="display:block;">
				<div class="row-list">
					<form name="form1" method="post" id="form1" target="_blank"  action="<?php echo smarty_function_link(array('ctl'=>'tenders:save','http'=>'empty'),$_smarty_tpl);?>
">
                                           <!-- 获取城市来源-->
                                           <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
" name="data[cityName]" />
                                           <!-- 判断短信类型 1 为 免费量房、免费设计和报价-->
                                           <input type="hidden" value="1" name="data[leiyuang]" />
                                            <input type="hidden" id='tenders_type_id' name='data[type_id]' value="1" />
						<div class="float-list">
							<label>招标类型：</label>
							<div id="divselect1" class="selected" >
                                                            <select name="data[type_id]" style="width:107px;height:30px">
                                                <option value="0">请选择</option>
                                                <option value="1">家庭装修</option>
                                                <option value="2">办公装修</option>
                                                <option value="3">酒店装修</option>
                                                <option value="4">酒吧KTV</option>
                                                <option value="5">商铺装修</option>
                                                <option value="42">旧房改造</option>
                                            	</select>
								
							</div>
							
						</div>
						<div class="float-list">
							<label>装修预算：</label>
							<div id="divselect2" class="selected">
			                                     <select name="data[budget_id]" style="width:107px;height:30px">
                                                               <option value="0">请选择</option>                   
                                                               <option value="6">3万以下</option>
                                                               <option value="7">3-8万</option>
                                                               <option value="8">8-15万</option>
                                                               <option value="9">15-30万</option>
                                                              <option value="10">30-50万</option>
                                                               <option value="14">50万以上</option>
                                                           </select>
							</div>
							
						</div>
						<div class="float-list">
							<label>我的称呼：</label><input type="text"name='data[name]' id="input-name1"class="input-list"  value=""   />
						</div>
						<div class="float-list">
							<label>联系电话：</label><input type="text"name="data[mobile]" id="input-mobile1" class="input-list"  value="" />
						</div>
						<div class="clear hgt18"></div>
						<div class="row-bottom">
                                                     <!--onclick="alert('你好');return false"-->
							<input type="submit" id="submit-list1"  class="submit-list" value="立即申请" />
							<p>免费获得3家正规<br />装修公司不同的设计和报价</p>
							<div class="clear"></div>
						</div>
						<div class="clear hgt18"></div>
					</form>
				</div>
			</div>
			<div class="text-row">
				<div class="row-list">
					<form name="from2"  method="post"  action="<?php echo smarty_function_link(array('ctl'=>'tenders:save','http'=>'empty'),$_smarty_tpl);?>
">
						<!-- 获取城市来源-->
                                           <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
" name="data[cityName]" />
                                           <!-- 判断短信类型 1 为 免费量房、免费设计和报价-->
                                           <input type="hidden" value="1" name="data[leiyuang]" />
                                            <input type="hidden" id='tenders_type_id' name='data[type_id]' value="1" />
						<div class="text-show">
							<p>即刻登记，三家正规公司设计方案免费送上门</p>
							<p>三家装修公司免费上门量房</p>
							<p>3天内出设计方案，供您自由选择</p>
						</div>
						<div class="float-list">
							<label>我的称呼：</label><input type="text"id="input-name2" class="input-list"  value="" name="data[name]" />
						</div>
						<div class="float-list">
							<label>联系电话：</label><input type="text" id="input-mobile2" class="input-list"  value="" name="data[mobile]" />
						</div>
						<div class="clear"></div>
						<div class="row-bottom">
							<input type="submit" class="submit-list"id="submit-list2" value="立即申请" />
							<p>设计费全免<br />无需支付任何费用</p>
							<div class="clear"></div>
						</div>
					</form>
				</div>
			</div>
			<div class="text-row">
				<div class="row-list">
					<form name="from3"  method="post"   action="<?php echo smarty_function_link(array('ctl'=>'tenders:save','http'=>'empty'),$_smarty_tpl);?>
">
						<!-- 获取城市来源-->
                                           <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
" name="data[cityName]" />
                                           <!-- 判断短信类型 1 为 免费量房、免费设计和报价-->
                                           <input type="hidden" value="1" name="data[leiyuang]" />
                                            <input type="hidden" id='tenders_type_id' name='data[type_id]' value="1" />
						<div class="text-show">
							<p>报价吃不准，水分有木有？ </p>
							<p>将您的方案报价发给我们，专业团队帮您审核 </p>
							<p>拒绝虚假，拒绝水分！</p>
						</div>
						<div class="float-list">
							<label>我的称呼：</label><input type="text"id="input-name3" class="input-list"  value="" name="data[name]" />
						</div>
						<div class="float-list">
							<label>联系电话：</label><input type="text" id="input-mobile3" class="input-list"  value="" name="data[mobile]" />
						</div>
						<div class="clear"></div>
						<div class="row-bottom">
							<input type="submit" id="submit-list3" class="submit-list" value="立即申请" />
							<p> <br />亿家网专家帮您审核</p>
							<div class="clear"></div>
						</div>
					</form>
				</div>
			</div>
			<div class="text-row">
				<div class="row-list">
					<form name="from4"  method="post"   action="<?php echo smarty_function_link(array('ctl'=>'tenders:save','http'=>'empty'),$_smarty_tpl);?>
">
						<!-- 获取城市来源-->
                                           <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
" name="data[cityName]" />
                                           <!-- 判断短信类型 1 为 免费量房、免费设计和报价-->
                                           <input type="hidden" value="1" name="data[leiyuang]" />
                                            <input type="hidden" id='tenders_type_id' name='data[type_id]' value="1" />
						<div class="text-show">
							<p>没空管装修，看不出施工质量？</p>
							<p>亿家网装修质量保障服务</p>
							<p>装修过程全程免费跟踪、监理</p>
						</div>
						<div class="float-list">
							<label>我的称呼：</label><input type="text"id="input-name4" class="input-list"  value="" name="data[name]" />
						</div>
						<div class="float-list">
							<label>联系电话：</label><input type="text" id="input-mobile4" class="input-list"  value="" name="data[mobile]" />
						</div>
						<div class="clear"></div>
						<div class="row-bottom">
							<input type="submit"id="submit-list4"class="submit-list" value="立即申请" />
							<p> <br />亿家网装修质量保障服务</p>
							<div class="clear"></div>
						</div>
					</form>
				</div>
			</div>
			<div class="text-bottom-text">		已累计帮助<span>23789</span>位业主解决“装修”难题。
			</div>
		</div>
            
		<div class="left roll">
			<div class="comiis_wrapad" id="slideContainer">
				<div id="frameHlicAe" class="frame cl">
					<div class="temp"></div>
					<div class="block">
						<div  id="style2_shu_menu" class="cl" kinBox='{"height":360}'>
                                                 
							<ul class="slideshow" id="slidesImgs">
                                                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"adv/item",'adv_id'=>"29",'limit'=>"3")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"adv/item",'adv_id'=>"29",'limit'=>"3"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								<li>
                                                                    <a href="<{$item.link}>">
                                                                            <img src="<{$pager.img}>/<{$item.thumb}>" width="580" height="360" alt="<{$item.title}>" /></a>
								</li>
								<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"adv/item",'adv_id'=>"29",'limit'=>"3"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							</ul>
						</div>
						<div class="slidebar" id="slideBar">
							<ul>
								<li class="on">1</li>
								<li>2</li>
								<li>3</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="right icon">
			<div class="icon-top">
				<p>
					已为
					<span>2</span>
					<span>3</span>
					<span>7</span>
					<span>8</span>
					<span>9</span>
					位</p>
				<p>
					业主解决“装修”难题
				</p>
			</div>
			<ul>
				<li><a href="<?php echo smarty_function_link(array('ctl'=>'tenders'),$_smarty_tpl);?>
"><i class="fa fa-bar-chart"></i><p>免费测量</p></a></li>
				<li><a href="<?php echo smarty_function_link(array('ctl'=>'tenders'),$_smarty_tpl);?>
"><i class="fa fa-lastfm"></i><p>免费设计</p></a></li>
				<li><a href="<?php echo smarty_function_link(array('ctl'=>'zb'),$_smarty_tpl);?>
"><i class="fa fa-dollar"></i><p>免费报价</p></a></li>
				<li><a href="<?php echo smarty_function_link(array('ctl'=>'tenders'),$_smarty_tpl);?>
"><i class="fa fa-unlink"></i><p>第三方监理</p></a></li>
				<li><a href="<?php echo smarty_function_link(array('ctl'=>'tenders'),$_smarty_tpl);?>
"><i class="fa fa-compress"></i><p>先行赔付</p></a></li>
				<li><a href="<?php echo smarty_function_link(array('ctl'=>'tenders'),$_smarty_tpl);?>
"><i class="fa fa-ticket"></i><p>免费验房</p></a></li>
				<div class="clear"></div>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
	<div class="host-new">
		<div class="host-new-con">
			<div class="left host">
				<ul class="m-ovn">
					<ol class="cur">装修日记</ol>
					<ol>装修攻略</ol>
					<ol>小区团装</ol>
					<ol class="no-image">在建工地</ol>
					<div class="clear"></div>
				<!--<a href="<?php echo smarty_function_link(array('ctl'=>'content'),$_smarty_tpl);?>
">请选择类型<i class="fa fa-angle-double-right"></i></a>-->
				</ul>
				<div class="text-host" style="display:block">
                                     
					
					<!--<div class="host-list">
                                             <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"diary/diary",'order'=>"diary_id:desc",'limit'=>"4")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"diary/diary",'order'=>"diary_id:desc",'limit'=>"4"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                             <{if $index==0}>
						<div class="host-list-image">
							<a href="<{link ctl='content:diaryDetail' arg0=$item.diary_id}>" title="<{$item.title}>"><img src="<{$pager.img}>/<{$item.face_pic}>" width="200px" height="140px"/></a>
						</div>
                                            
						<ul>   
                                                     
							<li><a class="one" href="<{link ctl='content:diaryDetail' arg0=$item.diary_id}>"><i>1.</i><{$item.title}></a></li>
                                                    <{else}>    
							<li><a href="<{link ctl='content:diaryDetail' arg0=$item.diary_id}>"><i>2.</i><{$item.title}></a></li>
							
                                                 <{/if}>       
						</ul>
                                             <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"diary/diary",'order'=>"diary_id:desc",'limit'=>"4"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</div>-->
                                   
                                  
					<div class="host-list">
                                              <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"diary/diary",'order'=>"diary_id:desc",'limit'=>"5")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"diary/diary",'order'=>"diary_id:desc",'limit'=>"5"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                              
                                             <{if $index==0}>
						<div class="host-list-image">
                                                    <a href="<{link ctl='content:diaryDetail' arg0=$item.diary_id}>" target="_blank" title="<{$item.title}>"><img src="<{$pager.img}>/<{$item.face_pic}>" width="200px" height="140px"/></a>
						</div>
                                            
						<ul>   
                                                     
							<li><a class="one" target="_blank" href="<{link ctl='content:diaryDetail' arg0=$item.diary_id}>"><i>1.</i><{$item.title|cutstr:24:""}></a></li>
                                                    <{else}>    
							<li><a target="_blank" href="<{link ctl='content:diaryDetail' arg0=$item.diary_id}>"><i><{$index+1}></i><{$item.title|cutstr:24:""}></a></li>
							
                                                 <{/if}>       
						</ul>
                                           <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"diary/diary",'order'=>"diary_id:desc",'limit'=>"5"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</div>
                                     <div class="host-list">
                                              <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"diary/diary",'order'=>"diary_id:desc",'limit'=>"10")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"diary/diary",'order'=>"diary_id:desc",'limit'=>"10"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                              
                                             <{if $index==5}>
						<div class="host-list-image">
							<a  target="_blank" href="<{link ctl='content:diaryDetail' arg0=$item.diary_id}>" title="<{$item.title}>"><img src="<{$pager.img}>/<{$item.face_pic}>" width="200px" height="140px"/></a>
						</div>
                                            
						<ul>   
                                                     
							<li><a  target="_blank" class="one" href="<{link ctl='content:diaryDetail' arg0=$item.diary_id}>"><i>1.</i><{$item.title|cutstr:24:""}></a></li>
                                                    <{else if $index>5&&$index<10}>    
							<li><a target="_blank" href="<{link ctl='content:diaryDetail' arg0=$item.diary_id}>"><i><{$index-4}></i><{$item.title|cutstr:24:""}></a></li>
							
                                                 <{/if}>       
						</ul>
                                           <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"diary/diary",'order'=>"diary_id:desc",'limit'=>"10"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</div>
                                      <div class="host-list">
                                              <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"diary/diary",'order'=>"diary_id:desc",'limit'=>"15")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"diary/diary",'order'=>"diary_id:desc",'limit'=>"15"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                              
                                             <{if $index==10}>
						<div class="host-list-image">
							<a  target="_blank" href="<{link ctl='content:diaryDetail' arg0=$item.diary_id}>" title="<{$item.title}>"><img src="<{$pager.img}>/<{$item.face_pic}>" width="200px" height="140px"/></a>
						</div>
                                            
						<ul>   
                                                     
							<li><a  target="_blank" class="one" href="<{link ctl='content:diaryDetail' arg0=$item.diary_id}>"><i>1.</i><{$item.title|cutstr:24:""}></a></li>
                                                    <{else if $index>10&&$index<15}>    
							<li><a  target="_blank" href="<{link ctl='content:diaryDetail' arg0=$item.diary_id}>"><i><{$index-9}></i><{$item.title|cutstr:24:""}></a></li>
							
                                                 <{/if}>       
						</ul>
                                           <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"diary/diary",'order'=>"diary_id:desc",'limit'=>"15"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</div>
                                         <div class="host-list">
                                              <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"diary/diary",'order'=>"diary_id:desc",'limit'=>"20")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"diary/diary",'order'=>"diary_id:desc",'limit'=>"20"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                              
                                             <{if $index==15}>
						<div class="host-list-image">
							<a target="_blank" href="<{link ctl='content:diaryDetail' arg0=$item.diary_id}>" title="<{$item.title}>"><img src="<{$pager.img}>/<{$item.face_pic}>" width="200px" height="140px"/></a>
						</div>
                                            
						<ul>   
                                                     
							<li><a target="_blank" class="one" href="<{link ctl='content:diaryDetail' arg0=$item.diary_id}>"><i>1.</i><{$item.title|cutstr:24:""}></a></li>
                                                    <{else if $index>15&&$index<20}>    
							<li><a target="_blank" href="<{link ctl='content:diaryDetail' arg0=$item.diary_id}>"><i><{$index-14}></i><{$item.title|cutstr:24:""}></a></li>
							
                                                 <{/if}>       
						</ul>
                                           <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"diary/diary",'order'=>"diary_id:desc",'limit'=>"20"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</div>
                                           
			
                                    
					<div class="clear"></div>
				</div>
				<div class="text-host">
					<div class="host-list-two">
						<h2>装修知识</h2>
						<ul>
                                                     <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"article/view",'cat_id'=>10,'limit'=>"8")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"article/view",'cat_id'=>10,'limit'=>"8"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                                      <{if $index ==0}>
							<li><a target="_blank" class="one" href="<{link ctl='content:detail' arg0=$item.article_id}>"><i>1.</i><{$item.title|cutstr:22:""}><span><{date('m-d',$item.dateline)}></span></a></li>
                                                        <{else}>
							<li><a target="_blank" href="<{link ctl='content:detail' arg0=$item.article_id}>"><i><{$index+1}></i><{$item.title|cutstr:22:""}><span><{date('m-d',$item.dateline)}></span></a></li>
							<{/if}>
                                                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"article/view",'cat_id'=>10,'limit'=>"8"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</ul>
					</div>
					<div class="host-list-two">
						<h2>装修风水</h2>
						<ul>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"article/view",'cat_id'=>15,'limit'=>"8")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"article/view",'cat_id'=>15,'limit'=>"8"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                                      <{if $index ==0}>
							<li><a  target="_blank" class="one" href="<{link ctl='content:detail' arg0=$item.article_id}>"><i>1.</i><{$item.title|cutstr:22:""}><span><{date('m-d',$item.dateline)}></span></a></li>
                                                        <{else}>
							<li><a target="_blank" href="<{link ctl='content:detail' arg0=$item.article_id}>"><i><{$index+1}></i><{$item.title|cutstr:22:""}><span><{date('m-d',$item.dateline)}></span></a></li>
							<{/if}>
                                                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"article/view",'cat_id'=>15,'limit'=>"8"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</ul>
					</div>
					<div class="host-list-two">
						<h2>家居百科</h2>
						<ul>
					            <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"article/view",'cat_id'=>60,'limit'=>"8")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"article/view",'cat_id'=>60,'limit'=>"8"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                                         <{if $index ==0}>
							    <li><a  target="_blank" class="one" href="<{link ctl='content:detail' arg0=$item.article_id}>"><i>1.</i><{$item.title|cutstr:22:""}><span><{date('m-d',$item.dateline)}></span></a></li>
                                                        <{else}>
							   <li><a  target="_blank" href="<{link ctl='content:detail' arg0=$item.article_id}>"><i><{$index+1}></i><{$item.title|cutstr:22:""}><span><{date('m-d',$item.dateline)}></span></a></li>
							<{/if}>
                                                   <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"article/view",'cat_id'=>60,'limit'=>"8"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</ul>
					</div>
					<div class="clear"></div>
				</div>
				<div class="text-host">
                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"home/tuan",'order'=>"dateline:desc",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"3")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"home/tuan",'order'=>"dateline:desc",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"3"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<div class="host-list-two">
						<div class="host-list-two-image">
                                                    
							<a href="<{link ctl='home:tuanDetail' arg0=$item.tuan_id}>" target="_blank" title="<{$item.title}>">
                                                             <{calldata mdl="home/main"  id=$item.home_id  limit="1" }> 
                                                            <img src="<{$pager.img}>/<{$item.face_pic}>" width="263" height="180"  />
                                                            
                                                        </a>
						</div>
                                            <{calldata mdl="home/tuan"  home_id=$item.id  limit="1" }>
						<div class="host-title">                                                                      
							 <{$item.title|cutstr:22:""}>              
						</div>
						<div class="host-dis">
							报名立减<span><{$item.jieyue}></span>元
                                                        <a target="_blank" title="<{$item.title}>" href="<{link ctl='home:tuanDetail' arg0=$item.tuan_id}>"><input type="button" class="host-input" value="我要报名" />
                                                        </a></div>
                                            <{/calldata}>
                                             <{/calldata}>
					</div>
                                    
                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"home/tuan",'order'=>"dateline:desc",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"3"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					
					<div class="clear"></div>
				</div>
				<div class="text-host">
					<div class="host-list">
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"home/site",'limit'=>"5")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"home/site",'limit'=>"5"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
                                       
                                             <{if $index==0}>
						<div class="host-list-image">
							<a  target="_blank" href="<{link ctl='site:detail' arg0=$item.site_id}>" title="<{$item.title}>"><img src="<{$pager.img}>/<{$item.face_pic}>" width="200px" height="140px"/></a>
						</div>
                                            
						<ul>   
                                                     
							<li><a  target="_blank" class="one" href="<{link ctl='site:detail' arg0=$item.site_id}>"><i>1.</i><{$item.title|cutstr:24:""}></a></li>
                                                    <{else}>    
							<li><a  target="_blank" href="<{link ctl='site:detail' arg0=$item.site_id}>"><i><{$index+1}></i><{$item.title|cutstr:24:""}></a></li>
							
                                                 <{/if}>       
						</ul>
                                           <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"home/site",'limit'=>"5"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</div>
					<div class="host-list">
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"home/site",'limit'=>"10")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"home/site",'limit'=>"10"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
                                       
                                             <{if $index==5}>
						<div class="host-list-image">
							<a target="_blank" href="<{link ctl='site:detail' arg0=$item.site_id}>" title="<{$item.title}>"><img src="<{$pager.img}>/<{$item.face_pic}>" width="200px" height="140px"/></a>
						</div>
                                            
						<ul>   
                                                     
							<li><a target="_blank" class="one" href="<{link ctl='site:detail' arg0=$item.site_id}>"><i>1.</i><{$item.title|cutstr:24:""}></a></li>
                                                    <{else if $index>5&&$index<10}>    
							<li><a target="_blank" href="<{link ctl='site:detail' arg0=$item.site_id}>"><i><{$index-4}></i><{$item.title|cutstr:24:""}></a></li>
							
                                                 <{/if}>       
						</ul>
                                           <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"home/site",'limit'=>"10"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</div>
					<div class="host-list">
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"home/site",'limit'=>"15")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"home/site",'limit'=>"15"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
                                       
                                             <{if $index==10}>
						<div class="host-list-image">
							<a target="_blank" href="<{link ctl='site:detail' arg0=$item.site_id}>" title="<{$item.title}>"><img src="<{$pager.img}>/<{$item.face_pic}>" width="200px" height="140px"/></a>
						</div>
                                            
						<ul>   
                                                     
							<li><a  target="_blank" class="one" href="<{link ctl='site:detail' arg0=$item.site_id}>"><i>1.</i><{$item.title|cutstr:24:""}></a></li>
                                                    <{else if $index>10&&$index<15}>      
							<li><a target="_blank"  href="<{link ctl='site:detail' arg0=$item.site_id}>"><i><{$index-9}></i><{$item.title|cutstr:24:""}></a></li>
							
                                                 <{/if}>       
						</ul>
                                           <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"home/site",'limit'=>"15"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</div>
					<div class="host-list">
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"home/site",'limit'=>"20")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"home/site",'limit'=>"20"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
                                       
                                             <{if $index==15}>
						<div class="host-list-image">
							<a target="_blank" href="<{link ctl='site:detail' arg0=$item.site_id}>" title="<{$item.title}>"><img src="<{$pager.img}>/<{$item.face_pic}>" width="200px" height="140px"/></a>
						</div>
                                            
						<ul>   
                                                     
							<li><a  target="_blank" class="one" href="<{link ctl='site:detail' arg0=$item.site_id}>"><i>1.</i><{$item.title|cutstr:24:""}></a></li>
                                                     <{else if $index>15&&$index<20}>     
							<li><a  target="_blank" href="<{link ctl='site:detail' arg0=$item.site_id}>"><i><{$index-14}></i><{$item.title|cutstr:24:""}></a></li>
							
                                                 <{/if}>       
						</ul>
                                           <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"home/site",'limit'=>"20"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="right new">
				<div class="new-title">
					最新订单
					<a href="<?php echo smarty_function_link(array('ctl'=>'tenders'),$_smarty_tpl);?>
">我要申请<i class="fa fa-angle-double-right"></i></a>
				</div>
				<div class="new-con">
					<ul>
						<ol>日期</ol>
						<ol>业主</ol>
						<ol>面积</ol>
						<ol>预算</ol>
						<div class="clear"></div>
					</ul>
					<div class="scroll-down">
						<div class="heigt">
                                                     <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"tenders/tenders",'order'=>"new",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"30")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"tenders/tenders",'order'=>"new",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"30"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<a target="_blank" title="<{$item.title}>" href="<{link ctl='tenders:detail' arg0=$item.id}>">
								<ul>
                                                                 
									<li><{$item.dateline|format:"m月d日"}></li>
									<li><{$item.name|default:'--'}></li>
									<li><{$item.area|default:'--'}>㎡</li>
									<li><{$item.budget_title}></li>
									<div class="clear"></div>
								</ul>
                                                           
							</a>
                                                       <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"tenders/tenders",'order'=>"new",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"30"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
  
							
						</div>
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="brand-help">
		<div class="new-title">
			品牌装饰公司
			<a href="<?php echo smarty_function_link(array('ctl'=>'passport:signup'),$_smarty_tpl);?>
">我要入驻<i class="fa fa-angle-double-right"></i></a>
		</div>
		<div class="left brand">
			<ul>
				 <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"1",'name'=>"品牌装修公司",'limit'=>"20",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'])); $_block_repeat=true; echo smarty_block_KT(array('id'=>"1",'name'=>"品牌装修公司",'limit'=>"20",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li><a target="_blank" title="<{$item.name}>" href="<{link ctl='company' arg0=$item.company_id}>"><img src="<{$pager.img}>/<{$item.logo}>" width="150" height="75"></a></li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"1",'name'=>"品牌装修公司",'limit'=>"20",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<div class="clear"></div>
			</ul>
		</div>
		<div class="right help">
			<ul class="h-ovn">
				<ol class="cur">帮我找公司</ol>
				<ol>业主最新签约</ol>
				<div class="clear"></div>
			</ul>
			<div class="text-help" style="display:block;">
				<div class="help-title">装修三部曲，保障带回家</div>
				<ul class="help-icon">
					<li><a href="<?php echo smarty_function_link(array('ctl'=>'tenders'),$_smarty_tpl);?>
"><i class="fa fa-ioxhost"></i><p>发招标</p></a></li>
					<li><a href="<?php echo smarty_function_link(array('ctl'=>'tenders'),$_smarty_tpl);?>
"><i class="fa fa-btc"></i><p>比方案/报价</p></a></li>
					<li><a href="<?php echo smarty_function_link(array('ctl'=>'tenders'),$_smarty_tpl);?>
"><i class="fa fa-th-list"></i><p>享保障</p></a></li>
					<div class="clear"></div>
				</ul>
				<div class="help-form">
					<form name="form5"  onsubmit="return check_form(this)" action="<?php echo smarty_function_link(array('ctl'=>'tenders:save','http'=>'empty'),$_smarty_tpl);?>
" method="post">
						<!-- 获取城市来源-->
                                           <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
" name="data[cityName]" />
                                           <!-- 判断短信类型 1 为 免费量房、免费设计和报价-->
                                           <input type="hidden" value="1" name="data[leiyuang]" />
                                            <input type="hidden" id='tenders_type_id' name='data[type_id]' value="1" />
					<div class="help-form-list">
						<label>装修类型：</label>
				            <div id="divselect3" class="help-select">
                                                <select name="data[type_id]" style="width:150px;height:30px"> 
                                               <option value="0">请选择</option>
                                                <option value="1">家庭装修</option>
                                                <option value="2">办公装修</option>
                                                <option value="3">酒店装修</option>
                                                <option value="4">酒吧KTV</option>
                                                <option value="5">商铺装修</option>
                                                <option value="42">旧房改造</option>
                                            	</select>
					    </div>
						
					</div>
					<div class="help-form-list">
						<label>装修预算：</label>
					   <div id="divselect4" class="help-select">
						<select name="data[budget_id]" style="width:150px;height:30px">
                                                <option value="0">请选择</option>                    
                                                <option value="6">3万以下</option>
                                                <option value="7">3-8万</option>
                                                <option value="8">8-15万</option>
                                                <option value="9">15-30万</option>
                                                <option value="10">30-50万</option>
                                                <option value="14">50万以上</option>
                                                </select>
						</div>
						
					</div>
					<div class="help-form-list">
						<label>您的称呼：</label><input type="text" id="input-name5"class="help-input" value="" name="data[name]" />
					</div>
					<div class="help-form-list">
						<label>您的电话：</label><input type="text" id="input-mobile5" class="help-input"  value="" name="data[mobile]" />
					</div>
					<div class="help-form-submit">
						<input type="submit" id="submit-list5" class="help-submit" value="立即申请" />
						<p>3家公司方案免费送<br />上门</p>
						<div class="clear"></div>
					</div>
					</form>
				</div>
			</div>
			<div class="text-help">
				<ul class="help-image-con">
                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"tenders/tenders",'group_by'=>"sign_company_id",'status'=>'1','city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"sign_time:desc",'limit'=>"4")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"tenders/tenders",'group_by'=>"sign_company_id",'status'=>'1','city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"sign_time:desc",'limit'=>"4"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<li>
                                             <{calldata mdl="company/company"  company_id=$item.sign_company_id }>
						<a class="help-left-image" href="<{link ctl='company' arg0=$item.company_id}>"><img src="<{$pager.img}>/<{$item.logo}>" width="110" height="50" /></a>
						<div class="help-con">
							<a href="<{link ctl='company' arg0=$item.company_id}>"><{$item.name|cutstr:20:""}></a>
                                                        <{calldata mdl="tenders/tenders" status=1 sign_company_id=$item.company_id  order="sign_time:desc" limit="1"}>
							<p><{$areaList[$item.area_id].area_name}>-<{$item.home_name|cutstr:14}></p>
							<p><{$item.name|cutstr:16}></p>
                                                        <{/calldata}>  
						</div>
                                                             
						<div class="clear"></div>
                                             <{/calldata}>     
					</li>
                                    
                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"tenders/tenders",'group_by'=>"sign_company_id",'status'=>'1','city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"sign_time:desc",'limit'=>"4"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 
					
					
					
				</ul>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="case-rows">
		<div class="case-rows-con">
			<div class="left case">
				<div class="new-title">
					<ul class="case-type">
						<ol class="cur">风格</ol>
						<ol>空间</ol>
						<ol>别墅</ol>
						<ol>小户型</ol>
						<ol>公装</ol>
						<div class="clear"></div>
					</ul>
					<a href="<?php echo smarty_function_link(array('ctl'=>'case'),$_smarty_tpl);?>
">更多<i class="fa fa-angle-double-right"></i></a>
				</div>
				<div class="text-case" style="display:block;">
					<ul>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('name'=>"首页装修案例:风格",'limit'=>"1")); $_block_repeat=true; echo smarty_block_KT(array('name'=>"首页装修案例:风格",'limit'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<li style="left:2.5px; top:0;"><a target="_blank" href="<{link ctl='case:detail' arg0=$item.case_id}>" /><img src="<{$pager.img}>/<{$item.thumb}>" width="215" height="290" /><span><{$item.title}></span></a></li>
						  <{foreach $item.ext.photos as $photo}>                     
                                                  <{if $photo@iteration ==2||$photo@iteration ==3}>
                                                         <{if $photo@iteration ==2}>
                                                <li style="left:222.5px; top:0;"><a target="_blank" href="<{link ctl='case:detail' arg0=$item.case_id}>" /><img src="<{$pager.img}>/<{$photo.photo}>_thumb.jpg" width="215" height="145" /><span><{$photo.title}></span></a></li>
                                                        <{else if $photo@iteration ==3}>
						<li style="left:222.5px; top:150px;"><a target="_blank" href="<{link ctl='case:detail' arg0=$item.case_id}>" /><img src="<{$pager.img}>/<{$photo.photo}>_thumb.jpg" width="215" height="140" /><span><{$photo.title}></span></a></li>
                                                         <{/if}>                                                                       
                                              <{else if $photo@iteration ==4}>
						<li style="left:442.5px; top:0px;"><a target="_blank" href="<{link ctl='case:detail' arg0=$item.case_id}>" /><img src="<{$pager.img}>/<{$photo.photo}>" width="215" height="290" /><span><{$photo.title}></span></a></li>
                                                <{else if $photo@iteration ==5||$photo@iteration ==6}>                       
                                                         <{if $photo@iteration ==5}>
						<li style="left:662.5px; top:0px;"><a  target="_blank" href="<{link ctl='case:detail' arg0=$item.case_id}>" /><img src="<{$pager.img}>/<{$photo.photo}>_thumb.jpg" width="215" height="125" /><span><{$photo.title}></span></a></li>
                                                 <{else if $photo@iteration ==6}>
						<li style="left:662.5px; top:130px;"><a  target="_blank" href="<{link ctl='case:detail' arg0=$item.case_id}>" /><img src="<{$pager.img}>/<{$photo.photo}>_thumb.jpg" width="215" height="160" /><span><{$photo.title}></span></a></li>
						                                           
                                                <{/if}> 
                                                
                                                <{/if}>
                                                <{/foreach}>
                                                <div class="clear"></div>  
                                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('name'=>"首页装修案例:风格",'limit'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</ul>
				</div>
				<div class="text-case">
					<ul>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('name'=>"首页装修案例:空间",'limit'=>"1")); $_block_repeat=true; echo smarty_block_KT(array('name'=>"首页装修案例:空间",'limit'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<li style="left:2.5px; top:0;overflow:hidden;width:215px;height:290px"><a target="_blank" href="<{link ctl='case:detail' arg0=$item.case_id}>" /><img style="position:relative;top:-50px;left:-50px"src="<{$pager.img}>/<{$item.thumb}>"  /><span><{$item.title}></span></a></li>
						  <{foreach $item.ext.photos as $photo}>                     
                                                  <{if $photo@iteration ==2||$photo@iteration ==3}>
                                                         <{if $photo@iteration ==2}>
                                                <li style="left:222.5px; top:0;"><a target="_blank" href="<{link ctl='case:detail' arg0=$item.case_id}>" /><img src="<{$pager.img}>/<{$photo.photo}>_thumb.jpg" width="215" height="145" /><span><{$photo.title}></span></a></li>
                                                        <{else if $photo@iteration ==3}>
						<li style="left:222.5px; top:150px;"><a target="_blank"  href="<{link ctl='case:detail' arg0=$item.case_id}>" /><img src="<{$pager.img}>/<{$photo.photo}>_thumb.jpg" width="215" height="140" /><span><{$photo.title}></span></a></li>
                                                         <{/if}>                                                                       
                                              <{else if $photo@iteration ==4}>
						<li style="left:442.5px; top:0px;"><a target="_blank" href="<{link ctl='case:detail' arg0=$item.case_id}>" /><img src="<{$pager.img}>/<{$photo.photo}>" width="215" height="290" /><span><{$photo.title}></span></a></li>
                                                <{else if $photo@iteration ==5||$photo@iteration ==6}>                       
                                                         <{if $photo@iteration ==5}>
						<li style="left:662.5px; top:0px;"><a target="_blank" href="<{link ctl='case:detail' arg0=$item.case_id}>" /><img src="<{$pager.img}>/<{$photo.photo}>_thumb.jpg" width="215" height="125" /><span><{$photo.title}></span></a></li>
                                                 <{else if $photo@iteration ==6}>
						<li style="left:662.5px; top:130px;"><a target="_blank" href="<{link ctl='case:detail' arg0=$item.case_id}>" /><img src="<{$pager.img}>/<{$photo.photo}>_thumb.jpg" width="215" height="160" /><span><{$photo.title}></span></a></li>
						                                           
                                                <{/if}> 
                                                
                                                <{/if}>
                                                <{/foreach}>
                                                <div class="clear"></div>  
                                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('name'=>"首页装修案例:空间",'limit'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</ul>
				</div>
				<div class="text-case">
					<ul>
                                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('name'=>"首页装修案例:别墅",'limit'=>"1")); $_block_repeat=true; echo smarty_block_KT(array('name'=>"首页装修案例:别墅",'limit'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<li style="left:2.5px; top:0;"><a target="_blank"href="<{link ctl='case:detail' arg0=$item.case_id}>" /><img src="<{$pager.img}>/<{$item.thumb}>" width="215" height="290" /><span><{$item.title}></span></a></li>
						  <{foreach $item.ext.photos as $photo}>                     
                                                  <{if $photo@iteration ==2||$photo@iteration ==3}>
                                                         <{if $photo@iteration ==2}>
                                                <li style="left:222.5px; top:0;"><a target="_blank" href="<{link ctl='case:detail' arg0=$item.case_id}>" /><img src="<{$pager.img}>/<{$photo.photo}>_thumb.jpg" width="215" height="145" /><span><{$photo.title}></span></a></li>
                                                        <{else if $photo@iteration ==3}>
						<li style="left:222.5px; top:150px;"><a target="_blank" href="<{link ctl='case:detail' arg0=$item.case_id}>" /><img src="<{$pager.img}>/<{$photo.photo}>_thumb.jpg" width="215" height="140" /><span><{$photo.title}></span></a></li>
                                                         <{/if}>                                                                       
                                              <{else if $photo@iteration ==4}>
						<li style="left:442.5px; top:0px;"><a target="_blank" href="<{link ctl='case:detail' arg0=$item.case_id}>" /><img src="<{$pager.img}>/<{$photo.photo}>" width="215" height="290" /><span><{$photo.title}></span></a></li>
                                                <{else if $photo@iteration ==5||$photo@iteration ==6}>                       
                                                         <{if $photo@iteration ==5}>
						<li style="left:662.5px; top:0px;"><a target="_blank" href="<{link ctl='case:detail' arg0=$item.case_id}>" /><img src="<{$pager.img}>/<{$photo.photo}>_thumb.jpg" width="215" height="125" /><span><{$photo.title}></span></a></li>
                                                 <{else if $photo@iteration ==6}>
						<li style="left:662.5px; top:130px;"><a target="_blank" href="<{link ctl='case:detail' arg0=$item.case_id}>" /><img src="<{$pager.img}>/<{$photo.photo}>_thumb.jpg" width="215" height="160" /><span><{$photo.title}></span></a></li>
						                                           
                                                <{/if}> 
                                                
                                                <{/if}>
                                                <{/foreach}>
                                                <div class="clear"></div>  
                                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('name'=>"首页装修案例:别墅",'limit'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</ul>
				</div>
				<div class="text-case">
					<ul>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('name'=>"首页装修案例:小户型",'limit'=>"1")); $_block_repeat=true; echo smarty_block_KT(array('name'=>"首页装修案例:小户型",'limit'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<li style="left:2.5px; top:0;"><a target="_blank" href="<{link ctl='case:detail' arg0=$item.case_id}>" /><img src="<{$pager.img}>/<{$item.thumb}>" width="215" height="290" /><span><{$item.title}></span></a></li>
						  <{foreach $item.ext.photos as $photo}>                     
                                                  <{if $photo@iteration ==2||$photo@iteration ==3}>
                                                         <{if $photo@iteration ==2}>
                                                <li style="left:222.5px; top:0;"><a  target="_blank" href="<{link ctl='case:detail' arg0=$item.case_id}>" /><img src="<{$pager.img}>/<{$photo.photo}>_thumb.jpg" width="215" height="145" /><span><{$photo.title}></span></a></li>
                                                        <{else if $photo@iteration ==3}>
						<li style="left:222.5px; top:150px;"><a  target="_blank" href="<{link ctl='case:detail' arg0=$item.case_id}>" /><img src="<{$pager.img}>/<{$photo.photo}>_thumb.jpg" width="215" height="140" /><span><{$photo.title}></span></a></li>
                                                         <{/if}>                                                                       
                                              <{else if $photo@iteration ==4}>
						<li style="left:442.5px; top:0px;"><a target="_blank" href="<{link ctl='case:detail' arg0=$item.case_id}>" /><img src="<{$pager.img}>/<{$photo.photo}>" width="215" height="290" /><span><{$photo.title}></span></a></li>
                                                <{else if $photo@iteration ==5||$photo@iteration ==6}>                       
                                                         <{if $photo@iteration ==5}>
						<li style="left:662.5px; top:0px;"><a  target="_blank" href="<{link ctl='case:detail' arg0=$item.case_id}>" /><img src="<{$pager.img}>/<{$photo.photo}>_thumb.jpg" width="215" height="125" /><span><{$photo.title}></span></a></li>
                                                 <{else if $photo@iteration ==6}>
						<li style="left:662.5px; top:130px;"><a target="_blank" href="<{link ctl='case:detail' arg0=$item.case_id}>" /><img src="<{$pager.img}>/<{$photo.photo}>_thumb.jpg" width="215" height="160" /><span><{$photo.title}></span></a></li>
						                                           
                                                <{/if}> 
                                                
                                                <{/if}>
                                                <{/foreach}>
                                                <div class="clear"></div>  
                                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('name'=>"首页装修案例:小户型",'limit'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</ul>
				</div>
				<div class="text-case">
					<ul><?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('name'=>"首页装修案例:公装",'limit'=>"1")); $_block_repeat=true; echo smarty_block_KT(array('name'=>"首页装修案例:公装",'limit'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<li style="left:2.5px; top:0;"><a target="_blank"  href="<{link ctl='case:detail' arg0=$item.case_id}>" /><img src="<{$pager.img}>/<{$item.thumb}>" width="215" height="290" /><span><{$item.title}></span></a></li>
						  <{foreach $item.ext.photos as $photo}>                     
                                                  <{if $photo@iteration ==2||$photo@iteration ==3}>
                                                         <{if $photo@iteration ==2}>
                                                <li style="left:222.5px; top:0;"><a  target="_blank" href="<{link ctl='case:detail' arg0=$item.case_id}>" /><img src="<{$pager.img}>/<{$photo.photo}>_thumb.jpg" width="215" height="145" /><span><{$photo.title}></span></a></li>
                                                        <{else if $photo@iteration ==3}>
						<li style="left:222.5px; top:150px;"><a target="_blank" href="<{link ctl='case:detail' arg0=$item.case_id}>" /><img src="<{$pager.img}>/<{$photo.photo}>_thumb.jpg" width="215" height="140" /><span><{$photo.title}></span></a></li>
                                                         <{/if}>                                                                       
                                              <{else if $photo@iteration ==4}>
						<li style="left:442.5px; top:0px;"><a target="_blank" href="<{link ctl='case:detail' arg0=$item.case_id}>" /><img src="<{$pager.img}>/<{$photo.photo}>" width="215" height="290" /><span><{$photo.title}></span></a></li>
                                                <{else if $photo@iteration ==5||$photo@iteration ==6}>                       
                                                         <{if $photo@iteration ==5}>
						<li style="left:662.5px; top:0px;"><a target="_blank" href="<{link ctl='case:detail' arg0=$item.case_id}>" /><img src="<{$pager.img}>/<{$photo.photo}>_thumb.jpg" width="215" height="125" /><span><{$photo.title}></span></a></li>
                                                 <{else if $photo@iteration ==6}>
						<li style="left:662.5px; top:130px;"><a target="_blank" href="<{link ctl='case:detail' arg0=$item.case_id}>" /><img src="<{$pager.img}>/<{$photo.photo}>_thumb.jpg" width="215" height="160" /><span><{$photo.title}></span></a></li>
						                                           
                                                <{/if}> 
                                                
                                                <{/if}>
                                                <{/foreach}>
                                                <div class="clear"></div>  
                                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('name'=>"首页装修案例:公装",'limit'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</ul>
				</div>
			</div>
			<div class="right rows">
				<div class="new-title">
					热门小区
					<a href="<?php echo smarty_function_link(array('ctl'=>'home:items'),$_smarty_tpl);?>
">更多<i class="fa fa-angle-double-right"></i></a>
				</div>
				<div class="rows-host">
                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"home/main",'order'=>"jf:desc",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"1")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"home/main",'order'=>"jf:desc",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                  <{if $item.jf<(__TIME|format:"y-m-d")}>
                                    <a target="_blank" title="<{$item.name}>" href="<{link ctl='home:detail' arg0=$item.id}>">
                                        <img src="<{$pager.img}>/<{$item.face_pic}>" width="260" height="210" /></a>
					<div class="rows-host-text">
						<a target="_blank" title="<{$item.name}>" href="<{link ctl='home:detail' arg0=$item.id}>"><{$item.name}></a>
						<p>设计方案：<span><{$item.case_num|default:'--'}></span>套</p>
                                                <a target="_blank" title="<{$item.name}>" href="<{link ctl='home:detail' arg0=$item.id}>"><input type="submit" class="rows-submit" value="前往了解" /></a>
					</div>
                                <{/if}>
                                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"home/main",'order'=>"jf:desc",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="figure">
		<div class="left boss">
			<div class="left ceo">
				<div class="boss-title">
					<ul>
						<ol class="cur">企业CEO专访</ol>
						<ol>装企设计总监专访</ol>
						<div class="clear"></div>
					</ul>
				</div>
				
				<div class="boss-con" style="display:block;">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"article/view",'limit'=>"1",'article_id'=>"155")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"article/view",'limit'=>"1",'article_id'=>"155"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                           <a target="_blank" href="<{link ctl='content:detail' arg0=$item.article_id}>" title="<{$item.title}>">
                                           <img src="<{$pager.img}>/<{$item.thumb}>" width="145" height="145" /></a>
                                        <div class="boss-enter"><a target="_blank" href="<{link ctl='content:detail' arg0=$item.article_id}>" title="<{$item.title}>">
                                                专访企业：巨嘉装饰集团</a></div>
					   <div class="boss-name"><a target="_blank" href="<{link ctl='content:detail' arg0=$item.article_id}>" title="<{$item.title}>">
                                                   企业CEO：付总</a></div>
					   <p>个人简介：<{$item.desc|cutstr:100:'...'}></p>
					<div class="clear"></div>
					<div class="ask-con">
						<p class="ask">亿家网：请问付总对目前装修行业发展前景状况和未来发展趋势的看法?</p>
						<p class="answer">付总：随着中国的发展，城乡一体化的改造，行业发展前景是非常乐观的，因为国内需求量较大。</p>
						<p class="ask">亿家网:针对目前装修行业之间混战及恶意竞争的现状有什么好的建议?</p>
						<p class="answer">付总：随着时代的变革，跨界经营慢慢在抢占装修市场，装修行业应以合作、整合、联盟、共赢的趋势发展，突出产品自身优势，做最具性价比的产品。</p>
					</div>
                                         <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"article/view",'limit'=>"1",'article_id'=>"155"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</div>
                            <div class="boss-con">
                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"article/view",'limit'=>"1",'article_id'=>"156")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"article/view",'limit'=>"1",'article_id'=>"156"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                           <a target="_blank" href="<{link ctl='content:detail' arg0=$item.article_id}>" title="<{$item.title}>">
                                           <img src="<{$pager.img}>/<{$item.thumb}>" width="145" height="145" /></a>
                                        <div class="boss-enter"><a target="_blank" href="<{link ctl='content:detail' arg0=$item.article_id}>" title="<{$item.title}>">
                                                专访企业：鲁公大宅装饰有限公司</a></div>
					   <div class="boss-name"><a target="_blank" href="<{link ctl='content:detail' arg0=$item.article_id}>" title="<{$item.title}>">
                                                   企业总监：孙海松</a></div>
					   <p>个人简介：<{$item.desc|cutstr:100:'...'}></p>
					<div class="clear"></div>
					<div class="ask-con">
						<p class="ask">亿家网：请问—孙总监，您认为目前在装修行业里，设计师扮演的是一个什么样的角色？</p>
						<p class="answer">孙总监：其实设计师是一个很重要的角色。除了参谋以外，还是一个重要的参与者，能给业主提供专业的参考指导。</p>
						<p class="ask">亿家网：请问—总监，如何阐述设计师在装修工程里面的重要性？</p>
						<p class="answer">孙总监：可以这样说，装修如果没有设计师，那其它工作都没法做。设计师要把业主的要求，装修风格，材料、使用功能都安排好了，施工队才能施工。就好比，一条新闻如果没有记者先写好了，那广播电视是无法播出一样。</p>
					</div>
                                         <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"article/view",'limit'=>"1",'article_id'=>"156"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</div>
			</div>
			<div class="right news">
				<div class="news-title">
					最新资讯
					<a href="<?php echo smarty_function_link(array('ctl'=>'content:items','arg0'=>'68'),$_smarty_tpl);?>
">更多<i class="fa fa-angle-double-right"></i></a>
				</div>
				<ul> <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"article/view",'limit'=>"10",'cat_id'=>"68",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'])); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"article/view",'limit'=>"10",'cat_id'=>"68",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					
					<li><a target="_blank" href="<{link ctl='content:detail' arg0=$item.article_id}>" title="<{$item.title}>"><{$item.title}><span><{date('Y-m-d',$item.dateline)}></span></a></li><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"article/view",'limit'=>"10",'cat_id'=>"68",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</ul>
			</div>
			<div class="clear"></div>
		</div>
		<div class="right staff">
			<div class="staff-title">
				<ul>
					<ol class="cur">设计师排行</ol>
					<ol>预算小工具</ol>
					<div class="clear"></div>
				</ul>
			</div>
			<div class="staff-list" style="display:block;">
				<ul class="staff-user">
                                     <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"designer/designer",'limit'=>"5",'order'=>"case_num:desc",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'])); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"designer/designer",'limit'=>"5",'order'=>"case_num:desc",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<li>
						<a target="_blank" href="<{link ctl='blog' arg0=$item.uid}>" title="<{$item.uname}>">
							<img src="<{$pager.img}>/<{$item.face}>" width="50" height="50" />
							<p class="staff-name">设计师姓名：<{$item.uname}></p>
							<p>案例数：<span><{$item.case_num}></span></p>
							<p>毕业院校：<{$item.school|cutstr:16:''}></p>
						</a>
					</li>
                                     <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"designer/designer",'limit'=>"5",'order'=>"case_num:desc",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					
					
				</ul>
			</div>
			<div class="staff-list">
				<div class="unit-list">
					<a href="<?php echo smarty_function_link(array('ctl'=>'tools:items','arg0'=>'main'),$_smarty_tpl);?>
"><i class="fa fa-magic"></i><p>涂料计算器</p></a>
					<a href="<?php echo smarty_function_link(array('ctl'=>'tools:items','arg0'=>'diban'),$_smarty_tpl);?>
"><i class="fa fa-th"></i><p>地板计算器</p></a>
					<a href="<?php echo smarty_function_link(array('ctl'=>'tools:items','arg0'=>'bizhi'),$_smarty_tpl);?>
"><i class="fa fa-image"></i><p>壁纸计算器</p></a>
					<a href="<?php echo smarty_function_link(array('ctl'=>'tools:items','arg0'=>'qiangzhuan'),$_smarty_tpl);?>
"><i class="fa fa-road"></i><p>墙砖预算器</p></a>
					<a href="<?php echo smarty_function_link(array('ctl'=>'tools:items','arg0'=>'chuanlian'),$_smarty_tpl);?>
"><i class="fa fa-external-link"></i><p>窗帘计算器</p></a>
					<a href="<?php echo smarty_function_link(array('ctl'=>'tools:items','arg0'=>'dizhuan'),$_smarty_tpl);?>
"><i class="fa fa-inbox"></i><p>地砖计算器</p></a>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="link">
		<div class="link-con">
			<div class="new-title">
				友情连接
				<!--<a href="">申请友链<i class="fa fa-angle-double-right"></i></a>-->
			</div>
			<ul>
				<?php echo smarty_function_widget(array('id'=>"links/news",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>

				
				<div class="clear"></div>
			</ul>
		</div>
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

       <li><a target="_blank" title="<{$item.title}>" href="<{link ctl='about' arg0=$item.page}>">
				<{$item.title}></a></li>
                             <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>'article/view','from'=>'about','order'=>'article_id:ASC','limit'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<div class="clear"></div>
			</ul>
			<p>Copyright © 2014 亿家网, All rights reserved. ICP备案：鄂ICP备14004834号-1 </p>
			<p>技术支持：www.ejiawang.cc 
                            <!--<a mini-load='申请免费量房' href="<?php echo smarty_function_link(array('ctl'=>'gs:yuyue2','arg0'=>'1','http'=>'empty'),$_smarty_tpl);?>
" >免费预约</a>-->
                        
                        </p>
			<img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/images/icon.png" />
		</div>
		<div class="clear"></div>
	</div>
</div>
<script type="text/javascript"> 
$(function(){ 
	$.divselect("#divselect","#dist");
	$.divselect("#divselect1","#type");
	$.divselect("#divselect2","#money");
	$.divselect("#divselect3","#type1");
	$.divselect("#divselect4","#money1");
	show('.text ul ol','.text .text-row','mouseover');
	show('.host ul ol','.host .text-host','mouseover');
	show('.help ul ol','.help .text-help','mouseover');
	show('.case-type ol','.case .text-case','mouseover');
	show('.boss-title ol','.boss-con','mouseover');
	show('.staff-title ol','.staff-list','mouseover');
	SlideShow(3000);
	var scrtime;
	$(".scroll-down").hover(function(){
		clearInterval(scrtime);
	},function(){
		scrtime = setInterval(function(){
			var $ul = $(".scroll-down .heigt");
			var liHeight = $ul.find("a:last").height();
			$ul.animate({marginTop : -liHeight + "px"},1000,function(){
			
			$ul.find("a:first").appendTo($ul)
			$ul.find("a:first").hide();
			$ul.css({marginTop:0});
			$ul.find("a:last").fadeIn(1000);
			});
		},1000);
	}).trigger("mouseleave");
     
}); 
</script>

 <script>
               $(document).ready(function(){
                    $("#submit-list1").click(function(){                    
                       if($("#input-name1").val()==""){
                         alert("请填入您的姓名");
                         return false;
                         }
                         if($("#input-mobile1").val()==""){
                         alert("请填入您的电话");
                         return false;
                         }

                         var reg = /^1[3|4|5|8|7][0-9]\d{8}$/;
                           if(!reg.test($.trim( $("#input-mobile1").val() )))
                           {
                            alert("手机号码格式不对,请输入11位正确号码！");
                            return false;
                           }

                        });
                    $("#submit-list2").click(function(){                    
                       if($("#input-name2").val()==""){
                         alert("请填入您的姓名");
                         return false;
                         }
                         if($("#input-mobile2").val()==""){
                         alert("请填入您的电话");
                         return false;
                         }
                         var reg = /^1[3|4|5|8|7][0-9]\d{8}$/;
                           if(!reg.test($.trim( $("#input-mobile2").val() )))
                           {
                            alert("手机号码格式不对,请输入11位正确号码！");
                            return false;
                           }
                        });
                    $("#submit-list3").click(function(){                    
                       if($("#input-name3").val()==""){
                         alert("请填入您的姓名");
                         return false;
                         }
                         if($("#input-mobile3").val()==""){
                         alert("请填入您的电话");
                         return false;
                         }
                         var reg = /^1[3|4|5|8|7][0-9]\d{8}$/;
                           if(!reg.test($.trim( $("#input-mobile3").val() )))
                           {
                            alert("手机号码格式不对,请输入11位正确号码！");
                            return false;
                           }
                        }); 
                    $("#submit-list4").click(function(){                    
                       if($("#input-name4").val()==""){
                         alert("请填入您的姓名");
                         return false;
                         }
                         if($("#input-mobile4").val()==""){
                         alert("请填入您的电话");
                         return false;
                         }
                         var reg = /^1[3|4|5|8|7][0-9]\d{8}$/;
                           if(!reg.test($.trim( $("#input-mobile4").val() )))
                           {
                            alert("手机号码格式不对,请输入11位正确号码！");
                            return false;
                           }
                        });
                    $("#submit-list5").click(function(){                    
                       if($("#input-name5").val()==""){
                         alert("请填入您的姓名");
                         return false;
                         }
                         if($("#input-mobile5").val()==""){
                         alert("请填入您的电话");
                         return false;
                         }
                         var reg = /^1[3|4|5|8|7][0-9]\d{8}$/;
                           if(!reg.test($.trim( $("#input-mobile5").val() )))
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