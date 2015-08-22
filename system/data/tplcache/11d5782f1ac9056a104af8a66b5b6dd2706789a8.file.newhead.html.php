<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:31:17
         compiled from "/www/wwwroot/www.fzgxw.com/themes/new_green/block/newhead.html" */ ?>
<?php /*%%SmartyHeaderCode:38748158455d7ed05907bb9-42716786%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11d5782f1ac9056a104af8a66b5b6dd2706789a8' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/new_green/block/newhead.html',
      1 => 1440138033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38748158455d7ed05907bb9-42716786',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'seo_sub_title' => 0,
    'SEO' => 0,
    'seo_title' => 0,
    'CONFIG' => 0,
    'seo_keywords' => 0,
    'seo_description' => 0,
    'pager' => 0,
    'request' => 0,
    'MEMBER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ed05b05f59_44442646',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ed05b05f59_44442646')) {function content_55d7ed05b05f59_44442646($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['seo_sub_title']->value;?>
<?php if ($_smarty_tpl->tpl_vars['SEO']->value['title']){?><?php echo $_smarty_tpl->tpl_vars['SEO']->value['title'];?>
<?php }elseif($_smarty_tpl->tpl_vars['seo_title']->value){?><?php echo $_smarty_tpl->tpl_vars['seo_title']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
<?php }?></title>
<meta name="robots" content="index, follow" />
<meta name="keywords" content="<?php if ($_smarty_tpl->tpl_vars['seo_keywords']->value){?><?php echo $_smarty_tpl->tpl_vars['seo_keywords']->value;?>
<?php }elseif($_smarty_tpl->tpl_vars['SEO']->value['keywords']){?><?php echo $_smarty_tpl->tpl_vars['SEO']->value['keywords'];?>
<?php }?>" />
<meta name="description" content="<?php if ($_smarty_tpl->tpl_vars['seo_description']->value){?><?php echo $_smarty_tpl->tpl_vars['seo_description']->value;?>
<?php }elseif($_smarty_tpl->tpl_vars['SEO']->value['description']){?><?php echo $_smarty_tpl->tpl_vars['SEO']->value['description'];?>
<?php }?>" />
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/style/append.css?20140109"/> 
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/ui/j.ui.css" type="text/css" />
<script type="text/javascript">window.URL={"domain":"<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['domain'];?>
","url":"<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['siteurl'];?>
", "res":"<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
", "img":"<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
","city":"<?php echo $_smarty_tpl->tpl_vars['request']->value['city']['siteurl'];?>
"};</script>
<script type="text/javascript"  src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/kt.j.js"></script>
<script type="text/javascript"  src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/kt.js"></script>
<script type="text/javascript"  src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/ui/j.ui.js"></script>
<script type="text/javascript"  src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/widget.msgbox.js"></script>
    

</head>
<link href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/style/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/style/slideshow.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/style/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/style/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/style/slideshow.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/style/common.js"></script>



<body>
<div id="header">
	<div class="top">
		<div class="row">
			<div class="left">
                             <?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['uname']){?>
				  <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['uname'];?>
！您好</a> <a href="<?php echo smarty_function_link(array('ctl'=>'passport:loginout'),$_smarty_tpl);?>
">退出</a>
            <?php }else{ ?>
        <a href="<?php echo smarty_function_link(array('ctl'=>'passport'),$_smarty_tpl);?>
">登录</a><a href="<?php echo smarty_function_link(array('ctl'=>'passport-signup'),$_smarty_tpl);?>
" >注册</a> 
            <?php }?>
				<a href="/mobile" class="iphone">手机版</a>
			</div>
			<div class="right">
                           <!-- <a><span style="CURSOR: hand" onClick="window.external.addFavorite('http://www.ejia.cc','网址')" title="网址">分享本站</span></a>
                            <div class="bdsharebuttonbox" style="width:140px;height:40px;float:left;padding-top:8px"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone"></a><a href="#" class="bds_tsina" data-cmd="tsina"></a><a href="#" class="bds_tqq" data-cmd="tqq"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq",],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","t163"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=86835285.js?cdnversion='+~(-new Date()/36e5)];</script>
				--><ul>
					<ol>|</ol>
					<li>关注我们：</li>
                                  
					<li><a href=""><i class="fa fa-weibo"></i></a></li>
					<li><a href=""><i class="fa fa-weixin"></i></a></li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="logo">
		<div class="left">
			<img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/images/logo.jpg" />
		</div>
		<div class="left city">
			<span><i class="fa fa-map-marker"></i><?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
</span>
                        <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['site']['multi_city']){?>
                        <a href="<?php echo smarty_function_link(array('ctl'=>'city'),$_smarty_tpl);?>
">【-切换城市-】</a>
                         <?php }?>
		</div>
		<div class="right">
			<!--<h2><i class="fa fa-phone-square"></i>咨询热线: <font color="#ca0e05"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['phone'];?>
</font></h2>-->
                       <h2>咨询热线: <font style="color:red"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['phone'];?>
</font></h2>
			<img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/images/super.jpg" />
		</div>
		<div class="clear"></div>
	</div>
	<div class="nav">
		<div class="menu">
			<ul>
				<li class="menu_main" class="one"><a class="current" href="/">首页</a></li>
				<li class="menu_main"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/images/host.png" /><a href="<?php echo smarty_function_link(array('ctl'=>'tenders-index2'),$_smarty_tpl);?>
">设计/报价</a></li>
				<li class="menu_main"><a href="<?php echo smarty_function_link(array('ctl'=>'case'),$_smarty_tpl);?>
">效果图</a></li>
				<li class="menu_main"><a href="<?php echo smarty_function_link(array('ctl'=>'gs:items'),$_smarty_tpl);?>
">装修公司</a>
                                  <ul class="menu_son none" style="width:100%;display:none;position: absolute;z-index: 5;background-color: #00AD28">
                            
                         		<li><a  style="padding-left:19px" title="<?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
设计师" href="<?php echo smarty_function_link(array('ctl'=>'designer'),$_smarty_tpl);?>
">找设计师</a></li>
                         		<li><a  style="padding-left:19px" title="<?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
装修公司打折信息" href="<?php echo smarty_function_link(array('ctl'=>'gs:youhui'),$_smarty_tpl);?>
">优惠信息</a></li> 
                                   </ul>
                                </li>
				<li class="menu_main"><a href="<?php echo smarty_function_link(array('ctl'=>'home:items'),$_smarty_tpl);?>
">我搜我家</a>
                                    <ul class="menu_son none" style="position:absolute;display:none;z-index: 5;background-color: #00AD28">
                                        <li><a style="padding-left:19px" href="<?php echo smarty_function_link(array('ctl'=>'site'),$_smarty_tpl);?>
">在建工地 </a></li>   
                                     <li><a  style="padding-left:19px" href="<?php echo smarty_function_link(array('ctl'=>'home:tuan'),$_smarty_tpl);?>
">团装小区</a></li>  
                   	           </ul>
                                </li>
				<li class="menu_main"><a href="<?php echo smarty_function_link(array('ctl'=>'content'),$_smarty_tpl);?>
">学装修</a>
                                <ul class="menu_son none"style="position: absolute;display:none;z-index: 5;background-color: #00AD28">
                                <li><a style="padding:0 12px" href="<?php echo smarty_function_link(array('ctl'=>'content:diary'),$_smarty_tpl);?>
">装修日记</a></li>
                         		<li><a style="padding:0 12px" href="<?php echo smarty_function_link(array('ctl'=>'ask'),$_smarty_tpl);?>
">知识问答</a></li>
                         		<li><a  style="padding:0 12px" href="<?php echo smarty_function_link(array('ctl'=>'content:items'),$_smarty_tpl);?>
">装修课堂</a></li>
                   		   </ul>
                                </li>
				<li class="menu_main"><a href="<?php echo smarty_function_link(array('ctl'=>'mall/index'),$_smarty_tpl);?>
">家居商城</a></li>
				<li><a href="<?php echo smarty_function_link(array('ctl'=>'yun'),$_smarty_tpl);?>
">云装修</a></li>
			</ul>
                    <script type="text/javascript">(function(K, $){
                     //   $(".menu_son").find(li).css("height","50px");
                      $(".menu_main").mouseover(function(){$(this).find("ul").show();}).mouseout(function(){$(this).find("ul").hide();});                     
                     })(window.KT, window.jQuery);</script>
			<div class="from">
				<form name="from" id="top-search" method="get" action="<?php echo smarty_function_link(array('ctl'=>'home:items'),$_smarty_tpl);?>
">
                                            
					<div id="divselect" class="select" style="height:28px;width:60px">
                                           
                                      <select id ="search-name" name="name" style="height:28px;width:60px">
                                         
                                 <option value="<?php echo smarty_function_link(array('ctl'=>'home:items'),$_smarty_tpl);?>
" selected="selected">小区</option>              
                                  <option value="<?php echo smarty_function_link(array('ctl'=>'gs:items'),$_smarty_tpl);?>
">公司</option>
                                     </select>  
     
						<!--<cite>小区</cite>
						<ul>
							<li><a href="javascript:;" selectid="小区">小区</a></li>
							<li><a href="javascript:;" selectid="物业">物业</a></li>
							<li><a href="javascript:;" selectid="楼盘">楼盘</a></li>
						</ul>-->
					</div>
					
                                        <input type="text" id='search_header' name="s" value="" class="input" style="height:25px;margin-left:60px" />
					<input type="submit" class="submit"  value="小区搜索" style="height:27px" />
				</form>
			</div>
                    <script>
              /*  $(document).ready(function() {
                    $("#search_header").focus(function() {
                        if ($(this).val() == '请输入您要查询的小区名称') {
                            $(this).val('');
                            
                        }
                    }).focusout(function() {
                        if ($(this).val() == '') {
                            $(this).val('请输入您要查询的小区名称');
                        }
                    });
                              
              })    */      
            </script>
            <script type="text/javascript">
 $(document).ready(function(){
            $("#search-name").change(function(){                                 
                $("#top-search").attr("action",$(this).val());
                
                 $(".submit").attr("value",$(this).find(":selected").text()+"搜索");
               
               
            });
     })
            </script>
                    
                    
		</div>
	</div>
</div><?php }} ?>