<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:22:19
         compiled from "admin:member/member/dialog.html" */ ?>
<?php /*%%SmartyHeaderCode:114483338855d7eaebc2dd61-83815556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '250c93d14851080d839416851957c70885cc09ac' => 
    array (
      0 => 'admin:member/member/dialog.html',
      1 => 1402664331,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '114483338855d7eaebc2dd61-83815556',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7eaebe5ace1_71309534',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7eaebe5ace1_71309534')) {function content_55d7eaebe5ace1_71309534($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-data">	
	<form id="items-form">
    <table width="100%" border="0" cellspacing="0" class="table-data table left">
    <tr>
        <th>会员名(UID)</th><th>类型</th><th>邮箱</th><th>手机</th><th>金币</th>
        <th><?php echo smarty_function_link(array('ctl'=>"member/member:so",'arg0'=>"dialog",'arg1'=>$_smarty_tpl->tpl_vars['pager']->value['multi'],'arg2'=>$_smarty_tpl->tpl_vars['pager']->value['from'],'class'=>"button",'title'=>"搜索",'load'=>"mini:搜索会员",'width'=>"mini:500"),$_smarty_tpl);?>
</th>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr>
		<td>		
		<?php if ($_smarty_tpl->tpl_vars['pager']->value['multi']=='Y'){?>
		<label><input type="checkbox" name="itemId[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['uid'];?>
" data="{'itemId':'<?php echo $_smarty_tpl->tpl_vars['item']->value['uid'];?>
','title':'<?php echo $_smarty_tpl->tpl_vars['item']->value['uname'];?>
'}" CK="PRI"/><?php echo $_smarty_tpl->tpl_vars['item']->value['uname_v'];?>
(UID:<?php echo $_smarty_tpl->tpl_vars['item']->value['uid'];?>
)</label>
		<?php }else{ ?>
		<label><input type="radio" name="itemId" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['uid'];?>
" data="{'itemId':'<?php echo $_smarty_tpl->tpl_vars['item']->value['uid'];?>
','title':'<?php echo $_smarty_tpl->tpl_vars['item']->value['uname'];?>
'}" CK="PRI"/><?php echo $_smarty_tpl->tpl_vars['item']->value['uname'];?>
(UID:<?php echo $_smarty_tpl->tpl_vars['item']->value['uid'];?>
)</label>
		<?php }?>
        </td>
		<td><b <?php if ($_smarty_tpl->tpl_vars['item']->value['from']!='member'){?>class="blue"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['from_title'];?>
</b></td>
		<td><?php echo $_smarty_tpl->tpl_vars['item']->value['mail'];?>
<?php if ($_smarty_tpl->tpl_vars['item']->value['verify_mail']){?><span class="red">[已验证]</span><?php }?></td>
		<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['mobile'])===null||$tmp==='' ? '--' : $tmp);?>
<?php if ($_smarty_tpl->tpl_vars['item']->value['verify_mobile']){?><span class="red">[已验证]</span><?php }?></td>
		<td><b class="red"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['gold'])===null||$tmp==='' ? '0' : $tmp);?>
</b></td>
		<td><?php if ($_smarty_tpl->tpl_vars['item']->value['closed']=='3'){?>删除<?php }elseif($_smarty_tpl->tpl_vars['item']->value['closed']=='2'){?>锁定<?php }elseif($_smarty_tpl->tpl_vars['item']->value['closed']=='1'){?>禁言<?php }else{ ?>正常<?php }?></td>
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
			<td class="w-100"><?php if ($_smarty_tpl->tpl_vars['pager']->value['multi']=='Y'){?><label><input type="checkbox" CKA="PRI"/>&nbsp;&nbsp;全选</label><?php }?></td>
			<td class="page-list"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</td>
		</tr>
		</table>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>