<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:19:10
         compiled from "448f45514b5c06e5fa323de15ebacf4cf2de2ccd" */ ?>
<?php /*%%SmartyHeaderCode:131354931255d7ea2e725ac8-07898739%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '448f45514b5c06e5fa323de15ebacf4cf2de2ccd' => 
    array (
      0 => '448f45514b5c06e5fa323de15ebacf4cf2de2ccd',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '131354931255d7ea2e725ac8-07898739',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'pager' => 0,
    'photo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea2e8e14a0_06298736',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea2e8e14a0_06298736')) {function content_55d7ea2e8e14a0_06298736($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?>
						<li style="left:2.5px; top:0;"><a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
" /><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" width="215" height="290" /><span><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</span></a></li>
						  <?php  $_smarty_tpl->tpl_vars['photo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['photo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['ext']['photos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['photo']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->key => $_smarty_tpl->tpl_vars['photo']->value){
$_smarty_tpl->tpl_vars['photo']->_loop = true;
 $_smarty_tpl->tpl_vars['photo']->iteration++;
?>                     
                                                  <?php if ($_smarty_tpl->tpl_vars['photo']->iteration==2||$_smarty_tpl->tpl_vars['photo']->iteration==3){?>
                                                         <?php if ($_smarty_tpl->tpl_vars['photo']->iteration==2){?>
                                                <li style="left:222.5px; top:0;"><a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
" /><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo'];?>
_thumb.jpg" width="215" height="145" /><span><?php echo $_smarty_tpl->tpl_vars['photo']->value['title'];?>
</span></a></li>
                                                        <?php }elseif($_smarty_tpl->tpl_vars['photo']->iteration==3){?>
						<li style="left:222.5px; top:150px;"><a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
" /><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo'];?>
_thumb.jpg" width="215" height="140" /><span><?php echo $_smarty_tpl->tpl_vars['photo']->value['title'];?>
</span></a></li>
                                                         <?php }?>                                                                       
                                              <?php }elseif($_smarty_tpl->tpl_vars['photo']->iteration==4){?>
						<li style="left:442.5px; top:0px;"><a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
" /><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo'];?>
" width="215" height="290" /><span><?php echo $_smarty_tpl->tpl_vars['photo']->value['title'];?>
</span></a></li>
                                                <?php }elseif($_smarty_tpl->tpl_vars['photo']->iteration==5||$_smarty_tpl->tpl_vars['photo']->iteration==6){?>                       
                                                         <?php if ($_smarty_tpl->tpl_vars['photo']->iteration==5){?>
						<li style="left:662.5px; top:0px;"><a  target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
" /><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo'];?>
_thumb.jpg" width="215" height="125" /><span><?php echo $_smarty_tpl->tpl_vars['photo']->value['title'];?>
</span></a></li>
                                                 <?php }elseif($_smarty_tpl->tpl_vars['photo']->iteration==6){?>
						<li style="left:662.5px; top:130px;"><a  target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
" /><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo'];?>
_thumb.jpg" width="215" height="160" /><span><?php echo $_smarty_tpl->tpl_vars['photo']->value['title'];?>
</span></a></li>
						                                           
                                                <?php }?> 
                                                
                                                <?php }?>
                                                <?php } ?>
                                                <div class="clear"></div>  
                                                <?php }} ?>