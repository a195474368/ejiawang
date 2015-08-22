<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: case.ctl.php 2904 2014-01-08 07:07:00Z youyi $
 */

class Ctl_Case extends Ctl 
{
    
    public function index($value_id=0, $page=1)
    {
        $pager['attr_value_id'] = (int)$value_id;
        $pager['page'] = max((int)$page, 1);
        $pager['kw'] = $this->GP('kw');
        $this->pagedata['pager'] = $pager;
        $this->tmpl = 'mobile:case/index.html';
    }

    public function loaddata()
    {
        $page = $this->GP('page');
        $pager['page'] = max((int)$page, 1);
        $pager['limit'] = $limit = 10;
        $filter = array('closed'=>0, 'audit'=>1);
        if($company_id = (int)$this->GP('company_id')){
            $filter['company_id'] = $company_id;
        }else{
            if($attr_value_id = (int)$this->GP('attr_value_id')){
                $filter['attrs'] = $attr_value_id;
            }
            if($kw = $this->GP('kw')){
                if($kw = K::M('content/html')->text($kw)){
                    $filter['title'] = "LIKE:%{$kw}%";
                }
            }           
            $filter['city_id'] = $this->request['city_id'];
        }
        if($items = K::M('case/case')->items($filter, null, $page, $limit, $count)){
            $this->pagedata['items'] = $items;
            if($count > $page*$limit){
                $this->err->set_data('nextpage', $page+1);
            }else{
                $this->err->set_data('nextpage', 0);
            }
        }else{
            $this->err->set_data('nextpage', 0);
        }
        $this->tmpl = 'mobile:case/loaditems.html';
        $html = $this->output(true);
        $this->err->set_data('html', $html);
        $this->err->json();
    }

    public function company($company_id=null)
    {
        if(!$company_id = (int)$company_id){
            $this->err->add('未定义操作', 211);
        }else if(!$company = K::M('company/company')->detail($company_id, true)){
            $this->err->add('装修公司不存在或已经删除', 212);
        }else{
            $this->pagedata['company'] = $company;
            $this->tmpl = 'mobile:company/case.html';
        }
    }

    public function attrs()
    {
        $this->pagedata['case_attrs'] = K::M('data/attr')->attrs_by_from('zx:case');
        $this->tmpl = 'mobile:case/attrs.html';
    }

    public function detail($case_id=null)
    {
        if(!$case_id = (int)$case_id){
            $this->err->add('未定义操作', 211);
        }else if(!$detail = K::M('case/case')->detail($case_id, true)){
            $this->err->add('你查看的案例不存在或已经删除', 212);
        }else{
            if($photo_list = K::M('case/photo')->items_by_case($case_id)){
                $pager['count'] = count($photo_list);
                $this->pagedata['photo_list'] = $photo_list;
            }
            if($company_id = $detail['company_id']){
                $this->pagedata['company'] = K::M('company/company')->detail($company_id);
            }
            $pager['prev'] = K::M('case/case')->up_detail($case_id);
            $pager['next'] = K::M('case/case')->next_detail($case_id);
            $this->pagedata['pager'] = $pager;
            $this->pagedata['detail'] = $detail;
            $this->tmpl = 'mobile:case/detail.html';
        }
    }   
}