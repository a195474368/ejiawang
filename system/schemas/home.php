<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: home.php 2098 2013-12-11 03:11:52Z langzhong $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

return array (
  'id' => 
  array (
    'field' => 'id',
    'label' => 'ID',
    'pk' => true,
    'add' => false,
    'edit' => false,
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
    'label' => '城市',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => false,
    'show' => false,
    'list' => true,
    'type' => 'city',
    'comment' => '',
    'default' => '',
    'SO' => '=',
  ),
  'area_id' => 
  array (
    'field' => 'area_id',
    'label' => '区域',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => false,
    'show' => false,
    'list' => true,
    'type' => 'area',
    'comment' => '',
    'default' => '',
    'SO' => '=',
  ),
  'name' => 
  array (
    'field' => 'name',
    'label' => '小区名称',
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
  'price' => 
  array (
    'field' => 'price',
    'label' => '价格',
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
    'SO' => false,
  ),
  'addr' => 
  array (
    'field' => 'addr',
    'label' => '地址',
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
  'tel' => 
  array (
    'field' => 'tel',
    'label' => '联系电话',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => true,
    'type' => 'phone',
    'comment' => '',
    'default' => '',
    'SO' => 'like',
  ),
  'qq_qun' => 
  array (
    'field' => 'qq_qun',
    'label' => 'QQ群',
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
  'face_pic' => 
  array (
    'field' => 'face_pic',
    'label' => '缩略图',
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
  'jf' => 
  array (
    'field' => 'jf',
    'label' => '交房时间',
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
    'SO' => false,
  ),
  'kp' => 
  array (
    'field' => 'kp',
    'label' => '开盘时间',
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
    'SO' => false,
  ),
  'kf' => 
  array (
    'field' => 'kf',
    'label' => '开发商',
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
    'SO' => 'like',
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
    'comment' => '',
    'default' => '',
    'SO' => 'between',
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
    'SO' => 'between',
  ),
  'details' => 
  array (
    'field' => 'details',
    'label' => '详情',
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
  'pv_num' => 
  array (
    'field' => 'pv_num',
    'label' => '浏览量',
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
    'site_num' => 
    array (
      'field' => 'site_num',
      'label' => '工地数',
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
    'last_case_company_id' => 
    array (
      'field' => 'last_case_company_id',
      'label' => '最后更新案例的公司',
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
);