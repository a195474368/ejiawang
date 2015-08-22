<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:19:13
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/case.html" */ ?>
<?php /*%%SmartyHeaderCode:50070559655d7ea313dc620-25361714%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4effab839cfbc6ff652e811eaca755334b636f48' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/case.html',
      1 => 1439429229,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50070559655d7ea313dc620-25361714',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'attr_values' => 0,
    'item' => 0,
    'item2' => 0,
    'request' => 0,
    'order_url' => 0,
    'url_data' => 0,
    'case' => 0,
    'pager' => 0,
    'photos' => 0,
    'company_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea316fe478_72792862',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea316fe478_72792862')) {function content_55d7ea316fe478_72792862($_smarty_tpl) {?><?php if (!is_callable('smarty_block_calldata')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/block.calldata.php';
if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!----------头部和导航公共部分------------> 
<div class="index_b_bg hauto">
    <div class="w1000 hauto bgwhite mt20 effect_show bodr_b mb20">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['attr_values']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['index']++;
?>
        <div class="case_attr hauto">
            <span class="bigbg span<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['index']+1;?>
 lt"></span>
            <span class="huxing2 block lt f14"><b><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
:</b></span>
            <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" class="block_lt  <?php if ($_smarty_tpl->tpl_vars['item']->value['checked']==true){?> case_attr_hover<?php }?>">不限 </a>
            
            <?php  $_smarty_tpl->tpl_vars['item2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item2']->key => $_smarty_tpl->tpl_vars['item2']->value){
$_smarty_tpl->tpl_vars['item2']->_loop = true;
?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['item2']->value['link'];?>
" class="block_lt <?php if ($_smarty_tpl->tpl_vars['item2']->value['checked']==true){?>case_attr_hover<?php }?>"><?php echo $_smarty_tpl->tpl_vars['item2']->value['title'];?>
</a>
            <?php } ?>
        </div>
       <?php } ?>
    </div>
    <div class="w980 bgwhite hot_house bodr_b mb20">
        <b class="f14">热门楼盘：</b>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"home/main",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"pv_num:DESC",'limit'=>"10")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"home/main",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"pv_num:DESC",'limit'=>"10"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <a target="_blank" title="<{$item.name}>" href="<{link ctl='home:detail' arg0=$item.id}>"><{$item.name}></a>   
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"home/main",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"pv_num:DESC",'limit'=>"10"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
    <!--      楼盘区域      -->
    <div class="today_comd w1000 hauto">
        <div class="case_attr_order lt">
            <ul>
                
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['order_url']->value['today'];?>
" class="<?php if ($_smarty_tpl->tpl_vars['url_data']->value['order']==0){?>case_attr_order_hover<?php }else{ ?>case_attr_order_a<?php }?>">今日推荐</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['order_url']->value['like'];?>
" class="<?php if ($_smarty_tpl->tpl_vars['url_data']->value['order']==2){?>case_attr_order_hover<?php }else{ ?>case_attr_order_a<?php }?>">最受欢迎</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['order_url']->value['pv'];?>
" class="<?php if ($_smarty_tpl->tpl_vars['url_data']->value['order']==1){?>case_attr_order_hover<?php }else{ ?>case_attr_order_a<?php }?>">最人气排行</a></li>
            </ul>
        </div>
        <div class="today_comd_r rt">                	
            <div class="page">
             
            </div>

        </div>

                
    </div>  
    <div class="cl"></div>
    <!--      热门推荐    -->  
    <div class="w1000 hauto mt5 effect_show_all">
        <div class="effect_show_all1 lt">
            <ul>
                
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['case']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <li>
                    <div class="effect_show_img ">
                        <p class="lt mt5"><a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['photo'];?>
_thumb.jpg" width="200" height="170" _width="150px"/></a></p>
                        <p class="lt small_img mt5" style="width: 104px; height: 180px;_width:80px;">
                            <?php if ($_smarty_tpl->tpl_vars['item']->value['lastphotos']){?>   
                            <?php  $_smarty_tpl->tpl_vars['item2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['lastphotos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item2']->key => $_smarty_tpl->tpl_vars['item2']->value){
$_smarty_tpl->tpl_vars['item2']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['index']++;
?>
                            <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['index']==1||$_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['index']==2){?>
                            <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['photos']->value[$_smarty_tpl->tpl_vars['item2']->value]['photo'];?>
_thumb.jpg" width="104" height="81" _width="80"/></a>
                            
                            <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['index']==0){?><?php }?>
                            
                            <?php }?>
                            <?php } ?>
                            <?php }?>
                            
                        </p>

                        <p class="mt5">&nbsp;&nbsp;<b class="red">[案例]</b><span><b>&nbsp;<a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></b></span></p>
                        <p>
                            <span class="block lt mt10 ml10">
                                <?php if (!empty($_smarty_tpl->tpl_vars['company_list']->value[$_smarty_tpl->tpl_vars['item']->value['company_id']])){?><a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['company_list']->value[$_smarty_tpl->tpl_vars['item']->value['company_id']]['name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['item']->value['company_id']),$_smarty_tpl);?>
"><img width="30" height="30" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['company_list']->value[$_smarty_tpl->tpl_vars['item']->value['company_id']]['square_logo'];?>
" /></a><?php }?>
                            </span>
                            <span class="block lt mt15 ml10">
                                <b><a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['company_list']->value[$_smarty_tpl->tpl_vars['item']->value['company_id']]['name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['item']->value['company_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['company_list']->value[$_smarty_tpl->tpl_vars['item']->value['company_id']]['sort_name'];?>
</a></b>
                            
                            </span>
                            
                            <span class="block lt mt15 ml10 span4"></span>
                            <span class="block lt mt15 ml5"><b><?php echo $_smarty_tpl->tpl_vars['item']->value['likes'];?>
喜欢</b></span>
                            <span class="block lt mt15 ml10 span5"></span>
                            <span class="block lt mt15 ml5"><b><?php echo $_smarty_tpl->tpl_vars['item']->value['views'];?>
浏览</b></span>

                        </p>

                    </div> 

                </li>
                
                <?php } ?>
              

               
            </ul>
        </div>




    </div>   
    <!--       产品展示  --> 
    <div class="w1000 hauto mt20 next_page mb10">
        <div class="today_comd_r rt">
            <div class="page">
                 <?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>

            </div>
            
        </div>             
    </div>
	
</div>
<?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>