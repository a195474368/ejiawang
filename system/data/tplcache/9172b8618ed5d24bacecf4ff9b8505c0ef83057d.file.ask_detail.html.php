<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 13:21:08
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/content/ask_detail.html" */ ?>
<?php /*%%SmartyHeaderCode:22418765855d806c4775f02-16896902%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9172b8618ed5d24bacecf4ff9b8505c0ef83057d' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/content/ask_detail.html',
      1 => 1412996052,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22418765855d806c4775f02-16896902',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'detail' => 0,
    'member_list' => 0,
    'cate_list' => 0,
    'supply' => 0,
    'item' => 0,
    'MEMBER' => 0,
    'answer' => 0,
    'pager' => 0,
    'answers' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d806c4a9f940_09305206',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d806c4a9f940_09305206')) {function content_55d806c4a9f940_09305206($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_block_calldata')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/block.calldata.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--          主题部分开始       -->
<div class="index_b_bg hauto">
    <!--         你所在的位置开始             -->
    <div class="w1000 mt15 bgwhite ask_list_weizhi">
        <span class="span11 icobg block_lt"></span>
        <span class="block_lt">您当前所在的位置:</span>
        <a title="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
" class="block_lt"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
</a>
        <span class="block_lt">></span>
        <a href="<?php echo smarty_function_link(array('ctl'=>'ask'),$_smarty_tpl);?>
" class="block_lt">问答</a>
        <span class="block_lt">></span>
        <a href="<?php echo smarty_function_link(array('ctl'=>'ask:items'),$_smarty_tpl);?>
" class="block_lt">问答列表</a>
        <span class="block_lt">></span>
        <a href="<?php echo smarty_function_link(array('ctl'=>'ask:detail','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['ask_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
" class="block_lt"><?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
</a>
    </div>
    <div class="cl"></div>
    <!--        你所在的位置结束      -->
    <!--        位置结束下开始       -->
    <div class="ask_detail_main w1000 mt15 hauto">
        <!--        位置结束左面下开始       -->
        <div class="ask_detail_main_l hauto mt5 lt">
            <div class="ask_detail_main_l_t bgwhite hauto">
                <div class="ask_detail_main_l_t_son hauto ">
                    <p class="p10">
                        <span class="block_lt icobg span18"></span>
                        <span class="block_lt span19"><?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
</span>
                    </p>
                    <div class="cl"></div>
                    <p class="p11 mt10">
                        <span class="block_lt"><?php echo $_smarty_tpl->tpl_vars['member_list']->value[$_smarty_tpl->tpl_vars['detail']->value['uid']]['uname'];?>
&nbsp;|&nbsp;分类：<?php echo $_smarty_tpl->tpl_vars['cate_list']->value[$_smarty_tpl->tpl_vars['detail']->value['cat_id']]['title'];?>
&nbsp;|&nbsp;浏览<font class="f12"><?php echo $_smarty_tpl->tpl_vars['detail']->value['views'];?>
</font>次</span>
                        <span class="rt"><?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['detail']->value['dateline']);?>
</span>
                    </p>
                    <div class="cl"></div>
                    <?php if (!empty($_smarty_tpl->tpl_vars['detail']->value['intro'])){?>
                    <p class="p14 mt10 f14">
                        <?php echo $_smarty_tpl->tpl_vars['detail']->value['intro'];?>
 
                    </p>
                    <?php }?>
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['supply']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['index']++;
?>
                    <div  class="weicana">
                        <p class="p20 mt20">
                            <span class="block"><font>补充<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['index']+1;?>
</font></span>
                        </p>
                        <p class="p14 mt10 f14">
                            <?php echo $_smarty_tpl->tpl_vars['item']->value['contents'];?>
 
                        </p>
                    </div>
                    <?php } ?>

                    <?php if ($_smarty_tpl->tpl_vars['detail']->value['uid']==$_smarty_tpl->tpl_vars['MEMBER']->value['uid']&&empty($_smarty_tpl->tpl_vars['detail']->value['answer_id'])){?>
                    <p class="p12 mt20" >
                        <span class="rt span21"><a  class='show_hide' rel='ask_supply' href="javascript:void(0);">我要补充</a></span>
                    </p>
                    <?php }?>
                    <script>
                        $(document).ready(function(e) {
                            $(".show_hide").click(function() {
                                $("#" + $(this).attr('rel')).show(300);
                            });
                        });
                    </script>
                    <div id='ask_supply' class="weicana none">
                        <p class="p20 mt20">
                            <span class="block"><font>补充我的问题</font></span>
                        </p>
                        <form  mini-form="ask"  method="post"  action="<?php echo smarty_function_link(array('ctl'=>'ask:supply','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['ask_id']),$_smarty_tpl);?>
">
                            <textarea  name="content"></textarea>
                            <span class="block rt mt15 mr10">
                                <input type="submit" value=" 我要补充 " />
                            </span>
                        </form>

                    </div>
                </div>
            </div>
            <div class="ask_detail_main_l_t bgwhite hauto mt20">
                <div class="ask_detail_main_l_t_son hauto">
                    <?php if ($_smarty_tpl->tpl_vars['detail']->value['answer_id']){?>
                    <div class="caina ">
                        <!--当问题被采纳的时候会显示出这样的页面-->
                        <p class="p13">
                            <span class="block_lt span22 icobg"></span>
                            <span class="block_lt mt15"><font class="f16 black ftw">网友采纳</font></span>
                            <span class="rt mt15"><font class="f12"><?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['answer']->value['dateline']);?>
</font></span>
                        </p>
                        <div class="cl"></div>
                        <p class="p14 mt10 f14">
                            <?php echo $_smarty_tpl->tpl_vars['answer']->value['contents'];?>

                        </p>
                        <p class="p15 mt20">
                            <span class="block_lt"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['member_list']->value[$_smarty_tpl->tpl_vars['answer']->value['uid']]['face_80'];?>
" width="29" height="29" /></span>
                            <span class="block_lt ml20">
                                <?php echo $_smarty_tpl->tpl_vars['member_list']->value[$_smarty_tpl->tpl_vars['answer']->value['uid']]['uname'];?>

                            </span>  
                        </p>
                        <!-- 当问题被采纳的时候会显示出这样的页面--->
                    </div>
                    <div class="cl"></div>
                    <!--当问题未被采纳的时候会显示出这样的页面-->
                    <?php }?>   
                     <?php if (!$_smarty_tpl->tpl_vars['detail']->value['answer_id']){?>
                    <div class="weicana">
                        <p class="p20 mt20">
                            <span class="block"><font>我来帮他解答</font></span>
                        </p>
                        <form  mini-form="ask"  method="post" action="<?php echo smarty_function_link(array('ctl'=>'ask:answer','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['ask_id']),$_smarty_tpl);?>
">
                            <textarea name='contents'></textarea>
                            <span class="block rt mt15 mr10">
                                <input type="submit" value=" 我要回答 " />
                            </span>
                        </form>

                    </div>
                     <?php }?>
                    <!--当问题未被采纳的时候会显示出这样的页面-->
                    <div class="cl"></div>
                    <p class="p16 mt20"><font>其他热门问题</font></p>
                    <ul class="simple_question">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"ask/ask",'order'=>"views:desc",'item'=>'item','limit'=>"5")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"ask/ask",'order'=>"views:desc",'item'=>'item','limit'=>"5"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li><a title="<{$item.title}>" href="<{link ctl='ask:detail' arg0=$item.ask_id}>"><{$item.title}></a><span class="rt"><{date('Y-m-d',$item.dateline)}></span></li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"ask/ask",'order'=>"views:desc",'item'=>'item','limit'=>"5"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </ul>

                </div>
            </div>
            <div class="ask_detail_main_l_t bgwhite hauto mt20">
                <div class="ask_detail_main_l_t_son hauto">
                    <p class="p18">
                        <span class="block_lt span19">其他<?php echo (($tmp = @$_smarty_tpl->tpl_vars['pager']->value['count'])===null||$tmp==='' ? '0' : $tmp);?>
条回答</span>
                    </p>
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['answers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>

                    <div class=" mt10">
                        <span class="block_lt">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['member_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['face_80'];?>
" width="29" height="29">
                            <?php echo $_smarty_tpl->tpl_vars['member_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['uname'];?>

                        </span>
                        <span class="rt"><font class="f12"><?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</font>   <?php if ($_smarty_tpl->tpl_vars['detail']->value['uid']==$_smarty_tpl->tpl_vars['MEMBER']->value['uid']&&empty($_smarty_tpl->tpl_vars['detail']->value['answer_id'])){?><a mini-act='最佳答案' href="<?php echo smarty_function_link(array('ctl'=>'ask:yes','arg0'=>$_smarty_tpl->tpl_vars['item']->value['answer_id']),$_smarty_tpl);?>
">设为最佳答案</a><?php }?></span>       
                    </div>

                    <div class="cl"></div>
                    <div style="width:700px; padding: 20px;">
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['contents'];?>

                    </div>

                    <div class="cl"></div>

                    <?php } ?>


                </div>
            </div>
        </div>
        <!--        位置结束左面下结束       -->

        <!--        位置结束右面下开始       -->
        <div class="ask_detail_main_r hauto mt5 lt ml20">

            <div class="ask_search_r lt mb20">
                <p>
                    <span class="block_lt wenhao icobg"></span>
                    <span class="block_lt">
                        <font class="f20 ftw blackb">让每个疑问都有</font><br />
                        <font class="f24 ftw red"><i>解答!</i></font>
                    </span>
                </p>
                <div class="cl"></div>
                <a href="<?php echo smarty_function_link(array('ctl'=>'ask:items','arg0'=>0,'arg1'=>2),$_smarty_tpl);?>
" class="a3 a5">我要回答</a>
                <a href="<?php echo smarty_function_link(array('ctl'=>'ask:make'),$_smarty_tpl);?>
" class="a4 a5">我要提问</a>
            </div>
            <?php echo $_smarty_tpl->getSubTemplate ('block/ask_right.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>
    </div>
    <div class="cl h20"></div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  <?php }} ?>