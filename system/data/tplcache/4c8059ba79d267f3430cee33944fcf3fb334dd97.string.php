<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 12:07:48
         compiled from "4c8059ba79d267f3430cee33944fcf3fb334dd97" */ ?>
<?php /*%%SmartyHeaderCode:61911650755d7f594e72312-34537565%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c8059ba79d267f3430cee33944fcf3fb334dd97' => 
    array (
      0 => '4c8059ba79d267f3430cee33944fcf3fb334dd97',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '61911650755d7f594e72312-34537565',
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
  'unifunc' => 'content_55d7f594ec1ff8_74848599',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7f594ec1ff8_74848599')) {function content_55d7f594ec1ff8_74848599($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.cutstr.php';
?>
                              
                             <li style="width:190px;padding-left:1px">
                                 <div><font style ="font-size:13px"><?php echo $_smarty_tpl->tpl_vars['index']->value+1;?>
.</font><a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'content:diaryDetail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['diary_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" ><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],22,'');?>
</a></div>
                              </li>
                              <?php }} ?>