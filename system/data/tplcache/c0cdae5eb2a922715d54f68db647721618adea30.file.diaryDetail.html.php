<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:58:41
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/content/diaryDetail.html" */ ?>
<?php /*%%SmartyHeaderCode:5312885655d7f371aa7803-95965627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0cdae5eb2a922715d54f68db647721618adea30' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/content/diaryDetail.html',
      1 => 1440053783,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5312885655d7f371aa7803-95965627',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'detail' => 0,
    'pager' => 0,
    'member' => 0,
    'home' => 0,
    'cfg_type' => 0,
    'cfg_setting' => 0,
    'company' => 0,
    'contents' => 0,
    'item' => 0,
    'cfg_status' => 0,
    'items' => 0,
    'userList' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7f371e77de5_25605303',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7f371e77de5_25605303')) {function content_55d7f371e77de5_25605303($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_format')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--         主题部分开始           -->
<div class="index_b_bg hauto">
    <!--         你所在的位置开始             -->
    <div class="w1000 bgwhite ask_list_weizhi">
        <span class="span11 icobg block_lt"></span>
        <span class="block_lt">您当前所在的位置:</span>
       
            <a title="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
" href="\" class="block_lt"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
</a>
        <span class="block_lt">></span>
        <a title="学装修" href="<?php echo smarty_function_link(array('ctl'=>'content'),$_smarty_tpl);?>
" class="block_lt">学装修</a>
        <span class="block_lt">></span>
        <a href="<?php echo smarty_function_link(array('ctl'=>'content:diary'),$_smarty_tpl);?>
" title="装修日记" class="block_lt">装修日记</a>
        <span class="block_lt">></span>
        <a title="<?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'content:diaryDetail','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['diary_id']),$_smarty_tpl);?>
" class="block_lt"><?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
</a>
    </div>
    <div class="cl"></div>
    <!--        你所在的位置结束      -->
    <!--  日记档案开始  -->
    <div class="w1000 mt10 bgwhite hauto dirary">
        <div class="dirary_l lt hauto">
            <p>
                <span class="block_lt span81 acitivity_ico1 mt5 mr10"></span>
                <span class="f22 black">日记档案</span>
            </p>
            <div class="dirary_l_c hauto">
                <div class="dirary_l_c_l lt hauto">
                     <a title="<?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'content:diaryDetail','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['diary_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['detail']->value['face_pic'];?>
" width="190" height="190" /></a>
                    <span class="block_lt mt10 mr10">
                       <img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['member']->value['face_32'];?>
" width="40" height="40"/>
                    </span>
                    <span class="block_lt mt10">
                        <font>由</font><font class="org"><?php echo $_smarty_tpl->tpl_vars['member']->value['uname'];?>
</font><br />
                        <font>发表</font>
                    </span>
                </div>
                <div class="dirary_l_c_r lt hauto ml20">
                    <p><?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
</p>
                    <p>
                        <span class="block_lt">
                            <font>小区名称&nbsp;：&nbsp;</font>
                            <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['home']->value['home_name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'home:detail','arg0'=>$_smarty_tpl->tpl_vars['home']->value['id']),$_smarty_tpl);?>
" class="black"><?php echo $_smarty_tpl->tpl_vars['home']->value['home_name'];?>
</a>
                            <a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'home:maps'),$_smarty_tpl);?>
" class="black">(在地图上查看)</a>
                        </span>
                        <span class="block_lt span82 icobg ml10"></span>
                    </p>
                    <p class="cl"></p>
                    <p>
                        装修方式：<?php echo $_smarty_tpl->tpl_vars['cfg_setting']->value[$_smarty_tpl->tpl_vars['cfg_type']->value['way']][$_smarty_tpl->tpl_vars['detail']->value['way_id']];?>

                    </p>
                    <p>房屋类型&nbsp;：&nbsp;<?php echo $_smarty_tpl->tpl_vars['cfg_setting']->value[$_smarty_tpl->tpl_vars['cfg_type']->value['house_type']][$_smarty_tpl->tpl_vars['detail']->value['type_id']];?>
<a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'home:detail','arg0'=>$_smarty_tpl->tpl_vars['home']->value['id']),$_smarty_tpl);?>
" class="red">(查看户型图)</a></p>
                    <p>合同总价&nbsp;:&nbsp;<span class="red"><?php echo $_smarty_tpl->tpl_vars['detail']->value['total_price'];?>
</span></p>
                    <p>
                        <span>开工时间&nbsp;：&nbsp;<?php echo $_smarty_tpl->tpl_vars['detail']->value['start_date'];?>
&nbsp;&nbsp;</span>
                        <span>竣工时间：<?php echo $_smarty_tpl->tpl_vars['detail']->value['end_date'];?>
</span>
                    </p>
                   
                    <p>
                        <font>日记&nbsp;:&nbsp;</font><font class="red">共<?php echo $_smarty_tpl->tpl_vars['detail']->value['content_num'];?>
篇</font>&nbsp;&nbsp;
                        <font>阅读&nbsp;:&nbsp;</font><font class="red"><?php echo $_smarty_tpl->tpl_vars['detail']->value['pv_num'];?>
</font>&nbsp;&nbsp;
                        <font>评论&nbsp;:&nbsp;</font><font class="red"><?php echo $_smarty_tpl->tpl_vars['detail']->value['ping_num'];?>
</font>
                    </p>
                </div>
            </div>
            <div class="cl"></div>
            <div class="dirary_l_b hauto mt30 mb15">
                  <a  title="<?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
"  href="<?php echo smarty_function_link(array('ctl'=>'content:diaryDetail','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['diary_id']),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['detail']->value['status']>=1){?>class="current14"<?php }?>>开工大吉</a>
                        <span class="block_lt span56">—</span>
                        <a <?php if ($_smarty_tpl->tpl_vars['detail']->value['status']>=2){?>class="current14"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
"  href="<?php echo smarty_function_link(array('ctl'=>'content:diaryDetail','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['diary_id']),$_smarty_tpl);?>
">水电改造</a>
                        <span class="block_lt span56">—</span>
                        <a <?php if ($_smarty_tpl->tpl_vars['detail']->value['status']>=3){?>class="current14"<?php }?>  title="<?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
"  href="<?php echo smarty_function_link(array('ctl'=>'content:diaryDetail','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['diary_id']),$_smarty_tpl);?>
">泥瓦工</a>
                        <span class="block_lt span56">—</span>
                        <a <?php if ($_smarty_tpl->tpl_vars['detail']->value['status']>=4){?>class="current14"<?php }?>  title="<?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
"  href="<?php echo smarty_function_link(array('ctl'=>'content:diaryDetail','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['diary_id']),$_smarty_tpl);?>
">木工</a>
                        <span class="block_lt span56">—</span>
                        <a <?php if ($_smarty_tpl->tpl_vars['detail']->value['status']>=5){?>class="current14"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
"  href="<?php echo smarty_function_link(array('ctl'=>'content:diaryDetail','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['diary_id']),$_smarty_tpl);?>
">油漆</a>
                        <span class="block_lt span56">—</span>
                        <a <?php if ($_smarty_tpl->tpl_vars['detail']->value['status']>=6){?>class="current14"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
"  href="<?php echo smarty_function_link(array('ctl'=>'content:diaryDetail','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['diary_id']),$_smarty_tpl);?>
">安装</a>
                        <span class="block_lt span56">—</span>
                        <a <?php if ($_smarty_tpl->tpl_vars['detail']->value['status']>=7){?>class="current14"<?php }?>  title="<?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
"  href="<?php echo smarty_function_link(array('ctl'=>'content:diaryDetail','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['diary_id']),$_smarty_tpl);?>
">验收</a>
            </div>
            <div class="h10"></div>
        </div>
        <div class="dirary_r lt hauto">
            <p class="f16 ftw">施工单位</p>
            <p class="mt10">
                <a target="_blank" title='<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
' href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['company']->value['logo'];?>
" width="150" height="75"/></a>
            </p> 
            <p class="mt10">分享到：<div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone"></a><a href="#" class="bds_tsina" data-cmd="tsina"></a><a href="#" class="bds_tqq" data-cmd="tqq"></a><a href="#" class="bds_renren" data-cmd="renren"></a><a href="#" class="bds_t163" data-cmd="t163"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","t163"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","t163"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=86835285.js?cdnversion='+~(-new Date()/36e5)];</script></p>
        </div>      
    </div>  
    <!--  日记档案结束  -->
    <!--  交房篇开始  -->
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contents']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['index']++;
?>
    <div class="w1000 hauto jiaofang bgwhite mt20">
        <p>
            <span class="block_lt f18 ftw red"><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['index']+1;?>
、<?php echo $_smarty_tpl->tpl_vars['cfg_status']->value[$_smarty_tpl->tpl_vars['item']->value['status']];?>
</span>
            <span class="block rt f14">发表于<?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</span>
        </p>
        <p class="cl"></p>
        <p>
            <?php echo $_smarty_tpl->tpl_vars['item']->value['contents'];?>


        </p>
 
    </div>   
    <?php } ?>
    <!--  交房篇结束  --> 
   
    <!--  评论开始 -->
       <div class="w1000 hauto bgwhite mt10">
            <div class="w900 hauto mt20 pinglun">
                <h2>共<?php echo (($tmp = @$_smarty_tpl->tpl_vars['pager']->value['count'])===null||$tmp==='' ? '0' : $tmp);?>
条评论</h2>
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <div class="pl_contant mt10 hauto">
                    <a href="javascript:void(0);"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['userList']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['face_80'];?>
" width="40" height="40" /></a>
                    <div class="pl_contant_b lt" style=" margin-left: 10px; width: 800px;" >
                        <p>
                            <span class="red"><?php echo $_smarty_tpl->tpl_vars['userList']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['uname'];?>
</span><span style="margin-left: 10px;">时间：<?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</span><span style="margin-left: 10px;">来自：<?php echo $_smarty_tpl->tpl_vars['item']->value['create_ip'];?>
</span>
                        </p>
                        <div><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
</div>
                    </div>
                </div>
                <?php } ?>
              
                <form id='comment_form'>
                <div class=" w900 hauto mt10">
                   
                    <textarea style="width: 800px;" rows="5" name="content" ></textarea>
                    
                </div>
                <div class="fbpl rt mt20 mb30">
                    

                        <input type="submit" mini-submit='#comment_form' action="<?php echo smarty_function_link(array('ctl'=>'content:diaryComment','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['diary_id']),$_smarty_tpl);?>
" name="fbpl" value="发表评论" class="baocunpl"/>
               
                </div>
                </form>
            </div>
		
        </div>
    <!--  评论结束 -->  
		<div class="h20"></div>   


    <script>
        $(document).ready(function() {
            $(".qyrz ul li:last").css('border-right', 'none');
            $(".newest_qdb li").eq(0).mouseover();
        });
    </script>


<?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
           <?php }} ?>