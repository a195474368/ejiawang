<?php

/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: site.ctl.php 3920 2014-03-17 04:31:14Z youyi $
 */

class Ctl_Site extends Ctl {
    
    public function items($area_id=0,$page=1)
    {        
        $this->index($area_id, $page);
    }
    
    public function index($area_id=0,$page =1)
    {
        $filter = $pager = array();
    	$pager['page'] = max(intval($page), 1);
    	$pager['limit'] = $limit = 15;
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
        	$pager['count'] = $count;
        	$pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink('site:items', array($area_id, '{page}')), array());
        }
        $this->pagedata['pager'] = $pager;
        $this->pagedata['items'] = $items;
        $this->pagedata['area_id'] = $area_id;
        $this->pagedata['area_list'] = K::M('data/area')->areas_by_city($this->request['city_id']);
        $this->pagedata['site_status'] = K::M('home/site')->get_status(); 
        $this->tmpl = 'site.html';
        $this->seo->init('site_items');
    }
    
    public function detail($site_id = null,$page=1)
    {
        if(!($site_id = (int)$site_id) && !($site_id = (int)$this->GP('site_id'))){
            $this->err->add('未指定要修改的内容ID', 211);
        }else if(!$detail = K::M('home/site')->detail($site_id)){
            $this->err->add('您要修改的内容不存在或已经删除', 212);
        }else{
           
            $this->pagedata['company'] = K::M('company/company')->detail($detail['company_id']);
            $this->pagedata['detail'] = $detail;
            $this->pagedata['site_status'] = K::M('home/site')->get_status();
            
            $pager = array();
            $pager['page'] = max(intval($page), 1);
            $pager['limit'] = $limit = 6;
            if($items = K::M('home/notes')->items(array('site_id'=>$site_id), array('status'=>'ASC'), $page, $limit, $count)){
                $pager['count'] = $count;
                $pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink('site:detail', array($site_id, '{page}')), array());
            }
            $this->pagedata['site_notes'] =$items;
            $this->pagedata['pager'] = $pager;
            
            $this->pagedata['sites'] = K::M('home/site')->items(array('audit'=>1,'home_id'=>$detail['home_id']),null,1,4);
            $this->tmpl = 'site_detail.html';
            $this->seo->init('site_detail',array('title'=>$detail['title']));
        }           
    }
    
    public function yuyue($site_id)
    {
         if(!($site_id = (int)$site_id) && !($site_id = (int)$this->GP('site_id'))){
            $this->err->add('没有该内容', 211);
        }else if(!$detail = K::M('home/site')->detail($site_id)){
            $this->err->add('没有该内容', 212);
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
                $this->tmpl = 'site_yuyue.html';
            }
            
        }
    }
    
    
}