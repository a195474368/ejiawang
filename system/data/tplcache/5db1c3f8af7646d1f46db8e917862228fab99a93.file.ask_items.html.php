<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:40:47
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/content/ask_items.html" */ ?>
<?php /*%%SmartyHeaderCode:213716385655d7ef3f1b80c0-57488927%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5db1c3f8af7646d1f46db8e917862228fab99a93' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/content/ask_items.html',
      1 => 1402664332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213716385655d7ef3f1b80c0-57488927',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'cat_info' => 0,
    'cates' => 0,
    'cat_id' => 0,
    'item' => 0,
    'type' => 0,
    'items' => 0,
    'cate_list' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ef3f40e542_07882597',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ef3f40e542_07882597')) {function content_55d7ef3f40e542_07882597($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_format')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--          主题部分开始       -->
<div class="index_b_bg hauto">
    <!--         你所在的位置开始             -->
    <div class="w1000 mt15 bgwhite ask_list_weizhi">
        <span class="span11 icobg block_lt"></span>
        <span class="block_lt">您当前所在的位置:</span>
         <a title="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
" class="block_lt"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
</a>
        <span class="block_lt">></span>
        <a href="<?php echo smarty_function_link(array('ctl'=>'ask'),$_smarty_tpl);?>
" class="block_lt">问答</a>
        <span class="block_lt">></span>
        <a href="<?php echo smarty_function_link(array('ctl'=>'ask:items'),$_smarty_tpl);?>
" class="block_lt">问答列表</a>
        <?php if ($_smarty_tpl->tpl_vars['cat_info']->value){?>
        <span class="block_lt">></span>
        <a href="<?php echo smarty_function_link(array('ctl'=>'ask:items','arg0'=>$_smarty_tpl->tpl_vars['cat_info']->value['cat_id']),$_smarty_tpl);?>
" title="<?php if ($_smarty_tpl->tpl_vars['cat_info']->value['seo_title']){?><?php echo $_smarty_tpl->tpl_vars['cat_info']->value['seo_title'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['cat_info']->value['title'];?>
有关问题<?php }?>" class="block_lt"><?php echo $_smarty_tpl->tpl_vars['cat_info']->value['title'];?>
</a>
        <?php }?>
    </div>
    <div class="cl"></div>
    <!--        你所在的位置结束      -->
    <!--         中间部分开始  -->
    <div class="w1000 mt10 hauto">
        <!--   中间部分左面开始     -->
        <div class="ask_list_main_l lt hauto">
            <!--      上面开始    -->
            <div class="ask_list_main_l_t bgwhite hauto">
                <div class="ask_list_main_l_t1 bgwhite hauto">
                    <h2>
                        <font>分类选择,</font><font class="red">更快捷的</font><font>找到你想要找的相关问答吧!</font>
                    </h2>
                    
                    <div class="fenlei_choose hauto mt10 mb20">
                        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                        <a <?php if ($_smarty_tpl->tpl_vars['cat_id']->value==$_smarty_tpl->tpl_vars['item']->value['cat_id']){?>class="current5"<?php }?> title="<?php if ($_smarty_tpl->tpl_vars['item']->value['seo_title']){?><?php echo $_smarty_tpl->tpl_vars['item']->value['seo_title'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
有关问题<?php }?>"  href="<?php echo smarty_function_link(array('ctl'=>'ask:items','arg0'=>$_smarty_tpl->tpl_vars['item']->value['cat_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
<font class="a0">(<?php echo $_smarty_tpl->tpl_vars['item']->value['ask_num'];?>
)</font></a>
                       <?php } ?>
                    </div>
                </div>
            </div>
            <script>
				$(document).ready(function(){
					$(".fenlei_choose>a").mouseover(function(){
					$(this).find(".a0")	.css('color','#FFF');
						
					}).mouseout(function(){
					$(this).find(".a0")	.css('color','');		
						});
					
				});
			</script>
    
            <!--      上面结束    -->
            <div class="cl"></div>
            <!--      下面开始    -->
            <div class="ask_list_main_l_b hauto mt20">
                <div class="ask_list_main_l_b_ul hauto">
                    <ul> 
                        <li><a href="<?php echo smarty_function_link(array('ctl'=>'ask:items','arg0'=>$_smarty_tpl->tpl_vars['cat_id']->value),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['type']->value==0){?>class="ask_current6"<?php }?> >全部问题</a></li>
                        <li><a href="<?php echo smarty_function_link(array('ctl'=>'ask:items','arg0'=>$_smarty_tpl->tpl_vars['cat_id']->value,'arg1'=>1),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['type']->value==1){?>class="ask_current6"<?php }?>>已解决问题</a></li>
                        <li><a href="<?php echo smarty_function_link(array('ctl'=>'ask:items','arg0'=>$_smarty_tpl->tpl_vars['cat_id']->value,'arg1'=>2),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['type']->value==2){?>class="ask_current6"<?php }?>>待解决问题</a></li>
                    </ul>
                </div>
                <div class="ask_list_main_l_b_all hauto mt15 bgwhite">
                    <div class="ask_list_main_l_b_b hauto  ask_list_main_l_b_b_1">
                        <ul>
                            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                            <li>
                                <span class="lt f14"><font class="red">【<?php echo $_smarty_tpl->tpl_vars['cate_list']->value[$_smarty_tpl->tpl_vars['item']->value['cat_id']]['title'];?>
】</font><a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'ask:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['ask_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></span>                         
                                <span class="rt">回答<?php echo $_smarty_tpl->tpl_vars['item']->value['answer_num'];?>
&nbsp;&nbsp;&nbsp;<font class="org"><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</font></span>
                            </li>
                            <?php } ?>
                        </ul>



                    </div>
                  
                    <div class="page">
                   
                            
                            <?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>

                      
                    </div>
                </div>
            </div>
            <!--      下面结束    -->               
        </div>   
        <!--   中间部分左面结束     -->
        <!--   中间部分右面开始     -->
        <div class="ask_main_r lt hauto  ml20">
             <div class="ask_search_r lt mb20">
            <p>
                <span class="block_lt wenhao icobg"></span>
                <span class="block_lt">
                    <font class="f20 ftw blackb">让每个疑问都有</font><br />
                    <font class="f24 ftw red"><i>解答!</i></font>
                </span>
            </p>
            <div class="cl"></div>
            <a href="<?php echo smarty_function_link(array('ctl'=>'ask:items','arg0'=>0,'arg1'=>2),$_smarty_tpl);?>
" class="a3 a5">我要回答</a>
            <a href="<?php echo smarty_function_link(array('ctl'=>'ask:make'),$_smarty_tpl);?>
" class="a4 a5">我要提问</a>
        </div>
            <?php echo $_smarty_tpl->getSubTemplate ('block/ask_right.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>

        <!--   中间部分右面结束     -->
    </div>
    <!--         中间部分结束  -->
    <?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
          <?php }} ?>