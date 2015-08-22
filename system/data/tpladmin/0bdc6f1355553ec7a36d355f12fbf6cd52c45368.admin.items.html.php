<?php /* Smarty version Smarty-3.1.8, created on 2015-08-21 18:35:44
         compiled from "admin:company/company/items.html" */ ?>
<?php /*%%SmartyHeaderCode:116196639555d6ff00eb6272-18586745%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bdc6f1355553ec7a36d355f12fbf6cd52c45368' => 
    array (
      0 => 'admin:company/company/items.html',
      1 => 1402664331,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '116196639555d6ff00eb6272-18586745',
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
    'cityList' => 0,
    'areaList' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d6ff01214b00_45223354',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d6ff01214b00_45223354')) {function content_55d6ff01214b00_45223354($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
	<table width="100%" align="center" cellpadding="0" cellspacing="0" >
		<tr>
			<td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
			<th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
			<td align="right"><?php echo smarty_function_link(array('ctl'=>"company/company:so",'load'=>"mini:搜索",'class'=>"button",'title'=>"搜索"),$_smarty_tpl);?>
 &nbsp; &nbsp;<?php echo smarty_function_link(array('ctl'=>"company/company:create",'class'=>"button",'title'=>"添加"),$_smarty_tpl);?>
</td>
			<td width="15"></td>
		</tr>
	</table>
</div>
<div class="page-data">	
	<form id="items-form">
    <table width="100%" border="0" cellspacing="0" class="table-data table">
    <tr><th class="w-100">ID</th><th>公司名称</th><th>所属会员</th><th>城市</th><th>地区</th><th>公司简称</th><th>联系人</th><th>电话</th><th>保障金</th><th>评分</th><th>是否审核</th><th>排序</th><th class="w-150">操作</th></tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr>
        <td><label><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['company_id'];?>
" name="company_id[]" CK="PRI"/><?php echo $_smarty_tpl->tpl_vars['item']->value['company_id'];?>
<label></td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
        <td>
           
            <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['uid'])){?>
            <a ucard="@<?php echo $_smarty_tpl->tpl_vars['item']->value['uid'];?>
">  <?php echo $_smarty_tpl->tpl_vars['userList']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['uname'];?>
（ID:<?php echo $_smarty_tpl->tpl_vars['item']->value['uid'];?>
，金块数：<?php echo $_smarty_tpl->tpl_vars['userList']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['gold'];?>
）</a>
            <?php echo smarty_function_link(array('ctl'=>"member/member:gold",'args'=>$_smarty_tpl->tpl_vars['item']->value['uid'],'title'=>"充值金币",'load'=>"mini:充值金币",'width'=>"mini:500",'class'=>"button"),$_smarty_tpl);?>

            <?php }else{ ?>
            等待认领
            <?php }?>
        </td>        
        <td><?php echo $_smarty_tpl->tpl_vars['cityList']->value[$_smarty_tpl->tpl_vars['item']->value['city_id']]['city_name'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['areaList']->value[$_smarty_tpl->tpl_vars['item']->value['area_id']]['area_name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['sort_name'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['contact'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['tel'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['security'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['scores'];?>
</td><td>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['audit']==1){?>审核通过<?php }else{ ?>等待审核<?php }?>
        </td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['orderby'];?>
</td>
        <td class="right">
            <?php if ($_smarty_tpl->tpl_vars['item']->value['uid']){?><?php echo smarty_function_link(array('ctl'=>"member/member:manager",'args'=>$_smarty_tpl->tpl_vars['item']->value['uid'],'title'=>"管理",'class'=>"button",'target'=>"member"),$_smarty_tpl);?>
<?php }?>
            <?php echo smarty_function_link(array('ctl'=>"block/item:push",'arg0'=>'company','arg1'=>$_smarty_tpl->tpl_vars['item']->value['company_id'],'title'=>"推送",'load'=>"mini:推送装修公司",'class'=>"button"),$_smarty_tpl);?>

            <?php if (empty($_smarty_tpl->tpl_vars['item']->value['is_vip'])){?>
             <?php echo smarty_function_link(array('ctl'=>"company/company:vip",'act'=>"mini:设置为旗舰公司",'args'=>$_smarty_tpl->tpl_vars['item']->value['company_id'],'title'=>"设置为旗舰公司",'class'=>"button"),$_smarty_tpl);?>

             <?php }else{ ?>
              <?php echo smarty_function_link(array('ctl'=>"company/company:vip",'act'=>"mini:取消旗舰公司",'args'=>$_smarty_tpl->tpl_vars['item']->value['company_id'],'title'=>"取消旗舰公司",'class'=>"button"),$_smarty_tpl);?>

             <?php }?>            
            <?php echo smarty_function_link(array('ctl'=>"company/company:edit",'args'=>$_smarty_tpl->tpl_vars['item']->value['company_id'],'title'=>"修改",'class'=>"button"),$_smarty_tpl);?>
        
            <?php echo smarty_function_link(array('ctl'=>"company/company:delete",'args'=>$_smarty_tpl->tpl_vars['item']->value['company_id'],'act'=>"mini:删除",'confirm'=>"mini:确定要删除吗？",'title'=>"删除",'class'=>"button"),$_smarty_tpl);?>

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
                <?php echo smarty_function_link(array('ctl'=>"company/company:delete",'type'=>"button",'submit'=>"mini:#items-form",'confirm'=>"mini:确定要批量删除选中的内容吗?",'priv'=>"hide",'value'=>"批量删除"),$_smarty_tpl);?>

                <?php echo smarty_function_link(array('ctl'=>"block/item:batch",'args'=>'company','type'=>"button",'load'=>"mini:批量推荐装修公司",'batch'=>"mini:PRI",'priv'=>"hide",'value'=>"批量推荐"),$_smarty_tpl);?>

            </td>
			<td class="page-list"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</td>
		</tr>
		</table>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>