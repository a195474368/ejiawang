<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:19:10
         compiled from "9bea7d96b4b19e110485185b724d6444a4f5e788" */ ?>
<?php /*%%SmartyHeaderCode:161553342855d7ea2e6aee48-03741701%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bea7d96b4b19e110485185b724d6444a4f5e788' => 
    array (
      0 => '9bea7d96b4b19e110485185b724d6444a4f5e788',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '161553342855d7ea2e6aee48-03741701',
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
  'unifunc' => 'content_55d7ea2e6e3b56_09118393',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea2e6e3b56_09118393')) {function content_55d7ea2e6e3b56_09118393($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?>
                <li class="aa<?php echo $_smarty_tpl->tpl_vars['item']->value['company_id'];?>
" ><a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['item']->value['company_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['logo'];?>
" width="150" height="75"></a></li>
                <?php }} ?>