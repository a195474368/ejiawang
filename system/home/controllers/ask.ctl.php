<?php

/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: ask.ctl.php 3975 2014-03-19 02:47:00Z langzhong $
 */
class Ctl_Ask extends Ctl {

    public function index()
    {

        $this->pagedata['cates'] = K::M('ask/cate')->fetch_all();
         $this->seo->init('ask',array());
        $this->tmpl = 'content/ask.html';
    }

    public function items($cat_id = 0, $type = 0, $page = 1)
    {

        $filter = $pager = array();
        $pager['page'] = max(intval($page), 1);
        $pager['limit'] = $limit = 20;
        $cate_list = K::M('ask/cate')->fetch_all();
        $cates = array();
        if ($cat_id = (int) $cat_id) {
            $cat_ids = K::M('ask/cate')->children_ids($cat_id);
            $filter['cat_id'] = $cat_ids;
            $this->pagedata['cat_info'] = $cate_list[$cat_id];
        }
        if (!$cates = K::M('ask/cate')->childrens($cat_id)) {
            $cates = K::M('ask/cate')->childrens($cate_list[$cat_id]['parent_id']);
        }
        $counts = K::M('ask/ask')->items_count_by_ids(); //有待优化的地方
        foreach ($cates as $k => $v) {
            $local = K::M('ask/cate')->children_ids($k);
            $cates[$k]['ask_num'] = 0;
            foreach ($local as $id) {
                $cates[$k]['ask_num'] += $counts[$id];
            }
        }
        if ($type = (int) $type) {
            if ($type == 1) {
                $filter['answer_id'] = '>:0';
            }
            else {
                $filter['answer_id'] = '0';
            }
        }
        $filter['audit'] = 1;
        if ($items = K::M('ask/ask')->items($filter, array('orderby' => 'desc', 'ask_id' => 'desc'), $page, $limit, $count)) {
            $pager['count'] = $count;
            $pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink('ask:items', array($cat_id, $type, '{page}')), array());
        }
        $this->pagedata['type'] = $type;
        $this->pagedata['cat_id'] = $cat_id;
        $this->pagedata['cate_list'] = $cate_list;
        $this->pagedata['cates'] = $cates;
        $this->pagedata['items'] = $items;
        $this->pagedata['pager'] = $pager;
        $this->seo->init('ask_items',array('cat_name'=>$this->pagedata['cat_info']['title']));
        $this->tmpl = 'content/ask_items.html';
    }

    public function make()
    {
        $title = htmlspecialchars($this->GP('title'), ENT_QUOTES, 'utf-8');

        $this->pagedata['title'] = $title;
        $this->tmpl = 'content/ask_make.html';
    }

    public function save()
    {
        if (empty($this->uid)) {
            $this->err->add('请登录', 101);
        }
        elseif (K::M('system/integral')->check('ask', $this->MEMBER) === false) {
            $this->err->add('很抱歉您的账户余额不足！', 201);
        }
        elseif (($audit = K::M('system/audit')->audit('ask', $this->MEMBER)) == -1) {
            $this->err->add('很抱歉您所在的用户组没有权限操作', 201);
        }
        elseif ($data = $this->checksubmit('data')) {
            $data = array(
                'title' => $data['title'],
                'intro' => $data['intro'],
                'cat_id' => $data['cat_id'],
                'uid' => $this->uid,
                'audit' => $audit,
            );
            if ($ask_id = K::M('ask/ask')->create($data)) {
                K::M('system/integral')->commit('ask', $this->MEMBER, '发布问题');
                $this->err->add('发表问题成功');
                $this->err->set_data('forward', $this->mklink('ask:detail', array($ask_id)));
            }
        }
        else {
            $this->err->add('发表问题失败', 201);
        }
    }

    public function cat($pid = null)
    {
        if (!is_numeric($pid)) {
            return false;
        }
        $cats = array();
        if ($childrens = K::M('ask/cate')->childrens($pid)) {
            foreach ($childrens as $k => $v) {
                $cats[] = array('cat_id' => $v['cat_id'], 'parent_id' => $v['parent_id'], 'title' => $v['title']);
            }
        }
        $this->err->set_data('cats', $cats);
        $this->err->json();
    }

    public function detail($ask_id = null,$page=1)
    {
        if (!($ask_id = (int) $ask_id) && !($ask_id = (int) $this->GP('ask_id'))) {
            $this->err->add('内容不存在', 211);
        }
        else if (!$detail = K::M('ask/ask')->detail($ask_id)) {
            $this->err->add('内容不存在', 212);
        }
        elseif (!$detail['audit']) {
            $this->err->add('尊敬的用户该问题正在审核中！', 212);
            $this->err->set_data('forward', $this->mklink('ask:items'));
        }
        else {
            $uids = array();
            if($uid = (int)$detail['uid']){
                $uids[$uid] = $uid;
            }           
            $this->pagedata['supply'] = K::M('ask/supply')->items(array('ask_id'=>$ask_id,'audit'=>1));            
            if($detail['answer_id']){
                $answer = K::M('ask/answer')->detail($detail['answer_id']);
                $this->pagedata['answer'] = $answer;
                $uids[$answer['uid']] = $answer['uid'];
            }
            
            $filter = $pager = array();
            $pager['page'] = max(intval($page), 1);
            $pager['limit'] = $limit = 10;
            $filter['ask_id'] = $ask_id;
            $filter['audit'] = 1;
            if ($items = K::M('ask/answer')->items($filter, null, $page, $limit, $count)) {
                foreach($items as $v){
                    $askids[$v['ask_id']] = $v['ask_id'];
                    if ($v['uid']) {
                        $uids[$v['uid']] = $v['uid'];
                    }
                }
                $pager['count'] = $count;
                $pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink('ask:items', array($ask_id, '{page}')), array());
            }
            $this->pagedata['answers'] = $items;
            $this->pagedata['pager'] = $pager;

            $this->pagedata['member_list'] = K::M('member/view')->items_by_ids($uids);
            $this->pagedata['cate_list'] =  K::M('ask/cate')->fetch_all();
            $this->pagedata['detail'] = $detail;            
            $this->seo->init('ask_detail',array('title'=>$detail['title'],'intro'=>$detail['intro']));
            if($seo_title = $detail['seo_title']){
                $this->seo->set_title($seo_title);
            }
            if($seo_description = $detail['seo_description']){
                $this->seo->set_description($seo_description);
            }
            if($seo_keywords = $detail['seo_keywords']){
                $this->seo->set_keywords($seo_keywords);
            }
            $this->tmpl = 'content/ask_detail.html';
        }
    }
    
    
    public function supply($ask_id = null){
        if (empty($this->uid)) {
            $this->err->add('请登录', 101);
        }
        elseif (!($ask_id = (int) $ask_id) && !($ask_id = (int) $this->GP('ask_id'))) {
            $this->err->add('内容不存在', 211);
        }
        else if (!$detail = K::M('ask/ask')->detail($ask_id)) {
            $this->err->add('内容不存在', 212);
        }elseif($detail['uid'] != $this->uid){
            $this->err->add('内容不存在', 212); 
        }elseif(!$content = $this->GP('content')){
             $this->err->add('请输入您要补充的内容', 212);            
        }else{
            $data = array(
                'ask_id'    => $ask_id,
                'contents'  => $content,
                'audit'     => $detail['audit']
            );
            if($supply_id = K::M('ask/supply')->create($data)){
                $this->err->add('补充内容成功');
            }else{
                $this->err->add('补充内容失败', 212);
            }       
            
        }
        
    }
    
    public function yes($answer_id = null){
        if (empty($this->uid)) {
            $this->err->add('请登录', 101);
        }elseif(!($answer_id = (int) $answer_id) && !($answer_id = (int)$this->GP('answer_id'))){
             $this->err->add('内容不存在', 211);
        }elseif(!$detail = K::M('ask/answer')->detail($answer_id)){
            $this->err->add('内容不存在', 211);
        }elseif(!$ask = K::M('ask/ask')->detail($detail['ask_id'])){
           $this->err->add('内容不存在', 211); 
        }elseif($ask['uid'] != $this->uid){
             $this->err->add('您没有权限管理', 211); 
        }else{
            K::M('ask/ask')->update($detail['ask_id'],array('answer_id'=>$answer_id));
            $this->err->add('操作成功！');
        }
        
    }
    
    public function answer($ask_id = null){
        if (empty($this->uid)) {
            $this->err->add('请登录', 101);
        }elseif (K::M('system/integral')->check('answer', $this->MEMBER) === false) {
            $this->err->add('很抱歉您的账户余额不足！', 201);
        }
        elseif (($audit = K::M('system/audit')->audit('answer', $this->MEMBER)) == -1) {
            $this->err->add('很抱歉您所在的用户组没有权限操作', 201);
        }
        elseif (!($ask_id = (int) $ask_id) && !($ask_id = (int) $this->GP('ask_id'))) {
            $this->err->add('内容不存在', 211);
        }
        else if (!$detail = K::M('ask/ask')->detail($ask_id)) {
            $this->err->add('内容不存在', 212);
        }elseif(!$contents = $this->GP('contents')){
             $this->err->add('请输入您要回答的内容', 212);            
        }else{
            $data = array(
                'ask_id'    => $ask_id,
                'uid'       => $this->uid,
                'contents'  => $contents,
                'audit'     => $audit
            );
            if($supply_id = K::M('ask/answer')->create($data)){
                if($this->MEMBER['from'] == 'company'){
                    $company = K::M('company/company')->company_by_uid($this->uid);
                    if($company){
                        K::M('company/company')->update_count($company['company_id'],'answer_num',1);
                    }
                }
                K::M('ask/ask')->update_count($ask_id,'answer_num',1);
                K::M('system/integral')->commit('answer', $this->MEMBER, '回答问题');
                $this->err->add('回答问题成功');
            }else{
                $this->err->add('回答问题失败', 212);
            }       
            
        }    
    }
    
}
