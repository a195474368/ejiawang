<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:19:09
         compiled from "9a5d373cdd036d7f1c85810c6b90c82fca70d224" */ ?>
<?php /*%%SmartyHeaderCode:20036188655d7ea2de01816-26491577%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a5d373cdd036d7f1c85810c6b90c82fca70d224' => 
    array (
      0 => '9a5d373cdd036d7f1c85810c6b90c82fca70d224',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '20036188655d7ea2de01816-26491577',
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
  'unifunc' => 'content_55d7ea2de9ab55_44737004',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea2de9ab55_44737004')) {function content_55d7ea2de9ab55_44737004($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.cutstr.php';
?>
                                              
                                             <?php if ($_smarty_tpl->tpl_vars['index']->value==10){?>
						<div class="host-list-image">
							<a  target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'content:diaryDetail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['diary_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['face_pic'];?>
" width="200px" height="140px"/></a>
						</div>
                                            
						<ul>   
                                                     
							<li><a  target="_blank" class="one" href="<?php echo smarty_function_link(array('ctl'=>'content:diaryDetail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['diary_id']),$_smarty_tpl);?>
"><i>1.</i><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],24,'');?>
</a></li>
                                                    <?php }elseif($_smarty_tpl->tpl_vars['index']->value>10&&$_smarty_tpl->tpl_vars['index']->value<15){?>    
							<li><a  target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'content:diaryDetail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['diary_id']),$_smarty_tpl);?>
"><i><?php echo $_smarty_tpl->tpl_vars['index']->value-9;?>
</i><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],24,'');?>
</a></li>
							
                                                 <?php }?>       
						</ul>
                                           <?php }} ?>