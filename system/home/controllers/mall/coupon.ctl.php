<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: coupon.ctl.php 2665 2013-12-31 11:16:43Z youyi $
 */

class Ctl_Mall_Coupon extends Ctl 
{
    
    public function __construct(&$system)
    {
        parent::__construct($system);
        $uri = $this->request['uri'];
        if(preg_match('/coupon-(\d+)(-(\d+))?.html/i', $uri, $match)){
            $system->request['act'] = 'index';
            $system->request['args'] = array($match[1], $match[3]);
        }
    }

    public function index($city_id=0, $page=0)
    {
        $pager = $filter = array();
        if(empty($page)){
            $page = max((int)$city_id, 1);
            $city_id = 0;
        }
        $pager['city_id'] = $city_id;
        $pager['page'] = $page;
        $pager['limit'] = $limit = 15;
        $pager['count'] = $count = 0;
        if($city_id){
            $filter['city_id'] = $city_id;
        }
        $filter['audit'] = 1;
        $filter['closed'] = 0;
        if($items = K::M('shop/coupon')->items($filter, null, $page, $limit, $count)){
            $pager['count'] = $count;
            $pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink('mall/coupon', array($city_id, '{page}')));
            foreach($items as $k=>$v){
                $shop_ids[$v['shop_id']] = $v['shop_id'];
            }
            if($shop_ids){
                $this->pagedata['shop_list'] = K::M('shop/shop')->items_by_ids($shop_ids);
            }
            $this->pagedata['items'] = $items;
        }
        $this->pagedata['city_list'] = K::M('data/city')->fetch_all();
        $this->pagedata['pager'] = $pager;
        $this->tmpl = 'mall/coupon/index.html';
        $seo['title'] = $detail['title'];
        $this->seo->init('coupon');
    }

    public function detail($coupon_id=null)
    {
        if(!$coupon_id = (int)$coupon_id){
            $this->error(404);
        }else if(!$detail = K::M('shop/coupon')->detail($coupon_id)){
            $this->error(404);
        }else if(empty($detail['audit'])){
            $this->err->add('商品审核中', 211);
        }else{
            $shop = $this->check_shop($detail['shop_id']);
            $this->pagedata['detail'] = $detail;
            $this->tmpl = 'mall/coupon/detail.html';
            $this->seo->set_shop($shop);
            $seo['title'] = $detail['title'];
            $this->seo->init('coupon_detail', $seo);
        }
    }

    public function download($coupon_id=null)
    {
        if(!($coupon_id = (int)$coupon_id) && !($coupon_id = (int)$this->GP('coupon_id'))){
            $this->error(404);
        }else if(!$coupon = K::M('shop/coupon')->detail($coupon_id)){
            $this->error(404);
        }else if(empty($coupon['audit'])){
            $this->err->add('优惠券审核中', 211);
        }else if($data = $this->checksubmit('data')){
            $shop = $this->check_shop($coupon['shop_id']);
            if(K::M('shop/coupon')->download($coupon_id, $data['mobile'], $data['contact'])){
                $this->err->add('优惠券下载成功，短息会在2分钟内到达');
                $this->system->cookie->set('LAST_Mobile', $data['mobile']);
                $this->system->cookie->set('LAST_Contact', $data['contact']);
            }
        }else{
            $shop = $this->check_shop($coupon['shop_id']);
            if(!$mobile = $this->system->cookie->get('LAST_Mobile')){
                $mobile = $this->MEMBER['mobile'];
            }
            $pager['mobile'] = $mobile;
            if($contact = $this->system->cookie->get('LAST_Contact')){
                $pager['contact'] = $contact;
            }
            $this->pagedata['pager'] = $pager;
            $this->pagedata['coupon'] = $coupon;
            $this->tmpl = 'view:coupon/download.html';
        }
    }
}