<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: coupon.ctl.php 3053 2014-01-15 02:00:13Z youyi $
 */

Import::C('ucenter/ucenter');
class Ctl_Ucenter_Shop_Coupon extends Ctl_Ucenter 
{
    protected $_allow_fields = 'area_id,title,photo,money,min_amount,content,stime,ltime';

    public function index($page=1)
    {
        $shop = $this->ucenter_shop();
        $filter = $pager = array();
        $pager['page'] = $page = max((int)$page, 1);
        $pager['limit'] = $limit = 10;
        $pager['count'] = $count = 0;
        $filter = array('shop_id'=>$shop['shop_id'], 'closed'=>0);
        if($items = K::M('shop/coupon')->items($filter, null, $page, $limit, $count)){
        	$pager['count'] = $count;
        	$pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink(null, array('{page}')));
        	$this->pagedata['items'] = $items;
        }
        $this->tmpl = 'ucenter/shop/coupon/index.html';
    }

    public function create()
    {
    	$shop = $this->ucenter_shop();
        if($data = $this->checksubmit('data')){
            if(!$data = $this->check_fields($data, $this->_allow_fields)){
                $this->err->add('非法的数据提交', 211);
            }else if(($audit = K::M('system/audit')->audit('coupon_shop', $this->MEMBER)) < 0){
            	$this->err->add('您没有权限添加优惠券', 212);
            }else{
                if($attach = $_FILES['coupon_photo']){
                    $upload = K::M('magic/upload');
                    if($attach['error'] == UPLOAD_ERR_OK){
                        if($a = $upload->upload($attach, 'shop')){
                            $data['photo'] = $a['photo'];
                        }
                    }
                }
                $data['shop_id'] = $shop['shop_id'];
                $data['city_id'] = $shop['city_id'];
                $data['area_id'] = $shop['area_id'];
                if($coupon_id = K::M('shop/coupon')->create($data)){
                    $this->err->add('添加内容成功');
                    $this->err->set_data('forward', $this->mklink('ucenter/shop/coupon:index'));
                }
            } 
        }else{
           $this->tmpl = 'ucenter/shop/coupon/create.html';
        }    	
    }

    public function edit($coupon_id=null)
    {
    	$shop = $this->ucenter_shop();
        if(!($coupon_id = (int)$coupon_id) && !($coupon_id = (int)$this->GP('coupon_id'))){
            $this->err->add('未指定要修改的内容ID', 211);
        }else if(!$detail = K::M('shop/coupon')->detail($coupon_id)){
            $this->err->add('您要修改的内容不存在或已经删除', 212);
        }else if($data = $this->checksubmit('data')){
            if(!$data = $this->check_fields($data, $this->_allow_fields)){
                $this->err->add('非法的数据提交', 201);
            }else{
                if($attach = $_FILES['coupon_photo']){
                    $upload = K::M('magic/upload');
                    if($attach['error'] == UPLOAD_ERR_OK){
                        if($a = $upload->upload($attach, 'shop')){
                            $data['photo'] = $a['photo'];
                        }
                    }
                }
                if(K::M('shop/coupon')->update($coupon_id, $data)){
                    $this->err->add('修改内容成功');
                }  
            } 
        }else{
            $this->pagedata['detail'] = $detail;
            $this->tmpl = 'ucenter/shop/coupon/edit.html';
        }    	
    }

    public function downloads($page=1)
    {
        $shop = $this->ucenter_shop();
        $filter = $pager = array();
        $pager['page'] = $page = max((int)$page, 1);
        $pager['limit'] = $limit = 10;
        $pager['count'] = $count = 0;
        $filter = array('shop_id'=>$shop['shop_id'], 'closed'=>0);
        if($items = K::M('shop/couponDownload')->items_by_shop($shop['shop_id'], $page, $limit, $count)){
        	$pager['count'] = $count;
        	$pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink(null, array('{page}')));
        	$this->pagedata['items'] = $items;
        }
        $this->pagedata['pager'] = $pager;
        $this->tmpl = 'ucenter/shop/coupon/downloads.html';           	
    }
}