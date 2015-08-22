<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:52:07
         compiled from "mobile:passport/login.html" */ ?>
<?php /*%%SmartyHeaderCode:34441445455d7f1e723ff86-24296092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '586845bbba5c4e30a9e786afde8f767775c07ee2' => 
    array (
      0 => 'mobile:passport/login.html',
      1 => 1420010588,
      2 => 'mobile',
    ),
  ),
  'nocache_hash' => '34441445455d7f1e723ff86-24296092',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7f1e72d4278_49495672',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7f1e72d4278_49495672')) {function content_55d7f1e72d4278_49495672($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ('mobile:block/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--头部开始-->
	<div class="mobile_top">
    	<div class="mobile_top_son">
            <a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
" class="detail-first"><img src="images/back_bg.png" width="10"/></a>
            <div class="detail-second">登录</div>
        </div>
    </div>
    <div class="h45"></div>
<!--头部结束-->
<!--主题部分开始-->
 <div class="mobile_main hauto">
 	<div class="mobile_register">
    	<form id='login-form'>
        	<div class="mobile_register_t">
            	<p><i>账号&nbsp;:&nbsp;</i><input type="text" name='account[uname]' class="resister_zh" value="" id="register_zh"/></p>
                <p><i>密码&nbsp;:&nbsp;</i><input type="password" name='account[passwd]' class="resister_zh" value="" id="register_mm"/></p>
                <p><label style="display:block;height:30px;font-size:12px;"><input type="checkbox" name="keep" value="1" /> &nbsp;30天之内自动登录</label></p>
                <p style="color: red; display: none;" id='showErr'></p>
            </div>
            <div class="mobile_register_c"><a  href="###" id='login-btn' class="register_but mt10">登录</a></div>
            <div class="mobile_register_b">
            	<h3>你也可以使用这些账号登录</h3>
                <div class="mobile_register_b_hao">
                	<a href="<?php echo smarty_function_link(array('ctl'=>'passport:qqlogin'),$_smarty_tpl);?>
" class="QQ_denglu">
                    	<span class="ico QQ_ico"></span>
                        <span class="zhanghao">QQ账号登录</span>
                    </a>
                    <a href="<?php echo smarty_function_link(array('ctl'=>'passport:weibo'),$_smarty_tpl);?>
" class="weibo_denglu">
                    	<span class="ico weibo_ico"></span>
                        <span class="zhanghao1">微博账号登录</span>
                    </a>
                </div>
                <div class="cl"></div>
                <p>没有账号&nbsp;?&nbsp;<a href="<?php echo smarty_function_link(array('ctl'=>'passport:regsiter'),$_smarty_tpl);?>
"><u>立即注册</u></a></p>
                
            </div>
        
        </form>
   
    </div>
 	<div class="h45"></div>
    <script>
        
        $(document).ready(function(){
            function showmsg(message){
                $("#showErr").show().html(message);
            }
            $("#login-btn").click(function(){
                $.post('<?php echo smarty_function_link(array('ctl'=>"passport:login"),$_smarty_tpl);?>
',$("#login-form").serialize(),function(data){
                    if(data.error){
                         showmsg(data.message);
                    }else{
                        window.location="<?php echo smarty_function_link(array('ctl'=>'ucenter'),$_smarty_tpl);?>
";
                    }
                },'json');
            });
            
        });
        
    </script>
 
 </div>
<!--主题部分结束-->


 <?php echo $_smarty_tpl->getSubTemplate ('mobile:block/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>