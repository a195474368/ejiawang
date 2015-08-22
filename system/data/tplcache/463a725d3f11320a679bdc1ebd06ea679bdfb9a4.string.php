<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:25:32
         compiled from "463a725d3f11320a679bdc1ebd06ea679bdfb9a4" */ ?>
<?php /*%%SmartyHeaderCode:197748328555d7ebacb41967-58660530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '463a725d3f11320a679bdc1ebd06ea679bdfb9a4' => 
    array (
      0 => '463a725d3f11320a679bdc1ebd06ea679bdfb9a4',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '197748328555d7ebacb41967-58660530',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'index' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ebacb8b6c5_12406265',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ebacb8b6c5_12406265')) {function content_55d7ebacb8b6c5_12406265($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?> 
                        <li>
                            <span class="block_lt span73 graybgg mt5"><font class="f12 white">未解决</font></span>
                            <span class="block_lt span74" >
                                <a target='_blank' title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'ask:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['ask_id']),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['index']->value<3){?>class="red"<?php }else{ ?> class="f14 black lt"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a><span class="f14 rt shuliang">回答<?php echo $_smarty_tpl->tpl_vars['item']->value['answer_num'];?>
</span>
                            </span>
                        </li>
                        <?php }} ?>