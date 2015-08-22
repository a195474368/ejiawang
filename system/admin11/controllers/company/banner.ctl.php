<?php

/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: banner.ctl.php 2034 2013-12-07 03:08:33Z langzhong $
 */
if (!defined('__CORE_DIR')) {
    exit("Access Denied");
}

class Ctl_Company_Banner extends Ctl {

    public function index($page = 1) {
        $filter = $pager = array();
        $pager['page'] = max(intval($page), 1);
        $pager['limit'] = $limit = 50;
        if ($SO = $this->GP('SO')) {
            $pager['SO'] = $SO;
            if ($SO['company_id']) {
                $filter['company_id'] = $SO['company_id'];
            }
            if ($SO['title']) {
                $filter['title'] = "LIKE:%" . $SO['title'] . "%";
            }
        }
        $companyIds = array();
        if ($items = K::M('company/banner')->items($filter, null, $page, $limit, $count)) {
             foreach($items as $k=>$v){
               if(!empty($v['company_id']))  $companyIds[$v['company_id']] = $v['company_id'];
            } 
            $pager['count'] = $count;
            $pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink(null, array('{page}')), array('SO' => $SO));
        }
        $this->pagedata['company_list'] = K::M('company/company')->items_by_ids($companyIds);
        $this->pagedata['items'] = $items;
        $this->pagedata['pager'] = $pager;
        $this->tmpl = 'admin:company/banner/items.html';
    }

    public function so() {
        $this->tmpl = 'admin:company/banner/so.html';
    }

    public function create() {
        if ($this->checksubmit()) {
            if (!$data = $this->GP('data')) {
                $this->err->add('非法的数据提交', 201);
            } else {
                if ($_FILES['data']) {
                    foreach ($_FILES['data'] as $k => $v) {
                        foreach ($v as $kk => $vv) {
                            $attachs[$kk][$k] = $vv;
                        }
                    }
                    $upload = K::M('magic/upload');
                    foreach ($attachs as $k => $attach) {
                        if ($attach['error'] == UPLOAD_ERR_OK) {
                            if ($a = $upload->upload($attach, 'company')) {
                                $data[$k] = $a['photo'];
                            }
                        }
                    }
                }

                if ($banner_id = K::M('company/banner')->create($data)) {
                    $this->err->add('添加内容成功');
                    $this->err->set_data('forward', '?company/banner-index.html');
                }
            }
        } else {
            $this->tmpl = 'admin:company/banner/create.html';
        }
    }

    public function edit($banner_id = null) {
        if (!($banner_id = (int) $banner_id) && !($banner_id = $this->GP('banner_id'))) {
            $this->err->add('未指定要修改的内容ID', 211);
        } else if (!$detail = K::M('company/banner')->detail($banner_id)) {
            $this->err->add('您要修改的内容不存在或已经删除', 212);
        } else if ($this->checksubmit('data')) {
            if (!$data = $this->GP('data')) {
                $this->err->add('非法的数据提交', 201);
            } else {
                if ($_FILES['data']) {
                    foreach ($_FILES['data'] as $k => $v) {
                        foreach ($v as $kk => $vv) {
                            $attachs[$kk][$k] = $vv;
                        }
                    }
                    $upload = K::M('magic/upload');
                    foreach ($attachs as $k => $attach) {
                        if ($attach['error'] == UPLOAD_ERR_OK) {
                            if ($a = $upload->upload($attach, 'company')) {
                                $data[$k] = $a['photo'];
                            }
                        }
                    }
                }

                if (K::M('company/banner')->update($banner_id, $data)) {
                    $this->err->add('修改内容成功');
                }
            }
        } else {
            if ($company_id = $detail['company_id']) {
                $this->pagedata['company'] = K::M('company/company')->detail($company_id);
            }
            $this->pagedata['detail'] = $detail;
            $this->tmpl = 'admin:company/banner/edit.html';
        }
    }

    public function delete($banner_id = null) {
        if ($banner_id = (int) $banner_id) {
            if (K::M('company/banner')->delete($banner_id)) {
                $this->err->add('删除成功');
            }
        } else if ($ids = $this->GP('banner_id')) {
            if (K::M('company/banner')->delete($ids)) {
                $this->err->add('批量删除成功');
            }
        } else {
            $this->err->add('未指定要删除的内容ID', 401);
        }
    }

}
