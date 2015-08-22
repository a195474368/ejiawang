<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:20:29
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/ucenter/member/mobile.html" */ ?>
<?php /*%%SmartyHeaderCode:71921390155d7ea7d02d361-39464867%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22155637314a4f3f5363fad0ca0031d004e218b4' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/ucenter/member/mobile.html',
      1 => 1402664332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71921390155d7ea7d02d361-39464867',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MEMBER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea7d0e71f2_12742062',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea7d0e71f2_12742062')) {function content_55d7ea7d0e71f2_12742062($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("ucenter/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/widget.YMD.js"></script>
<div class="set_c2"><h3>手机验证 <span>( <I>*</I> 为必填 )</span></h3></div>
<div class="set_c4">
    <?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['verify_mobile']){?> 
    <h4 class="tips"> <span class="success">您已经通过手机认证</span></h4>
    
    <?php }else{ ?>
    <form id="account-form">
        <table class="form">

            <tr>
                <th><span class="red">&nbsp;</span>手机：</th>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['mobile'];?>
    <input type="button" id="jq_mobile_btn"   style=" width: 120px; height: 30px; line-height: 30px; border: dotted #000 1px;" value="发送验证码" />
                </td>
            </tr>
            <tr>
                <th><span class="red">&nbsp;</span>短信验证码：</th>
                <td>
                    <input type="text" name="data[code]" value="" class="input w-100"/>
                </td>
            </tr>

            <tr>
                <th></th><td><input action="<?php echo smarty_function_link(array('ctl'=>'ucenter/member:mobile'),$_smarty_tpl);?>
" mini-submit="#account-form" type="button" value="保存" class="set_btn" /></td>
            </tr>
        </table>
    </form>
    <?php }?>
</div>
<script>
    jQuery.fn.countDown = function(settings, to) {
        settings = jQuery.extend({
            defaultVal: '重新发送',
            duration: 1000,
            startNumber: 10,
            endNumber: 0,
            callBack: function() {
            }
        }, settings);
        return this.each(function() {
            if (!to && to != settings.endNumber) {
                to = settings.startNumber;
            }
            $(this).val(settings.defaultVal + '(' + to + ')');
            $(this).animate({
                'disabled': true
            }, settings.duration, '', function() {
                if (to > settings.endNumber + 1) {
                    $(this).val(settings.defaultVal + '(' + (to - 1) + ')').countDown(settings, to - 1);
                }
                else
                {
                    settings.callBack(this);
                }
            });

        });
    };
    $(document).ready(function() {
        $("#jq_mobile_btn").click(function() {
            $(this).unbind('countDown');
            $(this).countDown({
                defaultVal: '重新发送',
                startNumber: 100,
                callBack: function(me) {
                    $(me).val('重新发送');
                    $(me).attr('disabled', false);
                }
            });
            $.get('<?php echo smarty_function_link(array('ctl'=>"ucenter/member:code"),$_smarty_tpl);?>
');

        });
    });
</script>
<?php echo $_smarty_tpl->getSubTemplate ("ucenter/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>