<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: look.ctl.php 4417 2014-04-08 09:28:59Z langzhong $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

class Ctl_Tenders_Look extends Ctl
{
    
    public function index($tenders_id,$page=1)
    {
        if(empty($tenders_id)){
            $this->err->add('未指定要修改的内容ID', 211);
        }else if(!$detail = K::M('tenders/tenders')->detail($tenders_id)){
            $this->err->add('您要修改的内容不存在或已经删除', 212);
        }
    	$filter = $pager = array();
    	$pager['page'] = max(intval($page), 1);
    	$pager['limit'] = $limit = 50;
        $companyIds = array();
        $filter['tenders_id'] = $tenders_id;
        if($items = K::M('tenders/look')->items($filter, null, $page, $limit, $count)){
            foreach($items as $k=>$v){
                $companyIds[$v['company_id']] = (int)$v['company_id'];
                $items[$k]['create_ip'] = $v['create_ip'].'('. K::M("misc/location")->location($v['create_ip']) .')';
                $items[$k]['tracking'] = K::M('tenders/tracking')->items(array('look_id'=>$v['look_id']), null, 1, 50, $count2);
                
            }
        }
        $this->pagedata['company_list'] = K::M('company/company')->items_by_ids($companyIds);
        $this->pagedata['items'] = $items;
        $this->pagedata['pager'] = $pager;
        $this->pagedata['tenders'] = $detail;
        $this->pagedata['tenders_id'] = $tenders_id;
        $this->tmpl = 'admin:tenders/look/items.html';
    }

    
    public function update($look_id){
        $look_id = (int)$look_id;
        if($look_id){
           if($look = K::M('tenders/look')->detail($look_id)){
               if($tenders = K::M('tenders/tenders')->detail($look['tenders_id'])){
                    if(K::M('tenders/look')->update($look_id, array('is_signed'=>1))){
                        //edit by shzhrui 
                        K::M('tenders/tenders')->update_sign($look['tenders_id'], $look['company_id']);
                        K::M('company/company')->update_count($look['company_id'],'tenders_num');      
                    $this->err->add('修改内容成功');
                    }else{
                        $this->err->add('未指定要修改的内容ID', 211);
                    } 
               }else{
                    $this->err->add('未指定要修改的内容ID', 211);
               }               
           }else{
                $this->err->add('未指定要修改的内容ID', 211);
           }            
        }else{
             $this->err->add('未指定要修改的内容ID', 211);
        } 
    }



    public function create($tenders_id)
    {   
        if(empty($tenders_id)){
            $this->err->add('未指定要修改的内容ID', 211);
        }else if(!$detail = K::M('tenders/tenders')->detail($tenders_id)){
            $this->err->add('您要修改的内容不存在或已经删除', 212);
        }else{
            if($this->checksubmit()){
                if(!$data = $this->GP('data')){
                    $this->err->add('非法的数据提交', 201);
                }else{
                    if(!$company = K::M('company/company')->detail($data['company_id'])){
                         $this->err->add('请选择正确的装修公司', 201);
                    }else{
               
                        if($gold = $this->GP('gold')){
                           if(!$member = K::M('member/view')->detail($company['uid'])) $this->err->add('该公司不存在有效的金币账户', 201)->response();
                           if($member['gold']<$detail['gold']) $this->err->add('该用户账户余额不足', 201)->response();
                           if(!K::M('member/gold')->update($company['uid'], -$detail['gold'], "看标：".$detail['title'])) $this->err->add('扣费失败', 201)->response();
                        }                       
                        $data['tenders_id'] = $tenders_id;   
                        $data['dateline'] = __TIME;
                        $data['create_ip'] = __IP;
                
                        if($look_id = K::M('tenders/look')->create($data)){
                             if($company['mobile']){
                                $obj = K::M('sms/sms');
                                $obj->send($company['mobile'],'sms_admin_company_tenders',array('name'=>$detail['name'] ? $data['name'] : '业主','mobile'=>$detail['mobile'],'company'=>$company['sort_name'])); 
                             }
                             K::M('tenders/tenders')->update_count($tenders_id,'num2');
                            $this->err->add('添加内容成功');
                            $this->err->set_data('forward', '?tenders/look-index-'.$tenders_id.'.html');
                        }
                    }
                } 
            }else{
                $this->pagedata['tenders_id'] = $tenders_id;
               $this->tmpl = 'admin:tenders/look/create.html';
            }
        }
    }

    
    
    public function tongji(){
         $time = 86400*30;
         $bg_time = __TIME - $time ;
         $end_time = __TIME;
         if($SO = $this->GP('SO')){
             $city_id  = (int)$SO['city_id'];
             $bg_time = (int)(strtotime($SO['bg_time']));
             $end_time = (int)(strtotime($SO['end_time']));
             $company_id = (int)($SO['company_id']);
             if($company_id) $this->pagedata['company'] = K::M('company/company')->detail($company_id);
         }else{
             $SO['bg_time'] = date('Y-m-d',$bg_time);
             $SO['end_time'] = date('Y-m-d',$end_time);
         }
        $items = K::M('tenders/look')->tongji($company_id,$bg_time,$end_time,$company_id);
        
        $this->pagedata['items'] = $items;
        $this->pagedata['SO'] = $SO;
        $this->tmpl = 'admin:tenders/look/tongji.html';
    }
    



}