<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 09:04:37
         compiled from "admin:tenders/look/items.html" */ ?>
<?php /*%%SmartyHeaderCode:152183032955d7caa5a6e9b7-55757751%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bcea0304325d2e92b2577fd55f684079f6b8dfa' => 
    array (
      0 => 'admin:tenders/look/items.html',
      1 => 1404223384,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '152183032955d7caa5a6e9b7-55757751',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'tenders_id' => 0,
    'tenders' => 0,
    'items' => 0,
    'item' => 0,
    'company_list' => 0,
    'item2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7caa5ce5c07_02478455',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7caa5ce5c07_02478455')) {function content_55d7caa5ce5c07_02478455($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_format')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
	<table width="100%" align="center" cellpadding="0" cellspacing="0" >
		<tr>
			<td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
			<th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
			<td align="right"> &nbsp; &nbsp;<?php echo smarty_function_link(array('ctl'=>"tenders/look:create",'arg0'=>$_smarty_tpl->tpl_vars['tenders_id']->value,'load'=>"mini:分标",'height'=>"mini:600",'width'=>"mini:600",'class'=>"button",'title'=>"分标"),$_smarty_tpl);?>
</td>
			<td width="15"></td>
		</tr>
	</table>
</div>
<div class="page-data">	
        <h4 class="tip-notice" style="margin-bottom:10px;">招标：<?php echo $_smarty_tpl->tpl_vars['tenders']->value['title'];?>
 ---- 业主：<?php echo $_smarty_tpl->tpl_vars['tenders']->value['name'];?>
 --- 电话:<?php echo $_smarty_tpl->tpl_vars['tenders']->value['mobile'];?>
  </h4>
	<form id="items-form">
    <table width="100%" border="0" cellspacing="0" class="table-data table">
    <tr>
        <th>公司</th>
        <th>联系人</th>
        <th>电话</th>
        <th>IP</th>
        <th>创建时间</th>
        <th>是否签单</th>
        <th class="w-150">操作</th>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr>
        <td><b style=" color: red; font-size: 18px;"><?php echo $_smarty_tpl->tpl_vars['company_list']->value[$_smarty_tpl->tpl_vars['item']->value['company_id']]['name'];?>
</b></td>
            <td><?php echo $_smarty_tpl->tpl_vars['company_list']->value[$_smarty_tpl->tpl_vars['item']->value['company_id']]['contact'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['company_list']->value[$_smarty_tpl->tpl_vars['item']->value['company_id']]['tel'];?>
</td>            
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['create_ip'];?>
</td>
            <td><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</td>
            <td><?php if ($_smarty_tpl->tpl_vars['item']->value['is_signed']){?>签单<?php }else{ ?>未签单<?php }?></td>
            <td>
                <?php if (!$_smarty_tpl->tpl_vars['tenders']->value['status']){?>
                <?php if (!$_smarty_tpl->tpl_vars['item']->value['is_signed']){?>
                <?php echo smarty_function_link(array('ctl'=>"tenders/look:update",'act'=>"mini:删除",'arg0'=>$_smarty_tpl->tpl_vars['item']->value['look_id'],'class'=>"button",'title'=>"设为签单"),$_smarty_tpl);?>

                <?php }?>
                <?php }?>
                <?php echo smarty_function_link(array('ctl'=>"tenders/tracking:create",'load'=>"mini:跟踪反馈",'arg0'=>$_smarty_tpl->tpl_vars['item']->value['look_id'],'class'=>"button",'title'=>"跟踪反馈"),$_smarty_tpl);?>
                
            </td>
    </tr>
    <tr>
        <td style="padding: 5px; background: #ffffff; " colspan="7">
             <table width="100%" border="0" cellspacing="0" class="table-data table">
            <tr><th>装修公司反馈</th><th>IP</th><th>跟踪日期</th><th>客服回复</th><th>回复时间</th><th class="w-150">操作</th></tr>
            <?php  $_smarty_tpl->tpl_vars['item2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['tracking']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item2']->key => $_smarty_tpl->tpl_vars['item2']->value){
$_smarty_tpl->tpl_vars['item2']->_loop = true;
?>
                <td><?php echo $_smarty_tpl->tpl_vars['item2']->value['content'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item2']->value['create_ip'];?>
</td>
                <td><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item2']->value['dateline']);?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item2']->value['reply'];?>
</td>
                <td><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item2']->value['reply_time']);?>
</td>
                <td><?php echo smarty_function_link(array('ctl'=>"tenders/tracking:edit",'load'=>"mini:回复",'args'=>$_smarty_tpl->tpl_vars['item2']->value['tracking_id'],'title'=>"回复",'class'=>"button"),$_smarty_tpl);?>
</td>
            </tr>
            <?php }
if (!$_smarty_tpl->tpl_vars['item2']->_loop) {
?>
             <tr><td colspan="20"><p class="text-align tip-notice">没有数据</p></td></tr>
            <?php } ?>
            </table>
        </td>        
    </tr>
    <?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
     <tr><td colspan="20"><p class="text-align tip-notice">没有数据</p></td></tr>
    <?php } ?>
    </table>
	</form>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>