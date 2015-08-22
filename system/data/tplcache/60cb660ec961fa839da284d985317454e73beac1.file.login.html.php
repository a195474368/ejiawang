<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:25:52
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/passport/login.html" */ ?>
<?php /*%%SmartyHeaderCode:12726070155d7ebc0c3b796-41813209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60cb660ec961fa839da284d985317454e73beac1' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/passport/login.html',
      1 => 1402664332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12726070155d7ebc0c3b796-41813209',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ebc0ce32f2_26740982',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ebc0ce32f2_26740982')) {function content_55d7ebc0ce32f2_26740982($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><?php $_smarty_tpl->tpl_vars["tpl_sub_title"] = new Smarty_variable("网站登录-", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("passport/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="w960 hauto" style="margin-top:15px;width:958px;">
    <div class="login_p lt">
        <ul id="account-from-ul"><li><a class="on" from="member" style="color:#F00;border-bottom:none;background:#FFF;">登录</a></li></ul>
    </div>
    <style type="text/css">table.login-table{width:500px;}table.login-table th{width:100px;text-align:right;padding-right:10px;}table.login-table td{height:60px; text-align:left;}</style>
    <div class="login_main w900 hauto">
        <div class="login_l lt" style="margin-top:50px;">
        <form id="login-form">
            <table cellpadding="0" cellspacing="0" class="login-table">
                <tr>
                    <th>用户名/邮箱:</th>
                    <td><input type="text" name="account[uname]" class="username usernamebg1" style="width:240px;"/></td>
                </tr>
                <tr>
                    <th>登录密码:</th>
                    <td><input type="password" name="account[passwd]" class="username usernamebg2" style="width:240px;"/></td>
                </tr>
                <tr>
                    <th>验  证  码:</th>
                    <td>
                        <input type="text" class="username" name="verifycode" style="width:60px;"/> 
                        <label style="display:inline-block;">
                            <img verify="#pass-verify" id="pass-verify" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/index.php?magic-verify&_=<?php echo time();?>
" style="width:120px;height:35px;" height="32" align="AbsBottom"/>
                            <a verify="#pass-verify">点击刷新验证码</a>
                        </label>
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <label style="display:block;height:30px;font-size:12px;"><input type="checkbox" name="keep" value="1" /> &nbsp;30天之内自动登录</label>
                        <input action="<?php echo smarty_function_link(array('ctl'=>'passport:login','http'=>'empty'),$_smarty_tpl);?>
" mini-submit="#login-form" id="login-btn" type="button" name="login" value="立即登录" class="denglu redbg" />
                    </td>
                </tr>
            </table>
        </form>
        </div>
        <div class="login_line1 rt">
          <div class="login_r lt">
            <div class="login_r_t lt">
                <h2>没有账号</h2>
                <table cellpadding="0" cellspacing="0">
                    <tr>
                        <td style="width:260px;height:45px;"><a href="<?php echo smarty_function_link(array('ctl'=>'passport:signup'),$_smarty_tpl);?>
" class="now_zhuce">立即注册</a></td>
                    </tr>
                </table>
                
            </div>
        </div>
        </div>
        <div class="cl"></div>
    </div>
</div>
<script type="text/javascript">
(function(K, $){
$("[verify]").click(function(){$($(this).attr("verify")).attr("src", "<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/index.php?magic-verify&_"+Math.random());});
$("#login-form input.username").keydown(function(event){
    if(event.keyCode == 13){
        event.stopPropagation();event.preventDefault();
        $("#login-btn").trigger("click");
        return false;
    }
});
})(window.KT, window.jQuery);
</script>
<?php echo $_smarty_tpl->getSubTemplate ("passport/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>