<?php

/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: designer.ctl.php 3840 2014-03-14 02:10:04Z langzhong $
 */


class Ctl_Designer extends Ctl
{
    public function items(){
       $this->index(); 
    }
    
    public function index(){
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
            $attr_values[$key]['link'] = $this->mklink('designer:items', array_merge($url, array('attr' . $key => 0)), array(), true);
            if (empty($url['attr' . $key]))
                $attr_values[$key]['checked'] = true;
            foreach ($value['values'] as $k => $v) {
                $attr_values[$key]['values'][$k]['link'] = $this->mklink('designer:items', array_merge($url, array('attr' . $key => $k)), array(), true);
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
            $pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink('designer:items', array_merge($url, array('page' => '{page}')), array(), true), array());
        }
        $area_list = K::M('data/area')->areas_by_city($this->request['city_id']);
        foreach ($area_list as $k => $v) {
            if ($k == $url['area_id'])
                $area_list[$k]['checked'] = true;
            $area_list[$k]['link'] = $this->mklink('designer:items', array_merge($url, array('area_id' => $k)), array(), true);
        }
        $this->pagedata['area_url'] = $this->mklink('designer:items', array_merge($url, array('area_id' => 0)), array(), true);
        $this->pagedata['area_list'] = $area_list;
        $this->pagedata['url_data'] = $url;
        $this->pagedata['attr_values'] = $attr_values;
        $this->pagedata['designers'] = $items;
        $this->pagedata['pager'] = $pager;
        $this->pagedata['area_id'] = $area_id;  
        K::M('helper/seo')->init('designer',array('area_name'=>$area_list[$area_id]['area_name']));
        $this->tmpl = 'designer.html';                
    }
    
    
    public function yuyue($uid){
        if(!($uid = (int)$uid) && !($uid = (int)$this->GP('uid'))){
            $this->err->add('没有您要的数据', 211);
        }else if(!$detail = K::M('designer/designer')->detail($uid)){
            $this->err->add('没有您要的数据', 212);
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
                $this->tmpl = 'designer_yuyue.html';              
            }
        }
    }
    
}