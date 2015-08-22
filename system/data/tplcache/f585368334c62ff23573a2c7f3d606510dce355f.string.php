<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:20:00
         compiled from "f585368334c62ff23573a2c7f3d606510dce355f" */ ?>
<?php /*%%SmartyHeaderCode:163462141955d7ea60bcf029-97044074%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f585368334c62ff23573a2c7f3d606510dce355f' => 
    array (
      0 => 'f585368334c62ff23573a2c7f3d606510dce355f',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '163462141955d7ea60bcf029-97044074',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea60c02232_29218038',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea60c02232_29218038')) {function content_55d7ea60c02232_29218038($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.cutstr.php';
?>
                              <a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'content:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['article_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" ><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],40,'');?>
</a>
                              <?php }} ?>