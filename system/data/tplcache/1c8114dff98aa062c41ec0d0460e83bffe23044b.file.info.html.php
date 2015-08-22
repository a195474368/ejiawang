<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:22:11
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/ucenter/company/info.html" */ ?>
<?php /*%%SmartyHeaderCode:153535322355d7eae3df88e7-37004993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c8114dff98aa062c41ec0d0460e83bffe23044b' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/ucenter/company/info.html',
      1 => 1402664332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153535322355d7eae3df88e7-37004993',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company' => 0,
    'pager' => 0,
    'OTOKEN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7eae403ffa0_11525239',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7eae403ffa0_11525239')) {function content_55d7eae403ffa0_11525239($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_function_widget')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.widget.php';
?><?php echo $_smarty_tpl->getSubTemplate ("ucenter/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="base_info"><b>基本信息</b>（<span class="red">*</span>必填项)</div>
<h4 class="tips">只有添加了公司的注册信息才能操作公司的其他的类目！</h4>
<form  action="<?php echo smarty_function_link(array('ctl'=>'ucenter/company:info','http'=>true),$_smarty_tpl);?>
" mini-form="company" method="post" >
<table cellspacing="0" cellpadding="0" class="form">
    <tr><th><span class="red">*</span>公司名称：</th><td><input type="text" name="data[name]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['company']->value['name'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
  
    <tr>
        <th class="w-100"><span class="red">*</span>城市：</th>
        <td>
            <label>城市:<select name="data[city_id]" class="w-100"><?php echo smarty_function_widget(array('id'=>"data/city",'value'=>$_smarty_tpl->tpl_vars['company']->value['city_id']),$_smarty_tpl);?>
</select></label>
            <label>地区:<select name="data[area_id]" class="w-100"><?php echo smarty_function_widget(array('id'=>"data/area",'value'=>$_smarty_tpl->tpl_vars['company']->value['area_id'],'city_id'=>$_smarty_tpl->tpl_vars['company']->value['city_id']),$_smarty_tpl);?>
</select></label>
        </td>
    </tr>
    <tr><th><span class="red">*</span>公司简称：</th><td><input type="text" name="data[sort_name]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['company']->value['sort_name'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
    <tr><th><span class="red">*</span>服务口号：</th><td><input type="text" name="data[slogan]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['company']->value['slogan'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
    <tr><th><span class="red">*</span>长方形LOGO：</th><td><input type="file" name="data[logo]" class="input w-300" /></td></tr>
    <tr><th><span class="red">*</span>正方形LOGO：</th><td><input type="file" name="data[square_logo]" class="input w-300" /></td></tr>
    <tr><th><span class="red">*</span>联系人：</th><td><input type="text" name="data[contact]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['company']->value['contact'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
    <tr><th><span class="red">*</span>电话：</th><td><input type="text" name="data[tel]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['company']->value['tel'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
        <tr><th>手机：</th><td><input type="text" name="data[mobile]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['company']->value['mobile'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-200"/>手机建议填写：用于接收预约短信通知</td></tr>
	<tr><th>QQ：</th><td><input type="text" name="data[qq]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['company']->value['qq'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
    <tr><th>地图坐标：</th>
		<td>
			<label>经度:<input type="text" name="data[lng]" value="<?php echo $_smarty_tpl->tpl_vars['company']->value['lng'];?>
" id="Bmap_marker_lng" class="input w-100"/></label>
			<label>纬度:<input type="text" name="data[lat]" value="<?php echo $_smarty_tpl->tpl_vars['company']->value['lat'];?>
" id="Bmap_marker_lat" class="input w-100"/></label>	
			<span class="tip-comment">使用百度地图经纬度<a map-marker="#Bmap_marker_lng,#Bmap_marker_lat" class="yzmbtn"><b>拾取工具</b></a></span>
		</td>
	</tr>  
	<tr><th><span class="red">*</span>地址：</th><td><input type="text" name="data[addr]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['company']->value['addr'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
    <?php echo smarty_function_widget(array('id'=>"attr/form",'from'=>"zx:company"),$_smarty_tpl);?>
    
    <tr><th>公司介绍：</th><td><textarea name="ex[intro]" kindeditor="simple" style="width:550px;height:350px;"></textarea></td></tr>
    <tr><th></th><td><input type="submit" value="保存" class="set_btn" /></td></tr>
</table>
</form>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/widget.bmap.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/kindeditor/kindeditor.js"></script>
<script type="text/javascript">
(function(K, $){
var editor = KindEditor.create('textarea[kindeditor]', {uploadJson : '<?php echo smarty_function_link(array('ctl'=>"magic:editorupload",'http'=>true),$_smarty_tpl);?>
', extraFileUploadParams:{OTOKEN:"<?php echo $_smarty_tpl->tpl_vars['OTOKEN']->value;?>
"}});
$("select[name='data[city_id]']").live('change', function(){
	var city_id = $(this).val();
	if(!city_id){return false;}
    var link = "<?php echo smarty_function_link(array('ctl'=>'magic:area','arg0'=>'#city_id#','http'=>true),$_smarty_tpl);?>
"
	$.getJSON(link.replace("#city_id#", city_id), function(ret){
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
$("[map-marker]").die("click").live("click", function(e){
	e.stopPropagation();e.preventDefault();
	var input = $(this).attr("map-marker").split(",");
	var point = {lng:"", lat:""};
	if(input.length < 2){
		var d = $(input[0]).val().split(",");
		point.lng = d[0];
		point.lat = d[1];
	}else{
		point.lng = $(input[0]).val();
		point.lat = $(input[1]).val();
	}
	Widget.BMap.Marker(point, function(ret){
		if(input.length < 2){
			$(input[0]).val(ret.lng+","+ret.lat);
		}else{
			$(input[0]).val(ret.lng);
			$(input[1]).val(ret.lat);
		}
	});
});
})(window.KT, window.jQuery);
</script>
<?php echo $_smarty_tpl->getSubTemplate ("ucenter/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>