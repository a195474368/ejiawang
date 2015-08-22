<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:20:10
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/ucenter/footer.html" */ ?>
<?php /*%%SmartyHeaderCode:123751086655d7ea6a6fd660-01137057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f0ab1da8cbdbebba7eb14ff0daeaa7289eff349' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/ucenter/footer.html',
      1 => 1402664332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123751086655d7ea6a6fd660-01137057',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea6a70dd21_63369465',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea6a70dd21_63369465')) {function content_55d7ea6a70dd21_63369465($_smarty_tpl) {?>        </div>       
    </div>
</div>
<div class="nw_foot"></div>
<?php echo $_smarty_tpl->getSubTemplate ("block/sfooter.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript">
(function(T, $){
//Auto Select Box
$("[mini-select]").die("click").live("click", function(e){
    e.stopPropagation(); e.preventDefault();
    var a = $(this).attr("mini-select").split("/");
    var elm = a[0].split(",");
    var multi = a[1] || 'N';
    var city_id = a[2] || 0;
    var title = a[3] || ($(this).attr("title") || "请选择");
    var link = $(this).attr("action") || $(this).attr("href");
    var width = $(this).attr("mini-width") || 500;
    if(link.indexOf("?")<0){
        link += "?city_id="+city_id;
    }else{
        link += "&city_id="+city_id;
    }
    Widget.Dialog.Select(link, multi, function(ret){
        if(multi == 'Y'){
            var itemIds = [], itemNames = [];
            for(var i=0; i<ret.length; i++){
                itemIds.push(ret[i][0]);
                itemNames.push(ret[i][1].title)
            }
            $(elm[0]).val(itemIds.join(","));
            if(elm.length > 1){
                $(elm[1]).val(itemNames.join(","));
            }
        }else{
            $(elm[0]).val(ret[0]);
            if(elm.length > 1){
                $(elm[1]).val(ret[1].title);
            }
        }
    }, {title:title,width:width});
});
// Auto CheckBox All
$(":checkbox[CKA]").die("click").live("click",function(){
    var $cks = $(":checkbox[CK='"+$(this).attr("CKA")+"']");;
    if($(this).attr("checked")){
        $cks.each(function(){$(this).attr("checked",true);});
    }else{
        $cks.each(function(){$(this).attr("checked",false);});
    }
});
})(window.KT, window.jQuery);
</script>
</body>
</html><?php }} ?>