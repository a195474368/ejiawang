<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 12:16:42
         compiled from "/www/wwwroot/www.fzgxw.com/themes/cheerful/mall/index.html" */ ?>
<?php /*%%SmartyHeaderCode:192360095655d7f7aa586932-07606543%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95bfad20a13127b2f4876394217cb8ec759fab77' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/cheerful/mall/index.html',
      1 => 1422687394,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192360095655d7f7aa586932-07606543',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7f7aa849239_84819556',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7f7aa849239_84819556')) {function content_55d7f7aa849239_84819556($_smarty_tpl) {?><?php if (!is_callable('smarty_function_widget')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.widget.php';
if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_block_calldata')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/block.calldata.php';
if (!is_callable('smarty_block_KT')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/block.KT.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/style/mallstyle.css?20140109"/> 
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/style/base.css?20140109"/> 
<link rel="stylesheet" type="text/css" href="/themes/cheerful/static/style/mallstyle.css"/>
<link rel="stylesheet" type="text/css" href="/themes/cheerful/static/style/base.css"/>
<!----------头部和导航公共部分------------>  
<!-- 主题部分开始 -->
<div class="index_b_bg hauto">
	<!-- 上面部分开始 -->
	<div class="w1000 mall_main_t hauto mt10">
		<!-- 左面开始   -->
		<div class="mall_main_t_l lt bgwhite"><?php echo smarty_function_widget(array('id'=>"shop/catenav",'tpl'=>"mall/block/catenav.html"),$_smarty_tpl);?>
</div>
		<!-- 左面结束   -->
		<!-- 右面开始  -->
		<div class="mall_main_t_r lt hauto ml10">
			<div class="mall_main_t_r_t hauto">
				<!--右面上方的banner开始-->
				<div class="mall_main_r_banner lt">
					<div class="mall_main_r_banner_1 none" id="mall_main_r_banner_1" kinBox='{"height":230}'><?php echo smarty_function_widget(array('id'=>"adv",'name'=>"商城首页头部轮转广告",'limit'=>5),$_smarty_tpl);?>
</div>
				</div>
				<!--右面上方的banner结束-->
				<!-- 右面上方右面开始-->
				<div class="mall_sale lt hauto ml10 bgwhite">
					<div class="mall_sale_t bodr_b">
						<ul>
							<li><a class="black">优惠券</a><b class="sanjiao">◆</b></li>
							<li><a class="black">商城公告</a><b class="sanjiao">◆</b></li>
						</ul>
						<a href="<?php echo smarty_function_link(array('ctl'=>'mall/coupon'),$_smarty_tpl);?>
" class="a42" target="_blank">更多>></a>
					</div>
					<div class="mall_sale_b hauto mall_sale_b_1 none">
						<ul>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"shop/coupon",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"hot",'limit'=>"8")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"shop/coupon",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"hot",'limit'=>"8"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<li>
								<a href="<{link ctl='mall/coupon:detail' arg0=$item.coupon_id}>" title="<{$item.title}>" target="_blank"><{$item.ext.shop.name}><i><{$item.money}>元优惠券</i></a>
							</li>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"shop/coupon",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"hot",'limit'=>"8"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</ul>
					</div>
					<div class="mall_sale_b_b hauto mall_sale_b_2 none">
						<ul>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"shop/news",'ext'=>false,'limit'=>"7")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"shop/news",'ext'=>false,'limit'=>"7"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<li><a href="<{link ctl='mall/news:detail' arg0=$item.news_id}>"><{$item.title}></a></li>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"shop/news",'ext'=>false,'limit'=>"7"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</ul>
						<div class="h10"></div>
					</div>
				</div>
				<!-- 右面上方右面结束-->
			</div>
			<!-- 右面下方开始-->
			<div class="mall_main_t_r_b hauto mt15 bgwhite">
				<div class="mall_main_t_r_b_all hauto">
					<div class="mall_main_t_r_b_ul bodr_b">
						<ul>
							<li><a class="red">限时抢购</a><b class="sanjiao">◆</b></li>
							<li><a class="red">热卖推荐</a><b class="sanjiao">◆</b></li>
							<li><a class="red">新品上架</a><b class="sanjiao">◆</b></li>
							<li><a class="red">今日特价</a><b class="sanjiao">◆</b></li>
						</ul>
					</div>
					<div class="mall_main_t_product hauto mall_main_t_1 none">
						<ul>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"product/product",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'sale_type'=>2,'order'=>"hot",'limit'=>"4")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"product/product",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'sale_type'=>2,'order'=>"hot",'limit'=>"4"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<li>
								<a href="<{link ctl='mall/product:detail' arg0=$item.product_id}>" title="<{$item.title}>" target="_blank"><img src="<{$pager.img}>/<{$item.photo}>_thumb.jpg" width="165" height="110" /></a>
								<p></p>
								<p class="text"><span></span><font remaintime="<{strtotime($item.sale_time)}>"></font></p>
								<i>【限时抢购】<a href="<{link ctl='mall/product:detail' arg0=$item.product_id}>" target="_blank"><{$item.title}></a></i>
								<i>抢购价&nbsp;:&nbsp;<b>￥<{$item.price}></b></i>
							</li>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"product/product",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'sale_type'=>2,'order'=>"hot",'limit'=>"4"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</ul>
					</div>
					<div class="mall_main_t_product hauto mall_main_t_2 none">
						<ul>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"product/product",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'sale_remai'=>1,'order'=>"hot",'limit'=>"4")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"product/product",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'sale_remai'=>1,'order'=>"hot",'limit'=>"4"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<li>
								<a href="<{link ctl='mall/product:detail' arg0=$item.product_id}>" title="<{$item.title}>" target="_blank"><img src="<{$pager.img}>/<{$item.photo}>_thumb.jpg" width="165" height="110" /></a>
								<p></p>
								<i>【热卖推荐】<a href="<{link ctl='mall/product:detail' arg0=$item.product_id}>" target="_blank"><{$item.title}></a></i>
								<i>抢购价&nbsp;:&nbsp;<b>￥<{$item.price}></b></i>
							</li>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"product/product",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'sale_remai'=>1,'order'=>"hot",'limit'=>"4"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</ul>
					</div>
					<div class="mall_main_t_product hauto mall_main_t_3 none">
						<ul>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"product/product",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"new",'limit'=>"4")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"product/product",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"new",'limit'=>"4"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<li>
								<a href="<{link ctl='mall/product:detail' arg0=$item.product_id}>" title="<{$item.title}>" target="_blank"><img src="<{$pager.img}>/<{$item.photo}>_thumb.jpg" width="165" height="110" /></a>
								<p></p>
								<i>【新品上架】<a href="<{link ctl='mall/product:detail' arg0=$item.product_id}>" target="_blank"><{$item.title}></a></i>
								<i>抢购价&nbsp;:&nbsp;<b>￥<{$item.price}></b></i>
							</li>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"product/product",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"new",'limit'=>"4"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</ul>
					</div>
					<div class="mall_main_t_product hauto mall_main_t_4 none">
						<ul>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"product/product",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'sale_youhui'=>1,'order'=>"hot",'limit'=>"4")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"product/product",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'sale_youhui'=>1,'order'=>"hot",'limit'=>"4"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<li>
								<a href="<{link ctl='mall/product:detail' arg0=$item.product_id}>" title="<{$item.title}>" target="_blank"><img src="<{$pager.img}>/<{$item.photo}>_thumb.jpg" width="165" height="110" /></a>
								<p></p>
								<i>【今日特价】<a href="<{link ctl='mall/product:detail' arg0=$item.product_id}>" target="_blank"><{$item.title}></a></i>
								<i>抢购价&nbsp;:&nbsp;<b>￥<{$item.price}></b></i>
							</li>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"product/product",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'sale_youhui'=>1,'order'=>"hot",'limit'=>"4"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</ul>
					</div>
				</div>
			</div>
			<!-- 右面下方结束-->            
		</div>
		<!-- 右面结束  -->
	</div>   
	<!-- 上面部分结束  -->
	<!-- 热门品牌开始  -->
	<div class="w1000 hauto mt10 mall_hot_pinpai">
		<h2><span>热门品牌</span></h2>
		<div class="hot_show w1000 bgwhite hauto">
			<ul>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('name'=>"推荐商家格子铺",'limit'=>14)); $_block_repeat=true; echo smarty_block_KT(array('name'=>"推荐商家格子铺",'limit'=>14), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li>
					<p><a href="<{link ctl='mall/shop' arg0=$item.shop_id}>" title="<{$item.name}>" target="_blank"><img src="<{$pager.img}>/<{$item.logo}>" width="105" height="45" /></a></p>
					<p><a href="<{link ctl='mall/shop' arg0=$item.shop_id}>" title="<{$item.name}>" target="_blank"><{$item.name}></a></p>
				</li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('name'=>"推荐商家格子铺",'limit'=>14), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
                         
			</ul>
		</div>
	</div>
	<!-- 热门品牌结束 -->
	<!-- 基础建材开始 -->
	<div class="mt15 mall_basic_jcjc w1000">
	<!-- 公共的标题    -->
		 <div class="mall_title w1000 hauto">
			<h2 class="org">建材基础</h2>
			<div class="mall_title_r rt">
				<ul>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>'shop/cate','parent_id'=>1,'limit'=>5)); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>'shop/cate','parent_id'=>1,'limit'=>5), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<li><a href="<{link ctl='mall/product' arg0=$item.cat_id}>"><{$item.title}></a></li>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>'shop/cate','parent_id'=>1,'limit'=>5), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</ul>
			   <p><a href="<?php echo smarty_function_link(array('ctl'=>'mall/product','arg0'=>1),$_smarty_tpl);?>
" target="_blank">更多>></a></p>
			</div>
		 </div>
		 <div class="cl"></div>
		<!-- 公共的标题    -->
		 <div class="mall_basic_jcjc_b w1000 hauto bgwhite">
			<p style="width:230px;height:364px;overflow:hidden;margin-top:18px;"><?php echo smarty_function_widget(array('id'=>"adv",'name'=>"商城首页基础建材左侧图片广告",'limit'=>"1"),$_smarty_tpl);?>
</p>
			<ul>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"product/product",'cat_id'=>1,'limit'=>"8")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"product/product",'cat_id'=>1,'limit'=>"8"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li<{if $iteration mod 4 eq 0}> style="border-right:none;"<{/if}>>
					<div class="divhover">
						<a href="<{link ctl='mall/product:detail' arg0=$item.product_id}>" title="<{$item.title}>" target="_blank"><img src="<{$pager.img}>/<{$item.photo}>_thumb.jpg" width="150" height="100" /></a>
						<p><a href="<{link ctl='mall/product:detail' arg0=$item.product_id}>" title="<{$item.title}>" target="_blank" class="it_title"><{$item.title}></a></p>
						<p><del>￥<{$item.market_price}></del><b>￥<{$item.price}></b></p>
						<span class="xinpin"></span>
						<p class="p61">
							<a href="<{link ctl='mall/shop' arg0=$item.shop_id}>" class="a43"><{$item.ext.shop.name}></a>
							<a href="<{link ctl='mall/shop' arg0=$item.shop_id}>" class="a44">查看详情</a>
						</p>
					</div>
				</li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"product/product",'cat_id'=>1,'limit'=>"8"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>
			<div class="cl"></div>
		 </div>              
	  </div>
	<!-- //基础建材结束 -->
	<!-- 广告开始 -->
	<div class="mt15 w1000"><?php echo smarty_function_widget(array('id'=>"adv",'name'=>"商城首页基础建材下方通栏广告",'limit'=>"3"),$_smarty_tpl);?>
</div>
	<!-- //广告结束 -->
	<!-- 家具开始 -->
	<div class="mt15 mall_basic_jcjc w1000">
		<!-- 公共的标题    -->
		<div class="mall_title w1000 hauto">
			<h2 class="blue">家具</h2>
			<div class="mall_title_r rt">
				<ul>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>'shop/cate','parent_id'=>2,'limit'=>5)); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>'shop/cate','parent_id'=>2,'limit'=>5), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<li><a href="<{link ctl='mall/product' arg0=$item.cat_id}>"><{$item.title}></a></li>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>'shop/cate','parent_id'=>2,'limit'=>5), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</ul>
				<p><a href="<?php echo smarty_function_link(array('ctl'=>'mall/product','arg0'=>2),$_smarty_tpl);?>
" target="_blank">更多>></a></p>
			</div>
		</div>
		<div class="cl"></div>
		<!-- //公共的标题 -->
		<div class="mall_basic_jcjc_b w1000 hauto bgwhite">
			<p style="width:230px;height:364px;overflow:hidden;margin-top:18px;"><?php echo smarty_function_widget(array('id'=>"adv",'name'=>"商城首页家具左侧图片广告",'limit'=>"1"),$_smarty_tpl);?>
</p>
			<ul>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"product/product",'cat_id'=>2,'limit'=>"8")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"product/product",'cat_id'=>2,'limit'=>"8"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li<{if $iteration mod 4 eq 0}> style="border-right:none;"<{/if}>>
					<div class="divhover">
						<a href="<{link ctl='mall/product:detail' arg0=$item.product_id}>" title="<{$item.title}>" target="_blank"><img src="<{$pager.img}>/<{$item.photo}>_thumb.jpg" width="150" height="100" /></a>
						<p><a href="<{link ctl='mall/product:detail' arg0=$item.product_id}>" title="<{$item.title}>" target="_blank" class="it_title"><{$item.title}></a></p>
						<p><del>￥<{$item.market_price}></del><b>￥<{$item.price}></b></p>
						<span class="xinpin"></span>
						<p class="p61">
							<a href="<{link ctl='mall/shop' arg0=$item.shop_id}>" class="a43"><{$item.ext.shop.title|cutstr:10:''}></a>
							<a href="<{link ctl='mall/shop' arg0=$item.shop_id}>" class="a44">查看详情</a>
						</p>
					</div>
				</li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"product/product",'cat_id'=>2,'limit'=>"8"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>
			<div class="cl"></div>
		</div>              
	</div>
	<!-- //家具结束 -->
	<!-- 软装配饰开始-->
	<div class="mt15 mall_basic_jcjc w1000">
		<!-- 公共的标题 -->
		<div class="mall_title w1000 hauto">
			<h2 class="green1">软装配饰</h2>
			<div class="mall_title_r rt">
				<ul>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>'shop/cate','parent_id'=>7,'limit'=>5)); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>'shop/cate','parent_id'=>7,'limit'=>5), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<li><a href="<{link ctl='mall/product' arg0=$item.cat_id}>"><{$item.title}></a></li>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>'shop/cate','parent_id'=>7,'limit'=>5), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</ul>
				<p><a href="<?php echo smarty_function_link(array('ctl'=>'mall/product','arg0'=>7),$_smarty_tpl);?>
" target="_blank">更多>></a></p>
			</div>
		</div>
		<div class="cl"></div>
		<!-- //公共的标题 -->
		<div class="mall_basic_jcjc_b w1000 hauto bgwhite">
			<p style="width:230px;height:364px;overflow:hidden;margin-top:18px;"><?php echo smarty_function_widget(array('id'=>"adv",'name'=>"商城首页软装配饰左侧图片广告",'limit'=>"1"),$_smarty_tpl);?>
</p>
			<ul>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"product/product",'cat_id'=>7,'limit'=>"8")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"product/product",'cat_id'=>7,'limit'=>"8"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li<{if $iteration mod 4 eq 0}> style="border-right:none;"<{/if}>>
					<div class="divhover">
						<a href="<{link ctl='mall/product:detail' arg0=$item.product_id}>" title="<{$item.title}>" target="_blank"><img src="<{$pager.img}>/<{$item.photo}>_thumb.jpg" width="150" height="100" /></a>
						<p><a href="<{link ctl='mall/product:detail' arg0=$item.product_id}>" title="<{$item.title}>" target="_blank" class="it_title"><{$item.title}></a></p>
						<p><del>￥<{$item.market_price}></del><b>￥<{$item.price}></b></p>
						<span class="xinpin"></span>
						<p class="p61">
							<a href="<{link ctl='mall/shop' arg0=$item.shop_id}>" class="a43"><{$item.ext.shop.title|cutstr:10:''}></a>
							<a href="<{link ctl='mall/shop' arg0=$item.shop_id}>" class="a44">查看详情</a>
						</p>
					</div>
				</li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"product/product",'cat_id'=>7,'limit'=>"8"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>
			<div class="cl"></div>
		</div>              
	</div>
	<!-- //软装配饰结束 -->
	<!-- 广告开始 -->
	<div class="mt15 w1000"><?php echo smarty_function_widget(array('id'=>"adv",'name'=>"商城首页软装配饰下方通栏广告",'limit'=>"3"),$_smarty_tpl);?>
</div>
	<!-- //广告结束 -->
	<!--  家用电器开始 -->
	<div class="mt15 mall_basic_jcjc w1000">
		<!-- 公共的标题 -->
		<div class="mall_title w1000 hauto">
			<h2 class="black">家用电器</h2>
			<div class="mall_title_r rt">
				<ul>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>'shop/cate','parent_id'=>8,'limit'=>5)); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>'shop/cate','parent_id'=>8,'limit'=>5), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<li><a href="<{link ctl='mall/product' arg0=$item.cat_id}>"><{$item.title}></a></li>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>'shop/cate','parent_id'=>8,'limit'=>5), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</ul>
				<p><a href="<?php echo smarty_function_link(array('ctl'=>'mall/product','arg0'=>8),$_smarty_tpl);?>
" target="_blank">更多>></a></p>
			</div>
		</div>
		<div class="cl"></div>
		<!-- //公共的标题    -->
		<div class="mall_basic_jcjc_b w1000 hauto bgwhite">
			<p style="width:230px;height:364px;overflow:hidden;margin-top:18px;"><?php echo smarty_function_widget(array('id'=>"adv",'name'=>"商城首页家用电器左侧图片广告",'limit'=>"1"),$_smarty_tpl);?>
</p>
			<ul>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"product/product",'cat_id'=>8,'limit'=>"8")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"product/product",'cat_id'=>8,'limit'=>"8"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li<{if $iteration mod 4 eq 0}> style="border-right:none;"<{/if}>>
					<div class="divhover">
						<a href="<{link ctl='mall/product:detail' arg0=$item.product_id}>" title="<{$item.title}>" target="_blank"><img src="<{$pager.img}>/<{$item.photo}>_thumb.jpg" width="150" height="100" /></a>
						<p><a href="<{link ctl='mall/product:detail' arg0=$item.product_id}>" title="<{$item.title}>" target="_blank"  class="it_title"><{$item.title}></a></p>
						<p><del>￥<{$item.market_price}></del><b>￥<{$item.price}></b></p>
						<span class="xinpin"></span>
						<p class="p61">
							<a href="<{link ctl='mall/shop' arg0=$item.shop_id}>" class="a43"><{$item.ext.shop.title|cutstr:10:''}></a>
							<a href="<{link ctl='mall/shop' arg0=$item.shop_id}>" class="a44">查看详情</a>
						</p>
					</div>
				</li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"product/product",'cat_id'=>8,'limit'=>"8"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>
			<div class="cl"></div>
		</div>
	</div>
	<!-- //家用电器结束 -->
	<div class="h30"></div>
</div>
<!-- //主题部分结束 -->
<?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script>
$(document).ready(function(){
$(function(){
    var dateTime = new Date();
    var difference = dateTime.getTime() - <?php echo $_smarty_tpl->tpl_vars['pager']->value['dateline'];?>
*1000;	
    setInterval(function(){
      $("[remaintime]").each(function(){
        var obj = $(this);
        var endTime = new Date(parseInt(obj.attr('remaintime')) * 1000);
        var nowTime = new Date();
        var nMS=endTime.getTime() - nowTime.getTime() + difference;
        var myD=Math.floor(nMS/(1000 * 60 * 60 * 24));
        var myH=Math.floor(nMS/(1000*60*60)) % 24;
        var myM=Math.floor(nMS/(1000*60)) % 60;
        var myS=Math.floor(nMS/1000) % 60;
        var myMS=Math.floor(nMS/100) % 10;
        if(myD>= 0){
			var str = myD+"天"+myH+"小时"+myM+"分"+myS+"."+myMS+"秒";
        }else{
			var str = "已结束！";	
		}
		obj.html(str);
      });
    }, 100);
});

$(".mall_sale_t ul li").mouseover(function() {
	var index = $(this).index();
	$(".mall_sale_t ul li").each(function(a) {
		var nn = a + 1
		if (a == index) {
			$(this).addClass("current24");
			$(this).find(".sanjiao").show();
			$(this).find(".black").css('color','#666666');
			$(".mall_sale_b_" + nn).show();
		} else {
			$(this).removeClass("current24");
			$(this).find(".sanjiao").hide();
			$(this).find(".black").css('color','');
			$(".mall_sale_b_" + nn).hide();
		}
	});
});
$(".mall_sale_t ul li").eq(0).mouseover();
$(".mall_main_t_r_b_ul ul li").mouseover(function() {
	var index = $(this).index();
    $("")
	$(".mall_main_t_r_b_ul ul li").each(function(a) {
		var nnn = a + 1
		if (a == index) {
			$(this).addClass("current25");
			 $(this).find(".sanjiao").show();
			$(this).find(".red").css('color','#00AD28');
		    $(this).find(".sanjiao").css('color','#00AD28');
			$(".mall_main_t_" + nnn).show();
		} else {
			$(this).removeClass("current25");
			  $(this).find(".sanjiao").hide();
			$(this).find(".red").css('color','');
			$(".mall_main_t_" + nnn).hide();
		}
	});
});
$(".mall_main_t_r_b_ul ul li").eq(0).mouseover();


 /*

$(".mall_main_t_r_b_ul ul li").eq(0).mouseover();	
$(".mall_basic_jcjc_b ul li>divhover").mouseover(function(){
    $(this).css('border','1px solid #FF7F00');
    $(this).find(".p61").show();	
}).mouseout(function(){
    $(this).css('border','');
    $(this).find(".p61").hide();	
});	
*/
});
</script>
<?php }} ?>