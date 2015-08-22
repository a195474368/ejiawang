<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:19:07
         compiled from "75b160174b2cbedda2d1983a25cfebdfb214bfa9" */ ?>
<?php /*%%SmartyHeaderCode:3709841855d7ea2b96dcf1-99706022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75b160174b2cbedda2d1983a25cfebdfb214bfa9' => 
    array (
      0 => '75b160174b2cbedda2d1983a25cfebdfb214bfa9',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '3709841855d7ea2b96dcf1-99706022',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea2b98c971_44324755',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea2b98c971_44324755')) {function content_55d7ea2b98c971_44324755($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?>
       <li><a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'about','arg0'=>$_smarty_tpl->tpl_vars['item']->value['page']),$_smarty_tpl);?>
">
				<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></li>
                             <?php }} ?>