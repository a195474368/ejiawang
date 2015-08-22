<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:21:09
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/case_detail.html" */ ?>
<?php /*%%SmartyHeaderCode:154561305255d7eaa51e8f11-31220884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85053a6c5e2f7ac58cbd444def54edf76c164564' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/case_detail.html',
      1 => 1440051565,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154561305255d7eaa51e8f11-31220884',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'detail' => 0,
    'company' => 0,
    'pager' => 0,
    'up_detail' => 0,
    'photos' => 0,
    'item' => 0,
    'next_detail' => 0,
    'request' => 0,
    'items' => 0,
    'userList' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7eaa56a4152_31988282',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7eaa56a4152_31988282')) {function content_55d7eaa56a4152_31988282($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_function_widget')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.widget.php';
if (!is_callable('smarty_block_calldata')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/block.calldata.php';
if (!is_callable('smarty_modifier_format')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!----------头部和导航公共部分------------> 
<!-- 位置区域  -->

<div class="w1000 hauto effect_datial_title mt10 bodr_b">
    <span>  <a title="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
" href="/"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
</a>&nbsp;>&nbsp;</span>
    <span><a href="<?php echo smarty_function_link(array('ctl'=>'case'),$_smarty_tpl);?>
" title="案例图库" >案例图库</a>&nbsp;>&nbsp;</span>
    <a title="<?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['case_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
</a>
</div>
<!-- 商家区域  -->
<div class="sj_js w1000 mt10 hauto">
    <?php if (!empty($_smarty_tpl->tpl_vars['company']->value)){?>
    <div class="sj_logo lt">
        <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id']),$_smarty_tpl);?>
"><img width="25" height="25" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['company']->value['square_logo'];?>
" /></a>
        <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id']),$_smarty_tpl);?>
"><b ><?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
</b></a>
    </div>
    <?php }?>
    <div class="like_design rt">
       
        <span class="span6 lt redbg"><a  target="_blank" href="/tenders.html" >免费申请设计</a></span>
       
        <span class="lt span7"></span>
        <span class="lt span8"><a mini-act="喜欢" href="<?php echo smarty_function_link(array('ctl'=>'case:like','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['case_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['detail']->value['likes'];?>
人喜欢</a></span>
        <span class="lt span9"></span>
        <span class="lt span8"><?php echo $_smarty_tpl->tpl_vars['detail']->value['views'];?>
次浏览</span>          
    </div>
 
</div>



<div class="index_b_bg hauto">
    <div class="w1000 hauto effect_datial_p">
        <!-- 案例区域  -->
        <div class="w1000 hauto mt25  effect_datial_main">

            <div class="img_box">

                <div class="img_con">
                    <div class="img_big">
                        <div class="img_big_dis">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tbody><tr>
                                        <td valign="middle">
                                            <img original="" id="bigpic"  src="">

                                        </td>
                                    </tr>
                                </tbody></table>

                            <div class="img_load"></div>
                            <div class="nph_photo_prev"><a id="photoPrev" class="nph_btn_pphoto" target="_self" hidefocus="true" href="javascript:void(0)"></a></div>
                            <div class="nph_photo_next"><a id="photoNext" class="nph_btn_nphoto" target="_self" hidefocus="true" href="javascript:void(0)"></a></div>
                        </div>
                    </div>
                    <div class="img_small">
                        <?php if (!empty($_smarty_tpl->tpl_vars['up_detail']->value)){?>
                        <div class="other_img">
                            <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['up_detail']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['up_detail']->value['case_id']),$_smarty_tpl);?>
">
                                <img  src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['up_detail']->value['photo'];?>
" height="75" width="100">
                                <p>上一图集</p>
                            </a>
                        </div>
                        <?php }?>
                        <div class="img_list">
                            <div class="img_prev"><a hidefocus="true" href="javascript:void(0)">向上滚动</a></div>
                            <div class="img_scroll" id="small_pic_list">
                                <ul style="top: 0px;">

                                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['photos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                    <li>
                                        <a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="javascript:void(0);">
                                            <img alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" original="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['photo'];?>
"  src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['photo'];?>
_thumb.jpg" height="75" width="100"></a>
                                    </li>
                                    <?php } ?>

                                </ul>
                            </div>
                            <div class="img_next"><a hidefocus="true" href="javascript:void(0)">向下滚动</a></div>
                        </div>

                        <?php if (!empty($_smarty_tpl->tpl_vars['next_detail']->value)){?>
                        <div class="other_img">
                            <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['next_detail']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['next_detail']->value['case_id']),$_smarty_tpl);?>
">
                                <img  src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['next_detail']->value['photo'];?>
" height="75" width="100">
                                <p>下一图集</p>
                            </a>
                        </div>
                        <?php }?>

                    </div>
                </div>

                <div class="tag_tit">
                    <span id='case_intro'><?php echo $_smarty_tpl->tpl_vars['detail']->value['intro'];?>
</span>    
                      
                </div>
                <div class="h10"></div>
            </div>
            <script>

                $(function(e) {
                    var LiNum = $(".img_scroll ul li").length;
                    var LiHeight = 83;
                    var maxNum = LiNum - 4;
                    var anNum = 0;//定义起始位置
                    var yangshi = 0;
                    var fengedian = 3;
                    var times = 5000;
                    var anObj = null; //动画的 OBJ

                    var isAn = false;// 是否开启自动播放  此开关为后面使用

                    //改变样式的状态和大图的SRC 属性已经透明的渐变
                    function changeClass() {
                        $(".img_scroll ul  li ").each(function(a) {
                            if (a == yangshi) {
                                $(this).addClass("now");
                                $(".img_load").show();
                                $("#bigpic").attr("src", $(this).find('img').attr('original')).stop().fadeTo(0, 0.2).stop().fadeTo(2000, 1);
                                document.getElementById("bigpic").onload = function() {
                                    $(".img_load").hide();
                                };
                            }
                            else
                                $(this).removeClass("now");
                        })
                    }

                    //根据全局的yangshi所在的值进行动画的轮播
                    function step() {
                        var localNum;
                        if (yangshi == (LiNum - 1)) {
                            $("#case_end_div").show(300);
                        } else {
                            localNum = yangshi + 1;
                            $(".img_scroll ul  li ").eq(localNum).click();
                        }
                    }
                    //动画的执行者 清楚历史的时间动画 执行行的动画开始
                    function anAction() {
                        if (isAn) {
                            if (anObj !== null) {
                                clearTimeout(anObj);
                                anObj = null;
                            }
                            anObj = setTimeout(step, times);
                        }
                    }

                    //向下点击
                    $(".img_next").click(function(e) {
                        e.preventDefault();
                        //滚动

                        if (anNum < maxNum) {
                            anNum++;
                            $(".img_scroll ul ").stop().animate({marginTop: -(LiHeight) * anNum});
                        }
                        //加样式
                        if (yangshi < (LiNum - 1)) {
                            yangshi++;
                            changeClass();
                        } else {
                            $("#case_end_div").show(300);
                        }
                        anAction();
                    });
                    //向上点击
                    $(".img_prev").click(function(e) {
                        e.preventDefault();
                        //滚动
                        if (anNum > 0) {
                            anNum--;
                            $(".img_scroll ul ").stop().animate({marginTop: -(LiHeight) * anNum});
                        }
                        //加样式
                        if (yangshi > 0) {
                            yangshi--;
                            changeClass();
                        }
                        anAction();

                    });

                    $("#photoNext").click(function(e) {
                        $(".img_next").click();
                    });

                    $("#photoPrev").click(function(e) {
                        $(".img_prev").click();
                    });

                    //图片触发的效果
                    $(".img_scroll ul li ").click(function(e) {
                        e.preventDefault();
                        yangshi = $(this).index();
                        changeClass();
                        anNum = yangshi;
                        if (yangshi >= 0 && yangshi < (LiNum - fengedian)) {
                            $(".img_scroll ul ").stop().animate({marginTop: -(LiHeight) * anNum});
                        }
                        anAction();
                    }).mouseover(function() {//鼠标放上来的时候清空时间动画
                        if (anObj !== null) {
                            clearTimeout(anObj);
                            anObj = null;
                        }
                    }).mouseout(function() {//鼠标离开开始新的时间动画
                        anAction();
                    });

                    $(".img_scroll ul  li ").eq(0).click();//选择开始的位置为LI的第fengedian个样式为ON 开始动画


                    $(".mfsqsg_b").click(function() {
                        $(".mfsqsj").hide();
                    });

                    $("#case_end_div_close").click(function() {
                        $("#case_end_div").hide(300);
                    });

                    $(".again_look").click(function() {
                        $("#case_end_div").hide(300);
                        $(".img_scroll ul  li ").eq(0).click();//选择开始的位置为LI的第fengedian个样式为ON 开始动画
                    });

                });




            </script>



        </div>
        <div class="cl"></div>


        <!-- 弹出层区域start  -->
        <div id='case_end_div' class="case_end_div none">
            <div  class=" w1000" style="height: 650px;">
                <div id="case_end_div_close" class="cha1 rt">X</div>
                <div class="tcc_t w900 mt20 bgwhite hauto">
                    <div class="t_ico lt"></div>
                    <?php if (!empty($_smarty_tpl->tpl_vars['up_detail']->value)){?>                
                    <div class="pic_show lt">
                        <div class="pre_img lt">
                            <p class="p4 lt"><a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['up_detail']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['up_detail']->value['case_id']),$_smarty_tpl);?>
">上<br />一<br />个<br />案<br />例</a></p>
                            <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['up_detail']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['up_detail']->value['case_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['up_detail']->value['photo'];?>
" width="120" height="95"/></a> 
                        </div>
                        <div class="cl"></div>
                    </div>
                    <?php }?>

                    <div class="img_finish lt">
                        <h2>本图集已浏览完毕</h2>
                        <div class="again_look"><a href="javascript:void(0);">重新浏览</a></div>
                        <div class="cl"></div>
                    </div>
                    <div class="tcc_line lt"></div>
                    <div class="w_like lt">
                        <a mini-act="喜欢" href="<?php echo smarty_function_link(array('ctl'=>'case:like','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['case_id']),$_smarty_tpl);?>
">喜欢这套图集</a>
                    </div>
                    <?php if (!empty($_smarty_tpl->tpl_vars['next_detail']->value)){?>
                    <div class="pic_show lt mb20">
                        <div class="pre_img lt">
                            <p class="p4 lt"> <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['next_detail']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['next_detail']->value['case_id']),$_smarty_tpl);?>
">下<br />一<br />个<br />案<br />例</a></p>
                            <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['next_detail']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['next_detail']->value['case_id']),$_smarty_tpl);?>
">

                                <img  src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['next_detail']->value['photo'];?>
" width="120" height="95"/></a> 
                        </div>
                        <div class="cl"></div>
                    </div>

                    <?php }?>

                    <div class="n_ico lt"></div>


                </div>
                <div class="cl"></div>
                <div class="w900 hauto mt20">
                    <div class="case_command lt hauto mb30">
                        <div style="width: 460px;">
                            <div id="case_command" kinBox='{"height":380}'>  <?php echo smarty_function_widget(array('id'=>"adv",'name'=>"案例查看完后的弹出层广告位",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"5"),$_smarty_tpl);?>
 </div>
                        </div>
                    </div>
                    <div class="case_command_r rt ml15 bgwhite hauto mb30">
                        <h2>热门推荐</h2>
                        <ul>
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"case/case",'order'=>"views:desc",'limit'=>"4")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"case/case",'order'=>"views:desc",'limit'=>"4"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <li>
                                <a target="_blank" title="<{$item.title}>" href="<{link ctl='case:detail' arg0=$item.case_id}>"><img src="<{$pager.img}>/<{$item.photo}>" width="150" height="120" /></a><br />
                                <a target="_blank" title="<{$item.title}>" href="<{link ctl='case:detail' arg0=$item.case_id}>"><{$item.title|cutstr:20:'..'}></a>
                            </li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"case/case",'order'=>"views:desc",'limit'=>"4"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <!-- 弹出层区域end  -->

        <!-- 评论区域  -->
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
                <div class=" mt10 hauto"> 
                    <div class="page">
                    <?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>

                    </div>
                </div>
                <form id='comment_form'>
                <div class=" w900 hauto mt10">
                   
                    <textarea style="width: 895px;" rows="5" name="content" ></textarea>
                    
                </div>
                <div class="fbpl rt mt20 mb30">
                    

                        <input type="submit" mini-submit='#comment_form' action="<?php echo smarty_function_link(array('ctl'=>'case:comment','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['case_id']),$_smarty_tpl);?>
" name="fbpl" value="发表评论" class="baocunpl"/>
               
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- 猜你喜欢区域  -->
    <div class="h30"></div>

    <?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
          <?php }} ?>