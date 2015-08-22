<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:19:10
         compiled from "f1fb05dc6f52c12e2ef99b5941e056e4dfc8aa1a" */ ?>
<?php /*%%SmartyHeaderCode:90883298855d7ea2e071984-62617026%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1fb05dc6f52c12e2ef99b5941e056e4dfc8aa1a' => 
    array (
      0 => 'f1fb05dc6f52c12e2ef99b5941e056e4dfc8aa1a',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '90883298855d7ea2e071984-62617026',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'index' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea2e117e87_86070494',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea2e117e87_86070494')) {function content_55d7ea2e117e87_86070494($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.cutstr.php';
?>
                                                      <?php if ($_smarty_tpl->tpl_vars['index']->value==0){?>
							<li><a target="_blank" class="one" href="<?php echo smarty_function_link(array('ctl'=>'content:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['article_id']),$_smarty_tpl);?>
"><i>1.</i><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],22,'');?>
<span><?php echo date('m-d',$_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</span></a></li>
                                                        <?php }else{ ?>
							<li><a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'content:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['article_id']),$_smarty_tpl);?>
"><i><?php echo $_smarty_tpl->tpl_vars['index']->value+1;?>
</i><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],22,'');?>
<span><?php echo date('m-d',$_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</span></a></li>
							<?php }?>
                                                        <?php }} ?>