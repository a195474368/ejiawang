<?php

/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id$
 */
class Ctl_Shop extends Ctl {
    
    
    public function items($cat_id=0, $page=1){
        $this->index($cat_id,$page);
    }
    
    public function index($cat_id=0, $page=1)
    {

        if(($cat_id = (int)$cat_id)&& !$cate = K::M('shop/cate')->cate($cat_id)){
             $this->tmpl = 'mobile:error.html';
        }else{
            $pager = $filter = array();
            $filter = array('audit'=>1, 'closed'=>0, 'city_id'=>$this->request['city_id']);
            if($cat_id = (int)$cat_id){
                $filter['cat_id'] = $cat_id;
            }
            $pager['page'] = max((int)$page, 1);
            $pager['limit'] = $limit = 10;
            $pager['cat_id'] = $cat_id;
            $filter['audit'] = 1;
            $filter['closed'] = 0;
            if($items = K::M('shop/shop')->items($filter, array('is_vip'=>'desc','orderby'=>'ASC','shop_id'=>'desc'), $page, $limit, $count)){
                $shopids = array();
                foreach($items  as $val){
                    $shopids[$val['shop_id']] = $val['shop_id'];
                }
                $this->pagedata['shopex'] = K::M('shop/fields')->items_by_ids($shopids);
                $pager['count'] = $count;
                $pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink('shop:items', array($cat_id, '{page}'),array(),false));
                $this->pagedata['items'] = $items;
            }
            $this->pagedata['pager'] = $pager;
            $this->pagedata['cate'] = $cate;
            $this->pagedata['nextpage'] = $this->mklink('shop:loaddata', array($cat_id, '{page}'),array(),false);
            $this->pagedata['cate_list'] = K::M('shop/cate')->fetch_all();
            $this->tmpl = 'mobile:shop/index.html';
        }
    }
    public function loaddata($cat_id=0, $page=1){
        if(($cat_id = (int)$cat_id)&& !$cate = K::M('shop/cate')->cate($cat_id)){
             $this->tmpl = 'mobile:error.html';
        }else{
            $pager = $filter = array();
            $filter = array('audit'=>1, 'closed'=>0, 'city_id'=>$this->request['city_id']);
            if($cat_id = (int)$cat_id){
                $filter['cat_id'] = $cat_id;
            }
            $pager['page'] = max((int)$page, 1);
            $pager['limit'] = $limit = 10;
            $pager['cat_id'] = $cat_id;
            $filter['audit'] = 1;
            $filter['closed'] = 0;
            if($items = K::M('shop/shop')->items($filter, array('is_vip'=>'desc','orderby'=>'ASC','shop_id'=>'desc'), $page, $limit, $count)){
                $shopids = array();
                foreach($items  as $val){
                    $shopids[$val['shop_id']] = $val['shop_id'];
                }
                $this->pagedata['shopex'] = K::M('shop/fields')->items_by_ids($shopids);
                $this->pagedata['items'] = $items;
                $this->pagedata['cate_list'] = K::M('shop/cate')->fetch_all();
                $this->tmpl = 'mobile:shop/loaddata.html';
            }else{
                die('0');
            }
        }
    }
    
    
    public function detail($shop_id = null){
        if(!($shop_id = (int)$shop_id) && !($shop_id = (int)$this->GP('shop_id'))){
            $this->tmpl = 'mobile:error.html';
        }else if(!$detail = K::M('shop/shop')->detail($shop_id)){
            $this->tmpl = 'mobile:error.html';
        }else{
            K::M('shop/shop')->update_count($shop_id,'views');
            $filter = array('shop_id'=>$shop['shop_id'], 'closed'=>0,'audit'=>1);
            $items = K::M('shop/coupon')->items($filter, array('coupon_id'=>'desc'), 1, 4);
            $this->pagedata['coupon'] = $items;
            $this->pagedata['shop'] = $detail;
            $this->tmpl = 'mobile:shop/detail.html';
        }       
    }
    
    
    public function coupon($coupon_id = null){
        if(!$coupon_id = (int)$coupon_id){
            $this->tmpl = 'mobile:error.html';
        }else if(!$detail = K::M('shop/coupon')->detail($coupon_id)){
            $this->tmpl = 'mobile:error.html';
        }else if(empty($detail['audit'])){
             $this->tmpl = 'mobile:error.html';
        }else if(!$shop = K::M('shop/shop')->detail($detail['shop_id'])){
            $this->tmpl = 'mobile:error.html';
        }else{
             $this->pagedata['detail'] = $detail;
             $this->pagedata['shop'] = $shop;
             $this->tmpl = 'mobile:shop/coupon.html';
        }
    }
    
     public function downloads($coupon_id=null)
    {
        if(!($coupon_id = (int)$coupon_id) && !($coupon_id = (int)$this->GP('coupon_id'))){
             $this->tmpl = 'mobile:error.html';
        }else if(!$coupon = K::M('shop/coupon')->detail($coupon_id)){
             $this->tmpl = 'mobile:error.html';
        }else if(empty($coupon['audit'])){
             $this->tmpl = 'mobile:error.html';
        }else if(!$shop = K::M('shop/shop')->detail($coupon['shop_id'])){
            $this->tmpl = 'mobile:error.html';
        }else if($data = $this->checksubmit('data')){
            if(K::M('shop/coupon')->download($coupon_id, $data['mobile'], $data['contact'])){              
                $this->system->cookie->set('LAST_Mobile', $data['mobile']);
                $this->system->cookie->set('LAST_Contact', $data['contact']);
                $this->err->add('优惠券下载成功，短息会在2分钟内到达');
            }
        }else{
     
            if(!$mobile = $this->system->cookie->get('LAST_Mobile')){
                $mobile = $this->MEMBER['mobile'];
            }
            $pager['mobile'] = $mobile;
            if($contact = $this->system->cookie->get('LAST_Contact')){
                $pager['contact'] = $contact;
            }
            $this->pagedata['pager'] = $pager;
            $this->pagedata['coupon'] = $coupon;
            $this->tmpl = 'mobile:shop/download.html';
        }
    }
    
}