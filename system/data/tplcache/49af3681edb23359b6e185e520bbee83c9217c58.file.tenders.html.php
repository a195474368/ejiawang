<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:19:07
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/block/tenders.html" */ ?>
<?php /*%%SmartyHeaderCode:37383343255d7ea2b61ee12-47702812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49af3681edb23359b6e185e520bbee83c9217c58' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/block/tenders.html',
      1 => 1422583961,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37383343255d7ea2b61ee12-47702812',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea2b66c9a7_40666677',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea2b66c9a7_40666677')) {function content_55d7ea2b66c9a7_40666677($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><div class="decoration_all_r1 lt hauto bgwhite">
    <p class="p7">
        <span><font class="ftsb">免费获得</font><font class="f22 ftw org">3</font><font class="ftsb">份不同</font></span><br />
        <font class="ftw f20">户型设计及预算方案</font>
    </p>
    <div class="apply_but">
        <form action="<?php echo smarty_function_link(array('ctl'=>'tenders:save','http'=>'empty'),$_smarty_tpl);?>
" mini-form="tenders" method="post" >
            <input type="text" name="data[mobile]" id='data_mobile' value="请输入您的联系电话" class="your_phone" style="float: left;"/>
            <input type="submit"  name="sq" class="sq" value=" " style="float: left;" />
        </form>
    </div>
      <script>
                    $(document).ready(function(){
                        $("#data_mobile").focus(function(){
                            if($(this).val() == '请输入您的联系电话'){
                                $(this).val('');
                            }
                        }).focusout(function(){
                             if($(this).val() == ''){
                                $(this).val('请输入您的联系电话');
                            }
                        });
                    });
                </script>
    <h3 class="red tc mt5"><font class="f12">*申请装修</font><font class="f14">立省</font><font class="f12">30%</h3>
    <div class="qyrz mt10">
        <ul>
            <li><a href="<?php echo smarty_function_link(array('ctl'=>'tenders'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/images/qyrz1.jpg" /></a><br /><a href="<?php echo smarty_function_link(array('ctl'=>'tenders'),$_smarty_tpl);?>
">企业认证 </a></li>
            <li><a href="<?php echo smarty_function_link(array('ctl'=>'tenders'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/images/qyrz2.jpg" /></a><br /><a href="<?php echo smarty_function_link(array('ctl'=>'tenders'),$_smarty_tpl);?>
">装修保障</a></li>
            <li><a href="<?php echo smarty_function_link(array('ctl'=>'tenders'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/images/qyrz3.jpg" /></a><br /><a href="<?php echo smarty_function_link(array('ctl'=>'tenders'),$_smarty_tpl);?>
">第三方监理</a></li>
        </ul>
    </div>
    <div class="cl"></div>
</div>
<script>
			$(document).ready(function(){ 
                         // $(".decoration_all_r1").onMouseMove(function(){
                          var top=$(".decoration_all_r1").offset().top
                           var scrolltop=$(document).scrollTop();  
                                  
                    //if(top<=scrolltop){
                     //   $(".decoration_all_r1").css("position","fixed");
                      // $(".decoration_all_r1").css("top","179px");
                     //  $(".decoration_all_r1").css("top","470px");
                   //     $(".decoration_all_r1").css("right","90px");
                     // }
                     
                        }); 
			//});
		</script>    <?php }} ?>