<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:31:40
         compiled from "/www/wwwroot/www.fzgxw.com/themes/new_green/tenders_detail.html" */ ?>
<?php /*%%SmartyHeaderCode:4114798055d7ed1c0c1c66-48595925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b480ce48b3506a6c81f64d76d5b472f7b516b077' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/new_green/tenders_detail.html',
      1 => 1440206609,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4114798055d7ed1c0c1c66-48595925',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'detail' => 0,
    'type' => 0,
    'setting' => 0,
    'cityList' => 0,
    'areaList' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ed1c24a732_74895458',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ed1c24a732_74895458')) {function content_55d7ed1c24a732_74895458($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_function_widget')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.widget.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!----------头部和导航公共部分------------> 
<!--         主题部分开始           -->
<div class="index_b_bg hauto">
    <!--         你所在的位置开始             -->
    <div class="w1000 mt15 bgwhite ask_list_weizhi">
        <span class="span11 icobg block_lt"></span>
        <span class="block_lt">您当前所在的位置:</span>
        <a title="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
" class="block_lt"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
</a>
        <span class="block_lt">></span>
        <a title="我要装修" href="<?php echo smarty_function_link(array('ctl'=>'tenders'),$_smarty_tpl);?>
" class="block_lt">我要装修</a>
        <span class="block_lt">></span>
        <a href="<?php echo smarty_function_link(array('ctl'=>'tenders:detail','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['id']),$_smarty_tpl);?>
" title='<?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
' class="block_lt"><?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
</a>
    </div>
    <div class="cl"></div>
    <!--        你所在的位置结束      -->
    <!--        内容详情开始         -->
    <div class="ask_detail_main w1000 mt15 hauto">
        <!--        位置结束左面下开始       -->
        <div class="ask_detail_main_l hauto mt5 lt bgwhite">
            <div class="decoration_detail_main_l hauto bodr_b">
                <p class="p49">
                    <a  href="<?php echo smarty_function_link(array('ctl'=>'tenders:detail','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['id']),$_smarty_tpl);?>
" title='<?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
'  class="block_lt org f16 ftw"><?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
</a>
                   <!--  <span class="block rt">
                        <font class="f14">发布时间&nbsp;:&nbsp;</font>
                        <font class="f14"> <?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['detail']->value['dateline']);?>
</font>
                    </span> -->
                    <span class="block cl"></span>
                </p>
                <div class="decoration_main_l_tb">
                    <p class="mt10 p48">
                        <span class="block_lt span62"> 
                            <b class="f14">项目类型&nbsp;：&nbsp;</b><font class="f14">  <?php echo $_smarty_tpl->tpl_vars['setting']->value[$_smarty_tpl->tpl_vars['type']->value['house_type']][$_smarty_tpl->tpl_vars['detail']->value['house_type_id']];?>
</font><br />
                            <b class="f14">建筑面积&nbsp;：&nbsp;</b><font class="f14">   <?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['area'])===null||$tmp==='' ? '' : $tmp);?>
㎡</font>
                        </span> 
                        <span class="block rt span61">
                            <font class="f14 white">投标数</font><br />
                            <font class="org f24"><?php echo $_smarty_tpl->tpl_vars['detail']->value['num2'];?>
</font><font class="black">/</font><font class="black"><?php echo $_smarty_tpl->tpl_vars['detail']->value['num'];?>
</font>
                        </span>
                    </p>
                    <p class="cl"></p>
                </div>
                <p class="mt15">
                    <b class="f14">所在区域&nbsp;：&nbsp;</b><font class="f14"><?php echo $_smarty_tpl->tpl_vars['cityList']->value[$_smarty_tpl->tpl_vars['detail']->value['city_id']]['city_name'];?>
<?php echo $_smarty_tpl->tpl_vars['areaList']->value[$_smarty_tpl->tpl_vars['detail']->value['area_id']]['area_name'];?>
</font>
                </p>
                <p class="mt15">
                    <b class="f14">装修预算&nbsp;：&nbsp;</b><font class="f14 red"> <?php echo $_smarty_tpl->tpl_vars['setting']->value[$_smarty_tpl->tpl_vars['type']->value['budget']][$_smarty_tpl->tpl_vars['detail']->value['budget_id']];?>
</font>
                </p>
                <p class="mt15">
                    <b class="f14">装修时间&nbsp;：&nbsp;</b><font class="f14 red"> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['start_time'])===null||$tmp==='' ? '' : $tmp);?>
</font>
                </p>
                <p class="mt15 p50">
                    <b class="f14">装修要求&nbsp;：&nbsp;</b>
                    <font class="f14"> <?php echo $_smarty_tpl->tpl_vars['detail']->value['demand'];?>
</font>
                </p>
                <p class="mt15">
                    <b class="f14">客服沟通&nbsp;：&nbsp;</b>
                    <font class="f14"><?php echo $_smarty_tpl->tpl_vars['detail']->value['feedback'];?>
</font>
                </p>
                <p class="p51 rt mt30 mb10">
                    <a href="<?php echo smarty_function_link(array('ctl'=>'tenders'),$_smarty_tpl);?>
" title="赶紧发布招标吧" class="block a39">我要装修</a>
                    <span class="block span63"><b class="f14">赶紧发布招标吧!</b></span>
                </p>

            </div>
           
            <div class="cl"></div>
            <div class="h10"></div>


        </div>
        <!--        位置结束左面下结束       -->

        <!--        位置结束右面下开始       -->
        <div class="ask_detail_main_r hauto mt5 lt ml20">
          <?php echo $_smarty_tpl->getSubTemplate ("block/tenders.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
            <div class="cl"></div>
            <div class="ads7 mt15">
               <?php echo smarty_function_widget(array('id'=>"adv",'name'=>"我要装修右侧广告位",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"5"),$_smarty_tpl);?>

            </div>  
        </div>
    </div>
 <?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  <?php }} ?>