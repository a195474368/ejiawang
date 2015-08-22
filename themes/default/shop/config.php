<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: config.php 3054 2014-01-15 05:57:25Z youyi $
 */

return array(
    'default'=>array(
        'name'  => '默认模板',//模板的中文名称
        'thumb' => 'default/shop/style/default/default.jpg',//缩略图
        'css'   => array()//自动加载的CSS文件
    ),
	 'green'=>array(
        'name'  => '绿色环保',//模板的中文名称
        'thumb' => 'default/shop/style/green/green.jpg',//缩略图
        'css'   => array('default/shop/style/green/css/style.css')//自动加载的CSS文件
    ),
	'blue'=>array(
        'name'  => '蓝色经典',//模板的中文名称
        'thumb' => 'default/shop/style/blue/blue.jpg',//缩略图
        'css'   => array('default/shop/style/blue/css/style.css')//自动加载的CSS文件
    ),
	'purple'=>array(
        'name'  => '紫色浪漫',//模板的中文名称
        'thumb' => 'default/shop/style/purple/purple.jpg',//缩略图
        'css'   => array('default/shop/style/purple/css/style.css')//自动加载的CSS文件
    )
);