<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: comment.ctl.php 3053 2014-01-15 02:00:13Z youyi $
 */

Import::C('ucenter/ucenter');
class Ctl_Ucenter_Product_Comment extends Ctl_Ucenter 
{
    
    public function index($page=1)
    {
        $shop = $this->ucenter_shop();
        $pager['page'] = $page = max((int)$page, 1);
        $pager['limit'] = $limit = 20;
        $pager['count'] = $count = 0;
        $filter = array('shop_id'=>$shop['shop_id'], 'closed'=>0);
        if($items = K::M('product/comment')->items($filter, null, $page, $limit, $count)){
            $pager['count'] = $count;
            $pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink(null, array('{page}')));
            $uids = $product_ids = array();
            foreach($items as $k=>$v){
                $uids[$v['uid']] = $v['uid'];
                $product_ids[$v['product_id']] = $v['product_id'];
            }
            if($uids){
                $this->pagedata['member_list'] = K::M('member/view')->items_by_ids($uids);
            }
            if($product_ids){
                $this->pagedata['product_list'] = K::M('product/product')->items_by_ids($product_ids);
            }
            $this->pagedata['items'] = $items;
        }
        $this->pagedata['pager'] = $pager;
        $this->tmpl = 'ucenter/product/comment/index.html';
    }

    public function reply($comment_id=null)
    {
        $shop = $this->ucenter_shop();
        if(!($comment_id = (int)$comment_id) && !($comment_id = (int)$this->GP('comment_id'))){
            $this->err->add('未定义操作', 211);
        }else if(!$comment = K::M('product/comment')->detail($comment_id)){
            $this->err->add('评论不存在或已经删除', 212);
        }else if($shop['shop_id'] != $comment['shop_id']){
            $this->err->add('你没有权限回复该评论', 212);
        }else if($reply_content = $this->checksubmit('reply_content')){
            if(K::M('product/comment')->reply($comment_id, $reply_content)){
                $this->err->add('回复评论成功');
            }
        }else{
            $this->pagedata['product'] = K::M('product/product')->detail($comment['product_id']);
            if($uid = $comment['uid']){
                $this->pagedata['member'] = K::M('member/view')->detail($uid);
            }
            $this->pagedata['comment'] = $comment;
            $this->tmpl = 'ucenter/product/comment/reply.html';
        }
    }

    public function product($product_id=null, $page)
    {
        $shop = $this->ucenter_shop();
        $pager = $filter = array();
        if(!$product_id = (int)$product_id){
            $this->err->add('未定义操作', 211);
        }else if(!$product = K::M('product/product')->detail($product_id)){
            $this->err->add('商品不存在或已经删除', 212);
        }else{
            $pager['page'] = $page = max((int)$page, 1);
            $pager['limit'] = $limit = 20;
            $pager['count'] = $count = 0;
        }
    }
}