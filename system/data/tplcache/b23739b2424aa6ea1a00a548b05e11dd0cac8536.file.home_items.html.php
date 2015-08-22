<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:19:58
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/home_items.html" */ ?>
<?php /*%%SmartyHeaderCode:113273580255d7ea5eef2369-51304972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b23739b2424aa6ea1a00a548b05e11dd0cac8536' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/home_items.html',
      1 => 1437556025,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113273580255d7ea5eef2369-51304972',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'area_url' => 0,
    'url_data' => 0,
    'area_list' => 0,
    'v' => 0,
    'attr_values' => 0,
    'item' => 0,
    'it2' => 0,
    'items_name' => 0,
    'homes' => 0,
    'pager' => 0,
    'company_list' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea5f295963_71629290',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea5f295963_71629290')) {function content_55d7ea5f295963_71629290($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_function_widget')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.widget.php';
?>﻿<?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!----------头部和导航公共部分------------>
<!--        主题部分开始                -->
<div class="hauto index_b_bg">
    <!-- 列表风格导航开始 -->
    <div class="w1000 mt20 bgwhite">
        <div class="hauto home_style">
            <div class="seach_xq bodr_b">
                <h2>找到小区，快速得到<font class="red">现成的</font>设计案例！</h2>
            </div>
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
小区列表" href="<?php echo $_smarty_tpl->tpl_vars['v']->value['link'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['checked']){?>class="a1"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['area_name'];?>
</a>
                <?php } ?>
            </div>
            
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['attr_values']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <div class="home_list_area hauto bodr_b_x mt10 mb10">
                <span><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
&nbsp;:&nbsp;</span>
                <a  title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
小区" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"  <?php if ($_smarty_tpl->tpl_vars['item']->value['checked']){?>class="a1"<?php }?>>不限</a>
                <?php  $_smarty_tpl->tpl_vars['it2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it2']->key => $_smarty_tpl->tpl_vars['it2']->value){
$_smarty_tpl->tpl_vars['it2']->_loop = true;
?>
                <a  title="<?php echo $_smarty_tpl->tpl_vars['it2']->value['title'];?>
小区" href="<?php echo $_smarty_tpl->tpl_vars['it2']->value['link'];?>
"  <?php if ($_smarty_tpl->tpl_vars['it2']->value['checked']){?>class="a1"<?php }?>><?php echo $_smarty_tpl->tpl_vars['it2']->value['title'];?>
</a>
                <?php } ?>
             
            </div>
           <?php } ?>
        </div>

    </div>
    <!-- 列表风格导航结束 -->
    <!-- 小区列表开始  -->
    <div class="hauto mt20 w1000">
        <!--  左面开始  -->
        <div class="home_list_show_l lt hauto">
            <div class="bgwhite home-List_all hauto">
                <div class="home_list_show_l_t hauto">
                    <div class="home-List_show_title bodr_b">
                        <span class="block lt"><b>为您找到<font class="red">
                               
                               <font class="red"> <?php if ($_smarty_tpl->tpl_vars['items_name']->value){?>有关"<?php echo $_smarty_tpl->tpl_vars['items_name']->value;?>
"<?php }else{ ?>所有<?php }?></font>小区</b></span>
                        <span class="block rt span15"><a href="<?php echo smarty_function_link(array('ctl'=>'home:maps'),$_smarty_tpl);?>
">切换到地图模式</a></span>
                    </div>
                    <div class="cl"></div>
             

                </div>
            </div>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['homes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['home']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['home']['index']++;
?>           
            <div class="bgwhite home-List_all hauto <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['home']['index']>0){?>mt10<?php }?>">
                <div class="home_list_show_l_t hauto">

                    <div class="cl"></div>
                    <div class="home_list_show_b hauto mt20">
                        <a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'home:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['face_pic'];?>
" width="180" height="125" /></a>
                        <div class="home_list_show_b_r lt">
                            <p>
                                <span class="f16 ftw blackb lt"><a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'home:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
" class="f16 ftw blackb a3"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></span>
                                <span class="f12 rt"><font class="red"><?php echo $_smarty_tpl->tpl_vars['item']->value['pv_num'];?>
</font>人查看了该楼盘</span>
                            </p>
                            <div class="cl"></div>
                            <p class="mt15">
                                均 价：<font class="red"><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
 </font> <br /> 
                                开发商：<?php echo $_smarty_tpl->tpl_vars['item']->value['kf'];?>
<br />
                                最新设计方案由<a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['item']->value['last_case_company_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['company_list']->value[$_smarty_tpl->tpl_vars['item']->value['last_case_company_id']]['name'];?>
" class="org ftw"><?php echo $_smarty_tpl->tpl_vars['company_list']->value[$_smarty_tpl->tpl_vars['item']->value['last_case_company_id']]['name'];?>
</a>提供
                            </p>
                            <p class="p6">
                                <a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'home:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
"><u>小区详情</u></a><a href="<?php echo smarty_function_link(array('ctl'=>'ask'),$_smarty_tpl);?>
"><u>装修问答</u></a>
                                <a href="<?php echo smarty_function_link(array('ctl'=>'content:diary'),$_smarty_tpl);?>
"><u>装修日记</u></a><a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'home:photo','arg0'=>$_smarty_tpl->tpl_vars['item']->value['id'],'arg1'=>3),$_smarty_tpl);?>
"><u>业主实拍样板间</u></a>
                                <a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'home:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
" class="a2 ftw a4">查看装修方案>></a>
                            </p>
                            <div class="cl"></div>
                            <p class="h30"></p>
                        </div>

                    </div>

                </div>
            </div>     
            
            <?php } ?>
            
             
         <div class="bgwhite home_list_page mt10 hauto">

                <div class="page">
                  <?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>

                </div>
            </div>
            <script>
          $(document).ready( function(){
            $(".page").find("em").hide();
           }  )                 
                </script>
         
            <div class="cl"></div>

        </div>
        <!--  左面结束  -->
        <!--  右面开始  -->
        <div class="home_list_show_r rt hauto" style="position: fixed;bottom:20px">
            <div class="home-List_form hauto bgwhite">

                <div class="home_all_r hauto bgwhite ml5">
                    <p>
                        <font class="ftw black f17">想参加小区</font>
                        <font class="ftw red f17">团购</font>，
                        <font class="ftw black f17">看</font><font class="ftw red f17">样板间</font><br />
                        <font class="f12">提交信息，试试看</font>
                    </p>
                     <form mini-form="survey" action="<?php echo smarty_function_link(array('ctl'=>'home:survey','http'=>true),$_smarty_tpl);?>
" method="post">
                        <!--城市来源-->
                                           <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
" name="data[cityName]" />
                                           
                        <input type="text" name="data[home_name]"  value="请输入小区名称" class="lp_hx bodr lp"/>
                        <select name='data[area_id]' class="hx bodr mt10">
                            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['area_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['area_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['area_name'];?>
</option>
                            <?php } ?>

                        </select>
                        <input type="text" name="data[name]"  value="请输入你的姓名" class="lp_hx bodr mt10 na"/>
                        <input type="text" name="data[tel]"  value="请输入你的联系电话" class="lp_hx bodr mt10 ph"/>
                        <input type="submit"  value="提交查询" class="lp_hxq bodr mt10 redbg dc"/>
                    </form>
                    <script>
                          $(document).ready(function() {
                                $(".lp").focus(function() {
                                    if ($(this).val() == '请输入楼盘名称')
                                        $(this).val('');
                                }).focusout(function() {
                                    if ($(this).val() == '')
                                        $(this).val('请输入楼盘名称');
                                }); 
                                $(".na").focus(function() {
                                    if ($(this).val() == '请输入您的姓名')
                                        $(this).val('');
                                }).focusout(function() {
                                    if ($(this).val() == '')
                                        $(this).val('请输入您的姓名');
                                });

                                $(".ph").focus(function() {
                                    if ($(this).val() == '请输入您的联系电话')
                                        $(this).val('');
                                }).focusout(function() {
                                    if ($(this).val() == '')
                                        $(this).val('请输入您的联系电话');
                                });//banner右面表单
                            });
                    </script>
                    <p>
                        已有<font class="red">12563</font>人提交
                    </p>

                </div>
            </div>
            <div class="ads3 hauto mt15">
                 <?php echo smarty_function_widget(array('id'=>"adv",'name'=>"我搜我家小区列表右侧广告位",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"5"),$_smarty_tpl);?>

            </div>
        </div>

        <!--  右面结束  -->
        <div class="h20 cl"></div>

    </div>
    <!-- 小区列表结束  -->

    <?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
         <?php }} ?>