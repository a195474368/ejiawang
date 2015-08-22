<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:19:28
         compiled from "mobile:block/footer.html" */ ?>
<?php /*%%SmartyHeaderCode:92557168055d7ea40b5c5b8-14777559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbc3a32e953ab7fce512bcefa7b6a3cede2daccc' => 
    array (
      0 => 'mobile:block/footer.html',
      1 => 1431957906,
      2 => 'mobile',
    ),
  ),
  'nocache_hash' => '92557168055d7ea40b5c5b8-14777559',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea40bb9e26_91561377',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea40bb9e26_91561377')) {function content_55d7ea40bb9e26_91561377($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?>﻿<!--底部区域开始-->
	<div class="mobile_footer">
        <div class="mobile_footer_all">
            <ul>
                <li class="li0"><a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
">首页</a></li>
                <li class="li1"><a href="<?php echo smarty_function_link(array('ctl'=>'tenders'),$_smarty_tpl);?>
">设计</a></li>
                <li class="li2"><a href="<?php echo smarty_function_link(array('ctl'=>'company'),$_smarty_tpl);?>
">找公司</a></li>
                <li class="li3"><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter'),$_smarty_tpl);?>
">我的</a></li>
                <li class="li4"><a href="javascript:void(0);">更多</a></li>
            </ul>
        </div>
	</div>
<!--底部区域结束-->
<!--弹出层开始-->
	<div class="mobile_show none">
            <ul>
                <li><a href="<?php echo smarty_function_link(array('ctl'=>'tuan'),$_smarty_tpl);?>
">小区团装</a></li>
                <li><a href="<?php echo smarty_function_link(array('ctl'=>'article'),$_smarty_tpl);?>
">学装修</a></li>
                <li><a href="<?php echo smarty_function_link(array('ctl'=>'tenders'),$_smarty_tpl);?>
">发招标</a></li>
                <li><a href="<?php echo smarty_function_link(array('ctl'=>'site'),$_smarty_tpl);?>
">看工地</a></li>
                <li><a href="<?php echo smarty_function_link(array('ctl'=>'designer'),$_smarty_tpl);?>
">设计师</a></li>
                <li><a href="tel:<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['phone'];?>
">装修咨询</a></li>
                <li><a href="<?php echo smarty_function_link(array('ctl'=>'youhui'),$_smarty_tpl);?>
">优惠信息</a></li>
                <li><a href="<?php echo smarty_function_link(array('ctl'=>'shop'),$_smarty_tpl);?>
">材料商</a></li>
            </ul>
	</div>
<!--弹出层结束-->
	<script>
	$(document).ready(function(){
		$(".mobile_footer_all ul li.li4").toggle(
			function(){
				$(".mobile_show").fadeIn("slow");
				$(".opacity_zhe").fadeIn("slow");
			},
			function(){
				$(".mobile_show").fadeOut("slow");
				$(".opacity_zhe").fadeOut("slow");
			}
		);
		$(".mobile_show ul li").last().css('border-bottom','none');
		
		$(".opacity_zhe").click(function(){
			$(".opacity_zhe").hide();
			$(".mobile_show").fadeOut(1000);
			
		});
		
	});
	</script>

<div style="display:none;">
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?1499413e6384c969bd6fa1bdfbad8584";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

</div>
</div>
</body>
</html>




<?php }} ?>