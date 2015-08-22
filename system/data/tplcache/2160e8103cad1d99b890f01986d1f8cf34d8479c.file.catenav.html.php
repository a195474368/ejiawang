<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 12:16:42
         compiled from "/www/wwwroot/www.fzgxw.com/themes/cheerful/mall/block/catenav.html" */ ?>
<?php /*%%SmartyHeaderCode:35240129855d7f7aa888682-38983274%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2160e8103cad1d99b890f01986d1f8cf34d8479c' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/cheerful/mall/block/catenav.html',
      1 => 1422687395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35240129855d7f7aa888682-38983274',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'v' => 0,
    'vv' => 0,
    'brand' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7f7aa9a0e93_07873255',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7f7aa9a0e93_07873255')) {function content_55d7f7aa9a0e93_07873255($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_function_widget')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.widget.php';
?><ul id="mall_cate_nav">
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
	<li>
		<div class="mall_main_l_l">
			<h3><span class="basic_jiancai"></span><span><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</span><span class="dayu">></span></h3>
			<p class="cl"></p>
		<p>
		<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value['childrens']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['vv']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['vv']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['vv']->iteration++;
 $_smarty_tpl->tpl_vars['vv']->last = $_smarty_tpl->tpl_vars['vv']->iteration === $_smarty_tpl->tpl_vars['vv']->total;
?>
			<?php if ($_smarty_tpl->tpl_vars['vv']->value['parent_id']==$_smarty_tpl->tpl_vars['v']->value['cat_id']){?>
			<a href="<?php echo smarty_function_link(array('ctl'=>'mall/product','arg0'=>$_smarty_tpl->tpl_vars['vv']->value['cat_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['vv']->value['title'];?>
</a><?php if (!$_smarty_tpl->tpl_vars['vv']->last&&$_smarty_tpl->tpl_vars['vv']->iteration<3){?><i>|</i><?php }?>
			<?php }?><?php if ($_smarty_tpl->tpl_vars['vv']->iteration>3){?><?php break 1?><?php }?><?php } ?>
		</p>
		</div>
		<div class="mall_main_l_r bgwhite none mall_menu_0">
		<h2><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</h2>
		<p>
		<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value['childrens']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['vv']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['vv']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['vv']->iteration++;
 $_smarty_tpl->tpl_vars['vv']->last = $_smarty_tpl->tpl_vars['vv']->iteration === $_smarty_tpl->tpl_vars['vv']->total;
?><?php if ($_smarty_tpl->tpl_vars['vv']->value['parent_id']==$_smarty_tpl->tpl_vars['v']->value['cat_id']){?><a href="<?php echo smarty_function_link(array('ctl'=>'mall/product','arg0'=>$_smarty_tpl->tpl_vars['vv']->value['cat_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['vv']->value['title'];?>
</a><?php if (!$_smarty_tpl->tpl_vars['vv']->last){?><i>|</i><?php }?><?php }?><?php } ?>
		</p>
		<p class="cl h20 bodr_b"></p>
		<h2>促销活动</h2>
		<ul><?php echo smarty_function_widget(array('id'=>"adv",'name'=>"商城首页分类层促销活动",'limit'=>"3"),$_smarty_tpl);?>
<div class="cl"></div></ul>
		<p class="cl h20 bodr_b"></p>
		<div class="mall_shoppers_img">
		<ul>
		<?php  $_smarty_tpl->tpl_vars['brand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['brand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value['brannds']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['brand']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->key => $_smarty_tpl->tpl_vars['brand']->value){
$_smarty_tpl->tpl_vars['brand']->_loop = true;
 $_smarty_tpl->tpl_vars['brand']->iteration++;
?>
		<?php if ($_smarty_tpl->tpl_vars['brand']->iteration>3){?><?php break 1?><?php }?>
		<li><a href="<?php echo smarty_function_link(array('ctl'=>'mall/product:brand','arg0'=>$_smarty_tpl->tpl_vars['brand']->value['brand_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['brand']->value['logo'];?>
" width="100" height="55" /></a></li>
		<?php } ?>
		<div class="cl"></div>
		</ul>
		</div>
		<div class="cl"></div>
		</div>
	</li>
	<?php } ?>
</ul>
<script type="text/javascript">
(function(K, $){
$("#mall_cate_nav li").mouseover(function(){
    $(this).css('border-left','2px solid #0285BD');
    $(this).css('box-shadow','2px 2px 2px #EEEEEE');
	$(this).css('border-right','');
    $(this).find(".dayu").hide();
    var $lay = $(this).find(".mall_main_l_r");
    $lay.show();
    //var lay_bottom = $lay.offset().top + $lay.height();
    var lay_bottom = $(this).offset().top + $lay.height();
    var nav_bottom = $("#mall_cate_nav").offset().top + $("#mall_cate_nav").height();
    //console.log(lay_bottom, $(this).offset().top, $lay.height(), nav_bottom, $("#mall_cate_nav").offset().top, $("#mall_cate_nav").height());
    if(lay_bottom > nav_bottom){
        //$lay.animate({"marginTop": - $lay.height()}, 1000);
        $lay.animate({"marginTop": nav_bottom - lay_bottom}, 1000);
    }
}).mouseout(function(){
    $(this).css('border-left','');
    $(this).css('box-shadow','');
	$(this).css('border-right','1px solid #D5D5D5');
	$(this).find(".dayu").show();
    $(this).find(".mall_main_l_r").hide();	
});
})(window.KT, window.jQuery);
</script><?php }} ?>