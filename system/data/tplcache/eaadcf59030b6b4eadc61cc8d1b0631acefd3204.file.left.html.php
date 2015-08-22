<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:22:19
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/company/left.html" */ ?>
<?php /*%%SmartyHeaderCode:27880953355d7eaeb4628e1-25585601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eaadcf59030b6b4eadc61cc8d1b0631acefd3204' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/company/left.html',
      1 => 1402664332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27880953355d7eaeb4628e1-25585601',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company' => 0,
    'company_member' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7eaeb4c4592_45046186',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7eaeb4c4592_45046186')) {function content_55d7eaeb4c4592_45046186($_smarty_tpl) {?><div class="qyjs_main_l lt hauto">
    <h2 class="mb10">地理位置</h2>

    <div id='allmap' style="width: 280px; height: 195px">
       
    </div>
    
       <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=824a595f958e444b737a5bc6325ad44f"></script>
      
        <div id="mapshowcontent" style="display: none;">
            <p style="font-size: 14px; font-weight: bold;color: #3399ff;">地址：<?php echo $_smarty_tpl->tpl_vars['company']->value['addr'];?>
</p>
            <p  style="font-size: 14px; font-weight: bold; margin-top: 5px; color: #3399ff; ">咨询电话：<strong><?php echo $_smarty_tpl->tpl_vars['company']->value['tel'];?>
</strong></p>
        </div>
         <script type="text/javascript">
            // 百度地图API功能
            var map = new BMap.Map("allmap");
            map.centerAndZoom(new BMap.Point(<?php echo $_smarty_tpl->tpl_vars['company']->value['lng'];?>
, <?php echo $_smarty_tpl->tpl_vars['company']->value['lat'];?>
), 14);
            map.addControl(new BMap.NavigationControl());  //添加默认缩放平移控件
            var marker1 = new BMap.Marker(new BMap.Point(<?php echo $_smarty_tpl->tpl_vars['company']->value['lng'];?>
, <?php echo $_smarty_tpl->tpl_vars['company']->value['lat'];?>
));  // 创建标注
            map.addOverlay(marker1);              // 将标注添加到地图中
            marker1.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
            //创建信息窗口
            var infoWindow1 = new BMap.InfoWindow($("#mapshowcontent").html());
            marker1.addEventListener("click", function(){this.openInfoWindow(infoWindow1);});
        </script>
    <div class="qyjs_main_l_b hauto bgwhite mt20">
        <p class="mt20 p36"><b><?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
</b></p>
        <p>电话：<?php echo $_smarty_tpl->tpl_vars['company']->value['tel'];?>
</p>
        <p>手机：<?php echo $_smarty_tpl->tpl_vars['company_member']->value['mobile'];?>
</p>
        <p>Q Q：<?php echo $_smarty_tpl->tpl_vars['company']->value['qq'];?>
</p>
        <p>地址：<?php echo $_smarty_tpl->tpl_vars['company']->value['addr'];?>
</p>
  
    </div>
</div><?php }} ?>