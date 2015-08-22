<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 14:25:19
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/block/mini-footer.html" */ ?>
<?php /*%%SmartyHeaderCode:107043023655d815cf8165a5-01446285%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2284d49b4a3ba1897e25aa3d52bddee7a3124098' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/block/mini-footer.html',
      1 => 1402664332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107043023655d815cf8165a5-01446285',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d815cf838b42_58928504',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d815cf838b42_58928504')) {function content_55d815cf838b42_58928504($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['request']->value['MINI']!='load'){?>
<?php if ($_smarty_tpl->tpl_vars['request']->value['MINI']=='LoadIframe'){?>
<script type="text/javascript">window.parent.Widget.MsgBox.hide();if(typeof(window.parent.Dialog_Iframe) == 'object'){window.parent.Dialog_Iframe.dialog({height: $("body").height()+60});}</script>
<?php }?>
		</div>
	</body>
</html>
<?php }?><?php }} ?>