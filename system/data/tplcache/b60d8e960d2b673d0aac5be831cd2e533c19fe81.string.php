<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 13:21:08
         compiled from "b60d8e960d2b673d0aac5be831cd2e533c19fe81" */ ?>
<?php /*%%SmartyHeaderCode:163041686255d806c4ade377-42754429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b60d8e960d2b673d0aac5be831cd2e533c19fe81' => 
    array (
      0 => 'b60d8e960d2b673d0aac5be831cd2e533c19fe81',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '163041686255d806c4ade377-42754429',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d806c4b1c8f7_91707539',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d806c4b1c8f7_91707539')) {function content_55d806c4b1c8f7_91707539($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?>
                        <li><a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'ask:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['ask_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a><span class="rt"><?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</span></li>
                        <?php }} ?>