<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 13:47:40
         compiled from "8a6f2753585c894e0c25b54986cc36cad779efd9" */ ?>
<?php /*%%SmartyHeaderCode:67111873155d80cfcf14655-60239207%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a6f2753585c894e0c25b54986cc36cad779efd9' => 
    array (
      0 => '8a6f2753585c894e0c25b54986cc36cad779efd9',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '67111873155d80cfcf14655-60239207',
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
  'unifunc' => 'content_55d80cfd03c772_83113805',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d80cfd03c772_83113805')) {function content_55d80cfd03c772_83113805($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?>
                                        <li>
                                            <a href="<?php echo smarty_function_link(array('ctl'=>'mall/product:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['product_id']),$_smarty_tpl);?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['photo'];?>
_thumb.jpg" width="100" height="75"/></a>
                                            <p><a href="<?php echo smarty_function_link(array('ctl'=>'mall/product:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['product_id']),$_smarty_tpl);?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></p>
                                            <p>抢购价&nbsp;：&nbsp;<i>￥<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</i></p>
                                        </li>
                                        <?php }} ?>