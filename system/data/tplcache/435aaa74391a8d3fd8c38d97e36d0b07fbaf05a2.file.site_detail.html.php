<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:22:44
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/site_detail.html" */ ?>
<?php /*%%SmartyHeaderCode:112925566555d7eb046d5a68-76120111%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '435aaa74391a8d3fd8c38d97e36d0b07fbaf05a2' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/site_detail.html',
      1 => 1440051819,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112925566555d7eb046d5a68-76120111',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'detail' => 0,
    'company' => 0,
    'pager' => 0,
    'site_status' => 0,
    'site_notes' => 0,
    'item' => 0,
    'sites' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7eb04922697_11769099',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7eb04922697_11769099')) {function content_55d7eb04922697_11769099($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_format')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.format.php';
if (!is_callable('smarty_modifier_cutstr')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.cutstr.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <!----------头部和导航公共部分------------>
            <!--   主题部分开始 -->
            
        <div class="index_b_bg hauto">
    <!-- 当前位置开始   -->
    	<div class="w1000 bgwhite ask_list_weizhi">
                  <span class="span11 icobg block_lt"></span>
        	   <span class="block_lt">您当前所在的位置:</span>
                <a title="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
" href="\" class="block_lt"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
</a>
                <span class="block_lt">></span>
                <a title="我搜我家" href="<?php echo smarty_function_link(array('ctl'=>'home'),$_smarty_tpl);?>
" class="block_lt">我搜我家</a>
                <span class="block_lt">></span>
                <a href="<?php echo smarty_function_link(array('ctl'=>'site'),$_smarty_tpl);?>
" title="在建工地" class="block_lt">在建工地</a>
                <span class="block_lt">></span>
                <a href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['site_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
" class="block_lt"><?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
</a>
        </div>
    <!-- 当前位置结束   -->  
    <!-- 公司介绍开始  -->
    	<div class="w1000 company_describition bgwhite mt20 hauto">
           <div class="company_describition_l lt hauto">
            	<p class="lt p30">
                    <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['company']->value['logo'];?>
" width="135" height="70" /></a>
                </p>
                <p class="lt p31">
                	<span class="block"><b>承接公司：</b><a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id']),$_smarty_tpl);?>
" class="black8"><?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
</a></span>
					<span class="block"><b>电话：</b><?php echo $_smarty_tpl->tpl_vars['company']->value['tel'];?>
</span>
					<span class="block"><b>地址：</b><?php echo $_smarty_tpl->tpl_vars['company']->value['addr'];?>
</span>
                </p>  
                <p class="cl"></p>            
             </div>
             <div class="company_describition_c lt mb15"></div>
             <div class="company_describition_r lt hauto">
                <h3 class="red f16 mb20"><?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
</h3>
				<p>进度：<?php echo $_smarty_tpl->tpl_vars['site_status']->value[$_smarty_tpl->tpl_vars['detail']->value['status']];?>
</p>
				<p>创建时间：<?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['detail']->value['dateline']);?>
</p>  
             </div>
             <div class="cl"></div>    
        </div>   
    <!-- 公司介绍结束  -->
    <!-- 工地进行时开始  -->
    	<div class="work_area_all w1000">
            <div class="work_area w1000 mt20">
                <p class="p32">
                    <font class="ftw org f100">工地进行</font><font class="ftw f68 black">时间轴</font>
                </p>
             <div class="w1000 work_area_b">
                    <div class="work_area_b1 site_status_<?php echo $_smarty_tpl->tpl_vars['detail']->value['status'];?>
">
                    </div>
                   
             </div>
            </div>
   		</div>
    <!-- 工地进行时结束  -->
    <!-- QQ咨询开始  -->
    
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['site_notes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <div class="w1000 bgwhite zjgd_qq mt5 hauto" style="min-height: 200px;">
        	<div class="zjgd_qq_l lt">
            	<h2 class="mt40 black f22">[<?php echo $_smarty_tpl->tpl_vars['site_status']->value[$_smarty_tpl->tpl_vars['item']->value['status']];?>
]</h2>
                <a target="_blank"  href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $_smarty_tpl->tpl_vars['company']->value['qq'];?>
&amp;site=qq&amp;menu=yes" class="block a18 a5">QQ咨询</a>
                <a  mini-load="预约参观"  href="<?php echo smarty_function_link(array('ctl'=>'site:yuyue','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['site_id'],'http'=>'empty'),$_smarty_tpl);?>
" class="block a19 a5 mt15">免费预约</a>
            </div>
            <div class="zjgd_qq_r lt">
                <div class="mt10">
                <?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
   
                </div>
            </div>
        </div>
        <?php } ?>
    <div class="w1000 bgwhite mt5 hauto">
        <div class="page">
           <?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>

        </div>
    </div>
     <!-- QQ咨询结束  -->
     <!-- 相关在建工地开始 -->
     	<div class="xgzjgd w1000 hauto mt20">
        	<h2>相关在建工地</h2>
            <div class="zjgd_show_1 w1000 bgwhite mt10 hauto">
             
                	<ul class="lt">
                        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sites']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                    	<li>
                         <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['face_pic'];?>
" width="220" height="155"/></a>
                           
                            <p><a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],30,'');?>
</a></p>
                            <p class="rt mr10">
                            	<span class="block_lt">进度：</span>
                                <span class="block_lt span27 orgbg"><a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['site_status']->value[$_smarty_tpl->tpl_vars['item']->value['status']];?>
</a></span>
                            </p>
                            <p class="cl"></p>
                           
                        </li>
                    <?php } ?>
                    </ul>
              
            </div>
            <div class="h20"></div>
        </div>
  
     



<?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
       <?php }} ?>