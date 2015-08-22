<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 13:11:29
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/index/kszx.html" */ ?>
<?php /*%%SmartyHeaderCode:117815881255d804819969c8-24423259%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a43720a7d6d53c79c9901fdd8136a7dd77da638b' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/index/kszx.html',
      1 => 1402664332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117815881255d804819969c8-24423259',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'setting' => 0,
    'detail' => 0,
    'key' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d80481a05c28_54110008',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d80481a05c28_54110008')) {function content_55d80481a05c28_54110008($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><div class="zhuanxiu">
<h2>装修四大困惑</h2>
<div class="zhuangxiu_1">
<div class="zhuangxiu_1_1">
	<ul>
		<li>不了解装修公司</li>
		<li>看不懂设计方案</li>
		<li>看不懂报价</li>
		<li>担心施工质量</li>
	</ul>
</div>
<div class="zhuangxiu_1_2">
<form id='tenders_form' action="">
            <input type="hidden" id='tenders_type_id' name='data[type_id]' value="1" />
  <table>
    
    <tr>
      <td align="right">招标类型</td>
      <td><select name="data[type_id]" >
          <option value="0">请选择</option>
          <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['setting']->value[$_smarty_tpl->tpl_vars['type']->value['type']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
          <option  value="&lt;{$key}&gt;">&lt;{$item}&gt;</option>
          <?php } ?>
        </select>
      </td>
      <td align="right">装修预算</td>
      <td><select name="data[budget_id]" >
          <option value="0">请选择</option>
          <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['setting']->value[$_smarty_tpl->tpl_vars['type']->value['budget']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?> <option <?php if ($_smarty_tpl->tpl_vars['detail']->value['budget_id']==$_smarty_tpl->tpl_vars['key']->value){?> selected="selected" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>

        </option>
          <?php } ?>
        </select>
      </td>
    </tr>
   <tr>
      <td align="right"><i>*</i>我的称呼</td>
      <td align="left"><input type="text" name="data[name]"/></td>
      <td align="right"><i>*</i>联系电话</td>
      <td align="left"><input type="text" name="data[mobile]"/></td>
    </tr>
  </table>
  <div class="cl"></div>                           
                <p class="zhuangxiu_1_3">
                    <span>立即<a mini-submit='#tenders_form' action="<?php echo smarty_function_link(array('ctl'=>'tenders:save'),$_smarty_tpl);?>
">申请</a></span>
                    <font>免费获得3家正规<br />装修公司不同的设计和报价</font>
                </p>
              
    </form>      
</div>
</div>

</div><?php }} ?>