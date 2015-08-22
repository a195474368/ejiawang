<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 09:45:20
         compiled from "admin:company/company/dialog.html" */ ?>
<?php /*%%SmartyHeaderCode:26371376555d7d430f1f519-66420000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32af85e2313809a2b05a0e3d447bf9c69af560cd' => 
    array (
      0 => 'admin:company/company/dialog.html',
      1 => 1420686656,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '26371376555d7d430f1f519-66420000',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'items' => 0,
    'item' => 0,
    'userList' => 0,
    'cityList' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7d431160de0_36717601',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7d431160de0_36717601')) {function content_55d7d431160de0_36717601($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-data">	
	<form id="items-form">
    <table width="100%" border="0" cellspacing="0" class="table-data table">
    <tr>
        <th>公司名称(ID)
        <?php echo smarty_function_link(array('ctl'=>"company/company:so",'arg0'=>"dialog",'arg1'=>$_smarty_tpl->tpl_vars['pager']->value['multi'],'load'=>"mini:搜索装修公司",'width'=>"mini:500",'class'=>"button",'title'=>"搜索"),$_smarty_tpl);?>
</th>
    <th>所属会员</th><th>城市</th><th>电话</th>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr>
        <td>
		<?php if ($_smarty_tpl->tpl_vars['pager']->value['multi']=='Y'){?>
		<label><input type="checkbox" name="itemId[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['company_id'];?>
" data="{'itemId':'<?php echo $_smarty_tpl->tpl_vars['item']->value['company_id'];?>
','title':'<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
'}" CK="PRI"/><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
(ID:<?php echo $_smarty_tpl->tpl_vars['item']->value['company_id'];?>
)</label>
		<?php }else{ ?>
		<label><input type="radio" name="itemId" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['company_id'];?>
" data="{'itemId':'<?php echo $_smarty_tpl->tpl_vars['item']->value['company_id'];?>
','title':'<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
'}" CK="PRI"/><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
(ID:<?php echo $_smarty_tpl->tpl_vars['item']->value['company_id'];?>
)</label>
		<?php }?>
        </td>
        <td><?php if (!empty($_smarty_tpl->tpl_vars['item']->value['uid'])){?><a ucard="@<?php echo $_smarty_tpl->tpl_vars['item']->value['uid'];?>
"><?php echo $_smarty_tpl->tpl_vars['userList']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['uname'];?>
（ID:<?php echo $_smarty_tpl->tpl_vars['item']->value['uid'];?>
，金块数:<?php echo $_smarty_tpl->tpl_vars['userList']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['gold'];?>
)</a><?php }else{ ?>等待认领<?php }?></td>                    
        <td><?php echo $_smarty_tpl->tpl_vars['cityList']->value[$_smarty_tpl->tpl_vars['item']->value['city_id']]['city_name'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['tel'];?>
</td>
        <td><?php if ($_smarty_tpl->tpl_vars['item']->value['audit']){?>通过<?php }else{ ?><span class="red">待审</b><?php }?></td>
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
			    <td class="w-100"><?php if ($_smarty_tpl->tpl_vars['pager']->value['multi']=='Y'){?><label><input type="checkbox" CKA="PRI"/>&nbsp;&nbsp;全选</label><?php }?></td>
			    <td class="page-list"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</td>
		    </tr>
		</table>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>