<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:20:10
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/ucenter/member/verify.html" */ ?>
<?php /*%%SmartyHeaderCode:160736206155d7ea6a3f7dc5-33902025%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c459ab8ed72f046ad7ba8f405272623f4ad6069c' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/ucenter/member/verify.html',
      1 => 1402664332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160736206155d7ea6a3f7dc5-33902025',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MEMBER' => 0,
    'detail' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea6a5525d0_95265289',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea6a5525d0_95265289')) {function content_55d7ea6a5525d0_95265289($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("ucenter/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/widget.YMD.js"></script>
<div class="base_info"><b>基本信息</b>（<span class="red">*</span>必填项)</div>
	<h4 class="tips">
        <?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['verify_name']){?>
        <span class="success">您已经通过实名认证</span>
        <?php }elseif($_smarty_tpl->tpl_vars['detail']->value['verify']=='2'){?>
        <span class="notice">您提交的信息被打回：<b class="red"><?php echo $_smarty_tpl->tpl_vars['detail']->value['refuse'];?>
</b></span>
        <?php }elseif(isset($_smarty_tpl->tpl_vars['detail']->value['verify'])&&empty($_smarty_tpl->tpl_vars['detail']->value['verify'])){?>
        <span class="notice">您提交的信息正在审核中</span>
        <?php }else{ ?>
        <span class="notice">您还未提交认真信息</span>
        <?php }?>
        </h4>
<form id="account-form">
<?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['verify_name']||(isset($_smarty_tpl->tpl_vars['detail']->value['verify'])&&empty($_smarty_tpl->tpl_vars['detail']->value['verify']))){?>
<table cellspacing="0" cellpadding="0" class="form">
    <tr><th>姓名/企业：</th><td>&nbsp;<?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>
</td></tr>
    <tr><th>证件号：</th><td>&nbsp;<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['id_number'])===null||$tmp==='' ? '--' : $tmp);?>
</td></tr>
    <tr><th>证件图片：</th><td><a href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['detail']->value['id_photo'];?>
" target="_blank" title="查看原图"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['detail']->value['id_photo'];?>
"  class="w-600"/></a></td></tr>
    <tr><th><span class="red">&nbsp;</span>手机：</th><td><?php echo $_smarty_tpl->tpl_vars['detail']->value['mobile'];?>
</td></tr>
</table>
<?php }else{ ?>
<table cellspacing="0" cellpadding="0" class="form">
    <tr><th>姓名/企业：</th><td><input type="text" name="data[name]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>
" class="input" /></td></tr>
    <tr><th>证件号：</th><td><input type="text" name="data[id_number]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['id_number'];?>
" class="input" /></td></tr>
    <tr><th>证件图片：</th>
        <td>
            <?php if ($_smarty_tpl->tpl_vars['detail']->value['id_photo']){?><a href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['detail']->value['id_photo'];?>
" target="_blank" title="查看原图"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['detail']->value['id_photo'];?>
"  class="w-600"/></a><br /><?php }?>
            <input type="file" name="id_photo" class="input" />
        </td>
    </tr>
    <tr>
        <th>手机：</th><td><input type="text" name="data[mobile]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['mobile'];?>
" class="input"/></td>
    </tr>
    <!--
    <tr>
        <th>验证码：</th><td><input type="text" name="data[verify]" value="" class="input w-100"/><a class="yzmbtn">发送验证码</a></td>
    </tr>
    -->
    <tr>
        <th></th><td><input action="<?php echo smarty_function_link(array('ctl'=>'ucenter/member:verify','http'=>true),$_smarty_tpl);?>
" mini-submit="#account-form" type="button" value="保存" class="set_btn" /></td>
    </tr>
</table>
<?php }?>
</form>
<?php echo $_smarty_tpl->getSubTemplate ("ucenter/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>