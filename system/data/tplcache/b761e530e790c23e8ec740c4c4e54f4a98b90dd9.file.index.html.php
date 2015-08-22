<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:26:50
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/ucenter/news/index.html" */ ?>
<?php /*%%SmartyHeaderCode:204923522155d7ebfab81ef8-20356336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b761e530e790c23e8ec740c4c4e54f4a98b90dd9' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/ucenter/news/index.html',
      1 => 1402664332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204923522155d7ebfab81ef8-20356336',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'item' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ebfac56746_13196252',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ebfac56746_13196252')) {function content_55d7ebfac56746_13196252($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_format')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.format.php';
if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("ucenter/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="base_info"><b>企业新闻</b></div>

<table width="100%" border="0" cellspacing="0" class="info">
    <tr>

        <th>标题</th><th>创建时间</th><th>创建IP</th><th>是否审核</th>
        <th>操作</th></tr>

    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr>    

        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</td>
        <td><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['create_ip'];?>
</td>
        <td><?php if ($_smarty_tpl->tpl_vars['item']->value['audit']==1){?>已审核<?php }else{ ?>待审核<?php }?></td>
        <td>
            <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/news:edit','arg0'=>$_smarty_tpl->tpl_vars['item']->value['news_id'],'http'=>true),$_smarty_tpl);?>
" class="yzmbtn">修改</a>
        </td>
    </tr>
    <?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
    <tr><td colspan="20"><p class="text-align tip-notice">没有数据</p></td></tr>
    <?php } ?>
    <tr>
            <td  colspan="20" class="page-list"><div class="page"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</div></td>
    </tr>
</table>

<?php echo $_smarty_tpl->getSubTemplate ("ucenter/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>