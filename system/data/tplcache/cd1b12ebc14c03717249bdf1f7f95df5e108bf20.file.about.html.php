<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:28:26
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/company/about.html" */ ?>
<?php /*%%SmartyHeaderCode:91943180455d7ec5a507a57-06633028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd1b12ebc14c03717249bdf1f7f95df5e108bf20' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/company/about.html',
      1 => 1402664332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91943180455d7ec5a507a57-06633028',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_id' => 0,
    'companyex' => 0,
    'company_photo' => 0,
    'item' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ec5a62a538_31212327',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ec5a62a538_31212327')) {function content_55d7ec5a62a538_31212327($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ('company/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<!-- 详情页的公共部分 -->
    <!-- 主题部分开始 -->
     <div class="index_b_bg hauto">
    <!-- 当前位置开始   -->
    	<div class="favor_detail_weizhi w1000 bodr_b mb20">
        	<font>你当前的位置：</font>
            <a href="<?php echo smarty_function_link(array('ctl'=>'company:about','arg0'=>$_smarty_tpl->tpl_vars['company_id']->value),$_smarty_tpl);?>
">企业介绍</a>
            
        </div>
    <!-- 当前位置结束   -->
    <!-- 企业介绍主题部分开始 -->
   		<div class="qyjs_main w1000 hauto">
     <!-- 企业介绍主题部分左面开始 -->
     <?php echo $_smarty_tpl->getSubTemplate ('company/left.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
		
     <!-- 企业介绍主题部分左面结束 -->
     <!-- 企业介绍主题部分右面开始 -->
     		<div class="qyjs_main_r lt hauto ml20">
            	<div class="qyjs_main_r_title">
                	<ul>
                    	<li><a href="javascript:void(0);" class="black">企业简介</a></li>
                        <li><a href="javascript:void(0);" class="black">企业资质</a></li>
                        <li><a href="javascript:void(0);" class="black">企业荣誉</a></li>
                    </ul>
                    <div class="cl"></div>
                </div>
                
                <div class="qyjs_main_r_b hauto bgwhite mt10">
                	<div class="qyjs_main_r_b_cont hauto none qyjs_main_r_b_cont_1">
                        <?php echo $_smarty_tpl->tpl_vars['companyex']->value['intro'];?>

                        <p class="h30"></p>
                    </div>
                    <div class="qyjs_main_r_b_cont hauto qyjs_main_r_b_cont_2 none">
                    	<ul>
                            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['company_photo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value['type']==1){?>
                        	<li>
                                <a href="javascript:void(0);" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"><img alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['pic'];?>
" width="300" height="200"/></a>
                            </li>
                            <?php }?>
                           <?php } ?>
                        </ul>
                    	
                    </div>
                    <div class="qyjs_main_r_b_cont hauto qyjs_main_r_b_cont_3 none">
                        <ul>
                        	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['company_photo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value['type']==2){?>
                        	<li>
                                <a href="javascript:void(0);" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"><img alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['pic'];?>
" width="300" height="200"/></a>
                            </li>
                            <?php }?>
                           <?php } ?>
                        </ul>
                    	
                    </div>
                </div>
            </div>
     <!-- 企业介绍主题部分右面结束 -->
        
    
        
        
        
        </div>
    <!-- 企业介绍主题部分结束 -->
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
				$(this).css('border','none');
				$(this).css('box-shadow','0 0 1px 1px #BBB');
				});
				
				    
		
		 $(".qyjs_main_r_title ul li").mouseover(function() {
                            var index = $(this).index();
                            $(".qyjs_main_r_title ul li").each(function(a) {
                                var ccc = a + 1
                                if (a == index) {
									$(this).find(".black").css('color','#666666');
                                    $(".qyjs_main_r_b_cont_" + ccc).show();
									
                                } else {
                                    $(this).find(".black").css('color','')
                                    $(".qyjs_main_r_b_cont_" + ccc).hide();
                                }

                            });
                        });
                        $(".qyjs_main_r_title ul li").eq(0).mouseover();    
						$(".qyjs_main_r_b_cont_2 img").mouseover(function(){
							$(this).css('border','1px solid red');	
							
						}).mouseout(function(){
							$(this).css('border','');
							});   
         
		
	});
</script>

<?php echo $_smarty_tpl->getSubTemplate ('company/foot.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>