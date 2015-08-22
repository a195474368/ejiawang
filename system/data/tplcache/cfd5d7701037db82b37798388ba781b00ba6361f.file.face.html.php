<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:35:10
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/ucenter/member/face.html" */ ?>
<?php /*%%SmartyHeaderCode:132182515655d7edee141097-59271349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfd5d7701037db82b37798388ba781b00ba6361f' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/ucenter/member/face.html',
      1 => 1402664332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132182515655d7edee141097-59271349',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MEMBER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7edee1e1c42_60185933',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7edee1e1c42_60185933')) {function content_55d7edee1e1c42_60185933($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("ucenter/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="filter_tabs">
    <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member:info'),$_smarty_tpl);?>
" class="tab">人个资料</a><i></i>
	<a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member:face'),$_smarty_tpl);?>
" class="tab on">修改头像</a><i></i>
	<a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member:mail'),$_smarty_tpl);?>
" class="tab">修改邮箱</a><i></i>
    <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member:passwd'),$_smarty_tpl);?>
" class="tab">修改密码</a><i></i>
</div>
<div id="member-avatar" style="height:500px;"></div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/widget.avatar.js"></script>
<script type="text/javascript">
(function(K, $){
	$("#member-avatar").Avatar({"uid":"<?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['uid'];?>
","upload":"<?php echo smarty_function_link(array('ctl'=>'ucenter/member:upload'),$_smarty_tpl);?>
","face":"<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['face'];?>
"});
})(window.KT, window.jQuery);
</script>
<?php echo $_smarty_tpl->getSubTemplate ("ucenter/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>