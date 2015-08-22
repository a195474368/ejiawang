<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:43:29
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/ucenter/member/gold.html" */ ?>
<?php /*%%SmartyHeaderCode:17394285755d7efe164ce85-87190556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64315010877e1665662f0cf8b267bce9728664f5' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/ucenter/member/gold.html',
      1 => 1402664332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17394285755d7efe164ce85-87190556',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MEMBER' => 0,
    'CONFIG' => 0,
    'pay_list' => 0,
    'pay' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7efe176f015_17317332',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7efe176f015_17317332')) {function content_55d7efe176f015_17317332($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("ucenter/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="filter_tabs">
    <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member:logs'),$_smarty_tpl);?>
" class="tab" title="金币日志">金块日志</a><i></i>
    <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member:logs','arg0'=>'in'),$_smarty_tpl);?>
" class="tab" title="冲值记录">冲值记录</a><i></i>
    <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member:logs','arg0'=>'out'),$_smarty_tpl);?>
" class="tab" title="消费记录">消费记录</a><i></i>
    <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member:gold'),$_smarty_tpl);?>
" class="wytw">我要充值</a>
</div>
<h4 class="tips">我的金币:<?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['gold'];?>
</h4>
<?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['gold']['onpay']){?>
<form action="<?php echo smarty_function_link(array('ctl'=>'payment:gold'),$_smarty_tpl);?>
" method="post" >
<table width="100%" border="0" cellspacing="0" class="from">
    <tr>
        <th>冲值金额：</th>
        <td>
            <input type="text" name="amount" class="input w-100" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['gole']['mini_amount'];?>
" />
            <span class="tip-commont">1RMB=<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['gold']['huilv'];?>
金块, 最小充值￥<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['gold']['minpay'];?>
</span>
        </td>
    </tr>
    <tr><th>支付平台：</th>
        <td style="padding:10px">
            <?php  $_smarty_tpl->tpl_vars['pay'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pay']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pay_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['pay']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['pay']->key => $_smarty_tpl->tpl_vars['pay']->value){
$_smarty_tpl->tpl_vars['pay']->_loop = true;
 $_smarty_tpl->tpl_vars['pay']->index++;
 $_smarty_tpl->tpl_vars['pay']->first = $_smarty_tpl->tpl_vars['pay']->index === 0;
?>
            <?php if ($_smarty_tpl->tpl_vars['pay']->value['status']==1){?>
            <label><input type="radio" name="code" value="<?php echo $_smarty_tpl->tpl_vars['pay']->value['payment'];?>
" <?php if ($_smarty_tpl->tpl_vars['pay']->first){?>checked<?php }?>/><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['pay']->value['logo'];?>
" style="width:135px;height:45px;"/></label>
            <?php }?>
            <?php } ?>
        </td>
    </tr>
    <th></th><td><input type="submit" value="保存" class="set_btn" /></td>
    <tr>
</table>
</form>
<?php }else{ ?>
<p class="tips">管理员关闭了金块在线充值</p>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("ucenter/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>