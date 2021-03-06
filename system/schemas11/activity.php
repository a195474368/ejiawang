<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: activity.php 2034 2013-12-07 03:08:33Z langzhong $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

return array (
  'id' => 
  array (
    'field' => 'id',
    'label' => 'id',
    'pk' => true,
    'add' => false,
    'edit' => false,
    'html' => false,
    'empty' => false,
    'show' => false,
    'list' => false,
    'type' => 'number',
    'comment' => '',
    'default' => '',
    'SO' => '=',
  ),
  'title' => 
  array (
    'field' => 'title',
    'label' => '标题',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => false,
    'show' => false,
    'list' => true,
    'type' => 'text',
    'comment' => '',
    'default' => '',
    'SO' => 'like',
  ),
  'cate_id' => 
  array (
    'field' => 'cate_id',
    'label' => '选择分类',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => true,
    'type' => 'number',
    'comment' => '',
    'default' => '',
    'SO' => '=',
  ),
  'city_id' => 
  array (
    'field' => 'city_id',
    'label' => '所在城市',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => true,
    'type' => 'number',
    'comment' => '',
    'default' => '',
    'SO' => '=',
  ),
  'area_id' => 
  array (
    'field' => 'area_id',
    'label' => '所在地区',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => true,
    'type' => 'number',
    'comment' => '',
    'default' => '',
    'SO' => '=',
  ),
  'reg_time' => 
  array (
    'field' => 'reg_time',
    'label' => '报名截止日期',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => true,
    'type' => 'date',
    'comment' => '',
    'default' => '',
    'SO' => 'like',
  ),
  'bg_time' => 
  array (
    'field' => 'bg_time',
    'label' => '活动开始日期',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => true,
    'type' => 'date',
    'comment' => '',
    'default' => '',
    'SO' => 'like',
  ),
  'end_time' => 
  array (
    'field' => 'end_time',
    'label' => '活动结束日期',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => true,
    'type' => 'date',
    'comment' => '',
    'default' => '',
    'SO' => 'like',
  ),
  'intro' => 
  array (
    'field' => 'intro',
    'label' => '活动简述',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => false,
    'type' => 'textarea',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
     'traffic' => 
  array (
    'field' => 'traffic',
    'label' => '交通',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => false,
    'type' => 'textarea',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
  'face_pic' => 
  array (
    'field' => 'face_pic',
    'label' => '活动缩略图',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => false,
    'type' => 'photo',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
   'banner' => 
  array (
    'field' => 'banner',
    'label' => '活动BANNER图片',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => false,
    'type' => 'photo',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),  
    
  'sign_num' => 
  array (
    'field' => 'sign_num',
    'label' => '报名人数',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => true,
    'type' => 'number',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
  'tel' => 
  array (
    'field' => 'tel',
    'label' => '活动联系电话',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => true,
    'type' => 'text',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
  'addr' => 
  array (
    'field' => 'addr',
    'label' => '活动地址',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => true,
    'type' => 'text',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
  'template' => 
  array (
    'field' => 'template',
    'label' => '指定静态模板地址',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => true,
    'type' => 'text',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
  'process' => 
  array (
    'field' => 'process',
    'label' => '活动过程',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => true,
    'empty' => true,
    'show' => false,
    'list' => false,
    'type' => 'editor',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
  'lng' => 
  array (
    'field' => 'lng',
    'label' => '地图经度',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => false,
    'type' => 'text',
    'comment' => '使用百度地图经纬度拾取工具',
    'default' => '',
    'SO' => '>=',
  ),
  'lat' => 
  array (
    'field' => 'lat',
    'label' => '地图维度',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => false,
    'type' => 'text',
    'comment' => '',
    'default' => '',
    'SO' => '<=',
  ),
  'sj' => 
  array (
    'field' => 'sj',
    'label' => '活动具体时间',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => false,
    'type' => 'text',
    'comment' => '例如：8:00至18:00',
    'default' => '',
    'SO' => false,
  ),
  'closed' => 
  array (
    'field' => 'closed',
    'label' => '是否删除',
    'pk' => false,
    'add' => false,
    'edit' => false,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => true,
    'type' => 'number',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
);