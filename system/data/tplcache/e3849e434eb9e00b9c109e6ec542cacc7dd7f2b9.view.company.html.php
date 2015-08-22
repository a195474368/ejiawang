<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 14:25:19
         compiled from "view:select/company.html" */ ?>
<?php /*%%SmartyHeaderCode:112541478255d815cf55af38-96056330%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3849e434eb9e00b9c109e6ec542cacc7dd7f2b9' => 
    array (
      0 => 'view:select/company.html',
      1 => 1402664330,
      2 => 'view',
    ),
  ),
  'nocache_hash' => '112541478255d815cf55af38-96056330',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'city_list' => 0,
    'items' => 0,
    'item' => 0,
    'area_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d815cf747381_22718995',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d815cf747381_22718995')) {function content_55d815cf747381_22718995($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_function_widget')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.widget.php';
?><?php $_smarty_tpl->tpl_vars["min_ititle"] = new Smarty_variable("立即预约", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("block/mini-header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<form action="<?php echo smarty_function_link(array('ctl'=>'ucenter/select:company'),$_smarty_tpl);?>
" method="post" id="so-home-form">
<input type="hidden" name="multi" value="<?php echo $_smarty_tpl->tpl_vars['pager']->value['multi'];?>
" />
<div style="margin:10px 5px;">
    <?php if ($_smarty_tpl->tpl_vars['pager']->value['city_id']){?>
    <input type="hidden" name="city_id" value="<?php echo $_smarty_tpl->tpl_vars['pager']->value['city_id'];?>
" />
    <label><b>城市：</b><?php echo $_smarty_tpl->tpl_vars['city_list']->value[$_smarty_tpl->tpl_vars['pager']->value['city_id']]['city_name'];?>
</label>&nbsp;&nbsp;&nbsp;
    <?php }else{ ?>
    <label><b>城市：</b><select name="SO[city_id]" class="select w-100"><option value="">-全部-</option><?php echo smarty_function_widget(array('id'=>"data/city",'value'=>($_smarty_tpl->tpl_vars['pager']->value['SO']['city_id'])),$_smarty_tpl);?>
</select></label>&nbsp;&nbsp;&nbsp;
    <?php }?>
    <label><b>地区：</b><select name="SO[area_id]" class="select w-100"><option value="">-全部-</option><?php if ($_smarty_tpl->tpl_vars['pager']->value['city_id']){?><?php echo smarty_function_widget(array('id'=>"data/area",'city_id'=>$_smarty_tpl->tpl_vars['pager']->value['city_id'],'value'=>($_smarty_tpl->tpl_vars['pager']->value['SO']['area_id'])),$_smarty_tpl);?>
<?php }elseif($_smarty_tpl->tpl_vars['pager']->value['SO']['city_id']){?><?php echo smarty_function_widget(array('id'=>"data/area",'city_id'=>$_smarty_tpl->tpl_vars['pager']->value['SO']['city_id'],'value'=>($_smarty_tpl->tpl_vars['pager']->value['SO']['area_id'])),$_smarty_tpl);?>
<?php }?></select></label>&nbsp;&nbsp;&nbsp;
    <label><b>标题：</b><input type="text" name="SO[name]" value="<?php echo $_smarty_tpl->tpl_vars['pager']->value['SO']['name'];?>
" class="input w-150"/></label>&nbsp;&nbsp;&nbsp;
    <label><input type="submit" class="yzmbtn" value="搜索小区"/></label>
</div>
</form>
<table width="100%" border="0" cellspacing="0" class="list">
<tr><th>装修公司</th><th class="w-100">城市</th><th class="w-100">地区</th></tr>
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
</label>
    <?php }else{ ?>
    <label><input type="radio" name="itemId" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['company_id'];?>
" data="{'itemId':'<?php echo $_smarty_tpl->tpl_vars['item']->value['company_id'];?>
','title':'<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
'}" CK="PRI"/><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</label>
    <?php }?>
    </td>
    <td><?php echo $_smarty_tpl->tpl_vars['city_list']->value[$_smarty_tpl->tpl_vars['item']->value['city_id']]['city_name'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['area_list']->value[$_smarty_tpl->tpl_vars['item']->value['area_id']]['area_name'];?>
</td>
</tr>
<?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
 <tr><td colspan="20"><p class="text-align tip-notice">没有数据</p></td></tr>
<?php } ?>
<tr>
    <td  colspan="20" class="page-list"><div class="page"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</div></td>
</tr>
</table>
<script type="text/javascript">
<?php if (empty($_smarty_tpl->tpl_vars['pager']->value['city_id'])){?>
(function(K, $){
$("select[name='SO[city_id]']").live('change', function(){
	var city_id = $(this).val();
	if(!city_id){return false;}
    var link = "<?php echo smarty_function_link(array('ctl'=>'magic:area','arg0'=>'#city_id#','http'=>true),$_smarty_tpl);?>
"
	$.getJSON(link.replace("#city_id#", city_id), function(ret){
		if(ret.error){
			Widget.MsgBox.error(ret.message.join(","));
		}else if(ret.areas.length>0){
			var html = "<option value=''>-全部-</option>";
			for(var i=0; i<ret.areas.length; i++){
				html += '<option value="'+ret.areas[i].area_id+'">'+ret.areas[i].area_name+'</option>';
			}
			$("select[name='SO[area_id]']").html(html);		
		}else{
			$("select[name='SO[area_id]']").html('<option value="">--</option>');
		}
	});
});
<?php }?>
})(window.KT, window.jQuery);
</script>
<?php echo $_smarty_tpl->getSubTemplate ("block/mini-footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>