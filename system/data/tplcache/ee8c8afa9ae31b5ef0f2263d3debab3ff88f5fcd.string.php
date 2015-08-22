<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:19:28
         compiled from "ee8c8afa9ae31b5ef0f2263d3debab3ff88f5fcd" */ ?>
<?php /*%%SmartyHeaderCode:187139706155d7ea402ddb91-76495308%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee8c8afa9ae31b5ef0f2263d3debab3ff88f5fcd' => 
    array (
      0 => 'ee8c8afa9ae31b5ef0f2263d3debab3ff88f5fcd',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '187139706155d7ea402ddb91-76495308',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea40312f75_15333766',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea40312f75_15333766')) {function content_55d7ea40312f75_15333766($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_cutstr')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.cutstr.php';
if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?>
						<div class="host-title">                                                                      
							 <?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],22,'');?>
              
						</div>
						<div class="host-dis">
							报名立减<span><?php echo $_smarty_tpl->tpl_vars['item']->value['jieyue'];?>
</span>元
                                                        <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'home:tuanDetail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['tuan_id']),$_smarty_tpl);?>
"><input type="button" class="host-input" value="我要报名" />
                                                        </a></div>
                                            <?php }} ?>