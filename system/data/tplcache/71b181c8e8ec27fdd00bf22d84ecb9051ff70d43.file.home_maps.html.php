<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:41:58
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/home_maps.html" */ ?>
<?php /*%%SmartyHeaderCode:95923475055d7ef86af1526-49364753%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71b181c8e8ec27fdd00bf22d84ecb9051ff70d43' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/home_maps.html',
      1 => 1402664332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95923475055d7ef86af1526-49364753',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ef86b7d058_75042477',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ef86b7d058_75042477')) {function content_55d7ef86b7d058_75042477($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--        主题部分开始        --->
<div class="w1000 hauto bgwhite">
    <!--  左面部分开始       -->
    <div class="map_main_l lt">
        <div class="map_main_l_t">
            共有<font class="red" id='jq_total_nums'>0</font>条结果
        </div>
        <div class="map_main_l_b">

        </div>
        <div class="cl"></div>
        <div class="return_list mt15">
            <a href="<?php echo smarty_function_link(array('ctl'=>'home:items'),$_smarty_tpl);?>
">返回列表模式>></a>
        </div>
    </div>
    <!--  左面部分结束       -->
    <!--  滑动部分开始       -->
    <div class="map_main_c lt hauto">

    </div>
    <!--  滑动部分结束       -->
    <!--  右面部分开始       -->
    <div class="map_main_r lt hauto">
        <div id='baidumap' style="width: 685px; height: 600px;"></div>
    </div>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=824a595f958e444b737a5bc6325ad44f"></script>  
    <!--  右面部分结束       -->                 		
</div>           
<div class="cl h20"></div> 
<!--        主题部分结束        --->

<script>
    $(document).ready(function() {
        $.ajaxSetup({cache: false});
        var map = new BMap.Map("baidumap");
        map.centerAndZoom("<?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
", 14);
        map.addEventListener("load",function(){ //加载完成时
            getResult();
        });
        map.addControl(new BMap.NavigationControl());  //添加默认缩放平移控件
        
        map.addEventListener("dragend", function() {
            map.clearOverlays();
            getResult();
        });
        window.markerData = [];    
        window.infoWindowData = [];
        function addMarker(data){
            var point  = new BMap.Point(data.lng,data.lat);
            window.markerData[data.id] = new BMap.Marker(point);
            map.addOverlay(window.markerData[data.id]);
            var sContent =
            "<h4 style='margin:0 0 5px 0;padding:0.2em 0'>"+data.name+"</h4>" + 
            "<a target='_blank' href='"+data.link+"'><img style='float:right;margin:4px' id='baidu_pic_"+data.id+"' src='<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/"+data.face_pic+"' width='139' height='104' title='"+data.name+"'/><a>" + 
            "</div>";
            
            window.infoWindowData[data.id]= new BMap.InfoWindow(sContent);  // 创建信息窗口对象
            
            window.markerData[data.id].setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
            window.markerData[data.id].addEventListener("click", function(){          
                this.openInfoWindow(window.infoWindowData[data.id]);
             
            });
            window.markerData[data.id].openInfoWindow(window.infoWindowData[data.id]);
        }
        $(".map_main_l_b_1").live('mouseover',function(){
             $(this).css('background','#F3F3F3').siblings().css('background','#FFFFFF');
             var id = $(this).attr('rel');
             window.markerData[id].openInfoWindow(window.infoWindowData[id]);
        });
        $(".map_main_l_b_1").live('mouseout',function(){
           $(this).css('background','#FFFFFF')
        }); 
        function calldata(data){
            var str = ' ';
            var i = 0;
            for(a in data){
              i++;
                addMarker(data[a]);
                str+='<div rel="'+data[a].id+'" class="map_main_l_b_1 mt5"><div class="red_ico icobg"><font>'+i+'</font></div><p>';
                            
                str+='<a  target="_blank" title="'+data[a].name+'"  href="'+data[a].link+'"><font>'+data[a].name+'</font></a> - <a  target="_blank" title="'+data[a].name+'" href="'+data[a].link+'">详情>></a><br />';
				str+='				地址：'+data[a].addr+'<br />';
				str+='				电话:'+data[a].tel;
                str+='            </p>';
                str+='            <a  target="_blank" title="'+data[a].name+'"  href="'+data[a].link+'"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/'+data[a].face_pic+'" width="70" height="50"/></a>';
                str+='       </div>';
                
            }
            $(".map_main_l_b").html(str);
        }
        function getResult() {
            var bs = map.getBounds();   //获取可视区域
            var bssw = bs.getSouthWest();   //可视区域左下角
            var bsne = bs.getNorthEast();   //可视区域右上角
            $.post(
                '<?php echo smarty_function_link(array('ctl'=>"home:result"),$_smarty_tpl);?>
',
                {'SO[lng_start]':bssw.lng,'SO[lng_end]':bsne.lng,'SO[lat_start]':bssw.lat,'SO[lat_end]':bsne.lat},
                 function(data) {
                    if(data.result){
                       $("#jq_total_nums").html(data.total);
                       calldata(data.result);
                    }
                },'json'
            );
        }
       


    });
</script>

<?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
           

<?php }} ?>