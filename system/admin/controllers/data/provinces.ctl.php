<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<Anhuike@gmail.com>
 * $Id: city.ctl.php 3159 2014-01-22 01:54:39Z youyi $
 */

class Ctl_Data_Provinces extends Ctl
{
    
    public function index($page=1)
    {
    	$filter = $pager = array();
    	$pager['page'] = max(intval($page), 1);
    	$pager['limit'] = $limit = 50;
       // if($SO = $this->GP('SO')){
         //   $pager['SO'] = $SO;
         //   if($SO['city_id']){$filter['city_id'] = $SO['city_id'];}
          //  if($SO['city_name']){$filter['city_name'] = "LIKE:%".$SO['city_name']."%";}
      //  }
        if($items = K::M('data/provinces')->items($filter, null, $page, $limit, $count)){
        	$pager['count'] = $count;
        	$pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink(null, array('{page}')));
            $this->pagedata['themes'] = K::M('system/theme')->options();
            $this->pagedata['items'] = $items;            
        }
        $this->pagedata['pager'] = $pager;
        $this->tmpl = 'admin:data/provinces/items.html';
    }

    public function so()
    {
        $this->tmpl = 'admin:data/provinces/so.html';
    }

    public function detail($pk)
    {
    	$this->pagedata['detail'] = K::M('data/city')->detail($pk);
    	$this->tmpl = 'admin:data/provinces/detail.html';
    }

    public function create()
    {
        if($this->checksubmit()){
            if(!$data = $this->GP('data')){
                $this->err->add('非法的数据提交', 201);
            }else if($city_id = K::M('data/provinces')->create($data)){
                $this->err->add('修改内容成功');
                $this->err->set_data('forward', '?data/provinces-index.html');
            }
        }else{
            $this->pagedata['themes'] = K::M('system/theme')->options();
            $this->tmpl = 'admin:data/provinces/create.html';
        }
    }

    public function edit($pk=null)
    {
        if($this->checksubmit()){
            if(!$data = $this->GP('data')){
                $this->err->add('非法的数据提交', 201);
            }else if(!$id = $this->GP('id')){
                $this->err->add('未指要修改ID', 202);
            }else if(K::M('data/provinces')->update($id, $data)){
                $this->err->add('修改内容成功');

            }
        }else{
            $this->pagedata['themes'] = K::M('system/theme')->options();
        	$this->pagedata['detail'] = K::M('data/provinces')->detail($pk);
        	$this->tmpl = 'admin:data/provinces/edit.html';
        }
    }

    public function delete($id=null)
    {
        if($id = (int)$id){
            if(K::M('data/provinces')->delete($id)){
                $this->err->add('删除成功');
            }
        }else if($pks = $this->GP('id')){
            if(K::M('data/provinces')->delete($pks)){
                $this->err->add('批量删除成功');
            }
        }else{
            $this->err->add('未指定要删除的内容ID', 401);
        }
    }

}