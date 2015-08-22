<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:41:55
         compiled from "mobile:company/detail.html" */ ?>
<?php /*%%SmartyHeaderCode:176072196255d7ef839764f8-61252365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e40bb5ab71e7da44575a84889266cb18af8eff9' => 
    array (
      0 => 'mobile:company/detail.html',
      1 => 1420010587,
      2 => 'mobile',
    ),
  ),
  'nocache_hash' => '176072196255d7ef839764f8-61252365',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'detail' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ef83a6eaf8_92199318',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ef83a6eaf8_92199318')) {function content_55d7ef83a6eaf8_92199318($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ('mobile:block/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--头部开始-->
	<div class="mobile_top">
    	<div class="mobile_top_son">
            <a href="<?php echo smarty_function_link(array('ctl'=>'company'),$_smarty_tpl);?>
" class="detail-first"><img src="images/back_bg.png" width="10"/></a>
            <div class="detail-second">公司详情</div>
        </div>
    </div>
    <div class="h45"></div>
    
<!--头部结束-->
<!--主题部分开始-->
    <div class="mobile_main hauto"> 
    	<div class="mobile_company">
          	<div class="mobile_company_t">
                <a title="<?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'company:detail','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['company_id']),$_smarty_tpl);?>
" ><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['detail']->value['square_logo'];?>
" width="78" height="78"/></a>
                <div class="mobile_company_t_r lt">
                	<h3><a title="<?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'company:detail','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['company_id']),$_smarty_tpl);?>
" ><?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>
</a></h3>
                    <p>
                    	<span class="ico block_lt"></span>
                        <i class="block_lt"><?php echo $_smarty_tpl->tpl_vars['detail']->value['addr'];?>
</i>
                    </p>
                </div>
            </div>
            <div class="cl"></div>
            <div class="mobile_company_c">
            	<p>
                	<span>图库案例：<i><?php echo $_smarty_tpl->tpl_vars['detail']->value['case_num'];?>
</i></span>
                    <span>签约数：<i><?php echo $_smarty_tpl->tpl_vars['detail']->value['tenders_num'];?>
</i></span>
                </p>
                <p>
                	<span>在建工地：<i><?php echo $_smarty_tpl->tpl_vars['detail']->value['site_num'];?>
</i></span>
                    <span> 人气：<?php echo $_smarty_tpl->tpl_vars['detail']->value['views'];?>
</span>
                </p>
            </div>
            <div class="cl"></div>
            <div class="mobile_company_b">
            	<div class="mobile_company_b_tittle">
                	<span class="block">公司信息</span>
                </div>
                <div class="mobile_company_b_b html_contents">
                	<?php echo $_smarty_tpl->tpl_vars['detail']->value['intro'];?>

                
                </div>
            </div>
        </div>  
        <div class="h45"></div>
    </div>
<!--主题部分结束-->
<!--底部区域开始-->
	<div class="mobile_footer">
        <div class="mobile_footer_company">
        	<ul>
                <li class="li0"><a href="<?php echo smarty_function_link(array('ctl'=>'company:yuyue','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['company_id']),$_smarty_tpl);?>
">&nbsp;免费帮我设计</a></li>
                <li class="li1"><a href="<?php echo smarty_function_link(array('ctl'=>'company:yuyue','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['company_id']),$_smarty_tpl);?>
">&nbsp;&nbsp;&nbsp;免费帮我出报价</a></li>
            </ul>
        </div>
	</div>
    
<!--底部区域结束-->

</div>
</body>
</html>
<?php }} ?>