<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:25:32
         compiled from "a6e37a1b8a0842c70806b2f769bcf9fa024b1f28" */ ?>
<?php /*%%SmartyHeaderCode:86985658255d7ebac9f09f8-44636395%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6e37a1b8a0842c70806b2f769bcf9fa024b1f28' => 
    array (
      0 => 'a6e37a1b8a0842c70806b2f769bcf9fa024b1f28',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '86985658255d7ebac9f09f8-44636395',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ebaca2e957_69076556',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ebaca2e957_69076556')) {function content_55d7ebaca2e957_69076556($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.cutstr.php';
?> 
                <p class="lt ml10">
                <div class="block"><b class="f14"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</b></div>
                <div class="block mt20">
                    <a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'content:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['article_id']),$_smarty_tpl);?>
" class="f14 black"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['desc'],120,'..');?>
</a>
                </div>

                </p>
                <?php }} ?>