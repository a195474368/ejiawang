<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 15:11:24
         compiled from "mobile:city.html" */ ?>
<?php /*%%SmartyHeaderCode:190902755d8209cdeeec2-43236932%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebb5621cad60054ee647464cafba2443bfa5ba0d' => 
    array (
      0 => 'mobile:city.html',
      1 => 1420010587,
      2 => 'mobile',
    ),
  ),
  'nocache_hash' => '190902755d8209cdeeec2-43236932',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'py_city' => 0,
    'k' => 0,
    'v' => 0,
    'vv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d8209cf0b689_87213770',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d8209cf0b689_87213770')) {function content_55d8209cf0b689_87213770($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ('mobile:block/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--头部开始-->
	<div class="mobile_top">
   
        <div class="mobile_top_son">
            <div class="detail-second"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
<sub>&nbsp;&nbsp;你的贴心装修管家</sub></div>
        </div>
    </div>

        <!--头部内容结束 -->
        <!--main开始 -->
        <!--中间内容开始 -->
        <div class="city_switch main">
            <h2>按拼音检索城市</h2>
            <div class="clear"></div>
            <div class="city_all_box">
                <ul class="city_all">
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['py_city']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <li id="city-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
                    <span><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</span>
                    <?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?><a href="<?php echo smarty_function_link(array('ctl'=>'city:city','arg0'=>$_smarty_tpl->tpl_vars['vv']->value['city_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['vv']->value['city_name'];?>
</a><?php } ?>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <!--中间内容结束 -->
        <div class="clear"></div>
 <div class="cl h45"></div>
 <?php echo $_smarty_tpl->getSubTemplate ('mobile:block/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>