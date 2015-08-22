<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:29:53
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/message.html" */ ?>
<?php /*%%SmartyHeaderCode:192223135455d7ecb1c47a18-91979928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f24862616135fb9cb3dbab55fcbde9935192b8ca' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/message.html',
      1 => 1402664332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192223135455d7ecb1c47a18-91979928',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ecb1ce51f7_62589565',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ecb1ce51f7_62589565')) {function content_55d7ecb1ce51f7_62589565($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="w1000">

    <?php if ($_smarty_tpl->tpl_vars['type']->value=='yes'){?>
    
    <!--恭喜你回复成功-->
    <div class="w1000 huifu_sucess">
    	<div style="height:170px;"></div>
    	<div class="w410 huifu_success_all">
        	<i class="huifu_duihao"></i>
            <div class="huifu_success_b">
            	<p>恭喜您发布成功!</p>
                <p>
                	<span id='message_box_html'>5秒之后返回首页&nbsp;&nbsp;&nbsp;&nbsp;|</span>
                    <a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
">直接返回</a>
                </p>
            </div>
        </div>
    </div>
    
     <!--恭喜你回复成功-->
     
     <script>
      var message_time = 5;   
         var myInterval  = setInterval(function(){
             if(message_time<=0){  
                 clearInterval(myInterval);
                location.href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
";
             }else{
                 message_time--;
                 $("#message_box_html").html(message_time+"秒之后返回首页&nbsp;&nbsp;&nbsp;&nbsp;|");
             }
         },1000);
         
     </script>
     
    <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['type']->value=='no'){?>
    
     <!--操作不成功-->
    <div class="w1000 huifu_sucess">
    	<div style="height:170px;"></div>
    	<div class="w410 huifu_success_all">
        	<i class="huifu_cha"></i>
            <div class="huifu_success_b">
            	<p>对不起，操作不成功！</p>
                <p><span>点确定按钮返回网站首页</span></p>
                <p>
                    <a href="###" class="queding">确定</a>

                </p>
            </div>
        </div>
    </div>
      <!--操作不成功-->
    
    <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['type']->value=='notice'){?>
    
     <!--是否删除-->
     <div class="w1000 huifu_sucess">
    	<div style="height:170px;"></div>
    	<div class="w410 huifu_success_all">
        	<i class="huifu_gantanhao"></i>
            <div class="huifu_success_b">
            	<p>如果删除，将无法恢复，您确定吗？</p>
                <p>
                    <a href="###" class="queding">确定</a>
                    <a href="###" class="quxiao">取消</a>
                </p>
            </div>
        </div>
    </div>
    <!--是否删除-->
    
    <?php }?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>