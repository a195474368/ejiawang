<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:43:25
         compiled from "mobile:case/index.html" */ ?>
<?php /*%%SmartyHeaderCode:194511083555d7efdd16c606-13337589%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1157ffc97c05daa3621f6386b516df80fa05c9f2' => 
    array (
      0 => 'mobile:case/index.html',
      1 => 1420010587,
      2 => 'mobile',
    ),
  ),
  'nocache_hash' => '194511083555d7efdd16c606-13337589',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'attr_values' => 0,
    'item' => 0,
    'item2' => 0,
    'case' => 0,
    'pager' => 0,
    'nextpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7efdd286725_99477596',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7efdd286725_99477596')) {function content_55d7efdd286725_99477596($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ('mobile:block/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--头部开始-->
<div class="mobile_top">
    <div class="mobile_top_son">
        <a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
" class="detail-first"><img src="images/back_bg.png" width="10"/></a>
        <div class="detail-second">图库</div>
    </div>
</div>
<div class="h45"></div>
<!--头部结束-->
<!--导航开始-->
<div class="mobile_photo">
    <ul class="mobile_photo_menu">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['attr_values']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['index']++;
?>
        <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['index']<3){?>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" class="personal_menu_a"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
            <ul class="mobile_photo_son none">

                <?php  $_smarty_tpl->tpl_vars['item2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item2']->key => $_smarty_tpl->tpl_vars['item2']->value){
$_smarty_tpl->tpl_vars['item2']->_loop = true;
?>
                <li class="item"> <a href="<?php echo $_smarty_tpl->tpl_vars['item2']->value['link'];?>
" ><?php echo $_smarty_tpl->tpl_vars['item2']->value['title'];?>
</a></li>
                <?php } ?>
            </ul>
        </li>
        <?php }?>
        <?php } ?>
    </ul>
</div>
<script>
    $(document).ready(function() {
        $(".mobile_photo_menu li").hover(
                function() {
                    $(this).find(".personal_menu_a").addClass("current2");
                    $(this).find(".mobile_photo_son").show();
                },
                function() {
                    $(this).find(".personal_menu_a").removeClass("current2");
                    $(this).find(".mobile_photo_son").hide();
                }
        );
    });
</script>
<!--导航结束-->
<div class="cl"></div>
<!--主题部分开始-->
<div class="mobile_main1 hauto"> 
    <div class="mobile_img_all">
        
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['case']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <div class="item"><a href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"><img src='<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['photo'];?>
_thumb.jpg' /></a></div>
        <?php } ?>
    </div>
    <div id="jq_loding" style=" height: 20px; text-align: center; "></div>
    <div class="h45"></div>
   
</div>

<script type="text/javascript" src="script/jquery.masonry.min.js"></script>
<script type="text/javascript">
    var num = 1;
    var nextpage = '<?php echo $_smarty_tpl->tpl_vars['nextpage']->value;?>
';
    var lock  = 0;
    $(document).ready(function() {
        var $container = $('.mobile_img_all');
        $container.imagesLoaded(function() {
            $container.masonry({
                itemSelector : '.item',
                columnWidth: 90, //一列的宽度 Integer
                isAnimated: true, //使用jquery的布局变化  Boolean
                gutterWidth: 8, //列的间隙 Integer
                isFitWidth: true, // 适应宽度   Boolean
                isResizableL: true, // 是否可调整大小 Boolean
                isRTL: true, //使用从右到左的布局 Boolean
            });
                
        });
        $(window).scroll(function(){              
            if(!lock && $(window).scrollTop() ==$(document).height() - $(window).height()  ){
                lock = 1;
                num++;
                var link = nextpage.replace('{page}',num);
                $("#jq_loding").show().html('正在加载中...');
                $.get(link,function(ret){
                    if(ret.data){
                        var data = ret.data;
                        $("#jq_loding").html('');
                       var items = [],
                            item, datum;

                        for ( var i=0, len = data.length; i < len; i++ ) {
                          datum = data[i];
                          item = '<div class="item"><a title="'+datum.title+'" href="' + datum.url + '">'
                            + '<img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/' + datum.img+'_thumb.jpg" />'
                            + '</a></div>';
                          items.push( item );
                        }
                        var $items = $( items.join('') );
                        $items.imagesLoaded(function(){
                          $container.append( $items ).masonry( 'appended', $items, true );
                        });                    
                        lock = 0;
                    }else{
                        
                        $("#jq_loding").html('没有数据了.....');
                    }
                },'json');
            }           
        });

    });
</script>

<!--主题部分结束-->
<?php echo $_smarty_tpl->getSubTemplate ('mobile:block/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>