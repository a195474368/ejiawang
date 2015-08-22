<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:50:29
         compiled from "mobile:article/index.html" */ ?>
<?php /*%%SmartyHeaderCode:163172786755d7f185704840-86378388%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6b03fe3bd5d7debd6e7b001bda02336d2896f77' => 
    array (
      0 => 'mobile:article/index.html',
      1 => 1420010587,
      2 => 'mobile',
    ),
  ),
  'nocache_hash' => '163172786755d7f185704840-86378388',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tree' => 0,
    'item' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7f1857ae5f3_44234098',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7f1857ae5f3_44234098')) {function content_55d7f1857ae5f3_44234098($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ('mobile:block/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--头部开始-->
	<div class="mobile_top">
    	<div class="mobile_top_son">
            <a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
" class="detail-first"><img src="images/back_bg.png" width="10"/></a>
            <div class="detail-second">学装修</div>
        </div>
    </div>
    <div class="h45"></div>
<!--头部结束-->
<!--主题部分开始-->
    <div class="mobile_main hauto"> 

        <div class="xzx-list-box">
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <h2 class="btn xzx-list-a"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</h2>
            <div class="xzx-list-fl">
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
            <a href="<?php echo smarty_function_link(array('ctl'=>'article:items','arg0'=>$_smarty_tpl->tpl_vars['v']->value['cat_id'],'arg1'=>1),$_smarty_tpl);?>
" class="" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
"><span class="btn xzx-list-title"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</span></a>
            <?php } ?>
            </div>
            <?php } ?>
        </div>
  
       <div class="h45"></div>
    </div>
    
<!--主题部分结束-->

 <?php echo $_smarty_tpl->getSubTemplate ('mobile:block/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>