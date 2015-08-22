<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:19:28
         compiled from "584007cac5dc16c480fe0c65cc1ca604adbfdeec" */ ?>
<?php /*%%SmartyHeaderCode:21756688755d7ea40559679-78557186%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '584007cac5dc16c480fe0c65cc1ca604adbfdeec' => 
    array (
      0 => '584007cac5dc16c480fe0c65cc1ca604adbfdeec',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '21756688755d7ea40559679-78557186',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'areaList' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea4058d451_58103325',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea4058d451_58103325')) {function content_55d7ea4058d451_58103325($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_cutstr')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.cutstr.php';
?>
							<p><?php echo $_smarty_tpl->tpl_vars['areaList']->value[$_smarty_tpl->tpl_vars['item']->value['area_id']]['area_name'];?>
-<?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['home_name'],14);?>
</p>
							<p><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['name'],16);?>
</p>
                                                        <?php }} ?>