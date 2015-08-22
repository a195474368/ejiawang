<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:36:40
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/home_info.html" */ ?>
<?php /*%%SmartyHeaderCode:40293415355d7ee480f6b18-44617814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a73bb9993b74c50d03e8bb3df19890647e9d8571' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/home_info.html',
      1 => 1402664332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40293415355d7ee480f6b18-44617814',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'detail' => 0,
    'pager' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ee4831ce28_08777339',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ee4831ce28_08777339')) {function content_55d7ee4831ce28_08777339($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_function_widget')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.widget.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--        主题部分开始               -->
<div class="index_b_bg hauto">
    <!--         你所在的位置开始             -->
    <div class="w1000 bgwhite ask_list_weizhi">
        <span class="span11 icobg block_lt"></span>
        <span class="block_lt">您当前所在的位置:</span>
        <a title="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
" class="block_lt"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
</a>
        <span class="block_lt">></span>
        <a title="我搜我家" href="<?php echo smarty_function_link(array('ctl'=>'home'),$_smarty_tpl);?>
" class="block_lt">我搜我家</a>
        <span class="block_lt">></span>
        <a href="<?php echo smarty_function_link(array('ctl'=>'home:detail','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>
楼盘详情" class="block_lt"><?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>
楼盘详情</a>
    </div>
    <div class="cl"></div>
    <!--        你所在的位置结束      -->
    <!--        标题开始     -->
    <div class="home_buildings_title w1000 mt20 hauto mb10">
        <p class="lt p22"><a href="<?php echo smarty_function_link(array('ctl'=>'home:detail','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>
</a></p>
        <p class="lt ml20">
            <span><a href="<?php echo smarty_function_link(array('ctl'=>'home:detail','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['detail']->value['pv_num'];?>
</a>人关注</span><br />
            <span>本楼盘qq群:<font class="red"><?php echo $_smarty_tpl->tpl_vars['detail']->value['qq_qun'];?>
</font></span>
        </p>
    </div>
    <!--        标题结束     -->
    <div class="cl"></div>
    <!--    找我家楼盘页面主题开始-->
    <div class="home_buildings_main w1000 hauto mt10">
        <!--        子页面导航开始     -->
        <div class="w1000 son_menu orgbgg">
            <ul>
                <li><a title="<?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>
楼盘主页" href="<?php echo smarty_function_link(array('ctl'=>'home:detail','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['id']),$_smarty_tpl);?>
">楼盘主页</a></li>
                <li><a title="<?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>
设计方案" href="<?php echo smarty_function_link(array('ctl'=>'home:cases','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['id']),$_smarty_tpl);?>
">设计方案</a></li>
                <li><a title="<?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>
楼盘详情" href="<?php echo smarty_function_link(array('ctl'=>'home:info','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['id']),$_smarty_tpl);?>
"  class="current6">楼盘详情</a></li>
                <li><a title="<?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>
实景图" href="<?php echo smarty_function_link(array('ctl'=>'home:photo','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['id'],'arg1'=>2),$_smarty_tpl);?>
">实景图</a></li>
                <li><a title="<?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>
户型图" href="<?php echo smarty_function_link(array('ctl'=>'home:photo','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['id'],'arg1'=>1),$_smarty_tpl);?>
">户型图</a></li>
                <li><a title="<?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>
样板间" href="<?php echo smarty_function_link(array('ctl'=>'home:photo','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['id'],'arg1'=>3),$_smarty_tpl);?>
">样板间</a></li>
                <li><a title="<?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>
在建工地" href="<?php echo smarty_function_link(array('ctl'=>'site'),$_smarty_tpl);?>
">在建工地</a></li>
            </ul>
        </div>
        <!--        子页面导航结束     -->
       <div class="home_buildings_main_l hauto lt mt15">
            <div class="home_buildings_main_l_t1 bgwhite">
                <a href="<?php echo smarty_function_link(array('ctl'=>'home:detail','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['detail']->value['face_pic'];?>
" width="200" height="140" /></a>
                <p class="p26">
                    <font>楼盘地址&nbsp;:&nbsp;</font><font><?php echo $_smarty_tpl->tpl_vars['detail']->value['addr'];?>
</font>
                </p>
                <p class="p26">
                    <font>参考均价&nbsp;:&nbsp;</font><font class="f1"><?php echo $_smarty_tpl->tpl_vars['detail']->value['price'];?>
</font>
                </p>
                <p class="p26">
                    <font>竣工时间&nbsp;:&nbsp;</font><font><?php echo $_smarty_tpl->tpl_vars['detail']->value['jf'];?>
</font>
                </p>
                <p class="p26">
                    <font>开发商&nbsp;:&nbsp;</font><font><?php echo $_smarty_tpl->tpl_vars['detail']->value['kf'];?>
</font>
                </p>
                <p class="p26">
                    <font>开盘时间 &nbsp;:&nbsp;</font><font><?php echo $_smarty_tpl->tpl_vars['detail']->value['kp'];?>
</font>
                </p>
            </div>
           
            <div class="home_building_content hauto mt15 bgwhite">
                	<div class="home_building_content_b hauto">
                    	<a href="<?php echo smarty_function_link(array('ctl'=>'home:detail','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>
" class="a6 bluebgg" name="xmjj">项目介绍</a>
                       
                       <p class="p25 lt mt10">
                           <?php echo $_smarty_tpl->tpl_vars['detail']->value['details'];?>

                       </p>
                    </div>
                </div>
           
       </div>
                           
       
        <!-- 主题左面结束-->
        <!-- 主题右面开始-->
        <div class="home_buildings_main_r hauto lt mt15 ml20">
          <?php echo smarty_function_widget(array('id'=>'home/tuan','home_id'=>$_smarty_tpl->tpl_vars['detail']->value['id']),$_smarty_tpl);?>
          
            <div class="ads5 hauto">
                <?php echo smarty_function_widget(array('id'=>"adv",'name'=>"我搜我家详情页右侧广告位",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"5"),$_smarty_tpl);?>

            
            </div>
            <div class="home_buildings_laest_designfa hauto mt25">
              <?php echo smarty_function_widget(array('id'=>"case/casenew",'limit'=>5),$_smarty_tpl);?>

            </div>
        </div>
        <!-- 主题右面结束-->
            <div class="cl h20"></div>

    </div>
    <!--    找我家楼盘页面主题结束-->

    <script>
        $(document).ready(function() {
            $(".son_menu ul li:last").css('background', 'none');
            $(".home_building_small_menu ul li:last").css('background', 'none');
            $(".home_buildings_laest_designfa_show ul li:last").css('border-bottom', 'none');
            $(".home_buildings_laest_designfa_show ul li").mouseover(function() {
                var index = $(this).index();
                $(".home_buildings_laest_designfa_show ul li").each(function(a) {
                    if (a == index) {
                        $(this).css('background', '#EAEAEA');
                        $(this).css('border-bottom', 'none');

                    } else {
                        $(this).css('background', '');
                    }
                });
            }).mouseout(function() {
                $(this).css('background', '');
                $(this).css('border-bottom', '');
            });
          

        });
    </script>


    <?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
     <?php }} ?>