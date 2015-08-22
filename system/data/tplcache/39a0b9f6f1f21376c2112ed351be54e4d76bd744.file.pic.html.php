<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 14:36:28
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/ucenter/case/pic.html" */ ?>
<?php /*%%SmartyHeaderCode:61042556355d8186c4887b9-92718631%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39a0b9f6f1f21376c2112ed351be54e4d76bd744' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/ucenter/case/pic.html',
      1 => 1402664332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61042556355d8186c4887b9-92718631',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'case' => 0,
    'OTOKEN' => 0,
    'items' => 0,
    'pager' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d8186c5eb983_32896692',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d8186c5eb983_32896692')) {function content_55d8186c5eb983_32896692($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_format')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("ucenter/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="base_info"><b>案例图片(<?php echo $_smarty_tpl->tpl_vars['case']->value['title'];?>
)</b></div>
<table class="info">
    <tr>
        <td>
            <div class="SWF_Widget" rel="__SWF_Widget" params='{"submit":"true","case_id":"<?php echo $_smarty_tpl->tpl_vars['case']->value['case_id'];?>
","OTOKEN":"<?php echo $_smarty_tpl->tpl_vars['OTOKEN']->value;?>
"}'>
                <span rel="__SWF_ctl" class="SWF_Ctl" style="float:left;">控件加载中...</span>
                <span style="display:none;" class="SWF_Loading" rel="l"><span rel="m"></span><span rel="n"></span></span>
            </div>
        </td>
    </tr>
</table>
<form mini-form="case" action="<?php echo smarty_function_link(array('ctl'=>'ucenter/case:update','arg0'=>$_smarty_tpl->tpl_vars['case']->value['case_id'],'http'=>true),$_smarty_tpl);?>
" method="post">
    <table width="100%" border="0" cellspacing="0" class="info">
        <tr>
            <th>图片</th>
            <th>标题</th>
            <th>排序</th>
            <th>大小</th>
            <th>IP</th>
            <th>上传时间</th>
            <th>操作</th>
        </tr>

        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <tr>    
            <td>
                 <img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['photo'];?>
_small.jpg" class="wh-50" photo="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['photo'];?>
_thumb.jpg" />
            </td>
            <td><input type="text" name="data[<?php echo $_smarty_tpl->tpl_vars['item']->value['photo_id'];?>
][title]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" class="input w-300"/></td>
            <td><input type="text" name="data[<?php echo $_smarty_tpl->tpl_vars['item']->value['photo_id'];?>
][orderby]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['orderby'];?>
" class="input w-50"/></td>
            <td><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['size'],"size");?>
</td>
            <td class="w-100"><?php echo $_smarty_tpl->tpl_vars['item']->value['clientip'];?>
</td>
            <td class="w-150"><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</td>
            <td class="w-150"> <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/case:delete','arg0'=>$_smarty_tpl->tpl_vars['item']->value['photo_id'],'http'=>true),$_smarty_tpl);?>
" mini-act='删除' class="yzmbtn">删除</a></td>
        </tr>
        <?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
        <tr><td colspan="20"><p class="text-align tip-notice">没有数据</p></td></tr>
        <?php } ?>
    
        <tr>
            <td><input type="submit" value="更新" class="set_btn" /></td>
               <td  colspan="20" class="page-list"><div class="page"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</div></td>
        </tr>
    </table>
</form>    
<script src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/swfupload/swfupload.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/kt.upload.js" type="text/javascript"></script>
<script type="text/javascript">
    (function(K, $) {
        $(document).ready(function() {
            var Events = {
                upload_all_complete: function(event, files) {
                    Widget.MsgBox.success("全部图片上传完成！");
                    window.location.reload(true);
                }
            };
            $("div[rel='__SWF_Widget']").each(function() {
                $(this).SWFUpload({
                    file_size_limit: "30 MB",
                    file_upload_limit: 30,
                    upload_url: "<?php echo smarty_function_link(array('ctl'=>'ucenter/case:upload','http'=>true),$_smarty_tpl);?>
",
                    file_types: "*.jpg;*.gif;*.jpeg;*.png;",
                    file_types_description: "添加图片",
                    flash_url: "<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/swfupload/swfupload.swf",
                    button_image_url: "<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/swfupload/photo.jpg",
                    button_placeholder: $("[rel='__SWF_ctl']", this)[0],
                    button_width: 84,
                    button_height: 24,
                    events: Events,
                    debug: false
                });
            });
        });
    })(window.KT, window.jQuery)
</script>
<?php echo $_smarty_tpl->getSubTemplate ("ucenter/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>