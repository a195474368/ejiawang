<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 13:11:29
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/index.html" */ ?>
<?php /*%%SmartyHeaderCode:2732401555d804813ba185-21460403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cda910761ef1a74b88c3f07c0c0d2e7200055bb9' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/index.html',
      1 => 1439966579,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2732401555d804813ba185-21460403',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d80481933a10_50004533',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d80481933a10_50004533')) {function content_55d80481933a10_50004533($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_function_widget')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.widget.php';
if (!is_callable('smarty_block_calldata')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/block.calldata.php';
if (!is_callable('smarty_block_KT')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/block.KT.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="cl"></div>
<?php echo $_smarty_tpl->getSubTemplate ("index/topheader.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="index_b_bg hauto">     
    
    		<!--团装活动开始-->  
                	<div class="tuanzhuang_acitivity w1000">
                    	<div class="tuanzhuang_title">
                        	<h2>团装活动</h2>
                            <a href="<?php echo smarty_function_link(array('ctl'=>'home:tuan'),$_smarty_tpl);?>
">更多>></a>
                        </div>
                        <div class="cl"></div>
                        <div class="tuanzhuang_b w1000">
                        	
                          <?php echo smarty_function_widget(array('id'=>'home/index','city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>4),$_smarty_tpl);?>
          
                        </div>
                    </div>
                    
                <!--团装活动结束-->  
    
    <!-------最新招标，最新签约start------>
    <div class="newest w1000 mt25 hauto">
        <!--最新签约开始-->
        <div class="newest_l lt hauto">
            <h2><a href="<?php echo smarty_function_link(array('ctl'=>'tenders'),$_smarty_tpl);?>
">最新签约</a></h2>
            <div class="news_l_b hauto bgwhite mt10">
                <ul>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"tenders/tenders",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"hot",'limit'=>"4")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"tenders/tenders",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"hot",'limit'=>"4"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li<{if $last}> class="bottom-none"<{/if}>>
                        <p>
                            <span class="block_lt"><b><a href="<{link ctl='company' arg0=$item.ext.company.company_id}>" target="_blank" title='<{$item.ext.company.name}>'  class="black"><{$item.ext.company.sort_name}></a></b></span>
                            <span class="block rt span37 orgbgg"><a title="<{$item.title}>" href="<{link ctl='tenders:detail' arg0=$item.id}>" target="_blank" class="f14 white"><b>新签约</b></a></span>
                        </p>
                        <p class="cl"></p><p class="mt5"></p>
                        <p>
                            <span class="block_lt span38"><b><a href="<{link ctl='home:detail' arg0=$item.ext.home.id}>" target="_blank" class="black8"><{$item.home_name}></a></b></span>
                            <span class="block rt span37"><a title="<{$item.title}>" href="<{link ctl='tenders:detail' arg0=$item.id}>" target="_blank" class="black8"><{$item.name}></a></span>
                        </p>
                    </li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"tenders/tenders",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"hot",'limit'=>"4"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </ul>
            </div>   
        </div>
        <!--最新签约结束-->
        <!--最新招标订单开始-->
        <div class="news_c hauto lt ml10 mr10">
            <h2><a href="<?php echo smarty_function_link(array('ctl'=>'tenders'),$_smarty_tpl);?>
" class="block_lt a22">最新招标订单</a><a href="<?php echo smarty_function_link(array('ctl'=>'tenders'),$_smarty_tpl);?>
" class="block rt red f12 mt10">我要申请>></a></h2>
            <div class="cl"></div>
            <div class="news_c_ul hauto bgwhite mt10">
                <div class="news_ul_l lt hauto">
                    <div class="news_ul_l lt hauto">
                        <div class="news_ul_l_span hauto">
                            <p class="lt p52"><span>日期</span><span>业主</span> <span>户型</span><span>预算</span></p>
                            <p class="lt p52"><span>日期</span><span>业主</span> <span>户型</span><span>预算</span></p>
                        </div>
                        <div class="cl"></div>
                        <ul>
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"tenders/tenders",'order'=>"new",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"12")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"tenders/tenders",'order'=>"new",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"12"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <li <{if $index > 9}> style="border-bottom:none;"<{/if}>>
                                <a target="_blank" title="<{$item.title}>" href="<{link ctl='tenders:detail' arg0=$item.id}>"><b><{$item.dateline|format:"m月d日"}></b></a>
                                <a target="_blank" title="<{$item.title}>" href="<{link ctl='tenders:detail' arg0=$item.id}>"><{$item.name|default:'--'}></a>
                                <a target="_blank" title="<{$item.title}>" href="<{link ctl='tenders:detail' arg0=$item.id}>" style="overflow: hidden;" ><{$item.house_type_title|default:'--'}></a>
                                <a target="_blank" title="<{$item.title}>" href="<{link ctl='tenders:detail' arg0=$item.id}>" class="a23"><{$item.budget_title}></a>
                            </li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"tenders/tenders",'order'=>"new",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"12"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
  
                            <div class="cl"></div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--最新招标订单结束-->
        <!--最新优惠开始-->
        <div class="news_r lt hauto">
            <h2>
                <a href="<?php echo smarty_function_link(array('ctl'=>'gs:youhui'),$_smarty_tpl);?>
" class="block_lt a22">最新优惠</a><a href="<?php echo smarty_function_link(array('ctl'=>'gs:youhui'),$_smarty_tpl);?>
" class="block rt f12 black8 mt10">更多>></a></h2>
            <div class="cl"></div>
            <div class="news_r_b bgwhite hauto mt10">
                <ul>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"company/youhui",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"new",'limit'=>"12")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"company/youhui",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"new",'limit'=>"12"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li>
                        <{if $item.status=='process'}>
                        <a target="_blank" title='<{$item.title}>' href="<{link ctl='gs:detail' arg0=$item.youhui_id}>" class="block_lt a24 red_bg">进行中</a>
                        <{elseif $item.status == 'wait'}>
                        <a  target="_blank" title='<{$item.title}>' href="<{link ctl='gs:detail' arg0=$item.youhui_id}>" class="block_lt a24 graybgg">未开始</a>
                        <{else}>
                        <a target="_blank" title='<{$item.title}>' href="<{link ctl='gs:detail' arg0=$item.youhui_id}>" class="block_lt a24 graybgg">已结束</a>
                        <{/if}>
                        <a target="_blank" title='<{$item.title}>' href="<{link ctl='gs:detail' arg0=$item.youhui_id}>" class="block_lt a25 black8" ><{$item.title|cutstr:25:''}></a>
                    </li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"company/youhui",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"new",'limit'=>"12"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </ul>
            </div>
        </div>
        <!--最新优惠结束-->
    </div>
    <!-------最新招标，最新签约end------->
    <!--找我家设计方案start-->
    <div class="search_home w1000 hauto mt15">
        <p>
            <span class="block_lt"><a href="<?php echo smarty_function_link(array('ctl'=>'home'),$_smarty_tpl);?>
" class="a26">找我家设计方案</a></span>
            <span class="block_lt span39"><font>足不出户，在线参观邻居的装修效果，找到您的装修灵感。</font></span>
            <span class="block rt"><a href="<?php echo smarty_function_link(array('ctl'=>'home'),$_smarty_tpl);?>
" class="block_lt black8 ml15 mt10">更多>></a></span>
        </p>
        <div class="cl"></div>
        <div class="seach_home_b w1000 bgwhite mt10">
            <ul>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"home/main",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"12")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"home/main",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"12"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li>
                    <a target="_blank" title="<{$item.name}>" href="<{link ctl='home:detail' arg0=$item.id}>"><img src="<{$pager.img}>/<{$item.face_pic}>" width="145" height="100"></a><br>
                    <a target="_blank" title="<{$item.name}>" href="<{link ctl='home:detail' arg0=$item.id}>" class="ftw f14 black"><{$item.name}></a><br>
                    <a target="_blank" title="<{$item.name}>" href="<{link ctl='home:detail' arg0=$item.id}>" class="f14 black8">设计方案:</a>&nbsp;&nbsp;<font class="red f14"><{$item.case_num|default:'--'}>套</font>
                    <p class="mt20"></p>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"home/main",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"12"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </div>                
    </div>
    <!--找我家设计方案end-->        
    <!-- 品牌装修公司开始 -->
    <div class="company_charts w1000 hauto mt15" >
        <h2><a href="<?php echo smarty_function_link(array('ctl'=>'gs'),$_smarty_tpl);?>
" class="block_lt">品牌装修公司</a><a href="<?php echo smarty_function_link(array('ctl'=>'passport:signup'),$_smarty_tpl);?>
" class="block rt a28">我要入驻>></a></h2>
    </div>
    <div class="company_charts_show w1000 hauto bgwhite mt10">	
        <div class="company_charts_show_l lt">
            <ul>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"1",'name'=>"品牌装修公司",'limit'=>"16",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'])); $_block_repeat=true; echo smarty_block_KT(array('id'=>"1",'name'=>"品牌装修公司",'limit'=>"16",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li><a target="_blank" title="<{$item.name}>" href="<{link ctl='company' arg0=$item.company_id}>"><img src="<{$pager.img}>/<{$item.logo}>" width="150" height="75"></a></li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"1",'name'=>"品牌装修公司",'limit'=>"16",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>  
        </div>
        <div class="company_charts_show_r lt">
            <div class="newest_qdb">
                <ul><li><a href="<?php echo smarty_function_link(array('ctl'=>'gs:items'),$_smarty_tpl);?>
" class="red">最新签单榜</a></li><li><a href="<?php echo smarty_function_link(array('ctl'=>'gs:items'),$_smarty_tpl);?>
"" class="red">最新加入</a></li></ul>
            </div>
            <div class="news_qdb_b none news_qdb_0 mt30">
                <ul>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"tenders_num:desc",'limit'=>"8")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"tenders_num:desc",'limit'=>"8"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li>
                        <div class="news_qdb_sum none">
                            <a target="_blank" title="<{$item.name}>" href="<{link ctl='company' arg0=$item.company_id}>" class="aa"><{($index+1)}></a>
                            <a target="_blank" title="<{$item.name}>" href="<{link ctl='company' arg0=$item.company_id}>" class="bb"><{$item.name}></a>
                        </div>
                        <div class="news_qdb_all none">
                            <div class="news_qdb_details mt5">
                                <a target="_blank" title="<{$item.name}>" href="<{link ctl='company' arg0=$item.company_id}>"><img src="<{$pager.img}>/<{$item.logo}>" width="110" height="55" /></a>
                                <span><font class="black">签单数</font>&nbsp;<font class="red"><{$item.tenders_num}></font></span>
                                <a target="_blank" title="<{$item.name}>" href="<{link ctl='company' arg0=$item.company_id}>" class="mfyu">免费预约</a>
                            </div>
                            <{calldata mdl="company/dianping" company_id=$item.company_id order="new" limit="1"}>
                            <p><font class="red">[最新评价]</font><{$item.content|cutstr:50}><font class="rt"><a target="_blank" title="<{$item.name}>" href="<{link ctl='company' arg0=$item.company_id}>"  class="black">更多</a></font></p>
                            <{/calldata}>
                        </div>
                        <div class="cl"></div>
                    </li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"tenders_num:desc",'limit'=>"8"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
                          
                </ul>
            </div>
            <div class="news_qdb_b none news_qdb_1 mt30">
                <ul>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"new",'limit'=>"8")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"new",'limit'=>"8"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li>
                        <div class="news_qdb_sum none"><a target="_blank" title="<{$item.name}>" href="<{link ctl='company' arg0=$item.company_id}>"  class="aa"><{($index+1)}></a><a target="_blank" title="<{$item.name}>" href="<{link ctl='company' arg0=$item.company_id}>" class="bb"><{$item.name}></a></div>
                        <div class="news_qdb_all none">
                            <div class="news_qdb_details mt5">
                                <a target="_blank" title="<{$item.name}>" href="<{link ctl='company' arg0=$item.company_id}>" ><img src="<{$pager.img}>/<{$item.logo}>" width="110" height="55" /></a>
                                <span><font class="black">口碑值</font>&nbsp;<font class="red"><{round($item.scores/10, 1)}></font></span>
                                <a target="_blank" title="<{$item.name}>" href="<{link ctl='company' arg0=$item.company_id}>" class="mfyu">免费预约</a>
                            </div>
                            <{calldata mdl="company/dianping" company_id=$item.company_id order="new" limit="1"}>
                            <p><font class="red">[最新评价]</font><{$item.content|cutstr:50}><font class="rt"><a target="_blank" title="<{$item.name}>" href="<{link ctl='company' arg0=$item.company_id}>" class="black">更多</a></font></p>
                            <{/calldata}>
                        </div>
                        <div class="cl"></div>
                    </li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"new",'limit'=>"8"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
                              
                </ul>
            </div>
        </div>
    </div>
    <!-- 品牌装修公司结束 -->
    <!-- 装修案例开始 -->
    <div class="decoration_case hauto mt15">
        <div class="decoration_case_title w1000 " >
            <h2 class="lt"><a href="<?php echo smarty_function_link(array('ctl'=>'case'),$_smarty_tpl);?>
">装修案例</a></h2><span class="rt mt10"><a href="<?php echo smarty_function_link(array('ctl'=>'case'),$_smarty_tpl);?>
">更多>></a></span>
        </div>
        <div class="cl"></div>
        <div class="decoration_case_b w1000 hauto bgwhite mt10">
            <div class="decoration_case_b_l lt bodr">
                <ul>
                    <li><a href="<?php echo smarty_function_link(array('ctl'=>'case'),$_smarty_tpl);?>
" class="dcotion_case_bg" ></a><p><a href="<?php echo smarty_function_link(array('ctl'=>'case'),$_smarty_tpl);?>
" class="red">风格</a><br /><font>Style</font></p></li>
                    <li><a href="<?php echo smarty_function_link(array('ctl'=>'case'),$_smarty_tpl);?>
" class="dcotion_case_bg"></a><p><a href="<?php echo smarty_function_link(array('ctl'=>'case'),$_smarty_tpl);?>
" class="red">空间</a><br /><font>Space</font></p></li>
                    <li><a href="<?php echo smarty_function_link(array('ctl'=>'case'),$_smarty_tpl);?>
" class="dcotion_case_bg "></a><p><a href="<?php echo smarty_function_link(array('ctl'=>'case'),$_smarty_tpl);?>
" class="red">别墅</a><br /><font>Ulila</font></p></li>
                    <li><a href="<?php echo smarty_function_link(array('ctl'=>'case'),$_smarty_tpl);?>
" class="dcotion_case_bg"></a><p><a href="<?php echo smarty_function_link(array('ctl'=>'case'),$_smarty_tpl);?>
" class="red">小户型</a><br /><font>Small</font></p></li>
                    <li><a href="<?php echo smarty_function_link(array('ctl'=>'case'),$_smarty_tpl);?>
" class="dcotion_case_bg"></a><p><a href="<?php echo smarty_function_link(array('ctl'=>'case'),$_smarty_tpl);?>
" class="red">公装</a><br /><font>Publicloaded</font></p></li>
                </ul>
            </div>
            <div class="decoration_case_b_all_1">
                <div class="decoration_case_b_r lt hauto bgwhite">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('name'=>"首页装修案例:风格",'limit'=>"1",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'])); $_block_repeat=true; echo smarty_block_KT(array('name'=>"首页装修案例:风格",'limit'=>"1",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <div class="decoration_case_b_r_l lt hauto">
                        <a href="<{link ctl='case:detail' arg0=$item.case_id}>"><img src="<{$pager.img}>/<{$item.thumb}>" width="240" height="295"/></a>
                        <p class="p1 none"></p>
                        <p class="text none"><a href="<{link ctl='case:detail' arg0=$item.case_id}>"><{$item.title}></a></p>
                    </div>
                    <div class="decoration_case_b_r_r lt hauto">
                        <ul>
                            <{foreach $item.ext.photos as $photo}>
                            <li>
                                <a href="<{link ctl='case:detail' arg0=$item.case_id}>"><img src="<{$pager.img}>/<{$photo.photo}>_thumb.jpg" width="180" height="145"/></a>
                                <p class="p1 none"></p>
                                <p class="text none"><a href="<{link ctl='case:detail' arg0=$item.case_id}>"><{$photo.title}></a></p>
                            </li>
                            <{if $photo@iteration > 5}><{break}><{/if}>
                            <{/foreach}>
                        </ul>
                    </div>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('name'=>"首页装修案例:风格",'limit'=>"1",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
            </div>
            <div class="decoration_case_b_all_2">
                <div class="decoration_case_b_r lt hauto bgwhite">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('name'=>"首页装修案例:空间",'limit'=>"1",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'])); $_block_repeat=true; echo smarty_block_KT(array('name'=>"首页装修案例:空间",'limit'=>"1",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <div class="decoration_case_b_r_l lt hauto">
                        <a href="<{link ctl='case:detail' arg0=$item.case_id}>"><img src="<{$pager.img}>/<{$item.thumb}>" width="240" height="295"/></a>
                        <p class="p1 none"></p>
                        <p class="text none"><a href="<{link ctl='case:detail' arg0=$item.case_id}>"><{$item.title}></a></p>
                    </div>
                    <div class="decoration_case_b_r_r lt hauto">
                        <ul>
                            <{foreach $item.ext.photos as $photo}>
                            <li>
                                <a href="<{link ctl='case:detail' arg0=$item.case_id}>"><img src="<{$pager.img}>/<{$photo.photo}>_thumb.jpg" width="180" height="145"/></a>
                                <p class="p1 none"></p>
                                <p class="text none"><a href="<{link ctl='case:detail' arg0=$item.case_id}>"><{$photo.title}></a></p>
                            </li>
                            <{if $photo@iteration > 5}><{break}><{/if}>
                            <{/foreach}>
                        </ul>
                    </div>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('name'=>"首页装修案例:空间",'limit'=>"1",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
            </div>
            <div class="decoration_case_b_all_3">
                <div class="decoration_case_b_r lt hauto bgwhite">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('name'=>"首页装修案例:别墅",'limit'=>"1",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'])); $_block_repeat=true; echo smarty_block_KT(array('name'=>"首页装修案例:别墅",'limit'=>"1",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <div class="decoration_case_b_r_l lt hauto">
                        <a href="<{link ctl='case:detail' arg0=$item.case_id}>"><img src="<{$pager.img}>/<{$item.thumb}>" width="240" height="295"/></a>
                        <p class="p1 none"></p>
                        <p class="text none"><a href="<{link ctl='case:detail' arg0=$item.case_id}>"><{$item.title}></a></p>
                    </div>
                    <div class="decoration_case_b_r_r lt hauto">
                        <ul>
                            <{foreach $item.ext.photos as $photo}>
                            <li>
                                <a href="<{link ctl='case:detail' arg0=$item.case_id}>"><img src="<{$pager.img}>/<{$photo.photo}>_thumb.jpg" width="180" height="145"/></a>
                                <p class="p1 none"></p>
                                <p class="text none"><a href="<{link ctl='case:detail' arg0=$item.case_id}>"><{$photo.title}></a></p>
                            </li>
                            <{if $photo@iteration > 5}><{break}><{/if}>
                            <{/foreach}>
                        </ul>
                    </div>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('name'=>"首页装修案例:别墅",'limit'=>"1",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
            </div>
            <div class="decoration_case_b_all_4">
                <div class="decoration_case_b_r lt hauto bgwhite">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('name'=>"首页装修案例:小户型",'limit'=>"1",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'])); $_block_repeat=true; echo smarty_block_KT(array('name'=>"首页装修案例:小户型",'limit'=>"1",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <div class="decoration_case_b_r_l lt hauto">
                        <a href="<{link ctl='case:detail' arg0=$item.case_id}>"><img src="<{$pager.img}>/<{$item.thumb}>" width="240" height="295"/></a>
                        <p class="p1 none"></p>
                        <p class="text none"><a href="<{link ctl='case:detail' arg0=$item.case_id}>"><{$item.title}></a></p>
                    </div>
                    <div class="decoration_case_b_r_r lt hauto">
                        <ul>
                            <{foreach $item.ext.photos as $photo}>
                            <li>
                                <a title="<{$item.title}>" target="_blank" href="<{link ctl='case:detail' arg0=$item.case_id}>"><img src="<{$pager.img}>/<{$photo.photo}>_thumb.jpg" width="180" height="145"/></a>
                                <p class="p1 none"></p>
                                <p class="text none"><a title="<{$item.title}>" target="_blank" href="<{link ctl='case:detail' arg0=$item.case_id}>"><{$photo.title}></a></p>
                            </li>
                            <{if $photo@iteration > 5}><{break}><{/if}>
                            <{/foreach}>
                        </ul>
                    </div>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('name'=>"首页装修案例:小户型",'limit'=>"1",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
            </div>
            <div class="decoration_case_b_all_5">
                <div class="decoration_case_b_r lt hauto bgwhite">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('name'=>"首页装修案例:公装",'limit'=>"1",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'])); $_block_repeat=true; echo smarty_block_KT(array('name'=>"首页装修案例:公装",'limit'=>"1",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <div class="decoration_case_b_r_l lt hauto">
                        <a title="<{$item.title}>" target="_blank" href="<{link ctl='case:detail' arg0=$item.case_id}>"><img src="<{$pager.img}>/<{$item.thumb}>" width="240" height="295"/></a>
                        <p class="p1 none"></p>
                        <p class="text none"><a title="<{$item.title}>" target="_blank"  href="<{link ctl='case:detail' arg0=$item.case_id}>"><{$item.title}></a></p>
                    </div>
                    <div class="decoration_case_b_r_r lt hauto">
                        <ul>
                            <{foreach $item.ext.photos as $photo}>
                            <li>
                                <a title="<{$item.title}>" target="_blank" href="<{link ctl='case:detail' arg0=$item.case_id}>"><img src="<{$pager.img}>/<{$photo.photo}>_thumb.jpg" width="180" height="145"/></a>
                                <p class="p1 none"></p>
                                <p class="text none"><a href="<{link ctl='case:detail' arg0=$item.case_id}>"><{$photo.title}></a></p>
                            </li>
                            <{if $photo@iteration > 5}><{break}><{/if}>
                            <{/foreach}>
                        </ul>
                    </div>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('name'=>"首页装修案例:公装",'limit'=>"1",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        (function(K, $) {
            $(".decoration_case_b_l ul li").mouseover(function() {
                var index = $(this).index();
                $(".decoration_case_b_l ul li").each(function(a) {
                    if (a == index) {
                        $(this).addClass("dcotion_case_bgon");
                        $(this).find(".red").css('color', '#E53236');
                        $(this).find(".dcotion_case_bg").stop().animate({backgroundPositionX: '-225px'}, 100);
                    } else {
                        $(this).removeClass("dcotion_case_bgon");
                        $(this).find(".red").css('color', '');
                        $(this).find(".dcotion_case_bg").stop().animate({backgroundPositionX: '-179px'}, 100)
                    }
                });
            });
        })(window.KT, window.jQuery);
    </script>
    <!--------------装修案例结束-------------------->
    <!-- 团购活动开始 -->
    <div class="w1000 tuan_acitivity hauto mt15">
        <h2>
            <a href="<?php echo smarty_function_link(array('ctl'=>'activity'),$_smarty_tpl);?>
" class="block_lt">团购活动</a>
            <a href="<?php echo smarty_function_link(array('ctl'=>'activity'),$_smarty_tpl);?>
" class="block rt a29 mt10">更多>></a>
        </h2>
        <div class="cl"></div>
        <div class="w1000 tuan_acitivity1 hauto mt10 bgwhite mt10">
            <div class="tuan_acitivity1_l lt hauto bodr_r">
                <ul>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"activity/main",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"new",'limit'=>"6")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"activity/main",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"new",'limit'=>"6"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li>
                        <h2><{$item.title}></h2>
                        <p>活动时间：<{strtotime($item.bg_time)|format:"m月d日"}>-<{strtotime($item.end_time)|format:"m月d日"}></p>
                        <p>地址：<{$item.addr|cutstr:20}></p>
                        <p class="mb20"></p>
                        <p>
                            <a target="_blank" href="<{link ctl='activity:detail' arg0=$item.id}>" class="a30 block_lt red_bg mr10">免费报名</a>
                            <span class="block_lt mb10"><font class="red f12 ftw"><{$item.sign_num}>人</font><font class="f12 black ftw">已报名</font></span>
                        </p>
                        <p class="cl"></p>                                   
                    </li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"activity/main",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"new",'limit'=>"6"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </ul>
                <div class="cl"></div>
                <p class="h10"></p>
            </div>
            <div class="tuan_acitivity1_r lt hauto mb20">
                <?php echo smarty_function_widget(array('id'=>"adv",'name'=>"首页团购活动右侧广告位",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"5"),$_smarty_tpl);?>

            </div>                    
        </div>              
    </div>
    <script>
        $(document).ready(function() {
            $(".tuan_acitivity1_l ul li").mouseover(function() {
                var index = $(this).index();
                $(".tuan_acitivity1_l ul li").each(function(a) {
                    if (a == index) {
                        $(this).css('background', '#EAEAEA');

                    } else {

                        $(this).css('background', '')

                    }
                });
            }).mouseout(function() {
                $(this).css('background', 'none');

            });
        });
    </script>
    <!-- 团购活动结束 -->
    <!---------建材商城start----------->
    <div class="materials_mall w1000 hauto mt15">
        <h2><a href="<?php echo smarty_function_link(array('ctl'=>'mall/index'),$_smarty_tpl);?>
" class="block_lt">建材商城</a><a href="<?php echo smarty_function_link(array('ctl'=>'mall/index'),$_smarty_tpl);?>
" class="block rt a31 mt10">更多>></a></h2>
        <div class="cl"></div>
        <div class="materials_mall_all w1000 hauto bgwhite mt10">
            <div class="materials_mall_all_l lt hauto">
                <div class="materials_mall_all_l_t hauto">
                    <div style="width: 350px; float: left; "><div  id="mall_ad_1" kinBox='{"height":200}'><?php echo smarty_function_widget(array('id'=>"adv",'name'=>"首页材料商城左侧广告位",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"5"),$_smarty_tpl);?>
</div></div>
                    <ul class="materials_mall_all_l_t_ul">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"shop/coupon",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"7")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"shop/coupon",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"7"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li>
                            <a href="<{link ctl='mall/shop' arg0=$item.shop_id}>" title="<{$item.ext.shop.name}>" target="_blank" class="red ftw">[<{$item.ext.shop.name}>]</a>
                            <a href="<{link ctl='mall/coupon:detail' arg0=$item.coupon_id}>" title="<{$item.title}>" target="_blank" class="black8"><{$item.title}></a>
                            <a href="<{link ctl='mall/coupon:detail' arg0=$item.coupon_id}>" target="_blank" class="a32 icobg"></a>
                        </li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"shop/coupon",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"7"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </ul>
                </div>

                <div class="materials_mall_all_l_b hauto">
                    <ul>
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('name'=>"首页建材商城推荐商家",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"8")); $_block_repeat=true; echo smarty_block_KT(array('name'=>"首页建材商城推荐商家",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"8"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li><a href="<{link ctl='mall/shop' arg0=$item.shop_id}>" title="<{$item.title}>" target="_blank"><img src="<{$pager.img}>/<{$item.logo}>" width="145" height="70"/></a></li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('name'=>"首页建材商城推荐商家",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"8"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </ul>
                </div>
            </div>
            <div class="materials_mall_all_r lt hauto mt10">
				<div style="width: 250px; float: left;"><div id="mall_id_2" kinBox='{"height":360}'><?php echo smarty_function_widget(array('id'=>"adv",'name'=>"首页材料商城右侧轮播广告",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"5"),$_smarty_tpl);?>
</div></div>
            </div> 
        </div>
    </div> 
    <!---------建材商城end----------->
    <script>
        $(document).ready(function() {
            $(".materials_mall_all_l_b ul li").eq(3).css('border-right', 'none');
            $(".materials_mall_all_l_b ul li").eq(4).css('border-bottom', 'none');
            $(".materials_mall_all_l_b ul li").eq(5).css('border-bottom', 'none');
            $(".materials_mall_all_l_b ul li").eq(6).css('border-bottom', 'none');
            $(".materials_mall_all_l_b ul li").eq(7).css('border-right', 'none').css('border-bottom', 'none');
        });
    </script>

    <!------设计师开始------->
    <div class="recommend_designer w1000 hauto mt15">
        <h2><a href="<?php echo smarty_function_link(array('ctl'=>'designer'),$_smarty_tpl);?>
">推荐设计师</a></h2>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('name'=>"首页推荐设计师",'limit'=>"2",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'])); $_block_repeat=true; echo smarty_block_KT(array('name'=>"首页推荐设计师",'limit'=>"2",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="decoration_designer_l lt bgwhite mt10">
            <div class="decoration_designer_l_l lt">
                <div class="designer_name lt">
                    <a target="_blank" href="<{link ctl='blog' arg0=$item.uid}>" title="<{$item.realname}>"><img src="<{$pager.img}>/<{$item.face}>" width="100" height="100" /></a><br />
                    <p>设计师：<b><a target="_blank" href="<{link ctl='blog' arg0=$item.uid}>"  title="<{$item.realname}>"><{$item.realname|cutstr:8:''}></a></b></p>
                    <p class="consult pinkbg"><a target="_blank" href="<{link ctl='blog' arg0=$item.uid}>" title="<{$item.realname}>">我要咨询</a></p>
                </div>
                <{calldata mdl="case/case" designer_id=$item.uid limit="1"}>
                <div class="design_idea lt">
                    <p><font class="black"><b>[设计理念]</b></font>:<{$item.intro|cutstr:25:''}></p>
                    <{foreach $item.ext.photos as $photo}>
                    <p class="case_p lt">
                        <a target="_blank" href="<{link ctl='case:detail' arg0=$item.case_id}>"  title="<{$photo.title}>"><img src="<{$pager.img}>/<{$photo.photo}>_thumb.jpg" width="120" height="95" /></a>
                        <span></span>
                        <span class="text1"><a target="_blank" href="<{link ctl='case:detail' arg0=$item.case_id}>"  title="<{$photo.title}>"><{$photo.title}></a></span>
                    </p>
                    <{if $photo@index>0}><{break}><{/if}>
                    <{/foreach}>
                    <div class="cl"></div>
                    <p class="simple"><{foreach $item.ext.attrs as $k=>$v}><span class="simple_style lt"><a target="_blank" href="<{link ctl='case:detail' arg0=$item.case_id}>"  title="<{$photo.title}>"  target="_blank"><{$v}></a></span><{/foreach}></p>
                </div>
                <{/calldata}>
            </div>     
        </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('name'=>"首页推荐设计师",'limit'=>"2",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <div class="ads2 lt mt10">
            <a href="<?php echo smarty_function_link(array('ctl'=>'passport:signup'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/pic/ads7.png" width="140" height="230" /></a>
        </div> 
    </div>
    <div class="designer mt10 w1000 hauto bgwhite">                  
        <div class="wraper lt mb30">
            <ul class="gundong_img lt" >
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"designer/designer",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"orderby:desc",'limit'=>"8")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"designer/designer",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"orderby:desc",'limit'=>"8"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li>
                    <a target="_blank" href="<{link ctl='blog' arg0=$item.uid}>" title="<{$item.realname}>"><img src="<{$pager.img}>/<{$item.face}>" width="100" height="100" /></a><br />
                    <a target="_blank" href="<{link ctl='blog' arg0=$item.uid}>" title="<{$item.realname}>" class="red"><b><{$item.realname}></b></a>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"designer/designer",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"orderby:desc",'limit'=>"8"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>                  
        </div>
    </div>
    <!------设计师结束------->    
    <!------设计师结束------->     

    <!------装修课堂开始--------->
    <div class="decoration_class w1000 hauto mt15">
        <h2><a href="<?php echo smarty_function_link(array('ctl'=>'content:items'),$_smarty_tpl);?>
" class="block_lt">装修课堂</a><a href="<?php echo smarty_function_link(array('ctl'=>'content:items'),$_smarty_tpl);?>
" class="block rt a31 mt10">更多>></a></h2>
        <div class="cl"></div>
        <div class="w1000 hauto bgwhite mt10">
            <div class="decoration_class_t hauto w1000">
                <div class="decoration_class_t_l hauto bodr_r lt">
                    <div class="decoration_class_t_l_l lt" style="width: 300px;">

                        <div id="mall_id_3" kinBox='{"height":340}'><?php echo smarty_function_widget(array('id'=>"adv",'name'=>"首页最下面装修学堂轮播广告位",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"5"),$_smarty_tpl);?>
</div>
                    </div>
                    <div class="decoration_class_t_l_r lt">
                        <p class="f18 p35">
                              <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"article/view",'from'=>'article','order'=>"views:desc",'limit'=>"1")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"article/view",'from'=>'article','order'=>"views:desc",'limit'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                              <a target="_blank" href="<{link ctl='content:detail' arg0=$item.article_id}>" title="<{$item.title}>" ><{$item.title}></a>
                              <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"article/view",'from'=>'article','order'=>"views:desc",'limit'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </p>
                        <ul class="bodr_b">
                            <?php echo smarty_function_widget(array('id'=>'article/newitems','limit'=>2),$_smarty_tpl);?>

                            <p class="mt10"></p>
                        </ul>
                        <ul class="mt15 bodr_b">
                            <?php echo smarty_function_widget(array('id'=>'diary/right','limit'=>4,'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>

                            <p class="mt10"></p>
                        </ul>
                        <ul class="mt15">
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"ask/ask",'answer_id'=>'>:0','order'=>"ask_id:desc",'limit'=>"5")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"ask/ask",'answer_id'=>'>:0','order'=>"ask_id:desc",'limit'=>"5"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 
                            <li>
                                <a href="<{link ctl='ask'}>" class="f14 red">装修问答</a><font class="f14">&nbsp;|&nbsp;</font>
                               <a target='_blank' title="<{$item.title}>" href="<{link ctl='ask:detail' arg0=$item.ask_id}>"  class="f14 black8"><{$item.title}></a>
                            </li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"ask/ask",'answer_id'=>'>:0','order'=>"ask_id:desc",'limit'=>"5"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
                                   
                            <p class="mt10"></p>                                        
                        </ul>
                    </div>
                </div>
                <div class="decoration_class_t_r hauto lt">
                    <div class="decoration_class_t_r_img hauto">
                        <ul>
                            <li>
                                <a target="_blank" title="涂料计算器" href="<?php echo smarty_function_link(array('ctl'=>'tools:items','arg0'=>'main'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/pic/tljsq.png" width="56" height="56"/></a><br/>
                                 <a target="_blank" title="涂料计算器" href="<?php echo smarty_function_link(array('ctl'=>'tools:items','arg0'=>'main'),$_smarty_tpl);?>
">涂料计算器</a>
                            </li>
                            <li>
                                <a target="_blank" title="地板计算器" href="<?php echo smarty_function_link(array('ctl'=>'tools:items','arg0'=>'diban'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/pic/dbjsq.png" width="56" height="56"/></a><br/>
                                <a target="_blank" title="地板计算器" href="<?php echo smarty_function_link(array('ctl'=>'tools:items','arg0'=>'diban'),$_smarty_tpl);?>
">地板计算器</a>
                            </li>
                            <li>
                                <a target="_blank" title="壁纸计算器" href="<?php echo smarty_function_link(array('ctl'=>'tools:items','arg0'=>'bizhi'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/pic/tpjsq.png" width="56" height="56"/></a><br/>
                               <a target="_blank" title="壁纸计算器" href="<?php echo smarty_function_link(array('ctl'=>'tools:items','arg0'=>'bizhi'),$_smarty_tpl);?>
">壁纸计算器</a>
                            </li>
                            <li>
                                <a target="_blank" title="墙砖预算器" href="<?php echo smarty_function_link(array('ctl'=>'tools:items','arg0'=>'qiangzhuan'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/pic/dbjsq.png" width="56" height="56"/></a><br/>
                                <a target="_blank" title="墙砖预算器" href="<?php echo smarty_function_link(array('ctl'=>'tools:items','arg0'=>'qiangzhuan'),$_smarty_tpl);?>
">墙砖预算器</a>
                            </li>
                            <li>
                                <a target="_blank" title="窗帘计算器" href="<?php echo smarty_function_link(array('ctl'=>'tools:items','arg0'=>'chuanlian'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/pic/tljsq1.png" width="56" height="56"/></a><br/>
                                <a target="_blank" title="窗帘计算器" href="<?php echo smarty_function_link(array('ctl'=>'tools:items','arg0'=>'chuanlian'),$_smarty_tpl);?>
">窗帘计算器</a>
                            </li>
                            <li>
                                <a target="_blank" title="地砖计算器" href="<?php echo smarty_function_link(array('ctl'=>'tools:items','arg0'=>'dizhuan'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/pic/dbjsq2.png" width="56" height="56"/></a><br/>
                               <a target="_blank" title="地砖计算器" href="<?php echo smarty_function_link(array('ctl'=>'tools:items','arg0'=>'dizhuan'),$_smarty_tpl);?>
">地砖计算器</a>
                            </li>
                        </ul>

                    </div>

                    <p class="bodr_b"></p>
                    <div class="decoration_class_t_r_img1">
                        <?php echo smarty_function_widget(array('id'=>"adv",'name'=>"首页最下面装修学堂右侧小图广告",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"1"),$_smarty_tpl);?>

                    </div>
                </div>

            </div>
            <div class="cl"></div>
            <div class="decoration_class_b hauto w1000 mt5">
                <h2 class="ml10 bodr_b">
                    <a href="<?php echo smarty_function_link(array('ctl'=>'content'),$_smarty_tpl);?>
" class="block_lt">猜您喜欢</a>
                    <span class="block rt">

                        <a href="<?php echo smarty_function_link(array('ctl'=>'content'),$_smarty_tpl);?>
" class="mr10">更多>></a>
                    </span>
                </h2>
                <div class="cl"></div>
                <ul class="lt ml10 mt10 ul1">
                     <?php echo smarty_function_widget(array('id'=>'article/randitems','limit'=>3),$_smarty_tpl);?>
                   
                </ul>
                <div class="cl"></div>
                <div class="mt20"></div>                        
            </div>
        </div>

    </div>
    <!------装修课堂结束--------->
    <!-------- 友情链接------------>
    <div class="friends_link w1000 hauto mt20 mb20">
        <h2><a href="<?php echo smarty_function_link(array('ctl'=>'about:link'),$_smarty_tpl);?>
" target="_blank">友情链接</a></h2>
        <div class="w1000 friend_link_show bgwhite hauto mt10"><p><?php echo smarty_function_widget(array('id'=>"links",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>
</p></div>
    </div>
    <!-------- //友情链接------------>
</div>
<script type="text/javascript">
    (function(K, $) {
        $(".company_charts_show_l_t ul li").mouseover(function() {
            var index = $(this).index();
            $(".company_charts_show_l_t ul li").each(function(a) {
                var q = a + 1
                if (a == index) {
                    $(".company_chats_" + q).show();
                    $(this).css('background', '');
                } else {
                    $(".company_chats_" + q).hide();
                    $(this).css('background', '#F2F2F2');
                }
            });
        });
        $(".company_charts_show_l_t ul li").eq(0).mouseover();
        $(".news_qdb_1 ul li").mouseover(function() {
            var index = $(this).index();
            $(".news_qdb_1 ul li").each(function(a) {
                if (a == index) {
                    $(this).find(".news_qdb_all").show();
                    $(this).find(".news_qdb_sum").hide();
                } else {
                    $(this).find(".news_qdb_all").hide();
                    $(this).find(".news_qdb_sum").show();
                }

            });

        });

        $(".news_qdb_1 ul li").eq(0).mouseover();

        $(".news_qdb_0 ul li").mouseover(function() {
            var index = $(this).index();
            $(".news_qdb_0 ul li").each(function(a) {
                if (a == index) {
                    $(this).find(".news_qdb_all").show();
                    $(this).find(".news_qdb_sum").hide();
                } else {
                    $(this).find(".news_qdb_all").hide();
                    $(this).find(".news_qdb_sum").show();
                }
            });
        });

        $(".news_qdb_0 ul li").eq(0).mouseover();
        $(".newest_qdb li").mouseover(function() {
            var index = $(this).index();
            $(".newest_qdb li").each(function(a) {
                if (a == index) {
                    $(this).css('background', '#FFF');
                    $(this).find(".red").css('color', '#F00').css('font-size', '16px');
                    $(this).css('border-bottom', '');
                    $(this).css('border-left', '');
					$(this).css('border-right', '');
                    $(".news_qdb_" + a).show();
                } else {
                    $(this).css('background', '');
                    $(this).find(".red").css('color', '#888888').css('font-size', '');
                    $(this).css('border-bottom', '1px solid #EAEAEA');
                    $(this).css('border-left', '1px solid #EAEAEA');
					$(this).css('border-right', '1px solid #EAEAEA');
                    $(".news_qdb_" + a).hide();
                }
            });
        });
        $(".newest_qdb li").eq(0).mouseover();
        $(".materrial_mall_show_l ul li:eq(4)").css('border-right', 'none');
        $(".materrial_mall_show_l ul li:eq(9)").css('border-right', 'none');
        $(".materrial_mall_show_l ul li:eq(14)").css('border-right', 'none').css('border-bottom', 'none');
        $(".materrial_mall_show_l ul li:eq(10)").css('border-bottom', 'none');
        $(".materrial_mall_show_l ul li:eq(11)").css('border-bottom', 'none');
        $(".materrial_mall_show_l ul li:eq(12)").css('border-bottom', 'none');
        $(".materrial_mall_show_l ul li:eq(13)").css('border-bottom', 'none');
        $(".decoration_case_b_l ul li").mouseover(function() {
            var index = $(this).index();
            $(".decoration_case_b_l ul li").each(function(a) {
                var nn = a + 1
                if (a == index) {

                    $(".decoration_case_b_all_" + nn).show();
                } else {
                    $(this).find("a").removeClass("currentt");
                    $(".decoration_case_b_all_" + nn).hide();
                }

            });
        });
        $(".decoration_case_b_l ul li").eq(0).mouseover();



        $(".news_ul_l ul li").mouseover(function() {
            var index = $(this).index();
            $(".news_ul_l ul li").each(function(a) {
                if (a == index) {
                    $(this).css('background', '#EAEAEA');

                } else {

                    $(this).css('background', '')

                }
            });
        }).mouseout(function() {
            $(this).css('background', 'none');

        });

        $(".news_ul_r ul li").mouseover(function() {
            var index = $(this).index();
            $(".news_ul_r ul li").each(function(a) {
                if (a == index) {
                    $(this).css('background', '#EAEAEA');

                } else {

                    $(this).css('background', '')

                }
            });
        }).mouseout(function() {
            $(this).css('background', 'none');

        });


        $(".decoration_case_b_r_l").mouseover(function() {
            $(this).find(".p1").show();
            $(this).find(".text").show();

        }).mouseout(function() {
            $(this).find(".p1").hide();
            $(this).find(".text").hide();
        });


        $(".decoration_case_b_r_r ul li").mouseover(function() {
            $(this).find(".p1").show();
            $(this).find(".text").show();

        }).mouseout(function() {
            $(this).find(".p1").hide();
            $(this).find(".text").hide();
        });
    })(window.KT, window.jQuery);



</script>
<?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>