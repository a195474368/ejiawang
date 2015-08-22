<?php /* Smarty version Smarty-3.1.8, created on 2015-08-21 18:36:37
         compiled from "admin:member/log/items.html" */ ?>
<?php /*%%SmartyHeaderCode:86649249055d6ff35b27167-53507064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '053f55b26b8f30ae5c23cf9eb926c7f6f3f47e88' => 
    array (
      0 => 'admin:member/log/items.html',
      1 => 1402664331,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '86649249055d6ff35b27167-53507064',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'items' => 0,
    'item' => 0,
    'member_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d6ff35c42548_55784327',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d6ff35c42548_55784327')) {function content_55d6ff35c42548_55784327($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_format')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
	<table width="100%" align="center" cellpadding="0" cellspacing="0" >
		<tr>
			<td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
			<th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
			<td align="right"><?php echo smarty_function_link(array('ctl'=>"member/log:so",'class'=>"button",'load'=>"mini:搜索日志",'width'=>"mini:400",'title'=>"搜索"),$_smarty_tpl);?>
 &nbsp; &nbsp;</td>
			<td width="15"></td>
		</tr>
	</table>
</div>
<div class="page-data">	
	<form id="items-form">
    <table width="100%" border="0" cellspacing="0" class="table-data table">
    <tr><th class="w-100">ID</th><th class="w-100">用户</th><th class="w-50">类型</th>
	<th class="w-100">收支</th><th>日志</th><th class="w-100">IP</th><th class="w-100">充值时间</th></tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr>
		<td class="left"><label><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['log_id'];?>
" name="log_id[]" CK="PRI"/><?php echo $_smarty_tpl->tpl_vars['item']->value['log_id'];?>
<label></td>
		<td><?php echo $_smarty_tpl->tpl_vars['member_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['uname'];?>
</td>
		<td><?php if ($_smarty_tpl->tpl_vars['item']->value['from']=='gold'){?>金币<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['item']->value['from'];?>
<?php }?></td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['number'];?>
</td>
		<td class="left"><?php echo $_smarty_tpl->tpl_vars['item']->value['log'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['clientip'];?>
</td><td><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</td>
	</tr>
    <?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
     <tr><td colspan="20"><p class="text-align">没有数据</p></td></tr>
    <?php } ?>
    </table>
	</form>
	<div class="page-bar">
		<table>
			<tr>
			<td class="w-100"><label><input type="checkbox" CKA="PRI"/>&nbsp;&nbsp;全选</label></td>
			<td class="page-list"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</td>
		</tr>
		</table>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>