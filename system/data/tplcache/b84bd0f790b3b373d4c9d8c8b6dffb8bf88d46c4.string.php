<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:21:09
         compiled from "b84bd0f790b3b373d4c9d8c8b6dffb8bf88d46c4" */ ?>
<?php /*%%SmartyHeaderCode:75776828155d7eaa57b7242-64497385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b84bd0f790b3b373d4c9d8c8b6dffb8bf88d46c4' => 
    array (
      0 => 'b84bd0f790b3b373d4c9d8c8b6dffb8bf88d46c4',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '75776828155d7eaa57b7242-64497385',
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
  'unifunc' => 'content_55d7eaa5834b26_37538707',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7eaa5834b26_37538707')) {function content_55d7eaa5834b26_37538707($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.cutstr.php';
?>
                            <li>
                                <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['photo'];?>
" width="150" height="120" /></a><br />
                                <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],20,'..');?>
</a>
                            </li>
                            <?php }} ?>