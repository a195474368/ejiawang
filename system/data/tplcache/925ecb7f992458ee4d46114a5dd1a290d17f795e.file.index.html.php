<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 13:35:06
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/ucenter/diary/index.html" */ ?>
<?php /*%%SmartyHeaderCode:33389781155d80a0a80f762-53984119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '925ecb7f992458ee4d46114a5dd1a290d17f795e' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/ucenter/diary/index.html',
      1 => 1402664332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33389781155d80a0a80f762-53984119',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'item' => 0,
    'home_list' => 0,
    'company_list' => 0,
    'status' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d80a0a94bdf5_97163247',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d80a0a94bdf5_97163247')) {function content_55d80a0a94bdf5_97163247($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_format')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.format.php';
if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("ucenter/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="base_info"><b>装修日记</b></div>

<table width="100%" border="0" cellspacing="0" class="info">
    <tr>
        <th>标题</th>
        <th>小区</th>
        <th>公司</th>
        <th class="w-50">状态</th>
        <th>创建IP</th>
        <th class="w-100">创建时间</th>
        <th class="w-50">是否审核</th>
        <th>操作</th>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr>    

        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</td>
        <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['home_list']->value[$_smarty_tpl->tpl_vars['item']->value['home_id']]['name'])===null||$tmp==='' ? '--' : $tmp);?>
</td>
        <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['company_list']->value[$_smarty_tpl->tpl_vars['item']->value['company_id']]['name'])===null||$tmp==='' ? '--' : $tmp);?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['status']->value[$_smarty_tpl->tpl_vars['item']->value['status']];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['create_ip'];?>
</td>
        <td><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</td>
        <td><?php if ($_smarty_tpl->tpl_vars['item']->value['audit']==1){?>已审核<?php }else{ ?>待审核<?php }?></td>
        <td>
            <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/diary:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['diary_id'],'http'=>true),$_smarty_tpl);?>
" class="yzmbtn">日记文章</a>
            <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/diary:edit','arg0'=>$_smarty_tpl->tpl_vars['item']->value['diary_id'],'http'=>true),$_smarty_tpl);?>
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