<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: company.php 2378 2013-12-20 03:53:26Z langzhong $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

return array (
  'company_id' => 
  array (
    'field' => 'company_id',
    'label' => 'ID',
    'pk' => true,
    'add' => false,
    'edit' => false,
    'html' => false,
    'empty' => false,
    'show' => false,
    'list' => true,
    'type' => 'number',
    'comment' => '',
    'default' => '',
    'SO' => '=',
  ),
  'uid' => 
  array (
    'field' => 'uid',
    'label' => '管理者ID',
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
    'label' => '地区',
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
    'label' => '公司名称',
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
  'sort_name' => 
  array (
    'field' => 'sort_name',
    'label' => '公司简称',
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
  'slogan' => 
  array (
    'field' => 'slogan',
    'label' => '服务口号',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => false,
    'show' => false,
    'list' => false,
    'type' => 'text',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
  'logo' => 
  array (
    'field' => 'logo',
    'label' => '长方形LOGO',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => false,
    'show' => false,
    'list' => false,
    'type' => 'photo',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
  'square_logo' => 
  array (
    'field' => 'square_logo',
    'label' => '正方形LOGO',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => false,
    'show' => false,
    'list' => false,
    'type' => 'photo',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
  'contact' => 
  array (
    'field' => 'contact',
    'label' => '联系人',
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
  'tel' => 
  array (
    'field' => 'tel',
    'label' => '电话',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => false,
    'show' => false,
    'list' => true,
    'type' => 'phone',
    'comment' => '',
    'default' => '',
    'SO' => 'like',
  ),
    'qq' => 
  array (
    'field' => 'qq',
    'label' => 'QQ',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => true,
    'type' => 'qq',
    'comment' => '',
    'default' => '',
    'SO' => 'like',
  ),
    'mobile' => 
  array (
    'field' => 'mobile',
    'label' => '手机',
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
  'addr' => 
  array (
    'field' => 'addr',
    'label' => '地址',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => false,
    'show' => false,
    'list' => false,
    'type' => 'text',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
  'security' => 
  array (
    'field' => 'security',
    'label' => '保障金',
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
  'scores' => 
  array (
    'field' => 'scores',
    'label' => '评分',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => true,
    'type' => 'number',
    'comment' => '',
    'default' => '50',
    'SO' => false,
  ),
  
  'audit' => 
  array (
    'field' => 'audit',
    'label' => '是否审核',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => true,
    'type' => 'radio',
    'comment' => '',
    'default' => '',
    'SO' => '=',
  ),
  'orderby' => 
  array (
    'field' => 'orderby',
    'label' => '排序',
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
  'lng' => 
  array (
    'field' => 'lng',
    'label' => '经度',
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
  'lat' => 
  array (
    'field' => 'lat',
    'label' => '维度',
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
  'closed' => 
  array (
    'field' => 'closed',
    'label' => '删除',
    'pk' => false,
    'add' => false,
    'edit' => false,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => false,
    'type' => 'bool',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
    'case_num' => 
  array (
    'field' => 'case_num',
    'label' => '案例数',
    'pk' => false,
    'add' => false,
    'edit' => false,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => false,
    'type' => 'number',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
    'score1' => 
    array (
      'field' => 'score1',
      'label' => 'score1',
      'pk' => false,
      'add' => false,
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
     'score2' => 
    array (
      'field' => 'score2',
      'label' => 'score2',
      'pk' => false,
      'add' => false,
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
     'score3' => 
    array (
      'field' => 'score3',
      'label' => 'score3',
      'pk' => false,
      'add' => false,
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
     'score4' => 
    array (
      'field' => 'score4',
      'label' => 'score4',
      'pk' => false,
      'add' => false,
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
    'score5' => 
    array (
      'field' => 'score5',
      'label' => 'score5',
      'pk' => false,
      'add' => false,
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
    'score_num' => 
    array (
      'field' => 'score_num',
      'label' => '点评数',
      'pk' => false,
      'add' => false,
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
     'tenders_num' => 
    array (
      'field' => 'tenders_num',
      'label' => '签单数',
      'pk' => false,
      'add' => false,
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
      'is_vip' => 
    array (
      'field' => 'is_vip',
      'label' => '是否是VIP',
      'pk' => false,
      'add' => false,
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
    'case_time' => 
    array (
      'field' => 'case_time',
      'label' => '最后发布案例时间',
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
    'site_time' => 
    array (
      'field' => 'site_time',
      'label' => '最后发布工地时间',
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
     'views' => 
    array (
      'field' => 'views',
      'label' => 'PV数',
      'pk' => false,
      'add' => true,
      'edit' => true,
      'html' => false,
      'empty' => true,
      'show' => false,
      'list' => true,
      'type' => 'number',
      'comment' => '',
      'default' => '0',
      'SO' => '=',
    ), 
     'answer_num' => 
    array (
      'field' => 'answer_num',
      'label' => '回答问题数',
      'pk' => false,
      'add' => true,
      'edit' => true,
      'html' => false,
      'empty' => true,
      'show' => false,
      'list' => true,
      'type' => 'number',
      'comment' => '',
      'default' => '0',
      'SO' => '=',
    ),
    
    
);