<?php
/**
 * Copy Right Anuike.com
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<Anhuike@gmail.com>
 * $Id: comment.ctl.php 3053 2014-01-15 02:00:13Z youyi $
 */

Import::C('ucenter/ucenter');
class Ctl_Ucenter_Shop_Comment extends Ctl_Ucenter
{
    
    public function index($page=1)
    {
        $shop = $this->ucenter_shop();
        $pager['page'] = $page = max((int)$page, 1);
        $pager['limit'] = $limit = 20;
        $pager['count'] = $count = 0;
        $filter = array('shop_id'=>$shop['shop_id'], 'closed'=>0);
        if($items = K::M('shop/comment')->items($filter, null, $page, $limit, $count)){
            $pager['count'] = $count;
            $pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink(null, array('{page}')));
            $uids = array();
            foreach($items as $k=>$v){
                $uids[$v['uid']] = $v['uid'];
            }
            if($uids){
                $this->pagedata['member_list'] = K::M('member/view')->items_by_ids($uids);
            }
            $this->pagedata['items'] = $items;
        }
        $this->pagedata['pager'] = $pager;
        $this->tmpl = 'ucenter/shop/comment/index.html';         
    }

    public function reply($comment_id=null)
    {
        $shop = $this->ucenter_shop();
        if(!($comment_id = (int)$comment_id) && !($comment_id = (int)$this->GP('comment_id'))){
            $this->err->add('未定义操作', 211);
        }else if(!$comment = K::M('shop/comment')->detail($comment_id)){
            $this->err->add('评论不存在或已经删除', 212);
        }else if($shop['shop_id'] != $comment['shop_id']){
            $this->err->add('你没有权限回复该评论', 212);
        }else if($reply_content = $this->checksubmit('reply_content')){
            if(K::M('shop/comment')->reply($comment_id, $reply_content)){
                $this->err->add('回复评论成功');
            }
        }else{
            if($uid = $comment['uid']){
                $this->pagedata['member'] = K::M('member/view')->detail($uid);
            }
            $this->pagedata['comment'] = $comment;
            $this->tmpl = 'ucenter/shop/comment/reply.html';
        }
    }
}