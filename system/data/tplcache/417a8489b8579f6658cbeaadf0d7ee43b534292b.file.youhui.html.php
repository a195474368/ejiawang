<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:21:34
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/company/youhui.html" */ ?>
<?php /*%%SmartyHeaderCode:32564004555d7eabe4aa013-85563737%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '417a8489b8579f6658cbeaadf0d7ee43b534292b' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/company/youhui.html',
      1 => 1402664332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32564004555d7eabe4aa013-85563737',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_id' => 0,
    'items' => 0,
    'item' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7eabe5ea905_28240717',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7eabe5ea905_28240717')) {function content_55d7eabe5ea905_28240717($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ('company/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<!-- 详情页的公共部分 -->
    <!-- 主题部分开始 -->
     <div class="index_b_bg hauto">
    <!-- 当前位置开始   -->
    	<div class="favor_detail_weizhi w1000 bodr_b">
        	<font>你当前的位置：</font>
            <a href="<?php echo smarty_function_link(array('ctl'=>'company:youhui','arg0'=>$_smarty_tpl->tpl_vars['company_id']->value),$_smarty_tpl);?>
">优惠信息</a>
        </div>
    <!-- 当前位置结束   -->
    <!-- 优惠信息详情   -->
        <div class="w1000 favorable_detail_main_b hauto mt20">
            <h2><a href="<?php echo smarty_function_link(array('ctl'=>'company:youhui','arg0'=>$_smarty_tpl->tpl_vars['company_id']->value),$_smarty_tpl);?>
">优惠信息</a></h2>
            <div class="w1000 hauto favorable_detail_main_b_ul">
             <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
               <div class="yhjxz mt5 ml5">
                        <div class="li_top">
                            <span class="block_lt <?php if ($_smarty_tpl->tpl_vars['item']->value['end']){?>span31<?php }else{ ?>span33<?php }?> jxz mr10"></span>
                            <span class="block_lt span32">
               
                                <font class="f14"><a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'gs:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['youhui_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></font>
                            </span>
                        </div>
                        <div class="cl"></div>
                      <a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'gs:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['youhui_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['face_pic'];?>
" width="260" height="180" /></a>
                        <p class="ml30">
                            <span class="block_lt">
                                <font>距离结束：还有</font><font class="red font2"><?php echo $_smarty_tpl->tpl_vars['item']->value['end'];?>
</font><font>天</font>
                            </span>
                            <a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'gs:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['youhui_id']),$_smarty_tpl);?>
"  class="block_lt a13 <?php if ($_smarty_tpl->tpl_vars['item']->value['end']){?>orgbgg<?php }else{ ?>graybgg<?php }?>">去看看</a>
                        </p>
                 </div>
           <?php } ?>
                                   
            </div>              
        </div>
    
    <div class="w1000 mt20"><div class="page"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</div></div>

      <!-- 优惠详情结束 -->
      <div class="h30"></div>
    </div> 
     <!-- 主题部分结束 -->

<script>
	$(document).ready(function(){
		$(".favorable_more_menu_r_b ul li:last").css('background','none');
		$(".yhjxz").mouseover(function(){
			$(this).css('border','1px solid red');
			$(this).css('box-shadow','0 0 1px 1px #BBB');
						
			}).mouseout(function(){
				$(this).css('border','1px solid #FFF');
				$(this).css('box-shadow','0 0 1px 1px #BBB');
				});
				
			
	});
</script>
<?php echo $_smarty_tpl->getSubTemplate ('company/foot.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>