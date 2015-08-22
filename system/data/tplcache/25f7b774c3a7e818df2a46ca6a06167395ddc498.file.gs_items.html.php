<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:19:06
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/gs_items.html" */ ?>
<?php /*%%SmartyHeaderCode:182192291555d7ea2ad17004-90865992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25f7b774c3a7e818df2a46ca6a06167395ddc498' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/gs_items.html',
      1 => 1440054055,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182192291555d7ea2ad17004-90865992',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'area_id' => 0,
    'area_list' => 0,
    'area_url' => 0,
    'url_data' => 0,
    'v' => 0,
    'attr_values' => 0,
    'company' => 0,
    'it2' => 0,
    'gs_name' => 0,
    'pager' => 0,
    'companys' => 0,
    'dianping' => 0,
    'company_ex' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea2b2a3ca9_32279956',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea2b2a3ca9_32279956')) {function content_55d7ea2b2a3ca9_32279956($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_block_calldata')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/block.calldata.php';
if (!is_callable('smarty_function_widget')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.widget.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<!----------头部和导航公共部分------------> 
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
        <a href="<?php echo smarty_function_link(array('ctl'=>'gs'),$_smarty_tpl);?>
" title="找装修公司" class="block_lt">找装修公司</a>
        <?php if ($_smarty_tpl->tpl_vars['area_id']->value){?>
        <span class="block_lt">></span>
        <a href="<?php echo smarty_function_link(array('ctl'=>'gs:items','arg0'=>$_smarty_tpl->tpl_vars['area_id']->value),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['area_list']->value[$_smarty_tpl->tpl_vars['area_id']->value]['area_name'];?>
装修公司" class="block_lt "><?php echo $_smarty_tpl->tpl_vars['area_list']->value[$_smarty_tpl->tpl_vars['area_id']->value]['area_name'];?>
装修公司</a>
        <?php }?>
    </div>
    <div class="cl"></div>
    <!--        你所在的位置结束      -->
    <!--        引导开始             -->
    <div class="w1000 dirary_list hauto bgwhite mt20">
        <div class="dirary_list_t hauto">
            <p class="h30 bodr_b ftw f16">
                <font >装修公司好不好多方面考核，</font>
                <font class="red">保障体系、用户真诚评价让您选择放心！</font>

            </p>
            <div class="home_list_area hauto bodr_b_x mt10 mb10">
                <span>区域&nbsp;:&nbsp;</span>
                <a  href="<?php echo $_smarty_tpl->tpl_vars['area_url']->value;?>
" <?php if (empty($_smarty_tpl->tpl_vars['url_data']->value['area_id'])){?>class="a1"<?php }?>>不限</a>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['area_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                <a  title="<?php echo $_smarty_tpl->tpl_vars['v']->value['area_name'];?>
装修公司" href="<?php echo $_smarty_tpl->tpl_vars['v']->value['link'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['checked']){?>class="a1"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['area_name'];?>
</a>
                <?php } ?>
            </div>

            <?php  $_smarty_tpl->tpl_vars['company'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['company']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['attr_values']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['company']->key => $_smarty_tpl->tpl_vars['company']->value){
$_smarty_tpl->tpl_vars['company']->_loop = true;
?>
            <div class="home_list_area hauto bodr_b_x mt10 mb10">
                <span><?php echo $_smarty_tpl->tpl_vars['company']->value['title'];?>
&nbsp;:&nbsp;</span>
                <a  title="<?php echo $_smarty_tpl->tpl_vars['company']->value['title'];?>
装修公司" href="<?php echo $_smarty_tpl->tpl_vars['company']->value['link'];?>
"  <?php if ($_smarty_tpl->tpl_vars['company']->value['checked']){?>class="a1"<?php }?>>不限</a>
                <?php  $_smarty_tpl->tpl_vars['it2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['company']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it2']->key => $_smarty_tpl->tpl_vars['it2']->value){
$_smarty_tpl->tpl_vars['it2']->_loop = true;
?>
                <a  title="<?php echo $_smarty_tpl->tpl_vars['it2']->value['title'];?>
装修公司" href="<?php echo $_smarty_tpl->tpl_vars['it2']->value['link'];?>
"  <?php if ($_smarty_tpl->tpl_vars['it2']->value['checked']){?>class="a1"<?php }?>><?php echo $_smarty_tpl->tpl_vars['it2']->value['title'];?>
</a>
                <?php } ?>

            </div>
            <?php } ?>


        </div>

    </div>
    <!--        引导结束             -->
    <!--        对比公司开始         -->
    <div class="ask_detail_main w1000 mt15 hauto">
        <div>
             <span class="block "><b>总共为您搜索到
                              <?php if ($_smarty_tpl->tpl_vars['gs_name']->value){?><font class="red"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['pager']->value['count'])===null||$tmp==='' ? '0' : $tmp);?>
</font>个<?php }?>
                               <font class="red"><?php if ($_smarty_tpl->tpl_vars['gs_name']->value){?>有关“<?php echo $_smarty_tpl->tpl_vars['gs_name']->value;?>
”<?php }else{ ?>所有公司<?php }?></font>结果</b></span>
        </div>
        <!--        位置结束左面下开始       -->
        <div class="ask_detail_main_l hauto mt5 lt">   
            <?php  $_smarty_tpl->tpl_vars['company'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['company']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['companys']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['company']->key => $_smarty_tpl->tpl_vars['company']->value){
$_smarty_tpl->tpl_vars['company']->_loop = true;
?>
            <div class="decoration_list_l hauto mt5 bgwhite">
                <div class="decoration_list_l_t hauto">
                    <div class="decoration_list_l_t_l lt hauto">
                        <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['company']->value['square_logo'];?>
" width="150" height="150" /></a>
                    </div>
                    <div class="decoration_list_l_t_c lt hauto ml15">
                        <p>
                            <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id']),$_smarty_tpl);?>
" class="block_lt a41"><?php echo $_smarty_tpl->tpl_vars['company']->value['sort_name'];?>
</a>
                            <?php if (!empty($_smarty_tpl->tpl_vars['company']->value['security'])){?>
                            <span class="span85 acitivity_ico1"></span>
                            <span class="span86 ml5">活动保障金<font class="red">￥<?php echo $_smarty_tpl->tpl_vars['company']->value['security'];?>
</font></span>
                            <?php }?>

                            <span class="span87 acitivity_ico1"></span>

                            <?php if (!empty($_smarty_tpl->tpl_vars['company']->value['orderby'])){?>
                            <span class="span88 redbg ml5"><a title="推广客户" href="javascript:void(0);">推广</a></span>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['company']->value['is_vip']){?>
                            <span class="span89 orgbgg ml5"><a title="VIP旗舰店" href="javascript:void(0);">旗舰店</a></span>
                            <?php }?>
                        </p>
                        <p class="cl"></p>
                        <p class="p60 graybg mt10">
                            <span class="ftw f16 red ml10">口号</span>
                            <span class="f14 black ml10"><?php echo $_smarty_tpl->tpl_vars['company']->value['slogan'];?>
</span>
                        </p>
                        <p>
                            <b>公司地址:</b><?php echo $_smarty_tpl->tpl_vars['company']->value['addr'];?>

                        </p>
                        <p >
                            业主说:<a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id']),$_smarty_tpl);?>
" style="color: orange;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['dianping']->value[$_smarty_tpl->tpl_vars['company']->value['company_id']]['content'])===null||$tmp==='' ? '暂未评价' : $tmp);?>
</a>
                        </p>
                    </div>
                    <div class="decoration_list_l_t_r rt hauto">
                        <h2> <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id']),$_smarty_tpl);?>
">[进入店铺]</a></h2>
                        <i>信誉：<span><?php echo round($_smarty_tpl->tpl_vars['company']->value['scores']/10,1);?>
</span></i>
                        <a mini-load='申请免费量房' href="<?php echo smarty_function_link(array('ctl'=>'gs:yuyue','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'http'=>'empty'),$_smarty_tpl);?>
" class="orgbgg">免费预约</a>
                      
                    </div>
                </div>
                <div class="cl"></div>
                <div class="decoration_list_b hauto">
                    <div class="decoration_list_b_ul">
                        <ul>
                            <li rel='<?php echo $_smarty_tpl->tpl_vars['company']->value['company_id'];?>
'><a href="###" rel='<?php echo $_smarty_tpl->tpl_vars['company']->value['company_id'];?>
' class="org">公司介绍</a></li>
                            <li rel='<?php echo $_smarty_tpl->tpl_vars['company']->value['company_id'];?>
'><a href="###" rel='<?php echo $_smarty_tpl->tpl_vars['company']->value['company_id'];?>
' class="org">资质证书</a></li>
                            <li rel='<?php echo $_smarty_tpl->tpl_vars['company']->value['company_id'];?>
'><a href="###" rel='<?php echo $_smarty_tpl->tpl_vars['company']->value['company_id'];?>
' class="org">案例</a></li>
                        </ul>

                        <p>
                            <span  rel='<?php echo $_smarty_tpl->tpl_vars['company']->value['company_id'];?>
' class="span90">展开<img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/images/zk.png" /></span>
                            <span  rel='<?php echo $_smarty_tpl->tpl_vars['company']->value['company_id'];?>
' class="span91 none">收起<img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/images/sq.png" /></span>
                        </p>
                    </div>

                    <div style="float:left" id='jq_company_list_content_<?php echo $_smarty_tpl->tpl_vars['company']->value['company_id'];?>
' class="decoration_content none">
                        <div  class="decoration_list_b_b ">
                            <h2><a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id']),$_smarty_tpl);?>
" ><?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
</a></h2>
                            <div class="ml10 mt10 mb10">
                                <?php echo $_smarty_tpl->tpl_vars['company_ex']->value[$_smarty_tpl->tpl_vars['company']->value['company_id']]['intro'];?>

                            </div>
                        </div>
                        <div class="decoration_list_b_b  none">
                            <ul>
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"company/pic",'company_id'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'order'=>"pic_id:desc",'limit'=>"4")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"company/pic",'company_id'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'order'=>"pic_id:desc",'limit'=>"4"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <li>
                                    <a target="_blank" title="<{$company.name}>" href="<{link ctl='company' arg0=$company.company_id}>" ><img src="<{$pager.img}>/<{$item.pic}>" width="300" /></a>
                                </li>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"company/pic",'company_id'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'order'=>"pic_id:desc",'limit'=>"4"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 
                            </ul>
                        </div>
                        <div class="decoration_list_b_b  none">
                            <ul>
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"case/case",'company_id'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'order'=>"case_id:desc",'limit'=>"4")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"case/case",'company_id'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'order'=>"case_id:desc",'limit'=>"4"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <li>
                                    <a target="_blank" title="<{$item.title}>" href="<{link ctl='case:detail' arg0=$item.case_id}>"><img alt="<{$item.title}>" src="<{$pager.img}>/<{$item.photo}>" width="300" /></a>
                                </li>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"case/case",'company_id'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'order'=>"case_id:desc",'limit'=>"4"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 

                            </ul>
                        </div>
                    </div>

                </div>
            </div> 
            <?php } ?>
            <div class="mt10" style="min-height: 20px;">
                <div class="page">
                    <?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>

                </div>
                </div>
<script>
          $(document).ready( function(){
            $(".page").find("em").hide();
           }  )                
                </script>
        </div>




        <!--  当点击任何一个展开、收起的时候都会出现相应的内容分 -->
        <script>
            $(document).ready(function() {
                $(".decoration_list_b_ul ul li").click(function() {
                    var index = $(this).index();
                    $(this).parent().find('li').each(function(a) {
                        if (a == index) {
                            $("#jq_company_list_content_" + $(this).attr('rel')).find(".decoration_list_b_b").eq(a).show();
                            $(this).find(".org").css('color', '#FE8007');
                        } else {
                            $(this).find(".org").css('color', '');
                            $("#jq_company_list_content_" + $(this).find('a').attr('rel')).find(".decoration_list_b_b").eq(a).hide();
                        }
                    });
                    $(this).parent().parent().find(".span90").click();
                    
                });
           
                $(".decoration_list_b_ul .span90").click(function() {
                    $(this).parent().find('.span91').show();
                    $(this).parent().find('.span90').hide();
                    $("#jq_company_list_content_" + $(this).attr('rel')).show();

                });
                $(".decoration_list_b_ul .span91").click(function() {
                    $(this).parent().find('.span91').hide();
                    $(this).parent().find('.span90').show();
                    $("#jq_company_list_content_" + $(this).attr('rel')).hide();
                });/*展开收起*/
                $(".qyrz ul li:last").css('border-right', 'none');
                $(".newest_qdb li").eq(0).mouseover();

            });
        </script>


        <!--        位置结束左面下结束       -->

        <!--        位置结束右面下开始       -->
        <div class="ask_detail_main_r hauto mt5 lt ml20" style="position:fixed;bottom:20px">
            <?php echo $_smarty_tpl->getSubTemplate ("block/tenders.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
            <div class="cl"></div>
            <div class="ads7 mt15">
                <?php echo smarty_function_widget(array('id'=>"adv",'name'=>"装修公司列表页右侧广告位",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"5"),$_smarty_tpl);?>

            </div>  



        </div>

        <!--        位置结束右面结束       -->

        <div class="cl"></div>
    </div>


    <?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  <?php }} ?>