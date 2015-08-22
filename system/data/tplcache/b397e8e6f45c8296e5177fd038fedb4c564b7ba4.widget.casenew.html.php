<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:20:34
         compiled from "widget:case/casenew.html" */ ?>
<?php /*%%SmartyHeaderCode:70937539255d7ea82e005e1-56085790%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b397e8e6f45c8296e5177fd038fedb4c564b7ba4' => 
    array (
      0 => 'widget:case/casenew.html',
      1 => 1402664330,
      2 => 'widget',
    ),
  ),
  'nocache_hash' => '70937539255d7ea82e005e1-56085790',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'item' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea82eb95e0_65909737',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea82eb95e0_65909737')) {function content_55d7ea82eb95e0_65909737($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.cutstr.php';
?><h2><a title='最新上传方案' href="<?php echo smarty_function_link(array('ctl'=>'case'),$_smarty_tpl);?>
">最新上传设计方案</a></h2>
<div class="home_buildings_laest_designfa_show hauto bgwhite mt15">
    <ul>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['case_new']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <li>
            <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'home:caseDetail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['home_id'],'arg1'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['photo'];?>
_small.jpg" width="80" height="50" /></a>
            <p>
                <font><a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'home:caseDetail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['home_id'],'arg1'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
" class="red"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],18,'');?>
</a></font><br />
                <font>提供者：<a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['data']->value['case_new_company_list'][$_smarty_tpl->tpl_vars['item']->value['company_id']]['name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['item']->value['company_id']),$_smarty_tpl);?>
" class="black8"><?php echo $_smarty_tpl->tpl_vars['data']->value['case_new_company_list'][$_smarty_tpl->tpl_vars['item']->value['company_id']]['sort_name'];?>
</a></font><br />
                <font>图片：（<?php echo $_smarty_tpl->tpl_vars['item']->value['photos'];?>
）张</font>
            </p>
        </li>
        <?php } ?>

    </ul>
</div><?php }} ?>