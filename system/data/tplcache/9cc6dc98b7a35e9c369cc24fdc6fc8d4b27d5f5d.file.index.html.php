<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:19:15
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/company/index.html" */ ?>
<?php /*%%SmartyHeaderCode:28606263255d7ea33723682-01770868%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cc6dc98b7a35e9c369cc24fdc6fc8d4b27d5f5d' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/company/index.html',
      1 => 1439435379,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28606263255d7ea33723682-01770868',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'banners' => 0,
    'item' => 0,
    'pager' => 0,
    'company' => 0,
    'news_num' => 0,
    'designer_num' => 0,
    'company_member' => 0,
    'CONFIG' => 0,
    'companyex' => 0,
    'company_id' => 0,
    'request' => 0,
    'youhui' => 0,
    'news' => 0,
    'cases' => 0,
    'item2' => 0,
    'photos' => 0,
    'designers' => 0,
    'teams' => 0,
    'sites' => 0,
    'site_status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea33cb90d5_12228590',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea33cb90d5_12228590')) {function content_55d7ea33cb90d5_12228590($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/modifier.cutstr.php';
if (!is_callable('smarty_block_calldata')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/block.calldata.php';
?><?php echo $_smarty_tpl->getSubTemplate ('company/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--优惠信息更多详情页导航结束  -->

<!-- 详情页的公共部分 -->
<!-- 主题部分开始 -->
<div class="index_b_bg hauto">
    <!--  主页banner开始        -->
    <div class="w1000 shop_index hauto mt10">
        <!--轮播开始-->
        <div class="banner lt">
            <!--kinMaxShow-->
            <div class="shop_banner none">
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banners']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <div>
                    <a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['pic'];?>
" width="720" height="250" /></a>
                </div>
                <?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
                 <div>
                    <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/pic/baaner1.png" width="720" height="250" /></a>
                </div>
                <?php } ?>
            </div>
            <!--kinMaxShow-->
        </div>
        <script src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/jquery.kinMaxShow.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {
                $(".shop_banner").kinMaxShow({
                    height: 250,
                    easing: 'linear',
                    intervalTime: 2,
                    button: {
                        normal: {right: '15%'}
                    }
                });
            });
        </script>
        <!--轮播结束-->
        <!--轮播右面开始-->
        <div class="banner_r lt ml20 hauto">
            <div class="banner_r_t hauto greenbg">
                <p class="f18 mt5">公司指数</p>
                <p class="mt5">
                    <span>图库案例：<font><?php echo $_smarty_tpl->tpl_vars['company']->value['case_num'];?>
</font></span>
                </p>
                <p>
                    <span>在建工地：<font><?php echo $_smarty_tpl->tpl_vars['company']->value['site_num'];?>
</font></span><span>企业新闻：<font class="f12"><?php echo $_smarty_tpl->tpl_vars['news_num']->value;?>
</font></span>
                </p>
                <p>
                    <span>设计师：<font><?php echo $_smarty_tpl->tpl_vars['designer_num']->value;?>
</font></span><span>业主评价：<font><?php echo $_smarty_tpl->tpl_vars['company']->value['score_num'];?>
</font></span>
                </p>
            </div>
            <div class="banner_r_c hauto bluebg mt7">
                <p class="mt5"></p>
                <p class="p49 lt"style="line-height:50px;"><font class="f18 ftw" style="font-size:15px">联系方式</font><font class="f44"style="">{</font></p>
                <p class="p50 lt" >
                    <font>手机：<?php echo $_smarty_tpl->tpl_vars['company_member']->value['mobile'];?>
</font><br />
                    <font>电话：<?php echo $_smarty_tpl->tpl_vars['company']->value['tel'];?>
</font>
                    <span class="span37 block_lt mr5" style="width:100px">
                    <a  style="float:left" title="<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
" target="_blank"  href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $_smarty_tpl->tpl_vars['company']->value['qq'];?>
&amp;site=qq&amp;menu=yes"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/pic/qq.png" /></a>
                    <a  style="float:left" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
" href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['kfqq'];?>
&amp;site=qq&amp;menu=yes" class="block_lt white">网站客服</a></span>
                </p>
                <div class="cl"></div>
                <p class="mt10"></p>
            </div>
            <div class="banner_r_b hauto orgbgg mt7">
                <p class="ml20">
                    <a mini-load="免费预约" href="<?php echo smarty_function_link(array('ctl'=>'gs:yuyue','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'http'=>'empty'),$_smarty_tpl);?>
" class="ftw white f18" style="font-size:15px">免费预约：</a>
                    <font style=" font-size:20px; color:#FF0000; font-weight:bold"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['phone'];?>
</font>
                </p>
            </div>

        </div>
        <!--轮播右面结束-->
    </div>
    <!--  主页banner结束        -->
    <!--简介评价优惠信息资讯开始-->
    <div class="w1000 hauto mt20 shop_index_new">
        <!--左面开始-->
        <div class="shop_index_new_l lt hauto">
            <h2>简介</h2>
            <div class="shop_index_new_l_b hauto mt10 bgwhite">
                <p class="p51 mb20">
                    &nbsp;&nbsp;&nbsp;&nbsp; <?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['companyex']->value['txt'],200,'..');?>
 <a title="<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'company:about','arg0'=>$_smarty_tpl->tpl_vars['company_id']->value),$_smarty_tpl);?>
" class="red">查看详情>></a>
                </p>
            </div>
        </div>
        <!--左面结束-->
        <!--中间开始-->
        
     
        <div class="shop_index_new_l lt hauto ml20" style="width:630px">
            <h2>最新招标</h2>
            
           
            <table style="font-size:15px;cellpadding:10px;width:630px;margin-top:10px" class="bgwhite" >
                
                <tr style="background-color:#f8f8f8">
                <td>业主</td>
                <td>小区</td>
                <td>面积</td>
                <td>预算</td>
              
                </tr>
            <div class="cl" ></div>
           
                    
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"tenders/tenders",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"7")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"tenders/tenders",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"7"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <tr>                  
                    <td><{$item.name|cutstr:10:'**'}></td>          
                    <td><{$item.area}>㎡</td>
                    <td><a target='_blank' title="<{$item.title}>" href="<{link ctl='tenders:detail' arg0=$item.id}>" class=""style=" color:#666;font-size:14px"><{$item.title}></a></td>
                      <{calldata mdl="tenders/setting"  setting_id=$item.budget_id limit="1"}>
                      <td><{$item.name}></td>
                      <{/calldata}>                  
                </tr>
                    <div class="cl"></div>             
               <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"tenders/tenders",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"7"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
         
       
            </table>
           
            </div>


        <!--中间结束-->
        <!--右面开始-->
       <!-- <div class="shop_index_new_r lt hauto ml20">
            <div class="shop_index_new_r_title">
                <ul>
                    <li><a href="<?php echo smarty_function_link(array('ctl'=>'company:youhui','arg0'=>$_smarty_tpl->tpl_vars['company_id']->value),$_smarty_tpl);?>
" class="current9">优惠信息</a></li>
                    <li><a href="<?php echo smarty_function_link(array('ctl'=>'company:news','arg0'=>$_smarty_tpl->tpl_vars['company_id']->value),$_smarty_tpl);?>
" class="current9">公司资讯</a></li>
                </ul>
            </div>
            <div class="cl"></div>
            <div class="shop_index_new_r_b hauto bgwhite mt10"> 
                <div class="shop_index_new_0 none">
                    <?php if (!empty($_smarty_tpl->tpl_vars['youhui']->value)){?>
                    <p class="mt20 ml20 mr5 p53">
                        <a target='_blank' title='<?php echo $_smarty_tpl->tpl_vars['youhui']->value['title'];?>
' href="<?php echo smarty_function_link(array('ctl'=>'gs:detail','arg0'=>$_smarty_tpl->tpl_vars['youhui']->value['youhui_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['youhui']->value['title'];?>
</a>
                       
                    </p>
                    <div class="shop_index_new_r_b_r ml20 mt10">
                        <a target='_blank' title='<?php echo $_smarty_tpl->tpl_vars['youhui']->value['title'];?>
' href="<?php echo smarty_function_link(array('ctl'=>'gs:detail','arg0'=>$_smarty_tpl->tpl_vars['youhui']->value['youhui_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['youhui']->value['face_pic'];?>
" width="130" height="90" /></a>
                        <p class="lt">
                            <font>距离结束：</font><br />
                            <font>还有</font><font class="red"><?php echo $_smarty_tpl->tpl_vars['youhui']->value['end'];?>
</font><font>天</font><br />
                            <span class="block span37 orgbgg mt15 mb10"><a target='_blank' title='<?php echo $_smarty_tpl->tpl_vars['youhui']->value['title'];?>
' href="<?php echo smarty_function_link(array('ctl'=>'gs:detail','arg0'=>$_smarty_tpl->tpl_vars['youhui']->value['youhui_id']),$_smarty_tpl);?>
">去看看</a></span>
                        </p>
                    </div>
                    <?php }?>
                </div>
                <div class="shop_index_new_1 none">
                    <ul>
                       <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                        <li>
                            <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'company:newsDetail','arg0'=>$_smarty_tpl->tpl_vars['company_id']->value,'arg1'=>$_smarty_tpl->tpl_vars['item']->value['news_id']),$_smarty_tpl);?>
"  class="org">[<?php echo date('m-d',$_smarty_tpl->tpl_vars['item']->value['dateline']);?>
]</a><a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'company:newsDetail','arg0'=>$_smarty_tpl->tpl_vars['company_id']->value,'arg1'=>$_smarty_tpl->tpl_vars['item']->value['news_id']),$_smarty_tpl);?>
" class="black"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],26,'..');?>
</a>
                        </li>
                       <?php } ?>
                    </ul>
                </div>
            </div>
        </div>-->
        <!--右面结束-->  
    </div>
    <!--简介评价优惠信息资讯结束-->
    <!--案例展示设计师开始-->
    <div class="shop_index_case hauto mt20 w1000">
        <!--左面开始-->
        <div class="shop_index_case_l lt hauto">
            <h2>
                <span class="lt">案例展示</span>
                <span class="rt"><a href="<?php echo smarty_function_link(array('ctl'=>'company:xiaoguotu','arg0'=>$_smarty_tpl->tpl_vars['company_id']->value),$_smarty_tpl);?>
">更多>></a></span>
            </h2>
            <div class="cl"></div>
            <div class="shop_index_case_l_b bgwhite mt10 hauto">
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cases']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <div class="shop_index_case_l_b_l lt">
                    <div class="shop_index_case_b_l_t">
                        <p class="p54">
                            <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['photo'];?>
_thumb.jpg" width="210" height="170" /></a>
                        </p>
                        <p class="p55">
                            <?php if ($_smarty_tpl->tpl_vars['item']->value['lastphotos']){?>   
                            <?php  $_smarty_tpl->tpl_vars['item2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['lastphotos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item2']->key => $_smarty_tpl->tpl_vars['item2']->value){
$_smarty_tpl->tpl_vars['item2']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['index']++;
?>
                            <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['index']<2){?>
                            <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['photos']->value[$_smarty_tpl->tpl_vars['item2']->value]['photo'];?>
_thumb.jpg" width="105" height="85" /></a>
                            
                   
                            <?php }?>
                            <?php } ?>
                            <?php }?>
                        </p>
                    </div>
                    <div class="cl"></div>
                    <div class="shop_index_case_b_l_b">
                        <p class="p56"><a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],24,'..');?>
</a></p>
                        <p class="p57">
                            <span class="rt mr20">
                                <font>by</font>
                                <a target="_blank" title='<?php echo $_smarty_tpl->tpl_vars['designers']->value[$_smarty_tpl->tpl_vars['item']->value['designer_id']]['realname'];?>
' href="<?php echo smarty_function_link(array('ctl'=>'blog','arg0'=>$_smarty_tpl->tpl_vars['item']->value['designer_id']),$_smarty_tpl);?>
" class="red"><?php echo $_smarty_tpl->tpl_vars['designers']->value[$_smarty_tpl->tpl_vars['item']->value['designer_id']]['realname'];?>
</a>
                               
                            </span>
                        </p>
                    </div>
                    <div class="cl"></div>
                    <?php if (!empty($_smarty_tpl->tpl_vars['designers']->value[$_smarty_tpl->tpl_vars['item']->value['designer_id']])){?>
                    <div class="designer_show none">
                        <div class="designer_show_l lt">
                            <a target="_blank" title='<?php echo $_smarty_tpl->tpl_vars['designers']->value[$_smarty_tpl->tpl_vars['item']->value['designer_id']]['realname'];?>
'  href="<?php echo smarty_function_link(array('ctl'=>'blog','arg0'=>$_smarty_tpl->tpl_vars['item']->value['designer_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['designers']->value[$_smarty_tpl->tpl_vars['item']->value['designer_id']]['face_80'];?>
" width="65" height="65" /></a>

                        </div>
                        <div class="designer_show_r lt">
                            <p>
                                <a target="_blank" title='<?php echo $_smarty_tpl->tpl_vars['designers']->value[$_smarty_tpl->tpl_vars['item']->value['designer_id']]['realname'];?>
' href="<?php echo smarty_function_link(array('ctl'=>'blog','arg0'=>$_smarty_tpl->tpl_vars['item']->value['designer_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['designers']->value[$_smarty_tpl->tpl_vars['item']->value['designer_id']]['realname'];?>
</a>毕业于<?php echo $_smarty_tpl->tpl_vars['designers']->value[$_smarty_tpl->tpl_vars['item']->value['designer_id']]['school'];?>
、作品(<?php echo $_smarty_tpl->tpl_vars['designers']->value[$_smarty_tpl->tpl_vars['item']->value['designer_id']]['case_num'];?>
)
                            </p>
                            
                        </div>
                    </div>
                    <?php }?>
                </div>
              
                <?php } ?>
          

            </div>

        </div>
        <!--左面结束-->
        <!--右面开始-->
        <div class="shop_index_case_r lt hauto ml20">
            <h2>
                <span class="lt">设计师</span>
                <span class="rt"><a href="<?php echo smarty_function_link(array('ctl'=>'company:team','arg0'=>$_smarty_tpl->tpl_vars['company_id']->value),$_smarty_tpl);?>
">更多>></a></span>
            </h2>
            <div class="cl"></div>
            <div class="shop_index_designer bgwhite hauto mt10">
                <div class="h20"></div>
                <ul>
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['teams']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                    <li>

                       <a target="_blank" title='<?php echo $_smarty_tpl->tpl_vars['item']->value['realname'];?>
'  href="<?php echo smarty_function_link(array('ctl'=>'blog','arg0'=>$_smarty_tpl->tpl_vars['item']->value['uid']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['face_80'];?>
" width="100" height="100" /></a>
                        <p class="lt ml20">
                            <span class="block mb15"></span>
                            <font>设计师&nbsp;:&nbsp;</font><a target="_blank" title='<?php echo $_smarty_tpl->tpl_vars['item']->value['realname'];?>
'  href="<?php echo smarty_function_link(array('ctl'=>'blog','arg0'=>$_smarty_tpl->tpl_vars['item']->value['uid']),$_smarty_tpl);?>
" class="red f14 ftw"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['realname'],5,'..');?>
</a>
                            <span class="block span44 mt20 redbg"><a mini-load="预约设计" href="<?php echo smarty_function_link(array('ctl'=>'designer:yuyue','arg0'=>$_smarty_tpl->tpl_vars['item']->value['uid'],'http'=>'empty'),$_smarty_tpl);?>
">我要咨询</a></span>
                        </p>
                    </li>
                  <?php } ?>
                    
                </ul>
                <div class="shop_index_free_design bluebg">
                    <a mini-load="免费设计" href="<?php echo smarty_function_link(array('ctl'=>'gs:yuyue','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'http'=>'empty'),$_smarty_tpl);?>
">免费设计</a>
                </div>
            </div>
        </div>
        <!--右面结束-->   
    </div>
    <!--案例展示设计师结束-->
    <div class="cl"></div>
    <!--在建工地开始-->
    <div class="w1000 shop_zjgd hauto mt20">
        <h2>
            <span class="lt">在建工地</span>
            <span class="rt"><a href="<?php echo smarty_function_link(array('ctl'=>'company:site','arg0'=>$_smarty_tpl->tpl_vars['company_id']->value),$_smarty_tpl);?>
">更多>></a></span>
        </h2>
        <div class="cl"></div>
        <div class="shop_zjgd w1000 bgwhite hauto mt10">
              <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sites']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <div class="shop_zjgd_show lt ml10">
                <div class="shop_zjgd_show_t mt20 ml10">
                   <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['face_pic'];?>
" width="220" height="155" /></a>
                    <p class="p46 greenbg none">
                        <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
">我要参观</a>
                    </p>
                </div>
                <p class="p47"><a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],30,'');?>
</a></p>
                <p class="p48 rt">
                    <span class="block_lt ftw black f14">进度&nbsp;:&nbsp;</span>
                  
                    <a target="_blank" class="block_lt orgbgg" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['site_status']->value[$_smarty_tpl->tpl_vars['item']->value['status']];?>
</a>
                </p>

            </div>
            <?php } ?>
        </div>
    </div>
    <!--在建工地结束-->
    <div class="h30"></div>      

</div>
<script>
    $(document).ready(function() {
        $(".shop_index_new_r_title ul li").mouseover(function() {
            var index = $(this).index();
            $(".shop_index_new_r_title ul li").each(function(a) {
                var nn = a
                if (a == index) {
                    $(this).find(".current9").css('color', '#666666');
                    $(".shop_index_new_" + nn).show();
                } else {
                    $(this).find(".current9").css('color', '');
                    $(".shop_index_new_" + nn).hide();
                }
            });
        });
        $(".shop_index_new_r_title ul li").eq(0).mouseover();

        $(".shop_index_case_l_b_l").mouseover(function() {
            $(this).find(".designer_show").show();
        }).mouseout(function() {
            $(this).find(".designer_show").hide();

        });/*设计师*/

        $(".shop_index_designer ul li").mouseover(function() {
            var index = $(this).index();
            $(".shop_index_designer ul li").each(function(a) {
                if (a == index) {
                    $(this).css('background', '#EAEAEA');

                } else {

                    $(this).css('background', '')

                }
            });
        }).mouseout(function() {
            $(this).css('background', 'none');

        });

        /*在建工地*/

        $(".shop_zjgd_show").mouseover(function() {
            $(this).css('border', '1px solid red').css('width', '238px');
            $(this).find(".p46").show();

        }).mouseout(function() {
            $(this).css('border', '').css('width', '240px');
            $(this).find(".p46").hide();
        });



    });
</script>
<!-- 主题部分结束 -->  

<?php echo $_smarty_tpl->getSubTemplate ('company/foot.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>