<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:38:57
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/home.html" */ ?>
<?php /*%%SmartyHeaderCode:4346684155d7eed1d71121-51535770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '191d2fa56efbc50f9358303c3aeb10052eda7bd1' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/home.html',
      1 => 1402847813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4346684155d7eed1d71121-51535770',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'area_list' => 0,
    'item' => 0,
    'attr_values' => 0,
    'request' => 0,
    'it2' => 0,
    'pager' => 0,
    'sites' => 0,
    'company_list' => 0,
    'cases' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7eed24390a9_34785559',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7eed24390a9_34785559')) {function content_55d7eed24390a9_34785559($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_function_widget')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.widget.php';
if (!is_callable('smarty_block_calldata')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/block.calldata.php';
if (!is_callable('smarty_modifier_cutstr')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.cutstr.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!----------头部和导航公共部分------------> 
<div class="index_b_bg hauto">

    <!--  聚合区域 -->
    <div class="home_all w1000 hauto mt10">
        <div class="home_all_l lt bgwhite" style='height: 225px;'>
            <div class="home_all_l_t hauto bodr_b_x">
                <p>
                    <span class="block icobg lt span10"></span>
                    <span class="block lt">区域</span>
                </p>
                <div class="cl"></div>
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['area_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['area']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['area']['index']++;
?>
                <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['area']['index']<8){?>
                <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['area_name'];?>
小区" href="<?php echo smarty_function_link(array('ctl'=>'home:items','arg0'=>$_smarty_tpl->tpl_vars['item']->value['area_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['area_name'];?>
</a>
                <?php }?>
                <?php } ?>
                <a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'home:items'),$_smarty_tpl);?>
">更多>></a>


            </div>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['attr_values']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['one']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['one']['index']++;
?>
            <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['one']['index']<1){?>
            <div class="home_all_l_t hauto mb20 mt20">
                <p>
                    <span class="block icobg lt span11"></span>
                    <span class="block lt"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</span>
                </p>
                <div class="cl"></div>
                <?php  $_smarty_tpl->tpl_vars['it2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['two']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['it2']->key => $_smarty_tpl->tpl_vars['it2']->value){
$_smarty_tpl->tpl_vars['it2']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['two']['index']++;
?>
                <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['two']['index']<8){?>
                <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
<?php echo $_smarty_tpl->tpl_vars['it2']->value['title'];?>
小区" href="<?php echo $_smarty_tpl->tpl_vars['it2']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['it2']->value['title'];?>
</a>
                <?php }?>
                <?php } ?>
                <a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'home:items'),$_smarty_tpl);?>
">更多>></a>
            </div>
            <?php }?>
            <?php } ?>
        </div>
        <div class="home_all_c lt ml10 mr10" style="width:740px;">
            <div id="home_ad1" kinBox='{"height":225}'><?php echo smarty_function_widget(array('id'=>"adv",'name'=>"找我家聚合页广告位",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"5"),$_smarty_tpl);?>
</div>
        </div>
        <div class="home_all_r lt hauto bgwhite">
            <p>
                <font class="ftw black f17">想看哪个</font>
                <font class="ftw red f17">楼盘</font>，
                <font class="ftw black f17">哪个</font><font class="ftw red f17">户型？</font><br />
                <font class="f12">提交信息，试试看</font>
            </p>
            <form mini-form="survey" action="<?php echo smarty_function_link(array('ctl'=>'home:survey','http'=>true),$_smarty_tpl);?>
" method="post">
                <input type="text" name="data[home_name]"  value="请输入楼盘名称" class="lp_hx bodr lp"/>
                <select name='data[area_id]' class="hx bodr mt10">
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['area_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['area']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['area']['index']++;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['area_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['area_name'];?>
</option>
                    <?php } ?>

                </select>
                <input type="text" name="data[tel]"  value="请输入你的联系电话" class="lp_hx bodr mt10 ph"/>
                <input type="submit"  value="提交调查" class="lp_hxq bodr mt10 redbg dc"/>
            </form>
            <p>
                已有<font class="red">25630</font>人提交
            </p>

        </div>


    </div>
    <div class="cl"></div>
    <!--  小区区域 -->
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
    <div class="w1000 xq_area hauto mt20">
        <div class="xq_area_l lt hauto mr10">
            <div class="xq_area_l_t hauto">
                <span class="span12 block lt">小区</span>
                <span class="span13 block rt mt10"><a href="<?php echo smarty_function_link(array('ctl'=>'home:items'),$_smarty_tpl);?>
">更多>></a></span>
            </div>
            <div class="cl"></div>
            <div class="xq_area_l_b hauto bgwhite mt10 mr10">
                <ul>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"home/main",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"pv_num:desc",'limit'=>"4")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"home/main",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"pv_num:desc",'limit'=>"4"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li>
                        <a href="<{link ctl='home:detail' arg0=$item.id}>" title='<{$item.name}>'><img src="<{$pager.img}>/<{$item.face_pic}>" width="120" height="100" /></a>
                        <p>
                            <a href="<{link ctl='home:detail' arg0=$item.id}>" title='<{$item.name}>'  class="f16 ftw blackb"><font><{$item.name}></font></a><br />
                            <font class="f12 ftw blackb">均 价：</font><font class="f12 red"><{$item.price}></font><br />   
                            <font class="f12 ftw blackb">开发商：</font><{$item.kf}><br />
                            <font class="f12 ftw blackb">地址：</font><{$item.addr}>
                        </p>
                    </li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"home/main",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"pv_num:desc",'limit'=>"4"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </ul>
            </div>
        </div>
        <div class="xq_area_r lt bgwhite bodr">
            <a href="<?php echo smarty_function_link(array('ctl'=>'home:maps'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/images/map.png"  width="210" height="280"/></a>
            <div class="search_map icobg">
                <p>
                    <font>地图找小区</font><br />
                    <a href="<?php echo smarty_function_link(array('ctl'=>'home:maps'),$_smarty_tpl);?>
"><u>点击进入>></u></a>
                </p>
            </div>
        </div>

    </div>
    <div class="cl"></div>
    <!--  在建工地区域开始 -->
    <div class="w1000 hauto mt20">
        <!-- 在建工地左面开始-->
        <div class="xq_area_l lt hauto mr10">
            <div class="xq_area_l_t hauto">
                <span class="span12 block lt">在建工地</span>
                <span class="span13 block rt mt10"><a href="<?php echo smarty_function_link(array('ctl'=>'site'),$_smarty_tpl);?>
">更多>></a></span>
            </div>
            <div class="cl"></div>
            <div class="zjgd_area_l_b hauto bgwhite mt10 mr10">
                <ul>
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sites']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                    <li>
                        <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['face_pic'];?>
" width="120" height="100" /></a>
                        <div class="zjgd_area_p lt ml10">
                            <p>
                                <font class="f16 ftw blackb"><a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],20,'');?>
</a></font><br />
                                <font class="f12">由</font><a title="<?php echo $_smarty_tpl->tpl_vars['company_list']->value[$_smarty_tpl->tpl_vars['item']->value['company_id']]['name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['item']->value['company_id']),$_smarty_tpl);?>
"><font class="f12 red"><?php echo $_smarty_tpl->tpl_vars['company_list']->value[$_smarty_tpl->tpl_vars['item']->value['company_id']]['name'];?>
</font></a><font class="f12">提供</font><br />
                                <font class="f12">地址：<?php echo $_smarty_tpl->tpl_vars['item']->value['addr'];?>
</font>
                            </p>
                            <p class="p5 mt10"><a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"  href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
">我要参观</a></p>
                        </div>
                        <div class="cl"></div>
                        <p class="red f12 mt20">参观工地样板房，全程免费专车接送</p>
                    </li>
                    <?php } ?>
                </ul>
                <!---这里前端处理的不好有待改进 让程序逻辑复杂化了-->
                <div class="zjgd_xunhuan hauto mt30">
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sites']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['index']++;
?>
                    <div class="zjgd_xunhuan_l lt mb20 <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['index']>0){?>ml20<?php }?>">
                        <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"  href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['status']>=1){?>class="current12"<?php }?>>开工大吉</a>
                        <span class="block_lt span56">—</span>
                        <a <?php if ($_smarty_tpl->tpl_vars['item']->value['status']>=2){?>class="current12"<?php }?> target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"  href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
">水电改造</a>
                        <span class="block_lt span56">—</span>
                        <a <?php if ($_smarty_tpl->tpl_vars['item']->value['status']>=3){?>class="current12"<?php }?> target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"  href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
">泥瓦工</a>
                        <span class="block_lt span56">—</span>
                        <a <?php if ($_smarty_tpl->tpl_vars['item']->value['status']>=4){?>class="current12"<?php }?> target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"  href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
">木工</a>
                        <span class="block_lt span56">—</span>
                        <a <?php if ($_smarty_tpl->tpl_vars['item']->value['status']>=5){?>class="current12"<?php }?> target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"  href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
">油漆</a>
                        <span class="block_lt span56">—</span>
                        <a <?php if ($_smarty_tpl->tpl_vars['item']->value['status']>=6){?>class="current12"<?php }?> target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"  href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
">安装</a>
                        <span class="block_lt span56">—</span>
                        <a <?php if ($_smarty_tpl->tpl_vars['item']->value['status']>=7){?>class="current12"<?php }?> target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"  href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
">验收</a>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="cl"></div>


        </div>
        <!--      在建工地左面结束-->
        <!--      在建工地右面开始-->
        <div class="zjgd_area_r lt hauto">
            <div class="zjgd_area_r_t hauto">
                <ul>
                    <li><a href="###" class="current3">工地最多</a></li>
                    <li><a href="###">最新更新</a></li>
                </ul>
            </div>
            <div class="zjgd_area_r_b bgwhite mt10 zjgd_area_0 none">
                <ul>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"site_num:desc",'limit'=>"6")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"site_num:desc",'limit'=>"6"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li>
                        <div class="zjgd_area_sum none">
                            <a target="_blank" title="<{$item.name}>" href="<{link ctl='company' arg0=$item.company_id}>" class="cc"><{$index+1}></a>
                            <a target="_blank" title="<{$item.name}>" href="<{link ctl='company' arg0=$item.company_id}>" class="dd"><{$item.name|cutstr:20:'..'}>&nbsp;&nbsp;<{$item.site_num}>个</a>
                        </div>
                        <div class="zjgd_area_detail none">
                            <a target="_blank" title="<{$item.name}>" href="<{link ctl='company' arg0=$item.company_id}>"><img src="<{$pager.img}>/<{$item.logo}>" width="70" height="36"/></a>
                            <p>
                                <a target="_blank" title="<{$item.name}>" href="<{link ctl='company' arg0=$item.company_id}>"><{$item.sort_name}></a><br />
                                <font class="red"><{$item.site_num}>个工地</font>
                            </p>
                        </div>    
                    </li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"site_num:desc",'limit'=>"6"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </ul>
            </div>
            <div class="zjgd_area_r_b bgwhite mt10 zjgd_area_1 none">
                <ul>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"site_time:desc",'limit'=>"6")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"site_time:desc",'limit'=>"6"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li>
                        <div class="zjgd_area_sum none">
                            <a target="_blank" title="<{$item.name}>" href="<{link ctl='company' arg0=$item.company_id}>" class="cc"><{$index+1}></a>
                            <a target="_blank" title="<{$item.name}>" href="<{link ctl='company' arg0=$item.company_id}>" class="dd"><{$item.name|cutstr:20:'..'}>&nbsp;&nbsp;<{$item.site_num}>个</a>
                        </div>
                        <div class="zjgd_area_detail none">
                            <a target="_blank" title="<{$item.name}>" href="<{link ctl='company' arg0=$item.company_id}>"><img src="<{$pager.img}>/<{$item.logo}>" width="70" height="36"/></a>
                            <p>
                                <a target="_blank" title="<{$item.name}>" href="<{link ctl='company' arg0=$item.company_id}>"><{$item.sort_name}></a><br />
                                <font class="red"><{$item.site_num}>个工地</font>
                            </p>
                        </div>    
                    </li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"site_time:desc",'limit'=>"6"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                </ul>
            </div>
        </div>
        <!--      在建工地右面结束-->
    </div>
    <!--在建工地区域结束-->
    <div class="cl"></div>
    <!--设计方案区域开始-->
    <div class="design_fangan w1000 hauto mt20">
        <!--设计方案左面开始-->
        <div class="xq_area_l lt hauto mr10">
            <div class="xq_area_l_t hauto">
                <span class="span12 block lt">设计方案</span>
                <span class="span13 block rt mt10"><a href="<?php echo smarty_function_link(array('ctl'=>'case'),$_smarty_tpl);?>
">更多>></a></span>
            </div>
            <div class="cl"></div>

            <div class="zjgd_area_l_b hauto bgwhite mt10 mr10">
                
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cases']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['case']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['case']['index']++;
?>
                <div class="design_fangan_show hauto">
                    <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'home:caseDetail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['home_id'],'arg1'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['photo'];?>
" width="250" height="150" /></a>
                    <div class="design_fangan_describition lt hauto">
                        <p>
                        <h3 class="lt" style="width: 300px; font-size: 15px;"><a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'home:caseDetail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['home_id'],'arg1'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></h3>
                            <span class="rt"><font class="red"><?php echo $_smarty_tpl->tpl_vars['item']->value['views'];?>
</font>人看了此方案</span>
                        </p>
                        <div class="cl"></div>
                        <p>
                            <font class="f12 ftw blackb">方案提供者&nbsp;:</font>
                            <font>
                            <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['company_list']->value[$_smarty_tpl->tpl_vars['item']->value['company_id']]['name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['item']->value['company_id']),$_smarty_tpl);?>
" class="f12 red ftw">
                                <?php echo $_smarty_tpl->tpl_vars['company_list']->value[$_smarty_tpl->tpl_vars['item']->value['company_id']]['name'];?>

                            </a>
                            </font><font class="org f12">(<?php echo $_smarty_tpl->tpl_vars['item']->value['photos'];?>
张设计图)</font>
                        </p>
                        <p>
                            <font class="f12 ftw blackb">设计思路&nbsp;:</font>
                            <font class="f12">
                                 <?php echo $_smarty_tpl->tpl_vars['item']->value['intro'];?>

                            </font>
                        </p>
                        <p class="mt20">
                            <span class="lt">   
                                <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'home:caseDetail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['home_id'],'arg1'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
" class="f12 ftw blackb">平面布置图&nbsp;&nbsp;|</a>
                                <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'home:caseDetail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['home_id'],'arg1'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
" class="f12 ftw blackb">设计图&nbsp;&nbsp;</a>
                            </span>
                            <span class="rt span14 red_bg"><a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
">去看看</a></span>
                        </p>
                        <div class="cl"></div>
                        <div class="fk bluebg"><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['case']['index']+1;?>
</div>
                    </div>
                </div>
              
                <?php } ?>

            </div>

        </div>
        <!--设计方案左面结束-->
        <!--设计方案右面开始-->
        <div class="zjgd_area_r lt hauto">
            <div class="hauto sjfa_area_r_t">
                <ul>
                    <li><a href="###" class="current3">方案最多</a></li>
                    <li><a href="###">最新更新</a></li>
                </ul>
            </div>
            <div class="zjgd_area_r_b bgwhite mt10 sjfa_area_0 none">
                <ul>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"case_num:desc",'limit'=>"9")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"case_num:desc",'limit'=>"9"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li>
                        <div class="zjgd_area_sum none">
                            <a target="_blank" title="<{$item.name}>" href="<{link ctl='company' arg0=$item.company_id}>" class="cc"><{$index+1}></a>
                            <a target="_blank" title="<{$item.name}>" href="<{link ctl='company' arg0=$item.company_id}>" class="dd"><{$item.name|cutstr:20:'..'}>&nbsp;&nbsp;<{$item.case_num}>个</a>
                        </div>
                        <div class="zjgd_area_detail none">
                            <a target="_blank" title="<{$item.name}>" href="<{link ctl='company' arg0=$item.company_id}>"><img src="<{$pager.img}>/<{$item.logo}>" width="70" height="36"/></a>
                            <p>
                                <a target="_blank" title="<{$item.name}>" href="<{link ctl='company' arg0=$item.company_id}>"><{$item.sort_name}></a><br />
                                <font class="red"><{$item.case_num}>个案例</font>
                            </p>
                        </div>    
                    </li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"case_num:desc",'limit'=>"9"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                </ul>
            </div>
            <div class="zjgd_area_r_b bgwhite mt10 sjfa_area_1 none">
                <ul>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"case_time:desc",'limit'=>"9")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"case_time:desc",'limit'=>"9"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li>
                        <div class="zjgd_area_sum none">
                            <a target="_blank" title="<{$item.name}>" href="<{link ctl='company' arg0=$item.company_id}>" class="cc"><{$index+1}></a>
                            <a target="_blank" title="<{$item.name}>" href="<{link ctl='company' arg0=$item.company_id}>" class="dd"><{$item.name|cutstr:20:'..'}>&nbsp;&nbsp;<{$item.case_num}>个</a>
                        </div>
                        <div class="zjgd_area_detail none">
                            <a target="_blank" title="<{$item.name}>" href="<{link ctl='company' arg0=$item.company_id}>"><img src="<{$pager.img}>/<{$item.logo}>" width="70" height="36"/></a>
                            <p>
                                <a target="_blank" title="<{$item.name}>" href="<{link ctl='company' arg0=$item.company_id}>"><{$item.sort_name}></a><br />
                                <font class="red"><{$item.case_num}>个案例</font>
                            </p>
                        </div>    
                    </li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"case_time:desc",'limit'=>"9"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                </ul>
            </div>
        </div>
        <!--设计方案右面结束-->


    </div>
    <div class="cl"></div>
    <div class="h30"></div>

    <script>
        $(document).ready(function() {
            $(".lp").focus(function() {
                if ($(this).val() == '请输入楼盘名称')
                    $(this).val('');
            }).focusout(function() {
                if ($(this).val() == '')
                    $(this).val('请输入楼盘名称');
            });

            $(".ph").focus(function() {
                if ($(this).val() == '请输入你的联系电话')
                    $(this).val('');
            }).focusout(function() {
                if ($(this).val() == '')
                    $(this).val('请输入你的联系电话');
            });//banner右面表单


            /*在建工地右面的*/
            $(".zjgd_area_r_t ul li").mouseover(function() {
                var index = $(this).index();
                $(".zjgd_area_r_t ul li").each(function(a) {

                    if (a == index) {
                        $(".zjgd_area_" + a).show();
                        $(this).find('a').addClass('current3');
                    } else {
                        $(".zjgd_area_" + a).hide();
                        $(this).find('a').removeClass('current3');
                    }
                });
            });
            $(".zjgd_area_r_t ul li").eq(0).mouseover();





            $(".zjgd_area_1 ul li").mouseover(function() {
                var index = $(this).index();
                $(".zjgd_area_1 ul li").each(function(a) {
                    if (a == index) {
                        $(this).find(".zjgd_area_detail").show();
                        $(this).find(".zjgd_area_sum").hide();
                    } else {
                        $(this).find(".zjgd_area_detail").hide();
                        $(this).find(".zjgd_area_sum").show();
                    }

                });

            });

            $(".zjgd_area_1 ul li").eq(0).mouseover();



            $(".zjgd_area_0 ul li").mouseover(function() {
                var index = $(this).index();
                $(".zjgd_area_0 ul li").each(function(a) {
                    if (a == index) {
                        $(this).find(".zjgd_area_detail").show();
                        $(this).find(".zjgd_area_sum").hide();
                    } else {
                        $(this).find(".zjgd_area_detail").hide();
                        $(this).find(".zjgd_area_sum").show();
                    }

                });

            });

            $(".zjgd_area_0 ul li").eq(0).mouseover();

            $(".zjgd_area_0 ul li:last").css('border-bottom', 'none')
            $(".zjgd_area_1 ul li:last").css('border-bottom', 'none')


            /*在建工地*/

            $(".sjfa_area_r_t ul li").mouseover(function() {
                var index = $(this).index();
                $(".sjfa_area_r_t ul li").each(function(a) {
                    var hh = a
                    if (a == index) {
                        $(".sjfa_area_" + hh).show();
                        $(this).find('a').addClass('current3');
                    } else {
                        $(".sjfa_area_" + hh).hide();
                        $(this).find('a').removeClass('current3');
                    }
                });
            });
            $(".sjfa_area_r_t ul li").eq(0).mouseover();




            $(".sjfa_area_1 ul li").mouseover(function() {
                var index = $(this).index();
                $(".sjfa_area_1 ul li").each(function(a) {
                    if (a == index) {
                        $(this).find(".zjgd_area_detail").show();
                        $(this).find(".zjgd_area_sum").hide();
                    } else {
                        $(this).find(".zjgd_area_detail").hide();
                        $(this).find(".zjgd_area_sum").show();
                    }

                });

            });

            $(".sjfa_area_1 ul li").eq(0).mouseover();



            $(".sjfa_area_0 ul li").mouseover(function() {
                var index = $(this).index();
                $(".sjfa_area_0 ul li").each(function(a) {
                    if (a == index) {
                        $(this).find(".zjgd_area_detail").show();
                        $(this).find(".zjgd_area_sum").hide();
                    } else {
                        $(this).find(".zjgd_area_detail").hide();
                        $(this).find(".zjgd_area_sum").show();
                    }

                });

            });

            $(".sjfa_area_0 ul li").eq(0).mouseover();

            $(".sjfa_area_0 ul li:last").css('border-bottom', 'none')
            $(".sjfa_area_1 ul li:last").css('border-bottom', 'none')



        });
    </script>

    <?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
       <?php }} ?>