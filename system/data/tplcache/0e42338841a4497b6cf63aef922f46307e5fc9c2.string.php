<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:58:16
         compiled from "0e42338841a4497b6cf63aef922f46307e5fc9c2" */ ?>
<?php /*%%SmartyHeaderCode:209551711555d7f35841f657-51556357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e42338841a4497b6cf63aef922f46307e5fc9c2' => 
    array (
      0 => '0e42338841a4497b6cf63aef922f46307e5fc9c2',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '209551711555d7f35841f657-51556357',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7f3584a1733_04774267',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7f3584a1733_04774267')) {function content_55d7f3584a1733_04774267($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.cutstr.php';
?>
					<li>
						
						<a href="<?php echo smarty_function_link(array('ctl'=>'tenders:detaill','arg0'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
" target="_blank"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['name'],3,'**');?>
</a>
						<a href="<?php echo smarty_function_link(array('ctl'=>'tenders:detaill','arg0'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['area'];?>
㎡</a>
						<a target='_blank' title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'tenders:detaill','arg0'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
" class="red"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
						<a href="<?php echo smarty_function_link(array('ctl'=>'tenders:detaill','arg0'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['budget_title'];?>
</a>
						<a href="<?php echo smarty_function_link(array('ctl'=>'tenders:detaill','arg0'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
" target="_blank">详情点击</a>
						<div class="clear"></div>
					</li>
                                        <?php }} ?>