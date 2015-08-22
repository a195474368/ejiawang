<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:23:23
         compiled from "admin:home/site/create.html" */ ?>
<?php /*%%SmartyHeaderCode:43016128955d7eb2b6fe918-42349498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6059476e098e30be6fdafa981060c0bf779bbf03' => 
    array (
      0 => 'admin:home/site/create.html',
      1 => 1402664331,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '43016128955d7eb2b6fe918-42349498',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'detail' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7eb2b812a84_27850998',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7eb2b812a84_27850998')) {function content_55d7eb2b812a84_27850998($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_function_widget')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.widget.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
    <table width="100%" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
        <th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
        <td align="right"><?php echo smarty_function_link(array('ctl'=>"home/site:index",'priv'=>"hidden",'class'=>"button"),$_smarty_tpl);?>
</td>
        <td width="15"></td>
      </tr>
    </table>
</div>
<div class="page-data"><form action="?home/site-create.html" mini-form="site-form" method="post" ENCTYPE="multipart/form-data">
<table width="100%" border="0" cellspacing="0" class="table-data form">
<tr><th class="w-100">城市：</th><td>
<label>城市:<select name="data[city_id]" class="w-100"><?php echo smarty_function_widget(array('id'=>"data/city",'value'=>$_smarty_tpl->tpl_vars['detail']->value['city_id']),$_smarty_tpl);?>
</select></label>
<label>地区:<select name="data[area_id]" class="w-100"><?php echo smarty_function_widget(array('id'=>"data/area",'value'=>$_smarty_tpl->tpl_vars['detail']->value['area_id'],'city_id'=>$_smarty_tpl->tpl_vars['detail']->value['city_id']),$_smarty_tpl);?>
</select></label>
</td></tr>
<tr><th>小区：</th>
	<td>
		<input type="hidden" name="data[home_id]" value="0" id="case_home_id"/>
		<input type="text"  value="" id="case_home_name" class="input w-300" readonly="readonly"/>
        <?php echo smarty_function_link(array('ctl'=>"home/main:dialog",'select'=>"mini:#case_home_id,#case_home_name/N/选择小区",'class'=>"button"),$_smarty_tpl);?>

	</td>
</tr>
<tr><th><span class="red">*</span>标题：</th><td><input type="text" name="data[title]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
<tr><th>装修公司：</th>
    <td>
        <input type="hidden" name="data[company_id]" value="0" id="case_company_id"/>
        <input type="text"  value="" id="case_company_name" class="input w-300" readonly="readonly"/>
        <?php echo smarty_function_link(array('ctl'=>"company/company:dialog",'select'=>"mini:#case_company_id,#case_company_name/N/选择装修公司",'class'=>"button"),$_smarty_tpl);?>
    
    </td>
</tr>
<tr><th><span class="red">*</span>缩略图：</th><td><input type="file" name="data[face_pic]" class="input w-100" /></td></tr>
<tr><th>地址：</th><td><input type="text" name="data[addr]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['addr'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>

<tr><th>审核：</th><td>
	<label><input type="radio" name="data[audit]" checked="checked" value="1"/>是</label>&nbsp;&nbsp;
	<label><input type="radio" name="data[audit]" value="0"/>否</label></td></tr>
<tr><th>工地简介：</th><td><textarea name="data[intro]" class="textarea"><?php echo $_smarty_tpl->tpl_vars['detail']->value['intro'];?>
</textarea><br /></td></tr>

    <tr><th class="clear-th-bottom"></th><td class="clear-td-bottom" colspan="10"><input type="submit" class="bt-big" value="提交数据" /></td></tr>
</table>
</form></div>
<script type="text/javascript">
(function(K, $){
$("select[name='data[city_id]']").live('change', function(){
	var city_id = $(this).val();
	if(!city_id){return false;}
	$.getJSON("?data/area-city-"+city_id+".html", function(ret){
		if(ret.error){
			Widget.MsgBox.error(ret.message.join(","));
		}else if(ret.areas.length>0){
			var html = "";
			for(var i=0; i<ret.areas.length; i++){
				html += '<option value="'+ret.areas[i].area_id+'">'+ret.areas[i].area_name+'</option>';
			}
			$("select[name='data[area_id]']").html(html);		
		}else{
			$("select[name='data[area_id]']").html('<option value="">--</option>');
		}
	});
});
})(window.KT, window.jQuery);
</script>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>