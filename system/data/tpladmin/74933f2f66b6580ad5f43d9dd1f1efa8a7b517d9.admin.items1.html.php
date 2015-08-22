<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 14:16:59
         compiled from "admin:tenders/tenders/items1.html" */ ?>
<?php /*%%SmartyHeaderCode:107147021155d813db3b0eb8-36831581%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74933f2f66b6580ad5f43d9dd1f1efa8a7b517d9' => 
    array (
      0 => 'admin:tenders/tenders/items1.html',
      1 => 1420684189,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '107147021155d813db3b0eb8-36831581',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'items' => 0,
    'item' => 0,
    'tracking' => 0,
    'areaList' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d813db65d7c3_18097468',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d813db65d7c3_18097468')) {function content_55d813db65d7c3_18097468($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_format')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
	<table width="100%" align="center" cellpadding="0" cellspacing="0" >
		<tr>
			<td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
			<th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
			<td align="right"><?php echo smarty_function_link(array('ctl'=>"tenders/tenders:so",'class'=>"button",'title'=>"搜索"),$_smarty_tpl);?>
 &nbsp; &nbsp;<?php echo smarty_function_link(array('ctl'=>"tenders/tenders:create",'class'=>"button",'title'=>"添加"),$_smarty_tpl);?>
</td>
			<td width="15"></td>
		</tr>
	</table>
</div>
<div class="page-data">	
	<form id="items-form">
    <table width="1130" border="0" cellspacing="0" class="table-data table">
    <tr>
        <th class="w-100">ID</th>
        <th>标题</th>
        <th>地区</th>
       
        <th>称呼</th>
      
        <th>金块</th>
       
        <th>已看标数</th>
		<th>装企新反馈</th>
        <th>IP</th>
        <th>创建时间</th>
        <th>是否审核</th>
        <th>是否签单</th>
        <th class="w-150">操作</th></tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['tracking']->value[$_smarty_tpl->tpl_vars['item']->value['id']]){?>
    <tr><td><label><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" name="id[]" CK="PRI"/><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
<label></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</td>
                 <td width="100"><?php echo $_smarty_tpl->tpl_vars['areaList']->value[$_smarty_tpl->tpl_vars['item']->value['area_id']]['area_name'];?>
</td>
                 
                    <td width="40">
                        
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
                    <td width="30"><?php echo $_smarty_tpl->tpl_vars['item']->value['gold'];?>
                    </td>
                    <td width="30"><?php echo $_smarty_tpl->tpl_vars['item']->value['num2'];?>
                    </td>
                    <td width="40"><font style=" color: red;"><?php echo $_smarty_tpl->tpl_vars['tracking']->value[$_smarty_tpl->tpl_vars['item']->value['id']];?>
条新反馈</font>  </td>
                    <td width="60"><?php echo $_smarty_tpl->tpl_vars['item']->value['create_ip'];?>
</td>
                    <td width="100"><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</td>
                    <td><?php if ($_smarty_tpl->tpl_vars['item']->value['audit']){?>已审核<?php }else{ ?><span class="red">待审核</span><?php }?></td>         
                    <td><?php if (!$_smarty_tpl->tpl_vars['item']->value['status']){?>未签单<?php }else{ ?><span class="green">已签单</span><?php }?></td>               
                    <td>
                        <?php echo smarty_function_link(array('ctl'=>"tenders/look",'arg0'=>$_smarty_tpl->tpl_vars['item']->value['id'],'title'=>"分标管理",'class'=>"button"),$_smarty_tpl);?>

                        <?php echo smarty_function_link(array('ctl'=>"tenders/tenders:edit",'args'=>$_smarty_tpl->tpl_vars['item']->value['id'],'title'=>"修改",'class'=>"button"),$_smarty_tpl);?>

                        <?php echo smarty_function_link(array('ctl'=>"tenders/tenders:delete",'args'=>$_smarty_tpl->tpl_vars['item']->value['id'],'act'=>"mini:删除",'confirm'=>"mini:确定要删除吗？",'title'=>"删除",'class'=>"button"),$_smarty_tpl);?>
</td>
      </tr>
      <?php }?>
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
			<td colspan="10" class="left"><?php echo smarty_function_link(array('ctl'=>"tenders/tenders:delete",'type'=>"button",'submit'=>"mini:#items-form",'confirm'=>"mini:确定要批量删除选中的内容吗?",'priv'=>"hide",'value'=>"批量删除"),$_smarty_tpl);?>
</td>
			<td class="page-list"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</td>
		</tr>
		</table>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>