<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:25:54
         compiled from "76e5d989421528b583bbe32604a1c54b90b7c4a5" */ ?>
<?php /*%%SmartyHeaderCode:34210988155d7ebc26437d3-77945332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76e5d989421528b583bbe32604a1c54b90b7c4a5' => 
    array (
      0 => '76e5d989421528b583bbe32604a1c54b90b7c4a5',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '34210988155d7ebc26437d3-77945332',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ebc26f5d50_26365527',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ebc26f5d50_26365527')) {function content_55d7ebc26f5d50_26365527($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_format')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.format.php';
if (!is_callable('smarty_modifier_cutstr')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.cutstr.php';
?>
					<li>
						<a href="<?php echo smarty_function_link(array('ctl'=>'tenders:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
" target="_blank"><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline'],'m-d');?>
</a>
						<a href="<?php echo smarty_function_link(array('ctl'=>'tenders:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
" target="_blank"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['name'],3,'**');?>
</a>
						<a href="<?php echo smarty_function_link(array('ctl'=>'tenders:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['area'];?>
㎡</a>
						<a target='_blank' title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'tenders:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
" class="red"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
						<a href="<?php echo smarty_function_link(array('ctl'=>'tenders:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['budget_title'];?>
</a>
						<div class="clear"></div>
					</li>
                                        <?php }} ?>