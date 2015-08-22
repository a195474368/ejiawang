<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:19:10
         compiled from "21f2646ca2b434e9e1df5f187cee9ef2c3bcd642" */ ?>
<?php /*%%SmartyHeaderCode:49399711255d7ea2e2c7d94-70034891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21f2646ca2b434e9e1df5f187cee9ef2c3bcd642' => 
    array (
      0 => '21f2646ca2b434e9e1df5f187cee9ef2c3bcd642',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '49399711255d7ea2e2c7d94-70034891',
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
  'unifunc' => 'content_55d7ea2e351655_76693392',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea2e351655_76693392')) {function content_55d7ea2e351655_76693392($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.cutstr.php';
?>                                       
                                             <?php if ($_smarty_tpl->tpl_vars['index']->value==0){?>
						<div class="host-list-image">
							<a  target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['face_pic'];?>
" width="200px" height="140px"/></a>
						</div>
                                            
						<ul>   
                                                     
							<li><a  target="_blank" class="one" href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
"><i>1.</i><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],24,'');?>
</a></li>
                                                    <?php }else{ ?>    
							<li><a  target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
"><i><?php echo $_smarty_tpl->tpl_vars['index']->value+1;?>
</i><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],24,'');?>
</a></li>
							
                                                 <?php }?>       
						</ul>
                                           <?php }} ?>