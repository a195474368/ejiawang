<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: site.ctl.php 4051 2014-03-22 03:54:15Z langzhong $
 */

class Ctl_Designer extends Ctl 
{
    public function items($page=1){
        $this->index($page);
    }
    
    public function index($page = 1){
        $url = array();
        $attr_values = K::M('data/attr')->attrs_by_from('zx:designer');
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
        }
        else {
            $uri = array_pad($uri, $num, 0);
        }
        $url = array_combine($http_key, $uri);

        $page = empty($url['page']) ? 1 : (int) $url['page'];

        $attr = array();

        foreach ($attr_values as $key => $value) {
            $attr_values[$key]['link'] = $this->mklink('designer:items', array_merge($url, array('attr' . $key => 0)), array(), false);
            if (empty($url['attr' . $key]))
                $attr_values[$key]['checked'] = true;
            foreach ($value['values'] as $k => $v) {
                $attr_values[$key]['values'][$k]['link'] = $this->mklink('designer:items', array_merge($url, array('attr' . $key => $k)), array(), false);
                if (!empty($url['attr' . $key]) && $url['attr' . $key] == $k) {
                    $attr[] = $k;
                    $attr_values[$key]['values'][$k]['checked'] = true;
                }
            }
        }

        $filter = $pager = array();
        $pager['page'] = max(intval($page), 1);
        $pager['limit'] = $limit = 16;
        $filter['attrs'] = $attr;
        $filter['audit'] = 1;
        $filter['closed'] = 0;
        if($area_id = (int)$url['area_id']){
            $filter['area_id'] = $area_id; 
        }else{
            $filter['city_id'] = $this->request['city_id'];
        }
        if ($items = K::M('designer/designer')->items_by_attr($filter, array('orderby'=>'desc','uid'=>'DESC'), $page, $limit, $count)) {
            $uids = array();
            foreach($items as $k=>$val){
               if($val['uid']) $uids[$val['uid']] = $val['uid'];
               $items[$k]['about'] = K::M('content/html')->text($val['about']);
            }
            if(!empty($uids)) $this->pagedata['user_list'] = K::M('member/view')->items_by_ids($uids);
            $pager['count'] = $count;
            $pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink('designer:items', array_merge($url, array('page' => '{page}')), array(), false), array());
        }
        $area_list = K::M('data/area')->areas_by_city($this->request['city_id']);
        foreach ($area_list as $k => $v) {
            if ($k == $url['area_id'])
                $area_list[$k]['checked'] = true;
            $area_list[$k]['link'] = $this->mklink('designer:items', array_merge($url, array('area_id' => $k)), array(), false);
        }
        $this->pagedata['area_url'] = $this->mklink('designer:items', array_merge($url, array('area_id' => 0)), array(), false);
        $this->pagedata['area_list'] = $area_list;
        $this->pagedata['attr_values'] = $attr_values;
        $this->pagedata['designers'] = $items;
        $this->pagedata['nextpage'] =  $this->mklink('designer:loaddata', array_merge($url, array('page' => '{page}')), array(), false);
        $this->tmpl = 'mobile:designer/index.html';       
    }
    
    public function loaddata(){
        $url = array();
        $attr_values = K::M('data/attr')->attrs_by_from('zx:designer');
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
        $pager['limit'] = $limit = 16;
        $filter['attrs'] = $attr;
        $filter['audit'] = 1;
        $filter['closed'] = 0;
        if($area_id = (int)$url['area_id']){
            $filter['area_id'] = $area_id; 
        }else{
            $filter['city_id'] = $this->request['city_id'];
        }
        if ($items = K::M('designer/designer')->items_by_attr($filter, array('orderby'=>'desc','uid'=>'DESC'), $page, $limit, $count)) {
            $uids = array();
            foreach($items as $k=>$val){
               if($val['uid']) $uids[$val['uid']] = $val['uid'];
               $items[$k]['about'] = K::M('content/html')->text($val['about']);
            }
            if(!empty($uids)) $this->pagedata['user_list'] = K::M('member/view')->items_by_ids($uids);
            $this->pagedata['designers'] = $items;
            $this->tmpl = 'mobile:designer/loaddata.html';    
        }else  die('0');   
           
    }
    
    public function detail($uid){
        if(!($uid = (int)$uid) && !($uid = (int)$this->GP('uid'))){
             $this->tmpl = 'mobile:error.html';
        }elseif (!$member = K::M('member/view')->detail($uid)) {
             $this->tmpl = 'mobile:error.html';
        }else if(!$designer = K::M('designer/designer')->detail($uid)){
             $this->tmpl = 'mobile:error.html';
        }else{
            $this->pagedata['designer_values'] = K::M('data/attr')->attrs_by_from('zx:designer');
            $this->pagedata['case_values'] = K::M('data/attr')->attrs_by_from('zx:case');
            $designer['txt'] = K::M('content/html')->text($designer['about']);
            $this->pagedata['myattr'] = K::M('designer/attr')->attrs_ids_by_designer($uid);
            $this->pagedata['designer'] = $designer;
            $this->pagedata['member'] = $member;
            $this->pagedata['company'] = K::M('company/company')->detail($designer['company_id']);
            $this->pagedata['designer'] = $designer;
            $filter['designer_id'] = $uid;
            $filter['audit'] = 1;
            $filter['closed'] = 0;
            $items = K::M('case/case')->items($filter, array('case_id' => 'desc'), 1,3);
            foreach ($items as $k => $val) {
                 $items[$k]['attr'] = K::M('case/attr')->attrs_by_case($k);
            }
            $this->pagedata['case'] = $items;
            $this->tmpl = 'mobile:designer/detail.html';        
        }
    }
    
    
    public function yuyue($uid){
        if(!($uid = (int)$uid) && !($uid = (int)$this->GP('uid'))){
             $this->tmpl = 'mobile:error.html';
        }else if(!$detail = K::M('designer/designer')->detail($uid)){
             $this->tmpl = 'mobile:error.html';
        }else{
            if($this->checksubmit('data')){
               if(!$data = $this->GP('data')){
                    $this->err->add('非法的数据提交', 201);
                }else{
                    $data['designer_id'] = $uid;
                    $data['uid'] = (int)$this->uid;
                    $data['content'] = "预约设计师:".$detail['uname'];
                    $data['city_id'] =  CITY_ID;
                    if($yuyue_id = K::M('designer/yuyue')->create($data)){
                        $obj = K::M('sms/sms');
                        $obj->send($data['mobile'],'sms_designer_yuyue',array('name'=>$data['cantact'] ? $data['cantact'] : '业主','mobile'=>$data['mobile'],'designer'=>$detail['uname']));
                        if($detail['mobile']){ //
                            $obj->send($detail['mobile'],'sms_designer_tongzhi',array('name'=>$data['cantact'] ? $data['cantact'] : '业主','mobile'=>$data['mobile'],'designer'=>$detail['uname']));
                        }    
                        $this->err->add('添加内容成功');
                    }
                } 
            }else{
                $this->pagedata['designer'] = $detail;
                $this->tmpl = 'mobile:designer/yuyue.html';               
            }
        }
    }
    
}