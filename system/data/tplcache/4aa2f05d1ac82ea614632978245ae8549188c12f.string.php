<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:19:07
         compiled from "4aa2f05d1ac82ea614632978245ae8549188c12f" */ ?>
<?php /*%%SmartyHeaderCode:76682116855d7ea2b93b3c8-47627164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4aa2f05d1ac82ea614632978245ae8549188c12f' => 
    array (
      0 => '4aa2f05d1ac82ea614632978245ae8549188c12f',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '76682116855d7ea2b93b3c8-47627164',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea2b95f753_51772867',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea2b95f753_51772867')) {function content_55d7ea2b95f753_51772867($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?>
        <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'about','arg0'=>$_smarty_tpl->tpl_vars['item']->value['page']),$_smarty_tpl);?>
">
        <font style="font-size:13pt;"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</font></a>
        <?php }} ?>