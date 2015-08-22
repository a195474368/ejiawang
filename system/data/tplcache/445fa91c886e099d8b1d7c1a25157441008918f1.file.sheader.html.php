<?php /* Smarty version Smarty-3.1.8, created on 2015-08-22 11:19:13
         compiled from "/www/wwwroot/www.fzgxw.com/themes/cheerful_green/block/sheader.html" */ ?>
<?php /*%%SmartyHeaderCode:30577828255d7ea31886435-49844214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '445fa91c886e099d8b1d7c1a25157441008918f1' => 
    array (
      0 => '/www/wwwroot/www.fzgxw.com/themes/cheerful_green/block/sheader.html',
      1 => 1422684757,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30577828255d7ea31886435-49844214',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'seo_sub_title' => 0,
    'SEO' => 0,
    'seo_title' => 0,
    'CONFIG' => 0,
    'seo_keywords' => 0,
    'seo_description' => 0,
    'pager' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d7ea319aea90_02144209',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d7ea319aea90_02144209')) {function content_55d7ea319aea90_02144209($_smarty_tpl) {?><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $_smarty_tpl->tpl_vars['seo_sub_title']->value;?>
<?php if ($_smarty_tpl->tpl_vars['SEO']->value['title']){?><?php echo $_smarty_tpl->tpl_vars['SEO']->value['title'];?>
<?php }elseif($_smarty_tpl->tpl_vars['seo_title']->value){?><?php echo $_smarty_tpl->tpl_vars['seo_title']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
<?php }?></title>
<meta name="keywords" content="<?php if ($_smarty_tpl->tpl_vars['seo_keywords']->value){?><?php echo $_smarty_tpl->tpl_vars['seo_keywords']->value;?>
<?php }elseif($_smarty_tpl->tpl_vars['SEO']->value['keywords']){?><?php echo $_smarty_tpl->tpl_vars['SEO']->value['keywords'];?>
<?php }?>" />
<meta name="description" content="<?php if ($_smarty_tpl->tpl_vars['seo_description']->value){?><?php echo $_smarty_tpl->tpl_vars['seo_description']->value;?>
<?php }elseif($_smarty_tpl->tpl_vars['SEO']->value['description']){?><?php echo $_smarty_tpl->tpl_vars['SEO']->value['description'];?>
<?php }?>" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/style/public.css?20140109"/>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/style/index.css?20140109"/> 
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/style/append.css?20140109"/> 
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/style/kt.widget.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/style/common.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/ui/j.ui.css" type="text/css" />
<script type="text/javascript">window.URL={"domain":"<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['domain'];?>
","url":"<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['siteurl'];?>
", "res":"<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
", "img":"<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
","city":"<?php echo $_smarty_tpl->tpl_vars['request']->value['city']['siteurl'];?>
"};</script>
<script type="text/javascript"  src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/kt.j.js"></script>
<script type="text/javascript"  src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/kt.js"></script>
<script type="text/javascript"  src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/ui/j.ui.js"></script>
<script type="text/javascript"  src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/widget.login.js"></script>
<script type="text/javascript"  src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/widget.msgbox.js"></script>

<script type="text/javascript"  src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/kt_002.js"></script>
<script type="text/javascript"  src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/index.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/cheerful_green/static/style/public.css?20140109"/> 
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/cheerful_green/static/style/index.css?20140109"/> 
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/cheerful_green/static/style/append.css?20140109"/> 





</head>
 
        <script>
          $(document).ready( function(){
          $(".page").find("em").hide();
           }  )   
        
                </script>
<?php }} ?>