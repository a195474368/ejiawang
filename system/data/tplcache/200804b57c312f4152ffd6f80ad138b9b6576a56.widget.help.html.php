<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 15:44:13
         compiled from "widget:public/help.html" */ ?>
<?php /*%%SmartyHeaderCode:144159950755d7ea2b7a0cd3-86035949%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '200804b57c312f4152ffd6f80ad138b9b6576a56' => 
    array (
      0 => 'widget:public/help.html',
      1 => 1440228634,
      2 => 'widget',
    ),
  ),
  'nocache_hash' => '144159950755d7ea2b7a0cd3-86035949',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea2b8406d3_39656453',
  'variables' => 
  array (
    'data' => 0,
    'item' => 0,
    'it' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea2b8406d3_39656453')) {function content_55d7ea2b8406d3_39656453($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'F:\\chengshuang\\php\\ejw\\system\\plugins/smarty\\function.link.php';
?><div class="footer_t">
    <div class="link w1000">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['cate_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['item']->value['from']=='help'&&$_smarty_tpl->tpl_vars['item']->value['parent_id']!=0){?>
        <div class="link_l lt mt20 ">
            <span class="red f14"><b><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</b></span><br />
            <?php  $_smarty_tpl->tpl_vars['it'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['content_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it']->key => $_smarty_tpl->tpl_vars['it']->value){
$_smarty_tpl->tpl_vars['it']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['it']->value['cat_id']==$_smarty_tpl->tpl_vars['item']->value['cat_id']){?>
            <a title="<?php echo $_smarty_tpl->tpl_vars['it']->value['title'];?>
" target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'help','arg0'=>$_smarty_tpl->tpl_vars['it']->value['page']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['it']->value['title'];?>
</a><br />
            <?php }?>
            <?php } ?>
        </div>
        <?php }?>
        <?php } ?>
       
       
    </div>
</div><?php }} ?>