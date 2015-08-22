<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: site.ctl.php 2335 2013-12-18 17:15:56Z youyi $
 */

class Ctl_Site extends Ctl 
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
        $this->tmpl = 'mobile:site/index.html';
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
        if($items = K::M('home/site')->items($filter, null, $page, $limit, $count)){
            $this->pagedata['items'] = $items;
            if($count > $page*$limit){
                $this->err->set_data('nextpage', $page+1);
            }else{
                $this->err->set_data('nextpage', 0);
            }
            $company_ids = $home_ids = array();
            foreach($items as $k=>$v){
                if($v['company_id']){
                    $company_ids[$v['company_id']] = $v['company_id'];
                }
                if($v['home_id']){
                    $home_ids[$v['home_id']] = $v['home_id'];
                }        
            }
            if($company_ids){
                $this->pagedata['company_list'] = K::M('company/company')->items_by_ids($company_ids);
            }
            if($home_ids){
                $this->pagedata['home_list'] = K::M('home/main')->items_by_ids($home_ids);
            }                  
        }else{
            $this->err->set_data('nextpage', 0);
        }
        $this->tmpl = 'mobile:site/loaditems.html';
        $html = $this->output(true);
        $this->err->set_data('html', $html);    
        $this->err->json();     
    }

    public function detail($site_id=null)
    {
        if(!$site_id = (int)$site_id){
            $this->err->add('未定义操作', 211);
        }else if(!$detail = K::M('home/site')->detail($site_id)){
            $this->err->add('工地不存在或已经删除', 212);
        }else{
            if($company_id = $detail['company_id']){
                $this->pagedata['company'] = K::M('company/company')->detail($company_id);
            }
            if($home_id = $detail['home_id']){
                $this->pagedata['home'] = K::M('home/main')->detail($home_id);
            }
            $this->pagedata['status_list'] = K::M('home/site')->get_status();
            $this->pagedata['detail'] = $detail;
            $this->tmpl = 'mobile:site/detail.html';
        }
    }
}