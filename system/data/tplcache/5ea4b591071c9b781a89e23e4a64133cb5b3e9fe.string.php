<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:20:56
         compiled from "5ea4b591071c9b781a89e23e4a64133cb5b3e9fe" */ ?>
<?php /*%%SmartyHeaderCode:24447298755d7ea9823b923-03940053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ea4b591071c9b781a89e23e4a64133cb5b3e9fe' => 
    array (
      0 => '5ea4b591071c9b781a89e23e4a64133cb5b3e9fe',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '24447298755d7ea9823b923-03940053',
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
  'unifunc' => 'content_55d7ea9826e943_75180804',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea9826e943_75180804')) {function content_55d7ea9826e943_75180804($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?>
                <li><a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['item']->value['company_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['logo'];?>
" width="150" height="75"></a></li>
                <?php }} ?>