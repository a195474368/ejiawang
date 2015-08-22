<?php
/**
 * Copy Right Anuike.com
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<Anhuike@gmail.com>
 * $Id: news.ctl.php 2772 2014-01-06 02:45:07Z youyi $
 */

Import::C('mall/shop');
class Ctl_Mall_News extends Ctl_Mall_Shop
{
    
    public function index()
    {
        
    }

    public function detail($news_id=null)
    {
        if(!$news_id = (int)$news_id){
            $this->error(404);
        }else if(!$detail = K::M('shop/news')->detail($news_id)){
            $this->error(404);
        }else if(empty($detail['audit'])){
            $this->err->add('内容还在审核中', 211);
        }else{
            $shop = $this->check_shop($detail['shop_id']);
            if($next = K::M('shop/news')->items(array('shop_id'=>$detail['shop_id'], 'news_id'=>'>:'.$news_id), array('news_id'=>'ASC'), 1, 1)){
                $pager['next'] = $next;
            }
            if($next = K::M('shop/news')->items(array('shop_id'=>$detail['shop_id'], 'news_id'=>'<:'.$news_id), array('news_id'=>'DESC'), 1, 1)){
                $pager['next'] = $next;
            }
            $this->pagedata['pager'] = $pager;
            $this->pagedata['detail'] = $detail;
            $this->tmpl = 'shop/newsdetail.html';
            $seo = $this->seo->set_shop($shop);
            $seo['title'] = $detail['title'];
            $this->seo->init('shop_news', $seo);
        }
    }
}