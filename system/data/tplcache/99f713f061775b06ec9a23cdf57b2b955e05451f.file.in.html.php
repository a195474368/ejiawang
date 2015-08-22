<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:31:14
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/ucenter/tenders/in.html" */ ?>
<?php /*%%SmartyHeaderCode:68995076755d7ed022f9e17-78180035%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99f713f061775b06ec9a23cdf57b2b955e05451f' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/ucenter/tenders/in.html',
      1 => 1404997148,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68995076755d7ed022f9e17-78180035',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'item' => 0,
    'lookIds' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ed023fb586_44241333',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ed023fb586_44241333')) {function content_55d7ed023fb586_44241333($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_format')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.format.php';
if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("ucenter/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="base_info"><b>正在进行的招标</b></div>

<table width="100%" border="0" cellspacing="0" class="info">
    <tr>
        <th>标题</th>
        <th>看标需要消耗金块</th>
        <th>允许看标企业数</th>
        <th>参加看标的企业数</th>
        <th>创建时间</th>
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
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['gold'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['num'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['num2'];?>
</td>
        <td><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</td>
        <td>
            <?php if ($_smarty_tpl->tpl_vars['lookIds']->value[$_smarty_tpl->tpl_vars['item']->value['id']]){?>
            已查看
            <?php }else{ ?>
            
            <?php if ($_smarty_tpl->tpl_vars['item']->value['num2']>=$_smarty_tpl->tpl_vars['item']->value['num']){?>
            结束
            <?php }else{ ?>
            <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/tenders:view','arg0'=>$_smarty_tpl->tpl_vars['item']->value['id'],'http'=>true),$_smarty_tpl);?>
" class="yzmbtn">查看</a>
            <?php }?>
            <?php }?>        </td>
    </tr>
    <?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
    <tr><td colspan="19"><p class="text-align tip-notice">没有数据</p></td></tr>
    <?php } ?>
    <tr>
          <td  colspan="19" class="page-list"><div class="page"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</div></td>
    </tr>
</table>

<?php echo $_smarty_tpl->getSubTemplate ("ucenter/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>