<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 12:06:18
         compiled from "mobile:designer/yuyue.html" */ ?>
<?php /*%%SmartyHeaderCode:201255482055d7f53a567503-83038685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebc74ea48e0bba68e3758d718b3779ba258ce517' => 
    array (
      0 => 'mobile:designer/yuyue.html',
      1 => 1420010588,
      2 => 'mobile',
    ),
  ),
  'nocache_hash' => '201255482055d7f53a567503-83038685',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'designer' => 0,
    'CONFIG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7f53a614ec6_32748404',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7f53a614ec6_32748404')) {function content_55d7f53a614ec6_32748404($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ('mobile:block/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--头部开始-->
	<div class="mobile_top">
    	<div class="mobile_top_son">
        	<a href="javascript:window.history.go(-1);" class="detail-first"><img src="images/back_bg.png" width="10"/></a>
            <div class="detail-second">预约设计</div>
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
                        <td><h2>预约设计：<?php echo $_smarty_tpl->tpl_vars['designer']->value['realname'];?>
</h2></td>
                    </tr>
                    
              
                	<tr>
                    	<td><i>*</i>&nbsp;&nbsp;你的姓名</td>
                    </tr>
                    <tr>
                    	<td><input type="text" class="public_text"  name="data[cantact]"/></td>
                    </tr>
                    <tr>
                    	<td><i>*</i>&nbsp;&nbsp;你的联系方式</td>
                    </tr>
                    <tr>
                    	<td><input type="text" class="public_text"  name="data[mobile]"/></td>
                    </tr>
                    
                   
                    
                    <tr id='showErr' style="display: none;">
                        <td style="text-align: center;" ><font id="showTxt" style=" color: red; font-size: 14px;"></font></td>
                    </tr>
                    <tr>
                    	<td height="60"><input type="button" id='tender_submit' class="public_text1" value="立刻报名"/></td>
                    </tr>
                    
                </table>
            </form>
        </div>
        <div class="fabu_ok_bg " style="display: none;">
            <div class="fabu_ok">
                <h3>
                    <img src="images/renzhen.png" alt="成功">提交成功
                </h3>
                <p>稍后您的专职装修管家将与您联系，为您讲解装修流程和相关注意事项，装修过程中遇到的任何问题都可以咨询您的专职装修管家。服务热线:<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['phone'];?>
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
          if (lock == 0) {    
                lock = 1;
                $.post("<?php echo smarty_function_link(array('ctl'=>'designer:yuyue','arg0'=>$_smarty_tpl->tpl_vars['designer']->value['uid']),$_smarty_tpl);?>
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
       
    })(window.KT, window.jQuery);
</script>
<?php echo $_smarty_tpl->getSubTemplate ('mobile:block/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>