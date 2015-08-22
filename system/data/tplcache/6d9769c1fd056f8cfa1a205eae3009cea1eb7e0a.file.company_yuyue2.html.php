<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:23:26
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/company_yuyue2.html" */ ?>
<?php /*%%SmartyHeaderCode:43765676255d7eb2e2ad3b8-84914147%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d9769c1fd056f8cfa1a205eae3009cea1eb7e0a' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/company_yuyue2.html',
      1 => 1422580285,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43765676255d7eb2e2ad3b8-84914147',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'detail' => 0,
    'CONFIG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7eb2e3235a4_62223967',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7eb2e3235a4_62223967')) {function content_55d7eb2e3235a4_62223967($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?>
<form action="<?php echo smarty_function_link(array('ctl'=>'gs:yuyue','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['company_id'],'http'=>'empty'),$_smarty_tpl);?>
" method="post" >
    <div style="height: 240px;">
<div  class="yuyue_box">
    <h2>我想请<font class="red" style="font-size: 18px;"><?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>
</font>帮我解决装修烦恼！</h2>
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
</form>
 
	</body>
</html><?php }} ?>