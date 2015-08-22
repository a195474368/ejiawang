<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 14:55:44
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/ucenter/banner/create.html" */ ?>
<?php /*%%SmartyHeaderCode:124822643855d81cf04f4f16-99621215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb04c828906ad8320bc624569eb1d9a92460ed62' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/ucenter/banner/create.html',
      1 => 1402664332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124822643855d81cf04f4f16-99621215',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'detail' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d81cf05b2be1_14989137',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d81cf05b2be1_14989137')) {function content_55d81cf05b2be1_14989137($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("ucenter/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="base_info"><b>发布横幅</b></div>
<form mini-form="company" action="<?php echo smarty_function_link(array('ctl'=>'ucenter/banner:create','http'=>true),$_smarty_tpl);?>
" method="post">
    <table cellspacing="0" cellpadding="0" class="form">
        <tr><th><span class="red">*</span>标题：</th><td><input type="text" name="data[title]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
        <tr><th><span class="red">*</span>图片：</th><td><input type="file" name="data[pic]" class="input w-100" /></td></tr>
        <tr><th><span class="red">*</span>链接：</th><td><input type="text" name="data[link]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['link'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
        <tr><th><span class="red">*</span>排序：</th><td><input type="text" name="data[orderby]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['orderby'])===null||$tmp==='' ? '5' : $tmp);?>
"  class="input" style=" width: 50px;"/><span class="tip-comment">数字越小排序越高</span></td></tr>
        <tr><th></th><td><input type="submit" value="保存" class="set_btn" /></td></tr>
    </table>
</form>


<?php echo $_smarty_tpl->getSubTemplate ("ucenter/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>