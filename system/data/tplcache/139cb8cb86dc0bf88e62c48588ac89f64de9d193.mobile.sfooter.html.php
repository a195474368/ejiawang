<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:20:00
         compiled from "mobile:block/sfooter.html" */ ?>
<?php /*%%SmartyHeaderCode:93184614555d7ea60799bd0-06875424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '139cb8cb86dc0bf88e62c48588ac89f64de9d193' => 
    array (
      0 => 'mobile:block/sfooter.html',
      1 => 1420010587,
      2 => 'mobile',
    ),
  ),
  'nocache_hash' => '93184614555d7ea60799bd0-06875424',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea607cf040_65066326',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea607cf040_65066326')) {function content_55d7ea607cf040_65066326($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><!--footer -->
<footer>
    <p class="about_foot">
        <a href="<?php echo smarty_function_link(array('ctl'=>'page:about','arg0'=>'about'),$_smarty_tpl);?>
">关于我们</a><a href="<?php echo smarty_function_link(array('ctl'=>'page:about','arg0'=>'contact'),$_smarty_tpl);?>
">联系我们</a><a href="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['siteurl'];?>
">电脑版</a></p>
    <p class="Copyright"><span>Copyright &copy; 2013 ijh.cc Corporation,All Rights Reserved</span><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['icp'];?>
</p>
</footer>
<!--footer end --><?php }} ?>