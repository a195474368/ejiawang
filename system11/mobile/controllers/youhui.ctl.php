<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: youhui.ctl.php 2335 2013-12-18 17:15:56Z youyi $
 */

class Ctl_Youhui extends Ctl 
{
    
    public function index($area_id=0, $page=1)
    {
        $pager['area_id'] = (int)$area_id;
        $pager['page'] = max((int)$page, 1);
        $pager['kw'] = $this->GP('kw');
        if($area_id){
            $area = K::M('data/area')->area($area_id);
            $pager['area_name'] = $area['area_name'];
        }
        $this->pagedata['pager'] = $pager;
        $this->pagedata['area_list'] = K::M('data/area')->areas_by_city($this->request['city_id']);
        $this->tmpl = 'mobile:youhui/index.html';
    }

   public function loaddata()
    {
        $page = $this->GP('page');
        $pager['page'] = max((int)$page, 1);
        $pager['limit'] = $limit = 10;
        $filter = array('audit'=>1);
        if($company_id = (int)$this->GP('company_id')){
            $filter['company_id'] = $company_id;
        }else{
            if($area_id = (int)$this->GP('area_id')){
                $filter['area_id'] = $area_id;
            }else{
                $filter['city_id'] = $this->request['city_id'];
            }
            if($kw = $this->GP('kw')){
                if($kw = K::M('content/html')->text($kw)){
                    $filter['title'] = "LIKE:%{$kw}%";
                }
            }
        }
        if($items = K::M('company/youhui')->items($filter, null, $page, $limit, $count)){
            $this->pagedata['items'] = $items;
            if($count > $page*$limit){
                $this->err->set_data('nextpage', $page+1);
            }else{
                $this->err->set_data('nextpage', 0);
            }
            $company_ids = array();
            foreach($items as $k=>$v){
                if($v['company_id']){
                    $company_ids[$v['company_id']] = $v['company_id'];
                }      
            }
            if($company_ids){
                $this->pagedata['company_list'] = K::M('company/company')->items_by_ids($company_ids);
            }                   
        }else{
            $this->err->set_data('nextpage', 0);
        }
        $this->tmpl = 'mobile:youhui/loaditems.html';
        $html = $this->output(true);
        $this->err->set_data('html', $html);   
        $this->err->json();
    }

    public function detail($youhui_id=null)
    {
        if(!$youhui_id = (int)$youhui_id){

        }else if(!$detail = K::M('company/youhui')->detail($youhui_id)){

        }else if(empty($detail['audit'])){

        }else{
            if($company_id = (int)$detail['company_id']){
                $this->pagedata['company'] = K::M('company/company')->detail($company_id);
            }
            $this->pagedata['detail'] = $detail;
            $this->tmpl = 'mobile:youhui/detail.html';
        }
    }
   
}