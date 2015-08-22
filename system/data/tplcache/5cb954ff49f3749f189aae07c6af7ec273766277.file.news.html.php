<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:22:19
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/company/news.html" */ ?>
<?php /*%%SmartyHeaderCode:193357362155d7eaeb366fd0-41071653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cb954ff49f3749f189aae07c6af7ec273766277' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/company/news.html',
      1 => 1402664332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193357362155d7eaeb366fd0-41071653',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_id' => 0,
    'items' => 0,
    'item' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7eaeb444ad3_12649157',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7eaeb444ad3_12649157')) {function content_55d7eaeb444ad3_12649157($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
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
                 <div class="sale_news bgwhite hauto">
                    	<h2>
                          企业新闻
                        </h2>
                        <div class="cl"></div>
                        <ul>
                            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                            <li><a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'company:newsDetail','arg0'=>$_smarty_tpl->tpl_vars['company_id']->value,'arg1'=>$_smarty_tpl->tpl_vars['item']->value['news_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a><i><?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</i></li>
                            <?php } ?>
                        </ul>
                        <div class="h20"></div>
                        <div class=" mt20 mb30 ml20">
                            <div class="page">
                           <?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>

                            </div>
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