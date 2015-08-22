<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 09:36:19
         compiled from "admin:member/member/items.html" */ ?>
<?php /*%%SmartyHeaderCode:185412285155d7d213a8caf6-69740258%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b694863c6d55b1a0d5ffb2f746a0f6df53f5715' => 
    array (
      0 => 'admin:member/member/items.html',
      1 => 1402664331,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '185412285155d7d213a8caf6-69740258',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7d213cac4f5_08512100',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7d213cac4f5_08512100')) {function content_55d7d213cac4f5_08512100($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_iplocal')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.iplocal.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
	<table width="100%" align="center" cellpadding="0" cellspacing="0" >
		<tr>
			<td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
			<th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
			<td align="right">
			<?php echo smarty_function_link(array('ctl'=>"member/member:so",'class'=>"button",'title'=>"搜索",'load'=>"mini:搜索会员",'width'=>"mini:500"),$_smarty_tpl);?>
 &nbsp; &nbsp;
			<?php echo smarty_function_link(array('ctl'=>"member/member:create",'class'=>"button",'title'=>"添加"),$_smarty_tpl);?>
</td>
			<td width="15"></td>
		</tr>
	</table>
</div>
<div class="page-data">	
	<form id="items-form">
    <table width="100%" border="0" cellspacing="0" class="table-data table left">
    <tr>
		<th class="w-100">UID</th><th>会员名</th><th>类型</th><th>邮箱</th><th>手机</th><th>金币</th>
		<th>注册IP</th><th>状态</th><th class="w-150">操作</th>
	</tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr>
		<td class="left"><label><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['uid'];?>
" name="uid[]" CK="PRI"/><?php echo $_smarty_tpl->tpl_vars['item']->value['uid'];?>
<label></td>
		<td class="left"><a ucard="@<?php echo $_smarty_tpl->tpl_vars['item']->value['uid'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['uname_v'];?>
</a></td>
		<td><b <?php if ($_smarty_tpl->tpl_vars['item']->value['from']!='member'){?>class="blue"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['from_title'];?>
</b></td>
		<td class="left"><?php echo $_smarty_tpl->tpl_vars['item']->value['mail'];?>
<?php if ($_smarty_tpl->tpl_vars['item']->value['verify_mail']){?><span class="red">[已验证]</span><?php }?></td>
		<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['mobile'])===null||$tmp==='' ? '--' : $tmp);?>
<?php if ($_smarty_tpl->tpl_vars['item']->value['verify_mobile']){?><span class="red">[已验证]</span><?php }?></td>
		<td><b class="red"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['gold'])===null||$tmp==='' ? '0' : $tmp);?>
</b></td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['regip'];?>
(<?php echo smarty_modifier_iplocal($_smarty_tpl->tpl_vars['item']->value['regip']);?>
)</td>
		<td><?php if ($_smarty_tpl->tpl_vars['item']->value['closed']=='3'){?>删除<?php }elseif($_smarty_tpl->tpl_vars['item']->value['closed']=='2'){?>锁定<?php }elseif($_smarty_tpl->tpl_vars['item']->value['closed']=='1'){?>禁言<?php }else{ ?>正常<?php }?></td>
		<td>
		<?php echo smarty_function_link(array('ctl'=>"member/member:manager",'args'=>$_smarty_tpl->tpl_vars['item']->value['uid'],'title'=>"管理",'class'=>"button",'target'=>"member"),$_smarty_tpl);?>
	
		<?php echo smarty_function_link(array('ctl'=>"member/member:gold",'args'=>$_smarty_tpl->tpl_vars['item']->value['uid'],'title'=>"充值金币",'load'=>"mini:充值金币",'width'=>"mini:500",'class'=>"button"),$_smarty_tpl);?>

		<?php echo smarty_function_link(array('ctl'=>"member/member:edit",'args'=>$_smarty_tpl->tpl_vars['item']->value['uid'],'title'=>"修改",'class'=>"button"),$_smarty_tpl);?>

		<?php echo smarty_function_link(array('ctl'=>"member/member:delete",'args'=>$_smarty_tpl->tpl_vars['item']->value['uid'],'act'=>"mini:删除",'confirm'=>"mini:确定要删除吗？",'title'=>"删除",'class'=>"button"),$_smarty_tpl);?>

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
			<td colspan="10" class="left"><?php echo smarty_function_link(array('ctl'=>"member/member:delete",'type'=>"button",'submit'=>"mini:#items-form",'confirm'=>"mini:确定要批量删除选中的内容吗?",'priv'=>"hide",'value'=>"批量删除"),$_smarty_tpl);?>
</td>
			<td class="page-list"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</td>
		</tr>
		</table>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>