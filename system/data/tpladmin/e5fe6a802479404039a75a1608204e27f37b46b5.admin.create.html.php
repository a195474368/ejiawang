<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:16:04
         compiled from "admin:company/company/create.html" */ ?>
<?php /*%%SmartyHeaderCode:49526585255d7e9743b7120-76009908%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5fe6a802479404039a75a1608204e27f37b46b5' => 
    array (
      0 => 'admin:company/company/create.html',
      1 => 1439456840,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '49526585255d7e9743b7120-76009908',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'detail' => 0,
    'detailex' => 0,
    'OATOKEN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7e9745d7c26_66599403',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7e9745d7c26_66599403')) {function content_55d7e9745d7c26_66599403($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_function_widget')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.widget.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
    <table width="100%" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
        <th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
        <td align="right"><?php echo smarty_function_link(array('ctl'=>"company/company",'priv'=>"hidden",'class'=>"button"),$_smarty_tpl);?>
</td>
        <td width="15"></td>
      </tr>
    </table>
</div>
<div class="page-data">
<form action="?company/company-create.html" mini-form="decorate-form" method="post" ENCTYPE="multipart/form-data">
<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
    <li><a href="#table-info">基本信息</a></li>
    <li><a href="#table-attr">公司属性</a></li>
</ul>
<table width="100%" border="0" cellspacing="0"   id="table-info" class="table-data form">
<tr><th>公司名称：</th><td><input type="text" name="data[name]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['name'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
<tr>
    <th>所属会员：</th>
    <td>
        <input type="hidden" name="data[uid]" value="0" id="company_member_id" />
        <input type="text" value="" id="company_member_uname" class="input w-300"/>
        <?php echo smarty_function_link(array('ctl'=>"member/member:dialog",'arg0'=>"company",'select'=>"mini:#company_member_id,#company_member_uname/N/选择用户",'title'=>"选择用户",'class'=>"button"),$_smarty_tpl);?>

    </td>
</tr>
<tr><th class="w-100">城市：</th><td>
<label>城市:<select name="data[city_id]" class="w-100"><?php echo smarty_function_widget(array('id'=>"data/city",'value'=>$_smarty_tpl->tpl_vars['detail']->value['city_id']),$_smarty_tpl);?>
</select></label>
<label>地区:<select name="data[area_id]" class="w-100"><?php echo smarty_function_widget(array('id'=>"data/area",'value'=>$_smarty_tpl->tpl_vars['detail']->value['area_id'],'city_id'=>$_smarty_tpl->tpl_vars['detail']->value['city_id']),$_smarty_tpl);?>
</select></label>
</td></tr>
<tr><th>公司简称：</th><td><input type="text" name="data[sort_name]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['sort_name'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
<tr><th>服务口号：</th><td><input type="text" name="data[slogan]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['slogan'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
<tr><th>长方形LOGO：</th><td><input type="file" name="data[logo]" class="input w-300" /></td></tr>
<tr><th>正方形LOGO：</th><td><input type="file" name="data[square_logo]" class="input w-300" /></td></tr>
<tr><th>联系人：</th><td><input type="text" name="data[contact]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['contact'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
<tr><th>电话：</th><td><input type="text" name="data[tel]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['tel'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
<tr><th>手机：</th><td><input type="text" name="data[mobile]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['mobile'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
<tr><th>QQ：</th><td><input type="text" name="data[qq]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['qq'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>

<tr><th>地址：</th><td><input type="text" name="data[addr]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['addr'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
<tr><th>保障金：</th><td><input type="text" name="data[security]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['security'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/></td></tr>
<tr><th>评分：</th><td><input type="text" name="data[scores]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['scores'])===null||$tmp==='' ? '50' : $tmp);?>
" class="input w-100"/></td></tr>
<tr><th>公司介绍：</th><td><textarea name="ex[intro]" kindeditor="full" style="width:500px;height:250px;"><?php echo $_smarty_tpl->tpl_vars['detailex']->value['intro'];?>
</textarea><br /></td></tr>
<tr><th>是否审核</th><td>
<ul class="group-list">
    <li><label><input type="radio" name="data[audit]" value="0" >待审核</label></li>
    <li><label><input type="radio" name="data[audit]" value="1" checked="checked">已审核</label></li>
    <div class="clear-both"></div>
</ul>
</td></tr>
<tr><th>排序：</th><td><input type="text" name="data[orderby]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['orderby'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/></td></tr>
<tr><th>百度地图：</th>
	<td>
		<label>经度:<input type="text" name="data[lng]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['lng'])===null||$tmp==='' ? '' : $tmp);?>
" id="Bmap_marker_lng" class="input w-100"/></label>
		<label>纬度:<input type="text" name="data[lat]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['lat'])===null||$tmp==='' ? '' : $tmp);?>
" id="Bmap_marker_lat" class="input w-100"/></label>	
		<span class="tip-comment">使用百度地图经纬度<a map-marker="#Bmap_marker_lng,#Bmap_marker_lat" ><b>拾取工具</b></a></span>
	</td>
</tr>
    <tr><th class="clear-th-bottom"></th><td class="clear-td-bottom" colspan="10"><input type="submit" class="bt-big" value="提交数据" /></td></tr>
</table>
        
<table width="100%" border="0" cellspacing="0" class="table-data form" id="table-attr" style="display:none;">
<?php echo smarty_function_widget(array('id'=>"attr/form",'from'=>"zx:company"),$_smarty_tpl);?>

<tr><th class="clear-th-bottom"></th><td class="clear-td-bottom" colspan="10"><input type="submit" class="bt-big" value="提交数据" /></td></tr>
</table>    
</form></div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/widget.bmap.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/kindeditor/kindeditor.js"></script>
<script type="text/javascript">
(function(K, $){
$("div.page-data").tabs();
var editor = KindEditor.create('textarea[kindeditor]', {uploadJson : '?magic/upload-editor.html', extraFileUploadParams:{OATOKEN:"<?php echo $_smarty_tpl->tpl_vars['OATOKEN']->value;?>
"}});
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