<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:19:28
         compiled from "c31f78fd1e83dfcbce5915920c8178ca7c70d8fe" */ ?>
<?php /*%%SmartyHeaderCode:107217833155d7ea40415da9-04146980%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c31f78fd1e83dfcbce5915920c8178ca7c70d8fe' => 
    array (
      0 => 'c31f78fd1e83dfcbce5915920c8178ca7c70d8fe',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '107217833155d7ea40415da9-04146980',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea40439d22_44021695',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea40439d22_44021695')) {function content_55d7ea40439d22_44021695($_smarty_tpl) {?><?php if (!is_callable('smarty_block_calldata')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/block.calldata.php';
?>
					<li>
                                             <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"company/company",'company_id'=>$_smarty_tpl->tpl_vars['item']->value['sign_company_id'])); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"company/company",'company_id'=>$_smarty_tpl->tpl_vars['item']->value['sign_company_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<a class="help-left-image" href="<{link ctl='company' arg0=$item.company_id}>"><img src="<{$pager.img}>/<{$item.logo}>" width="110" height="50" /></a>
						<div class="help-con">
							<a href="<{link ctl='company' arg0=$item.company_id}>"><{$item.name|cutstr:20:""}></a>
                                                        <{calldata mdl="tenders/tenders" status=1 sign_company_id=$item.company_id  order="sign_time:desc" limit="1"}>
							<p><{$areaList[$item.area_id].area_name}>-<{$item.home_name|cutstr:14}></p>
							<p><{$item.name|cutstr:16}></p>
                                                        <{/calldata}>  
						</div>
                                                             
						<div class="clear"></div>
                                             <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"company/company",'company_id'=>$_smarty_tpl->tpl_vars['item']->value['sign_company_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
     
					</li>
                                    
                                    <?php }} ?>