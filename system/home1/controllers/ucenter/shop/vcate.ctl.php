<?php
/**
 * Copy Right Anuike.com
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<Anhuike@gmail.com>
 * $Id: vcate.ctl.php 3053 2014-01-15 02:00:13Z youyi $
 */

Import::C('ucenter/ucenter');
class Ctl_Ucenter_Shop_Vcate extends Ctl_Ucenter
{
	public function index()
	{
        $shop = $this->ucenter_shop();
        if($items = K::M('shop/vcate')->items_by_shop($shop['shop_id'])){
            $this->pagedata['items'] = $items;
        }
        $this->tmpl = 'ucenter/shop/vcate/index.html';		
	}

    public function create()
    {
        $shop = $this->ucenter_shop();
        if($data = $this->checksubmit('data')){
            $data['shop_id'] = $shop['shop_id'];
            if(K::M('shop/vcate')->create($data)){
                $this->err->add('添加分类成功');
            }
        }else{
            $this->tmpl = 'ucenter/shop/vcate/create.html';
        }
    }

    public function edit($vcat_id=null)
    {
        $shop = $this->ucenter_shop();
        if(!($vcat_id = (int)$vcat_id) && !($vcat_id = (int)$this->GP('vcat_id'))){
            $this->err->add('未定义操作', 211);
        }else if(!$detail = K::M('shop/vcate')->detail($vcat_id)){
            $this->err->add('分类不存在或已经删除', 212);
        }else if($detail['shop_id'] != $shop['shop_id']){
            $this->err->add('非法的数据提交', 212);
        }else if($data = $this->checksubmit('data')){
            if(K::M('shop/vcate')->update($vcat_id, $data)){
                $this->err->add('修改分类成功');
            }
        }else{
            $this->pagedata['detail'] = $detail;
            $this->tmpl = 'ucenter/shop/vcate/edit.html';
        }        
    }

    public function delete($vcat_id=null)
    {
        $shop = $this->ucenter_shop();
        if(!$vcat_id = (int)$vcat_id){
            $this->err->add('未定义操作', 211);
        }else if(!$detail = K::M('shop/vcate')->detail($vcat_id)){
            $this->err->add('分类不存在或已经删除', 212);
        }else if($detail['shop_id'] != $shop['shop_id']){
            $this->err->add('非法的数据提交', 212);
        }else if(K::M('shop/vcate')->detail($vcat_id)){
            $this->err->add('商铺分类删除成功');
        }
    }	
}