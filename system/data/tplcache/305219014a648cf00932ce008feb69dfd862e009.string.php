<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:19:09
         compiled from "305219014a648cf00932ce008feb69dfd862e009" */ ?>
<?php /*%%SmartyHeaderCode:2522122355d7ea2db2c321-13788476%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '305219014a648cf00932ce008feb69dfd862e009' => 
    array (
      0 => '305219014a648cf00932ce008feb69dfd862e009',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '2522122355d7ea2db2c321-13788476',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'index' => 0,
    'item' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea2dbd5fe6_96196752',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea2dbd5fe6_96196752')) {function content_55d7ea2dbd5fe6_96196752($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?>
                                             <?php if ($_smarty_tpl->tpl_vars['index']->value==0){?>
						<div class="host-list-image">
							<a href="<?php echo smarty_function_link(array('ctl'=>'content:diaryDetail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['diary_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['face_pic'];?>
" width="200px" height="140px"/></a>
						</div>
                                            
						<ul>   
                                                     
							<li><a class="one" href="<?php echo smarty_function_link(array('ctl'=>'content:diaryDetail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['diary_id']),$_smarty_tpl);?>
"><i>1.</i><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></li>
                                                    <?php }else{ ?>    
							<li><a href="<?php echo smarty_function_link(array('ctl'=>'content:diaryDetail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['diary_id']),$_smarty_tpl);?>
"><i>2.</i><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></li>
							
                                                 <?php }?>       
						</ul>
                                             <?php }} ?>