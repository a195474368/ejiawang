<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:30:56
         compiled from "mobile:case/detail.html" */ ?>
<?php /*%%SmartyHeaderCode:178805947355d7ecf0e7ff83-47065453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bac24da4e6fcf5a03e15fd12cb2bacd576e01ee4' => 
    array (
      0 => 'mobile:case/detail.html',
      1 => 1420010587,
      2 => 'mobile',
    ),
  ),
  'nocache_hash' => '178805947355d7ecf0e7ff83-47065453',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
    'CONFIG' => 0,
    'pager' => 0,
    'photo_list' => 0,
    'photo' => 0,
    'detail' => 0,
    'is_like' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ecf10862f6_71066593',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ecf10862f6_71066593')) {function content_55d7ecf10862f6_71066593($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $_smarty_tpl->tpl_vars['request']->value['city']['seo_title'];?>
 -<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['mobile']['title'];?>
</title>
<meta name="Keywords" content="<?php echo $_smarty_tpl->tpl_vars['request']->value['city']['seo_keywords'];?>
" />
<meta name="Description" content="<?php echo $_smarty_tpl->tpl_vars['request']->value['city']['seo_description'];?>
" />
<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,user-scalable=no" name="viewport" id="viewport" />
<link type="text/css" rel="stylesheet" href="style/basic.css">
<link type="text/css" rel="stylesheet" href="style/style.css">
<link type="text/css" rel="stylesheet" href="style/newstyle.css">
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/kt.j.js"></script>
<script type="text/javascript">window.URL={"domain":"<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['domain'];?>
","res":"<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
","mobile":"<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['mobile']['url'];?>
"};window.G={city_id:"<?php echo $_smarty_tpl->tpl_vars['request']->value['city_id'];?>
", city_name:"<?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
"}</script>
<!-- html5.js for IE less than 9 and css3-mediaqueries.js for IE8 or older-->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
</head>
<body style=" background: #000000; ">
    <!--页面内容开始 -->
    <div class="opacity_zhe none"></div>
    <div class="warp">
        
<!--头部开始-->
	<div class="mobile_top">
    	<div class="mobile_top_son">
            <a href="<?php echo smarty_function_link(array('ctl'=>'case'),$_smarty_tpl);?>
" class="detail-first"><img src="images/back_bg.png" width="10"/></a>
            <div class="detail-second">图库详情</div>
        </div>
    </div>
    <div class="h45"></div>
<!--头部结束-->
<!--主题部分开始-->
<div class="mobile_main" >
        <div class="mobile_img_detail">
            <div class="case_detail_img" style="width:21280px">
            <?php  $_smarty_tpl->tpl_vars['photo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['photo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['photo_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['photo']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->key => $_smarty_tpl->tpl_vars['photo']->value){
$_smarty_tpl->tpl_vars['photo']->_loop = true;
 $_smarty_tpl->tpl_vars['photo']->iteration++;
?>
             
            <div><span> <a href="###"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo'];?>
" width="320"  alt="<?php echo $_smarty_tpl->tpl_vars['photo']->value['title'];?>
" num="<?php echo $_smarty_tpl->tpl_vars['photo']->iteration;?>
"/></a></span></div>
           
            <?php } ?>
             </div>
            <p></p>
            <p class="text">
                <span class="span_l"><b class="single">1</b><i>/<?php echo count($_smarty_tpl->tpl_vars['photo_list']->value);?>
</i></span>
                <span class="span_r">
                    <i><?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
</i>
                </span>
            </p>
            
        </div>
        <div class="h45"></div>
	</div>
<!--主题部分结束-->

<!--底部区域开始-->
	<div class="mobile_footer">
        <div class="mobile_footer_img">
        	<ul>
            	<li class="li0">
                    
                    <?php if ($_smarty_tpl->tpl_vars['is_like']->value){?><a href="javascript:void(0);">已喜欢</a><?php }else{ ?><a  href="javascript:void(0);">&nbsp;喜欢</a><?php }?>
                
                </li>
                <li class="li1"><a id="share" href="###">&nbsp;分享到</a></li>
                <li class="li2"><a href="<?php echo smarty_function_link(array('ctl'=>'tenders'),$_smarty_tpl);?>
">免费帮我设计</a></li>
            </ul>
        </div>
	</div>
<script src="script/flipsnap.min.js"></script>
  <script type="text/javascript">
      $(document).ready(function(){
           //图片上下居中					 
        var ccheight = $(window).height();
        for (var i = 0; i < $(".case_detail_img div").size() ; i++) {
            imgHeight = $(".case_detail_img div").eq(i).find("img").height();
            if (imgHeight < ccheight) {
                $(".case_detail_img div,.case_detail_img span").css("height", ccheight + "px");
            } else { $(".case_detail_img div,.case_detail_img span").css("height", "100%"); }
        };
        //转屏图片上下居中
        $(window).resize(function () {
            var wh = $(window).height();
            var imgHeight = $(".case_detail_img div img").height();

            if (imgHeight < wh) {
                $(".case_detail_img div,.case_detail_img span").css("height", wh + "px");

            } else { $(".case_detail_img div,.case_detail_img span").css("height", "100%"); }

        });
        //图片划动 
        var flipsnap = Flipsnap('.case_detail_img', { distance: 320 });
        flipsnap.refresh();
        //划动到第几个图片 
        flipsnap.element.addEventListener('fsmoveend', function () {
            var number = $(".case_detail_img img").eq(flipsnap.currentPoint);
            $(".single").html(number.attr("num"));
        }, false);
        var lock = <?php echo $_smarty_tpl->tpl_vars['is_like']->value;?>
;
        $(".li0 a").click(function(){
            if(!lock){
                lock = 1;
                $.get("<?php echo smarty_function_link(array('ctl'=>'case:love','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['case_id']),$_smarty_tpl);?>
",function(data){
                    if(!data.error){
                            $(".li0").html('<a href="javascript:void(0);">已喜欢</a>');
                    }                      
                },'json');
            }
              
        });
          
      });
       
       
        
      
    </script>
       <script type="text/javascript" src="http://openapi.baidu.com/widget/social/1.0/share.js">
        </script>
        <script type="text/javascript">
            baidu.socShare.init({
                "afterRender":function(){
                },
                "client_id":"ZVEpDSsmZ0qxa1gmgDAh1Fje",
                "dom_id":"share",
                "content":"<?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
",
                "theme":"native",
                "animate":true,
                "url":encodeURIComponent(location.href),
                "pic_url":'<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['detail']->value['photo'];?>
'
            });
        </script>

<!--底部区域结束-->
</div>
    
  
</body>
</html>
<?php }} ?>