<?php

/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: diary.ctl.php 2034 2013-12-07 03:08:33Z langzhong $
 */
if (!defined('__CORE_DIR')) {
    exit("Access Denied");
}

class Ctl_Diary_Diary extends Ctl {

    public function index($page = 1) {
        $filter = $pager = array();
        $pager['page'] = max(intval($page), 1);
        $pager['limit'] = $limit = 50;
        if ($SO = $this->GP('SO')) {
            $pager['SO'] = $SO;
            if ($SO['uid']) {
                $filter['uid'] = $SO['uid'];
            }
            if ($SO['title']) {
                $filter['title'] = "LIKE:%" . $SO['title'] . "%";
            }
            if ($SO['home_id']) {
                $filter['home_id'] = $SO['home_id'];
            }
            if ($SO['company_id']) {
                $filter['company_id'] = $SO['company_id'];
            }

            if ($SO['status']) {
                $filter['status'] = $SO['status'];
            }
            if ($SO['audit']) {
                $filter['audit'] = $SO['audit'];
            }
        }
        $uids = array();
        if ($items = K::M('diary/diary')->items($filter, null, $page, $limit, $count)) {
            foreach ($items as $k => $v) {
                if ($v['uid']) {
                    $uids[$v['uid']] = $v['uid'];
                }
                if ($v['home_id']) {
                    $home_ids[$v['home_id']] = $v['home_id'];
                }
                if ($v['company_id']) {
                    $company_ids[$v['company_id']] = $v['company_id'];
                }
                $items[$k]['create_ip'] = $v['create_ip'] . '(' . K::M("misc/location")->location($v['create_ip']) . ')';
            }
            if (!empty($uids)) {
                $this->pagedata['userList'] = K::M('member/view')->items_by_ids($uids);
            }
            if (!empty($home_ids)) {
                $this->pagedata['home_list'] = K::M('home/main')->items_by_ids($home_ids);
            }
            if (!empty($company_ids)) {
                $this->pagedata['company_list'] = K::M('company/company')->items_by_ids($company_ids);
            }
            $pager['count'] = $count;
            $pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink(null, array('{page}')), array('SO' => $SO));
        }
        $this->pagedata['items'] = $items;
        $this->pagedata['pager'] = $pager;
        $this->pagedata['status'] = K::M('home/site')->get_status();
        $this->tmpl = 'admin:diary/diary/items.html';
    }

    public function so() {
        $this->pagedata['status'] = K::M('home/site')->get_status();
        $this->tmpl = 'admin:diary/diary/so.html';
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

                    $cfg = K::$system->config->get('attach');
                    $oImg = K::M('image/gd');
                    $upload = K::M('magic/upload');
                    foreach ($attachs as $k => $attach) {
                        if ($attach['error'] == UPLOAD_ERR_OK) {
                            if ($a = $upload->upload($attach, 'diary')) {
                                $data[$k] = $a['photo'];

                                $size['photo'] = $cfg['diary']['photo'] ? $cfg['diary']['photo'] : 200;
                                $oImg->thumbs($a['file'], array($size['photo'] => $a['file']));
                            }
                        }
                    }
                }

                $data['create_ip'] = __IP;
                $data['dateline'] = __TIME;
                if ($diary_id = K::M('diary/diary')->create($data)) {
                    $this->err->add('添加内容成功');
                    $this->err->set_data('forward', '?diary/diary-index.html');
                }
            }
        } else {
            $this->pagedata['status'] = K::M('home/site')->get_status();
            $this->pagedata['setting'] = K::M('tenders/setting')->fetch_all_setting();
            $this->pagedata['type'] = K::M('tenders/setting')->get_type();
            $this->tmpl = 'admin:diary/diary/create.html';
        }
    }

    public function edit($diary_id = null) {
        if (!($diary_id = (int) $diary_id) && !($diary_id = $this->GP('diary_id'))) {
            $this->err->add('未指定要修改的内容ID', 211);
        } else if (!$detail = K::M('diary/diary')->detail($diary_id)) {
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

                    $cfg = K::$system->config->get('attach');
                    $oImg = K::M('image/gd');
                    $upload = K::M('magic/upload');
                    foreach ($attachs as $k => $attach) {
                        if ($attach['error'] == UPLOAD_ERR_OK) {
                            if ($a = $upload->upload($attach, 'diary')) {
                                $data[$k] = $a['photo'];

                                $size['photo'] = $cfg['diary']['photo'] ? $cfg['diary']['photo'] : 200;
                                $oImg->thumbs($a['file'], array($size['photo'] => $a['file']));
                            }
                        }
                    }
                }
                if (K::M('diary/diary')->update($diary_id, $data)) {
                    $this->err->add('修改内容成功');
                }
            }
        } else {
            $this->pagedata['status'] = K::M('home/site')->get_status();
            $this->pagedata['setting'] = K::M('tenders/setting')->fetch_all_setting();
            $this->pagedata['type'] = K::M('tenders/setting')->get_type();
            $this->pagedata['detail'] = $detail;
            if ($company_id = $detail['company_id']) {
                $this->pagedata['company'] = K::M('company/company')->detail($company_id);
            }
            if ($home_id = (int) $detail['home_id']) {
                $this->pagedata['home'] = K::M('home/main')->detail($home_id);
            }
            if ($uid = (int) $detail['uid']) {
                $this->pagedata['member'] = K::M('member/view')->detail($uid);
            }
            $this->tmpl = 'admin:diary/diary/edit.html';
        }
    }

    public function doaudit($diary_id = null) {
        if ($diary_id = (int) $diary_id) {
            if (K::M('diary/diary')->batch($diary_id, array('audit' => 1))) {
                $this->err->add('审核内容成功');
            }
        } else if ($ids = $this->GP('diary_id')) {
            if (K::M('diary/diary')->batch($ids, array('audit' => 1))) {
                $this->err->add('批量审核内容成功');
            }
        } else {
            $this->err->add('未指定要审核的内容', 401);
        }
    }

    public function delete($diary_id = null) {
        if ($diary_id = (int) $diary_id) {
            if (K::M('diary/diary')->delete($diary_id)) {
                $this->err->add('删除成功');
            }
        } else if ($ids = $this->GP('diary_id')) {
            if (K::M('diary/diary')->delete($ids)) {
                $this->err->add('批量删除成功');
            }
        } else {
            $this->err->add('未指定要删除的内容ID', 401);
        }
    }

}
