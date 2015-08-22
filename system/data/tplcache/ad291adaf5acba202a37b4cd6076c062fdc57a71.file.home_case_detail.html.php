<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:20:34
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/home_case_detail.html" */ ?>
<?php /*%%SmartyHeaderCode:140289964955d7ea8299b294-54946600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad291adaf5acba202a37b4cd6076c062fdc57a71' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/home_case_detail.html',
      1 => 1422068618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140289964955d7ea8299b294-54946600',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'detail' => 0,
    'case' => 0,
    'company' => 0,
    'pager' => 0,
    'case_pics' => 0,
    'item' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea82cad779_93034760',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea82cad779_93034760')) {function content_55d7ea82cad779_93034760($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_function_widget')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.widget.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    <!----------头部和导航公共部分------------>  
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
" class="block_lt"><?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>
</a>
         <span class="block_lt">></span>
        <a href="<?php echo smarty_function_link(array('ctl'=>'home:cases','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>
的设计方案" class="block_lt"><?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>
的设计方案</a>
         <span class="block_lt">></span>
         <a href="<?php echo smarty_function_link(array('ctl'=>'home:caseDetail','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['id'],'arg1'=>$_smarty_tpl->tpl_vars['case']->value['case_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['case']->value['title'];?>
" class="block_lt"><?php echo $_smarty_tpl->tpl_vars['case']->value['title'];?>
</a>
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
" >楼盘主页</a></li>
                    <li><a title="<?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>
设计方案" href="<?php echo smarty_function_link(array('ctl'=>'home:cases','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['id']),$_smarty_tpl);?>
" class="current6">设计方案</a></li>
                    <li><a title="<?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>
楼盘详情" href="<?php echo smarty_function_link(array('ctl'=>'home:info','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['id']),$_smarty_tpl);?>
">楼盘详情</a></li>
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
        <!--     主题左面开始 -->
        	<div class="home_buildings_main_l hauto lt mt15">
            	<div class="home_buildings_main_l_t bgwhite hauto hauto">
                	<div class="home_design_fa_l lt">
                        <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id']),$_smarty_tpl);?>
" class="a9"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['company']->value['logo'];?>
" width="135" height="70" /></a>
                        <p>
                            
                        </p>
                    </div>
                    <div class="home_design_fa_c lt hauto">
                    	<h3>设计方案提供者:<a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id']),$_smarty_tpl);?>
" ><?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
</a></h3>
                        <span class="span28">
                            <b>服务理念:</b> <?php echo $_smarty_tpl->tpl_vars['company']->value['slogan'];?>

                        </span>
                    </div>
                    <div class="home_design_fa_r lt hauto">
                    	<span class="ftw f14 blackb8">喜欢这个风格?找他设计</span>
                        <a href="/tenders.html"  target="_blank" class="a11 block orgbg">免费预约</a>
                    </div>
                    <div class="cl"></div>
                    <span class="block mt20"></span>
                </div>
                <div class="home_building_small_menu">
                	<ul>  
            
                        <li><a href="#pmbzt">平面布置图</a></li>
                        <li><a href="#sjt">设计图</a></li>
                        <li><a href="#sjsl">设计思路</a></li>
                    </ul>
                </div>
                 <div class="home_building_content hauto bgwhite">
                	<div class="home_building_content_b hauto">
                    	<p class="p28">
                        <a href="###sjsl" name="sjsl" class="white"><b>设计思路：</b></a><br />
                            <?php echo $_smarty_tpl->tpl_vars['case']->value['intro'];?>

                        </p>
                    </div>
                </div>
                <div class="home_building_content hauto bgwhite">
                	<div class="home_building_content_b hauto">
                    	<a href="###pmbzt" class="a6 bluebgg mb10" name="pmbzt">平面布置图</a>
                        <a title="<?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>
平面布置图" href="###"><img alt='<?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>
平面布置图' src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['case']->value['photo'];?>
" width="690" /></a>
                      
                    </div>
                </div>
               
                <div class="home_building_content hauto bgwhite">
                	<div class="home_building_content_b1 hauto">
                    	<a href="###sjt" class="a6 pinkbg mb10" name="sjt">设计图</a>
                        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['case_pics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->iteration++;
?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->iteration==1){?>
                        <?php }else{ ?>
                        <a title="<?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>
平面布置图" href="###"><img alt='<?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>
设计图' src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['photo'];?>
" width="690"/></a>
                        <?php }?>
                        <?php } ?>
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
        	
        </div>
        <!--    找我家楼盘页面主题结束-->
       

<script>
	$(document).ready(function(){
	$(".son_menu ul li:last").css('background','none')	;
	$(".home_building_small_menu ul li:last").css('background','none')	;
	$(".home_buildings_laest_designfa_show ul li:last").css('border-bottom','none')	;
	
	
	
	$(".home_buildings_laest_designfa_show ul li").mouseover(function(){
		var index = $(this).index();
		$(".home_buildings_laest_designfa_show ul li").each(function(a){
			if(a == index){
				$(this).css('background','#EAEAEA');
				$(this).css('border-bottom','none');
				
			}else{
         	$(this).css('background','');	
	 		}
		});	
		}).mouseout(function(){
			$(this).css('background','');
			$(this).css('border-bottom','');
		});
		
		
				
			

				  
	});
</script>

    <?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
         <?php }} ?>