<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:20:00
         compiled from "25321d09aed9c9f21f9f3d298a21a1d652d346ae" */ ?>
<?php /*%%SmartyHeaderCode:75669998055d7ea60d138e3-48220212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25321d09aed9c9f21f9f3d298a21a1d652d346ae' => 
    array (
      0 => '25321d09aed9c9f21f9f3d298a21a1d652d346ae',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '75669998055d7ea60d138e3-48220212',
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
  'unifunc' => 'content_55d7ea60d5a567_84870867',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea60d5a567_84870867')) {function content_55d7ea60d5a567_84870867($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.cutstr.php';
?>
                              
                             <li style="width:170px;padding-left:1px">
                                 <div><font style ="font-size:13px"><?php echo $_smarty_tpl->tpl_vars['index']->value+1;?>
.</font><a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'content:diaryDetail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['diary_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" ><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],16,'');?>
</a></div>
                              </li>
                              <?php }} ?>