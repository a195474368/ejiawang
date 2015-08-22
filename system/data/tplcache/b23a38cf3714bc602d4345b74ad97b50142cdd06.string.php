<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:19:12
         compiled from "b23a38cf3714bc602d4345b74ad97b50142cdd06" */ ?>
<?php /*%%SmartyHeaderCode:65346472355d7ea30026d87-66261012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b23a38cf3714bc602d4345b74ad97b50142cdd06' => 
    array (
      0 => 'b23a38cf3714bc602d4345b74ad97b50142cdd06',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '65346472355d7ea30026d87-66261012',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea3006f062_34563037',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea3006f062_34563037')) {function content_55d7ea3006f062_34563037($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?>
					
					<li><a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'content:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['article_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
<span><?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</span></a></li><?php }} ?>