<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 13:11:30
         compiled from "3f2a9245e91215d09256627d62f6c5de1c642062" */ ?>
<?php /*%%SmartyHeaderCode:36226140355d80482689317-01965265%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f2a9245e91215d09256627d62f6c5de1c642062' => 
    array (
      0 => '3f2a9245e91215d09256627d62f6c5de1c642062',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '36226140355d80482689317-01965265',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'pager' => 0,
    'photo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d80482740e37_67990486',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d80482740e37_67990486')) {function content_55d80482740e37_67990486($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?>
                    <div class="decoration_case_b_r_l lt hauto">
                        <a href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" width="240" height="295"/></a>
                        <p class="p1 none"></p>
                        <p class="text none"><a href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></p>
                    </div>
                    <div class="decoration_case_b_r_r lt hauto">
                        <ul>
                            <?php  $_smarty_tpl->tpl_vars['photo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['photo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['ext']['photos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['photo']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->key => $_smarty_tpl->tpl_vars['photo']->value){
$_smarty_tpl->tpl_vars['photo']->_loop = true;
 $_smarty_tpl->tpl_vars['photo']->iteration++;
?>
                            <li>
                                <a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo'];?>
_thumb.jpg" width="180" height="145"/></a>
                                <p class="p1 none"></p>
                                <p class="text none"><a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['photo']->value['title'];?>
</a></p>
                            </li>
                            <?php if ($_smarty_tpl->tpl_vars['photo']->iteration>5){?><?php break 1?><?php }?>
                            <?php } ?>
                        </ul>
                    </div>
                    <?php }} ?>