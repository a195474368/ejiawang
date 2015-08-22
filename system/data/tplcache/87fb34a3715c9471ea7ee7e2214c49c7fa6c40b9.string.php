<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 12:16:42
         compiled from "87fb34a3715c9471ea7ee7e2214c49c7fa6c40b9" */ ?>
<?php /*%%SmartyHeaderCode:968494855d7f7aaa9c199-98204197%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87fb34a3715c9471ea7ee7e2214c49c7fa6c40b9' => 
    array (
      0 => '87fb34a3715c9471ea7ee7e2214c49c7fa6c40b9',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '968494855d7f7aaa9c199-98204197',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7f7aaae7748_38234570',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7f7aaae7748_38234570')) {function content_55d7f7aaae7748_38234570($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?>
				<li>
					<p><a href="<?php echo smarty_function_link(array('ctl'=>'mall/shop','arg0'=>$_smarty_tpl->tpl_vars['item']->value['shop_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['logo'];?>
" width="105" height="45" /></a></p>
					<p><a href="<?php echo smarty_function_link(array('ctl'=>'mall/shop','arg0'=>$_smarty_tpl->tpl_vars['item']->value['shop_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></p>
				</li>
				<?php }} ?>