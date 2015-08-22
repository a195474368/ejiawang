<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:21:52
         compiled from "880801d199bfd453c382c416c8d54aef2565fbf7" */ ?>
<?php /*%%SmartyHeaderCode:162439672455d7ead0de2930-72025848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '880801d199bfd453c382c416c8d54aef2565fbf7' => 
    array (
      0 => '880801d199bfd453c382c416c8d54aef2565fbf7',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '162439672455d7ead0de2930-72025848',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company' => 0,
    'pager' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ead0e7a623_03697775',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ead0e7a623_03697775')) {function content_55d7ead0e7a623_03697775($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?>
                                <li>
                                    <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id']),$_smarty_tpl);?>
" ><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['pic'];?>
" width="300" /></a>
                                </li>
                                <?php }} ?>