<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:30:42
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/site.html" */ ?>
<?php /*%%SmartyHeaderCode:3418809455d7ece2a73088-43889096%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa42ce79fc8e4e34517c755a068b0cd8bde616d9' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/site.html',
      1 => 1440051730,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3418809455d7ece2a73088-43889096',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'area_id' => 0,
    'area_list' => 0,
    'item' => 0,
    'pager' => 0,
    'items' => 0,
    'site_status' => 0,
    'company_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ece2cb1001_22981893',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ece2cb1001_22981893')) {function content_55d7ece2cb1001_22981893($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.cutstr.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <!----------头部和导航公共部分------------>  
    <!--        主题部分开始               -->
     <div class="index_b_bg hauto">
     	<!--         你所在的位置开始             -->
        <div class="w1000 bgwhite ask_list_weizhi">
                  <span class="span11 icobg block_lt"></span>
        <span class="block_lt">您当前所在的位置:</span>
        <a title="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
" href="\" class="block_lt"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
</a>
        <span class="block_lt">></span>
        <a title="我搜我家" href="<?php echo smarty_function_link(array('ctl'=>'home'),$_smarty_tpl);?>
" class="block_lt">我搜我家</a>
        <span class="block_lt">></span>
        <a href="<?php echo smarty_function_link(array('ctl'=>'site'),$_smarty_tpl);?>
" title="在建工地" class="block_lt">在建工地</a>
        <?php if ($_smarty_tpl->tpl_vars['area_id']->value){?>
        <span class="block_lt">></span>
        <a href="<?php echo smarty_function_link(array('ctl'=>'site','arg0'=>$_smarty_tpl->tpl_vars['area_id']->value),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['area_list']->value[$_smarty_tpl->tpl_vars['area_id']->value]['area_name'];?>
在建工地" class="block_lt "><?php echo $_smarty_tpl->tpl_vars['area_list']->value[$_smarty_tpl->tpl_vars['area_id']->value]['area_name'];?>
在建工地</a>
        <?php }?>
        </div>
        <div class="cl"></div>
        <!--        你所在的位置结束      -->
        <!--        户型风格开始      -->
        <div class="w1000 hauto bgwhite mt20 effect_show bodr_b mb20">
            <div class="case_attr hauto">
    
                <span class="huxing2 block lt f14"><b>区域:</b></span>
                 <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['area_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
     
                <a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['area_name'];?>
在建工地" <?php if ($_smarty_tpl->tpl_vars['item']->value['area_id']==$_smarty_tpl->tpl_vars['area_id']->value){?>class="case_attr_hover"<?php }?> href="<?php echo smarty_function_link(array('ctl'=>'site:items','arg0'=>$_smarty_tpl->tpl_vars['item']->value['area_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['area_name'];?>
</a>
      
                <?php } ?>
               
            </div>
      
        </div>
        <!--        户型风格结束      -->
        <!--        在建工地开始      -->
        <div class="w1000 hauto mt15 zjgd_main">
        	<p>
            	<span class="lt span24">在建工地</span>
                <span class="rt span25">共有<font class="red f14"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['pager']->value['count'])===null||$tmp==='' ? '0' : $tmp);?>
</font>个在建工地</span>
            </p>
            <!--标题 -->
            <!-- 在建工地图片展示开始  -->
            <div class="zjgd_show bgwhite w1000 hauto">
            	<div class="zjgd_show_1 w1000  mt10 hauto">
                	<ul class="ml20">
                        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                    	<li>
                            <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['face_pic'];?>
" width="220" height="155"/></a>
                            <p class="p21 greenbg none"><a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
">我要参观</a></p>
                            <p><a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],30,'');?>
</a></p>
                            <p class="rt mr10">
                            	<span class="block_lt">进度：</span>
                                <span class="block_lt span27 orgbg"><a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['site_status']->value[$_smarty_tpl->tpl_vars['item']->value['status']];?>
</a></span>
                            </p>
                            <p class="cl"></p>
                            <p>
                                <font class="f12">发布来源：<a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['company_list']->value[$_smarty_tpl->tpl_vars['item']->value['company_id']]['name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['item']->value['company_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['company_list']->value[$_smarty_tpl->tpl_vars['item']->value['company_id']]['sort_name'];?>
</a></font><br />
								<font class="f12">发布时间：<?php echo date('m-d',$_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</font>
                            </p>
                          
                        </li>
                        <?php } ?>
                    </ul>
                 
                </div>
               
                <div class="page"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</div>
                <div class="mt10"></div>
            </div>
            
            <!-- 在建工地图片展示结束 --> 
        </div>
        <!--       在建工地结束      -->
            <div class="cl h20"></div>

<script>
$(document).ready(function(){
	$(".zjgd_show_1 ul li").mouseover(function(){
		var index = $(this).index();
		$(".zjgd_show_1 ul li").each(function(a){
			if(a == index){
				$(this).css('border','1px solid red');
				$(this).find(".p21").show();
			}else{
				$(this).css('border','1px solid #FFF');
				$(this).find(".p21").hide();
				}	
			}).mouseout(function(){
				$(this).css('border','1px solid #FFF');
				$(this).find(".p21").hide();
				
				});
	});
	
	$(".zjgd_show_2 ul li").mouseover(function(){
		var index = $(this).index();
		$(".zjgd_show_2 ul li").each(function(a){
			if(a == index){
				$(this).css('border','1px solid red');
				$(this).find(".p21").show();
			}else{
				$(this).css('border','none');
				$(this).find(".p21").hide();
				}	
			}).mouseout(function(){
				$(this).css('border','1px solid #FFF');
				$(this).find(".p21").hide();	
				});
	});
	$(".zjgd_show_3 ul li").mouseover(function(){
		var index = $(this).index();
		$(".zjgd_show_3 ul li").each(function(a){
			if(a == index){
				$(this).css('border','1px solid red');
				$(this).find(".p21").show();
			}else{
				
				$(this).css('border','none');
				$(this).find(".p21").hide();
				}	
			}).mouseout(function(){
				$(this).css('border','1px solid #FFF');
				$(this).find(".p21").hide();	
				});
	});  
	
	
	});
</script>

<?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
       <?php }} ?>