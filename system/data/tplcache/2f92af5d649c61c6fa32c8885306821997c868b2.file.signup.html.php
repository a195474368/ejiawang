<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:19:31
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/passport/signup.html" */ ?>
<?php /*%%SmartyHeaderCode:199512535255d7ea43df4049-44058342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f92af5d649c61c6fa32c8885306821997c868b2' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/passport/signup.html',
      1 => 1440122919,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199512535255d7ea43df4049-44058342',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea43ec99a1_79406881',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea43ec99a1_79406881')) {function content_55d7ea43ec99a1_79406881($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><?php $_smarty_tpl->tpl_vars["tpl_sub_title"] = new Smarty_variable("网站注册-", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("passport/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
     
<div class="w960 hauto" style="margin-top:15px;">
    <div class="login_p lt">
        <ul id="account-from-ul">
            <li><a class="on black" from="member">注册业主</a></li>
            <li><a class="black" from="company">装修公司</a></li>
            <li><a class="black" from="designer">设计师</a></li>
            <li><a class="black" from="shop">商家入住</a></li>
        </ul>
    </div>
    <div class="cl"></div>
    <style type="text/css">
        table{width:560px;}
        table.login-table th{width:100px;text-align:right;padding-right:10px;}table.login-table td{height:60px; text-align:left;}
    </style>
    <div class="login_main">
        <div class="login_all_1">    	
            <div class="login_l lt" style="margin-top:36px;">
                <form id="account-form">
                <input type="hidden" name="account[from]" value="member" id="account-from"/>
                <table class="login-table">
                    <tr>
                        <td><span class="red">*</span>用户名：</td>
                        <td><input type="text" name="account[uname]" class="username usernamebg1" id="uname" placeholder="请输入用户名"/></td>
                        <td><div id="unameTip" style="width:240px;margin-top:-18px;"></div></td>
                    </tr>
					<tr>
                        <td><span class="red">*</span>联系手机：</td>
                        <td><input type="text" name="account[mobile]" class="username" id="mobile" placeholder="请输入手机"/></td>
                        <td><div id="mobileTip" style="width:240px;margin-top:-18px;"></div></td>
                    </tr>
                    <tr>
                        <td><span class="red">*</span>联系邮箱：</td>
                        <td><input type="text" name="account[mail]" class="username" id="mail" placeholder="请输入邮箱"/></td>
                        <td><div id="mailTip" style="width:240px;margin-top:-18px;"></div></td>
                    </tr>
					
                    <tr>
                        <td><span class="red">*</span>登录密码：</td>
                        <td><input type="password" name="account[passwd]" class="username usernamebg2" id="passwd"/></td>
                        <td><div id="passwdTip" style="width:240px;margin-top:-18px;"></div></td>
                    </tr>
                     <tr>
                        <td><span class="red">*</span>确认密码：</td>
                        <td><input type="password" name="confirmpasswd" class="username" id="confirmpwd"/></td>
                        <td><div id="confirmpasswdTip" style="width:240px;margin-top:-18px;"></div></td>
                    </tr>
                    <tr>
                        <td><span class="red">*</span>验证码：</td>
                        <td colspan="2">
                                <input type="text" class="username" name="verifycode" style="width:60px;"/> 
                                <label style="display:inline-block;">
                                    <img verify="#pass-verify" id="pass-verify" src="index.php?magic-verify&_=<?php echo time();?>
" style="width:120px;height:35px;" align="AbsBottom"/>
                                    <a verify="#pass-verify">点击刷新验证码</a>
                                </label>
                        </td>
                    </tr>
                    <tr><td></td><td colspan="2"><input type="button" action="<?php echo smarty_function_link(array('ctl'=>'passport:create','http'=>'empty'),$_smarty_tpl);?>
" mini-submit="#account-form" name="zhuce" class="login_free_zhuce orgbut" value="免费注册"/></td></tr>
                </table>                        
                </form>                      
            </div>
             <div class="login_line1 rt">
           	 <div class="login_r lt">
             	<div "login_r_t lt">
                    <h3>我有账号</h3>
                    <h2><a href="<?php echo smarty_function_link(array('ctl'=>'passport:login'),$_smarty_tpl);?>
" login="mini" class="now_zhuce">立即登录</a></h2>
                  
              </div>
            </div>
        </div>  
        <div class="cl"></div>               
    </div>
</div>
<script type="text/javascript"  src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/formValidator/formValidator.js"></script>
<script type="text/javascript">
(function(K, $){
 $("#account-from-ul li a").click(function(){
    if(!$(this).hasClass("on")){
        $("#account-from-ul li a").removeClass("on");
        $(this).addClass("on");
        $("#account-from").val($(this).attr("from"));
        $("#uname,#mail,#mobile,#passwd,#confirmpwd").val("").removeClass("input_public input_error");
        $("#unameTip,#mailTip,#mmobileTip,#passwdTip,#confirmpwdTip").html("");
    }
 });
$.formValidator.initConfig({formID:"account-form",theme:"ArrowSolidBox",/*submitOnce:true,*/
	onError:function(msg,obj,errorlist){
		Widget.MsgBox.error(msg);
	},
	ajaxPrompt : '有数据正在异步验证，请稍等...'
});
$("#mail").formValidator({onShow:"请输入邮箱",onFocus:"邮箱6-100个字符,输入正确了才能离开焦点",onCorrect:"恭喜你,你输对了"}).inputValidator({min:6,max:100,onError:"你输入的邮箱长度非法,请确认"})
	.regexValidator({regExp:"^([\\w-.]+)@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.)|(([\\w-]+.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(]?)$",onError:"你输入的邮箱格式不正确"}) 
	.ajaxValidator({
		dataType : "json",
		async : true,
		url : "<?php echo smarty_function_link(array('ctl'=>'passport:check','http'=>'ajax'),$_smarty_tpl);?>
",
		success : function(ret){
			if(ret.error){
				return ret.message.join(",");
			}
			return true;
		},
		error: function(jqXHR, textStatus, errorThrown){alert("服务器没有返回数据，可能服务器忙，请重试"+errorThrown);},
		onError : "该邮箱不可用，请更换邮箱",
		onWait : "正在对邮箱进行合法性校验，请稍候..."
	});
$("#mobile").formValidator({onShow:"请输入手机,",onFocus:"手机应该为11位数字",onCorrect:"该手机可以注册"}).inputValidator({min:11,max:11,onError:"你输入的手机非法,请确认"})
		.regexValidator({regExp:"^((13[0-9])|(15[^4,\\D])|(17[^4,\\D])|(18[0-9]))\\d{8}$",onError:"你输入的手机格式不正确"}) 
	    .ajaxValidator({
		dataType : "json",
		async : true,
		url : "<?php echo smarty_function_link(array('ctl'=>'passport:check','http'=>'ajax'),$_smarty_tpl);?>
",
		success : function(ret){
			if(ret.error){
				return ret.message.join(",");
			}
			return true;
		},
		error: function(jqXHR, textStatus, errorThrown){alert("服务器没有返回数据，可能服务器忙，请重试"+errorThrown);},
		onError : "该手机不可用，请更换手机",
		onWait : "正在对手机进行合法性校验，请稍候..."
	});	
$("#uname").formValidator({onShow:"请输入用户名,",onFocus:"用户名至少5个字符,最多16个字符",onCorrect:"该用户名可以注册"}).inputValidator({min:2,max:16,onError:"你输入的用户名非法,请确认"})
	    .ajaxValidator({
		dataType : "json",
		async : true,
		url : "<?php echo smarty_function_link(array('ctl'=>'passport:check','http'=>'ajax'),$_smarty_tpl);?>
",
		success : function(ret){
			if(ret.error){
				return ret.message.join(",");
			}
			return true;
		},
		error: function(jqXHR, textStatus, errorThrown){alert("服务器没有返回数据，可能服务器忙，请重试"+errorThrown);},
		onError : "该用户名不可用，请更换用户名",
		onWait : "正在对用户名进行合法性校验，请稍候..."
	});

	$("#passwd").formValidator({onShow:"请输入密码",onFocus:"至少6个长度",onCorrect:"密码合法"}).inputValidator({min:6,empty:{leftEmpty:false,rightEmpty:false,emptyError:"密码两边不能有空符号"},onError:"密码不能为空,请确认"});
	$("#confirmpasswd").formValidator({onShow:"输再次输入密码",onFocus:"至少6个长度",onCorrect:"密码一致"}).inputValidator({min:6,empty:{leftEmpty:false,rightEmpty:false,emptyError:"重复密码两边不能有空符号"},onError:"重复密码不能为空,请确认"}).compareValidator({desID:"passwd",operateor:"=",onError:"2次密码不一致,请确认"});
$("[verify]").click(function(){
	$($(this).attr("verify")).attr("src", "index.php?magic-verify&_"+Math.random());
});
})(window.KT, window.jQuery);					
</script> 

<?php echo $_smarty_tpl->getSubTemplate ("passport/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>