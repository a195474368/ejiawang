<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:50:51
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/mall/product/filter.html" */ ?>
<?php /*%%SmartyHeaderCode:128739238955d7f19be3eac2-15606416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4516704f92ee3b0e0b2deb0dbd792891de24e66b' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/mall/product/filter.html',
      1 => 1402664332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128739238955d7f19be3eac2-15606416',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'v' => 0,
    'vv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7f19c032e82_74679545',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7f19c032e82_74679545')) {function content_55d7f19c032e82_74679545($_smarty_tpl) {?><style type="text/css">
	.mall_list_r_b_title a.on{background:#E63337;color:#FFF;}
</style>
<div class="mall_list_r_b_title">
	<h2 class="h10"></h2>
	<h3><?php echo $_smarty_tpl->tpl_vars['data']->value['top_cate']['title'];?>
</h3>
	<p><label>分类：</label><a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['cate_all_link'];?>
" <?php if ($_smarty_tpl->tpl_vars['data']->value['cat_id']==$_smarty_tpl->tpl_vars['data']->value['top_cate']['cat_id']){?>class="on"<?php }?>>全部</a>
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['cates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['link'];?>
" <?php if ($_smarty_tpl->tpl_vars['data']->value['cat_id']==$_smarty_tpl->tpl_vars['v']->value['cat_id']){?>class="on"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a><?php } ?>
	</p>
	<?php if ($_smarty_tpl->tpl_vars['data']->value['brands']){?>
	<p><label>品牌：</label>
		<a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['brand_all_link'];?>
" <?php if (empty($_smarty_tpl->tpl_vars['data']->value['brand_id'])){?>class="on"<?php }?>>全部</a>
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['link'];?>
" <?php if ($_smarty_tpl->tpl_vars['data']->value['brand_id']==$_smarty_tpl->tpl_vars['v']->value['brand_id']){?>class="on"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
		<?php } ?>
	</p>
	<?php }?>
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['attrs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
	<p><label><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
：</label>
        <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['link'];?>
" <?php if (empty($_smarty_tpl->tpl_vars['v']->value['checked'])){?>class="on"<?php }?>>全部</a>
		<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['vv']->value['link'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['vv']->value['attr_value_id'],$_smarty_tpl->tpl_vars['data']->value['attr_values'])){?>class="on"<?php }?>><?php echo $_smarty_tpl->tpl_vars['vv']->value['title'];?>
</a>
		<?php } ?>
	</p>
	<?php } ?>
</div><?php }} ?>