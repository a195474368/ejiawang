<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 15:44:13
         compiled from "F:\chengshuang\php\ejw\themes\cheerful_green\block\top-header.html" */ ?>
<?php /*%%SmartyHeaderCode:1656955d8284d33ed19-57165569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a83afada76c14bf6b2c0f357649d31c9ed20a0eb' => 
    array (
      0 => 'F:\\chengshuang\\php\\ejw\\themes\\cheerful_green\\block\\top-header.html',
      1 => 1440228703,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1656955d8284d33ed19-57165569',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MEMBER' => 0,
    'CONFIG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d8284d3813a2_31736642',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d8284d3813a2_31736642')) {function content_55d8284d3813a2_31736642($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'F:\\chengshuang\\php\\ejw\\system\\plugins/smarty\\function.link.php';
?><div class="top" style="height:40px">
    <div class="information_top w1000" style="height:40px;padding-top: 6px">
        <div class="information_t_l lt" style="height:40px">
            <?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['uname']){?>
            &nbsp; <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['uname'];?>
</a>！您好 <a href="<?php echo smarty_function_link(array('ctl'=>'passport:loginout'),$_smarty_tpl);?>
">退出</a>&nbsp;
            <?php }else{ ?>
         &nbsp;   <a href="<?php echo smarty_function_link(array('ctl'=>'passport'),$_smarty_tpl);?>
">登录</a>&nbsp;&nbsp;   <a href="<?php echo smarty_function_link(array('ctl'=>'passport-signup'),$_smarty_tpl);?>
" >注册</a> &nbsp; 
            <?php }?>
             <a href="/mobile" class="red">手机版</a>
        </div>
        <div class="information_r rt" style="height:40px">
            <ul> 
                <!--<li><a href="###">收藏本站</a>&nbsp;&nbsp;|&nbsp;&nbsp;</li>-->
                <li>
                    <a href="###" class="block_lt" style="color:#666">关注我们：&nbsp; </a>
                    <a href="###" class="block_lt guanzhuwomen_1"></a>
                    <a href="###" class="block_lt guanzhuwomen_2"></a>
                   
                </li>
               <!-- <li><a>咨询热线</a><span>&nbsp;<b><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['phone'];?>
</b></span></li>-->
            </ul>
        </div>
    </div>
</div>

            
            
<?php }} ?>