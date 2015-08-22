<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 15:44:13
         compiled from "widget:public/kefu.html" */ ?>
<?php /*%%SmartyHeaderCode:199658507855d7ea2b9968c2-14748931%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7c6f063a2cf3c3137aee3a7db515e9913c4e874' => 
    array (
      0 => 'widget:public/kefu.html',
      1 => 1440228634,
      2 => 'widget',
    ),
  ),
  'nocache_hash' => '199658507855d7ea2b9968c2-14748931',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea2b9b9fb0_00000566',
  'variables' => 
  array (
    'CONFIG' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea2b9b9fb0_00000566')) {function content_55d7ea2b9b9fb0_00000566($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_qq')) include 'F:\\chengshuang\\php\\ejw\\system\\plugins/smarty\\modifier.qq.php';
?><!--<div class="kefu">
    <div class="cl"></div>
    <div class="kefu_b" style="height:290px;">
        <div class="kefu_b_t"></div>
        <ul><li><?php echo smarty_modifier_qq((($tmp = @$_smarty_tpl->tpl_vars['CONFIG']->value['site']['kfqq'])===null||$tmp==='' ? "800070067" : $tmp));?>
</li></ul>
        <a href="http://www.ijh.cc" class="jhwx"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/images/jhwx.jpg" width="80" height="80" /></a><br />
        <a href="http://www.ijh.cc">江湖科技微信</a>
    </div>
</div>
<div class="mfzxzx none"></div>
<script type="text/javascript">
(function(K, $){
//客服
$(".kefu_b_t").click(function() {$(".kefu").hide();$(".mfzxzx").show();});
$(".mfzxzx").click(function(){$(".kefu").show();$(".mfzxzx").hide();});
})(window.KT, window.jQuery);
</script>--><?php }} ?>