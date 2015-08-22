<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:19:28
         compiled from "841732e07f1adf0b22c4a53022c8025c6e96d390" */ ?>
<?php /*%%SmartyHeaderCode:93358455355d7ea4044ad02-29824100%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '841732e07f1adf0b22c4a53022c8025c6e96d390' => 
    array (
      0 => '841732e07f1adf0b22c4a53022c8025c6e96d390',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '93358455355d7ea4044ad02-29824100',
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
  'unifunc' => 'content_55d7ea404c0899_77163178',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea404c0899_77163178')) {function content_55d7ea404c0899_77163178($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.cutstr.php';
if (!is_callable('smarty_block_calldata')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/block.calldata.php';
?>
						<a class="help-left-image" href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['item']->value['company_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['logo'];?>
" width="110" height="50" /></a>
						<div class="help-con">
							<a href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['item']->value['company_id']),$_smarty_tpl);?>
"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['name'],20,'');?>
</a>
                                                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"tenders/tenders",'status'=>1,'sign_company_id'=>$_smarty_tpl->tpl_vars['item']->value['company_id'],'order'=>"sign_time:desc",'limit'=>"1")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"tenders/tenders",'status'=>1,'sign_company_id'=>$_smarty_tpl->tpl_vars['item']->value['company_id'],'order'=>"sign_time:desc",'limit'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<p><{$areaList[$item.area_id].area_name}>-<{$item.home_name|cutstr:14}></p>
							<p><{$item.name|cutstr:16}></p>
                                                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"tenders/tenders",'status'=>1,'sign_company_id'=>$_smarty_tpl->tpl_vars['item']->value['company_id'],'order'=>"sign_time:desc",'limit'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
  
						</div>
                                                             
						<div class="clear"></div>
                                             <?php }} ?>