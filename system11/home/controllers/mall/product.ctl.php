<?php
/**
 * Copy Right Anuike.com
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<Anhuike@gmail.com>
 * $Id: product.ctl.php 3240 2014-02-11 07:14:10Z youyi $
 */

class Ctl_Mall_Product extends Ctl
{
    
    public function __construct(&$system)
    {
        parent::__construct($system);
        $uri = $this->request['uri'];
        if(preg_match('/product-([\d\-]+).html/i', $uri, $match)){
            $system->request['act'] = 'index';
            $system->request['args'] = array($match[2]);
        }      
    }

    public function index($page=1)
    {
        $cat_id = $brand_id = $attr_ids = $order = 0;
        $filter = $pager = array();
        $pager['page'] = $page;
        $pager['limit'] = $limit = 20; 
        $pager['count'] = $count = 0;      
        //cat-brand-attrs-order-page
        $uri = $this->request['uri'];
        if(preg_match('/product-(\d+)-(\d+)(-([\d\-]+)?)?-(\d)-(\d+).html/i', $uri, $match)){
            $pager['cat_id'] = $cat_id = $match[1];
            $pager['brand_id'] = $brand_id = $match[2];
            if($attr_ids = trim($match[4], '-')){
                $attr_values = explode('-', $attr_ids);
            }else{
                $attr_values = array('0');
                $attr_id = '0';
            }
            $pager['attr_values'] = $attr_values;
            $pager['attr_ids'] = $attr_ids;
            $pager['order'] = $order = $match[5];
            $pager['page'] = $page = max($match[6], 1);
        }else if(preg_match('/product-(\d+)(-(\d+))?.html/i', $uri, $match)){
            $pager['cat_id'] = $cat_id = $match[1];
            $pager['page'] = $page = max($match[3], 1);
            $pager['attr_values'] = array('0');
            $pager['attr_ids'] = $attr_ids = '0';
        }else{
            $this->error(404);
        }
        if(!$cate = K::M('shop/cate')->cate($cat_id)){
            $this->error(404);
        }
        $top_cate = K::M('shop/cate')->top_cate($cat_id);
        $filter['city_id'] = $this->request['city_id'];
        $filter['cat_id'] = $cat_id;
        if($brand_id){
            $filter['brand_id'] = $brand_id;
        }
        if($attr_values){
            $filter['attrs'] = $attr_values;
        }
        //order {0:默认,1:价格, 2:销量}
        $orderby = null;
        if($order == 1){
            $orderby = array('buys'=>'DESC', 'books'=>'DESC');
        }else if($order == 2){
            $orderby = array('price'=>'ASC');
        }
        $this->pagedata['cate'] = $cate;
        $this->pagedata['top_cate'] = $top_cate;
        $filter['city_id'] = $this->request['city_id'];
        $filter['audit'] = 1;
        $filter['closed'] = 0;
        if($items = K::M('product/product')->items($filter, $orderby, $page, $limit, $count)){
            $pager['count'] = $count;
            $pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink('mall/product', array($cat_id, $brand_id, $attr_ids, $order, '{page}')));
            $shop_ids = array();
            foreach($items as $k=>$v){
                $shop_ids[$v['shop_id']] = $v['shop_id'];
            }
            if($shop_ids){
                $this->pagedata['shop_list'] = K::M('shop/shop')->items_by_ids($shop_ids);
            }
            $this->pagedata['items'] = $items;
        }
        $this->pagedata['pager'] = $pager;
        $this->tmpl = 'mall/product/items.html';
        $seo = array('cate_title'=>$cate['title'], 'cate_seo_title'=>$cate['seo_title'], 'cate_seo_keywords'=>$cate['seo_keywords'], 'cate_seo_description'=>$cate['seo_description']);
        $this->seo->init('mall_product', $seo);
    }

    public function shop($cat_id=0, $page=1)
    {
        if($cat_id = (int)$cat_id){
            if(!$cate = K::M('shop/cate')->cate($cat_id)){
                $this->error(404);
            }
        }
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
        if($items = K::M('shop/shop')->items($filter, null, $page, $limit, $count)){
            $pager['count'] = $count;
            $pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink(null, array($cat_id, '{page}')));
            $this->pagedata['items'] = $items;
        }
        $this->pagedata['pager'] = $pager;
        $this->pagedata['cate'] = $cate;
        $this->pagedata['cate_list'] = K::M('shop/cate')->fetch_all();
        $this->tmpl = 'mall/product/shop.html';
        $seo = array('cate_title'=>$cate['title'], 'cate_seo_title'=>$cate['seo_title'], 'cate_seo_keywords'=>$cate['seo_keywords'], 'cate_seo_description'=>$cate['seo_description']);
        $this->seo->init('mall_shop', $seo);
    }

    public function detail($product_id=null, $page=1)
    {
        if(!$product_id = (int)$product_id){
            $this->error(404);
        }else if(!$detail = K::M('product/product')->detail($product_id, true)){
            $this->error(404);
        }else if(empty($detail['audit'])){
            $this->err->add('商品审核中', 211);
        }else{
            $shop = $this->check_shop($detail['shop_id']);
            $pager = array();
            $pager['page'] = $page = max((int)$page, 1);
            $pager['limit'] = $limit = 10;
            $pager['count'] = $count = 0;
            if($comments = K::M('product/comment')->items(array('product_id'=>$product_id, 'closed'=>0), $page, $limit, $count)){
                $pager['count'] = $count;
                $pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink(null, array($product_id, '{page}')));
                $uids = array();
                foreach($comments as $v){
                    $uids[$v['uid']] = $v['uid'];
                }
                if($uids){
                    $this->pagedata['member_list'] = K::M('member/view')->items_by_ids($uids);
                }
                $this->pagedata['comments'] = $comments;
            }
            $this->pagedata['photo_list'] = K::M('product/photo')->items_by_product($product_id);
            $this->pagedata['detail'] = $detail;
            $this->pagedata['pager'] = $pager;
            $this->tmpl = 'mall/product/detail.html';
            $this->seo->set_shop($shop);
            $seo = array('title'=>$detail['title']);
            $this->seo->init('product', $seo);
            if($seo_title = $detail['seo_title']){
                $this->seo->set_title($seo_title);
            }
            if($seo_description = $detail['seo_description']){
                $this->seo->set_description($seo_description);
            }
            if($seo_keywords = $detail['seo_keywords']){
                $this->seo->set_keywords($seo_keywords);
            }
        }
    }

    public function comment()
    {
        $this->check_login();
        if(!$product_id = $this->GP('product_id')){
            $this->err->add('未定义操作', 211);
        }else if(!$product = K::M('product/product')->detail($product_id, true)){
            $this->err->add('商品不存在或已经删除', 212);
        }else if(empty($product['audit'])){
            $this->err->add('商品还在审核中', 213);
        }else if(!$data = $this->checksubmit('data')){
            $this->err->add('非法的数据提交', 214);
        }else if(!$data = $this->check_fields($data, array('score','content'))){
            $this->err->add('非法的数据提交', 214);
        }else if(($audit = K::M('system/audit')->audit('productComment', $this->MEMBER)) < 0) {
            $this->err->add('很抱歉您所在的用户组没有权限发表商品评论', 201);
        }else {
            $data['product_id'] = $product_id;
            $data['shop_id'] = $product['shop_id'];
            $data['uid'] = $this->uid;
            $data['audit'] = $audit;
            if($comment_id = K::M('product/comment')->create($data)){
                $this->err->add('发表评价成功');
            }
        }
    }

    public function book($product_id=null)
    {
        if(!($product_id = (int)$product_id) && !($product_id = (int)$this->GP('product_id'))){
            $this->error(404);
        }else if(!$product = K::M('product/product')->detail($product_id, true)){
            $this->error(404);
        }else if(empty($product['audit'])){
            $this->err->add('商品审核中', 211);   
        }else{
            $shop = $this->check_shop($product['shop_id']);
            $this->pagedata['product'] = $product;
            if(!$mobile = $this->system->cookie->get('LAST_Mobile')){
                $mobile = $this->MEMBER['mobile'];
            }
            $pager['mobile'] = $mobile;
            if($contact = $this->system->cookie->get('LAST_Contact')){
                $pager['contact'] = $contact;
            }
            $this->pagedata['pager'] = $pager;            
            $this->tmpl = 'view:book/product.html';
        }
    }

}