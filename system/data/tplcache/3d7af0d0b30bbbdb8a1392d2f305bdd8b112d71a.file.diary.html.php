<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:32:12
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/content/diary.html" */ ?>
<?php /*%%SmartyHeaderCode:23025103755d7ed3c362ff4-89724337%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d7af0d0b30bbbdb8a1392d2f305bdd8b112d71a' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/content/diary.html',
      1 => 1440053662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23025103755d7ed3c362ff4-89724337',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'pager' => 0,
    'cfg_type' => 0,
    'cfg_setting' => 0,
    'key' => 0,
    'item' => 0,
    'cfg_status' => 0,
    'items' => 0,
    'home_list' => 0,
    'company_list' => 0,
    'userList' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ed3c773ed6_86571122',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ed3c773ed6_86571122')) {function content_55d7ed3c773ed6_86571122($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_function_widget')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.widget.php';
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
    </div>
    <div class="cl"></div>
    <!--        你所在的位置结束      -->
    <!--        引导开始             -->
    <div class="w1000 dirary_list hauto bgwhite mt20">
        <div class="dirary_list_t hauto">
            <p class="h30 bodr_b ftw f14">
                <font >看装修日记选</font>
                <font class="red">最值得信赖</font>
                <font>的装修公司!</font>
            </p>
            <div class="home_list_area hauto bodr_b_x mt10">
                <span class="block_lt span75"><b>装修方式&nbsp;：&nbsp;</b></span>

                <a href="<?php echo smarty_function_link(array('ctl'=>'content:diary','arg0'=>$_smarty_tpl->tpl_vars['pager']->value['status'],'arg1'=>$_smarty_tpl->tpl_vars['pager']->value['type_id'],'arg2'=>0,'arg3'=>$_smarty_tpl->tpl_vars['pager']->value['orderby']),$_smarty_tpl);?>
" class="block_lt <?php if (empty($_smarty_tpl->tpl_vars['pager']->value['way_id'])){?>a1<?php }?>">不限</a>

                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cfg_setting']->value[$_smarty_tpl->tpl_vars['cfg_type']->value['way']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                <a href="<?php echo smarty_function_link(array('ctl'=>'content:diary','arg0'=>$_smarty_tpl->tpl_vars['pager']->value['status'],'arg1'=>$_smarty_tpl->tpl_vars['pager']->value['type_id'],'arg2'=>$_smarty_tpl->tpl_vars['key']->value,'arg3'=>$_smarty_tpl->tpl_vars['pager']->value['orderby']),$_smarty_tpl);?>
" class="block_lt  <?php if ($_smarty_tpl->tpl_vars['pager']->value['way_id']==$_smarty_tpl->tpl_vars['key']->value){?>a1<?php }?>"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a>

                <?php } ?>
                <div class="cl"></div>
                <div class="h10"></div>
            </div>
            <div class="home_list_area hauto bodr_b_x mt10">
                <span class="block_lt span75"><b>房屋户型&nbsp;：&nbsp;</b></span>

                <a href="<?php echo smarty_function_link(array('ctl'=>'content:diary','arg0'=>$_smarty_tpl->tpl_vars['pager']->value['status'],'arg1'=>0,'arg2'=>$_smarty_tpl->tpl_vars['pager']->value['way_id'],'arg3'=>$_smarty_tpl->tpl_vars['pager']->value['orderby']),$_smarty_tpl);?>
" class="block_lt <?php if (empty($_smarty_tpl->tpl_vars['pager']->value['type_id'])){?>a1<?php }?>">不限</a>

                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cfg_setting']->value[$_smarty_tpl->tpl_vars['cfg_type']->value['house_type']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                <a href="<?php echo smarty_function_link(array('ctl'=>'content:diary','arg0'=>$_smarty_tpl->tpl_vars['pager']->value['status'],'arg1'=>$_smarty_tpl->tpl_vars['key']->value,'arg2'=>$_smarty_tpl->tpl_vars['pager']->value['way_id'],'arg3'=>$_smarty_tpl->tpl_vars['pager']->value['orderby']),$_smarty_tpl);?>
" class="block_lt  <?php if ($_smarty_tpl->tpl_vars['pager']->value['type_id']==$_smarty_tpl->tpl_vars['key']->value){?>a1<?php }?>"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a>

                <?php } ?>

                <div class="cl"></div>
                <div class="h10"></div>
            </div>
            <div class="home_list_area hauto bodr_b_x mt10">
                <span class="block_lt span75"><b>施工阶段&nbsp;：&nbsp;</b></span>
                <a href="<?php echo smarty_function_link(array('ctl'=>'content:diary','arg0'=>0,'arg1'=>$_smarty_tpl->tpl_vars['pager']->value['type_id'],'arg2'=>$_smarty_tpl->tpl_vars['pager']->value['way_id'],'arg3'=>$_smarty_tpl->tpl_vars['pager']->value['orderby']),$_smarty_tpl);?>
" class="block_lt <?php if (empty($_smarty_tpl->tpl_vars['pager']->value['status'])){?>a1<?php }?>">不限</a>

                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cfg_status']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                <a href="<?php echo smarty_function_link(array('ctl'=>'content:diary','arg0'=>$_smarty_tpl->tpl_vars['key']->value,'arg1'=>$_smarty_tpl->tpl_vars['pager']->value['type_id'],'arg2'=>$_smarty_tpl->tpl_vars['pager']->value['way_id'],'arg3'=>$_smarty_tpl->tpl_vars['pager']->value['orderby']),$_smarty_tpl);?>
" class="block_lt  <?php if ($_smarty_tpl->tpl_vars['pager']->value['status']==$_smarty_tpl->tpl_vars['key']->value){?>a1<?php }?>"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a>

                <?php } ?>

                <div class="cl"></div>
                <div class="h10"></div>
            </div>

        </div>

    </div>
    <!--        引导结束             -->
    <div class="ask_detail_main w1000 mt15 hauto">
        <!--        位置结束左面下开始       -->
        <div class="ask_detail_main_l hauto mt5 lt bgwhite">
            <div class="dirary_list_l_title">
                <ul>
                    <li>
                        <a href="<?php echo smarty_function_link(array('ctl'=>'content:diary','arg0'=>$_smarty_tpl->tpl_vars['pager']->value['status'],'arg1'=>$_smarty_tpl->tpl_vars['pager']->value['type_id'],'arg2'=>$_smarty_tpl->tpl_vars['pager']->value['way_id'],'arg3'=>0),$_smarty_tpl);?>
" class="block_lt a40">按照最新发布</a>
                        <span class="block_lt <?php if ($_smarty_tpl->tpl_vars['pager']->value['orderby']==0){?>span78<?php }else{ ?>span77<?php }?> acitivity_ico1"> </span>

                    </li>
                    <li>
                        <a href="<?php echo smarty_function_link(array('ctl'=>'content:diary','arg0'=>$_smarty_tpl->tpl_vars['pager']->value['status'],'arg1'=>$_smarty_tpl->tpl_vars['pager']->value['type_id'],'arg2'=>$_smarty_tpl->tpl_vars['pager']->value['way_id'],'arg3'=>1),$_smarty_tpl);?>
" class="block_lt a40">按照阅读最多</a>
                        <span class="block_lt <?php if ($_smarty_tpl->tpl_vars['pager']->value['orderby']==1){?>span78<?php }else{ ?>span77<?php }?> acitivity_ico1"></span>
                    </li>
                    <li>
                        <a href="<?php echo smarty_function_link(array('ctl'=>'content:diary','arg0'=>$_smarty_tpl->tpl_vars['pager']->value['status'],'arg1'=>$_smarty_tpl->tpl_vars['pager']->value['type_id'],'arg2'=>$_smarty_tpl->tpl_vars['pager']->value['way_id'],'arg3'=>2),$_smarty_tpl);?>
" class="block_lt a40">按照评论最多</a>
                        <span class="block_lt <?php if ($_smarty_tpl->tpl_vars['pager']->value['orderby']==2){?>span78<?php }else{ ?>span77<?php }?> acitivity_ico1"></span>

                    </li>
                </ul>
            </div>
            <div class="dirary_list_l_b hauto  dirary_list_l_b_0">
                <ul>
                    
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                    <li>
                        <a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'content:diaryDetail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['diary_id']),$_smarty_tpl);?>
"><img alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['face_pic'];?>
" width="80" height="60"/></a>
                        <div class="dirary_list_l_b_r lt ml15">
                            <p><a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'content:diaryDetail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['diary_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></p>
                            <p>
                                <font class="f12">小区：<a target="_blank" title="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['home_list']->value[$_smarty_tpl->tpl_vars['item']->value['home_id']]['name'])===null||$tmp==='' ? '--' : $tmp);?>
" href="<?php echo smarty_function_link(array('ctl'=>'home:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['home_id']),$_smarty_tpl);?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['home_list']->value[$_smarty_tpl->tpl_vars['item']->value['home_id']]['name'])===null||$tmp==='' ? '--' : $tmp);?>
</a>     状态：<?php echo $_smarty_tpl->tpl_vars['cfg_status']->value[$_smarty_tpl->tpl_vars['item']->value['status']];?>
    合同总价：</font>
                                <font class="f12 red">￥<?php echo $_smarty_tpl->tpl_vars['item']->value['total_price'];?>
</font>
                            </p>
                            <p class="p49">
                                <span class="block_lt span79">
                                    <font>开工时间：<?php echo $_smarty_tpl->tpl_vars['item']->value['start_date'];?>
</font><font> 施工：</font>
                                    <a title="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['company_list']->value[$_smarty_tpl->tpl_vars['item']->value['company_id']]['name'])===null||$tmp==='' ? '--' : $tmp);?>
" target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['item']->value['company_id']),$_smarty_tpl);?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['company_list']->value[$_smarty_tpl->tpl_vars['item']->value['company_id']]['name'])===null||$tmp==='' ? '--' : $tmp);?>
</a>
                                </span>
                                <span class="block rt span80">
                                   <a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'content:diaryDetail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['diary_id']),$_smarty_tpl);?>
">详情</a>
                                </span>

                            </p>
                            <p class="cl"></p>
                            <p class="p50">
                                <span class="block_lt span81">
                                    <b class="org"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['userList']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['uname'])===null||$tmp==='' ? '游客' : $tmp);?>
</b><font>提供</font>
                                </span>
                                <span class="block rt span82">
                                    <font>日记&nbsp;:&nbsp;</font><font class="red"><?php echo $_smarty_tpl->tpl_vars['item']->value['content_num'];?>
篇</font>
                                    <font>阅读&nbsp;:&nbsp;</font><font class="red"><?php echo $_smarty_tpl->tpl_vars['item']->value['pv_num'];?>
</font>
                                    <font>评论&nbsp;:&nbsp;</font><font class="red"><?php echo $_smarty_tpl->tpl_vars['item']->value['ping_num'];?>
</font>
                                </span>
                            </p>
                        </div>
                    </li>  
                    <?php } ?>
                    
                    

                </ul>
                <div class="dirary_list_page hauto">
                    <div class="page">
                        
                            <?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>

                 
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
                  <?php echo smarty_function_widget(array('id'=>"adv",'name'=>"装修日记右侧列表广告位",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"5"),$_smarty_tpl);?>

            </div>
            <div class="today_tuijian hauto">
                <h2 class="mb10 mt10">今日推荐</h2>
                <div class="today_tuijian_b hauto bgwhite">
                   <?php echo smarty_function_widget(array('id'=>'diary/right','limit'=>10,'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>

                </div>
            </div>


        </div>

        <!--        位置结束右面结束       -->
        <div class="cl"></div>

    </div>  
      <div class="h20"></div>       
</div>
<!--             主题部分结束    -->

<?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
           <?php }} ?>