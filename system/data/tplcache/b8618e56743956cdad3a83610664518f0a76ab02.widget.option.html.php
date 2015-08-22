<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:20:13
         compiled from "widget:default/option.html" */ ?>
<?php /*%%SmartyHeaderCode:6214882755d7ea6ddac348-51869228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8618e56743956cdad3a83610664518f0a76ab02' => 
    array (
      0 => 'widget:default/option.html',
      1 => 1402664330,
      2 => 'widget',
    ),
  ),
  'nocache_hash' => '6214882755d7ea6ddac348-51869228',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea6ddc9ac6_06648974',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea6ddc9ac6_06648974')) {function content_55d7ea6ddc9ac6_06648974($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/www/wwwroot/www.fzgxw.com/system/libs/smarty/plugins/function.html_options.php';
?><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['data']->value['options'],'selected'=>$_smarty_tpl->tpl_vars['data']->value['value']),$_smarty_tpl);?>
<?php }} ?>