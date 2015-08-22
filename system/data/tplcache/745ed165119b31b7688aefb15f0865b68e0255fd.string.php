<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:40:10
         compiled from "745ed165119b31b7688aefb15f0865b68e0255fd" */ ?>
<?php /*%%SmartyHeaderCode:170250704455d7ef1a1487a3-00271785%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '745ed165119b31b7688aefb15f0865b68e0255fd' => 
    array (
      0 => '745ed165119b31b7688aefb15f0865b68e0255fd',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '170250704455d7ef1a1487a3-00271785',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ef1a1f72d5_30959571',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ef1a1f72d5_30959571')) {function content_55d7ef1a1f72d5_30959571($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.cutstr.php';
if (!is_callable('smarty_block_calldata')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/block.calldata.php';
?>
                    <div class="decoration_designer_l lt bgwhite mt10">
                        <div class="decoration_designer_l_l lt">
                            <div class="designer_name lt">
                                <a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'blog','arg0'=>$_smarty_tpl->tpl_vars['item']->value['uid']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['realname'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['face'];?>
" width="100" height="100" /></a><br />
                                <p>设计师：<b><a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'blog','arg0'=>$_smarty_tpl->tpl_vars['item']->value['uid']),$_smarty_tpl);?>
"  title="<?php echo $_smarty_tpl->tpl_vars['item']->value['realname'];?>
"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['realname'],8,'');?>
</a></b></p>
                                <p class="consult pinkbg"><a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'blog','arg0'=>$_smarty_tpl->tpl_vars['item']->value['uid']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['realname'];?>
">我要咨询</a></p>
                            </div>
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"case/case",'designer_id'=>$_smarty_tpl->tpl_vars['item']->value['uid'],'limit'=>"1")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"case/case",'designer_id'=>$_smarty_tpl->tpl_vars['item']->value['uid'],'limit'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <div class="design_idea lt">
                                <p><font class="black"><b>[设计理念]</b></font>:<{$item.intro|cutstr:25:''}></p>
                                <{foreach $item.ext.photos as $photo}>
                                <p class="case_p lt">
                                    <a target="_blank" href="<{link ctl='case:detail' arg0=$item.case_id}>"  title="<{$photo.title}>"><img src="<{$pager.img}>/<{$photo.photo}>_thumb.jpg" width="120" height="95" /></a>
                                    <span></span>
                                    <span class="text1"><a target="_blank" href="<{link ctl='case:detail' arg0=$item.case_id}>"  title="<{$photo.title}>"><{$photo.title}></a></span>
                                </p>
                                <{if $photo@index>0}><{break}><{/if}>
                                <{/foreach}>
                                <div class="cl"></div>
                                <p class="simple mt10"><{foreach $item.ext.attrs as $k=>$v}><span class="simple_style lt"><a target="_blank" href="<{link ctl='case:detail' arg0=$item.case_id}>"  title="<{$photo.title}>"  target="_blank"><{$v}></a></span><{/foreach}></p>
                            </div>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"case/case",'designer_id'=>$_smarty_tpl->tpl_vars['item']->value['uid'],'limit'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </div>     
                    </div>
                    <?php }} ?>