<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 12:00:43
         compiled from "4f50924da36ba4942cc7a587a6f58bb0b0710be3" */ ?>
<?php /*%%SmartyHeaderCode:71225161455d7f3eb00f8d1-28355755%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f50924da36ba4942cc7a587a6f58bb0b0710be3' => 
    array (
      0 => '4f50924da36ba4942cc7a587a6f58bb0b0710be3',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '71225161455d7f3eb00f8d1-28355755',
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
  'unifunc' => 'content_55d7f3eb0c5132_73861852',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7f3eb0c5132_73861852')) {function content_55d7f3eb0c5132_73861852($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?>
                    <li>
                        <a href="<?php echo smarty_function_link(array('ctl'=>'home:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
" title='<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
'><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['face_pic'];?>
" width="120" height="100" /></a>
                        <p>
                            <a href="<?php echo smarty_function_link(array('ctl'=>'home:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
" title='<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
'  class="f16 ftw blackb"><font><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</font></a><br />
                            <font class="f12 ftw blackb">均 价：</font><font class="f12 red"><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</font><br />   
                            <font class="f12 ftw blackb">开发商：</font><?php echo $_smarty_tpl->tpl_vars['item']->value['kf'];?>
<br />
                            <font class="f12 ftw blackb">地址：</font><?php echo $_smarty_tpl->tpl_vars['item']->value['addr'];?>

                        </p>
                    </li>
                    <?php }} ?>