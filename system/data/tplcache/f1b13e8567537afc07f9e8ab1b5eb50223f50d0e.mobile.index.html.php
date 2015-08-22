<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:19:28
         compiled from "mobile:index.html" */ ?>
<?php /*%%SmartyHeaderCode:79482383555d7ea40985f69-02107136%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1b13e8567537afc07f9e8ab1b5eb50223f50d0e' => 
    array (
      0 => 'mobile:index.html',
      1 => 1429196804,
      2 => 'mobile',
    ),
  ),
  'nocache_hash' => '79482383555d7ea40985f69-02107136',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea40abe221_41751248',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea40abe221_41751248')) {function content_55d7ea40abe221_41751248($_smarty_tpl) {?><?php if (!is_callable('smarty_block_AD')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/block.AD.php';
if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?>﻿<?php echo $_smarty_tpl->getSubTemplate ('mobile:block/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--头部开始-->
	<div class="mobile_top">
   
        <div class="mobile_top_son">
            <div class="detail-second"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
<sub>&nbsp;&nbsp;你的贴心装修管家</sub></div>
        </div>
    </div>

<!--头部结束-->
<!--banner开始-->
	<!--<div class="mobile_banner">
    	<a href="###"><img src="pic/banner.png" width="320" height="150"/></a>
    </div>-->
    <div class="cl h45"></div>
    <div class="business_banner">
    	  <div class="banner">
                <div class="inner" style="width: 900px;">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('AD', array('name'=>"手机首页轮转广告",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"5")); $_block_repeat=true; echo smarty_block_AD(array('name'=>"手机首页轮转广告",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"5"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<a href="<{$item.link}>"><img src="<{$pager.img}>/<{$item.thumb}>"/></a><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_AD(array('name'=>"手机首页轮转广告",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"5"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
            </div>
            <div class="pointer" id="pointer">
              <?php $_smarty_tpl->smarty->_tag_stack[] = array('AD', array('name'=>"手机首页轮转广告",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"5")); $_block_repeat=true; echo smarty_block_AD(array('name'=>"手机首页轮转广告",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"5"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
  <span class="color"></span><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_AD(array('name'=>"手机首页轮转广告",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"5"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
        <!--轮转效果-->
    </div>
    <script type="text/javascript" src="script/flipsnap.min.js"></script>
<script type="text/javascript">
    var $pointer = $('.pointer span');
    var flipsnap = Flipsnap('.inner', { distance: 320 });
    flipsnap.element.addEventListener('fsmoveend', function () {
        $pointer.filter('.color').removeClass('color');
        $pointer.eq(flipsnap.currentPoint).addClass('color');
    }, false);
    if ($("#flipsnap_img1").size() > 0) {
        var mp = $("#flipsnap_img1 a").size() - 2;
        if (mp > 0) {
            Flipsnap('#flipsnap_img1', { distance: 150, maxPoint: mp });
        }
    }
    if ($("#flipsnap_img2").size() > 0) {
        var mp = $("#flipsnap_img2 a").size() - 2;
        if (mp > 0) {
            Flipsnap('#flipsnap_img2', { distance: 150, maxPoint: mp });
        }
    }
</script>
<!--banner结束-->
<!--主题部分开始-->
	<div class="mobile_main hauto">
        <div class="mobile_span-btn lt">
        	<a href="<?php echo smarty_function_link(array('ctl'=>'tenders'),$_smarty_tpl);?>
">
            	<span class="ico span9"></span>
                <i>免费报价</i>
            </a>
        </div>
        <div class="mobile_span-btn lt ml2">
        	<a  href="<?php echo smarty_function_link(array('ctl'=>'tenders'),$_smarty_tpl);?>
">
            	<span class="ico span4"></span>
                <i>免费设计</i>
            </a>
        </div>
        <div class="mobile_span-btn lt">
        	<a href="<?php echo smarty_function_link(array('ctl'=>'company'),$_smarty_tpl);?>
">
            	<span class="ico span6"></span>
                <i>找公司</i>
            </a>
        </div>
        <div class="mobile_span-btn lt ml2">
        	<a  href="<?php echo smarty_function_link(array('ctl'=>'site'),$_smarty_tpl);?>
">
            	<span class="ico span5"></span>
                <i>看工地</i>
            </a>
        </div>
    	<div class="mobile_span-btn lt">
            <a href="<?php echo smarty_function_link(array('ctl'=>'tuan'),$_smarty_tpl);?>
" class="current1">
            	<span class="ico span1"></span>
                <i>小区团装</i>
            </a>
        </div>
        <div class="mobile_span-btn lt ml2">
        	<a  href="<?php echo smarty_function_link(array('ctl'=>'case'),$_smarty_tpl);?>
">
            	<span class="ico span2"></span>
                <i>装修案例</i>
            </a>
        </div>
        <div class="mobile_span-btn lt">
        	<a  href="<?php echo smarty_function_link(array('ctl'=>'article'),$_smarty_tpl);?>
">
            	<span class="ico span3"></span>
                <i>学装修</i>
            </a>
        </div>
        <div class="mobile_span-btn lt ml2">
            <a href="tel:<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['phone'];?>
">
            	<span class="ico span8"></span>
                <i>装修咨询</i>
            </a>
        </div>
        <div class="mobile_span-btn lt">
        	<a href="<?php echo smarty_function_link(array('ctl'=>'designer'),$_smarty_tpl);?>
">
            	<span class="ico span7"></span>
                <i>设计师</i>
            </a>
        </div>
        <div class="mobile_span-btn lt ml2">
        	<a href="<?php echo smarty_function_link(array('ctl'=>'shop'),$_smarty_tpl);?>
">
            	<span class="ico span10"></span>
                <i>材料商</i>
            </a>
        </div>
        <div class="cl h45"></div>
    </div>
<!--主题部分结束-->

<?php echo $_smarty_tpl->getSubTemplate ('mobile:block/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>