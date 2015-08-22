<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:20:08
         compiled from "view:page/miniframe.html" */ ?>
<?php /*%%SmartyHeaderCode:90706335255d7ea68406203-67493927%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a20a3e24c1cb7fe032c318e13a752343adc2572b' => 
    array (
      0 => 'view:page/miniframe.html',
      1 => 1402664330,
      2 => 'view',
    ),
  ),
  'nocache_hash' => '90706335255d7ea68406203-67493927',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea684c8197_60125149',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea684c8197_60125149')) {function content_55d7ea684c8197_60125149($_smarty_tpl) {?><!DOCTYPE html>
<html>
 <head><title>MiniFrame</title></head>
 <body></body>
<script type="text/javascript">
window.Widget = parent.window.Widget;
(function(K, $){
	<?php if ($_smarty_tpl->tpl_vars['pager']->value['error']=='101'){?>
        parent.window.__MINI_LOAD = false;
		Widget.Login();
	<?php }elseif($_smarty_tpl->tpl_vars['pager']->value['error']&&$_smarty_tpl->tpl_vars['pager']->value['error']!=200){?>
	Widget.MsgBox.error("<?php echo $_smarty_tpl->tpl_vars['pager']->value['message'];?>
");
	parent.window.__MINI_LOAD = false;
	<?php }else{ ?>
	Widget.MsgBox.success("<?php echo $_smarty_tpl->tpl_vars['pager']->value['message'];?>
");
    setTimeout(function(){
	    <?php if ($_smarty_tpl->tpl_vars['pager']->value['link']){?>parent.window.location = "<?php echo $_smarty_tpl->tpl_vars['pager']->value['link'];?>
";<?php }elseif($_smarty_tpl->tpl_vars['pager']->value['forward']){?>parent.window.location = "<?php echo $_smarty_tpl->tpl_vars['pager']->value['forward'];?>
";<?php }else{ ?>parent.window.location.reload(true);<?php }?>
    }, 1500);
	<?php }?>
})(parent.window.KT, parent.window.jQuery);
</script>
</html>
<?php }} ?>