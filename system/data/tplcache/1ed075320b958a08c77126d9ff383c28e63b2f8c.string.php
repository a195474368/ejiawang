<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:19:12
         compiled from "1ed075320b958a08c77126d9ff383c28e63b2f8c" */ ?>
<?php /*%%SmartyHeaderCode:204865816855d7ea300a1604-07965959%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ed075320b958a08c77126d9ff383c28e63b2f8c' => 
    array (
      0 => '1ed075320b958a08c77126d9ff383c28e63b2f8c',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '204865816855d7ea300a1604-07965959',
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
  'unifunc' => 'content_55d7ea30119580_14988992',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea30119580_14988992')) {function content_55d7ea30119580_14988992($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.cutstr.php';
?>
					<li>
						<a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'blog','arg0'=>$_smarty_tpl->tpl_vars['item']->value['uid']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['uname'];?>
">
							<img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['face'];?>
" width="50" height="50" />
							<p class="staff-name">设计师姓名：<?php echo $_smarty_tpl->tpl_vars['item']->value['uname'];?>
</p>
							<p>案例数：<span><?php echo $_smarty_tpl->tpl_vars['item']->value['case_num'];?>
</span></p>
							<p>毕业院校：<?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['school'],16,'');?>
</p>
						</a>
					</li>
                                     <?php }} ?>