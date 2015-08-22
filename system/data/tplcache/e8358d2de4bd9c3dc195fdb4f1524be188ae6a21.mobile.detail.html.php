<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 12:53:19
         compiled from "mobile:article/detail.html" */ ?>
<?php /*%%SmartyHeaderCode:127820707255d8003fe20cb7-47021268%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8358d2de4bd9c3dc195fdb4f1524be188ae6a21' => 
    array (
      0 => 'mobile:article/detail.html',
      1 => 1420010587,
      2 => 'mobile',
    ),
  ),
  'nocache_hash' => '127820707255d8003fe20cb7-47021268',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cate' => 0,
    'detail' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d8003fee8b87_37979933',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d8003fee8b87_37979933')) {function content_55d8003fee8b87_37979933($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_format')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.format.php';
?><?php echo $_smarty_tpl->getSubTemplate ('mobile:block/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div class="mobile_top">
    	<div class="mobile_top_son">
            <a href="<?php echo smarty_function_link(array('ctl'=>'article'),$_smarty_tpl);?>
" class="detail-first"><img src="images/back_bg.png" width="10"/></a>
            <div class="detail-second"><?php echo $_smarty_tpl->tpl_vars['cate']->value['title'];?>
</div>
            <a href="###" id='share' class="detail-third1">
            	分享
            </a>
                   <script type="text/javascript" src="http://openapi.baidu.com/widget/social/1.0/share.js">
        </script>
            <script >
                $(document).ready(function(){
                      //分享
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

                });
                
            </script>
          
        </div>
    </div>

  <div class="h45"></div>
<!--头部结束-->
<!--主题部分开始-->
    <div class="mobile_main hauto"> 
    	<div class="mobile_article_detail">
        <!--标题开始-->
        	<div class="mobile_article_detail_title">
            	<h2><?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
</h2>
                <p><span>发布于</span><span><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['detail']->value['dateline']);?>
</span></p>
            </div>
        <!--标题结束-->
        	<div class="mobile_article_content html_contents">
            	<?php echo $_smarty_tpl->tpl_vars['detail']->value['content'];?>

            </div>

        
        
        
        </div>
    
		<div class="h45"></div>
    </div>
<!--主题部分结束-->
 <?php echo $_smarty_tpl->getSubTemplate ('mobile:block/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>