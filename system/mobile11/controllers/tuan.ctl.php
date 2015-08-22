<?php

/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id$
 */


class Ctl_Tuan extends Ctl 
{
    
    public function  index(){
        $filter = $pager = array();
        $pager['page'] = max(intval($page), 1);
        $pager['limit'] = $limit = 10;
        if (($s = $this->GP('s')) && $s !='请输入您要查询的小区名称') {
            $pager['s'] = $s = htmlspecialchars($s);
            $filter['title'] = "LIKE:%" . $s . "%";
        }
        $filter['audit'] = 1;
        $filter['city_id'] = $this->request['city_id'];
        if ($items = K::M('home/tuan')->items($filter, array('tuan_id' => 'desc'), $page, $limit, $count)) {
            $home_ids =  array();
            foreach ($items as $k => $v) {
                if ($v['home_id']) {
                    $home_ids[$v['home_id']] = $v['home_id'];
                }
            }
            if (!empty($home_ids)) {
                $this->pagedata['home_list'] = K::M('home/main')->items_by_ids($home_ids);
            }    
        }
        $this->pagedata['nextpage'] = $this->mklink('tuan:loaddata', array('{page}'), array('s' => $pager['s']),false);
        $this->pagedata['items'] = $items;
        $this->pagedata['pager'] = $pager;
        
       $this->tmpl = 'mobile:tuan/index.html'; 
    }
    
    public function loaddata($page=1){
        $filter = $pager = array();
        $pager['page'] = max(intval($page), 1);
        $pager['limit'] = $limit = 10;
        if ($s = $this->GP('s') && $s !='请输入您要查询的小区名称') {
            $pager['s'] = $s = htmlspecialchars($s);
            $filter['title'] = "LIKE:%" . $s . "%";
        }
        $filter['audit'] = 1;
        $filter['city_id'] = $this->request['city_id'];
        if ($items = K::M('home/tuan')->items($filter, array('tuan_id' => 'desc'), $page, $limit, $count)) {
            $home_ids =  array();
            foreach ($items as $k => $v) {
                if ($v['home_id']) {
                    $home_ids[$v['home_id']] = $v['home_id'];
                }
            }
            if (!empty($home_ids)) {
                $this->pagedata['home_list'] = K::M('home/main')->items_by_ids($home_ids);
            }    
            $this->pagedata['nextpage'] = $this->mklink('tuan:loaddata', array('{page}'), array('s' => $pager['s']),false);
            $this->pagedata['items'] = $items;
            $this->pagedata['pager'] = $pager;
            $this->tmpl = 'mobile:tuan/loaddata.html'; 
            die;
        } else{
             die('0');
        }
    }
    
    public function detail($tuan_id){
        if(!($tuan_id = (int)$tuan_id) && !($tuan_id = (int)$this->GP('tuan_id'))){
           $this->tmpl = 'mobile:error.html';
        }else if(!$detail = K::M('home/tuan')->detail($tuan_id)){
           $this->tmpl = 'mobile:error.html';
        }else{
            $package = K::M('home/package')->items(array('tuan_id'=>$tuan_id));
            $huxingIds = array();
            foreach($package as $v){
               if($v['huxing_id']) $huxingIds[$v['huxing_id']] = $v['huxing_id']; 
            }
            if(!empty($huxingIds)){
                $this->pagedata['huxing'] = K::M('home/pics')->items_by_ids($huxingIds);
            }
            $this->pagedata['tuan'] = $detail;
            $this->pagedata['package'] = $package;
            $this->pagedata['home'] = K::M('home/main')->detail($detail['home_id']);
            $this->pagedata['company'] = K::M('company/company')->detail($detail['company_id']);
            $this->pagedata['signs'] = K::M('home/sign')->items(array('tuan_id'=>$tuan_id), array('sign_id'=>'desc'),1,10);
            K::M('helper/seo')->init('home_tuan_detail', array('title'=>$detail['title'],'company_name'=>$this->pagedata['company']['name']));
            $this->tmpl = 'mobile:tuan/detail.html';
        }
    }
    
    public function join($tuan_id = 0){
        
         if(!($tuan_id = (int)$tuan_id) && !($tuan_id = (int)$this->GP('tuan_id'))){
            $this->tmpl = 'mobile:error.html';
        }else if(!$detail = K::M('home/tuan')->detail($tuan_id)){
            $this->tmpl = 'mobile:error.html';
        }elseif ($this->checksubmit()) {
            if (!$data = $this->GP('data')) {
                $this->err->add('非法的数据提交', 201);
            }
            else {
                $data['uid'] = (int)$this->uid;
                $data['tuan_id'] = $tuan_id;
                if ($sign_id = K::M('home/sign')->create($data)) {
                    K::M('home/tuan')->update_count($tuan_id,'sign_num',1);
                    $obj = K::M('sms/sms');
                    $obj->send($data['mobile'],'sms_home_tuan',array('name'=>$data['cantact'] ? $data['cantact'] : '业主','mobile'=>$data['mobile'],'title'=>$detail['title']));
                    $this->err->add('恭喜您报名成功');
                }else{
                    $this->err->add('更新数据失败', 201);
                }
            }
        }else{
            $package = K::M('home/package')->items(array('tuan_id'=>$tuan_id));
            $this->pagedata['detail'] = $detail;
            $this->pagedata['package'] = $package;
            $this->tmpl = 'mobile:tuan/join.html';
        }      
        
    }
    
    
}