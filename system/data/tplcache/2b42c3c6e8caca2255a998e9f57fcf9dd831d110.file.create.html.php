<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:26:09
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/ucenter/news/create.html" */ ?>
<?php /*%%SmartyHeaderCode:86594368455d7ebd1b8f3f1-32835617%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b42c3c6e8caca2255a998e9f57fcf9dd831d110' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/ucenter/news/create.html',
      1 => 1402664332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86594368455d7ebd1b8f3f1-32835617',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'detail' => 0,
    'pager' => 0,
    'OTOKEN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ebd1ca9d70_56410939',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ebd1ca9d70_56410939')) {function content_55d7ebd1ca9d70_56410939($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("ucenter/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="base_info"><b>发布企业新闻</b></div>
<form mini-form="company" action="<?php echo smarty_function_link(array('ctl'=>'ucenter/news:create','http'=>true),$_smarty_tpl);?>
" method="post">
    <table cellspacing="0" cellpadding="0" class="form">
            <tr><th><span class="red">*</span>标题：</th><td><input type="text" name="data[title]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
            <tr><th><span class="red">*</span>内容：</th><td><textarea name="data[content]" kindeditor="full" style="width:550px;height:350px;"><?php echo $_smarty_tpl->tpl_vars['detail']->value['content'];?>
</textarea><br /></td></tr>

           <tr><th></th><td><input type="submit" value="保存" class="set_btn" /></td></tr>
    </table>
</form>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/kindeditor/kindeditor.js"></script>
<script type="text/javascript">
(function(K, $){

var editor = KindEditor.create('textarea[kindeditor]', {uploadJson : '<?php echo smarty_function_link(array('ctl'=>"magic:editorupload",'http'=>true),$_smarty_tpl);?>
', extraFileUploadParams:{OTOKEN:"<?php echo $_smarty_tpl->tpl_vars['OTOKEN']->value;?>
"}});

})(window.KT, window.jQuery);
</script>
<?php echo $_smarty_tpl->getSubTemplate ("ucenter/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>