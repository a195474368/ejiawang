<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:26:01
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/ucenter/member/index.html" */ ?>
<?php /*%%SmartyHeaderCode:169924817955d7ebc9d45073-39906548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37fb23736695917abf9e8cce244713e8973cd312' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/ucenter/member/index.html',
      1 => 1420853490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169924817955d7ebc9d45073-39906548',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MEMBER' => 0,
    'company' => 0,
    'shop' => 0,
    'designer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ebc9ec03f7_63872558',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ebc9ec03f7_63872558')) {function content_55d7ebc9ec03f7_63872558($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_format')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("ucenter/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="info_end lt hauto " style="width:770px;">
    <div class="tips">
		<?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['from']=='company'){?>
		访问公司主页：<a href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'city'=>$_smarty_tpl->tpl_vars['company']->value['city_id']),$_smarty_tpl);?>
" target="_blank"><?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'city'=>$_smarty_tpl->tpl_vars['company']->value['city_id']),$_smarty_tpl);?>
</a>
		<?php }elseif($_smarty_tpl->tpl_vars['MEMBER']->value['from']=='shop'){?>
		访问商铺主页：<a href="<?php echo smarty_function_link(array('ctl'=>'mall/shop','arg0'=>$_smarty_tpl->tpl_vars['shop']->value['shop_id']),$_smarty_tpl);?>
" target="_blank"><?php echo smarty_function_link(array('ctl'=>'mall/shop','arg0'=>$_smarty_tpl->tpl_vars['shop']->value['shop_id']),$_smarty_tpl);?>
</a>
		<?php }elseif($_smarty_tpl->tpl_vars['MEMBER']->value['from']=='designer'){?>
		访问个人主页：<a href="<?php echo smarty_function_link(array('ctl'=>'blog','arg0'=>$_smarty_tpl->tpl_vars['MEMBER']->value['uid'],'city_id'=>$_smarty_tpl->tpl_vars['designer']->value['city_id']),$_smarty_tpl);?>
" target="_blank"><?php echo smarty_function_link(array('ctl'=>'blog','arg0'=>$_smarty_tpl->tpl_vars['MEMBER']->value['uid'],'city_id'=>$_smarty_tpl->tpl_vars['designer']->value['city_id']),$_smarty_tpl);?>
</a>
		<?php }?>	
	</div>
    <div class="whole_info mt10 bodr hauto" style="width:768px;padding-left:0px;">
		<div class="tj_t"><h3>用户信息</h3></div>
		<div style="margin-left:20px;">
        <p class="mt20"><b><?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['uname'];?>
，您好!</b></p>
        <div class="cl"></div>
        <p class="mt20">
			我的金币&nbsp;:&nbsp;<span class="red"><?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['gold'];?>
</span><br />
			会员类别&nbsp;:&nbsp;<span class="red"><?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['from_title'];?>
</span><br />
			注册时间&nbsp;：&nbsp;<?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['MEMBER']->value['dateline']);?>

		</p>
		<div class="cl"></div>
		<br /><br />
		</div>
    </div>
   
    <?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['from']=='member'){?>
    <div class="stat_info hauto mt10 bodr"  style="width:737px;">
        <div class="tj_t"><h3>招标信息</h3></div>
        <br /><br />
        <p>1.<a href="<?php echo smarty_function_link(array('ctl'=>'tenders'),$_smarty_tpl);?>
" target="_blank"><span class="red">发布招标</span></a></p><br />
        <p>2.<a href="<?php echo smarty_function_link(array('ctl'=>'tenders:mtenders','arg0'=>$_smarty_tpl->tpl_vars['MEMBER']->value['uid']),$_smarty_tpl);?>
"  target="_blank"><span class="red"> 我的招标</span></a></p><br /><br /><br />
    </div>
    <?php }?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("ucenter/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>