<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:19:13
         compiled from "c172f041b796d382c9ce30a59f0aeffcd2a33405" */ ?>
<?php /*%%SmartyHeaderCode:75629656255d7ea31a29258-81240179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c172f041b796d382c9ce30a59f0aeffcd2a33405' => 
    array (
      0 => 'c172f041b796d382c9ce30a59f0aeffcd2a33405',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '75629656255d7ea31a29258-81240179',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea31a4fa18_24516948',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea31a4fa18_24516948')) {function content_55d7ea31a4fa18_24516948($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?>
        <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'home:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>   
        <?php }} ?>