<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 12:15:41
         compiled from "e2cedfd3433740bd0cb34664e134e8647c9e8f95" */ ?>
<?php /*%%SmartyHeaderCode:74948896855d7f76db89d08-19288167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2cedfd3433740bd0cb34664e134e8647c9e8f95' => 
    array (
      0 => 'e2cedfd3433740bd0cb34664e134e8647c9e8f95',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '74948896855d7f76db89d08-19288167',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7f76dbdd5a1_76062709',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7f76dbdd5a1_76062709')) {function content_55d7f76dbdd5a1_76062709($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.cutstr.php';
if (!is_callable('smarty_block_calldata')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/block.calldata.php';
?>
            <li>
              <p><a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'home:tuanDetail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['tuan_id']),$_smarty_tpl);?>
" ><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['mobile'],4,'**');?>
报名了
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"home/tuan",'tuan_id'=>$_smarty_tpl->tpl_vars['item']->value['tuan_id'],'city_id'=>$_smarty_tpl->tpl_vars['this']->value->request['city_id'])); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"home/tuan",'tuan_id'=>$_smarty_tpl->tpl_vars['item']->value['tuan_id'],'city_id'=>$_smarty_tpl->tpl_vars['this']->value->request['city_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
“<{$item.title|cutstr:20:'**'}>”<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"home/tuan",'tuan_id'=>$_smarty_tpl->tpl_vars['item']->value['tuan_id'],'city_id'=>$_smarty_tpl->tpl_vars['this']->value->request['city_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></p>
           </li>
           <?php }} ?>