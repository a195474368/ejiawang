<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 13:11:30
         compiled from "8be2718598a6f0e35b10be093ff5c05cb2602d2d" */ ?>
<?php /*%%SmartyHeaderCode:213234162355d804829f7250-09484198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8be2718598a6f0e35b10be093ff5c05cb2602d2d' => 
    array (
      0 => '8be2718598a6f0e35b10be093ff5c05cb2602d2d',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '213234162355d804829f7250-09484198',
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
  'unifunc' => 'content_55d80482ab7a95_52079855',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d80482ab7a95_52079855')) {function content_55d80482ab7a95_52079855($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?>
                    <div class="decoration_case_b_r_l lt hauto">
                        <a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" width="240" height="295"/></a>
                        <p class="p1 none"></p>
                        <p class="text none"><a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" target="_blank"  href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
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
                                <p class="text none"><a href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['photo']->value['title'];?>
</a></p>
                            </li>
                            <?php if ($_smarty_tpl->tpl_vars['photo']->iteration>5){?><?php break 1?><?php }?>
                            <?php } ?>
                        </ul>
                    </div>
                    <?php }} ?>