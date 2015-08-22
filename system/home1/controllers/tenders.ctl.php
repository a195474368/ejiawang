<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: tenders.ctl.php 3379 2014-02-20 05:19:04Z langzhong $
 */

class Ctl_Tenders extends Ctl
{
    private  $_tenders_allow_fields ='city_id,area_id,type_id,style_id,budget_id,service_id,house_type_id,way_id,name,mobile,home_name,addr,demand,area';
   
    
    public function index($page=1)
    {   
        $pager = array();
    	$pager['page'] = max(intval($page), 1);
    	$pager['limit'] = $limit = 10;
       
        $filter = array(
           'city_id' => $this->request['city_id'],
           'audit'  => 1
        );
         if($items = K::M('tenders/tenders')->items($filter, null, $page, $limit, $count)){
            $pager['count'] = $count;
        	$pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink(null, array('{page}'),array(),true), array());
        }

        $this->pagedata['tenders'] = $items;
        $this->pagedata['pager'] = $pager;
        $this->pagedata['total_count'] = $count;       
        $this->pagedata['setting'] = K::M('tenders/setting')->fetch_all_setting();
        $this->pagedata['type']  = K::M('tenders/setting')->get_type();
        K::M('helper/seo')->init('tenders', array());
        $this->tmpl = 'tenders.html';
    }
    
    
    public function detail($id){
        
        if(!($id = (int)$id) && !($id = (int)$this->GP('id'))){
            $this->err->add('未指定要修改的内容ID', 211);
        }else if(!$detail = K::M('tenders/tenders')->detail($id)){
            $this->err->add('您要修改的内容不存在或已经删除', 212);
        }elseif(!$detail['audit']){
            $this->err->add('该招标还没有公布不好意思!', 212); 
        }else{
            K::M('tenders/tenders')->update_count($id,'pv_num');
            if($home_id = (int)$detail['home_id']){
                $this->pagedata['home'] = K::M('home/main')->detail($home_id);
            }
            $this->pagedata['cityList'] = K::M("data/city")->fetch_all();
            $this->pagedata['areaList'] = K::M("data/area")->fetch_all();
            $this->pagedata['setting'] = K::M('tenders/setting')->fetch_all_setting();
            $this->pagedata['type']  = K::M('tenders/setting')->get_type();
            $this->pagedata['detail'] = $detail;
            $this->pagedata['look'] = $look = K::M('tenders/look')->items(array('tenders_id'=>$id));
            $company_ids = array();
            foreach($look as $v){
                $company_ids[$v['company_id']] = $v['company_id'];
            }
            if(!empty($company_ids)){
                $this->pagedata['company_list'] = K::M('company/company')->items_by_ids($company_ids);
            }
             K::M('helper/seo')->init('tenders_detail',array(
                 'home_name'    =>$detail['home_name'] ? $detail['home_name']:$this->pagedata['home']['home_name'],
                 'title'        => $detail['title'],
                 'area_name'    => $this->pagedata['areaList'][$detail['area_id']]['area_name']
             ));
            $this->tmpl = 'tenders_detail.html';
        }
    }
    
    public function save(){
         if($data= $this->checksubmit('data')){
            if(!$data = $this->check_fields($data,$this->_tenders_allow_fields)){
                $this->err->add('非法的数据提交', 201);
            }else{
                $data['uid'] = (int)$this->uid;
                $data['create_ip'] = __IP;
                $data['dateline']  = __TIME;
                if($id = K::M('tenders/tenders')->create($data)){
                    $obj = K::M('sms/sms');
                
                    $obj->send($data['mobile'],'sms_tenders',array('name'=>$data['name'] ? $data['name'] : '业主','mobile'=>$data['mobile']));
                    $obj->admin('sms_admin_tenders',array('name'=>$data['name'] ? $data['name'] : '业主','mobile'=>$data['mobile']));
                    K::M('helper/mail')->systemmail('email_tenders',array('name'=>$data['name'] ? $data['name'] : '业主','mobile'=>$data['mobile']));
                
                    $this->err->add('恭喜您发布招标成功！');
                    $this->err->set_data('forward',  $this->mklink('message:index',array('yes'),array(),true));
                }
            } 
        }else{
            $this->err->add('非法的数据提交', 201); 
        }  
    }
    

}