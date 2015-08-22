<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:38:06
         compiled from "mobile:site/index.html" */ ?>
<?php /*%%SmartyHeaderCode:145778501055d7ee9e5bf591-30215485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14fc21b57cba434ab7e68a45549f054ce2769333' => 
    array (
      0 => 'mobile:site/index.html',
      1 => 1420010589,
      2 => 'mobile',
    ),
  ),
  'nocache_hash' => '145778501055d7ee9e5bf591-30215485',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
    'area_list' => 0,
    'item' => 0,
    'items' => 0,
    'pager' => 0,
    'site_status' => 0,
    'company_list' => 0,
    'nextpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ee9e7486a8_86881739',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ee9e7486a8_86881739')) {function content_55d7ee9e7486a8_86881739($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.cutstr.php';
?><?php echo $_smarty_tpl->getSubTemplate ('mobile:block/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--头部开始-->
	<div class="mobile_top">
    	<div class="mobile_top_son">
        	<a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
" class="detail-first"><img src="images/back_bg.png" width="10"/></a>
            <div class="detail-second">看工地<i><a href="<?php echo smarty_function_link(array('ctl'=>'city'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
</a>&nbsp;<img src="images/xia_white_ico.png" /></i></div>
             <a href="###" class="detail-third1">
            	区域
            </a>
              <!--弹出层开始-->
              <div class="mobile_show2 none" style="height:  auto;overflow: hidden;">
                <ul>
                    <li><a href="<?php echo smarty_function_link(array('ctl'=>'site'),$_smarty_tpl);?>
"><b>全部区域</b></a></li>
                     <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['area_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                    <li> <a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['area_name'];?>
在建工地"  href="<?php echo smarty_function_link(array('ctl'=>'site:items','arg0'=>$_smarty_tpl->tpl_vars['item']->value['area_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['area_name'];?>
</a></li>
                    <?php } ?>
                </ul>
			</div>
			<!--弹出层结束-->
            <script>
				$(document).ready(function(){
					$(".mobile_top_son a.detail-third1").toggle(
						function(){
						$(".mobile_show2").show();
						},
						function(){
						$(".mobile_show2").hide();
						}
					);
					
					$(".mobile_show2").click(function(){
						$(this)	.hide();
					});
				});
			</script>
        </div>
    </div>
    <div class="h45"></div>
<!--头部结束-->
<!--主题部分开始-->
    <div class="mobile_main hauto"> 
    	<div class="mobile_tuan">
            <div class="mobile_tuan_b">
            	<ul>
                     <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                	<li>
                    	<div class="mobile_tuan_b_all">
                        	<a href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['face_pic'];?>
" width="68" height="55"/></a>
                            <div class="mobile_tuan_b_all_r lt">
                            	<h4><a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],21,'');?>
</h4>
                                <p class="mt10"><span class="block_lt">进度：</span><a href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
" class="block gongdi_jindu"><?php echo $_smarty_tpl->tpl_vars['site_status']->value[$_smarty_tpl->tpl_vars['item']->value['status']];?>
</a></p>
                                <div class="cl"></div>
                                <p class="mt10">
                                	<span>施工:<a title="<?php echo $_smarty_tpl->tpl_vars['company_list']->value[$_smarty_tpl->tpl_vars['item']->value['company_id']]['name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'company:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['company_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['company_list']->value[$_smarty_tpl->tpl_vars['item']->value['company_id']]['sort_name'];?>
</a></span>&nbsp;&nbsp;&nbsp;
                                    <a href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
">&gt;&gt;我要参观</a>
                                </p>
                            </div>
                        </div>
                    </li>
                      <?php } ?>
      
                </ul>
        	</div>
        </div>
           <div id="jq_loding" style=" height: 20px; text-align: center; "></div>
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
       <div class="h45"></div>
    </div>
   <?php echo $_smarty_tpl->getSubTemplate ('mobile:block/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>