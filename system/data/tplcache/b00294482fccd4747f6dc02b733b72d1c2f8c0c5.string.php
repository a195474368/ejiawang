<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:25:32
         compiled from "b00294482fccd4747f6dc02b733b72d1c2f8c0c5" */ ?>
<?php /*%%SmartyHeaderCode:202623984155d7ebacac0be4-57510796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b00294482fccd4747f6dc02b733b72d1c2f8c0c5' => 
    array (
      0 => 'b00294482fccd4747f6dc02b733b72d1c2f8c0c5',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '202623984155d7ebacac0be4-57510796',
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
  'unifunc' => 'content_55d7ebacb0fa69_44872529',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ebacb0fa69_44872529')) {function content_55d7ebacb0fa69_44872529($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?> 
                        <li>
                            <span class="block_lt span73 red_bg mt5"><font class="f12 white">已解决</font></span>
                            <span class="block_lt span74" >
                                <a target='_blank' title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'ask:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['ask_id']),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['index']->value<3){?>class="red"<?php }else{ ?> class="f14 black lt"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a><span class="f14 rt shuliang">回答<?php echo $_smarty_tpl->tpl_vars['item']->value['answer_num'];?>
</span>
                            </span>
                        </li>
                        <?php }} ?>