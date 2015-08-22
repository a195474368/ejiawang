<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:19:16
         compiled from "/www/wwwroot/www.fzgxw.com/themes/default/company/foot.html" */ ?>
<?php /*%%SmartyHeaderCode:113664431455d7ea34127a11-51310552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2ad3fc10b1b0c5455f4dd20ffb717e8b4240f42' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/default/company/foot.html',
      1 => 1429538339,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113664431455d7ea34127a11-51310552',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'pager' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea34197664_05908306',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea34197664_05908306')) {function content_55d7ea34197664_05908306($_smarty_tpl) {?><?php if (!is_callable('smarty_block_calldata')) include '/www/wwwroot/www.fzgxw.com/system/plugins/smarty/block.calldata.php';
?>﻿            <div class="line1">
            </div>
            <div class="footer_b w1000 mt30">
                <p>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>'article/view','from'=>'about','order'=>'article_id:ASC','limit'=>10)); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>'article/view','from'=>'about','order'=>'article_id:ASC','limit'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

 <a target="_blank" title="<{$item.title}>" href="<{link ctl='about' arg0=$item.page}>"><{$item.title}></a>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>'article/view','from'=>'about','order'=>'article_id:ASC','limit'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
                </p>
                  <p> Copyright © 2014 <a href="http://www.ejiawang.cc" target="_blank">亿家网</a>, All rights reserved. ICP备案：<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['icp'];?>
 <a href="http://www.ejiawang.cc" target="_blank">装修平台</a>技术支持：<a href="http://www.ejiawang.cc" target="_blank">www.ejiawang.cc</a></p>
    <ul class="w400 mt30 mb30">
        <li><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/pic/wj.jpg" width="50" height="50" /><br />网警110
        </li>
        <li><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/pic/gs.jpg" width="50" height="50" /><br /><?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
工商
        </li>
        <li><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/pic/xh.jpg" width="50" height="50" /><br />网络协会
        </li>
        <li><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/pic/hb.jpg" width="50" height="50" /><br />ICP备
        </li>
    </ul>
            </div>
        </div> 
        
        <div style="display:none;"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['tongji'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
</div>
    </body>

</html><?php }} ?>