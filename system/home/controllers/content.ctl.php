<?php

/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: content.ctl.php 4423 2014-04-09 01:26:54Z langzhong $
 */
class Ctl_Content extends Ctl {

    public function index()
    {
        $this->pagedata['article_cates'] = K::M('article/cate')->fetch_all();        
        $this->seo->init('content',array());
        $this->tmpl = 'content/index.html';
    }

    public function items($cat_id = 0, $page = 1)
    {
        $cate_list = K::M('article/cate')->fetch_all();

        $filter = $pager = array();
        $pager['page'] = max(intval($page), 1);
        $pager['limit'] = $limit = 20;
        $filter['closed'] = 0;
        $cates = array();

        if (($cat_id = (int) $cat_id) && isset($cate_list[$cat_id])) {
            $cateids  = K::M('article/cate')->children_ids($cat_id);
            $filter['cat_id'] = explode(',',$cateids);
            if (strlen($cateids) == strlen($cat_id)) { //说明 没有下级分类了
                foreach ($cate_list as $k => $v) {
                    if ($v['parent_id'] == $cate_list[$cat_id]['parent_id'] && $v['from'] == 'article') {
                        $cates[$k] = $v;
                    }
                }
            }
            else {
                foreach ($cate_list as $k => $v) {
                    if ($v['parent_id'] == $cat_id && $v['from'] == 'article') {
                        $cates[$k] = $v;
                    }
                }
            }

            $this->pagedata['cate_info'] = $cate_list[$cat_id];
        }
        else {
            foreach ($cate_list as $k => $v) {
                if ($v['parent_id'] == 0 && $v['from'] == 'article') {
                    $cates[$k] = $v;
                }
            }
        }
        $filter['from'] = $pager['from'] = 'article';
        $orderby = array('orderby' => 'ASC', 'article_id' => 'DESC');
        if ($items = K::M('article/view')->items($filter, $orderby, $page, $limit, $count)) {
            $pager['count'] = $count;
            $pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink("content:items", array($cat_id, "{page}")), array());
        }
        $this->pagedata['items'] = $items;
        $this->pagedata['pager'] = $pager;
        $this->pagedata['cates'] = $cates;
        $this->pagedata['cate_list'] = $cate_list;
        $this->seo->init('content_items',array(
            'cate_title'=>$this->pagedata['cate_info']['title'],
            'cate_seo_title' => $this->pagedata['cate_info']['seo_title'],
            'cate_seo_keywords' => $this->pagedata['cate_info']['seo_keywords'],
            'cate_seo_description' => $this->pagedata['cate_info']['seo_description'],
        ));
        $this->tmpl = 'content/items.html';
    }

    public function detail($article_id = null,$page=1)
    {
        if (!($article_id = (int) $article_id) && !($article_id = (int) $this->GP('article_id'))) {
            $this->err->add('没有该文章', 211);
        }else if (!$detail = K::M('article/view')->detail($article_id)) {
            $this->err->add('文章不存在或已经删除', 212);
        } else {
            K::M('article/view')->update_count($article_id,'views',1);
            $detail['content']=K::M('article/link')->filter($detail['content']);
            $this->pagedata['up_item'] = K::M('article/view')->up_item($article_id);
            $this->pagedata['next_item'] = K::M('article/view')->next_item($article_id);
            $this->pagedata['contents'] = K::M('article/view')->items(array('cat_id'=>$detail['cat_id'],'closed'=>0),array('views'=>'desc'),1,5);
            $this->pagedata['detail'] = $detail;            
            $filter = $pager = array();
            $pager['page'] = max(intval($page), 1);
            $pager['limit'] = $limit = 10;
            $filter['article_id'] = $article_id;
            $filter['closed'] = 0;
            if ($items = K::M('article/comment')->items($filter, array('comment_id' => 'DESC'), $page, $limit, $count)) {
                $uids = array();
                foreach ($items as $k => $v) {
                    $uids[$v['uid']] = $v['uid'];
                    $items[$k]['clientip'] = $v['clientip'] . '(' . K::M("misc/location")->location($v['clientip']) . ')';
                }
                $pager['count'] = $count;
                $pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink('content:detail', array($article_id, '{page}')), array());
            }
            $this->pagedata['userList'] = K::M('member/view')->items_by_ids($uids);
            $this->pagedata['items'] = $items;
            $this->pagedata['pager'] = $pager;
            $cate = K::M('article/cate')->cate($detail['cat_id']);
            $this->pagedata['cate'] = $cate;
            $this->seo->init('content_detail',array(
                'title'         =>$detail['title'],
                'cate_title'        =>$cate['title'],
                'cate_seo_title'    => $cate['seo_title'],
                'cate_seo_keywords' => $cate['seo_keywords'],
                'cate_seo_description' => $cate['seo_description']               
            ));
            if($seo_title =$detail['seo_title']){
              $this->seo->set_title($seo_title."-亿家网");
          }
            if($seo_description = $detail['seo_description']){
                $this->seo->set_description($seo_description);
            }
            if($seo_keywords = $detail['seo_keywords']){
                $this->seo->set_keywords($seo_keywords);
            }
            $this->tmpl = 'content/detail.html';
        }
    }
    
    public function detailComment($article_id)
    {
        if (empty($this->uid)) {
            $this->err->add('请登录', 101);
        }
        elseif (!$article_id = (int) $article_id) {
            $this->err->add('文章不存在', 211);
        }
        else if (!$article = K::M('article/view')->detail($article_id)) {
            $this->err->add('文章不存在', 212);
        }
        elseif (!$content = $this->GP('content')) {
            $this->err->add('至少说点什么吧！', 212);
        }
        else {
            $data = array(
                'article_id' => $article_id,
                'uid' => $this->uid,
                'content' => $content
            );
            K::M('article/comment')->create($data);
            K::M('article/view')->update_count($article_id, 'comments', 1);
            $this->err->add('操作成功！');
        }
    }
    
    public function diary($status = 0, $type_id = 0, $way_id = 0, $orderby = 0, $page = 1)
    {
        $order = $filter = $pager = array();
        $pager['status'] = $status = (int) $status;
        $pager['type_id'] = $type_id = (int) $type_id;
        $pager['way_id'] = $way_id = (int) $way_id;
        $pager['orderby'] = $orderby = (int) $orderby;
        $pager['page'] = max(intval($page), 1);
        $pager['limit'] = $limit = 10;
        $filter['city_id'] = $this->request['city_id'];
        if ($status) {
            $filter['status'] = $status;
        }
        if ($type_id) {
            $filter['type_id'] = $type_id;
        }
        if ($way_id) {
            $filter['way_id'] = $way_id;
        }
        $filter['audit'] = 1;
        switch ($orderby) {
            case 1:
                $order = array('pv_num' => 'DESC');
                break;
            case 2:
                $order = array('ping_num' => 'DESC');
                break;
            default:
                $order = array('diary_id' => 'DESC');
                break;
        }

        if ($items = K::M('diary/diary')->items($filter, $order, $page, $limit, $count)) {
            foreach ($items as $k => $v) {
                if ($v['uid']) {
                    $uids[$v['uid']] = $v['uid'];
                }
                if ($v['home_id']) {
                    $home_ids[$v['home_id']] = $v['home_id'];
                }
                if ($v['company_id']) {
                    $company_ids[$v['company_id']] = $v['company_id'];
                }
            }
            if (!empty($uids)) {
                $this->pagedata['userList'] = K::M('member/view')->items_by_ids($uids);
            }
            if (!empty($home_ids)) {
                $this->pagedata['home_list'] = K::M('home/main')->items_by_ids($home_ids);
            }
            if (!empty($company_ids)) {
                $this->pagedata['company_list'] = K::M('company/company')->items_by_ids($company_ids);
            }
            $pager['count'] = $count;
            $pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink('content:diary', array($status, $type_id, $way_id, $order, '{page}')), array());
        }
        $this->pagedata['items'] = $items;
        $this->pagedata['pager'] = $pager;

        $this->pagedata['cfg_status'] = K::M('home/site')->get_status();
        $this->pagedata['cfg_setting'] = K::M('tenders/setting')->fetch_all_setting();
        $this->pagedata['cfg_type'] = K::M('tenders/setting')->get_type();
        $this->seo->init('content_diary',array());
        $this->tmpl = 'content/diary.html';
    }

    public function diaryDetail($diary_id, $page = 1)
    {
        if (!($diary_id = (int) $diary_id) && !($diary_id = (int) $this->GP('diary_id'))) {
            $this->err->add('没有您要看的日记', 211);
        }
        else if (!$detail = K::M('diary/diary')->detail($diary_id)) {
            $this->err->add('没有您要看的日记', 212);
        }
        elseif (!$detail['audit']) {
            $this->err->add('没有您要看的日记', 212);
        }
        else {
            K::M('diary/diary')->update_count($diary_id, 'pv_num', 1);
            if ($company_id = $detail['company_id']) {
                $this->pagedata['company'] = K::M('company/company')->detail($company_id);
            }
            if ($home_id = (int) $detail['home_id']) {
                $this->pagedata['home'] = K::M('home/main')->detail($home_id);
            }
            if ($uid = (int) $detail['uid']) {
                $this->pagedata['member'] = K::M('member/view')->detail($uid);
            }

            $this->pagedata['cfg_status'] = K::M('home/site')->get_status();
            $this->pagedata['cfg_setting'] = K::M('tenders/setting')->fetch_all_setting();
            $this->pagedata['cfg_type'] = K::M('tenders/setting')->get_type();

            $this->pagedata['contents'] = K::M('diary/detail')->items(array('diary_id' => $diary_id), array('status' => 'ASC'), 1, $detail['content_num']);

            $this->pagedata['detail'] = $detail;


            $filter = $pager = array();
            $pager['page'] = max(intval($page), 1);
            $pager['limit'] = $limit = 10;
            $filter['diary_id'] = $diary_id;
            $filter['audit'] = 1;
            if ($items = K::M('diary/comment')->items($filter, array('comment_id' => 'DESC'), $page, $limit, $count)) {
                $uids = array();
                foreach ($items as $k => $v) {
                    $uids[$v['uid']] = $v['uid'];
                    $items[$k]['create_ip'] = $v['create_ip'] . '(' . K::M("misc/location")->location($v['create_ip']) . ')';
                }
                $pager['count'] = $count;
                $pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink('content:diaryDetail', array($diary_id, '{page}')), array());
            }
            $this->pagedata['userList'] = K::M('member/view')->items_by_ids($uids);
            $this->pagedata['items'] = $items;
            $this->pagedata['pager'] = $pager;
            
            $this->seo->init('content_diaryDetail',array(
                'title'=>$detail['title'],
                'home_name'=>  $this->pagedata['home']['name'],
                'company_name' => $this->pagedata['company']['name'],
                'uname' =>  $this->pagedata['member']['realname']
            ));
            $this->tmpl = 'content/diaryDetail.html';
        }
    }

    public function diaryComment($diary_id)
    {
        if (empty($this->uid)) {
            $this->err->add('请登录', 101);
        }
        elseif (($audit = K::M('system/audit')->audit('diaryComment', $this->MEMBER)) == -1) {
            $this->err->add('很抱歉您所在的用户组没有权限操作', 201);
        }
        elseif (!$diary_id = (int) $diary_id) {
            $this->err->add('日记不存在', 211);
        }
        else if (!$diary = K::M('diary/diary')->detail($diary_id)) {
            $this->err->add('日记不存在', 212);
        }
        elseif (!$diary['audit']) {
            $this->err->add('该日记还未通过审核', 212);
        }
        elseif (!$content = $this->GP('content')) {
            $this->err->add('至少说点什么吧！', 212);
        }
        else {
            $data = array(
                'diary_id' => $diary_id,
                'uid' => $this->uid,
                'content' => $content,
                'audit' => $audit
            );
            K::M('diary/comment')->create($data);
            K::M('diary/diary')->update_count($diary_id, 'ping_num', 1);
            $this->err->add('操作成功！');
        }
    }

}
