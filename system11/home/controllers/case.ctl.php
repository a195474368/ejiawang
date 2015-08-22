<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: case.ctl.php 3975 2014-03-19 02:47:00Z langzhong $
 */
class Ctl_Case extends Ctl {

    public function items($page = 1)
    {
        $this->index($page);
    }

    public function index($page = 1)
    {
        $url = array();
        $attr_values = K::M('data/attr')->attrs_by_from('zx:case');
        $http_key = $attr_keys = array();
        foreach ($attr_values as $key => $value) {
            $http_key['attr' . $key] = 'attr' . $key;
        }
        $http_key['order'] = 'order'; //排序字段
        $http_key['page'] = 'page';
        $num = count($http_key);
        $uri = explode('-', trim($this->request['uri'], '.html'));
        foreach ($uri as $k => $v) {
            if (!is_numeric($v)) {
                unset($uri[$k]);
            }
        }
        if (count($uri) > $num) {
            $uri = array_slice($uri, 0, $num);
        }
        else {
            $uri = array_pad($uri, $num, 0);
        }
        $url = array_combine($http_key, $uri);
        $page = empty($url['page']) ? 1 : (int) $url['page'];
        $attr = array();
        foreach ($attr_values as $key => $value) {
            $attr_values[$key]['link'] = $this->mklink('case:items', array_merge($url, array('attr' . $key => 0)), array(), true);
            if (empty($url['attr' . $key]))
                $attr_values[$key]['checked'] = true;
            foreach ($value['values'] as $k => $v) {
                $attr_values[$key]['values'][$k]['link'] = $this->mklink('case:items', array_merge($url, array('attr' . $key => $k)), array(), true);
                if (!empty($url['attr' . $key]) && $url['attr' . $key] == $k) {
                    $attr[] = $k;
                    $attr_values[$key]['values'][$k]['checked'] = true;
                }
            }
        }
        $order = array();
        switch ($url['order']) {
            case 1: $order = array('views' => 'DESC', 'case_id' => 'DESC');
                break;
            case 2: $order = array('likes' => 'DESC', 'case_id' => 'DESC');
                break;
            default:$order = array('orderby' => 'DESC', 'case_id' => 'DESC');
                break;
        }
        $filter = $pager = array();
        $pager['page'] = max(intval($page), 1);
        $pager['limit'] = $limit = 15;
        $filter['audit'] = 1;
        $filter['closed'] = 0;
        $filter['attrs'] = $attr;
        if ($items = K::M('case/view')->items($filter, $order, $page, $limit, $count)) {
            $lastphotos = $company_ids = array();
            foreach ($items as $k => $val) {
                if ($val['lastphotos']) {
                    $lastphotos[] = $val['lastphotos'];
                    $items[$k]['lastphotos'] = explode(',', $val['lastphotos']);
                }
                if ($val['company_id'])
                    $company_ids[$val['company_id']] = $val['company_id'];
            }
            if (!empty($company_ids))
                $this->pagedata['company_list'] = K::M('company/company')->items_by_ids($company_ids);
            if (!empty($lastphotos)) {
                $lastphotos = join(',', $lastphotos);
                $this->pagedata['photos'] = K::M('case/photo')->items_by_ids($lastphotos);
            }
            $pager['count'] = $count;
            $pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink('case:items', array_merge($url, array('page' => '{page}')), array(), true), array());
        }


        $this->pagedata['order_url'] = array(
            'today' => $this->mklink('case:items', array_merge($url, array('order' => 0)), array(), true),
            'pv' => $this->mklink('case:items', array_merge($url, array('order' => 1)), array(), true),
            'like' => $this->mklink('case:items', array_merge($url, array('order' => 2)), array(), true),
        );
        $this->pagedata['url_data'] = $url;
        $this->pagedata['attr'] = $attr;
        $this->pagedata['attr_values'] = $attr_values;
        $this->pagedata['case'] = $items;
        $this->pagedata['pager'] = $pager;
        K::M('helper/seo')->init('case',array());
        $this->tmpl = 'case.html';
    }

    public function detail($case_id, $page = 1)
    {
        if (!$case_id = (int) $case_id) {
            $this->err->add('案例不存在', 211);
        }
        else if (!$case = K::M('case/case')->detail($case_id)) {
            $this->err->add('案例不存在', 212);
        }
        elseif (!$case['audit']) {
            $this->err->add('该案例还未通过审核', 212);
        }
        else {
            K::M('case/case')->update_count($case_id, 'views', 1);

            $this->pagedata['up_detail'] = K::M('case/case')->up_detail($case_id,1,true);
            $this->pagedata['next_detail'] = K::M('case/case')->next_detail($case_id,1,true);

            $this->pagedata['company'] = K::M('company/company')->detail($case['company_id']);
            $this->pagedata['photos'] = K::M('case/photo')->items_by_case($case_id, 1, 50);
            $this->pagedata['detail'] = $case;

            $filter = $pager = array();
            $pager['page'] = max(intval($page), 1);
            $pager['limit'] = $limit = 10;
            $filter['case_id'] = $case_id;
            $filter['audit'] = 1;
            if ($items = K::M('case/comment')->items($filter, array('comment_id'=>'DESC'), $page, $limit, $count)) {
                $uids = $caseids = array();
                foreach ($items as $k => $v) {
                    $uids[$v['uid']] = $v['uid'];
                    $items[$k]['create_ip'] = $v['create_ip'] . '(' . K::M("misc/location")->location($v['create_ip']) . ')';
                }
                $pager['count'] = $count;
                $pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink('case:detail', array($case_id,'{page}')), array());
            }
            $this->pagedata['userList'] = K::M('member/view')->items_by_ids($uids);
            $this->pagedata['items'] = $items;
            $this->pagedata['pager'] = $pager;
            K::M('helper/seo')->init('case_detail',array(
                'title' => $case['title'],
                'seo_title' => $case['seo_title'],
                'seo_keywords' => $case['seo_keywords'],
                'seo_description' => $case['seo_description'],
            ));
            $this->tmpl = 'case_detail.html';
        }
    }

    public function like($case_id)
    {
        if (!$case_id = (int) $case_id) {
            $this->err->add('案例不存在', 211);
        }
        else if (!$case = K::M('case/case')->detail($case_id)) {
            $this->err->add('案例不存在', 212);
        }
        elseif (!$case['audit']) {
            $this->err->add('该案例还未通过审核', 212);
        }
        elseif (K::M('case/like')->is_like($case_id, __IP)) {
            $this->err->add('已经喜欢过了', 212);
        }
        else {
            $data = array('case_id' => $case_id, 'uid' => $this->uid, 'create_ip' => __IP, 'dateline' => __TIME);
            K::M('case/like')->create($data);
            K::M('case/case')->update_count($case_id, 'likes', 1);
            $this->err->add('喜欢成功');
        }
    }

    public function comment($case_id)
    {
        if (empty($this->uid)) {
            $this->err->add('请登录', 101);
        }
        elseif (($audit = K::M('system/audit')->audit('caseComment', $this->MEMBER)) == -1) {
            $this->err->add('很抱歉您所在的用户组没有权限操作', 201);
        }
        elseif (!$case_id = (int) $case_id) {
            $this->err->add('案例不存在', 211);
        }
        else if (!$case = K::M('case/case')->detail($case_id)) {
            $this->err->add('案例不存在', 212);
        }
        elseif (!$case['audit']) {
            $this->err->add('该案例还未通过审核', 212);
        }
        elseif (!$content = $this->GP('content')) {
            $this->err->add('至少说点什么吧！', 212);
        }
        else {
            $data = array(
                'case_id' => $case_id,
                'uid' => $this->uid,
                'content' => $content,
                'audit' => $audit
            );
            K::M('case/comment')->create($data);
            $this->err->add('操作成功！');
        }
    }

}
