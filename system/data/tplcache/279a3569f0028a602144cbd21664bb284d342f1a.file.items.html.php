<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:20:35
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/content/items.html" */ ?>
<?php /*%%SmartyHeaderCode:62039291655d7ea83b742e7-34172430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '279a3569f0028a602144cbd21664bb284d342f1a' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/content/items.html',
      1 => 1440053828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62039291655d7ea83b742e7-34172430',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'cate_info' => 0,
    'cates' => 0,
    'item' => 0,
    'items' => 0,
    'pager' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea83d41128_08328916',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea83d41128_08328916')) {function content_55d7ea83d41128_08328916($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.cutstr.php';
if (!is_callable('smarty_function_widget')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.widget.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--         主题部分开始           -->
<div class="index_b_bg hauto">
    <!--         你所在的位置开始             -->
    <div class="w1000 mt15 bgwhite ask_list_weizhi">
        <span class="span11 icobg block_lt"></span>
        <span class="block_lt">您当前所在的位置:</span>
        <a title="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
" href="\" class="block_lt"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
</a>
        <span class="block_lt">></span>
        <a title="学装修" href="<?php echo smarty_function_link(array('ctl'=>'content'),$_smarty_tpl);?>
" class="block_lt">学装修</a>
        <span class="block_lt">></span>
        <a title="装修学堂" href="<?php echo smarty_function_link(array('ctl'=>'content:items'),$_smarty_tpl);?>
" class="block_lt">装修学堂</a>
        <?php if ($_smarty_tpl->tpl_vars['cate_info']->value){?>
        <span class="block_lt">></span>
        <a href="<?php echo smarty_function_link(array('ctl'=>'content:items','arg0'=>$_smarty_tpl->tpl_vars['cate_info']->value['cat_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['cate_info']->value['title'];?>
" class="block_lt"><?php echo $_smarty_tpl->tpl_vars['cate_info']->value['title'];?>
</a>
        <?php }?>
    </div>
    <div class="cl"></div>
    <!--        你所在的位置结束      -->
    <div class="ask_detail_main w1000 mt15 hauto">
        <!--        位置结束左面下开始       -->
        <div class="ask_detail_main_l hauto mt5 lt bgwhite">
            <div class="learn_decoration_list_t hauto">
                <div class="learn_decoration_list_t_t">
                    <ul>
                        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                        <li><a href="<?php echo smarty_function_link(array('ctl'=>'content:items','arg0'=>$_smarty_tpl->tpl_vars['item']->value['cat_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"  <?php if ($_smarty_tpl->tpl_vars['item']->value['cat_id']==$_smarty_tpl->tpl_vars['cate_info']->value['cat_id']){?>class="current11" style="color: #FFF " <?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></li>
                       <?php } ?>
                    </ul>
                </div>
                <div class="cl"></div>
                <div class="learn_decoration_list_t_b mt15 hauto  learn_decoration_list_t_b_0">
                <ul>
                        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                        <li>
                            <p><a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'content:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['article_id']),$_smarty_tpl);?>
" class="red ftw"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></p>
                            <p><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['desc'],180,'..');?>
<a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'content:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['article_id']),$_smarty_tpl);?>
"  class="org">阅读全文>></a>
                            </p>
                            <p class="p53"><font>发布时间&nbsp;:&nbsp;</font><font><?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</font></p>
                        </li>
                       <?php } ?>
                    </ul>
                    <div class="learn_decoration_page mt20">
                        <div class="page">
                         
                              <?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>

                         
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!--        位置结束左面下结束       -->

        <!--        位置结束右面下开始       -->
        <div class="ask_detail_main_r hauto mt5 lt ml20">
            <?php echo $_smarty_tpl->getSubTemplate ("block/tenders.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
            <div class="cl"></div>
            <div class="ads8 mt15 hauto">
                <?php echo smarty_function_widget(array('id'=>"adv",'name'=>"文章列表页右侧广告位",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"5"),$_smarty_tpl);?>

            </div>
            <div class="today_tuijian hauto">
                <h2 class="mb10 mt10">经典日记</h2>
                <div class="today_tuijian_b hauto bgwhite">
                    <?php echo smarty_function_widget(array('id'=>'diary/right','limit'=>10,'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>

                </div>
            </div>
        </div>
    </div>
    <div class="cl h20"></div>
    <?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  <?php }} ?>