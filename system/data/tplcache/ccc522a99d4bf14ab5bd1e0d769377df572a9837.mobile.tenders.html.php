<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:38:08
         compiled from "mobile:tenders.html" */ ?>
<?php /*%%SmartyHeaderCode:26767749755d7eea01684f6-85020373%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccc522a99d4bf14ab5bd1e0d769377df572a9837' => 
    array (
      0 => 'mobile:tenders.html',
      1 => 1439450150,
      2 => 'mobile',
    ),
  ),
  'nocache_hash' => '26767749755d7eea01684f6-85020373',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
    'CONFIG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7eea0259f83_67734385',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7eea0259f83_67734385')) {function content_55d7eea0259f83_67734385($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_function_widget')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.widget.php';
?>﻿<?php echo $_smarty_tpl->getSubTemplate ('mobile:block/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--头部开始-->
	<div class="mobile_top">
    	<div class="mobile_top_son">
        	<a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
" class="detail-first"><img src="images/back_bg.png" width="10"/></a>
            <div class="detail-second">免费设计/报价</div>
        </div>
    </div>
    <div class="h45"></div>
<!--头部结束-->
<!--主题部分开始-->
	<div class="mobile_main hauto">
    	<div class="mobile_tenders">
        	<form id='tenders_form'>
            	<table>
                	<tr>
                    	<td><i>*</i>&nbsp;&nbsp;您的称呼</td>  
                    </tr>
                    <tr>
                    	<td><input type="text" class="public_text" id="names"  name="data[name]"/></td>
                    </tr>
                    <tr>
                    	<td><i>*</i>&nbsp;&nbsp;您的电话</td>
                    </tr>
                    <tr>
                    	<td><input type="text" class="public_text" id="tel" name="data[mobile]"/></td>
                    </tr>
                     <tr>
                    	<td>房屋面积(&nbsp;㎡&nbsp;)</td>
                    </tr>
                    <tr>
                    	<td><input type="text" class="public_text" name="data[area]"/></td>
                    </tr>
                    <tr>
                    	<td height="120">
                        	<select name='data[city_id]' class="select1">
                            	<?php echo smarty_function_widget(array('id'=>"data/city",'value'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>

                            </select>
                            <select name='data[area_id]' class="select1 mt10">
                            	<?php echo smarty_function_widget(array('id'=>"data/area",'value'=>0,'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>

                            </select>
                            <input type="text" name="data[home_name]" class="public_text2 mt10" value="请输入您的小区名称"/>
                        </td>
                    </tr>
                    <script>
						  $(document).ready(function(){
							  $(".public_text2").focus(function(){
								  if($(this).val() == '请输入您的小区名称') $(this).val('');
							  }).focusout(function(){
								  if($(this).val() == '') $(this).val('请输入您的小区名称');
							  });

						  });
   					</script>
                    <tr id='showErr' style="display: none;">
                        <td style="text-align: center;" ><font id="showTxt" style=" color: red; font-size: 14px;"></font></td>
                    </tr>
                    <tr>
                    	<td height="60"><input type="button" id='tender_submit' class="public_text1" value="立刻申请"/></td>
                    </tr>
                    
                </table>
            </form>
        </div>
        <div class="fabu_ok_bg " style="display: none;">
            <div class="fabu_ok">
                <h3>
                    <img src="images/renzhen.png" alt="成功">提交成功
                </h3>
                <p>稍后您的专职装修管家将与您联系，为您讲解装修流程和相关注意事 项，装修过程中遇到的任何问题都可 以咨询您的专职装修管家。服务热线:<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['phone'];?>
</p>
                <input type="button" class="public_text1" id='wozhidao' value="我知道了"/>
            </div>
        </div>
        <div class="h45"></div>
	</div>
<!--主题部分结束-->

<script type="text/javascript">
    var lock = 0;
    (function(K, $) {
        function showmsg(message){
            $("#showErr").show();
            $('#showTxt').html(message);
        }
        $("#tender_submit").click(function(){
            //判断用户名
            var mobiles =document.getElementById("names");
            if( mobiles == "" ){
                alert("请输入你的姓名,方便我们及时联系您!");
                return false;
            }
            //11位手机号判断
            var mobile =document.getElementById("tel");
            var reg = /^1[3|4|5|8|7][0-9]\d{8}$/;
                   if(!reg.test($.trim($('#tel').val())))
                   {
                    alert("手机号码格式不对,请输入11位正确号码！");
                    return false;
                   }

          if (lock == 0) {    
                lock = 1;
                $.post("<?php echo smarty_function_link(array('ctl'=>'tenders:save'),$_smarty_tpl);?>
",$("#tenders_form").serialize(),function(ret){
                        if(ret.error){
                            lock = 0 ;
                            showmsg(ret.message);
                        }else{ 
                            $(".fabu_ok_bg").show();     
                            $(".mobile_tenders").hide();
                        }


                    },'json');
            }
            
        });
        
        $("#wozhidao").click(function(){
            window.location='<?php echo smarty_function_link(array('ctl'=>"index"),$_smarty_tpl);?>
';
        });
        
        $("select[name='data[city_id]']").live('change', function() {
            var city_id = $(this).val();
            if (!city_id) {
                return false;
            }


            var link = "<?php echo smarty_function_link(array('ctl'=>'magic:area','arg0'=>'#city_id#'),$_smarty_tpl);?>
"
            $.getJSON(link.replace("#city_id#", city_id), function(ret) {
                if (ret.error) {
                    alert(ret.message.join(","));
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
<?php echo $_smarty_tpl->getSubTemplate ('mobile:block/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>