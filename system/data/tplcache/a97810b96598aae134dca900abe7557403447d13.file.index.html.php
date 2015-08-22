<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 14:25:16
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/ucenter/designer/index.html" */ ?>
<?php /*%%SmartyHeaderCode:177989636355d815cc73e6a3-65756030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a97810b96598aae134dca900abe7557403447d13' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/ucenter/designer/index.html',
      1 => 1440057998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177989636355d815cc73e6a3-65756030',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'attr' => 0,
    'designer' => 0,
    'company' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d815cc877be5_55605043',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d815cc877be5_55605043')) {function content_55d815cc877be5_55605043($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_function_widget')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.widget.php';
?><?php echo $_smarty_tpl->getSubTemplate ("ucenter/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="base_info"><b>博客资料</b>（<span class="red">*</span>必填项)</div>
<div class="page-data">
    <form  action="<?php echo smarty_function_link(array('ctl'=>'ucenter/designer:index','http'=>true),$_smarty_tpl);?>
" mini-form="designer" method="post" >
        <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
            <li><a href="#table-info">属性设置</a></li>
            <li><a href="#table-attr">基本信息</a></li>            
        </ul>
        <table width="100%" border="0" cellspacing="0" class="form" id="table-attr" style="display:none;">
    <?php echo smarty_function_widget(array('id'=>"attr/form",'value'=>$_smarty_tpl->tpl_vars['attr']->value,'from'=>"zx:designer"),$_smarty_tpl);?>

        <tr><th></th><td><input type="submit" value="保存" class="set_btn" /></td></tr>
</table> 
        <table width="100%" border="0" cellspacing="0" id="table-info" class="form" style="display:block;">
            <tr>
                <th>所属公司：</th>
                <td>
                    <input type="hidden" id="select_company_id" name="data[company_id]" value="<?php echo $_smarty_tpl->tpl_vars['designer']->value['company_id'];?>
" class="input"/>
                    <input type="text" id="select_company_name" value="<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
" class="input"/>
                    <a class="yzmbtn" action="<?php echo smarty_function_link(array('ctl'=>'ucenter/select:company'),$_smarty_tpl);?>
" mini-select="#select_company_id,#select_company_name/N/<?php echo $_smarty_tpl->tpl_vars['designer']->value['city_id'];?>
/选择公司"/>选择公司</a>
                </td>
            </tr>
            <tr>
                <th >城市：</th>
                <td>
                    <label>城市:<select name="data[city_id]" class="w-100"><?php echo smarty_function_widget(array('id'=>"data/city",'value'=>$_smarty_tpl->tpl_vars['designer']->value['city_id']),$_smarty_tpl);?>
</select></label>
                    <label>地区:<select name="data[area_id]" class="w-100"><?php echo smarty_function_widget(array('id'=>"data/area",'value'=>$_smarty_tpl->tpl_vars['designer']->value['area_id'],'city_id'=>$_smarty_tpl->tpl_vars['designer']->value['city_id']),$_smarty_tpl);?>
</select></label>
                </td>
            </tr>
            <tr><th>毕业院校：</th><td><input type="text" name="data[school]" value="<?php echo $_smarty_tpl->tpl_vars['designer']->value['school'];?>
" class="input w-300"/></td></tr>
            <tr><th>QQ：</th><td><input type="text" name="data[qq]" value="<?php echo $_smarty_tpl->tpl_vars['designer']->value['qq'];?>
" class="input w-300"/></td></tr>
            <tr><th>简介：</th><td><textarea name="data[about]" kindeditor="full" style="width:580px;height:350px;"><?php echo $_smarty_tpl->tpl_vars['designer']->value['about'];?>
</textarea></td></tr>

    
      <tr><th></th><td><input type="submit" value="保存" class="set_btn" /></td></tr>
</table>

    
    

</form>
</div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/kindeditor/kindeditor.js"></script>
<script type="text/javascript">
    (function(K, $) {

        var editor = KindEditor.create('textarea[kindeditor]', $.extend({uploadJson: '<?php echo smarty_function_link(array('ctl'=>"magic:editorupload",'http'=>true),$_smarty_tpl);?>
'}, window.KindEditor_Simple));




        //切换按钮(基本信息,属性设置)
        $(".page-data .ui-tabs-nav li").click(function(){
            $(".page-data table").css("display","none");
            $(".page-data table").eq($(this).index()).css("display","block");
        })

        

    })(window.KT, window.jQuery);
</script>
<script type="text/javascript">
    (function(K, $) {
        $("div.page-data").tabs();
        $("select[name='data[city_id]']").live('change', function() {
            var city_id = $(this).val();
            if (!city_id) {
                return false;
            }
            var link = "<?php echo smarty_function_link(array('ctl'=>'magic:area','arg0'=>'#city_id#','http'=>true),$_smarty_tpl);?>
"
            $.getJSON(link.replace("#city_id#", city_id), function(ret) {
                if (ret.error) {
                    Widget.MsgBox.error(ret.message.join(","));
                } else if (ret.areas.length > 0) {
                    var html = "";
                    for (var i = 0; i < ret.areas.length; i++) {
                        html += '<option value="' + ret.areas[i].area_id + '">' + ret.areas[i].area_name + '</option>';
                    }
                    $("select[name='data[area_id]']").html(html);
                } else {
                    $("select[name='data[area_id]']").html('<option value="">--</option>');
                }
            });
        });
    })(window.KT, window.jQuery);
</script>
<?php echo $_smarty_tpl->getSubTemplate ("ucenter/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>