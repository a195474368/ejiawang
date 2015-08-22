<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:20:10
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/ucenter/header.html" */ ?>
<?php /*%%SmartyHeaderCode:171800680355d7ea6a561448-49551996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a8042223ff0b7b0a3b95b19090fa59dbc80a64d' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/ucenter/header.html',
      1 => 1402664332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171800680355d7ea6a561448-49551996',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'pager' => 0,
    'MEMBER' => 0,
    'menu_list' => 0,
    'menu' => 0,
    'item' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea6a6dd439_46139412',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea6a6dd439_46139412')) {function content_55d7ea6a6dd439_46139412($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><!doctype html>
<html lang="zh-cn">
<?php echo $_smarty_tpl->getSubTemplate ("block/sheader.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body style="padding-top:41px;">
<iframe id="miniframe" name="miniframe" style="display:none;"></iframe>
<!-- small header op -->
<div class="head_small">
    <div class="head_small_c">
    <ul>
        <li><a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/images/slogo.jpg" width="90" height="19" alt="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
" /></a></li>
        <li><a href="<?php echo smarty_function_link(array('ctl'=>'tenders'),$_smarty_tpl);?>
">我要装修</a> |</li>
        <li><a href="<?php echo smarty_function_link(array('ctl'=>'home'),$_smarty_tpl);?>
">我爱我家</a> |</li>
        <li><a href="<?php echo smarty_function_link(array('ctl'=>'case'),$_smarty_tpl);?>
">效果图</a> |</li>
        <li><a href="<?php echo smarty_function_link(array('ctl'=>'gs'),$_smarty_tpl);?>
">找公司</a> |</li>
        <li><a href="<?php echo smarty_function_link(array('ctl'=>'mall'),$_smarty_tpl);?>
">商城</a> |</li>
        <li><a href="<?php echo smarty_function_link(array('ctl'=>'content'),$_smarty_tpl);?>
">学装修</a></li>
    </ul>
    <span>
    <?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['uid']){?>
        <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member:index'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['face_32'];?>
" width="30" height="30" alt="<?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['uname'];?>
" /></a><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member:index'),$_smarty_tpl);?>
" class="bg_jiantou"><?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['uname'];?>
</a><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member'),$_smarty_tpl);?>
" class="bg_jiantou">个人设置</a>
        <?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['from']=='company'){?><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/company'),$_smarty_tpl);?>
" class="bg_jiantou">公司管理</a><?php }elseif($_smarty_tpl->tpl_vars['MEMBER']->value['from']=='shop'){?><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop'),$_smarty_tpl);?>
" class="bg_jiantou">商铺管理</a><?php }?>
        <a href="<?php echo smarty_function_link(array('ctl'=>'passport:loginout'),$_smarty_tpl);?>
">退出</a>
    <?php }else{ ?>
        <a href="<?php echo smarty_function_link(array('ctl'=>'passport:login'),$_smarty_tpl);?>
" mini-login="login">&nbsp;登录&nbsp;</a></li><li>&nbsp; |&nbsp;</li> <li><a href="<?php echo smarty_function_link(array('ctl'=>'passport:signup'),$_smarty_tpl);?>
" target="_blank">&nbsp;注册&nbsp;</a>
    <?php }?>
    </span>	 	
    </div>
</div>
<!-- small header ed -->
<link href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/style/ucenter.css" rel="stylesheet" type="text/css" />
<div class="main_bg">
    <div class="main_box">
        <div class="cen_title">
            <span class="cen_text"><em></em>会员中心</span>
            <div class="right cen_titlerh"><em class="fb_ico3"></em>金币：<b class="fonthuang"><?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['gold'];?>
</b><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member:gold'),$_smarty_tpl);?>
" title="充值金币" ><em class="ttb"></em>充值金币</a></div>
            <div class="clear-both"></div>
        </div>
        <div class="main_c">
            <div class="main_cl">
                <div class="left_nav">
                    <?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value){
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
                    <div class="border">
                        <dl>
                            <?php if ($_smarty_tpl->tpl_vars['menu']->value['menu']){?>
                            <dt class="current"><a title="<?php echo $_smarty_tpl->tpl_vars['menu']->value['title'];?>
" class="title"><em></em><?php echo $_smarty_tpl->tpl_vars['menu']->value['title'];?>
</a></dt>
                            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value['menu']){?>
                            <dd<?php if ($_smarty_tpl->tpl_vars['request']->value['ctlmap']['ctl']==$_smarty_tpl->tpl_vars['item']->value['ctl']){?> class="current"<?php }?>><a href="<?php echo smarty_function_link(array('ctl'=>$_smarty_tpl->tpl_vars['item']->value['ctl']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" class="title"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></dd>
                            <?php }?>
                            <?php } ?>
                            <?php }?>
                        </dl>
                    </div>
                    <?php } ?>
                </div>
            </div>
        <div class="main_cr">
            <div class="set_c"><?php }} ?>