<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: article.ctl.php 2335 2013-12-18 17:15:56Z youyi $
 */

class Ctl_Article extends Ctl 
{
	
	public function index()
	{
		$this->pagedata['tree'] = K::M('article/cate')->tree('article');
		$this->tmpl = 'mobile:article/index.html';
	}

	public function items($cat_id, $page=1)
	{
		if(!$cat_id = (int)$cat_id){
			$this->error(404);
		}else if(!$cate = K::M('article/cate')->cate($cat_id)){
			$this->error(404);
		}else{
			$pager = array();
			$pager['limit'] = $limit = 10;
			$pager['page'] = $page = max((int)$page, 1);
			if($page > 1){
				$pager['prevpage'] = $page - 1;
			}
			$pager['count'] = $count = 0;
			$pager['pagecount'] = $pager['pagenext'] = 0;
			$filter = array('hidden'=>0, 'audit'=>1, 'closed'=>0);
			$filter['cat_id'] = $cat_ids = K::M('article/cate')->children_ids($cat_id);
			if($items = K::M('article/view')->items($filter, null, $page, $limit, $count)){
				$pager['count'] = $count;
				$pager['pagecount'] = ceil($count/$limit);
				if(($page+1) <= $pager['pagecount']){
					$pager['nextpage'] = $page+1;
				}
			}
			$this->pagedata['cate'] = $cate;
			$this->pagedata['items'] = $items;
			$this->pagedata['pager'] = $pager;
			$this->tmpl = 'mobile:article/items.html';
		}
	}

	public function detail($article_id)
	{
		if(!$article_id = (int)$article_id){
			$this->error(404);
		}else if(!$detail = K::M('article/view')->detail($article_id, true)){
			$this->error(404);
		}else if(empty($detail['audit'])){
			$this->err->add('该文章还在审核中', 211);
		}else{
			$this->pagedata['cate'] = K::M('article/cate')->cate($detail['cat_id']);
			$this->pagedata['detail'] = $detail;
			$this->tmpl = 'mobile:article/detail.html';
		}
	}
}