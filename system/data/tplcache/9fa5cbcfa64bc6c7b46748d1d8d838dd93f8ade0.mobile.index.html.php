<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:59:14
         compiled from "mobile:designer/index.html" */ ?>
<?php /*%%SmartyHeaderCode:126524474955d7f392147f85-07908071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fa5cbcfa64bc6c7b46748d1d8d838dd93f8ade0' => 
    array (
      0 => 'mobile:designer/index.html',
      1 => 1439446337,
      2 => 'mobile',
    ),
  ),
  'nocache_hash' => '126524474955d7f392147f85-07908071',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
    'area_list' => 0,
    'v' => 0,
    'attr_values' => 0,
    'item' => 0,
    'item2' => 0,
    'designers' => 0,
    'pager' => 0,
    'user_list' => 0,
    'nextpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7f3922e70f0_59641402',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7f3922e70f0_59641402')) {function content_55d7f3922e70f0_59641402($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.cutstr.php';
?>﻿<?php echo $_smarty_tpl->getSubTemplate ('mobile:block/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--头部开始-->
	<div class="mobile_top">
    	<div class="mobile_top_son">
        	<a href="javascript:window.history.go(-1);" class="detail-first"><img src="images/back_bg.png" width="10"/></a>
            <div class="detail-second">设计师<i><a href="<?php echo smarty_function_link(array('ctl'=>'city'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
</a>&nbsp;<img src="images/xia_white_ico.png" /></i></div>
        </div>
    </div>
     <div class="h45"></div>
<!--头部结束-->
<!--导航开始-->
    <div class="mobile_photo">
        	<ul class="mobile_photo_menu">
            	<li>
                    <a href="javascript:;" class="personal_menu_a">区域</a>
                    <ul class="mobile_photo_son none">
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['area_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                         <li> <a  title="<?php echo $_smarty_tpl->tpl_vars['v']->value['area_name'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['v']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['area_name'];?>
</a></li>
                        <?php } ?>
                    </ul>
                </li>
                 <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['attr_values']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['index']++;
?>
        <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['index']<2){?>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" class="personal_menu_a"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
            <ul class="mobile_photo_son none">

                <?php  $_smarty_tpl->tpl_vars['item2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item2']->key => $_smarty_tpl->tpl_vars['item2']->value){
$_smarty_tpl->tpl_vars['item2']->_loop = true;
?>
                <li> <a href="<?php echo $_smarty_tpl->tpl_vars['item2']->value['link'];?>
" ><?php echo $_smarty_tpl->tpl_vars['item2']->value['title'];?>
</a></li>
                <?php } ?>
            </ul>
        </li>
        <?php }?>
        <?php } ?>
            </ul>
        </div>
<script>
    $(document).ready(function() {
        $(".mobile_photo_menu li").hover(
                function() {
                    $(this).find(".personal_menu_a").addClass("current2");
                    $(this).find(".mobile_photo_son").show();
                },
                function() {
                    $(this).find(".personal_menu_a").removeClass("current2");
                    $(this).find(".mobile_photo_son").hide();
                }
        );
    });
</script>
<!--导航结束-->
<div class="cl"></div>
<!--主题部分开始-->
    <div class="mobile_main hauto"> 
    	<div class="mobile_tuan">
            <div class="mobile_tuan_b mobile_company_0">
            	<ul>
                  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['designers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                    <li>
                    	<div class="mobile_tuan_b_all">
                            <a href="<?php echo smarty_function_link(array('ctl'=>'designer:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['uid']),$_smarty_tpl);?>
" class="a_designer"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['user_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['face'];?>
" width="70" height="70"/></a>
                            <div class="mobile_tuan_b_all_r lt">
                            	<h4>
                                	<a href="<?php echo smarty_function_link(array('ctl'=>'designer:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['uid']),$_smarty_tpl);?>
" class="block_lt"><?php echo $_smarty_tpl->tpl_vars['user_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['realname'];?>
</a>
                                    <span class="block rt">
                                    	<a href="<?php echo smarty_function_link(array('ctl'=>'designer:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['uid']),$_smarty_tpl);?>
" class="block_lt boke_but">博客</a>
                                        <a href="<?php echo smarty_function_link(array('ctl'=>'designer:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['uid']),$_smarty_tpl);?>
" class="block_lt yuyue_but">预约</a>
                                    </span> 
                                </h4>
                                <!--如若没有加入旗舰店和证书，则将i1和i2换成i11和i22则图标则会变灰色-->
                                <div class="cl"></div>
                                <p class="mt10">
                                   <span>QQ:<b><?php echo $_smarty_tpl->tpl_vars['item']->value['qq'];?>
</b>  </span>
                                </p>
                                <div class="cl"></div>
                                <p class="mt7">
                                	<span>自我介绍：<?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['about'],20,'...');?>
</span>
                                </p>
                            </div>
                        </div>
                    </li>
                     <?php } ?>
                    
                </ul>
        	</div>
    <div id="jq_loding" style=" height: 20px; text-align: center; "></div>
        </div>
        <div class="h45"></div>

    </div>
 <script>
        var num = 1;
        var nextpage = '<?php echo $_smarty_tpl->tpl_vars['nextpage']->value;?>
';
        var lock  = 0;
	  $(document).ready(function(){       
          $(window).scroll(function(){              
            if(!lock && $(window).scrollTop() ==$(document).height() - $(window).height()  ){
                lock = 1;
                num++;
                var link = nextpage.replace('{page}',num);
                $("#jq_loding").html('正在加载中...');
                $.get(link,function(data){
                    if(data != 0){
                        $("#jq_loding").html('');
                        $(".mobile_tuan_b ul").append(data);              
                        lock = 0;
                    }else{
                        
                        $("#jq_loding").html('没有数据了.....');
                    }
                },'html');
            }           
        });

	  });
   </script>
<!--主题部分结束-->



 <?php echo $_smarty_tpl->getSubTemplate ('mobile:block/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>