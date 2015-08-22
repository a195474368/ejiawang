<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: home_tuan_sign.php 3053 2014-01-15 02:00:13Z youyi $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

return array (
  'sign_id' => 
  array (
    'field' => 'sign_id',
    'label' => 'ID',
    'pk' => true,
    'add' => false,
    'edit' => false,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => false,
    'type' => 'int',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
  'tuan_id' => 
  array (
    'field' => 'tuan_id',
    'label' => '团ID',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => false,
    'show' => false,
    'list' => false,
    'type' => 'int',
    'comment' => '',
    'default' => '',
    'SO' => '=',
  ),
  'package_id' => 
  array (
    'field' => 'package_id',
    'label' => '套餐ID',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => false,
    'show' => false,
    'list' => false,
    'type' => 'select',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
  'uid' => 
  array (
    'field' => 'uid',
    'label' => '用户',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => false,
    'type' => 'member',
    'comment' => '',
    'default' => '',
    'SO' => '=',
  ),
  'mobile' => 
  array (
    'field' => 'mobile',
    'label' => '手机',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => false,
    'show' => false,
    'list' => false,
    'type' => 'mobile',
    'comment' => '',
    'default' => '',
    'SO' => 'like',
  ),
  'cantact' => 
  array (
    'field' => 'cantact',
    'label' => '联系人',
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
    'SO' => 'like',
  ),
  'dateline' => 
  array (
    'field' => 'dateline',
    'label' => '创建时间',
    'pk' => false,
    'add' => false,
    'edit' => false,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => false,
    'type' => 'dateline',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
  'create_ip' => 
  array (
    'field' => 'create_ip',
    'label' => '创建IP',
    'pk' => false,
    'add' => false,
    'edit' => false,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => false,
    'type' => 'clientip',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
);