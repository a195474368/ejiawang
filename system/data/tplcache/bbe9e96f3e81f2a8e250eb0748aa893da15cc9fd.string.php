<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:19:11
         compiled from "bbe9e96f3e81f2a8e250eb0748aa893da15cc9fd" */ ?>
<?php /*%%SmartyHeaderCode:132889829455d7ea2fd7f006-43926917%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbe9e96f3e81f2a8e250eb0748aa893da15cc9fd' => 
    array (
      0 => 'bbe9e96f3e81f2a8e250eb0748aa893da15cc9fd',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '132889829455d7ea2fd7f006-43926917',
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
  'unifunc' => 'content_55d7ea2fe2f528_47396098',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea2fe2f528_47396098')) {function content_55d7ea2fe2f528_47396098($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
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
                                                专访企业：巨嘉装饰集团</a></div>
					   <div class="boss-name"><a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'content:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['article_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
">
                                                   企业CEO：付总</a></div>
					   <p>个人简介：<?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['desc'],100,'...');?>
</p>
					<div class="clear"></div>
					<div class="ask-con">
						<p class="ask">亿家网：请问付总对目前装修行业发展前景状况和未来发展趋势的看法?</p>
						<p class="answer">付总：随着中国的发展，城乡一体化的改造，行业发展前景是非常乐观的，因为国内需求量较大。</p>
						<p class="ask">亿家网:针对目前装修行业之间混战及恶意竞争的现状有什么好的建议?</p>
						<p class="answer">付总：随着时代的变革，跨界经营慢慢在抢占装修市场，装修行业应以合作、整合、联盟、共赢的趋势发展，突出产品自身优势，做最具性价比的产品。</p>
					</div>
                                         <?php }} ?>