<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 10:20:27
         compiled from "admin:tenders/tenders/create.html" */ ?>
<?php /*%%SmartyHeaderCode:137620817455d7dc6bbdaac9-06204861%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe77a488de312c2467efd9bcf4509c4ab08ab71e' => 
    array (
      0 => 'admin:tenders/tenders/create.html',
      1 => 1402664331,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '137620817455d7dc6bbdaac9-06204861',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'detail' => 0,
    'type' => 0,
    'setting' => 0,
    'key' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7dc6bf31c57_20903834',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7dc6bf31c57_20903834')) {function content_55d7dc6bf31c57_20903834($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_function_widget')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.widget.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
    <table width="100%" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
        <th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
        <td align="right"><?php echo smarty_function_link(array('ctl'=>"tenders/tenders:index",'priv'=>"hidden",'class'=>"button"),$_smarty_tpl);?>
</td>
        <td width="15"></td>
      </tr>
    </table>
</div>
<div class="page-data"><form action="?tenders/tenders-create.html" mini-form="tenders-form" method="post" >
<table width="100%" border="0" cellspacing="0" class="table-data form">
<tr><th>标题：</th><td><input type="text" name="data[title]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
<tr><th class="w-100">城市：</th><td>
<label>城市:<select name="data[city_id]" class="w-100"><?php echo smarty_function_widget(array('id'=>"data/city",'value'=>$_smarty_tpl->tpl_vars['detail']->value['city_id']),$_smarty_tpl);?>
</select></label>
<label>地区:<select name="data[area_id]" class="w-100"><?php echo smarty_function_widget(array('id'=>"data/area",'value'=>$_smarty_tpl->tpl_vars['detail']->value['area_id'],'city_id'=>$_smarty_tpl->tpl_vars['detail']->value['city_id']),$_smarty_tpl);?>
</select></label>
</td></tr>
<tr>
    <th>所属会员：</th>
    <td>
        <input type="hidden" name="data[uid]" value="0" id="company_member_id" />
        <input type="text" value="" id="company_member_uname" class="input w-300"/>
        <?php echo smarty_function_link(array('ctl'=>"member/member:dialog",'select'=>"mini:#company_member_id,#company_member_uname/N/选择用户",'title'=>"选择用户",'class'=>"button"),$_smarty_tpl);?>

    </td>
</tr>
<tr><th>称呼：</th><td><input type="text" name="data[name]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['name'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
<tr><th><span class="red">*</span>手机：</th><td><input type="text" name="data[mobile]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['mobile'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
<tr><th>小区：</th>
	<td>
		<input type="hidden" name="data[home_id]" value="0" id="case_home_id"/>
		<input type="text" name="data[home_name]" value="" id="case_home_name" class="input w-300"/>
        <?php echo smarty_function_link(array('ctl'=>"home/main:dialog",'select'=>"mini:#case_home_id,#case_home_name/N/选择小区",'class'=>"button"),$_smarty_tpl);?>

	</td>
</tr>

<tr>
    <th>
        招标类型：
    </th>
    <td>
        <select name="data[type_id]" class="select w-100">
            <option value="0">请选择</option>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['setting']->value[$_smarty_tpl->tpl_vars['type']->value['type']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                 <option <?php if ($_smarty_tpl->tpl_vars['detail']->value['type_id']==$_smarty_tpl->tpl_vars['key']->value){?> selected="selected" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</option>
             <?php } ?>
        </select>
    </td>
</tr>

<tr>
    <th>
        喜欢风格：
    </th>
    <td>
        <select name="data[style_id]" class="select w-100">
            <option value="0">请选择</option>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['setting']->value[$_smarty_tpl->tpl_vars['type']->value['style']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                 <option <?php if ($_smarty_tpl->tpl_vars['detail']->value['style_id']==$_smarty_tpl->tpl_vars['key']->value){?> selected="selected" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</option>
             <?php } ?>
        </select>
    </td>
</tr>
<tr>
    <th>
        预算范围：
    </th>
    <td>
        <select name="data[budget_id]" class="select w-100">
            <option value="0">请选择</option>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['setting']->value[$_smarty_tpl->tpl_vars['type']->value['budget']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                 <option <?php if ($_smarty_tpl->tpl_vars['detail']->value['budget_id']==$_smarty_tpl->tpl_vars['key']->value){?> selected="selected" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</option>
             <?php } ?>
        </select>
    </td>
</tr>
<tr>
    <th>
        服务需求：
    </th>
    <td>
        <select name="data[service_id]" class="select w-100">
            <option value="0">请选择</option>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['setting']->value[$_smarty_tpl->tpl_vars['type']->value['service']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                 <option <?php if ($_smarty_tpl->tpl_vars['detail']->value['service_id']==$_smarty_tpl->tpl_vars['key']->value){?> selected="selected" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</option>
             <?php } ?>
        </select>
    </td>
</tr>
<tr>
    <th>
        空间户型：
    </th>
    <td>
        <select name="data[house_type_id]" class="select w-100">
            <option value="0">请选择</option>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['setting']->value[$_smarty_tpl->tpl_vars['type']->value['house_type']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                 <option <?php if ($_smarty_tpl->tpl_vars['detail']->value['house_type_id']==$_smarty_tpl->tpl_vars['key']->value){?> selected="selected" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</option>
             <?php } ?>
        </select>
    </td>
</tr>
<tr>
    <th>
        装修方式：
    </th>
    <td>
        <select name="data[way_id]" class="select w-100">
            <option value="0">请选择</option>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['setting']->value[$_smarty_tpl->tpl_vars['type']->value['way']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                 <option <?php if ($_smarty_tpl->tpl_vars['detail']->value['way_id']==$_smarty_tpl->tpl_vars['key']->value){?> selected="selected" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</option>
             <?php } ?>
        </select>
    </td>
</tr>
<tr><th>地址：</th><td><input type="text" name="data[addr]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['addr'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
<tr><th>其他需求：</th><td><textarea name="data[demand]" class="textarea"><?php echo $_smarty_tpl->tpl_vars['detail']->value['demand'];?>
</textarea><br /></td></tr>
<tr><th>客服反馈：</th><td><textarea name="data[feedback]" class="textarea"><?php echo $_smarty_tpl->tpl_vars['detail']->value['feedback'];?>
</textarea><br /></td></tr>
<tr><th>开始时间：</th><td><input type="text" name="data[start_time]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['start_time'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100" date="start_time" readonly/></td></tr>
<tr><th>面积：</th><td><input type="text" name="data[area]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['area'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/><span class="tip-comment">㎡</span></td></tr>
<tr><th>看标需要消耗金块：</th><td><input type="text" name="data[gold]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['gold'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/></td></tr>
<tr><th>允许看标企业数：</th><td><input type="text" name="data[num]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['num'])===null||$tmp==='' ? '3' : $tmp);?>
" class="input w-100"/><span class="tip-comment">允许几家公司报价</span></td></tr>

<tr><th>是否审核：</th><td>
<ul class="group-list">
    <li><label><input type="radio" name="data[audit]" value="0" <?php if ($_smarty_tpl->tpl_vars['detail']->value['audit']==0){?> checked="checked"<?php }?>  ck="MOD-6">待审核</label></li>
    <li><label><input type="radio" name="data[audit]" value="1" <?php if ($_smarty_tpl->tpl_vars['detail']->value['audit']==1){?> checked="checked"<?php }?>  ck="MOD-6">已审核</label></li>
    <div class="clear-both"></div>
</ul>

</td></tr>
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