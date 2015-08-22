<?php

/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: company.ctl.php 3975 2014-03-19 02:47:00Z langzhong $
 */
class Ctl_Company extends Ctl {

    public $_call = 'index';
    private $_action = array('main', 'about', 'youhui', 'dianping', 'news', 'newsDetail', 'xiaoguotu', 'site', 'team', 'save');
    private $_page = 1;
    private $_company_id;
    private $_company;

    public function index()
    {
        $uri = str_replace('.html', '', str_replace('company-', '', $this->request['uri']));

        if (empty($uri)) {
            $this->err->add('该公司不存在', 211);
        }
        else {
            $local = explode('-', $uri);
            if (empty($local)) {
                $this->err->add('该公司不存在#001', 211);
            }
            else {
                if (!in_array($local[0], $this->_action)) {
                    $this->_company_id = (int) $local[0];
                    $act = 'main';
                }
                else {
                    $act = $local[0];
                    $this->_company_id = empty($local[1]) ? 0 : (int) $local[1];
                }

                $this->_page = empty($local[2]) ? 1 : (int) $local[2];

                if (!$this->_company = K::M('company/company')->detail($this->_company_id)) {
                    $this->err->add('该公司不存在#002', 211);
                }
                elseif (!$this->_company['audit'] || $this->_company['closed']) {
                    $this->err->add('该公司不存在#003', 211);
                }
                else {
                    K::M('company/company')->update_count($this->_company_id, 'views', 1);
                    $companyex = K::M('company/companyex')->detail($this->_company_id);
                    $template_id = empty($companyex['template_id']) ? 'default' : $companyex['template_id'];
                    $theme = K::M('system/theme')->default_theme();
                    $filename = __CFG::TMPL_DIR . $theme['theme'] . '/company/config.php';
                    if(!file_exists($filename)){
                        $filename = __CFG::TMPL_DIR . 'default/company/config.php';
                    }
                    $template_list = include($filename);
                    if (!isset($template_list[$template_id])) {
                        $this->err->add('网站配置存在问题', 201);
                    }
                    else {
                       $this->_company['txt'] = $companyex['txt'] = K::M('content/html')->text($companyex['intro']);
                        $this->pagedata['company_member'] = K::M('member/view')->detail($this->_company['uid']);
                        $this->pagedata['act'] = $act;
                        $this->pagedata['template'] = $template_list[$template_id];
                        $this->pagedata['companyex'] = $companyex;
                        $this->pagedata['company'] = $this->_company;
                        $this->pagedata['company_id'] = $this->_company_id;
                        $area_list = K::M('data/area')->areas_by_city($this->request['city_id']);
                        $this->_company['area_name'] = $area_list[$this->_company['area_id']]['area_name'];
                        $this->$act();
                    }
                }
            }
        }
    }

    public function main()
    {


        $this->pagedata['news_num'] = K::M('company/news')->get_count_by_company_id($this->_company_id);
        $this->pagedata['designer_num'] = K::M('designer/designer')->get_count_by_company_id($this->_company_id);
        $this->pagedata['dianping'] = K::M('company/dianping')->items(array('company_id' => $this->_company_id, 'audit' => 1), array('id' => 'desc'), 1, 2);

        $this->pagedata['banners'] = K::M('company/banner')->items(array('company_id' => $this->_company_id), array('orderby' => 'asc'), 1, 5);
        $youhui = K::M('company/youhui')->get_last_by_company_id($this->_company_id);
        if (!empty($youhui)) {
            $end = strtotime($youhui['end_date']);
            if ($end > __TIME) {
                $youhui['end'] = ceil(($end - __TIME) / 86400);
            }
            else {
                $youhui['end'] = 0;
            }
            $this->pagedata['youhui'] = $youhui;
        }

        $this->pagedata['news'] = K::M('company/news')->items(array('company_id' => $this->_company_id, 'audit' => 1), array('news_id' => 'desc'), 1, 5);

        $cases = K::M('case/case')->items(array('company_id' => $this->_company_id, 'audit' => 1,'closed'=>0), array('case_id' => 'desc'), 1, 4);
        $lastphotos = $designer = array();
        foreach ($cases as $k => $v) {
            if ($v['lastphotos']) {
                $lastphotos[] = $v['lastphotos'];
                $designer[$v['designer_id']] = $v['designer_id'];
                $cases[$k]['lastphotos'] = explode(',', $v['lastphotos']);
            }
        }
        if (!empty($lastphotos)) {
            $lastphotos = join(',', $lastphotos);
            $this->pagedata['photos'] = K::M('case/photo')->items_by_ids($lastphotos);
        }
        $this->pagedata['cases'] = $cases;
        $uids = $designer;
        if (!empty($designer)) {
            $designers = K::M('designer/designer')->items_by_ids($designer);
            $this->pagedata['designers'] = $designers;
        }
        $teams = K::M('designer/designer')->items(array('company_id'=>$this->_company_id, 'audit' => 1, 'closed'=>0), array('uid' => 'desc'), 1, 4);
       
        $this->pagedata['teams'] = $teams;

        $this->pagedata['sites'] = K::M('home/site')->items(array('company_id' => $this->_company_id, 'audit' => 1), array('site_id' => 'desc'), 1, 4);
        $this->pagedata['site_status'] = K::M('home/site')->get_status();
        
        
        K::M('helper/seo')->init('company',array('area_name'=>$this->_company['area_name'],'company_name'=>$this->_company['name'],'tel'=>$this->_company['tel'],'txt'=>  $this->_company['txt']));
        $this->tmpl = 'company/index.html';
    }

    public function about()
    {

        $this->pagedata['company_photo'] = K::M('company/pic')->items(array('company_id' => $this->_company_id), null, 1, 50);
        
        K::M('helper/seo')->init('company_about',array('area_name'=>$this->_company['area_name'],'company_name'=>$this->_company['name'],'tel'=>$this->_company['tel'],'txt'=>  $this->_company['txt']));
        $this->tmpl = 'company/about.html';
    }

    public function team()
    {
        $filter = $pager = array();
        $pager['page'] = max(intval($this->_page), 1);
        $pager['limit'] = $limit = 16;
        $filter['company_id'] = $this->_company_id;
        $filter['closed'] = 0;
        if ($items = K::M('designer/designer')->items($filter, null, $this->_page, $limit, $count)) {
            $uids = array();
            foreach ($items as $k => $val) {
                
                $items[$k]['about'] = K::M('content/html')->text($val['about']);
            }

            $pager['count'] = $count;
            $pager['pagebar'] = $this->mkpage($count, $limit, $this->_page, $this->mklink('company:team', array($this->_company_id, '{page}')), array());
        }
        $this->pagedata['items'] = $items;
        $this->pagedata['pager'] = $pager;
        K::M('helper/seo')->init('company_team',array('area_name'=>$this->_company['area_name'],'company_name'=>$this->_company['name'],'tel'=>$this->_company['tel'],'txt'=>  $this->_company['txt']));
        $this->tmpl = 'company/team.html';
    }

    public function xiaoguotu()
    {
        $filter = $pager = array();
        $pager['page'] = max(intval($this->_page), 1);
        $pager['limit'] = $limit = 15;
        $filter['audit'] = 1;
        $filter['closed'] = 0;
        $filter['company_id'] = $this->_company_id;

        if ($items = K::M('case/case')->items($filter, array('case_id' => 'desc'), $this->_page, $limit, $count)) {
            $lastphotos = array();
            foreach ($items as $k => $val) {
                if ($val['lastphotos']) {
                    $lastphotos[] = $val['lastphotos'];
                    $items[$k]['lastphotos'] = explode(',', $val['lastphotos']);
                }
            }
            if (!empty($lastphotos)) {
                $lastphotos = join(',', $lastphotos);
                $this->pagedata['photos'] = K::M('case/photo')->items_by_ids($lastphotos);
            }
            $pager['count'] = $count;
            $pager['pagebar'] = $this->mkpage($count, $limit, $this->_page, $this->mklink('company:xiaoguotu', array($this->_company_id, '{page}'), array(), true), array());
        }
        $this->pagedata['case'] = $items;
        $this->pagedata['pager'] = $pager;
        K::M('helper/seo')->init('company_xiaoguotu',array('area_name'=>$this->_company['area_name'],'company_name'=>$this->_company['name'],'tel'=>$this->_company['tel'],'txt'=>  $this->_company['txt']));

        $this->tmpl = 'company/xiaoguotu.html';
    }

    public function site()
    {
        $filter = $pager = array();
        $pager['page'] = max(intval($this->_page), 1);
        $pager['limit'] = $limit = 15;
        $filter['audit'] = 1;
        $filter['company_id'] = $this->_company_id;
        if ($items = K::M('home/site')->items($filter, array('site_id' => 'DESC'), $this->_page, $limit, $count)) {

            $pager['count'] = $count;
            $pager['pagebar'] = $this->mkpage($count, $limit, $this->_page, $this->mklink('company:site', array($this->_company_id, '{page}'), array(), true), array());
        }
        $this->pagedata['items'] = $items;
        $this->pagedata['pager'] = $pager;
        $this->pagedata['site_status'] = K::M('home/site')->get_status();
        K::M('helper/seo')->init('company_site',array('area_name'=>$this->_company['area_name'],'company_name'=>$this->_company['name'],'tel'=>$this->_company['tel'],'txt'=>  $this->_company['txt']));

        $this->tmpl = 'company/site.html';
    }

    public function youhui()
    {
        $filter = $pager = array();
        $pager['page'] = max(intval($this->_page), 1);
        $pager['limit'] = $limit = 15;
        $filter['audit'] = 1;
        $filter['company_id'] = $this->_company_id;
        if ($items = K::M('company/youhui')->items($filter, array('youhui_id' => 'DESC'), $this->_page, $limit, $count)) {
            foreach ($items as $k => $v) {
                $end = strtotime($v['end_date']);
                if ($end > __TIME) {
                    $items[$k]['end'] = ceil(($end - __TIME) / 86400);
                }
                else {
                    $items[$k]['end'] = 0;
                }
            }
            $pager['count'] = $count;
            $pager['pagebar'] = $this->mkpage($count, $limit, $this->_page, $this->mklink('company:youhui', array($this->_company_id, '{page}')), array());
        }

        $this->pagedata['items'] = $items;
        $this->pagedata['pager'] = $pager;
        K::M('helper/seo')->init('company_youhui',array('area_name'=>$this->_company['area_name'],'company_name'=>$this->_company['name'],'tel'=>$this->_company['tel'],'txt'=>  $this->_company['txt']));
        $this->tmpl = 'company/youhui.html';
    }

    public function news()
    {
        $filter = $pager = array();
        $pager['page'] = max(intval($this->_page), 1);
        $pager['limit'] = $limit = 20;
        $filter['audit'] = 1;
        $filter['company_id'] = $this->_company_id;
        if ($items = K::M('company/news')->items($filter, array('news_id' => 'DESC'), $this->_page, $limit, $count)) {
            $pager['count'] = $count;
            $pager['pagebar'] = $this->mkpage($count, $limit, $this->_page, $this->mklink('company:news', array($this->_company_id, '{page}')), array());
        }
        $this->pagedata['items'] = $items;
        $this->pagedata['pager'] = $pager;
        
        K::M('helper/seo')->init('company_news',array('area_name'=>$this->_company['area_name'],'company_name'=>$this->_company['name'],'tel'=>$this->_company['tel'],'txt'=>  $this->_company['txt']));

        $this->tmpl = 'company/news.html';
    }

    public function newsDetail()
    {
        $id = (int) $this->_page;
        if (!$id) {
            $this->err->add('参数不正确', 211);
        }
        elseif (!$detail = K::M('company/news')->detail($id)) {
            $this->err->add('参数不正确', 211);
        }
        elseif (!$detail['audit']) {
            $this->err->add('该文章还不可阅读', 211);
        }
        else {
            $this->pagedata['detail'] = $detail;
            
            K::M('helper/seo')->init('company_newsDetail',array('title'=>$detail['title'], 'area_name'=>$this->_company['area_name'],'company_name'=>$this->_company['name'],'tel'=>$this->_company['tel'],'txt'=>  $this->_company['txt']));
            $this->tmpl = 'company/newsDetail.html';
        }
    }

    public function dianping()
    {
        $filter = $pager = array();
        $pager['page'] = max(intval($this->_page), 1);
        $pager['limit'] = $limit = 5;
        $filter['audit'] = 1;
        $filter['company_id'] = $this->_company_id;
        if ($items = K::M('company/dianping')->items($filter, array('id' => 'DESC'), $this->_page, $limit, $count)) {
            $pager['count'] = $count;
            $pager['pagebar'] = $this->mkpage($count, $limit, $this->_page, $this->mklink('company:dianping', array($this->_company_id, '{page}')), array());
        }
        $this->pagedata['items'] = $items;
        $this->pagedata['pager'] = $pager;
        $this->system->config->get('company_dianping');
         K::M('helper/seo')->init('company_dianping',array('area_name'=>$this->_company['area_name'],'company_name'=>$this->_company['name'],'tel'=>$this->_company['tel'],'txt'=>  $this->_company['txt']));
        $this->tmpl = 'company/dianping.html';
    }

    public function save()
    {
        if (empty($this->uid)) {
            $this->err->add('请登录后操作！', 101);
        }
        elseif (($audit = K::M('system/audit')->audit('dianping', $this->MEMBER)) == -1) {
            $this->err->add('很抱歉您所在的用户组没有权限操作', 201);
        }
        else {
            if ($data = $this->checksubmit('data')) {
                if (!$this->check_score($data)) {
                    $this->err->add('请选择您给' . $this->_company['name'] . '的评分', 211);
                }
                else {
                    $data['uid'] = $this->uid;
                    $data['company_id'] = $this->_company_id;
                    $data['audit'] = $audit;
                    $data['dateline'] = __TIME;
                    $data['create_ip'] = __IP;
                    unset($data['reply'], $data['replay_time'], $data['reply_ip']);
                    if ($id = K::M('company/dianping')->create($data)) {
                        if (!empty($data['company_id'])&&$audit) {
                            $update = K::M('company/dianping')->get_count_by_company_id($data['company_id']);
                            if (!empty($update)) {
                                K::M('company/company')->update($data['company_id'], $update);
                            }
                        }
                        $this->err->add('点评成功！');
                    
                    }
                }
            }
            else {
                $this->err->add('参数不正确', 211);
            }
        }
    }

    private function check_score($data)
    {

        if (empty($data['score1']) || $data['score1'] < 1 || $data['score1'] > 5)
            return false;
        if (empty($data['score2']) || $data['score2'] < 1 || $data['score2'] > 5)
            return false;
        if (empty($data['score3']) || $data['score3'] < 1 || $data['score3'] > 5)
            return false;
        if (empty($data['score4']) || $data['score4'] < 1 || $data['score4'] > 5)
            return false;
        if (empty($data['score5']) || $data['score5'] < 1 || $data['score5'] > 5)
            return false;
        return true;
    }

}
