<?php /* Smarty version Smarty-3.1.8, created on 2015-08-21 18:36:47
         compiled from "admin:page/login.html" */ ?>
<?php /*%%SmartyHeaderCode:51382790755d6ff3fbd55a2-33046451%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c66b93d857459543b1d37f71a25f1f726163f51a' => 
    array (
      0 => 'admin:page/login.html',
      1 => 1402664331,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '51382790755d6ff3fbd55a2-33046451',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d6ff3fc375c3_35406683',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d6ff3fc375c3_35406683')) {function content_55d6ff3fc375c3_35406683($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Language" content="zh-CN" />
    <title>亿家网装修平台管理系统 - Powered by ejiawang.cc</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/style/common.css" type="text/css" charset="utf-8" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <script type="text/javascript">if (window.parent != window){window.top.location.href = location.href;}</script>
</head>
<body style="background:#F3F9FA;">
    <div class="login_enter">
        <form action="?index-login" method="post">
        <table width="53%" border="0" cellspacing="0" cellpadding="0">
            <tr><th height="60" colspan="3" valign="top">用户登陆</th></tr>
            <tr>
                <td width="22%" align="right">用户名：</td>
                <td colspan="2"><input name="admin_name" type="text" class="login_input" value="" style="width:150px;"/></td>
            </tr>
            <tr>
                <td align="right">密&nbsp;&nbsp;&nbsp;码：</td>
                <td colspan="2"><input  name="admin_pwd" type="password" class="login_input" value="" style="width:150px;"/></td>
            </tr>
            <tr>
                <td align="right">验证码：</td>
                <td style="width:60px"><input name="verify_code" type="text" class="login_input" id="textfield3" value="" style="width:40px" maxlength="4" /></td>
                <td><img src="?index-verify" alt="请输入验证码" width="100" height="30" onClick="this.src='?index-verify&_'+Math.random()" /></td>
            </tr>
        </table>
        <table width="53%" border="0" cellspacing="0" cellpadding="0">
            <tr><td align="center"><input type="submit" class="login_button" value="点击登陆" /></td></tr>
        </table>
        </form>
        <div class="login_foot"><a href="http://www.ijh.cc" target="_blank">亿家网 版权所有 @ ejiawang.cc</a></div>
    </div>
</body>
</html>
<?php }} ?>