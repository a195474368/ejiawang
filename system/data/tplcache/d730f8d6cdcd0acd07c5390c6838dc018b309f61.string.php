<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:25:54
         compiled from "d730f8d6cdcd0acd07c5390c6838dc018b309f61" */ ?>
<?php /*%%SmartyHeaderCode:95426748555d7ebc280dc26-77902359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd730f8d6cdcd0acd07c5390c6838dc018b309f61' => 
    array (
      0 => 'd730f8d6cdcd0acd07c5390c6838dc018b309f61',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '95426748555d7ebc280dc26-77902359',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ebc28350f7_23060982',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ebc28350f7_23060982')) {function content_55d7ebc28350f7_23060982($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?>
                                  <li> <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'about','arg0'=>$_smarty_tpl->tpl_vars['item']->value['page']),$_smarty_tpl);?>
">
				      <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></li>
                           <?php }} ?>