<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 14:35:31
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/ucenter/case/create.html" */ ?>
<?php /*%%SmartyHeaderCode:183649856255d818339d4335-68011940%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5451f0ab56eb885ed05f412e0d49cdb9321dcf8b' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/ucenter/case/create.html',
      1 => 1402664332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183649856255d818339d4335-68011940',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'detail' => 0,
    'designers' => 0,
    'designer' => 0,
    'company' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d81833ac3237_29017125',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d81833ac3237_29017125')) {function content_55d81833ac3237_29017125($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_function_widget')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.widget.php';
?><?php echo $_smarty_tpl->getSubTemplate ("ucenter/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="base_info"><b>发布案例</b></div>
<form mini-form="company" action="<?php echo smarty_function_link(array('ctl'=>'ucenter/case:create','http'=>true),$_smarty_tpl);?>
" method="post">

    <div class="page-data" style=" margin-top: 10px;">
        <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
            <li><a href="#table-info">基本信息</a></li>
            <li><a href="#table-attr">属性信息</a></li>
            <li><a href="#table-seo">SEO信息</a></li>
        </ul>
        <table width="100%" border="0" cellspacing="0" class="form" id="table-info">
            <tr><th><span class="red">*</span>标题：</th><td><input type="text" name="data[title]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-400"/></td></tr>

            <tr>
                <th>设计师：</th>
                <td>
                    <select name='data[designer_id]' class="input">
                        
                        <option value="0">请选择</option>
                        <?php  $_smarty_tpl->tpl_vars['designer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['designer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['designers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['designer']->key => $_smarty_tpl->tpl_vars['designer']->value){
$_smarty_tpl->tpl_vars['designer']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['designer']->value['uid'];?>
"><?php echo $_smarty_tpl->tpl_vars['designer']->value['realname'];?>
</option>
                         <?php } ?>
                    </select>
                </td>    
            </tr>
            <tr><th>小区：</th>
                <td>
                    <input type="hidden" name="data[home_id]" id="select_home_id" value="0" />
                    <input type="text" id="select_home_name" value="0" class="input"/>
                    <a class="yzmbtn" action="<?php echo smarty_function_link(array('ctl'=>'ucenter/select:home'),$_smarty_tpl);?>
" mini-select="#select_home_id,#select_home_name/N/<?php echo $_smarty_tpl->tpl_vars['company']->value['city_id'];?>
/选择小区"/>选择小区</a><br />
                </td>
            </tr>
            <tr>
                <th>户型图：</th>
                <td>
                    <input type="hidden" id="select_huxing_id" value="0" name='data[huxing_id]'/>
                    <input type="text" id="select_huxing_name" value="0" class="input"/>
                    <img src="###" id="select_huxing_photo" class="w-50"/>
                    <a class="yzmbtn" action="<?php echo smarty_function_link(array('ctl'=>'ucenter/select:huxing','arg0'=>'#home_id#','arg1'=>'1'),$_smarty_tpl);?>
" id="select_huxing_btn"/>选择户型图</a><br />
                </td>
            </tr>

            <tr><th>设计思路：</th><td><textarea name="data[intro]" class="textarea"><?php echo $_smarty_tpl->tpl_vars['detail']->value['intro'];?>
</textarea><br /></td></tr>

            <tr><th class="clear-th-bottom"></th><td class="clear-td-bottom" colspan="10"><input type="submit" value="保存" class="set_btn" /></td></tr>
        </table>

        <table width="100%" border="0" cellspacing="0" class="table-data form" id="table-seo" style="display:none;">
            <tr><th>seo_title：</th><td><input type="text" name="data[seo_title]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['seo_title'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-500"/></td></tr>
            <tr><th>seo_keywords：</th><td><input type="text" name="data[seo_keywords]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['seo_keywords'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-500"/></td></tr>
            <tr><th>seo_description：</th><td><textarea name="data[seo_description]" class="textarea"><?php echo $_smarty_tpl->tpl_vars['detail']->value['seo_description'];?>
</textarea><br /></td></tr>
<tr><th class="clear-th-bottom"></th><td class="clear-td-bottom" colspan="10"><input type="submit" value="保存" class="set_btn" /></td></tr>
</table>  

<table width="100%" border="0" cellspacing="0" class="table-data form" id="table-attr" style="display:none;">
<?php echo smarty_function_widget(array('id'=>"attr/form",'from'=>"zx:case"),$_smarty_tpl);?>

<tr><th class="clear-th-bottom"></th><td class="clear-td-bottom" colspan="10"><input type="submit" value="保存" class="set_btn" /></td></tr>
</table> 
    
</form>
</div>
<script type="text/javascript">
    (function(K, $) {
        $("div.page-data").tabs();
        $("#select_huxing_btn").click(function(e) {
            e.stopPropagation();
            e.preventDefault();
            var home_id = $("#select_home_id").val();
            if (!$.isNumeric(home_id) || home_id < 1) {
                Widget.MsgBox.error("请先选择小区");
                return false;
            }
            var link = $(this).attr("action") || $(this).attr("href");
            link = link.replace("#home_id#", home_id);
            Widget.Dialog.Select(link, "N", function(ret) {
                $("#select_huxing_id").val(ret[0]);
                $("#select_huxing_name").val(ret[1].title);
                $("#select_huxing_photo").attr("src", ret[1].photo);
            }, {title: "选择户型图", width: 500});
        });
    })(window.KT, window.jQuery);
</script>
<?php echo $_smarty_tpl->getSubTemplate ("ucenter/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>