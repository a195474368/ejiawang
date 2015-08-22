<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 12:47:10
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/ucenter/order/index.html" */ ?>
<?php /*%%SmartyHeaderCode:198600042555d7feceef30f6-39450129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e01e4eac1a1356e48469347d071db395f617c57f' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/ucenter/order/index.html',
      1 => 1402664332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198600042555d7feceef30f6-39450129',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'items' => 0,
    'order' => 0,
    'shop_list' => 0,
    'product_list' => 0,
    'product' => 0,
    'first' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7fecf283f87_61971106',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7fecf283f87_61971106')) {function content_55d7fecf283f87_61971106($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_format')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("ucenter/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="filter_tabs">
<a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/order:index'),$_smarty_tpl);?>
" class="tab<?php if ($_smarty_tpl->tpl_vars['pager']->value['type']=='all'){?> on<?php }?>">全部订单</a><i></i>
<a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/order:index','arg0'=>'unpay'),$_smarty_tpl);?>
" class="tab<?php if ($_smarty_tpl->tpl_vars['pager']->value['type']=='unpay'){?> on<?php }?>">未付款</a><i></i>
<a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/order:index','arg0'=>'payed'),$_smarty_tpl);?>
" class="tab<?php if ($_smarty_tpl->tpl_vars['pager']->value['type']=='payed'){?> on<?php }?>">已付款</a><i></i>
<a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/order:index','arg0'=>'ship'),$_smarty_tpl);?>
" class="tab<?php if ($_smarty_tpl->tpl_vars['pager']->value['type']=='ship'){?> on<?php }?>">待收货</a><i></i>
<a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/order:index','arg0'=>'finish'),$_smarty_tpl);?>
" class="tab<?php if ($_smarty_tpl->tpl_vars['pager']->value['type']=='finish'){?> on<?php }?>">已完成</a><i></i>
</div>

<table width="100%" border="0" cellspacing="0" cellpadding="0" class="order_table table">
    <?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value){
$_smarty_tpl->tpl_vars['order']->_loop = true;
?>
    <tbody class="tbody">
    <tr class="th">
        <td colspan="10">
            <label class="no">订单号：<b class="red"><?php echo $_smarty_tpl->tpl_vars['order']->value['order_no'];?>
</b></label>
            <label class="time">下单时间：<?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['order']->value['dateline'],"Y-m-d H:i:s");?>
</label>
            <label class="shop">商家：<a href="<?php echo smarty_function_link(array('ctl'=>'mall/shop','arg0'=>$_smarty_tpl->tpl_vars['order']->value['shop_id']),$_smarty_tpl);?>
" target="_blank" /><?php echo (($tmp = @$_smarty_tpl->tpl_vars['shop_list']->value[$_smarty_tpl->tpl_vars['order']->value['shop_id']]['title'])===null||$tmp==='' ? '--' : $tmp);?>
</a></label>
            <span class="order"><a href="<?php echo smarty_function_link(array('ctl'=>'mall/order:detail','arg0'=>$_smarty_tpl->tpl_vars['order']->value['order_no']),$_smarty_tpl);?>
" target="_blank">订单详情</a></span>
        </td>
    </tr>
    <?php $_smarty_tpl->tpl_vars["first"] = new Smarty_variable(true, null, 0);?>
    <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['product']->value['order_id']==$_smarty_tpl->tpl_vars['order']->value['order_id']){?>
    <tr class="td">
        <td class="w-50">
            <a href="<?php echo smarty_function_link(array('ctl'=>'mall/product:detail','arg0'=>$_smarty_tpl->tpl_vars['product']->value['product_id']),$_smarty_tpl);?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['product']->value['photo'];?>
_small.jpg" photo="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['product']->value['photo'];?>
_thumb.jpg" class="wh-50" style="margin:3px;"></a>
        </td>
        <td><a href="<?php echo smarty_function_link(array('ctl'=>'mall/product:detail','arg0'=>$_smarty_tpl->tpl_vars['product']->value['product_id']),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['product']->value['title'];?>
</a></td>
        <td><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
 x <?php echo $_smarty_tpl->tpl_vars['product']->value['number'];?>
</td>
        <?php if ($_smarty_tpl->tpl_vars['first']->value){?>
        <td rowspan="<?php echo $_smarty_tpl->tpl_vars['order']->value['product_number'];?>
" class="pay-status w-150">
        ￥<?php echo $_smarty_tpl->tpl_vars['order']->value['amount'];?>
<span class="gray">(<?php if ($_smarty_tpl->tpl_vars['order']->value['freight']>0){?>运费：￥<?php echo $_smarty_tpl->tpl_vars['order']->value['freight'];?>
<?php }else{ ?>包邮<?php }?>)</span><br/>
         <?php if ($_smarty_tpl->tpl_vars['order']->value['order_status']<2&&$_smarty_tpl->tpl_vars['order']->value['order_status']>=0){?>
            <?php if ($_smarty_tpl->tpl_vars['order']->value['pay_status']){?><b><a>已经支付</a></b><?php }else{ ?><a href="<?php echo smarty_function_link(array('ctl'=>'mall/order:payment','arg0'=>$_smarty_tpl->tpl_vars['order']->value['order_no']),$_smarty_tpl);?>
" target="_blank" class="btn_pay">立即支付<?php }?>
         <?php }?>
        </td>
        <td rowspan="<?php echo $_smarty_tpl->tpl_vars['order']->value['product_number'];?>
" class="order-status w-150">
            <?php if ($_smarty_tpl->tpl_vars['order']->value['order_status']==2){?><b class="gray">订单完成</b>
            <?php }elseif($_smarty_tpl->tpl_vars['order']->value['order_status']==1){?><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/order:update','arg0'=>'ship','arg1'=>$_smarty_tpl->tpl_vars['order']->value['order_no']),$_smarty_tpl);?>
" mini-act="确认收货" class="btn_ship">确认收货</a>
            <?php }elseif($_smarty_tpl->tpl_vars['order']->value['order_status']<0){?><b class="gray">订单已经取消</b>
            <?php }elseif(empty($_smarty_tpl->tpl_vars['order']->value['pay_status'])){?><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/order:update','arg0'=>'cancel','arg1'=>$_smarty_tpl->tpl_vars['order']->value['order_no']),$_smarty_tpl);?>
" mini-act="取消订单" class="btn_cancel">取消订单</span>
            <?php }else{ ?><b class="gray">等待卖家发货</b>
            <?php }?>
        </td>
        <?php }?>
    </tr>
    <?php $_smarty_tpl->tpl_vars["first"] = new Smarty_variable(false, null, 0);?>
    <?php }?>
    <?php } ?>
    </tbody>
    <tr><td colspan="10" style="border:none;height:5px">&nbsp;</td></tr>
    <?php } ?>
</table>
<p class="page"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</p>
<?php echo $_smarty_tpl->getSubTemplate ("ucenter/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>