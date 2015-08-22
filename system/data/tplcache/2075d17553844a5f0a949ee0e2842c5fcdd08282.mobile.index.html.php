<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 12:52:33
         compiled from "mobile:shop/index.html" */ ?>
<?php /*%%SmartyHeaderCode:196504827255d800115222f7-77012090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2075d17553844a5f0a949ee0e2842c5fcdd08282' => 
    array (
      0 => 'mobile:shop/index.html',
      1 => 1420010588,
      2 => 'mobile',
    ),
  ),
  'nocache_hash' => '196504827255d800115222f7-77012090',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
    'cate_list' => 0,
    'item' => 0,
    'items' => 0,
    'shop' => 0,
    'pager' => 0,
    'shopex' => 0,
    'nextpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d800116e02a2_72111841',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d800116e02a2_72111841')) {function content_55d800116e02a2_72111841($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.cutstr.php';
?><?php echo $_smarty_tpl->getSubTemplate ('mobile:block/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--头部开始-->
<div class="mobile_top">
    <div class="mobile_top_son">
        <a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
" class="detail-first"><img src="images/back_bg.png" width="10"/></a>
        <div class="detail-second">材料商<i><a href="<?php echo smarty_function_link(array('ctl'=>'city'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
</a>&nbsp;<img src="images/xia_white_ico.png" /></i></div>
         <a href="###" class="detail-third1">
            	分类
            </a>
              <!--弹出层开始-->
              <div class="mobile_show2 none" style="height:  auto;overflow: hidden;">
                <ul>
                    <li><a href="<?php echo smarty_function_link(array('ctl'=>'shop'),$_smarty_tpl);?>
"><b>全部商家</b></a></li>
                     <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cate_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                     <?php if (empty($_smarty_tpl->tpl_vars['item']->value['parent_id'])){?>
                    <li> <a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"  href="<?php echo smarty_function_link(array('ctl'=>'shop:items','arg0'=>$_smarty_tpl->tpl_vars['item']->value['cat_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></li>
                    <?php }?>
                    <?php } ?>
                </ul>
			</div>
			<!--弹出层结束-->
            <script>
				$(document).ready(function(){
					$(".mobile_top_son a.detail-third1").toggle(
						function(){
						$(".mobile_show2").show();
						},
						function(){
						$(".mobile_show2").hide();
						}
					);
					
					$(".mobile_show2").click(function(){
						$(this)	.hide();
					});
				});
			</script>
    </div>
</div>
<div class="h45"></div>
<!--头部结束-->
<!--主题部分开始-->
<div class="mobile_main hauto">
    <div class="mobile_material">
        <ul>

            <?php  $_smarty_tpl->tpl_vars['shop'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shop']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shop']->key => $_smarty_tpl->tpl_vars['shop']->value){
$_smarty_tpl->tpl_vars['shop']->_loop = true;
?>
            <li>
                <div class="mobile_material_all">
                    <div class="mobile_material_all_t">
                        <a href="<?php echo smarty_function_link(array('ctl'=>'shop:detail','arg0'=>$_smarty_tpl->tpl_vars['shop']->value['shop_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['shop']->value['logo'];?>
" width="68" height="68"/></a>
                        <div class="mobile_material_all_r lt">
                            <h4>
                                <a href="<?php echo smarty_function_link(array('ctl'=>'shop:detail','arg0'=>$_smarty_tpl->tpl_vars['shop']->value['shop_id']),$_smarty_tpl);?>
" class="block_lt"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['shop']->value['name'],18,'..');?>
</a>
                                <span class="block rt mt10">
                                    <i class="block_lt ico <?php if ($_smarty_tpl->tpl_vars['shop']->value['is_vip']){?>i1<?php }else{ ?>i11<?php }?>"></i>
                                    <i class="block_lt ico <?php if ($_smarty_tpl->tpl_vars['shop']->value['is_vip']){?>i2<?php }else{ ?>i22<?php }?>"></i>
                                    <i class="block_lt ico <?php if ($_smarty_tpl->tpl_vars['shop']->value['is_vip']){?>i3<?php }else{ ?>i33<?php }?>"></i>
                                    <i class="block_lt ico <?php if ($_smarty_tpl->tpl_vars['shop']->value['is_vip']){?>i4<?php }else{ ?>i44<?php }?>"></i>
                                </span> 
                            </h4>
                            <!--如若没有加入旗舰店和证书，则将i1和i2,i3,i4换成i11和i22,i33,i44则图标则会变灰色-->
                            <div class="cl"></div>
                            <p class="mt10">
                                <span class="block_lt ico span_map"></span>
                                <span class="block_lt">
                                    <a href="<?php echo smarty_function_link(array('ctl'=>'shop:detail','arg0'=>$_smarty_tpl->tpl_vars['shop']->value['shop_id']),$_smarty_tpl);?>
"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['shopex']->value[$_smarty_tpl->tpl_vars['shop']->value['shop_id']]['address'],30,'..');?>
</a><br />
                                    <a href="<?php echo smarty_function_link(array('ctl'=>'shop:detail','arg0'=>$_smarty_tpl->tpl_vars['shop']->value['shop_id']),$_smarty_tpl);?>
">联系电话：<?php echo $_smarty_tpl->tpl_vars['shop']->value['phone'];?>
</a>
                                </span>

                            </p>
                            <div class="cl"></div>
                        </div>
                    </div>
                    <div class="cl"></div>

                </div>
            </li>
            <?php } ?>

        </ul>

    </div>
    <div id="jq_loding" style=" height: 20px; text-align: center; "></div>
    <div class="h45"></div>





</div>
<script>
    var num = 1;
    var nextpage = '<?php echo $_smarty_tpl->tpl_vars['nextpage']->value;?>
';
    var lock = 0;
    $(document).ready(function() {
        $(window).scroll(function() {
            if (!lock && $(window).scrollTop() == $(document).height() - $(window).height()) {
                lock = 1;
                num++;
                var link = nextpage.replace('{page}', num);
                $("#jq_loding").html('正在加载中...');
                $.get(link, function(data) {
                    if (data != 0) {
                        $("#jq_loding").html('');
                        $(".mobile_material ul").append(data);
                        lock = 0;
                    } else {

                        $("#jq_loding").html('没有数据了.....');
                    }
                }, 'html');
            }
        });

    });
</script>
<!--主题部分结束-->
<?php echo $_smarty_tpl->getSubTemplate ('mobile:block/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>