<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:49:57
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/youhui.html" */ ?>
<?php /*%%SmartyHeaderCode:191338291155d7f1653b64d5-72679650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e711fe3aa6628caf5751e4e4d2fc1261677312c1' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/youhui.html',
      1 => 1440054126,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191338291155d7f1653b64d5-72679650',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'items' => 0,
    'item' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7f1655010b6_32375658',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7f1655010b6_32375658')) {function content_55d7f1655010b6_32375658($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<!----------头部和导航公共部分------------>
<!--   主题部分开始  -->
<div class="index_b_bg hauto">
    <!--         你所在的位置开始             -->
    <div class="w1000 bgwhite ask_list_weizhi">
        <span class="span11 icobg block_lt"></span>
        <span class="block_lt">您当前所在的位置:</span>
        <a title="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
" href="\" class="block_lt"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
</a>
        <span class="block_lt">></span>
        <a href="<?php echo smarty_function_link(array('ctl'=>'gs'),$_smarty_tpl);?>
" title="找装修公司" class="block_lt">找装修公司</a>
        <span class="block_lt">></span>
        <a href="<?php echo smarty_function_link(array('ctl'=>'gs:youhui'),$_smarty_tpl);?>
" title="优惠信息" class="block_lt">优惠信息</a>
    </div>
    <div class="cl"></div>
    <!--        你所在的位置结束      -->
    <!-- 优惠信息详情   -->
    <div class="w1000 favorable_detail_main_b hauto mt20">
        <h2><a href="<?php echo smarty_function_link(array('ctl'=>'gs:youhui'),$_smarty_tpl);?>
" title="优惠信息">优惠信息</a></h2>
        <div class="w1000 hauto favorable_detail_main_b_ul">
            
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <div class="yhjxz ml10 mt10">
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
" class="block_lt a13 <?php if ($_smarty_tpl->tpl_vars['item']->value['end']){?>orgbgg<?php }else{ ?>graybgg<?php }?>">去看看</a>
                </p>
            </div>
            <?php } ?>
                                
        </div>              
    </div>
 
    <!-- 优惠详情结束 -->
    <div class="h30"></div>



    <script>
        $(document).ready(function() {
            $(".favorable_more_menu_r_b ul li:last").css('background', 'none');
            $(".yhjxz").mouseover(function() {
                $(this).css('border', '1px solid red');
                $(this).css('box-shadow', '0 0 1px 1px #BBB');

            }).mouseout(function() {
                $(this).css('border', '1px solid #FFF');
                $(this).css('box-shadow', '0 0 1px 1px #BBB');
            });
        });
    </script>
    <?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
      <?php }} ?>