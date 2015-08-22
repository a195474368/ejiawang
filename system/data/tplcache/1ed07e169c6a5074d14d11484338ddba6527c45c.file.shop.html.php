<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 13:47:40
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/mall/product/shop.html" */ ?>
<?php /*%%SmartyHeaderCode:127490685355d80cfcb27769-78172654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ed07e169c6a5074d14d11484338ddba6527c45c' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/mall/product/shop.html',
      1 => 1402664332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127490685355d80cfcb27769-78172654',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cate_list' => 0,
    'v' => 0,
    'pager' => 0,
    'items' => 0,
    'shop' => 0,
    'member_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d80cfcd3dc87_47643257',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d80cfcd3dc87_47643257')) {function content_55d80cfcd3dc87_47643257($_smarty_tpl) {?><?php if (!is_callable('smarty_function_widget')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.widget.php';
if (!is_callable('smarty_block_calldata')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/block.calldata.php';
if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_format')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="/themes/default/static/style/mallstyle.css"/>
<link rel="stylesheet" type="text/css" href="/themes/default/static/style/base.css"/>
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
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"product/product",'order'=>"hot",'limit'=>"5")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"product/product",'order'=>"hot",'limit'=>"5"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

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
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"product/product",'order'=>"hot",'limit'=>"5"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
                                
                </ul>
            </div>
            <!-- //左面热卖结束 -->
        </div>  
        <!-- //左面结束 -->  
        <!-- 右面开始   -->  
        <div class="mall_list_r lt ml10">            
            <div class="mall_list_r_b bgwhite mt15">
            <style type="text/css">.mall_list_r_b_title a.on{background:#E63337;color:#FFF;}</style>
            <div class="mall_list_r_b_title">
                <h2 class="h10"></h2>
                <p><label>分类：</label>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cate_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                    <?php if (empty($_smarty_tpl->tpl_vars['v']->value['parent_id'])){?>
                    <a href="<?php echo smarty_function_link(array('ctl'=>'mall/product:shop','arg0'=>$_smarty_tpl->tpl_vars['v']->value['cat_id']),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['cat_id']==$_smarty_tpl->tpl_vars['pager']->value['cat_id']){?>class="on"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
                    <?php }?>
                    <?php } ?>
                </p>
            </div>


                <div class="mall_list_shunxu">
                	<span class="span92 rt">共<i><?php echo $_smarty_tpl->tpl_vars['pager']->value['count'];?>
个</i>商铺</span>
                    <ul class="ul2 rt">
                        <li class="li0"><a href="<?php echo smarty_function_link(array('ctl'=>'mall/product','arg0'=>$_smarty_tpl->tpl_vars['pager']->value['cat_id']),$_smarty_tpl);?>
"><span></span><i class="i1">商品</i></a></li>
                        <li class="li1"><span></span><i class="i1 red">商铺</i></li>
                    </ul>
                    
                </div>
                <!--商铺展示开始-->
                <div class="shangpu changeshangpu_2">
                    <ul>
                        <?php  $_smarty_tpl->tpl_vars['shop'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shop']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shop']->key => $_smarty_tpl->tpl_vars['shop']->value){
$_smarty_tpl->tpl_vars['shop']->_loop = true;
?>
                        <li>
                            <div class="shangpu_all hauto">
                                <div class="shangpu_l lt">
                                    <a href="<?php echo smarty_function_link(array('ctl'=>'mall/shop','arg0'=>$_smarty_tpl->tpl_vars['shop']->value['shop_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['shop']->value['logo'];?>
" width="140" height="60"/></a>
                                    <p>所在地区：<?php echo $_smarty_tpl->tpl_vars['shop']->value['city_name'];?>
 - <?php echo $_smarty_tpl->tpl_vars['shop']->value['area_name'];?>
</p>
                                    <p>入驻时间：<?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['shop']->value['dateline'],"Y-m-d");?>
</p>
                                </div>
                                <div class="shangpu_c lt">
                                    <p><a href="<?php echo smarty_function_link(array('ctl'=>'mall/shop','arg0'=>$_smarty_tpl->tpl_vars['shop']->value['shop_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['shop']->value['title'];?>
</a><?php if ($_smarty_tpl->tpl_vars['member_list']->value[$_smarty_tpl->tpl_vars['shop']->value['uid']]['verify_name']){?><i class="rt">[已认证]</i><?php }?></p>
                                    <p>
                                        <i>评价&nbsp;：&nbsp;</i>
                                        <span><?php if ($_smarty_tpl->tpl_vars['shop']->value['comments']){?><?php echo round($_smarty_tpl->tpl_vars['shop']->value['score']/$_smarty_tpl->tpl_vars['shop']->value['comments'],2);?>
<?php }else{ ?>3.0<?php }?></span>
                                        <span><b score="score" data-score="<?php if ($_smarty_tpl->tpl_vars['shop']->value['comments']){?><?php echo round($_smarty_tpl->tpl_vars['shop']->value['score']/$_smarty_tpl->tpl_vars['shop']->value['comments'],2);?>
<?php }else{ ?>3<?php }?>"></b></span>
                                    </p>
                                    <p>浏览&nbsp;:&nbsp;<i><?php echo $_smarty_tpl->tpl_vars['shop']->value['views'];?>
</i></p>
                                    <p>共有商品&nbsp;：&nbsp;<?php echo $_smarty_tpl->tpl_vars['shop']->value['products'];?>
件</p>
                                    <p class="join_in_shop"><a href="<?php echo smarty_function_link(array('ctl'=>'mall/shop','arg0'=>$_smarty_tpl->tpl_vars['shop']->value['shop_id']),$_smarty_tpl);?>
">进入店铺</a></p>
                                </div>
                                <div class="shangpu_r lt">
                                    <ul>
                                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>'product/product','shop_id'=>$_smarty_tpl->tpl_vars['shop']->value['shop_id'],'order'=>"hot",'limit'=>"2")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>'product/product','shop_id'=>$_smarty_tpl->tpl_vars['shop']->value['shop_id'],'order'=>"hot",'limit'=>"2"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                        <li>
                                            <a href="<{link ctl='mall/product:detail' arg0=$item.product_id}>" target="_blank" title="<{$item.title}>"><img src="<{$pager.img}>/<{$item.photo}>_thumb.jpg" width="100" height="75"/></a>
                                            <p><a href="<{link ctl='mall/product:detail' arg0=$item.product_id}>" target="_blank" title="<{$item.title}>"><{$item.title}></a></p>
                                            <p>抢购价&nbsp;：&nbsp;<i>￥<{$item.price}></i></p>
                                        </li>
                                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>'product/product','shop_id'=>$_smarty_tpl->tpl_vars['shop']->value['shop_id'],'order'=>"hot",'limit'=>"2"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                    </ul>
                                </div>
                                <div class="cl"></div>
                                <div class="h20"></div>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="h20"></div>
                <div class="page"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</div>
                <!--商铺展示结束-->
            </div>
        </div>
        <!-- //右面结束 -->
    </div>           
    <div class="h30"></div>             
</div>
<!-- //主题部分结束 -->
<script type="text/javascript">
(function(K, $){
    $('b[score]').each(function(){$(this).raty({numberMax:5,readOnly: true,hints: ["差","还行","好","很好","非常好"],path:"<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/raty/img/",score: function() {return $(this).attr('data-score');}})});
})(window.KT, window.jQuery);
</script>
<?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>