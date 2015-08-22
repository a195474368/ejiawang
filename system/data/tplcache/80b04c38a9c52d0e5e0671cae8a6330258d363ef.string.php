<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 12:16:42
         compiled from "80b04c38a9c52d0e5e0671cae8a6330258d363ef" */ ?>
<?php /*%%SmartyHeaderCode:92976693255d7f7aaafba15-00806747%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80b04c38a9c52d0e5e0671cae8a6330258d363ef' => 
    array (
      0 => '80b04c38a9c52d0e5e0671cae8a6330258d363ef',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '92976693255d7f7aaafba15-00806747',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7f7aab15115_57704754',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7f7aab15115_57704754')) {function content_55d7f7aab15115_57704754($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?>
					<li><a href="<?php echo smarty_function_link(array('ctl'=>'mall/product','arg0'=>$_smarty_tpl->tpl_vars['item']->value['cat_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></li>
					<?php }} ?>