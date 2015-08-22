<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 09:45:18
         compiled from "admin:tenders/look/create.html" */ ?>
<?php /*%%SmartyHeaderCode:117865159155d7d42eac5286-20501227%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b677a58a413acdb23ff78a267ceaee4680ce2251' => 
    array (
      0 => 'admin:tenders/look/create.html',
      1 => 1402664331,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '117865159155d7d42eac5286-20501227',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'tenders_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7d42eb7c996_04551298',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7d42eb7c996_04551298')) {function content_55d7d42eb7c996_04551298($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
    <table width="100%" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
        <th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
        <td align="right"><?php echo smarty_function_link(array('ctl'=>"tenders/look:index",'priv'=>"hidden",'class'=>"button"),$_smarty_tpl);?>
</td>
        <td width="15"></td>
      </tr>
    </table>
</div>
<div class="page-data"><form action="?tenders/look-create-<?php echo $_smarty_tpl->tpl_vars['tenders_id']->value;?>
.html" mini-form="look-form" method="post" >
<table width="100%" border="0" cellspacing="0" class="table-data form">

<tr><th><span class="red">*</span>公司：</th><td>  <input type="hidden" name="data[company_id]" value="0" id="case_company_id"/>
        <input type="text"  value="" id="case_company_name" class="input w-300" readonly="readonly"/>
        <?php echo smarty_function_link(array('ctl'=>"company/company:dialog",'select'=>"mini:#case_company_id,#case_company_name/N/选择装修公司",'class'=>"button"),$_smarty_tpl);?>
    
    
    </td></tr>
<tr>
    <th>扣费：</th>
    <td><label><input type="checkbox" name="gold" value="1" /><b class="blue">勾选将直接扣除该装修公司的账户余额</b></label></td>
</tr>

<tr><th class="clear-th-bottom"></th><td class="clear-td-bottom" colspan="10"><input type="submit" class="bt-big" value="提交数据" /></td></tr>
</table>
</form></div>

<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>