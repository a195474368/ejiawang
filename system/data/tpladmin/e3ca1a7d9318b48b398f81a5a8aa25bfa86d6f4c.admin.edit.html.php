<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 09:34:00
         compiled from "admin:case/case/edit.html" */ ?>
<?php /*%%SmartyHeaderCode:127986571955d7d1887ee328-92687036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3ca1a7d9318b48b398f81a5a8aa25bfa86d6f4c' => 
    array (
      0 => 'admin:case/case/edit.html',
      1 => 1402664331,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '127986571955d7d1887ee328-92687036',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'detail' => 0,
    'company' => 0,
    'designer' => 0,
    'home' => 0,
    'huxing' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7d1889dbae8_36897180',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7d1889dbae8_36897180')) {function content_55d7d1889dbae8_36897180($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_function_widget')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.widget.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
    <table width="100%" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
        <th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
        <td align="right"><?php echo smarty_function_link(array('ctl'=>"case/case:index",'priv'=>"hidden",'class'=>"button"),$_smarty_tpl);?>
</td>
        <td width="15"></td>
      </tr>
    </table>
</div>
<div class="page-data">
<form action="?case/case-edit.html" mini-form="case-form" method="post" ENCTYPE="multipart/form-data">
<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
    <li><a href="#table-info">基本信息</a></li>
    <li><a href="#table-attr">属性信息</a></li>
    <li><a href="#table-seo">SEO信息</a></li>
</ul>
<input type="hidden" name="case_id" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['case_id'];?>
"/>
<table width="100%" border="0" cellspacing="0" class="table-data form" id="table-info">
<tr><th>标题：</th><td><input type="text" name="data[title]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
" class="input w-400"/></td></tr>
<tr><th>装修公司：</th>
    <td>
    <input type="hidden" name="data[company_id]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['company_id'];?>
" id="case_company_id"/>
    <input type="text"  value="<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
" id="case_company_name" class="input w-300" readonly="readonly"/>
    <?php echo smarty_function_link(array('ctl'=>"company/company:dialog",'id'=>"select_company_btn",'class'=>"button"),$_smarty_tpl);?>
    
    </td>
</tr>
<tr>
    <th>设计师：</th>
	<td>
		<input type="hidden" name="data[designer_id]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['designer_id'];?>
" id="case_designer_id"/>
		<input type="text"  value="<?php echo $_smarty_tpl->tpl_vars['designer']->value['uname'];?>
" id="case_designer_name" class="input w-300" readonly="readonly"/>
        <?php echo smarty_function_link(array('ctl'=>"designer/designer:dialog",'select'=>"mini:#case_designer_id,#case_designer_name/N/选择设计师",'class'=>"button"),$_smarty_tpl);?>

	</td>    
</tr>
<tr><th>小区：</th>
	<td>
		<input type="hidden" name="data[home_id]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['home_id'];?>
" id="case_home_id"/>
		<input type="text"  value="<?php if ($_smarty_tpl->tpl_vars['home']->value['name']){?><?php echo $_smarty_tpl->tpl_vars['home']->value['name'];?>
<?php }?>" id="case_home_name" class="input w-300" readonly="readonly"/>
		<?php echo smarty_function_link(array('ctl'=>"home/main:dialog",'id'=>"select_home_btn",'class'=>"button"),$_smarty_tpl);?>

	</td>
</tr>
<tr>
    <th>户型图：</th>
    <td>
        <input type="text" name="data[huxing_id]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['huxing_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['detail']->value['huxing_id']){?>photo="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['huxing']->value['pic'];?>
_thumb.jpg"<?php }?> id="case_huxing_id" class="input w-100" readonly="readonly"/>
        <?php echo smarty_function_link(array('ctl'=>"home/pics:dialog",'class'=>"button",'id'=>"select_huxing_btn"),$_smarty_tpl);?>

    </td>
</tr>
<tr>
	<th>统计：</th>
	<td>
		<label>图片数:<input type="text" name="data[photos]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['photos'])===null||$tmp==='' ? '0' : $tmp);?>
" class="input w-50"/></label>
		<label>浏览数:<input type="text" name="data[views]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['views'])===null||$tmp==='' ? '0' : $tmp);?>
" class="input w-50"/></label>
		<label>喜欢数:<input type="text" name="data[likes]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['likes'])===null||$tmp==='' ? '0' : $tmp);?>
" class="input w-50"/></label>
		<label>总大小:<input type="text" name="data[size]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['size'])===null||$tmp==='' ? '0' : $tmp);?>
" class="input w-100"/> 字节</label>	
	</td>
</tr>
 <tr><th>设计思路：</th><td><textarea name="data[intro]" class="textarea"><?php echo $_smarty_tpl->tpl_vars['detail']->value['intro'];?>
</textarea><br /></td></tr>
<tr><th>排序：</th><td><input type="text" name="data[orderby]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['orderby'])===null||$tmp==='' ? '50' : $tmp);?>
" class="input w-50"/></td></tr>
<tr><th>审核：</th><td>
	<label><input type="radio" name="data[audit]" <?php if ($_smarty_tpl->tpl_vars['detail']->value['audit']){?>checked="checked"<?php }?> value="1"/>是</label>&nbsp;&nbsp;
	<label><input type="radio" name="data[audit]" <?php if (empty($_smarty_tpl->tpl_vars['detail']->value['audit'])){?>checked="checked"<?php }?> value="0"/>否</label></td></tr>
    <tr><th class="clear-th-bottom"></th><td class="clear-td-bottom" colspan="10"><input type="submit" class="bt-big" value="提交数据" /></td></tr>
</table>

<table width="100%" border="0" cellspacing="0" class="table-data form" id="table-seo" style="display:none;">
<tr><th>seo_title：</th><td><input type="text" name="data[seo_title]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['seo_title'];?>
" class="input w-500"/></td></tr>
<tr><th>seo_keywords：</th><td><input type="text" name="data[seo_keywords]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['seo_keywords'];?>
" class="input w-500"/></td></tr>
<tr><th>seo_description：</th><td><textarea name="data[seo_description]" class="textarea"><?php echo $_smarty_tpl->tpl_vars['detail']->value['seo_description'];?>
</textarea><br /></td></tr>
<tr><th class="clear-th-bottom"></th><td class="clear-td-bottom" colspan="10"><input type="submit" class="bt-big" value="提交数据" /></td></tr>
</table>  

<table width="100%" border="0" cellspacing="0" class="table-data form" id="table-attr" style="display:none;">
<?php echo smarty_function_widget(array('id'=>"attr/form",'from'=>"zx:case",'value'=>$_smarty_tpl->tpl_vars['detail']->value['attrvalues']),$_smarty_tpl);?>

<tr><th class="clear-th-bottom"></th><td class="clear-td-bottom" colspan="10"><input type="submit" class="bt-big" value="提交数据" /></td></tr>
</table>
</form>
</div>
<script type="text/javascript">
(function(K, $){
$("div.page-data").tabs();
$("#select_home_btn").click(function(e){
	e.stopPropagation(); e.preventDefault();
    var home_id = $("#case_home_id").val();
	var link = $(this).attr("action") || $(this).attr("href");
	Widget.Dialog.Select(link, 'N', function(ret){
        $("#case_home_id").val(ret[0]);
        $("#case_home_name").val(ret[1].title);
	}, {title:"请选择小区",width:700});
});
$("#select_company_btn").click(function(e){
	e.stopPropagation(); e.preventDefault();
	var link = $(this).attr("action") || $(this).attr("href");
	Widget.Dialog.Select(link, 'N', function(ret){
        $("#case_company_id").val(ret[0]);
        $("#case_company_name").val(ret[1].title);
	}, {title:"请选择装修公司",width:700});
});
$("#select_huxing_btn").click(function(e){
	e.stopPropagation(); e.preventDefault();
    var home_id = $("#case_home_id").val();
    if(!$.isNumeric(home_id)){
        Widget.MsgBox.error("请先选择小区");
        return false;
    }
	var link = $(this).attr("action") || $(this).attr("href");
    link += "&SO[home_id]="+home_id;
	Widget.Dialog.Select(link, 'N', function(ret){
        $("#case_huxing_id").val(ret[0]);
        $("#case_huxing_id").attr("photo", "<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/"+ret[1].photo+"_thumb.jpg");
	}, {title:"请选择户型图",width:700});
});
})(window.KT, window.jQuery);
</script>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>