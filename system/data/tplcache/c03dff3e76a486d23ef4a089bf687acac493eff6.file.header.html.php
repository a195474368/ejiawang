<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:19:31
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/passport/header.html" */ ?>
<?php /*%%SmartyHeaderCode:119963745155d7ea43ed2985-33263332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c03dff3e76a486d23ef4a089bf687acac493eff6' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/passport/header.html',
      1 => 1402664332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119963745155d7ea43ed2985-33263332',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tpl_sub_title' => 0,
    'CONFIG' => 0,
    'pager' => 0,
    'MEMBER' => 0,
    'COOKIE' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea44077682_51558740',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea44077682_51558740')) {function content_55d7ea44077682_51558740($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $_smarty_tpl->tpl_vars['tpl_sub_title']->value;?>
<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
</title>
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/style/public.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/style/index.css"/>  
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/style/kt.widget.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/ui/j.ui.css" type="text/css" />
        <script type="text/javascript"  src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/kt.j.js"></script>
        <script type="text/javascript"  src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/kt.js"></script>
        <script type="text/javascript"  src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/ui/j.ui.js"></script>
        <script type="text/javascript"  src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/widget.login.js"></script>
        <script type="text/javascript"  src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/widget.msgbox.js"></script>
    </head>
<body>
<iframe id="miniframe" name="miniframe" style="display:none;"></iframe>
<div id="wrap" class="bo_bg index_b_bg">  
	<div class="signup_top">
    	<div class="w960 signup_top_t">
        	<div class="information_t_l lt">            
                 <?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['uname']){?>
                <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['uname'];?>
</a>！您好 <a href="<?php echo smarty_function_link(array('ctl'=>'passport:loginout'),$_smarty_tpl);?>
">退出</a>
                <?php }else{ ?>
                <a href="<?php echo smarty_function_link(array('ctl'=>'passport'),$_smarty_tpl);?>
">[登录]</a><a href="<?php echo smarty_function_link(array('ctl'=>'passport-signup'),$_smarty_tpl);?>
">&nbsp;&nbsp;[注册]</a>
                <?php }?>
            </div>
            <div class="information_r rt">
            <ul>
                <li><a href="<?php echo smarty_function_link(array('ctl'=>'mall/cart'),$_smarty_tpl);?>
">购物车<?php if ($_smarty_tpl->tpl_vars['COOKIE']->value['CART_NUMBER']){?>(<?php echo $_smarty_tpl->tpl_vars['COOKIE']->value['CART_NUMBER'];?>
)<?php }?></a>&nbsp;&nbsp;&nbsp;|</li>
                <li><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/order'),$_smarty_tpl);?>
">我的订单</a>&nbsp;&nbsp;&nbsp;|</li>
               
                <li><a>咨询热线</a><span>&nbsp;<b><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['phone'];?>
</b></span></li>
            </ul>
            </div>
        </div>
    </div>  
    <div class="w960 login_top">          
        <div class="logo lt hauto" id="jq_city_change">
            <h1><a href="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['siteurl'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/images/index_logo.jpg"/></a></h1>
            <p class="h20"></p>
            <div class="city">
                <b><?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
</b>
                <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['site']['multi_city']){?>
                <site><a href="<?php echo smarty_function_link(array('ctl'=>'city'),$_smarty_tpl);?>
" id="jq_city_header_change">[&nbsp;切换城市&nbsp;]</a></site>
                <?php }?>
               
            </div>
           
        </div>
    </div><?php }} ?>