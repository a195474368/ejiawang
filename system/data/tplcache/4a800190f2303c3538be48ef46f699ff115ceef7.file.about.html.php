<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:47:27
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/about.html" */ ?>
<?php /*%%SmartyHeaderCode:202208577155d7f0cfb82a75-54927218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a800190f2303c3538be48ef46f699ff115ceef7' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/about.html',
      1 => 1402664332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202208577155d7f0cfb82a75-54927218',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'item' => 0,
    'page' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7f0cfc443e3_52337293',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7f0cfc443e3_52337293')) {function content_55d7f0cfc443e3_52337293($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="w1000">
<div class="content mt10 mb10">
<!--左侧-->
	<div class="lt btnLBox">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <a <?php if ($_smarty_tpl->tpl_vars['item']->value['page']==$_smarty_tpl->tpl_vars['page']->value){?>class="selectBtn"<?php }?> href="<?php echo smarty_function_link(array('ctl'=>'about','arg0'=>$_smarty_tpl->tpl_vars['item']->value['page']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
        <?php } ?>
    </div>
<!--右侧-->
	<div class="lt bgWhite aboutBox">
	<div class="pad20">
    	
        <h1 class="f24 cOrange fontSW"><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
</h1>
        <div class="h20"></div>
        <div>
            <?php echo $_smarty_tpl->tpl_vars['info']->value['content'];?>

        </div>
  
    </div>
    </div>
    <div class="clearFloat h20"></div>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>