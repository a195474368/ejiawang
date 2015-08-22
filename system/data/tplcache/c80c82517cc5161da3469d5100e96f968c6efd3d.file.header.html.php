<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:19:07
         compiled from "/www/wwwroot/www.fzgxw.com/themes/cheerful/block/header.html" */ ?>
<?php /*%%SmartyHeaderCode:112007659955d7ea2b2af017-61607957%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c80c82517cc5161da3469d5100e96f968c6efd3d' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/cheerful/block/header.html',
      1 => 1440042601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112007659955d7ea2b2af017-61607957',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'request' => 0,
    'CONFIG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea2b446346_56836762',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea2b446346_56836762')) {function content_55d7ea2b446346_56836762($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><!DOCTYPE html>
<html>

<?php echo $_smarty_tpl->getSubTemplate ("block/sheader.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<body>
    <style>
        /* 底部开始 */
#footer{ width:100%; border-top:2px solid #E6E9EE; background-color:#F6F7FB;}
.footer{ width:1200px; margin:0 auto; height:230px;}
.footer-logo{ position:relative; width:460px;}
.footer-logo img{ position:absolute; left:100px; top:35px;}
.copy{ width:680px; margin-top:20px;}
.copy a{ color:#666;}
.copy ul{ margin-bottom:10px;}
.copy li{ float:left; line-height:30px; margin-right:30px; font-size:16px;}
.copy p{ line-height:30px; font-size:13px;}
.copy img{ margin-top:10px;}
/* 底部结束 */
    </style>
<iframe id="miniframe" name="miniframe" style="display:none;"></iframe>
<div id="wrap">
    <?php echo $_smarty_tpl->getSubTemplate ("block/top-header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <!--top end-->
    <div class="w1000 hauto mt5" style="margin-top: 15px">
        <div class="logo lt hauto cheerful_logo" id="jq_city_change">
            <h1><a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/cheerful_green/static/images/index_logo.jpg" width="319" height="60" /></a></h1>
            <div class="city" style="margin-top: 50px;font-size: 15px;margin-left: 50px;font-weight: normal">
                <b style="font-weight: normal;font-size: 15px;color: #111;"><?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
</b>
                <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['site']['multi_city']){?>
                <site><a href="<?php echo smarty_function_link(array('ctl'=>'city'),$_smarty_tpl);?>
" id="jq_city_header_change" style="color: #666;">【-切换城市-】</a></site>
                <?php }?>
                
            </div>         
        </div>
        <!--logo end-->
        <!-- 搜索框-->
		<div class="you_se" >
                    <div class="tel_400" style="text-align:right;padding-right: 10px;margin-top:5px;"><a style="font-size: 18px">咨询热线:</a><span>&nbsp;<b style="font-weight: 400;color:red"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['phone'];?>
</b></span></div>
                <div class="search rt" style="height:30px;margin-left:220px;;margin-top:5px;text-align: right">
		<img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/images/super.jpg" />
        </div>    
		</div>
    </div>
    <!-- //搜索框--> 
    <div classs="cl"></div>
    <!-- 主导航 -->
    <div class="style2_main_menu mt20">
        <div class="style2_main_menu_t" style="height:46px">
     			
                <div class="style2_main_menu_r lt" >
                	<ul class="menu_ul">
                    	<li class="menu_main">
                        	<a class="menu_main_a <?php if ($_smarty_tpl->tpl_vars['request']->value['ctl']=='index'){?>current9<?php }?>" href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
">首页 </a>
                        </li>
                    	<li class="menu_main">
                            <img  style="position:absolute;top:-20px;right:2px"src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/images/host.png" />
                        	<sup></sup><a title='我要装修'  class="menu_main_a <?php if ($_smarty_tpl->tpl_vars['request']->value['ctl']=='tenders'){?>current9<?php }?>" href="<?php echo smarty_function_link(array('ctl'=>'tenders'),$_smarty_tpl);?>
">设计/报价</a>
                        </li>
                         <li class="menu_main">
                        	<a class="menu_main_a <?php if ($_smarty_tpl->tpl_vars['request']->value['ctl']=='case'){?>current9<?php }?>" href="<?php echo smarty_function_link(array('ctl'=>'case'),$_smarty_tpl);?>
">效果图</a>
                        </li>
                    	<li class="menu_main">
                        	 <a class="menu_main_a <?php if ($_smarty_tpl->tpl_vars['request']->value['ctl']=='gs'||$_smarty_tpl->tpl_vars['request']->value['ctl']=='designer'){?>current9<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
装修公司" href="<?php echo smarty_function_link(array('ctl'=>'gs:items'),$_smarty_tpl);?>
">装修公司</a>
                            <ul class="menu_son none">
                            
                         		<li><a  title="<?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
设计师" href="<?php echo smarty_function_link(array('ctl'=>'designer'),$_smarty_tpl);?>
">找设计师</a></li>
                         		<li><a title="<?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
装修公司打折信息" href="<?php echo smarty_function_link(array('ctl'=>'gs:youhui'),$_smarty_tpl);?>
">优惠信息</a></li> 
                            </ul>
                        </li>
                    	<li class="menu_main">
                        	<sup class="p2"></sup> <a title="<?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
小区装修" class="menu_main_a <?php if ($_smarty_tpl->tpl_vars['request']->value['ctl']=='home'||$_smarty_tpl->tpl_vars['request']->value['ctl']=='site'){?>current9<?php }?>" href="<?php echo smarty_function_link(array('ctl'=>'home:items'),$_smarty_tpl);?>
">我搜我家</a>
                             <ul class="menu_son none">
                                
                            
                                <li><a href="<?php echo smarty_function_link(array('ctl'=>'site'),$_smarty_tpl);?>
">在建工地 </a></li>   
                                <li><a href="<?php echo smarty_function_link(array('ctl'=>'home:tuan'),$_smarty_tpl);?>
">团装小区</a></li>  
                   			</ul>
                        </li>
                       
                        <li class="menu_main">
                        	 <a class="menu_main_a <?php if ($_smarty_tpl->tpl_vars['request']->value['ctl']=='content'||$_smarty_tpl->tpl_vars['request']->value['ctl']=='ask'){?>current9<?php }?>" title="学装修" href="<?php echo smarty_function_link(array('ctl'=>'content'),$_smarty_tpl);?>
">学装修</a>
                            <ul class="menu_son none">
                                <li><a href="<?php echo smarty_function_link(array('ctl'=>'content:diary'),$_smarty_tpl);?>
">装修日记</a></li>
                         		<li><a  href="<?php echo smarty_function_link(array('ctl'=>'ask'),$_smarty_tpl);?>
">知识问答</a></li>
                         		<li><a  href="<?php echo smarty_function_link(array('ctl'=>'content:items'),$_smarty_tpl);?>
">装修课堂</a></li>
                   		   </ul>
                        </li>
                           
                         <li class="menu_main">
                        	<a class="menu_main_a" href="<?php echo smarty_function_link(array('ctl'=>'mall/index'),$_smarty_tpl);?>
">家居商城</a>
                        </li>
                                             
                        <li class="menu_main" style="width:80px">
                        	<a  style="width:75px"class="menu_main_a" href="<?php echo smarty_function_link(array('ctl'=>'yun'),$_smarty_tpl);?>
">云装修</a>
                        </li>
                     
                       
                    </ul>
                
                <div class="cl h10"></div>
          
            <form  id="top-search" method="get" action="<?php echo smarty_function_link(array('ctl'=>'home:items'),$_smarty_tpl);?>
" >
                <div class="topso" style="color:#666;">
                    <select id ="search-name" name="name" style="width:60px;height:28px;font-weight: normal;margin-top:5px" >
                   
                        <option  value="<?php echo smarty_function_link(array('ctl'=>'home:items'),$_smarty_tpl);?>
" selected="selected">小区</option> 
                       
                     <option value="<?php echo smarty_function_link(array('ctl'=>'gs:items'),$_smarty_tpl);?>
">公司</option>
                    </select>                  
                    <input id='search_header' type="text" name="s" value="" class="sokw" style="width:220px;margin-left:0px;padding:0"/>
                    <input type="submit" name="submit" class="sobtn" value="小区搜索" style="line-height:3px;width:80px;height:26px;margin-top:6px;padding-bottom:px;color: white;border: 1px solid #ECECEC;border-radius: 0px 5px 5px 0px;"/></div></form>    
                    
                   
                    
            <script type="text/javascript">
                  $(document).ready(function(){
            $("#search-name").change(function(){                                 
                $("#top-search").attr("action",$(this).val());
                
                 $(".sobtn").attr("value",$(this).find(":selected").text()+"搜索");
               
               
            });
     })
            </script>
                    
            <script type="text/javascript">
    // 和上面效果一样
    // (function(K, $) {
         //   $("#search-name").change(function(){                                 
        ///        $("#top-search").attr("action",$(this).val())                                     
          //  })
    // })(window.KT, window.jQuery);
            </script>
          
                
                </div>
            </div>       
      </div>
<div class="cl"></div>
<div class="top_all_bg">
 <?php if ($_smarty_tpl->tpl_vars['request']->value['ctl']!='index'){?>

 <?php }?>   
<script type="text/javascript">(function(K, $){$(".menu_main").mouseover(function(){$(this).find("ul").show();}).mouseout(function(){$(this).find("ul").hide();});})(window.KT, window.jQuery);</script>
<!-- //主导航 -->
<link rel="stylesheet" type="text/css" href="/statics/lrtk_1.css">

<div id="goTopBtn" style="display: block;">

        <a style="background-position: 0px 0px;" y="0" href="/tenders.html" target="_blank"></a>

       

       <a target="_blank" y="70" style="background-position: -70px -70px;" href="tencent://message/?uin=1400616003"></a>

        <a y="140" style="background-position: 0px -140px;" href="#"></a>

    </div><?php }} ?>