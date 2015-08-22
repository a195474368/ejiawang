<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:20:00
         compiled from "mobile:page/404.html" */ ?>
<?php /*%%SmartyHeaderCode:37212488255d7ea604a8d40-74461147%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9796dd90735b03e75b1918755cd44281e6964f70' => 
    array (
      0 => 'mobile:page/404.html',
      1 => 1420010588,
      2 => 'mobile',
    ),
  ),
  'nocache_hash' => '37212488255d7ea604a8d40-74461147',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea6062de14_08213203',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea6062de14_08213203')) {function content_55d7ea6062de14_08213203($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['mobile']['title'];?>
</title>
    <link type="text/css" rel="stylesheet" href="style/error.css">
    <?php echo $_smarty_tpl->getSubTemplate ("mobile:block/sheader.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</head>
<style>
</style>
<body>
<!--页面内容开始 -->
<div class="warp">
    <!--头部内容开始 -->
    <header >
        <h1 class="logo"><a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
"<img src="images/index_logo.png" alt="logo" /></a></h1>
        <a href="<?php echo smarty_function_link(array('ctl'=>'city'),$_smarty_tpl);?>
" class="city"><?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
<span class="down-triangle1"></span></a>
    </header>
    <!--头部内容结束 -->
<!--search -->
<?php echo $_smarty_tpl->getSubTemplate ("mobile:block/search.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--search end-->
<!--错误开始-->
<div class="mistake"><a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
" class="mistake_bg" style="display:block;"></a></div>
<?php echo $_smarty_tpl->getSubTemplate ("mobile:block/sfooter.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript">setTimeout(function(){window.location="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
";}, 3000);</script>
</body>
</html>
<?php }} ?>