<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:20:17
         compiled from "view:page/notice.html" */ ?>
<?php /*%%SmartyHeaderCode:121764390855d7ea714fa448-07126077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4726972748e23f1b8d6d136249b447af2846f4a9' => 
    array (
      0 => 'view:page/notice.html',
      1 => 1402664330,
      2 => 'view',
    ),
  ),
  'nocache_hash' => '121764390855d7ea714fa448-07126077',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'pager' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea715f6cc9_97347703',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea715f6cc9_97347703')) {function content_55d7ea715f6cc9_97347703($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><!doctype html> 
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
 - 系统提示！</title>
<style type="text/css">
.shadow {-moz-box-shadow: 3px 3px 5px #D9E1EA;-webkit-box-shadow: 3px 3px 5px #D9E1EA;box-shadow: 3px 3px 5px #D9E1EA;}
</style>
</head>
<body>
<table width="600" border="0" align="center" cellpadding="6" cellspacing="0" style="font-size:14px; margin-top:160px; border:1px #CAE3EB solid; margin-bottom:100px;" class="shadow">
  <tr>
    <td height="28" bgcolor="#E9F4F7"><strong style="color:#666;">系统提示：</strong></td>
  </tr>
  <tr>
    <td  bgcolor="#FFFFFF"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="20" >
      <tr>
        <td width="80" align="right" valign="top">
			<img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/images/icon/<?php if ($_smarty_tpl->tpl_vars['pager']->value['error']){?>notice-success.gif<?php }else{ ?>notice-success.gif<?php }?>" />
		</td>
        <td>
		<div style="font-size:12px; margin-top:2px; line-height:200%;">
		<strong style="font-size:16px ; color:#006699;"><?php echo $_smarty_tpl->tpl_vars['pager']->value['message'];?>
</strong>
         <div id="notice-msg" style="color:#999999;">
		 <?php if ($_smarty_tpl->tpl_vars['pager']->value['timer']>0){?>如果您不做出选择，将在 <strong id="notice-timer" style="color:red;"><?php echo $_smarty_tpl->tpl_vars['pager']->value['timer'];?>
</strong> 秒后跳转到第一个链接地址。<?php }else{ ?>请选择以下操作。<?php }?>
		 </div>
		<div style=" border-bottom:1px #CCCCCC solid; width:400px; height:1px;"></div>
          <ul style="margin:0;list-style:none; margin-top:7px;padding-left:2px;" >
			<?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pager']->value['url_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value){
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
            <li><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/images/icon/link.gif" align="absmiddle" style="margin-right:5px;"/><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['url'];?>
" style="color: #006699"><?php echo $_smarty_tpl->tpl_vars['link']->value['title'];?>
</a></li>
            <?php }
if (!$_smarty_tpl->tpl_vars['link']->_loop) {
?>
            <li><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/images/icon/link.gif" align="absmiddle" style="margin-right:5px;"/><a href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
" style="color: #006699">点击立即跳转</a></li>
			<?php } ?>
          </ul>
        </div></td>
      </tr>
    </table></td>
  </tr>
</table>
<?php if (((int)$_smarty_tpl->tpl_vars['pager']->value['timer']>0)){?>
<script type="text/javascript">
var timer = <?php echo $_smarty_tpl->tpl_vars['pager']->value['timer'];?>
;
var link = "<?php if ($_smarty_tpl->tpl_vars['pager']->value['link']){?><?php echo $_smarty_tpl->tpl_vars['pager']->value['link'];?>
<?php }else{ ?><?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
<?php }?>";
window.onload = function(){
	if (link == 'javascript:history.go(-1)' && window.history.length == 0){
		document.getElementById('notice-msg').innerHTML = '';
		return;
	}
	window.setInterval(function(){
		if(timer<1){window.clearInterval();
			window.location.href = link;
			return ;
		}
		timer --;
		document.getElementById("notice-timer").inserHTML = timer;
	}, 1000);
}
</script>
<?php }?>
</body>
</html><?php }} ?>