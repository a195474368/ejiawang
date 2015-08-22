<?php
/**
 * Copy Right Anuike.com
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<Anhuike@gmail.com>
 * $Id: yuyue.ctl.php 3053 2014-01-15 02:00:13Z youyi $
 */

Import::C('ucenter/ucenter');
class Ctl_Ucenter_Shop_Yuyue extends Ctl_Ucenter
{   
    
	public function index($page=1)
	{
		$shop = $this->ucenter_shop();
		$pager['page'] = max((int)$page, 1);
		$pager['limit'] = $limit = 20;
		$pager['count'] = $count = 0;
		if($items = K::M('shop/yuyue')->items_by_shop($shop['shop_id'], $page, $limit, $count)){
			$pager['count'] = $count;
			$pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink(null, '{page}'));
			$uids = $product_ids = array();
			foreach($items as $k=>$v){
				$uids[$v['uid']] = $v['uid'];
				$product_ids['product_id'] = $v['product_id'];
			}
			if($uids){
				$this->pagedata['member_list'] = K::M('member/view')->items_by_ids($uids);
			}
			if($product_ids){
				$this->pagedata['product_list'] = K::M('product/product')->items_by_ids($product_ids);
			}
			$this->pagedata['items'] = $items;
		}

		$this->tmpl = 'ucenter/shop/yuyue/index.html';
	}

	public function detail($yuyue_id=null)
	{
		if(!$yuyue_id = (int)$yuyue_id){
			$this->error(404);
		}else if(!$detail = K::M('shop/yuyue')->detail($yuyue_id)){
			$this->err->add('预约不存在或已经删除', 211);
		}else if(!$detail['shop_id'] != $shop['shop_id']){
			$this->err->add('您没有权限查看该预约', 212);
		}else{
			if($uid = $detail['uid']){
				$this->pagedata['member'] = K::M('member/view')->detail($uid);
			}
			if($product_id = $detail['product_id']){
				$this->pagedata['product'] = K::M('product/product')->detail($product_id);
			}
			$this->pagedata['detail'] = $detail;
			$this->tmpl = 'ucenter/shop/yuyue/detail.html';
		}
	}
}