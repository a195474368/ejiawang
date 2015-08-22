<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 08:53:35
         compiled from "admin:designer/yuyue/items.html" */ ?>
<?php /*%%SmartyHeaderCode:158033346255d7c80f30afd9-42220706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c60a03f83640644a9750530a280ddc395edea1c' => 
    array (
      0 => 'admin:designer/yuyue/items.html',
      1 => 1402664331,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '158033346255d7c80f30afd9-42220706',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'items' => 0,
    'item' => 0,
    'userList' => 0,
    'designer_list' => 0,
    'company_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7c80fc333e6_93961873',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7c80fc333e6_93961873')) {function content_55d7c80fc333e6_93961873($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_format')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
	<table width="100%" align="center" cellpadding="0" cellspacing="0" >
		<tr>
			<td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
			<th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
			<td align="right"><?php echo smarty_function_link(array('ctl'=>"designer/yuyue:create",'class'=>"button",'title'=>"添加"),$_smarty_tpl);?>
&nbsp;&nbsp;&nbsp;<?php echo smarty_function_link(array('ctl'=>"designer/yuyue:so",'load'=>"mini:搜索内容",'width'=>"mini:500",'class'=>"button",'title'=>"搜索"),$_smarty_tpl);?>
</td>
			<td width="15"></td>
		</tr>
	</table>
</div>
<div class="page-data">	
	<form id="items-form">
    <table width="100%" border="0" cellspacing="0" class="table-data table">
    <tr><th class="w-100">ID</th>
        <th>用户</th>
        <th>设计师</th>
        <th>装修公司</th>
        <th>手机</th>
        <th>称呼</th>
        <th>内容</th>
        <th class="w-100">创建时间</th>
        <th>创建IP</th>
        <th class="w-150">操作</th>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr><td><label><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['yuyue_id'];?>
" name="yuyue_id[]" CK="PRI"/><?php echo $_smarty_tpl->tpl_vars['item']->value['yuyue_id'];?>
<label></td>
  <td>
    <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['uid'])){?>
    <?php echo $_smarty_tpl->tpl_vars['userList']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['uname'];?>

    <?php }else{ ?>
    游客
    <?php }?>
</td>
<td><a ucard="@<?php echo $_smarty_tpl->tpl_vars['item']->value['designer_id'];?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['designer_list']->value[$_smarty_tpl->tpl_vars['item']->value['designer_id']]['uname'])===null||$tmp==='' ? '--' : $tmp);?>
(UID:<?php echo $_smarty_tpl->tpl_vars['item']->value['designer_id'];?>
)</a></td>
<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['company_list']->value[$_smarty_tpl->tpl_vars['item']->value['company_id']]['name'])===null||$tmp==='' ? '--' : $tmp);?>
(ID:<?php echo $_smarty_tpl->tpl_vars['item']->value['company_id'];?>
)</td>
<td><?php echo $_smarty_tpl->tpl_vars['item']->value['mobile'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['item']->value['cantact'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
</td>
<td><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['item']->value['create_ip'];?>
</td>
<td><?php echo smarty_function_link(array('ctl'=>"designer/yuyue:edit",'args'=>$_smarty_tpl->tpl_vars['item']->value['yuyue_id'],'title'=>"修改",'class'=>"button"),$_smarty_tpl);?>
<?php echo smarty_function_link(array('ctl'=>"designer/yuyue:delete",'args'=>$_smarty_tpl->tpl_vars['item']->value['yuyue_id'],'act'=>"mini:删除",'confirm'=>"mini:确定要删除吗？",'title'=>"删除",'class'=>"button"),$_smarty_tpl);?>
</td></tr>
    <?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
     <tr><td colspan="20"><p class="text-align tip-notice">没有数据</p></td></tr>
    <?php } ?>
    </table>
	</form>
	<div class="page-bar">
		<table>
			<tr>
			<td class="w-100"><label><input type="checkbox" CKA="PRI"/>&nbsp;&nbsp;全选</label></td>
			<td colspan="10" class="left"><?php echo smarty_function_link(array('ctl'=>"designer/yuyue:delete",'type'=>"button",'submit'=>"mini:#items-form",'confirm'=>"mini:确定要批量删除选中的内容吗?",'priv'=>"hide",'value'=>"批量删除"),$_smarty_tpl);?>
</td>
			<td class="page-list"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</td>
		</tr>
		</table>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>