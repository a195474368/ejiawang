<?php

/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: comment.ctl.php 3053 2014-01-15 02:00:13Z youyi $
 */
if (!defined('__CORE_DIR')) {
    exit("Access Denied");
}

class Ctl_Diary_Comment extends Ctl {

    public function index($page = 1)
    {
        $filter = $pager = array();
        $pager['page'] = max(intval($page), 1);
        $pager['limit'] = $limit = 50;
        if ($SO = $this->GP('SO')) {
            $pager['SO'] = $SO;
            if ($SO['diary_id']) {
                $filter['diary_id'] = $SO['diary_id'];
            }
            if ($SO['uid']) {
                $filter['uid'] = $SO['uid'];
            }
            if ($SO['content']) {
                $filter['content'] = "LIKE:%" . $SO['content'] . "%";
            }
        }
        if ($items = K::M('diary/comment')->items($filter, null, $page, $limit, $count)) {
            $uids = $diaryids = array();
            foreach ($items as $k => $v) {
                $uids[$v['uid']] = $v['uid'];
                $diaryids[$v['diary_id']] = $v['diary_id'];
                $items[$k]['create_ip'] = $v['create_ip'] . '(' . K::M("misc/location")->location($v['create_ip']) . ')';
            }
            $pager['count'] = $count;
            $pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink(null, array('{page}')), array('SO' => $SO));
        }
        $this->pagedata['userList'] = K::M('member/view')->items_by_ids($uids);
        $this->pagedata['diaryList'] = K::M('diary/diary')->items_by_ids($diaryids);
        $this->pagedata['items'] = $items;
        $this->pagedata['pager'] = $pager;
        $this->tmpl = 'admin:diary/comment/items.html';
    }

    public function so()
    {
        $this->tmpl = 'admin:diary/comment/so.html';
    }

    public function create()
    {
        if ($this->checksubmit()) {
            if (!$data = $this->GP('data')) {
                $this->err->add('非法的数据提交', 201);
            }
            else {

                if ($comment_id = K::M('diary/comment')->create($data)) {
                    $this->err->add('添加内容成功');
                    $this->err->set_data('forward', '?diary/comment-index.html');
                }
            }
        }
        else {
            $this->tmpl = 'admin:diary/comment/create.html';
        }
    }

    public function edit($comment_id = null)
    {
        if (!($comment_id = (int) $comment_id) && !($comment_id = $this->GP('comment_id'))) {
            $this->err->add('未指定要修改的内容ID', 211);
        }
        else if (!$detail = K::M('diary/comment')->detail($comment_id)) {
            $this->err->add('您要修改的内容不存在或已经删除', 212);
        }
        else if ($this->checksubmit('data')) {
            if (!$data = $this->GP('data')) {
                $this->err->add('非法的数据提交', 201);
            }
            else {

                if (K::M('diary/comment')->update($comment_id, $data)) {
                    $this->err->add('修改内容成功');
                }
            }
        }
        else {
            if ($uid = (int) $detail['uid']) {
                $this->pagedata['member'] = K::M('member/view')->detail($uid);
            }
            $this->pagedata['detail'] = $detail;
            $this->tmpl = 'admin:diary/comment/edit.html';
        }
    }

    public function doaudit($comment_id = null)
    {
        if ($comment_id = (int) $comment_id) {
            if (K::M('diary/comment')->batch($comment_id, array('audit' => 1))) {
                $this->err->add('审核内容成功');
            }
        }
        else if ($ids = $this->GP('comment_id')) {
            if (K::M('diary/comment')->batch($ids, array('audit' => 1))) {
                $this->err->add('批量审核内容成功');
            }
        }
        else {
            $this->err->add('未指定要审核的内容', 401);
        }
    }

    public function delete($comment_id = null)
    {
        if ($comment_id = (int) $comment_id) {
            if (K::M('diary/comment')->delete($comment_id)) {
                $this->err->add('删除成功');
            }
        }
        else if ($ids = $this->GP('comment_id')) {
            if (K::M('diary/comment')->delete($ids)) {
                $this->err->add('批量删除成功');
            }
        }
        else {
            $this->err->add('未指定要删除的内容ID', 401);
        }
    }

}
