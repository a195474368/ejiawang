<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:22:22
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/company/site.html" */ ?>
<?php /*%%SmartyHeaderCode:104040088255d7eaee4bc6a0-27598240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db86fa1b8935c60fffd2370655f8cb5688e33ce6' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/company/site.html',
      1 => 1402664332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104040088255d7eaee4bc6a0-27598240',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_id' => 0,
    'pager' => 0,
    'items' => 0,
    'item' => 0,
    'site_status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7eaee600a61_58394006',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7eaee600a61_58394006')) {function content_55d7eaee600a61_58394006($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.cutstr.php';
?><?php echo $_smarty_tpl->getSubTemplate ('company/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<!-- 详情页的公共部分 -->
    <!-- 主题部分开始 -->
     <div class="index_b_bg hauto">
    <!-- 当前位置开始   -->
    	<div class="favor_detail_weizhi w1000 bodr_b mb20">
        	<font>你当前的位置：</font>
            <a href="<?php echo smarty_function_link(array('ctl'=>'company:site','arg0'=>$_smarty_tpl->tpl_vars['company_id']->value),$_smarty_tpl);?>
">在建工地</a>
            
        </div>
    <!-- 当前位置结束   -->
    <!-- 效果图案例主题部分开始 -->
        <div class="w1000 hauto effect_case">
    	<!--标题开始 -->
            <h2>
                <span class="block_lt f20">在建工地</span>
                <span class="block rt f14">共有<font class="red"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['pager']->value['count'])===null||$tmp==='' ? '0' : $tmp);?>
</font>套案例</span>
            </h2>
            <div class="cl"></div>
         <!--标题结束-->
         <!--案例介绍开始-->
         	<div class="shop_zjgd w1000 bgwhite hauto">
                
                  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            	<div class="shop_zjgd_show lt ml10 mt10">
                	<div class="shop_zjgd_show_t mt20 ml10">
                        <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['face_pic'];?>
" width="220" height="155" /></a>
                        <p class="p46 greenbg none">
                        	<a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
">我要参观</a>
                        </p>
                    </div>
                    <p class="p47"><a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],30,'..');?>
</a></p>
                    <p class="p48 rt">
                    	<span class="block_lt ftw black f14">进度&nbsp;:&nbsp;</span>
                        <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
" class="block_lt orgbgg"><?php echo $_smarty_tpl->tpl_vars['site_status']->value[$_smarty_tpl->tpl_vars['item']->value['status']];?>
</a>
                    </p>
                
                </div>
                  <?php } ?>
            	
            </div>
      

         
         
         <!--案例介绍结束-->
    		<!--分页开始-->
            <div class="w1000 hauto bgwhite mt20">
                <div class="page">
                	<?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>

                </div>
            </div>
            <!--分页结束-->
    
    </div>
   		
        
    <!-- 效果图案例主题部分结束 -->
	<div class="h30"></div>      
    </div> 
     <!-- 主题部分结束 -->






<script>
	$(document).ready(function(){
			$(".shop_zjgd_show").mouseover(function(){
				$(this).css('border','1px solid red').css('width','238px');
				$(this).find(".p46").show();
				
			}).mouseout(function(){
				$(this).css('border','1px solid #FFF').css('width','238px');
				$(this).find(".p46").hide();
				});

		
	});
</script>
<?php echo $_smarty_tpl->getSubTemplate ('company/foot.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>