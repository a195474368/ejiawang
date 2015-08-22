<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:20:00
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/page/404.html" */ ?>
<?php /*%%SmartyHeaderCode:151588361355d7ea606f1dc4-36067267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6773c696242c4e2bb915e8927b475057c8ce10b6' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/page/404.html',
      1 => 1402664332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151588361355d7ea606f1dc4-36067267',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea60785ef9_31405463',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea60785ef9_31405463')) {function content_55d7ea60785ef9_31405463($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><?php $_smarty_tpl->tpl_vars["seo_title"] = new Smarty_variable("爱咋咋地，页面就是没有找到!", null, 0);?>
<!DOCTYPE html>
<html>
<?php echo $_smarty_tpl->getSubTemplate ("block/sheader.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>
<div id="wrap">
    <?php echo $_smarty_tpl->getSubTemplate ("block/top-header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <!--top end-->
    <div class="w1000 hauto mt20">
        <div class="logo lt hauto">
            <h1><a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/images/logo.jpg" width="255" height="90" /></a></h1>
        </div>
    </div>
    <div class="no_page">
    	<div class="w1000 hauto">
        	<p class="not_img">
            	<img src="/themes/default/static/images/not_ico.png" width="238" height="161" />
            </p>
            <div class="char_bg ml20">
            	<p><font>抱歉，你要找的页面</font><span>没有找到，</span><font>它可能...去打小怪兽了！</font></p>
                <p class="goback"><a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
">返回>></a></p>
            </div>            
        </div>
        <div class="null_foot mt30">
        </div>
    </div>
</div>
</body>
</html>
<?php }} ?>