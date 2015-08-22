<?php

/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<Anhuike@gmail.com>
 * $Id: team.ctl.php 2590 2013-12-28 02:28:31Z langzhong $
 */
Import::C('ucenter/ucenter');

class Ctl_Ucenter_Team extends Ctl_Ucenter {

    public function index($page = 1){
        $this->check_company();
        $filter = $pager = array();
    	$pager['page'] = max(intval($page), 1);
    	$pager['limit'] = $limit = 10;
        $filter['closed'] = 0;
        $filter['company_id'] = $this->company['company_id'];
        if($items = K::M('designer/designer')->items($filter, null, $page, $limit, $count)){
        	$pager['count'] = $count;
        	$pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink(null, array('{page}'),array(),true), array());
        }
        $this->pagedata['items'] = $items;
        $this->pagedata['pager'] = $pager;
        $this->tmpl = 'ucenter/team/index.html';
    }
    
    public function delete($uid=null){
        $this->check_company();
        if(!($uid = (int)$uid) && !($uid = (int)$this->GP('uid'))){
            $this->err->add('未指定要修改的内容ID', 211);
        }else if(!$detail = K::M('designer/designer')->detail($uid)){
            $this->err->add('您要修改的内容不存在或已经删除', 212);
        }elseif($detail['company_id'] != $this->company['company_id']){
            $this->err->add('您无权解雇该童鞋', 212);
        }else{
            if(K::M('designer/designer')->update($uid,array('company_id'=>0),true)){
                $this->err->add('操作成功'); 
            }else{
                 $this->err->add('更新失败', 201); 
            }
        }
    }
    
    public function create(){
        $this->check_company();
       if(!$data = $this->GP('data')){
           $this->err->add('非法的数据提交', 201);
       }elseif(empty($data['username'])||empty($data['password'])){
           $this->err->add('非法的数据提交', 201);
       }else{           
           if(!$member = K::M('member/view')->member($data['username'],'uname')){
                $this->err->add('用户名密码错误1', 201);               
           }elseif($member['passwd'] != md5($data['password'])){
                $this->err->add('用户名密码错误2', 201);          
           }elseif($member['from'] != 'designer'){
                $this->err->add('用户名密码错误3', 201);          
           }elseif(!$designer = K::M('designer/designer')->detail($member['uid'])){
                $this->err->add('用户名密码错误4', 201); 
           }  elseif(!empty($designer['company_id'])) {
               $this->err->add('用户名密码错误5', 201); 
           }else{
               if(K::M('designer/designer')->update($member['uid'],array('company_id'=>  $this->company['company_id']),true)){
                   $this->err->add('操作成功'); 
               }else{
                    $this->err->add('更新失败', 201); 
               }
           }
           
       }        
    }
    
        
}