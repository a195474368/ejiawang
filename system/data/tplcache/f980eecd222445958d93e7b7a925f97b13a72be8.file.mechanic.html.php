<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 13:29:47
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/mechanic.html" */ ?>
<?php /*%%SmartyHeaderCode:149440475055d808cbdbba22-12065077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f980eecd222445958d93e7b7a925f97b13a72be8' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/mechanic.html',
      1 => 1402664332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149440475055d808cbdbba22-12065077',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'area_id' => 0,
    'area_list' => 0,
    'area_url' => 0,
    'url_data' => 0,
    'v' => 0,
    'attr_values' => 0,
    'item' => 0,
    'it2' => 0,
    'pager' => 0,
    'mechanics' => 0,
    'user_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d808cc0ffa15_15484235',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d808cc0ffa15_15484235')) {function content_55d808cc0ffa15_15484235($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<!----------头部和导航公共部分------------> 
<!--         主题部分开始           -->
<div class="index_b_bg hauto">
    <!--         你所在的位置开始             -->
    <div class="w1000 bgwhite ask_list_weizhi">
        <span class="span11 icobg block_lt"></span>
        <span class="block_lt">您当前所在的位置:</span>
        <a title="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
" class="block_lt"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
</a>
        <span class="block_lt">></span>
        <a href="<?php echo smarty_function_link(array('ctl'=>'gs'),$_smarty_tpl);?>
" title="找装修管家" class="block_lt">找装修管家</a>
        <span class="block_lt">></span>
        <a href="<?php echo smarty_function_link(array('ctl'=>'mechanic'),$_smarty_tpl);?>
" title="找技工" class="block_lt">找技工</a>
        <?php if ($_smarty_tpl->tpl_vars['area_id']->value){?>
        <span class="block_lt">></span>
        <a href="<?php echo smarty_function_link(array('ctl'=>'mechanic:items','arg0'=>$_smarty_tpl->tpl_vars['area_id']->value),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['area_list']->value[$_smarty_tpl->tpl_vars['area_id']->value]['area_name'];?>
技工" class="block_lt "><?php echo $_smarty_tpl->tpl_vars['area_list']->value[$_smarty_tpl->tpl_vars['area_id']->value]['area_name'];?>
技工</a>
        <?php }?>
    </div>
    <div class="cl"></div>
    <!--        你所在的位置结束      -->
    <!--        引导开始             -->
    <div class="w1000 dirary_list hauto bgwhite mt20">
        <div class="dirary_list_t hauto">
            <p class="h30 bodr_b ftw f16">
                <font >直接定向选择技工</font>
                <font class="red">方便快捷</font>

            </p>
        <div class="home_list_area hauto bodr_b_x mt10 mb10">
                <span>区域&nbsp;:&nbsp;</span>
                <a  href="<?php echo $_smarty_tpl->tpl_vars['area_url']->value;?>
" <?php if (empty($_smarty_tpl->tpl_vars['url_data']->value['area_id'])){?>class="a1"<?php }?>>不限</a>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['area_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                <a  title="<?php echo $_smarty_tpl->tpl_vars['v']->value['area_name'];?>
技工" href="<?php echo $_smarty_tpl->tpl_vars['v']->value['link'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['checked']){?>class="a1"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['area_name'];?>
</a>
                <?php } ?>
            </div>

            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['attr_values']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <div class="home_list_area hauto bodr_b_x mt10 mb10">
                <span><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
&nbsp;:&nbsp;</span>
                <a  title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
技工" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"  <?php if ($_smarty_tpl->tpl_vars['item']->value['checked']){?>class="a1"<?php }?>>不限</a>
                <?php  $_smarty_tpl->tpl_vars['it2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it2']->key => $_smarty_tpl->tpl_vars['it2']->value){
$_smarty_tpl->tpl_vars['it2']->_loop = true;
?>
                <a  title="<?php echo $_smarty_tpl->tpl_vars['it2']->value['title'];?>
技工" href="<?php echo $_smarty_tpl->tpl_vars['it2']->value['link'];?>
"  <?php if ($_smarty_tpl->tpl_vars['it2']->value['checked']){?>class="a1"<?php }?>><?php echo $_smarty_tpl->tpl_vars['it2']->value['title'];?>
</a>
                <?php } ?>

            </div>
            <?php } ?>


        </div>

    </div>
    <!--        引导结束             -->
    <!-- 设计团队主题部分开始 -->
    <div class="mechanic_team_main w1000 hauto mt20">
        <!--标题开始 -->
        <h2>
            <span class="block_lt f20">找工人</span>
            <span class="block rt f14">共<font class="red"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['pager']->value['count'])===null||$tmp==='' ? '0' : $tmp);?>
</font>位</span>
        </h2>
        <!--标题结束-->
        <div class="cl"></div>
        <!--团队介绍开始-->
        <div class="w1000 hauto mechanic_team_describe">
            
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mechanics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <div class="mechanic_team_describe_t lt bodr bgwhite mt10 mr15">
                <div class="mechanic_team_describe_t_img">
                    <a title="<?php echo $_smarty_tpl->tpl_vars['user_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['realname'];?>
" target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'mechanic:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['uid']),$_smarty_tpl);?>
">
                        <img alt="<?php echo $_smarty_tpl->tpl_vars['user_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['realname'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['user_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['face'];?>
" width="200" height="200" />
                    </a>
                </div>
                <p class="p37">
                	<a title="<?php echo $_smarty_tpl->tpl_vars['user_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['realname'];?>
" target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'mechanic:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['uid']),$_smarty_tpl);?>
" class="block_lt"><?php echo $_smarty_tpl->tpl_vars['user_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['realname'];?>
</a>
                    <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $_smarty_tpl->tpl_vars['item']->value['qq'];?>
&amp;site=qq&amp;menu=yes" class="block_lt">
                    	<img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo $_smarty_tpl->tpl_vars['item']->value['qq'];?>
:51" alt="<?php echo $_smarty_tpl->tpl_vars['user_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['realname'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['user_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['realname'];?>
">
                    </a>
                 </p>
                 <div class="cl"></div>
                <p class="p38">联系电话：<?php echo $_smarty_tpl->tpl_vars['item']->value['tel'];?>
</p>
            </div>
           <?php } ?>
        </div>
       
        
        
  
        <!--团队介绍结束-->
        <!--分页开始-->
        <div class="w1000 hauto bgwhite mt20">
            <div class="page">
                <?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>

            </div>
        </div>
        <!--分页结束-->
        <div class="h20"></div>


    </div>

    <!-- 企设计团队主题部分结束 -->  

 

    <?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
      <?php }} ?>