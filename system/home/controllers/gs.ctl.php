<?php

/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: gs.ctl.php 4388 2014-04-03 13:49:43Z youyi $
 */
class Ctl_Gs extends Ctl {

    public function index()
    {
        $attr = K::M('data/attr')->attrs_by_from('zx:company');
        $home_list_url = array('area_id' => 0);
        foreach ($attr as $k => $v) {
            $home_list_url['attr_' . $k] = 0;
        }
        foreach ($attr as $key => $value) {
            $attr[$key]['link'] = $this->mklink('gs:items', array_merge($home_list_url, array('attr_' . $key => 0)), array(), true);
            foreach ($value['values'] as $k => $v) {
                $attr[$key]['values'][$k]['link'] = $this->mklink('gs:items', array_merge($home_list_url, array('attr_' . $key => $k)), array(), true);
            }
        }
        $this->pagedata['attr_values'] = $attr;
        $this->pagedata['area_list'] = K::M('data/area')->areas_by_city($this->request['city_id']);
        K::M('helper/seo')->init('gs',array());
        $this->tmpl = 'gs.html';
    }

    public function items($page = 1)
    {
         $gs_name=trim($_GET['s']);
         
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
            $attr_values[$key]['link'] = $this->mklink('gs:items', array_merge($url, array('attr' . $key => 0)), array());
            if (empty($url['attr' . $key]))
                $attr_values[$key]['checked'] = true;
            foreach ($value['values'] as $k => $v) {
                $attr_values[$key]['values'][$k]['link'] = $this->mklink('gs:items', array_merge($url, array('attr' . $key => $k)), array());
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
         $filter['name']="LIKE:%".$gs_name."%";
        if ($items = K::M('company/view')->items($filter, array('orderby' => 'desc', 'security' => 'desc', 'scores' => 'desc', 'case_num' => 'desc', 'company_id' => 'DESC'), $page, $limit, $count)) {
            $uids = $company_ids = array();
            foreach ($items as $val) {
                if ($val['uid'])
                    $uids[$val['uid']] = $val['uid'];
                $company_ids[$val['company_id']] = $val['company_id'];
            }
            if (!empty($uids))
                $this->pagedata['user_list'] = K::M('member/view')->items_by_ids($uids);
            $this->pagedata['company_ex'] = K::M('company/companyex')->items_by_ids($company_ids);
            $this->pagedata['dianping'] = K::M('company/dianping')->get_last_dianping_by_company_ids($company_ids);
            $pager['count'] = $count;
            $pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink('gs:items', array_merge($url, array('page' => '{page}')), array(), true), array());
        }
        $area_list = K::M('data/area')->areas_by_city($this->request['city_id']);
        foreach ($area_list as $k => $v) {
            if ($k == $url['area_id'])
                $area_list[$k]['checked'] = true;
            $area_list[$k]['link'] = $this->mklink('gs:items', array_merge($url, array('area_id' => $k)), array(), true);
        }
        $this->pagedata['area_url'] = $this->mklink('gs:items', array_merge($url, array('area_id' => 0)), array(), true);
        $this->pagedata['area_list'] = $area_list;
        $this->pagedata['url_data'] = $url;
        $this->pagedata['attr_values'] = $attr_values;
        $this->pagedata['companys'] = $items;
        $this->pagedata['pager'] = $pager;
        $this->pagedata['gs_name']= $gs_name;
        $this->pagedata['area_id'] = $area_id;
        
        K::M('helper/seo')->init('gs_items',array('area_name'=>$area_list[$area_id]['area_name']));
        $this->tmpl = 'gs_items.html';
    }

    public function youhui($page = 1)
    {
        $filter = $pager = array();
        $pager['page'] = max(intval($page), 1);
        $pager['limit'] = $limit = 15;
        $filter['city_id'] = $this->request['city_id'];
        $filter['audit'] = 1;
        if ($items = K::M('company/youhui')->items($filter, array('youhui_id'=>'DESC'), $page, $limit, $count)) {
            foreach ($items as $k => $v) {
                $end = strtotime($v['end_date']);
                if($end > __TIME){
                    $items[$k]['end'] = ceil(($end - __TIME)/86400);
                }else{
                    $items[$k]['end'] = 0;
                }
            }
            $pager['count'] = $count;
            $pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink(null, array('{page}')), array());
        }
      
        $this->pagedata['items'] = $items;
        $this->pagedata['pager'] = $pager;
        K::M('helper/seo')->init('gs_youhui',array());
        $this->tmpl = 'youhui.html';
    }
    
    
    public function detail($youhui_id=null){
        if (!($youhui_id = (int) $youhui_id) && !($youhui_id = (int)$this->GP('youhui_id'))) {
            $this->err->add('捣什么乱呢', 211);
        } else if (!$detail = K::M('company/youhui')->detail($youhui_id)) {
            $this->err->add('捣什么乱呢', 212);
        }elseif(!$detail['audit']){
            $this->err->add('捣什么乱呢', 212);
        }else{
            $filter  = array();
            $filter['city_id'] = $this->request['city_id'];
            $filter['audit'] = 1;
            if ($items = K::M('company/youhui')->items($filter, array('youhui_id'=>'DESC'), 1, 3)) {
                foreach ($items as $k => $v) {
                    $end = strtotime($v['end_date']);
                    if($end > __TIME){
                        $items[$k]['end'] = ceil(($end - __TIME)/86400);
                    }else{
                        $items[$k]['end'] = 0;
                    }
                }
            }
            $end = strtotime($detail['end_date']);
            if($end > __TIME){
                $detail['end'] = ceil(($end - __TIME)/86400);
            }else{
                $detail['end'] = 0;
            }
            $this->pagedata['detail'] = $detail;
            
            $this->pagedata['items'] = $items;
            $this->pagedata['company']  = K::M('company/company')->detail($detail['company_id']);
            $this->pagedata['dianping'] = K::M('company/dianping')->items(array('company_id'=>$detail['company_id'],'audit'=>1),array('id'=>'DESC'),1,2);
            
            K::M('helper/seo')->init('gs_youhui_detail',array(
                'company_name' => $this->pagedata['company']['name'],
                'title' => $detail['title'],
            ));
            
            $this->tmpl = 'youhui_detail.html';
        }       
    }
    
    public function sign($youhui_id=null){
        $today = date('Y-m-d',__TIME);
        if (!($youhui_id = (int) $youhui_id) && !($youhui_id = (int)$this->GP('youhui_id'))) {
            $this->err->add('捣什么乱呢', 211);
        } else if (!$detail = K::M('company/youhui')->detail($youhui_id)) {
            $this->err->add('捣什么乱呢', 212);
        }elseif(!$detail['audit'] || $detail['end_date'] < $today){
            $this->err->add('捣什么乱呢', 212);
        }else{
             if($this->checksubmit('data')){
                if(!$data = $this->GP('data')){
                    $this->err->add('非法的数据提交', 201);
                }else{
                    $data['uid'] = (int)$this->uid;
                    $data['youhui_id'] = $youhui_id;
                    $data['dateline'] = __TIME;
                    $data['create_ip'] = __IP;
                    if($sign_id = K::M('company/sign')->create($data)){
                        K::M('company/youhui')->update_count($youhui_id,'sign_num');
                        $company = K::M('company/company')->detail($detail['company_id']);
                        $obj = K::M('sms/sms');
                        $obj->send($data['mobile'],'sms_youhui_yuyue',array('name'=>$data['cantact'] ? $data['cantact'] : '业主','mobile'=>$data['mobile'],'company'=>$company['sort_name'],'youhui'=>$detail['title']));
                        if($company['mobile']){
                            $obj->send($company['mobile'],'sms_youhui_tongzhi',array('name'=>$data['cantact'] ? $data['cantact'] : '业主','mobile'=>$data['mobile'],'youhui'=>$detail['title'],'company'=>$company['sort_name']));
                        }           
                        $this->err->add('恭喜您报名成功！');
                    }
                } 
            }else{
                $this->pagedata['detail'] = $detail;
                $this->pagedata['company']  = K::M('company/company')->detail($detail['company_id']);
                $this->tmpl = 'youhui_sign.html';
            }
        } 
    }
    
     public function yuyue($company_id){
        if (!($company_id = (int) $company_id) && !($company_id = (int)$this->GP('company_id'))) {
            $this->err->add('乱弄', 211);
        } else if (!$detail = K::M('company/company')->detail($company_id)) {
            $this->err->add('乱弄', 212);
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
                           $obj->send($detail['mobile'],'sms_company_tongzhi',array('name'=>$data['cantact'] ? $data['cantact'] : '业主','mobile'=>$data['mobile'],'company'=>$detail['sort_name'])); 
                        }
                        $this->err->add('预约成功！');  
                    }
                } 
            }else{
             
                $this->pagedata['detail'] = $detail;
                $this->tmpl = 'company_yuyue.html';
            }
            
        }
    }
     public function yuyue2($company_id){
        if (!($company_id = (int) $company_id) && !($company_id = (int)$this->GP('company_id'))) {
            $this->err->add('乱弄', 211);
        } else if (!$detail = K::M('company/company')->detail($company_id)) {
            $this->err->add('乱弄', 212);
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
                           $obj->send($detail['mobile'],'sms_company_tongzhi',array('name'=>$data['cantact'] ? $data['cantact'] : '业主','mobile'=>$data['mobile'],'company'=>$detail['sort_name'])); 
                        }
                        $this->err->add('预约成功！');  
                    }
                } 
            }else{
             
                $this->pagedata['detail'] = $detail;
                $this->tmpl = 'company_yuyue2.html';
            }
            
        }
    }
    
    
    
    
}
