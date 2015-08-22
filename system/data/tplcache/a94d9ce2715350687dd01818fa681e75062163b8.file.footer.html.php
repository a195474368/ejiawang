<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:19:07
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/block/footer.html" */ ?>
<?php /*%%SmartyHeaderCode:20444237755d7ea2b757d19-67441382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a94d9ce2715350687dd01818fa681e75062163b8' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/block/footer.html',
      1 => 1433768548,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20444237755d7ea2b757d19-67441382',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea2b776d64_38582979',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea2b776d64_38582979')) {function content_55d7ea2b776d64_38582979($_smarty_tpl) {?><?php if (!is_callable('smarty_function_widget')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.widget.php';
?>    <div class="line1"></div>
    <!-- help -->
   <div class="footer hauto mb30">
        <!--<?php echo smarty_function_widget(array('id'=>"public/help"),$_smarty_tpl);?>
-->
      <?php echo $_smarty_tpl->getSubTemplate ("block/sfooter.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
    <!-- //help -->
    <!-- 客服 --> 
    <?php echo smarty_function_widget(array('id'=>"public/kefu"),$_smarty_tpl);?>

    <!-- //客服 --> 
</div>
</body>
</html>
<?php }} ?>