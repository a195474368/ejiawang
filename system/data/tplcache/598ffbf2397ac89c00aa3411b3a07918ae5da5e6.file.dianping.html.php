<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:22:23
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/company/dianping.html" */ ?>
<?php /*%%SmartyHeaderCode:173571511055d7eaefdd46e2-72469654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '598ffbf2397ac89c00aa3411b3a07918ae5da5e6' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/company/dianping.html',
      1 => 1402664332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173571511055d7eaefdd46e2-72469654',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_id' => 0,
    'pager' => 0,
    'items' => 0,
    'item' => 0,
    'CONFIG' => 0,
    'company' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7eaf003d156_95626748',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7eaf003d156_95626748')) {function content_55d7eaf003d156_95626748($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.cutstr.php';
if (!is_callable('smarty_modifier_format')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.format.php';
?><?php echo $_smarty_tpl->getSubTemplate ('company/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- 详情页的公共部分 -->
<!-- 主题部分开始 -->
<div class="index_b_bg hauto">
    <!-- 当前位置开始   -->
    <div class="favor_detail_weizhi w1000 bodr_b mb20">
        <font>你当前的位置：</font>
        <a href="<?php echo smarty_function_link(array('ctl'=>'company:dianping','arg0'=>$_smarty_tpl->tpl_vars['company_id']->value),$_smarty_tpl);?>
">企业评价</a>

    </div>
    <!-- 当前位置结束   -->
    <!-- 企业评价主题部分开始 -->
    <div class="qyjs_main w1000 hauto">
        <!-- 企业评价主题部分左面开始 -->
        <?php echo $_smarty_tpl->getSubTemplate ('company/left.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
		
        <!-- 企业评价主题部分左面结束 -->
        <!-- 企业介绍主题部分右面开始 -->
        <div class="qyjs_main_r lt hauto ml20">
            <h2>
                <span class="block_lt f22">业主评价</span>
                <span class="block rt f14">共有<font class="red"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['pager']->value['count'])===null||$tmp==='' ? '0' : $tmp);?>
</font>条评论</span>
            </h2>
            <div class="cl"></div>
            <div class="yzpj_content hauto bgwhite mt10">
                <div class="yzpj_content_detail hauto">

                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['index']++;
?>
                    <div class="lt ml15 yzpj_content_detail_b">
                        <p class="p44 bodr_b hauto mb10">
                            <?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['index']+1;?>
、<font class="red"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['name'],3,'**');?>
</font>&nbsp;<font>
                            <?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['company_dianping']['score1'];?>
:<?php echo $_smarty_tpl->tpl_vars['item']->value['score1'];?>
 &nbsp;
                            <?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['company_dianping']['score2'];?>
:<?php echo $_smarty_tpl->tpl_vars['item']->value['score2'];?>
 &nbsp;
                            <?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['company_dianping']['score3'];?>
:<?php echo $_smarty_tpl->tpl_vars['item']->value['score3'];?>
 &nbsp;
                            <?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['company_dianping']['score4'];?>
:<?php echo $_smarty_tpl->tpl_vars['item']->value['score4'];?>
 &nbsp;
                            <?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['company_dianping']['score5'];?>
:<?php echo $_smarty_tpl->tpl_vars['item']->value['score5'];?>
 &nbsp;
                            &nbsp;评论时间：<?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</font><br />
                            <?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
                       
                        </p>
                        <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['reply'])){?>
                        <p class="p45">

                            <span class="block_lt  ml30 span43">
                                <font class="red"><?php echo $_smarty_tpl->tpl_vars['company']->value['sort_name'];?>
：</font><br />
                                <?php echo $_smarty_tpl->tpl_vars['item']->value['reply'];?>

                            </span>
                        </p>
                        <?php }?>
                        <p class="cl"></p>
                        <p class="mt10"></p>

                    </div>
                    <?php } ?>


                </div>
            </div>

            <div class="yzpj_page bgwhite hauto mt20">
                <div class="page"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</div>
            </div>
            <h2 class='mt20'>
                <span class="block_lt f22">我要评价</span>

            </h2>
            <div class="yzpj_page bgwhite hauto mt20">
                <form  mini-form="company" action="<?php echo smarty_function_link(array('ctl'=>'company:save','arg0'=>$_smarty_tpl->tpl_vars['company_id']->value,'http'=>true),$_smarty_tpl);?>
" method="post">
                    <table width="100%" style="height: 500px;" cellspacing="0" cellpadding="0" border="0" align="left" >
                        <tr height="30">
                            <td width="70" align="right"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['company_dianping']['score1'];?>
：</td>
                            <td width="200" align="left">
                                <div rel='data[score1]' class="jq_score" ></div>
                            </td>
                            <td width="70" align="right"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['company_dianping']['score2'];?>
：</td>
                            <td width="200" align="left">
                                <div  rel='data[score2]' class="jq_score"></div>
                            </td>
                        </tr>
                        <tr height="30">
                            <td width="70" align="right"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['company_dianping']['score3'];?>
：</td>
                            <td width="200" align="left">
                                <div rel='data[score3]' class="jq_score"></div>
                            </td>
                            <td width="70" align="right"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['company_dianping']['score4'];?>
：</td>
                            <td width="200" align="left">
                                <div rel='data[score4]' class="jq_score"></div>
                            </td>
                        </tr>
                        
                        <tr height="30">
                            <td width="70" align="right"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['company_dianping']['score5'];?>
：</td>
                            <td width="200" align="left">
                                <div rel='data[score5]' class="jq_score"></div>
                            </td>
                            <td width="70" align="right"></td>
                            <td width="200" align="left">
                               
                            </td>
                        </tr>
                        <script>
                            $(document).ready(function() {
                                $(".jq_score").each(function(){
                                    $(this).raty({
                                    starOn: '/static/script/raty/img/star-on.png',
                                    starOff: '/static/script/raty/img/star-off.png',
                                    starHalf: '/static/script/raty/img/star-half.png',
                                    width: 200,
                                    scoreName: $(this).attr('rel')
                                });
                                });


                            });
                        </script>

                        <tr height="90">
                            <td align="right">评价内容：</td>
                            <td align="left" colspan="3">
                                <textarea rows="4" cols="30" style="width:500px; height: 70px; line-height: 18px; padding: 5px 0px;  border:1px solid #DDD; color:#888888;font-size: 12px;" 
                                          name="data[content]" id="dianping"></textarea>
                                <span id="bookpjTip" class="block">写点评价吧，您的评价内容对您的售后服务质量有重要监督作用，对其他用户具有重要参考价值。</span>
                            </td>
                        </tr>
                        <tr height="90">
                            <td align="right">装修项目：</td>
                            <td align="left" colspan="3">
                                <input type="text" id="home_name" value="" maxlength="16" style="width:180px; border:1px solid #aaa; height: 20px;" name="data[home_name]" size="15">
                                <span id="bookdescTip" class="block">如:描述您的装修小区，面积，风格等等。便于公司看到您的评价后进行售后服务。2室房屋装修</span>
                            </td>
                        </tr>
                        <tr height="30">
                            <td align="right" style="LINE-HEIGHT: 30px; HEIGHT: 30px">称呼：</td>
                            <td align="left" style="LINE-HEIGHT: 30px; HEIGHT: 30px" colspan="3">
                                <input type="text" id="name" value="" maxlength="16" style="width:180px; border:1px solid #aaa; height: 20px;" name="data[name]" size="15">
                                <span id="realNameTip">只能输入1-16个字</span>
                            </td>
                        </tr>
                        <tr height="30">
                            <td align="right" style="LINE-HEIGHT: 30px; HEIGHT: 30px">手机号码：</td>
                            <td align="left" style="LINE-HEIGHT: 30px; HEIGHT: 30px" colspan="3">
                                <input type="text" size="32" name="data[mobile]" id="contact" maxlength="100" style="width:180px; border:1px solid #aaa;color:#888888; height: 20px;" value="">
                                <span id="contactTip">用于本站解决争端或提供更优质的服务(本站绝对保密)</span>
                            </td>
                        </tr>
                        <tr height="30">
                            <td></td>
                            <td>
                                <input style="height: 30px; width: 120px; line-height: 30px; font-size: 14px;margin-bottom:10px;" type="submit"  value="我要评价"/>
                            </td>
                        </tr>
                    </table>
                </form>

            </div>

        </div>
        <!-- 企业评价主题部分右面结束 -->      
    </div>
    <!-- 企业评价主题部分结束 -->
    <div class="h30"></div>
</div> 
<!-- 主题部分结束 -->
<?php echo $_smarty_tpl->getSubTemplate ('company/foot.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>