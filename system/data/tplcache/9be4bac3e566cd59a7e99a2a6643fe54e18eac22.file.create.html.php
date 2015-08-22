<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 13:35:03
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/ucenter/diary/create.html" */ ?>
<?php /*%%SmartyHeaderCode:80334133655d80a07e1a7d5-71145066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9be4bac3e566cd59a7e99a2a6643fe54e18eac22' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/ucenter/diary/create.html',
      1 => 1402664332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80334133655d80a07e1a7d5-71145066',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'detail' => 0,
    'member' => 0,
    'company' => 0,
    'type' => 0,
    'setting' => 0,
    'key' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d80a0802a3a4_64443604',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d80a0802a3a4_64443604')) {function content_55d80a0802a3a4_64443604($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("ucenter/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="base_info"><b>发布日记</b></div>
<form mini-form="company" action="<?php echo smarty_function_link(array('ctl'=>'ucenter/diary:create','http'=>true),$_smarty_tpl);?>
" method="post">
    <table cellspacing="0" cellpadding="0" class="form">
        <tr><th><span class="red">*</span>标题：</th><td><input type="text" name="data[title]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-300"/></td></tr>
          <tr><th>小区：</th>
                <td>
                    <input type="hidden" name="data[home_id]" id="select_home_id" value="0" />
                    <input type="text" id="select_home_name" value="0" class="input"/>
                    <a class="yzmbtn" action="<?php echo smarty_function_link(array('ctl'=>'ucenter/select:home'),$_smarty_tpl);?>
" mini-select="#select_home_id,#select_home_name/N/<?php echo $_smarty_tpl->tpl_vars['member']->value['city_id'];?>
/选择小区"/>选择小区</a><br />
                </td>
            </tr>
        <tr><th><span class="red">*</span>缩略图：</th><td><input type="file" name="data[face_pic]" class="input w-100" /></td></tr>
         <tr>
                <th>承接公司：</th>
                <td>
                    <input type="hidden" id="select_company_id" name="data[company_id]" value="0" class="input"/>
                    <input type="text" id="select_company_name" value="<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
" class="input"/>
                    <a class="yzmbtn" action="<?php echo smarty_function_link(array('ctl'=>'ucenter/select:company'),$_smarty_tpl);?>
" mini-select="#select_company_id,#select_company_name/N/<?php echo $_smarty_tpl->tpl_vars['member']->value['city_id'];?>
/选择公司"/>选择公司</a>
                </td>
            </tr>
        <tr>
            <th>
                空间户型：
            </th>
            <td>
                <select name="data[type_id]" class="select w-100">
                    <option value="0">请选择</option>
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['setting']->value[$_smarty_tpl->tpl_vars['type']->value['house_type']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                    <option <?php if ($_smarty_tpl->tpl_vars['detail']->value['type_id']==$_smarty_tpl->tpl_vars['key']->value){?> selected="selected" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</option>
                    <?php } ?>
                </select>
          
            </td>
        </tr>
        <tr>
            <th>
                装修方式：
            </th>
            <td>
                <select name="data[way_id]" class="select w-100">
                    <option value="0">请选择</option>
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['setting']->value[$_smarty_tpl->tpl_vars['type']->value['way']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                    <option <?php if ($_smarty_tpl->tpl_vars['detail']->value['way_id']==$_smarty_tpl->tpl_vars['key']->value){?> selected="selected" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</option>
                    <?php } ?>
                </select>
              
            </td>
        </tr>
        <tr><th><span class="red">*</span>合同总价：</th><td><input type="text" name="data[total_price]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['total_price'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100"/></td></tr>
        <tr><th>开工日期：</th><td><input type="text" name="data[start_date]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['start_date'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100" date="start_date" readonly/></td></tr>
        <tr><th>完工日期：</th><td><input type="text" name="data[end_date]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['end_date'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100" date="end_date" readonly/></td></tr>


        <tr><th></th><td><input type="submit" value="保存" class="set_btn" /></td></tr>
    </table>
</form>


<?php echo $_smarty_tpl->getSubTemplate ("ucenter/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>