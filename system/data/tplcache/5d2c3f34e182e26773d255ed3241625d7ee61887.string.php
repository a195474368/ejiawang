<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 13:11:29
         compiled from "5d2c3f34e182e26773d255ed3241625d7ee61887" */ ?>
<?php /*%%SmartyHeaderCode:70205225255d80481d41f52-47930682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d2c3f34e182e26773d255ed3241625d7ee61887' => 
    array (
      0 => '5d2c3f34e182e26773d255ed3241625d7ee61887',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '70205225255d80481d41f52-47930682',
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
  'unifunc' => 'content_55d80481dd8018_50954452',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d80481dd8018_50954452')) {function content_55d80481dd8018_50954452($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
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
                                <a href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
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