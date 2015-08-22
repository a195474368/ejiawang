<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:19:07
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/block/sfooter.html" */ ?>
<?php /*%%SmartyHeaderCode:130664494155d7ea2b84e3a4-09934699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cfbed7d21f7113435c1a62226caca89538e74ce' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/block/sfooter.html',
      1 => 1422685111,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130664494155d7ea2b84e3a4-09934699',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'pager' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea2b90c7c8_56588164',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea2b90c7c8_56588164')) {function content_55d7ea2b90c7c8_56588164($_smarty_tpl) {?><?php if (!is_callable('smarty_block_calldata')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/block.calldata.php';
if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><!--<div class="footer_b w1000 mt10">
    <p>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>'article/view','from'=>'about','order'=>'article_id:ASC','limit'=>10)); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>'article/view','from'=>'about','order'=>'article_id:ASC','limit'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <a target="_blank" title="<{$item.title}>" href="<{link ctl='about' arg0=$item.page}>">
        <font style="font-size:13pt;"><{$item.title}></font></a>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>'article/view','from'=>'about','order'=>'article_id:ASC','limit'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
    
    </p>    
    <p> Copyright © 2014 <a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
" target="_blank">亿家网</a>, All rights reserved. ICP备案：<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['icp'];?>
 技术支持：<a href="http://www.ejiawang.cc" target="_blank">www.ejiawang.cc</a></p>
    <ul class="w400 mt30 mb30">
        <li><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/pic/wj.jpg" width="50" height="50" /><br />网警110</li>
        <li><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/pic/gs.jpg" width="50" height="50" /><br /><?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
工商</li>
        <li><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/pic/xh.jpg" width="50" height="50" /><br />网络协会</li>
        <li><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/pic/hb.jpg" width="50" height="50" /><br />ICP备</li>
    </ul>
</div>-->

<div id="footer">
	<div class="footer">
		<div class="lt footer-logo">
			<img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/images/footer-logo.png" width="265" height="155" />
		</div>
		<div class="rt copy">
			<ul>
                             <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>'article/view','from'=>'about','order'=>'article_id:ASC','limit'=>10)); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>'article/view','from'=>'about','order'=>'article_id:ASC','limit'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

       <li><a target="_blank" title="<{$item.title}>" href="<{link ctl='about' arg0=$item.page}>">
				<{$item.title}></a></li>
                             <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>'article/view','from'=>'about','order'=>'article_id:ASC','limit'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<div class="cl"></div>
			</ul>
                    <p style="color:#666">Copyright © 2014 亿家网, All rights reserved. ICP备案：鄂ICP备14004834号-1 </p>
			<p style="color:#666">技术支持：www.ejiawang.cc 
                            <!--<a mini-load='申请免费量房' href="<?php echo smarty_function_link(array('ctl'=>'gs:yuyue2','arg0'=>'1','http'=>'empty'),$_smarty_tpl);?>
" >免费预约</a>-->
                        
                        </p>
			<img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/images/icon.png" />
		</div>
		<div class="cl"></div>
	</div>
</div>



<script type="text/javascript"  src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/jquery.kinMaxShow.js"></script>
<script type="text/javascript">
(function(K, $){
$("[kinBox]").each(function(){
    var params = $.parseJSON($(this).attr("kinBox") || "{}") || {};
    if(!$(this).attr("id")){$(this).attr("id") = K.GGUID();}
    $("#"+$(this).attr('id')).kinMaxShow($.extend({intervalTime:4}, params));
});
})(window.KT, window.jQuery);
</script>
<div style="display:none;"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['tongji'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
</div><?php }} ?>