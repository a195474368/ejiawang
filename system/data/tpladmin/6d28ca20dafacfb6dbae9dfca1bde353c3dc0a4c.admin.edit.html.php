<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:08:04
         compiled from "admin:member/verify/edit.html" */ ?>
<?php /*%%SmartyHeaderCode:126397938455d7e794ad3759-76796470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d28ca20dafacfb6dbae9dfca1bde353c3dc0a4c' => 
    array (
      0 => 'admin:member/verify/edit.html',
      1 => 1402664331,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '126397938455d7e794ad3759-76796470',
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
  'unifunc' => 'content_55d7e794c8d2d8_59294668',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7e794c8d2d8_59294668')) {function content_55d7e794c8d2d8_59294668($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
    <table width="100%" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
        <th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
        <td align="right"><?php echo smarty_function_link(array('ctl'=>"member/verify:index",'priv'=>"hidden",'class'=>"button"),$_smarty_tpl);?>
</td>
        <td width="15"></td>
      </tr>
    </table>
</div>
<div class="page-data"><form action="?member/verify-edit.html" mini-form="verify-form" method="post" ENCTYPE="multipart/form-data">
<table width="100%" border="0" cellspacing="0" class="table-data form">
<input type="hidden" name="uid" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['uid'];?>
"/>
<tr><th>姓名/企业名：</th><td><input type="text" name="data[name]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['name'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
<tr><th>证件号：</th><td><input type="text" name="data[id_number]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['id_number'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
<tr><th>证件图片：</th><td><input type="text" name="data[id_photo]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['id_photo'];?>
" <?php if ($_smarty_tpl->tpl_vars['detail']->value['id_photo']){?>photo="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['detail']->value['id_photo'];?>
"<?php }?> class="input w-300" />&nbsp;&nbsp;&nbsp;<input type="file" name="data[id_photo]" class="input w-100" /></td></tr>
<tr><th>手机号：</th><td><input type="text" name="data[mobile]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['mobile'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
<tr><th>审核状态：</th>
    <td>
        <label><input type="radio" name="data[verify]" <?php if (empty($_smarty_tpl->tpl_vars['detail']->value['verify'])){?>checked="checked"<?php }?> value="null" />待审</label>
        <label><input type="radio" name="data[verify]" <?php if ($_smarty_tpl->tpl_vars['detail']->value['verify']==1){?>checked="checked"<?php }?> value="pass" />通过</label>
        <label><input type="radio" name="data[verify]" <?php if ($_smarty_tpl->tpl_vars['detail']->value['verify']==2){?>checked="checked"<?php }?> value="refuse" />拒绝</label>
    </td>
</tr>
<tr id="verify_refuse" <?php if ($_smarty_tpl->tpl_vars['detail']->value['verify']!=2){?>style="display:none;"<?php }?>><th>拒绝信息：</th><td><textarea name="data[refuse]" class="textarea"><?php echo $_smarty_tpl->tpl_vars['detail']->value['refuse'];?>
</textarea><br /></td></tr>
    <tr><th class="clear-th-bottom"></th><td class="clear-td-bottom" colspan="10"><input type="submit" class="bt-big" value="提交数据" /></td></tr>
</table>
</form></div>
<script type="text/javascript">
(function(K, $){
    $("[name='data[verify]']").click(function(){
        if($(this).val() == 'refuse'){
            $("#verify_refuse").show();
        }else{
            $("#verify_refuse").hide();
        }
    });
})(window.KT, window.jQuery);
</script>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>