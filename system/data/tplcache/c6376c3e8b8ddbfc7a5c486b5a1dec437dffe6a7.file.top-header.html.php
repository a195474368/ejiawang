<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:26:35
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/block/top-header.html" */ ?>
<?php /*%%SmartyHeaderCode:181122958755d7ebebae8973-01639507%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6376c3e8b8ddbfc7a5c486b5a1dec437dffe6a7' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/block/top-header.html',
      1 => 1402664332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181122958755d7ebebae8973-01639507',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MEMBER' => 0,
    'COOKIE' => 0,
    'pager' => 0,
    'CONFIG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ebebb8af64_51856982',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ebebb8af64_51856982')) {function content_55d7ebebb8af64_51856982($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><div class="top">
    <div class="information_top w1000">
        <div class="information_t_l lt">
            <?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['uname']){?>
            <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['uname'];?>
</a>！您好 <a href="<?php echo smarty_function_link(array('ctl'=>'passport:loginout'),$_smarty_tpl);?>
">退出</a>
            <?php }else{ ?>
            <a href="<?php echo smarty_function_link(array('ctl'=>'passport'),$_smarty_tpl);?>
">[登录]</a><a href="<?php echo smarty_function_link(array('ctl'=>'passport-signup'),$_smarty_tpl);?>
">&nbsp;&nbsp;[注册]</a>
            <?php }?>
        </div>
        <div class="information_r rt">
            <ul>
                <li><a href="<?php echo smarty_function_link(array('ctl'=>'mall/cart'),$_smarty_tpl);?>
">购物车<?php if ($_smarty_tpl->tpl_vars['COOKIE']->value['CART_NUMBER']){?>(<?php echo $_smarty_tpl->tpl_vars['COOKIE']->value['CART_NUMBER'];?>
)<?php }?></a>&nbsp;&nbsp;&nbsp;|</li>
                <li><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/order'),$_smarty_tpl);?>
">我的订单</a>&nbsp;&nbsp;&nbsp;|</li>
                <li><a href="###">快捷导航</a><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/images/xia_ico.jpg" /></li>
                <li><a>咨询热线</a><span>&nbsp;<b><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['phone'];?>
</b></span></li>
            </ul>
        </div>
    </div>
</div><?php }} ?>