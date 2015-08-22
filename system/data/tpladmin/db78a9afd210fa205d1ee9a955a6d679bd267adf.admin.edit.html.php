<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 14:30:11
         compiled from "admin:tenders/tracking/edit.html" */ ?>
<?php /*%%SmartyHeaderCode:75657435355d816f3c31850-23048910%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db78a9afd210fa205d1ee9a955a6d679bd267adf' => 
    array (
      0 => 'admin:tenders/tracking/edit.html',
      1 => 1402664331,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '75657435355d816f3c31850-23048910',
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
  'unifunc' => 'content_55d816f3ce5ef2_94940473',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d816f3ce5ef2_94940473')) {function content_55d816f3ce5ef2_94940473($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
    <table width="100%" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
        <th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
        <td align="right"><?php echo smarty_function_link(array('ctl'=>"tenders/tracking:index",'priv'=>"hidden",'class'=>"button"),$_smarty_tpl);?>
</td>
        <td width="15"></td>
      </tr>
    </table>
</div>
<div class="page-data"><form action="?tenders/tracking-edit.html" mini-form="tracking-form" method="post" >
<table width="100%" border="0" cellspacing="0" class="table-data form">
<input type="hidden" name="tracking_id" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['tracking_id'];?>
"/>

<tr><th>客服回复：</th><td><textarea name="data[reply]" class="textarea"><?php echo $_smarty_tpl->tpl_vars['detail']->value['reply'];?>
</textarea><br /></td></tr>
    <tr><th class="clear-th-bottom"></th><td class="clear-td-bottom" colspan="10"><input type="submit" class="bt-big" value="提交数据" /></td></tr>
</table>
</form></div>

<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>