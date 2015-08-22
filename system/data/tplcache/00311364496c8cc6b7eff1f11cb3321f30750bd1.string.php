<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 13:11:30
         compiled from "00311364496c8cc6b7eff1f11cb3321f30750bd1" */ ?>
<?php /*%%SmartyHeaderCode:22695520355d80482b45bf0-57927672%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00311364496c8cc6b7eff1f11cb3321f30750bd1' => 
    array (
      0 => '00311364496c8cc6b7eff1f11cb3321f30750bd1',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '22695520355d80482b45bf0-57927672',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d80482b69f46_17171038',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d80482b69f46_17171038')) {function content_55d80482b69f46_17171038($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?>
                              <a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'content:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['article_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" ><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                              <?php }} ?>