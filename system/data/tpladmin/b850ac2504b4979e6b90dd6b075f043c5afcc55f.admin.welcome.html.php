<?php /* Smarty version Smarty-3.1.8, created on 2015-08-21 21:24:11
         compiled from "admin:page/welcome.html" */ ?>
<?php /*%%SmartyHeaderCode:27228727355d7267bd60991-79223742%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b850ac2504b4979e6b90dd6b075f043c5afcc55f' => 
    array (
      0 => 'admin:page/welcome.html',
      1 => 1402664331,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '27228727355d7267bd60991-79223742',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'ADMIN' => 0,
    'news' => 0,
    'new' => 0,
    'sysinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7267bf13e13_17308383',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7267bf13e13_17308383')) {function content_55d7267bf13e13_17308383($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
	<table width="100%" align="center" cellpadding="0" cellspacing="0" >
		<tr>
			<td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
			<th>亿家网装修平台管理首页</th>
			<td class="right"></td>
			<td width="15"></td>
		</tr>
	</table>
</div>
<div class="page-data">
<?php if ($_smarty_tpl->tpl_vars['ADMIN']->value['admin_name']=='ijianghu'&&$_smarty_tpl->tpl_vars['ADMIN']->value['passpwd']==md5('ijianghu')){?>
<p class="tips">老兄！据我所知你使用的还是默认帐号密码，请尽快修改以免发生安全问题</p>
<?php }?>
<!--<table width="100%" border="0" cellspacing="0" class="table-data table">
<tr><th colspan="15" class="left">江湖信息科技</th></tr>
<tr>
<?php  $_smarty_tpl->tpl_vars['new'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['new']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['new']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['new']->key => $_smarty_tpl->tpl_vars['new']->value){
$_smarty_tpl->tpl_vars['new']->_loop = true;
 $_smarty_tpl->tpl_vars['new']->iteration++;
?>
<?php if (!($_smarty_tpl->tpl_vars['new']->iteration % 2)){?>
<td class="left"><a href="http://www.ijh.cc/article/main/<?php echo $_smarty_tpl->tpl_vars['new']->value['content_id'];?>
.html" target="_blank"><?php echo $_smarty_tpl->tpl_vars['new']->value['title'];?>
</a></td><td><?php echo $_smarty_tpl->tpl_vars['new']->value['create_time'];?>
</td>
</tr>
<?php }else{ ?>
<tr><td class="left"><a href="http://www.ijh.cc/article/main/<?php echo $_smarty_tpl->tpl_vars['new']->value['content_id'];?>
.html" target="_blank"><?php echo $_smarty_tpl->tpl_vars['new']->value['title'];?>
</a></td><td style="border-right:1px solid #D7D7D7;"><?php echo $_smarty_tpl->tpl_vars['new']->value['create_time'];?>
</td>
<?php }?>
<?php } ?>
</table>-->
<div class="space15"></div>
<table width="100%" border="0" cellspacing="0" class="table-data table">
<tr><th colspan="15" class="left">系统信息</th></tr>

<tr>
	<td class="w-150 left">服务器操作系统：</td><td class="left"><?php echo $_smarty_tpl->tpl_vars['sysinfo']->value['server_os'];?>
</td>
	<td class="w-150 left">服务器域名/IP：</td><td class="left"><?php echo $_smarty_tpl->tpl_vars['sysinfo']->value['server_domain'];?>
</td>
	<td class="w-150 left">服务器环境：</td><td class="left"><?php echo $_smarty_tpl->tpl_vars['sysinfo']->value['web_server'];?>
</td>
</tr>
<tr>
	<td class="w-150 left">PHP 版本：</td><td class="left"><?php echo $_smarty_tpl->tpl_vars['sysinfo']->value['php_version'];?>
</td>
	<td class="w-150 left">Mysql 版本：</td><td class="left"><?php echo $_smarty_tpl->tpl_vars['sysinfo']->value['mysql_version'];?>
</td>
	<td class="w-150 left">GD 版本：</td><td class="left"><?php echo $_smarty_tpl->tpl_vars['sysinfo']->value['gd_version'];?>
</td>
</tr>
<tr>
	<td class="w-150 left">文件上传限制：</td><td class="left"><?php echo $_smarty_tpl->tpl_vars['sysinfo']->value['upload_max_filesize'];?>
</td>
	<td class="w-150 left">最大占用内存：</td><td class="left"><?php echo $_smarty_tpl->tpl_vars['sysinfo']->value['memory_limit'];?>
</td>
	<td class="w-150 left">最大执行时间：</td><td class="left"><?php echo $_smarty_tpl->tpl_vars['sysinfo']->value['max_execution_time'];?>
</td>
</tr>
<tr>
	<td class="w-150 left">安全模式：</td><td class="left"><?php echo $_smarty_tpl->tpl_vars['sysinfo']->value['safe_mode'];?>
</td>
	<td class="w-150 left">Zlib支持：</td><td class="left"><?php echo $_smarty_tpl->tpl_vars['sysinfo']->value['zlib'];?>
</td>
	<td class="w-150 left">Curl支持：</td><td class="left"><?php echo $_smarty_tpl->tpl_vars['sysinfo']->value['curl'];?>
</td>
</tr>
</table>
<div class="space15"></div>

</div>
<!--有最新安全漏洞补丁的时候后台提醒请不要删除该JS-->
<script type="text/javascript" src="http://www.ijh.cc/index.php?ctl=patch&act=check&cat=jiaju&version=<?php echo @JH_VERSION;?>
.<?php echo @JH_RELEASE;?>
"></script>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>