<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 15:16:49
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/ucenter/tenders/view.html" */ ?>
<?php /*%%SmartyHeaderCode:191804565655d821e161f219-51775560%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0f649952b8de24142642d8cb86326d25c734aab' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/ucenter/tenders/view.html',
      1 => 1402664332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191804565655d821e161f219-51775560',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'detail' => 0,
    'cityList' => 0,
    'areaList' => 0,
    'home' => 0,
    'look' => 0,
    'type' => 0,
    'setting' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d821e1821459_76137714',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d821e1821459_76137714')) {function content_55d821e1821459_76137714($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_format')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.format.php';
if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("ucenter/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="base_info"><b><?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
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
        <td><?php if ($_smarty_tpl->tpl_vars['look']->value){?><?php echo $_smarty_tpl->tpl_vars['detail']->value['addr'];?>
<?php }else{ ?>****<?php }?></td>

    </tr>
    <tr>
        <th>
            称呼：
        </th>
        <td>
            <?php if ($_smarty_tpl->tpl_vars['look']->value){?><?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>
<?php }else{ ?>****<?php }?> 
        </td>
        <th>手机:</th>
        <td>
            <?php if ($_smarty_tpl->tpl_vars['look']->value){?><?php echo $_smarty_tpl->tpl_vars['detail']->value['mobile'];?>
<?php }else{ ?>****<?php }?>
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
    <?php if (!$_smarty_tpl->tpl_vars['look']->value){?>
    <tr>
        <th colspan="4" style="text-align: center;">
            <a  href="<?php echo smarty_function_link(array('ctl'=>'ucenter/tenders:look','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['id'],'http'=>true),$_smarty_tpl);?>
" mini-act="查看"  style="color: red; font-size: 18px; ">立刻花费<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['gold'])===null||$tmp==='' ? '0' : $tmp);?>
 <em class="fb_ico3"></em> 查看</a>
        </th>
    </tr>
    <?php }?>
</table>

<?php echo $_smarty_tpl->getSubTemplate ("ucenter/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>