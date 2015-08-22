<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: youhui.ctl.php 5994 2014-08-02 12:35:30Z youyi $
 */

class Ctl_Youhui extends Ctl 
{
    

    public function index()
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
        }
        $this->pagedata['nextpage'] =  $this->mklink('youhui:loaddata', array('{page}'),array(),false);
        $this->pagedata['items'] = $items;
        $this->pagedata['pager'] = $pager;
        $this->tmpl = 'mobile:youhui/index.html';
    }

   public function loaddata($page)
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
            $this->pagedata['items'] = $items;
            $this->pagedata['pager'] = $pager;
            $this->tmpl = 'mobile:youhui/loaddata.html';
        }else die('0');
    }

    public function detail($youhui_id=null)
    {
        if(!$youhui_id = (int)$youhui_id){
            $this->tmpl = 'mobile:error.html';     
        }else if(!$detail = K::M('company/youhui')->detail($youhui_id)){
             $this->tmpl = 'mobile:error.html';
        }else if(empty($detail['audit'])){
             $this->tmpl = 'mobile:error.html';
        }else{
            if($company_id = (int)$detail['company_id']){
                $this->pagedata['company'] = K::M('company/company')->detail($company_id);
            }
            $this->pagedata['detail'] = $detail;
            $this->tmpl = 'mobile:youhui/detail.html';
        }
    }
    
     public function sign($youhui_id=null){
        $today = date('Y-m-d',__TIME);
        if (!($youhui_id = (int) $youhui_id) && !($youhui_id = (int)$this->GP('youhui_id'))) {
            $this->tmpl = 'mobile:error.html';     
        } else if (!$detail = K::M('company/youhui')->detail($youhui_id)) {
            $this->tmpl = 'mobile:error.html';     
        }elseif(!$detail['audit'] || $detail['end_date'] < $today){
            $this->tmpl = 'mobile:youhui/error.html';     
        }else{
             if($this->checksubmit('data')){
                if(!$data = $this->GP('data')){
                    $this->err->add('非法的数据提交', 201);
                }else{
                    $data['uid'] = (int)$this->uid;
                    $data['youhui_id'] = $youhui_id;
                    $data['company_id'] = $detail['company_id'];
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
                $this->tmpl = 'mobile:youhui/sign.html';
            }
        } 
    }
    
   
}