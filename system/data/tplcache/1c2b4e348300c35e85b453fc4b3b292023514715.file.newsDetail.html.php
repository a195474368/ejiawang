<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 12:08:08
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/company/newsDetail.html" */ ?>
<?php /*%%SmartyHeaderCode:81548292455d7f5a8e6b738-63958012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c2b4e348300c35e85b453fc4b3b292023514715' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/company/newsDetail.html',
      1 => 1402664332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81548292455d7f5a8e6b738-63958012',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_id' => 0,
    'detail' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7f5a8ef7845_57498763',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7f5a8ef7845_57498763')) {function content_55d7f5a8ef7845_57498763($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ('company/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- 详情页的公共部分 -->
<!-- 主题部分开始 -->
<div class="index_b_bg hauto">
    <!-- 当前位置开始   -->
    <div class="favor_detail_weizhi w1000 bodr_b mb20">
        <font>你当前的位置：</font>
        <a href="<?php echo smarty_function_link(array('ctl'=>'company:news','arg0'=>$_smarty_tpl->tpl_vars['company_id']->value),$_smarty_tpl);?>
">企业新闻</a>

    </div>
    <!-- 当前位置结束   -->
    <!-- 企业介绍主题部分开始 -->
    <div class="qyjs_main w1000 hauto">
        <!-- 企业介绍主题部分左面开始 -->
        <?php echo $_smarty_tpl->getSubTemplate ('company/left.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
		
        <!-- 企业介绍主题部分左面结束 -->
        <!-- 企业介绍主题部分右面开始 -->
        <div class="qyjs_main_r lt hauto ml20">
                 
            <div class="acitivity_news_detail bgwhite hauto">
             		<h2><?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
</h2>
                    <div class="acitivity_news_detail_b hauto">
                    	<p><?php echo $_smarty_tpl->tpl_vars['detail']->value['content'];?>
</p>
                    </div>
              
             </div>
            
        </div>
        <!-- 企业介绍主题部分右面结束 -->
    </div>
    <!-- 企业介绍主题部分结束 -->
    <div class="h30"></div>
</div> 
<!-- 主题部分结束 -->
<?php echo $_smarty_tpl->getSubTemplate ('company/foot.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>