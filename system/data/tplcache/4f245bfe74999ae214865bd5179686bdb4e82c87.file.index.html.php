<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:25:32
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/content/index.html" */ ?>
<?php /*%%SmartyHeaderCode:107825793955d7ebac331ea1-06994594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f245bfe74999ae214865bd5179686bdb4e82c87' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/content/index.html',
      1 => 1402664332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107825793955d7ebac331ea1-06994594',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'article_cates' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ebac84c0a4_62475700',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ebac84c0a4_62475700')) {function content_55d7ebac84c0a4_62475700($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_function_widget')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.widget.php';
if (!is_callable('smarty_block_calldata')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/block.calldata.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--         主题部分开始           -->
<div class="index_b_bg hauto">
    <!--         装修步骤开始      -->
    <div class="learn_decoration_buzhou hauto">
        <div class="w1000 learn_decoration_buzhou_t hauto">
            <h2>按装修流程学习</h2>
            <div class="learn_decoration_buzhou_t_b hauto bgwhite">
                <!-- 步骤一开始-->
                <div class="learn_decoration_buzhou1 hauto">
                    <div class="ready_jieduan lt">
                        <font>装修前-准备阶段</font>
                    </div>
                    <span class="block_lt span67"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/images/jt2.png" /></span>
                    <div class="ready_jieduan_r lt">
                        <div class="ready_jieduan_r_t">
                            <div class="ready_jieduan_r_t1">
                                <span class="block_lt span68 orgbg"><font>收房准备中</font></span>
                                <span class="block_lt span69"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/images/jt2.png" /></span>
                                <span class="block_lt span70">
                                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article_cates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['item']->value['parent_id']==16){?>
                                    <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'content:items','arg0'=>$_smarty_tpl->tpl_vars['item']->value['cat_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a><font>&nbsp;|&nbsp;</font>
                                    <?php }?>
                                    <?php } ?>
                                </span>
                            </div>
                            <div class="cl"></div>
                            <div class="ready_jieduan_r_t1 mt10">
                                <span class="block_lt span68 orgbg"><font>装修准备中</font></span>
                                <span class="block_lt span69"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/images/jt2.png" /></span>
                                <span class="block_lt span70">
                                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article_cates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['item']->value['parent_id']==17){?>
                                    <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'content:items','arg0'=>$_smarty_tpl->tpl_vars['item']->value['cat_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a><font>&nbsp;|&nbsp;</font>
                                    <?php }?>
                                    <?php } ?>
                                </span>
                            </div>
                            <div class="cl"></div>


                        </div>


                    </div>



                </div>
                <!-- 步骤一结束-->
                <!-- 步骤二开始-->
                <div class="learn_decoration_buzhou2 hauto">
                    <div class="learn_decoration_buzhou2_l lt hauto">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/images/jt1.png" class="jt1" />
                        <div class="buzhou2_b">
                            <font>装修中-施工阶段</font>
                        </div>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/images/jt1.png" class="jt1" />
                    </div>
                    <span class="block_lt span71"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/images/jt2.png" /></span>
                    <div class="learn_decoration_buzhou2_r lt hauto">
                        <div class="ready_jieduan_r_t1 mt10">
                            <span class="block_lt span68 pinkbgg"><font>拆改/隐蔽工程</font></span>
                            <span class="block_lt span69"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/images/jt2.png" /></span>
                            <span class="block_lt span70">
                                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article_cates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value['parent_id']==18){?>
                                <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'content:items','arg0'=>$_smarty_tpl->tpl_vars['item']->value['cat_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a><font>&nbsp;|&nbsp;</font>
                                <?php }?>
                                <?php } ?>
                            </span>
                        </div>
                        <div class="cl"></div>
                        <div class="ready_jieduan_r_t1 mt10">
                            <span class="block_lt span68 pinkbgg"><font>泥瓦工程</font></span>
                            <span class="block_lt span69"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/images/jt2.png" /></span>
                            <span class="block_lt span70">
                                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article_cates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value['parent_id']==19){?>
                                <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'content:items','arg0'=>$_smarty_tpl->tpl_vars['item']->value['cat_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a><font>&nbsp;|&nbsp;</font>
                                <?php }?>
                                <?php } ?>

                            </span>
                        </div>
                        <div class="cl"></div>
                        <div class="ready_jieduan_r_t1 mt10">
                            <span class="block_lt span68 pinkbgg"><font>木工工程</font></span>
                            <span class="block_lt span69"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/images/jt2.png" /></span>
                            <span class="block_lt span70">
                                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article_cates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value['parent_id']==20){?>
                                <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'content:items','arg0'=>$_smarty_tpl->tpl_vars['item']->value['cat_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a><font>&nbsp;|&nbsp;</font>
                                <?php }?>
                                <?php } ?>
                            </span>
                        </div>
                        <div class="cl"></div>
                        <div class="ready_jieduan_r_t1 mt10">
                            <span class="block_lt span68 pinkbgg"><font>油漆工程</font></span>
                            <span class="block_lt span69"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/images/jt2.png" /></span>
                            <span class="block_lt span70">
                                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article_cates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value['parent_id']==21){?>
                                <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'content:items','arg0'=>$_smarty_tpl->tpl_vars['item']->value['cat_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a><font>&nbsp;|&nbsp;</font>
                                <?php }?>
                                <?php } ?>

                            </span>
                        </div>
                        <div class="cl"></div>
                        <div class="ready_jieduan_r_t1 mt10">
                            <span class="block_lt span68 pinkbgg"><font>安装/收尾工程</font></span>
                            <span class="block_lt span69"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/images/jt2.png" /></span>
                            <span class="block_lt span70">
                                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article_cates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value['parent_id']==22){?>
                                <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'content:items','arg0'=>$_smarty_tpl->tpl_vars['item']->value['cat_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a><font>&nbsp;|&nbsp;</font>
                                <?php }?>
                                <?php } ?>

                            </span>
                        </div>     
                    </div>



                </div>
                <!-- 步骤二结束-->
                <!-- 步骤三卡开始-->
                <div class="learn_decoration_buzhou3 hauto">
                    <div class="last_jieduan lt">
                        <font>装修后-入住阶段</font>
                    </div>
                    <span class="block_lt span72"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/images/jt2.png" /></span>
                    <div class="ready_jieduan_r lt">
                        <div class="ready_jieduan_r_t mt10">
                            <div class="ready_jieduan_r_t1">
                                <span class="block_lt span68 green_l_bg"><font>软装进行中</font></span>
                                <span class="block_lt span69"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/images/jt2.png" /></span>
                                <span class="block_lt span70">
                                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article_cates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['item']->value['parent_id']==24){?>
                                    <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'content:items','arg0'=>$_smarty_tpl->tpl_vars['item']->value['cat_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a><font>&nbsp;|&nbsp;</font>
                                    <?php }?>
                                    <?php } ?>
                                </span>
                            </div>
                            <div class="cl"></div>
                            <div class="ready_jieduan_r_t1 mt10">
                                <span class="block_lt span68 green_l_bg"><font>即将入住</font></span>
                                <span class="block_lt span69"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/images/jt2.png" /></span>
                                <span class="block_lt span70">
                                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article_cates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['item']->value['parent_id']==25){?>
                                    <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'content:items','arg0'=>$_smarty_tpl->tpl_vars['item']->value['cat_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a><font>&nbsp;|&nbsp;</font>
                                    <?php }?>
                                    <?php } ?>
                                </span>
                            </div>
                            <div class="cl"></div>


                        </div>


                    </div>



                </div>
                <!-- 步骤三结束-->
                <div class="cl"></div>
                <div class="h20"></div>


            </div>
        </div>
        <div class="mt30"></div>
    </div>
    <!--         装修步骤结束      -->
    <!--        日记分享、知识经验开始-->
    <div class="w1000 hauto rijifenxiang mt20 bgwhite">
        <!--左面开始-->
        <div class="rijifenxiang_l lt hauto">
            <?php echo smarty_function_widget(array('id'=>'diary/newitems'),$_smarty_tpl);?>


        </div>
        <!--左面结束-->
        <!--右面开始-->
        <div class="rijifenxiang_l lt hauto ml20">
            <p class="mt20 ml20">
                <span class="lt f22">知识经验</span>
                <span class="rt mt10"><a href="<?php echo smarty_function_link(array('ctl'=>'content:items'),$_smarty_tpl);?>
" class="f12 black">更多>></a></span>
            </p>
            <div class="cl"></div>
            <div class="rijifenxaing_l_ul">
                <ul>                   
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article_cates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['parent_id']==9){?>
                    <li>    <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'content:items','arg0'=>$_smarty_tpl->tpl_vars['item']->value['cat_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></li>
                    <?php }?>
                    <?php } ?>
                </ul>
            </div>
            <div class="cl"></div>
            <div class="rijifenxiang_content hauto mt10">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"article/view",'from'=>'article','order'=>"hot",'limit'=>"1")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"article/view",'from'=>'article','order'=>"hot",'limit'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 
                <p class="lt ml10">
                <div class="block"><b class="f14"><{$item.title}></b></div>
                <div class="block mt20">
                    <a title="<{$item.title}>" target="_blank" href="<{link ctl='content:detail' arg0=$item.article_id}>" class="f14 black"><{$item.desc|cutstr:120:'..'}></a>
                </div>

                </p>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"article/view",'from'=>'article','order'=>"hot",'limit'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
    
                <div class="cl"></div>
                <p class="h10 bodr_b"></p>
                <div class="rijifenxiang_content_ul hauto">
                    <ul>
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"article/view",'from'=>'article','order'=>"new",'limit'=>"5")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"article/view",'from'=>'article','order'=>"new",'limit'=>"5"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 
                        <li><font>[<{$article_cates[$item.cat_id].title}>]</font><a title="<{$item.title}>" target="_blank" href="<{link ctl='content:detail' arg0=$item.article_id}>"><{$item.title}></a></li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"article/view",'from'=>'article','order'=>"new",'limit'=>"5"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
    
                    </ul>
                </div>
            </div>
            <div class="cl"></div>
            <div class="h10"></div>

        </div>
        <!--右面结束-->
    </div>
    <div class="cl"></div>
    <!--        日记分享、知识经验结束-->
    <!--         装修问答开始     -->
    <div class="w1000 decoration_ask hauto mt15">
        <h2>装修问答</h2>
        <div class="decoration_ask_all hauto bgwhite w1000 mt10">
            <div class="decoration_ask_all_t hauto">
                <div class="decoration_ask_all_t_ul hauto">
                    <ul>
                        <li><a href="<?php echo smarty_function_link(array('ctl'=>'ask:items','arg0'=>0,'arg1'=>1),$_smarty_tpl);?>
" class="black">已解决问题</a></li>
                        <li><a href="<?php echo smarty_function_link(array('ctl'=>'ask:items','arg0'=>0,'arg1'=>2),$_smarty_tpl);?>
" class="black">待解决问题</a></li>
                    </ul>      
                </div>
                <div class="decoration_ask_b hauto mt15 decoration_ask_b_1 none">
                    <ul>
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"ask/ask",'answer_id'=>'>:0','order'=>"ask_id:desc",'limit'=>"15")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"ask/ask",'answer_id'=>'>:0','order'=>"ask_id:desc",'limit'=>"15"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 
                        <li>
                            <span class="block_lt span73 red_bg mt5"><font class="f12 white">已解决</font></span>
                            <span class="block_lt span74" >
                                <a target='_blank' title="<{$item.title}>" href="<{link ctl='ask:detail' arg0=$item.ask_id}>" <{if $index <3}>class="red"<{else}> class="f14 black lt"<{/if}>><{$item.title}></a><span class="f14 rt shuliang">回答<{$item.answer_num}></span>
                            </span>
                        </li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"ask/ask",'answer_id'=>'>:0','order'=>"ask_id:desc",'limit'=>"15"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </ul>

                </div>
                <div class="decoration_ask_b hauto mt15 decoration_ask_b_2 none">
                    <ul>
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"ask/ask",'answer_id'=>'0','order'=>"ask_id:desc",'limit'=>"15")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"ask/ask",'answer_id'=>'0','order'=>"ask_id:desc",'limit'=>"15"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 
                        <li>
                            <span class="block_lt span73 graybgg mt5"><font class="f12 white">未解决</font></span>
                            <span class="block_lt span74" >
                                <a target='_blank' title="<{$item.title}>" href="<{link ctl='ask:detail' arg0=$item.ask_id}>" <{if $index <3}>class="red"<{else}> class="f14 black lt"<{/if}>><{$item.title}></a><span class="f14 rt shuliang">回答<{$item.answer_num}></span>
                            </span>
                        </li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"ask/ask",'answer_id'=>'0','order'=>"ask_id:desc",'limit'=>"15"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </ul>

                </div>
                <div class="h10"></div>


            </div>
        </div>
        <script>
            $(document).ready(function() {
                $(".decoration_ask_b ul li:last").find(".span74").css('border-bottom', 'none');
                $(".decoration_ask_b ul li").mouseover(function() {
                    var index = $(this).index();
                    $(".decoration_ask_b ul li").each(function(a) {
                        if (a == index) {
                            $(this).find(".black").css('color', '#F00');
                            $(this).find(".shuliang").css('color', '#FE8007');

                        } else {
                            $(this).find(".black").css('color', '');
                            $(this).find(".shuliang").css('color', '');

                        }
                        ;

                    });
                });

                $(".decoration_ask_all_t_ul ul li").mouseover(function() {
                    var index = $(this).index();
                    $(".decoration_ask_all_t_ul ul li").each(function(a) {
                        var nn = a + 1
                        if (a == index) {
                            $(this).find(".black").css('color', '#666666');
                            $(".decoration_ask_b_" + nn).show();
                        } else {
                            $(this).find(".black").css('color', '');
                            $(".decoration_ask_b_" + nn).hide();
                        }

                    });
                });
                $(".decoration_ask_all_t_ul ul li").eq(0).mouseover();
            });
        </script>
          <div class="h20"></div>

    </div>
    <!--         装修问答结束     -->

    <?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
           <?php }} ?>