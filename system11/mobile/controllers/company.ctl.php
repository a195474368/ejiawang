<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: company.ctl.php 2335 2013-12-18 17:15:56Z youyi $
 */

class Ctl_Company extends Ctl 
{
    
    public function index($area_id=0, $page=1)
    {       
        $filter = array('closed'=>0, 'audit'=>1);
        $filter['city_id'] = $this->request['city_id'];
        $pager['area_id'] = (int)$area_id;
        $pager['page'] = max((int)$page, 1);
        $pager['kw'] = $this->GP('kw');
        if($area_id){
            $area = K::M('data/area')->area($area_id);
            $pager['area_name'] = $area['area_name'];
        }
        $this->pagedata['pager'] = $pager;
        $this->pagedata['items'] = K::M('company/company')->items($filter, null, 1, 10, $count);
        $this->pagedata['area_list'] = K::M('data/area')->areas_by_city($this->request['city_id']);
        $this->tmpl = "mobile:company/index.html";
    }

    public function loaddata()
    {
        $page = $this->GP('page');
        $pager['page'] = max((int)$page, 1);
        $pager['limit'] = $limit = 10;
        $filter = array('closed'=>0, 'audit'=>1);
        if($area_id = (int)$this->GP('area_id')){
            $filter['area_id'] = $area_id;
        }else{
            $filter['city_id'] = $this->request['city_id'];
        }
        if($kw = $this->GP('kw')){
            if($kw = K::M('content/html')->text($kw)){
                $filter['name'] = "LIKE:%{$kw}%";
            }
        }
        if($items = K::M('company/company')->items($filter, null, $page, $limit, $count)){
            $this->pagedata['items'] = $items;
            if($count > $page*$limit){
                $this->err->set_data('nextpage', $page+1);
            }else{
                $this->err->set_data('nextpage', 0);
            }       
        }else{
            $this->err->set_data('nextpage', 0);
        }
        $this->tmpl = 'mobile:company/loaditems.html';
        $html = $this->output(true);
        $this->err->set_data('html', $html);        
        $this->err->json();
    }

    public function detail($company_id=null)
    {
        if(!$company_id = (int)$company_id){

        }else if(!$detail = K::M('company/company')->detail($company_id, true)){

        }else{
            $filter = array('audit'=>1, 'closed'=>0, 'company_id'=>$company_id);
            $this->pagedata['case_list'] = K::M('case/case')->items($filter, null, 1, 6);
            $this->pagedata['site_list'] = K::M('home/site')->items($filter, null, 1, 6);
            $this->pagedata['youhui_list'] = K::M('company/youhui')->items($filter, null, 1, 6);
            if($uid = $detail['uid']){
                $this->pagedata['member'] = K::M('member/view')->detail($uid);
            }
            $this->pagedata['detail'] = $detail;
            $this->tmpl = 'mobile:company/detail.html';
        }
    }

}