<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 14:28:26
         compiled from "admin:member/member/ucard.html" */ ?>
<?php /*%%SmartyHeaderCode:165470833855d8168aa8dd47-51600368%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c57900a91b08d69f6d99302d2093d89cb40f7c95' => 
    array (
      0 => 'admin:member/member/ucard.html',
      1 => 1402664331,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '165470833855d8168aa8dd47-51600368',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'detail' => 0,
    'shop' => 0,
    'company' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d8168abc9e17_87484993',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d8168abc9e17_87484993')) {function content_55d8168abc9e17_87484993($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_format')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.format.php';
?>用户名：<?php echo $_smarty_tpl->tpl_vars['detail']->value['uname_v'];?>
&nbsp;&nbsp;<span style="color:#0033CC">(uid:<?php echo $_smarty_tpl->tpl_vars['detail']->value['uid'];?>
)</span><br/>
类型：<b <?php if ($_smarty_tpl->tpl_vars['detail']->value['from']!='member'){?>class="blue"<?php }?>><?php echo $_smarty_tpl->tpl_vars['detail']->value['from_title'];?>
</b><br />
手机：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['mobile'])===null||$tmp==='' ? '---' : $tmp);?>
<br/>
邮箱：<?php echo $_smarty_tpl->tpl_vars['detail']->value['mail'];?>
<span style="color:#FF9900"><?php if ($_smarty_tpl->tpl_vars['detail']->value['verify_mail']){?>[已验证]<?php }else{ ?>[未验证]<?php }?></span><br/>
状态：<?php if ($_smarty_tpl->tpl_vars['detail']->value['closed']==3){?>已删除<?php }elseif($_smarty_tpl->tpl_vars['detail']->value['closed']==2){?>锁定<?php }elseif($_smarty_tpl->tpl_vars['detail']->value['closed']==1){?>禁言<?php }else{ ?>正常<?php }?><br/>
注册时间：<?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['detail']->value['dateline'],"Y/m/d H:i");?>
<br/>
注册IP：<?php echo $_smarty_tpl->tpl_vars['detail']->value['ip'];?>
<br/>
最后登录：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['lastlogin'])===null||$tmp==='' ? 'Y/m/d H:i' : $tmp);?>
<br/>
积分：<?php echo $_smarty_tpl->tpl_vars['detail']->value['credits'];?>
点<br/>
<?php if ($_smarty_tpl->tpl_vars['detail']->value['from']=='shop'){?>商铺名称：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['shop']->value['title'])===null||$tmp==='' ? '--' : $tmp);?>
<br/><?php }elseif($_smarty_tpl->tpl_vars['detail']->value['from']=='company'){?>公司名称：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['company']->value['title'])===null||$tmp==='' ? '--' : $tmp);?>
<br/><?php }?><?php }} ?>