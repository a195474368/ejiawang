<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:19:38
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/zb.html" */ ?>
<?php /*%%SmartyHeaderCode:42837749155d7ea4ada7769-16766938%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c54ccec9445cdeb6fab149a84da9674fd2771584' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/zb.html',
      1 => 1439798537,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42837749155d7ea4ada7769-16766938',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'seo_keywords' => 0,
    'SEO' => 0,
    'seo_description' => 0,
    'pager' => 0,
    'CONFIG' => 0,
    'request' => 0,
    'MEMBER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea4b0bec98_76055817',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea4b0bec98_76055817')) {function content_55d7ea4b0bec98_76055817($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">                
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>装修在线报价_【免费】装修设计-亿家装修网装修平台</title>
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
        <a href="/mobile" class="iphone">手机访问</a>
      </div>
      <div class="right">
                            <a><span style="CURSOR: hand" onClick="window.external.addFavorite('http://www.ejia.cc','网址')" title="网址">分享本站</span></a>
                            <div class="bdsharebuttonbox" style="width:140px;height:40px;float:left;padding-top:8px"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone"></a><a href="#" class="bds_tsina" data-cmd="tsina"></a><a href="#" class="bds_tqq" data-cmd="tqq"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq",],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","t163"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=86835285.js?cdnversion='+~(-new Date()/36e5)];</script>
        <!--<ul>
          <ol>|</ol>
          <li>关注我们：</li>
                                  
          <li><a href=""><i class="fa fa-weibo"></i></a></li>
          <li><a href=""><i class="fa fa-weixin"></i></a></li>
        </ul>-->
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
      <h2><i class="fa fa-phone-square"></i>咨询热线: <font color="#ca0e05"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['phone'];?>
</font><h2>
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
/images/host.png" /><a href="<?php echo smarty_function_link(array('ctl'=>'tenders'),$_smarty_tpl);?>
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
                                            
          <div id="divselect" class="select" style="height:28px">
                                           
                                      <select id ="search-name" name="name" style="height:28px;width:80px">
                                         
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
          <input name="name" type="hidden" value="0" id="dist"/>
          <input type="text" id='search_header' name="s" value="请输入您要查询的小区名称" class="input" />
          <input type="submit" class="submit"  value="搜索" />
        </form>
      </div>
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
                              
              })          
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
</div>
<!-- //主导航 -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="/themes/default/static/style/bootstrap.min.css" rel="stylesheet">
    <!-- 自定义css -->
    <link href="/themes/default/static/style/global.css" rel="stylesheet">
    <script>
       $(function(){
          $(".cd-popupp").css("display","none");
       })
   </script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  <body>
  
   <div class="content">
       <form name="formid" method="post" id="formid"   action="<?php echo smarty_function_link(array('ctl'=>'zb:add','http'=>'empty'),$_smarty_tpl);?>
">
        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
" name="data[cityName]" />
      <div class="tit_ime"></div>
   		<div class="tit">
   			<h1>房屋基础信息</h1>
   			<div class="notice">
          <img src="/themes/default/static/images/notice.gif" width="17" height="16" />
          今天已经有 1024 位业主免费成功获取在线报价</div>
   		</div>
   		<dl>
   			<dt>装修种类</dt>
   			<dd>
   				<label for="new">
   					<input  type="radio"  value="1" checked="checked" name="data[zhonglei]"/>&nbsp;新房装修</label><label for="new">
   					<input  type="radio"  value="2"  name="data[zhonglei]"/>&nbsp;二手房装修</label>			</dd>
   			<dt>房屋面积</dt>
   			<dd>
   				<input type="number" id="area" class="mj" name="data[area]" />平方米
   			</dd>
   			<dt>装修状态</dt>
   			<dd>
   				<label for="new">
   					<input name="data[zhuantai]" type="radio"  value="1" checked="checked" />&nbsp;已交房</label><label for="new">
   					<input name="data[zhuantai]" type="radio"  value="2"  />&nbsp;未交房</label>
   				</select>
   			</dd>
   			<dt>房屋地址</dt>
   			<dd>
   				<select class="sl" name="data[city_pid]" id="province" style="+width:70px;"></select>
   				<select name="data[city_name]" style="width:96px;" id="city"></select>
          <select name="data[area_name]" style="width:96px;" id="district"></select>
          <input name="data[city_name]" value="" type="hidden" id="district_id" />
   				<input type="text" id="community" class="xq" name="data[home_name]" value="小区名">
   			</dd>
   			<dt>房屋户型</dt>
   			<dd>
   				<select name="data[area_space0]"  id="select" class="sl">
   					<option value="家庭装修">家庭装修</option>
            <option value="办公装修">办公装修</option>
            <option value="酒店装修">酒店装修</option>
            <option value="酒吧KTV">酒吧KTV</option>
            <option value="商铺装修">商铺装修</option>
            <option value="旧房改造">旧房改造</option>
            <option value="餐饮装修">餐饮装修</option>				
          </select>
   				<select name="data[area_space1]" id="select" class="sl">
   					<option value="1室">1室</option>
   					<option value="2室">2室</option>
   					<option value="3室">3室</option>
   					<option value="4室">4室</option>
   					<option value="5室">5室</option>
   					<option value="6室">6室</option>
   				</select>
   				<select name="data[area_space2]" id="select" class="sl">
   					<option value="0厅">0厅</option>
   					<option value="1厅" selected="selected">1厅</option>
   					<option value="2厅">2厅</option>
   				</select>
   				<select name="data[area_space3]" id="select" class="sl">
   					<option value="0厨">0厨</option>
   					<option value="1厨" selected="selected">1厨</option>
   				</select>
   				<select name="data[area_space4]" id="select" class="sl">
   					<option value="0卫">0卫</option>
   					<option value="1卫" selected="selected">1卫</option>
   					<option value="2卫">2卫</option>
   					<option value="3卫">3卫</option>
   				</select>
   				<select name="data[area_space5]" id="select" class="sl">
   					<option value="0阳台">0阳台</option>
   					<option value="1阳台" selected="selected">1阳台</option>
   					<option value="2阳台">2阳台</option>
   				</select>
   			</dd>
   			<dt>装修档次</dt>
   			<dd>
   				<label>
   					<input name="data[area_level]"  type="radio" value="简装" checked="checked" />
   					简装				</label><label>
   					<input name="data[area_level]" type="radio" value="精装"  />
   					精装				</label><label>
   					<input name="data[area_level]" type="radio" value="豪华"  />
   					豪华				</label>			</dd>
   			<dt>装修风格</dt>
   			<dd>
   				<label>
   					<input name="data[house_type]"  type="radio" value="简约" checked="checked" />
            简约
            </label>
            <label>
   					<input name="data[house_type]" type="radio" value="现代"  />
   					现代				</label><label>
   					<input name="data[house_type]" type="radio" value="中式"  />
   					中式				</label><label>
   					<input name="data[house_type]" type="radio" value="欧式"  />
   					欧式				</label><label>
   					<input name="data[house_type]" type="radio" value="美式"  />
   					美式				</label><label>
   					<input name="data[house_type]" type="radio" value="田园"  />
   					田园				</label><label>
   					<input name="data[house_type]" type="radio" value="地中海"  />
   					地中海				</label>	
            <label>
            <input name="data[house_type]" type="radio" value="东南亚"  />
            东南亚       </label>		
            <label>
            <input name="data[house_type]" type="radio" value="创意"  />
            创意       </label>  
          </dd>
   		</dl>
   		<div class="btnn">
   			<input type="button" value="免费获取报价" id="submits" />
   		</div>



            <div class="cd-popupp" role="alert" >

              <div class="modal-dialog" role="document">
        <div class="modal-content" style="background:#eef7ff">
          <div class="modal-header">
            <button type="button" class="close closes" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="modal-title" id="exampleModalLabel">请填写你的姓名和电话我们会及时和你联系</h4>
          </div>
          <div class="modal-body">

              <div class="form-group">
                <label for="recipient-name" class="control-label">姓名:</label>
                <input type="text" class="form-control" id="name" name="data[name]">
              </div>
              <div class="form-group">
                <label for="recipient-name" class="control-label" >电话:</label>
                <input type="text" class="form-control" id="tel" name="data[mobile]">
              </div>
              <div class="form-group">
                <label for="recipient-name" class="control-label">验证码:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-primary" id="clicks" tel="">点击获取验证码</button></label>
                <input type="text" class="form-control" id="recipient-name">

              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="last_sumbit">提交</button>
          </div>
        </div>
      </div>
  </form>
  </div>
          <!--   <div class="cd-popup-container">
              <p>请填写你的姓名和电话我们会及时和你联系</p>
              <ul class="cd-buttons">
                <li><label >姓 &nbsp;&nbsp;名:</label>&nbsp;&nbsp;<span><input type="text" name="data[name]" id="name"></span></li>

                <li class="cd_tel"><label >电 &nbsp;&nbsp;话:</label>&nbsp;&nbsp;<span><input type="text" name="data[mobile]" id="tel"></span><b>免费获取验证码</b></li>

                <li><label >验证码:</label>&nbsp;&nbsp;<span><input type="text" name="yanz"></span><b tel="">请输入验证码</b></li>

                <li><label ><input type="button" value="提交" class="last_sumbit" id="last_sumbit"></label></li>
              </ul>
              <a href="#" class="cd-popup-close img-replace"></a>
            </div> 

          </div>



	</form>
   -->
   


   <div class="cd-popup" role="alert">
  <div class="cd-popup-container">
    <p>你确定你要删除这个元素吗?</p>
    <ul class="cd-buttons">
      <li><a href="#" class="cd-popup-closes">返回</a></li>
      
    </ul>
    <a href="#" class="cd-popup-close img-replace"></a>
  </div>  
</div> <!-- cd-popup -->

      



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/themes/default/static/js/jquery-1.9.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/themes/default/static/js/bootstrap.min.js"></script>
    <!-- 自定义js -->
    <script src="/themes/default/static/js/city.js"></script>

    <script> 
        // 省市区调用
        $.address('province','city','district');
        jQuery(document).ready(function($){
            
            //获取焦点时清除输入框内容
            $("#community").focus(function(){
                  $(this).val("");
                  $(this).css("color","#000000");
              })
            
            // 打开弹窗
            // 面积未填写
            //open popup
            $("#submits").click(function(){

              if( $("#area").val()==""){
                   event.preventDefault();
                   $('.cd-popup-container').find("p").text("请填写正确的房屋面积");
                   $('.cd-popup').addClass('is-visible');
              }else if( $("#district").val()==0 ){
                  // 区县未写
                  //open popup
                   event.preventDefault();
                   $('.cd-popup-container').find("p").text("请填写区县");
                   $('.cd-popup').addClass('is-visible');
              }else if( $("#community").val()=="小区名" || $("#community").val()=="" ){
                  // 小区名
                  //open popup
                   event.preventDefault();
                   $('.cd-popup-container').find("p").text("请填写小区名");
                   $('.cd-popup').addClass('is-visible');
              }else{
                //显示提交隐藏框
                $('.cd-popup-container').find("p").text("请填写你的姓名和电话我们会及时和你联系");
                $(".cd-popupp").css({
                    "display":"block",
                    "position":"fixed",
                    "left": "0",
                    "top": "0",
                    "height": "100%",
                    "width": "100%",
                    "background": "rgba(94, 110, 141, 0.9)",
                });


                    // 获取验证码                      
                    $("#clicks").click(function(){ 
                    //获取手机号
                    var mobile =document.getElementById("tel");
                    if(mobile.length==0) 
                       { 
                          alert('请输入手机号码！'); 
                          document.formid.mobile.focus(); 
                          return false; 
                       }     
    
                      var reg = /^1[3|4|5|8|7][0-9]\d{8}$/;
                           if(!reg.test($.trim($('#tel').val())))
                           {
                            alert("手机号码格式不对,请输入11位正确号码！");
                            return false;
                           }


                        $.post("<?php echo smarty_function_link(array('ctl'=>'zb:huqu','http'=>'empty'),$_smarty_tpl);?>
", { mobiles: $("#tel").val() },
                          function(data) {
                              if(data != ""){

                                  //禁用按钮并显示倒计时
                                  $("#clicks").attr("disabled","disabled");
                                   //计时器  
                                   var time=60;
                                  times = setInterval(function(){      
                                      time--;
                                      $("#clicks").text(time+"秒后重新获取验证码");
                                      if( time < 0){
                                        clearInterval(times);
                                        $("#clicks").removeAttr("disabled");
                                        $("#clicks").text("点击获取验证码");
                                      }
                                  }, 1000);

                                  $("#clicks").attr("tel",data);
                              }
                                
                           }, 
                           "text");


                        // //ajax提交开始的时候发送一条信息
                        // $(".cd_tel b").ajaxSend(function(){
                        //   $(this).html("正在发送...");
                        // });

                   })
                    


                //提交按钮
                $("#last_sumbit").click(function(){

                    var reg = /^[\u4E00-\u9FA5]+$/; 
                    if(!reg.test( $("#name").val() )){ 
                    alert("请填写中文名称或正确姓名"); 
                    return false; 
                    } 

                    var mobile =document.getElementById("tel");
                    if(mobile.length==0) 
                       { 
                          alert('请输入手机号码！'); 
                          document.formid.mobile.focus(); 
                          return false; 
                       }     
    
                      var reg = /^1[3|4|5|8|7][0-9]\d{8}$/;
                           if(!reg.test($.trim($('#tel').val())))
                           {
                            alert("手机号码格式不对,请输入11位正确号码！");
                            return false;
                           }

                     // 判断是否有验证码
                     if( $("#recipient-name").val()==""){
                            alert("请填写验证码！");
                            return false;
                     }     


                    //提交前获取城市信息
                    $("#district_id").val( $("#city").val());

                    //获取验证码
                    $tels=$("#recipient-name").val();
                    $tele=$tels.substring(0,6);
                    if( ($("#recipient-name").val() != $tele) ){
                          alert("验证码输入错误");
                          return false; 
                    }


                    formid.submit();


                })
                  
                //关闭按钮
                $(".cd-popupp .closes").click(function(event){

                          $(".cd-popupp").hide();
                          event.stopPropagation();
                    
                })
              }
              
            });
            // 关闭弹窗
            //close popup
            $('.cd-popup').on('click', function(event){
              if( $(event.target).is('.cd-popup-close') || $(event.target).is('.cd-popup') ) {
                event.preventDefault();
                $(this).removeClass('is-visible');
              }
            });
            // 关闭弹窗
            //close popup
            $('.cd-popup').on('click', function(event){
              if( $(event.target).is('.cd-popup-closes') || $(event.target).is('.cd-popup') ) {
                  event.preventDefault();
                  $(this).removeClass('is-visible');
              }
            });



          });
    </script>


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
      $ul.animate({marginTop : liHeight + "px"},1000,function(){
      
      $ul.find("a:last").prependTo($ul)
      $ul.find("a:first").hide();
      $ul.css({marginTop:0});
      $ul.find("a:first").fadeIn(1000);
      });
    },2000);
  }).trigger("mouseleave");
     
}); 
</script>



<div style="display:none;"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['tongji'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
</div>
</body>
</html><?php }} ?>