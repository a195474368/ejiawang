<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: site.ctl.php 4054 2014-03-22 06:37:08Z langzhong $
 */

class Ctl_Site extends Ctl 
{
        
    public function items($area_id=0,$page=1)
    {        
        $this->index($area_id, $page);
    }
    
    public function index($area_id=0, $page=1)
    {
        $filter = $pager = array();
    	$pager['page'] = max(intval($page), 1);
    	$pager['limit'] = $limit = 8;
        if($area_id = (int)$area_id){
            $filter['area_id'] = $area_id; 
        }else{
            $filter['city_id'] = $this->request['city_id'];
        }
        $filter['audit'] = 1;
        if($items = K::M('home/site')->items($filter, array('site_id'=>'DESC'), $page, $limit, $count)){
             $company_ids = array();
             foreach($items as $k=>$v){
                if($v['company_id']){
                    $company_ids[$v['company_id']] = $v['company_id'];
                } 
            }        
            if(!empty($company_ids)){
                $this->pagedata['company_list'] = K::M('company/company')->items_by_ids($company_ids);
            }            
        	
        }
        $this->pagedata['pager'] = $pager;
        $this->pagedata['items'] = $items;
        $this->pagedata['area_id'] = $area_id;
         $this->pagedata['nextpage'] = $this->mklink('site:loaddata', array($area_id,'{page}'), array(),false);
        $this->pagedata['area_list'] = K::M('data/area')->areas_by_city($this->request['city_id']);
        $this->pagedata['site_status'] = K::M('home/site')->get_status(); 
        $this->tmpl = 'mobile:site/index.html';
    }

    public function loaddata($area_id=0, $page=1)
    {
        $filter = $pager = array();
    	$pager['page'] = max(intval($page), 1);
    	$pager['limit'] = $limit = 8;
        if($area_id = (int)$area_id){
            $filter['area_id'] = $area_id; 
        }else{
            $filter['city_id'] = $this->request['city_id'];
        }
        $filter['audit'] = 1;
        if($items = K::M('home/site')->items($filter, array('site_id'=>'DESC'), $page, $limit, $count)){
             $company_ids = array();
             foreach($items as $k=>$v){
                if($v['company_id']){
                    $company_ids[$v['company_id']] = $v['company_id'];
                } 
            }        
            if(!empty($company_ids)){
                $this->pagedata['company_list'] = K::M('company/company')->items_by_ids($company_ids);
            }    
            $this->pagedata['pager'] = $pager;
            $this->pagedata['items'] = $items;
            $this->pagedata['area_id'] = $area_id;
            $this->pagedata['area_list'] = K::M('data/area')->areas_by_city($this->request['city_id']);
            $this->pagedata['site_status'] = K::M('home/site')->get_status(); 
            $this->tmpl = 'mobile:site/loaddata.html';
        	
        }else die('0');       
    }

    public function detail($site_id=null)
    {
        if(!($site_id = (int)$site_id) && !($site_id = (int)$this->GP('site_id'))){
            $this->tmpl = 'mobile:error.html';
        }else if(!$detail = K::M('home/site')->detail($site_id)){
            $this->tmpl = 'mobile:error.html';
        }else{
            $this->pagedata['company'] = K::M('company/company')->detail($detail['company_id']);
            $this->pagedata['detail'] = $detail;
            $this->pagedata['site_status'] = K::M('home/site')->get_status();
            
            $pager = array();
            $pager['page'] = max(intval($page), 1);
            $pager['limit'] = $limit = 100;
            $items = K::M('home/notes')->items(array('site_id'=>$site_id), array('status'=>'ASC'), $page, $limit, $count);
            $this->pagedata['site_notes'] =$items;
            $this->pagedata['pager'] = $pager;           
            $this->tmpl = 'mobile:site/detail.html';

        }           
    }
    
     public function yuyue($site_id)
    {
         if(!($site_id = (int)$site_id) && !($site_id = (int)$this->GP('site_id'))){
           $this->tmpl = 'mobile:error.html';
        }else if(!$detail = K::M('home/site')->detail($site_id)){
            $this->tmpl = 'mobile:error.html';
        }else{
            $company = K::M('company/company')->detail($detail['company_id']);
            if($this->checksubmit('data')){
                if(!$data = $this->GP('data')){
                    $this->err->add('非法的数据提交', 201);
                }else{
                    $data['uid'] = (int)$this->uid;
                    $data['company_id'] = $detail['company_id'];
                    $data['content'] = "预约参观工地：".$detail['title'];
                    if($yuyue_id = K::M('company/yuyue')->create($data)){
                        $obj = K::M('sms/sms');
                        $obj->send($data['mobile'],'sms_site_yuyue',array('name'=>$data['cantact'] ? $data['cantact'] : '业主','mobile'=>$data['mobile'],'site'=>$detail['title'],'company'=>$company['sort_name']));
                        if($company['mobile']){
                            $obj->send($company['mobile'],'sms_site_tongzhi',array('name'=>$data['cantact'] ? $data['cantact'] : '业主','mobile'=>$data['mobile'],'site'=>$detail['title'],'company'=>$company['sort_name']));
                        }    
                        $this->err->add('预约参观成功！');  
                    }
                } 
            }else{
                $this->pagedata['company'] = $company;
                $this->pagedata['detail'] = $detail;
                $this->tmpl = 'mobile:site/yuyue.html';
            }
            
        }
    }
    
}