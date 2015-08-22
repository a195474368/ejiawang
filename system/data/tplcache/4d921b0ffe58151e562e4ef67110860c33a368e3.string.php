<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:19:10
         compiled from "4d921b0ffe58151e562e4ef67110860c33a368e3" */ ?>
<?php /*%%SmartyHeaderCode:16541881655d7ea2e503c43-76065650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d921b0ffe58151e562e4ef67110860c33a368e3' => 
    array (
      0 => '4d921b0ffe58151e562e4ef67110860c33a368e3',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '16541881655d7ea2e503c43-76065650',
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
  'unifunc' => 'content_55d7ea2e5b3229_85657045',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea2e5b3229_85657045')) {function content_55d7ea2e5b3229_85657045($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.cutstr.php';
?>                                       
                                             <?php if ($_smarty_tpl->tpl_vars['index']->value==15){?>
						<div class="host-list-image">
							<a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['face_pic'];?>
" width="200px" height="140px"/></a>
						</div>
                                            
						<ul>   
                                                     
							<li><a  target="_blank" class="one" href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
"><i>1.</i><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],24,'');?>
</a></li>
                                                     <?php }elseif($_smarty_tpl->tpl_vars['index']->value>15&&$_smarty_tpl->tpl_vars['index']->value<20){?>     
							<li><a  target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
"><i><?php echo $_smarty_tpl->tpl_vars['index']->value-14;?>
</i><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],24,'');?>
</a></li>
							
                                                 <?php }?>       
						</ul>
                                           <?php }} ?>