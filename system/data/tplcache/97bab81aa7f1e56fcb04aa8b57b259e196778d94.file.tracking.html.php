<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:33:02
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/ucenter/tenders/tracking.html" */ ?>
<?php /*%%SmartyHeaderCode:94070188155d7ed6e35de95-30134557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97bab81aa7f1e56fcb04aa8b57b259e196778d94' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/ucenter/tenders/tracking.html',
      1 => 1402664332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '94070188155d7ed6e35de95-30134557',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'detail' => 0,
    'cityList' => 0,
    'areaList' => 0,
    'home' => 0,
    'type' => 0,
    'setting' => 0,
    'look' => 0,
    'tracking' => 0,
    'item' => 0,
    'look_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ed6e5e9109_76634218',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ed6e5e9109_76634218')) {function content_55d7ed6e5e9109_76634218($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_format')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.format.php';
if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("ucenter/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="base_info"><b>跟踪：<?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
</b></div>

<table width="100%" border="0" cellspacing="0" class="info">
    <tr>
        <th>城市：</th>
        <td><?php echo $_smarty_tpl->tpl_vars['cityList']->value[$_smarty_tpl->tpl_vars['detail']->value['city_id']]['city_name'];?>
</td>
        <th>地区：</th>
        <td><?php echo $_smarty_tpl->tpl_vars['areaList']->value[$_smarty_tpl->tpl_vars['detail']->value['area_id']]['area_name'];?>
</td>
    </tr>
    <tr>
        <th>
            小区：
        </th>
        <td><?php if ($_smarty_tpl->tpl_vars['home']->value['name']){?><?php echo $_smarty_tpl->tpl_vars['home']->value['name'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['detail']->value['home_name'];?>
<?php }?></td>
        <th>地址:</th>
        <td><?php echo $_smarty_tpl->tpl_vars['detail']->value['addr'];?>
</td>

    </tr>
    <tr>
        <th>
            称呼：
        </th>
        <td>
       <?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>

        </td>
        <th>手机:</th>
        <td>
           <?php echo $_smarty_tpl->tpl_vars['detail']->value['mobile'];?>

        </td>

    </tr>

    <tr>
        <th>
            招标类型：
        </th>
        <td>
            <?php echo $_smarty_tpl->tpl_vars['setting']->value[$_smarty_tpl->tpl_vars['type']->value['type']][$_smarty_tpl->tpl_vars['detail']->value['type_id']];?>

        </td>
        <th>喜欢风格：</th>
        <td>
            <?php echo $_smarty_tpl->tpl_vars['setting']->value[$_smarty_tpl->tpl_vars['type']->value['style']][$_smarty_tpl->tpl_vars['detail']->value['style_id']];?>

        </td>

    </tr>
    <tr>
        <th>
            预算范围：
        </th>
        <td>
            <?php echo $_smarty_tpl->tpl_vars['setting']->value[$_smarty_tpl->tpl_vars['type']->value['budget']][$_smarty_tpl->tpl_vars['detail']->value['budget_id']];?>

        </td>
        <th>服务需求：</th>
        <td>
            <?php echo $_smarty_tpl->tpl_vars['setting']->value[$_smarty_tpl->tpl_vars['type']->value['service']][$_smarty_tpl->tpl_vars['detail']->value['service_id']];?>

        </td>

    </tr>


    <tr>
        <th>
            空间户型：
        </th>
        <td>
            <?php echo $_smarty_tpl->tpl_vars['setting']->value[$_smarty_tpl->tpl_vars['type']->value['house_type']][$_smarty_tpl->tpl_vars['detail']->value['house_type_id']];?>

        </td>
        <th>装修方式：</th>
        <td>
            <?php echo $_smarty_tpl->tpl_vars['setting']->value[$_smarty_tpl->tpl_vars['type']->value['way']][$_smarty_tpl->tpl_vars['detail']->value['way_id']];?>

        </td>

    </tr>

    <tr>
        <th>
            开始时间：
        </th>
        <td>
            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['start_time'])===null||$tmp==='' ? '' : $tmp);?>

        </td>
        <th>面积：</th>
        <td>
            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['area'])===null||$tmp==='' ? '' : $tmp);?>
㎡
        </td>

    </tr>


    <tr>
        <th>
            看标需要消耗金块：
        </th>
        <td>
             <?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['gold'])===null||$tmp==='' ? '0' : $tmp);?>
<em class="fb_ico3"></em>
        </td>
        <th>允许看标企业数：</th>
        <td>
            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['num'])===null||$tmp==='' ? '' : $tmp);?>

        </td>

    </tr>

    <tr>
        <th>
            参加看标的企业数：
        </th>
        <td>
            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['num2'])===null||$tmp==='' ? '' : $tmp);?>

        </td>
        <th>浏览量：</th>
        <td>
            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['pv_num'])===null||$tmp==='' ? '' : $tmp);?>

        </td> 
    </tr>
    <tr>
        <th>
            IP：
        </th>
        <td>
            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['create_ip'])===null||$tmp==='' ? '' : $tmp);?>

        </td>
        <th>创建时间：</th>
        <td>
            <?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['detail']->value['dateline']);?>

        </td> 
    </tr>
    <tr>
        <th>
            其他需求：
        </th>
        <td colspan="3">
            <?php echo $_smarty_tpl->tpl_vars['detail']->value['demand'];?>

        </td> 
    </tr>
    <tr>
        <th>
            客服反馈：
        </th>
        <td colspan="3">
            <?php echo $_smarty_tpl->tpl_vars['detail']->value['feedback'];?>

        </td> 
    </tr>
    <?php if ($_smarty_tpl->tpl_vars['look']->value['is_signed']==1){?>
    <tr>
        <th style=" text-align: center; color: red;" colspan="4">恭喜您签单了！</th>
    </tr>
   <?php }?>
</table>
<table width="100%" border="0" cellspacing="0" class="info">
<tr>
<th>我的反馈</th>
<th>跟踪日期</th>
<th>客服回复</th>
<th>回复时间</th>
</tr>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tracking']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
<tr>
    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
</td>
    <td><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['reply'];?>
</td>
    <td><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['reply_time']);?>
</td>
</tr>
<?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
 <tr><td colspan="20"><p class="text-align tip-notice">没有数据</p></td></tr>
<?php } ?>
</table>

<form mini-form="company" action="<?php echo smarty_function_link(array('ctl'=>'ucenter/tenders:create','arg0'=>$_smarty_tpl->tpl_vars['look_id']->value,'http'=>true),$_smarty_tpl);?>
" method="post">
    <table cellspacing="0" cellpadding="0" class="form">
        <tr>
            <th>我要反馈：</th>
            <td>
                <textarea name="data[content]" class="textarea"></textarea>
            </td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="保存" class="set_btn" /></td>
        </tr>
    </table>
</form>


<?php echo $_smarty_tpl->getSubTemplate ("ucenter/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>