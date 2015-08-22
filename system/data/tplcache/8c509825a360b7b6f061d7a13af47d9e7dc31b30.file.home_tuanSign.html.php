<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:24:11
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/home_tuanSign.html" */ ?>
<?php /*%%SmartyHeaderCode:154406454055d7eb5b643a08-09553853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c509825a360b7b6f061d7a13af47d9e7dc31b30' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/home_tuanSign.html',
      1 => 1402664332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154406454055d7eb5b643a08-09553853',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tuan' => 0,
    'package' => 0,
    'item' => 0,
    'CONFIG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7eb5b6e8339_61808191',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7eb5b6e8339_61808191')) {function content_55d7eb5b6e8339_61808191($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><form action="<?php echo smarty_function_link(array('ctl'=>'home:tuanSign','arg0'=>$_smarty_tpl->tpl_vars['tuan']->value['tuan_id'],'http'=>'empty'),$_smarty_tpl);?>
" mini-form="sign-form" method="post" >
    <div style="height: 250px;">
        <div  class="yuyue_box" style="height: 250px;">
    <h2>我想报名参加<font class="red"><?php echo $_smarty_tpl->tpl_vars['tuan']->value['title'];?>
</font></h2>
    <dl style=" height: 130px;">
        <dt style=" height: 130px;"> 
            <select class="yuyue_input" name="data[package_id]">
                 <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['package']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                 <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['package_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</option>
                 <?php } ?>
             </select>
             <span id="tips_1" class="yuyue_tips"></span>
            <input class="yuyue_input" name="data[cantact]" id="pop_name_txt" onfocus="if (this.value=='请输入您的姓名'){ this.value=''};this.style.color='#666666';" onblur="if (this.value==''){this.value='请输入您的姓名'};this.style.color='#666666';" value="请输入您的姓名" type="text">
            <span id="tips_1" class="yuyue_tips"></span>
            <input class="yuyue_input" name="data[mobile]" id="pop_phone_txt" onfocus="if (this.value=='请输入您的手机号'){ this.value=''};this.style.color='#666666';" onblur="if (this.value==''){this.value='请输入您的手机号'};this.style.color='#666666';" value="请输入您的手机号" type="text">
            <span id="tips_2" class="yuyue_tips"></span>
       </dt>
       <dd><input type="submit" class="yuyue_sub" value="立即报名"/></dd>
    </dl>
    <div class="yuyue_bottom"><span>不想等待？您也可以直接联系我们</span><span class="yuyue_tel"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['phone'];?>
</span></div>
</div>
    </div>
</form><?php }} ?>