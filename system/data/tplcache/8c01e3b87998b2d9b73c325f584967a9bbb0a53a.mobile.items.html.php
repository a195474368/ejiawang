<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:53:18
         compiled from "mobile:article/items.html" */ ?>
<?php /*%%SmartyHeaderCode:66575680255d7f22ed89e23-27880587%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c01e3b87998b2d9b73c325f584967a9bbb0a53a' => 
    array (
      0 => 'mobile:article/items.html',
      1 => 1420010587,
      2 => 'mobile',
    ),
  ),
  'nocache_hash' => '66575680255d7f22ed89e23-27880587',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cate' => 0,
    'items' => 0,
    'item' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7f22ee90342_74927383',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7f22ee90342_74927383')) {function content_55d7f22ee90342_74927383($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ('mobile:block/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--头部开始-->
	<div class="mobile_top">
    	<div class="mobile_top_son">
        	<a href="<?php echo smarty_function_link(array('ctl'=>'article'),$_smarty_tpl);?>
" class="detail-first"><img src="images/back_bg.png" width="10"/></a>
            <div class="detail-second"><?php echo $_smarty_tpl->tpl_vars['cate']->value['title'];?>
</div>
        </div>
    </div>
    <div class="h45"></div>
<!--头部结束-->
<!--主题部分开始-->
    <div class="mobile_main hauto"> 
    	<div class="mobile_tuan">
            <div class="mobile_wenzhang_b">
            	<ul>
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                	<li>
                    	<div class="mobile_tuan_b_all1">
                        	<p class="h10"></p>
                            <p><a href="<?php echo smarty_function_link(array('ctl'=>'article:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['article_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></p>
                            <p>
                            	<span class="ico span_time"></span>
                                <span>发布时间 : <?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</span>
                            </p>             
                        </div>
                    </li>
                    <?php } ?>
                </ul>
        	</div>
            <div class="pagination">
                <?php if ($_smarty_tpl->tpl_vars['pager']->value['prevpage']){?><div class="box"><a href="<?php echo smarty_function_link(array('ctl'=>'article:items','arg0'=>$_smarty_tpl->tpl_vars['cate']->value['cat_id'],'arg1'=>$_smarty_tpl->tpl_vars['pager']->value['prevpage']),$_smarty_tpl);?>
" id="back_page">上一页</a></div><?php }?>
                <div><?php echo $_smarty_tpl->tpl_vars['pager']->value['page'];?>
/<?php echo $_smarty_tpl->tpl_vars['pager']->value['pagecount'];?>
</div>
                <?php if ($_smarty_tpl->tpl_vars['pager']->value['nextpage']){?><div class="box"><a href="<?php echo smarty_function_link(array('ctl'=>'article:items','arg0'=>$_smarty_tpl->tpl_vars['cate']->value['cat_id'],'arg1'=>$_smarty_tpl->tpl_vars['pager']->value['nextpage']),$_smarty_tpl);?>
" id="next_page">下一页</a></div><?php }?>
            </div>
           <script>
		   	$(document).ready(function(){
				$(".mobile_wenzhang_b ul li:odd").css('background','#FFF');
				$(".mobile_wenzhang_b ul li:even").css('background','#F5F5F5');
				$(".mobile_wenzhang_b ul li").last().css('border-bottom','none');
			});
		   </script>
        </div>
       <div class="h45"></div>
    </div>
    
<!--主题部分结束-->

 <?php echo $_smarty_tpl->getSubTemplate ('mobile:block/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>