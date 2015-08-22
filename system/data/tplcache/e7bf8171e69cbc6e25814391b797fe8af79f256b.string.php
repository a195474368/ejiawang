<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:50:51
         compiled from "e7bf8171e69cbc6e25814391b797fe8af79f256b" */ ?>
<?php /*%%SmartyHeaderCode:135624626455d7f19bdb1a41-38554056%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7bf8171e69cbc6e25814391b797fe8af79f256b' => 
    array (
      0 => 'e7bf8171e69cbc6e25814391b797fe8af79f256b',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '135624626455d7f19bdb1a41-38554056',
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
  'unifunc' => 'content_55d7f19be14cd9_13905538',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7f19be14cd9_13905538')) {function content_55d7f19be14cd9_13905538($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?>
                    <li>
                         <p>
                            <a href="<?php echo smarty_function_link(array('ctl'=>'mall/product:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['product_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['photo'];?>
_thumb.jpg" width="65" height="45"/></a>
                            <a href="<?php echo smarty_function_link(array('ctl'=>'mall/product:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['product_id']),$_smarty_tpl);?>
" class="product" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                            <span class="cl block h10"></span>
                            <span>市场价&nbsp;：&nbsp;<del>￥<?php echo $_smarty_tpl->tpl_vars['item']->value['market_price'];?>
</del> </span>
                            <span>现价&nbsp;：&nbsp;<i>￥<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</i></span>
                            <span class="h5"></span>
                        </p>
                    </li>
                    <?php }} ?>