<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 12:16:42
         compiled from "ed1e21c278516d51ebb7a08258073f679cfb768e" */ ?>
<?php /*%%SmartyHeaderCode:3981836555d7f7aac0ed13-56405908%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed1e21c278516d51ebb7a08258073f679cfb768e' => 
    array (
      0 => 'ed1e21c278516d51ebb7a08258073f679cfb768e',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '3981836555d7f7aac0ed13-56405908',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'iteration' => 0,
    'item' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7f7aac9de53_06315368',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7f7aac9de53_06315368')) {function content_55d7f7aac9de53_06315368($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?>
				<li<?php if ($_smarty_tpl->tpl_vars['iteration']->value%4==0){?> style="border-right:none;"<?php }?>>
					<div class="divhover">
						<a href="<?php echo smarty_function_link(array('ctl'=>'mall/product:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['product_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['photo'];?>
_thumb.jpg" width="150" height="100" /></a>
						<p><a href="<?php echo smarty_function_link(array('ctl'=>'mall/product:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['product_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" target="_blank" class="it_title"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></p>
						<p><del>￥<?php echo $_smarty_tpl->tpl_vars['item']->value['market_price'];?>
</del><b>￥<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</b></p>
						<span class="xinpin"></span>
						<p class="p61">
							<a href="<?php echo smarty_function_link(array('ctl'=>'mall/shop','arg0'=>$_smarty_tpl->tpl_vars['item']->value['shop_id']),$_smarty_tpl);?>
" class="a43"><?php echo $_smarty_tpl->tpl_vars['item']->value['ext']['shop']['name'];?>
</a>
							<a href="<?php echo smarty_function_link(array('ctl'=>'mall/shop','arg0'=>$_smarty_tpl->tpl_vars['item']->value['shop_id']),$_smarty_tpl);?>
" class="a44">查看详情</a>
						</p>
					</div>
				</li>
				<?php }} ?>