<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:19:15
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/company/header.html" */ ?>
<?php /*%%SmartyHeaderCode:30841489155d7ea33ccff55-17018110%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12acb6a1d57d73d0639e2587345e0e632dcb36c9' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/company/header.html',
      1 => 1440053203,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30841489155d7ea33ccff55-17018110',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'seo_title' => 0,
    'SEO' => 0,
    'CONFIG' => 0,
    'seo_keywords' => 0,
    'seo_description' => 0,
    'template' => 0,
    'pager' => 0,
    'item' => 0,
    'request' => 0,
    'company' => 0,
    'company_id' => 0,
    'MEMBER' => 0,
    'act' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea3404efd0_39657723',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea3404efd0_39657723')) {function content_55d7ea3404efd0_39657723($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?>﻿<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php if ($_smarty_tpl->tpl_vars['seo_title']->value){?><?php echo $_smarty_tpl->tpl_vars['seo_title']->value;?>
<?php }elseif($_smarty_tpl->tpl_vars['SEO']->value['title']){?><?php echo $_smarty_tpl->tpl_vars['SEO']->value['title'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
<?php }?></title>
        <meta name="keywords" content="<?php if ($_smarty_tpl->tpl_vars['seo_keywords']->value){?><?php echo $_smarty_tpl->tpl_vars['seo_keywords']->value;?>
<?php }elseif($_smarty_tpl->tpl_vars['SEO']->value['keywords']){?><?php echo $_smarty_tpl->tpl_vars['SEO']->value['keywords'];?>
<?php }?>" />
        <meta name="description" content="<?php if ($_smarty_tpl->tpl_vars['seo_description']->value){?><?php echo $_smarty_tpl->tpl_vars['seo_description']->value;?>
<?php }elseif($_smarty_tpl->tpl_vars['SEO']->value['description']){?><?php echo $_smarty_tpl->tpl_vars['SEO']->value['description'];?>
<?php }?>" />
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['template']->value['css']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>   	   
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
"/>
        <?php } ?>        
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/style/kt.widget.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/style/common.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/ui/j.ui.css" type="text/css" />
        <script type="text/javascript">window.URL = {"domain": "<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['domain'];?>
", "url": "<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['siteurl'];?>
", "res": "<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
", "img": "<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
", "city": "<?php echo $_smarty_tpl->tpl_vars['request']->value['city']['siteurl'];?>
"};</script>
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
        <script type="text/javascript"  src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/raty/jquery.raty.js"></script>    
    </head>

    <body>
        <iframe id="miniframe" name="miniframe" style="display:none;"></iframe>
        <div id="wrap">
            <!--优惠信息更多详情页头部开始  -->
            <div class="favorable_detail_top">
                <div class="favor_detail_p w1000">
                    <div class="favorable_detail_top_l lt">
                        <font>你所在的位置&nbsp;：&nbsp;</font>
                        <a title="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
" href="\"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
</a><font>&nbsp;>&nbsp;</font>
                        <a title="装修公司企业站" href="<?php echo smarty_function_link(array('ctl'=>'gs:items'),$_smarty_tpl);?>
">装修公司企业站</a><font>&nbsp;>&nbsp;</font>
                        <a title="<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['company_id']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
</a>
                    </div>
                    <div class="favorable_detail_top_r rt">
                       
                        <?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['uname']){?>
                        <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member:index','http'=>true),$_smarty_tpl);?>
"  style="float: left; ">  <?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['uname'];?>
您好！</a><a  class="a14" style="margin-left: 10px;" href="<?php echo smarty_function_link(array('ctl'=>'passport:loginout'),$_smarty_tpl);?>
">退出</a>
                <?php }else{ ?>
                 <a href="<?php echo smarty_function_link(array('ctl'=>'passport-signup','http'=>'empty'),$_smarty_tpl);?>
" class="a14">注册</a>
                        <a href="<?php echo smarty_function_link(array('ctl'=>'passport','http'=>'empty'),$_smarty_tpl);?>
" class="a14">登录</a>
            
                <?php }?>
                        
                        <span class="block_lt span36 black8">咨询热线&nbsp;:&nbsp;</span>
                        <span class="block_lt ftw red"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['phone'];?>
</span>

                    </div>
                </div>
                <div class="cl"></div>
            </div>
            <!--优惠信息更多详情页头部结束  -->
            <!--优惠信息更多详情页导航开始  -->
            <div class="favorable_detail_more_top redbgm">
                <div class="w1000 favorable_more_menu">
                    <div class="favorable_more_menu_logo lt bgwhite">
                        <a href="###"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['company']->value['logo'];?>
" width="135" height="70" /></a>
                      <?php if ($_smarty_tpl->tpl_vars['company']->value['is_vip']){?>  <span class="block span34"><font class="f16 red">旗舰店</font></span><?php }?>
                    </div>
                    <div class="favorable_more_menu_r lt">
                        <div class="favorable_more_menu_r_t">
                            <a href="###" class="block_lt f28 white"><?php echo $_smarty_tpl->tpl_vars['company']->value['sort_name'];?>
</a>
                            <span class="block rt span35" style="line-height: 30px;">
                                <font class="ftw f12 white" style="float: left;">信誉指数&nbsp;：</font>
                                <div id="company_xy" style="float: left; width: 120px;height: 30px; line-height: 30px;"></div>
                                <font class="ftw f12 white" style="float: left;">总评分&nbsp;:&nbsp;</font><font class="ftw f12 org" style="float: left;"> <?php echo round($_smarty_tpl->tpl_vars['company']->value['scores']/10,1);?>
</font>
                            </span>
                            <script>
                                $(document).ready(function() {
                                    $('#company_xy').raty({
                                        starOn: '/static/script/raty/img/star-on.png',
                                        starOff: '/static/script/raty/img/star-off.png',
                                        starHalf:'/static/script/raty/img/star-half.png',
                                        width: 120,
                                        readOnly: true, score: <?php echo round($_smarty_tpl->tpl_vars['company']->value['scores']/10,1);?>

                                    });

                                });
                            </script>
                            <p class="cl"></p>
                        </div>
                        <div class="favorable_more_menu_r_b">
                            <ul>
                                <li><a title="<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
首页" href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['company_id']->value),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['act']->value=='main'){?>class="current8" <?php }?>>首页</a></li>
                                <li><a title="<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
装修案例" href="<?php echo smarty_function_link(array('ctl'=>'company:xiaoguotu','arg0'=>$_smarty_tpl->tpl_vars['company_id']->value),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['act']->value=='xiaoguotu'){?>class="current8" <?php }?>>装修案例</a></li>
                                <li><a  title="<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
设计团队" href="<?php echo smarty_function_link(array('ctl'=>'company:team','arg0'=>$_smarty_tpl->tpl_vars['company_id']->value),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['act']->value=='team'){?>class="current8" <?php }?>>设计团队</a></li>
                                <li><a title="<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
装修案例" href="<?php echo smarty_function_link(array('ctl'=>'company:news','arg0'=>$_smarty_tpl->tpl_vars['company_id']->value),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['act']->value=='news'){?>class="current8" <?php }?>>装企新闻</a></li>
                                <li><a title="<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
在建工地" href="<?php echo smarty_function_link(array('ctl'=>'company:site','arg0'=>$_smarty_tpl->tpl_vars['company_id']->value),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['act']->value=='site'){?>class="current8" <?php }?>>在建工地</a></li>
                                <li><a title="<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
业主评价" href="<?php echo smarty_function_link(array('ctl'=>'company:dianping','arg0'=>$_smarty_tpl->tpl_vars['company_id']->value),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['act']->value=='dianping'){?>class="current8" <?php }?>>业主评价</a></li>
                                <li><a title="<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
优惠信息" href="<?php echo smarty_function_link(array('ctl'=>'company:youhui','arg0'=>$_smarty_tpl->tpl_vars['company_id']->value),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['act']->value=='youhui'){?>class="current8" <?php }?>>优惠信息</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>  <?php }} ?>