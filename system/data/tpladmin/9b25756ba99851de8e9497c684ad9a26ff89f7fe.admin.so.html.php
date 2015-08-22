<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:07:49
         compiled from "admin:member/verify/so.html" */ ?>
<?php /*%%SmartyHeaderCode:49365347455d7e7854a5427-18321298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b25756ba99851de8e9497c684ad9a26ff89f7fe' => 
    array (
      0 => 'admin:member/verify/so.html',
      1 => 1402664331,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '49365347455d7e7854a5427-18321298',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'detail' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7e785576c07_42334416',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7e785576c07_42334416')) {function content_55d7e785576c07_42334416($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
    <table width="100%" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
        <th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
        <td align="right"><?php echo smarty_function_link(array('ctl'=>"member/verify:index",'priv'=>"hidden",'class'=>"button"),$_smarty_tpl);?>
</td>
        <td width="15"></td>
      </tr>
    </table>
</div>
<div class="page-data">
<form action="?member/verify-index.html" id="SO-form" method="post">
<table width="100%" border="0" cellspacing="0" class="table-data form">
<tr><th>UID：</th><td><input type="text" name="SO[uid]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['uid'];?>
" class="input w-100"/></td></tr>
<tr><th>姓名/企业名：</th><td><input type="text" name="SO[name]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>
" class="input w-300"/></td></tr>
<tr>
    <th>审核状态：</th>
    <td><select name="SO[verify]" class="w-100"><option value="">全部</option><option value="0">待审</option><option value="1">已通过</option><option value="2">已拒绝</option></select></td>
</tr>
<tr>
    <th>认证通过时间：</th>
    <td>
        <input type="text" name="SO[verify_time][0]" value="" class="input w-100" date="verify_time" readonly/>~
        <input type="text" name="SO[verify_time][1]" value="" class="input w-100" date="verify_time" readonly/>
     </td>
</tr>
<tr>
    <th>申请时间：</th>
    <td>
        <input type="text" name="SO[request_time][0]" value="" class="input w-100" date="request_time" readonly/>~
        <input type="text" name="SO[request_time][1]" value="" class="input w-100" date="request_time" readonly/>
    </td>
</tr>
<tr><th class="clear-th-bottom"></th><td class="clear-td-bottom" colspan="10"><input type="submit" class="bt-big" value="搜 索" /></td></tr>
</table>
</form></div>

<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>