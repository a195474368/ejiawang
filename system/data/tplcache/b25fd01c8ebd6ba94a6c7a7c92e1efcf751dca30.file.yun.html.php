<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:25:36
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/yun.html" */ ?>
<?php /*%%SmartyHeaderCode:87323432655d7ebb02ad110-36682332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b25fd01c8ebd6ba94a6c7a7c92e1efcf751dca30' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/yun.html',
      1 => 1422579952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87323432655d7ebb02ad110-36682332',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ebb0348e42_78569197',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ebb0348e42_78569197')) {function content_55d7ebb0348e42_78569197($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?>
<?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="content" >
    <div style="width:1200px;height:auto;margin:0 auto" >
    <img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/images/yun1.jpg" width="1200px"/>
    <img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/images/yun2.jpg"  width="1200px"/>
    <img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/images/yun3.jpg"  width="1200px"/>
     <a mini-load='申请免费量房' href="<?php echo smarty_function_link(array('ctl'=>'yun:tenders','http'=>'empty'),$_smarty_tpl);?>
" class="orgbgg">
     <img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/images/yun4.jpg"  width="1200px"/></a>
    </div>
     
    
</div>
 

  <?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  <?php }} ?>