<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<Anhuike@gmail.com>
 * $Id: bulletin.php 2034 2013-12-07 03:08:33Z langzhong $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

return array (
  'open_site' => 
  array (
    'label' => '网站公告',
    'field' => 'open_site',
    'type' => 'boolean',
    'default' => '',
    'comment' => '',
    'html' => false,
    'empty' => false,
  ),
  'site' => 
  array (
    'label' => '公告内容',
    'field' => 'site',
    'type' => 'textarea',
    'default' => '',
    'comment' => '',
    'html' => true,
    'empty' => false,
  ),
  'open_member' => 
  array (
    'label' => '个人中心公告',
    'field' => 'open_member',
    'type' => 'boolean',
    'default' => '',
    'comment' => '',
    'html' => false,
    'empty' => false,
  ),
  'member' => 
  array (
    'label' => '公告内容',
    'field' => 'member',
    'type' => 'textarea',
    'default' => '',
    'comment' => '',
    'html' => true,
    'empty' => false,
  ),
  'open_company' => 
  array (
    'label' => '企业公告',
    'field' => 'open_company',
    'type' => 'boolean',
    'default' => '',
    'comment' => '',
    'html' => false,
    'empty' => false,
  ),
  'company' => 
  array (
    'label' => '公告内容',
    'field' => 'company',
    'type' => 'textarea',
    'default' => '',
    'comment' => '',
    'html' => true,
    'empty' => false,
  ),
);