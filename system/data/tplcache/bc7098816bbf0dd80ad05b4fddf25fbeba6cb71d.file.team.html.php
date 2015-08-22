<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:22:03
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/company/team.html" */ ?>
<?php /*%%SmartyHeaderCode:107619259655d7eadb460e65-17842873%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc7098816bbf0dd80ad05b4fddf25fbeba6cb71d' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/company/team.html',
      1 => 1402664332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107619259655d7eadb460e65-17842873',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_id' => 0,
    'pager' => 0,
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7eadb594554_23470845',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7eadb594554_23470845')) {function content_55d7eadb594554_23470845($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.cutstr.php';
?><?php echo $_smarty_tpl->getSubTemplate ('company/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<!--优惠信息更多详情页导航结束  -->

	<!-- 详情页的公共部分 -->
    <!-- 主题部分开始 -->
    <div class="index_b_bg hauto">
    <!-- 当前位置开始   -->
    	<div class="favor_detail_weizhi w1000 bodr_b mb20">
        	<font>你当前的位置：</font>
            <a href="<?php echo smarty_function_link(array('ctl'=>'company:team','arg0'=>$_smarty_tpl->tpl_vars['company_id']->value),$_smarty_tpl);?>
">设计团队</a>
            
        </div>
    <!-- 当前位置结束   -->
    <!-- 设计团队主题部分开始 -->
   		<div class="designer_team_main w1000 hauto">
    		<!--标题开始 -->
            	<h2>
                	<span class="block_lt f20">设计团队</span>
                    <span class="block rt f14">共<font class="red"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['pager']->value['count'])===null||$tmp==='' ? '0' : $tmp);?>
</font>位</span>
                </h2>
            <!--标题结束-->
            <!--团队介绍开始-->
            	<div class="w1000 hauto mt5 designer_team_describe">
                          <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                	<div class="designer_team_describe_t lt bodr bgwhite mr10">
                    	<div class="designer_team_describe_t_img">
                    		 <a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['realname'];?>
" target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'blog','arg0'=>$_smarty_tpl->tpl_vars['item']->value['uid']),$_smarty_tpl);?>
">
                        <img alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['realname'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['face'];?>
" width="200" height="200" />
                    </a>
                            <div class="mfyu1 orgbgg none"><a mini-load="预约设计" href="<?php echo smarty_function_link(array('ctl'=>'designer:yuyue','arg0'=>$_smarty_tpl->tpl_vars['item']->value['uid'],'http'=>'empty'),$_smarty_tpl);?>
" class="a34">免费预约</a></div>
                        </div>
                         <a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['realname'];?>
" target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'blog','arg0'=>$_smarty_tpl->tpl_vars['item']->value['uid']),$_smarty_tpl);?>
" class="block ml20 black f16 mt5 ftw"><?php echo $_smarty_tpl->tpl_vars['item']->value['realname'];?>
</a>
                        <p class="p37">毕业院校：<?php echo $_smarty_tpl->tpl_vars['item']->value['school'];?>
</p>
                    	<p class="p38">
                        	<a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['realname'];?>
" target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'blog','arg0'=>$_smarty_tpl->tpl_vars['item']->value['uid']),$_smarty_tpl);?>
">
                                自我介绍：<?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['about'],100,'...');?>

                            </a>
                        </p>
                    </div>
                          <?php } ?>
                </div>
             
    		<!--团队介绍结束-->
        	<!--分页开始-->
            	<div class="w1000 hauto bgwhite mt20">
                    <div class="page">
                	<?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>

                    </div>
                </div>
            <!--分页结束-->
        
        
        </div>
        
    <!-- 企设计团队主题部分结束 -->
    <div class="h30"></div>
    
    </div> 
    
<script>
	$(document).ready(function(){
			$(".designer_team_describe_t").mouseover(function(){
				$(this).find(".mfyu1").show();
				$(this).css('border','1px solid red');
					
				}).mouseout(function(){
					$(this).css('border','');
					$(this).css('border','1px solid #EAEAEA');
					$(this).find(".mfyu1").hide();
					
				});
							  
             
		
	});
</script>

<?php echo $_smarty_tpl->getSubTemplate ('company/foot.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>