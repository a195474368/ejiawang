<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 12:16:51
         compiled from "/www/wwwroot/www.fzgxw.com/themes/cheerful/mall/product/items.html" */ ?>
<?php /*%%SmartyHeaderCode:6948056455d7f7b3adf249-68149524%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb87c8ae95028cf31d075332e663b04e326b7013' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/cheerful/mall/product/items.html',
      1 => 1422687395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6948056455d7f7b3adf249-68149524',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'request' => 0,
    'items' => 0,
    'item' => 0,
    'shop_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7f7b3d08969_89720499',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7f7b3d08969_89720499')) {function content_55d7f7b3d08969_89720499($_smarty_tpl) {?><?php if (!is_callable('smarty_function_widget')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.widget.php';
if (!is_callable('smarty_block_calldata')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/block.calldata.php';
if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_icon')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.icon.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/style/mallstyle.css?20140109"/> 
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/style/base.css?20140109"/> 
<link rel="stylesheet" type="text/css" href="/themes/cheerful/static/style/mallstyle.css"/>
<link rel="stylesheet" type="text/css" href="/themes/cheerful/static/style/base.css"/>
<!-- 主题部分开始 -->
<div class="index_b_bg hauto">   
    <div class="w1000 mall_main_t hauto mt10">
        <div class="mall_list_l lt">
            <!-- 左面分类开始   -->
            <div class="mall_main_t_l lt bgwhite"><?php echo smarty_function_widget(array('id'=>"shop/catenav",'tpl'=>"mall/block/catenav.html"),$_smarty_tpl);?>
</div>
            <!-- //左面分类结束   -->
           
            <!-- 左面热卖开始 -->
            <div class="mall_list_paihang hauto bgwhite">
                <h2>热卖排行<i></i></h2>
                <ul>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"product/product",'city'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"hot",'limit'=>"5")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"product/product",'city'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"hot",'limit'=>"5"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li>
                         <p>
                            <a href="<{link ctl='mall/product:detail' arg0=$item.product_id}>" title="<{$item.title}>"><img src="<{$pager.img}>/<{$item.photo}>_thumb.jpg" width="65" height="45"/></a>
                            <a href="<{link ctl='mall/product:detail' arg0=$item.product_id}>" class="product" title="<{$item.title}>"><{$item.title}></a>
                            <span class="cl block h10"></span>
                            <span>市场价&nbsp;：&nbsp;<del>￥<{$item.market_price}></del> </span>
                            <span>现价&nbsp;：&nbsp;<i>￥<{$item.price}></i></span>
                            <span class="h5"></span>
                        </p>
                    </li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"product/product",'city'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"hot",'limit'=>"5"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
                                
                </ul>
            </div>
            <!-- //左面热卖结束 -->
        </div>  
        <!-- //左面结束 -->  
        <!-- 右面开始   -->  
        <div class="mall_list_r lt ml10">
            <div class="mall_list_r_b bgwhite">
                <!--商品展示开始-->
				<?php echo smarty_function_widget(array('id'=>"product/filter",'cat_id'=>$_smarty_tpl->tpl_vars['pager']->value['cat_id'],'brand_id'=>$_smarty_tpl->tpl_vars['pager']->value['brand_id'],'attr_values'=>$_smarty_tpl->tpl_vars['pager']->value['attr_values'],'order'=>$_smarty_tpl->tpl_vars['pager']->value['order'],'tpl'=>"mall/product/filter.html"),$_smarty_tpl);?>

                <div class="mall_list_shunxu">
                    <span class="span91 lt">排序&nbsp;:&nbsp;</span>
                    <ul class="ul1 lt">
                        <li class="li0">
							<?php if (empty($_smarty_tpl->tpl_vars['pager']->value['order'])){?>
							<i class="i1 red">默认</i>
							<?php }else{ ?><i class="i1 red">
							<a href="<?php echo smarty_function_link(array('ctl'=>'mall/product','arg0'=>$_smarty_tpl->tpl_vars['pager']->value['cat_id'],'arg1'=>$_smarty_tpl->tpl_vars['pager']->value['brand_id'],'arg2'=>$_smarty_tpl->tpl_vars['pager']->value['attr_ids'],'arg3'=>0,'arg4'=>1),$_smarty_tpl);?>
">默认</i><?php }?>
							<span></span>
							</li>
                        <li class="li1">
							<?php if ($_smarty_tpl->tpl_vars['pager']->value['order']==1){?>
							<i class="i1 red">销量</i>
							<?php }else{ ?><i class="i1 red">
							<a href="<?php echo smarty_function_link(array('ctl'=>'mall/product','arg0'=>$_smarty_tpl->tpl_vars['pager']->value['cat_id'],'arg1'=>$_smarty_tpl->tpl_vars['pager']->value['brand_id'],'arg2'=>$_smarty_tpl->tpl_vars['pager']->value['attr_ids'],'arg3'=>1,'arg4'=>1),$_smarty_tpl);?>
">销量</i><?php }?>	<span></span>
						</li>
                        <li class="li2">
							<?php if ($_smarty_tpl->tpl_vars['pager']->value['order']==2){?>
							<i class="i1 red">价格</i>
							<?php }else{ ?><i class="i1 red">
							<a href="<?php echo smarty_function_link(array('ctl'=>'mall/product','arg0'=>$_smarty_tpl->tpl_vars['pager']->value['cat_id'],'arg1'=>$_smarty_tpl->tpl_vars['pager']->value['brand_id'],'arg2'=>$_smarty_tpl->tpl_vars['pager']->value['attr_ids'],'arg3'=>2,'arg4'=>1),$_smarty_tpl);?>
">价格</i><?php }?>	<span></span>						
						</li>
                    </ul>
                    <ul class="ul2 lt">
                        <li class="li0"><span></span><i class="i1 red">商品</i></li>
                        <li class="li1"><a href="<?php echo smarty_function_link(array('ctl'=>'mall/product:shop','arg0'=>$_smarty_tpl->tpl_vars['pager']->value['cat_id']),$_smarty_tpl);?>
"><span></span><i class="i1">商铺</i></a></li>
                    </ul>
                    <span class="span92 lt">共<i><?php echo $_smarty_tpl->tpl_vars['pager']->value['count'];?>
件</i>商品</span>
                </div>
                <div class="mall_list_show hauto bgwhite mall_list_show_1" id="paixu">
                    <div class="mall_basic_jcjc_b mb20 bgwhite">
                        <ul>
                            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->iteration++;
?>
                            <li <?php if ($_smarty_tpl->tpl_vars['item']->iteration%4==0){?>style="border-right:none;"<?php }?>>
                                <div class="divhover">
                                    <a href="<?php echo smarty_function_link(array('ctl'=>'mall/product:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['product_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['photo'];?>
_thumb.jpg" width="150" height="100" /></a>
                                    <p><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</p>
                                    <p><del>￥<?php echo $_smarty_tpl->tpl_vars['item']->value['market_price'];?>
</del><b>￥<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</b></p>
                                    <?php echo smarty_modifier_icon($_smarty_tpl->tpl_vars['item']->value['content'],"product");?>

                                    <p class="p61">
                                        <a href="<?php echo smarty_function_link(array('ctl'=>'mall/shop','arg0'=>$_smarty_tpl->tpl_vars['item']->value['shop_id']),$_smarty_tpl);?>
" class="a43"><?php echo $_smarty_tpl->tpl_vars['shop_list']->value[$_smarty_tpl->tpl_vars['item']->value['shop_id']]['title'];?>
</a>
                                        <a href="<?php echo smarty_function_link(array('ctl'=>'mall/shop','arg0'=>$_smarty_tpl->tpl_vars['item']->value['shop_id']),$_smarty_tpl);?>
" class="a44">查看详情</a>
                                    </p>
                                </div>
                            </li>
                            <?php } ?>
                        </ul>
                        <div class="h20 cl"></div>
                    </div>
                </div>
                <div class="page"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</div>
                <div class="h20"></div>
                <!-- //商品展示结束 -->
            </div>
        </div>
        <!-- //右面结束 -->
    </div>           
    <div class="h30"></div>             
</div>
<!-- //主题部分结束 -->
<?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>