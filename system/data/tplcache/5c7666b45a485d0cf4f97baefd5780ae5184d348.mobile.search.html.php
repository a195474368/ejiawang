<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:20:00
         compiled from "mobile:block/search.html" */ ?>
<?php /*%%SmartyHeaderCode:190811162655d7ea6072fc82-55131809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c7666b45a485d0cf4f97baefd5780ae5184d348' => 
    array (
      0 => 'mobile:block/search.html',
      1 => 1420010587,
      2 => 'mobile',
    ),
  ),
  'nocache_hash' => '190811162655d7ea6072fc82-55131809',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea60792632_12031021',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea60792632_12031021')) {function content_55d7ea60792632_12031021($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><section class="search_area" style="display: none">
    <span class="close"><img src="images/close.png" alt="关闭"/></span>
    <ul class="sort" id="top_option">
        <li action="<?php echo smarty_function_link(array('ctl'=>'company'),$_smarty_tpl);?>
">公司</li>
        <li action="<?php echo smarty_function_link(array('ctl'=>'case'),$_smarty_tpl);?>
">图库</li>
        <li action="<?php echo smarty_function_link(array('ctl'=>'site'),$_smarty_tpl);?>
">工地</li>
    </ul>
    <div class="search">
        <form action="<?php echo smarty_function_link(array('ctl'=>'company'),$_smarty_tpl);?>
" id="top_search_form"  >
            <input type="text" class="search_input" id="sokeyword" name="kw" autocomplete="off" />
            <input type="reset" class="reset" value="" style="display: none" />
            <input type="submit" value="" id="btn_search" class="submit" />
        </form>
    </div>
    <div class="dislist" id="dislist" style="display: none"></div>
</section>
<script type="text/javascript">
$(function () {
    $("#top_option li").click(function () {
        $(this).addClass("active").siblings().removeClass("active");//删除默认样式
        $("#top_search_form").attr('action', $(this).attr("action"));
    });
    /*点击搜索输入框，区域按钮隐藏*/
    $(".index_search, .find").click(function () {
        $(".search_area").show();
        $(".search_input").focus();
        $(".dislist").css("height", $(document).height() - 95);
        $(".dislist").show();
        $(".filter_box").fadeOut("hide");
    });
    /*点击关闭按钮，搜索区隐藏*/
    $(".close").click(function () {
        $(".search_area").hide();
    });
    //搜索框重置
    $(".reset").click(function () {
        $(".search_input").focus();
        $(".dislist").html('');
    });
});
</script><?php }} ?>