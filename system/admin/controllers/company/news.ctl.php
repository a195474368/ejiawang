<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: news.ctl.php 2034 2013-12-07 03:08:33Z langzhong $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

class Ctl_Company_News extends Ctl
{
    
    public function index($page=1)
    {
    	$filter = $pager = array();
    	$pager['page'] = max(intval($page), 1);
    	$pager['limit'] = $limit = 50;
        if($SO = $this->GP('SO')){
            $pager['SO'] = $SO;
            if($SO['company_id']){$filter['company_id'] = $SO['company_id'];}
if($SO['title']){$filter['title'] = "LIKE:%".$SO['title']."%";}
if($SO['audit']){$filter['audit'] = $SO['audit'];}
        }
        $companyIds = array();
        if($items = K::M('company/news')->items($filter, null, $page, $limit, $count)){
            foreach($items as $k=>$v){
            
               if(!empty($v['company_id']))  $companyIds[$v['company_id']] = $v['company_id'];
                $items[$k]['create_ip'] = $v['create_ip'].'('. K::M("misc/location")->location($v['create_ip']) .')';
            }
        	$pager['count'] = $count;
        	$pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink(null, array('{page}')), array('SO'=>$SO));
        }
        $this->pagedata['company_list'] = K::M('company/company')->items_by_ids($companyIds);
        $this->pagedata['items'] = $items;
        $this->pagedata['pager'] = $pager;
        $this->tmpl = 'admin:company/news/items.html';
    }

    public function so()
    {
        $this->tmpl = 'admin:company/news/so.html';
    }



    public function create()
    {
        if($this->checksubmit()){
            if(!$data = $this->GP('data')){
                $this->err->add('非法的数据提交', 201);
            }else{
                $data['create_ip'] = __IP;
                $data['dateline']  = __TIME;
                if($news_id = K::M('company/news')->create($data)){
                    $this->err->add('添加内容成功');
                    $this->err->set_data('forward', '?company/news-index.html');
                }
            } 
        }else{
           $this->tmpl = 'admin:company/news/create.html';
        }
    }

    public function edit($news_id=null)
    {
        if(!($news_id = (int)$news_id) && !($news_id = $this->GP('news_id'))){
            $this->err->add('未指定要修改的内容ID', 211);
        }else if(!$detail = K::M('company/news')->detail($news_id)){
            $this->err->add('您要修改的内容不存在或已经删除', 212);
        }else if($this->checksubmit('data')){
            if(!$data = $this->GP('data')){
                $this->err->add('非法的数据提交', 201);
            }else{

                if(K::M('company/news')->update($news_id, $data)){
                    $this->err->add('修改内容成功');
                }  
            } 
        }else{
            if($company_id = $detail['company_id']){
                $this->pagedata['company'] = K::M('company/company')->detail($company_id);
            }
        	$this->pagedata['detail'] = $detail;
        	$this->tmpl = 'admin:company/news/edit.html';
        }
    }

    public function delete($news_id=null)
    {
        if($news_id = (int)$news_id){
            if(K::M('company/news')->delete($news_id)){
                $this->err->add('删除成功');
            }
        }else if($ids = $this->GP('news_id')){
            if(K::M('company/news')->delete($ids)){
                $this->err->add('批量删除成功');
            }
        }else{
            $this->err->add('未指定要删除的内容ID', 401);
        }
    }

}