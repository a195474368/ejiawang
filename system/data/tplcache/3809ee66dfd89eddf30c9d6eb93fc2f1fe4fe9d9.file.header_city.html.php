<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:31:10
         compiled from "/www/wwwroot/www.fzgxw.com/themes/new_green/block/header_city.html" */ ?>
<?php /*%%SmartyHeaderCode:107846672555d7ecfe54bef9-29908902%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3809ee66dfd89eddf30c9d6eb93fc2f1fe4fe9d9' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/new_green/block/header_city.html',
      1 => 1440138032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107846672555d7ecfe54bef9-29908902',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'CONFIG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ecfe58ea48_52097689',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ecfe58ea48_52097689')) {function content_55d7ecfe58ea48_52097689($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><!DOCTYPE html>
<html>

<?php echo $_smarty_tpl->getSubTemplate ("block/sheader.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
<body>
<iframe id="miniframe" name="miniframe" style="display:none;"></iframe>
<div id="wrap">
    <?php echo $_smarty_tpl->getSubTemplate ("block/top-header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <!--top end-->
    <div class="w1000 hauto mt5">
        <div class="logo lt hauto cheerful_logo" id="jq_city_change">
            <h1><a href="\"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/cheerful_green/static/images/index_logo_city.jpg" width="319" height="60" /></a></h1>
            <div class="city">
                <b>全国站</b>
                <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['site']['multi_city']){?>
                <site><a href="<?php echo smarty_function_link(array('ctl'=>'city'),$_smarty_tpl);?>
" id="jq_city_header_change">[&nbsp;切换城市&nbsp;]</a></site>
                <?php }?>
                
            </div>         
        </div>
        <!--logo end-->
        <!-- 搜索框-->
		<div class="you_se">
		<div class="tel_400"><a>咨询热线:</a><span>&nbsp;<b><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['phone'];?>
</b></span></div>
        <div class="search lt">
		<img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/cheerful_green/static/images/super.jpg"  />
        </div>    
		</div>
    </div>
    <!-- //搜索框--> 
    <div classs="cl"></div>
    <!-- 主导航 -->
    
<div class="cl"></div>
<div class="top_all_bg">

<script type="text/javascript">(function(K, $){$(".menu_main").mouseover(function(){$(this).find("ul").show();}).mouseout(function(){$(this).find("ul").hide();});})(window.KT, window.jQuery);</script>
<!-- //主导航 -->


<?php }} ?>