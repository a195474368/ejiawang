<?php

/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id$
 */

class Ctl_Mechanic extends Ctl {
    
    
    public function items(){
       $this->index(); 
    }
    
    public function index(){
        $url = array();
        $attr_values = K::M('data/attr')->attrs_by_from('zx:mechanic');
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
            $attr_values[$key]['link'] = $this->mklink('mechanic:items', array_merge($url, array('attr' . $key => 0)), array(), true);
            if (empty($url['attr' . $key]))
                $attr_values[$key]['checked'] = true;
            foreach ($value['values'] as $k => $v) {
                $attr_values[$key]['values'][$k]['link'] = $this->mklink('mechanic:items', array_merge($url, array('attr' . $key => $k)), array(), true);
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
        
        if($area_id = (int)$url['area_id']){
            $filter['area_id'] = $area_id; 
        }else{
            $filter['city_id'] = $this->request['city_id'];
        }
        if ($items = K::M('mechanic/mechanic')->items_by_attr($filter, array('orderby'=>'desc','uid'=>'DESC'), $page, $limit, $count)) {
             $uids = array();
            foreach($items as $k=>$val){
               if($val['uid']) $uids[$val['uid']] = $val['uid'];
               $items[$k]['about'] = K::M('content/html')->text($val['about']);
            }
            if(!empty($uids)) $this->pagedata['user_list'] = K::M('member/view')->items_by_ids($uids);
            $pager['count'] = $count;
            $pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink('mechanic:items', array_merge($url, array('page' => '{page}')), array(), true), array());
        }
        $area_list = K::M('data/area')->areas_by_city($this->request['city_id']);
        foreach ($area_list as $k => $v) {
            if ($k == $url['area_id'])
                $area_list[$k]['checked'] = true;
            $area_list[$k]['link'] = $this->mklink('mechanic:items', array_merge($url, array('area_id' => $k)), array(), true);
        }
        $this->pagedata['area_url'] = $this->mklink('mechanic:items', array_merge($url, array('area_id' => 0)), array(), true);
        $this->pagedata['area_list'] = $area_list;
        $this->pagedata['url_data'] = $url;
        $this->pagedata['attr_values'] = $attr_values;
        $this->pagedata['mechanics'] = $items;
        $this->pagedata['pager'] = $pager;
        $this->pagedata['area_id'] = $area_id;  
        K::M('helper/seo')->init('mechanic',array('area_name'=>$area_list[$area_id]['area_name']));
        $this->tmpl = 'mechanic.html';                
    }
    
    
    public function detail($uid=null){
        if(!($uid = (int)$uid) && !($uid = $this->GP('uid'))){
            $this->err->add('您访问的内容不存在', 211);
        }else if(!$detail = K::M('mechanic/mechanic')->detail($uid)){
            $this->err->add('您访问的内容不存在', 212);
        }else{
            $this->pagedata['attr'] = K::M('mechanic/attr')->attrs_ids_by_mechanic($uid);
            $this->pagedata['detail'] = $detail;
            K::M('helper/seo')->init('mechanic_detail',array('name'=>$detail['realname']));
            $this->tmpl = 'mechanic_detail.html';      
        }
    }
    
}