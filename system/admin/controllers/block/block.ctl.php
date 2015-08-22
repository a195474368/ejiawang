<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<Anhuike@gmail.com>
 * $Id: block.ctl.php 2108 2013-12-11 11:21:31Z youyi $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

class Ctl_Block_Block extends Ctl
{
    
    public function index($page=1)
    {
    	$filter = $pager = array();
    	$pager['page'] = $page = max(intval($page), 1);
    	$pager['limit'] = $limit = 50;
        if($items = K::M('block/block')->items($filter, null, $page, $limit)){
        	$pager['count'] = count($items);
            $pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink(null, array('{page}')));
            $this->pagedata['items'] = $items;
            $this->pagedata['page_list'] = K::M('block/page')->fetch_all();           
        }
        $this->pagedata['from_list'] = K::M('block/block')->from_list();
        $this->pagedata['pager'] = $pager;
        $this->tmpl = 'admin:block/block/items.html';
    }

    public function so()
    {
        $this->tmpl = 'admin:block/block/so.html';
    }

    public function detail($block_id, $page=1)
    {
        if(!$block_id = (int)$block_id){
            $this->err->add('未定要管理的推荐位ID', 211);
        }else if(!$block = K::M('block/block')->detail($block_id)){
            $this->err->add('推荐位不存在或已经删除', 212);
        }else{
            $pager['page'] = $page = max(intval($page), 1);
            $pager['limit'] = $limit = 50;            
            $this->pagedata['block'] = $block;
        	if($items = K::M('block/item')->items_by_block($block_id, $page, $limit, $count)){
                $pager['count'] = $count;
                $pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink(null, array($block_id,'{page}')));
                $this->pagedata['items'] = $items;
            }
        	$this->tmpl = 'admin:block/block/detail.html';
        }
    }

    public function create()
    {
        if($this->checksubmit()){
            if(!$data = $this->GP('data')){
                $this->err->add('非法的数据提交', 201);
            }else{

                if($block_id = K::M('block/block')->create($data)){
                    $this->err->add('添加内容成功');
                    $this->err->set_data('forward', '?block/block-index.html');
                }
            } 
        }else{
           $this->tmpl = 'admin:block/block/create.html';
        }
    }

    public function edit($pk=null)
    {
        if($this->checksubmit()){
            if(!$data = $this->GP('data')){
                $this->err->add('非法的数据提交', 201);
            }else if(!$block_id = $this->GP('block_id')){
                $this->err->add('未指要修改ID', 202);
            }else{
                if(K::M('block/block')->update($block_id, $data)){
                    $this->err->add('修改内容成功');
                }  
            } 
        }else{
        	$this->pagedata['detail'] = K::M('block/block')->detail($pk);
        	$this->tmpl = 'admin:block/block/edit.html';
        }
    }

    public function delete($pk=null)
    {
        if(!empty($pk)){
            if(K::M('block/block')->delete($pk)){
                $this->err->add('删除成功');
            }
        }else if($pks = $this->GP('block_id')){
            if(K::M('block/block')->delete($pks)){
                $this->err->add('批量删除成功');
            }
        }else{
            $this->err->add('未指定要删除的内容ID', 401);
        }
    }

}