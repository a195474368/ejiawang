<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: case.ctl.php 4049 2014-03-22 02:46:59Z langzhong $
 */

class Ctl_Case extends Ctl 
{
    
    public function items($page){
        $this->index($page);
    }
    
    public function index($page=1)
    {
        $url = array();
        $attr_values = K::M('data/attr')->attrs_by_from('zx:case');
        $http_key = $attr_keys = array();
        foreach ($attr_values as $key => $value) {
            $http_key['attr' . $key] = 'attr' . $key;
        }
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
            $attr_values[$key]['link'] = $this->mklink('case:items', array_merge($url, array('attr' . $key => 0)), array(),false);
            if (empty($url['attr' . $key]))
                $attr_values[$key]['checked'] = true;
            foreach ($value['values'] as $k => $v) {
                $attr_values[$key]['values'][$k]['link'] = $this->mklink('case:items', array_merge($url, array('attr' . $key => $k)), array(),false);
                if (!empty($url['attr' . $key]) && $url['attr' . $key] == $k) {
                    $attr[] = $k;
                    $attr_values[$key]['values'][$k]['checked'] = true;
                }
            }
        }
        $filter = $pager = array();
        $pager['page'] = max(intval($page), 1);
        $pager['limit'] = $limit = 30;
        $filter['audit'] = 1;
        $filter['closed'] = 0;
        $filter['attrs'] = $attr;
        $items = K::M('case/view')->items($filter,  array('orderby' => 'DESC', 'case_id' => 'DESC'), $page, $limit, $count);
        
        $this->pagedata['nextpage'] = $this->mklink('case:loaddata', array_merge($url, array('page' => '{page}')), array(),false);
        $this->pagedata['url_data'] = $url;
        $this->pagedata['attr'] = $attr;
        $this->pagedata['attr_values'] = $attr_values;
        $this->pagedata['case'] = $items;
        $this->pagedata['pager'] = $pager;
        $this->tmpl = 'mobile:case/index.html';
    }

    public function loaddata($page = 1)
    {
    
        $url = array();
        $attr_values = K::M('data/attr')->attrs_by_from('zx:case');
        $http_key = $attr_keys = array();
        foreach ($attr_values as $key => $value) {
            $http_key['attr' . $key] = 'attr' . $key;
        }
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
            foreach ($value['values'] as $k => $v) {
                if (!empty($url['attr' . $key]) && $url['attr' . $key] == $k) {
                    $attr[] = $k;
                }
            }
        }
        $filter = $pager = array();
        $pager['page'] = max(intval($page), 1);
        $pager['limit'] = $limit = 30;
        $filter['audit'] = 1;
        $filter['closed'] = 0;
        $filter['attrs'] = $attr;
        if ($items = K::M('case/view')->items($filter,  array('orderby' => 'DESC', 'case_id' => 'DESC'), $page, $limit, $count)) {
            $data = array();
            foreach($items as $val){
                $data[] = array('id'=>$val['case_id'],'url'=> $this->mklink('case:detail',array($val['case_id']),array(),false),'img'=> $val['photo'],'title'=>$val['title']);
            }
            $this->err->set_data('data', $data);
            $this->err->json();
        }
    }

    public function detail($case_id=null)
    {
        if(!$case_id = (int)$case_id){
            $this->tmpl = 'mobile:error.html';
        }else if(!$detail = K::M('case/case')->detail($case_id, true)){
           $this->tmpl = 'mobile:error.html';
        }else{
            if($photo_list = K::M('case/photo')->items_by_case($case_id)){
                $pager['count'] = count($photo_list);
                $this->pagedata['photo_list'] = $photo_list;
            }
            if($company_id = $detail['company_id']){
                $this->pagedata['company'] = K::M('company/company')->detail($company_id);
            }
            $this->pagedata['pager'] = $pager;
            $this->pagedata['detail'] = $detail;
            $this->pagedata['is_like'] = K::M('case/like')->is_like($case_id, __IP);
            $this->tmpl = 'mobile:case/detail.html';
        }
    } 
    
    public function love($case_id)
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
    
    
    
}