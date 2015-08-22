<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 09:36:07
         compiled from "admin:member/verify/items.html" */ ?>
<?php /*%%SmartyHeaderCode:75424281355d7d2072896c0-98455688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f351761bcea3267c9cf9ed4abbd721ded72faea' => 
    array (
      0 => 'admin:member/verify/items.html',
      1 => 1402664331,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '75424281355d7d2072896c0-98455688',
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
  'unifunc' => 'content_55d7d2074d8a87_35551023',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7d2074d8a87_35551023')) {function content_55d7d2074d8a87_35551023($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_format')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.format.php';
if (!is_callable('smarty_modifier_iplocal')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.iplocal.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
	<table width="100%" align="center" cellpadding="0" cellspacing="0" >
		<tr>
			<td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
			<th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
			<td align="right"><?php echo smarty_function_link(array('ctl'=>"member/verify:so",'load'=>"mini:搜索实名认证",'width'=>"mini:450",'class'=>"button",'title'=>"搜索"),$_smarty_tpl);?>
</td>
			<td width="15"></td>
		</tr>
	</table>
</div>
<div class="page-data">	
	<form id="items-form">
    <table width="100%" border="0" cellspacing="0" class="table-data table">
    <tr>
        <th class="w-100">用户</th><th>姓名/企业名</th><th>证件号</th>
        <th>证件图片</th><th>手机号</th><th>审核状态</th><th>通过时间</th><th>申请时间</th><th>申请时IP</th><th class="w-150">操作</th></tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr>
        <td><label><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['uid'];?>
" name="uid[]" CK="PRI"/><a ucard="@<?php echo $_smarty_tpl->tpl_vars['item']->value['uid'];?>
"><?php echo $_smarty_tpl->tpl_vars['member_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['uname'];?>
(UID:<?php echo $_smarty_tpl->tpl_vars['item']->value['uid'];?>
)</a><label></td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['id_number'];?>
</td><td><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['id_photo'];?>
" photo="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['id_photo'];?>
" class="wh-50" /></td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['mobile'];?>
</td>
        <td><?php if ($_smarty_tpl->tpl_vars['item']->value['verify']==2){?><a><b class="red" tips="<?php echo $_smarty_tpl->tpl_vars['item']->value['refuse'];?>
">拒绝</b></a><?php }elseif($_smarty_tpl->tpl_vars['item']->value['verify']==1){?><b class="blue">通过</b><?php }else{ ?><b>待审</b><?php }?></td>
        <td><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['verify_time']);?>
</td><td><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['request_time']);?>
</td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['request_ip'];?>
(<?php echo smarty_modifier_iplocal($_smarty_tpl->tpl_vars['item']->value['request_ip']);?>
)</td>
        <td>
            <?php echo smarty_function_link(array('ctl'=>"member/verify:edit",'args'=>$_smarty_tpl->tpl_vars['item']->value['uid'],'title'=>"修改",'class'=>"button"),$_smarty_tpl);?>

            <?php echo smarty_function_link(array('ctl'=>"member/verify:dopass",'args'=>$_smarty_tpl->tpl_vars['item']->value['uid'],'act'=>"mini:通过",'confirm'=>"mini:确定要审核通过吗?",'class'=>"button",'title'=>"通过"),$_smarty_tpl);?>

            <?php echo smarty_function_link(array('ctl'=>"member/verify:dorefuse",'args'=>$_smarty_tpl->tpl_vars['item']->value['uid'],'width'=>"mini:500",'load'=>"mini:拒绝会员实名认真申请？",'class'=>"button",'title'=>"拒绝"),$_smarty_tpl);?>

        </td>
     </tr>
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
			<td colspan="10" class="left">
                <?php echo smarty_function_link(array('ctl'=>"member/verify:dopass",'type'=>"button",'submit'=>"mini:#items-form",'confirm'=>"mini:确定要批量通过选中的内容吗?",'priv'=>"hide",'value'=>"批量通过"),$_smarty_tpl);?>

                <?php echo smarty_function_link(array('ctl'=>"member/verify:dorefuse",'type'=>"button",'load'=>"mini:批量拒绝选中的认证信息？",'width'=>"mini:500",'batch'=>"mini:PRI",'priv'=>"hide",'value'=>"批量拒绝"),$_smarty_tpl);?>

            </td>
			<td class="page-list"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</td>
		</tr>
		</table>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>