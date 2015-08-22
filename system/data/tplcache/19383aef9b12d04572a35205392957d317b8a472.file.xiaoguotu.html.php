<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:28:12
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/company/xiaoguotu.html" */ ?>
<?php /*%%SmartyHeaderCode:97537914255d7ec4c1ad2f5-84745481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19383aef9b12d04572a35205392957d317b8a472' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/company/xiaoguotu.html',
      1 => 1422071447,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97537914255d7ec4c1ad2f5-84745481',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_id' => 0,
    'pager' => 0,
    'case' => 0,
    'item' => 0,
    'item2' => 0,
    'photos' => 0,
    'company' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ec4c3b2231_62220901',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ec4c3b2231_62220901')) {function content_55d7ec4c3b2231_62220901($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.cutstr.php';
?><?php echo $_smarty_tpl->getSubTemplate ('company/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- 详情页的公共部分 -->
<!-- 主题部分开始 -->
<div class="index_b_bg hauto">
    <!-- 当前位置开始   -->
    <div class="favor_detail_weizhi w1000 bodr_b mb20">
        <font>你当前的位置：</font>
        <a href="<?php echo smarty_function_link(array('ctl'=>'company:xiaoguotu','arg0'=>$_smarty_tpl->tpl_vars['company_id']->value),$_smarty_tpl);?>
">效果图库案例</a>

    </div>
    <!-- 当前位置结束   -->
    <!-- 效果图案例主题部分开始 -->
    <div class="w1000 hauto effect_case">
        <!--标题开始 -->
        <h2>
            <span class="block_lt f20">图库案例</span>
            <span class="block rt f14">共有<font class="red"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['pager']->value['count'])===null||$tmp==='' ? '0' : $tmp);?>
</font>套案例</span>
        </h2>
        <div class="cl"></div>
        <!--标题结束-->
        <!--案例介绍开始-->
        <div class="w1000 effect_case_detail mt10 hauto">
             <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['case']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
             <div class="effect_case_detail_t bgwhite lt bodr mr10 mt10" style="height:285px;overflow: hidden">
                <div class="effect_case_detail_t_t">
                    <p class="p39 lt" >
                       <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['photo'];?>
_thumb.jpg" width="210" height="170" /></a>
                    </p>
                    <p class="p40 lt">
   
                         <?php if ($_smarty_tpl->tpl_vars['item']->value['lastphotos']){?>   
                            <?php  $_smarty_tpl->tpl_vars['item2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['lastphotos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item2']->key => $_smarty_tpl->tpl_vars['item2']->value){
$_smarty_tpl->tpl_vars['item2']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['index']++;
?>
                            <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['index']==2||$_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['index']==1){?>
                            <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
"><img style="margin-top:-1px"src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['photos']->value[$_smarty_tpl->tpl_vars['item2']->value]['photo'];?>
_thumb.jpg" width="100" height="83" _height="80" /></a>
                            
                            <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['index']==0){?><?php }?>
                            
                            <?php }?>
                            <?php } ?>
                            <?php }?>
                    </p>
                    <div class="yusj orgbgg none">
                        <a  mini-load="免费设计" href="<?php echo smarty_function_link(array('ctl'=>'gs:yuyue','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'http'=>'empty'),$_smarty_tpl);?>
">预约设计</a>
                    </div>
                </div>
                <div class="effect_detail_t_c">
                    <p class="lt p41 ml10">
                      <a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],10,'..');?>
</a>
                    </p>
                    <p class="rt p42">
                        <span class="span40 block_lt"></span>
                        <span class="block_lt ml5"><a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
" class="black ftw"><?php echo $_smarty_tpl->tpl_vars['item']->value['likes'];?>
人喜欢</a></span>
                        <span class="span41 block_lt ml5"></span>
                        <span class="block_lt ml5"><a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
" class="black ftw"><?php echo $_smarty_tpl->tpl_vars['item']->value['views'];?>
人浏览</a></span>
                    </p>
                    <div class="cl"></div>
                </div>
                 <div class="effect_detail_t_b" style="height:auto">
                    <p>
                       <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
">
                            设计理念：<?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['intro'],80,'..');?>

                        </a>
                    </p>
                </div>
            </div>
              <?php } ?>
        
        </div>
        


        <!--案例介绍结束-->
        <!--分页开始-->
        <div class="w1000 hauto bgwhite mt20">
            <div class="page">
           <?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>

            </div>
        </div>
        <!--分页结束-->

    </div>
    <!-- 效果图案例主题部分结束 -->
    <div class="h30"></div>      
</div> 

<script>
    $(document).ready(function() {
        $(".effect_case_detail_t").mouseover(function() {
            $(this).css('border', '1px solid red');
            $(this).find(".yusj").show();

        }).mouseout(function() {
            $(this).css('border', '1px solid #FFF');
            $(this).find(".yusj").hide();
        });
    });
</script>

<?php echo $_smarty_tpl->getSubTemplate ('company/foot.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>