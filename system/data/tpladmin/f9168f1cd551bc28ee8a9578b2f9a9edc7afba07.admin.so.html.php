<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 09:04:33
         compiled from "admin:tenders/tenders/so.html" */ ?>
<?php /*%%SmartyHeaderCode:182507524855d7caa1a8caa5-49265194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9168f1cd551bc28ee8a9578b2f9a9edc7afba07' => 
    array (
      0 => 'admin:tenders/tenders/so.html',
      1 => 1402664331,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '182507524855d7caa1a8caa5-49265194',
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
  'unifunc' => 'content_55d7caa1bb30c5_81917160',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7caa1bb30c5_81917160')) {function content_55d7caa1bb30c5_81917160($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
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
<div class="page-data"><form action="?tenders/tenders-index.html" id="SO-form" method="post">
<table width="100%" border="0" cellspacing="0" class="table-data form">
    <tr><th>标题：</th><td><input type="text" name="SO[title]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
" class="input w-300"/></td></tr>
    <tr><th>城市：</th>
        <td><select name="SO[city_id]" class="w-150"><option value="">--城市--</option><?php echo smarty_function_widget(array('id'=>"data/city"),$_smarty_tpl);?>
</select></td>
    </tr>
    <tr>
        <th>所属会员：</th>
        <td>
            <input type="hidden" name="data[uid]" value="0" id="company_member_id" />
            <input type="text" value="" id="company_member_uname" class="input w-300"/>
            <?php echo smarty_function_link(array('ctl'=>"member/member:dialog",'select'=>"mini:#company_member_id,#company_member_uname/N/选择用户",'title'=>"选择用户",'class'=>"button"),$_smarty_tpl);?>

        </td>
    </tr>
        <tr><th>称呼：</th><td><input type="text" name="SO[name]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>
" class="input w-300"/></td></tr>
        <tr><th>手机：</th><td><input type="text" name="SO[mobile]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['mobile'];?>
" class="input w-300"/></td></tr>
    <tr><th>小区：</th>
    	<td>
    		<input type="hidden" name="data[home_id]" value="0" id="case_home_id"/>
    		<input type="text"  value="" id="case_home_name" class="input w-300" readonly="readonly"/>
            <?php echo smarty_function_link(array('ctl'=>"home/main:dialog",'select'=>"mini:#case_home_id,#case_home_name/N/选择小区",'class'=>"button"),$_smarty_tpl);?>

    	</td>
    </tr>
    <tr><th class="clear-th-bottom"></th><td class="clear-td-bottom" colspan="10"><input type="submit" class="bt-big" value="搜 索" /></td></tr>
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