<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: shop.ctl.php 3768 2014-03-12 01:43:40Z youyi $
 */

class Ctl_Mall_Shop extends Ctl 
{
    
    public function __construct(&$system)
    {
        parent::__construct($system);
        $uri = $this->request['uri'];
        if(preg_match('/shop(-index)?-(\d+).html/i', $uri, $match)){
            $system->request['act'] = 'detail';
            $system->request['args'] = array($match[2]);
        }
    }

    public function detail($shop_id=null)
    {
        $shop = $this->check_shop($shop_id);
        $this->tmpl = 'shop/index.html';
        $this->seo->set_shop($shop);
        $this->seo->init('shop');
    }

    public function info($shop_id)
    {
        $shop = $this->check_shop($shop_id);
        $this->tmpl = 'shop/info.html';
        $this->seo->set_shop($shop);
        $this->seo->init('shop');
    }

    public function news($shop_id, $page=1)
    {
        $shop = $this->check_shop($shop_id);
        if($items = K::M('shop/news')->items_by_shop($shop_id, $page, $limit, $count)){
            $pager['count'] = $count;
            $pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink(null, array($shop_id, '{page}')));
            $this->pagedata['items'] = $items;
        }
        $this->tmpl = 'shop/news.html';
        $this->seo->set_shop($shop);
        $this->seo->init('shop');      
    }

    public function coupon($shop_id)
    {
        $shop = $this->check_shop($shop_id);
        $pager = array('count'=>0);
        if($items = K::M('shop/coupon')->items_by_shop($shop_id, 1, 50, $count)){
            $pager['count'] = $count;
            $this->pagedata['items'] = $items;
        }
        $this->pagedata['pager'] = $pager; 
        $this->tmpl = 'shop/coupon.html';
        $this->seo->set_shop($shop);
        $this->seo->init('shop');        
    }

    public function product($shop_id, $vcat_id=0, $page=null)
    {
        $shop = $this->check_shop($shop_id);
        if($page === null){
            $page = $vcat_id;
        }
        $pager['page'] = $page = max((int)$page, 1);
        $pager['vcat_id'] = $vcat_id = (int)$vcat_id;
        $pager['limit'] = $limit = 30;
        $pager['count'] = $count = 0;
        $filter = array('shop_id'=>$shop_id, 'audit'=>1, 'closed'=>0);
        if($vcat_id){
            $filter['vcat_id'] = $vcat_id;
        }
        $filter['closed'] = 0;
        if($items = K::M('product/product')->items($filter, null, $page, $limit, $count)){
            $pager['count'] = $count;
            $pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink(null, array($shop_id, $vcat_id, '{page}')));
            $this->pagedata['items'] = $items;
        }
		$this->pagedata['pager'] = $pager; 
        $this->tmpl = 'shop/product.html';
        $this->seo->set_shop($shop);
        $this->seo->init('shop');
    }

    public function comment($shop_id, $page=1)
    {
        $shop = $this->check_shop($shop_id);
        $pager = $filter = array();
        $pager['page'] = $page = max((int)$page, 1);
        $pager['limit'] = $limit = 10;
        $pager['count'] = $count = 0;
        $filter['shop_id'] = $shop['shop_id'];
        $filter['audit'] = 1;
        $filter['closed'] = 0;
        if($items = K::M('shop/comment')->items($filter, null, $page, $limit, $count)){
            $pager['count'] = $count;
            $pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink(null, '{page}'));
            $uids = array();
            foreach($items as $v){
                $uids[$v['uid']] = $v['uid'];
            }
            if($uids){
                $this->pagedata['member_list'] = K::M('member/view')->items_by_ids($uids);
            }
            $this->pagedata['items'] = $items;
        }
        $this->tmpl = 'shop/comments.html';
        $this->seo->set_shop($shop);
        $this->seo->init('shop');
    }

    public function savecomment($shop_id)
    {
        $shop = $this->check_shop($shop_id);
        if(!$data = $this->checksubmit('data')){
            $this->err->add('非法的数据提交', 214);
        }else if(!$data = $this->check_fields($data, 'score,content')){
            $this->err->add('非法的数据提交', 214);
        }else if(($audit = K::M('system/audit')->audit('shopComment', $this->MEMBER)) < 0) {
            $this->err->add('很抱歉您所在的用户组没有权限发表评论', 201);
        }else {
            $data['shop_id'] = $shop_id;
            $data['uid'] = $this->uid;
            $data['audit'] = $audit;
            if($comment_id = K::M('shop/comment')->create($data)){
                $this->err->add('发表评价成功');
            }
        }
    }

    public function book($shop_id=null)
    {
        if(!($shop_id = (int)$shop_id) && !($shop_id = (int)$this->GP('shop_id'))){
            $this->error(404);
        }else if($data = $this->checksubmit('data')){
            $data['shop_id'] = $shop_id;
            $data['uid'] = (int)$this->uid;
            if(K::M('shop/yuyue')->create($data)){
                $this->err->add('预约成功，稍后商家会与您取得联系');
                $this->system->cookie->set('LAST_Mobile', $data['mobile']);
                $this->system->cookie->set('LAST_Contact', $data['contact']);
            }
        }else{
            $shop = $this->check_shop($product['shop_id']);
            if(!$mobile = $this->system->cookie->get('LAST_Mobile')){
                $mobile = $this->MEMBER['mobile'];
            }
            $pager['mobile'] = $mobile;
            if($contact = $this->system->cookie->get('LAST_Contact')){
                $pager['contact'] = $contact;
            }
            $this->pagedata['pager'] = $pager;
            $this->tmpl = 'view:book/shop.html';
        }        
    }
}