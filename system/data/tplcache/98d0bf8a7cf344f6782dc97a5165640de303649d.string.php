<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:25:54
         compiled from "98d0bf8a7cf344f6782dc97a5165640de303649d" */ ?>
<?php /*%%SmartyHeaderCode:183392445055d7ebc27627f3-34262416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98d0bf8a7cf344f6782dc97a5165640de303649d' => 
    array (
      0 => '98d0bf8a7cf344f6782dc97a5165640de303649d',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '183392445055d7ebc27627f3-34262416',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ebc27a23f2_86000994',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ebc27a23f2_86000994')) {function content_55d7ebc27a23f2_86000994($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?>
			<li>
				<img alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['logo'];?>
" width="150" height="70" />
				<div class="brand-wz">
					<div class="brand-title"><?php echo $_smarty_tpl->tpl_vars['item']->value['sort_name'];?>
</div>
					<p>设计方案<span><?php echo $_smarty_tpl->tpl_vars['item']->value['case_num'];?>
</span>套</p>
					<a mini-load='申请免费量房' href="<?php echo smarty_function_link(array('ctl'=>'gs:yuyue2','arg0'=>$_smarty_tpl->tpl_vars['item']->value['company_id'],'http'=>'empty'),$_smarty_tpl);?>
" >免费设计</a>
				</div>
			</li>
                        <?php }} ?>