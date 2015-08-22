<?php

/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: activity.ctl.php 4373 2014-04-02 06:16:22Z langzhong $
 */
class Ctl_Activity extends Ctl {

    public function items($cat_id = 0, $page = 1)
    {
        $this->index($cat_id, $page);
    }

    public function index($cat_id = 0, $page = 1)
    {
        $filter = $pager = array();
        $pager['page'] = max(intval($page), 1);
        $pager['limit'] = $limit = 50;
        $filter['city_id'] = $this->request['city_id'];
        $filter['closed'] = 0;
        if ($cat_id = (int) $cat_id) {
            $filter['cate_id'] = $cat_id;
            $this->pagedata['cate_id'] = $cat_id;
        }
        if ($items = K::M('activity/main')->items($filter, null, $page, $limit, $count)) {
            $pager['count'] = $count;
            $pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink('activity:items', array($cat_id, '{page}'), array(), true), array());
        }
        $this->pagedata['items'] = $items;
        $this->pagedata['pager'] = $pager;
        $this->pagedata['cityList'] = K::M("data/city")->fetch_all();
        $this->pagedata['areaList'] = K::M("data/area")->fetch_all();
        $this->pagedata['cateList'] = $cateList = K::M("activity/cate")->fetch_all();
        K::M('helper/seo')->init('activity', array('cate_title' => $cateList[$cat_id]['title'],
            'cate_seo_title' => $cateList[$cat_id]['seo_title'],
            'cate_seo_keywords' => $cateList[$cat_id]['seo_keywords'],
            'cate_seo_description' => $cateList[$cat_id]['seo_description'],
        ));
        $this->tmpl = 'activity.html';
    }

    public function detail($id)
    {
        if (!($id = (int) $id) && !($id = (int)$this->GP('id'))) {
            $this->err->add('未指定要修改的内容ID', 211);
        }
        else if (!$detail = K::M('activity/main')->detail($id)) {
            $this->err->add('您要修改的内容不存在或已经操作成功', 212);
        }
        else {
            $this->pagedata['detail'] = $detail;
            $this->pagedata['detail_ex'] = K::M('activity/ex')->items(array('activity_id' => $id));
            $this->pagedata['detail_sign'] = K::M('activity/sign')->items(array('activity_id' => $id), array('id' => 'DESC'), 1, 7);

            K::M('helper/seo')->init('activity_detail', array('title' => $detail['title'],
                'seo_title' => $detail['seo_title'],
                'seo_keywords' => $detail['seo_keywords'],
                'seo_description' => $detail['seo_description'],
            ));
            if(!empty($detail['template'])){
                $this->tmpl =$detail['template'];
            }else{
                $this->tmpl = 'activity_detail.html';
            }
        }
    }

    public function save($id)
    {
        $today = date('Y-m-d', __TIME);
        if (!($id = (int) $id) && !($id = (int)$this->GP('id'))) {
            $this->err->add('未指定要修改的内容ID', 211);
        }
        else if (!$detail = K::M('activity/main')->detail($id)) {
            $this->err->add('您要修改的内容不存在或已经操作成功', 212);
        }
        elseif ($detail['reg_time'] < $today) {
            $this->err->add('报名已经结束', 212);
        }
        else {
            if (!$data = $this->GP('data')) {
                $this->err->add('非法的数据提交', 201);
            }
            else {
                $data['uid'] = (int) $this->uid;
                $data['activity_id'] = $id;
                if (K::M('activity/sign')->create($data)) {
                    K::M('activity/main')->update_count($id,'sign_num');
                    $obj = K::M('sms/sms');
                    if(K::M('verify/check')->mobile($data['tel'])){
                        $obj->send($data['tel'], 'sms_activity_yezhu', array('name' => $data['cantact'] ? $data['cantact'] : '业主', 'mobile' => $data['tel'], 'activity' => $detail['title']));
                    }
                    $obj->admin('sms_admin_activity', array('name' => $data['cantact'] ? $data['cantact'] : '业主', 'mobile' => $data['tel'], 'activity' => $detail['title']));
                    
                    $this->err->add('添加内容成功');
                    $this->err->set_data('forward', $this->mklink('activity:detail', array($id), array(), true));
                }
            }
        }
    }

}
