<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: brand.ctl.php 3221 2014-01-27 08:25:47Z youyi $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

class Ctl_Shop_Brand extends Ctl
{
    
    public function index($page=1)
    {
    	$filter = $pager = array();
    	$pager['page'] = max(intval($page), 1);
    	$pager['limit'] = $limit = 50;
        if($SO = $this->GP('SO')){
            $pager['SO'] = $SO;
            if($SO['banner_id']){$filter['banner_id'] = $SO['banner_id'];}
            if($SO['title']){$filter['title'] = "LIKE:%".$SO['title']."%";}
        }
        $filter['closed'] = 0;
        if($items = K::M('shop/brand')->items($filter, null, $page, $limit, $count)){
        	$pager['count'] = $count;
        	$pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink(null, array('{page}')), array('SO'=>$SO));
        }
        $this->pagedata['items'] = $items;
        $this->pagedata['pager'] = $pager;
        $this->tmpl = 'admin:shop/brand/items.html';
    }

    public function so()
    {
        $this->tmpl = 'admin:shop/brand/so.html';
    }

    public function create()
    {
        if($this->checksubmit()){
            if(!$data = $this->GP('data')){
                $this->err->add('非法的数据提交', 201);
            }else{
                if($_FILES['data']){
                    foreach($_FILES['data'] as $k=>$v){
                        foreach($v as $kk=>$vv){
                            $attachs[$kk][$k] = $vv;
                        }
                    }
                    $upload = K::M('magic/upload');
                    foreach($attachs as $k=>$attach){
                        if($attach['error'] == UPLOAD_ERR_OK){
                            if($a = $upload->upload($attach, 'shop')){
                                $data[$k] = $a['photo'];
                            }
                        }
                    }
                }
                if($banner_id = K::M('shop/brand')->create($data)){
                    $this->err->add('添加内容成功');
                    $this->err->set_data('forward', '?shop/brand-index.html');
                }
            } 
        }else{
           $this->tmpl = 'admin:shop/brand/create.html';
        }
    }

    public function edit($banner_id=null)
    {
        if(!($banner_id = (int)$banner_id) && !($banner_id = $this->GP('banner_id'))){
            $this->err->add('未指定要修改的内容ID', 211);
        }else if(!$detail = K::M('shop/brand')->detail($banner_id)){
            $this->err->add('您要修改的内容不存在或已经删除', 212);
        }else if($this->checksubmit('data')){
            if(!$data = $this->GP('data')){
                $this->err->add('非法的数据提交', 201);
            }else{
                if($_FILES['data']){
                    foreach($_FILES['data'] as $k=>$v){
                        foreach($v as $kk=>$vv){
                            $attachs[$kk][$k] = $vv;
                        }
                    }
                    $upload = K::M('magic/upload');
                    foreach($attachs as $k=>$attach){
                        if($attach['error'] == UPLOAD_ERR_OK){
                            if($a = $upload->upload($attach, 'shop')){
                                $data[$k] = $a['photo'];
                            }
                        }
                    }
                }
                if(K::M('shop/brand')->update($banner_id, $data)){
                    $this->err->add('修改内容成功');
                }
            } 
        }else{
        	$this->pagedata['detail'] = $detail;
        	$this->tmpl = 'admin:shop/brand/edit.html';
        }
    }

    public function doaudit($banner_id=null)
    {
        if($banner_id = (int)$banner_id){
            if(K::M('shop/brand')->batch($banner_id, array('audit'=>1))){
                $this->err->add('审核内容成功');
            }
        }else if($ids = $this->GP('banner_id')){
            if(K::M('shop/brand')->batch($ids, array('audit'=>1))){
                $this->err->add('批量审核内容成功');
            }
        }else{
            $this->err->add('未指定要审核的内容', 401);
        }
    }

    public function delete($banner_id=null)
    {
        if($banner_id = (int)$banner_id){
            if(K::M('shop/brand')->delete($banner_id)){
                $this->err->add('删除成功');
            }
        }else if($ids = $this->GP('banner_id')){
            if(K::M('shop/brand')->delete($ids)){
                $this->err->add('批量删除成功');
            }
        }else{
            $this->err->add('未指定要删除的内容ID', 401);
        }
    }

}