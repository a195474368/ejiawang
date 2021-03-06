<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: systmpl.php 3153 2014-01-21 10:45:56Z youyi $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

return array (
  'systmpl_id' => 
  array (
    'field' => 'systmpl_id',
    'label' => 'ID',
    'pk' => true,
    'add' => false,
    'edit' => false,
    'html' => false,
    'empty' => false,
    'show' => false,
    'list' => true,
    'type' => 'text',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
  'intro' => 
  array (
    'field' => 'intro',
    'label' => '使用说明',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => true,
    'type' => 'textarea',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
  'from' => 
  array (
    'field' => 'from',
    'label' => '类型',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => false,
    'show' => false,
    'list' => false,
    'type' => 'text',
    'comment' => '类型',
    'default' => '',
    'SO' => false,
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
    'list' => false,
    'type' => 'text',
    'comment' => '类型',
    'default' => '',
    'SO' => false,
  ), 
  'key' => 
  array (
    'field' => 'key',
    'label' => 'KEY',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => false,
    'show' => false,
    'list' => true,
    'type' => 'text',
    'comment' => 'key',
    'default' => '',
    'SO' => false,
  ),
  'tmpl' => 
  array (
    'field' => 'tmpl',
    'label' => '模板内容',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => true,
    'empty' => true,
    'show' => false,
    'list' => false,
    'type' => 'textarea',
    'comment' => '模板内容',
    'default' => '',
    'SO' => false,
  ),
  'tmpl1' => 
  array (
    'field' => 'tmpl1',
    'label' => '模板内容1',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => true,
    'empty' => true,
    'show' => false,
    'list' => false,
    'type' => 'textarea',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
  'tmpl2' => 
  array (
    'field' => 'tmpl2',
    'label' => '模板内容2',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => true,
    'empty' => true,
    'show' => false,
    'list' => false,
    'type' => 'textarea',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
  'dateline' => 
  array (
    'field' => 'dateline',
    'label' => '创建时间',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => true,
    'type' => 'dateline',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
     'is_open' => 
  array (
    'field' => 'is_open',
    'label' => '是否启用',
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