<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 13:11:29
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/index/topheader.html" */ ?>
<?php /*%%SmartyHeaderCode:184720558055d80481959d83-83875425%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4ac94bba9db02458af4232cd969984e95fbcb15' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/index/topheader.html',
      1 => 1402664332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184720558055d80481959d83-83875425',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d804819848e5_35698901',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d804819848e5_35698901')) {function content_55d804819848e5_35698901($_smarty_tpl) {?><?php if (!is_callable('smarty_block_AD')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/block.AD.php';
?><!-- 主页banner-->
<div class="i_banner">
    <!--kinMaxShow-->
    <div class="jq_index_banner none" id="jq_index_banner1" kinBox='{"height": 320,"easing": "linear","button": {"normal": {"right": "40%"}}}'>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('AD', array('name'=>"首页头部轮转广告",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"3")); $_block_repeat=true; echo smarty_block_AD(array('name'=>"首页头部轮转广告",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"3"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div style="height:320px;"><a href="<{$item.link}>" title="<{$item.title}>" target="_blank"><img src="<{$pager.img}>/<{$item.thumb}>" /></a></div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_AD(array('name'=>"首页头部轮转广告",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"3"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
    <!--kinMaxShow-->
</div>
<!-- //主页banner-->
<div class="w1000"><?php echo $_smarty_tpl->getSubTemplate ("index/kszx.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>