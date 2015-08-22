<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:19:08
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/designer_detail.html" */ ?>
<?php /*%%SmartyHeaderCode:185907991855d7ea2c295e48-44209090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37b9f0b69199ecb4a9d4f3c5967bf8ac0d8567c8' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/designer_detail.html',
      1 => 1440050796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185907991855d7ea2c295e48-44209090',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MEMBER' => 0,
    'member' => 0,
    'designer' => 0,
    'company' => 0,
    'designer_values' => 0,
    'item' => 0,
    'it' => 0,
    'myattr' => 0,
    'case' => 0,
    'item2' => 0,
    'photos' => 0,
    'case_values' => 0,
    'itemcase' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea2c664556_86890027',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea2c664556_86890027')) {function content_55d7ea2c664556_86890027($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.cutstr.php';
?><!DOCTYPE html>
<html>
    <?php echo $_smarty_tpl->getSubTemplate ("block/sheader.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <body>
        <iframe id="miniframe" name="miniframe" style="display:none;"></iframe>
        <div id="wrap">
            <!-- 主题部分开始     -->
            <div class="designer_detail_bg">
				<div class="designer_opacity"></div>
                <!--  导航区域开始   -->
                <div class="designer_detail_bg_t">
                    <div class="w1000 designer_son_nav">
                        <a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/images/son_logo.png" width="185" height="60" /></a>
                        <ul>
                            <li><a href="\">首页</a></li>
                            <li><a href="<?php echo smarty_function_link(array('ctl'=>'case'),$_smarty_tpl);?>
">效果图</a></li>
                            <li><a href="<?php echo smarty_function_link(array('ctl'=>'gs'),$_smarty_tpl);?>
">找装修公司</a></li>
                            <li><a href="<?php echo smarty_function_link(array('ctl'=>'designer'),$_smarty_tpl);?>
">找设计师</a></li>
                            <li><a href="<?php echo smarty_function_link(array('ctl'=>'tenders'),$_smarty_tpl);?>
">我要装修</a></li>
                        </ul>
                        <p class="rt mt10">


                            <?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['uname']){?>
                            <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member:index','http'=>true),$_smarty_tpl);?>
"  >  <?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['uname'];?>
您好！</a><font class="white">&nbsp;|&nbsp;</font><a  href="<?php echo smarty_function_link(array('ctl'=>'passport:loginout'),$_smarty_tpl);?>
">退出</a>
                            <?php }else{ ?>
                            <a href="<?php echo smarty_function_link(array('ctl'=>'passport-signup','http'=>true),$_smarty_tpl);?>
" >注册</a><font class="white">&nbsp;|&nbsp;</font>
                            <a href="<?php echo smarty_function_link(array('ctl'=>'passport','http'=>true),$_smarty_tpl);?>
" >登录</a>

                            <?php }?>

                        </p>
                    </div>

                </div>
                <!-- 导航区域结束  -->
               
                <div class="cl"></div>

                <!-- 设计师简介开始 -->
                <div class="designer_describe w1000  mt40">
                    <div class="designer_describe_l lt bgwhite">
                        <a title="<?php echo $_smarty_tpl->tpl_vars['member']->value['realname'];?>
的博客" href="<?php echo smarty_function_link(array('ctl'=>'blog','arg0'=>$_smarty_tpl->tpl_vars['member']->value['uid']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['member']->value['face'];?>
" width="200" height="200" /></a>
                        <div class="lt designer_ms">
                            <p class="mb20"></p>
                            <h2><?php echo $_smarty_tpl->tpl_vars['designer']->value['realname'];?>
</h2>
                            <p>公司：<?php if ($_smarty_tpl->tpl_vars['company']->value){?><a title="<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
" target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id']),$_smarty_tpl);?>
" class="black8"><?php echo $_smarty_tpl->tpl_vars['company']->value['sort_name'];?>
</a><?php }?></p>
                            <p>毕业于：<?php echo $_smarty_tpl->tpl_vars['designer']->value['school'];?>
</p>                          
                            <a mini-load='委托设计' href="<?php echo smarty_function_link(array('ctl'=>'designer:yuyue','arg0'=>$_smarty_tpl->tpl_vars['member']->value['uid'],'http'=>'empty'),$_smarty_tpl);?>
" class="block a10 orgbgg mt15">委托设计</a>
                        </div>
                    </div>
                    <div class="designer_describe_r lt">
                        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['designer_values']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['index']++;
?>
                        <p class="p29 bodr_b_x <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['index']==0){?>mt15<?php }?>"><b ><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
:</b>

                            <?php  $_smarty_tpl->tpl_vars['it'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it']->key => $_smarty_tpl->tpl_vars['it']->value){
$_smarty_tpl->tpl_vars['it']->_loop = true;
?>
                            <?php if (in_array($_smarty_tpl->tpl_vars['it']->value['attr_value_id'],$_smarty_tpl->tpl_vars['myattr']->value)){?>
                            <span style="margin-left: 5px;"><?php echo $_smarty_tpl->tpl_vars['it']->value['title'];?>
</span>
                            <?php }?>
                            <?php } ?>
                        </p>
                        <?php } ?>
                        <p class="p29 bodr_b_x"><b>个人简介: </b><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['designer']->value['txt'],100,'...');?>
 <font color="red"><a mini-load='委托设计' href="<?php echo smarty_function_link(array('ctl'=>'designer:yuyue','arg0'=>$_smarty_tpl->tpl_vars['member']->value['uid'],'http'=>'empty'),$_smarty_tpl);?>
">立级预约</a></font></p>
                        <!-- <p class="p29"></p> -->
                    </div>

                </div>
                <!-- 设计师简介结束 -->
                <div class="cl"></div>
                <!--  设计师案例开始 -->

                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['case']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['ct']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['ct']['index']++;
?>
                <div class="designer_case w1000 hauto mt20">
                    <div class="designer_case_l lt bgwhite">
                        <h3 class="ml20 mt20"><a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></h3>
                        <ul>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value['lastphotos']){?>   
                            <?php  $_smarty_tpl->tpl_vars['item2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['lastphotos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item2']->key => $_smarty_tpl->tpl_vars['item2']->value){
$_smarty_tpl->tpl_vars['item2']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['index']++;
?>
                            <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['index']<4){?>
                            <li><a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['photos']->value[$_smarty_tpl->tpl_vars['item2']->value]['photo'];?>
" width="260" height="180"/></a></li>

                            <?php }?>
                            <?php } ?>
                            <?php }?>
                        </ul>
                        <div class="cl"></div>
                        <div class="h30"></div>
                    </div>
                    <div class="designer_case_r lt">
                        <p>
                            <span class="block f18"><b>Case<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['ct']['index']+1;?>
</b></span>

                            <span class="span_case">案例名称：<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</span>
                            <?php  $_smarty_tpl->tpl_vars['itemcase'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemcase']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['case_values']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['itemcase']->key => $_smarty_tpl->tpl_vars['itemcase']->value){
$_smarty_tpl->tpl_vars['itemcase']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['index']++;
?>
                            <span class="span_case"><?php echo $_smarty_tpl->tpl_vars['itemcase']->value['title'];?>
:

                                <?php  $_smarty_tpl->tpl_vars['it'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['itemcase']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it']->key => $_smarty_tpl->tpl_vars['it']->value){
$_smarty_tpl->tpl_vars['it']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value['attr'][$_smarty_tpl->tpl_vars['it']->value['attr_value_id']]){?>
                                <?php echo $_smarty_tpl->tpl_vars['it']->value['title'];?>
 &nbsp;&nbsp;
                                <?php }?>
                                <?php } ?>
                            </span>
                            <?php } ?>

                            <span class="span_case">人气指数：<?php echo $_smarty_tpl->tpl_vars['item']->value['views'];?>
</span>
                            <span class="span_case">喜欢数量：<?php echo $_smarty_tpl->tpl_vars['item']->value['likes'];?>
</span>
                            <span class="span_case1">
                                <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
">
                                    案例描述：<?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['intro'],100,'..');?>

                                </a>
                            </span>
                        </p>

                    </div>
                </div>
                <?php } ?>
                
                <div class="designer_case w1000 bgwhite hauto mt20">
                	<div class="page">
                   		<?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>

                    </div>
                </div>
                <div class="h20"></div>

				</div>
             
                <?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
              <?php }} ?>