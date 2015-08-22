<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 14:46:49
         compiled from "mobile:site/detail.html" */ ?>
<?php /*%%SmartyHeaderCode:143363352055d81ad9dd5ba4-15306890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c23992d815af2cc7c0b5e922742a9b2d52c7389' => 
    array (
      0 => 'mobile:site/detail.html',
      1 => 1420010589,
      2 => 'mobile',
    ),
  ),
  'nocache_hash' => '143363352055d81ad9dd5ba4-15306890',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'detail' => 0,
    'pager' => 0,
    'company' => 0,
    'site_status' => 0,
    'site_notes' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d81ad9ef2ef5_08210109',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d81ad9ef2ef5_08210109')) {function content_55d81ad9ef2ef5_08210109($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ('mobile:block/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--头部开始-->
	<div class="mobile_top">
    	<div class="mobile_top_son">
        	<a href="javascript:window.history.go(-1);" class="detail-first"><img src="images/back_bg.png" width="10"/></a>
            <div class="detail-second">工地详情</div>
        </div>
    </div>
    <div class="h45"></div>
<!--头部结束-->
<!--主题部分开始-->
    <div class="mobile_main1 hauto"> 
    	<div class="mobile_designer_blog">
        	<div class="mobile_blog_t">
            	<p class="h10"></p>
            	<a href="<?php echo smarty_function_link(array('ctl'=>'site:yuyue','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['site_id']),$_smarty_tpl);?>
" class="design_img"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['company']->value['square_logo'];?>
" width="70" height="70"/></a>
                <p class="designer_jieshao">
                	<a href="###" class="block"><?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
</a>
                    <span class="block"><i>进度&nbsp;:&nbsp;</i><a href="<?php echo smarty_function_link(array('ctl'=>'site:yuyue','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['site_id']),$_smarty_tpl);?>
" class="jincheng"><?php echo $_smarty_tpl->tpl_vars['site_status']->value[$_smarty_tpl->tpl_vars['detail']->value['status']];?>
</a></span>
                    <span class="block cl"></span>
                    <span class="block">
                    	<i class="ico i_dizhi"></i>
                        <i class="gd_dizhi">
                        	<?php echo $_smarty_tpl->tpl_vars['detail']->value['addr'];?>

                        </i>
                    </span>
                    <span class="block cl"></span>
                    <span class="block">承接公司&nbsp;:&nbsp;<a href="<?php echo smarty_function_link(array('ctl'=>'site:yuyue','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['site_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['company']->value['sort_name'];?>
</a></span>
                    <a href="<?php echo smarty_function_link(array('ctl'=>'site:yuyue','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['site_id']),$_smarty_tpl);?>
" class="yuyue_but1">预约参观>></a>
                </p>
                <p class="cl h20bodr_b"></p>
            </div>
            <div class="cl"></div>
            <div class="mobile_gd_detail_b">
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['site_notes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <p>
                        <b>[<?php echo $_smarty_tpl->tpl_vars['site_status']->value[$_smarty_tpl->tpl_vars['item']->value['status']];?>
]</b>
                </p>
                <div class="html_contents">
                    <?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
   
                </div>
                <?php } ?>
            </div> 
        
        </div>
      <div class="h45"></div>
    </div>
<!--主题部分结束-->
<?php echo $_smarty_tpl->getSubTemplate ('mobile:block/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>