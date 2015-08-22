<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 15:44:13
         compiled from "F:\chengshuang\php\ejw\themes\default\block/footer.html" */ ?>
<?php /*%%SmartyHeaderCode:767955d8284d98c316-83299213%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a210cbe2753fba992fb4b940e6bc240dfa2f4512' => 
    array (
      0 => 'F:\\chengshuang\\php\\ejw\\themes\\default\\block/footer.html',
      1 => 1440228720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '767955d8284d98c316-83299213',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d8284d99fb94_63277476',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d8284d99fb94_63277476')) {function content_55d8284d99fb94_63277476($_smarty_tpl) {?><?php if (!is_callable('smarty_function_widget')) include 'F:\\chengshuang\\php\\ejw\\system\\plugins/smarty\\function.widget.php';
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