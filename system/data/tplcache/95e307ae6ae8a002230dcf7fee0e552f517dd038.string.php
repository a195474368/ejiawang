<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:19:28
         compiled from "95e307ae6ae8a002230dcf7fee0e552f517dd038" */ ?>
<?php /*%%SmartyHeaderCode:45205626255d7ea402a0107-09061185%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95e307ae6ae8a002230dcf7fee0e552f517dd038' => 
    array (
      0 => '95e307ae6ae8a002230dcf7fee0e552f517dd038',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '45205626255d7ea402a0107-09061185',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea402d0db8_53276881',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea402d0db8_53276881')) {function content_55d7ea402d0db8_53276881($_smarty_tpl) {?><?php if (!is_callable('smarty_block_calldata')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/block.calldata.php';
?> 
                                                            <img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['face_pic'];?>
" width="263" height="180"  />
                                                            
                                                        </a>
						</div>
                                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"home/tuan",'home_id'=>$_smarty_tpl->tpl_vars['item']->value['id'],'limit'=>"1")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"home/tuan",'home_id'=>$_smarty_tpl->tpl_vars['item']->value['id'],'limit'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<div class="host-title">                                                                      
							 <{$item.title|cutstr:22:""}>              
						</div>
						<div class="host-dis">
							报名立减<span><{$item.jieyue}></span>元
                                                        <a target="_blank" title="<{$item.title}>" href="<{link ctl='home:tuanDetail' arg0=$item.tuan_id}>"><input type="button" class="host-input" value="我要报名" />
                                                        </a></div>
                                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"home/tuan",'home_id'=>$_smarty_tpl->tpl_vars['item']->value['id'],'limit'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                             <?php }} ?>