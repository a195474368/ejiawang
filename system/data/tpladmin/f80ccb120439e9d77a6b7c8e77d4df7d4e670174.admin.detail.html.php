<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 09:33:48
         compiled from "admin:case/case/detail.html" */ ?>
<?php /*%%SmartyHeaderCode:204794098855d7d17ca82c08-61234872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f80ccb120439e9d77a6b7c8e77d4df7d4e670174' => 
    array (
      0 => 'admin:case/case/detail.html',
      1 => 1402664331,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '204794098855d7d17ca82c08-61234872',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'case' => 0,
    'OATOKEN' => 0,
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7d17cc57f71_72593611',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7d17cc57f71_72593611')) {function content_55d7d17cc57f71_72593611($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_format')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
	<table width="100%" align="center" cellpadding="0" cellspacing="0" >
		<tr>
			<td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
			<th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
&nbsp;&nbsp;(案例:<b class="red"><?php echo $_smarty_tpl->tpl_vars['case']->value['title'];?>
</b>)</th>
			<td align="right">
				<?php echo smarty_function_link(array('ctl'=>"case/case:index",'class'=>"button",'title'=>"返回案例列表"),$_smarty_tpl);?>

			</td>
			<td width="15"></td>
		</tr>
	</table>
</div>
<div class="page-data">	
	<div class="tip-notice">
		<div class="SWF_Widget" rel="__SWF_Widget" params='{"submit":"true","case_id":"<?php echo $_smarty_tpl->tpl_vars['case']->value['case_id'];?>
","OATOKEN":"<?php echo $_smarty_tpl->tpl_vars['OATOKEN']->value;?>
"}'>
			<span rel="__SWF_ctl" class="SWF_Ctl" style="float:left;">控件加载中...</span>
			<span style="display:none;" class="SWF_Loading" rel="l"><span rel="m"></span><span rel="n"></span></span>
		</div>
	</div>
	<form id="items-form">
    <table width="100%" border="0" cellspacing="0" class="table-data table">
    <tr>
		<th class="w-100">ID</th><th>案例</th><th>图片</th>
		<th>标题</th><th>排序</th><th>大小</th><th>IP</th><th>上传时间</th>
		<th class="w-150">操作</th>
	</tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr>
		<td class="left"><label><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['photo_id'];?>
" name="photo_id[]" CK="PRI"/><?php echo $_smarty_tpl->tpl_vars['item']->value['photo_id'];?>
<label></td>
		<td><?php echo $_smarty_tpl->tpl_vars['case']->value['title'];?>
</td><td><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['photo'];?>
_small.jpg" class="wh-50" photo="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['photo'];?>
_thumb.jpg" /></td>
		<td><input type="text" name="data[<?php echo $_smarty_tpl->tpl_vars['item']->value['photo_id'];?>
][title]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" class="input w-300"/></td>
		<td><input type="text" name="data[<?php echo $_smarty_tpl->tpl_vars['item']->value['photo_id'];?>
][orderby]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['orderby'];?>
" class="input w-50"/></td>
		<td><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['size'],"size");?>
</td><td class="w-100"><?php echo $_smarty_tpl->tpl_vars['item']->value['clientip'];?>
</td><td class="w-150"><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</td>
		<td>
			<?php echo smarty_function_link(array('ctl'=>"case/photo:delete",'args'=>$_smarty_tpl->tpl_vars['item']->value['photo_id'],'act'=>"mini:删除",'confirm'=>"mini:确定要删除吗？",'title'=>"删除",'class'=>"button"),$_smarty_tpl);?>

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
				<?php echo smarty_function_link(array('ctl'=>"case/photo:delete",'type'=>"button",'submit'=>"mini:#items-form",'confirm'=>"mini:确定要删除选中的内容吗?",'priv'=>"hide",'value'=>"批量删除"),$_smarty_tpl);?>

				<?php echo smarty_function_link(array('ctl'=>"case/photo:update",'type'=>"button",'submit'=>"mini:#items-form",'priv'=>"hide",'value'=>"批量更新"),$_smarty_tpl);?>

			</td>
			<td class="page-list"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</td>
		</tr>
		</table>
	</div>
</div>
<script src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/swfupload/swfupload.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/kt.upload.js" type="text/javascript"></script>
<script type="text/javascript">
(function(K, $){
$(document).ready(function(){
var Events = {
	upload_all_complete : function(event,files){
		Widget.MsgBox.success("全部图片上传完成！");
		window.location.reload(true);
	}
};
$("div[rel='__SWF_Widget']").each(function(){
	$(this).SWFUpload({
		file_size_limit	: "30 MB",
		file_upload_limit : 30,
		upload_url: "?case/photo-upload.html",
		file_types : "*.jpg;*.gif;*.jpeg;*.png;",
		file_types_description : "添加图片",
		flash_url : "<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/swfupload/swfupload.swf",
		button_image_url : "<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/swfupload/photo.jpg",
		button_placeholder :$("[rel='__SWF_ctl']",this)[0],
		button_width: 84,
		button_height: 24,
		events:Events,
		debug : false
	});
});
});
})(window.KT, window.jQuery)
</script>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>