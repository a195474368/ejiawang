<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:40:09
         compiled from "403183787ea9ce91b6cc99f0c6e98119b140e4d8" */ ?>
<?php /*%%SmartyHeaderCode:103947424155d7ef19ac7836-81317528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '403183787ea9ce91b6cc99f0c6e98119b140e4d8' => 
    array (
      0 => '403183787ea9ce91b6cc99f0c6e98119b140e4d8',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '103947424155d7ef19ac7836-81317528',
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
  'unifunc' => 'content_55d7ef19afca04_79002452',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ef19afca04_79002452')) {function content_55d7ef19afca04_79002452($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?>
                <li class="aa<?php echo $_smarty_tpl->tpl_vars['item']->value['company_id'];?>
"><a  target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['item']->value['company_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['logo'];?>
" width="150" height="75"></a></li>
                <?php }} ?>