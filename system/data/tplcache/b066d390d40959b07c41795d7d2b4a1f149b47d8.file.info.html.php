<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:20:13
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/ucenter/member/info.html" */ ?>
<?php /*%%SmartyHeaderCode:40491250355d7ea6dbbb828-29021521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b066d390d40959b07c41795d7d2b4a1f149b47d8' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/ucenter/member/info.html',
      1 => 1402664332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40491250355d7ea6dbbb828-29021521',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MEMBER' => 0,
    'fromlist' => 0,
    'key' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea6dd6fef1_21029648',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea6dd6fef1_21029648')) {function content_55d7ea6dd6fef1_21029648($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_function_YMD')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.YMD.php';
if (!is_callable('smarty_function_widget')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.widget.php';
?><?php echo $_smarty_tpl->getSubTemplate ("ucenter/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/widget.YMD.js"></script>
<div class="filter_tabs">
    <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member:info'),$_smarty_tpl);?>
" class="tab on">人个资料</a><i></i>
	<a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member:face'),$_smarty_tpl);?>
" class="tab">修改头像</a><i></i>
	<a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member:mail'),$_smarty_tpl);?>
" class="tab">修改邮箱</a><i></i>
    <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member:passwd'),$_smarty_tpl);?>
" class="tab">修改密码</a><i></i>
</div>
<div class="set_c4">
<form id="account-form">
<table cellspacing="0" cellpadding="0" class="form">
    <tr>
        <th>用户名：</th><td>&nbsp;<?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['uname'];?>
</td>
    </tr>
    <tr>
        <th>邮箱：</th>
        <td><?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['mail'];?>
<span><b>&nbsp;<?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['verify_mail']){?><span style="color: green;">已验证</span><?php }else{ ?><a  href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member:email'),$_smarty_tpl);?>
">立刻收邮件认证</a><?php }?></b></span></td>
    </tr>
    <tr>
        <th><span class="red">&nbsp;</span>手机：</th>
        <td>
            <?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['verify_mobile']){?><?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['mobile'];?>
 <span style="color: green;">已验证</span><?php }else{ ?>
            <input type="text" name="account[mobile]" value="<?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['mobile'];?>
" class="input"/> <b>&nbsp;<a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member:mobile'),$_smarty_tpl);?>
">立刻认证</a></b> <?php }?>
        </td>
    </tr>
    <?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['from']=='member'){?>
    <tr>
        <th>类型：</th>
        <td>
            <select name="account[from]">
                
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fromlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?> 
                        <?php if ($_smarty_tpl->tpl_vars['key']->value!='mechanic'){?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['from']==$_smarty_tpl->tpl_vars['key']->value){?>selected="selected"<?php }?>  ><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</option>
                        <?php }?>
                <?php } ?>
            </select>
            业主可以选择更换用户类型！更换后不能变更回来！
        </td>
    </tr>
    <?php }?>
    <tr>
        <th><span class="red">*&nbsp;</span>性别：</td>
        <td>
            <label><input type="radio" name="account[gender]" value="man" <?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['gender']=='man'){?>checked="checked"<?php }?>/>&nbsp;男&nbsp;</label>
            <label><input type="radio" name="account[gender]" value="womain" <?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['gender']=='woman'){?>checked="checked"<?php }?>/>&nbsp;女&nbsp;&nbsp;</label>
        </td>
    </tr>
       <tr height="40">
        <th><span class="red">*&nbsp;</span>生日：</th>
        <td><?php echo smarty_function_YMD(array('Y'=>$_smarty_tpl->tpl_vars['MEMBER']->value['Y'],'M'=>$_smarty_tpl->tpl_vars['MEMBER']->value['M'],'D'=>$_smarty_tpl->tpl_vars['MEMBER']->value['D'],'name'=>"account",'class'=>"select"),$_smarty_tpl);?>
</td>
    </tr>
    <tr>
        <th><span class="red">*&nbsp;</span>城市：</th>
        <td><select name="account[city_id]" class="select"><option value="0">选择城市</option><?php echo smarty_function_widget(array('id'=>"data/city",'value'=>$_smarty_tpl->tpl_vars['MEMBER']->value['city_id']),$_smarty_tpl);?>
</select></td>
    </tr>
    <tr>
    <th></th><td><input action="<?php echo smarty_function_link(array('ctl'=>'ucenter/member:info'),$_smarty_tpl);?>
" mini-submit="#account-form" type="button" value="保存" class="set_btn" /></td>
    </tr>
</table>
</form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("ucenter/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>