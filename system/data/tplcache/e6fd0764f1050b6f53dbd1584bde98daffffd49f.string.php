<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:19:16
         compiled from "e6fd0764f1050b6f53dbd1584bde98daffffd49f" */ ?>
<?php /*%%SmartyHeaderCode:54985150555d7ea341a41b8-42391760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6fd0764f1050b6f53dbd1584bde98daffffd49f' => 
    array (
      0 => 'e6fd0764f1050b6f53dbd1584bde98daffffd49f',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '54985150555d7ea341a41b8-42391760',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea341d0037_54678830',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea341d0037_54678830')) {function content_55d7ea341d0037_54678830($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?>
 <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'about','arg0'=>$_smarty_tpl->tpl_vars['item']->value['page']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
        <?php }} ?>