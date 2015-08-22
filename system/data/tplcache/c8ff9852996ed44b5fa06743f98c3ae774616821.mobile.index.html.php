<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:23:51
         compiled from "mobile:tuan/index.html" */ ?>
<?php /*%%SmartyHeaderCode:162531133555d7eb476bde18-55523336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8ff9852996ed44b5fa06743f98c3ae774616821' => 
    array (
      0 => 'mobile:tuan/index.html',
      1 => 1420010589,
      2 => 'mobile',
    ),
  ),
  'nocache_hash' => '162531133555d7eb476bde18-55523336',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
    'pager' => 0,
    'items' => 0,
    'item' => 0,
    'home_list' => 0,
    'nextpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7eb477ea7e3_48155986',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7eb477ea7e3_48155986')) {function content_55d7eb477ea7e3_48155986($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ('mobile:block/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div class="mobile_top">
    	<div class="mobile_top_son">
            <a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
" class="detail-first"><img src="images/back_bg.png" width="10"/></a>
            <div class="detail-second">小区团装<i><a href="<?php echo smarty_function_link(array('ctl'=>'city'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
</a>&nbsp;<img src="images/xia_white_ico.png" /></i></div>
        </div>
    </div>
    <div class="h45"></div>
<!--头部结束-->
<!--主题部分开始-->
    <div class="mobile_main hauto"> 
    	<div class="mobile_tuan">
        	<div class="mobile_tuan_search">
                <form method="post" action="<?php echo smarty_function_link(array('ctl'=>'tuan:index'),$_smarty_tpl);?>
">
                    <input type="text" name='s'  value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['pager']->value['s'])===null||$tmp==='' ? '请输入您要查询的小区名称' : $tmp);?>
" class="tuan_s"/>
                    <input type="submit" class="submit_tijiao" value=""/>
               </form>
            </div>
            <div class="mobile_tuan_b">
            	<ul>
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                	<li>
                    	<div class="mobile_tuan_b_all">
                            <a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'tuan:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['tuan_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['home_list']->value[$_smarty_tpl->tpl_vars['item']->value['home_id']]['face_pic'];?>
" width="68" height="55"/></a>
                            <div class="mobile_tuan_b_all_r lt">
                            	<h4><a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'tuan:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['tuan_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></h4>
                                <p>立省：<i>￥<?php echo $_smarty_tpl->tpl_vars['item']->value['jieyue'];?>
元</i></p>
                                <p class="mt7">
                                	<span class="block_lt mt10"><?php echo $_smarty_tpl->tpl_vars['item']->value['sign_num'];?>
<i>人已参团</i></span>
                                    <a href="<?php echo smarty_function_link(array('ctl'=>'tuan:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['tuan_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" class="block tuan_but">我要参团</a>
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
		  $(".tuan_s").focus(function(){
			  if($(this).val() == '请输入您要查询的小区名称') $(this).val('');
		  }).focusout(function(){
			  if($(this).val() == '') $(this).val('请输入您要查询的小区名称');
		  });
		  $(".mobile_tuan_b ul li").last().css('border-bottom','none');
          
          
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