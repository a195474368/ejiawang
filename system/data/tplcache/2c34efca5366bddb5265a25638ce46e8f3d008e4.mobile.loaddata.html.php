<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:35:44
         compiled from "mobile:company/loaddata.html" */ ?>
<?php /*%%SmartyHeaderCode:164182620955d7ee10cd45f5-74008988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c34efca5366bddb5265a25638ce46e8f3d008e4' => 
    array (
      0 => 'mobile:company/loaddata.html',
      1 => 1420010588,
      2 => 'mobile',
    ),
  ),
  'nocache_hash' => '164182620955d7ee10cd45f5-74008988',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'companys' => 0,
    'company' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ee10e2a8e7_72784888',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ee10e2a8e7_72784888')) {function content_55d7ee10e2a8e7_72784888($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.cutstr.php';
?><?php  $_smarty_tpl->tpl_vars['company'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['company']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['companys']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['company']->key => $_smarty_tpl->tpl_vars['company']->value){
$_smarty_tpl->tpl_vars['company']->_loop = true;
?>
<li>
    <div class="mobile_tuan_b_all">
        <a title="<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'company:detail','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['company']->value['square_logo'];?>
" width="68" height="55"/></a>
        <div class="mobile_tuan_b_all_r lt">
            <h4>
                <a title="<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'company:detail','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id']),$_smarty_tpl);?>
" class="block_lt"><?php echo $_smarty_tpl->tpl_vars['company']->value['sort_name'];?>
</a>
                <span class="block rt">

                    <i class="block_lt ico <?php if ($_smarty_tpl->tpl_vars['company']->value['is_vip']){?>i2<?php }else{ ?>i22<?php }?>"></i>
                    <?php if (!empty($_smarty_tpl->tpl_vars['company']->value['orderby'])){?>
                    <i class="block_lt" style=" color: red;">推广</i>
                    <?php }?>
                </span> 
            </h4>
            <!--如若没有加入旗舰店和证书，则将i1和i2换成i11和i22则图标则会变灰色-->
            <div class="cl"></div>
            <p class="mt10">
                <span class="block_lt ico span_map"></span>
                <span class="block_lt"><a title="<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'company:detail','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id']),$_smarty_tpl);?>
" ><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['company']->value['addr'],27,'..');?>
</a></span>
            </p>
            <div class="cl"></div>
            <p class="mt7">
                <span class="block_lt span1 span2"><b>保障金&nbsp;:&nbsp;</b>￥<?php echo $_smarty_tpl->tpl_vars['company']->value['security'];?>
</span>
                <span class="block_lt span1"><b>案例&nbsp;:&nbsp;</b><?php echo $_smarty_tpl->tpl_vars['company']->value['case_num'];?>
</span>
                <span class="block_lt span1"><b>工地&nbsp;:&nbsp;</b><?php echo $_smarty_tpl->tpl_vars['company']->value['site_num'];?>
</span>
            </p>
        </div>
    </div>
</li>
<?php } ?><?php }} ?>