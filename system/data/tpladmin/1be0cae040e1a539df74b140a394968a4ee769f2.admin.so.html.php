<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 09:44:11
         compiled from "admin:company/company/so.html" */ ?>
<?php /*%%SmartyHeaderCode:214445984055d7d3eb49f019-14279689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1be0cae040e1a539df74b140a394968a4ee769f2' => 
    array (
      0 => 'admin:company/company/so.html',
      1 => 1439536176,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '214445984055d7d3eb49f019-14279689',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'detail' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7d3eb59e142_60850760',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7d3eb59e142_60850760')) {function content_55d7d3eb59e142_60850760($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
    <table width="100%" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
        <th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
        <td align="right"><?php echo smarty_function_link(array('ctl'=>"company/company:index",'priv'=>"hidden",'class'=>"button"),$_smarty_tpl);?>
</td>
        <td width="15"></td>
      </tr>
    </table>
</div>
<div class="page-data">
<?php if ($_smarty_tpl->tpl_vars['pager']->value['target']=='dialog'){?>
<form action="?company/company-dialog.html&MINI=LoadIframe" id="SO-form" method="post">
<input type="hidden" name="multi" value="<?php echo $_smarty_tpl->tpl_vars['pager']->value['multi'];?>
" />
<?php }else{ ?>
<form action="?company/company-index.html" id="SO-form" method="post">
<?php }?>
<table width="100%" border="0" cellspacing="0" class="table-data form">
    <tr>
        <th>公司ID：</th>
        <td>
            <input type="text" name="SO[company_id]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['company_id'];?>
" class="input w-100"/>&nbsp;&nbsp;
            <label>会员ID：<input type="text" name="SO[uid]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['uid'];?>
" class="input w-100"/></label>
         </td>
     </tr>
    <tr><th>城市：</th><td>

         <select id="province" class="w-150"> 
       <option>----请选择省份----</option> 
       <option>湖北</option> 
       <option>湖南</option> 
       <option>河南</option>
      <option>安徽</option>
      <option>江西</option> 
       <option>江苏</option> 
       <option>山东</option>
      <option>河北</option>
      <option>浙江</option> 
       <option>福建</option> 
       <option>广东</option>
      <option>海南</option>
      <option>辽宁</option> 
       <option>山西</option> 
       <option>陕西</option>
      <option>直辖市</option>
      <option>省会</option> 
   </select> 
   <select class="city" class="w-150"> 
        <option value="">----请选择城市----</option> 
   </select> 
   <select class="city" class="w-150"> 
       <option value="8">武汉</option> 
       <option value="13">鄂州</option> 
       <option value="14">襄阳</option> 
       <option value="15">孝感</option> 
       <option value="16">宜昌</option> 
       <option value="17">仙桃</option> 
       <option value="18">荆州</option> 
       <option value="19">荆门</option> 
       <option value="20">咸宁</option> 
       <option value="21">黄石</option> 
       <option value="22">黄冈</option> 
       <option value="23">随州</option> 
       <option value="26">天门</option>
       <option value="27">潜江</option>  
       <option value="91">十堰</option>  
   </select>  
   <select class="city" class="w-150"> 
       <option value="28">长沙</option> 
       <option value="30">株洲</option> 
       <option value="29">岳阳</option> 
       <option value="31">湘潭</option> 
       <option value="32">益阳</option> 
       <option value="33">常德</option> 
       <option value="34">娄底</option> 
       <option value="35">邵阳</option> 
       <option value="36">衡阳</option>
       <option value="38">郴州</option> 
       <option value="92">张家界</option> 
   </select> 
   <select class="city" class="w-150"> 
       <option value="39">郑州</option> 
       <option value="56">洛阳</option> 
       <option value="54">许昌</option> 
       <option value="55">焦作</option> 
       <option value="57">开封</option> 
       <option value="59">平顶山</option> 
       <option value="60">新乡</option> 
       <option value="61">南阳</option> 
       <option value="62">信阳</option> 
       <option value="74">漯河</option> 
       <option value="90">安阳</option> 
   </select> 
    <select class="city" class="w-150"> 
       <option value="48">合肥</option> 
       <option value="49">六安</option> 
       <option value="50">阜阳</option> 
       <option value="51">安庆</option> 
       <option value="52">蚌埠</option> 
       <option value="53">淮南</option> 
       <option value="63">芜湖</option> 
       <option value="64">马鞍山</option> 
       <option value="79">宿州</option> 
       <option value="93">淮北</option> 
       <option value="94">滁州</option> 
   </select> 
    <select class="city" class="w-150"> 
       <option value="25">南昌</option> 
       <option value="24">九江</option> 
       <option value="42">宜春</option> 
       <option value="43">萍乡</option> 
       <option value="44">吉安</option> 
        <option value="45">抚州</option> 
       <option value="46">赣州</option> 
       <option value="47">新余</option> 
   </select> 
    <select class="city" class="w-150"> 
       <option value="72">南京</option> 
       <option value="88">苏州</option> 
       <option value="37">扬州</option> 
       <option value="75">常州</option> 
       <option value="76">无锡</option> 
       <option value="77">徐州</option> 
       <option value="78">镇江</option> 
       <option value="80">南通</option>
       <option value="81">淮安</option> 
       <option value="82">连云港</option> 
   </select> 
    <select class="city" class="w-150"> 
       <option value="71">济南</option> 
       <option value="101">青岛</option> 
       <option value="102">淄博</option> 
       <option value="103">烟台</option> 
       <option value="104">潍坊</option> 
       <option value="105">枣庄</option> 
       <option value="106">济宁</option> 
       <option value="124">威海</option> 
   </select> 
    <select class="city" class="w-150"> 
       <option value="69">石家庄</option> 
       <option value="112">唐山</option> 
       <option value="113">秦皇岛</option> 
       <option value="114">邢台</option> 
       <option value="115">保定</option> 
        <option value="116">承德</option> 
       <option value="119">廊坊</option>
   </select> 
    <select class="city" class="w-150"> 
       <option value="73">杭州</option> 
       <option value="107">宁波</option> 
       <option value="109">温州</option> 
       <option value="110">绍兴</option> 
       <option value="111">嘉兴</option> 
       <option value="117">湖州</option> 
       <option value="129">台州</option> 
   </select> 
   <select class="city" class="w-150"> 
       <option value="83">福州</option> 
       <option value="100">泉州</option> 
       <option value="118">厦门</option> 
       <option value="120">莆田</option> 
       <option value="121">漳州</option> 
   </select> 
   <select class="city" class="w-150"> 
       <option value="108">广州</option> 
       <option value="127">深圳</option> 
       <option value="130">东莞</option> 
   </select> 
   <select class="city" class="w-150"> 
       <option value="99">海口</option> 
       <option value="123">三亚</option> 
   </select> 
   <select class="city" class="w-150"> 
       <option value="89">沈阳</option> 
       <option value="128">大连</option> 
   </select> 
   <select class="city" class="w-150"> 
       <option value="67">太原</option> 
       <option value="126">朔州</option> 
   </select> 
    <select class="city" class="w-150"> 
       <option value="68">西安</option> 
       <option value="122">咸阳</option> 
   </select> 
    <select class="city" class="w-150"> 
       <option value="66">重庆</option> 
       <option value="70">天津</option> 
       <option value="87">北京</option> 
       <option value="95">上海</option> 
   </select> 
    <select class="city" class="w-150"> 
       <option value="65">成都</option> 
       <option value="84">南宁</option> 
       <option value="85">昆明</option> 
       <option value="86">贵阳</option> 
       <option value="96">兰州</option> 
       <option value="97">长春</option> 
       <option value="98">哈尔滨</option> 
       <option value="125">银川</option> 
   </select> 

    </td></tr>
    <tr><th>公司名称：</th><td><input type="text" name="SO[name]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>
" class="input w-300"/></td></tr>
    <?php if ($_smarty_tpl->tpl_vars['pager']->value['target']!='dialog'){?>
    <tr><th>公司简称：</th><td><input type="text" name="SO[sort_name]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['sort_name'];?>
" class="input w-300"/></td></tr>
    <tr><th>联系人：</th><td><input type="text" name="SO[contact]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['contact'];?>
" class="input w-300"/></td></tr>
    <?php }?>
    <tr><th>电话：</th><td><input type="text" name="SO[tel]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['tel'];?>
" class="input w-300"/></td></tr>
    <tr><th>是否审核：</th><td>
        <select name="SO[audit]" class="w-100">
            <option value="">全部</option>
            <option value="1">正常</option>
            <option value="0">待审</option>
        </select>
        </td>
    </tr>
    <tr><th class="clear-th-bottom"></th><td class="clear-td-bottom" colspan="10"><input type="submit" class="bt-big" value="搜 索" /></td></tr>
</table>
</form></div>

<!-- 城市联动 -->
<script type="text/javascript"> 

var currentShowCity=0;

$(document).ready(function(){
   $("#province").change(function(){
       $("#province option").each(function(i,o){
           if($(this).attr("selected"))
           {
         
               $(".city").hide();
               $(".city").eq(i).show();
               $(".city").eq(i).attr("name","SO[city_id]");
               currentShowCity=i;
           }
       });
   });
   $("#province").change();
});


</script> 
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/jquery-1.5.2.min.js"></script>

<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>