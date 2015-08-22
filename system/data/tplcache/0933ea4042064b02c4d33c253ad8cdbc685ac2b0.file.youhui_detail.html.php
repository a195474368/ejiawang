<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:50:34
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/youhui_detail.html" */ ?>
<?php /*%%SmartyHeaderCode:28406793255d7f18a6c3f09-37082913%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0933ea4042064b02c4d33c253ad8cdbc685ac2b0' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/youhui_detail.html',
      1 => 1402664332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28406793255d7f18a6c3f09-37082913',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'detail' => 0,
    'pager' => 0,
    'company' => 0,
    'dianping' => 0,
    'item' => 0,
    'items' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7f18a8e6993_57492505',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7f18a8e6993_57492505')) {function content_55d7f18a8e6993_57492505($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.cutstr.php';
if (!is_callable('smarty_modifier_format')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<!----------头部和导航公共部分------------>
<!--   主题部分开始  -->
<div class="index_b_bg hauto">
    <!--   主题部分头部开始   -->
    <div class="w1000 favorable_detail_main_t hauto mt10">
        <!--   主题部分头部left开始   -->
        <div class="favorable_detail_main_t_l lt hauto bgwhite" style="height: 300px;">
            <div class="favorable_detail_main_t_l_cont hauto">
                <h2>
                    <?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>

                    <font class="red">(活动时间：<?php echo $_smarty_tpl->tpl_vars['detail']->value['bg_date'];?>
-<?php echo $_smarty_tpl->tpl_vars['detail']->value['end_date'];?>
)</font>
                </h2>
                <div class="whj_show">
                    <a href="<?php echo smarty_function_link(array('ctl'=>'gs:detail','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['youhui_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['detail']->value['face_pic'];?>
" width="260" height="180" /></a>
                    <p class="lt">
                        <span class="block">(请抓紧时间报名，全城仅99套，名额有限，先签先得！)</span>
                        <a  <?php if ($_smarty_tpl->tpl_vars['detail']->value['end']){?>mini-load='我要报名' mini-width="555"  href="<?php echo smarty_function_link(array('ctl'=>'gs:sign','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['youhui_id']),$_smarty_tpl);?>
"<?php }else{ ?>href="javascript:void(0);"<?php }?> class="block a12 <?php if ($_smarty_tpl->tpl_vars['detail']->value['end']){?>orgbgg<?php }else{ ?>graybgg<?php }?>">立即报名参加</a>
                    </p>
                    <p class="lt">
                        <span class="block_lt span29 icobg"></span>
                        <span class="block_lt span30 ml20">
                            <font class="ftw blackb f22">剩余<?php echo $_smarty_tpl->tpl_vars['detail']->value['end'];?>
天</font>&nbsp;&nbsp;

                        </span>
                    </p>

                </div>
            </div>  
            <div class="cl"></div> 
            <div class="mt20"></div>                	                 
        </div>
        <!--   主题部分头部left结束   -->    
        <!--   主题部分头部right开始   -->
        <div class="favorable_detail_main_t_r lt hauto bgwhite" style="height:300px;">
            <div class="favorable_detail_main_t_r_cont hauto">
                <h3>合作伙伴</h3>
                <a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
" class="block black8"><?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
</a>
                <div class="mt5 favorable_detail_main_t_r_cont_b hauto">
                    <p><a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
" ><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['company']->value['logo'];?>
" width="135" height="70" /></a></p>
                    <span class="block_lt ml10">
                        <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
"  href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $_smarty_tpl->tpl_vars['company']->value['qq'];?>
&amp;site=qq&amp;menu=yes"  class="mb10 block"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/images/qqjt.png" /></a>

                        <font class="f12">联系电话:</font><br />
                        <font class="f12"><?php echo $_smarty_tpl->tpl_vars['company']->value['tel'];?>
</font>
                    </span>
                </div>
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dianping']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <div class="favorable_pl hauto mt5">

                    <p class="lt mt10">
                        <span class="block"><font class="red"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['name'],3,'**');?>
</font> &nbsp;&nbsp;<?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</span>
                        <span class="block span30 f12 black8">
                            <?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['content'],100,'..');?>

                        </span>
                    </p>
                   

                </div>
                <?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
                <div class="favorable_pl hauto mt5">
                    <p class="lt mt10">
                        暂未有任何<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
评论结果
                    </p>
                </div>
                <?php } ?>

            </div>
        </div>
        <!--   主题部分头部right结束   -->
        <div class="cl"></div>
        <!--   主题部分中部开始   -->
        <div class="w1000 favorable_detail_main_c hauto mt10 bgwhite">
            <p><?php echo $_smarty_tpl->tpl_vars['detail']->value['content'];?>
</p>

        </div>
        <!--   主题部分中部结束   -->
        <!--   主题部分底部开始   -->
        <div class="w1000 favorable_detail_main_b hauto mt15">
            <h2><a href="<?php echo smarty_function_link(array('ctl'=>'gs:youhui'),$_smarty_tpl);?>
">其他最新优惠活动</a></h2>
            <div class="w1000 hauto favorable_detail_main_b_ul">

                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <div class="yhjxz ml10 mt10">
                    <div class="li_top">
                        <span class="block_lt <?php if ($_smarty_tpl->tpl_vars['item']->value['end']){?>span31<?php }else{ ?>span33<?php }?> jxz mr10"></span>
                        <span class="block_lt span32">

                            <font class="f14"><a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'gs:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['youhui_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></font>
                        </span>
                    </div>
                    <div class="cl"></div>
                    <a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'gs:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['youhui_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['face_pic'];?>
" width="260" height="180" /></a>
                    <p class="ml30">
                        <span class="block_lt">
                            <font>距离结束：还有</font><font class="red font2"><?php echo $_smarty_tpl->tpl_vars['item']->value['end'];?>
</font><font>天</font>
                        </span>
                        <a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'gs:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['youhui_id']),$_smarty_tpl);?>
" class="block_lt a13 <?php if ($_smarty_tpl->tpl_vars['item']->value['end']){?>orgbgg<?php }else{ ?>graybgg<?php }?>">去看看</a>
                    </p>
                </div>
                <?php } ?>                       
            </div>

		<div class="h20"></div>

        </div>
        <!--   主题部分底部结束  -->
    </div>    
    <script>
        $(document).ready(function() {
            $(".yhjxz").mouseover(function() {
                $(this).css('border', '1px solid red');
                $(this).css('box-shadow', '0 0 1px 1px #BBB');

            }).mouseout(function() {
                $(this).css('border', '1px solid #FFF');
                $(this).css('box-shadow', '0 0 1px 1px #BBB');
            });
        });
    </script>

    <?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
      <?php }} ?>