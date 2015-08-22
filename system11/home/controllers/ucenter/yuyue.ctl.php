<?php

/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: yuyue.ctl.php 2335 2013-12-18 17:15:56Z youyi $
 */


Import::C('ucenter/ucenter');

class Ctl_Ucenter_Yuyue extends Ctl_Ucenter {
    
    public function index($page=1) {
         $this->check_company();
        $filter = $pager = array();
    	$pager['page'] = max(intval($page), 1);
    	$pager['limit'] = $limit = 20;
        $filter['company_id'] = $this->company['company_id'];
        if($items = K::M('company/yuyue')->items($filter, null, $page, $limit, $count)){
        	$pager['count'] = $count;
        	$pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink(null, array('{page}')), array());
        }

        $this->pagedata['items'] = $items;
        $this->pagedata['pager'] = $pager;
        $this->tmpl = 'ucenter/yuyue/index.html';
    }
    
    public function designer($page=1){
        $this->check_company();
        $filter = $pager = array();
    	$pager['page'] = max(intval($page), 1);
    	$pager['limit'] = $limit = 20;
        $filter['company_id'] = $this->company['company_id'];
        if($items = K::M('designer/yuyue')->items($filter, null, $page, $limit, $count)){
            foreach($items as $k=>$v){
                if($v['designer_id']){
                    $designer_ids[$v['designer_id']] = $v['designer_id'];
                }   
            }         
            if(!empty($designer_ids)){
                $this->pagedata['designer_list'] = K::M('designer/designer')->items_by_ids($designer_ids);
            }
            $pager['count'] = $count;
            $pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink(null, array('{page}')), array());
        }

        $this->pagedata['items'] = $items;
        $this->pagedata['pager'] = $pager;
        $this->tmpl = 'ucenter/yuyue/designer.html';
    }
     public function designer2($page=1){
        $this->check_designer();
        $filter = $pager = array();
    	$pager['page'] = max(intval($page), 1);
    	$pager['limit'] = $limit = 20;
        $filter['designer_id'] = $this->uid;
        if($items = K::M('designer/yuyue')->items($filter, null, $page, $limit, $count)){          
            $pager['count'] = $count;
            $pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink(null, array('{page}')), array('SO'=>$SO));
        }
        $this->pagedata['items'] = $items;
        $this->pagedata['pager'] = $pager;
        $this->tmpl = 'ucenter/yuyue/designer2.html';
    }
    
    
}