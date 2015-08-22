<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:25:32
         compiled from "1fd7cb3af52ff27359d7b083f569dc3eabeee668" */ ?>
<?php /*%%SmartyHeaderCode:95091666455d7ebaca5d256-11321685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fd7cb3af52ff27359d7b083f569dc3eabeee668' => 
    array (
      0 => '1fd7cb3af52ff27359d7b083f569dc3eabeee668',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '95091666455d7ebaca5d256-11321685',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'article_cates' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ebaca99b80_33112319',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ebaca99b80_33112319')) {function content_55d7ebaca99b80_33112319($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?> 
                        <li><font>[<?php echo $_smarty_tpl->tpl_vars['article_cates']->value[$_smarty_tpl->tpl_vars['item']->value['cat_id']]['title'];?>
]</font><a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'content:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['article_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></li>
                        <?php }} ?>