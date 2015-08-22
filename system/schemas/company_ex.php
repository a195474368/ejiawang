<?php

/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: company_ex.php 2246 2013-12-17 03:04:21Z langzhong $
 */
if (!defined('__CORE_DIR')) {
    exit("Access Denied");
}

return array(
    'company_id' =>
    array(
        'field' => 'company_id',
        'label' => 'ID',
        'pk' => true,
        'add' => true,
        'edit' => true,
        'html' => false,
        'empty' => false,
        'show' => false,
        'list' => true,
        'type' => 'number',
        'comment' => '',
        'default' => '',
        'SO' => '=',
    ),
    'intro' =>
    array(
        'field' => 'intro',
        'label' => '公司介绍',
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
    'template_id' =>
    array(
        'field' => 'template_id',
        'label' => '模板',
        'pk' => false,
        'add' => false,
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
);
