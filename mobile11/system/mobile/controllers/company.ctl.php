<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: company.ctl.php 4050 2014-03-22 02:54:26Z langzhong $
 */

class Ctl_Company extends Ctl 
{
    public function items(){
        $this->index();
    }
    public function index()
    {       
        $url = array();
        $attr_values = K::M('data/attr')->attrs_by_from('zx:company');
        $http_key = $attr_keys = array();
        $http_key['area_id'] = 'area_id'; //排序字段
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
        }else {
            $uri = array_pad($uri, $num, 0);
        }
        $url = array_combine($http_key, $uri);
        $page = empty($url['page']) ? 1 : (int) $url['page'];
        $attr = array();
        foreach ($attr_values as $key => $value) {
            $attr_values[$key]['link'] = $this->mklink('company:items', array_merge($url, array('attr' . $key => 0)), array(),false);
            if (empty($url['attr' . $key]))
                $attr_values[$key]['checked'] = true;
            foreach ($value['values'] as $k => $v) {
                $attr_values[$key]['values'][$k]['link'] = $this->mklink('company:items', array_merge($url, array('attr' . $key => $k)), array(),false);
                if (!empty($url['attr' . $key]) && $url['attr' . $key] == $k) {
                    $attr[] = $k;
                    $attr_values[$key]['values'][$k]['checked'] = true;
                }
            }
        }
        $filter = $pager = array();
        $pager['page'] = max(intval($page), 1);
        $pager['limit'] = $limit = 8;
        $filter['attrs'] = $attr;
        $filter['audit'] = 1;
        if ($area_id = (int) $url['area_id']) {
            $filter['area_id'] = $area_id;
        }else{
            $filter['city_id'] = $this->request['city_id'];
        }
        $filter['closed'] = 0;
        $filter['audit'] = 1;
        $area_list = K::M('data/area')->areas_by_city($this->request['city_id']);
        foreach ($area_list as $k => $v) {
            if ($k == $url['area_id']) $area_list[$k]['checked'] = true;
            $area_list[$k]['link'] = $this->mklink('company:items', array_merge($url, array('area_id' => $k)), array(), false);
        }
        $this->pagedata['area_url'] = $this->mklink('company:items', array_merge($url, array('area_id' => 0)), array(), false);
        $this->pagedata['area_list'] = $area_list;
        $this->pagedata['url_data'] = $url;
        $this->pagedata['attr_values'] = $attr_values;
        $items = K::M('company/view')->items($filter, array('orderby' => 'desc', 'security' => 'desc', 'scores' => 'desc', 'case_num' => 'desc', 'company_id' => 'DESC'), $page, $limit, $count);

        $this->pagedata['companys'] = $items;
        $this->pagedata['pager'] = $pager;
        $this->pagedata['area_id'] = $area_id;
        $this->pagedata['nextpage'] = $this->mklink('company:loaddata', array_merge($url, array('page' => '{page}')), array(), false);
        $this->tmpl = "mobile:company/index.html";
    }

    public function loaddata()
    {
        $url = array();
        $attr_values = K::M('data/attr')->attrs_by_from('zx:company');
        $http_key = $attr_keys = array();
        $http_key['area_id'] = 'area_id'; //排序字段
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
        }else {
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
        $pager['limit'] = $limit = 8;
        $filter['attrs'] = $attr;
        $filter['audit'] = 1;
        if ($area_id = (int) $url['area_id']) {
            $filter['area_id'] = $area_id;
        }else{
            $filter['city_id'] = $this->request['city_id'];
        }
        $filter['closed'] = 0;
        $filter['audit'] = 1;
        $items = K::M('company/view')->items($filter, array('orderby' => 'desc', 'security' => 'desc', 'scores' => 'desc', 'case_num' => 'desc', 'company_id' => 'DESC'), $page, $limit);
        if($items){
            $this->pagedata['companys'] = $items;
            $this->tmpl = "mobile:company/loaddata.html"; 
        }else{
            die('0');
        }
    }

    public function detail($company_id=null)
    {
        if(!$company_id = (int)$company_id){
            $this->tmpl = 'mobile:error.html';
        }else if(!$detail = K::M('company/company')->detail($company_id, true)){
            $this->tmpl = 'mobile:error.html';
        }else{
  
            $this->pagedata['detail'] = $detail;
            $this->tmpl = 'mobile:company/detail.html';
        }
    }
    
    
    public function  yuyue($company_id=null){
         if (!($company_id = (int) $company_id) && !($company_id = (int)$this->GP('company_id'))) {
           $this->tmpl = 'mobile:error.html';
        } else if (!$detail = K::M('company/company')->detail($company_id)) {
           $this->tmpl = 'mobile:error.html';
        }else{
            if($this->checksubmit('data')){
                if(!$data = $this->GP('data')){
                    $this->err->add('非法的数据提交', 201);
                }else{
                    $data['uid'] = (int)$this->uid;
                    $data['company_id'] = $company_id;
                    $data['content'] = "预约装修";
                    if($yuyue_id = K::M('company/yuyue')->create($data)){
                        $obj = K::M('sms/sms');
                        $obj->send($data['mobile'],'sms_company_yuyue',array('name'=>$data['cantact'] ? $data['cantact'] : '业主','mobile'=>$data['mobile'],'company'=>$detail['sort_name']));
                        if($detail['moblie']){
                           $obj->send($detail['mobile'],'sms_youhui_tongzhi',array('name'=>$data['cantact'] ? $data['cantact'] : '业主','mobile'=>$data['mobile'],'company'=>$detail['sort_name'])); 
                        }
                        $this->err->add('预约成功！');  
                    }
                } 
            }else{
             
                $this->pagedata['detail'] = $detail;
                $this->tmpl = 'mobile:company/yuyue.html';
            }
            
        }
        
    }

}