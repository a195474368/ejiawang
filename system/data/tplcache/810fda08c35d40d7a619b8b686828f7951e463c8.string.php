<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:40:10
         compiled from "810fda08c35d40d7a619b8b686828f7951e463c8" */ ?>
<?php /*%%SmartyHeaderCode:52261240955d7ef1a534e77-44776455%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '810fda08c35d40d7a619b8b686828f7951e463c8' => 
    array (
      0 => '810fda08c35d40d7a619b8b686828f7951e463c8',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '52261240955d7ef1a534e77-44776455',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'photo' => 0,
    'pager' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ef1a60f823_36087508',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ef1a60f823_36087508')) {function content_55d7ef1a60f823_36087508($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_cutstr')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.cutstr.php';
if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?>
                            <div class="design_idea lt">
                                <p><font class="black"><b>[设计理念]</b></font>:<?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['intro'],25,'');?>
</p>
                                <?php  $_smarty_tpl->tpl_vars['photo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['photo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['ext']['photos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['photo']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->key => $_smarty_tpl->tpl_vars['photo']->value){
$_smarty_tpl->tpl_vars['photo']->_loop = true;
 $_smarty_tpl->tpl_vars['photo']->index++;
?>
                                <p class="case_p lt">
                                    <a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
"  title="<?php echo $_smarty_tpl->tpl_vars['photo']->value['title'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo'];?>
_thumb.jpg" width="120" height="95" /></a>
                                    <span></span>
                                    <span class="text1"><a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
"  title="<?php echo $_smarty_tpl->tpl_vars['photo']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['photo']->value['title'];?>
</a></span>
                                </p>
                                <?php if ($_smarty_tpl->tpl_vars['photo']->index>0){?><?php break 1?><?php }?>
                                <?php } ?>
                                <div class="cl"></div>
                                <p class="simple mt10"><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value['ext']['attrs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><span class="simple_style lt"><a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
"  title="<?php echo $_smarty_tpl->tpl_vars['photo']->value['title'];?>
"  target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</a></span><?php } ?></p>
                            </div>
                            <?php }} ?>