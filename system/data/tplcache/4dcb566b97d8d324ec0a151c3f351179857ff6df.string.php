<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:31:17
         compiled from "4dcb566b97d8d324ec0a151c3f351179857ff6df" */ ?>
<?php /*%%SmartyHeaderCode:108829701855d7ed05c95682-85892398%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4dcb566b97d8d324ec0a151c3f351179857ff6df' => 
    array (
      0 => '4dcb566b97d8d324ec0a151c3f351179857ff6df',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '108829701855d7ed05c95682-85892398',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ed05ce39b3_24137163',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ed05ce39b3_24137163')) {function content_55d7ed05ce39b3_24137163($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_format')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.format.php';
?>
							<a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'tenders:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
">
								<ul>
                                                                 
									<!-- <li><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline'],"m月d日");?>
</li> -->
									<li><?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['name'])===null||$tmp==='' ? '--' : $tmp);?>
</li>
									<li><?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['area'])===null||$tmp==='' ? '--' : $tmp);?>
㎡</li>
									<li><?php echo $_smarty_tpl->tpl_vars['item']->value['budget_title'];?>
</li>
									<div class="clear"></div>
								</ul>
                                                           
							</a>
                                                       <?php }} ?>