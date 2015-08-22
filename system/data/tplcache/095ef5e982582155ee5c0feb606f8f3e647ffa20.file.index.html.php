<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:32:36
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/ucenter/tenders/index.html" */ ?>
<?php /*%%SmartyHeaderCode:138521985755d7ed5411ec94-27641619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '095ef5e982582155ee5c0feb606f8f3e647ffa20' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/ucenter/tenders/index.html',
      1 => 1439950314,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138521985755d7ed5411ec94-27641619',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'item' => 0,
    'tenders' => 0,
    'tenders_ides' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ed5424cf38_99478371',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ed5424cf38_99478371')) {function content_55d7ed5424cf38_99478371($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_format')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.format.php';
if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("ucenter/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="base_info"><b>我的招标客户</b></div>

<table width="100%" border="0" cellspacing="0" class="info">
    <tr>
        <th>客户</th>
        <th>称呼</th>  
        <th>电话</th>  
        <th>IP</th>
        <th>创建时间</th>
        <th>操作</th>
        <th>信息</th>

    </tr>

    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr> 
        <td><?php echo $_smarty_tpl->tpl_vars['tenders']->value[$_smarty_tpl->tpl_vars['item']->value['tenders_id']]['title'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['tenders']->value[$_smarty_tpl->tpl_vars['item']->value['tenders_id']]['name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['tenders']->value[$_smarty_tpl->tpl_vars['item']->value['tenders_id']]['mobile'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['create_ip'];?>
</td>
        <td><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</td>
        <td>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['is_signed']==1){?>
            <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/tenders:tracking','arg0'=>$_smarty_tpl->tpl_vars['item']->value['look_id'],'http'=>true),$_smarty_tpl);?>
" class="yzmbtn" style=" color: red; "> 恭喜签单</a>
            <?php }else{ ?>
            <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/tenders:tracking','arg0'=>$_smarty_tpl->tpl_vars['item']->value['look_id'],'http'=>true),$_smarty_tpl);?>
" class="yzmbtn">跟踪</a>
            <?php }?>
        </td>

        <!-- 判断有几条回复信息 -->
        <td>

            <?php if ($_smarty_tpl->tpl_vars['tenders_ides']->value[$_smarty_tpl->tpl_vars['tenders']->value[$_smarty_tpl->tpl_vars['item']->value['tenders_id']]['id']]==$_smarty_tpl->tpl_vars['tenders']->value[$_smarty_tpl->tpl_vars['item']->value['tenders_id']]['id']){?><font style=" color: red;">
                您有一条新回复</font>
            <?php }else{ ?>
                没有信息
            <?php }?>

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