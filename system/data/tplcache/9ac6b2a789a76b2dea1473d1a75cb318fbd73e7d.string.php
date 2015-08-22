<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:19:11
         compiled from "9ac6b2a789a76b2dea1473d1a75cb318fbd73e7d" */ ?>
<?php /*%%SmartyHeaderCode:94548492355d7ea2fc971f1-34353230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ac6b2a789a76b2dea1473d1a75cb318fbd73e7d' => 
    array (
      0 => '9ac6b2a789a76b2dea1473d1a75cb318fbd73e7d',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '94548492355d7ea2fc971f1-34353230',
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
  'unifunc' => 'content_55d7ea2fd60917_96525988',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea2fd60917_96525988')) {function content_55d7ea2fd60917_96525988($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_format')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.format.php';
if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?>
                                  <?php if ($_smarty_tpl->tpl_vars['item']->value['jf']<(smarty_modifier_format('__TIME',"y-m-d"))){?>
                                    <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'home:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['face_pic'];?>
" width="260" height="210" /></a>
					<div class="rows-host-text">
						<a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'home:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
						<p>设计方案：<span><?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['case_num'])===null||$tmp==='' ? '--' : $tmp);?>
</span>套</p>
                                                <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'home:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
"><input type="submit" class="rows-submit" value="前往了解" /></a>
					</div>
                                <?php }?>
                                        <?php }} ?>