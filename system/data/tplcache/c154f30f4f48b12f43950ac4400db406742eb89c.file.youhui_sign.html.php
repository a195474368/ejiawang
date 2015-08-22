<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:24:24
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/youhui_sign.html" */ ?>
<?php /*%%SmartyHeaderCode:26082419755d7eb687ace82-02582821%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c154f30f4f48b12f43950ac4400db406742eb89c' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/youhui_sign.html',
      1 => 1402664332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26082419755d7eb687ace82-02582821',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'detail' => 0,
    'company' => 0,
    'CONFIG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7eb6882a105_41215002',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7eb6882a105_41215002')) {function content_55d7eb6882a105_41215002($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><form action="<?php echo smarty_function_link(array('ctl'=>'gs:sign','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['youhui_id'],'http'=>'empty'),$_smarty_tpl);?>
" mini-form="sign-form" method="post" >
    <div style="height: 240px;">
<div  class="yuyue_box">
    <h2>我想报名参加<font class="red"><?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
</font>的优惠活动</h2>
    <dl>
       <dt> 
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