<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 13:34:54
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/ucenter/member/mail.html" */ ?>
<?php /*%%SmartyHeaderCode:36162242355d809fe3911e4-14627243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '330c2122d1217e005fd6c5e26926102d566e4a31' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/ucenter/member/mail.html',
      1 => 1402664332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36162242355d809fe3911e4-14627243',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MEMBER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d809fe437af7_94423191',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d809fe437af7_94423191')) {function content_55d809fe437af7_94423191($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("ucenter/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/widget.YMD.js"></script>
<div class="filter_tabs">
    <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member:info'),$_smarty_tpl);?>
" class="tab">人个资料</a><i></i>
	<a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member:face'),$_smarty_tpl);?>
" class="tab">修改头像</a><i></i>
    <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member:mail'),$_smarty_tpl);?>
" class="tab on">修改邮箱</a><i></i>
    <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member:passwd'),$_smarty_tpl);?>
" class="tab">修改密码</a><i></i>
</div>
<div class="set_c4">
<form id="account-form">
<table cellspacing="0" cellpadding="0" class="form">
    <tr><th>用户名：</th><td>&nbsp;<?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['uname'];?>
</td></tr>
	<tr><th>原邮箱：</th><td><?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['mail'];?>
</td></tr>
    <tr>
        <th><span class="red">&nbsp;* &nbsp;</span>新邮箱：</th>
        <td><input type="text" name="account[new_mail]" value="" class="input"/></td>
    </tr>
    <tr>
        <th><span class="red">&nbsp;* &nbsp;</span>登录密码：</th>
        <td><input type="password" name="account[passwd]" value="" class="input"/></td>
    </tr>
    <tr>
    <th></th><td><input action="<?php echo smarty_function_link(array('ctl'=>'ucenter/member:mail'),$_smarty_tpl);?>
" mini-submit="#account-form" type="button" value="保存" class="set_btn" /></td>
    </tr>
</table>
</form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("ucenter/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>