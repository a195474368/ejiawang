<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:19:23
         compiled from "632d4c58452bfd2ce2895bee0d5e6c94120a109d" */ ?>
<?php /*%%SmartyHeaderCode:162091412655d7ea3b1c2ce2-27516625%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '632d4c58452bfd2ce2895bee0d5e6c94120a109d' => 
    array (
      0 => '632d4c58452bfd2ce2895bee0d5e6c94120a109d',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '162091412655d7ea3b1c2ce2-27516625',
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
  'unifunc' => 'content_55d7ea3b24ef61_27232907',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea3b24ef61_27232907')) {function content_55d7ea3b24ef61_27232907($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?>
                                <li>
                                    <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
"><img alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['photo'];?>
" width="300" /></a>
                                </li>
                                <?php }} ?>