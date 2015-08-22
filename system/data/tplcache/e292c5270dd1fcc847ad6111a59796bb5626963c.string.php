<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:19:16
         compiled from "e292c5270dd1fcc847ad6111a59796bb5626963c" */ ?>
<?php /*%%SmartyHeaderCode:182920853555d7ea3408c129-02803831%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e292c5270dd1fcc847ad6111a59796bb5626963c' => 
    array (
      0 => 'e292c5270dd1fcc847ad6111a59796bb5626963c',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '182920853555d7ea3408c129-02803831',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea340e60b4_74166463',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea340e60b4_74166463')) {function content_55d7ea340e60b4_74166463($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_cutstr')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.cutstr.php';
if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_block_calldata')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/block.calldata.php';
?>
                <tr>                  
                    <td><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['name'],10,'**');?>
</td>          
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['area'];?>
㎡</td>
                    <td><a target='_blank' title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'tenders:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
" class=""style=" color:#666;font-size:14px"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></td>
                      <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"tenders/setting",'setting_id'=>$_smarty_tpl->tpl_vars['item']->value['budget_id'],'limit'=>"1")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"tenders/setting",'setting_id'=>$_smarty_tpl->tpl_vars['item']->value['budget_id'],'limit'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                      <td><{$item.name}></td>
                      <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"tenders/setting",'setting_id'=>$_smarty_tpl->tpl_vars['item']->value['budget_id'],'limit'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
                  
                </tr>
                    <div class="cl"></div>             
               <?php }} ?>