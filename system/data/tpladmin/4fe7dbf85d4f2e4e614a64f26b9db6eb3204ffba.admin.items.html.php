<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 09:33:26
         compiled from "admin:designer/designer/items.html" */ ?>
<?php /*%%SmartyHeaderCode:143105727255d7d166bfb7a2-08030947%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fe7dbf85d4f2e4e614a64f26b9db6eb3204ffba' => 
    array (
      0 => 'admin:designer/designer/items.html',
      1 => 1402664331,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '143105727255d7d166bfb7a2-08030947',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'items' => 0,
    'item' => 0,
    'company_list' => 0,
    'city_list' => 0,
    'area_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7d166e4c1e7_12889531',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7d166e4c1e7_12889531')) {function content_55d7d166e4c1e7_12889531($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
	<table width="100%" align="center" cellpadding="0" cellspacing="0" >
		<tr>
			<td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
			<th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
			<td align="right">
                <?php echo smarty_function_link(array('ctl'=>"designer/designer:so",'load'=>"mini:搜索设计师",'width'=>"mini:500",'class'=>"button",'title'=>"搜索"),$_smarty_tpl);?>
 &nbsp; &nbsp;
                <?php echo smarty_function_link(array('ctl'=>"designer/designer:create",'class'=>"button",'title'=>"添加"),$_smarty_tpl);?>

            </td>
			<td width="15"></td>
		</tr>
	</table>
</div>
<div class="page-data">	
	<form id="items-form">
    <table width="100%" border="0" cellspacing="0" class="table-data table">
    <tr><th class="w-100">ID</th><th>用户名</th><th>装修公司</th><th>城市</th><th>地区</th><th>毕业院校</th><th>QQ</th><th>案例数</th><th>审核</th><th>排序</th><th class="w-150">操作</th></tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr>
        <td><label><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['uid'];?>
" name="uid[]" CK="PRI"/><?php echo $_smarty_tpl->tpl_vars['item']->value['uid'];?>
<label></td> 
        <td>                        
            <a ucard="@<?php echo $_smarty_tpl->tpl_vars['item']->value['uid'];?>
">  <?php echo $_smarty_tpl->tpl_vars['item']->value['uname'];?>
（ID:<?php echo $_smarty_tpl->tpl_vars['item']->value['uid'];?>
，金块数：<?php echo $_smarty_tpl->tpl_vars['item']->value['gold'];?>
)</a><?php echo smarty_function_link(array('ctl'=>"member/member:gold",'args'=>$_smarty_tpl->tpl_vars['item']->value['uid'],'title'=>"充值金币",'load'=>"mini:充值金币",'width'=>"mini:500",'class'=>"button"),$_smarty_tpl);?>

        </td>
        <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['company_list']->value[$_smarty_tpl->tpl_vars['item']->value['company_id']]['name'])===null||$tmp==='' ? '--' : $tmp);?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['city_list']->value[$_smarty_tpl->tpl_vars['item']->value['city_id']]['city_name'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['area_list']->value[$_smarty_tpl->tpl_vars['item']->value['area_id']]['area_name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['school'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['qq'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['case_num'];?>
</td><td><?php if ($_smarty_tpl->tpl_vars['item']->value['audit']){?>已审核<?php }else{ ?><span class="red">待审核</span><?php }?></td>                    
        <td> <?php echo $_smarty_tpl->tpl_vars['item']->value['orderby'];?>
</td>
         <td>
            <?php echo smarty_function_link(array('ctl'=>"member/member:manager",'args'=>$_smarty_tpl->tpl_vars['item']->value['uid'],'title'=>"管理",'class'=>"button",'target'=>"member_manager"),$_smarty_tpl);?>

            <?php echo smarty_function_link(array('ctl'=>"block/item:push",'arg0'=>'designer','arg1'=>$_smarty_tpl->tpl_vars['item']->value['uid'],'title'=>"推送",'load'=>"mini:推送设计师",'class'=>"button"),$_smarty_tpl);?>

            <?php echo smarty_function_link(array('ctl'=>"designer/designer:edit",'args'=>$_smarty_tpl->tpl_vars['item']->value['uid'],'title'=>"修改",'class'=>"button"),$_smarty_tpl);?>

            <?php echo smarty_function_link(array('ctl'=>"designer/designer:delete",'args'=>$_smarty_tpl->tpl_vars['item']->value['uid'],'act'=>"mini:删除",'confirm'=>"mini:确定要删除吗？",'title'=>"删除",'class'=>"button"),$_smarty_tpl);?>

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
                <?php echo smarty_function_link(array('ctl'=>"designer/designer:delete",'type'=>"button",'submit'=>"mini:#items-form",'confirm'=>"mini:确定要批量删除选中的内容吗?",'priv'=>"hide",'value'=>"批量删除"),$_smarty_tpl);?>

                <?php echo smarty_function_link(array('ctl'=>"block/item:batch",'args'=>'designer','type'=>"button",'load'=>"mini:批量推荐设计师",'batch'=>"mini:PRI",'priv'=>"hide",'value'=>"批量推荐"),$_smarty_tpl);?>

                <?php echo smarty_function_link(array('ctl'=>"designer/designer:doaudit",'type'=>"button",'submit'=>"mini:#items-form",'confirm'=>"mini:确定要批量审核选中的内容吗?",'priv'=>"hide",'value'=>"批量审核"),$_smarty_tpl);?>

            </td>
			<td class="page-list"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</td>
		</tr>
		</table>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>