<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:26:35
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/block/header.html" */ ?>
<?php /*%%SmartyHeaderCode:101327285455d7ebeb78e786-81847528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a10422c70b6de529c8c56326ba6426f9fef7cf7' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/block/header.html',
      1 => 1440051495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101327285455d7ebeb78e786-81847528',
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
  'unifunc' => 'content_55d7ebeb9f5ee4_45835678',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ebeb9f5ee4_45835678')) {function content_55d7ebeb9f5ee4_45835678($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><!DOCTYPE html>
<html>
<?php echo $_smarty_tpl->getSubTemplate ("block/sheader.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>
<iframe id="miniframe" name="miniframe" style="display:none;"></iframe>
<div id="wrap">
    <?php echo $_smarty_tpl->getSubTemplate ("block/top-header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <!--top end-->
    <div class="w1000 hauto mt5">
        <div class="logo lt hauto" id="jq_city_change">
            <h1><a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/images/logo.jpg" width="255" height="90" /></a></h1>
            <div class="city">
                <b><?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
</b>
                <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['site']['multi_city']){?>
                <site><a href="<?php echo smarty_function_link(array('ctl'=>'city'),$_smarty_tpl);?>
" id="jq_city_header_change">[&nbsp;切换城市&nbsp;]</a></site>
                <?php }?>
                <p><img src="/themes/default/static/images/logo_p.jpg" /></p>
            </div>         
        </div>
        <!--logo end-->
        <!-- 搜索框-->
        <div class="search lt">
            <p>总计&nbsp;注册业主：<?php echo $_smarty_tpl->tpl_vars['pager']->value['sitecount']['member'];?>
&nbsp;装修公司：<?php echo $_smarty_tpl->tpl_vars['pager']->value['sitecount']['company'];?>
&nbsp;设计师：<?php echo $_smarty_tpl->tpl_vars['pager']->value['sitecount']['designer'];?>
</p><br />
            <form method="get" action="<?php echo smarty_function_link(array('ctl'=>'home:tuan'),$_smarty_tpl);?>
" id="top-search"><div class="topso"><input id='search_header' type="text" name="s" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['pager']->value['s'])===null||$tmp==='' ? '请输入您要查询的小区名称' : $tmp);?>
" class="sokw"/><input type="submit" name="" class="sobtn" value="搜索"/></div></form>
               <script>
                $(document).ready(function() {
                    $("#search_header").focus(function() {
                        if ($(this).val() == '请输入您要查询的小区名称') {
                            $(this).val('');
                        }
                    }).focusout(function() {
                        if ($(this).val() == '') {
                            $(this).val('请输入您要查询的小区名称');
                        }
                    });
                });
            </script>
        </div>    
    </div>
    <!-- //搜索框--> 
    <!-- 主导航 -->
    <div class="menu_bg menured_bg mt5">
        <div class="w1000  menu">
          <ul  class="menu_ul">  
              <li class="menu_main"><a class="menu_main_a <?php if ($_smarty_tpl->tpl_vars['request']->value['ctl']=='index'){?>current9<?php }?>" href="\">首页 </a></li>       
                <li class="menu_main"><a title='我要装修'  class="menu_main_a <?php if ($_smarty_tpl->tpl_vars['request']->value['ctl']=='tenders'){?>current9<?php }?>" href="<?php echo smarty_function_link(array('ctl'=>'tenders'),$_smarty_tpl);?>
">我要装修</a></li>
                   <li class="menu_main">
                    <a class="menu_main_a <?php if ($_smarty_tpl->tpl_vars['request']->value['ctl']=='gs'||$_smarty_tpl->tpl_vars['request']->value['ctl']=='designer'||$_smarty_tpl->tpl_vars['request']->value['ctl']=='mechanic'){?>current9<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
装修公司" href="<?php echo smarty_function_link(array('ctl'=>'gs'),$_smarty_tpl);?>
">找装修公司</a>
                     <ul class="menu_son none">
                         <li><a title="<?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
装修公司排名" href="<?php echo smarty_function_link(array('ctl'=>'gs:items'),$_smarty_tpl);?>
">找装修公司</a></li>     
                         <li><a  title="<?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
设计师" href="<?php echo smarty_function_link(array('ctl'=>'designer'),$_smarty_tpl);?>
">找设计师</a></li>
                         <li><a  title="<?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
找工人" href="<?php echo smarty_function_link(array('ctl'=>'mechanic'),$_smarty_tpl);?>
">找工人</a></li>
                         <li><a title="<?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
装修公司打折信息" href="<?php echo smarty_function_link(array('ctl'=>'gs:youhui'),$_smarty_tpl);?>
">优惠信息</a></li> 
                        
                    </ul>
                </li>   
           
                <li class="menu_main">
                    <a title="<?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
小区装修" class="menu_main_a <?php if ($_smarty_tpl->tpl_vars['request']->value['ctl']=='home'||$_smarty_tpl->tpl_vars['request']->value['ctl']=='site'){?>current9<?php }?>" href="<?php echo smarty_function_link(array('ctl'=>'home'),$_smarty_tpl);?>
">我搜我家</a>
                    <ul class="menu_son none">
                        <li><a title="小区楼盘" href="<?php echo smarty_function_link(array('ctl'=>'home:items'),$_smarty_tpl);?>
">小区楼盘</a></li>
                        <li><a href="<?php echo smarty_function_link(array('ctl'=>'home:maps'),$_smarty_tpl);?>
">楼盘地图</a></li>
                        <li><a href="<?php echo smarty_function_link(array('ctl'=>'site'),$_smarty_tpl);?>
">在建工地 </a></li>   
                        <li><a href="<?php echo smarty_function_link(array('ctl'=>'home:tuan'),$_smarty_tpl);?>
">团装小区</a></li>   
                    </ul>
                </li>
              
                <li class="menu_main"><a class="menu_main_a <?php if ($_smarty_tpl->tpl_vars['request']->value['ctl']=='case'){?>current9<?php }?>" href="<?php echo smarty_function_link(array('ctl'=>'case'),$_smarty_tpl);?>
">效果图</a></li>
                <li class="menu_main">
                    <a class="menu_main_a <?php if ($_smarty_tpl->tpl_vars['request']->value['ctl']=='content'||$_smarty_tpl->tpl_vars['request']->value['ctl']=='ask'){?>current9<?php }?>"" title="学装修" href="<?php echo smarty_function_link(array('ctl'=>'content'),$_smarty_tpl);?>
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
                <li class="menu_main"><a class="menu_main_a <?php if ($_smarty_tpl->tpl_vars['request']->value['ctl']=='activity'){?>current9<?php }?>" href="<?php echo smarty_function_link(array('ctl'=>'activity'),$_smarty_tpl);?>
">活动</a></li>
                <li class="menu_main"><a class="menu_main_a" href="<?php echo smarty_function_link(array('ctl'=>'mall/index'),$_smarty_tpl);?>
">家居商城</a>
                 <ul class="menu_son none">
                         <li><a href="<?php echo smarty_function_link(array('ctl'=>'mall/index'),$_smarty_tpl);?>
">商城主页</a></li>
                         <li><a  href="<?php echo smarty_function_link(array('ctl'=>'mall/product:shop'),$_smarty_tpl);?>
">商家列表</a></li>
                </ul>
                </li>     
            </ul> 
        </div>
    </div>
<script type="text/javascript">(function(K, $){$(".menu_main").mouseover(function(){$(this).find("ul").show();}).mouseout(function(){$(this).find("ul").hide();});})(window.KT, window.jQuery);</script>
<!-- //主导航 --><?php }} ?>