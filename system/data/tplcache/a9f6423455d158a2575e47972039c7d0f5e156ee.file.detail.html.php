<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:26:13
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/content/detail.html" */ ?>
<?php /*%%SmartyHeaderCode:66948084755d7ebd5c1c001-88761571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9f6423455d158a2575e47972039c7d0f5e156ee' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/content/detail.html',
      1 => 1440053862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66948084755d7ebd5c1c001-88761571',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'detai' => 0,
    'detail' => 0,
    'up_item' => 0,
    'next_item' => 0,
    'contents' => 0,
    'item' => 0,
    'request' => 0,
    'pager' => 0,
    'items' => 0,
    'userList' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ebd5e88692_01068018',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ebd5e88692_01068018')) {function content_55d7ebd5e88692_01068018($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_format')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.format.php';
if (!is_callable('smarty_function_widget')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.widget.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!----------头部和导航公共部分------------> 
<!--         主题部分开始           -->
<div class="index_b_bg hauto">
    <!--         你所在的位置开始             -->
    <div class="w1000 mt15 bgwhite ask_list_weizhi">
        <span class="span11 icobg block_lt"></span>
        <span class="block_lt">您当前所在的位置:</span>
        <a title="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
" href="\" class="block_lt"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
</a>
        <span class="block_lt">></span>
        <a title="学装修" href="<?php echo smarty_function_link(array('ctl'=>'content'),$_smarty_tpl);?>
" class="block_lt">学装修</a>
        <span class="block_lt">></span>
        <a title="装修学堂" href="<?php echo smarty_function_link(array('ctl'=>'content:items'),$_smarty_tpl);?>
" class="block_lt">装修学堂</a>
        <?php if ($_smarty_tpl->tpl_vars['detai']->value['cat_title']){?>
        <span class="block_lt">></span>
        <a href="<?php echo smarty_function_link(array('ctl'=>'content:items','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['cat_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['detai']->value['cat_title'];?>
" class="block_lt"><?php echo $_smarty_tpl->tpl_vars['detai']->value['cat_title'];?>
</a>
        <?php }?>
        <span class="block_lt">></span>
        <a href="<?php echo smarty_function_link(array('ctl'=>'content:detail','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['article_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
" class="block_lt"><?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
</a>
    </div>
    <div class="cl"></div>
    <!--        你所在的位置结束      -->
    <div class="ask_detail_main w1000 mt15 hauto">
        <!--        位置结束左面下开始       -->
        <div class="ask_detail_main_l hauto mt5 lt bgwhite">
            <div class="learn_detail_l_t hauto bgwhite">
                <div class="learn_detail_l_t_content hauto">
                    <h2><?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
</h2>
                    <p class="p54">
                        <span class="block_lt span63">
                            <font class="org"><?php echo $_smarty_tpl->tpl_vars['detail']->value['views'];?>
</font><font>人已浏览</font>
                            <font>时间&nbsp;:&nbsp;</font><font><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['detail']->value['dateline']);?>
</font> 
                        </span>
                        <span class="block rt span64">
                          <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone"></a><a href="#" class="bds_tsina" data-cmd="tsina"></a><a href="#" class="bds_tqq" data-cmd="tqq"></a><a href="#" class="bds_renren" data-cmd="renren"></a><a href="#" class="bds_t163" data-cmd="t163"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","t163"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","t163"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=86835285.js?cdnversion='+~(-new Date()/36e5)];</script>
                        </span>
                    </p>
                    <p class="cl"></p>
                    <p class="p55 bodr mt15 hauto">
                        导语：<?php echo $_smarty_tpl->tpl_vars['detail']->value['desc'];?>

                    </p>
                    <div class="fengshui_content mt15 hauto">
                        <div class="content">
                            <?php echo $_smarty_tpl->tpl_vars['detail']->value['content'];?>

                        </div>
                        <p class="cl"></p>
                        <p class="h10 bodr_b"></p>
                        <p>
                            <?php if ($_smarty_tpl->tpl_vars['up_item']->value){?>
                            <a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'content:detail','arg0'=>$_smarty_tpl->tpl_vars['up_item']->value['article_id']),$_smarty_tpl);?>
"  title="<?php echo $_smarty_tpl->tpl_vars['up_item']->value['title'];?>
" class="red">上一篇：<?php echo $_smarty_tpl->tpl_vars['up_item']->value['title'];?>
</a><br />
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['next_item']->value){?>
                             <a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'content:detail','arg0'=>$_smarty_tpl->tpl_vars['next_item']->value['article_id']),$_smarty_tpl);?>
" title='<?php echo $_smarty_tpl->tpl_vars['next_item']->value['title'];?>
' class="red">下一篇：<?php echo $_smarty_tpl->tpl_vars['next_item']->value['title'];?>
</a><br />
                            <?php }?>
                        </p>
                        <p>
                            <b class="f16">相关推荐&nbsp;:&nbsp;</b>
                        </p>
                        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contents']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                        <p><a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'content:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['article_id']),$_smarty_tpl);?>
" title='<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
' class="black"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></p>
                        <?php } ?>
                        <div class="h20"></div>
                    </div>


                </div>
            </div>	




        </div>
        <!--        位置结束左面下结束       -->

        <!--        位置结束右面下开始       -->
        <div class="ask_detail_main_r hauto mt5 lt ml20">
            <?php echo $_smarty_tpl->getSubTemplate ("block/tenders.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
            <div class="cl"></div>
            <div class="ads8 mt15 hauto">
                <?php echo smarty_function_widget(array('id'=>"adv",'name'=>"文章列表页右侧广告位",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"5"),$_smarty_tpl);?>

            </div>
            <div class="today_tuijian hauto">
                <h2 class="mb10 mt10">经典日记</h2>
                <div class="today_tuijian_b hauto bgwhite">
                    <?php echo smarty_function_widget(array('id'=>'diary/right','limit'=>10,'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>

                </div>
            </div>
        </div>
        
    </div>
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
                   
                    <textarea  style="width: 895px;"  rows="5" name="content" ></textarea>
                    
                </div>
                <div class="fbpl rt mt20 mb30"> 
                        <input type="submit" mini-submit='#comment_form' action="<?php echo smarty_function_link(array('ctl'=>'content:detailComment','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['article_id']),$_smarty_tpl);?>
" name="fbpl" value="发表评论" class="baocunpl"/>
                </div>
                </form>
            </div>
        </div>
		<div class="cl h20"></div>
    <!--  评论结束 -->     

    <?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  <?php }} ?>