<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:26:27
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/home_photo.html" */ ?>
<?php /*%%SmartyHeaderCode:141785088455d7ebe32c0160-56735904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a1f84e29d8cd8d8ba6c4d58caa420752808f169' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/home_photo.html',
      1 => 1402664331,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141785088455d7ebe32c0160-56735904',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'detail' => 0,
    'photo_type' => 0,
    'pager' => 0,
    'items' => 0,
    'item' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ebe35f7977_30118082',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ebe35f7977_30118082')) {function content_55d7ebe35f7977_30118082($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
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
         <span class="block_lt">></span>
         <a href="<?php echo smarty_function_link(array('ctl'=>'home:photo','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['id'],'arg1'=>$_smarty_tpl->tpl_vars['photo_type']->value),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>
的<?php if ($_smarty_tpl->tpl_vars['photo_type']->value==1){?> 户型图<?php }?><?php if ($_smarty_tpl->tpl_vars['photo_type']->value==2){?> 实景图<?php }?><?php if ($_smarty_tpl->tpl_vars['photo_type']->value==3){?> 样板间<?php }?>" class="block_lt"><?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>
的<?php if ($_smarty_tpl->tpl_vars['photo_type']->value==1){?> 户型图<?php }?><?php if ($_smarty_tpl->tpl_vars['photo_type']->value==2){?> 实景图<?php }?><?php if ($_smarty_tpl->tpl_vars['photo_type']->value==3){?> 样板间<?php }?></a>
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
"  >楼盘详情</a></li>
                <li><a title="<?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>
实景图" href="<?php echo smarty_function_link(array('ctl'=>'home:photo','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['id'],'arg1'=>2),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['photo_type']->value==2){?> class="current6"<?php }?>>实景图</a></li>
                <li><a title="<?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>
户型图" href="<?php echo smarty_function_link(array('ctl'=>'home:photo','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['id'],'arg1'=>1),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['photo_type']->value==1){?> class="current6"<?php }?>>户型图</a></li>
                <li><a title="<?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>
样板间" href="<?php echo smarty_function_link(array('ctl'=>'home:photo','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['id'],'arg1'=>3),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['photo_type']->value==3){?> class="current6"<?php }?>>样板间</a></li>
                <li><a title="<?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>
在建工地" href="<?php echo smarty_function_link(array('ctl'=>'site'),$_smarty_tpl);?>
">在建工地</a></li>
            </ul>
        </div>
        <!--        子页面导航结束     -->
       <div class="home_buildings_main_l hauto lt mt15">
            
            <div class="xdgc_sjt mt20">
                	<p>
                    	<span class="block_lt ftw f16 black"><?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>
的<?php if ($_smarty_tpl->tpl_vars['photo_type']->value==1){?> 户型图<?php }?><?php if ($_smarty_tpl->tpl_vars['photo_type']->value==2){?> 实景图<?php }?><?php if ($_smarty_tpl->tpl_vars['photo_type']->value==3){?> 样板间<?php }?><font class="red">(<?php echo (($tmp = @$_smarty_tpl->tpl_vars['pager']->value['count'])===null||$tmp==='' ? '0' : $tmp);?>
)</font></span>
                    
                    </p>
                    <p class="cl"></p>
                    <div class="xdgc_sjt_show hauto bgwhite mt10">
                        <ul>
                            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                            <li>
                                <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['pic'];?>
"><img alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['pic'];?>
" width="210" height="147" /></a><br />
                                <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['pic'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" class="ftw black8"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                    
                    <div><div class="page"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</div></div>
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

  


    <?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
     <?php }} ?>