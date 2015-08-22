<?php
/**
 * Copy Right Anuike.com
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<Anhuike@gmail.com>
 * $Id: news.ctl.php 3053 2014-01-15 02:00:13Z youyi $
 */

Import::C('ucenter/ucenter');
class Ctl_Ucenter_Shop_News extends Ctl_Ucenter
{
    protected $_allow_fields = 'from,title,content';

    public function index($page=1)
    {
        $shop = $this->ucenter_shop();
        $pager = $filter = array();
        $pager['page'] = $page = max((int)$page, 1);
        $pager['limit'] = $limit = 20;
        $pager['count'] = $count = 0;
        $filter = array('shop_id'=>$shop['shop_id'], 'closed'=>0);
        if($items = K::M('shop/news')->items($filter, null, $page, $limit, $count)){
            $pgaer['count'] = $count;
            $pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink(null, array('{page}')));
            $this->pagedata['items'] = $items;
        }
        $this->pagedata['pager'] = $pager;
        $this->tmpl = 'ucenter/shop/news/index.html';
    }

    public function create()
    {
        $shop = $this->ucenter_shop();
        if($data = $this->checksubmit('data')){
            if(!$data = $this->check_fields($data, $this->_allow_fields)){
                $this->err->add('非法的数据提交', 211);
            }else if(($audit = K::M('system/audit')->audit('news_shop', $this->MEMBER)) < 0){
                $this->err->add('您没有权限发布活动资讯', 212);
            }else{
                $data['shop_id'] = $shop['shop_id'];
                $data['audit'] = $audit;
                if($news_id = K::M('shop/news')->create($data)){
                    $this->err->add('添加内容成功');
                    $this->err->set_data('forward', $this->mklink('ucenter/shop/news:index'));
                }
            } 
        }else{
           $this->tmpl = 'ucenter/shop/news/create.html';
        }
    }

    public function edit($news_id=null)
    {
        $shop = $this->ucenter_shop();
        if(!($news_id = (int)$news_id) && !($news_id = (int)$this->GP('news_id'))){
            $this->err->add('未定义操作', 211);
        }else if(!$detail = K::M('shop/news')->detail($news_id)){
            $this->err->add('您要修改的内容不存在或已经删除', 212);
        }else if($shop['shop_id'] != $detail['shop_id']){
             $this->err->add('您没有权限修改该内容', 213);
        }else if($data = $this->checksubmit('data')){
            if(!$data = $this->check_fields($data, $this->_allow_fields)){
                $this->err->add('非法的数据提交', 201);
            }else if(K::M('shop/news')->update($news_id, $data)){
                $this->err->add('修改内容成功');
            } 
        }else{
            $this->pagedata['detail'] = $detail;
            $this->tmpl = 'ucenter/shop/news/edit.html';
        }
    }

    public function delete($news_id=null)
    {
        $shop = $this->ucenter_shop();
        if(!$news_id = (int)$news_id){
            $this->err->add('未定义操作', 211);
        }else if(!$news = K::M('shop/news')->detail($news_id)){
            $this->err->add('内容不存在或已经删除', 212);
        }else if($shop['shop_id'] != $news['shop_id']){
             $this->err->add('您没有权限修改该内容', 213);
        }else if(K::M('shop/news')->delete($news_id)){
            $this->err->add('删除内容成功');
        }
    }
}