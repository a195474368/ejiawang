<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:38:01
         compiled from "mobile:designer/detail.html" */ ?>
<?php /*%%SmartyHeaderCode:151714528555d7ee990f8a34-51229737%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df40a794ee5e81ab8eb5fc9009a6bcd445618b61' => 
    array (
      0 => 'mobile:designer/detail.html',
      1 => 1420010588,
      2 => 'mobile',
    ),
  ),
  'nocache_hash' => '151714528555d7ee990f8a34-51229737',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'member' => 0,
    'pager' => 0,
    'company' => 0,
    'designer_values' => 0,
    'item' => 0,
    'it' => 0,
    'myattr' => 0,
    'case' => 0,
    'case_values' => 0,
    'itemcase' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ee99399674_18206504',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ee99399674_18206504')) {function content_55d7ee99399674_18206504($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.cutstr.php';
?><?php echo $_smarty_tpl->getSubTemplate ('mobile:block/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--头部开始-->
	<div class="mobile_top">
    	<div class="mobile_top_son">
            <a href="<?php echo smarty_function_link(array('ctl'=>'designer'),$_smarty_tpl);?>
" class="detail-first"><img src="images/back_bg.png" width="10"/></a>
            <div class="detail-second"><?php echo $_smarty_tpl->tpl_vars['member']->value['realname'];?>
的博客</div>
        </div>
    </div>
    <div class="h45"></div>
<!--头部结束-->
<!--主题部分开始-->
    <div class="mobile_main1 hauto"> 
    	<div class="mobile_designer_blog">
        	<div class="mobile_blog_t">
            	<p class="h10"></p>
            	<a href="<?php echo smarty_function_link(array('ctl'=>'designer:yuyue','arg0'=>$_smarty_tpl->tpl_vars['member']->value['uid']),$_smarty_tpl);?>
" class="design_img"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['member']->value['face'];?>
" width="70" height="70"/></a>
                <p class="designer_jieshao">
                	<a href="<?php echo smarty_function_link(array('ctl'=>'designer:yuyue','arg0'=>$_smarty_tpl->tpl_vars['member']->value['uid']),$_smarty_tpl);?>
" class="block"><?php echo $_smarty_tpl->tpl_vars['member']->value['realname'];?>
</a>
                    <span class="block">所在公司&nbsp;:&nbsp;<?php if ($_smarty_tpl->tpl_vars['company']->value){?><a title="<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'company:detail','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id']),$_smarty_tpl);?>
" ><?php echo $_smarty_tpl->tpl_vars['company']->value['sort_name'];?>
</a><?php }?></span>
                    <a href="<?php echo smarty_function_link(array('ctl'=>'designer:yuyue','arg0'=>$_smarty_tpl->tpl_vars['member']->value['uid']),$_smarty_tpl);?>
" class="yuyue_but1">预约设计>></a>
                </p>
            </div>
            <div class="cl"></div>
            <div class="mobile_blog_c">
            	<div class="mobile_blog_c_title">
                	<ul>
                    	<li><a href="<?php echo smarty_function_link(array('ctl'=>'designer:yuyue','arg0'=>$_smarty_tpl->tpl_vars['member']->value['uid']),$_smarty_tpl);?>
" class="current5">个人简介</a></li>
                    </ul>
                </div>
                <div class="mobile_blog_content">
                        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['designer_values']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                	<p>
                      <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
:  
                    	 <?php  $_smarty_tpl->tpl_vars['it'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it']->key => $_smarty_tpl->tpl_vars['it']->value){
$_smarty_tpl->tpl_vars['it']->_loop = true;
?>
                            <?php if (in_array($_smarty_tpl->tpl_vars['it']->value['attr_value_id'],$_smarty_tpl->tpl_vars['myattr']->value)){?>
                            <?php echo $_smarty_tpl->tpl_vars['it']->value['title'];?>
 &nbsp;&nbsp;
                            <?php }?>
                            <?php } ?>
                       
                    </p>
                     <?php } ?>
                </div>
            </div>
            <div class="mobile_blog_b">
            	<div class="mobile_blog_c_title mobile_blog_public">
                	<ul>
                        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['case']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['ct']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['ct']['index']++;
?>
                            <li><a href="javascript:void(0);">案例<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['ct']['index']+1;?>
</a></li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="cl"></div>
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['case']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['ct']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['ct']['index']++;
?>
                <div class="mobile_blog_b_b mobile_case_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['ct']['index'];?>
 none">
                	<p class="h10"></p>
                	<p>案例名称：<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</p>
       
                    <?php  $_smarty_tpl->tpl_vars['itemcase'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemcase']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['case_values']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemcase']->key => $_smarty_tpl->tpl_vars['itemcase']->value){
$_smarty_tpl->tpl_vars['itemcase']->_loop = true;
?>
                            <p><?php echo $_smarty_tpl->tpl_vars['itemcase']->value['title'];?>
:

                                <?php  $_smarty_tpl->tpl_vars['it'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['itemcase']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it']->key => $_smarty_tpl->tpl_vars['it']->value){
$_smarty_tpl->tpl_vars['it']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value['attr'][$_smarty_tpl->tpl_vars['it']->value['attr_value_id']]){?>
                                <?php echo $_smarty_tpl->tpl_vars['it']->value['title'];?>
 &nbsp;&nbsp;
                                <?php }?>
                                <?php } ?>
                            </p>
                            <?php } ?>
                    
                    <p>人气指数：<?php echo $_smarty_tpl->tpl_vars['item']->value['views'];?>
</p>
                    <p>喜欢数量：<?php echo $_smarty_tpl->tpl_vars['item']->value['likes'];?>
</p>
                    <p>案例描述：<?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['intro'],20,'..');?>
</p>
                    <p class="case_img">
                    	<a  href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['photo'];?>
" width="125" height="100"/>
                             <span></span>
                       		 <span class="text"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],15,'..');?>
</span>
                        </a>
                    </p>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="h45"></div>
	</div>
    <script>
    $(document).ready(function(){
         $(".mobile_blog_public ul li").mouseover(function() {
			var index = $(this).index();
			$(".mobile_blog_public ul li").each(function(a) {
				var nn = a
				if (a == index) {
					$(this).children(a).addClass("current5");
					$(".mobile_case_" + nn).show();
				} else {
						$(this).children(a).removeClass("current5");
					$(".mobile_case_" + nn).hide();
				}
			});
		});
		$(".mobile_blog_public ul li").eq(0).mouseover();
						
        
    });
    </script>
<!--主题部分结束-->
<?php echo $_smarty_tpl->getSubTemplate ('mobile:block/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>