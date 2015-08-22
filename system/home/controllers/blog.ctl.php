<?php

/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: blog.ctl.php 2572 2013-12-27 03:25:33Z langzhong $
 */
class Ctl_Blog extends Ctl {

    public $_call = 'index';

    public function index($uid = 0, $page = 1)
    {

        if (!$member = K::M('member/view')->detail($uid)) {
            $this->err->add('用户信息不正确', 201);
        }
        elseif (!$designer = K::M('designer/designer')->detail($uid)) {
            $this->err->add('用户信息不正确', 201);
        }
        else {
            $this->pagedata['designer_values'] = K::M('data/attr')->attrs_by_from('zx:designer');
            $this->pagedata['case_values'] = K::M('data/attr')->attrs_by_from('zx:case');
            $designer['txt'] = K::M('content/html')->text($designer['about']);
            $this->pagedata['myattr'] = K::M('designer/attr')->attrs_ids_by_designer($uid);
            $this->pagedata['designer'] = $designer;
            $this->pagedata['member'] = $member;
            $this->pagedata['company'] = K::M('company/company')->detail($designer['company_id']);

            $filter = $pager = array();
            $pager['page'] = max(intval($page), 1);
            $pager['limit'] = $limit = 2;
            $filter['designer_id'] = $uid;
            $filter['audit'] = 1;
            $filter['closed'] = 0;
            if ($items = K::M('case/case')->items($filter, array('case_id' => 'desc'), $page, $limit, $count)) {
               
                $lastphotos = array();
                foreach ($items as $k => $val) {
                    if ($val['lastphotos']) {
                        $lastphotos[] = $val['lastphotos'];
                        $items[$k]['lastphotos'] = explode(',', $val['lastphotos']);
                    }
                     $items[$k]['attr'] = K::M('case/attr')->attrs_by_case($k);
                }
                if (!empty($lastphotos)) {
                    $lastphotos = join(',', $lastphotos);
                    $this->pagedata['photos'] = K::M('case/photo')->items_by_ids($lastphotos);
                }
                $pager['count'] = $count;
                $pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink('blog', array($uid, '{page}'), array(), true), array());
            }

            $this->pagedata['case'] = $items;
            $this->pagedata['pager'] = $pager;
            K::M('helper/seo')->init('designer_detail',array('uname'=>$member['uname'],'school'=>$designer['school']));
            $this->tmpl = 'designer_detail.html';
        }
    }

}
