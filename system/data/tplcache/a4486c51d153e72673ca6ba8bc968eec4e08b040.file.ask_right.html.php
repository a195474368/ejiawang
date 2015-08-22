<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:40:47
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/block/ask_right.html" */ ?>
<?php /*%%SmartyHeaderCode:187359321355d7ef3f43df17-10903868%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4486c51d153e72673ca6ba8bc968eec4e08b040' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/block/ask_right.html',
      1 => 1402664332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187359321355d7ef3f43df17-10903868',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ef3f4a8a46_56009228',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ef3f4a8a46_56009228')) {function content_55d7ef3f4a8a46_56009228($_smarty_tpl) {?><?php if (!is_callable('smarty_function_widget')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.widget.php';
if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_block_calldata')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/block.calldata.php';
?>
            <div class="ads4 hauto">
                <?php echo smarty_function_widget(array('id'=>"adv",'name'=>"问答右侧热心公司上广告位",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"5"),$_smarty_tpl);?>

            </div> 
            <div class="ask_company_phb hauto mt20">
                <h2><a target="_blank" title="热心装修公司排行榜" href="<?php echo smarty_function_link(array('ctl'=>'gs:items'),$_smarty_tpl);?>
">热心装修公司排行榜</a></h2>
                <div class="ask_company_phb_show hauto bgwhite mt10">
                    <div class="ask_company_phb_show1 hauto">
                        <ul>
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"answer_num:desc",'limit'=>"6")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"answer_num:desc",'limit'=>"6"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 

                            <li>
                                <div class="ask_show_sum  none">
                                    <span class="no<{$index+1}> block_lt num"></span>
                                    <a target="_blank" href="<{link ctl='company' arg0=$item.company_id}>" title="<{$item.name}>" class="block_lt ml5"><{$item.sort_name}></a>
                                    <span class="rt">回答数&nbsp;<{$item.answer_num}></span>
                                </div>
                                <div class="ask_show_detail none">
                                    <a target="_blank" href="<{link ctl='company' arg0=$item.company_id}>" title="<{$item.name}>"><img width="110" height="55" src="<{$pager.img}>/<{$item.logo}>" /></a>
                                    <p class="lt ml10">
                                        <span class="block_lt mb10"><i><{$index+1}></i></span>
                                        <a target="_blank" href="<{link ctl='company' arg0=$item.company_id}>" title="<{$item.name}>" class="block_lt"><{$item.sort_name}></a><br />
                                        <a class="cl block"></a>
                                        <font class="red">回答数<{$item.answer_num}></font>
                                    </p>

                                </div>
                            </li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"answer_num:desc",'limit'=>"6"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </ul>
                    </div>
                </div>
            </div>                    
            <div class="ads4 hauto mt20">
                <?php echo smarty_function_widget(array('id'=>"adv",'name'=>"问答右侧热心公司下广告位",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"5"),$_smarty_tpl);?>

            </div>  

            <script>
                $(document).ready(function() {
                    $(".ask_main_c_t_ul_son ul li:last").css('border-bottom', 'none').css('margin-bottom', '10px')
                    $(".ask_main_c_t_ul_son1 ul li:last").css('border-bottom', 'none').css('margin-bottom', '10px')
                    $(".ask_company_phb_show1 ul li").mouseover(function() {
                        var index = $(this).index();
                        $(".ask_company_phb_show1 ul li").each(function(a) {
                            if (a == index) {
                                $(this).find(".ask_show_detail").show();
                                $(this).find(".ask_show_sum").hide();
                            } else {
                                $(this).find(".ask_show_detail").hide();
                                $(this).find(".ask_show_sum").show();
                            }

                        });
                    });
                    $(".ask_company_phb_show1 ul li").eq(0).mouseover();
                    $(".ask_company_phb_show1 ul li:last").css('border-bottom', 'none');

                });
            </script>
       <?php }} ?>