<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:19:11
         compiled from "3b250d4bd80f1b1a418a265c601bb5875c076fda" */ ?>
<?php /*%%SmartyHeaderCode:106285102155d7ea2fe52764-36292599%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b250d4bd80f1b1a418a265c601bb5875c076fda' => 
    array (
      0 => '3b250d4bd80f1b1a418a265c601bb5875c076fda',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '106285102155d7ea2fe52764-36292599',
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
  'unifunc' => 'content_55d7ea2ff0a2c6_99694716',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea2ff0a2c6_99694716')) {function content_55d7ea2ff0a2c6_99694716($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.cutstr.php';
?>
                                           <a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'content:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['article_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
">
                                           <img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" width="145" height="145" /></a>
                                        <div class="boss-enter"><a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'content:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['article_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
">
                                                专访企业：鲁公大宅装饰有限公司</a></div>
					   <div class="boss-name"><a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'content:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['article_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
">
                                                   企业总监：孙海松</a></div>
					   <p>个人简介：<?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['desc'],100,'...');?>
</p>
					<div class="clear"></div>
					<div class="ask-con">
						<p class="ask">亿家网：请问—孙总监，您认为目前在装修行业里，设计师扮演的是一个什么样的角色？</p>
						<p class="answer">孙总监：其实设计师是一个很重要的角色。除了参谋以外，还是一个重要的参与者，能给业主提供专业的参考指导。</p>
						<p class="ask">亿家网：请问—总监，如何阐述设计师在装修工程里面的重要性？</p>
						<p class="answer">孙总监：可以这样说，装修如果没有设计师，那其它工作都没法做。设计师要把业主的要求，装修风格，材料、使用功能都安排好了，施工队才能施工。就好比，一条新闻如果没有记者先写好了，那广播电视是无法播出一样。</p>
					</div>
                                         <?php }} ?>